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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Contributing to a Project</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Distributed Git</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
<div class="paragraph">
The main difficulty with describing how to contribute to a project are the numerous variations on how to do that.
Because Git is very flexible, people can and do work together in many ways, and it’s problematic to describe how you should contribute&thinsp;—&thinsp;every project is a bit different.
Some of the variables involved are active contributor count, chosen workflow, your commit access, and possibly the external contribution method.
</div><br>
<div class="paragraph">
The first variable is active contributor count&thinsp;—&thinsp;how many users are actively contributing code to this project, and how often?
In many instances, you’ll have two or three developers with a few commits a day, or possibly less for somewhat dormant projects.
For larger companies or projects, the number of developers could be in the thousands, with hundreds or thousands of commits coming in each day.
This is important because with more and more developers, you run into more issues with making sure your code applies cleanly or can be easily merged.
Changes you submit may be rendered obsolete or severely broken by work that is merged in while you were working or while your changes were waiting to be approved or applied.
How can you keep your code consistently up to date and your commits valid?
</div><br>
<div class="paragraph">
The next variable is the workflow in use for the project.
Is it centralized, with each developer having equal write access to the main codeline?
Does the project have a maintainer or integration manager who checks all the patches?
Are all the patches peer-reviewed and approved?
Are you involved in that process?
Is a lieutenant system in place, and do you have to submit your work to them first?
</div><br>
<div class="paragraph">
The next variable is your commit access.
The workflow required in order to contribute to a project is much different if you have write access to the project than if you don’t.
If you don’t have write access, how does the project prefer to accept contributed work?
Does it even have a policy?
How much work are you contributing at a time?
How often do you contribute?
</div><br> 
<div class="paragraph">
All these questions can affect how you contribute effectively to a project and what workflows are preferred or available to you.
We’ll cover aspects of each of these in a series of use cases, moving from simple to more complex; you should be able to construct the specific workflows you need in practice from these examples.
</div>
<div class="sect3">
<h3 id="_commit_guidelines">Commit Guidelines</h3>
<div class="paragraph">
Before we start looking at the specific use cases, here’s a quick note about commit messages.
Having a good guideline for creating commits and sticking to it makes working with Git and collaborating with others a lot easier.
The Git project provides a document that lays out a number of good tips for creating commits from which to submit patches&thinsp;—&thinsp;you can read it in the Git source code in the <code>Documentation/SubmittingPatches</code> file.
</div><br>
<div class="paragraph">

First, your submissions should not contain any whitespace errors.
Git provides an easy way to check for this&thinsp;—&thinsp;before you commit, run <code>git diff --check</code>, which identifies possible whitespace errors and lists them for you.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/git-diff-check.png" alt="Output of `git diff --check`">
</div>
<div class="title">Figure 56. Output of <code>git diff --check</code>
</div>
</div><br><br>
<div class="paragraph">
If you run that command before committing, you can tell if you’re about to commit whitespace issues that may annoy other developers.
</div><br>
<div class="paragraph">
Next, try to make each commit a logically separate changeset.
If you can, try to make your changes digestible&thinsp;—&thinsp;don’t code for a whole weekend on five different issues and then submit them all as one massive commit on Monday.
Even if you don’t commit during the weekend, use the staging area on Monday to split your work into at least one commit per issue, with a useful message per commit.
If some of the changes modify the same file, try to use <code>git add --patch</code> to partially stage files.
The project snapshot at the tip of the branch is identical whether you do one commit or five, as long as all the changes are added at some point, so try to make things easier on your fellow developers when they have to review your changes.
</div><br>
<div class="paragraph">
This approach also makes it easier to pull out or revert one of the changesets if you need to later.
Rewriting History describes a number of useful Git tricks for rewriting history and interactively staging files&thinsp;—&thinsp;use these tools to help craft a clean and understandable history before sending the work to someone else.
</div><br>
<div class="paragraph">
The last thing to keep in mind is the commit message.
Getting in the habit of creating quality commit messages makes using and collaborating with Git a lot easier.
As a general rule, your messages should start with a single line that’s no more than about 50 characters and that describes the changeset concisely, followed by a blank line, followed by a more detailed explanation.
The Git project requires that the more detailed explanation include your motivation for the change and contrast its implementation with previous behavior&thinsp;—&thinsp;this is a good guideline to follow.
Write your commit message in the imperative: "Fix bug" and not "Fixed bug" or "Fixes bug."
Here is a template you can follow, which we’ve lightly adapted from one originally written by Tim Pope:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-text" data-lang="text">Capitalized, short (50 chars or less) summary

