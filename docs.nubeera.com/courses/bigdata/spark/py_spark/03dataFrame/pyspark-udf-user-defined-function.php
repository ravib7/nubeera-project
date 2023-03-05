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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark UDF (User Defined Function)</h2>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <!-- <content> --><br>
                        <img src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/pyspark-udf.jpg?w=1279&ssl=1">
                        <p>PySpark UDF (a.k.a User Defined Function) is the most useful feature of Spark SQL &amp; DataFrame that is used to extend the PySpark build in capabilities. In this article, I will explain what is UDF? why do we need it and how to create and use it on DataFrame <code>select()</code>, withColumn() and SQL using PySpark (Spark with Python) examples.</p>
<p><strong>Note:</strong> UDF&#8217;s are the most expensive operations hence use them only you have no choice and when essential. In the later section of the article, I will explain why using UDF&#8217;s is an expensive operation in detail.</p>
<p><strong>Table of contents</strong></p>
<ul><li><a href="#pyspark-udf-introduction">PySpark UDF Introduction</a><ul><li><a href="#pyspark-udf">What is UDF?</a></li><li><a href="#udf-need">Why do we need it?</a></li></ul></li><li><a href="#pyspark-udf-create">Create PySpark UDF (User Defined Function)</a><ul><li><a href="#create-dataframe">Create a DataFrame</a></li><li><a href="#python-function">Create a Python function</a></li><li><a href="#converting-udf">Convert python function to UDF</a></li></ul></li><li><a href="#udf-dataframe">Using UDF with DataFrame</a><ul><li><a href="#pyspark-udf-select">Using UDF with DataFrame select()</a></li><li><a href="#pyspark-udf-withcolumn">Using UDF with DataFrame withColumn()</a></li><li><a href="#pyspark-udf-sql">Registring UDF &amp; Using it on SQL query</a></li></ul></li><li><a href="#udf-annotation">Create UDF using annotation</a></li><li><a href="#udf-special">Special handling</a><ul><li><a href="#udf-nullcheck">Null check</a></li><li><a href="#udf-performance">Performance concern</a></li></ul></li><li><a href="#pyspark-example">Complete Example</a></li></ul>
<h2 id="pyspark-udf-introduction">1. PySpark UDF Introduction</h2>
<h3 id="pyspark-udf">1.1 What is UDF?</h3>
<p>UDF&#8217;s a.k.a User Defined Functions, If you are coming from SQL background, UDF&#8217;s are nothing new to you as most of the traditional RDBMS databases support User Defined Functions, these functions need to register in the database library and use them on SQL as regular functions. </p>
<p>PySpark UDF&#8217;s are similar to UDF on traditional databases. In PySpark, you create a function in a Python syntax and wrap it with PySpark SQL <code>udf()</code> or register it as udf and use it on DataFrame and SQL respectively.</p>
<h3 id="udf-need">1.2 Why do we need a UDF?</h3>
<p>UDF&#8217;s are used to extend the functions of the framework and re-use these functions on multiple DataFrame&#8217;s. For example, you wanted to convert every first letter of a word in a name string to a capital case; PySpark build-in features don&#8217;t have this function hence you can create it a UDF and reuse this as needed on many Data Frames. UDF&#8217;s are once created they can be re-used on several DataFrame&#8217;s and SQL expressions.</p>
<p>Before you create any UDF, do your research to check if the similar function you wanted is already available in Spark SQL Functions. PySpark SQL provides several predefined common functions and many more new functions are added with every release. hence, It is best to check before you reinventing the wheel.</p>
<p>When you creating UDF&#8217;s you need to design them very carefully otherwise you will come across optimization &amp; performance issues.</p>
<h2 id="pyspark-udf-create">2. Create PySpark UDF</h2>
<h3 id="create-dataframe">2.1 Create a DataFrame</h3>
<p>Before we jump in creating a UDF, first let&#8217;s create a PySpark DataFrame.</p>
<pre><blockquote class="language-python">
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

columns = [&quot;Seqno&quot;,&quot;Name&quot;]
data = [(&quot;1&quot;, &quot;john jones&quot;),
    (&quot;2&quot;, &quot;tracey smith&quot;),
    (&quot;3&quot;, &quot;amy sanders&quot;)]

df = spark.createDataFrame(data=data,schema=columns)

