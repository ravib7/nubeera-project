<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Data Factory in Azure</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Data Factory in Azure">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <link id="theme-style" rel="stylesheet" href="../../../../../../assets/css/theme.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../../templates/navbar.php'; ?>


    <div id="modal-sidepanel">
        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>

            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Azure Data Factory</strong><br><br>
                <ul>
                    <li><a href="index.php">tutorial copy data tool</a></li>
                    <li><a href="introduction.php">Introduction</a></li>
                    <li><a href="tutorial_bulk_copy_portal.php">tutorial bulk copy portal</a></li>

                </ul>
            </div>
        </div>
    </div>

    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Azure Data Factory</h1>
            <ol class="breadcrumb mx-5 mt-3 mb-0 px-0">
            <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Data Factory</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h2 id="copy-multiple-tables-in-bulk-by-using-azure-data-factory-in-the-azure-portal">Copy multiple tables in bulk by using Azure Data Factory in the Azure portal</h2>
                <h3>In this article</h3>

                <li><a href="#end-to-end-workflow">End-to-end workflow</a></li>
                <li><a href="#prerequisites">Prerequisites</a></li>
                <li><a href="#azure-services-to-access-sql-server">Azure services to access SQL server</a></li>
                <li><a href="#create-a-data-factory">Create a data factory</a></li>
                <li><a href="#create-linked-services">Create linked services</a></li>
                <li><a href="#create-datasets">Create datasets</a></li>
                <li><a href="#create-pipelines">Create pipelines</a></li>
                <li><a href="#trigger-a-pipeline-run">Trigger a pipeline run</a></li>
                <li><a href="#monitor-the-pipeline-run">Monitor the pipeline run</a></li>
                <li><a href="#next-steps">Next steps</a></li><br>

                This tutorial demonstrates <strong>copying a number of tables from Azure SQL Database to Azure Synapse Analytics</strong>. You can apply the same pattern in other copy scenarios as well. For example, copying tables from SQL Server/Oracle to Azure SQL Database/Azure Synapse Analytics /Azure Blob, copying different paths from Blob to Azure SQL Database tables.

                At a high level, this tutorial involves following steps:
                <br><br>
                <div class="checklist">
                    <ul>
                        <li>Create a data factory.</li>
                        <li>Create Azure SQL Database, Azure Synapse Analytics, and Azure Storage linked services.</li>
                        <li>Create Azure SQL Database and Azure Synapse Analytics datasets.</li>
                        <li>Create a pipeline to look up the tables to be copied and another pipeline to perform the actual copy operation.</li>
                        <li>Start a pipeline run.</li>
                        <li>Monitor the pipeline and activity runs.</li>
                    </ul>
                </div>
                This tutorial uses Azure portal. To learn about using other tools/SDKs to create a data factory.
                <h3 id="end-to-end-workflow" class="heading-anchor"><a class="anchor-link docon docon-link" href="#end-to-end-workflow" aria-labelledby="end-to-end-workflow"></a>End-to-end workflow</h3>
                In this scenario, you have a number of tables in Azure SQL Database that you want to copy to Azure Synapse Analytics. Here is the logical sequence of steps in the workflow that happens in pipelines:
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-bulk-copy-portal/tutorial-copy-multiple-tables.png" alt="Workflow" data-linktype="relative-path"><br><br>
                </span>

                <ul>
                    <li>The first pipeline looks up the list of tables that needs to be copied over to the sink data stores. Alternatively you can maintain a metadata table that lists all the tables to be copied to the sink data store. Then, the pipeline triggers another pipeline, which iterates over each table in the database and performs the data copy operation.</li>
                    <li>The second pipeline performs the actual copy. It takes the list of tables as a parameter. For each table in the list, copy the specific table in Azure SQL Database to the corresponding table in Azure Synapse Analytics using staged copy via Blob storage and PolyBase for best performance. In this example, the first pipeline passes the list of tables as a value for the parameter.</li>
                </ul>
                If you don't have an Azure subscription, create a <a href="https://azure.microsoft.com/free/" data-linktype="external">free account</a> before you begin.
                <h3 id="prerequisites" class="heading-anchor"><a class="anchor-link docon docon-link" href="#prerequisites" aria-labelledby="prerequisites"></a>Prerequisites</h3>
                <ul>
                    <li><strong>Azure Storage account</strong>. The Azure Storage account is used as staging blob storage in the bulk copy operation.</li>
                    <li><strong>Azure SQL Database</strong>. This database contains the source data. Create a database in SQL Database with Adventure Works LT sample data following Create a database in Azure SQL Database article. This tutorial copies all the tables from this sample database to an Azure Synapse Analytics.</li>
                    <li><strong>Azure Synapse Analytics</strong>. This data warehouse holds the data copied over from the SQL Database. If you don't have an Azure Synapse Analytics workspace, see the Get started with Azure Synapse Analytics article for steps to create one.</li>
                </ul>
                <h3 id="azure-services-to-access-sql-server" class="heading-anchor"><a class="anchor-link docon docon-link" href="#azure-services-to-access-sql-server" aria-labelledby="azure-services-to-access-sql-server"></a>Azure services to access SQL server</h3>
                For both SQL Database and Azure Synapse Analytics, allow Azure services to access SQL server. Ensure that <strong>Allow Azure services and resources to access this server</strong> setting is turned <strong>ON</strong> for your server. This setting allows the Data Factory service to read data from your Azure SQL Database and write data to your Azure Synapse Analytics.<br><br>
                To verify and turn on this setting, go to your server &gt; Security &gt; Firewalls and virtual networks &gt; set the <strong>Allow Azure services and resources to access this server</strong> to <strong>ON</strong>.
                <h3 id="create-a-data-factory" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-data-factory" aria-labelledby="create-a-data-factory"></a>Create a data factory</h3>
                <ol>
                    <li>
                        Launch <strong>Microsoft Edge</strong> or <strong>Google Chrome</strong> web browser. Currently, Data Factory UI is supported only in Microsoft Edge and Google Chrome web browsers.
                    </li><br>
                    <li>
                        Go to the <a href="https://portal.azure.com" data-linktype="external">Azure portal</a>.
                    </li><br>
                    <li>
                        On the left of the Azure portal menu, select <strong>Create a resource</strong> &gt; <strong>Integration</strong> &gt; <strong>Data Factory</strong>.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/doc-common-process/new-azure-data-factory-menu.png" alt="Data Factory selection in the &amp;quot;New&amp;quot; pane" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        On the <strong>New data factory</strong> page, enter <strong>ADFTutorialBulkCopyDF</strong> for <strong>name</strong>.
                        The name of the Azure data factory must be <strong>globally unique</strong>. If you see the following error for the name field, change the name of the data factory (for example, yournameADFTutorialBulkCopyDF).
                        <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-text" data-author-content="Data factory name &quot;ADFTutorialBulkCopyDF&quot; is not available
