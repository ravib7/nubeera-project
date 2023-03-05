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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Remote Branches</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Git Branching</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
<div class="paragraph">

Remote references are references (pointers) in your remote repositories, including branches, tags, and so on.
You can get a full list of remote references explicitly with <code>git ls-remote &lt;remote&gt;</code>, or <code>git remote show &lt;remote&gt;</code> for remote branches as well as more information.
Nevertheless, a more common way is to take advantage of remote-tracking branches.
</div><br>
<div class="paragraph">
Remote-tracking branches are references to the state of remote branches.
They’re local references that you can’t move; Git moves them for you whenever you do any network communication, to make sure they accurately represent the state of the remote repository.
Think of them as bookmarks, to remind you where the branches in your remote repositories were the last time you connected to them.
</div><br>
<div class="paragraph">
Remote-tracking branch names take the form <code>&lt;remote&gt;/&lt;branch&gt;</code>.
For instance, if you wanted to see what the <code>master</code> branch on your <code>origin</code> remote looked like as of the last time you communicated with it, you would check the <code>origin/master</code> branch.
If you were working on an issue with a partner and they pushed up an <code>iss53</code> branch, you might have your own local <code>iss53</code> branch, but the branch on the server would be represented by the remote-tracking branch <code>origin/iss53</code>.
</div><br>
<div class="paragraph">
This may be a bit confusing, so let’s look at an example.
Let’s say you have a Git server on your network at <code>git.ourcompany.com</code>.
If you clone from this, Git’s <code>clone</code> command automatically names it <code>origin</code> for you, pulls down all its data, creates a pointer to where its <code>master</code> branch is, and names it <code>origin/master</code> locally.
Git also gives you your own local <code>master</code> branch starting at the same place as origin’s <code>master</code> branch, so you have something to work from.
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/remote-branches-1.png" alt="Server and local repositories after cloning.">
</div>
<div class="title">Figure 30. Server and local repositories after cloning</div>
</div><br>
<div class="paragraph">
If you do some work on your local <code>master</code> branch, and, in the meantime, someone else pushes to <code>git.ourcompany.com</code> and updates its <code>master</code> branch, then your histories move forward differently.
Also, as long as you stay out of contact with your <code>origin</code> server, your <code>origin/master</code> pointer doesn’t move.
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/remote-branches-2.png" alt="Local and remote work can diverge">
</div>
<div class="title">Figure 31. Local and remote work can diverge</div>
</div><br>
<div class="paragraph">
To synchronize your work with a given remote, you run a <code>git fetch &lt;remote&gt;</code> command (in our case, <code>git fetch origin</code>).
This command looks up which server “origin” is (in this case, it’s <code>git.ourcompany.com</code>), fetches any data from it that you don’t yet have, and updates your local database, moving your <code>origin/master</code> pointer to its new, more up-to-date position.
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/remote-branches-3.png" alt="`git fetch` updates your remote references">
</div>
<div class="title">Figure 32. <code>git fetch</code> updates your remote-tracking branches</div>
</div><br>
<div class="paragraph">
To demonstrate having multiple remote servers and what remote branches for those remote projects look like, let’s assume you have another internal Git server that is used only for development by one of your sprint teams.
This server is at <code>git.team1.ourcompany.com</code>.
You can add it as a new remote reference to the project you’re currently working on by running the <code>git remote add</code> command as we covered in <a href="../02GitBasics/">Git Basics</a>.
Name this remote <code>teamone</code>, which will be your shortname for that whole URL.
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/remote-branches-4.png" alt="Adding another server as a remote">
</div>
<div class="title">Figure 33. Adding another server as a remote</div>
</div><br>
<div class="paragraph">
Now, you can run <code>git fetch teamone</code> to fetch everything the remote <code>teamone</code> server has that you don’t have yet.
Because that server has a subset of the data your <code>origin</code> server has right now, Git fetches no data but sets a remote-tracking branch called <code>teamone/master</code> to point to the commit that <code>teamone</code> has as its <code>master</code> branch.
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/remote-branches-5.png" alt="Remote tracking branch for `teamone/master`">
</div>
<div class="title">Figure 34. Remote-tracking branch for <code>teamone/master</code>
</div>
</div><br>
<div class="sect3">
<h3 id="_pushing_branches">Pushing</h3>
<div class="paragraph">

