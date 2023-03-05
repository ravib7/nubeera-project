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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Viewing the Commit History</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Git Basics</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                  
<div class="paragraph">
After you have created several commits, or if you have cloned a repository with an existing commit history, you’ll probably want to look back to see what has happened.
The most basic and powerful tool to do this is the <code>git log</code> command.
</div>
<div class="paragraph">
These examples use a very simple project called “simplegit”.
To get the project, run:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git clone https://github.com/schacon/simplegit-progit</blockquote></pre>
</div>
</div>
<div class="paragraph">
When you run <code>git log</code> in this project, you should get output that looks something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log
commit ca82a6dff817ec66f44342007202690a93763949
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date:   Mon Mar 17 21:52:11 2008 -0700

    Change version number

commit 085bb3bcb608e1e8451d4b2432f8ecbe6306e7e7
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date:   Sat Mar 15 16:40:33 2008 -0700

    Remove unnecessary test

commit a11bef06a3f659402fe7563abf99ad00de2209e6
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date:   Sat Mar 15 10:31:28 2008 -0700

    Initial commit</blockquote></pre>
</div>
</div>
<div class="paragraph">
By default, with no arguments, <code>git log</code> lists the commits made in that repository in reverse chronological order; that is, the most recent commits show up first.
As you can see, this command lists each commit with its SHA-1 checksum, the author’s name and email, the date written, and the commit message.
</div>
<div class="paragraph">
A huge number and variety of options to the <code>git log</code> command are available to show you exactly what you’re looking for.
Here, we’ll show you some of the most popular.
</div>
<div class="paragraph">
One of the more helpful options is <code>-p</code> or <code>--patch</code>, which shows the difference (the <em>patch</em> output) introduced in each commit.
You can also limit the number of log entries displayed, such as using <code>-2</code> to show only the last two entries.
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log -p -2
commit ca82a6dff817ec66f44342007202690a93763949
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date:   Mon Mar 17 21:52:11 2008 -0700

    Change version number

diff --git a/Rakefile b/Rakefile
index a874b73..8f94139 100644
--- a/Rakefile
+++ b/Rakefile
@@ -5,7 +5,7 @@ require 'rake/gempackagetask'
 spec = Gem::Specification.new do |s|
     s.platform  =   Gem::Platform::RUBY
     s.name      =   "simplegit"
-    s.version   =   "0.1.0"
+    s.version   =   "0.1.1"
     s.author    =   "Scott Chacon"
     s.email     =   "schacon@gee-mail.com"
     s.summary   =   "A simple gem for using Git in Ruby code."

commit 085bb3bcb608e1e8451d4b2432f8ecbe6306e7e7
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date:   Sat Mar 15 16:40:33 2008 -0700

    Remove unnecessary test

diff --git a/lib/simplegit.rb b/lib/simplegit.rb
index a0a60ae..47c6340 100644
--- a/lib/simplegit.rb
+++ b/lib/simplegit.rb
@@ -18,8 +18,3 @@ class SimpleGit
     end

 end
-
-if $0 == __FILE__
-  git = SimpleGit.new
-  puts git.show
-end</blockquote></pre>
</div>
</div>
<div class="paragraph">
This option displays the same information but with a diff directly following each entry.
This is very helpful for code review or to quickly browse what happened during a series of commits that a collaborator has added.
You can also use a series of summarizing options with <code>git log</code>.
For example, if you want to see some abbreviated stats for each commit, you can use the <code>--stat</code> option:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log --stat
commit ca82a6dff817ec66f44342007202690a93763949
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date:   Mon Mar 17 21:52:11 2008 -0700

    Change version number

 Rakefile | 2 +-
 1 file changed, 1 insertion(+), 1 deletion(-)

commit 085bb3bcb608e1e8451d4b2432f8ecbe6306e7e7
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date:   Sat Mar 15 16:40:33 2008 -0700

    Remove unnecessary test

 lib/simplegit.rb | 5 -----
 1 file changed, 5 deletions(-)

commit a11bef06a3f659402fe7563abf99ad00de2209e6
Author: Scott Chacon &lt;schacon@gee-mail.com&gt;
Date:   Sat Mar 15 10:31:28 2008 -0700

    Initial commit

 README           |  6 ++++++
 Rakefile         | 23 +++++++++++++++++++++++
 lib/simplegit.rb | 25 +++++++++++++++++++++++++
 3 files changed, 54 insertions(+)</blockquote></pre>
