<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra PySpark</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra PySpark">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <link id="theme-style" rel="stylesheet" href="../../../../../assets/css/theme.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                

                <strong class="px-2" style="font-size: 1.125rem;">PySpark - SQL Functions</strong><br><br>
                <ul>
                    <li><a href="index.php">PySpark – Aggregate Functions</a></li>
                    <li><a href="pyspark-window-functions.php">PySpark – Window Functions</a></li>
                    <li><a href="pyspark-sql-date-and-timestamp-functions.php">PySpark – Date and Timestamp Functions</a></li>
                    <li><a href="pyspark-json-functions-with-examples.php">PySpark – JSON Functions</a></li>
                </ul>

                
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Aggregate Functions with Examples</h3>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">

                    <!-- <content> --><br>
                    <div class="entry-content clr" itemprop="text">
                        PySpark provides built-in standard Aggregate functions defines in DataFrame API, these come in handy when we need to make aggregate operations on DataFrame columns. Aggregate functions&nbsp;operate on a group of rows and calculate a single return value for every group. <br>
                        All these aggregate functions accept input as, Column type or column name in a string and several other arguments based on the function and return Column type.<br>
                        When possible try to leverage standard library as they are little bit more compile-time safety, handles null and perform better when compared to UDF’s. If your application is critical on performance try to avoid using custom UDF at all costs as these are not guarantee on performance.<br>
                        <h3>PySpark Aggregate Functions</h3>
                        PySpark SQL Aggregate functions are grouped as “agg_funcs” in Pyspark. Below is a list of functions defined under this group. Click on each link to learn with example.<br>

                        <ul>
                            <li><a href="#approx-count-distinct">approx_count_distinct</a></li>
                            <li><a href="#avg">avg</a></li>
                            <li><a href="#collect-list">collect_list</a></li>
                            <li><a href="#collect-set">collect_set</a></li>
                            <li><a href="#countDistinct">countDistinct</a></li>
                            <li><a href="#count">count</a></li>
                            <li><a href="#grouping">grouping</a></li>
                            <li><a href="#first">first</a></li>
                            <li><a href="#last">last</a></li>
                            <li><a href="#kurtosis">kurtosis</a></li>
                            <li><a href="#max">max</a></li>
                            <li><a href="#min">min</a></li>
                            <li><a href="#mean">mean</a></li>
                            <li><a href="#skewness">skewness</a></li>
                            <li><a href="#stddev">stddev</a></li>
                            <li><a href="#stddev">stddev_samp</a></li>
                            <li><a href="#stddev">stddev_pop</a></li>
                            <li><a href="#sum">sum</a></li>
                            <li><a href="#sumDistinct">sumDistinct</a></li>
                            <li><a href="#variance">variance</a>, var_samp, var_pop</li>
                        </ul>
                        <h3>PySpark Aggregate Functions Examples</h3>
                        First, let&#8217;s create a DataFrame to work with PySpark aggregate functions. All examples provided here are also available at <a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-aggregate.py">PySpark Examples GitHub </a>project.<br>
                        <code class="language-scala">
                            <pre>
simpleData = [(&quot;James&quot;, &quot;Sales&quot;, 3000),
    (&quot;Michael&quot;, &quot;Sales&quot;, 4600),
    (&quot;Robert&quot;, &quot;Sales&quot;, 4100),
    (&quot;Maria&quot;, &quot;Finance&quot;, 3000),
    (&quot;James&quot;, &quot;Sales&quot;, 3000),
    (&quot;Scott&quot;, &quot;Finance&quot;, 3300),
    (&quot;Jen&quot;, &quot;Finance&quot;, 3900),
    (&quot;Jeff&quot;, &quot;Marketing&quot;, 3000),
    (&quot;Kumar&quot;, &quot;Marketing&quot;, 2000),
    (&quot;Saif&quot;, &quot;Sales&quot;, 4100)
  ]
schema = [&quot;employee_name&quot;, &quot;department&quot;, &quot;salary&quot;]
df = spark.createDataFrame(data=simpleData, schema = schema)
df.printSchema()
df.show(truncate=False)
</pre>
                        </code>
                        Yields below output.<br>
                        <code class="language-scala">
                            <pre>
