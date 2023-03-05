<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra PySpark </title>

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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark StructType & StructField Explained with Examples</h2>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <!-- <content> --><br>
                        <div class="entry-content clr" itemprop="text">
PySpark StructType &amp; StructField classes are used to programmatically specify the schema to the DataFrame and creating complex columns like nested struct, array and map columns. <a href="https://github.com/apache/spark/blob/master/sql/catalyst/src/main/scala/org/apache/spark/sql/types/StructType.scala">StructType</a> is a collection of <a href="https://github.com/apache/spark/blob/master/sql/catalyst/src/main/scala/org/apache/spark/sql/types/StructField.scala">StructField&#8217;s</a> that defines column name, column data type, boolean to specify if the field can be nullable or not and metadata.<br>
In this article, I will explain different ways to define the structure of DataFrame using StructType with PySpark examples. Though PySpark infers a schema from data, some times we may need to define our own column names and data types and this article explains how to define simple, nested, and complex schemas.<br>
<ul><li><a href="#sql-structtype-example">Using PySpark StructType &amp; StructField with DataFrame</a></li><li><a href="#nested-spark-schema">Defining Nested StructType or struct</a></li><li><a href="#update-struct-function">Adding &amp; Changing columns of the DataFrame</a></li><li><a href="#arraytype-maptype">Using SQL ArrayType and MapType</a></li><li><a href="#schema-from-json">Creating StructType or struct from Json file</a></li><li><a href="#structtype-ddl">Creating StructType object from DDL string</a></li><li><a href="#field-exists">Check if a field exists in a StructType</a></li></ul>
<h2>1. StructType &#8211; Defines the structure of the Dataframe</h2>
PySpark provides from <code>pyspark.sql.types import StructType</code> class to define the structure of the DataFrame. <br>
StructType is a collection or list of StructField objects. <br>
<code>printSchema()</code> method on the DataFrame shows StructType columns as &#8220;struct&#8221;.<br>
<h2>2. StructField &#8211; Defines the metadata of the DataFrame column</h2>
PySpark provides <code>pyspark.sql.types import StructField</code> class to define the columns which includes column name(String), column type (DataType), nullable column (Boolean) and metadata (MetaData)<br>
<h2 id="sql-structtype-example">3. Using PySpark StructType &amp; StructField with DataFrame</h2>
While creating a PySpark DataFrame we can specify the structure using StructType and StructField classes. As specified in the introduction, StructType is a collection of StructField&#8217;s which is used to define the column name, data type, and a flag for nullable or not. Using StructField we can also add nested struct schema, ArrayType for arrays, and MapType for key-value pairs which we will discuss in detail in later sections. <br>
The below example demonstrates a very simple example of how to create a StructType &amp; StructField on DataFrame and it&#8217;s usage with sample data to support it. <br>
<pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.types import StructType,StructField, StringType, IntegerType

