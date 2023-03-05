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
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">PySpark - Getting Started</strong><br><br>
                <ul>
                    <li><a href="index.php">PySpark - Getting Started</a></li>
                    <li><a href="spark-web-ui-understanding.php">PySpark - web/Application UI</a></li>
                    <li><a href="pyspark-what-is-sparksession.php">PySpark - Spark Session</a></li>
                    <li><a href="pyspark-rdd.php">PySpark - RDD</a></li>
                    <li><a href="pyspark-parallelize-create-rdd.php">PySpark - Parellelize</a></li>
                    <li><a href="pyspark-repartition-vs-coalesce.php">PySpark - repartition() vs coalesce()</a></li>
                    <li><a href="pyspark-broadcast-variables.php">PySpark - Broadcast Variables</a></li>
                    <li><a href="pyspark-accumulator-with-example.php">PySpark - Accumulator</a></li>
                </ul>

            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark RDD Tutorial | Learn with Examples</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                <li class="breadcrumb-item active">PySpark</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h3>In this article</h3>
                <ul>
                    <li><a href="#what-is-rdd">What is PySpark RDD?</a></li>
                    <li><a href="#rdd-benefits">PySpark RDD Benefits</a></li>
                    <li><a href="#rdd-limitations">PySpark RDD Limitations</a></li>
                    <li><a href="#creating-rdd">Creating RDD</a>
                        <ul>
                            <li><a href="#create-using-parallelize">Using parallelize()</a></li>
                            <li><a href="#create-using-wholetextfiles">Using textFile()</a></li>
                            <li><a href="#create-using-wholetextfiles">Using wholeTextFiles()</a></li>
                            <li><a href="#create-using-emptyrdd">create empty RDD</a></li>
                        </ul>
                    </li>
                    <li><a href="#rdd-parallelize">RDD Parallelize</a></li>
                    <li><a href="#repartition-coalesce">Repartition and Coalesce</a></li>
                    <li><a href="#rdd-operations">RDD Operations</a>
                        <ul>
                            <li><a href="#rdd-transformations">RDD Transformations</a></li>
                            <li><a href="#rdd-actions">RDD Actions</a></li>
                        </ul>
                    </li>
                    <li><a href="#rdd-types">RDD Types</a></li>
                    <li><a href="#shuffle-operations">Shuffle Operations</a></li>
                    <li><a href="#rdd-persistence">RDD Persistence</a>
                        <ul>
                            <li><a href="#rdd-cache">RDD cache()</a></li>
                            <li><a href="#rdd-persist">RDD persist()</a></li>
                            <li><a href="#rdd-unpersist">RDD unpersist()</a></li>
                        </ul>
                    </li>
                    <li><a href="#pyspark-shared-variables">PySpark Shared Variables</a>
                        <ul>
                            <li><a href="#broadcast-variables">Broadcast Variables</a></li>
                            <li><a href="#accumulators">Accumulators</a></li>
                        </ul>
                    </li>
                    <li><a href="#dataframe">Advanced API &#8211; DataFrame &amp; DataSet</a></li>
                </ul>

                This PySpark RDD Tutorial will help you understand what is RDD (Resilient Distributed Dataset)?, It&#8217;s advantages, how to create, and using it with Github examples. All RDD examples provided in this Tutorial were tested in our development environment and are available at <a href="https://github.com/spark-examples/pyspark-examples">GitHub PySpark examples&nbsp;project</a> for quick reference.<br><br>
                By the end of this PySpark tutorial, you will learn What is PySpark RDD? It&#8217;s advantages, limitations, creating an RDD, applying transformations, actions, and operating on pair RDD.<br><br>

                <h3 id="what-is-rdd">What is RDD (Resilient Distributed Dataset)?</h3>
                RDD (Resilient Distributed Dataset) is a fundamental building block of PySpark which is fault-tolerant, immutable distributed collections of objects. Immutable meaning once you create an RDD you cannot change it. Each record in RDD is divided into logical partitions, which can be computed on different nodes of the cluster.&nbsp;<br><br>
                In other words, RDDs are a collection of objects similar to list in Python, with the difference being RDD is computed on several processes scattered across multiple physical servers also called nodes in a cluster while a Python collection lives and process in just one process.<br><br>
                Additionally, RDDs provide data abstraction of partitioning and distribution of the data designed to run computations in parallel on several nodes, while doing transformations on RDD we don’t have to worry about the parallelism as PySpark by default provides.<br><br>
                This Apache PySpark RDD tutorial describes the basic operations available on RDDs, such as&nbsp;<code>map()</code>, <code>filter()</code>, and&nbsp;<code>persist()</code> and many more. In addition, this tutorial also explains Pair RDD functions that operate on RDDs of key-value pairs such as&nbsp;<code>groupByKey()</code> and <code>join()</code> etc.<br><br>
                <strong>Note:</strong> RDD&#8217;s can have a name and unique identifier (id)<br>

                <h3 id="rdd-benefits">PySpark RDD Benefits</h3>
                PySpark is widely adapted in Machine learning and Data science community due to it&#8217;s advantages compared with traditional python programming.<br>

                <h4>In-Memory Processing</h4>
                PySpark loads the data from disk and process in memory and keeps the data in memory, this is the main difference between PySpark and Mapreduce (I/O intensive). In between the transformations, we can also cache/persists the RDD in memory to reuse the previous computations.<br>

                <h4>Immutability</h4>
                PySpark RDD&#8217;s are immutable in nature meaning, once RDDs are created you cannot modify. When we apply transformations on RDD, PySpark creates a new RDD and maintains the RDD Lineage.<br>

                <h4>Fault Tolerance</h4>
                PySpark operates on fault-tolerant data stores on HDFS, S3 e.t.c hence any RDD operation fails, it automatically reloads the data from other partitions. Also, When PySpark applications running on a cluster, PySpark task failures are automatically recovered for a certain number of times (as per the configuration) and finish the application seamlessly.<br>

                <h4>Lazy Evolution</h4>
                PySpark does not evaluate the RDD transformations as they appear/encountered by Driver instead it keeps the all transformations as it encounters(DAG) and evaluates the all transformation when it sees the first RDD action.<br>

                <h4>Partitioning</h4>
                When you create RDD from a data, It by default partitions the elements in a RDD. By default it partitions to the number of cores available.<br>

                <h3 id="rdd-limitations">PySpark RDD Limitations</h3>
                PySpark RDDs are not much suitable for applications that make updates to the state store such as storage systems for a web application. For these applications, it is more efficient to use systems that perform traditional update logging and data checkpointing, such as databases. The goal of RDD is to provide an efficient programming model for batch analytics and leave these asynchronous applications.<br>

                <h3 id="creating-rdd">Creating RDD</h3>
                RDD&#8217;s are created primarily in two different ways,
                <ul>
                    <li>parallelizing an existing collection and </li>
                    <li>referencing&nbsp;a dataset in an external storage system (<code>HDFS</code>, <code>S3</code> and many more).&nbsp;</li>
                </ul>
                Before we look into examples, first let&#8217;s initialize SparkSession using the builder pattern method defined in SparkSession class. While initializing, we need to provide the master and application name as shown below. In realtime application, you will pass master from spark-submit instead of hardcoding on Spark application.<br>
                <pre><blockquote class="language-python">
                    
