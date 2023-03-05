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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Video</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>The HTML <code class="w3-codespan">&lt;video&gt;</code> element is used to
                    show a video on a web page.
                    <hr>

                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Courtesy of <a href="https://www.bigbuckbunny.org/" target="_blank">Big Buck Bunny</a>:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            <div style="text-align:center">
                                <video id="video1" style="width:600px;max-width:100%;" controls>
                                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                    <source src="https://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg">
                                    Your browser does not support HTML5 video.
                                </video>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <h3 id="The HTML &lt;video&gt; Element" class="heading-anchor">The HTML &lt;video&gt; Element</h3>
                    To show a video in HTML, use the <code class="w3-codespan">&lt;video&gt;</code> element:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;video width=&quot;320&quot; height=&quot;240&quot; controls&gt;<br>
                            &nbsp; &lt;source src=&quot;movie.mp4&quot; type=&quot;video/mp4&quot;&gt;<br>
                            &nbsp; &lt;source src=&quot;movie.ogg&quot; type=&quot;video/ogg&quot;&gt;<br>
                            Your browser does not support the video tag.<br>
                            &lt;/video&gt;
                        </div>
                    </div>
                    <hr>


                    <h3 id="How it Works" class="heading-anchor">How it Works</h3>
                    The <code class="w3-codespan">controls</code> attribute adds video controls, like play, pause, and volume.<br>
                    It is a good idea to always include <code class="w3-codespan">width</code> and <code class="w3-codespan">height</code> attributes. If height and width are not set, the page
                    might flicker while the video loads.<br>
                    The <code class="w3-codespan">&lt;source&gt;</code> element allows you to specify alternative video
                    files which the browser may choose from. The browser will use the first recognized format.<br>
                    The text between the <code class="w3-codespan">&lt;video&gt;</code> and <code class="w3-codespan">&lt;/video&gt;</code> tags will only be displayed
                    in browsers that do not
                    support the <code class="w3-codespan">&lt;video&gt;</code> element.
                    <hr>

                    <h3 id="HTML &lt;video&gt; Autoplay" class="heading-anchor">HTML &lt;video&gt; Autoplay</h3>
                    To start a video automatically, use the <code class="w3-codespan">autoplay</code> attribute:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;video width=&quot;320&quot; height=&quot;240&quot; autoplay&gt;<br>
                            &nbsp; &lt;source src=&quot;movie.mp4&quot; type=&quot;video/mp4&quot;&gt;<br>
                            &nbsp; &lt;source src=&quot;movie.ogg&quot; type=&quot;video/ogg&quot;&gt;<br>
                            Your browser does not support the video tag.<br>
                            &lt;/video&gt;
                        </div>
                    </div><br>
                    Add <code class="w3-codespan">muted</code> after <code class="w3-codespan">
                        autoplay</code> to let your video start playing automatically (but muted):
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;video width=&quot;320&quot; height=&quot;240&quot; autoplay muted&gt;<br>
                            &nbsp; &lt;source src=&quot;movie.mp4&quot; type=&quot;video/mp4&quot;&gt;<br>
                            &nbsp; &lt;source src=&quot;movie.ogg&quot; type=&quot;video/ogg&quot;&gt;<br>
                            Your browser does not support the video tag.<br>
                            &lt;/video&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="HTML Video Formats" class="heading-anchor">HTML Video Formats</h3>
                    There are three supported video formats: MP4, WebM, and Ogg. The browser support for the different formats is:<br>
                    <table class="ws-table-all notranslate">
                        <tr>
                            <th style="width:25%">Browser</th>
                            <th style="width:25%">MP4</th>
                            <th style="width:25%">WebM</th>
                            <th style="width:25%">Ogg</th>
                        </tr>
                        <tr>
                            <td>Edge</td>
                            <td>YES</td>
                            <td>YES</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>Chrome</td>
                            <td>YES</td>
                            <td>YES</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>Firefox</td>
                            <td>YES</td>
                            <td>YES</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>Safari</td>
                            <td>YES</td>
                            <td>YES</td>
                            <td>NO</td>
                        </tr>
                        <tr>
                            <td>Opera</td>
                            <td>YES</td>
                            <td>YES</td>
                            <td>YES</td>
                        </tr>
                    </table>
                    <hr>

                    <h3 id="HTML Video - Media Types" class="heading-anchor">HTML Video - Media Types</h3>
                    <table class="ws-table-all notranslate" id="table1">
                        <tr>
                            <th style="width:50%">File Format</th>
                            <th style="width:50%">Media Type</th>
                        </tr>
                        <tr>
                            <td>MP4</td>
                            <td>video/mp4</td>
                        </tr>
                        <tr>
                            <td>WebM</td>
                            <td>video/webm</td>
                        </tr>
                        <tr>
                            <td>Ogg</td>
                            <td>video/ogg</td>
                        </tr>
                    </table>
                    <hr>

                    <h3 id="HTML Video - Methods, Properties, and Events" class="heading-anchor">HTML Video - Methods, Properties, and Events</h3>
                    The HTML DOM defines methods, properties, and events for the <code class="w3-codespan">&lt;video&gt;</code> element.<br>
                    This allows you to load, play, and pause videos, as well as setting duration and volume.<br>
                    There are also DOM events that can notify you when a video begins to play, is paused, etc.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Example: Using JavaScript
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            <br>
                            <div style="text-align:center;" class="w3-white w3-padding-16">
                                <button onclick="playPause()">Play/Pause</button>
                                <button onclick="makeBig()">Big</button>
                                <button onclick="makeSmall()">Small</button>
                                <button onclick="makeNormal()">Normal</button>
                                <br><br>
                                <video id="video2" width="480" style="max-width:100%">
                                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                    <source src="https://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg">
                                    Your browser does not support HTML5 video.
                                </video>
                                <script>
                                    var myVideo = document.getElementById("video2");

                                    function playPause() {
                                        if (myVideo.paused)
                                            myVideo.play();
                                        else
                                            myVideo.pause();
                                    }

                                    function makeBig() {
                                        myVideo.width = 600;
                                    }

                                    function makeSmall() {
                                        myVideo.width = 320;
                                    }

                                    function makeNormal() {
                                        myVideo.width = 480;
                                    }
                                </script>
                                <p>Video courtesy of <a href="https://www.bigbuckbunny.org/" target="_blank">Big Buck Bunny</a>.</p>
                            </div>
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