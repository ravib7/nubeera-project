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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">LAB 1</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">DevOps</a></li>
                <li class="breadcrumb-item"><a href="../">SysOps</a></li>
                <li class="breadcrumb-item active">Terraform</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <section class="page__content" itemprop="text">

                    <aside class="sidebar__right sticky">
                        <nav class="toc">
                            <h4 class="nav__title">On this page</h4>
                            <ul class="toc__menu">
                                <li><a href="#introduction">Introduction</a></li>
                                <li><a href="#getting-started">Getting started</a></li>
                                <li><a href="#create-a-simple-maintf-file">Create a simple main.tf file</a></li>
                                <li><a href="#the-terraform-workflow">The Terraform workflow</a></li>
                                <li><a href="#--terraform-init">- terraform init</a></li>
                                <li><a href="#--terraform-plan">- terraform plan</a></li>
                                <li><a href="#--terraform-apply">- terraform apply</a></li>
                                <li><a href="#--terraform-destroy">- terraform destroy</a></li>
                                <li><a href="#end-of-lab-1">End of Lab 1</a></li>
                            </ul>
                        </nav>
                    </aside>

                    <h3 id="introduction">Introduction</h3>

                    This is a short and simple lab to introduce you to the Terraform workflow and HCL file format. Everything will be run within the bash version of the Azure Cloud Shell which already has Terraform installed and maintained for you, so all you need for this lab is an active Azure subscription. <br><br>

                    There are three ways of authenticating the Terraform provider to Azure:

                    <ol>
                        <li>Azure CLI</li>
                        <li>Managed System Identity (MSI)</li>
                        <li>Service Principals</li>
                    </ol>

                    This lab will be run within Cloud Shell. Cloud Shell runs on a small linux container (the image is held on DockerHub) and uses MSI to authenticate. Essentially the whole container is authenticated using your credentials and Terraform leverages MSI. We will move through the other authentication types during the course of the labs and will discuss the use cases for each. <br><br>

                    Once you have started your Cloud Shell session you will be automatically logged in to Azure. Terraform makes use of that authentication and context, so you will be good to go.

                    <h3 id="getting-started">Getting started</h3>

                    Open up an Azure Cloud Shell. You can do this from within the portal by clicking on the <strong><code>&gt;_</code></strong> icon at the top, but for an (almost) full screen Cloud Shell session then open up a new tab and go to <a href="https://shell.azure.com">https://shell.azure.com</a>.

                    You can show the account details for the subscription using <code>az account show</code>:

                    <pre class=" command-line language-bash" data-output="2-99" data-prompt="$"><blockquote class=" language-bash"><span class="command-line-prompt"><span data-prompt="$"></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span>az account show --output jsonc
{
"environmentName": "AzureCloud",
"id": "2d31be49-d999-4415-bb65-8aec2c90ba62",
"isDefault": true,
"name": "Visual Studio Enterprise",
"state": "Enabled",
"tenantId": "76f988bf-86f1-41af-91ab-2d7cd011db47",
"user": {
  "cloudShellID": true,
  "name": "richeney@microsoft.com",
  "type": "user"
}
}</blockquote></pre>

                    If you have multiple subscriptions then you can switch using <code>az account list --output table</code> and <code>az account set --subscription &lt;subscriptionId&gt;</code>. If you are doing that regularly then you may want to add an alias to the bottom of your ~/.bashrc file, e.g. <code>alias vs='az account set --subscription &lt;subscriptionId&gt;; az account show'</code>. <br><br>

                    Type <code>terraform</code> to see the main help page:

                    <div class="code-toolbar">
                        <pre class=" command-line language-bash" data-output="2-99" data-prompt="$"><blockquote class=" language-bash"><span class="command-line-prompt"><span data-prompt="$"></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span>terraform
Usage: terraform [--version] [--help]  [args]

The available commands for execution are listed below.
The most common, useful commands are shown first, followed by
less common or more advanced commands. If you're just getting
started with Terraform, stick with the common commands. For the
other commands, please read the help and docs before usage.

Common commands:
  apply              Builds or changes infrastructure
  console            Interactive console for Terraform interpolations
  destroy            Destroy Terraform-managed infrastructure
  env                Workspace management
  fmt                Rewrites config files to canonical format
  get                Download and install modules for the configuration
  graph              Create a visual graph of Terraform resources
  import             Import existing infrastructure into Terraform
  init               Initialize a Terraform working directory
  output             Read an output from a state file
  plan               Generate and show an execution plan
  providers          Prints a tree of the providers used in the configuration
  push               Upload this Terraform module to Atlas to run
  refresh            Update local state file against real resources
  show               Inspect Terraform state or plan
  taint              Manually mark a resource for recreation
  untaint            Manually unmark a resource as tainted
  validate           Validates the Terraform files
  version            Prints the Terraform version
  workspace          Workspace management

