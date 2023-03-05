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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 4</h1>
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
                    <li><a href="#reference-documentation">Reference documentation</a></li>
                    <li><a href="#interpolation">Interpolation</a></li>
                    <li><a href="#initial-webapptf-file">Initial webapp.tf file</a></li>
                    <li><a href="#using-count">Using count</a></li>
                    <li><a href="#multiple-web-apps-per-location">Multiple web apps per location</a></li>
                    <li><a href="#variables">Variables</a></li>
                    <li><a href="#create-a-terraformtfvars-file">Create a terraform.tfvars file</a></li>
                    <li><a href="#locals">Locals</a></li>
                    <li><a href="#outputs">Outputs</a></li>
                    <li><a href="#add-an-output-to-webappstf">Add an output to webapps.tf</a></li>
                    <li><a href="#end-of-lab-4">End of Lab 4</a></li>
                </ul>
                </nav>
                </aside>

                <h3 id="introduction">Introduction</h3>

                You can go a long way with Terraform making use of hard coded stanzas or defaulted variables. If you have a simpler configuration or don’t mind manually editing the files to configure the variables then this is a simple way to manage your Terraform files. However we are looking to build up reusable IP that will work in a multi-tenanted environment, and will prove to be more robust over time as we update those building blocks. <br><br>

                In this lab we will leverage some of the functions and meta parameters that you can use within HCL. Some of the richer configuration examples that you see will make extensive use of these meta parameters so you will need to have an idea of what they do if you want to leverage the work of others. <br><br>

                We’ll also look at the various ways that we can define variables.

                <h3 id="reference-documentation">Reference documentation</h3>

                There are a few key pages on the Terraform site that you will come back to often:

                <table>
                    <tbody>
                        <tr>
                            <td>Interpolation Syntax</a></td>
                            <td>Variables, conditionals, functions, count, mathematical operations</td>
                        </tr>
                        <tr>
                            <td>Variables</a></td>
                            <td>Strings, lists, maps, booleans, environment variables and variable files</td>
                        </tr>
                        <tr>
                            <td>Locals</a></td>
                            <td>Local values and how to use them</td>
                        </tr>
                        <tr>
                            <td>Data Sources</a></td>
                            <td>Using data sources</td>
                        </tr>
                        <tr>
                            <td>Outputs</a></td>
                            <td>Defining outputs</td>
                        </tr>
                    </tbody>
                </table>

                <hr>

                <h3 id="interpolation">Interpolation</h3>

                You have already been using interpolation. Terraform has interpreted everything wrapped in <code>"${ ... }"</code>. So far this has been limited to referencing variables (e.g. <code>"${var.loc}"</code>) or the exported attributes of various resource types (e.g. <code>"${azurerm_resource_group.nsgs.location}"</code>).

                Terraform has a rich syntax covered on the <a href="https://www.terraform.io/docs/configuration/interpolation.html">interpolation syntax</a> page.

                <ul>
                    <li>Scroll through the interpolation page to familiarise yourself with the breadth of capability</li>
                </ul>

                <strong>Question</strong>:

                What is the <strong>self</strong> variable and what does it do? How would the interpolation expression look for finding out the location of the current resource?<br>

                <strong>Answer</strong>:

                <div class="answer">
                    The special self variable is a shorthand to refer to the current resource stanza. You can use "${self.location}" to reference the location of the current resource. It only works within provisioners, which are covered in a later lab.
                </div>

                <strong>Question</strong>:

                If you had a boolean variable called <strong>createResource</strong> then you could make use of count with in if-then-else expression to control whether a resource is created or not. How does that work?<br>

                <strong>Answer</strong>:

                <div class="answer">
                    count = "${var.createResource ? 1 : 0}"
                </div>

                <strong>Question</strong>:

                Syntactically, what is the difference between <code>"${var.index-count - 1}"</code> and <code>"${var.index-count-1}"</code><br>

                <strong>Answer</strong>:

                <div class="answer">
                    "${var.index-count - 1}" subtracts 1 from a variable called index-count. "${var.index-count-1}" returns the value of a variable called index-count-1.
                </div>

                <hr>

                <h3 id="initial-webapptf-file">Initial webapp.tf file</h3>

                Count is a useful meta parameter, and allows for multiple resources to be configured. Let’s work through an example to get some familiarity with it. We’ll use the web app PaaS service, and deploy them to multiple locations

                <ul>
                    <li>Change the existing loc variable from “West Europe” to the shortname “westeurope”
                        <ul>
                            <li>The azurerm provider is intelligent enough to know that this is not a change</li>
                        </ul>
                    </li>
                    <li>Create a new webapplocs list variable
                        <ul>
                            <li>Set the default to contain the shortnames of a few regions from <code>az account list-locations --output table</code></li>
                            <li>E.g. <code>[ "eastus2", "uksouth", "centralindia" ]</code></li>
                        </ul>
                    </li>
                    <li>Create a new webapps.tf file
                        <ul>
                            <li>Define a new resource group called <strong>webapps</strong>
                                <ul>
                                    <li>Use the loc and tags variables as per normal</li>
                                    <li>Note that the resource group location only determines the region for the resource group’s metadata</li>
                                </ul>
                            </li>
                            <li>Add in the following code block which deploys a free tier plan and a linux web app to a single region</li>
                        </ul>
                    </li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">resource <span class="token string">"random_string"</span> <span class="token string">"webapprnd"</span> <span class="token punctuation">{</span>
