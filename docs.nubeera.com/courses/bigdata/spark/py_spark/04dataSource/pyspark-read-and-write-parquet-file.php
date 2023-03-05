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

                <strong class="px-2" style="font-size: 1.125rem;">PySpark - Datasources</strong><br><br>
                <ul>
                    <li><a href="index.php">PySpark – Read & Write CSV File</a></li>
                    <li><a href="pyspark-read-and-write-parquet-file.php">PySpark – Read & Write Parquet File</a></li>
                    <li><a href="pyspark-read-json-file-into-dataframe.php">PySpark – Read & Write JSON file</a></li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Read and Write Parquet File</h3>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">

                    <div class="entry-content clr" itemprop="text">
                        Pyspark SQL provides methods to read Parquet file into DataFrame and write DataFrame to Parquet files, <code>parquet()</code> function from <code>DataFrameReader</code> and <code>DataFrameWriter</code> are used to read from and write/create a Parquet file respectively. Parquet files maintain the schema along with the data hence it is used to process a structured file.<br>
                        In this article, I will explain how to read from and write a parquet file and also will explain how to partition the data and retrieve the partitioned data with the help of SQL.<br>
                        Below are the simple statements on how to write and read parquet files in PySpark which I will explain in detail later sections.<br>
                        <code class="language-python">
                            <pre>
df.write.parquet(&quot;/tmp/out/people.parquet&quot;) 
parDF1=spark.read.parquet(&quot;/temp/out/people.parquet&quot;)
</pre>
                        </code>
                        Before, I explain in detail, first let&#8217;s understand What is Parquet file and its advantages over CSV, JSON and other text file formats.<br>
                        <h3>What is Parquet File?</h3>
                        Apache Parquet file is a columnar storage format available to any project in the Hadoop ecosystem, regardless of the choice of data processing framework, data model, or programming language.<br>
                        <h3>Advantages:</h3>
                        While querying columnar storage, it skips the nonrelevant data very quickly, making faster query execution. As a result aggregation queries consume less time compared to row-oriented databases.<br>
                        It is able to support advanced nested data structures.<br>
                        Parquet supports efficient compression options and encoding schemes.<br>
                        Pyspark SQL provides support for both reading and writing Parquet files that automatically capture the schema of the original data, It also reduces data storage by 75% on average. Pyspark by default supports Parquet in its library hence we don’t need to add any dependency libraries.<br>
                        <h3>Apache Parquet Pyspark Example</h3>
                        Since we don&#8217;t have the parquet file, let&#8217;s work with writing parquet from a DataFrame. First, create a Pyspark DataFrame from a list of data using <code>spark.createDataFrame()</code> method.<br>
                        <code class="language-python">
                            <pre>
data =[(&quot;James &quot;,&quot;&quot;,&quot;Smith&quot;,&quot;36636&quot;,&quot;M&quot;,3000),
              (&quot;Michael &quot;,&quot;Rose&quot;,&quot;&quot;,&quot;40288&quot;,&quot;M&quot;,4000),
              (&quot;Robert &quot;,&quot;&quot;,&quot;Williams&quot;,&quot;42114&quot;,&quot;M&quot;,4000),
              (&quot;Maria &quot;,&quot;Anne&quot;,&quot;Jones&quot;,&quot;39192&quot;,&quot;F&quot;,4000),
              (&quot;Jen&quot;,&quot;Mary&quot;,&quot;Brown&quot;,&quot;&quot;,&quot;F&quot;,-1)]
columns=[&quot;firstname&quot;,&quot;middlename&quot;,&quot;lastname&quot;,&quot;dob&quot;,&quot;gender&quot;,&quot;salary&quot;]
df=spark.createDataFrame(data,columns)
</pre>
                        </code>
                        above example, it creates a DataFrame with columns firstname, middlename, lastname, dob, gender, salary.<br>
                        <h3>Pyspark Write DataFrame to Parquet file format</h3>
                        Now let&#8217;s create a parquet file from PySpark DataFrame by calling the <code>parquet()</code> function of <code>DataFrameWriter</code> class. When you write a DataFrame to parquet file, it automatically preserves column names and their data types. Each part file Pyspark creates has the .parquet file extension. Below is the example,<br>
                        <code class="language-python">
                            <pre>
