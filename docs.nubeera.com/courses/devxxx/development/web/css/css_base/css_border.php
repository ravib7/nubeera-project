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
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Borders</h2>
        <ol class="breadcrumb mx-5 mt-3 px-0">
        <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
        </ol>
        <div class="px-5 pb-5 pt-0 body-text">
          <!-- <content> -->
          <hr>The CSS border properties allow you to specify the style, width, and color of an element's border.
          <hr>

          <div class="container" style="border:1px solid black;margin:2px">
            <p>I have borders on all sides.</p>
          </div>
          <br>
          <div class="container" style="border:1px solid red;margin:2px">
            <p>I have a red bottom border.</p>
          </div>
          <br>
          <div class="container" style="border:1px solid black;margin:2px;border-radius:5px">
            <p>I have rounded borders.</p>
          </div>
          <br>
          <div class="container" style="border-left:5px solid blue;background-color:#D6EEEE;">
            <p>I have a blue left border.</p>
          </div>
          <hr>

          <h2>CSS Border Style</h2>
          The <code class="w3-codespan" class="w3-codespan">border-style</code> property specifies what kind of border to display.<br>
          The following values are allowed:<br>
          <ul>
            <li><code class="w3-codespan" class="w3-codespan">dotted</code> - Defines a dotted border</li>
            <li><code class="w3-codespan" class="w3-codespan">dashed</code> - Defines a dashed border</li>
            <li><code class="w3-codespan" class="w3-codespan">solid</code> - Defines a solid border</li>
            <li><code class="w3-codespan" class="w3-codespan">double</code> - Defines a double border</li>
            <li><code class="w3-codespan" class="w3-codespan">groove</code> - Defines a 3D grooved border. The effect depends on the border-color value</li>
            <li><code class="w3-codespan" class="w3-codespan">ridge</code> - Defines a 3D ridged border. The effect depends on the border-color value</li>
            <li><code class="w3-codespan" class="w3-codespan">inset</code> - Defines a 3D inset border. The effect depends on the border-color value</li>
            <li><code class="w3-codespan" class="w3-codespan">outset</code> - Defines a 3D outset border. The effect depends on the border-color value</li>
            <li><code class="w3-codespan" class="w3-codespan">none</code> - Defines no border</li>
            <li><code class="w3-codespan" class="w3-codespan">hidden</code> - Defines a hidden border</li>
          </ul>
          The <code class="w3-codespan" class="w3-codespan">border-style</code> property can have from one to four values (for
          the top border, right border, bottom border, and the left border).<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            Demonstration of the different border styles:
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              p.dotted {border-style: dotted;}<br>p.dashed
              {border-style: dashed;}<br>p.solid {border-style: solid;}<br>p.double
              {border-style: double;}<br>p.groove {border-style: groove;}<br>p.ridge
              {border-style: ridge;}<br>p.inset {border-style: inset;}<br>p.outset
              {border-style: outset;}<br>p.none {border-style: none;}<br>p.hidden {border-style: hidden;}<br>
              p.mix {border-style: dotted dashed solid double;}
            </div>
            Result:<br>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              <p style="border-style: dotted;padding:2px 4px;">A dotted border.</p><br>
              <p style="border-style: dashed;padding:2px 4px;">A dashed border.</p><br>
              <p style="border-style: solid;padding:2px 4px;">A solid border.</p><br>
              <p style="border-style: double;padding:2px 4px;">A double border.</p><br>
              <p style="border-style: groove;padding:2px 4px;">A groove border. The effect depends on the border-color value.</p><br>
              <p style="border-style: ridge;padding:2px 4px;">A ridge border. The effect depends on the border-color value.</p><br>
              <p style="border-style: inset;padding:2px 4px;">An inset border. The effect depends on the border-color value.</p><br>
              <p style="border-style: outset;padding:2px 4px;">An outset border. The effect depends on the border-color value.</p><br>
              <p style="border-style: none;padding:2px 4px;">No border.</p><br>
              <p style="border-style: hidden;padding:2px 4px;">A hidden border.</p><br>
              <p style="border-style: dotted dashed solid double;padding:2px 4px;">A mixed border.</p><br>
            </div>
          </div>
          <hr>


          <h2>CSS Border Width</h2>
          The <code class="w3-codespan" class="w3-codespan">border-width</code> property specifies the width of the four borders.<br>
          The width can be set as a specific size (in px, pt, cm, em, etc) or by using
          one of the three pre-defined values: thin, medium, or thick:<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            Demonstration of the different border widths:
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              p.one
              {<br>
              &nbsp;
              border-style: solid;<br>
              &nbsp;
              border-width: 5px;<br>
              }<br><br>
              p.two
              {<br>
              &nbsp;
              border-style: solid;<br>
              &nbsp;&nbsp;border-width: medium;<br>
              }<br><br>p.three
              {<br>
              &nbsp;
              border-style: dotted;<br>
              &nbsp;&nbsp;border-width: 2px;<br>
              }
              <br><br>p.four
              {<br>
              &nbsp;
              border-style: dotted;<br>
              &nbsp;&nbsp;border-width: thick;<br>
              }
            </div>
            Result:<br>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              <div style="border:5px solid black;padding:8px;margin-top:8px;margin-bottom:16px">5px border-width</div><br>

              <div style="border:medium solid black;padding:8px;margin-top:8px;margin-bottom:16px">medium border-width</div><br>


              <div style="border:2px dotted black;padding:8px;margin-top:8px;margin-bottom:16px">2px border-width</div><br>

              <div style="border:thick dotted black;padding:8px;margin-top:8px;margin-bottom:8px">thick border-width</div><br>
            </div>
          </div>
          <hr>

          <h2>CSS Border Color</h2>
          The <code class="w3-codespan" class="w3-codespan">border-color</code> property is used to set the color of the four borders.<br>
          The color can be set by:<br>
          <ul>
            <li>name - specify a color name, like &quot;red&quot;</li>
            <li>HEX - specify a HEX value, like &quot;#ff0000&quot;</li>
            <li>RGB - specify a RGB value, like &quot;rgb(255,0,0)&quot;</li>
            <li>HSL - specify a HSL value, like &quot;hsl(0, 100%, 50%)&quot;</li>
            <li>transparent</li>
          </ul><br>
          <strong>Note:</strong> If <code class="w3-codespan" class="w3-codespan">border-color</code> is not set, it inherits the color of the element.<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            Demonstration of the different border colors:
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              p.one
              {<br>
              &nbsp;
              border-style: solid;<br>
              &nbsp;
              border-color: red;<br>
              }<br><br>
              p.two
              {<br>
              &nbsp;
              border-style: solid;<br>
              &nbsp;&nbsp;border-color: green;<br>
              }<br><br>p.three {<br>&nbsp;&nbsp;border-style: dotted;<br>&nbsp;&nbsp;border-color:
              blue;<br>}
            </div>
            Result:<br>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              <div style="border-style: solid;border-color: red;padding:8px;margin-top:8px;margin-bottom:16px">Red border</div><br>
              <div style="border-style: solid;border-color: green;padding:8px;margin-top:8px;margin-bottom:16px">Green border</div><br>
              <div style="border-style: dotted;border-color: blue;padding:8px;margin-top:8px;margin-bottom:8px">Blue border</div><br>
            </div>
          </div>
          <hr>

          <h2>CSS Border Sides</h2>
          In CSS, there are also properties for specifying each of the borders (top, right, bottom, and left):<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              p
              {<br>
              &nbsp;
              border-top-style: dotted;<br>
              &nbsp;
              border-right-style: solid;<br>
              &nbsp;&nbsp;border-bottom-style: dotted;<br>
              &nbsp;&nbsp;border-left-style: solid;<br>
              }
            </div>
            Result:<br>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              <div style="border-style: dotted solid;padding:8px;margin:8px 0">Different Border Styles</div>
            </div>
          </div><br>
          The example above gives the same result as this:<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              p {<br>&nbsp;
              border-style: dotted solid;<br>}
            </div>
          </div><br>
          So, here is how it works:<br>
          If the <code class="w3-codespan" class="w3-codespan">border-style</code> property has four values:<br>
          <ul>
            <li><b>border-style: dotted solid double dashed; </b>
              <ul>
                <li>top border is dotted</li>
                <li>right border is solid</li>
                <li>bottom border is double</li>
                <li>left border is dashed</li>
              </ul>
            </li>
          </ul><br>
          If the <code class="w3-codespan" class="w3-codespan">border-style</code> property has three values:<br>
          <ul>
            <li><b>border-style: dotted solid double;</b>
              <ul>
                <li>top border is dotted</li>
                <li>right and left borders are solid</li>
                <li>bottom border is double</li>
              </ul>
            </li>
          </ul><br>
          If the <code class="w3-codespan" class="w3-codespan">border-style</code> property has two values:<br>
          <ul>
            <li><b>border-style: dotted solid;</b>
              <ul>
                <li>top and bottom borders are dotted</li>
                <li>right and left borders are solid</li>
              </ul>
            </li>
          </ul><br>
          If the <code class="w3-codespan" class="w3-codespan">border-style</code> property has one value:<br>
          <ul>
            <li><b>border-style: dotted;</b>
              <ul>
                <li>all four borders are dotted</li>
              </ul>
            </li>
          </ul>
          <hr>

          <h2>CSS Rounded Borders</h2>
          The <code class="w3-codespan" class="w3-codespan">border-radius</code> property is used to add rounded borders to an element:<br>
          <p style="border: 2px solid red;padding:5px;">Normal border</p><br>
          <p style="border: 2px solid red;border-radius: 5px;padding:5px;">Round border</p><br>
          <p style="border: 2px solid red;border-radius: 8px;padding:5px;">Rounder border</p><br>
          <p style="border: 2px solid red;border-radius: 12px;padding:5px;">Roundest border</p><br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              p {<br>&nbsp;&nbsp;border: 2px solid red;<br>&nbsp;&nbsp;border-radius: 5px;<br>}
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