df.show(truncate=False)
</blockquote></pre>
<p>Yields below output.</p>
<pre><blockquote class="language-python">
+-----+------------+
|Seqno|Names       |
+-----+------------+
|1    |john jones  |
|2    |tracey smith|
|3    |amy sanders |
+-----+------------+
</blockquote></pre>
<h3 id="python-function">2.2 Create a Python Function</h3>
<p>The first step in creating a UDF is creating a Python function. Below snippet creates a function <code>convertCase()</code> which takes a string parameter and converts the first letter of every word to capital letter. UDF&#8217;s take parameters of your choice and returns a value.</p>
<pre><blockquote class="language-python">
def convertCase(str):
    resStr=&quot;&quot;
    arr = str.split(&quot; &quot;)
    for x in arr:
       resStr= resStr + x[0:1].upper() + x[1:len(x)] + &quot; &quot;
    return resStr 
</blockquote></pre>
<h3 id="converting-udf">2.3 Convert a Python function to PySpark UDF</h3>
<p>Now convert this function <code>convertCase()</code> to UDF by passing the function to PySpark SQL <code>udf()</code>, this function is available at <code>org.apache.spark.sql.functions.udf</code> package. Make sure you import this package before using it. </p>
<p>PySpark SQL <code>udf()</code> function returns <code>org.apache.spark.sql.expressions.UserDefinedFunction</code> class object.</p>
<pre><blockquote class="language-python">
&quot;&quot;&quot; Converting function to UDF &quot;&quot;&quot;
convertUDF = udf(lambda z: convertCase(z),StringType())
</blockquote></pre>
<p><strong>Note:</strong> The default type of the udf() is StringType hence, you can also write the above statement without return type.</p>
<pre><blockquote class="language-python">
&quot;&quot;&quot; Converting function to UDF 
StringType() is by default hence not required &quot;&quot;&quot;
convertUDF = udf(lambda z: convertCase(z)) 
</blockquote></pre>
<h2 id="udf-dataframe">3. Using UDF with DataFrame</h2>
<h3 id="pyspark-udf-select">3.1 Using UDF with PySpark DataFrame select()</h3>
<p>Now you can use <code>convertUDF()</code> on a DataFrame column as a regular build-in function.</p>
<pre><blockquote class="language-python">
df.select(col(&quot;Seqno&quot;), \
    convertUDF(col(&quot;Name&quot;)).alias(&quot;Name&quot;) ) \
   .show(truncate=False)
</blockquote></pre>
<p>This results below output.</p>
<pre><blockquote class="language-python">
+-----+-------------+
|Seqno|Name         |
+-----+-------------+
|1    |John Jones   |
|2    |Tracey Smith |
|3    |Amy Sanders  |
+-----+-------------+
</blockquote></pre>
<p></p>
<h3 id="pyspark-udf-withcolumn">3.2 Using UDF with PySpark DataFrame withColumn()</h3>
<p>You could also use udf on DataFrame <code>withColumn()</code> function, to explain this I will create another <code>upperCase()</code> function which converts the input string to upper case.</p>
<pre><blockquote class="language-python">
def upperCase(str):
    return str.upper()
</blockquote></pre>
<p>Let&#8217;s convert <code>upperCase()</code> python function to UDF and then use it with DataFrame <code>withColumn()</code>. Below example converts the values of &#8220;Name&#8221; column to upper case and creates a new column &#8220;Curated Name&#8221;</p>
<pre><blockquote class="language-python">
upperCaseUDF = udf(lambda z:upperCase(z),StringType())   

df.withColumn(&quot;Cureated Name&quot;, upperCaseUDF(col(&quot;Name&quot;))) \
  .show(truncate=False)
</blockquote></pre>
<p>This yields below output.</p>
<pre><blockquote class="language-python">
+-----+------------+-------------+
|Seqno|Name        |Cureated Name|
+-----+------------+-------------+
|1    |john jones  |JOHN JONES   |
|2    |tracey smith|TRACEY SMITH |
|3    |amy sanders |AMY SANDERS  |
+-----+------------+-------------+
</blockquote></pre>
<h3 id="pyspark-udf-sql">3.3 Registering PySpark UDF &amp; use it on SQL</h3>
<p>In order to use <code>convertCase()</code> function on PySpark SQL, you need to register the function with PySpark by using <code>spark.udf.register()</code>.</p>
<pre><blockquote class="language-python">
&quot;&quot;&quot; Using UDF on SQL &quot;&quot;&quot;
spark.udf.register(&quot;convertUDF&quot;, convertCase,StringType())
df.createOrReplaceTempView(&quot;NAME_TABLE&quot;)
spark.sql(&quot;select Seqno, convertUDF(Name) as Name from NAME_TABLE&quot;) \
     .show(truncate=False)
