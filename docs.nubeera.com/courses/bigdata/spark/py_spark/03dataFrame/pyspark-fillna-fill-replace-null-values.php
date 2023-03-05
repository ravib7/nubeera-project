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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark fillna() & fill() – Replace NULL/None Values</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> --><br>
                    <div class="entry-content clr" itemprop="text">
                        <p>In PySpark, DataFrame.<code>fillna()</code> or <code>DataFrameNaFunctions.fill()</code> is used to replace NULL/None values on all or selected multiple DataFrame columns with either <strong>zero(0), empty string, space, or any constant literal</strong> values. </p>
                        <p>While working on PySpark DataFrame we often need to replace null values since certain operations on null value return error hence, we need to graciously handle nulls as the first step before processing. Also, while writing to a file, it&#8217;s always best practice to replace null values, not doing this result nulls on the output file.</p>
                        <p>As part of the cleanup, sometimes you may need to Drop Rows with NULL/None Values in PySpark DataFrame and Filter Rows by checking IS NULL/NOT NULL conditions.</p>
                        <p>In this article, I will use both <code>fill()</code> and <code>fillna()</code> to replace null/none values with an empty string, constant value, and zero(0) on Dataframe columns integer, string with Python examples.</p>
                        <ul>
                            <li><a href="#pyspark-fillna-and-fill-syntax">PySpark fillna() and fill() Syntax</a></li>
                            <li><a href="#replace-null-with-zero">Replace NULL/None Values with Zero (0)</a></li>
                            <li><a href="#replace-null-with-empty-string">Replace NULL/None Values with Empty String</a></li>
                        </ul>
                        <p>Before we start, Let&#8217;s read a CSV into PySpark DataFrame file, where we have no values on certain rows of String and Integer columns, PySpark assigns null values to these no value columns.</p>
                        <p>The file we are using here is available at GitHub <a href="https://github.com/spark-examples/spark-scala-examples/blob/master/src/main/resources/small_zipcode.csv">small_zipcode.csv</a></p>
                        <pre><blockquote class="language-python">
from pyspark.sql import SparkSession
spark = SparkSession.builder \
    .master(&quot;local[1]&quot;) \
    .appName(&quot;SparkByExamples.com&quot;) \
    .getOrCreate()

