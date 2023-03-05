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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Column Class | Operators &#038; Functions</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> --><br>
                    <div class="entry-content clr" itemprop="text">
                        <code>pyspark.sql.Column</code> class provides several functions to work with DataFrame to manipulate the Column values, evaluate the boolean expression to filter rows, retrieve a value or part of a value from a DataFrame column, and to work with list, map &amp; struct columns. <br>
                        In this article, I will cover how to create Column object, access them to perform operations, and finally most used PySpark Column Functions with Examples.<br>
                        <strong>Key Points:</strong><br>
                        <ul>
                            <li>PySpark Column class represents a single Column in a DataFrame.</li>
                            <li>It provides functions that are most used to manipulate DataFrame Columns &amp; Rows.</li>
                            <li>Some of these Column functions evaluate a Boolean expression that can be used with filter() transformation to filter the DataFrame Rows.</li>
                            <li>Provides functions to get a value from a list column by index, map value by key &amp; index, and finally struct nested column.</li>
                            <li>PySpark also provides additional functions <a href="https://spark.apache.org/docs/latest/api/python/_modules/pyspark/sql/functions.html" target="_blank" rel="noreferrer noopener">pyspark.sql.functions</a> that take Column object and return a Column type.</li>
                            <li></li>
                        </ul>
                        <strong>Note:</strong> Most of the <a href="https://spark.apache.org/docs/latest/api/python/_modules/pyspark/sql/functions.html">pyspark.sql.functions</a> return Column type hence it is very important to know the operation you can perform with Column type.<br>
                        <h2>1. Create Column Class Object</h2>
                        One of the simplest ways to create a Column class object is by using PySpark lit() SQL function, this takes a literal value and returns a Column object. <br>
                        <pre><blockquote class="language-python">
from pyspark.sql.functions import lit
colObj = lit(&quot;sparkbyexamples.com&quot;)
</blockquote></pre>
                        You can also access the Column from DataFrame by multiple ways.<br>
                        <pre><blockquote class="language-python">
data=[(&quot;James&quot;,23),(&quot;Ann&quot;,40)]
df=spark.createDataFrame(data).toDF(&quot;name.fname&quot;,&quot;gender&quot;)
df.printSchema()
#root
# |-- name.fname: string (nullable = true)
# |-- gender: long (nullable = true)

# Using DataFrame object (df)
df.select(df.gender).show()
df.select(df[&quot;gender&quot;]).show()
#Accessing column name with dot (with backticks)
df.select(df[&quot;`name.fname`&quot;]).show()

#Using SQL col() function
from pyspark.sql.functions import col
df.select(col(&quot;gender&quot;)).show()
#Accessing column name with dot (with backticks)
</pre>df.select(col(&quot;`name.fname`&quot;)).show()
                        </code>
                        Below example demonstrates accessing struct type columns. Here I have use PySpark Row class to create a struct type. Alternatively you can also create it by using PySpark StructType &amp; StructField classes<br>
                        <pre><blockquote class="language-python">
#Create DataFrame with struct using Row class
from pyspark.sql import Row
data=[Row(name=&quot;James&quot;,prop=Row(hair=&quot;black&quot;,eye=&quot;blue&quot;)),
      Row(name=&quot;Ann&quot;,prop=Row(hair=&quot;grey&quot;,eye=&quot;black&quot;))]
df=spark.createDataFrame(data)
df.printSchema()
#root
# |-- name: string (nullable = true)
# |-- prop: struct (nullable = true)
# |    |-- hair: string (nullable = true)
# |    |-- eye: string (nullable = true)

#Access struct column
df.select(df.prop.hair).show()
df.select(df[&quot;prop.hair&quot;]).show()
df.select(col(&quot;prop.hair&quot;)).show()

#Access all columns from struct
df.select(col(&quot;prop.*&quot;)).show()
</blockquote></pre>
                        <h2>2. PySpark Column Operators</h2>
                        PySpark column also provides a way to do arithmetic operations on columns using operators.<br>
                        <pre><blockquote class="language-python">
data=[(100,2,1),(200,3,4),(300,4,4)]
df=spark.createDataFrame(data).toDF(&quot;col1&quot;,&quot;col2&quot;,&quot;col3&quot;)

#Arthmetic operations
df.select(df.col1 + df.col2).show()
df.select(df.col1 - df.col2).show() 
df.select(df.col1 * df.col2).show()
df.select(df.col1 / df.col2).show()
df.select(df.col1 % df.col2).show()

