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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Union and UnionAll Explained</h2>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <!-- <content> --><br>
                        <div class="entry-content clr" itemprop="text">
<p>PySpark union() and unionAll() transformations are used to merge two or more DataFrame&#8217;s of the same schema or structure. In this PySpark article, I will explain both union transformations with PySpark examples.</p>
<p><strong>Dataframe union()</strong> &#8211; <code>union()</code> method of the DataFrame is used to merge two DataFrame&#8217;s of the same structure/schema. If schemas are not the same it returns an error.</p>
<p><strong>DataFrame unionAll()</strong> &#8211; <code>unionAll()</code> is deprecated since Spark &#8220;2.0.0&#8221; version and replaced with union(). </p>
<p><strong>Note: </strong>In other SQL languages, Union eliminates the duplicates but UnionAll merges two datasets including duplicate records. But, in PySpark both behave the same and recommend using DataFrame duplicate() function to remove duplicate rows.</p>
<p>First, let&#8217;s create two DataFrame with the same schema.</p>
<p><strong>First DataFrame</strong></p>
<pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

simpleData = [(&quot;James&quot;,&quot;Sales&quot;,&quot;NY&quot;,90000,34,10000), \
    (&quot;Michael&quot;,&quot;Sales&quot;,&quot;NY&quot;,86000,56,20000), \
    (&quot;Robert&quot;,&quot;Sales&quot;,&quot;CA&quot;,81000,30,23000), \
    (&quot;Maria&quot;,&quot;Finance&quot;,&quot;CA&quot;,90000,24,23000) \
  ]

columns= [&quot;employee_name&quot;,&quot;department&quot;,&quot;state&quot;,&quot;salary&quot;,&quot;age&quot;,&quot;bonus&quot;]
df = spark.createDataFrame(data = simpleData, schema = columns)
df.printSchema()
df.show(truncate=False)
</blockquote></pre>
<p>This yields the below schema and DataFrame output.</p>
<pre><blockquote class="language-python">
root
 |-- employee_name: string (nullable = true)
 |-- department: string (nullable = true)
 |-- state: string (nullable = true)
 |-- salary: long (nullable = true)
 |-- age: long (nullable = true)
 |-- bonus: long (nullable = true)

+-------------+----------+-----+------+---+-----+
|employee_name|department|state|salary|age|bonus|
+-------------+----------+-----+------+---+-----+
|James        |Sales     |NY   |90000 |34 |10000|
|Michael      |Sales     |NY   |86000 |56 |20000|
|Robert       |Sales     |CA   |81000 |30 |23000|
|Maria        |Finance   |CA   |90000 |24 |23000|
+-------------+----------+-----+------+---+-----+
</blockquote></pre>
<p><strong>Second DataFrame</strong></p>
<p>Now, let&#8217;s create a second Dataframe with the new records and some records from the above Dataframe but with the same schema.</p>
<pre><blockquote class="language-python">
simpleData2 = [(&quot;James&quot;,&quot;Sales&quot;,&quot;NY&quot;,90000,34,10000), \
    (&quot;Maria&quot;,&quot;Finance&quot;,&quot;CA&quot;,90000,24,23000), \
    (&quot;Jen&quot;,&quot;Finance&quot;,&quot;NY&quot;,79000,53,15000), \
    (&quot;Jeff&quot;,&quot;Marketing&quot;,&quot;CA&quot;,80000,25,18000), \
    (&quot;Kumar&quot;,&quot;Marketing&quot;,&quot;NY&quot;,91000,50,21000) \
  ]
columns2= [&quot;employee_name&quot;,&quot;department&quot;,&quot;state&quot;,&quot;salary&quot;,&quot;age&quot;,&quot;bonus&quot;]

df2 = spark.createDataFrame(data = simpleData2, schema = columns2)

