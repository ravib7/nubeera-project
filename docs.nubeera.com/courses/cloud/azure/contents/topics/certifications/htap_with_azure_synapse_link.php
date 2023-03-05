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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 9 - Support Hybrid Transactional Analytical Processing (HTAP) with Azure Synapse Link</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Certifications</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                In this lab, you will learn how Azure Synapse Link enables seamless connectivity of an Azure Cosmos DB account to a Synapse workspace. You will learn how to enable and configure Synapse link, then how to query the Azure Cosmos DB analytical store using Apache Spark and SQL Serverless. <br><br>

                After completing this lab, you will be able to:

                <ul>
                    <li>Configure Azure Synapse Link with Azure Cosmos DB</li>
                    <li>Query Azure Cosmos DB with Apache Spark for Synapse Analytics</li>
                    <li>Query Azure Cosmos DB with serverless SQL pool for Azure Synapse Analytics</li>
                </ul>

                <h3 id="lab-setup-and-pre-requisites">Lab setup and pre-requisites</h3>

                Before starting this lab, you should complete <strong>Lab 6: <em>Transform data with Azure Data Factory or Azure Synapse Pipelines</em></strong>.

                <blockquote>
                    <strong>Note</strong>: If you have <strong><em>not</em></strong> completed lab 6, but you <u>have</u> completed the lab setup for this course, you can complete these steps to create the required linked service and dataset.

                    <ol>
                        <li>In Synapse Studio, on the <strong>Manage</strong> hub, add a new <strong>Linked service</strong> for <strong>Azure Cosmos DB (SQL API)</strong> with the following settings:
                            <ul>
                                <li><strong>Name</strong>: asacosmosdb01</li>
                                <li><strong>Cosmos DB account name</strong>: asacosmosdb<em>xxxxxxx</em></li>
                                <li><strong>Database name</strong>: CustomerProfile</li>
                            </ul>
                        </li>
                        <li>On the <strong>Data</strong> hub, create the following <strong>Integration dataset</strong>:
                            <ul>
                                <li><strong>Source</strong>: Azure Cosmos DB (SQL API)</li>
                                <li><strong>Name</strong>: asal400_customerprofile_cosmosdb</li>
                                <li><strong>Linked service</strong>: asacosmosdb01</li>
                                <li><strong>Collection</strong>: OnlineUserProfile01</li>
                                <li><strong>Import schema</strong>: From connection/store</li>
                            </ul>
                        </li>
                    </ol>
                </blockquote>

                <h3 id="exercise-1---configuring-azure-synapse-link-with-azure-cosmos-db">Exercise 1 - Configuring Azure Synapse Link with Azure Cosmos DB</h3>

                Tailwind Traders uses Azure Cosmos DB to store user profile data from their eCommerce site. The NoSQL document store provided by the Azure Cosmos DB SQL API provides the familiarity of managing their data using SQL syntax, while being able to read and write the files at a massive, global scale. <br><br>

                While Tailwind Traders is happy with the capabilities and performance of Azure Cosmos DB, they are concerned about the cost of executing a large volume of analytical queries over multiple partitions (cross-partition queries) from their data warehouse. They want to efficiently access all the data without needing to increase the Azure Cosmos DB request units (RUs). They have looked at options for extracting data from their containers to the data lake as it changes, through the Azure Cosmos DB change feed mechanism. The problem with this approach is the extra service and code dependencies and long-term maintenance of the solution. They could perform bulk exports from a Synapse Pipeline, but then they won’t have the most up-to-date information at any given moment.<br><br>

                You decide to enable Azure Synapse Link for Cosmos DB and enable the analytical store on their Azure Cosmos DB containers. With this configuration, all transactional data is automatically stored in a fully isolated column store. This store enables large-scale analytics against the operational data in Azure Cosmos DB, without impacting the transactional workloads or incurring resource unit (RU) costs. Azure Synapse Link for Cosmos DB creates a tight integration between Azure Cosmos DB and Azure Synapse Analytics, which enables Tailwind Traders to run near real-time analytics over their operational data with no-ETL and full performance isolation from their transactional workloads. <br><br>

                By combining the distributed scale of Cosmos DB’s transactional processing with the built-in analytical store and the computing power of Azure Synapse Analytics, Azure Synapse Link enables a Hybrid Transactional/Analytical Processing (HTAP) architecture for optimizing Tailwind Trader’s business processes. This integration eliminates ETL processes, enabling business analysts, data engineers &amp; data scientists to self-serve and run near real-time BI, analytics, and Machine Learning pipelines over operational data.

                <h3 id="task-1-enable-azure-synapse-link">Task 1: Enable Azure Synapse Link</h3>

                <ol>
                    <li>
                        In the Azure portal (<a href="https://portal.azure.com">https://portal.azure.com</a>), open the resource group for your lab environment.
                    </li>
                    <li>
                        Select the <strong>Azure Cosmos DB account</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/resource-group-cosmos.png" alt="The Azure Cosmos DB account is highlighted." title="Azure Cosmos DB account"><br><br>
                    </li>
                    <li>
                        Select <strong>Features</strong> in the left-hand menu, then select <strong>Azure Synapse Link</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/cosmos-db-features.png" alt="The Features blade is displayed." title="Features"><br><br>
                    </li>
                    <li>
                        Select <strong>Enable</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/synapse-link-enable.png" alt="Enable is highlighted." title="Azure Synapse Link"><br><br>

                        Before we can create an Azure Cosmos DB container with an analytical store, we must first enable Azure Synapse Link.
                    </li>
                    <li>
                        You must wait for this operation to complete before continuing, which should take about a minute. Check the status by selecting the Azure <strong>Notifications</strong> icon.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notifications-running.png" alt="The Enabling Synapse Link process is running." title="Notifications"><br><br>

                        You will see a green checkmark next to “Enabling Synapse Link” when it successfully completes.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notifications-completed.png" alt="The operation completed successfully." title="Notifications"><br><br>
                    </li>
                </ol>

                <h3 id="task-2-create-a-new-azure-cosmos-db-container">Task 2: Create a new Azure Cosmos DB container</h3>

                Tailwind Traders has an Azure Cosmos DB container named <strong>OnlineUserProfile01</strong>. Since we enabled the Azure Synapse Link feature <em>after</em> the container was already created, we cannot enable the analytical store on the container. We will create a new container that has the same partition key and enable the analytical store. <br><br>

                After creating the container, we will create a new Synapse Pipeline to copy data from the <strong>OnlineUserProfile01</strong> container to the new one.

                <ol>
                    <li>
                        Select <strong>Data Explorer</strong> on the left-hand menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-explorer-link.png" alt="The menu item is selected." title="Data Explorer"><br><br>
                    </li>
                    <li>
                        Select <strong>New Container</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-container-button.png" alt="The button is highlighted." title="New Container"><br><br>
                    </li>
                    <li>Create a new container with the following settings:
                        <ul>
                            <li><strong>Database id</strong>: Use the existing <strong>CustomerProfile</strong> database.</li>
                            <li><strong>Container id</strong>: Enter <code>UserProfileHTAP</code></li>
                            <li><strong>Partition key</strong>: Enter <code>/userId</code></li>
                            <li><strong>Throughput</strong>: Select <strong>Autoscale</strong></li>
                            <li><strong>Container max RU/s</strong>: Enter <code>4000</code></li>
                            <li><strong>Analytical store</strong>: On</li>
                        </ul>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-container.png" alt="The form is configured as described." title="New container"><br><br>

                        Here we set the <strong>partition key</strong> value to <strong>userId</strong>, because it is a field we use most often in queries and contains a relatively high cardinality (number of unique values) for good partitioning performance. We set the throughput to Autoscale with a maximum value of 4,000 request units (RUs). This means that the container will have a minimum of 400 RUs allocated (10% of the maximum number), and will scale up to a maximum of 4,000 when the scale engine detects a high enough demand to warrant increasing the throughput. Finally, we enable the <strong>analytical store</strong> on the container, which allows us to take full advantage of the Hybrid Transactional/Analytical Processing (HTAP) architecture from within Synapse Analytics. <br><br>

                        Let’s take a quick look at the data we will copy over to the new container.
                    </li>
                    <li>
                        Expand the <strong>OnlineUserProfile01</strong> container underneath the <strong>CustomerProfile</strong> database, then select <strong>Items</strong>. Select one of the documents and view its contents. The documents are stored in JSON format.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/existing-items.png" alt="The container items are displayed." title="Container items"><br><br>
                    </li>
                    <li>
                        Select <strong>Keys</strong> in the left-hand menu. You will need the <strong>Primary Key</strong> and the Cosmos DB account name (in the upper-left corner) later, so keep this tab open.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/cosmos-keys.png" alt="The primary key is highlighted." title="Keys"><br><br>
                    </li>
                </ol>

                <h3 id="task-3-create-and-run-a-copy-pipeline">Task 3: Create and run a copy pipeline</h3>

                Now that we have the new Azure Cosmos DB container with the analytical store enabled, we need to copy the contents of the existing container by using a Synapse Pipeline.

                <ol>
                    <li>
                        Open Synapse Studio (<a href="https://web.azuresynapse.net/">https://web.azuresynapse.net/</a>) in a different tab, and then navigate to the <strong>Integrate</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/integrate-hub.png" alt="The Integrate menu item is highlighted." title="Integrate hub"><br><br>
                    </li>
                    <li>
                        In the <strong>+</strong> menu, select <strong>Pipeline</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-pipeline.png" alt="The new pipeline link is highlighted." title="New pipeline"><br><br>
                    </li>
                    <li>
                        Under <strong>Activities</strong>, expand the <strong>Move &amp; transform</strong> group, then drag the <strong>Copy data</strong> activity onto the canvas. Set the <strong>Name</strong> to <strong><code>Copy Cosmos DB Container</code></strong> in the <strong>Properties</strong> blade.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/add-copy-pipeline.png" alt="The new copy activity is displayed." title="Add copy activity"><br><br>
                    </li>
                    <li>
                        Select the new <strong>Copy data</strong> activity that you added to the canvas; and on the <strong>Source</strong> tab beneath the canvas, select the <strong>asal400_customerprofile_cosmosdb</strong> source dataset.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/copy-source.png" alt="The source is selected." title="Source"><br><br>
                    </li>
                    <li>
                        Select the <strong>Sink</strong> tab, then select <strong>+ New</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/copy-sink.png" alt="The sink is selected." title="Sink"><br><br>
                    </li>
                    <li>
                        Select the <strong>Azure Cosmos DB (SQL API)</strong> dataset type, then select <strong>Continue</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/dataset-type.png" alt="Azure Cosmos DB is selected." title="New dataset"><br><br>
                    </li>
                    <li>Set the following properties, then click <strong>OK</strong>:
                        <ul>
                            <li><strong>Name</strong>: Enter <code>cosmos_db_htap</code>.</li>
                            <li><strong>Linked service</strong>: Select <strong>asacosmosdb01</strong>.</li>
                            <li><strong>Collection</strong>: Select <strong>UserProfileHTAP</strong>/</li>
                            <li><strong>Import schema</strong>: Select <strong>From connection/store</strong> under <strong>Import schema)</strong>.</li>
                        </ul>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/dataset-properties.png" alt="The form is configured as described." title="Set properties"><br><br>
                    </li>
                    <li>
                        Underneath the new sink dataset you just added, ensure that the <strong>Insert</strong> write behavior is selected.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sink-insert.png" alt="The sink tab is displayed." title="Sink tab"><br><br>
                    </li>
                    <li>
                        Select <strong>Publish all</strong>, then <strong>Publish</strong> to save the new pipeline.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/publish-all-1.png" alt="Publish all." title="Publish"><br><br>
                    </li>
                    <li>
                        Above the pipeline canvas, select <strong>Add trigger</strong>, then <strong>Trigger now</strong>. Select <strong>OK</strong> to trigger the run.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-trigger.png" alt="The trigger menu is shown." title="Trigger now"><br><br>
                    </li>
                    <li>
                        Navigate to the <strong>Monitor</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/monitor-hub.png" alt="Monitor hub." title="Monitor hub"><br><br>
                    </li>
                    <li>
                        Select <strong>Pipeline runs</strong> and wait until the pipeline run has successfully completed. You may have to select <strong>Refresh</strong> a few times.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-run-status.png" alt="The pipeline run is shown as successfully completed." title="Pipeline runs"><br><br>

                        <blockquote>
                            This may take <strong>around 4 minutes</strong> to complete.
                        </blockquote>
                    </li>
                </ol>

                <h3 id="exercise-2---querying-azure-cosmos-db-with-apache-spark-for-synapse-analytics">Exercise 2 - Querying Azure Cosmos DB with Apache Spark for Synapse Analytics</h3>

                Tailwind Traders wants to use Apache Spark to run analytical queries against the new Azure Cosmos DB container. In this segment, we will use built-in gestures in Synapse Studio to quickly create a Synapse Notebook that loads data from the analytical store of the HTAP-enabled container, without impacting the transactional store. <br><br>

                Tailwind Traders is trying to solve how they can use the list of preferred products identified with each user, coupled with any matching product IDs in their review history, to show a list of all preferred product reviews.

                <h3 id="task-1-create-a-notebook">Task 1: Create a notebook</h3>

                <ol>
                    <li>
                        Navigate to the <strong>Data</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub.png" alt="Data hub." title="Data hub"><br><br>
                    </li>
                    <li>
                        Select the <strong>Linked</strong> tab and expand the <strong>Azure Cosmos DB</strong> section (if this is not visible, use the <strong>↻</strong> button at the top right to refresh Synapse Studio), then expand the <strong>asacosmosdb01 (CustomerProfile)</strong> linked service. Right-click the <strong>UserProfileHTAP</strong> container, select <strong>New notebook</strong>, and then select <strong>Load to DataFrame</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-notebook.png" alt="The new notebook gesture is highlighted." title="New notebook"><br><br>

                        Notice that the <strong>UserProfileHTAP</strong> container that we created has a slightly different icon than the other container. This indicates that the analytical store is enabled.
                    </li>
                    <li>
                        In the new notebook, select the <strong>SparkPool01</strong> Spark pool in the <strong>Attach to</strong> dropdown list.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-attach.png" alt="The Attach to dropdown list is highlighted." title="Attach the Spark pool"><br><br>
                    </li>
                    <li>
                        Select <strong>Run all</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-cell1.png" alt="Thew new notebook is shown with the cell 1 output." title="Cell 1"><br><br>

                        It will take a few minutes to start the Spark session the first time. <br><br>

                        In the generated code within Cell 1, notice that the <strong>spark.read</strong> format is set to <strong>cosmos.olap</strong>. This instructs Synapse Link to use the container’s analytical store. If we wanted to connect to the transactional store instead, like to read from the change feed or write to the container, we’d use <strong>cosmos.oltp</strong> instead.

                        <blockquote>
                            <strong>Note:</strong> You cannot write to the analytical store, only read from it. If you want to load data into the container, you need to connect to the transactional store.
                        </blockquote>

                        The first option configures the name of the Azure Cosmos DB linked service. The second <code>option</code> defines the Azure Cosmos DB container from which we want to read.
                    </li>
                    <li>
                        Select the <strong>+ Code</strong> button underneath the cell you ran. This adds a new code cell beneath the first one.
                    </li>
                    <li>
                        The DataFrame contains extra columns that we don’t need. Let’s remove the unwanted columns and create a clean version of the DataFrame. To do this, enter the following in the new code cell and run it:

                        <pre id="codeBlock0" class="mt-0"><blockquote class="language-python hljs"> unwanted_cols = {<span class="hljs-string"><span class="hljs-string">'_attachments'</span></span>,<span class="hljs-string"><span class="hljs-string">'_etag'</span></span>,<span class="hljs-string"><span class="hljs-string">'_rid'</span></span>,<span class="hljs-string"><span class="hljs-string">'_self'</span></span>,<span class="hljs-string"><span class="hljs-string">'_ts'</span></span>,<span class="hljs-string"><span class="hljs-string">'collectionType'</span></span>,<span class="hljs-string"><span class="hljs-string">'id'</span></span>}

 <span class="hljs-comment"><span class="hljs-comment"># Remove unwanted columns from the columns collection</span></span>
 cols = list(set(df.columns) - unwanted_cols)

 profiles = df.select(cols)

 display(profiles.limit(<span class="hljs-number"><span class="hljs-number">10</span></span>))
</blockquote></pre>

                        The output now only contains the columns that we want. Notice that the <strong>preferredProducts</strong> and <strong>productReviews</strong> columns contain child elements. Expand the values on a row to view them. You may recall seeing the raw JSON format in the <strong>UserProfiles01</strong> container within the Azure Cosmos DB Data Explorer.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/cell2.png" alt="The cell's output is displayed." title="Cell 2 output"><br><br>
                    </li>
                    <li>
                        We should know how many records we’re dealing with. To do this, enter the following in a new code cell and run it:

                        <pre id="codeBlock1" class="mt-0"><blockquote class="language-python hljs"> profiles.count()
</blockquote></pre>

                        You should see a count result of 99,999.
                    </li>
                    <li>
                        We want to use the <strong>preferredProducts</strong> column array and <strong>productReviews</strong> column array for each user and create a graph of products that are from their preferred list that match with products that they have reviewed. To do this, we need to create two new DataFrames that contain flattened values from those two columns so we can join them in a later step. Enter the following in a new code cell and run it:

                        <pre id="codeBlock2" class="mt-0"><blockquote class="language-python hljs"> <span class="hljs-keyword"><span class="hljs-keyword">from</span></span> pyspark.sql.functions <span class="hljs-keyword"><span class="hljs-keyword">import</span></span> udf, explode

 preferredProductsFlat=profiles.select(<span class="hljs-string"><span class="hljs-string">'userId'</span></span>,explode(<span class="hljs-string"><span class="hljs-string">'preferredProducts'</span></span>).alias(<span class="hljs-string"><span class="hljs-string">'productId'</span></span>))
 productReviewsFlat=profiles.select(<span class="hljs-string"><span class="hljs-string">'userId'</span></span>,explode(<span class="hljs-string"><span class="hljs-string">'productReviews'</span></span>).alias(<span class="hljs-string"><span class="hljs-string">'productReviews'</span></span>))
 display(productReviewsFlat.limit(<span class="hljs-number"><span class="hljs-number">10</span></span>))
</blockquote></pre>

                        In this cell, we imported the special PySpark <a href="https://spark.apache.org/docs/latest/api/python/pyspark.sql.html?highlight=explode#pyspark.sql.functions.explode">explode</a> function, which returns a new row for each element of the array. This function helps flatten the <strong>preferredProducts</strong> and <strong>productReviews</strong> columns for better readability or for easier querying.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/cell4.png" alt="Cell output." title="Cell 4 output"><br><br>

                        Observe the cell output where we display the <strong>productReviewFlat</strong> DataFrame contents. We see a new <strong>productReviews</strong> column that contains the <strong>productId</strong> we want to match to the preferred products list for the user, as well as the <strong>reviewText</strong> that we want to display or save.
                    </li>
                    <li>
                        Let’s look at the <strong>preferredProductsFlat</strong> DataFrame contents. To do this, enter the following in a new cell and <strong>run</strong> it:

                        <pre id="codeBlock3" class="mt-0"><blockquote class="language-python hljs"> display(preferredProductsFlat.limit(<span class="hljs-number"><span class="hljs-number">20</span></span>))
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/cell5.png" alt="Cell output." title="Cell 5 results"><br><br>

                        Since we used the <strong>explode</strong> function on the preferred products array, we have flattened the column values to <strong>userId</strong> and <strong>productId</strong> rows, ordered by user.
                    </li>
                    <li>
                        Now we need to further flatten the <strong>productReviewFlat</strong> DataFrame contents to extract the <strong>productReviews.productId</strong> and <strong>productReviews.reviewText</strong> fields and create new rows for each data combination. To do this, enter the following in a new code cell and run it:

                        <pre id="codeBlock4" class="mt-0"><blockquote class="language-python hljs">productReviews = (productReviewsFlat.select(<span class="hljs-string"><span class="hljs-string">'userId'</span></span>,<span class="hljs-string"><span class="hljs-string">'productReviews.productId'</span></span>,<span class="hljs-string"><span class="hljs-string">'productReviews.reviewText'</span></span>)
    .orderBy(<span class="hljs-string"><span class="hljs-string">'userId'</span></span>))

display(productReviews.limit(<span class="hljs-number"><span class="hljs-number">10</span></span>))
</blockquote></pre>

                        In the output, notice that we now have multiple rows for each <code>userId</code>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/cell6.png" alt="Cell output." title="Cell 6 results"><br><br>
                    </li>
                    <li>
                        The final step is to join the <strong>preferredProductsFlat</strong> and <strong>productReviews</strong> DataFrames on the <strong>userId</strong> and <strong>productId</strong> values to build our graph of preferred product reviews. To do this, enter the following in a new code cell and run it:

                        <pre id="codeBlock5" class="mt-0"><blockquote class="language-python hljs">preferredProductReviews = (preferredProductsFlat.join(productReviews,
    (preferredProductsFlat.userId == productReviews.userId) &amp;
    (preferredProductsFlat.productId == productReviews.productId))
)

display(preferredProductReviews.limit(<span class="hljs-number"><span class="hljs-number">100</span></span>))
</blockquote></pre>

                        <blockquote>
                            <strong>Note</strong>: You can click on the column headers in the Table view to sort the result set.
                        </blockquote>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/cell7.png" alt="Cell output." title="Cell 7 results"><br><br>
                    </li>
                    <li>
                        At the top right of the notebook, use the <strong>Stop Session</strong> button to stop the notebook session. Then close the notebook, discarding the changes.
                    </li>
                </ol>

                <h3 id="exercise-3---querying-azure-cosmos-db-with-serverless-sql-pool-for-azure-synapse-analytics">Exercise 3 - Querying Azure Cosmos DB with serverless SQL pool for Azure Synapse Analytics</h3>

                Tailwind Traders wants to explore the Azure Cosmos DB analytical store with T-SQL. Ideally, they can create views that can then be used for joins with other analytical store containers, files from the data lake, or accessed by external tools, like Power BI.

                <h3 id="task-1-create-a-new-sql-script">Task 1: Create a new SQL script</h3>

                <ol>
                    <li>
                        Navigate to the <strong>Develop</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/develop-hub.png" alt="Develop hub." title="Develop hub"><br><br>
                    </li>
                    <li>
                        In the <strong>+</strong> menu, select <strong>SQL script</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-script.png" alt="The SQL script button is highlighted." title="SQL script"><br><br>
                    </li>
                    <li>
                        When the script opens, in the <strong>Properties</strong> pane to the right, change the <strong>Name</strong> to <code>User Profile HTAP</code>. Then use the <strong>Properties</strong> button to close the pane.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-script-properties.png" alt="The properties pane is displayed." title="Properties"><br><br>
                    </li>
                    <li>
                        Verify that the serverless SQL pool (<strong>Built-in</strong>) is selected.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/built-in-htap.png" alt="The serverless SQL pool is selected." title="Built-in"><br><br>
                    </li>
                    <li>
                        Paste the following SQL query. In the OPENROWSET statement, replace <strong>YOUR_ACCOUNT_NAME</strong> with the Azure Cosmos DB account name and <strong>YOUR_ACCOUNT_KEY</strong> with the Azure Cosmos DB Primary Key from the <strong>Keys</strong> page in the Azure portal (which should still be open in another tab).

                        <pre id="codeBlock6" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">USE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">master</span></span>
 <span class="hljs-keyword"><span class="hljs-keyword">GO</span></span>

 <span class="hljs-keyword"><span class="hljs-keyword">IF</span></span> DB_ID (N<span class="hljs-string"><span class="hljs-string">'Profiles'</span></span>) <span class="hljs-keyword"><span class="hljs-keyword">IS</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>
 <span class="hljs-keyword"><span class="hljs-keyword">BEGIN</span></span>
     <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">DATABASE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">Profiles</span></span>;
 <span class="hljs-keyword"><span class="hljs-keyword">END</span></span>
 <span class="hljs-keyword"><span class="hljs-keyword">GO</span></span>

 <span class="hljs-keyword"><span class="hljs-keyword">USE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">Profiles</span></span>
 <span class="hljs-keyword"><span class="hljs-keyword">GO</span></span>

 <span class="hljs-keyword"><span class="hljs-keyword">DROP</span></span> <span class="hljs-keyword"><span class="hljs-keyword">VIEW</span></span> <span class="hljs-keyword"><span class="hljs-keyword">IF</span></span> <span class="hljs-keyword"><span class="hljs-keyword">EXISTS</span></span> UserProfileHTAP;
 GO

 <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">VIEW</span></span> UserProfileHTAP
 <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span>
 <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span>
     *
 <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> OPENROWSET(
     <span class="hljs-string"><span class="hljs-string">'CosmosDB'</span></span>,
     N<span class="hljs-string"><span class="hljs-string">'account=YOUR_ACCOUNT_NAME;database=CustomerProfile;key=YOUR_ACCOUNT_KEY'</span></span>,
     UserProfileHTAP
 )
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span> (
     userId <span class="hljs-built_in"><span class="hljs-built_in">bigint</span></span>,
     cartId <span class="hljs-built_in"><span class="hljs-built_in">varchar</span></span>(<span class="hljs-number"><span class="hljs-number">50</span></span>),
     preferredProducts <span class="hljs-built_in"><span class="hljs-built_in">varchar</span></span>(<span class="hljs-keyword"><span class="hljs-keyword">max</span></span>),
     productReviews <span class="hljs-built_in"><span class="hljs-built_in">varchar</span></span>(<span class="hljs-keyword"><span class="hljs-keyword">max</span></span>)
 ) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> <span class="hljs-keyword"><span class="hljs-keyword">profiles</span></span>
 <span class="hljs-keyword"><span class="hljs-keyword">CROSS</span></span> <span class="hljs-keyword"><span class="hljs-keyword">APPLY</span></span> OPENJSON (productReviews)
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span> (
     productId <span class="hljs-built_in"><span class="hljs-built_in">bigint</span></span>,
     reviewText <span class="hljs-built_in"><span class="hljs-built_in">varchar</span></span>(<span class="hljs-number"><span class="hljs-number">1000</span></span>)
 ) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> reviews
 <span class="hljs-keyword"><span class="hljs-keyword">GO</span></span>
</blockquote></pre>
                    </li>
                    <li>Use the <strong>Run</strong> button to run the query, which:
                        <ul>
                            <li>Creates a new serverless SQL pool database named <strong>Profiles</strong> if it does not exist</li>
                            <li>Changes the database context to the <strong>Profiles</strong> database.</li>
                            <li>Drops the <strong>UserProfileHTAP</strong> view if it exists.</li>
                            <li>Creates a SQL view named <strong>UserProfileHTAP</strong>.</li>
                            <li>Uses the OPENROWSET statement to set the data source type to <strong>CosmosDB</strong>, sets the account details, and specifies that we want to create the view over the Azure Cosmos DB analytical store container named <strong>UserProfileHTAP</strong>.</li>
                            <li>Matches the property names in the JSON documents and applies the appropriate SQL data types. Notice that we set the <strong>preferredProducts</strong> and <strong>productReviews</strong> fields to <strong>varchar(max)</strong>. This is because both of these properties contain JSON-formatted data within.</li>
                            <li>Since the <strong>productReviews</strong> property in the JSON documents contain nested subarrays, the script needs to “join” the properties from the document with all elements of the array. Synapse SQL enables us to flatten the nested structure by applying the OPENJSON function on the nested array. We flatten the values within <strong>productReviews</strong> like we did using the Python <strong>explode</strong> function earlier in the Synapse Notebook.</li>
                        </ul>
                    </li>
                    <li>
                        Navigate to the <strong>Data</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub.png" alt="Data hub." title="Data hub"><br><br>
                    </li>
                    <li>
                        Select the <strong>Workspace</strong> tab and expand the <strong>SQL database</strong> group. Expand the <strong>Profiles</strong> SQL on-demand database (if you do not see this on the list, refresh the <strong>Databases</strong> list). Expand <strong>Views</strong>, then right-click the <strong>UserProfileHTA</strong> view, select <strong>New SQL script</strong>, and then <strong>Select TOP 100 rows</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-select-query.png" alt="The select top 100 rows query option is highlighted." title="New select query"><br><br>
                    </li>
                    <li>
                        Ensure the script is connected to the <strong>Built-in</strong> SQL pool, then run the query and view the results.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/select-htap-view.png" alt="The view results are displayed." title="Select HTAP view"><br><br>

                        The <strong>preferredProducts</strong> and <strong>productReviews</strong> fields are included in the view, which both contain JSON-formatted values. Notice how the CROSS APPLY OPENJSON statement in the view successfully flattened the nested subarray values in the <strong>productReviews</strong> field by extracting the <strong>productId</strong> and <strong>reviewText</strong> values into new fields.
                    </li>
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