More detailed explanatory text, if necessary.  Wrap it to about 72
characters or so.  In some contexts, the first line is treated as the
subject of an email and the rest of the text as the body.  The blank
line separating the summary from the body is critical (unless you omit
the body entirely); tools like rebase will confuse you if you run the
two together.

Write your commit message in the imperative: "Fix bug" and not "Fixed bug"
or "Fixes bug."  This convention matches up with commit messages generated
by commands like git merge and git revert.

Further paragraphs come after blank lines.

- Bullet points are okay, too

- Typically a hyphen or asterisk is used for the bullet, followed by a
  single space, with blank lines in between, but conventions vary here

- Use a hanging indent</blockquote></pre>
</div>
</div>
<div class="paragraph">
If all your commit messages follow this model, things will be much easier for you and the developers with whom you collaborate.
The Git project has well-formatted commit messages&thinsp;—&thinsp;try running <code>git log --no-merges</code> there to see what a nicely-formatted project-commit history looks like.
</div>
<div class="sect3">
<h3 id="_private_team">Private Small Team</h3>
<div class="paragraph">

The simplest setup you’re likely to encounter is a private project with one or two other developers.
“Private,” in this context, means closed-source&thinsp;—&thinsp;not accessible to the outside world.
You and the other developers all have push access to the repository.
</div><br>
<div class="paragraph">
In this environment, you can follow a workflow similar to what you might do when using Subversion or another centralized system.
You still get the advantages of things like offline committing and vastly simpler branching and merging, but the workflow can be very similar; the main difference is that merges happen client-side rather than on the server at commit time.
Let’s see what it might look like when two developers start to work together with a shared repository.
The first developer, John, clones the repository, makes a change, and commits locally.
The protocol messages have been replaced with <code>…&ZeroWidthSpace;</code> in these examples to shorten them somewhat.
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console"># John's Machine
$ git clone john@githost:simplegit.git
Cloning into 'simplegit'...
...
$ cd simplegit/
$ vim lib/simplegit.rb
$ git commit -am 'Remove invalid default value'
[master 738ee87] Remove invalid default value
 1 files changed, 1 insertions(+), 1 deletions(-)</blockquote></pre>
</div>
</div>
<div class="paragraph">
The second developer, Jessica, does the same thing&thinsp;—&thinsp;clones the repository and commits a change:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console"># Jessica's Machine
$ git clone jessica@githost:simplegit.git
Cloning into 'simplegit'...
...
$ cd simplegit/
$ vim TODO
$ git commit -am 'Add reset task'
[master fbff5bc] Add reset task
 1 files changed, 1 insertions(+), 0 deletions(-)</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now, Jessica pushes her work to the server, which works just fine:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console"># Jessica's Machine
$ git push origin master
...
To jessica@githost:simplegit.git
   1edee6b..fbff5bc  master -&gt; master</blockquote></pre>
</div>
</div>
<div class="paragraph">
The last line of the output above shows a useful return message from the push operation.
The basic format is <code>&lt;oldref&gt;..&lt;newref&gt; fromref → toref</code>, where <code>oldref</code> means the old reference, <code>newref</code> means the new reference, <code>fromref</code> is the name of the local reference being pushed, and <code>toref</code> is the name of the remote reference being updated.
You’ll see similar output like this below in the discussions, so having a basic idea of the meaning will help in understanding the various states of the repositories.
</div><br>
<div class="paragraph">
Continuing with this example, shortly afterwards, John makes some changes, commits them to his local repository, and tries to push them to the same server:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console"># John's Machine
$ git push origin master
To john@githost:simplegit.git
 ! [rejected]        master -&gt; master (non-fast forward)
error: failed to push some refs to 'john@githost:simplegit.git'</blockquote></pre>
</div>
</div>
<div class="paragraph">
In this case, John’s push fails because of Jessica’s earlier push of <em>her</em> changes.
This is especially important to understand if you’re used to Subversion, because you’ll notice that the two developers didn’t edit the same file.
Although Subversion automatically does such a merge on the server if different files are edited, with Git, you must <em>first</em> merge the commits locally.
In other words, John must first fetch Jessica’s upstream changes and merge them into his local repository before he will be allowed to push.
</div><br>
<div class="paragraph">
As a first step, John fetches Jessica’s work (this only <em>fetches</em> Jessica’s upstream work, it does not yet merge it into John’s work):
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git fetch origin
...
From john@githost:simplegit
 + 049d078...fbff5bc master     -&gt; origin/master</blockquote></pre>
