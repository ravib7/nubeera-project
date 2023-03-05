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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Recording Changes to the Repository</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Git Basics</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                  <div id="main" class="book edition2">
  <div>
<div class="paragraph">
At this point, you should have a <em>bona fide</em> Git repository on your local machine, and a checkout or <em>working copy</em> of all of its files in front of you.
Typically, you’ll want to start making changes and committing snapshots of those changes into your repository each time the project reaches a state you want to record.
</div><br>
<div class="paragraph">
Remember that each file in your working directory can be in one of two states: <em>tracked</em> or <em>untracked</em>.
Tracked files are files that were in the last snapshot, as well as any newly staged files; they can be unmodified, modified, or staged.
In short, tracked files are files that Git knows about.
</div><br>
<div class="paragraph">
Untracked files are everything else&thinsp;—&thinsp;any files in your working directory that were not in your last snapshot and are not in your staging area.
When you first clone a repository, all of your files will be tracked and unmodified because Git just checked them out and you haven’t edited anything.
</div><br>
<div class="paragraph">
As you edit files, Git sees them as modified, because you’ve changed them since your last commit.
As you work, you selectively stage these modified files and then commit all those staged changes, and the cycle repeats.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/lifecycle.png" alt="The lifecycle of the status of your files">
</div>
<div class="title">Figure 8. The lifecycle of the status of your files</div>
</div><br><br>
<div class="sect3">
<h3 id="_checking_status">Checking the Status of Your Files</h3>
<div class="paragraph">
The main tool you use to determine which files are in which state is the <code>git status</code> command.
If you run this command directly after a clone, you should see something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
nothing to commit, working tree clean</blockquote></pre>
</div>
</div>
<div class="paragraph">
This means you have a clean working directory; in other words, none of your tracked files are modified.
Git also doesn’t see any untracked files, or they would be listed here.
Finally, the command tells you which branch you’re on and informs you that it has not diverged from the same branch on the server.
For now, that branch is always <code>master</code>, which is the default; you won’t worry about it here.
Git Branching will go over branches and references in detail.
</div><br>
<div class="paragraph">
Let’s say you add a new file to your project, a simple <code>README</code> file.
If the file didn’t exist before, and you run <code>git status</code>, you see your untracked file like so:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ echo 'My Project' &gt; README
$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
Untracked files:
  (use "git add &lt;file&gt;..." to include in what will be committed)

    README

nothing added to commit but untracked files present (use "git add" to track)</blockquote></pre>
</div>
</div>
<div class="paragraph">
You can see that your new <code>README</code> file is untracked, because it’s under the “Untracked files” heading in your status output.
Untracked basically means that Git sees a file you didn’t have in the previous snapshot (commit), and which hasn’t yet been staged; Git won’t start including it in your commit snapshots until you explicitly tell it to do so.
It does this so you don’t accidentally begin including generated binary files or other files that you did not mean to include.
You do want to start including <code>README</code>, so let’s start tracking the file.
</div>
</div>
<div class="sect3">
<h3 id="_tracking_files">Tracking New Files</h3>
<div class="paragraph">
In order to begin tracking a new file, you use the command <code>git add</code>.
To begin tracking the <code>README</code> file, you can run this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git add README</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you run your status command again, you can see that your <code>README</code> file is now tracked and staged to be committed:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
Changes to be committed:
  (use "git restore --staged &lt;file&gt;..." to unstage)

    new file:   README</blockquote></pre>
</div>
</div>
<div class="paragraph">
You can tell that it’s staged because it’s under the “Changes to be committed” heading.
If you commit at this point, the version of the file at the time you ran <code>git add</code> is what will be in the subsequent historical snapshot.
You may recall that when you ran <code>git init</code> earlier, you then ran <code>git add &lt;files&gt;</code>&thinsp;—&thinsp;that was to begin tracking files in your directory.
The <code>git add</code> command takes a path name for either a file or a directory; if it’s a directory, the command adds all the files in that directory recursively.
</div>
</div>
<div class="sect3">
<h3 id="_staging_modified_files">Staging Modified Files</h3>
<div class="paragraph">
Let’s change a file that was already tracked.
If you change a previously tracked file called <code>CONTRIBUTING.md</code> and then run your <code>git status</code> command again, you get something that looks like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

    new file:   README

Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)

    modified:   CONTRIBUTING.md</blockquote></pre>
