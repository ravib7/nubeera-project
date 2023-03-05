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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 1 - Explore compute and storage options for data engineering workloads</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Certifications</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                This lab teaches ways to structure the data lake, and to optimize the files for exploration, streaming, and batch workloads. You will learn how to organize the data lake into levels of data refinement as they transform files through batch and stream processing. Then you will learn how to create indexes on their datasets, such as CSV, JSON, and Parquet files, and use them for potential query and workload acceleration.

                After completing this lab, you will be able to:

                <ul>
                    <li>Combine streaming and batch processing with a single pipeline</li>
                    <li>Organize the data lake into levels of file transformation</li>
                    <li>Index data lake storage for query and workload acceleration</li>
                </ul>

                <h3 id="lab-setup-and-pre-requisites">Lab setup and pre-requisites</h3>

                Before starting this lab, ensure you have successfully completed the setup steps to create your lab environment.

                <h3 id="exercise-1---delta-lake-architecture">Exercise 1 - Delta Lake architecture</h3>

                In this exercise, you will use an Azure Databricks workspace and perform Structured Streaming with batch jobs by using Delta Lake. You need to complete the exercise within a Databricks Notebook. To begin, you need to have access to an Azure Databricks workspace.

                <h3 id="task-1-create-an-azure-databricks-cluster">Task 1: Create an Azure Databricks cluster</h3>

                <ol>
                    <li>
                        Sign into the Azure portal at <code>https://portal.azure.com</code>, and navigate to the <strong>data-engineering-synapse-<em>xxxxxxx</em></strong> resource group created by the setup script for this course. Then select the Azure Databricks Service workspace.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/select-databricks-workspace.png" alt="The Azure Databricks service is highlighted." title="Select Azure Databricks service"><br><br>
                    </li>
                    <li>
                        Select <strong>Launch Workspace</strong> to open your Databricks workspace in a new tab.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/databricks-launch-workspace.png" alt="The Azure Databricks Launch Workspace button is displayed." title="Launch Workspace"><br><br>
                    </li>
                    <li>In the left-hand menu of your Databricks workspace, select <strong>Compute</strong>.</li>
                    <li>
                        Select <strong>+Create Cluster</strong> to add a new cluster.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/create-a-cluster.png" alt="The create cluster page"><br><br>
                    </li>
                    <li>Enter a name for your cluster, such as <code>Test Cluster</code>.</li>
                    <li>Select a <strong>Single Node</strong> cluster mode.</li>
                    <li>Select the <strong>Databricks RuntimeVersion</strong>. We recommend the latest runtime and <strong>Scala 2.12</strong>.</li>
                    <li>Set the <strong>Terminate after</strong> timeout to 30 minutes and select the default node type.</li>
                    <li>Select <strong>Create Cluster</strong>.</li>
                    <li>Wait for the cluster to start. Please note you will have to wait 5 - 7 minutes for the cluster to start up before moving onto the next task.</li>
                </ol>

                <h3 id="task-2-clone-the-databricks-archive">Task 2: Clone the Databricks archive</h3>

                <ol>
                    <li>In the Azure Databricks Workspace, in the left pane, select <strong>Workspace</strong> &gt; <strong>Users</strong>, and select your username (the entry with the house icon).</li>
                    <li>
                        In the pane that appears, select the arrow next to your name, and select <strong>Import</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/import-archive.png" alt="The menu option to import the archive"><br><br>
                    </li>
                    <li>
                        In the <strong>Import Notebooks</strong> dialog box, select the URL and paste in the following URL:

                        <pre id="codeBlock0" class="mt-0"><blockquote class="hljs cpp"> https:<span class="hljs-comment"><span class="hljs-comment">//github.com/MicrosoftLearning/DP-203-Data-Engineer/raw/master/Allfiles/microsoft-learning-paths-databricks-notebooks/data-engineering/DBC/11-Delta-Lake-Architecture.dbc</span></span>