">Data factory name "ADFTutorialBulkCopyDF" is not available
</blockquote></pre><br>
                    </li>
                    <li>
                        Select your Azure <strong>subscription</strong> in which you want to create the data factory.
                    </li><br>
                    <li>
                        For the <strong>Resource Group</strong>, do one of the following steps:
                        <ul>
                            <li>
                                Select <strong>Use existing</strong>, and select an existing resource group from the drop-down list.
                            </li>
                            <li>
                                Select <strong>Create new</strong>, and enter the name of a resource group.
                                To learn about resource groups, see Using resource groups to manage your Azure resources.
                            </li>
                        </ul>
                    </li><br>
                    <li>
                        Select <strong>V2</strong> for the <strong>version</strong>.
                    </li><br>
                    <li>
                        Select the <strong>location</strong> for the data factory. For a list of Azure regions in which Data Factory is currently available, select the regions that interest you on the following page, and then expand <strong>Analytics</strong> to locate <strong>Data Factory</strong>: Products available by region. The data stores (Azure Storage, Azure SQL Database, etc.) and computes (HDInsight, etc.) used by data factory can be in other regions.
                    </li><br>
                    <li>
                        Click <strong>Create</strong>.
                    </li><br>
                    <li>
                        After the creation is complete, select <strong>Go to resource</strong> to navigate to the <strong>Data Factory</strong> page.
                    </li><br>
                    <li>
                        Select <strong>Open</strong> on the <strong>Open Azure Data Factory Studio</strong> tile to launch the Data Factory UI application in a separate tab.
                    </li>
                </ol>
                <h3 id="create-linked-services" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-linked-services" aria-labelledby="create-linked-services"></a>Create linked services</h3>
                You create linked services to link your data stores and computes to a data factory. A linked service has the connection information that the Data Factory service uses to connect to the data store at runtime.<br><br>
                In this tutorial, you link your Azure SQL Database, Azure Synapse Analytics, and Azure Blob Storage data stores to your data factory. The Azure SQL Database is the source data store. The Azure Synapse Analytics is the sink/destination data store. The Azure Blob Storage is to stage the data before the data is loaded into Azure Synapse Analytics by using PolyBase.
                <h3 id="create-the-source-azure-sql-database-linked-service" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-the-source-azure-sql-database-linked-service" aria-labelledby="create-the-source-azure-sql-database-linked-service"></a>Create the source Azure SQL Database linked service</h3>
                In this step, you create a linked service to link your database in Azure SQL Database to the data factory.<br><br>
                <ol>
                    <li>
                        Open Manage tab from the left pane.
                    </li><br>
                    <li>
                        On the Linked services page, select <strong>+New</strong> to create a new linked service.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/doc-common-process/new-linked-service.png" alt="New linked service." data-linktype="relative-path"><br><br>
                        </span>

                    </li><br>
                    <li>
                        In the <strong>New Linked Service</strong> window, select <strong>Azure SQL Database</strong>, and click <strong>Continue</strong>.
                    </li><br>
                    <li>
                        In the <strong>New Linked Service (Azure SQL Database)</strong> window, do the following steps:<br>
                        a. Enter <strong>AzureSqlDatabaseLinkedService</strong> for <strong>Name</strong>.<br>
                        b. Select your server for <strong>Server name</strong><br>
                        c. Select your database for <strong>Database name</strong>.<br>
                        d. Enter <strong>name of the user</strong> to connect to your database.<br>
                        e. Enter <strong>password</strong> for the user.<br>
                        f. To test the connection to your database using the specified information, click <strong>Test connection</strong>.<br>
                        g. Click <strong>Create</strong> to save the linked service.
                    </li>
                </ol>
                <h3 id="create-the-sink-azure-synapse-analytics-linked-service" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-the-sink-azure-synapse-analytics-linked-service" aria-labelledby="create-the-sink-azure-synapse-analytics-linked-service"></a>Create the sink Azure Synapse Analytics linked service</h3>
                <ol>
                    <li>
                        In the <strong>Connections</strong> tab, click <strong>+ New</strong> on the toolbar again.
                    </li><br>
                    <li>
                        In the <strong>New Linked Service</strong> window, select <strong>Azure Synapse Analytics</strong>, and click <strong>Continue</strong>.
                    </li><br>
                    <li>
                        In the <strong>New Linked Service (Azure Synapse Analytics)</strong> window, do the following steps:<br>
                        a. Enter <strong>AzureSqlDWLinkedService</strong> for <strong>Name</strong>.<br>
                        b. Select your server for <strong>Server name</strong><br>
                        c. Select your database for <strong>Database name</strong>.<br>
                        d. Enter <strong>User name</strong> to connect to your database.<br>
                        e. Enter <strong>Password</strong> for the user.<br>
                        f. To test the connection to your database using the specified information, click <strong>Test connection</strong>.<br>
                        g. Click <strong>Create</strong>.
                    </li>
                </ol>
                <h3 id="create-the-staging-azure-storage-linked-service" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-the-staging-azure-storage-linked-service" aria-labelledby="create-the-staging-azure-storage-linked-service"></a>Create the staging Azure Storage linked service</h3>
                In this tutorial, you use Azure Blob storage as an interim staging area to enable PolyBase for a better copy performance.<br><br>
                <ol>
                    <li>
                        In the <strong>Connections</strong> tab, click <strong>+ New</strong> on the toolbar again.
                    </li><br>
                    <li>
                        In the <strong>New Linked Service</strong> window, select <strong>Azure Blob Storage</strong>, and click <strong>Continue</strong>.
                    </li><br>
                    <li>
                        In the <strong>New Linked Service (Azure Blob Storage)</strong> window, do the following steps:
                        a. Enter <strong>AzureStorageLinkedService</strong> for <strong>Name</strong>.<br>
                        b. Select your <strong>Azure Storage account</strong> for <strong>Storage account name</strong>.<br>
                        c. Click <strong>Create</strong>.
                    </li>
                </ol>
                <h3 id="create-datasets" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-datasets" aria-labelledby="create-datasets"></a>Create datasets</h3>
                In this tutorial, you create source and sink datasets, which specify the location where the data is stored.<br><br>
                The input dataset <strong>AzureSqlDatabaseDataset</strong> refers to the <strong>AzureSqlDatabaseLinkedService</strong>. The linked service specifies the connection string to connect to the database. The dataset specifies the name of the database and the table that contains the source data.<br><br>
                The output dataset <strong>AzureSqlDWDataset</strong> refers to the <strong>AzureSqlDWLinkedService</strong>. The linked service specifies the connection string to connect to the Azure Synapse Analytics. The dataset specifies the database and the table to which the data is copied.<br><br>
                In this tutorial, the source and destination SQL tables are not hard-coded in the dataset definitions. Instead, the ForEach activity passes the name of the table at runtime to the Copy activity.
                <h3 id="create-a-dataset-for-source-sql-database" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-dataset-for-source-sql-database" aria-labelledby="create-a-dataset-for-source-sql-database"></a>Create a dataset for source SQL Database</h3>
                <ol>
                    <li>
                        Select <strong>Author</strong> tab from the left pane.
                    </li><br>
                    <li>
                        Select the <strong>+</strong> (plus) in the left pane, and then select <strong>Dataset</strong>.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-bulk-copy-portal/new-dataset-menu.png" alt="New dataset menu" data-linktype="relative-path"><br><br>
                        </span>

                    </li><br>
                    <li>
                        In the <strong>New Dataset</strong> window, select <strong>Azure SQL Database</strong>, and then click <strong>Continue</strong>.
                    </li><br>
                    <li>
                        In the <strong>Set properties</strong> window, under <strong>Name</strong>, enter <strong>AzureSqlDatabaseDataset</strong>. Under <strong>Linked service</strong>, select <strong>AzureSqlDatabaseLinkedService</strong>. Then click <strong>OK</strong>.
                    </li><br>
                    <li>
                        Switch to the <strong>Connection</strong> tab, select any table for <strong>Table</strong>. This table is a dummy table. You specify a query on the source dataset when creating a pipeline. The query is used to extract data from your database. Alternatively, you can click <strong>Edit</strong> check box, and enter <strong>dbo.dummyName</strong> as the table name.
                    </li>
                </ol>
                <h3 id="create-a-dataset-for-sink-azure-synapse-analytics" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-dataset-for-sink-azure-synapse-analytics" aria-labelledby="create-a-dataset-for-sink-azure-synapse-analytics"></a>Create a dataset for sink Azure Synapse Analytics</h3>
                <ol>
                    <li>
                        Click <strong>+ (plus)</strong> in the left pane, and click <strong>Dataset</strong>.
                    </li><br>
                    <li>
                        In the <strong>New Dataset</strong> window, select <strong>Azure Synapse Analytics</strong>, and then click <strong>Continue</strong>.
                    </li><br>
                    <li>
                        In the <strong>Set properties</strong> window, under <strong>Name</strong>, enter <strong>AzureSqlDWDataset</strong>. Under <strong>Linked service</strong>, select <strong>AzureSqlDWLinkedService</strong>. Then click <strong>OK</strong>.
                    </li><br>
                    <li>
                        Switch to the <strong>Parameters</strong> tab, click <strong>+ New</strong>, and enter <strong>DWTableName</strong> for the parameter name. Click <strong>+ New</strong> again, and enter <strong>DWSchema</strong> for the parameter name. If you copy/paste this name from the page, ensure that there's no <strong>trailing space character</strong> at the end of <em>DWTableName</em> and <em>DWSchema</em>.
                    </li><br>
                    <li>
                        Switch to the <strong>Connection</strong> tab,
                        <ol>
                            <li>
                                For <strong>Table</strong>, check the <strong>Edit</strong> option. Select into the first input box and click the <strong>Add dynamic content</strong> link below. In the <strong>Add Dynamic Content</strong> page, click the <strong>DWSchema</strong> under <strong>Parameters</strong>, which will automatically populate the top expression text box <code>@dataset().DWSchema</code>, and then click <strong>Finish</strong>.
                                <span class="mx-imgBorder">
                                    <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-bulk-copy-portal/dataset-connection-tablename.png" alt="Dataset connection tablename" data-linktype="relative-path"><br><br>
                                </span>

                            </li><br>
                            <li>
                                Select into the second input box and click the <strong>Add dynamic content</strong> link below. In the <strong>Add Dynamic Content</strong> page, click the <strong>DWTAbleName</strong> under <strong>Parameters</strong>, which will automatically populate the top expression text box <code>@dataset().DWTableName</code>, and then click <strong>Finish</strong>.<br><br>
                            </li>
                            <li>
                                The <strong>tableName</strong> property of the dataset is set to the values that are passed as arguments for the <strong>DWSchema</strong> and <strong>DWTableName</strong> parameters. The ForEach activity iterates through a list of tables, and passes one by one to the Copy activity.
                            </li><br>
                        </ol>
                    </li>
                </ol>
                <h3 id="create-pipelines" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-pipelines" aria-labelledby="create-pipelines"></a>Create pipelines</h3>
                In this tutorial, you create two pipelines: <strong>IterateAndCopySQLTables</strong> and <strong>GetTableListAndTriggerCopyData</strong>.
                The <strong>GetTableListAndTriggerCopyData</strong> pipeline performs two actions:
                <ul>
                    <li>Looks up the Azure SQL Database system table to get the list of tables to be copied.</li>
                    <li>Triggers the pipeline <strong>IterateAndCopySQLTables</strong> to do the actual data copy.</li>
                </ul>
                The <strong>IterateAndCopySQLTables</strong> pipeline takes a list of tables as a parameter. For each table in the list, it copies data from the table in Azure SQL Database to Azure Synapse Analytics using staged copy and PolyBase.
                <h3 id="create-the-pipeline-iterateandcopysqltables" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-the-pipeline-iterateandcopysqltables" aria-labelledby="create-the-pipeline-iterateandcopysqltables"></a>Create the pipeline IterateAndCopySQLTables</h3>
                <ol>
                    <li>
                        In the left pane, click <strong>+ (plus)</strong>, and click <strong>Pipeline</strong>.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-bulk-copy-portal/new-pipeline-menu.png" alt="New pipeline menu" data-linktype="relative-path"><br><br>
                        </span>

                    </li><br>
                    <li>
                        In the General panel under <strong>Properties</strong>, specify <strong>IterateAndCopySQLTables</strong> for <strong>Name</strong>. Then collapse the panel by clicking the Properties icon in the top-right corner.
                    </li><br>
                    <li>
                        Switch to the <strong>Parameters</strong> tab, and do the following actions:
                        a. Click <strong>+ New</strong>.
                        b. Enter <strong>tableList</strong> for the parameter <strong>Name</strong>.
                        c. Select <strong>Array</strong> for <strong>Type</strong>.
                    </li><br>
                    <li>
                        In the <strong>Activities</strong> toolbox, expand <strong>Iteration &amp; Conditions</strong>, and drag-drop the <strong>ForEach</strong> activity to the pipeline design surface. You can also search for activities in the <strong>Activities</strong> toolbox.<br>
                        a. In the <strong>General</strong> tab at the bottom, enter <strong>IterateSQLTables</strong> for <strong>Name</strong>.<br>
                        b. Switch to the <strong>Settings</strong> tab, click the input box for <strong>Items</strong>, then click the <strong>Add dynamic content</strong> link below.<br>
                        c. In the <strong>Add Dynamic Content</strong> page, collapse the <strong>System Variables</strong> and <strong>Functions</strong> sections, click the <strong>tableList</strong> under <strong>Parameters</strong>, which will automatically populate the top expression text box as <code>@pipeline().parameter.tableList</code>. Then click <strong>Finish</strong>.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-bulk-copy-portal/for-each-parameter-builder.png" alt="Foreach parameter builder" data-linktype="relative-path"><br><br>
                        </span>

                        d. Switch to <strong>Activities</strong> tab, click the <strong>pencil icon</strong> to add a child activity to the <strong>ForEach</strong> activity.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-bulk-copy-portal/for-each-activity-builder.png" alt="Foreach activity builder" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        In the <strong>Activities</strong> toolbox, expand <strong>Move &amp; Transfer</strong>, and drag-drop <strong>Copy data</strong> activity into the pipeline designer surface. Notice the breadcrumb menu at the top. The <strong>IterateAndCopySQLTable</strong> is the pipeline name and <strong>IterateSQLTables</strong> is the ForEach activity name. The designer is in the activity scope. To switch back to the pipeline editor from the ForEach editor, you can click the link in the breadcrumb menu.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-bulk-copy-portal/copy-in-for-each.png" alt="Copy in ForEach" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Switch to the <strong>Source</strong> tab, and do the following steps:<br><br>
                        <ol>
                            <li>
                                Select <strong>AzureSqlDatabaseDataset</strong> for <strong>Source Dataset</strong>.
                            </li><br>
                            <li>
                                Select <strong>Query</strong> option for <strong>Use query</strong>.
                            </li><br>
                            <li>
                                Click the <strong>Query</strong> input box -&gt; select the <strong>Add dynamic content</strong> below -&gt; enter the following expression for <strong>Query</strong> -&gt; select <strong>Finish</strong>.
                                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-sql" data-author-content="SELECT * FROM [@{item().TABLE_SCHEMA}].[@{item().TABLE_NAME}]
