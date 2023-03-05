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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Join Types | Join Two DataFrames</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> --><br>
                    <div class="entry-content clr" itemprop="text">
                        <p><strong>PySpark Join</strong> is used to combine two DataFrames and by chaining these you can join multiple DataFrames; it supports all basic join type operations available in traditional SQL like <code>INNER</code>,&nbsp;<code>LEFT OUTER</code>,&nbsp;<code>RIGHT OUTER</code>,&nbsp;<code>LEFT ANTI</code>,&nbsp;<code>LEFT SEMI</code>,&nbsp;<code>CROSS</code>,&nbsp;<code>SELF</code>&nbsp;JOIN. PySpark Joins are wider transformations that involve data shuffling across the network. </p>
                        <p>PySpark SQL Joins comes with more optimization by default (thanks to DataFrames) however still there would be some performance issues to consider while using. </p>
                        <p>In this <strong>PySpark SQL Join</strong> tutorial, you will learn different Join syntaxes and using different Join types on two or more DataFrames and Datasets using examples.</p>
                        <ul>
                            <li><a href="#pyspark-join-syntax">PySpark Join Syntax</a></li>
                            <li><a href="#pyspark-join-types">PySpark Join Types</a></li>
                            <li><a href="#pyspark-inner-join">Inner Join DataFrame</a></li>
                            <li><a href="#pyspark-full-outer-join">Full Outer Join DataFrame</a></li>
                            <li><a href="#pyspark-left-outer-join">Left Outer Join DataFrame</a></li>
                            <li><a href="#pyspark-right-outer-ioin">Right Outer Join DataFrame</a></li>
                            <li><a href="#pyspark-left-anti-join">Left Anti Join DataFrame</a></li>
                            <li><a href="#pyspark-left-semi-join">Left Semi Join DataFrame</a></li>
                            <li><a href="#pyspark-self-join">Self Join DataFrame</a></li>
                            <li>Using SQL Expression</li>
                        </ul>
                        <h2 id="pyspark-join-syntax">1. PySpark Join Syntax</h2>
                        <p>PySpark SQL join has a below syntax and it can be accessed directly from DataFrame.</p>
                        <pre><blockquote class="language-scala">
                            
join(self, other, on=None, how=None)
</blockquote></pre>
                        <p><code>join()</code> operation takes parameters as below and returns DataFrame.</p>
                        <ul>
                            <li>param other: Right side of the join</li>
                            <li>param on: a string for the join column name</li>
                            <li>param how: default <code>inner</code>. Must be one of <code>inner</code>, <code>cross</code>, <code>outer</code>,<code>full</code>, <code>full_outer</code>, <code>left</code>, <code>left_outer</code>, <code>right</code>, <code>right_outer</code>,<code>left_semi</code>, and <code>left_anti</code>.</li>
                        </ul>
                        <p>You can also write Join expression by adding where() and filter() methods on DataFrame and can have Join on multiple columns. </p>
                        <h2 id="pyspark-join-types">2. PySpark Join Types</h2>
                        <p>Below are the different Join Types PySpark supports.</p>
                        <figure class="wp-block-table aligncenter is-style-regular">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong> Join String </strong></td>
                                        <td><strong>Equivalent SQL Join</strong></td>
                                    </tr>
                                    <tr>
                                        <td> inner</td>
                                        <td>INNER JOIN</td>
                                    </tr>
                                    <tr>
                                        <td> outer, full, fullouter, full_outer</td>
                                        <td>FULL OUTER JOIN</td>
                                    </tr>
                                    <tr>
                                        <td> left, leftouter, left_outer</td>
                                        <td>LEFT JOIN</td>
                                    </tr>
                                    <tr>
                                        <td> right, rightouter, right_outer</td>
                                        <td>RIGHT JOIN</td>
                                    </tr>
                                    <tr>
                                        <td> cross</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> anti, leftanti, left_anti</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> semi, leftsemi, left_semi</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <figcaption>PySpark Join Types</figcaption>
                        </figure>
                        <p>Before we jump into PySpark SQL Join examples, first, let&#8217;s create an <code>&quot;emp&quot;</code> and <code>&quot;dept&quot;</code> DataFrames. here, column <code>&quot;emp_id&quot;</code> is unique on emp and <code>&quot;dept_id&quot;</code> is unique on the dept dataset&#8217;s and emp_dept_id from emp has a reference to dept_id on dept dataset.</p>
                        <pre><blockquote class="language-python">
