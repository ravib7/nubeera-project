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
			<h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Tagging</h1>
			<ol class="breadcrumb mx-5 mt-3 px-0">
				<li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li class="breadcrumb-item"><a href="../../">Core</a></li>
				<li class="breadcrumb-item"><a href="../">Git</a></li>
				<li class="breadcrumb-item active">Git Basics</li>
			</ol>
			<div class="px-5 pb-5 pt-0 body-text">
				<div class="paragraph">

					Like most VCSs, Git has the ability to tag specific points in a repository’s history as being important.
					Typically, people use this functionality to mark release points (<code>v1.0</code>, <code>v2.0</code> and so on).
					In this section, you’ll learn how to list existing tags, how to create and delete tags, and what the different types of tags are.
				</div>
				<div class="sect3">
					<h3 id="_listing_your_tags">Listing Your Tags</h3>
					<div class="paragraph">
						Listing the existing tags in Git is straightforward.
						Just type <code>git tag</code> (with optional <code>-l</code> or <code>--list</code>):
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git tag
v1.0
v2.0</blockquote></pre>
						</div>
					</div>
					<div class="paragraph">
						This command lists the tags in alphabetical order; the order in which they are displayed has no real importance.
					</div>
					<div class="paragraph">
						You can also search for tags that match a particular pattern.
						The Git source repo, for instance, contains more than 500 tags.
						If you’re interested only in looking at the 1.8.5 series, you can run this:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git tag -l "v1.8.5*"
v1.8.5
v1.8.5-rc0
v1.8.5-rc1
v1.8.5-rc2
v1.8.5-rc3
v1.8.5.1
v1.8.5.2
v1.8.5.3
v1.8.5.4
v1.8.5.5</blockquote></pre>
						</div>
					</div>
					
				<div class="sect3">
					<h3 id="_creating_tags">Creating Tags</h3>
					<div class="paragraph">
						Git supports two types of tags: <em>lightweight</em> and <em>annotated</em>.
					</div>
					<div class="paragraph">
						A lightweight tag is very much like a branch that doesn’t change&thinsp;—&thinsp;it’s just a pointer to a specific commit.
					</div><br>
					<div class="paragraph">
						Annotated tags, however, are stored as full objects in the Git database.
						They’re checksummed; contain the tagger name, email, and date; have a tagging message; and can be signed and verified with GNU Privacy Guard (GPG).
						It’s generally recommended that you create annotated tags so you can have all this information; but if you want a temporary tag or for some reason don’t want to keep the other information, lightweight tags are available too.
					</div>
				</div>
				<div class="sect3">
					<h3 id="_annotated_tags">Annotated Tags</h3>
					<div class="paragraph">

						Creating an annotated tag in Git is simple.
						The easiest way is to specify <code>-a</code> when you run the <code>tag</code> command:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git tag -a v1.4 -m "my version 1.4"
$ git tag
v0.1
v1.3
v1.4</blockquote></pre>
						</div>
					</div>
					<div class="paragraph">
						The <code>-m</code> specifies a tagging message, which is stored with the tag.
						If you don’t specify a message for an annotated tag, Git launches your editor so you can type it in.
					</div><br>
					<div class="paragraph">
						You can see the tag data along with the commit that was tagged by using the <code>git show</code> command:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git show v1.4
tag v1.4
Tagger: Ben Straub &lt;ben@straub.cc&gt;
Date:   Sat May 3 20:19:12 2014 -0700

my version 1.4

commit ca82a6dff817ec66f44342007202690a93763949
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date:   Mon Mar 17 21:52:11 2008 -0700

    Change version number</blockquote></pre>
						</div>
					</div>
					<div class="paragraph">
						That shows the tagger information, the date the commit was tagged, and the annotation message before showing the commit information.
					</div>
				</div>
				<div class="sect3">
					<h3 id="_lightweight_tags">Lightweight Tags</h3>
					<div class="paragraph">

						Another way to tag commits is with a lightweight tag.
						This is basically the commit checksum stored in a file&thinsp;—&thinsp;no other information is kept.
						To create a lightweight tag, don’t supply any of the <code>-a</code>, <code>-s</code>, or <code>-m</code> options, just provide a tag name:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git tag v1.4-lw
$ git tag
v0.1
v1.3
v1.4
v1.4-lw
v1.5</blockquote></pre>
						</div>
					</div>
					<div class="paragraph">
						This time, if you run <code>git show</code> on the tag, you don’t see the extra tag information.
						The command just shows the commit:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git show v1.4-lw
commit ca82a6dff817ec66f44342007202690a93763949
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date:   Mon Mar 17 21:52:11 2008 -0700

    Change version number</blockquote></pre>
						</div>
					</div>
				</div>
				<div class="sect3">
					<h3 id="_tagging_later">Tagging Later</h3>
					<div class="paragraph">
						You can also tag commits after you’ve moved past them.
						Suppose your commit history looks like this:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log --pretty=oneline
15027957951b64cf874c3557a0f3547bd83b3ff6 Merge branch 'experiment'
a6b4c97498bd301d84096da251c98a07c7723e65 Create write support
0d52aaab4479697da7686c15f77a3d64d9165190 One more thing
6d52a271eda8725415634dd79daabbc4d9b6008e Merge branch 'experiment'
0b7434d86859cc7b8c3d5e1dddfed66ff742fcbc Add commit function
4682c3261057305bdd616e23b64b0857d832627b Add todo file
166ae0c4d3f420721acbb115cc33848dfcc2121a Create write support
9fceb02d0ae598e95dc970b74767f19372d61af8 Update rakefile
964f16d36dfccde844893cac5b347e7b3d44abbc Commit the todo
8a5cbc430f1a9c3d00faaeffd07798508422908a Update readme</blockquote></pre>
						</div>
					</div>
					<div class="paragraph">
						Now, suppose you forgot to tag the project at v1.2, which was at the “Update rakefile” commit.
						You can add it after the fact.
						To tag that commit, you specify the commit checksum (or part of it) at the end of the command:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git tag -a v1.2 9fceb02</blockquote></pre>
						</div>
					</div>
					<div class="paragraph">
						You can see that you’ve tagged the commit:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git tag
