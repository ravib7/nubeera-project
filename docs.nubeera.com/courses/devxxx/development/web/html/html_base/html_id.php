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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML id Attribute</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>The HTML <code>id</code> attribute is used to specify a unique id for an HTML element.<br>

                    You cannot have more than one element with the same id in an HTML document.
                    <hr>

                    <h3 id="Using The id Attribute" class="heading-anchor">Using The id Attribute</h3>
                    The <code class="w3-codespan">id</code> attribute specifies a unique id
                    for an HTML element. The value of the <code class="w3-codespan">id</code>
                    attribute must be unique within the HTML document.<br>
                    The <code class="w3-codespan">id</code> attribute is used to point
                    to a specific style declaration in a style sheet. It is also used by JavaScript to access and
                    manipulate the element with the specific id.<br>
                    The syntax for id is: write a hash character (#), followed by an id name.
                    Then, define the CSS properties within curly braces {}.<br>
                    In the following example we have an <code class="w3-codespan">&lt;h1&gt;</code> element that points to the
                    id name
                    &quot;myHeader&quot;. This <code class="w3-codespan">&lt;h1&gt;</code>
                    element will be styled according to the <code class="w3-codespan">#myHeader</code>
                    style definition in the head section:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>#myHeader {<br>&nbsp;
                            background-color: lightblue;<br>&nbsp; color: black;<br>&nbsp; padding: 40px;<br>&nbsp;
                            text-align: center;<br>} <br>&lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1 id=&quot;myHeader&quot;&gt;My
                            Header&lt;/h1&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div><br>
                    <div class="notes">
                        <strong>Note</strong>: The id name is case sensitive!<br><br>

                        <strong>Note</strong>: The id name must contain at least one character, cannot start with a number, and must not contain whitespaces (spaces, tabs, etc.).
                    </div>
                    <hr>

                    <h3 id="Difference Between Class and ID" class="heading-anchor">Difference Between Class and ID</h3>
                    A class name can be used by multiple HTML elements, while an id name must only be used by one HTML element within the page:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;style&gt;<br>/* Style the element with the id "myHeader"
                            */<br>
                            <strong>#myHeader</strong> {<br>&nbsp; background-color: lightblue;<br>&nbsp;
                            color: black;<br>&nbsp;&nbsp;padding:
                            40px;<br>&nbsp;&nbsp;text-align: center;<br>}<br><br>/* Style all
                            elements with the class name "city" */<br><strong>.city
                            </strong>{<br>&nbsp; background-color: tomato;<br>&nbsp;&nbsp;color: white;<br>&nbsp;&nbsp;padding: 10px;<br>} <br>&lt;/style&gt;<br>
                            <br>&lt;!-- An element with a unique id --&gt;<br>&lt;h1 id=&quot;myHeader&quot;&gt;My
                            Cities&lt;/h1&gt;<br><br>&lt;!-- Multiple elements with same class --&gt;<br>&lt;h2 class=&quot;city&quot;&gt;London&lt;/h2&gt;<br>&lt;p&gt;London is the capital of England.&lt;/p&gt;<br><br>
                            &lt;h2 class=&quot;city&quot;&gt;Paris&lt;/h2&gt;<br>&lt;p&gt;Paris is the capital of France.&lt;/p&gt;<br><br>
                            &lt;h2 class=&quot;city&quot;&gt;Tokyo&lt;/h2&gt;<br>&lt;p&gt;Tokyo is the capital of Japan.&lt;/p&gt;<br>
                        </div>
                    </div>
                    <hr>


                    <h3 id="HTML Bookmarks with ID and Links" class="heading-anchor">HTML Bookmarks with ID and Links</h3>
                    HTML bookmarks are used to allow readers to jump to specific parts of a webpage.<br>

                    Bookmarks can be useful if your page is very long.<br>

                    To use a bookmark, you must first create it, and then add a link to it.<br>

                    Then, when the link is clicked, the page will scroll to the location with the bookmark.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        First, create a bookmark with the <code class="w3-codespan">id</code> attribute:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;h2 id=&quot;C4&quot;&gt;Chapter 4&lt;/h2&gt;
                        </div>
                    </div><br>

                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Then, add a link to the bookmark ("Jump to Chapter 4"), from within the same page:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;a href=&quot;#C4&quot;&gt;Jump to Chapter 4&lt;/a&gt;
                        </div>
                    </div>
                    <hr>

                    <h3>Chapter Summary</h3>
                    <ul>
                        <li>The <code class="w3-codespan">id</code> attribute is used to specify a unique id
                            for an HTML element</li>
                        <li>The value of the <code class="w3-codespan">id</code>
                            attribute must be unique within the HTML document</li>
                        <li>The <code class="w3-codespan">id</code>
                            attribute is used by CSS and JavaScript to style/select a specific element</li>
                        <li>The value of the <code class="w3-codespan">id</code>
                            attribute is case sensitive</li>
                        <li>The <code class="w3-codespan">id</code>
                            attribute is also used to create HTML bookmarks</li>
                        <li>JavaScript can access an element with a specific id with the <code class="w3-codespan">getElementById()</code>
                            method</li>
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