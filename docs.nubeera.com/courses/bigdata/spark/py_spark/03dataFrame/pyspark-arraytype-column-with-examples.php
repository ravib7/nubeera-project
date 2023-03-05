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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark ArrayType Column With Examples</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> --><br>
                    <div class="entry-content clr" itemprop="text">
                        <p>PySpark <code>pyspark.sql.types.ArrayType</code> (ArrayType extends <code>DataType</code> class) is used to define an array data type column on DataFrame that holds the same type of elements, In this article, I will explain how to create a DataFrame ArrayType column using&nbsp;<a href="https://github.com/apache/spark/blob/master/sql/catalyst/src/main/scala/org/apache/spark/sql/types/ArrayType.scala">org.apache.spark.sql.types.ArrayType</a>&nbsp;class and applying some SQL functions on the array columns with examples.</p>
                        <p>While working with structured files (Avro, Parquet e.t.c) or semi-structured (JSON) files, we often get data with complex structures like MapType, ArrayType, StructType e.t.c. I will try my best to cover some mostly used functions on ArrayType columns.</p>
                        <div class="schema-faq wp-block-yoast-faq-block">
                            <div class="schema-faq-section" id="faq-question-1616046652006"><strong class="schema-faq-question">What is PySpark ArrayType</strong>
                                <p class="schema-faq-answer">PySpark ArrayType is a collection data type that extends the <a href="https://github.com/apache/spark/blob/master/sql/catalyst/src/main/scala/org/apache/spark/sql/types/DataType.scala">DataType </a>class which is a superclass of all types in PySpark. All elements of ArrayType should have the same type of elements.</p>
                            </div>
                        </div>
                        <h2>Create PySpark ArrayType</h2>
                        <p>You can create an instance of an ArrayType using ArraType() class, This takes arguments <code>valueType</code> and one optional argument <code>valueContainsNull</code> to specify if a value can accept null, by default it takes True. <code>valueType</code> should be a PySpark type that extends DataType class.</p>
                        <pre><blockquote class="language-python">
from pyspark.sql.types import StringType, ArrayType
arrayCol = ArrayType(StringType(),False)
</blockquote></pre>
                        <p>Above example creates string array and doesn&#8217;t not accept null values. </p>
                        <h2>Create PySpark ArrayType Column Using StructType</h2>
                        <p>Let&#8217;s create a DataFrame with few array columns by using PySpark StructType &amp; StructField classes.</p>
                        <pre><blockquote class="language-python">
data = [
 (&quot;James,,Smith&quot;,[&quot;Java&quot;,&quot;Scala&quot;,&quot;C++&quot;],[&quot;Spark&quot;,&quot;Java&quot;],&quot;OH&quot;,&quot;CA&quot;),
 (&quot;Michael,Rose,&quot;,[&quot;Spark&quot;,&quot;Java&quot;,&quot;C++&quot;],[&quot;Spark&quot;,&quot;Java&quot;],&quot;NY&quot;,&quot;NJ&quot;),
 (&quot;Robert,,Williams&quot;,[&quot;CSharp&quot;,&quot;VB&quot;],[&quot;Spark&quot;,&quot;Python&quot;],&quot;UT&quot;,&quot;NV&quot;)
]

from pyspark.sql.types import StringType, ArrayType,StructType,StructField
schema = StructType([ 
    StructField(&quot;name&quot;,StringType(),True), 
    StructField(&quot;languagesAtSchool&quot;,ArrayType(StringType()),True), 
    StructField(&quot;languagesAtWork&quot;,ArrayType(StringType()),True), 
    StructField(&quot;currentState&quot;, StringType(), True), 
    StructField(&quot;previousState&quot;, StringType(), True)
  ])

df = spark.createDataFrame(data=data,schema=schema)
df.printSchema()
df.show()
</blockquote></pre>
                        <p>This snippet creates two Array columns <code>languagesAtSchool</code> and <code>languagesAtWork</code> which defines languages learned at School and languages using at work. For the rest of the article, I will use these array columns of DataFrame and provide examples of PySpark SQL array functions. printSchema() and show() from above snippet display below output.</p>
                        <pre><blockquote class="language-python">
