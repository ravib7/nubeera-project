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
    <style>
        table,
        td,
        th,
        tr {
            border: 1px solid black;
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Window Functions</h3>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">

                    <div class="entry-content clr" itemprop="text">
                        PySpark Window functions are used to calculate results such as the rank, row number e.t.c over a range of input rows. In this article, I&#8217;ve explained the concept of window functions, syntax, and finally how to use them with PySpark SQL and PySpark DataFrame API. These come in handy when we need to make aggregate operations in a specific window frame on DataFrame columns.<br>
                        When possible try to leverage standard library as they are little bit more compile-time safety, handles null and perform better when compared to UDF’s. If your application is critical on performance try to avoid using custom UDF at all costs as these are not guarantee on performance.<br>
                        <h3>1. Window Functions</h3>
                        PySpark Window functions operate on a group of rows (like frame, partition) and return a single value for every input row. PySpark SQL supports three kinds of window functions: <br>
                        <ul>
                            <li><a href="#ranking-functions">ranking functions</a> </li>
                            <li><a href="#analytic-functions">analytic functions</a> </li>
                            <li><a href="#aggregate-functions">aggregate functions</a></li>
                        </ul><br>
                        <img src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/07/pyspark-window.jpg?w=1280&ssl=1" alt="PySpark Window Functions"><br><br>
                        The below table defines Ranking and Analytic functions and for aggregate functions, we can use any existing aggregate functions as a window function. <br>
                        To perform an operation on a group first, we need to partition the data using <code>Window.partitionBy()</code> , and for row number and rank function we need to additionally order by on partition data using <code>orderBy</code> clause. <br>
                        Click on each link to know more about these functions along with the Scala examples.<br><br>
                        <table id="tablepress-43" class="tablepress tablepress-id-43" style="border:1px solid black">
                            <thead style="border:1px solid black">
                                <tr class="row-1 odd">
                                    <th class="column-1">Window Functions Usage &amp; Syntax</th>
                                    <th class="column-2">PySpark Window Functions description</th>
                                </tr>
                            </thead>
                            <tbody style="border:1px solid black">
                                <tr class="row-2 even">
                                    <td class="column-1">row_number(): Column</td>
                                    <td class="column-2">Returns a sequential number starting from 1 within a window partition</td>
                                </tr>
                                <tr class="row-3 odd">
                                    <td class="column-1">rank(): Column</td>
                                    <td class="column-2">Returns the rank of rows within a window partition, with gaps.</td>
                                </tr>
                                <tr class="row-4 even">
                                    <td class="column-1">percent_rank(): Column</td>
                                    <td class="column-2">Returns the percentile rank of rows within a window partition.</td>
                                </tr>
                                <tr class="row-5 odd">
                                    <td class="column-1">dense_rank(): Column</td>
                                    <td class="column-2">Returns the rank of rows within a window partition without any gaps. Where as Rank() returns rank with gaps.</td>
                                </tr>
                                <tr class="row-6 even">
                                    <td class="column-1">ntile(n: Int): Column </td>
                                    <td class="column-2">Returns the ntile id in a window partition</td>
                                </tr>
                                <tr class="row-7 odd">
                                    <td class="column-1">cume_dist(): Column</td>
                                    <td class="column-2">Returns the cumulative distribution of values within a window partition</td>
                                </tr>
                                <tr class="row-8 even">
                                    <td class="column-1">lag(e: Column, offset: Int): Column<br />
                                        lag(columnName: String, offset: Int): Column<br />
                                        lag(columnName: String, offset: Int, defaultValue: Any): Column</td>
                                    <td class="column-2">returns the value that is `offset` rows before the current row, and `null` if there is less than `offset` rows before the current row.</td>
                                </tr>
                                <tr class="row-9 odd">
                                    <td class="column-1">lead(columnName: String, offset: Int): Column<br />
                                        lead(columnName: String, offset: Int): Column<br />
                                        lead(columnName: String, offset: Int, defaultValue: Any): Column</td>
                                    <td class="column-2">returns the value that is `offset` rows after the current row, and `null` if there is less than `offset` rows after the current row.</td>
                                </tr>
                            </tbody>
                        </table><br>

                        Before we start with an example, first let&#8217;s create a PySpark DataFrame to work with.<br>
                        <code class="language-scala">
                            <pre>
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

simpleData = ((&quot;James&quot;, &quot;Sales&quot;, 3000), \
    (&quot;Michael&quot;, &quot;Sales&quot;, 4600),  \
    (&quot;Robert&quot;, &quot;Sales&quot;, 4100),   \
    (&quot;Maria&quot;, &quot;Finance&quot;, 3000),  \
    (&quot;James&quot;, &quot;Sales&quot;, 3000),    \
    (&quot;Scott&quot;, &quot;Finance&quot;, 3300),  \
    (&quot;Jen&quot;, &quot;Finance&quot;, 3900),    \
    (&quot;Jeff&quot;, &quot;Marketing&quot;, 3000), \
    (&quot;Kumar&quot;, &quot;Marketing&quot;, 2000),\
    (&quot;Saif&quot;, &quot;Sales&quot;, 4100) \
  )
 
columns= [&quot;employee_name&quot;, &quot;department&quot;, &quot;salary&quot;]
df = spark.createDataFrame(data = simpleData, schema = columns)
df.printSchema()
df.show(truncate=False)
</pre>
                        </code>
                        Yields below output<br>
                        <code class="language-scala">
                            <pre>
root
 |-- employee_name: string (nullable = true)
 |-- department: string (nullable = true)
 |-- salary: long (nullable = true)

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
</pre>
                        </code>
                        <h3 id="ranking-functions">2. PySpark Window <strong>Ranking functions</strong></h3>
                        <p></p>
                        <h3 id="row_number">2.1 row_number Window Function</h3>
                        <code>row_number()</code> window function is used to give the sequential row number starting from 1 to the result of each window partition. <br>
                        <code class="language-scala">
                            <pre>
from pyspark.sql.window import Window
from pyspark.sql.functions import row_number
windowSpec  = Window.partitionBy(&quot;department&quot;).orderBy(&quot;salary&quot;)

df.withColumn(&quot;row_number&quot;,row_number().over(windowSpec)) \
    .show(truncate=False)
</pre>
                        </code>
                        Yields below output.<br>
                        <code class="language-scala">
                            <pre>
+-------------+----------+------+----------+
|employee_name|department|salary|row_number|
+-------------+----------+------+----------+
|James        |Sales     |3000  |1         |
|James        |Sales     |3000  |2         |
|Robert       |Sales     |4100  |3         |
|Saif         |Sales     |4100  |4         |
|Michael      |Sales     |4600  |5         |
|Maria        |Finance   |3000  |1         |
|Scott        |Finance   |3300  |2         |
|Jen          |Finance   |3900  |3         |
|Kumar        |Marketing |2000  |1         |
|Jeff         |Marketing |3000  |2         |
+-------------+----------+------+----------+
</pre>
                        </code>
                        <h3 id="rank">2.2 rank Window Function </h3>
                        <code>rank()</code> window function is used to provide a rank to the result within a window partition. This function leaves gaps in rank when there are ties.<br>
                        <code class="language-scala">
                            <pre>
&quot;&quot;&quot;rank&quot;&quot;&quot;
from pyspark.sql.functions import rank
df.withColumn(&quot;rank&quot;,rank().over(windowSpec)) \
    .show()
</pre>
                        </code>
                        Yields below output. <br>
                        <code class="language-scala">
                            <pre>
+-------------+----------+------+----+
|employee_name|department|salary|rank|
+-------------+----------+------+----+
|        James|     Sales|  3000|   1|
|        James|     Sales|  3000|   1|
|       Robert|     Sales|  4100|   3|
|         Saif|     Sales|  4100|   3|
|      Michael|     Sales|  4600|   5|
|        Maria|   Finance|  3000|   1|
|        Scott|   Finance|  3300|   2|
|          Jen|   Finance|  3900|   3|
|        Kumar| Marketing|  2000|   1|
|         Jeff| Marketing|  3000|   2|
+-------------+----------+------+----+
</pre>
                        </code>
                        This is the same as the <code>RANK</code> function in SQL. <br>
                        <h3 id="dense_rank">2.3 dense_rank Window Function </h3>
                        <code>dense_rank()</code> window function is used to get the result with rank of rows within a window partition without any gaps. This is similar to <code>rank()</code> function difference being rank function leaves gaps in rank when there are ties.<br>
                        <code class="language-scala">
                            <pre>
&quot;&quot;&quot;dens_rank&quot;&quot;&quot;
from pyspark.sql.functions import dense_rank
df.withColumn(&quot;dense_rank&quot;,dense_rank().over(windowSpec)) \
    .show()
</pre>
                        </code>
                        Yields below output. <br>
                        <code class="language-scala">
                            <pre>
+-------------+----------+------+----------+
|employee_name|department|salary|dense_rank|
+-------------+----------+------+----------+
|        James|     Sales|  3000|         1|
|        James|     Sales|  3000|         1|
|       Robert|     Sales|  4100|         2|
|         Saif|     Sales|  4100|         2|
|      Michael|     Sales|  4600|         3|
|        Maria|   Finance|  3000|         1|
|        Scott|   Finance|  3300|         2|
|          Jen|   Finance|  3900|         3|
|        Kumar| Marketing|  2000|         1|
|         Jeff| Marketing|  3000|         2|
+-------------+----------+------+----------+
</pre>
                        </code>
                        This is the same as the <code>DENSE_RANK</code> function in SQL. <br>
                        <h3 id="percent_rank">2.4 percent_rank Window Function </h3>
                        <p></p>
                        <code class="language-scala">
                            <pre>
&quot;&quot;&quot; percent_rank &quot;&quot;&quot;
from pyspark.sql.functions import percent_rank
df.withColumn(&quot;percent_rank&quot;,percent_rank().over(windowSpec)) \
    .show()
</pre>
                        </code>
                        Yields below output. <br>
                        <code class="language-scala">
                            <pre>
+-------------+----------+------+------------+
|employee_name|department|salary|percent_rank|
+-------------+----------+------+------------+
|        James|     Sales|  3000|         0.0|
|        James|     Sales|  3000|         0.0|
|       Robert|     Sales|  4100|         0.5|
|         Saif|     Sales|  4100|         0.5|
|      Michael|     Sales|  4600|         1.0|
|        Maria|   Finance|  3000|         0.0|
|        Scott|   Finance|  3300|         0.5|
|          Jen|   Finance|  3900|         1.0|
|        Kumar| Marketing|  2000|         0.0|
|         Jeff| Marketing|  3000|         1.0|
+-------------+----------+------+------------+
</pre>
                        </code>
                        This is the same as the <code>PERCENT_RANK</code> function in SQL. <br>
                        <h3>2.5 ntile Window Function </h3>
                        <code>ntile()</code> window function returns the relative rank of result rows within a window partition. In below example we have used 2 as an argument to ntile hence it returns ranking between 2 values (1 and 2) <br>
                        <code class="language-scala">
                            <pre>
&quot;&quot;&quot;ntile&quot;&quot;&quot;
from pyspark.sql.functions import ntile
df.withColumn(&quot;ntile&quot;,ntile(2).over(windowSpec)) \
    .show()
</pre>
                        </code>
                        Yields below output. <br>
                        <code class="language-scala">
                            <pre>
+-------------+----------+------+-----+
|employee_name|department|salary|ntile|
+-------------+----------+------+-----+
|        James|     Sales|  3000|    1|
|        James|     Sales|  3000|    1|
|       Robert|     Sales|  4100|    1|
|         Saif|     Sales|  4100|    2|
|      Michael|     Sales|  4600|    2|
|        Maria|   Finance|  3000|    1|
|        Scott|   Finance|  3300|    1|
|          Jen|   Finance|  3900|    2|
|        Kumar| Marketing|  2000|    1|
|         Jeff| Marketing|  3000|    2|
+-------------+----------+------+-----+
</pre>
                        </code>
                        This is the same as the <code>NTILE</code> function in SQL. <br>
                        <h3 id="analytic-functions">3. PySpark Window Analytic functions</h3>
                        <p></p>
                        <h3>3.1 cume_dist Window Function</h3>
                        <code>cume_dist()</code> window function is used to get the cumulative distribution of values within a window partition. <br>
                        This is the same as the <code>DENSE_RANK</code> function in SQL. <br>
                        <code class="language-scala">
                            <pre>
&quot;&quot;&quot; cume_dist &quot;&quot;&quot;
from pyspark.sql.functions import cume_dist    
df.withColumn(&quot;cume_dist&quot;,cume_dist().over(windowSpec)) \
   .show()
</pre>
                        </code>
                        <code class="language-scala">
                            <pre>
+-------------+----------+------+------------------+
|employee_name|department|salary|         cume_dist|
+-------------+----------+------+------------------+
|        James|     Sales|  3000|               0.4|
|        James|     Sales|  3000|               0.4|
|       Robert|     Sales|  4100|               0.8|
|         Saif|     Sales|  4100|               0.8|
|      Michael|     Sales|  4600|               1.0|
|        Maria|   Finance|  3000|0.3333333333333333|
|        Scott|   Finance|  3300|0.6666666666666666|
|          Jen|   Finance|  3900|               1.0|
|        Kumar| Marketing|  2000|               0.5|
|         Jeff| Marketing|  3000|               1.0|
+-------------+----------+------+------------------+
</pre>
                        </code>
                        <h3>3.2 lag Window Function</h3>
                        This is the same as the <code>LAG</code> function in SQL. <br>
                        <code class="language-scala">
                            <pre>
&quot;&quot;&quot;lag&quot;&quot;&quot;
from pyspark.sql.functions import lag    
df.withColumn(&quot;lag&quot;,lag(&quot;salary&quot;,2).over(windowSpec)) \
      .show()
</pre>
                        </code>
                        <code class="language-scala">
                            <pre>
+-------------+----------+------+----+
|employee_name|department|salary| lag|
+-------------+----------+------+----+
|        James|     Sales|  3000|null|
|        James|     Sales|  3000|null|
|       Robert|     Sales|  4100|3000|
|         Saif|     Sales|  4100|3000|
|      Michael|     Sales|  4600|4100|
|        Maria|   Finance|  3000|null|
|        Scott|   Finance|  3300|null|
|          Jen|   Finance|  3900|3000|
|        Kumar| Marketing|  2000|null|
|         Jeff| Marketing|  3000|null|
+-------------+----------+------+----+
</pre>
                        </code>
                        <h3>3.3 lead Window Function </h3>
                        This is the same as the <code>LEAD</code> function in SQL. <br>
                        <code class="language-scala">
                            <pre>
 &quot;&quot;&quot;lead&quot;&quot;&quot;
from pyspark.sql.functions import lead    
df.withColumn(&quot;lead&quot;,lead(&quot;salary&quot;,2).over(windowSpec)) \
    .show()
</pre>
                        </code>
                        <code class="language-scala">
                            <pre>
+-------------+----------+------+----+
|employee_name|department|salary|lead|
+-------------+----------+------+----+
|        James|     Sales|  3000|4100|
|        James|     Sales|  3000|4100|
|       Robert|     Sales|  4100|4600|
|         Saif|     Sales|  4100|null|
|      Michael|     Sales|  4600|null|
|        Maria|   Finance|  3000|3900|
|        Scott|   Finance|  3300|null|
|          Jen|   Finance|  3900|null|
|        Kumar| Marketing|  2000|null|
|         Jeff| Marketing|  3000|null|
+-------------+----------+------+----+
</pre>
                        </code>
                        <h3 id="aggregate-functions">4. PySpark Window Aggregate Functions</h3>
                        In this section, I will explain how to calculate sum, min, max for each department using PySpark SQL Aggregate window functions and <code>WindowSpec</code>. When working with Aggregate functions, we don&#8217;t need to use order by clause. <br>
                        <code class="language-scala">
                            <pre>
windowSpecAgg  = Window.partitionBy(&quot;department&quot;)
from pyspark.sql.functions import col,avg,sum,min,max,row_number 
df.withColumn(&quot;row&quot;,row_number().over(windowSpec)) \
  .withColumn(&quot;avg&quot;, avg(col(&quot;salary&quot;)).over(windowSpecAgg)) \
  .withColumn(&quot;sum&quot;, sum(col(&quot;salary&quot;)).over(windowSpecAgg)) \
  .withColumn(&quot;min&quot;, min(col(&quot;salary&quot;)).over(windowSpecAgg)) \
  .withColumn(&quot;max&quot;, max(col(&quot;salary&quot;)).over(windowSpecAgg)) \
  .where(col(&quot;row&quot;)==1).select(&quot;department&quot;,&quot;avg&quot;,&quot;sum&quot;,&quot;min&quot;,&quot;max&quot;) \
  .show()
</pre>
                        </code>
                        This yields below output<br>
                        <code class="language-scala">
                            <pre>
+----------+------+-----+----+----+
|department|   avg|  sum| min| max|
+----------+------+-----+----+----+
|     Sales|3760.0|18800|3000|4600|
|   Finance|3400.0|10200|3000|3900|
| Marketing|2500.0| 5000|2000|3000|
+----------+------+-----+----+----+
</pre>
                        </code>
                        <h3>Source Code of Window Functions Example</h3>
                        <code class="language-scala">
                            <pre>
import pyspark
from pyspark.sql import SparkSession

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

simpleData = ((&quot;James&quot;, &quot;Sales&quot;, 3000), \
    (&quot;Michael&quot;, &quot;Sales&quot;, 4600),  \
    (&quot;Robert&quot;, &quot;Sales&quot;, 4100),   \
    (&quot;Maria&quot;, &quot;Finance&quot;, 3000),  \
    (&quot;James&quot;, &quot;Sales&quot;, 3000),    \
    (&quot;Scott&quot;, &quot;Finance&quot;, 3300),  \
    (&quot;Jen&quot;, &quot;Finance&quot;, 3900),    \
    (&quot;Jeff&quot;, &quot;Marketing&quot;, 3000), \
    (&quot;Kumar&quot;, &quot;Marketing&quot;, 2000),\
    (&quot;Saif&quot;, &quot;Sales&quot;, 4100) \
  )
 
columns= [&quot;employee_name&quot;, &quot;department&quot;, &quot;salary&quot;]

df = spark.createDataFrame(data = simpleData, schema = columns)

df.printSchema()
df.show(truncate=False)

from pyspark.sql.window import Window
from pyspark.sql.functions import row_number
windowSpec  = Window.partitionBy(&quot;department&quot;).orderBy(&quot;salary&quot;)

df.withColumn(&quot;row_number&quot;,row_number().over(windowSpec)) \
    .show(truncate=False)

from pyspark.sql.functions import rank
df.withColumn(&quot;rank&quot;,rank().over(windowSpec)) \
    .show()

from pyspark.sql.functions import dense_rank
df.withColumn(&quot;dense_rank&quot;,dense_rank().over(windowSpec)) \
    .show()

from pyspark.sql.functions import percent_rank
df.withColumn(&quot;percent_rank&quot;,percent_rank().over(windowSpec)) \
    .show()
    
from pyspark.sql.functions import ntile
df.withColumn(&quot;ntile&quot;,ntile(2).over(windowSpec)) \
    .show()

from pyspark.sql.functions import cume_dist    
df.withColumn(&quot;cume_dist&quot;,cume_dist().over(windowSpec)) \
   .show()

from pyspark.sql.functions import lag    
df.withColumn(&quot;lag&quot;,lag(&quot;salary&quot;,2).over(windowSpec)) \
      .show()

from pyspark.sql.functions import lead    
df.withColumn(&quot;lead&quot;,lead(&quot;salary&quot;,2).over(windowSpec)) \
    .show()
    
windowSpecAgg  = Window.partitionBy(&quot;department&quot;)
from pyspark.sql.functions import col,avg,sum,min,max,row_number 
df.withColumn(&quot;row&quot;,row_number().over(windowSpec)) \
  .withColumn(&quot;avg&quot;, avg(col(&quot;salary&quot;)).over(windowSpecAgg)) \
  .withColumn(&quot;sum&quot;, sum(col(&quot;salary&quot;)).over(windowSpecAgg)) \
  .withColumn(&quot;min&quot;, min(col(&quot;salary&quot;)).over(windowSpecAgg)) \
  .withColumn(&quot;max&quot;, max(col(&quot;salary&quot;)).over(windowSpecAgg)) \
  .where(col(&quot;row&quot;)==1).select(&quot;department&quot;,&quot;avg&quot;,&quot;sum&quot;,&quot;min&quot;,&quot;max&quot;) \
  .show()
</pre>
                        </code>
                        <h3>Conclusion</h3>
                        In this tutorial, you have learned what are PySpark SQL Window functions their syntax and how to use them with aggregate function along with several examples in Scala.<br>

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