emp = [(1,&quot;Smith&quot;,-1,&quot;2018&quot;,&quot;10&quot;,&quot;M&quot;,3000), \
    (2,&quot;Rose&quot;,1,&quot;2010&quot;,&quot;20&quot;,&quot;M&quot;,4000), \
    (3,&quot;Williams&quot;,1,&quot;2010&quot;,&quot;10&quot;,&quot;M&quot;,1000), \
    (4,&quot;Jones&quot;,2,&quot;2005&quot;,&quot;10&quot;,&quot;F&quot;,2000), \
    (5,&quot;Brown&quot;,2,&quot;2010&quot;,&quot;40&quot;,&quot;&quot;,-1), \
      (6,&quot;Brown&quot;,2,&quot;2010&quot;,&quot;50&quot;,&quot;&quot;,-1) \
  ]
empColumns = [&quot;emp_id&quot;,&quot;name&quot;,&quot;superior_emp_id&quot;,&quot;year_joined&quot;, \
       &quot;emp_dept_id&quot;,&quot;gender&quot;,&quot;salary&quot;]

empDF = spark.createDataFrame(data=emp, schema = empColumns)
empDF.printSchema()
empDF.show(truncate=False)

dept = [(&quot;Finance&quot;,10), \
    (&quot;Marketing&quot;,20), \
    (&quot;Sales&quot;,30), \
    (&quot;IT&quot;,40) \
  ]
deptColumns = [&quot;dept_name&quot;,&quot;dept_id&quot;]
deptDF = spark.createDataFrame(data=dept, schema = deptColumns)
deptDF.printSchema()
deptDF.show(truncate=False)
</blockquote></pre>
                        <p>This prints &#8220;emp&#8221; and &#8220;dept&#8221; DataFrame to the console. Refer complete example below on how to create <code>spark</code> object.</p>
                        <pre><blockquote class="language-python">
Emp Dataset
+------+--------+---------------+-----------+-----------+------+------+
|emp_id|name    |superior_emp_id|year_joined|emp_dept_id|gender|salary|
+------+--------+---------------+-----------+-----------+------+------+
|1     |Smith   |-1             |2018       |10         |M     |3000  |
|2     |Rose    |1              |2010       |20         |M     |4000  |
|3     |Williams|1              |2010       |10         |M     |1000  |
|4     |Jones   |2              |2005       |10         |F     |2000  |
|5     |Brown   |2              |2010       |40         |      |-1    |
|6     |Brown   |2              |2010       |50         |      |-1    |
+------+--------+---------------+-----------+-----------+------+------+

Dept Dataset
+---------+-------+
|dept_name|dept_id|
+---------+-------+
|Finance  |10     |
|Marketing|20     |
|Sales    |30     |
|IT       |40     |
+---------+-------+
</blockquote></pre>
                        <h2 id="pyspark-inner-join">3. PySpark Inner Join DataFrame</h2>
                        <p><code>Inner</code> join is the default join in PySpark and it&#8217;s mostly used. This joins two datasets on key columns, where keys don&#8217;t match the rows get dropped from both datasets (<code>emp</code> &amp; <code>dept</code>). </p>
                        <pre><blockquote class="language-python">
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;inner&quot;) \
     .show(truncate=False)
</blockquote></pre>
                        <p>When we apply Inner join on our datasets, It drops &#8220;<code>emp_dept_id</code>&#8221; 50 from &#8220;<code>emp</code>&#8221; and &#8220;<code>dept_id</code>&#8221; 30 from &#8220;<code>dept</code>&#8221; datasets. Below is the result of the above Join expression. </p>
                        <pre><blockquote class="language-python">
