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
    <h2>Getting Started - What is Git?</h2>
  <div>
<h3 id="what_is_git_section">What is Git?</h3>
<div class="paragraph">
So, what is Git in a nutshell?
This is an important section to absorb, because if you understand what Git is and the fundamentals of how it works, then using Git effectively will probably be much easier for you.
As you learn Git, try to clear your mind of the things you may know about other VCSs, such as CVS, Subversion or Perforce&thinsp;—&thinsp;doing so will help you avoid subtle confusion when using the tool.
Even though Git’s user interface is fairly similar to these other VCSs, Git stores and thinks about information in a very different way, and understanding these differences will help you avoid becoming confused while using it.
</div>
<div class="sect3">
<h3 id="_snapshots_not_differences">Snapshots, Not Differences</h3>
<div class="paragraph">
The major difference between Git and any other VCS (Subversion and friends included) is the way Git thinks about its data.
Conceptually, most other systems store information as a list of file-based changes.
These other systems (CVS, Subversion, Perforce, Bazaar, and so on) think of the information they store as a set of files and the changes made to each file over time (this is commonly described as <em>delta-based</em> version control).
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/deltas.png" alt="Storing data as changes to a base version of each file">
</div>
<div class="title">Figure 4. Storing data as changes to a base version of each file</div>
</div><br><br>
<div class="paragraph">
Git doesn’t think of or store its data this way.
Instead, Git thinks of its data more like a series of snapshots of a miniature filesystem.
With Git, every time you commit, or save the state of your project, Git basically takes a picture of what all your files look like at that moment and stores a reference to that snapshot.
To be efficient, if files have not changed, Git doesn’t store the file again, just a link to the previous identical file it has already stored.
Git thinks about its data more like a <strong>stream of snapshots</strong>.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/snapshots.png" alt="Git stores data as snapshots of the project over time">
</div>
<div class="title">Figure 5. Storing data as snapshots of the project over time</div>
</div><br><br>
<div class="paragraph">
This is an important distinction between Git and nearly all other VCSs.
It makes Git reconsider almost every aspect of version control that most other systems copied from the previous generation.
This makes Git more like a mini filesystem with some incredibly powerful tools built on top of it, rather than simply a VCS.
We’ll explore some of the benefits you gain by thinking of your data this way when we cover Git branching
</div>
</div>
<div class="sect3">
<h3 id="_nearly_every_operation_is_local">Nearly Every Operation Is Local</h3>
<div class="paragraph">
Most operations in Git need only local files and resources to operate&thinsp;—&thinsp;generally no information is needed from another computer on your network.
If you’re used to a CVCS where most operations have that network latency overhead, this aspect of Git will make you think that the gods of speed have blessed Git with unworldly powers.
Because you have the entire history of the project right there on your local disk, most operations seem almost instantaneous.
</div><br>
<div class="paragraph">
For example, to browse the history of the project, Git doesn’t need to go out to the server to get the history and display it for you&thinsp;—&thinsp;it simply reads it directly from your local database.
This means you see the project history almost instantly.
If you want to see the changes introduced between the current version of a file and the file a month ago, Git can look up the file a month ago and do a local difference calculation, instead of having to either ask a remote server to do it or pull an older version of the file from the remote server to do it locally.
</div><br>
<div class="paragraph">
This also means that there is very little you can’t do if you’re offline or off VPN.
If you get on an airplane or a train and want to do a little work, you can commit happily (to your <em>local</em> copy, remember?) until you get to a network connection to upload.
If you go home and can’t get your VPN client working properly, you can still work.
In many other systems, doing so is either impossible or painful.
In Perforce, for example, you can’t do much when you aren’t connected to the server; in Subversion and CVS, you can edit files, but you can’t commit changes to your database (because your database is offline).
This may not seem like a huge deal, but you may be surprised what a big difference it can make.
</div>
</div>
<div class="sect3">
<h3 id="_git_has_integrity">Git Has Integrity</h3>
<div class="paragraph">
Everything in Git is checksummed before it is stored and is then referred to by that checksum.
This means it’s impossible to change the contents of any file or directory without Git knowing about it.
This functionality is built into Git at the lowest levels and is integral to its philosophy.
You can’t lose information in transit or get file corruption without Git being able to detect it.
</div><br>
<div class="paragraph">
The mechanism that Git uses for this checksumming is called a SHA-1 hash.
This is a 40-character string composed of hexadecimal characters (0–9 and a–f) and calculated based on the contents of a file or directory structure in Git.
A SHA-1 hash looks something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote>24b9da6552252987aa493b52f8696cd6d3b00373</blockquote></pre>
</div>
</div>
<div class="paragraph">
You will see these hash values all over the place in Git because it uses them so much.
In fact, Git stores everything in its database not by file name but by the hash value of its contents.
</div>
</div>
<div class="sect3">
<h3 id="_git_generally_only_adds_data">Git Generally Only Adds Data</h3>
<div class="paragraph">
When you do actions in Git, nearly all of them only <em>add</em> data to the Git database.
It is hard to get the system to do anything that is not undoable or to make it erase data in any way.
As with any VCS, you can lose or mess up changes you haven’t committed yet, but after you commit a snapshot into Git, it is very difficult to lose, especially if you regularly push your database to another repository.
</div><br>
<div class="paragraph">
This makes using Git a joy because we know we can experiment without the danger of severely screwing things up.
For a more in-depth look at how Git stores its data and how you can recover data that seems lost.
</div>
</div>
<div class="sect3">
<h3 id="_the_three_states">The Three States</h3>
<div class="paragraph">
Pay attention now&thinsp;—&thinsp;here is the main thing to remember about Git if you want the rest of your learning process to go smoothly.
Git has three main states that your files can reside in: <em>modified</em>, <em>staged</em>, and <em>committed</em>:
</div>
<div class="ulist">
<ul>
<li>
Modified means that you have changed the file but have not committed it to your database yet.
</li>
<li>
Staged means that you have marked a modified file in its current version to go into your next commit snapshot.
</li>
<li>
Committed means that the data is safely stored in your local database.
</li>
</ul>
</div>
<div class="paragraph">
This leads us to the three main sections of a Git project: the working tree, the staging area, and the Git directory.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/areas.png" alt="Working tree, staging area, and Git directory.">
</div>
<div class="title">Figure 6. Working tree, staging area, and Git directory</div>
</div><br><br>
<div class="paragraph">
The working tree is a single checkout of one version of the project.
These files are pulled out of the compressed database in the Git directory and placed on disk for you to use or modify.
</div><br>
<div class="paragraph">
The staging area is a file, generally contained in your Git directory, that stores information about what will go into your next commit.
Its technical name in Git parlance is the “index”, but the phrase “staging area” works just as well.
</div><br>
<div class="paragraph">
The Git directory is where Git stores the metadata and object database for your project.
This is the most important part of Git, and it is what is copied when you <em>clone</em> a repository from another computer.
</div><br>
<div class="paragraph">
The basic Git workflow goes something like this:
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
You modify files in your working tree.
</li>
<li>
You selectively stage just those changes you want to be part of your next commit, which adds <em>only</em> those changes to the staging area.
</li>
<li>
You do a commit, which takes the files as they are in the staging area and stores that snapshot permanently to your Git directory.
</li>
</ol>
</div>
<div class="paragraph">
If a particular version of a file is in the Git directory, it’s considered <em>committed</em>.
If it has been modified and was added to the staging area, it is <em>staged</em>.
And if it was changed since it was checked out but has not been staged, it is <em>modified</em>.
In Git Basics, you’ll learn more about these states and how you can either take advantage of them or skip the staged part entirely.
</div>
</div></div>
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