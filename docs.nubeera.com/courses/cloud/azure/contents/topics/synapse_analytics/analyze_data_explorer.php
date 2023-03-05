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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Quickstart: Analyze with Data Explorer</h2>
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
                        <li><a href="#Create a Data Explorer pool">Create a Data Explorer pool</a></li>
                        <li><a href="#Create a Data Explorer database">Create a Data Explorer database</a></li>
                        <li><a href="#Ingest sample data and analyze with a simple query">Ingest sample data and analyze with a simple query</a></li>

                    </ul>
                    <!-- <content> -->
                    In this article, you'll learn the basic steps to load and analyze data with Data Explorer for Azure Synapse.
                    <h3 id="Create a Data Explorer pool" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Create a Data Explorer pool" aria-labelledby="Create a Data Explorer pool"></a>Create a Data Explorer pool</h3>
                    <ol>
                        <li>In Synapse Studio, on the left-side pane, select <strong>Manage</strong> &gt; <strong>Data Explorer pools</strong>.
                        </li>
                        <li>Select <strong>New</strong>, and then enter the following details on the <strong>Basics</strong> tab:
                            <div class="table-scroll-wrapper has-inner-focus" tabindex="0" role="group" aria-label="Horizontally scrollable data">
                                <table class="table">
                                    <caption class="visually-hidden">Table 1</caption>
                                    <thead>
                                        <tr>
                                            <th>Setting</th>
                                            <th>Suggested value</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Data Explorer pool name</td>
                                            <td>contosodataexplorer</td>
                                            <td>This is the name that the Data Explorer pool will have.</td>
                                        </tr>
                                        <tr>
                                            <td>Workload</td>
                                            <td>Compute optimized</td>
                                            <td>This workload provides a higher CPU to SSD storage ratio.</td>
                                        </tr>
                                        <tr>
                                            <td>Node size</td>
                                            <td>Small (4 cores)</td>
                                            <td>Set this to the smallest size to reduce costs for this quickstart</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="alert is-primary">
                                <span class="docon docon-status-info-outline" aria-hidden="true"></span> <strong>Important</strong>:
                                Note that there are specific limitations for the names that Data Explorer pools can use. Names must contain lowercase letters and numbers only, must be between 4 and 15 characters, and must start with a letter.
                            </div>
                        </li>
                        <li>Select <strong>Review + create</strong> &gt; <strong>Create</strong>. Your Data Explorer pool will start the provisioning process.
                        </li>
                    </ol>

                    <h3 id="Create a Data Explorer database" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Create a Data Explorer database" aria-labelledby="Create a Data Explorer database"></a>Create a Synapse workspace in the Azure portal</h3>
                    <div class="table-scroll-wrapper has-inner-focus" tabindex="0" role="group" aria-label="Horizontally scrollable data">
                        <table class="table">
                            <caption class="visually-hidden">Table 2</caption>
                            <thead>
                                <tr>
                                    <th>Setting</th>
                                    <th>Suggested value</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Pool name</td>
                                    <td><em>contosodataexplorer</em></td>
                                    <td>The name of the Data Explorer pool to use</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><em>TestDatabase</em></td>
                                    <td>The database name must be unique within the cluster.</td>
                                </tr>
                                <tr>
                                    <td>Default retention period</td>
                                    <td><em>365</em></td>
                                    <td>The time span (in days) for which it's guaranteed that the data is kept available to query. The time span is measured from the time that data is ingested.</td>
                                </tr>
                                <tr>
                                    <td>Default cache period</td>
                                    <td><em>31</em></td>
                                    <td>The time span (in days) for which to keep frequently queried data available in SSD storage or RAM, rather than in longer-term storage.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3 id="Ingest sample data and analyze with a simple query" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Ingest sample data and analyze with a simple query" aria-labelledby="Ingest sample data and analyze with a simple query"></a>Ingest sample data and analyze with a simple query</h3>
                    <ol>
                        <li>In Synapse Studio, on the left-side pane, select <strong>Develop</strong>.
                        </li>
                        <li>Under <strong>KQL scripts</strong>, Select <strong>+</strong> (Add new resource) &gt; <strong>KQL script</strong>. On the right-side pane, you can name your script.
                        </li>
                        <li>In the <strong>Connect to</strong> menu, select <em>contosodataexplorer</em>.
                        </li>
                        <li>In the <strong>Use database</strong> menu, select <em>TestDatabase</em>.
                        </li>
                        <li>Paste in the following command, and select <strong>Run</strong> to create a StormEvents table.
                                <pre>
.create table StormEvents (StartTime: datetime, EndTime: datetime, EpisodeId: int, EventId: int, State: string, EventType: string, InjuriesDirect: int, InjuriesIndirect: int, DeathsDirect: int, DeathsIndirect: int, DamageProperty: int, DamageCrops: int, Source: string, BeginLocation: string, EndLocation: string, BeginLat: real, BeginLon: real, EndLat: real, EndLon: real, EpisodeNarrative: string, EventNarrative: string, StormSummary: dynamic)
</pre>
                            <div class="alert is-success">
                                <span class="docon docon-lightbulb" aria-hidden="true"></span> <strong>Tip</strong>:
                                Verify that the table was successfully created. On the left-side pane, select <strong>Data</strong>, select the <em>contosodataexplorer</em> more menu, and then select <strong>Refresh</strong>. Under <em>contosodataexplorer</em>, expand <strong>Tables</strong> and make sure that the <em>StormEvents</em> table appears in the list.
                            </div>
                        </li>
                        <li>Paste in the following command, and select <strong>Run</strong> to ingest data into StormEvents table.
                                <pre>.ingest into table StormEvents 'https://kustosamplefiles.blob.core.windows.net/samplefiles/StormEvents.csv?sv=2019-12-12&ss=b&srt=o&sp=r&se=2022-09-05T02:23:52Z&st=2020-09-04T18:23:52Z&spr=https&sig=VrOfQMT1gUrHltJ8uhjYcCequEcfhjyyMX%2FSc3xsCy4%3D' with (ignoreFirstRecord=true)
</pre>
                        </li>
                        <li>After ingestion completes, paste in the following query, select the query in the window, and select <strong>Run</strong>.
                                <pre>
StormEvents
| sort by StartTime desc
| take 10
                                 </pre>
                            The query returns the following results from the ingested sample data.
                                <br><br><img src="https://docs.microsoft.com/en-in/azure/synapse-analytics/data-explorer/media/get-started-analyze-data-explorer/sample-query-results.png" alt="Results for query run on sample data" data-linktype="relative-path"><br><br>
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