+------+--------+---------------+-----------+-----------+------+------+---------+-------+
|emp_id|name    |superior_emp_id|year_joined|emp_dept_id|gender|salary|dept_name|dept_id|
+------+--------+---------------+-----------+-----------+------+------+---------+-------+
|1     |Smith   |-1             |2018       |10         |M     |3000  |Finance  |10     |
|2     |Rose    |1              |2010       |20         |M     |4000  |Marketing|20     |
|3     |Williams|1              |2010       |10         |M     |1000  |Finance  |10     |
|4     |Jones   |2              |2005       |10         |F     |2000  |Finance  |10     |
|5     |Brown   |2              |2010       |40         |      |-1    |IT       |40     |
+------+--------+---------------+-----------+-----------+------+------+---------+-------+
</blockquote></pre>
                        <h2 id="pyspark-full-outer-join">4. PySpark Full Outer Join </h2>
                        <p><code>Outer</code> a.k.a <code>full</code>, <code>fullouter</code> join returns all rows from both datasets, where join expression doesn&#8217;t match it returns null on respective record columns. </p>
                        <pre><blockquote class="language-python">
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;outer&quot;) \
    .show(truncate=False)
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;full&quot;) \
    .show(truncate=False)
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;fullouter&quot;) \
    .show(truncate=False)
</blockquote></pre>
                        <p>From our &#8220;<code>emp</code>&#8221; dataset&#8217;s &#8220;<code>emp_dept_id</code>&#8221; with value 50 doesn&#8217;t have a record on &#8220;<code>dept</code>&#8221; hence dept columns have null and &#8220;<code>dept_id</code>&#8221; 30 doesn&#8217;t have a record in &#8220;<code>emp</code>&#8221; hence you see null&#8217;s on emp columns. Below is the result of the above Join expression.</p>
                        <pre><blockquote class="language-python">
+------+--------+---------------+-----------+-----------+------+------+---------+-------+
|emp_id|name    |superior_emp_id|year_joined|emp_dept_id|gender|salary|dept_name|dept_id|
+------+--------+---------------+-----------+-----------+------+------+---------+-------+
|2     |Rose    |1              |2010       |20         |M     |4000  |Marketing|20     |
|5     |Brown   |2              |2010       |40         |      |-1    |IT       |40     |
|1     |Smith   |-1             |2018       |10         |M     |3000  |Finance  |10     |
|3     |Williams|1              |2010       |10         |M     |1000  |Finance  |10     |
|4     |Jones   |2              |2005       |10         |F     |2000  |Finance  |10     |
|6     |Brown   |2              |2010       |50         |      |-1    |null     |null   |
|null  |null    |null           |null       |null       |null  |null  |Sales    |30     |
+------+--------+---------------+-----------+-----------+------+------+---------+-------+
</blockquote></pre>
                        <h2 id="pyspark-left-outer-join">5. PySpark Left Outer Join</h2>
                        <p><code>Left</code> a.k.a <code>Leftouter</code> join returns all rows from the left dataset regardless of match found on the right dataset when join expression doesn&#8217;t match, it assigns null for that record and drops records from right where match not found. </p>
                        <pre><blockquote class="language-python">
  empDF.join(deptDF,empDF(&quot;emp_dept_id&quot;) ==  deptDF(&quot;dept_id&quot;),&quot;left&quot;)
    .show(false)
  empDF.join(deptDF,empDF(&quot;emp_dept_id&quot;) ==  deptDF(&quot;dept_id&quot;),&quot;leftouter&quot;)
    .show(false)
</blockquote></pre>
                        <p>From our dataset, &#8220;<code>emp_dept_id</code>&#8221; 5o doesn&#8217;t have a record on &#8220;<code>dept</code>&#8221; dataset hence, this record contains null on &#8220;<code>dept</code>&#8221; columns (dept_name &amp; dept_id). and &#8220;<code>dept_id</code>&#8221; 30 from &#8220;<code>dept</code>&#8221; dataset dropped from the results. Below is the result of the above Join expression. </p>
                        <pre><blockquote class="language-python">
