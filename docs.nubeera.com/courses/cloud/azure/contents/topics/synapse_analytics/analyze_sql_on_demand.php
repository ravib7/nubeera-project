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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Analyze data with a serverless SQL pool</h2>
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
                        <li><a href="#The Built-in serverless SQL pool">The Built-in serverless SQL pool</a></li>
                        <li><a href="#Analyze NYC Taxi data with a serverless SQL pool">Analyze NYC Taxi data with a serverless SQL pool</a></li>
                        <li><a href="#Create data exploration database">Create data exploration database</a></li>

                    </ul>
                    <!-- <content> -->
                    In this tutorial, you'll learn how to analyze data with serverless SQL pool
                    <h3 id="The Built-in serverless SQL pool" class="heading-anchor"><a class="anchor-link docon docon-link" href="#The Built-in serverless SQL pool" aria-labelledby="The Built-in serverless SQL pool"></a>The Built-in serverless SQL pool</h3>
                    Serverless SQL pools let you use SQL without having to reserve capacity. Billing for a serverless SQL pool is based on the amount of data processed to run the query and not the number of nodes used to run the query.
                    Every workspace comes with a pre-configured serverless SQL pool called Built-in.
                    <h3 id="Analyze NYC Taxi data with a serverless SQL pool" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Analyze NYC Taxi data with a serverless SQL pool" aria-labelledby="Analyze NYC Taxi data with a serverless SQL pool"></a>Analyze NYC Taxi data with a serverless SQL pool</h3>
                    <ol>
                        <li>In Synapse Studio, go to the <strong>Develop</strong> hub
                        </li>
                        <li>Create a new SQL script.
                        </li>
                        <li>Paste the following code into the script.
                            <pre>
SELECT TOP 100 * FROM OPENROWSET(
        BULK 'https://contosolake.dfs.core.windows.net/users/NYCTripSmall.parquet', FORMAT='PARQUET'
      ) AS [result]</pre>

                        </li>
                        <li>Click <strong>Run</strong>.
                        </li>
                    </ol>
                    Data exploration is just a simplified scenario where you can understand the basic characteristics of your data.


                    <h3 id="Create data exploration database" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Create data exploration database" aria-labelledby="Analyze NYC Taxi data with a serverless SQL pool"></a>Create data exploration database</h3>
                    You can browse the content of the files directly via <code>master</code> database. For some simple data exploration scenarios, you don't need to create a separate database.
                    However, as you continue data exploration, you might want to create some utility objects, such as:
                    <ul>
                        <li>External data sources that represent the named references for storage accounts.</li>
                        <li>Database scoped credentials that enable you to specify how to authenticate to external data source.</li>
                        <li>Database users with the permissions to access some data sources or database objects.</li>
                        <li>Utility views, procedures, and functions that you can use in the queries.</li>
                    </ul>

                    <ol>
                        <li>Use the <code>master</code> database to create a separate database for custom database objects. Custom database objects, cannot be created in the <code>master</code> database.
                            <pre>
CREATE DATABASE DataExplorationDB 
               COLLATE Latin1_General_100_BIN2_UTF8                                            
</pre>
                        </li>
                        <div class="alert is-primary" style="border:2px;background-color:poederblue;">
                            <span class="docon docon-status-info-outline" aria-hidden="true"></span> <strong>Important</strong>:
                            Use a collation with <code>_UTF8</code> suffix to ensure that UTF-8 text is properly converted to <code>VARCHAR</code> columns. <code>Latin1_General_100_BIN2_UTF8</code> provides
                            the best performance in the queries that read data from Parquet files and cosmos Db containers.
                        </div>
                        <li>Switch to <code>DataExplorationDB</code> where you can create utility objects such as credentials and data sources.
                            <pre>
CREATE EXTERNAL DATA SOURCE ContosoLake
WITH ( LOCATION = 'https://contosolake.dfs.core.windows.net')
</pre>
                            <div class="alert is-info">
                                <span class="docon docon-status-error-outline" aria-hidden="true"></span> <strong>Note</strong>:
                                An external data source can be created without a credential. If a credential does not exist, the caller's identity will be used to access the external data source.
                            </div>
                        </li>
                        <li>Optionally, use the 'master' database to create a login for a user in <code>DataExplorationDB</code> that will access external data:
                            <pre>
CREATE LOGIN data_explorer WITH PASSWORD = 'My Very Strong Password 1234!';
                                          </pre>
                            Then create a database user in <code>DataExplorationDB</code> for the login and grant the <code>ADMINISTER DATABASE BULK OPERATIONS</code> permission.
                            <pre>
CREATE USER data_explorer FOR LOGIN data_explorer;
GO
GRANT ADMINISTER DATABASE BULK OPERATIONS TO data_explorer;
GO
                                          </pre>
                        </li>
                        <li>Explore the content of the file using the relative path and the data source:
                            <pre>
SELECT
    TOP 100 *
FROM
    OPENROWSET(
            BULK '/users/NYCTripSmall.parquet',
            DATA_SOURCE = 'ContosoLake',
            FORMAT='PARQUET'
    ) AS [result]
                                          </pre>
                        </li>
                    </ol>
                    Data exploration database is just a simple placeholder where you can store your utility objects. Synapse SQL pool enables you to do much more and create a Logical Data Warehouse - a relational layer built on top of Azure data sources.
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