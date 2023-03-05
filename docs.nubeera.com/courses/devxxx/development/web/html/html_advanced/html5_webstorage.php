<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Basic HTML</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Basic HTML">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <link id="theme-style" rel="stylesheet" href="htmlcss.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Advanced HTML</strong><br><br>
                <ul>
                    <li><a href="index.php">HTML Canvas Graphics</a></li>
                    <li><a href="html5_svg.php">HTML SVG Graphics</a></li>
                    <li><a href="html_media.php">HTML Multimedia</a></li>
                    <li><a href="html5_video.php">HTML Video</a></li>
                    <li><a href="html5_audio.php">HTML Audio</a></li>
                    <li><a href="html_object.php">HTML Plug-ins</a></li>
                    <li><a href="html_youtube.php">HTML YouTube</a></li>
                    <li><a href="html5_geolocation.php">HTML Geolocation API</a></li>
                    <li><a href="html5_draganddrop.php">HTML Drag and Drop API</a></li>
                    <li><a href="html5_webstorage.php">HTML Web Storage API</a></li>
                    <li><a href="html5_webworkers.php">HTML Web Workers API</a></li>
                    <li><a href="html5_serversentevents.php">HTML SSE API</a></li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Web Storage API</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>HTML web storage; better than cookies.
                    <hr>

                    <h3 id="What is HTML Web Storage?" class="heading-anchor">What is HTML Web Storage?</h3>
                    With web storage, web applications can store data locally within the user's browser.<br>
                    Before HTML5, application data had to be stored in cookies, included in
                    every server request. Web storage is more secure, and large amounts of data
                    can be stored locally, without affecting website performance.<br>
                    Unlike cookies,
                    the storage limit is far larger (at least 5MB) and information is never
                    transferred to the server.<br>
                    Web storage is per origin (per domain and protocol). All pages, from one
                    origin, can store and access the same data.
                    <hr>

                    <h3 id="HTML Web Storage Objects" class="heading-anchor">HTML Web Storage Objects</h3>
                    HTML web storage provides two objects for storing data on the client:<br>
                    <ul>
                        <li><code class="w3-codespan">window.localStorage</code> - stores data with no expiration date</li>
                        <li><code class="w3-codespan">window.sessionStorage</code> - stores data for one session (data is lost when the browser tab is closed)</li>
                    </ul>
                    Before using web storage, check browser support for localStorage and sessionStorage:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            if (typeof(Storage) !== &quot;undefined&quot;) {<br>
                            &nbsp; // <i>Code for localStorage/sessionStorage.</i><br>
                            }
                            else {<br>
                            &nbsp; // Sorry! No Web Storage support..<br>
                            }
                        </div>
                    </div>
                    <hr>

                    <h3 id="The localStorage Object" class="heading-anchor">The localStorage Object</h3>
                    The localStorage object stores the data with no expiration date. The data will not be deleted when the browser is closed, and will be available the next day, week, or year.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            // Store<br>localStorage.setItem(&quot;lastname&quot;, &quot;Smith&quot;);<br><br>// Retrieve<br>
                            document.getElementById(&quot;result&quot;).innerHTML = localStorage.getItem(&quot;lastname&quot;);
                        </div>
                    </div><br>
                    Example explained:<br>
                    <ul>
                        <li>Create a localStorage name/value pair with name=&quot;lastname&quot; and value=&quot;Smith&quot;</li>
                        <li>Retrieve the value of &quot;lastname&quot; and insert it into the element with id=&quot;result&quot;</li>
                    </ul>
                    The example above could also be written like this:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            // Store<br>localStorage.lastname = &quot;Smith&quot;;<br>// Retrieve<br>
                            document.getElementById(&quot;result&quot;).innerHTML = localStorage.lastname;
                        </div>
                    </div><br>
                    The syntax for removing the &quot;lastname&quot; localStorage item is as follows:
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            localStorage.removeItem(&quot;lastname&quot;);
                        </div>
                    </div><br>
                    <strong>Note:</strong> Name/value pairs are always stored as strings.
                    Remember to convert them to another format when needed!<br>
                    The following example counts the number of times a user has clicked a button. In this code the value string is converted to a number to be able to increase the counter:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            if (localStorage.clickcount) {<br>&nbsp; localStorage.clickcount = Number(localStorage.clickcount) + 1;<br>
                            } else {<br>&nbsp; localStorage.clickcount = 1;<br>}<br>
                            document.getElementById(&quot;result&quot;).innerHTML = &quot;You have clicked the button &quot; +<br>
                            localStorage.clickcount + &quot; time(s).&quot;;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The sessionStorage Object" class="heading-anchor">The sessionStorage Object</h3>
                    The <code class="w3-codespan">sessionStorage</code> object is equal to the localStorage object, <strong>except</strong>
                    that it stores the data for only one session. The data is deleted when the user closes the
                    specific browser tab.<br>
                    The following example counts the number of times a user has clicked a button, in the current session:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            if (sessionStorage.clickcount) {<br>&nbsp; sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;<br>}
                            else {<br>&nbsp; sessionStorage.clickcount = 1;<br>}<br>
                            document.getElementById(&quot;result&quot;).innerHTML = &quot;You have clicked the button &quot; +<br>
                            sessionStorage.clickcount + &quot; time(s) in this session.&quot;;
                        </div>
                    </div>
                    <hr>

                </div>
        </div>
        <?php require "../../../../../../templates/footer_outer.php" ?>

    </div>

    <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script defer src="../../../../../../assets/fontawesome/js/all.min.js"></script><!-- footer social icons -->
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