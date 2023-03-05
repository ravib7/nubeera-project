<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra databricks in Azure</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra databricks in Azure">

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
                <strong class="px-2" style="font-size: 1.125rem;">Azure Databricks</strong><br><br>
                <ul>
                    <li><a href="index.php">What is Azure Databricks?</a></li>
                    <li><a href="databricks-workspace-portal.php">Quickstart: Run a Spark job on Azure Databricks Workspace using the Azure portal</a></li>
                    <li><a href="databricks-extract-load-sql-datawarehouse.php">Tutorial: Extract, transform, and load data by using Azure Databricks</a></li>
                    <li><a href="versioning.php">Table versioning</a></li>
                    <li> <a href="azure_databricks_architecture_overview.php">Azure Databricks Architecture Overview</a></li>
                    <li><a href="databricks_datascience_and_engineering.php">Databricks Data Science & Engineering Concepts</a></li>
                    <li><a href="cluster_configuration.php"> Cluster Configuration</li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Azure Databricks</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Databricks</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h2 id="quickstart-run-a-spark-job-on-azure-databricks-workspace-using-the-azure-portal">Quickstart: Run a Spark job on Azure Databricks Workspace using the Azure portal</h2>
                <nav id="center-doc-outline" class="doc-outline is-hidden-desktop" data-bi-name="intopic toc" role="navigation" aria-label="Article Outline">
                    <h3>In this article</h3>
                    <ol>
                        <li><a href="#create-an-azure-databricks-workspace">Create an Azure Databricks workspace</a></li>
                        <li><a href="#create-a-spark-cluster-in-databricks">Create a Spark cluster in Databricks</a></li>
                        <li><a href="#run-a-spark-sql-job">Run a Spark SQL job</a></li>
                        <li><a href="#clean-up-resources">Clean up resources</a></li>
                        <li><a href="#next-steps">Next steps</a></li>
                    </ol>
                </nav>
                <h3 id="create-an-azure-databricks-workspace" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-an-azure-databricks-workspace" aria-labelledby="create-an-azure-databricks-workspace"></a>Create an Azure Databricks workspace</h3>
                In this section, you create an Azure Databricks workspace using the Azure portal or the Azure CLI.
                <div class="tabGroup" id="tabgroup_2" data-bi-name="tab-group">
                    <ul role="tablist">
                        <li role="presentation">
                            <a href="#tabpanel_2_azure-portal" role="tab" aria-controls="tabpanel_2_azure-portal" data-tab="azure-portal" tabindex="0" aria-selected="true" data-linktype="self-bookmark" data-bi-name="tab">Portal</a>
                        </li>
                        <li role="presentation">
                            <a href="#tabpanel_2_azure-cli" role="tab" aria-controls="tabpanel_2_azure-cli" data-tab="azure-cli" tabindex="0" data-linktype="self-bookmark" data-bi-name="tab" aria-selected="true">Azure CLI</a>
                        </li>
                    </ul>

                    <section id="tabpanel_2_azure-portal" role="tabpanel" data-tab="azure-portal">
                        <ol>
                            <li>In the Azure portal, select <strong>Create a resource</strong> &gt; <strong>Analytics</strong> &gt; <strong>Azure Databricks</strong>.
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/quickstart-create-databricks-workspace-portal/azure-databricks-on-portal.png" alt="Databricks on Azure portal" title="Databricks on Azure portal" data-linktype="relative-path"><br><br>
                            </li>
                            <li>Under <strong>Azure Databricks Service</strong>, provide the values to create a Databricks workspace.
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/quickstart-create-databricks-workspace-portal/create-databricks-workspace.png" alt="Create an Azure Databricks workspace" title="Create an Azure Databricks workspace" data-linktype="relative-path"><br><br>
                                Provide the following values:
                                <div class="table-scroll-wrapper has-inner-focus" tabindex="0" role="group" aria-label="Horizontally scrollable data">
                                    <table class="table">
                                        <caption class="visually-hidden">Table 2</caption>
                                        <thead>
                                            <tr>
                                                <th>Property</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Workspace name</strong></td>
                                                <td>Provide a name for your Databricks workspace</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Subscription</strong></td>
                                                <td>From the drop-down, select your Azure subscription.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Resource group</strong></td>
                                                <td>Specify whether you want to create a new resource group or use an existing one. A resource group is a container that holds related resources for an Azure solution. For more information, see Azure Resource Group overview.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Location</strong></td>
                                                <td>Select <strong>West US 2</strong>. For other available regions, see Azure services available by region.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Pricing Tier</strong></td>
                                                <td>Choose between <strong>Standard</strong>, <strong>Premium</strong>, or <strong>Trial</strong>. For more information on these tiers, see Databricks pricing page.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>Select <strong>Review + Create</strong>, and then <strong>Create</strong>. The workspace creation takes a few minutes. During workspace creation, you can view the deployment status in <strong>Notifications</strong>. Once this process is finished, your user account is automatically added as an admin user in the workspace.
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/quickstart-create-databricks-workspace-portal/databricks-deployment-tile.png" alt="Databricks deployment tile" title="Databricks deployment tile" data-linktype="relative-path"><br><br>
                                When a workspace deployment fails, the workspace is still created in a failed state. Delete the failed workspace and create a new workspace that resolves the deployment errors. When you delete the failed workspace, the managed resource group and any successfully deployed resources are also deleted.
                            </li>
                        </ol>
                    </section>
                    <section id="tabpanel_2_azure-cli" role="tabpanel" data-tab="azure-cli" aria-hidden="false">
                        <h3 id="prepare-your-environment" class="heading-anchor">Prepare your environment</h3>
                        <ol>
                            <li>Sign in.
                                Sign in using the az login command if you're using a local install of the CLI.
                                <div class="codeHeader code-title" style="font-size:12px" id="code-try-0" data-bi-name="code-header">
                                    <span class="language">Azure CLI</span>
                                </div>
                                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-azurecli" data-author-content="az login">
		<span class="hljs-keyword">az login</span>
		</blockquote></pre><br>
                                Follow the steps displayed in your terminal to complete the authentication process.<br><br>
                            </li>

                            <li>Install the Azure CLI extension.<br>
                                When working with extension references for the Azure CLI, you must first install the extension. Azure CLI extensions give you access to experimental and pre-release commands that have not yet shipped as part of the core CLI. To learn more about extensions including updating and uninstalling, see Use extensions with Azure CLI.
                                Install the extension for databricks by running the following command:<br><br>
                                <div class="codeHeader code-title" style="font-size:12px" id="code-try-1" data-bi-name="code-header">
                                    <span class="language">Azure CLI</span>
                                </div>
                                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-azurecli" data-author-content="az extension add --name databricks