length  <span class="token operator">=</span> <span class="token number">8</span>
lower   <span class="token operator">=</span> <span class="token keyword">true</span>
number  <span class="token operator">=</span> <span class="token keyword">true</span>
upper   <span class="token operator">=</span> <span class="token keyword">false</span>
special <span class="token operator">=</span> <span class="token keyword">false</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_app_service_plan"</span> <span class="token string">"free"</span> <span class="token punctuation">{</span>
  name                <span class="token operator">=</span> <span class="token string">"plan-free-${var.loc}"</span>
  location            <span class="token operator">=</span> <span class="token string">"${var.loc}"</span>
  resource_group_name <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.webapps.name}"</span>
  tags                <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.webapps.tags}"</span>

  kind                <span class="token operator">=</span> <span class="token string">"Linux"</span>
  reserved            <span class="token operator">=</span> <span class="token keyword">true</span>
  sku <span class="token punctuation">{</span>
      tier <span class="token operator">=</span> <span class="token string">"Free"</span>
      size <span class="token operator">=</span> <span class="token string">"F1"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_app_service"</span> <span class="token string">"citadel"</span> <span class="token punctuation">{</span>
  name                <span class="token operator">=</span> <span class="token string">"webapp-${random_string.webapprnd.result}-${var.loc}"</span>
  location            <span class="token operator">=</span> <span class="token string">"${var.loc}"</span>
  resource_group_name <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.webapps.name}"</span>
  tags                <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.webapps.tags}"</span>

  app_service_plan_id <span class="token operator">=</span> <span class="token string">"${azurerm_app_service_plan.free.id}"</span>
