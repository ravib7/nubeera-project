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
                    <hr>This chapter describes the different types for the HTML <code class="w3-codespan">&lt;input&gt;</code> element.
                    <hr>

                    <h3 id="HTML Input Types" class="heading-anchor">HTML Input Types</h3>
                    Here are the different input types you can use in HTML:<br>
                    <ul>
                        <li><code class="w3-codespan">&lt;input type=&quot;button&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;checkbox&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;color&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;date&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;datetime-local&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;email&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;file&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;hidden&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;image&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;month&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;number&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;password&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;radio&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;range&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;reset&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;search&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;submit&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;tel&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;text&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;time&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;url&quot;&gt;</code></li>
                        <li><code class="w3-codespan">&lt;input type=&quot;week&quot;&gt;</code></li>
                    </ul><br>
                    <div class="notes">
                        <strong>Tip:</strong> The default value of the <code class="w3-codespan">type</code> attribute
                        is
                        &quot;text&quot;.
                    </div>
                    <hr>


                    <h3 id="Input Type Text" class="heading-anchor">Input Type Text</h3>
                    <code class="w3-codespan">&lt;input type=&quot;text&quot;&gt;</code> defines a <strong>
                        single-line text input field</strong>:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>
                            &nbsp; &lt;label for=&quot;fname&quot;&gt;First name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input
                            type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;lname&quot;&gt;Last
                            name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname"&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div><br>
                    This is how the HTML code above will be displayed in a browser:</p>
                    First name:<br>
                    <input type="text"><br>
                    Last name:<br>
                    <input type="text"><br>
                    <hr>

                    <h3 id="Input Type Password" class="heading-anchor">Input Type Password</h3>
                    <code class="w3-codespan">&lt;input type=&quot;password&quot;&gt;</code> defines a <strong>password field</strong>:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>
                            &nbsp; &lt;label for=&quot;username&quot;&gt;Username:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot;
                            id=&quot;username&quot; name=&quot;username&quot;&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;pwd&quot;&gt;Password:&lt;/label&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;password&quot; id=&quot;pwd&quot; name=&quot;pwd&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div><br>
                    This is how the HTML code above will be displayed in a browser:</p>
                    Username:<br>
                    <input type="text"><br>
                    Password:<br>
                    <input type="password"><br>
                    <div class="notes">
                        The characters in a password field are masked (shown as asterisks or circles).
                    </div>
                    <hr>

                    <h3 id="Input Type Submit" class="heading-anchor">Input Type Submit</h3>
                    <code class="w3-codespan">&lt;input type="submit"&gt;</code> defines a button for <strong>
                        submitting</strong> form data to a <strong>form-handler</strong>.<br>
                    The form-handler is typically a server page with a script for processing
                    input data.<br>
                    The form-handler is specified in the form's <code class="w3-codespan">action</code>
                    attribute:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
                            name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;
                            value=&quot;John&quot;&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname&quot; value=&quot;Doe&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div><br>
                    This is how the HTML code above will be displayed in a browser:</p>
                    <form action="/action_page.php" target="_blank">
                        First name:<br>
                        <input type="text" name="firstname" value="John"><br>
                        Last name:<br>
                        <input type="text" name="lastname" value="Doe">
                        <br><br>
                        <input type="submit" value="Submit">
                    </form>
                    <hr>

                    <h3 id="Input Type Reset" class="heading-anchor">Input Type Reset</h3>
                    <code class="w3-codespan">&lt;input type="reset"&gt;</code> defines a <strong>reset button</strong>
                    that will reset all form values to their default values:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
                            name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;
                            value=&quot;John&quot;&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname&quot; value=&quot;Doe&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&nbsp; &lt;input type=&quot;reset&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    This is how the HTML code above will be displayed in a browser:</p>
                    <form action="/action_page.php" target="_blank">
                        First name:<br>
                        <input type="text" name="firstname0" value="John"><br>
                        Last name:<br>
                        <input type="text" name="lastname0" value="Doe">
                        <br><br>
                        <input type="submit" value="Submit">
                        <input type="reset">
                    </form><br>
                    <div class="notes">
                        If you change the input values and then click the "Reset" button, the form-data will be reset to the default values.
                    </div>
                    <hr>

                    <h3 id="Input Type Radio" class="heading-anchor">Input Type Radio</h3>
                    <code class="w3-codespan">&lt;input type=&quot;radio&quot;&gt;</code> defines a <strong>radio button</strong>.<br>
                    Radio buttons let a user select ONLY ONE of a limited number of choices:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;p&gt;Choose your favorite Web language:&lt;/p&gt;<br><br>
                            &lt;form&gt;<br>&nbsp; &lt;input type=&quot;radio&quot; id=&quot;html&quot; name=&quot;fav_language&quot;
                            value=&quot;HTML&quot;&gt;<br>&nbsp; &lt;label for=&quot;html&quot;&gt;HTML&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input
                            type=&quot;radio&quot; id=&quot;css&quot; name=&quot;fav_language&quot; value=&quot;CSS&quot;&gt;<br>&nbsp; &lt;label
                            for=&quot;css&quot;&gt;CSS&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;radio&quot; id=&quot;javascript&quot;
                            name=&quot;fav_language&quot; value=&quot;JavaScript&quot;&gt;<br>&nbsp; &lt;label for=&quot;javascript&quot;&gt;JavaScript&lt;/label&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    This is how the HTML code above will be displayed in a browser:<br>
                    <input type="radio" id="html" name="fav_language" value="HTML">
                    <label for="html">HTML</label><br>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                    <label for="css">CSS</label><br>
                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                    <label for="javascript">JavaScript</label>
                    <hr>

                    <h3 id="Input Type Checkbox" class="heading-anchor">Input Type Checkbox</h3>
                    <code class="w3-codespan">&lt;input type=&quot;checkbox&quot;&gt;</code> defines a <strong>checkbox</strong>.<br>
                    Checkboxes let a user select ZERO or MORE options of a limited number of choices.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;input type=&quot;checkbox&quot; id=&quot;vehicle1&quot; name=&quot;vehicle1&quot; value=&quot;Bike&quot;&gt;<br>&nbsp;
                            &lt;label for=&quot;vehicle1&quot;&gt; I have a bike&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input
                            type=&quot;checkbox&quot; id=&quot;vehicle2&quot; name=&quot;vehicle2&quot; value=&quot;Car&quot;&gt;<br>&nbsp; &lt;label for=&quot;vehicle2&quot;&gt;
                            I have a car&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;checkbox&quot;
                            id=&quot;vehicle3&quot; name=&quot;vehicle3&quot;
                            value=&quot;Boat&quot;&gt;<br>&nbsp; &lt;label for=&quot;vehicle3&quot;&gt; I have a boat&lt;/label&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>This is how the HTML code above will be displayed in a browser:<br>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> I have a bike</label><br>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> I have a car</label><br>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3"> I have a boat</label>
                    <hr>

                    <h3 id="Input Type Color" class="heading-anchor">Input Type Color</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;color&quot;&gt;</code> is used for input fields that should contain a color.<br>
                    Depending on browser support, a color picker can show up in the input field.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;favcolor&quot;&gt;Select your favorite
                            color:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;color&quot; id=&quot;favcolor&quot; name=&quot;favcolor&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type Date" class="heading-anchor">Input Type Date</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;date&quot;&gt;</code> is used for input fields that should contain a date.<br>
                    Depending on browser support, a date picker can show up in the input field.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;birthday&quot;&gt;Birthday:&lt;/label&gt;<br>&nbsp; &lt;input
                            type=&quot;date&quot; id=&quot;birthday&quot; name=&quot;birthday&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div><br>
                    You can also use the <code class="w3-codespan">min</code> and <code class="w3-codespan">max</code> attributes to add restrictions to dates:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;datemax&quot;&gt;Enter a date before
                            1980-01-01:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;date&quot; id=&quot;datemax&quot; name=&quot;datemax&quot;
                            max=&quot;1979-12-31&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;datemin&quot;&gt;Enter a date after
                            2000-01-01:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;date&quot; id=&quot;datemin&quot; name=&quot;datemin&quot;
                            min=&quot;2000-01-02&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type Datetime-local" class="heading-anchor">Input Type Datetime-local</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;datetime-local&quot;&gt;</code> specifies
                    a date and time input field, with no time zone.<br>
                    Depending on browser support, a date picker can show up in the input field.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;birthdaytime&quot;&gt;Birthday (date and
                            time):&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;datetime-local&quot; id=&quot;birthdaytime&quot; name=&quot;birthdaytime&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type Email" class="heading-anchor">Input Type Email</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;email&quot;&gt;</code> is used for input fields that should contain an e-mail address.<br>
                    Depending on browser support, the e-mail address can be automatically validated when submitted.<br>
                    Some smartphones recognize the email type, and add &quot;.com&quot; to the keyboard to match email input.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;email&quot;&gt;Enter your email:&lt;/label&gt;<br>&nbsp;
                            &lt;input type=&quot;email&quot; id=&quot;email&quot; name=&quot;email&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type File" class="heading-anchor">Input Type File</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;file&quot;&gt;</code>
                    defines a file-select field and a &quot;Browse&quot; button for file uploads.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;myfile&quot;&gt;Select a file:&lt;/label&gt;<br>&nbsp;
                            &lt;input type=&quot;file&quot; id=&quot;myfile&quot; name=&quot;myfile&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type Hidden" class="heading-anchor">Input Type Hidden</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;hidden&quot;&gt;</code>
                    defines a hidden input field (not visible to a user).<br>
                    A hidden field let web developers include data that cannot be seen or
                    modified by users when a form is submitted.<br>
                    A hidden field often stores what database record that needs to be updated
                    when the form is submitted.<br>
                    <strong>Note:</strong> While the value is not displayed to the user in the
                    page's content, it is visible (and can be edited) using any browser's developer
                    tools or &quot;View Source&quot; functionality. Do not use hidden inputs as a form of
                    security!<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First name:&lt;/label&gt;<br>&nbsp;
                            &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input
                            type=&quot;hidden&quot; id=&quot;custId&quot; name=&quot;custId&quot; value=&quot;3487&quot;&gt;<br>&nbsp; &lt;input
                            type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type Month" class="heading-anchor">Input Type Month</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;month&quot;&gt;</code> allows the user to select a month and year.<br>
                    Depending on browser support, a date picker can show up in the input field.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;bdaymonth&quot;&gt;Birthday (month and
                            year):&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;month&quot; id=&quot;bdaymonth&quot; name=&quot;bdaymonth&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type Number" class="heading-anchor">Input Type Number</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;number&quot;&gt;</code> defines a <strong>
                        numeric</strong> input field.<br>
                    You can also set restrictions on what numbers are accepted.<br>
                    The following example displays a numeric input field, where you can enter a value from 1 to 5:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;quantity&quot;&gt;Quantity (between 1 and
                            5):&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;number&quot; id=&quot;quantity&quot; name=&quot;quantity&quot;
                            min=&quot;1&quot; max=&quot;5&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Restrictions" class="heading-anchor">Input Restrictions</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;month&quot;&gt;</code> allows the user to select a month and year.<br>
                    Depending on browser support, a date picker can show up in the input field.<br>
                    Here is a list of some common input restrictions:<br>
                    <table class="ws-table-all notranslate">
                        <tr>
                            <th style="width:20%">Attribute</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>checked</td>
                            <td>Specifies that an input field should be pre-selected when the page loads (for type=&quot;checkbox&quot; or type=&quot;radio&quot;)</td>
                        </tr>
                        <tr>
                            <td>disabled</td>
                            <td>Specifies that an input field should be disabled</td>
                        </tr>
                        <tr>
                            <td>max</td>
                            <td>Specifies the maximum value for an input field</td>
                        </tr>
                        <tr>
                            <td>maxlength</td>
                            <td>Specifies the maximum number of character for an input field</td>
                        </tr>
                        <tr>
                            <td>min</td>
                            <td>Specifies the minimum value for an input field</td>
                        </tr>
                        <tr>
                            <td>pattern</td>
                            <td>Specifies a regular expression to check the input value against</td>
                        </tr>
                        <tr>
                            <td>readonly</td>
                            <td>Specifies that an input field is read only (cannot be changed)</td>
                        </tr>
                        <tr>
                            <td>required</td>
                            <td>Specifies that an input field is required (must be filled out)</td>
                        </tr>
                        <tr>
                            <td>size</td>
                            <td>Specifies the width (in characters) of an input field</td>
                        </tr>
                        <tr>
                            <td>step</td>
                            <td>Specifies the legal number intervals for an input field</td>
                        </tr>
                        <tr>
                            <td>value</td>
                            <td>Specifies the default value for an input field</td>
                        </tr>
                    </table><br>
                    The following example displays a numeric input field, where you can enter a
                    value from 0 to 100, in steps of 10. The default value is 30:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;quantity&quot;&gt;Quantity:&lt;/label&gt;<br>&nbsp; &lt;input
                            type=&quot;number&quot; id=&quot;quantity&quot; name=&quot;quantity&quot; min=&quot;0&quot; max=&quot;100&quot; step=&quot;10&quot;
                            value=&quot;30&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type Range" class="heading-anchor">Input Type Range</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;range&quot;&gt;</code> defines a control for entering a number whose exact value is not important (like a slider control). Default
                    range is 0 to 100. However, you can set restrictions on what
                    numbers are accepted with the <code class="w3-codespan">min</code>, <code class="w3-codespan">max</code>, and <code class="w3-codespan">step</code> attributes:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;vol&quot;&gt;Volume (between 0 and 50):&lt;/label&gt;<br>&nbsp;
                            &lt;input type=&quot;range&quot; id=&quot;vol&quot; name=&quot;vol&quot; min=&quot;0&quot; max=&quot;50&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type Search" class="heading-anchor">Input Type Search</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;search&quot;&gt;</code> is used for search fields (a search field behaves like a regular text field).<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;gsearch&quot;&gt;Search Google:&lt;/label&gt;<br>&nbsp;
                            &lt;input type=&quot;search&quot; id=&quot;gsearch&quot; name=&quot;gsearch&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type Tel" class="heading-anchor">Input Type Tel</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;tel&quot;&gt;</code> is used for input fields that should contain a telephone number.<br>
                    The following example displays a numeric input field, where you can enter a value from 1 to 5:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;phone&quot;&gt;Enter your phone number:&lt;/label&gt;<br>&nbsp;
                            &lt;input type=&quot;tel&quot; id=&quot;phone&quot; name=&quot;phone&quot;
                            pattern=&quot;[0-9]{3}-[0-9]{2}-[0-9]{3}&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type Time" class="heading-anchor">Input Type Time</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;time&quot;&gt;</code> allows the user to select a time (no time zone).<br>
                    Depending on browser support, a time picker can show up in the input field.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;appt&quot;&gt;Select a time:&lt;/label&gt;<br>&nbsp;
                            &lt;input type=&quot;time&quot; id=&quot;appt&quot; name=&quot;appt&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type Url" class="heading-anchor">Input Type Url</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;url&quot;&gt;</code> is used for input fields that should contain a URL address.<br>
                    Depending on browser support, the url field can be automatically validated
                    when submitted.<br>
                    Some smartphones recognize the url type, and adds &quot;.com&quot; to the keyboard to match
                    url input.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;homepage&quot;&gt;Add your homepage:&lt;/label&gt;<br>&nbsp;
                            &lt;input type=&quot;url&quot; id=&quot;homepage&quot; name=&quot;homepage&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="Input Type Week" class="heading-anchor">Input Type Week</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;week&quot;&gt;</code> allows the user to select a week and year.<br>
                    Depending on browser support, a date picker can show up in the input field.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;label for=&quot;week&quot;&gt;Select a week:&lt;/label&gt;<br>&nbsp;
                            &lt;input type=&quot;week&quot; id=&quot;week&quot; name=&quot;week&quot;&gt;<br>
                            &lt;/form&gt;
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