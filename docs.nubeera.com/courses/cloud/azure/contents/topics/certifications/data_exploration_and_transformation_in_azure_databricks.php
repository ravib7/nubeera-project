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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 3 - Data exploration and transformation in Azure Databricks</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Certifications</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                This lab teaches how to use various Apache Spark DataFrame methods to explore and transform data in Azure Databricks. You will learn how to perform standard DataFrame methods to explore and transform data. You will also learn how to perform more advanced tasks, such as removing duplicate data, manipulate date/time values, rename columns, and aggregate data.

                After completing this lab, you will be able to:

                <ul>
                    <li>Use DataFrames in Azure Databricks to explore and filter data</li>
                    <li>Cache a DataFrame for faster subsequent queries</li>
                    <li>Remove duplicate data</li>
                    <li>Manipulate date/time values</li>
                    <li>Remove and rename DataFrame columns</li>
                    <li>Aggregate data stored in a DataFrame</li>
                </ul>

                <h3 id="lab-setup-and-pre-requisites">Lab setup and pre-requisites</h3>

                Before starting this lab, ensure you have successfully completed the setup steps to create your lab environment. Additionally, you require an Azure Databricks cluster, which you should have created in Lab 1. If you did not complete lab 1 (or you have deleted your cluster), the instructions below include steps to create one.

                <h3 id="exercise-1---working-with-dataframes">Exercise 1 - Working with DataFrames</h3>

                In this exercise, you’ll use some Databricks notebooks to learn fundamentals concepts and techniques for working with DataFrames.

                <h3 id="task-1-clone-the-databricks-archive">Task 1: Clone the Databricks archive</h3>

                <ol>
                    <li>If you do not currently have your Azure Databricks workspace open: in the Azure portal (<a href="https://portal.azure.com">https://portal.azure.com</a>), navigate to your deployed Azure Databricks workspace and select <strong>Launch Workspace</strong>.</li>
                    <li>In the left pane, select <strong>Compute</strong>. If you have an existing cluster, ensure that it is running (start it if necessary). If you don’t have an existing cluster, create a single-node cluster that uses the latest runtime and <strong>Scala 2.12</strong> or later.</li>
                    <li>When your cluster is running, in the left pane, select <strong>Workspace</strong> &gt; <strong>Users</strong>, and select your user name (the entry with the house icon).</li>
                    <li>
                        In the pane that appears, select the arrow next to your name, and select <strong>Import</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/import-archive.png" alt="The menu option to import the archive"><br><br>

                    </li>
                    <li>
                        In the <strong>Import Notebooks</strong> dialog box, select the URL and paste in the following URL:

                        <pre id="codeBlock0" class="mt-0"><blockquote class="hljs cpp"> https:<span class="hljs-comment"><span class="hljs-comment">//github.com/MicrosoftLearning/DP-203-Data-Engineer/raw/master/Allfiles/microsoft-learning-paths-databricks-notebooks/data-engineering/DBC/04-Working-With-Dataframes.dbc</span></span>
</blockquote></pre>
                    </li>
                    <li>Select <strong>Import</strong>.</li>
                    <li>Select the <strong>04-Working-With-Dataframes</strong> folder that appears.</li>
                </ol>

                <h3 id="task-2-run-the-describe-a-dataframe-notebook">Task 2: Run the <em>Describe a DataFrame</em> notebook</h3>

                <ol>
                    <li>Open the <strong>1.Describe-a-dataframe</strong> notebook.</li>
                    <li>Attach your cluster to the notebook before following the instructions and running the cells it contains. Within the notebook, you will:
                        <ul>
                            <li>Develop familiarity with the DataFrame APIs</li>
                            <li>Learn how to work with <strong>SparkSession</strong> and <strong>DataFrame</strong> (aka <strong><em>Dataset[Row]</em></strong>) classes.</li>
                            <li>Learn how to use the <strong>count</strong> action.</li>
                        </ul>
                    </li>
                </ol>

                <h3 id="task-3-run-the-working-with-dataframes-notebook">Task 3: Run the <em>Working with DataFrames</em> notebook</h3>

                <ol>
                    <li>In your Azure Databricks workspace, in the <strong>04-Working-With-Dataframes</strong> folder, open the <strong>2.Use-common-dataframe-methods</strong> notebook.</li>
                    <li>
                        Attach your cluster to the notebook before following the instructions and running the cells within. Within the notebook, you will:

                        <ul>
                            <li>Develop familiarity with the DataFrame APIs</li>
                            <li>Use common DataFrame methods for performance</li>
                            <li>Explore the Spark API documentation</li>
                        </ul>
                    </li>
                </ol>

                <h3 id="task-4-run-the-display-function-notebook">Task 4: Run the <em>Display Function</em> notebook</h3>

                <ol>
                    <li>In your Azure Databricks workspace, in the <strong>04-Working-With-Dataframes</strong> folder, open the <strong>3.Display-function</strong> notebook.</li>
                    <li>
                        Attach your cluster to the notebook before following the instructions and running the cells within. Within the notebook, you will:

                        <ul>
                            <li>Learn to use the following transformations:
                                <ul>
                                    <li>limit(..)</li>
                                    <li>select(..)</li>
                                    <li>drop(..)</li>
                                    <li>distinct()`</li>
                                    <li>dropDuplicates(..)</li>
                                </ul>
                            </li>
                            <li>Learn to use the following the actions:
                                <ul>
                                    <li>show(..)</li>
                                    <li>display(..)</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ol>

                <h3 id="task-5-complete-the-distinct-articles-exercise-notebook">Task 5: Complete the <em>Distinct Articles</em> exercise notebook</h3>

                <ol>
                    <li>In your Azure Databricks workspace, in the <strong>04-Working-With-Dataframes</strong> folder, open the <strong>4.Exercise: Distinct Articles</strong> notebook.</li>
                    <li>
                        Attach your cluster to the notebook before following the instructions and running the cells within. In this notebook, you read Parquet files, apply necessary transformations, perform a total count of records, then verify that all the data was correctly loaded. As a bonus, you can try defining a schema that matches the data and update the read operation to use the schema.

                        <blockquote>
                            Note: You will find a corresponding notebook within the <strong>Solutions</strong> subfolder. This contains completed cells for the exercise. Refer to the notebook if you get stuck or simply want to see the solution.
                        </blockquote>
                    </li>
                </ol>

                <h3 id="exercise-2---working-with-dataframes-advanced-methods">Exercise 2 - Working with DataFrames advanced methods</h3>

                This exercise builds on the Azure Databricks DataFrames concepts learned in the previous lab above by exploring some advanced methods data engineers can use to read, write, and transform data using DataFrames.

                <h3 id="task-1-clone-the-databricks-archive-1">Task 1: Clone the Databricks archive</h3>

                <ol>
                    <li>In your Databricks workspace, in the left pane, select <strong>Workspace</strong> and navigate your home folder (your username with a house icon).</li>
                    <li>Select the arrow next to your name, and select <strong>Import</strong>.</li>
                    <li>
                        In the <strong>Import Notebooks</strong> dialog box, select <strong>URL</strong> and paste in the following URL:

                        <pre id="codeBlock1" class="mt-0"><blockquote class="hljs cpp"> https:<span class="hljs-comment"><span class="hljs-comment">//github.com/MicrosoftLearning/DP-203-Data-Engineer/raw/master/Allfiles/microsoft-learning-paths-databricks-notebooks/data-engineering/DBC/07-Dataframe-Advanced-Methods.dbc</span></span>
</blockquote></pre>
                    </li>
                    <li>Select <strong>Import</strong>.</li>
                    <li>Select the <strong>07-Dataframe-Advanced-Methods</strong> folder that appears.</li>
                </ol>

                <h3 id="task-2-run-the-date-and-time-manipulation-notebook">Task 2: Run the <em>Date and Time Manipulation</em> notebook</h3>

                <ol>
                    <li>In your Azure Databricks workspace, in the <strong>07-Dataframe-Advanced-Methods</strong> folder, open the <strong>1.DateTime-Manipulation</strong> notebook.</li>
                    <li>Attach your cluster to the notebook before following the instructions and running the cells within. You will explore more of the <strong>sql.functions</strong> operations as well as date &amp; time functions.</li>
                </ol>

                <h3 id="task-3-run-the-use-aggregate-functions-notebook">Task 3: Run the <em>Use Aggregate Functions</em> notebook</h3>

                <ol>
                    <li>
                        In your Azure Databricks workspace, in the <strong>07-Dataframe-Advanced-Methods</strong> folder, open the <strong>2.Use-Aggregate-Functions</strong> notebook.
                    </li>
                    <li>
                        Attach your cluster to the notebook before following the instructions and running the cells within. Within the notebook, you will learn various aggregate functions.
                    </li>
                </ol>

                <h3 id="task-4-complete-the-de-duping-data-exercise-notebook">Task 4: Complete the <em>De-Duping Data</em> exercise notebook</h3>

                <ol>
                    <li>
                        In your Azure Databricks workspace, in the <strong>07-Dataframe-Advanced-Methods</strong> folder, open the <strong>3.Exercise-Deduplication-of-Data</strong> notebook.
                    </li>
                    <li>
                        Attach your cluster to the notebook before following the instructions and running the cells within. The goal of this exercise is to put into practice some of what you have learned about using DataFrames, including renaming columns. The instructions are provided within the notebook, along with empty cells for you to do your work. At the bottom of the notebook are additional cells that will help verify that your work is accurate.
                    </li>
                </ol>

                <h3 id="important-shut-down-your-cluster">Important: Shut down your cluster</h3>

                <ol>
                    <li>After you’ve completed the lab, in the left pane, select <strong>Compute</strong> and select your cluster. Then select <strong>Terminate</strong> to stop the cluster.</li>
                </ol>

                </article>


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