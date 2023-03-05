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
                <strong class="px-2" style="font-size: 1.125rem;">Data Factory</strong><br><br>
                <ul>
                    <li><a href="index.php">tutorial copy data tool</a></li>
                    <li><a href="introduction.php">Introduction</a></li>
                    <li><a href="tutorial_bulk_copy_portal.php">tutorial bulk copy portal</a></li>
                    <li><a href="what_are mapping_data_flows.php">what are mapping data flows</a></li>
                    <li><a href="build_expressions_in_mapping_data_flow.php">build expressions in mapping data flow</a></li>
                    <li><a href="mapping_data_flow_transformation_overview.php">mapping data flow transformation overview</a></li>
                    <li><a href="transform_data_using_mapping_data_flows.php">transform data using mapping data flows</a></li>

                </ul>
            </div>
        </div>
    </div>

    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Azure Data Factory</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Data Factory</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h3 id="copy-data-from-azure-blob-storage-to-a-sql-database-by-using-the-copy-data-tool">Copy data from Azure Blob storage to a SQL Database by using the Copy Data tool</h3>
                <h3>In this article</h3>
                <li class=""><a href="#prerequisites">Prerequisites</a></li>
                <li class=""><a href="#create-a-data-factory">Create a data factory</a></li>
                <li class=""><a href="#use-the-copy-data-tool-to-create-a-pipeline">Use the Copy Data tool to create a pipeline</a></li>
                <li class="selected"><a href="#next-steps">Next steps</a></li><br>

                In this tutorial, you use the Azure portal to create a data factory. Then you use the Copy Data tool to create a pipeline that copies data from Azure Blob storage to a SQL Database.

                <br><br>In this tutorial, you perform the following steps:
                <div class="checklist">
                    <ul>
                        <li>tutorial copy data tool</li>
                        <li>Use the Copy Data tool to create a pipeline.</li>
                        <li>Monitor the pipeline and activity runs.</li>
                    </ul>
                </div>

                <h3 id="prerequisites" class="heading-anchor"><a class="anchor-link docon docon-link" href="#prerequisites" aria-labelledby="prerequisites"></a>Prerequisites</h3>
                <ul>
                    <li><strong>Azure subscription</strong>: If you don't have an Azure subscription, create a <a href="https://azure.microsoft.com/free/" data-linktype="external">free account</a> before you begin.</li>
                    <li><strong>Azure Storage account</strong>: Use Blob storage as the <em>source</em> data store. If you don't have an Azure Storage account, see the instructions in Create a storage account.</li>
                    <li><strong>Azure SQL Database</strong>: Use a SQL Database as the <em>sink</em> data store. If you don't have a SQL Database, see the instructions in Create a SQL Database.</li>
                </ul>
                <h3 id="create-a-blob-and-a-sql-table" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-blob-and-a-sql-table" aria-labelledby="create-a-blob-and-a-sql-table"></a>Create a blob and a SQL table</h2>
                    Prepare your Blob storage and your SQL Database for the tutorial by performing these steps.
                    <h4 id="create-a-source-blob" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-source-blob" aria-labelledby="create-a-source-blob"></a>Create a source blob</h4>
                    <ol>
                        <li>
                            Launch <strong>Notepad</strong>. Copy the following text and save it in a file named <strong>inputEmp.txt</strong> on your disk:

                            <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-text" data-author-content="FirstName|LastNameJohn|DoeJane|Doe">
FirstName|LastName
John|Doe
Jane|Doe
</blockquote></pre><br>
                        </li>
                        <li>
                            Create a container named <strong>adfv2tutorial</strong> and upload the inputEmp.txt file to the container. You can use the Azure portal or various tools like Azure Storage Explorer to perform these tasks.
                        </li>
                    </ol>
                    <h4 id="create-a-sink-sql-table" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-sink-sql-table" aria-labelledby="create-a-sink-sql-table"></a>Create a sink SQL table</h4>
                    <ol>
                        <li>
                            Use the following SQL script to create a table named <strong>dbo.emp</strong> in your SQL Database:

                            <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-sql" data-author-content="CREATE TABLE dbo.emp
