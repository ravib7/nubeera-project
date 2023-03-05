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
                <strong class="px-2" style="font-size: 1.125rem;">Synapse Analytics</strong><br><br>
                <ul>
                    <li><a href="index.php">What is Azure Synapse Analytics?</a></li>
                    <li><a href="create_workspace.php">creating a synapse workspace</a></li>
                    <li><a href="analyze_sql_on_demand.php">Analyze data with a serverless SQL pool</a></li>
                    <li><a href="analyze_data_explorer.php">Quickstart: Analyze with Data Explorer (Preview)</a></li>
                    <li><a href="analyze_spark.php">Analyze with Apache Spark</a></li>
                    <li><a href="analyze_sql_pool.php">Analyze data with dedicated SQL pools</a></li>
                    <li><a href="analyze_storage.php">Analyze data in a storage account</a></li>
                    <li><a href="pipelines.php">Integrate with pipelines</a></li>
                    <li><a href="visualize_power_bi.php">Visualize data with Power BI</a></li>
                    <li><a href="monitor.php">Monitor your Synapse Workspace</a></li>
                    <li><a href="knowledge_center.php">Explore the Synapse Knowledge center</a></li>
                    <li><a href="add_admin.php">Add an administrator to your Synapse workspace</a></li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Monitor your Synapse Workspace</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                    <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                    <li class="breadcrumb-item active">Synapse Analytics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <h3>In this article</h3>
                    <ul>
                        <li><a href="#Introduction to the Monitor Hub">Introduction to the Monitor Hub</a></li>
                        <li><a href="#Integration">Integration</a></li>
                        <li><a href="#Data Explorer activities">Data Explorer activities</a></li>
                        <li><a href="#Apache Spark activities">Apache Spark activities</a></li>
                        <li><a href="#SQL activities">SQL activities</a></li>
                    </ul>
                    <!-- <content> -->
                    In this tutorial, you'll learn how to monitor activities in your Synapse workspace. You can monitor current and historical activities for SQL, Apache Spark, and Pipelines.
                    <h3 id="Introduction to the Monitor Hub" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Introduction to the Monitor Hub" aria-labelledby="Introduction to the Monitor Hub"></a>Introduction to the Monitor Hub</h3>
                    Open Synapse Studio and navigate to the <strong>Monitor</strong> hub. Here, you can see a history of all the activities taking place in the workspace and which ones are active now.
                    <ul>
                        <li>Under <strong>Integration</strong>, you can monitor pipelines, triggers, and integration runtimes.</li>
                        <li>Under <strong>Activities</strong>, you can monitor Spark and SQL activities.</li>
                    </ul>
                    <h3 id="Integration" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Integration" aria-labelledby="Integration"></a>Integration</h3>
                    <ol>
                        <li>Navigate to <strong>Integration &gt; Pipeline runs</strong>. In this view, you can see every time a pipeline has run in your workspace.</li>
                        <li>Find the pipeline that you ran in the previous step and click on its <strong>Pipeline name</strong> to view the details.</li>
                        <li>Click <strong>Breadcrumb bar</strong> near the top of Synapse Studio, click <strong>All pipeline runs</strong> to return to the previous view.</li>
                    </ol>

                    <h3 id="Data Explorer activities" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Data Explorer activities" aria-labelledby="Data Explorer activities"></a>Data Explorer activities</h3>
                    <ol>
                        <li>Navigate to <strong>Activities &gt; KQL requests</strong>.</li>
                        <li>In this view you can see KQL requests.</li>
                        <li>Select a <strong>Pool</strong> to monitor from the <strong>Pool</strong> filter. Now you can see all KQL requests that are running or have run in your workspace in that pool.</li>
                        <li>Find a specific KQL request and click on the <strong>More</strong> link to see the full text of the KQL request.</li>
                    </ol>
                    <h3 id="Apache Spark activities" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Apache Spark activities" aria-labelledby="Apache Spark activities"></a>Apache Spark activities</h3>
                    <ol>
                        <li>Navigate to <strong>Activities &gt; Apache Spark applications</strong>. Now you can see all the Spark applications that are running or have run in your workspace.</li>
                        <li>Find an application that is no longer running and click on its <strong>Application name</strong>. Now you can see the details of the spark application.</li>
                        <li>If you are familiar with Apache Spark, you can find the standard Apache Spark history server UI by clicking on <strong>Spark history server</strong>.</li>
                    </ol>
                    <h3 id="SQL activities" class="heading-anchor"><a class="anchor-link docon docon-link" href="#SQL activities" aria-labelledby="SQL activities"></a>SQL activities</h3>
                    <ol>
                        <li>Navigate to <strong>Activities &gt; SQL requests</strong>.
                        </li>
                        <li>In this view you can see SQL requests.
                        </li>
                        <li>Select a <strong>Pool</strong> to monitor from the <strong>Pool</strong> filter. Now you can see all SQL requests that are running or have run in your workspace in that pool.
                        </li>
                        <li>Find a specific SQL request and click on the <strong>More</strong> link to see the full text of the SQL request.
                            <div class="alert is-info">
                                <strong>Note</strong>:
                                SQL requests submitted via the Synapse Studio in a workspace enabled dedicated SQL pool (formerly SQL DW) can be viewed in the Monitor hub. For all other monitoring activities, you can go to Azure portal dedicated SQL pool (formerly SQL DW) monitoring.
                            </div>
                        </li>
                    </ol>
                </div>
        </div>
        <?php require "../../../../../../templates/footer_outer.php" ?>

    </div>

    <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script defer src="../../../../../../assets/fontawesome/js/all.min.js"></script><!-- footer social icons -->
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