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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Padding</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>Padding is used to create space around an element's content, inside of any defined borders.<br><br>

                    <div class="w3-theme-border" style="width:100%;padding:70px;border-width:1px;border-style:solid;">
                        This element has a padding of 70px.
                    </div>
                    <hr>

                    <h2>CSS Padding</h2>
                    The CSS <code class="w3-codespan">padding</code> properties are used to generate space around
                    an element's content, inside of any defined borders.<br>
                    With CSS, you have full control over the padding. There are properties
                    for setting the padding for each side of an element (top, right, bottom, and left).
                    <hr>


                    <h2>Padding - Individual Sides</h2>
                    CSS has properties for specifying the padding for each
                    side of an element:<br>
                    <ul>
                        <li><code class="w3-codespan">padding-top</code></li>
                        <li><code class="w3-codespan">padding-right</code></li>
                        <li><code class="w3-codespan">padding-bottom</code></li>
                        <li><code class="w3-codespan">padding-left</code></li>
                    </ul>
                    All the padding properties can have the following values:<br>
                    <ul>
                        <li><em>length</em> - specifies a padding in px, pt, cm, etc.</li>
                        <li><em>%</em> - specifies a padding in % of the width of the containing element</li>
                        <li>inherit - specifies that the padding should be inherited from the parent element</li>
                    </ul>
                    <b>Tip:</b> Negative values are not allowed.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Set different padding for all four sides of a &lt;div&gt; element:&nbsp;&nbsp;
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp;
                            padding-top: 50px;<br>
                            &nbsp;&nbsp;padding-right: 30px;<br>
                            &nbsp;&nbsp;padding-bottom: 50px;<br>
                            &nbsp;&nbsp;padding-left: 80px;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Padding - Shorthand Property</h2>
                    To shorten the code, it is possible to specify all the margin properties in one property.<br>
                    If the <code class="w3-codespan">padding</code> property has four values:<br>
                    <ul>
                        <li><b>padding: 25px 50px 75px 100px; </b>
                            <ul>
                                <li>top padding is 25px</li>
                                <li>right padding is 50px</li>
                                <li>bottom padding is 75px</li>
                                <li>left padding is 100px</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Use the padding shorthand property with four values:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p {<br>&nbsp;&nbsp;padding: 25px 50px 75px 100px;<br>}
                        </div>
                    </div><br>

                    If the <code class="w3-codespan">padding</code> property has three values:<br>
                    <ul>
                        <li><b>padding: 25px 50px 75px;</b>
                            <ul>
                                <li>top padding is 25px</li>
                                <li>right and left padding are 50px</li>
                                <li>bottom padding is 75px</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Use the padding shorthand property with three values:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p {<br>&nbsp;
                            padding: 25px 50px 75px;<br>}
                        </div>
                    </div><br>

                    If the <code class="w3-codespan">padding</code> property has two values:<br>
                    <ul>
                        <li><b>padding: 25px 50px;</b>
                            <ul>
                                <li>top and bottom padding are 25px</li>
                                <li>right and left padding are 50px</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Use the padding shorthand property with two values:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p {<br>&nbsp;
                            padding: 25px 50px;<br>}
                        </div>
                    </div><br>

                    If the <code class="w3-codespan">padding</code> property has one value:<br>
                    <ul>
                        <li><b>padding: 25px;</b>
                            <ul>
                                <li>all four paddings are 25px</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Use the padding shorthand property with one value:&nbsp;
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p {<br>&nbsp;&nbsp;padding: 25px;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Padding and Element Width</h2>
                    The CSS <code class="w3-codespan">width</code> property specifies the width of the element's content area. The
                    content area is the portion inside the padding, border, and margin of an element.<br>
                    So, if an element has a specified width, the padding added to that element will
                    be added to the total width of the element. This is often an undesirable result.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Here, the &lt;div&gt; element is given a width of 300px.
                        However, the actual width of the &lt;div&gt; element will be 350px (300px +
                        25px of left padding + 25px of right padding):
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp;&nbsp;width: 300px;<br>&nbsp;&nbsp;padding: 25px;<br>}
                        </div>
                    </div><br>
                    To keep the width at 300px, no matter the amount of padding, you can use the <code class="w3-codespan">
                        box-sizing</code> property. This causes the element to maintain its actual width; if
                    you increase the padding, the available content space will decrease.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Use the box-sizing property to keep the width at 300px, no matter the amount of padding:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp; width: 300px;<br>&nbsp;&nbsp;padding: 25px;<br>&nbsp;&nbsp;box-sizing: border-box;<br>}
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