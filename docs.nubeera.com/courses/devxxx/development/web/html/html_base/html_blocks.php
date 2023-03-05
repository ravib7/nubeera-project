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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Block and Inline Elements</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>Every HTML element has a default display value, depending on what type of element it is.<br>

                    There are two display values: block and inline.

                    <hr>

                    <h3 id="Block-level Elements" class="heading-anchor">Block-level Elements</h3>
                    A block-level element always starts on a new line.<br>

                    A block-level element always takes up the full width available (stretches out to the left and right as far as it can).<br>

                    A block level element has a top and a bottom margin, whereas an inline element does not.<br>

                    The <div> element is a block-level element.<br>
                        <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                            <h3>Example</h3>
                            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                                &lt;div&gt;Hello World&lt;/div&gt;
                            </div>
                        </div><br>
                        <p>Here are the block-level elements in HTML:</p>
                        <div class="w3-row htmlHigh w3-code" style="line-height:25px;border-left:none;">
                            <ul>
                                <li>&lt;address&gt;</li>
                                <li>&lt;article&gt;</li>
                                <li>&lt;aside&gt;</li>
                                <li>&lt;blockquote&gt;</li>
                                <li>&lt;canvas&gt;</li>
                                <li>&lt;dd&gt;</li>
                                <li>&lt;div&gt;</li>
                                <li>&lt;dl&gt;</li>
                                <li>&lt;dt&gt;</li>
                                <li>&lt;fieldset&gt;</li>
                                <li>&lt;figcaption&gt;</li>
                                <li>&lt;figure&gt;</li>
                                <li>&lt;footer&gt;</li>
                                <li>&lt;form&gt;</li>
                                <li>&lt;h1&gt;-&lt;h6&gt;</li>
                                <li>&lt;header&gt;</li>
                                <li>&lt;hr&gt;</li>
                                <li>&lt;li&gt;</li>
                                <li>&lt;main&gt;</li>
                                <li>&lt;nav&gt;</li>
                                <li>&lt;noscript&gt;</li>
                                <li>&lt;ol&gt;</li>
                                <li>&lt;p&gt;</li>
                                <li>&lt;pre&gt;</li>
                                <li>&lt;section&gt;</li>
                                <li>&lt;table&gt;</li>
                                <li>&lt;tfoot&gt;</li>
                                <li>&lt;ul&gt;</li>
                                <li>&lt;video&gt;</li>
                            </ul>
                        </div>
                        <hr>

                        <h3 id="Inline Elements" class="heading-anchor">Inline Elements</h3>
                        An inline element does not start on a new line.<br>

                        An inline element only takes up as much width as necessary.<br>

                        This is a <span> element inside a paragraph.<br>
                            <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                                <h3>Example</h3>
                                <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                                    &lt;span&gt;Hello World&lt;/span&gt;
                                </div>
                            </div><br>
                            <p>Here are the inline elements in HTML:</p>
                            <div class="w3-row htmlHigh w3-code" style="line-height:25px;border-left:none;">
                                <ul>
                                    <li>&lt;a&gt;</li>
                                    <li>&lt;abbr&gt;</li>
                                    <li>&lt;acronym&gt;</li>
                                    <li>&lt;b&gt;</li>
                                    <li>&lt;bdo&gt;</li>
                                    <li>&lt;big&gt;</li>
                                    <li>&lt;br&gt;</li>
                                    <li>&lt;button&gt;</li>
                                    <li>&lt;cite&gt;</li>
                                    <li>&lt;code&gt;</li>
                                    <li>&lt;dfn&gt;</li>
                                    <li>&lt;em&gt;</li>
                                    <li>&lt;i&gt;</li>
                                    <li>&lt;img&gt;</li>
                                    <li>&lt;input&gt;</li>
                                    <li>&lt;kbd&gt;</li>
                                    <li>&lt;label&gt;</li>
                                    <li>&lt;map&gt;</li>
                                    <li>&lt;object&gt;</li>
                                    <li>&lt;output&gt;</li>
                                    <li>&lt;q&gt;</li>
                                    <li>&lt;samp&gt;</li>
                                    <li>&lt;script&gt;</li>
                                    <li>&lt;select&gt;</li>
                                    <li>&lt;small&gt;</li>
                                    <li>&lt;span&gt;</li>
                                    <li>&lt;strong&gt;</li>
                                    <li>&lt;sub&gt;</li>
                                    <li>&lt;sup&gt;</li>
                                    <li>&lt;textarea&gt;</li>
                                    <li>&lt;time&gt;</li>
                                    <li>&lt;tt&gt;</li>
                                    <li>&lt;var&gt;</li>
                                </ul>
                            </div>
                            <hr>


                            <h3 id="The &lt;div&gt; Element" class="heading-anchor">The &lt;div&gt; Element</h3>
                            The <code class="w3-codespan">&lt;div&gt;</code> element is
                            often used as a container for other HTML elements.<br>
                            The <code class="w3-codespan">&lt;div&gt;</code> element has no required attributes, but <code class="w3-codespan">style</code>, <code class="w3-codespan">class</code> and <code class="w3-codespan">id</code> are common.<br>
                            When used together with CSS, the <code class="w3-codespan">&lt;div&gt;</code> element can be used to style blocks of
                            content:<br>
                            The value of the <code class="w3-codespan">alt</code> attribute should describe the image:<br>
                            <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                                <h3>Example</h3>
                                <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                                    &lt;div style=&quot;background-color:black;color:white;padding:20px;&quot;&gt;<br>
                                    &nbsp; &lt;h2&gt;London&lt;/h2&gt;<br>&nbsp; &lt;p&gt;London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.&lt;/p&gt;<br>
                                    &lt;/div&gt;
                                </div>
                            </div>
                            <hr>

                            <h3 id="The &lt;span&gt; Element" class="heading-anchor">The &lt;span&gt; Element</h3>
                            The <code class="w3-codespan">&lt;span&gt;</code> element is
                            an inline container used to mark up a part of a text, or a part of a document.<br>
                            The <code class="w3-codespan">&lt;span&gt;</code> element has no required attributes, but <code class="w3-codespan">style</code>, <code class="w3-codespan">class</code> and <code class="w3-codespan">id</code> are common.<br>
                            When used together with CSS, the <code class="w3-codespan">&lt;span&gt;</code> element can be used to style parts of the text:<br>
                            <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                                <h3>Example</h3>
                                <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                                    &lt;p&gt;My mother has &lt;span style=&quot;color:blue;font-weight:bold&quot;&gt;blue&lt;/span&gt; eyes
                                    and my father has &lt;span style=&quot;color:darkolivegreen;font-weight:bold&quot;&gt;dark
                                    green&lt;/span&gt; eyes.&lt;/p&gt;<br>
                                </div>
                            </div>
                            <hr>

                            <h3>Chapter Summary</h3>
                            <ul>
                                <li>There are two display values: block and inline</li>
                                <li>A block-level element always starts on a new line and takes up the full
                                    width available</li>
                                <li>An inline element does not start on a new line and it only takes up as
                                    much width as necessary</li>
                                <li>The <code class="w3-codespan">&lt;div&gt;</code> element is a block-level
                                    and is often used as a container for other HTML elements</li>
                                <li>The <code class="w3-codespan">&lt;span&gt;</code> element is an inline
                                    container used to mark up a part of a text, or a part of a document</li>
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