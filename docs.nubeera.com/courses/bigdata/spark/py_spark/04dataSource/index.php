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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Read CSV file into DataFrame</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                <li class="breadcrumb-item active">PySpark</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                <div class="entry-content clr" itemprop="text">
                    PySpark provides <code>csv(&quot;path&quot;)</code> on DataFrameReader to read a CSV file into PySpark DataFrame and <code>dataframeObj.write.csv(&quot;path&quot;)</code> to save or write to the CSV file. In this tutorial, you will learn how to read a single file, multiple files, all files from a local directory into DataFrame, applying some transformations, and finally writing DataFrame back to CSV file using PySpark example.<br>
                    PySpark supports reading a CSV file with a pipe, comma, tab, space, or any other delimiter/separator files.<br>
                    <strong>Note:</strong> PySpark out of the box supports reading files in CSV, JSON, and many more file formats into PySpark DataFrame.&nbsp;<br>
                    <strong>Table of contents:</strong><br>
                    <ul>
                        <li><a href="#read-csv-dataframe">PySpark Read CSV file into DataFrame</a>
                            <ul>
                                <li><a href="#read-multiple">Read multiple CSV files</a></li>
                                <li><a href="#read-directory">Read all CSV files in a directory</a> </li>
                            </ul>
                        </li>
                        <li><a href="#read-csv-options">Options while reading CSV file</a>
                            <ul>
                                <li><a href="#delimiter">delimiter</a></li>
                                <li><a href="#inferschema">InferSchema</a></li>
                                <li><a href="#header">header</a></li>
                                <li><a href="#quotes">quotes</a></li>
                                <li><a href="#nullValues">nullValues</a></li>
                                <li><a href="#dateformat">dateFormat</a> </li>
                            </ul>
                        </li>
                        <li><a href="#read-csv-with-schema">Read CSV files with a user-specified schema</a></li>
                        <li><a href="#dataframe-transformation">Applying DataFrame transformations</a></li>
                        <li><a href="#write-csv-file">Write DataFrame to CSV file</a>
                            <ul>
                                <li><a href="#write-options">Using options&nbsp;</a></li>
                                <li><a rel="noreferrer noopener" href="#saving-mode" target="_blank">Saving Mode</a> </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 id="read-csv-dataframe">1. PySpark Read CSV File into DataFrame</h3>
                    Using <code>csv(&quot;path&quot;)</code>&nbsp;or <code>format(&quot;csv&quot;).load(&quot;path&quot;)</code> of DataFrameReader, you can read a CSV file into a PySpark DataFrame, These methods take a file path to read from as an argument. When you use <code>format(&quot;csv&quot;)</code> method, you can also specify the Data sources by their fully qualified name, but for built-in sources, you can simply use their short names (<code>csv</code>,<code>json</code>,&nbsp;<code>parquet</code>,&nbsp;<code>jdbc</code>,&nbsp;<code>text</code> e.t.c).&nbsp;<br>
                    <code class="language-scala">
                        <pre>
spark = SparkSession.builder().master(&quot;local[1]&quot;)
          .appName(&quot;SparkByExamples.com&quot;)
          .getOrCreate()
df = spark.read.csv(&quot;/tmp/resources/zipcodes.csv&quot;)
df.printSchema()
</pre>
                    </code>
                    Using fully qualified data source name, you can alternatively do the following.<br>
                    <code class="language-scala">
                        <pre>
df = spark.read.format(&quot;csv&quot;)
                  .load(&quot;/tmp/resources/zipcodes.csv&quot;)
//       or
df = spark.read.format(&quot;org.apache.spark.sql.csv&quot;)
                  .load(&quot;/tmp/resources/zipcodes.csv&quot;)
df.printSchema()
</pre>
                    </code>
                    This example reads the data into DataFrame columns <code>&quot;_c0&quot;</code> for the first column and <code>&quot;_c1&quot;</code> for the second and so on. and by default data type for all these columns is treated as String.<br>
                    <code class="language-scala">
                        <pre>
