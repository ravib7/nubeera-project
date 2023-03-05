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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Account Setup and Configuration</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">GitHub</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                GitHub is the single largest host for Git repositories, and is the central point of collaboration for millions of developers and projects.
                A large percentage of all Git repositories are hosted on GitHub, and many open-source projects use it for Git hosting, issue tracking, code review, and other things.
                So while it’s not a direct part of the Git open source project, there’s a good chance that you’ll want or need to interact with GitHub at some point while using Git professionally.
                This chapter is about using GitHub effectively. <br><br>
                We’ll cover signing up for and managing an account, creating and using Git repositories, common workflows to contribute to projects and to accept contributions to yours, GitHub’s programmatic interface and lots of little tips to make your life easier in general. <br><br>
                If you are not interested in using GitHub to host your own projects or to collaborate with other projects that are hosted on GitHub, you can safely skip to <a href="#ch07-git-tools">Git Tools</a>.
                <h2 id="_account_setup_and_configuration">Account Setup and Configuration</h2>
                <div class="paragraph">

                    The first thing you need to do is set up a free user account.
                    Simply visit <a href="https://github.com" class="bare">https://github.com</a>, choose a user name that isn’t already taken, provide an email address and a password, and click the big green “Sign up for GitHub” button.
                </div>
                <div class="imageblock">
                    <div class="content">
                        <br><br><img src="https://git-scm.com/book/en/v2/images/signup.png" alt="The GitHub sign-up form">
                    </div>
                    <div class="title">Figure 81. The GitHub sign-up form</div>
                </div>
                <div class="paragraph">
                    The next thing you’ll see is the pricing page for upgraded plans, but it’s safe to ignore this for now.
                    GitHub will send you an email to verify the address you provided.
                    Go ahead and do this; it’s pretty important (as we’ll see later).
                </div>
                <div class="paragraph">
                    Clicking the Octocat logo at the top-left of the screen will take you to your dashboard page.
                    You’re now ready to use GitHub.
                </div>
                <div class="sect3">
                    <h3 id="_ssh_access_2">SSH Access</h3>
                    <div class="paragraph">

                        As of right now, you’re fully able to connect with Git repositories using the <code>https://</code> protocol, authenticating with the username and password you just set up.
                        However, to simply clone public projects, you don’t even need to sign up - the account we just created comes into play when we fork projects and push to our forks a bit later.
                    </div><br>
                    <div class="paragraph">
                        If you’d like to use SSH remotes, you’ll need to configure a public key.
                        Open up your account settings using the link at the top-right of the window:
                    </div>
                    <div class="imageblock">
                        <div class="content">
                            <br><br><img src="https://git-scm.com/book/en/v2/images/account-settings.png" alt="The “Account settings” link">
                        </div>
                        <div class="title">Figure 82. The “Account settings” link</div>
                    </div><br><br>
                    <div class="paragraph">
                        Then select the “SSH keys” section along the left-hand side.
                    </div>
                    <div class="imageblock">
                        <div class="content">
                            <br><br><img src="https://git-scm.com/book/en/v2/images/ssh-keys.png" alt="The “SSH keys” link">
                        </div>
                        <div class="title">Figure 83. The “SSH keys” link.</div>
                    </div><br><br>
                    <div class="paragraph">
                        From there, click the “Add an SSH key” button, give your key a name, paste the contents of your <code>~/.ssh/id_rsa.pub</code> (or whatever you named it) public-key file into the text area, and click “Add key”.
                    </div><br>
                    
                <div class="sect3">
                    <h3 id="_personal_avatar">Your Avatar</h3>
                    <div class="paragraph">
                        Next, if you wish, you can replace the avatar that is generated for you with an image of your choosing.
                        First go to the “Profile” tab (above the SSH Keys tab) and click “Upload new picture”.
                    </div>
                    <div class="imageblock">
                        <div class="content">
                            <br><br><img src="https://git-scm.com/book/en/v2/images/your-profile.png" alt="The “Profile” link">
                        </div>
                        <div class="title">Figure 84. The “Profile” link</div>
                    </div><br><br>
                    <div class="paragraph">
                        We’ll choose a copy of the Git logo that is on our hard drive and then we get a chance to crop it.
                    </div>
                    <div class="imageblock">
                        <div class="content">
                            <br><br><img src="https://git-scm.com/book/en/v2/images/avatar-crop.png" alt="Crop your uploaded avatar">
                        </div>
                        <div class="title">Figure 85. Crop your avatar</div>
                    </div><br><br>
                    <div class="paragraph">
                        Now anywhere you interact on the site, people will see your avatar next to your username.
                    </div><br>
                    <div class="paragraph">
                        If you happen to have uploaded an avatar to the popular Gravatar service (often used for Wordpress accounts), that avatar will be used by default and you don’t need to do this step.
                    </div>
                </div>
                <div class="sect3">
                    <h3 id="_your_email_addresses">Your Email Addresses</h3>
                    <div class="paragraph">
                        The way that GitHub maps your Git commits to your user is by email address.
                        If you use multiple email addresses in your commits and you want GitHub to link them up properly, you need to add all the email addresses you have used to the Emails section of the admin section.
                    </div>
                    <div id="_add_email_addresses" class="imageblock">
                        <div class="content">
                            <br><br><img src="https://git-scm.com/book/en/v2/images/email-settings.png" alt="Add all your email addresses">
                        </div>
                        <div class="title">Figure 86. Add email addresses</div>
                    </div><br><br>
                    <div class="paragraph">
                        In Add email addresses we can see some of the different states that are possible.
                        The top address is verified and set as the primary address, meaning that is where you’ll get any notifications and receipts.
                        The second address is verified and so can be set as the primary if you wish to switch them.
                        The final address is unverified, meaning that you can’t make it your primary address.
                        If GitHub sees any of these in commit messages in any repository on the site, it will be linked to your user now.
                    </div>
                </div>
                <div class="sect3">
                    <h3 id="_two_factor_authentication">Two Factor Authentication</h3>
                    <div class="paragraph">
                        Finally, for extra security, you should definitely set up Two-factor Authentication or “2FA”.
                        Two-factor Authentication is an authentication mechanism that is becoming more and more popular recently to mitigate the risk of your account being compromised if your password is stolen somehow.
                        Turning it on will make GitHub ask you for two different methods of authentication, so that if one of them is compromised, an attacker will not be able to access your account.
                    </div><br>
                    <div class="paragraph">
                        You can find the Two-factor Authentication setup under the Security tab of your Account settings.
                    </div>
                    <div class="imageblock">
                        <div class="content">
                            <br><br><img src="https://git-scm.com/book/en/v2/images/2fa-1.png" alt="2FA in the Security Tab">
                        </div>
                        <div class="title">Figure 87. 2FA in the Security Tab</div>
                    </div><br><br> 
                    <div class="paragraph">
                        If you click on the “Set up two-factor authentication” button, it will take you to a configuration page where you can choose to use a phone app to generate your secondary code (a “time based one-time password”), or you can have GitHub send you a code via SMS each time you need to log in.
                    </div><br>
                    <div class="paragraph">
                        After you choose which method you prefer and follow the instructions for setting up 2FA, your account will then be a little more secure and you will have to provide a code in addition to your password whenever you log into GitHub.
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