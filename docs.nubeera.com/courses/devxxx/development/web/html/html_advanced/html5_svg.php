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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML SVG Graphics</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>SVG defines vector-based graphics in XML format.
                    <hr>

                    <h3 id="What is SVG?" class="heading-anchor">What is SVG?</h3>
                    <ul>
                        <li>SVG stands for Scalable Vector Graphics</li>
                        <li>SVG is used to define graphics for the Web</li>
                    </ul>
                    <hr>

                    <h3 id="The HTML &lt;svg&gt; Element" class="heading-anchor">The HTML &lt;svg&gt; Element</h3>
                    The HTML <code class="w3-codespan">&lt;svg&gt;</code> element is a container for SVG graphics.<br>
                    SVG has several methods for drawing paths, boxes, circles, text, and graphic images.<br>
                    <hr>

                    <h3 id="SVG Circle" class="heading-anchor">SVG Circle</h3>
                    <svg width="100" height="100">
                        <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
                    </svg>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;svg
                            width=&quot;100&quot; height=&quot;100&quot;&gt;<br>&nbsp; &lt;circle cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;40&quot; stroke=&quot;green&quot;
                            stroke-width=&quot;4&quot; fill=&quot;yellow&quot; /&gt;<br>&lt;/svg&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div>
                    <hr>

                    <h3>SVG Rectangle</h3>
                    <svg width="400" height="100">
                        <rect width="400" height="100" style="fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)" />
                    </svg>
                    <br><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;svg width=&quot;400&quot; height=&quot;100&quot;&gt;<br>&nbsp; &lt;rect width=&quot;400&quot; height=&quot;100&quot; style=&quot;fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)&quot;
                            /&gt;<br>&lt;/svg&gt;<br>
                        </div>
                    </div>
                    <hr>

                    <h3>SVG Rounded Rectangle</h3>
                    <svg width="300" height="180">
                        <rect x="10" y="10" rx="20" ry="20" width="150" height="150" style="fill:red;stroke:black;stroke-width:5;opacity:0.5" />
                        Sorry, your browser does not support inline SVG.
                    </svg>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;svg width=&quot;400&quot; height=&quot;180&quot;&gt;<br>&nbsp; &lt;rect x=&quot;50&quot; y=&quot;20&quot; rx=&quot;20&quot; ry=&quot;20&quot;
                            width=&quot;150&quot; height=&quot;150&quot;<br>&nbsp;
                            style=&quot;fill:red;stroke:black;stroke-width:5;opacity:0.5&quot; /&gt;<br>&lt;/svg&gt;
                        </div>
                    </div>
                    <hr>

                    <h3>SVG Star</h3>
                    <svg width="300" height="200">
                        <polygon points="100,10 40,198 190,78 10,78 160,198" style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;" />
                        Sorry, your browser does not support inline SVG.
                    </svg>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;svg width=&quot;300&quot; height=&quot;200&quot;&gt;<br>
                            &nbsp; &lt;polygon points=&quot;100,10 40,198 190,78 10,78 160,198&quot;<br>
                            &nbsp; style=&quot;fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;&quot; /&gt;<br>
                            &lt;/svg&gt;&lt;svg width=&quot;300&quot; height=&quot;200&quot;&gt;<br>
                            &nbsp; &lt;polygon points=&quot;100,10 40,198 190,78 10,78 160,198&quot;<br>
                            &nbsp; style=&quot;fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;&quot; /&gt;<br>
                            &lt;/svg&gt;
                        </div>
                    </div>
                    <hr>

                    <h3>SVG Logo</h3>
                    <svg height="130" width="500">
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
                                <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
                            </linearGradient>
                        </defs>
                        <ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
                        <text fill="#ffffff" font-size="45" font-family="Verdana" x="50" y="86">SVG</text>
                        Sorry, your browser does not support inline SVG.
                    </svg>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;svg height="130" width="500"&gt;<br>&nbsp; &lt;defs&gt;<br>&nbsp;&nbsp;&nbsp; &lt;linearGradient id="grad1" x1="0%"
                            y1="0%" x2="100%" y2="0%"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1"
                            /&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" /&gt;<br>
                            &nbsp;&nbsp;&nbsp;
                            &lt;/linearGradient&gt;<br>&nbsp; &lt;/defs&gt;<br>&nbsp; &lt;ellipse cx="100" cy="70" rx="85" ry="55"
                            fill="url(#grad1)" /&gt;<br>&nbsp; &lt;text fill="#ffffff" font-size="45"
                            font-family="Verdana" x="50" y="86"&gt;SVG&lt;/text&gt;<br>&nbsp; Sorry, your browser does not
                            support inline SVG.<br>&lt;/svg&gt;
                        </div>
                    </div>
                    <hr>

                    <h4>Differences Between SVG and Canvas</h4>
                    SVG is a language for describing 2D graphics in XML.<br>
                    Canvas draws 2D graphics, on the fly (with a JavaScript).<br>
                    SVG is XML based, which means that every element is available within the SVG
                    DOM. You can attach JavaScript event handlers for an element.<br>
                    In SVG, each drawn shape is remembered as an object. If attributes of an SVG
                    object are changed, the browser can automatically re-render the shape.<br>
                    Canvas is rendered pixel by pixel. In canvas, once the graphic is drawn, it is forgotten by the browser. If its
                    position should be changed, the entire scene needs to be redrawn, including any
                    objects that might have been covered by the graphic.
                    <hr>

                    <h4>Comparison of Canvas and SVG</h4>
                    The table below shows some important differences between Canvas and SVG:<br>
                    <table class="ws-table-all notranslate">
                        <tr>
                            <th style="width:50%">Canvas</th>
                            <th style="width:50%">SVG</th>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>Resolution dependent</li>
                                    <li>No support for event handlers</li>
                                    <li>Poor text rendering capabilities</li>
                                    <li>You can save the resulting image as .png or .jpg</li>
                                    <li>Well suited for graphic-intensive games</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Resolution independent</li>
                                    <li>Support for event handlers</li>
                                    <li>Best suited for applications with large rendering areas (Google Maps)</li>
                                    <li>Slow rendering if complex (anything that uses the DOM a lot will be slow)</li>
                                    <li>Not suited for game applications</li>
                                </ul>
                            </td>
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