<span class="token punctuation">}</span></blockquote></pre>

                <ul>
                    <li>Save your files</li>
                    <li>Run through the Terraform init, plan and apply workflow to test the deployment</li>
                    <li>Show the id for the plan: <code>echo azurerm_app_service_plan.free.id | terraform console</code></li>
                    <li>Show the web address: <code>echo azurerm_app_service.citadel.default_site_hostname | terraform console</code></li>
                    <li>Commit and push</li>
                </ul>

                <hr>

                <h3 id="using-count">Using count</h3>

                OK, we’ll now modify the app service plan and app service stanzas to make them multi-region. This is done by using the count meta parameter.

                <blockquote>
                    Note that the example still uses the Linux free tier. In some subscription offers this will be limited to one per subscription. If so then either switch to Windows, or change the sku and tier tro Standard and S1 respectively.
                </blockquote>

                Here is a dummy example:


                <pre class=" language-ruby"><blockquote class=" language-ruby">resource <span class="token string">"azurerm_provider_type"</span> <span class="token string">"terraformid"</span> <span class="token punctuation">{</span>
  count               <span class="token operator">=</span> <span class="token number">3</span>
  name                <span class="token operator">=</span> <span class="token string">"cosmeticname-count.index"</span>
  location            <span class="token operator">=</span> <span class="token string">"${var.webapplocs[count.index]}"</span>
  resource_group_name <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.webapps.name}"</span>
  tags                <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.webapps.tags}"</span>

  kind                <span class="token operator">=</span> <span class="token string">"Linux"</span>
  sku <span class="token punctuation">{</span>
      tier <span class="token operator">=</span> <span class="token string">"Free"</span>
      size <span class="token operator">=</span> <span class="token string">"F1"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>

                , which may be as set to something simple such as <code>count = 2</code> or a numeric variable, such as <code>count = "${var.nlocs}"</code>. However we’ll set this to the number of locations we have in the webapplocs list variable. <br><br>

                We can then reference <code>${count.index}</code> in the stanzas. Remember that we can slice out a single list element. For instance you can select the first element of a variable called myList using <code>${var.myList[0]}</code>.

                <ul>
                    <li>Change the azurerm_app_service_plan.free and azurerm_app_service.citadel stanzas
                        <ul>
                            <li>Add a new count argument based on the length of the webapplocs list variable</li>
                            <li>Change location to the correct webapplocs element using <code>${count.index}</code></li>
                            <li>Change the resource name to use the same region shortname as a suffix, replacing <code>${var.loc}</code></li>
                        </ul>
                    </li>
                    <li>Save the webapps.tf file</li>
                </ul>

                Again, if at any point you find yourself struggling then you can always take a look at the lab files in the link at the bottom of the page. <br><br>

                If you run the terraform plan at this point then it should error, saying that it can no longer find <code>azurerm_app_service_plan.free.id</code>. <br><br>

                The <code>azurerm_app_service_plan.free.id</code> is the Azure Resource Manager ID for the app service plan, and is used as the value of the app_service_plan_id argument in the app service stanza. <br><br>

                We now have multiple app service plans spread around the globe, and so Terraform automatically generates am array rather than a single string, and introduces a special syntax form called the splat syntax. So rather then the single <code>azurerm_app_service_plan.free.id</code>, we now use <code>azurerm_app_service_plan.free.*.id</code> to access the list of Azure resource IDs generated by introducing count. And you can pull out a single element from that list using the <code>element()</code> function.

                <ul>
                    <li>Change the app_service_plan_id attribute value to <code>"${element(azurerm_app_service_plan.free.*.id, count.index)}"</code></li>
                    <li>Run the terraform plan and apply steps</li>
                    <li>List out the app service plan ids and web app hostnames using the splat syntax:
                        <ul>
                            <li><code>echo "azurerm_app_service_plan.free.*.id" | terraform console</code></li>
                            <li><code>echo "azurerm_app_service.citadel.*.default_site_hostname" | terraform console</code></li>
                        </ul>
                    </li>
                </ul>

                <hr>

                <h3 id="multiple-web-apps-per-location">Multiple web apps per location</h3>

                One really nice feature of the element() function is that it automatically wraps, acting like a mod operator. So if you wanted to have a number of web apps at each location you could create a new variable, multiply up the count and use the element function rather than a straight list index. <br><br>

                Here is an example of the two stanzas plus a local variable. <strong>Note that you do not need to make these changes to your webapps.tf file.</strong> We’ll also cover locals a little later in this lab.


                <pre class=" language-ruby"><blockquote class=" language-ruby">locals <span class="token punctuation">{</span>
  webappsperloc   <span class="token operator">=</span> <span class="token number">3</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_app_service_plan"</span> <span class="token string">"free"</span> <span class="token punctuation">{</span>
  count               <span class="token operator">=</span> <span class="token string">"${length(var.webapplocs)}"</span>
  name                <span class="token operator">=</span> <span class="token string">"plan-free-${var.webapplocs[count.index]}"</span>
  location            <span class="token operator">=</span> <span class="token string">"${var.webapplocs[count.index]}"</span>
  resource_group_name <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.webapps.name}"</span>
  tags                <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.webapps.tags}"</span>

  kind                <span class="token operator">=</span> <span class="token string">"Linux"</span>
  reserved            <span class="token operator">=</span> <span class="token keyword">true</span>
  sku <span class="token punctuation">{</span>
      tier <span class="token operator">=</span> <span class="token string">"Free"</span>
      size <span class="token operator">=</span> <span class="token string">"F1"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

resource <span class="token string">"azurerm_app_service"</span> <span class="token string">"citadel"</span> <span class="token punctuation">{</span>
  count               <span class="token operator">=</span> <span class="token string">"${ length(var.webapplocs) * local.webappsperloc }"</span>
  name                <span class="token operator">=</span> <span class="token string">"${format("</span>webapp<span class="token operator">-</span><span class="token string">%s-%02d-</span><span class="token string">%s", random_string.webapprnd.result, count.index + 1, element(var.webapplocs, count.index))}"</span>
  location            <span class="token operator">=</span> <span class="token string">"${element(var.webapplocs, count.index)}"</span>
  resource_group_name <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.webapps.name}"</span>
  tags                <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.webapps.tags}"</span>

  app_service_plan_id <span class="token operator">=</span> <span class="token string">"${element(azurerm_app_service_plan.free.*.id, count.index)}"</span>
