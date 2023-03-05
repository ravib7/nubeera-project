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
	<?php require '../../../../templates/navbar.php';?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Getting Started</strong><br><br>
                     <ul>
                     <li><a href="index.php">About version control</a></li>
                     <li><a href="short-history-of-git.php">Short history of git</a></li>
                     <li><a href="what-is-git.php">What is Git?</a></li>
                     <li><a href="the-command-line.php">The Command Line</a></li>
                     <li><a href="installing-git.php">Installing Git</a></li>
                     <li><a href="first-time-git-setup.php">First-Time Git setup</a></li>
                     <li><a href="getting-help.php">Getting Help</a></li>
                  </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Getting Started with Git</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Getting started</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                  <div id="main" class="book edition2">
    <h2>Getting Started - First-Time Git Setup</h2>
  <div>
<h3 id="_first_time">First-Time Git Setup</h3>
<div class="paragraph">
Now that you have Git on your system, you’ll want to do a few things to customize your Git environment.
You should have to do these things only once on any given computer; they’ll stick around between upgrades.
You can also change them at any time by running through the commands again.
</div><br>
<div class="paragraph">
Git comes with a tool called <code>git config</code> that lets you get and set configuration variables that control all aspects of how Git looks and operates.
These variables can be stored in three different places:
</div><br>
<div class="olist arabic">
<ol class="arabic">
<li>
<code>[path]/etc/gitconfig</code> file: Contains values applied to every user on the system and all their repositories.
If you pass the option <code>--system</code> to <code>git config</code>, it reads and writes from this file specifically.
Because this is a system configuration file, you would need administrative or superuser privilege to make changes to it.
</li>
<li>
<code>~/.gitconfig</code> or <code>~/.config/git/config</code> file: Values specific personally to you, the user.
You can make Git read and write to this file specifically by passing the <code>--global</code> option, and this affects <em>all</em> of the repositories you work with on your system.
</li>
<li>
<code>config</code> file in the Git directory (that is, <code>.git/config</code>) of whatever repository you’re currently using: Specific to that single repository.
You can force Git to read from and write to this file with the <code>--local</code> option, but that is in fact the default.
Unsurprisingly, you need to be located somewhere in a Git repository for this option to work properly.
</li>
</ol>
</div>
<div class="paragraph">
Each level overrides values in the previous level, so values in <code>.git/config</code> trump those in <code>[path]/etc/gitconfig</code>.
</div>
<div class="paragraph">
On Windows systems, Git looks for the <code>.gitconfig</code> file in the <code>$HOME</code> directory (<code>C:\Users\$USER</code> for most people).
It also still looks for <code>[path]/etc/gitconfig</code>, although it’s relative to the MSys root, which is wherever you decide to install Git on your Windows system when you run the installer.
If you are using version 2.x or later of Git for Windows, there is also a system-level config file at
<code>C:\Documents and Settings\All Users\Application Data\Git\config</code> on Windows XP, and in <code>C:\ProgramData\Git\config</code> on Windows Vista and newer.
This config file can only be changed by <code>git config -f &lt;file&gt;</code> as an admin.
</div><br>
<div class="paragraph">
You can view all of your settings and where they are coming from using:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config --list --show-origin</blockquote></pre>
</div>
</div>
<div class="sect3">
<h3 id="_your_identity">Your Identity</h3>
<div class="paragraph">
The first thing you should do when you install Git is to set your user name and email address.
This is important because every Git commit uses this information, and it’s immutably baked into the commits you start creating:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config --global user.name "John Doe"
$ git config --global user.email johndoe@example.com</blockquote></pre>
</div>
</div>
<div class="paragraph">
Again, you need to do this only once if you pass the <code>--global</code> option, because then Git will always use that information for anything you do on that system.
If you want to override this with a different name or email address for specific projects, you can run the command without the <code>--global</code> option when you’re in that project.
</div><br>
<div class="paragraph">
Many of the GUI tools will help you do this when you first run them.
</div>
</div>
<div class="sect3">
<h3 id="_editor">Your Editor</h3>
<div class="paragraph">
Now that your identity is set up, you can configure the default text editor that will be used when Git needs you to type in a message.
If not configured, Git uses your system’s default editor.
</div><br>
<div class="paragraph">
If you want to use a different text editor, such as Emacs, you can do the following:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config --global core.editor emacs</blockquote></pre>
</div>
</div>
<div class="paragraph">
On a Windows system, if you want to use a different text editor, you must specify the full path to its executable file.
This can be different depending on how your editor is packaged.
</div><br>
<div class="paragraph">
In the case of Notepad++, a popular programming editor, you are likely to want to use the 32-bit version, since at the time of writing the 64-bit version doesn’t support all plug-ins.
If you are on a 32-bit Windows system, or you have a 64-bit editor on a 64-bit system, you’ll type something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config --global core.editor "'C:/Program Files/Notepad++/notepad++.exe' -multiInst -notabbar -nosession -noPlugin"</blockquote></pre>
</div>
</div>

<div class="sect3">
<h3 id="_your_default_branch_name">Your default branch name</h3>
<div class="paragraph">
By default Git will create a branch called <em>master</em> when you create a new repository with <code>git init</code>.
From Git version 2.28 onwards, you can set a different name for the initial branch.
</div><br>
<div class="paragraph">
To set <em>main</em> as the default branch name do:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config --global init.defaultBranch main</blockquote></pre>
</div>
</div>
</div>
<div class="sect3">
<h3 id="_checking_your_settings">Checking Your Settings</h3>
<div class="paragraph">
If you want to check your configuration settings, you can use the <code>git config --list</code> command to list all the settings Git can find at that point:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config --list
user.name=John Doe
user.email=johndoe@example.com
color.status=auto
color.branch=auto
color.interactive=auto
color.diff=auto
...</blockquote></pre>
</div>
</div>
<div class="paragraph">
You may see keys more than once, because Git reads the same key from different files (<code>[path]/etc/gitconfig</code> and <code>~/.gitconfig</code>, for example).
In this case, Git uses the last value for each unique key it sees.
</div><br>
<div class="paragraph">
You can also check what Git thinks a specific key’s value is by typing <code>git config &lt;key&gt;</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config user.name
John Doe</blockquote></pre>
</div>
</div>

<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git config --show-origin rerere.autoUpdate
file:/home/johndoe/.gitconfig	false</blockquote></pre>
</div>
</div>

</div>
</div>
</div>
</div>
            </div>
       </div>
	<?php require "../../../../templates/footer_outer.php"?>
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