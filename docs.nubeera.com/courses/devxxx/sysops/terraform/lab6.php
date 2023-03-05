<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Terraform</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Azure Virtual Machine">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <link id="theme-style" rel="stylesheet" href="../../../../assets/css/theme.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Terraform</strong><br><br>
                <ul>
                    <li><a href="index.php">Introduction</a></li>
                    <li><a href="prereqs.php">Pre-requisites</a></li>
                    <li><a href="lab1.php">Getting started - Lab 1</a></li>
                    <li><a href="lab2.php">Lab 2</a></li>
                    <li><a href="lab3.php">Lab 3</a></li>
                    <li><a href="lab4.php">Lab 4</a></li>
                    <li><a href="lab5.php">Lab 5</a></li>
                    <li><a href="lab6.php">Lab 6</a></li>
                    <li><a href="lab7.php">Lab 7</a></li>
                    <li><a href="lab8.php">Lab 8</a></li>
                    <li><a href="lab9.php">Lab 9</a></li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 6</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">DevOps</a></li>
                <li class="breadcrumb-item"><a href="../">SysOps</a></li>
                <li class="breadcrumb-item active">Terraform</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                <h4 class="nav__title">On this page</h4>
                </header>
                <ul class="toc__menu">
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#overview">Overview</a></li>
                    <li><a href="#remote-state">Remote state</a></li>
                    <li><a href="#updating-to-remote-backend">Updating to remote backend</a></li>
                    <li><a href="#lab-create-backend-state">Lab: Create backend state</a></li>
                    <li><a href="#scripted-remote-state-configuration">Scripted remote state configuration</a></li>
                    <li><a href="#lab-importing-resources">Lab: Importing resources</a></li>
                    <li><a href="#breaking-a-blob-lease-that-is-locking-the-state">Breaking a blob lease that is locking the state</a></li>
                    <li><a href="#end-of-lab-6">End of Lab 6</a></li>
                </ul>
                </nav>
                </aside>

                <h3 id="introduction">Introduction</h3>

                In this lab we will go a little deeper in understanding the Terraform state file. <br><br>

                We will also look at how you can configure remote state to protect the local file and make it usable in an environment with multiple Terraform admins. <br><br>

                We will also cover locking (and how to remove leases on Azure blob storage), as well as refreshing the state and importing existing resources into the state. <br><br>

                <h3 id="overview">Overview</h3>

                Terraform stores the state of your managed infrastructure from the last time Terraform was run. The local file is called terraform.tfstate. <br><br>

                When you run <code>terraform plan</code> it will refresh an in memory copy of the state for the planning step. Note that it won’t save that updated state to disk.


                <pre class=" language-bash"><blockquote class=" language-bash">terraform-labs$ terraform plan
Refreshing Terraform state in-memory prior to plan<span class="token punctuation">..</span>.
The refreshed state will be used to calculate this plan, but will not be
persisted to local or remote state storage.

random_string.webapprnd: Refreshing state<span class="token punctuation">..</span>. <span class="token punctuation">(</span>ID: brlvc8ak<span class="token punctuation">)</span>
random_string.rndstr: Refreshing state<span class="token punctuation">..</span>. <span class="token punctuation">(</span>ID: tu39fmjpgmcu<span class="token punctuation">)</span></blockquote></pre>

                When you run <code>terraform apply</code> then the state will be updated if changes have been made. The previous version will be saved as terraform.tfstate.backup. (You can use compare tools such as sdiff or vscode’s “Compare file with…” to see the changes in the JSON text files.) <br><br>

                You can initiate a refresh of the state by using <code>terraform state</code>. <br><br>

                Run <code>terraform state</code> to see the list of subcommands.

                <ul>
                    <li><code>terraform state list</code> will list the resources in the state file</li>
                    <li><code>terraform state show &lt;resourceTerraformId&gt;</code> to display the status</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">terraform<span class="token operator">-</span>labs$ terraform state list <span class="token operator">|</span> grep security
