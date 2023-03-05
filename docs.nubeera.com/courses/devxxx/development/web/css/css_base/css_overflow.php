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

        <style>div.hidden {
            padding: 4px;
            background-color: #eee;
            width: 200px;
            height: 100px;
            overflow: hidden;
            xborder: 1px dotted red;
        }

        #overflowTest {
            background: #33a4ef;
            color: white;
            padding: 15px;
            width: 100%;
            height: 100px;
            overflow: scroll;
            border: 1px solid #ccc;
        }

        div.visible {
            padding: 4px;
            background-color: #eee;
            width: 200px;
            height: 100px;
            overflow: visible;
            xborder: 1px dotted red;
        }

        div.scroll {
            padding: 4px;
            background-color: #eee;
            width: 200px;
            height: 100px;
            overflow: scroll;
            xborder: 1px dotted red;
        }

        div.auto {
            padding: 4px;
            background-color: #eee;
            width: 200px;
            height: 100px;
            overflow: auto;
            xborder: 1px dotted red;
        }

        div.scrollx {
            padding: 4px;
            background-color: #eee;
            width: 200px;
            height: 100px;
            overflow-y: scroll;
            overflow-x: hidden;
            xborder: 1px dotted red;
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Layout - Overflow</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>
                    <p>The CSS <code class="w3-codespan">overflow</code> property controls what
                        happens to content that is too big to fit into an area.</p><br>
                    <div id="overflowTest">This text is really long and the height of its container is only 100 pixels. Therefore, a scrollbar is added to help the reader to scroll the content. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</div>
                    <br>
                    <hr>

                    <h2>CSS Overflow</h2>
                    <p>The <code class="w3-codespan">overflow</code> property specifies whether to clip
                        the content or
                        to add scrollbars when the content of an element is too big to fit in the specified
                        area.</p>

                    <p>The <code class="w3-codespan">overflow</code> property has the following values:</p>
                    <ul>
                        <li><code class="w3-codespan">visible</code> - Default. The overflow is not clipped.
                            The content renders outside the element's box</li>
                        <li><code class="w3-codespan">hidden</code> - The overflow is clipped, and the rest of the content will be invisible</li>
                        <li><code class="w3-codespan">scroll</code> - The overflow is clipped, and a scrollbar is added to see the rest of the content</li>
                        <li><code class="w3-codespan">auto</code> - Similar to <code class="w3-codespan">scroll</code>,
                            but it adds scrollbars only when necessary</li>
                    </ul>
                    <div class="notes">
                        <p><strong>Note:</strong> The <code class="w3-codespan">overflow</code> property only works for block elements with a specified height.</p>
                        <p><strong>Note:</strong> In OS X Lion (on Mac), scrollbars are hidden by default and only shown when being used (even though "overflow:scroll" is set).</p>
                    </div>
                    <hr>

                    <h2>overflow: visible</h2>
                    <p>By default, the overflow is <code class="w3-codespan">visible</code>, meaning that it is not clipped and it
                        renders outside the element's box:</p>
                    <div class="visible">You can use the overflow property when you want to have better control of the layout. The overflow property specifies what happens if content overflows an element's box.</div>
                    <br><br><br><br><br><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp; width: 200px;<br>&nbsp;&nbsp;height:
                            50px;<br>&nbsp;&nbsp;background-color: #eee;<br>&nbsp;
                            overflow: visible;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>overflow: hidden</h2>
                    <p>With the <code class="w3-codespan">hidden</code> value, the overflow is clipped, and the rest of the content is hidden:</p>
                    <div class="hidden">You can use the overflow property when you want to have better control of the layout. The overflow property specifies what happens if content overflows an element's box.</div>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp;&nbsp;overflow: hidden;<br>}
                        </div>
                    </div><br>
                    <hr>

                    <h2>overflow: scroll</h2>
                    <p>Setting the value to <code class="w3-codespan">scroll</code>, the overflow is clipped and a scrollbar is added to scroll inside the box. Note that this will add a scrollbar both horizontally and vertically (even if you do not need it):</p><br>
                    <div class="scroll">You can use the overflow property when you want to have better control of the layout. The overflow property specifies what happens if content overflows an element's box.</div>
                    <br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp;&nbsp;overflow: scroll;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>overflow: auto</h2>
                    <p>The <code class="w3-codespan">auto</code> value is similar to <code class="w3-codespan">scroll</code>,
                        but it adds scrollbars only when necessary:</p><br>
                    <div class="auto">You can use the overflow property when you want to have better control of the layout. The overflow property specifies what happens if content overflows an element's box.</div>
                    <br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp;&nbsp;overflow: auto;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>overflow-x and overflow-y</h2>
                    <p>The <code class="w3-codespan">overflow-x</code> and <code class="w3-codespan">overflow-y</code> properties specifies
                        whether to change the overflow of content just horizontally or vertically (or
                        both):</p>
                    <p><code class="w3-codespan">overflow-x</code> specifies what to do with the left/right edges of the
                        content.<br>

                        <code class="w3-codespan">overflow-y</code> specifies what to do with the top/bottom edges of the
                        content.
                    </p><br>
                    <div class="scrollx">You can use the overflow property when you want to have better control of the layout. The overflow property specifies what happens if content overflows an element's box.</div>
                    <br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp; overflow-x: hidden; /* Hide horizontal scrollbar
                            */<br>&nbsp;&nbsp;overflow-y: scroll; /* Add vertical scrollbar */<br>}
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