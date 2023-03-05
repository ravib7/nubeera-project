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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Spark with Python (PySpark) Tutorial For Beginners</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
                <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
                <li class="breadcrumb-item active">PySpark</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                <h3> In this article</h3>
                <ul>
                    <li><a href="#what-is-pyspark">What is PySpark</a>
                        <ul>
                            <li><a href="#introduction">Introduction</a></li>
                            <li><a href="#uses-pyspark">Who uses PySpark</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#advantages">Advantages</a></li>
                        </ul>
                    </li>
                    <li><a href="#architecture">PySpark Architecture</a></li>
                    <li><a href="https://sparkbyexamples.com/wp-admin/post.php?post=7205&amp;action=edit#cluster-manager">Cluster Manager Types</a></li>
                    <li><a href="#modules-packages">Modules and Packages</a></li>
                    <li><a href="#pyspark-installation">PySpark Installation on windows</a></li>
                    <li><a href="#spyder-ide">Spyder IDE &amp; Jupyter Notebook</a></li>
                    <li><a href="#rdd">PySpark RDD</a>
                        <ul>
                            <li><a href="#rdd-creation">RDD creation</a></li>
                            <li><a href="#rdd-operations">RDD operations</a></li>
                        </ul>
                    </li>
                    <li><a href="#pyspark-dataframe">PySpark DataFrame</a>
                        <ul>
                            <li><a href="#pandas">Is PySpark faster than pandas?</a></li>
                            <li><a href="#dataframe-creation">DataFrame creation</a></li>
                            <li><a href="#dataframe-creation">DataFrame Operations</a></li>
                            <li><a href="#external-data-sources">DataFrame external data sources</a></li>
                            <li><a href="#file-formats">Supported file formats</a></li>
                        </ul>
                    </li>
                    <li><a href="#pyspark-sql">PySpark SQL</a></li>
                    <li><a href="#pyspark-streaming">PySpark Streaming</a>
                        <ul>
                            <li><a href="#tcp-socket">Streaming from TCP Socket</a></li>
                            <li><a href="#kafka">Streaming from Kafka</a></li>
                        </ul>
                    </li>
                    <li><a href="#pyspark-graphframes">PySpark GraphFrames</a>
                        <ul>
                            <li><a href="#graphx-graphframes">GraphX vs GraphFrames</a></li>
                        </ul>
                    </li>
                </ul>
                In this PySpark Tutorial (Spark with Python) with examples, you will learn what is PySpark? it’s features, advantages, modules, packages, and how to use RDD &amp; DataFrame with sample examples in Python code. <br><br>
                Every sample example explained here is tested in our development environment and is available at&nbsp;PySpark Examples Github project&nbsp;for reference. <br><br>
                All Spark examples provided in this PySpark (Spark with Python) tutorial is basic, simple, and easy to practice for beginners who are enthusiastic to learn PySpark and advance your career in BigData and Machine Learning. <br><br>
                <strong>Note:</strong> In case if you can’t find the PySpark examples you are looking for on this tutorial page, I would recommend using the Search option from the menu bar to find your tutorial and sample example code. There are hundreds of tutorials Spark, Scala, PySpark, and Python on this website you can learn from. <br><br>
                <div class="code-block code-block-5" style="margin: 8px auto; text-align: center; display: block; clear: both;">
                </div>
                If you are working with smaller Dataset and doesn’t have Spark cluster, still you wanted to get benefits similar to Spark DataFrame, you can use <a href="https://sparkbyexamples.com/pandas/pandas-dataframe-tutorial-beginners-guide/">Python pandas DataFrames</a>. Main difference is pandas DataFrame’s are not distributed and runs on single node.

                <h3 id="what-is-pyspark">What is PySpark?</h3>
                Before we jump into the PySpark tutorial, first, let’s understand what is PySpark and how it is related to Python? who uses PySpark and it’s advantages.
                <h3 id="introduction">Introduction</h3>
                PySpark is a Spark library written in Python to run Python application using Apache Spark capabilities, using PySpark we can run applications parallelly on the distributed cluster (multiple nodes). <br><br>
                <div class="code-block code-block-6" style="margin: 8px auto; text-align: center; display: block; clear: both;">

                    <ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-5997324169690164" data-ad-slot="7554269156"></ins>
                    <script type="text/javascript">
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                In other words, PySpark is a Python API for Apache Spark. Apache Spark is an analytical processing engine for large scale powerful distributed data processing and machine learning applications.
                <figure class="wp-block-image size-large"><img width="1024" height="164" src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/What-is-PySpark.png?resize=1024%2C164&amp;ssl=1" alt="What is PySpark" class="wp-image-7858 jetpack-lazy-image jetpack-lazy-image--handled" data-recalc-dims="1" srcset="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/What-is-PySpark.png?w=1024&amp;ssl=1 1024w, https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/What-is-PySpark.png?resize=300%2C48&amp;ssl=1 300w, https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/What-is-PySpark.png?resize=768%2C123&amp;ssl=1 768w" data-lazy-loaded="1" sizes="(max-width: 1024px) 100vw, 1024px" loading="eager"><noscript><img width="1024" height="164" alt="What is PySpark" data-srcset="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/What-is-PySpark.png?w=1024&amp;ssl=1 1024w, https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/What-is-PySpark.png?resize=300%2C48&amp;ssl=1 300w, https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/What-is-PySpark.png?resize=768%2C123&amp;ssl=1 768w" data-recalc-dims="1" data-src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/What-is-PySpark.png?resize=1024%2C164&#038;ssl=1" data-sizes="(max-width: 1024px) 100vw, 1024px" class="wp-image-7858 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="1024" height="164" src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/What-is-PySpark.png?resize=1024%2C164&#038;ssl=1" alt="What is PySpark" class="wp-image-7858" srcset="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/What-is-PySpark.png?w=1024&amp;ssl=1 1024w, https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/What-is-PySpark.png?resize=300%2C48&amp;ssl=1 300w, https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/What-is-PySpark.png?resize=768%2C123&amp;ssl=1 768w" sizes="(max-width: 1024px) 100vw, 1024px" data-recalc-dims="1" /></noscript>
                </figure>
                Spark basically written in Scala and later on due to its industry adaptation it’s API PySpark released for Python using Py4J. <code>Py4J</code> is a Java library that is integrated within PySpark and allows python to dynamically interface with JVM objects, hence to run PySpark you also need Java to be installed along with Python, and Apache Spark. <br><br>
                Additionally, For the development, you can use Anaconda distribution (widely used in the Machine Learning community) which comes with a lot of useful tools like Spyder IDE, Jupyter notebook to run PySpark applications. <br><br>
                <div class="code-block code-block-13" style="margin: 8px 0; clear: both;">




                    <div class="adsbyvli" data-ad-slot="vi_99876890" style="width: 300px; height: 250px"></div>
                    <script type="text/javascript">
                        (vitag.Init = window.vitag.Init || []).push(function() {
                            viAPItag.display("vi_99876890")
                        })
                    </script>
                </div>
                In real-time, PySpark has used a lot in the machine learning &amp; Data scientists community; thanks to vast python machine learning libraries. Spark runs operations on billions and trillions of data on distributed clusters 100 times faster than the traditional python applications.
                <h3 id="uses-pyspark">Who uses PySpark?</h3>
                PySpark is very well used in Data Science and Machine Learning community as there are many widely used data science libraries written in Python including NumPy, TensorFlow. Also used due to its efficient processing of large datasets. PySpark has been used by many organizations like Walmart, Trivago, Sanofi, Runtastic, and many more.
                <h3 id="features">Features</h3>
                Following are the main features of PySpark.
                <figure class="wp-block-image size-large"><img width="960" height="720" src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-features.png?resize=960%2C720&amp;ssl=1" alt="PySpark Features" class="wp-image-7863 jetpack-lazy-image jetpack-lazy-image--handled" data-recalc-dims="1" srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-features.png?w=960&amp;ssl=1 960w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-features.png?resize=300%2C225&amp;ssl=1 300w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-features.png?resize=768%2C576&amp;ssl=1 768w" data-lazy-loaded="1" sizes="(max-width: 960px) 100vw, 960px" loading="eager"><noscript><img width="960" height="720" alt="PySpark Features" data-srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-features.png?w=960&amp;ssl=1 960w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-features.png?resize=300%2C225&amp;ssl=1 300w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-features.png?resize=768%2C576&amp;ssl=1 768w" data-recalc-dims="1" data-src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-features.png?resize=960%2C720&#038;ssl=1" data-sizes="(max-width: 960px) 100vw, 960px" class="wp-image-7863 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="960" height="720" src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-features.png?resize=960%2C720&#038;ssl=1" alt="PySpark Features" class="wp-image-7863" srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-features.png?w=960&amp;ssl=1 960w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-features.png?resize=300%2C225&amp;ssl=1 300w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-features.png?resize=768%2C576&amp;ssl=1 768w" sizes="(max-width: 960px) 100vw, 960px" data-recalc-dims="1" /></noscript>
                </figure>
                <ul>
                    <li>In-memory computation</li>
                    <li>Distributed processing using parallelize</li>
                    <li>Can be used with many cluster managers (Spark, Yarn, Mesos e.t.c)</li>
                    <li>Fault-tolerant</li>
                    <li>Immutable</li>
                    <li>Lazy evaluation</li>
                    <li>Cache &amp; persistence</li>
                    <li>Inbuild-optimization when using DataFrames</li>
                    <li>Supports ANSI SQL</li>
                </ul>
                <h3 id="advantages">Advantages of PySpark</h3>
                <ul>
                    <li>PySpark is a general-purpose, in-memory, distributed processing engine that allows you to process data efficiently in a distributed fashion.</li>
                    <li>Applications running on PySpark are 100x faster than traditional systems.</li>
                    <li>You will get great benefits using PySpark for data ingestion pipelines. </li>
                    <li>Using PySpark we can process data from Hadoop HDFS, AWS S3, and many file systems.</li>
                    <li>PySpark also is used to process real-time data using Streaming and Kafka.</li>
                    <li>Using PySpark streaming you can also stream files from the file system and also stream from the socket.</li>
                    <li>PySpark natively has machine learning and graph libraries.</li>
                </ul>
                <h3 id="architecture">PySpark Architecture</h3>
                Apache Spark works in a master-slave architecture where the master is called “Driver” and slaves are called “Workers”. When you run a Spark application, Spark Driver creates a context that is an entry point to your application, and all operations (transformations and actions) are executed on worker nodes, and the resources are managed by Cluster Manager.
                <figure class="wp-block-image size-large"><img width="596" height="286" src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-cluster-overview.png?resize=596%2C286&amp;ssl=1" alt="spark architecture" class="wp-image-5811 jetpack-lazy-image jetpack-lazy-image--handled" data-recalc-dims="1" srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-cluster-overview.png?w=596&amp;ssl=1 596w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-cluster-overview.png?resize=300%2C144&amp;ssl=1 300w" data-lazy-loaded="1" sizes="(max-width: 596px) 100vw, 596px" loading="eager"><noscript><img width="596" height="286" alt="spark architecture" data-srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-cluster-overview.png?w=596&amp;ssl=1 596w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-cluster-overview.png?resize=300%2C144&amp;ssl=1 300w" data-recalc-dims="1" data-src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-cluster-overview.png?resize=596%2C286&#038;ssl=1" data-sizes="(max-width: 596px) 100vw, 596px" class="wp-image-5811 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="596" height="286" src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-cluster-overview.png?resize=596%2C286&#038;ssl=1" alt="spark architecture" class="wp-image-5811" srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-cluster-overview.png?w=596&amp;ssl=1 596w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-cluster-overview.png?resize=300%2C144&amp;ssl=1 300w" sizes="(max-width: 596px) 100vw, 596px" data-recalc-dims="1" /></noscript>
                </figure>
                <h3 id="cluster-manager">Cluster Manager Types</h3>
                As of writing this Spark with Python (PySpark) tutorial, Spark supports below cluster managers:
                <ul>
                    <li>Standalone&nbsp;– a simple cluster manager included with Spark that makes it easy to set up a cluster.</li>
                    <li>Apache Mesos&nbsp;– Mesons is a Cluster manager that can also run Hadoop MapReduce and PySpark applications.</li>
                    <li>Hadoop YARN&nbsp;– the resource manager in Hadoop 2. This is mostly used, cluster manager.</li>
                    <li>Kubernetes&nbsp;– an open-source system for automating deployment, scaling, and management of containerized applications.</li>
                </ul>
                local – which is not really a cluster manager but still I wanted to mention as we use “local” for <code>master()</code> in order to run Spark on your laptop/computer.
                <h3 id="modules-packages">PySpark Modules &amp; Packages</h3>
                <figure class="wp-block-image size-large"><img width="1024" height="576" src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?resize=1024%2C576&amp;ssl=1" alt="modules and packages" class="wp-image-7864 jetpack-lazy-image jetpack-lazy-image--handled" data-recalc-dims="1" srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?resize=1024%2C576&amp;ssl=1 1024w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?resize=300%2C169&amp;ssl=1 300w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?resize=768%2C432&amp;ssl=1 768w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?w=1280&amp;ssl=1 1280w" data-lazy-loaded="1" sizes="(max-width: 1024px) 100vw, 1024px" loading="eager"><noscript><img width="1024" height="576" alt="modules and packages" data-srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?resize=1024%2C576&amp;ssl=1 1024w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?resize=300%2C169&amp;ssl=1 300w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?resize=768%2C432&amp;ssl=1 768w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?w=1280&amp;ssl=1 1280w" data-recalc-dims="1" data-src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?resize=1024%2C576&#038;ssl=1" data-sizes="(max-width: 1024px) 100vw, 1024px" class="wp-image-7864 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="1024" height="576" src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?resize=1024%2C576&#038;ssl=1" alt="modules and packages" class="wp-image-7864" srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?resize=1024%2C576&amp;ssl=1 1024w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?resize=300%2C169&amp;ssl=1 300w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?resize=768%2C432&amp;ssl=1 768w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-modules-features.png?w=1280&amp;ssl=1 1280w" sizes="(max-width: 1024px) 100vw, 1024px" data-recalc-dims="1" /></noscript>
                        <figcaption>Modules &amp; packages</figcaption>
                </figure>
                <ul>
                    <li>PySpark RDD </li>
                    <li>PySpark DataFrame and SQL</li>
                    <li>PySpark Streaming </li>
                    <li>PySpark MLib </li>
                    <li>PySpark GraphFrames </li>
                    <li>PySpark Resource It’s new in PySpark 3.0</li>
                </ul>
                <figure class="wp-block-image size-large"><img width="1018" height="572" src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-components-1.jpg?resize=1018%2C572&amp;ssl=1" alt="Spark Modules and components" class="wp-image-5813 jetpack-lazy-image jetpack-lazy-image--handled" data-recalc-dims="1" srcset="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-components-1.jpg?w=1018&amp;ssl=1 1018w, https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-components-1.jpg?resize=300%2C169&amp;ssl=1 300w, https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-components-1.jpg?resize=768%2C432&amp;ssl=1 768w" data-lazy-loaded="1" sizes="(max-width: 1018px) 100vw, 1018px" loading="eager"><noscript><img width="1018" height="572" alt="Spark Modules and components" data-srcset="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-components-1.jpg?w=1018&amp;ssl=1 1018w, https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-components-1.jpg?resize=300%2C169&amp;ssl=1 300w, https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-components-1.jpg?resize=768%2C432&amp;ssl=1 768w" data-recalc-dims="1" data-src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-components-1.jpg?resize=1018%2C572&#038;ssl=1" data-sizes="(max-width: 1018px) 100vw, 1018px" class="wp-image-5813 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="1018" height="572" src="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-components-1.jpg?resize=1018%2C572&#038;ssl=1" alt="Spark Modules and components" class="wp-image-5813" srcset="https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-components-1.jpg?w=1018&amp;ssl=1 1018w, https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-components-1.jpg?resize=300%2C169&amp;ssl=1 300w, https://i1.wp.com/sparkbyexamples.com/wp-content/uploads/2020/02/spark-components-1.jpg?resize=768%2C432&amp;ssl=1 768w" sizes="(max-width: 1018px) 100vw, 1018px" data-recalc-dims="1" /></noscript></figure>
                Besides these, if you wanted to use third-party libraries, you can find them at <a href="https://spark-packages.org/">https://spark-packages.org/</a> . This page is kind of a repository of all Spark third-party libraries.
                <h3 id="pyspark-installation">PySpark Installation</h3>
                In order to run PySpark examples mentioned in this tutorial, you need to have Python, Spark and it’s needed tools to be installed on your computer. Since most developers use Windows for development, I will explain how to install PySpark on windows.
                <h4>Install Python or Anaconda distribution</h4>
                Download and install either Python from <a href="https://www.python.org/downloads/windows/">Python.org</a> or <a href="https://www.anaconda.com/">Anaconda distribution</a> which includes Python, Spyder IDE, and Jupyter notebook. I would recommend using Anaconda as it’s popular and used by the Machine Learning &amp; Data science community.
                <h4><strong>Install Java 8</strong></h4>
                To run PySpark application, you would need Java 8 or later version hence download the Java version from <a href="https://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html">Oracle</a> and install it on your system. <br><br>
                Post installation, set <code>JAVA_HOME</code> and <code>PATH</code> variable.
                <div class="code-toolbar">
                    <pre class="language-python" tabindex="0"><blockquote class="language-python">