</blockquote></pre>
                    </li>
                    <li>Select <strong>Import</strong>.</li>
                    <li>Select the <strong>11-Delta-Lake-Architecture</strong> folder that appears.</li>
                </ol>

                <h3 id="task-3-run-code-in-the-1-delta-architecture-notebook">Task 3: Run code in the <em>1-Delta-Architecture</em> notebook</h3>

                <ol>
                    <li>Open the <strong>1-Delta-Architecture</strong> notebook.</li>
                    <li>
                        Attach your cluster to the notebook before following the instructions and running the cells it contains. To run a code cell, select the cell you want to run and then use the <strong>⏵</strong> button at its top right to run it.

                        Within the notebook, you will explore combining streaming and batch processing with a single pipeline.
                    </li>
                </ol>

                <h3 id="important-shut-down-your-cluster">Important: Shut down your cluster</h3>

                <ol>
                    <li>After you’ve finished exploring the Azure Databricks notebook; in your Azure Databricks workspace, the left pane, select <strong>Compute</strong> and select your cluster. Then select <strong>Terminate</strong> to stop the cluster.</li>
                </ol>

                <h3 id="exercise-2---working-with-apache-spark-in-synapse-analytics">Exercise 2 - Working with Apache Spark in Synapse Analytics</h3>

                This exercise demonstrates the experience of working with Apache Spark in Azure Synapse Analytics. You will also learn how to use libraries like Hyperspace and MSSparkUtil to optimize the experience of working with Data Lake storage accounts from Spark notebooks.

                After completing the exercise, you will understand how to load and make use of Spark libraries in an Azure Synapse Analytics workspace.

                <h3 id="task-1-index-the-data-lake-storage-with-hyperspace">Task 1: Index the Data Lake storage with Hyperspace</h3>

                When loading data from Azure Data Lake Gen 2, searching in the data is one of the most resource consuming operations. Hyperspace introduces the ability for Apache Spark users to create indexes on their datasets, such as CSV, JSON, and Parquet, and use them for potential query and workload acceleration.

                Hyperspace lets you create indexes on records scanned from persisted data files. After they’re successfully created, an entry that corresponds to the index is added to the Hyperspace’s metadata. This metadata is later used by Apache Spark’s optimizer during query processing to find and use proper indexes. If the underlying data changes, you can refresh an existing index to capture that.

                Also, Hyperspace allows users to compare their original plan versus the updated index-dependent plan before running their query.

                <ol>
                    <li>
                        Open Synapse Studio at <code>https://web.azuresynapse.net</code>, and if prompted, select your Azure Active Directory tenant, subscription, and Azure Synapse Analytics workspace. If prompted with “We use optional cookies to provide a better experience.” then select Accept.
                    </li>
                    <li>
                        Select the <strong>Develop</strong> hub.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/develop-hub.png" alt="The develop hub is highlighted." title="Develop hub"><br><br>
                    </li>
                    <li>
                        Select <strong>+</strong>, then <strong>Notebook</strong> to create a new Synapse notebook.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-notebook1.png" alt="The new notebook menu item is highlighted." title="New Notebook"><br><br>
                    </li>
                    <li>
                        Enter <strong>Hyperspace</strong> for the notebook name <strong>(1)</strong>, then select the <strong>Properties</strong> button above <strong>(2)</strong> to hide the properties pane.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-properties.png" alt="The notebook properties are displayed." title="Properties"><br><br>
                    </li>
                    <li>
                        Attach the notebook to <strong>SparkPool01</strong> and make sure that the language is set to <strong>PySpark (Python)</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/notebook-attach-cluster.png" alt="The cluster is selected and the language is set." title="Attach cluster"><br><br>
                    </li>
                    <li>
                        Add the following code to a new cell in your notebook:
                    </li>
                </ol>

                <pre id="codeBlock1" class="mt-0"><blockquote class="language-python hljs"><span class="hljs-keyword"><span class="hljs-keyword">from</span></span> hyperspace <span class="hljs-keyword"><span class="hljs-keyword">import</span></span> *  
<span class="hljs-keyword"><span class="hljs-keyword">from</span></span> com.microsoft.hyperspace <span class="hljs-keyword"><span class="hljs-keyword">import</span></span> *
<span class="hljs-keyword"><span class="hljs-keyword">from</span></span> com.microsoft.hyperspace.index <span class="hljs-keyword"><span class="hljs-keyword">import</span></span> *

<span class="hljs-comment"><span class="hljs-comment"># Disable BroadcastHashJoin, so Spark will use standard SortMergeJoin. Currently, Hyperspace indexes utilize SortMergeJoin to speed up query.</span></span>
spark.conf.set(<span class="hljs-string"><span class="hljs-string">"spark.sql.autoBroadcastJoinThreshold"</span></span>, <span class="hljs-number"><span class="hljs-number">-1</span></span>)

