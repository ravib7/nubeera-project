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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Row using on DataFrame and RDD</h2>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <!-- <content> --><br>
                        <div class="entry-content clr" itemprop="text">
In PySpark Row class is available by importing <code>pyspark.sql.Row</code> which is represented as a record/row in DataFrame, one can create a Row object by using named arguments, or create a custom Row like class. In this article I will explain how to use Row class on RDD, DataFrame and its functions<br>
Before we start using it on RDD &amp; DataFrame, let&#8217;s understand some basics of Row class.<br>
<strong>Key Points of Row Class:</strong><br>
<ul><li>Earlier to Spark 3.0, when used Row class with named arguments, the fields are sorted by name.</li><li>Since 3.0, Rows created from named arguments are not sorted alphabetically instead they will be ordered in the position entered. </li><li>To enable sorting by names, set the environment variable <code>PYSPARK_ROW_FIELD_SORTING_ENABLED</code> to <code>true</code>.</li><li>Row class provides a way to create a struct-type column as well.</li></ul>
<h2>1. Create a Row Object</h2>
Row class extends the tuple hence it takes variable number of arguments, Row() is used to create the row object. Once the row object created, we can retrieve the data from Row using index similar to tuple.<br>
<pre><blockquote class="language-python">
from pyspark.sql import Row
row=Row(&quot;James&quot;,40)
print(row[0] +&quot;,&quot;+str(row[1]))
</blockquote></pre>
This outputs <code>James,40</code>. Alternatively you can also write with named arguments. Benefits with the named argument is you can access with field name <code>row.name</code>. Below example print &#8220;Alice&#8221;.<br>
<pre><blockquote class="language-python">
row=Row(name=&quot;Alice&quot;, age=11)
print(row.name) 
</blockquote></pre>
<h2>2. Create Custom Class from Row</h2>
We can also create a Row like class, for example &#8220;Person&#8221; and use it similar to Row object. This would be helpful when you wanted to create real time object and refer it&#8217;s properties. On below example, we have created a Person class and used similar to Row.<br>
<pre><blockquote class="language-python">
Person = Row(&quot;name&quot;, &quot;age&quot;)
p1=Person(&quot;James&quot;, 40)
p2=Person(&quot;Alice&quot;, 35)
print(p1.name +&quot;,&quot;+p2.name)
</blockquote></pre>
This outputs <code>James,Alice</code><br>
<h2>3. Using Row class on PySpark RDD</h2>
We can use Row class on PySpark RDD. When you use Row to create an RDD, after collecting the data you will get the result back in Row.<br>
<pre><blockquote class="language-python">
from pyspark.sql import SparkSession, Row
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

data = [Row(name=&quot;James,,Smith&quot;,lang=[&quot;Java&quot;,&quot;Scala&quot;,&quot;C++&quot;],state=&quot;CA&quot;), 
    Row(name=&quot;Michael,Rose,&quot;,lang=[&quot;Spark&quot;,&quot;Java&quot;,&quot;C++&quot;],state=&quot;NJ&quot;),
    Row(name=&quot;Robert,,Williams&quot;,lang=[&quot;CSharp&quot;,&quot;VB&quot;],state=&quot;NV&quot;)]
