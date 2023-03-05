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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Branching Workflows</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Git Branching</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
<div class="paragraph">
Now that you have the basics of branching and merging down, what can or should you do with them?
In this section, we’ll cover some common workflows that this lightweight branching makes possible, so you can decide if you would like to incorporate them into your own development cycle.
</div>
<div class="sect3">
<h3 id="_long_running_branches">Long-Running Branches</h3>
<div class="paragraph">

Because Git uses a simple three-way merge, merging from one branch into another multiple times over a long period is generally easy to do.
This means you can have several branches that are always open and that you use for different stages of your development cycle; you can merge regularly from some of them into others.
</div><br>
<div class="paragraph">
Many Git developers have a workflow that embraces this approach, such as having only code that is entirely stable in their <code>master</code> branch&thinsp;—&thinsp;possibly only code that has been or will be released.
They have another parallel branch named <code>develop</code> or <code>next</code> that they work from or use to test stability&thinsp;—&thinsp;it isn’t necessarily always stable, but whenever it gets to a stable state, it can be merged into <code>master</code>.
It’s used to pull in topic branches (short-lived branches, like your earlier <code>iss53</code> branch) when they’re ready, to make sure they pass all the tests and don’t introduce bugs.
</div><br>
<div class="paragraph">
In reality, we’re talking about pointers moving up the line of commits you’re making.
The stable branches are farther down the line in your commit history, and the bleeding-edge branches are farther up the history.
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/lr-branches-1.png" alt="A linear view of progressive-stability branching">
</div>
<div class="title">Figure 26. A linear view of progressive-stability branching</div>
</div><br>
<div class="paragraph">
It’s generally easier to think about them as work silos, where sets of commits graduate to a more stable silo when they’re fully tested.
</div>
<div id="lrbranch_b" class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/lr-branches-2.png" alt="A “silo” view of progressive-stability branching">
</div>
<div class="title">Figure 27. A “silo” view of progressive-stability branching</div>
</div><br>
<div class="paragraph">
You can keep doing this for several levels of stability.
Some larger projects also have a <code>proposed</code> or <code>pu</code> (proposed updates) branch that has integrated branches that may not be ready to go into the <code>next</code> or <code>master</code> branch.
The idea is that your branches are at various levels of stability; when they reach a more stable level, they’re merged into the branch above them.
Again, having multiple long-running branches isn’t necessary, but it’s often helpful, especially when you’re dealing with very large or complex projects.
</div>
</div>
<div class="sect3">
<h3 id="_topic_branch">Topic Branches</h3>
<div class="paragraph">

Topic branches, however, are useful in projects of any size.
A topic branch is a short-lived branch that you create and use for a single particular feature or related work.
This is something you’ve likely never done with a VCS before because it’s generally too expensive to create and merge branches.
But in Git it’s common to create, work on, merge, and delete branches several times a day.
</div><br>
<div class="paragraph">
You saw this in the last section with the <code>iss53</code> and <code>hotfix</code> branches you created.
You did a few commits on them and deleted them directly after merging them into your main branch.
This technique allows you to context-switch quickly and completely&thinsp;—&thinsp;because your work is separated into silos where all the changes in that branch have to do with that topic, it’s easier to see what has happened during code review and such.
You can keep the changes there for minutes, days, or months, and merge them in when they’re ready, regardless of the order in which they were created or worked on.
</div><br>
<div class="paragraph">
Consider an example of doing some work (on <code>master</code>), branching off for an issue (<code>iss91</code>), working on it for a bit, branching off the second branch to try another way of handling the same thing (<code>iss91v2</code>), going back to your <code>master</code> branch and working there for a while, and then branching off there to do some work that you’re not sure is a good idea (<code>dumbidea</code> branch).
Your commit history will look something like this:
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/topic-branches-1.png" alt="Multiple topic branches">
</div>
<div class="title">Figure 28. Multiple topic branches</div>
</div><br>
<div class="paragraph">
Now, let’s say you decide you like the second solution to your issue best (<code>iss91v2</code>); and you showed the <code>dumbidea</code> branch to your coworkers, and it turns out to be genius.
You can throw away the original <code>iss91</code> branch (losing commits <code>C5</code> and <code>C6</code>) and merge in the other two.
Your history then looks like this:
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/topic-branches-2.png" alt="History after merging `dumbidea` and `iss91v2`">
</div>
<div class="title">Figure 29. History after merging <code>dumbidea</code> and <code>iss91v2</code>
</div>
</div><br>
<div class="paragraph">
We will go into more detail about the various possible workflows for your Git project in <a href="../04DistributedGit/">Distributed Git</a>, so before you decide which branching scheme your next project will use, be sure to read that chapter.
</div><br>
<div class="paragraph">
It’s important to remember when you’re doing all this that these branches are completely local.
When you’re branching and merging, everything is being done only in your Git repository&thinsp;—&thinsp;there is no communication with the server.
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