+------+--------+---------------+-----------+-----------+------+------+---------+-------+
|emp_id|name    |superior_emp_id|year_joined|emp_dept_id|gender|salary|dept_name|dept_id|
+------+--------+---------------+-----------+-----------+------+------+---------+-------+
|1     |Smith   |-1             |2018       |10         |M     |3000  |Finance  |10     |
|2     |Rose    |1              |2010       |20         |M     |4000  |Marketing|20     |
|3     |Williams|1              |2010       |10         |M     |1000  |Finance  |10     |
|4     |Jones   |2              |2005       |10         |F     |2000  |Finance  |10     |
|5     |Brown   |2              |2010       |40         |      |-1    |IT       |40     |
|6     |Brown   |2              |2010       |50         |      |-1    |null     |null   |
+------+--------+---------------+-----------+-----------+------+------+---------+-------+
</blockquote></pre>
                        <p></p>
                        <h2 id="pyspark-right-outer-ioin">6. Right Outer Join</h2>
                        <p><code>Right </code>a.k.a <code>Rightouter</code> join is opposite of <code>left</code> join, here it returns all rows from the right dataset regardless of math found on the left dataset, when join expression doesn&#8217;t match, it assigns null for that record and drops records from left where match not found. </p>
                        <pre><blockquote class="language-python">
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;right&quot;) \
   .show(truncate=False)
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;rightouter&quot;) \
   .show(truncate=False)
</blockquote></pre>
                        <p>From our example, the right dataset &#8220;<code>dept_id</code>&#8221; 30 doesn&#8217;t have it on the left dataset &#8220;<code>emp</code>&#8221; hence, this record contains null on &#8220;<code>emp</code>&#8221; columns. and &#8220;<code>emp_dept_id</code>&#8221; 50 dropped as a match not found on left. Below is the result of the above Join expression. </p>
                        <pre><blockquote class="language-python">
+------+--------+---------------+-----------+-----------+------+------+---------+-------+
|emp_id|name    |superior_emp_id|year_joined|emp_dept_id|gender|salary|dept_name|dept_id|
+------+--------+---------------+-----------+-----------+------+------+---------+-------+
|4     |Jones   |2              |2005       |10         |F     |2000  |Finance  |10     |
|3     |Williams|1              |2010       |10         |M     |1000  |Finance  |10     |
|1     |Smith   |-1             |2018       |10         |M     |3000  |Finance  |10     |
|2     |Rose    |1              |2010       |20         |M     |4000  |Marketing|20     |
|null  |null    |null           |null       |null       |null  |null  |Sales    |30     |
|5     |Brown   |2              |2010       |40         |      |-1    |IT       |40     |
+------+--------+---------------+-----------+-----------+------+------+---------+-------+
</blockquote></pre>
                        <h2 id="pyspark-left-semi-join">7. Left Semi Join </h2>
                        <p><code>leftsemi</code> join is similar to <code>inner</code> join difference being <code>leftsemi</code> join returns all columns from the left dataset and ignores all columns from the right dataset. In other words, this join returns columns from the only left dataset for the records match in the right dataset on join expression, records not matched on join expression are ignored from both left and right datasets. </p>
                        <p>The same result can be achieved using select on the result of the inner join however, using this join would be efficient. </p>
                        <pre><blockquote class="language-python">
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;leftsemi&quot;) \
   .show(truncate=False)
</blockquote></pre>
                        <p>Below is the result of the above join expression. </p>
                        <pre><blockquote class="language-python">
