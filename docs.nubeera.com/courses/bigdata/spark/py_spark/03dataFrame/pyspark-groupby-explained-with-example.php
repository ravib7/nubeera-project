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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Groupby Explained with Example</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> --><br>
                    <div class="entry-content clr" itemprop="text">
                        <p>Similar to SQL <code>GROUP BY</code> clause, PySpark <code>groupBy()</code> function is used to collect the identical data into groups on DataFrame and perform aggregate functions on the grouped data. In this article, I will explain several <code>groupBy()</code> examples using PySpark (Spark with Python). </p>
                        <p><strong>Syntax:</strong></p>
                        <pre><blockquote class="language-python">
groupBy(col1 : scala.Predef.String, cols : scala.Predef.String*) :
      org.apache.spark.sql.RelationalGroupedDataset
</blockquote></pre>
                        <p>When we perform <code>groupBy()</code> on PySpark Dataframe, it returns <code>GroupedData</code> object which contains below aggregate functions.</p>
                        <p><code>count() -</code> Returns the count of rows for each group.</p>
                        <p><code>mean() -</code> Returns the mean of values for each group.</p>
                        <p><code>max() -</code> Returns the maximum of values for each group. </p>
                        <p><code>min() -</code> Returns the minimum of values for each group.</p>
                        <p><code>sum() -</code> Returns the total for values for each group. </p>
                        <p> <code>avg() -</code> Returns the average for values for each group. </p>
                        <p><code> agg() -</code> Using agg() function, we can calculate more than one aggregate at a time.</p>
                        <p><code>pivot() -</code> This function is used to Pivot the DataFrame which I will not be covered in this article as I already have a dedicated article for Pivot &amp; Unpivot DataFrame.</p>
                        <h2>Preparing Data &amp; creating DataFrame</h2>
                        <p>Before we start, let’s &nbsp;create the DataFrame&nbsp;from a sequence of the data to work with. This DataFrame contains columns “<code>employee_name</code>”, “<code>department</code>”, &#8220;<code>state</code>&#8220;, “<code>salary</code>”, &#8220;<code>age</code>&#8221; and &#8220;<code>bonus</code>&#8221; columns.</p>
                        <p>We will use this PySpark DataFrame to run groupBy() on &#8220;department&#8221; columns and calculate aggregates like minimum, maximum, average, total salary for each group using min(), max() and sum() aggregate functions respectively. and finally, we will also see how to do group and aggregate on multiple columns.</p>
                        <pre><blockquote class="language-python">
simpleData = [(&quot;James&quot;,&quot;Sales&quot;,&quot;NY&quot;,90000,34,10000),
    (&quot;Michael&quot;,&quot;Sales&quot;,&quot;NY&quot;,86000,56,20000),
    (&quot;Robert&quot;,&quot;Sales&quot;,&quot;CA&quot;,81000,30,23000),
    (&quot;Maria&quot;,&quot;Finance&quot;,&quot;CA&quot;,90000,24,23000),
    (&quot;Raman&quot;,&quot;Finance&quot;,&quot;CA&quot;,99000,40,24000),
    (&quot;Scott&quot;,&quot;Finance&quot;,&quot;NY&quot;,83000,36,19000),
    (&quot;Jen&quot;,&quot;Finance&quot;,&quot;NY&quot;,79000,53,15000),
    (&quot;Jeff&quot;,&quot;Marketing&quot;,&quot;CA&quot;,80000,25,18000),
    (&quot;Kumar&quot;,&quot;Marketing&quot;,&quot;NY&quot;,91000,50,21000)
  ]

schema = [&quot;employee_name&quot;,&quot;department&quot;,&quot;state&quot;,&quot;salary&quot;,&quot;age&quot;,&quot;bonus&quot;]
df = spark.createDataFrame(data=simpleData, schema = schema)
df.printSchema()
df.show(truncate=False)
</blockquote></pre>
                        <p>Yields below output.</p>
                        <pre><blockquote class="language-python">
+-------------+----------+-----+------+---+-----+
|employee_name|department|state|salary|age|bonus|
+-------------+----------+-----+------+---+-----+
|        James|     Sales|   NY| 90000| 34|10000|
|      Michael|     Sales|   NY| 86000| 56|20000|
|       Robert|     Sales|   CA| 81000| 30|23000|
|        Maria|   Finance|   CA| 90000| 24|23000|
|        Raman|   Finance|   CA| 99000| 40|24000|
|        Scott|   Finance|   NY| 83000| 36|19000|
|          Jen|   Finance|   NY| 79000| 53|15000|
|         Jeff| Marketing|   CA| 80000| 25|18000|
|        Kumar| Marketing|   NY| 91000| 50|21000|
+-------------+----------+-----+------+---+-----+
</blockquote></pre>
                        <h2>PySpark groupBy and aggregate on DataFrame columns</h2>
                        <p>Let&#8217;s do the <code>groupBy()</code> on <code>department</code> column of DataFrame and then find the sum of salary for each department using <code>sum() </code>aggregate function.</p>
                        <pre><blockquote class="language-python">
