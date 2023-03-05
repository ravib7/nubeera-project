<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Basic CSS</title>

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Basic CSS</strong><br><br>
                <ul>
                    <li><a href="index.php">Introduction</a></li>
                    <li><a href="css_syntax.php">Syntax</a></li>
                    <li><a href="css_selectors.php">Selectors</a></li>
                    <li><a href="css_howto.php">How to</a></li>
                    <li><a href="css_comments.php">Comments</a></li>
                    <li><a href="css_colors.php">Colors</a></li>
                    <li><a href="css_background.php">Background</a></li>
                    <li><a href="css_background_attachment.php">Background attachment </a></li>
                    <li><a href="css_background_image.php">Background image </a></li>
                    <li><a href="css_border.php">Border</a></li>
                    <li><a href="css_margin.php">Margin</a></li>
                    <li><a href="css_padding.php">Padding</a></li>
                    <li><a href="css_dimension.php">Hight&Width</a></li>
                    <li><a href="css_boxmodel.php">Boxmodel</a></li>
                    <li><a href="css_outline.php">Outline</a></li>
                    <li><a href="css_text.php">Text</a></li>
                    <li><a href="css_font.php">Font</a></li>
                    <li><a href="css_icons.php">Icons</a></li>
                    <li><a href="css_link.php">Link</a></li>
                    <li><a href="css_list.php">List</a></li>
                    <li><a href="css_table.php">Table</a></li>
                    <li><a href="css_display_visibility.php">Display visibility</a></li>
                    <li><a href="css_max-width.php">Max-Width</a></li>
                    <li><a href="css_positioning.php">Positioning</a></li>
                    <li><a href="css_z-index.php">Z-index</a></li>
                    <li><a href="css_overflow.php">Overflow</a></li>
                    <li><a href="css_float.php">Float</a></li>
                    <li><a href="css_inline-block.php">Inline-block</a></li>
                   
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Icons</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>Icons can easily be added to your HTML page, by using an icon library.<br><br><br>
                    <div class="w3-row w3-center">
                        <div style="float:left;margin-right:75px">
                            <i class="fa fa-cloud" style="font-size:36px;"></i>
                            <i class="fa fa-cloud" style="font-size:60px;"></i>
                            <i class="fa fa-cloud w3-text-red" style="font-size:72px;color:red;"></i>
                        </div>

                        <div style="float:left;margin-right:75px">
                            <i class="fa fa-car" style="font-size:36px"></i>
                            <i class="fa fa-car w3-text-dark-grey" style="font-size:60px;color:dark-grey;"></i>
                            <i class="fa fa-car w3-text-grey" style="font-size:72px;"></i>
                        </div>

                        <div style="float:left">
                            <i class="fa fa-thumbs-o-up" style="font-size:36px;"></i>
                            <i class="fa fa-thumbs-o-up" style="font-size:60px;"></i>
                            <i class="fa fa-thumbs-o-up w3-text-indigo" style="font-size:72px;color:indigo;"></i>
                        </div>
                    </div><br>
                    <div style="clear:left;"></div>
                    <hr>

                    <h2>How To Add Icons</h2>
                    The simplest way to add an icon to your HTML page, is with an icon library,
                    such as Font Awesome.<br>
                    Add the name of the specified icon class to any inline HTML element (like <code class="w3-codespan">&lt;i&gt;</code> or
                    <code class="w3-codespan">&lt;span&gt;</code>).<br>
                    All the icons in the icon libraries below, are scalable vectors that can
                    be customized with CSS (size, color, shadow, etc.)
                    <hr>


                    <h2>Font Awesome Icons</h2>
                    To use the Font Awesome icons, go to <a href="https://fontawesome.com" target="_blank">
                        fontawesome.com</a>, sign in, and get a code to add in the <code class="w3-codespan">&lt;head&gt;</code> section of your HTML page:<br>
                    <code class="w3-codespan">&lt;script src=&quot;https://kit.fontawesome.com/<em>yourcode</em>.js&quot; crossorigin="anonymous"&gt;&lt;/script&gt;</code><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>
                            &lt;script src=&quot;https://kit.fontawesome.com/a076d05399.js&quot; crossorigin="anonymous"&gt;&lt;/script&gt;<br>
                            &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;i class="fas fa-cloud"&gt;&lt;/i&gt;<br>&lt;i class="fas fa-heart"&gt;&lt;/i&gt;<br>&lt;i class="fas fa-car"&gt;&lt;/i&gt;<br>&lt;i class="fas fa-file"&gt;&lt;/i&gt;<br>
                            &lt;i class="fas fa-bars"&gt;&lt;/i&gt;<br><br>
                            &lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div>
                    <hr>

                    <h2>Bootstrap Icons</h2>
                    To use the Bootstrap glyphicons, add the following line inside the <code class="w3-codespan">&lt;head&gt;</code> section of your HTML page:<br>
                    <code class="w3-codespan">&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"&gt;</code><br>
                    <strong>Note:</strong> No downloading or installation is required!<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>
                            &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>
                            <br>&lt;i class="glyphicon glyphicon-cloud"&gt;&lt;/i&gt;<br>&lt;i class="glyphicon glyphicon-remove"&gt;&lt;/i&gt;<br>&lt;i class="glyphicon glyphicon-user"&gt;&lt;/i&gt;<br>&lt;i class="glyphicon glyphicon-envelope"&gt;&lt;/i&gt;<br>&lt;i class="glyphicon glyphicon-thumbs-up"&gt;&lt;/i&gt;<br><br>
                            &lt;/body&gt;<br>&lt;/html&gt;
                        </div>
                    </div>
                    <hr>

                    <h2>Google Icons</h2>
                    To use the Google icons, add the following line inside the <code class="w3-codespan">&lt;head&gt;</code> section of your HTML page:<br>
                    <code class="w3-codespan">&lt;link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"&gt;</code><br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>
                            &lt;link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>
                            <br>&lt;i class="material-icons"&gt;cloud&lt;/i&gt;<br>&lt;i class="material-icons"&gt;favorite&lt;/i&gt;<br>&lt;i class="material-icons"&gt;attachment&lt;/i&gt;<br>&lt;i class="material-icons"&gt;computer&lt;/i&gt;<br>&lt;i class="material-icons"&gt;traffic&lt;/i&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
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