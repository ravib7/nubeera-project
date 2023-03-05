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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Select Columns From DataFrame</h2>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <!-- <content> --><br>
                        <div class="entry-content clr" itemprop="text">
In PySpark, <code>select()</code> function is used to select single, multiple, column by index, all columns from the list and the nested columns from a DataFrame, PySpark select() is a transformation function hence it returns a new DataFrame with the selected columns. <br>
<ul><li><a href="#select-multiple-columns">Select a Single &amp; Multiple Columns from PySpark</a></li><li><a href="#select-all-columns-from-list">Select All Columns From List</a></li><li><a href="#select-columns-by-index">Select Columns By Index</a></li><li><a href="#select-nested-column">Select a Nested Column</a></li><li><a href="#ways-to-select">Other Ways to Select Columns</a></li></ul>
First, let&#8217;s create a Dataframe.<br>
<pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()
data = [(&quot;James&quot;,&quot;Smith&quot;,&quot;USA&quot;,&quot;CA&quot;),
    (&quot;Michael&quot;,&quot;Rose&quot;,&quot;USA&quot;,&quot;NY&quot;),
    (&quot;Robert&quot;,&quot;Williams&quot;,&quot;USA&quot;,&quot;CA&quot;),
    (&quot;Maria&quot;,&quot;Jones&quot;,&quot;USA&quot;,&quot;FL&quot;)
  ]
columns = [&quot;firstname&quot;,&quot;lastname&quot;,&quot;country&quot;,&quot;state&quot;]
df = spark.createDataFrame(data = data, schema = columns)
df.show(truncate=False)
</blockquote></pre>
<h2 id="select-multiple-columns">1. Select Single &amp; Multiple Columns From PySpark</h2>
You can select the single or multiple columns of the DataFrame by passing the column names you wanted to select to the <code>select()</code> function. Since DataFrame is immutable, this creates a new DataFrame with selected columns. show() function is used to show the Dataframe contents.<br>
Below are ways to select single, multiple or all columns. <br>
<pre><blockquote class="language-python">
df.select(&quot;firstname&quot;,&quot;lastname&quot;).show()
df.select(df.firstname,df.lastname).show()
df.select(df[&quot;firstname&quot;],df[&quot;lastname&quot;]).show()

#By using col() function
from pyspark.sql.functions import col
df.select(col(&quot;firstname&quot;),col(&quot;lastname&quot;)).show()

#Select columns by regular expression
df.select(df.colRegex(&quot;`^.*name*`&quot;)).show()
</blockquote></pre>
<h2 id="select-all-columns-from-list">2. Select All Columns From List</h2>
Sometimes you may need to select all DataFrame columns from a Python list. In the below example, we have all columns in the <code>columns</code> list object.<br>
<pre><blockquote class="language-python">
# Select All columns from List
df.select(*columns).show()

# Select All columns
df.select([col for col in df.columns]).show()
df.select(&quot;*&quot;).show()
</blockquote></pre>
<h2 id="select-columns-by-index">3. Select Columns by Index</h2>
Using a python list features, you can select the columns by index.<br>
<pre><blockquote class="language-python">
#Selects first 3 columns and top 3 rows
df.select(df.columns[:3]).show(3)

#Selects columns 2 to 4  and top 3 rows
df.select(df.columns[2:4]).show(3)
</blockquote></pre>
<h2 id="select-nested-column">4. Select Nested Struct Columns from PySpark</h2>
If you have a nested struct (StructType) column on PySpark DataFrame, you need to use an explicit column qualifier in order to select. If you are new to PySpark and you have not learned StructType yet, I would recommend skipping the rest of the section or first Understand PySpark StructType before you proceed.<br>
First, let&#8217;s create a new DataFrame with a struct type.<br>
<pre><blockquote class="language-python">
data = [
        ((&quot;James&quot;,None,&quot;Smith&quot;),&quot;OH&quot;,&quot;M&quot;),
        ((&quot;Anna&quot;,&quot;Rose&quot;,&quot;&quot;),&quot;NY&quot;,&quot;F&quot;),
        ((&quot;Julia&quot;,&quot;&quot;,&quot;Williams&quot;),&quot;OH&quot;,&quot;F&quot;),
        ((&quot;Maria&quot;,&quot;Anne&quot;,&quot;Jones&quot;),&quot;NY&quot;,&quot;M&quot;),
        ((&quot;Jen&quot;,&quot;Mary&quot;,&quot;Brown&quot;),&quot;NY&quot;,&quot;M&quot;),
        ((&quot;Mike&quot;,&quot;Mary&quot;,&quot;Williams&quot;),&quot;OH&quot;,&quot;M&quot;)
        ]