"><span><span class="hljs-keyword">SELECT</span> * <span class="hljs-keyword">FROM</span> [@{item().TABLE_SCHEMA}].[@{item().TABLE_NAME}]
</span></blockquote></pre>
                            </li>
                        </ol>
                    </li>
                    <li>
                        Switch to the <strong>Sink</strong> tab, and do the following steps:<br><br>
                        <ol>
                            <li>
                                Select <strong>AzureSqlDWDataset</strong> for <strong>Sink Dataset</strong>.
                            </li><br>
                            <li>
                                Click the input box for the VALUE of DWTableName parameter -&gt; select the <strong>Add dynamic content</strong> below, enter <code>@item().TABLE_NAME</code> expression as script, -&gt; select <strong>Finish</strong>.
                            </li><br>
                            <li>
                                Click the input box for the VALUE of DWSchema parameter -&gt; select the <strong>Add dynamic content</strong> below, enter <code>@item().TABLE_SCHEMA</code> expression as script, -&gt; select <strong>Finish</strong>.
                            </li><br>
                            <li>
                                For Copy method, select <strong>PolyBase</strong>.
                            </li><br>
                            <li>
                                Clear the <strong>Use type default</strong> option.
                            </li><br>
                            <li>
                                For Table option, the default setting is "None". If you don’t have tables pre-created in the sink Azure Synapse Analytics, enable <strong>Auto create table</strong> option, copy activity will then automatically create tables for you based on the source data. For details, refer Auto create sink tables.<br><br>
                            </li>
                            <li>
                                Click the <strong>Pre-copy Script</strong> input box -&gt; select the <strong>Add dynamic content</strong> below -&gt; enter the following expression as script -&gt; select <strong>Finish</strong>.

                                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-sql" data-author-content="IF EXISTS (SELECT * FROM [@{item().TABLE_SCHEMA}].[@{item().TABLE_NAME}]) TRUNCATE TABLE [@{item().TABLE_SCHEMA}].[@{item().TABLE_NAME}]