+-------------+----------+------+
|employee_name|department|salary|
+-------------+----------+------+
|        James|     Sales|  3000|
|      Michael|     Sales|  4600|
|       Robert|     Sales|  4100|
|        Maria|   Finance|  3000|
|        James|     Sales|  3000|
|        Scott|   Finance|  3300|
|          Jen|   Finance|  3900|
|         Jeff| Marketing|  3000|
|        Kumar| Marketing|  2000|
|         Saif|     Sales|  4100|
+-------------+----------+------+
</pre>
                        </code>
                        Now let&#8217;s see how to aggregate data in PySpark.<br>
                        <h3 id="approx-count-distinct">approx_count_distinct Aggregate Function </h3>
                        In PySpark <code>approx_count_distinct()</code> function returns the count of distinct items in a group.<br>
                        <code class="language-scala">
                            <pre>
//approx_count_distinct()
print(&quot;approx_count_distinct: &quot; + \
      str(df.select(approx_count_distinct(&quot;salary&quot;)).collect()[0][0]))

//Prints approx_count_distinct: 6
</pre>
                        </code>
                        <h3 id="avg">avg (average) Aggregate Function </h3>
                        <code>avg()</code> function returns the average of values in the input column.<br>
                        <code class="language-scala">
                            <pre>
//avg
print(&quot;avg: &quot; + str(df.select(avg(&quot;salary&quot;)).collect()[0][0]))

//Prints avg: 3400.0
</pre>
                        </code>
                        <h3 id="collect-list">collect_list Aggregate Function </h3>
                        <code>collect_list()</code> function returns all values from an input column with duplicates.<br>
                        <code class="language-scala">
                            <pre>
//collect_list
df.select(collect_list(&quot;salary&quot;)).show(truncate=False)

+------------------------------------------------------------+
|collect_list(salary)                                        |
+------------------------------------------------------------+
|[3000, 4600, 4100, 3000, 3000, 3300, 3900, 3000, 2000, 4100]|
+------------------------------------------------------------+
</pre>
                        </code>
                        <h3 id="collect-set">collect_set Aggregate Function</h3>
                        <code>collect_set()</code> function returns all values from an input column with duplicate values eliminated. <br>
                        <code class="language-scala">
                            <pre>
//collect_set
df.select(collect_set(&quot;salary&quot;)).show(truncate=False)

+------------------------------------+
|collect_set(salary)                 |
+------------------------------------+
|[4600, 3000, 3900, 4100, 3300, 2000]|
+------------------------------------+
</pre>
                        </code>
                        <h3 id="countDistinct">countDistinct Aggregate Function</h3>
                        <code>countDistinct()</code> function returns the number of distinct elements in a columns<br>
                        <code class="language-scala">
                            <pre>
//countDistinct
df2 = df.select(countDistinct(&quot;department&quot;, &quot;salary&quot;))
df2.show(truncate=False)
print(&quot;Distinct Count of Department &amp; Salary: &quot;+str(df2.collect()[0][0]))
</pre>
                        </code>
                        <h3 id="count">count function</h3>
                        <code>count()</code> function returns number of elements in a column. <br>
                        <code class="language-scala">
                            <pre>
print(&quot;count: &quot;+str(df.select(count(&quot;salary&quot;)).collect()[0]))

Prints county: 10
</pre>
                        </code>
                        <h3 id="grouping">grouping function</h3>
                        <code>grouping()</code> Indicates whether a given input column is aggregated or not. returns 1 for aggregated or 0 for not aggregated in the result. If you try grouping directly on the salary column you will get below error. <br>
                        <code class="language-scala">
                            <pre>
Exception in thread &quot;main&quot; org.apache.spark.sql.AnalysisException:
  // grouping() can only be used with GroupingSets/Cube/Rollup
</pre>
                        </code>
                        <h3 id="first">first function</h3>
                        <code>first()</code> function returns the first element in a column when ignoreNulls is set to true, it returns the first non-null element. <br>
                        <code class="language-scala">
                            <pre>
//first
df.select(first(&quot;salary&quot;)).show(truncate=False)