When you want to share a branch with the world, you need to push it up to a remote to which you have write access.
Your local branches aren’t automatically synchronized to the remotes you write to&thinsp;—&thinsp;you have to explicitly push the branches you want to share.
That way, you can use private branches for work you don’t want to share, and push up only the topic branches you want to collaborate on.
</div><br>
<div class="paragraph">
If you have a branch named <code>serverfix</code> that you want to work on with others, you can push it up the same way you pushed your first branch.
Run <code>git push &lt;remote&gt; &lt;branch&gt;</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push origin serverfix
Counting objects: 24, done.
Delta compression using up to 8 threads.
Compressing objects: 100% (15/15), done.
Writing objects: 100% (24/24), 1.91 KiB | 0 bytes/s, done.
Total 24 (delta 2), reused 0 (delta 0)
To https://github.com/schacon/simplegit
 * [new branch]      serverfix -&gt; serverfix</blockquote></pre>
</div>
</div>
<div class="paragraph">
This is a bit of a shortcut.
Git automatically expands the <code>serverfix</code> branchname out to <code>refs/heads/serverfix:refs/heads/serverfix</code>, which means, “Take my <code>serverfix</code> local branch and push it to update the remote’s <code>serverfix</code> branch.”
You can also do <code>git push origin serverfix:serverfix</code>, which does the same thing&thinsp;—&thinsp;it says, “Take my serverfix and make it the remote’s serverfix.”
You can use this format to push a local branch into a remote branch that is named differently.
If you didn’t want it to be called <code>serverfix</code> on the remote, you could instead run <code>git push origin serverfix:awesomebranch</code> to push your local <code>serverfix</code> branch to the <code>awesomebranch</code> branch on the remote project.
</div>
<div class="paragraph">
The next time one of your collaborators fetches from the server, they will get a reference to where the server’s version of <code>serverfix</code> is under the remote branch <code>origin/serverfix</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git fetch origin
remote: Counting objects: 7, done.
remote: Compressing objects: 100% (2/2), done.
remote: Total 3 (delta 0), reused 3 (delta 0)
Unpacking objects: 100% (3/3), done.
From https://github.com/schacon/simplegit
 * [new branch]      serverfix    -&gt; origin/serverfix</blockquote></pre>
</div>
</div>
<div class="paragraph">
It’s important to note that when you do a fetch that brings down new remote-tracking branches, you don’t automatically have local, editable copies of them.
In other words, in this case, you don’t have a new <code>serverfix</code> branch&thinsp;—&thinsp;you have only an <code>origin/serverfix</code> pointer that you can’t modify.
</div><br>
<div class="paragraph">
To merge this work into your current working branch, you can run <code>git merge origin/serverfix</code>.
If you want your own <code>serverfix</code> branch that you can work on, you can base it off your remote-tracking branch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout -b serverfix origin/serverfix
Branch serverfix set up to track remote branch serverfix from origin.
Switched to a new branch 'serverfix'</blockquote></pre>
</div>
</div>
<div class="paragraph">
This gives you a local branch that you can work on that starts where <code>origin/serverfix</code> is.
</div>
</div>
<div class="sect3">
<h3 id="_tracking_branches">Tracking Branches</h3>
<div class="paragraph">

