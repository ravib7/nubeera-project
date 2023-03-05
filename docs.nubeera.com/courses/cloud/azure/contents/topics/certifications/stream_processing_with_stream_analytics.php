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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 10 - Real-time stream processing with Stream Analytics</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Certifications</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                In this lab, you will learn how to process streaming data with Azure Stream Analytics. You will ingest vehicle telemetry data into Event Hubs, then process that data in real time, using various windowing functions in Azure Stream Analytics. They will output the data to Azure Synapse Analytics. Finally, you will learn how to scale the Stream Analytics job to increase throughput. <br><br>

                After completing this lab, you will be able to:

                <ul>
                    <li>Use Stream Analytics to process real-time data from Event Hubs</li>
                    <li>Use Stream Analytics windowing functions to build aggregates and output to Synapse Analytics</li>
                    <li>Scale the Azure Stream Analytics job to increase throughput through partitioning</li>
                    <li>Repartition the stream input to optimize parallelization</li>
                </ul>

                <h3 id="technology-overview">Technology overview</h3>

                <h3 id="azure-stream-analytics">Azure Stream Analytics</h3>

                As more and more data is generated from a variety of connected devices and sensors, transforming this data into actionable insights and predictions in near real-time is now an operational necessity. Azure Stream Analytics seamlessly integrates with your real-time application architecture to enable powerful, real-time analytics on your data no matter what the volume. <br><br>

                Azure Stream Analytics enables you to develop massively parallel Complex Event Processing (CEP) pipelines with simplicity. It allows you to author powerful, real-time analytics solutions using very simple, declarative SQL like language with embedded support for temporal logic. Extensive array of out-of-the-box connectors, advanced debugging and job monitoring capabilities help keep costs down by significantly lowering the developer skills required. Additionally, Azure Stream Analytics is highly extensible through support for custom code with JavaScript User Defined functions further extending the streaming logic written in SQL.<br><br>

                Getting started in seconds is easy with Azure Stream Analytics as there is no infrastructure to worry about, and no servers, virtual machines, or clusters to manage. You can instantly scale-out the processing power from one to hundreds of streaming units for any job. You only pay for the processing used per job.<br><br>

                Guaranteed event delivery and an enterprise grade SLA, provide the three 9’s of availability, making sure that Azure Stream Analytics is suitable for mission critical workloads. Automated checkpoints enable fault tolerant operation with fast restarts with no data loss.

                <h3 id="azure-event-hubs">Azure Event Hubs</h3>

                Azure Event Hubs is a big data pipeline that can ingest millions of events per second. It facilitates the capture, retention, and replay of telemetry and event stream data, using standard protocols such as HTTPS, AMQP, AMQP over websockets, and Kafka. The data can come from many concurrent sources and up to 20 consumer groups can allow applications to read entire event hub independently at their own pace.

                <h3 id="scenario-overview">Scenario overview</h3>

                Contoso Auto is collecting vehicle telemetry and wants to use Event Hubs to rapidly ingest and store the data in its raw form, then do some processing in near real-time. In the end, they want to create a dashboard that automatically updates with new data as it flows in after being processed. What they would like to see on the dashboard are various visualizations of detected anomalies, like engines overheating, abnormal oil pressure, and aggressive driving, using components such as a map to show anomalies related to cities, as well as various charts and graphs depicting this information in a clear way. <br><br>

                In this experience, you will use Azure Event Hubs to ingest streaming vehicle telemetry data as the entry point to a near real-time analytics pipeline built on Event Hubs, Azure Stream Analytics, and Azure Synapse Analytics. Azure Stream Analytics extracts the vehicle sensor data from Event Hubs, performs aggregations over windows of time, then sends the aggregated data to Azure Synapse Analytics for data analysis. A vehicle telemetry data generator will be used to send vehicle telemetry data to Event Hubs.

                <h3 id="lab-setup-and-pre-requisites">Lab setup and pre-requisites</h3>

                Before starting this lab, you must complete at least the setup steps in <strong>Lab 4: <em>Explore, transform, and load data into the Data Warehouse using Apache Spark</em></strong>. <br><br>

                This lab uses the dedicated SQL pool you created in the previous lab. You should have paused the SQL pool at the end of the previous lab, so resume it by following these instructions:

                <ol>
                    <li>Open Azure Synapse Studio (<a href="https://web.azuresynapse.net/">https://web.azuresynapse.net/</a>).</li>
                    <li>Select the <strong>Manage</strong> hub.</li>
                    <li>
                        Select <strong>SQL pools</strong> in the left-hand menu. If the <strong>SQLPool01</strong> dedicated SQL pool is paused, hover over its name and select <strong>▷</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/resume-dedicated-sql-pool.png" alt="The resume button is highlighted on the dedicated SQL pool." title="Resume"><br><br>
                    </li>
                    <li>When prompted, select <strong>Resume</strong>. It will take a minute or two to resume the pool.</li>
                    <li>Continue to the next exercise while the dedicated SQL pool resumes.</li>
                </ol>

                <blockquote>
                    <strong>Important:</strong> Once started, a dedicated SQL pool consumes credits in your Azure subscription until it is paused. If you take a break from this lab, or decide not to complete it; follow the instructions at the end of the lab to pause your SQL pool!
                </blockquote>

                <h3 id="exercise-1---configure-services">Exercise 1 - Configure services</h3>

                Azure Event Hubs is a Big Data streaming platform and event ingestion service, capable of receiving and processing millions of events per second. We are using it to temporarily store vehicle telemetry data that is processed and ready to be sent to the real-time dashboard. As data flows into Event Hubs, Azure Stream Analytics will query the data, applying aggregates and tagging anomalies, then send it to Azure Synapse Analytics.

                <h3 id="task-1-configure-event-hubs">Task 1: Configure Event Hubs</h3>

                In this task, you will create and configure a new event hub within the provided Event Hubs namespace. This will be used to capture vehicle telemetry after it has been processed and enriched by the Azure function you will create later on.

                <ol>
                    <li>
                        Browse to the <a href="https://portal.azure.com">Azure portal</a>.
                    </li>
                    <li>
                        Select <strong>Resource groups</strong> in the left-hand menu. Then select the <strong>data-engineering-synapse-<em>xxxxxxx</em></strong> resource group.
                    </li>
                    <li>
                        Select the <strong>eventhub<em>xxxxxxx</em></strong> Event Hubs Namespace.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/rg-event-hubs.png" alt="The Event Hubs Namespace is selected in the resource group." title="resource group"><br><br>
                    </li>
                    <li>
                        In the Event Hubs Namespace blade, select <strong>Event Hubs</strong> in the left-hand menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/event-hubs-link.png" alt="The Event Hubs link is selected in the left-hand menu." title="Event Hubs link"><br><br>
                    </li>
                    <li>
                        Select the <strong>telemetry</strong> event hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/event-hubs-select.png" alt="The newly created telemetry event hub is selected." title="Event hubs"><br><br>
                    </li>
                    <li>
                        Select <strong>Shared access policies</strong> in the left-hand menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/event-hubs-shared-access-policies-link.png" alt="The Shared access policies link is selected in the left-hand menu." title="Shared access policies link"><br><br>
                    </li>
                    <li>
                        Select <strong>+ Add</strong> in the top toolbar to create a new shared access policy.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/event-hubs-shared-access-policies-add-link.png" alt="The Add button is highlighted." title="Add"><br><br>
                    </li>
                    <li>
                        In the <strong>Add SAS Policy</strong> blade, configure the following:

                        <ul>
                            <li><strong>Name:</strong> <code>Read</code></li>
                            <li><strong>Managed:</strong> Unchecked</li>
                            <li><strong>Send:</strong> Unchecked</li>
                            <li>
                                <strong>Listen:</strong> Checked

                                <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/event-hubs-add-sas-policy-read.png" alt="The Add SAS Policy form is filled out with the previously mentioned settings entered into the appropriate fields." title="Add SAS Policy"><br><br>

                                <blockquote>
                                    It is a best practice to create separate policies for reading, writing, and managing events. This follows the principle of least privilege to prevent services and applications from performing unauthorized operations.
                                </blockquote>
                            </li>
                        </ul>
                    </li>
                    <li>
                        Select <strong>Create</strong> on the bottom of the form when you are finished entering the values.
                    </li>
                    <li>
                        Select <strong>+ Add</strong> in the top toolbar to create a second new shared access policy.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/event-hubs-shared-access-policies-add-link.png" alt="The Add button is highlighted." title="Add"><br><br>
                    </li>
                    <li>
                        In the <strong>Add SAS Policy</strong> blade, configure the following:

                        <ul>
                            <li><strong>Name:</strong> <code>Write</code></li>
                            <li><strong>Managed:</strong> Unchecked</li>
                            <li><strong>Send:</strong> Checked</li>
                            <li>
                                <strong>Listen:</strong> Unchecked

                                <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/event-hubs-add-sas-policy-write.png" alt="The Add SAS Policy form is filled out with the previously mentioned settings entered into the appropriate fields." title="Add SAS Policy"><br><br>
                            </li>
                        </ul>
                    </li>
                    <li>
                        Select <strong>Create</strong> on the bottom of the form when you are finished entering the values.
                    </li>
                    <li>
                        Select your <strong>Write</strong> policy from the list. Copy the <strong>Connection string - primary key</strong> value by selecting the Copy button to the right of the field. Save this value in Notepad or similar text editor for later.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/event-hubs-write-policy-key.png" alt="The Write policy is selected and its blade displayed. The Copy button next to the Connection string - primary key field is highlighted." title="SAS Policy: Write"><br><br>
                    </li>
                </ol>

                <h3 id="task-2-configure-synapse-analytics">Task 2: Configure Synapse Analytics</h3>

                Azure Synapse is an end-to-end analytics platform which combines SQL data warehousing, big data analytics, and data integration into a single integrated environment. It empowers users to gain quick access and insights across all of their data, enabling a whole new level of performance and scale that is simply unmatched in the industry. <br><br>

                In this task, you will create a table in a Synapse dedicated SQL pool to store aggregate vehicle data provided by a Stream Analytics job that processes vehicle telemetry ingested by Event Hubs.

                <ol>
                    <li>
                        In the Azure Synapse Studio, select the <strong>Data</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub.png" alt="The Data hub is highlighted." title="Data hub"><br><br>
                    </li>
                    <li>
                        Select the <strong>Workspace</strong> tab, expand the <strong>SQL database group</strong> and right-click <strong>SQLPool01</strong>. Then select <strong>New SQL script</strong>, and select <strong>Empty script</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/synapse-new-script.png" alt="The New SQL script option is highlighted in the SQLPool01 context menu." title="New SQL script"><br><br>
                    </li>
                    <li>
                        Make sure the script is connected to <strong>SQLPool01</strong>, then replace the script with the following and select <strong>Run</strong> to create a new table:

                        <pre id="codeBlock0" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">TABLE</span></span> dbo.VehicleAverages
 ( 
     [AverageEngineTemperature] [<span class="hljs-built_in"><span class="hljs-built_in">float</span></span>] <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span>  <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [AverageSpeed] [<span class="hljs-built_in"><span class="hljs-built_in">float</span></span>] <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span>  <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [<span class="hljs-keyword"><span class="hljs-keyword">Snapshot</span></span>] [datetime] <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span>  <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>
 )
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span>
 (
     DISTRIBUTION = ROUND_ROBIN,
     CLUSTERED COLUMNSTORE <span class="hljs-keyword"><span class="hljs-keyword">INDEX</span></span>
 )
 <span class="hljs-keyword"><span class="hljs-keyword">GO</span></span>
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/synapse-new-table-script.png" alt="The script is displayed." title="New table script"><br><br>
                    </li>
                </ol>

                <h3 id="task-3-configure-stream-analytics">Task 3: Configure Stream Analytics</h3>

                Azure Stream Analytics is an event-processing engine that allows you to examine high volumes of data streaming from devices. Incoming data can be from devices, sensors, web sites, social media feeds, applications, and more. It also supports extracting information from data streams, identifying patterns, and relationships. You can then use these patterns to trigger other actions downstream, such as create alerts, feed information to a reporting tool, or store it for later use. <br><br>

                In this task, you will configure Stream Analytics to use the event hub you created as a source, query and analyze that data.

                <ol>
                    <li>
                        In the Azure portal, in the <strong>data-engineering-synapse-<em>xxxxxxx</em></strong> resource group, select the <strong>as<em>xxxxxxx</em></strong> Stream Analytics job.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/rg-stream-analytics.png" alt="The Stream Analytics job is selected in the resource group." title="resource group"><br><br>
                    </li>
                    <li>
                        Within the Stream Analytics job, select <strong>Storage account settings</strong> in the left-hand menu, then select <strong>Add storage account</strong>. Since we will use Synapse Analytics as one of the outputs, we need to first configure the job storage account.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/asa-storage-account.png" alt="The storage account settings link and add storage account button are highlighted." title="Storage account settings"><br><br>
                    </li>
                    <li>
                        In the <strong>Storage account settings</strong> form, configure the following:

                        <ul>
                            <li><strong>Select storage account from your subscriptions:</strong> Selected.</li>
                            <li><strong>Subscription:</strong> Make sure the subscription you are using for this lab is selected.</li>
                            <li><strong>Storage account:</strong> Select the storage account named <strong>asadatalake<em>xxxxxxx</em></strong>.</li>
                            <li>
                                <strong>Authentication mode:</strong> Select “Connection string”.

                                <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/asa-storage-account-form.png" alt="The form is configured as described." title="Storage account settings"><br><br>
                            </li>
                        </ul>
                    </li>
                    <li>
                        Select <strong>Save</strong>, then <strong>Yes</strong> when prompted to save the storage account settings.
                    </li>
                    <li>
                        Within the Stream Analytics job, select <strong>Inputs</strong> within the left-hand menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/inputs-link.png" alt="The Inputs link is selected in the left-hand menu." title="Inputs link"><br><br>
                    </li>
                    <li>
                        Select <strong>+ Add stream input</strong> in the top toolbar, then select <strong>Event Hub</strong> to create a new Event Hub input.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/stream-analytics-add-input-link.png" alt="The Add stream input button and Event Hub menu item are highlighted." title="Add stream input - Event Hub"><br><br>
                    </li>
                    <li>
                        In the <strong>New Input</strong> blade, configure the following:

                        <ul>
                            <li><strong>Name:</strong> <code>eventhub</code></li>
                            <li><strong>Select Event Hub from your subscriptions:</strong> Selected</li>
                            <li><strong>Subscription:</strong> Make sure the subscription you are using for this lab is selected.</li>
                            <li><strong>Event Hub namespace:</strong> Select the <strong>eventhub<em>xxxxxxx</em></strong> Event Hub namespace.</li>
                            <li><strong>Event Hub name:</strong> Select <strong>Use existing</strong>, then select <strong>telemetry</strong>, which you created earlier.</li>
                            <li><strong>Event Hub consumer group:</strong> Select <strong>Use existing</strong>, then select <strong>$Default</strong>.</li>
                            <li><strong>Authentication mode:</strong> Select <strong>Connection string</strong>.</li>
                            <li><strong>Event Hub policy name:</strong> Select <strong>Use existing</strong>, then select <strong>Read</strong>.</li>
                            <li>
                                Leave all other values at their defaults.

                                <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/stream-analytics-new-input.png" alt="The New Input form is filled out with the previously mentioned settings entered into the appropriate fields." title="New Input"><br><br>
                            </li>
                        </ul>
                    </li>
                    <li>
                        Select <strong>Save</strong> on the bottom of the form when you are finished entering the values.
                    </li>
                    <li>
                        Within the Stream Analytics job blade, select <strong>Outputs</strong> within the left-hand menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/outputs-link.png" alt="The Outputs link is selected in the left-hand menu." title="Outputs link"><br><br>
                    </li>
                    <li>
                        Select <strong>+ Add</strong> in the top toolbar, then select <strong>Azure Synapse Analytics</strong> to create a new Synapse Analytics output.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/stream-analytics-add-output-synapse-link.png" alt="The Azure Synapse Analytics menu item is highlighted." title="Add output - Azure Synapse Analytics"><br><br>
                    </li>
                    <li>
                        In the <strong>New Output</strong> blade, configure the following:

                        <ul>
                            <li><strong>Output alias:</strong> <code>synapse</code></li>
                            <li><strong>Select Azure Synapse Analytics from your subscriptions:</strong> Selected.</li>
                            <li><strong>Subscription:</strong> Select the subscription you are using for this lab.</li>
                            <li><strong>Database:</strong> Select <strong>SQLPool01</strong>. Make sure your correct Synapse workspace name appears under <strong>Server name</strong>.</li>
                            <li><strong>Authentication mode:</strong> Select <strong>Connection string</strong>.</li>
                            <li><strong>Username:</strong>: <code>asa.sql.admin</code></li>
                            <li><strong>Password:</strong> Enter the SQL admin password value you entered when deploying the lab environment, or which was provided to you as part of your hosted lab environment. If you are unsure about your SQL admin username, navigate to the Synapse workspace in the Azure resource group. The SQL admin username is shown in the Overview pane.</li>
                            <li><strong>Server name</strong>: asaworkspace<em>xxxxxxx</em></li>
                            <li>
                                <strong>Table:</strong> <code>dbo.VehicleAverages</code>

                                <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/synapse-new-output.png" alt="The New Output form is filled out with the previously mentioned settings entered into the appropriate fields." title="New Output"><br><br>

                                <blockquote>
                                    <strong>Note:</strong> If you are unsure about your SQL admin username, navigate to the Synapse workspace in the Azure resource group. The SQL admin username is shown in the Overview pane.
                                </blockquote>

                                <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sql-admin-name.png" alt="The SQL admin account name is displayed." title="SQL admin name"><br><br>
                            </li>
                        </ul>
                    </li>
                    <li>
                        Select <strong>Save</strong> on the bottom of the form when you are finished entering the values.
                    </li>
                    <li>
                        Within the Stream Analytics job blade, select <strong>Query</strong> within the left-hand menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/query-link.png" alt="The Query link is selected in the left-hand menu." title="Query link"><br><br>
                    </li>
                    <li>
                        Enter the following query:

                        <pre id="codeBlock1" class="mt-0"><blockquote class="language-sql hljs">WITH
VehicleAverages AS (
    <span class="hljs-keyword"><span class="hljs-keyword">select</span></span>
        <span class="hljs-keyword"><span class="hljs-keyword">AVG</span></span>(engineTemperature) averageEngineTemperature,
        <span class="hljs-keyword"><span class="hljs-keyword">AVG</span></span>(speed) averageSpeed,
        System.TimeStamp() <span class="hljs-keyword"><span class="hljs-keyword">as</span></span> <span class="hljs-keyword"><span class="hljs-keyword">snapshot</span></span>
    <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span>
        eventhub <span class="hljs-keyword"><span class="hljs-keyword">TIMESTAMP</span></span> <span class="hljs-keyword"><span class="hljs-keyword">BY</span></span> [<span class="hljs-keyword"><span class="hljs-keyword">timestamp</span></span>]
    <span class="hljs-keyword"><span class="hljs-keyword">GROUP</span></span> <span class="hljs-keyword"><span class="hljs-keyword">BY</span></span>
        TumblingWindow(<span class="hljs-keyword"><span class="hljs-keyword">Duration</span></span>(<span class="hljs-keyword"><span class="hljs-keyword">minute</span></span>, <span class="hljs-number"><span class="hljs-number">2</span></span>))
)
<span class="hljs-comment"><span class="hljs-comment">-- INSERT INTO SYNAPSE ANALYTICS</span></span>
<span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span>
    *
<span class="hljs-keyword"><span class="hljs-keyword">INTO</span></span>
    synapse
<span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span>
    VehicleAverages
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/stream-analytics-query.png" alt="The query above has been inserted into the Query window." title="Query window"><br><br>

                        The query averages the engine temperature and speed over a two second duration. The query aggregates the average engine temperature and speed of all vehicles over the past two minutes, using <strong>TumblingWindow(Duration(minute, 2))</strong>, and outputs these fields to the <strong>synapse</strong> output.
                    </li>
                    <li>
                        Select <strong>Save query</strong> in the top toolbar when you are finished updating the query.
                    </li>
                    <li>
                        Within the Stream Analytics job blade, select <strong>Overview</strong> within the left-hand menu. On top of the Overview blade, select <strong>Start</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/stream-analytics-overview-start-button.png" alt="The Start button is highlighted on top of the Overview blade." title="Overview"><br><br>
                    </li>
                    <li>
                        In the Start job blade that appears, select <strong>Now</strong> for the job output start time, then select <strong>Start</strong>. This will start the Stream Analytics job so it will be ready to start processing and sending your events to Azure Synapse Analytics.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/stream-analytics-start-job.png" alt="The Now and Start buttons are highlighted within the Start job blade." title="Start job"><br><br>
                    </li>
                </ol>

                <h3 id="exercise-2---generate-and-aggregate-data">Exercise 2 - Generate and aggregate data</h3>

                <h3 id="task-1-run-data-generator">Task 1: Run data generator</h3>

                The data generator console application creates and sends simulated vehicle sensor telemetry for an array of vehicles (denoted by VIN (vehicle identification number)) directly to Event Hubs. For this to happen, you first need to configure it with the Event Hub connection string. <br><br>

                In this task, you will configure and run the data generator. The data generator saves simulated vehicle telemetry data to Event Hubs, prompting your Stream Analytics job to aggregate and analyze the enriched data and send it to Synapse Analytics.

                <ol>
                    <li>On your lab VM, use Windows Explorer to view the <strong>c:\dp-203\data-engineering-ilt-deployment\Allfiles</strong> folder.</li>
                    <li>Extract the <strong>TransactionGenerator.zip</strong> archive to a subfolder named <strong>TransactionGenerator</strong>.</li>
                    <li>
                        In the extracted <strong>TransactionGenerator</strong> folder, open the <strong>appsettings.json</strong> file. Paste your <strong>telemetry</strong> Event Hub connection string value next to <strong>EVENT_HUB_CONNECTION_STRING</strong>. Make sure you have quotes (“”) around the value, as shown. <strong>Save</strong> the file.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/appsettings.png" alt="The Event Hub connection string is highlighted within the appsettings.json file." title="appsettings.json"><br><br>

                        <blockquote>
                            <strong>Note:</strong> Make sure that the connection string ends with <em>EntityPath=telemetry</em> (eg. <em>Endpoint=sb://YOUR_EVENTHUB_NAMESPACE.servicebus.windows.net/;SharedAccessKeyName=Write;SharedAccessKey=REDACTED/S/U=;EntityPath=telemetry</em>). If not, then you did not copy the connection string from the <strong>Write</strong> policy of your event hub.
                        </blockquote>

                        SECONDS_TO_LEAD is the amount of time to wait before sending vehicle telemetry data. Default value is 0. <br><br>

                        SECONDS_TO_RUN is the maximum amount of time to allow the generator to run before stopping transmission of data. The default value is 1800. Data will also stop transmitting when you enter Ctrl+C while the generator is running, or if you close the window.
                    </li>
                    <li>
                        In the extracted <strong>TransactionGenerator</strong> folder, run <strong>TransactionGenerator.exe</strong>.
                    </li>
                    <li>
                        If a <strong>Windows protected your PC</strong> dialog is displayed, select <strong>More info</strong>, then <strong>Run anyway</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/microsoft-defender-moreinfo.png" alt="More info is highlighted." title="Windows protected your PC"><br><br>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/microsoft-defender-runanyway.png" alt="The Run anyway button is highlighted." title="Run anyway"><br><br>
                    </li>
                    <li>
                        A new console window will open, and you should see it start to send data after a few seconds. Once you see that it is sending data to Event Hubs, <em>minimize</em> the window and keep it running in the background. Allow this to run for a mimimum of three minutes before moving onto the next step.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/transaction-generator.png" alt="Screenshot of the console window." title="Console window"><br><br>

                        After every 500 records are requested to be sent, you will see output statistics.
                    </li>
                </ol>

                <h3 id="task-2-view-aggregate-data-in-synapse-analytics">Task 2: View aggregate data in Synapse Analytics</h3>

                As you recall, when you created the query in Stream Analytics, you aggregated the engine temperature and vehicle speed data over two-minute intervals and saved the data to Synapse Analytics. This capability demonstrates the Stream Analytics query’s ability to write data to multiple outputs at varying intervals. Writing to a Synapse Analytics dedicated SQL pool enables us to retain the historic and current aggregate data as part of the data warehouse without requiring an ETL/ELT process. <br><br>

                In this task, you will view the anomaly data within Synapse Analytics.

                <ol>
                    <li>
                        In Synapse Studio, select <strong>Data</strong> in the left-hand menu to navigate to the Data hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub.png" alt="The Data hub is highlighted." title="Data hub"><br><br>
                    </li>
                    <li>
                        Select the <strong>Workspace</strong> tab, expand the <strong>SQLPool01</strong> database, expand <strong>Tables</strong>, then right-click on the <strong>dbo.VehicleAverages</strong> table (f you do not see the table listed, refresh the tables list). Select <strong>New SQL script</strong>, then <strong>Select TOP 100 rows</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/select-top-100-rows.png" alt="The Select TOP 100 rows menu item is selected." title="Select TOP 100 rows"><br><br>
                    </li>
                    <li>
                        Run the query and view the results. Observe the aggregate data stored in <strong>AverageEngineTemperature</strong> and <strong>AverageSpeed</strong>. The <strong>Snapshot</strong> value changes in two-minute intervals between these records.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/synapse-vehicleaverage-table.png" alt="The VehicleAverages table output is displayed." title="VehicleAverages results"><br><br>
                    </li>
                    <li>
                        Select the <strong>Chart</strong> view in the Results output, then set the chart type to <strong>Area</strong>. This visualization shows the average engine temperature correlated with the average speed over time. Feel free to experiment with the chart settings. The longer the data generator runs the more data points are generated. The following visualization is for an example of a session that ran over 10 mins, and may not represent what you see on the screen.
                    </li>
                </ol>

                <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/synapse-vehicleaverage-chart.png" alt="The chart view is displayed." title="VehicleAverages chart"><br><br>

                <h3 id="important-cleanup">Important: Cleanup</h3>

                Complete these steps to stop the data generator and free up resources you no longer need.

                <h3 id="task-1-stop-the-data-generator">Task 1: Stop the data generator</h3>

                <ol>
                    <li>Go back to the console/terminal window in which your data generator is running. Close the window to stop the generator.</li>
                </ol>

                <h3 id="task-2-stop-the-stream-analytics-job">Task 2: Stop the Stream Analytics job</h3>

                <ol>
                    <li>
                        Navigate to the Stream Analytics job in the Azure portal.
                    </li>
                    <li>
                        In the Overview pane, select <strong>Stop</strong>, then select <strong>Yes</strong> when prompted.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/asa-stop.png" alt="The stop button is highlighted." title="Stop"><br><br>
                    </li>
                </ol>

                <h3 id="task-3-pause-the-dedicated-sql-pool">Task 3: Pause the dedicated SQL pool</h3>

                Complete these steps to free up resources you no longer need.

                <ol>
                    <li>In Synapse Studio, select the <strong>Manage</strong> hub.</li>
                    <li>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Select <strong>SQL pools</strong> in the left-hand menu. Hover over the <strong>SQLPool01</strong> dedicated SQL pool and select **</td>
                                    <td>&nbsp;</td>
                                    <td>**.</td>
                                </tr>
                            </tbody>
                        </table>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pause-dedicated-sql-pool.png" alt="The pause button is highlighted on the dedicated SQL pool." title="Pause"><br><br>
                    </li>
                    <li>When prompted, select <strong>Pause</strong>.</li>
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