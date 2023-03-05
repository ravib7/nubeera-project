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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 5</h1>
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
                    <li><a href="#pre-requisites">Pre-requisites</a></li>
                    <li><a href="#service-principals">Service Principals</a></li>
                    <li><a href="#steps">Steps</a></li>
                    <li><a href="#challenge">Challenge</a></li>
                    <li><a href="#automated-scripts">Automated scripts</a></li>
                    <li><a href="#resetting-service-principal-credentials">Resetting service principal credentials</a></li>
                    <li><a href="#aliases">Aliases</a></li>
                    <li><a href="#advanced-service-principal-configuration">Advanced service principal configuration</a></li>
                    <li><a href="#creating-a-custom-terraform-role">Creating a custom Terraform role</a></li>
                    <li><a href="#adding-api-permissions-to-azure-active-directory">Adding API Permissions to Azure Active Directory</a></li>
                    <li><a href="#challenge-answers">Challenge Answers</a></li>
                    <li><a href="#end-of-lab-5">End of Lab 5</a></li>
                </ul>
                </nav>
                </aside>

                <h3 id="introduction">Introduction</h3>

                So far we have been authenticating using either Cloud Shell (labs 1 and 2) or Azure CLI (labs 3 and 4), which both work really well for one person when doing demos and a little development work. If you see your current context (as shown by <code>az account show</code>) then that will show the authentication type (if not explicitly) and also shows the tenancy and subscription you will be deploying into. <br><br>

                However it is not a workable approach when you have multiple admins working on an environment and it is not suitable if you are dealing with multiple tenants. <br><br>

                In this lab we will look at how we could make our Terraform platform work effectively in a multi-tenanted environment by using Service Principals. The approach here applies to any more complex environment where there are multiple subscriptions in play, as well as those supporting multiple tenancies or directories. Service Principals are also the recommended route if you are integrating the Terraform Provider into automation or within a DevOps CI/CD pipeline.

                <h3 id="pre-requisites">Pre-requisites</h3>

                You will have already been using the az and terraform executables locally. As Terraform is from the OSS world then these labs are unapologetically written from a linux and CLI 2.0 perspective. Linux and MacOS users are well catered for as vscode is cross-platform and the standard packages (az, terraform) are easily installed. <br><br>

                For Windows 10 then the minimum is to use both terraform and az at the Windows OS level so that you can use them within a Command Prompt or PowerShell session. <br><br>

                However the remaining labs really are based on Windows 10 users having enabled the Windows Subsystem for Linux (WSL) and do make use of Bash scripting at points. If you have Windows 10 and can enable WSL then it is very much recommended. Don’t forget to follow the <a href="https://azurecitadel.github.io/prereqs/wsl/">guide</a> to also install az, jq, git and terraform at that level.

                <blockquote>
                    An alternative is to make use of the <a href="#terraform-vm-on-the-azure-marketplace">Terraform VM</a> discussed towards the bottom of the lab. This has az, jq and terraform pre-installed and defaults to using MSI so the whole VM is authenticated to a subscription. You can ssh on to the VM and work straight away. And you are still free to use service principals in preference to MSI. This is an option, especially if your vi, nano or emacs skills are good.
                </blockquote>

                <h3 id="service-principals">Service Principals</h3>

                Service Principals are security identities within an Azure AD tenancy that may be used by apps, services and automation tools. <br><br>

                When you create a Service Principal then from an RBAC perspective it will, by default, have the Contributor role assigned at the subscription scope level. For most applications you would remove that and then assign a more limited RBAC role and scope assignment, but this default level is ideal for Terraform provisioning. <br><br>

                We will create a Service Principal and then create a provider.tf file in our containing the fields required. Make sure that you are in the right Azure context first (i.e. which tenancy and subscription).

                <ul>
                    <li>check your current context by using <code>az account show</code></li>
                    <li>list out your subscriptions using <code>az account list --output table</code></li>
                    <li>change subscription by using <code>az account set --subscription &lt;subscriptionId&gt;</code></li>
                </ul>

                Service principals work really well in a multi-tenanted environment as the service principal authentication details can sit directly in the relevant terraform directory so that it is easy to define the target subscription and tenancy and tightly connect it with the other infrastructure definitions. <br><br>

                For a standard multi-tenancy environment then you would create a service principal per subscription and then create a provider block for each terraform folder. (The provider stanza can be in any of the .tf files, but provider.tf is common.) <br><br>

                Having a separate terraform folder per customer or environment with its own provider.tf files is very flexible. It also mitigates common admin errors such as terraform commands being run whilst in the wrong context.

                <h3 id="steps">Steps</h3>

                This is an overview of the steps if you want to do this manually:

                <ul>
                    <li>Create the service principal</li>
                    <li>Capture the appId, password and tenant</li>
                    <li>Login as the service principal to test (optional)</li>
                    <li>Either
                        <ul>
                            <li>Create a azurerm provider block populated with the service principal values</li>
                            <li>Export environment variables, with an empty azurerm provider block</li>
                        </ul>
                    </li>
                    <li>Modify the service principal’s role and scope (optional)</li>
                    <li>Add application API permissions if required (optional)</li>
                </ul>

                <hr>

                Here is an example provider.tf file containing a <strong>populated</strong> azurerm provider block:


                <pre class=" language-ruby"><blockquote class=" language-ruby">provider <span class="token string">"azurerm"</span> <span class="token punctuation">{</span>
subscription_id <span class="token operator">=</span> <span class="token string">"2d31be49-d959-4415-bb65-8aec2c90ba62"</span>
client_id       <span class="token operator">=</span> <span class="token string">"b8928160-69bf-4483-a2cc-b726e1e65d87"</span>
client_secret   <span class="token operator">=</span> <span class="token string">"93b1423d-26a9-4ee7-a4f6-29e32d4c05e8"</span>
tenant_id       <span class="token operator">=</span> <span class="token string">"72f988bf-86f1-41af-91ab-2d7cd012db47"</span>
<span class="token punctuation">}</span></blockquote></pre>

                Recommendations:

                <ul>
                    <li><strong>Set restrictive file permissions.</strong></li>
                </ul>

                In a production environment you would need to ensure that this file has appropriate permissions so that the client_id and client_secret does not leak and create a security risk.

                <ul>
                    <li><strong>Add provider.tf into your .gitignore file</strong></li>
                </ul>

                Don’t push up sensitive values up into a public GitHub repository!

                <hr>

                The alternative is to use <strong>environment variables</strong>. For example, by adding the following lines to a .bashrc file:


                <pre class=" language-bash"><blockquote class=" language-bash"><span class="token function">export</span> ARM_SUBSCRIPTION_ID<span class="token operator">=</span><span class="token string">"2d31be49-d959-4415-bb65-8aec2c90ba62"</span>
