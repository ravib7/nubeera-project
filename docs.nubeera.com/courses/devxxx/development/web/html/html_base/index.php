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

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;margin-bottom:10px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem">Basic HTML</strong><br><br>
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Introduction</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <h2 id="html_intro">HTML Introduction</h2>
                    <!-- <content> -->
                    <br>HTML is the standard markup language for creating Web pages.
                    <h3 id="What is HTML?" class="heading-anchor"><a class="anchor-link docon docon-link" href="#What is HTML?" aria-labelledby="What is HTML?"></a>What is HTML?</h3>
                    <ul>
                        <li>HTML stands for Hyper Text Markup Language</li>
                        <li>HTML is the standard markup language for creating Web pages</li>
                        <li>HTML describes the structure of a Web page</li>
                        <li>HTML consists of a series of elements</li>
                        <li>HTML elements tell the browser how to display the content</li>
                        <li>HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li>
                    </ul>

                    <h3 id="A Simple HTML Document" class="heading-anchor"><a class="anchor-link docon docon-link" href="#A Simple HTML Document" aria-labelledby="A Simple HTML Document"></a>A Simple HTML Document</h3>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>
                            &lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;Page Title&lt;/title&gt;<br>
                            &lt;/head&gt;<br>
                            &lt;body&gt;<br><br>&lt;h1&gt;My First Heading&lt;/h1&gt;<br>&lt;p&gt;My first paragraph.&lt;/p&gt;<br><br>
                            &lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div>


                    <h3 id="Example Explained" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Example Explained" aria-labelledby="Example Explained"></a>Example Explained</h3>
                    <ul>
                        <li>The <code>&lt!DOCTYPE html&gt</code> declaration defines that this document is an HTML5 document</li>
                        <li>The <code>&lthtml&gt</code> element is the root element of an HTML page</li>
                        <li>The <code>&lthead&gt</code> element contains meta information about the HTML page</li>
                        <li>The <code>&lttitle&gt</code> element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab)
                        <li>The <code>&ltbody&gt</code> element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.
                        <li>The <code>&lth1&gt</code> element defines a large heading
                        <li>The <code>&ltp&gt</code> element defines a paragraph</li>
                    </ul>

                    <h3 id="What is an HTML Element?" class="heading-anchor"><a class="anchor-link docon docon-link" href="#What is an HTML Element?" aria-labelledby="What is an HTML Element?"></a>What is an HTML Element?</h3>
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

                    <h3 id="Web Browsers" class="heading-anchor"><a class="anchor-link docon docon-link" href="#Web Browsers" aria-labelledby="Web Browsers"></a>Web Browsers</h3>
                    The purpose of a web browser (Chrome, Edge, Firefox, Safari) is to read HTML documents and display them correctly.<br>
                    A browser does not display the HTML tags, but uses them to determine how to display the document:
                    <img src="https://www.w3schools.com/html/img_chrome.png" alt="Web Browser">

                    <h3 id="HTML Page Structure" class="heading-anchor"><a class="anchor-link docon docon-link" href="#HTML Page Structure" aria-labelledby="HTML Page Structure"></a>HTML Page Structure</h3>
                    Below is a visualization of an HTML page structure:
                    <img src="http://infodoc.altervista.org/wp-content/uploads/2018/12/html-page-structure.png" alt="HTML Page Structure">

                    <br><br>
                    <div class="notes">
                        <strong>Note</strong>: The content inside the &ltbody> section (the white area above) will be displayed in a browser. The content inside the &lttitle> element will be shown in the browser's title bar or in the page's tab.
                    </div>

                    <h3 id="HTML History" class="heading-anchor"><a class="anchor-link docon docon-link" href="#HTML History" aria-labelledby="HTML History"></a>HTML History</h3>
                    Since the early days of the World Wide Web, there have been many versions of HTML:

                    <br><br>
                    <table style="width:100%;">
                        <tr>
                            <th>Year</th>
                            <th>Version</th>
                        </tr>
                        <tr>
                            <td>1989</td>
                            <td>Tim Berners-Lee invented www</td>
                        </tr>
                        <tr>
                            <td>1991</td>
                            <td>Tim Berners-Lee invented HTML</td>
                        </tr>
                        <tr>
                            <td>1993</td>
                            <td>Dave Raggett drafted HTML+</td>
                        </tr>
                        <tr>
                            <td>1995</td>
                            <td>HTML Working Group defined HTML 2.0</td>
                        </tr>
                        <tr>
                            <td>1997</td>
                            <td>W3C Recommendation: HTML 3.2</td>
                        </tr>
                        <tr>
                            <td>1999</td>
                            <td>W3C Recommendation: HTML 4.01</td>
                        </tr>
                        <tr>
                            <td>2000</td>
                            <td>W3C Recommendation: XHTML 1.0</td>
                        </tr>
                        <tr>
                            <td>2008</td>
                            <td>WHATWG HTML5 First Public Draft</td>
                        </tr>
                        <tr>
                            <td>2012</td>
                            <td>WHATWG HTML5 Living Standard</td>
                        </tr>
                        <tr>
                            <td>2014</td>
                            <td>W3C Recommendation: HTML5</td>
                        </tr>
                        <tr>
                            <td>2016</td>
                            <td>W3C Candidate Recommendation: HTML 5.1</td>
                        </tr>
                        <tr>
                            <td>2017</td>
                            <td>W3C Recommendation: HTML5.1 2nd Edition</td>
                        </tr>
                        <tr>
                            <td>2017</td>
                            <td>W3C Recommendation: HTML5.2</td>
                        </tr>

                    </table>

                    <br><br>
                    <div class="notes">
                        This tutorial follows the latest HTML5 standard.
                    </div>

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