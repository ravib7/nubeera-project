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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 7</h1>
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
                    <li><a href="#why-use-modules">Why use modules?</a></li>
                    <li><a href="#key-module-characteristics">Key module characteristics</a></li>
                    <li><a href="#create-a-terraform-module-scaffold-repository">Create a terraform-module-scaffold repository</a></li>
                    <li><a href="#create-the-scaffold-module">Create the scaffold module</a></li>
                    <li><a href="#create-a-new-maintf-in-terraform-labs">Create a new main.tf in terraform-labs</a></li>
                    <li><a href="#import-the-module">Import the module</a></li>
                    <li><a href="#refactoring-module-resources-in-a-state-file">Refactoring module resources in a state file</a></li>
                    <li><a href="#using-a-module-from-github">Using a module from GitHub</a></li>
                    <li><a href="#updating-modules">Updating modules</a></li>
                    <li><a href="#terraform-registry">Terraform Registry</a></li>
                    <li><a href="#end-of-lab-7">End of Lab 7</a></li>
                </ul>
                </nav>
                </aside>

                <h3 id="introduction">Introduction</h3>

                Terraform modules are used to create reusable components, and are the key to sensibly scaling out your configurations whilst maintaining your sanity. <br><br>

                This lab will cover:

                <ul>
                    <li>why modules are important</li>
                    <li>key characteristics</li>
                    <li>how to convert your existing .tf files</li>
                    <li>the Terraform Registry</li>
                </ul>

                <h3 id="why-use-modules">Why use modules?</h3>

                Modules help you to standardise your defined building blocks into defined and self contained packages. Modules can be referenced by multiple terraform configurations if they are centrally placed, which promotes reusability and therefore facilitates your default reference architectures and application patterns. <br><br>

                Terraform is flexible enough to pull in modules from different sources:

                <ul>
                    <li>Local file paths</li>
                    <li>Terraform Registry</li>
                    <li>GitHub</li>
                    <li>HTTP URLs</li>
                    <li>Other (S3 buckets, Git, Mercurial and Bitbucket repos)</li>
                </ul>

                As Terraform supports HTTP URLs then Azure blob storage would also be supported and could be secured using SAS tokens. We’ll look at Terraform Registry at the end of the lab, but for the moment we’ll be working with local paths and raw GitHub URLs. <br><br>

                You can also nest modules. For instance, you might have a customised virtual machine module, and then you could call that direct, or it could be called from within an availability set module. And then that availability set module itself could be nested within an application pattern that included, for instance, three subnets, Azure load balancers, NSGs and called the availability set module a few times. <br><br>

                This is an efficient way of starting with smaller modules and combining them to create complex configurations.

                <h3 id="key-module-characteristics">Key module characteristics</h3>

                The truth is that you have already been working with a module. The <strong>root module</strong> is everything that sits in the directory in which you have been running your terraform commands. <br><br>

                And a module is just a collection of terraform files in a location. <br><br>

                The code block below shows an example module call:


                <pre class=" language-ruby"><blockquote class=" language-ruby"><span class="token keyword">module</span> <span class="token string">"avset"</span> <span class="token punctuation">{</span>
source    <span class="token operator">=</span> <span class="token string">"./modules/availabilityset"</span>
name      <span class="token operator">=</span> <span class="token string">"myAvSet"</span>
vms       <span class="token operator">=</span> <span class="token number">3</span>
os        <span class="token operator">=</span> <span class="token string">"ubuntu"</span>
size      <span class="token operator">=</span> <span class="token string">"small"</span>
lb        <span class="token operator">=</span> <span class="token string">"internal"</span>
<span class="token punctuation">}</span></blockquote></pre>

                A few really important points to make:

                <ol>
                    <li><strong>Provider type is not required</strong>
                        <ul>
                            <li>You only need the Terraform id</li>
                        </ul>
                    </li>
                    <li><strong><em>Source</em> is the only required argument</strong>
                        <ul>
                            <li>If your module is hardcoded (like the NSGs) then this is all that you need</li>
                        </ul>
                    </li>
                    <li><strong>Create additional arguments for your module by defining variables</strong>
                        <ul>
                            <li>The module cannot see any variables from the root module</li>
                        </ul>
                    </li>
                    <li><strong>Create attributes for your module by defining output</strong>
                        <ul>
                            <li>You cannot access any ‘normal’ provider type attributes from the module unless they are exported as outputs</li>
                        </ul>
                    </li>
                </ol>

                Let’s look at using a module’s outputs as an exported attribute. For example, if the avset module had an output.tf containing the following:


                <pre class=" language-ruby"><blockquote class=" language-ruby">output <span class="token string">"ilb_ip"</span> <span class="token punctuation">{</span>
description <span class="token operator">=</span> <span class="token string">"Private IP address for the Internal Load Balancer resource"</span>
value       <span class="token operator">=</span> <span class="token string">"${azurerm_lb.azlb.private_ip_address}"</span>
<span class="token punctuation">}</span></blockquote></pre>

                You could then make use of the exported attribute in your root module as follows:


                <pre class=" language-ruby"><blockquote class=" language-ruby">resource <span class="token string">"azurerm_provider_type"</span> <span class="token string">"tfid"</span> <span class="token punctuation">{</span>
  dest_ip_address <span class="token operator">=</span> <span class="token string">"${module.avset.ilb_ip}"</span>
<span class="token punctuation">}</span></blockquote></pre>

                When your root module is using child modules then you will need to run a <code>terraform get</code>. This will copy the module information locally. (If your module is already local then it will return immediately.) You can then run through the <code>terraform init</code> to initalise and pull down any required providers before running the plan and apply stages of the workflow.

                <h3 id="create-a-terraform-module-scaffold-repository">Create a terraform-module-scaffold repository</h3>

                There is more to know about modules, but let’s crack on and make a simple one called scaffold, based on the networking and NSGs from lab 3. <br><br>

                We’ll first make a make a new GitHub repository for our modules.

                <ul>
                    <li>Go into GitHub and create a new repository called terraform-module-scaffold</li>
                    <li>Clone it in vscode</li>
                    <li>Select add Add to Workspace from the notification</li>
                </ul>

                <br><br><img src="https://archive.azurecitadel.com/automation/terraform/images/addToWorkshop/png" alt="Add to Workspace">

                <ul>
                    <li>Check vscode’s Explorer (<code>CTRL</code>+<code>SHIFT</code>+<code>E</code>) and SCM (<code>CTRL</code>+<code>SHIFT</code>+<code>G</code>) to see how it handles multi root workspaces</li>
                </ul>

                <h3 id="create-the-scaffold-module">Create the scaffold module</h3>

                <ul>
                    <li>Copy the <code>loc</code> and <code>tags</code> variables out of your root module’s variables.tf</li>
                    <li>Right click the terraform-module-scaffold bar in vscode Explorer</li>
                    <li>Create a new file called <code>variables.tf</code></li>
                    <li>Paste the two variables into the scaffold variables.tf</li>
                    <li>Create an <code>outputs.tf</code> file</li>
                    <li>Add in the following output</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby">output <span class="token string">"vpnGwPipAddress"</span> <span class="token punctuation">{</span>
