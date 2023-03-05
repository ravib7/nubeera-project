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
        table,td,th,tr{
            border:1px solid black;
        }
        p{
            text-align: left;
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Pivot and Unpivot DataFrame</h2>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <!-- <content> --><br>
                        <div class="entry-content clr" itemprop="text">
<p>PySpark <code>pivot()</code> function is used to rotate/transpose the data from one column into multiple Dataframe columns and back using unpivot(). Pivot() It is an aggregation where one of the grouping columns values is transposed into individual columns with distinct data.</p>
<p>This tutorial describes and provides a PySpark example on how to create a Pivot table on DataFrame and Unpivot back. </p>
<ul><li><a href="#pivot-dataframe">Pivot PySpark DataFrame</a></li><li><a href="#pivot-performance">Pivot Performance improvement in PySpark 2.0</a></li><li><a href="#unpivot-dataframe">Unpivot PySpark DataFrame</a></li><li><a href="#withoutaggregation">Pivot or Transpose without aggregation</a></li></ul>
<p>Let&#8217;s create a PySpark DataFrame to work with.</p>
<pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.functions import expr
#Create spark session
data = [(&quot;Banana&quot;,1000,&quot;USA&quot;), (&quot;Carrots&quot;,1500,&quot;USA&quot;), (&quot;Beans&quot;,1600,&quot;USA&quot;), \
      (&quot;Orange&quot;,2000,&quot;USA&quot;),(&quot;Orange&quot;,2000,&quot;USA&quot;),(&quot;Banana&quot;,400,&quot;China&quot;), \
      (&quot;Carrots&quot;,1200,&quot;China&quot;),(&quot;Beans&quot;,1500,&quot;China&quot;),(&quot;Orange&quot;,4000,&quot;China&quot;), \
      (&quot;Banana&quot;,2000,&quot;Canada&quot;),(&quot;Carrots&quot;,2000,&quot;Canada&quot;),(&quot;Beans&quot;,2000,&quot;Mexico&quot;)]

columns= [&quot;Product&quot;,&quot;Amount&quot;,&quot;Country&quot;]
df = spark.createDataFrame(data = data, schema = columns)
df.printSchema()
df.show(truncate=False)
</blockquote></pre>
<p>DataFrame &#8216;df&#8217; consists of 3 columns <code>Product</code>, <code>Amount</code>, and <code>Country</code> as shown below. </p>
<pre><blockquote class="language-python">
root
 |-- Product: string (nullable = true)
 |-- Amount: long (nullable = true)
 |-- Country: string (nullable = true)

+-------+------+-------+
|Product|Amount|Country|
+-------+------+-------+
|Banana |1000  |USA    |
|Carrots|1500  |USA    |
|Beans  |1600  |USA    |
|Orange |2000  |USA    |
|Orange |2000  |USA    |
|Banana |400   |China  |
|Carrots|1200  |China  |
|Beans  |1500  |China  |
|Orange |4000  |China  |
|Banana |2000  |Canada |
|Carrots|2000  |Canada |
|Beans  |2000  |Mexico |
+-------+------+-------+
</blockquote></pre>
<h2 id="pivot-dataframe">Pivot PySpark DataFrame</h2>
<p>PySpark SQL provides <code>pivot()</code> function to rotate the data from one column into multiple columns. It is an aggregation where one of the grouping columns values is transposed into individual columns with distinct data. To get the total amount exported to each country of each product, will do group by <code>Product</code>, pivot by <code>Country</code>, and the sum of <code>Amount</code>.</p>
<pre><blockquote class="language-python">
pivotDF = df.groupBy(&quot;Product&quot;).pivot(&quot;Country&quot;).sum(&quot;Amount&quot;)
pivotDF.printSchema()
pivotDF.show(truncate=False)
</blockquote></pre>
<p>This will transpose the countries from DataFrame rows into columns and produces the below output. where ever data is not present, it represents as <code>null</code> by default.</p>
<pre><blockquote class="language-python">
root
 |-- Product: string (nullable = true)
 |-- Canada: long (nullable = true)
 |-- China: long (nullable = true)
 |-- Mexico: long (nullable = true)
 |-- USA: long (nullable = true)

+-------+------+-----+------+----+
|Product|Canada|China|Mexico|USA |
+-------+------+-----+------+----+
|Orange |null  |4000 |null  |4000|
|Beans  |null  |1500 |2000  |1600|
|Banana |2000  |400  |null  |1000|
|Carrots|2000  |1200 |null  |1500|
+-------+------+-----+------+----+
</blockquote></pre>
<h2 id="pivot-performance">Pivot Performance improvement in PySpark 2.0 </h2>
<p>version 2.0 on-wards performance has been improved on Pivot, however, if you are using the lower version; note that pivot is a very expensive operation hence, it is recommended to provide column data (if known) as an argument to function as shown below.</p>
<pre><blockquote class="language-python">
countries = [&quot;USA&quot;,&quot;China&quot;,&quot;Canada&quot;,&quot;Mexico&quot;]
pivotDF = df.groupBy(&quot;Product&quot;).pivot(&quot;Country&quot;, countries).sum(&quot;Amount&quot;)
pivotDF.show(truncate=False)
</blockquote></pre>
<p>Another approach is to do two-phase aggregation. PySpark 2.0 uses this implementation in order to improve the performance <a href="https://issues.apache.org/jira/browse/SPARK-13749">Spark-13749</a></p>
<pre><blockquote class="language-python">
pivotDF = df.groupBy(&quot;Product&quot;,&quot;Country&quot;) \
      .sum(&quot;Amount&quot;) \
      .groupBy(&quot;Product&quot;) \
      .pivot(&quot;Country&quot;) \
      .sum(&quot;sum(Amount)&quot;) \
pivotDF.show(truncate=False)
</blockquote></pre>
<p>The above two examples return the same output but with better performance.</p>
<h2 id="unpivot-dataframe">Unpivot PySpark DataFrame</h2>
<p>Unpivot is a reverse operation, we can achieve by rotating column values into rows values. PySpark SQL doesn’t have unpivot function hence will use the <code>stack()</code> function. Below code converts column countries to row.</p>
<pre><blockquote class="language-python">
from pyspark.sql.functions import expr
unpivotExpr = &quot;stack(3, &#039;Canada&#039;, Canada, &#039;China&#039;, China, &#039;Mexico&#039;, Mexico) as (Country,Total)&quot;
unPivotDF = pivotDF.select(&quot;Product&quot;, expr(unpivotExpr)) \
    .where(&quot;Total is not null&quot;)
unPivotDF.show(truncate=False)
unPivotDF.show()</blockquote></pre>
<p>It converts pivoted column “country” to rows.</p>
<pre><blockquote class="language-python">
+-------+-------+-----+
|Product|Country|Total|
+-------+-------+-----+
| Orange|  China| 4000|
|  Beans|  China| 1500|
|  Beans| Mexico| 2000|
| Banana| Canada| 2000|
| Banana|  China|  400|
|Carrots| Canada| 2000|
|Carrots|  China| 1200|
+-------+-------+-----+
</blockquote></pre>
<h2 id="withoutaggregation">Transpose or Pivot without aggregation</h2>
<div class="schema-faq wp-block-yoast-faq-block"><div class="schema-faq-section" id="faq-question-1567549354775"><strong class="schema-faq-question">Can we do PySpark DataFrame transpose or pivot without aggregation?</strong> <p class="schema-faq-answer">Off course you can, but unfortunately, you can&#8217;t achieve using the Pivot function. However, pivoting or transposing the DataFrame structure without aggregation from rows to columns and columns to rows can be easily done using PySpark and Scala hack. please refer to <a href="https://stackoverflow.com/questions/49392683/transpose-dataframe-without-aggregation-in-spark-with-scala">this</a> example.</p> </div> </div>
<h2>Complete Example</h2>
<p>The complete code can be downloaded from <a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-pivot.py">GitHub</a></p>
<pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.functions import expr
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

data = [(&quot;Banana&quot;,1000,&quot;USA&quot;), (&quot;Carrots&quot;,1500,&quot;USA&quot;), (&quot;Beans&quot;,1600,&quot;USA&quot;), \
      (&quot;Orange&quot;,2000,&quot;USA&quot;),(&quot;Orange&quot;,2000,&quot;USA&quot;),(&quot;Banana&quot;,400,&quot;China&quot;), \
      (&quot;Carrots&quot;,1200,&quot;China&quot;),(&quot;Beans&quot;,1500,&quot;China&quot;),(&quot;Orange&quot;,4000,&quot;China&quot;), \
      (&quot;Banana&quot;,2000,&quot;Canada&quot;),(&quot;Carrots&quot;,2000,&quot;Canada&quot;),(&quot;Beans&quot;,2000,&quot;Mexico&quot;)]

columns= [&quot;Product&quot;,&quot;Amount&quot;,&quot;Country&quot;]
df = spark.createDataFrame(data = data, schema = columns)
df.printSchema()
df.show(truncate=False)

pivotDF = df.groupBy(&quot;Product&quot;).pivot(&quot;Country&quot;).sum(&quot;Amount&quot;)
pivotDF.printSchema()
pivotDF.show(truncate=False)

pivotDF = df.groupBy(&quot;Product&quot;,&quot;Country&quot;) \
      .sum(&quot;Amount&quot;) \
      .groupBy(&quot;Product&quot;) \
      .pivot(&quot;Country&quot;) \
      .sum(&quot;sum(Amount)&quot;)
pivotDF.printSchema()
pivotDF.show(truncate=False)

&quot;&quot;&quot; unpivot &quot;&quot;&quot;
unpivotExpr = &quot;stack(3, &#039;Canada&#039;, Canada, &#039;China&#039;, China, &#039;Mexico&#039;, Mexico) as (Country,Total)&quot;
unPivotDF = pivotDF.select(&quot;Product&quot;, expr(unpivotExpr)) \
    .where(&quot;Total is not null&quot;)
unPivotDF.show(truncate=False)
</blockquote></pre>
<h4>Conclusion:</h4>
<p>We have seen how to Pivot DataFrame with PySpark example and Unpivot it back using SQL functions. And also have seen how PySpark 2.0 changes have improved performance by doing two-phase aggregation. </p>
<p>Happy Learning !!</p>


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