<span class="token function">export</span> ARM_CLIENT_ID<span class="token operator">=</span><span class="token string">"b8928160-69bf-4483-a2cc-b726e1e65d87"</span>
<span class="token function">export</span> ARM_CLIENT_SECRET<span class="token operator">=</span><span class="token string">"93b1423d-26a9-4ee7-a4f6-29e32d4c05e8"</span>
<span class="token function">export</span> ARM_TENANT_ID<span class="token operator">=</span><span class="token string">"72f988bf-86f1-41af-91ab-2d7cd012db47"</span></blockquote></pre>

                If you are using environment variables then the provider block should be <strong>empty</strong>:


                <pre class=" language-ruby"><blockquote class=" language-ruby">provider <span class="token string">"azurerm"</span> <span class="token punctuation">{</span><span class="token punctuation">}</span></blockquote></pre>

                Note that this approach is not as effective if you are moving between terraform directories for different customer tenancies and subscriptions, as you need to export the correct variables for the required context, but it does have the benefit of not having the credentials visible in one of the *.tf files.

                <hr>

                You can also mix and match, with the tenant and subscription IDs in the provider, and then environment variables for ARM_CLIENT_ID and ARM_CLIENT_SECRET. This is a good combination as it ensures that you do not accidentally deploy resources into the wrong subscription, whilst removing the service principal’s app ID and password from the Terraform files.

                <h3 id="challenge">Challenge</h3>

                Rather than a straight lab, we’ll make this one more of a challenge. The challenge will get you in the habit of searching for documentation available from both Hashicorp and Microsoft. In this challenge you will create a service principal called <code>terraform-labs-&lt;subscriptionId&gt;-sp</code>.

                <strong>Run through the following</strong>:

                <ol>
                    <li><strong>Find your subscription ID and copy the GUID to the clipboard</strong></li>
                    <li><strong>Search for the documentation to create an Azure service principal for use with Terraform</strong></li>
                    <li><strong>Follow the guide and create a populated provider.tf file</strong></li>
                    <li><strong>Add provider.tf to your .gitignore file</strong></li>
                    <li><strong>Log on to azure as the service principal using the CLI</strong></li>
                    <li><strong>Log back in with your normal Azure ID and show the context</strong></li>
                    <li><strong>Search for the Azure Docs for changing the role (and scope) for the service principal</strong>
                        <ul>
                            <li>There is no need to change the role or scope at this point - this is purely for info</li>
                        </ul>
                    </li>
                    <li><strong>Run <code>terraform init</code> and <code>terraform plan</code></strong></li>
                    <li><strong>Log into the Azure <a href="https://portal.azure.com">portal</a> and search on App Registrations</strong>
                        <ul>
                            <li>The service will list out apps registered for the service principals</li>
                        </ul>
                    </li>
                </ol>

                If you get stuck then there are answers at the bottom of the lab.

                <h3 id="automated-scripts">Automated scripts</h3>

                If you want to automate the process then feel free to make use of this createTerraformServicePrincipal.sh script to create a service principal and provider.tf: <a href="https://github.com/azurecitadel/azurecitadel.github.io/blob/master/automation/terraform/createTerraformServicePrincipal.sh">https://github.com/azurecitadel/azurecitadel.github.io/blob/master/automation/terraform/createTerraformServicePrincipal.sh</a>

                The script will interactively

                <ol>
                    <li>create the service principal (or resets the credentials if it already exists)</li>
                    <li>prompts to choose either a populated or empty provider.tf azurerm provider block</li>
                    <li>exports the environment variables if you selected an empty block (and display the commands)</li>
                    <li>display the az login command to log in as the service principal</li>
                </ol>

                The following commands will download it and run it:


                <pre class=" language-bash"><blockquote class=" language-bash">uri<span class="token operator">=</span>https://raw.githubusercontent.com/azurecitadel/azurecitadel.github.io/master/automation/terraform/createTerraformServicePrincipal.sh