<span class="token punctuation">}</span></blockquote></pre>

                The stanza for the app service plans is unchanged. The count for the app service plans is still based on the number of regions. <br><br>

                The app_service stanza is very different. For starters, the count for the web apps is now the number of regions multiplied by the webappsperloc local:


                <pre class=" language-ruby"><blockquote class=" language-ruby"><span class="token string">"${ length(var.webapplocs) * local.webappsperloc }"</span></blockquote></pre>

                The location makes use of element to loop round the locations. So if there are five locations (0-4), then location 0 would be used when count.index is 0, 5 and 10.


                <pre class=" language-ruby"><blockquote class=" language-ruby"><span class="token string">"${element(var.webapplocs, count.index)}"</span></blockquote></pre>

                And the naming has been formatted better, to include the count index which has been incremented by one (to be more natural for us humans) and zero filled. Again we are now using element for the region shortname suffix.


                <pre class=" language-ruby"><blockquote class=" language-ruby"><span class="token string">"${format("</span>webapp<span class="token operator">-</span><span class="token string">%s-%02d-</span><span class="token string">%s", random_string.webapprnd.result, count.index + 1, element(var.webapplocs, count.index))}"</span></blockquote></pre>

                And here is the end result after running through the workflow:

                <br><br><img src="https://archive.azurecitadel.com/automation/terraform/images/webappsperloc.png" alt="Multiple Web Apps in multiple locations">

                OK, so that is the basics for using copy. For those who are familiar with copy in ARM templates then it is roughly comparable with some important differences:

                <ol>
                    <li>ARM supports copy at both the resource and sub-resource level (for those array defined sub-resources such as subnets, data disks, NICs etc.)</li>
                    <li>Terraform supports count at the resource stanza level only</li>
                    <li>Not all Terraform resource types support the use of the count meta parameter</li>
                    <li>Whilst ARM supports count for sub-resources with a list type (such as NICs, data disks and subnets), these are commonly managed in Terraform as separate resource stanzas with their own provider type
                        <ul>
                            <li>The generated splat lists are then referenced by other provider types</li>
                        </ul>
                    </li>
                    <li>Terraform supports a count of zero whereas ARM template currently do not
                        <ul>
                            <li>Therefore count is also used to control whether a resource is deployed at all, covering the ARM template <em>condition</em> functionality</li>
                        </ul>
                    </li>
                </ol>

                <hr>

                <h3 id="variables">Variables</h3>

                So far we have used the <code>variable</code> keyword to declare our variables and we have used default values. <br><br>

                Let’s take the example of our <code>loc</code> variable and see a few different ways of overriding the default and setting it to UK South.

                <h3 id="environment-variables">Environment variables</h3>

                You may use environment variables for your terraform commands. All environment variable names must be prefixed with <code>TF_VAR_</code>, so if your variable name is <code>loc</code> then the environment variable setting would look like this:


                <pre class=" language-bash"><blockquote class=" language-bash"><span class="token function">export</span> TF_VAR_loc<span class="token operator">=</span>uksouth