</blockquote></pre>
<p>This yields the same output as 3.1 example.</p>
<h2>4. Creating UDF using annotation</h2>
<p>In the previous sections, you have learned creating a UDF is a 2 step process, first, you need to create a Python function, second convert function to UDF using SQL <code>udf()</code> function, however, you can avoid these two steps and create it with just a single step by using annotations.</p>
<pre><blockquote class="language-python">
@udf(returnType=StringType()) 
def upperCase(str):
    return str.upper()

df.withColumn(&quot;Cureated Name&quot;, upperCase(col(&quot;Name&quot;))) \
.show(truncate=False)
</blockquote></pre>
<p>This results same output as section 3.2</p>
<h2 id="udf-special">5. Special Handling</h2>
<h3>5.1 Execution order</h3>
<p>One thing to aware is in PySpark/Spark does not guarantee the order of evaluation of subexpressions meaning expressions are not guarantee to evaluated left-to-right or in any other fixed order. PySpark reorders the execution for query optimization and planning hence, AND, OR, WHERE and HAVING expression will have side effects.</p>
<p>So when you are designing and using UDF, you have to be very careful especially with null handling as these results runtime exceptions.</p>
<pre><blockquote class="language-python">
&quot;&quot;&quot; 
No guarantee Name is not null will execute first
If convertUDF(Name) like &#039;%John%&#039; execute first then 
you will get runtime error
&quot;&quot;&quot;
spark.sql(&quot;select Seqno, convertUDF(Name) as Name from NAME_TABLE &quot; + \ 
         &quot;where Name is not null and convertUDF(Name) like &#039;%John%&#039;&quot;) \
     .show(truncate=False)  
</blockquote></pre>
<p></p>
<h3 id="udf-nullcheck">5.2 Handling null check</h3>
<p>UDF&#8217;s are error-prone when not designed carefully. for example, when you have a column that contains the value <code>null</code> on some records </p>
<pre><blockquote class="language-python">
&quot;&quot;&quot; null check &quot;&quot;&quot;

columns = [&quot;Seqno&quot;,&quot;Name&quot;]
data = [(&quot;1&quot;, &quot;john jones&quot;),
    (&quot;2&quot;, &quot;tracey smith&quot;),
    (&quot;3&quot;, &quot;amy sanders&quot;),
    (&#039;4&#039;,None)]

df2 = spark.createDataFrame(data=data,schema=columns)
df2.show(truncate=False)
df2.createOrReplaceTempView(&quot;NAME_TABLE2&quot;)

spark.sql(&quot;select convertUDF(Name) from NAME_TABLE2&quot;) \
     .show(truncate=False)
</blockquote></pre>
<p>Note that from the above snippet, record with &#8220;Seqno 4&#8221; has value &#8220;None&#8221; for &#8220;name&#8221; column. Since we are not handling null with UDF function, using this on DataFrame returns below error. Note that in Python None is considered null.</p>
<pre><blockquote class="language-scala">
AttributeError: &#039;NoneType&#039; object has no attribute &#039;split&#039;

	at org.apache.spark.api.python.BasePythonRunner$ReaderIterator.handlePythonException(PythonRunner.scala:456)
	at org.apache.spark.sql.execution.python.PythonUDFRunner$$anon$1.read(PythonUDFRunner.scala:81)
	at org.apache.spark.sql.execution.python.PythonUDFRunner$$anon$1.read(PythonUDFRunner.scala:64)
	at org.apache.spark.api.python.BasePythonRunner$ReaderIterator.hasNext(PythonRunner.scala:410)
	at org.apache.spark.InterruptibleIterator.hasNext(InterruptibleIterator.scala:37)
	at scala.collection.Iterator$$anon$12.hasNext(Iterator.scala:440)
</blockquote></pre>
<p>Below points to remember</p>
<ul><li>Its always best practice to check for null inside a UDF function rather than checking for null outside. </li><li>In any case, if you can&#8217;t do a null check in UDF at lease use IF or CASE WHEN to check for null and call UDF conditionally.</li></ul>
<pre><blockquote class="language-python">
spark.udf.register(&quot;_nullsafeUDF&quot;, lambda str: convertCase(str) if not str is None else &quot;&quot; , StringType())

spark.sql(&quot;select _nullsafeUDF(Name) from NAME_TABLE2&quot;) \
     .show(truncate=False)

spark.sql(&quot;select Seqno, _nullsafeUDF(Name) as Name from NAME_TABLE2 &quot; + \
          &quot; where Name is not null and _nullsafeUDF(Name) like &#039;%John%&#039;&quot;) \
     .show(truncate=False)    
</blockquote></pre>
<p>This executes successfully without errors as we are checking for null/none while registering UDF.</p>
<h3 id="udf-performance">5.3 Performance concern using UDF</h3>
<p>UDF&#8217;s are a black box to PySpark hence it can&#8217;t apply optimization and you will lose all the optimization PySpark does on Dataframe/Dataset. When possible you should use Spark SQL built-in functions as these functions provide optimization. Consider creating UDF only when existing built-in SQL function doesn&#8217;t have it.</p>
<h2 id="pyspark-example">6. Complete PySpark UDF Example</h2>
<p>Below is complete UDF function example in Scala</p>
<pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.functions import col, udf
from pyspark.sql.types import StringType

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

columns = [&quot;Seqno&quot;,&quot;Name&quot;]
data = [(&quot;1&quot;, &quot;john jones&quot;),
    (&quot;2&quot;, &quot;tracey smith&quot;),
    (&quot;3&quot;, &quot;amy sanders&quot;)]

df = spark.createDataFrame(data=data,schema=columns)

df.show(truncate=False)

def convertCase(str):
    resStr=&quot;&quot;
    arr = str.split(&quot; &quot;)
    for x in arr:
       resStr= resStr + x[0:1].upper() + x[1:len(x)] + &quot; &quot;
    return resStr 

&quot;&quot;&quot; Converting function to UDF &quot;&quot;&quot;
convertUDF = udf(lambda z: convertCase(z))

df.select(col(&quot;Seqno&quot;), \
    convertUDF(col(&quot;Name&quot;)).alias(&quot;Name&quot;) ) \
.show(truncate=False)

def upperCase(str):
    return str.upper()

upperCaseUDF = udf(lambda z:upperCase(z),StringType())    

df.withColumn(&quot;Cureated Name&quot;, upperCaseUDF(col(&quot;Name&quot;))) \
.show(truncate=False)

&quot;&quot;&quot; Using UDF on SQL &quot;&quot;&quot;
spark.udf.register(&quot;convertUDF&quot;, convertCase,StringType())
df.createOrReplaceTempView(&quot;NAME_TABLE&quot;)
spark.sql(&quot;select Seqno, convertUDF(Name) as Name from NAME_TABLE&quot;) \
     .show(truncate=False)
     
spark.sql(&quot;select Seqno, convertUDF(Name) as Name from NAME_TABLE &quot; + \
          &quot;where Name is not null and convertUDF(Name) like &#039;%John%&#039;&quot;) \
     .show(truncate=False)  
     
&quot;&quot;&quot; null check &quot;&quot;&quot;

columns = [&quot;Seqno&quot;,&quot;Name&quot;]
data = [(&quot;1&quot;, &quot;john jones&quot;),
    (&quot;2&quot;, &quot;tracey smith&quot;),
    (&quot;3&quot;, &quot;amy sanders&quot;),
    (&#039;4&#039;,None)]

df2 = spark.createDataFrame(data=data,schema=columns)
df2.show(truncate=False)
df2.createOrReplaceTempView(&quot;NAME_TABLE2&quot;)
    
spark.udf.register(&quot;_nullsafeUDF&quot;, lambda str: convertCase(str) if not str is None else &quot;&quot; , StringType())

spark.sql(&quot;select _nullsafeUDF(Name) from NAME_TABLE2&quot;) \
     .show(truncate=False)

spark.sql(&quot;select Seqno, _nullsafeUDF(Name) as Name from NAME_TABLE2 &quot; + \
          &quot; where Name is not null and _nullsafeUDF(Name) like &#039;%John%&#039;&quot;) \
     .show(truncate=False)  
</blockquote></pre>
<p>This example is also available at <a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-udf.py">Spark GitHub project</a> for reference.</p>
<h2>Conclusion</h2>
<p>In this article, you have learned the following</p>
<ul><li>PySpark UDF is a User Defined Function that is used to create a reusable function in Spark. </li><li>Once UDF created, that can be re-used on multiple DataFrames and SQL (after registering).</li><li>The default type of the udf() is StringType.</li><li>You need to handle nulls explicitly otherwise you will see side-effects.</li></ul>


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