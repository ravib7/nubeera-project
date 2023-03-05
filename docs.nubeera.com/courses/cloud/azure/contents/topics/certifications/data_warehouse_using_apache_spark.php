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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 4 - Explore, transform, and load data into the Data Warehouse using Apache Spark</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Certifications</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                This lab teaches how to explore data stored in a data lake, transform the data, and load data into a relational data store. You will explore Parquet and JSON files and use techniques to query and transform JSON files with hierarchical structures. Then you will use Apache Spark to load data into the data warehouse and join Parquet data in the data lake with data in the dedicated SQL pool.

                After completing this lab, you will be able to:

                <ul>
                    <li>Perform Data Exploration in Synapse Studio</li>
                    <li>Ingest data with Spark notebooks in Azure Synapse Analytics</li>
                    <li>Transform data with DataFrames in Spark pools in Azure Synapse Analytics</li>
                    <li>Integrate SQL and Spark pools in Azure Synapse Analytics</li>
                </ul>

                <h3 id="lab-setup-and-pre-requisites">Lab setup and pre-requisites</h3>

                Before starting this lab, ensure you have successfully completed the setup steps to create your lab environment. Then complete the following setup tasks to create a dedicated SQL pool.

                <blockquote>
                    <strong>Note</strong>: The setup tasks will take around 6-7 minutes. You can continue the lab while the script runs.
                </blockquote>

                <h3 id="task-1-create-dedicated-sql-pool">Task 1: Create dedicated SQL pool</h3>

                <ol>
                    <li>
                        Open Synapse Studio (<a href="https://web.azuresynapse.net/">https://web.azuresynapse.net/</a>).
                    </li>
                    <li>
                        Select the <strong>Manage</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/manage-hub.png" alt="The manage hub is highlighted." title="Manage hub"><br><br>
                    </li>
                    <li>
                        Select <strong>SQL pools</strong> in the left-hand menu, then select <strong>+ New</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-dedicated-sql-pool.png" alt="The new button is highlighted." title="New dedicated SQL pool"><br><br>
                    </li>
                    <li>
                        In the <strong>Create dedicated SQL pool</strong> page, enter <strong><code>SQLPool01</code></strong> (You <u>must</u> use this name exactly as displayed here) for the pool name, and then set the performance level to <strong>DW100c</strong> (move the slider all the way to the left).
                    </li>
                    <li>Click <strong>Review + create</strong>. Then select <strong>Create</strong> on the validation step.</li>
                    <li>Wait until the dedicated SQL pool is created.</li>
                </ol>

                <blockquote>
                    <strong>Important:</strong> Once started, a dedicated SQL pool consumes credits in your Azure subscription until it is paused. If you take a break from this lab, or decide not to complete it; follow the instructions at the end of the lab to <strong>pause your SQL pool</strong>
                </blockquote>

                <h3 id="task-2-execute-powershell-script">Task 2: Execute PowerShell script</h3>

                <ol>
                    <li>
                        In the hosted VM environment provided for this course, open Powershell in administrator mode, and execute the following to set the execution policy to Unrestricted so you can run the local PowerShell script file:

                        <pre id="codeBlock0" class="mt-0"><blockquote class="hljs javascript"> <span class="hljs-built_in"><span class="hljs-built_in">Set</span></span>-ExecutionPolicy Unrestricted
</blockquote></pre>

                        <blockquote>
                            <strong>Note</strong>: If you receive a prompt that you are installing the module from an untrusted repository, select <strong>Yes to All</strong> to proceed with the setup.
                        </blockquote>
                    </li>
                    <li>
                        Change directories to the root of this repo within your local file system.

                        <pre id="codeBlock1" class="mt-0"><blockquote class="hljs bash"> <span class="hljs-built_in"><span class="hljs-built_in">cd</span></span> C:\dp-203\data-engineering-ilt-deployment\Allfiles\00\artifacts\environment-setup\automation\
</blockquote></pre>
                    </li>
                    <li>
                        Enter the following command to run a PowerShell script that creates objects in the SQL pool:

                        <pre id="codeBlock2" class="mt-0"><blockquote class="hljs css"> .\<span class="hljs-selector-tag"><span class="hljs-selector-tag">setup-sql</span></span><span class="hljs-selector-class"><span class="hljs-selector-class">.ps1</span></span>
</blockquote></pre>
                    </li>
                    <li>
                        When prompted to sign into Azure, and your browser opens; sign in using your credentials. After signing in, you can close the browser and return to Windows PowerShell.
                    </li>
                    <li>
                        When prompted, sign into your Azure account again (this is required so that the script can manage resources in your Azure subscription - be sure you use the same credentials as before).
                    </li>
                    <li>
                        If you have more than one Azure subscription, when prompted, select the one you want to use in the labs by entering its number in the list of subscriptions.
                    </li>
                    <li>
                        When prompted, enter the name of the resource group containing your Azure Synapse Analytics workspace (such as <strong>data-engineering-synapse-<em>xxxxxxx</em></strong>).
                    </li>
                    <li>
                        <strong>Continue on to Exercise 1</strong> while this script is running.
                    </li>
                </ol>

                <blockquote>
                    <strong>NOTE</strong> This script will take about 2-3 minutes to complete.

                    If it seems as though the script hangs while creating linked services for the SQLPool01 dedicated SQL pool (there are 3), press <strong>Enter</strong>. This tends to refresh the PowerShell script and allows it to continue to the end.

                    <h3 id="potential-errors-that-you-can-ignore">Potential errors that you can ignore</h3>

                    You may encounter a few errors and warnings during the script execution. The errors below can safely be ignored:

                    <ol>
                        <li>
                            The following error may occur when creating SQL users and adding role assignments in the dedicated SQL pool, and can safely be ignored:

                            <em>Principal ‘xxx@xxx.com’ could not be created. Only connections established with Active Directory accounts can create other Active Directory users.</em>
                        </li>
                        <li>
                            The following error may also occur and can safely be ignored:

                            <em>07-create-wwi-perf-sale-heap with label CTAS : Sale_Heap. Cannot index into a null array.</em>
                        </li>
                    </ol>
                </blockquote>

                <h3 id="exercise-1---perform-data-exploration-in-synapse-studio">Exercise 1 - Perform Data Exploration in Synapse Studio</h3>

                One of the first data engineering tasks typically performed during data ingestion is to explore the data that is to be imported. Data exploration allows engineers to understand better the contents of files being ingested. This process helps to identify any potential data quality issues that might hinder automated ingestion processes. Through exploration, we can gain insights into data types, data quality, and whether any processing needs to be performed on the files prior to importing the data into your data lake or using it for analytics workloads. <br><br>

                The engineers at Tailspin Traders have run into issues ingesting some of their sales data into the data warehouse, and have requested assistance in understanding how Synapse Studio can be used to help them resolve these issues. As the first step of this process, you need to explore the data to understand what is causing the issues they’ve encountered, and then provide them with a solution.

                <h3 id="task-1-exploring-data-using-the-data-previewer-in-azure-synapse-studio">Task 1: Exploring data using the data previewer in Azure Synapse Studio</h3>

                Azure Synapse Studio provides numerous ways to explore data, from a simple preview interface to more complicated programmatic options using Synapse Spark notebooks. In this exercise, you will learn how to use these features to explore, identify, and fix problematic files. You will be exploring CSV files stored in the <strong>wwi-02/sale-poc</strong> folder of the data lake and learning about how to identify and fix issues.

                <ol>
                    <li>
                        In Azure Synapse Studio, navigate to the <strong>Data</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub.png" alt="The data hub is highlighted." title="Data hub"><br><br>

                        <blockquote>
                            The Data hub is where you access your provisioned SQL pool databases and SQL serverless databases in your workspace, as well as external data sources, such as storage accounts and other linked services.
                        </blockquote>
                    </li>
                    <li>
                        We want to access files stored in the workspace’s primary data lake, so select the <strong>Linked</strong> tab within the Data hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub-linked-services.png" alt="The Linked tab is highlighted within the Data hub." title="Data hub Linked services"><br><br>
                    </li>
                    <li>
                        On the Linked tab, expand <strong>Azure Data Lake Storage Gen2</strong> and then expand the <strong>Primary</strong> data lake for the workspace.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub-adls-primary.png" alt="On the Linked tab, ADLS Gen2 is expanded and the primary data lake account is expanded and highlighted." title="ADLS Gen2 Primary Storage Account"><br><br>
                    </li>
                    <li>
                        In the list of containers within the primary data lake storage account, select the <strong>wwi-02</strong> container.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub-adls-primary-wwi-02-container.png" alt="The wwi-02 container is selected and highlighted under the primary data lake storage account." title="wwi-02 container"><br><br>
                    </li>
                    <li>
                        In the container explorer window, browse to the <strong>sale-poc</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/wwi-02-sale-poc.png" alt="The sale-poc folder is highlighted within the wwi-02 container in the data lake." title="sale-poc folder"><br><br>
                    </li>
                    <li>
                        The <strong>sale-poc</strong> contains sales data for the month of May, 2017. There are some files in the folder. These files were imported by a temporary process to account for an issue with Tailspin’s import process. Let’s now take a few minutes to explore some of the files.
                    </li>
                    <li>
                        Right-click the first file in the list, <strong>sale-20170501.csv</strong>, and select <strong>Preview</strong> from the context menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170501-csv-context-menu-preview.png" alt="In the context menu for the sale-20170501.csv file, Preview is highlighted." title="File context menu"><br><br>
                    </li>
                    <li>
                        The preview functionality in Synapse Studio provides an quick and code-free way to examine the contents of a file. This is an effective way of getting a basic understanding of the features (columns) and types of data stored within them for an individual file.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170501-csv-preview.png" alt="The preview dialog for the sale-20170501.csv file is displayed." title="CSV file preview"><br><br>

                        <blockquote>
                            While in the Preview dialog for <strong>sale-20170501.csv</strong>, take a moment to scroll through the file preview. Scrolling down shows there are a limited number of rows included in the preview, so this is just a glimpse into the structure of the file. Scrolling to the right allows you to see the number and names of the columns contained in the file.
                        </blockquote>
                    </li>
                    <li>
                        Select <strong>OK</strong> to close the preview.
                    </li>
                    <li>
                        When performing data exploration, it is important to look at more than just one file, as it helps to get a more representative sample of the data. Let’s look at the next file in the folder. Right-click the <strong>sale-20170502.csv</strong> file and select <strong>Preview</strong> from the context menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170502-csv-context-menu-preview.png" alt="In the context menu for the sale-20170502.csv file, Preview is highlighted." title="File context menu"><br><br>
                    </li>
                    <li>
                        Notice the structure of this file is different from the <strong>sale-20170501.csv</strong> file. No data rows appear in the preview and the column headers appear to contain data and not field names.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170502-csv-preview.png" alt="The preview dialog for the sale-20170502.csv file is displayed." title="CSV File preview"><br><br>
                    </li>
                    <li>
                        It appears this file does not contain column headers, so set the <strong>With column header</strong> option to <strong>off</strong> (which may take a while to change) and inspect the results.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170502-csv-preview-with-column-header-off.png" alt="The preview dialog for the sale-20170502.csv file is displayed, with the With column header option set to off." title="CSV File preview"><br><br>

                        <blockquote>
                            Setting the <strong>With column headers</strong> to off verifies that the file does not contain column headers. All columns have “(NO COLUMN NAME)” in the header. This setting moves the data down appropriately, and it appears this is only a single row. By scrolling to the right, you will notice that while there appears to only be a single row, there are many more columns than what we saw when previewing the first file. That file contained 11 columns.
                        </blockquote>
                    </li>
                    <li>
                        Since we have seen two different file structures, let’s look at another file to see if we can learn which format is more typical of the files within the <strong>sale-poc</strong> folder. Close the preview of <strong>sale-20170502.csv</strong>, and then open a preview of <strong>sale-20170503.csv</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170503-csv-context-menu-preview.png" alt="In the context menu for the sale-20170503.csv file, Preview is highlighted." title="File context menu"><br><br>
                    </li>
                    <li>
                        Verify that the <strong>sale-20170503.csv</strong> file appears to have a structure similar to that found in <strong>20170501.csv</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170503-csv-preview.png" alt="The preview dialog for the sale-20170503.csv file is displayed." title="CSV File preview"><br><br>
                    </li>
                    <li>
                        Select <strong>OK</strong> to close the preview.
                    </li>
                </ol>

                <h3 id="task-2-using-serverless-sql-pools-to-explore-files">Task 2: Using serverless SQL pools to explore files</h3>

                The preview functionality in Synapse Studio enables quick exploration of files, but doesn’t allow us to look deeper into the data or gain much in the way of insights into files with issues. In this task, we will use the <strong>serverless SQL pools (built-in)</strong> functionality of Synapse to explore these files using T-SQL.

                <ol>
                    <li>
                        Right-click the <strong>sale-20170501.csv</strong> file again, this time selecting <strong>New SQL Script</strong> and <strong>Select TOP 100 rows</strong> from the context menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170501-csv-context-menu-new-sql-script.png" alt="In the context menu for the sale-20170501.csv file, New SQL script and Select TOP 100 rows are highlighted." title="File context menu"><br><br>
                    </li>
                    <li>
                        A new SQL script tab will open in Synapse Studio containing a SELECT statement to read the first 100 rows of the file. This provides another way to examine the contents of files. By limiting the number of rows being examined, we can speed up the exploration process, as queries to load all the data within the files will run slower.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170501-csv-sql-select-top-100.png" alt="The T-SQL script generated for reading the top 100 rows of the file is displayed." title="T-SQL script to preview CSV file"><br><br>

                        <blockquote>
                            <strong>Tip</strong>: Hide the script’s <strong>Properties</strong> pane to make it easier to see the script.
                        </blockquote>

                        T-SQL queries against files stored in the data lake leverage the OPENROWSET function, which can be referenced in the FROM clause of a query as if it were a table. It supports bulk operations through a built-in BULK provider that enables data from a file to be read and returned as a rowset.
                    </li>
                    <li>
                        Now, select <strong>Run</strong> on the toolbar to execute the query.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sql-on-demand-run.png" alt="The Run button on the SQL toolbar is highlighted." title="Synapse SQL toolbar"><br><br>
                    </li>
                    <li>
                        In the <strong>Results</strong> pane, observe the output.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170501-csv-sql-select-top-100-results.png" alt="The results pane is displayed, containing the default results of running the OPENROWSET function. Column headers named C1 through C11 are highlighted." title="Query results"><br><br>

                        <blockquote>
                            In the results, you will notice that the first row, containing the column headers, is rendered as a data row, and the columns are assigned names <strong>C1</strong> - <strong>C11</strong>. You can use the FIRSTROW parameter of the OPENROWSET function to specify the number of the first fow of the file to display as data. The default value is 1, so if a file contains a header row, the value can be set to 2 to skip the column headers. You can then specify the schema associated with the file using the <code>WITH</code> clause.
                        </blockquote>
                    </li>
                    <li>
                        Modify the query as shown below to skip the header row and specify the names of the columns in the resultset; replacing <em>SUFFIX</em> with the unique resource suffix for your storage account:

                        <pre id="codeBlock3" class="mt-0"><blockquote class="language-sql hljs"> <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span>
     TOP <span class="hljs-number"><span class="hljs-number">100</span></span> *
 <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span>
     OPENROWSET(
         <span class="hljs-keyword"><span class="hljs-keyword">BULK</span></span> <span class="hljs-string"><span class="hljs-string">'https://asadatalakeSUFFIX.dfs.core.windows.net/wwi-02/sale-poc/sale-20170501.csv'</span></span>,
         <span class="hljs-keyword"><span class="hljs-keyword">FORMAT</span></span> = <span class="hljs-string"><span class="hljs-string">'CSV'</span></span>,
         PARSER_VERSION=<span class="hljs-string"><span class="hljs-string">'2.0'</span></span>,
         FIRSTROW = <span class="hljs-number"><span class="hljs-number">2</span></span>
     ) <span class="hljs-keyword"><span class="hljs-keyword">WITH</span></span> (
         [TransactionId] <span class="hljs-built_in"><span class="hljs-built_in">varchar</span></span>(<span class="hljs-number"><span class="hljs-number">50</span></span>),
         [CustomerId] <span class="hljs-built_in"><span class="hljs-built_in">int</span></span>,
         [ProductId] <span class="hljs-built_in"><span class="hljs-built_in">int</span></span>,
         [Quantity] <span class="hljs-built_in"><span class="hljs-built_in">int</span></span>,
         [Price] <span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>(<span class="hljs-number"><span class="hljs-number">10</span></span>,<span class="hljs-number"><span class="hljs-number">3</span></span>),
         [TotalAmount] <span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>(<span class="hljs-number"><span class="hljs-number">10</span></span>,<span class="hljs-number"><span class="hljs-number">3</span></span>),
         [TransactionDate] <span class="hljs-built_in"><span class="hljs-built_in">varchar</span></span>(<span class="hljs-number"><span class="hljs-number">8</span></span>),
         [ProfitAmount] <span class="hljs-built_in"><span class="hljs-built_in">decimal</span></span>(<span class="hljs-number"><span class="hljs-number">10</span></span>,<span class="hljs-number"><span class="hljs-number">3</span></span>),
         [<span class="hljs-keyword"><span class="hljs-keyword">Hour</span></span>] <span class="hljs-built_in"><span class="hljs-built_in">int</span></span>,
         [<span class="hljs-keyword"><span class="hljs-keyword">Minute</span></span>] <span class="hljs-built_in"><span class="hljs-built_in">int</span></span>,
         [StoreId] <span class="hljs-built_in"><span class="hljs-built_in">int</span></span>
     ) <span class="hljs-keyword"><span class="hljs-keyword">AS</span></span> [<span class="hljs-keyword"><span class="hljs-keyword">result</span></span>]
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170501-csv-sql-select-top-100-results-with-schema.png" alt="The results of the query above, using the FIRSTROW parameter and the WITH clause to apply the column headers and schema to the data in the file." title="Query results using FIRSTROW and WITH clause"><br><br>

                        <blockquote>
                            Using the OPENROWSET function, you can now use T-SQL syntax to further explore your data. For example, you can use a WHERE clause to check various fields for <em>null</em> or other values that might need to be handled prior to using the data for advanced analytics workloads. With the schema specified, you can refer to fields by name to make this processes easier.
                        </blockquote>
                    </li>
                    <li>
                        Close the SQL script tab. If prompted, select <strong>Close + discard changes</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sql-script-discard-changes-dialog.png" alt="The Close + discard button is highlighted on the Discard changes dialog." title="Discard changes?"><br><br>
                    </li>
                    <li>
                        We saw while using the <strong>Preview</strong> functionality that the <strong>sale-20170502.csv</strong> file is poorly formed. Let’s see if we can learn more about the data in this file using T-SQL. In the <strong>wwi-02</strong> tab, right-click the <strong>sale-20170502.csv</strong> file and select <strong>New SQL script</strong> and <strong>Select TOP 100 rows</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170502-csv-context-menu-new-sql-script.png" alt="The wwi-02 tab is highlighted and the context menu for sale-20170502.csv is displayed. New SQL script and Select TOP 100 are highlighted in the context menu." title="File context menu"><br><br>
                    </li>
                    <li>
                        Run the automatically generated query.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sql-on-demand-run.png" alt="The Run button on the SQL toolbar is highlighted." title="Synapse SQL toolbar"><br><br>
                    </li>
                    <li>
                        Observe that the query results in the error, <em>Error handling external file: ‘Row larger than maximum allowed row size of 8388608 bytes found starting at byte 0.’</em>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sale-20170502-csv-messages-error.png" alt="The error message 'Row larger than maximum allowed row size of 8388608 bytes found starting at byte 0.' is displayed in the results pane." title="Error message"><br><br>

                        <blockquote>
                            This error aligns with what we saw in the preview window for this file. In the preview we saw the data being separated in to columns, but all of the data was in a single row. This implies the data is being split into columns using the default field delimiter (comma). What appears to be missing, however, is a row terminator, <code>\r</code>.
                        </blockquote>
                    </li>
                    <li>
                        Close the query tab, discarding the changes, and in the <strong>wwi-02</strong> tab, right-click the <strong>sale-20170502.csv</strong> file and select <strong>Download</strong>. This downloads the file and opens it in the browser.
                    </li>
                    <li>
                        Review the data in the browser, and note that there are no line-terminators; all of the data is in a single line (which wraps in the browser display).
                    </li>
                    <li>
                        Close the browser tab containing the contents of the <strong>sale-20170502.csv</strong> file.

                        To fix the file, we need to use code. T-SQL and Synapse Pipelines do not have the ability to efficiently handle this type of issue. To address the problems with this file, we need to use a Synapse Spark notebook.
                    </li>
                </ol>

                <h3 id="task-3-exploring-and-fixing-data-with-synapse-spark">Task 3: Exploring and fixing data with Synapse Spark</h3>

                In this task, you will use a Synapse Spark notebook to explore a few of the files in the <strong>wwi-02/sale-poc</strong> folder in the data lake. You will also use Python code to fix the issues with the <strong>sale-20170502.csv</strong> file, so all the files in the directory can be ingested using a Synapse Pipeline later.

                <ol>
                    <li>
                        In Synapse Studio, open the <strong>Develop</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/develop-hub.png" alt="The develop hub is highlighted." title="Develop hub"><br><br>
                    </li>
                    <li>
                        In the <strong>+</strong> menu, select <strong>Import</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/develop-hub-add-new-resource-import.png" alt="On the Develop hub, the Add New Resource (+) button is highlighted and Import is highlighted in the menu." title="Develop hub import notebook"><br><br>
                    </li>
                    <li>
                        Import the <strong>Explore with Spark.ipynb</strong> notebook in the C:\dp-203\data-engineering-ilt-deployment\Allfiles\synapse-apache-spark-notebooks folder.
                    </li>
                    <li>
                        Follow the instructions contained within the notebook to complete the remainder of this task, attaching it to the <strong>SparkPool01</strong> Spark pool. Note that the first cell may take some time to run as the Spark pool must be started.
                    </li>
                    <li>
                        When you have completed the <strong>Explore with Spark</strong> notebook, select on the <strong>Stop Session</strong> button on the right hand side of the notebook toolbar to release the Spark cluster for the next exercise.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/stop-session.png" alt="The stop session button is highlighted." title="Stop session"><br><br>
                    </li>
                </ol>

                <h3 id="exercise-2---ingesting-data-with-spark-notebooks-in-azure-synapse-analytics">Exercise 2 - Ingesting data with Spark notebooks in Azure Synapse Analytics</h3>

                Tailwind Traders has unstructured and semi-structured files from various data sources. Their data engineers want to use their Spark expertise to explore, ingest, and transform these files.

                You recommend using Synapse Notebooks, which are integrated in the Azure Synapse Analytics workspace and used from within Synapse Studio.

                <h3 id="task-1-ingest-and-explore-parquet-files-from-a-data-lake-with-apache-spark-for-azure-synapse">Task 1: Ingest and explore Parquet files from a data lake with Apache Spark for Azure Synapse</h3>

                <ol>
                    <li>In Azure Synapse Studio, select the <strong>Data</strong> hub.</li>
                    <li>
                        On the <strong>Linked</strong> tab, in the <strong>wwi-02</strong> container, browse to the <em>sale-small/Year=2019/Quarter=Q4/Month=12/Day=20191231</em> folder. Then right-click the Parquet file, select <strong>New notebook</strong>, and then select <strong>Load to DataFrame</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/2019-sale-parquet-new-notebook.png" alt="The Parquet file is displayed as described." title="New notebook"><br><br>

                        This generates a notebook with PySpark code to load the data in a Spark dataframe and display 10 rows with the header.
                    </li>
                    <li>
                        Attach the <strong>SparkPool01</strong> Spark pool to the notebook, but <strong><u>do not run/execute the cell at this stage</u></strong> - you need to create a variable for the name of your data lake first.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/2019-sale-parquet-notebook-sparkpool.png" alt="The Spark pool is highlighted." title="Notebook"><br><br>

                        The Spark pool provides the compute for all notebook operations. If you look under the notebook toolbar, you’ll see that the pool has not started. When you run a cell in the notebook while the pool is idle, the pool will start and allocate resources. This is a one-time operation until the pool auto-pauses from being idle for too long.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/spark-pool-not-started.png" alt="The Spark pool is in a paused state." title="Not started"><br><br>

                        <blockquote>
                            The auto-pause settings are configured on the Spark pool configuration in the Manage hub.
                        </blockquote>
                    </li>
                    <li>
                        Add the following beneath the code in the cell to define a variable named <strong>datalake</strong> whose value is the name of the primary storage account (replace <em>SUFFIX</em> with the unique suffix for your data store):

                        <pre id="codeBlock4" class="mt-0"><blockquote class="language-python hljs"> datalake = <span class="hljs-string"><span class="hljs-string">'asadatalakeSUFFIX'</span></span>
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/datalake-variable.png" alt="The variable value is updated with the storage account name." title="datalake variable"><br><br>

                        This variable will be used in subsequent cells.
                    </li>
                    <li>
                        Select <strong>Run all</strong> on the notebook toolbar to execute the notebook.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-run-all.png" alt="Run all is highlighted." title="Run all"><br><br>

                        <blockquote>
                            <strong>Note:</strong> The first time you run a notebook in a Spark pool, Azure Synapse creates a new session. This can take approximately 2-3 minutes.
                        </blockquote>

                        <blockquote>
                            <strong>Note:</strong> To run just the cell, either hover over the cell and select the <em>Run cell</em> icon to the left of the cell, or select the cell then type <strong>Ctrl+Enter</strong> on your keyboard.
                        </blockquote>
                    </li>
                    <li>
                        After the cell run is complete, change the View to <strong>Chart</strong> in the cell output.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/2019-sale-parquet-table-output.png" alt="The Chart view is highlighted." title="Cell 1 output"><br><br>

                        By default, the cell outputs to a table view when we use the <strong>display()</strong> function. We see in the output the sales transaction data stored in the Parquet file for December 31, 2019. Let’s select the <strong>Chart</strong> visualization to see a different view of the data.
                    </li>
                    <li>
                        Select the <strong>View options</strong> button to the right.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/2010-sale-parquet-chart-options-button.png" alt="The button is highlighted." title="View options"><br><br>
                    </li>
                    <li>
                        Set <strong>Key</strong> to <strong>ProductId</strong> and <strong>Values</strong> to <strong>TotalAmount</strong>, then select <strong>Apply</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/2010-sale-parquet-chart-options.png" alt="The options are configured as described." title="View options"><br><br>
                    </li>
                    <li>
                        The chart visualization is displayed. Hover over the bars to view details.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/2019-sale-parquet-chart.png" alt="The configured chart is displayed." title="Chart view"><br><br>
                    </li>
                    <li>
                        Create a new cell underneath by selecting <strong>+ Code</strong>.
                    </li>
                    <li>
                        The Spark engine can analyze the Parquet files and infer the schema. To do this, enter the following in the new cell and run it:

                        <pre id="codeBlock5" class="mt-0"><blockquote class="language-python hljs">df.printSchema()
</blockquote></pre>

                        Your output should look like the following:

                        <pre id="codeBlock6" class="mt-0"><blockquote class="hljs objectivec">root
 |-- TransactionId: string (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |-- CustomerId: integer (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |-- ProductId: <span class="hljs-keyword"><span class="hljs-keyword">short</span></span> (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |-- Quantity: byte (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |-- Price: decimal(<span class="hljs-number"><span class="hljs-number">38</span></span>,<span class="hljs-number"><span class="hljs-number">18</span></span>) (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |-- TotalAmount: decimal(<span class="hljs-number"><span class="hljs-number">38</span></span>,<span class="hljs-number"><span class="hljs-number">18</span></span>) (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |-- TransactionDate: integer (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |-- ProfitAmount: decimal(<span class="hljs-number"><span class="hljs-number">38</span></span>,<span class="hljs-number"><span class="hljs-number">18</span></span>) (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |-- Hour: byte (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |-- Minute: byte (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |-- StoreId: <span class="hljs-keyword"><span class="hljs-keyword">short</span></span> (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
</blockquote></pre>

                        Spark evaluates the file contents to infer the schema. This automatic inference is usually sufficient for data exploration and most transformation tasks. However, when you load data to an external resource like a SQL table, sometimes you need to declare your own schema and apply that to the dataset. For now, the schema looks good.
                    </li>
                    <li>
                        Now let’s use aggregates and grouping operations to better understand the data. Create a new code cell and enter the following, then run the cell:

                        <pre id="codeBlock7" class="mt-0"><blockquote class="language-python hljs"><span class="hljs-keyword"><span class="hljs-keyword">from</span></span> pyspark.sql <span class="hljs-keyword"><span class="hljs-keyword">import</span></span> SparkSession
<span class="hljs-keyword"><span class="hljs-keyword">from</span></span> pyspark.sql.types <span class="hljs-keyword"><span class="hljs-keyword">import</span></span> *
<span class="hljs-keyword"><span class="hljs-keyword">from</span></span> pyspark.sql.functions <span class="hljs-keyword"><span class="hljs-keyword">import</span></span> *

profitByDateProduct = (df.groupBy(<span class="hljs-string"><span class="hljs-string">"TransactionDate"</span></span>,<span class="hljs-string"><span class="hljs-string">"ProductId"</span></span>)
    .agg(
        sum(<span class="hljs-string"><span class="hljs-string">"ProfitAmount"</span></span>).alias(<span class="hljs-string"><span class="hljs-string">"(sum)ProfitAmount"</span></span>),
        round(avg(<span class="hljs-string"><span class="hljs-string">"Quantity"</span></span>), <span class="hljs-number"><span class="hljs-number">4</span></span>).alias(<span class="hljs-string"><span class="hljs-string">"(avg)Quantity"</span></span>),
        sum(<span class="hljs-string"><span class="hljs-string">"Quantity"</span></span>).alias(<span class="hljs-string"><span class="hljs-string">"(sum)Quantity"</span></span>))
    .orderBy(<span class="hljs-string"><span class="hljs-string">"TransactionDate"</span></span>))
display(profitByDateProduct.limit(<span class="hljs-number"><span class="hljs-number">100</span></span>))
</blockquote></pre>

                        <blockquote>
                            We import required Python libraries to use aggregation functions and types defined in the schema to successfully execute the query.
                        </blockquote>

                        The output shows the same data we saw in the chart above, but now with <strong>sum</strong> and <strong>avg</strong> aggregates. Notice that we use the <strong>alias</strong> method to change the column names.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/manage-hub.png" alt="The aggregates output is displayed." title="Aggregates output"><br><br>
                    </li>
                    <li>Keep the notebook open for the next excercise.</li>
                </ol>

                <h3 id="exercise-3---transforming-data-with-dataframes-in-spark-pools-in-azure-synapse-analytics">Exercise 3 - Transforming data with DataFrames in Spark pools in Azure Synapse Analytics</h3>

                In addition to the sales data, Tailwind Traders has customer profile data from an e-commerce system that provides top product purchases for each visitor of the site (customer) over the past 12 months. This data is stored within JSON files in the data lake. They have struggled with ingesting, exploring, and transforming these JSON files and want your guidance. The files have a hierarchical structure that they want to flatten before loading into relational data stores. They also wish to apply grouping and aggregate operations as part of the data engineering process. You recommend using Synapse Notebooks to explore and apply data transformations on the JSON files.

                <h3 id="task-1-query-and-transform-json-data-with-apache-spark-for-azure-synapse">Task 1: Query and transform JSON data with Apache Spark for Azure Synapse</h3>

                <ol>
                    <li>
                        Create a new code cell in the Spark notebook, enter the following code and run the cell:

                        <pre id="codeBlock8" class="mt-0"><blockquote class="language-python hljs"> df = (spark.read \
         .option(<span class="hljs-string"><span class="hljs-string">'inferSchema'</span></span>, <span class="hljs-string"><span class="hljs-string">'true'</span></span>) \
         .json(<span class="hljs-string"><span class="hljs-string">'abfss://wwi-02@'</span></span> + datalake + <span class="hljs-string"><span class="hljs-string">'.dfs.core.windows.net/online-user-profiles-02/*.json'</span></span>, multiLine=<span class="hljs-keyword"><span class="hljs-keyword">True</span></span>)
     )

 df.printSchema()
</blockquote></pre>

                        <blockquote>
                            The <strong>datalake</strong> variable you created in the first cell is used here as part of the file path.
                        </blockquote>

                        Your output should look like the following:

                        <pre id="codeBlock9" class="mt-0"><blockquote class="hljs objectivec"> root
 |-- topProductPurchases: array (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |    |-- element: <span class="hljs-keyword"><span class="hljs-keyword">struct</span></span> (containsNull = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |    |    |-- itemsPurchasedLast12Months: <span class="hljs-keyword"><span class="hljs-keyword">long</span></span> (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |    |    |-- productId: <span class="hljs-keyword"><span class="hljs-keyword">long</span></span> (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
 |-- visitorId: <span class="hljs-keyword"><span class="hljs-keyword">long</span></span> (<span class="hljs-keyword"><span class="hljs-keyword">nullable</span></span> = <span class="hljs-literal"><span class="hljs-literal">true</span></span>)
</blockquote></pre>

                        <blockquote>
                            Notice that we are selecting all JSON files within the <strong>online-user-profiles-02</strong> directory. Each JSON file contains several rows, which is why we specified the <strong>multiLine=True</strong> option. Also, we set the <strong>inferSchema</strong> option to <strong>true</strong>, which instructs the Spark engine to review the files and create a schema based on the nature of the data.
                        </blockquote>
                    </li>
                    <li>
                        We have been using Python code in these cells up to this point. If we want to query the files using SQL syntax, one option is to create a temporary view of the data within the dataframe. Run the following code in a new code cell to create a view named <strong>user_profiles</strong>:

                        <pre id="codeBlock10" class="mt-0"><blockquote class="language-python hljs"> <span class="hljs-comment"><span class="hljs-comment"># create a view called user_profiles</span></span>
 df.createOrReplaceTempView(<span class="hljs-string"><span class="hljs-string">"user_profiles"</span></span>)
</blockquote></pre>
                    </li>
                    <li>
                        Create a new code cell. Since we want to use SQL instead of Python, we use the <strong>%%sql</strong> <em>magic</em> to set the language of the cell to SQL. Execute the following code in the cell:

                        <pre id="codeBlock11" class="mt-0"><blockquote class="language-sql hljs"> %%sql

 <span class="hljs-keyword"><span class="hljs-keyword">SELECT</span></span> * <span class="hljs-keyword"><span class="hljs-keyword">FROM</span></span> user_profiles <span class="hljs-keyword"><span class="hljs-keyword">LIMIT</span></span> <span class="hljs-number"><span class="hljs-number">10</span></span>
</blockquote></pre>

                        Notice that the output shows nested data for <strong>topProductPurchases</strong>, which includes an array of <strong>productId</strong> and <strong>itemsPurchasedLast12Months</strong> values. You can expand the fields by clicking the right triangle in each row.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/spark-json-output-nested.png" alt="JSON nested output." title="JSON output"><br><br>

                        This makes analyzing the data a bit difficult. This is because the JSON file contents look like the following:

                        <pre id="codeBlock12" class="mt-0"><blockquote class="language-json hljs"> [
     {
         <span class="hljs-attr"><span class="hljs-attr">"visitorId"</span></span>: <span class="hljs-number"><span class="hljs-number">9529082</span></span>,
         <span class="hljs-attr"><span class="hljs-attr">"topProductPurchases"</span></span>: [
             {
                 <span class="hljs-attr"><span class="hljs-attr">"productId"</span></span>: <span class="hljs-number"><span class="hljs-number">4679</span></span>,
                 <span class="hljs-attr"><span class="hljs-attr">"itemsPurchasedLast12Months"</span></span>: <span class="hljs-number"><span class="hljs-number">26</span></span>
             },
             {
                 <span class="hljs-attr"><span class="hljs-attr">"productId"</span></span>: <span class="hljs-number"><span class="hljs-number">1779</span></span>,
                 <span class="hljs-attr"><span class="hljs-attr">"itemsPurchasedLast12Months"</span></span>: <span class="hljs-number"><span class="hljs-number">32</span></span>
             },
             {
                 <span class="hljs-attr"><span class="hljs-attr">"productId"</span></span>: <span class="hljs-number"><span class="hljs-number">2125</span></span>,
                 <span class="hljs-attr"><span class="hljs-attr">"itemsPurchasedLast12Months"</span></span>: <span class="hljs-number"><span class="hljs-number">75</span></span>
             },
             {
                 <span class="hljs-attr"><span class="hljs-attr">"productId"</span></span>: <span class="hljs-number"><span class="hljs-number">2007</span></span>,
                 <span class="hljs-attr"><span class="hljs-attr">"itemsPurchasedLast12Months"</span></span>: <span class="hljs-number"><span class="hljs-number">39</span></span>
             },
             {
                 <span class="hljs-attr"><span class="hljs-attr">"productId"</span></span>: <span class="hljs-number"><span class="hljs-number">1240</span></span>,
                 <span class="hljs-attr"><span class="hljs-attr">"itemsPurchasedLast12Months"</span></span>: <span class="hljs-number"><span class="hljs-number">31</span></span>
             },
             {
                 <span class="hljs-attr"><span class="hljs-attr">"productId"</span></span>: <span class="hljs-number"><span class="hljs-number">446</span></span>,
                 <span class="hljs-attr"><span class="hljs-attr">"itemsPurchasedLast12Months"</span></span>: <span class="hljs-number"><span class="hljs-number">39</span></span>
             },
             {
                 <span class="hljs-attr"><span class="hljs-attr">"productId"</span></span>: <span class="hljs-number"><span class="hljs-number">3110</span></span>,
                 <span class="hljs-attr"><span class="hljs-attr">"itemsPurchasedLast12Months"</span></span>: <span class="hljs-number"><span class="hljs-number">40</span></span>
             },
             {
                 <span class="hljs-attr"><span class="hljs-attr">"productId"</span></span>: <span class="hljs-number"><span class="hljs-number">52</span></span>,
                 <span class="hljs-attr"><span class="hljs-attr">"itemsPurchasedLast12Months"</span></span>: <span class="hljs-number"><span class="hljs-number">2</span></span>
             },
             {
                 <span class="hljs-attr"><span class="hljs-attr">"productId"</span></span>: <span class="hljs-number"><span class="hljs-number">978</span></span>,
                 <span class="hljs-attr"><span class="hljs-attr">"itemsPurchasedLast12Months"</span></span>: <span class="hljs-number"><span class="hljs-number">81</span></span>
             },
             {
                 <span class="hljs-attr"><span class="hljs-attr">"productId"</span></span>: <span class="hljs-number"><span class="hljs-number">1219</span></span>,
                 <span class="hljs-attr"><span class="hljs-attr">"itemsPurchasedLast12Months"</span></span>: <span class="hljs-number"><span class="hljs-number">56</span></span>
             },
             {
                 <span class="hljs-attr"><span class="hljs-attr">"productId"</span></span>: <span class="hljs-number"><span class="hljs-number">2982</span></span>,
                 <span class="hljs-attr"><span class="hljs-attr">"itemsPurchasedLast12Months"</span></span>: <span class="hljs-number"><span class="hljs-number">59</span></span>
             }
         ]
     },
     {
         ...
     },
     {
         ...
     }
 ]
</blockquote></pre>
                    </li>
                    <li>
                        PySpark contains a special <strong>explode</strong> function, which returns a new row for each element of the array. This will help flatten the <strong>topProductPurchases</strong> column for better readability or for easier querying. Run the following in a new code cell:

                        <pre id="codeBlock13" class="mt-0"><blockquote class="language-python hljs"> <span class="hljs-keyword"><span class="hljs-keyword">from</span></span> pyspark.sql.functions <span class="hljs-keyword"><span class="hljs-keyword">import</span></span> udf, explode

 flat=df.select(<span class="hljs-string"><span class="hljs-string">'visitorId'</span></span>,explode(<span class="hljs-string"><span class="hljs-string">'topProductPurchases'</span></span>).alias(<span class="hljs-string"><span class="hljs-string">'topProductPurchases_flat'</span></span>))
 flat.show(<span class="hljs-number"><span class="hljs-number">100</span></span>)
</blockquote></pre>

                        In this cell, we created a new dataframe named <strong>flat</strong> that includes the <strong>visitorId</strong> field and a new aliased field named <strong>topProductPurchases_flat</strong>. As you can see, the output is a bit easier to read and, by extension, easier to query.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/spark-explode-output.png" alt="The improved output is displayed." title="Spark explode output"><br><br>
                    </li>
                    <li>
                        Create a new cell and execute the following code to create a new flattened version of the dataframe that extracts the <strong>topProductPurchases_flat.productId</strong> and <strong>topProductPurchases_flat.itemsPurchasedLast12Months</strong> fields to create new rows for each data combination:

                        <pre id="codeBlock14" class="mt-0"><blockquote class="language-python hljs"> topPurchases = (flat.select(<span class="hljs-string"><span class="hljs-string">'visitorId'</span></span>,<span class="hljs-string"><span class="hljs-string">'topProductPurchases_flat.productId'</span></span>,<span class="hljs-string"><span class="hljs-string">'topProductPurchases_flat.itemsPurchasedLast12Months'</span></span>)
     .orderBy(<span class="hljs-string"><span class="hljs-string">'visitorId'</span></span>))

 topPurchases.show(<span class="hljs-number"><span class="hljs-number">100</span></span>)
</blockquote></pre>

                        In the output, notice that we now have multiple rows for each <strong>visitorId</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/spark-toppurchases-output.png" alt="The vistorId rows are highlighted." title="topPurchases output"><br><br>
                    </li>
                    <li>
                        Let’s order the rows by the number of items purchased in the last 12 months. Create a new code cell and execute the following code:

                        <pre id="codeBlock15" class="mt-0"><blockquote class="language-python hljs"> <span class="hljs-comment"><span class="hljs-comment"># Let's order by the number of items purchased in the last 12 months</span></span>
 sortedTopPurchases = topPurchases.orderBy(<span class="hljs-string"><span class="hljs-string">"itemsPurchasedLast12Months"</span></span>)

 display(sortedTopPurchases.limit(<span class="hljs-number"><span class="hljs-number">100</span></span>))
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sorted-12-months.png" alt="The result is displayed." title="Sorted result set"><br><br>
                    </li>
                    <li>
                        How do we sort in reverse order? One might conclude that we could make a call like this: <em>topPurchases.orderBy(“itemsPurchasedLast12Months desc”)</em>. Try it in a new code cell:

                        <pre id="codeBlock16" class="mt-0"><blockquote class="language-python hljs"> topPurchases.orderBy(<span class="hljs-string"><span class="hljs-string">"itemsPurchasedLast12Months desc"</span></span>)
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sort-desc-error.png" alt="An error is displayed." title="Sort desc error"><br><br>

                        Notice that there is an <strong>AnalysisException</strong>`** error, because <strong>itemsPurchasedLast12Months desc</strong> does not match up with a column name.

                        Why does this not work?

                        <ul>
                            <li>The <strong>DataFrames</strong> API is built upon an SQL engine.</li>
                            <li>There is a lot of familiarity with this API and SQL syntax in general.</li>
                            <li>The problem is that <strong>orderBy(..)</strong> expects the name of the column.</li>
                            <li>What we specified was an SQL expression in the form of <strong>requests desc</strong>.</li>
                            <li>What we need is a way to programmatically express such an expression.</li>
                            <li>This leads us to the second variant, <strong>orderBy(Column)</strong>,` and more specifically, the class <strong>Column</strong>.</li>
                        </ul>
                    </li>
                    <li>
                        The <strong>Column</strong> class is an object that encompasses more than just the name of the column, but also column-level-transformations, such as sorting in a descending order. Replace the code that failed previously with the following code and run it:

                        <pre id="codeBlock17" class="mt-0"><blockquote class="language-python hljs"> sortedTopPurchases = (topPurchases
     .orderBy( col(<span class="hljs-string"><span class="hljs-string">"itemsPurchasedLast12Months"</span></span>).desc() ))

 display(sortedTopPurchases.limit(<span class="hljs-number"><span class="hljs-number">100</span></span>))
</blockquote></pre>

                        Notice that the results are now sorted by the <strong>itemsPurchasedLast12Months</strong> column in descending order, thanks to the <strong>desc()</strong> method on the <strong>col</strong> object.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/sort-desc-col.png" alt="The results are sorted in descending order." title="Sort desc"><br><br>
                    </li>
                    <li>
                        How many <em>types</em> of products did each customer purchase? To figure this out, we need to group by <strong>visitorId</strong> and aggregate on the number of rows per customer. Run the following code in a new code cell:

                        <pre id="codeBlock18" class="mt-0"><blockquote class="language-python hljs"> groupedTopPurchases = (sortedTopPurchases.select(<span class="hljs-string"><span class="hljs-string">"visitorId"</span></span>)
     .groupBy(<span class="hljs-string"><span class="hljs-string">"visitorId"</span></span>)
     .agg(count(<span class="hljs-string"><span class="hljs-string">"*"</span></span>).alias(<span class="hljs-string"><span class="hljs-string">"total"</span></span>))
     .orderBy(<span class="hljs-string"><span class="hljs-string">"visitorId"</span></span>) )

 display(groupedTopPurchases.limit(<span class="hljs-number"><span class="hljs-number">100</span></span>))
</blockquote></pre>

                        Notice how we use the <strong>groupBy</strong> method on the <strong>visitorId</strong> column, and the <strong>agg</strong> method over a count of records to display the total for each customer.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/spark-grouped-top-purchases.png" alt="The query output is displayed." title="Grouped top purchases output"><br><br>
                    </li>
                    <li>
                        How many <em>total items</em> did each customer purchase? To figure this out, we need to group by <strong>visitorId</strong> and aggregate on the sum of <strong>itemsPurchasedLast12Months</strong> values per customer. Run the following code in a new code cell:

                        <pre id="codeBlock19" class="mt-0"><blockquote class="language-python hljs">groupedTopPurchases = (sortedTopPurchases.select(<span class="hljs-string"><span class="hljs-string">"visitorId"</span></span>,<span class="hljs-string"><span class="hljs-string">"itemsPurchasedLast12Months"</span></span>)
    .groupBy(<span class="hljs-string"><span class="hljs-string">"visitorId"</span></span>)
    .agg(sum(<span class="hljs-string"><span class="hljs-string">"itemsPurchasedLast12Months"</span></span>).alias(<span class="hljs-string"><span class="hljs-string">"totalItemsPurchased"</span></span>))
    .orderBy(<span class="hljs-string"><span class="hljs-string">"visitorId"</span></span>) )

display(groupedTopPurchases.limit(<span class="hljs-number"><span class="hljs-number">100</span></span>))
</blockquote></pre>

                        Here we group by <strong>visitorId</strong> once again, but now we use a <strong>sum</strong> over the <strong>itemsPurchasedLast12Months</strong> column in the <strong>agg</strong> method. Notice that we included the <strong>itemsPurchasedLast12Months</strong> column in the <strong>select</strong> statement so we could use it in the <strong>sum</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/spark-grouped-top-purchases-total-items.png" alt="The query output is displayed." title="Grouped top total items output"><br><br>
                    </li>
                    <li>
                        Keep the notebook open for the next exercise.
                    </li>
                </ol>

                <h3 id="exercise-4---integrating-sql-and-spark-pools-in-azure-synapse-analytics">Exercise 4 - Integrating SQL and Spark pools in Azure Synapse Analytics</h3>

                Tailwind Traders wants to write to the SQL database associated with dedicated SQL pool after performing data engineering tasks in Spark, then reference that SQL database as a source for joining with Spark dataframes that contain data from other files. <br><br>

                You decide to use the Apache Spark to Synapse SQL connector to efficiently transfer data between Spark databases and SQL databases in Azure Synapse.<br><br>

                Transferring data between Spark databases and SQL databases can be done using JDBC. However, given two distributed systems such as Spark pools and SQL pools, JDBC tends to be a bottleneck with serial data transfer.<br><br>

                The Apache Spark pool to Synapse SQL connector is a data source implementation for Apache Spark. It uses the Azure Data Lake Storage Gen2 and PolyBase in dedicated SQL pools to efficiently transfer data between the Spark cluster and the Synapse SQL instance.

                <h3 id="task-1-update-notebook">Task 1: Update notebook</h3>

                <ol>
                    <li>
                        We have been using Python code in these cells up to this point. If we want to use the Apache Spark pool to Synapse SQL connector, one option is to create a temporary view of the data within the dataframe. Run the following in a new code cell to create a view named <strong>top_purchases</strong>:

                        <pre id="codeBlock20" class="mt-0"><blockquote class="language-python hljs"> <span class="hljs-comment"><span class="hljs-comment"># Create a temporary view for top purchases so we can load from Scala</span></span>
 topPurchases.createOrReplaceTempView(<span class="hljs-string"><span class="hljs-string">"top_purchases"</span></span>)
</blockquote></pre>

                        We created a new temporary view from the <strong>topPurchases</strong> dataframe that we created earlier and which contains the flattened JSON user purchases data.
                    </li>
                    <li>
                        We must run code that uses the Apache Spark pool to Synapse SQL connector in Scala. To do this, we add the <strong>%%spark</strong> magic to the cell. Run the following in a new code cell to read from the <strong>top_purchases</strong> view:

                        <pre id="codeBlock21" class="mt-0"><blockquote class="language-scala"> %%spark
 // Make sure the name of the dedcated SQL pool (SQLPool01 below) matches the name of your SQL pool.
 val df = spark.sqlContext.sql("select * from top_purchases")
 df.write.synapsesql("SQLPool01.wwi.TopPurchases", Constants.INTERNAL)
</blockquote></pre>

                        <blockquote>
                            <strong>Note</strong>: The cell may take over a minute to execute. If you have run this command before, you will receive an error stating that “There is already and object named..” because the table already exists.
                        </blockquote>

                        After the cell finishes executing, let’s take a look at the list of SQL tables to verify that the table was successfully created for us.
                    </li>
                    <li>
                        <strong>Leave the notebook open</strong>, then navigate to the <strong>Data</strong> hub (if not already selected).
                    </li>
                    <li>
                        Select the <strong>Workspace</strong> tab, In the <strong>ellipses (…)</strong> menu for <strong>Databases</strong>, select <strong>Refresh</strong>. Then expand the <strong>SQLPool01</strong> database and its <strong>Tables</strong> folder, and expand the <strong>wwi.TopPurchases</strong> table and its columns.

                        The <strong>wwi.TopPurchases</strong> table was automatically created for us, based on the derived schema of the Spark dataframe. The Apache Spark pool to Synapse SQL connector was responsible for creating the table and efficiently loading the data into it.
                    </li>
                    <li>
                        Return to the notebook and run the following code in a new code cell to read sales data from all the Parquet files located in the <em>sale-small/Year=2019/Quarter=Q4/Month=12/</em> folder:

                        <pre id="codeBlock22" class="mt-0"><blockquote class="language-python hljs"> dfsales = spark.read.load(<span class="hljs-string"><span class="hljs-string">'abfss://wwi-02@'</span></span> + datalake + <span class="hljs-string"><span class="hljs-string">'.dfs.core.windows.net/sale-small/Year=2019/Quarter=Q4/Month=12/*/*.parquet'</span></span>, format=<span class="hljs-string"><span class="hljs-string">'parquet'</span></span>)
 display(dfsales.limit(<span class="hljs-number"><span class="hljs-number">10</span></span>))
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/2019-sales.png" alt="The cell output is displayed." title="2019 sales"><br><br>

                        Compare the file path in the cell above to the file path in the first cell. Here we are using a relative path to load <strong>all December 2019 sales</strong> data from the Parquet files located in <strong>sale-small</strong>, vs. just December 31, 2019 sales data. <br><br>

                        Next, let’s load the <strong>TopSales</strong> data from the SQL table we created earlier into a new Spark dataframe, then join it with this new <strong>dfsales</strong> dataframe. To do this, we must once again use the <strong>%%spark</strong> magic on a new cell since we’ll use the Apache Spark pool to Synapse SQL connector to retrieve data from the SQL database. Then we need to add the dataframe contents to a new temporary view so we can access the data from Python.
                    </li>
                    <li>
                        Run the following code in a new cell to read from the <strong>TopSales</strong> SQL table and save it to a temporary view:

                        <pre id="codeBlock23" class="mt-0"><blockquote class="language-scala"> %%spark
 // Make sure the name of the SQL pool (SQLPool01 below) matches the name of your SQL pool.
 val df2 = spark.read.synapsesql("SQLPool01.wwi.TopPurchases")
 df2.createTempView("top_purchases_sql")

 df2.head(10)
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/read-sql-pool.png" alt="The cell and its output are displayed as described." title="Read SQL pool"><br><br>

                        The cell’s language is set to Scala by using the <strong>%%spark</strong> magic at the top of the cell. We declared a new variable named <strong>df2</strong> as a new DataFrame created by the <strong>spark.read.synapsesql</strong> method, which reads from the <strong>TopPurchases</strong> table in the SQL database. Then we populated a new temporary view named <strong>top_purchases_sql</strong>. Finally, we showed the first 10 records with the <strong>df2.head(10))</strong> line. The cell output displays the dataframe values.
                    </li>
                    <li>
                        Run the following code in a new code cell to create a new dataframe in Python from the <strong>top_purchases_sql</strong> temporary view, then display the first 10 results:

                        <pre id="codeBlock24" class="mt-0"><blockquote class="language-python hljs"> dfTopPurchasesFromSql = sqlContext.table(<span class="hljs-string"><span class="hljs-string">"top_purchases_sql"</span></span>)

 display(dfTopPurchasesFromSql.limit(<span class="hljs-number"><span class="hljs-number">10</span></span>))
</blockquote></pre>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/df-top-purchases.png" alt="The dataframe code and output are displayed." title="dfTopPurchases dataframe"><br><br>
                    </li>
                    <li>
                        Run the following code in a new code cell to join the data from the sales Parquet files and the <strong>TopPurchases</strong> SQL database:

                        <pre id="codeBlock25" class="mt-0"><blockquote class="language-python hljs"> inner_join = dfsales.join(dfTopPurchasesFromSql,
     (dfsales.CustomerId == dfTopPurchasesFromSql.visitorId) &amp; (dfsales.ProductId == dfTopPurchasesFromSql.productId))

 inner_join_agg = (inner_join.select(<span class="hljs-string"><span class="hljs-string">"CustomerId"</span></span>,<span class="hljs-string"><span class="hljs-string">"TotalAmount"</span></span>,<span class="hljs-string"><span class="hljs-string">"Quantity"</span></span>,<span class="hljs-string"><span class="hljs-string">"itemsPurchasedLast12Months"</span></span>,<span class="hljs-string"><span class="hljs-string">"top_purchases_sql.productId"</span></span>)
     .groupBy([<span class="hljs-string"><span class="hljs-string">"CustomerId"</span></span>,<span class="hljs-string"><span class="hljs-string">"top_purchases_sql.productId"</span></span>])
     .agg(
         sum(<span class="hljs-string"><span class="hljs-string">"TotalAmount"</span></span>).alias(<span class="hljs-string"><span class="hljs-string">"TotalAmountDecember"</span></span>),
         sum(<span class="hljs-string"><span class="hljs-string">"Quantity"</span></span>).alias(<span class="hljs-string"><span class="hljs-string">"TotalQuantityDecember"</span></span>),
         sum(<span class="hljs-string"><span class="hljs-string">"itemsPurchasedLast12Months"</span></span>).alias(<span class="hljs-string"><span class="hljs-string">"TotalItemsPurchasedLast12Months"</span></span>))
     .orderBy(<span class="hljs-string"><span class="hljs-string">"CustomerId"</span></span>) )

 display(inner_join_agg.limit(<span class="hljs-number"><span class="hljs-number">100</span></span>))
</blockquote></pre>

                        In the query, we joined the <strong>dfsales</strong> and <strong>dfTopPurchasesFromSql</strong> dataframes, matching on <strong>CustomerId</strong> and <strong>ProductId</strong>. This join combined the <strong>TopPurchases</strong> SQL table data with the December 2019 sales Parquet data. <br><br>

                        We grouped by the <strong>CustomerId</strong> and <strong>ProductId</strong> fields. Since the <strong>ProductId</strong> field name is ambiguous (it exists in both dataframes), we had to fully-qualify the <strong>ProductId</strong> name to refer to the one in the <strong>TopPurchases</strong> dataframe.<br><br>

                        Then we created an aggregate that summed the total amount spent on each product in December, the total number of product items in December, and the total product items purchased in the last 12 months.<br><br>

                        Finally, we displayed the joined and aggregated data in a table view.

                        <blockquote>
                            <strong>Note</strong>: You can click the column headers in the Table view to sort the result set.
                        </blockquote>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/join-output.png" alt="The cell contents and output are displayed." title="Join output"><br><br>
                    </li>
                    <li>At the top right of the notebook, use the <strong>Stop Session</strong> button to stop the notebook session.</li>
                    <li>Publish the notebook if you want to review it again later. Then close it.</li>
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