</div>
</div>
<div class="paragraph">
At this point, John’s local repository looks something like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/small-team-1.png" alt="John’s divergent history">
</div>
<div class="title">Figure 57. John’s divergent history</div>
</div><br><br>
<div class="paragraph">
Now John can merge Jessica’s work that he fetched into his own local work:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git merge origin/master
Merge made by the 'recursive' strategy.
 TODO |    1 +
 1 files changed, 1 insertions(+), 0 deletions(-)</blockquote></pre>
</div>
</div>
<div class="paragraph">
As long as that local merge goes smoothly, John’s updated history will now look like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/small-team-2.png" alt="John’s repository after merging `origin/master`">
</div>
<div class="title">Figure 58. John’s repository after merging <code>origin/master</code>
</div>
</div><br><br>
<div class="paragraph">
At this point, John might want to test this new code to make sure none of Jessica’s work affects any of his and, as long as everything seems fine, he can finally push the new merged work up to the server:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push origin master
...
To john@githost:simplegit.git
   fbff5bc..72bbc59  master -&gt; master</blockquote></pre>
</div>
</div>
<div class="paragraph">
In the end, John’s commit history will look like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/small-team-3.png" alt="John’s history after pushing to the `origin` server">
</div>
<div class="title">Figure 59. John’s history after pushing to the <code>origin</code> server</div>
</div><br><br>
<div class="paragraph">
In the meantime, Jessica has created a new topic branch called <code>issue54</code>, and made three commits to that branch.
She hasn’t fetched John’s changes yet, so her commit history looks like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/small-team-4.png" alt="Jessica’s topic branch">
</div><br><br>
<div class="title">Figure 60. Jessica’s topic branch</div>
</div>
<div class="paragraph">
Suddenly, Jessica learns that John has pushed some new work to the server and she wants to take a look at it, so she can fetch all new content from the server that she does not yet have with:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console"># Jessica's Machine
$ git fetch origin
...
From jessica@githost:simplegit
   fbff5bc..72bbc59  master     -&gt; origin/master</blockquote></pre>
</div>
</div>
<div class="paragraph">
That pulls down the work John has pushed up in the meantime.
Jessica’s history now looks like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/small-team-5.png" alt="Jessica’s history after fetching John’s changes">
</div>
<div class="title">Figure 61. Jessica’s history after fetching John’s changes</div>
</div><br><br>
<div class="paragraph">
Jessica thinks her topic branch is ready, but she wants to know what part of John’s fetched work she has to merge into her work so that she can push.
She runs <code>git log</code> to find out:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log --no-merges issue54..origin/master
commit 738ee872852dfaa9d6634e0dea7a324040193016
Author: John Smith &lt;jsmith@example.com&gt;
Date:   Fri May 29 16:01:27 2009 -0700

   Remove invalid default value</blockquote></pre>
</div>
</div>
<div class="paragraph">
The <code>issue54..origin/master</code> syntax is a log filter that asks Git to display only those commits that are on the latter branch (in this case <code>origin/master</code>) that are not on the first branch (in this case <code>issue54</code>).
</div><br>
<div class="paragraph">
From the above output, we can see that there is a single commit that John has made that Jessica has not merged into her local work.
If she merges <code>origin/master</code>, that is the single commit that will modify her local work.
</div><br>
<div class="paragraph">
Now, Jessica can merge her topic work into her <code>master</code> branch, merge John’s work (<code>origin/master</code>) into her <code>master</code> branch, and then push back to the server again.
</div><br>
<div class="paragraph">
First (having committed all of the work on her <code>issue54</code> topic branch), Jessica switches back to her <code>master</code> branch in preparation for integrating all this work:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout master
Switched to branch 'master'
Your branch is behind 'origin/master' by 2 commits, and can be fast-forwarded.</blockquote></pre>
</div>
</div>
<div class="paragraph">
Jessica can merge either <code>origin/master</code> or <code>issue54</code> first&thinsp;—&thinsp;they’re both upstream, so the order doesn’t matter.
The end snapshot should be identical no matter which order she chooses; only the history will be different.
She chooses to merge the <code>issue54</code> branch  first:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git merge issue54
Updating fbff5bc..4af4298
Fast forward
 README           |    1 +
 lib/simplegit.rb |    6 +++++-
 2 files changed, 6 insertions(+), 1 deletions(-)</blockquote></pre>
</div>
</div>
<div class="paragraph">
No problems occur; as you can see it was a simple fast-forward merge.
Jessica now completes the local merging process by merging John’s earlier fetched work that is sitting in the <code>origin/master</code> branch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git merge origin/master
Auto-merging lib/simplegit.rb
Merge made by the 'recursive' strategy.
 lib/simplegit.rb |    2 +-
 1 files changed, 1 insertions(+), 1 deletions(-)</blockquote></pre>