"><span><span class="hljs-keyword">az extension add </span><span class="hljs-parameter">--name</span> databricks
</span></blockquote></pre><br>
                            </li>

                            <li>Create a resource group.
                                Azure Databricks, like all Azure resources, must be deployed into a resource group. Resource groups allow you to organize and manage related Azure resources.
                                For this quickstart, create a resource group named _ databricks-quickstart _ in the <em>westus2</em> location with the following az group create command:
                                <div class="codeHeader code-title" style="font-size:12px" id="code-try-2" data-bi-name="code-header">
                                    <span class="language">Azure CLI</span>
                                </div>
                                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-azurecli" data-author-content="az group create --name databricks-quickstart --location westus2
"><span><span class="hljs-keyword">az group create </span><span class="hljs-parameter">--name</span> databricks<span class="hljs-parameter">-quickstart</span> <span class="hljs-parameter">--location</span> westus2
</span></blockquote></pre><br>
                            </li>
                        </ol>

                        <h3 id="create-an-azure-databricks-workspace-1" class="heading-anchor">Create an Azure Databricks workspace</h3>
                        Use the az databricks workspace create create an Azure Databricks workspace.
                        <div class="codeHeader code-title" style="font-size:12px" id="code-try-3" data-bi-name="code-header"><span class="language">Azure CLI</span></div>
                        <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-azurecli" data-author-content="az databricks workspace create 
    --resource-group databricks-quickstart \
    --name mydatabricksws  \
    --location westus  \
    --sku standard
"><span><span class="hljs-keyword">az databricks workspace create </span>
    <span class="hljs-parameter">--resource-group</span> databricks<span class="hljs-parameter">-quickstart</span> \
    <span class="hljs-parameter">--name</span> mydatabricksws  \
    <span class="hljs-parameter">--location</span> westus  \
    <span class="hljs-parameter">--sku</span> standard
