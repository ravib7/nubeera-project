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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">What is Azure Synapse Analytics?</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                    <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                    <li class="breadcrumb-item active">Synapse Analytics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <h3>In this article</h3>
                    <ol>
                        <li><a href="#industry-leading-sql">Industry-leading SQL</a></li>
                        <li><a href="#industry-standard-apache-spark">Industry-standard Apache Spark</a></li>
                        <li><a href="#working-with-your-data-lake">Working with your Data Lake</a></li>
                        <li><a href="#built-in-data-integration">Built-in data integration</a></li>
                        <li><a href="#data-explorer-preview">Data Explorer (Preview)</a></li>
                        <li><a href="#unified-experience">Unified experience</a></li>
                        <li><a href="#engage-with-the-synapse-community">Engage with the Synapse community</a></li>
                    </ol>
                    </nav>



                    <!-- <content> -->
                    <strong>Azure Synapse</strong> is an enterprise analytics service that accelerates time to insight across data warehouses and big data systems. Azure Synapse brings together the best of <strong>SQL</strong> technologies used in enterprise data warehousing, <strong>Spark</strong> technologies used for big data, <strong>Data Explorer</strong> for log and time series analytics, <strong>Pipelines</strong> for data integration and ETL/ELT, and deep integration with other Azure services such as <strong>Power BI</strong>, <strong>CosmosDB</strong>, and <strong>AzureML</strong>.
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/synapse-analytics/media/overview-what-is/synapse-architecture.png" alt="Diagram of Azure Synapse Analytics architecture." data-linktype="relative-path"><br><br>
                    <h3 id="industry-leading-sql" class="heading-anchor"><a class="anchor-link docon docon-link" href="#industry-leading-sql" aria-labelledby="industry-leading-sql"></a>Industry-leading SQL</h3>
                    <strong>Synapse SQL</strong> is a distributed query system for T-SQL that enables data warehousing and data virtualization scenarios and extends T-SQL to address streaming and machine learning scenarios.
                    <ul>
                        <li>Synapse SQL offers both <strong>serverless</strong> and <strong>dedicated</strong> resource models. For predictable performance and cost, create dedicated SQL pools to reserve processing power for data stored in SQL tables. For unplanned or bursty workloads, use the always-available, serverless SQL endpoint.</li>
                        <li>Use built-in <strong>streaming</strong> capabilities to land data from cloud data sources into SQL tables</li>
                        <li>Integrate AI with SQL by using <strong>machine learning</strong> models to score data using the T-SQL PREDICT function</li>
                    </ul>
                    <h3 id="industry-standard-apache-spark" class="heading-anchor"><a class="anchor-link docon docon-link" href="#industry-standard-apache-spark" aria-labelledby="industry-standard-apache-spark"></a>Industry-standard Apache Spark</h3>
                    <strong>Apache Spark for Azure Synapse</strong> deeply and seamlessly integrates Apache Spark--the most popular open source big data engine used for data preparation, data engineering, ETL, and machine learning.
                    <ul>
                        <li>ML models with SparkML algorithms and AzureML integration for Apache Spark 2.4 with built-in support for Linux Foundation Delta Lake.</li>
                        <li>Simplified resource model that frees you from having to worry about managing clusters.</li>
                        <li>Fast Spark start-up and aggressive autoscaling.</li>
                        <li>Built-in support for .NET for Spark allowing you to reuse your C# expertise and existing .NET code within a Spark application.</li>
                    </ul>
                    <h3 id="working-with-your-data-lake" class="heading-anchor"><a class="anchor-link docon docon-link" href="#working-with-your-data-lake" aria-labelledby="working-with-your-data-lake"></a>Working with your Data Lake</h3>
                    Azure Synapse removes the traditional technology barriers between using SQL and Spark together. You can seamlessly mix and match based on your needs and expertise.
                    <ul>
                        <li>Tables defined on files in the data lake are seamlessly consumed by either Spark or Hive.</li>
                        <li>SQL and Spark can directly explore and analyze Parquet, CSV, TSV, and JSON files stored in the data lake.</li>
                        <li>Fast, scalable data loading between SQL and Spark databases</li>
                    </ul>
                    <h3 id="built-in-data-integration" class="heading-anchor"><a class="anchor-link docon docon-link" href="#built-in-data-integration" aria-labelledby="built-in-data-integration"></a>Built-in data integration</h3>
                    Azure Synapse contains the same Data Integration engine and experiences as Azure Data Factory, allowing you to create rich at-scale ETL pipelines without leaving Azure Synapse Analytics.
                    <ul>
                        <li>Ingest data from 90+ data sources</li>
                        <li>Code-Free ETL with Data flow activities</li>
                        <li>Orchestrate notebooks, Spark jobs, stored procedures, SQL scripts, and more</li>
                    </ul>
                    <h3 id="data-explorer-preview" class="heading-anchor"><a class="anchor-link docon docon-link" href="#data-explorer-preview" aria-labelledby="data-explorer-preview"></a>Data Explorer (Preview)</h3>
                    Azure Synapse Data Explorer provides customers with an interactive query experience to unlock insights from log and telemetry data. To complement existing SQL and Apache Spark analytics runtime engines, Data Explorer analytics runtime is optimized for efficient log analytics using powerful indexing technology to automatically index free-text and semi-structured data commonly found in the telemetry data.
                    Use Data Explorer as a data platform for building near real-time log analytics and IoT analytics solutions to:
                    <ul>
                        <li>Consolidate and correlate your logs and events data across on-premises, cloud, third-party data sources.</li>
                        <li>Accelerate your AI Ops journey (pattern recognition, anomaly detection, forecasting, and more)</li>
                        <li>Replace infrastructure-based log search solutions to save cost and increase productivity.</li>
                        <li>Build IoT Analytics solution for your IoT data.</li>
                        <li>Build Analytical SaaS solutions to offer services to your internal and external customers.</li>
                    </ul>
                    <h3 id="unified-experience" class="heading-anchor"><a class="anchor-link docon docon-link" href="#unified-experience" aria-labelledby="unified-experience"></a>Unified experience</h3>
                    <strong>Synapse Studio</strong> provides a single way for enterprises to build solutions, maintain, and secure all in a single user experience
                    <ul>
                        <li>Perform key tasks: ingest, explore, prepare, orchestrate, visualize</li>
                        <li>Monitor resources, usage, and users across SQL, Spark, and Data Explorer</li>
                        <li>Use Role-based access control to simplify access to analytics resources</li>
                        <li>Write SQL, Spark or KQL code and integrate with enterprise CI/CD processes</li>
                    </ul>
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