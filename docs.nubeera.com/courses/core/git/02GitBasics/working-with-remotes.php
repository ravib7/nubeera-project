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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Working with Remotes</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Git Basics</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
<div class="paragraph">
To be able to collaborate on any Git project, you need to know how to manage your remote repositories.
Remote repositories are versions of your project that are hosted on the Internet or network somewhere.
You can have several of them, each of which generally is either read-only or read/write for you.
Collaborating with others involves managing these remote repositories and pushing and pulling data to and from them when you need to share work.
Managing remote repositories includes knowing how to add remote repositories, remove remotes that are no longer valid, manage various remote branches and define them as being tracked or not, and more.
In this section, we’ll cover some of these remote-management skills.
</div>
<div class="sect3">
<h3 id="_showing_your_remotes">Showing Your Remotes</h3>
<div class="paragraph">
To see which remote servers you have configured, you can run the <code>git remote</code> command.
It lists the shortnames of each remote handle you’ve specified.
If you’ve cloned your repository, you should at least see <code>origin</code>&thinsp;—&thinsp;that is the default name Git gives to the server you cloned from:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git clone https://github.com/schacon/ticgit
Cloning into 'ticgit'...
remote: Reusing existing pack: 1857, done.
remote: Total 1857 (delta 0), reused 0 (delta 0)
Receiving objects: 100% (1857/1857), 374.35 KiB | 268.00 KiB/s, done.
Resolving deltas: 100% (772/772), done.
Checking connectivity... done.
$ cd ticgit
$ git remote
origin</blockquote></pre>
</div>
</div>
<div class="paragraph">
You can also specify <code>-v</code>, which shows you the URLs that Git has stored for the shortname to be used when reading and writing to that remote:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote -v
origin	https://github.com/schacon/ticgit (fetch)
origin	https://github.com/schacon/ticgit (push)</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you have more than one remote, the command lists them all.
For example, a repository with multiple remotes for working with several collaborators might look something like this.
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ cd grit
$ git remote -v
bakkdoor  https://github.com/bakkdoor/grit (fetch)
bakkdoor  https://github.com/bakkdoor/grit (push)
cho45     https://github.com/cho45/grit (fetch)
cho45     https://github.com/cho45/grit (push)
defunkt   https://github.com/defunkt/grit (fetch)
defunkt   https://github.com/defunkt/grit (push)
koke      git://github.com/koke/grit.git (fetch)
koke      git://github.com/koke/grit.git (push)
origin    git@github.com:mojombo/grit.git (fetch)
origin    git@github.com:mojombo/grit.git (push)</blockquote></pre>
</div>
</div>
<div class="paragraph">
This means we can pull contributions from any of these users pretty easily.
We may additionally have permission to push to one or more of these, though we can’t tell that here.
</div>

</div>
<div class="sect3">
<h3 id="_adding_remote_repositories">Adding Remote Repositories</h3>
<div class="paragraph">
We’ve mentioned and given some demonstrations of how the <code>git clone</code> command implicitly adds the <code>origin</code> remote for you.
Here’s how to add a new remote explicitly.
To add a new remote Git repository as a shortname you can reference easily, run <code>git remote add &lt;shortname&gt; &lt;url&gt;</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote
origin
$ git remote add pb https://github.com/paulboone/ticgit
$ git remote -v
origin	https://github.com/schacon/ticgit (fetch)
origin	https://github.com/schacon/ticgit (push)
pb	https://github.com/paulboone/ticgit (fetch)
pb	https://github.com/paulboone/ticgit (push)</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now you can use the string <code>pb</code> on the command line in lieu of the whole URL.
For example, if you want to fetch all the information that Paul has but that you don’t yet have in your repository, you can run <code>git fetch pb</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git fetch pb
remote: Counting objects: 43, done.
remote: Compressing objects: 100% (36/36), done.
remote: Total 43 (delta 10), reused 31 (delta 5)
Unpacking objects: 100% (43/43), done.
From https://github.com/paulboone/ticgit
 * [new branch]      master     -&gt; pb/master
 * [new branch]      ticgit     -&gt; pb/ticgit</blockquote></pre>
</div>
</div>
<div class="paragraph">
Paul’s <code>master</code> branch is now accessible locally as <code>pb/master</code>&thinsp;—&thinsp;you can merge it into one of your branches, or you can check out a local branch at that point if you want to inspect it.
</div>
</div>
<div class="sect3">
<h3 id="_fetching_and_pulling">Fetching and Pulling from Your Remotes</h3>
<div class="paragraph">
As you just saw, to get data from your remote projects, you can run:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git fetch &lt;remote&gt;</blockquote></pre>
</div>
</div>
<div class="paragraph">
The command goes out to that remote project and pulls down all the data from that remote project that you don’t have yet.
After you do this, you should have references to all the branches from that remote, which you can merge in or inspect at any time.
</div><br>
<div class="paragraph">
If you clone a repository, the command automatically adds that remote repository under the name “origin”.
So, <code>git fetch origin</code> fetches any new work that has been pushed to that server since you cloned (or last fetched from) it.
It’s important to note that the <code>git fetch</code> command only downloads the data to your local repository&thinsp;—&thinsp;it doesn’t automatically merge it with any of your work or modify what you’re currently working on.
You have to merge it manually into your work when you’re ready.
</div><br>
<div class="paragraph">
 you can use the <code>git pull</code> command to automatically fetch and then merge that remote branch into your current branch.