terraform apply</blockquote></pre>

                Or you may set it only for the duration of that single command line, e.g. <code>TF_VAR_loc=uksouth terraform apply</code>.

                <h3 id="inline-variables">Inline variables</h3>

                You can also set the parameters inline, e.g. <code>terraform apply -var 'loc=uksouth'</code>. You may use -var multiple times.

                <h3 id="using-tfvars-files">Using .tfvars files</h3>

                If you have a lot of variables to set then you can place them in a file. By convention these are suffixed with <code>.tfvars</code>. <br><br>

                Think of the variables.tf as your variable <strong>declarations</strong>, where you define which variables are required and configure default values where sensible. The variables.tfvars file can then be used to set the <strong>values</strong>. If you specify a value for a variable in variables.tfvars then it will override the default in variables.tf.

                <blockquote>
                    This is analogous to declaring your ARM template parameters in the parameter section of the main azuredeploy.json template, and then setting the values in a azuredeploy.parameters.json file.
                </blockquote>

                Each line should be of the straighforward <code>loc=uksouth</code> format. You can then use <code>-var-file varfilename</code> as a switch. However if your variable file is called <code>terraform.tfvars</code> or <code>.auto.tfvars</code> then it will be loaded automatically.

                <h3 id="combinations-of-the-above">Combinations of the above</h3>

                You can use multiple of these. One approach is to use environment variables for sensitive connectivity information (such as the service principal information we’ll see in a later lab), to have standard customer variables in a terraform.tfvars file and then use -var switches as overrides. <br><br>

                You will be prompted to interactively enter any variable values if they are have not been defined using any of these mechanisms.

                <h3 id="create-a-terraformtfvars-file">Create a terraform.tfvars file</h3>

                Let’s create a tfvars file and add our variable values in there rather than relying on the defaults. We will use the same values so that we don’t make a real change to our environment. We’ll also remove the default for the webapplocs in variables.tf.

                <ul>
                    <li>Create a terraform.tfvars file</li>
                    <li>Add in the following block to set the loc and tags:</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">loc     <span class="token operator">=</span> <span class="token string">"westeurope"</span>
tags    <span class="token operator">=</span> <span class="token punctuation">{</span>
  source  <span class="token operator">=</span> <span class="token string">"citadel"</span>
  env     <span class="token operator">=</span> <span class="token string">"training"</span>
<span class="token punctuation">}</span></blockquote></pre>

                <ul>
                    <li>Add in your webapplocs value</li>
                    <li>Set the default webapplocs to an empty list</li>
                    <li>Run <code>terraform plan</code> to confirm that there are no planned changes</li>
                </ul>

                Using <code>terraform plan</code> to confim that there are no changes is good practice when you are reorganising your files, as it is a sense check that no unintentional changes have been introduced. <br><br>

                You can check that files linked to at the bottom of the lab if you get stuck.

                <h3 id="locals">Locals</h3>

                Taking the ‘infrastructure as code’ analogy a little further, you can think of normal variables as being the equivalent of global variables, and locals as being the local variables in a sub-routine or similar. <br><br>

                Locals are variables that are scoped to the .tf that they are stated in. The formatting is essentially a map of name value pairs for each local variable. Here is an example setting and usage, using the web app example stanza:


                <pre class=" language-ruby"><blockquote class=" language-ruby">locals <span class="token punctuation">{</span>
  app_regions     <span class="token operator">=</span> <span class="token punctuation">[</span> <span class="token string">"eastus2"</span><span class="token punctuation">,</span> <span class="token string">"uksouth"</span><span class="token punctuation">,</span> <span class="token string">"centralindia"</span> <span class="token punctuation">]</span>
  default_prefix  <span class="token operator">=</span> <span class="token string">"webapp-${var.tags["</span>env<span class="token string">"]}"</span>
  app_prefix      <span class="token operator">=</span> <span class="token string">"${var.app_prefix != "</span><span class="token string">" ? var.app_prefix : local.default_prefix}"</span>
<span class="token punctuation">}</span>

resource resource <span class="token string">"azurerm_app_service"</span> <span class="token string">"citadel"</span> <span class="token punctuation">{</span>
  count               <span class="token operator">=</span> <span class="token string">"${length(local.app_regions)}"</span>
  name                <span class="token operator">=</span> <span class="token string">"${format("</span><span class="token string">%s-%s-</span><span class="token string">%s", local.app_prefix, random_string.webapprnd.result, local.app_regions[count.index])}"</span>
  location            <span class="token operator">=</span> <span class="token string">"${local.app_regions[count.index]}"</span>
  resource_group_name <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.webapps.name}"</span>
  tags                <span class="token operator">=</span> <span class="token string">"${azurerm_resource_group.webapps.tags}"</span>

  app_service_plan_id <span class="token operator">=</span> <span class="token string">"${element(azurerm_app_service_plan.free.id, count.index)}"</span>
