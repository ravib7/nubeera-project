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
			<h1 class="page-heading single-col-max mx-auto">Classes and Objects</h1>
			<div class="page-intro single-col-max mx-auto">Everything you need to achieve your goals!</div>
			<div class="main-search-box pt-3 d-block mx-auto">
				<form class="search-form w-100">

					<input type="text" placeholder="Search..." autocomplete="chrome-off" id="searchbarbox" name="search" onkeyup="showresults()" class="form-control search-input">
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
			</div> -->
		</div>
	</div>
	</div>
	<ul class="breadcrumb">
		<li><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i> </a></li>
		<li><a href="../../"> Core </a></li>
		<li><a href="../"> Python </a></li>
		<li><a href="../contents/"> Contents </a></li>
		<li>classes and objects</li>
	</ul>
	<div class="container">
		<h2>Python Classes and Objects</h2>

		<h3>Python Classes/Objects</h3>
		Python is an object oriented programming language.
		Almost everything in Python is an object, with its properties and methods.
		A Class is like an object constructor, or a "blueprint" for creating objects.

		<h3>Create a Class</h3>
		To create a class, use the keyword class

		<h3>Create Object</h3>
		Now we can use the class named MyClass to create objects

		<h3>The __init__() Function</h3>
		The examples above are classes and objects in their simplest form, and are not really useful in real life applications.
		To understand the meaning of classes we have to understand the built-in __init__() function.
		All classes have a function called __init__(), which is always executed when the class is being initiated.
		Use the __init__() function to assign values to object properties, or other operations that are necessary to do when the object is being created

		<h3>Object Methods</h3>
		Objects can also contain methods. Methods in objects are functions that belong to the object.
		Let us create a method in the Person class

		<h3>The self Parameter</h3>
		The self parameter is a reference to the current instance of the class, and is used to access variables that belongs to the class.
		It does not have to be named self , you can call it whatever you like, but it has to be the first parameter of any function in the class

		<h3>Delete Object Properties</h3>
		You can delete properties on objects by using the del keyword

		<h3>Delete Objects</h3>
		You can delete objects by using the del keyword

		<h3>The pass Statement</h3>
		class definitions cannot be empty, but if you for some reason have a class definition with no content, put in the pass statement to avoid getting an error.

		<h3>Python Inheritance</h3>
		Inheritance allows us to define a class that inherits all the methods and properties from another class.
		Parent class is the class being inherited from, also called base class.
		Child class is the class that inherits from another class, also called derived class.

		<h3>Create a Parent Class</h3>
		Any class can be a parent class, so the syntax is the same as creating any other class

		<h3>Create a Child Class</h3>
		To create a class that inherits the functionality from another class, send the parent class as a parameter when creating the child class

		<h3>Add the __init__() Function</h3>
		So far we have created a child class that inherits the properties and methods from its parent.
		We want to add the __init__() function to the child class (instead of the pass keyword).
		The __init__() function is called automatically every time the class is being used to create a new object.
		When you add the __init__() function, the child class will no longer inherit the parent's __init__() function.
		The child's __init__() function overrides the inheritance of the parent's __init__() function.
		To keep the inheritance of the parent's __init__() function, add a call to the parent's __init__() function
		Now we have successfully added the __init__() function, and kept the inheritance of the parent class, and we are ready to add functionality in the __init__() function.

		<h3>Use the super() Function</h3>
		Python also has a super() function that will make the child class inherit all the methods and properties from its parent
		By using the super() function, you do not have to use the name of the parent element, it will automatically inherit the methods and properties from its parent.

		<h3>Add Properties</h3>
		In the example below, the year 2019 should be a variable, and passed into the Student class when creating student objects. To do so, add another parameter in the __init__() function

		<h3>Add Methods </h3>
		If you add a method in the child class with the same name as a function in the parent class, the inheritance of the parent method will be overridden

		<br><br><br>
	</div>
	<?php require "../../../../templates/footer_outer.php" ?>

	<!-- Javascript -->

	<script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
	<script src="https://www.nubeera.com/js/navmenu.js"></script>
	<script>
		function showresults() {

			let inputval = document.getElementById("searchbarbox").value.toUpperCase();

			let div = document.getElementById("lists");

			let ul = div.getElementsByTagName("ul");

			let list = ul[0].getElementsByTagName("li");



			for (var i = 0; i < list.length; i++) {
				let a = list[i].getElementsByTagName("a")[0].innerHTML;
				//let a = list[i].innerHTML;

				if (inputval) {
					if (a.toUpperCase().indexOf(inputval) > -1) {
						list[i].style.display = "flex";
					} else {
						list[i].style.display = "none";
					}
				} else {
					list[i].style.display = "none";
				}
			}
			searchVal = document.getElementById("searchbarbox").value;

			if (searchVal) {
				document.getElementById("clearBtn").style.display = "block";
			} else {
				document.getElementById("clearBtn").style.display = "none";
			}
		}
		window.addEventListener('load', () => {
			const button = document.querySelector('#clear');
			button.addEventListener('click', () => {
				document.querySelector('#enter').value = "";
			});
		});
	</script>

</html>