leftsemi join
+------+--------+---------------+-----------+-----------+------+------+
|emp_id|name    |superior_emp_id|year_joined|emp_dept_id|gender|salary|
+------+--------+---------------+-----------+-----------+------+------+
|1     |Smith   |-1             |2018       |10         |M     |3000  |
|2     |Rose    |1              |2010       |20         |M     |4000  |
|3     |Williams|1              |2010       |10         |M     |1000  |
|4     |Jones   |2              |2005       |10         |F     |2000  |
|5     |Brown   |2              |2010       |40         |      |-1    |
+------+--------+---------------+-----------+-----------+------+------+
</blockquote></pre>
                        <h2 id="pyspark-left-anti-join">8. Left Anti Join</h2>
                        <p><code>leftanti</code> join does the exact opposite of the <code>leftsemi</code>, <code>leftanti</code> join returns only columns from the left dataset for non-matched records.</p>
                        <pre><blockquote class="language-python">
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;leftanti&quot;) \
   .show(truncate=False)
</blockquote></pre>
                        <p>Yields below output</p>
                        <pre><blockquote class="language-python">
+------+-----+---------------+-----------+-----------+------+------+
|emp_id|name |superior_emp_id|year_joined|emp_dept_id|gender|salary|
+------+-----+---------------+-----------+-----------+------+------+
|6     |Brown|2              |2010       |50         |      |-1    |
+------+-----+---------------+-----------+-----------+------+------+
</blockquote></pre>
                        <h2 id="pyspark-self-join">9. PySpark Self Join</h2>
                        <p>Joins are not complete without a self join, Though there is no self-join type available, we can use any of the above-explained join types to join DataFrame to itself. below example use <code>inner</code> self join.</p>
                        <pre><blockquote class="language-python">
empDF.alias(&quot;emp1&quot;).join(empDF.alias(&quot;emp2&quot;), \
    col(&quot;emp1.superior_emp_id&quot;) == col(&quot;emp2.emp_id&quot;),&quot;inner&quot;) \
    .select(col(&quot;emp1.emp_id&quot;),col(&quot;emp1.name&quot;), \
      col(&quot;emp2.emp_id&quot;).alias(&quot;superior_emp_id&quot;), \
      col(&quot;emp2.name&quot;).alias(&quot;superior_emp_name&quot;)) \
   .show(truncate=False)
</blockquote></pre>
                        <p>Here, we are joining <code>emp</code> dataset with itself to find out superior <code>emp_id</code> and <code>name</code> for all employees.</p>
                        <pre><blockquote class="language-python">
+------+--------+---------------+-----------------+
|emp_id|name    |superior_emp_id|superior_emp_name|
+------+--------+---------------+-----------------+
|2     |Rose    |1              |Smith            |
|3     |Williams|1              |Smith            |
|4     |Jones   |2              |Rose             |
|5     |Brown   |2              |Rose             |
|6     |Brown   |2              |Rose             |
+------+--------+---------------+-----------------+
</blockquote></pre>
                        <h2 id="sql-expression">4. Using SQL Expression</h2>
                        <p>Since PySpark SQL support native SQL syntax, we can also write join operations after creating temporary tables on DataFrames and use these tables on <code>spark.sql()</code>.</p>
                        <pre><blockquote class="language-python">
empDF.createOrReplaceTempView(&quot;EMP&quot;)
deptDF.createOrReplaceTempView(&quot;DEPT&quot;)

joinDF = spark.sql(&quot;select * from EMP e, DEPT d where e.emp_dept_id == d.dept_id&quot;) \
  .show(truncate=False)

joinDF2 = spark.sql(&quot;select * from EMP e INNER JOIN DEPT d ON e.emp_dept_id == d.dept_id&quot;) \
  .show(truncate=False)
</blockquote></pre>
                        <h2 id="join-multiple">5. PySpark SQL Join on multiple DataFrames</h2>
                        <p>When you need to join more than two tables, you either use SQL expression after creating a temporary view on the DataFrame or use the result of join operation to join with another DataFrame like chaining them. for example</p>
                        <pre><blockquote class="language-python">
df1.join(df2,df1.id1 == df2.id2,&quot;inner&quot;) \
   .join(df3,df1.id1 == df3.id3,&quot;inner&quot;)
</blockquote></pre>
                        <h2 id="source-code">6. PySpark SQL Join Complete Example</h2>
                        <pre><blockquote class="language-python">
import pyspark
from pyspark.sql import SparkSession
from pyspark.sql.functions import col

