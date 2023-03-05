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
			<h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Getting a Git Repository</h1>
			<ol class="breadcrumb mx-5 mt-3 px-0">
				<li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li class="breadcrumb-item"><a href="../../">Core</a></li>
				<li class="breadcrumb-item"><a href="../">Git</a></li>
				<li class="breadcrumb-item active">Git Basics</li>
			</ol>
			<div class="px-5 pb-5 pt-0 body-text">
				<div id="main" class="book edition2">
					<h2></h2>
					<div>If you can read only one chapter to get going with Git, this is it.
						This chapter covers every basic command you need to do the vast majority of the things you’ll eventually spend your time doing with Git.
						By the end of the chapter, you should be able to configure and initialize a repository, begin and stop tracking files, and stage and commit changes.
						We’ll also show you how to set up Git to ignore certain files and file patterns, how to undo mistakes quickly and easily, how to browse the history of your project and view changes between commits, and how to push and pull from remote repositories.
						<h2 id="_getting_a_repo">Getting a Git Repository</h2>
						<div class="paragraph">
							You typically obtain a Git repository in one of two ways:
						</div>
						<div class="olist arabic">
							<ol class="arabic">
								<li>
									You can take a local directory that is currently not under version control, and turn it into a Git repository, or
								</li>
								<li>
									You can <em>clone</em> an existing Git repository from elsewhere.
								</li>
							</ol>
						</div>
						<div class="paragraph">
							In either case, you end up with a Git repository on your local machine, ready for work.
						</div>
						<div class="sect3">
							<h3 id="_initializing_a_repository_in_an_existing_directory">Initializing a Repository in an Existing Directory</h3>
							<div class="paragraph">
								If you have a project directory that is currently not under version control and you want to start controlling it with Git, you first need to go to that project’s directory.
								If you’ve never done this, it looks a little different depending on which system you’re running:
							</div>
							<div class="paragraph">
								for Linux:
							</div>
							<div class="listingblock">
								<div class="content">
									<pre class="highlight"><blockquote class="language-console" data-lang="console">$ cd /home/user/my_project</blockquote></pre>
								</div>
							</div>
							<div class="paragraph">
								for macOS:
							</div>
							<div class="listingblock">
								<div class="content">
									<pre class="highlight"><blockquote class="language-console" data-lang="console">$ cd /Users/user/my_project</blockquote></pre>
								</div>
							</div>
							<div class="paragraph">
								for Windows:
							</div>
							<div class="listingblock">
								<div class="content">
									<pre class="highlight"><blockquote class="language-console" data-lang="console">$ cd C:/Users/user/my_project</blockquote></pre>
								</div>
							</div>
							<div class="paragraph">
								and type:
							</div>
							<div class="listingblock">
								<div class="content">
									<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git init</blockquote></pre>
								</div>
							</div>
							<div class="paragraph">
								This creates a new subdirectory named <code>.git</code> that contains all of your necessary repository files&thinsp;—&thinsp;a Git repository skeleton.
								At this point, nothing in your project is tracked yet.
								See <a href="ch00/ch10-git-internals">Git Internals</a> for more information about exactly what files are contained in the <code>.git</code> directory you just created.
							</div><br>
							<div class="paragraph">
								If you want to start version-controlling existing files (as opposed to an empty directory), you should probably begin tracking those files and do an initial commit.
								You can accomplish that with a few <code>git add</code> commands that specify the files you want to track, followed by a <code>git commit</code>:
							</div>
							<div class="listingblock">
								<div class="content">
									<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git add *.c
$ git add LICENSE
$ git commit -m 'Initial project version'</blockquote></pre>
								</div>
							</div>
							<div class="paragraph">
								We’ll go over what these commands do in just a minute.
								At this point, you have a Git repository with tracked files and an initial commit.
							</div>
						</div>
						<div class="sect3">
							<h3 id="_git_cloning">Cloning an Existing Repository</h3>
							<div class="paragraph">
								If you want to get a copy of an existing Git repository&thinsp;—&thinsp;for example, a project you’d like to contribute to&thinsp;—&thinsp;the command you need is <code>git clone</code>.
								If you’re familiar with other VCSs such as Subversion, you’ll notice that the command is "clone" and not "checkout".
								This is an important distinction&thinsp;—&thinsp;instead of getting just a working copy, Git receives a full copy of nearly all data that the server has.
								Every version of every file for the history of the project is pulled down by default when you run <code>git clone</code>.
								In fact, if your server disk gets corrupted, you can often use nearly any of the clones on any client to set the server back to the state it was in when it was cloned (you may lose some server-side hooks and such, but all the versioned data would be there&thinsp;—&thinsp;see <a href="ch00/_getting_git_on_a_server">Getting Git on a Server</a> for more details).
							</div><br>
							<div class="paragraph">
								You clone a repository with <code>git clone &lt;url&gt;</code>.
								For example, if you want to clone the Git linkable library called <code>libgit2</code>, you can do so like this:
							</div>
							<div class="listingblock">
								<div class="content">
									<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git clone https://github.com/libgit2/libgit2</blockquote></pre>
								</div>
							</div>
							<div class="paragraph">
								That creates a directory named <code>libgit2</code>, initializes a <code>.git</code> directory inside it, pulls down all the data for that repository, and checks out a working copy of the latest version.
								If you go into the new <code>libgit2</code> directory that was just created, you’ll see the project files in there, ready to be worked on or used.
							</div><br>
							<div class="paragraph">
								If you want to clone the repository into a directory named something other than <code>libgit2</code>, you can specify the new directory name as an additional argument:
							</div>
							<div class="listingblock">
								<div class="content">
									<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git clone https://github.com/libgit2/libgit2 mylibgit</blockquote></pre>
								</div>
							</div>
							<div class="paragraph">
								That command does the same thing as the previous one, but the target directory is called <code>mylibgit</code>.
							</div><br>
							<div class="paragraph">
								Git has a number of different transfer protocols you can use.
								The previous example uses the <code>https://</code> protocol, but you may also see <code>git://</code> or <code>user@server:path/to/repo.git</code>, which uses the SSH transfer protocol.
								Getting Git on a Server will introduce all of the available options the server can set up to access your Git repository and the pros and cons of each.
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