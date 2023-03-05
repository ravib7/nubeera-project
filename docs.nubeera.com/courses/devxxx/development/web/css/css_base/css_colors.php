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
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Colors</h2>
        <ol class="breadcrumb mx-5 mt-3 px-0">
        <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
        </ol>
        <div class="px-5 pb-5 pt-0 body-text">
          <!-- <content> -->
          <hr>Colors are specified using predefined color names, or RGB, HEX, HSL, RGBA, HSLA values.
          <hr>

          <h2>CSS Color Names</h2>
          In CSS, a color can be specified by using a predefined color name:<br>
          <div style="margin:0 -16px;line-height:80px;color:white;text-align:center">
            <div style="float:left;width:200px;margin:10px 10px 10px 10px">
              <div style="background-color:tomato;">Tomato</div>
            </div>
            <div style="float:left;width:200px;margin:10px 10px 10px 10px">
              <div style="background-color:orange;">Orange</div>
            </div>
            <div style="float:left;width:200px;margin:10px 10px 10px 10px">
              <div style="background-color:dodgerblue;">DodgerBlue</div>
            </div>
            <div style="float:left;width:200px;margin:10px 10px 10px 10px">
              <div style="background-color:mediumseagreen;">MediumSeaGreen</div>
            </div>
            <div style="float:left;width:200px;margin:10px 10px 10px 10px">
              <div style="background-color:gray;">Gray</div>
            </div>
            <div style="float:left;width:200px;margin:10px 10px 10px 10px">
              <div style="background-color:slateblue;">SlateBlue</div>
            </div>
            <div style="float:left;width:200px;margin:10px 10px 10px 10px">
              <div style="background-color:violet;">Violet</div>
            </div>
            <div style="float:left;width:200px;margin:10px 10px 10px 10px">
              <div style="background-color:lightgray;color:#444444">LightGray</div>
            </div>
          </div><br><br>

          <h2 style="clear:left">
            <hr><br>CSS Background Color
          </h2>
          You can set the background color for HTML elements:<br>
          <div style="background-color:dodgerblue; text-align:center;color:white;font-size:24px;">Hello World</div>
          <br>
          <div class="w3-container" style="background-color:tomato;color:white;"><br>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br><br>
          </div><br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              &lt;h1 style=&quot;background-color:DodgerBlue;&quot;&gt;Hello World&lt;/h1&gt;<br>&lt;p style=&quot;background-color:Tomato;&quot;&gt;Lorem
              ipsum...&lt;/p&gt;
            </div>
          </div>
          <hr>


          <h2>CSS Text Color</h2>
          You can set the color of text:
          <h3 style="color:tomato">Hello World</h3>
          <p style="color:dodgerblue">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
          <p style="color:mediumseagreen">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              &lt;h1 style=&quot;color:Tomato;&quot;&gt;Hello
              World&lt;/h1&gt;<br>&lt;p style=&quot;color:DodgerBlue;&quot;&gt;Lorem
              ipsum...&lt;/p&gt;<br>&lt;p style=&quot;color:MediumSeaGreen;&quot;&gt;Ut wisi
              enim...&lt;/p&gt;
            </div>
          </div>
          <hr>

          <h2>CSS Border Color</h2>
          You can set the color of borders:
          <h2 style="border: 2px solid Tomato;">Hello World</h2>
          <h2 style="border: 2px solid DodgerBlue;">Hello World</h2>
          <h2 style="border: 2px solid Violet;">Hello World</h2>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              &lt;h1 style=&quot;border:2px
              solid Tomato;&quot;&gt;Hello
              World&lt;/h1&gt;<br>&lt;h1 style=&quot;border:2px
              solid DodgerBlue;&quot;&gt;Hello
              World&lt;/h1&gt;<br>&lt;h1 style=&quot;border:2px
              solid Violet;&quot;&gt;Hello
              World&lt;/h1&gt;
            </div>
          </div>
          <hr>

          <h2>CSS Color Values</h2>
          In CSS, colors can also be specified using RGB values, HEX values, HSL values, RGBA values, and HSLA values:<br>
          Same as color name "Tomato":<br>
          <div class="w3-center" style="line-height:60px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace;text-align:center">
            <div style="background-color:rgb(255, 99, 71);margin:10px 0;">rgb(255, 99, 71)</div>
            <div style="background-color:#ff6347;margin:10px 0;">#ff6347</div>
            <div style="background-color:hsl(9, 100%, 64%);margin:10px 0;">hsl(9, 100%, 64%)</div>
          </div>
          Same as color name "Tomato", but 50% transparent:<br>
          <div class="w3-center" style="line-height:60px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace;text-align:center">
            <div style="background-color:rgba(255, 99, 71, 0.5);margin:10px 0;">rgba(255, 99, 71, 0.5)</div>
            <div style="background-color:hsla(9, 100%, 64%, 0.5);margin:10px 0;">hsla(9, 100%, 64%, 0.5)</div>
          </div>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              &lt;h1 style=&quot;background-color:rgb(255,
              99, 71);&quot;&gt;...&lt;/h1&gt;<br>&lt;h1 style=&quot;background-color:#ff6347;&quot;&gt;...&lt;/h1&gt;<br>&lt;h1 style=&quot;background-color:hsl(9,
              100%, 64%);&quot;&gt;...&lt;/h1&gt;<br><br>&lt;h1 style=&quot;background-color:rgba(255,
              99, 71, 0.5);&quot;&gt;...&lt;/h1&gt;<br>&lt;h1 style=&quot;background-color:hsla(9,
              100%, 64%, 0.5);&quot;&gt;...&lt;/h1&gt;
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