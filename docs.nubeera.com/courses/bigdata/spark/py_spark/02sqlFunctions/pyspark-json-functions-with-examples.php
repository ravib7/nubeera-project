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

                <strong class="px-2" style="font-size: 1.125rem;">PySpark - SQL Functions</strong><br><br>
                <ul>
                    <li><a href="index.php">PySpark – Aggregate Functions</a></li>
                    <li><a href="pyspark-window-functions.php">PySpark – Window Functions</a></li>
                    <li><a href="pyspark-sql-date-and-timestamp-functions.php">PySpark – Date and Timestamp Functions</a></li>
                    <li><a href="pyspark-json-functions-with-examples.php">PySpark – JSON Functions</a></li>
                </ul>

            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark JSON Functions with Examples</h3>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">

                    <div class="entry-content clr" itemprop="text">
                        PySpark JSON functions are used to query or extract the elements from JSON string of DataFrame column by path, convert it to struct, mapt type e.t.c, In this article, I will explain the most used JSON SQL functions with Python examples.<br>
                        <h3>1. PySpark JSON Functions</h3>
                        <a href="#from_json">from_json()</a> &#8211; Converts JSON string into Struct type or Map type.<br>
                        <a href="#to_json">to_json()</a> &#8211; Converts MapType or Struct type to JSON string.<br>
                        <a href="#json_tuple">json_tuple()</a> &#8211; Extract the Data from JSON and create them as a new columns.<br>
                        <a href="#get_json_object">get_json_object()</a> &#8211; Extracts JSON element from a JSON string based on json path specified.<br>
                        <a href="#schema_of_json">schema_of_json()</a> &#8211; Create schema string from JSON string<br>
                        <h3>1.1. Create DataFrame with Column contains JSON String</h3>
                        In order to explain these JSON functions first, let&#8217;s create DataFrame with a column contains JSON string.<br>
                        <code class="language-python">
                            <pre>
from pyspark.sql import SparkSession,Row
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

jsonString=&quot;&quot;&quot;{&quot;Zipcode&quot;:704,&quot;ZipCodeType&quot;:&quot;STANDARD&quot;,&quot;City&quot;:&quot;PARC PARQUE&quot;,&quot;State&quot;:&quot;PR&quot;}&quot;&quot;&quot;
df=spark.createDataFrame([(1, jsonString)],[&quot;id&quot;,&quot;value&quot;])
df.show(truncate=False)

//+---+--------------------------------------------------------------------------+
//|id |value                                                                     |
//+---+--------------------------------------------------------------------------+
//|1  |{&quot;Zipcode&quot;:704,&quot;ZipCodeType&quot;:&quot;STANDARD&quot;,&quot;City&quot;:&quot;PARC PARQUE&quot;,&quot;State&quot;:&quot;PR&quot;}|
//+---+--------------------------------------------------------------------------+
</pre>
                        </code>
                        <h3>2. PySpark JSON Functions Examples</h3>
                        <h3 id="from_json">2.1. from_json()</h3>
                        PySpark <code>from_json()</code> function is used to convert JSON string into Struct type or Map type. The below example converts JSON string to Map key-value pair. I will leave it to you to convert to struct type.<br>
                        <code class="language-python">
                            <pre>
#Convert JSON string column to Map type
from pyspark.sql.types import MapType,StringType
from pyspark.sql.functions import from_json
df2=df.withColumn(&quot;value&quot;,from_json(df.value,MapType(StringType(),StringType())))
df2.printSchema()
df2.show(truncate=False)

//root
// |-- id: integer (nullable = false)
// |-- value: map (nullable = true)
// |    |-- key: string
// |    |-- value: string (valueContainsNull = true)

//+---+---------------------------------------------------------------------------+
//|id |value                                                                      |
//+---+---------------------------------------------------------------------------+
//|1  |[Zipcode -&gt; 704, ZipCodeType -&gt; STANDARD, City -&gt; PARC PARQUE, State -&gt; PR]|
//+---+---------------------------------------------------------------------------+
</pre>
                        </code>
                        <h3 id="to_json">2.2. to_json()</h3>
                        <code>to_json()</code> function is used to convert DataFrame columns MapType or Struct type to JSON string. Here, I am using df2 that created from above <code>from_json()</code> example.<br>
                        <code class="language-python">
                            <pre>
from pyspark.sql.functions import to_json,col
df2.withColumn(&quot;value&quot;,to_json(col(&quot;value&quot;))) \
   .show(truncate=False)

