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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Audio</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>The HTML <code class="w3-codespan">&lt;audio&gt;</code> element is used to
                    play an audio file on a web page.
                    <hr>

                    <h3 id="The HTML &lt;audio&gt; Element" class="heading-anchor">The HTML &lt;audio&gt; Element</h3>
                    To play an audio file in HTML, use the <code class="w3-codespan">&lt;audio&gt;</code> element:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;audio controls&gt;<br>
                            &nbsp; &lt;source src=&quot;horse.ogg&quot; type=&quot;audio/ogg&quot;&gt;<br>
                            &nbsp; &lt;source src=&quot;horse.mp3&quot; type=&quot;audio/mpeg&quot;&gt;<br>
                            Your browser does not support the audio element.<br>
                            &lt;/audio&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="HTML Audio - How It WorksHTML Audio - How It Works" class="heading-anchor">HTML Audio - How It Works</h3>
                    The <code class="w3-codespan">controls</code> attribute adds audio controls, like play, pause, and volume.<br>
                    The <code class="w3-codespan">&lt;source&gt;</code> element allows you to specify alternative audio
                    files which the browser may choose from. The browser will use the first recognized format.<br>
                    The text between the <code class="w3-codespan">&lt;audio&gt;</code> and <code class="w3-codespan">&lt;/audio&gt;</code> tags will only be displayed
                    in browsers that do not
                    support the <code class="w3-codespan">&lt;audio&gt;</code> element.
                    <hr>


                    <h3 id="HTML &lt;audio&gt; Autoplay" class="heading-anchor">HTML &lt;audio&gt; Autoplay</h3>
                    To start an audio file automatically, use the <code class="w3-codespan">autoplay</code> attribute:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;audio controls autoplay&gt;<br>
                            &nbsp; &lt;source src=&quot;horse.ogg&quot; type=&quot;audio/ogg&quot;&gt;<br>
                            &nbsp; &lt;source src=&quot;horse.mp3&quot; type=&quot;audio/mpeg&quot;&gt;<br>
                            Your browser does not support the audio element.<br>
                            &lt;/audio&gt;
                        </div>
                    </div><br>
                    Add <code class="w3-codespan">muted</code> after <code class="w3-codespan">
                        autoplay</code> to let your audio file start playing automatically (but muted):<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;audio controls autoplay muted&gt;<br>
                            &nbsp; &lt;source src=&quot;horse.ogg&quot; type=&quot;audio/ogg&quot;&gt;<br>
                            &nbsp; &lt;source src=&quot;horse.mp3&quot; type=&quot;audio/mpeg&quot;&gt;<br>
                            Your browser does not support the audio element.<br>
                            &lt;/audio&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="HTML Audio Formats" class="heading-anchor">HTML Audio Formats</h3>
                    There are three supported audio formats: MP3, WAV, and OGG. The browser support for the different formats is:&nbsp;<br>
                    <table class="ws-table-all notranslate">
                        <tr>
                            <th style="width:25%">Browser</th>
                            <th style="width:25%">MP3</th>
                            <th style="width:25%">WAV</th>
                            <th style="width:25%">OGG</th>
                        </tr>
                        <tr>
                            <td>Edge/IE</td>
                            <td>YES</td>
                            <td>YES*</td>
                            <td>YES*</td>
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

                    <h3 id="HTML Audio - Media Types" class="heading-anchor">HTML Audio - Media Types</h3>
                    <table class="ws-table-all notranslate">
                        <tr>
                            <th style="width:50%">File Format</th>
                            <th style="width:50%">Media Type</th>
                        </tr>
                        <tr>
                            <td>MP3</td>
                            <td>audio/mpeg</td>
                        </tr>
                        <tr>
                            <td>OGG</td>
                            <td>audio/ogg</td>
                        </tr>
                        <tr>
                            <td>WAV</td>
                            <td>audio/wav</td>
                        </tr>
                    </table>
                    <hr>

                    <h3 id="HTML Audio - Methods, Properties, and Events" class="heading-anchor">HTML Audio - Methods, Properties, and Events</h3>
                    The HTML DOM defines methods, properties, and events for the <code class="w3-codespan">&lt;audio&gt;</code> element.<br>
                    This allows you to load, play, and pause audios, as well as set duration and volume.<br>
                    There are also DOM events that can notify you when an audio begins to play, is paused, etc.
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