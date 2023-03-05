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
                    <li><a href="html5_canvas.php">HTML Canvas Graphics</a></li>
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Web Workers API</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>A web worker is a JavaScript running in the background, without affecting the performance of the page.
                    <hr>

                    <h3 id="What is a Web Worker?" class="heading-anchor">What is a Web Worker?</h3>
                    When executing scripts in an HTML page, the page becomes unresponsive until the script is finished.<br>

                    A web worker is a JavaScript that runs in the background, independently of other scripts, without affecting the performance of the page. You can continue to do whatever you want: clicking, selecting things, etc., while the web worker runs in the background.
                    <hr>

                    <h3 id="HTML Web Workers Example" class="heading-anchor">HTML Web Workers Example</h3>
                    The example below creates a simple web worker that count numbers in the background:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            Count numbers: <output id="result"></output><br>
                            <button onclick="startWorker()">Start Worker</button>
                            <button onclick="stopWorker()">Stop Worker</button>

                            <script>
                                var w;

                                function startWorker() {
                                    if (typeof(Worker) !== "undefined") {
                                        if (typeof(w) == "undefined") {
                                            w = new Worker("demo_workers.js");
                                        }
                                        w.onmessage = function(event) {
                                            document.getElementById("result").innerHTML = event.data;
                                        };
                                    } else {
                                        document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Workers...";
                                    }
                                }

                                function stopWorker() {
                                    w.terminate();
                                    w = undefined;
                                }
                            </script>
                        </div>
                    </div>
                    <hr>

                    <h3 id="Check Web Worker Support" class="heading-anchor">Check Web Worker Support</h3>
                    Before creating a web worker, check whether the user's browser supports it:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            if (typeof(Worker) !== &quot;undefined&quot;) {<br>
                            &nbsp;&nbsp;// Yes! Web worker support!<br>
                            &nbsp; // <i>Some code.....</i><br>
                            }
                            else {<br>
                            &nbsp; // Sorry! No Web Worker support..<br>
                            }
                        </div>
                    </div>
                    <hr>

                    <h3 id="Create a Web Worker File" class="heading-anchor">Create a Web Worker File</h3>
                    Now, let's create our web worker in an external JavaScript.<br>

                    Here, we create a script that counts. The script is stored in the "demo_workers.js" file:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            var i = 0;<br>
                            <br>
                            function timedCount()
                            {<br>
                            &nbsp;
                            i = i + 1;<br>
                            &nbsp;
                            postMessage(i);<br>
                            &nbsp;&nbsp;setTimeout(&quot;timedCount()&quot;,500);<br>
                            }
                        </div>
                    </div>
                    The important part of the code above is the <code class="w3-codespan">postMessage()</code> method - which is used to post a message back to the HTML page.<br>
                    <div class="notes">
                        <b>Note:</b> Normally web workers are not used for such simple scripts, but for more CPU intensive tasks.
                    </div>
                    <hr>

                    <h3 id="Create a Web Worker Object" class="heading-anchor">Create a Web Worker Object</h3>
                    Now that we have the web worker file, we need to call it from an HTML page.<br>

                    The following lines checks if the worker already exists, if not - it creates a new web worker object and runs the code in "demo_workers.js":<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            if (typeof(w) == &quot;undefined&quot;) {<br>
                            &nbsp; w = new Worker(&quot;demo_workers.js&quot;);<br>
                            }
                        </div>
                    </div><br>
                    Then we can send and receive messages from the web worker.<br>
                    Add an &quot;onmessage&quot; event listener to the web worker.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            w.onmessage = function(event){<br>
                            &nbsp;&nbsp;document.getElementById(&quot;result&quot;).innerHTML = event.data;<br>
                            };
                        </div>
                    </div><br>
                    When the web worker posts a message, the code within the event listener is executed. The data
                    from the web worker is stored in event.data.
                    <hr>

                    <h3 id="Terminate a Web Worker" class="heading-anchor">Terminate a Web Worker</h3>
                    When a web worker object is created, it will continue to listen for messages (even after the external script is finished) until it is terminated.<br>
                    To terminate a web worker, and free browser/computer resources, use the
                    <code class="w3-codespan">terminate()</code> method:<br>
                    This is done by calling the <code class="w3-codespan">event.preventDefault()</code> method for the ondragover event:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            w.terminate();
                        </div>
                    </div>
                    <hr>

                    <h3 id="Reuse the Web Worker" class="heading-anchor">Reuse the Web Worker</h3>
                    If you set the worker variable to undefined, after it has been terminated, you can reuse the code:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            w = undefined;
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