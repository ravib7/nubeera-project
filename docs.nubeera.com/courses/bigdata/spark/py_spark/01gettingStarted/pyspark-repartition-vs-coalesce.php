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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Repartition() vs Coalesce()</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                <li class="breadcrumb-item active">PySpark</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                Let&#8217;s see the difference between PySpark repartition() vs coalesce(), repartition() is used to increase or decrease the RDD/DataFrame partitions whereas the PySpark coalesce() is used to only decrease the number of partitions in an efficient way.<br><br>
                In this article, you will learn what is PySpark repartition() and coalesce() methods? and the difference between repartition vs coalesce with PySpark examples.<br><br>
                <ul>
                    <li><a href="#rdd-partition">RDD Partition</a>
                        <ul>
                            <li><a href="#rdd-repartition">RDD repartition</a></li>
                            <li><a href="#rdd-coalesce">RDD coalesce</a></li>
                        </ul>
                    </li>
                    <li><a href="#dataFrame-partition">DataFrame Partition</a>
                        <ul>
                            <li><a href="#dataFrame-repartition">DataFrame repartition</a></li>
                            <li><a href="#dataFrame- coalesce">DataFrame coalesce</a></li>
                        </ul>
                    </li>
                </ul>
                One important point to note is, PySpark <code>repartition()</code> and<code> coalesce()</code> are <strong>very expensive operations</strong> as they <strong>shuffle the data across many partitions</strong> hence try to minimize using these as much as possible.<br>
                <h3 id="rdd-partition">1. PySpark RDD Repartition() vs Coalesce()</h3>
                In RDD, you can create parallelism at the time of the creation of an RDD using parallelize(), textFile() and wholeTextFiles().<br>
                <pre><blockquote class="language-python">
                    
rdd = spark.sparkContext.parallelize((0,20))
print(&quot;From local[5]&quot;+str(rdd.getNumPartitions()))

rdd1 = spark.sparkContext.parallelize((0,25), 6)
print(&quot;parallelize : &quot;+str(rdd1.getNumPartitions()))

rddFromFile = spark.sparkContext.textFile(&quot;src/main/resources/test.txt&quot;,10)
print(&quot;TextFile : &quot;+str(rddFromFile.getNumPartitions()))

                </blockquote></pre>
                The above example yields below output.<br>
                <pre><blockquote class="language-python">
                    
From local[5] : 5
Parallelize : 6
TextFile : 10

                </blockquote></pre>
                <code>spark.sparkContext.parallelize(Range(0,20),6)</code> distributes RDD into 6 partitions and the data is distributed as below.<br>
                <pre><blockquote class="language-python">
                    
rdd1.saveAsTextFile(&quot;/tmp/partition&quot;)
//Writes 6 part files, one for each partition
Partition 1 : 0 1 2
Partition 2 : 3 4 5
Partition 3 : 6 7 8 9
Partition 4 : 10 11 12
Partition 5 : 13 14 15
Partition 6 : 16 17 18 19

                </blockquote></pre>
                <h3 id="rdd-repartition">1.1 RDD repartition()</h3>
                Spark RDD repartition() method is used to increase or decrease the partitions. The below example decreases the partitions from 10 to 4 by moving data from all partitions.<br>
                <pre><blockquote class="language-python">
                    
rdd2 = rdd1.repartition(4)
print(&quot;Repartition size : &quot;+str(rdd2.getNumPartitions()))
rdd2.saveAsTextFile(&quot;/tmp/re-partition&quot;)

                </blockquote></pre>
                This yields output <code>Repartition size : 4</code> and the repartition re-distributes the data(as shown below) from all partitions which is full shuffle leading to very expensive operation when dealing with billions and trillions of data. <br>
                <pre><blockquote class="language-python">
                    
Partition 1 : 1 6 10 15 19
Partition 2 : 2 3 7 11 16
Partition 3 : 4 8 12 13 17
Partition 4 : 0 5 9 14 18

                </blockquote></pre>
                <p></p>
                <h3 id="rdd-coalesce">1.2 RDD coalesce()</h3>
                Spark RDD&nbsp;<code>coalesce()</code>&nbsp;is used only to reduce the number of partitions. This is optimized or improved version of <code>repartition()</code> where the movement of the data across the partitions is lower using coalesce.<br>
                <pre><blockquote class="language-python">
                    
rdd3 = rdd1.coalesce(4)
print(&quot;Repartition size : &quot;+str(rdd3.getNumPartitions()))
rdd3.saveAsTextFile(&quot;/tmp/coalesce&quot;)

                </blockquote></pre>
                If you compared the below output with section 1, you will notice partition 3 has been moved to 2 and Partition 6 has moved to 5, resulting data movement from just 2 partitions.<br>
                <pre><blockquote class="language-python">
                    
Partition 1 : 0 1 2
Partition 2 : 3 4 5 6 7 8 9
Partition 4 : 10 11 12 
Partition 5 : 13 14 15 16 17 18 19

                </blockquote></pre>
                <h3>1.3 Complete Example of PySpark RDD repartition and coalesce</h3>
                Below is a complete example of PySpark RDD repartition and coalesce in Scala language.<br>
                <pre><blockquote class="language-python">
                    
