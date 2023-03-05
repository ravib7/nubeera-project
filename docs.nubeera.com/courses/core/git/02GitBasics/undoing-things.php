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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Undoing Things</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Git Basics</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
<div class="paragraph">
At any stage, you may want to undo something.
Here, we’ll review a few basic tools for undoing changes that you’ve made.
Be careful, because you can’t always undo some of these undos.
This is one of the few areas in Git where you may lose some work if you do it wrong.
</div><br>
<div class="paragraph">
One of the common undos takes place when you commit too early and possibly forget to add some files, or you mess up your commit message.
If you want to redo that commit, make the additional changes you forgot, stage them, and commit again using the <code>--amend</code> option:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git commit --amend</blockquote></pre>
</div>
</div>
<div class="paragraph">
This command takes your staging area and uses it for the commit.
If you’ve made no changes since your last commit (for instance, you run this command immediately after your previous commit), then your snapshot will look exactly the same, and all you’ll change is your commit message.
</div><br>
<div class="paragraph">
The same commit-message editor fires up, but it already contains the message of your previous commit.
You can edit the message the same as always, but it overwrites your previous commit.
</div><br>
<div class="paragraph">
As an example, if you commit and then realize you forgot to stage the changes in a file you wanted to add to this commit, you can do something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git commit -m 'Initial commit'
$ git add forgotten_file
$ git commit --amend</blockquote></pre>
</div>
</div>
<div class="paragraph">
You end up with a single commit&thinsp;—&thinsp;the second commit replaces the results of the first.
</div>
<div class="sect3">
<h3 id="_unstaging">Unstaging a Staged File</h3>
<div class="paragraph">
The next two sections demonstrate how to work with your staging area and working directory changes.
The nice part is that the command you use to determine the state of those two areas also reminds you how to undo changes to them.
For example, let’s say you’ve changed two files and want to commit them as two separate changes, but you accidentally type <code>git add *</code> and stage them both.
How can you unstage one of the two?
The <code>git status</code> command reminds you:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git add *
$ git status
On branch master
Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

    renamed:    README.md -&gt; README
    modified:   CONTRIBUTING.md</blockquote></pre>
</div>
</div>
<div class="paragraph">
Right below the “Changes to be committed” text, it says use <code>git reset HEAD &lt;file&gt;…&ZeroWidthSpace;</code> to unstage.
So, let’s use that advice to unstage the <code>CONTRIBUTING.md</code> file:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git reset HEAD CONTRIBUTING.md
Unstaged changes after reset:
M	CONTRIBUTING.md
$ git status
On branch master
Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

    renamed:    README.md -&gt; README

Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)

    modified:   CONTRIBUTING.md</blockquote></pre>
</div>
</div>
<div class="paragraph">
The command is a bit strange, but it works.
The <code>CONTRIBUTING.md</code> file is modified but once again unstaged.
</div>
<div class="paragraph">
For now this magic invocation is all you need to know about the <code>git reset</code> command.
We’ll go into much more detail about what <code>reset</code> does and how to master it to do really interesting things in Reset Demystified.
</div>
</div>
<div class="sect3">
<h3 id="_unmodifying_a_modified_file">Unmodifying a Modified File</h3>
<div class="paragraph">
What if you realize that you don’t want to keep your changes to the <code>CONTRIBUTING.md</code> file?
How can you easily unmodify it&thinsp;—&thinsp;revert it back to what it looked like when you last committed (or initially cloned, or however you got it into your working directory)?
Luckily, <code>git status</code> tells you how to do that, too.
In the last example output, the unstaged area looks like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)

    modified:   CONTRIBUTING.md</blockquote></pre>
</div>
</div>
<div class="paragraph">
It tells you pretty explicitly how to discard the changes you’ve made.
Let’s do what it says:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout -- CONTRIBUTING.md
$ git status
On branch master
Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

    renamed:    README.md -&gt; README</blockquote></pre>
</div>
</div>
<div class="paragraph">
You can see that the changes have been reverted.
</div>
<div class="paragraph">
If you would like to keep the changes you’ve made to that file but still need to get it out of the way for now, we’ll go over stashing and branching Git Branching; these are generally better ways to go.
</div><br>
<div class="paragraph">
Remember, anything that is <em>committed</em> in Git can almost always be recovered.
Even commits that were on branches that were deleted or commits that were overwritten with an <code>--amend</code> commit can be recovered.
However, anything you lose that was never committed is likely never to be seen again.
</div>
</div>
<div class="sect3">
<h3 id="undoing_git_restore">Undoing things with git restore</h3>
<div class="paragraph">
Git version 2.23.0 introduced a new command: <code>git restore</code>.
It’s basically an alternative to <code>git reset</code> which we just covered.
From Git version 2.23.0 onwards, Git will use <code>git restore</code> instead of <code>git reset</code> for many undo operations.
</div><br>
<div class="paragraph">
Let’s retrace our steps, and undo things with <code>git restore</code> instead of <code>git reset</code>.
</div>
<div class="sect4">
<h4 id="_unstaging_a_staged_file_with_git_restore">Unstaging a Staged File with git restore</h4>
<div class="paragraph">
The next two sections demonstrate how to work with your staging area and working directory changes with <code>git restore</code>.
The nice part is that the command you use to determine the state of those two areas also reminds you how to undo changes to them.
For example, let’s say you’ve changed two files and want to commit them as two separate changes, but you accidentally type <code>git add *</code> and stage them both.
How can you unstage one of the two?
The <code>git status</code> command reminds you:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git add *
$ git status
On branch master
Changes to be committed:
  (use "git restore --staged &lt;file&gt;..." to unstage)
	modified:   CONTRIBUTING.md
	renamed:    README.md -&gt; README</blockquote></pre>
</div>
</div>
<div class="paragraph">
Right below the “Changes to be committed” text, it says use <code>git restore --staged &lt;file&gt;…&ZeroWidthSpace;</code> to unstage.
So, let’s use that advice to unstage the <code>CONTRIBUTING.md</code> file:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git restore --staged CONTRIBUTING.md
$ git status
On branch master
Changes to be committed:
  (use "git restore --staged &lt;file&gt;..." to unstage)
	renamed:    README.md -&gt; README

Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git restore &lt;file&gt;..." to discard changes in working directory)
	modified:   CONTRIBUTING.md</blockquote></pre>
</div>
</div>
<div class="paragraph">
The <code>CONTRIBUTING.md</code> file is modified but once again unstaged.
</div>
</div>
<div class="sect4">
<h4 id="_unmodifying_a_modified_file_with_git_restore">Unmodifying a Modified File with git restore</h4>
<div class="paragraph">
What if you realize that you don’t want to keep your changes to the <code>CONTRIBUTING.md</code> file?
How can you easily unmodify it&thinsp;—&thinsp;revert it back to what it looked like when you last committed (or initially cloned, or however you got it into your working directory)?
Luckily, <code>git status</code> tells you how to do that, too.
In the last example output, the unstaged area looks like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git restore &lt;file&gt;..." to discard changes in working directory)
	modified:   CONTRIBUTING.md</blockquote></pre>
</div>
</div>
<div class="paragraph">
It tells you pretty explicitly how to discard the changes you’ve made.
Let’s do what it says:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git restore CONTRIBUTING.md
$ git status
On branch master
Changes to be committed:
  (use "git restore --staged &lt;file&gt;..." to unstage)
	renamed:    README.md -&gt; README</blockquote></pre>
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