<span class="hljs-comment"><span class="hljs-comment"># Replace the value below with the name of your primary ADLS Gen2 account for your Synapse workspace</span></span>
datalake = <span class="hljs-string"><span class="hljs-string">'asadatalakeSUFFIX'</span></span>

dfSales = spark.read.parquet(<span class="hljs-string"><span class="hljs-string">"abfss://wwi-02@"</span></span> + datalake + <span class="hljs-string"><span class="hljs-string">".dfs.core.windows.net/sale-small/Year=2019/Quarter=Q4/Month=12/*/*.parquet"</span></span>)
dfSales.show(<span class="hljs-number"><span class="hljs-number">10</span></span>)

dfCustomers = spark.read.load(<span class="hljs-string"><span class="hljs-string">"abfss://wwi-02@"</span></span> + datalake + <span class="hljs-string"><span class="hljs-string">".dfs.core.windows.net/data-generators/generator-customer-clean.csv"</span></span>, format=<span class="hljs-string"><span class="hljs-string">"csv"</span></span>, header=<span class="hljs-keyword"><span class="hljs-keyword">True</span></span>)
dfCustomers.show(<span class="hljs-number"><span class="hljs-number">10</span></span>)

<span class="hljs-comment"><span class="hljs-comment"># Create an instance of Hyperspace</span></span>
hyperspace = Hyperspace(spark)
</blockquote></pre>

                <ol>
                    <li>
                        In the <strong>datalake</strong> variable value, replace <strong><em>SUFFIX</em></strong> with your unique resource name extension, so that the variable represents the name of your Azure Data Lake storage account (which should be <strong>asadatalake<em>xxxxxx</em></strong>).

                        <blockquote>
                            To confirm this, do the following:

                            <ol>
                                <li>
                                    Navigate to the <strong>Data</strong> hub.

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/data-hub.png" alt="The data hub is highlighted." title="Data hub"><br><br>
                                </li>
                                <li>
                                    Select the <strong>Linked</strong> tab <strong>(1)</strong>, expand the Azure Data Lake Storage Gen2 group, then make note of the primary ADLS Gen2 name <strong>(2)</strong> next to the name of the workspace.

                                    <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/adlsgen2-name.png" alt="The primary ADLS Gen2 name is displayed." title="ADLS Gen2 name"><br><br>
                                </li>
                            </ol>
                        </blockquote>
                    </li>
                    <li>
                        Run the modified code cell by using its <strong>▷</strong> button on the left or by pressing <strong>Shift+Enter</strong>. It will load the two DataFrames with data from the data lake and initialize Hyperspace.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab-02-ex-02-task-02-initialize-hyperspace.png" alt="Load data from the data lake and initialize Hyperspace" title="Initialize Hyperspace"><br><br>

                        <blockquote>
                            <strong>Note</strong>: The first time you run a cell in the notebook will take a few minutes since it must start a new Spark cluster. Each subsequent cell execution should be must faster.
                        </blockquote>
                    </li>
                    <li>
                        Select the <strong>+ Code</strong> button beneath the cell output to create a new code cell.
                    </li>
                    <li>
                        Paste the following code into the new cell:
                    </li>
                </ol>

                <pre id="codeBlock2" class="mt-0"><blockquote class="language-python hljs"><span class="hljs-comment"><span class="hljs-comment">#create indexes: each one contains a name, a set of indexed columns and a set of included columns</span></span>
indexConfigSales = IndexConfig(<span class="hljs-string"><span class="hljs-string">"indexSALES"</span></span>, [<span class="hljs-string"><span class="hljs-string">"CustomerId"</span></span>], [<span class="hljs-string"><span class="hljs-string">"TotalAmount"</span></span>])
indexConfigCustomers = IndexConfig(<span class="hljs-string"><span class="hljs-string">"indexCUSTOMERS"</span></span>, [<span class="hljs-string"><span class="hljs-string">"CustomerId"</span></span>], [<span class="hljs-string"><span class="hljs-string">"FullName"</span></span>])

