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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Collect() &#8211; Retrieve data from DataFrame</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> --><br>
                    <div class="entry-content clr" itemprop="text">
                        PySpark RDD/DataFrame <code>collect()</code> is an action operation that is used to retrieve all the elements of the dataset (from all nodes) to the driver node. We should use the collect() on smaller dataset usually after filter(), group() e.t.c. Retrieving larger datasets results in <code>OutOfMemory</code> error.<br>
                        In this PySpark article, I will explain the usage of <code>collect()</code> with DataFrame example, when to avoid it, and the difference between <code>collect()</code> and <code>select()</code>.<br>
                        
                        In order to explain with example, first, let&#8217;s create a DataFrame.<br>
                        <pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

dept = [(&quot;Finance&quot;,10), \
    (&quot;Marketing&quot;,20), \
    (&quot;Sales&quot;,30), \
    (&quot;IT&quot;,40) \
  ]
deptColumns = [&quot;dept_name&quot;,&quot;dept_id&quot;]
deptDF = spark.createDataFrame(data=dept, schema = deptColumns)
deptDF.show(truncate=False)
</blockquote></pre>
                        show() function on DataFrame prints the result of DataFrame in a table format. By default, it shows only 20 rows. The above snippet returns the data in a table.<br>
                        <pre><blockquote class="language-python">
+---------+-------+
|dept_name|dept_id|
+---------+-------+
|Finance  |10     |
|Marketing|20     |
|Sales    |30     |
|IT       |40     |
+---------+-------+
</blockquote></pre>
                        Now, let&#8217;s use the <code>collect()</code> to retrieve the data.<br>
                        <pre><blockquote class="language-python">
dataCollect = deptDF.collect()
print(dataCollect)
</blockquote></pre>
                        <code>deptDF.collect()</code> retrieves all elements in a DataFrame as an Array of Row type to the driver node. printing a resultant array yields the below output.<br>
                        <pre><blockquote class="language-python">
[Row(dept_name=&#039;Finance&#039;, dept_id=10), 
Row(dept_name=&#039;Marketing&#039;, dept_id=20), 
Row(dept_name=&#039;Sales&#039;, dept_id=30), 
Row(dept_name=&#039;IT&#039;, dept_id=40)]
</blockquote></pre>
                        Note that <code>collect()</code>&nbsp;is an action hence it does not return a DataFrame instead, it returns data in an Array to the driver. Once the data is in an array, you can use <code>python for loop</code> to process it further.<br>
                        <pre><blockquote class="language-python">
for row in dataCollect:
    print(row[&#039;dept_name&#039;] + &quot;,&quot; +str(row[&#039;dept_id&#039;]))
    </blockquote></pre>
                        If you wanted to get first row and first column from a DataFrame.<br>
                        <pre><blockquote class="language-python">
#Returns value of First Row, First Column which is &quot;Finance&quot;
deptDF.collect()[0][0]
</blockquote></pre>
                        Let&#8217;s understand what&#8217;s happening on above statement.<br>
                        <ul>
                            <li><code>deptDF.collect()</code> returns Array of Row type.</li>
                            <li><code>deptDF</code>.<code>collect()[0]</code> returns the first element in an array (1st row).</li>
                            <li><code>deptDF</code>.<code>collect[0][0]</code> returns the value of the first row &amp; first column.</li>
                        </ul>
                        In case you want to just return certain elements of a DataFrame, you should call PySpark select() transformation first.<br>
                            <pre><blockquote class="language-python">
dataCollect = deptDF.select(&quot;dept_name&quot;).collect()
</blockquote></pre>
                        <h2>When to avoid Collect()</h2>
                        Usually, collect() is used to retrieve the action output when you have very small result set and calling&nbsp;<code>collect()</code>&nbsp;on an RDD/DataFrame with a bigger result set causes out of memory as it returns the entire dataset (from all workers) to the driver hence we should avoid calling collect() on a larger dataset.<br>
                        <h2>collect () vs select ()</h2>
                        <code>select()</code> is a transformation that returns a new DataFrame and holds the columns that are selected whereas collect() is an action that returns the entire data set in an Array to the driver.<br>
                        <h2>Complete Example of PySpark collect()</h2>
                        Below is complete PySpark example of using collect() on DataFrame, similarly you can also create a program using collect() with RDD.<br>
                        <pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

dept = [(&quot;Finance&quot;,10), \
    (&quot;Marketing&quot;,20), \
    (&quot;Sales&quot;,30), \
    (&quot;IT&quot;,40) \
  ]
deptColumns = [&quot;dept_name&quot;,&quot;dept_id&quot;]
deptDF = spark.createDataFrame(data=dept, schema = deptColumns)
deptDF.printSchema()
deptDF.show(truncate=False)

dataCollect = deptDF.collect()

print(dataCollect)

dataCollect2 = deptDF.select(&quot;dept_name&quot;).collect()
print(dataCollect2)

for row in dataCollect:
    print(row[&#039;dept_name&#039;] + &quot;,&quot; +str(row[&#039;dept_id&#039;]))
    </blockquote></pre>
                        This example is also available at <a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-collect.py">PySpark Github</a> project.<br>
                        <h2>Conclusion</h2>
                        In this PySpark article, you have learned the collect() function of the RDD/DataFrame is an action operation that returns all elements of the DataFrame to spark driver program and also learned it&#8217;s not a good practice to use it on the bigger dataset.<br>
                        Happy Learning !!<br>


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