</div>
</div>
<div class="paragraph">
The <code>CONTRIBUTING.md</code> file appears under a section named “Changes not staged for commit”&thinsp;—&thinsp;which means that a file that is tracked has been modified in the working directory but not yet staged.
To stage it, you run the <code>git add</code> command.
<code>git add</code> is a multipurpose command&thinsp;—&thinsp;you use it to begin tracking new files, to stage files, and to do other things like marking merge-conflicted files as resolved.
It may be helpful to think of it more as “add precisely this content to the next commit” rather than “add this file to the project”.
Let’s run <code>git add</code> now to stage the <code>CONTRIBUTING.md</code> file, and then run <code>git status</code> again:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git add CONTRIBUTING.md
$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

    new file:   README
    modified:   CONTRIBUTING.md</blockquote></pre>
</div>
</div>
<div class="paragraph">
Both files are staged and will go into your next commit.
At this point, suppose you remember one little change that you want to make in <code>CONTRIBUTING.md</code> before you commit it.
You open it again and make that change, and you’re ready to commit.
However, let’s run <code>git status</code> one more time:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ vim CONTRIBUTING.md
$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

    new file:   README
    modified:   CONTRIBUTING.md

Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)

    modified:   CONTRIBUTING.md</blockquote></pre>
</div>
</div>
<div class="paragraph">
What the heck?
Now <code>CONTRIBUTING.md</code> is listed as both staged <em>and</em> unstaged.
How is that possible?
It turns out that Git stages a file exactly as it is when you run the <code>git add</code> command.
If you commit now, the version of <code>CONTRIBUTING.md</code> as it was when you last ran the <code>git add</code> command is how it will go into the commit, not the version of the file as it looks in your working directory when you run <code>git commit</code>.
If you modify a file after you run <code>git add</code>, you have to run <code>git add</code> again to stage the latest version of the file:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git add CONTRIBUTING.md
$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

    new file:   README
    modified:   CONTRIBUTING.md</blockquote></pre>
</div>
</div>
</div>
<div class="sect3">
<h3 id="_short_status">Short Status</h3>
<div class="paragraph">
While the <code>git status</code> output is pretty comprehensive, it’s also quite wordy.
Git also has a short status flag so you can see your changes in a more compact way.
If you run <code>git status -s</code> or <code>git status --short</code> you get a far more simplified output from the command:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git status -s
 M README
MM Rakefile
A  lib/git.rb
M  lib/simplegit.rb
?? LICENSE.txt</blockquote></pre>
</div>
</div>
<div class="paragraph">
New files that aren’t tracked have a <code>??</code> next to them, new files that have been added to the staging area have an <code>A</code>, modified files have an <code>M</code> and so on.
There are two columns to the output&thinsp;—&thinsp;the left-hand column indicates the status of the staging area and the right-hand column indicates the status of the working tree.
So for example in that output, the <code>README</code> file is modified in the working directory but not yet staged, while the <code>lib/simplegit.rb</code> file is modified and staged.
The <code>Rakefile</code> was modified, staged and then modified again, so there are changes to it that are both staged and unstaged.
</div>
</div>
<div class="sect3">
<h3 id="_ignoring">Ignoring Files</h3>
<div class="paragraph">
Often, you’ll have a class of files that you don’t want Git to automatically add or even show you as being untracked.
These are generally automatically generated files such as log files or files produced by your build system.
In such cases, you can create a file listing patterns to match them named <code>.gitignore</code>.
Here is an example <code>.gitignore</code> file:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ cat .gitignore
*.[oa]
*~</blockquote></pre>
</div>
</div>
<div class="paragraph">
The first line tells Git to ignore any files ending in “.o” or “.a”&thinsp;—&thinsp;object and archive files that may be the product of building your code.
The second line tells Git to ignore all files whose names end with a tilde (<code>~</code>), which is used by many text editors such as Emacs to mark temporary files.
You may also include a log, tmp, or pid directory; automatically generated documentation; and so on.
Setting up a <code>.gitignore</code> file for your new repository before you get going is generally a good idea so you don’t accidentally commit files that you really don’t want in your Git repository.
</div><br>
<div class="paragraph">
The rules for the patterns you can put in the <code>.gitignore</code> file are as follows:
</div>
<div class="ulist">
<ul>
<li>
Blank lines or lines starting with <code>#</code> are ignored.
</li>
<li>
Standard glob patterns work, and will be applied recursively throughout the entire working tree.
</li>
<li>
You can start patterns with a forward slash (<code>/</code>) to avoid recursivity.
</li>
<li>
You can end patterns with a forward slash (<code>/</code>) to specify a directory.
</li>
<li>
You can negate a pattern by starting it with an exclamation point (<code>!</code>).
</li>
</ul>
</div>
<div class="paragraph">
Glob patterns are like simplified regular expressions that shells use.
An asterisk (<code>*</code>) matches zero or more characters; <code>[abc]</code> matches any character inside the brackets (in this case a, b, or c); a question mark (<code>?</code>) matches a single character; and brackets enclosing characters separated by a hyphen (<code>[0-9]</code>) matches any character between them (in this case 0 through 9).
You can also use two asterisks to match nested directories; <code>a/**/z</code> would match <code>a/z</code>, <code>a/b/z</code>, <code>a/b/c/z</code>, and so on.
</div><br>
<div class="paragraph">
Here is another example <code>.gitignore</code> file:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote># ignore all .a files
*.a

