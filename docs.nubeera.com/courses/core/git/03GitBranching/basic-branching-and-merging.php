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
                <strong class="px-2" style="font-size: 1.125rem;">Git Branching</strong><br><br>
                     <ul>
                     <li><a href="index.php">Branches in a Nutshell</a></li>
                     <li><a href="basic-branching-and-merging.php">Basic Branching and Merging</a></li>
                     <li><a href="branch-management.php">Branch Management</a></li>
                     <li><a href="branching-workflows.php">Branching Workflows</a></li>
                     <li><a href="remote-branches.php">Remote Branches</a></li>
                     <li><a href="rebasing.php">Rebasing</a></li>
                  </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Basic Branching and Merging</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Git Branching</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
<div class="paragraph">
Let’s go through a simple example of branching and merging with a workflow that you might use in the real world.
You’ll follow these steps:
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
Do some work on a website.
</li>
<li>
Create a branch for a new user story you’re working on.
</li>
<li>
Do some work in that branch.
</li>
</ol>
</div>
<div class="paragraph">
At this stage, you’ll receive a call that another issue is critical and you need a hotfix.
You’ll do the following:
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
Switch to your production branch.
</li>
<li>
Create a branch to add the hotfix.
</li>
<li>
After it’s tested, merge the hotfix branch, and push to production.
</li>
<li>
Switch back to your original user story and continue working.
</li>
</ol>
</div>
<div class="sect3">
<h3 id="_basic_branching">Basic Branching</h3>
<div class="paragraph">

First, let’s say you’re working on your project and have a couple of commits already on the <code>master</code> branch.
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/basic-branching-1.png" alt="A simple commit history">
</div>
<div class="title">Figure 18. A simple commit history</div>
</div><br>
<div class="paragraph">
You’ve decided that you’re going to work on issue #53 in whatever issue-tracking system your company uses.
To create a new branch and switch to it at the same time, you can run the <code>git checkout</code> command with the <code>-b</code> switch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout -b iss53
Switched to a new branch "iss53"</blockquote></pre>
</div>
</div>
<div class="paragraph">
This is shorthand for:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch iss53
$ git checkout iss53</blockquote></pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/basic-branching-2.png" alt="Creating a new branch pointer">
</div>
<div class="title">Figure 19. Creating a new branch pointer</div>
</div><br>
<div class="paragraph">
You work on your website and do some commits.
Doing so moves the <code>iss53</code> branch forward, because you have it checked out (that is, your <code>HEAD</code> is pointing to it):
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ vim index.html
$ git commit -a -m 'Create new footer [issue 53]'</blockquote></pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/basic-branching-3.png" alt="The `iss53` branch has moved forward with your work">
</div>
<div class="title">Figure 20. The <code>iss53</code> branch has moved forward with your work</div>
</div><br>
<div class="paragraph">
Now you get the call that there is an issue with the website, and you need to fix it immediately.
With Git, you don’t have to deploy your fix along with the <code>iss53</code> changes you’ve made, and you don’t have to put a lot of effort into reverting those changes before you can work on applying your fix to what is in production.
All you have to do is switch back to your <code>master</code> branch.
</div><br>
<div class="paragraph">
However, before you do that, note that if your working directory or staging area has uncommitted changes that conflict with the branch you’re checking out, Git won’t let you switch branches.
It’s best to have a clean working state when you switch branches.
There are ways to get around this (namely, stashing and commit amending) that we’ll cover later on, in <a href="ch00/_git_stashing">Stashing and Cleaning</a>.
For now, let’s assume you’ve committed all your changes, so you can switch back to your <code>master</code> branch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout master
Switched to branch 'master'</blockquote></pre>
</div>
</div>
<div class="paragraph">
At this point, your project working directory is exactly the way it was before you started working on issue #53, and you can concentrate on your hotfix.
This is an important point to remember: when you switch branches, Git resets your working directory to look like it did the last time you committed on that branch.
It adds, removes, and modifies files automatically to make sure your working copy is what the branch looked like on your last commit to it.
</div><br>
<div class="paragraph">
Next, you have a hotfix to make.
Let’s create a <code>hotfix</code> branch on which to work until it’s completed:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout -b hotfix
Switched to a new branch 'hotfix'
$ vim index.html
$ git commit -a -m 'Fix broken email address'
[hotfix 1fb7853] Fix broken email address
 1 file changed, 2 insertions(+)</blockquote></pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/basic-branching-4.png" alt="Hotfix branch based on `master`">
