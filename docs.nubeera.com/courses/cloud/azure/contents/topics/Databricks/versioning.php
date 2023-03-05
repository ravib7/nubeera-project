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

    <link id="theme-style" rel="stylesheet" href="../../../../../../assets/css/theme.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Azure Databricks</strong><br><br>
                <ul>
                    <li><a href="index.php">What is Azure Databricks?</a></li>
                    <li><a href="databricks-workspace-portal.php">Quickstart: Run a Spark job on Azure Databricks Workspace using the Azure portal</a></li>
                    <li><a href="databricks-extract-load-sql-datawarehouse.php">Tutorial: Extract, transform, and load data by using Azure Databricks</a></li>
                    <li><a href="versioning.php">Table versioning</a></li>
                    <li> <a href="azure_databricks_architecture_overview.php">Azure Databricks Architecture Overview</a></li>
                    <li><a href="databricks_datascience_and_engineering.php">Databricks Data Science & Engineering Concepts</a></li>
                    <li><a href="cluster_configuration.php"> Cluster Configuration</li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Azure Databricks</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
            <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Databricks</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <nav id="center-doc-outline" class="doc-outline is-hidden-desktop" data-bi-name="intopic toc" role="navigation" aria-label="Article Outline">
                    <h2>Table versioning</h2>
                    <h3>In this article</h3>
                    <ol>
                        <li><a href="#python">Python</a></li>
                        <li><a href="#scala">Scala</a></li>
                    </ol>
                </nav>
                <!-- <content> -->
                The transaction log for a Delta table contains versioning information that supports Delta Lake evolution. Delta Lake tracks minimum reader and writer versions separately.<br><br>
                Delta Lake guarantees <em>backward compatibility</em>. A higher version of Databricks Runtime is always able to read data that was written by a lower version.<br><br>
                Delta Lake will occasionally break <em>forward compatibility</em>. Lower versions of Databricks Runtime may not be able to read and write data that was written by a higher version of Databricks Runtime. If you try to read and write to a table with a version of Databricks Runtime that is too low, you’ll get an error telling you that you need to upgrade.<br><br>
                When creating a table, Delta Lake chooses the minimum required protocol version based on table characteristics such as the schema or table properties. You can also set the default protocol versions by setting the SQL configurations:<br><br>
                <ul>
                    <li><code>spark.databricks.delta.properties.defaults.minWriterVersion = 2</code> (default)</li>
                    <li><code>spark.databricks.delta.properties.defaults.minReaderVersion = 1</code> (default)</li>
                </ul>
                To upgrade a table to a newer protocol version, use the <code>DeltaTable.upgradeTableProtocol</code> method:
                <h3 id="python" class="heading-anchor"><a class="anchor-link docon docon-link" href="#python" aria-labelledby="python"></a>Python</h3>
                <div class="codeHeader code-title" id="code-try-0" data-bi-name="code-header">
                    <span class="language">Python</span>
                </div>
                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-python" data-author-content="from delta.tables import DeltaTable
delta = DeltaTable.forPath(spark, &quot;path_to_table&quot;) # or DeltaTable.forName
delta.upgradeTableProtocol(1, 3) # upgrades to readerVersion=1, writerVersion=3
"><span><span class="hljs-keyword">from</span> delta.tables <span class="hljs-keyword">import</span> DeltaTable
delta = DeltaTable.forPath(spark, <span class="hljs-string">"path_to_table"</span>) <span class="hljs-comment"># or DeltaTable.forName</span>
delta.upgradeTableProtocol(<span class="hljs-number">1</span>, <span class="hljs-number">3</span>) <span class="hljs-comment"># upgrades to readerVersion=1, writerVersion=3</span>
</span></blockquote></pre>

                <h3 id="scala" class="heading-anchor"><a class="anchor-link docon docon-link" href="#scala" aria-labelledby="scala"></a>Scala</h3>
                <div class="codeHeader code-title" id="code-try-1" data-bi-name="code-header">
                    <span class="language">Scala</span>
                </div>
                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-scala" data-author-content="import io.delta.tables.DeltaTable
val delta = DeltaTable.forPath(spark, &quot;path_to_table&quot;) // or DeltaTable.forName
delta.upgradeTableProtocol(1, 3) // upgrades to readerVersion=1, writerVersion=3
"><span><span class="hljs-keyword">import</span> io.delta.tables.<span class="hljs-type">DeltaTable</span>
<span class="hljs-keyword">val</span> delta = <span class="hljs-type">DeltaTable</span>.forPath(spark, <span class="hljs-string">"path_to_table"</span>) <span class="hljs-comment">// or DeltaTable.forName</span>
delta.upgradeTableProtocol(<span class="hljs-number">1</span>, <span class="hljs-number">3</span>) <span class="hljs-comment">// upgrades to readerVersion=1, writerVersion=3</span>
</span></blockquote></pre>
                <div class="alert is-primary">
                    <span class="docon docon-status-info-outline" aria-hidden="true"></span> Important
                    Protocol upgrades are irreversible, therefore we recommend you upgrade specific tables only when needed, such as to opt-in to new features in Delta Lake.
                </div>
                </main>
            </div>
        </div>
        <?php require "../../../../../../templates/footer_outer.php" ?>
    </div>

    <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
    <!-- <script defer src="../../assets/fontawesome/js/all.min.js"></script> -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script defer src="../../../../../../assets/fontawesome/js/all.min.js"></script> <!-- footer social icons -->
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