(
ID int IDENTITY(1,1) NOT NULL,
FirstName varchar(50),
LastName varchar(50)
)
GO
CREATE CLUSTERED INDEX IX_emp_ID ON dbo.emp (ID);
"><span><span class="hljs-keyword">CREATE</span> <span class="hljs-keyword">TABLE</span> dbo.emp
(
<span class="hljs-keyword">ID</span> <span class="hljs-built_in">int</span> <span class="hljs-keyword">IDENTITY</span>(<span class="hljs-number">1</span>,<span class="hljs-number">1</span>) <span class="hljs-keyword">NOT</span> <span class="hljs-literal">NULL</span>,
FirstName <span class="hljs-built_in">varchar</span>(<span class="hljs-number">50</span>),
LastName <span class="hljs-built_in">varchar</span>(<span class="hljs-number">50</span>)
)
<span class="hljs-keyword">GO</span>
<span class="hljs-keyword">CREATE</span> CLUSTERED <span class="hljs-keyword">INDEX</span> IX_emp_ID <span class="hljs-keyword">ON</span> dbo.emp (<span class="hljs-keyword">ID</span>);
</span></blockquote></pre><br>
                        </li>
                        <li>
                            Allow Azure services to access SQL Server. Verify that the setting <strong>Allow Azure services and resources to access this server</strong> is enabled for your server that's running SQL Database. This setting lets Data Factory write data to your database instance. To verify and turn on this setting, go to logical SQL server &gt; Security &gt; Firewalls and virtual networks &gt; set the <strong>Allow Azure services and resources to access this server</strong> option to <strong>ON</strong>.
                            <div class="alert is-info">
                                Note:<br><br>
                                The option to <strong>Allow Azure services and resources to access this server</strong> enables network access to your SQL Server from any Azure resource, not just those in your subscription. For more information, see Azure SQL Server Firewall rules. Instead, you can use Private endpoints to connect to Azure PaaS services without using public IPs.
                            </div>
                        </li>
                    </ol>
                    <h3 id="create-a-data-factory" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-data-factory" aria-labelledby="create-a-data-factory"></a>Create a data factory</h3>
                    <ol>
                        <li>
                            On the left menu, select <strong>Create a resource</strong> &gt; <strong>Integration</strong> &gt; <strong>Data Factory</strong>:
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/doc-common-process/new-azure-data-factory-menu.png" alt="New data factory creation" data-linktype="relative-path"><br><br>
                            </span>

                        </li>
                        <li>
                            On the <strong>New data factory</strong> page, under <strong>Name</strong>, enter <strong>ADFTutorialDataFactory</strong>.
                            The name for your data factory must be <em>globally unique</em>. You might receive the following error message:
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/doc-common-process/name-not-available-error.png" alt="New data factory error message for duplicate name." data-linktype="relative-path"><br><br>
                            </span>

                            If you receive an error message about the name value, enter a different name for the data factory. For example, use the name <em><strong>yourname</strong></em><strong>ADFTutorialDataFactory</strong>. For the naming rules for Data Factory artifacts, see Data Factory naming rules.
                        </li><br>
                        <li>
                            Select the Azure <strong>subscription</strong> in which to create the new data factory.
                        </li><br>
                        <li>
                            For <strong>Resource Group</strong>, take one of the following steps:
                            a. Select <strong>Use existing</strong>, and select an existing resource group from the drop-down list.
                            b. Select <strong>Create new</strong>, and enter the name of a resource group.
                            To learn about resource groups, see Use resource groups to manage your Azure resources.
                        </li><br>
                        <li>
                            Under <strong>version</strong>, select <strong>V2</strong> for the version.
                        </li><br>
                        <li>
                            Under <strong>location</strong>, select the location for the data factory. Only supported locations are displayed in the drop-down list. The data stores (for example, Azure Storage and SQL Database) and computes (for example, Azure HDInsight) that are used by your data factory can be in other locations and regions.
                        </li><br>
                        <li>
                            Select <strong>Create</strong>.
                        </li><br>
                        <li>
                            After creation is finished, the <strong>Data Factory</strong> home page is displayed.
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/doc-common-process/data-factory-home-page.png" alt="Home page for the Azure Data Factory, with the Open Azure Data Factory Studio tile." data-linktype="relative-path"><br><br>
                            </span>

                        </li>
                        <li>
                            To launch the Azure Data Factory user interface (UI) in a separate tab, select <strong>Open</strong> on the <strong>Open Azure Data Factory Studio</strong> tile.
                        </li>
                    </ol>
                    <h3 id="use-the-copy-data-tool-to-create-a-pipeline" class="heading-anchor"><a class="anchor-link docon docon-link" href="#use-the-copy-data-tool-to-create-a-pipeline" aria-labelledby="use-the-copy-data-tool-to-create-a-pipeline"></a>Use the Copy Data tool to create a pipeline</h3>
                    <ol>
                        <li>
                            On the home page of Azure Data Factory, select the <strong>Ingest</strong> tile to launch the Copy Data tool.
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/doc-common-process/get-started-page.png" alt="Screenshot that shows the Azure Data Factory home page." data-linktype="relative-path"><br><br>
                            </span>

                        </li>
                        <li>
                            On the <strong>Properties</strong> page of the Copy Data tool, choose <strong>Built-in copy task</strong> under <strong>Task type</strong>, then select <strong>Next</strong>.
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-copy-data-tool/copy-data-tool-properties-page.png" alt="Screenshot that shows the Properties page" data-linktype="relative-path"><br><br>
                            </span>

                        </li>
                        <li>
                            On the <strong>Source data store</strong> page, complete the following steps:
                            a. Select <strong>+ Create new connection</strong> to add a connection.
                            b. Select <strong>Azure Blob Storage</strong> from the gallery, and then select <strong>Continue</strong>.
                            c. On the <strong>New connection (Azure Blob Storage)</strong> page, select your Azure subscription from the <strong>Azure subscription</strong> list, and select your storage account from the <strong>Storage account name</strong> list. Test connection and then select <strong>Create</strong>.
                            d. Select the newly created linked service as source in the <strong>Connection</strong> block.
                            e. In the <strong>File or folder</strong> section, select <strong>Browse</strong> to navigate to the <strong>adfv2tutorial</strong> folder, select the <strong>inputEmp.txt</strong> file, then select <strong>OK</strong>.
                            f. Select <strong>Next</strong> to move to next step.
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-copy-data-tool/source-data-store.png" alt="Configure the source." data-linktype="relative-path"><br><br>
                            </span>

                        </li>
                        <li>
                            On the <strong>File format settings</strong> page, enable the checkbox for <em>First row as header</em>. Notice that the tool automatically detects the column and row delimiters, and you can preview data and view the schema of the input data by selecting <strong>Preview data</strong> button on this page. Then select <strong>Next</strong>.
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-copy-data-tool/file-format-settings-page.png" alt="File format settings" data-linktype="relative-path"><br><br>
                            </span>

                        </li>
                        <li>
                            On the <strong>Destination data store</strong> page, completes the following steps:
                            a. Select <strong>+ Create new connection</strong> to add a connection.
                            b. Select <strong>Azure SQL Database</strong> from the gallery, and then select <strong>Continue</strong>.
                            c. On the <strong>New connection (Azure SQL Database)</strong> page, select your Azure subscription, server name and database name from the dropdown list. Then select <strong>SQL authentication</strong> under <strong>Authentication type</strong>, specify the username and password. Test connection and select <strong>Create</strong>.
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-copy-data-tool/config-azure-sql-db.png" alt="Configure Azure SQL DB" data-linktype="relative-path"><br><br>
                            </span>

                            d. Select the newly created linked service as sink, then select <strong>Next</strong>.<br><br>
                        </li>
                        <li>
                            On the <strong>Destination data store</strong> page, select <strong>Use existing table</strong> and select the <strong>dbo.emp</strong> table. Then select <strong>Next</strong>.
                        </li><br>
                        <li>
                            On the <strong>Column mapping</strong> page, notice that the second and the third columns in the input file are mapped to the <strong>FirstName</strong> and <strong>LastName</strong> columns of the <strong>emp</strong> table. Adjust the mapping to make sure that there is no error, and then select <strong>Next</strong>.
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-copy-data-tool/column-mapping.png" alt="Column mapping page" data-linktype="relative-path"><br><br>
                            </span>

                        </li>
                        <li>
                            On the <strong>Settings</strong> page, under <strong>Task name</strong>, enter <strong>CopyFromBlobToSqlPipeline</strong>, and then select <strong>Next</strong>.
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-copy-data-tool/settings.png" alt="Configure the settings." data-linktype="relative-path"><br><br>
                            </span>

                        </li>
                        <li>
                            On the <strong>Summary</strong> page, review the settings, and then select <strong>Next</strong>.
                        </li><br>
                        <li>
                            On the <strong>Deployment</strong> page, select <strong>Monitor</strong> to monitor the pipeline (task).
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-copy-data-tool/monitor-pipeline.png" alt="Monitor pipeline" data-linktype="relative-path"><br><br>
                            </span>

                        </li>
                        <li>
                            On the Pipeline runs page, select <strong>Refresh</strong> to refresh the list. Select the link under <strong>Pipeline name</strong> to view activity run details or rerun the pipeline.
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-copy-data-tool/pipeline-run.png" alt="Pipeline run" data-linktype="relative-path"><br><br>
                            </span>

                        </li>
                        <li>
                            On the "Activity runs" page, select the <strong>Details</strong> link (eyeglasses icon) under <strong>Activity name</strong> column for more details about copy operation. To go back to the "Pipeline runs" view, select the <strong>All pipeline runs</strong> link in the breadcrumb menu. To refresh the view, select <strong>Refresh</strong>.
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-copy-data-tool/activity-monitoring.png" alt="Monitor activity runs" data-linktype="relative-path"><br><br>
                            </span>

                        </li>
                        <li>
                            Verify that the data is inserted into the <strong>dbo.emp</strong> table in your SQL Database.
                        </li><br>
                        <li>
                            Select the <strong>Author</strong> tab on the left to switch to the editor mode. You can update the linked services, datasets, and pipelines that were created via the tool by using the editor. For details on editing these entities in the Data Factory UI, see the Azure portal version of this tutorial.
                            <span class="mx-imgBorder">
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/tutorial-copy-data-tool/author-tab.png" alt="Select Author tab" data-linktype="relative-path"><br><br>
                            </span>

                        </li>
                    </ol>
                    <h3 id="next-steps" class="heading-anchor"><a class="anchor-link docon docon-link" href="#next-steps" aria-labelledby="next-steps"></a>Next steps</h3>
                    The pipeline in this sample copies data from Blob storage to a SQL Database. You learned how to:
                    <div class="checklist">
                        <ul>
                            <li>Create a data factory.</li>
                            <li>Use the Copy Data tool to create a pipeline.</li>
                            <li>Monitor the pipeline and activity runs.</li>
                        </ul>
                    </div>
                    Advance to the following tutorial to learn how to copy data from on-premises to the cloud:

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