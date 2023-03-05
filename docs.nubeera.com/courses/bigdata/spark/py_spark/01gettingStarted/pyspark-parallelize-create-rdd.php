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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark parallelize() &#8211; Create RDD from a list data</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                <li class="breadcrumb-item active">PySpark</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                PySpark <code>parallelize()</code> is a function in SparkContext and is used to create an RDD from a list collection. In this article, I will explain the usage of parallelize to create RDD and how to create an empty RDD with PySpark example.<br><br>

                Before we start let me explain what is RDD, Resilient Distributed Datasets (<b>RDD</b>) is a fundamental data structure of PySpark, It is an immutable distributed collection of objects. Each dataset in&nbsp;<b>RDD</b>&nbsp;is divided into logical partitions, which may be computed on different nodes of the cluster.<br>
                <ul>
                    <li>PySpark Parallelizing an existing collection in your driver program.</li>
                </ul>
                Below is an example of how to create an RDD using a parallelize method from Sparkcontext. <code>sparkContext.parallelize([1,2,3,4,5,6,7,8,9,10])</code> creates an RDD with a list of Integers.<br>


                <h3><strong>Using sc.parallelize on PySpark Shell or REPL</strong></h3>
                PySpark shell SparkContext variable &#8220;sc&#8221;, use <code>sc.parallelize()</code> to create an RDD.<br><br>
                <pre><blockquote class="language-python">
                    
rdd = sc.parallelize([1,2,3,4,5,6,7,8,9,10])

                </blockquote></pre><br>

                <h3><strong>Using PySpark sparkContext.parallelize</strong>() in application</h3>
                Be default PySpark shell provides &#8220;<code>spark</code>&#8221; object; which is an instance of SparkSession class. We can directly use this object where required in spark-shell. Start your &#8220;<code>pyspark</code>&#8221; shell from <code>$SPARK_HOME\bin</code> folder and enter the below statement.<br><br>
                <pre><blockquote class="language-python">
                    
import pyspark
from pyspark.sql import SparkSession

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()
sparkContext=spark.sparkContext

                </blockquote></pre><br>
                Now, use <code>sparkContext.parallelize()</code> to create rdd from a list or collection.<br><br>
                <pre><blockquote class="language-python">
                    
rdd=sparkContext.parallelize([1,2,3,4,5])
rddCollect = rdd.collect()
print(&quot;Number of Partitions: &quot;+str(rdd.getNumPartitions()))
print(&quot;Action: First element: &quot;+str(rdd.first()))
print(rddCollect)

                </blockquote></pre><br>
                By executing the above program you should see below output.<br>
                <pre><blockquote class="language-python">
                    
Number of Partitions: 4
Action: First element: 1
[1, 2, 3, 4, 5]

                </blockquote></pre><br>
                parallelize() function also has another signature which additionally takes integer argument to specifies the number of partitions. Partitions are basic units of parallelism in PySpark.<br><br>
                Remember, RDDs in PySpark are a collection of partitions.<br>

                <h3>create empty RDD by using <strong>sparkContext.parallelize</strong></h3>
                Some times we may need to create empty RDD and you can also use parallelize() in order to create it.<br>
                <pre><blockquote class="language-python">
                    
emptyRDD = sparkContext.emptyRDD()
emptyRDD2 = rdd=sparkContext.parallelize([])

print(&quot;is Empty RDD : &quot;+str(emptyRDD2.isEmpty()))

                </blockquote></pre>
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