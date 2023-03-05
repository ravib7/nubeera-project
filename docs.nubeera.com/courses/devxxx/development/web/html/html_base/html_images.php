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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Images</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>Images can improve the design and the appearance of a web page.
                    <hr>

                    <h3 id="HTML Images Syntax" class="heading-anchor">HTML Images Syntax</h3>
                    The HTML <code class="w3-codespan">&lt;img&gt;</code> tag is used to embed an
                    image in a web page.<br>
                    Images are not technically inserted into a web page; images are linked to web
                    pages. The <code class="w3-codespan">&lt;img&gt;</code> tag creates a holding
                    space for the referenced image.<br>
                    The <code class="w3-codespan">&lt;img&gt;</code> tag&nbsp;is empty, it contains attributes only, and does not
                    have a closing tag.<br>
                    The <code class="w3-codespan">&lt;img&gt;</code> tag has two required
                    attributes:<br>
                    <ul>
                        <li>src - Specifies the path to the image</li>
                        <li>alt - Specifies an alternate text for the image</li>
                    </ul>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;img src=&quot;<i>url</i>&quot; alt=&quot;<em>alternatetext</em>&quot;&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The src Attribute" class="heading-anchor">The src Attribute</h3>
                    The required <code class="w3-codespan">src</code> attribute specifies the path (URL) to the image.<br>
                    <strong>Note:</strong> When a web page loads, it is the browser, at that
                    moment, that gets the image from a web server and inserts it into the page.
                    Therefore, make sure that the image actually stays in the same spot in relation
                    to the web page, otherwise your visitors will get a broken link icon. The broken
                    link icon and the <code class="w3-codespan">alt</code> text are shown if the browser cannot find the image.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;img src=&quot;img_chania.jpg&quot; alt=&quot;Flowers
                            in Chania&quot;&gt;
                        </div>
                    </div>
                    <hr>


                    <h3 id="The alt Attribute" class="heading-anchor">The alt Attribute</h3>
                    The required <code class="w3-codespan">alt</code> attribute provides an alternate text for an image, if the user for
                    some reason cannot view it (because of slow connection, an error in the src
                    attribute, or if the user uses a screen reader).<br>
                    The value of the <code class="w3-codespan">alt</code> attribute should describe the image:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;img src=&quot;img_chania.jpg&quot; alt=&quot;Flowers
                            in Chania&quot;&gt;
                        </div>
                    </div><br>
                    If a browser cannot find an image, it will display the value of the <code class="w3-codespan">alt</code>
                    attribute:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;img src=&quot;wrongname.gif&quot; alt=&quot;Flowers
                            in Chania&quot;&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Image Size - Width and Height" class="heading-anchor">Image Size - Width and Height</h3>
                    You can use the <code class="w3-codespan">style</code> attribute to specify the width and
                    height of an image.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;img src=&quot;img_girl.jpg&quot; alt=&quot;Girl in a jacket&quot; style=&quot;width:500px;height:600px;&quot;&gt;
                        </div>
                    </div><br>
                    Alternatively, you can use the <code class="w3-codespan">width</code> and <code class="w3-codespan">height</code> attributes:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;img src=&quot;img_girl.jpg&quot; alt=&quot;Girl in a jacket&quot; width=&quot;500&quot; height=&quot;600&quot;&gt;
                        </div>
                    </div><br>
                    The <code class="w3-codespan">width</code> and <code class="w3-codespan">height</code> attributes always define the width and height of the
                    image in pixels.
                    <hr>

                    <h3 id="Animated Images" class="heading-anchor">Animated Images</h3>
                    HTML allows animated GIFs:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;img src=&quot;programming.gif&quot; alt=&quot;Computer Man&quot; style=&quot;width:48px;height:48px;&quot;&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Image Floating" class="heading-anchor">Image Floating</h3>
                    Use the CSS <code class="w3-codespan">float</code> property to let the image float to the right or to the left of a text:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;&lt;img src=&quot;smiley.gif&quot; alt=&quot;Smiley face&quot;
                            style=&quot;float:right;width:42px;height:42px;&quot;&gt;<br>
                            The image will float to the right of
                            the text.&lt;/p&gt;<br><br>&lt;p&gt;&lt;img src=&quot;smiley.gif&quot; alt=&quot;Smiley face&quot;
                            style=&quot;float:left;width:42px;height:42px;&quot;&gt;<br>
                            The image will float to the left of
                            the text.&lt;/p&gt;
                        </div>
                    </div>
                    <hr>

                    <h2>Chapter Summary</h2>
                    <ul>
                        <li>Use the HTML <code class="w3-codespan">&lt;img&gt;</code> element to define an image</li>
                        <li>Use the HTML <code class="w3-codespan">src</code> attribute to define the URL of the image</li>
                        <li>Use the HTML <code class="w3-codespan">alt</code> attribute to define an alternate text for an image, if it cannot be displayed</li>
                        <li>Use the HTML <code class="w3-codespan">width</code> and <code class="w3-codespan">height</code> attributes
                            or the CSS <code class="w3-codespan">width</code> and <code class="w3-codespan">height</code>
                            properties to define the size of the image</li>
                        <li>Use the CSS <code class="w3-codespan">float</code> property to let the image float
                            to the left or to the right</li>
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