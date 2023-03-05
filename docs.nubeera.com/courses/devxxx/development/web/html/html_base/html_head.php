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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML - The Head Element</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>The HTML <code class="w3-codespan">&lt;head&gt;</code> element
                    is a container for the following elements:
                    <code class="w3-codespan">&lt;title&gt;</code>, <code class="w3-codespan">&lt;style&gt;</code>,
                    <code class="w3-codespan">&lt;meta&gt;</code>, <code class="w3-codespan">&lt;link&gt;</code>, <code class="w3-codespan">&lt;script&gt;</code>, and <code class="w3-codespan">&lt;base&gt;</code>.
                    <hr>

                    <h3 id="The HTML &lt;head&gt; Element" class="heading-anchor">The HTML &lt;head&gt; Element</h3>
                    The <code class="w3-codespan">&lt;head&gt;</code> element is a container for metadata (data
                    about data) and is placed between the <code class="w3-codespan">&lt;html&gt;</code> tag and the <code class="w3-codespan">&lt;body&gt;</code> tag.<br>
                    HTML metadata is data about the HTML document. Metadata is not displayed.<br>
                    Metadata typically define the document title, character set, styles, scripts, and other meta information.
                    <hr>

                    <h3 id="The HTML &lt;title&gt; Element" class="heading-anchor">The HTML &lt;title&gt; Element</h3>
                    The <code class="w3-codespan">&lt;title&gt;</code> element defines the title of the document.
                    The title must be text-only, and it is shown in the browser's title bar or in
                    the page's tab.<br>
                    The <code class="w3-codespan">&lt;title&gt;</code> element is required in HTML documents!<br>
                    The contents of a page title is very important for search engine optimization
                    (SEO)! The page title is used by search engine algorithms to decide the order
                    when listing pages in search results.<br>
                    The <code class="w3-codespan">&lt;title&gt;</code> element:<br>
                    <ul>
                        <li>defines a title in the browser toolbar</li>
                        <li>provides a title for the page when it is added to favorites</li>
                        <li>displays a title for the page in search engine-results</li>
                    </ul>

                    So, try to make the title as accurate and meaningful as possible!<br>
                    A simple HTML document:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>
                            &lt;html&gt;<br>&lt;head&gt;<br>
                            &nbsp;
                            &lt;title&gt;A Meaningful Page
                            Title&lt;/title&gt;<br>
                            &lt;/head&gt;<br>
                            &lt;body&gt;<br>
                            <br>The content of the document......<br>
                            <br>&lt;/body&gt;<br>
                            &lt;/html&gt;
                        </div>
                    </div>
                    <hr>


                    <h3 id="The HTML &lt;style&gt; Element" class="heading-anchor">The HTML &lt;style&gt; Element</h3>
                    The <code class="w3-codespan">&lt;style&gt;</code> element is used to define style information for a
                    single HTML page:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;style&gt;<br>
                            &nbsp;
                            body {background-color: powderblue;}<br>&nbsp; h1 {color: red;}<br>
                            &nbsp;
                            p {color: blue;}<br>
                            &lt;/style&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The HTML &lt;link&gt; Element" class="heading-anchor">The HTML &lt;link&gt; Element</h3>
                    The <code class="w3-codespan">&lt;link&gt;</code> element defines the
                    relationship between the current document and an external resource.<br>The <code class="w3-codespan">&lt;link&gt;</code>
                    tag is most often used to link to external style sheets:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;link rel=&quot;stylesheet&quot; href=&quot;mystyle.css&quot;&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The HTML &lt;meta&gt; Element" class="heading-anchor">The HTML &lt;meta&gt; Element</h3>
                    The <code class="w3-codespan">&lt;meta&gt;</code> element is typically used
                    to specify the character set, page description, keywords, author of the document,
                    and viewport settings.<br>
                    The metadata will not be displayed on the page, but are used by browsers (how to display content
                    or reload page),
                    by search engines (keywords), and other web services.<br>
                    <h4>Examples</h4>
                    <b>Define the character set used:</b><br>
                    <div class="w3-code w3-border notranslate htmlHigh">
                        <div>&lt;meta charset=&quot;UTF-8&quot;&gt;</div>
                    </div>

                    <b>Define keywords for search engines:</b><br>
                    <div class="w3-code w3-border notranslate htmlHigh">
                        <div>&lt;meta name=&quot;keywords&quot; content=&quot;HTML, CSS, JavaScript&quot;&gt;</div>
                    </div>

                    <b>Define a description of your web page:</b><br>
                    <div class="w3-code w3-border notranslate htmlHigh">
                        <div>&lt;meta name=&quot;description&quot; content=&quot;Free Web tutorials&quot;&gt;</div>
                    </div>

                    <b>Define the author of a page:</b><br>
                    <div class="w3-code w3-border notranslate htmlHigh">
                        <div>&lt;meta name=&quot;author&quot; content=&quot;John Doe&quot;&gt;</div>
                    </div>

                    <b>Refresh document every 30 seconds:</b><br>
                    <div class="w3-code w3-border notranslate htmlHigh">
                        <div>&lt;meta http-equiv=&quot;refresh&quot; content=&quot;30&quot;&gt;</div>
                    </div>

                    <b>Setting the viewport to make your website look good on all devices:</b><br>
                    <div class="w3-code w3-border notranslate htmlHigh">
                        <div>
                            &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
                        </div>
                    </div>
                    Example of <code class="w3-codespan">&lt;meta&gt;</code> tags:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;meta charset=&quot;UTF-8&quot;&gt;<br>&lt;meta name=&quot;description&quot; content=&quot;Free Web tutorials&quot;&gt;<br>&lt;meta name=&quot;keywords&quot; content=&quot;HTML, CSS, JavaScript&quot;&gt;<br>&lt;meta name=&quot;author&quot; content=&quot;John
                            Doe&quot;&gt;<br>
                        </div>
                    </div>
                    <hr>

                    <h3 id="Setting The Viewport" class="heading-anchor">Setting The Viewport</h3>
                    The viewport is the user's visible area of a web page. It varies with the device
                    - it will be smaller on a mobile phone than on a computer screen.<br>
                    You should include the following <code class="w3-codespan">&lt;meta&gt;</code> element in all your web pages:<br>
                    <div class="w3-code w3-border notranslate htmlHigh">
                        <div>
                            &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
                        </div>
                    </div>
                    This gives the browser instructions on how
                    to control the page's dimensions and scaling.<br>
                    The <code class="w3-codespan">width=device-width</code> part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).<br>
                    The <code class="w3-codespan">initial-scale=1.0</code> part sets the initial zoom level when the page is first loaded by the browser.<br>
                    Here is an example of a web page <em>without</em> the viewport meta tag, and the same web page <em>with</em> the viewport meta tag:<br>
                    <div class="w3-row" style="text-align:center;">
                        <div class="w3-half">
                            <a target="_blank" href="example_withoutviewport.htm"><img src="https://www.w3schools.com/css/img_viewport1.png" class="w3-hover-shadow viewport" style="width:250px;height:500px;"><br><br><b>Without the
                                    viewport meta tag</b></a>
                            <br>
                            <br>
                        </div>
                        <div class="w3-half">
                            <a target="_blank" href="example_withviewport.htm"><img src="https://www.w3schools.com/css/img_viewport2.png" class="w3-hover-shadow viewport" style="width:250px;height:500px;"><br><br><b>With the
                                    viewport meta tag</b></a>
                            <br>
                            <br>
                        </div>
                    </div>
                    <hr>

                    <h3 id="The HTML &lt;script&gt; Element" class="heading-anchor">The HTML &lt;script&gt; Element</h3>
                    The <code class="w3-codespan">&lt;script&gt;</code> element is used to define client-side JavaScripts.<br>
                    The following JavaScript writes &quot;Hello JavaScript!&quot; into an HTML element with id=&quot;demo&quot;:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;script&gt;<br>function myFunction() {<br>
                            &nbsp;
                            document.getElementById(&quot;demo&quot;).innerHTML = &quot;Hello JavaScript!&quot;;<br>
                            }<br>&lt;/script&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The HTML &lt;base&gt; Element" class="heading-anchor">The HTML &lt;base&gt; Element</h3>
                    The <code class="w3-codespan">&lt;base&gt;</code> element specifies the base URL and/or target for all relative URLs in a page.<br>
                    The <code class="w3-codespan">&lt;base&gt;</code> tag must have either an
                    href or a target attribute present, or both.<br>
                    There can only be one single <code class="w3-codespan">&lt;base&gt;</code>
                    element in a document!<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Specify a default URL and a default target for all links on a page:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;head&gt;<br>&lt;base href=&quot;https://www.w3schools.com/&quot; target=&quot;_blank&quot;&gt;<br>&lt;/head&gt;<br>
                            <br>&lt;body&gt;<br>&lt;img src=&quot;images/stickman.gif&quot; width=&quot;24&quot; height=&quot;39&quot;
                            alt=&quot;Stickman&quot;&gt;<br>&lt;a href=&quot;tags/tag_base.asp&quot;&gt;HTML base Tag&lt;/a&gt;<br>&lt;/body&gt;<br>
                        </div>
                    </div>
                    <hr>

                    <h3>Chapter Summary</h3>
                    <ul>
                        <li>The <code class="w3-codespan">&lt;head&gt;</code> element is a container for metadata (data
                            about data)</li>
                        <li>The <code class="w3-codespan">&lt;head&gt;</code> element is placed between the <code class="w3-codespan">&lt;html&gt;</code> tag and the <code class="w3-codespan">&lt;body&gt;</code> tag</li>
                        <li>The <code class="w3-codespan">&lt;title&gt;</code> element is required and
                            it defines the title of the document</li>
                        <li>The <code class="w3-codespan">&lt;style&gt;</code> element is used to
                            define style information for a single document</li>
                        <li>The <code class="w3-codespan">&lt;link&gt;</code>
                            tag is most often used to link to external style sheets</li>
                        <li>The <code class="w3-codespan">&lt;meta&gt;</code> element is typically
                            used to specify the character set, page description, keywords, author of the
                            document, and viewport settings</li>
                        <li>The <code class="w3-codespan">&lt;script&gt;</code> element is used to define client-side JavaScripts</li>
                        <li>The <code class="w3-codespan">&lt;base&gt;</code> element specifies the
                            base URL and/or target for all relative URLs in a page</li>
                    </ul>
                    <hr>

                </div>
        </div>
        <?php require "../../../../../../templates/footer_outer.php" ?>

    </div>

    <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script defer src="../../../../../assets/fontawesome/js/all.min.js"></script><!-- footer social icons -->
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