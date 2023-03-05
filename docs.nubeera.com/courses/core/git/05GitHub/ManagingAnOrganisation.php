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
                <strong class="px-2" style="font-size: 1.125rem;">GitHub</strong><br><br>
                    <ul>
                        <li><a href="index.php">Account Setup and Configuration</a></li>
                        <li><a href="ContributingToaProject.php">Contributing to a Project</a></li>
                        <li><a href="MaintainingaProject.php">Maintaining a Project</a></li>
                        <li><a href="ManagingAnOrganisation.php">Managing an Organization</a></li>
                        <li><a href="ScriptingGitHub.php">Scripting GitHub</a></li>
                    </ul>

            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Managing an organization</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">GitHub</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                        <div class="paragraph">
                            In addition to single-user accounts, GitHub has what are called Organizations.
                            Like personal accounts, Organizational accounts have a namespace where all their projects exist, but many other things are different.
                            These accounts represent a group of people with shared ownership of projects, and there are many tools to manage subgroups of those people.
                            Normally these accounts are used for Open Source groups (such as “perl” or “rails”) or companies (such as “google” or “twitter”).
                        </div>
                        <div class="sect3">
                            <h3 id="_organization_basics">Organization Basics</h3>
                            <div class="paragraph">
                                An organization is pretty easy to create; just click on the “+” icon at the top-right of any GitHub page, and select “New organization” from the menu.
                            </div>
                            <div class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/neworg.png" alt="The “New organization” menu item">
                                </div>
                                <div class="title">Figure 125. The “New organization” menu item</div>
                            </div><br><br>
                            <div class="paragraph">
                                First you’ll need to name your organization and provide an email address for a main point of contact for the group.
                                Then you can invite other users to be co-owners of the account if you want to.
                            </div><br>
                            <div class="paragraph">
                                Follow these steps and you’ll soon be the owner of a brand-new organization.
                                Like personal accounts, organizations are free if everything you plan to store there will be open source.
                            </div><br>
                            <div class="paragraph">
                                As an owner in an organization, when you fork a repository, you’ll have the choice of forking it to your organization’s namespace.
                                When you create new repositories you can create them either under your personal account or under any of the organizations that you are an owner in.
                                You also automatically “watch” any new repository created under these organizations.
                            </div><br>
                            <div class="paragraph">
                                Just like in Your Avatar, you can upload an avatar for your organization to personalize it a bit.
                                Also just like personal accounts, you have a landing page for the organization that lists all of your repositories and can be viewed by other people.
                            </div><br>
                            <div class="paragraph">
                                Now let’s cover some of the things that are a bit different with an organizational account.
                            </div>
                        </div>
                        <div class="sect3">
                            <h3 id="_teams">Teams</h3>
                            <div class="paragraph">
                                Organizations are associated with individual people by way of teams, which are simply a grouping of individual user accounts and repositories within the organization and what kind of access those people have in those repositories.
                            </div><br>
                            <div class="paragraph">
                                For example, say your company has three repositories: <code>frontend</code>, <code>backend</code>, and <code>deployscripts</code>.
                                You’d want your HTML/CSS/JavaScript developers to have access to <code>frontend</code> and maybe <code>backend</code>, and your Operations people to have access to <code>backend</code> and <code>deployscripts</code>.
                                Teams make this easy, without having to manage the collaborators for every individual repository.
                            </div><br>
                            <div class="paragraph">
                                The Organization page shows you a simple dashboard of all the repositories, users and teams that are under this organization.
                            </div>
                            <div id="_org_page" class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/orgs-01-page.png" alt="The Organization page">
                                </div>
                                <div class="title">Figure 126. The Organization page</div>
                            </div><br><br>
                            <div class="paragraph">
                                To manage your Teams, you can click on the Teams sidebar on the right hand side of the page in The Organization page.
                                This will bring you to a page you can use to add members to the team, add repositories to the team or manage the settings and access control levels for the team.
                                Each team can have read only, read/write or administrative access to the repositories.
                                You can change that level by clicking the “Settings” button in The Team page.
                            </div>
                            <div id="_team_page" class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/orgs-02-teams.png" alt="The Team page">
                                </div>
                                <div class="title">Figure 127. The Team page</div>
                            </div><br><br>
                            <div class="paragraph">
                                When you invite someone to a team, they will get an email letting them know they’ve been invited.
                            </div><br>
                            <div class="paragraph">
                                Additionally, team <code>@mentions</code> (such as <code>@acmecorp/frontend</code>) work much the same as they do with individual users, except that <strong>all</strong> members of the team are then subscribed to the thread.
                                This is useful if you want the attention from someone on a team, but you don’t know exactly who to ask.
                            </div><br>
                            <div class="paragraph">
                                A user can belong to any number of teams, so don’t limit yourself to only access-control teams.
                                Special-interest teams like <code>ux</code>, <code>css</code>, or <code>refactoring</code> are useful for certain kinds of questions, and others like <code>legal</code> and <code>colorblind</code> for an entirely different kind.
                            </div>
                        </div>
                        <div class="sect3">
                            <h3 id="_audit_log">Audit Log</h3>
                            <div class="paragraph">
                                Organizations also give owners access to all the information about what went on under the organization.
                                You can go to the 'Audit Log' tab and see what events have happened at an organization level, who did them and where in the world they were done.
                            </div>
                            <div id="_the_audit_log" class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/orgs-03-audit.png" alt="The Audit log">
                                </div>
                                <div class="title">Figure 128. The Audit log</div>
                            </div><br><br>
                            <div class="paragraph">
                                You can also filter down to specific types of events, specific places or specific people.
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