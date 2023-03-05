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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML SSE API</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>Server-Sent Events (SSE) allow a web page to get updates from a server.
                    <hr>

                    <h3 id="Server-Sent Events - One Way Messaging" class="heading-anchor">Server-Sent Events - One Way Messaging</h3>
                    A server-sent event is when a web page automatically gets updates from a server.<br>

                    This was also possible before, but the web page would have to ask if any updates were available. With server-sent events, the updates come automatically.<br>

                    Examples: Facebook/Twitter updates, stock price updates, news feeds, sport results, etc.
                    <hr>

                    <h3 id="Receive Server-Sent Event Notifications" class="heading-anchor">Receive Server-Sent Event Notifications</h3>
                    The EventSource object is used to receive server-sent event notifications:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            var source = new EventSource(&quot;demo_sse.php&quot;);<br>source.onmessage = function(event) {<br>&nbsp;&nbsp;document.getElementById(&quot;result&quot;).innerHTML += event.data + &quot;&lt;br&gt;&quot;;<br>};
                        </div>
                    </div><br>
                    Example explained:<br>
                    <ul>
                        <li>Create a new EventSource object, and specify the URL of the page sending the updates (in this example &quot;demo_sse.php&quot;)</li>
                        <li>Each time an update is received, the onmessage event occurs</li>
                        <li>When an onmessage event occurs, put the received data into the element with id=&quot;result&quot;</li>
                    </ul>
                    <hr>

                    <h3 id="Check Server-Sent Events Support" class="heading-anchor">Check Server-Sent Events Support</h3>
                    In the tryit example above there were some extra lines of code to check browser support for server-sent events:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            if(typeof(EventSource) !== &quot;undefined&quot;) {<br>
                            &nbsp; // Yes! Server-sent events support!<br>
                            &nbsp; // <i>Some code.....</i><br>
                            }
                            else {<br>
                            &nbsp; // Sorry! No server-sent events support..<br>
                            }
                        </div>
                    </div>
                    <hr>

                    <h3 id="Server-Side Code Example" class="heading-anchor">Server-Side Code Example</h3>
                    For the example above to work, you need a server capable of sending data updates (like PHP or ASP).<br>

                    The server-side event stream syntax is simple. Set the "Content-Type" header to "text/event-stream". Now you can start sending event streams.
                    <br>
                    Code in PHP (demo_sse.php):<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;?php<br>header('Content-Type: text/event-stream');<br>
                            header('Cache-Control: no-cache');<br><br>$time = date('r');<br>echo &quot;data: The server time is: {$time}\n\n&quot;;<br>flush();<br>?&gt;
                        </div>
                    </div>
                    Code in ASP (VB) (demo_sse.asp):<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;%<br>Response.ContentType = &quot;text/event-stream&quot;<br>Response.Expires = -1<br>
                            Response.Write(&quot;data: The server time is: &quot; &amp; now())<br>Response.Flush()<br>%&gt;
                        </div>
                    </div>
                    Code explained:<br>
                    <ul>
                        <li>Set the &quot;Content-Type&quot; header to
                            &quot;text/event-stream&quot;</li>
                        <li>Specify that the page should not cache</li>
                        <li>Output the data to send (<strong>Always</strong> start with &quot;data: &quot;)</li>
                        <li>Flush the output data back to the web page</li>
                    </ul>
                    <hr>

                    <h3 id="The EventSource Object" class="heading-anchor">The EventSource Object</h3>
                    In the examples above we used the onmessage event to get messages. But other events are also available:<br>
                    <table class="ws-table-all notranslate">
                        <tr>
                            <th style="width:20%">Events</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>onopen</td>
                            <td>When a connection to the server is opened</td>
                        </tr>
                        <tr>
                            <td>onmessage</td>
                            <td>When a message is received</td>
                        </tr>
                        <tr>
                            <td>onerror</td>
                            <td>When an error occurs</td>
                        </tr>
                    </table>
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