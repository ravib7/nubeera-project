<!DOCTYPE html>
<html lang="en">
<head>
    <title>NubeEra Core Base Module</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Core Base Module">
	
	<link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">

    <!-- FontAwesome JS-->
	 <script defer src="../../../../assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../../../../assets/css/theme.css">

	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
	 <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">	
	 <!--<link rel="stylesheet" href="../../Docs.css">-->
 
</head>

<body>

        <!-- Navigation Bar -->
   <?php require '../../../../templates/navbar.php';?>

    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Linux Contents</h1>
		    <div class="page-intro single-col-max mx-auto">Everything you need to achieve your goals!</div>
		    <div class="main-search-box pt-3 d-block mx-auto">
                 <form class="search-form w-100">
					  	<input type="text" placeholder="Search..." onkeyup="showresults()" id="searchbarbox" name="search" class="form-control search-input">
							
							<button id="clearBtn" class="clear-btn"><i class="fas fa-times"></i></button>
							<i class="fas fa-microphone mic-btn"></i> 
							<button type="button" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>

				
						<ul id="lists">
							<li><a href="">Python Basics</a></li>
							<li><a href="">Data Types</a></li>
							<li><a href="">Variables & Operators</a></li>
							<li><a href="">Conditionals & Loops</a></li>
							<li><a href="">Functions</a></li>
							<li><a href="">Arguments</a></li>
							<li><a href="">Strings</a></li>
							<li><a href="">Python Lists</a></li>
							<li><a href="">Python Tuples</a></li>
							<li><a href="">Python Dictionary</a></li>
							<li><a href="">Python Sets</a></li>
							<li><a href="">Python OOP's</a></li>
							<li><a href="">Inheritance</a></li>
							<li><a href="">Regular Expression</a></li>
							<li><a href="">Exception Handling</a></li>
                       </ul>
                   
		        </form>
             </div>
	    </div>
    </div><!--//page-header-->

	<ul class="breadcrumb">
	<li><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
         <li><a href="../../"> Core </a></li>
        	<li><a href="../"> Linux </a></li>
          <li>Contents</li>
   </ul>

    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">

				    
			    </div><!--//row-->
		    </div><!--//container-->
		</div><!--//container-->
    </div><!--//page-content-->




 <?php require "../../../../templates/footer_outer.php" ?>

    <!-- Javascript -->

	  <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

	<script src="https://www.nubeera.com/js/navmenu.js"></script>
</body>
</html>
