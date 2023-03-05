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
                <strong class="px-2" style="font-size: 1.125rem;">Distributed Git</strong><br><br>
                     <ul>
                     <li><a href="index.php">Distributed Workflows</a></li>
                     <li><a href="contributing-to-a-project.php">Contributing to a Project</a></li>
                     <li><a href="maintaining-a-project.php">Maintaining a Project</a></li>
                     </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Distributed Workflows</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Distributed Git</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                  <div id="main" class="book edition2">
  <div>
Now that you have a remote Git repository set up as a focal point for all the developers to share their code, and you’re familiar with basic Git commands in a local workflow, you’ll look at how to utilize some of the distributed workflows that Git affords you. <br><br>
In this chapter, you’ll see how to work with Git in a distributed environment as a contributor and an integrator.
That is, you’ll learn how to contribute code successfully to a project and make it as easy on you and the project maintainer as possible, and also how to maintain a project successfully with a number of developers contributing.
<h2 id="_distributed_workflows">Distributed Workflows</h2>
<div class="paragraph">

In contrast with Centralized Version Control Systems (CVCSs), the distributed nature of Git allows you to be far more flexible in how developers collaborate on projects.
In centralized systems, every developer is a node working more or less equally with a central hub.
In Git, however, every developer is potentially both a node and a hub; that is, every developer can both contribute code to other repositories and maintain a public repository on which others can base their work and which they can contribute to.
This presents a vast range of workflow possibilities for your project and/or your team, so we’ll cover a few common paradigms that take advantage of this flexibility.
We’ll go over the strengths and possible weaknesses of each design; you can choose a single one to use, or you can mix and match features from each.
</div>
<div class="sect3">
<h3 id="_centralized_workflow">Centralized Workflow</h3>
<div class="paragraph">

In centralized systems, there is generally a single collaboration model&thinsp;—&thinsp;the centralized workflow.
One central hub, or <em>repository</em>, can accept code, and everyone synchronizes their work with it.
A number of developers are nodes&thinsp;—&thinsp;consumers of that hub&thinsp;—&thinsp;and synchronize with that centralized location.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/centralized_workflow.png" alt="Centralized workflow">
</div>
<div class="title">Figure 53. Centralized workflow</div>
</div><br><br>
<div class="paragraph">
This means that if two developers clone from the hub and both make changes, the first developer to push their changes back up can do so with no problems.
The second developer must merge in the first one’s work before pushing changes up, so as not to overwrite the first developer’s changes.
This concept is as true in Git as it is in Subversion (or any CVCS), and this model works perfectly well in Git.
</div><br>
<div class="paragraph">
If you are already comfortable with a centralized workflow in your company or team, you can easily continue using that workflow with Git.
Simply set up a single repository, and give everyone on your team push access; Git won’t let users overwrite each other.
</div><br>
<div class="paragraph">
Say John and Jessica both start working at the same time.
John finishes his change and pushes it to the server.
Then Jessica tries to push her changes, but the server rejects them.
She is told that she’s trying to push non-fast-forward changes and that she won’t be able to do so until she fetches and merges.
This workflow is attractive to a lot of people because it’s a paradigm that many are familiar and comfortable with.
</div><br>
<div class="paragraph">
This is also not limited to small teams.
With Git’s branching model, it’s possible for hundreds of developers to successfully work on a single project through dozens of branches simultaneously.
</div>
</div>
<div class="sect3">
<h3 id="_integration_manager">Integration-Manager Workflow</h3>
<div class="paragraph">

Because Git allows you to have multiple remote repositories, it’s possible to have a workflow where each developer has write access to their own public repository and read access to everyone else’s.
This scenario often includes a canonical repository that represents the “official” project.
To contribute to that project, you create your own public clone of the project and push your changes to it.
Then, you can send a request to the maintainer of the main project to pull in your changes.
The maintainer can then add your repository as a remote, test your changes locally, merge them into their branch, and push back to their repository.
The process works as follows:
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
The project maintainer pushes to their public repository.
</li>
<li>
A contributor clones that repository and makes changes.
</li>
<li>
The contributor pushes to their own public copy.
</li>
<li>
The contributor sends the maintainer an email asking them to pull changes.
</li>
<li>
The maintainer adds the contributor’s repository as a remote and merges locally.
</li>
<li>
The maintainer pushes merged changes to the main repository.
</li>
</ol>
</div>
<div id="wfdiag_b" class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/integration-manager.png" alt="Integration-manager workflow">
</div>
<div class="title">Figure 54. Integration-manager workflow</div>
</div><br><br>
<div class="paragraph">

This is a very common workflow with hub-based tools like GitHub or GitLab, where it’s easy to fork a project and push your changes into your fork for everyone to see.
One of the main advantages of this approach is that you can continue to work, and the maintainer of the main repository can pull in your changes at any time.
Contributors don’t have to wait for the project to incorporate their changes&thinsp;—&thinsp;each party can work at their own pace.
</div>
</div>
<div class="sect3">
<h3 id="_dictator_and_lieutenants_workflow">Dictator and Lieutenants Workflow</h3>
<div class="paragraph">

This is a variant of a multiple-repository workflow.
It’s generally used by huge projects with hundreds of collaborators; one famous example is the Linux kernel.
Various integration managers are in charge of certain parts of the repository; they’re called <em>lieutenants</em>.
All the lieutenants have one integration manager known as the benevolent dictator.
The benevolent dictator pushes from their directory to a reference repository from which all the collaborators need to pull.
The process works like this:
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
Regular developers work on their topic branch and rebase their work on top of <code>master</code>.
The <code>master</code> branch is that of the reference repository to which the dictator pushes.
</li>
<li>
Lieutenants merge the developers' topic branches into their <code>master</code> branch.
</li>
<li>
The dictator merges the lieutenants' <code>master</code> branches into the dictator’s <code>master</code> branch.
</li>
<li>
Finally, the dictator pushes that <code>master</code> branch to the reference repository so the other developers can rebase on it.
</li>
</ol>
</div>
<div id="wfdiag_c" class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/benevolent-dictator.png" alt="Benevolent dictator workflow">
</div>
<div class="title">Figure 55. Benevolent dictator workflow</div>
</div><br><br>
<div class="paragraph">
This kind of workflow isn’t common, but can be useful in very big projects, or in highly hierarchical environments.
It allows the project leader (the dictator) to delegate much of the work and collect large subsets of code at multiple points before integrating them.
</div>
</div>
<div class="sect3">
<h3 id="_patterns_for_managing_source_code_branches">Patterns for Managing Source Code Branches</h3>
<div class="sect3">
<h3 id="_workflows_summary">Workflows Summary</h3>
<div class="paragraph">
These are some commonly used workflows that are possible with a distributed system like Git, but you can see that many variations are possible to suit your particular real-world workflow.
Now that you can (hopefully) determine which workflow combination may work for you, we’ll cover some more specific examples of how to accomplish the main roles that make up the different flows.
In the next section, you’ll learn about a few common patterns for contributing to a project.
</div>
</div>
</div>
</div></div>
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