# but do track lib.a, even though you're ignoring .a files above
!lib.a

# only ignore the TODO file in the current directory, not subdir/TODO
/TODO

# ignore all files in any directory named build
build/

# ignore doc/notes.txt, but not doc/server/arch.txt
doc/*.txt

# ignore all .pdf files in the doc/ directory and any of its subdirectories
doc/**/*.pdf</blockquote></pre>
</div>
</div>
<div class="sect3">
<h3 id="_git_diff_staged">Viewing Your Staged and Unstaged Changes</h3>
<div class="paragraph">
If the <code>git status</code> command is too vague for you&thinsp;—&thinsp;you want to know exactly what you changed, not just which files were changed&thinsp;—&thinsp;you can use the <code>git diff</code> command.
We’ll cover <code>git diff</code> in more detail later, but you’ll probably use it most often to answer these two questions: What have you changed but not yet staged?
And what have you staged that you are about to commit?
Although <code>git status</code> answers those questions very generally by listing the file names, <code>git diff</code> shows you the exact lines added and removed&thinsp;—&thinsp;the patch, as it were.
</div><br>
<div class="paragraph">
Let’s say you edit and stage the <code>README</code> file again and then edit the <code>CONTRIBUTING.md</code> file without staging it.
If you run your <code>git status</code> command, you once again see something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

    modified:   README

Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)

    modified:   CONTRIBUTING.md</blockquote></pre>
</div>
</div>
<div class="paragraph">
To see what you’ve changed but not yet staged, type <code>git diff</code> with no other arguments:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git diff
diff --git a/CONTRIBUTING.md b/CONTRIBUTING.md
index 8ebb991..643e24f 100644
--- a/CONTRIBUTING.md
+++ b/CONTRIBUTING.md
@@ -65,7 +65,8 @@ branch directly, things can get messy.
 Please include a nice description of your changes when you submit your PR;
 if we have to read the whole diff to figure out why you're contributing
 in the first place, you're less likely to get feedback and have your change
-merged in.
+merged in. Also, split your changes into comprehensive chunks if your patch is
+longer than a dozen lines.

 If you are starting to work on a particular area, feel free to submit a PR
 that highlights your work in progress (and note in the PR title that it's</blockquote></pre>
</div>
</div>
<div class="paragraph">
That command compares what is in your working directory with what is in your staging area.
The result tells you the changes you’ve made that you haven’t yet staged.
</div><br>
<div class="paragraph">
If you want to see what you’ve staged that will go into your next commit, you can use <code>git diff --staged</code>.
This command compares your staged changes to your last commit:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git diff --staged
diff --git a/README b/README
new file mode 100644
index 0000000..03902a1
--- /dev/null
+++ b/README
@@ -0,0 +1 @@
+My Project</blockquote></pre>
</div>
</div>
<div class="paragraph">
It’s important to note that <code>git diff</code> by itself doesn’t show all changes made since your last commit&thinsp;—&thinsp;only changes that are still unstaged.
If you’ve staged all of your changes, <code>git diff</code> will give you no output.
</div><br>
<div class="paragraph">
For another example, if you stage the <code>CONTRIBUTING.md</code> file and then edit it, you can use <code>git diff</code> to see the changes in the file that are staged and the changes that are unstaged.
If our environment looks like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git add CONTRIBUTING.md
$ echo '# test line' &gt;&gt; CONTRIBUTING.md
$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

    modified:   CONTRIBUTING.md

Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)

    modified:   CONTRIBUTING.md</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now you can use <code>git diff</code> to see what is still unstaged:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git diff