df2.printSchema()
df2.show(truncate=False)
</blockquote></pre>
<p>This yields below output</p>
<pre><blockquote class="language-python">
+-------------+----------+-----+------+---+-----+
|employee_name|department|state|salary|age|bonus|
+-------------+----------+-----+------+---+-----+
|James        |Sales     |NY   |90000 |34 |10000|
|Maria        |Finance   |CA   |90000 |24 |23000|
|Jen          |Finance   |NY   |79000 |53 |15000|
|Jeff         |Marketing |CA   |80000 |25 |18000|
|Kumar        |Marketing |NY   |91000 |50 |21000|
+-------------+----------+-----+------+---+-----+
</blockquote></pre>
<h2>Merge two or more DataFrames using union</h2>
<p>DataFrame <code>union()</code> method merges two DataFrames and returns the new DataFrame with all rows from two Dataframes regardless of duplicate data.</p>
<pre><blockquote class="language-python">
unionDF = df.union(df2)
unionDF.show(truncate=False)
</blockquote></pre>
<p>As you see below it returns all records.</p>
<pre><blockquote class="language-python">
+-------------+----------+-----+------+---+-----+
|employee_name|department|state|salary|age|bonus|
+-------------+----------+-----+------+---+-----+
|James        |Sales     |NY   |90000 |34 |10000|
|Michael      |Sales     |NY   |86000 |56 |20000|
|Robert       |Sales     |CA   |81000 |30 |23000|
|Maria        |Finance   |CA   |90000 |24 |23000|
|James        |Sales     |NY   |90000 |34 |10000|
|Maria        |Finance   |CA   |90000 |24 |23000|
|Jen          |Finance   |NY   |79000 |53 |15000|
|Jeff         |Marketing |CA   |80000 |25 |18000|
|Kumar        |Marketing |NY   |91000 |50 |21000|
+-------------+----------+-----+------+---+-----+
</blockquote></pre>
<h2>Merge DataFrames using unionAll</h2>
<p>DataFrame <code>unionAll()</code> method is deprecated since PySpark &#8220;2.0.0&#8221; version and recommends using the union() method. </p>
<pre><blockquote class="language-python">
unionAllDF = df.unionAll(df2)
unionAllDF.show(truncate=False)
</blockquote></pre>
<p>Returns the same output as above.</p>
<h2>Merge without Duplicates</h2>
<p>Since the union() method returns all rows without distinct records, we will use the <code>distinct()</code> function to return just one record when duplicate exists.</p>
<pre><blockquote class="language-python">
disDF = df.union(df2).distinct()
disDF.show(truncate=False)
</blockquote></pre>
<p>Yields below output. As you see, this returns only distinct rows.</p>
<pre><blockquote class="language-python">
+-------------+----------+-----+------+---+-----+
|employee_name|department|state|salary|age|bonus|
+-------------+----------+-----+------+---+-----+
|James        |Sales     |NY   |90000 |34 |10000|
|Maria        |Finance   |CA   |90000 |24 |23000|
|Kumar        |Marketing |NY   |91000 |50 |21000|
|Michael      |Sales     |NY   |86000 |56 |20000|
|Jen          |Finance   |NY   |79000 |53 |15000|
|Jeff         |Marketing |CA   |80000 |25 |18000|
|Robert       |Sales     |CA   |81000 |30 |23000|
+-------------+----------+-----+------+---+-----+
</blockquote></pre>
<h2>Complete Example of DataFrame Union</h2>
<pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

simpleData = [(&quot;James&quot;,&quot;Sales&quot;,&quot;NY&quot;,90000,34,10000), \
    (&quot;Michael&quot;,&quot;Sales&quot;,&quot;NY&quot;,86000,56,20000), \
    (&quot;Robert&quot;,&quot;Sales&quot;,&quot;CA&quot;,81000,30,23000), \
    (&quot;Maria&quot;,&quot;Finance&quot;,&quot;CA&quot;,90000,24,23000) \
  ]

columns= [&quot;employee_name&quot;,&quot;department&quot;,&quot;state&quot;,&quot;salary&quot;,&quot;age&quot;,&quot;bonus&quot;]
df = spark.createDataFrame(data = simpleData, schema = columns)
df.printSchema()
df.show(truncate=False)

simpleData2 = [(&quot;James&quot;,&quot;Sales&quot;,&quot;NY&quot;,90000,34,10000), \
    (&quot;Maria&quot;,&quot;Finance&quot;,&quot;CA&quot;,90000,24,23000), \
    (&quot;Jen&quot;,&quot;Finance&quot;,&quot;NY&quot;,79000,53,15000), \
    (&quot;Jeff&quot;,&quot;Marketing&quot;,&quot;CA&quot;,80000,25,18000), \
    (&quot;Kumar&quot;,&quot;Marketing&quot;,&quot;NY&quot;,91000,50,21000) \
  ]
columns2= [&quot;employee_name&quot;,&quot;department&quot;,&quot;state&quot;,&quot;salary&quot;,&quot;age&quot;,&quot;bonus&quot;]

df2 = spark.createDataFrame(data = simpleData2, schema = columns2)

df2.printSchema()
df2.show(truncate=False)

unionDF = df.union(df2)
unionDF.show(truncate=False)
disDF = df.union(df2).distinct()
disDF.show(truncate=False)

unionAllDF = df.unionAll(df2)
unionAllDF.show(truncate=False)
</blockquote></pre>
<p>This complete example is also available at the <a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-union.py">GitHub</a> project.</p>
<h2>Conclusion</h2>
<p>In this PySpark article, you have learned how to merge two or more DataFrame&#8217;s of the same schema into single DataFrame using Union method and learned the unionAll() is deprecates and use duplicate() to duplicate the same elements.</p>
<p>Happy learning !!</p>


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