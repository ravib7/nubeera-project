<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Basic CSS</title>

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

    <style>
        p {
            text-align: left;
        }

        <style>.topnav {
            z-index: 3;
        }
    </style>
    </style>

</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Basic CSS</strong><br><br>
                <ul>
                    <li><a href="index.php">Introduction</a></li>
                    <li><a href="css_syntax.php">Syntax</a></li>
                    <li><a href="css_selectors.php">Selectors</a></li>
                    <li><a href="css_howto.php">How to</a></li>
                    <li><a href="css_comments.php">Comments</a></li>
                    <li><a href="css_colors.php">Colors</a></li>
                    <li><a href="css_background.php">Background</a></li>
                    <li><a href="css_background_attachment.php">Background attachment </a></li>
                    <li><a href="css_background_image.php">Background image </a></li>
                    <li><a href="css_border.php">Border</a></li>
                    <li><a href="css_margin.php">Margin</a></li>
                    <li><a href="css_padding.php">Padding</a></li>
                    <li><a href="css_dimension.php">Hight&Width</a></li>
                    <li><a href="css_boxmodel.php">Boxmodel</a></li>
                    <li><a href="css_outline.php">Outline</a></li>
                    <li><a href="css_text.php">Text</a></li>
                    <li><a href="css_font.php">Font</a></li>
                    <li><a href="css_icons.php">Icons</a></li>
                    <li><a href="css_link.php">Link</a></li>
                    <li><a href="css_list.php">List</a></li>
                    <li><a href="css_table.php">Table</a></li>
                    <li><a href="css_display_visibility.php">Display visibility</a></li>
                    <li><a href="css_max-width.php">Max-Width</a></li>
                    <li><a href="css_positioning.php">Positioning</a></li>
                    <li><a href="css_z-index.php">Z-index</a></li>
                    <li><a href="css_overflow.php">Overflow</a></li>
                    <li><a href="css_float.php">Float</a></li>
                    <li><a href="css_inline-block.php">Inline-block</a></li>

                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Layout - The z-index Property</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>The <code class="w3-codespan">z-index</code> property specifies the
                    stack order of an element.
                    <hr>

                    <h2>The z-index Property</h2>
                    <p>When elements are positioned, they can overlap other elements.</p>
                    <p>The <code class="w3-codespan">z-index</code> property specifies the stack order of an element (which element should be placed in front of, or behind, the others).</p>
                    <p>An element can have a positive or negative stack order:</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            img
                            {<br>
                            &nbsp;
                            position: absolute;<br>
                            &nbsp;&nbsp;left: 0px;<br>
                            &nbsp;
                            top: 0px;<br>
                            &nbsp;
                            z-index: -1;<br>
                            }
                        </div>
                    </div>
                    <hr>

                    <h2>Another z-index Example</h2>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Here we see that an element with greater stack order is always above an element with a lower stack order:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>.container {<br>&nbsp; position: relative;<br>}<br>
                            <br>.black-box {<br>&nbsp; position: relative;<br>&nbsp; z-index: 1;<br>&nbsp;
                            border: 2px solid black;<br>&nbsp; height: 100px;<br>&nbsp; margin: 30px;<br>}<br><br>.gray-box {<br>&nbsp;
                            position: absolute;<br>&nbsp; z-index: 3;<br>&nbsp; background: lightgray;<br>&nbsp; height: 60px; <br>&nbsp;
                            width: 70%;<br>&nbsp; left: 50px;<br>&nbsp; top: 50px;<br>}<br><br>.green-box {<br>&nbsp; position: absolute;<br>&nbsp; z-index: 2;<br>&nbsp; background: lightgreen;<br>&nbsp;
                            width: 35%;<br>&nbsp; left: 270px;<br>&nbsp; top: -15px;<br>&nbsp; height:
                            100px;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>
                            <br>&lt;div class=&quot;container&quot;&gt;<br>&nbsp; &lt;div
                            class=&quot;black-box&quot;&gt;Black box&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;gray-box&quot;&gt;Gray
                            box&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;green-box&quot;&gt;Green box&lt;/div&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div>
                    <hr>

                    <h2>Without z-index</h2>
                    <p>If two positioned elements overlap each other without a <code class="w3-codespan">z-index</code>
                        specified, the element defined <strong>last in the HTML code</strong> will be shown on top.</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Same example as above, but here with no z-index specified:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>.container {<br>&nbsp; position: relative;<br>}<br>
                            <br>.black-box {<br>&nbsp; position: relative;<br>&nbsp;
                            border: 2px solid black;<br>&nbsp; height: 100px;<br>&nbsp; margin: 30px;<br>}<br><br>.gray-box {<br>&nbsp;
                            position: absolute;<br>&nbsp; background: lightgray;<br>&nbsp; height: 60px; <br>&nbsp;
                            width: 70%;<br>&nbsp; left: 50px;<br>&nbsp; top: 50px;<br>}<br><br>.green-box {<br>&nbsp; position: absolute;<br>&nbsp; background: lightgreen;<br>&nbsp;
                            width: 35%;<br>&nbsp; left: 270px;<br>&nbsp; top: -15px;<br>&nbsp; height:
                            100px;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>
                            <br>&lt;div class=&quot;container&quot;&gt;<br>&nbsp; &lt;div
                            class=&quot;black-box&quot;&gt;Black box&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;gray-box&quot;&gt;Gray
                            box&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;green-box&quot;&gt;Green box&lt;/div&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div><br>
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