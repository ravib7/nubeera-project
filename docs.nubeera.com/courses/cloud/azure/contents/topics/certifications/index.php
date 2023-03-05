<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Certifications in Azure</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Certifications in Azure">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <link id="theme-style" rel="stylesheet" href="../../../../../../assets/css/theme.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../../boto_topics.css">
</head>

<body>
    <?php require '../../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">
        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;"></strong><br><br>
                    <ul>
                        <li><a href="index.php">Module 0 - Lab environment setup with a pre-installed virtual machine</a></li>
                        <li><a href="compute_and_storage_for_data_engineering_workloads.php">Lab 1 - Explore compute and storage options for data engineering workloads</a></li>
                        <li><a href="interactive_query_using_serverless_pool.php">Lab 2 - Run interactive queries using serverless SQL pools</a></li>
                        <li><a href="data_exploration_and_transformation_in_azure_databricks.php">Lab 3 - Data exploration and transformation in Azure Databricks</a></li>
                        <li><a href="data_warehouse_using_apache_spark.php">Lab 4 - Explore, transform, and load data into the Data Warehouse using Apache Spark</a></li>
                        <li><a href="load_data_into_the_data_warehouse.php">Lab 5 - Ingest and load data into the Data Warehouse</a></li>
                        <li><a href="transform_data_with_pipelines.php">Lab 6 - Transform data with Azure Data Factory or Azure Synapse Pipelines</a></li>
                        <li><a href="integrate_data_from_notebooks.php">Lab 7 - Integrate data from notebooks with Azure Data Factory or Azure Synapse Pipelines</a></li>
                        <li><a href="security_with_synapse_analytics.php">Lab 8 - End-to-end security with Azure Synapse Analytics</a></li>
                        <li><a href="htap_with_azure_synapse_link.php">Lab 9 - Support Hybrid Transactional Analytical Processing (HTAP) with Azure Synapse Link</a></li>
                        <li><a href="stream_processing_with_stream_analytics.php">Lab 10 - Real-time stream processing with Stream Analytics</a></li>
                        <li><a href="stream_with_azure_databricks.php">Lab 11 - Create a stream processing solution with Event Hubs and Azure Databricks</a></li>
                    </ul>
            </div>
        </div>
    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Module 0 - Lab environment setup with a pre-installed virtual machine</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Certifications</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                    The following instructions enables learners to prepare their lab environments for the modules that follow. Please run through these instructions prior to starting Module 1. <br><br>

                    <strong>Time to complete</strong>: It takes around 5 minutes to perform the steps below and initiate the automated setup scripts. The scripts may take an hour or more to complete.

                    <blockquote>
                        <strong>Note</strong>: These instructions are designed to be used in the pre-installed virtual machine provided for the course.
                    </blockquote>

                    <h2 id="requirements">Requirements</h2>

                    Before starting setup, you will need an Azure Account with the ability to create an Azure Synapse Workspace. <br><br>

                    <blockquote>
                        <strong>Important note if using an Azure Pass subscription:</strong>

                        If you are using an account for which you have previously redeemed an Azure Pass subscription that has expired, your account may be associated with multiple Azure subscriptions with the same name (<em>Azure Pass - Sponsorship</em>). Before starting the setup steps, ensure that only the most recent <em>active</em> subscription of this name is enabled by following these steps: <br><br>

                        <ol>
                            <li>Open the Azure portal at <code>https://portal.azure.com</code> and sign in using the account associated with your subscription.</li>
                            <li>On the portal toolbar at the top of the page, select the <strong>Directories and Subscriptions</strong> button.</li>
                            <li>In the <strong>Default subscriptions filter</strong> drop-down list, <em>de-select</em> any <strong>(Disabled) Azure Pass - Sponsorship</strong> subscriptions, and ensure that <u>only</u> the active <strong>Azure Pass - Sponsorship</strong> subscription that you want to use is selected.</li>
                        </ol>
                    </blockquote>

                    <h2 id="setup-steps">Setup steps</h2>

                    Perform the following tasks to prepare your environment for the labs.

                    <ol>
                        <li>
                            Use the Windows <strong>Search</strong> box to search for <strong>Windows PowerShell</strong>, and then run it as an administrator.

                            <blockquote>
                                <strong>Note</strong>: Make sure you run <strong>Windows Powershell</strong>, <u>not</u> Windows PowerShell ISE; and be sure to run it as Administrator.
                            </blockquote>
                        </li>
                        <li>
                            In Windows PowerShell, run the following commands to download the required course files. This may take a few minutes.

                            <pre id="codeBlock0" class="mt-0"><blockquote class="hljs bash"> mkdir c:\dp-203

 <span class="hljs-built_in"><span class="hljs-built_in">cd</span></span> c:\dp-203

 git <span class="hljs-built_in"><span class="hljs-built_in">clone</span></span> https://github.com/microsoftlearning/dp-203-data-engineer.git data-engineering-ilt-deployment
