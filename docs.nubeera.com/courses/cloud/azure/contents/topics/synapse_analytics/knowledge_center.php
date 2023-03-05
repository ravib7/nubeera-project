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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Explore the Synapse Knowledge center</h2>
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
                        <li><a href="#Finding the Knowledge center">Finding the Knowledge center</a></li>
                        <li><a href="#Exploring the Knowledge center">Exploring the Knowledge center</a></li>
                        <li><a href="#Use samples immediately: Three samples to help you get started fast">Use samples immediately: Three samples to help you get started fast</a></li>
                        <li><a href="#Gallery: A collection of sample datasets and sample code">Gallery: A collection of sample datasets and sample code</a></li>

                    </ul>
                    <!-- <content> -->
                    In this tutorial, you'll learn how to use the Synapse Studio <strong>Knowledge center</strong>.
                    <h3 id="Finding the Knowledge center" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Finding the Knowledge center" aria-labelledby="Finding the Knowledge center"></a>Finding the Knowledge center</h3>
                    There are two ways of finding the <strong>Knowledge center</strong> in Synapse Studio:
                    <ol>
                        <li>In the Home hub, near the top-right of the page click on <strong>Learn</strong>.</li>
                        <li>In the menu bar at the top, click ? and then Knowledge <strong>center</strong>.</li>
                    </ol>
                    Pick either method and open the <strong>Knowledge center</strong>.

                    <h3 id="Exploring the Knowledge center" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Exploring the Knowledge center" aria-labelledby="Exploring the Knowledge center"></a>Exploring the Knowledge center</h3>
                    Once it is visible, you will see that the Knowledge center allows you to do three things:
                    <ol>
                        <li><strong>Use samples immediately</strong>. If you want a quick example of how Synapse works, choose this option.</li>
                        <li><strong>Browse gallery</strong>. This option lets you link sample data sets and add sample code in the form of SQL scripts, notebooks, and pipelines.</li>
                        <li><strong>Tour Synapse Studio</strong>. This option takes you on a brief tour of the basic parts of Synapse Studio. This is useful if you have never used Synapse Studio before.</li>
                    </ol>

                    <h3 id="Use samples immediately: Three samples to help you get started fast" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Use samples immediately: Three samples to help you get started fast" aria-labelledby="Use samples immediately: Three samples to help you get started fast"></a>Use samples immediately: Three samples to help you get started fast</h3>
                    There are three items in this section:
                    <ul>
                        <li>Explore sample data with Spark</li>
                        <li>Query data with SQL</li>
                        <li>Create external table with SQL</li>
                    </ul>
                    <ol>
                        <li>In the Knowledge center, click Use samples immediately.</li>
                        <li>Select Query data with SQL.</li>
                        <li>Click Use sample.</li>
                        <li>A new sample SQL script will open.</li>
                        <li>Scroll to the first query (lines 28 to 32) and select the query text.</li>
                        <li>Click Run. It will run only code you have selected.</li>
                    </ol>

                    <h3 id="Gallery: A collection of sample datasets and sample code" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Gallery: A collection of sample datasets and sample code" aria-labelledby="Gallery: A collection of sample datasets and sample code"></a>Gallery: A collection of sample datasets and sample code</h3>
                    <ol>
                        <li>Go to the Knowledge center, click Browse gallery.</li>
                        <li>Select the SQL scripts tab at the top.</li>
                        <li>Select Load the New York Taxicab dataset Data ingestion sample, click Continue.</li>
                        <li>Under SQL pool, choose Select an existing pool and select SQLPOOL1, and select the SQLPOOL1 database you created earlier.</li>
                        <li>Click Open Script.</li>
                        <li>A new sample SQL script will open.</li>
                        <li>Click Run</li>
                        <li>This will create several tables for all of the NYC Taxi data and load them using the T-SQL COPY command. If you had created these tables in the previous quick start steps, select and execute only code to CREATE and COPY for tables that do not exist.</li>
                    </ol>
                    <span class="docon docon-status-error-outline" aria-hidden="true"></span> <strong>Note: </strong>
                    When using the sample gallery for SQL script with a dedicated SQL pool (formerly SQL DW), you will only be able to use an existing dedicated SQL pool (formerly SQL DW).
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