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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Selectors</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>A CSS selector selects the HTML element(s) you want to style.
                    <hr>

                    <h2>CSS Selectors</h2>
                    CSS selectors are used to "find" (or select) the HTML elements you want to style.<br>
                    We can divide CSS selectors into five categories:<br>
                    <ul>
                        <li>Simple selectors (select elements based on name, id, class)</li>
                        <li>Combinator selectors (select elements based on a specific relationship between them)</li>
                        <li>Pseudo-class selectors (select elements based on a certain state)</li>
                        <li>Pseudo-elements selectors (select and style a part of an element)</li>
                        <li>Attribute selectors (select elements based on an attribute or attribute value)</li>
                    </ul>
                    This page will explain the most basic CSS selectors.
                    <hr>

                    <h2>The CSS element Selector</h2>
                    The element selector selects HTML elements based on the element name.<br>
                    <h3>Example</h3>
                    Here, all &lt;p&gt; elements on the page will be center-aligned, with a red text color:&nbsp
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p
                            {<br>
                            &nbsp;&nbsp;text-align: center;<br>
                            &nbsp;&nbsp;color: red;<br>
                            }
                        </div>
                    </div>
                    <hr>


                    <h2>The CSS id Selector</h2>
                    The id selector uses the id attribute of an HTML element to select a specific element.<br>
                    The id of an element is unique within a page, so the id selector is used to select one unique element!<br>
                    To select an element with a specific id, write a hash (#) character, followed by the id of the element.<br><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        The CSS rule below will be applied to the HTML element with id="para1":
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            #para1
                            {<br>
                            &nbsp;&nbsp;text-align: center;<br>
                            &nbsp;&nbsp;color: red;<br>
                            }
                        </div>
                    </div><br>
                    <div class="notes">
                        <strong>Note:</strong> An id name cannot start with a number!
                    </div>
                    <hr>

                    <h2>The CSS class Selector</h2>
                    The class selector selects HTML elements with a specific class attribute.<br>
                    To select elements with a specific class, write a period (.) character, followed by the class name.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        In this example all HTML elements with class="center" will be red and center-aligned:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            .center {<br>&nbsp; text-align: center;<br>&nbsp;&nbsp;color: red;<br>}
                        </div>
                    </div><br>
                    You can also specify that only specific HTML elements should be affected by a class.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        In this example only &lt;p&gt; elements with class=&quot;center&quot; will be
                        red and center-aligned:&nbsp;
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p.center {<br>&nbsp; text-align: center;<br>&nbsp;&nbsp;color: red;<br>}
                        </div>
                    </div><br>
                    HTML elements can also refer to more than one class.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        In this example the &lt;p&gt; element will be styled according to class=&quot;center&quot;
                        and to class=&quot;large&quot;:&nbsp;
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;p class=&quot;center large&quot;&gt;This paragraph refers to two classes.&lt;/p&gt;
                        </div>
                    </div><br>
                    <div class="notes">
                        <strong>Note:</strong> A class name cannot start with a number!
                    </div>
                    <hr>

                    <h2>The CSS Universal Selector</h2>
                    The universal selector (*) selects all HTML elements on the page.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        The CSS rule below will affect every HTML element on the page:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            *
                            {<br>
                            &nbsp;&nbsp;text-align: center;<br>
                            &nbsp;&nbsp;color: blue;<br>
                            }
                        </div>
                    </div>
                    <hr>

                    <h2>The CSS Grouping Selector</h2>
                    The grouping selector selects all the HTML elements with the same style definitions.<br>
                    Look at the following CSS code (the h1, h2, and p elements have the same style definitions):<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            h1
                            {<br>
                            &nbsp;&nbsp;text-align: center;<br>&nbsp;&nbsp;color: red;<br>
                            }<br>
                            <br>h2
                            {<br>
                            &nbsp;
                            text-align: center;<br>&nbsp; color: red;<br>}<br>
                            <br>p
                            {<br>
                            &nbsp;&nbsp;text-align: center;<br>&nbsp;&nbsp;color: red;<br>
                            }
                        </div>
                    </div><br>
                    It will be better to group the selectors, to minimize the code.<br>
                    To group selectors, separate each selector with a comma.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        In this example we have grouped the selectors from the code above:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            h1, h2, p
                            {<br>
                            &nbsp;
                            text-align: center;<br>&nbsp;&nbsp;color: red;<br>}
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