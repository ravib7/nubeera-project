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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Creating a Synapse workspace</h2>
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
                        <li><a href="#Create a pipeline and add a notebook activity">Create a pipeline and add a notebook activity</a></li>
                        <li><a href="#Schedule the pipeline to run every hour">Schedule the pipeline to run every hour</a></li>
                        <li><a href="#Forcing a pipeline to run immediately">Forcing a pipeline to run immediately</a></li>
                        <li><a href="#Monitor pipeline execution">Monitor pipeline execution</a></li>
                    </ul>
                    <!-- <content> -->
                    In this tutorial, you'll learn how to integrate pipelines and activities using Synapse Studio.
                    <h3 id="Create a pipeline and add a notebook activity" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Create a pipeline and add a notebook activity" aria-labelledby="Create a pipeline and add a notebook activity"></a>Create a pipeline and add a notebook activity</h3>
                    <ol>
                        <li>In Synapse Studio, go to the <strong>Integrate</strong> hub.</li>
                        <li>Select + > <strong>Pipeline</strong> to create a new pipeline. Click on the new pipeline object to open the Pipeline designer.</li>
                        <li>Under <strong>Activities</strong>, expand the <strong>Synapse</strong> folder, and drag a <strong>Notebook</strong> object into the designer.</li>
                        <li>Select the <strong>Settings</strong> tab of the Notebook activity properties. Use the drop-down list to select a notebook from your current Synapse workspace.</li>
                    </ol>

                    <h3 id="Schedule the pipeline to run every hour" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Schedule the pipeline to run every hour" aria-labelledby="Schedule the pipeline to run every hour"></a>Schedule the pipeline to run every hour</h3>
                    <ol>
                        <li>In the pipeline, select <strong>Add trigger</strong> > <strong>New/edit</strong>.</li>
                        <li>In <strong>Choose trigger</strong>, select <strong>New</strong>, and set the <strong>Recurrence</strong> to "every 1 hour".</li>
                        <li>Select <strong>OK</strong></li>
                        <li>Select <strong>Publish All</strong>.</li>
                    </ol>

                    <h3 id="Forcing a pipeline to run immediately" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Forcing a pipeline to run immediately" aria-labelledby="Forcing a pipeline to run immediately"></a>Forcing a pipeline to run immediately</h3>
                    Once the pipeline is published, you may want to run it immediately without waiting for an hour to pass.
                    <ol>
                        <li>Open the pipeline.</li>
                        <li>Click <strong>Add trigger</strong> > <strong>Trigger now</strong>.</li>
                        <li>Select <strong>OK</strong>.</li>
                    </ol>

                    <h3 id="Monitor pipeline execution" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Monitor pipeline execution" aria-labelledby="Monitor pipeline execution"></a>Monitor pipeline execution</h3>
                    <ol>
                        <li>Go to the Monitor hub.</li>
                        <li>Select Pipeline runs to monitor pipeline execution progress.</li>
                        <li>In this view you can switch between tabular List display a graphical Gantt chart.</li>
                        <li>Click on a pipeline name to see the status of activities in that pipeline.</li>
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