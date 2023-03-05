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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Rebasing</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Git Branching</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
<div class="paragraph">

In Git, there are two main ways to integrate changes from one branch into another: the <code>merge</code> and the <code>rebase</code>.
In this section you’ll learn what rebasing is, how to do it, why it’s a pretty amazing tool, and in what cases you won’t want to use it.
</div>
<div class="sect3">
<h3 id="_the_basic_rebase">The Basic Rebase</h3>
<div class="paragraph">
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/basic-rebase-1.png" alt="Simple divergent history">
</div>
<div class="title">Figure 35. Simple divergent history</div>
</div><br>
<div class="paragraph">
The easiest way to integrate the branches, as we’ve already covered, is the <code>merge</code> command.
It performs a three-way merge between the two latest branch snapshots (<code>C3</code> and <code>C4</code>) and the most recent common ancestor of the two (<code>C2</code>), creating a new snapshot (and commit).
</div>
<div id="rebasing-merging-example" class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/basic-rebase-2.png" alt="Merging to integrate diverged work history">
</div>
<div class="title">Figure 36. Merging to integrate diverged work history</div>
</div><br>
<div class="paragraph">
However, there is another way: you can take the patch of the change that was introduced in <code>C4</code> and reapply it on top of <code>C3</code>.
In Git, this is called <em>rebasing</em>.
With the <code>rebase</code> command, you can take all the changes that were committed on one branch and replay them on a different branch.
</div><br>
<div class="paragraph">
For this example, you would check out the <code>experiment</code> branch, and then rebase it onto the <code>master</code> branch as follows:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout experiment
$ git rebase master
First, rewinding head to replay your work on top of it...
Applying: added staged command</blockquote></pre>
</div>
</div>
<div class="paragraph">
This operation works by going to the common ancestor of the two branches (the one you’re on and the one you’re rebasing onto), getting the diff introduced by each commit of the branch you’re on, saving those diffs to temporary files, resetting the current branch to the same commit as the branch you are rebasing onto, and finally applying each change in turn.
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/basic-rebase-3.png" alt="Rebasing the change introduced in `C4` onto `C3`">
</div>
<div class="title">Figure 37. Rebasing the change introduced in <code>C4</code> onto <code>C3</code>
</div>
</div><br>
<div class="paragraph">
At this point, you can go back to the <code>master</code> branch and do a fast-forward merge.
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout master
$ git merge experiment</blockquote></pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/basic-rebase-4.png" alt="Fast-forwarding the `master` branch">
</div>
<div class="title">Figure 38. Fast-forwarding the <code>master</code> branch</div>
</div><br>
<div class="paragraph">
There is no difference in the end product of the integration, but rebasing makes for a cleaner history.
If you examine the log of a rebased branch, it looks like a linear history: it appears that all the work happened in series, even when it originally happened in parallel.
</div><br>
<div class="paragraph">
Often, you’ll do this to make sure your commits apply cleanly on a remote branch&thinsp;—&thinsp;perhaps in a project to which you’re trying to contribute but that you don’t maintain.
In this case, you’d do your work in a branch and then rebase your work onto <code>origin/master</code> when you were ready to submit your patches to the main project.
That way, the maintainer doesn’t have to do any integration work&thinsp;—&thinsp;just a fast-forward or a clean apply.
</div><br>
<div class="paragraph">
Note that the snapshot pointed to by the final commit you end up with, whether it’s the last of the rebased commits for a rebase or the final merge commit after a merge, is the same snapshot&thinsp;—&thinsp;it’s only the history that is different.
Rebasing replays changes from one line of work onto another in the order they were introduced, whereas merging takes the endpoints and merges them together.
</div>
</div>
<div class="sect3">
<h3 id="_more_interesting_rebases">More Interesting Rebases</h3>
<div class="paragraph">
You can also have your rebase replay on something other than the rebase target branch.
Take a history like A history with a topic branch off another topic branch, for example.
You branched a topic branch (<code>server</code>) to add some server-side functionality to your project, and made a commit.
Then, you branched off that to make the client-side changes (<code>client</code>) and committed a few times.
Finally, you went back to your server branch and did a few more commits.
</div>
<div id="rbdiag_e" class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/interesting-rebase-1.png" alt="A history with a topic branch off another topic branch">
</div>
<div class="title">Figure 39. A history with a topic branch off another topic branch</div>
</div><br>
<div class="paragraph">
Suppose you decide that you want to merge your client-side changes into your mainline for a release, but you want to hold off on the server-side changes until it’s tested further.
You can take the changes on <code>client</code> that aren’t on <code>server</code> (<code>C8</code> and <code>C9</code>) and replay them on your <code>master</code> branch by using the <code>--onto</code> option of <code>git rebase</code>:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git rebase --onto master server client</blockquote></pre>
</div>
</div>
<div class="paragraph">
This basically says, “Take the <code>client</code> branch, figure out the patches since it diverged from the <code>server</code> branch, and replay these patches in the <code>client</code> branch as if it was based directly off the <code>master</code> branch instead.”
It’s a bit complex, but the result is pretty cool.
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/interesting-rebase-2.png" alt="Rebasing a topic branch off another topic branch">
</div>
<div class="title">Figure 40. Rebasing a topic branch off another topic branch</div>
</div><br>
<div class="paragraph">
Now you can fast-forward your <code>master</code> branch
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout master
$ git merge client</blockquote></pre>
</div>
</div>
<div id="rbdiag_g" class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/interesting-rebase-3.png" alt="Fast-forwarding your `master` branch to include the client branch changes">
</div>
<div class="title">Figure 41. Fast-forwarding your <code>master</code> branch to include the client branch changes</div>
</div><br>
<div class="paragraph">
Let’s say you decide to pull in your server branch as well.
You can rebase the <code>server</code> branch onto the <code>master</code> branch without having to check it out first by running <code>git rebase &lt;basebranch&gt; &lt;topicbranch&gt;</code>&thinsp;—&thinsp;which checks out the topic branch (in this case, <code>server</code>) for you and replays it onto the base branch (<code>master</code>):
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git rebase master server</blockquote></pre>
</div>
</div>
<div class="paragraph">
</div>
<div id="rbdiag_h" class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/interesting-rebase-4.png" alt="Rebasing your server branch on top of your `master` branch">
</div>
<div class="title">Figure 42. Rebasing your server branch on top of your <code>master</code> branch</div>
</div><br>
<div class="paragraph">
Then, you can fast-forward the base branch (<code>master</code>):
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout master
$ git merge server</blockquote></pre>
</div>
</div>
<div class="paragraph">
You can remove the <code>client</code> and <code>server</code> branches because all the work is integrated and you don’t need them anymore, leaving your history for this entire process looking like Final commit history:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch -d client
$ git branch -d server</blockquote></pre>
</div>
</div>
<div id="rbdiag_i" class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/interesting-rebase-5.png" alt="Final commit history">
</div>
<div class="title">Figure 43. Final commit history</div>
</div>
</div><br>
<div class="sect3">
<h3 id="_rebase_peril">The Perils of Rebasing</h3>
<div class="paragraph">