spark = SparkSession.builder.appName(&#039;SparkByExamples.com&#039;).getOrCreate()

emp = [(1,&quot;Smith&quot;,-1,&quot;2018&quot;,&quot;10&quot;,&quot;M&quot;,3000), \
    (2,&quot;Rose&quot;,1,&quot;2010&quot;,&quot;20&quot;,&quot;M&quot;,4000), \
    (3,&quot;Williams&quot;,1,&quot;2010&quot;,&quot;10&quot;,&quot;M&quot;,1000), \
    (4,&quot;Jones&quot;,2,&quot;2005&quot;,&quot;10&quot;,&quot;F&quot;,2000), \
    (5,&quot;Brown&quot;,2,&quot;2010&quot;,&quot;40&quot;,&quot;&quot;,-1), \
      (6,&quot;Brown&quot;,2,&quot;2010&quot;,&quot;50&quot;,&quot;&quot;,-1) \
  ]
empColumns = [&quot;emp_id&quot;,&quot;name&quot;,&quot;superior_emp_id&quot;,&quot;year_joined&quot;, \
       &quot;emp_dept_id&quot;,&quot;gender&quot;,&quot;salary&quot;]

empDF = spark.createDataFrame(data=emp, schema = empColumns)
empDF.printSchema()
empDF.show(truncate=False)


dept = [(&quot;Finance&quot;,10), \
    (&quot;Marketing&quot;,20), \
    (&quot;Sales&quot;,30), \
    (&quot;IT&quot;,40) \
  ]
deptColumns = [&quot;dept_name&quot;,&quot;dept_id&quot;]
deptDF = spark.createDataFrame(data=dept, schema = deptColumns)
deptDF.printSchema()
deptDF.show(truncate=False)
  
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;inner&quot;) \
     .show(truncate=False)

empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;outer&quot;) \
    .show(truncate=False)
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;full&quot;) \
    .show(truncate=False)
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;fullouter&quot;) \
    .show(truncate=False)
    
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;left&quot;) \
    .show(truncate=False)
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;leftouter&quot;) \
   .show(truncate=False)

empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;right&quot;) \
   .show(truncate=False)
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;rightouter&quot;) \
   .show(truncate=False)

empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;leftsemi&quot;) \
   .show(truncate=False)
   
empDF.join(deptDF,empDF.emp_dept_id ==  deptDF.dept_id,&quot;leftanti&quot;) \
   .show(truncate=False)
   
empDF.alias(&quot;emp1&quot;).join(empDF.alias(&quot;emp2&quot;), \
    col(&quot;emp1.superior_emp_id&quot;) == col(&quot;emp2.emp_id&quot;),&quot;inner&quot;) \
    .select(col(&quot;emp1.emp_id&quot;),col(&quot;emp1.name&quot;), \
      col(&quot;emp2.emp_id&quot;).alias(&quot;superior_emp_id&quot;), \
      col(&quot;emp2.name&quot;).alias(&quot;superior_emp_name&quot;)) \
   .show(truncate=False)

empDF.createOrReplaceTempView(&quot;EMP&quot;)
deptDF.createOrReplaceTempView(&quot;DEPT&quot;)
   
joinDF = spark.sql(&quot;select * from EMP e, DEPT d where e.emp_dept_id == d.dept_id&quot;) \
  .show(truncate=False)

joinDF2 = spark.sql(&quot;select * from EMP e INNER JOIN DEPT d ON e.emp_dept_id == d.dept_id&quot;) \
  .show(truncate=False)

</blockquote></pre>
                        <p>Examples explained here are available at the <a href="https://github.com/spark-examples/pyspark-examples/blob/master/pyspark-join.py">GitHub</a> project for reference.</p>
                        <h3>Conclusion</h3>
                        <p>In this PySpark SQL tutorial, you have learned two or more DataFrames can be joined using the <code>join()</code> function of the DataFrame, Join types syntax, usage, and examples with PySpark (Spark with Python), I would also recommend reading through Optimizing SQL Joins to know performance impact on joins.</p>
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