from pyspark.sql import SparkSession
spark:SparkSession = SparkSession.builder()
      .master(&quot;local[1]&quot;)
      .appName(&quot;SparkByExamples.com&quot;)
      .getOrCreate()    

                </blockquote></pre>
                <code>master()</code> – If you are running it on the cluster you need to use your master name as an argument to master(). usually, it would be either yarn (Yet Another Resource Negotiator) or <code>mesos</code> depends on your cluster setup.<br>
                <ul>
                    <li>Use <code>local[x]</code> when running in Standalone mode. x should be an integer value and should be greater than 0; this represents how many partitions it should create when using RDD, DataFrame, and Dataset. Ideally, x value should be the number of CPU cores you have.</li>
                </ul>
                <code>appName()</code>&nbsp;– Used to set your application name.<br>
                <code>getOrCreate()</code>&nbsp;– This returns a SparkSession object if already exists, creates new one if not exists.<br>
                Note: SparkSession object, it internally creates one SparkContext per JVM.<br>
                <h4 id="create-using-parallelize">Create RDD using sparkContext.parallelize()</h4>
                By using <code>parallelize()</code> function of SparkContext (sparkContext.parallelize() ) you can create an RDD. This function loads the existing collection from your driver program into parallelizing RDD. This is a basic method to create RDD and used when you already have data in memory that either loaded from a file or from a database. and it required all data to be present on the driver program prior to creating RDD.
                <img src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/rdd-creation.png?w=1183&ssl=1" alt="RDD from list"><br>
                <pre><blockquote class="language-python">
                    