root
 |-- name: string (nullable = true)
 |-- languagesAtSchool: array (nullable = true)
 |    |-- element: string (containsNull = true)
 |-- languagesAtWork: array (nullable = true)
 |    |-- element: string (containsNull = true)
 |-- currentState: string (nullable = true)
 |-- previousState: string (nullable = true)
+----------------+------------------+---------------+------------+-------------+
|            name| languagesAtSchool|languagesAtWork|currentState|previousState|
+----------------+------------------+---------------+------------+-------------+
|    James,,Smith|[Java, Scala, C++]|  [Spark, Java]|          OH|           CA|
|   Michael,Rose,|[Spark, Java, C++]|  [Spark, Java]|          NY|           NJ|
|Robert,,Williams|      [CSharp, VB]|[Spark, Python]|          UT|           NV|
+----------------+------------------+---------------+------------+-------------+
</blockquote></pre>
                        <h2>PySpark ArrayType (Array) Functions</h2>
                        <p>PySpark SQL provides several Array functions&nbsp;to work with the ArrayType column, In this section, we will see some of the most commonly used SQL functions.</p>
                        <h2>explode()</h2>
                        <p>Use <code>explode()</code> function to create a new row for each element in the given array column. There are various&nbsp;PySpark SQL explode functions&nbsp;available to work with Array columns.</p>
                        <pre><blockquote class="language-python">
from pyspark.sql.functions import explode
df.select(df.name,explode(df.languagesAtSchool)).show()

+----------------+------+
|            name|   col|
+----------------+------+
|    James,,Smith|  Java|
|    James,,Smith| Scala|
|    James,,Smith|   C++|
|   Michael,Rose,| Spark|
|   Michael,Rose,|  Java|
|   Michael,Rose,|   C++|
|Robert,,Williams|CSharp|
|Robert,,Williams|    VB|
+----------------+------+
</blockquote></pre>
                        <h2>Split()</h2>
                        <p><code>split()</code> sql function returns an array type after splitting the string column by delimiter. Below example split the name column by comma delimiter.</p>
                        <pre><blockquote class="language-python">
from pyspark.sql.functions import split
df.select(split(df.name,&quot;,&quot;).alias(&quot;nameAsArray&quot;)).show()

+--------------------+
|         nameAsArray|
+--------------------+
|    [James, , Smith]|
|   [Michael, Rose, ]|
|[Robert, , Williams]|
+--------------------+
</blockquote></pre>
                        <h2 id="array">array()</h2>
                        <p>Use <code>array()</code> function to create a new array column by merging the data from multiple columns. All input columns must have the same data type. The below example combines the data from <code>currentState</code> and <code>previousState</code> and creates a new column <code>states</code>.</p>
                        <pre><blockquote class="language-python">
from pyspark.sql.functions import array
df.select(df.name,array(df.currentState,df.previousState).alias(&quot;States&quot;)).show()
+----------------+--------+
|            name|  States|
+----------------+--------+
|    James,,Smith|[OH, CA]|
|   Michael,Rose,|[NY, NJ]|
|Robert,,Williams|[UT, NV]|
+----------------+--------+
</blockquote></pre>
                        <h2 id="array_contains">array_contains()</h2>
                        <p><code>array_contains()</code> sql function is used to check if array column contains a value. Returns <code>null</code> if the array is <code>null</code>, <code>true</code> if the array contains the <code>value</code>, and <code>false</code> otherwise.</p>
                        <pre><blockquote class="language-python">
from pyspark.sql.functions import array_contains
df.select(df.name,array_contains(df.languagesAtSchool,&quot;Java&quot;)
    .alias(&quot;array_contains&quot;)).show()

+----------------+--------------+
|            name|array_contains|
+----------------+--------------+
|    James,,Smith|          true|
|   Michael,Rose,|          true|
|Robert,,Williams|         false|
+----------------+--------------+
</blockquote></pre>
                        <h2>Conclusion</h2>
                        <p>You have learned PySpark ArrayType is a collection type similar to an array in other languages that are used to store the same type of elements. ArrayType extends the DataType class (super class of all types) and also learned how to use some commonly used ArrayType functions. </p>
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