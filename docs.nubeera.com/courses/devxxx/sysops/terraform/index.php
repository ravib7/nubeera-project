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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Introduction</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">DevOps</a></li>
                <li class="breadcrumb-item"><a href="../">SysOps</a></li>
                <li class="breadcrumb-item active">Terraform</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                <nav class="toc">
                    <h4 class="nav__title">On this page</h4>
                    <ul class="toc__menu">
                        <li><a href="#introduction">Introduction</a></li>
                        <li><a href="#pre-requisites">Pre-requisites</a></li>
                        <li><a href="#assumptions">Assumptions</a></li>
                        <li><a href="#labs">Labs</a></li>
                    </ul>
                </nav>

                <h3 id="introduction">Introduction</h3>

                <blockquote>
                    This is the older version of the Terraform labs that were created before 0.12 came along and dramatically cleaned up the HCL and enabled rich list and map support when interacting with modules. They will be replaced soon with a newer set. Please let me know if you encounter any broken links!
                </blockquote>

                This workshops is made up of a series of labs to take you through the fundamentals of using Terraform to manage the deployment and removal of simple Azure services, through to modularising your own standards to effectively manage large scale deployments.

                This lab will cover a lot of ground, including

                <ul>
                    <li>Terraform principles, workflows and terminology</li>
                    <li>The three ways of authenticating the Terraform Azure Provider</li>
                    <li>Using the interpolation syntax</li>
                    <li>Variables, locals, data, outputs</li>
                    <li>Load order and overrides</li>
                    <li>Dependencies and the graph database</li>
                    <li>Using modules and the Module Registry</li>
                    <li>Provisioners and using the taint command</li>
                    <li>Meta-parameters such as <em>count</em> and <em>depends_on</em></li>
                    <li>Using the splat operator</li>
                    <li>Protecting and locking your state</li>
                    <li>Using workspaces and read only states</li>
                    <li>Sensitive data</li>
                    <li>Integrating with git repositories</li>
                </ul>

                <hr>

                <h3 id="pre-requisites">Pre-requisites</h3>

                For labs 1 and 2 you only need an Azure subscription as we will use the Cloud Shell.

                For labs 3 then please get your machine set up as per the <a href="prereqs.php">automation prereqs</a> page.

                <hr>

                <h3 id="assumptions">Assumptions</h3>

                A good working knowledge of the Azure services and ecosystem has been assumed.

                A background knowledge of Terraform is advised. The button below will take you to Terraform’s intro guide.

                <strong>Terraform Intro</strong>

                <hr>

                <h3 id="labs">Labs</h3>

                <table>
                    <tbody>
                        <tr>
                            <td><strong>Lab</strong></td>
                            <td><strong>Name</strong></td>
                            <td><strong>Description</strong></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="lab1.php">Basics</a></td>
                            <td>Use the basic Terraform workflow in Cloud Shell</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="lab2.php">Variables</a></td>
                            <td>Provision from within VS Code and start to use variables</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><a href="lab3.php">Core Environment</a></td>
                            <td>Use a GitHub repo and provision a core environment</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><a href="lab4.php">Meta Parameters</a></td>
                            <td>Make use of copy and other meta parameters</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><a href="lab5.php">Multi Tenancy</a></td>
                            <td>Using Service Principals and Managed Service Identity</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><a href="lab6.php">State</a></td>
                            <td>Configuring remote state and using read only state in split environments</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><a href="lab7.php">Modules</a></td>
                            <td>Learn about modules, converting your .tf files, Terraform Registry</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><a href="lab8.php">Extending beyond ARM</a></td>
                            <td>Use providers and the AAD API to fully configure a kubernetes cluster</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><a href="lab9.php">Provisioners</a></td>
                            <td>Leverage provisioners to customise your virtual machine deployments (<em>coming soon</em>)</td>
                        </tr>
                    </tbody>
                </table>


                </section>

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