from pyspark.sql.types import StructType,StructField, StringType        
schema = StructType([
    StructField(&#039;name&#039;, StructType([
         StructField(&#039;firstname&#039;, StringType(), True),
         StructField(&#039;middlename&#039;, StringType(), True),
         StructField(&#039;lastname&#039;, StringType(), True)
         ])),
     StructField(&#039;state&#039;, StringType(), True),
     StructField(&#039;gender&#039;, StringType(), True)
     ])
df2 = spark.createDataFrame(data = data, schema = schema)
df2.printSchema()
df2.show(truncate=False) # shows all columns
</blockquote></pre>
Yields below schema output. If you notice the <code>column</code> <code>name</code> is a <code>struct</code> type which consists of columns <code>firstname</code>, <code>middlename</code>, <code>lastname</code>.<br>
<pre><blockquote class="language-python">
root
 |-- name: struct (nullable = true)
 |    |-- firstname: string (nullable = true)
 |    |-- middlename: string (nullable = true)
 |    |-- lastname: string (nullable = true)
 |-- state: string (nullable = true)
 |-- gender: string (nullable = true)

+----------------------+-----+------+
|name                  |state|gender|
+----------------------+-----+------+
|[James,, Smith]       |OH   |M     |
|[Anna, Rose, ]        |NY   |F     |
|[Julia, , Williams]   |OH   |F     |
|[Maria, Anne, Jones]  |NY   |M     |
|[Jen, Mary, Brown]    |NY   |M     |
|[Mike, Mary, Williams]|OH   |M     |
+----------------------+-----+------+
</blockquote></pre>
Now, let&#8217;s select struct column.<br>
<pre><blockquote class="language-python">
df2.select(&quot;name&quot;).show(truncate=False)
</blockquote></pre>
This returns struct column <code>name</code> as is. <br>
<pre><blockquote class="language-python">
+----------------------+
|name                  |
+----------------------+
|[James,, Smith]       |
|[Anna, Rose, ]        |
|[Julia, , Williams]   |
|[Maria, Anne, Jones]  |
|[Jen, Mary, Brown]    |
|[Mike, Mary, Williams]|
+----------------------+
</blockquote></pre>
In order to select the specific column from a nested struct, you need to explicitly qualify the nested struct column name.<br>
<pre><blockquote class="language-python">
df2.select(&quot;name.firstname&quot;,&quot;name.lastname&quot;).show(truncate=False)
</blockquote></pre>
This outputs <code>firstname</code> and <code>lastname</code> from the name struct column.<br>
<pre><blockquote class="language-python">
+---------+--------+
|firstname|lastname|
+---------+--------+
|James    |Smith   |
|Anna     |        |
|Julia    |Williams|
|Maria    |Jones   |
|Jen      |Brown   |
|Mike     |Williams|
+---------+--------+
</blockquote></pre>
In order to get all columns from struct column.<br>
<pre><blockquote class="language-python">
df2.select(&quot;name.*&quot;).show(truncate=False)
</blockquote></pre>
This yields below output.<br>
<pre><blockquote class="language-python">
+---------+----------+--------+
|firstname|middlename|lastname|
+---------+----------+--------+
|James    |null      |Smith   |
|Anna     |Rose      |        |
|Julia    |          |Williams|
|Maria    |Anne      |Jones   |
|Jen      |Mary      |Brown   |
|Mike     |Mary      |Williams|
+---------+----------+--------+
</blockquote></pre>
<h2>5. Complete Example</h2>
<pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

data = [(&quot;James&quot;,&quot;Smith&quot;,&quot;USA&quot;,&quot;CA&quot;),
    (&quot;Michael&quot;,&quot;Rose&quot;,&quot;USA&quot;,&quot;NY&quot;),
    (&quot;Robert&quot;,&quot;Williams&quot;,&quot;USA&quot;,&quot;CA&quot;),
    (&quot;Maria&quot;,&quot;Jones&quot;,&quot;USA&quot;,&quot;FL&quot;)
  ]

columns = [&quot;firstname&quot;,&quot;lastname&quot;,&quot;country&quot;,&quot;state&quot;]
df = spark.createDataFrame(data = data, schema = columns)
df.show(truncate=False)

df.select(&quot;firstname&quot;).show()

df.select(&quot;firstname&quot;,&quot;lastname&quot;).show()

#Using Dataframe object name
df.select(df.firstname,df.lastname).show()

# Using col function
from pyspark.sql.functions import col
df.select(col(&quot;firstname&quot;),col(&quot;lastname&quot;)).show()

data = [((&quot;James&quot;,None,&quot;Smith&quot;),&quot;OH&quot;,&quot;M&quot;),
        ((&quot;Anna&quot;,&quot;Rose&quot;,&quot;&quot;),&quot;NY&quot;,&quot;F&quot;),
        ((&quot;Julia&quot;,&quot;&quot;,&quot;Williams&quot;),&quot;OH&quot;,&quot;F&quot;),
        ((&quot;Maria&quot;,&quot;Anne&quot;,&quot;Jones&quot;),&quot;NY&quot;,&quot;M&quot;),
        ((&quot;Jen&quot;,&quot;Mary&quot;,&quot;Brown&quot;),&quot;NY&quot;,&quot;M&quot;),
        ((&quot;Mike&quot;,&quot;Mary&quot;,&quot;Williams&quot;),&quot;OH&quot;,&quot;M&quot;)
        ]

from pyspark.sql.types import StructType,StructField, StringType        
schema = StructType([
    StructField(&#039;name&#039;, StructType([
         StructField(&#039;firstname&#039;, StringType(), True),
         StructField(&#039;middlename&#039;, StringType(), True),
         StructField(&#039;lastname&#039;, StringType(), True)
         ])),
     StructField(&#039;state&#039;, StringType(), True),
     StructField(&#039;gender&#039;, StringType(), True)
     ])

df2 = spark.createDataFrame(data = data, schema = schema)
df2.printSchema()
df2.show(truncate=False) # shows all columns

df2.select(&quot;name&quot;).show(truncate=False)
df2.select(&quot;name.firstname&quot;,&quot;name.lastname&quot;).show(truncate=False)
df2.select(&quot;name.*&quot;).show(truncate=False)
</blockquote></pre>
This example is also available at <a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-select-columns.py">PySpark github project</a>.<br>
<h2>6. Conclusion</h2>
In this article, you have learned select() is a transformation function of the DataFrame and is used to select single, multiple columns, select all columns from the list, select by index, and finally select nested struct columns, you have also learned how to select nested elements from the DataFrame.<br>


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