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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Scripting GitHub</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../">Core</a></li>
                <li class="breadcrumb-item"><a href="../">Git</a></li>
                <li class="breadcrumb-item active">GitHub</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                        <div class="paragraph">
                            So now we’ve covered all of the major features and workflows of GitHub, but any large group or project will have customizations they may want to make or external services they may want to integrate.
                        </div><br>
                        <div class="paragraph">
                            Luckily for us, GitHub is really quite hackable in many ways.
                            In this section we’ll cover how to use the GitHub hooks system and its API to make GitHub work how we want it to.
                        </div>
                        <div class="sect3">
                            <h3 id="_services_and_hooks">Services and Hooks</h3>
                            <div class="paragraph">
                                The Hooks and Services section of GitHub repository administration is the easiest way to have GitHub interact with external systems.
                            </div>
                            <div class="sect4">
                                <h4 id="_services">Services</h4>
                                <div class="paragraph">
                                    First we’ll take a look at Services.
                                    Both the Hooks and Services integrations can be found in the Settings section of your repository, where we previously looked at adding Collaborators and changing the default branch of your project.
                                    Under the “Webhooks and Services” tab you will see something like Services and Hooks configuration section.
                                </div>
                                <div id="_services_hooks" class="imageblock">
                                    <div class="content">
                                        <br><br><img src="https://git-scm.com/book/en/v2/images/scripting-01-services.png" alt="Services and hooks">
                                    </div>
                                    <div class="title">Figure 129. Services and Hooks configuration section</div>
                                </div><br><br>
                                <div class="paragraph">
                                    There are dozens of services you can choose from, most of them integrations into other commercial and open source systems.
                                    Most of them are for Continuous Integration services, bug and issue trackers, chat room systems and documentation systems.
                                    We’ll walk through setting up a very simple one, the Email hook.
                                    If you choose “email” from the “Add Service” dropdown, you’ll get a configuration screen like Email service configuration.
                                </div>
                                <div id="_service_config" class="imageblock">
                                    <div class="content">
                                        <br><br><img src="https://git-scm.com/book/en/v2/images/scripting-02-email-service.png" alt="Email service">
                                    </div>
                                    <div class="title">Figure 130. Email service configuration</div>
                                </div><br><br>
                                <div class="paragraph">
                                    In this case, if we hit the “Add service” button, the email address we specified will get an email every time someone pushes to the repository.
                                    Services can listen for lots of different types of events, but most only listen for push events and then do something with that data.
                                </div><br>
                                <div class="paragraph">
                                    If there is a system you are using that you would like to integrate with GitHub, you should check here to see if there is an existing service integration available.
                                    For example, if you’re using Jenkins to run tests on your codebase, you can enable the Jenkins builtin service integration to kick off a test run every time someone pushes to your repository.
                                </div>
                            </div>
                            <div class="sect4">
                                <h4 id="_hooks_2">Hooks</h4>
                                <div class="paragraph">
                                    If you need something more specific or you want to integrate with a service or site that is not included in this list, you can instead use the more generic hooks system.
                                    GitHub repository hooks are pretty simple.
                                    You specify a URL and GitHub will post an HTTP payload to that URL on any event you want.
                                </div><br>
                                <div class="paragraph">
                                    Generally the way this works is you can setup a small web service to listen for a GitHub hook payload and then do something with the data when it is received.
                                </div><br>
                                <div class="paragraph">
                                    To enable a hook, you click the “Add webhook” button in Services and Hooks configuration section.
                                    This will bring you to a page that looks like Web hook configuration.
                                </div>
                                <div id="_web_hook" class="imageblock">
                                    <div class="content">
                                        <br><br><img src="https://git-scm.com/book/en/v2/images/scripting-03-webhook.png" alt="Web hook">
                                    </div>
                                    <div class="title">Figure 131. Web hook configuration</div>
                                </div><br><br>
                                <div class="paragraph">
                                    The configuration for a web hook is pretty simple.
                                    In most cases you simply enter a URL and a secret key and hit “Add webhook”.
                                    There are a few options for which events you want GitHub to send you a payload for&thinsp;—&thinsp;the default is to only get a payload for the <code>push</code> event, when someone pushes new code to any branch of your repository.
                                </div><br>
                                <div class="paragraph">
                                    Let’s see a small example of a web service you may set up to handle a web hook.
                                    We’ll use the Ruby web framework Sinatra since it’s fairly concise and you should be able to easily see what we’re doing.
                                </div><br>
                                <div class="paragraph">
                                    Let’s say we want to get an email if a specific person pushes to a specific branch of our project modifying a specific file.
                                    We could fairly easily do that with code like this:
                                </div>
                                <div class="listingblock">
                                    <div class="content">
                                        <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">require 'sinatra'
