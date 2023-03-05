<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Data Factory in Azure</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Data Factory in Azure">

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
                <strong class="px-2" style="font-size: 1.125rem;">Data Factory</strong><br><br>
                <ul>
                    <li><a href="index.php">tutorial copy data tool</a></li>
                    <li><a href="introduction.php">Introduction</a></li>
                    <li><a href="tutorial_bulk_copy_portal.php">tutorial bulk copy portal</a></li>
                    <li><a href="what_are mapping_data_flows.php">what are mapping data flows</a></li>
                    <li><a href="build_expressions_in_mapping_data_flow.php">build expressions in mapping data flow</a></li>
                    <li><a href="mapping_data_flow_transformation_overview.php">mapping data flow transformation overview</a></li>
                    <li><a href="transform_data_using_mapping_data_flows.php">transform data using mapping data flows</a></li>
                </ul>
            </div>
        </div>
    </div>

    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Azure Data Factory</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Data Factory</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                <h2 id="mapping-data-flow-transformation-overview">Mapping data flow transformation overview</h2>

                <strong>APPLIES TO:</strong>
                Azure Data Factory and
                Azure Synapse Analytics <br><br>
                Data flows are available both in Azure Data Factory and Azure Synapse Pipelines. This article applies to mapping data flows. If you are new to transformations, please refer to the introductory article <a href="transform_data_using_mapping_data_flows.php" data-linktype="relative-path">Transform data using a mapping data flow</a>.
                Below is a list of the transformations currently supported in mapping data flow. Click on each transformations to learn its configuration details.<br><br>
                <div class="table-scroll-wrapper has-inner-focus" tabindex="0" role="group" aria-label="Horizontally scrollable data">
                    <table class="table">
                        <caption class="visually-hidden">Table 1</caption>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Aggregate</td>
                                <td>Schema modifier</td>
                                <td>Define different types of aggregations such as SUM, MIN, MAX, and COUNT grouped by existing or computed columns.</td>
                            </tr>
                            <tr>
                                <td>Alter row</td>
                                <td>Row modifier</td>
                                <td>Set insert, delete, update, and upsert policies on rows.</td>
                            </tr>
                            <tr>
                                <td>Assert</td>
                                <td>Row modifier</td>
                                <td>Set assert rules for each row.</td>
                            </tr>
                            <tr>
                                <td>Conditional split</td>
                                <td>Multiple inputs/outputs</td>
                                <td>Route rows of data to different streams based on matching conditions.</td>
                            </tr>
                            <tr>
                                <td>Derived column</td>
                                <td>Schema modifier</td>
                                <td>Generate new columns or modify existing fields using the data flow expression language.</td>
                            </tr>
                            <tr>
                                <td>External call</td>
                                <td>Schema modifier</td>
                                <td>Call external endpoints inline row-by-row.</td>
                            </tr>
                            <tr>
                                <td>Exists</td>
                                <td>Multiple inputs/outputs</td>
                                <td>Check whether your data exists in another source or stream.</td>
                            </tr>
                            <tr>
                                <td>Filter</td>
                                <td>Row modifier</td>
                                <td>Filter a row based upon a condition.</td>
                            </tr>
                            <tr>
                                <td>Flatten</td>
                                <td>Formatters</td>
                                <td>Take array values inside hierarchical structures such as JSON and unroll them into individual rows.</td>
                            </tr>
                            <tr>
                                <td>Join</td>
                                <td>Multiple inputs/outputs</td>
                                <td>Combine data from two sources or streams.</td>
                            </tr>
                            <tr>
                                <td>Lookup</td>
                                <td>Multiple inputs/outputs</td>
                                <td>Reference data from another source.</td>
                            </tr>
                            <tr>
                                <td>New branch</td>
                                <td>Multiple inputs/outputs</td>
                                <td>Apply multiple sets of operations and transformations against the same data stream.</td>
                            </tr>
                            <tr>
                                <td>Parse</td>
                                <td>Formatters</td>
                                <td>Parse text columns in your data stream that are strings of JSON, delimited text, or XML formatted text.</td>
                            </tr>
                            <tr>
                                <td>Pivot</td>
                                <td>Schema modifier</td>
                                <td>An aggregation where one or more grouping columns has its distinct row values transformed into individual columns.</td>
                            </tr>
                            <tr>
                                <td>Rank</td>
                                <td>Schema modifier</td>
                                <td>Generate an ordered ranking based upon sort conditions</td>
                            </tr>
                            <tr>
                                <td>Select</td>
                                <td>Schema modifier</td>
                                <td>Alias columns and stream names, and drop or reorder columns</td>
                            </tr>
                            <tr>
                                <td>Sink</td>
                                <td>-</td>
                                <td>A final destination for your data</td>
                            </tr>
                            <tr>
                                <td>Sort</td>
                                <td>Row modifier</td>
                                <td>Sort incoming rows on the current data stream</td>
                            </tr>
                            <tr>
                                <td>Source</td>
                                <td>-</td>
                                <td>A data source for the data flow</td>
                            </tr>
                            <tr>
                                <td>Stringify</td>
                                <td>Formatters</td>
                                <td>Turn complex types into plain strings</td>
                            </tr>
                            <tr>
                                <td>Surrogate key</td>
                                <td>Schema modifier</td>
                                <td>Add an incrementing non-business arbitrary key value</td>
                            </tr>
                            <tr>
                                <td>Union</td>
                                <td>Multiple inputs/outputs</td>
                                <td>Combine multiple data streams vertically</td>
                            </tr>
                            <tr>
                                <td>Unpivot</td>
                                <td>Schema modifier</td>
                                <td>Pivot columns into row values</td>
                            </tr>
                            <tr>
                                <td>Window</td>
                                <td>Schema modifier</td>
                                <td>Define window-based aggregations of columns in your data streams.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- </content> -->

                </main>

                <!-- fallback rating section for reference only, remove after a week or so -->
                <!-- end page rating section -->



                <!-- recommendations section -->

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