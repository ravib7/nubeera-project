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

                <h2 id="transform-data-using-mapping-data-flows">Transform data using mapping data flows</h2>

                <nav id="center-doc-outline" class="doc-outline is-hidden-desktop" data-bi-name="intopic toc" role="navigation" aria-label="Article Outline">
                    <h3>In this article</h3>
                    <ol>
                        <li><a href="#prerequisites">Prerequisites</a></li>
                        <li><a href="#create-a-data-factory">Create a data factory</a></li>
                        <li><a href="#create-a-pipeline-with-a-data-flow-activity">Create a pipeline with a Data Flow activity</a></li>
                        <li><a href="#build-transformation-logic-in-the-data-flow-canvas">Build transformation logic in the data flow canvas</a></li>
                        <li><a href="#running-and-monitoring-the-data-flow">Running and monitoring the Data Flow</a></li>
                        <li><a href="#next-steps">Next steps</a></li>
                    </ol>
                </nav>

                <!-- <content> -->
                <strong>APPLIES TO:</strong>
                Azure Data Factory and Azure Synapse Analytics<br><br>
                If you're new to Azure Data Factory, see <a href="introduction.php" data-linktype="relative-path">Introduction to Azure Data Factory</a>.
                In this tutorial, you'll use the Azure Data Factory user interface (UX) to create a pipeline that copies and transforms data from an Azure Data Lake Storage (ADLS) Gen2 source to an ADLS Gen2 sink using mapping data flow. The configuration pattern in this tutorial can be expanded upon when transforming data using mapping data flow
                <div class="alert is-info">
                    <span class="docon docon-status-error-outline" aria-hidden="true"></span> Note:
                    This tutorial is meant for mapping data flows in general. Data flows are available both in Azure Data Factory and Synapse Pipelines.
                </div>
                In this tutorial, you do the following steps:
                <div class="checklist">
                    <ul>
                        <li>Create a data factory.</li>
                        <li>Create a pipeline with a Data Flow activity.</li>
                        <li>Build a mapping data flow with four transformations.</li>
                        <li>Test run the pipeline.</li>
                        <li>Monitor a Data Flow activity</li>
                    </ul>
                </div>
                <h3 id="prerequisites" class="heading-anchor"><a class="anchor-link docon docon-link" href="#prerequisites" aria-labelledby="prerequisites"></a>Prerequisites</h3>
                <ul>
                    <li><strong>Azure subscription</strong>. If you don't have an Azure subscription, create a <a href="https://azure.microsoft.com/free/" data-linktype="external">free Azure account</a> before you begin.</li>
                    <li><strong>Azure storage account</strong>. You use ADLS storage as a <em>source</em> and <em>sink</em> data stores. </li>
                </ul>
                The file that we are transforming in this tutorial is MoviesDB.csv, which can be found <a href="https://raw.githubusercontent.com/djpmsft/adf-ready-demo/master/moviesDB.csv" data-linktype="external">here</a>. To retrieve the file from GitHub, copy the contents to a text editor of your choice to save locally as a .csv file.
                <h3 id="create-a-data-factory" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-data-factory" aria-labelledby="create-a-data-factory"></a>Create a data factory</h3>
                In this step, you create a data factory and open the Data Factory UX to create a pipeline in the data factory.
                <ol>
                    <li>
                        Open <strong>Microsoft Edge</strong> or <strong>Google Chrome</strong>. Currently, Data Factory UI is supported only in the Microsoft Edge and Google Chrome web browsers.
                    </li>
                    <li>
                        On the left menu, select <strong>Create a resource</strong> &gt; <strong>Integration</strong> &gt; <strong>Data Factory</strong>:
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/doc-common-process/new-azure-data-factory-menu.png" alt="Data Factory selection in the &amp;quot;New&amp;quot; pane" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        On the <strong>New data factory</strong> page, under <strong>Name</strong>, enter <strong>ADFTutorialDataFactory</strong>.
                        The name of the Azure data factory must be <em>globally unique</em>. If you receive an error message about the name value, enter a different name for the data factory. (for example, yournameADFTutorialDataFactory).
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/doc-common-process/name-not-available-error.png" alt="New data factory error message for duplicate name." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Select the Azure <strong>subscription</strong> in which you want to create the data factory.
                    </li>
                    <li>
                        For <strong>Resource Group</strong>, take one of the following steps:
                        a. Select <strong>Use existing</strong>, and select an existing resource group from the drop-down list.
                        b. Select <strong>Create new</strong>, and enter the name of a resource group.
                    </li>
                    <li>
                        Under <strong>Version</strong>, select <strong>V2</strong>.
                    </li>
                    <li>
                        Under <strong>Location</strong>, select a location for the data factory. Only locations that are supported are displayed in the drop-down list. Data stores (for example, Azure Storage and SQL Database) and computes (for example, Azure HDInsight) used by the data factory can be in other regions.
                    </li>
                    <li>
                        Select <strong>Create</strong>.
                    </li>
                    <li>
                        After the creation is finished, you see the notice in Notifications center. Select <strong>Go to resource</strong> to navigate to the Data factory page.
                    </li>
                    <li>
                        Select <strong>Author &amp; Monitor</strong> to launch the Data Factory UI in a separate tab.
                    </li>
                </ol>
                <h3 id="create-a-pipeline-with-a-data-flow-activity" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-pipeline-with-a-data-flow-activity" aria-labelledby="create-a-pipeline-with-a-data-flow-activity"></a>Create a pipeline with a Data Flow activity</h3>
                In this step, you'll create a pipeline that contains a Data Flow activity.
                <ol>
                    <li>
                        On the home page of Azure Data Factory, select <strong>Orchestrate</strong>.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/doc-common-process/get-started-page.png" alt="Screenshot that shows the ADF home page." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        In the <strong>General</strong> tab for the pipeline, enter <strong>TransformMovies</strong> for <strong>Name</strong> of the pipeline.
                    </li>
                    <li>
                        In the <strong>Activities</strong> pane, expand the <strong>Move and Transform</strong> accordion. Drag and drop the <strong>Data Flow</strong> activity from the pane to the pipeline canvas.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/activity1.png" alt="Screenshot that shows the pipeline canvas where you can drop the Data Flow activity." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        In the <strong>Adding Data Flow</strong> pop-up, select <strong>Create new Data Flow</strong> and then name your data flow <strong>TransformMovies</strong>. Click Finish when done.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/activity2.png" alt="Screenshot that shows where you name your data flow when you create a new data flow." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        In the top bar of the pipeline canvas, slide the <strong>Data Flow debug</strong> slider on. Debug mode allows for interactive testing of transformation logic against a live Spark cluster. Data Flow clusters take 5-7 minutes to warm up and users are recommended to turn on debug first if they plan to do Data Flow development.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/dataflow1.png" alt="Data Flow Activity" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                </ol>
                <h3 id="build-transformation-logic-in-the-data-flow-canvas" class="heading-anchor"><a class="anchor-link docon docon-link" href="#build-transformation-logic-in-the-data-flow-canvas" aria-labelledby="build-transformation-logic-in-the-data-flow-canvas"></a>Build transformation logic in the data flow canvas</h3>
                Once you create your Data Flow, you'll be automatically sent to the data flow canvas. In this step, you'll build a data flow that takes the moviesDB.csv in ADLS storage and aggregates the average rating of comedies from 1910 to 2000. You'll then write this file back to the ADLS storage.
                <ol>
                    <li>
                        In the data flow canvas, add a source by clicking on the <strong>Add Source</strong> box.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/dataflow2.png" alt="Screenshot that shows the Add Source box." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Name your source <strong>MoviesDB</strong>. Click on <strong>New</strong> to create a new source dataset.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/dataflow3.png" alt="Screenshot that shows where you select New after you name your source." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Choose <strong>Azure Data Lake Storage Gen2</strong>. Click Continue.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/dataset1.png" alt="Screenshot that shows where is the Azure Data Lake Storage Gen2 tile." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Choose <strong>DelimitedText</strong>. Click Continue.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/dataset2.png" alt="Screenshot that shows the DelimitedText tile." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Name your dataset <strong>MoviesDB</strong>. In the linked service dropdown, choose <strong>New</strong>.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/dataset3.png" alt="Screenshot that shows the Linked service dropdown list." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        In the linked service creation screen, name your ADLS gen2 linked service <strong>ADLSGen2</strong> and specify your authentication method. Then enter your connection credentials. In this tutorial, we're using Account key to connect to our storage account. You can click <strong>Test connection</strong> to verify your credentials were entered correctly. Click Create when finished.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/ls1.png" alt="Linked Service" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Once you're back at the dataset creation screen, enter where your file is located under the <strong>File path</strong> field. In this tutorial, the file moviesDB.csv is located in container sample-data. As the file has headers, check <strong>First row as header</strong>. Select <strong>From connection/store</strong> to import the header schema directly from the file in storage. Click OK when done.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/dataset4.png" alt="Datasets" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        If your debug cluster has started, go to the <strong>Data Preview</strong> tab of the source transformation and click <strong>Refresh</strong> to get a snapshot of the data. You can use data preview to verify your transformation is configured correctly.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/dataflow4.png" alt="Screenshot that shows where you can preview your data to verify your transformation is configured correctly." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Next to your source node on the data flow canvas, click on the plus icon to add a new transformation. The first transformation you're adding is a <strong>Filter</strong>.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/dataflow5.png" alt="Data Flow Canvas" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Name your filter transformation <strong>FilterYears</strong>. Click on the expression box next to <strong>Filter on</strong> to open the expression builder. Here you'll specify your filtering condition.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/filter1.png" alt="Screenshot that shows the Filter on expression box." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        The data flow expression builder lets you interactively build expressions to use in various transformations. Expressions can include built-in functions, columns from the input schema, and user-defined parameters.
                        In this tutorial, you want to filter movies of genre comedy that came out between the years 1910 and 2000. As year is currently a string, you need to convert it to an integer using the <code>toInteger()</code> function. Use the greater than or equals to (&gt;=) and less than or equals to (&lt;=) operators to compare against literal year values 1910 and 2000. Union these expressions together with the and (&amp;&amp;) operator. The expression comes out as:
                        <code>toInteger(year) &gt;= 1910 &amp;&amp; toInteger(year) &lt;= 2000</code>
                        To find which movies are comedies, you can use the <code>rlike()</code> function to find pattern 'Comedy' in the column genres. Union the <code>rlike</code> expression with the year comparison to get:
                        <code>toInteger(year) &gt;= 1910 &amp;&amp; toInteger(year) &lt;= 2000 &amp;&amp; rlike(genres, 'Comedy')</code>
                        If you've a debug cluster active, you can verify your logic by clicking <strong>Refresh</strong> to see expression output compared to the inputs used. There's more than one right answer on how you can accomplish this logic using the data flow expression language.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/filter2.png" alt="Filter" data-linktype="relative-path"><br><br>
                        </span>

                        Click <strong>Save and Finish</strong> once you're done with your expression.
                    </li>
                    <li>
                        Fetch a <strong>Data Preview</strong> to verify the filter is working correctly.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/filter3.png" alt="Screenshot that shows the Data Preview that you fetched." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        The next transformation you'll add is an <strong>Aggregate</strong> transformation under <strong>Schema modifier</strong>.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/agg1.png" alt="Screenshot that shows the Aggregate schema modifier." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Name your aggregate transformation <strong>AggregateComedyRatings</strong>. In the <strong>Group by</strong> tab, select <strong>year</strong> from the dropdown to group the aggregations by the year the movie came out.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/agg2.png" alt="Screenshot that shows the year option in the Group by tab under Aggregate Settings." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Go to the <strong>Aggregates</strong> tab. In the left text box, name the aggregate column <strong>AverageComedyRating</strong>. Click on the right expression box to enter the aggregate expression via the expression builder.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/agg3.png" alt="Screenshot that shows the year option in the Aggregates tab under Aggregate Settings." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        To get the average of column <strong>Rating</strong>, use the <code>avg()</code> aggregate function. As <strong>Rating</strong> is a string and <code>avg()</code> takes in a numerical input, we must convert the value to a number via the <code>toInteger()</code> function. This is expression looks like:
                        <code>avg(toInteger(Rating))</code>
                        Click <strong>Save and Finish</strong> when done.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/agg4.png" alt="Screenshot that shows the saved expression." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Go to the <strong>Data Preview</strong> tab to view the transformation output. Notice only two columns are there, <strong>year</strong> and <strong>AverageComedyRating</strong>.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/agg3.png" alt="Aggregate" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Next, you want to add a <strong>Sink</strong> transformation under <strong>Destination</strong>.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/sink1.png" alt="Screenshot that shows where to add a sink transformation under Destination." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Name your sink <strong>Sink</strong>. Click <strong>New</strong> to create your sink dataset.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/sink2.png" alt="Screenshot that shows where you can name your sink and create a new sink dataset." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Choose <strong>Azure Data Lake Storage Gen2</strong>. Click Continue.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/dataset1.png" alt="Screenshot that shows the Azure Data Lake Storage Gen2 tile you can choose." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Choose <strong>DelimitedText</strong>. Click Continue.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/dataset2.png" alt="Dataset" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Name your sink dataset <strong>MoviesSink</strong>. For linked service, choose the ADLS gen2 linked service you created in step 6. Enter an output folder to write your data to. In this tutorial, we're writing to folder 'output' in container 'sample-data'. The folder doesn't need to exist beforehand and can be dynamically created. Set <strong>First row as header</strong> as true and select <strong>None</strong> for <strong>Import schema</strong>. Click Finish.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/sink3.png" alt="Sink" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                </ol>
                Now you've finished building your data flow. You're ready to run it in your pipeline.
                <h3 id="running-and-monitoring-the-data-flow" class="heading-anchor"><a class="anchor-link docon docon-link" href="#running-and-monitoring-the-data-flow" aria-labelledby="running-and-monitoring-the-data-flow"></a>Running and monitoring the Data Flow</h3>
                You can debug a pipeline before you publish it. In this step, you're going to trigger a debug run of the data flow pipeline. While data preview doesn't write data, a debug run will write data to your sink destination.
                <ol>
                    <li>
                        Go to the pipeline canvas. Click <strong>Debug</strong> to trigger a debug run.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/pipeline1.png" alt="Screenshot that shows the pipeline canvas with Debug highlighted." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Pipeline debug of Data Flow activities uses the active debug cluster but still take at least a minute to initialize. You can track the progress via the <strong>Output</strong> tab. Once the run is successful, click on the eyeglasses icon to open the monitoring pane.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/pipeline2.png" alt="Pipeline" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        In the monitoring pane, you can see the number of rows and time spent in each transformation step.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/pipeline3.png" alt="Screenshot that shows the monitoring pane where you can see the number of rows and time spent in each transformation step." data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                    <li>
                        Click on a transformation to get detailed information about the columns and partitioning of the data.
                        <span class="mx-imgBorder">
                            <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/tutorial-data-flow/pipeline4.png" alt="Monitoring" data-linktype="relative-path"><br><br>
                        </span>

                    </li>
                </ol>
                If you followed this tutorial correctly, you should have written 83 rows and 2 columns into your sink folder. You can verify the data is correct by checking your blob storage.
                <h3 id="next-steps" class="heading-anchor"><a class="anchor-link docon docon-link" href="#next-steps" aria-labelledby="next-steps"></a>Next steps</h3>
                The pipeline in this tutorial runs a data flow that aggregates the average rating of comedies from 1910 to 2000 and writes the data to ADLS. You learned how to:
                <div class="checklist">
                    <ul>
                        <li>Create a data factory.</li>
                        <li>Create a pipeline with a Data Flow activity.</li>
                        <li>Build a mapping data flow with four transformations.</li>
                        <li>Test run the pipeline.</li>
                        <li>Monitor a Data Flow activity</li>
                    </ul>
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