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
                <strong class="px-2" style="font-size: 1.125rem;">Git and other Systems</strong><br><br>
                <ul>
                        <li><a href="index.php">Git as a Client</a></li>
                        <li><a href="MigratingToGit.php">Migrating to Git</a></li>
                    </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Migrating to Git</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">Git and other Systems</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <div class="paragraph">

                    If you have an existing codebase in another VCS but you’ve decided to start using Git, you must migrate your project one way or another.
                    This section goes over some importers for common systems, and then demonstrates how to develop your own custom importer.
                    You’ll learn how to import data from several of the bigger professionally used SCM systems, because they make up the majority of users who are switching, and because high-quality tools for them are easy to come by.
                </div>
                <div class="sect3">
                    <h3 id="_subversion">Subversion</h3>
                    <div class="paragraph">


                        If you read the previous section about using <code>git svn</code>, you can easily use those instructions to <code>git svn clone</code> a repository; then, stop using the Subversion server, push to a new Git server, and start using that.
                        If you want the history, you can accomplish that as quickly as you can pull the data out of the Subversion server (which may take a while).
                    </div><br>
                    <div class="paragraph">
                        However, the import isn’t perfect; and because it will take so long, you may as well do it right.
                        The first problem is the author information.
                        In Subversion, each person committing has a user on the system who is recorded in the commit information.
                        The examples in the previous section show <code>schacon</code> in some places, such as the <code>blame</code> output and the <code>git svn log</code>.
                        If you want to map this to better Git author data, you need a mapping from the Subversion users to the Git authors.
                        Create a file called <code>users.txt</code> that has this mapping in a format like this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote>schacon = Scott Chacon &lt;schacon@geemail.com&gt;
selse = Someo Nelse &lt;selse@geemail.com&gt;</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        To get a list of the author names that SVN uses, you can run this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ svn log --xml --quiet | grep author | sort -u | \
  perl -pe 's/.*&gt;(.*?)&lt;.*/$1 = /'</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        That generates the log output in XML format, then keeps only the lines with author information, discards duplicates, strips out the XML tags.
                        Obviously this only works on a machine with <code>grep</code>, <code>sort</code>, and <code>perl</code> installed.
                        Then, redirect that output into your <code>users.txt</code> file so you can add the equivalent Git user data next to each entry.
                    </div>
                    <div class="paragraph">
                        You can provide this file to <code>git svn</code> to help it map the author data more accurately.
                        You can also tell <code>git svn</code> not to include the metadata that Subversion normally imports, by passing <code>--no-metadata</code> to the <code>clone</code> or <code>init</code> command.
                        The metadata includes a <code>git-svn-id</code> inside each commit message that Git will generate during import.
                        This can bloat your Git log and might make it a bit unclear.
                    </div>
                    <div class="paragraph">
                        This makes your <code>import</code> command look like this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git svn clone http://my-project.googlecode.com/svn/ \
      --authors-file=users.txt --no-metadata --prefix "" -s my_project
$ cd my_project</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        Now you should have a nicer Subversion import in your <code>my_project</code> directory.
                        Instead of commits that look like this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote>commit 37efa680e8473b615de980fa935944215428a35a
Author: schacon &lt;schacon@4c93b258-373f-11de-be05-5f7a86268029&gt;
Date:   Sun May 3 00:12:22 2009 +0000

    fixed install - go to trunk

    git-svn-id: https://my-project.googlecode.com/svn/trunk@94 4c93b258-373f-11de-
    be05-5f7a86268029</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        they look like this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote>commit 03a8785f44c8ea5cdb0e8834b7c8e6c469be2ff2
