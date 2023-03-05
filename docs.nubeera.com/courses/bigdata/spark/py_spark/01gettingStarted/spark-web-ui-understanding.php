<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra PySpark</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra PySpark">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <link id="theme-style" rel="stylesheet" href="../../../../../assets/css/theme.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">PySpark - Getting Started</strong><br><br>
                <ul>
                    <li><a href="index.php">PySpark - Getting Started</a></li>
                    <li><a href="spark-web-ui-understanding.php">PySpark - web/Application UI</a></li>
                    <li><a href="pyspark-what-is-sparksession.php">PySpark - Spark Session</a></li>
                    <li><a href="pyspark-rdd.php">PySpark - RDD</a></li>
                    <li><a href="pyspark-parallelize-create-rdd.php">PySpark - Parellelize</a></li>
                    <li><a href="pyspark-repartition-vs-coalesce.php">PySpark - repartition() vs coalesce()</a></li>
                    <li><a href="pyspark-broadcast-variables.php">PySpark - Broadcast Variables</a></li>
                    <li><a href="pyspark-accumulator-with-example.php">PySpark - Accumulator</a></li>
                </ul>

            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Spark Web UI &#8211; Understanding Spark Execution</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                <li class="breadcrumb-item active">PySpark</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                Apache Spark provides a suite of Web UI/User Interfaces (Jobs, Stages, Tasks, Storage, Environment, Executors, and SQL) to monitor the status of your Spark/PySpark application, resource consumption of Spark cluster, and Spark configurations.<br><br>
                To better understand how Spark executes the Spark/PySpark Jobs, these set of user interfaces comes in handy. In this article, I will run a small application and explain how Spark executes this by using different sections in Spark Web UI.<br><br>
                Before going into Spark UI first, learn about these two concepts.<br>
                <ul>
                    <li>Transformations</li>
                    <li>Action</li>
                </ul><br>
                Let me give a small brief on those two, Your application code is the set of instructions that instructs the driver to do a Spark Job and let the driver decide how to achieve it with the help of executors.<br><br>
                Instructions to the driver are called Transformations and action will trigger the execution.<br><br>
                I had written a small application which does transformation and action.<br><br>
                <img src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/1.-Transformation-and-Action.jpg?w=1240&ssl=1" alt="Application Code"><br><br>
                Here we are creating a DataFrame by reading a .csv file and checking the count of the DataFrame. Let&#8217;s understand how an application gets projected in Spark UI<br><br>
                Spark UI is separated into below tabs.<br><br>
                <ol>
                    <li><a href="#spark-jobs">Spark Jobs</a></li>
                    <li><a href="#spark-stages">Stages</a></li>
                    <li><a href="#tasks">Tasks</a></li>
                    <li><a href="#storage">Storage</a></li>
                    <li><a href="#environment">Environment</a></li>
                    <li><a href="#executors">Executors</a></li>
                    <li><a href="#sql">SQL</a></li>
                </ol><br>
                If you are running the Spark application locally, Spark UI can be accessed using the <a href="http://localhost:4040/" target="_blank" rel="noreferrer noopener">http://localhost:4040/</a> . Spark UI by default runs on port 4040 and below are some of the additional UI&#8217;s that would be helpful to track Spark application.<br><br>
                <img src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/2.Spark-UI-scaled.jpg?resize=768%2C432&ssl=1" alt="Spark Web UI"><br><br>
                <ul>
                    <li>Spark Application UI:&nbsp;<a href="http://localhost:4040/" target="_blank" rel="noreferrer noopener">http://localhost:4040/</a></li>
                    <li>Resource Manager:&nbsp;<a href="http://localhost:9870/" target="_blank" rel="noreferrer noopener">http://localhost:9870</a></li>
                    <li>Spark JobTracker:&nbsp;<a href="http://localhost:8088/" target="_blank" rel="noreferrer noopener">http://localhost:8088/</a></li>
                    <li>Node Specific Info:&nbsp;<a href="http://localhost:8042/" target="_blank" rel="noreferrer noopener">http://localhost:8042/</a></li>
                </ul><br>
                <strong>Note:</strong> To access these URLs, Spark application should in running state. If you wanted to access this URL regardless of your Spark application status and wanted to access Spark UI all the time, you would need to start Spark History server.<br><br>


                <h3 id="spark-jobs">1. Spark Jobs Tab</h3>
                <img src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/4.Scheduling.jpg?w=550&ssl=1" alt="Jobs tab" style="width:413;height:236">
                The details that I want you to be aware of under the jobs section are <strong>Scheduling</strong> <strong>mode</strong>, the <strong>number of Spark Jobs</strong>, the <strong>number of stages</strong> it has, and <strong>Description</strong> in your spark job.<br><br>

                <h3 id="scheduling">1.1 <span class="has-inline-color has-very-dark-gray-color">Scheduling Mode</span></h3>
                We have three Scheduling modes.<br><br>
                <ol>
                    <li><strong>Standalone </strong>mode</li>
                    <li><strong>YARN</strong> mode</li>
                    <li><strong>Mesos</strong></li>
                </ol><br>
                <img src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/5.NumberofJobs-scaled.jpg?resize=768%2C143&ssl=1" alt="Spark Scheduling tab"><br><br>
                As I was running in a local machine, I tried using <code>Standalone mode</code><br><br>

                <h3 id="job">1.2 <span class="has-inline-color has-very-dark-gray-color">Number of Spark Jobs: </span></h3>
                Always keep in mind, the number of Spark jobs is equal to the number of actions in the application and each Spark job should have at least one Stage.<br><br>
                In our above application, we have performed 3 Spark jobs (0,1,2)<br><br>
                <ul>
                    <li>Job <em>0. read the CSV file.</em></li>
                    <li>Job <em>1. Inferschema from the file.</em></li>
                    <li>Job <em>2. Count Check</em></li>
                </ul><br>
                So if we look at the fig it clearly shows 3 Spark jobs result of 3 actions.<br><br>

                <h3 id="stage">1.3 Number of Stages</h3>
                Each Wide Transformation results in a separate Number<strong> </strong>of Stages. In our case, Spark job0 and Spark job1 have individual single stages but when it comes to Spark job 3 we can see two stages that are because of the partition of data. Data is partitioned into two files by default.<br><br>

                <h3 id="Description">1.4 Description</h3>
                Description links the complete details of the associated SparkJob like Spark Job Status, DAG Visualization, Completed Stages<br>I had explained the description part in the coming part.<br><br>

                <h3 id="spark-stages">2. Stages Tab</h3>
                <img src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/6.Stage-Tab-scaled.jpg?resize=1536%2C520&ssl=1" alt="Spark Stage Tab"><br><br>
                We can navigate into Stage Tab in two ways.<br>
                <ol>
                    <li>Select the Description of the respective Spark job (Shows stages only for the Spark job opted)</li>
                    <li>On the top of Spark Job tab select Stages option (Shows all stages in Application)</li>
                </ol><br>
                In our application, we have a total of <strong>4 <em>Stages</em></strong>.<br>
                The Stage tab displays a summary page that shows the current state of all stages of all Spark jobs in the spark application<br><br>
                The number of tasks you could see in each stage is the number of partitions that spark is going to work on and each task inside a stage is the same work that will be done by spark but on a different partition of data.<br><br>
                <img src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/7.Stage0_.jpg?resize=620%2C1024&ssl=1" alt="Stage 0"><br>

                <h3>Stage detail</h3>
                Details of stage showcase Directed Acyclic Graph (DAG) of this stage, where vertices represent the RDDs or DataFrame and edges represent an operation to be applied.<br><br>
                let us analyze operations in Stages<br>
                Operations in Stage0 are<br>
                1.FileScanRDD<br>2.MapPartitionsRDD<br>

                <h3><span class="has-inline-color has-very-dark-gray-color">FileScanRDD</span></h3>
                FileScan represents reading the data from a file.<br>It is &nbsp;given FilePartitions that are custom RDD partitions with PartitionedFiles (file blocks)<br>In our scenario, the <em>CSV file is read</em><br><br>

                <h3>MapPartitionsRDD</h3>
                MapPartitionsRDD will be created when you use map Partition transformation<br>
                <img src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/8.Stage1_.jpg?resize=452%2C1024&ssl=1" alt="Stage1"><br><br>
                Operation in Stage(1) are<br>1.FileScanRDD<br>2.MapPartitionsRDD <br>3.SQLExecutionRDD<br><br>
                As File Scan and <code>MapPartitionsRDD</code> is already explained, let us look at <code>SQLExecutionRDD</code>

                <h4>SQLExecutionRDD</h4>
                <code>SQLExecutionRDD</code> is Spark property that is used to track multiple Spark jobs that should all together constitute a single structured query execution.&nbsp;<br><br>
                <img src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/9.Stage2_.jpg?resize=620%2C1024&ssl=1" alt="Stage 2" style="width:310;height:512"><br><br>
                Operation in Stage(2) and Stage(3) are<br>1.FileScanRDD<br>2.MapPartitionsRDD<br>3.WholeStageCodegen<br>4.Exchange<br><br>

                <h4>Wholestagecodegen</h4>
                A physical query optimizer in Spark SQL that fuses multiple physical operators<br>

                <h4>Exchange</h4>
                Exchange is performed because of the COUNT method. <br><em>As data is divided into partitions and shared among executors, to get count there should be adding of the count of from individual partition.</em><br><br>
                Represents the shuffle i.e data movement across the cluster(Executors).<br>It is the most expensive operation and if number of partitions is more exchange of data between executors will also be more.<br>

                <h3 id="tasks">3. Tasks</h3>
                <img src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/11.Task3_-scaled.jpg?resize=1536%2C135&ssl=1" alt="Spark Tasks Tab"><br>
                Tasks are located at the bottom space in the respective stage.<br>Key things to look task page are:<br>1. Input Size &#8211; Input for the Stage<br>2. Shuffle Write-Output is the stage written.<br>

                <h3 id="storage">4. Storage</h3>
                The Storage tab displays the persisted RDDs and DataFrames, if any, in the application. The summary page shows the storage levels, sizes and partitions of all RDDs, and the details page shows the sizes and using executors for all partitions in an RDD or DataFrame.<br>

                <h3 id="environment">5. Environment Tab</h3>
                <img src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/12.Env_.jpg?w=1180&ssl=1" alt="Spark Environment Tab"><br>
                This environment page has five parts. It is a useful place to check whether your properties have been set correctly.<br>
                <ol>
                    <li><strong>Runtime Information</strong>: simply contains the&nbsp;runtime properties&nbsp;like versions of Java and Scala.</li>
                    <li><strong>Spark Properties</strong>: lists the&nbsp;application properties&nbsp;like&nbsp;‘spark.app.name’&nbsp;and ‘<code>spark.driver.memory</code>’.</li>
                    <li><strong>Hadoop Properties</strong>: displays properties relative to Hadoop and YARN. <strong>Note</strong>: Properties like&nbsp;<a href="https://spark.apache.org/docs/3.0.0-preview/configuration.html#execution-behavior">‘</a><code>spark.hadoop</code>’&nbsp;are shown not in this part but in ‘Spark Properties’.</li>
                    <li><strong>System Properties</strong>: shows more details about the JVM.</li>
                    <li><strong>Classpath Entries</strong>: lists the classes loaded from different sources, which is very useful to resolve class conflicts.</li>
                </ol><br>
                <img src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/13.Env_-scaled.jpg?resize=1536%2C889&ssl=1" alt="Spark Environment properties"><br>
                The Environment tab displays the values for the different environment and configuration variables, including JVM, Spark, and system properties.<br>

                <h3 id="executors">6. Executors Tab</h3>
                <img src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/14.Executors-scaled.jpg?resize=1536%2C538&ssl=1" alt="Spark Executors Tab"><br>
                The Executors tab displays summary information about the executors that were created for the application, including memory and disk usage and task and shuffle information. The Storage Memory column shows the amount of memory used and reserved for caching data.<br><br>
                The Executors tab provides not only resource information like amount of memory, disk, and cores used by each executor but also performance information.<br><br>
                In Executors<br><em>Number of cores = 3 as I gave master as local with 3 threads</em><br><em>Number of tasks = </em>4<br>

                <h3 id="sql">7. SQL Tab</h3>
                <img src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/15.SQLTAb-scaled.jpg?resize=1536%2C341&ssl=1" alt="Spark SQL Tab"><br><br>
                If the application executes Spark SQL queries then the SQL tab displays information, such as the duration, Spark jobs, and physical and logical plans for the queries.<br><br>
                In our application, we performed read and count operation on files and DataFrame. So both read and count are listed SQL Tab<br><br>
            </div>
        </div>
        <?php require "../../../../../templates/footer_outer.php" ?>

    </div>

    <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script defer src="../../../../../assets/fontawesome/js/all.min.js"></script><!-- footer social icons -->
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