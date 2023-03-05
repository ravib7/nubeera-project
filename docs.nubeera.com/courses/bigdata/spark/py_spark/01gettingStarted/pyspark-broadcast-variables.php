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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Broadcast Variables</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                <li class="breadcrumb-item active">PySpark</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                In PySpark RDD and DataFrame, Broadcast variables are read-only shared variables that are cached and available on all nodes in a cluster in-order to access or use by the tasks. Instead of sending this data along with every task, PySpark distributes broadcast variables to the workers using efficient broadcast algorithms to reduce communication costs.<br>
                <h3>Use case </h3>
                Let me explain with an example when to use broadcast variables, assume you are getting a two-letter country state code in a file and you wanted to transform it to full state name, (for example CA to California, NY to New York e.t.c) by doing a lookup to reference mapping. In some instances, this data could be large and you may have many such lookups (like zip code e.t.c). <br>
                Instead of distributing this information along with each task over the network (overhead and time consuming), we can use the broadcast variable to cache this lookup info on each machine and tasks use this cached info while executing the transformations. <br>
                <h3>How does PySpark Broadcast work?</h3>
                Broadcast variables are used in the same way for RDD, DataFrame.<br>
                When you run a PySpark RDD, DataFrame applications that have the Broadcast variables defined and used, PySpark does the following.</p>
                <ul>
                    <li>PySpark breaks the job into stages that have distributed shuffling and actions are executed with in the stage.</li>
                    <li>Later Stages are also broken into tasks</li>
                    <li>Spark broadcasts the common data (reusable) needed by tasks within each stage.</li>
                    <li>The broadcasted data is cache in serialized format and deserialized before executing each task.</li>
                </ul>
                You should be creating and using broadcast variables for data that shared across multiple stages and tasks. <br>
                Note that broadcast variables are not sent to executors with <code>sc.broadcast(variable)</code> call instead, they will be sent to executors when they are first used.<br>
                <h3>How to create Broadcast variable</h3>
                The PySpark Broadcast is created using the <code>broadcast(v)</code> method of the SparkContext class. This method takes the argument v that you want to broadcast.<br>
                <h3>In PySpark shell</h3>
                <p></p>
                <pre><blockquote class="language-python">
                    
broadcastVar = sc.broadcast(Array(0, 1, 2, 3))
broadcastVar.value

                </blockquote></pre>
                <h3>PySpark RDD Broadcast variable example</h3>
                Below is a very simple example of how to use broadcast variables on RDD. This example defines commonly used data (states) in a Map variable and distributes the variable using <code>SparkContext.broadcast()</code> and then use these variables on RDD map() transformation.<br>
                <pre><blockquote class="language-python">
                    
import pyspark
from pyspark.sql import SparkSession

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

states = {&quot;NY&quot;:&quot;New York&quot;, &quot;CA&quot;:&quot;California&quot;, &quot;FL&quot;:&quot;Florida&quot;}
broadcastStates = spark.sparkContext.broadcast(states)

data = [(&quot;James&quot;,&quot;Smith&quot;,&quot;USA&quot;,&quot;CA&quot;),
    (&quot;Michael&quot;,&quot;Rose&quot;,&quot;USA&quot;,&quot;NY&quot;),
    (&quot;Robert&quot;,&quot;Williams&quot;,&quot;USA&quot;,&quot;CA&quot;),
    (&quot;Maria&quot;,&quot;Jones&quot;,&quot;USA&quot;,&quot;FL&quot;)
  ]

rdd = spark.sparkContext.parallelize(data)

def state_convert(code):
    return broadcastStates.value[code]

result = rdd.map(lambda x: (x[0],x[1],x[2],state_convert(x[3]))).collect()
print(result)

                </blockquote></pre>
                Yields below output<br>
                <img src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/create-broadcast-variable-1.jpg?w=1036&ssl=1"><br>
                <h3>PySpark DataFrame Broadcast variable example</h3>
                Below is an example of how to use broadcast variables on DataFrame, similar to above RDD example, This also uses commonly used data (states) in a Map variable and distributes the variable using <code>SparkContext.broadcast()</code> and then use these variables on DataFrame map() transformation.<br>
                If you are not familiar with DataFrame, I will recommend to learn the DataFrame before proceeding further on this article.<br>
                <pre><blockquote class="language-python">
                    
import pyspark
from pyspark.sql import SparkSession

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

states = {&quot;NY&quot;:&quot;New York&quot;, &quot;CA&quot;:&quot;California&quot;, &quot;FL&quot;:&quot;Florida&quot;}
broadcastStates = spark.sparkContext.broadcast(states)

data = [(&quot;James&quot;,&quot;Smith&quot;,&quot;USA&quot;,&quot;CA&quot;),
    (&quot;Michael&quot;,&quot;Rose&quot;,&quot;USA&quot;,&quot;NY&quot;),
    (&quot;Robert&quot;,&quot;Williams&quot;,&quot;USA&quot;,&quot;CA&quot;),
    (&quot;Maria&quot;,&quot;Jones&quot;,&quot;USA&quot;,&quot;FL&quot;)
  ]

columns = [&quot;firstname&quot;,&quot;lastname&quot;,&quot;country&quot;,&quot;state&quot;]
df = spark.createDataFrame(data = data, schema = columns)
df.printSchema()
df.show(truncate=False)

def state_convert(code):
    return broadcastStates.value[code]

result = df.rdd.map(lambda x: (x[0],x[1],x[2],state_convert(x[3]))).toDF(columns)
result.show(truncate=False)

                </blockquote></pre>
                Above example first creates a DataFrame, transform the data using broadcast variable and yields below output.<br>
                <img src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/04/spark-dataframe-broadcast-variable.jpg?w=519&ssl=1"><br>
                You can also use the broadcast variable on the filter and joins. Below is a filter example.<br>
                <pre><blockquote class="language-python">
                    
# Broadcast variable on filter
filteDf= df.where((df[&#039;state&#039;].isin(broadcastStates.value)))

                </blockquote></pre>
                <h3>Conclusion</h3>
                In this PySpark Broadcast variable article, you have learned what is Broadcast variable, it&#8217;s advantage and how to use in RDD and Dataframe with Pyspark example.<br>


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