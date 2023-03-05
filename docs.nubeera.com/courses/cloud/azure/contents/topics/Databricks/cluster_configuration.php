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
                <h2>Cluster configuration</h2>
                <nav id="center-doc-outline" class="doc-outline is-hidden-desktop" data-bi-name="intopic toc" role="navigation" aria-label="Article Outline">
                    <h3>In this article</h3>
                    <ol>
                        <li><a href="#--cluster-features">Cluster features</a></li>
                        <li><a href="#cluster-sizing-considerations">Cluster sizing considerations</a></li>
                        <li><a href="#--common-scenarios">Common scenarios</a></li>
                    </ol>
                </nav>



                <!-- <content> -->
                Azure Databricks provides a number of options when you create and configure clusters to help you get the best performance at the lowest cost. This flexibility, however, can create challenges when you’re trying to determine optimal configurations for your workloads. Carefully considering how users will utilize clusters will help guide configuration options when you create new clusters or configure existing clusters. Some of the things to consider when determining configuration options are:<br><br>
                <ul>
                    <li>What type of user will be using the cluster? A data scientist may be running different job types with different requirements than a data engineer or data analyst.</li>
                    <li>What types of workloads will users run on the cluster? For example, batch extract, transform, and load (ETL) jobs will likely have different requirements than analytical workloads.</li>
                    <li>What level of service level agreement (SLA) do you need to meet?</li>
                    <li>What budget constraints do you have?</li>
                </ul>
                This article provides cluster configuration recommendations for different scenarios based on these considerations. This article also discusses specific features of Azure Databricks clusters and the considerations to keep in mind for those features.<br><br>
                Your configuration decisions will require a tradeoff between cost and performance. The primary cost of a cluster includes the Databricks Units (DBUs) consumed by the cluster and the cost of the underlying resources needed to run the cluster. What may not be obvious are the secondary costs such as the cost to your business of not meeting an SLA, decreased employee efficiency, or possible waste of resources because of poor controls.
                <h3 id="--cluster-features" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--cluster-features" aria-labelledby="--cluster-features"></a><a id="cluster-features"> </a><a id="cluster-features-overview"> </a>Cluster features</h3>
                Before discussing more detailed cluster configuration scenarios, it’s important to understand some features of Azure Databricks clusters and how best to use those features.
                <h3 id="--all-purpose-clusters-and-job-clusters" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--all-purpose-clusters-and-job-clusters" aria-labelledby="--all-purpose-clusters-and-job-clusters"></a><a id="all-purpose-clusters-and-job-clusters"> </a><a id="cluster-types"> </a>All-purpose clusters and job clusters</h3>
                When you create a cluster you select a cluster type: an all-purpose cluster or a job cluster. All-purpose clusters can be shared by multiple users and are best for performing ad-hoc analysis, data exploration, or development. Once you’ve completed implementing your processing and are ready to operationalize your code, switch to running it on a job cluster. Job clusters terminate when your job ends, reducing resource usage and cost.
                <h3 id="--cluster-mode" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--cluster-mode" aria-labelledby="--cluster-mode"></a><a id="cluster-mode"> </a><a id="cluster-modes"> </a>Cluster mode</h3>
                Azure Databricks supports three cluster modes: Standard, High Concurrency, and Single Node. Most regular users use Standard or Single Node clusters.<br><br>
                <ul>
                    <li>Standard clusters are ideal for processing large amounts of data with Apache Spark.</li>
                    <li>Single Node clusters are intended for jobs that use small amounts of data or non-distributed workloads such as single-node machine learning libraries.</li>
                    <li>High Concurrency clusters are ideal for groups of users who need to share resources or run ad-hoc jobs. Administrators usually create High Concurrency clusters. Databricks recommends enabling autoscaling for High Concurrency clusters.</li>
                </ul>
                <h3 id="---on-demand-and-spot-instances" class="heading-anchor"><a class="anchor-link docon docon-link" href="#---on-demand-and-spot-instances" aria-labelledby="---on-demand-and-spot-instances"></a><a id="cluster-autoscaling"> </a><a id="instance-types-azure"> </a><a id="on-demand-and-spot-instances"> </a>On-demand and spot instances</h3>
                To save cost, Azure Databricks supports creating clusters using a combination spot instances. You can use spot instances to take advantage of unused capacity on Azure to reduce the cost of running your applications, grow your application’s compute capacity, and increase throughput.
                <h3 id="autoscaling" class="heading-anchor"><a class="anchor-link docon docon-link" href="#autoscaling" aria-labelledby="autoscaling"></a>Autoscaling</h3>
                Autoscaling allows clusters to resize automatically based on workloads. Autoscaling can benefit many use cases and scenarios from both a cost and performance perspective, but it can be challenging to understand when and how to use autoscaling. The following are some considerations for determining whether to use autoscaling and how to get the most benefit:<br><br>
                <ul>
                    <li>Autoscaling typically reduces costs compared to a fixed-size cluster.</li>
                    <li>Autoscaling workloads can run faster compared to an under-provisioned fixed-size cluster.</li>
                    <li>Some workloads are not compatible with autoscaling clusters, including spark-submit jobs and some python packages.</li>
                    <li>With single-user all-purpose clusters, users may find autoscaling is slowing down their development or analysis when the minimum number of workers is set too low. This is because the commands or queries they’re running are often several minutes apart, time in which the cluster is idle and may scale down to save on costs. When the next command is executed, the cluster manager will attempt to scale up, taking a few minutes while retrieving instances from the cloud provider. During this time, jobs might run with insufficient resources, slowing the time to retrieve results. While increasing the minimum number of workers helps, it also increases cost. This is another example where cost and performance need to be balanced.</li>
                    <li>If Delta Caching is being used, it’s important to remember that any cached data on a node is lost if that node is terminated. If retaining cached data is important for your workload, consider using a fixed-size cluster.</li>
                    <li>If you have a job cluster running an ETL workload, you can sometimes size your cluster appropriately when tuning if you know your job is unlikely to change. However, autoscaling gives you flexibility if your data sizes increase. It’s also worth noting that optimized autoscaling can reduce expense with long-running jobs if there are long periods when the cluster is underutilized or waiting on results from another process. Once again, though, your job may experience minor delays as the cluster attempts to scale up appropriately. If you have tight SLAs for a job, a fixed-sized cluster may be a better choice or consider using an Azure Databricks pool to reduce cluster start times.</li>
                </ul>
                Azure Databricks also supports autoscaling local storage. With autoscaling local storage, Azure Databricks monitors the amount of free disk space available on your cluster’s Spark workers. If a worker begins to run low on disk, Azure Databricks automatically attaches a new managed volume to the worker before it runs out of disk space.

                <h3 id="--pools" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--pools" aria-labelledby="--pools"></a><a id="instance-pools"> </a><a id="pools"> </a>Pools</h3>
                Pools reduce cluster start and scale-up times by maintaining a set of available, ready-to-use instances. Databricks recommends taking advantage of pools to improve processing time while minimizing cost.
                <h3 id="--databricks-runtime-versions" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--databricks-runtime-versions" aria-labelledby="--databricks-runtime-versions"></a><a id="databricks-runtime-versions"> </a><a id="dbr-versions"> </a>Databricks Runtime versions</h3>
                Databricks recommends using the latest Databricks Runtime version for all-purpose clusters. Using the most current version will ensure you have the latest optimizations and most up-to-date compatibility between your code and preloaded packages.<br><br>
                For job clusters running operational workloads, consider using the Long Term Support (LTS) Databricks Runtime version. Using the LTS version will ensure you don’t run into compatibility issues and can thoroughly test your workload before upgrading. If you have an advanced use case around machine learning or genomics, consider the specialized Databricks Runtime versions.
                <h3 id="--cluster-policies" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--cluster-policies" aria-labelledby="--cluster-policies"></a><a id="cluster-policies"> </a><a id="policies"> </a>Cluster policies</h3>
                Azure Databricks cluster policies allow administrators to enforce controls over the creation and configuration of clusters. Databricks recommends using cluster policies to help apply the recommendations discussed in this guide.
                <h3 id="--automatic-termination" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--automatic-termination" aria-labelledby="--automatic-termination"></a><a id="auto-termination"> </a><a id="automatic-termination"> </a>Automatic termination</h3>
                Many users won’t think to terminate their clusters when they’re finished using them. Fortunately, clusters are automatically terminated after a set period, with a default of 120 minutes.<br><br>
                Administrators can change this default setting when creating cluster policies. Decreasing this setting can lower cost by reducing the time that clusters are idle. It’s important to remember that when a cluster is terminated all state is lost, including all variables, temp tables, caches, functions, objects, and so forth. All of this state will need to be restored when the cluster starts again. If a developer steps out for a 30-minute lunch break, it would be wasteful to spend that same amount of time to get a notebook back to the same state as before.
                <div class="alert is-primary">
                    <strong> Important :</strong>
                    Idle clusters continue to accumulate DBU and cloud instance charges during the inactivity period before termination.
                </div>
                <h3 id="--garbage-collection" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--garbage-collection" aria-labelledby="--garbage-collection"></a><a id="garbage-collection"> </a><a id="garbage-collection-considerations"> </a>Garbage collection</h3>
                While it may be less obvious than other considerations discussed in this article, paying attention to garbage collection can help optimize job performance on your clusters. Providing a large amount of RAM can help jobs perform more efficiently but can also lead to delays during garbage collection.<br><br>
                To minimize the impact of long garbage collection sweeps, avoid deploying clusters with large amounts of RAM configured for each instance. Having more RAM allocated to the executor will lead to longer garbage collection times. Instead, configure instances with smaller RAM sizes, and deploy more instances if you need more memory for your jobs. However, there are cases where fewer nodes with more RAM are recommended, for example, workloads that require a lot of shuffles, as discussed in Cluster sizing considerations.
                <h3 id="--cluster-access-control" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--cluster-access-control" aria-labelledby="--cluster-access-control"></a><a id="cluster-access-control"> </a><a id="cluster-permissions"> </a>Cluster access control</h3>
                You can configure two types of cluster permissions:
                <ul>
                    <li>The <strong>Allow Cluster Creation</strong> permission controls the ability of users to create clusters.</li>
                    <li>Cluster-level permissions control the ability to use and modify a specific cluster.</li>
                </ul>
                You can create a cluster if you have either cluster create permissions or access to a cluster policy, which allows you to create any cluster within the policy’s specifications. The cluster creator is the owner and has Can Manage permissions, which will enable them to share it with any other user within the constraints of the data access permissions of the cluster.<br><br>
                Understanding cluster permissions and cluster policies are important when deciding on cluster configurations for common scenarios.
                <h3 id="---cluster-tags" class="heading-anchor"><a class="anchor-link docon docon-link" href="#---cluster-tags" aria-labelledby="---cluster-tags"></a><a id="cluster-sizing"> </a><a id="cluster-tagging"> </a><a id="cluster-tags"> </a>Cluster tags</h3>
                Cluster tags allow you to easily monitor the cost of cloud resources used by different groups in your organization. You can specify tags as key-value strings when creating a cluster, and Azure Databricks applies these tags to cloud resources, such as instances and EBS volumes. Learn more about tag enforcement in the cluster policies best practices guide.
                <h3 id="cluster-sizing-considerations" class="heading-anchor"><a class="anchor-link docon docon-link" href="#cluster-sizing-considerations" aria-labelledby="cluster-sizing-considerations"></a>Cluster sizing considerations</h3>
                Azure Databricks runs one executor per worker node. Therefore the terms executor and worker are used interchangeably in the context of the Azure Databricks architecture. People often think of cluster size in terms of the number of workers, but there are other important factors to consider:<br><br>
                <ul>
                    <li>Total executor cores (compute): The total number of cores across all executors. This determines the maximum parallelism of a cluster.</li>
                    <li>Total executor memory: The total amount of RAM across all executors. This determines how much data can be stored in memory before spilling it to disk.</li>
                    <li>Executor local storage: The type and amount of local disk storage. Local disk is primarily used in the case of spills during shuffles and caching.</li>
                </ul>
                Additional considerations include worker instance type and size, which also influence the factors above. When sizing your cluster, consider:
                <ul>
                    <li>How much data will your workload consume?</li>
                    <li>What’s the computational complexity of your workload?</li>
                    <li>Where are you reading data from?</li>
                    <li>How is the data partitioned in external storage?</li>
                    <li>How much parallelism do you need?</li>
                </ul>
                Answering these questions will help you determine optimal cluster configurations based on workloads. For simple ETL style workloads that use narrow transformations only (transformations where each input partition will contribute to only one output partition), focus on a compute-optimized configuration. If you expect a lot of shuffles, then the amount of memory is important, as well as storage to account for data spills. Fewer large instances can reduce network I/O when transferring data between machines during shuffle-heavy workloads.<br><br>
                There’s a balancing act between the number of workers and the size of worker instance types. A cluster with two workers, each with 40 cores and 100 GB of RAM, has the same compute and memory as an eight worker cluster with 10 cores and 25 GB of RAM.<br><br>
                If you expect many re-reads of the same data, then your workloads may benefit from caching. Consider a storage optimized configuration with Delta Cache.
                <h3 id="--cluster-sizing-examples" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--cluster-sizing-examples" aria-labelledby="--cluster-sizing-examples"></a><a id="cluster-sizing-examples"> </a><a id="sizing-examples"> </a>Cluster sizing examples</h3>
                The following examples show cluster recommendations based on specific types of workloads. These examples also include configurations to avoid and why those configurations are not suitable for the workload types.
                <h4 id="--data-analysis" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--data-analysis" aria-labelledby="--data-analysis"></a><a id="data-analysis"> </a><a id="data-analysis-sizing-example"> </a>Data analysis</h4>
                Data analysts typically perform processing requiring data from multiple partitions, leading to many shuffle operations. A cluster with a smaller number of nodes can reduce the network and disk I/O needed to perform these shuffles. Cluster A in the following diagram is likely the best choice, particularly for clusters supporting a single analyst.<br><br>
                Cluster D will likely provide the worst performance since a larger number of nodes with less memory and storage will require more shuffling of data to complete the processing.
                <div class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/_static/images/clusters/cluster-sizing-analysis-etl.png" alt="Data analysis cluster sizing" data-linktype="relative-path"><br><br>
                </div>
                Analytical workloads will likely require reading the same data repeatedly, so recommended worker types are storage optimized with Delta Cache enabled.<br><br>
                Additional features recommended for analytical workloads include:
                <ul>
                    <li>Enable auto termination to ensure clusters are terminated after a period of inactivity.</li>
                    <li>Consider enabling autoscaling based on the analyst’s typical workload.</li>
                    <li>Consider using pools, which will allow restricting clusters to pre-approved instance types and ensure consistent cluster configurations.</li>
                </ul>
                Features that are probably not useful:
                <ul>
                    <li>Storage autoscaling, since this user will probably not produce a lot of data.</li>
                    <li>High Concurrency clusters, since this cluster is for a single user, and High Concurrency clusters are best suited for shared use.</li>
                </ul>
                <h4 id="--basic-batch-etl" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--basic-batch-etl" aria-labelledby="--basic-batch-etl"></a><a id="basic-batch-etl"> </a><a id="basic-etl-sizing-example"> </a>Basic batch ETL</h4>
                Simple batch ETL jobs that don’t require wide transformations, such as joins or aggregations, typically benefit from clusters that are compute-optimized. For these types of workloads, any of the clusters in the following diagram are likely acceptable.
                <div class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/_static/images/clusters/cluster-sizing-basic-etl.png" alt="Basic batch ETL cluster sizing" data-linktype="relative-path"><br><br>
                </div>
                Compute-optimized worker types are recommended; these will be cheaper, and these workloads will likely not require significant memory or storage.<br><br>
                Using a pool might provide a benefit for clusters supporting simple ETL jobs by decreasing cluster launch times and reducing total runtime when running job pipelines. However, since these types of workloads typically run as scheduled jobs where the cluster runs only long enough to complete the job, using a pool might not provide a benefit.<br><br>
                The following features probably aren’t useful:
                <ul>
                    <li>Delta Caching, since re-reading data is not expected.</li>
                    <li>Auto termination probably isn’t required since these are likely scheduled jobs.</li>
                    <li>Autoscaling is not recommended since compute and storage should be pre-configured for the use case.</li>
                    <li>High Concurrency clusters are intended for multi-users and won’t benefit a cluster running a single job.</li>
                </ul>
                <h4 id="--complex-batch-etl" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--complex-batch-etl" aria-labelledby="--complex-batch-etl"></a><a id="complex-batch-etl"> </a><a id="complex-etl-sizing-example"> </a>Complex batch ETL</h4>
                More complex ETL jobs, such as processing that requires unions and joins across multiple tables, will probably work best when you can minimize the amount of data shuffled. Since reducing the number of workers in a cluster will help minimize shuffles, you should consider a smaller cluster like cluster A in the following diagram over a larger cluster like cluster D.
                <div class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/_static/images/clusters/cluster-sizing-analysis-etl.png" alt="Complex ETL cluster sizing" data-linktype="relative-path"><br><br>
                </div>
                Complex transformations can be compute-intensive, so for some workloads reaching an optimal number of cores may require adding additional nodes to the cluster.<br><br>
                Like simple ETL jobs, compute-optimized worker types are recommended; these will be cheaper, and these workloads will likely not require significant memory or storage. Also, like simple ETL jobs, the main cluster feature to consider is pools to decrease cluster launch times and reduce total runtime when running job pipelines.<br><br>
                The following features probably aren’t useful:
                <ul>
                    <li>Delta Caching, since re-reading data is not expected.</li>
                    <li>Auto termination probably isn’t required since these are likely scheduled jobs.</li>
                    <li>Autoscaling is not recommended since compute and storage should be pre-configured for the use case.</li>
                    <li>High Concurrency clusters are intended for multi-users and won’t benefit a cluster running a single job.</li>
                </ul>
                <h4 id="--training-machine-learning-models" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--training-machine-learning-models" aria-labelledby="--training-machine-learning-models"></a><a id="ml-models-sizing-example"> </a><a id="training-machine-learning-models"> </a>Training machine learning models</h4>
                Since initial iterations of training a machine learning model are often experimental, a smaller cluster such as cluster A is a good choice. A smaller cluster will also reduce the impact of shuffles.<br><br>
                If stability is a concern, or for more advanced stages, a larger cluster such as cluster B or C may be a good choice.<br><br>
                A large cluster such as cluster D is not recommended due to the overhead of shuffling data between nodes.
                <div class="mx-imgBorder">
                    <br><br> <img src="https://docs.microsoft.com/en-us/azure/databricks/_static/images/clusters/cluster-sizing-ml-training.png" alt="Machine learning cluster sizing" data-linktype="relative-path"><br><br>
                </div>
                Recommended worker types are storage optimized with Delta Caching enabled to account for repeated reads of the same data and to enable caching of training data. If the compute and storage options provided by storage optimized nodes are not sufficient, consider GPU optimized nodes. A possible downside is the lack of Delta Caching support with these nodes.<br><br>
                Additional features recommended for analytical workloads include:
                <ul>
                    <li>Enable auto termination to ensure clusters are terminated after a period of inactivity.</li>
                    <li>Consider enabling autoscaling based on the analyst’s typical workload.</li>
                    <li>Use pools, which will allow restricting clusters to pre-approved instance types and ensure consistent cluster configurations.</li>
                </ul>
                Features that are probably not useful:
                <ul>
                    <li>Autoscaling, since cached data can be lost when nodes are removed as a cluster scales down. Additionally, typical machine learning jobs will often consume all available nodes, in which case autoscaling will provide no benefit.</li>
                    <li>Storage autoscaling, since this user will probably not produce a lot of data.</li>
                    <li>High Concurrency clusters, since this cluster is for a single user, and High Concurrency clusters are best suited for shared use.</li>
                </ul>
                <h3 id="--common-scenarios" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--common-scenarios" aria-labelledby="--common-scenarios"></a><a id="common-cluster-patterns"> </a><a id="common-scenarios"> </a>Common scenarios</h3>
                The following sections provide additional recommendations for configuring clusters for common cluster usage patterns:
                <ul>
                    <li>Multiple users running data analysis and ad-hoc processing.</li>
                    <li>Specialized use cases like machine learning.</li>
                    <li>Support scheduled batch jobs.</li>
                </ul>
                <h3 id="--multi-user-clusters" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--multi-user-clusters" aria-labelledby="--multi-user-clusters"></a><a id="multi-user-cluster-example"> </a><a id="multi-user-clusters"> </a>Multi-user clusters</h3>
                <h4 id="--scenario" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--scenario" aria-labelledby="--scenario"></a><a id="multi-user-cluster-example-scenario"> </a><a id="scenario"> </a>Scenario</h4>
                You need to provide multiple users access to data for running data analysis and ad-hoc queries. Cluster usage might fluctuate over time, and most jobs are not very resource-intensive. The users mostly require read-only access to the data and want to perform analyses or create dashboards through a simple user interface.<br><br>
                The recommended approach for cluster provisioning is a hybrid approach for node provisioning in the cluster along with autoscaling. A hybrid approach involves defining the number of on-demand instances and spot instances for the cluster and enabling autoscaling between the minimum and the maximum number of instances.
                <div class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/_static/images/admin-cluster-management/scenario-1-1.png" alt="Multi-user scenario" data-linktype="relative-path"><br><br>
                </div>
                This cluster is always available and shared by the users belonging to a group by default. Enabling autoscaling allows the cluster to scale up and down depending upon the load.<br><br>
                Users do not have access to start/stop the cluster, but the initial on-demand instances are immediately available to respond to user queries. If the user query requires more capacity, autoscaling automatically provisions more nodes (mostly Spot instances) to accommodate the workload.<br><br>
                Azure Databricks has other features to further improve multi-tenancy use cases:
                <ul>
                    <li>Handling large queries in interactive workflows describes a process to automatically manage queries that will never finish.</li>
                    <li>Task preemption improves how long-running jobs and shorter jobs work together.</li>
                    <li>Autoscaling local storage helps prevent running out of storage space in a multi-tenant environment.</li>
                </ul>
                This approach keeps the overall cost down by:
                <ul>
                    <li>Using a shared cluster model.</li>
                    <li>Using a mix of on-demand and spot instances.</li>
                    <li>Using autoscaling to avoid paying for underutilized clusters.</li>
                </ul>
                <h3 id="--specialized-workloads" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--specialized-workloads" aria-labelledby="--specialized-workloads"></a><a id="specialized-cluster-example"> </a><a id="specialized-workloads"> </a>Specialized workloads</h3>
                <h4 id="--scenario-1" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--scenario-1" aria-labelledby="--scenario-1"></a><a id="scenario"> </a><a id="specialized-cluster-example-scenario"> </a>Scenario</h4>
                You need to provide clusters for specialized use cases or teams within your organization, for example, data scientists running complex data exploration and machine learning algorithms. A typical pattern is that a user needs a cluster for a short period to run their analysis.<br><br>
                The best approach for this kind of workload is to create cluster policies with pre-defined configurations for default, fixed, and settings ranges. These settings might include the number of instances, instance types, spot versus on-demand instances, roles, libraries to be installed, and so forth. Using cluster policies allows users with more advanced requirements to quickly spin up clusters that they can configure as needed for their use case and enforce cost and compliance with policies.
                <div class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/_static/images/admin-cluster-management/scenario-2.png" alt="Specialized workloads" data-linktype="relative-path"><br><br>
                </div>
                This approach provides more control to users while maintaining the ability to keep cost under control by pre-defining cluster configurations. This also allows you to configure clusters for different groups of users with permissions to access different data sets.<br><br>
                One downside to this approach is that users have to work with administrators for any changes to clusters, such as configuration, installed libraries, and so forth.
                <h3 id="--batch-workloads" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--batch-workloads" aria-labelledby="--batch-workloads"></a><a id="batch-cluster-example"> </a><a id="batch-workloads"> </a>Batch workloads</h3>
                <h4 id="--scenario-2" class="heading-anchor"><a class="anchor-link docon docon-link" href="#--scenario-2" aria-labelledby="--scenario-2"></a><a id="batch-cluster-example-scenario"> </a><a id="scenario"> </a>Scenario</h4>
                You need to provide clusters for scheduled batch jobs, such as production ETL jobs that perform data preparation. The suggested best practice is to launch a new cluster for each job run. Running each job on a new cluster helps avoid failures and missed SLAs caused by other workloads running on a shared cluster. Depending on the level of criticality for the job, you could use all on-demand instances to meet SLAs or balance between spot and on-demand instances for cost savings.
                <div class="mx-imgBorder">
                    <br><br> <img src="https://docs.microsoft.com/en-us/azure/databricks/_static/images/admin-cluster-management/scenario-3.png" alt="Scheduled batch workloads" data-linktype="relative-path"><br><br>
                </div>

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