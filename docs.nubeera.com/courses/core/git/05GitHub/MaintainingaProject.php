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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Maintaining a Project</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">GitHub</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <div class="paragraph">
                    Now that we’re comfortable contributing to a project, let’s look at the other side: creating, maintaining and administering your own project.
                </div>
                <div class="sect3">
                    <h3 id="_creating_a_new_repository">Creating a New Repository</h3>
                    <div class="paragraph">
                        Let’s create a new repository to share our project code with.
                        Start by clicking the “New repository” button on the right-hand side of the dashboard, or from the <code>+</code> button in the top toolbar next to your username as seen in The “New repository” dropdown.
                    </div>
                    <div class="imageblock">
                        <div class="content">
                            <br><br><img src="https://git-scm.com/book/en/v2/images/newrepo.png" alt="The “Your repositories” area">
                        </div>
                        <div class="title">Figure 109. The “Your repositories” area</div>
                    </div><br><br>
                    <div id="_new_repo_dropdown" class="imageblock">
                        <div class="content">
                            <br><br><img src="https://git-scm.com/book/en/v2/images/new-repo.png" alt="The “new repository” dropdown">
                        </div>
                        <div class="title">Figure 110. The “New repository” dropdown</div>
                    </div><br><br>
                    <div class="paragraph">
                        This takes you to the “new repository” form:
                    </div>
                    <div class="imageblock">
                        <div class="content">
                            <br><br><img src="https://git-scm.com/book/en/v2/images/newrepoform.png" alt="The “new repository” form">
                        </div>
                        <div class="title">Figure 111. The “new repository” form</div>
                    </div><br><br>
                    <div class="paragraph">
                        All you really have to do here is provide a project name; the rest of the fields are completely optional.
                        For now, just click the “Create Repository” button, and boom – you have a new repository on GitHub, named <code>&lt;user&gt;/&lt;project_name&gt;</code>.
                    </div><br>
                    <div class="paragraph">
                        Since you have no code there yet, GitHub will show you instructions for how to create a brand-new Git repository, or connect an existing Git project.
                        We won’t belabor this here; if you need a refresher, check out <a href="../02GitBasics/">Git Basics</a>.
                    </div><br>
                    <div class="paragraph">
                        Now that your project is hosted on GitHub, you can give the URL to anyone you want to share your project with.
                        Every project on GitHub is accessible over HTTPS as <code>https://github.com/&lt;user&gt;/&lt;project_name&gt;</code>, and over SSH as <code>git@github.com:&lt;user&gt;/&lt;project_name&gt;</code>.
                        Git can fetch from and push to both of these URLs, but they are access-controlled based on the credentials of the user connecting to them.
                    </div>

                    <div class="sect3">
                        <h3 id="_adding_collaborators">Adding Collaborators</h3>
                        <div class="paragraph">
                            If you’re working with other people who you want to give commit access to, you need to add them as “collaborators”.
                            If Ben, Jeff, and Louise all sign up for accounts on GitHub, and you want to give them push access to your repository, you can add them to your project.
                            Doing so will give them “push” access, which means they have both read and write access to the project and Git repository.
                        </div><br>
                        <div class="paragraph">
                            Click the “Settings” link at the bottom of the right-hand sidebar.
                        </div>
                        <div class="imageblock">
                            <div class="content">
                                <br><br><img src="https://git-scm.com/book/en/v2/images/reposettingslink.png" alt="The repository settings link">
                            </div>
                            <div class="title">Figure 112. The repository settings link</div>
                        </div><br><br>
                        <div class="paragraph">
                            Then select “Collaborators” from the menu on the left-hand side.
                            Then, just type a username into the box, and click “Add collaborator.”
                            You can repeat this as many times as you like to grant access to everyone you like.
                            If you need to revoke access, just click the “X” on the right-hand side of their row.
                        </div>
                        <div class="imageblock">
                            <div class="content">
                                <br><br><img src="https://git-scm.com/book/en/v2/images/collaborators.png" alt="The repository collaborators box">
                            </div>
                            <div class="title">Figure 113. Repository collaborators</div>
                        </div>
                    </div><br><br>
                    <div class="sect3">
                        <h3 id="_managing_pull_requests">Managing Pull Requests</h3>
                        <div class="paragraph">
                            Now that you have a project with some code in it and maybe even a few collaborators who also have push access, let’s go over what to do when you get a Pull Request yourself.
                        </div><br>
                        <div class="paragraph">
                            Pull Requests can either come from a branch in a fork of your repository or they can come from another branch in the same repository.
                            The only difference is that the ones in a fork are often from people where you can’t push to their branch and they can’t push to yours, whereas with internal Pull Requests generally both parties can access the branch.
                        </div><br>
                        <div class="paragraph">
                            For these examples, let’s assume you are “tonychacon” and you’ve created a new Arduino code project named “fade”.
                        </div>
                        <div class="sect4">
                            <h4 id="_email_notifications">Email Notifications</h4>
                            <div class="paragraph">
                                Someone comes along and makes a change to your code and sends you a Pull Request.
                                You should get an email notifying you about the new Pull Request and it should look something like Email notification of a new Pull Request.
                            </div>
                            <div id="_email_pr" class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/maint-01-email.png" alt="Pull Request email notification">
                                </div>
                                <div class="title">Figure 114. Email notification of a new Pull Request</div>
                            </div><br><br>
                            <div class="paragraph">
                                There are a few things to notice about this email.
                                It will give you a small diffstat&thinsp;—&thinsp;a list of files that have changed in the Pull Request and by how much.
                                It gives you a link to the Pull Request on GitHub.
                                It also gives you a few URLs that you can use from the command line.
                            </div><br>
                            <div class="paragraph">
                                If you notice the line that says <code>git pull &lt;url&gt; patch-1</code>, this is a simple way to merge in a remote branch without having to add a remote.
                                We went over this quickly in Checking Out Remote Branches.
                                If you wish, you can create and switch to a topic branch and then run this command to merge in the Pull Request changes.
                            </div><br>
                            <div class="paragraph">
                                The other interesting URLs are the <code>.diff</code> and <code>.patch</code> URLs, which as you may guess, provide unified diff and patch versions of the Pull Request.
                                You could technically merge in the Pull Request work with something like this:
                            </div>
                            <div class="listingblock">
                                <div class="content">
                                    <pre class="highlight"><blockquote class="language-console" data-lang="console">$ curl https://github.com/tonychacon/fade/pull/1.patch | git am</blockquote></pre>
                                </div>
                            </div>
                        </div>
                        <div class="sect4">
                            <h4 id="_collaborating_on_the_pull_request">Collaborating on the Pull Request</h4>
                            <div class="paragraph">
                                you can now have a conversation with the person who opened the Pull Request.
                                You can comment on specific lines of code, comment on whole commits or comment on the entire Pull Request itself, using GitHub Flavored Markdown everywhere.
                            </div><br>
                            <div class="paragraph">
                                Every time someone else comments on the Pull Request you will continue to get email notifications so you know there is activity happening.
                                They will each have a link to the Pull Request where the activity is happening and you can also directly respond to the email to comment on the Pull Request thread.
                            </div>
                            <div class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/maint-03-email-resp.png" alt="Email response">
                                </div>
                                <div class="title">Figure 115. Responses to emails are included in the thread</div>
                            </div><br><br>
                            <div class="paragraph">
                                Once the code is in a place you like and want to merge it in, you can either pull the code down and merge it locally, either with the <code>git pull &lt;url&gt; &lt;branch&gt;</code> syntax we saw earlier, or by adding the fork as a remote and fetching and merging.
                            </div><br>
                            <div class="paragraph">
                                If the merge is trivial, you can also just hit the “Merge” button on the GitHub site.
                                This will do a “non-fast-forward” merge, creating a merge commit even if a fast-forward merge was possible.
                                This means that no matter what, every time you hit the merge button, a merge commit is created.
                                As you can see in Merge button and instructions for merging a Pull Request manually, GitHub gives you all of this information if you click the hint link.
                            </div>
                            <div id="_merge_button" class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/maint-02-merge.png" alt="Merge button">
                                </div>
                                <div class="title">Figure 116. Merge button and instructions for merging a Pull Request manually</div>
                            </div><br><br>
                            <div class="paragraph">
                                If you decide you don’t want to merge it, you can also just close the Pull Request and the person who opened it will be notified.
                            </div>
                        </div><br>
                        <div class="sect4">
                            <h4 id="_pr_refs">Pull Request Refs</h4>
                            <div class="paragraph">
                                If you’re dealing with a <strong>lot</strong> of Pull Requests and don’t want to add a bunch of remotes or do one time pulls every time, there is a neat trick that GitHub allows you to do.
                                This is a bit of an advanced trick, but it can be pretty useful.
                            </div><br>
                            <div class="paragraph">
                                GitHub actually advertises the Pull Request branches for a repository as sort of pseudo-branches on the server.
                                By default you don’t get them when you clone, but they are there in an obscured way and you can access them pretty easily.
                            </div><br>
                            <div class="paragraph">
                                To demonstrate this, we’re going to use a low-level command (often referred to as a “plumbing” command) called <code>ls-remote</code>.
                                This command is generally not used in day-to-day Git operations but it’s useful to show us what references are present on the server.
                            </div><br>
                            <div class="paragraph">
                                If we run this command against the “blink” repository we were using earlier, we will get a list of all the branches and tags and other references in the repository.
                            </div>
                            <div class="listingblock">
                                <div class="content">
                                    <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git ls-remote https://github.com/schacon/blink