</div>
<div class="title">Figure 21. Hotfix branch based on <code>master</code>
</div>
</div><br>
<div class="paragraph">
You can run your tests, make sure the hotfix is what you want, and finally merge the <code>hotfix</code> branch back into your <code>master</code> branch to deploy to production.
You do this with the <code>git merge</code> command:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout master
$ git merge hotfix
Updating f42c576..3a0874c
Fast-forward
 index.html | 2 ++
 1 file changed, 2 insertions(+)</blockquote></pre>
</div>
</div>
<div class="paragraph">
You’ll notice the phrase “fast-forward” in that merge.
Because the commit <code>C4</code> pointed to by the branch <code>hotfix</code> you merged in was directly ahead of the commit <code>C2</code> you’re on, Git simply moves the pointer forward.
To phrase that another way, when you try to merge one commit with a commit that can be reached by following the first commit’s history, Git simplifies things by moving the pointer forward because there is no divergent work to merge together&thinsp;—&thinsp;this is called a “fast-forward.”
</div><br>
<div class="paragraph">
Your change is now in the snapshot of the commit pointed to by the <code>master</code> branch, and you can deploy the fix.
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/basic-branching-5.png" alt="`master` is fast-forwarded to `hotfix`">
</div>
<div class="title">Figure 22. <code>master</code> is fast-forwarded to <code>hotfix</code>
</div>
</div><br>
<div class="paragraph">
After your super-important fix is deployed, you’re ready to switch back to the work you were doing before you were interrupted.
However, first you’ll delete the <code>hotfix</code> branch, because you no longer need it&thinsp;—&thinsp;the <code>master</code> branch points at the same place.
You can delete it with the <code>-d</code> option to <code>git branch</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch -d hotfix
Deleted branch hotfix (3a0874c).</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now you can switch back to your work-in-progress branch on issue #53 and continue working on it.
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout iss53
Switched to branch "iss53"
$ vim index.html
$ git commit -a -m 'Finish the new footer [issue 53]'
[iss53 ad82d7a] Finish the new footer [issue 53]
1 file changed, 1 insertion(+)</blockquote></pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/basic-branching-6.png" alt="Work continues on `iss53`">
</div>
<div class="title">Figure 23. Work continues on <code>iss53</code>
</div>
</div><br>
<div class="paragraph">
It’s worth noting here that the work you did in your <code>hotfix</code> branch is not contained in the files in your <code>iss53</code> branch.
If you need to pull it in, you can merge your <code>master</code> branch into your <code>iss53</code> branch by running <code>git merge master</code>, or you can wait to integrate those changes until you decide to pull the <code>iss53</code> branch back into <code>master</code> later.
</div>
</div>
<div class="sect3">
<h3 id="_basic_merging">Basic Merging</h3>
<div class="paragraph">

Suppose you’ve decided that your issue #53 work is complete and ready to be merged into your <code>master</code> branch.
In order to do that, you’ll merge your <code>iss53</code> branch into <code>master</code>, much like you merged your <code>hotfix</code> branch earlier.
All you have to do is check out the branch you wish to merge into and then run the <code>git merge</code> command:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout master
Switched to branch 'master'
$ git merge iss53
Merge made by the 'recursive' strategy.
index.html |    1 +
1 file changed, 1 insertion(+)</blockquote></pre>
</div>
</div>
<div class="paragraph">
This looks a bit different than the <code>hotfix</code> merge you did earlier.
In this case, your development history has diverged from some older point.
Because the commit on the branch you’re on isn’t a direct ancestor of the branch you’re merging in, Git has to do some work.
In this case, Git does a simple three-way merge, using the two snapshots pointed to by the branch tips and the common ancestor of the two.
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/basic-merging-1.png" alt="Three snapshots used in a typical merge">
</div>
<div class="title">Figure 24. Three snapshots used in a typical merge</div>
</div><br>
<div class="paragraph">
Instead of just moving the branch pointer forward, Git creates a new snapshot that results from this three-way merge and automatically creates a new commit that points to it.
This is referred to as a merge commit, and is special in that it has more than one parent.
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/basic-merging-2.png" alt="A merge commit">
</div>
<div class="title">Figure 25. A merge commit</div>
</div><br>
<div class="paragraph">
Now that your work is merged in, you have no further need for the <code>iss53</code> branch.
You can close the issue in your issue-tracking system, and delete the branch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch -d iss53</blockquote></pre>
</div>
</div>
</div>
<div class="sect3">
<h3 id="_basic_merge_conflicts">Basic Merge Conflicts</h3>
<div class="paragraph">

