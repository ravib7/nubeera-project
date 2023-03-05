<!DOCTYPE html>
<html lang="en">

<head>
	<title>NubeEra Git Docs</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="NubeEra Git Docs">

	<link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">

	<!-- FontAwesome JS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="../../../../assets/css/theme.css">

	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
	<link rel="stylesheet" href="../../../../boto_topics.css">

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

	<div id="modal-sidepanel">

		<div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
			<button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
			<div class="col-md-12 side-panel">
				<strong class="px-2" style="font-size: 1.125rem;">Git Basics</strong><br><br>
				<ul>
					<li><a href="index.php">Getting a Git Repository</a></li>
					<li><a href="recording-changes-to-repository.php">Recording Changes to the Repository </a></li>
					<li><a href="viewing-the-commit-history.php">Viewing the Commit History</a></li>
					<li><a href="undoing-things.php">Undoing Things</a></li>
					<li><a href="working-with-remotes.php">Working with Remotes</a></li>
					<li><a href="tagging.php">Tagging</a></li>
					<li><a href="git-aliases.php">Git Aliases</a></li>
				</ul>
			</div>
		</div>

	</div>
	<span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

	<div class="content-box" id="content-box">
		<div class="body-content">
			<h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Git Aliases</h1>
			<ol class="breadcrumb mx-5 mt-3 px-0">
				<li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li class="breadcrumb-item"><a href="../../">Core</a></li>
				<li class="breadcrumb-item"><a href="../">Git</a></li>
				<li class="breadcrumb-item active">Git Basics</li>
			</ol>
			<div class="px-5 pb-5 pt-0 body-text">
						<div class="paragraph">
							
								Before we move on to the next chapter, we want to introduce a feature that can make your Git experience simpler, easier, and more familiar: aliases.
								For clarity’s sake, we won’t be using them anywhere else in this book, but if you go on to use Git with any regularity, aliases are something you should know about.
						</div><br>
						<div class="paragraph">
							Git doesn’t automatically infer your command if you type it in partially.
								If you don’t want to type the entire text of each of the Git commands, you can easily set up an alias for each command using <code>git config</code>.
								Here are a couple of examples you may want to set up:
						</div>
						<div class="listingblock">
							<div class="content">
								<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config --global alias.co checkout
$ git config --global alias.br branch
$ git config --global alias.ci commit
$ git config --global alias.st status</blockquote></pre>
							</div>
						</div>
						<div class="paragraph">
							This means that, for example, instead of typing <code>git commit</code>, you just need to type <code>git ci</code>.
								As you go on using Git, you’ll probably use other commands frequently as well; don’t hesitate to create new aliases.
						</div><br>
						<div class="paragraph">
							This technique can also be very useful in creating commands that you think should exist.
								For example, to correct the usability problem you encountered with unstaging a file, you can add your own unstage alias to Git:
						</div>
						<div class="listingblock">
							<div class="content">
								<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config --global alias.unstage 'reset HEAD --'</blockquote></pre>
							</div>
						</div>
						<div class="paragraph">
							This makes the following two commands equivalent:
						</div>
						<div class="listingblock">
							<div class="content">
								<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git unstage fileA
$ git reset HEAD -- fileA</blockquote></pre>
							</div>
						</div>
						<div class="paragraph">
							This seems a bit clearer.
								It’s also common to add a <code>last</code> command, like this:
						</div>
						<div class="listingblock">
							<div class="content">
								<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config --global alias.last 'log -1 HEAD'</blockquote></pre>
							</div>
						</div>
						<div class="paragraph">
							This way, you can see the last commit easily:
						</div>
						<div class="listingblock">
							<div class="content">
								<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git last
commit 66938dae3329c7aebe598c2246a8e6af90d04646
Author: Josh Goebel &lt;dreamer3@example.com&gt;
Date:   Tue Aug 26 19:48:51 2008 +0800

    Test for current head

    Signed-off-by: Scott Chacon &lt;schacon@example.com&gt;</blockquote></pre>
							</div>
						</div>
						<div class="paragraph">
							As you can tell, Git simply replaces the new command with whatever you alias it for.
								However, maybe you want to run an external command, rather than a Git subcommand.
								In that case, you start the command with a <code>!</code> character.
								This is useful if you write your own tools that work with a Git repository.
								We can demonstrate by aliasing <code>git visual</code> to run <code>gitk</code>:
						</div>
						<div class="listingblock">
							<div class="content">
								<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config --global alias.visual '!gitk'</blockquote></pre>
							</div>
						</div>
						
					</div>
				</div>

			</div>
		</div>
		<?php require "../../../../templates/footer_outer.php" ?>
	</div>
	<!-- Javascript -->

	<script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
	<script defer src="../../../../assets/fontawesome/js/all.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
	<script src="https://www.nubeera.com/js/navmenu.js"></script>
	<script>
		function openNav() {
			var x = document.getElementById("side-panel-box");
			if (x.style.left == "0px") {
				x.style.left = "-25%";
				$('#side-panel-toggle').css("left", "101%");
				$('#content-box').css("marginRight", "12%");
				$('#content-box').css('marginLeft', '12%');
				$('#side-panel-toggle').html("<i class='fa fa-chevron-right' aria-hidden='true'></i>");
			} else {
				x.style.left = "0px";
				$('#side-panel-toggle').css("left", "80%");
				$('#content-box').css("marginRight", "");
				$('#content-box').css('marginLeft', '24%');
				$('#side-panel-toggle').html("<i class='fa fa-chevron-left' aria-hidden='true'></i>");
			}
		}
		var x = window.matchMedia("(max-width: 750px)");
		myFunction(x); // Call listener function at run time
		x.addListener(myFunction);

		function myFunction(x) {
			if (x.matches) { // If media query matches
				$('#modal-sidepanel').attr('class', 'modal');
			} else {
				$('#modal-sidepanel').attr('class', '');
			}
		}
	</script>
</body>

</html>