//+---+----------------------------------------------------------------------------+
//|id |value                                                                       |
//+---+----------------------------------------------------------------------------+
//|1  |{&quot;Zipcode&quot;:&quot;704&quot;,&quot;ZipCodeType&quot;:&quot;STANDARD&quot;,&quot;City&quot;:&quot;PARC PARQUE&quot;,&quot;State&quot;:&quot;PR&quot;}|
//+---+----------------------------------------------------------------------------+
</pre>
                        </code>
                        <h3 id="json_tuple">2.3. json_tuple()</h3>
                        Function <code>json_tuple()</code> is used the query or extract the elements from JSON column and create the result as a new columns.<br>
                        <code class="language-python">
                            <pre>
from pyspark.sql.functions import json_tuple
df.select(col(&quot;id&quot;),json_tuple(col(&quot;value&quot;),&quot;Zipcode&quot;,&quot;ZipCodeType&quot;,&quot;City&quot;)) \
    .toDF(&quot;id&quot;,&quot;Zipcode&quot;,&quot;ZipCodeType&quot;,&quot;City&quot;) \
    .show(truncate=False)

//+---+-------+-----------+-----------+
//|id |Zipcode|ZipCodeType|City       |
//+---+-------+-----------+-----------+
//|1  |704    |STANDARD   |PARC PARQUE|
//+---+-------+-----------+-----------+
</pre>
                        </code>
                        <h3 id="get_json_object">2.4. get_json_object()</h3>
                        <code>get_json_object()</code> is used to extract the JSON string based on path from the JSON column.<br>
                        <code class="language-python">
                            <pre>
from pyspark.sql.functions import get_json_object
df.select(col(&quot;id&quot;),get_json_object(col(&quot;value&quot;),&quot;$.ZipCodeType&quot;).alias(&quot;ZipCodeType&quot;)) \
    .show(truncate=False)

//+---+-----------+
//|id |ZipCodeType|
//+---+-----------+
//|1  |STANDARD   |
//+---+-----------+
</pre>
                        </code>
                        <h3 id="schema_of_json">2.5. schema_of_json()</h3>
                        Use schema_of_json() to create schema string from JSON string column.<br>
                        <code class="language-python">
                            <pre>
from pyspark.sql.functions import schema_of_json,lit
schemaStr=spark.range(1) \
    .select(schema_of_json(lit(&quot;&quot;&quot;{&quot;Zipcode&quot;:704,&quot;ZipCodeType&quot;:&quot;STANDARD&quot;,&quot;City&quot;:&quot;PARC PARQUE&quot;,&quot;State&quot;:&quot;PR&quot;}&quot;&quot;&quot;))) \
    .collect()[0][0]
print(schemaStr)

//struct&lt;City:string,State:string,ZipCodeType:string,Zipcode:bigint&gt;
</pre>
                        </code>
                        <h3>3. Complete Example of PySpark JSON Functions</h3>
                        <code class="language-python">
                            <pre>
from pyspark.sql import SparkSession,Row
spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

jsonString=&quot;&quot;&quot;{&quot;Zipcode&quot;:704,&quot;ZipCodeType&quot;:&quot;STANDARD&quot;,&quot;City&quot;:&quot;PARC PARQUE&quot;,&quot;State&quot;:&quot;PR&quot;}&quot;&quot;&quot;
df=spark.createDataFrame([(1, jsonString)],[&quot;id&quot;,&quot;value&quot;])
df.show(truncate=False)

#Convert JSON string column to Map type
from pyspark.sql.types import MapType,StringType
from pyspark.sql.functions import from_json
df2=df.withColumn(&quot;value&quot;,from_json(df.value,MapType(StringType(),StringType())))
df2.printSchema()
df2.show(truncate=False)

from pyspark.sql.functions import to_json,col
df2.withColumn(&quot;value&quot;,to_json(col(&quot;value&quot;))) \
   .show(truncate=False)

from pyspark.sql.functions import json_tuple
df.select(col(&quot;id&quot;),json_tuple(col(&quot;value&quot;),&quot;Zipcode&quot;,&quot;ZipCodeType&quot;,&quot;City&quot;)) \
    .toDF(&quot;id&quot;,&quot;Zipcode&quot;,&quot;ZipCodeType&quot;,&quot;City&quot;) \
    .show(truncate=False)

from pyspark.sql.functions import get_json_object
df.select(col(&quot;id&quot;),get_json_object(col(&quot;value&quot;),&quot;$.ZipCodeType&quot;).alias(&quot;ZipCodeType&quot;)) \
    .show(truncate=False)

from pyspark.sql.functions import schema_of_json,lit
schemaStr=spark.range(1) \
    .select(schema_of_json(lit(&quot;&quot;&quot;{&quot;Zipcode&quot;:704,&quot;ZipCodeType&quot;:&quot;STANDARD&quot;,&quot;City&quot;:&quot;PARC PARQUE&quot;,&quot;State&quot;:&quot;PR&quot;}&quot;&quot;&quot;))) \
    .collect()[0][0]
print(schemaStr)
</pre>
                        </code>

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