This may be an easier or more comfortable workflow for you; and by default, the <code>git clone</code> command automatically sets up your local <code>master</code> branch to track the remote <code>master</code> branch (or whatever the default branch is called) on the server you cloned from.
Running <code>git pull</code> generally fetches data from the server you originally cloned from and automatically tries to merge it into the code you’re currently working on.
</div>
<div class="sect3">
<h3 id="_pushing_remotes">Pushing to Your Remotes</h3>
<div class="paragraph">
When you have your project at a point that you want to share, you have to push it upstream.
The command for this is simple: <code>git push &lt;remote&gt; &lt;branch&gt;</code>.
If you want to push your <code>master</code> branch to your <code>origin</code> server (again, cloning generally sets up both of those names for you automatically), then you can run this to push any commits you’ve done back up to the server:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push origin master</blockquote></pre>
</div>
</div>
<div class="paragraph">
This command works only if you cloned from a server to which you have write access and if nobody has pushed in the meantime.
If you and someone else clone at the same time and they push upstream and then you push upstream, your push will rightly be rejected.
You’ll have to fetch their work first and incorporate it into yours before you’ll be allowed to push.
</div>
</div>
<div class="sect3">
<h3 id="_inspecting_remote">Inspecting a Remote</h3>
<div class="paragraph">
If you want to see more information about a particular remote, you can use the <code>git remote show &lt;remote&gt;</code> command.
If you run this command with a particular shortname, such as <code>origin</code>, you get something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote show origin
* remote origin
  Fetch URL: https://github.com/schacon/ticgit
  Push  URL: https://github.com/schacon/ticgit
  HEAD branch: master
  Remote branches:
    master                               tracked
    dev-branch                           tracked
  Local branch configured for 'git pull':
    master merges with remote master
  Local ref configured for 'git push':
    master pushes to master (up to date)</blockquote></pre>
</div>
</div>
<div class="paragraph">
It lists the URL for the remote repository as well as the tracking branch information.
The command helpfully tells you that if you’re on the <code>master</code> branch and you run <code>git pull</code>, it will automatically merge the remote’s <code>master</code> branch into the local one after it has been fetched.
It also lists all the remote references it has pulled down.
</div><br>
<div class="paragraph">
That is a simple example you’re likely to encounter.
When you’re using Git more heavily, however, you may see much more information from <code>git remote show</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote show origin
* remote origin
  URL: https://github.com/my-org/complex-project
  Fetch URL: https://github.com/my-org/complex-project
  Push  URL: https://github.com/my-org/complex-project
  HEAD branch: master
  Remote branches:
    master                           tracked
    dev-branch                       tracked
    markdown-strip                   tracked
    issue-43                         new (next fetch will store in remotes/origin)
    issue-45                         new (next fetch will store in remotes/origin)
    refs/remotes/origin/issue-11     stale (use 'git remote prune' to remove)
  Local branches configured for 'git pull':
    dev-branch merges with remote dev-branch
    master     merges with remote master
  Local refs configured for 'git push':
    dev-branch                     pushes to dev-branch                     (up to date)
    markdown-strip                 pushes to markdown-strip                 (up to date)
    master                         pushes to master                         (up to date)</blockquote></pre>
</div>
</div>
<div class="paragraph">
This command shows which branch is automatically pushed to when you run <code>git push</code> while on certain branches.
It also shows you which remote branches on the server you don’t yet have, which remote branches you have that have been removed from the server, and multiple local branches that are able to merge automatically with their remote-tracking branch when you run <code>git pull</code>.
</div>
</div>
<div class="sect3">
<h3 id="_renaming_and_removing_remotes">Renaming and Removing Remotes</h3>
<div class="paragraph">
You can run <code>git remote rename</code> to change a remote’s shortname.
For instance, if you want to rename <code>pb</code> to <code>paul</code>, you can do so with <code>git remote rename</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote rename pb paul
$ git remote
origin
paul</blockquote></pre>
</div>
</div>
<div class="paragraph">
It’s worth mentioning that this changes all your remote-tracking branch names, too.
What used to be referenced at <code>pb/master</code> is now at <code>paul/master</code>.
</div><br>
<div class="paragraph">
If you want to remove a remote for some reason&thinsp;—&thinsp;you’ve moved the server or are no longer using a particular mirror, or perhaps a contributor isn’t contributing anymore&thinsp;—&thinsp;you can either use <code>git remote remove</code> or <code>git remote rm</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote remove paul
$ git remote
origin</blockquote></pre>
</div>
</div>
<div class="paragraph">
Once you delete the reference to a remote this way, all remote-tracking branches and configuration settings associated with that remote are also deleted.
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