#Create RDD from parallelize    
data = [1,2,3,4,5,6,7,8,9,10,11,12]
rdd=spark.sparkContext.parallelize(data)

                </blockquote></pre>
                For production applications, we mostly create RDD by using external storage systems like <code>HDFS</code>, <code>S3</code>, <code>HBase</code> e.t.c. To make it simple for this PySpark RDD tutorial we are using files from the local system or loading it from the python list to create RDD.<br>
                <h4 id="create-using-textfile">Create RDD using sparkContext.textFile()</h4>
                Using textFile() method we can read a text (.txt) file into RDD.<br>
                <pre><blockquote class="language-python">
                    
#Create RDD from external Data source
rdd2 = spark.sparkContext.textFile(&quot;/path/textFile.txt&quot;)

                </blockquote></pre>
                <h4 id="create-using-wholetextfiles">Create RDD using sparkContext.wholeTextFiles()</h4>
                wholeTextFiles() function returns a PairRDD with the key being the file path and value being file content.<br>
                <pre><blockquote class="language-python">
                    
#Reads entire file into a RDD as single record.
rdd3 = spark.sparkContext.wholeTextFiles(&quot;/path/textFile.txt&quot;)

                </blockquote></pre>
                Besides using text files, we can also create RDD from CSV file, JSON, and more formats.<br>
                <h4 id="create-using-emptyrdd">Create empty RDD using sparkContext.emptyRDD</h4>
                Using <code>emptyRDD()</code> method on sparkContext we can&nbsp;create an RDD with no data. This method creates an empty RDD with no partition.<br>
                <pre><blockquote class="language-python">
                    
# Creates empty RDD with no partition    
rdd = spark.sparkContext.emptyRDD 
# rddString = spark.sparkContext.emptyRDD[String]

                </blockquote></pre>
                <h4>Creating empty RDD with partition</h4>
                Some times we may need to write an empty RDD to files by partition, In this case, you should create an empty RDD with partition.<br>
                <pre><blockquote class="language-python">
                    
#Create empty RDD with partition
rdd2 = spark.sparkContext.parallelize([],10) #This creates 10 partitions

                </blockquote></pre>
                <h3 id="rdd-parallelize">RDD Parallelize</h3>
                When we use <code>parallelize()</code> or <code>textFile()</code> or&nbsp;<code>wholeTextFiles()</code> methods of SparkContxt to initiate RDD, it automatically splits the data into partitions based on resource availability.&nbsp;when you run it on a laptop it would create partitions as the same number of cores available on your system.<br>
                <strong>getNumPartitions()</strong> &#8211; This a RDD function which returns a number of partitions our dataset split into. <br>
                <pre><blockquote class="language-python">
                    
print(&quot;initial partition count:&quot;+str(rdd.getNumPartitions()))
#Outputs: initial partition count:2

                </blockquote></pre>
                <strong>Set parallelize manually</strong> &#8211; We can also set a number of partitions manually, all, we need is, to pass a number of partitions as the second parameter to these functions for example &nbsp;<code>sparkContext.parallelize([1,2,3,4,56,7,8,9,12,3], 10)</code>.&nbsp;<br>
                <h3 id="repartition-coalesce">Repartition and Coalesce</h3>
                Some times we may need to repartition the RDD, PySpark provides two ways to repartition; first using <code>repartition()</code> method which shuffles data from all nodes also called full shuffle and second coalesce() method which shuffle data from minimum nodes, for examples if you have data in 4 partitions and doing <code>coalesce(2)</code> moves data from just 2 nodes.&nbsp;&nbsp;<br>
                Both of the functions take the number of partitions to repartition rdd as shown below. Note that repartition() method is a very expensive operation as it shuffles data from all nodes in a cluster. <br>
                <pre><blockquote class="language-python">
                    
