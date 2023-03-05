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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 11 - Create a stream processing solution with Event Hubs and Azure Databricks</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Certifications</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                In this lab, you will learn how to ingest and process streaming data at scale with Event Hubs and Spark Structured Streaming in Azure Databricks. You will learn the key features and uses of Structured Streaming. You will implement sliding windows to aggregate over chunks of data and apply watermarking to remove stale data. Finally, you will connect to Event Hubs to read and write streams.

                After completing this lab, you will be able to:

                <ul>
                    <li>Know the key features and uses of Structured Streaming</li>
                    <li>Stream data from a file and write it out to a distributed file system</li>
                    <li>Use sliding windows to aggregate over chunks of data rather than all data</li>
                    <li>Apply watermarking to remove stale data</li>
                    <li>Connect to Event Hubs read and write streams</li>
                </ul>

                <h3 id="concepts">Concepts</h3>

                Apache Spark Structured Streaming is a fast, scalable, and fault-tolerant stream processing API. You can use it to perform analytics on your streaming data in near real time.

                With Structured Streaming, you can use SQL queries to process streaming data in the same way that you would process static data. The API continuously increments and updates the final data.

                <h3 id="event-hubs-and-spark-structured-streaming">Event Hubs and Spark Structured Streaming</h3>

                Azure Event Hubs is a scalable real-time data ingestion service that processes millions of data in a matter of seconds. It can receive large amounts of data from multiple sources and stream the prepared data to Azure Data Lake or Azure Blob storage.

                Azure Event Hubs can be integrated with Spark Structured Streaming to perform processing of messages in near real time. You can query and analyze the processed data as it comes by using a Structured Streaming query and Spark SQL.

                <h3 id="streaming-concepts">Streaming concepts</h3>

                Stream processing is where you continuously incorporate new data into Data Lake storage and compute results. The streaming data comes in faster than it can be consumed when using traditional batch-related processing techniques. A stream of data is treated as a table to which data is continuously appended. Examples of such data include bank card transactions, Internet of Things (IoT) device data, and video game play events.

                A streaming system consists of:

                <ul>
                    <li>Input sources such as Kafka, Azure Event Hubs, IoT Hub, files on a distributed system, or TCP-IP sockets</li>
                    <li>Stream processing using Structured Streaming, forEach sinks, memory sinks, etc.</li>
                </ul>

                <h3 id="lab-setup-and-pre-requisites">Lab setup and pre-requisites</h3>

                Before starting this lab, ensure you have successfully completed the setup steps to create your lab environment.

                <h3 id="exercise-1---explore-structured-streaming-concepts">Exercise 1 - Explore Structured Streaming Concepts</h3>

                <h3 id="task-1-clone-the-databricks-archive">Task 1: Clone the Databricks archive</h3>

                <ol>
                    <li>If you do not currently have your Azure Databricks workspace open: in the Azure portal, navigate to your deployed Azure Databricks workspace and select <strong>Launch Workspace</strong>.</li>
                    <li>In the left pane, select <strong>Compute</strong>. If you have an existing cluster, ensure that it is running (start it if necessary). If you don’t have an existing cluster, create a single-node cluster that uses the latest runtime and <strong>Scala 2.12</strong> or later.</li>
                    <li>When your cluster is running, in the left pane, select <strong>Workspace</strong> &gt; <strong>Users</strong>, and select your username (the entry with the house icon).</li>
                    <li>
                        In the pane that appears, select the arrow next to your name, and select <strong>Import</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/import-archive.png" alt="The menu option to import the archive"><br><br>
                    </li>
                    <li>In the <strong>Import Notebooks</strong> dialog box, select the URL and paste in the following URL:</li>
                </ol>

                <pre id="codeBlock0" class="mt-0"><blockquote class="hljs cpp">   https:<span class="hljs-comment"><span class="hljs-comment">//github.com/MicrosoftLearning/DP-203-Data-Engineer/raw/master/Allfiles/microsoft-learning-paths-databricks-notebooks/data-engineering/DBC/10-Structured-Streaming.dbc</span></span>
