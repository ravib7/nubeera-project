<!DOCTYPE html>
<html lang="en">

<head>
	<title>NubeEra Core Base Module</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="NubeEra Core Base Module">

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
	<?php require '../../../../navbar.php'; ?>

	<div class="page-header theme-bg-dark py-5 text-center position-relative">
		<div class="theme-bg-shapes-right"></div>
		<div class="theme-bg-shapes-left"></div>
		<div class="container">
			<h1 class="page-heading single-col-max mx-auto">Python Contents</h1>
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
	</div>
	<!--//page-header-->

	<ul class="breadcrumb">
		<li><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
		<li><a href="../../"> Core </a></li>
		<li><a href="../"> Python </a></li>
		<li>Contents</li>
	</ul>

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
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Python Introduction</span>
								</h5>
								<div class="card-text">
									content Related to Basic of Python
								</div>
								<div id="contact-popup">
									<a class="card-link-mask" href="Introduction.php"></a>
								</div>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-database"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Data Types</span>
								</h5>
								<div class="card-text">
									Data Types content
								</div>
								<a class="card-link-mask" href="data-types.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-box fa-fw"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Creating Variables</span>
								</h5>
								<div class="card-text">
									Variables & Operators content
								</div>
								<a class="card-link-mask" href="creating-variables.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-undo"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Lists</span>
								</h5>
								<div class="card-text">
									Conditionals & Loops content
								</div>
								<a class="card-link-mask" href="lists.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-tools"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Functions</span>
								</h5>
								<div class="card-text">
									Functions content
								</div>
								<a class="card-link-mask" href="functions.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-laptop-code"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Python Iterators</span>
								</h5>
								<div class="card-text">
									Arguments content
								</div>
								<a class="card-link-mask" href="iterators.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-tablet-alt"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Python Math</span>
								</h5>
								<div class="card-text">
									Strings content
								</div>
								<a class="card-link-mask" href="maths.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-list"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Python Modules</span>
								</h5>
								<div class="card-text">
									content Related To Python Lists
								</div>
								<a class="card-link-mask" href="modules.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Python Operators</span>
								</h5>
								<div class="card-text">
									content Related To Tuples in Python
								</div>
								<a class="card-link-mask" href="python-operators.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-book"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Python RegEx</span>
								</h5>
								<div class="card-text">
									content Related To Dictionary in Python
								</div>
								<a class="card-link-mask" href="py-regEx.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Python Scope</span>
								</h5>
								<div class="card-text">
									content Related To Sets
								</div>
								<a class="card-link-mask" href="py-scope.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Python string Formatting</span>
								</h5>
								<div class="card-text">
									content related to Object-Oriented Programming In Python
								</div>
								<a class="card-link-mask" href="py-string-formatting.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-boxes"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Python Try Except</span>
								</h5>
								<div class="card-text">
									content Related to Classes and Objects
								</div>
								<a class="card-link-mask" href="python-try-exception.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Python User Input</span>
								</h5>
								<div class="card-text">
									content Related To Inheritance In Python
								</div>
								<a class="card-link-mask" href="py-user-inpt.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Sets</span>
								</h5>
								<div class="card-text">
									Regular Expression Related content
								</div>
								<a class="card-link-mask" href="set.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Python Tuples</span>
								</h5>
								<div class="card-text">
									Expression Handling content
								</div>
								<a class="card-link-mask" href="tuples.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">While loop</span>
								</h5>
								<div class="card-text">
									Expression Handling content
								</div>
								<a class="card-link-mask" href="while-loop.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Dictionaries</span>
								</h5>
								<div class="card-text">
									Expression Handling content
								</div>
								<a class="card-link-mask" href="dictionaries.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">For Loop</span>
								</h5>
								<div class="card-text">
									Expression Handling content
								</div>
								<a class="card-link-mask" href="for-loop.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">IF-Else</span>
								</h5>
								<div class="card-text">
									Expression Handling content
								</div>
								<a class="card-link-mask" href="conditionals.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Python Date-Time</span>
								</h5>
								<div class="card-text">
									Expression Handling content
								</div>
								<a class="card-link-mask" href="date-time.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Classes and Objects</span>
								</h5>
								<div class="card-text">
									Expression Handling content
								</div>
								<a class="card-link-mask" href="class-and-objects.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<i class="fas fa-lightbulb"></i>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Arrays</span>
								</h5>
								<div class="card-text">
									Expression Handling content
								</div>
								<a class="card-link-mask" href="arrays.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

				</div>
				<!--//row-->
			</div>
			<!--//container-->
		</div>
		<!--//container-->
	</div>
	<!--//page-content-->




	<?php require "../../../../templates/footer_outer.php" ?>

	<!-- Javascript -->

	<script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
	<script src="https://www.nubeera.com/js/navmenu.js"></script>

</body>

</html>