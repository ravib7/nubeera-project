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
			<h1 class="page-heading single-col-max mx-auto">Python Date-Time</h1>
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
		<li>Date-Time</li>
	</ul>
	<div class="container">
		<h3>Python Datetime</h3>
		<h4>Python Dates</h4>
		A date in Python is not a data type of its own, but we can import a module named <code>datetime</code> to work with dates as date objects.<br>
		<h4>Date Output</h4>
		When we execute the code from the example above the result will be:<br><br>
		<code>2021-10-12 16:05:40.034335</code><br><br>
		The date contains year, month, day, hour, minute, second, and microsecond.<br><br>
		The <code>datetime</code> module has many methods to return information about the date object.<br><br>
		Here are a few examples, you will learn more about them later in this chapter<br>

		<h4>Creating Date Objects</h4>
		To create a date, we can use the <code>datetime()</code> class (constructor) of the<code> datetime</code> module.<br><br>
		The <code>datetime()</code> class requires three parameters to create a date: year, month, day.<br><br>
		The<code> datetime()</code> class also takes parameters for time and timezone (hour, minute, second, microsecond, tzone), but they are optional, and has a default value of 0, (None for timezone).<br>
		<h4>The strftime() Method</h4>
		The <code>datetime</code> object has a method for formatting date objects into readable strings.<br><br>
		The method is called<code> strftime()</code>, and takes one parameter, <code>format</code>, to specify the format of the returned string<br><br>
		<table>
			<tr>
				<th>Directive</th>
				<th>Description</th>
				<th>Example</th>
			</tr>
			<tr>
				<td>%a</td>
				<td>Weekday, short version</td>
				<td>Wed</td>
			</tr>
			<tr>
				<td>%A</td>
				<td>Weekday, full version </td>
				<td>Wednesday</td>
			</tr>
			<tr>
				<td>%w</td>
				<td>Weekday as a number 0-6</td>
				<td>0 is Sunday 3 </td>
			</tr>
			<tr>
				<td>%d</td>
				<td>Day of month 01-31</td>
				<td>31</td>
			</tr>
			<tr>
				<td>%b</td>
				<td>Month name, short version </td>
				<td>Dec</td>
			</tr>
			<tr>
				<td>%B</td>
				<td>Month name, full version</td>
				<td>December</td>
			</tr>
			<tr>
				<td>%m</td>
				<td>Month as a number 01-12</td>
				<td>12</td>
			</tr>
			<tr>
				<td>%y</td>
				<td>Year, short version, without century</td>
				<td>18</td>
			</tr>
			<tr>
				<td>%Y</td>
				<td>Year, full version</td>
				<td>2018</td>
			</tr>
			<tr>
				<td>%H</td>
				<td>Hour 00-23</td>
				<td>17</td>
			</tr>
			<tr>
				<td> %I</td>
				<td>Hour 00-12 </td>
				<td>05</td>
			</tr>
			<tr>
				<td>%p</td>
				<td>AM/PM</td>
				<td>PM</td>
			</tr>
			<tr>
				<td>%M</td>
				<td>Minute 00-59 </td>
				<td>41</td>
			</tr>
			<tr>
				<td>%S</td>
				<td>Second 00-59 </td>
				<td>08</td>
			</tr>
			<tr>
				<td>%f</td>
				<td>Microsecond 000000-999999 </td>
				<td>548513</td>
			</tr>
			<tr>
				<td>%z</td>
				<td>UTC offset</td>
				<td>+0100</td>
			</tr>
			<tr>
				<td>%Z</td>
				<td>Timezone</td>
				<td>CST</td>
			</tr>
			<tr>
				<td>CST</td>
				<td>Day number of year 001-366 </td>
				<td>365</td>
			</tr>
			<tr>
				<td>%U</td>
				<td>Week number of year, Sunday as the first day of week,</td>
				<td>00-53 52</td>
			</tr>
			<tr>
				<td>%W</td>
				<td>Week number of year, Monday as the first day of week,</td>
				<td>00-53 52</td>
			</tr>
			<tr>
				<td>%c</td>
				<td>Local version of date and time</td>
				<td>Mon Dec 31 17:41:00 2018
				</td>
			</tr>
			<tr>
				<td>%C</td>
				<td>Century</td>
				<td>20</td>
			</tr>
			<tr>
				<td>%x</td>
				<td>Local version of date</td>
				<td>12/31/18</td>
			</tr>
			<tr>
				<td>%X</td>
				<td>Local version of time</td>
				<td>17:41:00</td>
			</tr>
			<tr>
				<td>%%</td>
				<td>A % character</td>
				<td>%</td>
			</tr>
			<tr>
				<td>%u</td>
				<td>ISO 8601 weekday</td>
				<td>(1-7)1</td>
			</tr>
			<tr>
				<td>%V</td>
				<td>ISO 8601 weeknumber</td>
				<td>(01-53)01
				</td>
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