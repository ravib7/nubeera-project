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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Spark Merge Two DataFrames with Different Columns or Schema</h2>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <!-- <content> --><br>
                        <div class="entry-content clr" itemprop="text">
<p>In Spark or PySpark let&#8217;s see how to merge/union two DataFrames with a different number of columns (different schema). In Spark 3.1, you can easily achieve this using unionByName() transformation by passing allowMissingColumns with the value true. In order version, this property is not available</p>
<pre><blockquote class="language-scala">
//Scala
merged_df = df1.unionByName(df2, true)

#PySpark
merged_df = df1.unionByName(df2, allowMissingColumns=True)
</blockquote></pre>
<p>The difference between <code>unionByName()</code> function and <code>union()</code> is that this function<br>resolves columns by name (not by position). In other words, unionByName() is used to merge two DataFrame&#8217;s by column names instead of by position. </p>
<p>In case if you are using older than Spark 3.1 version, use below approach to merge DataFrame&#8217;s with different column names.</p>
<ul><li><a href="#merge-dataframes-different-columns">Spark Merge DataFrames with Different Columns (Scala Example)</a></li><li><a href="#pyspark-merge-dataframes-different-columns">PySpark Merge DataFrames with Different Columns (Python Example)</a></li></ul>
<h2 id="merge-dataframes-different-columns">Spark Merge Two DataFrames with Different Columns</h2>
<p>In this section I will cover Spark with Scala example of how to merge two different DataFrames, first let&#8217;s create DataFrames with different number of columns. DataFrame <code>df1</code> missing column <code>state</code> and <code>salary</code> and <code>df2</code> missing column <code>age</code>.</p>
<pre><blockquote class="language-scala">
//Create DataFrame df1 with columns name,dept &amp; age
val data = Seq((&quot;James&quot;,&quot;Sales&quot;,34), (&quot;Michael&quot;,&quot;Sales&quot;,56),
               (&quot;Robert&quot;,&quot;Sales&quot;,30), (&quot;Maria&quot;,&quot;Finance&quot;,24) )
import spark.implicits._
val df1 = data.toDF(&quot;name&quot;,&quot;dept&quot;,&quot;age&quot;)
df1.printSchema()

//root
// |-- name: string (nullable = true)
// |-- dept: string (nullable = true)
// |-- age: long (nullable = true)
</blockquote></pre>
<p>Second DataFrame</p>
<pre><blockquote class="language-scala">
//Create DataFrame df1 with columns name,dep,state &amp; salary
val data2=Seq((&quot;James&quot;,&quot;Sales&quot;,&quot;NY&quot;,9000),(&quot;Maria&quot;,&quot;Finance&quot;,&quot;CA&quot;,9000),
              (&quot;Jen&quot;,&quot;Finance&quot;,&quot;NY&quot;,7900),(&quot;Jeff&quot;,&quot;Marketing&quot;,&quot;CA&quot;,8000))
val df2 = data2.toDF(&quot;name&quot;,&quot;dept&quot;,&quot;state&quot;,&quot;salary&quot;)
df2.printSchema()

//root
// |-- name: string (nullable = true)
// |-- dept: string (nullable = true)
// |-- state: string (nullable = true)
// |-- salary: long (nullable = true)
</blockquote></pre>
<p>Now create a new DataFrames from existing after adding missing columns. newly added columns contains <code>null</code> values and we add constant column using lit() function.</p>
<pre><blockquote class="language-scala">
val merged_cols = df1.columns.toSet ++ df2.columns.toSet
import org.apache.spark.sql.functions.{col,lit}
def getNewColumns(column: Set[String], merged_cols: Set[String]) = {
    merged_cols.toList.map(x =&gt; x match {
      case x if column.contains(x) =&gt; col(x)
      case _ =&gt; lit(null).as(x)
    })
}
val new_df1=df1.select(getNewColumns(df1.columns.toSet, merged_cols):_*)
val new_df2=df2.select(getNewColumns(df2.columns.toSet, merged_cols):_*)
</blockquote></pre>
<p>Finally merge two DataFrame&#8217;s by using column names</p>
<pre><blockquote class="language-scala">
//Finally join two dataframe&#039;s df1 &amp; df2 by name
val merged_df=new_df1.unionByName(new_df2)
merged_df.show()

