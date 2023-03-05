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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Layout - The position Property</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>The <code class="w3-codespan">position</code> property specifies the type of
                    positioning method used for an element (static, relative, fixed, absolute or
                    sticky).
                    <hr>

                    <h2>The position Property</h2>
                    <p>The <code class="w3-codespan">position</code> property specifies the type of positioning method used for an element.</p>
                    <p>There are five different position values: </p>
                    <ul>
                        <li><code class="w3-codespan">static</code></li>
                        <li><code class="w3-codespan">relative</code></li>
                        <li><code class="w3-codespan">fixed</code></li>
                        <li><code class="w3-codespan">absolute</code></li>
                        <li><code class="w3-codespan">sticky</code></li>
                    </ul>
                    <p>Elements are then positioned using the top, bottom, left, and right
                        properties. However, these properties will not work unless the <code class="w3-codespan">position</code>
                        property is set first. They also work differently depending on the position
                        value.</p>
                    <hr>

                    <h2>position: static;</h2>
                    <p>HTML elements are positioned static by default.</p>
                    <p>Static positioned elements are not affected by the top, bottom, left, and right properties.</p>
                    <p>An element with <code class="w3-codespan">position: static;</code> is not positioned in any special way; it is
                        always positioned according to the normal flow of the page:</p>
                    <div class="w3-theme-border w3-margin-bottom" style="border-width:3px;border-style:solid;position:static;">
                        This &lt;div&gt; element has position: static;</div>
                    <p>Here is the CSS that is used:</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div.static {<br>&nbsp;&nbsp;position: static;<br>&nbsp;&nbsp;border: 3px solid #73AD21;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>position: relative;</h2>
                    <p>An element with <code class="w3-codespan">position: relative;</code> is positioned relative to its normal position.</p>
                    <p>Setting the top, right, bottom, and left properties of a relatively-positioned element will cause
                        it to be adjusted away from its normal position. Other content will not be adjusted to fit into any gap left by the
                        element.</p>
                    <div class="w3-theme-border w3-margin-bottom" style="border-width:3px;border-style:solid;position:relative;left:30px;">
                        This &lt;div&gt; element has position: relative;
                    </div>
                    <p>Here is the CSS that is used:</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div.relative {<br>&nbsp; position: relative;<br>&nbsp;
                            left: 30px;<br>&nbsp; border: 3px solid #73AD21;<br>}
                        </div>
                    </div><br>
                    <hr>

                    <h2>position: fixed;</h2>
                    <p>An element with <code class="w3-codespan">position: fixed;</code> is positioned relative to the viewport, which means it always
                        stays in the same place even if the page is scrolled. The top,
                        right, bottom, and left properties are used to position the element.</p>
                    <p>A fixed element does not leave a gap in the page where it would normally have been located.</p>
                    <p>Notice the fixed element in the lower-right corner of the page. Here is the CSS that is used:</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div.fixed {<br>&nbsp; position: fixed;<br>&nbsp;
                            bottom: 0;<br>&nbsp; right: 0;<br>&nbsp; width:
                            300px;<br>&nbsp; border: 3px solid #73AD21;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>position: absolute;</h2>
                    <p>An element with <code class="w3-codespan">position: absolute;</code> is positioned relative to the nearest positioned ancestor
                        (instead of positioned relative to the viewport, like fixed).</p>
                    <p>However; if an absolute positioned element has no positioned ancestors,
                        it uses the document body, and moves along with page scrolling.</p>
                    <p><b>Note:</b> Absolute positioned elements are removed from the normal flow, and can overlap elements.</p>

                    <p>Here is a simple example:</p>

                    <div class="w3-theme-border" style="border-width:3px;border-style:solid;position: relative;width: 400px;height: 200px;">
                        This &lt;div&gt; element has position: relative;

                        <div class="w3-theme-border w3-margin-bottom" style="border-width:3px;border-style:solid;position: absolute;top: 80px;right: 0;width: 200px;height: 100px;">
                            This &lt;div&gt; element has position: absolute;
                        </div>
                    </div>

                    <p>Here is the CSS that is used:</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div.relative {<br>&nbsp;&nbsp;position: relative;<br>&nbsp;
                            width: 400px;<br>&nbsp; height: 200px;<br>&nbsp; border: 3px solid #73AD21;<br>}
                            <br><br>
                            div.absolute {<br>&nbsp;&nbsp;position: absolute;<br>&nbsp;
                            top: 80px;<br>&nbsp; right: 0;<br>&nbsp; width: 200px;<br>&nbsp; height: 100px;<br>&nbsp; border: 3px solid #73AD21;<br>}
                        </div>
                    </div><br>
                    <hr>

                    <h2>position: sticky;</h2>
                    <p>An element with <code class="w3-codespan">position: sticky;</code> is positioned based on the user's scroll position.</p>
                    <p>A sticky element toggles between <code class="w3-codespan">relative</code> and <code class="w3-codespan">fixed</code>, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed).</p><br>
                    <iframe src="trycss_position_sticky_ifr.htm" style="width:100%;border:4px solid #e5e5e5" class="w3-padding"></iframe><br>
                    <div class="notes">
                        <p><strong>Note: </strong>Internet Explorer does not support sticky positioning. Safari requires a -webkit-
                            prefix (see example below). You must also specify at least one of <code class="w3-codespan">top</code>, <code class="w3-codespan">right</code>, <code class="w3-codespan">bottom</code> or <code class="w3-codespan">left</code> for
                            sticky positioning to work.</p>
                    </div>
                    <p>In this example, the sticky element sticks to the top of the page (<code class="w3-codespan">top: 0</code>), when you reach its scroll position.</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div.sticky {<br>&nbsp; position: -webkit-sticky; /* Safari */<br>&nbsp; position:
                            sticky;<br>&nbsp; top: 0;<br>&nbsp; background-color: green;<br>&nbsp;
                            border: 2px solid #4CAF50;<br>}
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