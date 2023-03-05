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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Where Filter Function | Multiple Conditions</h2>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <!-- <content> --><br>
                        <div class="entry-content clr" itemprop="text">
<p>PySpark <code>filter()</code> function is used to filter the rows from RDD/DataFrame based on the given condition or SQL expression, you can also use <code>where()</code> clause instead of the filter() if you are coming from an SQL background, both these functions operate exactly the same.</p>
<p>In this PySpark article, you will learn how to apply a filter on DataFrame columns of string, arrays, struct types by using single and multiple conditions and also applying filter using <code>isin()</code> with PySpark (Python Spark) examples.</p>
<h2>1. PySpark DataFrame filter() Syntax</h2>
<p>Below is syntax of the filter function. condition would be an expression you wanted to filter.</p>
<pre><blockquote class="language-python">
filter(condition)
</blockquote></pre>
<p>Before we start with examples, first let&#8217;s create a DataFrame. Here, I am using a DataFrame with StructType and ArrayType columns as I will also be covering examples with struct and array types as-well.</p>
<pre><blockquote class="language-python">
from pyspark.sql.types import StructType,StructField 
from pyspark.sql.types import StringType, IntegerType, ArrayType
data = [
    ((&quot;James&quot;,&quot;&quot;,&quot;Smith&quot;),[&quot;Java&quot;,&quot;Scala&quot;,&quot;C++&quot;],&quot;OH&quot;,&quot;M&quot;),
    ((&quot;Anna&quot;,&quot;Rose&quot;,&quot;&quot;),[&quot;Spark&quot;,&quot;Java&quot;,&quot;C++&quot;],&quot;NY&quot;,&quot;F&quot;),
    ((&quot;Julia&quot;,&quot;&quot;,&quot;Williams&quot;),[&quot;CSharp&quot;,&quot;VB&quot;],&quot;OH&quot;,&quot;F&quot;),
    ((&quot;Maria&quot;,&quot;Anne&quot;,&quot;Jones&quot;),[&quot;CSharp&quot;,&quot;VB&quot;],&quot;NY&quot;,&quot;M&quot;),
    ((&quot;Jen&quot;,&quot;Mary&quot;,&quot;Brown&quot;),[&quot;CSharp&quot;,&quot;VB&quot;],&quot;NY&quot;,&quot;M&quot;),
    ((&quot;Mike&quot;,&quot;Mary&quot;,&quot;Williams&quot;),[&quot;Python&quot;,&quot;VB&quot;],&quot;OH&quot;,&quot;M&quot;)
 ]
        
