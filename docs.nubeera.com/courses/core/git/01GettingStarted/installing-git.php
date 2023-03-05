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
    <h2>Getting Started - Installing Git</h2>
  <div>
<h3 id="_installing_git">Installing Git</h3>
<div class="paragraph">
Before you start using Git, you have to make it available on your computer.
Even if it’s already installed, it’s probably a good idea to update to the latest version.
You can either install it as a package or via another installer, or download the source code and compile it yourself.
</div>

<div class="sect3">
<h3 id="_installing_on_linux">Installing on Linux</h3>
<div class="paragraph">

If you want to install the basic Git tools on Linux via a binary installer, you can generally do so through the package management tool that comes with your distribution.
If you’re on Fedora (or any closely-related RPM-based distribution, such as RHEL or CentOS), you can use <code>dnf</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ sudo dnf install git-all</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you’re on a Debian-based distribution, such as Ubuntu, try <code>apt</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ sudo apt install git-all</blockquote></pre>
</div>
</div>
<div class="paragraph">
For more options, there are instructions for installing on several different Unix distributions on the Git website, at <a href="https://git-scm.com/download/linux" class="bare">https://git-scm.com/download/linux</a>.
</div>
</div>
<div class="sect3">
<h3 id="_installing_on_macos">Installing on macOS</h3>
<div class="paragraph">

There are several ways to install Git on a Mac.
The easiest is probably to install the Xcode Command Line Tools.
On Mavericks (10.9) or above you can do this simply by trying to run <code>git</code> from the Terminal the very first time.
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git --version</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you don’t have it installed already, it will prompt you to install it.
</div><br>
<div class="paragraph">
If you want a more up to date version, you can also install it via a binary installer.
A macOS Git installer is maintained and available for download at the Git website, at <a href="https://git-scm.com/download/mac" class="bare">https://git-scm.com/download/mac</a>.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/git-osx-installer.png" alt="Git macOS installer">
</div>
<div class="title">Figure 7. Git macOS Installer</div>
</div>
</div><br><br>
<div class="sect3">
<h3 id="_installing_on_windows">Installing on Windows</h3>
<div class="paragraph">
There are also a few ways to install Git on Windows.
The most official build is available for download on the Git website.
Just go to <a href="https://git-scm.com/download/win" class="bare">https://git-scm.com/download/win</a> and the download will start automatically.
Note that this is a project called Git for Windows, which is separate from Git itself; for more information on it, go to <a href="https://gitforwindows.org" class="bare">https://gitforwindows.org</a>.
</div>
<div class="paragraph">
To get an automated installation you can use the <a href="https://chocolatey.org/packages/git">Git Chocolatey package</a>.
Note that the Chocolatey package is community maintained.
</div>
</div>
<div class="sect3">
<h3 id="_installing_from_source">Installing from Source</h3>
<div class="paragraph">
Some people may instead find it useful to install Git from source, because you’ll get the most recent version.
The binary installers tend to be a bit behind, though as Git has matured in recent years, this has made less of a difference.
</div><br>
<div class="paragraph">
If you do want to install Git from source, you need to have the following libraries that Git depends on: autotools, curl, zlib, openssl, expat, and libiconv.
For example, if you’re on a system that has <code>dnf</code> (such as Fedora) or <code>apt-get</code> (such as a Debian-based system), you can use one of these commands to install the minimal dependencies for compiling and installing the Git binaries:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ sudo dnf install dh-autoreconf curl-devel expat-devel gettext-devel \
  openssl-devel perl-devel zlib-devel
$ sudo apt-get install dh-autoreconf libcurl4-gnutls-dev libexpat1-dev \
  gettext libz-dev libssl-dev</blockquote></pre>
</div>
</div>
<div class="paragraph">
In order to be able to add the documentation in various formats (doc, html, info), these additional dependencies are required:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ sudo dnf install asciidoc xmlto docbook2X
$ sudo apt-get install asciidoc xmlto docbook2x</blockquote></pre>
</div>
</div>

<div class="paragraph">
If you’re using a Debian-based distribution (Debian/Ubuntu/Ubuntu-derivatives), you also need the <code>install-info</code> package:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ sudo apt-get install install-info</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you’re using a RPM-based distribution (Fedora/RHEL/RHEL-derivatives), you also need the <code>getopt</code> package (which is already installed on a Debian-based distro):
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ sudo dnf install getopt</blockquote></pre>
</div>
</div>
<div class="paragraph">
Additionally, if you’re using Fedora/RHEL/RHEL-derivatives, you need to do this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ sudo ln -s /usr/bin/db2x_docbook2texi /usr/bin/docbook2x-texi</blockquote></pre>
</div>
</div>
<div class="paragraph">
due to binary name differences.
</div><br>
<div class="paragraph">
When you have all the necessary dependencies, you can go ahead and grab the latest tagged release tarball from several places.
You can get it via the kernel.org site, at <a href="https://www.kernel.org/pub/software/scm/git" class="bare">https://www.kernel.org/pub/software/scm/git</a>, or the mirror on the GitHub website, at <a href="https://github.com/git/git/releases" class="bare">https://github.com/git/git/releases</a>.
It’s generally a little clearer what the latest version is on the GitHub page, but the kernel.org page also has release signatures if you want to verify your download.
</div><br>
<div class="paragraph">
Then, compile and install:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ tar -zxf git-2.8.0.tar.gz
$ cd git-2.8.0
$ make configure
$ ./configure --prefix=/usr
$ make all doc info
$ sudo make install install-doc install-html install-info</blockquote></pre>
</div>
</div>
<div class="paragraph">
After this is done, you can also get Git via Git itself for updates:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git clone git://git.kernel.org/pub/scm/git/git.git</blockquote></pre>
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