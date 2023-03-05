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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark – Loop/Iterate Through Rows in DataFrame</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> --><br>
                    <div class="entry-content clr" itemprop="text">
                        <p>PySpark provides map(), mapPartitions() to loop/iterate through rows in RDD/DataFrame to perform the complex transformations, and these two returns the same number of records as in the original DataFrame but the number of columns could be different (after add/update). </p>
                        <p>PySpark also provides foreach() &amp; foreachPartitions() actions to loop/iterate through each Row in a DataFrame but these two returns nothing, In this article, I will explain how to use these methods to get DataFrame column values and process.</p>
                        <ul>
                            <li><a href="#using-map-loop-dataframe">Using map() to loop through DataFrame</a></li>
                            <li><a href="#use-foreach-loop-through-dataframe">Using foreach() to loop through DataFrame</a></li>
                            <li><a href="#using-pandas-to-iterate">Using pandas() to Iterate </a></li>
                            <li><a href="#collect-data-as-list-and-loop-through">Collect Data As List and Loop Through in Python</a></li>
                        </ul>
                        <h2>PySpark Loop Through Rows in DataFrame Examples</h2>
                        <p>In order to explain with examples, let&#8217;s create a DataFrame</p>
                        <pre><blockquote class="language-python">
from pyspark.sql import SparkSession
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