df.select(df.col2 &gt; df.col3).show()
df.select(df.col2 &lt; df.col3).show()
df.select(df.col2 == df.col3).show()
</blockquote></pre>
                        <h2>3. PySpark Column Functions</h2>
                        Let&#8217;s see some of the most used Column Functions, on below table, I have grouped related functions together to make it easy, click on the link for examples.<br>
                        <figure class="wp-block-table is-style-stripes">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Column Function</th>
                                        <th>Function Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>alias</code>(*alias,&nbsp;**kwargs)<br><code>name</code>(*alias,&nbsp;**kwargs)</td>
                                        <td>Provides alias to the column or expressions<br><code>name()</code>&nbsp;returns same as&nbsp;<code>alias()</code>.</td>
                                    </tr>
                                    <tr>
                                        <td><code>asc</code>()<br><code>asc_nulls_first</code>()<br><code>asc_nulls_last</code>()</td>
                                        <td>Returns ascending order of the column.<br><code>asc_nulls_first</code>() Returns null values first then non-null values.<br><code>asc_nulls_last</code>() &#8211; Returns null values after non-null values.</td>
                                    </tr>
                                    <tr>
                                        <td><code>astype</code>(dataType)<br><code>cast</code>(dataType)</td>
                                        <td>Used to cast the data type to another type.<br><code>astype()</code>&nbsp;returns same as&nbsp;<code>cast()</code>.</td>
                                    </tr>
                                    <tr>
                                        <td><code>between</code>(lowerBound,&nbsp;upperBound)</td>
                                        <td>Checks if the columns values are between lower and upper bound. Returns boolean value.</td>
                                    </tr>
                                    <tr>
                                        <td><code>bitwiseAND</code>(other)<br><code>bitwiseOR</code>(other)<br><code>bitwiseXOR</code>(other)</td>
                                        <td>Compute bitwise AND, OR &amp; XOR of this expression with another expression respectively.</td>
                                    </tr>
                                    <tr>
                                        <td><code>contains</code>(other)</td>
                                        <td>Check if String contains in another string.</td>
                                    </tr>
                                    <tr>
                                        <td><code>desc</code>()<br><code>desc_nulls_first</code>()<br><code>desc_nulls_last</code>()</td>
                                        <td>Returns descending order of the column.<br><code>desc_nulls_first</code>() -null values appear before non-null values.<br><code>desc_nulls_last</code>() &#8211; null values appear after non-null values.</td>
                                    </tr>
                                    <tr>
                                        <td><code>startswith</code>(other)<br><code>endswith</code>(other)</td>
                                        <td>String starts with. Returns boolean expression<br>String ends with. Returns boolean expression</td>
                                    </tr>
                                    <tr>
                                        <td><code>eqNullSafe</code>(other)</td>
                                        <td>Equality test that is safe for null values.</td>
                                    </tr>
                                    <tr>
                                        <td><code>getField</code>(name)</td>
                                        <td>Returns a field by name in a StructField and by key in Map.</td>
                                    </tr>
                                    <tr>
                                        <td><code>getItem</code>(key)</td>
                                        <td>Returns a values from Map/Key at the provided position.</td>
                                    </tr>
                                    <tr>
                                        <td><code>isNotNull</code>()<br><code>isNull</code>()</td>
                                        <td>isNotNull() &#8211; Returns True if the current expression is NOT null.<br>isNull() &#8211; Returns True if the current expression is null.</td>
                                    </tr>
                                    <tr>
                                        <td><code>isin</code>(*cols)</td>
                                        <td>A boolean expression that is evaluated to true if the value of this expression is contained by the evaluated values of the arguments.</td>
                                    </tr>
                                    <tr>
                                        <td><code>like</code>(other)<br><code>rlike</code>(other)</td>
                                        <td>Similar to SQL like expression.<br>Similar to SQL RLIKE expression (LIKE with Regex).</td>
                                    </tr>
                                    <tr>
                                        <td><code>over</code>(window)</td>
                                        <td>Used with window column</td>
                                    </tr>
                                    <tr>
                                        <td><code>substr</code>(startPos,&nbsp;length)</td>
                                        <td>Return a&nbsp;Column&nbsp;which is a substring of the column.</td>
                                    </tr>
                                    <tr>
                                        <td><code>when</code>(condition,&nbsp;value)<br><code>otherwise</code>(value)</td>
                                        <td>Similar to SQL CASE WHEN, Executes a list of conditions and returns one of multiple possible result expressions.</td>
                                    </tr>
                                    <tr>
                                        <td><code>dropFields</code>(*fieldNames)</td>
                                        <td>Used to drops fields in&nbsp;StructType&nbsp;by name.</td>
                                    </tr>
                                    <tr>
                                        <td><code>withField</code>(fieldName,&nbsp;col)</td>
                                        <td>An expression that adds/replaces a field in<code>&nbsp;StructType</code>&nbsp;by name.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </figure>
                        <h2>4. PySpark Column Functions Examples</h2>
                        Let&#8217;s create a simple DataFrame to work with PySpark SQL Column examples. For most of the examples below, I will be referring DataFrame object name (df.) to get the column.<br>
                        <pre><blockquote class="language-python">
