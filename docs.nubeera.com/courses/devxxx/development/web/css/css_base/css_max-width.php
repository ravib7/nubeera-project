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

  <style>
    .btn {
      display: inline-block;
      background-color: #f44336;
      color: #FFFFFF;
      padding: 14px 25px;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      margin-left: 20px;
      opacity: 0.9;
    }

    .btn:hover {
      color: white;
      background-color: red;
      opacity: 1;
    }

    .button {
      background-color: white;
      color: black;
      border: 2px solid #04AA6D;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-left: 20px;
    }

    .button:hover {
      background-color: #059862;
      color: white;
    }

    .txtlink {
      color: green;
      text-decoration: none;
      margin-left: 20px;
      font-size: 16px;
    }

    .txtlink:hover {
      text-decoration: underline;
    }

    .txtlink2:hover {
      color: #059862;
    }

    @media only screen and (max-width: 547px) {
      .btn {
        margin: 0 !important;
      }
    }

    @media only screen and (max-width: 381px) {
      .button {
        margin: 0 !important;
      }
    }

    @media only screen and (max-width: 337px) {
      .button {
        margin: 10px 0 !important;
      }
    }

    p {
      text-align: left;
    }

    #ex4,
    #ex5 {
      .ol {
        background: #ff9999;
        padding: 20px;
      }

      ul {
        background: #3399ff;
        padding: 20px;
      }

      ol li {
        background: #ffe5e5;
        padding: 5px;
        margin-left: 35px;
      }

      ul li {
        background: #cce5ff;
        margin: 5px;
      }
    }
  </style>

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
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Layout - width and max-width</h2>
        <ol class="breadcrumb mx-5 mt-3 px-0">
          <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
          <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
          <li class="breadcrumb-item"><a href="../../../">Web</a></li>
          <li class="breadcrumb-item active">CSS Basics</li>
        </ol>
        <div class="px-5 pb-5 pt-0 body-text">
          <!-- <content> -->
          <hr>
          <h2>Using width, max-width and margin: auto;</h2>
          <p>As mentioned in the previous chapter; a block-level element always takes up the full width available
            (stretches out to the left and right as far as it can).</p>
          <p>Setting the <code class="w3-codespan">width</code> of a block-level element will prevent it from stretching
            out to the edges of its container. Then, you can set the
            margins to auto, to horizontally center the element within its container. The
            element will take up the specified width, and the remaining space will be split
            equally between the two margins:</p>

          <div class="w3-theme-border" style="border-width:3px;border-style:solid;width:500px; margin: auto;">
            This &lt;div&gt; element has a width of 500px, and margin set to auto.</div>
          <br>

          <p><strong>Note:</strong> The problem with the <code class="w3-codespan">&lt;div&gt;</code> above occurs when the browser window is
            smaller than the width of
            the element. The browser then adds a horizontal scrollbar to the page.</p>

          <p>Using <code class="w3-codespan">max-width</code> instead, in this situation, will improve the
            browser's handling of small windows. This is important when making a site usable
            on small devices:</p>

          <div class="w3-theme-border" style="border-width:3px;border-style:solid; max-width:500px; margin: auto;">
            This &lt;div&gt; element has a max-width of 500px, and margin set to auto.</div>
          <br>
          <p><strong>Tip:</strong> Resize the browser window to less than 500px wide, to see the difference between
            the two divs!</p>

          <p>Here is an example of the two divs above:</p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              div.ex1 {<br>&nbsp;&nbsp;width: 500px;<br>&nbsp;&nbsp;margin:
              auto;<br>&nbsp;&nbsp;border: 3px solid #73AD21;<br>}<br>
              <br>div.ex2 {<br>&nbsp; max-width: 500px;<br>&nbsp;
              margin: auto;<br>&nbsp; border: 3px solid #73AD21;<br>}
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