df.groupBy(&quot;department&quot;).sum(&quot;salary&quot;).show(truncate=False)
+----------+-----------+
|department|sum(salary)|
+----------+-----------+
|Sales     |257000     |
|Finance   |351000     |
|Marketing |171000     |
+----------+-----------+
</blockquote></pre>
                        <p>Similarly, we can calculate the number of employee in each department using <code>count()</code></p>
                        <pre><blockquote class="language-python">
df.groupBy(&quot;department&quot;).count()
</blockquote></pre>
                        <p>Calculate the minimum salary of each department using <code>min()</code> </p>
                        <pre><blockquote class="language-python">
df.groupBy(&quot;department&quot;).min(&quot;salary&quot;)
</blockquote></pre>
                        <p>Calculate the maximin salary of each department using <code>max()</code> </p>
                        <pre><blockquote class="language-python">
df.groupBy(&quot;department&quot;).max(&quot;salary&quot;)
</blockquote></pre>
                        <p>Calculate the average salary of each department using <code>avg()</code> </p>
                        <pre><blockquote class="language-scala">
                            
df.groupBy(&quot;department&quot;).avg( &quot;salary&quot;)
</blockquote></pre>
                        <p>Calculate the mean salary of each department using <code>mean()</code> </p>
                        <pre><blockquote class="language-python">
df.groupBy(&quot;department&quot;).mean( &quot;salary&quot;) 
</blockquote></pre>
                        <h2>PySpark groupBy and aggregate on multiple columns </h2>
                        <p>Similarly, we can also run groupBy and aggregate on two or more DataFrame columns, below example does group by on <code>department</code>,<code>state</code> and does sum() on <code>salary</code> and <code>bonus</code> columns.</p>
                        <pre><blockquote class="language-python">
//GroupBy on multiple columns
df.groupBy(&quot;department&quot;,&quot;state&quot;) \
    .sum(&quot;salary&quot;,&quot;bonus&quot;) \
    .show(false)
</blockquote></pre>
                        <p>This yields the below output.</p>
                        <pre><blockquote class="language-python">
+----------+-----+-----------+----------+
|department|state|sum(salary)|sum(bonus)|
+----------+-----+-----------+----------+
|Finance   |NY   |162000     |34000     |
|Marketing |NY   |91000      |21000     |
|Sales     |CA   |81000      |23000     |
|Marketing |CA   |80000      |18000     |
|Finance   |CA   |189000     |47000     |
|Sales     |NY   |176000     |30000     |
+----------+-----+-----------+----------+
</blockquote></pre>
                        <p>similarly, we can run group by and aggregate on tow or more columns for other aggregate functions, please refer below source code for example.</p>
                        <h2>Running more aggregates at a time</h2>
                        <p>Using <code>agg()</code> aggregate function we can calculate many aggregations at a time on a single statement using PySpark SQL aggregate functions sum(), avg(), min(), max() mean() e.t.c. In order to use these, we should import <code>&quot;from pyspark.sql.functions import sum,avg,max,min,mean,count&quot;</code></p>
                        <pre><blockquote class="language-python">
df.groupBy(&quot;department&quot;) \
    .agg(sum(&quot;salary&quot;).alias(&quot;sum_salary&quot;), \
         avg(&quot;salary&quot;).alias(&quot;avg_salary&quot;), \
         sum(&quot;bonus&quot;).alias(&quot;sum_bonus&quot;), \
         max(&quot;bonus&quot;).alias(&quot;max_bonus&quot;) \
     ) \
    .show(truncate=False)
</blockquote></pre>
                        <p>This example does group on <code>department</code> column and calculates <code>sum()</code> and <code>avg()</code> of <code>salary</code> for each department and calculates <code>sum()</code> and <code>max()</code> of bonus for each department.</p>
                        <pre><blockquote class="language-python">
+----------+----------+-----------------+---------+---------+
|department|sum_salary|avg_salary       |sum_bonus|max_bonus|
+----------+----------+-----------------+---------+---------+
|Sales     |257000    |85666.66666666667|53000    |23000    |
|Finance   |351000    |87750.0          |81000    |24000    |
|Marketing |171000    |85500.0          |39000    |21000    |
+----------+----------+-----------------+---------+---------+
</blockquote></pre>
                        <h2>Using filter on aggregate data</h2>
                        <p>Similar to SQL &#8220;HAVING&#8221; clause, On PySpark DataFrame we can use either <a href="https://sparkbyexamples.com/pyspark/pyspark-dataframe-filter/">where()</a> or <a href="https://sparkbyexamples.com/pyspark/pyspark-dataframe-filter/">filter()</a> function to filter the rows of aggregated data.</p>
                        <pre><blockquote class="language-python">