<span class="token function">curl</span> -sL <span class="token variable">$uri</span> <span class="token operator">&gt;</span> createTerraformServicePrincipal.sh <span class="token operator">&amp;&amp;</span> <span class="token function">chmod</span> 750 createTerraformServicePrincipal.sh
./createTerraformServicePrincipal.sh</blockquote></pre>

                You can also download a short splogin.sh script that logs in as the service principal if you have a populated provider.tf file:


                <pre class=" language-bash"><blockquote class=" language-bash">uri<span class="token operator">=</span>https://raw.githubusercontent.com/azurecitadel/azurecitadel.github.io/master/automation/terraform/splogin.sh
<span class="token function">curl</span> -sL <span class="token variable">$uri</span> <span class="token operator">&gt;</span> splogin.sh <span class="token operator">&amp;&amp;</span> <span class="token function">chmod</span> 750 splogin.sh</blockquote></pre>

                <h3 id="resetting-service-principal-credentials">Resetting service principal credentials</h3>

                Note that if you have lost the password values at any point then you can always use the following command to generate a new password:


                <pre class=" language-bash"><blockquote class=" language-bash">az ad sp credential reset --name <span class="token string">"http://terraform-&lt;subscriptionId&gt;"</span></blockquote></pre>

                Note the full name for a Service Principal is the display name we specified in the initial creation, prefixed with <code>http://</code> You will need to have the correct level of role based access to display or reset credentials.

                <h3 id="aliases">Aliases</h3>

                There is another less frequently used argument that you can specify in the provider block called <strong>alias</strong>. <br><br>

                Using aliases can be of use in a customer environment where they want to configure a deployment across multiple subscriptions or clouds. Let’s take the example of customer with one subscription for the core services and another for the devops team. If you do not have an alias specified in a provider block then that is your default provider, so adding aliases creates additional providers. You can then specify that provider alias in your resource stanzas. For example:


                <pre class=" language-ruby"><blockquote class=" language-ruby">provider <span class="token string">"azurerm"</span> <span class="token punctuation">{</span>
subscription_id <span class="token operator">=</span> <span class="token string">"2d31be49-d999-4415-bb65-8aec2c90ba62"</span>
client_id       <span class="token operator">=</span> <span class="token string">"cf34389a-839e-42a9-8201-9a5bed151767"</span>
client_secret   <span class="token operator">=</span> <span class="token string">"923ea4d9-829a-4477-9650-7a11c4a680f3"</span>
tenant_id       <span class="token operator">=</span> <span class="token string">"72f988bf-8691-41af-91ab-2d7cd011db47"</span>
<span class="token punctuation">}</span>