<span class="token punctuation">}</span></blockquote></pre>

                They are very useful for localised hard coding, and also for locally defaulting values as shown in the local.app_prefix logic.

                <h3 id="outputs">Outputs</h3>

                You can define attributes to be exported as outputs. One of the benefits of using outputs is that the outputs are listed at the end of the terraform apply output. <br><br>

                Outputs are defined as standalone stanzas and can be placed in any of your .tf files. Here is an example:


                <pre class=" language-ruby"><blockquote class=" language-ruby">output <span class="token string">"network_interface_ids"</span> <span class="token punctuation">{</span>
description <span class="token operator">=</span> <span class="token string">"ids of the vm nics provisoned."</span>
value       <span class="token operator">=</span> <span class="token string">"${azurerm_network_interface.vm.*.id}"</span>
<span class="token punctuation">}</span></blockquote></pre>

                <h3 id="add-an-output-to-webappstf">Add an output to webapps.tf</h3>

                <ul>
                    <li>Add a <strong>webapp_ids</strong> output to your webapps.tf file, to list out the ids for all of your webapps</li>
                    <li>Run the terraform plan and apply workflow</li>
                </ul>

                You should see output similar to the following:


                <pre class=" language-ruby"><blockquote class=" language-ruby"><span class="token punctuation">:</span>

<span class="token constant">Apply</span> complete<span class="token operator">!</span> <span class="token constant">Resources</span><span class="token punctuation">:</span> <span class="token number">0</span> added<span class="token punctuation">,</span> <span class="token number">0</span> changed<span class="token punctuation">,</span> <span class="token number">0</span> destroyed<span class="token punctuation">.</span>

<span class="token constant">Outputs</span><span class="token punctuation">:</span>

webapp_ids <span class="token operator">=</span> <span class="token punctuation">[</span>
  <span class="token operator">/</span>subscriptions<span class="token operator">/</span><span class="token number">2</span>d31be49<span class="token operator">-</span>d959<span class="token operator">-</span><span class="token number">4415</span><span class="token operator">-</span>bb65<span class="token operator">-</span><span class="token number">8</span>aec2c90ba62<span class="token operator">/</span>resourceGroups<span class="token operator">/</span>webapps<span class="token operator">/</span>providers<span class="token operator">/</span><span class="token constant">Microsoft</span><span class="token punctuation">.</span><span class="token constant">Web</span><span class="token operator">/</span>sites<span class="token operator">/</span>webapp<span class="token operator">-</span>rtplste0<span class="token operator">-</span>westeurope<span class="token punctuation">,</span>
  <span class="token operator">/</span>subscriptions<span class="token operator">/</span><span class="token number">2</span>d31be49<span class="token operator">-</span>d959<span class="token operator">-</span><span class="token number">4415</span><span class="token operator">-</span>bb65<span class="token operator">-</span><span class="token number">8</span>aec2c90ba62<span class="token operator">/</span>resourceGroups<span class="token operator">/</span>webapps<span class="token operator">/</span>providers<span class="token operator">/</span><span class="token constant">Microsoft</span><span class="token punctuation">.</span><span class="token constant">Web</span><span class="token operator">/</span>sites<span class="token operator">/</span>webapp<span class="token operator">-</span>rtplste0<span class="token operator">-</span>eastasia<span class="token punctuation">,</span>
  <span class="token operator">/</span>subscriptions<span class="token operator">/</span><span class="token number">2</span>d31be49<span class="token operator">-</span>d959<span class="token operator">-</span><span class="token number">4415</span><span class="token operator">-</span>bb65<span class="token operator">-</span><span class="token number">8</span>aec2c90ba62<span class="token operator">/</span>resourceGroups<span class="token operator">/</span>webapps<span class="token operator">/</span>providers<span class="token operator">/</span><span class="token constant">Microsoft</span><span class="token punctuation">.</span><span class="token constant">Web</span><span class="token operator">/</span>sites<span class="token operator">/</span>webapp<span class="token operator">-</span>rtplste0<span class="token operator">-</span>brazilsouth<span class="token punctuation">,</span>
  <span class="token operator">/</span>subscriptions<span class="token operator">/</span><span class="token number">2</span>d31be49<span class="token operator">-</span>d959<span class="token operator">-</span><span class="token number">4415</span><span class="token operator">-</span>bb65<span class="token operator">-</span><span class="token number">8</span>aec2c90ba62<span class="token operator">/</span>resourceGroups<span class="token operator">/</span>webapps<span class="token operator">/</span>providers<span class="token operator">/</span><span class="token constant">Microsoft</span><span class="token punctuation">.</span><span class="token constant">Web</span><span class="token operator">/</span>sites<span class="token operator">/</span>webapp<span class="token operator">-</span>rtplste0<span class="token operator">-</span>eastus2
<span class="token punctuation">]</span></blockquote></pre>

                You can also show the outputs in the current state file using the <code>terraform output</code> command. You can also output in JSON format if reading into languages such as Python or using with linux commands such as the jq filter:


                <pre class=" language-bash"><blockquote class=" language-bash">terraform-labs$ terraform output