hyperspace.createIndex(dfSales, indexConfigSales)			<span class="hljs-comment"><span class="hljs-comment"># only create index once</span></span>
hyperspace.createIndex(dfCustomers, indexConfigCustomers)	<span class="hljs-comment"><span class="hljs-comment"># only create index once</span></span>
hyperspace.indexes().show()
</blockquote></pre>

                <ol>
                    <li>
                        Run the new cell. It will create two indexes and display their structure.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab-02-ex-02-task-02-create-indexes.png" alt="Create new indexes and display their structure" title="New indexes"><br><br>
                    </li>
                    <li>
                        Add another new code cell to your notebook with the following code:
                    </li>
                </ol>

                <pre id="codeBlock3" class="mt-0"><blockquote class="language-python hljs">df1 = dfSales.filter(<span class="hljs-string"><span class="hljs-string">"""CustomerId = 6"""</span></span>).select(<span class="hljs-string"><span class="hljs-string">"""TotalAmount"""</span></span>)
df1.show()
df1.explain(<span class="hljs-keyword"><span class="hljs-keyword">True</span></span>)
</blockquote></pre>

                <ol>
                    <li>
                        Run the new cell. The output will show that the physical execution plan is not taking into account any of the indexes (performs a file scan on the original data file).

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab-02-ex-02-task-02-explain-hyperspace-01.png" alt="Hyperspace explained - no indexes used"><br><br>
                    </li>
                    <li>
                        Now add another new cell to your notebook with the following code (notice the extra line at the beginning used to enable Hyperspace optimization in the Spark engine):
                    </li>
                </ol>

                <pre id="codeBlock4" class="mt-0"><blockquote class="language-python hljs"><span class="hljs-comment"><span class="hljs-comment"># Enable Hyperspace - Hyperspace optimization rules become visible to the Spark optimizer and exploit existing Hyperspace indexes to optimize user queries</span></span>
Hyperspace.enable(spark)
df1 = dfSales.filter(<span class="hljs-string"><span class="hljs-string">"""CustomerId = 6"""</span></span>).select(<span class="hljs-string"><span class="hljs-string">"""TotalAmount"""</span></span>)
df1.show()
df1.explain(<span class="hljs-keyword"><span class="hljs-keyword">True</span></span>)
</blockquote></pre>

                <ol>
                    <li>
                        Run the new cell. The output will show that the physical execution plan is now using the index instead of the original data file.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab-02-ex-02-task-02-explain-hyperspace-02.png" alt="Hyperspace explained - using an index"><br><br>
                    </li>
                    <li>
                        Hyperspace provides an Explain API that allows you to compare the execution plans without indexes vs. with indexes. Add a new cell with the following code:
                    </li>
                </ol>

                <pre id="codeBlock5" class="mt-0"><blockquote class="language-python hljs">df1 = dfSales.filter(<span class="hljs-string"><span class="hljs-string">"""CustomerId = 6"""</span></span>).select(<span class="hljs-string"><span class="hljs-string">"""TotalAmount"""</span></span>)

spark.conf.set(<span class="hljs-string"><span class="hljs-string">"spark.hyperspace.explain.displayMode"</span></span>, <span class="hljs-string"><span class="hljs-string">"html"</span></span>)
hyperspace.explain(df1, <span class="hljs-keyword"><span class="hljs-keyword">True</span></span>, displayHTML)
</blockquote></pre>

                <ol>
                    <li>
                        Run the new cell. The output shows a comparison <code>Plan with indexes</code> vs. <code>Plan without indexes</code>. Observe how, in the first case the index file is used while in the second case the original data file is used.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab-02-ex-02-task-02-explain-hyperspace-03.png" alt="Hyperspace explained - plan comparison"><br><br>
                    </li>
                    <li>
                        Let’s investigate now a more complex case, involving a join operation. Add a new cell with the following code:
                    </li>
                </ol>

                <pre id="codeBlock6" class="mt-0"><blockquote class="language-python hljs">eqJoin = dfSales.join(dfCustomers, dfSales.CustomerId == dfCustomers.CustomerId).select(dfSales.TotalAmount, dfCustomers.FullName)

hyperspace.explain(eqJoin, <span class="hljs-keyword"><span class="hljs-keyword">True</span></span>, displayHTML)
</blockquote></pre>

                <ol>
                    <li>
                        Run the new cell. The output shows again a comparison <code>Plan with indexes</code> vs. <code>Plan without indexes</code>, where indexes are used in the first case and the original data files in the second.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab-02-ex-02-task-02-explain-hyperspace-04.png" alt="Hyperspace explained - plan comparison for join"><br><br>
                    </li>
                    <li>
                        To deactivate Hyperspace and clean up the indexes, add and run a new cell with the following code:
                    </li>
                </ol>

                <pre id="codeBlock7" class="mt-0"><blockquote class="language-python hljs"><span class="hljs-comment"><span class="hljs-comment"># Disable Hyperspace - Hyperspace rules no longer apply during query optimization. Disabling Hyperspace has no impact on created indexes because they remain intact</span></span>
