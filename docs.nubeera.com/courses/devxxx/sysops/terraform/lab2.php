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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 2</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">DevOps</a></li>
                <li class="breadcrumb-item"><a href="../">SysOps</a></li>
                <li class="breadcrumb-item active">Terraform</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                <aside class="sidebar__right sticky">
                    <nav class="toc">
                        <h4 class="nav__title">On this page</h4>
                        <ul class="toc__menu">
                            <li><a href="#introduction">Introduction</a></li>
                            <li><a href="#create-the-terraform-lab2-resource-group-and-storage-account">Create the terraform-lab2 resource group and storage account</a></li>
                            <li><a href="#introducing-variables">Introducing variables</a></li>
                            <li><a href="#using-strings">Using strings</a></li>
                            <li><a href="#using-lists">Using lists</a></li>
                            <li><a href="#using-maps">Using maps</a></li>
                            <li><a href="#additional-terraform-providers">Additional Terraform providers</a></li>
                            <li><a href="#defining-unique-names-using-random_string">Defining unique names using random_string</a></li>
                            <li><a href="#using-terraform-console">Using terraform console</a></li>
                            <li><a href="#end-of-lab-2">End of Lab 2</a></li>
                        </ul>
                    </nav>
                </aside>

                <h3 id="introduction">Introduction</h3>

                In this lab we’ll continue to use the Cloud Shell. As you move through the lab you will start to make use of variables and multiple .tf files. We’ll modify existing resources and add new resources and new providers.

                <h3 id="create-the-terraform-lab2-resource-group-and-storage-account">Create the terraform-lab2 resource group and storage account</h3>

                Let’s quickly recreate the storage account in a new resource group. You should be in your ~/terraform-labs folder. If you <code>cat main.tf</code> then it should look like the following (with a different storage account name).

                <div class="code-toolbar">
                    <pre class=" language-hcl"><blockquote class=" language-hcl"><span class="token keyword">resource <span class="token type variable">"azurerm_resource_group"</span></span> <span class="token string">"lab1"</span> <span class="token punctuation">{</span>
<span class="token property">name</span>     <span class="token punctuation">=</span> <span class="token string">"terraform-lab1"</span>
<span class="token property">location</span> <span class="token punctuation">=</span> <span class="token string">"West Europe"</span>

<span class="token keyword">tags</span> <span class="token punctuation">{</span>
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
                    <li>Restart vscode (<code>code .</code>), refresh the Files pane and reselect main.tf</li>
                    <li>Change the Terraform resource ID (and name) for the resource group from lab1 to lab2
                        <ul>
                            <li>For speed, use the Replace (<code>CTRL</code>+<code>H</code>), add lab1 and lab2 in the boxes and then use <code>CTRL</code>+<code>ALT</code>+<code>Enter</code></li>
                            <li>To find the command shortcuts you can click on the ellipsis (<code>...</code>) and search in the Command Palette (<code>F1</code>)</li>
                        </ul>
                    </li>
                    <li>Save (<code>CTRL</code>+<code>S</code>)</li>
                </ul>

                Your main.tf should now look similar to the code block below:

                <div class="code-toolbar">
                    <pre class=" language-hcl"><blockquote class=" language-hcl"><span class="token keyword">resource <span class="token type variable">"azurerm_resource_group"</span></span> <span class="token string">"lab2"</span> <span class="token punctuation">{</span>
<span class="token property">name</span>     <span class="token punctuation">=</span> <span class="token string">"terraform-lab2"</span>
<span class="token property">location</span> <span class="token punctuation">=</span> <span class="token string">"West Europe"</span>

<span class="token keyword">tags</span> <span class="token punctuation">{</span>
  <span class="token property">environment</span> <span class="token punctuation">=</span> <span class="token string">"training"</span>
<span class="token punctuation">}</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"azurerm_storage_account"</span></span> <span class="token string">"lab2sa"</span> <span class="token punctuation">{</span>
<span class="token property">name</span>                     <span class="token punctuation">=</span> <span class="token string">"richeneyterraformlab2"</span>
<span class="token property">resource_group_name</span>      <span class="token punctuation">=</span> <span class="token string">"<span class="token interpolation"><span class="token punctuation">$</span><span class="token punctuation">{</span>azurerm_resource_group<span class="token punctuation">.</span>lab<span class="token number">2.</span>name<span class="token punctuation">}</span></span>"</span>
<span class="token property">location</span>                 <span class="token punctuation">=</span> <span class="token string">"westeurope"</span>
<span class="token property">account_tier</span>             <span class="token punctuation">=</span> <span class="token string">"Standard"</span>
<span class="token property">account_replication_type</span> <span class="token punctuation">=</span> <span class="token string">"LRS"</span>
<span class="token punctuation">}</span></blockquote></pre>
                </div>

                Again, your storage account name should be different to the one in the example. You can now run through the terraform init, plan and apply workflow at the CLI prompt. Check it exists:

                <div class="code-toolbar">
                    <pre class=" command-line language-bash" data-output="2-5" data-prompt="$"><blockquote class=" language-bash"><span class="command-line-prompt"><span data-prompt="$"></span><span></span><span></span><span></span></span>az resource list -g terraform-lab2 -o table
Name                   ResourceGroup    Location    Type                               Status
---------------------  ---------------  ----------  ---------------------------------  --------
richeneyterraformlab2  terraform-lab2   westeurope  Microsoft.Storage/storageAccounts</blockquote></pre>
                </div>

                <h3 id="introducing-variables">Introducing variables</h3>

                Terraform allows you to use multiple .tf files. The terraform commands will effectively merge all of the *.tf files in the current working directory. (Note that by design it does <em>not</em> recursively move through sub-directories.)

                So let’s create a variables.tf file in the citadel directory and define some of the key variables in there.

                <ul>
                    <li>Create a variables.tf file (<code>touch variables.tf</code>)
                        <ul>
                            <li>Precreating the files with the .tf extension triggers the Terraform linting, i.e. the colour coding for the HCL syntax</li>
                        </ul>
                    </li>
                    <li>Paste in the following:</li>
                </ul>

                <div class="code-toolbar">
                    <pre class=" language-hcl"><blockquote class=" language-hcl"><span class="token keyword">variable<span class="token type variable"> "rg" </span></span><span class="token punctuation">{</span>
  <span class="token property">default</span> <span class="token punctuation">=</span> <span class="token string">"terraform-lab2"</span>
<span class="token punctuation">}</span>

<span class="token keyword">variable<span class="token type variable"> "loc" </span></span><span class="token punctuation">{</span>
  <span class="token property">default</span> <span class="token punctuation">=</span> <span class="token string">"West Europe"</span>
<span class="token punctuation">}</span>

<span class="token keyword">variable<span class="token type variable"> "tags" </span></span><span class="token punctuation">{</span>
  <span class="token property">type</span> <span class="token punctuation">=</span> <span class="token string">"map"</span>
  <span class="token property">default</span> <span class="token punctuation">=</span> <span class="token punctuation">{</span>
      <span class="token property">environment</span> <span class="token punctuation">=</span> <span class="token string">"training"</span>
      <span class="token property">source</span>      <span class="token punctuation">=</span> <span class="token string">"citadel"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
                </div>

                There are three types of valid variables, which are string, list or map.

                <blockquote>
                    <strong>💬 Note.</strong> If you are familiar with ARM template then the Terraform variables are roughly synonymous with the parameters in ARM templates, and are used to declare what the user can specify. They can also be used to define variables that can be used globally by all *.tf files in the current working directory (cwd).
                </blockquote>

                The most commonly used variable argument is <code>default</code>. Terraform will infer the variable type from the default value. If you do not have a default then it will default to string so if you want a list or map then you have to specify the <code>type</code> argument.

                The <code>description</code> argument is optional but recommended, particularly when you are creating reusable modules in the later labs.

                We could have added these lines to the top of our main.tf file, but it makes sense to have them in separate files. It is the variables that commonly change between deployments, so moving them may allow the other *.tf files to be re-used without change. Also we can use different file permissions for the variables file if required.

                <h3 id="using-strings">Using strings</h3>

                Let’s edit our existing main.tf file and make use of the variables. The interpolation format for simple string variables is <code>"${var.&lt;varname&gt;}"</code>. The instructions will intentionally become less explicit to force you to refer to the documentation

                <ol>
                    <li>Change the resource group’s name to use <code>"${var.rg}"</code></li>
                    <li>Change the resource group’s location to make use of the new <code>loc</code> variable</li>
                    <li>Change the value for the location argument in the storage account stanza
                        <ul>
                            <li>We’ll link it to the location attribute exported from the resource group stanza</li>
                            <li>Format: <code>"${azurerm_resource_group.&lt;terraformId&gt;.location}"</code></li>
                            <li>The <a href="https://www.terraform.io/docs/providers/azurerm/r/resource_group.html">Terraform docs</a> for each provider type show the exported attributes, although some standard ones such as <em>id</em>, <em>location</em> and <em>tags</em> aren’t always listed</li>
                        </ul>
                    </li>
                    <li>Save your files locally</li>
                    <li>Run a <code>terraform plan</code></li>
                </ol>

                We may have introduced some simple string variables, but the plan output should indicate that there is nothing there that requires a change as our variable values match those in the state. (More on how Terraform handles state in later labs.)

                <h3 id="using-lists">Using lists</h3>

                Lists are simple arrays. We won’t use them just yet, but now is the right time to cover them quickly. Here is an example declaration of a simple array:

                <div class="code-toolbar">
                    <pre class=" language-yaml"><blockquote class=" language-yaml">variable "webAppLocations" <span class="token punctuation">{</span>
  default = <span class="token punctuation">[</span> <span class="token string">"francecentral"</span><span class="token punctuation">,</span> <span class="token string">"canadaeast"</span><span class="token punctuation">,</span> <span class="token string">"brazilsouth"</span><span class="token punctuation">,</span> <span class="token string">"japanwest"</span> <span class="token punctuation">]</span>
<span class="token punctuation">}</span></blockquote></pre>
                </div>

                Terraform will interpolate <code>"${var.webAppLocations[2]}"</code> as <code>brazilsouth</code>as the list index starts at zero.

                <strong>Question</strong>:

                What would be the interpolation syntax to return the number of Web App locations in the array? (Find the interpolation page in the <a href="https://www.terraform.io/docs/index.html">Terraform Docs</a> area for an example.)

                <strong>Answer</strong>:

                <div class="answer">
                    "${length(var.webapplocs)}"
                </div>

                That’s our first function. It won’t be our last.

                We will use use lists actively in the next lab when defining multiple subnets in our virtual network. Let’s move on to maps.

                <h3 id="using-maps">Using maps</h3>

                There is a ‘tags’ variable in the variables.tf file that is defined as a map.

                <div class="code-toolbar">
                    <pre class=" language-yaml"><blockquote class=" language-yaml">variable "tags" <span class="token punctuation">{</span>
  type = "map"
  default = <span class="token punctuation">{</span>
      environment = "training"
      source      = "citadel"
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
                </div>

                We can pull out individual values. For instance <code>"${var.tags["source"]}"</code> would be evaluated as <code>citadel</code>. (Note the syntax always uses double speech marks <code>"</code> rather than single quotes <code>'</code>.)

                Wwe can also pass in the whole map using <code>"${var.tags}"</code>, which will be resolved to:

                <div class="code-toolbar">
                    <pre class=" language-json"><blockquote class=" language-json"><span class="token punctuation">{</span>
  environment = <span class="token string">"training"</span>
  source      = <span class="token string">"citadel"</span>
<span class="token punctuation">}</span></blockquote></pre>
                </div>

                Let’s use that tags map for our resources:

                <ul>
                    <li>Change the tags for the resource group to use the <em>whole map</em> for the <strong>tags variable</strong></li>
                    <li>Set the tags on the storage account to use the tags exported attribute of the azurerm_resource_group</li>
                    <li>Prefix the storage account name with the value of the <strong>source tag</strong></li>
                    <li>Rerun the <code>terraform plan</code></li>
                </ul>

                If you get stuck on this section then you can skip to the end of the lab and click on the <em>terraform-lab2</em> repo to show example files.

                You should notice that the plan now shows some changes to be applied:

                <div class="code-toolbar">
                    <pre class=" language-bash"><blockquote class=" language-bash">richard@Azure:~/terraform-labs$ terraform plan
Refreshing Terraform state in-memory prior to plan<span class="token punctuation">..</span>.
The refreshed state will be used to calculate this plan, but will not be
persisted to local or remote state storage.

azurerm_resource_group.lab2: Refreshing state<span class="token punctuation">..</span>. <span class="token punctuation">(</span>ID: /subscriptions/2d31be49-d959-4415-bb65-<span class="token punctuation">..</span>.2c90ba62/resourceGroups/terraform-lab2<span class="token punctuation">)</span>
azurerm_storage_account.lab2sa: Refreshing state<span class="token punctuation">..</span>. <span class="token punctuation">(</span>ID: /subscriptions/2d31be49-d959-4415-bb65-<span class="token punctuation">..</span>./storageAccounts/richeneyterraformlab2<span class="token punctuation">)</span>

------------------------------------------------------------------------

An execution plan has been generated and is shown below.
Resource actions are indicated with the following symbols:
~ update in-place
-/+ destroy and <span class="token keyword">then</span> create replacement

Terraform will perform the following actions:

~ azurerm_resource_group.lab2
    tags.%:                           <span class="token string">"1"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"2"</span>
    tags.source:                      <span class="token string">""</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"citadel"</span>

-/+ azurerm_storage_account.lab2sa <span class="token punctuation">(</span>new resource required<span class="token punctuation">)</span>
    id:                               <span class="token string">"/subscriptions/2d31be49-d959-4415-bb65-8aec2c90ba62/resourceGroups/terraform-lab2/providers/Microsoft.Storage/storageAccounts/richeneyterraformlab2"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span> <span class="token punctuation">(</span>forces new resource<span class="token punctuation">)</span>
    access_tier:                      <span class="token string">""</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span>
    account_encryption_source:        <span class="token string">"Microsoft.Storage"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"Microsoft.Storage"</span>
    account_kind:                     <span class="token string">"Storage"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"Storage"</span>
    account_replication_type:         <span class="token string">"LRS"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"LRS"</span>
    account_tier:                     <span class="token string">"Standard"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"Standard"</span>
    enable_blob_encryption:           <span class="token string">"true"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"true"</span>
    enable_file_encryption:           <span class="token string">"true"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"true"</span>
    identity.<span class="token comment">#:                       "0" =&gt; &lt;computed&gt;</span>
    location:                         <span class="token string">"westeurope"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"westeurope"</span>
    name:                             <span class="token string">"richeneyterraformlab2"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"citadelricheneytflab2"</span> <span class="token punctuation">(</span>forces new resource<span class="token punctuation">)</span>
    primary_access_key:               <span class="token operator">&lt;</span>sensitive<span class="token operator">&gt;</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span> <span class="token punctuation">(</span>attribute changed<span class="token punctuation">)</span>
    primary_blob_connection_string:   <span class="token operator">&lt;</span>sensitive<span class="token operator">&gt;</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span> <span class="token punctuation">(</span>attribute changed<span class="token punctuation">)</span>
    primary_blob_endpoint:            <span class="token string">"https://richeneyterraformlab2.blob.core.windows.net/"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span>
    primary_connection_string:        <span class="token operator">&lt;</span>sensitive<span class="token operator">&gt;</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span> <span class="token punctuation">(</span>attribute changed<span class="token punctuation">)</span>
    primary_file_endpoint:            <span class="token string">"https://richeneyterraformlab2.file.core.windows.net/"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span>
    primary_location:                 <span class="token string">"westeurope"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span>
    primary_queue_endpoint:           <span class="token string">"https://richeneyterraformlab2.queue.core.windows.net/"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span>
    primary_table_endpoint:           <span class="token string">"https://richeneyterraformlab2.table.core.windows.net/"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span>
    resource_group_name:              <span class="token string">"terraform-lab2"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"terraform-lab2"</span>
    secondary_access_key:             <span class="token operator">&lt;</span>sensitive<span class="token operator">&gt;</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span> <span class="token punctuation">(</span>attribute changed<span class="token punctuation">)</span>
    secondary_blob_connection_string: <span class="token operator">&lt;</span>sensitive<span class="token operator">&gt;</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span> <span class="token punctuation">(</span>attribute changed<span class="token punctuation">)</span>
    secondary_blob_endpoint:          <span class="token string">""</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span>
    secondary_connection_string:      <span class="token operator">&lt;</span>sensitive<span class="token operator">&gt;</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span> <span class="token punctuation">(</span>attribute changed<span class="token punctuation">)</span>
    secondary_location:               <span class="token string">""</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span>
    secondary_queue_endpoint:         <span class="token string">""</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span>
    secondary_table_endpoint:         <span class="token string">""</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">&lt;</span>computed<span class="token operator">&gt;</span>
    tags.%:                           <span class="token string">"0"</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"2"</span>
    tags.environment:                 <span class="token string">""</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"training"</span>
    tags.source:                      <span class="token string">""</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">"citadel"</span>


Plan: 1 to add, 1 to change, 1 to destroy.

------------------------------------------------------------------------

Note: You didn<span class="token string">'t specify an "-out" parameter to save this plan, so Terraform
can'</span>t guarantee that exactly these actions will be performed <span class="token keyword">if</span>
<span class="token string">"terraform apply"</span> is subsequently run.</blockquote></pre>
                </div>

                This is when the plan stage becomes very useful, to see the impact of a change or addition. The colours on your screen are a useful indicator:

                <ul>
                    <li><strong>Additions</strong> to the environment are shown in <span style="color:green">green</span></li>
                    <li><strong>In place changes</strong> are shown in <span style="color:orange">orange</span> (such as the resource group tag change)</li>
                    <li><strong>Deletes and disruptive changes</strong> are shown in <span style="color:red">red</span> (such as the storage account name change)</li>
                </ul>

                Note that renaming a resource group or renaming a resource will require a more disruptive re-creation as the cosmetic names form part of the Azure resourceId. There are other changes that cannot be handled by the Azure Resource Manager layer as a straight update and require a deletion and recreation.

                <hr>

                <img src="https://archive.azurecitadel.com/automation/terraform/images/planSymbols.png" alt="planSymbols">

                <hr>

                The plan stage removes the guess work in managing a system through infrastructure as code, not only showing you what will happen, and the order and dependencies of those changes, but also the reasons for certain actions such a re-create. <br><br>

                In the Cloud Shell, type <code>terraform --help plan</code>. You will see a <code>--out</code> switch, that can be used to create a file of the plan. This may be used as a record of the change for change management systems, and may also be an input for the <code>terraform apply</code> stage. The <code>terraform apply</code> will run the plan first by default, except when you specify a serialised plan file. <br><br>

                There is no capability to revert to a previous configuratiom directly within Terraform itself. Instead you need to leverage source code management (SCM) systems to roll back to a previous set of configuration files and then run the plan and apply stages. (In the next lab we will make use of a personal GitHub repository.) <br><br>

                OK, let’s apply that change:

                <ul>
                    <li>Run <code>terraform apply</code></li>
                </ul>

                <h3 id="additional-terraform-providers">Additional Terraform providers</h3>

                First of all, as you know, Terraform supports multiple <a href="https://www.terraform.io/docs/providers/">providers</a>, from public and private cloud providers, through configuration management software such as Chef, application providers such as RabbitMQ and Kubernetes, a number of public DNS providers (e.g. Cloudflare) and monitoring software such as Datadog. It also has a number of miscellanous providers to extend the core functionality, such as those interacting with file and zips using the <em>local</em>, <em>archive</em> and <em>template</em> resource types.

                <h3 id="defining-unique-names-using-random_string">Defining unique names using random_string</h3>

                The storage account names need to be unique as it forms part of the external FQDN of the public endpoint. The shortname needs to be 3-24 characters of lowercase alphanumerics. We’ll reconfigure the storage account name to use a eight character random string suffix. This will introduces a couple of key concepts. <br><br>

                Again, you will need to be more self sufficient in this section. (If you do get stuck then you can always check the example repo at the end of the lab.) <br><br>

                <ul>
                    <li>Read the Terraform provider page for random
                        <ul>
                            <li>What are the arguments?</li>
                            <li>What is the exported attribute?</li>
                        </ul>
                    </li>
                    <li>Add in a new resource stanza
                        <ul>
                            <li>Use random_string as the provider type</li>
                            <li>Specify the id as “rnd”</li>
                            <li>Set the length to 8</li>
                            <li>Set the boolean values appropriately for the storage account naming restrictions</li>
                        </ul>
                    </li>
                    <li>Configure the storage account name to concatenate the following
                        <ul>
                            <li>Begin with ‘sa’</li>
                            <li>Concatenate the value of the source tag (e.g. ‘citadel’)</li>
                            <li>Suffix with the random string</li>
                        </ul>
                    </li>
                </ul>

                Save the file and then run <code>terraform plan</code> to see the impact. <br><br>

                The command should show that you haven’t got all of the required providers:

                <div class="code-toolbar">
                    <pre class=" language-yaml"><blockquote class=" language-yaml">richard@Azure<span class="token punctuation">:</span>~/terraform<span class="token punctuation">-</span>labs$ terraform plan
Plugin reinitialization required. Please run "terraform init".
<span class="token key atrule">Reason</span><span class="token punctuation">:</span> Could not satisfy plugin requirements.

Plugins are external binaries that Terraform uses to access and manipulate
resources. The configuration provided requires plugins which can't be located<span class="token punctuation">,</span>
don't satisfy the version constraints<span class="token punctuation">,</span> or are otherwise incompatible.

1 error(s) occurred<span class="token punctuation">:</span>

* provider.random<span class="token punctuation">:</span> no suitable version installed
version requirements<span class="token punctuation">:</span> <span class="token string">"(any version)"</span>
versions installed<span class="token punctuation">:</span> none

Terraform automatically discovers provider requirements from your
configuration<span class="token punctuation">,</span> including providers used in child modules. To see the
requirements and constraints from each module<span class="token punctuation">,</span> run "terraform providers".


<span class="token key atrule">Error</span><span class="token punctuation">:</span> error satisfying plugin requirements</blockquote></pre>
                </div>

                Run the <code>terraform init</code> command to pull down the random provider, and then run through the <code>terraform plan</code> and <code>terraform apply</code> steps.

                <hr>

                <strong>Question</strong>:

                As you build up Terraform configurations you will need to read the resource pages for the providers to find out which exported attributes you can then use elsewhere in your .tf files. <br><br>

                What are the four exported attributes for <strong>random_id</strong>? (Not random_string.)

                <strong>Answer</strong>:

                <div class="answer">
                    The random_id provider type exports b64_url, b64_std, hex and dec.
                </div>

                <strong>Question</strong>:

                If you wanted to ensure that the storage account name never exceeded 24 characters then which <strong>interpolation function</strong> could you use? <br>

                <strong>Answer</strong>:

                <div class="answer">
                    substr(string, offset, length), e.g. "${substr("sa${var.tags["source"]}${random_string.rnd.result}", 0, 24)}". The original string must be longer than the sum of offset and length so consider a longer random_string.
                </div>

                <hr>

                <h3 id="using-terraform-console">Using terraform console</h3>

                You may use <code>terraform console</code> to query the values of graph database entities in the state. The console command creates a REPL, or Read-Evaluate-Print-Loop. <br><br>

                Enter in the values of Below is an example:

                <div class="code-toolbar">
                    <pre class=" language-bash"><blockquote class=" language-bash">richard@Azure:~/terraform-labs$ terraform console
<span class="token operator">&gt;</span> var.rg
terraform-lab2
<span class="token operator">&gt;</span> var.tags
<span class="token punctuation">{</span>
<span class="token string">"environment"</span> <span class="token operator">=</span> <span class="token string">"training"</span>
<span class="token string">"source"</span> <span class="token operator">=</span> <span class="token string">"citadel"</span>
<span class="token punctuation">}</span>
<span class="token operator">&gt;</span> random_string.rnd.result
xafyl2l6
<span class="token operator">&gt;</span> azurerm_resource_group.lab2.id
/subscriptions/2d31be49-d959-4415-bb65-8aec2c90ba62/resourceGroups/terraform-lab2
<span class="token operator">&gt;</span> azurerm_storage_account.lab2sa.name
sacitadelxafyl2l6
<span class="token operator">&gt;</span> azurerm_storage_account.lab2sa.account_tier
Standard
<span class="token operator">&gt;</span> <span class="token keyword">exit</span>
Releasing state lock. This may take a few moments<span class="token punctuation">..</span>.</blockquote></pre>
                </div>

                <h3 id="end-of-lab-2">End of Lab 2</h3>

                We have reached the end of the lab. You have started to use variables and functions. <br><br>

                From lab 3 onwards we will be using Visual Studio Code and locally stored files rather than Cloud Shell. Therefore you can delete everything we’ve created to date. Run a <code>terraform destroy</code> to remove the environment. Feel free to keep the terraform-labs directory in your Cloud Shell home directory, but if you do want to clean it up then run <code>rm -fR ~/terraform-labs</code>. <br><br>

                In the next lab we will start to create the core of a more substantial Azure environment and base it in GitHub.
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