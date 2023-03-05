<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docs Sitemap</title>
    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-3/css/bootstrap.min.css" integrity="sha512-hugT+JEQi0vXZbvspjv4x2M7ONBvsLR9IFTEQAYoUsmk7s1rRc2u7I6b4xa14af/wZ+Nw7Aspf3CtAfUOGyflA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="styling/nav-bar-style.css">
    <link rel="stylesheet" type="text/css" href="styling/sitemap-style.css">

</head>

<body>

    <div class="container-fluid navbar-cont p-0">
        <nav class="navbar navbar-expand-sm justify-content-unset justify-content-sm-between">
            <a href="https://nubeera.com/" class="navbar-brand mr-auto mr-sm-3"><img src="media/images/logo.ico" alt="" width="75px"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#search">
                <i class="fas fa-search"></i>
            </button>
            <a href="#" class=""><i class="fas fa-user-plus d-sm-none fa-lg mx-3" style="color: black;"></i></a>
            <div class="collapse show navbar-collapse justify-content-end no-transition" id="search">
                <form action="" class="form-inline no-transition">
                    <button class="btn search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    <input type="search" class="form-control search-input">
                </form>
            </div>
            <span class="signup-btn d-none d-sm-inline-block"><a href="#"><span class="">Signup</span></a></span>
        </nav>
    </div>


    <div class="container-fluid p-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-med">
                <div class="col-12 col-md-4 text-center text-md-left px-5 py-3">
                    <h5>O. CORE</h5>
                    <ul class="list-unstyled">
                        <li>
                            <span> <a href="courses/core/linux/contents/"> Linux</a></span>
                        </li>
                        <li>
                            <span>SQL</span>
                        </li>
                        <li>
                            <span><a href="courses/core/python/contents/"> Python</a></span>
                        </li>
                        <li>
                            <span><a href="courses/core/git/">Git</a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 text-center text-md-left px-5 py-3">
                    <h5>A. Analytics</h5>
                    <ul class="list-unstyled">
                        <li>
                            <span>AI</span>
                        </li>
                        <li>
                            <span>ML</span>
                        </li>
                        <li>
                            <span>NN</span>
                        </li>
                        <li>
                            <span>NLP</span>
                        </li>
                        <li>
                            <span>NLU</span>
                        </li>
                        <li>
                            <span>R</span>
                        </li>
                        <li>
                            <span>Python</span>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 text-center text-md-left px-5 py-3">
                    <h5>B. BigData</h5>
                    <ul class="list-unstyled">
                        <li>
                            <span role="button" data-toggle="collapse" data-target="#spark">Spark <i class="fas fa-chevron-down fa-sm"></i></span>
                            <ul class="collapse show py-1 px-2 list-unstyled" id="spark">
                                <li><a href="courses/bigdata/spark/py_spark/">Pyspark</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>Databricks</span>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 text-center text-md-left px-5 py-3">
                    <h5>C. Cloud Computing</h5>
                    <ul class="list-unstyled">
                        <li>
                            <span> <a href="courses/cloud/aws/"> AWS</a></span>
                        </li>
                        <li>
                            <span> <a href="courses/cloud/azure/"> Azure</a></span>
                        </li>
                        <li>
                            <span>GCP</span>
                        </li>
                        <li>
                            <span role="button" data-toggle="collapse" data-target="#c_devops">c_devops <i class="fas fa-chevron-down fa-sm"></i></span>
                            <ul class="collapse show py-1 px-2 list-unstyled" id="c_devops">
                                <li>az_devops</li>
                                <li>Boto3</li>
                            </ul>
                        </li>
                        <li>
                            <span>c_sysops</span>
                        </li>
                        <li>
                            <span>cloudOps</span>
                        </li>
                        <li>
                            <span>CloudTech</span>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 text-center text-md-left px-5 py-3">
                    <h5>D. Devxxx</h5>
                    <ul class="list-unstyled">
                        <li>
                            <span></span>
                            <span role="button" data-toggle="collapse" data-target="#Development">Development <i class="fas fa-chevron-down fa-sm"></i></span>
                            <ul class="collapse show py-1 px-2 list-unstyled" id="Development">
                                <li>
                                    <span role="button" data-toggle="collapse" data-target="#Web"> Web <i class="fas fa-chevron-down fa-sm"></i></span>
                                    <ul class="collapse show py-1 px-2 list-unstyled" id="Web">
                                        <li>
                                            <span role="button" data-toggle="collapse" data-target="#HTML"> HTML <i class="fas fa-chevron-down fa-sm"></i></span>
                                            <ul class="collapse show py-1 px-2 list-unstyled" id="HTML">
                                                <li><a href="courses/devxxx/development/web/html/html_base/">HTML Basics</a></li>
                                                <li><a href="courses/devxxx/development/web/html/html_advanced/">HTML Advanced</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span role="button" data-toggle="collapse" data-target="#CSS"> CSS <i class="fas fa-chevron-down fa-sm"></i></span>
                                            <ul class="collapse show py-1 px-2 list-unstyled" id="CSS">
                                                <li><a href="courses/devxxx/development/web/css/css_base/">CSS Basics</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span>Scripting (Python)</span>
                        </li>
                        <li>
                            <span>DevOps</span>
                        </li>
                        <li>
                            <span role="button" data-toggle="collapse" data-target="#sysops">SysOps <i class="fas fa-chevron-down fa-sm"></i></span>
                            <ul class="collapse show py-1 px-2 list-unstyled" id="sysops">
                                <li><a href="courses/devxxx/sysops/terraform/">Terraform</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>CloudOps</span>
                        </li>
                        <li>
                            <span>AIOps</span>
                        </li>
                        <li>
                            <span>MlOps</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js" integrity="sha512-aDciVjp+txtxTJWsp8aRwttA0vR2sJMk/73ZT7ExuEHv7I5E6iyyobpFOlEFkq59mWW8ToYGuVZFnwhwIUisKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-3/js/bootstrap.bundle.min.js" integrity="sha512-/p1X+oLxmKjJ/IDycHTKer2pmyY/GbLdN4uwWvDM/BN0KKuX/QPo+hkdJB/GT2h6woheGUiV7ZNZc3c+qH/drQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>


<!-- <ul class="list-unstyled">
    <li>
        <span> </span>
    </li>
</ul>

role="button" data-toggle="collapse" data-target="#"
<i class="fas fa-chevron-down fa-sm"></i>
<ul class="collapse show py-1 px-2 list-unstyled" id="">
    <li></li>
    <li></li>
    <li></li>
</ul> -->