require 'json'
require 'mail'

post '/payload' do
  push = JSON.parse(request.body.read) # parse the JSON

  # gather the data we're looking for
  pusher = push["pusher"]["name"]
  branch = push["ref"]

  # get a list of all the files touched
  files = push["commits"].map do |commit|
    commit['added'] + commit['modified'] + commit['removed']
  end
  files = files.flatten.uniq

  # check for our criteria
  if pusher == 'schacon' &amp;&amp;
     branch == 'ref/heads/special-branch' &amp;&amp;
     files.include?('special-file.txt')

    Mail.deliver do
      from     'tchacon@example.com'
      to       'tchacon@example.com'
      subject  'Scott Changed the File'
      body     "ALARM"
    end
  end
end</blockquote></pre>
                                    </div>
                                </div>
                                <div class="paragraph">
                                    Here we’re taking the JSON payload that GitHub delivers us and looking up who pushed it, what branch they pushed to and what files were touched in all the commits that were pushed.
                                    Then we check that against our criteria and send an email if it matches.
                                </div><br>
                                <div class="paragraph">
                                    In order to develop and test something like this, you have a nice developer console in the same screen where you set the hook up.
                                    You can see the last few deliveries that GitHub has tried to make for that webhook.
                                    For each hook you can dig down into when it was delivered, if it was successful and the body and headers for both the request and the response.
                                    This makes it incredibly easy to test and debug your hooks.
                                </div>
                                <div id="_web_hook_debug" class="imageblock">
                                    <div class="content">
                                        <br><br><img src="https://git-scm.com/book/en/v2/images/scripting-04-webhook-debug.png" alt="Webhook debug">
                                    </div>
                                    <div class="title">Figure 132. Web hook debugging information</div>
                                </div><br><br>
                                <div class="paragraph">
                                    The other great feature of this is that you can redeliver any of the payloads to test your service easily.
                                </div><br>
                                <div class="paragraph">
                                    For more information on how to write webhooks and all the different event types you can listen for, go to the GitHub Developer documentation at <a href="https://developer.github.com/webhooks/" class="bare">https://developer.github.com/webhooks/</a>.
                                </div>
                            </div>
                        </div>
                        <div class="sect3">
                            <h3 id="_the_github_api">The GitHub API</h3>
                            <div class="paragraph">

                                Services and hooks give you a way to receive push notifications about events that happen on your repositories, but what if you need more information about these events?
                                What if you need to automate something like adding collaborators or labeling issues?
                            </div><br>
                            <div class="paragraph">
                                This is where the GitHub API comes in handy.
                                GitHub has tons of API endpoints for doing nearly anything you can do on the website in an automated fashion.
                                In this section we’ll learn how to authenticate and connect to the API, how to comment on an issue and how to change the status of a Pull Request through the API.
                            </div>
                        </div>
                        <div class="sect3">
                            <h3 id="_basic_usage_2">Basic Usage</h3>
                            <div class="paragraph">
                                The most basic thing you can do is a simple GET request on an endpoint that doesn’t require authentication.
                                This could be a user or read-only information on an open source project.
                                For example, if we want to know more about a user named “schacon”, we can run something like this:
                            </div>
                            <div class="listingblock">
                                <div class="content">
                                    <pre class="highlight"><blockquote class="language-javascript" data-lang="javascript">$ curl https://api.github.com/users/schacon
{
  "login": "schacon",
  "id": 70,
  "avatar_url": "https://avatars.githubusercontent.com/u/70",
# …
  "name": "Scott Chacon",
  "company": "GitHub",
  "following": 19,
  "created_at": "2008-01-27T17:19:28Z",
  "updated_at": "2014-06-10T02:37:23Z"
}</blockquote></pre>
                                </div>
                            </div>
                            <div class="paragraph">
                                There are tons of endpoints like this to get information about organizations, projects, issues, commits&thinsp;—&thinsp;just about anything you can publicly see on GitHub.
                                You can even use the API to render arbitrary Markdown or find a <code>.gitignore</code> template.
                            </div>
                            <div class="listingblock">
                                <div class="content">
                                    <pre class="highlight"><blockquote class="language-javascript" data-lang="javascript">$ curl https://api.github.com/gitignore/templates/Java
{
  "name": "Java",
  "source": "*.class

# Mobile Tools for Java (J2ME)
.mtj.tmp/

# Package Files #
*.jar
*.war
*.ear

# virtual machine crash logs, see https://www.java.com/en/download/help/error_hotspot.xml
hs_err_pid*
"
}</blockquote></pre>
                                </div>
                            </div>
                        </div>
                        <div class="sect3">
                            <h3 id="_commenting_on_an_issue">Commenting on an Issue</h3>
                            <div class="paragraph">
                                However, if you want to do an action on the website such as comment on an Issue or Pull Request or if you want to view or interact with private content, you’ll need to authenticate.
                            </div><br>
                            <div class="paragraph">
                                There are several ways to authenticate.
                                You can use basic authentication with just your username and password, but generally it’s a better idea to use a personal access token.
                                You can generate this from the “Applications” tab of your settings page.
                            </div>
                            <div id="_access_token" class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/scripting-05-access-token.png" alt="Access Token">
                                </div>
                                <div class="title">Figure 133. Generate your access token from the “Applications” tab of your settings page</div>
                            </div><br><br>
                            <div class="paragraph">
                                It will ask you which scopes you want for this token and a description.
                                Make sure to use a good description so you feel comfortable removing the token when your script or application is no longer used.
                            </div><br>
                            <div class="paragraph">
                                GitHub will only show you the token once, so be sure to copy it.
                                You can now use this to authenticate in your script instead of using a username and password.
                                This is nice because you can limit the scope of what you want to do and the token is revocable.
                            </div><br>
                            <div class="paragraph">
                                This also has the added advantage of increasing your rate limit.
                                Without authenticating, you will be limited to 60 requests per hour.
                                If you authenticate you can make up to 5,000 requests per hour.
                            </div><br>
                            <div class="paragraph">
                                So let’s use it to make a comment on one of our issues.
                                Let’s say we want to leave a comment on a specific issue, Issue #6.
                                To do so we have to do an HTTP POST request to <code>repos/&lt;user&gt;/&lt;repo&gt;/issues/&lt;num&gt;/comments</code> with the token we just generated as an Authorization header.
                            </div>
                            <div class="listingblock">
                                <div class="content">
                                    <pre class="highlight"><blockquote class="language-javascript" data-lang="javascript">$ curl -H "Content-Type: application/json" \
       -H "Authorization: token TOKEN" \
       --data '{"body":"A new comment, :+1:"}' \
       https://api.github.com/repos/schacon/blink/issues/6/comments
{
  "id": 58322100,
  "html_url": "https://github.com/schacon/blink/issues/6#issuecomment-58322100",
  ...
  "user": {
    "login": "tonychacon",
    "id": 7874698,
    "avatar_url": "https://avatars.githubusercontent.com/u/7874698?v=2",
    "type": "User",
  },
  "created_at": "2014-10-08T07:48:19Z",
  "updated_at": "2014-10-08T07:48:19Z",
  "body": "A new comment, :+1:"
}</blockquote></pre>
                                </div>
                            </div>
                            <div class="paragraph">
                                Now if you go to that issue, you can see the comment that we just successfully posted as in A comment posted from the GitHub API.
                            </div>
                            <div id="_api_comment" class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/scripting-06-comment.png" alt="API Comment">
                                </div>
                                <div class="title">Figure 134. A comment posted from the GitHub API</div>
                            </div><br><br>
                            <div class="paragraph">
                                You can use the API to do just about anything you can do on the website&thinsp;—&thinsp;creating and setting milestones, assigning people to Issues and Pull Requests, creating and changing labels, accessing commit data, creating new commits and branches, opening, closing or merging Pull Requests, creating and editing teams, commenting on lines of code in a Pull Request, searching the site and on and on.
                            </div>
                        </div>
                        <div class="sect3">
                            <h3 id="_changing_the_status_of_a_pull_request">Changing the Status of a Pull Request</h3>
                            <div class="paragraph">
                                There is one final example we’ll look at since it’s really useful if you’re working with Pull Requests.
                                Each commit can have one or more statuses associated with it and there is an API to add and query that status.
                            </div><br>
                            <div class="paragraph">
                                Most of the Continuous Integration and testing services make use of this API to react to pushes by testing the code that was pushed, and then report back if that commit has passed all the tests.
                                You could also use this to check if the commit message is properly formatted, if the submitter followed all your contribution guidelines, if the commit was validly signed&thinsp;—&thinsp;any number of things.
                            </div><br>
                            <div class="paragraph">
                                Let’s say you set up a webhook on your repository that hits a small web service that checks for a <code>Signed-off-by</code> string in the commit message.
                            </div>
                            <div class="listingblock">
                                <div class="content">
                                    <pre class="highlight"><blockquote class="language-ruby" data-lang="ruby">require 'httparty'
