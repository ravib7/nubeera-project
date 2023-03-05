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

        #panel,
        .flip {
            font-size: 16px;
            padding: 10px;
            text-align: center;
            background-color: #33a4ef;
            color: white;
            border: solid 1px #a6d8a8;
            margin: auto;
            cursor: pointer;
        }

        #panel {
            display: none;
            cursor: auto;
        }

        .test .w3-row-padding>.w3-col {
            padding: 0 8px;
            margin: 6px;
        }
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Layout - The display Property</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>The <code class="w3-codespan">display</code> property is the most important CSS property for controlling layout.
                    <hr>

                    <h2>The display Property</h2>
                    <p>The <code class="w3-codespan">display</code> property specifies if/how an element is displayed.</p>
                    <p>Every HTML element has a default display value depending on what type
                        of element it is. The default display value for most elements is <code class="w3-codespan">block</code> or
                        <code class="w3-codespan">inline</code>.
                    </p>

                    <p class="flip" onclick="myShowFunction()">Click to show panel</p>

                    <div id="panel">
                        <p>This panel contains a &lt;div&gt; element, which is hidden by default (<code class="w3-codespan w3-light-grey" style="color:crimson!important">display: none</code>).</p>
                        <p>It is styled with CSS, and we use JavaScript to show it (change it to (<code class="w3-codespan w3-light-grey" style="color:crimson!important">display: block</code>).</p>
                    </div>
                    <hr>

                    <h2>Block-level Elements</h2>
                    <p>A block-level element always starts on a new line and takes up the full width available
                        (stretches out to the left and right as far as it can).</p>

                    <div class="w3-theme-border" style="border-width:3px;border-style:solid;">
                        The &lt;div&gt; element is a block-level element.</div>

                    <p>Examples of block-level elements:</p>
                    <ul>
                        <li>&lt;div&gt;</li>
                        <li>&lt;h1&gt; - &lt;h6&gt;</li>
                        <li>&lt;p&gt;</li>
                        <li>&lt;form&gt;</li>
                        <li>&lt;header&gt;</li>
                        <li>&lt;footer&gt;</li>
                        <li>&lt;section&gt;</li>
                    </ul>
                    <hr>

                    <h2>Inline Elements</h2>
                    <p>An inline element does not start on a new line and only takes up as much width as necessary.</p>

                    <p>This is <span class="w3-theme-border" style="border-width:3px;border-style:solid;">an inline &lt;span&gt; element
                            inside</span> a paragraph.</p>

                    <p>Examples of inline elements:</p>
                    <ul>
                        <li>&lt;span&gt;</li>
                        <li>&lt;a&gt;</li>
                        <li>&lt;img&gt;</li>
                    </ul>
                    <hr>

                    <h2>Display: none;</h2>
                    <p><code class="w3-codespan">display: none;</code> is commonly used with JavaScript to hide
                        and show elements without deleting and recreating them. Take a look at our last
                        example on this page if you want to know how this can be achieved.</p>
                    <p>The <code class="w3-codespan">&lt;script&gt;</code> element uses <code class="w3-codespan">display: none;</code>
                        as default.&nbsp;</p>
                    <hr>

                    <h2>Override The Default Display Value</h2>
                    <p>As mentioned, every element has a default display value. However, you can
                        override this.</p>
                    <p>Changing an inline element to a block element, or vice versa, can be useful for
                        making the page look a specific way, and still follow the web standards.</p>
                    <p>A common example is making inline <code class="w3-codespan">&lt;li&gt;</code> elements for horizontal menus:</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            li {<br>&nbsp;&nbsp;display: inline;<br>}
                        </div>
                    </div>
                    <p>The following example displays &lt;span&gt; elements as block elements:</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            span {<br>&nbsp; display: block;<br>}
                        </div>
                    </div>
                    <p>The following example displays &lt;a&gt; elements as block elements:</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            a {<br>&nbsp; display: block;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Hide an Element - display:none or visibility:hidden?</h2>

                    <div class="w3-content test" style="max-width:800px">
                        <div class="w3-row-padding w3-center" style="margin:0 -16px">
                            <div class="w3-col w3-border" id="imgbox1" style="width:30%;float:left;">
                                <p style="word-wrap: break-word;"><code class="w3-codespan" style="wrap">display:none</code></p>
                                <img src="https://www.w3schools.com/css/img_5terre.jpg" style="width:100%" alt="Italy">
                                <p><button class="ws-btn w3-block" onclick="removeElement()">Remove</button></p>
                            </div>
                            <div class="w3-col w3-border" style="width:30%;" id="imgbox2">
                                <p style="word-wrap: break-word;"><code class="w3-codespan">visibility:hidden</code></p>
                                <img src="https://www.w3schools.com/css/img_forest.jpg" style="width:100%" alt="Forest">
                                <p><button class="ws-btn w3-block" onclick="changeVisibility()">Hide</button></p>
                            </div>
                            <div class="w3-col w3-border" style="width:30%;">
                                <p>Reset</p>
                                <img src="https://www.w3schools.com/css/img_lights.jpg" style="width:100%" alt="Lights">
                                <p><button class="ws-btn w3-block" onclick="resetElement()">Reset All</button></p>
                            </div>
                        </div>
                    </div>
                    <script>
                        function removeElement() {
                            document.getElementById("imgbox1").style.display = "none";
                        }

                        function changeVisibility() {
                            document.getElementById("imgbox2").style.visibility = "hidden";
                        }

                        function resetElement() {
                            document.getElementById("imgbox1").style.display = "block";
                            document.getElementById("imgbox2").style.visibility = "visible";
                        }
                    </script>
                    <p>Hiding an element can be done by setting the <code class="w3-codespan">display</code> property to
                        <code class="w3-codespan">none</code>.
                        The element will be hidden, and the page will be displayed as if the element is not
                        there:
                    </p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            h1.hidden {<br>&nbsp;&nbsp;display: none;<br>}
                        </div>
                    </div>
                    <p><code class="w3-codespan">visibility:hidden;</code> also hides an element.</p>
                    <p>However, the element will still take up the same space
                        as before. The element will be hidden, but still affect the layout:</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            h1.hidden {<br>&nbsp;&nbsp;visibility: hidden;<br>}
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

        function myShowFunction() {
            document.getElementById("panel").style.display = "block";
        }
    </script>
</body>

</html>