All other commands:
  debug              Debug output management (experimental)
  force-unlock       Manually unlock the terraform state
  state              Advanced state management</blockquote></pre>
                    </div>

                    <h3 id="create-a-simple-maintf-file">Create a simple main.tf file</h3>

                    Terraform uses its own file format, called HCL (Hashicorp Configuration Language). This is very similar to YAML. We’ll create a main.tf file with a resource group and storage account:

                    <ul>
                        <li>Create a terraform-labs directory in your home directory (<code>mkdir terraform-labs</code>)</li>
                        <li>Change to the new directory (<code>cd terraform-labs</code>)</li>
                        <li>Create an empty main.tf file (<code>touch main.tf</code>)</li>
                        <li>Copy the text from the codeblock below</li>
                    </ul>

                    <div class="code-toolbar">
                        <pre class=" language-hcl"><blockquote class=" language-hcl"><span class="token keyword">provider<span class="token type variable"> "azurerm" </span></span><span class="token punctuation">{</span>
<span class="token property">version</span> <span class="token punctuation">=</span> <span class="token string">"~&gt; 1.33.1"</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"azurerm_resource_group"</span></span> <span class="token string">"lab1"</span> <span class="token punctuation">{</span>
<span class="token property">name</span>     <span class="token punctuation">=</span> <span class="token string">"terraform-lab1"</span>
<span class="token property">location</span> <span class="token punctuation">=</span> <span class="token string">"West Europe"</span>
<span class="token property">tags</span> <span class="token punctuation">=</span> <span class="token punctuation">{</span>
  <span class="token property">environment</span> <span class="token punctuation">=</span> <span class="token string">"training"</span>
<span class="token punctuation">}</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"azurerm_storage_account"</span></span> <span class="token string">"lab1sa"</span> <span class="token punctuation">{</span>
<span class="token property">name</span>                     <span class="token punctuation">=</span> <span class="token string">"richeneyterraformlab1"</span>
<span class="token property">resource_group_name</span>      <span class="token punctuation">=</span> <span class="token string">"<span class="token interpolation"><span class="token punctuation">$</span><span class="token punctuation">{</span>azurerm_resource_group<span class="token punctuation">.</span>lab<span class="token number">1.</span>name<span class="token punctuation">}</span></span>"</span>
<span class="token property">location</span>                 <span class="token punctuation">=</span> <span class="token string">"westeurope"</span>
<span class="token property">account_tier</span>             <span class="token punctuation">=</span> <span class="token string">"Standard"</span>
<span class="token property">account_replication_type</span> <span class="token punctuation">=</span> <span class="token string">"LRS"</span>
<span class="token punctuation">}</span></blockquote></pre>
                    </div>

                    <ul>
                        <li>Start vscode in the Cloud Shell (<code>code .</code>)</li>
                        <li>Click on the main.tf file in the explorer pane</li>
                        <li>Paste in the contents of the clipboard</li>
                        <li>Change the storage account name (‘richeneyterraformlab1’) to something unique
                            <ul>
                                <li>Storage is a PaaS service with a public endpoint</li>
                                <li>The storage account name forms part of the FQDN, and needs to be globally unique</li>
                            </ul>
                        </li>
                        <li>Save the file (<code>CTRL</code>+<code>S</code>)
                            <ul>
                                <li>The round dot on the file name tab denotes unsaved changes</li>
                            </ul>
                        </li>
                    </ul>

                    Let’s look more closely at the second resource block (or stanza) for the <strong>storage account</strong>.

                    The Terraform top level <strong>keyword</strong> is <code>resource</code>. We’ll cover the various top level keywords as we go through the labs. <br><br>

                    The next value, <code>azurerm_storage_account</code>, is the <strong>resource type</strong>. Resource types are always prefixed with the provider, which is azurerm in this case. You can have multiple resources of the same type in a Terraform configuration, and they can make use of different providers. <br><br>

                    The next value, <code>lab1sa</code>, is the Terraform <strong>resource id</strong>. These are used within Terraform’s graph database of dependencies, and so the combination of resource type and id (<code>azurerm_storage_account.lab1sa</code>) must be unique. Therefore if you had multiple Azure storage accounts then they would require different ids. If you had different resource types then they could have the same id shortnames as the resource type and id combination would still be unique. The ids can be comprised of alphanumerics, underscores or dashes. <br><br>

                    The key-value pairs within the curly braces are the arguments. Note that the indentation is very important in HCL. A list of key-value pairs is called a map. (You may be used to calling them dictionaries, hashes or objects, depending on your point of reference.) Note the lack of commas in the list - again this is not required in standard HCL. <br><br>

                    Most of the values are standard strings, except for the storage account resource group name. This uses interpolation, and will evaluate everything in between the dollar and curly braces: <code>${ ... }</code>. <br><br>

                    Using <code>"${azurerm_resource_group.lab1.name}"</code> will set the value of the resource group name to match the resource group resource stanza above, i.e. ‘terraform-lab1’. <br><br>

                    Using the reference to the other resource also sets an implicit dependency, so that Terraform understands that the storage account should only be created once the resource group exists.

                    <ul>
                        <li>Close the vscode pane (<code>CTRL</code>+<code>Q</code>)</li>
                    </ul>

                    <hr>

                    <h3 id="the-terraform-workflow">The Terraform workflow</h3>

                    The main Terraform workflow is shown below:

                    <img src="https://archive.azurecitadel.com/automation/terraform/images/terraform.png" alt="Terraform Workflow">

                    Let’s step through it.

                    <h3 id="--terraform-init">- terraform init</h3>

                    The <code>terraform init</code> command looks through all of the *.tf files in the current working directory and automatically downloads any of the providers required for them. Run it now.

                    <div class="code-toolbar">
                        <pre class=" command-line language-bash" data-output="2-99" data-prompt="$"><blockquote class=" language-bash"><span class="command-line-prompt"><span data-prompt="$"></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span>terraform init

Initializing provider plugins...
- Checking for available provider plugins on https://releases.hashicorp.com...
- Downloading plugin for provider "azurerm" (1.13.0)...

The following providers do not have any version constraints in configuration,
so the latest version was installed.

To prevent automatic upgrades to new major versions that may contain breaking
changes, it is recommended to add version = "..." constraints to the
corresponding provider blocks in configuration, with the constraint strings
suggested below.

* provider.azurerm: version = "~&gt; 1.13"

Terraform has been successfully initialized!

You may now begin working with Terraform. Try running "terraform plan" to see
any changes that are required for your infrastructure. All Terraform commands
should now work.

If you ever set or change modules or backend configuration for Terraform,
rerun this command to reinitialize your working directory. If you forget, other
commands will detect it and remind you to do so if necessary.</blockquote></pre>

                    </div>

                    <ul>
                        <li>List out all of the files in the current directory (<code>find .</code>)</li>
                    </ul>

                    As you can see it has downloaded the provider.azurerm into the <code>.terraform/plugins</code> area which we specified in out main.tf file. The azurerm_resource_group and azurerm_storage_account are both resource types within the azurerm Terraform provider.

                    <h3 id="--terraform-plan">- terraform plan</h3>

                    Run the <code>terraform plan</code>.

                    <div class="code-toolbar">
                        <pre class=" command-line language-bash" data-output="2-99" data-prompt="$"><blockquote class=" language-bash"><span class="command-line-prompt"><span data-prompt="$"></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span>terraform plan
Refreshing Terraform state in-memory prior to plan...
The refreshed state will be used to calculate this plan, but will not be
persisted to local or remote state storage.


------------------------------------------------------------------------

An execution plan has been generated and is shown below.
Resource actions are indicated with the following symbols:
+ create

Terraform will perform the following actions:

+ azurerm_resource_group.lab1
    id:                               <computed>
    location:                         "westeurope"
    name:                             "terraform-lab1"
    tags.%:                           "1"
    tags.environment:                 "training"

+ azurerm_storage_account.lab1sa
    id:                               <computed>
    access_tier:                      <computed>
    account_encryption_source:        "Microsoft.Storage"
    account_kind:                     "Storage"
    account_replication_type:         "LRS"
    account_tier:                     "Standard"
    enable_blob_encryption:           "true"
    enable_file_encryption:           "true"
    identity.#:                       <computed>
    location:                         "westeurope"
    name:                             "richeneyterraformlab1"
    primary_access_key:               <computed>
    primary_blob_connection_string:   <computed>
    primary_blob_endpoint:            <computed>
    primary_connection_string:        <computed>
    primary_file_endpoint:            <computed>
    primary_location:                 <computed>
    primary_queue_endpoint:           <computed>
    primary_table_endpoint:           <computed>
    resource_group_name:              "terraform-lab1"
    secondary_access_key:             <computed>
    secondary_blob_connection_string: <computed>
    secondary_blob_endpoint:          <computed>
    secondary_connection_string:      <computed>
    secondary_location:               <computed>
    secondary_queue_endpoint:         <computed>
    secondary_table_endpoint:         <computed>
    tags.%:                           <computed>


Plan: 2 to add, 0 to change, 0 to destroy.

------------------------------------------------------------------------

Note: You didn't specify an "-out" parameter to save this plan, so Terraform
can't guarantee that exactly these actions will be performed if
"terraform apply" is subsequently run.</computed></computed></computed></computed></computed></computed></computed></computed></computed></computed></computed></computed></computed></computed></computed></computed></computed></computed></computed></computed></blockquote></pre>
                    </div>

                    This is a dry run and shows which actions will be made. This allows manual verification of the changes before running the apply step.

                    <h3 id="--terraform-apply">- terraform apply</h3>

                    Run the <code>terraform apply</code> command to deploy the resources. <br><br>

                    You will see the same output as the <code>terraform plan</code> command, but will also be prompted for confirmation that you want to apply those changes. Type <code>yes</code>.

                    <div class="code-toolbar">
                        <pre class=" command-line language-bash" data-output="2-99" data-prompt="$"><blockquote class=" language-bash"><span class="command-line-prompt"><span data-prompt="$"></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span>terraform apply

:

Plan: 2 to add, 0 to change, 0 to destroy.

Do you want to perform these actions?
Terraform will perform the actions described above.
Only 'yes' will be accepted to approve.

Enter a value: yes

azurerm_resource_group.lab1: Creating...
location:         "" =&gt; "westeurope"
name:             "" =&gt; "terraform-lab1"
tags.%:           "" =&gt; "1"
tags.environment: "" =&gt; "training"
azurerm_resource_group.lab1: Creation complete after 0s (ID: /subscriptions/2d31be49-d959-4415-bb65-...2c90ba62/resourceGroups/terraform-lab1)
azurerm_storage_account.lab1sa: Creating...
access_tier:                      "" =&gt; "<computed>"
account_encryption_source:        "" =&gt; "Microsoft.Storage"
account_kind:                     "" =&gt; "Storage"
account_replication_type:         "" =&gt; "LRS"
account_tier:                     "" =&gt; "Standard"
enable_blob_encryption:           "" =&gt; "true"
enable_file_encryption:           "" =&gt; "true"
identity.#:                       "" =&gt; "<computed>"
location:                         "" =&gt; "westeurope"
name:                             "" =&gt; "richeneyterraformlab1"
primary_access_key:               "<sensitive>" =&gt; "<sensitive>"
primary_blob_connection_string:   "<sensitive>" =&gt; "<sensitive>"
primary_blob_endpoint:            "" =&gt; "<computed>"
primary_connection_string:        "<sensitive>" =&gt; "<sensitive>"
primary_file_endpoint:            "" =&gt; "<computed>"
primary_location:                 "" =&gt; "<computed>"
primary_queue_endpoint:           "" =&gt; "<computed>"
primary_table_endpoint:           "" =&gt; "<computed>"
resource_group_name:              "" =&gt; "terraform-lab1"
secondary_access_key:             "<sensitive>" =&gt; "<sensitive>"
secondary_blob_connection_string: "<sensitive>" =&gt; "<sensitive>"
secondary_blob_endpoint:          "" =&gt; "<computed>"
secondary_connection_string:      "<sensitive>" =&gt; "<sensitive>"
secondary_location:               "" =&gt; "<computed>"
secondary_queue_endpoint:         "" =&gt; "<computed>"
secondary_table_endpoint:         "" =&gt; "<computed>"
tags.%:                           "" =&gt; "<computed>"
azurerm_storage_account.lab1sa: Still creating... (10s elapsed)
azurerm_storage_account.lab1sa: Creation complete after 19s (ID: /subscriptions/2d31be49-d959-4415-bb65-.../storageAccounts/richeneyterraformlab1)

Apply complete! Resources: 2 added, 0 changed, 0 destroyed.</computed></computed></computed></computed></sensitive></sensitive></computed></sensitive></sensitive></sensitive></sensitive></computed></computed></computed></computed></sensitive></sensitive></computed></sensitive></sensitive></sensitive></sensitive></computed></computed></blockquote></pre>
                    </div>

                    The resource group and the storage account have been successfully deployed.

                    <div class="code-toolbar">
                        <pre class=" command-line language-bash" data-output="2-99" data-prompt="$"><blockquote class=" language-bash"><span class="command-line-prompt"><span data-prompt="$"></span><span></span><span></span><span></span></span>az resource list --resource-group terraform-lab1 --output table
Name                   ResourceGroup    Location    Type                               Status
---------------------  ---------------  ----------  ---------------------------------  --------
richeneyterraformlab1  terraform-lab1   westeurope  Microsoft.Storage/storageAccounts</blockquote></pre>
                    </div>

                    <h3 id="--terraform-destroy">- terraform destroy</h3>

                    Clean up the resources by using the <code>terraform destroy</code> command. The command will let you know what you are about to remove and then prompt you for confirmation.

                    <div class="code-toolbar">
                        <pre class=" command-line language-bash" data-output="2-99" data-prompt="$"><blockquote class=" language-bash"><span class="command-line-prompt"><span data-prompt="$"></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span>terraform destroy
azurerm_resource_group.lab1: Refreshing state... (ID: /subscriptions/2d31be49-d959-4415-bb65-...2c90ba62/resourceGroups/terraform-lab1)
azurerm_storage_account.lab1sa: Refreshing state... (ID: /subscriptions/2d31be49-d959-4415-bb65-.../storageAccounts/richeneyterraformlab1)

An execution plan has been generated and is shown below.
Resource actions are indicated with the following symbols:
- destroy

Terraform will perform the following actions:

- azurerm_resource_group.lab1

- azurerm_storage_account.lab1sa


Plan: 0 to add, 0 to change, 2 to destroy.

Do you really want to destroy?
Terraform will destroy all your managed infrastructure, as shown above.
There is no undo. Only 'yes' will be accepted to confirm.

Enter a value: yes

azurerm_storage_account.lab1sa: Destroying... (ID: /subscriptions/2d31be49-d959-4415-bb65-.../storageAccounts/richeneyterraformlab1)
azurerm_storage_account.lab1sa: Destruction complete after 0s
azurerm_resource_group.lab1: Destroying... (ID: /subscriptions/2d31be49-d959-4415-bb65-...2c90ba62/resourceGroups/terraform-lab1)
azurerm_resource_group.lab1: Still destroying... (ID: /subscriptions/2d31be49-d959-4415-bb65-...2c90ba62/resourceGroups/terraform-lab1, 10s elapsed)
azurerm_resource_group.lab1: Still destroying... (ID: /subscriptions/2d31be49-d959-4415-bb65-...2c90ba62/resourceGroups/terraform-lab1, 20s elapsed)
azurerm_resource_group.lab1: Still destroying... (ID: /subscriptions/2d31be49-d959-4415-bb65-...2c90ba62/resourceGroups/terraform-lab1, 30s elapsed)
azurerm_resource_group.lab1: Still destroying... (ID: /subscriptions/2d31be49-d959-4415-bb65-...2c90ba62/resourceGroups/terraform-lab1, 40s elapsed)
azurerm_resource_group.lab1: Destruction complete after 46s

Destroy complete! Resources: 2 destroyed.</blockquote></pre>
                    </div>

                    <strong>WARNING</strong> If there are other resources in a Terraform managed resource group then the destroy will remove these as well.

                    Rerun the resouce list command to confirm that the resources have been removed:

                    <div class="code-toolbar">
                        <pre class=" command-line language-bash" data-output="2-99" data-prompt="$"><blockquote class=" language-bash"><span class="command-line-prompt"><span data-prompt="$"></span><span></span></span>az resource list --resource-group terraform-lab1 --output table
Resource group 'terraform-lab1' could not be found.</blockquote></pre>
                    </div>

                    <h3 id="end-of-lab-1">End of Lab 1</h3>

                    We have reached the end of the lab. You have learned some basics about Terraform HCL files, and gone through the standard Terraform workflow for creating and destroying Azure resources. <br><br>

                    Your main.tf file should look similar to the main.tf file in <a href="https://github.com/richeney/terraform-pre012-lab1">https://github.com/richeney/terraform-pre012-lab1</a>.

                    In the next lab we will introduce variables, use multiple .tf files, and we’ll add and modify to our resources. Click on the right arrow to move to the next lab.

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