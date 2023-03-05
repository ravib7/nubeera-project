<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Python</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Python">
    
	<link rel="icon" type="ico" href="https://www.nubeera.com/img/logo.ico">
	<!--icon on browser tab -->
	<!-- Theme CSS Bootstrap file-->
	<link id="theme-style" rel="stylesheet" href="../../../../assets/css/theme.css">

    <!-- FontAwesome JS-->
    <script defer src="https://www.nubeera.com/docs.nubeera.com/assets/fontawesome/js/all.min.js"></script><!-- all icons -->


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
            <h1 class="page-heading single-col-max mx-auto">Python Regular Expression</h1>
            <div class="page-intro single-col-max mx-auto">Everything you need to achieve your goals!</div>
            <div class="main-search-box pt-3 d-block mx-auto">
                <form class="search-form w-100">
                    <input type="text" placeholder="Search..." name="search" class="form-control search-input">
                    <button id="clearBtn" class="clear-btn"><i class="fas fa-times"></i></button>
                    <i class="fas fa-language langDetect" onclick="detectLang(searchbarbox.value)">?</i>
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
        <li><a href="../../../index.php">Home</a></li>
        <li><a href="../../index.php">Docs</a></li>
        <li><a href="Python.php">Python</a></li>
        <li id="topic">RegEx</li>
    </ul>
    <div class="container">
        <h3>Python RegEx</h3>
        A RegEx, or Regular Expression, is a sequence of characters that forms a search pattern.<br><br>
        RegEx can be used to check if a string contains the specified search pattern.<br>

        <h4>RegEx Module</h4>
        Python has a built-in package called re, which can be used to work with Regular Expressions.<br><br>
        Import the re module<br>

        <h4>RegEx in Python</h4>
        When you have imported the re module, you can start using regular expressions<br>

        <h4>RegEx Functions</h4>
        The re module offers a set of functions that allows us to search a string for a match:<br><br>
        <table>
            <tr>
                <th>Function</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>findall</td>
                <td>Returns a list containing all matches</td>
            </tr>
            <tr>
                <td>search</td>
                <td>Returns a Match object if there is a match anywhere in the string</td>
            </tr>
            <tr>
                <td>split</td>
                <td>Returns a list where the string has been split at each match</td>
            </tr>
            <tr>
                <td>sub</td>
                <td>Replaces one or many matches with a string</td>
            </tr>
        </table>

        <h4>Metacharacters</h4>
        Metacharacters are characters with a special meaning:<br><br>

        <table>
            <tr>
                <th>Character</th>
                <th>Description</th>
                <th>Example</th>
            </tr>
            <tr>
                <td>[]</td>
                <td>A set of characters</td>
                <td>"[a-m]"</td>
            </tr>
            <tr>
                <td>\</td>
                <td>Signals a special sequence (can also be used to escape special characters)</td>
                <td>"\d"</td>
            </tr>
            <tr>
                <td>.</td>
                <td>Any character (except newline character)</td>
                <td>"he..o"</td>
            </tr>
            <tr>
                <td>^</td>
                <td>Starts with</td>
                <td>"^hello"</td>
            </tr>
            <tr>
                <td>$</td>
                <td>Ends with</td>
                <td>"world$"</td>
            </tr>
            <tr>
                <td>*</td>
                <td>Zero or more occurrences</td>
                <td>"aix*"</td>
            </tr>
            <tr>
                <td>+</td>
                <td>One or more occurrences</td>
                <td>"aix+"</td>
            </tr>
            <tr>
                <td>{}</td>
                <td>Exactly the specified number of occurrences</td>
                <td>"al{2}"</td>
            </tr>
            <tr>
                <td>|</td>
                <td>Either or</td>
                <td>"falls|stays"</td>
            </tr>
            <tr>
                <td>()</td>
                <td>Capture and group</td>
                <td></td>
            </tr>
        </table>

        <h4>Special Sequences</h4>
        A special sequence is a \ followed by one of the characters in the list below, and has a special meaning:<br><br>
        <table>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        Character
        Description
        Example


        \A
        Returns a match if the specified characters are at the beginning of the string
        "\AThe"


        \b
        Returns a match where the specified characters are at the beginning or at the end of a word
        (the "r" in the beginning is making sure that the string is being treated as a "raw string")
        r"\bain"
        r"ain\b"


        \B
        Returns a match where the specified characters are present, but NOT at the beginning (or at the end) of a word
        (the "r" in the beginning is making sure that the string is being treated as a "raw string")
        r"\Bain"
        r"ain\B"


        \d
        Returns a match where the string contains digits (numbers from 0-9)
        "\d"


        \D
        Returns a match where the string DOES NOT contain digits
        "\D"


        \s
        Returns a match where the string contains a white space character
        "\s"


        \S
        Returns a match where the string DOES NOT contain a white space character
        "\S"


        \w
        Returns a match where the string contains any word characters (characters from a to Z, digits from 0-9, and the underscore _ character)
        "\w"


        \W
        Returns a match where the string DOES NOT contain any word characters
        "\W"


        \Z
        Returns a match if the specified characters are at the end of the string
        "Spain\Z"




        <h3>Sets</h3>
        A set is a set of characters inside a pair of square brackets [] with a special meaning:
        Set
        Description


        [arn]
        Returns a match where one of the specified characters (a, r, or n) are present


        [a-n]
        Returns a match for any lower case character, alphabetically between a and n


        [^arn]
        Returns a match for any character EXCEPT a, r, and n


        [0123]
        Returns a match where any of the specified digits (0, 1, 2, or 3) are present


        [0-9]
        Returns a match for any digit between 0 and 9


        [0-5][0-9]
        Returns a match for any two-digit numbers from 00 and 59


        [a-zA-Z]
        Returns a match for any character alphabetically between a and z, lower case OR upper case


        [+]
        In sets, +, *, ., |, (), $,{} has no special meaning, so [+] means: return a match for any + character in the string





        <h4>The findall() Function</h4>
        The findall() function returns a list containing all matches.
        The list contains the matches in the order they are found.
        If no matches are found, an empty list is returned

        <h4>The search() Function</h4>
        The search() function searches the string for a match, and returns a Match object if there is a match.
        If there is more than one match, only the first occurrence of the match will be returned
        If no matches are found, the value None is returned

        <h4>The split() Function</h4>
        The split() function returns a list where the string has been split at each match

        h4>The sub() Functionh</h4>
        The sub() function replaces the matches with the text of your choice

        <h3>Match Object</h3>
        A Match Object is an object containing information about the search and the result.
        Note: If there is no match, the value None will be returned, instead of the Match Object.
        The Match object has properties and methods used to retrieve information about the search, and the result:
        .span() returns a tuple containing the start-, and end positions of the match.
        .string returns the string passed into the function
        .group() returns the part of the string where there was a match


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