</div>
</div>
<div class="paragraph">
Everything merges cleanly, and Jessica’s history now looks like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/small-team-6.png" alt="Jessica’s history after merging John’s changes">
</div>
<div class="title">Figure 62. Jessica’s history after merging John’s changes</div>
</div><br><br>
<div class="paragraph">
Now <code>origin/master</code> is reachable from Jessica’s <code>master</code> branch, so she should be able to successfully push (assuming John hasn’t pushed even more changes in the meantime):
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push origin master
...
To jessica@githost:simplegit.git
   72bbc59..8059c15  master -&gt; master</blockquote></pre>
</div>
</div>
<div class="paragraph">
Each developer has committed a few times and merged each other’s work successfully.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/small-team-7.png" alt="Jessica’s history after pushing all changes back to the server">
</div>
<div class="title">Figure 63. Jessica’s history after pushing all changes back to the server</div>
</div><br><br>
<div class="paragraph">
That is one of the simplest workflows.
You work for a while (generally in a topic branch), and merge that work into your <code>master</code> branch when it’s ready to be integrated.
When you want to share that work, you fetch and merge your <code>master</code> from <code>origin/master</code> if it has changed, and finally push to the <code>master</code> branch on the server.
The general sequence is something like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/small-team-flow.png" alt="General sequence of events for a simple multiple-developer Git workflow">
</div><br><br>
<div class="title">Figure 64. General sequence of events for a simple multiple-developer Git workflow</div>
</div>
</div>
<div class="sect3">
<h3 id="_private_managed_team">Private Managed Team</h3>
<div class="paragraph">

In this next scenario, you’ll look at contributor roles in a larger private group.
You’ll learn how to work in an environment where small groups collaborate on features, after which those team-based contributions are integrated by another party.
</div><br>
<div class="paragraph">
Let’s say that John and Jessica are working together on one feature (call this “featureA”), while Jessica and a third developer, Josie, are working on a second (say, “featureB”).
In this case, the company is using a type of integration-manager workflow where the work of the individual groups is integrated only by certain engineers, and the <code>master</code> branch of the main repo can be updated only by those engineers.
In this scenario, all work is done in team-based branches and pulled together by the integrators later.
</div><br>
<div class="paragraph">
Let’s follow Jessica’s workflow as she works on her two features, collaborating in parallel with two different developers in this environment.
Assuming she already has her repository cloned, she decides to work on <code>featureA</code> first.
She creates a new branch for the feature and does some work on it there:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console"># Jessica's Machine
$ git checkout -b featureA
Switched to a new branch 'featureA'
$ vim lib/simplegit.rb
$ git commit -am 'Add limit to log function'
[featureA 3300904] Add limit to log function
 1 files changed, 1 insertions(+), 1 deletions(-)</blockquote></pre>
</div>
</div>
<div class="paragraph">
At this point, she needs to share her work with John, so she pushes her <code>featureA</code> branch commits up to the server.
Jessica doesn’t have push access to the <code>master</code> branch&thinsp;—&thinsp;only the integrators do&thinsp;—&thinsp;so she has to push to another branch in order to collaborate with John:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push -u origin featureA
...
To jessica@githost:simplegit.git
 * [new branch]      featureA -&gt; featureA</blockquote></pre>
</div>
</div>
<div class="paragraph">
Jessica emails John to tell him that she’s pushed some work into a branch named <code>featureA</code> and he can look at it now.
While she waits for feedback from John, Jessica decides to start working on <code>featureB</code> with Josie.
To begin, she starts a new feature branch, basing it off the server’s <code>master</code> branch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console"># Jessica's Machine
$ git fetch origin
$ git checkout -b featureB origin/master
Switched to a new branch 'featureB'</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now, Jessica makes a couple of commits on the <code>featureB</code> branch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ vim lib/simplegit.rb
$ git commit -am 'Make ls-tree function recursive'
[featureB e5b0fdc] Make ls-tree function recursive
 1 files changed, 1 insertions(+), 1 deletions(-)
$ vim lib/simplegit.rb
$ git commit -am 'Add ls-files'
[featureB 8512791] Add ls-files
 1 files changed, 5 insertions(+), 0 deletions(-)</blockquote></pre>