10d539600d86723087810ec636870a504f4fee4d	HEAD
10d539600d86723087810ec636870a504f4fee4d	refs/heads/master
6a83107c62950be9453aac297bb0193fd743cd6e	refs/pull/1/head
afe83c2d1a70674c9505cc1d8b7d380d5e076ed3	refs/pull/1/merge
3c8d735ee16296c242be7a9742ebfbc2665adec1	refs/pull/2/head
15c9f4f80973a2758462ab2066b6ad9fe8dcf03d	refs/pull/2/merge
a5a7751a33b7e86c5e9bb07b26001bb17d775d1a	refs/pull/4/head
31a45fc257e8433c8d8804e3e848cf61c9d3166c	refs/pull/4/merge</blockquote></pre>
                                </div>
                            </div>
                            <div class="paragraph">
                                Of course, if you’re in your repository and you run <code>git ls-remote origin</code> or whatever remote you want to check, it will show you something similar to this.
                            </div><br>
                            <div class="paragraph">
                                If the repository is on GitHub and you have any Pull Requests that have been opened, you’ll get these references that are prefixed with <code>refs/pull/</code>.
                                These are basically branches, but since they’re not under <code>refs/heads/</code> you don’t get them normally when you clone or fetch from the server&thinsp;—&thinsp;the process of fetching ignores them normally.
                            </div><br>
                            <div class="paragraph">
                                There are two references per Pull Request - the one that ends in <code>/head</code> points to exactly the same commit as the last commit in the Pull Request branch.
                                So if someone opens a Pull Request in our repository and their branch is named <code>bug-fix</code> and it points to commit <code>a5a775</code>, then in <strong>our</strong> repository we will not have a <code>bug-fix</code> branch (since that’s in their fork), but we <em>will</em> have <code>pull/&lt;pr#&gt;/head</code> that points to <code>a5a775</code>.
                                This means that we can pretty easily pull down every Pull Request branch in one go without having to add a bunch of remotes.
                            </div><br>
                            <div class="paragraph">
                                Now, you could do something like fetching the reference directly.
                            </div>
                            <div class="listingblock">
                                <div class="content">
                                    <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git fetch origin refs/pull/958/head