df.write.parquet(&quot;/tmp/output/people.parquet&quot;)
</pre>
                        </code>
                        <p></p>
                        <img src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-write-parquet.jpg?w=918&ssl=1" alt="pyspark-write-parquet.jpg"><br>
                        <h3>Pyspark Read Parquet file into DataFrame</h3>
                        Pyspark provides a <code>parquet()</code> method in <code>DataFrameReader</code>&nbsp;class to read the parquet file into dataframe. Below is an example of a reading parquet file to data frame.<br>
                        <code class="language-python">
                            <pre>
parDF=spark.read.parquet(&quot;/tmp/output/people.parquet&quot;)
</pre>
                        </code>
                        <h3>Append or Overwrite an existing Parquet file</h3>
                        Using append save mode, you can append a dataframe to an existing parquet file. Incase to overwrite use overwrite save mode.<br>
                        <code class="language-python">
                            <pre>
df.write.mode(&#039;append&#039;).parquet(&quot;/tmp/output/people.parquet&quot;)
df.write.mode(&#039;overwrite&#039;).parquet(&quot;/tmp/output/people.parquet&quot;)
</pre>
                        </code>
                        <h3>Executing SQL queries DataFrame</h3>
                        Pyspark Sql provides to create temporary views on parquet files for executing sql queries. These views are available until your program exists.<br>
                        <code class="language-python">
                            <pre>
parqDF.createOrReplaceTempView(&quot;ParquetTable&quot;)
parkSQL = spark.sql(&quot;select * from ParquetTable where salary &gt;= 4000 &quot;)
</pre>
                        </code>
                        <h3>Creating a table on Parquet file</h3>
                        Now let&#8217;s walk through executing SQL queries on parquet file. In order to execute sql queries, create a temporary view or table directly on the parquet file instead of creating from DataFrame.<br>
                        <code class="language-python">
                            <pre>
spark.sql(&quot;CREATE TEMPORARY VIEW PERSON USING parquet OPTIONS (path \&quot;/tmp/output/people.parquet\&quot;)&quot;)
spark.sql(&quot;SELECT * FROM PERSON&quot;).show()
</pre>
                        </code>
                        Here, we created a temporary view <code>PERSON</code> from &#8220;<code>people.parquet</code>&#8221; file. This gives the following results.<br>
                        <code class="language-python">
                            <pre>
+---------+----------+--------+-----+------+------+
|firstname|middlename|lastname|  dob|gender|salary|
+---------+----------+--------+-----+------+------+
|  Robert |          |Williams|42114|     M|  4000|
|   Maria |      Anne|   Jones|39192|     F|  4000|
| Michael |      Rose|        |40288|     M|  4000|
|   James |          |   Smith|36636|     M|  3000|
|      Jen|      Mary|   Brown|     |     F|    -1|
+---------+----------+--------+-----+------+------+
</pre>
                        </code>
                        <h3>Create Parquet partition file</h3>
                        When we execute a particular query on the PERSON table, it scan&#8217;s through all the rows and returns the results back. This is similar to the traditional database query execution. In PySpark, we can improve query execution in an optimized way by doing partitions on the data using pyspark <code>partitionBy()</code> method. Following is the example of partitionBy().<br>
                        <code class="language-python">
                            <pre>
df.write.partitionBy(&quot;gender&quot;,&quot;salary&quot;).mode(&quot;overwrite&quot;).parquet(&quot;/tmp/output/people2.parquet&quot;)
</pre>
                        </code>
                        When you check the people2.parquet file, it has two partitions &#8220;gender&#8221; followed by &#8220;salary&#8221; inside. <br>
                        <img src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-read-parquet.jpg?w=665&ssl=1" alt="pyspark-read-parquet.jpg"><br>
                        <h3>Retrieving from a partitioned Parquet file</h3>
                        The example below explains of reading partitioned parquet file into DataFrame with gender=M.<br>
                        <code class="language-python">
                            <pre>
parDF2=spark.read.parquet(&quot;/tmp/output/people2.parquet/gender=M&quot;)
parDF2.show(truncate=False)
</pre>
                        </code>
                        Output for the above example is shown below.<br>
                        <code class="language-python">
                            <pre>
+---------+----------+--------+-----+------+
|firstname|middlename|lastname|dob  |salary|
+---------+----------+--------+-----+------+
|Robert   |          |Williams|42114|4000  |
|Michael  |Rose      |        |40288|4000  |
|James    |          |Smith   |36636|3000  |
+---------+----------+--------+-----+------+
</pre>
                        </code>
                        <h3>Creating a table on Partitioned Parquet file</h3>
                        Here, I am creating a table on partitioned parquet file and executing a query that executes faster than the table without partition, hence improving the performance.<br>
                        <code class="language-python">
                            <pre>
spark.sql(&quot;CREATE TEMPORARY VIEW PERSON2 USING parquet OPTIONS (path \&quot;/tmp/output/people2.parquet/gender=F\&quot;)&quot;)
spark.sql(&quot;SELECT * FROM PERSON2&quot; ).show()
</pre>
                        </code>
                        Below is the output .<br>
                        <code class="language-python">
                            <pre>
+---------+----------+--------+-----+------+
|firstname|middlename|lastname|  dob|salary|
+---------+----------+--------+-----+------+
|   Maria |      Anne|   Jones|39192|  4000|
|      Jen|      Mary|   Brown|     |    -1|
+---------+----------+--------+-----+------+
</pre>
                        </code>
                        <h3>Complete Example of PySpark read and write Parquet file</h3>
                        <code class="language-python">
                            <pre>
import pyspark
from pyspark.sql import SparkSession
spark=SparkSession.builder.appName(&quot;parquetFile&quot;).getOrCreate()
data =[(&quot;James &quot;,&quot;&quot;,&quot;Smith&quot;,&quot;36636&quot;,&quot;M&quot;,3000),
              (&quot;Michael &quot;,&quot;Rose&quot;,&quot;&quot;,&quot;40288&quot;,&quot;M&quot;,4000),
              (&quot;Robert &quot;,&quot;&quot;,&quot;Williams&quot;,&quot;42114&quot;,&quot;M&quot;,4000),
              (&quot;Maria &quot;,&quot;Anne&quot;,&quot;Jones&quot;,&quot;39192&quot;,&quot;F&quot;,4000),
              (&quot;Jen&quot;,&quot;Mary&quot;,&quot;Brown&quot;,&quot;&quot;,&quot;F&quot;,-1)]
columns=[&quot;firstname&quot;,&quot;middlename&quot;,&quot;lastname&quot;,&quot;dob&quot;,&quot;gender&quot;,&quot;salary&quot;]
df=spark.createDataFrame(data,columns)
df.write.mode(&quot;overwrite&quot;).parquet(&quot;/tmp/output/people.parquet&quot;)
parDF1=spark.read.parquet(&quot;/tmp/output/people.parquet&quot;)
parDF1.createOrReplaceTempView(&quot;parquetTable&quot;)
parDF1.printSchema()
parDF1.show(truncate=False)

parkSQL = spark.sql(&quot;select * from ParquetTable where salary &gt;= 4000 &quot;)
parkSQL.show(truncate=False)

spark.sql(&quot;CREATE TEMPORARY VIEW PERSON USING parquet OPTIONS (path \&quot;/tmp/output/people.parquet\&quot;)&quot;)
spark.sql(&quot;SELECT * FROM PERSON&quot;).show()

df.write.partitionBy(&quot;gender&quot;,&quot;salary&quot;).mode(&quot;overwrite&quot;).parquet(&quot;/tmp/output/people2.parquet&quot;)

parDF2=spark.read.parquet(&quot;/tmp/output/people2.parquet/gender=M&quot;)
parDF2.show(truncate=False)

spark.sql(&quot;CREATE TEMPORARY VIEW PERSON2 USING parquet OPTIONS (path \&quot;/tmp/output/people2.parquet/gender=F\&quot;)&quot;)
spark.sql(&quot;SELECT * FROM PERSON2&quot; ).show()
</pre>
                        </code>
                        <h4>Conclusion:</h4>
                        We have learned how to write a Parquet file from a PySpark DataFrame and reading parquet file to DataFrame and created view/tables to execute SQL queries. Also explained how to do partitions on parquet files to improve performance. <br>

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