df.groupBy(&quot;department&quot;) \
    .agg(sum(&quot;salary&quot;).alias(&quot;sum_salary&quot;), \
      avg(&quot;salary&quot;).alias(&quot;avg_salary&quot;), \
      sum(&quot;bonus&quot;).alias(&quot;sum_bonus&quot;), \
      max(&quot;bonus&quot;).alias(&quot;max_bonus&quot;)) \
    .where(col(&quot;sum_bonus&quot;) &gt;= 50000) \
    .show(truncate=False)
</blockquote></pre>
                        <p>This removes the sum of a bonus that has less than 50000 and yields below output.</p>
                        <pre><blockquote class="language-python">
+----------+----------+-----------------+---------+---------+
|department|sum_salary|avg_salary       |sum_bonus|max_bonus|
+----------+----------+-----------------+---------+---------+
|Sales     |257000    |85666.66666666667|53000    |23000    |
|Finance   |351000    |87750.0          |81000    |24000    |
+----------+----------+-----------------+---------+---------+
</blockquote></pre>
                        <h2>PySpark groupBy Example Source code</h2>
                        <pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.functions import col,sum,avg,max

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

simpleData = [(&quot;James&quot;,&quot;Sales&quot;,&quot;NY&quot;,90000,34,10000),
    (&quot;Michael&quot;,&quot;Sales&quot;,&quot;NY&quot;,86000,56,20000),
    (&quot;Robert&quot;,&quot;Sales&quot;,&quot;CA&quot;,81000,30,23000),
    (&quot;Maria&quot;,&quot;Finance&quot;,&quot;CA&quot;,90000,24,23000),
    (&quot;Raman&quot;,&quot;Finance&quot;,&quot;CA&quot;,99000,40,24000),
    (&quot;Scott&quot;,&quot;Finance&quot;,&quot;NY&quot;,83000,36,19000),
    (&quot;Jen&quot;,&quot;Finance&quot;,&quot;NY&quot;,79000,53,15000),
    (&quot;Jeff&quot;,&quot;Marketing&quot;,&quot;CA&quot;,80000,25,18000),
    (&quot;Kumar&quot;,&quot;Marketing&quot;,&quot;NY&quot;,91000,50,21000)
  ]

schema = [&quot;employee_name&quot;,&quot;department&quot;,&quot;state&quot;,&quot;salary&quot;,&quot;age&quot;,&quot;bonus&quot;]
df = spark.createDataFrame(data=simpleData, schema = schema)
df.printSchema()
df.show(truncate=False)

df.groupBy(&quot;department&quot;).sum(&quot;salary&quot;).show(truncate=False)

df.groupBy(&quot;department&quot;).count().show(truncate=False)


df.groupBy(&quot;department&quot;,&quot;state&quot;) \
    .sum(&quot;salary&quot;,&quot;bonus&quot;) \
   .show(truncate=False)

df.groupBy(&quot;department&quot;) \
    .agg(sum(&quot;salary&quot;).alias(&quot;sum_salary&quot;), \
         avg(&quot;salary&quot;).alias(&quot;avg_salary&quot;), \
         sum(&quot;bonus&quot;).alias(&quot;sum_bonus&quot;), \
         max(&quot;bonus&quot;).alias(&quot;max_bonus&quot;) \
     ) \
    .show(truncate=False)
    
df.groupBy(&quot;department&quot;) \
    .agg(sum(&quot;salary&quot;).alias(&quot;sum_salary&quot;), \
      avg(&quot;salary&quot;).alias(&quot;avg_salary&quot;), \
      sum(&quot;bonus&quot;).alias(&quot;sum_bonus&quot;), \
      max(&quot;bonus&quot;).alias(&quot;max_bonus&quot;)) \
    .where(col(&quot;sum_bonus&quot;) &gt;= 50000) \
    .show(truncate=False)
</blockquote></pre>
                        <p>This example is also available at <a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-groupby.py">GitHub PySpark Examples</a> project for reference.</p>
                        <h2>Conclusion</h2>
                        <p>In this tutorial, you have learned how to use <code>groupBy()</code> and aggregate functions on PySpark DataFrame and also learned how to run these on multiple columns and finally filtering data on the aggregated columns.</p>
                        <p>Thanks for reading. If you like it, please do share the article by following the below social links and any comments or suggestions are welcome in the comments sections!&nbsp; </p>
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