azurerm_network_security_group<span class="token punctuation">.</span><span class="token constant">AllowHTTP</span>
azurerm_network_security_group<span class="token punctuation">.</span><span class="token constant">AllowHTTPS</span>
azurerm_network_security_group<span class="token punctuation">.</span><span class="token constant">AllowRDP</span>
azurerm_network_security_group<span class="token punctuation">.</span><span class="token constant">AllowSQLServer</span>
azurerm_network_security_group<span class="token punctuation">.</span><span class="token constant">AllowSSH</span>
azurerm_network_security_rule<span class="token punctuation">.</span><span class="token constant">AllowHTTP</span>
azurerm_network_security_rule<span class="token punctuation">.</span><span class="token constant">AllowHTTPS</span>
azurerm_network_security_rule<span class="token punctuation">.</span><span class="token constant">AllowRDP</span>
azurerm_network_security_rule<span class="token punctuation">.</span><span class="token constant">AllowSQLServer</span>
azurerm_network_security_rule<span class="token punctuation">.</span><span class="token constant">AllowSSH</span>
terraform<span class="token operator">-</span>labs$ terraform state show azurerm_network_security_rule<span class="token punctuation">.</span><span class="token constant">AllowHTTPS</span>
id                             <span class="token operator">=</span> <span class="token operator">/</span>subscriptions<span class="token operator">/</span><span class="token number">2</span>d31be49<span class="token operator">-</span>d999<span class="token operator">-</span><span class="token number">4415</span><span class="token operator">-</span>bb65<span class="token operator">-</span><span class="token number">8</span>aec2c90ba62<span class="token operator">/</span>resourceGroups<span class="token operator">/</span><span class="token constant">NSGs</span><span class="token operator">/</span>providers<span class="token operator">/</span><span class="token constant">Microsoft</span><span class="token punctuation">.</span><span class="token constant">Network</span><span class="token operator">/</span>networkSecurityGroups<span class="token operator">/</span><span class="token constant">AllowHTTPS</span><span class="token operator">/</span>securityRules<span class="token operator">/</span><span class="token constant">AllowHTTPS</span>
access                         <span class="token operator">=</span> <span class="token constant">Allow</span>
description                    <span class="token operator">=</span>
destination_address_prefix     <span class="token operator">=</span> <span class="token operator">*</span>
destination_address_prefixes<span class="token punctuation">.</span><span class="token comment"># = 0</span>
destination_port_range         <span class="token operator">=</span> <span class="token number">443</span>
destination_port_ranges<span class="token punctuation">.</span><span class="token comment">#      = 0</span>
direction                      <span class="token operator">=</span> <span class="token constant">Inbound</span>
name                           <span class="token operator">=</span> <span class="token constant">AllowHTTPS</span>
network_security_group_name    <span class="token operator">=</span> <span class="token constant">AllowHTTPS</span>
priority                       <span class="token operator">=</span> <span class="token number">1001</span>
protocol                       <span class="token operator">=</span> <span class="token constant">Tcp</span>
resource_group_name            <span class="token operator">=</span> <span class="token constant">NSGs</span>
source_address_prefix          <span class="token operator">=</span> <span class="token operator">*</span>
source_address_prefixes<span class="token punctuation">.</span><span class="token comment">#      = 0</span>
source_port_range              <span class="token operator">=</span> <span class="token operator">*</span>
source_port_ranges<span class="token punctuation">.</span><span class="token comment">#           = 0</span></blockquote></pre>

                <ul>
                    <li><code>terraform state pull</code> will read the state file and send to stdout
                        <ul>
                            <li>pipe through to <code>jq</code> to filter the JSON output</li>
                        </ul>
                    </li>
                </ul>


                <pre class=" language-json"><blockquote class=" language-json">terraform-labs$ terraform state pull | jq '.modules<span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span>.resources.<span class="token string">"azurerm_network_security_rule.AllowHTTPS"</span>'
