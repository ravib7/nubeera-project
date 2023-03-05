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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Read JSON file into DataFrame</h3>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">

                    <div class="entry-content clr" itemprop="text">
                        PySpark SQL provides&nbsp;<code>read.json(&quot;path&quot;)</code>&nbsp;to read a single line or multiline (multiple lines) JSON file into PySpark DataFrame and&nbsp;<code>write.json(&quot;path&quot;)</code>&nbsp;to save or write to JSON file, In this tutorial, you will learn how to read a single file, multiple files, all files from a directory into DataFrame and writing DataFrame back to JSON file using Python example.<br>
                        <strong>Note:</strong> PySpark API out of the box supports to read JSON files and many more file formats into PySpark DataFrame.<br>
                        <strong>Table of contents:</strong><br>
                        <ul>
                            <li><a href="#read-json-file">PySpark Read JSON file into DataFrame</a></li>
                            <li><a href="#read-json-multiline">Read JSON file from multiline</a></li>
                            <li><a href="#read-multiple">Read multiple files at a time</a></li>
                            <li><a href="#read-directory">Read all files in a directory</a></li>
                            <li><a href="#custom-schema">Read file with a user-specified schema</a></li>
                            <li><a href="#sql-read-json">Read file using PySpark SQL</a></li>
                            <li><a href="#read-json-options">Options while reading JSON file</a>
                                <ul>
                                    <li><a href="#nullValues">nullValues</a></li>
                                    <li><a href="#dateformat">dateFormat</a> </li>
                                </ul>
                            </li>
                            <li><a href="#write-json-file">PySpark Write DataFrame to JSON file</a>
                                <ul>
                                    <li><a href="#write-options">Using options&nbsp;</a></li>
                                    <li><a rel="noreferrer noopener" href="#saving-mode" target="_blank">Saving Mode</a> </li>
                                </ul>
                            </li>
                        </ul>
                        <h3 id="read-json-file">PySpark Read JSON file into DataFrame</h3>
                        Using <code>read.json(&quot;path&quot;)</code>&nbsp;or <code>read.format(&quot;json&quot;).load(&quot;path&quot;)</code> you can read a JSON file into a PySpark DataFrame, these methods take a file path as an argument.&nbsp;<br>
                        Unlike reading a CSV, By default JSON data source inferschema from an input file.<br>
                        zipcodes.json file used here can be downloaded from GitHub project.<br>
                        <code class="language-python">
                            <pre>
# Read JSON file into dataframe
df = spark.read.json(&quot;resources/zipcodes.json&quot;)
df.printSchema()
df.show()
</pre>
                        </code>
                        When you use<code> format(&quot;json&quot;)</code> method, you can also specify the Data sources by their fully qualified name as below.<br>
                        <code class="language-python">
                            <pre>