"><span>IF EXISTS (<span class="hljs-keyword">SELECT</span> * <span class="hljs-keyword">FROM</span> [@{item().TABLE_SCHEMA}].[@{item().TABLE_NAME}]) <span class="hljs-keyword">TRUNCATE</span> <span class="hljs-keyword">TABLE</span> [@{item().TABLE_SCHEMA}].[@{item().TABLE_NAME}]
</span></blockquote></pre>
                                <span class="mx-imgBorder">
                                    <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-bulk-copy-portal/copy-sink-settings.png" alt="Copy sink settings" data-linktype="relative-path"><br><br>
                                </span>

                            </li>
                        </ol>
                    </li>
                    <li>
                        Switch to the <strong>Settings</strong> tab, and do the following steps:
                        <ol>
                            <li>Select the checkbox for <strong>Enable Staging</strong>.</li>
                            <li>Select <strong>AzureStorageLinkedService</strong> for <strong>Store Account Linked Service</strong>.</li>
                        </ol>
                    </li><br>
                    <li>
                        To validate the pipeline settings, click <strong>Validate</strong> on the top pipeline tool bar. Make sure that there's no validation error. To close the <strong>Pipeline Validation Report</strong>, click the double angle brackets <strong>&gt;&gt;</strong>.
                    </li>
                </ol>
                <h3 id="create-the-pipeline-gettablelistandtriggercopydata" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-the-pipeline-gettablelistandtriggercopydata" aria-labelledby="create-the-pipeline-gettablelistandtriggercopydata"></a>Create the pipeline GetTableListAndTriggerCopyData</h3>
                This pipeline does two actions:
                <ul>
                    <li>Looks up the Azure SQL Database system table to get the list of tables to be copied.</li>
                    <li>Triggers the pipeline "IterateAndCopySQLTables" to do the actual data copy.</li>
                </ul>
                Here are the steps to create the pipeline:
                <ol>
                    <li>
                        In the left pane, click <strong>+ (plus)</strong>, and click <strong>Pipeline</strong>.
                    </li><br>
                    <li>
                        In the General panel under <strong>Properties</strong>, change the name of the pipeline to <strong>GetTableListAndTriggerCopyData</strong>.
                    </li><br>
                    <li>
                        In the <strong>Activities</strong> toolbox, expand <strong>General</strong>, and drag-drop <strong>Lookup</strong> activity to the pipeline designer surface, and do the following steps:
                        <ol>
                            <li>Enter <strong>LookupTableList</strong> for <strong>Name</strong>.</li>
                            <li>Enter <strong>Retrieve the table list from my database</strong> for <strong>Description</strong>.</li>
                        </ol>
                    </li><br>
                    <li>
                        Switch to the <strong>Settings</strong> tab, and do the following steps:
                        <ol>
                            <li>
                                Select <strong>AzureSqlDatabaseDataset</strong> for <strong>Source Dataset</strong>.
                            </li><br>
                            <li>
                                Select <strong>Query</strong> for <strong>Use query</strong>.
                            </li>
                            <li>
                                Enter the following SQL query for <strong>Query</strong>.

                                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-sql" data-author-content="SELECT TABLE_SCHEMA, TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE = 'BASE TABLE' and TABLE_SCHEMA = 'SalesLT' and TABLE_NAME <> 'ProductModel'
