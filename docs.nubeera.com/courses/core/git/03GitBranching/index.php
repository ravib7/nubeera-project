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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Branches in a Nutshell</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Git Branching</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
  <div>
Nearly every VCS has some form of branching support.
Branching means you diverge from the main line of development and continue to do work without messing with that main line.
In many VCS tools, this is a somewhat expensive process, often requiring you to create a new copy of your source code directory, which can take a long time for large projects.
</div><br>
Some people refer to Git’s branching model as its “killer feature,” and it certainly sets Git apart in the VCS community.
Why is it so special?
The way Git branches is incredibly lightweight, making branching operations nearly instantaneous, and switching back and forth between branches generally just as fast.
Unlike many other VCSs, Git encourages workflows that branch and merge often, even multiple times in a day.
Understanding and mastering this feature gives you a powerful and unique tool and can entirely change the way that you develop.
<h2 id="_git_branches_overview">Branches in a Nutshell</h2>
<div class="paragraph">
To really understand the way Git does branching, we need to take a step back and examine how Git stores its data.
</div><br>
<div class="paragraph">
As you may remember from, Git doesn’t store data as a series of changesets or differences, but instead as a series of <em>snapshots</em>.
</div><br>
<div class="paragraph">
When you make a commit, Git stores a commit object that contains a pointer to the snapshot of the content you staged.
This object also contains the author’s name and email address, the message that you typed, and pointers to the commit or commits that directly came before this commit (its parent or parents): zero parents for the initial commit, one parent for a normal commit, and multiple parents for a commit that results from a merge of two or more branches.
</div><br>
<div class="paragraph">
To visualize this, let’s assume that you have a directory containing three files, and you stage them all and commit.
Staging the files computes a checksum for each one, stores that version of the file in the Git repository (Git refers to them as <em>blobs</em>), and adds that checksum to the staging area:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git add README test.rb LICENSE
$ git commit -m 'Initial commit'</blockquote></pre>
</div>
</div>
<div class="paragraph">
When you create the commit by running <code>git commit</code>, Git checksums each subdirectory (in this case, just the root project directory) and stores them as a tree object in the Git repository.
Git then creates a commit object that has the metadata and a pointer to the root project tree so it can re-create that snapshot when needed.
</div><br>
<div class="paragraph">
Your Git repository now contains five objects: three <em>blobs</em> (each representing the contents of one of the three files), one <em>tree</em> that lists the contents of the directory and specifies which file names are stored as which blobs, and one <em>commit</em> with the pointer to that root tree and all the commit metadata.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/commit-and-tree.png" alt="A commit and its tree">
</div>
<div class="title">Figure 9. A commit and its tree</div>
</div><br><br>
<div class="paragraph">
If you make some changes and commit again, the next commit stores a pointer to the commit that came immediately before it.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/commits-and-parents.png" alt="Commits and their parents">
</div>
<div class="title">Figure 10. Commits and their parents</div>
</div><br><br>
<div class="paragraph">
A branch in Git is simply a lightweight movable pointer to one of these commits.
The default branch name in Git is <code>master</code>.
As you start making commits, you’re given a <code>master</code> branch that points to the last commit you made.
Every time you commit, the <code>master</code> branch pointer moves forward automatically.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/branch-and-history.png" alt="A branch and its commit history">
</div>
<div class="title">Figure 11. A branch and its commit history</div>
</div><br><br>
<div class="sect3">
<h3 id="_create_new_branch">Creating a New Branch</h3>
<div class="paragraph">

What happens when you create a new branch?
Well, doing so creates a new pointer for you to move around.
Let’s say you want to create a new branch called <code>testing</code>.
You do this with the <code>git branch</code> command:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch testing</blockquote></pre>
</div>
</div>
<div class="paragraph">
This creates a new pointer to the same commit you’re currently on.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/two-branches.png" alt="Two branches pointing into the same series of commits">
</div>
<div class="title">Figure 12. Two branches pointing into the same series of commits</div>
</div><br><br>
<div class="paragraph">
How does Git know what branch you’re currently on?
It keeps a special pointer called <code>HEAD</code>.
Note that this is a lot different than the concept of <code>HEAD</code> in other VCSs you may be used to, such as Subversion or CVS.
In Git, this is a pointer to the local branch you’re currently on.
In this case, you’re still on <code>master</code>.
The <code>git branch</code> command only <em>created</em> a new branch&thinsp;—&thinsp;it didn’t switch to that branch.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/head-to-master.png" alt="HEAD pointing to a branch">
</div>
<div class="title">Figure 13. HEAD pointing to a branch</div>
</div><br><br>
<div class="paragraph">
You can easily see this by running a simple <code>git log</code> command that shows you where the branch pointers are pointing.
This option is called <code>--decorate</code>.
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log --oneline --decorate
f30ab (HEAD -&gt; master, testing) Add feature #32 - ability to add new formats to the central interface
34ac2 Fix bug #1328 - stack overflow under certain conditions
98ca9 Initial commit</pre>
</div>
</div>
<div class="paragraph">
You can see the <code>master</code> and <code>testing</code> branches that are right there next to the <code>f30ab</code> commit.
</div>
</div>
<div class="sect3">
<h3 id="_switching_branches">Switching Branches</h3>
<div class="paragraph">