root
 |-- _c0: string (nullable = true)
 |-- _c1: string (nullable = true)
 |-- _c2: string (nullable = true)
</pre>
                    </code>
                    <h3>1.1 Using Header Record For Column Names</h3>
                    If you have a header with column names on your input file, you need to explicitly specify <code>True</code> for header option using <code>&lt;a href=&quot;#header&quot;&gt;option(&quot;header&quot;,True)&lt;/a&gt;</code> not mentioning this, the API treats header as a data record.<br>
                    <code class="language-scala">
                        <pre>
df2 = spark.read.option(&quot;header&quot;,True) \
     .csv(&quot;/tmp/resources/zipcodes.csv&quot;)
</pre>
                    </code>
                    As mentioned earlier, PySpark reads all columns as a string (StringType) by default.&nbsp;I will explain in later sections on how to read the schema (<code>inferschema</code>) from the header record and derive the column type based on the data.<br>
                    <h3 id="read-multiple">1.2 Read Multiple CSV Files</h3>
                    Using the <code>read.csv()</code> method you can also read multiple csv files, just pass all file names by separating comma as a path, for example :&nbsp;<br>
                    <code class="language-scala">
                        <pre>
df = spark.read.csv(&quot;path1,path2,path3&quot;)
</pre>
                    </code>
                    <h4 id="read-directory">1.3 Read all CSV Files in a Directory</h4>
                    &nbsp;We can read all CSV files from a directory into DataFrame just by passing directory as a path to the <code>csv()</code> method.<br>
                    <code class="language-scala">
                        <pre>
df = spark.read.csv(&quot;Folder path&quot;)
</pre>
                    </code>
                    <h3 id="read-csv-options">2. Options While Reading CSV File</h3>
                    PySpark CSV dataset provides multiple options to work with CSV files. Below are some of the most important options explained with examples.<br>
                    You can either use chaining <code>option(self, key, value)</code> to use multiple options or use alternate <code>options(self, **options)</code> method.<br>
                    <h3 id="delimiter">2.1 delimiter</h3>
                    <code>delimiter</code>&nbsp;option is used to specify the column delimiter of the CSV file. By default, it is <strong>comma (,)</strong> character, but can be set to any character like <strong>pipe(|)</strong>, <strong>tab (\t)</strong>, <strong>space</strong> using this option.<br>
                    <code class="language-scala">
                        <pre>