diff --git a/CONTRIBUTING.md b/CONTRIBUTING.md
index 643e24f..87f08c8 100644
--- a/CONTRIBUTING.md
+++ b/CONTRIBUTING.md
@@ -119,3 +119,4 @@ at the
 ## Starter Projects

 See our [projects list](https://github.com/libgit2/libgit2/blob/development/PROJECTS.md).
+# test line</blockquote></pre>
</div>
</div>
<div class="paragraph">
and <code>git diff --cached</code> to see what you’ve staged so far (<code>--staged</code> and <code>--cached</code> are synonyms):
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git diff --cached
diff --git a/CONTRIBUTING.md b/CONTRIBUTING.md
index 8ebb991..643e24f 100644
--- a/CONTRIBUTING.md
+++ b/CONTRIBUTING.md
@@ -65,7 +65,8 @@ branch directly, things can get messy.
 Please include a nice description of your changes when you submit your PR;
 if we have to read the whole diff to figure out why you're contributing
 in the first place, you're less likely to get feedback and have your change
-merged in.
+merged in. Also, split your changes into comprehensive chunks if your patch is
+longer than a dozen lines.

 If you are starting to work on a particular area, feel free to submit a PR
 that highlights your work in progress (and note in the PR title that it's</blockquote></pre>
</div>
</div>
<div class="sect3">
<h3 id="_committing_changes">Committing Your Changes</h3>
<div class="paragraph">
Now that your staging area is set up the way you want it, you can commit your changes.
Remember that anything that is still unstaged&thinsp;—&thinsp;any files you have created or modified that you haven’t run <code>git add</code> on since you edited them&thinsp;—&thinsp;won’t go into this commit.
They will stay as modified files on your disk.
In this case, let’s say that the last time you ran <code>git status</code>, you saw that everything was staged, so you’re ready to commit your changes.
The simplest way to commit is to type <code>git commit</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git commit</blockquote></pre>
</div>
</div>
<div class="paragraph">
The editor displays the following text (this example is a Vim screen):
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote># Please enter the commit message for your changes. Lines starting
# with '#' will be ignored, and an empty message aborts the commit.
# On branch master
# Your branch is up-to-date with 'origin/master'.
#
# Changes to be committed:
#	new file:   README
#	modified:   CONTRIBUTING.md
#
~
~
~
".git/COMMIT_EDITMSG" 9L, 283C</blockquote></pre>
</div>
</div>
<div class="paragraph">
You can see that the default commit message contains the latest output of the <code>git status</code> command commented out and one empty line on top.
You can remove these comments and type your commit message, or you can leave them there to help you remember what you’re committing.
</div>
<div class="paragraph">
When you exit the editor, Git creates your commit with that commit message (with the comments and diff stripped out).
</div><br>
<div class="paragraph">
Alternatively, you can type your commit message inline with the <code>commit</code> command by specifying it after a <code>-m</code> flag, like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git commit -m "Story 182: fix benchmarks for speed"
[master 463dc4f] Story 182: fix benchmarks for speed
 2 files changed, 2 insertions(+)
 create mode 100644 README</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now you’ve created your first commit!
You can see that the commit has given you some output about itself: which branch you committed to (<code>master</code>), what SHA-1 checksum the commit has (<code>463dc4f</code>), how many files were changed, and statistics about lines added and removed in the commit.
</div><br>
<div class="paragraph">
Remember that the commit records the snapshot you set up in your staging area.
Anything you didn’t stage is still sitting there modified; you can do another commit to add it to your history.
Every time you perform a commit, you’re recording a snapshot of your project that you can revert to or compare to later.
</div>
</div>
<div class="sect3">
<h3 id="_skipping_the_staging_area">Skipping the Staging Area</h3>
<div class="paragraph">

Although it can be amazingly useful for crafting commits exactly how you want them, the staging area is sometimes a bit more complex than you need in your workflow.
If you want to skip the staging area, Git provides a simple shortcut.
Adding the <code>-a</code> option to the <code>git commit</code> command makes Git automatically stage every file that is already tracked before doing the commit, letting you skip the <code>git add</code> part:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
Changes not staged for commit:
  (use "git add &lt;file&gt;..." to update what will be committed)
  (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)

    modified:   CONTRIBUTING.md

no changes added to commit (use "git add" and/or "git commit -a")
$ git commit -a -m 'Add new benchmarks'
[master 83e38c7] Add new benchmarks
 1 file changed, 5 insertions(+), 0 deletions(-)</blockquote></pre>
</div>
</div>
<div class="paragraph">
Notice how you don’t have to run <code>git add</code> on the <code>CONTRIBUTING.md</code> file in this case before you commit.
That’s because the <code>-a</code> flag includes all changed files.
This is convenient, but be careful; sometimes this flag will cause you to include unwanted changes.
</div>
</div>
<div class="sect3">
<h3 id="_removing_files">Removing Files</h3>
<div class="paragraph">

To remove a file from Git, you have to remove it from your tracked files (more accurately, remove it from your staging area) and then commit.
The <code>git rm</code> command does that, and also removes the file from your working directory so you don’t see it as an untracked file the next time around.
</div><br>
<div class="paragraph">
If you simply remove the file from your working directory, it shows up under the “Changes not staged for commit” (that is, <em>unstaged</em>) area of your <code>git status</code> output:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ rm PROJECTS.md
$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
Changes not staged for commit:
  (use "git add/rm &lt;file&gt;..." to update what will be committed)
  (use "git checkout -- &lt;file&gt;..." to discard changes in working directory)

        deleted:    PROJECTS.md

no changes added to commit (use "git add" and/or "git commit -a")</blockquote></pre>
</div>
</div>
<div class="paragraph">
Then, if you run <code>git rm</code>, it stages the file’s removal:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git rm PROJECTS.md
rm 'PROJECTS.md'
$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

    deleted:    PROJECTS.md</blockquote></pre>
</div>
</div>
<div class="paragraph">
The next time you commit, the file will be gone and no longer tracked.
If you modified the file or had already added it to the staging area, you must force the removal with the <code>-f</code> option.
This is a safety feature to prevent accidental removal of data that hasn’t yet been recorded in a snapshot and that can’t be recovered from Git.
</div><br>
<div class="paragraph">
Another useful thing you may want to do is to keep the file in your working tree but remove it from your staging area.
In other words, you may want to keep the file on your hard drive but not have Git track it anymore.
This is particularly useful if you forgot to add something to your <code>.gitignore</code> file and accidentally staged it, like a large log file or a bunch of <code>.a</code> compiled files.
To do this, use the <code>--cached</code> option:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git rm --cached README</blockquote></pre>
</div>
</div>
<div class="paragraph">
You can pass files, directories, and file-glob patterns to the <code>git rm</code> command.
That means you can do things such as:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git rm log/\*.log</blockquote></pre>
</div>
</div>
<div class="paragraph">
Note the backslash (<code>\</code>) in front of the <code>*</code>.
This is necessary because Git does its own filename expansion in addition to your shell’s filename expansion.
This command removes all files that have the <code>.log</code> extension in the <code>log/</code> directory.
Or, you can do something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git rm \*~</blockquote></pre>
</div>
</div>
<div class="paragraph">
This command removes all files whose names end with a <code>~</code>.
</div>
</div>
<div class="sect3">
<h3 id="_git_mv">Moving Files</h3>
<div class="paragraph">

Unlike many other VCSs, Git doesn’t explicitly track file movement.
If you rename a file in Git, no metadata is stored in Git that tells it you renamed the file.
However, Git is pretty smart about figuring that out after the fact&thinsp;—&thinsp;we’ll deal with detecting file movement a bit later.
</div><br>
<div class="paragraph">
Thus it’s a bit confusing that Git has a <code>mv</code> command.
If you want to rename a file in Git, you can run something like:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git mv file_from file_to</blockquote></pre>
</div>
</div>
<div class="paragraph">
and it works fine.
In fact, if you run something like this and look at the status, you’ll see that Git considers it a renamed file:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git mv README.md README
$ git status
On branch master
Your branch is up-to-date with 'origin/master'.
Changes to be committed:
  (use "git reset HEAD &lt;file&gt;..." to unstage)

    renamed:    README.md -&gt; README</blockquote></pre>
</div>
</div>
<div class="paragraph">
However, this is equivalent to running something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ mv README.md README
$ git rm README.md
$ git add README</blockquote></pre>
</div>
</div>
<div class="paragraph">
Git figures out that it’s a rename implicitly, so it doesn’t matter if you rename a file that way or with the <code>mv</code> command.
The only real difference is that <code>git mv</code> is one command instead of three&thinsp;—&thinsp;it’s a convenience function.
More importantly, you can use any tool you like to rename a file, and address the add/rm later, before you commit.
</div>
</div>
</div></div></div>
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