v0.1
v1.2
v1.3
v1.4
v1.4-lw
v1.5

$ git show v1.2
tag v1.2
Tagger: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date:   Mon Feb 9 15:32:16 2009 -0800

version 1.2
commit 9fceb02d0ae598e95dc970b74767f19372d61af8
Author: Magnus Chacon &lt;mchacon@gee-mail.com&gt;
Date:   Sun Apr 27 20:43:35 2008 -0700

    Update rakefile
...</blockquote></pre>
						</div>
					</div>
				</div>
				<div class="sect3">
					<h3 id="_sharing_tags">Sharing Tags</h3>
					<div class="paragraph">
						By default, the <code>git push</code> command doesn’t transfer tags to remote servers.
						You will have to explicitly push tags to a shared server after you have created them.
						This process is just like sharing remote branches&thinsp;—&thinsp;you can run <code>git push origin &lt;tagname&gt;</code>.
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push origin v1.5
Counting objects: 14, done.
Delta compression using up to 8 threads.
Compressing objects: 100% (12/12), done.
Writing objects: 100% (14/14), 2.05 KiB | 0 bytes/s, done.
Total 14 (delta 3), reused 0 (delta 0)
To git@github.com:schacon/simplegit.git
 * [new tag]         v1.5 -&gt; v1.5</blockquote></pre>
						</div>
					</div>
					<div class="paragraph">
						If you have a lot of tags that you want to push up at once, you can also use the <code>--tags</code> option to the <code>git push</code> command.
						This will transfer all of your tags to the remote server that are not already there.
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push origin --tags
Counting objects: 1, done.
Writing objects: 100% (1/1), 160 bytes | 0 bytes/s, done.
Total 1 (delta 0), reused 0 (delta 0)
To git@github.com:schacon/simplegit.git
 * [new tag]         v1.4 -&gt; v1.4
 * [new tag]         v1.4-lw -&gt; v1.4-lw</blockquote></pre>
						</div>
					</div>
					<div class="paragraph">
						Now, when someone else clones or pulls from your repository, they will get all your tags as well.
					</div>
					
				<div class="sect3">
					<h3 id="_deleting_tags">Deleting Tags</h3>
					<div class="paragraph">
						To delete a tag on your local repository, you can use <code>git tag -d &lt;tagname&gt;</code>.
						For example, we could remove our lightweight tag above as follows:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git tag -d v1.4-lw
Deleted tag 'v1.4-lw' (was e7d5add)</blockquote></pre>
						</div>
					</div>
					<div class="paragraph">
						Note that this does not remove the tag from any remote servers.
						There are two common variations for deleting a tag from a remote server.
					</div><br>
					<div class="paragraph">
						The first variation is <code>git push &lt;remote&gt; :refs/tags/&lt;tagname&gt;</code>:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push origin :refs/tags/v1.4-lw
To /git@github.com:schacon/simplegit.git
 - [deleted]         v1.4-lw</blockquote></pre>
						</div>
					</div>
					<div class="paragraph">
						The way to interpret the above is to read it as the null value before the colon is being pushed to the remote tag name, effectively deleting it.
					</div><br>
					<div class="paragraph">
						The second (and more intuitive) way to delete a remote tag is with:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push origin --delete &lt;tagname&gt;</blockquote></pre>
						</div>
					</div>
				</div>
				<div class="sect3">
					<h3 id="_checking_out_tags">Checking out Tags</h3>
					<div class="paragraph">
						If you want to view the versions of files a tag is pointing to, you can do a <code>git checkout</code> of that tag, although this puts your repository in “detached HEAD” state, which has some ill side effects:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout v2.0.0
Note: switching to 'v2.0.0'.

You are in 'detached HEAD' state. You can look around, make experimental
changes and commit them, and you can discard any commits you make in this
state without impacting any branches by performing another checkout.

If you want to create a new branch to retain commits you create, you may
do so (now or later) by using -c with the switch command. Example:

  git switch -c &lt;new-branch-name&gt;

Or undo this operation with:

  git switch -

Turn off this advice by setting config variable advice.detachedHead to false

HEAD is now at 99ada87... Merge pull request #89 from schacon/appendix-final

$ git checkout v2.0-beta-0.1
Previous HEAD position was 99ada87... Merge pull request #89 from schacon/appendix-final
HEAD is now at df3f601... Add atlas.json and cover image</blockquote></pre>
						</div>
					</div>
					<div class="paragraph">
						In “detached HEAD” state, if you make changes and then create a commit, the tag will stay the same, but your new commit won’t belong to any branch and will be unreachable, except by the exact commit hash.
						Thus, if you need to make changes&thinsp;—&thinsp;say you’re fixing a bug on an older version, for instance&thinsp;—&thinsp;you will generally want to create a branch:
					</div>
					<div class="listingblock">
						<div class="content">
							<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout -b version2 v2.0.0
Switched to a new branch 'version2'</blockquote></pre>
						</div>
					</div>
					<div class="paragraph">
						If you do this and make a commit, your <code>version2</code> branch will be slightly different than your <code>v2.0.0</code> tag since it will move forward with your new changes, so do be careful.
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