webapp_ids <span class="token operator">=</span> <span class="token punctuation">[</span>
  /subscriptions/2d31be49-d959-4415-bb65-8aec2c90ba62/resourceGroups/webapps/providers/Microsoft.Web/sites/webapp-rtplste0-westeurope,
  /subscriptions/2d31be49-d959-4415-bb65-8aec2c90ba62/resourceGroups/webapps/providers/Microsoft.Web/sites/webapp-rtplste0-eastasia,
  /subscriptions/2d31be49-d959-4415-bb65-8aec2c90ba62/resourceGroups/webapps/providers/Microsoft.Web/sites/webapp-rtplste0-brazilsouth,
  /subscriptions/2d31be49-d959-4415-bb65-8aec2c90ba62/resourceGroups/webapps/providers/Microsoft.Web/sites/webapp-rtplste0-eastus2
<span class="token punctuation">]</span>

terraform-labs$ terraform output -json
<span class="token punctuation">{</span>
  <span class="token string">"webapp_ids"</span><span class="token keyword">:</span> <span class="token punctuation">{</span>
      <span class="token string">"sensitive"</span><span class="token keyword">:</span> false,
      <span class="token string">"type"</span><span class="token keyword">:</span> <span class="token string">"list"</span>,
      <span class="token string">"value"</span><span class="token keyword">:</span> <span class="token punctuation">[</span>
          <span class="token string">"/subscriptions/2d31be49-d959-4415-bb65-8aec2c90ba62/resourceGroups/webapps/providers/Microsoft.Web/sites/webapp-rtplste0-westeurope"</span>,
          <span class="token string">"/subscriptions/2d31be49-d959-4415-bb65-8aec2c90ba62/resourceGroups/webapps/providers/Microsoft.Web/sites/webapp-rtplste0-eastasia"</span>,
          <span class="token string">"/subscriptions/2d31be49-d959-4415-bb65-8aec2c90ba62/resourceGroups/webapps/providers/Microsoft.Web/sites/webapp-rtplste0-brazilsouth"</span>,
          <span class="token string">"/subscriptions/2d31be49-d959-4415-bb65-8aec2c90ba62/resourceGroups/webapps/providers/Microsoft.Web/sites/webapp-rtplste0-eastus2"</span>
      <span class="token punctuation">]</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

terraform-labs$ terraform output -json <span class="token operator">|</span> jq -r <span class="token string">'.webapp_ids.value[] | select(endswith("brazilsouth"))'</span>
/subscriptions/2d31be49-d959-4415-bb65-8aec2c90ba62/resourceGroups/webapps/providers/Microsoft.Web/sites/webapp-rtplste0-brazilsouth</blockquote></pre>

                <h3 id="end-of-lab-4">End of Lab 4</h3>

                We have reached the end of the lab. You have made use of count and count.index and also been introduced to a few other areas such as ways of setting variables, using locals and defining outputs. <br><br>

                Your .tf files should look similar to those in <a href="https://github.com/richeney/terraform-pre012-lab4">https://github.com/richeney/terraform-pre012-lab4</a>. <br><br>

                With everything we have looked at so far you can develop some pretty complex configurations. In the next lab we will move away from the Coud Shell or Azure CLI authentication we have used to date, and start using Service Principals.
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