Checking out a local branch from a remote-tracking branch automatically creates what is called a “tracking branch” (and the branch it tracks is called an “upstream branch”).
Tracking branches are local branches that have a direct relationship to a remote branch.
If you’re on a tracking branch and type <code>git pull</code>, Git automatically knows which server to fetch from and which branch to merge in.
</div><br>  
<div class="paragraph">
When you clone a repository, it generally automatically creates a <code>master</code> branch that tracks <code>origin/master</code>.
However, you can set up other tracking branches if you wish&thinsp;—&thinsp;ones that track branches on other remotes, or don’t track the <code>master</code> branch.
The simple case is the example you just saw, running <code>git checkout -b &lt;branch&gt; &lt;remote&gt;/&lt;branch&gt;</code>.
This is a common enough operation that Git provides the <code>--track</code> shorthand:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout --track origin/serverfix
Branch serverfix set up to track remote branch serverfix from origin.
Switched to a new branch 'serverfix'</blockquote></pre>
</div>
</div>
<div class="paragraph">
In fact, this is so common that there’s even a shortcut for that shortcut.
If the branch name you’re trying to checkout (a) doesn’t exist and (b) exactly matches a name on only one remote, Git will create a tracking branch for you:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout serverfix
Branch serverfix set up to track remote branch serverfix from origin.
Switched to a new branch 'serverfix'</blockquote></pre>
</div>
</div>
<div class="paragraph">
To set up a local branch with a different name than the remote branch, you can easily use the first version with a different local branch name:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout -b sf origin/serverfix
Branch sf set up to track remote branch serverfix from origin.
Switched to a new branch 'sf'</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now, your local branch <code>sf</code> will automatically pull from <code>origin/serverfix</code>.
</div><br>
<div class="paragraph">
If you already have a local branch and want to set it to a remote branch you just pulled down, or want to change the upstream branch you’re tracking, you can use the <code>-u</code> or <code>--set-upstream-to</code> option to <code>git branch</code> to explicitly set it at any time.
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch -u origin/serverfix
Branch serverfix set up to track remote branch serverfix from origin.</blockquote></pre>
</div>
</div>
<div class="paragraph">
If you want to see what tracking branches you have set up, you can use the <code>-vv</code> option to <code>git branch</code>.
This will list out your local branches with more information including what each branch is tracking and if your local branch is ahead, behind or both.
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch -vv
  iss53     7e424c3 [origin/iss53: ahead 2] Add forgotten brackets
  master    1ae2a45 [origin/master] Deploy index fix
* serverfix f8674d9 [teamone/server-fix-good: ahead 3, behind 1] This should do it
  testing   5ea463a Try something new</blockquote></pre>
</div>
</div>
<div class="paragraph">
So here we can see that our <code>iss53</code> branch is tracking <code>origin/iss53</code> and is “ahead” by two, meaning that we have two commits locally that are not pushed to the server.
We can also see that our <code>master</code> branch is tracking <code>origin/master</code> and is up to date.
Next we can see that our <code>serverfix</code> branch is tracking the <code>server-fix-good</code> branch on our <code>teamone</code> server and is ahead by three and behind by one, meaning that there is one commit on the server we haven’t merged in yet and three commits locally that we haven’t pushed.
Finally we can see that our <code>testing</code> branch is not tracking any remote branch.
</div><br>
<div class="paragraph">
It’s important to note that these numbers are only since the last time you fetched from each server.
This command does not reach out to the servers, it’s telling you about what it has cached from these servers locally.
If you want totally up to date ahead and behind numbers, you’ll need to fetch from all your remotes right before running this.
You could do that like this:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git fetch --all; git branch -vv</blockquote></pre>
</div>
</div>
</div>
<div class="sect3">
<h3 id="_pulling">Pulling</h3>
<div class="paragraph">

While the <code>git fetch</code> command will fetch all the changes on the server that you don’t have yet, it will not modify your working directory at all.
It will simply get the data for you and let you merge it yourself.
However, there is a command called <code>git pull</code> which is essentially a <code>git fetch</code> immediately followed by a <code>git merge</code> in most cases.
If you have a tracking branch set up as demonstrated in the last section, either by explicitly setting it or by having it created for you by the <code>clone</code> or <code>checkout</code> commands, <code>git pull</code> will look up what server and branch your current branch is tracking, fetch from that server and then try to merge in that remote branch.
</div><br>
<div class="paragraph">
Generally it’s better to simply use the <code>fetch</code> and <code>merge</code> commands explicitly as the magic of <code>git pull</code> can often be confusing.
</div>
</div>
<div class="sect3">
<h3 id="_delete_branches">Deleting Remote Branches</h3>
<div class="paragraph">

Suppose you’re done with a remote branch&thinsp;—&thinsp;say you and your collaborators are finished with a feature and have merged it into your remote’s <code>master</code> branch (or whatever branch your stable codeline is in).
You can delete a remote branch using the <code>--delete</code> option to <code>git push</code>.
If you want to delete your <code>serverfix</code> branch from the server, you run the following:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push origin --delete serverfix
To https://github.com/schacon/simplegit
 - [deleted]         serverfix</blockquote></pre>
</div>
</div>
<div class="paragraph">
Basically all this does is remove the pointer from the server.
The Git server will generally keep the data there for a while until a garbage collection runs, so if it was accidentally deleted, it’s often easy to recover.
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