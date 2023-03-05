<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Synapse Analytics in Azure</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Synapse Analytics in Azure">

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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Analyze data with dedicated SQL pools</h2>
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
                        <li><a href="#Create a dedicated SQL pool">Create a dedicated SQL pool</a></li>
                        <li><a href="#Load the NYC Taxi Data into SQLPOOL1">Load the NYC Taxi Data into SQLPOOL1</a></li>

                        <li><a href="#Explore the NYC Taxi data in the dedicated SQL pool">Explore the NYC Taxi data in the dedicated SQL pool</a></li>

                    </ul>

                    </nav>



                    <!-- <content> -->
                    In this tutorial, you'll use the NYC Taxi data to explore a dedicated SQL pool's capabilities.
                    <h3 id="Create a dedicated SQL pool" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Create a dedicated SQL pool" aria-labelledby="Create a dedicated SQL pool"></a>Create a dedicated SQL pool</h3>

                    <ol>
                        <li>In Synapse Studio, on the left-side pane, select <strong>Manage</strong> &gt; <strong>SQL pools</strong> under <strong>Analytics pools</strong>.</li>
                        <li>Select <strong>New</strong></li>
                        <li>For <strong>Dedicated SQL pool name</strong> select <strong>SQLPOOL1</strong></li>
                        <li>For <strong>Performance level</strong> choose <strong>DW100C</strong></li>
                        <li>Select <strong>Review + create</strong> &gt; <strong>Create</strong>. Your dedicated SQL pool will be ready in a few minutes.</li>
                    </ol>
                    Your dedicated SQL pool is associated with a SQL database that's also called <strong>SQLPOOL1</strong>.
                    <ol>
                        <li>Navigate to <strong>Data</strong> &gt; <strong>Workspace</strong>.</li>
                        <li>You should see a database named <strong>SQLPOOL1</strong>. If you do not see it, click <strong>Refresh</strong>.</li>
                    </ol>
                    A dedicated SQL pool consumes billable resources as long as it's active. You can pause the pool later to reduce costs.

                    <h3 id="Load the NYC Taxi Data into SQLPOOL1" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Load the NYC Taxi Data into SQLPOOL1" aria-labelledby="Load the NYC Taxi Data into SQLPOOL1"></a>Load the NYC Taxi Data into SQLPOOL1</h3>

                    <ol>
                        <li>In Synapse Studio, navigate to the <strong>Develop</strong> hub, click the <strong>+</strong> button to add new resource, then create new SQL script.
                        </li>
                        <li>Select the pool 'SQLPOOL1' (pool created in STEP 1 of this tutorial) in <strong>Connect to</strong> drop down list above the script.
                        </li>
                        <li>Enter the following code:
                                <pre>
IF NOT EXISTS (SELECT * FROM sys.objects O JOIN sys.schemas S ON O.schema_id = S.schema_id WHERE O.NAME = 'NYCTaxiTripSmall' AND O.TYPE = 'U' AND S.NAME = 'dbo')
CREATE TABLE dbo.NYCTaxiTripSmall
    (
     [DateID] int,
     [MedallionID] int,
     [HackneyLicenseID] int,
     [PickupTimeID] int,
     [DropoffTimeID] int,
     [PickupGeographyID] int,
     [DropoffGeographyID] int,
     [PickupLatitude] float,
     [PickupLongitude] float,
     [PickupLatLong] nvarchar(4000),
     [DropoffLatitude] float,
     [DropoffLongitude] float,
     [DropoffLatLong] nvarchar(4000),
     [PassengerCount] int,
     [TripDurationSeconds] int,
     [TripDistanceMiles] float,
     [PaymentType] nvarchar(4000),
     [FareAmount] numeric(19,4),
     [SurchargeAmount] numeric(19,4),
     [TaxAmount] numeric(19,4),
     [TipAmount] numeric(19,4),
     [TollsAmount] numeric(19,4),
     [TotalAmount] numeric(19,4)
    )
WITH
    (
    DISTRIBUTION = ROUND_ROBIN,
     CLUSTERED COLUMNSTORE INDEX
     -- HEAP
    )
GO

COPY INTO dbo.NYCTaxiTripSmall
(DateID 1, MedallionID 2, HackneyLicenseID 3, PickupTimeID 4, DropoffTimeID 5,
PickupGeographyID 6, DropoffGeographyID 7, PickupLatitude 8, PickupLongitude 9, 
PickupLatLong 10, DropoffLatitude 11, DropoffLongitude 12, DropoffLatLong 13, 
PassengerCount 14, TripDurationSeconds 15, TripDistanceMiles 16, PaymentType 17, 
FareAmount 18, SurchargeAmount 19, TaxAmount 20, TipAmount 21, TollsAmount 22, 
TotalAmount 23)
FROM 'https://contosolake.dfs.core.windows.net/users/NYCTripSmall.parquet'
WITH
(
    FILE_TYPE = 'PARQUET'
    ,MAXERRORS = 0
    ,IDENTITY_INSERT = 'OFF'
)
</pre>
                        </li>
                        <li>Click the <strong>Run</strong> button to execute the script.
                        </li>
                        <li>This script will finish in less than 60 seconds. It loads 2 million rows of NYC Taxi data into a table called <code>dbo.NYCTaxiTripSmall</code>.
                        </li>
                    </ol>

                    <h3 id="Explore the NYC Taxi data in the dedicated SQL pool" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Explore the NYC Taxi data in the dedicated SQL pool" aria-labelledby="Explore the NYC Taxi data in the dedicated SQL pool"></a>Explore the NYC Taxi data in the dedicated SQL pool</h3>
                    <ol>
                        <li>In Synapse Studio, go to the <strong>Data</strong> hub.
                        </li>
                        <li>Go to <strong>SQLPOOL1</strong> &gt; <strong>Tables</strong>.
                        </li>
                        <li>Right-click the <strong>dbo.NYCTaxiTripSmall</strong> table and select <strong>New SQL Script</strong> &gt; <strong>Select TOP 100 Rows</strong>.
                        </li>
                        <li>Wait while a new SQL script is created and runs.
                        </li>
                        <li>Notice that at the top of the SQL script <strong>Connect to</strong> is automatically set to the SQL pool called <strong>SQLPOOL1</strong>.
                        </li>
                        <li>Replace the text of the SQL script with this code and run it.
                                <pre>
SELECT PassengerCount,
      SUM(TripDistanceMiles) as SumTripDistance,
      AVG(TripDistanceMiles) as AvgTripDistance
FROM  dbo.NYCTaxiTripSmall
WHERE TripDistanceMiles > 0 AND PassengerCount > 0
GROUP BY PassengerCount
ORDER BY PassengerCount;
</pre>
                            This query shows how the total trip distances and average trip distance relate to the number of passengers.
                        </li>
                        <li>In the SQL script result window, change the <strong>View</strong> to <strong>Chart</strong> to see a visualization of the results as a line chart.
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