provider <span class="token string">"azurerm"</span> <span class="token punctuation">{</span>
<span class="token keyword">alias</span>           <span class="token operator">=</span> <span class="token string">"azurerm.devops"</span>
subscription_id <span class="token operator">=</span> <span class="token string">"1234be49-d999-4415-bb65-8aec2c90ba62"</span>
client_id       <span class="token operator">=</span> <span class="token string">"1234389a-839e-42a9-8201-9a5bed151767"</span>
client_secret   <span class="token operator">=</span> <span class="token string">"1234a4d9-829a-4477-9650-7a11c4a680f3"</span>
tenant_id       <span class="token operator">=</span> <span class="token string">"72f988bf-8691-41af-91ab-2d7cd011db47"</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_resource_group"</span> <span class="token string">"devopsrg"</span> <span class="token punctuation">{</span>
provider <span class="token operator">=</span> <span class="token string">"azurerm.devops"</span>

<span class="token comment"># ...</span>
<span class="token punctuation">}</span></blockquote></pre>

                And don’t forget that different service principals can have different scopes and roles within a subscription so that may also come in useful depending on the requirement. <br><br>

                Using service principals is an easy and powerful way of managing multi-tenanted environments when the admins are working in a centralised Terraform environment.

                <h3 id="advanced-service-principal-configuration">Advanced service principal configuration</h3>

                If you are creating resource groups (and standard resources within them) then a Terraform service principal with the standard Contributor role assigned at the subscription level is the most common configuration you will see. Consider this the default. <br><br>

                You will often see examples of Terraform resource types where the service principal is created manually. The serviceA principal’s client id and password are then passed in as variables. This does not need special permissions but is less automated. <br><br>

                This section deals with the additional configuration required to enhance your Terraform service principal’s abilities and widen the provider types it can apply and destroy. <br><br>

                You will need to be at the Owner or equivalent level to complete this section. <br><br>

                If you have no need of advanced service principal configuration then you may skip ahead to the <a href="#challenge-answers">challenge answers</a>.

                <h3 id="creating-a-custom-terraform-role">Creating a custom Terraform role</h3>

                If you are doing any of the following then your service principal will require a custom RBAC role and assignment:

                <ul>
                    <li>Creating RBAC roles and assigning against scopes
                        <ul>
                            <li>azurerm_role_assignment</li>
                            <li>azurerm_role_definition</li>
                            <li>azurerm_user_assigned_identity</li>
                        </ul>
                    </li>
                    <li>Creating and assigning policy definitions and initiatives
                        <ul>
                            <li>azurerm_policy_assignment</li>
                            <li>azurerm_policy_definition</li>
                        </ul>
                    </li>
                </ul>

                The definition of the in-built Contributor role has a number of NotActions, such as Microsoft.Authorization/*/Write. <br><br>

                See the role definition by running <code>az role definition list --name Contributor</code>.

                Output:


                <pre class=" language-json"><blockquote class=" language-json"><span class="token punctuation">[</span>
<span class="token punctuation">{</span>
  <span class="token property">"assignableScopes"</span><span class="token operator">:</span> <span class="token punctuation">[</span>
    <span class="token string">"/"</span>
  <span class="token punctuation">]</span><span class="token punctuation">,</span>
  <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Lets you manage everything except access to resources."</span><span class="token punctuation">,</span>
  <span class="token property">"id"</span><span class="token operator">:</span> <span class="token string">"/subscriptions/2bf55508-ddee-49d0-b4ac-c6a7461ef999/providers/Microsoft.Authorization/roleDefinitions/b24988ac-6180-42a0-ab98-20f7382dd24c"</span><span class="token punctuation">,</span>
  <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"b24988ac-6180-42a0-ab98-20f7382dd24c"</span><span class="token punctuation">,</span>
  <span class="token property">"permissions"</span><span class="token operator">:</span> <span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
      <span class="token property">"actions"</span><span class="token operator">:</span> <span class="token punctuation">[</span>
        <span class="token string">"*"</span>
      <span class="token punctuation">]</span><span class="token punctuation">,</span>
      <span class="token property">"dataActions"</span><span class="token operator">:</span> <span class="token punctuation">[</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
      <span class="token property">"notActions"</span><span class="token operator">:</span> <span class="token punctuation">[</span>
        <span class="token string">"Microsoft.Authorization/*/Delete"</span><span class="token punctuation">,</span>
        <span class="token string">"Microsoft.Authorization/*/Write"</span><span class="token punctuation">,</span>
        <span class="token string">"Microsoft.Authorization/elevateAccess/Action"</span><span class="token punctuation">,</span>
        <span class="token string">"Microsoft.Blueprint/blueprintAssignments/write"</span><span class="token punctuation">,</span>
        <span class="token string">"Microsoft.Blueprint/blueprintAssignments/delete"</span>
      <span class="token punctuation">]</span><span class="token punctuation">,</span>
      <span class="token property">"notDataActions"</span><span class="token operator">:</span> <span class="token punctuation">[</span><span class="token punctuation">]</span>
    <span class="token punctuation">}</span>
  <span class="token punctuation">]</span><span class="token punctuation">,</span>
  <span class="token property">"roleName"</span><span class="token operator">:</span> <span class="token string">"Contributor"</span><span class="token punctuation">,</span>
  <span class="token property">"roleType"</span><span class="token operator">:</span> <span class="token string">"BuiltInRole"</span><span class="token punctuation">,</span>
  <span class="token property">"type"</span><span class="token operator">:</span> <span class="token string">"Microsoft.Authorization/roleDefinitions"</span>