</blockquote></pre>

                <ol>
                    <li>Select <strong>Import</strong>.</li>
                    <li>Select the <strong>10-Structured-Streaming</strong> folder that appears.</li>
                </ol>

                <h3 id="task-2-complete-the-notebook">Task 2: Complete the notebook</h3>

                <ol>
                    <li>
                        Open the <strong>1.Structured-Streaming-Concepts</strong> notebook. Make sure you attach your cluster to the notebook before following the instructions and running the cells within.

                        Within the notebook, you will:

                        <ul>
                            <li>Stream data from a file and write it out to a distributed file system</li>
                            <li>List active streams</li>
                            <li>Stop active streams</li>
                        </ul>
                    </li>
                </ol>

                <h3 id="exercise-2---work-with-time-windows">Exercise 2 - Work with Time Windows</h3>

                <h3 id="task-1-complete-the-notebook">Task 1: Complete the notebook</h3>

                <ol>
                    <li>
                        In your Azure Databricks workspace, open the <strong>10-Structured-Streaming</strong> folder that you imported within your user folder.
                    </li>
                    <li>
                        Open the <strong>2.Time-Windows</strong> notebook. Make sure you attach your cluster to the notebook before following the instructions and running the cells within.

                        Within the notebook, you will:

                        <ul>
                            <li>Use sliding windows to aggregate over chunks of data rather than all data</li>
                            <li>Apply watermarking to throw away stale old data that you do not have space to keep</li>
                            <li>Plot live graphs using <code>display</code></li>
                        </ul>
                    </li>
                </ol>

                <h3 id="exercise-3---use-structured-streaming-with-azure-eventhubs">Exercise 3 - Use Structured Streaming with Azure EventHubs</h3>

                <h3 id="task-1-create-an-event-hub">Task 1: Create an event hub</h3>

                <ol>
                    <li>In the Azure portal (<a href="https://portal.azure.com">https://portal.azure.com</a>), in the <strong>data-engineering-synapse-<em>xxxxxxx</em></strong> resource group that contains your Azure resources for this course, open the <strong>eventhub<em>xxxxxxx</em></strong> Event Hub namespace.</li>
                    <li>Add a new event hub by selecting the <strong>+ Event Hub</strong> button on the toolbar.</li>
                    <li>
                        On the <strong>Create Event Hub</strong> pane, create a new event hub with the following details:

                        <ul>
                            <li><strong>Name</strong>: <code>databricks-demo-eventhub</code></li>
                            <li><strong>Partition Count</strong>: <code>2</code></li>
                            <li><strong>Message Retention</strong>: <code>1</code></li>
                            <li><strong>Capture</strong>: <em>Off</em></li>
                        </ul>

                        Select <strong>Create</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images//create-event-hub-pane.png" alt="Screenshot of the &quot;Create Event Hub&quot; pane" title="Create Event Hub"><br><br>
                    </li>
                </ol>

                <h3 id="task-2-copy-the-connection-string-primary-key-for-the-shared-access-policy">Task 2: Copy the connection string primary key for the shared access policy</h3>

                <ol>
                    <li>
                        On the left-hand menu in your Event Hubs namespace, select <strong>Shared access policies</strong> under <strong>Settings</strong>, then select the <strong>RootManageSharedAccessKey</strong> policy.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images//shared-access-policies.png" alt="Shared access policies." title="Shared access policies"><br><br>
                    </li>
                    <li>
                        Copy the connection string for the primary key by selecting the copy button.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images//copy-connection-string.png" alt="Selected shared access policy with information about connection string and primary key" title="Connection string--primary key"><br><br>
                    </li>
                    <li>
                        Save the copied primary key to Notepad or another text editor for later reference.
                    </li>
                </ol>

                <h3 id="task-3-run-the-notebook">Task 3: Run the notebook</h3>

                <ol>
                    <li>
                        Switch back to the browser tab containing your Azure Databricks workspace, and open the <strong>10-Structured-Streaming</strong> folder that you imported within your user folder.
                    </li>
                    <li>
                        Open the <strong>3.Streaming-With-Event-Hubs-Demo</strong> notebook. Make sure you attach your cluster to the notebook before following the instructions and running the cells within.

                        Within the notebook, you will:

                        <ul>
                            <li>Connect to Event Hubs and write a stream to your event hub</li>
                            <li>Read a stream from your event hub</li>
                            <li>Define a schema for the JSON payload and parse the data to display it within a table</li>
                        </ul>
                    </li>
                </ol>

                <h3 id="shut-down-your-cluster">Shut down your cluster</h3>

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