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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">How To Add CSS</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>When a browser reads a style sheet, it will format the HTML document according to the information in the style sheet.
                    <hr>

                    <h2>Three Ways to Insert CSS</h2>
                    There are three ways of inserting a style sheet:<br>
                    <ul>
                        <li>External CSS</li>
                        <li>Internal CSS</li>
                        <li>Inline CSS</li>
                    </ul>
                    <hr>

                    <h2>External CSS</h2>
                    With an
                    external style sheet, you can change the look of an entire website by changing
                    just one file!<br>
                    Each HTML page must include a reference to the external style sheet file inside
                    the &lt;link&gt; element, inside the head section.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        External styles are defined within the &lt;link&gt; element, inside the &lt;head&gt; section of an HTML page:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;link rel=&quot;stylesheet&quot; href=&quot;mystyle.css&quot;&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;This is a heading&lt;/h1&gt;<br>
                            &lt;p&gt;This is a paragraph.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div><br>
                    An external style sheet can be written in any text editor, and must be saved with a .css extension.<br>
                    The external .css file should not contain any HTML tags.<br>
                    Here is how the "mystyle.css" file looks:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h4>&quot;mystyle.css&quot;</h4>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            body {<br>&nbsp;&nbsp;background-color: lightblue;<br>}<br><br>h1 {<br>&nbsp;&nbsp;color: navy;<br>&nbsp;&nbsp;margin-left: 20px;<br>}
                        </div>
                    </div><br>
                    <div class="notes">
                        <strong>Note:</strong> Do not add a space between the property value and the unit:<br>
                        Incorrect (space): <code class="w3-codespan">margin-left: 20 px;</code><br>
                        Correct (nospace): <code class="w3-codespan">margin-left: 20px;</code>
                    </div>
                    <hr>


                    <h2>Internal CSS</h2>
                    An internal style sheet may be used if one single HTML page has a unique style.<br>
                    The internal style is defined inside the &lt;style&gt; element, inside the head
                    section.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Internal styles are defined within the &lt;style&gt; element, inside the &lt;head&gt; section of an HTML page:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>body {<br>&nbsp;
                            background-color: linen;<br>}<br><br>h1 {<br>&nbsp; color: maroon;<br>&nbsp;
                            margin-left: 40px;<br>} <br>&lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;This is a
                            heading&lt;/h1&gt;<br>&lt;p&gt;This is a paragraph.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div>
                    <hr>

                    <h2>Inline CSS</h2>
                    An inline style may be used to apply a unique style for a single element.<br>
                    To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Inline styles are defined within the "style" attribute of the relevant element:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;h1 style=&quot;color:blue;text-align:center;&quot;&gt;This
                            is a heading&lt;/h1&gt;<br>&lt;p style=&quot;color:red;&quot;&gt;This is a paragraph.&lt;/p&gt;<br><br>
                            &lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div><br>
                    <div class="notes">
                        <strong>Tip:</strong> An inline style loses many of the advantages of a style sheet (by mixing
                        content with presentation). Use this method sparingly.
                    </div>
                    <hr>

                    <h2>Multiple Style Sheets</h2>
                    If some properties have been defined for the same selector (element) in different style sheets, the value from the last read style sheet will be used. <br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        Assume that an external style sheet has the following style for the &lth1&gt element:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            h1
                            {<br>
                            &nbsp;&nbsp;color: navy;<br>
                            }
                        </div>
                    </div><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        Then, assume that an <strong>internal style sheet</strong> also has the following style for the &lt;h1&gt; element:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            h1
                            {<br>
                            &nbsp;&nbsp;color: orange;&nbsp;&nbsp;&nbsp;
                        </div>
                    </div><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        If the internal style is defined <strong>after</strong> the link to the external style sheet, the &lt;h1&gt; elements will be
                        &quot;orange&quot;:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;head&gt;<br>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;mystyle.css&quot;&gt;<br>
                            &lt;style&gt;<br>h1 {<br>&nbsp;&nbsp;color: orange;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;
                        </div>
                    </div><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        However, if the internal style is defined <strong>before</strong> the link to the external style sheet, the &lt;h1&gt; elements will be
                        &quot;navy&quot;:&nbsp;
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;head&gt;<br>&lt;style&gt;<br>h1 {<br>&nbsp;&nbsp;color: orange;<br>}<br>&lt;/style&gt;<br>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;mystyle.css&quot;&gt;<br>
                            &lt;/head&gt;
                        </div>
                    </div>
                    <hr>

                    <h2>Cascading Order</h2>
                    What style will be used when there is more than one style specified for an HTML element?<br>
                    All the styles in a page will "cascade" into a new "virtual" style sheet by the following rules, where number one has the highest priority:<br>
                    <ol>
                        <li>Inline style (inside an HTML element)</li>
                        <li>External and internal style sheets (in the head section)</li>
                        <li>Browser default</li>
                    </ol>
                    So, an inline style has the highest priority, and will override external and
                    internal styles and browser defaults.
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