<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra BigData</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra BigData">

    <link rel="icon" type="ico" href="https://www.nubeera.com/img/logo.ico">
    <!--icon on browser tab -->
    <!-- Theme CSS Bootstrap file-->
    <link id="theme-style" rel="stylesheet" href="../../assets/css/theme.css">

    <!-- FontAwesome JS-->
    <script defer src="../../assets/fontawesome/js/all.min.js"></script><!-- all icons -->

    <link rel="stylesheet" type="text/css" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" type="text/css" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" type="text/css" href="https://www.nubeera.com/styles/style.nav1.css">

</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../templates/navbar.php'; ?>

    <div class="page-header theme-bg-dark py-5 text-center position-relative">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
            <h1 class="page-heading single-col-max mx-auto">BigData</h1>
            <div class="page-intro single-col-max mx-auto">Everything you need to achieve your goals!</div>
            <div class="main-search-box pt-3 d-block mx-auto">
                <form class="search-form w-100" autocomplete="chrome-off">
                    <input type="text" autocomplete="chrome-off" id="searchbarbox" onkeyup="showresults()" placeholder="Search query..." name="search" class="form-control search-input">

                    <button id="clearBtn" class="clear-btn"><i class="fas fa-times"></i></button>
                    <i class="fas fa-microphone mic-btn"></i>
                    <button type="button" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>

    </div>
    <!--//page-header-->

    <ul class="breadcrumb">
        <li><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i> </a></li>
        <li>BigData</li>
    </ul>

    <div id="demo">

    </div>
    <div class="page-content">
        <div class="container">
            <div class="docs-overview py-5">
                <div class="row justify-content-center">

                    <div class="col-12 col-lg-4 py-3" hidden>
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder mr-2">
                                        <img class="svg-inline--fa" style="width:auto" src="" class="svg-inline--fa">D </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">DataBricks</span>
                                </h5>
                                <div class="card-text">
                                    DataBricks - BigData
                                </div>
                                <a class="card-link-mask" href="#"></a>
                            </div>
                            <!--//card-body-->
                        </div>
                        <!--//card-->
                    </div>

                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder mr-2">
                                        <img class="svg-inline--fa" style="width:auto" src="" class="svg-inline--fa">S </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">Spark</span>
                                </h5>
                                <div class="card-text">
                                    Spark - BigData
                                </div>
                                <a class="card-link-mask" href="spark/"></a>
                            </div>
                            <!--//card-body-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->

                </div>
                <!--//row-->
            </div>
            <!--//container-->
        </div>
        <!--//container-->
    </div>
    <!--//page-content-->

    <?php require "../../templates/footer_outer.php" ?>

    <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <script src="https://www.nubeera.com/js/navmenu.js"></script>

</body>

</html>