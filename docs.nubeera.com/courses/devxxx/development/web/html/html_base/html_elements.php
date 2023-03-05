<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Basic HTML</title>

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
                <strong class="px-2" style="font-size: 1.125rem;">Basic HTML</strong><br><br>
                <ul>
                    <li><a href="index.php">HTML Introduction</a></li>
                    <li><a href="html_editors.php">HTML Editors</a></li>
                    <li><a href="html_basic.php">HTML Basic Examples</a></li>
                    <li><a href="html_elements.php">HTML Elements</a></li>
                    <li><a href="html_attributes.php">HTML Attributes</a></li>
                    <li><a href="html_headings.php">HTML Headings</a></li>
                    <li><a href="html_paragraphs.php">HTML Paragraphs</a></li>
                    <li><a href="html_styles.php">HTML Styles</a></li>
                    <li><a href="html_formatting.php">HTML Text Formatting</a></li>
                    <li><a href="html_quotation_elements.php">HTML Quotation and Citation Elements</a></li>
                    <li><a href="html_comments.php">HTML Comments</a></li>
                    <li><a href="html_links.php">HTML Links</a></li>
                    <li><a href="html_images.php">HTML Images</a></li>
                    <li><a href="html_favicon.php">HTML Favicon</a></li>
                    <li><a href="html_tables.php">HTML Tables</a></li>
                    <li><a href="html_lists.php">HTML Lists</a></li>
                    <li><a href="html_blocks.php">HTML Block and Inline Elements</a></li>
                    <li><a href="html_classes.php">HTML Classes</a></li>
                    <li><a href="html_id.php">HTML id Attribute</a></li>
                    <li><a href="html_iframe.php">HTML Iframes</a></li>
                    <li><a href="html_filepaths.php">HTML File Paths</a></li>
                    <li><a href="html_head.php">HTML Head</a></li>
                    <li><a href="html_layout.php">HTML Layout</a></li>
                    <li><a href="html_computercode_elements.php">HTML Computer Code Elements</a></li>
                    <li><a href="html5_semantic_elements.php">HTML Semantic Elements</a></li>
                    <li><a href="html_xhtml.php">HTML Versus XHTML</a></li>
                    <li><a href="html_forms.php">HTML Forms</a></li>
                    <li><a href="html_forms_attributes.php">HTML Form Attributes</a></li>
                    <li><a href="html_form_elements.php">HTML Form Elements</a></li>
                    <li><a href="html_form_input_types.php">HTML Input Types</a></li>
                    <li><a href="html_form_attributes.php">HTML Input Attributes</a></li>
                    <li><a href="html_form_attributes_form..php">HTML Input form Attributes</a></li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Elements</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <h2 id="html_basic" class="heading-anchor">HTML Elements</h2>
                    <!-- <content> -->
                    <br>An HTML element is defined by a start tag, some content, and an end tag.

                    <h3 id="HTML Elements" class="heading-anchor">HTML Elements</h3>
                    An HTML element is defined by a start tag, some content, and an end tag:<br>
                    <strong><code>&lttagname>Content goes here...&lt/tagname&gt</code></strong><br>
                    The HTML element is everything from the start tag to the end tag:<br>
                    <strong><code>&lth1>My First Heading&lt/h1&gt</code></strong><br>
                    <strong><code>&ltp>My first paragraph.&lt/p&gt</code></strong>

                    <br><br>
                    <table style="width:100%;">
                        <tr>
                            <th>Start Tag</th>
                            <th>Element content</th>
                            <th>End tag</th>
                        </tr>
                        <tr>
                            <td>&lth1&gt</td>
                            <td>My First Heading</td>
                            <td>&lt/h1&gt</td>
                        </tr>
                        <tr>
                            <td>&ltp&gt</td>
                            <td>My first paragraph</td>
                            <td>&lt/p&gt</td>
                        </tr>
                        <tr>
                            <td>&ltbr&gt</td>
                            <td>none</td>
                            <td>none</td>
                        </tr>
                    </table>
                    <br>
                    <div class="notes">
                        <strong>Note</strong>: Some HTML elements have no content (like the &ltbr&gt element). These elements are called empty elements. Empty elements do not have an end tag!
                    </div>

                    <h3 id="Nested HTML Elements" class="heading-anchor">Nested HTML Elements</h3>
                    HTML elements can be nested (this means that elements can contain other elements).<br>

                    All HTML documents consist of nested HTML elements.<br>

                    The following example contains four HTML elements (<code>&lthtml></code>, <code>&ltbody></code>, <code>&lth1></code> and <code>&ltp></code>):

                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>
                            &lt;html&gt;<br>&lt;body&gt;<br><br>
                            &lt;h1&gt;My First Heading&lt;/h1&gt;<br>&lt;p&gt;My first paragraph.&lt;/p&gt;<br><br>
                            &lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div>

                    <h3 id="Example Explained" class="heading-anchor">Example Explained</h3>
                    The <code>&lthtml></code> element is the root element and it defines the whole HTML document.<br>

                    It has a start tag <code>&lthtml></code> and an end tag <code>&lt/html></code>.<br>

                    Then, inside the <code>&lthtml></code> element there is a <code>&ltbody></code> element:
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;body&gt;<br><br>
                            &lt;h1&gt;My First Heading&lt;/h1&gt;<br>&lt;p&gt;My first paragraph.&lt;/p&gt;<br><br>
                            &lt;/body&gt;
                        </div>
                    </div>
                    The <code>&ltbody></code> element defines the document's body.<br>

                    It has a start tag <code>&ltbody></code> and an end tag <code>&lt/body></code>.<br>

                    Then, inside the <code>&ltbody></code> element there are two other elements: <code>&lth1></code> and <code>&ltp></code>:
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;h1&gt;My First Heading&lt;/h1&gt;<br>&lt;p&gt;My first paragraph.&lt;/p&gt;
                        </div>
                    </div>
                    The <code>&lth1></code> element defines a heading.<br>

                    It has a start tag <code>&lth1></code> and an end tag <code>&lt/h1></code>:
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;h1&gt;My First Heading&lt;/h1&gt;
                        </div>
                    </div>
                    The <code>&ltp></code> element defines a paragraph.<br>

                    It has a start tag <code>&ltp></code> and an end tag <code>&lt/p></code>:
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;My first paragraph.&lt;/p&gt;
                        </div>
                    </div>

                    <h3 id="Never Skip the End Tag" class="heading-anchor">Never Skip the End Tag</h3>
                    Some HTML elements will display correctly, even if you forget the end tag:
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>
                            &lt;html&gt;<br>&lt;body&gt;<br><br>
                            &lt;h1&gt;My First Heading<br>&lt;p&gt;My first paragraph<br><br>
                            &lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div>
                    However, never rely on this! Unexpected results and errors may occur if you forget the end tag!

                    <h3 id="Empty HTML Elements" class="heading-anchor">Empty HTML Elements</h3>
                    HTML elements with no content are called empty elements.<br>

                    The <code>&ltbr></code> tag defines a line break, and is an empty element without a closing tag:
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;This is a &lt;br&gt; paragraph with a line break.&lt;/p&gt;
                        </div>
                    </div>

                    <h3 id="HTML is Not Case Sensitive" class="heading-anchor">HTML is Not Case Sensitive</h3>
                    HTML tags are not case sensitive: <code>&ltP></code> means the same as <code>&ltP></code>.

                    The HTML standard does not require lowercase tags, but W3C recommends lowercase in HTML, and demands lowercase for stricter document types like XHTML.<br><br>

                    <div class="notes">
                        At NubeEra we always use lowercase tag names.
                    </div>

                    <h3 id="HTML Tag Reference" class="heading-anchor">HTML Tag Reference</h3>
                    <table width="100%">
                        <tr>
                            <th>Tag</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>&lthtml&gt</code></td>
                            <td>Defines the root of an HTML document</td>
                        </tr>
                        <tr>
                            <td><code>&ltbody&gt</code></td>
                            <td>Defines the document's body</td>
                        </tr>
                        <tr>
                            <td><code>&lth1&gt</code> to <code>&lth6&gt</code></td>
                            <td>Defines HTML headings</td>
                        </tr>
                    </table>
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