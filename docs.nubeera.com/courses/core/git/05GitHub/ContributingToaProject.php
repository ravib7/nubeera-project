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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Contributing to a Project</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">GitHub</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <div id="main" class="book edition2">
                    <div class="paragraph">
                        Now that our account is set up, let’s walk through some details that could be useful in helping you contribute to an existing project.
                    </div>
                    <div class="sect3">
                        <h3 id="_forking_projects">Forking Projects</h3>
                        <div class="paragraph">
                            If you want to contribute to an existing project to which you don’t have push access, you can “fork” the project.
                            When you “fork” a project, GitHub will make a copy of the project that is entirely yours; it lives in your namespace, and you can push to it.
                        </div>
                        <div class="paragraph">
                            This way, projects don’t have to worry about adding users as collaborators to give them push access.
                            People can fork a project, push to it, and contribute their changes back to the original repository by creating what’s called a Pull Request, which we’ll cover next.
                            This opens up a discussion thread with code review, and the owner and the contributor can then communicate about the change until the owner is happy with it, at which point the owner can merge it in.
                        </div><br>
                        <div class="paragraph">
                            To fork a project, visit the project page and click the “Fork” button at the top-right of the page.
                        </div>
                        <div class="imageblock">
                            <div class="content">
                                <br><br><img src="https://git-scm.com/book/en/v2/images/forkbutton.png" alt="The “Fork” button">
                            </div>
                            <div class="title">Figure 88. The “Fork” button</div>
                        </div><br><br>
                        <div class="paragraph">
                            After a few seconds, you’ll be taken to your new project page, with your own writeable copy of the code.
                        </div>
                    </div>
                    <div class="sect3">
                        <h3 id="ch06-github_flow">The GitHub Flow</h3>
                        <div class="paragraph">

                            GitHub is designed around a particular collaboration workflow, centered on Pull Requests.
                            This flow works whether you’re collaborating with a tightly-knit team in a single shared repository, or a globally-distributed company or network of strangers contributing to a project through dozens of forks.
                            It is centered on the Topic Branches workflow covered in Git Branching.
                        </div><br>
                        <div class="paragraph">
                            Here’s how it generally works:
                        </div>
                        <div class="olist arabic">
                            <ol class="arabic">
                                <li>
                                    Fork the project.
                                </li>
                                <li>
                                    Create a topic branch from <code>master</code>.
                                </li>
                                <li>
                                    Make some commits to improve the project.
                                </li>
                                <li>
                                    Push this branch to your GitHub project.
                                </li>
                                <li>
                                    Open a Pull Request on GitHub.
                                </li>
                                <li>
                                    Discuss, and optionally continue committing.
                                </li>
                                <li>
                                    The project owner merges or closes the Pull Request.
                                </li>
                                <li>
                                    Sync the updated master back to your fork.
                                </li>
                            </ol>
                        </div>
                        <div class="paragraph">
                            This is basically the Integration Manager workflow covered in Integration-Manager Workflow, but instead of using email to communicate and review changes, teams use GitHub’s web based tools.
                        </div><br>
                        <div class="paragraph">
                            Let’s walk through an example of proposing a change to an open source project hosted on GitHub using this flow.
                        </div>
                        <div class="sect4">
                            <h4 id="_creating_a_pull_request">Creating a Pull Request</h4>
                            <div class="paragraph">
                                Tony is looking for code to run on his Arduino programmable microcontroller and has found a great program file on GitHub at <a href="https://github.com/schacon/blink" class="bare">https://github.com/schacon/blink</a>.
                            </div>
                            <div class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/blink-01-start.png" alt="The project we want to contribute to">
                                </div>
                                <div class="title">Figure 89. The project we want to contribute to</div>
                            </div><br><br>
                            <div class="paragraph">
                                The only problem is that the blinking rate is too fast.
                                We think it’s much nicer to wait 3 seconds instead of 1 in between each state change.
                                So let’s improve the program and submit it back to the project as a proposed change.
                            </div><br>
                            <div class="paragraph">
                                First, we click the 'Fork' button as mentioned earlier to get our own copy of the project.
                                Our user name here is “tonychacon” so our copy of this project is at <code><a href="https://github.com/tonychacon/blink" class="bare">https://github.com/tonychacon/blink</a></code> and that’s where we can edit it.
                                We will clone it locally, create a topic branch, make the code change and finally push that change back up to GitHub.
                            </div>
                            <div class="listingblock">
                                <div class="content">
                                    <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git clone https://github.com/tonychacon/blink <b class="conum">(1)</b>