</blockquote></pre>
                        </li>
                        <li>
                            In Windows PowerShell, run the following command set the execution policy so you can run a local PowerShell script file:

                            <pre id="codeBlock1" class="mt-0"><blockquote class="hljs javascript"> <span class="hljs-built_in"><span class="hljs-built_in">Set</span></span>-ExecutionPolicy Unrestricted
</blockquote></pre>

                            <blockquote>
                                <strong>Note</strong>: If you receive a prompt that you are installing the module from an untrusted repository, enter <strong>A</strong> to select the <em>Yes to All</em> option.
                            </blockquote>
                        </li>
                        <li>
                            In Windows PowerShell, use the following command to change directories to the folder containing the automation scripts.

                            <pre id="codeBlock2" class="mt-0"><blockquote class="hljs bash"> <span class="hljs-built_in"><span class="hljs-built_in">cd</span></span> C:\dp-203\data-engineering-ilt-deployment\Allfiles\00\artifacts\environment-setup\automation\
</blockquote></pre>
                        </li>
                        <li>
                            In Windows PowerShell, enter the following command to run the setup script:

                            <pre id="codeBlock3" class="mt-0"><blockquote class="hljs css"> .\<span class="hljs-selector-tag"><span class="hljs-selector-tag">dp-203-setup</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.ps1</span></span>
</blockquote></pre>
                        </li>
                        <li>
                            When prompted to sign into Azure, and your browser opens; sign in using your credentials. After signing in, you can close the browser and return to Windows PowerShell, which should display the Azure subscriptions to which you have access.
                        </li>
                        <li>
                            When prompted, sign into your Azure account again (this is required so that the script can manage resources in your Azure subscription - be sure you use the same credentials as before).
                        </li>
                        <li>
                            If you have more than one Azure subscription, when prompted, select the one you want to use in the labs by entering its number in the list of subscriptions.
                        </li>
                        <li>
                            When prompted, enter a suitably complex password for the SQL Database (make a note of this password in case you need it later).
                        </li>
                    </ol>

                    While the script runs, your instructor will present the first module of the course. Your environment should be ready for you when it’s time to start the first lab. <br><br>

                    <blockquote>
                        <strong>Note</strong>: The script will take about 45-60 minutes to complete. The script will create the Azure resources with randomly generated names. If the script appears to “stall” (no new information is displayed for 10 minutes) press ENTER and check for any error messages - often the script will continue without any issues. In some rare cases, an identical resource name may already be in use, there may be capacity constraints for specific resources in the randomly selected region, or transient network issues may occur; causing an error. If this happens, use the Azure portal to delete the <strong>data-engineering-synapse-<em>xxxxxx</em></strong> resource group created by the script and re-run the script.

                        If an error indicating that you must supply the <strong>tenant ID</strong> for your Azure pass subscription is displayed, ensure you have followed the instructions in the <strong>Requirements</strong> section above to enable only the Azure Pass subscription that you want to use.
                    </blockquote>

            </div>
        </div>
        <?php require "../../../../../../templates/footer_outer.php" ?>

    </div>

    <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script defer src="../../../../../../assets/fontawesome/js/all.min.js"></script><!-- footer social icons -->
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