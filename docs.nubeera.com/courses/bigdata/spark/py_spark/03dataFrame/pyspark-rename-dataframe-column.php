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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark withColumnRenamed to Rename Column on DataFrame</h2>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <!-- <content> --><br>
                        <div class="entry-content clr" itemprop="text">
<p>Use PySpark <code>withColumnRenamed()</code> to rename a DataFrame column, we often need to rename one column or multiple (or all) columns on PySpark DataFrame, you can do this in several ways. When columns are nested it becomes complicated. </p>
<p>Since DataFrame&#8217;s are an immutable collection, you can&#8217;t rename or update a column instead when using withColumnRenamed() it creates a new DataFrame with updated column names, In this PySpark article, I will cover different ways to rename columns with several use cases like rename nested column, all columns, selected multiple columns with Python/PySpark examples.</p>
<p>Refer to this page, If you are looking for a Spark with Scala example and rename pandas column with examples</p>
<ol><li><a href="#rename-column">PySpark withColumnRenamed &#8211; To rename DataFrame column name</a></li><li><a href="#rename-multiple-columns">PySpark withColumnRenamed &#8211; To rename multiple columns</a></li><li><a href="#using-structtype">Using StructType &#8211; To rename nested column on PySpark DataFrame </a></li><li><a href="#using-select">Using Select &#8211; To rename nested columns</a></li><li><a href="#using-withcolumn">Using withColumn &#8211; To rename nested columns</a></li><li><a href="#using-col">Using col() function &#8211; To Dynamically rename all or multiple columns</a></li><li><a href="#using-todf">Using toDF() &#8211; To rename all or multiple columns </a></li></ol>
<p>First, let&#8217;s create our data set to work with.</p>
<pre><blockquote class="language-scala">
dataDF = [((&#039;James&#039;,&#039;&#039;,&#039;Smith&#039;),&#039;1991-04-01&#039;,&#039;M&#039;,3000),
  ((&#039;Michael&#039;,&#039;Rose&#039;,&#039;&#039;),&#039;2000-05-19&#039;,&#039;M&#039;,4000),
  ((&#039;Robert&#039;,&#039;&#039;,&#039;Williams&#039;),&#039;1978-09-05&#039;,&#039;M&#039;,4000),
  ((&#039;Maria&#039;,&#039;Anne&#039;,&#039;Jones&#039;),&#039;1967-12-01&#039;,&#039;F&#039;,4000),
  ((&#039;Jen&#039;,&#039;Mary&#039;,&#039;Brown&#039;),&#039;1980-02-17&#039;,&#039;F&#039;,-1)
]
</blockquote></pre>
<p>Our base schema with nested structure.</p>
<pre><blockquote class="language-python">
from pyspark.sql.types import StructType,StructField, StringType, IntegerType
schema = StructType([
        StructField(&#039;name&#039;, StructType([
             StructField(&#039;firstname&#039;, StringType(), True),
             StructField(&#039;middlename&#039;, StringType(), True),
             StructField(&#039;lastname&#039;, StringType(), True)
             ])),
         StructField(&#039;dob&#039;, StringType(), True),
         StructField(&#039;gender&#039;, StringType(), True),
         StructField(&#039;gender&#039;, IntegerType(), True)
         ])
</blockquote></pre>
<p>Let&#8217;s create the DataFrame by using parallelize and provide the above schema. </p>
<pre><blockquote class="language-python">
from pyspark.sql import SparkSession
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()
df = spark.createDataFrame(data = dataDF, schema = schema)
df.printSchema()
</blockquote></pre>
<p>Below is our schema structure. I am not printing data here as it is not necessary for our examples. This schema has a nested structure.</p>
<img src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/01/pyspark-rename-column.jpg?w=1024&ssl=1"><br><br>
<h2 id="rename-column">1. PySpark withColumnRenamed &#8211; To rename DataFrame column name</h2>
<p>PySpark has a <code>withColumnRenamed()</code> function on DataFrame to change a column name. This is the most straight forward approach; this function takes two parameters; the first is your existing column name and the second is the new column name you wish for.</p>
<p><strong>PySpark withColumnRenamed</strong>() <strong>Syntax:</strong></p>
<pre><blockquote class="language-python">
withColumnRenamed(existingName, newNam)
</blockquote></pre>
<p><code>existingName</code> &#8211; The existing column name you want to change</p>
<p><code>newName</code> &#8211; New name of the column</p>
<p>Returns a new DataFrame with a column renamed. </p>
<p><strong>Example</strong></p>
<pre><blockquote class="language-python">
df.withColumnRenamed(&quot;dob&quot;,&quot;DateOfBirth&quot;).printSchema()
</blockquote></pre>
<p>The above statement changes column &#8220;dob&#8221; to &#8220;DateOfBirth&#8221; on PySpark DataFrame. Note that <code>withColumnRenamed</code> function returns a new DataFrame and doesn&#8217;t modify the current DataFrame.</p>
<img src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/01/pyspark-rename-column-2.jpg?w=1024&ssl=1">
<h2 id="rename-multiple-columns">2. PySpark withColumnRenamed &#8211; To rename multiple columns </h2>
<p>To change multiple column names, we should chain <code>withColumnRenamed</code> functions as shown below. You can also store all columns to rename in a list and loop through to rename all columns, I will leave this to you to explore.</p>
<pre><blockquote class="language-python">
df2 = df.withColumnRenamed(&quot;dob&quot;,&quot;DateOfBirth&quot;) \
    .withColumnRenamed(&quot;salary&quot;,&quot;salary_amount&quot;)
df2.printSchema()
</blockquote></pre>
<p>This creates a new DataFrame &#8220;df2&#8221; after renaming dob and salary columns.</p>
<h2 id="using-structtype">3. Using PySpark StructType &#8211; To rename a nested column in Dataframe</h2>
<p>Changing a column name on nested data is not straight forward and we can do this by creating a new schema with new DataFrame columns using StructType and use it using cast function as shown below.</p>
<pre><blockquote class="language-python">
schema2 = StructType([
    StructField(&quot;fname&quot;,StringType()),
    StructField(&quot;middlename&quot;,StringType()),
    StructField(&quot;lname&quot;,StringType())])
</blockquote></pre>
<pre><blockquote class="language-python">
df.select(col(&quot;name&quot;).cast(schema2), \
     col(&quot;dob&quot;), col(&quot;gender&quot;),col(&quot;salary&quot;)) \
   .printSchema()  
</blockquote></pre>
<p>This statement renames <code>firstname</code> to <code>fname</code> and <code>lastname</code> to <code>lname</code> within name structure. </p>
<img src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/01/pyspark-rename-column-3.jpg?w=1024&ssl=1">
<h2 id="using-select">4. Using Select &#8211; To rename nested elements.</h2>
<p>Let&#8217;s see another way to change nested columns by transposing the structure to flat.</p>
<pre><blockquote class="language-python">
from pyspark.sql.functions import *
df.select(col(&quot;name.firstname&quot;).alias(&quot;fname&quot;), \
  col(&quot;name.middlename&quot;).alias(&quot;mname&quot;), \
  col(&quot;name.lastname&quot;).alias(&quot;lname&quot;), \
  col(&quot;dob&quot;),col(&quot;gender&quot;),col(&quot;salary&quot;)) \
  .printSchema()
</blockquote></pre>
<h2 id="using-withcolumn">5. Using PySpark DataFrame withColumn &#8211; To rename nested columns</h2>
<p>When you have nested columns on PySpark DatFrame and if you want to rename it, use <code>withColumn</code> on a data frame object to create a new column from an existing and we will need to drop the existing column. Below example creates a &#8220;fname&#8221; column from &#8220;name.firstname&#8221; and drops the &#8220;name&#8221; column</p>
<pre><blockquote class="language-python">
from pyspark.sql.functions import *
df4 = df.withColumn(&quot;fname&quot;,col(&quot;name.firstname&quot;)) \
      .withColumn(&quot;mname&quot;,col(&quot;name.middlename&quot;)) \
      .withColumn(&quot;lname&quot;,col(&quot;name.lastname&quot;)) \
      .drop(&quot;name&quot;)
df4.printSchema()
</blockquote></pre>
<h2 id="using-col">6. Using col() function &#8211; To Dynamically rename all or multiple columns</h2>
<p>Another way to change all column names on Dataframe is to use <code>col()</code> function. </p>
<pre><blockquote class="language-python">
IN progress
</blockquote></pre>
<h2 id="using-todf">7. Using toDF() &#8211; To change all columns in a PySpark DataFrame</h2>
<p>When we have data in a flat structure (without nested) , use <code>toDF()</code> with a new schema to change all column names. </p>
<pre><blockquote class="language-python">
newColumns = [&quot;newCol1&quot;,&quot;newCol2&quot;,&quot;newCol3&quot;,&quot;newCol4&quot;]
df.toDF(*newColumns).printSchema()
</blockquote></pre>
<h2>Source code</h2>
<pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.types import StructType,StructField, StringType, IntegerType
from pyspark.sql.functions import *

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

dataDF = [((&#039;James&#039;,&#039;&#039;,&#039;Smith&#039;),&#039;1991-04-01&#039;,&#039;M&#039;,3000),
  ((&#039;Michael&#039;,&#039;Rose&#039;,&#039;&#039;),&#039;2000-05-19&#039;,&#039;M&#039;,4000),
  ((&#039;Robert&#039;,&#039;&#039;,&#039;Williams&#039;),&#039;1978-09-05&#039;,&#039;M&#039;,4000),
  ((&#039;Maria&#039;,&#039;Anne&#039;,&#039;Jones&#039;),&#039;1967-12-01&#039;,&#039;F&#039;,4000),
  ((&#039;Jen&#039;,&#039;Mary&#039;,&#039;Brown&#039;),&#039;1980-02-17&#039;,&#039;F&#039;,-1)
]

schema = StructType([
        StructField(&#039;name&#039;, StructType([
             StructField(&#039;firstname&#039;, StringType(), True),
             StructField(&#039;middlename&#039;, StringType(), True),
             StructField(&#039;lastname&#039;, StringType(), True)
             ])),
         StructField(&#039;dob&#039;, StringType(), True),
         StructField(&#039;gender&#039;, StringType(), True),
         StructField(&#039;salary&#039;, IntegerType(), True)
         ])

df = spark.createDataFrame(data = dataDF, schema = schema)
df.printSchema()

# Example 1
df.withColumnRenamed(&quot;dob&quot;,&quot;DateOfBirth&quot;).printSchema()
# Example 2   
df2 = df.withColumnRenamed(&quot;dob&quot;,&quot;DateOfBirth&quot;) \
    .withColumnRenamed(&quot;salary&quot;,&quot;salary_amount&quot;)
df2.printSchema()

# Example 3 
schema2 = StructType([
    StructField(&quot;fname&quot;,StringType()),
    StructField(&quot;middlename&quot;,StringType()),
    StructField(&quot;lname&quot;,StringType())])
    
df.select(col(&quot;name&quot;).cast(schema2),
  col(&quot;dob&quot;),
  col(&quot;gender&quot;),
  col(&quot;salary&quot;)) \
    .printSchema()    

# Example 4 
df.select(col(&quot;name.firstname&quot;).alias(&quot;fname&quot;),
  col(&quot;name.middlename&quot;).alias(&quot;mname&quot;),
  col(&quot;name.lastname&quot;).alias(&quot;lname&quot;),
  col(&quot;dob&quot;),col(&quot;gender&quot;),col(&quot;salary&quot;)) \
  .printSchema()
  
# Example 5
df4 = df.withColumn(&quot;fname&quot;,col(&quot;name.firstname&quot;)) \
      .withColumn(&quot;mname&quot;,col(&quot;name.middlename&quot;)) \
      .withColumn(&quot;lname&quot;,col(&quot;name.lastname&quot;)) \
      .drop(&quot;name&quot;)
df4.printSchema()

#Example 7
newColumns = [&quot;newCol1&quot;,&quot;newCol2&quot;,&quot;newCol3&quot;,&quot;newCol4&quot;]
df.toDF(*newColumns).printSchema()

# Example 6
&#039;&#039;&#039;
not working
old_columns = Seq(&quot;dob&quot;,&quot;gender&quot;,&quot;salary&quot;,&quot;fname&quot;,&quot;mname&quot;,&quot;lname&quot;)
new_columns = Seq(&quot;DateOfBirth&quot;,&quot;Sex&quot;,&quot;salary&quot;,&quot;firstName&quot;,&quot;middleName&quot;,&quot;lastName&quot;)
columnsList = old_columns.zip(new_columns).map(f=&gt;{col(f._1).as(f._2)})
df5 = df4.select(columnsList:_*)
df5.printSchema()
&#039;&#039;&#039;

  
</blockquote></pre>
<p> The complete code can be downloaded from&nbsp;<a href="https://github.com/sparkbyexamples/spark-examples/blob/master/spark-sql-examples/src/main/scala/com/sparkbyexamples/spark/dataframe/RenameColDataFrame.scala">GitHub</a></p>
<p></p>
<h3>Conclusion:</h3>
<p>This article explains different ways to rename all, a single, multiple, and nested columns on PySpark DataFrame.</p>
<p>I hope you like this article!!</p>
<p>Happy Learning.</p>


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