</div>
</div>
<div class="paragraph">
Jessica’s repository now looks like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/managed-team-1.png" alt="Jessica’s initial commit history">
</div><br><br>
<div class="title">Figure 65. Jessica’s initial commit history</div>
</div>
<div class="paragraph">
She’s ready to push her work, but gets an email from Josie that a branch with some initial “featureB” work on it was already pushed to the server as the <code>featureBee</code> branch.
Jessica needs to merge those changes with her own before she can push her work to the server.
Jessica first fetches Josie’s changes with <code>git fetch</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git fetch origin
...
From jessica@githost:simplegit
 * [new branch]      featureBee -&gt; origin/featureBee</blockquote></pre>
</div>
</div>
<div class="paragraph">
Assuming Jessica is still on her checked-out <code>featureB</code> branch, she can now merge Josie’s work into that branch with <code>git merge</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git merge origin/featureBee
Auto-merging lib/simplegit.rb
Merge made by the 'recursive' strategy.
 lib/simplegit.rb |    4 ++++
 1 files changed, 4 insertions(+), 0 deletions(-)</blockquote></pre>
</div>
</div>
<div class="paragraph">
At this point, Jessica wants to push all of this merged “featureB” work back to the server, but she doesn’t want to simply push her own <code>featureB</code> branch.
Rather, since Josie has already started an upstream <code>featureBee</code> branch, Jessica wants to push to <em>that</em> branch, which she does with:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push -u origin featureB:featureBee
...
To jessica@githost:simplegit.git
   fba9af8..cd685d1  featureB -&gt; featureBee</blockquote></pre>
</div>
</div>
<div class="paragraph">
This is called a <em>refspec</em>.
Also notice the <code>-u</code> flag; this is short for <code>--set-upstream</code>, which configures the branches for easier pushing and pulling later.
</div>
<div class="paragraph">
Suddenly, Jessica gets email from John, who tells her he’s pushed some changes to the <code>featureA</code> branch on which they are collaborating, and he asks Jessica to take a look at them.
Again, Jessica runs a simple <code>git fetch</code> to fetch <em>all</em> new content from the server, including (of course) John’s latest work:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git fetch origin
...
From jessica@githost:simplegit
   3300904..aad881d  featureA   -&gt; origin/featureA</blockquote></pre>
</div>
</div>
<div class="paragraph">
Jessica can display the log of John’s new work by comparing the content of the newly-fetched <code>featureA</code> branch with her local copy of the same branch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log featureA..origin/featureA
commit aad881d154acdaeb2b6b18ea0e827ed8a6d671e6
Author: John Smith &lt;jsmith@example.com&gt;
Date:   Fri May 29 19:57:33 2009 -0700

    Increase log output to 30 from 25</blockquote></pre>
</div>
</div>
<div class="paragraph">
If Jessica likes what she sees, she can merge John’s new work into her local <code>featureA</code> branch with:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout featureA
Switched to branch 'featureA'
$ git merge origin/featureA
Updating 3300904..aad881d
Fast forward
 lib/simplegit.rb |   10 +++++++++-
1 files changed, 9 insertions(+), 1 deletions(-)</blockquote></pre>
</div>
</div>
<div class="paragraph">
Finally, Jessica might want to make a couple minor changes to all that merged content, so she is free to make those changes, commit them to her local <code>featureA</code> branch, and push the end result back to the server:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git commit -am 'Add small tweak to merged content'
[featureA 774b3ed] Add small tweak to merged content
 1 files changed, 1 insertions(+), 1 deletions(-)
$ git push
...
To jessica@githost:simplegit.git
   3300904..774b3ed  featureA -&gt; featureA</blockquote></pre>
</div>
</div>
<div class="paragraph">
Jessica’s commit history now looks something like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/managed-team-2.png" alt="Jessica’s history after committing on a feature branch">
</div><br><br>
<div class="title">Figure 66. Jessica’s history after committing on a feature branch</div>
</div>
<div class="paragraph">
At some point, Jessica, Josie, and John inform the integrators that the <code>featureA</code> and <code>featureBee</code> branches on the server are ready for integration into the mainline.
After the integrators merge these branches into the mainline, a fetch will bring down the new merge commit, making the history look like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/managed-team-3.png" alt="Jessica’s history after merging both her topic branches">
</div><br><br>
<div class="title">Figure 67. Jessica’s history after merging both her topic branches</div>
</div>
<div class="paragraph">
Many groups switch to Git because of this ability to have multiple teams working in parallel, merging the different lines of work late in the process.
The ability of smaller subgroups of a team to collaborate via remote branches without necessarily having to involve or impede the entire team is a huge benefit of Git.
The sequence for the workflow you saw here is something like this:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/managed-team-flow.png" alt="Basic sequence of this managed-team workflow">
</div><br><br>
<div class="title">Figure 68. Basic sequence of this managed-team workflow</div>
</div>
</div>
<div class="sect3">
<h3 id="_public_project">Forked Public Project</h3>
<div class="paragraph">

