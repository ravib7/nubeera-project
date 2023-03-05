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
			<h1 class="page-heading single-col-max mx-auto">Python Functions</h1>
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
		<li>Functions</li>
	</ul>
	<div class="container">
		<h3>Python Functions</h3>
		A function is a block of code which only runs when it is called.<br>
		You can pass data, known as parameters, into a function.<br>
		A function can return data as a result.<br>

		<h4>Creating a Function</h4>
		In Python a function is defined using the def keyword<br>

		<h4>Arguments</h4>
		Information can be passed into functions as arguments.<br>
		Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.<br>
		The following example has a function with one argument (fname). When the function is called, we pass along a first name, which is used inside the function to print the full name<br>

		<h4>Parameters or Arguments?</h4>
		The terms parameter and argument can be used for the same thing: information that are passed into a function.<br>
		A parameter is the variable listed inside the parentheses in the function definition.<br>
		An argument is the value that is sent to the function when it is called.<br>

		<h4>Number of Arguments</h4>
		By default, a function must be called with the correct number of arguments. Meaning that if your function expects 2 arguments, you have to call the function with 2 arguments, not more, and not less.<br>

		<h4>Arbitrary Arguments, *args</h4>
		If you do not know how many arguments that will be passed into your function, add a * before the parameter name in the function definition.<br>
		This way the function will receive a tuple of arguments, and can access the items accordingly:<br>

		<h4>Keyword Arguments</h4>
		You can also send arguments with the key = value syntax.<br>
		This way the order of the arguments does not matter<br>
		The phrase Keyword Arguments are often shortened to kwargs in Python documentations.<br>

		<h4>Arbitrary Keyword Arguments, **kwargs</h4>
		If you do not know how many keyword arguments that will be passed into your function, add two asterisk: ** before the parameter name in the function definition.<br>
		This way the function will receive a dictionary of arguments, and can access the items accordingly<br>

		<h4>Default Parameter Value</h4>
		The following example shows how to use a default parameter value.<br>
		If we call the function without argument, it uses the default value<br>

		<h4>Passing a List as an Argument</h4>
		You can send any data types of argument to a function (string, number, list, dictionary etc.), and it will be treated as the same data type inside the function.<br>

		<h4>Return Values</h4>
		To let a function return a value, use the return statement:<br>

		<h4>The pass Statement</h4>
		function definitions cannot be empty, but if you for some reason have a function definition with no content, put in the pass statement to avoid getting an error.<br>

		<h4>Recursion</h4>
		Python also accepts function recursion, which means a defined function can call itself.<br><br>
		Recursion is a common mathematical and programming concept. It means that a function calls itself. This has the benefit of meaning that you can loop through data to reach a result.<br><br>
		The developer should be very careful with recursion as it can be quite easy to slip into writing a function which never terminates, or one that uses excess amounts of memory or processor power. However, when written correctly recursion can be a very efficient and mathematically-elegant approach to programming.<br><br>
		In this example, tri_recursion() is a function that we have defined to call itself ("recurse"). We use the k variable as the data, which decrements (-1) every time we recurse. The recursion ends when the condition is not greater than 0 (i.e. when it is 0).<br><br>
		To a new developer it can take some time to work out how exactly this works, best way to find out is by testing and modifying it.<br><br>

		<h3>Python Lambda</h3>
		A lambda function is a small anonymous function.
		A lambda function can take any number of arguments, but can only have one expression.<br>
		<h4>Syntax</h4>
		<code>lambda arguments : expression</code>


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