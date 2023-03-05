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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 8</h1>
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
                    <li><a href="#example-providers">Example Providers</a></li>
                    <li><a href="#azure-kubernetes-service-aks">Azure Kubernetes Service (AKS)</a></li>
                    <li><a href="#create-the-aks-module">Create the AKS module</a></li>
                    <li><a href="#initialise-the-module-area">Initialise the module area</a></li>
                    <li><a href="#insufficient-directory-permissions">Insufficient directory permissions?</a></li>
                    <li><a href="#add-the-additional-api-permissions-to-your-terraform-service-principal">Add the additional API permissions to your Terraform service principal</a></li>
                    <li><a href="#create-the-service_principal-sub-module">Create the service_principal sub-module</a></li>
                    <li><a href="#main-aks-module">Main AKS module</a></li>
                    <li><a href="#ssh-public-key">SSH Public Key</a></li>
                    <li><a href="#specifying-minimum-provider-versions">Specifying minimum provider versions</a></li>
                    <li><a href="#locally-test-the-core-aks-module">Locally test the core AKS module</a></li>
                    <li><a href="#add-the-kubernetes-configuration">Add the Kubernetes configuration</a></li>
                    <li><a href="#push-to-github">Push to GitHub</a></li>
                    <li><a href="#test-the-module-hosted-in-github">Test the module hosted in GitHub</a></li>
                    <li><a href="#extending-terraform-into-arm">Extending Terraform into ARM</a></li>
                    <li><a href="#extending-arm-into-terraform">Extending ARM into Terraform</a></li>
                    <li><a href="#end-of-lab-8">End of Lab 8</a></li>
                </ul>
                </nav>
                </aside>

                <h3 id="introduction">Introduction</h3>

                In this lab we will look at other providers that can help with our Azure deployments. One of the reasons for choosing Terraform is the extensible support for multiple providers so that the same workflow and logic can be applied to various public and private cloud platforms. <br><br>

                The same provider extensibility also applies to supporting services and data plane configuration. In this lab we will look at examples from Cloudflare and Datadog, and then we’ll deploy an Azure Kubernetes Service (AKS) Kubernetes cluster using a combination of the AzureRM provider for the control plane and the Kubernetes provider for the data plane.

                We will also:

                <ul>
                    <li>Evolve our use of modules with a nested module</li>
                    <li>Look at locals, keepers and the lifecycle meta-parameter</li>
                    <li>Use a more natural workflow to create and test a new module locally</li>
                    <li>Create a upstream GitHub repository and push our code to it</li>
                </ul>

                Let’s start by exploring alternative providers.

                <h3 id="example-providers">Example Providers</h3>

                Take a look at the range of <a href="https://www.terraform.io/docs/providers/">Terraform Providers</a> available. It is a wide and expanding list, covering a multitude of private and public cloud platforms, various applications, supporting technologies and cloud services such as public DNS. <br><br>

                All of the Providers follow the same documentation standard as the AzureRM Provider.

                <h3 id="datadog">Datadog</h3>

                <a href="https://www.datadoghq.com/">Datadog</a> is used by 1000’s of customers as their platform for modern monitoring and analytics, and it has over 200 integrations with various cloud services, including a number of Azure services. <br><br>

                The Datadog Provider is relatively simple, with a couple of key variables for the API to authenticate with, and four possible resource types:

                <ol>
                    <li>datadog_downtime</li>
                    <li>datadog_monitor</li>
                    <li>datadog_timeboard</li>
                    <li>datadog_user</li>
                </ol>

                This allows the monitoring to be configured automatically as one facet of the wider Terraform configuration.

                <h3 id="cloudflare">Cloudflare</h3>

                <a href="https://www.cloudflare.com/dns/">Cloudflare</a> offer a number of services including fast authoritative public DNS servers on 1.1.1.1 and 1.0.0.1. They are very fast in terms of DNS lookup latency and speed of DNS record propagation. <br><br>

                These are widely used as an alterative to other well known public DNS servers such as Google’s 8.8.8.8 and 8.8.4.4, and have a free tier for personal use. <br><br>

                The Cloudflare Provider is authenticated using an email address for the Cloudflare account plus an API token. There are a few more resource types available:

                <ol>
                    <li>cloudflare_load_balancer</li>
                    <li>cloudflare_load_balancer_pool</li>
                    <li>cloudflare_page_rule</li>
                    <li>cloudflare_rate_limit</li>
                    <li>cloudflare_record</li>
                    <li>cloudflare_load_balancer_monitor</li>
                    <li>cloudflare_zone_settings_override</li>
                </ol>

                Again, the options here extend what is possible in a Terraform configuration.

                <h3 id="kubernetes">Kubernetes</h3>

                There are a number of different container orchestration technologies, but Kubernetes has essentially won that war and is now the <em>de facto</em> orchestrator technology for hyperscale cloud platforms.
                The Terraform Kubernetes Provider has a couple of authentication options, and includes a wide array of resource types and also a couple of data types. It can take a base Kubernetes cluster and its running components, and then schedule the Kubernetes resources, like pods, replication controllers, services, etc. <br><br>

                But it does need a base Kubernetes cluster first…

                <h3 id="azure-kubernetes-service-aks">Azure Kubernetes Service (AKS)</h3>

                In this lab we will create an Azure Kubernetes Service (AKS) cluster using the azurerm_kubernetes_cluster resource type. We will then use the Kubernetes provider to do additional configuration on top of the AKS deployment. This lab will demonstrate how you can use multiple Providers to achieve the end goal, and how to link them by using the exported attributes of one Provider type as arguments to another Provider type. <br><br>

                If you are not familiar with AKS, it is a Kubernetes cluster where you only have to pay for the compute nodes. A few key AKS features include:

                <ol>
                    <li>The Kubernetes management plane is provided as a free Platform-as-a-Service (PaaS) service!</li>
                    <li>The Open Service Broker for Azure (OSBA) simplifies integration with other Azure PaaS services</li>
                    <li>The Virtual Kubelet Provider for Azure Container Instances (ACI) enables limitless bursting (experimental open source project)</li>
                </ol>

                Note that we will only be using the core AKS functionality in this lab, with a simple demo container image.

                <h3 id="create-the-aks-module">Create the AKS module</h3>

                We’ll take this lab in stages.

                <ol>
                    <li>Initialise the module area</li>
                    <li>Add API permissions to Azure Active Directory to your Terraform service principal</li>
                    <li>Define the terraform-module-aks module and the service_principal sub-module</li>
                    <li>Create an SSH key pair</li>
                    <li>Test locally with a customised providers.tf file</li>
                    <li>Commit locally</li>
                    <li>Add GitHub as a remote repository and push to it</li>
                    <li>Test our code as a module</li>
                    <li>Add the additional Kubernetes configuration</li>
                    <li>Re-test</li>
                </ol>

                The Terraform configuration in this section is loosely based on Nic Jackson’s blog post, updated with some of Lawrence Gripper’s excellent AKS repo.

                <h3 id="initialise-the-module-area">Initialise the module area</h3>

                Create a local module area called terraform-aks-module by following the lab steps below. It is assumed that you are starting in the terraform-labs directory.

                <ul>
                    <li>Run the following commands to initialise the module area and open it in a new VSCode window</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash"><span class="token function">mkdir</span> -m 750 <span class="token punctuation">..</span>/terraform-module-aks
