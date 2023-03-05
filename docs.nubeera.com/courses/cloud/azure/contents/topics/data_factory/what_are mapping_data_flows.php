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

                <h3 id="mapping-data-flows-in-azure-data-factory">Mapping data flows in Azure Data Factory</h3>

                <nav id="center-doc-outline" class="doc-outline is-hidden-desktop" data-bi-name="intopic toc" role="navigation" aria-label="Article Outline">
                    <h3>In this article</h3>
                    <ol>
                        <li><a href="#what-are-mapping-data-flows">What are mapping data flows?</a></li>
                        <li><a href="#getting-started">Getting started</a></li>
                        <li><a href="#authoring-data-flows">Authoring data flows</a></li>
                        <li><a href="#available-transformations">Available transformations</a></li>
                        <li><a href="#data-flow-data-types">Data flow data types</a></li>
                        <li><a href="#data-flow-activity">Data flow activity</a></li>
                        <li><a href="#debug-mode">Debug mode</a></li>
                        <li><a href="#monitoring-data-flows">Monitoring data flows</a></li>
                        <li><a href="#available-regions">Available regions</a></li>
                        <li><a href="#next-steps">Next steps</a></li>
                    </ol>
                </nav>



                <!-- <content> -->
                <strong>APPLIES TO:</strong>
                Azure Data Factory and
                Azure Synapse Analytics
                <h2 id="what-are-mapping-data-flows" class="heading-anchor"><a class="anchor-link docon docon-link" href="#what-are-mapping-data-flows" aria-labelledby="what-are-mapping-data-flows"></a>What are mapping data flows?</h2>
                Mapping data flows are visually designed data transformations in Azure Data Factory. Data flows allow data engineers to develop data transformation logic without writing code. The resulting data flows are executed as activities within Azure Data Factory pipelines that use scaled-out Apache Spark clusters. Data flow activities can be operationalized using existing Azure Data Factory scheduling, control, flow, and monitoring capabilities.<br><br>
                Mapping data flows provide an entirely visual experience with no coding required. Your data flows run on ADF-managed execution clusters for scaled-out data processing. Azure Data Factory handles all the code translation, path optimization, and execution of your data flow jobs.
                <h2 id="getting-started" class="heading-anchor"><a class="anchor-link docon docon-link" href="#getting-started" aria-labelledby="getting-started"></a>Getting started</h2>
                Data flows are created from the factory resources pane like pipelines and datasets. To create a data flow, select the plus sign next to <strong>Factory Resources</strong>, and then select <strong>Data Flow</strong>.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/new-data-flow.png" alt="New data flow" data-linktype="relative-path"><br><br>
                </span>

                This action takes you to the data flow canvas, where you can create your transformation logic. Select <strong>Add source</strong> to start configuring your source transformation.
                <h2 id="authoring-data-flows" class="heading-anchor"><a class="anchor-link docon docon-link" href="#authoring-data-flows" aria-labelledby="authoring-data-flows"></a>Authoring data flows</h2>
                Mapping data flow has a unique authoring canvas designed to make building transformation logic easy. The data flow canvas is separated into three parts: the top bar, the graph, and the configuration panel.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/canvas-1.png" alt="Screenshot shows the data flow canvas with top bar, graph, and configuration panel labeled." data-linktype="relative-path"><br><br>
                </span>

                <h3 id="graph" class="heading-anchor"><a class="anchor-link docon docon-link" href="#graph" aria-labelledby="graph"></a>Graph</h3>
                The graph displays the transformation stream. It shows the lineage of source data as it flows into one or more sinks. To add a new source, select <strong>Add source</strong>. To add a new transformation, select the plus sign on the lower right of an existing transformation.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/canvas-2.png" alt="Screenshot shows the graph part of the canvas with a Search text box." data-linktype="relative-path"><br><br>
                </span>

                <h3 id="configuration-panel" class="heading-anchor"><a class="anchor-link docon docon-link" href="#configuration-panel" aria-labelledby="configuration-panel"></a>Configuration panel</h3>
                The configuration panel shows the settings specific to the currently selected transformation. If no transformation is selected, it shows the data flow. In the overall data flow configuration, you can add parameters via the <strong>Parameters</strong> tab.
                Each transformation contains at least four configuration tabs.
                <h4 id="transformation-settings" class="heading-anchor"><a class="anchor-link docon docon-link" href="#transformation-settings" aria-labelledby="transformation-settings"></a>Transformation settings</h4>
                The first tab in each transformation's configuration pane contains the settings specific to that transformation. For more information, see that transformation's documentation page.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/source1.png" alt="Source settings tab" data-linktype="relative-path"><br><br>
                </span>

                <h4 id="optimize" class="heading-anchor"><a class="anchor-link docon docon-link" href="#optimize" aria-labelledby="optimize"></a>Optimize</h4>
                The <strong>Optimize</strong> tab contains settings to configure partitioning schemes.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/optimize.png" alt="Screenshot shows the Optimize tab, which includes Partition option, Partition type, and Number of partitions." data-linktype="relative-path"><br><br>
                </span>

                <h4 id="inspect" class="heading-anchor"><a class="anchor-link docon docon-link" href="#inspect" aria-labelledby="inspect"></a>Inspect</h4>
                The <strong>Inspect</strong> tab provides a view into the metadata of the data stream that you're transforming. You can see column counts, the columns changed, the columns added, data types, the column order, and column references. <strong>Inspect</strong> is a read-only view of your metadata. You don't need to have debug mode enabled to see metadata in the <strong>Inspect</strong> pane.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/inspect1.png" alt="Inspect" data-linktype="relative-path"><br><br>
                </span>

                As you change the shape of your data through transformations, you'll see the metadata changes flow in the <strong>Inspect</strong> pane. If there isn't a defined schema in your source transformation, then metadata won't be visible in the <strong>Inspect</strong> pane. Lack of metadata is common in schema drift scenarios.
                <h4 id="data-preview" class="heading-anchor"><a class="anchor-link docon docon-link" href="#data-preview" aria-labelledby="data-preview"></a>Data preview</h4>
                If debug mode is on, the <strong>Data Preview</strong> tab gives you an interactive snapshot of the data at each transform.
                <h3 id="top-bar" class="heading-anchor"><a class="anchor-link docon docon-link" href="#top-bar" aria-labelledby="top-bar"></a>Top bar</h3>
                The top bar contains actions that affect the whole data flow, like saving and validation. You can view the underlying JSON code and data flow script of your transformation logic as well.
                <h2 id="data-flow-data-types" class="heading-anchor"><a class="anchor-link docon docon-link" href="#data-flow-data-types" aria-labelledby="data-flow-data-types"></a>Data flow data types</h2>
                <ul>
                    <li>array</li>
                    <li>binary</li>
                    <li>boolean</li>
                    <li>complex</li>
                    <li>decimal (includes precision)</li>
                    <li>date</li>
                    <li>float</li>
                    <li>integer</li>
                    <li>long</li>
                    <li>map</li>
                    <li>short</li>
                    <li>string</li>
                    <li>timestamp</li>
                </ul>
                <h2 id="data-flow-activity" class="heading-anchor"><a class="anchor-link docon docon-link" href="#data-flow-activity" aria-labelledby="data-flow-activity"></a>Data flow activity</h2>
                Mapping data flows are operationalized within ADF pipelines using the data flow activity. All a user has to do is specify which integration runtime to use and pass in parameter values.
                <h2 id="debug-mode" class="heading-anchor"><a class="anchor-link docon docon-link" href="#debug-mode" aria-labelledby="debug-mode"></a>Debug mode</h2>
                Debug mode allows you to interactively see the results of each transformation step while you build and debug your data flows. The debug session can be used both in when building your data flow logic and running pipeline debug runs with data flow activities.
                <h2 id="monitoring-data-flows" class="heading-anchor"><a class="anchor-link docon docon-link" href="#monitoring-data-flows" aria-labelledby="monitoring-data-flows"></a>Monitoring data flows</h2>
                Mapping data flow integrates with existing Azure Data Factory monitoring capabilities.
                The Azure Data Factory team has created a performance tuning guide to help you optimize the execution time of your data flows after building your business logic.
                <h2 id="available-regions" class="heading-anchor"><a class="anchor-link docon docon-link" href="#available-regions" aria-labelledby="available-regions"></a>Available regions</h2>
                Mapping data flows are available in the following regions in ADF:
                <div class="table-scroll-wrapper has-inner-focus" tabindex="0" role="group" aria-label="Horizontally scrollable data">
                    <table class="table">
                        <caption class="visually-hidden">Available regions</caption>
                        <thead>
                            <tr>
                                <th>Azure region</th>
                                <th>Data flows in ADF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Australia Central</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>Australia Central 2</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>Australia East</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Australia Southeast</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Brazil South</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Canada Central</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Central India</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Central US</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>China East</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>China East 2</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>China Non-Regional</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>China North</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>China North 2</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>East Asia</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>East US</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>East US 2</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>France Central</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>France South</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>Germany Central (Sovereign)</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>Germany Non-Regional (Sovereign)</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>Germany North (Public)</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>Germany Northeast (Sovereign)</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>Germany West Central (Public)</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>Japan East</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Japan West</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>Korea Central</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Korea South</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>North Central US</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>North Europe</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Norway East</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Norway West</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>South Africa North</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>South Africa West</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>South Central US</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>South India</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>Southeast Asia</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Switzerland North</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Switzerland West</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>UAE Central</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>UAE North</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>UK South</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>UK West</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>US DoD Central</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>US DoD East</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>US Gov Arizona</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>US Gov Non-Regional</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>US Gov Texas</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>US Gov Virginia</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>West Central US</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>West Europe</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>West India</td>
                                <td aria-label="No value"></td>
                            </tr>
                            <tr>
                                <td>West US</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>West US 2</td>
                                <td>✓</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

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