data = [(&#039;James&#039;,&#039;Smith&#039;,&#039;M&#039;,30),(&#039;Anna&#039;,&#039;Rose&#039;,&#039;F&#039;,41),
  (&#039;Robert&#039;,&#039;Williams&#039;,&#039;M&#039;,62), 
]
columns = [&quot;firstname&quot;,&quot;lastname&quot;,&quot;gender&quot;,&quot;salary&quot;]
df = spark.createDataFrame(data=data, schema = columns)
df.show()
+---------+--------+------+------+
|firstname|lastname|gender|salary|
+---------+--------+------+------+
|    James|   Smith|     M|    30|
|     Anna|    Rose|     F|    41|
|   Robert|Williams|     M|    62|
+---------+--------+------+------+
</blockquote></pre>
                        <p>Mostly for simple computations, instead of iterating through using map() and foreach(), you should use either DataFrame select() or DataFrame withColumn() in conjunction with PySpark SQL functions.</p>
                        <pre><blockquote class="language-python">
from pyspark.sql.functions import concat_ws,col,lit
df.select(concat_ws(&quot;,&quot;,df.firstname,df.lastname).alias(&quot;name&quot;), \
          df.gender,lit(df.salary*2).alias(&quot;new_salary&quot;)).show()
+---------------+------+----------+
|           name|gender|new_salary|
+---------------+------+----------+
|    James,Smith|     M|        60|
|      Anna,Rose|     F|        82|
|Robert,Williams|     M|       124|
+---------------+------+----------+
</blockquote></pre>
                        <p>Below I have map() example to achieve same output as above.</p>
                        <h2 id="using-map-loop-dataframe">Using map() to Loop Through Rows in DataFrame</h2>
                        <p>PySpark map() Transformation is used to loop/iterate through the PySpark DataFrame/RDD by applying the transformation function (lambda) on every element (Rows and Columns) of RDD/DataFrame. PySpark doesn&#8217;t have a map() in DataFrame instead it&#8217;s in RDD hence we need to convert DataFrame to RDD first and then use the map(). It returns an RDD and you should Convert RDD to PySpark DataFrame if needed.</p>
                        <p>If you have a heavy initialization use PySpark mapPartitions() transformation instead of map(), as with mapPartitions() heavy initialization executes only once for each partition instead of every record.</p>
                        <pre><blockquote class="language-python">
# Refering columns by index.
rdd=df.rdd.map(lambda x: 
    (x[0]+&quot;,&quot;+x[1],x[2],x[3]*2)
    )  
df2=rdd.toDF([&quot;name&quot;,&quot;gender&quot;,&quot;new_salary&quot;])
df2.show()
</blockquote></pre>
                        <p>The above example iterates through every row in a DataFrame by applying transformations to the data, since I need a DataFrame back, I have converted the result of RDD to DataFrame with new column names. Note that here I have used index to get the column values, alternatively, you can also refer to the DataFrame column names while iterating.</p>
                        <pre><blockquote class="language-python">
# Referring Column Names
rdd2=df.rdd.map(lambda x: 
    (x[&quot;firstname&quot;]+&quot;,&quot;+x[&quot;lastname&quot;],x[&quot;gender&quot;],x[&quot;salary&quot;]*2)
    ) 
</blockquote></pre>
                        <p>Another alternative</p>
                        <pre><blockquote class="language-python">
# Referring Column Names
rdd2=df.rdd.map(lambda x: 
    (x.firstname+&quot;,&quot;+x.lastname,x.gender,x.salary*2)
    ) 
</blockquote></pre>
                        <p>You can also create a custom function to perform an operation. Below <code>func1()</code> function executes for every DataFrame row from the lambda function.</p>
                        <pre><blockquote class="language-python">
# By Calling function
def func1(x):
    firstName=x.firstname
    lastName=x.lastName
    name=firstName+&quot;,&quot;+lastName
    gender=x.gender.lower()
    salary=x.salary*2
    return (name,gender,salary)

rdd2=df.rdd.map(lambda x: func1(x))
</blockquote></pre>
                        <h2 id="use-foreach-loop-through-dataframe">Using foreach() to Loop Through Rows in DataFrame</h2>
                        <p>Similar to map(), foreach() also applied to every row of DataFrame, the difference being foreach() is an action and it returns nothing. Below are some examples to iterate through DataFrame using for each.</p>
                        <pre><blockquote class="language-python">
# Foreach example
def f(x): print(x)
df.foreach(f)

# Another example
df.foreach(lambda x: 
    print(&quot;Data ==&gt;&quot;+x[&quot;firstname&quot;]+&quot;,&quot;+x[&quot;lastname&quot;]+&quot;,&quot;+x[&quot;gender&quot;]+&quot;,&quot;+str(x[&quot;salary&quot;]*2))
    ) 
</blockquote></pre>
                        <h2 id="using-pandas-to-iterate">Using pandas() to Iterate</h2>
                        <p>If you have a small dataset, you can also Convert PySpark DataFrame to Pandas and use pandas to iterate through. Use <code>spark.sql.execution.arrow.enabled</code> config to enable Apache Arrow with Spark. Apache Spark uses Apache Arrow which is an in-memory columnar format to transfer the data between Python and JVM.</p>
                        <pre><blockquote class="language-python">
# Using pandas
import pandas as pd
spark.conf.set(&quot;spark.sql.execution.arrow.enabled&quot;, &quot;true&quot;)
pandasDF = df.toPandas()
for index, row in pandasDF.iterrows():
    print(row[&#039;firstname&#039;], row[&#039;gender&#039;])
</blockquote></pre>
                        <h2 id="collect-data-as-list-and-loop-through">Collect Data As List and Loop Through</h2>
                        <p>You can also Collect the PySpark DataFrame to Driver and iterate through Python, you can also use <code>toLocalIterator()</code>.</p>
                        <pre><blockquote class="language-python">
# Collect the data to Python List
dataCollect = df.collect()
for row in dataCollect:
    print(row[&#039;firstname&#039;] + &quot;,&quot; +row[&#039;lastname&#039;])

#Using toLocalIterator()
dataCollect=df.rdd.toLocalIterator()
for row in dataCollect:
    print(row[&#039;firstname&#039;] + &quot;,&quot; +row[&#039;lastname&#039;])
</blockquote></pre>
                        <h3>Conclusion</h3>
                        <p>In this article, you have learned iterating/loop through Rows of PySpark DataFrame could be done using map(), foreach(), converting to Pandas, and finally converting DataFrame to Python List. If you want to do simile computations, use either select or withColumn(). </p>
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