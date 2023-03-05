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
        table,td,th,tr{
            border:1px solid black;
        }
        p{
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark partitionBy() – Write to Disk Example</h2>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <!-- <content> --><br>
                        <div class="entry-content clr" itemprop="text">
<p>PySpark <code>partitionBy()</code> is a function of <code>pyspark.sql.DataFrameWriter</code> class which is used to partition the large dataset (DataFrame) into smaller files based on one or multiple columns while writing to disk, let&#8217;s see how to use this with Python examples.</p>
<p>Partitioning the data on the file system is a way to improve the performance of the query when dealing with a large dataset in the Data lake. A Data Lake is a centralized repository of structured, semi-structured, unstructured, and binary data that allows you to store a large amount of data as-is in its original raw format. </p>
<p>By following the concepts in this article, it will help you to create an efficient Data Lake for production size data.</p>
<h2 id="what-are-hive-partitions">1. What is PySpark Partition?</h2>
<p>PySpark partition is a way to split a large dataset into smaller datasets based on one or more partition keys. When you create a DataFrame from a file/table, based on certain parameters PySpark creates the DataFrame with a certain number of partitions in memory. This is one of the main advantages of PySpark DataFrame over Pandas DataFrame. Transformations on partitioned data run faster as they execute transformations parallelly for each partition.</p>
<p>PySpark supports partition in two ways; partition in memory (DataFrame) and partition on the disk (File system).</p>
<p><strong>Partition in memory:</strong> You can partition or repartition the DataFrame by calling <code>repartition()</code> or <code>coalesce()</code> transformations. </p>
<p><strong>Partition on disk:</strong> While writing the PySpark DataFrame back to disk, you can choose how to partition the data based on columns using <code>partitionBy()</code> of <code>pyspark.sql.DataFrameWriter</code>. This is similar to Hives&nbsp;partitions scheme.</p>
<h2 id="partition-table-advantages">2. Partition Advantages</h2>
<p>As you are aware PySpark is designed to process large datasets with 100x faster than the tradition processing, this wouldn&#8217;t have been possible with out partition. Below are some of the advantages using PySpark partitions on memory or on disk.</p>
<ul><li>Fast accessed to the data</li><li>Provides the ability to perform an operation on a smaller dataset</li></ul>
<p>Partition at rest (disk) is a feature of many databases and data processing frameworks and it is key to make jobs work at scale. </p>
<h2>3. Create DataFrame</h2>
<p>Let&#8217;s Create a DataFrame by reading a CSV file. You can find the dataset explained in this article at <a href="https://github.com/spark-examples/pyspark-examples/blob/master/resources/simple-zipcodes.csv">Github zipcodes.csv file</a></p>
<pre><blockquote class="language-python">
df=spark.read.option(&quot;header&quot;,True) \
        .csv(&quot;/tmp/resources/simple-zipcodes.csv&quot;)
df.printSchema()

#Display below schema
root
 |-- RecordNumber: string (nullable = true)
 |-- Country: string (nullable = true)
 |-- City: string (nullable = true)
 |-- Zipcode: string (nullable = true)
 |-- state: string (nullable = true)
</blockquote></pre>
<p>From above DataFrame, I will be using <code>state</code> as a partition key for our examples below.</p>
<h2 id="spark-parquet-partition">4. PySpark partitionBy() </h2>
<p>PySpark partitionBy() is a function of <code>pyspark.sql.DataFrameWriter</code> class which is used to partition based on column values while writing DataFrame to Disk/File system.</p>
<pre><blockquote class="language-python">
Syntax: partitionBy(self, *cols)
</blockquote></pre>
<p>When you write PySpark DataFrame to disk by calling <code>partitionBy()</code>, PySpark splits the records based on the partition column and stores each partition data into a sub-directory. </p>
<pre><blockquote class="language-python">
#partitionBy()
df.write.option(&quot;header&quot;,True) \
        .partitionBy(&quot;state&quot;) \
        .mode(&quot;overwrite&quot;) \
        .csv(&quot;/tmp/zipcodes-state&quot;)
</blockquote></pre>
<p>On our DataFrame, we have a total of 6 different states hence, it creates 6 directories as shown below. The name of the sub-directory would be the partition column and its value (partition column=value).</p>
<p><strong>Note:</strong> While writing the data as partitions, PySpark eliminates the partition column on the data file and adds partition column &amp; value to the folder name, hence it saves some space on storage.To validate this, open any partition file in a text editor and check.</p>
<img width="881" height="286" src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2021/03/pyspark-partitionby-example.png?resize=881%2C286&#038;ssl=1" alt="pyspark partitionby" data-recalc-dims="1" >
<p>On each directory, you may see one or more part files (since our dataset is small, all records for each <code>state</code> are kept in a single part file). You can change this behavior by <code>repartition()</code> the data in memory first. Specify the number of partitions (part files) you would want for each <code>state</code> as an argument to the repartition() method.</p>
<h2>5. PySpark partitionBy() Multiple Columns</h2>
<p>You can also create partitions on multiple columns using PySpark <code>partitionBy()</code>. Just pass columns you want to partition as arguments to this method.</p>
<pre><blockquote class="language-python">
#partitionBy() multiple columns
df.write.option(&quot;header&quot;,True) \
        .partitionBy(&quot;state&quot;,&quot;city&quot;) \
        .mode(&quot;overwrite&quot;) \
        .csv(&quot;/tmp/zipcodes-state&quot;)
</blockquote></pre>
<p>It creates a folder hierarchy for each partition; we have mentioned the first partition as <code>state</code> followed by <code>city</code> hence, it creates a <code>city</code> folder inside the <code>state</code> folder (one folder for each <code>city</code> in a <code>state</code>).</p>
<img width="1024" height="154" src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2021/03/pyspark-partitionby-multiple-columns.png?resize=1024%2C154&#038;ssl=1" alt="pyspark partitionby multiple columns" data-recalc-dims="1" >
<h2>6. Using repartition() and partitionBy() together</h2>
<p>For each partition column, if you wanted to further divide into several partitions, use <code>repartition()</code> and <code>partitionBy()</code> together as explained in the below example.</p>
<p>repartition() creates specified number of partitions in memory. The&nbsp;<code>partitionBy</code>()&nbsp; will write files to disk for each memory partition and partition column.&nbsp; </p>
<pre><blockquote class="language-python">
#Use repartition() and partitionBy() together
dfRepart.repartition(2)
        .write.option(&quot;header&quot;,True) \
        .partitionBy(&quot;state&quot;) \
        .mode(&quot;overwrite&quot;) \
        .csv(&quot;c:/tmp/zipcodes-state-more&quot;)
</blockquote></pre>
<p>If you look at the folder, you should see only 2 part files for each <code>state</code>. Dataset has 6 unique states and 2 memory partitions for each state, hence the above code creates a maximum total of 6 x 2 = 12 part files.</p>
<img width="1024" height="84" src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2021/03/pyspark-partitionby.png?resize=1024%2C84&#038;ssl=1" alt="pyspark partitionby" data-recalc-dims="1" >
<p><strong>Note:</strong> Since total zipcodes for each US state differ in large, California and Texas have many whereas Delaware has very few, hence it creates a Data Skew (Total rows per each part file differs in large).</p>
<h2>7. Data Skew &#8211; Control Number of Records per Partition File</h2>
<p>Use option <code>maxRecordsPerFile</code> if you want to control the number of records for each partition. This is particularly helpful when your data is skewed (Having some partitions with very low records and other partitions with high number of records).</p>
<pre><blockquote class="language-python">
#partitionBy() control number of partitions
df.write.option(&quot;header&quot;,True) \
        .option(&quot;maxRecordsPerFile&quot;, 2) \
        .partitionBy(&quot;state&quot;) \
        .mode(&quot;overwrite&quot;) \
        .csv(&quot;/tmp/zipcodes-state&quot;)
</blockquote></pre>
<p>The above example creates multiple part files for each <code>state</code> and each part file contains just 2 records.</p>
<h2 id="read-parquet-Partition">8. Read a Specific Partition</h2>
<p>Reads are much faster on partitioned data. This code snippet retrieves the data from a specific partition <code>&quot;state=AL and city=SPRINGVILLE&quot;</code>. Here, It just reads the data from that specific folder instead of scanning a whole file (when not partitioned).</p>
<pre><blockquote class="language-python">
dfSinglePart=spark.read.option(&quot;header&quot;,True) \
            .csv(&quot;c:/tmp/zipcodes-state/state=AL/city=SPRINGVILLE&quot;)
dfSinglePart.printSchema()
dfSinglePart.show()

#Displays
root
 |-- RecordNumber: string (nullable = true)
 |-- Country: string (nullable = true)
 |-- Zipcode: string (nullable = true)

+------------+-------+-------+
|RecordNumber|Country|Zipcode|
+------------+-------+-------+
|       54355|     US|  35146|
+------------+-------+-------+
</blockquote></pre>
<p>While reading specific Partition data into DataFrame, it does not keep the partitions columns on DataFrame hence, you <code>printSchema()</code> and DataFrame is missing <code>state</code> and <code>city</code> columns.</p>
<h2>9. PySpark SQL &#8211; Read Partition Data</h2>
<p>This is an example of how to write a Spark DataFrame by preserving the partition columns on DataFrame. </p>
<pre><blockquote class="language-python">
parqDF = spark.read.option(&quot;header&quot;,True) \
                  .csv(&quot;/tmp/zipcodes-state&quot;)
parqDF.createOrReplaceTempView(&quot;ZIPCODE&quot;)
spark.sql(&quot;select * from ZIPCODE  where state=&#039;AL&#039; and city = &#039;SPRINGVILLE&#039;&quot;) \
    .show()

#Display
+------------+-------+-------+-----+-----------+
|RecordNumber|Country|Zipcode|state|       city|
+------------+-------+-------+-----+-----------+
|       54355|     US|  35146|   AL|SPRINGVILLE|
+------------+-------+-------+-----+-----------+
</blockquote></pre>
<p>The execution of this query is also&nbsp;significantly faster than the query without partition. It filters the data first on <code>state</code> and then applies filters on the <code>city</code> column without scanning the entire dataset.</p>
<h2>10. How to Choose a Partition Column When Writing to File system?</h2>
<p>When creating partitions you have to be very cautious with the number of partitions you would create, as having too many partitions creates too many sub-directories on HDFS which brings unnecessarily and overhead to NameNode (if you are using Hadoop) since it must keep all metadata for the file system in memory. </p>
<p>Let’s assume you have a US census table that contains zip code, city, state, and other columns. Creating a partition on the state, splits the table into around 50 partitions, when searching for a zipcode within a state (state=’CA’ and zipCode =’92704′) results in faster as it needs to scan only in a&nbsp;<strong>state=CA</strong>&nbsp;partition directory.</p>
<p>Partition on zipcode may not be a good option as you might end up with too many partitions.</p>
<p>Another good example of partition is on the Date column. Ideally, you should partition on Year/Month but not on a date.</p>
<h3>Conclusion</h3>
<p>While you are create Data Lake out of Azure, HDFS or AWS you need to understand how to partition your data at rest (File system/disk), PySpark partitionBy() and repartition() help you partition the data and eliminating the Data Skew on your large datasets. </p>
<p>Hope this give you better idea on partitions in PySpark.</p>
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