data=[(&quot;James&quot;,&quot;Bond&quot;,&quot;100&quot;,None),
      (&quot;Ann&quot;,&quot;Varsa&quot;,&quot;200&quot;,&#039;F&#039;),
      (&quot;Tom Cruise&quot;,&quot;XXX&quot;,&quot;400&quot;,&#039;&#039;),
      (&quot;Tom Brand&quot;,None,&quot;400&quot;,&#039;M&#039;)] 
columns=[&quot;fname&quot;,&quot;lname&quot;,&quot;id&quot;,&quot;gender&quot;]
df=spark.createDataFrame(data,columns)
</blockquote></pre>
                        <h2>4.1 alias() &#8211; Set&#8217;s name to Column </h2>
                        On below example <code>df.fname</code> refers to Column object and <code>alias()</code> is a function of the Column to give alternate name. Here, <code>fname</code> column has been changed to <code>first_name</code> &amp; <code>lname</code> to <code>last_name</code>.<br>
                        On second example I have use PySpark expr() function to concatenate columns and named column as <code>fullName</code>.<br>
                        <pre><blockquote class="language-python">
#alias
from pyspark.sql.functions import expr
df.select(df.fname.alias(&quot;first_name&quot;), \
          df.lname.alias(&quot;last_name&quot;)
   ).show()

#Another example
df.select(expr(&quot; fname ||&#039;,&#039;|| lname&quot;).alias(&quot;fullName&quot;) \
   ).show()
</blockquote></pre>
                        <h3>4.2 asc() &amp; desc() &#8211; Sort the DataFrame columns by Ascending or Descending order.</h3>
                        <pre><blockquote class="language-python">
#asc, desc to sort ascending and descending order repsectively.
df.sort(df.fname.asc()).show()
df.sort(df.fname.desc()).show()
</blockquote></pre>
                        <h2>4.3 cast() &amp; astype() &#8211; Used to convert the data Type.</h2>
                        <pre><blockquote class="language-python">
#cast
df.select(df.fname,df.id.cast(&quot;int&quot;)).printSchema()
</blockquote></pre>
                        <h3>4.4 between() &#8211; Returns a Boolean expression when a column values in between lower and upper bound.</h3>
                        <pre><blockquote class="language-python">
#between
df.filter(df.id.between(100,300)).show()
</blockquote></pre>
                        <h3>4.5 contains() &#8211; Checks if a DataFrame column value contains a a value specified in this function.</h3>
                        <pre><blockquote class="language-python">
#contains
df.filter(df.fname.contains(&quot;Cruise&quot;)).show()
</blockquote></pre>
                        <h3>4.6 startswith() &amp; endswith() &#8211; Checks if the value of the DataFrame Column starts and ends with a String respectively.</h3>
                        <pre><blockquote class="language-python">
#startswith, endswith()
df.filter(df.fname.startswith(&quot;T&quot;)).show()
df.filter(df.fname.endswith(&quot;Cruise&quot;)).show()
</blockquote></pre>
                        <h3>4.7 eqNullSafe() &#8211; </h3>
                        <pre><blockquote class="language-python">

</blockquote></pre>
                        <h3>4.8 isNull &amp; isNotNull() &#8211; Checks if the DataFrame column has NULL or non NULL values.</h3>
                        Refer to <br>
                        <pre><blockquote class="language-python">
#isNull &amp; isNotNull
df.filter(df.lname.isNull()).show()
df.filter(df.lname.isNotNull()).show()
</blockquote></pre>
                        <h3>4.9 like() &amp; rlike() &#8211; Similar to SQL LIKE expression</h3>
                        <pre><blockquote class="language-python">
#like , rlike
df.select(df.fname,df.lname,df.id) \
  .filter(df.fname.like(&quot;%om&quot;)) 
</blockquote></pre>
                        <h3>4.10 substr() &#8211; Returns a Column after getting sub string from the Column</h3>
                        <pre><blockquote class="language-python">
df.select(df.fname.substr(1,2).alias(&quot;substr&quot;)).show()
</blockquote></pre>
                        <h3>4.11 when() &amp; otherwise() &#8211; It is similar to SQL Case When, executes sequence of expressions until it matches the condition and returns a value when match.</h3>
                        <pre><blockquote class="language-python">
#when &amp; otherwise
from pyspark.sql.functions import when
df.select(df.fname,df.lname,when(df.gender==&quot;M&quot;,&quot;Male&quot;) \
              .when(df.gender==&quot;F&quot;,&quot;Female&quot;) \
              .when(df.gender==None ,&quot;&quot;) \
              .otherwise(df.gender).alias(&quot;new_gender&quot;) \
    ).show()
</blockquote></pre>
                        <h3>4.12 isin() &#8211; Check if value presents in a List.</h3>
                        <pre><blockquote class="language-python">
#isin
li=[&quot;100&quot;,&quot;200&quot;]
df.select(df.fname,df.lname,df.id) \
  .filter(df.id.isin(li)) \
  .show()
</blockquote></pre>
                        <h3>4.13 getField() &#8211; To get the value by key from MapType column and by stuct child name from StructType column</h3>
                        Rest of the below functions operates on List, Map &amp; Struct data structures hence to demonstrate these I will use another DataFrame with list, map and struct columns. For more explanation how to use Arrays refer to PySpark ArrayType Column on DataFrame Examples &amp; for map refer to PySpark MapType Examples<br>
                        <pre><blockquote class="language-python">
#Create DataFrame with struct, array &amp; map
from pyspark.sql.types import StructType,StructField,StringType,ArrayType,MapType
data=[((&quot;James&quot;,&quot;Bond&quot;),[&quot;Java&quot;,&quot;C#&quot;],{&#039;hair&#039;:&#039;black&#039;,&#039;eye&#039;:&#039;brown&#039;}),
      ((&quot;Ann&quot;,&quot;Varsa&quot;),[&quot;.NET&quot;,&quot;Python&quot;],{&#039;hair&#039;:&#039;brown&#039;,&#039;eye&#039;:&#039;black&#039;}),
      ((&quot;Tom Cruise&quot;,&quot;&quot;),[&quot;Python&quot;,&quot;Scala&quot;],{&#039;hair&#039;:&#039;red&#039;,&#039;eye&#039;:&#039;grey&#039;}),
      ((&quot;Tom Brand&quot;,None),[&quot;Perl&quot;,&quot;Ruby&quot;],{&#039;hair&#039;:&#039;black&#039;,&#039;eye&#039;:&#039;blue&#039;})]

schema = StructType([
        StructField(&#039;name&#039;, StructType([
            StructField(&#039;fname&#039;, StringType(), True),
            StructField(&#039;lname&#039;, StringType(), True)])),
        StructField(&#039;languages&#039;, ArrayType(StringType()),True),
        StructField(&#039;properties&#039;, MapType(StringType(),StringType()),True)
     ])
df=spark.createDataFrame(data,schema)
df.printSchema()

#Display&#039;s to console
root
 |-- name: struct (nullable = true)
 |    |-- fname: string (nullable = true)
 |    |-- lname: string (nullable = true)
 |-- languages: array (nullable = true)
 |    |-- element: string (containsNull = true)
 |-- properties: map (nullable = true)
 |    |-- key: string
 |    |-- value: string (valueContainsNull = true)
</blockquote></pre>
                        getField Example<br>
                        <pre><blockquote class="language-python">
#getField from MapType
df.select(df.properties.getField(&quot;hair&quot;)).show()

#getField from Struct
df.select(df.name.getField(&quot;fname&quot;)).show()
</blockquote></pre>
                        <h3>4.14 getItem() &#8211; To get the value by index from MapType or ArrayTupe &amp; ny key for MapType column.</h3>
                        <pre><blockquote class="language-python">
#getItem() used with ArrayType
df.select(df.languages.getItem(1)).show()

#getItem() used with MapType
df.select(df.properties.getItem(&quot;hair&quot;)).show()
</blockquote></pre>
                        <h3>4.15 dropFields &#8211; </h3>
                        <pre><blockquote class="language-python">
# TO-DO, getting runtime error
</blockquote></pre>
                        <h3>4.16 withField() &#8211; </h3>
                        <pre><blockquote class="language-python">
# TO-DO getting runtime error
</blockquote></pre>
                        <h3>4.17 over() &#8211; Used with Window Functions</h3>
                        <pre><blockquote class="language-python">
TO-DO
</code></pre>
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