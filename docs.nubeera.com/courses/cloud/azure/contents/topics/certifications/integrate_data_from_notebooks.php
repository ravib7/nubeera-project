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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 7 - Integrate data from notebooks with Azure Data Factory or Azure Synapse Pipelines</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Certifications</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                You will learn how to create linked services, and orchestrate data movement and transformation in Azure Synapse Pipelines.

                After completing this lab, you will be able to:

                <ul>
                    <li>Orchestrate data movement and transformation in Azure Synapse Pipelines</li>
                </ul>

                <h3 id="lab-setup-and-pre-requisites">Lab setup and pre-requisites</h3>

                Before starting this lab, you should complete <strong>Lab 6: <em>Transform data with Azure Data Factory or Azure Synapse Pipelines</em></strong>.

                <blockquote>
                    <strong>Note</strong>: If you have <strong><em>not</em></strong> completed lab 6, but you <u>have</u> completed the lab setup for this course, you can complete these steps to create the required linked services and datasets.

                    <ol>
                        <li>In Synapse Studio, on the <strong>Manage</strong> hub, add a new <strong>Linked service</strong> for <strong>Azure Cosmos DB (SQL API)</strong> with the following settings:
                            <ul>
                                <li>
                                    <strong>Name</strong>: asacosmosdb01
                                </li>
                                <li>
                                    <strong>Cosmos DB account name</strong>: asacosmosdb<em>xxxxxxx</em>
                                </li>
                                <li>
                                    <strong>Database name</strong>: CustomerProfile
                                </li>
                            </ul>
                        </li>
                        <li>On the <strong>Data</strong> hub, create the following <strong>Integration datasets</strong>:
                            <ul>
                                <li>asal400_customerprofile_cosmosdb:
                                    <ul>
                                        <li>
                                            <strong>Source</strong>: Azure Cosmos DB (SQL API)
                                        </li>
                                        <li>
                                            <strong>Name</strong>: asal400_customerprofile_cosmosdb
                                        </li>
                                        <li>
                                            <strong>Linked service</strong>: asacosmosdb01
                                        </li>
                                        <li>
                                            <strong>Collection</strong>: OnlineUserProfile01
                                        </li>
                                    </ul>
                                </li>
                                <li>asal400_ecommerce_userprofiles_source
                                    <ul>
                                        <li>
                                            <strong>Source</strong>: Azure Data Lake Storage Gen2
                                        </li>
                                        <li>
                                            <strong>Format</strong>: JSON
                                        </li>
                                        <li>
                                            <strong>Name</strong>: asal400_ecommerce_userprofiles_source
                                        </li>
                                        <li>
                                            <strong>Linked service</strong>: asadatalake<em>xxxxxxx</em>
                                        </li>
                                        <li>
                                            <strong>File path</strong>: wwi-02/online-user-profiles-02
                                        </li>
                                        <li>
                                            <strong>Import schema</strong>: From connection/store
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ol>
                </blockquote>

                <h3 id="exercise-1---create-mapping-data-flow-and-pipeline">Exercise 1 - Create mapping data flow and pipeline</h3>

                In this exercise, you create a mapping data flow that copies user profile data to the data lake, then create a pipeline that orchestrates executing the data flow, and later on, the Spark notebook you create later in this lab.

                <h3 id="task-1-create-mapping-data-flow">Task 1: Create mapping data flow</h3>

                <ol>
                    <li>Open Synapse Studio (<a href="https://web.azuresynapse.net/">https://web.azuresynapse.net/</a>).</li>
                    <li>
                        Navigate to the <strong>Develop</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/develop-hub.png" alt="The Develop menu item is highlighted." title="Develop hub"><br><br>
                    </li>
                    <li>
                        In the <strong>+</strong> menu, select <strong>Data flow</strong> to create a new data flow.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-data-flow-link.png" alt="The new data flow link is highlighted." title="New data flow"><br><br>
                    </li>
                    <li>
                        In the <strong>General</strong> settings of the <strong>Properties</strong> blade of the new data flow, update the <strong>Name</strong> to <code>user_profiles_to_datalake</code>. Make sure the name exactly matches exactly.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-name.png" alt="The name field is populated with the defined value." title="Name"><br><br>
                    </li>
                    <li>
                        Select the <strong>{} Code</strong> button at the top-right above the data flow properties.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-code-button.png" alt="The code button is highlighted." title="Code"><br><br>
                    </li>
                    <li>
                        Replace the existing code with the following, changing <strong><em>SUFFIX</em></strong> in the <strong>asadatalake<em>SUFFIX</em></strong> sink reference name on line 25 to the unique suffix for your Azure resources in this lab:

                        <pre id="codeBlock0" class="mt-0"><blockquote class="hljs json"> {
     <span class="hljs-attr"><span class="hljs-attr">"name"</span></span>: <span class="hljs-string"><span class="hljs-string">"user_profiles_to_datalake"</span></span>,
     <span class="hljs-attr"><span class="hljs-attr">"properties"</span></span>: {
         <span class="hljs-attr"><span class="hljs-attr">"type"</span></span>: <span class="hljs-string"><span class="hljs-string">"MappingDataFlow"</span></span>,
         <span class="hljs-attr"><span class="hljs-attr">"typeProperties"</span></span>: {
             <span class="hljs-attr"><span class="hljs-attr">"sources"</span></span>: [
                 {
                     <span class="hljs-attr"><span class="hljs-attr">"dataset"</span></span>: {
                         <span class="hljs-attr"><span class="hljs-attr">"referenceName"</span></span>: <span class="hljs-string"><span class="hljs-string">"asal400_ecommerce_userprofiles_source"</span></span>,
                         <span class="hljs-attr"><span class="hljs-attr">"type"</span></span>: <span class="hljs-string"><span class="hljs-string">"DatasetReference"</span></span>
                     },
                     <span class="hljs-attr"><span class="hljs-attr">"name"</span></span>: <span class="hljs-string"><span class="hljs-string">"EcommerceUserProfiles"</span></span>
                 },
                 {
                     <span class="hljs-attr"><span class="hljs-attr">"dataset"</span></span>: {
                         <span class="hljs-attr"><span class="hljs-attr">"referenceName"</span></span>: <span class="hljs-string"><span class="hljs-string">"asal400_customerprofile_cosmosdb"</span></span>,
                         <span class="hljs-attr"><span class="hljs-attr">"type"</span></span>: <span class="hljs-string"><span class="hljs-string">"DatasetReference"</span></span>
                     },
                     <span class="hljs-attr"><span class="hljs-attr">"name"</span></span>: <span class="hljs-string"><span class="hljs-string">"UserProfiles"</span></span>
                 }
             ],
             <span class="hljs-attr"><span class="hljs-attr">"sinks"</span></span>: [
                 {
                     <span class="hljs-attr"><span class="hljs-attr">"linkedService"</span></span>: {
                         <span class="hljs-attr"><span class="hljs-attr">"referenceName"</span></span>: <span class="hljs-string"><span class="hljs-string">"asadatalakeSUFFIX"</span></span>,
                         <span class="hljs-attr"><span class="hljs-attr">"type"</span></span>: <span class="hljs-string"><span class="hljs-string">"LinkedServiceReference"</span></span>
                     },
                     <span class="hljs-attr"><span class="hljs-attr">"name"</span></span>: <span class="hljs-string"><span class="hljs-string">"DataLake"</span></span>
                 }
             ],
             <span class="hljs-attr"><span class="hljs-attr">"transformations"</span></span>: [
                 {
                     <span class="hljs-attr"><span class="hljs-attr">"name"</span></span>: <span class="hljs-string"><span class="hljs-string">"userId"</span></span>
                 },
                 {
                     <span class="hljs-attr"><span class="hljs-attr">"name"</span></span>: <span class="hljs-string"><span class="hljs-string">"UserTopProducts"</span></span>
                 },
                 {
                     <span class="hljs-attr"><span class="hljs-attr">"name"</span></span>: <span class="hljs-string"><span class="hljs-string">"DerivedProductColumns"</span></span>
                 },
                 {
                     <span class="hljs-attr"><span class="hljs-attr">"name"</span></span>: <span class="hljs-string"><span class="hljs-string">"UserPreferredProducts"</span></span>
                 },
                 {
                     <span class="hljs-attr"><span class="hljs-attr">"name"</span></span>: <span class="hljs-string"><span class="hljs-string">"JoinTopProductsWithPreferredProducts"</span></span>
                 },
                 {
                     <span class="hljs-attr"><span class="hljs-attr">"name"</span></span>: <span class="hljs-string"><span class="hljs-string">"DerivedColumnsForMerge"</span></span>
                 },
                 {
                     <span class="hljs-attr"><span class="hljs-attr">"name"</span></span>: <span class="hljs-string"><span class="hljs-string">"Filter1"</span></span>
                 }
             ],
             <span class="hljs-attr"><span class="hljs-attr">"script"</span></span>: <span class="hljs-string"><span class="hljs-string">"source(output(\n\t\tvisitorId as string,\n\t\ttopProductPurchases as (productId as string, itemsPurchasedLast12Months as string)[]\n\t),\n\tallowSchemaDrift: true,\n\tvalidateSchema: false,\n\tignoreNoFilesFound: false,\n\tdocumentForm: 'arrayOfDocuments',\n\twildcardPaths:['online-user-profiles-02/*.json']) ~&gt; EcommerceUserProfiles\nsource(output(\n\t\tcartId as string,\n\t\tpreferredProducts as integer[],\n\t\tproductReviews as (productId as integer, reviewDate as string, reviewText as string)[],\n\t\tuserId as integer\n\t),\n\tallowSchemaDrift: true,\n\tvalidateSchema: false,\n\tformat: 'document') ~&gt; UserProfiles\nEcommerceUserProfiles derive(visitorId = toInteger(visitorId)) ~&gt; userId\nuserId foldDown(unroll(topProductPurchases),\n\tmapColumn(\n\t\tvisitorId,\n\t\tproductId = topProductPurchases.productId,\n\t\titemsPurchasedLast12Months = topProductPurchases.itemsPurchasedLast12Months\n\t),\n\tskipDuplicateMapInputs: false,\n\tskipDuplicateMapOutputs: false) ~&gt; UserTopProducts\nUserTopProducts derive(productId = toInteger(productId),\n\t\titemsPurchasedLast12Months = toInteger(itemsPurchasedLast12Months)) ~&gt; DerivedProductColumns\nUserProfiles foldDown(unroll(preferredProducts),\n\tmapColumn(\n\t\tpreferredProductId = preferredProducts,\n\t\tuserId\n\t),\n\tskipDuplicateMapInputs: false,\n\tskipDuplicateMapOutputs: false) ~&gt; UserPreferredProducts\nDerivedProductColumns, UserPreferredProducts join(visitorId == userId,\n\tjoinType:'outer',\n\tpartitionBy('hash', 30,\n\t\tproductId\n\t),\n\tbroadcast: 'left')~&gt; JoinTopProductsWithPreferredProducts\nJoinTopProductsWithPreferredProducts derive(isTopProduct = toBoolean(iif(isNull(productId), 'false', 'true')),\n\t\tisPreferredProduct = toBoolean(iif(isNull(preferredProductId), 'false', 'true')),\n\t\tproductId = iif(isNull(productId), preferredProductId, productId),\n\t\tuserId = iif(isNull(userId), visitorId, userId)) ~&gt; DerivedColumnsForMerge\nDerivedColumnsForMerge filter(!isNull(productId)) ~&gt; Filter1\nFilter1 sink(allowSchemaDrift: true,\n\tvalidateSchema: false,\n\tformat: 'delta',\n\tcompressionType: 'snappy',\n\tcompressionLevel: 'Fastest',\n\tfileSystem: 'wwi-02',\n\tfolderPath: 'top-products',\n\ttruncate:true,\n\tmergeSchema: false,\n\tautoCompact: false,\n\toptimizedWrite: false,\n\tvacuum: 0,\n\tdeletable:false,\n\tinsertable:true,\n\tupdateable:false,\n\tupsertable:false,\n\tmapColumn(\n\t\tvisitorId,\n\t\tproductId,\n\t\titemsPurchasedLast12Months,\n\t\tpreferredProductId,\n\t\tuserId,\n\t\tisTopProduct,\n\t\tisPreferredProduct\n\t),\n\tskipDuplicateMapInputs: true,\n\tskipDuplicateMapOutputs: true) ~&gt; DataLake"</span></span>
         }
     }
 }
</blockquote></pre>
                    </li>
                    <li>
                        Select <strong>OK</strong>.
                    </li>
                    <li>
                        The data flow should look like the following:

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/user-profiles-data-flow.png" alt="The completed data flow is displayed." title="Completed data flow"><br><br>
                    </li>
                </ol>

                <h3 id="task-2-create-pipeline">Task 2: Create pipeline</h3>

                In this step, you create a new integration pipeline to execute the data flow.

                <ol>
                    <li>
                        On the <strong>Integrate</strong> hub, in the <strong>+</strong> menu, select <strong>Pipeline</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-pipeline.png" alt="The new pipeline menu item is highlighted." title="New pipeline"><br><br>
                    </li>
                    <li>
                        In the <strong>General</strong> section of the <strong>Properties</strong> pane of the new data flow, update the <strong>Name</strong> to <code>User Profiles to Datalake</code>. Then select the <strong>Properties</strong> button to hide the pane.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-user-profiles-general.png" alt="The name is displayed." title="General properties"><br><br>
                    </li>
                    <li>
                        Expand <strong>Move &amp; transform</strong> within the Activities list, then drag the <strong>Data flow</strong> activity onto the pipeline canvas.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-drag-data-flow.png" alt="Drag the data flow activity onto the pipeline canvas." title="Pipeline canvas"><br><br>
                    </li>
                    <li>
                        Under the <strong>General</strong> tab beneath the pipeline canvas, set the Name to <code>user_profiles_to_datalake</code>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-data-flow-general-datalake.png" alt="The name is set on the general tab as described." title="Name on the General tab"><br><br>
                    </li>
                    <li>
                        On the <strong>Settings</strong> tab, select the <strong>user_profiles_to_datalake</strong> data flow, ensure <strong>AutoResolveIntegrationRuntime</strong> is selected. Choose the <strong>Basic (General purpose)</strong> compute type and set the core count to <strong>4 (+ 4 Driver cores)</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-user-profiles-datalake-data-flow-settings.png" alt="The mapping data flow activity settings are configured as described." title="Mapping data flow activity settings"><br><br>
                    </li>
                    <li>
                        Select <strong>Publish all</strong> then <strong>Publish</strong> to save your pipeline.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/publish-all-1.png" alt="Publish all is highlighted." title="Publish all"><br><br>
                    </li>
                </ol>

                <h3 id="task-3-trigger-the-pipeline">Task 3: Trigger the pipeline</h3>

                <ol>
                    <li>
                        At the top of the pipeline, select <strong>Add trigger</strong>, then <strong>Trigger now</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-user-profiles-new-trigger.png" alt="The pipeline trigger option is highlighted." title="Trigger now"><br><br>
                    </li>
                    <li>
                        There are no parameters for this pipeline, so select <strong>OK</strong> to run the trigger.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-run-trigger.png" alt="The OK button is highlighted." title="Pipeline run"><br><br>
                    </li>
                    <li>
                        Navigate to the <strong>Monitor</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/monitor-hub.png" alt="The Monitor hub menu item is selected." title="Monitor hub"><br><br>
                    </li>
                    <li>
                        Select <strong>Pipeline runs</strong> and wait for the pipeline run to successfully complete (which will take some time). You may need to refresh the view.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-user-profiles-run-complete.png" alt="The pipeline run succeeded." title="Pipeline runs"><br><br>
                    </li>
                </ol>

                <h3 id="exercise-2---create-synapse-spark-notebook-to-find-top-products">Exercise 2 - Create Synapse Spark notebook to find top products</h3>

                Tailwind Traders uses a Mapping Data flow in Synapse Analytics to process, join, and import user profile data. Now they want to find the top 5 products for each user, based on which ones are both preferred and top, and have the most purchases in the past 12 months. Then, they want to calculate the top 5 products overall.

                In this exercise, you will create a Synapse Spark notebook to make these calculations.

                <h3 id="task-1-create-notebook">Task 1: Create notebook</h3>

                <ol>
                    <li>
                        Select the <strong>Data</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub.png" alt="The Data menu item is highlighted." title="Data hub"><br><br>
                    </li>
                    <li>
                        On the <strong>Linked</strong> tab, expand <strong>Azure Data Lake Storage Gen2</strong> and the primary data lake storage account, and select the <strong>wwi-02</strong> container. Then navigate to the <strong>top-products</strong> folder in the root of this container (If you don’t see the folder, select <strong>Refresh</strong>). Finally, right-click any Parquet file, select the <strong>New notebook</strong> menu item, then select <strong>Load to DataFrame</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/synapse-studio-top-products-folder.png" alt="The Parquet file and new notebook option are highlighted." title="New notebook"><br><br>
                    </li>
                    <li>
                        Select the <strong>Properties</strong> button at the top-right corner of the notebook, and enter <code>Calculate Top 5 Products</code> for the <strong>Name</strong>. Then click the <strong>Properties</strong> button again to hide the pane.
                    </li>
                    <li>
                        Attach the notebook is attached to your <strong>SparkPool01</strong> Spark pool.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-top-products-attach-pool.png" alt="The attach to Spark pool menu item is highlighted." title="Select Spark pool"><br><br>
                    </li>
                    <li>
                        In the Python code, replace the Parquet file name with <code>*.parquet</code> to select all Parquet files in the <strong>top-products</strong> folder. For example, the path should be similar to: abfss://wwi-02@asadatalakexxxxxxx.dfs.core.windows.net/top-products/*.parquet.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-top-products-filepath.png" alt="The filename is highlighted." title="Folder path"><br><br>
                    </li>
                    <li>
                        Select <strong>Run all</strong> on the notebook toolbar to run the notebook.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-top-products-cell1results.png" alt="The cell results are displayed." title="Cell 1 results"><br><br>

                        <blockquote>
                            <strong>Note:</strong> The first time you run a notebook in a Spark pool, Synapse creates a new session. This can take approximately 2-3 minutes.
                        </blockquote>
                    </li>
                    <li>
                        Create a new code cell underneath by selecting the <strong>+ Code</strong> button.
                    </li>
                    <li>
                        Enter and execute the following in the new cell to populate a new dataframe called <strong>topPurchases</strong>, create a new temporary view named <strong>top_purchases</strong>, and show the first 100 rows:

                        <pre id="codeBlock1" class="mt-0"><blockquote class="language-python hljs"> topPurchases = df.select(
     <span class="hljs-string"><span class="hljs-string">"UserId"</span></span>, <span class="hljs-string"><span class="hljs-string">"ProductId"</span></span>,
     <span class="hljs-string"><span class="hljs-string">"ItemsPurchasedLast12Months"</span></span>, <span class="hljs-string"><span class="hljs-string">"IsTopProduct"</span></span>,
     <span class="hljs-string"><span class="hljs-string">"IsPreferredProduct"</span></span>)

 <span class="hljs-comment"><span class="hljs-comment"># Populate a temporary view so we can query from SQL</span></span>
 topPurchases.createOrReplaceTempView(<span class="hljs-string"><span class="hljs-string">"top_purchases"</span></span>)

 topPurchases.show(<span class="hljs-number"><span class="hljs-number">100</span></span>)
</blockquote></pre>

                        The output should look similar to the following:

                        <pre id="codeBlock2" class="mt-0"><blockquote class="hljs ruby"> +------+---------+--------------------------+------------+------------------+
 <span class="hljs-params"><span class="hljs-params">|UserId|</span></span>ProductId<span class="hljs-params"><span class="hljs-params">|ItemsPurchasedLast12Months|</span></span>IsTopProduct<span class="hljs-params"><span class="hljs-params">|IsPreferredProduct|</span></span>
 +------+---------+--------------------------+------------+------------------+
 <span class="hljs-params"><span class="hljs-params">|   148|</span></span>     <span class="hljs-number"><span class="hljs-number">2717</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   148|</span></span>     <span class="hljs-number"><span class="hljs-number">4002</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   148|</span></span>     <span class="hljs-number"><span class="hljs-number">1716</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   148|</span></span>     <span class="hljs-number"><span class="hljs-number">4520</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   148|</span></span>      <span class="hljs-number"><span class="hljs-number">951</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   148|</span></span>     <span class="hljs-number"><span class="hljs-number">1817</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   463|</span></span>     <span class="hljs-number"><span class="hljs-number">2634</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   463|</span></span>     <span class="hljs-number"><span class="hljs-number">2795</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   471|</span></span>     <span class="hljs-number"><span class="hljs-number">1946</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   471|</span></span>     <span class="hljs-number"><span class="hljs-number">4431</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   471|</span></span>      <span class="hljs-number"><span class="hljs-number">566</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   471|</span></span>     <span class="hljs-number"><span class="hljs-number">2179</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   471|</span></span>     <span class="hljs-number"><span class="hljs-number">3758</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   471|</span></span>     <span class="hljs-number"><span class="hljs-number">2434</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   471|</span></span>     <span class="hljs-number"><span class="hljs-number">1793</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   471|</span></span>     <span class="hljs-number"><span class="hljs-number">1620</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   471|</span></span>     <span class="hljs-number"><span class="hljs-number">1572</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   833|</span></span>      <span class="hljs-number"><span class="hljs-number">957</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   833|</span></span>     <span class="hljs-number"><span class="hljs-number">3140</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
 <span class="hljs-params"><span class="hljs-params">|   833|</span></span>     <span class="hljs-number"><span class="hljs-number">1087</span></span><span class="hljs-params"><span class="hljs-params">|                      null|</span></span>       <span class="hljs-literal"><span class="hljs-literal">false</span></span><span class="hljs-params"><span class="hljs-params">|              </span><span class="hljs-literal"><span class="hljs-params"><span class="hljs-literal">true</span></span></span><span class="hljs-params">|</span></span>
</blockquote></pre>
                    </li>
                    <li>
                        Run the following in a new code cell to create a new DataFrame to hold only top preferred products where both <strong>IsTopProduct</strong> and <strong>IsPreferredProduct</strong> are true:

                        <pre id="codeBlock3" class="mt-0"><blockquote class="language-python hljs"> <span class="hljs-keyword"><span class="hljs-keyword">from</span></span> pyspark.sql.functions <span class="hljs-keyword"><span class="hljs-keyword">import</span></span> *

 topPreferredProducts = (topPurchases
     .filter( col(<span class="hljs-string"><span class="hljs-string">"IsTopProduct"</span></span>) == <span class="hljs-keyword"><span class="hljs-keyword">True</span></span>)
     .filter( col(<span class="hljs-string"><span class="hljs-string">"IsPreferredProduct"</span></span>) == <span class="hljs-keyword"><span class="hljs-keyword">True</span></span>)
     .orderBy( col(<span class="hljs-string"><span class="hljs-string">"ItemsPurchasedLast12Months"</span></span>).desc() ))

 topPreferredProducts.show(<span class="hljs-number"><span class="hljs-number">100</span></span>)
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-top-products-top-preferred-df.png" alt="The cell code and output are displayed." title="Notebook cell"><br><br>
                    </li>
                    <li>
                        Run the following in a new code cell to create a new temporary view by using SQL:

                        <pre id="codeBlock4" class="mt-0"><blockquote class="language-sql hljs">%%sql

<span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">OR</span></span> <span class="hljs-keyword"><span class="hljs-keyword">REPLACE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">TEMPORARY</span></span> <span class="hljs-keyword"><span class="hljs-keyword">VIEW</span></span> top_5_products
<span class="hljs-keyword"><span class="hljs-keyword">AS</span></span>
    <span class="hljs-keyword"><span class="hljs-keyword">select</span></span> UserId, ProductId, ItemsPurchasedLast12Months
    <span class="hljs-keyword"><span class="hljs-keyword">from</span></span> (<span class="hljs-keyword"><span class="hljs-keyword">select</span></span> *,
                row_number() <span class="hljs-keyword"><span class="hljs-keyword">over</span></span> (<span class="hljs-keyword"><span class="hljs-keyword">partition</span></span> <span class="hljs-keyword"><span class="hljs-keyword">by</span></span> UserId <span class="hljs-keyword"><span class="hljs-keyword">order</span></span> <span class="hljs-keyword"><span class="hljs-keyword">by</span></span> ItemsPurchasedLast12Months <span class="hljs-keyword"><span class="hljs-keyword">desc</span></span>) <span class="hljs-keyword"><span class="hljs-keyword">as</span></span> seqnum
        <span class="hljs-keyword"><span class="hljs-keyword">from</span></span> top_purchases
        ) a
    <span class="hljs-keyword"><span class="hljs-keyword">where</span></span> seqnum &lt;= <span class="hljs-number"><span class="hljs-number">5</span></span> <span class="hljs-keyword"><span class="hljs-keyword">and</span></span> IsTopProduct == <span class="hljs-literal"><span class="hljs-literal">true</span></span> <span class="hljs-keyword"><span class="hljs-keyword">and</span></span> IsPreferredProduct = <span class="hljs-literal"><span class="hljs-literal">true</span></span>
    <span class="hljs-keyword"><span class="hljs-keyword">order</span></span> <span class="hljs-keyword"><span class="hljs-keyword">by</span></span> a.UserId
</blockquote></pre>

                        Note that there is no output for the above query. The query uses the <strong>top_purchases</strong> temporary view as a source and applies a <strong>row_number() over</strong> method to apply a row number for the records for each user where <strong>ItemsPurchasedLast12Months</strong> is greatest. The <strong>where</strong> clause filters the results so we only retrieve up to five products where both <strong>IsTopProduct</strong> and <strong>IsPreferredProduct</strong> are set to true. This gives us the top five most purchased products for each user where those products are <em>also</em> identified as their favorite products, according to their user profile stored in Azure Cosmos DB.
                    </li>
                    <li>
                        Run the following in a new code cell to create and display a new DataFrame that stores the results of the <strong>top_5_products</strong> temporary view you created in the previous cell:

                        <pre id="codeBlock5" class="mt-0"><blockquote class="language-python hljs">top5Products = sqlContext.table(<span class="hljs-string"><span class="hljs-string">"top_5_products"</span></span>)

top5Products.show(<span class="hljs-number"><span class="hljs-number">100</span></span>)
</blockquote></pre>

                        You should see an output similar to the following, which displays the top five preferred products per user:

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-top-products-top-5-preferred-output.png" alt="The top five preferred products are displayed per user." title="Top 5 preferred products"><br><br>
                    </li>
                    <li>
                        Run the following in a new code cell to compare the number of top preferred products to the top five preferred products per customer:

                        <pre id="codeBlock6" class="mt-0"><blockquote class="language-python hljs">print(<span class="hljs-string"><span class="hljs-string">'before filter: '</span></span>, topPreferredProducts.count(), <span class="hljs-string"><span class="hljs-string">', after filter: '</span></span>, top5Products.count())
</blockquote></pre>

                        The output should be similar to:

                        <pre id="codeBlock7" class="mt-0"><blockquote class="hljs nginx"><span class="hljs-attribute"><span class="hljs-attribute">before</span></span> filter:  <span class="hljs-number"><span class="hljs-number">997817</span></span> , after filter:  <span class="hljs-number"><span class="hljs-number">85015</span></span>
</blockquote></pre>
                    </li>
                    <li>
                        Run the following in a new code cell to calculate the top five products overall, based on those that are both preferred by customers and purchased the most

                        <pre id="codeBlock8" class="mt-0"><blockquote class="language-python hljs">top5ProductsOverall = (top5Products.select(<span class="hljs-string"><span class="hljs-string">"ProductId"</span></span>,<span class="hljs-string"><span class="hljs-string">"ItemsPurchasedLast12Months"</span></span>)
    .groupBy(<span class="hljs-string"><span class="hljs-string">"ProductId"</span></span>)
    .agg( sum(<span class="hljs-string"><span class="hljs-string">"ItemsPurchasedLast12Months"</span></span>).alias(<span class="hljs-string"><span class="hljs-string">"Total"</span></span>) )
    .orderBy( col(<span class="hljs-string"><span class="hljs-string">"Total"</span></span>).desc() )
    .limit(<span class="hljs-number"><span class="hljs-number">5</span></span>))

top5ProductsOverall.show()
</blockquote></pre>

                        In this cell, we grouped the top five preferred products by product ID, summed up the total items purchased in the last 12 months, sorted that value in descending order, and returned the top five results. Your output should be similar to the following:

                        <pre id="codeBlock9" class="mt-0"><blockquote class="hljs ruby">+---------+-----+
<span class="hljs-params"><span class="hljs-params">|ProductId|</span></span>Total<span class="hljs-params"><span class="hljs-params">|
+---------+-----+
|</span></span>      <span class="hljs-number"><span class="hljs-number">347</span></span><span class="hljs-params"><span class="hljs-params">| 4523|</span></span>
<span class="hljs-params"><span class="hljs-params">|     4833|</span></span> <span class="hljs-number"><span class="hljs-number">4314</span></span><span class="hljs-params"><span class="hljs-params">|
|</span></span>     <span class="hljs-number"><span class="hljs-number">3459</span></span><span class="hljs-params"><span class="hljs-params">| 4233|</span></span>
<span class="hljs-params"><span class="hljs-params">|     2486|</span></span> <span class="hljs-number"><span class="hljs-number">4135</span></span><span class="hljs-params"><span class="hljs-params">|
|</span></span>     <span class="hljs-number"><span class="hljs-number">2107</span></span><span class="hljs-params"><span class="hljs-params">| 4113|</span></span>
+---------+-----+
</blockquote></pre>
                    </li>
                    <li>
                        We are going to execute this notebook from a pipeline. We want to pass in a parameter that sets a <strong>runId</strong> variable value that will be used to name the Parquet file. Run the following in a new code cell:

                        <pre id="codeBlock10" class="mt-0"><blockquote class="language-python hljs"><span class="hljs-keyword"><span class="hljs-keyword">import</span></span> uuid

<span class="hljs-comment"><span class="hljs-comment"># Generate random GUID</span></span>
runId = uuid.uuid4()
</blockquote></pre>

                        We are using the <strong>uuid</strong> library that comes with Spark to generate a random GUID. We want to override the <code>runId</code> variable with a parameter passed in by the pipeline. To do this, we need to toggle this as a parameter cell.
                    </li>
                    <li>
                        Select the actions ellipses <strong>(…)</strong> in the mini toolbar above the cell, then select <strong>Toggle parameter cell</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/toggle-parameter-cell.png" alt="The menu item is highlighted." title="Toggle parameter cell"><br><br>

                        After toggling this option, you will see the word <strong>Parameters</strong> at the bottom right of the cell, indicating it is a parameter cell.
                    </li>
                    <li>
                        Add the following code to a new code cell to use the <strong>runId</strong> variable as the Parquet filename in the <em>/top5-products/</em> path in the primary data lake account. Replace <strong><em>SUFFIX</em></strong> in the path with the unique suffix of your primary data lake account - you’ll find this in <strong>Cell 1</strong> at the top of the page. When you’ve updated the code, run the cell.

                        <pre id="codeBlock11" class="mt-0"><blockquote class="language-python hljs">%%pyspark

top5ProductsOverall.write.parquet(<span class="hljs-string"><span class="hljs-string">'abfss://wwi-02@asadatalakeSUFFIX.dfs.core.windows.net/top5-products/'</span></span> + str(runId) + <span class="hljs-string"><span class="hljs-string">'.parquet'</span></span>)
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/datalake-path-in-cell.png" alt="The path is updated with the name of the primary data lake account." title="Data lake name"><br><br>
                    </li>
                    <li>
                        Verify that the file was written to the data lake. In the <strong>Data</strong> hub, select the <strong>Linked</strong> tab. Expand the primary data lake storage account and select the <strong>wwi-02</strong> container. Navigate to the <strong>top5-products</strong> folder (refresh the folders in the root of the container of necessary). You should see a folder for the Parquet file in the directory with a GUID as the file name.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/top5-products-parquet.png" alt="The parquet file is highlighted." title="Top 5 products parquet"><br><br>
                    </li>
                    <li>
                        Return to the notebook. Select <strong>Stop session</strong> on the upper-right of the notebook, and confirm you want to stop the session now when prompted. We want to stop the session to free up the compute resources for when we run the notebook inside the pipeline in the next section.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-stop-session.png" alt="The stop session button is highlighted." title="Stop session"><br><br>
                    </li>
                </ol>

                <h3 id="task-2-add-the-notebook-to-the-pipeline">Task 2: Add the Notebook to the pipeline</h3>

                Tailwind Traders wants to execute this notebook after the Mapping Data Flow runs as part of their orchestration process. To do this, we will add this notebook to our pipeline as a new Notebook activity.

                <ol>
                    <li>
                        Return to the <strong>Calculate Top 5 Products</strong> notebook.
                    </li>
                    <li>
                        Select the <strong>Add to pipeline</strong> button at the top-right corner of the notebook, then select <strong>Existing pipeline</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/add-to-pipeline.png" alt="The add to pipeline button is highlighted." title="Add to pipeline"><br><br>
                    </li>
                    <li>
                        Select the <strong>User Profiles to Datalake</strong> pipeline, then select <strong>Add</strong>.
                    </li>
                    <li>
                        Synapse Studio adds the Notebook activity to the pipeline. Rearrange the <strong>Notebook activity</strong> so it sits to the right of the <strong>Data flow activity</strong>. Select the <strong>Data flow activity</strong> and drag a <strong>Success</strong> activity pipeline connection <strong>green box</strong> to the <strong>Notebook activity</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/success-activity-datalake.png" alt="The green arrow is highlighted." title="Success activity"><br><br>

                        The Success activity arrow instructs the pipeline to execute the Notebook activity after the Data flow activity successfully runs.
                    </li>
                    <li>
                        Select the <strong>Notebook activity</strong>, select the <strong>Settings</strong> tab, expand <strong>Base parameters</strong>, and select <strong>+ New</strong>. Enter <strong><code>runId</code></strong> in the <strong>Name</strong> field. Set the the <strong>Type</strong> to <strong>String</strong> and the <strong>Value</strong> to <strong>Add dynamic content</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-activity-settings-datalake.png" alt="The settings are displayed." title="Settings"><br><br>
                    </li>
                    <li>
                        In the <strong>Add dynamic content</strong> pane, expand <strong>System variables</strong>, and select <strong>Pipeline run ID</strong>. This adds <em><a href="https://github.com/pipeline" class="user-mention">@pipeline</a>().RunId</em> to the dynamic content box. Then click <strong>OK</strong> to close the dialog.

                        The Pipeline run ID value is a unique GUID assigned to each pipeline run. We will use this value for the name of the Parquet file by passing this value in as the <code>runId</code> Notebook parameter. We can then look through the pipeline run history and find the specific Parquet file created for each pipeline run.
                    </li>
                    <li>
                        Select <strong>Publish all</strong> then <strong>Publish</strong> to save your changes.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/publish-all-1.png" alt="Publish all is highlighted." title="Publish all"><br><br>
                    </li>
                </ol>

                <h3 id="task-3-run-the-updated-pipeline">Task 3: Run the updated pipeline</h3>

                <blockquote>
                    <strong>Note</strong>: The updated pipeline can take 10 minutes or more to run!
                </blockquote>

                <ol>
                    <li>
                        After publishing is complete, select <strong>Add trigger</strong>, then <strong>Trigger now</strong> to run the updated pipeline.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/trigger-updated-pipeline-datalake.png" alt="The trigger menu item is highlighted." title="Trigger pipeline"><br><br>
                    </li>
                    <li>
                        Select <strong>OK</strong> to run the trigger.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-run-trigger.png" alt="The OK button is highlighted." title="Pipeline run"><br><br>
                    </li>
                    <li>
                        Navigate to the <strong>Monitor</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/monitor-hub.png" alt="The Monitor hub menu item is selected." title="Monitor hub"><br><br>
                    </li>
                    <li>
                        Select <strong>Pipeline runs</strong> and wait for the pipeline run to successfully complete. You may need to refresh the view.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-user-profiles-updated-run-complete.png" alt="The pipeline run succeeded." title="Pipeline runs"><br><br>

                        <blockquote>
                            It can take over 10 minutes for the run to complete with the addition of the notebook activity.
                        </blockquote>
                    </li>
                    <li>
                        Select the name of the pipeline (<strong>User profiles to Datalake</strong>) to view the pipeline’s activity runs.
                    </li>
                    <li>
                        This time, we see both the <strong>Data flow</strong> activity, and the new <strong>Notebook</strong> activity. Make note of the <strong>Pipeline run ID</strong> value. We will compare this to the Parquet file name generated by the notebook. Select the <strong>Calculate Top 5 Products</strong> notebook name to view its details.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-run-details-datalake.png" alt="The pipeline run details are displayed." title="Write User Profile Data to ASA details"><br><br>
                    </li>
                    <li>
                        Here we see the notebook run details. You can select the <strong>Playback</strong> button to watch a playback of the progress through the <strong>jobs</strong>. At the bottom, you can view the <strong>Diagnostics</strong> and <strong>Logs</strong> with different filter options. Hover over a stage to view its details, such as the duration, total tasks, data details, etc. Select the <strong>View details</strong> link on the <strong>stage</strong> to view its details.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-run-details.png" alt="The run details are displayed." title="Notebook run details"><br><br>
                    </li>
                    <li>
                        The Spark application UI opens in a new tab where we can see the stage details. Expand the <strong>DAG Visualization</strong> to view the stage details.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/spark-stage-details.png" alt="The Spark stage details are displayed." title="Stage details"><br><br>
                    </li>
                    <li>
                        Close the Spark details tab, and in Synapse Studio, navigate back to the <strong>Data</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub.png" alt="Data hub." title="Data hub"><br><br>
                    </li>
                    <li>
                        Select the <strong>Linked</strong> tab, select the <strong>wwi-02</strong> container on the primary data lake storage account, navigate to the <strong>top5-products</strong> folder, and verify that a folder exists for the Parquet file whose name matches the <strong>Pipeline run ID</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/parquet-from-pipeline-run.png" alt="The file is highlighted." title="Parquet file from pipeline run"><br><br>

                        As you can see, we have a file whose name matches the <strong>Pipeline run ID</strong> we noted earlier:

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-run-id.png" alt="The Pipeline run ID is highlighted." title="Pipeline run ID"><br><br>

                        These values match because we passed in the Pipeline run ID to the <strong>runId</strong> parameter on the Notebook activity.
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