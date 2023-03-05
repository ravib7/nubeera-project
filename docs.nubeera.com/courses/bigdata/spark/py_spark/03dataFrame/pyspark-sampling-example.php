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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark Random Sample with Example</h2>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Big Data</a></li>
                    <li class="breadcrumb-item"><a href="../../">Spark</a></li>
                    <li class="breadcrumb-item active">PySpark</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <!-- <content> --><br>
                        <div class="entry-content clr" itemprop="text">
<p>PySpark provides a <code>pyspark.sql.DataFrame.sample()</code>, <code>pyspark.sql.DataFrame.sampleBy()</code>, <code>RDD.sample()</code>, and <code>RDD.takeSample()</code> methods to get the random sampling subset from the large dataset, In this article I will explain with Python examples .</p>
<p>If you are working as a Data Scientist or Data analyst you often required to analyze a large dataset/file with billions or trillions of records, processing these large datasets takes some time hence during the analysis phase it is recommended to use a random subset sample from the large files.</p>
<h2 id="pyspark-sql-sample">1. PySpark SQL sample() Usage &amp; Examples</h2>
<p>PySpark sampling (<code>pyspark.sql.DataFrame.sample()</code>) is a mechanism to get random sample records from the dataset, this is helpful when you have a larger dataset and wanted to analyze/test a subset of the data for example 10% of the original file.</p>
<p>Below is syntax of the <code>sample()</code> function.</p>
<pre><blockquote class="language-python">
sample(withReplacement, fraction, seed=None)
</blockquote></pre>
<p><code>fraction</code> &#8211; Fraction of rows to generate, range [0.0, 1.0]. Note that it doesn&#8217;t guarantee to provide the exact number of the fraction of records.</p>
<p><code>seed</code> &#8211; Seed for sampling (default a random seed). Used to reproduce the same random sampling.</p>
<p><code>withReplacement</code> &#8211; Sample with replacement or not (default False).</p>
<p>Let&#8217;s see some examples.</p>
<h3>1.1 <strong>Using <code>fraction</code> to get a random sample in PySpark</strong></h3>
<p>By using fraction between 0 to 1, it returns the <a href="https://stackoverflow.com/posts/37418684/timeline"></a>approximate number of the fraction of the dataset. For example, <code>0.1</code> returns 10% of the rows. However, this does not guarantee it returns the exact 10% of the records. </p>
<p><strong>Note:</strong> If you run these examples on your system, you may see different results. </p>
<pre><blockquote class="language-python">
from pyspark.sql import SparkSession
spark = SparkSession.builder \
    .master(&quot;local[1]&quot;) \
    .appName(&quot;SparkByExamples.com&quot;) \
    .getOrCreate()