"><span><span class="hljs-keyword">SELECT</span> TABLE_SCHEMA, TABLE_NAME <span class="hljs-keyword">FROM</span> information_schema.TABLES <span class="hljs-keyword">WHERE</span> TABLE_TYPE = <span class="hljs-string">'BASE TABLE'</span> <span class="hljs-keyword">and</span> TABLE_SCHEMA = <span class="hljs-string">'SalesLT'</span> <span class="hljs-keyword">and</span> TABLE_NAME &lt;&gt; <span class="hljs-string">'ProductModel'</span>
</span></blockquote></pre>
                            </li>
                            <li>
                                Clear the checkbox for the <strong>First row only</strong> field.
                                <span class="mx-imgBorder">
                                    <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-bulk-copy-portal/lookup-settings-page.png" alt="Lookup activity - settings page" data-linktype="relative-path"><br><br>
                                </span>

                            </li>
                        </ol>
                    </li>
                    <li>
                        Drag-drop <strong>Execute Pipeline</strong> activity from the Activities toolbox to the pipeline designer surface, and set the name to <strong>TriggerCopy</strong>.<br><br>
                    </li>
                    <li>
                        To <strong>Connect</strong> the <strong>Lookup</strong> activity to the <strong>Execute Pipeline</strong> activity, drag the <strong>green box</strong> attached to the Lookup activity to the left of Execute Pipeline activity.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-bulk-copy-portal/connect-lookup-execute-pipeline.png" alt="Connect Lookup and Execute Pipeline activities" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Switch to the <strong>Settings</strong> tab of <strong>Execute Pipeline</strong> activity, and do the following steps:
                        <ol>
                            <li>
                                Select <strong>IterateAndCopySQLTables</strong> for <strong>Invoked pipeline</strong>.
                            </li><br>
                            <li>
                                Clear the checkbox for <strong>Wait on completion</strong>.
                            </li><br>
                            <li>
                                In the <strong>Parameters</strong> section, click the input box under VALUE -&gt; select the <strong>Add dynamic content</strong> below -&gt; enter <code>@activity('LookupTableList').output.value</code> as table name value -&gt; select <strong>Finish</strong>. You're setting the result list from the Lookup activity as an input to the second pipeline. The result list contains the list of tables whose data needs to be copied to the destination.
                                <span class="mx-imgBorder">
                                    <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-bulk-copy-portal/execute-pipeline-settings-page.png" alt="Execute pipeline activity - settings page" data-linktype="relative-path"><br><br>
                                </span>

                            </li>
                        </ol>
                    </li>
                    <li>
                        To validate the pipeline, click <strong>Validate</strong> on the toolbar. Confirm that there are no validation errors. To close the <strong>Pipeline Validation Report</strong>, click <strong>&gt;&gt;</strong>.
                    </li><br>
                    <li>
                        To publish entities (datasets, pipelines, etc.) to the Data Factory service, click <strong>Publish all</strong> on top of the window. Wait until the publishing succeeds.
                    </li>
                </ol>
                <h3 id="trigger-a-pipeline-run" class="heading-anchor"><a class="anchor-link docon docon-link" href="#trigger-a-pipeline-run" aria-labelledby="trigger-a-pipeline-run"></a>Trigger a pipeline run</h3>
                <ol>
                    <li>
                        Go to pipeline <strong>GetTableListAndTriggerCopyData</strong>, click <strong>Add Trigger</strong> on the top pipeline tool bar, and then click <strong>Trigger now</strong>.
                    </li><br>
                    <li>
                        Confirm the run on the <strong>Pipeline run</strong> page, and then select <strong>Finish</strong>.
                    </li>
                </ol>
                <h3 id="monitor-the-pipeline-run" class="heading-anchor"><a class="anchor-link docon docon-link" href="#monitor-the-pipeline-run" aria-labelledby="monitor-the-pipeline-run"></a>Monitor the pipeline run</h3>
                <ol>
                    <li>
                        Switch to the <strong>Monitor</strong> tab. Click <strong>Refresh</strong> until you see runs for both the pipelines in your solution. Continue refreshing the list until you see the <strong>Succeeded</strong> status.
                    </li><br>
                    <li>
                        To view activity runs associated with the <strong>GetTableListAndTriggerCopyData</strong> pipeline, click the pipeline name link for the pipeline. You should see two activity runs for this pipeline run.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-bulk-copy-portal/monitor-pipeline.png" alt="Monitor Pipeline run" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        To view the output of the <strong>Lookup</strong> activity, click the <strong>Output</strong> link next to the activity under the <strong>ACTIVITY NAME</strong> column. You can maximize and restore the <strong>Output</strong> window. After reviewing, click <strong>X</strong> to close the <strong>Output</strong> window.

                        <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-json" data-author-content="{
&quot;count&quot;: 9,
&quot;value&quot;: [
{
&quot;TABLE_SCHEMA&quot;: &quot;SalesLT&quot;,
&quot;TABLE_NAME&quot;: &quot;Customer&quot;
},
{
&quot;TABLE_SCHEMA&quot;: &quot;SalesLT&quot;,
&quot;TABLE_NAME&quot;: &quot;ProductDescription&quot;
},
{
&quot;TABLE_SCHEMA&quot;: &quot;SalesLT&quot;,
&quot;TABLE_NAME&quot;: &quot;Product&quot;
},
{
&quot;TABLE_SCHEMA&quot;: &quot;SalesLT&quot;,
&quot;TABLE_NAME&quot;: &quot;ProductModelProductDescription&quot;
},
{
&quot;TABLE_SCHEMA&quot;: &quot;SalesLT&quot;,
&quot;TABLE_NAME&quot;: &quot;ProductCategory&quot;
},
{
&quot;TABLE_SCHEMA&quot;: &quot;SalesLT&quot;,
&quot;TABLE_NAME&quot;: &quot;Address&quot;
},
{
&quot;TABLE_SCHEMA&quot;: &quot;SalesLT&quot;,
&quot;TABLE_NAME&quot;: &quot;CustomerAddress&quot;
},
{
&quot;TABLE_SCHEMA&quot;: &quot;SalesLT&quot;,
&quot;TABLE_NAME&quot;: &quot;SalesOrderDetail&quot;
},
{
&quot;TABLE_SCHEMA&quot;: &quot;SalesLT&quot;,
&quot;TABLE_NAME&quot;: &quot;SalesOrderHeader&quot;
}
],
&quot;effectiveIntegrationRuntime&quot;: &quot;DefaultIntegrationRuntime (East US)&quot;,
&quot;effectiveIntegrationRuntimes&quot;: [
{
&quot;name&quot;: &quot;DefaultIntegrationRuntime&quot;,
&quot;type&quot;: &quot;Managed&quot;,
&quot;location&quot;: &quot;East US&quot;,
&quot;billedDuration&quot;: 0,
&quot;nodes&quot;: null
}
]
}
"><span>{
<span class="hljs-attr">"count"</span>: <span class="hljs-number">9</span>,
<span class="hljs-attr">"value"</span>: [
{
<span class="hljs-attr">"TABLE_SCHEMA"</span>: <span class="hljs-string">"SalesLT"</span>,
<span class="hljs-attr">"TABLE_NAME"</span>: <span class="hljs-string">"Customer"</span>
},
{
<span class="hljs-attr">"TABLE_SCHEMA"</span>: <span class="hljs-string">"SalesLT"</span>,
<span class="hljs-attr">"TABLE_NAME"</span>: <span class="hljs-string">"ProductDescription"</span>
},
{
<span class="hljs-attr">"TABLE_SCHEMA"</span>: <span class="hljs-string">"SalesLT"</span>,
<span class="hljs-attr">"TABLE_NAME"</span>: <span class="hljs-string">"Product"</span>
},
{
<span class="hljs-attr">"TABLE_SCHEMA"</span>: <span class="hljs-string">"SalesLT"</span>,
<span class="hljs-attr">"TABLE_NAME"</span>: <span class="hljs-string">"ProductModelProductDescription"</span>
},
{
<span class="hljs-attr">"TABLE_SCHEMA"</span>: <span class="hljs-string">"SalesLT"</span>,
<span class="hljs-attr">"TABLE_NAME"</span>: <span class="hljs-string">"ProductCategory"</span>
},
{
<span class="hljs-attr">"TABLE_SCHEMA"</span>: <span class="hljs-string">"SalesLT"</span>,
<span class="hljs-attr">"TABLE_NAME"</span>: <span class="hljs-string">"Address"</span>
},
{
<span class="hljs-attr">"TABLE_SCHEMA"</span>: <span class="hljs-string">"SalesLT"</span>,
<span class="hljs-attr">"TABLE_NAME"</span>: <span class="hljs-string">"CustomerAddress"</span>
},
{
<span class="hljs-attr">"TABLE_SCHEMA"</span>: <span class="hljs-string">"SalesLT"</span>,
<span class="hljs-attr">"TABLE_NAME"</span>: <span class="hljs-string">"SalesOrderDetail"</span>
},
{
<span class="hljs-attr">"TABLE_SCHEMA"</span>: <span class="hljs-string">"SalesLT"</span>,
<span class="hljs-attr">"TABLE_NAME"</span>: <span class="hljs-string">"SalesOrderHeader"</span>
}
],
<span class="hljs-attr">"effectiveIntegrationRuntime"</span>: <span class="hljs-string">"DefaultIntegrationRuntime (East US)"</span>,
<span class="hljs-attr">"effectiveIntegrationRuntimes"</span>: [
{
<span class="hljs-attr">"name"</span>: <span class="hljs-string">"DefaultIntegrationRuntime"</span>,
<span class="hljs-attr">"type"</span>: <span class="hljs-string">"Managed"</span>,
<span class="hljs-attr">"location"</span>: <span class="hljs-string">"East US"</span>,
<span class="hljs-attr">"billedDuration"</span>: <span class="hljs-number">0</span>,
<span class="hljs-attr">"nodes"</span>: <span class="hljs-literal">null</span>
}
]
}
</span></blockquote></pre>
                    </li>
                    <li>
                        To switch back to the <strong>Pipeline Runs</strong> view, click <strong>All Pipeline runs</strong> link at the top of the breadcrumb menu. Click <strong>IterateAndCopySQLTables</strong> link (under <strong>PIPELINE NAME</strong> column) to view activity runs of the pipeline. Notice that there's one <strong>Copy</strong> activity run for each table in the <strong>Lookup</strong> activity output.<br><br>
                    </li>
                    <li>
                        Confirm that the data was copied to the target Azure Synapse Analytics you used in this tutorial.
                    </li>
                </ol>
                <h3 id="next-steps" class="heading-anchor"><a class="anchor-link docon docon-link" href="#next-steps" aria-labelledby="next-steps"></a>Next steps</h3>
                You performed the following steps in this tutorial:
                <div class="checklist">
                    <ul>
                        <li>Create a data factory.</li>
                        <li>Create Azure SQL Database, Azure Synapse Analytics, and Azure Storage linked services.</li>
                        <li>Create Azure SQL Database and Azure Synapse Analytics datasets.</li>
                        <li>Create a pipeline to look up the tables to be copied and another pipeline to perform the actual copy operation.</li>
                        <li>Start a pipeline run.</li>
                        <li>Monitor the pipeline and activity runs.</li>
                    </ul>
                </div>

                <!-- </content> -->

                </main>

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