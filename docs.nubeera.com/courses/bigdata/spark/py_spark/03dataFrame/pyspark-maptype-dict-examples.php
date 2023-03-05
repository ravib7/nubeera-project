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
                        <p>PySpark <code>MapType</code> (also called map type) is a data type to represent Python Dictionary (<code>dict</code>) to store key-value pair, a MapType object comprises three fields, keyType (a <code>DataType</code>), valueType (a <code>DataType</code>) and valueContainsNull (a <code>BooleanType</code>).</p>
                        <div class="schema-faq wp-block-yoast-faq-block">
                            <div class="schema-faq-section" id="faq-question-1617037049953"><strong class="schema-faq-question">What is PySpark MapType</strong>
                                <p class="schema-faq-answer">PySpark MapType is used to represent map key-value pair similar to python Dictionary (Dict), it extends <a href="https://github.com/apache/spark/blob/master/sql/catalyst/src/main/scala/org/apache/spark/sql/types/DataType.scala">DataType</a> class which is a superclass of all types in PySpark and takes two mandatory arguments <code>keyType</code> and <code>valueType</code> of type DataType and one optional boolean argument <code>valueContainsNull</code>. keyType and valueType can be any type that extends the DataType class. for e.g <code>StringType</code>, <code>IntegerType</code>, <code>ArrayType</code>, <code>MapType</code>, <code>StructType</code> (struct) e.t.c.</p>
                            </div>
                        </div>
                        <h2 id="maptype">1. Create PySpark MapType</h2>
                        <p>In order to use MapType data type first, you need to import it from <code>pyspark.sql.types.MapType</code> and use <code>MapType()</code> constructor to create a map object. </p>
                        <pre><blockquote class="language-python">
from pyspark.sql.types import StringType, MapType
mapCol = MapType(StringType(),StringType(),False)
</blockquote></pre>
                        <p><strong>MapType Key Points:</strong></p>
                        <ul>
                            <li>The First param <code>keyType</code> is used to specify the type of the key in the map.</li>
                            <li>The Second param <code>valueType</code> is used to specify the type of the value in the map.</li>
                            <li>Third parm <code>valueContainsNull</code> is an optional boolean type that is used to specify if the value of the second param can accept <code>Null/None</code> values.</li>
                            <li>The key of the map won&#8217;t accept <code>None/Null</code> values.</li>
                            <li>PySpark provides several SQL functions to work with <code>MapType</code>.</li>
                        </ul>
                        <h2>2. Create MapType From StructType</h2>
                        <p>Let&#8217;s see how to create a <code>MapType</code> by using PySpark StructType &amp; StructField, <code>StructType()</code> constructor takes list of StructField, StructField takes a fieldname and type of the value.</p>
                        <pre><blockquote class="language-python">