JAVA_HOME <span class="token operator">=</span> C<span class="token punctuation">:</span>\Program Files\Java\jdk1<span class="token number">.8</span><span class="token punctuation">.</span>0_201
PATH <span class="token operator">=</span> <span class="token operator">%</span>PATH<span class="token operator">%</span><span class="token punctuation">;</span>C<span class="token punctuation">:</span>\Program Files\Java\jdk1<span class="token number">.8</span><span class="token punctuation">.</span>0_201\bin
</blockquote></pre>

                </div>
                <h4><strong>Install Apache Spark</strong></h4>
                Download Apache spark by accessing <a href="https://spark.apache.org/downloads.html">Spark Download</a> page and select the link from “Download Spark (point 3)”. If you wanted to use a different version of Spark &amp; Hadoop, select the one you wanted from drop downs and the link on point 3 changes to the selected version and provides you with an updated link to download.
                <br><br><img width="565" height="148" src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-installation.jpg?resize=565%2C148&amp;ssl=1" alt="Pyspark installation" class="wp-image-7886 jetpack-lazy-image jetpack-lazy-image--handled" data-recalc-dims="1" srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-installation.jpg?w=565&amp;ssl=1 565w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-installation.jpg?resize=300%2C79&amp;ssl=1 300w" data-lazy-loaded="1" sizes="(max-width: 565px) 100vw, 565px" loading="eager"><br><br>
                After download, untar the binary using 7zip and copy the underlying folder <code>spark-3.0.0-bin-hadoop2.7</code> to <code>c:\apps</code>
                Now set the following environment variables.
                <div class="code-toolbar">
                    <pre class="language-python" tabindex="0"><blockquote class="language-python">
