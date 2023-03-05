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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Input Types</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>This chapter describes the different attributes for the HTML <code class="w3-codespan">&lt;input&gt;</code> element.
                    <hr>

                    <h3 id="The value Attribute" class="heading-anchor">The value Attribute</h3>
                    The input <code class="w3-codespan">value</code> attribute specifies an initial value for an input field:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>
                            &nbsp; &lt;label for=&quot;fname&quot;&gt;First name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot;
                            id=&quot;fname&quot; name=&quot;fname&quot; value=&quot;John&quot;&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;lname&quot;&gt;Last
                            name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname&quot;
                            value=&quot;Doe&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>


                    <h3 id="The readonly Attribute" class="heading-anchor">The readonly Attribute</h3>
                    The input <code class="w3-codespan">readonly</code> attribute specifies that an input field is read-only.<br>
                    A read-only input field cannot be modified (however, a user can tab to it, highlight it, and copy the text from it).<br>
                    The value of a read-only input field will be sent when submitting the form!<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>
                            &nbsp; &lt;label for=&quot;fname&quot;&gt;First name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot;
                            id=&quot;fname&quot; name=&quot;fname&quot; value=&quot;John&quot; readonly&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;lname&quot;&gt;Last
                            name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname&quot;
                            value=&quot;Doe&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The disabled Attribute" class="heading-anchor">The disabled Attribute</h3>
                    The input <code class="w3-codespan">disabled</code> attribute specifies that an input field should be disabled.<br>
                    A disabled input field is unusable and un-clickable.<br>
                    The value of a disabled input field will not be sent when submitting the form!<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>
                            &nbsp; &lt;label for=&quot;fname&quot;&gt;First name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot;
                            id=&quot;fname&quot; name=&quot;fname&quot; value=&quot;John&quot; disabled&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;lname&quot;&gt;Last
                            name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname&quot;
                            value=&quot;Doe&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The size Attribute" class="heading-anchor">The size Attribute</h3>
                    The input <code class="w3-codespan">size</code> attribute specifies the
                    visible width, in characters, of an input field.<br>
                    The default value for <code class="w3-codespan">size</code> is 20.<br>
                    <strong>Note:</strong> The <code class="w3-codespan">size</code> attribute
                    works with the following input types: text, search, tel, url, email, and
                    password.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input
                            type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot; size=&quot;50&quot;&gt;&lt;br&gt;<br>&nbsp; &lt;label
                            for=&quot;pin&quot;&gt;PIN:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;pin&quot; name=&quot;pin&quot;
                            size=&quot;4&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The maxlength Attribute" class="heading-anchor">The maxlength Attribute</h3>
                    The input <code class="w3-codespan">maxlength</code> attribute specifies the maximum number of characters allowed in an input field.<br>
                    <strong>Note:</strong> When a <code class="w3-codespan">maxlength</code> is set, the input field will not accept more than the
                    specified number of characters. However, this attribute does not provide any feedback.
                    So, if you want to alert the user,
                    you must write JavaScript code.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input
                            type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot; size=&quot;50&quot;&gt;&lt;br&gt;<br>&nbsp; &lt;label
                            for=&quot;pin&quot;&gt;PIN:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;pin&quot; name=&quot;pin&quot;
                            maxlength=&quot;4&quot; size=&quot;4&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The min and max Attributes" class="heading-anchor">The min and max Attributes</h3>
                    The input <code class="w3-codespan">min</code> and <code class="w3-codespan">max</code> attributes specify the minimum and maximum values for an
                    input field.<br>
                    The <code class="w3-codespan">min</code> and <code class="w3-codespan">max</code> attributes work with the following input types: number, range, date, datetime-local, month, time and week.<br>
                    <strong>Tip:</strong> Use the max and min attributes together to create a
                    range of legal values.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;datemax&quot;&gt;Enter a date before
                            1980-01-01:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;date&quot; id=&quot;datemax&quot; name=&quot;datemax&quot;
                            max=&quot;1979-12-31&quot;&gt;&lt;br&gt;&lt;br&gt;<br><br>&nbsp; &lt;label for=&quot;datemin&quot;&gt;Enter a date
                            after 2000-01-01:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;date&quot; id=&quot;datemin&quot; name=&quot;datemin&quot;
                            min=&quot;2000-01-02&quot;&gt;&lt;br&gt;&lt;br&gt;<br><br>&nbsp; &lt;label for=&quot;quantity&quot;&gt;Quantity
                            (between 1 and 5):&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;number&quot; id=&quot;quantity&quot;
                            name=&quot;quantity&quot; min=&quot;1&quot; max=&quot;5&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The multiple Attribute" class="heading-anchor">The multiple Attribute</h3>
                    The input <code class="w3-codespan">multiple</code> attribute specifies that the user is allowed to enter more than one value in
                    an input field.<br>
                    The <code class="w3-codespan">multiple</code> attribute works with the following input types: email, and file.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;files&quot;&gt;Select files:&lt;/label&gt;<br>&nbsp; &lt;input
                            type=&quot;file&quot; id=&quot;files&quot; name=&quot;files&quot; multiple&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The pattern Attribute" class="heading-anchor">The pattern Attribute</h3>
                    The input <code class="w3-codespan">pattern</code> attribute specifies a regular expression that the
                    input field's value is checked against, when the form is submitted.<br>
                    The <code class="w3-codespan">pattern</code> attribute works with the following input types: text,
                    date, search, url, tel, email, and password.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        An input field that can contain only three letters (no numbers or special characters):
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;country_code&quot;&gt;Country code:&lt;/label&gt;<br>&nbsp;
                            &lt;input type=&quot;text&quot; id=&quot;country_code&quot; name=&quot;country_code&quot;<br>&nbsp;
                            pattern=&quot;[A-Za-z]{3}&quot; title=&quot;Three letter country code&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The placeholder Attribute" class="heading-anchor">The placeholder Attribute</h3>
                    The input <code class="w3-codespan">placeholder</code> attribute specifies
                    a short hint that describes the expected value of an input field (a sample value or a short description of the
                    expected format).<br>
                    The short hint is displayed in the input field before the user enters a
                    value.<br>
                    The <code class="w3-codespan">placeholder</code> attribute works with the following input types: text, search, url, tel, email, and password.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;phone&quot;&gt;Enter a phone number:&lt;/label&gt;<br>&nbsp;
                            &lt;input type=&quot;tel&quot; id=&quot;phone&quot; name=&quot;phone&quot;<br>&nbsp;
                            placeholder=&quot;123-45-678&quot;<br>&nbsp; pattern=&quot;[0-9]{3}-[0-9]{2}-[0-9]{3}&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The required Attribute" class="heading-anchor">The required Attribute</h3>
                    The input <code class="w3-codespan">required</code> attribute specifies that an input field must be filled out before submitting the form.<br>
                    The <code class="w3-codespan">required</code> attribute works with the following input types: text, search, url, tel, email, password, date pickers, number, checkbox, radio, and file.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;username&quot;&gt;Username:&lt;/label&gt;<br>&nbsp; &lt;input
                            type=&quot;text&quot; id=&quot;username&quot; name=&quot;username&quot; required&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The step Attribute" class="heading-anchor">The step Attribute</h3>
                    The input <code class="w3-codespan">step</code> attribute specifies the legal number intervals for an
                    input field.<br>
                    Example: if step=&quot;3&quot;, legal numbers could be -3, 0, 3, 6, etc.<br>
                    <b>Tip:</b> This attribute can be used together with the max and min attributes to create a range of legal values.<br>
                    The <code class="w3-codespan">step</code> attribute works with the following input types: number, range, date, datetime-local, month, time and week.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;points&quot;&gt;Points:&lt;/label&gt;<br>&nbsp; &lt;input
                            type=&quot;number&quot; id=&quot;points&quot; name=&quot;points&quot; step=&quot;3&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The autofocus Attribute" class="heading-anchor">The autofocus Attribute</h3>
                    The input <code class="w3-codespan">autofocus</code> attribute specifies that
                    an input field should automatically get focus when the page loads.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Let the &quot;First name&quot; input field automatically get focus when the page loads:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input
                            type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot; autofocus&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;lname&quot;&gt;Last
                            name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The height and width Attributes" class="heading-anchor">The height and width Attributes</h3>
                    The input <code class="w3-codespan">height</code> and <code class="w3-codespan">width</code> attributes specify the height and width of an <code class="w3-codespan">&lt;input
                        type=&quot;image&quot;&gt;</code> element.<br><br>
                    <div class="notes">
                        <strong>Tip:</strong> Always specify both the height and width attributes for
                        images. If height and width are set, the space required for the image is
                        reserved when the page is loaded. Without these attributes, the browser does not
                        know the size of the image, and cannot reserve the appropriate space to it. The
                        effect will be that the page layout will change during loading (while the images
                        load).
                    </div><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Define an image as the submit button, with height and width attributes:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First name:&lt;/label&gt;<br>&nbsp; &lt;input
                            type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;lname&quot;&gt;Last
                            name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;image&quot; src=&quot;img_submit.gif&quot; alt=&quot;Submit&quot; width=&quot;48&quot; height=&quot;48&quot;&gt;
                            <br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The list Attribute" class="heading-anchor">The list Attribute</h3>
                    The input <code class="w3-codespan">list</code> attribute refers to a <code class="w3-codespan">&lt;datalist&gt;</code> element that contains pre-defined options for an &lt;input&gt; element.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        An &lt;input&gt; element with pre-defined values in a &lt;datalist&gt;:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp;
                            &lt;input list=&quot;browsers&quot;&gt;<br>&nbsp;
                            &lt;datalist id=&quot;browsers&quot;&gt;<br>
                            &nbsp;&nbsp;&nbsp; &lt;option value=&quot;Internet Explorer&quot;&gt;<br>
                            &nbsp;
                            &nbsp; &lt;option value=&quot;Firefox&quot;&gt;<br>
                            &nbsp;
                            &nbsp; &lt;option value=&quot;Chrome&quot;&gt;<br>
                            &nbsp;
                            &nbsp; &lt;option value=&quot;Opera&quot;&gt;<br>
                            &nbsp;
                            &nbsp; &lt;option value=&quot;Safari&quot;&gt;<br>
                            &nbsp;
                            &lt;/datalist&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The autocomplete Attribute" class="heading-anchor">The autocomplete Attribute</h3>
                    The input <code class="w3-codespan">autocomplete</code> attribute specifies whether a form or
                    an input field should have autocomplete on or off.<br>
                    Autocomplete allows the browser to predict the value. When a user starts to
                    type in a field, the browser should display options to fill in the field, based
                    on earlier typed values.<br>
                    The <code class="w3-codespan">autocomplete</code> attribute works with <code class="w3-codespan">&lt;form&gt;</code> and the
                    following <code class="w3-codespan">&lt;input&gt;</code> types: text, search, url, tel, email, password, datepickers, range, and color.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page.php&quot; autocomplete=&quot;on&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
                            name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot;
                            name=&quot;lname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;email&quot;&gt;Email:&lt;/label&gt;<br>&nbsp;
                            &lt;input type=&quot;email&quot; id=&quot;email&quot; name=&quot;email&quot; autocomplete=&quot;off&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
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