value <span class="token operator">=</span> <span class="token string">"${azurerm_public_ip.vpnGatewayPublicIp.ip_address}"</span>
<span class="token punctuation">}</span></blockquote></pre>

                Concatenate the coreNetworking.tf and nsgs.tf file into the terraform-module-scaffold folder

                <ul>
                    <li>Open the Integrated Console and make sure you are in the terraform-labs folder</li>
                    <li>Run the commands in the following code block:</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash"><span class="token function">cat</span> coreNetworking.tf nsgs.tf <span class="token operator">&gt;</span> <span class="token punctuation">..</span>/terraform-module-scaffold/main.tf
<span class="token function">rm</span> coreNetworking.tf nsgs.tf</blockquote></pre>

                The commands have concatenated the two files into a new main.tf in our scaffold module, and then removed them from out terraform-labs area. <br><br>

                OK, that’s defined our local module folder. It is a common convention for modules to have only a variables.tf, main.tf and an outputs.tf and that is what we have.

                <ol>
                    <li>The variables.tf defines our modules inputs, which are loc and tags</li>
                    <li>The main azurerm stanzas are in the main.tf</li>
                    <li>The outputs.tf file has the module outputs, which is currently only the vpnGwPipAddress</li>
                </ol>

                <h3 id="create-a-new-maintf-in-terraform-labs">Create a new main.tf in terraform-labs</h3>

                We will rename the webapps.tf and add in the new module call at the top. (You still have full flexibility over how you name your *.tf files, but we’ll make the change anyway.)

                <ul>
                    <li>Rename the webapps.tf to main.tf</li>
                    <li>Insert the following stanza at the top of the file</li>
                </ul>


                <pre class=" language-ruby"><blockquote class=" language-ruby"><span class="token keyword">module</span> <span class="token string">"scaffold"</span> <span class="token punctuation">{</span>
source    <span class="token operator">=</span> <span class="token string">"../terraform-module-scaffold/scaffold"</span>
<span class="token punctuation">}</span></blockquote></pre>

                That is a relative path for the <em>source</em> value. You may fully path if you prefer.

                <h3 id="import-the-module">Import the module</h3>

                <ul>
                    <li>Run <code>terraform get</code></li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">terraform-labs$ terraform get