Occasionally, this process doesn’t go smoothly.
If you changed the same part of the same file differently in the two branches you’re merging, Git won’t be able to merge them cleanly.
If your fix for issue #53 modified the same part of a file as the <code>hotfix</code> branch, you’ll get a merge conflict that looks something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git merge iss53
Auto-merging index.html
CONFLICT (content): Merge conflict in index.html
Automatic merge failed; fix conflicts and then commit the result.</blockquote></pre>
</div>
</div>
<div class="paragraph">
Git hasn’t automatically created a new merge commit.
It has paused the process while you resolve the conflict.
If you want to see which files are unmerged at any point after a merge conflict, you can run <code>git status</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git status
On branch master
You have unmerged paths.
  (fix conflicts and run "git commit")

Unmerged paths:
  (use "git add &lt;file&gt;..." to mark resolution)

    both modified:      index.html

no changes added to commit (use "git add" and/or "git commit -a")</blockquote></pre>
</div>
</div>
<div class="paragraph">
Anything that has merge conflicts and hasn’t been resolved is listed as unmerged.
Git adds standard conflict-resolution markers to the files that have conflicts, so you can open them manually and resolve those conflicts.
Your file contains a section that looks something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-html" data-lang="html">&lt;&lt;&lt;&lt;&lt;&lt;&lt; HEAD:index.html
&lt;div id="footer"&gt;contact : email.support@github.com&lt;/div&gt;
=======
&lt;div id="footer"&gt;
 please contact us at support@github.com
&lt;/div&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; iss53:index.html</blockquote></pre>
</div>
</div>
<div class="paragraph">
This means the version in <code>HEAD</code> (your <code>master</code> branch, because that was what you had checked out when you ran your merge command) is the top part of that block (everything above the <code>=======</code>), while the version in your <code>iss53</code> branch looks like everything in the bottom part.
In order to resolve the conflict, you have to either choose one side or the other or merge the contents yourself.
For instance, you might resolve this conflict by replacing the entire block with this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-html" data-lang="html">&lt;div id="footer"&gt;
please contact us at email.support@github.com
&lt;/div&gt;</blockquote></pre>
</div>
</div>
<div class="paragraph">
This resolution has a little of each section, and the <code>&lt;&lt;&lt;&lt;&lt;&lt;&lt;</code>, <code>=======</code>, and <code>&gt;&gt;&gt;&gt;&gt;&gt;&gt;</code> lines have been completely removed.
After you’ve resolved each of these sections in each conflicted file, run <code>git add</code> on each file to mark it as resolved.
Staging the file marks it as resolved in Git.
</div><br>
<div class="paragraph">
If you want to use a graphical tool to resolve these issues, you can run <code>git mergetool</code>, which fires up an appropriate visual merge tool and walks you through the conflicts:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git mergetool

This message is displayed because 'merge.tool' is not configured.
See 'git mergetool --tool-help' or 'git help config' for more details.
'git mergetool' will now attempt to use one of the following tools:
opendiff kdiff3 tkdiff xxdiff meld tortoisemerge gvimdiff diffuse diffmerge ecmerge p4merge araxis bc3 codecompare vimdiff emerge
Merging:
index.html

Normal merge conflict for 'index.html':
  {local}: modified file
  {remote}: modified file
Hit return to start merge resolution tool (opendiff):</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you want to use a merge tool other than the default (Git chose <code>opendiff</code> in this case because the command was run on a Mac), you can see all the supported tools listed at the top after “one of the following tools.”
Just type the name of the tool you’d rather use.
</div>
<div class="paragraph">
After you exit the merge tool, Git asks you if the merge was successful.
If you tell the script that it was, it stages the file to mark it as resolved for you.
You can run <code>git status</code> again to verify that all conflicts have been resolved:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git status
On branch master
All conflicts fixed but you are still merging.
  (use "git commit" to conclude merge)

Changes to be committed:

    modified:   index.html</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you’re happy with that, and you verify that everything that had conflicts has been staged, you can type <code>git commit</code> to finalize the merge commit.
The commit message by default looks something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">Merge branch 'iss53'

Conflicts:
    index.html
#
# It looks like you may be committing a merge.
# If this is not correct, please remove the file
#	.git/MERGE_HEAD
# and try again.


# Please enter the commit message for your changes. Lines starting
# with '#' will be ignored, and an empty message aborts the commit.
# On branch master
# All conflicts fixed but you are still merging.
#
# Changes to be committed:
#	modified:   index.html
#</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you think it would be helpful to others looking at this merge in the future, you can modify this commit message with details about how you resolved the merge and explain why you did the changes you made if these are not obvious.
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