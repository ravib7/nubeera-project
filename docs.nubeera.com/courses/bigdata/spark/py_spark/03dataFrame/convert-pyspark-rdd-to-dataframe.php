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

    <link id="theme-style" rel="stylesheet" href="../../../../../assets/css/theme.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../boto_topics.css">
    <style>
        table,
        td,
        th,
        tr {
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">PySpark DataFrame</strong><br><br>
                <ul>
                    <li><a href="index.php">PySpark – Create a DataFrame</a></li>
                    <li><a href="pyspark-create-an-empty-dataframe.php">PySpark – Create an empty DataFrame</a></li>
                    <li><a href="convert-pyspark-rdd-to-dataframe.php">PySpark – Convert RDD to DataFrame</a></li>
                    <li><a href="convert-pyspark-dataframe-to-pandas.php">PySpark – Convert DataFrame to Pandas</a></li>
                    <li><a href="pyspark-show-display-dataframe-contents-in-table.php">PySpark – show()</a></li>
                    <li><a href="pyspark-structtype-and-structfield.php">PySpark – StructType & StructField</a></li>
                    <li><a href="pyspark-row-using-rdd-dataframe.php">PySpark – Row Class</a></li>
                    <li><a href="pyspark-column-functions.php">PySpark – Column Class</a></li>
                    <li><a href="select-columns-from-pyspark-dataframe.php">PySpark – select()</a></li>
                    <li><a href="pyspark-collect.php">PySpark – collect()</a></li>
                    <li><a href="pyspark-withcolumn.php">PySpark – withColumn()</a></li>
                    <li><a href="pyspark-rename-dataframe-column.php">PySpark – withColumnRenamed()</a></li>
                    <li><a href="pyspark-where-filter.php">PySpark – where() & filter()</a></li>
                    <li><a href="pyspark-distinct-to-drop-duplicates.php">PySpark – drop() & dropDuplicates()</a></li>
                    <li><a href="pyspark-orderby-and-sort-explained.php">PySpark – orderBy() and sort()</a></li>
                    <li><a href="pyspark-groupby-explained-with-example.php">PySpark – groupBy()</a></li>
                    <li><a href="pyspark-join-explained-with-examples.php">PySpark – join()</a></li>
                    <li><a href="pyspark-union-and-unionall.php">PySpark – union() & unionAll()</a></li>
                    <li><a href="spark-merge-two-dataframes-with-different-columns.php">PySpark – unionByName()</a></li>
                    <li><a href="pyspark-udf-user-defined-function.php">PySpark – UDF (User Defined Function)</a></li>
                    <li><a href="pyspark-map-transformation.php">PySpark – map()</a></li>
                    <li><a href="pyspark-flatmap-transformation.php">PySpark – flatMap()</a></li>
                    <li><a href="pyspark-loop-iterate-through-rows-in-dataframe.php">pyspark – foreach()</a></li>
                    <li><a href="pyspark-sampling-example.php">PySpark – sample() vs sampleBy()</a></li>
                    <li><a href="pyspark-fillna-fill-replace-null-values.php">PySpark – fillna() & fill()</a></li>
                    <li><a href="pyspark-pivot-and-unpivot-dataframe.php">PySpark – pivot() (Row to Column)</a></li>
                    <li><a href="pyspark-partitionby-example.php">PySpark – partitionBy()</a></li>
                    <li><a href="pyspark-arraytype-column-with-examples.php">PySpark – ArrayType Column (Array)</a></li>
                    <li><a href="pyspark-maptype-dict-examples.php">PySpark – MapType (Map/Dict)</a></li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark – Create an Empty DataFrame & RDD</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> --><br>
                    <div class="entry-content clr" itemprop="text">
                        In PySpark, <code>toDF()</code> function of the RDD is used to convert RDD to DataFrame. We would need to convert RDD to DataFrame as DataFrame provides more advantages over RDD. For instance, DataFrame is a distributed collection of data organized into named columns similar to Database tables and provides optimization and performance improvements.<br>
                        <ul>
                            <li><a href="#spark-rdd">Create PySpark RDD</a></li>
                            <li><a href="#spark-rdd-dataframe">Convert PySpark RDD to DataFrame</a>
                                <ul>
                                    <li><a href="#rdd-todf">using toDF()</a></li>
                                    <li><a href="#rdd-createDataFrame">using createDataFrame()</a></li>
                                    <li><a href="#rdd-row-schema">using RDD row type &amp; schema</a></li>
                                </ul>
                            </li>
                        </ul>
                        <h2 id="spark-rdd">1. Create PySpark RDD</h2>
                        First, let&#8217;s create an RDD by passing Python list object to <code>sparkContext.parallelize()</code> function. We would need this <code>rdd</code> object for all our examples below. <br>
                        In PySpark, when you have data in a list meaning you have a collection of data in a PySpark driver memory when you create an RDD, this collection is going to be&nbsp; parallelized.<br>
                        <pre><blockquote class="language-python">
from pyspark.sql import SparkSession
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()
dept = [(&quot;Finance&quot;,10),(&quot;Marketing&quot;,20),(&quot;Sales&quot;,30),(&quot;IT&quot;,40)]
rdd = spark.sparkContext.parallelize(dept)
</blockquote></pre>
                        <h2 id="spark-rdd-dataframe">2. Convert PySpark RDD to DataFrame </h2>
                        Converting PySpark RDD to DataFrame can be done using toDF(), createDataFrame(). In this section, I will explain these two methods.<br>
                        <h3 id="rdd-todf">2.1 Using rdd.toDF() function</h3>
                        PySpark provides toDF() function in RDD which can be used to convert RDD into Dataframe<br>
                        <pre><blockquote class="language-python">
df = rdd.toDF()
df.printSchema()
df.show(truncate=False)
</blockquote></pre>
                        By default, <code>toDF()</code> function creates column names as &#8220;_1&#8221; and &#8220;_2&#8221;. This snippet yields below schema.<br>
                        <pre><blockquote class="language-python">
root
 |-- _1: string (nullable = true)
 |-- _2: long (nullable = true)

+---------+---+
|_1       |_2 |
+---------+---+
|Finance  |10 |
|Marketing|20 |
|Sales    |30 |
|IT       |40 |
+---------+---+

</blockquote></pre>
                        <code>toDF() </code>has another signature that takes arguments to define column names as shown below. <br>
                        <pre><blockquote class="language-python">
deptColumns = [&quot;dept_name&quot;,&quot;dept_id&quot;]
df2 = rdd.toDF(deptColumns)
df2.printSchema()
df2.show(truncate=False)
</blockquote></pre>
                        Outputs below schema.<br>
                        <pre><blockquote class="language-python">
root
 |-- dept_name: string (nullable = true)
 |-- dept_id: long (nullable = true)

+---------+-------+
|dept_name|dept_id|
+---------+-------+
|Finance  |10     |
|Marketing|20     |
|Sales    |30     |
|IT       |40     |
+---------+-------+
</blockquote></pre>
                        <h3 id="rdd-createDataFrame">2.2 Using PySpark createDataFrame() function</h3>
                        <code>SparkSession </code>class provides <code>createDataFrame()</code> method to create DataFrame and it takes rdd object as an argument.<br>
                        <pre><blockquote class="language-python">
deptDF = spark.createDataFrame(rdd, schema = deptColumns)
deptDF.printSchema()
deptDF.show(truncate=False)
</blockquote></pre>
                        This yields the same output as above.<br>
                        <h2>2.3 Using createDataFrame() with StructType schema</h2>
                        When you infer the schema, by default the datatype of the columns is derived from the data and set&#8217;s nullable to true for all columns. We can change this behavior by supplying schema using StructType &#8211; where we can specify a column name, data type and nullable for each field/column.<br>
                        <pre><blockquote class="language-python">
from pyspark.sql.types import StructType,StructField, StringType
deptSchema = StructType([       
    StructField(&#039;dept_name&#039;, StringType(), True),
    StructField(&#039;dept_id&#039;, StringType(), True)
])

deptDF1 = spark.createDataFrame(rdd, schema = deptSchema)
deptDF1.printSchema()
deptDF1.show(truncate=False)
</blockquote></pre>
                        This also yields the same output.<br>
                        <h2>3. Complete Example</h2>
                        <pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

dept = [(&quot;Finance&quot;,10),(&quot;Marketing&quot;,20),(&quot;Sales&quot;,30),(&quot;IT&quot;,40)]
rdd = spark.sparkContext.parallelize(dept)

df = rdd.toDF()
df.printSchema()
df.show(truncate=False)

deptColumns = [&quot;dept_name&quot;,&quot;dept_id&quot;]
df2 = rdd.toDF(deptColumns)
df2.printSchema()
df2.show(truncate=False)

deptDF = spark.createDataFrame(rdd, schema = deptColumns)
deptDF.printSchema()
deptDF.show(truncate=False)

from pyspark.sql.types import StructType,StructField, StringType
deptSchema = StructType([       
    StructField(&#039;dept_name&#039;, StringType(), True),
    StructField(&#039;dept_id&#039;, StringType(), True)
])

deptDF1 = spark.createDataFrame(rdd, schema = deptSchema)
deptDF1.printSchema()
deptDF1.show(truncate=False)
</blockquote></pre>
                        The complete code can be downloaded from&nbsp;<a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-rdd-to-dataframe.py" target="_blank" rel="noreferrer noopener">GitHub</a><br>
                        <h2>4. Conclusion:</h2>
                        In this article, you have learned how to convert PySpark RDD to DataFrame, we would need these frequently while working in PySpark as these provides optimization and performance over RDD.<br>
                        Happy Learning !!<br>


                    </div>
                </div>

        </div>
                <?php require "../../../../../templates/footer_outer.php" ?>

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