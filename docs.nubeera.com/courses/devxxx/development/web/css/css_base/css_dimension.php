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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Height and Width</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>The CSS <code class="w3-codespan">height</code> and <code class="w3-codespan">width</code> properties are used to set the
                    height and width of an element.<br>
                    The CSS <code class="w3-codespan">max-width</code> property is used to set the maximum width of an element.<br>
                    The height and width properties do not include padding, borders, or margins. It sets the height/width of the area inside the padding, border, and margin of the element.<br><br>

                    <div class="w3-theme-border" style="height:50px;width:100%;border-width:1px;border-style:solid;padding:5px;">
                        This element has a height of 50 pixels and a width of 100%.
                    </div>
                    <hr>

                    <h2>CSS height and width Values</h2>
                    The <code class="w3-codespan">height</code> and <code class="w3-codespan">width</code> properties
                    may have the following values:<br>
                    <ul>
                        <li><code class="w3-codespan">auto</code> - This is default. The browser
                            calculates the height and width</li>
                        <li><code class="w3-codespan">length</code> - Defines the height/width in px, cm
                            etc.</li>
                        <li><code class="w3-codespan">%</code> - Defines the height/width in percent of
                            the containing block</li>
                        <li><code class="w3-codespan">initial</code> - Sets the height/width to its
                            default value</li>
                        <li><code class="w3-codespan">inherit</code> - The height/width will be
                            inherited from its parent value</li>
                    </ul>
                    <hr>


                    <h2>CSS height and width Examples</h2>
                    <div class="w3-theme-border" style="width:60%;height:200px;padding:10px;background-color:powderblue">
                        This element has a height of 200 pixels and a width of 60%</div><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Set the height and width of a &lt;div&gt; element:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp;&nbsp;height:
                            200px;<br>&nbsp; width: 60%;<br>&nbsp; background-color: powderblue;<br>}
                        </div>
                    </div><br>
                    <div class="w3-theme-border" style="height:100px;width:500px;padding:10px;background-color:powderblue">
                        This element has a height of 100 pixels and a width of 500 pixels.</div>
                    <br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Set the height and width of another &lt;div&gt; element:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp;
                            height:
                            100px;<br>&nbsp;&nbsp;width: 500px;<br>&nbsp;&nbsp;background-color: powderblue;<br>}
                        </div>
                    </div><br>
                    <strong>Note:</strong> Remember that the <code class="w3-codespan">height</code> and <code class="w3-codespan">width</code> properties do not include padding, borders,
                    or margins! They set the height/width of the area inside the padding, border,
                    and margin of the element!
                    <hr>

                    <h2>Setting max-width</h2>
                    The <code class="w3-codespan">max-width</code> property is used to set the maximum width of an element.<br>
                    The <code class="w3-codespan">max-width</code> can be specified in <em>length values</em>, like px, cm, etc., or in percent (%) of the
                    containing block, or set to none (this is
                    default. Means that there is no maximum width).<br>
                    The problem with the <code class="w3-codespan">&lt;div&gt;</code> above occurs when the browser window is smaller than the width of
                    the element (500px). The browser then adds a horizontal scrollbar to the page.<br>
                    Using <code class="w3-codespan">max-width</code> instead, in this situation, will improve the browser's handling of small windows.<br>
                    <strong>Tip:</strong> Drag the browser window to smaller than 500px wide, to see the difference between
                    the two divs!<br><br>
                    <div class="w3-theme-border" style="padding:10px;background-color:powderblue;height:100px; max-width:500px;">
                        This element has a height of 100 pixels and a max-width of 500 pixels.</div><br>
                    <strong>Note:</strong> If you for some reason use both the
                    <code class="w3-codespan">width</code> property and the
                    <code class="w3-codespan">max-width</code> property on the same element, and the value of the
                    <code class="w3-codespan">width</code> property is larger than the
                    <code class="w3-codespan">max-width</code> property; the
                    <code class="w3-codespan">max-width</code> property will be used (and the
                    <code class="w3-codespan">width</code> property will be ignored).<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        This &lt;div&gt; element has a height of 100 pixels and a
                        max-width of 500 pixels:&nbsp;
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>
                            &nbsp; max-width: 500px;<br>&nbsp;
                            height:
                            100px;<br>&nbsp; background-color: powderblue;<br>}
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