Contributing to public projects is a bit different.
Because you don’t have the permissions to directly update branches on the project, you have to get the work to the maintainers some other way.
This first example describes contributing via forking on Git hosts that support easy forking.
Many hosting sites support this (including GitHub, BitBucket, repo.or.cz, and others), and many project maintainers expect this style of contribution.
The next section deals with projects that prefer to accept contributed patches via email.
</div>
<div class="paragraph">
First, you’ll probably want to clone the main repository, create a topic branch for the patch or patch series you’re planning to contribute, and do your work there.
The sequence looks basically like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git clone &lt;url&gt;
$ cd project
$ git checkout -b featureA
  ... work ...
$ git commit
  ... work ...
$ git commit</blockquote></pre>
</div>
</div>
<div class="paragraph">
When your branch work is finished and you’re ready to contribute it back to the maintainers, go to the original project page and click the “Fork” button, creating your own writable fork of the project.
You then need to add this repository URL as a new remote of your local repository; in this example, let’s call it <code>myfork</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote add myfork &lt;url&gt;</blockquote></pre>
</div>
</div>
<div class="paragraph">
You then need to push your new work to this repository.
It’s easiest to push the topic branch you’re working on to your forked repository, rather than merging that work into your <code>master</code> branch and pushing that.
If the maintainers <code>merge</code>, <code>rebase</code>, or <code>cherry-pick</code> your work, you’ll eventually get it back via pulling from their repository anyhow.
</div>
<div class="paragraph">
In any event, you can push your work with:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push -u myfork featureA</blockquote></pre>
</div>
</div>
<div class="paragraph">

Once your work has been pushed to your fork of the repository, you need to notify the maintainers of the original project that you have work you’d like them to merge.
This is often called a <em>pull request</em>, and you typically generate such a request either via the website&thinsp;—&thinsp;GitHub has its own “Pull Request” mechanism that we’ll go over in GitHub&thinsp;—&thinsp;or you can run the <code>git request-pull</code> command and email the subsequent output to the project maintainer manually.
</div>
<div class="paragraph">
The <code>git request-pull</code> command takes the base branch into which you want your topic branch pulled and the Git repository URL you want them to pull from, and produces a summary of all the changes you’re asking to be pulled.
For instance, if Jessica wants to send John a pull request, and she’s done two commits on the topic branch she just pushed, she can run this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git request-pull origin/master myfork
The following changes since commit 1edee6b1d61823a2de3b09c160d7080b8d1b3a40:
Jessica Smith (1):
        Create new function

are available in the git repository at:

  git://githost/simplegit.git featureA

Jessica Smith (2):
      Add limit to log function
      Increase log output to 30 from 25

 lib/simplegit.rb |   10 +++++++++-
 1 files changed, 9 insertions(+), 1 deletions(-)</blockquote></pre>
</div>
</div>
<div class="paragraph">
This output can be sent to the maintainer&thinsp;—&thinsp;it tells them where the work was branched from, summarizes the commits, and identifies from where the new work is to be pulled.
</div>
<div class="paragraph">
On a project for which you’re not the maintainer, it’s generally easier to have a branch like <code>master</code> always track <code>origin/master</code> and to do your work in topic branches that you can easily discard if they’re rejected.
Having work themes isolated into topic branches also makes it easier for you to rebase your work if the tip of the main repository has moved in the meantime and your commits no longer apply cleanly.
For example, if you want to submit a second topic of work to the project, don’t continue working on the topic branch you just pushed up&thinsp;—&thinsp;start over from the main repository’s <code>master</code> branch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout -b featureB origin/master
  ... work ...
$ git commit
$ git push myfork featureB
$ git request-pull origin/master myfork
  ... email generated request pull to maintainer ...