df3 = spark.read.options(delimiter=&#039;,&#039;) \
  .csv(&quot;C:/apps/sparkbyexamples/src/pyspark-examples/resources/zipcodes.csv&quot;)
</pre>
                    </code>
                    <h3 id="inferSchema">2.2 inferSchema</h3>
                    The default value set to this option is&nbsp;<code>False</code> when setting to <code>true</code> it automatically infers column types based on the data. Note that, it requires reading the data one more time to infer the schema.<br>
                    <code class="language-scala">
                        <pre>
df4 = spark.read.options(inferSchema=&#039;True&#039;,delimiter=&#039;,&#039;) \
  .csv(&quot;src/main/resources/zipcodes.csv&quot;)
</pre>
                    </code>
                    Alternatively you can also write this by chaining <code>option()</code> method.<br>
                    <code class="language-scala">
                        <pre>
df4 = spark.read.option(&quot;inferSchema&quot;,True) \
                .option(&quot;delimiter&quot;,&quot;,&quot;) \
  .csv(&quot;src/main/resources/zipcodes.csv&quot;)
</pre>
                    </code>
                    <h3 id="header">2.3 header</h3>
                    This option is used to read the first line of the CSV file as column names. By default the value of this option is&nbsp;<code>False</code>&nbsp;, and all column types are assumed to be a string.<br>
                    <code class="language-scala">
                        <pre>
df3 = spark.read.options(header=&#039;True&#039;, inferSchema=&#039;True&#039;, delimiter=&#039;,&#039;) \
  .csv(&quot;/tmp/resources/zipcodes.csv&quot;)
</pre>
                    </code>
                    <h3 id="quotes">2.4 quotes</h3>
                    When you have a column with a delimiter that used to split the columns, use&nbsp;<code>quotes</code>&nbsp;option to specify the quote character, by default it is &#8221; and delimiters inside quotes are ignored. but using this option you can set any character.<br>
                    <h3 id="nullValues">2.5 nullValues</h3>
                    Using&nbsp;<code>nullValues</code>&nbsp;option you can specify the string in a CSV to consider as null. For example, if you want to consider a date column with a value <strong><code>&quot;1900-01-01&quot;</code></strong> set null on DataFrame.<br>
                    <h3 id="dateFormat">2.6 dateFormat</h3>
                    <code>dateFormat</code> option to used to set the format of the input DateType and TimestampType columns. Supports all <code>java.text.SimpleDateFormat</code> formats.<br>
                    <strong>Note:</strong> Besides the above options, PySpark CSV API also supports many other options.<br>
                    <h3 id="read-csv-with-schema">3. Reading CSV files with a user-specified custom schema</h3>
                    If you know the schema of the file ahead and do not want to use the <code>inferSchema</code> option for column names and types, use user-defined custom column names and type using <code>schema</code> option.<br>
                    <code class="language-scala">
                        <pre>
schema = StructType() \
      .add(&quot;RecordNumber&quot;,IntegerType(),True) \
      .add(&quot;Zipcode&quot;,IntegerType(),True) \
      .add(&quot;ZipCodeType&quot;,StringType(),True) \
      .add(&quot;City&quot;,StringType(),True) \
      .add(&quot;State&quot;,StringType(),True) \
      .add(&quot;LocationType&quot;,StringType(),True) \
      .add(&quot;Lat&quot;,DoubleType(),True) \
      .add(&quot;Long&quot;,DoubleType(),True) \
      .add(&quot;Xaxis&quot;,IntegerType(),True) \
      .add(&quot;Yaxis&quot;,DoubleType(),True) \
      .add(&quot;Zaxis&quot;,DoubleType(),True) \
      .add(&quot;WorldRegion&quot;,StringType(),True) \
      .add(&quot;Country&quot;,StringType(),True) \
      .add(&quot;LocationText&quot;,StringType(),True) \
      .add(&quot;Location&quot;,StringType(),True) \
      .add(&quot;Decommisioned&quot;,BooleanType(),True) \
      .add(&quot;TaxReturnsFiled&quot;,StringType(),True) \
      .add(&quot;EstimatedPopulation&quot;,IntegerType(),True) \
      .add(&quot;TotalWages&quot;,IntegerType(),True) \
      .add(&quot;Notes&quot;,StringType(),True)
      
df_with_schema = spark.read.format(&quot;csv&quot;) \
      .option(&quot;header&quot;, True) \
      .schema(schema) \
      .load(&quot;/tmp/resources/zipcodes.csv&quot;)
</pre>
                    </code>
                    <h3 id="dataframe-transformation">4. Applying DataFrame transformations</h3>
                    Once you have created DataFrame from the CSV file, you can apply all transformation and actions DataFrame support. Please refer to the link for more details.&nbsp;<br>
                    <h3 id="write-csv-file">5. Write PySpark DataFrame to CSV file</h3>
                    Use the <code>write()</code> method of the PySpark DataFrameWriter object to write PySpark DataFrame to a CSV file.<br>
                    <code class="language-scala">
                        <pre>
df.write.option(&quot;header&quot;,True) \
 .csv(&quot;/tmp/spark_output/zipcodes&quot;)
</pre>
                    </code>
                    <h3 id="write-options">5.1 Options</h3>
                    While writing a CSV file you can use several options. for example, <code>header</code> to output the DataFrame column names as header record and <code>delimiter</code> to specify the delimiter on the CSV output file.<br>
                    <code class="language-scala">
                        <pre>
df2.write.options(header=&#039;True&#039;, delimiter=&#039;,&#039;) \
 .csv(&quot;/tmp/spark_output/zipcodes&quot;)
</pre>
                    </code>
                    Other options available&nbsp;<code>quote</code>,<code>escape</code>,<code>nullValue</code>,<code>dateFormat</code>,<code>quoteMode</code> .<br>
                    <h3 id="saving-modes">5.2 Saving modes</h3>
                    PySpark DataFrameWriter also has a method mode() to specify saving mode.<br>
                    <code>overwrite</code> &#8211; mode is used to overwrite the existing file.<br>
                    <code>append</code> &#8211; To add the data to the existing file.<br>
                    <code>ignore</code> &#8211; Ignores write operation when the file already exists.<br>
                    <code>error</code> &#8211; This is a default option when the file already exists, it returns an error.<br>
                    <code class="language-scala">
                        <pre>
df2.write.mode(&#039;overwrite&#039;).csv(&quot;/tmp/spark_output/zipcodes&quot;)
//you can also use this
df2.write.format(&quot;csv&quot;).mode(&#039;overwrite&#039;).save(&quot;/tmp/spark_output/zipcodes&quot;)
</pre>
                    </code>
                    <h3>6. PySpark Read CSV Complete Example</h3>
                    <code class="language-scala">
                        <pre>
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.types import StructType,StructField, StringType, IntegerType 
from pyspark.sql.types import ArrayType, DoubleType, BooleanType
from pyspark.sql.functions import col,array_contains

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

df = spark.read.csv(&quot;/tmp/resources/zipcodes.csv&quot;)

df.printSchema()

df2 = spark.read.option(&quot;header&quot;,True) \
     .csv(&quot;/tmp/resources/zipcodes.csv&quot;)
df2.printSchema()
   
df3 = spark.read.options(header=&#039;True&#039;, delimiter=&#039;,&#039;) \
  .csv(&quot;/tmp/resources/zipcodes.csv&quot;)
df3.printSchema()

schema = StructType() \
      .add(&quot;RecordNumber&quot;,IntegerType(),True) \
      .add(&quot;Zipcode&quot;,IntegerType(),True) \
      .add(&quot;ZipCodeType&quot;,StringType(),True) \
      .add(&quot;City&quot;,StringType(),True) \
      .add(&quot;State&quot;,StringType(),True) \
      .add(&quot;LocationType&quot;,StringType(),True) \
      .add(&quot;Lat&quot;,DoubleType(),True) \
      .add(&quot;Long&quot;,DoubleType(),True) \
      .add(&quot;Xaxis&quot;,IntegerType(),True) \
      .add(&quot;Yaxis&quot;,DoubleType(),True) \
      .add(&quot;Zaxis&quot;,DoubleType(),True) \
      .add(&quot;WorldRegion&quot;,StringType(),True) \
      .add(&quot;Country&quot;,StringType(),True) \
      .add(&quot;LocationText&quot;,StringType(),True) \
      .add(&quot;Location&quot;,StringType(),True) \
      .add(&quot;Decommisioned&quot;,BooleanType(),True) \
      .add(&quot;TaxReturnsFiled&quot;,StringType(),True) \
      .add(&quot;EstimatedPopulation&quot;,IntegerType(),True) \
      .add(&quot;TotalWages&quot;,IntegerType(),True) \
      .add(&quot;Notes&quot;,StringType(),True)
      
df_with_schema = spark.read.format(&quot;csv&quot;) \
      .option(&quot;header&quot;, True) \
      .schema(schema) \
      .load(/tmp/resources/zipcodes.csv&quot;)
df_with_schema.printSchema()

df2.write.option(&quot;header&quot;,True) \
 .csv(&quot;/tmp/spark_output/zipcodes123&quot;)
</pre>
                    </code>
                    <h3>7. Conclusion:</h3>
                    In this tutorial, you have learned how to read a CSV file, multiple CSV files and all files from a local folder into PySpark DataFrame, using multiple options to change the default behavior and write CSV files back to DataFrame using different save options. <br>
                    Happy Learning !!<br>

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