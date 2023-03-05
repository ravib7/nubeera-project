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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Text</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>CSS has a lot of properties for formatting text.<br><br><br>
                    <div style="margin:auto;border:1px solid gray;padding:8px;">
                        <h1 style="text-align:center;text-transform:uppercase;color:#04AA6D;">text formatting</h1>
                        <p style="text-indent:50px;text-align:justify;letter-spacing:3px;">This text is styled with some of the text formatting properties. The heading uses the text-align, text-transform, and color properties.
                            The paragraph is indented, aligned, and the space between characters is specified.</p>
                    </div><br>
                    <hr>

                    <h2>Text Color</h2>
                    The <code class="w3-codespan">color</code> property is used to set the color of the text.
                    The color is specified by:<br>
                    <ul>
                        <li>a color name - like &quot;red&quot;</li>
                        <li>a HEX value - like &quot;#ff0000&quot;</li>
                        <li>an RGB value - like &quot;rgb(255,0,0)&quot;</li>
                    </ul>
                    The default text color for a page is defined in the body selector.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            body {<br>&nbsp; color: blue;<br>}<br>
                            <br>h1 {<br>&nbsp; color: green;<br>}
                        </div>
                    </div>
                    <hr>


                    <h2>Text Color and Background Color</h2>
                    In this example, we define both the <code class="w3-codespan">background-color</code> property and the <code class="w3-codespan">color</code> property:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            body {<br>&nbsp; background-color: lightgrey;<br>&nbsp; color: blue;<br>}<br>
                            <br>h1 {<br>&nbsp; background-color: black;<br>&nbsp; color: white;<br>}<br><br>
                            div {<br>&nbsp; background-color: blue;<br>&nbsp; color: white;<br>}
                        </div>
                    </div><br>
                    <div class="notes">
                        <strong>Important:</strong> High contrast is very important for people with
                        vision problems. So, always ensure that the contrast
                        between the text color and the background color (or background image) is good!
                    </div>
                    <hr>

                    <h2>Text Alignment</h2>
                    The <code class="w3-codespan">text-align</code> property is used to set the horizontal alignment of a text.<br>
                    A text can be left or right aligned, centered, or justified.<br>
                    The following example shows center aligned, and left and right aligned text
                    (left alignment is default if text direction is left-to-right, and right
                    alignment is default if text direction is right-to-left):<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            h1 {<br>&nbsp; text-align: center;<br>}<br><br>h2 {<br>&nbsp;&nbsp;text-align: left;<br>}<br><br>h3 {<br>&nbsp;&nbsp;text-align: right;<br>
                            }
                        </div>
                    </div><br>
                    When the <code class="w3-codespan">text-align</code> property is set to &quot;justify&quot;, each line is
                    stretched so that every line has equal width, and the left and right margins are
                    straight (like in magazines and newspapers):<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp;&nbsp;text-align: justify;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Text Direction</h2>
                    The <code class="w3-codespan">direction</code> and <code class="w3-codespan">
                        unicode-bidi</code> properties can be used to change the text direction of an element:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p {<br>&nbsp;&nbsp;direction: rtl;<br>&nbsp; unicode-bidi: bidi-override;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Text Decoration</h2>
                    The <code class="w3-codespan">text-decoration</code> property is used to set or remove decorations from text.<br>
                    The value <code class="w3-codespan">text-decoration: none;</code> is often used to remove underlines from links:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            a {<br>&nbsp; text-decoration: none;<br>}
                        </div>
                    </div><br>
                    The other <code class="w3-codespan">text-decoration</code> values are used to decorate text:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            h2 {<br>&nbsp; text-decoration: overline;<br>}<br>
                            <br>h3 {<br>&nbsp; text-decoration: line-through;<br>}<br>
                            <br>h4 {<br>&nbsp; text-decoration: underline;<br>}
                        </div>
                    </div><br>
                    <div class="notes">
                        <strong>Note:</strong> It is not recommended to underline text that is not a link, as this often confuses
                        the reader.
                    </div>
                    <hr>

                    <h2>Text Transformation</h2>
                    The <code class="w3-codespan">text-transform</code> property is used to specify uppercase and lowercase letters in a text.<br>
                    It can be used to turn everything into uppercase or lowercase letters, or
                    capitalize the first letter of each word:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p.uppercase {<br>&nbsp;&nbsp;text-transform: uppercase;<br>}<br>
                            <br>p.lowercase {<br>&nbsp;&nbsp;text-transform: lowercase;<br>}<br>
                            <br>p.capitalize {<br>&nbsp;&nbsp;text-transform: capitalize;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Text Indentation</h2>
                    The <code class="w3-codespan">text-indent</code> property is used to specify the indentation of the first line of a text:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p {<br>&nbsp; text-indent: 50px;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Letter Spacing and Line Height</h2>
                    The <code class="w3-codespan">letter-spacing</code> property is used to specify the space between the characters in a text.<br>
                    The following example demonstrates how to increase or decrease the space between characters.<br>
                    The <code class="w3-codespan">line-height</code> property is used to specify the space between lines:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            h1 {<br>&nbsp; letter-spacing: 5px;<br>}<br><br>h2 {<br>&nbsp;&nbsp;letter-spacing: -2px;<br>}<br>
                            p.small {<br>&nbsp; line-height: 0.8;<br>}<br><br>p.big {<br>&nbsp;
                            line-height: 1.8;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Word Spacing</h2>
                    The <code class="w3-codespan">white-space</code> property specifies how white-space inside an element is handled.<br>
                    This example demonstrates how to disable text wrapping inside an element:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p {<br>&nbsp; white-space: nowrap;<br>}
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