//+-------+---------+----+-----+------+
//|   name|     dept| age|state|salary|
//+-------+---------+----+-----+------+
//|  James|    Sales|  34| null|  null|
//|Michael|    Sales|  56| null|  null|
//| Robert|    Sales|  30| null|  null|
//|  Maria|  Finance|  24| null|  null|
//|  James|    Sales|null|   NY|  9000|
//|  Maria|  Finance|null|   CA|  9000|
//|    Jen|  Finance|null|   NY|  7900|
//|   Jeff|Marketing|null|   CA|  8000|
//+-------+---------+----+-----+------+
</blockquote></pre>
<h2 id="pyspark-merge-dataframes-different-columns">PySpark Merge Two DataFrames with Different Columns</h2>
<p>In PySpark to merge two DataFrames with different columns, will use the similar approach explain above and uses <code>unionByName()</code> transformation. First let&#8217;s create DataFrame&#8217;s with different number of columns.</p>
<pre><blockquote class="language-python">
from pyspark.sql import SparkSession
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

#Create DataFrame df1 with columns name,dept &amp; age
data = [(&quot;James&quot;,&quot;Sales&quot;,34), (&quot;Michael&quot;,&quot;Sales&quot;,56), \
    (&quot;Robert&quot;,&quot;Sales&quot;,30), (&quot;Maria&quot;,&quot;Finance&quot;,24) ]
columns= [&quot;name&quot;,&quot;dept&quot;,&quot;age&quot;]
df1 = spark.createDataFrame(data = data, schema = columns)
df1.printSchema()

#Create DataFrame df1 with columns name,dep,state &amp; salary
data2=[(&quot;James&quot;,&quot;Sales&quot;,&quot;NY&quot;,9000),(&quot;Maria&quot;,&quot;Finance&quot;,&quot;CA&quot;,9000), \
    (&quot;Jen&quot;,&quot;Finance&quot;,&quot;NY&quot;,7900),(&quot;Jeff&quot;,&quot;Marketing&quot;,&quot;CA&quot;,8000)]
columns2= [&quot;name&quot;,&quot;dept&quot;,&quot;state&quot;,&quot;salary&quot;]
df2 = spark.createDataFrame(data = data2, schema = columns2)
df2.printSchema()
</blockquote></pre>
<p>Now add missing columns &#8216;<code>state</code>&#8216; and &#8216;<code>salary</code>&#8216; to <code>df1</code> and &#8216;<code>age</code>&#8216; to <code>df2</code> with null values.</p>
<pre><blockquote class="language-python">
#Add missing columns &#039;state&#039; &amp; &#039;salary&#039; to df1
from pyspark.sql.functions import lit
for column in [column for column in df2.columns if column not in df1.columns]:
    df1 = df1.withColumn(column, lit(None))

#Add missing column &#039;age&#039; to df2
for column in [column for column in df1.columns if column not in df2.columns]:
    df2 = df2.withColumn(column, lit(None))
</blockquote></pre>
<p>Now merge/union the DataFrames using <code>unionByName()</code>. The difference between <code>unionByName()</code> function and <code>union()</code> is that this function<br>resolves columns by name (not by position). In other words, unionByName() is used to merge two DataFrame&#8217;s by column names instead of by position.</p>
<pre><blockquote class="language-python">
#Finally join two dataframe&#039;s df1 &amp; df2 by name
merged_df=df1.unionByName(df2)
merged_df.show()
</blockquote></pre>
<h2>Conclusion</h2>
<p>In this article, you have learned with spark &amp; PySpark examples of how to merge two DataFrames with different columns can be done by adding missing columns to the DataFrame&#8217;s and finally union them using unionByName().</p>
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