</div>
</div>
<div class="paragraph">
As you can see, the <code>--stat</code> option prints below each commit entry a list of modified files, how many files were changed, and how many lines in those files were added and removed.
It also puts a summary of the information at the end.
</div>
<div class="paragraph">
Another really useful option is <code>--pretty</code>.
This option changes the log output to formats other than the default.
A few prebuilt option values are available for you to use.
The <code>oneline</code> value for this option prints each commit on a single line, which is useful if you’re looking at a lot of commits.
In addition, the <code>short</code>, <code>full</code>, and <code>fuller</code> values show the output in roughly the same format but with less or more information, respectively:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log --pretty=oneline
ca82a6dff817ec66f44342007202690a93763949 Change version number
085bb3bcb608e1e8451d4b2432f8ecbe6306e7e7 Remove unnecessary test
a11bef06a3f659402fe7563abf99ad00de2209e6 Initial commit</blockquote></pre>
</div>
</div>
<div class="paragraph">
The most interesting option value is <code>format</code>, which allows you to specify your own log output format.
This is especially useful when you’re generating output for machine parsing&thinsp;—&thinsp;because you specify the format explicitly, you know it won’t change with updates to Git:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log --pretty=format:"%h - %an, %ar : %s"
ca82a6d - Scott Chacon, 6 years ago : Change version number
085bb3b - Scott Chacon, 6 years ago : Remove unnecessary test
a11bef0 - Scott Chacon, 6 years ago : Initial commit</blockquote></pre>
</div>
</div>
<div class="paragraph">
<a href="ch00/pretty_format">Useful specifiers for <code>git log --pretty=format</code></a> lists some of the more useful specifiers that <code>format</code> takes.
</div>
<table id="pretty_format" class="tableblock frame-all grid-all stretch">
<caption class="title">Table 1. Useful specifiers for <code>git log --pretty=format</code>
</caption>
<colgroup>
<col style="width: 20%;">
<col style="width: 80%;">
</colgroup>
<thead>
<tr>
<th class="tableblock halign-left valign-top">Specifier</th>
<th class="tableblock halign-left valign-top">Description of Output</th>
</tr>
</thead>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><code>%H</code></td>
<td class="tableblock halign-left valign-top">Commit hash</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%h</code></td>
<td class="tableblock halign-left valign-top">Abbreviated commit hash</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%T</code></td>
<td class="tableblock halign-left valign-top">Tree hash</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%t</code></td>
<td class="tableblock halign-left valign-top">Abbreviated tree hash</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%P</code></td>
<td class="tableblock halign-left valign-top">Parent hashes</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%p</code></td>
<td class="tableblock halign-left valign-top">Abbreviated parent hashes</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%an</code></td>
<td class="tableblock halign-left valign-top">Author name</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%ae</code></td>
<td class="tableblock halign-left valign-top">Author email</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%ad</code></td>
<td class="tableblock halign-left valign-top">Author date (format respects the --date=option)</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%ar</code></td>
<td class="tableblock halign-left valign-top">Author date, relative</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%cn</code></td>
<td class="tableblock halign-left valign-top">Committer name</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%ce</code></td>
<td class="tableblock halign-left valign-top">Committer email</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%cd</code></td>
<td class="tableblock halign-left valign-top">Committer date</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%cr</code></td>
<td class="tableblock halign-left valign-top">Committer date, relative</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>%s</code></td>
<td class="tableblock halign-left valign-top">Subject</td>
</tr>
</tbody>
</table>
<div class="paragraph">
You may be wondering what the difference is between <em>author</em> and <em>committer</em>.
The author is the person who originally wrote the work, whereas the committer is the person who last applied the work.
So, if you send in a patch to a project and one of the core members applies the patch, both of you get credit&thinsp;—&thinsp;you as the author, and the core member as the committer.
</div><br>
<div class="paragraph">
The <code>oneline</code> and <code>format</code> option values are particularly useful with another <code>log</code> option called <code>--graph</code>.
This option adds a nice little ASCII graph showing your branch and merge history:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log --pretty=format:"%h %s" --graph
* 2d3acf9 Ignore errors from SIGCHLD on trap
*  5e3ee11 Merge branch 'master' of git://github.com/dustin/grit
|\
| * 420eac9 Add method for getting the current branch
* | 30e367c Timeout code and tests
* | 5a09431 Add timeout protection to grit
* | e1193f8 Support for heads with slashes in them
|/
* d6016bc Require time for xmlschema
*  11d191e Merge branch 'defunkt' into local</blockquote></pre>
</div>
</div>
<div class="paragraph">
This type of output will become more interesting as we go through branching and merging in the next chapter.
</div><br>
<div class="paragraph">
Those are only some simple output-formatting options to <code>git log</code>&thinsp;—&thinsp;there are many more.
Common options to <code>git log</code> lists the options we’ve covered so far, as well as some other common formatting options that may be useful, along with how they change the output of the log command.
</div>
<table id="log_options" class="tableblock frame-all grid-all stretch">
<caption class="title">Table 2. Common options to <code>git log</code>
</caption>
<colgroup>
<col style="width: 20%;">
<col style="width: 80%;">
</colgroup>
<thead>
<tr>
<th class="tableblock halign-left valign-top">Option</th>
<th class="tableblock halign-left valign-top">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><code>-p</code></td>
<td class="tableblock halign-left valign-top">Show the patch introduced with each commit.</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--stat</code></td>
<td class="tableblock halign-left valign-top">Show statistics for files modified in each commit.</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--shortstat</code></td>
<td class="tableblock halign-left valign-top">Display only the changed/insertions/deletions line from the --stat command.</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--name-only</code></td>
<td class="tableblock halign-left valign-top">Show the list of files modified after the commit information.</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--name-status</code></td>
<td class="tableblock halign-left valign-top">Show the list of files affected with added/modified/deleted information as well.</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--abbrev-commit</code></td>
<td class="tableblock halign-left valign-top">Show only the first few characters of the SHA-1 checksum instead of all 40.</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--relative-date</code></td>
<td class="tableblock halign-left valign-top">Display the date in a relative format (for example, “2 weeks ago”) instead of using the full date format.</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--graph</code></td>
<td class="tableblock halign-left valign-top">Display an ASCII graph of the branch and merge history beside the log output.</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--pretty</code></td>
<td class="tableblock halign-left valign-top">Show commits in an alternate format. Option values include oneline, short, full, fuller, and format (where you specify your own format).</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--oneline</code></td>
<td class="tableblock halign-left valign-top">Shorthand for <code>--pretty=oneline --abbrev-commit</code> used together.</td>
</tr>
</tbody>
</table>
<div class="sect3">
<h3 id="_limiting_log_output">Limiting Log Output</h3>
<div class="paragraph">
In addition to output-formatting options, <code>git log</code> takes a number of useful limiting options; that is, options that let you show only a subset of commits.
You’ve seen one such option already&thinsp;—&thinsp;the <code>-2</code> option, which displays only the last two commits.
In fact, you can do <code>-&lt;n&gt;</code>, where <code>n</code> is any integer to show the last <code>n</code> commits.
In reality, you’re unlikely to use that often, because Git by default pipes all output through a pager so you see only one page of log output at a time.
</div><br>
<div class="paragraph">
However, the time-limiting options such as <code>--since</code> and <code>--until</code> are very useful.
For example, this command gets the list of commits made in the last two weeks:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log --since=2.weeks</blockquote></pre>
</div>
</div>
<div class="paragraph">
This command works with lots of formats&thinsp;—&thinsp;you can specify a specific date like <code>"2008-01-15"</code>, or a relative date such as <code>"2 years 1 day 3 minutes ago"</code>.
</div>
<div class="paragraph">
You can also filter the list to commits that match some search criteria.
The <code>--author</code> option allows you to filter on a specific author, and the <code>--grep</code> option lets you search for keywords in the commit messages.
</div>
<div class="paragraph">
Another really helpful filter is the <code>-S</code> option (colloquially referred to as Git’s “pickaxe” option), which takes a string and shows only those commits that changed the number of occurrences of that string.
For instance, if you wanted to find the last commit that added or removed a reference to a specific function, you could call:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log -S function_name</blockquote></pre>
</div>
</div>
<div class="paragraph">
The last really useful option to pass to <code>git log</code> as a filter is a path.
If you specify a directory or file name, you can limit the log output to commits that introduced a change to those files.
This is always the last option and is generally preceded by double dashes (<code>--</code>) to separate the paths from the options:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log -- path/to/file</blockquote></pre>
</div>
</div>
<div class="paragraph">
In Options to limit the output of <code>git log</code> we’ll list these and a few other common options for your reference.
</div>
<table id="limit_options" class="tableblock frame-all grid-all stretch">
<caption class="title">Table 3. Options to limit the output of <code>git log</code>
</caption>
<colgroup>
<col style="width: 33.3333%;">
<col style="width: 66.6667%;">
</colgroup>
<thead>
<tr>
<th class="tableblock halign-left valign-top">Option</th>
<th class="tableblock halign-left valign-top">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><code>-&lt;n&gt;</code></td>
<td class="tableblock halign-left valign-top">Show only the last n commits</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--since</code>, <code>--after</code></td>
<td class="tableblock halign-left valign-top">Limit the commits to those made after the specified date.</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--until</code>, <code>--before</code></td>
<td class="tableblock halign-left valign-top">Limit the commits to those made before the specified date.</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--author</code></td>
<td class="tableblock halign-left valign-top">Only show commits in which the author entry matches the specified string.</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--committer</code></td>
<td class="tableblock halign-left valign-top">Only show commits in which the committer entry matches the specified string.</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>--grep</code></td>
<td class="tableblock halign-left valign-top">Only show commits with a commit message containing the string</td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><code>-S</code></td>
<td class="tableblock halign-left valign-top">Only show commits adding or removing code matching the string</td>
</tr>
</tbody>
</table>
<div class="paragraph">
For example, if you want to see which commits modifying test files in the Git source code history were committed by Junio Hamano in the month of October 2008 and are not merge commits, you can run something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log --pretty="%h - %s" --author='Junio C Hamano' --since="2008-10-01" \
   --before="2008-11-01" --no-merges -- t/
5610e3b - Fix testcase failure when extended attributes are in use
acd3b9e - Enhance hold_lock_file_for_{update,append}() API
f563754 - demonstrate breakage of detached checkout with symbolic link HEAD
d1a43f2 - reset --hard/read-tree --reset -u: remove unmerged new paths
51a94af - Fix "checkout --track -b newbranch" on detached HEAD
b0ad11e - pull: allow "git pull origin $something:$current_branch" into an unborn branch</blockquote></pre>
</div>
</div>
<div class="paragraph">
Of the nearly 40,000 commits in the Git source code history, this command shows the 6 that match those criteria.
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