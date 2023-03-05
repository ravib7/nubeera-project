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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 3</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">DevOps</a></li>
                <li class="breadcrumb-item"><a href="../">SysOps</a></li>
                <li class="breadcrumb-item active">Terraform</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <section class="page__content" itemprop="text">

                    <aside class="sidebar__right sticky">
                        <h4 class="nav__title">On this page</h4>
                        <ul class="toc__menu">
                            <li><a href="#introduction">Introduction</a></li>
                            <li><a href="#creating-a-github-repository">Creating a GitHub repository</a></li>
                            <li><a href="#azurerm-provider-documentation">AzureRM Provider documentation</a></li>
                            <li><a href="#organising-your-tf-files">Organising your .tf files</a></li>
                            <li><a href="#initial-variablestf">Initial variables.tf</a></li>
                            <li><a href="#nsgs">NSGs</a></li>
                            <li><a href="#core-networking">Core networking</a></li>
                            <li><a href="#commit-your-changes">Commit your changes</a></li>
                            <li><a href="#end-of-lab-3">End of Lab 3</a></li>
                        </ul>
                    </aside>

                    <h3 id="introduction">Introduction</h3>

                    In this lab we will build out a core environment, with some of the core networking services you would expect to see in a hub and spoke topology. We will start using multiple .tf files, and we’ll make use of GitHub as our repository so that you get the benefits of version control. <br><br>

                    This environment will be the basis of the remaining labs in the workshop, so no need to blow it away at the end of the lab!

                    <h3 id="creating-a-github-repository">Creating a GitHub repository</h3>

                    Git is the dominant source code management (SCM) platform in use today. (Git was created by Linus Torvalds as he found the existing SCM systems to have missing functionality.) Many organisations host their own private Git repositories, including Microsoft. (Microsoft contributed to the Git source code to extend the underlying filesystem in order to host the Windows source code.) <br><br>

                    You will create a free public terraform-labs repository on GitHub. GitHub is the largest host of open source code in the world. (This documentation is also hosted on a GitHub repository.) <br><br>

                    For this lab you will need to have:

                    <ul>
                        <li><a href="https://git-scm.com/downloads">Git</a> installed locally</li>
                        <li>Ensure the git executable is in the operating system path</li>
                        <li>For Windows
                            <ul>
                                <li>Visual Studio Code will not find</li>
                                <li>Type <code>where git</code> in Command Prompt</li>
                                <li>Note that git must be found in one of the <em>system</em> path directories</li>
                            </ul>
                        </li>
                        <li>For Linux and MacOS
                            <ul>
                                <li>Type <code>git</code> in the terminal for Linux or MacOS</li>
                            </ul>
                        </li>
                        <li>Check Visual Studio Code (vscode)
                            <ul>
                                <li>Support for Git is integrated and in-the-box</li>
                                <li>Click on the Source Control icon on the left (<code>CTRL</code>+<code>SHIFT</code>+<code>G</code>)</li>
                                <li>The top of the main pane should display “SOURCE CONTROL: GIT”</li>
                            </ul>
                        </li>
                        <li>A <a href="https://github.com/join">GitHub</a> account</li>
                    </ul>

                    OK, let’s create our repository.

                    <ul>
                        <li>Log into <a href="https://github.com">GitHub</a></li>
                    </ul>

                    <br><br><img src="https://archive.azurecitadel.com/automation/terraform/images/newRepo.png" alt="New Repository"><br><br>

                    <ul>
                        <li>Click on the <code>+</code> at the top right and ‘New repository’
                            <ul>
                                <li>Name: <strong>terraform-labs</strong></li>
                                <li>Description: leave blank</li>
                                <li><strong>Public</strong> (default)</li>
                                <li>Tick the <strong>Initialize this repository with a README</strong> check box</li>
                                <li>Create repository</li>
                            </ul>
                        </li>
                        <li>Click on the green <strong>Clone or download</strong> button</li>
                        <li>Copy the repository URL, which should be similar to <code>https://github.com/&lt;githubUsername&gt;/terraform-labs.git</code></li>
                    </ul>

                    <br><br><img src="https://archive.azurecitadel.com/automation/terraform/images/repoUrl.png" alt="Repository URL"><br><br>

                    Clone the empty terraform-labs repository into vscode:

                    <ul>
                        <li>Open vscode</li>
                        <li>Type CTRL-SHIFT-P to open the Command Palette</li>
                        <li>Type <code>clone</code> and select <strong>Git: Clone</strong></li>
                        <li>Paste the repository URL and hit enter</li>
                        <li>Select the repository location for the clone</li>
                        <li>Once cloned you should see a toast notification</li>
                        <li>Click Open Repository</li>
                    </ul>

                    <br><br><img src="https://archive.azurecitadel.com/automation/terraform/images/toast.png" alt="Toast Notification"><br><br>

                    Now that you have cloned the repository locally, your local repository will have an ‘origin’ upstream configured, which is a link back to the original GitHub repository. As you make changes you can commit those to your local repository and then push them upstream to GitHub. <br><br>

                    Let’s check that process by modifying the README.md, committing the change and then pushing it upstream:

                    <ul>
                        <li>Edit the README.md file in vscode</li>
                        <li>Add in the following text: <code>Lab files for https://aka.ms/citadel/terraform workshop.</code></li>
                        <li>Save the change</li>
                        <li>Click on the Git icon to bring up the SCM area</li>
                        <li>Hover over the README.md filename and click on the <code>+</code> to stage</li>
                        <li>Type in a commit message, e.g. Updated description</li>
                        <li>Click on the <code>✓</code> to commit</li>
                        <li>Push up to the ‘origin’ GitHub by either
                            <ul>
                                <li>clicking on the arrows in the status bar to refresh (both push and pull), or</li>
                                <li>clicking on the ellipsis (<code>...</code>) in the SCM area and <code>Push</code> from the context menu</li>
                            </ul>
                        </li>
                        <li>Once the push has completed then go back into GitHub (<code>https://github.com/\&lt;githubUsername&gt;/terraform-labs</code>) and refresh</li>
                        <li>Confirm the README file now shows your committed change</li>
                    </ul>

                    <br><br><img src="https://archive.azurecitadel.com/automation/terraform/images/github.png" alt="GitHub"><br><br>

                    OK, so we can save the files and run terraform commands locally as move through the lab. Don’t forget to periodically commit your changes locally and push them up into your GitHub repository.

                    <blockquote>
                        Visual Studio Code has a nice smart commit feature. If you have a number of changed files that you want to stage and commit locally in one go, then you can add in the message at the top of the SCM sidebar and do CTRL-ENTER then it will prompt you to enable Smart Commit. You then only need to sync in the status bar to push the files up to GitHub. You are still able to chunk your changed files into separate commits. Just stage your selected files and the Smart Commit will only commit those.

                        The vscode setting (<code>CTRL-.</code>) for that is <code>"git.enableSmartCommit": true</code>.
                    </blockquote>

                    <h3 id="azurerm-provider-documentation">AzureRM Provider documentation</h3>

                    The main documentation area for the Terraform azurerm provider is on the Terraform site itself. Use this short URL to access it quickly:

                    <a href="https://aka.ms/terraform" target="_blank"><strong>aka.ms/terraform</strong></a>

                    In this lab we will be creating the following as part of our core environment:

                    <ul>
                        <li>Virtual Network with three subnets</li>
                        <li>VPN Gateway in the GatewaySubnet</li>
                        <li>Network Security Groups</li>
                    </ul>

                    Browse the documentation pages for the various provider types. Note that the index on the left lists out the <strong>Provider</strong> and the <strong>Data Sources</strong> first. The various <strong>Resources</strong> are then listed underneath.

                    <blockquote>
                        For the sake of time we will actually comment out the VPN Gateway in these labs before applying our configuration as it takes a little while to build and it is one of the pricier resources that we will be using.
                    </blockquote>

                    <h3 id="organising-your-tf-files">Organising your .tf files</h3>

                    As we found in the last lab, Terraform will merge together all of the *.tf files in the current working directory, ignoring any files which have a different file extension. By design, Terraform does not recursively walk the directory structure, so any *.tf files in sub-directories will not be considered. <br><br>

                    This provides an opportunity to think about how you would organise your files to suit your purposes. <br><br>

                    Some admins prefer to have all of the Terraform stanzas in a single and often very large .tf file, often called <code>main.tf</code>.

                    Some prefer to split out certain top level keywords, e.g.:


                    <pre class=" language-bash"><blockquote class=" language-bash">$ <span class="token function">ls</span>
main.tf
outputs.tf
variables.tf</blockquote></pre>
                    Others prefer to break out by service or groups of service, e.g.:


                    <pre class=" language-bash"><blockquote class=" language-bash">$ <span class="token function">ls</span>
instances.tf
load-balancers.tf
shared.tf</blockquote></pre>
                    You may decide how you want to structure your files. This lab will assume that the variables are in their own variables.tf file, and then we’ll essentially have a file per resource group:


                    <pre class=" language-bash"><blockquote class=" language-bash">$ <span class="token function">ls</span>
core.tf
keyvaults.tf
nsgs.tf
variables.tf</blockquote></pre>
                    The Core resource group will contain our core networking, i.e. the virtual network, three subnets (training, dev and GatewaySubnet) and a VPN gateway. <br><br>

                    The NSGs resource group will contain a some simple predefined NSGs. The first is intended for the resource group level and includes a selection of allowed ingress ports.

                    <table>
                        <tbody>
                            <tr>
                                <td><strong>NSG Name</strong></td>
                                <td><strong>Protocol</strong></td>
                                <td><strong>Port</strong></td>
                            </tr>
                            <tr>
                                <td>AllowSSH</td>
                                <td>TCP</td>
                                <td>22</td>
                            </tr>
                            <tr>
                                <td>AllowHTTP</td>
                                <td>TCP</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>AllowHTTPS</td>
                                <td>TCP</td>
                                <td>443</td>
                            </tr>
                            <tr>
                                <td>AllowSQLServer</td>
                                <td>TCP</td>
                                <td>1443</td>
                            </tr>
                            <tr>
                                <td>AllowRDP</td>
                                <td>TCP</td>
                                <td>3389</td>
                            </tr>
                        </tbody>
                    </table>

                    And then we will a couple of NIC level NSGs for attaching to Windows and Ubuntu servers, allowing RDP and SSH respectively.

                    <h3 id="initial-variablestf">Initial variables.tf</h3>

                    <ul>
                        <li>Create a variables.tf file
                            <ul>
                                <li>Go back into vscode’s explorer view (<code>CTRL</code>+<code>SHIFT</code>+<code>E</code>)</li>
                                <li>Hover over the Explorer bar and click on the new file icon</li>
                                <li>Name it <strong>variables.tf</strong></li>
                            </ul>
                        </li>
                        <li>Add in the following variables</li>
                    </ul>


                    <pre class=" language-ruby"><blockquote class=" language-ruby">variable <span class="token string">"loc"</span> <span class="token punctuation">{</span>
  description <span class="token operator">=</span> <span class="token string">"Default Azure region"</span>
  default     <span class="token operator">=</span>   <span class="token string">"West Europe"</span>
<span class="token punctuation">}</span>

variable <span class="token string">"tags"</span> <span class="token punctuation">{</span>
  default     <span class="token operator">=</span> <span class="token punctuation">{</span>
      source  <span class="token operator">=</span> <span class="token string">"citadel"</span>
      env     <span class="token operator">=</span> <span class="token string">"training"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
                    <ul>
                        <li>Save the file (<code>CTRL</code>+<code>S</code>)</li>
                        <li>Close the file (<code>CTRL</code>+<code>W</code>)</li>
                    </ul>

                    We’ll add to that file as we move through the lab.

                    <blockquote>
                        Tip: Give your filenames a .tf extension and save them before adding any HCL. The .tf extension will activate the Terraform extension within vscode, along with the intellisense and syntax highlighting.
                    </blockquote>

                    <h3 id="nsgs">NSGs</h3>

                    OK, let’s start with the NSGs. We will hardcode these from the name of the resource group to the names of the NSGs and the security rules within them. The initial file includes the NSG intended fo use at the resource group level, and the Ubuntu NSG intended for use at the VM’s NIC. You’ll then add on RFP to the resource_group_default NSG and create a new NSG for Windows.

                    <ul>
                        <li>Create an nsgs.tf</li>
                        <li>Add in the following text</li>
                    </ul>


                    <pre class=" language-ruby"><blockquote class=" language-ruby">resource <span class="token string">"azurerm_resource_group"</span> <span class="token string">"nsgs"</span> <span class="token punctuation">{</span>
 name         <span class="token operator">=</span> <span class="token string">"NSGs"</span>
 location     <span class="token operator">=</span> <span class="token string">"${var.loc}"</span>
 tags         <span class="token operator">=</span> <span class="token string">"${var.tags}"</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_network_security_group"</span> <span class="token string">"resource_group_default"</span> <span class="token punctuation">{</span>
 name <span class="token operator">=</span> <span class="token string">"ResourceGroupDefault"</span>
 resource_group_name  <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.nsgs.name}"</span>
 location             <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.nsgs.location}"</span>
 tags                 <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.nsgs.tags}"</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_network_security_rule"</span> <span class="token string">"AllowSSH"</span> <span class="token punctuation">{</span>
  name <span class="token operator">=</span> <span class="token string">"AllowSSH"</span>
  resource_group_name         <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.nsgs.name}"</span>
  network_security_group_name <span class="token operator">=</span> <span class="token string">"${azurerm_network_security_group.resource_group_default.name}"</span>

  priority                    <span class="token operator">=</span> <span class="token number">1010</span>
  access                      <span class="token operator">=</span> <span class="token string">"Allow"</span>
  direction                   <span class="token operator">=</span> <span class="token string">"Inbound"</span>
  protocol                    <span class="token operator">=</span> <span class="token string">"Tcp"</span>
  destination_port_range      <span class="token operator">=</span> <span class="token number">22</span>
  destination_address_prefix  <span class="token operator">=</span> <span class="token string">"*"</span>
  source_port_range           <span class="token operator">=</span> <span class="token string">"*"</span>
  source_address_prefix       <span class="token operator">=</span> <span class="token string">"*"</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_network_security_rule"</span> <span class="token string">"AllowHTTP"</span> <span class="token punctuation">{</span>
  name <span class="token operator">=</span> <span class="token string">"AllowHTTP"</span>
  resource_group_name         <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.nsgs.name}"</span>
  network_security_group_name <span class="token operator">=</span> <span class="token string">"${azurerm_network_security_group.resource_group_default.name}"</span>

  priority                    <span class="token operator">=</span> <span class="token number">1020</span>
  access                      <span class="token operator">=</span> <span class="token string">"Allow"</span>
  direction                   <span class="token operator">=</span> <span class="token string">"Inbound"</span>
  protocol                    <span class="token operator">=</span> <span class="token string">"Tcp"</span>
  destination_port_range      <span class="token operator">=</span> <span class="token number">80</span>
  destination_address_prefix  <span class="token operator">=</span> <span class="token string">"*"</span>
  source_port_range           <span class="token operator">=</span> <span class="token string">"*"</span>
  source_address_prefix       <span class="token operator">=</span> <span class="token string">"*"</span>
