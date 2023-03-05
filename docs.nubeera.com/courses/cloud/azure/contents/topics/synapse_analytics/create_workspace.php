<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra databricks in Azure</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra databricks in Azure">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <link id="theme-style" rel="stylesheet" href="../../../../../../assets/css/theme.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Synapse Analytics</strong><br><br>
                <ul>
                    <li><a href="index.php">What is Azure Synapse Analytics?</a></li>
                    <li><a href="create_workspace.php">creating a synapse workspace</a></li>
                    <li><a href="analyze_sql_on_demand.php">Analyze data with a serverless SQL pool</a></li>
                    <li><a href="analyze_data_explorer.php">Quickstart: Analyze with Data Explorer (Preview)</a></li>
                    <li><a href="analyze_spark.php">Analyze with Apache Spark</a></li>
                    <li><a href="analyze_sql_pool.php">Analyze data with dedicated SQL pools</a></li>
                    <li><a href="analyze_storage.php">Analyze data in a storage account</a></li>
                    <li><a href="pipelines.php">Integrate with pipelines</a></li>
                    <li><a href="visualize_power_bi.php">Visualize data with Power BI</a></li>
                    <li><a href="monitor.php">Monitor your Synapse Workspace</a></li>
                    <li><a href="knowledge_center.php">Explore the Synapse Knowledge center</a></li>
                    <li><a href="add_admin.php">Add an administrator to your Synapse workspace</a></li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Creating a Synapse workspace</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                    <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                    <li class="breadcrumb-item active">Synapse Analytics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <h3>In this article</h3>
                    <ul>
                        <li><a href="#prerequisites">Prerequisites</a></li>
                        <li><a href="#create-a-synapse-workspace-in-the-azure-portal">Create a Synapse workspace in the Azure portal</a></li>
                        <li><a href="#basics-tab--project-details">Basics tab &gt; Project Details</a></li>
                        <li><a href="#basics-tab--workspace-details">Basics tab &gt; Workspace details</a></li>
                        <li><a href="#completing-the-process">Completing the process</a></li>
                        <li><a href="#open-synapse-studio">Open Synapse Studio</a></li>
                        <li><a href="#place-sample-data-into-the-primary-storage-account">Place sample data into the primary storage account</a></li>
                        <li><a href="#next-steps">Next steps</a></li>
                    </ul>
                    <!-- <content> -->
                    In this tutorial, you'll learn how to create a Synapse workspace, a dedicated SQL pool, and a serverless Apache Spark pool.
                    <h3 id="prerequisites" class="heading-anchor"><a class="anchor-link docon docon-link" href="#prerequisites" aria-labelledby="prerequisites"></a>Prerequisites</h3>
                    To complete this tutorial's steps, you need to have access to a resource group for which you are assigned the <strong>Owner</strong> role. Create the Synapse workspace in this resource group.
                    <h3 id="create-a-synapse-workspace-in-the-azure-portal" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-synapse-workspace-in-the-azure-portal" aria-labelledby="create-a-synapse-workspace-in-the-azure-portal"></a>Create a Synapse workspace in the Azure portal</h3>
                    <h3 id="start-the-process" class="heading-anchor"><a class="anchor-link docon docon-link" href="#start-the-process" aria-labelledby="start-the-process"></a>Start the process</h3>
                    <ol>
                        <li>Open the <a href="https://portal.azure.com" data-linktype="external">Azure portal</a>, in the search bar enter <strong>Synapse</strong> without hitting enter.</li>
                        <li>In the search results, under <strong>Services</strong>, select <strong>Azure Synapse Analytics</strong>.</li>
                        <li>Select <strong>Add</strong> to create a workspace.</li>
                    </ol>
                    <h3 id="basics-tab--project-details" class="heading-anchor"><a class="anchor-link docon docon-link" href="#basics-tab--project-details" aria-labelledby="basics-tab--project-details"></a>Basics tab &gt; Project Details</h3>
                    Fill in the following fields:
                    <ol>
                        <li><strong>Subscription</strong> - Pick any subscription.</li>
                        <li><strong>Resource group</strong> - Use any resource group.</li>
                        <li><strong>Managed Resource group</strong> - Leave this blank.</li>
                    </ol>
                    <h3 id="basics-tab--workspace-details" class="heading-anchor"><a class="anchor-link docon docon-link" href="#basics-tab--workspace-details" aria-labelledby="basics-tab--workspace-details"></a>Basics tab &gt; Workspace details</h3>
                    Fill in the following fields:
                    <ol>
                        <li><strong>Workspace name</strong> - Pick any globally unique name. In this tutorial, we'll use <strong>myworkspace</strong>.</li>
                        <li><strong>Region</strong> - Pick the region where you have placed your client applications/services (for example, Azure VM, Power BI, Azure Analysis Service) and storages that contain data (for example Azure Data Lake storage, Azure Cosmos DB analytical storage).</li>
                    </ol>
                    <div class="alert is-info">
                        <span class="docon docon-status-error-outline" aria-hidden="true"></span> <strong>Note: </strong>
                        A workspace that is not co-located with the client applications or storage can be the root cause of many performance issues. If you data or the clients are placed in multiple regions, you can create separate workspaces in different regions co-located with your data and clients.
                    </div>
                    Under <strong>Select Data Lake Storage Gen 2</strong>:
                    <ol>
                        <li>By <strong>Account name</strong>, select <strong>Create New</strong> and name the new storage account <strong>contosolake</strong> or similar as the name must be unique.</li>
                        <li>By <strong>File system name</strong>, select <strong>Create New</strong> and name it <strong>users</strong>. This will create a storage container called <strong>users</strong>. The workspace will use this storage account as the "primary" storage account to Spark tables and Spark application logs.</li>
                        <li>Check the "Assign myself the Storage Blob Data Contributor role on the Data Lake Storage Gen2 account" box.</li>
                    </ol>
                    <h3 id="completing-the-process" class="heading-anchor"><a class="anchor-link docon docon-link" href="#completing-the-process" aria-labelledby="completing-the-process"></a>Completing the process</h3>
                    Select <strong>Review + create</strong> &gt; <strong>Create</strong>. Your workspace is ready in a few minutes.

                    <h3 id="open-synapse-studio" class="heading-anchor"><a class="anchor-link docon docon-link" href="#open-synapse-studio" aria-labelledby="open-synapse-studio"></a>Open Synapse Studio</h3>
                    After your Azure Synapse workspace is created, you have two ways to open Synapse Studio:
                    <ol>
                        <li>
                            Open your Synapse workspace in the <a href="https://portal.azure.com" data-linktype="external">Azure portal</a>, in the <strong>Overview</strong> section of the Synapse workspace, select <strong>Open</strong> in the Open Synapse Studio box.
                        </li>
                        <li>
                            Go to the <code>https://web.azuresynapse.net</code> and sign in to your workspace.
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/synapse-analytics/security/media/common/login-workspace.png" alt="Log in to workspace" data-linktype="relative-path"><br><br>
                        </li>
                    </ol>
                    <div class="alert is-info">
                        <span class="docon docon-status-error-outline" aria-hidden="true"></span> <strong>Note: </strong>
                        To sign into your workspace, there are two <strong>Account selection methods</strong>. One is from <strong>Azure subscription</strong>, the other is from <strong>Enter manually</strong>. If you have the Synapse Azure role or higher level Azure roles, you can use both methods to log into the workspace. If you don't have the related Azure roles, and you were granted as the Synapse RBAC role, <strong>Enter manually</strong> is the only way to log into the workspace.
                    </div>
                    <h3 id="place-sample-data-into-the-primary-storage-account" class="heading-anchor"><a class="anchor-link docon docon-link" href="#place-sample-data-into-the-primary-storage-account" aria-labelledby="place-sample-data-into-the-primary-storage-account"></a>Place sample data into the primary storage account</h3>
                    We are going to use a small 100K row sample dataset of NYX Taxi Cab data for many examples in this getting started guide. We begin by placing it in the primary storage account you created for the workspace.
                    <ul>
                        <li>Download this file to your computer: <a href="https://azuresynapsestorage.blob.core.windows.net/sampledata/NYCTaxiSmall/NYCTripSmall.parquet" data-linktype="external">https://azuresynapsestorage.blob.core.windows.net/sampledata/NYCTaxiSmall/NYCTripSmall.parquet</a></li>
                        <li>In Synapse Studio, navigate to the Data Hub.</li>
                        <li>Select <strong>Linked</strong>.</li>
                        <li>Under the category <strong>Azure Data Lake Storage Gen2</strong> you'll see an item with a name like <strong>myworkspace ( Primary - contosolake )</strong>.</li>
                        <li>Select the container named <strong>users (Primary)</strong>.</li>
                        <li>Select <strong>Upload</strong> and select the <code>NYCTripSmall.parquet</code> file you downloaded.</li>
                    </ul>
                    Once the parquet file is uploaded it is available through two equivalent URIs:
                    <ul>
                        <li><code>https://contosolake.dfs.core.windows.net/users/NYCTripSmall.parquet</code></li>
                        <li><code>abfss://users@contosolake.dfs.core.windows.net/NYCTripSmall.parquet</code></li>
                    </ul>
                    In the examples that follow in this tutorial, make sure to replace <strong>contosolake</strong> in the UI with the name of the primary storage account that you selected for your workspace.

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