<span class="token function">cd</span> <span class="token punctuation">..</span>/terraform-module-aks
<span class="token function">git</span> init
<span class="token function">touch</span> variables.tf main.tf outputs.tf manifest.json
<span class="token function">mkdir</span> service_principal
<span class="token function">touch</span> service_principal/variables.tf service_principal/main.tf service_principal/outputs.tf
code <span class="token keyword">.</span></blockquote></pre>

                <h3 id="insufficient-directory-permissions">Insufficient directory permissions?</h3>

                One feature of this lab is that it shows how to configure the Terraform service principal with sufficient API permissions to use the azurerm_service_principal resource type in order to create the AKS service principal on the fly. There isn’t a great deal of information available on the internet on how to have one service principal create another, so this lab helps to fill that gap. <br><br>

                However, you may be working in a subscription where you have insufficient directory authority to create users and groups and therefore you cannot successfully assign and use the additional API permissions (For instance this will be true for Microsoft employees using subscriptions associated with the microsoft.com directory.) <br><br>

                You can still complete the lab, but you’ll have to skip the service_principal sub-module and associated API permissions for the Terraform service principal and tweak the main.tf accordingly. Instead we’ll hardcode the AKS service principal ID and secret values to those of your existing Terraform service principal. <br><br>

                There will be two sets of example files at the end of the lab to match whichever path you have taken.

                <blockquote>
                    If you cannot create users and groups in your subscriptions directory then look out for sentences in the lab that mention <strong>insufficient directory permissions</strong>, or instructions blocks wrapped with HTML style <strong>&lt;insufficient directory permissions&gt;</strong> <em>&lt;list of commands&gt;</em> <strong>&lt;/insufficient directory permissions&gt;</strong> tags.
                </blockquote>


                <h3 id="add-the-additional-api-permissions-to-your-terraform-service-principal">Add the additional API permissions to your Terraform service principal</h3>

                The <a href="lab5.php#advanced-service-principal-configuration">advanced configuration section</a> of Lab 5 explains both custom RBAC roles in ARM, and adding additional API permissions to the service principal’s app registration. <br><br>

                This section adds the required API permissions for the legacy Azure Active Directory API

                <ul>
                    <li>Add the following JSON into your manifest.json file:</li>
                </ul>


                <pre class=" language-json"><blockquote class=" language-json"><span class="token punctuation">[</span>
  <span class="token punctuation">{</span>
      <span class="token property">"resourceAppId"</span><span class="token operator">:</span> <span class="token string">"00000002-0000-0000-c000-000000000000"</span><span class="token punctuation">,</span>
      <span class="token property">"resourceAccess"</span><span class="token operator">:</span> <span class="token punctuation">[</span>
          <span class="token punctuation">{</span>
              <span class="token property">"id"</span><span class="token operator">:</span> <span class="token string">"311a71cc-e848-46a1-bdf8-97ff7156d8e6"</span><span class="token punctuation">,</span>
              <span class="token property">"type"</span><span class="token operator">:</span> <span class="token string">"Scope"</span>
          <span class="token punctuation">}</span><span class="token punctuation">,</span>
          <span class="token punctuation">{</span>
              <span class="token property">"id"</span><span class="token operator">:</span> <span class="token string">"1cda74f2-2616-4834-b122-5cb1b07f8a59"</span><span class="token punctuation">,</span>
              <span class="token property">"type"</span><span class="token operator">:</span> <span class="token string">"Role"</span>
          <span class="token punctuation">}</span>
      <span class="token punctuation">]</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">]</span></blockquote></pre>

                <ul>
                    <li>Update the API permissions for your Terraform service principal’s registered application:</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">subId<span class="token operator">=</span><span class="token variable"><span class="token variable">$(</span>az account show --query <span class="token function">id</span> --output tsv<span class="token variable">)</span></span>
appId<span class="token operator">=</span><span class="token variable"><span class="token variable">$(</span>az ad sp show --id <span class="token string">"http://terraform-<span class="token variable">${subId}</span>-sp"</span> --query appId --output tsv<span class="token variable">)</span></span>
az ad app update --id <span class="token variable">$appId</span> --required-resource-accesses @manifest.json
az ad app show --id <span class="token variable">$appId</span> --query requiredResourceAccess</blockquote></pre>

                <ul>
                    <li>Grant admin consent for the Default Directory via the portal:
                        <ul>
                            <li>Navigate to Azure Active Directory (AAD)</li>
                            <li>Under the Manage list, select App registrations (Preview)</li>
                            <li>Ensure the All Applications tab is selected</li>
                            <li>Search for, and select the Terraform Service Principal application that we created previously (i.e. terraform-<subscriptionid>-sp)</subscriptionid>
                            </li>
                            <li>Select API Permissions</li>
                            <li>Click the ‘Grant admin consent for Default Directory’ button</li>
                            <li>Click Yes on the confirmation prompt</li>
                        </ul>
                    </li>
                </ul>

                <br><br><img src="https://archive.azurecitadel.com/automation/terraform/images/permissions.png" alt="permissions">

                <h3 id="create-the-service_principal-sub-module">Create the service_principal sub-module</h3>

                The AKS service requires a service principal itself. The service principal that is created will automatically be assigned the Contributor role on the new resource groups that the AKS provider deploys. Terraform has the ability to create service principals so we will make use of that. We’ll keep it tidy by hiding those resource types in a sub-module.

                <ul>
                    <li>Open the service_principal sub-folder in the VSCode explorer</li>
                    <li>Copy the following code block into the service_principal module’s main.tf</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">resource <span class="token string">"azurerm_azuread_application"</span> <span class="token string">"aks_app"</span> <span class="token punctuation">{</span>
  name <span class="token operator">=</span> <span class="token string">"${var.sp_name}"</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_azuread_service_principal"</span> <span class="token string">"aks_sp"</span> <span class="token punctuation">{</span>
  application_id <span class="token operator">=</span> <span class="token string">"${azurerm_azuread_application.aks_app.application_id}"</span>
<span class="token punctuation">}</span>

resource <span class="token string">"random_string"</span> <span class="token string">"aks_sp_password"</span> <span class="token punctuation">{</span>
  length  <span class="token operator">=</span> <span class="token number">16</span>
  special <span class="token operator">=</span> <span class="token keyword">true</span>
  keepers <span class="token operator">=</span> <span class="token punctuation">{</span>
      service_principal <span class="token operator">=</span> <span class="token string">"${azurerm_azuread_service_principal.aks_sp.id}"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_azuread_service_principal_password"</span> <span class="token string">"aks_sp_password"</span> <span class="token punctuation">{</span>
  service_principal_id <span class="token operator">=</span> <span class="token string">"${azurerm_azuread_service_principal.aks_sp.id}"</span>
  value                <span class="token operator">=</span> <span class="token string">"${random_string.aks_sp_password.result}"</span>
  end_date             <span class="token operator">=</span> <span class="token string">"${timeadd(timestamp(), "</span><span class="token number">8760</span>h<span class="token string">")}"</span>

  lifecycle <span class="token punctuation">{</span>
      ignore_changes <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">"end_date"</span><span class="token punctuation">]</span>
  <span class="token punctuation">}</span>

  provisioner <span class="token string">"local-exec"</span> <span class="token punctuation">{</span>
      command <span class="token operator">=</span> <span class="token string">"sleep 30"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>

                <blockquote>
                    Note that the password block includes a provisioner to locally sleep for 30 seconds, to give the app and service principal sufficient time to become available. This is to overcome a current known <a href="https://github.com/terraform-providers/terraform-provider-azurerm/issues/1635">bug</a>. More on provisioners in the next lab.
                </blockquote>

                <strong>Question</strong>:

                What impact does the <strong>keeper</strong> value have on the service principal password?<br>

                <strong>Answer</strong>:

                <div class="answer">
                    It ensures that the password is not changed unless the Service Principal ID is changed (i.e. it has been recreated).
                </div>

                <strong>Question</strong>:

                How long will the password be valid for?<br>

                <strong>Answer</strong>:

                <div class="answer">
                    8760 hours = 1 year.
                </div>

                <strong>Question</strong>:

                What does the lifecycle meta-parameter do for the password?<br>

                <strong>Answer</strong>:

                <div class="answer">
                    It manages the lifecycle of the resource, and ensures that the password is not changed if and when the end date is updated. You would have to use the Terraform [taint command](https://www.terraform.io/docs/commands/taint.html) to force a password to be recreated.
                </div>

                <ul>
                    <li>Copy the following code block into the service_principal module’s outputs.tf</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">output <span class="token string">"sp_id"</span> <span class="token punctuation">{</span>
value <span class="token operator">=</span> <span class="token string">"${azurerm_azuread_service_principal.aks_sp.id}"</span>
<span class="token punctuation">}</span>

output <span class="token string">"client_id"</span> <span class="token punctuation">{</span>
value <span class="token operator">=</span> <span class="token string">"${azurerm_azuread_service_principal.aks_sp.application_id}"</span>
<span class="token punctuation">}</span>

output <span class="token string">"client_secret"</span> <span class="token punctuation">{</span>
sensitive <span class="token operator">=</span> <span class="token keyword">true</span>
value     <span class="token operator">=</span> <span class="token string">"${random_string.aks_sp_password.result}"</span>
<span class="token punctuation">}</span></blockquote></pre>

                The client ID and secret will be used by the azurerm_kubernetes_cluster resource in the parent.

                <ul>
                    <li>Copy the following code block into the service_principal module’s variables.tf</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">variable <span class="token string">"sp_name"</span> <span class="token punctuation">{</span>
  description <span class="token operator">=</span> <span class="token string">"Service Principal name"</span>
  type        <span class="token operator">=</span> <span class="token string">"string"</span>
<span class="token punctuation">}</span></blockquote></pre>

                The only argument required by the service_principal is the name, which simplifies the main.tf that we’ll be creating in the parent directory. This is a good practice to adopt as it helps to make your modules readable and supportable. <br><br>

                OK, that is the sub-module finished. Let’s move up a level and do the main AKS module.

                <h3 id="main-aks-module">Main AKS module</h3>

                <ul>
                    <li>Close any open editing windows in VSCode (using <code>CTRL</code>+<code>W</code>)</li>
                    <li>Close the service_principal folder in the VSCode explorer
                        <ul>
                            <li>If you have <strong>insufficient directory permissions</strong> then you may delete the service_principal folder</li>
                        </ul>
                    </li>
                    <li>Add the following to the variables.tf (Note: This is the variables.tf file in the root of our Terraform-Module-AKS directory, <strong>NOT</strong> the variables.tf file in the service_principal directory)</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">variable <span class="token string">"resource_group_name"</span> <span class="token punctuation">{</span>
 default <span class="token operator">=</span>   <span class="token string">"aks"</span>
<span class="token punctuation">}</span>

variable <span class="token string">"location"</span> <span class="token punctuation">{</span>
 default <span class="token operator">=</span>   <span class="token string">"westeurope"</span>
<span class="token punctuation">}</span>

variable <span class="token string">"ssh_public_key"</span> <span class="token punctuation">{</span>
 type         <span class="token operator">=</span> <span class="token string">"string"</span>
 default      <span class="token operator">=</span> <span class="token string">""</span>
 description  <span class="token operator">=</span> <span class="token string">"Public key for aksadmin's SSH access."</span>
<span class="token punctuation">}</span>

variable <span class="token string">"agent_count"</span> <span class="token punctuation">{</span>
 default <span class="token operator">=</span>   <span class="token number">2</span>
<span class="token punctuation">}</span>

variable <span class="token string">"vm_size"</span> <span class="token punctuation">{</span>
 default <span class="token operator">=</span>   <span class="token string">"Standard_DS2_v2"</span>
<span class="token punctuation">}</span>

variable <span class="token string">"tags"</span> <span class="token punctuation">{</span>
  default     <span class="token operator">=</span> <span class="token punctuation">{</span>
      source  <span class="token operator">=</span> <span class="token string">"citadel"</span>
      env     <span class="token operator">=</span> <span class="token string">"testing"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>

                Every argument for this module has a default value, which will make testing easier. Note that the default for the SSH public key is an empty string. More on that in a moment. <br><br>

                <ul>
                    <li>Add the following into the main.tf (Again, this is the main.tf file in the root of our Terraform-Module-AKS directory, <strong>NOT</strong> the main.tf file in the service_principal directory)</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">locals <span class="token punctuation">{</span>
  cluster_name            <span class="token operator">=</span> <span class="token string">"aks-${random_string.aks.result}"</span>
  default_ssh_public_key  <span class="token operator">=</span> <span class="token string">"${file("</span><span class="token operator">~</span><span class="token operator">/</span><span class="token punctuation">.</span>ssh<span class="token operator">/</span>id_rsa<span class="token punctuation">.</span>pub<span class="token string">")}"</span>
  ssh_public_key          <span class="token operator">=</span> <span class="token string">"${var.ssh_public_key != "</span><span class="token string">" ? var.ssh_public_key : local.default_ssh_public_key }"</span>
<span class="token punctuation">}</span>

<span class="token keyword">module</span> <span class="token string">"service_principal"</span> <span class="token punctuation">{</span>
  source    <span class="token operator">=</span> <span class="token string">"service_principal"</span>
  sp_name   <span class="token operator">=</span> <span class="token string">"${local.cluster_name}"</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_resource_group"</span> <span class="token string">"aks"</span> <span class="token punctuation">{</span>
  name     <span class="token operator">=</span> <span class="token string">"${var.resource_group_name}"</span>
  location <span class="token operator">=</span> <span class="token string">"${var.location}"</span>
<span class="token punctuation">}</span>

resource <span class="token string">"random_string"</span> <span class="token string">"aks"</span> <span class="token punctuation">{</span>
length  <span class="token operator">=</span> <span class="token number">8</span>
lower   <span class="token operator">=</span> <span class="token keyword">true</span>
number  <span class="token operator">=</span> <span class="token keyword">true</span>
upper   <span class="token operator">=</span> <span class="token keyword">true</span>
special <span class="token operator">=</span> <span class="token keyword">false</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_kubernetes_cluster"</span> <span class="token string">"aks"</span> <span class="token punctuation">{</span>
name                <span class="token operator">=</span> <span class="token string">"${local.cluster_name}"</span>
location            <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.aks.location}"</span>
resource_group_name <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.aks.name}"</span>
dns_prefix          <span class="token operator">=</span> <span class="token string">"${local.cluster_name}"</span>
depends_on          <span class="token operator">=</span> <span class="token punctuation">[</span>
    <span class="token string">"module.service_principal"</span>
<span class="token punctuation">]</span>

linux_profile <span class="token punctuation">{</span>
  admin_username  <span class="token operator">=</span> <span class="token string">"aksadmin"</span>

  ssh_key <span class="token punctuation">{</span>
    key_data <span class="token operator">=</span> <span class="token string">"${local.ssh_public_key}"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

agent_pool_profile <span class="token punctuation">{</span>
  name            <span class="token operator">=</span> <span class="token string">"default"</span>
  count           <span class="token operator">=</span> <span class="token string">"${var.agent_count}"</span>
  vm_size         <span class="token operator">=</span> <span class="token string">"${var.vm_size}"</span>
  os_type         <span class="token operator">=</span> <span class="token string">"Linux"</span>
  os_disk_size_gb <span class="token operator">=</span> <span class="token number">30</span>
<span class="token punctuation">}</span>

service_principal <span class="token punctuation">{</span>
  client_id       <span class="token operator">=</span> <span class="token string">"${module.service_principal.client_id}"</span>
  client_secret   <span class="token operator">=</span> <span class="token string">"${module.service_principal.client_secret}"</span>
<span class="token punctuation">}</span>

tags              <span class="token operator">=</span> <span class="token string">"${var.tags}"</span>
<span class="token punctuation">}</span></blockquote></pre>

                <strong>&lt;insufficient directory permissions&gt;</strong>
                <strong>If you encountered the ‘insufficient directory permissions’ you need to follow these steps, else you can skip them</strong>


                <ol>
                    <li>Modify the <code>resource "azurerm_kubernetes_cluster" "aks"</code> block
                        <ol>
                            <li>Remove the <code>depends_on = ["module.service_principal"]</code></li>
                            <li>Hardcode the service_principal stanza’s values for client_id and client_secret to use the values in your provider.tf</li>
                        </ol>
                    </li>
                    <li>Remove the <code>module "service_principal" {}</code> block</li>
                </ol>

                <strong>&lt;/insufficient directory permissions&gt;</strong>

                OK, this is the first time that we have actively used Locals. Locals are useful for generating values that will <em>only</em> be used within this individual .tf file. (Locals are roughly similar to the Variables section of an ARM template). <br><br>

                The cluster name is a good example of a local variable, as it uses a random string appended to the aks- prefix, and is then referenced a few times throughout the main.tf. <br><br>

                The SSH key is another good example of a local variable, as it allows us to overcome a limitation in Terraform. You cannot use an interpolation within a variable definition’s default value. If you remember, we defaulted the variable to an empty string. The Locals section defines a default value (based on the contents of the default name for an SSH public key), and then the local.ssh_public_key will default to that if the user has not passed in an SSH public key argument value.

                <ul>
                    <li>Add the following into the outputs.tf:</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">output <span class="token string">"kube_config"</span> <span class="token punctuation">{</span>
value <span class="token operator">=</span> <span class="token string">"${azurerm_kubernetes_cluster.aks.kube_config_raw}"</span>
<span class="token punctuation">}</span>

output <span class="token string">"host"</span> <span class="token punctuation">{</span>
value <span class="token operator">=</span> <span class="token string">"${azurerm_kubernetes_cluster.aks.kube_config.0.host}"</span>
<span class="token punctuation">}</span></blockquote></pre>

                <h3 id="ssh-public-key">SSH Public Key</h3>

                OK, so we’ll need an SSH key pair for this to work. If you have one already then skip this section. <br><br>

                If not then create one using the command below in your home directory:


                <pre class=" language-bash"><blockquote class=" language-bash">ssh-keygen -t rsa -b 2048 -C <span class="token string">"richard.cheney@microsoft.com"</span></blockquote></pre>

                <blockquote>
                    Use your own email address for the comment field!
                </blockquote>

                The <code>~/.ssh/id_rsa.pub</code> public SSH key will be used in the locals default. It will be used as the authentication for the aksadmin user.
                Note: You will need to press Enter in the command-line when prompted as follows:

                <ul>
                    <li><code>Enter file in which to save the key (/home/username/.ssh/id_rsa):</code></li>
                    <li><code>Enter passphrase (empty for no passphrase):</code></li>
                    <li><code>Enter same passphrase again:</code></li>
                </ul>

                You should receive an output similar to the following:


                <pre class=" language-bash"><blockquote class=" language-bash">Your identification has been saved <span class="token keyword">in</span> /home/username/.ssh/id_rsa.
Your public key has been saved <span class="token keyword">in</span> /home/username/.ssh/id_rsa.pub.
The key fingerprint is:
SHA256:Ocwl7ZCZbtvnRLg9w8It7zFVS8SdxRoEHJXqpivh73Y richard.cheney@microsoft.com</blockquote></pre>

                <h3 id="specifying-minimum-provider-versions">Specifying minimum provider versions</h3>

                We will need the Terraform service principal credentials for full testing:

                <ul>
                    <li>Copy in provider.tf file from the terraform-labs repository into the terraform-module-aks directory</li>
                </ul>

                We will need a minimum version of the AzureRM provider for the AKS module to work. Exploring this introduces a key tenet for Terraform regarding versioning. <br><br>

                As you already know, when you run terraform init, the required providers are copied locally. It is important to understand that those providers will <em>not</em> be upgraded unless you force that to happen. <br><br>

                Terraform has a philosophy around version management that enables you to collectively control the version of everything from top to bottom (i.e. the Terraform executable, the individual Terraform providers and the Terraform files themselves). Therefore, you have full control on when any of those components are upgraded, so that you know that nothing will become unexpectedly broken. <br><br>

                Take a look at the <a href="https://github.com/terraform-providers/terraform-provider-azurerm/blob/master/CHANGELOG.md">AzureRM changelog</a>. This lists the new features, bug fixes and improvements that are rolled into each release. If you require functionality of a newer release then you have a couple of options:

                <ol>
                    <li>Specify a provider version constraint in the provider block and run <code>terraform init</code></li>
                    <li>Run <code>terraform init -upgrade=true</code> to upgrade to the latest version allowed within configured constraints</li>
                </ol>

                Specify a minimum version of 1.17 for the AzureRM Provider:

                <ul>
                    <li>Add a constraint to the AzureRM provider block for a minimum version of 1.17 (or later)</li>
                </ul>

                <blockquote>
                    Version 1.17 is current at the time of writing; feel free to specify a more recent version if the changelog entry mentions new or updated azurerm_kubernetes_* provider types
                </blockquote>

                <ul>
                    <li>Run <code>terraform init</code></li>
                </ul>

                Note that the output recommends that a minimum version should be specified for the random provider:


                <pre class=" language-text"><blockquote class=" language-text">The following providers do not have any version constraints in configuration,
so the latest version was installed.

To prevent automatic upgrades to new major versions that may contain breaking
changes, it is recommended to add version = "..." constraints to the
corresponding provider blocks in configuration, with the constraint strings
suggested below.

* provider.random: version = "~&gt; 2.0"</blockquote></pre>

                <ul>
                    <li>Update the provider.tf and specify the recommended minimum version</li>
                    <li>Show the required providers and any associated version constraints, using <code>terraform providers</code></li>
                </ul>

                Example output:


                <pre class=" language-text"><blockquote class=" language-text">.
├── provider.azurerm ~&gt; 1.17.0
├── provider.random ~&gt; 2.0
└── module.service_principal
  ├── provider.azurerm (inherited)
  └── provider.random (inherited)</blockquote></pre>

                <h3 id="locally-test-the-core-aks-module">Locally test the core AKS module</h3>

                <ul>
                    <li>Run <code>terraform init</code></li>
                    <li>Run <code>terraform plan</code></li>
                    <li>Run <code>terraform apply -auto-approve</code></li>
                </ul>

                The cluster should take around 15 minutes to deploy, so it’s a good time for a coffee break. Once it has completed then check that the cluster is operating as expected.

                <ul>
                    <li>Create the Kubernetes config file using the AKS module’s kube_config output:</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash"><span class="token function">umask</span> 022
<span class="token function">mkdir</span> ~/.kube
<span class="token keyword">echo</span> <span class="token string">"<span class="token variable"><span class="token variable">$(</span>terraform output kube_config<span class="token variable">)</span></span>"</span> <span class="token operator">&gt;</span> ~/.kube/config</blockquote></pre>

                <ul>
                    <li>Install kubectl using <code>sudo az aks install-cli</code></li>
                    <li>Check the cluster health using <code>kubectl get nodes</code></li>
                </ul>


                <pre class=" language-text"><blockquote class=" language-text">NAME                     STATUS   ROLES   AGE   VERSION
aks-default-38841400-0   Ready    agent   29m   v1.9.11
aks-default-38841400-1   Ready    agent   29m   v1.9.11</blockquote></pre>

                <ul>
                    <li>Run the dashboard proxy using the kubectl proxy command
                        <ul>
                            <li>Use <code>kubectl proxy &amp;</code> to run in the background
                                <ul>
                                    <li>Run <code>jobs</code> to view running background jobs</li>
                                    <li>Use <code>kill %1</code> to kill off background job 1</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

                <a href="http://localhost:8001/api/v1/namespaces/kube-system/services/kubernetes-dashboard/proxy/#!/overview?namespace=default"><br><br><img src="https://archive.azurecitadel.com/automation/terraform/images/dashboard.png" alt="dashboard"></a>

                If your browser screen is similar to the image above then all is good.

                <h3 id="add-the-kubernetes-configuration">Add the Kubernetes configuration</h3>

                Now it is time to introduce the Kubernetes provider. We can use this to extend the configuration to not only create the AKS cluster, but to provision the pods and services on top.

                <ul>
                    <li>Append the following into your provider.tf file:</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">provider <span class="token string">"kubernetes"</span> <span class="token punctuation">{</span>
  version                 <span class="token operator">=</span> <span class="token string">"~&gt; 1.3"</span>
  host                    <span class="token operator">=</span> <span class="token string">"${azurerm_kubernetes_cluster.aks.kube_config.0.host}"</span>
  client_certificate      <span class="token operator">=</span> <span class="token string">"${base64decode(azurerm_kubernetes_cluster.aks.kube_config.0.client_certificate)}"</span>
  client_key              <span class="token operator">=</span> <span class="token string">"${base64decode(azurerm_kubernetes_cluster.aks.kube_config.0.client_key)}"</span>
  cluster_ca_certificate  <span class="token operator">=</span> <span class="token string">"${base64decode(azurerm_kubernetes_cluster.aks.kube_config.0.cluster_ca_certificate)}"</span>
<span class="token punctuation">}</span></blockquote></pre>

                Note that the exported attributes of the azurerm_kubernetes_cluster are now being used by the Kubernetes provider, which also introduces an implicit dependency.

                <ul>
                    <li>Append the main.tf with the following resource type block:</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">resource <span class="token string">"kubernetes_pod"</span> <span class="token string">"test"</span> <span class="token punctuation">{</span>
metadata <span class="token punctuation">{</span>
  name <span class="token operator">=</span> <span class="token string">"terraform-example"</span>
<span class="token punctuation">}</span>

spec <span class="token punctuation">{</span>
  container <span class="token punctuation">{</span>
    image <span class="token operator">=</span> <span class="token string">"nginx:1.7.9"</span>
    name  <span class="token operator">=</span> <span class="token string">"example"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>

                We are now making use of a different <a href="https://www.terraform.io/docs/providers/">provider</a> by using the <a href="https://www.terraform.io/docs/providers/kubernetes/r/pod.html">kubernetes_pod</a> resource type.

                <ul>
                    <li>Run through the <code>terraform init</code>, <code>terraform plan</code> and <code>terraform apply</code> workflow</li>
                    <li>Run <code>kubectl get nodes</code></li>
                    <li>Run <code>kubectl get pods</code></li>
                    <li>Re-run the <code>kubectl proxy</code> and check the <a href="http://localhost:8001/api/v1/namespaces/kube-system/services/kubernetes-dashboard/proxy/#!/overview?namespace=default">dashboard</a></li>
                </ul>

                If you can access the dashboard and see the two nodes and the single test pod then the module is successfully tested.

                <ul>
                    <li>Remove the cluster by running <code>terraform destroy</code></li>
                </ul>

                The destruction will take several minutes. While that is running you can move to the next section and push the module up to GitHub. <br><br>

                If you have <strong>insufficient directory permissions</strong> then your module will have hardcoded the Terraform service principal ID and secret values. You can turn those into variables and continue, or skip to the extending Terraform into ARM section.

                <h3 id="push-to-github">Push to GitHub</h3>

                You should already have a <a href="https://github.com/join">GitHub account</a> from the earlier labs. <br><br>

                <ul>
                    <li>Remove the Terraform Service Principal values from your provider.tf so that only the version argument remains</li>
                    <li>Commit the files into your local repo
                        <ul>
                            <li>Add the files to the index <code>git add --all</code></li>
                            <li>Commit the files <code>git commit -a -m "Initial commit"</code></li>
                        </ul>
                    </li>
                    <li>Log onto <a href="https://github.com">GitHub</a></li>
                    <li>Create a new repository called terraform-module-aks
                        <ul>
                            <li>Do not check the <em>Initialize this repository with a README</em> box</li>
                        </ul>
                    </li>
                    <li>Copy the two commands for pushing an existing repository from the command line</li>
                </ul>

                Example commands:


                <pre class=" language-bash"><blockquote class=" language-bash"><span class="token function">git</span> remote add origin https://github.com/richeney/terraform-module-aks.git
<span class="token function">git</span> push -u origin master</blockquote></pre>

                <ul>
                    <li>Run the two commands in your local repository</li>
                </ul>

                Example output:


                <pre class=" language-yaml"><blockquote class=" language-yaml">/git/terraform<span class="token punctuation">-</span>module<span class="token punctuation">-</span>aks (master) $ git push <span class="token punctuation">-</span>u origin master
Username for 'https<span class="token punctuation">:</span><span class="token key atrule">//github.com'</span><span class="token punctuation">:</span> richeney
Password for 'https<span class="token punctuation">:</span><span class="token key atrule">//richeney@github.com'</span><span class="token punctuation">:</span>
Counting objects<span class="token punctuation">:</span> <span class="token number">13</span><span class="token punctuation">,</span> done.
Delta compression using up to 4 threads.
Compressing objects<span class="token punctuation">:</span> 100% (13/13)<span class="token punctuation">,</span> done.
Writing objects<span class="token punctuation">:</span> 100% (13/13)<span class="token punctuation">,</span> 2.86 KiB <span class="token punctuation">|</span> 154.00 KiB/s<span class="token punctuation">,</span> done.
Total 13 (delta 0)<span class="token punctuation">,</span> reused 0 (delta 0)
<span class="token key atrule">remote</span><span class="token punctuation">:</span>
<span class="token key atrule">remote</span><span class="token punctuation">:</span> Create a pull request for 'master' on GitHub by visiting<span class="token punctuation">:</span>
<span class="token key atrule">remote</span><span class="token punctuation">:</span>      https<span class="token punctuation">:</span>//github.com/richeney/terraform<span class="token punctuation">-</span>module<span class="token punctuation">-</span>aks/pull/new/master
<span class="token key atrule">remote</span><span class="token punctuation">:</span>
To https<span class="token punctuation">:</span>//github.com/richeney/terraform<span class="token punctuation">-</span>module<span class="token punctuation">-</span>aks.git
* <span class="token punctuation">[</span>new branch<span class="token punctuation">]</span>      master <span class="token punctuation">-</span><span class="token punctuation">&gt;</span> master
Branch 'master' set up to track remote branch 'master' from 'origin'.</blockquote></pre>

                The full module should now be uploaded to GitHub.

                <h3 id="test-the-module-hosted-in-github">Test the module hosted in GitHub</h3>

                If you wish you can test the whole module. <br><br>

                We’ll do this within your <a href="https://shell.azure.com">Cloud Shell</a>’s home directory.

                <ul>
                    <li>Create a new lab8 folder in your home directory (<code>mkdir lab8</code>)</li>
                    <li>Change to this directory (<code>cd lab8</code>)</li>
                    <li>Create an empty aks.tf file (<code>touch aks.tf</code>)</li>
                    <li>Edit the file in the Monaco editor (<code>code .</code>)</li>
                    <li>Add the following HCL into the aks.tf file:</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">provider <span class="token string">"azurerm"</span> <span class="token punctuation">{</span>
  tenant_id       <span class="token operator">=</span> <span class="token string">"00000000-0000-0000-0000-000000000000"</span>
  subscription_id <span class="token operator">=</span> <span class="token string">"00000000-0000-0000-0000-000000000000"</span>
<span class="token punctuation">}</span>

<span class="token keyword">module</span> <span class="token string">"aks"</span> <span class="token punctuation">{</span>
source <span class="token operator">=</span> <span class="token string">"github.com/username/terraform-module-aks"</span>
agent_count <span class="token operator">=</span> <span class="token number">4</span>
<span class="token punctuation">}</span>

output <span class="token string">"cluster"</span> <span class="token punctuation">{</span>
value <span class="token operator">=</span> <span class="token string">"${module.aks.cluster}"</span>
<span class="token punctuation">}</span></blockquote></pre>

                <ul>
                    <li>Change the tenant and subscription IDs to match those in <code>az account show --output json</code></li>
                    <li>Change the username</li>
                    <li>Save and quit (<code>CTRL</code>+<code>S</code>, <code>CTRL</code>+<code>Q</code>)</li>
                    <li>Export ARM_CLIENT_ID and ARM_CLIENT_SECRET environment variables
                        <ul>
                            <li>Set the environment variables to the Terraform service principal’s app ID and password (the values may be found in the terraform-labs/provider.tf)</li>
                            <li>Example: `export ARM_CLIENT_ID=”00000000-0000-0000-0000-000000000000”</li>
                            <li>Optionally, you may add the export commands to your ~/.bashrc</li>
                        </ul>
                    </li>
                    <li>Run through the Terraform workflow
                        <ul>
                            <li><code>terraform get</code></li>
                            <li><code>terraform init</code></li>
                            <li><code>terraform plan</code></li>
                            <li><code>terraform apply</code></li>
                        </ul>
                    </li>
                </ul>

                Once complete, you can use the following command to get the credentials for the ~/.kube/config file:


                <pre class=" language-bash"><blockquote class=" language-bash">az aks get-credentials --name <span class="token variable"><span class="token variable">$(</span>terraform output cluster<span class="token variable">)</span></span> --resource-group aks</blockquote></pre>

                The command creates your ~/.kube/config file. It is an alternative to the command you ran earlier that redirected the terraform kube_config output. <br><br>

                The kubectl binary is already included as part of the Cloud Shell container image, so you can use that straight away without having to install it:


                <pre class=" language-bash"><blockquote class=" language-bash">kubectl get pods</blockquote></pre>

                For more commands check the Kubernetes <a href="https://kubernetes.io/docs/reference/kubectl/cheatsheet/">cheatsheet</a>. <br><br>

                You can even open the dashboard directly from the Cloud Shell using this command:


                <pre class=" language-bash"><blockquote class=" language-bash">az aks browse --enable-cloud-console-aks-browse --name <span class="token variable"><span class="token variable">$(</span>terraform output cluster<span class="token variable">)</span></span> --resource-group aks</blockquote></pre>

                Use <code>CTRL</code>+<code>C</code> to close the tunnel. You can then run <code>terraform destroy</code> to remove the cluster. <br><br>

                OK, that is the lab element completed. Well done! <br><br>

                While your cluster is being removed you can read through the next two sections to discuss some additional options:

                <ul>
                    <li>Terraform driving native ARM template deployments</li>
                    <li>ARM templates leveraging certain Terraform providers</li>
                </ul>

                <h3 id="extending-terraform-into-arm">Extending Terraform into ARM</h3>


                There has been a huge investment into the AzureRM Terraform provider (from both Microsoft and HashiCorp in collaboration) and it has excellent coverage of the most commonly used Azure services. However, there are some limitations:

                <ul>
                    <li><strong>coverage</strong> - there are certain cases where Azure services are available as an ARM resource type, but are not yet available as a Terraform resource type</li>
                    <li><strong>lag</strong> - inevitably there will be a period of lag when new Azure services are released, although prominent services such as AKS and Cosmos DB has been released close to the General Availability (GA) date</li>
                </ul>

                Terraform can initiate the deployment of an ARM template and have knowledge of the deployment. Destroying the resource in Terraform (via <code>terraform destroy</code>) will only destroy Terraform’s knowledge of the deployment. For this reason it is recommended to create a separate resource group for the templated deployment so that removing both the resource group and the ARM deployment will remove the resources as well. <br><br>

                If an AzureRM resource type then becomes available, then a resource stanza can be created and the existing resource(s) can be imported. It will need careful configuration until a <code>terraform plan</code> doesn’t show any creates, destroys or changes. It would not be safe to configure new additions, deletions or changes until that steady state has been achieved.

                <h3 id="extending-arm-into-terraform">Extending ARM into Terraform</h3>

                For your information, ARM templates can now also drive certain Terraform Providers
                While it is in Public Preview, the following 3 Terraform providers will be supported (Cloudflare, Datadog and Kubernetes) with other providers being added in the future. <br><br>

                Azure Resource Manager (ARM) will never drive other cloud providers, but it does allow ARM configurations to take advantage of the Terraform framework and extend the configuration beyond the functionality at the control plane level.

                <h3 id="end-of-lab-8">End of Lab 8</h3>

                We have reached the end of the lab. You have provisioned and configured a Kubernetes cluster on the AKS service, and looked at some of the other providers and provider types. We have also leveraged additional API permissions to create the AKS service principal on the fly. We have worked through a sensible workflow to create and test a new module before publishing it, and re-testing as needed. <br><br>

                Your AKS module should look similar to that in <a href="https://github.com/richeney/terraform-module-aks">https://github.com/richeney/terraform-module-aks</a>.

                In the next lab we will also look at provisioners and how they can help to go beyond vanilla image deployments for your virtual machines.
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