SPARK_HOME  <span class="token operator">=</span> C<span class="token punctuation">:</span>\apps\spark<span class="token number">-3.0</span><span class="token punctuation">.</span><span class="token number">0</span><span class="token operator">-</span>bin<span class="token operator">-</span>hadoop2<span class="token number">.7</span>
HADOOP_HOME <span class="token operator">=</span> C<span class="token punctuation">:</span>\apps\spark<span class="token number">-3.0</span><span class="token punctuation">.</span><span class="token number">0</span><span class="token operator">-</span>bin<span class="token operator">-</span>hadoop2<span class="token number">.7</span>
PATH<span class="token operator">=</span><span class="token operator">%</span>PATH<span class="token operator">%</span><span class="token punctuation">;</span>C<span class="token punctuation">:</span>\apps\spark<span class="token number">-3.0</span><span class="token punctuation">.</span><span class="token number">0</span><span class="token operator">-</span>bin<span class="token operator">-</span>hadoop2<span class="token number">.7</span>\bin
</blockquote></pre>

                </div>
                <h4>Setup winutils.exe</h4>
                Download wunutils.exe file from winutils, and copy it to <code>%SPARK_HOME%\bin</code> folder. Winutils are different for each Hadoop version hence download the right version from <a href="https://github.com/steveloughran/winutils">https://github.com/steveloughran/winutils</a>
                <h4>PySpark shell</h4>
                Now open command prompt and type <code>pyspark</code> command to run PySpark shell. You should see something like below.
                <figure class="wp-block-image size-large"><img width="668" height="127" src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-shell.jpg?resize=668%2C127&amp;ssl=1" alt="pyspark shell tutorial" class="wp-image-7887 jetpack-lazy-image jetpack-lazy-image--handled" data-recalc-dims="1" srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-shell.jpg?w=668&amp;ssl=1 668w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-shell.jpg?resize=300%2C57&amp;ssl=1 300w" data-lazy-loaded="1" sizes="(max-width: 668px) 100vw, 668px" loading="eager"><noscript><img width="668" height="127" alt="pyspark shell tutorial" data-srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-shell.jpg?w=668&amp;ssl=1 668w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-shell.jpg?resize=300%2C57&amp;ssl=1 300w" data-recalc-dims="1" data-src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-shell.jpg?resize=668%2C127&#038;ssl=1" data-sizes="(max-width: 668px) 100vw, 668px" class="wp-image-7887 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="668" height="127" src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-shell.jpg?resize=668%2C127&#038;ssl=1" alt="pyspark shell tutorial" class="wp-image-7887" srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-shell.jpg?w=668&amp;ssl=1 668w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-shell.jpg?resize=300%2C57&amp;ssl=1 300w" sizes="(max-width: 668px) 100vw, 668px" data-recalc-dims="1" /></noscript></figure>
                Spark-shell also creates a Spark context web UI and by default.
                <h3>Spark Web UI</h3>
                Apache Spark provides a suite of Web UIs (Jobs,&nbsp;Stages,&nbsp;Tasks,&nbsp;Storage,&nbsp;Environment,&nbsp;Executors, and&nbsp;SQL) to monitor the status of your Spark application, resource consumption of Spark cluster, and Spark configurations. On Spark Web UI, you can see how the operations are executed.
                <br><br><img width="755" height="501" src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-web-ui.png?resize=755%2C501&amp;ssl=1" alt="Spark Web UI" class="wp-image-8069 jetpack-lazy-image jetpack-lazy-image--handled" data-recalc-dims="1" srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-web-ui.png?w=755&amp;ssl=1 755w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-web-ui.png?resize=300%2C199&amp;ssl=1 300w" data-lazy-loaded="1" sizes="(max-width: 755px) 100vw, 755px" loading="eager"><noscript><img width="755" height="501" alt="Spark Web UI" data-srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-web-ui.png?w=755&amp;ssl=1 755w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-web-ui.png?resize=300%2C199&amp;ssl=1 300w" data-recalc-dims="1" data-src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-web-ui.png?resize=755%2C501&#038;ssl=1" data-sizes="(max-width: 755px) 100vw, 755px" class="wp-image-8069 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="755" height="501" src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-web-ui.png?resize=755%2C501&#038;ssl=1" alt="Spark Web UI" class="wp-image-8069" srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-web-ui.png?w=755&amp;ssl=1 755w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-web-ui.png?resize=300%2C199&amp;ssl=1 300w" sizes="(max-width: 755px) 100vw, 755px" data-recalc-dims="1" /><br><br>
                        <figcaption>Spark Web UI</figcaption>
                        </figure>
                        <h3 id="spark-history-server">Spark History Server</h3>
                        Spark History servers, keep a log of all Spark application you submit by spark-submit, spark-shell. before you start, first you need to set the below config on <code>spark-defaults.conf</code>
                        <div class="code-toolbar">
                            <pre class="language-scala" tabindex="0"><blockquote class="language-scala">