$ git fetch origin</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now, each of your topics is contained within a silo&thinsp;—&thinsp;similar to a patch queue&thinsp;—&thinsp;that you can rewrite, rebase, and modify without the topics interfering or interdepending on each other, like so:
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/public-small-1.png" alt="Initial commit history with `featureB` work">
</div><br><br>
<div class="title">Figure 69. Initial commit history with <code>featureB</code> work</div>
</div><br><br>
<div class="paragraph">
Let’s say the project maintainer has pulled in a bunch of other patches and tried your first branch, but it no longer cleanly merges.
In this case, you can try to rebase that branch on top of <code>origin/master</code>, resolve the conflicts for the maintainer, and then resubmit your changes:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout featureA
$ git rebase origin/master
$ git push -f myfork featureA</blockquote></pre>
</div>
</div>
<div class="paragraph">
</div>
<div id="psp_b" class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/public-small-2.png" alt="Commit history after `featureA` work">
</div>
<div class="title">Figure 70. Commit history after <code>featureA</code> work</div>
</div><br><br>
<div class="paragraph">
Because you rebased the branch, you have to specify the <code>-f</code> to your push command in order to be able to replace the <code>featureA</code> branch on the server with a commit that isn’t a descendant of it.
An alternative would be to push this new work to a different branch on the server (perhaps called <code>featureAv2</code>).
</div>
<div class="paragraph">
Let’s look at one more possible scenario: the maintainer has looked at work in your second branch and likes the concept but would like you to change an implementation detail.
You’ll also take this opportunity to move the work to be based off the project’s current <code>master</code> branch.
You start a new branch based off the current <code>origin/master</code> branch, squash the <code>featureB</code> changes there, resolve any conflicts, make the implementation change, and then push that as a new branch:
</div>
<div class="paragraph">

</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout -b featureBv2 origin/master
$ git merge --squash featureB
  ... change implementation ...
$ git commit
$ git push myfork featureBv2</blockquote></pre>
</div>
</div>
<div class="paragraph">
The <code>--squash</code> option takes all the work on the merged branch and squashes it into one changeset producing the repository state as if a real merge happened, without actually making a merge commit.
This means your future commit will have one parent only and allows you to introduce all the changes from another branch and then make more changes before recording the new commit.
Also the <code>--no-commit</code> option can be useful to delay the merge commit in case of the default merge process.
</div>
<div class="paragraph">
At this point, you can notify the maintainer that you’ve made the requested changes, and that they can find those changes in your <code>featureBv2</code> branch.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/public-small-3.png" alt="Commit history after `featureBv2` work">
</div>
<div class="title">Figure 71. Commit history after <code>featureBv2</code> work</div>
</div>
</div><br><br>
<div class="sect3">
<h3 id="_project_over_email">Public Project over Email</h3>
<div class="paragraph">

Many projects have established procedures for accepting patches&thinsp;—&thinsp;you’ll need to check the specific rules for each project, because they will differ.
Since there are several older, larger projects which accept patches via a developer mailing list, we’ll go over an example of that now.
</div>
<div class="paragraph">
The workflow is similar to the previous use case&thinsp;—&thinsp;you create topic branches for each patch series you work on.
The difference is how you submit them to the project.
Instead of forking the project and pushing to your own writable version, you generate email versions of each commit series and email them to the developer mailing list:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout -b topicA
  ... work ...
$ git commit
  ... work ...
$ git commit</blockquote></pre>
</div>
</div>
<div class="paragraph">

Now you have two commits that you want to send to the mailing list.
You use <code>git format-patch</code> to generate the mbox-formatted files that you can email to the list&thinsp;—&thinsp;it turns each commit into an email message with the first line of the commit message as the subject and the rest of the message plus the patch that the commit introduces as the body.
The nice thing about this is that applying a patch from an email generated with <code>format-patch</code> preserves all the commit information properly.
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git format-patch -M origin/master
0001-add-limit-to-log-function.patch
0002-increase-log-output-to-30-from-25.patch</blockquote></pre>
</div>
</div>
<div class="paragraph">
The <code>format-patch</code> command prints out the names of the patch files it creates.
The <code>-M</code> switch tells Git to look for renames.
The files end up looking like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ cat 0001-add-limit-to-log-function.patch
From 330090432754092d704da8e76ca5c05c198e71a8 Mon Sep 17 00:00:00 2001
From: Jessica Smith &lt;jessica@example.com&gt;
Date: Sun, 6 Apr 2008 10:17:23 -0700
Subject: [PATCH 1/2] Add limit to log function

Limit log functionality to the first 20

---
 lib/simplegit.rb |    2 +-
 1 files changed, 1 insertions(+), 1 deletions(-)

diff --git a/lib/simplegit.rb b/lib/simplegit.rb
index 76f47bc..f9815f1 100644
--- a/lib/simplegit.rb
+++ b/lib/simplegit.rb
@@ -14,7 +14,7 @@ class SimpleGit
   end

   def log(treeish = 'master')
-    command("git log #{treeish}")
+    command("git log -n 20 #{treeish}")
   end

   def ls_tree(treeish = 'master')
