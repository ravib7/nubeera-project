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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Plug-ins</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>Plug-ins are computer programs that extend the standard functionality of the browser.
                    <hr>

                    <h3 id="Plug-ins" class="heading-anchor">Plug-ins</h3>
                    Plug-ins were designed to be used for many different purposes:
                    <ul>
                        <li>To run Java applets</li>
                        <li>To run Microsoft ActiveX controls</li>
                        <li>To display Flash movies</li>
                        <li>To display maps</li>
                        <li>To scan for viruses</li>
                        <li>To verify a bank id</li>
                    </ul>
                    <hr>

                    <h3 id="The &lt;object&gt; Element" class="heading-anchor">The &lt;object&gt; Element</h3>
                    The <code class="w3-codespan">&lt;object&gt;</code> element is supported by all browsers.<br>
                    The <code class="w3-codespan">&lt;object&gt;</code> element defines an embedded object within an HTML document.<br>
                    It was designed to embed plug-ins (like Java applets, PDF readers, and Flash Players) in web pages,
                    but can also be used to include HTML in HTML:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;object width=&quot;100%&quot; height=&quot;500px&quot; data=&quot;snippet.html&quot;&gt;&lt;/object&gt;
                        </div>
                    </div><br>
                    Or images if you like:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;object data=&quot;audi.jpeg&quot;&gt;&lt;/object&gt;
                        </div>
                    </div>
                    <hr>


                    <h3 id="The &lt;embed&gt; Element" class="heading-anchor">The &lt;embed&gt; Element</h3>
                    The <code class="w3-codespan">&lt;embed&gt;</code> element is supported in all major browsers.<br>
                    The <code class="w3-codespan">&lt;embed&gt;</code> element also defines an embedded object within an HTML document.<br>
                    Web browsers have supported the &lt;embed&gt; element for a
                    long time. However, it has not been a part of the HTML
                    specification before HTML5.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;embed src=&quot;audi.jpeg&quot;&gt;
                        </div>
                    </div><br>
                    Note that the &lt;embed&gt; element does not have a closing tag. It can not
                    contain alternative text.<br>
                    The <code class="w3-codespan">&lt;embed&gt;</code> element can also be used to include HTML in HTML:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;embed width=&quot;100%&quot; height=&quot;500px&quot; src=&quot;snippet.html&quot;&gt;&lt;embed width=&quot;100%&quot; height=&quot;500px&quot; src=&quot;snippet.html&quot;&gt;
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