filePath=&quot;resources/small_zipcode.csv&quot;
df = spark.read.options(header=&#039;true&#039;, inferSchema=&#039;true&#039;) \
          .csv(filePath)

df.printSchema()
df.show(truncate=False)
</blockquote></pre>
                        <p>This yields the below output. As you see columns type, city and population columns have null values.</p>
                        <pre><blockquote class="language-python">
+---+-------+--------+-------------------+-----+----------+
|id |zipcode|type    |city               |state|population|
+---+-------+--------+-------------------+-----+----------+
|1  |704    |STANDARD|null               |PR   |30100     |
|2  |704    |null    |PASEO COSTA DEL SUR|PR   |null      |
|3  |709    |null    |BDA SAN LUIS       |PR   |3700      |
|4  |76166  |UNIQUE  |CINGULAR WIRELESS  |TX   |84000     |
|5  |76177  |STANDARD|null               |TX   |null      |
+---+-------+--------+-------------------+-----+----------+
</blockquote></pre>
                        <p>Now, let&#8217;s see how to replace these null values.</p>
                        <h2 id="pyspark-fillna-and-fill-syntax">PySpark fillna() &amp; fill() Syntax</h2>
                        <p>PySpark provides DataFrame.fillna()&nbsp;and&nbsp;DataFrameNaFunctions.fill()&nbsp;to replace NULL/None values. These two are aliases of each other and returns the same results.</p>
                        <pre><blockquote class="language-python">
fillna(value, subset=None)
fill(value, subset=None)
</blockquote></pre>
                        <ul>
                            <li><strong>value</strong>&nbsp;– Value should be the data type of int, long, float, string, or dict. Value specified here will be replaced for NULL/None values.</li>
                            <li><strong>subset</strong>&nbsp;– This is optional, when used it should be the subset of the column names where you wanted to replace NULL/None values. </li>
                        </ul>
                        <h2 id="replace-null-with-zero">PySpark Replace NULL/None Values with Zero (0)</h2>
                        <p>PySpark <code>fill(value:Long)</code> signatures that are available in <code>DataFrameNaFunctions</code> is used to replace NULL/None values with numeric values either zero(0) or any constant value for all integer and long datatype columns of PySpark DataFrame or Dataset.</p>
                        <pre><blockquote class="language-python">
#Replace 0 for null for all integer columns
df.na.fill(value=0).show()

#Replace Replace 0 for null on only population column 
df.na.fill(value=0,subset=[&quot;population&quot;]).show()
</blockquote></pre>
                        <p>Above both statements yields the same output, since we have just an integer column <code>population</code> with null values Note that it replaces only Integer columns since our value is 0.</p>
                        <pre><blockquote class="language-scala">
                            
+---+-------+--------+-------------------+-----+----------+
|id |zipcode|type    |city               |state|population|
+---+-------+--------+-------------------+-----+----------+
|1  |704    |STANDARD|null               |PR   |30100     |
|2  |704    |null    |PASEO COSTA DEL SUR|PR   |0         |
|3  |709    |null    |BDA SAN LUIS       |PR   |3700      |
|4  |76166  |UNIQUE  |CINGULAR WIRELESS  |TX   |84000     |
|5  |76177  |STANDARD|null               |TX   |0         |
+---+-------+--------+-------------------+-----+----------+
</blockquote></pre>
                        <h2 id="replace-null-with-empty-string">PySpark Replace Null/None Value with Empty String</h2>
                        <p>Now let&#8217;s see how to replace NULL/None values with an empty string or any constant values String on all DataFrame String columns. </p>
                        <pre><blockquote class="language-python">
df.na.fill(&quot;&quot;).show(false)
</blockquote></pre>
                        <p>Yields below output. This replaces all String type columns with empty/blank string for all NULL values.</p>
                        <pre><blockquote class="language-python">
+---+-------+--------+-------------------+-----+----------+
|id |zipcode|type    |city               |state|population|
+---+-------+--------+-------------------+-----+----------+
|1  |704    |STANDARD|                   |PR   |30100     |
|2  |704    |        |PASEO COSTA DEL SUR|PR   |null      |
|3  |709    |        |BDA SAN LUIS       |PR   |3700      |
|4  |76166  |UNIQUE  |CINGULAR WIRELESS  |TX   |84000     |
|5  |76177  |STANDARD|                   |TX   |null      |
+---+-------+--------+-------------------+-----+----------+
</blockquote></pre>
                        <p>Now, let&#8217;s replace NULL&#8217;s on specific columns, below example replace column <code>type</code> with empty string and column <code>city</code> with value &#8220;unknown&#8221;.</p>
                        <pre><blockquote class="language-python">
df.na.fill(&quot;unknown&quot;,[&quot;city&quot;]) \
    .na.fill(&quot;&quot;,[&quot;type&quot;]).show()
</blockquote></pre>
                        <p>Yields below output. This replaces null values with an empty string for <code>type</code> column and replaces with a constant value &#8220;<code>unknown</code>&#8221; for <code>city</code> column.</p>
                        <pre><blockquote class="language-python">
+---+-------+--------+-------------------+-----+----------+
|id |zipcode|type    |city               |state|population|
+---+-------+--------+-------------------+-----+----------+
|1  |704    |STANDARD|unknown            |PR   |30100     |
|2  |704    |        |PASEO COSTA DEL SUR|PR   |null      |
|3  |709    |        |BDA SAN LUIS       |PR   |3700      |
|4  |76166  |UNIQUE  |CINGULAR WIRELESS  |TX   |84000     |
|5  |76177  |STANDARD|unknown            |TX   |null      |
+---+-------+--------+-------------------+-----+----------+
</blockquote></pre>
                        <p>Alternatively you can also write the above statement as</p>
                        <pre><blockquote class="language-python">
df.na.fill({&quot;city&quot;: &quot;unknown&quot;, &quot;type&quot;: &quot;&quot;}) \
    .show()
</blockquote></pre>
                        <h2>Complete Code</h2>
                        <p>Below is complete code with Scala example. You can use it by copying it from here or use the GitHub to download the source code.</p>
                        <pre><blockquote class="language-python">
from pyspark.sql import SparkSession
spark = SparkSession.builder \
    .master(&quot;local[1]&quot;) \
    .appName(&quot;SparkByExamples.com&quot;) \
    .getOrCreate()

filePath=&quot;resources/small_zipcode.csv&quot;
df = spark.read.options(header=&#039;true&#039;, inferSchema=&#039;true&#039;) \
          .csv(filePath)

df.printSchema()
df.show(truncate=False)


df.fillna(value=0).show()
df.fillna(value=0,subset=[&quot;population&quot;]).show()
df.na.fill(value=0).show()
df.na.fill(value=0,subset=[&quot;population&quot;]).show()


df.fillna(value=&quot;&quot;).show()
df.na.fill(value=&quot;&quot;).show()

df.fillna(&quot;unknown&quot;,[&quot;city&quot;]) \
    .fillna(&quot;&quot;,[&quot;type&quot;]).show()

df.fillna({&quot;city&quot;: &quot;unknown&quot;, &quot;type&quot;: &quot;&quot;}) \
    .show()

df.na.fill(&quot;unknown&quot;,[&quot;city&quot;]) \
    .na.fill(&quot;&quot;,[&quot;type&quot;]).show()

df.na.fill({&quot;city&quot;: &quot;unknown&quot;, &quot;type&quot;: &quot;&quot;}) \
    .show()
</blockquote></pre>
                        <h2>Conclusion</h2>
                        <p>In this PySpark article, you have learned how to replace null/None values with zero or an empty string on integer and string columns respectively using <code>fill()</code> and <code>fillna()</code> transformation functions.</p>
                        <p>Thanks for reading. If you recognize my effort or like articles here please do comment or provide any suggestions for improvements in the comments sections!&nbsp; </p>
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