spark = SparkSession.builder.master(&quot;local[1]&quot;) \
                    .appName(&#039;SparkByExamples.com&#039;) \
                    .getOrCreate()

data = [(&quot;James&quot;,&quot;&quot;,&quot;Smith&quot;,&quot;36636&quot;,&quot;M&quot;,3000),
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
 
df = spark.createDataFrame(data=data,schema=schema)
df.printSchema()
df.show(truncate=False)
</blockquote></pre>
By running the above snippet, it displays below outputs.<br>
<pre><blockquote class="language-python">
root
 |-- firstname: string (nullable = true)
 |-- middlename: string (nullable = true)
 |-- lastname: string (nullable = true)
 |-- id: string (nullable = true)
 |-- gender: string (nullable = true)
 |-- salary: integer (nullable = true)

+---------+----------+--------+-----+------+------+
|firstname|middlename|lastname|id   |gender|salary|
+---------+----------+--------+-----+------+------+
|James    |          |Smith   |36636|M     |3000  |
|Michael  |Rose      |        |40288|M     |4000  |
|Robert   |          |Williams|42114|M     |4000  |
|Maria    |Anne      |Jones   |39192|F     |4000  |
|Jen      |Mary      |Brown   |     |F     |-1    |
+---------+----------+--------+-----+------+------+
</blockquote></pre>
<h2 id="nested-spark-schema">4. Defining Nested StructType object struct</h2>
While working on DataFrame we often need to work with the nested struct column and this can be defined using StructType.<br>
On the below example column &#8220;name&#8221; data type is StructType which is nested. <br>
<pre><blockquote class="language-python">
structureData = [
    ((&quot;James&quot;,&quot;&quot;,&quot;Smith&quot;),&quot;36636&quot;,&quot;M&quot;,3100),
    ((&quot;Michael&quot;,&quot;Rose&quot;,&quot;&quot;),&quot;40288&quot;,&quot;M&quot;,4300),
    ((&quot;Robert&quot;,&quot;&quot;,&quot;Williams&quot;),&quot;42114&quot;,&quot;M&quot;,1400),
    ((&quot;Maria&quot;,&quot;Anne&quot;,&quot;Jones&quot;),&quot;39192&quot;,&quot;F&quot;,5500),
    ((&quot;Jen&quot;,&quot;Mary&quot;,&quot;Brown&quot;),&quot;&quot;,&quot;F&quot;,-1)
  ]
structureSchema = StructType([
        StructField(&#039;name&#039;, StructType([
             StructField(&#039;firstname&#039;, StringType(), True),
             StructField(&#039;middlename&#039;, StringType(), True),
             StructField(&#039;lastname&#039;, StringType(), True)
             ])),
         StructField(&#039;id&#039;, StringType(), True),
         StructField(&#039;gender&#039;, StringType(), True),
         StructField(&#039;salary&#039;, IntegerType(), True)
         ])

df2 = spark.createDataFrame(data=structureData,schema=structureSchema)
df2.printSchema()
df2.show(truncate=False)
</blockquote></pre>
Outputs below schema and the DataFrame<br>
<pre><blockquote class="language-python">
root
 |-- name: struct (nullable = true)
 |    |-- firstname: string (nullable = true)
 |    |-- middlename: string (nullable = true)
 |    |-- lastname: string (nullable = true)
 |-- id: string (nullable = true)
 |-- gender: string (nullable = true)
 |-- salary: integer (nullable = true)

+--------------------+-----+------+------+
|name                |id   |gender|salary|
+--------------------+-----+------+------+
|[James, , Smith]    |36636|M     |3100  |
|[Michael, Rose, ]   |40288|M     |4300  |
|[Robert, , Williams]|42114|M     |1400  |
|[Maria, Anne, Jones]|39192|F     |5500  |
|[Jen, Mary, Brown]  |     |F     |-1    |
+--------------------+-----+------+------+
</blockquote></pre>
<h2 id="update-struct-function">5. Adding &amp; Changing struct of the DataFrame </h2>
Using PySpark SQL function struct(), we can change the struct of the existing DataFrame and add a new StructType to it. The below example demonstrates how to copy the columns from one structure to another and adding a new column. PySpark Column Class also provides some functions to work with the StructType column.<br>
<pre><blockquote class="language-python">
from pyspark.sql.functions import col,struct,when
updatedDF = df2.withColumn(&quot;OtherInfo&quot;, 
    struct(col(&quot;id&quot;).alias(&quot;identifier&quot;),
    col(&quot;gender&quot;).alias(&quot;gender&quot;),
    col(&quot;salary&quot;).alias(&quot;salary&quot;),
    when(col(&quot;salary&quot;).cast(IntegerType()) &lt; 2000,&quot;Low&quot;)
      .when(col(&quot;salary&quot;).cast(IntegerType()) &lt; 4000,&quot;Medium&quot;)
      .otherwise(&quot;High&quot;).alias(&quot;Salary_Grade&quot;)
  )).drop(&quot;id&quot;,&quot;gender&quot;,&quot;salary&quot;)

updatedDF.printSchema()
updatedDF.show(truncate=False)
</blockquote></pre>
Here, it copies &#8220;<code>gender</code>&#8220;, &#8220;<code>salary</code>&#8221; and &#8220;<code>id</code>&#8221; to the new struct &#8220;<code>otherInfo</code>&#8221; and add&#8217;s a new column &#8220;<code>Salary_Grade</code>&#8220;.<br>
<pre><blockquote class="language-python">
root
 |-- name: struct (nullable = true)
 |    |-- firstname: string (nullable = true)
 |    |-- middlename: string (nullable = true)
 |    |-- lastname: string (nullable = true)
 |-- OtherInfo: struct (nullable = false)
 |    |-- identifier: string (nullable = true)
 |    |-- gender: string (nullable = true)
 |    |-- salary: integer (nullable = true)
 |    |-- Salary_Grade: string (nullable = false)
</blockquote></pre>
<h2 id="arraytype-maptype">6. Using SQL ArrayType and MapType</h2>
SQL StructType also supports ArrayType and MapType to define the DataFrame columns for array and map collections respectively. On the below example, column <code>hobbies</code> defined as ArrayType(StringType) and <code>properties</code> defined as MapType(StringType,StringType) meaning both key and value as String.<br>
<pre><blockquote class="language-python">
arrayStructureSchema = StructType([
    StructField(&#039;name&#039;, StructType([
       StructField(&#039;firstname&#039;, StringType(), True),
       StructField(&#039;middlename&#039;, StringType(), True),
       StructField(&#039;lastname&#039;, StringType(), True)
       ])),
       StructField(&#039;hobbies&#039;, ArrayType(StringType()), True),
       StructField(&#039;properties&#039;, MapType(StringType(),StringType()), True)
    ])
</blockquote></pre>
Outputs the below schema. Note that field <code>Hobbies</code> is array type and <code>properties</code> is map type.<br>
<pre><blockquote class="language-python">
root
 |-- name: struct (nullable = true)
 |    |-- firstname: string (nullable = true)
 |    |-- middlename: string (nullable = true)
 |    |-- lastname: string (nullable = true)
 |-- hobbies: array (nullable = true)
 |    |-- element: string (containsNull = true)
 |-- properties: map (nullable = true)
 |    |-- key: string
 |    |-- value: string (valueContainsNull = true)
</blockquote></pre>
<h2 id="schema-from-json">7. Creating StructType object struct from JSON file</h2>
If you have too many columns and the structure of the DataFrame changes now and then, it&#8217;s a good practice to load the SQL StructType schema from JSON file. You can get the schema by using <code>df2.schema.json()</code> , store this in a file and will use it to create a the schema from this file.<br>
<pre><blockquote class="language-python">
print(df2.schema.json())
</blockquote></pre>
<pre><blockquote class="language-python">
{
  &quot;type&quot; : &quot;struct&quot;,
  &quot;fields&quot; : [ {
    &quot;name&quot; : &quot;name&quot;,
    &quot;type&quot; : {
      &quot;type&quot; : &quot;struct&quot;,
      &quot;fields&quot; : [ {
        &quot;name&quot; : &quot;firstname&quot;,
        &quot;type&quot; : &quot;string&quot;,
        &quot;nullable&quot; : true,
        &quot;metadata&quot; : { }
      }, {
        &quot;name&quot; : &quot;middlename&quot;,
        &quot;type&quot; : &quot;string&quot;,
        &quot;nullable&quot; : true,
        &quot;metadata&quot; : { }
      }, {
        &quot;name&quot; : &quot;lastname&quot;,
        &quot;type&quot; : &quot;string&quot;,
        &quot;nullable&quot; : true,
        &quot;metadata&quot; : { }
      } ]
    },
    &quot;nullable&quot; : true,
    &quot;metadata&quot; : { }
  }, {
    &quot;name&quot; : &quot;dob&quot;,
    &quot;type&quot; : &quot;string&quot;,
    &quot;nullable&quot; : true,
    &quot;metadata&quot; : { }
  }, {
    &quot;name&quot; : &quot;gender&quot;,
    &quot;type&quot; : &quot;string&quot;,
    &quot;nullable&quot; : true,
    &quot;metadata&quot; : { }
  }, {
    &quot;name&quot; : &quot;salary&quot;,
    &quot;type&quot; : &quot;integer&quot;,
    &quot;nullable&quot; : true,
    &quot;metadata&quot; : { }
  } ]
}
</blockquote></pre>
Alternatively, you could also use&nbsp;<code>df.schema.simpleString()</code>,&nbsp;this will return an relatively simpler schema format.<br>
Now let&#8217;s load the json file and use it to create a DataFrame.<br>
<pre><blockquote class="language-python">
import json
schemaFromJson = StructType.fromJson(json.loads(schema.json))
df3 = spark.createDataFrame(
        spark.sparkContext.parallelize(structureData),schemaFromJson)
df3.printSchema()
</blockquote></pre>
This prints the same output as the previous section. You can also, have a name, type, and flag for nullable in a comma-separated file and we can use these to create a StructType programmatically, I will leave this to you to explore.<br>
<h2 id="structtype-ddl">8. Creating StructType object struct from DDL String</h2>
Like loading structure from JSON string, we can also create it from DLL ( by using <code>fromDDL()</code> static function on SQL StructType class <code>StructType.fromDDL</code>). You can also generate DDL from a schema using <code>toDDL()</code>. printTreeString() on struct object prints the schema similar to <code>printSchema</code>function returns. <br>
<pre><blockquote class="language-python">
  ddlSchemaStr = &quot;`fullName` STRUCT&lt;`first`: STRING, `last`: STRING,
 `middle`: STRING&gt;,`age` INT,`gender` STRING&quot;
  ddlSchema = StructType.fromDDL(ddlSchemaStr)
  ddlSchema.printTreeString()
</blockquote></pre>
<h2 id="field-exists">9. Checking if a Column Exists in a DataFrame</h2>
If you want to perform some checks on metadata of the DataFrame, for example, if a column or field exists in a DataFrame or data type of column; we can easily do this using several functions on SQL StructType and StructField.<br>
<pre><blockquote class="language-python">
print(df.schema.fieldNames.contains(&quot;firstname&quot;))
print(df.schema.contains(StructField(&quot;firstname&quot;,StringType,true)))
</blockquote></pre>
This example returns &#8220;true&#8221; for both scenarios. And for the second one if you have IntegerType instead of StringType it returns false as the datatype for first name column is String, as it checks every property in a field. Similarly, you can also check if two schemas are equal and more.<br>
<h2>10. Complete Example of PySpark StructType &amp; StructField</h2>
<pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.types import StructType,StructField, StringType, IntegerType,ArrayType,MapType
from pyspark.sql.functions import col,struct,when

spark = SparkSession.builder.master(&quot;local[1]&quot;) \
                    .appName(&#039;SparkByExamples.com&#039;) \
                    .getOrCreate()

data = [(&quot;James&quot;,&quot;&quot;,&quot;Smith&quot;,&quot;36636&quot;,&quot;M&quot;,3000),
    (&quot;Michael&quot;,&quot;Rose&quot;,&quot;&quot;,&quot;40288&quot;,&quot;M&quot;,4000),
    (&quot;Robert&quot;,&quot;&quot;,&quot;Williams&quot;,&quot;42114&quot;,&quot;M&quot;,4000),
    (&quot;Maria&quot;,&quot;Anne&quot;,&quot;Jones&quot;,&quot;39192&quot;,&quot;F&quot;,4000),
    (&quot;Jen&quot;,&quot;Mary&quot;,&quot;Brown&quot;,&quot;&quot;,&quot;F&quot;,-1)
  ]

schema = StructType([ 
    StructField(&quot;firstname&quot;,StringType(),True), 
    StructField(&quot;middlename&quot;,StringType(),True), 
    StructField(&quot;lastname&quot;,StringType(),True), 
    StructField(&quot;id&quot;, StringType(), True), 
    StructField(&quot;gender&quot;, StringType(), True), 
    StructField(&quot;salary&quot;, IntegerType(), True) 
  ])
 
df = spark.createDataFrame(data=data,schema=schema)
df.printSchema()
df.show(truncate=False)

structureData = [
    ((&quot;James&quot;,&quot;&quot;,&quot;Smith&quot;),&quot;36636&quot;,&quot;M&quot;,3100),
    ((&quot;Michael&quot;,&quot;Rose&quot;,&quot;&quot;),&quot;40288&quot;,&quot;M&quot;,4300),
    ((&quot;Robert&quot;,&quot;&quot;,&quot;Williams&quot;),&quot;42114&quot;,&quot;M&quot;,1400),
    ((&quot;Maria&quot;,&quot;Anne&quot;,&quot;Jones&quot;),&quot;39192&quot;,&quot;F&quot;,5500),
    ((&quot;Jen&quot;,&quot;Mary&quot;,&quot;Brown&quot;),&quot;&quot;,&quot;F&quot;,-1)
  ]
structureSchema = StructType([
        StructField(&#039;name&#039;, StructType([
             StructField(&#039;firstname&#039;, StringType(), True),
             StructField(&#039;middlename&#039;, StringType(), True),
             StructField(&#039;lastname&#039;, StringType(), True)
             ])),
         StructField(&#039;id&#039;, StringType(), True),
         StructField(&#039;gender&#039;, StringType(), True),
         StructField(&#039;salary&#039;, IntegerType(), True)
         ])

df2 = spark.createDataFrame(data=structureData,schema=structureSchema)
df2.printSchema()
df2.show(truncate=False)


updatedDF = df2.withColumn(&quot;OtherInfo&quot;, 
    struct(col(&quot;id&quot;).alias(&quot;identifier&quot;),
    col(&quot;gender&quot;).alias(&quot;gender&quot;),
    col(&quot;salary&quot;).alias(&quot;salary&quot;),
    when(col(&quot;salary&quot;).cast(IntegerType()) &lt; 2000,&quot;Low&quot;)
      .when(col(&quot;salary&quot;).cast(IntegerType()) &lt; 4000,&quot;Medium&quot;)
      .otherwise(&quot;High&quot;).alias(&quot;Salary_Grade&quot;)
  )).drop(&quot;id&quot;,&quot;gender&quot;,&quot;salary&quot;)

updatedDF.printSchema()
updatedDF.show(truncate=False)


&quot;&quot;&quot; Array &amp; Map&quot;&quot;&quot;


arrayStructureSchema = StructType([
    StructField(&#039;name&#039;, StructType([
       StructField(&#039;firstname&#039;, StringType(), True),
       StructField(&#039;middlename&#039;, StringType(), True),
       StructField(&#039;lastname&#039;, StringType(), True)
       ])),
       StructField(&#039;hobbies&#039;, ArrayType(StringType()), True),
       StructField(&#039;properties&#039;, MapType(StringType(),StringType()), True)
    ])
</blockquote></pre>
The complete example explained here is available also available at <a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-structtype.py">GitHub</a> project.<br>
<h4>Conclusion:</h4>
In this article, you have learned the usage of SQL StructType, StructField, and how to change the structure of the Pyspark DataFrame at runtime, converting case class to the schema and using ArrayType, MapType.<br>
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