spark<span class="token punctuation">.</span>eventLog<span class="token punctuation">.</span>enabled <span class="token boolean">true</span>
spark<span class="token punctuation">.</span>history<span class="token punctuation">.</span>fs<span class="token punctuation">.</span>logDirectory file<span class="token operator">:</span><span class="token operator">/</span><span class="token comment">//c:/logs/path</span>
</blockquote></pre>
                            <div class="toolbar">
                                <div class="toolbar-item"><span>Scala</span></div>
                            </div>
                        </div>
                        Now, start spark history server on Linux or mac by running.
                        <div class="code-toolbar">
                            <pre class="language-scala" tabindex="0"><blockquote class="language-scala">
$SPARK_HOME<span class="token operator">/</span>sbin<span class="token operator">/</span>start<span class="token operator">-</span>history<span class="token operator">-</span>server<span class="token punctuation">.</span>sh
</blockquote></pre>
                            <div class="toolbar">
                                <div class="toolbar-item"><span>Scala</span></div>
                            </div>
                        </div>
                        If you are running Spark on windows, you can start the history server by starting the below command.
                        <div class="code-toolbar">
                            <pre class="language-scala" tabindex="0"><blockquote class="language-scala">
$SPARK_HOME<span class="token operator">/</span>bin<span class="token operator">/</span>spark<span class="token operator">-</span><span class="token keyword">class</span><span class="token punctuation">.</span>cmd org<span class="token punctuation">.</span>apache<span class="token punctuation">.</span>spark<span class="token punctuation">.</span>deploy<span class="token punctuation">.</span>history<span class="token punctuation">.</span>HistoryServer
</blockquote></pre>
                            <div class="toolbar">
                                <div class="toolbar-item"><span>Scala</span></div>
                            </div>
                        </div>
                        <figure class="wp-block-image size-large"><img width="1024" height="465" src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?resize=1024%2C465&amp;ssl=1" alt="spark history server" class="wp-image-8557 jetpack-lazy-image jetpack-lazy-image--handled" data-recalc-dims="1" srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?resize=1024%2C465&amp;ssl=1 1024w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?resize=300%2C136&amp;ssl=1 300w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?resize=768%2C349&amp;ssl=1 768w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?w=1232&amp;ssl=1 1232w" data-lazy-loaded="1" sizes="(max-width: 1024px) 100vw, 1024px" loading="eager"><noscript><img width="1024" height="465" alt="spark history server" data-srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?resize=1024%2C465&amp;ssl=1 1024w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?resize=300%2C136&amp;ssl=1 300w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?resize=768%2C349&amp;ssl=1 768w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?w=1232&amp;ssl=1 1232w" data-recalc-dims="1" data-src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?resize=1024%2C465&#038;ssl=1" data-sizes="(max-width: 1024px) 100vw, 1024px" class="wp-image-8557 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="1024" height="465" src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?resize=1024%2C465&#038;ssl=1" alt="spark history server" class="wp-image-8557" srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?resize=1024%2C465&amp;ssl=1 1024w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?resize=300%2C136&amp;ssl=1 300w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?resize=768%2C349&amp;ssl=1 768w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/spark-history-server-1.png?w=1232&amp;ssl=1 1232w" sizes="(max-width: 1024px) 100vw, 1024px" data-recalc-dims="1" /></noscript>
                                <figcaption>Spark History Server</figcaption>
                        </figure>
                        By clicking on each App ID, you will get the details of the application in PySpark web UI.

                        <h3 id="spyder-ide">Spyder IDE &amp; Jupyter Notebook</h3>
                        To write PySpark applications, you would need an IDE, there are 10’s of IDE to work with and I choose to use Spyder IDE and Jupyter notebook. If you have not installed Spyder IDE and Jupyter notebook along with Anaconda distribution, install these before you proceed. <br><br>
                        Now, set the following environment variable.
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
PYTHONPATH <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token operator">%</span>SPARK_HOME<span class="token operator">%</span><span class="token operator">/</span>python<span class="token punctuation">;</span>$SPARK_HOME<span class="token operator">/</span>python<span class="token operator">/</span>lib<span class="token operator">/</span>py4j<span class="token number">-0.10</span><span class="token punctuation">.</span><span class="token number">9</span><span class="token operator">-</span>src<span class="token punctuation">.</span>zip<span class="token punctuation">;</span><span class="token operator">%</span>PYTHONPATH<span class="token operator">%</span>
</blockquote></pre>

                        </div>
                        Now open Spyder IDE and create a new file with below simple PySpark program and run it. You should see 5 in output.
                        <figure class="wp-block-image size-large"><img width="776" height="383" src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-spyder.jpg?resize=776%2C383&amp;ssl=1" alt="spyder ide" class="wp-image-7888 jetpack-lazy-image jetpack-lazy-image--handled" data-recalc-dims="1" srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-spyder.jpg?w=776&amp;ssl=1 776w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-spyder.jpg?resize=300%2C148&amp;ssl=1 300w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-spyder.jpg?resize=768%2C379&amp;ssl=1 768w" data-lazy-loaded="1" sizes="(max-width: 776px) 100vw, 776px" loading="eager"><noscript><img width="776" height="383" alt="spyder ide" data-srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-spyder.jpg?w=776&amp;ssl=1 776w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-spyder.jpg?resize=300%2C148&amp;ssl=1 300w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-spyder.jpg?resize=768%2C379&amp;ssl=1 768w" data-recalc-dims="1" data-src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-spyder.jpg?resize=776%2C383&#038;ssl=1" data-sizes="(max-width: 776px) 100vw, 776px" class="wp-image-7888 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="776" height="383" src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-spyder.jpg?resize=776%2C383&#038;ssl=1" alt="spyder ide" class="wp-image-7888" srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-spyder.jpg?w=776&amp;ssl=1 776w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-spyder.jpg?resize=300%2C148&amp;ssl=1 300w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-spyder.jpg?resize=768%2C379&amp;ssl=1 768w" sizes="(max-width: 776px) 100vw, 776px" data-recalc-dims="1" /></noscript>
                                <figcaption>PySpark application running on Spyder IDE</figcaption>
                        </figure>
                        Now let’s start the Jupyter Notebook
                        <figure class="wp-block-image size-large"><img width="1024" height="327" src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?resize=1024%2C327&amp;ssl=1" alt="jupyter install" class="wp-image-8565 jetpack-lazy-image jetpack-lazy-image--handled" data-recalc-dims="1" srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?resize=1024%2C327&amp;ssl=1 1024w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?resize=300%2C96&amp;ssl=1 300w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?resize=768%2C245&amp;ssl=1 768w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?w=1450&amp;ssl=1 1450w" data-lazy-loaded="1" sizes="(max-width: 1024px) 100vw, 1024px" loading="eager"><noscript><img width="1024" height="327" alt="jupyter install" data-srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?resize=1024%2C327&amp;ssl=1 1024w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?resize=300%2C96&amp;ssl=1 300w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?resize=768%2C245&amp;ssl=1 768w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?w=1450&amp;ssl=1 1450w" data-recalc-dims="1" data-src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?resize=1024%2C327&#038;ssl=1" data-sizes="(max-width: 1024px) 100vw, 1024px" class="wp-image-8565 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="1024" height="327" src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?resize=1024%2C327&#038;ssl=1" alt="jupyter install" class="wp-image-8565" srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?resize=1024%2C327&amp;ssl=1 1024w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?resize=300%2C96&amp;ssl=1 300w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?resize=768%2C245&amp;ssl=1 768w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/pyspark-jupyter.png?w=1450&amp;ssl=1 1450w" sizes="(max-width: 1024px) 100vw, 1024px" data-recalc-dims="1" /></noscript>
                                <figcaption>PySpark statements running on Jupyter Interface</figcaption>
                        </figure>
                        <h3 id="rdd">PySpark RDD – Resilient Distributed Dataset</h3>
                        In this section of the PySpark tutorial, I will introduce the RDD and explains how to create them and use its transformation and action operations with examples.<br><br>
                        PySpark RDD (Resilient Distributed Dataset)&nbsp;is a fundamental data structure of PySpark that is fault-tolerant, immutable distributed collections of objects, which means once you create an RDD you cannot change it. Each dataset in RDD is divided into logical partitions, which can be computed on different nodes of the cluster.
                        <h3 id="rdd-creation">RDD Creation&nbsp;</h3>
                        In order to create an RDD, first, you need to create a SparkSession which is an entry point to the PySpark application. SparkSession can be created using a <code>builder()</code> or <code>newSession()</code> methods of the SparkSession. <br><br>
                        Spark session internally creates a <code>sparkContext</code> variable of <code>SparkContext</code>. You can create multiple SparkSession objects but only one SparkContext per JVM. In case if you want to create another new SparkContext you should stop existing Sparkcontext (using&nbsp;<code>stop()</code>) before creating a new one.
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
spark <span class="token operator">=</span> SparkSession<span class="token punctuation">.</span>builder<span class="token punctuation">(</span><span class="token punctuation">)</span>
      <span class="token punctuation">.</span>master<span class="token punctuation">(</span><span class="token string">"local[1]"</span><span class="token punctuation">)</span>
      <span class="token punctuation">.</span>appName<span class="token punctuation">(</span><span class="token string">"SparkByExamples.com"</span><span class="token punctuation">)</span>
      <span class="token punctuation">.</span>getOrCreate<span class="token punctuation">(</span><span class="token punctuation">)</span>  
