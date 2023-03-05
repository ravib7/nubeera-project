<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra CosmosDb in Azure</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra CosmosDb in Azure">

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
                <strong class="px-2" style="font-size: 1.125rem;">CosmosDb</strong><br><br>

            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CosmosDB</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">CosmosDb</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">                            
                                    <h2>Azure Cosmos DB</h2>

                        <section id="overview" class="section section-size7 section--gray20" aria-label="Fast NoSQL database with open APIs for any scale" data-module="content-overview-01">
                            <div class="row">
                                <div class="column medium-4">
                                    <h2>Fast NoSQL database with open APIs for any scale</h2>
                                </div>

                                <div class="column medium-8">

                                    <p>Azure Cosmos DB is a fully managed NoSQL database service for modern app development. Get guaranteed single-digit millisecond response times and 99.999-percent availability, <a href="/en-us/support/legal/sla/cosmos-db/" data-bi-an="content-overview-01" data-bi-tn="undefined">backed by SLAs</a>, <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/scaling-throughput" data-bi-an="content-overview-01" data-bi-tn="undefined">automatic and instant scalability</a>, and open-source APIs for MongoDB and Cassandra. Enjoy fast writes and reads anywhere in the world with turnkey data replication and multi-region writes. Gain insight over real-time data with no-ETL analytics using <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/synapse-link/" data-bi-an="content-overview-01" data-bi-tn="undefined">Azure Synapse Link</a> for Azure Cosmos DB.</p>
                                </div>
                            </div>
                        </section>

                        <div id="features" class="section " data-module="glyph-02">

                            <div class="row">
                                <div class="column medium-3 end">
                                    <div class="row row-size2 column">

                                        <p><strong>Guaranteed speed at any scale</strong>—even through bursts—with instant, limitless elasticity, fast reads, and multi-master writes, anywhere in the world</p>
                                    </div>
                                </div>
                                <div class="column medium-3 end">
                                    <div class="row row-size2 column">

                                        <p><strong>Fast, flexible app development</strong> with SDKs for popular languages, a native Core (SQL) API along with APIs for MongoDB, Cassandra, Graph, and Gremlin, and no-ETL (extract, transform, load) analytics</p>
                                    </div>
                                </div>
                                <div class="column medium-3 end">
                                    <div class="row row-size2 column">

                                        <p><strong>Ready for mission-critical applications</strong> with guaranteed business continuity, 99.999-percent availability, and enterprise-level security</p>
                                    </div>
                                </div>
                                <div class="column medium-3 end">
                                    <div class="row column">
                                        <img alt="" class="icon" loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/svg/serverless-database.svg">
                                    </div>
                                    <div class="row row-size2 column">

                                        <p><strong>Fully managed and cost-effective serverless database</strong> with instant, automatic scaling that responds to application needs, integrated caching, and consumption-based pricing options</p>
                                    </div>
                                </div>
                            </div>



                        </div>



                        <section class="section" aria-label="The Value of Azure Cosmos DB" data-module="media-01">

                            <div class="row ">
                                <div class="column medium-5 large-4">
                                    <h2>Automatic and limitless scale</h2>
                                    <p>Automatically provision the throughput you need for applications with consistent traffic and high performance requirements. Workloads of any size or scale are guaranteed always-on availability and &lt;10 ms reads and write response times, so you’re able to run your most important applications worry-free anywhere in the world.</p>

                                </div>
                                <div class="column medium-7">



                                    <div class="video--gif-player" data-is-playing="true" data-play-text="Play" data-stop-text="Stop">
                                        <div>
                                            <img class="video--gif-player_img" data-gif-src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/autoscale.gif?637752010349677932" loading="lazy" data-img-src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/autoscale.jpg" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/autoscale.gif?637752010349677932" alt="Automatic and limitless scale">
                                        </div>
                                        <button class="video--gif-player_control video--gif-player_pause video--gif-player_stop" aria-label="Stop" type="button" data-bi-id="gif-pause" data-bi-an="media-01" data-bi-tn="video--gif-player_control video--gif-player_pause video--gif-player_stop"></button>
                                    </div>

                                </div>
                            </div>
                            <div class="row row-size8">
                                <div class="column medium-7">



                                    <div class="video--gif-player" data-is-playing="true" data-play-text="Play" data-stop-text="Stop">
                                        <div>
                                            <img class="video--gif-player_img" data-gif-src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/serverless.gif?637752010349677932" loading="lazy" data-img-src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/serverless.jpg" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/serverless.gif?637752010349677932" alt="Serverless database operations">
                                        </div>
                                        <button class="video--gif-player_control video--gif-player_pause video--gif-player_stop" aria-label="Stop" type="button" data-bi-id="gif-pause" data-bi-an="media-01" data-bi-tn="video--gif-player_control video--gif-player_pause video--gif-player_stop"></button>
                                    </div>

                                </div>
                                <div class="column medium-5 large-4">
                                    <h2>Serverless database operations</h2>
                                    <p>Run workloads with spiky or occasional traffic and moderate performance requirements with serverless, an alternative to provisioned throughput. This consumption-based database operations mode makes is easy to run cost-effective dev/test workloads and new production applications.</p>

                                </div>
                            </div>
                            <div class="row row-size8">
                                <div class="column medium-5 large-4">
                                    <h2>Hybrid platform for Cassandra data</h2>
                                    <p>Gain scale and superior performance, while maintaining flexibility and control, with a fully managed NoSQL database service trusted by companies like <a href="https://customers.microsoft.com/en-us/story/symantec-professionalservices-azurecosmosdb" data-bi-an="media-01" data-bi-tn="undefined">Symantec</a> to run Cassandra workloads. Seamlessly integrate with <a href="/en-us/services/managed-instance-apache-cassandra/" data-bi-an="media-01" data-bi-tn="undefined">Azure Managed Instance for Apache Cassandra</a> for transparent migration, replication, and synchronization of your Cassandra data across on-premises and Azure.</p>
                                </div>
                                <div class="column medium-7">



                                    <div class="video--gif-player" data-is-playing="true" data-play-text="Play" data-stop-text="Stop">
                                        <div>
                                            <img class="video--gif-player_img" data-gif-src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/ml-apache-cassandra.gif?637752010349677932" loading="lazy" data-img-src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/ml-apache-cassandra.jpg" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/ml-apache-cassandra.gif?637752010349677932" alt="Hybrid platform for Cassandra data">
                                        </div>
                                        <button class="video--gif-player_control video--gif-player_pause video--gif-player_stop" aria-label="Stop" type="button" data-bi-id="gif-pause" data-bi-an="media-01" data-bi-tn="video--gif-player_control video--gif-player_pause video--gif-player_stop"></button>
                                    </div>

                                </div>
                            </div>
                            <div class="row row-size8">
                                <div class="column medium-7">



                                    <div class="video--gif-player" data-is-playing="true" data-play-text="Play" data-stop-text="Stop">
                                        <div>
                                            <img class="video--gif-player_img" data-gif-src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/azure-synapse-link-animation.gif?637752010349677932" loading="lazy" data-img-src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/azure-synapse-link-animation.jpg" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/azure-synapse-link-animation.gif?637752010349677932" alt="No-ETL analytics over real-time operational data">
                                        </div>
                                        <button class="video--gif-player_control video--gif-player_pause video--gif-player_stop" aria-label="Stop" type="button" data-bi-id="gif-pause" data-bi-an="media-01" data-bi-tn="video--gif-player_control video--gif-player_pause video--gif-player_stop"></button>
                                    </div>

                                </div>
                                <div class="column medium-5 large-4">
                                    <h2>No-ETL analytics over real-time operational data</h2>
                                    <p>Run near-real time analytics and AI on the operational data within your NoSQL database, to reduce time to insight. <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/synapse-link" data-bi-an="media-01" data-bi-tn="undefined">Azure Synapse Link</a> for Azure Cosmos DB seamlessly integrates with Azure Synapse Analytics without data movement or diminishing the performance of your operational store.</p>
                                </div>
                            </div>
                        </section>




                        <section class="section" aria-label="Popular use cases for Azure Cosmos DB">
                            <div class="row column text-center">
                                <h2>Popular use cases for Azure Cosmos DB</h2>
                            </div>
                            <div class="row">
                                <div class="column medium-4">
                                    <div class="row column">
                                        <span class="icon">
                                            <svg aria-hidden="true" role="presentation" data-slug-id="scale09" viewBox="0 0 48 49" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M47.9238 28.6357H35.4102V32.6105C35.4102 34.3452 38.2144 35.7431 41.6838 35.7431C45.1533 35.7431 47.9575 34.3368 47.9575 32.6105C47.9575 32.6021 47.9491 28.661 47.9238 28.6357Z" fill="#0078D7"></path>
                                                <path d="M47.9491 27.9287L47.9575 31.4066C47.9575 33.1413 45.1533 34.5392 41.6838 34.5392C38.2144 34.5392 35.4102 33.1329 35.4102 31.4066V27.9287H47.9491Z" fill="#50E6FF"></path>
                                                <path d="M47.9243 24.3428H35.4106V28.3175C35.4106 30.0522 38.2149 31.4501 41.6843 31.4501C45.1538 31.4501 47.958 30.0438 47.958 28.3175C47.958 28.3091 47.9496 24.368 47.9243 24.3428Z" fill="#0078D7"></path>
                                                <path d="M47.9575 21.874H35.4102V25.1667C35.4102 26.9014 38.2144 28.2993 41.6838 28.2993C45.1533 28.2993 47.9575 26.893 47.9575 25.1667C47.9575 25.1667 47.9575 21.8993 47.9575 21.874Z" fill="#50E6FF"></path>
                                                <path d="M41.6843 25.2174C45.1492 25.2174 47.958 23.8149 47.958 22.0848C47.958 20.3547 45.1492 18.9521 41.6843 18.9521C38.2195 18.9521 35.4106 20.3547 35.4106 22.0848C35.4106 23.8149 38.2195 25.2174 41.6843 25.2174Z" fill="#0078D7"></path>
                                                <path d="M31.1327 29.9756H21.0527V33.1756C21.0527 34.5735 23.318 35.7019 26.1054 35.7019C28.8927 35.7019 31.158 34.5735 31.158 33.1756C31.158 33.1756 31.1496 29.9924 31.1327 29.9756Z" fill="#0078D7"></path>
                                                <path d="M31.1496 29.4052L31.158 32.2095C31.158 33.6073 28.8927 34.7358 26.1054 34.7358C23.318 34.7358 21.0527 33.6073 21.0527 32.2095V29.4137H31.1496" fill="#50E6FF"></path>
                                                <path d="M31.1327 26.5146H21.0527V29.7146C21.0527 31.1125 23.318 32.241 26.1054 32.241C28.8927 32.241 31.158 31.1125 31.158 29.7146C31.158 29.7146 31.1496 26.5399 31.1327 26.5146Z" fill="#0078D7"></path>
                                                <path d="M31.158 24.5381H21.0527V27.1907C21.0527 28.5886 23.318 29.717 26.1054 29.717C28.8927 29.717 31.158 28.5886 31.158 27.1907C31.158 27.1907 31.158 24.5549 31.158 24.5381Z" fill="#50E6FF"></path>
                                                <path d="M26.1054 27.2235C28.8959 27.2235 31.158 26.0925 31.158 24.6972C31.158 23.302 28.8959 22.1709 26.1054 22.1709C23.3149 22.1709 21.0527 23.302 21.0527 24.6972C21.0527 26.0925 23.3149 27.2235 26.1054 27.2235Z" fill="#0078D7"></path>
                                                <path d="M16.4879 31.4092H8.92578V33.8092C8.92578 34.8534 10.6184 35.7039 12.7153 35.7039C14.8121 35.7039 16.5047 34.8534 16.5047 33.8092C16.5047 33.8092 16.5047 31.426 16.4879 31.4092Z" fill="#0078D7"></path>
                                                <path d="M16.5051 30.9795L16.5135 33.0763C16.5135 34.1205 14.8209 34.9711 12.724 34.9711C10.6272 34.9711 8.93457 34.1205 8.93457 33.0763V30.9795H16.5051Z" fill="#50E6FF"></path>
                                                <path d="M16.4879 28.8154H8.92578V31.2154C8.92578 32.2596 10.6184 33.1102 12.7153 33.1102C14.8121 33.1102 16.5047 32.2596 16.5047 31.2154C16.5047 31.2154 16.5047 28.8323 16.4879 28.8154Z" fill="#0078D7"></path>
                                                <path d="M16.5052 27.3232H8.92627V29.3106C8.92627 30.3548 10.6189 31.2053 12.7157 31.2053C14.8126 31.2053 16.5052 30.3548 16.5052 29.3106C16.5052 29.3106 16.5052 27.3401 16.5052 27.3232Z" fill="#50E6FF"></path>
                                                <path d="M12.7153 29.3432C14.8081 29.3432 16.5047 28.4949 16.5047 27.4484C16.5047 26.402 14.8081 25.5537 12.7153 25.5537C10.6224 25.5537 8.92578 26.402 8.92578 27.4484C8.92578 28.4949 10.6224 29.3432 12.7153 29.3432Z" fill="#0078D7"></path>
                                                <path d="M5.03556 32.8896H0.0839844V34.4644C0.0839844 35.1465 1.19556 35.7023 2.56819 35.7023C3.94083 35.7023 5.05241 35.1465 5.05241 34.456C5.05241 34.456 5.05241 32.8981 5.03556 32.8896Z" fill="#0078D7"></path>
                                                <path d="M5.05241 32.6045V33.9771C5.05241 34.6592 3.94083 35.215 2.56819 35.215C1.19556 35.215 0.0839844 34.6676 0.0839844 33.9855V32.6129H5.05241" fill="#50E6FF"></path>
                                                <path d="M5.03556 31.1904H0.0839844V32.7652C0.0839844 33.4473 1.19556 34.0031 2.56819 34.0031C3.94083 34.0031 5.05241 33.4473 5.05241 32.7652C5.05241 32.7652 5.05241 31.1989 5.03556 31.1904Z" fill="#0078D7"></path>
                                                <path d="M5.05241 30.2139H0.0839844V31.5191C0.0839844 32.2012 1.19556 32.757 2.56819 32.757C3.94083 32.757 5.05241 32.2012 5.05241 31.5191C5.05241 31.5191 5.05241 30.2223 5.05241 30.2139Z" fill="#50E6FF"></path>
                                                <path d="M2.56819 31.5334C3.94019 31.5334 5.05241 30.9792 5.05241 30.2955C5.05241 29.6118 3.94019 29.0576 2.56819 29.0576C1.1962 29.0576 0.0839844 29.6118 0.0839844 30.2955C0.0839844 30.9792 1.1962 31.5334 2.56819 31.5334Z" fill="#0078D7"></path>
                                                <path d="M12.6655 41.917C11.9666 41.917 11.4023 42.4812 11.4023 43.1801C11.4023 43.8791 11.9666 44.4433 12.6655 44.4433C13.3644 44.4433 13.9287 43.8791 13.9287 43.1801C13.9287 42.4812 13.3644 41.917 12.6655 41.917Z" fill="#0078D7"></path>
                                                <path d="M10.2573 43.9541C10.1815 43.7099 10.131 43.4489 10.131 43.1794C10.131 43.011 10.1479 42.851 10.1815 42.691H2.52681V40.7373L0.0341797 43.2384L2.52681 45.7394V43.9626H10.2573V43.9541Z" fill="#50E6FF"></path>
                                                <path d="M15.1494 42.6904C15.1831 42.8504 15.1999 43.0104 15.1999 43.1788C15.1999 43.4483 15.1578 43.7094 15.082 43.9536H23.3852V42.6904H15.1494Z" fill="#0078D4"></path>
                                                <path d="M35.9834 42.6904H24.6318V43.9536H35.9834V42.6904Z" fill="#0078D4"></path>
                                                <path d="M47.9998 43.2377L45.5071 40.7451V42.6904H37.2461V43.9535H45.5071V45.7388L47.9998 43.2377Z" fill="#0078D4"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="row row-size2 column">
                                        <h3 class="text-heading4">Fast and scalable IoT device telemetry</h3>
                                        <p>Scale instantly and elastically to accommodate diverse and unpredictable IoT workloads, without sacrificing ingestion or query performance. Stream vehicle telemetry for smart fleet solutions, stream and analyze data with change feed for real-time insights, or archive data for data warehouse analytics. <a href="https://customers.microsoft.com/en-us/story/784791-mercedes-benz-r-and-d-creates-container-driven-cars-powered-by-microsoft-azure" data-bi-an="body" data-bi-tn="undefined">Mercedes Benz</a>, <a href="https://customers.microsoft.com/en-us/story/exxonmobil-mining-oil-gas-azure" data-bi-an="body" data-bi-tn="undefined">ExxonMobil</a>, and <a href="https://customers.microsoft.com/en-us/story/765131-olympus-manufacturing-azure-japan" data-bi-an="body" data-bi-tn="undefined">Olympus</a> are among the market leaders that rely on Azure Cosmos DB to power IoT solutions.</p>
                                    </div>
                                </div>


                                <div class="column medium-4">
                                    <div class="row column">
                                        <span class="icon">
                                            <svg aria-hidden="true" role="presentation" data-slug-id="dollar-cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                                <path d="M39.549 35.296H11.509L9.31836 15.1254H46.6517L39.549 35.296Z" fill="#0078D7"></path>
                                                <path d="M11.4243 8.0238H1.43164V11.3266H8.9219L10.0593 21.909L13.5222 21.4203L11.4243 8.0238Z" fill="#0078D7"></path>
                                                <path d="M15.216 45.5065C17.3007 45.5065 18.9906 43.8166 18.9906 41.7319C18.9906 39.6472 17.3007 37.9573 15.216 37.9573C13.1314 37.9573 11.4414 39.6472 11.4414 41.7319C11.4414 43.8166 13.1314 45.5065 15.216 45.5065Z" fill="#0078D7"></path>
                                                <path d="M35.7238 45.5065C37.8085 45.5065 39.4985 43.8166 39.4985 41.7319C39.4985 39.6472 37.8085 37.9573 35.7238 37.9573C33.6392 37.9573 31.9492 39.6472 31.9492 41.7319C31.9492 43.8166 33.6392 45.5065 35.7238 45.5065Z" fill="#0078D7"></path>
                                                <path d="M30.559 25.0325C30.0788 24.527 29.2868 24.0889 28.1915 23.6845V20.8788C29.0846 20.9799 29.8682 21.2495 30.559 21.6539V19.6234C30.0451 19.3201 29.2194 19.1516 28.1915 19.1179V17.7698H27.0625V19.16C26.1694 19.2274 25.4195 19.5307 24.8718 20.1036C24.6022 20.3733 24.3916 20.6766 24.2231 21.022C24.0883 21.359 23.9787 21.7298 24.0209 22.1005C24.0209 22.8756 24.2652 23.516 24.7455 23.9962C25.192 24.468 25.9756 24.9399 27.113 25.3443V28.0489C26.6665 28.0152 26.1188 27.8804 25.5375 27.6781C24.9224 27.4422 24.5095 27.2737 24.1978 27.0378V29.1021C25.0909 29.5739 26.043 29.8098 27.0372 29.8098V31.3685H28.1662V29.7761C29.1941 29.675 29.944 29.338 30.4916 28.8577C31.0056 28.3522 31.2836 27.7119 31.2836 26.8609C31.2415 26.0773 31.0393 25.5044 30.559 25.0325ZM27.0625 23.2379C26.38 22.9009 26.0346 22.4628 26.0346 21.9151C26.0346 21.3422 26.38 20.9715 27.0625 20.8367V23.2379ZM28.1578 28.0067V25.7403C28.8824 26.0436 29.2531 26.4143 29.2531 26.9283C29.2194 27.5349 28.8739 27.8719 28.1578 28.0067Z" fill="#50E6FF"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="row row-size2 column">
                                        <h3 class="text-heading4">Real-time retail services</h3>
                                        <p>Deliver high-performance digital customer experiences with real-time shopping carts, product recommendations, dynamic pricing, inventory updates, and more. Used by leading retailers and quick-service restaurant brands including <a href="https://customers.microsoft.com/en-us/story/822088-jet-com-powers-innovative-e-commerce-engine-on-azure-in-less-than-12-months" data-bi-an="body" data-bi-tn="undefined">Jet.com</a>, <a href="https://customers.microsoft.com/en-us/story/asos-retail-and-consumer-goods-azure" data-bi-an="body" data-bi-tn="undefined">ASOS</a> and <a href="https://customers.microsoft.com/en-us/story/787157-chipotle-retailers-azure" data-bi-an="body" data-bi-tn="undefined">Chipotle Mexican Grill</a>, Azure Cosmos DB enables personalization across high volumes of product data in milliseconds. Low-latency database response times ensure superior app performance anywhere in the world.</p>
                                    </div>
                                </div>


                                <div class="column medium-4">
                                    <div class="row column">
                                        <span class="icon">
                                            <svg aria-hidden="true" role="presentation" data-slug-id="grid33" viewBox="0 0 277 277" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M202.672 131.364V74.322L145.63 74.322V131.364H202.672Z" fill="#50E6FF"></path>
                                                <path d="M202.672 202.665V145.623H145.63V202.665H202.672Z" fill="#50E6FF"></path>
                                                <path d="M273.786 102.838H174.152V174.141H221.782V216.923H236.043V174.141H273.786V102.838Z" fill="#0078D4"></path>
                                                <path d="M60.0671 131.364L60.0671 74.322L3.02493 74.322L3.02493 131.364H60.0671Z" fill="#50E6FF"></path>
                                                <path d="M131.372 131.364V74.322L74.3294 74.322V131.364H131.372Z" fill="#50E6FF"></path>
                                                <path d="M60.0671 202.665L60.0671 145.623H3.02493L3.02493 202.665H60.0671Z" fill="#50E6FF"></path>
                                                <path d="M131.37 202.665V145.623H74.328V202.665H131.37Z" fill="#50E6FF"></path>
                                                <path d="M244.172 112.013L213.702 142.483L203.577 132.358L193.499 142.435L213.654 162.733L254.297 122.09L244.172 112.013Z" fill="#50E6FF"></path>
                                                <path d="M273.975 216.926H3.02466V245.447H273.975V216.926Z" fill="#50E6FF"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="row row-size2 column">
                                        <h3 class="text-heading4">Critical applications with distributed users</h3>
                                        <p>Run your most critical workloads in any Azure region in the world with SLA-backed speed, availability, throughput, and consistency. Ensure business continuity with turnkey multi-master replication and enterprise-grade security and compliance, including end-to-end encryption and access control. Azure Cosmos DB is a non-relational NoSQL database trusted by leading enterprises globally, such as <a href="https://youtu.be/DqQuXGjaE8c" data-bi-an="body" data-bi-tn="undefined">Coca-Cola</a>, <a href="https://customers.microsoft.com/en-us/story/symantec-professionalservices-azurecosmosdb" data-bi-an="body" data-bi-tn="undefined">Symantec</a>, and <a href="https://customers.microsoft.com/en-us/story/815549-pet-care-leader-turns-monolith-app-into-a-global-distributed-solution-on-azure" data-bi-an="body" data-bi-tn="undefined">Mars Petcare</a>.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="row column text-center">
                                <a href="https://docs.microsoft.com/en-us/search/?scope=Azure%20Architecture%20Center&amp;terms=cosmos%20db&amp;expanded=%2Fdevrel%2F68ec7f3a-2bc6-459f-b959-19beb729907d&amp;products=%2Fdevrel%2Fcd668c2f-f5b3-4573-8ad1-019570e3e2db" class="button button--ghost" data-bi-an="body" data-bi-tn="button button--ghost">Explore more solution architectures</a>
                            </div>
                        </section>

                        <section id="customer-stories" class="section section--gray20" data-module="customer-tabs">
                            <div class="row column text-center">
                                <h2>Industry leaders innovating with Azure Cosmos DB</h2>
                            </div>

                            <div class="row column">
                                <ol class="tabs--customer sd-tabs" role="tablist">
                                    <li role="presentation">
                                        <button type="button" data-slug="mars" class="tabs--customer__link active" aria-selected="true" role="tab" title="MARS" data-bi-id="mars" data-bi-slot="1" tabindex="0" data-bi-an="customer-tabs" data-bi-tn="tabs--customer__link active">
                                            <img loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/shared/customers/mars_m.png" alt="MARS">
                                        </button>
                                    </li>
                                    <li role="presentation">
                                        <button type="button" data-slug="mercedes-benz" class="tabs--customer__link" aria-selected="false" role="tab" title="Mercedes-Benz" data-bi-id="mercedes-benz" data-bi-slot="2" tabindex="-1" data-bi-an="customer-tabs" data-bi-tn="tabs--customer__link">
                                            <img loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/shared/customers/mercedes-benz_logo.png" alt="Mercedes-Benz">
                                        </button>
                                    </li>
                                    <li role="presentation">
                                        <button type="button" data-slug="chipotle" class="tabs--customer__link" aria-selected="false" role="tab" title="Chipotle" data-bi-id="chipotle" data-bi-slot="3" tabindex="-1" data-bi-an="customer-tabs" data-bi-tn="tabs--customer__link">
                                            <img loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/shared/customers/chipotle_m.png" alt="Chipotle">
                                        </button>
                                    </li>
                                    <li role="presentation">
                                        <button type="button" data-slug="asos" class="tabs--customer__link" aria-selected="false" role="tab" title="ASOS" data-bi-id="asos" data-bi-slot="4" tabindex="-1" data-bi-an="customer-tabs" data-bi-tn="tabs--customer__link">
                                            <img loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/shared/customers/asos.png" alt="ASOS">
                                        </button>
                                    </li>
                                    <li role="presentation">
                                        <button type="button" data-slug="symantec" class="tabs--customer__link" aria-selected="false" role="tab" title="Symantec" data-bi-id="symantec" data-bi-slot="5" tabindex="-1" data-bi-an="customer-tabs" data-bi-tn="tabs--customer__link">
                                            <img loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/shared/customers/logo-symantec.png" alt="Symantec">
                                        </button>
                                    </li>
                                </ol>
                            </div>

                            <div class="row row-size2 column">
                                <div class="tabs-content tabs--customer__content">
                                    <div id="mars" class="tabs--customer__item active" role="tabpanel">
                                        <div class="tabs--customer__item__content">
                                            <p class="tabs--customer__item__heading">Globally distributed data powers apps and microservices to improve pet care</p>



                                            <blockquote>
                                                <p lang="en">"Azure services enabled us to provide a secure, fully monitored, enterprise-ready foundation to our implementation."</p>
                                            </blockquote>
                                            <cite>Adam Lind, Vice President of Software Development</cite>

                                            <ul class="list--links">
                                                <li>
                                                    <a href="https://customers.microsoft.com/en-us/story/815549-pet-care-leader-turns-monolith-app-into-a-global-distributed-solution-on-azure" class="arrow-link" aria-label="Read the story for MARS" data-bi-an="customer-tabs" data-bi-tn="arrow-link">Read the story</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="tabs--customer__item__image">
                                            <img loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/cust-tab-mars.png" alt="MARS">
                                        </div>
                                    </div>
                                    <div id="mercedes-benz" class="tabs--customer__item" role="tabpanel">
                                        <div class="tabs--customer__item__content">
                                            <p class="tabs--customer__item__heading">Connected car platform relies on guaranteed high availability and low latency</p>



                                            <blockquote>
                                                <p lang="en">"The Azure ecosystem gave us useful capabilities that the developers worked into their system."</p>
                                            </blockquote>
                                            <cite>Rodrigo Nunes, Principal Software Engineer</cite>

                                            <ul class="list--links">
                                                <li>
                                                    <a href="https://customers.microsoft.com/en-us/story/784791-mercedes-benz-r-and-d-creates-container-driven-cars-powered-by-microsoft-azure" class="arrow-link" aria-label="Read the story for Mercedes-Benz" data-bi-an="customer-tabs" data-bi-tn="arrow-link">Read the story</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="tabs--customer__item__image">
                                            <img loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/cust-tab-mercedes.png" alt="Mercedes-Benz">
                                        </div>
                                    </div>
                                    <div id="chipotle" class="tabs--customer__item" role="tabpanel">
                                        <div class="tabs--customer__item__content">
                                            <p class="tabs--customer__item__heading">Chipotle powers digital ordering and personalized web experience with Azure Cosmos DB</p>



                                            <blockquote>
                                                <p lang="en">"Switching to Azure Cosmos DB is a big win in terms of scalability, availability, and, down the road, geographic distribution."</p>
                                            </blockquote>
                                            <cite>Mike Smith, Lead Software Developer</cite>

                                            <ul class="list--links">
                                                <li>
                                                    <a href="https://customers.microsoft.com/en-us/story/787157-chipotle-retailers-azure" class="arrow-link" aria-label="Read the story for Chipotle" data-bi-an="customer-tabs" data-bi-tn="arrow-link">Read the story</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="tabs--customer__item__image">
                                            <img loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/cust-tab-chipotle.png" alt="Chipotle">
                                        </div>
                                    </div>
                                    <div id="asos" class="tabs--customer__item" role="tabpanel">
                                        <div class="tabs--customer__item__content">
                                            <p class="tabs--customer__item__heading">ASOS delivers global personalized shopping recommendations with Azure Cosmos DB</p>



                                            <blockquote>
                                                <p lang="en">"We chose Azure Cosmos DB because of its global distribution and ability to handle heavy seasonal bursts like Black Friday…. We can distribute our data models to be near the microservices they're serving—wherever that is in the world."</p>
                                            </blockquote>
                                            <cite>Bob Strudwick, Chief Technology Officer</cite>

                                            <ul class="list--links">
                                                <li>
                                                    <a href="https://customers.microsoft.com/en-us/story/asos-retail-and-consumer-goods-azure" class="arrow-link" aria-label="Read the story for ASOS" data-bi-an="customer-tabs" data-bi-tn="arrow-link">Read the story</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="tabs--customer__item__image">
                                            <img loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/cust-tab-asos.jpg" alt="ASOS">
                                        </div>
                                    </div>
                                    <div id="symantec" class="tabs--customer__item" role="tabpanel">
                                        <div class="tabs--customer__item__content">
                                            <p class="tabs--customer__item__heading">Symantec saves 40 percent on database costs by migrating to Azure Cosmos DB</p>



                                            <blockquote>
                                                <p lang="en">"Our customers trust us to protect them throughout their ecosystem. So we needed a partner that we could trust to deliver a highly reliable service with ultra-low worldwide latency, at a reasonable cost."</p>
                                            </blockquote>
                                            <cite>Mike Shavell, Technical Director/Architect, Symantec</cite>

                                            <ul class="list--links">
                                                <li>
                                                    <a href="https://customers.microsoft.com/en-us/story/symantec-professionalservices-azurecosmosdb" class="arrow-link" aria-label="Read the story for Symantec" data-bi-an="customer-tabs" data-bi-tn="arrow-link">Read the story</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="tabs--customer__item__image">
                                            <img loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/image-symantec.png" alt="Symantec">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section id="pricing" class="section section--color01" aria-label="Pricing that gives you flexibility and control" data-module="glyph-01">
                            <div class="row ">
                                <div class="column medium-2 medium-offset-2">
                                    <img loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/pricing-details.svg" alt="">
                                </div>
                                <div class="column medium-6 end">
                                    <div class="row column">
                                        <h2>Pricing that gives you flexibility and control</h2>
                                        <p>Find the model that best fits your workload and free options for testing and development. Enjoy virtually unlimited throughput and storage, automatic elastic scalability across regions, and consumption-based serverless options.</p>
                                    </div>
                                    <div class="row row-size2 column">
                                        <a class="button button--ghost" href="/en-us/pricing/details/cosmos-db/" data-bi-an="glyph-01" data-bi-tn="button button--ghost">Explore pricing for Azure Cosmos DB</a>
                                    </div>
                                </div>
                            </div>
                        </section>




                        <section id="developer-resources" class="section" aria-label="Designed for developers, with support for a wide range of APIs" data-module="glyph-02">
                            <div class="row column text-center">
                                <h2>Designed for developers, with support for a wide range of APIs</h2>
                            </div>


                            <div class="row">
                                <div class="column medium-4 end">
                                    <div class="row column">
                                        <span class="icon icon-size6">
                                            <img src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/dev-01-sql-api.svg" alt="">
                                        </span>
                                    </div>
                                    <div class="row row-size2 column">
                                        <h3 class="text-heading4 sd-equalize equalized" data-set="row-1-headings" style="height: 46.7812px;">Core (SQL) API</h3>
                                        <p>Build new apps with ease. Azure Cosmos DB includes native support for <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/how-to-sql-query" data-bi-an="glyph-02" data-bi-tn="undefined">Core (SQL) API</a> and <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/sql/javascript-query-api" data-bi-an="glyph-02" data-bi-tn="undefined">JavaScript</a>. Azure Cosmos DB Core (SQL) API provides a formal programming model for rich queries over JSON items. The Azure Cosmos DB query language is based on the JavaScript programming model, and the Core (SQL) API is rooted in the JavaScript type system, expression evaluation, and function invocation.</p>
                                    </div>
                                </div>
                                <div class="column medium-4 end">
                                    <div class="row column">
                                        <span class="icon icon-size6">
                                            <img src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/dev-02-cassandra.svg" alt="">
                                        </span>
                                    </div>
                                    <div class="row row-size2 column">
                                        <h3 class="text-heading4 sd-equalize equalized" data-set="row-1-headings" style="height: 46.7812px;">Cassandra API</h3>
                                        <p>Deliver Cassandra as a service using the capabilities of Azure Cosmos DB. Use <a href="https://aka.ms/cosmosdb-cassandra-info" data-bi-an="glyph-02" data-bi-tn="undefined">Cassandra SDKs and tools</a>, including existing drivers, to build applications at near-infinite, global scale with SLA-backed capabilities of the Azure Cosmos DB platform. Seamlessly integrate with Azure Managed Instance for Apache Cassandra for hybrid data migration and synchronization.</p>
                                    </div>
                                </div>
                                <div class="column medium-4 end">
                                    <div class="row column">
                                        <span class="icon icon-size6">
                                            <img src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/page/services/cosmosdb/dev-03-mongodb.svg" alt="">
                                        </span>
                                    </div>
                                    <div class="row row-size2 column">
                                        <h3 class="text-heading4 sd-equalize equalized" data-set="row-1-headings" style="height: 46.7812px;">Azure Cosmos DB API for MongoDB</h3>
                                        <p>Use Azure Cosmos DB as a fully managed database service for your MongoDB app, with few code changes and native API support for <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/mongodb-introduction" data-bi-an="glyph-02" data-bi-tn="undefined">MongoDB</a> data, giving your app the benefits of a cloud-native platform.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-size4 column text-center">
                                <a class="button button--ghost" href="https://docs.microsoft.com/en-us/azure/cosmos-db/" data-bi-an="glyph-02" data-bi-tn="button button--ghost">Learn more about APIs</a>
                            </div>
                        </section>





                        <section id="security" class="section section--color01" data-module="content-security-02">
                            <div class="row">
                                <div class="column medium-8 medium-centered text-center">
                                    <h2>Why Azure for security?</h2>
                                </div>
                            </div>
                            <div class="row row--middled-small">
                                <div class="column medium-8">
                                    <img loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/images/shared/services/security-portal.png" class="" alt="" role="presentation">
                                </div>
                                <div class="column medium-4">
                                    <div class="row column">
                                        <ul class="checklist--default">
                                            <li>
                                                Microsoft invests more than <strong>USD1 billion annually</strong> on cybersecurity research and development. </li>
                                            <li>
                                                We employ more than <b>3,500 security experts</b> who are dedicated to data security and privacy. </li>
                                            <li>
                                                Azure has <b>more compliance certifications</b> than any other cloud provider. View the <a href="https://www.microsoft.com/trustcenter/compliance/complianceofferings" data-bi-an="content-security-02" data-bi-tn="undefined">comprehensive list</a>. </li>
                                        </ul>
                                    </div>
                                    <div class="row row-size3 column">
                                        <a href="/en-us/overview/security/" class="arrow-link" data-bi-an="content-security-02" data-bi-tn="arrow-link">Learn more about security on Azure</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="getting-started" class="section" data-module="get-started-01">
                            <div class="row column text-center">
                                <h2>Everything you need to get started</h2>
                            </div>
                            <div class="row row-size5 column">
                                <div class="card card-size2 card--gray20">
                                    <div class="row text-center">
                                        <div class="column medium-4 column--step-circle" data-num="1">
                                            <div class="row row-size3 column">
                                                <img alt="" class="icon icon-size6" loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/svg/free-account.svg">
                                            </div>
                                            <div class="row row-size2 column">
                                                <p><a href="https://docs.microsoft.com/en-us/azure/cosmos-db/optimize-dev-test" data-bi-an="get-started-01" data-bi-tn="undefined">Dev/test</a> for free with Azure Cosmos DB.</p>

                                            </div>
                                        </div>
                                        <div class="column medium-4 column--step-circle" data-num="2">
                                            <div class="row row-size3 column">
                                                <img alt="" class="icon icon-size6" loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/svg/azure-backup.svg">
                                            </div>
                                            <div class="row row-size2 column">
                                                <p>Find <a href="/en-us/resources/azure-cosmos-db-onboarding-best-practices/" data-bi-an="get-started-01" data-bi-tn="undefined">best practices and optimization tips</a>.</p>

                                            </div>
                                        </div>
                                        <div class="column medium-4 column--step-circle" data-num="3">
                                            <div class="row row-size3 column">
                                                <img alt="" class="icon icon-size6" loading="lazy" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/svg/upright-arrow-alt.svg">
                                            </div>
                                            <div class="row row-size2 column">
                                                <p>Keep building your <a href="https://docs.microsoft.com/en-us/learn/browse/?products=azure-cosmos-db" data-bi-an="get-started-01" data-bi-tn="undefined">skills</a>.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="documentation" class="section" aria-label="Documentation, training, and migration resources" data-module="content-documentation-01">
                            <div class="row">
                                <div class="column medium-3">
                                    <h2>Documentation, training, and migration resources</h2>
                                </div>
                                <div class="column medium-3 end">
                                    <h3 class="text-heading4">Community and Azure support</h3>
                                    <p>Follow Azure Cosmos DB on <a href="https://www.twitter.com/AzureCosmosDB" data-bi-an="content-documentation-01" data-bi-tn="undefined">Twitter</a> and <a href="https://www.youtube.com/azurecosmosdb" data-bi-an="content-documentation-01" data-bi-tn="undefined">YouTube</a>. Read the <a href="https://devblogs.microsoft.com/cosmosdb/" data-bi-an="content-documentation-01" data-bi-tn="undefined">Azure Cosmos DB blog</a>. Ask questions and get support from Microsoft engineers and Azure community experts on <a href="https://stackoverflow.com/questions/tagged/azure-cosmosdb" data-bi-an="content-documentation-01" data-bi-tn="undefined">Stack Overflow</a>. Find samples and repositories on <a href="https://github.com/topics/azure?q=cosmos+db&amp;unscoped_q=cosmos+db" data-bi-an="content-documentation-01" data-bi-tn="undefined">GitHub</a>.</p>
                                </div>
                                <div class="column medium-3 end">
                                    <h3 class="text-heading4">Tutorials and labs</h3>
                                    <ul class="list--links">
                                        <li>Develop an app: <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/sql-api-get-started" data-bi-an="content-documentation-01" data-bi-tn="undefined">Core (SQL)</a> | <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/tutorial-develop-mongodb-nodejs" data-bi-an="content-documentation-01" data-bi-tn="undefined">MongoDB</a> | <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/create-cassandra-api-account-java" data-bi-an="content-documentation-01" data-bi-tn="undefined">Cassandra</a> | <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/tutorial-develop-table-dotnet" data-bi-an="content-documentation-01" data-bi-tn="undefined">Table</a> | <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/create-graph-dotnet" data-bi-an="content-documentation-01" data-bi-tn="undefined">Gremlin</a></li>
                                        <li>Migrate data: <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/import-data" data-bi-an="content-documentation-01" data-bi-tn="undefined">Core (SQL)</a> | <a href="https://docs.microsoft.com/en-us/azure/dms/tutorial-mongodb-cosmos-db?toc=/azure/cosmos-db/toc.json" data-bi-an="content-documentation-01" data-bi-tn="undefined">MongoDB</a> | <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/cassandra-import-data" data-bi-an="content-documentation-01" data-bi-tn="undefined">Cassandra</a> | <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/table-import" data-bi-an="content-documentation-01" data-bi-tn="undefined">Table</a></li>
                                        <li>Query data: <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/tutorial-query-sql-api" data-bi-an="content-documentation-01" data-bi-tn="undefined">Core (SQL)</a> | <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/tutorial-query-mongodb" data-bi-an="content-documentation-01" data-bi-tn="undefined">MongoDB</a> | <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/create-cassandra-api-account-java" data-bi-an="content-documentation-01" data-bi-tn="undefined">Cassandra</a> | <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/tutorial-query-table" data-bi-an="content-documentation-01" data-bi-tn="undefined">Table</a> | <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/tutorial-query-graph" data-bi-an="content-documentation-01" data-bi-tn="undefined">Gremlin</a></li>
                                        <li>No-ETL analytics: <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/synapse-link/" data-bi-an="content-documentation-01" data-bi-tn="undefined">Azure Synapse Link</a></li>
                                    </ul>
                                </div>
                                <div class="column medium-3 end">
                                    <h3 class="text-heading4">More resources</h3>
                                    <ul class="list--links">
                                        <li>
                                            <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/throughput-serverless" aria-label="Choose between serverless and provisioned throughput" data-bi-an="content-documentation-01" data-bi-tn="undefined">Choose between serverless and provisioned throughput</a>
                                        </li>
                                        <li>
                                            <a href="https://aka.ms/managed-instance-for-apache-cassandra-docs" aria-label="Azure Managed Instance for Apache Cassandra documentation" data-bi-an="content-documentation-01" data-bi-tn="undefined">Azure Managed Instance for Apache Cassandra documentation</a>
                                        </li>
                                        <li>
                                            <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/" aria-label="See all documentation" data-bi-an="content-documentation-01" data-bi-tn="undefined">See all documentation</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>



                        <section id="updates-announcements" class="section section-size6" aria-label="Azure Cosmos DB updates, blogs, and announcements" data-module="announcements-01">
                            <div class="row row--middled-small">
                                <div class="medium-9 column ">
                                    <h2>Azure Cosmos DB updates, blogs, and announcements</h2>
                                </div>
                                <div class="medium-3 column">
                                    <a href="/en-us/updates/?product=cosmos-db" class="arrow-link pull-right" data-bi-an="announcements-01" data-bi-tn="arrow-link pull-right">View all updates</a>
                                </div>
                            </div>
                            <div class="row column">
                                <ul class="masonry-grid">
                                    <li class="masonry-grid__brick">
                                        <div class="card card--update" style="cursor: pointer">

                                            <p class="card__heading">UPDATE</p>
                                            <a class="card__link" data-bi-slot="1" href="/en-us/updates/azure-cosmos-db-python-sdk-async-io-support-in-public-preview/" data-bi-an="announcements-01" data-bi-tn="card__link">Azure Cosmos DB: Python SDK async IO support in public preview</a>


                                        </div>

                                    </li>
                                    <li class="masonry-grid__brick">
                                        <div class="card card--update" style="cursor: pointer">

                                            <p class="card__heading">UPDATE</p>
                                            <a class="card__link" data-bi-slot="2" href="/en-us/updates/azure-cosmos-db-names-indexes-for-cassandra-api-now-in-general-availability/" data-bi-an="announcements-01" data-bi-tn="card__link">Azure Cosmos DB: Names indexes for Cassandra API now in general availability</a>


                                        </div>

                                    </li>
                                    <li class="masonry-grid__brick">
                                        <div class="card card--update" style="cursor: pointer">

                                            <p class="card__heading">UPDATE</p>
                                            <a class="card__link" data-bi-slot="3" href="/en-us/updates/azure-cosmos-db-glowroot-support-for-cassandra-api-in-general-availability/" data-bi-an="announcements-01" data-bi-tn="card__link">Azure Cosmos DB: Glowroot support for Cassandra API in general availability</a>


                                        </div>

                                    </li>
                                    <li class="masonry-grid__brick">
                                        <div class="card card--update" style="cursor: pointer">

                                            <p class="card__heading">UPDATE</p>
                                            <a class="card__link" data-bi-slot="4" href="/en-us/updates/azure-synapse-link-for-azure-cosmos-db-custom-partitioning-support-in-public-preview/" data-bi-an="announcements-01" data-bi-tn="card__link">Azure Synapse Link for Azure Cosmos DB: Custom partitioning support in public preview</a>


                                        </div>

                                    </li>
                                    <li class="masonry-grid__brick">
                                        <div class="card card--update" style="cursor: pointer">

                                            <p class="card__heading">UPDATE</p>
                                            <a class="card__link" data-bi-slot="5" href="/en-us/updates/cost-saving-recommendations-in-azure-advisor-for-azure-cosmos-db-now-generally-available/" data-bi-an="announcements-01" data-bi-tn="card__link">Cost saving recommendations in Azure Advisor for Azure Cosmos DB now generally available</a>


                                        </div>

                                    </li>
                                    <li class="masonry-grid__brick">
                                        <div class="card card--update" style="cursor: pointer">

                                            <p class="card__heading">UPDATE</p>
                                            <a class="card__link" data-bi-slot="6" href="/en-us/updates/azure-cosmos-db-server-side-retries-for-cassandra-api-in-public-preview/" data-bi-an="announcements-01" data-bi-tn="card__link">Azure Cosmos DB: Server side retries for Cassandra API in public preview</a>


                                        </div>

                                    </li>
                                    <li class="masonry-grid__brick">
                                        <div class="card card--update" style="cursor: pointer">

                                            <p class="card__heading">UPDATE</p>
                                            <a class="card__link" data-bi-slot="7" href="/en-us/updates/azure-cosmos-db-logic-apps-standard-connector-in-public-preview/" data-bi-an="announcements-01" data-bi-tn="card__link">Azure Cosmos DB Logic Apps Standard Connector in public preview</a>


                                        </div>

                                    </li>
                                    <li class="masonry-grid__brick">
                                        <div class="card card--update" style="cursor: pointer">

                                            <p class="card__heading">UPDATE</p>
                                            <a class="card__link" data-bi-slot="8" href="/en-us/updates/azure-cosmos-db-partial-document-update-now-in-general-availability/" data-bi-an="announcements-01" data-bi-tn="card__link">Azure Cosmos DB: Partial document update now in general availability</a>


                                        </div>

                                    </li>
                                    <li class="masonry-grid__brick">
                                        <div class="card card--update" style="cursor: pointer">

                                            <p class="card__heading">UPDATE</p>
                                            <a class="card__link" data-bi-slot="9" href="/en-us/updates/provisioned-throughput-spending-limit-for-azure-cosmos-db-in-general-availability/" data-bi-an="announcements-01" data-bi-tn="card__link">Provisioned throughput spending limit for Azure Cosmos DB in general availability</a>


                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </section>


                        <section id="faq" class="section" aria-label="Frequently asked questions" data-module="faq-01">
                            <div class="row">
                                <div class="column medium-3">
                                    <div class="row column">
                                        <h2>Frequently asked questions</h2>
                                    </div>



                                </div>
                                <div class="column medium-8 medium-offset-1">

                                    <ul class="faq">
                                        <li class="faq__item">
                                            <button type="button" class="faq__question" aria-expanded="false" aria-controls="17500c9c" data-bi-slot="1" data-bi-id="faq-1" data-bi-an="faq-01" data-bi-tn="faq__question">


                                                What is Azure Cosmos DB?
                                            </button>
                                            <div class="faq__answer" id="17500c9c">
                                                <p>Azure Cosmos DB is a globally distributed, multi-model database service for any scale. The service was built from the ground up with global distribution and horizontal scale at its core.</p>
                                                <p>With turnkey global distribution across any number of Azure regions, Azure Cosmos DB transparently scales and replicates your data wherever your users are. Elastically scale your writes and reads all around the globe and pay only for what you need. Azure Cosmos DB provides native support for NoSQL and OSS APIs, including MongoDB, Cassandra, Gremlin, etcd, Spark, and SQL. It also offers multiple well-defined consistency models, guaranteed single-digit-millisecond read and write latencies at the 99th percentile, and guaranteed 99.999-percent high availability with multi-homing anywhere in the world—all backed by industry-leading, comprehensive SLAs.</p>
                                                <p>Azure Cosmos DB is a fully managed service that enables you to offload the administrative burdens of operating and scaling distributed databases to Azure, so you don’t have to worry about managing VMs, hardware provisioning, setup and configuration, capacity, replication, software patching, or cluster scaling.</p>
                                            </div>
                                        </li>
                                        <li class="faq__item">
                                            <button type="button" class="faq__question" aria-expanded="false" aria-controls="e6671740" data-bi-slot="2" data-bi-id="faq-2" data-bi-an="faq-01" data-bi-tn="faq__question">


                                                What is turnkey global distribution?
                                            </button>
                                            <div class="faq__answer" id="e6671740">
                                                <p>With Azure Cosmos DB, you can configure your databases to be globally distributed and available in any of the Azure regions. To minimize latency, place the data close to where your users are.</p>
                                                <p>Azure Cosmos DB transparently replicates the data to all the regions associated with your Azure Cosmos DB account. It provides a single system image of your globally distributed Azure Cosmos DB database and containers that your application can read and write to locally.</p>
                                                <p>With turnkey global distribution, you can add or remove the regions associated with your account at any time. Your application doesn't need to be paused or redeployed to add or remove a region. High availability is maintained through multi-homing capabilities provided natively by the service. <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/distribute-data-globally" data-bi-an="faq-01" data-bi-tn="undefined">Learn more</a>.</p>
                                                <p></p>
                                            </div>
                                        </li>
                                        <li class="faq__item">
                                            <button type="button" class="faq__question" aria-expanded="false" aria-controls="e7eca234" data-bi-slot="3" data-bi-id="faq-3" data-bi-an="faq-01" data-bi-tn="faq__question">


                                                How does Azure Cosmos DB manage consistency?
                                            </button>
                                            <div class="faq__answer" id="e7eca234">
                                                <p>Azure Cosmos DB approaches data consistency as a spectrum of choices, with more options than the two extremes of strong and eventual consistency.</p>
                                                <p>Choose from five well-defined models on the consistency spectrum:</p>
                                                <ul aria-label="Five well-defined models">
                                                    <li>Strong</li>
                                                    <li>Bounded staleness</li>
                                                    <li>Session</li>
                                                    <li>Consistent prefix</li>
                                                    <li>Eventual</li>
                                                </ul>
                                                <p>Each model is backed by comprehensive SLAs. <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/consistency-levels-tradeoffs" data-bi-an="faq-01" data-bi-tn="undefined">Learn more.</a></p>
                                            </div>
                                        </li>
                                        <li class="faq__item">
                                            <button type="button" class="faq__question" aria-expanded="false" aria-controls="8b9c6555" data-bi-slot="4" data-bi-id="faq-4" data-bi-an="faq-01" data-bi-tn="faq__question">


                                                What are the Azure Cosmos DB SLAs?
                                            </button>
                                            <div class="faq__answer" id="8b9c6555">
                                                <p>As a globally distributed database, Azure Cosmos DB provides comprehensive SLAs that encompass throughput, latency at the 99th percentile, consistency, and high availability. <a href="/en-us/support/legal/sla/cosmos-db/" data-bi-an="faq-01" data-bi-tn="undefined">Get more information</a>.</p>
                                            </div>
                                        </li>
                                        <li class="faq__item">
                                            <button type="button" class="faq__question" aria-expanded="false" aria-controls="f3599ce1" data-bi-slot="5" data-bi-id="faq-5" data-bi-an="faq-01" data-bi-tn="faq__question">


                                                How does Azure Cosmos DB support availability, scalability, and durability?
                                            </button>
                                            <div class="faq__answer" id="f3599ce1">Azure Cosmos DB transparently replicates your data across all the Azure regions associated with your Azure Cosmos DB account. The service applies multiple layers of redundancy to your data. <a href="https://docs.microsoft.com/en-us/azure/cosmos-db/high-availability" data-bi-an="faq-01" data-bi-tn="undefined">Get more details</a>.</div>
                                        </li>
                                        <li class="faq__item">
                                            <button type="button" class="faq__question" aria-expanded="false" aria-controls="02494e50" data-bi-slot="6" data-bi-id="faq-6" data-bi-an="faq-01" data-bi-tn="faq__question">


                                                What is the Azure Cosmos DB API for MongoDB?
                                            </button>
                                            <div class="faq__answer" id="02494e50">The Azure Cosmos DB API for MongoDB provides you with the ability to interact with Azure Cosmos DB as if it were a MongoDB database, without having to manage the database infrastructure itself. This means that nearly all your favorite MongoDB tooling, SDKs, and applications will continue to work. For detailed compatibility information, <a href="https://aka.ms/cosmosdb-mongo-latest-compat" data-bi-an="faq-01" data-bi-tn="undefined">see our documentation</a>.</div>
                                        </li>
                                        <li class="faq__button-container faq__item">
                                            <button type="button" class="faq__question faq__load-more-button" data-bi-an="faq-01" data-bi-tn="faq__question faq__load-more-button">Load more FAQs</button>
                                        </li>
                                        <li class="faq__item" style="display: none;">
                                            <button type="button" class="faq__question" aria-expanded="false" aria-controls="498b56ab" data-bi-slot="7" data-bi-id="faq-7" data-bi-an="faq-01" data-bi-tn="faq__question">


                                                What is the Azure Cosmos DB API for MongoDB v4.0 support?
                                            </button>
                                            <div class="faq__answer" id="498b56ab">With server version 4.0 support in Azure Cosmos DB API for MongoDB, it's easier to model complex transactional business logic without the complex error handling logic. V4.0 support introduces new features such as multi-document transactions, retryable writes, and more.</div>
                                        </li>
                                        <li class="faq__item" style="display: none;">
                                            <button type="button" class="faq__question" aria-expanded="false" aria-controls="0eb05667" data-bi-slot="8" data-bi-id="faq-8" data-bi-an="faq-01" data-bi-tn="faq__question">


                                                What is the Azure Cosmos DB Cassandra API?
                                            </button>
                                            <div class="faq__answer" id="0eb05667">The Azure Cosmos DB Cassandra API enables you to interact with data stored in Azure Cosmos DB using the Cassandra Query Language (CQL), Cassandra-based tools (like cqlsh) and existing Apache drivers compliant with CQLv4. This means your existing Cassandra application can now communicate with the Azure Cosmos DB Cassandra API. Coming soon, the API will also connect with the Azure Managed Instance for Apache Cassandra (upon GA).</div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </section>

                        <script type="application/ld+json">
                            {
                                "@context": "https://schema.org",
                                "@type": "FAQPage",
                                "mainEntity": [{
                                        "@type": "Question",
                                        "name": "What is Azure Cosmos DB?",
                                        "acceptedAnswer": {
                                            "@type": "Answer",
                                            "text": "&lt;p&gt;Azure Cosmos DB is a globally distributed, multi-model database service for any scale. The service was built from the ground up with global distribution and horizontal scale at its core.&lt;/p&gt;&lt;p&gt;With turnkey global distribution across any number of Azure regions, Azure Cosmos DB transparently scales and replicates your data wherever your users are. Elastically scale your writes and reads all around the globe and pay only for what you need. Azure Cosmos DB provides native support for NoSQL and OSS APIs, including MongoDB, Cassandra, Gremlin, etcd, Spark, and SQL. It also offers multiple well-defined consistency models, guaranteed single-digit-millisecond read and write latencies at the 99th percentile, and guaranteed 99.999-percent high availability with multi-homing anywhere in the world—all backed by industry-leading, comprehensive SLAs.&lt;/p&gt;&lt;p&gt;Azure Cosmos DB is a fully managed service that enables you to offload the administrative burdens of operating and scaling distributed databases to Azure, so you don’t have to worry about managing VMs, hardware provisioning, setup and configuration, capacity, replication, software patching, or cluster scaling.&lt;/p&gt;"
                                        }
                                    },
                                    {
                                        "@type": "Question",
                                        "name": "What is turnkey global distribution?",
                                        "acceptedAnswer": {
                                            "@type": "Answer",
                                            "text": "&lt;p&gt;With Azure Cosmos DB, you can configure your databases to be globally distributed and available in any of the Azure regions. To minimize latency, place the data close to where your users are.&lt;/p&gt;&lt;p&gt;Azure Cosmos DB transparently replicates the data to all the regions associated with your Azure Cosmos DB account. It provides a single system image of your globally distributed Azure Cosmos DB database and containers that your application can read and write to locally.&lt;/p&gt;&lt;p&gt;With turnkey global distribution, you can add or remove the regions associated with your account at any time. Your application doesn&#39;t need to be paused or redeployed to add or remove a region. High availability is maintained through multi-homing capabilities provided natively by the service. &lt;a href=&quot;https://docs.microsoft.com/en-us/azure/cosmos-db/distribute-data-globally&quot;&gt;Learn more&lt;/a&gt;.&lt;p&gt;"
                                        }
                                    },
                                    {
                                        "@type": "Question",
                                        "name": "How does Azure Cosmos DB manage consistency?",
                                        "acceptedAnswer": {
                                            "@type": "Answer",
                                            "text": "&lt;p&gt;Azure Cosmos DB approaches data consistency as a spectrum of choices, with more options than the two extremes of strong and eventual consistency.&lt;/p&gt;&lt;p&gt;Choose from five well-defined models on the consistency spectrum:&lt;/p&gt; &
                                                lt;ul aria - label = & quot;Five well - defined models & quot; & gt; & lt;li & gt;Strong & lt;
                                            /li&gt;&lt;li&gt;Bounded staleness&lt;/li & gt; & lt;li & gt;Session & lt;
                                            /li&gt;&lt;li&gt;Consistent prefix&lt;/li & gt; & lt;li & gt;Eventual & lt;
                                            /li&gt;&lt;/ul & gt; & lt;p & gt;Each model is backed by comprehensive SLAs. & lt;a href = & quot;https: //docs.microsoft.com/en-us/azure/cosmos-db/consistency-levels-tradeoffs&quot;&gt;Learn more.&lt;/a&gt;&lt;/p&gt;"
                                        }
                                    },
                                    {
                                        "@type": "Question",
                                        "name": "What are the Azure Cosmos DB SLAs?",
                                        "acceptedAnswer": {
                                            "@type": "Answer",
                                            "text": "&lt;p&gt;As a globally distributed database, Azure Cosmos DB provides comprehensive SLAs that encompass throughput, latency at the 99th percentile, consistency, and high availability. &lt;a href=&quot;/en-us/support/legal/sla/cosmos-db/&quot;&gt;Get more information&lt;/a&gt;.&lt;/p&gt;"
                                        }
                                    },
                                    {
                                        "@type": "Question",
                                        "name": "How does Azure Cosmos DB support availability, scalability, and durability?",
                                        "acceptedAnswer": {
                                            "@type": "Answer",
                                            "text": "Azure Cosmos DB transparently replicates your data across all the Azure regions associated with your Azure Cosmos DB account. The service applies multiple layers of redundancy to your data. &lt;a href=&quot;https://docs.microsoft.com/en-us/azure/cosmos-db/high-availability&quot;&gt;Get more details&lt;/a&gt;."
                                        }
                                    },
                                    {
                                        "@type": "Question",
                                        "name": "What is the Azure Cosmos DB API for MongoDB?",
                                        "acceptedAnswer": {
                                            "@type": "Answer",
                                            "text": "The Azure Cosmos DB API for MongoDB provides you with the ability to interact with Azure Cosmos DB as if it were a MongoDB database, without having to manage the database infrastructure itself. This means that nearly all your favorite MongoDB tooling, SDKs, and applications will continue to work. For detailed compatibility information, &lt;a href=&quot;https://aka.ms/cosmosdb-mongo-latest-compat&quot;&gt;see our documentation&lt;/a&gt;."
                                        }
                                    },
                                    {
                                        "@type": "Question",
                                        "name": "What is the Azure Cosmos DB API for MongoDB v4.0 support?",
                                        "acceptedAnswer": {
                                            "@type": "Answer",
                                            "text": "With server version 4.0 support in Azure Cosmos DB API for MongoDB, it&#39;s easier to model complex transactional business logic without the complex error handling logic. V4.0 support introduces new features such as multi-document transactions, retryable writes, and more."
                                        }
                                    },
                                    {
                                        "@type": "Question",
                                        "name": "What is the Azure Cosmos DB Cassandra API?",
                                        "acceptedAnswer": {
                                            "@type": "Answer",
                                            "text": "The Azure Cosmos DB Cassandra API enables you to interact with data stored in Azure Cosmos DB using the Cassandra Query Language (CQL), Cassandra-based tools (like cqlsh) and existing Apache drivers compliant with CQLv4. This means your existing Cassandra application can now communicate with the Azure Cosmos DB Cassandra API. Coming soon, the API will also connect with the Azure Managed Instance for Apache Cassandra (upon GA)."
                                        }
                                    }

                                ]
                            }
                        </script>


                        <section class="section section--gray90" aria-label="Ready when you are – start building applications with Azure Cosmos DB" data-module="cta-band-centered">
                            <div class="row column text-center">
                                <div class="center-items">
                                    <h2>Ready when you are – start building applications with Azure Cosmos DB</h2>

                                    <a href="/en-us/free/cosmos-db/" class="button button--free-account" aria-label="Start free" data-bi-an="cta-band-centered" data-bi-tn="button button--free-account">Start free</a>
                                </div>
                            </div>
                        </section>






                        <style>
                            #live-engage-btn {
                                position: fixed;
                                bottom: 0;
                                right: 12px;
                                z-index: 1000;
                                font-weight: 300
                            }

                            #live-engage-btn:focus {
                                outline-offset: -4px
                            }

                            #lpChatAzure {
                                display: none
                            }

                            #lp-iframe-container {
                                border: none;
                                bottom: 0;
                                box-shadow: 0 5px 15px 0 #00000033;
                                height: 500px;
                                left: auto !important;
                                min-width: 300px;
                                max-width: 350px;
                                padding: 0;
                                position: fixed;
                                right: 0;
                                top: auto !important;
                                z-index: 1001
                            }

                            #iFrame {
                                height: 100%;
                                width: 100%;
                                border: 0
                            }

                            #lp-proactive-invite {
                                position: fixed;
                                z-index: 10400;
                                bottom: -24px;
                                right: 11px
                            }

                            #lp-proactive-invite .chatContainer {
                                width: 272px;
                                height: 277px;
                                color: #000;
                                line-height: 0;
                                position: relative;
                                border: none !important;
                                background: url(/images/shared/proactive-chat/main-v2.png);
                                background-repeat: no-repeat;
                                background-color: #fff;
                                margin: auto;
                                background-size: contain;
                                box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, .034), 0 6.7px 5.3px rgba(0, 0, 0, .048), 0 12.5px 10px rgba(0, 0, 0, .06), 0 22.3px 17.9px rgba(0, 0, 0, .072), 0 41.8px 33.4px rgba(0, 0, 0, .086), 0 100px 80px rgba(0, 0, 0, .12)
                            }

                            #lp-proactive-invite .chatContainer .chat-cta {
                                text-align: center;
                                font-size: 24px;
                                font-weight: 600;
                                position: relative;
                                top: 160px
                            }

                            #lp-proactive-invite .chatContainer .chat-buttons {
                                position: relative;
                                top: 200px;
                                width: 100%;
                                display: flex;
                                gap: 1em;
                                justify-content: center
                            }
                        </style>

                        <div class="onyx-variation" data-name="liveengage-chat-killswitch" data-active="control" style="display: none;">
                        </div>

                        <link rel="preconnect" href="//publisher.liveperson.net" crossorigin="">
                        <!-- Empty button containers where buttons will be injected.  The container can be just about anything, we're just looking for the id. -->
                        <div id="lpChatAzure" type="button"></div>
                        <script>
                            var lpConfig = {
                                "firstname": "",
                                "lastname": "",
                                "email": "",
                                "company": "",
                                "renderCustomTextChatButton": "False",
                                "renderChatButtonHere": "False",
                                "siteId": "60270350",
                                "culture": "en-us"
                            };
                            window.lpConfig = lpConfig;
                        </script>
                        <script defer="" src="//azurecomcdn.azureedge.net/cvt-e770c45a1fbbc82c73c2b7c30dbbd084f8243c6fbde547c7883e16e4570546f3/scripts/Acom/Components/LivePersonChat-iframe.js" crossorigin="anonymous" onerror="cdnfallback()"></script>





                    </main>

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