</span></blockquote></pre><br>
                    </section>
                </div>
                <h3 id="create-a-spark-cluster-in-databricks" class="heading-anchor">Create a Spark cluster in Databricks</h3>
                <div class="alert is-info">
                    <span class="docon docon-status-error-outline" aria-hidden="false"></span> Note:
                    <br>To use a free account to create the Azure Databricks cluster, before creating the cluster, go to your profile and change your subscription to <strong>pay-as-you-go</strong>. For more information, see Azure free account.
                </div>
                <ol>
                    <li>In the Azure portal, go to the Databricks workspace that you created, and then click <strong>Launch Workspace</strong>.
                    </li>
                    <li>You are redirected to the Azure Databricks portal. From the portal, click <strong>New Cluster</strong>.
                        <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/quickstart-create-databricks-workspace-portal/databricks-on-azure.png" alt="Databricks on Azure" title="Databricks on Azure" data-linktype="relative-path"><br><br>
                    </li>
                    <li>In the <strong>New cluster</strong> page, provide the values to create a cluster.
                        <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/quickstart-create-databricks-workspace-portal/create-databricks-spark-cluster.png" alt="Create Databricks Spark cluster on Azure" title="Create Databricks Spark cluster on Azure" data-linktype="relative-path"><br><br>
                        Accept all other default values other than the following:
                        <ul>
                            <li>Enter a name for the cluster.
                            </li>
                            <li>For this article, create a cluster with (<strong>5.X</strong>, <strong>6.X</strong>, <strong>7.X</strong>) runtime.
                            </li>
                            <li>Make sure you select the <strong>Terminate after __ minutes of inactivity</strong> checkbox. Provide a duration (in minutes) to terminate the cluster, if the cluster is not being used.
                                Select <strong>Create cluster</strong>. Once the cluster is running, you can attach notebooks to the cluster and run Spark jobs.
                            </li>
                        </ul>
                    </li>
                </ol>
                <h3 id="run-a-spark-sql-job" class="heading-anchor">Run a Spark SQL job</h3>
                Perform the following tasks to create a notebook in Databricks, configure the notebook to read data from an Azure Open Datasets, and then run a Spark SQL job on the data.
                <ol>
                    <li>In the left pane, select <strong>Azure Databricks</strong>. From the <strong>Common Tasks</strong>, select <strong>New Notebook</strong>.
                        <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/quickstart-create-databricks-workspace-portal/databricks-create-notebook.png" alt="Create a new notebook" title="Create notebook in Databricks" data-linktype="relative-path"><br><br>
                    </li>
                    <li>In the <strong>Create Notebook</strong> dialog box, enter a name, select <strong>Python</strong> as the language, and select the Spark cluster that you created earlier.
                        <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/quickstart-create-databricks-workspace-portal/databricks-notebook-details.png" alt="Enter notebook details" title="Create notebook in Databricks" data-linktype="relative-path"><br><br>
                        Select <strong>Create</strong>.
                    </li>
                    <li>In this step, create a Spark DataFrame with Seattle Safety Data from Azure Open Datasets, and use SQL to query the data.
                        The following command sets the Azure storage access information. Paste this PySpark code into the first cell and use <strong>Shift+Enter</strong> to run the code.
                        <div class="codeHeader code-title" style="font-size:12px" id="code-try-4" data-bi-name="code-header"><span class="language">Python</span></div>
                        <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-python" data-author-content="blob_account_name = &quot;azureopendatastorage&quot;
blob_container_name = &quot;citydatacontainer&quot;
blob_relative_path = &quot;Safety/Release/city=Seattle&quot;
blob_sas_token = r&quot;?st=2019-02-26T02%3A34%3A32Z&amp;se=2119-02-27T02%3A34%3A00Z&amp;sp=rl&amp;sv=2018-03-28&amp;sr=c&amp;sig=XlJVWA7fMXCSxCKqJm8psMOh0W4h7cSYO28coRqF2fs%3D&quot;
"><span>blob_account_name = <span class="hljs-string">"azureopendatastorage"</span>
blob_container_name = <span class="hljs-string">"citydatacontainer"</span>
blob_relative_path = <span class="hljs-string">"Safety/Release/city=Seattle"</span>
blob_sas_token = <span class="hljs-string">r"?st=2019-02-26T02%3A34%3A32Z&amp;se=2119-02-27T02%3A34%3A00Z&amp;sp=rl&amp;sv=2018-03-28&amp;sr=c&amp;sig=XlJVWA7fMXCSxCKqJm8psMOh0W4h7cSYO28coRqF2fs%3D"</span>
</span></blockquote></pre><br>
                        The following command allows Spark to read from Blob storage remotely. Paste this PySpark code into the next cell and use <strong>Shift+Enter</strong> to run the code.
                        <div class="codeHeader code-title" style="font-size:12px" id="code-try-5" data-bi-name="code-header"><span class="language">Python</span></div>
                        <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-python" data-author-content="wasbs_path = 'wasbs://%s@%s.blob.core.windows.net/%s' % (blob_container_name, blob_account_name, blob_relative_path)