reparRdd = rdd.repartition(4)
print(&quot;re-partition count:&quot;+str(reparRdd.getNumPartitions()))
#Outputs: &quot;re-partition count:4

                </blockquote></pre>
                <strong>Note:</strong> repartition() or coalesce() methods also returns a new RDD.<br>
                <h3 id="rdd-operations">PySpark RDD Operations</h3>
                <strong>RDD transformations &#8211;</strong>&nbsp;Transformations are lazy operations, instead of updating an RDD, these operations return another RDD.<br><strong>RDD&nbsp;actions&nbsp;&#8211;</strong>&nbsp;operations that trigger computation and return RDD values.<br>
                <h3 id="rdd-transformations">RDD Transformations with example</h3>
                Transformations on PySpark RDD returns another RDD and transformations are lazy meaning they don&#8217;t execute until you call an action on RDD. Some transformations on RDD&#8217;s are <code>flatMap()</code>, <code>map()</code>, <code>reduceByKey()</code>, <code>filter()</code>, <code>sortByKey()</code>&nbsp;and return new RDD instead of updating the current.<br>
                In this PySpark RDD Transformation section of the tutorial, I will explain transformations using the word count example. The below image demonstrates different RDD transformations we going to use.<br>
                First, create an RDD by reading a text file. The text file used here is available at the&nbsp;<a href="https://github.com/spark-examples/spark-scala-examples/blob/master/src/main/resources/test.txt">GitHub</a>&nbsp;project.<br>
                <pre><blockquote class="language-python">
                    
rdd = spark.sparkContext.textFile(&quot;/tmp/test.txt&quot;)

                </blockquote></pre>
                <strong>flatMap </strong>&#8211;&nbsp;<code>flatMap()</code> transformation flattens the RDD after applying the function and returns a new RDD. On the below example, first, it splits each record by space in an RDD and finally flattens it. Resulting RDD consists of a single word on each record.<br>
                <pre><blockquote class="language-python">
                    
rdd2 = rdd.flatMap(lambda x: x.split(&quot; &quot;))

                </blockquote></pre>
                <strong>map </strong>&#8211;&nbsp;<code>map()</code> transformation is used the apply any complex operations like adding a column, updating a column e.t.c, the output of map transformations would always have the same number of records as input.<br>
                In our word count example, we are adding a new column with value 1 for each word, the result of the RDD is <code>PairRDDFunctions</code> which contains key-value pairs, word of type String as Key and 1 of type Int as value.<br>
                <pre><blockquote class="language-python">
                    
rdd3 = rdd2.map(lambda x: (x,1))

                </blockquote></pre>
                <strong>reduceByKey</strong> &#8211;&nbsp;<code>reduceByKey()</code> merges the values for each key with the function specified. In our example, it reduces the word string by applying the sum function on value. The result of our RDD contains unique words and their count.&nbsp;<br>
                <pre><blockquote class="language-python">
                    
rdd5 = rdd4.reduceByKey(lambda a,b: a+b)

                </blockquote></pre>
                <strong>sortByKey</strong> &#8211;&nbsp;<code>sortByKey()</code> transformation is used to sort RDD elements on key. In our example, first, we convert RDD[(String,Int]) to&nbsp;RDD[(Int, String]) using map transformation and apply sortByKey which ideally does sort on an integer value. And finally, foreach with println statements returns all words in RDD and their count as key-value pair<br>
                <pre><blockquote class="language-python">
                    
rdd6 = rdd5.map(lambda x: (x[1],x[0])).sortByKey()
#Print rdd6 result to console
print(rdd6.collect())

                </blockquote></pre>
                <strong>filter</strong> &#8211;&nbsp;<code>filter</code>() transformation is used to filter the records in an RDD. In our example we are filtering all words starts with &#8220;a&#8221;.<br>
                <pre><blockquote class="language-python">
                    
