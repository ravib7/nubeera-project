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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 5 - Ingest and load data into the Data Warehouse</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Certifications</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                This lab teaches you how to ingest data into the data warehouse through T-SQL scripts and Synapse Analytics integration pipelines. You will learn how to load data into Synapse dedicated SQL pools with PolyBase and COPY using T-SQL. You will also learn how to use workload management along with a Copy activity in a Azure Synapse pipeline for petabyte-scale data ingestion.

                After completing this lab, you will be able to:

                <ul>
                    <li>Perform petabyte-scale ingestion with Azure Synapse Pipelines</li>
                    <li>Import data with PolyBase and COPY using T-SQL</li>
                    <li>Use data loading best practices in Azure Synapse Analytics</li>
                </ul>

                <h3 id="lab-setup-and-pre-requisites">Lab setup and pre-requisites</h3>

                Before starting this lab, you must complete <strong>Lab 4: <em>Explore, transform, and load data into the Data Warehouse using Apache Spark</em></strong>.

                This lab uses the dedicated SQL pool you created in the previous lab. You should have paused the SQL pool at the end of the previous lab, so resume it by following these instructions:

                <ol>
                    <li>Open Synapse Studio (<a href="https://web.azuresynapse.net/">https://web.azuresynapse.net/</a>).</li>
                    <li>Select the <strong>Manage</strong> hub.</li>
                    <li>
                        Select <strong>SQL pools</strong> in the left-hand menu. If the <strong>SQLPool01</strong> dedicated SQL pool is paused, hover over its name and select <strong>▷</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/resume-dedicated-sql-pool.png" alt="The resume button is highlighted on the dedicated SQL pool." title="Resume"><br><br>
                    </li>
                    <li>When prompted, select <strong>Resume</strong>. It will take a minute or two to resume the pool.</li>
                </ol>

                <blockquote>
                    <strong>Important:</strong> Once started, a dedicated SQL pool consumes credits in your Azure subscription until it is paused. If you take a break from this lab, or decide not to complete it; follow the instructions at the end of the lab to pause your SQL pool!
                </blockquote>

                <h3 id="exercise-1---import-data-with-polybase-and-copy-using-t-sql">Exercise 1 - Import data with PolyBase and COPY using T-SQL</h3>

                There are different options for loading large amounts and varying types of data into Azure Synapse Analytics, such as through T-SQL commands using a Synapse SQL Pool, and with Azure Synapse pipelines. In our scenario, Wide World Importers stores most of their raw data in a data lake and in different formats. Among the data loading options available to them, WWI’s data engineers are most comfortable using T-SQL. <br><br>

                However, even with their familiarity with SQL, there are some things to consider when loading large or disparate file types and formats. Since the files are stored in ADLS Gen2, WWI can use either PolyBase external tables or the new COPY statement. Both options enable fast and scalable data load operations, but there are some differences between the two:<br><br>

                <table>
                    <thead>
                        <tr>
                            <th>PolyBase</th>
                            <th>COPY</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Needs CONTROL permission</td>
                            <td>Relaxed permission</td>
                        </tr>
                        <tr>
                            <td>Has row width limits</td>
                            <td>No row width limit</td>
                        </tr>
                        <tr>
                            <td>No delimiters within text</td>
                            <td>Supports delimiters in text</td>
                        </tr>
                        <tr>
                            <td>Fixed line delimiter</td>
                            <td>Supports custom column and row delimiters</td>
                        </tr>
                        <tr>
                            <td>Complex to set up in code</td>
                            <td>Reduces amount of code</td>
                        </tr>
                    </tbody>
                </table>

                WWI has heard that PolyBase is generally faster than COPY, especially when working with large data sets.<br><br>

                In this exercise, you will help WWI compare ease of setup, flexibility, and speed between these loading strategies.

                <h3 id="task-1-create-staging-tables">Task 1: Create staging tables</h3>

                The <strong>Sale</strong> table has a columnstore index to optimize for read-heavy workloads. It is also used heavily for reporting and ad-hoc queries. To achieve the fastest loading speed and minimize the impact of heavy data inserts on the <strong>Sale</strong> table, WWI has decided to create a staging table for loads. <br><br>

                In this task, you will create a new staging table named <strong>SaleHeap</strong> in a new schema named <strong>wwi_staging</strong>. You will define it as a <a href="https://docs.microsoft.com/sql/relational-databases/indexes/heaps-tables-without-clustered-indexes?view=sql-server-ver15">heap</a> and use round-robin distribution. When WWI finalizes their data loading pipeline, they will load the data into <strong>SaleHeap</strong>, then insert from the heap table into <strong>Sale</strong>. Although this is a two-step process, the second step of inserting the rows to the production table does not incur data movement across the distributions.<br><br>

                You will also create a new <strong>Sale</strong> clustered columnstore table within the <strong>wwi_staging</strong> schema to compare data load speeds.<br><br>

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
                        In the query window, enter the following code to verify that the <strong>wwi_staging</strong> schema exists.

                        <pre id="codeBlock0" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> * <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> sys.schemas <span class="hljs-keyword"><span class="hljs-keyword">WHERE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">name</span></span> = <span class="hljs-string"><span class="hljs-string">'wwi_staging'</span></span>
</blockquote></pre>
                    </li>
                    <li>
                        Select <strong>Run</strong> from the toolbar menu to run the script.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/synapse-studio-query-toolbar-run.png" alt="The run button is highlighted in the query toolbar." title="Run"><br><br>

                        The results should include a single row for the <strong>wwi_staging</strong> schema, which was created when setting up the previous lab.`
                    </li>
                    <li>
                        In the query window, replace the script with the following to create the heap table:

                        <pre id="codeBlock1" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">TABLE</span></span> [wwi_staging].[SaleHeap]
 ( 
     [TransactionId] [uniqueidentifier]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [CustomerId] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [ProductId] [<span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [Quantity] [<span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [Price] [<span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>](<span class="hljs-number"><span class="hljs-number">9</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [TotalAmount] [<span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>](<span class="hljs-number"><span class="hljs-number">9</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [TransactionDate] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [ProfitAmount] [<span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>](<span class="hljs-number"><span class="hljs-number">9</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [<span class="hljs-keyword"><span class="hljs-keyword">Hour</span></span>] [tinyint]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [<span class="hljs-keyword"><span class="hljs-keyword">Minute</span></span>] [tinyint]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [StoreId] [<span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>
 )
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span>
 (
     DISTRIBUTION = ROUND_ROBIN,
     <span class="hljs-keyword"><span class="hljs-keyword">HEAP</span></span>
 )
</blockquote></pre>
                    </li>
                    <li>
                        Run the SQL script to create the table.
                    </li>
                    <li>
                        In the query window, replace the script with the following to create the <strong>Sale</strong> table in the <strong>wwi_staging</strong> schema for load comparisons:

                        <pre id="codeBlock2" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">TABLE</span></span> [wwi_staging].[Sale]
 (
     [TransactionId] [uniqueidentifier]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [CustomerId] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [ProductId] [<span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [Quantity] [<span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [Price] [<span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>](<span class="hljs-number"><span class="hljs-number">9</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [TotalAmount] [<span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>](<span class="hljs-number"><span class="hljs-number">9</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [TransactionDate] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [ProfitAmount] [<span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>](<span class="hljs-number"><span class="hljs-number">9</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [<span class="hljs-keyword"><span class="hljs-keyword">Hour</span></span>] [tinyint]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [<span class="hljs-keyword"><span class="hljs-keyword">Minute</span></span>] [tinyint]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
     [StoreId] [<span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>
 )
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span>
 (
     DISTRIBUTION = <span class="hljs-keyword"><span class="hljs-keyword">HASH</span></span> ( [CustomerId] ),
     CLUSTERED COLUMNSTORE <span class="hljs-keyword"><span class="hljs-keyword">INDEX</span></span>,
     <span class="hljs-keyword"><span class="hljs-keyword">PARTITION</span></span>
     (
         [TransactionDate] <span class="hljs-keyword"><span class="hljs-keyword">RANGE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">RIGHT</span></span> <span class="hljs-keyword"><span class="hljs-keyword">FOR</span></span> <span class="hljs-keyword"><span class="hljs-keyword">VALUES</span></span> (<span class="hljs-number"><span class="hljs-number">20100101</span></span>, <span class="hljs-number"><span class="hljs-number">20100201</span></span>, <span class="hljs-number"><span class="hljs-number">20100301</span></span>, <span class="hljs-number"><span class="hljs-number">20100401</span></span>, <span class="hljs-number"><span class="hljs-number">20100501</span></span>, <span class="hljs-number"><span class="hljs-number">20100601</span></span>, <span class="hljs-number"><span class="hljs-number">20100701</span></span>, <span class="hljs-number"><span class="hljs-number">20100801</span></span>, <span class="hljs-number"><span class="hljs-number">20100901</span></span>, <span class="hljs-number"><span class="hljs-number">20101001</span></span>, <span class="hljs-number"><span class="hljs-number">20101101</span></span>, <span class="hljs-number"><span class="hljs-number">20101201</span></span>, <span class="hljs-number"><span class="hljs-number">20110101</span></span>, <span class="hljs-number"><span class="hljs-number">20110201</span></span>, <span class="hljs-number"><span class="hljs-number">20110301</span></span>, <span class="hljs-number"><span class="hljs-number">20110401</span></span>, <span class="hljs-number"><span class="hljs-number">20110501</span></span>, <span class="hljs-number"><span class="hljs-number">20110601</span></span>, <span class="hljs-number"><span class="hljs-number">20110701</span></span>, <span class="hljs-number"><span class="hljs-number">20110801</span></span>, <span class="hljs-number"><span class="hljs-number">20110901</span></span>, <span class="hljs-number"><span class="hljs-number">20111001</span></span>, <span class="hljs-number"><span class="hljs-number">20111101</span></span>, <span class="hljs-number"><span class="hljs-number">20111201</span></span>, <span class="hljs-number"><span class="hljs-number">20120101</span></span>, <span class="hljs-number"><span class="hljs-number">20120201</span></span>, <span class="hljs-number"><span class="hljs-number">20120301</span></span>, <span class="hljs-number"><span class="hljs-number">20120401</span></span>, <span class="hljs-number"><span class="hljs-number">20120501</span></span>, <span class="hljs-number"><span class="hljs-number">20120601</span></span>, <span class="hljs-number"><span class="hljs-number">20120701</span></span>, <span class="hljs-number"><span class="hljs-number">20120801</span></span>, <span class="hljs-number"><span class="hljs-number">20120901</span></span>, <span class="hljs-number"><span class="hljs-number">20121001</span></span>, <span class="hljs-number"><span class="hljs-number">20121101</span></span>, <span class="hljs-number"><span class="hljs-number">20121201</span></span>, <span class="hljs-number"><span class="hljs-number">20130101</span></span>, <span class="hljs-number"><span class="hljs-number">20130201</span></span>, <span class="hljs-number"><span class="hljs-number">20130301</span></span>, <span class="hljs-number"><span class="hljs-number">20130401</span></span>, <span class="hljs-number"><span class="hljs-number">20130501</span></span>, <span class="hljs-number"><span class="hljs-number">20130601</span></span>, <span class="hljs-number"><span class="hljs-number">20130701</span></span>, <span class="hljs-number"><span class="hljs-number">20130801</span></span>, <span class="hljs-number"><span class="hljs-number">20130901</span></span>, <span class="hljs-number"><span class="hljs-number">20131001</span></span>, <span class="hljs-number"><span class="hljs-number">20131101</span></span>, <span class="hljs-number"><span class="hljs-number">20131201</span></span>, <span class="hljs-number"><span class="hljs-number">20140101</span></span>, <span class="hljs-number"><span class="hljs-number">20140201</span></span>, <span class="hljs-number"><span class="hljs-number">20140301</span></span>, <span class="hljs-number"><span class="hljs-number">20140401</span></span>, <span class="hljs-number"><span class="hljs-number">20140501</span></span>, <span class="hljs-number"><span class="hljs-number">20140601</span></span>, <span class="hljs-number"><span class="hljs-number">20140701</span></span>, <span class="hljs-number"><span class="hljs-number">20140801</span></span>, <span class="hljs-number"><span class="hljs-number">20140901</span></span>, <span class="hljs-number"><span class="hljs-number">20141001</span></span>, <span class="hljs-number"><span class="hljs-number">20141101</span></span>, <span class="hljs-number"><span class="hljs-number">20141201</span></span>, <span class="hljs-number"><span class="hljs-number">20150101</span></span>, <span class="hljs-number"><span class="hljs-number">20150201</span></span>, <span class="hljs-number"><span class="hljs-number">20150301</span></span>, <span class="hljs-number"><span class="hljs-number">20150401</span></span>, <span class="hljs-number"><span class="hljs-number">20150501</span></span>, <span class="hljs-number"><span class="hljs-number">20150601</span></span>, <span class="hljs-number"><span class="hljs-number">20150701</span></span>, <span class="hljs-number"><span class="hljs-number">20150801</span></span>, <span class="hljs-number"><span class="hljs-number">20150901</span></span>, <span class="hljs-number"><span class="hljs-number">20151001</span></span>, <span class="hljs-number"><span class="hljs-number">20151101</span></span>, <span class="hljs-number"><span class="hljs-number">20151201</span></span>, <span class="hljs-number"><span class="hljs-number">20160101</span></span>, <span class="hljs-number"><span class="hljs-number">20160201</span></span>, <span class="hljs-number"><span class="hljs-number">20160301</span></span>, <span class="hljs-number"><span class="hljs-number">20160401</span></span>, <span class="hljs-number"><span class="hljs-number">20160501</span></span>, <span class="hljs-number"><span class="hljs-number">20160601</span></span>, <span class="hljs-number"><span class="hljs-number">20160701</span></span>, <span class="hljs-number"><span class="hljs-number">20160801</span></span>, <span class="hljs-number"><span class="hljs-number">20160901</span></span>, <span class="hljs-number"><span class="hljs-number">20161001</span></span>, <span class="hljs-number"><span class="hljs-number">20161101</span></span>, <span class="hljs-number"><span class="hljs-number">20161201</span></span>, <span class="hljs-number"><span class="hljs-number">20170101</span></span>, <span class="hljs-number"><span class="hljs-number">20170201</span></span>, <span class="hljs-number"><span class="hljs-number">20170301</span></span>, <span class="hljs-number"><span class="hljs-number">20170401</span></span>, <span class="hljs-number"><span class="hljs-number">20170501</span></span>, <span class="hljs-number"><span class="hljs-number">20170601</span></span>, <span class="hljs-number"><span class="hljs-number">20170701</span></span>, <span class="hljs-number"><span class="hljs-number">20170801</span></span>, <span class="hljs-number"><span class="hljs-number">20170901</span></span>, <span class="hljs-number"><span class="hljs-number">20171001</span></span>, <span class="hljs-number"><span class="hljs-number">20171101</span></span>, <span class="hljs-number"><span class="hljs-number">20171201</span></span>, <span class="hljs-number"><span class="hljs-number">20180101</span></span>, <span class="hljs-number"><span class="hljs-number">20180201</span></span>, <span class="hljs-number"><span class="hljs-number">20180301</span></span>, <span class="hljs-number"><span class="hljs-number">20180401</span></span>, <span class="hljs-number"><span class="hljs-number">20180501</span></span>, <span class="hljs-number"><span class="hljs-number">20180601</span></span>, <span class="hljs-number"><span class="hljs-number">20180701</span></span>, <span class="hljs-number"><span class="hljs-number">20180801</span></span>, <span class="hljs-number"><span class="hljs-number">20180901</span></span>, <span class="hljs-number"><span class="hljs-number">20181001</span></span>, <span class="hljs-number"><span class="hljs-number">20181101</span></span>, <span class="hljs-number"><span class="hljs-number">20181201</span></span>, <span class="hljs-number"><span class="hljs-number">20190101</span></span>, <span class="hljs-number"><span class="hljs-number">20190201</span></span>, <span class="hljs-number"><span class="hljs-number">20190301</span></span>, <span class="hljs-number"><span class="hljs-number">20190401</span></span>, <span class="hljs-number"><span class="hljs-number">20190501</span></span>, <span class="hljs-number"><span class="hljs-number">20190601</span></span>, <span class="hljs-number"><span class="hljs-number">20190701</span></span>, <span class="hljs-number"><span class="hljs-number">20190801</span></span>, <span class="hljs-number"><span class="hljs-number">20190901</span></span>, <span class="hljs-number"><span class="hljs-number">20191001</span></span>, <span class="hljs-number"><span class="hljs-number">20191101</span></span>, <span class="hljs-number"><span class="hljs-number">20191201</span></span>)
     )
 )
</blockquote></pre>
                    </li>
                    <li>
                        Run the script to ceate the table.
                    </li>
                </ol>

                <h3 id="task-2-configure-and-run-polybase-load-operation">Task 2: Configure and run PolyBase load operation</h3>

                PolyBase requires the following elements:

                <ul>
                    <li>An external data source that points to the <strong>abfss</strong> path in ADLS Gen2 where the Parquet files are located</li>
                    <li>An external file format for Parquet files</li>
                    <li>An external table that defines the schema for the files, as well as the location, data source, and file format</li>
                </ul>

                <ol>
                    <li>
                        In the query window, replace the script with the following code to create the external data source. Be sure to replace <strong><em>SUFFIX</em></strong> with the unique suffix for your Azure resources in this lab:

                        <pre id="codeBlock3" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-comment"><span class="hljs-comment">-- Replace SUFFIX with the lab workspace id.</span></span>
 <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">EXTERNAL</span></span> <span class="hljs-keyword"><span class="hljs-keyword">DATA</span></span> <span class="hljs-keyword"><span class="hljs-keyword">SOURCE</span></span> ABSS
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span>
 ( <span class="hljs-keyword"><span class="hljs-keyword">TYPE</span></span> = HADOOP,
     LOCATION = <span class="hljs-string"><span class="hljs-string">'abfss://wwi-02@asadatalakeSUFFIX.dfs.core.windows.net'</span></span>
 );
</blockquote></pre>

                        You can find your suffix at the end of the Synapse Analytics workspace name:

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-lake-suffix.png" alt="The suffix is highlighted." title="Data lake suffix"><br><br>
                    </li>
                    <li>
                        Run the script to create the external data source.
                    </li>
                    <li>
                        In the query window, replace the script with the following code to create the external file format and external data table. Notice that we defined <strong>TransactionId</strong> as an <strong>nvarchar(36)</strong> field instead of <strong>uniqueidentifier</strong>. This is because external tables do not currently support <strong>uniqueidentifier</strong> columns:

                        <pre id="codeBlock4" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">EXTERNAL</span></span> <span class="hljs-keyword"><span class="hljs-keyword">FILE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">FORMAT</span></span> [ParquetFormat]
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span> (
     FORMAT_TYPE = PARQUET,
     DATA_COMPRESSION = <span class="hljs-string"><span class="hljs-string">'org.apache.hadoop.io.compress.SnappyCodec'</span></span>
 )
 <span class="hljs-keyword"><span class="hljs-keyword">GO</span></span>

 <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">SCHEMA</span></span> [wwi_external];
 GO

 <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">EXTERNAL</span></span> <span class="hljs-keyword"><span class="hljs-keyword">TABLE</span></span> [wwi_external].Sales
     (
         [TransactionId] [<span class="hljs-keyword"><span class="hljs-keyword">nvarchar</span></span>](<span class="hljs-number"><span class="hljs-number">36</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [CustomerId] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [ProductId] [<span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [Quantity] [<span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [Price] [<span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>](<span class="hljs-number"><span class="hljs-number">9</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [TotalAmount] [<span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>](<span class="hljs-number"><span class="hljs-number">9</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [TransactionDate] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [ProfitAmount] [<span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>](<span class="hljs-number"><span class="hljs-number">9</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [<span class="hljs-keyword"><span class="hljs-keyword">Hour</span></span>] [tinyint]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [<span class="hljs-keyword"><span class="hljs-keyword">Minute</span></span>] [tinyint]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [StoreId] [<span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>
     )
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span>
     (
         LOCATION = <span class="hljs-string"><span class="hljs-string">'/sale-small/Year=2019'</span></span>,  
         DATA_SOURCE = ABSS,
         FILE_FORMAT = [ParquetFormat]  
     )  
 <span class="hljs-keyword"><span class="hljs-keyword">GO</span></span>
</blockquote></pre>

                        <blockquote>
                            <strong>Note:</strong> The <em>/sale-small/Year=2019/</em> folder’s Parquet files contain <strong>4,124,857 rows</strong>.
                        </blockquote>
                    </li>
                    <li>
                        Run the script.
                    </li>
                    <li>
                        In the query window, replace the script with the following code to load the data into the <strong>wwi_staging.SalesHeap</strong> table:

                        <pre id="codeBlock5" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">INSERT</span></span> <span class="hljs-keyword"><span class="hljs-keyword">INTO</span></span> [wwi_staging].[SaleHeap]
 <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> *
 <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> [wwi_external].[Sales]
</blockquote></pre>
                    </li>
                    <li>
                        Run the script. It may take some time to complete.
                    </li>
                    <li>
                        In the query window, replace the script with the following to see how many rows were imported:

                        <pre id="codeBlock6" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> <span class="hljs-keyword"><span class="hljs-keyword">COUNT</span></span>(<span class="hljs-number"><span class="hljs-number">1</span></span>) <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> wwi_staging.SaleHeap(nolock)
</blockquote></pre>
                    </li>
                    <li>
                        Run the script. You should see a result of 4124857.
                    </li>
                </ol>

                <h3 id="task-3-configure-and-run-the-copy-statement">Task 3: Configure and run the COPY statement</h3>

                Now let’s see how to perform the same load operation with the COPY statement.

                <ol>
                    <li>
                        In the query window, replace the script with the following to truncate the heap table and load data using the COPY statement. As you did before, be sure to replace <strong><em>SUFFIX</em></strong> with your unique suffix:

                        <pre id="codeBlock7" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">TRUNCATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">TABLE</span></span> wwi_staging.SaleHeap;
 GO

 <span class="hljs-comment"><span class="hljs-comment">-- Replace SUFFIX with the unique suffix for your resources</span></span>
 COPY INTO wwi_staging.SaleHeap
 FROM 'https://asadatalakeSUFFIX.dfs.core.windows.net/wwi-02/sale-small/Year=2019'
 WITH (
     FILE_TYPE = 'PARQUET',
     COMPRESSION = 'SNAPPY'
 )
 GO
</blockquote></pre>
                    </li>
                    <li>
                        Run the script. Notice how little scripting is required to perform a similar load operation.
                    </li>
                    <li>
                        In the query window, replace the script with the following to see how many rows were imported:

                        <pre id="codeBlock8" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> <span class="hljs-keyword"><span class="hljs-keyword">COUNT</span></span>(<span class="hljs-number"><span class="hljs-number">1</span></span>) <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> wwi_staging.SaleHeap(nolock)
</blockquote></pre>
                    </li>
                    <li>
                        Run the script. Once again, 4124857 rows should have been imported. Note that both load operations copied the same amount of data in roughly the same amount of time.
                    </li>
                </ol>

                <h3 id="task-4-use-copy-to-load-text-file-with-non-standard-row-delimiters">Task 4: Use COPY to load text file with non-standard row delimiters</h3>

                One of the advantages COPY has over PolyBase is that it supports custom column and row delimiters.

                WWI has a nightly process that ingests regional sales data from a partner analytics system and saves the files in the data lake. The text files use non-standard column and row delimiters where columns are delimited by a period and rows by a comma:

                <pre id="codeBlock9" class="mt-0"><blockquote class="hljs css">20200421<span class="hljs-selector-class"><span class="hljs-selector-class">.114892</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.130282</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.159488</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.172105</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.196533</span></span>,20200420<span class="hljs-selector-class"><span class="hljs-selector-class">.109934</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.108377</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.122039</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.101946</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.100712</span></span>,20200419<span class="hljs-selector-class"><span class="hljs-selector-class">.253714</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.357583</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.452690</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.553447</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.653921</span></span>
</blockquote></pre>

                The data has the following fields: <strong>Date</strong>, <strong>NorthAmerica</strong>, <strong>SouthAmerica</strong>, <strong>Europe</strong>, <strong>Africa</strong>, and <strong>Asia</strong>. They must process this data and store it in Synapse Analytics.

                <ol>
                    <li>
                        In the query window, replace the script with the following to create the <strong>DailySalesCounts</strong> table and load data using the COPY statement. As before, be sure to replace <strong><em>SUFFIX</em></strong> with your unique suffix:

                        <pre id="codeBlock10" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">TABLE</span></span> [wwi_staging].DailySalesCounts
     (
         [<span class="hljs-built_in"><span class="hljs-built_in">Date</span></span>] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [NorthAmerica] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [SouthAmerica] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [Europe] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [Africa] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [Asia] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>
     )
 <span class="hljs-keyword"><span class="hljs-keyword">GO</span></span>

 <span class="hljs-comment"><span class="hljs-comment">-- Replace SUFFIX with the unique suffix for your resources</span></span>
 COPY <span class="hljs-keyword"><span class="hljs-keyword">INTO</span></span> wwi_staging.DailySalesCounts
 <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> <span class="hljs-string"><span class="hljs-string">'https://asadatalakeSUFFIX.dfs.core.windows.net/wwi-02/campaign-analytics/dailycounts.txt'</span></span>
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span> (
     FILE_TYPE = <span class="hljs-string"><span class="hljs-string">'CSV'</span></span>,
     FIELDTERMINATOR=<span class="hljs-string"><span class="hljs-string">'.'</span></span>,
     ROWTERMINATOR=<span class="hljs-string"><span class="hljs-string">','</span></span>
 )
 <span class="hljs-keyword"><span class="hljs-keyword">GO</span></span>
</blockquote></pre>

                        Notice the FIELDTERMINATOR` and ROWTERMINATOR properties that enable the code to correctly parse the file.
                    </li>
                    <li>
                        Run the script.
                    </li>
                    <li>
                        In the query window, replace the script with the following to view the imported data:

                        <pre id="codeBlock11" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> * <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> [wwi_staging].DailySalesCounts
 <span class="hljs-keyword"><span class="hljs-keyword">ORDER</span></span> <span class="hljs-keyword"><span class="hljs-keyword">BY</span></span> [<span class="hljs-built_in"><span class="hljs-built_in">Date</span></span>] <span class="hljs-keyword"><span class="hljs-keyword">DESC</span></span>
</blockquote></pre>
                    </li>
                    <li>
                        Run the script and view the results.
                    </li>
                    <li>
                        Try viewing the results in a Chart and set the <strong>Category column</strong> to <strong>Date</strong>:

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/daily-sales-counts-chart.png" alt="The results are displayed in a chart." title="DailySalesCounts chart"><br><br>
                    </li>
                </ol>

                <h3 id="task-5-use-polybase-to-load-text-file-with-non-standard-row-delimiters">Task 5: Use PolyBase to load text file with non-standard row delimiters</h3>

                Let’s try this same operation using PolyBase.

                <ol>
                    <li>
                        In the query window, replace the script with the following to create a new external file format, external table, and load data using PolyBase:

                        <pre id="codeBlock12" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">EXTERNAL</span></span> <span class="hljs-keyword"><span class="hljs-keyword">FILE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">FORMAT</span></span> csv_dailysales
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span> (
     FORMAT_TYPE = DELIMITEDTEXT,
     FORMAT_OPTIONS (
         FIELD_TERMINATOR = <span class="hljs-string"><span class="hljs-string">'.'</span></span>,
         <span class="hljs-keyword"><span class="hljs-keyword">DATE_FORMAT</span></span> = <span class="hljs-string"><span class="hljs-string">''</span></span>,
         USE_TYPE_DEFAULT = <span class="hljs-literal"><span class="hljs-literal">False</span></span>
     )
 );
 GO

 <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">EXTERNAL</span></span> <span class="hljs-keyword"><span class="hljs-keyword">TABLE</span></span> [wwi_external].DailySalesCounts
     (
         [<span class="hljs-built_in"><span class="hljs-built_in">Date</span></span>] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [NorthAmerica] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [SouthAmerica] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [Europe] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [Africa] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>,
         [Asia] [<span class="hljs-built_in"><span class="hljs-built_in">int</span></span>]  <span class="hljs-keyword"><span class="hljs-keyword">NOT</span></span> <span class="hljs-literal"><span class="hljs-literal">NULL</span></span>
     )
 <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span>
     (
         LOCATION = <span class="hljs-string"><span class="hljs-string">'/campaign-analytics/dailycounts.txt'</span></span>,  
         DATA_SOURCE = ABSS,
         FILE_FORMAT = csv_dailysales
     )  
 <span class="hljs-keyword"><span class="hljs-keyword">GO</span></span>
 <span class="hljs-keyword"><span class="hljs-keyword">INSERT</span></span> <span class="hljs-keyword"><span class="hljs-keyword">INTO</span></span> [wwi_staging].[DailySalesCounts]
 <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> *
 <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> [wwi_external].[DailySalesCounts]
</blockquote></pre>
                    </li>
                    <li>
                        Run the script. You should see an error similar to:

                        <em>Failed to execute query. Error: HdfsBridge::recordReaderFillBuffer - Unexpected error encountered filling record reader buffer: HadoopExecutionException: Too many columns in the line.</em>.

                        Why is this? According to <a href="https://docs.microsoft.com/sql/t-sql/statements/create-external-file-format-transact-sql?view=sql-server-ver15#limitations-and-restrictions">PolyBase documentation</a>:

                        <blockquote>
                            The row delimiter in delimited-text files must be supported by Hadoop’s LineRecordReader. That is, it must be either <strong>\r</strong>, <strong>\n</strong>, or <strong>\r\n</strong>. These delimiters are not user-configurable.
                        </blockquote>

                        This is an example of where COPY’s flexibility gives it an advantage over PolyBase.
                    </li>
                    <li>
                        Keep the script open for the next exercise.
                    </li>
                </ol>

                <h3 id="exercise-2---petabyte-scale-ingestion-with-azure-synapse-pipelines">Exercise 2 - Petabyte-scale ingestion with Azure Synapse Pipelines</h3>

                Tailwind Traders needs to ingest large volumes of sales data into the data warehouse. They want a repeatable process that can efficiently load the data. When the data loads, they want to prioritize the data movement jobs so they take priority. <br><br>

                You have decided to create a proof of concept data pipeline to import a large Parquet file, following best practices to improve the load performance.<br><br>

                There is often a level of orchestration involved when moving data into a data warehouse, coordinating movement from one or more data sources and sometimes some level of transformation. The transformation step can occur during (extract-transform-load - ETL) or after (extract-load-transform - ELT) data movement. Any modern data platform must provide a seamless experience for all the typical data wrangling actions like extractions, parsing, joining, standardizing, augmenting, cleansing, consolidating, and filtering. Azure Synapse Analytics provides two significant categories of features - data flows and data orchestrations (implemented as pipelines).

                <blockquote>
                    In this exercise, we will focus on the orchestration aspect. A later lab will focus more on the transformation (data flow) pipelines.
                </blockquote>

                <h3 id="task-1-configure-workload-management-classification">Task 1: Configure workload management classification</h3>

                When loading a large amount of data, it is best to run only one load job at a time for fastest performance. If this isn’t possible, run a minimal number of loads concurrently. If you expect a large loading job, consider scaling up your dedicated SQL pool before the load. <br><br>

                Be sure that you allocate enough memory to the pipeline session. To do this, increase the resource class of a user which has permissions to rebuild the index on this table to the recommended minimum.<br><br>

                To run loads with appropriate compute resources, create loading users designated for running loads. Assign each loading user to a specific resource class or workload group. To run a load, sign in as one of the loading users, and then run the load. The load runs with the user’s resource class.<br><br>

                <ol>
                    <li>In the SQL script query window you worked with in the previous exercise, replace the script with the following to create:
                        <ul>
                            <li>A workload group, <strong>BigDataLoad</strong>, that uses workload isolation by reserving a minimum of 50% resources with a cap of 100%</li>
                            <li>A new workload classifier, <strong>HeavyLoader</strong> that assigns the <strong>asa.sql.import01</strong> user to the <strong>BigDataLoad</strong> workload group.</li>
                        </ul>

                        At the end, we select from <strong>sys.workload_management_workload_classifiers</strong> to view all classifiers, including the one we just created:

                        <pre id="codeBlock13" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-comment"><span class="hljs-comment">-- Drop objects if they exist</span></span>
 IF EXISTS (<span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> * <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> sys.workload_management_workload_classifiers <span class="hljs-keyword"><span class="hljs-keyword">WHERE</span></span> [<span class="hljs-keyword"><span class="hljs-keyword">name</span></span>] = <span class="hljs-string"><span class="hljs-string">'HeavyLoader'</span></span>)
 <span class="hljs-keyword"><span class="hljs-keyword">BEGIN</span></span>
     <span class="hljs-keyword"><span class="hljs-keyword">DROP</span></span> WORKLOAD CLASSIFIER HeavyLoader
 <span class="hljs-keyword"><span class="hljs-keyword">END</span></span>;
    
 IF EXISTS (<span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> * <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> sys.workload_management_workload_groups <span class="hljs-keyword"><span class="hljs-keyword">WHERE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">name</span></span> = <span class="hljs-string"><span class="hljs-string">'BigDataLoad'</span></span>)
 <span class="hljs-keyword"><span class="hljs-keyword">BEGIN</span></span>
     <span class="hljs-keyword"><span class="hljs-keyword">DROP</span></span> WORKLOAD <span class="hljs-keyword"><span class="hljs-keyword">GROUP</span></span> BigDataLoad
 <span class="hljs-keyword"><span class="hljs-keyword">END</span></span>;
    
 <span class="hljs-comment"><span class="hljs-comment">--Create workload group</span></span>
 <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> WORKLOAD <span class="hljs-keyword"><span class="hljs-keyword">GROUP</span></span> BigDataLoad <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span>
   (
       MIN_PERCENTAGE_RESOURCE = <span class="hljs-number"><span class="hljs-number">50</span></span>, <span class="hljs-comment"><span class="hljs-comment">-- integer value</span></span>
       REQUEST_MIN_RESOURCE_GRANT_PERCENT = <span class="hljs-number"><span class="hljs-number">25</span></span>, <span class="hljs-comment"><span class="hljs-comment">--  (guaranteed min 4 concurrency)</span></span>
       CAP_PERCENTAGE_RESOURCE = <span class="hljs-number"><span class="hljs-number">100</span></span>
   );
    
 <span class="hljs-comment"><span class="hljs-comment">-- Create workload classifier</span></span>
 <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> WORKLOAD Classifier HeavyLoader <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span>
 (
     Workload_Group =<span class="hljs-string"><span class="hljs-string">'BigDataLoad'</span></span>,
     MemberName=<span class="hljs-string"><span class="hljs-string">'asa.sql.import01'</span></span>,
     IMPORTANCE = <span class="hljs-keyword"><span class="hljs-keyword">HIGH</span></span>
 );
    
 <span class="hljs-comment"><span class="hljs-comment">-- View classifiers</span></span>
 <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> * <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> sys.workload_management_workload_classifiers
</blockquote></pre>
                    </li>
                    <li>
                        Run the script, and if necessary, switch the results to <strong>Table</strong> view. You should see the new <strong>HeavyLoader</strong> classifier in the query results:

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/workload-classifiers-query-results.png" alt="The new workload classifier is highlighted." title="Workload Classifiers query results"><br><br>
                    </li>
                    <li>
                        Navigate to the <strong>Manage</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/manage-hub.png" alt="The Manage menu item is highlighted." title="Manage hub"><br><br>
                    </li>
                    <li>
                        Select <strong>Linked services</strong> in the left-hand menu, then select the <strong>sqlpool01_import01</strong> linked service (if this is not listed, use the <strong>↻</strong> button at the top right to refresh the view).

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/linked-services.png" alt="Linked services is displayed." title="Linked services"><br><br>
                    </li>
                    <li>
                        Notice that the user name for the dedicated SQL pool connection is the <strong>asa.sql.import01</strong> user you added to the <strong>HeavyLoader</strong> classifier. We will use this linked service in our new pipeline to reserve resources for the data load activity.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sqlpool01-import01-linked-service.png" alt="The user name is highlighted." title="Linked service"><br><br>
                    </li>
                    <li>Select <strong>Cancel</strong> to close the dialog, and select <strong>Discard changes</strong> if prompted.</li>
                </ol>

                <h3 id="task-2-create-pipeline-with-copy-activity">Task 2: Create pipeline with copy activity</h3>

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
                        In the <strong>Properties</strong> pane for the new pipeline, set the <strong>Name</strong> of the pipeline to <strong><code>Copy December Sales</code></strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-copy-sales-name.png" alt="The Name property is highlighted." title="Properties"><br><br>

                        <blockquote>
                            <strong>Tip</strong>: After setting the name, hide the <strong>Properties</strong> pane.
                        </blockquote>
                    </li>
                    <li>
                        Expand <strong>Move &amp; transform</strong> within the Activities list, then drag the <strong>Copy data</strong> activity onto the pipeline canvas.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-copy-sales-drag-copy-data.png" alt="Copy data is dragged to the canvas" title="Pipeline canvas"><br><br>
                    </li>
                    <li>
                        Select the <strong>Copy data</strong> activity on the canvas. Then, beneath the canvas, on the <strong>General</strong> tab, set the <strong>Name</strong> of the activity to <strong><code>Copy Sales</code></strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-copy-sales-general.png" alt="The name is highlighted in the general tab." title="General tab"><br><br>
                    </li>
                    <li>
                        Select the <strong>Source</strong> tab, then select <strong>+ New</strong> to create a new source dataset.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-copy-sales-source-new.png" alt="The new button is highlighted." title="Source tab"><br><br>
                    </li>
                    <li>
                        Select the <strong>Azure Data Lake Storage Gen2</strong> data store, then select <strong>Continue</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-dataset-adlsgen2.png" alt="ADLS Gen2 is selected." title="New dataset"><br><br>
                    </li>
                    <li>
                        Choose the <strong>Parquet</strong> format, then select <strong>Continue</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-dataset-adlsgen2-parquet.png" alt="The Parquet format is highlighted." title="Select format"><br><br>
                    </li>
                    <li>In the <strong>Set properties</strong> pane:
                        <ol>
                            <li>Set the name to <strong><code>asal400_december_sales</code></strong>.</li>
                            <li>Select the <strong>asadatalake<em>xxxxxxx</em></strong> linked service.</li>
                            <li>Browse to the <strong>wwi-02/campaign-analytics/sale-20161230-snappy.parquet</strong> file</li>
                            <li>Select <strong>From sample file</strong> for schema import.</li>
                            <li>Browse to <strong>C:\dp-203\data-engineering-ilt-deployment\Allfiles\samplefiles\sale-small-20100102-snappy.parquet</strong> in the <strong>Select file</strong> field.</li>
                            <li>Select <strong>OK</strong>.</li>
                        </ol>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-copy-sales-source-dataset.png" alt="The properties are displayed." title="Dataset properties"><br><br>

                        We downloaded a sample Parquet file that has the exact same schema, but is much smaller. This is because the file we are copying is too large to automatically infer the schema in the copy activity source settings.
                    </li>
                    <li>
                        Select the <strong>Sink</strong> tab, then select <strong>+ New</strong> to create a new sink dataset.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-copy-sales-sink-new.png" alt="The new button is highlighted." title="Sink tab"><br><br>
                    </li>
                    <li>
                        Select the <strong>Azure Synapse Analytics</strong> data store, then select <strong>Continue</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-dataset-asa.png" alt="Azure Synapse Analytics is selected." title="New dataset"><br><br>
                    </li>
                    <li>In the <strong>Set properties</strong> pane:
                        <ol>
                            <li>Set the <strong>Name</strong> to <strong><code>asal400_saleheap_asa</code></strong></li>
                            <li>Select the <strong>sqlpool01_import01</strong> linked service.</li>
                            <li>Select the <strong>wwi_perf.Sale_Heap</strong> table</li>
                            <li>Select <strong>OK</strong>.</li>
                        </ol>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-copy-sales-sink-dataset.png" alt="The properties are displayed." title="Dataset properties"><br><br>
                    </li>
                    <li>
                        In the <strong>Sink</strong> tab, select the <strong>Copy command</strong> copy method and enter the following code in the pre-copy script to clear the table before import:

                        <pre id="codeBlock14" class="mt-0"><blockquote class="hljs sql"><span class="hljs-keyword"><span class="hljs-keyword">TRUNCATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">TABLE</span></span> wwi_perf.Sale_Heap
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-copy-sales-sink-settings.png" alt="The described settings are displayed." title="Sink"><br><br>

                        The fastest and most scalable way to load data is through PolyBase or the COPY statement, and the COPY statement provides the most flexibility for high-throughput data ingestion into the SQL pool.
                    </li>
                    <li>
                        Select the <strong>Mapping</strong> tab and select <strong>Import schemas</strong> to create mappings for each source and destination field. Select <strong>TransactionDate</strong> in the source column to map it to the <strong>TransactionDateId</strong> destination column.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-copy-sales-sink-mapping.png" alt="The mapping is displayed." title="Mapping"><br><br>
                    </li>
                    <li>
                        Select the <strong>Settings</strong> tab and set the <strong>Data integration unit</strong> to <strong>8</strong>. This is required due to the large size of the source Parquet file.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-copy-sales-settings.png" alt="The data integration unit value is set to 8." title="Settings"><br><br>
                    </li>
                    <li>
                        Select <strong>Publish all</strong>, then <strong>Publish</strong> to save your new resources.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/publish-all-1.png" alt="Publish all is highlighted." title="Publish all"><br><br>
                    </li>
                    <li>
                        Select <strong>Add trigger</strong>, then <strong>Trigger now</strong>. Then select <strong>OK</strong> in the <strong>Pipeline run</strong> pane to start the pipeline.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/copy-pipeline-trigger-now.png" alt="Trigger now." title="Trigger now"><br><br>
                    </li>
                    <li>
                        Navigate to the <strong>Monitor</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/monitor-hub.png" alt="The Monitor hub menu item is selected." title="Monitor hub"><br><br>
                    </li>
                    <li>
                        Select <strong>Pipeline Runs</strong>. You can see the status of your pipeline run here. Note that you may need to refresh the view. Once the pipeline run is complete, you can query the <strong>wwi_perf.Sale_Heap</strong> table to view the imported data.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-copy-sales-pipeline-run.png" alt="The completed pipeline run is displayed." title="Pipeline runs"><br><br>
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