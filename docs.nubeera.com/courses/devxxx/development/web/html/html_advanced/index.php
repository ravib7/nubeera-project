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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Canvas Graphics</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>
                    <div>
                        <canvas id="myCanvas" width="270" height="160" style="border:1px solid #c3c3c3;float:left;margin-right:20px;margin-bottom:15px">
                            Your browser does not support the &lt;canvas&gt; element.
                        </canvas>
                        <p class="intro">The HTML <code class="w3-codespan">&lt;canvas&gt;</code> element is used to draw graphics on a web page.</p>
                        <p class="intro">The graphic to the left is created with <code class="w3-codespan">&lt;canvas&gt;</code>. It shows four
                            elements: a red rectangle, a gradient rectangle,
                            a multicolor rectangle, and a multicolor text.</p>
                    </div>
                    <div style="clear:both;"></div>
                    <script>
                        var c = document.getElementById("myCanvas");
                        var canvOK = 1;
                        try {
                            c.getContext("2d");
                        } catch (er) {
                            canvOK = 0;
                        }
                        if (canvOK == 1) {
                            var ctx = c.getContext("2d");
                            ctx.fillStyle = "#FF0000";
                            ctx.fillRect(20, 20, 100, 50);

                            var grd = ctx.createLinearGradient(140, 20, 240, 70);
                            grd.addColorStop(0, "black");
                            grd.addColorStop(1, "white");
                            ctx.fillStyle = grd;
                            ctx.fillRect(140, 20, 100, 50);

                            var grd2 = ctx.createLinearGradient(20, 90, 120, 90);
                            grd2.addColorStop(0, "black");
                            grd2.addColorStop("0.3", "magenta");
                            grd2.addColorStop("0.5", "blue");
                            grd2.addColorStop("0.6", "green");
                            grd2.addColorStop("0.8", "yellow");
                            grd2.addColorStop(1, "red");
                            ctx.fillStyle = grd2;
                            ctx.fillRect(20, 90, 100, 50);

                            ctx.font = "30px Verdana";
                            var grd3 = ctx.createLinearGradient(140, 20, 240, 90);
                            grd3.addColorStop(0, "black");
                            grd3.addColorStop("0.3", "magenta");
                            grd3.addColorStop("0.6", "blue");
                            grd3.addColorStop("0.8", "green");
                            grd3.addColorStop(1, "red");
                            ctx.strokeStyle = grd3;
                            ctx.strokeText("Smile!", 140, 120);
                        }
                    </script>
                    <hr>

                    <h3 id="What is HTML Canvas?" class="heading-anchor">What is HTML Canvas?</h3>
                    The HTML <code class="w3-codespan">&lt;canvas&gt;</code> element is used to draw graphics, on the fly, via JavaScript.<br>
                    The <code class="w3-codespan">&lt;canvas&gt;</code> element is only a container for graphics. You must use
                    JavaScript to actually draw the graphics.<br>
                    Canvas has several methods for drawing paths, boxes, circles, text, and adding images.<br>
                    <hr>

                    <h3 id="Canvas Examples" class="heading-anchor">Canvas Examples</h3>
                    A canvas is a rectangular area on an HTML page. By default, a canvas has no border and no content.<br>
                    The markup looks like this:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;canvas id="myCanvas&quot; width="200" height="100"&gt;&lt;/canvas&gt;
                        </div>
                    </div>
                    <b>Note:</b> Always specify an <code class="w3-codespan">id</code> attribute (to be referred to in a script),
                    and a <code class="w3-codespan">width</code> and <code class="w3-codespan">height</code> attribute to define the size of the canvas. To add a border, use the <code class="w3-codespan">style</code> attribute.<br>
                    Here is an example of a basic, empty canvas:<br>
                    <canvas id="myCanvas" width="200" height="100" style="border:1px solid #000000;">
                        Your browser does not support the canvas element.
                    </canvas>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;canvas id="myCanvas&quot; width="200" height="100"
                            style=&quot;border:1px solid
                            #000000;&quot;&gt;<br>
                            &lt;/canvas&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Add a JavaScript" class="heading-anchor">Add a JavaScript</h3>
                    After creating the rectangular canvas area, you must add a JavaScript to do the drawing.<br>
                    Here are some examples:<br>
                    <h4>Draw a Line</h4>
                    <canvas id="myCanvas2" width="200" height="100" style="border:1px solid #d3d3d3;">
                        Your browser does not support the canvas element
                    </canvas>
                    <script>
                        var c = document.getElementById("myCanvas2");
                        var canvOK = 1;
                        try {
                            c.getContext("2d");
                        } catch (er) {
                            canvOK = 0;
                        }
                        if (canvOK == 1) {
                            var ctx = c.getContext("2d");
                            ctx.moveTo(0, 0);
                            ctx.lineTo(200, 100);
                            ctx.stroke();
                        }
                    </script>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;script&gt;<br>var c = document.getElementById(&quot;myCanvas&quot;);<br>var ctx = c.getContext(&quot;2d&quot;);<br>
                            ctx.moveTo(0, 0);<br>ctx.lineTo(200, 100);<br>
                            ctx.stroke();<br>&lt;/script&gt;
                        </div>
                    </div>
                    <hr>

                    <h4>Draw a Circle</h4>
                    <canvas id="myCanvas3" width="200" height="100" style="border:1px solid #d3d3d3;">
                        Your browser does not support the canvas element
                    </canvas>
                    <script>
                        var c = document.getElementById("myCanvas3");
                        var canvOK = 1;
                        try {
                            c.getContext("2d");
                        } catch (er) {
                            canvOK = 0;
                        }
                        if (canvOK == 1) {
                            var ctx = c.getContext("2d");
                            ctx.beginPath();
                            ctx.arc(95, 50, 40, 0, 2 * Math.PI);
                            ctx.stroke();
                        }
                    </script>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;script&gt;<br>var c = document.getElementById(&quot;myCanvas&quot;);<br>var ctx = c.getContext(&quot;2d&quot;);<br>
                            ctx.beginPath();<br>ctx.arc(95, 50, 40, 0, 2 * Math.PI);<br>ctx.stroke();<br>
                            &lt;/script&gt;
                        </div>
                    </div>
                    <hr>

                    <h4>Draw a Text</h4>
                    <canvas id="myCanvas4" width="200" height="100" style="border:1px solid #d3d3d3;">
                        Your browser does not support the canvas element
                    </canvas>
                    <script>
                        var c = document.getElementById("myCanvas4");
                        var canvOK = 1;
                        try {
                            c.getContext("2d");
                        } catch (er) {
                            canvOK = 0;
                        }
                        if (canvOK == 1) {
                            var ctx = c.getContext("2d");
                            ctx.font = "30px Arial";
                            ctx.fillText("Hello World", 10, 50);
                        }
                    </script>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;script&gt;<br>var c = document.getElementById(&quot;myCanvas&quot;);<br>var ctx = c.getContext(&quot;2d&quot;);<br>
                            ctx.font = &quot;30px Arial&quot;;<br>ctx.fillText(&quot;Hello World&quot;, 10, 50);<br>
                            &lt;/script&gt;
                        </div>
                    </div>
                    <hr>

                    <h4>Stroke Text</h4>
                    <canvas id="myCanvas5" width="200" height="100" style="border:1px solid #d3d3d3;">
                        Your browser does not support the canvas element
                    </canvas>
                    <script>
                        var c = document.getElementById("myCanvas5");
                        var canvOK = 1;
                        try {
                            c.getContext("2d");
                        } catch (er) {
                            canvOK = 0;
                        }
                        if (canvOK == 1) {
                            var ctx = c.getContext("2d");
                            ctx.font = "30px Arial";
                            ctx.strokeText("Hello World", 10, 50);
                        }
                    </script>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;script&gt;<br>var c = document.getElementById(&quot;myCanvas&quot;);<br>var ctx = c.getContext(&quot;2d&quot;);<br>
                            ctx.font = &quot;30px Arial&quot;;<br>ctx.strokeText(&quot;Hello World&quot;, 10, 50);<br>
                            &lt;/script&gt;
                        </div>
                    </div>
                    <hr>

                    <h4>Draw Linear Gradient</h4>
                    <canvas id="myCanvas6" width="200" height="100" style="border:1px solid #d3d3d3;">
                        Your browser does not support the canvas element
                    </canvas>
                    <script>
                        var c = document.getElementById("myCanvas6");
                        var canvOK = 1;
                        try {
                            c.getContext("2d");
                        } catch (er) {
                            canvOK = 0;
                        }
                        if (canvOK == 1) {
                            var ctx = c.getContext("2d");
                            // Create gradient
                            var grd = ctx.createLinearGradient(0, 0, 200, 0);
                            grd.addColorStop(0, "red");
                            grd.addColorStop(1, "white");
                            // Fill with gradient
                            ctx.fillStyle = grd;
                            ctx.fillRect(10, 10, 150, 80);
                        }
                    </script>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;script&gt;<br>var c = document.getElementById(&quot;myCanvas&quot;);<br>
                            var ctx = c.getContext(&quot;2d&quot;);<br>
                            <br>
                            // Create gradient<br>
                            var grd = ctx.createLinearGradient(0, 0, 200, 0);<br>
                            grd.addColorStop(0, &quot;red&quot;);<br>
                            grd.addColorStop(1, &quot;white&quot;);<br>
                            <br>
                            // Fill with gradient<br>
                            ctx.fillStyle = grd;<br>
                            ctx.fillRect(10, 10, 150, 80);<br>&lt;/script&gt;
                        </div>
                    </div>
                    <hr>

                    <h4>Draw Circular Gradient</h4>
                    <canvas id="myCanvas7" width="200" height="100" style="border:1px solid #d3d3d3;">
                        Your browser does not support the canvas element
                    </canvas>
                    <script>
                        var c = document.getElementById("myCanvas7");
                        var canvOK = 1;
                        try {
                            c.getContext("2d");
                        } catch (er) {
                            canvOK = 0;
                        }
                        if (canvOK == 1) {
                            var ctx = c.getContext("2d");
                            // Create gradient
                            var grd = ctx.createRadialGradient(75, 50, 5, 90, 60, 100);
                            grd.addColorStop(0, "red");
                            grd.addColorStop(1, "white");
                            // Fill with gradient
                            ctx.fillStyle = grd;
                            ctx.fillRect(10, 10, 150, 80);
                        }
                    </script>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;script&gt;<br>var c = document.getElementById(&quot;myCanvas&quot;);<br>
                            var ctx = c.getContext(&quot;2d&quot;);<br>
                            <br>
                            // Create gradient<br>
                            var grd = ctx.createRadialGradient(75, 50, 5, 90, 60, 100);<br>
                            grd.addColorStop(0, &quot;red&quot;);<br>
                            grd.addColorStop(1, &quot;white&quot;);<br>
                            <br>
                            // Fill with gradient<br>
                            ctx.fillStyle = grd;<br>ctx.fillRect(10, 10, 150, 80);<br>&lt;/script&gt;
                        </div>
                    </div>
                    <hr>

                    <h4>Draw Image</h4>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;script&gt;<br>var c = document.getElementById(&quot;myCanvas&quot;);<br>
                            var ctx = c.getContext(&quot;2d&quot;);<br>
                            var img = document.getElementById(&quot;scream&quot;);<br>
                            ctx.drawImage(img, 10, 10);<br>&lt;/script&gt;
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