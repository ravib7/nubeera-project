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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Text Formatting</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <br>HTML contains several elements for defining text with a special meaning.<br>

                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            <p><b>This text is bold</b></p>
                            <p><i>This text is italic</i></p>
                            <p>This is<sub> subscript</sub> and <sup>superscript</sup></p>
                        </div>
                    </div>

                    <h3 id="HTML Formatting Elements" class="heading-anchor">HTML Formatting Elements</h3>
                    Formatting elements were designed to display special types of text:
                    <ul>
                        <li><code class="w3-codespan">&lt;b&gt;</code> - Bold text</li>
                        <li><code class="w3-codespan">&lt;strong&gt;</code> - Important text</li>
                        <li><code class="w3-codespan">&lt;i&gt;</code> - Italic text</li>
                        <li><code class="w3-codespan">&lt;em&gt;</code> - Emphasized text</li>
                        <li><code class="w3-codespan">&lt;mark&gt;</code> - Marked text</li>
                        <li><code class="w3-codespan">&lt;small&gt;</code> - Smaller text</li>
                        <li><code class="w3-codespan">&lt;del&gt;</code> - Deleted text</li>
                        <li><code class="w3-codespan">&lt;ins&gt;</code> - Inserted text</li>
                        <li><code class="w3-codespan">&lt;sub&gt;</code> - Subscript text</li>
                        <li><code class="w3-codespan">&lt;sup&gt;</code> - Superscript text</li>
                    </ul><br>

                    <h3 id="HTML &lt;b&gt; and &lt;strong&gt; Elements" class="heading-anchor">HTML &lt;b&gt; and &lt;strong&gt; Elements</h3>
                    The HTML <code class="w3-codespan">&lt;b&gt;</code> element defines bold text, without any extra importance.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;b&gt;This text is bold&lt;/b&gt;
                        </div>
                    </div><br>
                    The HTML <code class="w3-codespan">&lt;strong&gt;</code> element defines text with strong importance. The content inside is typically displayed in bold.

                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;strong&gt;This text is
                            important!&lt;/strong&gt;
                        </div>
                    </div>

                    <h3 id="HTML &lt;i&gt; and &lt;em&gt; Elements" class="heading-anchor">HTML &lt;i&gt; and &lt;em&gt; Elements</h3>
                    The HTML <code class="w3-codespan">&lt;i&gt;</code> element defines a part of text in an alternate voice or mood. The content inside is typically displayed in italic.

                    <br><strong>Tip:</strong> The <code class="w3-codespan">&lt;i&gt;</code> tag is often used to indicate a technical term, a phrase from another language, a thought, a ship name, etc.
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;i&gt;This text is italic&lt;/i&gt;
                        </div>
                    </div><br>
                    The HTML <code class="w3-codespan">&lt;em&gt;</code> element defines emphasized text. The content inside is typically displayed in italic.<br>
                    <strong>Tip:</strong> A screen reader will pronounce the words in <code class="w3-codespan">&lt;em&gt;</code> with an emphasis, using verbal stress.
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;em&gt;This text is emphasized&lt;/em&gt;
                        </div>
                    </div>

                    <h3 id="HTML &lt;small&gt; Element" class="heading-anchor">HTML &lt;small&gt; Element</h3>
                    The HTML <code class="w3-codespan">&lt;small&gt;</code> element defines smaller text:<br>

                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;small&gt;This is some smaller text.&lt;/small&gt;
                        </div>
                    </div>


                    <h3 id="HTML &lt;mark&gt; Element" class="heading-anchor">HTML &lt;mark&gt; Element</h3>
                    The HTML <code class="w3-codespan">&lt;mark&gt;</code> element defines text that should be marked or highlighted:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;Do not forget to buy &lt;mark&gt;milk&lt;/mark&gt; today.&lt;/p&gt;<br>
                        </div>
                    </div>

                    <h3 id="HTML &lt;del&gt; Element" class="heading-anchor">HTML &lt;del&gt; Element</h3>
                    The HTML <code class="w3-codespan">&lt;del&gt;</code> element defines text that has been deleted from a document. Browsers will usually strike a line through deleted text:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;My favorite color is &lt;del&gt;blue&lt;/del&gt; red.&lt;/p&gt;<br>
                        </div>
                    </div>

                    <h3 id="HTML &lt;ins&gt; Element" class="heading-anchor">HTML &lt;ins&gt; Element</h3>
                    The HTML <code class="w3-codespan">&lt;ins&gt;</code> element defines a text that has been inserted into a document. Browsers will usually underline inserted text:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;My favorite color is &lt;del&gt;blue&lt;/del&gt; &lt;ins&gt;red&lt;/ins&gt;.&lt;/p&gt;
                        </div>
                    </div>

                    <h3 id="HTML &lt;sub&gt; Element" class="heading-anchor">HTML &lt;sub&gt; Element</h3>
                    ppears half a character below the normal line,
                    and is sometimes rendered in a smaller font. Subscript text can be used for
                    chemical formulas, like H<sub>2</sub>O:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;This
                            is &lt;sub&gt;subscripted&lt;/sub&gt; text.&lt;/p&gt;<br>
                        </div>
                    </div>

                    <h3 id="HTML &lt;sup&gt; Element" class="heading-anchor">HTML &lt;sup&gt; Element</h3>
                    The HTML <code class="w3-codespan">&lt;sup&gt;</code> element defines
                    superscript text. Superscript text appears half a character above the normal
                    line, and is sometimes rendered in a smaller font. Superscript text can be used
                    for footnotes, like WWW<sup>[1]</sup>:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;This
                            is &lt;sup&gt;superscripted&lt;/sup&gt; text.&lt;/p&gt;<br>
                        </div>
                    </div>

                    <h2>HTML Text Formatting Elements</h2>
                    <table width="100%">
                        <tr>
                            <th style="width:20%">Tag</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_b.asp">&lt;b&gt;</a></td>
                            <td>Defines bold text</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_em.asp">&lt;em&gt;</a></td>
                            <td>Defines emphasized text&nbsp;</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_i.asp">&lt;i&gt;</a></td>
                            <td>Defines a part of text in an alternate voice or mood</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_small.asp">&lt;small&gt;</a></td>
                            <td>Defines smaller text</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_strong.asp">&lt;strong&gt;</a></td>
                            <td>Defines important text</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_sub.asp">&lt;sub&gt;</a></td>
                            <td>Defines subscripted text</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_sup.asp">&lt;sup&gt;</a></td>
                            <td>Defines superscripted text</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_ins.asp">&lt;ins&gt;</a></td>
                            <td>Defines inserted text</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_del.asp">&lt;del&gt;</a></td>
                            <td>Defines deleted text</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_mark.asp">&lt;mark&gt;</a></td>
                            <td>Defines marked/highlighted text</td>
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