<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra PySpark</title>

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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark – Create DataFrame with Examples</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> --><br>
                    <div class="entry-content clr" itemprop="text">
                        You can manually c<strong>reate a PySpark DataFrame</strong> using <code>toDF()</code> and <code>createDataFrame()</code> methods, both these function takes different signatures in order to create DataFrame from existing RDD, list, and DataFrame. <br>
                        You can also create PySpark DataFrame from data sources like TXT, CSV, JSON, ORV, Avro, Parquet, XML formats by reading from HDFS, S3, DBFS, Azure Blob file systems e.t.c.<br>
                        
                        Finally, PySpark DataFrame also can be created by reading data from RDBMS Databases and NoSQL databases.<br>
                        In this article, you will learn creating DataFrame by some of these methods with PySpark examples.<br>
                        <h4>Table of Contents</h4>
                        <ul>
                            <li><a href="#from-rdd">Create DataFrame from RDD</a>
                                <ul>
                                    <li><a href="#rdd-todf">toDF()</a></li>
                                    <li><a href="#sparksession-createdataframe">createDataFrame()</a></li>
                                </ul>
                            </li>
                            <li><a href="#from-list-collection">Create DataFrame from the list of data</a></li>
                            <li><a href="#create-dataframe-datasource">Create DataFrame from Data sources</a>
                                <ul>
                                    <li><a href="#from-csv">Creating from CSV file</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#from-txt">Creating from TXT file</a> </li>
                                    <li><a href="#from-json">Creating from JSON file</a></li>
                                </ul>
                            </li>
                            <li><a href="#create-from-avro-parquet-orc">Other sources (Avro, Parquet, ORC e.t.c)</a></li>
                        </ul>
                        <figure class="wp-block-table is-style-stripes">
                            <table style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SparkSession</th>
                                        <th>RDD</th>
                                        <th>DataFrame</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>createDataFrame(rdd)</td>
                                        <td>toDF()</td>
                                        <td>toDF(*cols)</td>
                                    </tr>
                                    <tr>
                                        <td>createDataFrame(dataList)</td>
                                        <td>toDF(*cols)</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>createDataFrame(rowData,columns)</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>createDataFrame(dataList,schema)</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <figcaption>PySpark Create DataFrame matrix</figcaption>
                        </figure>
                        <br>In order to create a DataFrame from a list we need the data hence, first, let&#8217;s create the data and the columns that are needed.<br>
                        <pre><blockquote class="language-python">
columns = [&quot;language&quot;,&quot;users_count&quot;]
data = [(&quot;Java&quot;, &quot;20000&quot;), (&quot;Python&quot;, &quot;100000&quot;), (&quot;Scala&quot;, &quot;3000&quot;)]
</blockquote></pre>
                        <h2 id="from-rdd">1. Create DataFrame from RDD</h2>
                        One easy way to manually create PySpark DataFrame is from an existing RDD. first, let&#8217;s create a Spark RDD from a collection List by calling parallelize() function from SparkContext. We would need this <strong>rdd</strong> object for all our examples below.<br>
                            <pre><blockquote class="language-python">
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()
rdd = spark.sparkContext.parallelize(data)
</blockquote></pre>
                        <h3 id="rdd-todf">1.1 Using toDF() function</h3>
                        PySpark RDD&#8217;s toDF() method is used to create a DataFrame from existing RDD. Since RDD doesn&#8217;t have columns, the DataFrame is created with default column names &#8220;_1&#8221; and &#8220;_2&#8221; as we have two columns. <br>
                        <pre><blockquote class="language-python">
dfFromRDD1 = rdd.toDF()
dfFromRDD1.printSchema()
</blockquote></pre>
                        printschema() yields the below output.<br>
                        <pre><blockquote class="language-python">
root
 |-- _1: string (nullable = true)
 |-- _2: string (nullable = true)
 </blockquote></pre>
                        If you wanted to provide column names to the DataFrame use <code>toDF() </code>method with column names as arguments as shown below.<br>
                        <pre><blockquote class="language-python">
columns = [&quot;language&quot;,&quot;users_count&quot;]
dfFromRDD1 = rdd.toDF(columns)
dfFromRDD1.printSchema()
</blockquote></pre>
                        This yields schema of the DataFrame with column names.<br>
                        <pre><blockquote class="language-python">
root
 |-- language: string (nullable = true)
 |-- users: string (nullable = true)
 </blockquote></pre>
                        By default, the datatype of these columns infers to the type of data. We can change this behavior by supplying schema, where we can specify a column name, data type, and nullable for each field/column.<br>
                        <h3 id="sparksession-createdataframe">1.2 Using createDataFrame() from SparkSession</h3>
                        Using createDataFrame() from SparkSession is another way to create manually and it takes rdd object as an argument. and chain with toDF() to specify name to the columns.<br>
                        <pre><blockquote class="language-python">