<span class="token punctuation">}</span>
<span class="token punctuation">]</span></blockquote></pre>

                We want to allow some of those Microsoft.Authorization actions. You can list those out using the following command:


                <pre class=" language-bash"><blockquote class=" language-bash">az provider operation show --namespace Microsoft.Authorization --query resourceTypes<span class="token punctuation">[</span><span class="token punctuation">]</span>.operations<span class="token punctuation">[</span><span class="token punctuation">]</span>.name<span class="token punctuation">[</span><span class="token punctuation">]</span> --output tsv <span class="token operator">|</span> <span class="token function">sort</span> <span class="token operator">|</span> <span class="token function">grep</span> -v <span class="token function">read</span></blockquote></pre>

                Output:


                <pre class=" language-yaml"><blockquote class=" language-yaml">Microsoft.Authorization/classicAdministrators/delete
Microsoft.Authorization/classicAdministrators/write
Microsoft.Authorization/denyAssignments/delete
Microsoft.Authorization/denyAssignments/write
Microsoft.Authorization/locks/delete
Microsoft.Authorization/locks/write
Microsoft.Authorization/policyAssignments/delete
Microsoft.Authorization/policyAssignments/write
Microsoft.Authorization/policyDefinitions/delete
Microsoft.Authorization/policyDefinitions/write
Microsoft.Authorization/policySetDefinitions/delete
Microsoft.Authorization/policySetDefinitions/write
Microsoft.Authorization/roleAssignments/delete
Microsoft.Authorization/roleAssignments/write
Microsoft.Authorization/roleDefinitions/delete
Microsoft.Authorization/roleDefinitions/write</blockquote></pre>

                For the moment we only want the roleAssignments and roleDefinitions actions and therefore the rest should remain as specified NotActions.

                <blockquote>
                    In the following commands, substitute 00000000-0000-0000-0000-000000000000 with your subscription GUID
                </blockquote>

                <ul>
                    <li>Create a file called terraform.customrole.json, containing the following:</li>
                </ul>


                <pre class=" language-json"><blockquote class=" language-json"><span class="token punctuation">{</span>
  <span class="token property">"Name"</span><span class="token operator">:</span>  <span class="token string">"Terraform"</span><span class="token punctuation">,</span>
  <span class="token property">"IsCustom"</span><span class="token operator">:</span>  <span class="token boolean">true</span><span class="token punctuation">,</span>
  <span class="token property">"Description"</span><span class="token operator">:</span>  <span class="token string">"Contributor, with exploded Microsoft.Authorization actions and no Blueprint actions."</span><span class="token punctuation">,</span>
  <span class="token property">"Actions"</span><span class="token operator">:</span>  <span class="token punctuation">[</span>
      <span class="token string">"*"</span>
      <span class="token punctuation">]</span><span class="token punctuation">,</span>
  <span class="token property">"NotActions"</span><span class="token operator">:</span>  <span class="token punctuation">[</span>
      <span class="token string">"Microsoft.Authorization/classicAdministrators/write"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/classicAdministrators/delete"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/denyAssignments/write"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/denyAssignments/delete"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/locks/write"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/locks/delete"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/policyAssignments/write"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/policyAssignments/delete"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/policyDefinitions/write"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/policyDefinitions/delete"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/policySetDefinitions/write"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/policySetDefinitions/delete"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/roleAssignments/delete"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/roleAssignments/write"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/roleDefinitions/delete"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/roleDefinitions/write"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Authorization/elevateAccess/Action"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Blueprint/*/write"</span><span class="token punctuation">,</span>
      <span class="token string">"Microsoft.Blueprint/*/delete"</span>
      <span class="token punctuation">]</span><span class="token punctuation">,</span>
  <span class="token property">"DataActions"</span><span class="token operator">:</span> <span class="token punctuation">[</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
  <span class="token property">"NotDataActions"</span><span class="token operator">:</span> <span class="token punctuation">[</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
  <span class="token property">"AssignableScopes"</span><span class="token operator">:</span>  <span class="token punctuation">[</span>
      <span class="token string">"/subscriptions/00000000-0000-0000-0000-000000000000"</span>
      <span class="token punctuation">]</span>
<span class="token punctuation">}</span></blockquote></pre>

                <blockquote>
                    The custom policy above is essentially the same as contributor, but with the exploded Microsoft.Authorization actions you can selectively delete the NotActions to permit your Terraform service principal to do more. Blueprint write and delete actions are prohibited.
                </blockquote>

                <ul>
                    <li>Customise the AssignableScopes. Any of the following are valid:
                        <ul>
                            <li>Change to “/” to allow the role to be assigned to all subscriptions (and child scopes)</li>
                            <li>Provide a list of subscription (or resource group) resource IDs as scopes</li>
                        </ul>
                    </li>
                    <li>Customise the NotActions:
                        <ul>
                            <li>For example, if you need your Terraform service principal to assign inbuilt roles to scopes, then delete the two lines for <em>Microsoft.Authorization/roleAssignments</em></li>
                            <li>There is a corresponding read action for those lines that is implicitly allowed</li>
                            <li>Permitting write actions enables <code>terraform apply</code> for those provider types, but you’ll also need the delete action for <code>terraform destroy</code></li>
                        </ul>
                    </li>
                    <li>Create the custom role:</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">az role definition create --role-definition terraform.customrole.json</blockquote></pre>

                <ul>
                    <li>List the roles assigned at the subscription level:</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">az role assignment list --output table</blockquote></pre>

                <ul>
                    <li>Remove the Contributor role:</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">az role assignment delete --role Contributor --assignee http://terraform-00000000-0000-0000-0000-000000000000-sp</blockquote></pre>

                <ul>
                    <li>Add the custom role:</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">az role assignment create --role Terraform --assignee http://terraform-00000000-0000-0000-0000-000000000000-sp</blockquote></pre>

                <ul>
                    <li>List the roles again</li>
                    <li>Display the new role definitions using <code>az role definition list --name Terraform</code></li>
                </ul>

                <h3 id="adding-api-permissions-to-azure-active-directory">Adding API Permissions to Azure Active Directory</h3>

                For Azure Active Directory resources you will need additional API permissions:

                <ul>
                    <li>Creating service principals and applications
                        <ul>
                            <li>azurerm_azuread_application</li>
                            <li>azurerm_azuread_service_principal</li>
                            <li>azurerm_azuread_service_principal_password</li>
                        </ul>
                    </li>
                </ul>

                This area actually falls outside of ARM. When you created the Terraform service principal, you also created an App Registration. You can give this registered app additional permissions for various APIs. <br><br>

                As per the note at the top of the <a href="https://www.terraform.io/docs/providers/azurerm/r/azuread_service_principal.html">azurerm_azuread_service_principal</a> documentation, the service principal will need Read &amp; Write All Applications and Sign In &amp; Read User Profile in the AAD API. This is the legacy API rather than the newer Microsoft Graph. <br><br>


                There are two types of permissions.

                <pre><blockquote>1. Delegated.  The app is permitted to drive the API but within the scope of the "parent" ID.  Therefore if the admin running `terraform apply` does not have access to create objects within AAD then the delegated permission will also not have access.  This is relatively safe.
1. Application. The permission is absolute and therefore inherently less secure.  Give thought before adding Role permissions and be selective on who then has access to the service principal credentials.
</blockquote></pre>

                <h3 id="portal">Portal</h3>

                As you can tell from the labs, I like to automate wherever possible. As a one off task this is quicker via the portal, especially as the final step does not appear to have a matching CLI command yet.

                <ul>
                    <li>Navigate to the API Permissions
                        <ul>
                            <li>Search for “App Registrations” in All Services</li>
                            <li>Select Preview experience</li>
                            <li>All Applications</li>
                            <li>Select the terraform-<subscriptionid>-sp application</subscriptionid>
                            </li>
                            <li>API Permissions</li>
                        </ul>
                    </li>
                    <li>Add a Permission
                        <ul>
                            <li>Select the Azure Active Directory Graph in the Supported legacy APIs section
                                <ul>
                                    <li>Select Application Permissions
                                        <ul>
                                            <li>Check Application.ReadWrite.All</li>
                                        </ul>
                                    </li>
                                    <li>Select Delegated Permissions
                                        <ul>
                                            <li>Check User.Read</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>Click on Add Permissions</li>
                        </ul>
                    </li>
                    <li>View the additional permissions in code form
                        <ul>
                            <li>Click on the Manifest in the blade</li>
                            <li>Scroll down to the requiredResourceAccess section</li>
                        </ul>
                    </li>
                </ul>

                <br><br><img src="https://archive.azurecitadel.com/automation/terraform/images/manifest.png" alt="manifest"><br><br>

                <blockquote>
                    The Resource App ID for the AAD API is 00000002-0000-0000-c000-000000000000.
                </blockquote>

                <ul>
                    <li>Click again on the API Permissions</li>
                </ul>

                <blockquote>
                    Note the warning showing that admin consent is required.
                </blockquote>

                <ul>
                    <li>Grant admin consent for Default Directory
                        <ul>
                            <li>Click Yes when prompted</li>
                        </ul>
                    </li>
                </ul>

                <br><br><img src="https://archive.azurecitadel.com/automation/terraform/images/permissions.png" alt="permissions"><br><br>

                The Terraform service principal will now be able to use the azurerm_service_principal provider type.

                <h3 id="cli">CLI</h3>

                The CLI commands are listed below for completeness. Note that there does not appear to be a CLI command to grant admin consent for the Default Directory.

                <ul>
                    <li>Create a file called manifest.json, containing the following JSON:</li>
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
                    <li>Get the ID for the service principal’s application:</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">subId<span class="token operator">=</span><span class="token variable"><span class="token variable">$(</span>az account show --query <span class="token function">id</span> --output tsv<span class="token variable">)</span></span>
appId<span class="token operator">=</span><span class="token variable"><span class="token variable">$(</span>az ad sp show --id <span class="token string">"http://terraform-<span class="token variable">${subId}</span>-sp"</span> --query appId --output tsv<span class="token variable">)</span></span></blockquote></pre>

                <ul>
                    <li>Show the API Permissions in the application’s manifest:</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">az ad app show --id <span class="token variable">$appId</span> --query requiredResourceAccess</blockquote></pre>

                This should be an empty array (<code>[]</code>) at this point.

                <ul>
                    <li>Update the API Permissions with the manifest</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">az ad app update --id <span class="token variable">$appId</span> --required-resource-accesses @manifest.json</blockquote></pre>

                <ul>
                    <li>Rerun the command to show the API permissions</li>
                </ul>

                <blockquote>
                    Note that there is no CLI command to grant consent to the default directory. Granting consent requires a few REST API calls. Follow the portal steps to navigate to the API Permissions dialog and then click on the button to grant consent
                </blockquote>

                <h3 id="challenge-answers">Challenge Answers</h3>

                Here are the answers to the challenge part of the lab.

                <ul>
                    <li>Find your subscription ID and copy the GUID to the clipboard</li>
                </ul>

                <div class="answer" style="font-size:50%">
                    <small>
                        There are many ways of finding the subscription GUID. Here are a few:

                        <ol>
                            <li>You can search on subscriptions at the top of the portal, or look at the properties in the portal blade of any resource group or resource.</li>
                            <li>From the az CLI you can run `az account show --output json`.</li>
                            <li>In scripting you could set a variable using `subId=$(az account show --output tsv --query id)`.</li>
                        </ol>

                    </small>
                </div>

                <ul>
                    <li>Search for the documentation to create an Azure service principal for use with Terraform</li>
                </ul>

                <div class="answer" style="font-size:50%">
                    Searching on "terraform azure service principal" takes you to https://www.terraform.io/docs/providers/azurerm/authenticating_via_service_principal.html.
                </div>

                <ul>
                    <li>Log back in with your normal Azure ID and show the context</li>
                </ul>

                <div class="answer" style="font-size:50%">
                    az logout<br>az login<br>az account show
                </div>

                <ul>
                    <li>Search for the Azure Docs for changing the role (and scope) for the service principal</li>
                </ul>

                <div class="answer" style="font-size:50%">
                    Searching on "azure cli service principal" takes you to https://docs.microsoft.com/en-us/cli/azure/create-an-azure-service-principal-azure-cli.<br>This includes sections on deleting and creating role assigments. You should always remove the Contributor role when adding a different inbuilt or custom role to a service principal.
                    The page itself does not mention scope, but clicking on the <em>az role assignment create</em> link takes you through to the https://docs.microsoft.com/en-us/cli/azure/role/assignment#az-role-assignment-create reference page. The command has a --scope switch that defaults to the subscription but can be set to another scope point such as a resource group or an individual resource.
                </div>

                <h3 id="end-of-lab-5">End of Lab 5</h3>

                We have reached the end of the lab. We’re now using Service Principals for authentication. <br><br>

                Your .tf files should look similar to those in <a href="https://github.com/richeney/terraform-pre012-lab5">https://github.com/richeney/terraform-pre012-lab5</a>.

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