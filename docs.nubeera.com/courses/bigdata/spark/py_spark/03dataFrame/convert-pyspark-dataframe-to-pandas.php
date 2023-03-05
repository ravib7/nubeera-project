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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Convert PySpark DataFrame to Pandas</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    
                    <!-- <content> --><br>
                    <div class="entry-content clr" itemprop="text">
                        (Spark with Python)PySpark DataFrame can be converted to Python Pandas DataFrame using a function <code>toPandas()</code>, In this article, I will explain how to create Pandas DataFrame from PySpark (Spark) DataFrame with examples.<br>
                        Before we start first understand the main differences between the Pandas &amp; PySpark, operations on Pyspark run faster than Pandas due to its distributed nature and parallel execution on multiple cores and machines. <br>
                        In other words, pandas run operations on a single node whereas PySpark runs on multiple machines. If you are working on a Machine Learning application where you are dealing with larger datasets, PySpark processes operations many times faster than pandas.<br>
                        After processing data in PySpark we would need to convert it back to Pandas DataFrame for a further procession with Machine Learning application or any Python applications. <br>
                        <h2>Prepare PySpark DataFrame</h2>
                        <pre><blockquote class="language-python">
                            
import pyspark
from pyspark.sql import SparkSession

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

data = [(&quot;James&quot;,&quot;&quot;,&quot;Smith&quot;,&quot;36636&quot;,&quot;M&quot;,60000),
        (&quot;Michael&quot;,&quot;Rose&quot;,&quot;&quot;,&quot;40288&quot;,&quot;M&quot;,70000),
        (&quot;Robert&quot;,&quot;&quot;,&quot;Williams&quot;,&quot;42114&quot;,&quot;&quot;,400000),
        (&quot;Maria&quot;,&quot;Anne&quot;,&quot;Jones&quot;,&quot;39192&quot;,&quot;F&quot;,500000),
        (&quot;Jen&quot;,&quot;Mary&quot;,&quot;Brown&quot;,&quot;&quot;,&quot;F&quot;,0)]

columns = [&quot;first_name&quot;,&quot;middle_name&quot;,&quot;last_name&quot;,&quot;dob&quot;,&quot;gender&quot;,&quot;salary&quot;]
pysparkDF = spark.createDataFrame(data = data, schema = columns)
pysparkDF.printSchema()
pysparkDF.show(truncate=False)

</blockquote></pre>
                        This yields below schema and result of the DataFrame.<br>
                        <pre><blockquote class="language-python">
root
 |-- first_name: string (nullable = true)
 |-- middle_name: string (nullable = true)
 |-- last_name: string (nullable = true)
 |-- dob: string (nullable = true)
 |-- gender: string (nullable = true)
 |-- salary: long (nullable = true)

+----------+-----------+---------+-----+------+------+
|first_name|middle_name|last_name|dob  |gender|salary|
+----------+-----------+---------+-----+------+------+
|James     |           |Smith    |36636|M     |60000 |
|Michael   |Rose       |         |40288|M     |70000 |
|Robert    |           |Williams |42114|      |400000|
|Maria     |Anne       |Jones    |39192|F     |500000|
|Jen       |Mary       |Brown    |     |F     |0     |
+----------+-----------+---------+-----+------+------+
</blockquote></pre>
                        <h2>Convert PySpark Dataframe to Pandas DataFrame</h2>
                        PySpark DataFrame provides a method toPandas() to convert it Python Pandas DataFrame.<br>
                        <code>toPandas()</code>&nbsp;results in the collection of all records in the PySpark DataFrame to the driver program and should be done on a small subset of the data. running on larger dataset&#8217;s results in memory error and crashes the application.<br>
                        <pre><blockquote class="language-python">
pandasDF = pysparkDF.toPandas()
print(pandasDF)
</blockquote></pre>
                        This yields the below panda&#8217;s dataframe. Note that pandas add a sequence number to the result.<br>
                        <pre><blockquote class="language-python">
  first_name middle_name last_name    dob gender  salary
0      James                 Smith  36636      M   60000
1    Michael        Rose            40288      M   70000
2     Robert              Williams  42114         400000
3      Maria        Anne     Jones  39192      F  500000
4        Jen        Mary     Brown             F       0
</blockquote></pre>
                        <h2>Convert Spark Nested Struct DataFrame to Pandas</h2>
                        Most of the time data in PySpark DataFrame will be in a structured format meaning one column contains other columns so let&#8217;s see how it convert to Pandas. Here is an example with nested struct where we have <code>firstname</code>, <code>middlename</code> and <code>lastname </code>are part of the <code>name</code> column.<br>
                        <pre><blockquote class="language-python">
# Nested structure elements
from pyspark.sql.types import StructType, StructField, StringType,IntegerType
dataStruct = [((&quot;James&quot;,&quot;&quot;,&quot;Smith&quot;),&quot;36636&quot;,&quot;M&quot;,&quot;3000&quot;), \
      ((&quot;Michael&quot;,&quot;Rose&quot;,&quot;&quot;),&quot;40288&quot;,&quot;M&quot;,&quot;4000&quot;), \
      ((&quot;Robert&quot;,&quot;&quot;,&quot;Williams&quot;),&quot;42114&quot;,&quot;M&quot;,&quot;4000&quot;), \
      ((&quot;Maria&quot;,&quot;Anne&quot;,&quot;Jones&quot;),&quot;39192&quot;,&quot;F&quot;,&quot;4000&quot;), \
      ((&quot;Jen&quot;,&quot;Mary&quot;,&quot;Brown&quot;),&quot;&quot;,&quot;F&quot;,&quot;-1&quot;) \
]

schemaStruct = StructType([
        StructField(&#039;name&#039;, StructType([
             StructField(&#039;firstname&#039;, StringType(), True),
             StructField(&#039;middlename&#039;, StringType(), True),
             StructField(&#039;lastname&#039;, StringType(), True)
             ])),
          StructField(&#039;dob&#039;, StringType(), True),
         StructField(&#039;gender&#039;, StringType(), True),
         StructField(&#039;salary&#039;, StringType(), True)
         ])
df = spark.createDataFrame(data=dataStruct, schema = schemaStruct)
df.printSchema()

pandasDF2 = df.toPandas()
print(pandasDF2)
</blockquote></pre>
                        Converting structured DataFrame to Pandas DataFrame results below output.<br>
                        <pre><blockquote class="language-python">
                   name    dob gender salary
0      (James, , Smith)  36636      M   3000
1     (Michael, Rose, )  40288      M   4000
2  (Robert, , Williams)  42114      M   4000
3  (Maria, Anne, Jones)  39192      F   4000
4    (Jen, Mary, Brown)             F     -1
</blockquote></pre>
                        <h4>Conclusion</h4>
                        In this simple article, you have learned to convert Spark DataFrame to pandas using <code>toPandas()</code> function of the Spark DataFrame. also have seen a similar example with complex nested structure elements.<code> toPandas()</code>&nbsp;results in the collection of all records in the DataFrame to the driver program and should be done on a small subset of the data.<br>
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