- module.scaffold
Getting <span class="token function">source</span> <span class="token string">"/mnt/c/Users/richeney/git/terraform-module-scaffold"</span>

terraform-labs$ tree .terraform
.terraform
├── modules
│   ├── ca0c4bdbf3f2e5218f73ce44078a995f -<span class="token operator">&gt;</span> /mnt/c/Users/richeney/git/terraform-module-scaffold
│   └── modules.json
├── plugins
│   └── linux_amd64
│       ├── lock.json
│       ├── terraform-provider-azurerm_v1.13.0_x4
│       └── terraform-provider-random_v2.0.0_x4
└── terraform.tfstate</blockquote></pre>

                Notice that it is a symlink when using local modules.

                <ul>
                    <li>Display the modules.json through jq</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">terraform-labs$ jq <span class="token keyword">.</span> .terraform/modules/modules.json
<span class="token punctuation">{</span>
<span class="token string">"Modules"</span><span class="token keyword">:</span> <span class="token punctuation">[</span>
  <span class="token punctuation">{</span>
    <span class="token string">"Source"</span><span class="token keyword">:</span> <span class="token string">"/mnt/c/Users/richeney/git/terraform-module-scaffold"</span>,
    <span class="token string">"Key"</span><span class="token keyword">:</span> <span class="token string">"1.scaffold;/mnt/c/Users/richeney/git/terraform-module-scaffold"</span>,
    <span class="token string">"Version"</span><span class="token keyword">:</span> <span class="token string">""</span>,
    <span class="token string">"Dir"</span><span class="token keyword">:</span> <span class="token string">".terraform/modules/ca0c4bdbf3f2e5218f73ce44078a995f"</span>,
    <span class="token string">"Root"</span><span class="token keyword">:</span> <span class="token string">""</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">]</span>
<span class="token punctuation">}</span></blockquote></pre>

                <ul>
                    <li>Run <code>terraform init</code></li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">terraform-labs$ terraform init
Initializing modules<span class="token punctuation">..</span>.
- module.scaffold

Initializing the backend<span class="token punctuation">..</span>.

Initializing provider plugins<span class="token punctuation">..</span>.

<span class="token keyword">:</span></blockquote></pre>

                <ul>
                    <li>Run <code>terraform plan</code></li>
                </ul>

                You should see in the plan output that all of the resources that are now in the module will be deleted and recreated. <strong>DO NOT RUN A TERRAFORM APPLY!!</strong> <br><br>

                Those resources have essentially all been renamed, with the resources prefixed with <code>module.terraform.</code> and we can use that to manipulate the terraform.tfstate file. This gives us an opportunity to introduce another command to manage state effectively.

                <h3 id="refactoring-module-resources-in-a-state-file">Refactoring module resources in a state file</h3>

                We can refactor the Terraform IDs for those resources using the <code>terraform state mv</code> command. This is a very flexible tool that can selectively extract resources from one state file into another. Run <code>terraform state mv --help</code> to check the help page for it.

                <ul>
                    <li>Run the loop below to rename the resources in our existing state file</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash"><span class="token keyword">for</span> resource <span class="token keyword">in</span> <span class="token variable"><span class="token variable">$(</span>terraform plan -no-color <span class="token operator">|</span> <span class="token function">grep</span> <span class="token string">"^  + module.scaffold"</span> <span class="token operator">|</span> <span class="token function">awk</span> <span class="token string">'{print <span class="token variable">$NF</span>}'</span><span class="token variable">)</span></span>
<span class="token keyword">do</span> terraform state <span class="token function">mv</span> $<span class="token punctuation">{</span>resource<span class="token comment">##module.scaffold.} $resource</span>
<span class="token keyword">done</span></blockquote></pre>

                <ul>
                    <li>Rerun <code>terraform plan</code></li>
                </ul>

                You should now see that there are no changes required. Whenever you are making fundamental backend changes to a configuration then getting to this point of stability is important before introducing actual adds, deletes and changes to the infrastructure. <br><br>

                The <code>terraform state mv</code> command is potentially dangerous, so Terraform sensibly creates backup files for each action. If you want to tidy those automatically created backup files up then you can run <code>rm terraform.tfstate.??????????.backup</code>.

                <h3 id="using-a-module-from-github">Using a module from GitHub</h3>

                You probably wouldn’t create and use a local module and then switch to using the very same module in GitHub. If you did then the clean way to handle that would be to remove the modules area entirely (<code>rm -fR .terraform/modules</code>) as we are only using the one local module at this point. But we won’t do that as it will allow us to dig into them and understand them a little better. <br><br>

                Push the module up to GitHub:

                <ul>
                    <li>Open the Source Control sidebar in vscode (<code>CTRL</code>+<code>SHIFT</code>+<code>G</code>)</li>
                    <li>Commit your scaffold module</li>
                    <li>Push the terraform-module-scaffold repository up to GitHub
                        <ul>
                            <li>If you have multiple repositories open then click on the sync icon for terraform-module-scaffold in the Source Control Providers</li>
                            <li>Repeat the above for your terraform-labs repository if you have not pushed it up recently</li>
                        </ul>
                    </li>
                    <li>Open a browser and navigate to the terraform-module-scaffold repository
                        <ul>
                            <li>Example path: <code>https://github.com/\&lt;username&gt;/terraform-module-scaffold/</code></li>
                            <li>You should see the variables.tf, main.tf and outputs.tf</li>
                        </ul>
                    </li>
                    <li>Copy the address in the address bar (<code>CTRL</code>+<code>L</code>, <code>CTRL</code>+<code>C</code>)</li>
                    <li>Find the module in your terraform-labs main.tf</li>
                    <li>Replace the local path with the GitHub URI without the <code>https://</code> prefix</li>
                </ul>

                For example:


                <pre class=" language-ruby"><blockquote class=" language-ruby"><span class="token keyword">module</span> <span class="token string">"scaffold"</span> <span class="token punctuation">{</span>
<span class="token comment"># source    = "/mnt/c/Users/richeney/git/terraform-module-scaffold"</span>
source    <span class="token operator">=</span> <span class="token string">"github.com/richeney/terraform-module-scaffold"</span>
<span class="token punctuation">}</span></blockquote></pre>

                <ul>
                    <li>Run <code>terraform get</code>
                        <ul>
                            <li>It will take a little longer as it will clone it locally</li>
                            <li>Local modules are quicker to ‘get’ as they are only symlinks</li>
                        </ul>
                    </li>
                    <li>Run <code>tree .terraform</code></li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">terraform-labs$ tree .terraform
.terraform
├── modules
│   ├── a5269b88508cfda37e02e97e5759753f
│   │   ├── main.tf
│   │   ├── outputs.tf
│   │   ├── README.md
│   │   └── variables.tf
│   ├── ca0c4bdbf3f2e5218f73ce44078a995f -<span class="token operator">&gt;</span> /mnt/c/Users/richeney/git/terraform-module-scaffold
│   └── modules.json
├── plugins
│   └── linux_amd64
│       ├── lock.json
│       ├── terraform-provider-azurerm_v1.13.0_x4
│       └── terraform-provider-random_v2.0.0_x4
└── terraform.tfstate

5 directories, 9 files</blockquote></pre>

                The modules directory has a code to denote each module. The top one (<code>a5269b88508c...</code>) contains the files cloned from GitHub. The second one is symlinked to the local module directory. <br><br>

                <ul>
                    <li>Open the modules.json file in vscode
                        <ul>
                            <li>It contains a list (<code>[]</code>) containing a JSON object (<code>{}</code>) for both of the modules</li>
                            <li>The file will be minified, but if you have Erik Lynd’s JSON Tools extension then you can use <code>CTRL</code>+<code>ALT</code>+<code>M</code> to prettify the JSON.</li>
                        </ul>
                    </li>
                </ul>


                <pre class=" language-json"><blockquote class=" language-json"><span class="token punctuation">{</span>
<span class="token property">"Modules"</span><span class="token operator">:</span> <span class="token punctuation">[</span>
  <span class="token punctuation">{</span>
    <span class="token property">"Source"</span><span class="token operator">:</span> <span class="token string">"/mnt/c/Users/richeney/git/terraform-module-scaffold"</span><span class="token punctuation">,</span>
    <span class="token property">"Key"</span><span class="token operator">:</span> <span class="token string">"1.scaffold;/mnt/c/Users/richeney/git/terraform-module-scaffold"</span><span class="token punctuation">,</span>
    <span class="token property">"Version"</span><span class="token operator">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
    <span class="token property">"Dir"</span><span class="token operator">:</span> <span class="token string">".terraform/modules/ca0c4bdbf3f2e5218f73ce44078a995f"</span><span class="token punctuation">,</span>
    <span class="token property">"Root"</span><span class="token operator">:</span> <span class="token string">""</span>
  <span class="token punctuation">}</span><span class="token punctuation">,</span>
  <span class="token punctuation">{</span>
    <span class="token property">"Source"</span><span class="token operator">:</span> <span class="token string">"github.com/richeney/terraform-module-scaffold"</span><span class="token punctuation">,</span>
    <span class="token property">"Key"</span><span class="token operator">:</span> <span class="token string">"1.scaffold;github.com/richeney/terraform-module-scaffold"</span><span class="token punctuation">,</span>
    <span class="token property">"Version"</span><span class="token operator">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
    <span class="token property">"Dir"</span><span class="token operator">:</span> <span class="token string">".terraform/modules/a5269b88508cfda37e02e97e5759753f"</span><span class="token punctuation">,</span>
    <span class="token property">"Root"</span><span class="token operator">:</span> <span class="token string">""</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">]</span>
<span class="token punctuation">}</span></blockquote></pre>

                We’ll remove the old local module, which is the first one in my example

                <ul>
                    <li>Remove the local module object, for instance:</li>
                </ul>


                <pre class=" language-json"><blockquote class=" language-json"><span class="token punctuation">{</span>
<span class="token property">"Modules"</span><span class="token operator">:</span> <span class="token punctuation">[</span>
  <span class="token punctuation">{</span>
    <span class="token property">"Source"</span><span class="token operator">:</span> <span class="token string">"github.com/richeney/terraform-module-scaffold"</span><span class="token punctuation">,</span>
    <span class="token property">"Key"</span><span class="token operator">:</span> <span class="token string">"1.scaffold;github.com/richeney/terraform-module-scaffold"</span><span class="token punctuation">,</span>
    <span class="token property">"Version"</span><span class="token operator">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
    <span class="token property">"Dir"</span><span class="token operator">:</span> <span class="token string">".terraform/modules/a5269b88508cfda37e02e97e5759753f"</span><span class="token punctuation">,</span>
    <span class="token property">"Root"</span><span class="token operator">:</span> <span class="token string">""</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">]</span>
<span class="token punctuation">}</span></blockquote></pre>

                If you have any JSON syntax errors then vscode will highlight those for you.

                <ul>
                    <li>Save the file</li>
                    <li>Remove the matching dir</li>
                </ul>


                <pre class=" language-bash"><blockquote class=" language-bash">terraform-labs$ <span class="token function">ls</span> -l .terraform/modules/
total 0
drwxrwxrwx 1 richeney richeney 4096 Sep  4 17:01 a5269b88508cfda37e02e97e5759753f
lrwxrwxrwx 1 richeney richeney   51 Sep  4 16:46 ca0c4bdbf3f2e5218f73ce44078a995f -<span class="token operator">&gt;</span> /mnt/c/Users/richeney/git/terraform-module-scaffold-rwxrwxrwx 1 richeney richeney  439 Sep  4 17:01 modules.json

terraform-labs$ <span class="token function">rm</span> .terraform/modules/ca0c4bdbf3f2e5218f73ce44078a995f

terraform-labs$ <span class="token function">ls</span> -l .terraform/modules/
total 0
drwxrwxrwx 1 richeney richeney 4096 Sep  4 17:01 a5269b88508cfda37e02e97e5759753f
-rwxrwxrwx 1 richeney richeney  439 Sep  4 17:01 modules.json</blockquote></pre>

                <ul>
                    <li>Rerun <code>terraform get</code>, <code>terraform init</code> and <code>terraform plan</code> to ensure all is good</li>
                </ul>

                Note that the plan did not flag any required changes as the terraform IDs were unaffected by the change in module location.

                <h3 id="updating-modules">Updating modules</h3>

                One of the key tenets for Terraform is the idea of versioning. This applies throughout the configuration, from the version of the terraform executable itself through to the version control (via SCM) for your .tf files, and also the modules that you are using. <br><br>

                As a result, the terraform executable can only be updated manually, outside of standard linux package management such as <code>sudo apt update &amp;&amp; sudo apt full-upgrade</code> on Ubuntu. The Terraform releases page lists out all of the versions, but does not include a ‘latest’ to adhere to that versioning ethos. If you want a new version then you download that version and replace the one that you have. <br><br>

                The same applies to modules. When you ran the <code>terraform get</code> it takes a copy of the modules and puts them into your <code>.terraform/modules</code> folder. (For the local modules it uses a symbolic link instead.) And if you run <code>terraform get</code> then it <strong>will not</strong> update modules if they already exist in that folder. Instead you have to use <code>terraform get -update=true</code>. And you can include version constraints to ensure that you are using a known good version.

                <h3 id="terraform-registry">Terraform Registry</h3>

                There are a number of modules created for use at the Terraform Registry for all of the major Terraform providers. This is comparable to the Azure Quickstart Templates repository in GitHub with contributions from both the vendors and from the wider community. <br><br>

                You will notice that AWS has by far the largest number of community contributed modules, although not many of those have been verified. Azure is a distant second in terms of community contribution, although it has a similar number of verified modules from both Azure and Hashicorp <br><br>

                Browse one of the modules. You’ll notice the source path starts with <code>Azure/</code>, and the documentation shows examples in the readme, inputs, outputs, dependencies, resources etc. In terms of standards this is a good guideline for your own modules. <br><br>

                You can also click on the source link and it will take you through to the GitHub repository. Take a look at <a href="https://github.com/Azure/terraform-azurerm-network">https://github.com/Azure/terraform-azurerm-network</a> and you will see that it has a good README.md. As mentioned before, for simple one level modules that most contributors stick to variables.tf, main.tf and outputs.tf. This makes it easier for everyone using a module to see the inputs and the outputs, and have everything else hidden away in the main.tf.

                <h3 id="end-of-lab-7">End of Lab 7</h3>

                We have reached the end of the lab. You have introduced modules to your environment and started to think about how to make use of those to define your standards underpinning different deployments for various reference architectures or customer requirements. <br><br>

                Your .tf files should look similar to those in <a href="https://github.com/richeney/terraform-pre-012-lab7">https://github.com/richeney/terraform-pre-012-lab7</a>. <br><br>

                In the next lab we will go a little bit deeper on Terraform state and how to manage and protect that in a multi-tenanted environment with multiple admins.
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