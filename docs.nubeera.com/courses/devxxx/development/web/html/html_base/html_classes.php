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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML class Attribute</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>The HTML <code class="w3-codespan">class</code> attribute is
                    used to specify a class for an HTML element.<br>
                    Multiple HTML elements can share the same class.
                    <hr>

                    <h3 id="Using The class Attribute" class="heading-anchor">Using The class Attribute</h3>
                    The <code class="w3-codespan">class</code> attribute is often used to point
                    to a class name in a style sheet. It can also be used by a JavaScript to access and
                    manipulate elements with the specific class name.<br>
                    In the following example we have three <code class="w3-codespan">&lt;div&gt;</code> elements
                    with a <code class="w3-codespan">class</code> attribute with the value of
                    &quot;city&quot;. All of the three <code class="w3-codespan">&lt;div&gt;</code>
                    elements will be styled equally according to the <code class="w3-codespan">.city</code>
                    style definition in the head section:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>
                            .city {<br>&nbsp;&nbsp;background-color: tomato;<br>&nbsp; color: white;<br>&nbsp;
                            border: 2px solid black;<br>&nbsp; margin: 20px;<br>
                            &nbsp; padding: 20px;<br>} <br>&lt;/style&gt;<br>
                            &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div class="city"&gt;<br>
                            &nbsp;
                            &lt;h2&gt;London&lt;/h2&gt;<br>&nbsp; &lt;p&gt;London is the capital of England.&lt;/p&gt;<br>
                            &lt;/div&gt;<br><br>&lt;div class="city"&gt;<br>
                            &nbsp;
                            &lt;h2&gt;Paris&lt;/h2&gt;<br>&nbsp; &lt;p&gt;Paris is the capital of France.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div class="city"&gt;<br>
                            &nbsp;
                            &lt;h2&gt;Tokyo&lt;/h2&gt;<br>&nbsp; &lt;p&gt;Tokyo is the capital of Japan.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div><br>
                    In the following example we have two <code class="w3-codespan">&lt;span&gt;</code> elements
                    with a <code class="w3-codespan">class</code> attribute with the value of
                    &quot;note&quot;. Both <code class="w3-codespan">&lt;span&gt;</code>
                    elements will be styled equally according to the <code class="w3-codespan">.note</code>
                    style definition in the head section:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>.note {<br>
                            &nbsp; font-size: 120%;<br>&nbsp;&nbsp;color: red;<br>}<br>
                            &lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;My &lt;span class="note"&gt;Important&lt;/span&gt; Heading&lt;/h1&gt;<br>&lt;p&gt;This is some &lt;span class="note"&gt;important&lt;/span&gt; text.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The Syntax For Class" class="heading-anchor">The Syntax For Class</h3>
                    To create a class; write a period (.) character, followed by a
                    class name.
                    Then, define the CSS properties within curly braces {}:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>.city {<br>&nbsp;
                            background-color: tomato;<br>&nbsp; color: white;<br>&nbsp; padding: 10px;<br>
                            }<br>&lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h2 class=&quot;city&quot;&gt;London&lt;/h2&gt;<br>
                            &lt;p&gt;London is the capital of England.&lt;/p&gt;<br><br>&lt;h2 class=&quot;city&quot;&gt;Paris&lt;/h2&gt;<br>
                            &lt;p&gt;Paris is the capital of France.&lt;/p&gt;<br><br>&lt;h2 class=&quot;city&quot;&gt;Tokyo&lt;/h2&gt;<br>
                            &lt;p&gt;Tokyo is the capital of Japan.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;<br>
                        </div>
                    </div>
                    <hr>


                    <h3 id="Multiple Classes" class="heading-anchor">Multiple Classes</h3>
                    HTML elements can belong to more than one class.<br>

                    To define multiple classes, separate the class names with a space, e.g. <div class="city main">. The element will be styled according to all the classes specified.<br>
                        In the following example, the first <code class="w3-codespan">&lt;h2&gt;</code> element belongs to both the <code class="w3-codespan">
                            city</code> class and also to the <code class="w3-codespan">main</code> class,
                        and will get the CSS styles from both of the classes:&nbsp;<br>
                        <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                            <h3>Example</h3>
                            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                                &lt;h2
                                class=&quot;city main&quot;&gt;London&lt;/h2&gt;<br>&lt;h2 class=&quot;city&quot;&gt;Paris&lt;/h2&gt;<br>&lt;h2
                                class=&quot;city&quot;&gt;Tokyo&lt;/h2&gt;<br>
                            </div>
                        </div>
                        <hr>

                        <h3 id="Different Elements Can Share Same Class" class="heading-anchor">Different Elements Can Share Same Class</h3>
                        Different HTML elements can point to the same class name.<br>
                        In the following example, both <code class="w3-codespan">&lt;h2&gt;</code> and <code class="w3-codespan">&lt;p&gt;</code>
                        points to the &quot;city&quot; class
                        and will share the same style:<br>
                        <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                            <h3>Example</h3>
                            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                                &lt;h2 class=&quot;city&quot;&gt;Paris&lt;/h2&gt;<br>&lt;p
                                class=&quot;city&quot;&gt;Paris is the capital of France&lt;/p&gt;<br>
                            </div>
                        </div>
                        <hr>

                        <h3>Chapter Summary</h3>
                        <ul>
                            <li>The HTML <code class="w3-codespan">class</code> attribute specifies one or
                                more class names for an element</li>
                            <li>Classes are used by CSS and JavaScript to select and access specific
                                elements</li>
                            <li>The <code class="w3-codespan">class</code> attribute can be used on any
                                HTML element</li>
                            <li>The class name is case sensitive</li>
                            <li>Different HTML elements can point to the same class name</li>
                            <li>JavaScript can access elements with a specific class name with the <code class="w3-codespan">getElementsByClassName()</code>
                                method</li>
                        </ul>
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