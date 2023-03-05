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
    <link rel="stylesheet" href="../../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../templates/navbar.php'; ?>

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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Semantic Elements</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>Semantic elements = elements with a meaning.
                    <hr>

                    <h3 id="What are Semantic Elements?" class="heading-anchor">What are Semantic Elements?</h3>
                    A semantic element clearly describes its meaning to both the browser and the developer.<br>
                    Examples of <strong>non-semantic</strong> elements: <code class="w3-codespan">&lt;div&gt;</code> and <code class="w3-codespan">&lt;span&gt;</code> - Tells nothing about its content.<br>
                    Examples of <strong>semantic</strong> elements: <code class="w3-codespan">&lt;form&gt;</code>, <code class="w3-codespan">&lt;table&gt;</code>, and <code class="w3-codespan">&lt;article&gt;</code> - Clearly defines its content.
                    <hr>

                    <h3 id="Semantic Elements in HTML" class="heading-anchor">Semantic Elements in HTML</h3>
                    Many web sites contain HTML code like:
                    &lt;div id=&quot;nav&quot;&gt; &lt;div class=&quot;header&quot;&gt; &lt;div id=&quot;footer&quot;&gt;
                    to indicate navigation, header, and footer.<br>
                    In HTML there are some semantic elements that can be used to define different parts of a web page:
                    &nbsp;<br>
                    <div style="width:374px;float:left">
                        <ul>
                            <li>&lt;article&gt;</li>
                            <li>&lt;aside&gt;</li>
                            <li>&lt;details&gt;</li>
                            <li>&lt;figcaption&gt;</li>
                            <li>&lt;figure&gt;</li>
                            <li>&lt;footer&gt;</li>
                            <li>&lt;header&gt;</li>
                            <li>&lt;main&gt;</li>
                            <li>&lt;mark&gt;</li>
                            <li>&lt;nav&gt;</li>
                            <li>&lt;section&gt;</li>
                            <li>&lt;summary&gt;</li>
                            <li>&lt;time&gt;</li>
                        </ul>
                    </div>
                    <div style="width:260px;float:left;margin-bottom:15px;"><img alt="HTML Semantic Elements" src="https://www.w3schools.com/html/img_sem_elements.gif" width="219" height="258">
                    </div>
                    <p style="clear:both;"></p>
                    <hr>


                    <h3 id="HTML &lt;section&gt; Element" class="heading-anchor">HTML &lt;section&gt; Element</h3>
                    The <code class="w3-codespan">&lt;section&gt;</code> element defines a section in a document.<br>
                    &quot;A section is a thematic grouping of content, typically with a heading.&quot;<br>
                    Examples of where a <code class="w3-codespan">&lt;section&gt;</code> element can be used:<br>
                    <ul>
                        <li>Chapters</li>
                        <li>Introduction</li>
                        <li>News items</li>
                        <li>Contact information</li>
                    </ul>
                    A web page could normally be split into sections for introduction,
                    content, and contact information<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Two sections in a document:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;section&gt;<br>&lt;h1&gt;WWF&lt;/h1&gt;<br>&lt;p&gt;The World Wide Fund for Nature (WWF) is an
                            international organization working on issues regarding the conservation,
                            research and restoration of the environment, formerly named the World
                            Wildlife Fund. WWF was founded in 1961.&lt;/p&gt;<br>&lt;/section&gt;<br><br>&lt;section&gt;<br>
                            &lt;h1&gt;WWF's Panda symbol&lt;/h1&gt;<br>&lt;p&gt;The Panda has become the symbol of WWF.
                            The well-known panda logo of WWF originated from a panda named Chi Chi that
                            was transferred from the Beijing Zoo to the London Zoo in the same year of
                            the establishment of WWF.&lt;/p&gt;<br>&lt;/section&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="HTML &lt;article&gt; Element" class="heading-anchor">HTML &lt;article&gt; Element</h3>
                    The <code class="w3-codespan">&lt;article&gt;</code> element specifies independent, self-contained content.<br>
                    An article should make sense on its own, and it should be possible to
                    distribute it independently from the rest of the web site.<br>
                    Examples of where the <code class="w3-codespan">&lt;article&gt;</code> element can be used:<br>
                    <ul>
                        <li>Forum posts</li>
                        <li>Blog posts</li>
                        <li>User comments</li>
                        <li>Product cards</li>
                        <li>Newspaper articles</li>
                    </ul><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Three articles with independent, self-contained content:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;article&gt;<br>&lt;h2&gt;Google Chrome&lt;/h2&gt;<br>&lt;p&gt;Google Chrome is a web browser
                            developed by Google, released in 2008. Chrome is the world's most popular
                            web browser today!&lt;/p&gt;<br>&lt;/article&gt;<br><br>&lt;article&gt;<br>&lt;h2&gt;Mozilla
                            Firefox&lt;/h2&gt;<br>&lt;p&gt;Mozilla Firefox is an open-source web browser developed
                            by Mozilla. Firefox has been the second most popular web browser since
                            January, 2018.&lt;/p&gt;<br>&lt;/article&gt;<br><br>&lt;article&gt;<br>&lt;h2&gt;Microsoft Edge&lt;/h2&gt;<br>
                            &lt;p&gt;Microsoft Edge is a web browser developed by Microsoft, released in 2015.
                            Microsoft Edge replaced Internet Explorer.&lt;/p&gt;<br>&lt;/article&gt;
                        </div>
                    </div>
                    <hr>

                    <h3>Nesting &lt;article&gt; in &lt;section&gt; or Vice Versa?</h3>
                    The <code class="w3-codespan">&lt;article&gt;</code>
                    element specifies independent, self-contained content.<br>
                    The <code class="w3-codespan">&lt;section&gt;</code> element defines section in a document.<br>
                    Can we use the definitions to decide how to nest those elements? No, we cannot!<br>
                    So, you will find HTML pages with <code class="w3-codespan">&lt;section&gt;</code> elements
                    containing <code class="w3-codespan">&lt;article&gt;</code> elements, and <code class="w3-codespan">&lt;article&gt;</code> elements containing <code class="w3-codespan">&lt;section&gt;</code> elements.
                    <hr>

                    <h3>HTML &lt;header&gt; Element</h3>
                    The <code class="w3-codespan">&lt;header&gt;</code> element represents a container for introductory content or
                    a set of navigational links.<br>
                    A <code class="w3-codespan">&lt;header&gt;</code> element typically contains:<br>
                    <ul>
                        <li>one or more heading elements (&lt;h1&gt; - &lt;h6&gt;)</li>
                        <li>logo or icon</li>
                        <li>authorship information</li>
                    </ul>
                    <div class="notes">
                        <b>Note:</b> You can have several <code class="w3-codespan">&lt;header&gt;</code> elements in one
                        HTML document. However, <code class="w3-codespan">&lt;header&gt;</code> cannot be placed within a <code class="w3-codespan">&lt;footer&gt;</code>, <code class="w3-codespan">&lt;address&gt;</code> or another <code class="w3-codespan">&lt;header&gt;</code> element.
                    </div>
                    <br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        A header for an &lt;article&gt;:&nbsp;
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;article&gt;<br>
                            &nbsp; &lt;header&gt;<br>
                            &nbsp;&nbsp;&nbsp;
                            &lt;h1&gt;What Does WWF Do?&lt;/h1&gt;<br>
                            &nbsp;&nbsp;&nbsp; &lt;p&gt;WWF's mission:&lt;/p&gt;<br>
                            &nbsp; &lt;/header&gt;<br>
                            &nbsp; &lt;p&gt;WWF's mission is to stop the degradation of our planet's natural environment,<br>&nbsp; and build a future in which humans live in harmony with nature.&lt;/p&gt;<br>
                            &lt;/article&gt;
                        </div>
                    </div>
                    <hr>

                    <h3>HTML &lt;footer&gt; Element</h3>
                    The <code class="w3-codespan">&lt;footer&gt;</code> element defines a footer for a document or section.<br>
                    A <code class="w3-codespan">&lt;footer&gt;</code> element typically contains:<br>
                    <ul>
                        <li>authorship information</li>
                        <li>copyright
                            information</li>
                        <li>contact information</li>
                        <li>sitemap</li>
                        <li>back to top links</li>
                        <li>related documents</li>
                    </ul>
                    You can have several <code class="w3-codespan">&lt;footer&gt;</code> elements in one document.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        A footer section in a document:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;footer&gt;<br>
                            &nbsp; &lt;p&gt;Author: Hege Refsnes&lt;/p&gt;<br>
                            &nbsp; &lt;p&gt;&lt;a href=&quot;mailto:hege@example.com&quot;&gt;hege@example.com&lt;/a&gt;&lt;/p&gt;<br>
                            &lt;/footer&gt;
                        </div>
                    </div>
                    <hr>

                    <h3>HTML &lt;nav&gt; Element</h3>
                    The <code class="w3-codespan">&lt;nav&gt;</code> element defines a set of navigation links.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        A set of navigation links:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;nav&gt;<br>
                            &nbsp;
                            &lt;a href=&quot;/html/&quot;&gt;HTML&lt;/a&gt; |<br>
                            &nbsp;
                            &lt;a href=&quot;/css/&quot;&gt;CSS&lt;/a&gt; |<br>
                            &nbsp;
                            &lt;a href=&quot;/js/&quot;&gt;JavaScript&lt;/a&gt; |<br>
                            &nbsp;
                            &lt;a href=&quot;/jquery/&quot;&gt;jQuery&lt;/a&gt;<br>
                            &lt;/nav&gt;
                        </div>
                    </div>
                    <hr>

                    <h3>HTML &lt;aside&gt; Element</h3>
                    The <code class="w3-codespan">&lt;aside&gt;</code> element defines some content aside from the content it is
                    placed in (like a sidebar).<br>
                    The <code class="w3-codespan">&lt;aside&gt;</code> content should be
                    indirectly related to the surrounding content.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Display some content aside from the content it is placed in:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;My family and I visited The Epcot center this summer. The weather was
                            nice, and Epcot was amazing! I had a great summer together with my
                            family!&lt;/p&gt;<br><br>&lt;aside&gt;<br>&lt;h4&gt;Epcot Center&lt;/h4&gt;<br>&lt;p&gt;Epcot is a theme
                            park at Walt Disney World Resort featuring exciting attractions,
                            international pavilions, award-winning fireworks and seasonal special
                            events.&lt;/p&gt;<br>&lt;/aside&gt;
                        </div>
                    </div>
                    <hr>

                    <h3>HTML &lt;figure&gt; and &lt;figcaption&gt; Elements</h3>
                    The <code class="w3-codespan">&lt;figure&gt;</code> tag specifies self-contained content, like illustrations, diagrams, photos, code listings, etc.<br>
                    The <code class="w3-codespan">&lt;figcaption&gt;</code> tag defines a caption for a <code class="w3-codespan">&lt;figure&gt;</code> element. The <code class="w3-codespan">&lt;figcaption&gt;</code> element can be placed as the first or
                    as the last child of a <code class="w3-codespan">&lt;figure&gt;</code> element.<br>
                    The <code class="w3-codespan">&lt;img&gt;</code> element defines the actual image/illustration.&nbsp;<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;figure&gt;<br>
                            &nbsp; &lt;img src=&quot;pic_trulli.jpg&quot; alt=&quot;Trulli&quot;&gt;<br>
                            &nbsp; &lt;figcaption&gt;Fig1. - Trulli, Puglia, Italy.&lt;/figcaption&gt;<br>
                            &lt;/figure&gt;
                        </div>
                    </div>
                    <hr>

                </div>
        </div>
        <?php require "../../../../../templates/footer_outer.php" ?>

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