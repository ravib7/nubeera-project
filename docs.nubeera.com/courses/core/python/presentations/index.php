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

<style>
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
ul#lists
{	
    width: 100%;
	position: absolute;
   background: white;
   box-shadow: 1px 1px 10px gray;   
   height: auto;
   z-index: 1;
}
ul#lists li
{
    display: none;
	width: 107%;
	z-index: 1;
   position: relative;
   left: -7%;
	cursor: pointer;
   
    font-size: 0.85rem;
	padding: 0.5rem 3rem 0.5rem 1.5rem;
    height: 2.4rem;
	line-height: 1.5;
    color: #919aaa;
}
ul#lists li:hover
{
	background: gainsboro;
	padding-left: 1.6rem;
}
ul#lists li a
{
   text-decoration: none;
   color: #919aaa;
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

</style>
 
</head>

<body>

        <!-- Navigation Bar -->
   <?php require '../../../../navbar.php' ;?>

    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Python Presentations</h1>
		    <div class="page-intro single-col-max mx-auto">Everything you need to achieve your goals!</div>
		    <div class="main-search-box pt-3 d-block mx-auto">
                 <form class="search-form w-100">
		            <input type="text" placeholder="Search..." onkeyup="showresults()" id="searchbarbox" name="search" class="form-control search-input">
							<button id="clearBtn" class="clear-btn"><i class="fas fa-times"></i></button>
							<i class="fas fa-microphone mic-btn"></i>
							<button type="button" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
						
							<ul id="lists">
									<li><a href="pages/python/Python.php">Python</a></li>
									<li><a href="">Apache Hadoop</a></li>
									<li><a href="">AWS</a></li>
									<li><a href="">API</a></li>
									<li><a href="">Docker</a></li>
									<li><a href="">Azure</a></li>
									<li><a href="">DevOps</a></li>
									<li><a href="">Spark</a></li>
									<li><a href="">Helm</a></li>
									<li><a href="">FAQs</a></li>
									<li><a href="pages\python\python concepts.php?topic=pythonbasics">Python Basics</a></li>
									<li><a href="pages\python\python concepts.php?topic=datatypes">Python Data Types</a></li>
									<li><a href="pages\python\python concepts.php?topic=variablesoperators">Python Variables and Operators</a></li>
									<li><a href="pages\python\python concepts.php?topic=conditionalloops">Python Conditional loops</a></li>
									<li><a href="pages\python\python concepts.php?topic=functions">Python Functions</a></li>
									<li><a href="pages\python\python concepts.php?topic=arguments">Python Arguments</a></li>
									<li><a href="pages\python\python concepts.php?topic=strings">Python Strings</a></li>
									<li><a href="pages\python\python concepts.php?topic=pythonlist">Python Lists</a></li>
									<li><a href="pages\python\python concepts.php?topic=pythontuples">Python Tuples</a></li>
									<li><a href="pages\python\python concepts.php?topic=pythondictionary">Python Dictionary</a></li>
									<li><a href="pages\python\python concepts.php?topic=pythonsets">Python Sets</a></li>
									<li><a href="pages\python\python concepts.php?topic=pythonoops">Python OOPs</a></li>
									<li><a href="pages\python\python concepts.php?topic=classesobjects">Python Classes and Objects</a></li>
									<li><a href="pages\python\python concepts.php?topic=inheritance">Python Inheritance</a></li>
									<li><a href="pages\python\python concepts.php?topic=regexp">Python Regular Expressions</a></li>
									<li><a href="pages\python\python concepts.php?topic=exceptionhandle">Python Exception Handling</a></li>
									<li><a href="">API Intro</a></li>
									<li><a href="">API Data Types</a></li>
									<li><a href="">API Variables and Operators</a></li>
									<li><a href="">API Conditional loops</a></li>
									<li><a href="">API Functions</a></li>
									<li><a href="">API Arguments</a></li>
									<li><a href="">API Strings</a></li>
									<li><a href="">API Lists</a></li>
									<li><a href="">API Tuples</a></li>
									<li><a href="">API Dictionary</a></li>
									<li><a href="">API Sets</a></li>
									<li><a href="">API OOPs</a></li>
									<li><a href="">API Classes and Objects</a></li>
									<li><a href="">API Inheritance</a></li>
									<li><a href="">API Regular Expressions</a></li>
									<li><a href="">API Exception Handling</a></li>
                       </ul>
            
		        </form>
             </div>
	    </div>
    </div><!--//page-header-->

	<ul class="breadcrumb">
	<li><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li><a href="../../"> Core </a></li>
        	<li><a href="../"> Python </a></li>
          <li>Presentations</li>
 </ul>
<?php 
 if(empty($_GET['topic']))
 {
?>
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">
				    <div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-info"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Python Basics</span>
							    </h5>
							    <div class="card-text">
								    Basics of python presentations
							    </div>
									<div id="contact-popup">
							   			<a class="card-link-mask" href=" ?topic=pythonbasics#frame"></a>
									</div>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

				    <div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-database"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Data Types</span>
							    </h5>
							    <div class="card-text">
								    Data Types presentations
							    </div>
							    <a class="card-link-mask" href="?topic=datatypes#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

				    <div class="col-12 col-lg-4 py-3" hidden>
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-box fa-fw"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Variables & Operators</span>
							    </h5>
							    <div class="card-text">
								    Variables & Operators presentations
								</div>
							    <a class="card-link-mask" href="?topic=variablesoperators#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

				    <div class="col-12 col-lg-4 py-3"  hidden>
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-undo"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Conditionals & Loops</span>
							    </h5>
							    <div class="card-text">
								    Conditionals & Loops presentations
								</div>
							    <a class="card-link-mask" href="?topic=conditionalloops#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

				    <div class="col-12 col-lg-4 py-3"  hidden>
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-tools"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Functions</span>
							    </h5>
							    <div class="card-text">
								    Functions presentations
								</div>
							    <a class="card-link-mask" href="?topic=functions#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

				    <div class="col-12 col-lg-4 py-3"  hidden>
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-laptop-code"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Arguments</span>
							    </h5>
							    <div class="card-text">
								    Arguments presentations
								</div>
							    <a class="card-link-mask" href="?topic=arguments#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

				    <div class="col-12 col-lg-4 py-3"  hidden>
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-tablet-alt"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Strings</span>
							    </h5>
							    <div class="card-text">
								    Strings presentations
								</div>
							    <a class="card-link-mask" href="?topic=strings#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

				    <div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-list"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Python Lists</span>
							    </h5>
							    <div class="card-text">
								    presentations Related To Python Lists
								</div>
							    <a class="card-link-mask" href="?topic=pythonlist#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

				    <div class="col-12 col-lg-4 py-3"  hidden>
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-lightbulb"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Python Tuples</span>
							    </h5>
							    <div class="card-text">
								    presentations Related To Tuples in Python
								</div>
							    <a class="card-link-mask" href="?topic=pythontuples#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

					<div class="col-12 col-lg-4 py-3"  hidden>
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-book"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Python Dictionary</span>
							    </h5>
							    <div class="card-text">
								    presentations Related To Dictionary in Python
								</div>
							    <a class="card-link-mask" href="?topic=pythondictionary#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

					<div class="col-12 col-lg-4 py-3"  hidden>
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-lightbulb"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Python Sets</span>
							    </h5>
							    <div class="card-text">
								    presentations Related To Sets
								</div>
							    <a class="card-link-mask" href="?topic=pythonsets#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

					<div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-lightbulb"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Python OOP's</span>
							    </h5>
							    <div class="card-text">
								    presentations related to Object-Oriented Programming In Python
								</div>
							    <a class="card-link-mask" href="?topic=pythonoops#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

				 <div class="col-12 col-lg-4 py-3"  hidden>
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-boxes"></i>
							        </span><!--//card-icon-holder-->
							         <span class="card-title-text">Classes & Objects</span>
							    </h5>
							    <div class="card-text">
								    presentations Related to Classes and Objects
								</div>
							    <a class="card-link-mask" href="?topic=classesobjects#frame"></a>
						    </div><!--//card-body-->
					   </div><!--//card-->
				    </div><!--//col-->

					<div class="col-12 col-lg-4 py-3"  hidden>
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-lightbulb"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Inheritance</span>
							    </h5>
							    <div class="card-text">
								    presentations Related To Inheritance In Python
								</div>
							    <a class="card-link-mask" href="?topic=inheritance#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->

					<div class="col-12 col-lg-4 py-3"  hidden>
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-lightbulb"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Regular Expression</span>
							    </h5>
							    <div class="card-text">
								    Regular Expression Related presentations
								</div>
							    <a class="card-link-mask" href="?topic=regexp#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
					
					<div class="col-12 col-lg-4 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-lightbulb"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Exception Handling</span>
							    </h5>
							    <div class="card-text">
								    Expression Handling presentations
								</div>
							    <a class="card-link-mask" href="?topic=exceptionhandle#frame"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
			    </div><!--//row-->
		    </div><!--//container-->
		</div><!--//container-->
    </div><!--//page-content-->

	 <?php
 }
 else
 {
    echo "<center><iframe src='".$_GET['topic'].".pdf#toolbar=0' id='frame' width='90%' height='1000px' style='border :none'></iframe> </center>";
} 
  
 require "../../../../templates/footer_outer.php"; ?>

    <!-- Javascript -->

	  <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

  <script src="https://www.nubeera.com/js/navmenu.js"></script>
	<script>

function showresults() {
	let inputval = document.getElementById("searchbarbox").value.toUpperCase();
    if (inputval) {
        let ul = document.getElementById("lists");
        let list = ul.getElementsByTagName("li");
        document.getElementById("clearBtn").style.display = "block";

        for (var i = 0; i < list.length; i++) {
            let a = list[i].getElementsByTagName("a")[0].innerHTML;

            if (a.toUpperCase().indexOf(inputval) > -1) {
                list[i].style.display = "flex";
            } else {
                list[i].style.display = "none";
            }
        }
    } else {
        document.getElementById("lists").style.display = "none";
        document.getElementById("clearBtn").style.display = "none";
        //list[i].style.display = "none";
    } //inputval condition closed
}

//  searchVal = document.getElementById("searchbarbox").value;
//  if (searchVal) {
//      document.getElementById("clearBtn").style.display = "block";
//  } else {
//      document.getElementById("clearBtn").style.display = "none";
//  }

window.addEventListener('load', () => {
    const button = document.querySelector('#clearBtn');
    button.addEventListener('click', () => {
        document.querySelector('#searchbarbox').value = " ";
    });
});
</script>
</body>
</html>
