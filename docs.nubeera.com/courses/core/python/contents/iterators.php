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
			<h1 class="page-heading single-col-max mx-auto">Python Iterators</h1>
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
		<li>Python Iterators</li>
	</ul>
	<div class="container">
		<h3>Python Iterators</h3>
		An iterator is an object that contains a countable number of values.<br><br>
		An iterator is an object that can be iterated upon, meaning that you can traverse through all the values.<br><br>
		Technically, in Python, an iterator is an object which implements the iterator protocol, which consist of the methods __iter__() and __next__().<br>

		<h3>Iterator vs Iterable</h3>
		Lists, tuples, dictionaries, and sets are all iterable objects. They are iterable containers which you can get an iterator from.<br><br>
		All these objects have a iter() method which is used to get an iterator<br>
		Looping Through an Iterator
		We can also use a for loop to iterate through an iterable object<br>

		<h3>Create an Iterator</h3>
		To create an object/class as an iterator you have to implement the methods __iter__() and __next__() to your object.<br><br>
		As you have learned in the Python Classes/Objects chapter, all classes have a function called __init__(), which allows you to do some initializing when the object is being created.<br><br>
		The __iter__() method acts similar, you can do operations (initializing etc.), but must always return the iterator object itself.<br><br>
		The __next__() method also allows you to do operations, and must return the next item in the sequence.<br>

		<h3>StopIteration</h3>
		The example above would continue forever if you had enough next() statements, or if it was used in a for loop.<br><br>
		To prevent the iteration to go on forever, we can use the StopIteration statement.<br><br>
		In the __next__() method, we can add a terminating condition to raise an error if the iteration is done a specified number of times<br>


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