From https://github.com/libgit2/libgit2
 * branch            refs/pull/958/head -&gt; FETCH_HEAD</blockquote></pre>
                                </div>
                            </div>
                            <div class="paragraph">
                                This tells Git, “Connect to the <code>origin</code> remote, and download the ref named <code>refs/pull/958/head</code>.”
                                Git happily obeys, and downloads everything you need to construct that ref, and puts a pointer to the commit you want under <code>.git/FETCH_HEAD</code>.
                                You can follow that up with <code>git merge FETCH_HEAD</code> into a branch you want to test it in, but that merge commit message looks a bit weird.
                                Also, if you’re reviewing a <strong>lot</strong> of pull requests, this gets tedious.
                            </div><br>
                            <div class="paragraph">
                                There’s also a way to fetch <em>all</em> of the pull requests, and keep them up to date whenever you connect to the remote.
                                Open up <code>.git/config</code> in your favorite editor, and look for the <code>origin</code> remote.
                                It should look a bit like this:
                            </div>
                            <div class="listingblock">
                                <div class="content">
                                    <pre class="highlight"><blockquote class="language-ini" data-lang="ini">[remote "origin"]
    url = https://github.com/libgit2/libgit2
    fetch = +refs/heads/*:refs/remotes/origin/*</blockquote></pre>
                                </div>
                            </div>
                            <div class="paragraph">
                                That line that begins with <code>fetch =</code> is a “refspec.”
                                It’s a way of mapping names on the remote with names in your local <code>.git</code> directory.
                                This particular one tells Git, "the things on the remote that are under <code>refs/heads</code> should go in my local repository under <code>refs/remotes/origin</code>."
                                You can modify this section to add another refspec:
                            </div>
                            <div class="listingblock">
                                <div class="content">
                                    <pre class="highlight"><blockquote class="language-ini" data-lang="ini">[remote "origin"]
    url = https://github.com/libgit2/libgit2.git
    fetch = +refs/heads/*:refs/remotes/origin/*
    fetch = +refs/pull/*/head:refs/remotes/origin/pr/*</blockquote></pre>
                                </div>
                            </div>
                            <div class="paragraph">
                                That last line tells Git, “All the refs that look like <code>refs/pull/123/head</code> should be stored locally like <code>refs/remotes/origin/pr/123</code>.”
                                Now, if you save that file, and do a <code>git fetch</code>:
                            </div>
                            <div class="listingblock">
                                <div class="content">
                                    <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git fetch
# …
 * [new ref]         refs/pull/1/head -&gt; origin/pr/1
 * [new ref]         refs/pull/2/head -&gt; origin/pr/2
 * [new ref]         refs/pull/4/head -&gt; origin/pr/4
# …</blockquote></pre>
                                </div>
                            </div>
                            <div class="paragraph">
                                Now all of the remote pull requests are represented locally with refs that act much like tracking branches; they’re read-only, and they update when you do a fetch.
                                This makes it super easy to try the code from a pull request locally:
                            </div>
                            <div class="listingblock">
                                <div class="content">
                                    <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout pr/2
Checking out files: 100% (3769/3769), done.
Branch pr/2 set up to track remote branch pr/2 from origin.
Switched to a new branch 'pr/2'</blockquote></pre>
                                </div>
                            </div>
                            <div class="paragraph">
                                The eagle-eyed among you would note the <code>head</code> on the end of the remote portion of the refspec.
                                There’s also a <code>refs/pull/#/merge</code> ref on the GitHub side, which represents the commit that would result if you push the “merge” button on the site.
                                This can allow you to test the merge before even hitting the button.
                            </div>
                        </div>
                        <div class="sect4">
                            <h4 id="_pull_requests_on_pull_requests">Pull Requests on Pull Requests</h4>
                            <div class="paragraph">
                                Not only can you open Pull Requests that target the main or <code>master</code> branch, you can actually open a Pull Request targeting any branch in the network.
                                In fact, you can even target another Pull Request.
                            </div><br>
                            <div class="paragraph">
                                If you see a Pull Request that is moving in the right direction and you have an idea for a change that depends on it or you’re not sure is a good idea, or you just don’t have push access to the target branch, you can open a Pull Request directly to it.
                            </div><br>
                            <div class="paragraph">
                                When you go to open a Pull Request, there is a box at the top of the page that specifies which branch you’re requesting to pull to and which you’re requesting to pull from.
                                If you hit the “Edit” button at the right of that box you can change not only the branches but also which fork.
                            </div>
                            <div id="_pr_targets" class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/maint-04-target.png" alt="PR targets">
                                </div>
                                <div class="title">Figure 117. Manually change the Pull Request target fork and branch</div>
                            </div><br><br>
                            <div class="paragraph">
                                Here you can fairly easily specify to merge your new branch into another Pull Request or another fork of the project.
                            </div>
                        </div>
                    </div>
                    <div class="sect3">
                        <h3 id="_mentions_and_notifications">Mentions and Notifications</h3>
                        <div class="paragraph">
                            GitHub also has a pretty nice notifications system built in that can come in handy when you have questions or need feedback from specific individuals or teams.
                        </div><br>
                        <div class="paragraph">
                            In any comment you can start typing a <code>@</code> character and it will begin to autocomplete with the names and usernames of people who are collaborators or contributors in the project.
                        </div>
                        <div class="imageblock">
                            <div class="content">
                                <br><br><img src="https://git-scm.com/book/en/v2/images/maint-05-mentions.png" alt="Mentions">
                            </div>
                            <div class="title">Figure 118. Start typing @ to mention someone</div>
                        </div><br><br>
                        <div class="paragraph">
                            You can also mention a user who is not in that dropdown, but often the autocompleter can make it faster.
                        </div><br>
                        <div class="paragraph">
                            Once you post a comment with a user mention, that user will be notified.
                            This means that this can be a really effective way of pulling people into conversations rather than making them poll.
                            Very often in Pull Requests on GitHub people will pull in other people on their teams or in their company to review an Issue or Pull Request.
                        </div><br>
                        <div class="paragraph">
                            If someone gets mentioned on a Pull Request or Issue, they will be “subscribed” to it and will continue getting notifications any time some activity occurs on it.
                            You will also be subscribed to something if you opened it, if you’re watching the repository or if you comment on something.
                            If you no longer wish to receive notifications, there is an “Unsubscribe” button on the page you can click to stop receiving updates on it.
                        </div>
                        <div class="imageblock">
                            <div class="content">
                                <br><br><img src="https://git-scm.com/book/en/v2/images/maint-06-unsubscribe.png" alt="Unsubscribe">
                            </div>
                            <div class="title">Figure 119. Unsubscribe from an Issue or Pull Request</div>
                        </div><br><br>
                        <div class="sect4">
                            <h4 id="_the_notifications_page">The Notifications Page</h4>
                            <div class="paragraph">
                                When we mention “notifications” here with respect to GitHub, we mean a specific way that GitHub tries to get in touch with you when events happen and there are a few different ways you can configure them.
                                If you go to the “Notification center” tab from the settings page, you can see some of the options you have.
                            </div>
                            <div class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/maint-07-notifications.png" alt="Notification center">
                                </div>
                                <div class="title">Figure 120. Notification center options</div>
                            </div><br><br>
                            <div class="paragraph">
                                The two choices are to get notifications over “Email” and over “Web” and you can choose either, neither or both for when you actively participate in things and for activity on repositories you are watching.
                            </div><br>
                            <div class="sect5">
                                <h6 id="_web_notifications">Web Notifications</h6>
                                <div class="paragraph">
                                    Web notifications only exist on GitHub and you can only check them on GitHub.
                                    If you have this option selected in your preferences and a notification is triggered for you, you will see a small blue dot over your notifications icon at the top of your screen as seen in Notification center.
                                </div>
                                <div id="_not_center" class="imageblock">
                                    <div class="content">
                                        <br><br><img src="https://git-scm.com/book/en/v2/images/maint-08-notifications-page.png" alt="Notification center">
                                    </div>
                                    <div class="title">Figure 121. Notification center</div>
                                </div><br><br>
                                <div class="paragraph">
                                    If you click on that, you will see a list of all the items you have been notified about, grouped by project.
                                    You can filter to the notifications of a specific project by clicking on its name in the left hand sidebar.
                                    You can also acknowledge the notification by clicking the checkmark icon next to any notification, or acknowledge <em>all</em> of the notifications in a project by clicking the checkmark at the top of the group.
                                    There is also a mute button next to each checkmark that you can click to not receive any further notifications on that item.
                                </div><br>
                                <div class="paragraph">
                                    All of these tools are very useful for handling large numbers of notifications.
                                    Many GitHub power users will simply turn off email notifications entirely and manage all of their notifications through this screen.
                                </div><br>
                            </div>
                            <div class="sect5">
                                <h6 id="_email_notifications_2">Email Notifications</h6>
                                <div class="paragraph">
                                    Email notifications are the other way you can handle notifications through GitHub.
                                    If you have this turned on you will get emails for each notification.
                                    The emails will also be threaded properly, which is nice if you’re using a threading email client.
                                </div><br>
                                <div class="paragraph">
                                    There is also a fair amount of metadata embedded in the headers of the emails that GitHub sends you, which can be really helpful for setting up custom filters and rules.
                                </div><br>
                                <div class="listingblock">
                                    <div class="content">
                                        <pre class="highlight"><blockquote class="language-mbox" data-lang="mbox">To: tonychacon/fade &lt;fade@noreply.github.com&gt;
Message-ID: &lt;tonychacon/fade/pull/1@github.com&gt;
Subject: [fade] Wait longer to see the dimming effect better (#1)
X-GitHub-Recipient: tonychacon
List-ID: tonychacon/fade &lt;fade.tonychacon.github.com&gt;
List-Archive: https://github.com/tonychacon/fade
List-Post: &lt;mailto:reply+i-4XXX@reply.github.com&gt;
List-Unsubscribe: &lt;mailto:unsub+i-XXX@reply.github.com&gt;,...
X-GitHub-Recipient-Address: tchacon@example.com</blockquote></pre>
                                    </div>
                                </div>
                                <div class="paragraph">
                                    There are a couple of interesting things here.
                                    If you want to highlight or re-route emails to this particular project or even Pull Request, the information in <code>Message-ID</code> gives you all the data in <code>&lt;user&gt;/&lt;project&gt;/&lt;type&gt;/&lt;id&gt;</code> format.
                                    If this were an issue, for example, the <code>&lt;type&gt;</code> field would have been “issues” rather than “pull”.
                                </div><br>
                                <div class="paragraph">
                                    The <code>List-Post</code> and <code>List-Unsubscribe</code> fields mean that if you have a mail client that understands those, you can easily post to the list or “Unsubscribe” from the thread.
                                    That would be essentially the same as clicking the “mute” button on the web version of the notification or “Unsubscribe” on the Issue or Pull Request page itself.
                                </div><br>
                                <div class="paragraph">
                                    It’s also worth noting that if you have both email and web notifications enabled and you read the email version of the notification, the web version will be marked as read as well if you have images allowed in your mail client.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sect3">
                        <h3 id="_special_files">Special Files</h3>
                        <div class="paragraph">
                            There are a couple of special files that GitHub will notice if they are present in your repository.
                        </div>
                    </div>
                    <div class="sect3">
                        <h3 id="_readme">README</h3>
                        <div class="paragraph">
                            The first is the <code>README</code> file, which can be of nearly any format that GitHub recognizes as prose.
                            For example, it could be <code>README</code>, <code>README.md</code>, <code>README.asciidoc</code>, etc.
                            If GitHub sees a README file in your source, it will render it on the landing page of the project.
                        </div><br>
                        <div class="paragraph">
                            Many teams use this file to hold all the relevant project information for someone who might be new to the repository or project.
                            This generally includes things like:
                        </div>
                        <div class="ulist">
                            <ul>
                                <li>
                                    What the project is for
                                </li>
                                <li>
                                    How to configure and install it
                                </li>
                                <li>
                                    An example of how to use it or get it running
                                </li>
                                <li>
                                    The license that the project is offered under
                                </li>
                                <li>
                                    How to contribute to it
                                </li>
                            </ul>
                        </div>
                        <div class="paragraph">
                            Since GitHub will render this file, you can embed images or links in it for added ease of understanding.
                        </div>
                    </div>
                    <div class="sect3">
                        <h3 id="_contributing">CONTRIBUTING</h3>
                        <div class="paragraph">
                            The other special file that GitHub recognizes is the <code>CONTRIBUTING</code> file.
                            If you have a file named <code>CONTRIBUTING</code> with any file extension, GitHub will show Opening a Pull Request when a CONTRIBUTING file exists when anyone starts opening a Pull Request.
                        </div>
                        <div id="_contrib_file" class="imageblock">
                            <div class="content">
                                <br><br><img src="https://git-scm.com/book/en/v2/images/maint-09-contrib.png" alt="Contributing notice">
                            </div>
                            <div class="title">Figure 122. Opening a Pull Request when a CONTRIBUTING file exists</div>
                        </div><br><br>
                        <div class="paragraph">
                            The idea here is that you can specify specific things you want or don’t want in a Pull Request sent to your project.
                            This way people may actually read the guidelines before opening the Pull Request.
                        </div>
                    </div>
                    <div class="sect3">
                        <h3 id="_project_administration">Project Administration</h3>
                        <div class="paragraph">
                            Generally there are not a lot of administrative things you can do with a single project, but there are a couple of items that might be of interest.
                        </div>
                        <div class="sect4">
                            <h4 id="_changing_the_default_branch">Changing the Default Branch</h4>
                            <div class="paragraph">
                                If you are using a branch other than “master” as your default branch that you want people to open Pull Requests on or see by default, you can change that in your repository’s settings page under the “Options” tab.
                            </div>
                            <div id="_default_branch" class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/maint-10-default-branch.png" alt="Default branch">
                                </div>
                                <div class="title">Figure 123. Change the default branch for a project</div>
                            </div><br><br>
                            <div class="paragraph">
                                Simply change the default branch in the dropdown and that will be the default for all major operations from then on, including which branch is checked out by default when someone clones the repository.
                            </div>
                        </div>
                        <div class="sect4">
                            <h4 id="_transferring_a_project">Transferring a Project</h4>
                            <div class="paragraph">
                                If you would like to transfer a project to another user or an organization in GitHub, there is a “Transfer ownership” option at the bottom of the same “Options” tab of your repository settings page that allows you to do this.
                            </div>
                            <div id="_transfer_project" class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/maint-11-transfer.png" alt="Transfer">
                                </div>
                                <div class="title">Figure 124. Transfer a project to another GitHub user or Organization</div>
                            </div><br><br>
                            <div class="paragraph">
                                This is helpful if you are abandoning a project and someone wants to take it over, or if your project is getting bigger and want to move it into an organization.
                            </div><br>
                            <div class="paragraph">
                                Not only does this move the repository along with all its watchers and stars to another place, it also sets up a redirect from your URL to the new place.
                                It will also redirect clones and fetches from Git, not just web requests.
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