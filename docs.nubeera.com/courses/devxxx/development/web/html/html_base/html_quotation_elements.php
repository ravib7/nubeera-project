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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Quotation and Citation Elements</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>In this chapter we will go through the
                    <code class="w3-codespan">&lt;blockquote&gt;</code>,<code class="w3-codespan">&lt;q&gt;</code>, <code class="w3-codespan">&lt;abbr&gt;</code>, <code class="w3-codespan">&lt;address&gt;</code>, <code class="w3-codespan">&lt;cite&gt;</code>,
                    and <code class="w3-codespan">&lt;bdo&gt;</code> HTML elements.
                    <hr>

                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            <p>Here is a quote from WWF's website:</p>
                            <blockquote cite="http://www.worldwildlife.org/who/index.html">
                                For nearly 60 years, WWF has been protecting the future of nature.
                                The world's leading conservation organization,
                                WWF works in 100 countries and is supported by more than one million members in the United States and
                                close to five million globally.</blockquote>
                        </div>
                    </div>

                    <h3 id="HTML &lt;blockquote&gt; for Quotations" class="heading-anchor">HTML &lt;blockquote&gt; for Quotations</h3>
                    The HTML <code class="w3-codespan">&lt;blockquote&gt;</code> element defines a section that
                    is quoted from another source.<br>
                    Browsers usually indent <code class="w3-codespan">&lt;blockquote&gt;</code> elements.
                    <br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;Here is a quote from WWF's website:&lt;/p&gt;<br>&lt;blockquote cite=&quot;http://www.worldwildlife.org/who/index.html&quot;&gt;<br>
                            For 50 years, WWF has been protecting the future of nature.<br>The world's
                            leading conservation organization,<br>WWF works in 100 countries and is
                            supported by<br>1.2 million members in the United States and<br>close to 5
                            million globally.<br>&lt;/blockquote&gt;
                        </div>
                    </div>

                    <h3 id="HTML &lt;q&gt; for Short Quotations" class="heading-anchor">HTML &lt;q&gt; for Short Quotations</h3>
                    The HTML <code class="w3-codespan">&lt;q&gt;</code> tag defines a short quotation.<br>
                    Browsers normally insert quotation marks around the quotation.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;WWF's goal is to: &lt;q&gt;Build a future where people live in harmony with
                            nature.&lt;/q&gt;&lt;/p&gt;
                        </div>
                    </div><br>


                    <h3 id="HTML &lt;abbr&gt; for Abbreviations" class="heading-anchor">HTML &lt;abbr&gt; for Abbreviations</h3>
                    The HTML <code class="w3-codespan">&lt;abbr&gt;</code> tag defines an abbreviation or an acronym, like &quot;HTML&quot;,
                    &quot;CSS&quot;, "Mr.&quot;,
                    &quot;Dr.&quot;, &quot;ASAP&quot;, &quot;ATM&quot;.<br>
                    Marking abbreviations can give useful information to browsers, translation
                    systems and search-engines.<br>

                    <br><strong>Tip:</strong> The <code class="w3-codespan">&lt;i&gt;</code> tag is often used to indicate a technical term, a phrase from another language, a thought, a ship name, etc.
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;The &lt;abbr title=&quot;World Health Organization&quot;&gt;WHO&lt;/abbr&gt; was founded in
                            1948.&lt;/p&gt;
                        </div>
                    </div>

                    <h3 id="HTML &lt;address&gt; for Contact Information" class="heading-anchor">HTML &lt;address&gt; for Contact Information</h3>
                    The HTML <code class="w3-codespan">&lt;address&gt;</code> tag defines the contact information for the author/owner of a document
                    or an article.<br>
                    The contact information can be an email address, URL, physical address, phone
                    number, social media handle, etc.<br>
                    The text in the <code class="w3-codespan">&lt;address&gt;</code> element usually renders in <i>italic,</i>
                    and browsers will
                    always add a line break before and after the <code class="w3-codespan">&lt;address&gt;</code> element.<br>

                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;address&gt;<br>Written by John Doe.&lt;br&gt; <br>Visit us at:&lt;br&gt;<br>Example.com&lt;br&gt;<br>
                            Box 564, Disneyland&lt;br&gt;<br>USA<br>&lt;/address&gt;
                        </div>
                    </div>


                    <h3 id="HTML &lt;cite&gt; for Work Title" class="heading-anchor">HTML &lt;cite&gt; for Work Title</h3>
                    The HTML <code class="w3-codespan">&lt;cite&gt;</code> tag defines the title of a
                    creative work (e.g. a book, a poem, a song, a movie, a painting, a sculpture, etc.).<br>
                    <b>Note:</b> A person's name is not the title of a work.<br>
                    The text in the <code class="w3-codespan">&lt;cite&gt;</code> element usually renders in <i>italic</i>.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;&lt;cite&gt;The Scream&lt;/cite&gt; by Edvard Munch. Painted in 1893.&lt;/p&gt;
                        </div>
                    </div>

                    <h3 id="HTML &lt;bdo&gt; for Bi-Directional Override" class="heading-anchor">HTML &lt;bdo&gt; for Bi-Directional Override</h3>
                    BDO stands for Bi-Directional Override.<br>
                    The HTML <code class="w3-codespan">&lt;bdo&gt;</code> tag is used to override
                    the current text direction:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;bdo dir=&quot;rtl&quot;&gt;This text will be written from right to left&lt;/bdo&gt;
                        </div>
                    </div>

                    <h2>HTML Quotation and Citation Elements</h2>
                    <table class="ws-table-all notranslate">
                        <tr>
                            <th style="width:20%">Tag</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_abbr.asp">&lt;abbr&gt;</a></td>
                            <td>Defines an abbreviation or acronym</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_address.asp">&lt;address&gt;</a></td>
                            <td>Defines contact information for the author/owner of a document</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_bdo.asp">&lt;bdo&gt;</a></td>
                            <td>Defines the text direction</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_blockquote.asp">&lt;blockquote&gt;</a></td>
                            <td> Defines a section that is quoted from another source</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_cite.asp">&lt;cite&gt;</a></td>
                            <td>Defines the title of a work</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_q.asp">&lt;q&gt;</a></td>
                            <td>Defines a short inline quotation</td>
                        </tr>
                    </table>

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