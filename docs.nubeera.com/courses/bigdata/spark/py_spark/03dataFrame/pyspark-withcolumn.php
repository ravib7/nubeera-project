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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark withColumn() Usage with Examples</h2>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <!-- <content> --><br>
                        <div class="entry-content clr" itemprop="text">
<p>PySpark <code>withColumn()</code> is a transformation function of DataFrame which is used to change the value, convert the datatype of an existing column, create a new column, and many more. In this post, I will walk you through commonly used PySpark DataFrame column operations using withColumn() examples.</p>
<ul><li><a href="#change-datatype">PySpark withColumn &#8211; To change column DataType</a></li><li><a href="#transform-column">Transform/change value of an existing column</a></li><li><a href="#derive-new-column">Derive new column from an existing column</a></li><li><a href="#add-new-column">Add a column with the literal value</a></li><li><a href="#rename-column">Rename column name</a></li><li><a href="#drop-column">Drop DataFrame column</a></li></ul>
<p>First, let&#8217;s create a DataFrame</a> to work with.</p>
<pre><blockquote class="language-python">
data = [(&#039;James&#039;,&#039;&#039;,&#039;Smith&#039;,&#039;1991-04-01&#039;,&#039;M&#039;,3000),
  (&#039;Michael&#039;,&#039;Rose&#039;,&#039;&#039;,&#039;2000-05-19&#039;,&#039;M&#039;,4000),
  (&#039;Robert&#039;,&#039;&#039;,&#039;Williams&#039;,&#039;1978-09-05&#039;,&#039;M&#039;,4000),
  (&#039;Maria&#039;,&#039;Anne&#039;,&#039;Jones&#039;,&#039;1967-12-01&#039;,&#039;F&#039;,4000),
  (&#039;Jen&#039;,&#039;Mary&#039;,&#039;Brown&#039;,&#039;1980-02-17&#039;,&#039;F&#039;,-1)
]

columns = [&quot;firstname&quot;,&quot;middlename&quot;,&quot;lastname&quot;,&quot;dob&quot;,&quot;gender&quot;,&quot;salary&quot;]
from pyspark.sql import SparkSession
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()
df = spark.createDataFrame(data=data, schema = columns)
</blockquote></pre>
<h2 id="change-datatype">1. Change DataType using PySpark withColumn()</h2>
<p>By using PySpark <code>withColumn()</code> on a DataFrame, we can cast or change the data type of a column. In order to change data type, you would also need to use <code>cast()</code> function along with withColumn(). The below statement changes the datatype from <code>String</code> to <code>Integer</code> for the <code>salary</code> column.</p>
<pre><blockquote class="language-python">
df.withColumn(&quot;salary&quot;,col(&quot;salary&quot;).cast(&quot;Integer&quot;)).show()
</blockquote></pre>
<h2 id="transform-column">2. Update The Value of an Existing Column</h2>
<p>PySpark <code>withColumn()</code> function of DataFrame can also be used to change the value of an existing column. In order to change the value, pass an existing column name as a first argument and a value to be assigned as a second argument to the withColumn() function. Note that the second argument should be <code>Column</code> type . Also, see Different Ways to Update PySpark DataFrame Column.</p>
<pre><blockquote class="language-python">
df.withColumn(&quot;salary&quot;,col(&quot;salary&quot;)*100).show()
</blockquote></pre>
<p>This snippet multiplies the value of &#8220;salary&#8221; with 100 and updates the value back to &#8220;salary&#8221; column.</p>
<h2 id="derive-new-column">3. Create a Column from an Existing</h2>
<p>To add/create a new column, specify the first argument with a name you want your new column to be and use the second argument to assign a value by applying an operation on an existing column. Also, see Different Ways to Add New Column to PySpark DataFrame.</p>
<pre><blockquote class="language-python">
df.withColumn(&quot;CopiedColumn&quot;,col(&quot;salary&quot;)* -1).show()
</blockquote></pre>
<p>This snippet creates a new column &#8220;CopiedColumn&#8221; by multiplying &#8220;salary&#8221; column with value -1.</p>
<h2 id="add-new-column">4. Add a New Column using withColumn()</h2>
<p>In order to create a new column, pass the column name you wanted to the first argument of <code>withColumn()</code> transformation function. Make sure this new column not already present on DataFrame, if it presents it updates the value of that column. </p>
<p>On below snippet, <code>PySpark lit()</code> function is used to add a constant value to a DataFrame column. We can also chain in order to add multiple columns.</p>
<pre><blockquote class="language-python">
df.withColumn(&quot;Country&quot;, lit(&quot;USA&quot;)).show()
df.withColumn(&quot;Country&quot;, lit(&quot;USA&quot;)) \
  .withColumn(&quot;anotherColumn&quot;,lit(&quot;anotherValue&quot;)) \
  .show()
</blockquote></pre>
<h2 id="rename-column">5. Rename Column Name</h2>
<p>Though you cannot rename a column using withColumn, still I wanted to cover this as renaming is one of the common operations we perform on DataFrame. To rename an existing column use <code>withColumnRenamed()</code> function on DataFrame.</p>
<pre><blockquote class="language-python">
df.withColumnRenamed(&quot;gender&quot;,&quot;sex&quot;) \
  .show(truncate=False) 
</blockquote></pre>
<h2 id="drop-column">6. Drop Column From PySpark DataFrame</h2>
<p>Use &#8220;drop&#8221; function to drop a specific column from the DataFrame.</p>
<pre><blockquote class="language-python">
df.drop(&quot;salary&quot;) \
  .show() 
</blockquote></pre>
<p><strong>Note: </strong>Note that all of these functions return the new DataFrame after applying the functions instead of updating DataFrame.</p>
<h2>7. PySpark withColumn() Complete Example</h2>
<pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.functions import col, lit
from pyspark.sql.types import StructType, StructField, StringType,IntegerType

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

data = [(&#039;James&#039;,&#039;&#039;,&#039;Smith&#039;,&#039;1991-04-01&#039;,&#039;M&#039;,3000),
  (&#039;Michael&#039;,&#039;Rose&#039;,&#039;&#039;,&#039;2000-05-19&#039;,&#039;M&#039;,4000),
  (&#039;Robert&#039;,&#039;&#039;,&#039;Williams&#039;,&#039;1978-09-05&#039;,&#039;M&#039;,4000),
  (&#039;Maria&#039;,&#039;Anne&#039;,&#039;Jones&#039;,&#039;1967-12-01&#039;,&#039;F&#039;,4000),
  (&#039;Jen&#039;,&#039;Mary&#039;,&#039;Brown&#039;,&#039;1980-02-17&#039;,&#039;F&#039;,-1)
]

columns = [&quot;firstname&quot;,&quot;middlename&quot;,&quot;lastname&quot;,&quot;dob&quot;,&quot;gender&quot;,&quot;salary&quot;]
df = spark.createDataFrame(data=data, schema = columns)
df.printSchema()
df.show(truncate=False)

df2 = df.withColumn(&quot;salary&quot;,col(&quot;salary&quot;).cast(&quot;Integer&quot;))
df2.printSchema()
df2.show(truncate=False)

df3 = df.withColumn(&quot;salary&quot;,col(&quot;salary&quot;)*100)
df3.printSchema()
df3.show(truncate=False) 

df4 = df.withColumn(&quot;CopiedColumn&quot;,col(&quot;salary&quot;)* -1)
df4.printSchema()

df5 = df.withColumn(&quot;Country&quot;, lit(&quot;USA&quot;))
df5.printSchema()

df6 = df.withColumn(&quot;Country&quot;, lit(&quot;USA&quot;)) \
   .withColumn(&quot;anotherColumn&quot;,lit(&quot;anotherValue&quot;))
df6.printSchema()

df.withColumnRenamed(&quot;gender&quot;,&quot;sex&quot;) \
  .show(truncate=False) 
  
df4.drop(&quot;CopiedColumn&quot;) \
.show(truncate=False) 
</blockquote></pre>
<p> The complete code can be downloaded from <a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-withcolumn.py">PySpark withColumn GitHub project</a></p>
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