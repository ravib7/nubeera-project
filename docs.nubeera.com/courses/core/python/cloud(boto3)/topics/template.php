<!DOCTYPE html>
<html lang="en">
<head>
    <title>NubeEra S3 in Boto3</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Boto3">

	<link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
      integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <!-- FontAwesome JS-->
	 <script defer src="../../../../assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../../../../assets/css/theme.css">

	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
	 <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
	 <!--<link rel="stylesheet" href="../../Docs.css">-->

<style>
html
{
    font-size: 100%;
}
body
{
   background-color: #F2F4F4  ;
}
ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: #eee;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}
ul.breadcrumb li a:hover {

  text-decoration: underline;
}
.mic-btn{
color: black;
    background: none;
    border: none;
    position: absolute;
    right: 3.5rem;
    top: 0.90rem;
	 margin-right: 0;
	 font-size: 1.1rem;
	 cursor: pointer;
}
.clear-btn
{
	color: #828d9f;
    background: none;
    border: none;
    position: absolute;
    right: 6.8rem;
    top: 0.70rem;
	 margin-right: 0;
}
button#clearBtn
{
display:none;
}
.langDetect
{
	color:  #828d9f;
    background: none;
    border: none;
    position: absolute;
    right: 5.1rem;
    top: 0.90rem;
	 margin-right: 0;
	 font-size: 1.1rem;
	 cursor: pointer;
}
.body-content
{
    outline: gainsboro solid 0.0625rem;
    border-radius: 0.3125rem;
}
.content-box
{
   position: relative;
   right: 0;
   margin-left: 25%;
}
.side-panel-box
{
    height: 100%;
    font-size: 0.8125rem;
    box-shadow: 0px 0px 1.5625rem -0.9375rem gray;
    position: fixed;
    left: 0;
    top: 0;
    padding-top: 5.625rem;
    padding-bottom: 3.125rem;
    z-index: 500;
    display: inline-block;
    background: white;
}
.side-panel
{
   max-height: 100%;
   overflow-x: hidden;
   position: absolute;
}
pre
{
   background: black;
   color: white;
   padding: 0.725rem 2.25rem;
}
@media (max-width: 400px) {

html{
   font-size: 0.1rem;
}
.side-panel-box
{
   display: none;
}
.content-box
{
   width:100%!important;
    margin-left: 0px;
}

}
</style>

</head>

<body>

        <!-- Navigation Bar -->
   <?php require '../../../../folder_navbar_4subfolder.php';?>

                 <!-- <form class="search-form w-100">
					  	<input type="text" placeholder="Search the docs..." onkeyup="showresults()" id="searchbarbox" name="search" class="form-control search-input">

							<button id="clearBtn" class="clear-btn"><i class="fas fa-times"></i></button>
							<i class="fas fa-language langDetect" onclick="">?</i>
							<i class="fas fa-microphone mic-btn"></i>
							<button type="button" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
		        </form> -->

	<!-- <ul class="breadcrumb mb-0">
  <li><a href="../../../../../nubeera.com/">Home</a></li>
  <li><a href="../../../../docs.nubeera.com/">Docs</a></li>
  <li>Boto3</li>
   </ul> -->

<div class="row ht-100 w-25 side-panel-box" style="background: re;">
    <div class="col-md-12 px-4 py-5 side-panel" style="background: yello;">
<strong CLASS="px-2" style="font-size: 1.125rem;">Overview</strong><br><br>
 
   </div>
</div>

      <div class="w-75 content-box" style="background: yellw;">
         <div class="my-5 mx-5 body-content" style="background: white;" >
            <h2 class="py-2 px-5 mb-0" style="background: #33A4FF; color: white;"></h2>
            <div class="px-5 py-5">
              
</div>
</div>
 <?php require "../../../../templates/footer_outer.php"?>
</div>



















    <!-- Javascript -->

	<script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
	<script src="https://www.nubeera.com/js/navmenu.js"></script>
</body>
</html>