df=spark.range(100)
print(df.sample(0.06).collect())
//Output: [Row(id=0), Row(id=2), Row(id=17), Row(id=25), Row(id=26), Row(id=44), Row(id=80)]
</blockquote></pre>
<p>My DataFrame has 100 records and I wanted to get 6% sample records which are 6 but the sample() function returned 7 records. This proves the sample function doesn&#8217;t return the exact fraction specified.</p>
<h3>1.2 Using <code>seed</code> to reproduce the same Samples in PySpark</h3>
<p>Every time you run a sample() function it returns a different set of sampling records, however sometimes during the development and testing phase you may need to regenerate the same sample every time as you need to compare the results from your previous run. To get consistent same random sampling uses the same slice value for every run. Change slice value to get different results.<a href="https://stackoverflow.com/posts/37418684/timeline"></a></p>
<pre><blockquote class="language-python">
print(df.sample(0.1,123).collect())
//Output: 36,37,41,43,56,66,69,75,83
print(df.sample(0.1,123).collect())
//Output: 36,37,41,43,56,66,69,75,83
print(df.sample(0.1,456).collect())
//Output: 19,21,42,48,49,50,75,80
</blockquote></pre>
<p>On above examples, first 2 I have used slice 123 hence the sampling results are same and for last I have used 456 as slice hence it has returned different sampling records</p>
<h3>1.3 Sample <code>withReplacement</code> (May contain duplicates)</h3>
<p>some times you may need to get a random sample with repeated values. By using the value <code>true</code>, results in repeated values.</p>
<pre><blockquote class="language-python">
print(df.sample(True,0.3,123).collect()) //with Duplicates
//Output: 0,5,9,11,14,14,16,17,21,29,33,41,42,52,52,54,58,65,65,71,76,79,85,96
print(df.sample(0.3,123).collect()) // No duplicates
//Output: 0,4,17,19,24,25,26,36,37,41,43,44,53,56,66,68,69,70,71,75,76,78,83,84,88,94,96,97,98
</blockquote></pre>
<p>On first example, values 14, 52 and 65 are repeated values.</p>
<h3 id="spark-stratified-sampling">1.4 Stratified sampling in PySpark</h3>
<p>You can get Stratified sampling in PySpark without replacement by using <code>sampleBy()</code> method. It returns a sampling fraction for each stratum. If a stratum is not specified, it takes zero as the default.</p>
<p><strong>sampleBy() Syntax</strong></p>
<pre><blockquote class="language-python">
sampleBy(col, fractions, seed=None)
</blockquote></pre>
<p>col &#8211; column name from DataFrame</p>
<p>fractions &#8211; It&#8217;s Dictionary type takes key and value.</p>
<p><strong>sampleBy() Example</strong></p>
<pre><blockquote class="language-python">
df2=df.select((df.id % 3).alias(&quot;key&quot;))
print(df2.sampleBy(&quot;key&quot;, {0: 0.1, 1: 0.2},0).collect())
//Output: [Row(key=0), Row(key=1), Row(key=1), Row(key=1), Row(key=0), Row(key=1), Row(key=1), Row(key=0), Row(key=1), Row(key=1), Row(key=1)]
</blockquote></pre>
<h2 id="pyspark-rdd-sample">2. PySpark RDD Sample</h2>
<p>PySpark RDD also provides <code>sample()</code> function to get a random sampling, it also has another signature <code>takeSample()</code> that returns an Array[T]. </p>
<p><strong>RDD <code>sample()</code> Syntax &amp; Example</strong></p>
<p>PySpark RDD sample() function returns the random sampling similar to DataFrame and takes a similar types of parameters but in a different order. Since I&#8217;ve already covered the explanation of these parameters on DataFrame, I will not be repeating the explanation on RDD, If not already read I recommend reading the DataFrame section above.</p>
<p>sample() of RDD returns a new RDD by selecting random sampling. Below is a syntax.</p>
<pre><blockquote class="language-python">
sample(self, withReplacement, fraction, seed=None)
</blockquote></pre>
<p>Below is an example of RDD sample() function</p>
<pre><blockquote class="language-python">
rdd = spark.sparkContext.range(0,100)
print(rdd.sample(False,0.1,0).collect())
//Output: [24, 29, 41, 64, 86]
print(rdd.sample(True,0.3,123).collect())
//Output: [0, 11, 13, 14, 16, 18, 21, 23, 27, 31, 32, 32, 48, 49, 49, 53, 54, 72, 74, 77, 77, 83, 88, 91, 93, 98, 99]
</blockquote></pre>
<p><strong>RDD <code>takeSample()</code> Syntax &amp; Example</strong></p>
<p>RDD <code>takeSample()</code> is an action hence you need to careful when you use this function as it returns the selected sample records to driver memory. Returning too much data results in an out-of-memory error similar to <a href="https://sparkbyexamples.com/spark/spark-dataframe-collect/">collect()</a>.</p>
<p>Syntax of RDD <code>takeSample()</code> .</p>
<pre><blockquote class="language-python">
takeSample(self, withReplacement, num, seed=None) 
</blockquote></pre>
<p>Example of RDD takeSample()</p>
<pre><blockquote class="language-python">
print(rdd.takeSample(False,10,0))
//Output: [58, 1, 96, 74, 29, 24, 32, 37, 94, 91]
print(rdd.takeSample(True,30,123))
//Output: [43, 65, 39, 18, 84, 86, 25, 13, 40, 21, 79, 63, 7, 32, 26, 71, 23, 61, 83, 60, 22, 35, 84, 22, 0, 88, 16, 40, 65, 84]
</blockquote></pre>
<h3>Conclusion</h3>
<p>In summary, PySpark sampling can be done on RDD and DataFrame. In order to do sampling, you need to know how much data you wanted to retrieve by specifying fractions. </p>
<p>Use seed to regenerate the same sampling multiple times. and </p>
<p>Use <code>withReplacement</code> if you are okay to repeat the random records.</p>


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