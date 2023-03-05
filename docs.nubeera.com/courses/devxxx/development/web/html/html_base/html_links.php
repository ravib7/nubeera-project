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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Links</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>Links are found in nearly all web pages. Links allow users to click their way from page to page.
                    <hr>

                    <h3 id="HTML Links - Hyperlinks" class="heading-anchor">HTML Links - Hyperlinks</h3>
                    HTML links are hyperlinks.<br>

                    You can click on a link and jump to another document.<br>

                    When you move the mouse over a link, the mouse arrow will turn into a little hand.<br>
                    <br>
                    <div class="notes">
                        <strong>Note:</strong> A link does not have to be text. A link can be an image or any other HTML element!
                    </div>

                    <h3 id="HTML Links - Syntax" class="heading-anchor">HTML Links - Syntax</h3>
                    With comments you can place notifications and reminders in your HTML code:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;a href=&quot;<i>url</i>&quot;&gt;<i>link text</i>&lt;/a&gt;
                        </div>
                    </div><br>
                    The most important attribute of the <code class="w3-codespan">&lt;a&gt;</code> <a> element is the <code class="w3-codespan">
                            href</code> attribute, which indicates the link's destination.</a><br>
                    The link text is the part that will be visible to the reader.<br>
                    Clicking on the link text, will send the reader to the specified URL address.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        This example shows how to create a link to W3Schools.com:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;a href=&quot;https://www.nubeera.com/&quot;&gt;Visit NubeEra.com!&lt;/a&gt;
                        </div>
                    </div><br>
                    By default, links will appear as follows in all browsers:<br>
                    <ul>
                        <li>An unvisited link is underlined and blue</li>
                        <li>A visited link is underlined and purple</li>
                        <li>An active link is underlined and red</li>
                    </ul>


                    <h3 id="HTML Links - The target Attribute" class="heading-anchor">HTML Links - The target Attribute</h3>
                    By default, the linked page will be displayed in the current browser window.
                    To change this, you must specify another target for the link.<br>
                    The <code class="w3-codespan">target</code> attribute specifies where to open the linked document.<br>
                    The <code class="w3-codespan">target</code> attribute can have one of the following values:<br>
                    <ul>
                        <li><code class="w3-codespan">_self</code> - Default. Opens the document in
                            the same window/tab as it was clicked</li>
                        <li><code class="w3-codespan">_blank</code> - Opens the document in a new window or tab</li>
                        <li><code class="w3-codespan">_parent</code> - Opens the document in the parent frame</li>
                        <li><code class="w3-codespan">_top</code> - Opens the document in the full body of the window</li>
                    </ul>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;a href=&quot;https://www.nubeera.com/&quot;
                            target=&quot;_blank&quot;&gt;Visit NubeEra!&lt;/a&gt;
                        </div>
                    </div>

                    <h3 id="Absolute URLs vs. Relative URLs" class="heading-anchor">Absolute URLs vs. Relative URLs</h3>
                    Both examples above are using an <strong>absolute URL</strong> (a full web address)
                    in the <code class="w3-codespan">href</code> attribute.<br>
                    A local link (a link to a page within the same website) is specified with a
                    <strong>relative URL</strong> (without
                    the &quot;https://www&quot; part):<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;h2&gt;Absolute URLs&lt;/h2&gt;<br>&lt;p&gt;&lt;a href=&quot;https://www.w3.org/&quot;&gt;W3C&lt;/a&gt;&lt;/p&gt;<br>
                            &lt;p&gt;&lt;a href=&quot;https://www.google.com/&quot;&gt;Google&lt;/a&gt;&lt;/p&gt;<br><br>&lt;h2&gt;Relative
                            URLs&lt;/h2&gt;<br>&lt;p&gt;&lt;a href=&quot;html_images.asp&quot;&gt;HTML Images&lt;/a&gt;&lt;/p&gt;<br>&lt;p&gt;&lt;a href=&quot;/css/default.asp&quot;&gt;CSS
                            Tutorial&lt;/a&gt;&lt;/p&gt;
                        </div>
                    </div>

                    <h3 id="HTML Links - Use an Image as a Link" class="heading-anchor">HTML Links - Use an Image as a Link</h3>
                    To use an image as a link, just put the <code class="w3-codespan">&lt;img&gt;</code>
                    tag inside the <code class="w3-codespan">&lt;a&gt;</code> tag:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;a href=&quot;default.asp&quot;&gt;<br>&lt;img src=&quot;smiley.gif&quot; alt=&quot;HTML tutorial&quot; style=&quot;width:42px;height:42px;&quot;&gt;<br>&lt;/a&gt;
                        </div>
                    </div>

                    <h3 id="Link to an Email Address" class="heading-anchor">Link to an Email Address</h3>
                    Use <code class="w3-codespan">
                        mailto:</code> inside the <code class="w3-codespan">
                        href</code> attribute to create a link that opens the user's email program (to
                    let them send a new email):<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;a href=&quot;mailto:someone@example.com&quot;&gt;Send email&lt;/a&gt;
                        </div>
                    </div>

                    <h3 id="Button as a Link" class="heading-anchor">Button as a Link</h3>
                    To use an HTML button as a link, you have to add some JavaScript code.<br>

                    JavaScript allows you to specify what happens at certain events, such as a click of a button:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;button
                            onclick=&quot;document.location='default.asp'&quot;&gt;HTML Tutorial&lt;/button&gt;
                        </div>
                    </div>

                    <h3 id="Link Titles" class="heading-anchor">Link Titles</h3>
                    The <code class="w3-codespan">title</code> attribute specifies extra information about an element.
                    The information is most often shown as a tooltip text when the mouse moves over the element.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;a href=&quot;https://www.w3schools.com/html/&quot; title=&quot;Go to W3Schools HTML
                            section&quot;&gt;Visit our HTML Tutorial&lt;/a&gt;
                        </div>
                    </div>

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