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
			<h1 class="page-heading single-col-max mx-auto">Python Lists</h1>
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
		<li>Lists</li>
	</ul>
	<div class="container">
		<h3>List</h3>
		Lists are used to store multiple items in a single variable.<br>
		Lists are one of 4 built-in data types in Python used to store collections of data, the other 3 are Tuple, Set, and Dictionary, all with different qualities and usage.<br>
		Lists are created using square brackets<br>

		<h3>List Items</h3>
		List items are ordered, changeable, and allow duplicate values.<br>
		List items are indexed, the first item has index [0], the second item has index [1] etc.<br>

		<h3>Ordered</h3>
		When we say that lists are ordered, it means that the items have a defined order, and that order will not change.<br>
		If you add new items to a list, the new items will be placed at the end of the list.<br>

		<h3>Changeable</h3>
		The list is changeable, meaning that we can change, add, and remove items in a list after it has been created.<br>

		<h3>Allow Duplicates</h3>
		Since lists are indexed, lists can have items with the same value<br>

		<h3>List Length</h3>
		To determine how many items a list has, use the <code>len()</code> function<br>

		<h3>List Items - Data Types</h3>
		List items can be of any data type<br>
		A list can contain different data types<br>

		<h3>type()</h3>
		From Python's perspective, lists are defined as objects with the data type 'list'<br>

		<h3>The list() Constructor</h3>
		It is also possible to use the <code>list()</code> constructor when creating a new list.<br>

		<h3>Python Collections (Arrays)</h3>
		There are four collection data types in the Python programming language:<br>
		List is a collection which is ordered and changeable. Allows duplicate members.<br>
		Tuple is a collection which is ordered and unchangeable. Allows duplicate members.<br>
		Set is a collection which is unordered and unindexed. No duplicate members.<br>
		Dictionary is a collection which is ordered* and changeable. No duplicate members.<br>
		When choosing a collection type, it is useful to understand the properties of that type. Choosing the right type for a particular data set could mean retention of meaning, and, it could mean an increase in efficiency or security.<br>

		<h3>Change Item Value</h3>
		To change the value of a specific item, refer to the index number<br>

		<h3>Change a Range of Item Values</h3>
		To change the value of items within a specific range, define a list with the new values, and refer to the range of index numbers where you want to insert the new values<br>
		If you insert more items than you replace, the new items will be inserted where you specified, and the remaining items will move accordingly.<br>
		If you insert less items than you replace, the new items will be inserted where you specified, and the remaining items will move accordingly.<br>

		<h3>Insert Items</h3>
		To insert a new list item, without replacing any of the existing values, we can use the insert() method.<br>
		The insert() method inserts an item at the specified index<br>

		<h3>Append Items</h3>
		To add an item to the end of the list, use the append() method<br>

		<h3>Insert Items</h3>
		To insert a list item at a specified index, use the insert() method.<br>
		The insert() method inserts an item at the specified index<br>

		<h3>Extend List</h3>
		To append elements from another list to the current list, use the extend() method<br>

		<h3>Add Any Iterable</h3>
		The extend() method does not have to append lists, you can add any iterable object (tuples, sets, dictionaries etc.)<br>

		<h3>Remove Specified Item</h3>
		The remove() method removes the specified item<br>

		<h3>Remove Specified Index</h3>
		The pop() method removes the specified index<br>
		If you do not specify the index, the pop() method removes the last item.<br>
		The del keyword also removes the specified index.<br>
		The del keyword can also delete the list completely.<br>

		<h3>Clear the List</h3>
		The clear() method empties the list.<br>
		The list still remains, but it has no content<br>

		<h3>List Comprehension</h3>
		List comprehension offers a shorter syntax when you want to create a new list based on the values of an existing list.<br>
		Example:<br>
		Based on a list of fruits, you want a new list, containing only the fruits with the letter "a" in the name.<br>
		Without list comprehension you will have to write a for statement with a conditional test inside.With list comprehension you can do all that with only one line of code.The condition is like a filter that only accepts the items that valuate to True.
		<h4>Iterable</h4>
		The iterable can be any iterable object, like a list, tuple, set etc.
		<h4>Expression</h4>
		The expression is the current item in the iteration, but it is also the outcome, which you can manipulate before it ends up like a list item in the new list<br>

		<h3>Sort List Alphanumerically</h3>
		List objects have a sort() method that will sort the list alphanumerically, ascending, by default<br>

		<h3>Sort Descending</h3>
		To sort descending, use the keyword argument reverse = True<br>

		<h3>Join Two Lists</h3>
		There are several ways to join, or concatenate, two or more lists in Python.<br>
		One of the easiest ways are by using the + operator.<br>
		Another way to join two lists is by appending all the items from list2 into list1, one by one.Or you can use the extend() method, which purpose is to add elements from one list to another list.<br>
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