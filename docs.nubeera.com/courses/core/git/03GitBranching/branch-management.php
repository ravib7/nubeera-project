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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Branch Management</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Git Branching</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
<div class="paragraph">

Now that you’ve created, merged, and deleted some branches, let’s look at some branch-management tools that will come in handy when you begin using branches all the time.
</div><br>
<div class="paragraph">
The <code>git branch</code> command does more than just create and delete branches.
If you run it with no arguments, you get a simple listing of your current branches:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch
  iss53
* master
  testing</blockquote></pre>
</div>
</div>
<div class="paragraph">
Notice the <code>*</code> character that prefixes the <code>master</code> branch: it indicates the branch that you currently have checked out (i.e., the branch that <code>HEAD</code> points to).
This means that if you commit at this point, the <code>master</code> branch will be moved forward with your new work.
To see the last commit on each branch, you can run <code>git branch -v</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch -v
  iss53   93b412c Fix javascript issue
* master  7a98805 Merge branch 'iss53'
  testing 782fd34 Add scott to the author list in the readme</blockquote></pre>
</div>
</div>
<div class="paragraph">
The useful <code>--merged</code> and <code>--no-merged</code> options can filter this list to branches that you have or have not yet merged into the branch you’re currently on.
To see which branches are already merged into the branch you’re on, you can run <code>git branch --merged</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch --merged
  iss53
* master</blockquote></pre>
</div>
</div>
<div class="paragraph">
Because you already merged in <code>iss53</code> earlier, you see it in your list.
Branches on this list without the <code>*</code> in front of them are generally fine to delete with <code>git branch -d</code>; you’ve already incorporated their work into another branch, so you’re not going to lose anything.
</div><br>
<div class="paragraph">
To see all the branches that contain work you haven’t yet merged in, you can run <code>git branch --no-merged</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch --no-merged
  testing</blockquote></pre>
</div>
</div>
<div class="paragraph">
This shows your other branch.
Because it contains work that isn’t merged in yet, trying to delete it with <code>git branch -d</code> will fail:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch -d testing
error: The branch 'testing' is not fully merged.
If you are sure you want to delete it, run 'git branch -D testing'.</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you really do want to delete the branch and lose that work, you can force it with <code>-D</code>, as the helpful message points out.
</div>
<div class="sect3">
<h3 id="_changing_a_branch_name">Changing a branch name</h3>
<div class="paragraph">
Suppose you have a branch that is called <code>bad-branch-name</code> and you want to change it to <code>corrected-branch-name</code>, while keeping all history.
You also want to change the branch name on the remote (GitHub, GitLab, other server).
How do you do this?
</div><br>
<div class="paragraph">
Rename the branch locally with the <code>git branch --move</code> command:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch --move bad-branch-name corrected-branch-name</blockquote></pre>
</div>
</div>
<div class="paragraph">
This replaces your <code>bad-branch-name</code> with <code>corrected-branch-name</code>, but this change is only local for now.
To let others see the corrected branch on the remote, push it:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push --set-upstream origin corrected-branch-name</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now we’ll take a brief look at where we are now:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch --all
* corrected-branch-name
  main
  remotes/origin/bad-branch-name
  remotes/origin/corrected-branch-name
  remotes/origin/main</blockquote></pre>
</div>
</div>
<div class="paragraph">
Notice that you’re on the branch <code>corrected-branch-name</code> and it’s available on the remote.
However, the branch with the bad name is also still present there but you can delete it by executing the following command:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push origin --delete bad-branch-name</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now the bad branch name is fully replaced with the corrected branch name.
</div>
<div class="sect4">
<h4 id="_changing_the_master_branch_name">Changing the master branch name</h4>
<div class="paragraph">
Rename your local <code>master</code> branch into <code>main</code> with the following command:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch --move master main</blockquote></pre>
</div>
</div>
<div class="paragraph">
There’s no local <code>master</code> branch anymore, because it’s renamed to the <code>main</code> branch.
</div><br>
<div class="paragraph">
To let others see the new <code>main</code> branch, you need to push it to the remote.
This makes the renamed branch available on the remote.
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push --set-upstream origin main</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now we end up with the following state:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">git branch --all
* main
  remotes/origin/HEAD -&gt; origin/master
  remotes/origin/main
  remotes/origin/master</blockquote></pre>
</div>
</div>
<div class="paragraph">
Your local <code>master</code> branch is gone, as it’s replaced with the <code>main</code> branch.
The <code>main</code> branch is present on the remote.
However, the old <code>master</code> branch is still present on the remote.
Other collaborators will continue to use the <code>master</code> branch as the base of their work, until you make some further changes.
</div><br>
<div class="paragraph">
Now you have a few more tasks in front of you to complete the transition:
</div>
<div class="ulist">
<ul>
<li>
Any projects that depend on this one will need to update their code and/or configuration.
</li>
<li>
Update any test-runner configuration files.
</li>
<li>
Adjust build and release scripts.
</li>
<li>
Redirect settings on your repo host for things like the repo’s default branch, merge rules, and other things that match branch names.
</li>
<li>
Update references to the old branch in documentation.
</li>
<li>
Close or merge any pull requests that target the old branch.
</li>
</ul>
</div>
<div class="paragraph">
After you’ve done all these tasks, and are certain the <code>main</code> branch performs just as the <code>master</code> branch, you can delete the <code>master</code> branch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push origin --delete master</blockquote></pre>
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