# Read JSON file into dataframe
df = spark.read.format(&#039;org.apache.spark.sql.json&#039;) \
        .load(&quot;resources/zipcodes.json&quot;)
</pre>
                        </code>
                        <h3 id="read-json-multiline">Read JSON file from multiline</h3>
                        PySpark JSON data source provides multiple options to read files in different options, use <code>multiline</code> option to read JSON files scattered across multiple lines. By default multiline option, is set to false.<br>
                        Below is the input file we going to read, this same file is also available at <a href="https://github.com/spark-examples/pyspark-examples/blob/master/resources/multiline-zipcode.json">Github</a>.&nbsp;<br>
                        <code class="language-python">
                            <pre>
[{
  &quot;RecordNumber&quot;: 2,
  &quot;Zipcode&quot;: 704,
  &quot;ZipCodeType&quot;: &quot;STANDARD&quot;,
  &quot;City&quot;: &quot;PASEO COSTA DEL SUR&quot;,
  &quot;State&quot;: &quot;PR&quot;
},
{
  &quot;RecordNumber&quot;: 10,
  &quot;Zipcode&quot;: 709,
  &quot;ZipCodeType&quot;: &quot;STANDARD&quot;,
  &quot;City&quot;: &quot;BDA SAN LUIS&quot;,
  &quot;State&quot;: &quot;PR&quot;
}]
</pre>
                        </code>
                        Using <code>read.option(&quot;multiline&quot;,&quot;true&quot;)</code><br>
                        <code class="language-python">
                            <pre>
# Read multiline json file
multiline_df = spark.read.option(&quot;multiline&quot;,&quot;true&quot;) \
      .json(&quot;resources/multiline-zipcode.json&quot;)
multiline_df.show()    
</pre>
                        </code>
                        <h3 id="read-multiple">Reading multiple files at a time</h3>
                        Using the <code>read.json()</code> method you can also read multiple JSON files from different paths, just pass all file names with fully qualified paths by separating comma, for example<br>
                        <code class="language-python">
                            <pre>
# Read multiple files
df2 = spark.read.json(
    [&#039;resources/zipcode1.json&#039;,&#039;resources/zipcode2.json&#039;])
df2.show()  
</pre>
                        </code>
                        <h3 id="read-directory">Reading all files in a directory</h3>
                        We can read all JSON files from a directory into DataFrame just by passing directory as a path to the <code>json()</code> method.<br>
                        <code class="language-python">
                            <pre>
# Read all JSON files from a folder
df3 = spark.read.json(&quot;resources/*.json&quot;)
df3.show()
</pre>
                        </code>
                        <h3 id="custom-schema">Reading files with a user-specified custom schema</h3>
                        PySpark Schema defines the structure of the data, in other words, it is the structure of the DataFrame. PySpark SQL provides StructType &amp; StructField classes to programmatically specify the structure to the DataFrame.<br>
                        If you know the schema of the file ahead and do not want to use the default <code>inferSchema</code> option, use schema option to specify user-defined custom column names and data types.<br>
                        Use the&nbsp;PySpark StructType class to create a custom schema, below we initiate this class and use add a method to add columns to it by providing the column name, data type and nullable option.<br>
                        <code class="language-python">
                            <pre>
# Define custom schema
schema = StructType([
      StructField(&quot;RecordNumber&quot;,IntegerType(),True),
      StructField(&quot;Zipcode&quot;,IntegerType(),True),
      StructField(&quot;ZipCodeType&quot;,StringType(),True),
      StructField(&quot;City&quot;,StringType(),True),
      StructField(&quot;State&quot;,StringType(),True),
      StructField(&quot;LocationType&quot;,StringType(),True),
      StructField(&quot;Lat&quot;,DoubleType(),True),
      StructField(&quot;Long&quot;,DoubleType(),True),
      StructField(&quot;Xaxis&quot;,IntegerType(),True),
      StructField(&quot;Yaxis&quot;,DoubleType(),True),
      StructField(&quot;Zaxis&quot;,DoubleType(),True),
      StructField(&quot;WorldRegion&quot;,StringType(),True),
      StructField(&quot;Country&quot;,StringType(),True),
      StructField(&quot;LocationText&quot;,StringType(),True),
      StructField(&quot;Location&quot;,StringType(),True),
      StructField(&quot;Decommisioned&quot;,BooleanType(),True),
      StructField(&quot;TaxReturnsFiled&quot;,StringType(),True),
      StructField(&quot;EstimatedPopulation&quot;,IntegerType(),True),
      StructField(&quot;TotalWages&quot;,IntegerType(),True),
      StructField(&quot;Notes&quot;,StringType(),True)
  ])

df_with_schema = spark.read.schema(schema) \
        .json(&quot;resources/zipcodes.json&quot;)
df_with_schema.printSchema()
df_with_schema.show()
</pre>
                        </code>
                        <h3 id="sql-read-json">Read JSON file using PySpark SQL</h3>
                        PySpark SQL also provides a way to read a JSON file by creating a temporary view directly from the reading file using spark.sqlContext.sql(&#8220;load JSON to temporary view&#8221;)<br>
                        <code class="language-python">
                            <pre>
spark.sql(&quot;CREATE OR REPLACE TEMPORARY VIEW zipcode USING json OPTIONS&quot; + 
      &quot; (path &#039;resources/zipcodes.json&#039;)&quot;)
spark.sql(&quot;select * from zipcode&quot;).show()
</pre>
                        </code>
                        <p></p>
                        <h3 id="read-json-options">Options while reading JSON file</h3>
                        <h3 id="nullValues">nullValues</h3>
                        Using&nbsp;<code>nullValues</code> option you can specify the string in a JSON to consider as null. For example, if you want to consider a date column with a value &#8220;1900-01-01&#8221; set null on DataFrame.<br>
                        <h3 id="dateformat">dateFormat</h3>
                        code>dateFormat</code> option to used to set the format of the input DateType and TimestampType columns. Supports all java.text.SimpleDateFormat formats.<br>
                        <strong>Note:</strong> Besides the above options, PySpark JSON dataset also supports many other options.<br>
                        <h3 id="dataframe-transformation">Applying DataFrame transformations</h3>
                        Once you havecreate PySpark DataFrame from the JSON file, you can apply all transformation and actions DataFrame support. Please refer to the link for more details.&nbsp;<br>
                        <h3 id="write-json-file">Write PySpark DataFrame to JSON file</h3>
                        Use the PySpark DataFrameWriter object &#8220;write&#8221; method on DataFrame to write a JSON file.&nbsp;<br>
                        <code class="language-python">
                            <pre>
df2.write.json(&quot;/tmp/spark_output/zipcodes.json&quot;)
</pre>
                        </code>
                        <h3 id="write-options">PySpark Options while writing JSON files</h3>
                        While writing a JSON file you can use several options. &nbsp;<br>
                        Other options available&nbsp;<code>nullValue</code>,<code>dateFormat</code><br>
                        <h3 id="saving-mode">PySpark Saving modes</h3>
                        PySpark DataFrameWriter also has a method mode() to specify SaveMode; the argument to this method either takes <code>overwrite</code>, <code>append</code>, <code>ignore</code>, <code>errorifexists</code>.<br>
                        overwrite &#8211; mode is used to overwrite the existing file<br>
                        append &#8211; To add the data to the existing file<br>
                        ignore &#8211; Ignores write operation when the file already exists<br>
                        errorifexists or error &#8211; This is a default option when the file already exists, it returns an error<br>
                        <code class="language-scala">
                            <pre>
 df2.write.mode(&#039;Overwrite&#039;).json(&quot;/tmp/spark_output/zipcodes.json&quot;)
</pre>
                        </code>
                        <h3>Source code for reference</h3>
                        <code class="language-python">
                            <pre>
from pyspark.sql import SparkSession
from pyspark.sql.types import StructType,StructField, StringType, IntegerType,BooleanType,DoubleType
spark = SparkSession.builder \
    .master(&quot;local[1]&quot;) \
    .appName(&quot;SparkByExamples.com&quot;) \
    .getOrCreate()

# Read JSON file into dataframe    
df = spark.read.json(&quot;resources/zipcodes.json&quot;)
df.printSchema()
df.show()

# Read multiline json file
multiline_df = spark.read.option(&quot;multiline&quot;,&quot;true&quot;) \
      .json(&quot;resources/multiline-zipcode.json&quot;)
multiline_df.show()

#Read multiple files
df2 = spark.read.json(
    [&#039;resources/zipcode2.json&#039;,&#039;resources/zipcode1.json&#039;])
df2.show()    

#Read All JSON files from a directory
df3 = spark.read.json(&quot;resources/*.json&quot;)
df3.show()

# Define custom schema
schema = StructType([
      StructField(&quot;RecordNumber&quot;,IntegerType(),True),
      StructField(&quot;Zipcode&quot;,IntegerType(),True),
      StructField(&quot;ZipCodeType&quot;,StringType(),True),
      StructField(&quot;City&quot;,StringType(),True),
      StructField(&quot;State&quot;,StringType(),True),
      StructField(&quot;LocationType&quot;,StringType(),True),
      StructField(&quot;Lat&quot;,DoubleType(),True),
      StructField(&quot;Long&quot;,DoubleType(),True),
      StructField(&quot;Xaxis&quot;,IntegerType(),True),
      StructField(&quot;Yaxis&quot;,DoubleType(),True),
      StructField(&quot;Zaxis&quot;,DoubleType(),True),
      StructField(&quot;WorldRegion&quot;,StringType(),True),
      StructField(&quot;Country&quot;,StringType(),True),
      StructField(&quot;LocationText&quot;,StringType(),True),
      StructField(&quot;Location&quot;,StringType(),True),
      StructField(&quot;Decommisioned&quot;,BooleanType(),True),
      StructField(&quot;TaxReturnsFiled&quot;,StringType(),True),
      StructField(&quot;EstimatedPopulation&quot;,IntegerType(),True),
      StructField(&quot;TotalWages&quot;,IntegerType(),True),
      StructField(&quot;Notes&quot;,StringType(),True)
  ])

df_with_schema = spark.read.schema(schema) \
        .json(&quot;resources/zipcodes.json&quot;)
df_with_schema.printSchema()
df_with_schema.show()

# Create a table from Parquet File
spark.sql(&quot;CREATE OR REPLACE TEMPORARY VIEW zipcode3 USING json OPTIONS&quot; + 
      &quot; (path &#039;resources/zipcodes.json&#039;)&quot;)
spark.sql(&quot;select * from zipcode3&quot;).show()

# PySpark write Parquet File
df2.write.mode(&#039;Overwrite&#039;).json(&quot;/tmp/spark_output/zipcodes.json&quot;)
</pre>
                        </code>
                        <h3>Conclusion:</h3>
                        In this tutorial, you have learned how to read a JSON file with single line record and multiline record into PySpark DataFrame, and also learned reading single and multiple files at a time and writing JSON file back to DataFrame using different save options.<br>

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