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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 2 - Run interactive queries using serverless SQL pools</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Certifications</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                In this lab, you will learn how to work with files stored in the data lake and external file sources, through T-SQL statements executed by a serverless SQL pool in Azure Synapse Analytics. You will query Parquet files stored in a data lake, as well as CSV files stored in an external data store. Next, you will create Azure Active Directory security groups and enforce access to files in the data lake through Role-Based Access Control (RBAC) and Access Control Lists (ACLs). <br><br>

                After completing this lab, you will be able to:

                <ul>
                    <li>Query Parquet data with serverless SQL pools</li>
                    <li>Create external tables for Parquet and CSV files</li>
                    <li>Create views with serverless SQL pools</li>
                    <li>Secure access to data in a data lake when using serverless SQL pools</li>
                    <li>Configure data lake security using Role-Based Access Control (RBAC) and Access Control Lists (ACLs)</li>
                </ul>

                <h3 id="lab-setup-and-pre-requisites">Lab setup and pre-requisites</h3>

                Before starting this lab, ensure you have successfully completed the setup steps to create your lab environment.

                <h3 id="exercise-1-querying-a-data-lake-store-using-serverless-sql-pools-in-azure-synapse-analytics">Exercise 1: Querying a Data Lake Store using serverless SQL pools in Azure Synapse Analytics</h3>

                Understanding data through data exploration is one of the core challenges faced today by data engineers and data scientists as well. Depending on the underlying structure of the data as well as the specific requirements of the exploration process, different data processing engines will offer varying degrees of performance, complexity, and flexibility. <br><br>

                In Azure Synapse Analytics, you can use either SQL, Apache Spark for Synapse, or both. Which service you use mostly depends on your personal preference and expertise. When conducting data engineering tasks, both options can be equally valid in many cases. However, there are certain situations where harnessing the power of Apache Spark can help you overcome problems with the source data. This is because in a Synapse Notebook, you can import from a large number of free libraries that add functionality to your environment when working with data. There are other situations where it is much more convenient and faster using serveless SQL pool to explore the data, or to expose data in the data lake through a SQL view that can be accessed from external tools, like Power BI. <br><br>

                In this exercise, you will explore the data lake using both options.

                <h3 id="task-1-query-sales-parquet-data-with-serverless-sql-pools">Task 1: Query sales Parquet data with serverless SQL pools</h3>

                When you query Parquet files using serverless SQL pools, you can explore the data with T-SQL syntax.

                <ol>
                    <li>
                        Open Synapse Studio (<a href="https://web.azuresynapse.net/">https://web.azuresynapse.net/</a>), and then navigate to the <strong>Data</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub.png" alt="The Data menu item is highlighted." title="Data hub"><br><br>
                    </li>
                    <li>In the pane on the left, on the <strong>Linked</strong> tab, expand <strong>Azure Data Lake Storage Gen2</strong> and the <strong>asaworkspace<em>xxxxxx</em></strong> primary ADLS Gen2 account, and select the <strong>wwi-02</strong> container</li>
                    <li>
                        In the <strong>sale-small/Year=2019/Quarter=Q4/Month=12/Day=20191231</strong> folder, right-click the <strong>sale-small-20191231-snappy.parquet</strong> file, select <strong>New SQL script</strong>, and then select <strong>Select TOP 100 rows</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub-parquet-select-rows.png" alt="The Data hub is displayed with the options highlighted." title="Select TOP 100 rows"><br><br>
                    </li>
                    <li>
                        Ensure <strong>Built-in</strong> is selected in the <strong>Connect to</strong> dropdown list above the query window, and then run the query. Data is loaded by the serverless SQL endpoint and processed as if was coming from any regular relational database.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/built-in-selected.png" alt="The Built-in connection is highlighted." title="SQL Built-in"><br><br>

                        The cell output shows the query results from the Parquet file.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sql-on-demand-output.png" alt="The cell output is displayed." title="SQL output"><br><br>
                    </li>
                    <li>
                        Modify the SQL query to perform aggregates and grouping operations to better understand the data. Replace the query with the following, replacing <em>SUFFIX</em> with the unique suffix for your Azure Data Lake store and making sure that the file path in the OPENROWSET function matches the current file path:

                        <pre id="codeBlock0" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span>
     TransactionDate, ProductId,
         <span class="hljs-keyword"><span class="hljs-keyword">CAST</span></span>(<span class="hljs-keyword"><span class="hljs-keyword">SUM</span></span>(ProfitAmount) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> <span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>(<span class="hljs-number"><span class="hljs-number">18</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> [(<span class="hljs-keyword"><span class="hljs-keyword">sum</span></span>) Profit],
         <span class="hljs-keyword"><span class="hljs-keyword">CAST</span></span>(<span class="hljs-keyword"><span class="hljs-keyword">AVG</span></span>(ProfitAmount) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> <span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>(<span class="hljs-number"><span class="hljs-number">18</span></span>,<span class="hljs-number"><span class="hljs-number">2</span></span>)) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> [(<span class="hljs-keyword"><span class="hljs-keyword">avg</span></span>) Profit],
         <span class="hljs-keyword"><span class="hljs-keyword">SUM</span></span>(Quantity) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> [(<span class="hljs-keyword"><span class="hljs-keyword">sum</span></span>) Quantity]
 <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span>
     OPENROWSET(
         <span class="hljs-keyword"><span class="hljs-keyword">BULK</span></span> <span class="hljs-string"><span class="hljs-string">'https://asadatalakeSUFFIX.dfs.core.windows.net/wwi-02/sale-small/Year=2019/Quarter=Q4/Month=12/Day=20191231/sale-small-20191231-snappy.parquet'</span></span>,
         <span class="hljs-keyword"><span class="hljs-keyword">FORMAT</span></span>=<span class="hljs-string"><span class="hljs-string">'PARQUET'</span></span>
     ) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> [r] <span class="hljs-keyword"><span class="hljs-keyword">GROUP</span></span> <span class="hljs-keyword"><span class="hljs-keyword">BY</span></span> r.TransactionDate, r.ProductId;
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sql-serverless-aggregates.png" alt="The T-SQL query above is displayed within the query window." title="Query window"><br><br>
                    </li>
                    <li>
                        Let’s move on from this single file from 2019 and transition to a newer data set. We want to figure out how many records are contained within the Parquet files for all 2019 data. This information is important for planning how we optimize for importing the data into Azure Synapse Analytics. To do this, we’ll replace the query with the following (be sure to update the suffix of your data lake in the BULK statement):

                        <pre id="codeBlock1" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span>
     <span class="hljs-keyword"><span class="hljs-keyword">COUNT</span></span>(*)
 <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span>
     OPENROWSET(
         <span class="hljs-keyword"><span class="hljs-keyword">BULK</span></span> <span class="hljs-string"><span class="hljs-string">'https://asadatalakeSUFFIX.dfs.core.windows.net/wwi-02/sale-small/Year=2019/*/*/*/*'</span></span>,
         <span class="hljs-keyword"><span class="hljs-keyword">FORMAT</span></span>=<span class="hljs-string"><span class="hljs-string">'PARQUET'</span></span>
     ) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> [r];
</blockquote></pre>

                        <blockquote>
                            Notice how we updated the path to include all Parquet files in all subfolders of <em>sale-small/Year=2019</em>.
                        </blockquote>

                        The output should be <strong>4124857</strong> records.
                    </li>
                </ol>

                <h3 id="task-2-create-an-external-table-for-2019-sales-data">Task 2: Create an external table for 2019 sales data</h3>

                Rather than creating a script with OPENROWSET and a path to the root 2019 folder every time we want to query the Parquet files, we can create an external table.

                <ol>
                    <li>In Synapse Studio, return to the <strong>wwi-02</strong> tab, which should still be showing the contents of the <em>sale-small/Year=2019/Quarter=Q4/Month=12/Day=20191231</em> folder.</li>
                    <li>Right-click the <strong>sale-small-20191231-snappy.parquet</strong> file, select <strong>New SQL script</strong>, and then select <strong>Create external table</strong>. In the New external table dialog box, click <strong>Continue</strong>.</li>
                    <li>
                        Make sure <strong>Built-in</strong> is selected for the <strong>SQL pool</strong>. Then, under <strong>Select a database</strong>, select <strong>+ New</strong> and create a database named <code>demo</code>, and click <strong>Create</strong>. For <strong>External table name</strong>, enter <code>All2019Sales</code>. Finally, under <strong>Create external table</strong>, ensure <strong>Using SQL script</strong> is selected, and then select <strong>Open Script</strong> to generate the SQL script.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/create-external-table-form.png" alt="The create external table form is displayed." title="Create external table"><br><br>

                        <blockquote>
                            <strong>Note</strong>: The <strong>Properties</strong> pane for the script open automatically. You can close it by using the <strong>Properties</strong> button above it on the right to make it easier to work with the script.
                        </blockquote>

                        The generated script contains the following components:

                        <ul>
                            <li>
                                <strong>1)</strong> The script begins with creating the <em>SynapseParquetFormat</em> external file format with a <em>FORMAT_TYPE</em> of <em>PARQUET</em>.
                            </li>
                            <li>
                                <strong>2)</strong> Next, the external data source is created, pointing to the <em>wwi-02</em> container of the data lake storage account.
                            </li>
                            <li>
                                <strong>3)</strong> The CREATE EXTERNAL TABLE WITH statement specifies the file location and refers to the new external file format and data source created above.
                            </li>
                            <li>
                                <strong>4)</strong> Finally, we select the top 100 results from the <code>2019Sales</code> external table.
                            </li>
                        </ul>
                    </li>
                </ol>

                4 In the CREATE EXTERNAL TABLE statement, in the <strong>[TransactionId] varchar(8000)</strong> line, change 8000 to 4000 and add <code>COLLATE Latin1_General_100_BIN2_UTF8</code>; and replace the <em>LOCATION</em> value with <code>sale-small/Year=2019/*/*/*/*.parquet</code> so that the statement becomes similar to the following (except with your unique resource SUFFIX):

                <pre id="codeBlock2" class="mt-0"><blockquote class="language-sql hljs"><span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">EXTERNAL</span></span> <span class="hljs-keyword"><span class="hljs-keyword">TABLE</span></span> All2019Sales (
    [TransactionId] <span class="hljs-built_in"><span class="hljs-built_in">varchar</span></span>(<span class="hljs-number"><span class="hljs-number">8000</span></span>) <span class="hljs-keyword"><span class="hljs-keyword">COLLATE</span></span> Latin1_General_100_BIN2_UTF8,
    [CustomerId] <span class="hljs-built_in"><span class="hljs-built_in">int</span></span>,
    [ProductId] <span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>,
    [Quantity] <span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>,
    [Price] <span class="hljs-built_in"><span class="hljs-built_in">numeric</span></span>(<span class="hljs-number"><span class="hljs-number">38</span></span>,<span class="hljs-number"><span class="hljs-number">18</span></span>),
    [TotalAmount] <span class="hljs-built_in"><span class="hljs-built_in">numeric</span></span>(<span class="hljs-number"><span class="hljs-number">38</span></span>,<span class="hljs-number"><span class="hljs-number">18</span></span>),  
    [TransactionDate] <span class="hljs-built_in"><span class="hljs-built_in">int</span></span>,
    [ProfitAmount] <span class="hljs-built_in"><span class="hljs-built_in">numeric</span></span>(<span class="hljs-number"><span class="hljs-number">38</span></span>,<span class="hljs-number"><span class="hljs-number">18</span></span>),
    [<span class="hljs-keyword"><span class="hljs-keyword">Hour</span></span>] <span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>,
    [<span class="hljs-keyword"><span class="hljs-keyword">Minute</span></span>] <span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>,
    [StoreId] <span class="hljs-built_in"><span class="hljs-built_in">smallint</span></span>
    )
    <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span> (
    LOCATION = <span class="hljs-string"><span class="hljs-string">'sale-small/Year=2019/*/*/*/*.parquet'</span></span>,
    DATA_SOURCE = [wwi<span class="hljs-number"><span class="hljs-number">-02</span></span>_asadatalakeSUFFIX_dfs_core_windows_net],
    FILE_FORMAT = [SynapseParquetFormat]
    )
<span class="hljs-keyword"><span class="hljs-keyword">GO</span></span>
</blockquote></pre>

                <ol>
                    <li>
                        Make sure the script is connected to the serverless SQL pool (<strong>Built-in</strong>) and that the <strong>demo</strong> database is selected in the <strong>Use database</strong> list (use the <strong>…</strong> button to see the list if the pane is too small to display it, and then use the ↻ button to refresh the list if needed).

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/built-in-and-demo.png" alt="The Built-in pool and demo database are selected." title="Script toolbar"><br><br>
                    </li>
                    <li>
                        Run the modified script.

                        After running the script, we can see the output of the SELECT query against the <strong>All2019Sales</strong> external table. This displays the first 100 records from the Parquet files located in the <em>YEAR=2019</em> folder.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/create-external-table-output.png" alt="The query output is displayed." title="Query output"><br><br>

                        <blockquote>
                            <strong>Tip</strong>: If an error occurs because of a mistake in your code, you should delete any resources that were successfully created before trying again. You can do this by running the appropriate DROP statements, or by switching to the <strong>Workspace</strong> tab, refreshing the list of <strong>Databases</strong>, and deleting the objects in the <strong>demo</strong> database.
                        </blockquote>
                    </li>
                </ol>

                <h3 id="task-3-create-an-external-table-for-csv-files">Task 3: Create an external table for CSV files</h3>

                Tailwind Traders found an open data source for country population data that they want to use. They do not want to merely copy the data since it is regularly updated with projected populations in future years.

                You decide to create an external table that connects to the external data source.

                <ol>
                    <li>
                        Replace the SQL script you ran in the previous task with the following code:

                        <pre id="codeBlock3" class="mt-0"><blockquote class="language-sql hljs"> IF NOT EXISTS (<span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> * <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> sys.symmetric_keys) <span class="hljs-keyword"><span class="hljs-keyword">BEGIN</span></span>
     <span class="hljs-keyword"><span class="hljs-keyword">declare</span></span> @pasword <span class="hljs-keyword"><span class="hljs-keyword">nvarchar</span></span>(<span class="hljs-number"><span class="hljs-number">400</span></span>) = <span class="hljs-keyword"><span class="hljs-keyword">CAST</span></span>(newid() <span class="hljs-keyword"><span class="hljs-keyword">as</span></span> <span class="hljs-built_in"><span class="hljs-built_in">VARCHAR</span></span>(<span class="hljs-number"><span class="hljs-number">400</span></span>));
     EXEC('<span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">MASTER</span></span> <span class="hljs-keyword"><span class="hljs-keyword">KEY</span></span> ENCRYPTION <span class="hljs-keyword"><span class="hljs-keyword">BY</span></span> <span class="hljs-keyword"><span class="hljs-keyword">PASSWORD</span></span> = <span class="hljs-string"><span class="hljs-string">''' + @pasword + '''')
 END

 CREATE DATABASE SCOPED CREDENTIAL [sqlondemand]
 WITH IDENTITY='</span></span><span class="hljs-keyword"><span class="hljs-keyword">SHARED</span></span> <span class="hljs-keyword"><span class="hljs-keyword">ACCESS</span></span> SIGNATURE<span class="hljs-string"><span class="hljs-string">',  
 SECRET = '</span></span>sv=<span class="hljs-number"><span class="hljs-number">2018</span></span><span class="hljs-number"><span class="hljs-number">-03</span></span><span class="hljs-number"><span class="hljs-number">-28</span></span>&amp;ss=bf&amp;srt=sco&amp;sp=rl&amp;st=<span class="hljs-number"><span class="hljs-number">2019</span></span><span class="hljs-number"><span class="hljs-number">-10</span></span><span class="hljs-number"><span class="hljs-number">-14</span></span>T12%<span class="hljs-number"><span class="hljs-number">3</span></span>A10%<span class="hljs-number"><span class="hljs-number">3</span></span>A25Z&amp;se=<span class="hljs-number"><span class="hljs-number">2061</span></span><span class="hljs-number"><span class="hljs-number">-12</span></span><span class="hljs-number"><span class="hljs-number">-31</span></span>T12%<span class="hljs-number"><span class="hljs-number">3</span></span>A10%<span class="hljs-number"><span class="hljs-number">3</span></span>A00Z&amp;sig=KlSU2ullCscyTS0An0nozEpo4tO5JAgGBvw%<span class="hljs-number"><span class="hljs-number">2</span></span>FJX2lguw%<span class="hljs-number"><span class="hljs-number">3</span></span>D<span class="hljs-string"><span class="hljs-string">'
 GO

 -- Create external data source secured using credential
 CREATE EXTERNAL DATA SOURCE SqlOnDemandDemo WITH (
     LOCATION = '</span></span>https://sqlondemandstorage.blob.core.windows.net<span class="hljs-string"><span class="hljs-string">',
     CREDENTIAL = sqlondemand
 );
 GO

 CREATE EXTERNAL FILE FORMAT QuotedCsvWithHeader
 WITH (  
     FORMAT_TYPE = DELIMITEDTEXT,
     FORMAT_OPTIONS (
         FIELD_TERMINATOR = '</span></span>,<span class="hljs-string"><span class="hljs-string">',
         STRING_DELIMITER = '</span></span><span class="hljs-string"><span class="hljs-string">"',
         FIRST_ROW = 2
     )
 );
 GO

 CREATE EXTERNAL TABLE [population]
 (
     [country_code] VARCHAR (5) COLLATE Latin1_General_BIN2,
     [country_name] VARCHAR (100) COLLATE Latin1_General_BIN2,
     [year] smallint,
     [population] bigint
 )
 WITH (
     LOCATION = 'csv/population/population.csv',
     DATA_SOURCE = SqlOnDemandDemo,
     FILE_FORMAT = QuotedCsvWithHeader
 );
 GO
</span></span></blockquote></pre>

                        At the top of the script, we create a MASTER KEY with a random password. Next, we create a database-scoped credential for the containers in the external storage account using a shared access signature (SAS) for delegated access. This credential is used when we create the <strong>SqlOnDemandDemo</strong> external data source that points to the location of the external storage account that contains the population data:

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/script1.png" alt="The script is displayed." title="Create master key and credential"><br><br>

                        <blockquote>
                            Database-scoped credentials are used when any principal calls the OPENROWSET function with a DATA_SOURCE or selects data from an external table that doesn’t access public files. The database scoped credential doesn’t need to match the name of storage account because it will be explicitly used in the DATA SOURCE that defines the storage location.
                        </blockquote>

                        In the next part of the script, we create an external file format called <strong>QuotedCsvWithHeader</strong>. Creating an external file format is a prerequisite for creating an External Table. By creating an External File Format, you specify the actual layout of the data referenced by an external table. Here we specify the CSV field terminator, string delimiter, and set the FIRST_ROW value to 2 since the file contains a header row:

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/script2.png" alt="The script is displayed." title="Create external file format"><br><br>

                        Finally, at the bottom of the script, we create an external table named <strong>population</strong>. The WITH clause specifies the relative location of the CSV file, points to the data source created above, as well as the <em>QuotedCsvWithHeader</em> file format:

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/script3.png" alt="The script is displayed." title="Create external table"><br><br>
                    </li>
                    <li>
                        Run the script.

                        Note that there are no data results for this query.
                    </li>
                    <li>
                        Replace the SQL script with the following to select from the population external table, filtered by 2019 data where the population is greater than 100 million:

                        <pre id="codeBlock4" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> [country_code]
     ,[country_name]
     ,[<span class="hljs-keyword"><span class="hljs-keyword">year</span></span>]
     ,[population]
 <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> [dbo].[population]
 <span class="hljs-keyword"><span class="hljs-keyword">WHERE</span></span> [<span class="hljs-keyword"><span class="hljs-keyword">year</span></span>] = <span class="hljs-number"><span class="hljs-number">2019</span></span> <span class="hljs-keyword"><span class="hljs-keyword">and</span></span> population &gt; <span class="hljs-number"><span class="hljs-number">100000000</span></span>
</blockquote></pre>
                    </li>
                    <li>Run the script.</li>
                    <li>
                        In the query results, select the <strong>Chart</strong> view, then configure it as follows:

                        <ul>
                            <li>
                                <strong>Chart type</strong>: Bar
                            </li>
                            <li>
                                <strong>Category column</strong>: country_name`
                            </li>
                            <li>
                                <strong>Legend (series) columns</strong>: population
                            </li>
                            <li>
                                <strong>Legend position</strong>: bottom - center
                            </li>
                        </ul>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/population-chart.png" alt="The chart is displayed." title="Population chart"><br><br>
                    </li>
                </ol>

                <h3 id="task-4-create-a-view-with-a-serverless-sql-pool">Task 4: Create a view with a serverless SQL pool</h3>

                Let’s create a view to wrap a SQL query. Views allow you to reuse queries and are needed if you want to use tools, such as Power BI, in conjunction with serverless SQL pools.

                <ol>
                    <li>
                        In the <strong>Data</strong> hub, on the <strong>Linked</strong> tab, in the <strong>Azure Data Lake Storage Gen2/asaworkspace<em>xxxxxx</em>/ wwi-02</strong> container, avigate to the <strong>customer-info</strong> folder. Then right-click the <strong>customerinfo.csv</strong> file, select <strong>New SQL script</strong>, and then <strong>Select TOP 100 rows</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/customerinfo-select-rows.png" alt="The Data hub is displayed with the options highlighted." title="Select TOP 100 rows"><br><br>
                    </li>
                    <li>
                        Select <strong>Run</strong> to execute the script, and notice that the first row of the CSV file is the column header row. The columns in the resultset are named <strong>C1</strong>, <strong>C2</strong>, and so on.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/select-customerinfo.png" alt="The CSV results are displayed." title="customerinfo.csv file"><br><br>
                    </li>
                    <li>
                        Update the script with the following code and <strong>make sure you replace SUFFIX</strong> in the OPENROWSET BULK path with your unique resource suffix.

                        <pre id="codeBlock5" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">CREATE</span></span> <span class="hljs-keyword"><span class="hljs-keyword">VIEW</span></span> CustomerInfo <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span>
     <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> * 
 <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> OPENROWSET(
         <span class="hljs-keyword"><span class="hljs-keyword">BULK</span></span> <span class="hljs-string"><span class="hljs-string">'https://asadatalakeSUFFIX.dfs.core.windows.net/wwi-02/customer-info/customerinfo.csv'</span></span>,
         <span class="hljs-keyword"><span class="hljs-keyword">FORMAT</span></span> = <span class="hljs-string"><span class="hljs-string">'CSV'</span></span>,
         PARSER_VERSION=<span class="hljs-string"><span class="hljs-string">'2.0'</span></span>,
         FIRSTROW=<span class="hljs-number"><span class="hljs-number">2</span></span>
     )
     <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span> (
     [UserName] <span class="hljs-keyword"><span class="hljs-keyword">NVARCHAR</span></span> (<span class="hljs-number"><span class="hljs-number">50</span></span>),
     [Gender] <span class="hljs-keyword"><span class="hljs-keyword">NVARCHAR</span></span> (<span class="hljs-number"><span class="hljs-number">10</span></span>),
     [Phone] <span class="hljs-keyword"><span class="hljs-keyword">NVARCHAR</span></span> (<span class="hljs-number"><span class="hljs-number">50</span></span>),
     [Email] <span class="hljs-keyword"><span class="hljs-keyword">NVARCHAR</span></span> (<span class="hljs-number"><span class="hljs-number">100</span></span>),
     [CreditCard] <span class="hljs-keyword"><span class="hljs-keyword">NVARCHAR</span></span> (<span class="hljs-number"><span class="hljs-number">50</span></span>)
     ) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> [r];
     GO

 <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> * <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> CustomerInfo;
 GO
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/create-view-script.png" alt="The script is displayed." title="Create view script"><br><br>
                    </li>
                    <li>
                        In the <strong>Use database</strong> list, ensure <strong>demo</strong> is still selected, and then run the script.

                        We just created the view to wrap the SQL query that selects data from the CSV file, then selected rows from the view:

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/create-view-script-results.png" alt="The query results are displayed." title="Query results"><br><br>

                        Notice that the first row no longer contains the column headers. This is because we used the FIRSTROW=2 setting in the OPENROWSET statement when we created the view.
                    </li>
                    <li>
                        In the <strong>Data</strong> hub, select the <strong>Workspace</strong> tab. Then select the actions ellipses <strong>(…)</strong> to the right of the Databases group and select <strong>↻ Refresh</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/refresh-databases.png" alt="The refresh button is highlighted." title="Refresh databases"><br><br>
                    </li>
                    <li>
                        Expand the <strong>demo</strong> SQL database.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/demo-database.png" alt="The demo database is displayed." title="Demo database"><br><br>

                        The database contains the following objects that we created in our earlier steps:

                        <ul>
                            <li>
                                <strong>1) External tables</strong>: <em>All2019Sales</em> and <em>population</em>.
                            </li>
                            <li>
                                <strong>2) External data sources</strong>: <em>SqlOnDemandDemo</em> and <em>wwi-02_asadatalakeinadayXXX_dfs_core_windows_net</em>.
                            </li>
                            <li>
                                <strong>3) External file formats</strong>: <em>QuotedCsvWithHeader</em> and <em>SynapseParquetFormat</em>.
                            </li>
                            <li>
                                <strong>4) Views</strong>: <em>CustomerInfo</em>
                            </li>
                        </ul>
                    </li>
                </ol>

                <h3 id="exercise-2---securing-access-to-data-using-a-serverless-sql-pool-in-azure-synapse-analytics">Exercise 2 - Securing access to data using a serverless SQL pool in Azure Synapse Analytics</h3>

                Tailwind Traders wants to enforce that any kind of modifications to sales data can happen in the current year only, while allowing all authorized users to query the entirety of data. They have a small group of admins who can modify historic data if needed.

                <ul>
                    <li>Tailwind Traders should create a security group in AAD, for example called <strong>tailwind-history-owners</strong>, with the intent that all users who belong to this group will have permissions to modify data from previous years.</li>
                    <li>The <strong>tailwind-history-owners</strong> security group needs to be assigned to the Azure Storage built-in RBAC role <strong>Storage Blob Data Owner</strong> for the Azure Storage account containing the data lake. This allows AAD user and service principals that are added to this role to have the ability to modify all data from previous years.</li>
                    <li>They need to add the user security principals who will have have permissions to modify all historical data to the <strong>tailwind-history-owners</strong> security group.</li>
                    <li>Tailwind Traders should create another security group in AAD, for example called <strong>tailwind-readers</strong>, with the intent that all users who belong to this group will have permissions to read all contents of the file system (<strong>prod</strong> in this case), including all historical data.</li>
                    <li>The <strong>tailwind-readers</strong> security group needs to be assigned to the Azure Storage built-in RBAC role <strong>Storage Blob Data Reader</strong> for the Azure Storage account containing the data lake. This allows AAD user and service principals that are added to this security group to have the ability to read all data in the file system, but not to modify it.</li>
                    <li>Tailwind Traders should create another security group in AAD, for example called <strong>tailwind-2020-writers</strong>, with the intent that all users who belong to this group will have permissions to modify data only from the year 2020.</li>
                    <li>They would create a another security group, for example called <strong>tailwind-current-writers</strong>, with the intent that only security groups would be added to this group. This group will have permissions to modify data only from the current year, set using ACLs.</li>
                    <li>They need to add the <strong>tailwind-readers</strong> security group to the <strong>tailwind-current-writers</strong> security group.</li>
                    <li>At the start of the year 2020, Tailwind Traders would add <strong>tailwind-current-writers</strong> to the <strong>tailwind-2020-writers</strong> security group.</li>
                    <li>At the start of the year 2020, on the <strong>2020</strong> folder, Tailwind Traders would set the read, write and execute ACL permissions for the <strong>tailwind-2020-writers</strong> security group.</li>
                    <li>At the start of the year 2021, to revoke write access to the 2020 data they would remove the <strong>tailwind-current-writers</strong> security group from the <strong>tailwind-2020-writers</strong> group. Members of <strong>tailwind-readers</strong> would continue to be able to read the contents of the file system because they have been granted read and execute (list) permissions not by the ACLs but by the RBAC built in role at the level of the file system.</li>
                    <li>This approach takes into account that current changes to ACLs do not inherit permissions, so removing the write permission would require writing code that traverses all of its content removing the permission at each folder and file object.</li>
                    <li>This approach is relatively fast. RBAC role assignments may take up to five minutes to propagate, regardless of the volume of data being secured.</li>
                </ul>

                <h3 id="task-1-create-azure-active-directory-security-groups">Task 1: Create Azure Active Directory security groups</h3>

                In this segment, we will create security groups as described above. However, our data set ends in 2019, so we will create a <strong>tailwind-2019-writers</strong> group instead of 2021.

                <ol>
                    <li>
                        Switch back to the Azure portal (<a href="https://portal.azure.com">https://portal.azure.com</a>) in a different browser tab, leaving Synapse Studio open.
                    </li>
                    <li>
                        On the <strong>Home</strong> page, expand the portal menu if it is not already expanded, then select <strong>Azure Active Directory</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/azure-ad-menu.png" alt="The menu item is highlighted." title="Azure Active Directory"><br><br>
                    </li>
                    <li>
                        Select <strong>Groups</strong> in the left-hand menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/aad-groups-link.png" alt="Groups is highlighted." title="Azure Active Directory"><br><br>
                    </li>
                    <li>
                        Select <strong>+ New group</strong>.
                    </li>
                    <li>
                        Ensure that the <strong>Security</strong> group type is selected, and enter <code>tailwind-history-owners-SUFFIX</code> (where <em>suffix</em> is your unique resource suffix) for the <strong>Group name</strong>, and then select <strong>Create</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-group-history-owners.png" alt="The form is configured as described." title="New Group"><br><br>
                    </li>
                    <li>Add a second new security group named <code>tailwind-readers-SUFFIX</code> (where <em>SUFFIX</em> is your unique resource suffix).</li>
                    <li>Add a third security group named <code>tailwind-current-writers-SUFFIX</code> (where <em>SUFFIX</em> is your unique resource suffix).</li>
                    <li>Add a fourth security group named <code>tailwind-2019-writers-SUFFIX</code> (where <em>SUFFIX</em> is your unique resource suffix).</li>
                </ol>

                <blockquote>
                    <strong>Note</strong>: In the remaining instructions in this exercise, we’ll omit the <em>-SUFFIX</em> part of the role names for clarity. You should work with your uniquely identified role names based on your specific resource suffix.
                </blockquote>

                <h3 id="task-2-add-group-members">Task 2: Add group members</h3>

                To test out the permissions, we will add your own account to the groups.

                <ol>
                    <li>
                        Open your newly created <strong>tailwind-readers</strong> group.
                    </li>
                    <li>
                        Select <strong>Members</strong> on the left, then select <strong>+ Add members</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/tailwind-readers.png" alt="The group is displayed and add members is highlighted." title="tailwind-readers group"><br><br>
                    </li>
                    <li>
                        Search for your user account that you are signed into for the lab, then select <strong>Select</strong>.
                    </li>
                    <li>
                        Open your <strong>tailwind-2019-writers</strong> group.
                    </li>
                    <li>
                        Select <strong>Members</strong> on the left, then select <strong>+ Add members</strong>.
                    </li>
                    <li>
                        Search for <code>tailwind</code>, select your <strong>tailwind-current-writers</strong> group, then select <strong>Select</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/add-members-writers.png" alt="The form is displayed as described." title="Add members"><br><br>
                    </li>
                    <li>
                        Select <strong>Overview</strong> in the left-hand menu, then <strong>copy</strong> the <strong>Object Id</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/tailwind-2019-writers-overview.png" alt="The group is displayed and the Object Id is highlighted." title="tailwind-2019-writers group"><br><br>

                        <blockquote>
                            <strong>Note</strong>: Save the <strong>Object Id</strong> value to Notepad or similar text editor. This will be used in a later step when you assign access control in the storage account.
                        </blockquote>
                    </li>
                </ol>

                <h3 id="task-3-configure-data-lake-security---role-based-access-control-rbac">Task 3: Configure data lake security - Role-Based Access Control (RBAC)</h3>

                <ol>
                    <li>
                        In the Azure portal, open the <strong>data-engineering-synapse-<em>xxxxxxx</em></strong> resource group.
                    </li>
                    <li>
                        Open the <strong>asadatalake<em>xxxxxxx</em></strong> storage account.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/resource-group-storage-account.png" alt="The storage account is selected." title="Resource group"><br><br>
                    </li>
                    <li>
                        Select <strong>Access Control (IAM)</strong> in the left-hand menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/storage-access-control.png" alt="Access Control is selected." title="Access Control"><br><br>
                    </li>
                    <li>
                        Select the <strong>Role assignments</strong> tab.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/role-assignments-tab.png" alt="Role assignments is selected." title="Role assignments"><br><br>
                    </li>
                    <li>
                        Select <strong>+ Add</strong>, then <strong>Add role assignment</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/add-role-assignment.png" alt="Add role assignment is highlighted." title="Add role assignment"><br><br>
                    </li>
                    <li>
                        In the <strong>Role</strong> screen, search and select <strong>Storage Blob Data Reader</strong> and then click on <strong>Next</strong>. In the <strong>Members</strong> screen, click on <strong>+ Select members</strong> then search for <code>tailwind-readers</code> and select your <strong>tailwind-readers</strong> group in the results. Then click <strong>Select</strong>. Then click on <strong>Review + assign</strong>, and click on <strong>Review + assign</strong> a second time.

                        Because your user account is added to this group, you will have read access to all files in the blob containers of this account. Tailwind Traders would need to add all users to the <strong>tailwind-readers</strong> security group.
                    </li>
                    <li>
                        Select <strong>+ Add</strong>, then <strong>Add role assignment</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/add-role-assignment.png" alt="Add role assignment is highlighted." title="Add role assignment"><br><br>
                    </li>
                    <li>
                        For <strong>Role</strong>, search <strong>Storage Blob Data Owner</strong>, then select <strong>Next</strong>.
                    </li>
                    <li>
                        In the <strong>Members</strong> screen, click on <strong>+ Select Members</strong> and search for <code>tailwind</code> and select your <strong>tailwind-history-owners</strong> group in the results. Then click on <strong>Review + Assign</strong>, and click on <strong>Review + Assign</strong> again.

                        The <strong>tailwind-history-owners</strong> security group is now assigned to the Azure Storage built-in RBAC role <strong>Storage Blob Data Owner</strong> for the Azure Storage account containing the data lake. This allows Azure AD user and service principals that are added to this role to have the ability to modify all data.

                        Tailwind Traders needs to add the user security principals who will have have permissions to modify all historical data to the <strong>tailwind-history-owners</strong> security group.
                    </li>
                    <li>
                        In the <strong>Access Control (IAM)</strong> list for the storage account, select your Azure user account under the <strong>Storage Blob Data Owner</strong> role, then select <strong>Remove</strong>.

                        Notice that the <strong>tailwind-history-owners</strong> group is assigned to the <strong>Storage Blob Data Owner</strong> group, and <strong>tailwind-readers</strong> is assigned to the <strong>Storage Blob Data Reader</strong> group.

                        <blockquote>
                            <strong>Note</strong>: You may need to navigate back to the resource group, then come back to this screen to see all of the new role assignments.
                        </blockquote>
                    </li>
                </ol>

                <h3 id="task-4-configure-data-lake-security---access-control-lists-acls">Task 4: Configure data lake security - Access Control Lists (ACLs)</h3>

                <ol>
                    <li>
                        Select <strong>Storage browser (preview)</strong> on the left-hand menu. Expand <strong>Blob containers</strong> and select the <strong>wwi-02</strong> container. Open the <strong>sale-small</strong> folder, right-click the <strong>Year=2019</strong> folder, then select <strong>Manage ACL</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/manage-access-2019.png" alt="The 2019 folder is highlighted and Manage Access is selected." title="Storage Explorer"><br><br>
                    </li>
                    <li>
                        In the Manage ACL screen, in the <strong>Access permissions</strong> screen, click on <strong>+ Add principal</strong>, paste the <strong>object Id</strong> value you copied from the <strong>tailwind-2019-writers</strong> security group into the <strong>Add principal</strong> search box, click on <strong>tailwind-2019-writers-suffix</strong>, then select <strong>Select</strong>.
                    </li>
                    <li>
                        Now you should see that the <strong>tailwind-2019-writers</strong> group is selected in the Manage ACL dialog. Check <strong>Read</strong>, <strong>Write</strong>, and <strong>Execute</strong> checkboxes, then select <strong>Save</strong>.
                    </li>
                    <li>
                        In the Manage ACL screen, in the <strong>Default permissions</strong> screen, click on <strong>+ Add principal</strong>, paste the <strong>object Id</strong> value you copied from the <strong>tailwind-2019-writers</strong> security group into the <strong>Add principal</strong> search box, click on <strong>tailwind-2019-writers-suffix</strong>, then select <strong>Select</strong>.

                        Now the security ACLs have been set to allow any users added to the <strong>tailwind-current</strong> security group to write to the <strong>Year=2019</strong> folder, by way of the <strong>tailwind-2019-writers</strong> group. These users can only manage current (2019 in this case) sales files.

                        At the start of the following year, to revoke write access to the 2019 data they would remove the <strong>tailwind-current-writers</strong> security group from the <strong>tailwind-2019-writers</strong> group. Members of <strong>tailwind-readers</strong> would continue to be able to read the contents of the file system because they have been granted read and execute (list) permissions not by the ACLs but by the RBAC built in role at the level of the file system.

                        Notice that we configured both the <em>access</em> ACLs and <em>default</em> ACLs in this configuration.

                        <em>Access</em> ACLs control access to an object. Files and directories both have access ACLs.

                        <em>Default</em> ACLs are templates of ACLs associated with a directory that determine the access ACLs for any child items that are created under that directory. Files do not have default ACLs.

                        Both access ACLs and default ACLs have the same structure.
                    </li>
                </ol>

                <h3 id="task-5-test-permissions">Task 5: Test permissions</h3>

                <ol>
                    <li>
                        In Synapse Studio, in the <strong>Data</strong> hub, on the <strong>Linked</strong> tab select the <strong>Azure Data Lake Storage Gen2/asaworkspace<em>xxxxxxx</em>/wwi02</strong> container; and in the <em>sale-small/Year=2019/Quarter=Q4/Month=12/Day=20191231</em> folder, right-click the <strong>sale-small-20191231-snappy.parquet file</strong>, select <strong>New SQL script</strong>, and select <strong>Select TOP 100 rows</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub-parquet-select-rows.png" alt="The Data hub is displayed with the options highlighted." title="Select TOP 100 rows"><br><br>
                    </li>
                    <li>
                        Ensure <strong>Built-in</strong> is selected in the <strong>Connect to</strong> dropdown list above the query window, then run the query. Data is loaded by the serverless SQL pool endpoint and processed as if was coming from any regular relational database.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/built-in-selected.png" alt="The Built-in connection is highlighted." title="Built-in SQL pool"><br><br>

                        The cell output shows the query results from the Parquet file.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sql-on-demand-output.png" alt="The cell output is displayed." title="SQL output"><br><br>

                        The read permissions to the Parquet file assigned to us through the <strong>tailwind-readers</strong> security group, which then is granted RBAC permissions on the storage account through the <strong>Storage Blob Data Reader</strong> role assignment, is what enabled us to view the file contents.

                        However, since we removed our account from the <strong>Storage Blob Data Owner</strong> role, and we did not add our account to the <strong>tailwind-history-owners</strong> security group, what if we try to write to this directory?

                        Let’s give it a try.
                    </li>
                    <li>
                        In the <strong>wwi-02</strong> pane, right-click the <strong>sale-small-20191231-snappy.parquet</strong> file, select <strong>New Notebook</strong>, then select <strong>Load to DataFrame</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub-parquet-new-notebook.png" alt="The Data hub is displayed with the options highlighted." title="New notebook"><br><br>
                    </li>
                    <li>
                        Attach your <strong>SparkPool01</strong> Spark pool to the notebook.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-attach-spark-pool.png" alt="The Spark pool is highlighted." title="Attach Spark pool"><br><br>
                    </li>
                    <li>
                        Run the cell in the notebook to load the data into a datafame. This may take a while as the spark pool is started, but eventually it should display the first ten rows of the data - confirming once again that you have permission to read data in this location.
                    </li>
                    <li>
                        Under the results, select <strong>+ Code</strong> to add a code cell beneath the existing cell.
                    </li>
                    <li>
                        Enter the following code, replacing <em>SUFFIX</em> with the unique suffix for your data lake resource (you can copy this from cell 1 above):

                        <pre id="codeBlock6" class="mt-0"><blockquote class="language-python hljs"> df.write.parquet(<span class="hljs-string"><span class="hljs-string">'abfss://wwi-02@asadatalakeSUFFIX.dfs.core.windows.net/sale-small/Year=2019/Quarter=Q4/Month=12/Day=20191231/sale-small-20191231-snappy-test.parquet'</span></span>)
</blockquote></pre>
                    </li>
                    <li>
                        Run the new cell you just added. You should see a <strong>403 error</strong> in the output.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-error.png" alt="The error is displayed in Cell 2's output." title="Notebook error"><br><br>

                        As expected, you do not have write permissions. The error returned by cell 2 is, <em>This request is not authorized to perform this operation using this permission.</em>, with a status code of 403.
                    </li>
                    <li>
                        Publish the notebook and end the session. Then sign out of Azure Synapse Studio and close the browser tab, returning to the Azure portal tab (<a href="https://portal.azure.com">https://portal.azure.com</a>).
                    </li>
                    <li>
                        On the <strong>Home</strong> page, in the portal menu, select <strong>Azure Active Directory</strong>.
                    </li>
                    <li>
                        Select <strong>Groups</strong> in the left-hand menu.
                    </li>
                    <li>
                        Type <code>tailwind</code> in the search box, then select your <strong>tailwind-history-owners</strong> group in the results.
                    </li>
                    <li>
                        Select <strong>Members</strong> on the left, then select <strong>+ Add members</strong>.
                    </li>
                    <li>
                        Add your user account that you are signed into for the lab, then select <strong>Select</strong>.
                    </li>
                    <li>
                        In a new tab, browse to Azure Synapse Studio (<a href="https://web.azuresynapse.net/">https://web.azuresynapse.net/</a>). Then on the <strong>Develop</strong> tab, expand <strong>Notebooks</strong> and re-open the notebook you published previously.
                    </li>
                    <li>
                        Click <strong>Run All</strong> to re-run all of the cells in the notebook. After a while, the Spark session will start and the code will run. Cell 2 should return a status of <strong>Succeeded</strong>, indicating that a new file was written to the data lake store.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-succeeded.png" alt="Cell 2 succeeded." title="Notebook"><br><br>

                        The cell succeeded this time because we added our account to the <strong>tailwind-history-owners</strong> group, which is assigned the <strong>Storage Blob Data Owner</strong> role.

                        <blockquote>
                            <strong>Note</strong>: If you encounter the same error this time, <strong>stop the Spark session</strong> on the notebook, then select <strong>Publish all</strong>, then Publish. After publishing your changes, select your user profile on the top-right corner of the page and <strong>log out</strong>. <strong>Close the browser tab</strong> after logout is successful, then re-launch Synapse Studio (<a href="https://web.azuresynapse.net/">https://web.azuresynapse.net/</a>), re-open the notebook, then re-run the cell. This may be needed because you must refresh the security token for the auth changes to take place.
                        </blockquote>
                    </li>
                    <li>
                        At the top right of the notebook, use the <strong>Stop Session</strong> button to stop the notebook session.
                    </li>
                    <li>
                        Publish the notebook if you want to save the changes. Then close it.

                        Now let’s verify that the file was written to the data lake.
                    </li>
                    <li>
                        In Synapse Studio, in the <strong>Data</strong> hub, on the <strong>Linked</strong> tab select the <strong>Azure Data Lake Storage Gen2/asaworkspace<em>xxxxxxx</em>/wwi02</strong> container; and browse to the <em>sale-small/Year=2019/Quarter=Q4/Month=12/Day=20191231</em> folder to verify that a new file has been added to this folder.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/test-parquet-file.png" alt="The test Parquet file is displayed." title="Test parquet file"><br><br>
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