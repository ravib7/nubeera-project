<!DOCTYPE html>
<html lang="en">

<head>
	<title>NubeEra Python</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Python">
	
	<link rel="icon" type="ico" href="https://www.nubeera.com/img/logo.ico">
	<!--icon on browser tab -->
	<!-- Theme CSS Bootstrap file-->
	<link id="theme-style" rel="stylesheet" href="../../../../assets/css/theme.css">

	<!-- FontAwesome JS-->
	<script defer src="../../../../assets/fontawesome/js/all.min.js"></script><!-- all icons -->

	<link rel="stylesheet" type="text/css" href="https://www.nubeera.com/styles/style.processed.css">
	<link rel="stylesheet" type="text/css" href="https://www.nubeera.com/styles/style.footer.css">
	<link rel="stylesheet" type="text/css" href="https://www.nubeera.com/styles/style.nav1.css">
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

		ul#lists {
			width: 100%;
			position: absolute;
			background: white;
			box-shadow: 1px 1px 10px gray;
			height: auto;
			z-index: 1;
		}

		ul#lists li {
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

		ul#lists li:hover {
			background: gainsboro;
			padding-left: 1.6rem;
		}

		ul#lists li a {
			text-decoration: none;
			color: #919aaa;
		}

		.mic-btn {
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

		.clear-btn {
			color: #828d9f;
			background: none;
			border: none;
			position: absolute;
			right: 6.8rem;
			top: 0.70rem;
			margin-right: 0;
		}

		button#clearBtn {
			display: none;
		}
	</style>
</head>

<body>

	<!-- Navigation Bar -->
	<?php require '../../../../templates/navbar.php'; ?>

	<div class="page-header theme-bg-dark py-5 text-center position-relative">
		<div class="theme-bg-shapes-right"></div>
		<div class="theme-bg-shapes-left"></div>
		<div class="container">
			<h1 class="page-heading single-col-max mx-auto">Python Maths</h1>
			<div class="page-intro single-col-max mx-auto">Everything you need to achieve your goals!</div>
			<div class="main-search-box pt-3 d-block mx-auto">
				<form class="search-form w-100">
					<input type="text" placeholder="Search..." name="search" class="form-control search-input">
					<button id="clearBtn" class="clear-btn"><i class="fas fa-times"></i></button>
					<i class="fas fa-microphone mic-btn"></i>
					<button type="button" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>

					<ul id="lists">
						<li><a href="pages/python/python_contents.php">Python</a></li>
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
	</div>
	<ul class="breadcrumb">
		<li><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i> </a></li>
		<li><a href="../../"> Core </a></li>
		<li><a href="../"> Python </a></li>
		<li><a href="../contents/"> Contents </a></li>
		<li>maths</li>
	</ul>
	<div class="container">
		<h3>Python Math</h3>
		<h4>Built-in Math Functions</h4>
		The min() and max() functions can be used to find the lowest or highest value in an iterable<br><br>
		The abs() function returns the absolute (positive) value of the specified number<br><br>
		The pow(x, y) function returns the value of x to the power of y (xy).<br>

		<h4>The Math Module</h4>
		Python has also a built-in module called math, which extends the list of mathematical functions.<br><br>
		To use it, you must import the math module:<br><br>
		<code>import math</code><br><br>
		When you have imported the math module, you can start using methods and constants of the module.<br><br>
		The math.sqrt() method for example, returns the square root of a number<br><br>
		The math.ceil() method rounds a number upwards to its nearest integer, and the math.floor() method rounds a number downwards to its nearest integer, and returns the result<br><br>
		The math.pi constant, returns the value of PI (3.14...)<br>


		<br><br>
	</div>
	<?php require "../../../../templates/footer_outer.php" ?>

	<!-- Javascript -->

	<script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
	<script src="https://www.nubeera.com/js/navmenu.js"></script>

</html>