spark.conf.set('fs.azure.sas.%s.%s.blob.core.windows.net' % (blob_container_name, blob_account_name), blob_sas_token)
print('Remote blob path: ' + wasbs_path)
"><span>wasbs_path = <span class="hljs-string">'wasbs://%s@%s.blob.core.windows.net/%s'</span> % (blob_container_name, blob_account_name, blob_relative_path)
spark.conf.set(<span class="hljs-string">'fs.azure.sas.%s.%s.blob.core.windows.net'</span> % (blob_container_name, blob_account_name), blob_sas_token)
print(<span class="hljs-string">'Remote blob path: '</span> + wasbs_path)
</span></blockquote></pre><br>
                        The following command creates a DataFrame. Paste this PySpark code into the next cell and use <strong>Shift+Enter</strong> to run the code.
                        <div class="codeHeader code-title" style="font-size:12px" id="code-try-6" data-bi-name="code-header"><span class="language">Python</span></div>
                        <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-python" data-author-content="df = spark.read.parquet(wasbs_path)
print('Register the DataFrame as a SQL temporary view: source')
df.createOrReplaceTempView('source')
"><span>df = spark.read.parquet(wasbs_path)
print(<span class="hljs-string">'Register the DataFrame as a SQL temporary view: source'</span>)
df.createOrReplaceTempView(<span class="hljs-string">'source'</span>)
</span></blockquote></pre><br>
                    </li>
                    <li>Run a SQL statement return the top 10 rows of data from the temporary view called <strong>source</strong>. Paste this PySpark code into the next cell and use <strong>Shift+Enter</strong> to run the code.
                        <div class="codeHeader code-title" style="font-size:12px" id="code-try-7" data-bi-name="code-header"><span class="language">Python</span></div>
                        <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-python" data-author-content="print('Displaying top 10 rows: ')
display(spark.sql('SELECT * FROM source LIMIT 10'))
"><span>print(<span class="hljs-string">'Displaying top 10 rows: '</span>)
display(spark.sql(<span class="hljs-string">'SELECT * FROM source LIMIT 10'</span>))
</span></blockquote></pre><br>
                    </li>
                    <li>You see a tabular output like shown in the following screenshot (only some columns are shown):
                        <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/quickstart-create-databricks-workspace-portal/databricks-sample-csv-data.png" alt="Sample data" title="Sample JSON data" data-linktype="relative-path"><br><br>
                    </li>
                    <li>You now create a visual representation of this data to show how many safety events are reported using the Citizens Connect App and City Worker App instead of other sources. From the bottom of the tabular output, select the <strong>Bar chart</strong> icon, and then click <strong>Plot Options</strong>.
                        <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/quickstart-create-databricks-workspace-portal/create-plots-databricks-notebook.png" alt="Create bar chart" title="Create bar chart" data-linktype="relative-path"><br><br>
                    </li>
                    <li>In <strong>Customize Plot</strong>, drag-and-drop values as shown in the screenshot.
                        <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/quickstart-create-databricks-workspace-portal/databricks-notebook-customize-plot.png" alt="Customize pie chart" title="Customize bar chart" data-linktype="relative-path"><br><br>
                        <ul>
                            <li>Set <strong>Keys</strong> to <strong>source</strong>.
                            </li>
                            <li>Set <strong>Values</strong> to <strong>&lt;\id&gt;</strong>.
                            </li>
                            <li>Set <strong>Aggregation</strong> to <strong>COUNT</strong>.
                            </li>
                            <li>Set <strong>Display type</strong> to <strong>Pie chart</strong>.
                                Click <strong>Apply</strong>.
                            </li>
                        </ul>
                    </li>
                </ol>
                <h3 id="clean-up-resources" class="heading-anchor">Clean up resources</h3>
                After you have finished the article, you can terminate the cluster. To do so, from the Azure Databricks workspace, from the left pane, select <strong>Clusters</strong>. For the cluster you want to terminate, move the cursor over the ellipsis under <strong>Actions</strong> column, and select the <strong>Terminate</strong> icon.
                <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/quickstart-create-databricks-workspace-portal/terminate-databricks-cluster.png" alt="Stop a Databricks cluster" title="Stop a Databricks cluster" data-linktype="relative-path"><br><br>
                If you do not manually terminate the cluster it will automatically stop, provided you selected the <strong>Terminate after __ minutes of inactivity</strong> checkbox while creating the cluster. In such a case, the cluster automatically stops, if it has been inactive for the specified time.
                <h3 id="next-steps" class="heading-anchor"><a class="anchor-link docon docon-link" href="#next-steps" aria-labelledby="next-steps"></a>Next steps</h3>
                In this article, you created a Spark cluster in Azure Databricks and ran a Spark job using data from Azure Open Datasets.

                <!-- </content> -->


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