+--------------------+
|first(salary, false)|
+--------------------+
|3000                |
+--------------------+
</pre>
                        </code>
                        <h3 id="last">last function</h3>
                        <code>last()</code> function returns the last element in a column. when ignoreNulls is set to true, it returns the last non-null element. <br>
                        <code class="language-scala">
                            <pre>
//last
df.select(last(&quot;salary&quot;)).show(truncate=False)

+-------------------+
|last(salary, false)|
+-------------------+
|4100               |
+-------------------+
</pre>
                        </code>
                        <h3 id="kurtosis">kurtosis function</h3>
                        <code>kurtosis()</code> function returns the kurtosis of the values in a group. <br>
                        <code class="language-scala">
                            <pre>
df.select(kurtosis(&quot;salary&quot;)).show(truncate=False)

+-------------------+
|kurtosis(salary)   |
+-------------------+
|-0.6467803030303032|
+-------------------+
</pre>
                        </code>
                        <h3 id="max">max function</h3>
                        <code>max()</code> function returns the maximum value in a column. <br>
                        <code class="language-scala">
                            <pre>
df.select(max(&quot;salary&quot;)).show(truncate=False)

+-----------+
|max(salary)|
+-----------+
|4600       |
+-----------+
</pre>
                        </code>
                        <h3 id="min">min function</h3>
                        <code>min()</code> function <br>
                        <code class="language-scala">
                            <pre>
df.select(min(&quot;salary&quot;)).show(truncate=False)

+-----------+
|min(salary)|
+-----------+
|2000       |
+-----------+
</pre>
                        </code>
                        <h3 id="mean">mean function</h3>
                        <code>mean()</code> function returns the average of the values in a column. Alias for Avg <br>
                        <code class="language-scala">
                            <pre>
df.select(mean(&quot;salary&quot;)).show(truncate=False)

+-----------+
|avg(salary)|
+-----------+
|3400.0     |
+-----------+
</pre>
                        </code>
                        <h3 id="skewness">skewness function</h3>
                        <code>skewness()</code> function returns the skewness of the values in a group. <br>
                        <code class="language-scala">
                            <pre>
df.select(skewness(&quot;salary&quot;)).show(truncate=False)

+--------------------+
|skewness(salary)    |
+--------------------+
|-0.12041791181069571|
+--------------------+
</pre>
                        </code>
                        <h3 id="stddev">stddev(), stddev_samp() and stddev_pop()</h3>
                        <code>stddev()</code> alias for <code>stddev_samp</code>.</p>
                        <code>stddev_samp()</code> function returns the sample standard deviation of values in a column. <br>
                        <code>stddev_pop()</code> function returns the population standard deviation of the values in a column. <br>
                        <code class="language-scala">
                            <pre>
df.select(stddev(&quot;salary&quot;), stddev_samp(&quot;salary&quot;), \
    stddev_pop(&quot;salary&quot;)).show(truncate=False)

+-------------------+-------------------+------------------+
|stddev_samp(salary)|stddev_samp(salary)|stddev_pop(salary)|
+-------------------+-------------------+------------------+
|765.9416862050705  |765.9416862050705  |726.636084983398  |
+-------------------+-------------------+------------------+
</pre>
                        </code>
                        <h3 id="sum">sum function</h3>
                        <code>sum()</code> function Returns the sum of all values in a column. <br>
                        <code class="language-scala">
                            <pre>
df.select(sum(&quot;salary&quot;)).show(truncate=False)

+-----------+
|sum(salary)|
+-----------+
|34000      |
+-----------+
</pre>
                        </code>
                        <h3 id="sumDistinct">sumDistinct function</h3>
                        <code>sumDistinct()</code> function returns the sum of all distinct values in a column. <br>
                        <code class="language-scala">
                            <pre>
df.select(sumDistinct(&quot;salary&quot;)).show(truncate=False)

+--------------------+
|sum(DISTINCT salary)|
+--------------------+
|20900               |
+--------------------+
</pre>
                        </code>
                        <h3 id="variance">variance(), var_samp(), var_pop()</h3>
                        <code>variance() </code> alias for <code>var_samp</code> <br>
                        <code>var_samp()</code> function returns the unbiased variance of the values in a column.<br>
                        <code>var_pop()</code> function returns the population variance of the values in a column. <br>
                        <code class="language-scala">
                            <pre>
