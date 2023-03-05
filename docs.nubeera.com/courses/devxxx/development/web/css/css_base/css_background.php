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
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../../templates/navbar.php'; ?>

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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Backgrounds</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>The CSS background properties are used to add background effects for elements.
                    <hr>

                    <div style="width:100%;border:1px solid gray;padding:8px;background:#e1efbb url('https://i.pinimg.com/originals/9e/7b/47/9e7b47982ee1b58fef26717182b4b28c.jpg')">
                        <p>In these chapters, you will learn about the following CSS background properties:</p>
                        <ul>
                            <li> <code class="w3-codespan">background-color</code></li>
                            <li> <code class="w3-codespan">background-image</code></li>
                            <li> <code class="w3-codespan">background-repeat</code></li>
                            <li> <code class="w3-codespan">background-attachment</code></li>
                            <li> <code class="w3-codespan">background-position</code></li>
                            <li> <code class="w3-codespan">background</code> (shorthand property)</li>
                        </ul>
                    </div>
                    <hr>

                    <h2>CSS background-color</h2>
                    The <code class="w3-codespan">background-color</code> property specifies the background color of an element.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        The background color of a page is set like this:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            body {<br>&nbsp;&nbsp;background-color: lightblue;<br>}
                        </div>
                    </div><br>
                    With CSS, a color is most often specified by:
                    <ul>
                        <li>a valid color name - like &quot;red&quot;</li>
                        <li>a HEX value - like &quot;#ff0000&quot;</li>
                        <li>an RGB value - like &quot;rgb(255,0,0)&quot;</li>
                    </ul>
                    <hr>


                    <h2>Other Elements</h2>
                    You can set the background color for any HTML elements:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Here, the &lt;h1&gt;, &lt;p&gt;, and &lt;div&gt; elements will have different background colors:&nbsp;
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            h1 {<br>&nbsp;&nbsp;background-color: green;<br>}<br><br>
                            div {<br>&nbsp;&nbsp;background-color: lightblue;<br>}<br><br>p {<br>&nbsp;&nbsp;background-color:
                            yellow;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Opacity / Transparency</h2>
                    The <code class="w3-codespan">opacity</code> property specifies the opacity/transparency of an element. It can take a value from 0.0 - 1.0. The lower value, the more transparent:<br>
                    <div class="w3-cell w3-mobile w3-center">
                        <div style="background-color:#4CAF50;opacity:1;padding:50px;color:black">
                            <p>opacity 1</p>
                        </div>
                    </div>

                    <div class="w3-cell w3-mobile w3-center">
                        <div style="background-color:#4CAF50;opacity:0.6;padding:50px;color:black">
                            <p>opacity 0.6</p>
                        </div>
                    </div>

                    <div class="w3-cell w3-mobile w3-center">
                        <div style="background-color:#4CAF50;opacity:0.3;padding:50px;color:black">
                            <p>opacity 0.3</p>
                        </div>
                    </div>

                    <div class="w3-cell w3-mobile w3-center">
                        <div style="background-color:#4CAF50;opacity:0.1;padding:50px;color:black">
                            <p>opacity 0.1</p>
                        </div>
                    </div><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp; background-color: green;<br>&nbsp;&nbsp;opacity: 0.3;<br>}
                        </div>
                    </div><br>
                    <div class="notes">
                        <strong>Note:</strong> When using the <code class="w3-codespan">opacity</code> property to add transparency to the background of an element, all of its child elements
                        inherit the same transparency. This can make the text inside a fully transparent element hard to read.
                    </div>
                    <hr>

                    <h2>Transparency using RGBA</h2>
                    If you do not want to apply opacity to child elements, like in our example above, use <strong>RGBA</strong> color values.
                    The following example sets the opacity for the background color and not the text:<br>
                    <div class="w3-cell w3-mobile w3-center">
                        <div style="background:rgb(76, 175, 80);padding:50px;color:black">
                            <p>100% opacity</p>
                        </div>
                    </div>

                    <div class="w3-cell w3-mobile w3-center">
                        <div style="background:rgba(76, 175, 80,0.6);padding:50px;color:black">
                            <p>60% opacity</p>
                        </div>
                    </div>

                    <div class="w3-cell w3-mobile w3-center">
                        <div style="background:rgba(76, 175, 80,0.3);padding:50px;color:black">
                            <p>30% opacity</p>
                        </div>
                    </div>

                    <div class="w3-cell w3-mobile w3-center">
                        <div style="background:rgba(76, 175, 80,0.1);padding:50px;color:black">
                            <p>10% opacity</p>
                        </div>
                    </div><br>
                    An RGBA color value is specified with: rgba(red, green, blue, alpha). The alpha parameter is a number between 0.0 (fully transparent) and 1.0 (fully opaque).<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp; background: rgba(0, 128, 0, 0.3) /* Green background with 30% opacity */<br>}
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