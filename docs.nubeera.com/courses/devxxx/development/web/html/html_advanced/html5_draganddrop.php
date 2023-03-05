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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Drag and Drop API</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>In HTML, any element can be dragged and dropped.
                    <hr>

                    <h3 id="Example" class="heading-anchor">Example</h3>
                    <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <img src="https://www.w3schools.com/html/img_w3slogo.gif" draggable="true" ondragstart="drag(event)" id="drag1" alt="W3Schools">
                    </div>
                    <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div><br><br>
                    <p style="clear:both">Drag the W3Schools image into the rectangle.</p>
                    <hr>

                    <h3 id="Drag and Drop" class="heading-anchor">Drag and Drop</h3>
                    Drag and drop is a very common feature. It is when you "grab" an object and drag it to a different location.
                    <hr>

                    <h3 id="HTML Drag and Drop Example" class="heading-anchor">HTML Drag and Drop Example</h3>
                    The example below is a simple drag and drop example:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;!DOCTYPE HTML&gt;<br>
                            &lt;html&gt;<br>
                            &lt;head&gt;<br>
                            &lt;script&gt;<br>
                            function allowDrop(ev)
                            {<br>
                            &nbsp;&nbsp;ev.preventDefault();<br>
                            }<br>
                            <br>
                            function drag(ev)
                            {<br>
                            &nbsp;
                            ev.dataTransfer.setData(&quot;text&quot;, ev.target.id);<br>
                            }<br>
                            <br>
                            function drop(ev)
                            {<br>
                            &nbsp;
                            ev.preventDefault();<br>
                            &nbsp;&nbsp;var data = ev.dataTransfer.getData(&quot;text&quot;);<br>
                            &nbsp;&nbsp;ev.target.appendChild(document.getElementById(data));<br>
                            }<br>
                            &lt;/script&gt;<br>
                            &lt;/head&gt;<br>
                            &lt;body&gt;<br>
                            <br>
                            &lt;div id=&quot;div1&quot; ondrop=&quot;drop(event)&quot;
                            ondragover=&quot;allowDrop(event)&quot;&gt;&lt;/div&gt;<br>
                            <br>
                            &lt;img id=&quot;drag1&quot; src=&quot;img_logo.gif&quot; draggable=&quot;true&quot;
                            ondragstart=&quot;drag(event)&quot; width=&quot;336&quot; height=&quot;69&quot;&gt;<br>
                            <br>
                            &lt;/body&gt;<br>
                            &lt;/html&gt;
                        </div>
                    </div><br>
                    It might seem complicated, but lets go through all the different parts of a drag and drop event.
                    <hr>

                    <h3 id="Make an Element Draggable" class="heading-anchor">Make an Element Draggable</h3>
                    First of all: To make an element draggable, set the <code class="w3-codespan">draggable</code> attribute to true:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;img draggable=&quot;true&quot;&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="What to Drag - ondragstart and setData()" class="heading-anchor">What to Drag - ondragstart and setData()</h3>
                    Then, specify what should happen when the element is dragged.<br>
                    In the example above, the <code class="w3-codespan">ondragstart</code> attribute calls a function, drag(event),
                    that specifies what data to be dragged.<br>
                    The <code class="w3-codespan">dataTransfer.setData()</code> method sets the data type and the value of the
                    dragged data:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            function drag(ev) {<br>&nbsp; ev.dataTransfer.setData(&quot;text&quot;, ev.target.id);<br>
                            }
                        </div>
                    </div><br>
                    In this case, the data type is "text" and the value is the id of the draggable element ("drag1").
                    <hr>

                    <h3 id="Where to Drop - ondragover" class="heading-anchor">Where to Drop - ondragover</h3>
                    The <code class="w3-codespan">ondragover</code> event specifies where the dragged data can be dropped.<br>
                    By default, data/elements cannot be dropped in other elements. To allow a drop,
                    we must prevent the default handling of the element.<br>
                    This is done by calling the <code class="w3-codespan">event.preventDefault()</code> method for the ondragover event:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            <i>event</i>.preventDefault()
                        </div>
                    </div>
                    <hr>

                    <h3 id="Do the Drop - ondrop" class="heading-anchor">Do the Drop - ondrop</h3>
                    When the dragged data is dropped, a drop event occurs.<br>
                    In the example above, the ondrop attribute calls a function, drop(event):<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            function drop(ev)
                            {<br>
                            &nbsp;
                            ev.preventDefault();<br>
                            &nbsp;
                            var data = ev.dataTransfer.getData(&quot;text&quot;);<br>
                            &nbsp;
                            ev.target.appendChild(document.getElementById(data));<br>
                            }
                        </div>
                    </div><br>
                    Code explained:
                    <ul>
                        <li>Call preventDefault() to prevent the browser default handling of the data (default is open as link on drop)</li>
                        <li>Get the dragged data with the dataTransfer.getData() method. This method will return any data that was set to the same type in the setData() method</li>
                        <li>The dragged data is the id of the dragged element (&quot;drag1&quot;)</li>
                        <li>Append the dragged element into the drop element</li>
                    </ul>
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