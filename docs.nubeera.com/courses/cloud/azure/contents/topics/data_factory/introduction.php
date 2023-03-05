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
    <?php require '../../../../../../navbar.php'; ?>


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
            <ol class="breadcrumb mx-5 mt-3 px-0">
            <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Data Factory</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h2 id="what-is-azure-data-factory">What is Azure Data Factory?</h2>
                <h3>In this article</h3>
                <li><a href="#how-does-it-work">How does it work?</a></li>
                <li><a href="#top-level-concepts">Top-level concepts</a></li>
                <li><a href="#next-steps">Next steps</a></li><br>

                In the world of big data, raw, unorganized data is often stored in relational, non-relational, and other storage systems. However, on its own, raw data doesn't have the proper context or meaning to provide meaningful insights to analysts, data scientists, or business decision makers.<br><br>
                Big data requires a service that can orchestrate and operationalize processes to refine these enormous stores of raw data into actionable business insights. Azure Data Factory is a managed cloud service that's built for these complex hybrid extract-transform-load (ETL), extract-load-transform (ELT), and data integration projects.<br><br>
                For example, imagine a gaming company that collects petabytes of game logs that are produced by games in the cloud. The company wants to analyze these logs to gain insights into customer preferences, demographics, and usage behavior. It also wants to identify up-sell and cross-sell opportunities, develop compelling new features, drive business growth, and provide a better experience to its customers.<br><br>
                To analyze these logs, the company needs to use reference data such as customer information, game information, and marketing campaign information that is in an on-premises data store. The company wants to utilize this data from the on-premises data store, combining it with additional log data that it has in a cloud data store.<br><br>
                To extract insights, it hopes to process the joined data by using a Spark cluster in the cloud (Azure HDInsight), and publish the transformed data into a cloud data warehouse such as Azure Synapse Analytics to easily build a report on top of it. They want to automate this workflow, and monitor and manage it on a daily schedule. They also want to execute it when files land in a blob store container.<br><br>
                Azure Data Factory is the platform that solves such data scenarios. It is the <em>cloud-based ETL and data integration service that allows you to create data-driven workflows for orchestrating data movement and transforming data at scale</em>. Using Azure Data Factory, you can create and schedule data-driven workflows (called pipelines) that can ingest data from disparate data stores. You can build complex ETL processes that transform data visually with data flows or by using compute services such as Azure HDInsight Hadoop, Azure Databricks, and Azure SQL Database.<br><br>
                Additionally, you can publish your transformed data to data stores such as Azure Synapse Analytics for business intelligence (BI) applications to consume. Ultimately, through Azure Data Factory, raw data can be organized into meaningful data stores and data lakes for better business decisions.<br><br>
                <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/data-flow/overview.png" alt="Top-level view of Data Factory" data-linktype="relative-path">

                <h3 id="how-does-it-work" class="heading-anchor"><a class="anchor-link docon docon-link" href="#how-does-it-work" aria-labelledby="how-does-it-work"></a>How does it work?</h3>
                Data Factory contains a series of interconnected systems that provide a complete end-to-end platform for data engineers.
                This visual guide provides a high-level overview of the Data Factory architecture:
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-us/azure/data-factory/media/introduction/data-factory-visual-guide-small.png" alt="A detailed visual guide to the complete system architecture for Azure Data Factory, presented in a single high resolution image." data-linktype="relative-path"><br><br>
                </span>

                To see more detail, click the preceding image to zoom in, or browse to the high resolution image.
                <h3 id="connect-and-collect" class="heading-anchor"><a class="anchor-link docon docon-link" href="#connect-and-collect" aria-labelledby="connect-and-collect"></a>Connect and collect</h3>
                Enterprises have data of various types that are located in disparate sources on-premises, in the cloud, structured, unstructured, and semi-structured, all arriving at different intervals and speeds.<br><br>
                The first step in building an information production system is to connect to all the required sources of data and processing, such as software-as-a-service (SaaS) services, databases, file shares, and FTP web services. The next step is to move the data as needed to a centralized location for subsequent processing.<br><br>
                Without Data Factory, enterprises must build custom data movement components or write custom services to integrate these data sources and processing. It's expensive and hard to integrate and maintain such systems. In addition, they often lack the enterprise-grade monitoring, alerting, and the controls that a fully managed service can offer.<br><br>
                With Data Factory, you can use the Copy Activity in a data pipeline to move data from both on-premises and cloud source data stores to a centralization data store in the cloud for further analysis. For example, you can collect data in Azure Data Lake Storage and transform the data later by using an Azure Data Lake Analytics compute service. You can also collect data in Azure Blob storage and transform it later by using an Azure HDInsight Hadoop cluster.<br><br>

                <h3 id="transform-and-enrich" class="heading-anchor"><a class="anchor-link docon docon-link" href="#transform-and-enrich" aria-labelledby="transform-and-enrich"></a>Transform and enrich</h3>
                After data is present in a centralized data store in the cloud, process or transform the collected data by using ADF mapping data flows. Data flows enable data engineers to build and maintain data transformation graphs that execute on Spark without needing to understand Spark clusters or Spark programming.<br><br>
                If you prefer to code transformations by hand, ADF supports external activities for executing your transformations on compute services such as HDInsight Hadoop, Spark, Data Lake Analytics, and Machine Learning.<br><br>

                <h3 id="cicd-and-publish" class="heading-anchor"><a class="anchor-link docon docon-link" href="#cicd-and-publish" aria-labelledby="cicd-and-publish"></a>CI/CD and publish</h3>
                Data Factory offers full support for CI/CD of your data pipelines using Azure DevOps and GitHub. This allows you to incrementally develop and deliver your ETL processes before publishing the finished product. After the raw data has been refined into a business-ready consumable form, load the data into Azure Data Warehouse, Azure SQL Database, Azure CosmosDB, or whichever analytics engine your business users can point to from their business intelligence tools.

                <h3 id="monitor" class="heading-anchor"><a class="anchor-link docon docon-link" href="#monitor" aria-labelledby="monitor"></a>Monitor</h3>
                After you have successfully built and deployed your data integration pipeline, providing business value from refined data, monitor the scheduled activities and pipelines for success and failure rates. Azure Data Factory has built-in support for pipeline monitoring via Azure Monitor, API, PowerShell, Azure Monitor logs, and health panels on the Azure portal.

                <h3 id="top-level-concepts" class="heading-anchor"><a class="anchor-link docon docon-link" href="#top-level-concepts" aria-labelledby="top-level-concepts"></a>Top-level concepts</h3>
                An Azure subscription might have one or more Azure Data Factory instances (or data factories). Azure Data Factory is composed of below key components.
                <ul>
                    <li>Pipelines</li>
                    <li>Activities</li>
                    <li>Datasets</li>
                    <li>Linked services</li>
                    <li>Data Flows</li>
                    <li>Integration Runtimes</li>
                </ul>
                These components work together to provide the platform on which you can compose data-driven workflows with steps to move and transform data.
                <h3 id="pipeline" class="heading-anchor"><a class="anchor-link docon docon-link" href="#pipeline" aria-labelledby="pipeline"></a>Pipeline</h3>
                A data factory might have one or more pipelines. A pipeline is a logical grouping of activities that performs a unit of work. Together, the activities in a pipeline perform a task. For example, a pipeline can contain a group of activities that ingests data from an Azure blob, and then runs a Hive query on an HDInsight cluster to partition the data.<br><br>
                The benefit of this is that the pipeline allows you to manage the activities as a set instead of managing each one individually. The activities in a pipeline can be chained together to operate sequentially, or they can operate independently in parallel.
                <h3 id="mapping-data-flows" class="heading-anchor"><a class="anchor-link docon docon-link" href="#mapping-data-flows" aria-labelledby="mapping-data-flows"></a>Mapping data flows</h3>
                Create and manage graphs of data transformation logic that you can use to transform any-sized data. You can build-up a reusable library of data transformation routines and execute those processes in a scaled-out manner from your ADF pipelines. Data Factory will execute your logic on a Spark cluster that spins-up and spins-down when you need it. You won't ever have to manage or maintain clusters.
                <h3 id="activity" class="heading-anchor"><a class="anchor-link docon docon-link" href="#activity" aria-labelledby="activity"></a>Activity</h3>
                Activities represent a processing step in a pipeline. For example, you might use a copy activity to copy data from one data store to another data store. Similarly, you might use a Hive activity, which runs a Hive query on an Azure HDInsight cluster, to transform or analyze your data. Data Factory supports three types of activities: data movement activities, data transformation activities, and control activities.
                <h3 id="datasets" class="heading-anchor"><a class="anchor-link docon docon-link" href="#datasets" aria-labelledby="datasets"></a>Datasets</h3>
                Datasets represent data structures within the data stores, which simply point to or reference the data you want to use in your activities as inputs or outputs.
                <h3 id="linked-services" class="heading-anchor"><a class="anchor-link docon docon-link" href="#linked-services" aria-labelledby="linked-services"></a>Linked services</h3>
                Linked services are much like connection strings, which define the connection information that's needed for Data Factory to connect to external resources. Think of it this way: a linked service defines the connection to the data source, and a dataset represents the structure of the data. For example, an Azure Storage-linked service specifies a connection string to connect to the Azure Storage account. Additionally, an Azure blob dataset specifies the blob container and the folder that contains the data.
                <br><br>Linked services are used for two purposes in Data Factory:<br><br>
                <ul>
                    <li>
                        To represent a <strong>data store</strong> that includes, but isn't limited to, a SQL Server database, Oracle database, file share, or Azure blob storage account. For a list of supported data stores, see the copy activity article.
                    </li><br>
                    <li>
                        To represent a <strong>compute resource</strong> that can host the execution of an activity. For example, the HDInsightHive activity runs on an HDInsight Hadoop cluster. For a list of transformation activities and supported compute environments, see the transform data article.
                    </li>
                </ul>
                <h3 id="integration-runtime" class="heading-anchor"><a class="anchor-link docon docon-link" href="#integration-runtime" aria-labelledby="integration-runtime"></a>Integration Runtime</h3>
                In Data Factory, an activity defines the action to be performed. A linked service defines a target data store or a compute service. An integration runtime provides the bridge between the activity and linked Services. It's referenced by the linked service or activity, and provides the compute environment where the activity either runs on or gets dispatched from. This way, the activity can be performed in the region closest possible to the target data store or compute service in the most performant way while meeting security and compliance needs.

                <h3 id="triggers" class="heading-anchor"><a class="anchor-link docon docon-link" href="#triggers" aria-labelledby="triggers"></a>Triggers</h3>
                Triggers represent the unit of processing that determines when a pipeline execution needs to be kicked off. There are different types of triggers for different types of events.

                <h3 id="pipeline-runs" class="heading-anchor"><a class="anchor-link docon docon-link" href="#pipeline-runs" aria-labelledby="pipeline-runs"></a>Pipeline runs</h3>
                A pipeline run is an instance of the pipeline execution. Pipeline runs are typically instantiated by passing the arguments to the parameters that are defined in pipelines. The arguments can be passed manually or within the trigger definition.

                <h3 id="parameters" class="heading-anchor"><a class="anchor-link docon docon-link" href="#parameters" aria-labelledby="parameters"></a>Parameters</h3>
                Parameters are key-value pairs of read-only configuration.  Parameters are defined in the pipeline. The arguments for the defined parameters are passed during execution from the run context that was created by a trigger or a pipeline that was executed manually. Activities within the pipeline consume the parameter values.<br><br>
                A dataset is a strongly typed parameter and a reusable/referenceable entity. An activity can reference datasets and can consume the properties that are defined in the dataset definition.<br><br>
                A linked service is also a strongly typed parameter that contains the connection information to either a data store or a compute environment. It is also a reusable/referenceable entity.<br>

                <h3 id="control-flow" class="heading-anchor"><a class="anchor-link docon docon-link" href="#control-flow" aria-labelledby="control-flow"></a>Control flow</h3>
                Control flow is an orchestration of pipeline activities that includes chaining activities in a sequence, branching, defining parameters at the pipeline level, and passing arguments while invoking the pipeline on-demand or from a trigger. It also includes custom-state passing and looping containers, that is, For-each iterators.

                <h3 id="variables" class="heading-anchor"><a class="anchor-link docon docon-link" href="#variables" aria-labelledby="variables"></a>Variables</h3>
                Variables can be used inside of pipelines to store temporary values and can also be used in conjunction with parameters to enable passing values between pipelines, data flows, and other activities.

                <h3 id="next-steps" class="heading-anchor"><a class="anchor-link docon docon-link" href="#next-steps" aria-labelledby="next-steps"></a>Next steps</h3>
                Here are important next step documents to explore:
                <ul>
                    <li>Dataset and linked services</li>
                    <li>Pipelines and activities</li>
                    <li>Integration runtime</li>
                    <li>Mapping Data Flows</li>
                    <li>Data Factory UI in the Azure portal</li>
                    <li>Copy Data tool in the Azure portal</li>
                    <li>PowerShell</li>
                    <li>.NET</li>
                    <li>Python</li>
                    <li>REST</li>
                    <li>Azure Resource Manager template</li>
                </ul>

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