<span class="token punctuation">{</span>
<span class="token property">"type"</span><span class="token operator">:</span> <span class="token string">"azurerm_network_security_rule"</span><span class="token punctuation">,</span>
<span class="token property">"depends_on"</span><span class="token operator">:</span> <span class="token punctuation">[</span>
  <span class="token string">"azurerm_network_security_group.AllowHTTPS"</span><span class="token punctuation">,</span>
  <span class="token string">"azurerm_resource_group.nsgs"</span>
<span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token property">"primary"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
  <span class="token property">"id"</span><span class="token operator">:</span> <span class="token string">"/subscriptions/2d31be49-d999-4415-bb65-8aec2c90ba62/resourceGroups/NSGs/providers/Microsoft.Network/networkSecurityGroups/AllowHTTPS/securityRules/AllowHTTPS"</span><span class="token punctuation">,</span>
  <span class="token property">"attributes"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
    <span class="token property">"access"</span><span class="token operator">:</span> <span class="token string">"Allow"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
    <span class="token property">"destination_address_prefix"</span><span class="token operator">:</span> <span class="token string">"*"</span><span class="token punctuation">,</span>
    <span class="token property">"destination_address_prefixes.#"</span><span class="token operator">:</span> <span class="token string">"0"</span><span class="token punctuation">,</span>
    <span class="token property">"destination_port_range"</span><span class="token operator">:</span> <span class="token string">"443"</span><span class="token punctuation">,</span>
    <span class="token property">"destination_port_ranges.#"</span><span class="token operator">:</span> <span class="token string">"0"</span><span class="token punctuation">,</span>
    <span class="token property">"direction"</span><span class="token operator">:</span> <span class="token string">"Inbound"</span><span class="token punctuation">,</span>
    <span class="token property">"id"</span><span class="token operator">:</span> <span class="token string">"/subscriptions/2d31be49-d999-4415-bb65-8aec2c90ba62/resourceGroups/NSGs/providers/Microsoft.Network/networkSecurityGroups/AllowHTTPS/securityRules/AllowHTTPS"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"AllowHTTPS"</span><span class="token punctuation">,</span>
    <span class="token property">"network_security_group_name"</span><span class="token operator">:</span> <span class="token string">"AllowHTTPS"</span><span class="token punctuation">,</span>
    <span class="token property">"priority"</span><span class="token operator">:</span> <span class="token string">"1001"</span><span class="token punctuation">,</span>
    <span class="token property">"protocol"</span><span class="token operator">:</span> <span class="token string">"Tcp"</span><span class="token punctuation">,</span>
    <span class="token property">"resource_group_name"</span><span class="token operator">:</span> <span class="token string">"NSGs"</span><span class="token punctuation">,</span>
    <span class="token property">"source_address_prefix"</span><span class="token operator">:</span> <span class="token string">"*"</span><span class="token punctuation">,</span>
    <span class="token property">"source_address_prefixes.#"</span><span class="token operator">:</span> <span class="token string">"0"</span><span class="token punctuation">,</span>
    <span class="token property">"source_port_range"</span><span class="token operator">:</span> <span class="token string">"*"</span><span class="token punctuation">,</span>
    <span class="token property">"source_port_ranges.#"</span><span class="token operator">:</span> <span class="token string">"0"</span>
  <span class="token punctuation">}</span><span class="token punctuation">,</span>
  <span class="token property">"meta"</span><span class="token operator">:</span> <span class="token punctuation">{</span><span class="token punctuation">}</span><span class="token punctuation">,</span>
  <span class="token property">"tainted"</span><span class="token operator">:</span> <span class="token boolean">false</span>
<span class="token punctuation">}</span><span class="token punctuation">,</span>
<span class="token property">"deposed"</span><span class="token operator">:</span> <span class="token punctuation">[</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token property">"provider"</span><span class="token operator">:</span> <span class="token string">"provider.azurerm"</span>
<span class="token punctuation">}</span></blockquote></pre>

                There are a few more commands but we’ll cover those later.

                <blockquote>
                    Note that the state file can contain some sensitive data such as initial passwords, keys etc. Limit access to the directory and read access to the file as appropriate.
                </blockquote>

                <h3 id="remote-state">Remote state</h3>

                Terraform enables you to configure a remote state location so that your local terraform.tfstate file is protected. We will do this now for our local state file to back it off to Azure blob storage. Whenever state is updated then it will be saved both locally and remotely, and therefore adds a layer of protection. <br><br>

                In terms of terraform configuration we make use of the <code>terraform</code> high level keyword, and configure a backend stanza for the provider. Below is an example:


                <pre class=" language-ruby"><blockquote class=" language-ruby">terraform <span class="token punctuation">{</span>
backend <span class="token string">"azurerm"</span> <span class="token punctuation">{</span>
storage_account_name <span class="token operator">=</span> <span class="token string">"terraformstatehco9vwseg1"</span>
container_name       <span class="token operator">=</span> <span class="token string">"tfstate"</span>
key                  <span class="token operator">=</span> <span class="token string">"2d31be49-d999-4415-bb65-8aec2c90ba62.terraform.tfstate"</span>
access_key           <span class="token operator">=</span> <span class="token string">"kFTe6d/em6w2o01CjpBLsVbaJTasjLBXf9J9m/Of7zEqHexeOwoSbmPBipvaBRQ48LJ1OUwYISz3GH+1IvE4sw=="</span>
<span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>

                The storage account name, container name and storage account access key are all values from the Azure storage account service. <br><br>

                The “key” is the <strong>name</strong> of the blob file that Terraform will create within the container for the remote state.

                <br><br><img src="https://archive.azurecitadel.com/automation/terraform/images/tfstateContainer.png" alt="Container Name and &quot;Key&quot;">

                You get to choose this. I have used the subscriptionId as part of the naming convention, but essentially it needs to be unique and tied to the terraform directory you are using. If you have multiple Terraform directories for a particular subscription then you could use “terraform.tfstate” as the key (blob name) for each of them if your container name if you had a unique and different container_name for each. (The file locking is per blob.) <br><br>

                The access key is in the Access Keys part of the storage account blade. (The sensitive values in the screenshot have been masked by the excellent Azure Mask extension for Chrome.)

                <br><br><img src="https://archive.azurecitadel.com/automation/terraform/images/tfstateAccessKey.png" alt="Access Key">

                There are a number of key benefits to using remote state, and in using Azure Storage for the remote state storage:

                <ol>
                    <li>The definitive state resides in the cloud, supporting a distributed set of Terraform admins</li>
                    <li>Azure Storage is encrypted by default and supports BYOK as well as rich RBAC support</li>
                    <li>Azure Storage supports leases against the blobs which are used by Terraform as a locking mechanism for activities that write to state</li>
                </ol>

                <h3 id="updating-to-remote-backend">Updating to remote backend</h3>

                Once you have created the backend stanza then the terraform workflow will move you to the new configuration.


                <pre class=" language-bash"><blockquote class=" language-bash">terraform-labs$ terraform init

Initializing the backend<span class="token punctuation">..</span>.
Do you want to copy existing state to the new backend?
<span class="token keyword">:</span>
Successfully configured the backend <span class="token string">"azurerm"</span><span class="token operator">!</span> Terraform will automatically
use this backend unless the backend configuration changes.</blockquote></pre>

                <ul>
                    <li>Run the <code>terraform plan</code> step</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">terraform-labs$ terraform plan
Acquiring state lock. This may take a few moments<span class="token punctuation">..</span>.
<span class="token keyword">:</span></blockquote></pre>

                Once it has completed then you can use the portal, CLI or Azure Storage Explorer tools to validate the container and blob.

                <h3 id="lab-create-backend-state"><strong>Lab</strong>: Create backend state</h3>

                OK, follow the following steps to manually set up remote state for your terraform-labs area.

                <ul>
                    <li><strong>Log in as the service principal</strong>
                        <ul>
                            <li><code>az login --help</code> will remind you of the switches to login with service principals</li>
                            <li>Your provider.tf should include the values you need to log in</li>
                        </ul>
                    </li>
                    <li><strong>Create a storage account</strong>
                        <ul>
                            <li>Needs a globally unique name of 3-24 lowercase alphanumerical characters</li>
                            <li>Use <code>az storage --help</code></li>
                        </ul>
                    </li>
                    <li><strong>Copy the storage account key</strong></li>
                    <li><strong>Create a container</strong></li>
                    <li><strong>Create the terraform backend stanza</strong></li>
                    <li><strong>Run the terraform init, plan and apply workflow</strong></li>
                    <li><strong>Check the storage account in the portal</strong></li>
                </ul>

                If you get stuck then the key commands are listed at the bottom of the lab, or you can view the script in the next section if you are comfortable with Bash scripting.

                <h3 id="scripted-remote-state-configuration">Scripted remote state configuration</h3>

                If you want to automate the configuration of remote state to use Azure Storage accounts then feel free to make use of the following script: <br><br>

                The script assumes that you are running it within your Terraform directory. It will:

                <ol>
                    <li>Create a <em>tfstate</em> resource group in nWest Europe</li>
                    <li>Create a storage account with a name of tfstate-&lt;8 char random string&gt;</li>
                    <li>Create a container called “tfstate-&lt;subscriptionId&gt;-&lt;dirname&gt;”</li>
                    <li>Create a backend.tf file with the backen stanza</li>
                </ol>

                The following commands will download it to your current directory. You can then run it directly or customise it further.


                <pre class=" language-bash"><blockquote class=" language-bash">uri<span class="token operator">=</span>https://raw.githubusercontent.com/azurecitadel/azurecitadel.github.io/master/automation/terraform/createTerraformBackend.sh
<span class="token function">curl</span> -sL <span class="token variable">$uri</span> <span class="token operator">&gt;</span> createTerraformBackend.sh <span class="token operator">&amp;&amp;</span> <span class="token function">chmod</span> 750 createTerraformBackend.sh</blockquote></pre>

                These commands assume that you are in your terraform-labs directory and you are logged in to Azure using the Service Principal.

                <h3 id="lab-importing-resources"><strong>Lab</strong>: Importing resources</h3>

                Another new command for this lab is <code>terraform import</code>. This is used to import existing resources into the Terraform state. <br><br>

                We’ll do this with something nice and harmless like an empty resource group to demonstrate the process. We’ll put it into its own file called import.tf so that we can delete it easily.

                <ul>
                    <li>Create a resource group: <code>az group create --name deleteme --location westeurope</code></li>
                    <li>Grab the ID for the azure resource: <code>id=$(az group show --name deleteme --query id --output tsv)</code></li>
                    <li>Create an empty stanza for the resource in a new import.tf file</li>
                </ul>


                <pre class=" language-yaml"><blockquote class=" language-yaml">resource "azurerm_resource_group" "deleteme" <span class="token punctuation">{</span><span class="token punctuation">}</span></blockquote></pre>

                <ul>
                    <li>Run the import command: <code>terraform import azurerm_resource_group.deleteme $id</code></li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">terraform-labs$ terraform <span class="token function">import</span> azurerm_resource_group.deleteme <span class="token variable">$id</span>
Acquiring state lock. This may take a few moments<span class="token punctuation">..</span>.
azurerm_resource_group.deleteme: Importing from ID <span class="token string">"/subscriptions/2d31be49-d999-4415-bb65-8aec2c90ba62/resourceGroups/deleteme"</span><span class="token punctuation">..</span>.
azurerm_resource_group.deleteme: Import complete<span class="token operator">!</span>
Imported azurerm_resource_group <span class="token punctuation">(</span>ID: /subscriptions/2d31be49-d999-4415-bb65-8aec2c90ba62/resourceGroups/deleteme<span class="token punctuation">)</span>
azurerm_resource_group.deleteme: Refreshing state<span class="token punctuation">..</span>. <span class="token punctuation">(</span>ID: /subscriptions/2d31be49-d999-4415-bb65-8aec2c90ba62/resourceGroups/deleteme<span class="token punctuation">)</span>

Import successful<span class="token operator">!</span>

The resources that were imported are shown above. These resources are now <span class="token keyword">in</span>
your Terraform state and will henceforth be managed by Terraform.</blockquote></pre>

                <ul>
                    <li>Run <code>terraform plan</code> and you should see some errors as our block is not populated</li>
                    <li>Run <code>terraform state show azurerm_resource_group.deleteme</code></li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash"><span class="token function">id</span>       <span class="token operator">=</span> /subscriptions/2d31be49-d999-4415-bb65-8aec2c90ba62/resourceGroups/deleteme
location <span class="token operator">=</span> westeurope
name     <span class="token operator">=</span> deleteme
tags.%   <span class="token operator">=</span> 0</blockquote></pre>

                <ul>
                    <li>Add in the name argument, and the location using the loc variable</li>
                    <li>Rerun <code>terraform plan</code> and it should show no errors and no planned changes</li>
                </ul>

                The resource is now fully imported and safely under the control of Terraform.

                <ul>
                    <li>Add in the tags argument and variable</li>
                    <li>Rerun <code>terraform plan</code> and then <code>terraform apply</code> to apply that change</li>
                    <li>Now delete the import.tf file</li>
                    <li>Rerun <code>terraform plan</code> and then <code>terraform apply</code> to remove the delete resource group</li>
                </ul>

                <blockquote>
                    Note that in the future it is planned that Terraform will be able to automatically generate resource stanzas.
                </blockquote>

                <h3 id="breaking-a-blob-lease-that-is-locking-the-state">Breaking a blob lease that is locking the state</h3>

                There is a possibility that you end up with an unwanted lease on your remote state blob file. Certain terraform commands will therefore fail as they cannot lock the state. <br><br>

                Normally when you acquire a lease on blob storage you get a lease ID, and you can then use that lease ID to release the lock. As Terraform initially acquired the lease then you don’t have the lease ID and therefore you have to break it. <br><br>

                Below are the commands to confirm that there is a lease in effect and then to break the lease. <br><br>

                First, set the environment variables (used by the Azure CLI storage commands) and some standard Bash variables based on the values you have in your backend.tf.


                <pre class=" language-bash"><blockquote class=" language-bash"><span class="token function">export</span> AZURE_STORAGE_ACCOUNT<span class="token operator">=</span><span class="token string">"&lt;storage_account_name&gt;"</span>
<span class="token function">export</span> AZURE_STORAGE_KEY<span class="token operator">=</span><span class="token string">"&lt;access_key&gt;"</span>
containerName<span class="token operator">=</span><span class="token operator">&lt;</span>container_name<span class="token operator">&gt;</span>
blobName<span class="token operator">=</span><span class="token operator">&lt;</span>key<span class="token operator">&gt;</span></blockquote></pre>

                Check the current status of the blob lease using the following command:


                <pre class=" language-bash"><blockquote class=" language-bash">az storage blob show --container-name <span class="token variable">$containerName</span> --name <span class="token variable">$blobName</span> --query properties.lease</blockquote></pre>

                Example output below. Note the status of locked.


                <pre class=" language-json"><blockquote class=" language-json"><span class="token punctuation">{</span>
<span class="token property">"duration"</span><span class="token operator">:</span> <span class="token string">"infinite"</span><span class="token punctuation">,</span>
<span class="token property">"state"</span><span class="token operator">:</span> <span class="token string">"leased"</span><span class="token punctuation">,</span>
<span class="token property">"status"</span><span class="token operator">:</span> <span class="token string">"locked"</span>
<span class="token punctuation">}</span></blockquote></pre>

                The following command will break the lease:


                <pre class=" language-bash"><blockquote class=" language-bash">az storage blob lease <span class="token keyword">break</span> --container-name <span class="token variable">$containerName</span> --blob-name <span class="token variable">$blobName</span></blockquote></pre>

                Recall the blob show command to see the status of the lease. It should be the same as the following JSON:


                <pre class=" language-json"><blockquote class=" language-json"><span class="token punctuation">{</span>
<span class="token property">"duration"</span><span class="token operator">:</span> <span class="token null">null</span><span class="token punctuation">,</span>
<span class="token property">"state"</span><span class="token operator">:</span> <span class="token string">"broken"</span><span class="token punctuation">,</span>
<span class="token property">"status"</span><span class="token operator">:</span> <span class="token string">"unlocked"</span>
<span class="token punctuation">}</span></blockquote></pre>

                It is important to first check that the lease is definitely a fault to be cleared, and not the result of another admin applying a change. <br><br>

                You may use the following commands to download an example script to break the lease based on your backend.tf:


                <pre class=" language-bash"><blockquote class=" language-bash">uri<span class="token operator">=</span>https://raw.githubusercontent.com/azurecitadel/azurecitadel.github.io/master/automation/terraform/breakStateLock.sh
<span class="token function">curl</span> -sL <span class="token variable">$uri</span> <span class="token operator">&gt;</span> breakStateLock.sh <span class="token operator">&amp;&amp;</span> <span class="token function">chmod</span> 750 breakStateLock.sh</blockquote></pre>

                <h3 id="end-of-lab-6">End of Lab 6</h3>

                We have reached the end of the lab. You have configured remote state into an Azure storage account and imported an existing resource into the configuration. <br><br>

                Your .tf files should look similar to those in <a href="https://github.com/richeney/terraform-pre-012-lab6">https://github.com/richeney/terraform-pre-012-lab6</a>. (I have retained the import.tf for reference.) <br><br>

                In the next lab we will look at some of the additional areas to consider with multi-tenanted environments, including the use of Service Principals and referencing read only states. We will also look at some of the other ways of managing environments, such as the Terraform Marketplace offering in Azure, and Hashicorp’s Terraform Enterprise.
            </div>
        </div>
        <?php require "../../../../templates/footer_outer.php" ?>

    </div>

    <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script defer src="../../../../assets/fontawesome/js/all.min.js"></script><!-- footer social icons -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <script src="https://www.nubeera.com/js/navmenu.js"></script>
    <script>
        function openNav() {
            var x = document.getElementById("side-panel-box");
            if (x.style.left == "0px") {
                x.style.left = "-25%";
                $('#side-panel-toggle').css("left", "101%");
                $('#content-box').css("marginRight", "12%");
                $('#content-box').css('marginLeft', '12%');
                $('#side-panel-toggle').html("<i class='fa fa-chevron-right' aria-hidden='true'></i>");
            } else {
                x.style.left = "0px";
                $('#side-panel-toggle').css("left", "80%");
                $('#content-box').css("marginRight", "");
                $('#content-box').css('marginLeft', '24%');
                $('#side-panel-toggle').html("<i class='fa fa-chevron-left' aria-hidden='true'></i>");
            }
        }
        var x = window.matchMedia("(max-width: 750px)");
        myFunction(x); // Call listener function at run time
        x.addListener(myFunction);

        function myFunction(x) {
            if (x.matches) { // If media query matches
                $('#modal-sidepanel').attr('class', 'modal');
            } else {
                $('#modal-sidepanel').attr('class', '');
            }
        }
    </script>
</body>

</html>