Hyperspace.disable(spark)

hyperspace.deleteIndex(<span class="hljs-string"><span class="hljs-string">"indexSALES"</span></span>)
hyperspace.vacuumIndex(<span class="hljs-string"><span class="hljs-string">"indexSALES"</span></span>)
hyperspace.deleteIndex(<span class="hljs-string"><span class="hljs-string">"indexCUSTOMERS"</span></span>)
hyperspace.vacuumIndex(<span class="hljs-string"><span class="hljs-string">"indexCUSTOMERS"</span></span>)
</blockquote></pre>

                <h3 id="task-2-explore-the-data-lake-storage-with-the-mssparkutil-library">Task 2: Explore the Data Lake storage with the MSSparkUtil library</h3>

                Microsoft Spark Utilities (MSSparkUtils) is a builtin package to help you easily perform common tasks. You can use MSSparkUtils to work with file systems, to get environment variables, and to work with secrets.

                <ol>
                    <li>Continue with the same notebook from the previous task and add a new cell with the following code:</li>
                </ol>

                <pre id="codeBlock8" class="mt-0"><blockquote class="language-python hljs"><span class="hljs-keyword"><span class="hljs-keyword">from</span></span> notebookutils <span class="hljs-keyword"><span class="hljs-keyword">import</span></span> mssparkutils

<span class="hljs-comment"><span class="hljs-comment">#</span></span>
<span class="hljs-comment"><span class="hljs-comment"># Microsoft Spark Utilities</span></span>
<span class="hljs-comment"><span class="hljs-comment">#</span></span>
<span class="hljs-comment"><span class="hljs-comment"># https://docs.microsoft.com/en-us/azure/synapse-analytics/spark/microsoft-spark-utilities?pivots=programming-language-python</span></span>
<span class="hljs-comment"><span class="hljs-comment">#</span></span>

<span class="hljs-comment"><span class="hljs-comment"># Azure storage access info</span></span>
blob_account_name = datalake
blob_container_name = <span class="hljs-string"><span class="hljs-string">'wwi-02'</span></span>
blob_relative_path = <span class="hljs-string"><span class="hljs-string">'/'</span></span>
linkedServiceName = datalake
blob_sas_token = mssparkutils.credentials.getConnectionStringOrCreds(linkedServiceName)

<span class="hljs-comment"><span class="hljs-comment"># Allow SPARK to access from Blob remotely</span></span>
spark.conf.set(<span class="hljs-string"><span class="hljs-string">'fs.azure.sas.%s.%s.blob.core.windows.net'</span></span> % (blob_container_name, blob_account_name), blob_sas_token)

files = mssparkutils.fs.ls(<span class="hljs-string"><span class="hljs-string">'/'</span></span>)
<span class="hljs-keyword"><span class="hljs-keyword">for</span></span> file <span class="hljs-keyword"><span class="hljs-keyword">in</span></span> files:
    print(file.name, file.isDir, file.isFile, file.path, file.size)

mssparkutils.fs.mkdirs(<span class="hljs-string"><span class="hljs-string">'/SomeNewFolder'</span></span>)

files = mssparkutils.fs.ls(<span class="hljs-string"><span class="hljs-string">'/'</span></span>)
<span class="hljs-keyword"><span class="hljs-keyword">for</span></span> file <span class="hljs-keyword"><span class="hljs-keyword">in</span></span> files:
    print(file.name, file.isDir, file.isFile, file.path, file.size)
</blockquote></pre>

                <ol>
                    <li>Run the new cell and observe how MSSparkUtils is used to work with the file system.</li>
                </ol>

                <h3 id="task-3-stop-the-session">Task 3 Stop the session</h3>

                <ol>
                    <li>At the top right of the notebook, use the <strong>Stop Session</strong> button to stop the notebook session.</li>
                    <li>Publish the notebook if you want to review it again later. Then close it.</li>
                </ol>

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