from pyspark.sql.types import StructField, StructType, StringType, MapType
schema = StructType([
    StructField(&#039;name&#039;, StringType(), True),
    StructField(&#039;properties&#039;, MapType(StringType(),StringType()),True)
])
</blockquote></pre>
                        <p>Now let&#8217;s create a DataFrame by using above StructType schema.</p>
                        <pre><blockquote class="language-python">
from pyspark.sql import SparkSession
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()
dataDictionary = [
        (&#039;James&#039;,{&#039;hair&#039;:&#039;black&#039;,&#039;eye&#039;:&#039;brown&#039;}),
        (&#039;Michael&#039;,{&#039;hair&#039;:&#039;brown&#039;,&#039;eye&#039;:None}),
        (&#039;Robert&#039;,{&#039;hair&#039;:&#039;red&#039;,&#039;eye&#039;:&#039;black&#039;}),
        (&#039;Washington&#039;,{&#039;hair&#039;:&#039;grey&#039;,&#039;eye&#039;:&#039;grey&#039;}),
        (&#039;Jefferson&#039;,{&#039;hair&#039;:&#039;brown&#039;,&#039;eye&#039;:&#039;&#039;})
        ]
df = spark.createDataFrame(data=dataDictionary, schema = schema)
df.printSchema()
df.show(truncate=False)
</blockquote></pre>
                        <p>Yields below output.</p>
                        <pre><blockquote class="language-python">
root
 |-- Name: string (nullable = true)
 |-- properties: map (nullable = true)
 |    |-- key: string
 |    |-- value: string (valueContainsNull = true)

+----------+-----------------------------+
|Name      |properties                   |
+----------+-----------------------------+
|James     |[eye -&gt; brown, hair -&gt; black]|
|Michael   |[eye -&gt;, hair -&gt; brown]      |
|Robert    |[eye -&gt; black, hair -&gt; red]  |
|Washington|[eye -&gt; grey, hair -&gt; grey]  |
|Jefferson |[eye -&gt; , hair -&gt; brown]     |
+----------+-----------------------------+
</blockquote></pre>
                        <h2>3. Access PySpark MapType Elements</h2>
                        <p>Let&#8217;s see how to extract the key and values from the PySpark DataFrame Dictionary column. Here I have used PySpark map transformation to read the values of <code>properties</code> (MapType column)</p>
                        <pre><blockquote class="language-python">
df3=df.rdd.map(lambda x: \
    (x.name,x.properties[&quot;hair&quot;],x.properties[&quot;eye&quot;])) \
    .toDF([&quot;name&quot;,&quot;hair&quot;,&quot;eye&quot;])
df3.printSchema()
df3.show()

root
 |-- name: string (nullable = true)
 |-- hair: string (nullable = true)
 |-- eye: string (nullable = true)

+----------+-----+-----+
|      name| hair|  eye|
+----------+-----+-----+
|     James|black|brown|
|   Michael|brown| null|
|    Robert|  red|black|
|Washington| grey| grey|
| Jefferson|brown|     |
+----------+-----+-----+
</blockquote></pre>
                        <p>Let&#8217;s use another way to get the value of a key from Map using <code>getItem()</code> of <code>Column</code> type, this method takes a key as an argument and returns a value.</p>
                        <pre><blockquote class="language-python">
df.withColumn(&quot;hair&quot;,df.properties.getItem(&quot;hair&quot;)) \
  .withColumn(&quot;eye&quot;,df.properties.getItem(&quot;eye&quot;)) \
  .drop(&quot;properties&quot;) \
  .show()

df.withColumn(&quot;hair&quot;,df.properties[&quot;hair&quot;]) \
  .withColumn(&quot;eye&quot;,df.properties[&quot;eye&quot;]) \
  .drop(&quot;properties&quot;) \
  .show()
</blockquote></pre>
                        <h2>4. Functions</h2>
                        <p>Below are some of the MapType Functions with examples.</p>
                        <h3>4.1 &#8211; explode</h3>
                        <pre><blockquote class="language-python">
from pyspark.sql.functions import explode
df.select(df.name,explode(df.properties)).show()

+----------+----+-----+
|      name| key|value|
+----------+----+-----+
|     James| eye|brown|
|     James|hair|black|
|   Michael| eye| null|
|   Michael|hair|brown|
|    Robert| eye|black|
|    Robert|hair|  red|
|Washington| eye| grey|
|Washington|hair| grey|
| Jefferson| eye|     |
| Jefferson|hair|brown|
+----------+----+-----+
</blockquote></pre>
                        <h3 id="map_keys">4.2 map_keys() &#8211; Get All Map Keys</h3>
                        <pre><blockquote class="language-python">
from pyspark.sql.functions import map_keys
df.select(df.name,map_keys(df.properties)).show()

+----------+--------------------+
|      name|map_keys(properties)|
+----------+--------------------+
|     James|         [eye, hair]|
|   Michael|         [eye, hair]|
|    Robert|         [eye, hair]|
|Washington|         [eye, hair]|
| Jefferson|         [eye, hair]|
+----------+--------------------+
</blockquote></pre>
                        <p>In case if you wanted to get all map keys as Python List. <strong>WARNING</strong>: <strong>This runs very slow</strong>.</p>
                        <pre><blockquote class="language-python">
from pyspark.sql.functions import explode,map_keys
keysDF = df.select(explode(map_keys(df.properties))).distinct()
keysList = keysDF.rdd.map(lambda x:x[0]).collect()
print(keysList)
#[&#039;eye&#039;, &#039;hair&#039;]
</blockquote></pre>
                        <h3 id="map_values">4.3 map_values() &#8211; Get All map Values</h3>
                        <pre><blockquote class="language-python">
from pyspark.sql.functions import map_values
df.select(df.name,map_values(df.properties)).show()

+----------+----------------------+
|      name|map_values(properties)|
+----------+----------------------+
|     James|        [brown, black]|
|   Michael|             [, brown]|
|    Robert|          [black, red]|
|Washington|          [grey, grey]|
| Jefferson|             [, brown]|
+----------+----------------------+
</blockquote></pre>
                        <h3>Conclusion</h3>
                        <p>MapType is a map data structure that is used to store key key-value pairs similar to Python Dictionary (Dic), keys and values type of map should be of a type that extends DataType. Key won&#8217;t accept null/None values whereas map of the key can have None/Null value.</p>


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