To switch to an existing branch, you run the <code>git checkout</code> command.
Let’s switch to the new <code>testing</code> branch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout testing</blockquote></pre>
</div>
</div>
<div class="paragraph">
This moves <code>HEAD</code> to point to the <code>testing</code> branch.
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/head-to-testing.png" alt="HEAD points to the current branch">
</div>
<div class="title">Figure 14. HEAD points to the current branch</div>
</div><br><br>
<div class="paragraph">
What is the significance of that?
Well, let’s do another commit:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ vim test.rb
$ git commit -a -m 'made a change'</blockquote></pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/advance-testing.png" alt="The HEAD branch moves forward when a commit is made">
</div>
<div class="title">Figure 15. The HEAD branch moves forward when a commit is made</div>
</div><br><br>
<div class="paragraph">
This is interesting, because now your <code>testing</code> branch has moved forward, but your <code>master</code> branch still points to the commit you were on when you ran <code>git checkout</code> to switch branches.
Let’s switch back to the <code>master</code> branch:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git checkout master</blockquote></pre>
</div>
</div>
<div class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/checkout-master.png" alt="HEAD moves when you checkout">
</div>
<div class="title">Figure 16. HEAD moves when you checkout</div>
</div><br><br>
<div class="paragraph">
That command did two things.
It moved the HEAD pointer back to point to the <code>master</code> branch, and it reverted the files in your working directory back to the snapshot that <code>master</code> points to.
This also means the changes you make from this point forward will diverge from an older version of the project.
It essentially rewinds the work you’ve done in your <code>testing</code> branch so you can go in a different direction.
</div>
<div class="paragraph">
Let’s make a few changes and commit again:
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ vim test.rb
$ git commit -a -m 'made other changes'</blockquote></pre>
</div>
</div>
<div class="paragraph">
Now your project history has diverged.
You created and switched to a branch, did some work on it, and then switched back to your main branch and did other work.
Both of those changes are isolated in separate branches: you can switch back and forth between the branches and merge them together when you’re ready.
And you did all that with simple <code>branch</code>, <code>checkout</code>, and <code>commit</code> commands.
</div>
<div id="divergent_history" class="imageblock">
<div class="content">
<br><br><img src="https://git-scm.com/book/en/v2/images/advance-master.png" alt="Divergent history">
</div>
<div class="title">Figure 17. Divergent history</div>
</div><br><br>
<div class="paragraph">
You can also see this easily with the <code>git log</code> command.
If you run <code>git log --oneline --decorate --graph --all</code> it will print out the history of your commits, showing where your branch pointers are and how your history has diverged.
</div>
<div class="listingblock">
<div class="content">
<pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log --oneline --decorate --graph --all
* c2b9e (HEAD, master) Made other changes
| * 87ab2 (testing) Made a change
|/
* f30ab Add feature #32 - ability to add new formats to the central interface
* 34ac2 Fix bug #1328 - stack overflow under certain conditions
* 98ca9 initial commit of my project</blockquote></pre>
</div>
</div>
<div class="paragraph">
Because a branch in Git is actually a simple file that contains the 40 character SHA-1 checksum of the commit it points to, branches are cheap to create and destroy.
Creating a new branch is as quick and simple as writing 41 bytes to a file (40 characters and a newline).
</div><br>
<div class="paragraph">
This is in sharp contrast to the way most older VCS tools branch, which involves copying all of the project’s files into a second directory.
This can take several seconds or even minutes, depending on the size of the project, whereas in Git the process is always instantaneous.
Also, because we’re recording the parents when we commit, finding a proper merge base for merging is automatically done for us and is generally very easy to do.
These features help encourage developers to create and use branches often.
</div><br>
<div class="paragraph">
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