dfFromRDD2 = spark.createDataFrame(rdd).toDF(*columns)
</blockquote></pre>
                        <h2 id="from-list-collection">2. Create DataFrame from List Collection</h2>
                        In this section, we will see how to create PySpark DataFrame from a list. These examples would be similar to what we have seen in the above section with RDD, but we use the list data object instead of &#8220;rdd&#8221; object to create DataFrame.<br>
                        <h3 id="data-createdataframe">2.1 Using createDataFrame() from SparkSession</h3>
                        Calling <code>createDataFrame()</code> from <code>SparkSession </code>is another way to create PySpark DataFrame manually, it takes a list object as an argument. and chain with <code>toDF()</code> to specify names to the columns. <br>
                        <pre><blockquote class="language-python">
dfFromData2 = spark.createDataFrame(data).toDF(*columns)
</blockquote></pre>
                        <h3>2.2 Using createDataFrame() with the Row type</h3>
                        <code>createDataFrame()</code> has another signature in PySpark which takes the collection of Row type and schema for column names as arguments. To use this first we need to convert our &#8220;data&#8221; object from the list to list of Row.<br>
                        <pre><blockquote class="language-python">
rowData = map(lambda x: Row(*x), data) 
dfFromData3 = spark.createDataFrame(rowData,columns)
</blockquote></pre>
                        <h3>2.3 Create DataFrame with schema</h3>
                        If you wanted to specify the column names along with their data types, you should create the StructType schema first and then assign this while creating a DataFrame.<br>
                        <pre><blockquote class="language-python">
from pyspark.sql.types import StructType,StructField, StringType, IntegerType
data2 = [(&quot;James&quot;,&quot;&quot;,&quot;Smith&quot;,&quot;36636&quot;,&quot;M&quot;,3000),
    (&quot;Michael&quot;,&quot;Rose&quot;,&quot;&quot;,&quot;40288&quot;,&quot;M&quot;,4000),
    (&quot;Robert&quot;,&quot;&quot;,&quot;Williams&quot;,&quot;42114&quot;,&quot;M&quot;,4000),
    (&quot;Maria&quot;,&quot;Anne&quot;,&quot;Jones&quot;,&quot;39192&quot;,&quot;F&quot;,4000),
    (&quot;Jen&quot;,&quot;Mary&quot;,&quot;Brown&quot;,&quot;&quot;,&quot;F&quot;,-1)
  ]

schema = StructType([ \
    StructField(&quot;firstname&quot;,StringType(),True), \
    StructField(&quot;middlename&quot;,StringType(),True), \
    StructField(&quot;lastname&quot;,StringType(),True), \
    StructField(&quot;id&quot;, StringType(), True), \
    StructField(&quot;gender&quot;, StringType(), True), \
    StructField(&quot;salary&quot;, IntegerType(), True) \
  ])
 
df = spark.createDataFrame(data=data2,schema=schema)
df.printSchema()
df.show(truncate=False)
</blockquote></pre>
                        This yields below output.<br>
                        <img src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/01/pyspark-create-dataframe-2.png?w=659&ssl=1" alt="pyspark-create-dataframe-2.png"><br>
                        <h2 id="create-dataframe-datasource">3. Create DataFrame from Data sources</h2>
                        In real-time mostly you create DataFrame from data source files like CSV, Text, JSON, XML e.t.c.<br>
                        PySpark by default supports many data formats out of the box without importing any libraries and to create DataFrame you need to use the appropriate method available in <code>DataFrameReader</code> class.<br>
                        <h3 id="from-csv">3.1 Creating DataFrame from CSV</h3>
                        Use <code>csv()</code> method of the <code>DataFrameReader</code> object to create a DataFrame from CSV file. you can also provide options like what delimiter to use, whether you have quoted data, date formats, infer schema, and many more.<br>
                            <pre><blockquote class="language-python">
df2 = spark.read.csv(&quot;/src/resources/file.csv&quot;)
</blockquote></pre>
                        <h3 id="from-txt">3.2. Creating from text (TXT) file</h3>
                        Similarly you can also create a DataFrame by reading a from Text file, use <code>text()</code> method of the DataFrameReader to do so.<br>
                        <pre><blockquote class="language-python">
df2 = spark.read.text(&quot;/src/resources/file.txt&quot;)
</blockquote></pre>
                        <h3 id="from-json">3.3. Creating from JSON file</h3>
                        PySpark is also used to process semi-structured data files like JSON format. you can use <code>json()</code> method of the DataFrameReader to read JSON file into DataFrame. Below is a simple example. <br>
                        <pre><blockquote class="language-python">
df2 = spark.read.json(&quot;/src/resources/file.json&quot;)
</blockquote></pre>
                        Similarly, we can create DataFrame in PySpark from most of the relational databases which I&#8217;ve not covered here and I will leave this to you to explore.<br>
                        <h2 id="create-from-avro-parquet-orc">4. Other sources (Avro, Parquet, ORC, Kafka)</h2>
                        We can also create DataFrame by reading Avro, Parquet, ORC, Binary files and accessing Hive and HBase table, and also reading data from Kafka which I&#8217;ve explained in the below articles.<br>
                        The complete code can be downloaded from&nbsp;<a href="https://github.com/spark-examples/spark-scala-examples/blob/master/src/main/scala/com/sparkbyexamples/spark/dataframe/CreateDataFrame.scala" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">GitHub</a><br>
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