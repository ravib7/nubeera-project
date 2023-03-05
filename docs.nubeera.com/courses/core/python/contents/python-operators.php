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
			<h1 class="page-heading single-col-max mx-auto">Python Operators</h1>
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
		<li>Operators</li>
	</ul>
	<div class="container">
		<h3>Python Operators</h3>
		Operators are used to perform operations on variables and values.<br><br>
		we use the + operator to add together two values<br><br>
		Python divides the operators in the following groups:<br><br>
		Arithmetic operators<br>
		Assignment operators<br>
		Comparison operators<br>
		Logical operators<br>
		Identity operators<br>
		Membership operators<br>
		Bitwise operators<br><br>

		<h6>Python Arithmetic Operators</h6>
		Arithmetic operators are used with numeric values to perform common mathematical operations:<br><br>

		+ Addition x + y<br>
		- Subtraction x - y <br>
		* Multiplication x * y<br>
		/ Division x / y <br>
		% Modulus x % y <br>
		** Exponentiation x ** y <br>
		// Floor division x // y <br><br>

		<h6>Python Assignment Operators</h6>
		Assignment operators are used to assign values to variables:<br><br>

		= x = 5 x = 5 <br>
		+= x += 3 x = x + 3 <br>
		-= x -= 3 x = x - 3 <br>
		*= x *= 3 x = x * 3 <br>
		/= x /= 3 x = x / 3 <br>
		%= x %= 3 x = x % 3 <br>
		//= x //= 3 x = x // 3 <br>
		**= x **= 3 x = x ** 3 <br>
		&= x &= 3 x = x & 3 <br>
		|= x |= 3 x = x | 3 <br>
		^= x ^= 3 x = x ^ 3 <br>
		>>= x >>= 3 x = x >> 3 <br>
		<<= x <<=3 x=x << 3 <br><br>

			<h6>Python Comparison Operators</h6>
			Comparison operators are used to compare two values:<br><br>

			== Equal x == y <br>
			!= Not equal x != y <br>
			> Greater than x > y <br>
			< Less than x < y <br>
				>= Greater than or equal to x >= y <br>
				<= Less than or equal to x <=y <br><br>

					<h6>Python Logical Operators</h6>
					Logical operators are used to combine conditional statements:<br><br>

					and Returns True if both statements are true x < 5 and x < 10 <br>
						or Returns True if one of the statements is true x < 5 or x < 4 <br>
							not Reverse the result, returns False if the result is true not(x < 5 and x < 10)<br><br>

								<h6>Python Identity Operators</h6>
								Identity operators are used to compare the objects, not if they are equal, but if they are actually the same object, with the same memory location:<br><br>


								is, Returns True if both variables are the same object x is y. <br>
								is not, Returns True if both variables are not the same object x is not y <br><br>

								<h6>Python Membership Operators</h6>
								Membership operators are used to test if a sequence is presented in an object:<br><br>

								in, Returns True if a sequence with the specified value is present in the object x in y <br>
								not in, Returns True if a sequence with the specified value is not present in the object x not in y <br><br>
								<h6>Python Bitwise Operators</h6>
								Bitwise operators are used to compare (binary) numbers:<br><br>
								<table>
									<tr>
										<th> Operator </th>
										<th> Name </th>
										<th> Description </th>
									</tr>
									<tr>
										<td>&</td>
										<td>AND</td>
										<td>Sets each bit to 1 if both bits are 1</td>
									</tr>
									<tr>
										<td>|</td>
										<td>OR</td>
										<td>Sets each bit to 1 if one of two bits is 1</td>
									</tr>
									<tr>
										<td> ^</td>
										<td>XOR</td>
										<td>Sets each bit to 1 if only one of two bits is 1</td>
									</tr>
									<tr>
										<td>~ </td>
										<td>NOT</td>
										<td> Inverts all the bits</td>
									</tr>
									<tr>
										<td>
											<<< /td>
										<td>Zero fill left shift</td>
										<td> Shift left by pushing zeros in from the right and let the leftmost bits fall off</td>
									</tr>
									<tr>
										<td>>></td>
										<td>Signed right shift</td>
										<td>Shift right by pushing copies of the leftmost bit in from the left, and let the rightmost bits fall off</td>
									</tr>
								</table>
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