df.select(variance(&quot;salary&quot;),var_samp(&quot;salary&quot;),var_pop(&quot;salary&quot;)) \
  .show(truncate=False)

+-----------------+-----------------+---------------+
|var_samp(salary) |var_samp(salary) |var_pop(salary)|
+-----------------+-----------------+---------------+
|586666.6666666666|586666.6666666666|528000.0       |
+-----------------+-----------------+---------------+
</pre>
                        </code>
                        <h3>Source code of PySpark Aggregate examples</h3>
                        <code class="language-scala">
                            <pre>
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.functions import approx_count_distinct,collect_list
from pyspark.sql.functions import collect_set,sum,avg,max,countDistinct,count
from pyspark.sql.functions import first, last, kurtosis, min, mean, skewness 
from pyspark.sql.functions import stddev, stddev_samp, stddev_pop, sumDistinct
from pyspark.sql.functions import variance,var_samp,  var_pop

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

simpleData = [(&quot;James&quot;, &quot;Sales&quot;, 3000),
    (&quot;Michael&quot;, &quot;Sales&quot;, 4600),
    (&quot;Robert&quot;, &quot;Sales&quot;, 4100),
    (&quot;Maria&quot;, &quot;Finance&quot;, 3000),
    (&quot;James&quot;, &quot;Sales&quot;, 3000),
    (&quot;Scott&quot;, &quot;Finance&quot;, 3300),
    (&quot;Jen&quot;, &quot;Finance&quot;, 3900),
    (&quot;Jeff&quot;, &quot;Marketing&quot;, 3000),
    (&quot;Kumar&quot;, &quot;Marketing&quot;, 2000),
    (&quot;Saif&quot;, &quot;Sales&quot;, 4100)
  ]
schema = [&quot;employee_name&quot;, &quot;department&quot;, &quot;salary&quot;]
  
df = spark.createDataFrame(data=simpleData, schema = schema)
df.printSchema()
df.show(truncate=False)

print(&quot;approx_count_distinct: &quot; + \
      str(df.select(approx_count_distinct(&quot;salary&quot;)).collect()[0][0]))

print(&quot;avg: &quot; + str(df.select(avg(&quot;salary&quot;)).collect()[0][0]))

df.select(collect_list(&quot;salary&quot;)).show(truncate=False)

df.select(collect_set(&quot;salary&quot;)).show(truncate=False)

df2 = df.select(countDistinct(&quot;department&quot;, &quot;salary&quot;))
df2.show(truncate=False)
print(&quot;Distinct Count of Department &amp; Salary: &quot;+str(df2.collect()[0][0]))

print(&quot;count: &quot;+str(df.select(count(&quot;salary&quot;)).collect()[0]))
df.select(first(&quot;salary&quot;)).show(truncate=False)
df.select(last(&quot;salary&quot;)).show(truncate=False)
df.select(kurtosis(&quot;salary&quot;)).show(truncate=False)
df.select(max(&quot;salary&quot;)).show(truncate=False)
df.select(min(&quot;salary&quot;)).show(truncate=False)
df.select(mean(&quot;salary&quot;)).show(truncate=False)
df.select(skewness(&quot;salary&quot;)).show(truncate=False)
df.select(stddev(&quot;salary&quot;), stddev_samp(&quot;salary&quot;), \
    stddev_pop(&quot;salary&quot;)).show(truncate=False)
df.select(sum(&quot;salary&quot;)).show(truncate=False)
df.select(sumDistinct(&quot;salary&quot;)).show(truncate=False)
df.select(variance(&quot;salary&quot;),var_samp(&quot;salary&quot;),var_pop(&quot;salary&quot;)) \
  .show(truncate=False)
</pre>
                        </code>
                        <h3>Conclusion</h3>
                        In this article, I&#8217;ve consolidated and listed all PySpark Aggregate functions with scala examples and also learned the benefits of using PySpark SQL functions.<br>


                    </div>
                </div>
        </div>
        <?php require "../../../../../templates/footer_outer.php" ?>

    </div>

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