import pyspark
from pyspark.sql import SparkSession
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;) \
        .master(&quot;local[5]&quot;).getOrCreate()

df = spark.range(0,20)
print(df.rdd.getNumPartitions())

spark.conf.set(&quot;spark.sql.shuffle.partitions&quot;, &quot;500&quot;)

rdd = spark.sparkContext.parallelize((0,20))
print(&quot;From local[5]&quot;+str(rdd.getNumPartitions()))

rdd1 = spark.sparkContext.parallelize((0,25), 6)
print(&quot;parallelize : &quot;+str(rdd1.getNumPartitions()))

&quot;&quot;&quot;rddFromFile = spark.sparkContext.textFile(&quot;src/main/resources/test.txt&quot;,10)
print(&quot;TextFile : &quot;+str(rddFromFile.getNumPartitions())) &quot;&quot;&quot;

rdd1.saveAsTextFile(&quot;c://tmp/partition2&quot;)

rdd2 = rdd1.repartition(4)
print(&quot;Repartition size : &quot;+str(rdd2.getNumPartitions()))
rdd2.saveAsTextFile(&quot;c://tmp/re-partition2&quot;)

rdd3 = rdd1.coalesce(4)
print(&quot;Repartition size : &quot;+str(rdd3.getNumPartitions()))
rdd3.saveAsTextFile(&quot;c:/tmp/coalesce2&quot;)

                </blockquote></pre>
                <h3 id="dataFrame-partition">2. PySpark DataFrame repartition() vs coalesce()</h3>
                Like RDD, you can&#8217;t specify the partition/parallelism while creating DataFrame. DataFrame by default internally uses the methods specified in Section 1 to determine the default partition and splits the data for parallelism.<br>
                If you are not familiar with DataFrame, I will recommend to learn the DataFrame before proceeding further on this article.<br>
                <pre><blockquote class="language-python">
                    
import pyspark
from pyspark.sql import SparkSession
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;) \
        .master(&quot;local[5]&quot;).getOrCreate()

df=spark.range(0,20)
print(df.rdd.getNumPartitions())

df.write.mode(&quot;overwrite&quot;).csv(&quot;c:/tmp/partition.csv&quot;)

                </blockquote></pre>
                The above example creates 5 partitions as specified in <code>master(&quot;local[5]&quot;)</code> and the data is distributed across all these 5 partitions.<br>
                <pre><blockquote class="language-python">
                    
Partition 1 : 0 1 2 3
Partition 2 : 4 5 6 7
Partition 3 : 8 9 10 11
Partition 4 : 12 13 14 15
Partition 5 : 16 17 18 19

                </blockquote></pre>
                <h3 id="dataFrame-repartition">2.1 DataFrame repartition()</h3>
                Similar to RDD, the PySpark DataFrame <code>repartition()</code> method is used to increase or decrease the partitions. The below example increases the partitions from 5 to 6 by moving data from all partitions.<br>
                <pre><blockquote class="language-python">
                    
df2 = df.repartition(6)
print(df2.rdd.getNumPartitions())

                </blockquote></pre>
                Just increasing 1 partition results data movements from all partitions.<br>
                <pre><blockquote class="language-python">
                    
Partition 1 : 14 1 5
Partition 2 : 4 16 15
Partition 3 : 8 3 18
Partition 4 : 12 2 19
Partition 5 : 6 17 7 0
Partition 6 : 9 10 11 13

                </blockquote></pre>
                And, even decreasing the partitions also results in moving data from all partitions. hence when you wanted to decrease the partition recommendation is to use coalesce()/<br>
                <h3 id="dataFrame-coalesce">2.2 DataFrame coalesce()</h3>
                Spark DataFrame <code>coalesce()</code>&nbsp;is used only to decrease the number of partitions. This is an optimized or improved version of repartition() where the movement of the data across the partitions is fewer using coalesce.<br>
                <pre><blockquote class="language-python">
                    
df3 = df.coalesce(2)
print(df3.rdd.getNumPartitions())

                </blockquote></pre>
                This yields output 2 and the resultant partition looks like<br>
                <pre><blockquote class="language-python">
                    
Partition 1 : 0 1 2 3 8 9 10 11
Partition 2 : 4 5 6 7 12 13 14 15 16 17 18 19

                </blockquote></pre>
                Since we are reducing 5 to 2 partitions, the data movement happens only from 3 partitions and it moves to remain 2 partitions.<br>
                <h3>3. Default Shuffle Partition</h3>
                Calling groupBy(), union(), join() and similar functions on DataFrame results in shuffling data between multiple executors and even machines and finally repartitions data into <strong>200</strong> partitions by default. PySpark default defines shuffling partition to 200 using <code>spark.sql.shuffle.partitions</code> configuration.<br>
                <pre><blockquote class="language-python">
                    
df4 = df.groupBy(&quot;id&quot;).count()
print(df4.rdd.getNumPartitions())

                </blockquote></pre>
                Post shuffle operations, you can change the partitions either using coalesce() or repartition().<br>
                <h4>Conclusion</h4>
                In this PySpark repartition() vs coalesce() article, you have learned how to create an RDD with partition, repartition the RDD using coalesce(), repartition DataFrame using repartition() and coalesce() methods and leaned the difference between repartition and coalesce.<br>



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