rdd=spark.sparkContext.parallelize(data)
print(rdd.collect())
</blockquote></pre>
This yields below output.<br>
<pre><blockquote class="language-python">
[Row(name=&#039;James,,Smith&#039;, lang=[&#039;Java&#039;, &#039;Scala&#039;, &#039;C++&#039;], state=&#039;CA&#039;), Row(name=&#039;Michael,Rose,&#039;, lang=[&#039;Spark&#039;, &#039;Java&#039;, &#039;C++&#039;], state=&#039;NJ&#039;), Row(name=&#039;Robert,,Williams&#039;, lang=[&#039;CSharp&#039;, &#039;VB&#039;], state=&#039;NV&#039;)]
</blockquote></pre>
Now, let&#8217;s collect the data and access the data using its properties.<br>
<pre><blockquote class="language-python">
collData=rdd.collect()
for row in collData:
    print(row.name + &quot;,&quot; +str(row.lang))
</blockquote></pre>
This yields below output.<br>
<pre><blockquote class="language-python">
James,,Smith,[&#039;Java&#039;, &#039;Scala&#039;, &#039;C++&#039;]
Michael,Rose,,[&#039;Spark&#039;, &#039;Java&#039;, &#039;C++&#039;]
Robert,,Williams,[&#039;CSharp&#039;, &#039;VB&#039;]
</blockquote></pre>
Alternatively, you can also do by creating a Row like class &#8220;Person&#8221;<br>
<pre><blockquote class="language-python">
Person=Row(&quot;name&quot;,&quot;lang&quot;,&quot;state&quot;)
data = [Person(&quot;James,,Smith&quot;,[&quot;Java&quot;,&quot;Scala&quot;,&quot;C++&quot;],&quot;CA&quot;), 
    Person(&quot;Michael,Rose,&quot;,[&quot;Spark&quot;,&quot;Java&quot;,&quot;C++&quot;],&quot;NJ&quot;),
    Person(&quot;Robert,,Williams&quot;,[&quot;CSharp&quot;,&quot;VB&quot;],&quot;NV&quot;)]
</blockquote></pre>
<h2>4. Using Row class on PySpark DataFrame</h2>
Similarly, Row class also can be used with PySpark DataFrame, By default data in DataFrame represent as Row. To demonstrate, I will use the same data that was created for RDD.<br>
Note that Row on DataFrame is not allowed to omit a named argument to represent that the value is None or missing. This should be explicitly set to None in this case.<br>
<pre><blockquote class="language-python">
df=spark.createDataFrame(data)
df.printSchema()
df.show()
</blockquote></pre>
This yields below output. Note that DataFrame able to take the column names from Row object.<br>
<pre><blockquote class="language-python">
root
 |-- name: string (nullable = true)
 |-- lang: array (nullable = true)
 |    |-- element: string (containsNull = true)
 |-- state: string (nullable = true)

+----------------+------------------+-----+
|            name|              lang|state|
+----------------+------------------+-----+
|    James,,Smith|[Java, Scala, C++]|   CA|
|   Michael,Rose,|[Spark, Java, C++]|   NJ|
|Robert,,Williams|      [CSharp, VB]|   NV|
+----------------+------------------+-----+
</blockquote></pre>
You can also change the column names by using <code>toDF()</code> function<br>
<pre><blockquote class="language-python">
columns = [&quot;name&quot;,&quot;languagesAtSchool&quot;,&quot;currentState&quot;]
df=spark.createDataFrame(data).toDF(*columns)
df.printSchema()
</blockquote></pre>
This yields below output, note the column name &#8220;languagesAtSchool&#8221; from the previous example.<br>
<pre><blockquote class="language-python">
root
 |-- name: string (nullable = true)
 |-- languagesAtSchool: array (nullable = true)
 |    |-- element: string (containsNull = true)
 |-- currentState: string (nullable = true)
</blockquote></pre>
<h2>5. Create Nested Struct Using Row Class</h2>
The below example provides a way to create a struct type using the Row class. Alternatively, you can also create struct type using By Providing Schema using PySpark StructType &amp; StructFields<br>
<pre><blockquote class="language-python">
#Create DataFrame with struct using Row class
from pyspark.sql import Row
data=[Row(name=&quot;James&quot;,prop=Row(hair=&quot;black&quot;,eye=&quot;blue&quot;)),
      Row(name=&quot;Ann&quot;,prop=Row(hair=&quot;grey&quot;,eye=&quot;black&quot;))]
df=spark.createDataFrame(data)
df.printSchema()
</blockquote></pre>
Yields below schema<br>
<pre><blockquote class="language-python">
root
 |-- name: string (nullable = true)
 |-- prop: struct (nullable = true)
 |    |-- hair: string (nullable = true)
 |    |-- eye: string (nullable = true)
</blockquote></pre>
<h2>6. Complete Example of PySpark Row usage on RDD &amp; DataFrame</h2>
Below is complete example for reference.<br>
<pre><blockquote class="language-python">
from pyspark.sql import SparkSession, Row

row=Row(&quot;James&quot;,40)
print(row[0] +&quot;,&quot;+str(row[1]))
row2=Row(name=&quot;Alice&quot;, age=11)
print(row2.name)

Person = Row(&quot;name&quot;, &quot;age&quot;)
p1=Person(&quot;James&quot;, 40)
p2=Person(&quot;Alice&quot;, 35)
print(p1.name +&quot;,&quot;+p2.name)

#PySpark Example
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

data = [Row(name=&quot;James,,Smith&quot;,lang=[&quot;Java&quot;,&quot;Scala&quot;,&quot;C++&quot;],state=&quot;CA&quot;), 
    Row(name=&quot;Michael,Rose,&quot;,lang=[&quot;Spark&quot;,&quot;Java&quot;,&quot;C++&quot;],state=&quot;NJ&quot;),
    Row(name=&quot;Robert,,Williams&quot;,lang=[&quot;CSharp&quot;,&quot;VB&quot;],state=&quot;NV&quot;)]

#RDD Example 1
rdd=spark.sparkContext.parallelize(data)
collData=rdd.collect()
print(collData)
for row in collData:
    print(row.name + &quot;,&quot; +str(row.lang))

# RDD Example 2
Person=Row(&quot;name&quot;,&quot;lang&quot;,&quot;state&quot;)
data = [Person(&quot;James,,Smith&quot;,[&quot;Java&quot;,&quot;Scala&quot;,&quot;C++&quot;],&quot;CA&quot;), 
    Person(&quot;Michael,Rose,&quot;,[&quot;Spark&quot;,&quot;Java&quot;,&quot;C++&quot;],&quot;NJ&quot;),
    Person(&quot;Robert,,Williams&quot;,[&quot;CSharp&quot;,&quot;VB&quot;],&quot;NV&quot;)]
rdd=spark.sparkContext.parallelize(data)
collData=rdd.collect()
print(collData)
for person in collData:
    print(person.name + &quot;,&quot; +str(person.lang))

#DataFrame Example 1
columns = [&quot;name&quot;,&quot;languagesAtSchool&quot;,&quot;currentState&quot;]
df=spark.createDataFrame(data)
df.printSchema()
df.show()

collData=df.collect()
print(collData)
for row in collData:
    print(row.name + &quot;,&quot; +str(row.lang))
    
#DataFrame Example 2
columns = [&quot;name&quot;,&quot;languagesAtSchool&quot;,&quot;currentState&quot;]
df=spark.createDataFrame(data).toDF(*columns)
df.printSchema()
</blockquote></pre>
<h4>Conclusion</h4>
In this PySpark Row article you have learned how to use Row class with named argument and defining realtime class and using it on DataFrame &amp; RDD. Hope you like this<br>

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