schema = StructType([
     StructField(&#039;name&#039;, StructType([
        StructField(&#039;firstname&#039;, StringType(), True),
        StructField(&#039;middlename&#039;, StringType(), True),
         StructField(&#039;lastname&#039;, StringType(), True)
     ])),
     StructField(&#039;languages&#039;, ArrayType(StringType()), True),
     StructField(&#039;state&#039;, StringType(), True),
     StructField(&#039;gender&#039;, StringType(), True)
 ])

df = spark.createDataFrame(data = data, schema = schema)
df.printSchema()
df.show(truncate=False)
</blockquote></pre>
<p>This yields below schema and DataFrame results.</p>
<pre><blockquote class="language-python">
root
 |-- name: struct (nullable = true)
 |    |-- firstname: string (nullable = true)
 |    |-- middlename: string (nullable = true)
 |    |-- lastname: string (nullable = true)
 |-- languages: array (nullable = true)
 |    |-- element: string (containsNull = true)
 |-- state: string (nullable = true)
 |-- gender: string (nullable = true)

+----------------------+------------------+-----+------+
|name                  |languages         |state|gender|
+----------------------+------------------+-----+------+
|[James, , Smith]      |[Java, Scala, C++]|OH   |M     |
|[Anna, Rose, ]        |[Spark, Java, C++]|NY   |F     |
|[Julia, , Williams]   |[CSharp, VB]      |OH   |F     |
|[Maria, Anne, Jones]  |[CSharp, VB]      |NY   |M     |
|[Jen, Mary, Brown]    |[CSharp, VB]      |NY   |M     |
|[Mike, Mary, Williams]|[Python, VB]      |OH   |M     |
+----------------------+------------------+-----+------+
</blockquote></pre>
<h2>2. DataFrame filter() with Column Condition</h2>
<p>Use Column with the condition to filter the rows from DataFrame, using this you can express complex condition by referring column names using <code>dfObject.colname</code></p>
<pre><blockquote class="language-python">
# Using equals condition
df.filter(df.state == &quot;OH&quot;).show(truncate=False)

+----------------------+------------------+-----+------+
|name                  |languages         |state|gender|
+----------------------+------------------+-----+------+
|[James, , Smith]      |[Java, Scala, C++]|OH   |M     |
|[Julia, , Williams]   |[CSharp, VB]      |OH   |F     |
|[Mike, Mary, Williams]|[Python, VB]      |OH   |M     |
+----------------------+------------------+-----+------+

# not equals condition
df.filter(df.state != &quot;OH&quot;) \
    .show(truncate=False) 
df.filter(~(df.state == &quot;OH&quot;)) \
    .show(truncate=False)
</blockquote></pre>
<p>Same example can also written as below. In order to use this first you need to import <code>from pyspark.sql.functions import col</code></p>
<pre><blockquote class="language-python">
#Using SQL col() function
from pyspark.sql.functions import col
df.filter(col(&quot;state&quot;) == &quot;OH&quot;) \
    .show(truncate=False) 
</blockquote></pre>
<h2 id="sql-expression">3. DataFrame filter() with SQL Expression</h2>
<p>If you are coming from SQL background, you can use that knowledge in PySpark to filter DataFrame rows with SQL expressions. </p>
<pre><blockquote class="language-python">
#Using SQL Expression
df.filter(&quot;gender == &#039;M&#039;&quot;).show()
#For not equal
df.filter(&quot;gender != &#039;M&#039;&quot;).show()
df.filter(&quot;gender &lt;&gt; &#039;M&#039;&quot;).show()
</blockquote></pre>
<h2>4. PySpark Filter with Multiple Conditions</h2>
<p>In PySpark, to <code>filter()</code> rows on DataFrame based on multiple conditions, you case use either <code>Column</code> with a condition or SQL expression. Below is just a simple example using AND (&amp;) condition, you can extend this with OR(|), and NOT(!) conditional expressions as needed.</p>
<pre><blockquote class="language-python">
//Filter multiple condition
df.filter( (df.state  == &quot;OH&quot;) &amp; (df.gender  == &quot;M&quot;) ) \
    .show(truncate=False)  
</blockquote></pre>
<p> This yields below DataFrame results.</p>
<pre><blockquote class="language-python">
+----------------------+------------------+-----+------+
|name                  |languages         |state|gender|
+----------------------+------------------+-----+------+
|[James, , Smith]      |[Java, Scala, C++]|OH   |M     |
|[Mike, Mary, Williams]|[Python, VB]      |OH   |M     |
+----------------------+------------------+-----+------+
</blockquote></pre>
<h2>5. Filter Based on List Values</h2>
<p>If you have a list of elements and you wanted to filter that is not in the list or in the list, use <code>isin()</code> function of <code>Column</code> class and it doesn&#8217;t have isnotin() function but you do the same using not operator (~)</p>
<pre><blockquote class="language-python">
#Filter IS IN List values
li=[&quot;OH&quot;,&quot;CA&quot;,&quot;DE&quot;]
df.filter(df.state.isin(li)).show()
+--------------------+------------------+-----+------+
|                name|         languages|state|gender|
+--------------------+------------------+-----+------+
|    [James, , Smith]|[Java, Scala, C++]|   OH|     M|
| [Julia, , Williams]|      [CSharp, VB]|   OH|     F|
|[Mike, Mary, Will...|      [Python, VB]|   OH|     M|
+--------------------+------------------+-----+------+

# Filter NOT IS IN List values
#These show all records with NY (NY is not part of the list)
df.filter(~df.state.isin(li)).show()
df.filter(df.state.isin(li)==False).show()
</blockquote></pre>
<h2>6. Filter Based on Starts With, Ends With, Contains</h2>
<p>You can also filter DataFrame rows by using <code>startswith()</code>, <code>endswith()</code> and <code>contains()</code> methods of Column class. For more examples on Column class, refer to PySpark Column Functions.</p>
<pre><blockquote class="language-python">
# Using startswith
df.filter(df.state.startswith(&quot;N&quot;)).show()
+--------------------+------------------+-----+------+
|                name|         languages|state|gender|
+--------------------+------------------+-----+------+
|      [Anna, Rose, ]|[Spark, Java, C++]|   NY|     F|
|[Maria, Anne, Jones]|      [CSharp, VB]|   NY|     M|
|  [Jen, Mary, Brown]|      [CSharp, VB]|   NY|     M|
+--------------------+------------------+-----+------+

#using endswith
df.filter(df.state.endswith(&quot;H&quot;)).show()

#contains
df.filter(df.state.contains(&quot;H&quot;)).show()
</blockquote></pre>
<h2>7. PySpark Filter like and rlike</h2>
<p>If you have SQL background you must be familiar with <code>like</code> and <code>rlike</code> (regex like), PySpark also provides similar methods in Column class to filter similar values using wildcard characters. You can use rlike() to filter by checking values case insensitive.</p>
<pre><blockquote class="language-python">
data2 = [(2,&quot;Michael Rose&quot;),(3,&quot;Robert Williams&quot;),
     (4,&quot;Rames Rose&quot;),(5,&quot;Rames rose&quot;)
  ]
df2 = spark.createDataFrame(data = data2, schema = [&quot;id&quot;,&quot;name&quot;])

# like - SQL LIKE pattern
df2.filter(df2.name.like(&quot;%rose%&quot;)).show()
+---+----------+
| id|      name|
+---+----------+
|  5|Rames rose|
+---+----------+

# rlike - SQL RLIKE pattern (LIKE with Regex)
#This check case insensitive
df2.filter(df2.name.rlike(&quot;(?i)^*rose$&quot;)).show()
+---+------------+
| id|        name|
+---+------------+
|  2|Michael Rose|
|  4|  Rames Rose|
|  5|  Rames rose|
</blockquote></pre>
<h2 id="array_contains">8. Filter on an Array column</h2>
<p>When you want to filter rows from DataFrame based on value present in an array collection column, you can use the first syntax. The below example uses <code>array_contains()</code> from Pyspark SQL functions which checks if a value contains in an array if present it returns true otherwise false.</p>
<pre><blockquote class="language-python">
from pyspark.sql.functions import array_contains
df.filter(array_contains(df.languages,&quot;Java&quot;)) \
    .show(truncate=False)     
</blockquote></pre>
<p> This yields below DataFrame results.</p>
<pre><blockquote class="language-python">
+----------------+------------------+-----+------+
|name            |languages         |state|gender|
+----------------+------------------+-----+------+
|[James, , Smith]|[Java, Scala, C++]|OH   |M     |
|[Anna, Rose, ]  |[Spark, Java, C++]|NY   |F     |
+----------------+------------------+-----+------+
</blockquote></pre>
<h2>9. Filtering on Nested Struct columns</h2>
<p>If your DataFrame consists of nested struct columns, you can use any of the above syntaxes to filter the rows based on the nested column.</p>
<pre><blockquote class="language-python">
  //Struct condition
df.filter(df.name.lastname == &quot;Williams&quot;) \
    .show(truncate=False) 
</blockquote></pre>
<p>This yields below DataFrame results</p>
<pre><blockquote class="language-python">
+----------------------+------------+-----+------+
|name                  |languages   |state|gender|
+----------------------+------------+-----+------+
|[Julia, , Williams]   |[CSharp, VB]|OH   |F     |
|[Mike, Mary, Williams]|[Python, VB]|OH   |M     |
+----------------------+------------+-----+------+
</blockquote></pre>
<h2>10. Source code of PySpark where filter</h2>
<pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.types import StructType,StructField, StringType, IntegerType, ArrayType
from pyspark.sql.functions import col,array_contains

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

arrayStructureData = [
        ((&quot;James&quot;,&quot;&quot;,&quot;Smith&quot;),[&quot;Java&quot;,&quot;Scala&quot;,&quot;C++&quot;],&quot;OH&quot;,&quot;M&quot;),
        ((&quot;Anna&quot;,&quot;Rose&quot;,&quot;&quot;),[&quot;Spark&quot;,&quot;Java&quot;,&quot;C++&quot;],&quot;NY&quot;,&quot;F&quot;),
        ((&quot;Julia&quot;,&quot;&quot;,&quot;Williams&quot;),[&quot;CSharp&quot;,&quot;VB&quot;],&quot;OH&quot;,&quot;F&quot;),
        ((&quot;Maria&quot;,&quot;Anne&quot;,&quot;Jones&quot;),[&quot;CSharp&quot;,&quot;VB&quot;],&quot;NY&quot;,&quot;M&quot;),
        ((&quot;Jen&quot;,&quot;Mary&quot;,&quot;Brown&quot;),[&quot;CSharp&quot;,&quot;VB&quot;],&quot;NY&quot;,&quot;M&quot;),
        ((&quot;Mike&quot;,&quot;Mary&quot;,&quot;Williams&quot;),[&quot;Python&quot;,&quot;VB&quot;],&quot;OH&quot;,&quot;M&quot;)
        ]
        
arrayStructureSchema = StructType([
        StructField(&#039;name&#039;, StructType([
             StructField(&#039;firstname&#039;, StringType(), True),
             StructField(&#039;middlename&#039;, StringType(), True),
             StructField(&#039;lastname&#039;, StringType(), True)
             ])),
         StructField(&#039;languages&#039;, ArrayType(StringType()), True),
         StructField(&#039;state&#039;, StringType(), True),
         StructField(&#039;gender&#039;, StringType(), True)
         ])


df = spark.createDataFrame(data = arrayStructureData, schema = arrayStructureSchema)
df.printSchema()
df.show(truncate=False)

df.filter(df.state == &quot;OH&quot;) \
    .show(truncate=False)

df.filter(col(&quot;state&quot;) == &quot;OH&quot;) \
    .show(truncate=False)    
    
df.filter(&quot;gender  == &#039;M&#039;&quot;) \
    .show(truncate=False)    

df.filter( (df.state  == &quot;OH&quot;) &amp; (df.gender  == &quot;M&quot;) ) \
    .show(truncate=False)        

df.filter(array_contains(df.languages,&quot;Java&quot;)) \
    .show(truncate=False)        

df.filter(df.name.lastname == &quot;Williams&quot;) \
    .show(truncate=False) 
</blockquote></pre>
<p>Examples explained here are also available at <a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-filter.py">PySpark examples GitHub</a> project for reference.</p>
<h2>11. Conclusion</h2>
<p>In this tutorial, I&#8217;ve explained how to filter rows from PySpark DataFrame based on single or multiple conditions and SQL expression, also learned filtering rows by providing conditions on the array and struct column with Spark with Python examples.</p>
<p>Alternatively, you can also use <code>where()</code> function to filter the rows on PySpark DataFrame.</p>
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