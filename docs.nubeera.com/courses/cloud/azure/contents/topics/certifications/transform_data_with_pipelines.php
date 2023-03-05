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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 6 - Transform data with Azure Data Factory or Azure Synapse Pipelines</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Certifications</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <article class="col-sm-10 mb-5">

                    This lab teaches you how to build data integration pipelines to ingest from multiple data sources, transform data using mapping data flows and notebooks, and perform data movement into one or more data sinks.

                    After completing this lab, you will be able to:

                    <ul>
                        <li>Execute code-free transformations at scale with Azure Synapse Pipelines</li>
                        <li>Create data pipeline to import poorly formatted CSV files</li>
                        <li>Create Mapping Data Flows</li>
                    </ul>

                    <h3 id="lab-setup-and-pre-requisites">Lab setup and pre-requisites</h3>

                    Before starting this lab, you must complete <strong>Lab 5: <em>Ingest and load data into the Data Warehouse</em></strong>.

                    This lab uses the dedicated SQL pool you created in the previous lab. You should have paused the SQL pool at the end of the previous lab, so resume it by following these instructions:

                    <ol>
                        <li>Open Synapse Studio (<a href="https://web.azuresynapse.net/">https://web.azuresynapse.net/</a>).</li>
                        <li>Select the <strong>Manage</strong> hub.</li>
                        <li>
                            Select <strong>SQL pools</strong> in the left-hand menu. If the <strong>SQLPool01</strong> dedicated SQL pool is paused, hover over its name and select <strong>▷</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/resume-dedicated-sql-pool.png" alt="The resume button is highlighted on the dedicated SQL pool." title="Resume">
                        </li>
                        <li>When prompted, select <strong>Resume</strong>. It will take a minute or two to resume the pool.</li>
                        <li>Continue to the next exercise while the dedicated SQL pool resumes.</li>
                    </ol>

                    <blockquote>
                        <strong>Important:</strong> Once started, a dedicated SQL pool consumes credits in your Azure subscription until it is paused. If you take a break from this lab, or decide not to complete it; follow the instructions at the end of the lab to pause your SQL pool!
                    </blockquote>

                    <h3 id="exercise-1---code-free-transformation-at-scale-with-azure-synapse-pipelines">Exercise 1 - Code-free transformation at scale with Azure Synapse Pipelines</h3>

                    Tailwind Traders would like code-free options for data engineering tasks. Their motivation is driven by the desire to allow junior-level data engineers who understand the data but do not have a lot of development experience build and maintain data transformation operations. The other driver for this requirement is to reduce fragility caused by complex code with reliance on libraries pinned to specific versions, remove code testing requirements, and improve ease of long-term maintenance. <br><br>

                    Their other requirement is to maintain transformed data in a data lake in addition to the dedicated SQL pool. This gives them the flexibility to retain more fields in their data sets than they otherwise store in fact and dimension tables, and doing this allows them to access the data when they have paused the dedicated SQL pool, as a cost optimization.<br><br>

                    Given these requirements, you recommend building Mapping Data Flows.<br><br>

                    Mapping Data flows are pipeline activities that provide a visual way of specifying how to transform data, through a code-free experience. This feature offers data cleansing, transformation, aggregation, conversion, joins, data copy operations, etc.<br><br>

                    Additional benefits

                    <ul>
                        <li>Cloud scale via Spark execution</li>
                        <li>Guided experience to easily build resilient data flows</li>
                        <li>Flexibility to transform data per user’s comfort</li>
                        <li>Monitor and manage data flows from a single pane of glass</li>
                    </ul>

                    <h3 id="task-1-create-sql-table">Task 1: Create SQL table</h3>

                    The Mapping Data Flow we will build will write user purchase data to a dedicated SQL pool. Tailwind Traders does not yet have a table to store this data. We will execute a SQL script to create this table as a pre-requisite.

                    <ol>
                        <li>
                            In Synapse Analytics Studio, navigate to the <strong>Develop</strong> hub.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/develop-hub.png" alt="The Develop menu item is highlighted." title="Develop hub"><br><br>
                        </li>
                        <li>
                            In the <strong>+</strong> menu, select <strong>SQL script</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/synapse-studio-new-sql-script.png" alt="The SQL script context menu item is highlighted." title="New SQL script"><br><br>
                        </li>
                        <li>
                            In the toolbar menu, connect to the <strong>SQLPool01</strong> database.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/synapse-studio-query-toolbar-connect.png" alt="The connect to option is highlighted in the query toolbar." title="Query toolbar"><br><br>
                        </li>
                        <li>
                            In the query window, replace the script with the following code to create a new table that joins users’ preferred products stored in Azure Cosmos DB with top product purchases per user from the e-commerce site, stored in JSON files within the data lake:

                            <pre id="codeBlock0" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">TABLE</span></span> [wwi].[UserTopProductPurchases]
 (
     [UserId] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [ProductId] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [ItemsPurchasedLast12Months] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [IsTopProduct] [<span class="hljs-built_in"><span class="hljs-built_in">bit</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [IsPreferredProduct] [<span class="hljs-built_in"><span class="hljs-built_in">bit</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>
 )
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span>
 (
     DISTRIBUTION = <span class="hljs-keyword"><span class="hljs-keyword">HASH</span></span> ( [UserId] ),
     CLUSTERED COLUMNSTORE <span class="hljs-keyword"><span class="hljs-keyword">INDEX</span></span>
 )
</blockquote></pre>
                        </li>
                        <li>
                            Select <strong>Run</strong> on the toolbar menu to run the script (you may need to wait for the SQL pool to resume).

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/synapse-studio-query-toolbar-run.png" alt="The run button is highlighted in the query toolbar." title="Run"><br><br>
                        </li>
                        <li>
                            In the query window, replace the script with the following to create a new table for the Campaign Analytics CSV file:

                            <pre id="codeBlock1" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">TABLE</span></span> [wwi].[CampaignAnalytics]
 (
     [Region] [<span class="hljs-keyword"><span class="hljs-keyword">nvarchar</span></span>](<span class="hljs-number"><span class="hljs-number">50</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [Country] [<span class="hljs-keyword"><span class="hljs-keyword">nvarchar</span></span>](<span class="hljs-number"><span class="hljs-number">30</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [ProductCategory] [<span class="hljs-keyword"><span class="hljs-keyword">nvarchar</span></span>](<span class="hljs-number"><span class="hljs-number">50</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [CampaignName] [<span class="hljs-keyword"><span class="hljs-keyword">nvarchar</span></span>](<span class="hljs-number"><span class="hljs-number">500</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [Revenue] [<span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>](<span class="hljs-number"><span class="hljs-number">10</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)  <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [RevenueTarget] [<span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>](<span class="hljs-number"><span class="hljs-number">10</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)  <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [City] [<span class="hljs-keyword"><span class="hljs-keyword">nvarchar</span></span>](<span class="hljs-number"><span class="hljs-number">50</span></span>)  <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [State] [<span class="hljs-keyword"><span class="hljs-keyword">nvarchar</span></span>](<span class="hljs-number"><span class="hljs-number">25</span></span>)  <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>
 )
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span>
 (
     DISTRIBUTION = <span class="hljs-keyword"><span class="hljs-keyword">HASH</span></span> ( [Region] ),
     CLUSTERED COLUMNSTORE <span class="hljs-keyword"><span class="hljs-keyword">INDEX</span></span>
 )
</blockquote></pre>
                        </li>
                        <li>
                            Run the script to create the table.
                        </li>
                    </ol>

                    <h3 id="task-2-create-linked-service">Task 2: Create linked service</h3>

                    Azure Cosmos DB is one of the data sources that will be used in the Mapping Data Flow. Tailwind Traders has not yet created the linked service. Follow the steps in this section to create one.

                    <blockquote>
                        <strong>Note</strong>: Skip this section if you have already created a Cosmos DB linked service.
                    </blockquote>

                    <ol>
                        <li>
                            Navigate to the <strong>Manage</strong> hub.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/manage-hub.png" alt="The Manage menu item is highlighted." title="Manage hub"><br><br>
                        </li>
                        <li>
                            Open <strong>Linked services</strong> and select <strong>+ New</strong> to create a new linked service. Select <strong>Azure Cosmos DB (SQL API)</strong> in the list of options, then select <strong>Continue</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/create-cosmos-db-linked-service-step1.png" alt="Manage, New, and the Azure Cosmos DB linked service option are highlighted." title="New linked service"><br><br>
                        </li>
                        <li>
                            Name the linked service <code>asacosmosdb01</code>, and then select the <strong>asacosmosdb<em>xxxxxxx</em></strong> Cosmos DB account name and the <strong>CustomerProfile</strong> database. Then select <strong>Test connection</strong> to ensure success, before clicking <strong>Create</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/create-cosmos-db-linked-service.png" alt="New Azure Cosmos DB linked service." title="New linked service"><br><br>
                        </li>
                    </ol>

                    <h3 id="task-3-create-data-sets">Task 3: Create data sets</h3>

                    User profile data comes from two different data sources, which we will create now. The customer profile data from an e-commerce system that provides top product purchases for each visitor of the site (customer) over the past 12 months is stored within JSON files in the data lake. User profile data containing, among other things, product preferences and product reviews is stored as JSON documents in Cosmos DB. <br><br>

                    In this section, you’ll create datasets for the SQL tables that will serve as data sinks for data pipelines you’ll create later in this lab.

                    <ol>
                        <li>
                            Navigate to the <strong>Data</strong> hub.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub.png" alt="The Data menu item is highlighted." title="Data hub"><br><br>
                        </li>
                        <li>
                            In the <strong>+</strong> menu, select <strong>Integration dataset</strong> to create a new dataset.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-dataset.png" alt="Create new Dataset." title="New Dataset"><br><br>
                        </li>
                        <li>
                            Select <strong>Azure Cosmos DB (SQL API)</strong>, then click <strong>Continue</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-cosmos-db-dataset.png" alt="The Azure Cosmos DB SQL API option is highlighted." title="Integration dataset"><br><br>
                        </li>
                        <li>
                            Configure the dataset as follows, then select <strong>OK</strong>:

                            <ul>
                                <li><strong>Name</strong>: Enter <code>asal400_customerprofile_cosmosdb</code>.</li>
                                <li><strong>Linked service</strong>: Select <strong>asacosmosdb01</strong>.</li>
                                <li>
                                    <strong>Collection</strong>: Select <strong>OnlineUserProfile01</strong>.

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/create-cosmos-db-dataset.png" alt="New Azure Cosmos DB dataset." title="New Cosmos DB dataset"><br><br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            After creating the dataset, select <strong>Preview data</strong> under its <strong>Connection</strong> tab.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/cosmos-dataset-preview-data-link.png" alt="The preview data button on the dataset is highlighted." title="Preview data"><br><br>
                        </li>
                        <li>
                            Preview data queries the selected Azure Cosmos DB collection and returns a sample of the documents within. The documents are stored in JSON format and include fields for <strong>userId</strong>, <strong>cartId</strong>, <strong>preferredProducts</strong> (an array of product IDs that may be empty), and <strong>productReviews</strong> (an array of written product reviews that may be empty).

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/cosmos-db-dataset-preview-data.png" alt="A preview of the Azure Cosmos DB data is displayed." title="Preview data"><br><br>
                        </li>
                        <li>
                            Close the preview. Then on the <strong>Data</strong> hub, in the <strong>+</strong> menu, select <strong>Integration dataset</strong> to create the second source data dataset we need.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-dataset.png" alt="Create new Dataset." title="New Dataset"><br><br>
                        </li>
                        <li>
                            Select <strong>Azure Data Lake Storage Gen2</strong>, then click <strong>Continue</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-adls-dataset.png" alt="The ADLS Gen2 option is highlighted." title="Integration dataset"><br><br>
                        </li>
                        <li>
                            Select the <strong>JSON</strong> format, then select <strong>Continue</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/json-format.png" alt="The JSON format is selected." title="Select format"><br><br>
                        </li>
                        <li>
                            Configure the dataset as follows, then select <strong>OK</strong>:

                            <ul>
                                <li><strong>Name</strong>: Enter <code>asal400_ecommerce_userprofiles_source</code>.</li>
                                <li><strong>Linked service</strong>: Select the <strong>asadatalake<em>xxxxxxx</em></strong> linked service.</li>
                                <li><strong>File path</strong>: Browse to the <strong>wwi-02/online-user-profiles-02</strong> path.</li>
                                <li><strong>Import schema</strong>: Select <strong>From connection/store</strong>.</li>
                            </ul>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-adls-dataset-form.png" alt="The form is configured as described." title="Set properties"><br><br>
                        </li>
                        <li>
                            On the <strong>Data</strong> hub, in the <strong>+</strong> menu, select <strong>Integration dataset</strong> to create a third dataset that references the destination table for campaign analytics.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-dataset.png" alt="Create new Dataset." title="New Dataset"><br><br>
                        </li>
                        <li>
                            Select <strong>Azure Synapse Analytics</strong>, then select <strong>Continue</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-synapse-dataset.png" alt="The Azure Synapse Analytics option is highlighted." title="Integration dataset"><br><br>
                        </li>
                        <li>
                            Configure the dataset as follows, then select <strong>OK</strong>:

                            <ul>
                                <li><strong>Name</strong>: Enter <code>asal400_wwi_campaign_analytics_asa</code>.</li>
                                <li><strong>Linked service</strong>: Select the <strong>SqlPool01</strong> .</li>
                                <li><strong>Table name</strong>: Select <strong>wwi.CampaignAnalytics</strong>.</li>
                                <li><strong>Import schema</strong>: Select <strong>From connection/store</strong>.</li>
                            </ul>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-dataset-campaignanalytics.png" alt="New dataset form is displayed with the described configuration." title="New dataset"><br><br>
                        </li>
                        <li>
                            On the <strong>Data</strong> hub, in the <strong>+</strong> menu, select <strong>Integration dataset</strong> to create a fourth dataset that references the destination table for top product purchases.

                            <new-dataset.png>><br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-dataset.png" alt="Create new Dataset." title="New Dataset"><br><br>
                        </li>
                        <li>
                            Select <strong>Azure Synapse Analytics</strong>, then select <strong>Continue</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-synapse-dataset.png" alt="The Azure Synapse Analytics option is highlighted." title="Integration dataset"><br><br>
                        </li>
                        <li>
                            Configure the dataset as follows, then select <strong>OK</strong>:

                            <ul>
                                <li><strong>Name</strong>: Enter <code>asal400_wwi_usertopproductpurchases_asa</code>.</li>
                                <li><strong>Linked service</strong>: Select the <strong>SqlPool01</strong>.</li>
                                <li><strong>Table name</strong>: Select <strong>wwi.UserTopProductPurchases</strong>.</li>
                                <li><strong>Import schema</strong>: Select <strong>From connection/store</strong>.</li>
                            </ul>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-dataset-usertopproductpurchases.png" alt="The data set form is displayed with the described configuration." title="Integration dataset"><br><br>
                        </li>
                    </ol>

                    <h3 id="task-4-create-campaign-analytics-dataset">Task 4: Create campaign analytics dataset</h3>

                    Your organization was provided a poorly formatted CSV file containing marketing campaign data. The file was uploaded to the data lake and now it must be imported into the data warehouse.

                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/poorly-formatted-csv.png" alt="Screenshot of the CSV file." title="Poorly formatted CSV"><br><br>

                    Issues include invalid characters in the revenue currency data, and misaligned columns.

                    <ol>
                        <li>
                            On the <strong>Data</strong> hub, in the <strong>+</strong> menu, select <strong>Integration dataset</strong> to create a new dataset.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-dataset.png" alt="Create new Dataset." title="New Dataset"><br><br>
                        </li>
                        <li>
                            Select <strong>Azure Data Lake Storage Gen2</strong>, then select <strong>Continue</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-adls-dataset.png" alt="The ADLS Gen2 option is highlighted." title="Integration dataset"><br><br>
                        </li>
                        <li>
                            Select the <strong>DelimitedText</strong> format, then select <strong>Continue</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/delimited-text-format.png" alt="The DelimitedText format is selected." title="Select format"><br><br>
                        </li>
                        <li>
                            Configure the dataset as follows, then select <strong>OK</strong>:

                            <ul>
                                <li><strong>Name</strong>: Enter <code>asal400_campaign_analytics_source</code>.</li>
                                <li><strong>Linked service</strong>: Select the <strong>asadatalake<em>xxxxxxx</em></strong> linked service.</li>
                                <li><strong>File path</strong>: Browse to <strong>wwi-02/campaign-analytics/campaignanalytics.csv</strong>.</li>
                                <li><strong>First row as header</strong>: Leave unchecked (we are skipping the header because there is a mismatch between the number of columns in the header and the number of columns in the data rows).</li>
                                <li><strong>Import schema</strong>: Select <strong>From connection/store</strong>.</li>
                            </ul>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-adls-dataset-form-delimited.png" alt="The form is configured as described." title="Set properties"><br><br>
                        </li>
                        <li>
                            After creating the dataset, on its <strong>Connection</strong> tab, review the default settings. They should match the following configuration:

                            <ul>
                                <li><strong>Compression type</strong>: None.</li>
                                <li><strong>Column delimiter</strong>: Comma (,)</li>
                                <li><strong>Row delimiter</strong>: Default (\r,\n, or \r\n)</li>
                                <li><strong>Encoding</strong>: Default(UTF-8)</li>
                                <li><strong>Escape character</strong>: Backslash (\)</li>
                                <li><strong>Quote character</strong>: Double quote (“)</li>
                                <li><strong>First row as header</strong>: <em>Unchecked</em></li>
                                <li><strong>Null value</strong>: <em>Empty</em></li>
                            </ul>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/campaign-analytics-dataset-connection.png" alt="The configuration settings under Connection are set as defined." title="Connection"><br><br>
                        </li>
                        <li>
                            Select <strong>Preview data</strong> (close the <strong>Properties</strong> pane if it is in the way).

                            The preview displays a sample of the CSV file. You can see some of the issues shown at the beginning of this task. Notice that since we are not setting the first row as the header, the header columns appear as the first row. Also, notice that the city and state values do not appear. This is because of the mismatch in the number of columns in the header row compared to the rest of the file. We will exclude the first row when we create the data flow in the next exercise.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/campaign-analytics-dataset-preview-data.png" alt="A preview of the CSV file is displayed." title="Preview data"><br><br>
                        </li>
                        <li>
                            Close the preview, and then select <strong>Publish all</strong> and click <strong>Publish</strong> to save your new resources.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/publish-all-1.png" alt="Publish all is highlighted." title="Publish all"><br><br>
                        </li>
                    </ol>

                    <h3 id="task-5-create-campaign-analytics-data-flow">Task 5: Create campaign analytics data flow</h3>

                    <ol>
                        <li>
                            Navigate to the <strong>Develop</strong> hub.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/develop-hub.png" alt="The Develop menu item is highlighted." title="Develop hub"><br><br>
                        </li>
                        <li>
                            In the <strong>+</strong> menu, select <strong>Data flow</strong> to create a new data flow (if a tip is displayed, close it.)

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-data-flow-link.png" alt="The new data flow link is highlighted." title="New data flow"><br><br>
                        </li>
                        <li>
                            In the <strong>General</strong> settings of the <strong>Properties</strong> blade of the new data flow, change the <strong>Name</strong> to <code>asal400_lab2_writecampaignanalyticstoasa</code>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-name.png" alt="The name field is populated with the defined value." title="Name"><br><br>
                        </li>
                        <li>
                            Select <strong>Add Source</strong> on the data flow canvas (again, if a tip is displayed, close it.)

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-canvas-add-source.png" alt="Select Add Source on the data flow canvas." title="Add Source"><br><br>
                        </li>
                        <li>
                            Under <strong>Source settings</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>CampaignAnalytics</code>.</li>
                                <li><strong>Source type</strong>: Select <strong>Integration dataset</strong>.</li>
                                <li><strong>Dataset</strong>: Select <strong>asal400_campaign_analytics_source</strong>.</li>
                                <li><strong>Options</strong>: Select <strong>Allow schema drift</strong> and leave the other options unchecked.</li>
                                <li><strong>Skip line count</strong>: Enter <code>1</code>. This allows us to skip the header row which has two fewer columns than the rest of the rows in the CSV file, truncating the last two data columns.</li>
                                <li><strong>Sampling</strong>: Select <strong>Disable</strong>.</li>
                            </ul>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-source-settings.png" alt="The form is configured with the defined settings." title="Source settings"><br><br>

                            When you create data flows, certain features are enabled by turning on debug, such as previewing data and importing a schema (projection). Due to the amount of time it takes to enable this option, and to minimize resource consumption in the lab environment, we will bypass these features.
                        </li>
                        <li>
                            The data source has a schema we need to set. To do this, select <strong>Script</strong> above the design canvas.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-script.png" alt="The script link is highlighted above the canvas." title="Script"><br><br>
                        </li>
                        <li>
                            Replace the script with the following to provide the column mappings, then select <strong>OK</strong>:

                            <pre id="codeBlock2" class="mt-0"><blockquote class="language-json hljs"> source(output(
         {_col0_} as string,
         {_col1_} as string,
         {_col2_} as string,
         {_col3_} as string,
         {_col4_} as string,
         {_col5_} as double,
         {_col6_} as string,
         {_col7_} as double,
         {_col8_} as string,
         {_col9_} as string
     ),
     allowSchemaDrift: <span class="hljs-literal"><span class="hljs-literal">true</span></span>,
     validateSchema: <span class="hljs-literal"><span class="hljs-literal">false</span></span>,
     ignoreNoFilesFound: <span class="hljs-literal"><span class="hljs-literal">false</span></span>,
     skipLines: <span class="hljs-number"><span class="hljs-number">1</span></span>) ~&gt; CampaignAnalytics
</blockquote></pre>
                        </li>
                        <li>
                            Select the <strong>CampaignAnalytics</strong> data source, then select <strong>Projection</strong>. The projection should display the following schema:

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-source-projection.png" alt="The imported projection is displayed." title="Projection"><br><br>
                        </li>
                        <li>
                            Select the <strong>+</strong> to the right of the <strong>CampaignAnalytics</strong> step, then select the <strong>Select</strong> schema modifier.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-new-select.png" alt="The new Select schema modifier is highlighted." title="New Select schema modifier"><br><br>
                        </li>
                        <li>
                            Under <strong>Select settings</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>MapCampaignAnalytics</code>.</li>
                                <li><strong>Incoming stream</strong>: Select <strong>CampaignAnalytics</strong>.</li>
                                <li><strong>Options</strong>: Check both options.</li>
                                <li><strong>Input columns</strong>: make sure <strong>Auto mapping</strong> is unselected, then provide the following values in the <strong>Name as</strong> fields:
                                    <ul>
                                        <li><code>Region</code></li>
                                        <li><code>Country</code></li>
                                        <li><code>ProductCategory</code></li>
                                        <li><code>CampaignName</code></li>
                                        <li><code>RevenuePart1</code></li>
                                        <li><code>Revenue</code></li>
                                        <li><code>RevenueTargetPart1</code></li>
                                        <li><code>RevenueTarget</code></li>
                                        <li><code>City</code></li>
                                        <li><code>State</code></li>
                                    </ul>
                                </li>
                            </ul>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-select-settings.png" alt="The select settings are displayed as described." title="Select settings"><br><br>

                        </li>
                        <li>
                            Select the <strong>+</strong> to the right of the <strong>MapCampaignAnalytics</strong> step, then select the <strong>Derived Column</strong> schema modifier.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-new-derived.png" alt="The new Derived Column schema modifier is highlighted." title="New Derived Column"><br><br>
                        </li>
                        <li>
                            Under <strong>Derived column’s settings</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>ConvertColumnTypesAndValues</code>.</li>
                                <li><strong>Incoming stream</strong>: Select <strong>MapCampaignAnalytics</strong>.</li>
                                <li>
                                    <strong>Columns</strong>: Provide the following information:

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Column</th>
                                                <th>Expression</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Revenue</td>
                                                <td><code>toDecimal(replace(concat(toString(RevenuePart1), toString(Revenue)), '\\', ''), 10, 2, '$###,###.##')</code></td>
                                            </tr>
                                            <tr>
                                                <td>RevenueTarget</td>
                                                <td><code>toDecimal(replace(concat(toString(RevenueTargetPart1), toString(RevenueTarget)), '\\', ''), 10, 2, '$###,###.##')</code></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>

                            <blockquote>
                                <strong>Note</strong>: To insert the second column, select <strong>+ Add</strong> above the Columns list, then select <strong>Add column</strong>.
                            </blockquote>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-derived-column-settings.png" alt="The derived column's settings are displayed as described." title="Derived column's settings"><br><br>

                            The expressions you defined will concatenate and clean-up the <strong>RevenuePart1</strong> and <strong>Revenue</strong> values and the <strong>RevenueTargetPart1</strong> and <strong>RevenueTarget</strong> values.
                        </li>
                        <li>
                            Select the <strong>+</strong> to the right of the <strong>ConvertColumnTypesAndValues</strong> step, then select the <strong>Select</strong> schema modifier from the context menu.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-new-select2.png" alt="The new Select schema modifier is highlighted." title="New Select schema modifier"><br><br>
                        </li>
                        <li>
                            Under <strong>Select settings</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>SelectCampaignAnalyticsColumns</code>.</li>
                                <li><strong>Incoming stream</strong>: Select <strong>ConvertColumnTypesAndValues</strong>.</li>
                                <li><strong>Options</strong>: Check both options.</li>
                                <li><strong>Input columns</strong>: make sure <strong>Auto mapping</strong> is unchecked, then <strong>Delete</strong> <strong>RevenuePart1</strong> and <strong>RevenueTargetPart1</strong>. We no longer need these fields.</li>
                            </ul>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-select-settings2.png" alt="The select settings are displayed as described." title="Select settings"><br><br>
                        </li>
                        <li>
                            Select the <strong>+</strong> to the right of the <strong>SelectCampaignAnalyticsColumns</strong> step, then select the <strong>Sink</strong> destination.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-new-sink.png" alt="The new Sink destination is highlighted." title="New sink"><br><br>
                        </li>
                        <li>
                            Under <strong>Sink</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>CampaignAnalyticsASA</code>.</li>
                                <li><strong>Incoming stream</strong>: Select <strong>SelectCampaignAnalyticsColumns</strong>.</li>
                                <li><strong>Sink type</strong>: Select <strong>Integration dataset</strong>.</li>
                                <li><strong>Dataset</strong>: Select <strong>asal400_wwi_campaign_analytics_asa</strong>.</li>
                                <li><strong>Options</strong>: Check <strong>Allow schema drift</strong> and uncheck <strong>Validate schema</strong>.</li>
                            </ul>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-new-sink-settings.png" alt="The sink settings are shown." title="Sink settings"><br><br>
                        </li>
                        <li>
                            On the <strong>Settings</strong> tab, configure the following options:

                            <ul>
                                <li><strong>Update method</strong>: Check <strong>Allow insert</strong> and leave the rest unchecked.</li>
                                <li><strong>Table action</strong>: Select <strong>Truncate table</strong>.</li>
                                <li><strong>Enable staging</strong>: Uncheck this option. The sample CSV file is small, making the staging option unnecessary.</li>
                            </ul>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-new-sink-settings-options.png" alt="The settings are shown." title="Settings"><br><br>
                        </li>
                        <li>
                            Your completed data flow should look similar to the following:

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-campaign-analysis-complete.png" alt="The completed data flow is displayed." title="Completed data flow"><br><br>
                        </li>
                        <li>
                            Select <strong>Publish all</strong> then <strong>Publish</strong> to save your new data flow.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/publish-all-1.png" alt="Publish all is highlighted." title="Publish all"><br><br>
                        </li>
                    </ol>

                    <h3 id="task-6-create-campaign-analytics-data-pipeline">Task 6: Create campaign analytics data pipeline</h3>

                    In order to run the new data flow, you need to create a new pipeline and add a data flow activity to it.

                    <ol>
                        <li>
                            Navigate to the <strong>Integrate</strong> hub.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/integrate-hub.png" alt="The Integrate hub is highlighted." title="Integrate hub"><br><br>
                        </li>
                        <li>
                            In the <strong>+</strong> menu, select <strong>Pipeline</strong> to create a new pipeline.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-pipeline.png" alt="The new pipeline context menu item is selected." title="New pipeline"><br><br>
                        </li>
                        <li>
                            In the <strong>General</strong> section of the <strong>Properties</strong> blade for the new pipeline, enter the following <strong>Name</strong>: <code>Write Campaign Analytics to ASA</code>.
                        </li>
                        <li>
                            Expand <strong>Move &amp; transform</strong> within the Activities list, then drag the <strong>Data flow</strong> activity onto the pipeline canvas.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-campaign-analysis-drag-data-flow.png" alt="Drag the data flow activity onto the pipeline canvas." title="Pipeline canvas"><br><br>
                        </li>
                        <li>
                            On the <strong>General</strong> tab for the data flow (beneath the pipeline canvas), set the <strong>Name</strong> to <code>asal400_lab2_writecampaignanalyticstoasa</code>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-campaign-analysis-adding-data-flow.png" alt="The adding data flow form is displayed with the described configuration." title="Adding data flow"><br><br>
                        </li>
                        <li>
                            Select the <strong>Settings</strong> tab; and then, in the <strong>Data flow</strong> list, select <strong>asal400_lab2_writecampaignanalyticstoasa</strong> .

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-campaign-analysis-data-flow-settings-tab.png" alt="The data flow is selected." title="Settings"><br><br>
                        </li>
                        <li>
                            Select <strong>Publish all</strong> to save your new pipeline, and then select <strong>Publish</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/publish-all-1.png" alt="Publish all is highlighted." title="Publish all"><br><br>
                        </li>
                    </ol>

                    <h3 id="task-7-run-the-campaign-analytics-data-pipeline">Task 7: Run the campaign analytics data pipeline</h3>

                    <ol>
                        <li>
                            Select <strong>Add trigger</strong>, and then select <strong>Trigger now</strong> in the toolbar at the top of the pipeline canvas.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-trigger.png" alt="The add trigger button is highlighted." title="Pipeline trigger"><br><br>
                        </li>
                        <li>
                            In the <strong>Pipeline run</strong> pane, select <strong>OK</strong> to start the pipeline run.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-trigger-run.png" alt="The pipeline run blade is displayed." title="Pipeline run"><br><br>
                        </li>
                        <li>
                            Navigate to the <strong>Monitor</strong> hub.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/monitor-hub.png" alt="The Monitor hub menu item is selected." title="Monitor hub"><br><br>
                        </li>
                        <li>
                            Wait for the pipeline run to successfully complete, which will take some time. You may need to refresh the view.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-campaign-analysis-run-complete.png" alt="The pipeline run succeeded." title="Pipeline runs"><br><br>
                        </li>
                    </ol>

                    <h3 id="task-8-view-campaign-analytics-table-contents">Task 8: View campaign analytics table contents</h3>

                    Now that the pipeline run is complete, let’s take a look at the SQL table to verify the data successfully copied.

                    <ol>
                        <li>
                            Navigate to the <strong>Data</strong> hub.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub.png" alt="The Data menu item is highlighted." title="Data hub"><br><br>
                        </li>
                        <li>
                            Expand the <strong>SqlPool01</strong> database underneath the <strong>Workspace</strong> section, then expand <strong>Tables</strong> (you may need to refresh to see the new tables).
                        </li>
                        <li>
                            Right-click the <strong>wwi.CampaignAnalytics</strong> table, then select <strong>New SQL script</strong> and <strong>Select TOP 100 rows</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/select-top-1000-rows-campaign-analytics.png" alt="The Select TOP 1000 rows menu item is highlighted." title="Select TOP 1000 rows"><br><br>
                        </li>
                        <li>
                            The properly transformed data should appear in the query results.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/campaign-analytics-query-results.png" alt="The CampaignAnalytics query results are displayed." title="Query results"><br><br>
                        </li>
                        <li>
                            Modify the query as follows and run the script:

                            <pre id="codeBlock3" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> ProductCategory
 ,<span class="hljs-keyword"><span class="hljs-keyword">SUM</span></span>(Revenue) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> TotalRevenue
 ,<span class="hljs-keyword"><span class="hljs-keyword">SUM</span></span>(RevenueTarget) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> TotalRevenueTarget
 ,(<span class="hljs-keyword"><span class="hljs-keyword">SUM</span></span>(RevenueTarget) - <span class="hljs-keyword"><span class="hljs-keyword">SUM</span></span>(Revenue)) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> Delta
 <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> [wwi].[CampaignAnalytics]
 <span class="hljs-keyword"><span class="hljs-keyword">GROUP</span></span> <span class="hljs-keyword"><span class="hljs-keyword">BY</span></span> ProductCategory
</blockquote></pre>
                        </li>
                        <li>
                            In the query results, select the <strong>Chart</strong> view. Configure the columns as defined:

                            <ul>
                                <li><strong>Chart type</strong>: Column.</li>
                                <li><strong>Category column</strong>: ProductCategory.</li>
                                <li><strong>Legend (series) columns</strong>: TotalRevenue, TotalRevenueTarget, and Delta.</li>
                            </ul>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/campaign-analytics-query-results-chart.png" alt="The new query and chart view are displayed." title="Chart view"><br><br>
                        </li>
                    </ol>

                    <h3 id="exercise-2---create-mapping-data-flow-for-top-product-purchases">Exercise 2 - Create Mapping Data Flow for top product purchases</h3>

                    Tailwind Traders needs to combine top product purchases imported as JSON files from their eCommerce system with user preferred products from profile data stored as JSON documents in Azure Cosmos DB. They want to store the combined data in a dedicated SQL pool as well as their data lake for further analysis and reporting. <br><br>

                    To do this, you will build a mapping data flow that performs the following tasks:

                    <ul>
                        <li>Adds two ADLS Gen2 data sources for the JSON data</li>
                        <li>Flattens the hierarchical structure of both sets of files</li>
                        <li>Performs data transformations and type conversions</li>
                        <li>Joins both data sources</li>
                        <li>Creates new fields on the joined data set based on conditional logic</li>
                        <li>Filters null records for required fields</li>
                        <li>Writes to the dedicated SQL pool</li>
                        <li>Simultaneously writes to the data lake</li>
                    </ul>

                    <h3 id="task-1-create-mapping-data-flow">Task 1: Create Mapping Data Flow</h3>

                    <ol>
                        <li>
                            In Synapse Analytics Studio, navigate to the <strong>Develop</strong> hub.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/develop-hub.png" alt="The Develop menu item is highlighted." title="Develop hub"><br><br>
                        </li>
                        <li>
                            In the <strong>+</strong> menu, select <strong>Data flow</strong> to create a new data flow.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-data-flow-link.png" alt="The new data flow link is highlighted." title="New data flow"><br><br>
                        </li>
                        <li>
                            In the <strong>General</strong> section of the <strong>Properties</strong> pane of the new data flow, update the <strong>Name</strong> to the following: <code>write_user_profile_to_asa</code>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-general.png" alt="The name is displayed." title="General properties"><br><br>
                        </li>
                        <li>
                            Select the <strong>Properties</strong> button to hide the pane.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-properties-button.png" alt="The button is highlighted." title="Properties button"><br><br>
                        </li>
                        <li>
                            Select <strong>Add Source</strong> on the data flow canvas.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-canvas-add-source.png" alt="Select Add Source on the data flow canvas." title="Add Source"><br><br>
                        </li>
                        <li>
                            Under <strong>Source settings</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>EcommerceUserProfiles</code>.</li>
                                <li><strong>Source type</strong>: Select <strong>Integration dataset</strong>.</li>
                                <li>
                                    <strong>Dataset</strong>: Select <strong>asal400_ecommerce_userprofiles_source</strong>.

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-source-settings.png" alt="The source settings are configured as described." title="Source settings"><br><br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Select the <strong>Source options</strong> tab, then configure the following:

                            <ul>
                                <li><strong>Wildcard paths</strong>: Enter <code>online-user-profiles-02/*.json</code></li>
                                <li>
                                    <strong>JSON Settings</strong>: Expand this section, then select the <strong>Array of documents</strong> setting. This indicates that each file contains an array of JSON documents.

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-source-options.png" alt="The source options are configured as described." title="Source options"><br><br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Select the <strong>+</strong> to the right of the <strong>EcommerceUserProfiles</strong> source, then select the <strong>Derived Column</strong> schema modifier.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-derived-column.png" alt="The plus sign and Derived Column schema modifier are highlighted." title="New Derived Column"><br><br>
                        </li>
                        <li>
                            Under <strong>Derived column’s settings</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>userId</code>.</li>
                                <li><strong>Incoming stream</strong>: Select <strong>EcommerceUserProfiles</strong>.</li>
                                <li>
                                    <strong>Columns</strong>: Provide the following information:

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Column</th>
                                                <th>Expression</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>visitorId</td>
                                                <td><code>toInteger(visitorId)</code></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-derived-column-settings.png" alt="The derived column's settings are configured as described." title="Derived column's settings"><br><br>

                                    This expression converts the <strong>visitorId</strong> column value to an integer data type.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Select the <strong>+</strong> to the right of the <strong>userId</strong> step, then select the <strong>Flatten</strong> formatter.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-flatten.png" alt="The plus sign and the Flatten schema modifier are highlighted." title="New Flatten schema modifier"><br><br>
                        </li>
                        <li>
                            Under <strong>Flatten settings</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>UserTopProducts</code>.</li>
                                <li><strong>Incoming stream</strong>: Select <strong>userId</strong>.</li>
                                <li><strong>Unroll by</strong>: Select <strong>[] topProductPurchases</strong>.</li>
                                <li>
                                    <strong>Input columns</strong>: Provide the following information:

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>userId’s column</th>
                                                <th>Name as</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>visitorId</td>
                                                <td><code>visitorId</code></td>
                                            </tr>
                                            <tr>
                                                <td>topProductPurchases.productId</td>
                                                <td><code>productId</code></td>
                                            </tr>
                                            <tr>
                                                <td>topProductPurchases.itemsPurchasedLast12Months</td>
                                                <td><code>itemsPurchasedLast12Months</code></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <blockquote>
                                        Select <strong>+ Add mapping</strong>, then select <strong>Fixed mapping</strong> to add each new column mapping.
                                    </blockquote>

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-flatten-settings.png" alt="The flatten settings are configured as described." title="Flatten settings"><br><br>
                                </li>
                            </ul>

                            These settings provide a flattened representation of the data.
                        </li>
                        <li>
                            The user interface defines the mappings by generating a script. To view the script, select the <strong>Script</strong> button on the toolbar.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/dataflowactivityscript.png" alt="Data flow script button." title="Data flow script button"><br><br>

                            Verify that the script looks like this and then <strong>Cancel</strong> to return the graphical UI (if not, modify the script):

                            <pre id="codeBlock4" class="mt-0"><blockquote class="hljs coffeescript">source(output(
        visitorId <span class="hljs-keyword"><span class="hljs-keyword">as</span></span> string,
        topProductPurchases <span class="hljs-keyword"><span class="hljs-keyword">as</span></span> (productId <span class="hljs-keyword"><span class="hljs-keyword">as</span></span> string, itemsPurchasedLast12Months <span class="hljs-keyword"><span class="hljs-keyword">as</span></span> string)[]
    ),
    allowSchemaDrift: <span class="hljs-literal"><span class="hljs-literal">true</span></span>,
    validateSchema: <span class="hljs-literal"><span class="hljs-literal">false</span></span>,
    ignoreNoFilesFound: <span class="hljs-literal"><span class="hljs-literal">false</span></span>,
    documentForm: <span class="hljs-string"><span class="hljs-string">'arrayOfDocuments'</span></span>,
    wildcardPaths:[<span class="hljs-string"><span class="hljs-string">'online-user-profiles-02/*.json'</span></span>]) ~&gt; EcommerceUserProfiles
EcommerceUserProfiles derive(visitorId = toInteger(visitorId)) ~&gt; userId
userId foldDown(unroll(topProductPurchases),
    mapColumn(
        visitorId,
        productId = topProductPurchases.productId,
        itemsPurchasedLast12Months = topProductPurchases.itemsPurchasedLast12Months
    ),
    skipDuplicateMapInputs: <span class="hljs-literal"><span class="hljs-literal">false</span></span>,
    skipDuplicateMapOutputs: <span class="hljs-literal"><span class="hljs-literal">false</span></span>) ~&gt; UserTopProducts
</blockquote></pre>
                        </li>
                        <li>
                            Select the <strong>+</strong> to the right of the <strong>UserTopProducts</strong> step, then select the <strong>Derived Column</strong> schema modifier from the context menu.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-derived-column2.png" alt="The plus sign and Derived Column schema modifier are highlighted." title="New Derived Column"><br><br>
                        </li>
                        <li>
                            Under <strong>Derived column’s settings</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>DeriveProductColumns</code>.</li>
                                <li><strong>Incoming stream</strong>: Select <strong>UserTopProducts</strong>.</li>
                                <li>
                                    <strong>Columns</strong>: Provide the following information:

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Column</th>
                                                <th>Expression</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>productId</td>
                                                <td><code>toInteger(productId)</code></td>
                                            </tr>
                                            <tr>
                                                <td>itemsPurchasedLast12Months</td>
                                                <td><code>toInteger(itemsPurchasedLast12Months)</code></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-derived-column2-settings.png" alt="The derived column's settings are configured as described." title="Derived column's settings"><br><br>

                                    <blockquote>
                                        <strong>Note</strong>: To add a column to the derived column settings, select <strong>+</strong> to the right of the first column, then select <strong>Add column</strong>.
                                    </blockquote>

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-add-derived-column.png" alt="The add column menu item is highlighted." title="Add derived column"><br><br>

                                    These expressions covert the <strong>productid</strong> and <strong>itemsPurchasedLast12Months</strong> columns values to integers.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Select <strong>Add Source</strong> on the data flow canvas beneath the <strong>EcommerceUserProfiles</strong> source.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-add-source.png" alt="Select Add Source on the data flow canvas." title="Add Source"><br><br>
                        </li>
                        <li>
                            Under <strong>Source settings</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>UserProfiles</code>.</li>
                                <li><strong>Source type</strong>: Select <strong>Integration dataset</strong>.</li>
                                <li>
                                    <strong>Dataset</strong>: Select <strong>asal400_customerprofile_cosmosdb</strong>.

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-source2-settings.png" alt="The source settings are configured as described." title="Source settings"><br><br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Since we are not using the data flow debugger, we need to enter the data flow’s Script view to update the source projection. Select <strong>Script</strong> in the toolbar above the canvas.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-script-link.png" alt="The Script link is highlighted above the canvas." title="Data flow canvas"><br><br>
                        </li>
                        <li>
                            Locate the <strong>UserProfiles</strong> source in the script, which looks like this:

                            <pre id="codeBlock5" class="mt-0"><blockquote class="hljs cs">source(output(
    userId <span class="hljs-keyword"><span class="hljs-keyword">as</span></span> <span class="hljs-keyword"><span class="hljs-keyword">string</span></span>,
    cartId <span class="hljs-keyword"><span class="hljs-keyword">as</span></span> <span class="hljs-keyword"><span class="hljs-keyword">string</span></span>,
    preferredProducts <span class="hljs-keyword"><span class="hljs-keyword">as</span></span> <span class="hljs-keyword"><span class="hljs-keyword">string</span></span>[],
    <span class="hljs-function"><span class="hljs-function">productReviews </span><span class="hljs-title"><span class="hljs-function"><span class="hljs-title">as</span></span></span><span class="hljs-function"> (</span><span class="hljs-params"><span class="hljs-function"><span class="hljs-params">productId </span></span><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-params"><span class="hljs-keyword">as</span></span></span></span><span class="hljs-function"><span class="hljs-params"> </span></span><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-params"><span class="hljs-keyword">string</span></span></span></span><span class="hljs-function"><span class="hljs-params">, reviewText </span></span><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-params"><span class="hljs-keyword">as</span></span></span></span><span class="hljs-function"><span class="hljs-params"> </span></span><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-params"><span class="hljs-keyword">string</span></span></span></span><span class="hljs-function"><span class="hljs-params">, reviewDate </span></span><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-params"><span class="hljs-keyword">as</span></span></span></span><span class="hljs-function"><span class="hljs-params"> </span></span><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-params"><span class="hljs-keyword">string</span></span></span></span></span><span class="hljs-function">)[]
),
allowSchemaDrift: </span><span class="hljs-literal"><span class="hljs-function"><span class="hljs-literal">true</span></span></span><span class="hljs-function">,
validateSchema: </span><span class="hljs-literal"><span class="hljs-function"><span class="hljs-literal">false</span></span></span><span class="hljs-function">,
format: 'document') ~&gt; UserProfiles
</span></span></blockquote></pre>
                        </li>
                        <li>
                            Modify script block as follows to set <strong>preferredProducts</strong> as an <strong>integer[]</strong> array and ensure the data types within the <strong>productReviews</strong> array are correctly defined. Then select <strong>OK</strong> to apply the script changes.

                            <pre id="codeBlock6" class="mt-0"><blockquote class="hljs cs">source(output(
        cartId <span class="hljs-keyword"><span class="hljs-keyword">as</span></span> <span class="hljs-keyword"><span class="hljs-keyword">string</span></span>,
        preferredProducts <span class="hljs-keyword"><span class="hljs-keyword">as</span></span> integer[],
        <span class="hljs-function"><span class="hljs-function">productReviews </span><span class="hljs-title"><span class="hljs-function"><span class="hljs-title">as</span></span></span><span class="hljs-function"> (</span><span class="hljs-params"><span class="hljs-function"><span class="hljs-params">productId </span></span><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-params"><span class="hljs-keyword">as</span></span></span></span><span class="hljs-function"><span class="hljs-params"> integer, reviewDate </span></span><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-params"><span class="hljs-keyword">as</span></span></span></span><span class="hljs-function"><span class="hljs-params"> </span></span><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-params"><span class="hljs-keyword">string</span></span></span></span><span class="hljs-function"><span class="hljs-params">, reviewText </span></span><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-params"><span class="hljs-keyword">as</span></span></span></span><span class="hljs-function"><span class="hljs-params"> </span></span><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-params"><span class="hljs-keyword">string</span></span></span></span></span><span class="hljs-function">)[],
        userId </span><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword">as</span></span></span><span class="hljs-function"> integer
    ),
    allowSchemaDrift: </span><span class="hljs-literal"><span class="hljs-function"><span class="hljs-literal">true</span></span></span><span class="hljs-function">,
    validateSchema: </span><span class="hljs-literal"><span class="hljs-function"><span class="hljs-literal">false</span></span></span><span class="hljs-function">,
    ignoreNoFilesFound: </span><span class="hljs-literal"><span class="hljs-function"><span class="hljs-literal">false</span></span></span><span class="hljs-function">,
    format: 'document') ~&gt; UserProfiles
</span></span></blockquote></pre>
                        </li>
                        <li>
                            Select the <strong>+</strong> to the right of the <strong>UserProfiles</strong> source, then select the <strong>Flatten</strong> formatter.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-flatten2.png" alt="The plus sign and the Flatten schema modifier are highlighted." title="New Flatten schema modifier"><br><br>
                        </li>
                        <li>
                            Under <strong>Flatten settings</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>UserPreferredProducts</code>.</li>
                                <li><strong>Incoming stream</strong>: Select <strong>UserProfiles</strong>.</li>
                                <li><strong>Unroll by</strong>: Select <strong>[] preferredProducts</strong>.</li>
                                <li>
                                    <strong>Input columns</strong>: Provide the following information. Be sure to <strong>delete</strong> <strong>cartId</strong> and <strong>[] productReviews</strong>:

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>UserProfiles’s column</th>
                                                <th>Name as</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>[] preferredProducts</td>
                                                <td><code>preferredProductId</code></td>
                                            </tr>
                                            <tr>
                                                <td>userId</td>
                                                <td><code>userId</code></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-flatten2-settings.png" alt="The flatten settings are configured as described." title="Flatten settings"><br><br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Now it is time to join the two data sources. Select the <strong>+</strong> to the right of the <strong>DeriveProductColumns</strong> step, then select the <strong>Join</strong> option.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-join.png" alt="The plus sign and new Join menu item are highlighted." title="New Join"><br><br>
                        </li>
                        <li>
                            Under <strong>Join settings</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>JoinTopProductsWithPreferredProducts</code>.</li>
                                <li><strong>Left stream</strong>: Select <strong>DeriveProductColumns</strong>.</li>
                                <li><strong>Right stream</strong>: Select <strong>UserPreferredProducts</strong>.</li>
                                <li><strong>Join type</strong>: Select <strong>Full outer</strong>.</li>
                                <li>
                                    <strong>Join conditions</strong>: Provide the following information:

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Left: DeriveProductColumns’s column</th>
                                                <th>Right: UserPreferredProducts’s column</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>visitorId</td>
                                                <td>userId</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-join-settings.png" alt="The join settings are configured as described." title="Join settings"><br><br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Select <strong>Optimize</strong> and configure the following:

                            <ul>
                                <li><strong>Broadcast</strong>: Select <strong>Fixed</strong>.</li>
                                <li><strong>Broadcast options</strong>: Check <strong>Left: ‘DeriveProductColumns’</strong>.</li>
                                <li><strong>Partition option</strong>: Select <strong>Set partitioning</strong>.</li>
                                <li><strong>Partition type</strong>: Select <strong>Hash</strong>.</li>
                                <li><strong>Number of partitions</strong>: Enter <code>30</code>.</li>
                                <li>
                                    <strong>Column</strong>: Select <strong>productId</strong>.

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-join-optimize.png" alt="The join optimization settings are configured as described." title="Optimize"><br><br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Select the <strong>Inspect</strong> tab to see the join mapping, including the column feed source and whether the column is used in a join.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-join-inspect.png" alt="The inspect blade is displayed." title="Inspect">
                        </li>
                        <li>
                            Select the <strong>+</strong> to the right of the <strong>JoinTopProductsWithPreferredProducts</strong> step, then select the <strong>Derived Column</strong> schema modifier.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-derived-column3.png" alt="The plus sign and Derived Column schema modifier are highlighted." title="New Derived Column"><br><br>
                        </li>
                        <li>
                            Under <strong>Derived column’s settings</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>DerivedColumnsForMerge</code>.</li>
                                <li><strong>Incoming stream</strong>: Select <strong>JoinTopProductsWithPreferredProducts</strong>.</li>
                                <li>
                                    <strong>Columns</strong>: Provide the following information (<strong><em>type in</em> the <em>first two</em> column names</strong>):

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Column</th>
                                                <th>Expression</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><code>isTopProduct</code></td>
                                                <td><code>toBoolean(iif(isNull(productId), 'false', 'true'))</code></td>
                                            </tr>
                                            <tr>
                                                <td><code>isPreferredProduct</code></td>
                                                <td><code>toBoolean(iif(isNull(preferredProductId), 'false', 'true'))</code></td>
                                            </tr>
                                            <tr>
                                                <td>productId</td>
                                                <td><code>iif(isNull(productId), preferredProductId, productId)</code></td>
                                            </tr>
                                            <tr>
                                                <td>userId</td>
                                                <td><code>iif(isNull(userId), visitorId, userId)</code></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-derived-column3-settings.png" alt="The derived column's settings are configured as described." title="Derived column's settings"><br><br>

                                    The derived column settings will provide the following result when the pipeline is run:

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-derived-column3-preview.png" alt="The data preview is displayed." title="Data preview"><br><br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Select the <strong>+</strong> to the right of the <strong>DerivedColumnsForMerge</strong> step, then select the <strong>Filter</strong> row modifier.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-filter.png" alt="The new Filter destination is highlighted." title="New filter"><br><br>

                            We are adding the filter step to remove any records where the <strong>ProductId</strong> is null. The data sets have a small percentage of invalid records, and null <strong>ProductId</strong> values will cause errors when loading into the <strong>UserTopProductPurchases</strong> dedicated SQL pool table.
                        </li>
                        <li>
                            Set the <strong>Filter on</strong> expression to <code>!isNull(productId)</code>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-filter-settings.png" alt="The filter settings are shown." title="Filter settings"><br><br>
                        </li>
                        <li>
                            Select the <strong>+</strong> to the right of the <strong>Filter1</strong> step, then select the <strong>Sink</strong> destination from the context menu.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-sink.png" alt="The new Sink destination is highlighted." title="New sink"><br><br>
                        </li>
                        <li>
                            Under <strong>Sink</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>UserTopProductPurchasesASA</code>.</li>
                                <li><strong>Incoming stream</strong>: Select <strong>Filter1</strong>.</li>
                                <li><strong>Sink type</strong>: select <strong>Integration Dataset</strong>.</li>
                                <li><strong>Dataset</strong>: Select <strong>asal400_wwi_usertopproductpurchases_asa</strong>.</li>
                                <li><strong>Options</strong>: Check <strong>Allow schema drift</strong> and uncheck <strong>Validate schema</strong>.</li>
                            </ul>

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-sink-settings.png" alt="The sink settings are shown." title="Sink settings"><br><br>
                        </li>
                        <li>
                            Select <strong>Settings</strong>, then configure the following:

                            <ul>
                                <li><strong>Update method</strong>: Check <strong>Allow insert</strong> and leave the rest unchecked.</li>
                                <li><strong>Table action</strong>: Select <strong>Truncate table</strong>.</li>
                                <li>
                                    <strong>Enable staging</strong>: Check this option. Since we are importing a lot of data, we want to enable staging to improve performance.

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-sink-settings-options.png" alt="The settings are shown." title="Settings"><br><br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Select <strong>Mapping</strong>, then configure the following:

                            <ul>
                                <li><strong>Auto mapping</strong>: De-select this option.</li>
                                <li>
                                    <strong>Columns</strong>: Provide the following information:

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Input columns</th>
                                                <th>Output columns</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>userId</td>
                                                <td>UserId</td>
                                            </tr>
                                            <tr>
                                                <td>productId</td>
                                                <td>ProductId</td>
                                            </tr>
                                            <tr>
                                                <td>itemsPurchasedLast12Months</td>
                                                <td>ItemsPurchasedLast12Months</td>
                                            </tr>
                                            <tr>
                                                <td>isTopProduct</td>
                                                <td>IsTopProduct</td>
                                            </tr>
                                            <tr>
                                                <td>isPreferredProduct</td>
                                                <td>IsPreferredProduct</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-sink-settings-mapping.png" alt="The mapping settings are configured as described." title="Mapping"><br><br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Select the <strong>+</strong> to the right of the <strong>Filter1</strong> step, then select the <strong>Sink</strong> destination from the context menu to add a second sink.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-sink2.png" alt="The new Sink destination is highlighted." title="New sink"><br><br>
                        </li>
                        <li>
                            Under <strong>Sink</strong>, configure the following:

                            <ul>
                                <li><strong>Output stream name</strong>: Enter <code>DataLake</code>.</li>
                                <li><strong>Incoming stream</strong>: Select <strong>Filter1</strong>.</li>
                                <li><strong>Sink type</strong>: select <strong>Inline</strong>.</li>
                                <li><strong>Inline dataset type</strong>: select <strong>Delta</strong>.</li>
                                <li><strong>Linked service</strong>: Select <strong>asaworkspace<em>xxxxxxx</em>-WorkspaceDefaultStorage</strong>.</li>
                                <li>
                                    <strong>Options</strong>: Check <strong>Allow schema drift</strong> and uncheck <strong>Validate schema</strong>.

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-sink-settings2.png" alt="The sink settings are shown." title="Sink settings"><br><br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Select <strong>Settings</strong>, then configure the following:

                            <ul>
                                <li><strong>Folder path</strong>: Enter <code>wwi-02</code> / <code>top-products</code> (type these two values into the fields since the <strong>top-products</strong> folder does not yet exist).</li>
                                <li><strong>Compression type</strong>: Select <strong>snappy</strong>.</li>
                                <li><strong>Compression level</strong>: Select <strong>Fastest</strong>.</li>
                                <li><strong>Vacuum</strong>: Enter <code>0</code>.</li>
                                <li><strong>Table action</strong>: Select <strong>Truncate</strong>.</li>
                                <li><strong>Update method</strong>: Check <strong>Allow insert</strong> and leave the rest unchecked.</li>
                                <li>
                                    <strong>Merge schema (under Delta options)</strong>: Unchecked.

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-sink-settings-options2.png" alt="The settings are shown." title="Settings"><br><br>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Select <strong>Mapping</strong>, then configure the following:

                            <ul>
                                <li><strong>Auto mapping</strong>: Uncheck this option.</li>
                                <li>
                                    <strong>Columns</strong>: Define the following column mappings:

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Input columns</th>
                                                <th>Output columns</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>visitorId</td>
                                                <td>visitorId</td>
                                            </tr>
                                            <tr>
                                                <td>productId</td>
                                                <td>productId</td>
                                            </tr>
                                            <tr>
                                                <td>itemsPurchasedLast12Months</td>
                                                <td>itemsPurchasedLast12Months</td>
                                            </tr>
                                            <tr>
                                                <td>preferredProductId</td>
                                                <td>preferredProductId</td>
                                            </tr>
                                            <tr>
                                                <td>userId</td>
                                                <td>userId</td>
                                            </tr>
                                            <tr>
                                                <td>isTopProduct</td>
                                                <td>isTopProduct</td>
                                            </tr>
                                            <tr>
                                                <td>isPreferredProduct</td>
                                                <td>isPreferredProduct</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-new-sink-settings-mapping2.png" alt="The mapping settings are configured as described." title="Mapping"><br><br>

                                    <blockquote>
                                        Notice that we have chosen to keep two additional fields for the data lake sink vs. the SQL pool sink (<strong>visitorId</strong> and <strong>preferredProductId</strong>). This is because we aren’t adhering to a fixed destination schema (like a SQL table), and because we want to retain the original data as much as possible in the data lake.
                                    </blockquote>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Verify that your completed data flow looks similar to the following:

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-flow-user-profiles-complete.png" alt="The completed data flow is displayed." title="Completed data flow"><br><br>
                        </li>
                        <li>
                            Select <strong>Publish all</strong>, then <strong>Publish</strong> to save your new data flow.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/publish-all-1.png" alt="Publish all is highlighted." title="Publish all"><br><br>
                        </li>
                    </ol>

                    <h3 id="exercise-3---orchestrate-data-movement-and-transformation-in-azure-synapse-pipelines">Exercise 3 - Orchestrate data movement and transformation in Azure Synapse Pipelines</h3>

                    Tailwind Traders is familiar with Azure Data Factory (ADF) pipelines and wants to know if Azure Synapse Analytics can either integrate with ADF or has a similar capability. They want to orchestrate data ingest, transformation, and load activities across their entire data catalog, both internal and external to their data warehouse. <br><br>

                    You recommend using Synapse Pipelines, which includes over 90 built-in connectors, can load data by manual execution of the pipeline or by orchestration, supports common loading patterns, enables fully parallel loading into the data lake or SQL tables, and shares a code base with ADF.<br><br>

                    By using Synapse Pipelines, Tailwind Traders can experience the same familiar interface as ADF without having to use an orchestration service outside of Azure Synapse Analytics.

                    <h3 id="task-1-create-pipeline">Task 1: Create pipeline</h3>

                    Let’s start by executing our new Mapping Data Flow. In order to run the new data flow, we need to create a new pipeline and add a data flow activity to it.

                    <ol>
                        <li>
                            Navigate to the <strong>Integrate</strong> hub.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/integrate-hub.png" alt="The Integrate hub is highlighted." title="Integrate hub"><br><br>
                        </li>
                        <li>
                            In the <strong>+</strong> menu, select <strong>Pipeline</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-pipeline.png" alt="The new pipeline menu item is highlighted." title="New pipeline"><br><br>
                        </li>
                        <li>
                            In the <strong>General</strong> section of the <strong>Properties</strong> pane of the new data flow, update the <strong>Name</strong> to <code>Write User Profile Data to ASA</code>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-general.png" alt="The name is displayed." title="General properties"><br><br>
                        </li>
                        <li>
                            Select the <strong>Properties</strong> button to hide the pane.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-properties-button.png" alt="The button is highlighted." title="Properties button"><br><br>
                        </li>
                        <li>
                            Expand <strong>Move &amp; transform</strong> within the Activities list, then drag the <strong>Data flow</strong> activity onto the pipeline canvas.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-drag-data-flow.png" alt="Drag the data flow activity onto the pipeline canvas." title="Pipeline canvas"><br><br>
                        </li>
                        <li>
                            Under the <strong>General</strong> tab beneath the pipeline canvas set the <strong>Name</strong> to <code>write_user_profile_to_asa</code>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-data-flow-general.png" alt="The name is set on the general tab as described." title="Name on the General tab"><br><br>
                        </li>
                        <li>
                            On the <strong>Settings</strong> tab, select the <strong>write_user_profile_to_asa</strong> data flow, ensure <strong>AutoResolveIntegrationRuntime</strong> is selected. Choose the <strong>Basic (General purpose)</strong> compute type and set the core count to <strong>4 (+ 4 Driver cores)</strong>.
                        </li>
                        <li>
                            Expand <strong>Staging</strong> and configure the following:

                            <ul>
                                <li><strong>Staging linked service</strong>: Select the <strong>asadatalake<em>xxxxxxx</em></strong> linked service.</li>
                                <li>
                                    <strong>Staging storage folder</strong>: Enter <code>staging</code> / <code>userprofiles</code> (the <strong>userprofiles</strong> folder will be automatically created for you during the first pipeline run).

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-user-profiles-data-flow-settings.png" alt="The mapping data flow activity settings are configured as described." title="Mapping data flow activity settings"><br><br>

                                    The staging options under PolyBase are recommended when you have a large amount of data to move into or out of Azure Synapse Analytics. You will want to experiment with enabling and disabling staging on the data flow in a production environment to evaluate the difference in performance.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Select <strong>Publish all</strong> then <strong>Publish</strong> to save your pipeline.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/publish-all-1.png" alt="Publish all is highlighted." title="Publish all"><br><br>
                        </li>
                    </ol>

                    <h3 id="task-2-trigger-monitor-and-analyze-the-user-profile-data-pipeline">Task 2: Trigger, monitor, and analyze the user profile data pipeline</h3>

                    Tailwind Traders wants to monitor all pipeline runs and view statistics for performance tuning and troubleshooting purposes. <br><br>

                    You have decided to show Tailwind Traders how to manually trigger, monitor, then analyze a pipeline run.

                    <ol>
                        <li>
                            At the top of the pipeline, select <strong>Add trigger</strong>, then <strong>Trigger now</strong>.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-user-profiles-trigger.png" alt="The pipeline trigger option is highlighted." title="Trigger now"><br><br>
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
                            Select <strong>Pipeline runs</strong> and wait for the pipeline run to successfully complete, which may take some time. You may need to refresh the view.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-user-profiles-run-complete.png" alt="The pipeline run succeeded." title="Pipeline runs"><br><br>
                        </li>
                        <li>
                            Select the name of the pipeline to view the pipeline’s activity runs.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/select-pipeline.png" alt="The pipeline name is selected." title="Pipeline runs"><br><br>
                        </li>
                        <li>
                            Hover over the data flow activity name in the <strong>Activity runs</strong> list, then select the <strong>Data flow details</strong> icon.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-user-profiles-activity-runs.png" alt="The data flow details icon is highlighted." title="Activity runs"><br><br>
                        </li>
                        <li>
                            The data flow details displays the data flow steps and processing details. In the example below (which may be different from your results), processing time took around 44 seconds to process the SQL pool sink, and around 12 seconds to process the Data Lake sink. The <strong>Filter1</strong> output was around 1 million rows for both. You can see which activities took the longest to complete. The cluster startup time contributed over 2.5 minutes to the total pipeline run.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-user-profiles-data-flow-details.png" alt="The data flow details are displayed." title="Data flow details"><br><br>
                        </li>
                        <li>
                            Select the <strong>UserTopProductPurchasesASA</strong> sink to view its details. In the example below (which may be different from your results), you can see that 1,622,203 rows were calculated with a total of 30 partitions. It took around eight seconds to stage the data in ADLS Gen2 prior to writing the data to the SQL table. The total sink processing time in our case was around 44 seconds (4). It is also apparent that we have a <em>hot partition</em> that is significantly larger than the others. If we need to squeeze extra performance out of this pipeline, we can re-evaluate data partitioning to more evenly spread the partitions to better facilitate parallel data loading and filtering. We could also experiment with disabling staging to see if there’s a processing time difference. Finally, the size of the dedicated SQL pool plays a factor in how long it takes to ingest data into the sink.

                            <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-user-profiles-data-flow-sink-details.png" alt="The sink details are displayed." title="Sink details"><br><br>
                        </li>
                    </ol>

                    <h3 id="important-pause-your-sql-pool">Important: Pause your SQL pool</h3>

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