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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Prerequisites</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">DevOps</a></li>
                <li class="breadcrumb-item"><a href="../">SysOps</a></li>
                <li class="breadcrumb-item active">Terraform</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h4 class="nav__title">On this page</h4>
                <ul class="toc__menu">
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#pre-requisites">Pre-requisites</a></li>
                </ul>

                <h3 id="introduction">Introduction</h3>

                The labs in the automation category are intended to be complementary to each other. We have evolved a preferred set of tooling which is assumed for the labs. Therefore it makes sense to consolidate the prereqs into one area so that you can get your machine set up once. It also means that our intro pages for the labs can be shorter! <br><br>

                We are a broad church and happy that different users use different systems and preferred tooling. (We like to test the waters with multiple OS and editing and provisioning tools ourselves.) If you are comfortable installing and using other tools then don’t feel that we are restricting you. (Although if you’re hoping for lots of PowerShell and Windows VMs then you might be in the wrong place; we do have a linux focus here.) <br><br>

                Standard caveats and disclaimers apply:

                <ul>
                    <li>some of the labs will assume certain tools are installed</li>
                    <li>some of the code examples assume you’ve added the packages we suggested</li>
                    <li>you can’t expect us to become a support function for any issues you have with your particular setup!</li>
                </ul>

                OK, here is the tooling we tend to use:

                <h3 id="pre-requisites">Pre-requisites</h3>

                You will need a linux terminal environment. If you have macOS or linux desktop then great, you’re there. Windows 10 users then you need to install the Windows Subsystem for Linux (install instructions below). If you are stuck on Windows 7 then you can stand up a linux VM. You can start from a standard platform image such as Ubuntu 18.04 LTS, or use a marketplace image such as the ones for Terraform and Ansible.

                <hr>

                <strong>Azure Subscription</strong><br>

                <strong>Required for all labs.</strong><br>

                You will need access to a subscription (with ‘contributor rights’), or an Azure Pass or free account. Click on the button above for more details.

                Ensure that it is active by logging onto the <a href="http://portal.azure.com">portal</a> and creating an resource group.

                <strong> Note.</strong> If you are using an Azure Free Pass then please do not activate it using your work email address. If you do then it will be unlikely that you will have RBAC permissions to create Service Principals and you will be limited to using the Azure CLI authentication.

                <hr>

                <strong>Windows Subsystem for Linux</strong><br>

                <strong>Required for Windows 10 users.</strong><br>

                For Windows 10 users then enable and use the Windows Subsystem for Linux for these labs.
                <blockquote>
                    These labs are not tested on Windows 7. If you are using Windows 7 then you cannot install the Windows Subsystem for Linux. It is recommended to upgrade to Windows 10 and use the Windows Subsystem for Linux. It is possible to use both az and terraform commands within a PowerShell integrated console on Windows 7 machine and you can still make your way through the labs, but if there are examples of Bash scripting then you will need to work around that. You may be able to use the Git Bash on Windows 7 but this has not been tested.
                </blockquote>

                <hr>

                <strong> Additional Binaries</strong><br>

                The labs make use of a few binaries that are not part of a standard Ubuntu install, so please add the following packages if you cannot find them using <em>which</em>, e.g. <code>which jq</code>:

                <ul>
                    <li>jq</li>
                    <li>git</li>
                    <li>tree</li>
                </ul>

                For Ubuntu the install command is `sudo apt update &amp;&amp; sudo apt install jq git tree’.

                If you have a different distribution then you should use the right package manager for that distribution.

                <hr>

                <strong> Azure CLI</strong><br>

                For Windows, Linux and macOS users, click on the button above to find the right install instructions to install at the operating system level.

                For Windows 10 users who have enabled the Windows Subsystem for Linux (WSL) feature then you can installing the Azure CLI in the linux subsystem using apt. <br>

                <strong> Note.</strong> Use of the legacy Windows CMD prompt is not advised, and use of alternative bash systems (gitbash or cygwin) is discouraged.

                <hr>

                <a href="https://www.terraform.io/downloads.html" target="_blank"><strong> Terraform</strong></a>

                Needed for the Terraform labs.

                <ul>
                    <li>Manually download the correct executable from the link above</li>
                    <li>Manually move it to a directory in your OS’ path</li>
                </ul>

                <blockquote>
                    Note that for Windows that will need to be in your system path, e.g. <code>C:\Windows\System32\</code>. Visual Studio Code does not search the Windows user path.
                </blockquote>

                <ul>
                    <li>For linux systems (including the WSL) that use apt as the package manager you may use the following command to download it to /usr/local/bin:</li>
                </ul>

                <div class="code-toolbar">
                    <pre class=" language-bash"><blockquote class=" language-bash"><span class="token function">curl</span> -sL https://raw.githubusercontent.com/azurecitadel/azurecitadel.github.io/master/automation/terraform/installLatestTerraform.sh <span class="token operator">|</span> <span class="token function">sudo</span> -E <span class="token function">bash</span> -</blockquote></pre>

                </div>

                <ul>
                    <li>Run <code>terraform --version</code> to verify</li>
                </ul>

                <hr>

                <strong> Packer</strong>

                Used in the virtual machine image creation labs.

                The approach is the same for Packer as it is for Terraform. You may use the following to automate the install:

                <div class="code-toolbar">
                    <pre class=" language-bash"><blockquote class=" language-bash"><span class="token function">curl</span> -sL https://raw.githubusercontent.com/azurecitadel/azurecitadel.github.io/master/automation/packeransible/installLatestPacker.sh <span class="token operator">|</span> <span class="token function">sudo</span> -E <span class="token function">bash</span> -</blockquote></pre>

                </div>

                <hr>
                Please install and configure Visual Studio Code as per the link in the button above.

                <strong>Extensions</strong>

                The following extensions should also be installed as they are assumed by the labs: <br><br>

                <table>
                    <tbody>
                        <tr>
                            <td><strong>Module Name</strong></td>
                            <td>Labs</td>
                            <td><strong>Author</strong></td>
                            <td><strong>Extension Identifier</strong></td>
                        </tr>
                        <tr>
                            <td>Azure Account</td>
                            <td>All</td>
                            <td>Microsoft</td>
                            <td>ms-vscode.azure-account</td>
                        </tr>
                        <tr>
                            <td>JSON Tools</td>
                            <td>All</td>
                            <td>Erik Lynd</td>
                            <td>eriklynd.json-tools</a></td>
                        </tr>
                        <tr>
                            <td>Bracket Pair Colorizer 2</td>
                            <td>CoenraadS</td>
                            <td>coenraads.bracket-pair-colorizer-2</a></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Azure Resource Manager Tools</td>
                            <td>ARM</td>
                            <td>Microsoft</td>
                            <td>msazurermtools.azurerm-vscode-tools</a></td>
                        </tr>
                        <tr>
                            <td>Azure Resource Manager Snippets</td>
                            <td>ARM</td>
                            <td>Sam Cogan</td>
                            <td>samcogan.arm-snippets</a></td>
                        </tr>
                        <tr>
                            <td>Terraform</td>
                            <td>Terraform</td>
                            <td>Mikael Olenfalk</td>
                            <td>mauve.terraform</a></td>
                        </tr>
                        <tr>
                            <td>Advanced Terraform Snippets Generator</td>
                            <td>Terraform</td>
                            <td>Richard Sentino</td>
                            <td>mindginative.terraform-snippets</a></td>
                        </tr>
                        <tr>
                            <td>Ansible</td>
                            <td>Images</td>
                            <td>Microsoft</td>
                            <td>vscoss.vscode-ansible</a></td>
                        </tr>
                    </tbody>
                </table><br><br>

                Use <code>CTRL</code>+<code>SHIFT</code>+<code>X</code> to open the extensions sidebar. You can search and install the extensions from within there.

                Ensure that the mauve.terraform extension is using the language server so that it will syntax check the 0.12 HCL correctly:

                <ol>
                    <li>Open up the Command Palette using <code>CTRL</code>+<code>SHIFT</code>+<code>P</code></li>
                    <li>
                        Type “settings json”

                        <br><br><img src="https://archive.azurecitadel.com/automation/prereqs/images/vscodeJsonSettings.png" alt="Command Palette"><br><br>
                    </li>
                    <li>
                        Check that the terraform leangue server is set to <code>true</code>:

                        <div class="code-toolbar">
                            <pre class=" language-json"><blockquote class=" language-json"><span class="token punctuation">{</span>
    <span class="token punctuation">{</span>
        <span class="token operator">:</span>
        <span class="token operator">:</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token property">"terraform.indexing"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
        <span class="token property">"enabled"</span><span class="token operator">:</span> <span class="token boolean">true</span><span class="token punctuation">,</span>
        <span class="token property">"liveIndexing"</span><span class="token operator">:</span> <span class="token boolean">false</span><span class="token punctuation">,</span>
        <span class="token property">"delay"</span><span class="token operator">:</span> <span class="token number">500</span><span class="token punctuation">,</span>
        <span class="token property">"exclude"</span><span class="token operator">:</span> <span class="token punctuation">[</span>
            <span class="token string">".terraform/**/*"</span><span class="token punctuation">,</span>
            <span class="token string">"**/.terraform/**/*"</span>
        <span class="token punctuation">]</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token property">"terraform.languageServer"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
        <span class="token property">"enabled"</span><span class="token operator">:</span> <span class="token boolean">true</span><span class="token punctuation">,</span>
        <span class="token property">"args"</span><span class="token operator">:</span> <span class="token punctuation">[</span><span class="token punctuation">]</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
                        </div>
                    </li>
                </ol>

                <strong>Integrated Console</strong>

                For Windows Subsystem for Linux users then switch your integrated console from the default $SHELL (either Command Prompt or PowerShell) to WSL. Open the Command Palette (<code>CTRL</code>+<code>SHIFT</code>+<code>P</code>) and then search for the convenience command <strong>Select Default Shell</strong>.

                <strong>Git</strong>

                You will need Git installed at the <em>operating system</em> level. (Linux and macOS should have this already (<code>which git</code>) if you have followed the steps above.)

                Visual Studio Code will not find the git executable in WSL on Windows 10, so you need to install it and ensure that it is in the <em>system</em> path. (As vscode also won’t find it in the user path.)

                You can download and install Git for Windows.

                You can check where Git has been installed in Windows 10 by running either:

                <ul>
                    <li>Command Prompt: <code>where git</code></li>
                    <li>PowerShell: <code>Get-Command git.exe | Select-Object -ExpandProperty Definition</code></li>
                </ul>

                It will normally be in the <code>C:\Program Files\Git\cmd\</code> directory.

                Check that the directory is in your system path by clicking <strong>Start → Run</strong> and typing <code>SystemPropertiesAdvanced</code>. This will open the dialog box. Select <strong>Path</strong> in the system variables at the bottom, and then <strong>Edit</strong>. Add the directory if it is missing.

                <hr>

                <a href="https://github.com/join" target="_blank"><strong> Join GitHub</strong></a>

                Certain labs will use a public repository in GitHub so you will need to have a GitHub account for those.
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