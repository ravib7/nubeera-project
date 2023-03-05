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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Analyze with Apache Spark</h2>
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
                        <li><a href="#Create a serverless Apache Spark pool">Create a serverless Apache Spark pool</a></li>
                        <li><a href="#Understanding serverless Apache Spark pools">Understanding serverless Apache Spark pools</a></li>

                        <li><a href="#Analyze NYC Taxi data with a Spark pool">Analyze NYC Taxi data with a Spark pool</a></li>

                        <li><a href="#Load the NYC Taxi data into the Spark nyctaxi database">Load the NYC Taxi data into the Spark nyctaxi database</a></li>

                        <li><a href="#Analyze the NYC Taxi data using Spark and notebooks">Analyze the NYC Taxi data using Spark and notebooks</a></li>

                    </ul>

                    </nav>



                    <!-- <content> -->
                    In this tutorial, you'll learn the basic steps to load and analyze data with Apache Spark for Azure Synapse.
                    <h3 id="Create a serverless Apache Spark pool" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Create a serverless Apache Spark pool" aria-labelledby="Create a serverless Apache Spark pool"></a>Create a serverless Apache Spark pool</h3>

                    <ol>
                        <li>In Synapse Studio, on the left-side pane, select <strong>Manage</strong> &gt; <strong>Apache Spark pools</strong>.</li>
                        <li>Select <strong>New</strong></li>
                        <li>For <strong>Apache Spark pool name</strong> enter <strong>Spark1</strong>.</li>
                        <li>For <strong>Node size</strong> enter <strong>Small</strong>.</li>
                        <li>For <strong>Number of nodes</strong> Set the minimum to 3 and the maximum to 3</li>
                        <li>Select <strong>Review + create</strong> &gt; <strong>Create</strong>. Your Apache Spark pool will be ready in a few seconds.</li>
                    </ol>
                    <h3 id="Understanding serverless Apache Spark pools" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Understanding serverless Apache Spark pools" aria-labelledby="Understanding serverless Apache Spark pools"></a>Understanding serverless Apache Spark pools</h3>
                    A serverless Spark pool is a way of indicating how a user wants to work with Spark. When you start using a pool, a Spark session is created if needed. The pool controls how many Spark resources will be used by that session and how long the session will last before it automatically pauses. You pay for spark resources used during that session not for the pool itself. In this way a Spark pool lets you work with Spark, without having to worry managing clusters. This is similar to how a serverless SQL pool works.

                    <h3 id="Analyze NYC Taxi data with a Spark pool" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Analyze NYC Taxi data with a Spark pool" aria-labelledby="Analyze NYC Taxi data with a Spark pool"></a>Analyze NYC Taxi data with a Spark pool</h3>
                    <ol>
                        <li>In Synapse Studio, go to the <strong>Develop</strong> hub
                        </li>
                        <li>Create a new Notebook
                        </li>
                        <li>Create a new code cell and paste the following code into that cell.
                                <pre>
%%pyspark
df = spark.read.load('abfss://users@contosolake.dfs.core.windows.net/NYCTripSmall.parquet', format='parquet')
display(df.limit(10))
</pre>
                        </li>
                        <li>In the notebook, in the <strong>Attach to</strong> menu, choose the <strong>Spark1</strong> serverless Spark pool that we created earlier.
                        </li>
                        <li>Select <strong>Run</strong> on the cell. Synapse will start a new Spark session to run this cell if needed. If a new Spark session is needed, initially it will take about two seconds to be created.
                        </li>
                        <li>If you just want to see the schema of the dataframe run a cell with the following code:
                                <pre>
%%pyspark
df.printSchema()
</pre>
                        </li>
                    </ol>

                    <h3 id="Load the NYC Taxi data into the Spark nyctaxi database " class="heading-anchor"><a class="anchor-link docon docon-link" href="#Load the NYC Taxi data into the Spark nyctaxi database" aria-labelledby="Load the NYC Taxi data into the Spark nyctaxi database"></a>Load the NYC Taxi data into the Spark nyctaxi database</h3>
                    Data is available via the dataframe named <strong>df</strong>. Load it into a Spark database named <strong>nyctaxi</strong>.
                    <ol>
                        <li>Add a new code cell to the notebook, and then enter the following code:
                                <pre>
%%pyspark
spark.sql("CREATE DATABASE IF NOT EXISTS nyctaxi")
df.write.mode("overwrite").saveAsTable("nyctaxi.trip")
</pre>
                        </li>
                    </ol>
                    <h3 id="Analyze the NYC Taxi data using Spark and notebooks" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Analyze the NYC Taxi data using Spark and notebooks" aria-labelledby="Analyze the NYC Taxi data using Spark and notebooks"></a>Analyze the NYC Taxi data using Spark and notebooks</h3>
                    <ol>
                        <li>Create a new code cell and enter the following code.
                                <pre>
%%pyspark
df = spark.sql("SELECT * FROM nyctaxi.trip") 
display(df)
</pre>
                        </li>
                        <li>Run the cell to show the NYC Taxi data we loaded into the <strong>nyctaxi</strong> Spark database.
                        </li>
                        <li>Create a new code cell and enter the following code. We will analyze this data and save the results into a table called <strong>nyctaxi.passengercountstats</strong>.
                                <pre>
%%pyspark
df = spark.sql("""
   SELECT PassengerCount,
       SUM(TripDistanceMiles) as SumTripDistance,
       AVG(TripDistanceMiles) as AvgTripDistance
   FROM nyctaxi.trip
   WHERE TripDistanceMiles > 0 AND PassengerCount > 0
   GROUP BY PassengerCount
   ORDER BY PassengerCount
""") 
display(df)
df.write.saveAsTable("nyctaxi.passengercountstats")
</pre>
                        </li>
                        <li>In the cell results, select <strong>Chart</strong> to see the data visualized.
                        </li>
                    </ol>


                </div>
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