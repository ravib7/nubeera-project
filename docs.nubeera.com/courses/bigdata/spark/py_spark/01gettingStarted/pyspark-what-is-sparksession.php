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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark &#8211; What is SparkSession?</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                <li class="breadcrumb-item active">PySpark</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                Since Spark 2.0 SparkSession has become an entry point to PySpark to work with RDD, DataFrame. Prior to 2.0, SparkContext used to be an entry point. Here, I will mainly focus on explaining what is SparkSession by defining and describing how to create SparkSession and using default SparkSession <code>spark</code> variable from <code>pyspark-shell</code>.<br><br>

                <strong class="schema-faq-question">What is SparkSession</strong>
                SparkSession introduced in version 2.0, It is an entry point to underlying PySpark functionality in order to programmatically create PySpark RDD, DataFrame. It&#8217;s object <em><code>spark</code></em> is default available in pyspark-shell and it can be created programmatically using SparkSession.<br>

                <h3 id="sparksession">SparkSession</h3>
                With Spark 2.0 a new class SparkSession (<code>pyspark.sql import SparkSession</code>) has been introduced. SparkSession is a combined class for all different contexts we used to have prior to 2.0 relase (SQLContext and HiveContext e.t.c). Since 2.0 SparkSession can be used in replace with SQLContext, HiveContext, and other contexts defined prior to 2.0. <br><br>
                As mentioned in the beginning SparkSession is an entry point to PySpark and creating a SparkSession instance would be the first statement you would write to program with RDD, DataFrame, and Dataset. SparkSession will be created using <code>SparkSession.builder</code> builder patterns.<br><br>
                Though SparkContext used to be an entry point prior to 2.0, It is not completely replaced with SparkSession, many features of SparkContext are still available and used in Spark 2.0 and later. You should also know that SparkSession internally creates SparkConfig and SparkContext with the configuration provided with SparkSession.<br><br>
                Spark Session also includes all the APIs available in different contexts :<br>
                <ul>
                    <li>Spark Context,</li>
                    <li>SQL Context,</li>
                    <li>Streaming Context,</li>
                    <li>Hive Context.</li>
                </ul><br>
                You can create as many SparkSession objects you want using either <code>SparkSession.builder</code> or <code>SparkSession.newSession</code>.<br>



                <h3>SparkSession in PySpark shell</h3>
                Be default PySpark shell provides &#8220;<code>spark</code>&#8221; object; which is an instance of SparkSession class. We can directly use this object where required in spark-shell. Start your &#8220;<code>pyspark</code>&#8221; shell from <code>$SPARK_HOME\bin</code> folder and enter the below statement.<br><br>
                <code>sqlcontext = spark.sqlContext</code>
                Similar to PySpark shell, In most of the tools, the environment itself creates default SparkSession object for us to use so you don&#8217;t have to worry about creating SparkSession object.<br><br>

                <h3>Create SparkSession</h3>
                In order to create SparkSession programmatically( in .py file) in PySpark, you need to use the builder pattern method <code>builder()</code> as explained below. <code>getOrCreate()</code> method returns an already existing SparkSession; if not exists, it creates a new SparkSession.<br><br>
                <code>

                    import pyspark
                    from pyspark.sql import SparkSession
                    spark = SparkSession.builder.master(&quot;local[1]&quot;) \
                    .appName(&#039;SparkByExamples.com&#039;) \
                    .getOrCreate()
                </code>
                <code>master()</code>&nbsp;– If you are running it on the cluster you need to use your master name as an argument to&nbsp;master(). usually, it would be either&nbsp;<a href="https://sparkbyexamples.com/hadoop/how-yarn-works/"><code>yarn</code>&nbsp;</a>or&nbsp;<code>mesos</code>&nbsp;depends on your cluster setup. <br>
                <ul>
                    <li>Use <code>local[x]</code> when running in Standalone mode. x should be an integer value and should be greater than 0; this represents how many partitions it should create when using RDD, DataFrame, and Dataset. Ideally, x value should be the number of CPU cores you have.</li>
                </ul><br>
                <code>appName()</code>&nbsp;– Used to set your application name.<br><br>
                <code>getOrCreate()</code>&nbsp;– This returns a SparkSession object if already exists, creates new one if not exists.<br><br>
                <strong>Note:</strong>&nbsp; SparkSession object “spark” is by default available in PySpark shell.<br><br>
                You can also create a new SparkSession using <code>newSession()</code> method.<br>
                <pre><blockquote class="language-python">
                    
import pyspark
from pyspark.sql import SparkSession
sparkSession3 = SparkSession.newSession

                </blockquote></pre>
                This always creates a new SparkSession object.<br>

                <h3>SparkSession Commonly Used Methods</h3>
                <code>version()</code> &#8211; Returns Spark version where your application is running, probably the Spark version you cluster is configured with. <br>
                <code>createDataFrame()</code> &#8211; This creates a DataFrame from a collection and an RDD<br>
                <code>getActiveSession()</code> &#8211; returns an active Spark session.<br>
                <code>read()</code> &#8211; Returns an instance of <code>DataFrameReader</code> class, this is used to read records from csv, parquet, avro and more file formats into DataFrame.<br>
                <code>readStream()</code> &#8211; Returns an instance of&nbsp;<code>DataStreamReader</code>&nbsp;class, this is used to read streaming data. that can be used to read streaming data into DataFrame.<br>
                <code>sparkContext()</code>&nbsp;&#8211; Returns a SparkContext.<br>
                <code>sql()</code> &#8211; Returns a DataFrame after executing the SQL mentioned.<br>
                <code>sqlContext()</code> &#8211; SQLContext.<br>
                <code>stop()</code> &#8211; Stop the current SparkContext.<br>
                <code>table()</code> &#8211; Returns a DataFrame of a table or view.<br>
                <code>udf()</code> &#8211; Creates a PySpark UDF to use it on DataFrame, Dataset, and SQL.<br>

                <h3>Conclusion</h3>
                In this PySpark article, you have learned SparkSession can be created using the builder() method and learned SparkSession is an entry point to PySpark, and creating a SparkSession instance would be the first statement you would write to program and finally have learned some of the commonly used SparkSession methods.
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