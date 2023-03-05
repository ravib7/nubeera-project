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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Computer Code Elements</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>HTML contains several elements for defining user input and computer code.
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;code&gt;<br>x = 5;<br>y = 6;<br>
                            z = x + y;<br>&lt;/code&gt;
                        </div>
                    </div>

                    <hr>

                    <h3 id="HTML &lt;kbd&gt; For Keyboard Input" class="heading-anchor">HTML &lt;kbd&gt; For Keyboard Input</h3>
                    The HTML <code class="w3-codespan">&lt;kbd&gt;</code> element is used
                    to define keyboard input. The content inside is displayed in the browser's
                    default monospace font.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Define some text as keyboard input in a document:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;Save the document by pressing &lt;kbd&gt;Ctrl + S&lt;/kbd&gt;&lt;/p&gt;
                        </div>
                        Result:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            Save the document by pressing <kbd style="font-family:monospace !important;font-size:13px;">Ctrl + S</kbd>
                        </div>
                    </div>
                    <hr>

                    <h3 id="HTML &lt;samp&gt; For Program Output" class="heading-anchor">HTML &lt;samp&gt; For Program Output</h3>
                    The HTML <code class="w3-codespan">&lt;samp&gt;</code> element is used to
                    define sample output from a computer program. The content inside is displayed in
                    the browser's default monospace font.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Define some text as sample output from a computer program in a document:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;Message from my computer:&lt;/p&gt;<br>&lt;p&gt;&lt;samp&gt;File not found.&lt;br&gt;Press F1 to
                            continue&lt;/samp&gt;&lt;/p&gt;
                        </div>
                        Result:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            Message from my computer:<br>
                            <samp style="font-family: monospace !important;font-size:13px;">File not found.<br>Press F1 to continue</samp>
                        </div>
                    </div>
                    <hr>


                    <h3 id="HTML &lt;code&gt; For Computer Code" class="heading-anchor">HTML &lt;code&gt; For Computer Code</h3>
                    The HTML <code class="w3-codespan">&lt;code&gt;</code> element&nbsp; is used
                    to define a piece of computer code. The content inside is displayed in the
                    browser's default monospace font.<br>
                    The value of the <code class="w3-codespan">alt</code> attribute should describe the image:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Define some text as computer code in a document:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;code&gt;<br>x = 5;<br>y = 6;<br>z = x + y;<br>&lt;/code&gt;
                        </div>
                        Result:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            <code style="font-family: monospace !important;font-size:13px;color:black;background-color:#fff;padding:0;">
                                x = 5;
                                y = 6;
                                z = x + y;
                            </code>
                        </div>
                    </div><br>
                    Notice that the <code class="w3-codespan">&lt;code&gt;</code> element does not preserve extra whitespace and line-breaks.<br>
                    To fix this, you can put the <code class="w3-codespan">&lt;code&gt;</code> element inside a <code class="w3-codespan">&lt;pre&gt;</code> element:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;pre&gt;<br>&lt;code&gt;<br>x = 5;<br>y = 6;<br>z = x + y;<br>&lt;/code&gt;<br>&lt;/pre&gt;
                        </div>
                        Result:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            <code style="font-family: monospace !important;font-size:13px;coxlor:black;bxackground-color:#fff;padding:0;">
                                x = 5;<br>
                                y = 6;<br>
                                z = x + y;
                            </code>
                        </div>
                    </div>
                    <hr>

                    <h3 id="HTML &lt;var&gt; For Variables" class="heading-anchor">HTML &lt;var&gt; For Variables</h3>
                    The HTML <code class="w3-codespan">&lt;var&gt;</code> element&nbsp; is used
                    to define a variable in programming or in a mathematical expression. The
                    content inside is typically displayed in italic.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Define some text as variables in a document:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;The area of a triangle is: 1/2 x &lt;var&gt;b&lt;/var&gt; x &lt;var&gt;h&lt;/var&gt;, where &lt;var&gt;b&lt;/var&gt;
                            is the base, and &lt;var&gt;h&lt;/var&gt; is the vertical height.&lt;/p&gt;
                        </div>
                        Result:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            The area of a triangle is: 1/2 x <var>b</var> x <var>h</var>, where <var>b</var> is the base, and <var>h</var> is the vertical height.
                        </div>
                    </div>
                    <hr>

                    <h2>Chapter Summary</h2>
                    <ul>
                        <li>The <code class="w3-codespan">&lt;kbd&gt;</code> element defines
                            keyboard input</li>
                        <li>The <code class="w3-codespan">&lt;samp&gt;</code> element defines
                            sample output from a computer program</li>
                        <li>The <code class="w3-codespan">&lt;code&gt;</code> element&nbsp;defines a piece of computer code</li>
                        <li>The <code class="w3-codespan">&lt;var&gt;</code> element&nbsp;defines a variable in programming or in a mathematical expression</li>
                        <li>The <code class="w3-codespan">&lt;pre&gt;</code> element defines
                            preformatted text</li>
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