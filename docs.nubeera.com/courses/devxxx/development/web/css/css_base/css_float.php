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

        .floatl:after {
            font-weight: bold;
            content: 'Float Left';
            color: white;
        }

        .floatr:after {
            font-weight: bold;
            content: 'Float Right';
            color: white;
        }

        @media only screen and (max-width: 500px) {
            .floatl:after {
                content: 'Left';
            }

            .floatr:after {
                content: 'Right';
            }
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Layout - float and clear</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>
                    <p class="intro">The CSS <code class="w3-codespan">float</code> property specifies
                        how an element should float.</p>
                    <p class="intro">The CSS <code class="w3-codespan">clear</code> property
                        specifies what elements can float beside the cleared element and on which side.</p>
                    <br>
                    <div style="background-color:#2196F3;padding:16px;float:left;width:30%;opacity:0.85;text-align:center;">
                        <span class="floatl"></span>
                    </div>
                    <div style="background-color:#F44336;padding:16px;float:right;width:30%;opacity:0.85;text-align:center;">
                        <span class="floatr"></span>
                    </div>
                    <br><br>
                    <hr style="clear:both;margin-bottom:15px;margin-top:32px">

                    <h2>The float Property</h2>
                    <p>The <code class="w3-codespan">float</code> property is used for
                        positioning and formatting content e.g. let an image float left to the text in a
                        container.</p>
                    <p>The <code class="w3-codespan">float</code> property can have one of the
                        following values:</p>
                    <ul>
                        <li> <code class="w3-codespan">left</code> - The element floats to the left of its container</li>
                        <li> <code class="w3-codespan">right</code> - The element floats to the right of its container</li>
                        <li> <code class="w3-codespan">none</code> - The element does not float (will be displayed just where it occurs in the text). This is default</li>
                        <li> <code class="w3-codespan">inherit</code> - The element inherits the float value of its parent</li>
                    </ul>
                    <p>In its simplest use, the <code class="w3-codespan">float</code> property can be used to wrap text around images.</p>
                    <hr>

                    <h2>Example - float: right;</h2>
                    <p>The following example specifies that an image should float to the <strong>right</strong> in a text:</p>
                    <div class="w3-clear w3-border w3-padding">
                        <p><img src="https://www.w3schools.com/css/pineapple.jpg" alt="Pineapple" style="width:170px;height:170px;float:right;margin-left:15px;margin-bottom:10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. <span class="w3-hide-small">Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac...</span></p>
                    </div>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            img {<br>&nbsp; float: right;<br>}
                        </div>
                    </div><br>
                    <hr>

                    <h2>Example - float: left;</h2>
                    <p>The following example specifies that an image should float to the <strong>right</strong> in a text:</p>
                    <div class="w3-clear w3-border w3-padding">
                        <p><img src="https://www.w3schools.com/css/pineapple.jpg" alt="Pineapple" style="width:170px;height:170px;float:left;margin-left:15px;margin-bottom:10px;padding: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. <span class="w3-hide-small">Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac...</span></p>
                    </div>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            img {<br>&nbsp; float: left;<br>}
                        </div>
                    </div><br>
                    <hr>

                    <h2>Example - No float</h2>
                    <p>In the following example the image will be displayed just where it occurs in
                        the text (float: none;):</p>
                    <div class="w3-clear w3-border w3-padding">
                        <p><img src="https://www.w3schools.com/css/pineapple.jpg" alt="Pineapple" style="max-width:185px;width:50%;float:none;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. <span class="w3-hide-small">Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac...</span></p>
                    </div>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            img {<br>&nbsp; float: none;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Example - Float Next To Each Other</h2>
                    <p>Normally div elements will be displayed on top of each other. However, if we
                        use <code class="w3-codespan">float: left</code> we can let elements float next to each other:</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div {<br>&nbsp; float: left;<br>&nbsp; padding: 15px; <br>}<br><br>.div1 {<br>&nbsp;
                            background: red;<br>}<br><br>.div2 {<br>&nbsp; background: yellow;<br>}<br>
                            <br>.div3 {<br>&nbsp; background: green;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>The clear Property</h2>
                    <p>When we use the <code class="w3-codespan">float</code> property, and we want
                        the next element below (not on right or left), we will have to use the <code class="w3-codespan">clear</code>
                        property.</p>
                    <p>The <code class="w3-codespan">clear</code> property specifies what
                        should happen with the element that is next to a floating element.</p>
                    <p>The <code class="w3-codespan">clear</code> property can have one of the
                        following values:</p>
                    <ul>
                        <li> <code class="w3-codespan">none</code> - The element is not pushed below
                            left or right floated elements. This is default</li>
                        <li> <code class="w3-codespan">left</code> - The element is pushed below left
                            floated elements</li>
                        <li> <code class="w3-codespan">right</code> - The element is pushed below
                            right floated elements</li>
                        <li> <code class="w3-codespan">both</code> - The element is pushed below both
                            left and right floated elements</li>
                        <li> <code class="w3-codespan">inherit</code> - The element inherits the clear value
                            from its parent</li>
                    </ul>
                    <p>When clearing floats, you should match the clear to the float: If an element
                        is floated to the left, then you should clear to the left. Your floated element
                        will continue to float, but the cleared element will appear below it on the web
                        page.</p>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        This example clears the float to the left. Here, it means that the &lt;div2&gt;
                        element is pushed below the left floated &lt;div1&gt; element:&nbsp;
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            div1 {<br>&nbsp;&nbsp;float: left;<br>}<br><br>div2 {<br>&nbsp;&nbsp;clear: left;<br>}
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