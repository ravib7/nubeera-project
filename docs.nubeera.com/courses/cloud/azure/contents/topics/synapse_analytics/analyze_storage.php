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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Analyze data in a storage account</h2>
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
                        <li><a href="#Overview">Overview</a></li>
                        <li><a href="#Create CSV and Parquet files in your storage account">Create CSV and Parquet files in your storage account</a></li>
                        <li><a href="#Analyze data in a storage account">Analyze data in a storage account</a></li>

                    </ul>
                    <!-- <content> -->
                    In this tutorial, you'll learn how to analyze data located in a storage account.
                    <h3 id="Overview" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Overview" aria-labelledby="Overview"></a>Overview</h3>
                    So far, we've covered scenarios where data resides in databases in the workspace. Now we'll show you how to work with files in storage accounts. In this scenario, we'll use the primary storage account of the workspace and container that we specified when creating the workspace.
                    <ul>
                        <li>The name of the storage account: <strong>contosolake</strong></li>
                        <li>The name of the container in the storage account: <strong>users</strong></li>
                    </ul>

                    <h3 id="Create CSV and Parquet files in your storage account" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Create CSV and Parquet files in your storage account" aria-labelledby="Create CSV and Parquet files in your storage account"></a>Create CSV and Parquet files in your storage account</h3>
                    Run the following code in a notebook in a new code cell. It creates a CSV file and a parquet file in the storage account.
                    <code>
                        <pre>
%%pyspark
df = spark.sql("SELECT * FROM nyctaxi.passengercountstats")
df = df.repartition(1) # This ensures we'll get a single file during write()
df.write.mode("overwrite").csv("/NYCTaxi/PassengerCountStats_csvformat")
df.write.mode("overwrite").parquet("/NYCTaxi/PassengerCountStats_parquetformat")
                        </pre>
                    </code>


                    <h3 id="Analyze data in a storage account" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Analyze data in a storage account" aria-labelledby="Analyze data in a storage account"></a>Analyze data in a storage account</h3>
                    You can analyze the data in your workspace default ADLS Gen2 account or you can link an ADLS Gen2 or Blob storage account to your workspace through <strong>"Manage"</strong> &gt; <strong>"Linked Services"</strong> &gt; <strong>"New"</strong>
                    (The steps below will refer to the primary ADLS Gen2 account).
                    <ol>
                        <li>In Synapse Studio, go to the <strong>Data</strong> hub, and then select <strong>Linked</strong>.</li>
                        <li>Go to <strong>Azure Data Lake Storage Gen2</strong> > <strong>myworkspace (Primary - contosolake)</strong>.</li>
                        <li>Select <strong>users (Primary)</strong>. You should see the <strong>NYCTaxi</strong> folder. Inside you should see two folders called <strong>PassengerCountStats_csvformat</strong> and <strong>PassengerCountStats_parquetformat</strong>.</li>
                        <li>Open the <strong>PassengerCountStats_parquetformat</strong> folder. Inside, you'll see a parquet file with a name like <code>part-00000-2638e00c-0790-496b-a523-578da9a15019-c000.snappy.parquet</code>.</li>
                        <li>Right-click <strong>.parquet</strong>, then select <strong>New notebook</strong>, then select <strong>Load to DataFrame</strong>. A new notebook is created with a cell like this:</li>
                        <code>
                            <pre>
%%pyspark
abspath = 'abfss://users@contosolake.dfs.core.windows.net/NYCTaxi/PassengerCountStats_parquetformat/part-00000-1f251a58-d8ac-4972-9215-8d528d490690-c000.snappy.parquet'
df = spark.read.load(abspath, format='parquet')
display(df.limit(10))
                                          </pre>
                        </code>
                        </li>

                        <li>Attach to the Spark pool named <strong>Spark1</strong>. Run the cell.
                        </li>

                        <li>Select back to the <strong>users</strong> folder. Right-click the <strong>.parquet</strong> file again, and then select <strong>New SQL script</strong> > <strong>SELECT TOP 100 rows</strong>. It creates a SQL script like this:
                                <pre>
SELECT TOP 100 *
FROM OPENROWSET(
    BULK 'https://contosolake.dfs.core.windows.net/users/NYCTaxi/PassengerCountStats_parquetformat/part-00000-1f251a58-d8ac-4972-9215-8d528d490690-c000.snappy.parquet',
    FORMAT='PARQUET'
) AS [result]
                                          </pre>
                            In the script window, make sure the <strong>Connect</strong> to field is set to the <strong>Built-in</strong> serverless SQL pool.
                        </li>

                        <li>Run the script.</li>

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