Cloning into 'blink'...

$ cd blink
$ git checkout -b slow-blink <b class="conum">(2)</b>
Switched to a new branch 'slow-blink'

$ sed -i '' 's/1000/3000/' blink.ino (macOS) <b class="conum">(3)</b>
# If you're on a Linux system, do this instead:
# $ sed -i 's/1000/3000/' blink.ino <b class="conum">(3)</b>

$ git diff --word-diff <b class="conum">(4)</b>
diff --git a/blink.ino b/blink.ino
index 15b9911..a6cc5a5 100644
--- a/blink.ino
+++ b/blink.ino
@@ -18,7 +18,7 @@ void setup() {
// the loop routine runs over and over again forever:
void loop() {
  digitalWrite(led, HIGH);   // turn the LED on (HIGH is the voltage level)
  [-delay(1000);-]{+delay(3000);+}               // wait for a second
  digitalWrite(led, LOW);    // turn the LED off by making the voltage LOW
  [-delay(1000);-]{+delay(3000);+}               // wait for a second
}

$ git commit -a -m 'Change delay to 3 seconds' <b class="conum">(5)</b>
[slow-blink 5ca509d] Change delay to 3 seconds
 1 file changed, 2 insertions(+), 2 deletions(-)

$ git push origin slow-blink <b class="conum">(6)</b>
Username for 'https://github.com': tonychacon
Password for 'https://tonychacon@github.com':
Counting objects: 5, done.
Delta compression using up to 8 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 340 bytes | 0 bytes/s, done.
Total 3 (delta 1), reused 0 (delta 0)
To https://github.com/tonychacon/blink
 * [new branch]      slow-blink -&gt; slow-blink</blockquote></pre>
                                </div>
                            </div>
                            <div class="colist arabic">
                                <ol>
                                    <li>
                                        Clone our fork of the project locally.
                                    </li>
                                    <li>
                                        Create a descriptive topic branch.
                                    </li>
                                    <li>
                                        Make our change to the code.
                                    </li>
                                    <li>
                                        Check that the change is good.
                                    </li>
                                    <li>
                                        Commit our change to the topic branch.
                                    </li>
                                    <li>
                                        Push our new topic branch back up to our GitHub fork.
                                    </li>
                                </ol>
                            </div>
                            <div class="paragraph">
                                Now if we go back to our fork on GitHub, we can see that GitHub noticed that we pushed a new topic branch up and presents us with a big green button to check out our changes and open a Pull Request to the original project.
                            </div><br>
                            <div class="paragraph">
                                You can alternatively go to the “Branches” page at <code>https://github.com/&lt;user&gt;/&lt;project&gt;/branches</code> to locate your branch and open a new Pull Request from there.
                            </div>
                            <div class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/blink-02-pr.png" alt="Pull Request button">
                                </div>
                                <div class="title">Figure 90. Pull Request button</div>
                            </div><br><br>
                            <div class="paragraph">

                                If we click that green button, we’ll see a screen that asks us to give our Pull Request a title and description.
                                It is almost always worthwhile to put some effort into this, since a good description helps the owner of the original project determine what you were trying to do, whether your proposed changes are correct, and whether accepting the changes would improve the original project.
                            </div><br>
                            <div class="paragraph">
                                We also see a list of the commits in our topic branch that are “ahead” of the <code>master</code> branch (in this case, just the one) and a unified diff of all the changes that will be made should this branch get merged by the project owner.
                            </div>
                            <div class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/blink-03-pull-request-open.png" alt="Pull Request creation">
                                </div>
                                <div class="title">Figure 91. Pull Request creation page</div>
                            </div><br><br>
                            <div class="paragraph">
                                When you hit the 'Create pull request' button on this screen, the owner of the project you forked will get a notification that someone is suggesting a change and will link to a page that has all of this information on it.
                            </div>

                            <div class="sect4">
                                <h4 id="_iterating_on_a_pull_request">Iterating on a Pull Request</h4>
                                <div class="paragraph">
                                    At this point, the project owner can look at the suggested change and merge it, reject it or comment on it.
                                    Let’s say that he likes the idea, but would prefer a slightly longer time for the light to be off than on.
                                </div><br>
                                <div class="paragraph">
                                    Where this conversation may take place over email in the workflows presented in Distributed Git, on GitHub this happens online.
                                    The project owner can review the unified diff and leave a comment by clicking on any of the lines.
                                </div>
                                <div class="imageblock">
                                    <div class="content">
                                        <br><br><img src="https://git-scm.com/book/en/v2/images/blink-04-pr-comment.png" alt="PR line comment">
                                    </div>
                                    <div class="title">Figure 92. Comment on a specific line of code in a Pull Request</div>
                                </div><br><br>
                                <div class="paragraph">
                                    Once the maintainer makes this comment, the person who opened the Pull Request (and indeed, anyone else watching the repository) will get a notification.
                                    We’ll go over customizing this later, but if he had email notifications turned on, Tony would get an email like this:
                                </div>
                                <div id="_email_notification" class="imageblock">
                                    <div class="content">
                                        <br><br><img src="https://git-scm.com/book/en/v2/images/blink-04-email.png" alt="Email notification">
                                    </div>
                                    <div class="title">Figure 93. Comments sent as email notifications</div>
                                </div><br><br>
                                <div class="paragraph">
                                    Anyone can also leave general comments on the Pull Request.
                                    In Pull Request discussion page we can see an example of the project owner both commenting on a line of code and then leaving a general comment in the discussion section.
                                    You can see that the code comments are brought into the conversation as well.
                                </div>
                                <div id="_pr_discussion" class="imageblock">
                                    <div class="content">
                                        <br><br><img src="https://git-scm.com/book/en/v2/images/blink-05-general-comment.png" alt="PR discussion page">
                                    </div>
                                    <div class="title">Figure 94. Pull Request discussion page</div>
                                </div><br><br>
                                <div class="paragraph">
                                    Now the contributor can see what they need to do in order to get their change accepted.
                                    Luckily this is very straightforward.
                                    Where over email you may have to re-roll your series and resubmit it to the mailing list, with GitHub you simply commit to the topic branch again and push, which will automatically update the Pull Request.
                                    In Pull Request final you can also see that the old code comment has been collapsed in the updated Pull Request, since it was made on a line that has since been changed.
                                </div><br>
                                <div class="paragraph">
                                    Adding commits to an existing Pull Request doesn’t trigger a notification, so once Tony has pushed his corrections he decides to leave a comment to inform the project owner that he made the requested change.
                                </div>
                                <div id="_pr_final" class="imageblock">
                                    <div class="content">
                                        <br><br><img src="https://git-scm.com/book/en/v2/images/blink-06-final.png" alt="PR final">
                                    </div>
                                    <div class="title">Figure 95. Pull Request final</div>
                                </div><br><br>
                                <div class="paragraph">
                                    An interesting thing to notice is that if you click on the “Files Changed” tab on this Pull Request, you’ll get the “unified” diff&thinsp;—&thinsp;that is, the total aggregate difference that would be introduced to your main branch if this topic branch was merged in.
                                    In <code>git diff</code> terms, it basically automatically shows you <code>git diff master…&ZeroWidthSpace;&lt;branch&gt;</code> for the branch this Pull Request is based on.
                                </div><br>
                                <div class="paragraph">
                                    The other thing you’ll notice is that GitHub checks to see if the Pull Request merges cleanly and provides a button to do the merge for you on the server.
                                    This button only shows up if you have write access to the repository and a trivial merge is possible.
                                    If you click it GitHub will perform a “non-fast-forward” merge, meaning that even if the merge <strong>could</strong> be a fast-forward, it will still create a merge commit.
                                </div><br>
                                <div class="paragraph">
                                    If you would prefer, you can simply pull the branch down and merge it locally.
                                    If you merge this branch into the <code>master</code> branch and push it to GitHub, the Pull Request will automatically be closed.
                                </div><br>
                                <div class="paragraph">
                                    This is the basic workflow that most GitHub projects use.
                                    Topic branches are created, Pull Requests are opened on them, a discussion ensues, possibly more work is done on the branch and eventually the request is either closed or merged.
                                </div>

                                <div class="sect3">
                                    <h3 id="_advanced_pull_requests">Advanced Pull Requests</h3>
                                    <div class="paragraph">
                                        Now that we’ve covered the basics of contributing to a project on GitHub, let’s cover a few interesting tips and tricks about Pull Requests so you can be more effective in using them.
                                    </div>
                                    <div class="sect4">
                                        <h4 id="_pull_requests_as_patches">Pull Requests as Patches</h4>
                                        <div class="paragraph">
                                            It’s important to understand that many projects don’t really think of Pull Requests as queues of perfect patches that should apply cleanly in order, as most mailing list-based projects think of patch series contributions.
                                            Most GitHub projects think about Pull Request branches as iterative conversations around a proposed change, culminating in a unified diff that is applied by merging.
                                        </div><br>
                                        <div class="paragraph">
                                            This is an important distinction, because generally the change is suggested before the code is thought to be perfect, which is far more rare with mailing list based patch series contributions.
                                            This enables an earlier conversation with the maintainers so that arriving at the proper solution is more of a community effort.
                                            When code is proposed with a Pull Request and the maintainers or community suggest a change, the patch series is generally not re-rolled, but instead the difference is pushed as a new commit to the branch, moving the conversation forward with the context of the previous work intact.
                                        </div><br>
                                        <div class="paragraph">
                                            For instance, if you go back and look again at Pull Request final, you’ll notice that the contributor did not rebase his commit and send another Pull Request.
                                            Instead they added new commits and pushed them to the existing branch.
                                            This way if you go back and look at this Pull Request in the future, you can easily find all of the context of why decisions were made.
                                            Pushing the “Merge” button on the site purposefully creates a merge commit that references the Pull Request so that it’s easy to go back and research the original conversation if necessary.
                                        </div>
                                    </div>
                                    <div class="sect4">
                                        <h4 id="_keeping_up_with_upstream">Keeping up with Upstream</h4>
                                        <div class="paragraph">
                                            If your Pull Request becomes out of date or otherwise doesn’t merge cleanly, you will want to fix it so the maintainer can easily merge it.
                                            GitHub will test this for you and let you know at the bottom of every Pull Request if the merge is trivial or not.
                                        </div>
                                        <div id="_pr_fail" class="imageblock">
                                            <div class="content">
                                                <br><br><img src="https://git-scm.com/book/en/v2/images/pr-01-fail.png" alt="PR merge failure">
                                            </div>
                                            <div class="title">Figure 96. Pull Request does not merge cleanly</div>
                                        </div><br><br>
                                        <div class="paragraph">
                                            If you see something like Pull Request does not merge cleanly, you’ll want to fix your branch so that it turns green and the maintainer doesn’t have to do extra work.
                                        </div><br>

                                        <div class="paragraph">
                                            You have two main options in order to do this.
                                            You can either rebase your branch on top of whatever the target branch is (normally the <code>master</code> branch of the repository you forked), or you can merge the target branch into your branch.
                                        </div><br>
                                        <div class="paragraph">
                                            Most developers on GitHub will choose to do the latter, for the same reasons we just went over in the previous section.
                                            What matters is the history and the final merge, so rebasing isn’t getting you much other than a slightly cleaner history and in return is <strong>far</strong> more difficult and error prone.
                                        </div><br>
                                        <div class="paragraph">
                                            If you want to merge in the target branch to make your Pull Request mergeable, you would add the original repository as a new remote, fetch from it, merge the main branch of that repository into your topic branch, fix any issues and finally push it back up to the same branch you opened the Pull Request on.
                                        </div><br>
                                        <div class="paragraph">
                                            For example, let’s say that in the “tonychacon” example we were using before, the original author made a change that would create a conflict in the Pull Request.
                                            Let’s go through those steps.
                                        </div>
                                        <div class="listingblock">
                                            <div class="content">
                                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote add upstream https://github.com/schacon/blink <b class="conum">(1)</b>

$ git fetch upstream <b class="conum">(2)</b>
remote: Counting objects: 3, done.
remote: Compressing objects: 100% (3/3), done.
Unpacking objects: 100% (3/3), done.
remote: Total 3 (delta 0), reused 0 (delta 0)
From https://github.com/schacon/blink
 * [new branch]      master     -&gt; upstream/master

$ git merge upstream/master <b class="conum">(3)</b>
Auto-merging blink.ino
CONFLICT (content): Merge conflict in blink.ino
Automatic merge failed; fix conflicts and then commit the result.

$ vim blink.ino <b class="conum">(4)</b>
$ git add blink.ino
$ git commit
[slow-blink 3c8d735] Merge remote-tracking branch 'upstream/master' \
    into slower-blink

$ git push origin slow-blink <b class="conum">(5)</b>
Counting objects: 6, done.
Delta compression using up to 8 threads.
Compressing objects: 100% (6/6), done.
Writing objects: 100% (6/6), 682 bytes | 0 bytes/s, done.
Total 6 (delta 2), reused 0 (delta 0)
To https://github.com/tonychacon/blink
   ef4725c..3c8d735  slower-blink -&gt; slow-blink</blockquote></pre>
                                            </div>
                                        </div>
                                        <div class="colist arabic">
                                            <ol>
                                                <li>
                                                    Add the original repository as a remote named <code>upstream</code>.
                                                </li>
                                                <li>
                                                    Fetch the newest work from that remote.
                                                </li>
                                                <li>
                                                    Merge the main branch of that repository into your topic branch.
                                                </li>
                                                <li>
                                                    Fix the conflict that occurred.
                                                </li>
                                                <li>
                                                    Push back up to the same topic branch.
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="paragraph">
                                            Once you do that, the Pull Request will be automatically updated and re-checked to see if it merges cleanly.
                                        </div>
                                        <div id="_pr_merge_fix" class="imageblock">
                                            <div class="content">
                                                <br><br><img src="https://git-scm.com/book/en/v2/images/pr-02-merge-fix.png" alt="PR fixed">
                                            </div>
                                            <div class="title">Figure 97. Pull Request now merges cleanly</div>
                                        </div><br><br>
                                        <div class="paragraph">
                                            One of the great things about Git is that you can do that continuously.
                                            If you have a very long-running project, you can easily merge from the target branch over and over again and only have to deal with conflicts that have arisen since the last time that you merged, making the process very manageable.
                                        </div><br>
                                        <div class="paragraph">
                                            If you absolutely wish to rebase the branch to clean it up, you can certainly do so, but it is highly encouraged to not force push over the branch that the Pull Request is already opened on.
                                            If other people have pulled it down and done more work on it, you run into all of the issues outlined in The Perils of Rebasing.
                                            Instead, push the rebased branch to a new branch on GitHub and open a brand new Pull Request referencing the old one, then close the original.
                                        </div>
                                    </div>
                                    <div class="sect4">
                                        <h4 id="_references">References</h4>
                                        <div class="paragraph">
                                            Your next question may be “How do I reference the old Pull Request?”.
                                            It turns out there are many, many ways to reference other things almost anywhere you can write in GitHub.
                                        </div><br>
                                        <div class="paragraph">
                                            Let’s start with how to cross-reference another Pull Request or an Issue.
                                            All Pull Requests and Issues are assigned numbers and they are unique within the project.
                                            For example, you can’t have Pull Request #3 <em>and</em> Issue #3.
                                            If you want to reference any Pull Request or Issue from any other one, you can simply put <code>#&lt;num&gt;</code> in any comment or description.
                                            You can also be more specific if the Issue or Pull request lives somewhere else; write <code>username#&lt;num&gt;</code> if you’re referring to an Issue or Pull Request in a fork of the repository you’re in, or <code>username/repo#&lt;num&gt;</code> to reference something in another repository.
                                        </div><br>
                                        <div class="paragraph">
                                            Let’s look at an example.
                                            Say we rebased the branch in the previous example, created a new pull request for it, and now we want to reference the old pull request from the new one.
                                            We also want to reference an issue in the fork of the repository and an issue in a completely different project.
                                            We can fill out the description just like Cross references in a Pull Request.
                                        </div>
                                        <div id="_pr_references" class="imageblock">
                                            <div class="content">
                                                <br><br><img src="https://git-scm.com/book/en/v2/images/mentions-01-syntax.png" alt="PR references">
                                            </div>
                                            <div class="title">Figure 98. Cross references in a Pull Request</div>
                                        </div><br><br>
                                        <div class="paragraph">
                                            When we submit this pull request, we’ll see all of that rendered like Cross references rendered in a Pull Request.
                                        </div>
                                        <div id="_pr_references_render" class="imageblock">
                                            <div class="content">
                                                <br><br><img src="https://git-scm.com/book/en/v2/images/mentions-02-render.png" alt="PR references rendered">
                                            </div>
                                            <div class="title">Figure 99. Cross references rendered in a Pull Request</div>
                                        </div><br><br>
                                        <div class="paragraph">
                                            Notice that the full GitHub URL we put in there was shortened to just the information needed.
                                        </div><br>
                                        <div class="paragraph">
                                            Now if Tony goes back and closes out the original Pull Request, we can see that by mentioning it in the new one, GitHub has automatically created a trackback event in the Pull Request timeline.
                                            This means that anyone who visits this Pull Request and sees that it is closed can easily link back to the one that superseded it.
                                            The link will look something likeLink back to the new Pull Request in the closed Pull Request timeline.
                                        </div>
                                        <div id="_pr_closed" class="imageblock">
                                            <div class="content">
                                                <br><br><img src="https://git-scm.com/book/en/v2/images/mentions-03-closed.png" alt="PR closed">
                                            </div>
                                            <div class="title">Figure 100. Link back to the new Pull Request in the closed Pull Request timeline</div>
                                        </div><br><br>
                                        <div class="paragraph">
                                            In addition to issue numbers, you can also reference a specific commit by SHA-1.
                                            You have to specify a full 40 character SHA-1, but if GitHub sees that in a comment, it will link directly to the commit.
                                            Again, you can reference commits in forks or other repositories in the same way you did with issues.
                                        </div>
                                    </div>
                                </div>
                                <div class="sect3">
                                    <h3 id="_github_flavored_markdown">GitHub Flavored Markdown</h3>
                                    <div class="paragraph">
                                        Linking to other Issues is just the beginning of interesting things you can do with almost any text box on GitHub.
                                        In Issue and Pull Request descriptions, comments, code comments and more, you can use what is called “GitHub Flavored Markdown”.
                                        Markdown is like writing in plain text but which is rendered richly.
                                    </div><br>
                                    <div id="_example_markdown" class="imageblock">
                                        <div class="content">
                                            <br><br><img src="https://git-scm.com/book/en/v2/images/markdown-01-example.png" alt="Example Markdown">
                                        </div>
                                        <div class="title">Figure 101. An example of GitHub Flavored Markdown as written and as rendered</div>
                                    </div><br><br>
                                    <div class="paragraph">
                                        The GitHub flavor of Markdown adds more things you can do beyond the basic Markdown syntax.
                                        These can all be really useful when creating useful Pull Request or Issue comments or descriptions.
                                    </div>
                                    <div class="sect4">
                                        <h4 id="_task_lists">Task Lists</h4>
                                        <div class="paragraph">
                                            The first really useful GitHub specific Markdown feature, especially for use in Pull Requests, is the Task List.
                                            A task list is a list of checkboxes of things you want to get done.
                                            Putting them into an Issue or Pull Request normally indicates things that you want to get done before you consider the item complete.
                                        </div><br>
                                        <div class="paragraph">
                                            You can create a task list like this:
                                        </div>
                                        <div class="listingblock">
                                            <div class="content">
                                                <pre class="highlight"><blockquote class="language-text" data-lang="text">- [X] Write the code
- [ ] Write all the tests
- [ ] Document the code</blockquote></pre>
                                            </div>
                                        </div>
                                        <div class="paragraph">
                                            If we include this in the description of our Pull Request or Issue, we’ll see it rendered like Task lists rendered in a Markdown comment.
                                        </div>
                                        <div id="_eg_task_lists" class="imageblock">
                                            <div class="content">
                                                <br><br><img src="https://git-scm.com/book/en/v2/images/markdown-02-tasks.png" alt="Example Task List">
                                            </div>
                                            <div class="title">Figure 102. Task lists rendered in a Markdown comment</div>
                                        </div><br><br>
                                        <div class="paragraph">
                                            This is often used in Pull Requests to indicate what all you would like to get done on the branch before the Pull Request will be ready to merge.
                                            The really cool part is that you can simply click the checkboxes to update the comment&thinsp;—&thinsp;you don’t have to edit the Markdown directly to check tasks off.
                                        </div><br>
                                        <div class="paragraph">
                                            What’s more, GitHub will look for task lists in your Issues and Pull Requests and show them as metadata on the pages that list them out.
                                            For example, if you have a Pull Request with tasks and you look at the overview page of all Pull Requests, you can see how far done it is.
                                            This helps people break down Pull Requests into subtasks and helps other people track the progress of the branch.
                                        </div>
                                        <div id="_task_list_progress" class="imageblock">
                                            <div class="content">
                                                <br><br><img src="https://git-scm.com/book/en/v2/images/markdown-03-task-summary.png" alt="Example Task List">
                                            </div>
                                            <div class="title">Figure 103. Task list summary in the Pull Request list</div>
                                        </div><br><br>
                                        <div class="paragraph">
                                            These are incredibly useful when you open a Pull Request early and use it to track your progress through the implementation of the feature.
                                        </div>
                                    </div>
                                    <div class="sect4">
                                        <h4 id="_code_snippets">Code Snippets</h4>
                                        <div class="paragraph">
                                            You can also add code snippets to comments.
                                            This is especially useful if you want to present something that you <em>could</em> try to do before actually implementing it as a commit on your branch.
                                            This is also often used to add example code of what is not working or what this Pull Request could implement.
                                        </div><br>
                                        <div class="paragraph">
                                            To add a snippet of code you have to “fence” it in backticks.
                                        </div>
                                        <div class="listingblock">
                                            <div class="content">
                                                <pre class="highlight"><blockquote class="language-text" data-lang="text">```java
for(int i=0 ; i &lt; 5 ; i++)
{
   System.out.println("i is : " + i);
}
```</blockquote></pre>
                                            </div>
                                        </div>
                                        <div class="paragraph">
                                            If you add a language name like we did there with 'java', GitHub will also try to syntax highlight the snippet.
                                            In the case of the above example, it would end up rendering like Rendered fenced code example.
                                        </div>
                                        <div id="_md_code" class="imageblock">
                                            <div class="content">
                                                <br><br><img src="https://git-scm.com/book/en/v2/images/markdown-04-fenced-code.png" alt="Rendered fenced code">
                                            </div>
                                            <div class="title">Figure 104. Rendered fenced code example</div>
                                        </div>
                                    </div><br><br>
                                    <div class="sect4">
                                        <h4 id="_quoting">Quoting</h4>
                                        <div class="paragraph">
                                            If you’re responding to a small part of a long comment, you can selectively quote out of the other comment by preceding the lines with the <code>&gt;</code> character.
                                            In fact, this is so common and so useful that there is a keyboard shortcut for it.
                                            If you highlight text in a comment that you want to directly reply to and hit the <code>r</code> key, it will quote that text in the comment box for you.
                                        </div><br>
                                        <div class="paragraph">
                                            The quotes look something like this:
                                        </div>
                                        <div class="listingblock">
                                            <div class="content">
                                                <pre class="highlight"><blockquote class="language-text" data-lang="text">&gt; Whether 'tis Nobler in the mind to suffer
&gt; The Slings and Arrows of outrageous Fortune,

How big are these slings and in particular, these arrows?</blockquote></pre>
                                            </div>
                                        </div>
                                        <div class="paragraph">
                                            Once rendered, the comment will look like Rendered quoting example.
                                        </div>
                                        <div id="_md_quote" class="imageblock">
                                            <div class="content">
                                                <br><br><img src="https://git-scm.com/book/en/v2/images/markdown-05-quote.png" alt="Rendered quoting">
                                            </div>
                                            <div class="title">Figure 105. Rendered quoting example</div>
                                        </div><br><br>
                                    </div>
                                    <div class="sect4">
                                        <h4 id="_emoji">Emoji</h4>
                                        <div class="paragraph">
                                            Finally, you can also use emoji in your comments.
                                            This is actually used quite extensively in comments you see on many GitHub Issues and Pull Requests.
                                            There is even an emoji helper in GitHub.
                                            If you are typing a comment and you start with a <code>:</code> character, an autocompleter will help you find what you’re looking for.
                                        </div>
                                        <div id="_md_emoji_auto" class="imageblock">
                                            <div class="content">
                                                <br><br><img src="https://git-scm.com/book/en/v2/images/markdown-06-emoji-complete.png" alt="Emoji autocompleter">
                                            </div>
                                            <div class="title">Figure 106. Emoji autocompleter in action</div>
                                        </div><br><br>
                                        <div class="paragraph">
                                            Emojis take the form of <code>:&lt;name&gt;:</code> anywhere in the comment.
                                            For instance, you could write something like this:
                                        </div>
                                        <div class="listingblock">
                                            <div class="content">
                                                <pre class="highlight"><blockquote class="language-text" data-lang="text">I :eyes: that :bug: and I :cold_sweat:.

:trophy: for :microscope: it.

:+1: and :sparkles: on this :ship:, it's :fire::poop:!

:clap::tada::panda_face:</blockquote></pre>
                                            </div>
                                        </div>
                                        <div class="paragraph">
                                            When rendered, it would look something like Heavy emoji commenting.
                                        </div>
                                        <div id="_md_emoji" class="imageblock">
                                            <div class="content">
                                                <br><br><img src="https://git-scm.com/book/en/v2/images/markdown-07-emoji.png" alt="Emoji">
                                            </div>
                                            <div class="title">Figure 107. Heavy emoji commenting</div>
                                        </div><br><br>
                                        <div class="paragraph">
                                            Not that this is incredibly useful, but it does add an element of fun and emotion to a medium that is otherwise hard to convey emotion in.
                                        </div>

                                        <div class="sect4">
                                            <h4 id="_images">Images</h4>
                                            <div class="paragraph">
                                                This isn’t technically GitHub Flavored Markdown, but it is incredibly useful.
                                                In addition to adding Markdown image links to comments, which can be difficult to find and embed URLs for, GitHub allows you to drag and drop images into text areas to embed them.
                                            </div>
                                            <div id="_md_drag" class="imageblock">
                                                <div class="content">
                                                    <br><br><img src="https://git-scm.com/book/en/v2/images/markdown-08-drag-drop.png" alt="Drag and drop images">
                                                </div>
                                                <div class="title">Figure 108. Drag and drop images to upload them and auto-embed them</div>
                                            </div><br><br>
                                            <div class="paragraph">
                                                If you look at Drag and drop images to upload them and auto-embed them, you can see a small “Parsed as Markdown” hint above the text area.
                                                Clicking on that will give you a full cheat sheet of everything you can do with Markdown on GitHub.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sect3">
                                        <h3 id="_fetch_and_push_on_different_repositories">Keep your GitHub public repository up-to-date</h3>
                                        <div class="paragraph">
                                            Once you’ve forked a GitHub repository, your repository (your "fork") exists independently from the original.
                                            In particular, when the original repository has new commits, GitHub informs you by a message like:
                                        </div>
                                        <div class="listingblock">
                                            <div class="content">
                                                <pre class="highlight"><blockquote class="language-text" data-lang="text">This branch is 5 commits behind progit:master.</blockquote></pre>
                                            </div>
                                        </div>
                                        <div class="paragraph">
                                            But your GitHub repository will never be automatically updated by GitHub; this is something that you must do yourself.
                                            Fortunately, this is very easy to do.
                                        </div><br>
                                        <div class="paragraph">
                                            One possibility to do this requires no configuration.
                                            For example, if you forked from <code><a href="https://github.com/progit/progit2.git" class="bare">https://github.com/progit/progit2.git</a></code>, you can keep your <code>master</code> branch up-to-date like this:
                                        </div>
                                        <div class="listingblock">
                                            <div class="content">
                                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout master <b class="conum">(1)</b>
$ git pull https://github.com/progit/progit2.git <b class="conum">(2)</b>
$ git push origin master <b class="conum">(3)</b></blockquote></pre>
                                            </div>
                                        </div>
                                        <div class="colist arabic">
                                            <ol>
                                                <li>
                                                    If you were on another branch, return to <code>master</code>.
                                                </li>
                                                <li>
                                                    Fetch changes from <code><a href="https://github.com/progit/progit2.git" class="bare">https://github.com/progit/progit2.git</a></code> and merge them into <code>master</code>.
                                                </li>
                                                <li>
                                                    Push your <code>master</code> branch to <code>origin</code>.
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="paragraph">
                                            This works, but it is a little tedious having to spell out the fetch URL every time.
                                            You can automate this work with a bit of configuration:
                                        </div>
                                        <div class="listingblock">
                                            <div class="content">
                                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote add progit https://github.com/progit/progit2.git <b class="conum">(1)</b>
$ git fetch progit <b class="conum">(2)</b>
$ git branch --set-upstream-to=progit/master master <b class="conum">(3)</b>
$ git config --local remote.pushDefault origin <b class="conum">(4)</b></blockquote></pre>
                                            </div>
                                        </div>
                                        <div class="colist arabic">
                                            <ol>
                                                <li>
                                                    Add the source repository and give it a name.
                                                    Here, I have chosen to call it <code>progit</code>.
                                                </li>
                                                <li>
                                                    Get a reference on progit’s branches, in particular <code>master</code>.
                                                </li>
                                                <li>
                                                    Set your <code>master</code> branch to fetch from the <code>progit</code> remote.
                                                </li>
                                                <li>
                                                    Define the default push repository to <code>origin</code>.
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="paragraph">
                                            Once this is done, the workflow becomes much simpler:
                                        </div>
                                        <div class="listingblock">
                                            <div class="content">
                                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout master <b class="conum">(1)</b>
$ git pull <b class="conum">(2)</b>
$ git push <b class="conum">(3)</b></blockquote></pre>
                                            </div>
                                        </div>
                                        <div class="colist arabic">
                                            <ol>
                                                <li>
                                                    If you were on another branch, return to <code>master</code>.
                                                </li>
                                                <li>
                                                    Fetch changes from <code>progit</code> and merge changes into <code>master</code>.
                                                </li>
                                                <li>
                                                    Push your <code>master</code> branch to <code>origin</code>.
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="paragraph">
                                            This approach can be useful, but it’s not without downsides.
                                            Git will happily do this work for you silently, but it won’t warn you if you make a commit to <code>master</code>, pull from <code>progit</code>, then push to <code>origin</code>&thinsp;—&thinsp;all of those operations are valid with this setup.
                                            So you’ll have to take care never to commit directly to <code>master</code>, since that branch effectively belongs to the upstream repository.
                                        </div>
                                    </div>
                                </div>
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