<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NubeEra Trainee Dashboard</title>
    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../assets/styling/nav-bar-style.css" rel="stylesheet" type="text/css">
    <link href="../assets/styling/style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <nav class="navbar navbar-expand-sm justify-content-unset justify-content-sm-between shadow w-100 fixed-top">
        <div class="container-fluid navbar-cont p-0">
            <span class="navbar-toggler-icon d-md-none sidebar-toggler" role="button"><i class="fas fa-sm fa-bars"></i></span>
            <a href="https://nubeera.com/" class="navbar-brand mr-auto"><img src="../../media/images/logo.ico" alt="" style="width:4.3rem"></a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <span role="button" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Course Name</span>
                    <div class="dropdown-menu position-absolute">
                        <a href="" class="dropdown-item">course 1</a>
                        <a href="" class="dropdown-item">course 2</a>
                        <a href="" class="dropdown-item">course 3</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown dropdown-menu-right">
                <span role="button" class="profile-btn ml-3 dropdown-toggle" data-toggle="dropdown"><i class="fas fa-xs fa-user-circle" style="font-size: 1.8rem;"></i></span>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="" class="dropdown-item">Account Info</a>
                    <div class="dropdown-divider"></div>
                    <a href="" class="dropdown-item">Change Password</a>
                    <a href="" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <nav id="sidebar" class="vh-100 shadow position-fixed d-none d-md-block">
            <div class="position-relative sidebarContent ">
                <div class="d-flex align-items-center text-center position-relative pl-3 font-weight-bolder sidebarHeader">
                    <p>MATERIALS</p>
                    <span class="position-absolute rounded-circle d-none d-md-block" role='button' id="toggle-btn"><i class="fas fa-chevron-left"></i></span>
                </div>
                <ul class="list-unstyled nav-list">
                    <li class="active"><a href=""><span class="link_icon"><i class="far fa-calendar-alt"></i></span> <span class="link_name">Lecture Schedule</span></a></li>
                    <li><a href=""><span class="link_icon"><i class="fas fa-book-open"></i></span> <span class="link_name">Contents</span></a></li>
                    <li><a href=""><span class="link_icon"><i class="fas fa-clipboard"></i></span> <span class="link_name">Running Notes</span></a></li>
                    <li><a href=""><span class="link_icon"><i class="fas fa-video"></i></span> <span class="link_name">Lecture Recordings</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="content pt-0 pt-md-5" id="main_content">
            <div class="container bg-info text-light">
                <div class="container text-center">
                    WELCOME
                </div>
            </div>

            <span class="chat-btn" role="button" title="group chat"><i class="fas fa-lg fa-comments"></i></span>

            <footer class="bg-light mt-5">
                <div class="container">
                    <div class="row p-4">
                        <div class="col-12 col-md-6 text-center text-md-left">
                            Copyright &copy; <?php echo date("Y"); ?> All Rights Reserved by
                            <a href="https://nubeera.com/">NubeEra</a>.
                        </div>
                        <div class="col-12 col-md-6 text-center text-md-right  mt-3 mt-md-0">
                            <a href="">Logout</a> &nbsp; <a href="">Feedback</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../../scripts/script.js"></script>

</html>