Author: Scott Chacon &lt;schacon@geemail.com&gt;
Date:   Sun May 3 00:12:22 2009 +0000

    fixed install - go to trunk</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        Not only does the Author field look a lot better, but the <code>git-svn-id</code> is no longer there, either.
                    </div><br>
                    <div class="paragraph">
                        You should also do a bit of post-import cleanup.
                        For one thing, you should clean up the weird references that <code>git svn</code> set up.
                        First you’ll move the tags so they’re actual tags rather than strange remote branches, and then you’ll move the rest of the branches so they’re local.
                    </div><br>
                    <div class="paragraph">
                        To move the tags to be proper Git tags, run:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ for t in $(git for-each-ref --format='%(refname:short)' refs/remotes/tags); do git tag ${t/tags\//} $t &amp;&amp; git branch -D -r $t; done</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        This takes the references that were remote branches that started with <code>refs/remotes/tags/</code> and makes them real (lightweight) tags.
                    </div><br>
                    <div class="paragraph">
                        Next, move the rest of the references under <code>refs/remotes</code> to be local branches:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ for b in $(git for-each-ref --format='%(refname:short)' refs/remotes); do git branch $b refs/remotes/$b &amp;&amp; git branch -D -r $b; done</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        It may happen that you’ll see some extra branches which are suffixed by <code>@xxx</code> (where xxx is a number), while in Subversion you only see one branch.
                        This is actually a Subversion feature called “peg-revisions”, which is something that Git simply has no syntactical counterpart for.
                        Hence, <code>git svn</code> simply adds the svn version number to the branch name just in the same way as you would have written it in svn to address the peg-revision of that branch.
                        If you do not care anymore about the peg-revisions, simply remove them:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ for p in $(git for-each-ref --format='%(refname:short)' | grep @); do git branch -D $p; done</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        Now all the old branches are real Git branches and all the old tags are real Git tags.
                    </div><br>
                    <div class="paragraph">
                        There’s one last thing to clean up.
                        Unfortunately, <code>git svn</code> creates an extra branch named <code>trunk</code>, which maps to Subversion’s default branch, but the <code>trunk</code> ref points to the same place as <code>master</code>.
                        Since <code>master</code> is more idiomatically Git, here’s how to remove the extra branch:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git branch -d trunk</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        The last thing to do is add your new Git server as a remote and push to it.
                        Here is an example of adding your server as a remote:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote add origin git@my-git-server:myrepository.git</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        Because you want all your branches and tags to go up, you can now run this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git push origin --all
$ git push origin --tags</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        All your branches and tags should be on your new Git server in a nice, clean import.
                    </div>
                </div>
                <div class="sect3">
                    <h3 id="_mercurial">Mercurial</h3>
                    <div class="paragraph">

                        Since Mercurial and Git have fairly similar models for representing versions, and since Git is a bit more flexible, converting a repository from Mercurial to Git is fairly straightforward, using a tool called "hg-fast-export", which you’ll need a copy of:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git clone https://github.com/frej/fast-export.git</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        The first step in the conversion is to get a full clone of the Mercurial repository you want to convert:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ hg clone &lt;remote repo URL&gt; /tmp/hg-repo</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        The next step is to create an author mapping file.
                        Mercurial is a bit more forgiving than Git for what it will put in the author field for changesets, so this is a good time to clean house.
                        Generating this is a one-line command in a <code>bash</code> shell:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ cd /tmp/hg-repo
$ hg log | grep user: | sort | uniq | sed 's/user: *//' &gt; ../authors</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        This will take a few seconds, depending on how long your project’s history is, and afterwards the <code>/tmp/authors</code> file will look something like this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote>bob
bob@localhost
bob &lt;bob@company.com&gt;
bob jones &lt;bob &lt;AT&gt; company &lt;DOT&gt; com&gt;
Bob Jones &lt;bob@company.com&gt;
Joe Smith &lt;joe@company.com&gt;</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        In this example, the same person (Bob) has created changesets under four different names, one of which actually looks correct, and one of which would be completely invalid for a Git commit.
                        Hg-fast-export lets us fix this by turning each line into a rule: <code>"&lt;input&gt;"="&lt;output&gt;"</code>, mapping an <code>&lt;input&gt;</code> to an <code>&lt;output&gt;</code>.
                        Inside the <code>&lt;input&gt;</code> and <code>&lt;output&gt;</code> strings, all escape sequences understood by the python <code>string_escape</code> encoding are supported.
                        If the author mapping file does not contain a matching <code>&lt;input&gt;</code>, that author will be sent on to Git unmodified.
                        If all the usernames look fine, we won’t need this file at all.
                        In this example, we want our file to look like this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote>"bob"="Bob Jones &lt;bob@company.com&gt;"
"bob@localhost"="Bob Jones &lt;bob@company.com&gt;"
"bob &lt;bob@company.com&gt;"="Bob Jones &lt;bob@company.com&gt;"
"bob jones &lt;bob &lt;AT&gt; company &lt;DOT&gt; com&gt;"="Bob Jones &lt;bob@company.com&gt;"</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        The same kind of mapping file can be used to rename branches and tags when the Mercurial name is not allowed by Git.
                    </div><br>
                    <div class="paragraph">
                        The next step is to create our new Git repository, and run the export script:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git init /tmp/converted
$ cd /tmp/converted
$ /tmp/fast-export/hg-fast-export.sh -r /tmp/hg-repo -A /tmp/authors</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        The <code>-r</code> flag tells hg-fast-export where to find the Mercurial repository we want to convert, and the <code>-A</code> flag tells it where to find the author-mapping file (branch and tag mapping files are specified by the <code>-B</code> and <code>-T</code> flags respectively).
                        The script parses Mercurial changesets and converts them into a script for Git’s "fast-import" feature (which we’ll discuss in detail a bit later on).
                        This takes a bit (though it’s <em>much</em> faster than it would be over the network), and the output is fairly verbose:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ /tmp/fast-export/hg-fast-export.sh -r /tmp/hg-repo -A /tmp/authors
Loaded 4 authors
master: Exporting full revision 1/22208 with 13/0/0 added/changed/removed files
master: Exporting simple delta revision 2/22208 with 1/1/0 added/changed/removed files
master: Exporting simple delta revision 3/22208 with 0/1/0 added/changed/removed files
[…]
master: Exporting simple delta revision 22206/22208 with 0/4/0 added/changed/removed files
master: Exporting simple delta revision 22207/22208 with 0/2/0 added/changed/removed files
master: Exporting thorough delta revision 22208/22208 with 3/213/0 added/changed/removed files
Exporting tag [0.4c] at [hg r9] [git :10]
Exporting tag [0.4d] at [hg r16] [git :17]
[…]
Exporting tag [3.1-rc] at [hg r21926] [git :21927]
Exporting tag [3.1] at [hg r21973] [git :21974]
Issued 22315 commands
git-fast-import statistics:
---------------------------------------------------------------------
Alloc'd objects:     120000
Total objects:       115032 (    208171 duplicates                  )
      blobs  :        40504 (    205320 duplicates      26117 deltas of      39602 attempts)
      trees  :        52320 (      2851 duplicates      47467 deltas of      47599 attempts)
      commits:        22208 (         0 duplicates          0 deltas of          0 attempts)
      tags   :            0 (         0 duplicates          0 deltas of          0 attempts)
Total branches:         109 (         2 loads     )
      marks:        1048576 (     22208 unique    )
      atoms:           1952
Memory total:          7860 KiB
       pools:          2235 KiB
     objects:          5625 KiB
---------------------------------------------------------------------
pack_report: getpagesize()            =       4096
pack_report: core.packedGitWindowSize = 1073741824
pack_report: core.packedGitLimit      = 8589934592
pack_report: pack_used_ctr            =      90430
pack_report: pack_mmap_calls          =      46771
pack_report: pack_open_windows        =          1 /          1
pack_report: pack_mapped              =  340852700 /  340852700
---------------------------------------------------------------------

$ git shortlog -sn
   369  Bob Jones
   365  Joe Smith</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        That’s pretty much all there is to it.
                        All of the Mercurial tags have been converted to Git tags, and Mercurial branches and bookmarks have been converted to Git branches.
                        Now you’re ready to push the repository up to its new server-side home:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote add origin git@my-git-server:myrepository.git
$ git push origin --all</blockquote></pre>
                        </div>
                    </div>
                </div>
                <div class="sect3">
                    <h3 id="_bazaar">Bazaar</h3>
                    <div class="paragraph">

                    </div>
                    <div class="paragraph">
                        Bazaar is a DVCS tool much like Git, and as a result it’s pretty straightforward to convert a Bazaar repository into a Git one.
                        To accomplish this, you’ll need to import the <code>bzr-fastimport</code> plugin.
                    </div>
                    <div class="sect4">
                        <h4 id="_getting_the_bzr_fastimport_plugin">Getting the bzr-fastimport plugin</h4>
                        <div class="paragraph">
                            The procedure for installing the fastimport plugin is different on UNIX-like operating systems and on Windows.
                            In the first case, the simplest is to install the <code>bzr-fastimport</code> package that will install all the required dependencies.
                        </div><br>
                        <div class="paragraph">
                            For example, with Debian and derived, you would do the following:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ sudo apt-get install bzr-fastimport</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            With RHEL, you would do the following:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ sudo yum install bzr-fastimport</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            With Fedora, since release 22, the new package manager is dnf:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ sudo dnf install bzr-fastimport</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            If the package is not available, you may install it as a plugin:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ mkdir --parents ~/.bazaar/plugins     # creates the necessary folders for the plugins
$ cd ~/.bazaar/plugins
$ bzr branch lp:bzr-fastimport fastimport   # imports the fastimport plugin
$ cd fastimport
$ sudo python setup.py install --record=files.txt   # installs the plugin</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            For this plugin to work, you’ll also need the <code>fastimport</code> Python module.
                            You can check whether it is present or not and install it with the following commands:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ python -c "import fastimport"
Traceback (most recent call last):
  File "&lt;string&gt;", line 1, in &lt;module&gt;
ImportError: No module named fastimport
$ pip install fastimport</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            If it is not available, you can download it at address <a href="https://pypi.python.org/pypi/fastimport/" class="bare">https://pypi.python.org/pypi/fastimport/</a>.
                        </div><br>
                        <div class="paragraph">
                            In the second case (on Windows), <code>bzr-fastimport</code> is automatically installed with the standalone version and the default installation (let all the checkboxes checked).
                            So in this case you have nothing to do.
                        </div><br>
                        <div class="paragraph">
                            At this point, the way to import a Bazaar repository differs according to that you have a single branch or you are working with a repository that has several branches.
                        </div>
                    </div>
                    <div class="sect4">
                        <h4 id="_project_with_a_single_branch">Project with a single branch</h4>
                        <div class="paragraph">
                            Now <code>cd</code> in the directory that contains your Bazaar repository and initialize the Git repository:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ cd /path/to/the/bzr/repository
$ git init</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            Now, you can simply export your Bazaar repository and convert it into a Git repository using the following command:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ bzr fast-export --plain . | git fast-import</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            Depending on the size of the project, your Git repository is built in a lapse from a few seconds to a few minutes.
                        </div>
                    </div>
                    <div class="sect4">
                        <h4 id="_case_of_a_project_with_a_main_branch_and_a_working_branch">Case of a project with a main branch and a working branch</h4>
                        <div class="paragraph">
                            You can also import a Bazaar repository that contains branches.
                            Let us suppose that you have two branches: one represents the main branch (myProject.trunk), the other one is the working branch (myProject.work).
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ ls
myProject.trunk myProject.work</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            Create the Git repository and <code>cd</code> into it:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git init git-repo
$ cd git-repo</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            Pull the <code>master</code> branch into git:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ bzr fast-export --export-marks=../marks.bzr ../myProject.trunk | \
git fast-import --export-marks=../marks.git</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            Pull the working branch into Git:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ bzr fast-export --marks=../marks.bzr --git-branch=work ../myProject.work | \
git fast-import --import-marks=../marks.git --export-marks=../marks.git</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            Now <code>git branch</code> shows you the <code>master</code> branch as well as the <code>work</code> branch.
                            Check the logs to make sure they’re complete and get rid of the <code>marks.bzr</code> and <code>marks.git</code> files.
                        </div>
                    </div>
                    <div class="sect4">
                        <h4 id="_synchronizing_the_staging_area">Synchronizing the staging area</h4>
                        <div class="paragraph">
                            Whatever the number of branches you had and the import method you used, your staging area is not synchronized with <code>HEAD</code>, and with the import of several branches, your working directory is not synchronized either.
                            This situation is easily solved by the following command:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git reset --hard HEAD</blockquote></pre>
                            </div>
                        </div>
                    </div>
                    <div class="sect4">
                        <h4 id="_ignoring_the_files_that_were_ignored_with_bzrignore">Ignoring the files that were ignored with .bzrignore</h4>
                        <div class="paragraph">
                            Now let’s have a look at the files to ignore.
                            The first thing to do is to rename <code>.bzrignore</code> into <code>.gitignore</code>.
                            If the <code>.bzrignore</code> file contains one or several lines starting with "!!" or "RE:", you’ll have to modify it and perhaps create several <code>.gitignore</code> files in order to ignore exactly the same files that Bazaar was ignoring.
                        </div><br>
                        <div class="paragraph">
                            Finally, you will have to create a commit that contains this modification for the migration:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git mv .bzrignore .gitignore
$ # modify .gitignore if needed
$ git commit -am 'Migration from Bazaar to Git'</blockquote></pre>
                            </div>
                        </div>
                    </div>
                    <div class="sect4">
                        <h4 id="_sending_your_repository_to_the_server">Sending your repository to the server</h4>
                        <div class="paragraph">
                            Here we are!
                            Now you can push the repository onto its new home server:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git remote add origin git@my-git-server:mygitrepository.git
$ git push origin --all
$ git push origin --tags</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            Your Git repository is ready to use.
                        </div>
                    </div>
                </div>
                <div class="sect3">
                    <h3 id="_perforce_import">Perforce</h3>
                    <div class="paragraph">

                        The next system you’ll look at importing from is Perforce.
                        As we discussed above, there are two ways to let Git and Perforce talk to each other: git-p4 and Perforce Git Fusion.
                    </div>
                    <div class="sect4">
                        <h4 id="_perforce_git_fusion">Perforce Git Fusion</h4>
                        <div class="paragraph">
                            Git Fusion makes this process fairly painless.
                            Just configure your project settings, user mappings, and branches using a configuration file, and clone the repository.
                            Git Fusion leaves you with what looks like a native Git repository, which is then ready to push to a native Git host if you desire.
                            You could even use Perforce as your Git host if you like.
                        </div>
                    </div>
                    <div class="sect4">
                        <h4 id="_git_p4">Git-p4</h4>
                        <div class="paragraph">
                            Git-p4 can also act as an import tool.
                            As an example, we’ll import the Jam project from the Perforce Public Depot.
                            To set up your client, you must export the P4PORT environment variable to point to the Perforce depot:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ export P4PORT=public.perforce.com:1666</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">

                            Run the <code>git p4 clone</code> command to import the Jam project from the Perforce server, supplying the depot and project path and the path into which you want to import the project:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git-p4 clone //guest/perforce_software/jam@all p4import
Importing from //guest/perforce_software/jam@all into p4import
Initialized empty Git repository in /private/tmp/p4import/.git/
Import destination: refs/remotes/p4/master
Importing revision 9957 (100%)</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            This particular project has only one branch, but if you have branches that are configured with branch views (or just a set of directories), you can use the <code>--detect-branches</code> flag to <code>git p4 clone</code> to import all the project’s branches as well.
                        </div><br>
                        <div class="paragraph">
                            At this point you’re almost done.
                            If you go to the <code>p4import</code> directory and run <code>git log</code>, you can see your imported work:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log -2
commit e5da1c909e5db3036475419f6379f2c73710c4e6
Author: giles &lt;giles@giles@perforce.com&gt;
Date:   Wed Feb 8 03:13:27 2012 -0800

    Correction to line 355; change &lt;/UL&gt; to &lt;/OL&gt;.

    [git-p4: depot-paths = "//public/jam/src/": change = 8068]

commit aa21359a0a135dda85c50a7f7cf249e4f7b8fd98
Author: kwirth &lt;kwirth@perforce.com&gt;
Date:   Tue Jul 7 01:35:51 2009 -0800

    Fix spelling error on Jam doc page (cummulative -&gt; cumulative).

    [git-p4: depot-paths = "//public/jam/src/": change = 7304]</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            You can see that <code>git-p4</code> has left an identifier in each commit message.
                            It’s fine to keep that identifier there, in case you need to reference the Perforce change number later.
                            However, if you’d like to remove the identifier, now is the time to do so – before you start doing work on the new repository.

                            You can use <code>git filter-branch</code> to remove the identifier strings en masse:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git filter-branch --msg-filter 'sed -e "/^\[git-p4:/d"'
Rewrite e5da1c909e5db3036475419f6379f2c73710c4e6 (125/125)
Ref 'refs/heads/master' was rewritten</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            If you run <code>git log</code>, you can see that all the SHA-1 checksums for the commits have changed, but the <code>git-p4</code> strings are no longer in the commit messages:
                        </div>
                        <div class="listingblock">
                            <div class="content">
                                <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log -2
commit b17341801ed838d97f7800a54a6f9b95750839b7
Author: giles &lt;giles@giles@perforce.com&gt;
Date:   Wed Feb 8 03:13:27 2012 -0800

    Correction to line 355; change &lt;/UL&gt; to &lt;/OL&gt;.

commit 3e68c2e26cd89cb983eb52c024ecdfba1d6b3fff
Author: kwirth &lt;kwirth@perforce.com&gt;
Date:   Tue Jul 7 01:35:51 2009 -0800

    Fix spelling error on Jam doc page (cummulative -&gt; cumulative).</blockquote></pre>
                            </div>
                        </div>
                        <div class="paragraph">
                            Your import is ready to push up to your new Git server.
                        </div>
                    </div>
                </div>
                <div class="sect3">
                    <h3 id="_custom_importer">A Custom Importer</h3>
                    <div class="paragraph">


                        If your system isn’t one of the above, you should look for an importer online – quality importers are available for many other systems, including CVS, Clear Case, Visual Source Safe, even a directory of archives.
                        If none of these tools works for you, you have a more obscure tool, or you otherwise need a more custom importing process, you should use <code>git fast-import</code>.
                        This command reads simple instructions from stdin to write specific Git data.
                        It’s much easier to create Git objects this way than to run the raw Git commands or try to write the raw objects.
                        This way, you can write an import script that reads the necessary information out of the system you’re importing from and prints straightforward instructions to stdout.
                        You can then run this program and pipe its output through <code>git fast-import</code>.
                    </div><br>
                    <div class="paragraph">
                        To quickly demonstrate, you’ll write a simple importer.
                        Suppose you work in <code>current</code>, you back up your project by occasionally copying the directory into a time-stamped <code>back_YYYY_MM_DD</code> backup directory, and you want to import this into Git.
                        Your directory structure looks like this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ ls /opt/import_from
back_2014_01_02
back_2014_01_04
back_2014_01_14
back_2014_02_03
current</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        In order to import a Git directory, you need to review how Git stores its data.
                        As you may remember, Git is fundamentally a linked list of commit objects that point to a snapshot of content.
                        All you have to do is tell <code>fast-import</code> what the content snapshots are, what commit data points to them, and the order they go in.
                        Your strategy will be to go through the snapshots one at a time and create commits with the contents of each directory, linking each commit back to the previous one.
                    </div><br>
                    <div class="paragraph">
                        As we did in An Example Git-Enforced Policy, we’ll write this in Ruby, because it’s what we generally work with and it tends to be easy to read.
                        You can write this example pretty easily in anything you’re familiar with – it just needs to print the appropriate information to <code>stdout</code>.
                        And, if you are running on Windows, this means you’ll need to take special care to not introduce carriage returns at the end your lines – <code>git fast-import</code> is very particular about just wanting line feeds (LF) not the carriage return line feeds (CRLF) that Windows uses.
                    </div><br>
                    <div class="paragraph">
                        To begin, you’ll change into the target directory and identify every subdirectory, each of which is a snapshot that you want to import as a commit.
                        You’ll change into each subdirectory and print the commands necessary to export it.
                        Your basic main loop looks like this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">last_mark = nil

# loop through the directories
Dir.chdir(ARGV[0]) do
  Dir.glob("*").each do |dir|
    next if File.file?(dir)

    # move into the target directory
    Dir.chdir(dir) do
      last_mark = print_export(dir, last_mark)
    end
  end
end</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        You run <code>print_export</code> inside each directory, which takes the manifest and mark of the previous snapshot and returns the manifest and mark of this one; that way, you can link them properly.
                        “Mark” is the <code>fast-import</code> term for an identifier you give to a commit; as you create commits, you give each one a mark that you can use to link to it from other commits.
                        So, the first thing to do in your <code>print_export</code> method is generate a mark from the directory name:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">mark = convert_dir_to_mark(dir)</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        You’ll do this by creating an array of directories and using the index value as the mark, because a mark must be an integer.
                        Your method looks like this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">$marks = []
def convert_dir_to_mark(dir)
  if !$marks.include?(dir)
    $marks &lt;&lt; dir
  end
  ($marks.index(dir) + 1).to_s
end</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        Now that you have an integer representation of your commit, you need a date for the commit metadata.
                        Because the date is expressed in the name of the directory, you’ll parse it out.
                        The next line in your <code>print_export</code> file is:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">date = convert_dir_to_date(dir)</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        where <code>convert_dir_to_date</code> is defined as:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">def convert_dir_to_date(dir)
  if dir == 'current'
    return Time.now().to_i
  else
    dir = dir.gsub('back_', '')
    (year, month, day) = dir.split('_')
    return Time.local(year, month, day).to_i
  end
end</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        That returns an integer value for the date of each directory.
                        The last piece of meta-information you need for each commit is the committer data, which you hardcode in a global variable:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">$author = 'John Doe &lt;john@example.com&gt;'</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        Now you’re ready to begin printing out the commit data for your importer.
                        The initial information states that you’re defining a commit object and what branch it’s on, followed by the mark you’ve generated, the committer information and commit message, and then the previous commit, if any.
                        The code looks like this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby"># print the import information
puts 'commit refs/heads/master'
puts 'mark :' + mark
puts "committer #{$author} #{date} -0700"
export_data('imported from ' + dir)
puts 'from :' + last_mark if last_mark</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        You hardcode the time zone (-0700) because doing so is easy.
                        If you’re importing from another system, you must specify the time zone as an offset.
                        The commit message must be expressed in a special format:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote>data (size)\n(contents)</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        The format consists of the word data, the size of the data to be read, a newline, and finally the data.
                        Because you need to use the same format to specify the file contents later, you create a helper method, <code>export_data</code>:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">def export_data(string)
  print "data #{string.size}\n#{string}"
end</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        All that’s left is to specify the file contents for each snapshot.
                        This is easy, because you have each one in a directory – you can print out the <code>deleteall</code> command followed by the contents of each file in the directory.
                        Git will then record each snapshot appropriately:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">puts 'deleteall'
Dir.glob("**/*").each do |file|
  next if !File.file?(file)
  inline_data(file)
end</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        Note: Because many systems think of their revisions as changes from one commit to another, fast-import can also take commands with each commit to specify which files have been added, removed, or modified and what the new contents are.
                        You could calculate the differences between snapshots and provide only this data, but doing so is more complex – you may as well give Git all the data and let it figure it out.
                        If this is better suited to your data, check the <code>fast-import</code> man page for details about how to provide your data in this manner.
                    </div><br>
                    <div class="paragraph">
                        The format for listing the new file contents or specifying a modified file with the new contents is as follows:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote>M 644 inline path/to/file
data (size)
(file contents)</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        Here, 644 is the mode (if you have executable files, you need to detect and specify 755 instead), and inline says you’ll list the contents immediately after this line.
                        Your <code>inline_data</code> method looks like this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">def inline_data(file, code = 'M', mode = '644')
  content = File.read(file)
  puts "#{code} #{mode} inline #{file}"
  export_data(content)
end</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        You reuse the <code>export_data</code> method you defined earlier, because it’s the same as the way you specified your commit message data.
                    </div><br>
                    <div class="paragraph">
                        The last thing you need to do is to return the current mark so it can be passed to the next iteration:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">return mark</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        That’s it.
                        Here’s the script in its entirety:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">#!/usr/bin/env ruby

$stdout.binmode
$author = "John Doe &lt;john@example.com&gt;"

$marks = []
def convert_dir_to_mark(dir)
    if !$marks.include?(dir)
        $marks &lt;&lt; dir
    end
    ($marks.index(dir)+1).to_s
end

def convert_dir_to_date(dir)
    if dir == 'current'
        return Time.now().to_i
    else
        dir = dir.gsub('back_', '')
        (year, month, day) = dir.split('_')
        return Time.local(year, month, day).to_i
    end
end

def export_data(string)
    print "data #{string.size}\n#{string}"
end

def inline_data(file, code='M', mode='644')
    content = File.read(file)
    puts "#{code} #{mode} inline #{file}"
    export_data(content)
end

def print_export(dir, last_mark)
    date = convert_dir_to_date(dir)
    mark = convert_dir_to_mark(dir)

    puts 'commit refs/heads/master'
    puts "mark :#{mark}"
    puts "committer #{$author} #{date} -0700"
    export_data("imported from #{dir}")
    puts "from :#{last_mark}" if last_mark

    puts 'deleteall'
    Dir.glob("**/*").each do |file|
        next if !File.file?(file)
        inline_data(file)
    end
    mark
end

# Loop through the directories
last_mark = nil
Dir.chdir(ARGV[0]) do
    Dir.glob("*").each do |dir|
        next if File.file?(dir)

        # move into the target directory
        Dir.chdir(dir) do
            last_mark = print_export(dir, last_mark)
        end
    end
end</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        If you run this script, you’ll get content that looks something like this:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ ruby import.rb /opt/import_from
commit refs/heads/master
mark :1
committer John Doe &lt;john@example.com&gt; 1388649600 -0700
data 29
imported from back_2014_01_02deleteall
M 644 inline README.md
data 28
# Hello

This is my readme.
commit refs/heads/master
mark :2
committer John Doe &lt;john@example.com&gt; 1388822400 -0700
data 29
imported from back_2014_01_04from :1
deleteall
M 644 inline main.rb
data 34
#!/bin/env ruby

puts "Hey there"
M 644 inline README.md
(...)</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        To run the importer, pipe this output through <code>git fast-import</code> while in the Git directory you want to import into.
                        You can create a new directory and then run <code>git init</code> in it for a starting point, and then run your script:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git init
Initialized empty Git repository in /opt/import_to/.git/
$ ruby import.rb /opt/import_from | git fast-import
git-fast-import statistics:
---------------------------------------------------------------------
Alloc'd objects:       5000
Total objects:           13 (         6 duplicates                  )
      blobs  :            5 (         4 duplicates          3 deltas of          5 attempts)
      trees  :            4 (         1 duplicates          0 deltas of          4 attempts)
      commits:            4 (         1 duplicates          0 deltas of          0 attempts)
      tags   :            0 (         0 duplicates          0 deltas of          0 attempts)
Total branches:           1 (         1 loads     )
      marks:           1024 (         5 unique    )
      atoms:              2
Memory total:          2344 KiB
       pools:          2110 KiB
     objects:           234 KiB
---------------------------------------------------------------------
pack_report: getpagesize()            =       4096
pack_report: core.packedGitWindowSize = 1073741824
pack_report: core.packedGitLimit      = 8589934592
pack_report: pack_used_ctr            =         10
pack_report: pack_mmap_calls          =          5
pack_report: pack_open_windows        =          2 /          2
pack_report: pack_mapped              =       1457 /       1457
---------------------------------------------------------------------</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        As you can see, when it completes successfully, it gives you a bunch of statistics about what it accomplished.
                        In this case, you imported 13 objects total for 4 commits into 1 branch.
                        Now, you can run <code>git log</code> to see your new history:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ git log -2
commit 3caa046d4aac682a55867132ccdfbe0d3fdee498
Author: John Doe &lt;john@example.com&gt;
Date:   Tue Jul 29 19:39:04 2014 -0700

    imported from current

commit 4afc2b945d0d3c8cd00556fbe2e8224569dc9def
Author: John Doe &lt;john@example.com&gt;
Date:   Mon Feb 3 01:00:00 2014 -0700

    imported from back_2014_02_03</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        There you go – a nice, clean Git repository.
                        It’s important to note that nothing is checked out – you don’t have any files in your working directory at first.
                        To get them, you must reset your branch to where <code>master</code> is now:
                    </div>
                    <div class="listingblock">
                        <div class="content">
                            <pre class="highlight"><blockquote class="language-console" data-lang="console">$ ls
$ git reset --hard master
HEAD is now at 3caa046 imported from current
$ ls
README.md main.rb</blockquote></pre>
                        </div>
                    </div>
                    <div class="paragraph">
                        You can do a lot more with the <code>fast-import</code> tool – handle different modes, binary data, multiple branches and merging, tags, progress indicators, and more.
                        A number of examples of more complex scenarios are available in the <code>contrib/fast-import</code> directory of the Git source code.
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