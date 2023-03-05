<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Synapse Analytics in Azure</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Synapse Analytics in Azure">

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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Visualize data with Power BI</h2>
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
                        <li><a href="#Prerequisites">Prerequisites</a></li>
                        <li><a href="#Overview">Overview</a></li>
                    </ul>

                    </nav>



                    <!-- <content> -->
                    In this tutorial, you'll learn how to create a Power BI workspace, link your Azure Synapse workspace, and create a Power BI data set that utilizes data in your Azure Synapse workspace.
                    <h3 id="Prerequisites" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Prerequisites" aria-labelledby="Prerequisites"></a>Prerequisites</h3>
                    To complete this tutorial, <a href="https://aka.ms/pbidesktopstore" data-linktype="external">install Power BI Desktop</a>.
                    <h3 id="Overview" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Overview" aria-labelledby="Overview"></a>Overview</h3>
                    From the NYC Taxi data, we created aggregated datasets in two tables:
                    <ul>
                        <li><strong>nyctaxi.passengercountstats</strong></li>
                        <li><strong>SQLDB1.dbo.PassengerCountStats</strong></li>
                    </ul>
                    You can link a Power BI workspace to your Azure Synapse workspace. This capability allows you to easily get data into your Power BI workspace. You can edit your Power BI reports directly in your Azure Synapse workspace.
                    <h3 id="Overview" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Overview" aria-labelledby="Overview"></a>Create a Power BI workspace</h3>
                    <ol>
                        <li>Sign in to <a href="https://powerbi.microsoft.com/" data-linktype="external">powerbi.microsoft.com</a>.</li>
                        <li>Click on <strong>Workspaces</strong>, then select <strong>Create a workspace</strong>. Create a new Power BI workspace named <strong>NYCTaxiWorkspace1</strong> or similar, since this name must be unique.</li>
                    </ol>
                    <h3 id="Overview" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Overview" aria-labelledby="Overview"></a>Link your Azure Synapse workspace to your new Power BI workspace</h3>
                    <ol>
                        <li>In Synapse Studio, go to <strong>Manage</strong> &gt; <strong>Linked Services</strong>.</li>
                        <li>Select <strong>New</strong> &gt; <strong>Connect to Power BI</strong>.</li>
                        <li>Set <strong>Name</strong> to <strong>NYCTaxiWorkspace1</strong>.</li>
                        <li>Set <strong>Workspace name</strong> to the Power BI workspace you created above, similar to <strong>NYCTaxiWorkspace1</strong>.</li>
                        <li>Select <strong>Create</strong>.</li>
                    </ol>
                    <h3 id="Overview" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Overview" aria-labelledby="Overview"></a>Create a Power BI dataset that uses data in your Azure Synapse workspace</h3>
                    <ol>
                        <li>In Synapse Studio, go to <strong>Develop</strong> &gt; <strong>Power BI</strong>.</li>
                        <li>Go to <strong>NYCTaxiWorkspace1</strong> &gt; <strong>Power BI datasets</strong> and select <strong>New Power BI dataset</strong>. Click <strong>Start</strong>.</li>
                        <li>Select the <strong>SQLPOOL1</strong> data source, click <strong>Continue</strong>.</li>
                        <li>Click <strong>Download</strong> to download the .pbids file for your <strong>NYCTaxiWorkspace1SQLPOOL1.pbids</strong> file. Click <strong>Continue</strong>.</li>
                        <li>Open the downloaded <strong>.pbids</strong> file. Power BI Desktop opens and automatically connects to <strong>SQLDB1</strong> in your Azure Synapse workspace.</li>
                        <li>If you see a dialog box appear called <strong>SQL Server database</strong>:
                            <ol>
                                <li>Select <strong>Microsoft account</strong>.</li>
                                <li>Select <strong>Sign in</strong> and sign in to your account.</li>
                                <li>Select <strong>Connect</strong>.</li>
                            </ol>
                        </li>
                        <li>After the <strong>Navigator</strong> dialog box opens, check the <strong>PassengerCountStats</strong> table and select <strong>Load</strong>.</li>
                        <li>After the <strong>Connection settings</strong> dialog box appears, select <strong>DirectQuery</strong> &gt; <strong>OK</strong>.</li>
                        <li>Select the <strong>Report</strong> button on the left side.</li>
                        <li>Under <strong>Visualizations</strong>, click to the line chart icon to add a <strong>Line chart</strong> to your report.
                            <ol>
                                <li>Under <strong>Fields</strong>, drag the <strong>PassengerCount</strong> column to <strong>Visualizations</strong> &gt; <strong>Axis</strong>.</li>
                                <li>Drag the <strong>SumTripDistance</strong> and <strong>AvgTripDistance</strong> columns to <strong>Visualizations</strong> &gt; <strong>Values</strong>.</li>
                            </ol>
                        </li>
                        <li>On the <strong>Home</strong> tab, select <strong>Publish</strong>.</li>
                        <li>Select <strong>Save</strong> to save your changes.</li>
                        <li>Choose the file name <strong>PassengerAnalysis.pbix</strong>, and then select <strong>Save</strong>.</li>
                        <li>In the <strong>Publish to Power BI</strong> window, under <strong>Select a destination</strong>, choose your <strong>NYCTaxiWorkspace1</strong>, and then click <strong>Select</strong>.</li>
                        <li>Wait for publishing to finish.</li>
                    </ol>
                    <h3 id="Overview" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Overview" aria-labelledby="Overview"></a>Configure authentication for your dataset</h3>
                    <ol>
                        <li>Open <a href="https://powerbi.microsoft.com/" data-linktype="external">powerbi.microsoft.com</a> and <strong>Sign in</strong>.</li>
                        <li>On the left side, under <strong>Workspaces</strong>, select the <strong>NYCTaxiWorkspace1</strong> workspace.</li>
                        <li>Inside that workspace, locate a dataset called <strong>Passenger Analysis</strong> and a report called <strong>Passenger Analysis</strong>.</li>
                        <li>Hover over the <strong>PassengerAnalysis</strong> dataset, select the ellipsis (...) button, and then select <strong>Settings</strong>.</li>
                        <li>In <strong>Data source credentials</strong>, click <strong>Edit</strong>, set the <strong>Authentication method</strong> to <strong>OAuth2</strong>, and then select <strong>Sign in</strong>.</li>
                    </ol>
                    <h3 id="Overview" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Overview" aria-labelledby="Overview"></a>Edit a report in Synapse Studio</h3>
                    <ol>
                        <li>Go back to Synapse Studio and select <strong>Close and refresh</strong>.</li>
                        <li>Go to the <strong>Develop</strong> hub.</li>
                        <li>To the right of the <strong>Power BI</strong> layer, ellipsis (...) button, and click <strong>refresh</strong> to refresh the <strong>Power BI reports</strong> node.</li>
                        <li>Under <strong>Power BI</strong> you should see:
                            <ul>
                                <li>In <strong>NYCTaxiWorkspace1</strong> &gt; <strong>Power BI datasets</strong>, a new dataset called <strong>PassengerAnalysis</strong>.</li>
                                <li>Under <strong>NYCTaxiWorkspace1</strong> &gt; <strong>Power BI reports</strong>, a new report called <strong>PassengerAnalysis</strong>.</li>
                            </ul>
                        </li>
                        <li>Select the <strong>PassengerAnalysis</strong> report. The report opens and you can edit it directly within Synapse Studio.</li>
                    </ol>
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