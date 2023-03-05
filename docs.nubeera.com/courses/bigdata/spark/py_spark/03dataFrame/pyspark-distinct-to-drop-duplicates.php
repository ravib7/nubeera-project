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

        p {
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark – Distinct to Drop Duplicate Rows</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> --><br>
                    <div class="entry-content clr" itemprop="text">
                        <p>PySpark <code>distinct()</code> function is used to drop/remove the duplicate rows (all columns) from DataFrame and <code>dropDuplicates()</code> is used to drop rows based on selected (one or multiple) columns. In this article, you will learn how to use distinct() and dropDuplicates() functions with PySpark example.</p>
                        <p>Before we start, first let&#8217;s create a DataFrame with some duplicate rows and values on a few columns. We use this DataFrame to demonstrate how to get distinct multiple columns.</p>
                        <pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.functions import expr
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

data = [(&quot;James&quot;, &quot;Sales&quot;, 3000), \
    (&quot;Michael&quot;, &quot;Sales&quot;, 4600), \
    (&quot;Robert&quot;, &quot;Sales&quot;, 4100), \
    (&quot;Maria&quot;, &quot;Finance&quot;, 3000), \
    (&quot;James&quot;, &quot;Sales&quot;, 3000), \
    (&quot;Scott&quot;, &quot;Finance&quot;, 3300), \
    (&quot;Jen&quot;, &quot;Finance&quot;, 3900), \
    (&quot;Jeff&quot;, &quot;Marketing&quot;, 3000), \
    (&quot;Kumar&quot;, &quot;Marketing&quot;, 2000), \
    (&quot;Saif&quot;, &quot;Sales&quot;, 4100) \
  ]
columns= [&quot;employee_name&quot;, &quot;department&quot;, &quot;salary&quot;]
df = spark.createDataFrame(data = data, schema = columns)
df.printSchema()
df.show(truncate=False)
</blockquote></pre>
                        <p>Yields below output</p>
                        <pre><blockquote class="language-python">
+-------------+----------+------+
|employee_name|department|salary|
+-------------+----------+------+
|James        |Sales     |3000  |
|Michael      |Sales     |4600  |
|Robert       |Sales     |4100  |
|Maria        |Finance   |3000  |
|James        |Sales     |3000  |
|Scott        |Finance   |3300  |
|Jen          |Finance   |3900  |
|Jeff         |Marketing |3000  |
|Kumar        |Marketing |2000  |
|Saif         |Sales     |4100  |
+-------------+----------+------+
</blockquote></pre>
                        <p>On the above table, record with employer name <code>Robert</code> has duplicate rows, As you notice we have 2 rows that have duplicate values on all columns and we have 4 rows that have duplicate values on <code>department</code> and <code>salary</code> columns.</p>
                        <h2>1. Get Distinct Rows (By Comparing All Columns) </h2>
                        <p>On the above DataFrame, we have a total of 10 rows with 2 rows having all values duplicated, performing distinct on this DataFrame should get us 9 after removing 1 duplicate row.</p>
                        <pre><blockquote class="language-scala">
                            
distinctDF = df.distinct()
print(&quot;Distinct count: &quot;+str(distinctDF.count()))
distinctDF.show(truncate=False)
</blockquote></pre>
                        <p><code>distinct()</code> function on DataFrame returns a new DataFrame after removing the duplicate records. This example yields the below output.</p>
                        <pre><blockquote class="language-python">
Distinct count: 9
+-------------+----------+------+
|employee_name|department|salary|
+-------------+----------+------+
|James        |Sales     |3000  |
|Michael      |Sales     |4600  |
|Maria        |Finance   |3000  |
|Robert       |Sales     |4100  |
|Saif         |Sales     |4100  |
|Scott        |Finance   |3300  |
|Jeff         |Marketing |3000  |
|Jen          |Finance   |3900  |
|Kumar        |Marketing |2000  |
+-------------+----------+------+
</blockquote></pre>
                        <p>Alternatively, you can also run <code>dropDuplicates()</code> function which returns a new&nbsp;DataFrame&nbsp;after removing duplicate rows.</p>
                        <pre><blockquote class="language-scala">
df2 = df.dropDuplicates()
print(&quot;Distinct count: &quot;+str(df2.count()))
df2.show(truncate=False)
</blockquote></pre>
                        <h2>2. PySpark Distinct of Selected Multiple Columns</h2>
                        <p>PySpark doesn&#8217;t have a distinct method which takes columns that should run distinct on (drop duplicate rows on selected multiple columns) however, it provides another signature of <code>dropDuplicates()</code> function which takes multiple columns to eliminate duplicates.</p>
                        <p>Note that calling dropDuplicates() on DataFrame returns a new DataFrame with duplicate rows removed. </p>
                        <pre><blockquote class="language-scala">
dropDisDF = df.dropDuplicates([&quot;department&quot;,&quot;salary&quot;])
print(&quot;Distinct count of department &amp; salary : &quot;+str(dropDisDF.count()))
dropDisDF.show(truncate=False)
</blockquote></pre>
                        <p>Yields below output. If you notice the output, It dropped 2 records that are duplicate.</p>
                        <pre><blockquote class="language-python">
Distinct count of department &amp; salary : 8
+-------------+----------+------+
|employee_name|department|salary|
+-------------+----------+------+
|Jen          |Finance   |3900  |
|Maria        |Finance   |3000  |
|Scott        |Finance   |3300  |
|Michael      |Sales     |4600  |
|Kumar        |Marketing |2000  |
|Robert       |Sales     |4100  |
|James        |Sales     |3000  |
|Jeff         |Marketing |3000  |
+-------------+----------+------+
</blockquote></pre>
                        <h2>3. Source Code to Get Distinct Rows</h2>
                        <pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.functions import expr
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

data = [(&quot;James&quot;, &quot;Sales&quot;, 3000), \
    (&quot;Michael&quot;, &quot;Sales&quot;, 4600), \
    (&quot;Robert&quot;, &quot;Sales&quot;, 4100), \
    (&quot;Maria&quot;, &quot;Finance&quot;, 3000), \
    (&quot;James&quot;, &quot;Sales&quot;, 3000), \
    (&quot;Scott&quot;, &quot;Finance&quot;, 3300), \
    (&quot;Jen&quot;, &quot;Finance&quot;, 3900), \
    (&quot;Jeff&quot;, &quot;Marketing&quot;, 3000), \
    (&quot;Kumar&quot;, &quot;Marketing&quot;, 2000), \
    (&quot;Saif&quot;, &quot;Sales&quot;, 4100) \
  ]
columns= [&quot;employee_name&quot;, &quot;department&quot;, &quot;salary&quot;]
df = spark.createDataFrame(data = data, schema = columns)
df.printSchema()
df.show(truncate=False)

#Distinct
distinctDF = df.distinct()
print(&quot;Distinct count: &quot;+str(distinctDF.count()))
distinctDF.show(truncate=False)

#Drop duplicates
df2 = df.dropDuplicates()
print(&quot;Distinct count: &quot;+str(df2.count()))
df2.show(truncate=False)

#Drop duplicates on selected columns
dropDisDF = df.dropDuplicates([&quot;department&quot;,&quot;salary&quot;])
print(&quot;Distinct count of department salary : &quot;+str(dropDisDF.count()))
dropDisDF.show(truncate=False)
}
</blockquote></pre>
                        <p>The complete example is available at <a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-distinct.py">GitHub</a> for reference.</p>
                        <h2>Conclusion</h2>
                        <p>In this PySpark SQL article, you have learned <code>distinct()</code> method which is used to get the distinct values of rows (all columns) and also learned how to use <code>dropDuplicates()</code> to get the distinct and finally learned using dropDuplicates() function to get distinct of multiple columns.</p>
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