--
2.1.0</blockquote></pre>
</div>
</div>
<div class="paragraph">
You can also edit these patch files to add more information for the email list that you don’t want to show up in the commit message.
If you add text between the <code>---</code> line and the beginning of the patch (the <code>diff --git</code> line), the developers can read it, but that content is ignored by the patching process.
</div><br>
<div class="paragraph">
To email this to a mailing list, you can either paste the file into your email program or send it via a command-line program.
Pasting the text often causes formatting issues, especially with “smarter” clients that don’t preserve newlines and other whitespace appropriately.
Luckily, Git provides a tool to help you send properly formatted patches via IMAP, which may be easier for you.
We’ll demonstrate how to send a patch via Gmail, which happens to be the email agent we know best; you can read detailed instructions for a number of mail programs at the end of the aforementioned <code>Documentation/SubmittingPatches</code> file in the Git source code.
</div><br>
<div class="paragraph">

First, you need to set up the imap section in your <code>~/.gitconfig</code> file.
You can set each value separately with a series of <code>git config</code> commands, or you can add them manually, but in the end your config file should look something like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-ini" data-lang="ini">[imap]
  folder = "[Gmail]/Drafts"
  host = imaps://imap.gmail.com
  user = user@gmail.com
  pass = YX]8g76G_2^sFbd
  port = 993
  sslverify = false</blockquote></pre>
</div>
</div>
<div class="paragraph">
If your IMAP server doesn’t use SSL, the last two lines probably aren’t necessary, and the host value will be <code>imap://</code> instead of <code>imaps://</code>.
When that is set up, you can use <code>git imap-send</code> to place the patch series in the Drafts folder of the specified IMAP server:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ cat *.patch |git imap-send
Resolving imap.gmail.com... ok
Connecting to [74.125.142.109]:993... ok
Logging in...
sending 2 messages
100% (2/2) done</blockquote></pre>
</div>
</div>
<div class="paragraph">
At this point, you should be able to go to your Drafts folder, change the To field to the mailing list you’re sending the patch to, possibly CC the maintainer or person responsible for that section, and send it off.
</div><br>
<div class="paragraph">
You can also send the patches through an SMTP server.
As before, you can set each value separately with a series of <code>git config</code> commands, or you can add them manually in the sendemail section in your <code>~/.gitconfig</code> file:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-ini" data-lang="ini">[sendemail]
  smtpencryption = tls
  smtpserver = smtp.gmail.com
  smtpuser = user@gmail.com
  smtpserverport = 587</blockquote></pre>
</div>
</div>
<div class="paragraph">
After this is done, you can use <code>git send-email</code> to send your patches:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git send-email *.patch
0001-add-limit-to-log-function.patch
0002-increase-log-output-to-30-from-25.patch
Who should the emails appear to be from? [Jessica Smith &lt;jessica@example.com&gt;]
Emails will be sent from: Jessica Smith &lt;jessica@example.com&gt;
Who should the emails be sent to? jessica@example.com
Message-ID to be used as In-Reply-To for the first email? y</blockquote></pre>
</div>
</div>
<div class="paragraph">
Then, Git spits out a bunch of log information looking something like this for each patch you’re sending:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-text" data-lang="text">(mbox) Adding cc: Jessica Smith &lt;jessica@example.com&gt; from
  \line 'From: Jessica Smith &lt;jessica@example.com&gt;'
OK. Log says:
Sendmail: /usr/sbin/sendmail -i jessica@example.com
From: Jessica Smith &lt;jessica@example.com&gt;
To: jessica@example.com
Subject: [PATCH 1/2] Add limit to log function
Date: Sat, 30 May 2009 13:29:15 -0700
Message-Id: &lt;1243715356-61726-1-git-send-email-jessica@example.com&gt;
X-Mailer: git-send-email 1.6.2.rc1.20.g8c5b.dirty
In-Reply-To: &lt;y&gt;
References: &lt;y&gt;

Result: OK</blockquote></pre>
</div>
</div>
<div class="sect3">
<h3 id="_summary_5">Summary</h3>
<div class="paragraph">
In this section, we covered multiple workflows, and talked about the differences between working as part of a small team on closed-source projects vs contributing to a big public project.
You know to check for white-space errors before committing, and can write a great commit message.
You learned how to format patches, and e-mail them to a developer mailing list.
Dealing with merges was also covered in the context of the different workflows.
You are now well prepared to collaborate on any project.
</div><br>
<div class="paragraph">
Next, you’ll see how to work the other side of the coin: maintaining a Git project.
You’ll learn how to be a benevolent dictator or integration manager.
</div>
</div></div>
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