</blockquote></pre>

                        </div>
                        <h4>using parallelize()</h4>
                        SparkContext has several functions to use with RDDs. For example, it’s <code>parallelize()</code> method is used to create an RDD from a list.
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
<span class="token comment">#Create RDD from parallelize    </span>
dataList <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">(</span><span class="token string">"Java"</span><span class="token punctuation">,</span> <span class="token number">20000</span><span class="token punctuation">)</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token string">"Python"</span><span class="token punctuation">,</span> <span class="token number">100000</span><span class="token punctuation">)</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token string">"Scala"</span><span class="token punctuation">,</span> <span class="token number">3000</span><span class="token punctuation">)</span><span class="token punctuation">]</span>
rdd<span class="token operator">=</span>spark<span class="token punctuation">.</span>sparkContext<span class="token punctuation">.</span>parallelize<span class="token punctuation">(</span>dataList<span class="token punctuation">)</span>
</blockquote></pre>

                        </div>
                        <h4>using textFile()</h4>
                        RDD can also be created from a text file using <code>textFile()</code> function of the SparkContext.
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
<span class="token operator">//</span>Create RDD <span class="token keyword">from</span> external Data source
rdd2 <span class="token operator">=</span> spark<span class="token punctuation">.</span>sparkContext<span class="token punctuation">.</span>textFile<span class="token punctuation">(</span><span class="token string">"/path/textFile.txt"</span><span class="token punctuation">)</span>
</blockquote></pre>

                        </div>
                        Once you have an RDD, you can perform transformation and action operations. Any operation you perform on RDD runs in parallel.
                        <h3 id="rdd-operations">RDD Operations</h3>
                        On PySpark RDD, you can perform two kinds of operations. <br><br>
                        <strong>RDD transformations –</strong>&nbsp;Transformations are lazy operations. When you run a transformation(for example update), instead of updating a current RDD, these operations return another RDD. <br><br>
                        <strong>RDD&nbsp;actions</strong>&nbsp;–&nbsp;operations that trigger computation and return RDD values to the driver.
                        <h4>RDD Transformations</h4>
                        Transformations on Spark RDD&nbsp;returns another RDD and transformations are lazy meaning they don’t execute until you call an action on RDD. Some transformations on RDD’s are&nbsp;<code>flatMap()</code>,&nbsp;<code>map()</code>,&nbsp;<code>reduceByKey()</code>,&nbsp;<code>filter()</code>,&nbsp;<code>sortByKey()</code>&nbsp;and return new RDD instead of updating the current.
                        <h4>RDD Actions</h4>
                        RDD Action operation returns the&nbsp;values from an RDD to a driver node. In other words, any RDD function that returns non RDD[T] is considered as an action.&nbsp; <br><br>
                        Some actions on RDD’s are <code>count()</code>, <code>collect()</code>, <code>first()</code>, <code>max()</code>, <code>reduce()</code> and more.
                        <h3 id="pyspark-dataframe">PySpark DataFrame</h3>
                        DataFrame definition is very well explained by Databricks hence I do not want to define it again and confuse you. Below is the definition I took it from Databricks.
                        <blockquote class="wp-block-quote">
                            DataFrame is a distributed collection of data organized into named columns. It is conceptually equivalent to a table in a relational database or a data frame in R/Python, but&nbsp;with richer optimizations under the hood. DataFrames can be constructed from a wide array of sources such as structured data files, tables in Hive, external databases, or existing RDDs.<cite>– Databricks</cite>
                        </blockquote>
                        If you are coming from a Python background I would assume you already know what Pandas DataFrame is; PySpark DataFrame is mostly similar to Pandas DataFrame with exception PySpark DataFrames are distributed in the cluster (meaning the data in DataFrame’s are stored in different machines in a cluster) and any operations in PySpark executes in parallel on all machines whereas Panda Dataframe stores and operates on a single machine. <br><br>
                        If you have no Python background, I would recommend you learn some basics on Python before you proceeding this Spark tutorial. For now, just know that data in PySpark DataFrame’s are stored in different machines in a cluster.
                        <h3 id="pandas">Is PySpark faster than pandas?</h3>
                        Due to parallel execution on all cores on multiple machines, PySpark runs operations faster then pandas. In other words, pandas DataFrames run operations on a single node whereas PySpark runs on multiple machines.
                        <h3 id="dataframe-creation">DataFrame creation</h3>
                        Simplest way to create an DataFrame is from a Python list of data. DataFrame can also be created from an RDD and by reading a files from several sources.
                        <h4>using createDataFrame()</h4>
                        By using <code>createDataFrame()</code> function of the SparkSession you can create a DataFrame.
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
data <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">(</span><span class="token string">'James'</span><span class="token punctuation">,</span><span class="token string">''</span><span class="token punctuation">,</span><span class="token string">'Smith'</span><span class="token punctuation">,</span><span class="token string">'1991-04-01'</span><span class="token punctuation">,</span><span class="token string">'M'</span><span class="token punctuation">,</span><span class="token number">3000</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
  <span class="token punctuation">(</span><span class="token string">'Michael'</span><span class="token punctuation">,</span><span class="token string">'Rose'</span><span class="token punctuation">,</span><span class="token string">''</span><span class="token punctuation">,</span><span class="token string">'2000-05-19'</span><span class="token punctuation">,</span><span class="token string">'M'</span><span class="token punctuation">,</span><span class="token number">4000</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
  <span class="token punctuation">(</span><span class="token string">'Robert'</span><span class="token punctuation">,</span><span class="token string">''</span><span class="token punctuation">,</span><span class="token string">'Williams'</span><span class="token punctuation">,</span><span class="token string">'1978-09-05'</span><span class="token punctuation">,</span><span class="token string">'M'</span><span class="token punctuation">,</span><span class="token number">4000</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
  <span class="token punctuation">(</span><span class="token string">'Maria'</span><span class="token punctuation">,</span><span class="token string">'Anne'</span><span class="token punctuation">,</span><span class="token string">'Jones'</span><span class="token punctuation">,</span><span class="token string">'1967-12-01'</span><span class="token punctuation">,</span><span class="token string">'F'</span><span class="token punctuation">,</span><span class="token number">4000</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
  <span class="token punctuation">(</span><span class="token string">'Jen'</span><span class="token punctuation">,</span><span class="token string">'Mary'</span><span class="token punctuation">,</span><span class="token string">'Brown'</span><span class="token punctuation">,</span><span class="token string">'1980-02-17'</span><span class="token punctuation">,</span><span class="token string">'F'</span><span class="token punctuation">,</span><span class="token operator">-</span><span class="token number">1</span><span class="token punctuation">)</span>
<span class="token punctuation">]</span>

columns <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">"firstname"</span><span class="token punctuation">,</span><span class="token string">"middlename"</span><span class="token punctuation">,</span><span class="token string">"lastname"</span><span class="token punctuation">,</span><span class="token string">"dob"</span><span class="token punctuation">,</span><span class="token string">"gender"</span><span class="token punctuation">,</span><span class="token string">"salary"</span><span class="token punctuation">]</span>
df <span class="token operator">=</span> spark<span class="token punctuation">.</span>createDataFrame<span class="token punctuation">(</span>data<span class="token operator">=</span>data<span class="token punctuation">,</span> schema <span class="token operator">=</span> columns<span class="token punctuation">)</span>
</blockquote></pre>

                        </div>
                        Since DataFrame’s are structure format which contains names and column, we can get the schema of the DataFrame using <code>df.printSchema()</code>
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
data <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">(</span><span class="token string">'James'</span><span class="token punctuation">,</span><span class="token string">''</span><span class="token punctuation">,</span><span class="token string">'Smith'</span><span class="token punctuation">,</span><span class="token string">'1991-04-01'</span><span class="token punctuation">,</span><span class="token string">'M'</span><span class="token punctuation">,</span><span class="token number">3000</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
  <span class="token punctuation">(</span><span class="token string">'Michael'</span><span class="token punctuation">,</span><span class="token string">'Rose'</span><span class="token punctuation">,</span><span class="token string">''</span><span class="token punctuation">,</span><span class="token string">'2000-05-19'</span><span class="token punctuation">,</span><span class="token string">'M'</span><span class="token punctuation">,</span><span class="token number">4000</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
  <span class="token punctuation">(</span><span class="token string">'Robert'</span><span class="token punctuation">,</span><span class="token string">''</span><span class="token punctuation">,</span><span class="token string">'Williams'</span><span class="token punctuation">,</span><span class="token string">'1978-09-05'</span><span class="token punctuation">,</span><span class="token string">'M'</span><span class="token punctuation">,</span><span class="token number">4000</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
  <span class="token punctuation">(</span><span class="token string">'Maria'</span><span class="token punctuation">,</span><span class="token string">'Anne'</span><span class="token punctuation">,</span><span class="token string">'Jones'</span><span class="token punctuation">,</span><span class="token string">'1967-12-01'</span><span class="token punctuation">,</span><span class="token string">'F'</span><span class="token punctuation">,</span><span class="token number">4000</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
  <span class="token punctuation">(</span><span class="token string">'Jen'</span><span class="token punctuation">,</span><span class="token string">'Mary'</span><span class="token punctuation">,</span><span class="token string">'Brown'</span><span class="token punctuation">,</span><span class="token string">'1980-02-17'</span><span class="token punctuation">,</span><span class="token string">'F'</span><span class="token punctuation">,</span><span class="token operator">-</span><span class="token number">1</span><span class="token punctuation">)</span>
<span class="token punctuation">]</span>

columns <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">"firstname"</span><span class="token punctuation">,</span><span class="token string">"middlename"</span><span class="token punctuation">,</span><span class="token string">"lastname"</span><span class="token punctuation">,</span><span class="token string">"dob"</span><span class="token punctuation">,</span><span class="token string">"gender"</span><span class="token punctuation">,</span><span class="token string">"salary"</span><span class="token punctuation">]</span>
df <span class="token operator">=</span> spark<span class="token punctuation">.</span>createDataFrame<span class="token punctuation">(</span>data<span class="token operator">=</span>data<span class="token punctuation">,</span> schema <span class="token operator">=</span> columns<span class="token punctuation">)</span>
</blockquote></pre>

                        </div>
                        <code>df.show()</code> shows the 20 elements from the DataFrame.
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
<span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span>
<span class="token operator">|</span>firstname<span class="token operator">|</span>middlename<span class="token operator">|</span>lastname<span class="token operator">|</span>dob       <span class="token operator">|</span>gender<span class="token operator">|</span>salary<span class="token operator">|</span>
<span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span>
<span class="token operator">|</span>James    <span class="token operator">|</span>          <span class="token operator">|</span>Smith   <span class="token operator">|</span><span class="token number">1991</span><span class="token operator">-</span><span class="token number">04</span><span class="token operator">-</span><span class="token number">01</span><span class="token operator">|</span>M     <span class="token operator">|</span><span class="token number">3000</span>  <span class="token operator">|</span>
<span class="token operator">|</span>Michael  <span class="token operator">|</span>Rose      <span class="token operator">|</span>        <span class="token operator">|</span><span class="token number">2000</span><span class="token operator">-</span><span class="token number">05</span><span class="token operator">-</span><span class="token number">19</span><span class="token operator">|</span>M     <span class="token operator">|</span><span class="token number">4000</span>  <span class="token operator">|</span>
<span class="token operator">|</span>Robert   <span class="token operator">|</span>          <span class="token operator">|</span>Williams<span class="token operator">|</span><span class="token number">1978</span><span class="token operator">-</span><span class="token number">09</span><span class="token operator">-</span><span class="token number">05</span><span class="token operator">|</span>M     <span class="token operator">|</span><span class="token number">4000</span>  <span class="token operator">|</span>
<span class="token operator">|</span>Maria    <span class="token operator">|</span>Anne      <span class="token operator">|</span>Jones   <span class="token operator">|</span><span class="token number">1967</span><span class="token operator">-</span><span class="token number">12</span><span class="token operator">-</span><span class="token number">01</span><span class="token operator">|</span>F     <span class="token operator">|</span><span class="token number">4000</span>  <span class="token operator">|</span>
<span class="token operator">|</span>Jen      <span class="token operator">|</span>Mary      <span class="token operator">|</span>Brown   <span class="token operator">|</span><span class="token number">1980</span><span class="token operator">-</span><span class="token number">02</span><span class="token operator">-</span><span class="token number">17</span><span class="token operator">|</span>F     <span class="token operator">|</span><span class="token operator">-</span><span class="token number">1</span>    <span class="token operator">|</span>
<span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span>
</blockquote></pre>

                        </div>
                        <h3 id="dataframe-operations">DataFrame operations</h3>
                        Like RDD, DataFrame also has operations like Transformations and Actions.
                        <h3 id="external-data-sources">DataFrame from external data sources</h3>
                        In realtime applications, DataFrame’s are created from external sources like files from the local system, HDFS, S3 Azure, HBase, MySQL table e.t.c. Below is an example of how to read a csv file from a local system.
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
df <span class="token operator">=</span> spark<span class="token punctuation">.</span>read<span class="token punctuation">.</span>csv<span class="token punctuation">(</span><span class="token string">"/tmp/resources/zipcodes.csv"</span><span class="token punctuation">)</span>
df<span class="token punctuation">.</span>printSchema<span class="token punctuation">(</span><span class="token punctuation">)</span>
</blockquote></pre>

                        </div>
                        <h3 id="file-formats">Supported file formats</h3>
                        DataFrame has a rich set of API which supports reading and writing several file formats
                        <ul>
                            <li>csv</li>
                            <li>text</li>
                            <li>Avro</li>
                            <li>Parquet</li>
                            <li>tsv</li>
                            <li>xml and many more</li>
                        </ul>

                        <h3 id="pyspark-sql">PySpark SQL Tutorial</h3>
                        <code>PySpark SQL</code>&nbsp;is one of the most used Py<strong>Spark</strong>&nbsp;modules which is used for processing structured columnar data format. Once you have a DataFrame created, you can interact with the data by using SQL syntax. <br><br>
                        In other words, Spark SQL brings native RAW SQL queries on Spark meaning you can run traditional ANSI SQL’s on Spark Dataframe, in the later section of this PySpark SQL tutorial, you will learn in details using SQL <code>select</code>, <code>where</code>, <code>group by</code>, <code>join</code>, <code>union</code> e.t.c <br><br>
                        In order to use SQL, first, create a temporary table on DataFrame using <code>createOrReplaceTempView()</code> function. Once created, this table can be accessed throughout the SparkSession using <code>sql()</code> and it will be dropped along with your SparkContext termination. <br><br>
                        Use <code>sql()</code> method of the SparkSession object to run the query and this method returns a new DataFrame.
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
df<span class="token punctuation">.</span>createOrReplaceTempView<span class="token punctuation">(</span><span class="token string">"PERSON_DATA"</span><span class="token punctuation">)</span>
df2 <span class="token operator">=</span> spark<span class="token punctuation">.</span>sql<span class="token punctuation">(</span><span class="token string">"SELECT * from PERSON_DATA"</span><span class="token punctuation">)</span>
df2<span class="token punctuation">.</span>printSchema<span class="token punctuation">(</span><span class="token punctuation">)</span>
df2<span class="token punctuation">.</span>show<span class="token punctuation">(</span><span class="token punctuation">)</span>
</blockquote></pre>

                        </div>
                        Let’s see another pyspark example using <code>group by</code>.
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
groupDF <span class="token operator">=</span> spark<span class="token punctuation">.</span>sql<span class="token punctuation">(</span><span class="token string">"SELECT gender, count(*) from PERSON_DATA group by gender"</span><span class="token punctuation">)</span>
groupDF<span class="token punctuation">.</span>show<span class="token punctuation">(</span><span class="token punctuation">)</span>
</blockquote></pre>

                        </div>
                        This yields the below output
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
<span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span>
<span class="token operator">|</span>gender<span class="token operator">|</span>count<span class="token punctuation">(</span><span class="token number">1</span><span class="token punctuation">)</span><span class="token operator">|</span>
<span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span>
<span class="token operator">|</span>     F<span class="token operator">|</span>       <span class="token number">2</span><span class="token operator">|</span>
<span class="token operator">|</span>     M<span class="token operator">|</span>       <span class="token number">3</span><span class="token operator">|</span>
<span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">-</span><span class="token operator">+</span>
</blockquote></pre>

                        </div>
                        Similarly you can run any traditional SQL queries on DataFrame’s using PySpark SQL.
                        <h3 id="pyspark-streaming">PySpark Streaming Tutorial</h3>
                        PySpark Streaming is a scalable, high-throughput, fault-tolerant streaming processing system that supports both batch and streaming workloads. It is used to process real-time data from sources like file system folder, TCP socket, S3, Kafka, Flume, Twitter, and Amazon Kinesis to name a few. The processed data can be pushed to databases, Kafka, live dashboards e.t.c
                        <figure class="wp-block-image size-large is-resized"><img src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?resize=580%2C216&amp;ssl=1" alt="pyspark streaming tutorial" class="wp-image-7875 jetpack-lazy-image jetpack-lazy-image--handled" width="580" height="216" data-recalc-dims="1" srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?resize=1024%2C383&amp;ssl=1 1024w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?resize=300%2C112&amp;ssl=1 300w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?resize=768%2C287&amp;ssl=1 768w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?w=1172&amp;ssl=1 1172w" data-lazy-loaded="1" sizes="(max-width: 580px) 100vw, 580px" loading="eager"><noscript><img alt="pyspark streaming tutorial" width="580" height="216" data-srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?resize=1024%2C383&amp;ssl=1 1024w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?resize=300%2C112&amp;ssl=1 300w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?resize=768%2C287&amp;ssl=1 768w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?w=1172&amp;ssl=1 1172w" data-recalc-dims="1" data-src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?resize=580%2C216&#038;ssl=1" data-sizes="(max-width: 580px) 100vw, 580px" class="wp-image-7875 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?resize=580%2C216&#038;ssl=1" alt="pyspark streaming tutorial" class="wp-image-7875" width="580" height="216" srcset="https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?resize=1024%2C383&amp;ssl=1 1024w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?resize=300%2C112&amp;ssl=1 300w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?resize=768%2C287&amp;ssl=1 768w, https://i0.wp.com/sparkbyexamples.com/wp-content/uploads/2020/08/streaming-arch.png?w=1172&amp;ssl=1 1172w" sizes="(max-width: 580px) 100vw, 580px" data-recalc-dims="1" /></noscript>
                        </figure>
                        <h3 id="tcp-socket">Streaming from TCP Socket</h3>
                        Use&nbsp;<code>readStream.format("socket")</code>&nbsp;from Spark session object to read data from the socket and provide options host and port where you want to stream data from.
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
df <span class="token operator">=</span> spark<span class="token punctuation">.</span>readStream
      <span class="token punctuation">.</span>format<span class="token punctuation">(</span><span class="token string">"socket"</span><span class="token punctuation">)</span>
      <span class="token punctuation">.</span>option<span class="token punctuation">(</span><span class="token string">"host"</span><span class="token punctuation">,</span><span class="token string">"localhost"</span><span class="token punctuation">)</span>
      <span class="token punctuation">.</span>option<span class="token punctuation">(</span><span class="token string">"port"</span><span class="token punctuation">,</span><span class="token string">"9090"</span><span class="token punctuation">)</span>
      <span class="token punctuation">.</span>load<span class="token punctuation">(</span><span class="token punctuation">)</span>
</blockquote></pre>

                        </div>
                        Spark reads the data from socket and represents it in a “value” column of DataFrame.&nbsp;<code>df.printSchema()</code>&nbsp;outputs
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
root
 <span class="token operator">|</span><span class="token operator">-</span><span class="token operator">-</span> value<span class="token punctuation">:</span> string <span class="token punctuation">(</span>nullable <span class="token operator">=</span> true<span class="token punctuation">)</span>
</blockquote></pre>

                        </div>
                        After processing, you can stream the DataFrame to console. In real-time, we ideally stream it to either Kafka, database e.t.c
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
query <span class="token operator">=</span> count<span class="token punctuation">.</span>writeStream
      <span class="token punctuation">.</span>format<span class="token punctuation">(</span><span class="token string">"console"</span><span class="token punctuation">)</span>
      <span class="token punctuation">.</span>outputMode<span class="token punctuation">(</span><span class="token string">"complete"</span><span class="token punctuation">)</span>
      <span class="token punctuation">.</span>start<span class="token punctuation">(</span><span class="token punctuation">)</span>
      <span class="token punctuation">.</span>awaitTermination<span class="token punctuation">(</span><span class="token punctuation">)</span>
</blockquote></pre>

                        </div>
                        <h3 id="kafka">Streaming from Kafka</h3>
                        Using Spark Streaming we can read from Kafka topic and write to Kafka topic in TEXT, CSV, AVRO and JSON formats
                        <figure class="wp-block-image size-large"><img width="1024" height="454" src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?resize=1024%2C454&amp;ssl=1" alt="pySpark streaming kafka" class="wp-image-2226 jetpack-lazy-image jetpack-lazy-image--handled" data-recalc-dims="1" srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?resize=1024%2C454&amp;ssl=1 1024w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?resize=300%2C133&amp;ssl=1 300w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?resize=768%2C340&amp;ssl=1 768w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?w=1404&amp;ssl=1 1404w" data-lazy-loaded="1" sizes="(max-width: 1024px) 100vw, 1024px" loading="eager"><noscript><img width="1024" height="454" alt="pySpark streaming kafka" data-srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?resize=1024%2C454&amp;ssl=1 1024w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?resize=300%2C133&amp;ssl=1 300w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?resize=768%2C340&amp;ssl=1 768w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?w=1404&amp;ssl=1 1404w" data-recalc-dims="1" data-src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?resize=1024%2C454&#038;ssl=1" data-sizes="(max-width: 1024px) 100vw, 1024px" class="wp-image-2226 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="1024" height="454" src="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?resize=1024%2C454&#038;ssl=1" alt="pySpark streaming kafka" class="wp-image-2226" srcset="https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?resize=1024%2C454&amp;ssl=1 1024w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?resize=300%2C133&amp;ssl=1 300w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?resize=768%2C340&amp;ssl=1 768w, https://i2.wp.com/sparkbyexamples.com/wp-content/uploads/2019/03/spark-structured-streaming-kafka.png?w=1404&amp;ssl=1 1404w" sizes="(max-width: 1024px) 100vw, 1024px" data-recalc-dims="1" /></noscript></figure>
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
df <span class="token operator">=</span> spark<span class="token punctuation">.</span>readStream
        <span class="token punctuation">.</span>format<span class="token punctuation">(</span><span class="token string">"kafka"</span><span class="token punctuation">)</span>
        <span class="token punctuation">.</span>option<span class="token punctuation">(</span><span class="token string">"kafka.bootstrap.servers"</span><span class="token punctuation">,</span> <span class="token string">"192.168.1.100:9092"</span><span class="token punctuation">)</span>
        <span class="token punctuation">.</span>option<span class="token punctuation">(</span><span class="token string">"subscribe"</span><span class="token punctuation">,</span> <span class="token string">"json_topic"</span><span class="token punctuation">)</span>
        <span class="token punctuation">.</span>option<span class="token punctuation">(</span><span class="token string">"startingOffsets"</span><span class="token punctuation">,</span> <span class="token string">"earliest"</span><span class="token punctuation">)</span> <span class="token operator">//</span> From starting
        <span class="token punctuation">.</span>load<span class="token punctuation">(</span><span class="token punctuation">)</span>
</blockquote></pre>

                        </div>
                        Below pyspark example, writes message to another topic in Kafka using <code>writeStream()</code>
                        <div class="code-toolbar">
                            <pre class="language-python" tabindex="0"><blockquote class="language-python">
df<span class="token punctuation">.</span>selectExpr<span class="token punctuation">(</span><span class="token string">"CAST(id AS STRING) AS key"</span><span class="token punctuation">,</span> <span class="token string">"to_json(struct(*)) AS value"</span><span class="token punctuation">)</span>
   <span class="token punctuation">.</span>writeStream
   <span class="token punctuation">.</span>format<span class="token punctuation">(</span><span class="token string">"kafka"</span><span class="token punctuation">)</span>
   <span class="token punctuation">.</span>outputMode<span class="token punctuation">(</span><span class="token string">"append"</span><span class="token punctuation">)</span>
   <span class="token punctuation">.</span>option<span class="token punctuation">(</span><span class="token string">"kafka.bootstrap.servers"</span><span class="token punctuation">,</span> <span class="token string">"192.168.1.100:9092"</span><span class="token punctuation">)</span>
   <span class="token punctuation">.</span>option<span class="token punctuation">(</span><span class="token string">"topic"</span><span class="token punctuation">,</span> <span class="token string">"josn_data_topic"</span><span class="token punctuation">)</span>
   <span class="token punctuation">.</span>start<span class="token punctuation">(</span><span class="token punctuation">)</span>
   <span class="token punctuation">.</span>awaitTermination<span class="token punctuation">(</span><span class="token punctuation">)</span>
</blockquote></pre>

                        </div>
                        <h3>PySpark MLlib</h3>
                        In this section, I will cover pyspark examples by using MLlib library.
                        <h3 id="pyspark-graphframes">PySpark GraphFrames</h3>
                        PySpark GraphFrames are introduced in Spark 3.0 version to support Graphs on DataFrame’s. Prior to 3.0, Spark has GraphX library which ideally runs on RDD and loses all Data Frame capabilities.
                        <figure class="wp-block-pullquote">
                            <blockquote>
                                GraphFrames is a package for Apache Spark which provides DataFrame-based Graphs. It provides high-level APIs in Scala, Java, and Python. It aims to provide both the functionality of GraphX and extended functionality taking advantage of Spark DataFrames. This extended functionality includes motif finding, DataFrame-based serialization, and highly expressive graph queries.
                            </blockquote>
                        </figure>
                        <h3 id="graphx-graphframes">Difference between GraphX and GraphFrame</h3>
                        GraphX works on RDDs where as GraphFrames works with DataFrames.

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