require 'sinatra'
require 'json'

post '/payload' do
  push = JSON.parse(request.body.read) # parse the JSON
  repo_name = push['repository']['full_name']

  # look through each commit message
  push["commits"].each do |commit|

    # look for a Signed-off-by string
    if /Signed-off-by/.match commit['message']
      state = 'success'
      description = 'Successfully signed off!'
    else
      state = 'failure'
      description = 'No signoff found.'
    end

    # post status to GitHub
    sha = commit["id"]
    status_url = "https://api.github.com/repos/#{repo_name}/statuses/#{sha}"

    status = {
      "state"       =&gt; state,
      "description" =&gt; description,
      "target_url"  =&gt; "http://example.com/how-to-signoff",
      "context"     =&gt; "validate/signoff"
    }
    HTTParty.post(status_url,
      :body =&gt; status.to_json,
      :headers =&gt; {
        'Content-Type'  =&gt; 'application/json',
        'User-Agent'    =&gt; 'tonychacon/signoff',
        'Authorization' =&gt; "token #{ENV['TOKEN']}" }
    )
  end
end</blockquote></pre>
                                </div>
                            </div>
                            <div class="paragraph">
                                Hopefully this is fairly simple to follow.
                                In this web hook handler we look through each commit that was just pushed, we look for the string 'Signed-off-by' in the commit message and finally we POST via HTTP to the <code>/repos/&lt;user&gt;/&lt;repo&gt;/statuses/&lt;commit_sha&gt;</code> API endpoint with the status.
                            </div><br>
                            <div class="paragraph">
                                In this case you can send a state ('success', 'failure', 'error'), a description of what happened, a target URL the user can go to for more information and a “context” in case there are multiple statuses for a single commit.
                                For example, a testing service may provide a status and a validation service like this may also provide a status&thinsp;—&thinsp;the “context” field is how they’re differentiated.
                            </div><br>
                            <div class="paragraph">
                                If someone opens a new Pull Request on GitHub and this hook is set up, you may see something like Commit status via the API.
                            </div>
                            <div id="_commit_status" class="imageblock">
                                <div class="content">
                                    <br><br><img src="https://git-scm.com/book/en/v2/images/scripting-07-status.png" alt="Commit status">
                                </div>
                                <div class="title">Figure 135. Commit status via the API</div>
                            </div><br><br>
                            <div class="paragraph">
                                You can now see a little green check mark next to the commit that has a “Signed-off-by” string in the message and a red cross through the one where the author forgot to sign off.
                                You can also see that the Pull Request takes the status of the last commit on the branch and warns you if it is a failure.
                                This is really useful if you’re using this API for test results so you don’t accidentally merge something where the last commit is failing tests.
                            </div>
                        </div>
                        <div class="sect3">
                            <h3 id="_octokit">Octokit</h3>
                            <div class="paragraph">
                                Though we’ve been doing nearly everything through <code>curl</code> and simple HTTP requests in these examples, several open-source libraries exist that make this API available in a more idiomatic way.
                                At the time of this writing, the supported languages include Go, Objective-C, Ruby, and .NET.
                                Check out <a href="https://github.com/octokit" class="bare">https://github.com/octokit</a> for more information on these, as they handle much of the HTTP for you.
                            </div><br>
                            <div class="paragraph">
                                Hopefully these tools can help you customize and modify GitHub to work better for your specific workflows.
                                For complete documentation on the entire API as well as guides for common tasks, check out <a href="https://developer.github.com" class="bare">https://developer.github.com</a>.
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