Ahh, but the bliss of rebasing isn’t without its drawbacks, which can be summed up in a single line:
</div>
<div class="paragraph">
<strong>Do not rebase commits that exist outside your repository and that people may have based work on.</strong>
</div>
<div class="paragraph">
If you follow that guideline, you’ll be fine.
If you don’t, people will hate you, and you’ll be scorned by friends and family.
</div><br>
<div class="paragraph">
When you rebase stuff, you’re abandoning existing commits and creating new ones that are similar but different.
If you push commits somewhere and others pull them down and base work on them, and then you rewrite those commits with <code>git rebase</code> and push them up again, your collaborators will have to re-merge their work and things will get messy when you try to pull their work back into yours.
</div><br>
<div class="paragraph">
Let’s look at an example of how rebasing work that you’ve made public can cause problems.
Suppose you clone from a central server and then do some work off that.
Your commit history looks like this:
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/perils-of-rebasing-1.png" alt="Clone a repository, and base some work on it.">
</div>
<div class="title">Figure 44. Clone a repository, and base some work on it</div>
</div><br>
<div class="paragraph">
Now, someone else does more work that includes a merge, and pushes that work to the central server.
You fetch it and merge the new remote branch into your work, making your history look something like this:
</div>
<div class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/perils-of-rebasing-2.png" alt="Fetch more commits, and merge them into your work.">
</div>
<div class="title">Figure 45. Fetch more commits, and merge them into your work</div>
</div><br>
<div class="paragraph">
Next, the person who pushed the merged work decides to go back and rebase their work instead; they do a <code>git push --force</code> to overwrite the history on the server.
You then fetch from that server, bringing down the new commits.
</div>
<div id="_pre_merge_rebase_work" class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/perils-of-rebasing-3.png" alt="Someone pushes rebased commits, abandoning commits you’ve based your work on.">
</div>
<div class="title">Figure 46. Someone pushes rebased commits, abandoning commits you’ve based your work on</div>
</div><br>
<div class="paragraph">
Now you’re both in a pickle.
If you do a <code>git pull</code>, you’ll create a merge commit which includes both lines of history, and your repository will look like this:
</div>
<div id="_merge_rebase_work" class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/perils-of-rebasing-4.png" alt="You merge in the same work again into a new merge commit">
</div>
<div class="title">Figure 47. You merge in the same work again into a new merge commit</div>
</div><br>
<div class="paragraph">
If you run a <code>git log</code> when your history looks like this, you’ll see two commits that have the same author, date, and message, which will be confusing.
Furthermore, if you push this history back up to the server, you’ll reintroduce all those rebased commits to the central server, which can further confuse people.
It’s pretty safe to assume that the other developer doesn’t want <code>C4</code> and <code>C6</code> to be in the history; that’s why they rebased in the first place.
</div>
</div>
<div class="sect3">
<h3 id="_rebase_rebase">Rebase When You Rebase</h3>
<div class="paragraph">
If you <strong>do</strong> find yourself in a situation like this, Git has some further magic that might help you out.
If someone on your team force pushes changes that overwrite work that you’ve based work on, your challenge is to figure out what is yours and what they’ve rewritten.
</div><br>
<div class="paragraph">
It turns out that in addition to the commit SHA-1 checksum, Git also calculates a checksum that is based just on the patch introduced with the commit.
This is called a “patch-id”.
</div><br>
<div class="paragraph">
If you pull down work that was rewritten and rebase it on top of the new commits from your partner, Git can often successfully figure out what is uniquely yours and apply them back on top of the new branch.
</div><br>
<div class="paragraph">
For instance, in the previous scenario, if instead of doing a merge when we’re at Someone pushes rebased commits, abandoning commits you’ve based your work openNav we run <code>git rebase teamone/master</code>, Git will:
</div>
<div class="ulist">
<ul>
<li>
Determine what work is unique to our branch (C2, C3, C4, C6, C7)
</li>
<li>
Determine which are not merge commits (C2, C3, C4)
</li>
<li>
Determine which have not been rewritten into the target branch (just C2 and C3, since C4 is the same patch as C4')
</li>
<li>
Apply those commits to the top of <code>teamone/master</code>
</li>
</ul>
</div>
<div id="_rebase_rebase_work" class="imageblock">
<div class="content">
<br><img src="https://git-scm.com/book/en/v2/images/perils-of-rebasing-5.png" alt="Rebase on top of force-pushed rebase work">
</div>
<div class="title">Figure 48. Rebase on top of force-pushed rebase work</div>
</div><br>
<div class="paragraph">
This only works if <code>C4</code> and <code>C4'</code> that your partner made are almost exactly the same patch.
Otherwise the rebase won’t be able to tell that it’s a duplicate and will add another C4-like patch (which will probably fail to apply cleanly, since the changes would already be at least somewhat there).
</div><br>  
<div class="paragraph">
You can also simplify this by running a <code>git pull --rebase</code> instead of a normal <code>git pull</code>.
Or you could do it manually with a <code>git fetch</code> followed by a <code>git rebase teamone/master</code> in this case.
</div><br>
<div class="paragraph">
If you are using <code>git pull</code> and want to make <code>--rebase</code> the default, you can set the <code>pull.rebase</code> config value with something like <code>git config --global pull.rebase true</code>.
</div><br>
<div class="paragraph">
If you only ever rebase commits that have never left your own computer, you’ll be just fine.
If you rebase commits that have been pushed, but that no one else has based commits from, you’ll also be fine.
If you rebase commits that have already been pushed publicly, and people may have based work on those commits, then you may be in for some frustrating trouble, and the scorn of your teammates.
</div><br>
<div class="paragraph">
If you or a partner does find it necessary at some point, make sure everyone knows to run <code>git pull --rebase</code> to try to make the pain after it happens a little bit simpler.
</div>
</div>
<div class="sect3">
<h3 id="_rebase_vs_merge">Rebase vs. Merge</h3>
<div class="paragraph">

Now that you’ve seen rebasing and merging in action, you may be wondering which one is better.
Before we can answer this, let’s step back a bit and talk about what history means.
</div><br>
<div class="paragraph">
One point of view on this is that your repository’s commit history is a <strong>record of what actually happened.</strong>
It’s a historical document, valuable in its own right, and shouldn’t be tampered with.
From this angle, changing the commit history is almost blasphemous; you’re <em>lying</em> about what actually transpired.
So what if there was a messy series of merge commits?
That’s how it happened, and the repository should preserve that for posterity.
</div><br>
<div class="paragraph">
The opposing point of view is that the commit history is the <strong>story of how your project was made.</strong>
You wouldn’t publish the first draft of a book, so why show your messy work?
When you’re working on a project, you may need a record of all your missteps and dead-end paths, but when it’s time to show your work to the world, you may want to tell a more coherent story of how to get from A to B.
People in this camp use tools like rebase and filter-branch to rewrite their commits before they’re merged into the mainline branch.
They use tools like <code>rebase</code> and <code>filter-branch</code>, to tell the story in the way that’s best for future readers.
</div><br>
<div class="paragraph">
Now, to the question of whether merging or rebasing is better: hopefully you’ll see that it’s not that simple.
Git is a powerful tool, and allows you to do many things to and with your history, but every team and every project is different.
Now that you know how both of these things work, it’s up to you to decide which one is best for your particular situation.
</div><br>
<div class="paragraph">
You can get the best of both worlds: rebase local changes before pushing to clean up your work, but never rebase anything that you’ve pushed somewhere.
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