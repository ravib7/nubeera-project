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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Fonts</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>Choosing the right font for your website is important!
                    <hr>

                    <h2>Font Selection is Important</h2>
                    Choosing the right font has a huge impact on how the readers experience a website.<br>
                    The right font can create a strong identity for your brand.<br>
                    Using a font that is easy to read is important. The font adds value to your text. It is also important to choose the correct color and text size for the font.
                    <hr>


                    <h2>Generic Font Families</h2>
                    In CSS there are five generic font families:In CSS there are five generic font families:<br>
                    <ol>
                        <li><strong>Serif</strong> fonts have a small stroke at the edges of each letter. They create a sense of formality and elegance.</li>
                        <li><strong>Sans-serif</strong> fonts have clean lines (no small strokes attached). They create a modern and minimalistic look.</li>
                        <li><strong>Monospace</strong> fonts - here all the letters have the same fixed width. They create a mechanical look.&nbsp;</li>
                        <li><strong>Cursive</strong> fonts imitate human handwriting.</li>
                        <li><strong>Fantasy</strong> fonts are decorative/playful fonts.</li>
                    </ol>
                    All the different font names belong to one of the generic font families.
                    <hr>

                    <h2>Some Font Examples</h2>
                    <table class="ws-table-all notranslate">
                        <tr>
                            <th style="width:20%">Generic Font Family</th>
                            <th style="width:30%">Examples of Font Names</th>
                        </tr>
                        <tr>
                            <td>Serif</td>
                            <td><span style="font-size:150%;font-family:'Times New Roman',serif">Times New Roman</span><br>
                                <span style="font-size:150%;font-family:Georgia,serif">Georgia</span><br>
                                <span style="font-size:150%;font-family:Garamond,serif">Garamond</span><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Sans-serif</td>
                            <td><span style="font-size:150%;font-family:Arial,sans-serif">Arial</span><br>
                                <span style="font-size:150%;font-family:Verdana,sans-serif">Verdana</span><br>
                                <span style="font-size:150%;font-family:Helvetica,sans-serif">Helvetica</span><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Monospace</td>
                            <td><span style="font-size:150%;font-family:'Courier New',monospace">Courier New</span><br>
                                <span style="font-size:150%;font-family:'Lucida Console',monospace">Lucida Console</span><br>
                                <span style="font-size:150%;font-family:Monaco,monospace">Monaco</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Cursive</td>
                            <td><span style="font-size:150%;font-family:'Brush Script MT',cursive">Brush Script MT</span><br>
                                <span style="font-size:150%;font-family:'Lucida Handwriting',cursive">Lucida Handwriting</span><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Fantasy</td>
                            <td><span style="font-size:150%;font-family:Copperplate,fantasy">Copperplate</span><br>
                                <span style="font-size:150%;font-family:Papyrus,fantasy">Papyrus</span>
                            </td>
                        </tr>
                    </table>
                    <hr>

                    <h2>The CSS font-family Property</h2>
                    In CSS, we use the <code class="w3-codespan">font-family</code> property to specify the font of a text.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Specify some different fonts for three paragraphs:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            .p1 {<br>&nbsp; font-family: &quot;Times New Roman&quot;, Times, serif;<br>}<br><br>
                            .p2 {<br>&nbsp; font-family: Arial, Helvetica, sans-serif;<br>}<br><br>
                            .p3 {<br>&nbsp; font-family: &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Web Safe Fonts</h2>
                    Web safe fonts are fonts that are universally installed across all browsers and devices.<br>
                    The following list are the best web safe fonts for HTML and CSS:<br>
                    <ul>
                        <li>Arial (sans-serif)</li>
                        <li>Verdana (sans-serif)</li>
                        <li>Helvetica (sans-serif)</li>
                        <li>Tahoma (sans-serif)</li>
                        <li>Trebuchet MS (sans-serif)</li>
                        <li>Times New Roman (serif)</li>
                        <li>Georgia (serif)</li>
                        <li>Garamond (serif)</li>
                        <li>Courier New (monospace)</li>
                        <li>Brush Script MT (cursive)</li>
                    </ul>
                    <hr>

                    <h2>Fallback Fonts</h2>
                    However, there are no 100% completely web safe fonts. There is always a chance that a font is not found or is not installed properly.<br>
                    Therefore, it is very important to always use fallback fonts.<br>
                    This means that you should add a list of similar &quot;backup fonts&quot; in
                    the <code class="w3-codespan">font-family</code>
                    property. If the
                    first font does not work, the browser will try the next one, and the next one, and so on.
                    Always end the list with a generic font family name.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Here, there are three font types: Tahoma, Verdana, and
                        sans-serif. The second and third fonts are backups, in case the first one is not found.
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p {<br>font-family: Tahoma, Verdana, sans-serif;<br>}
                        </div>
                    </div>
                    <h3>Commonly Used Font Fallbacks</h3>
                    Below are some commonly used font fallbacks, organized by the 5 generic font families:
                    <ul>
                        <li><strong>Serif</strong></li>
                        <li><strong>Sans-serif</strong></li>
                        <li><strong>Monospace</strong></li>
                        <li><strong>Cursive</strong></li>
                        <li><strong>Fantasy</strong></li>
                    </ul>
                    <hr>

                    <h2>Font Style</h2>
                    The <code class="w3-codespan">font-style</code> property is mostly used to specify italic text.<br>
                    This property has three values:
                    <ul>
                        <li>normal - The text is shown normally</li>
                        <li>italic - The text is shown in italics</li>
                        <li>oblique - The text is &quot;leaning&quot;
                            (oblique is very similar to italic, but less supported)</li>
                    </ul>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p.normal {<br>&nbsp;&nbsp;font-style: normal;<br>}<br>
                            <br>p.italic {<br>&nbsp;&nbsp;font-style: italic;<br>}<br>
                            <br>p.oblique {<br>&nbsp; font-style: oblique;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Font Weight</h2>
                    The <code class="w3-codespan">font-weight</code> property specifies the weight of a font:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p.normal {<br>&nbsp; font-weight: normal;<br>}<br>
                            <br>p.thick {<br>&nbsp; font-weight: bold;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Font Variant</h2>
                    The <code class="w3-codespan">font-variant</code> property specifies whether or not a text should
                    be displayed in a small-caps font.<br>
                    In a small-caps font, all lowercase letters are converted to uppercase
                    letters. However, the converted uppercase letters appears in a smaller font size
                    than the original uppercase letters in the text.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            p.normal {<br>&nbsp;&nbsp;font-variant: normal;<br>}<br>
                            <br>p.small {<br>&nbsp; font-variant: small-caps;<br>}
                        </div>
                    </div>
                    <hr>

                    <h2>Font Size</h2>
                    The <code class="w3-codespan">font-size</code> property sets the size of the text.<br>
                    Being able to manage the text size is important in web design. However, you
                    should not use font size adjustments to make paragraphs look like headings, or
                    headings look like paragraphs.<br>
                    Always use the proper HTML tags, like &lt;h1&gt; - &lt;h6&gt; for headings and &lt;p&gt; for
                    paragraphs.<br>
                    The font-size value can be
                    an absolute, or relative size.<br>
                    Absolute size:
                    <ul>
                        <li>Sets the text to a specified size</li>
                        <li>Does not allow a user to change the text size in all browsers (bad for accessibility reasons)</li>
                        <li>Absolute size is useful when the physical size of the output is known</li>
                    </ul>
                    Relative size:
                    <ul>
                        <li>Sets the size relative to surrounding elements</li>
                        <li>Allows a user to change the text size in browsers</li>
                    </ul>
                    <div class="notes">
                        <strong>Note:</strong> If you do not specify a font size, the default size for normal text, like paragraphs, is 16px (16px=1em).
                    </div>
                    <hr>

                    <h2>Set Font Size</h2>
                    Setting the text size with pixels gives you full control over the text size.<br>
                    To allow users to resize the text (in the browser menu), many developers use em instead of pixels.<br>
                    1em is equal to the current font size. The default text size in browsers is 16px. So, the default size of 1em is 16px.<br>
                    The size can be calculated from pixels to em using this formula: pixels/16=em<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            h1 {<br>&nbsp;&nbsp;font-size: 40px;<br>}<br>
                            <br>h2 {<br>&nbsp;&nbsp;font-size: 30px;<br>}<br>
                            <br>p {<br>&nbsp;&nbsp;font-size: 14px;<br>}<br><br>
                            h1 {<br>&nbsp; font-size: 2.5em; /* 40px/16=2.5em */<br>}<br>
                            <br>h2 {<br>&nbsp;&nbsp;font-size: 1.875em; /* 30px/16=1.875em */<br>
                            }<br>
                            <br>p {<br>&nbsp; font-size: 0.875em; /* 14px/16=0.875em */<br>}
                        </div>
                    </div><br>
                    The text size in em is the same as in pixels. However, with the em size, it is possible to adjust the text size in all browsers.
                    <hr>


                    <h2>Use a Combination of Percent and Em</h2>
                    The solution that works in all browsers, is to set a default font-size in
                    percent for the &lt;body&gt; element:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            body {<br>&nbsp; font-size: 100%;<br>}<br>
                            <br>h1 {<br>&nbsp; font-size: 2.5em;<br>}<br>
                            <br>h2 {<br>&nbsp;&nbsp;font-size: 1.875em;<br>}<br>
                            <br>p {<br>&nbsp; font-size: 0.875em;<br>}
                        </div>
                    </div><br>
                    Our code now works great! It shows the same text size in
                    all browsers, and allows all browsers to zoom or resize the text!
                    <hr>

                    <h2>Responsive Font Size</h2>
                    TThe text size can be set with a <code class="w3-codespan">vw</code> unit, which means the &quot;viewport width&quot;.<br>
                    That way the text size will follow the size of the browser window:<br>
                    <div style="background-color:#ddffdd">
                        <h1 style="font-size:8vw;">Hello World</h1>
                        <p style="font-size:2vw;">Resize the browser window to see how the font size scales.</p>
                    </div><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;h1 style="<strong>font-size:10vw</strong>"&gt;Hello World&lt;/h1&gt;
                        </div>
                    </div><br>
                    <div class="notes">
                        Viewport is the browser window size. 1vw = 1% of viewport width. If the viewport is 50cm wide, 1vw is 0.5cm.
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