<span class="token punctuation">}</span>


resource <span class="token string">"azurerm_network_security_rule"</span> <span class="token string">"AllowHTTPS"</span> <span class="token punctuation">{</span>
  name <span class="token operator">=</span> <span class="token string">"AllowHTTPS"</span>
  resource_group_name         <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.nsgs.name}"</span>
  network_security_group_name <span class="token operator">=</span> <span class="token string">"${azurerm_network_security_group.resource_group_default.name}"</span>

  priority                    <span class="token operator">=</span> <span class="token number">1021</span>
  access                      <span class="token operator">=</span> <span class="token string">"Allow"</span>
  direction                   <span class="token operator">=</span> <span class="token string">"Inbound"</span>
  protocol                    <span class="token operator">=</span> <span class="token string">"Tcp"</span>
  destination_port_range      <span class="token operator">=</span> <span class="token number">443</span>
  destination_address_prefix  <span class="token operator">=</span> <span class="token string">"*"</span>
  source_port_range           <span class="token operator">=</span> <span class="token string">"*"</span>
  source_address_prefix       <span class="token operator">=</span> <span class="token string">"*"</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_network_security_rule"</span> <span class="token string">"AllowSQLServer"</span> <span class="token punctuation">{</span>
  name <span class="token operator">=</span> <span class="token string">"AllowSQLServer"</span>
  resource_group_name         <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.nsgs.name}"</span>
  network_security_group_name <span class="token operator">=</span> <span class="token string">"${azurerm_network_security_group.resource_group_default.name}"</span>

  priority                    <span class="token operator">=</span> <span class="token number">1030</span>
  access                      <span class="token operator">=</span> <span class="token string">"Allow"</span>
  direction                   <span class="token operator">=</span> <span class="token string">"Inbound"</span>
  protocol                    <span class="token operator">=</span> <span class="token string">"Tcp"</span>
  destination_port_range      <span class="token operator">=</span> <span class="token number">1443</span>
  destination_address_prefix  <span class="token operator">=</span> <span class="token string">"*"</span>
  source_port_range           <span class="token operator">=</span> <span class="token string">"*"</span>
  source_address_prefix       <span class="token operator">=</span> <span class="token string">"*"</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_network_security_group"</span> <span class="token string">"nic_ubuntu"</span> <span class="token punctuation">{</span>
 name <span class="token operator">=</span> <span class="token string">"NIC_Ubuntu"</span>
 resource_group_name  <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.nsgs.name}"</span>
 location             <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.nsgs.location}"</span>
 tags                 <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.nsgs.tags}"</span>

  security_rule <span class="token punctuation">{</span>
      name                       <span class="token operator">=</span> <span class="token string">"SSH"</span>
      priority                   <span class="token operator">=</span> <span class="token number">100</span>
      direction                  <span class="token operator">=</span> <span class="token string">"Inbound"</span>
      access                     <span class="token operator">=</span> <span class="token string">"Allow"</span>
      protocol                   <span class="token operator">=</span> <span class="token string">"Tcp"</span>
      source_port_range          <span class="token operator">=</span> <span class="token string">"*"</span>
      destination_port_range     <span class="token operator">=</span> <span class="token number">22</span>
      source_address_prefix      <span class="token operator">=</span> <span class="token string">"*"</span>
      destination_address_prefix <span class="token operator">=</span> <span class="token string">"*"</span>
<span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
                    The resource blocks show the two different ways that you can define NSGs. The resource_group_default has separate resource stanzas for the NSG rules, which are then attached to the empty NSG resource. The Ubuntu NSG resource includes a security_rule block within it.

                    Steps:

                    <ul>
                        <li>Save the file</li>
                        <li>Open a terminal
                            <ul>
                                <li>Either open a separate terminal or just use the integrated terminal in vscode (<code>CTRL</code>+<code>'</code>)</li>
                                <li>If in a separate terminal then change to your local repository directory</li>
                                <li>Run <code>ls -l</code> to check that the nsgs.tf and variables.tf are there</li>
                            </ul>
                        </li>
                        <li>Log in to Azure (<code>az login</code>)
                            <ul>
                                <li>Check your context (<code>az account show</code>)</li>
                            </ul>
                        </li>
                    </ul>

                    <blockquote>
                        Terraform has a few ways of authenticating the azurerm provider. In the first couple of labs we used the Cloud Shell, and the context included <code>"cloudShellID": true</code>. Cloud Shell uses a variant of Managed Service Identity (MSI) which is also used by the Terraform marketplace offering.In this lab you will be using the Azure CLI authentication, which is good for local development work. In later labs we will make use of Service Principals, which is my preferred mechanism for multi-admin and/or multi-tenanted environments.
                    </blockquote>

                    <ul>
                        <li>Run through the init -&gt; plan -&gt; apply workflow</li>
                        <li>
                            Check your new NSGs resource group in the <a href="https://portal.azure.com">portal</a>
                        </li>
                        <li>Add in a new NSG for Windows servers called <em>nic_windows</em> to nsgs.tf
                            <ul>
                                <li>Include an embedded security_rule to allow RDP traffic (port 3389)</li>
                            </ul>
                        </li>
                        <li>Add a new NSG rule called AllowRDP and link it to the existing resource_group_default NSG</li>
                        <li>Rerun the plan -&gt; apply workflow</li>
                    </ul>

                    Note the additions and changes highlighted in the plan.

                    <h3 id="core-networking">Core networking</h3>

                    OK, time for you to get a little self sufficient and create a coreNetwork.tf file for our core networking. <br><br>

                    This lab is designed to get you to start working with the <a href="https://aka.ms/terraform">https://aka.ms/terraform</a> documentation area. Note that you’ll have to <strong>scroll past the data sources</strong> on the left to get to the resource types. (The data sources are used to get information about existing Azure resources.) <br><br>

                    Note that we will create a stanza for the VPN Gateway. but for the sake of time we will default to commenting it out as it takes around 45 minutes to run.

                    <blockquote>
                        Note that the correct resource for this is <em>azurerm_virtual_network_gateway</em>. Don’t be confused by the <em>azurerm_vpn_gateway</em> which is used by the completely separate Virtual WAN service. Also note that the example includes information for certificates - you can remove those blocks for the sake of this lab.
                    </blockquote>

                    <ul>
                        <li>Create a coreNetwork.tf file containing:
                            <ul>
                                <li>Resource Group
                                    <ul>
                                        <li>Name: <strong>core</strong></li>
                                        <li>Location: use the <strong>loc</strong> variable</li>
                                        <li>Tags: use the <strong>tags</strong> variable</li>
                                    </ul>
                                </li>
                                <li><em>Match the Terraform id to the ARM resource name unless specified otherwise</em></li>
                                <li><em>Ensure all following resources are in this resource group and inherit the tags and location</em></li>
                                <li>Public IP
                                    <ul>
                                        <li>Name: <strong>vpnGatewayPublicIp</strong></li>
                                        <li>Dynamically allocated</li>
                                    </ul>
                                </li>
                                <li>Virtual Network
                                    <ul>
                                        <li>Name: <strong>core</strong></li>
                                        <li>Address space: <strong>10.0.0.0/16</strong></li>
                                        <li>DNS servers: <strong>1.1.1.1</strong> &amp; <strong>1.0.0.1</strong> (the Cloudflare public DNS servers)</li>
                                    </ul>
                                </li>
                                <li>Subnets
                                    <ul>
                                        <li>GatewaySubnet: <strong>10.0.0.0/24</strong></li>
                                        <li>training: <strong>10.0.1.0/24</strong></li>
                                        <li>dev: <strong>10.0.2.0/24</strong></li>
                                    </ul>
                                </li>
                                <li>VPN Gateway
                                    <ul>
                                        <li>Name: <strong>vpnGateway</strong></li>
                                        <li>Route based VPN on the basic SKU</li>
                                        <li>BGP should be enabled</li>
                                        <li>IP Configuration:
                                            <ul>
                                                <li>Name: <strong>vpnGwConfig1</strong></li>
                                                <li>Use the Public IP</li>
                                                <li>Use a dynamically allocated private IP</li>
                                            </ul>
                                        </li>
                                        <li>Use the GatewaySubnet</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    If you get stuck then the bottom of this lab has a link to a set of files that you can reference. Visual Studio Code also has a very good compare tool.

                    <ul>
                        <li>Run through the terraform init and plan to confirm that everything will run through ok</li>
                    </ul>

                    <blockquote>
                        <strong>Note that we will comment out the VPN Gateway stanza to save time and money Don’t run <code>terraform apply</code> too quickly!</strong>
                    </blockquote>

                    <ul>
                        <li>Use the multiline comment format to comment out the VPN Gateway stanza</li>
                    </ul>

                    There are a couple of ways of commenting in HCL:


                    <pre class=" language-tf"><blockquote class=" language-tf"># This is a single line comment

/* And this is a multi line
comment */</blockquote></pre>
                    <ul>
                        <li>Rerun the plan and confirm that the gateway now won’t be created</li>
                        <li>Apply the configuration</li>
                    </ul>

                    <h3 id="commit-your-changes">Commit your changes</h3>

                    If you look at the Source Control view in vscode then you should see a number of pending changes in there. Really we only want to commit the files we have been creating rather than the ones that have been generated by the terraform commands, and we can control that through the use of a .gitignore file.

                    <ul>
                        <li>Create a file called .gitignore</li>
                        <li>Add in the following text</li>
                    </ul>


                    <pre class=" language-text"><blockquote class=" language-text">.terraform/*
terraform.tfstate
terraform.tfstate.backup</blockquote></pre>
                    <ul>
                        <li>Save and close the file</li>
                    </ul>

                    The .gitignore exclusions should grey out the Terraform system files in the vscode Explorer, and in Source Control the pending changes should now be restricted to your *.tf files and the new .gitignore.

                    <ul>
                        <li>Stage and commit using “End of lab 3” as the message</li>
                        <li>Push the changes into your terraform-labs GitHub repo</li>
                    </ul>

                    <h3 id="end-of-lab-3">End of Lab 3</h3>

                    We have reached the end of the lab. You have started to use GitHub and work with multiple resource groups, resources and .tf files. We also deployed a very simple set of core resources that we can leverage in the following labs. <br><br>

                    The .tf files in tour repository should look somewhat similar to those in <a href="https://github.com/richeney/terraform-pre012-lab3">https://github.com/richeney/terraform-pre012-lab3</a>, although you may have spread your Terraform stanzas across your .tf files differently dependent on how you have it organised. <br><br>

                    In the next lab we will look at some of the meta parameters that you can use in Terraform to gain richer functionality.

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