rdd4 = rdd3.filter(lambda x : &#039;an&#039; in x[1])
print(rdd4.collect())

                </blockquote></pre>
                Please refer to this page for the full list of RDD transformations.<br>
                <h3 id="rdd-actions">RDD Actions with example</h3>
                RDD Action operations return the values from an RDD to a driver program. In other words, any RDD function that returns non-RDD is considered as an action.&nbsp;<br>
                In this section of the PySpark RDD tutorial, we will continue to use our word count example and performs some actions on it.<br>
                <strong>count</strong>() &#8211;&nbsp;Returns the number of records in an RDD<br>
                <pre><blockquote class="language-python">
                    
# Action - count
print(&quot;Count : &quot;+str(rdd6.count()))

                </blockquote></pre>
                <strong>first</strong>() &#8211;&nbsp;Returns the first record.<br>
                <pre><blockquote class="language-python">
                    
# Action - first
firstRec = rdd6.first()
print(&quot;First Record : &quot;+str(firstRec[0]) + &quot;,&quot;+ firstRec[1])

                </blockquote></pre>
                <strong>max</strong>() &#8211;&nbsp;Returns max record.<br>
                <pre><blockquote class="language-python">
                    
# Action - max
datMax = rdd6.max()
print(&quot;Max Record : &quot;+str(datMax[0]) + &quot;,&quot;+ datMax[1])

                </blockquote></pre>
                <strong>reduce</strong>() &#8211;&nbsp;Reduces the records to single, we can use this to count or sum.<br>
                <pre><blockquote class="language-python">
                    
# Action - reduce
totalWordCount = rdd6.reduce(lambda a,b: (a[0]+b[0],a[1]))
print(&quot;dataReduce Record : &quot;+str(totalWordCount[0]))

                </blockquote></pre>
                <strong>take</strong>() &#8211;&nbsp;Returns the record specified as an argument.<br>
                <pre><blockquote class="language-python">
                    
# Action - take
data3 = rdd6.take(3)
for f in data3:
    print(&quot;data3 Key:&quot;+ str(f[0]) +&quot;, Value:&quot;+f[1])

                </blockquote></pre>
                <strong>collect</strong>() &#8211;&nbsp;Returns all data from RDD as an array.&nbsp;Be careful when you use this action when you are working with huge RDD with millions and billions of data as you may run out of memory on the driver.<br>
                <pre><blockquote class="language-python">
                    
# Action - collect
data = rdd6.collect()
for f in data:
    print(&quot;Key:&quot;+ str(f[0]) +&quot;, Value:&quot;+f[1])

                </blockquote></pre>
                <strong>saveAsTextFile</strong>() &#8211;&nbsp;Using saveAsTestFile action, we can write the RDD to a text file.<br>
                <pre><blockquote class="language-python">
                    
rdd6.saveAsTextFile(&quot;/tmp/wordCount&quot;)

                </blockquote></pre>
                <h3 id="rdd-types">Types of RDD</h3>
                <strong>PairRDDFunctions or PairRDD</strong> &#8211;&nbsp;Pair RDD is a key-value pair This is mostly used RDD type,&nbsp;<br>
                <strong>ShuffledRDD &#8211;&nbsp;</strong><br>
                <strong>DoubleRDD &#8211;&nbsp;</strong><br>
                <strong>SequenceFileRDD &#8211;&nbsp;</strong><br>
                <strong>HadoopRDD &#8211;&nbsp;</strong><br>
                <strong>ParallelCollectionRDD &#8211;&nbsp;</strong><br>
                <h3 id="shuffle-operations">Shuffle Operations</h3>
                Shuffling is a mechanism PySpark uses to redistribute the data across different executors and even across machines. PySpark shuffling triggers when we perform certain transformation operations like <code>gropByKey()</code>, <code>reduceByKey()</code>, <code>join()</code> on RDDS<br>
                PySpark Shuffle is an expensive operation since it involves the following<br>
                <ul>
                    <li>Disk I/O</li>
                    <li>Involves data serialization and deserialization</li>
                    <li>Network I/O</li>
                </ul>
                When creating an RDD, PySpark doesn&#8217;t necessarily store the data for all keys in a partition since at the time of creation there is no way we can set the key for data set. <br>
                Hence, when we run the <code>reduceByKey()</code> operation to aggregate the data on keys, PySpark does the following. needs to first run tasks to collect all the data from all partitions and <br>
                For example, when we perform <code>reduceByKey()</code> operation, PySpark does the following<br>
                <ul>
                    <li>PySpark first runs m<em>ap</em>&nbsp;tasks on all partitions which groups all values for a single key.</li>
                    <li>The results of the map tasks are kept in memory.</li>
                    <li>When results do not fit in memory, PySpark stores the data into a disk.</li>
                    <li>PySpark shuffles the mapped data across partitions, some times it also stores the shuffled data into a disk for reuse when it needs to recalculate.</li>
                    <li>Run the garbage collection</li>
                    <li>Finally runs reduce tasks on each partition based on key.</li>
                </ul>
                PySpark RDD triggers shuffle and repartition for several operations like <code>repartition()</code>&nbsp;and&nbsp;<code>coalesce()</code>,&nbsp;&nbsp;<code>groupByKey()</code>,&nbsp;&nbsp;<code>reduceByKey()</code>, <code>cogroup()</code>&nbsp;and&nbsp;<code>join()</code> but not <code>countByKey()</code> .<br>
                <h3>Shuffle partition size &amp; Performance</h3>
                Based on your dataset size, a number of cores and memory PySpark shuffling can benefit or harm your jobs. When you dealing with less amount of data, you should typically reduce the shuffle partitions otherwise you will end up with many partitioned files with less number of records in each partition. which results in running many tasks with lesser data to process. <br>
                On other hand, when you have too much of data and having less number of partitions results in fewer longer running tasks and some times you may also get out of memory error.<br>
                Getting the right size of the shuffle partition is always tricky and takes many runs with different values to achieve the optimized number. This is one of the key properties to look for when you have performance issues on PySpark jobs.<br>
                <h3 id="rdd-persistence">PySpark RDD Persistence Tutorial</h3>
                PySpark&nbsp;<em>Cache</em>&nbsp;and P<em>ersist</em>&nbsp;are optimization techniques to improve the performance of the RDD jobs that are iterative and interactive. In this PySpark RDD Tutorial section, I will explain how to use persist() and cache() methods on RDD with examples.<br>
                Though PySpark provides computation 100 x times faster than traditional Map Reduce jobs, If you have not designed the jobs to reuse the repeating computations you will see degrade in performance when you are dealing with billions or trillions of data. Hence, we need to look at the computations and use optimization techniques as one of the ways to improve performance.<br>
                Using&nbsp;<a href="https://sparkbyexamples.com/apache-spark-rdd/spark-rdd-cache-and-persist-example/"><code>cache()</code>&nbsp;and&nbsp;<code>persist()</code></a>&nbsp;methods, PySpark provides an optimization mechanism to store the intermediate computation of an RDD so they can be reused in subsequent actions.<br>
                When you persist or cache an RDD, each worker node stores it’s partitioned data in memory or disk and reuses them in other actions on that RDD. And Spark’s persisted data on nodes are fault-tolerant meaning if any partition is lost, it will automatically be recomputed using the original transformations that created it.<br>
                <h3>Advantages of Persisting RDD</h3>
                <ul>
                    <li><strong>Cost efficient</strong> &#8211; PySpark computations are very expensive hence reusing the computations are used to save cost.</li>
                    <li><strong>Time efficient</strong> &#8211; Reusing the repeated computations saves lots of time.</li>
                    <li><strong>Execution time</strong> &#8211; Saves execution time of the job which allows us to perform more jobs on the same cluster.</li>
                </ul>
                <h3 id="rdd-cache">RDD Cache</h3>
                PySpark RDD <code>cache()</code> method by default saves RDD computation to storage level `<code>MEMORY_ONLY</code>` meaning it will store the data in the JVM heap as unserialized objects. <br>
                PySpark&nbsp;<code>cache()</code>&nbsp;method in RDD class internally calls&nbsp;<code>persist()</code>&nbsp;method which in turn uses&nbsp;<code>sparkSession.sharedState.cacheManager.cacheQuery</code>&nbsp;to cache the result set of RDD. Let’s look at an example.<br>
                <pre><blockquote class="language-python">
                    
 cachedRdd = rdd.cache()

                </blockquote></pre>
                <h3 id="rdd-persist">RDD Persist</h3>
                PySpark persist() method is used to store the RDD to one of the storage levels <code>MEMORY_ONLY</code>,<code>MEMORY_AND_DISK</code>, <code>MEMORY_ONLY_SER</code>, <code>MEMORY_AND_DISK_SER</code>, <code>DISK_ONLY</code>, <code>MEMORY_ONLY_2</code>,<code>MEMORY_AND_DISK_2</code> and more.<br>
                PySpark persist has two signature first signature doesn&#8217;t take any argument which by default saves it to <code>&lt;strong&gt;MEMORY_ONLY&lt;/strong&gt;</code> storage level and the second signature which takes <code>StorageLevel</code> as an argument to store it to different storage levels.<br>
                <pre><blockquote class="language-python">
                    
import pyspark
dfPersist = rdd.persist(pyspark.StorageLevel.MEMORY_ONLY)
dfPersist.show(false)

                </blockquote></pre>
                <h3 id="rdd-unpersist">RDD Unpersist</h3>
                PySpark automatically monitors every <code>persist()</code> and <code>cache()</code> calls you make and it checks usage on each node and drops persisted data if not used or by using least-recently-used (LRU) algorithm. You can also manually remove using <code>unpersist()</code>&nbsp;method. unpersist() marks the RDD as non-persistent, and remove all blocks for it from memory and disk.<br>
                <pre><blockquote class="language-python">
                    
  rddPersist2 = rddPersist.unpersist()

                </blockquote></pre>
                unpersist(Boolean) with boolean as argument blocks until all blocks are deleted.<br>
                <h3 id="persistence-storage-levels">Persistence Storage Levels</h3>
                All different storage level PySpark supports are available at <code>org.apache.spark.storage.StorageLevel</code> class. Storage Level defines how and where to store the RDD.<br>
                <code>MEMORY_ONLY</code> – This is the default behavior of the RDD <code>cache()</code> method and stores the RDD as deserialized objects to JVM memory. When there is no enough memory available it will not save to RDD of some partitions and these will be re-computed as and when required. This takes more storage but runs faster as it takes few CPU cycles to read from memory.<br>
                <code>MEMORY_ONLY_SER</code> – This is the same as <code>MEMORY_ONLY</code> but the difference being it stores RDD as serialized objects to JVM memory. It takes lesser memory (space-efficient) then MEMORY_ONLY as it saves objects as serialized and takes an additional few more CPU cycles in order to deserialize.<br>
                <code>MEMORY_ONLY_2</code> – Same as <code>MEMORY_ONLY</code> storage level but replicate each partition to two cluster nodes.<br>
                <code>MEMORY_ONLY_SER_2</code> – Same as <code>MEMORY_ONLY_SER</code> storage level but replicate each partition to two cluster nodes.<br>
                <code>MEMORY_AND_DISK</code> – In this Storage Level, The RDD will be stored in JVM memory as a deserialized objects. When required storage is greater than available memory, it stores some of the excess partitions in to disk and reads the data from disk when it required. It is slower as there is I/O involved.<br>
                <code>MEMORY_AND_DISK_SER</code> – This is same as <code>MEMORY_AND_DISK</code> storage level difference being it serializes the RDD objects in memory and on disk when space not available.<br>
                <code>MEMORY_AND_DISK_2</code> – Same as <code>MEMORY_AND_DISK</code> storage level but replicate each partition to two cluster nodes.<br>
                <code>MEMORY_AND_DISK_SER_2</code> – Same as <code>MEMORY_AND_DISK_SER</code> storage level but replicate each partition to two cluster nodes.<br>
                <code>DISK_ONLY</code> – In this storage level, RDD is stored only on disk and the CPU computation time is high as I/O involved.<br>
                <code>DISK_ONLY_2</code> – Same as <code>DISK_ONLY</code> storage level but replicate each partition to two cluster nodes.<br>
                <h3 id="pyspark-shared-variables">PySpark Shared Variables Tutorial</h3>
                In this section of the PySpark RDD tutorial, let&#8217;s learn what are the different types of PySpark Shared variables and how they are used in PySpark transformations.<br>
                When PySpark executes transformation using <code>map()</code> or <code>reduce()</code> operations, It executes the transformations on a remote node by using the variables that are shipped with the tasks and these variables are not sent back to PySpark Driver hence there is no capability to reuse and sharing the variables across tasks. PySpark shared variables solve this problem using the below two techniques. PySpark provides two types of shared variables. <br>
                <ul>
                    <li>Broadcast variables (read-only shared variable)</li>
                    <li>Accumulator variables (updatable shared variables)</li>
                </ul>
                <h3 id="broadcast-variables">Broadcast read-only Variables</h3>
                Broadcast variables are read-only shared variables that are cached and available on all nodes in a cluster in-order to access or use by the tasks. Instead of sending this data along with every task, PySpark distributes broadcast variables to the machine using efficient broadcast algorithms to reduce communication costs.<br>
                One of the best use-case of PySpark RDD Broadcast is to use with lookup data for example zip code, state, country lookups e.t.c<br>
                When you run a PySpark RDD job that has the Broadcast variables defined and used, PySpark does the following.<br>
                <ul>
                    <li>PySpark breaks the job into stages that have distributed shuffling and actions are executed with in the stage.</li>
                    <li>Later Stages are also broken into tasks</li>
                    <li>PySpark broadcasts the common data (reusable) needed by tasks within each stage.</li>
                    <li>The broadcasted data is cache in serialized format and deserialized before executing each task.</li>
                </ul>
                The PySpark Broadcast is created using the <code>broadcast(v)</code> method of the SparkContext class. This method takes the argument v that you want to broadcast.<br>
                <pre><blockquote class="language-python">
                    
broadcastVar = sc.broadcast([0, 1, 2, 3])
broadcastVar.value

                </blockquote></pre>
                Note that broadcast variables are not sent to executors with sc.broadcast(variable) call instead, they will be sent to executors when they are first used.<br>
                <h3 id="accumulators">Accumulators</h3>
                PySpark Accumulators are another type shared variable that are only “added” through an associative and commutative operation and are used to perform counters (Similar to Map-reduce counters) or sum operations.<br>
                PySpark by default supports creating an accumulator of any numeric type and provides the capability to add custom accumulator types. Programmers can create following accumulators<br>
                <ul>
                    <li>named accumulators</li>
                    <li>unnamed accumulators</li>
                </ul>
                When you create a named accumulator, you can see them on PySpark web UI under the &#8220;Accumulator&#8221; tab. On this tab, you will see two tables; the first table &#8220;accumulable&#8221; &#8211; consists of all named accumulator variables and their values. And on the second table &#8220;Tasks&#8221; &#8211; value for each accumulator modified by a task.<br>
                Where as unnamed accumulators are not shows on PySpark web UI, For all practical purposes it is suggestable to use named accumulators.<br>
                Accumulator variables are created using <code>SparkContext.longAccumulator(v)</code><br>
                <pre><blockquote class="language-python">
                    
accum = sc.longAccumulator(&quot;SumAccumulator&quot;)
sc.parallelize([1, 2, 3]).foreach(lambda x: accum.add(x))

                </blockquote></pre>
                PySpark by default provides accumulator methods for long, double and collection types. All these methods are present in SparkContext class and return <code>LongAccumulator</code>, <code>DoubleAccumulator</code>, and <code>CollectionAccumulator</code> respectively.<br>
                <ul>
                    <li>Long Accumulator</li>
                    <li>Double Accumulator</li>
                    <li>Collection Accumulator</li>
                </ul>
                <h3 id="dataframe">Advanced API &#8211; DataFrame &amp; DataSet</h3>
                <h3>Creating RDD from DataFrame and vice-versa</h3>
                Though we have more advanced API&#8217;s over RDD, we would often need to convert DataFrame to RDD or RDD to DataFrame. Below are several examples.<br>
                <pre><blockquote class="language-python">
                    
# Converts RDD to DataFrame
dfFromRDD1 = rdd.toDF()
# Converts RDD to DataFrame with column names
dfFromRDD2 = rdd.toDF(&quot;col1&quot;,&quot;col2&quot;)
# using createDataFrame() - Convert DataFrame to RDD
df = spark.createDataFrame(rdd).toDF(&quot;col1&quot;,&quot;col2&quot;)
# Convert DataFrame to RDD
rdd = df.rdd

                </blockquote></pre>


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