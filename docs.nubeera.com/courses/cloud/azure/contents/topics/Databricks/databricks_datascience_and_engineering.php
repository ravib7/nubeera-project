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
                <strong class="px-2" style="font-size: 1.125rem;">Databricks</strong><br><br>
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
                <li class="breadcrumb-item active">Azure Databricks</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h2>Databricks Data Science & Engineering concepts</h2>
                <nav id="center-doc-outline" class="doc-outline is-hidden-desktop" data-bi-name="intopic toc" role="navigation" aria-label="Article Outline">
                    <h3>In this article</h3>
                    <ol>
                        <li><a href="#workspace">Workspace</a></li>
                        <li><a href="#interface">Interface</a></li>
                        <li><a href="#data-management">Data management</a></li>
                        <li><a href="#computation-management">Computation management</a></li>
                        <li><a href="#machine-learning">Machine learning</a></li>
                        <li><a href="#authentication-and-authorization">Authentication and authorization</a></li>
                    </ol>
                </nav>

                <!-- <content> -->
                This article introduces the set of fundamental concepts you need to understand in order to use Azure Databricks Workspace effectively.
                <h3 id="workspace" class="heading-anchor"><a class="anchor-link docon docon-link" href="#workspace" aria-labelledby="workspace"></a>Workspace</h3>
                A workspace is an environment for accessing all of your Azure Databricks assets. A workspace organizes objects (notebooks, libraries, dashboards, and experiments) into folders and provides access to data objects and computational resources.<br>
                This section describes the objects contained in the Azure Databricks workspace folders.
                <br><br><strong>Notebook</strong><br>
                A web-based interface to documents that contain runnable commands, visualizations, and narrative text.
                <br><br><strong>Dashboard</strong><br>
                An interface that provides organized access to visualizations.
                <br><br><strong>Library</strong><br>
                A package of code available to the notebook or job running on your cluster. Databricks runtimes include many libraries and you can add your own.
                <br><br><strong>Repo</strong><br>
                A folder whose contents are co-versioned together by syncing them to a remote Git repository.
                <br><br><strong>Experiment</strong><br>
                A collection of MLflow runs for training a machine learning model.
                <h3 id="interface" class="heading-anchor"><a class="anchor-link docon docon-link" href="#interface" aria-labelledby="interface"></a>Interface</h3>
                This section describes the interfaces that Azure Databricks supports for accessing your assets: UI, API, and command-line (CLI).
                <br><br><strong>UI</strong><br>
                The Azure Databricks UI provides an easy-to-use graphical interface to workspace folders and their contained objects, data objects, and computational resources.
                <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/_static/images/getting-started/landing-azure.png" alt="Landing page" data-linktype="relative-path"><br><br>

                <br><br><strong>REST API</strong><br>
                There are three versions of the REST API: 2.1, 2.0, and 1.2. The REST APIs 2.1 and 2.0 support most of the functionality of the REST API 1.2 and additional functionality and are preferred.
                
                <br><br><strong>CLI</strong><br>
                An open source project hosted on <a href="https://github.com/databricks/databricks-cli" data-linktype="external">GitHub</a>. The CLI is built on top of the REST API (latest).
                
                <h3 id="data-management" class="heading-anchor"><a class="anchor-link docon docon-link" href="#data-management" aria-labelledby="data-management"></a>Data management</h3>
                This section describes the objects that hold the data on which you perform analytics and feed into machine learning algorithms.<br><br>
               
                <strong>Databricks File System (DBFS)</strong><br>
                A filesystem abstraction layer over a blob store. It contains directories, which can contain files (data files, libraries, and images), and other directories. DBFS is automatically populated with some datasets that you can use to learn Azure Databricks.<br><br>
               
                <strong>Database</strong><br>
                A collection of information that is organized so that it can be easily accessed, managed, and updated.<br><br>
               
                <strong>Table</strong><br>
                A representation of structured data. You query tables with Apache Spark SQL and Apache Spark APIs.<br><br>
               
                <strong>Metastore</strong><br>
                The component that stores all the structure information of the various tables and partitions in the data warehouse including column and column type information, the serializers and deserializers necessary to read and write data, and the corresponding files where the data is stored. Every Azure Databricks deployment has a central Hive metastore accessible by all clusters to persist table metadata. You also have the option to use an existing external Hive metastore.<br><br>
               
                <h3 id="computation-management" class="heading-anchor"><a class="anchor-link docon docon-link" href="#computation-management" aria-labelledby="computation-management"></a>Computation management</h3>
                This section describes concepts that you need to know to run computations in Azure Databricks.<br><br>
               
                <strong>Cluster</strong><br>
                A set of computation resources and configurations on which you run notebooks and jobs. There are two types of clusters: all-purpose and job.<br><br>
                <ul>
                    <li>You create an <em>all-purpose cluster</em> using the UI, CLI, or REST API. You can manually terminate and restart an all-purpose cluster. Multiple users can share such clusters to do collaborative interactive analysis.</li>
                    <li>The Azure Databricks job scheduler creates <em>a job cluster</em> when you run a job on a <em>new job cluster</em> and terminates the cluster when the job is complete. You <em>cannot</em> restart an job cluster.</li>
                </ul><br>
                <strong>Pool</strong><br>
                A set of idle, ready-to-use instances that reduce cluster start and auto-scaling times. When attached to a pool, a cluster allocates its driver and worker nodes from the pool.
                If the pool does not have sufficient idle resources to accommodate the cluster’s request, the pool expands by allocating new instances from the instance provider. When an attached cluster is terminated, the instances it used
                are returned to the pool and can be reused by a different cluster.<br><br>
                <strong>Databricks runtime</strong><br>
                The set of core components that run on the clusters managed by Azure Databricks. Azure Databricks offers several types of runtimes:<br>
                <ul>
                    <li>Databricks Runtime includes Apache Spark but also adds a number of components and updates that substantially improve the usability, performance, and security of big data analytics.</li>
                    <li>Databricks Runtime for Machine Learning is built on Databricks Runtime and provides a ready-to-go environment for machine learning and data science. It contains multiple popular libraries, including TensorFlow, Keras, PyTorch, and XGBoost.</li>
                    <li>Databricks Runtime for Genomics is a version of Databricks Runtime optimized for working with genomic and biomedical data.</li>
                    <li>Databricks Light is the Azure Databricks packaging of the open source Apache Spark runtime. It provides a runtime option for jobs that don’t need the advanced performance, reliability, or autoscaling benefits provided by Databricks Runtime. You can select Databricks Light only when you create a cluster to run a JAR, Python, or spark-submit job; you cannot select this runtime for clusters on which you run interactive or notebook job workloads.</li>
                </ul>
                
                <strong>Job</strong><br>
                A non-interactive mechanism for running a notebook or library either immediately or on a scheduled basis.<br><br>
                
                <strong>Workload</strong><br>
                Azure Databricks identifies two types of workloads subject to different pricing schemes: data engineering (job) and data analytics (all-purpose).
                <ul>
                    <li><strong>Data engineering</strong> An (automated) workload runs on <em>a job cluster</em> which the Azure Databricks job scheduler creates for each workload.</li>
                    <li><strong>Data analytics</strong> An (interactive) workload runs on an <em>all-purpose cluster</em>. Interactive workloads typically run commands within an Azure Databricks notebook. However, running a <em>job</em> on an <em>existing all-purpose</em> cluster is also treated as an interactive workload.</li>
                </ul>
                
                <strong>Execution context</strong><br>
                The state for a REPL environment for each supported programming language. The languages supported are Python, R, Scala, and SQL.
                
                    <h3 id="machine-learning" class="heading-anchor"><a class="anchor-link docon docon-link" href="#machine-learning" aria-labelledby="machine-learning"></a>Machine learning</h3>
                This section describes concepts related to machine learning in Azure Databricks.<br><br>
                
                <strong>Experiments</strong><br>
                The main unit of organization for tracking machine learning model development. Experiments organize, display, and control access to individual logged runs of model training code.<br><br>
                
                <strong>Feature Store</strong><br>
                A centralized repository of features. Databricks Feature Store enables feature sharing and discovery across your organization and also ensures that the same feature computation code is used for model training and inference.<br><br>
                
                <strong>Models</strong><br>
                A trained machine learning or deep learning model that has been registered in Model Registry.
                
                <h3 id="authentication-and-authorization" class="heading-anchor"><a class="anchor-link docon docon-link" href="#authentication-and-authorization" aria-labelledby="authentication-and-authorization"></a>Authentication and authorization</h3>
                This section describes concepts that you need to know when you manage Azure Databricks users and their access to Azure Databricks assets.
                
                <br><br><strong>User</strong><br>
                A unique individual who has access to the system.
                
                <br><br><strong>Group</strong><br>
                A collection of users.
                
                <br><br><strong>Access control list (ACL)</strong><br>
                A list of permissions attached to the workspace, cluster, job, table, or experiment. An ACL specifies which users or system processes are granted access to the objects, as well as what operations are allowed on the assets. Each entry in a typical ACL specifies a subject and an operation.
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