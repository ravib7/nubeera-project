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
    .w3-boxmodel {
      font-family: "Lato", sans-serif;
    }

    .w3-boxmodel {
      margin: 30px 0;
    }

    .w3-boxmodel .margin {
      background: #f1f1f1;
      padding: 45px;
      width: 100%;
      height: 100%;
      position: relative;
      border: 2px dashed #bbb;
      transition: all .25s ease-in-out;
    }

    .w3-boxmodel .margin:before {
      content: "Margin";
      font-size: 1.4em;
      position: absolute;
      left: 0;
      top: 1.8%;
      width: 100%;
      text-align: center;
    }

    .w3-boxmodel .border {
      padding: 45px;
      width: 100%;
      height: 100%;
      position: relative;
    }

    .w3-boxmodel .border:before {
      content: "Border";
      font-size: 1.4em;
      color: black;
      position: absolute;
      left: 0;
      top: 2.5%;
      width: 100%;
      text-align: center;
    }

    .w3-boxmodel .padding {
      color: black;
      padding: 45px;
      width: 100%;
      height: 100%;
      position: relative;
      background: #f1f1f1;
    }

    .w3-boxmodel .padding:before {
      content: "Padding";
      font-size: 1.4em;
      position: absolute;
      left: 0.5%;
      top: 3.7%;
      width: 100%;
      text-align: center;
    }

    .w3-boxmodel .content {
      padding: 20px;
      width: 100%;
      height: 100%;
      position: relative;
      background: white;
      border: 2px dashed #bbb;
    }

    .w3-boxmodel .content:before {
      content: "Content";
      font-size: 1.4em;
      display: block;
      text-align: center;
      line-height: 3.5;
    }

    @media screen and (max-width: 450px) {
      .w3-boxmodel .margin {
        padding: 35px;
      }

      .w3-boxmodel .margin:before {
        font-size: 1em;
        left: 0;
        top: 2.5%;
      }

      .w3-boxmodel .border {
        padding: 35px;
      }

      .w3-boxmodel .border:before {
        font-size: 1em;
        left: 0;
        top: 3.2%;
      }

      .w3-boxmodel .padding {
        padding: 35px;
      }

      .w3-boxmodel .padding:before {
        font-size: 1em;
        left: 0.5%;
        top: 4.5%;
      }

      .w3-boxmodel .content {
        padding: 20px;
      }

      .w3-boxmodel .content:before {
        font-size: 1em;
      }
    }

    @media screen and (max-width: 360px) {
      .w3-boxmodel .margin {
        padding: 25px;
      }

      .w3-boxmodel .margin:before {
        font-size: 0.9em;
        left: 0;
        top: 1.5%;
      }

      .w3-boxmodel .border {
        padding: 25px;
      }

      .w3-boxmodel .border:before {
        font-size: 0.9em;
        left: 0;
        top: 2.2%;
      }

      .w3-boxmodel .padding {
        padding: 25px;
      }

      .w3-boxmodel .padding:before {
        font-size: 0.9em;
        left: 0.5%;
        top: 2.5%;
      }

      .w3-boxmodel .content {
        padding: 15px;
      }

      .w3-boxmodel .content:before {
        font-size: 0.9em;
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
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Outline</h2>
        <ol class="breadcrumb mx-5 mt-3 px-0">
        <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
        </ol>
        <div class="px-5 pb-5 pt-0 body-text">
          <!-- <content> -->
          <hr>An outline is a line drawn outside the element's border.<br><br>
          <div style="width:98%;border:2px solid black;outline:#04AA6D solid 10px;padding:20px;margin:auto;text-align:center">
            This element has a black border and a green outline with a width of 10px.
          </div><br>
          <hr>

          <h2>CSS Outline</h2>
          An outline is a line that is drawn around elements, OUTSIDE the borders, to make the element "stand out".<br>
          <div class="w3-boxmodel">
            <div class="outline w3-theme" style="background-color:green">
              <div class="border">
                <div class="content"></div>
              </div>
            </div>
          </div><br>
          CSS has the following outline properties:<br>
          <ul>
            <li> <code class="w3-codespan">outline-style</code></li>
            <li> <code class="w3-codespan">outline-color</code></li>
            <li> <code class="w3-codespan">outline-width</code></li>
            <li> <code class="w3-codespan">outline-offset</code></li>
            <li> <code class="w3-codespan">outline</code></li>
          </ul><br>
          <div class="notes">
            <b>Note:</b> Outline differs from borders Unlike border, the outline is
            drawn outside the element's border, and may overlap other content. Also, the outline is
            NOT a part of the element's dimensions; the element's total width and height
            is not affected by the width of the outline.
          </div>
          <hr>


          <h2>CSS Outline Style</h2>
          The <code class="w3-codespan">outline-style</code> property specifies the style of the outline,
          and can have one of the following values:<br>
          <ul>
            <li><code class="w3-codespan">dotted</code> - Defines a dotted outline</li>
            <li><code class="w3-codespan">dashed</code> - Defines a dashed outline</li>
            <li><code class="w3-codespan">solid</code> - Defines a solid outline</li>
            <li><code class="w3-codespan">double</code> - Defines a double outline</li>
            <li><code class="w3-codespan">groove</code> - Defines a 3D grooved outline</li>
            <li><code class="w3-codespan">ridge</code> - Defines a 3D ridged outline</li>
            <li><code class="w3-codespan">inset</code> - Defines a 3D inset outline</li>
            <li><code class="w3-codespan">outset</code> - Defines a 3D outset outline</li>
            <li><code class="w3-codespan">none</code> - Defines no outline</li>
            <li><code class="w3-codespan">hidden</code> - Defines a hidden outline</li>
          </ul><br>
          The following example shows the different <code class="w3-codespan">outline-style</code> values:<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            Demonstration of the different outline styles:
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              p.dotted {outline-style: dotted;}<br>
              p.dashed {outline-style: dashed;}<br>p.solid {outline-style: solid;}<br>
              p.double {outline-style: double;}<br>p.groove {outline-style: groove;}<br>
              p.ridge {outline-style: ridge;}<br>p.inset {outline-style: inset;}<br>
              p.outset {outline-style: outset;}
            </div><br>
            Result:
            <br>

            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              <p style="outline-style:dotted;outline-color:red;padding:2px 4px">A dotted outline.</p><br>
              <p style="outline-style:dashed;outline-color:red;padding:2px 4px">A dashed outline.</p><br>
              <p style="outline-style:solid;outline-color:red;padding:2px 4px">A solid outline.</p><br>
              <p style="outline-style:double;outline-color:red;padding:2px 4px">A double outline.</p><br>
              <p style="outline-style:groove;outline-color:red;padding:2px 4px">A groove outline. The effect depends on the outline-color value.</p><br>
              <p style="outline-style:ridge;outline-color:red;padding:2px 4px">A ridge outline. The effect depends on the outline-color value.</p><br>
              <p style="outline-style:inset;outline-color:red;padding:2px 4px">An inset outline. The effect depends on the outline-color value.</p><br>
              <p style="outline-style:outset;outline-color:red;padding:2px 4px">An outset outline. The effect depends on the outline-color value.</p><br>
            </div>
          </div>
          <hr>

          <h2>CSS Outline Width</h2>
          The <code class="w3-codespan">outline-width</code> property specifies the width of the outline,
          and can have one of the following values:<br>
          <ul>
            <li>thin (typically 1px)</li>
            <li>medium (typically 3px)</li>
            <li>thick (typically 5px)</li>
            <li>A specific size (in px, pt, cm, em, etc)</li>
          </ul><br>
          The following example shows some outlines with different widths:
          <p style="border: 1px solid black;outline-style:solid;outline-color:red;outline-width:thin;padding:2px 4px;">A thin outline.</p><br>
          <p style="border: 1px solid black;outline-style:solid;outline-color:red;outline-width:medium;padding:2px 4px;">A medium outline.</p><br>
          <p style="border: 1px solid black;outline-style:solid;outline-color:red;outline-width:thick;padding:2px 4px;">A thick outline.</p><br>
          <p style="border: 1px solid black;outline-style:solid;outline-color:red;outline-width:4px;padding:2px 4px;">A 4px thick outline.</p><br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              p.ex1
              {<br>&nbsp;&nbsp;border: 1px solid black;<br>
              &nbsp;&nbsp;outline-style: solid;<br>&nbsp;&nbsp;outline-color: red;<br>
              &nbsp;
              outline-width: thin;<br>
              }<br><br>p.ex2
              {<br>&nbsp; border: 1px solid black;<br>
              &nbsp;
              outline-style: solid;<br>&nbsp; outline-color: red;<br>
              &nbsp;&nbsp;outline-width: medium;<br>
              }<br><br>p.ex3
              {<br>&nbsp;&nbsp;border: 1px solid black;<br>
              &nbsp;
              outline-style: solid;<br>&nbsp; outline-color: red;<br>
              &nbsp;&nbsp;outline-width: thick;<br>
              }<br><br>
              p.ex4
              {<br>
              &nbsp;&nbsp;border: 1px solid black;<br>
              &nbsp;&nbsp;outline-style: solid;<br>&nbsp; outline-color: red;<br>
              &nbsp;
              outline-width: 4px;<br>
              }
            </div>
          </div>
          <hr>

          <h2>CSS Outline Color</h2>
          The <code class="w3-codespan">outline-color</code> property is used to set the color of the outline.<br>
          The color can be set by:<br>
          <ul>
            <li>name - specify a color name, like &quot;red&quot;</li>
            <li>HEX - specify a hex value, like &quot;#ff0000&quot;</li>
            <li>RGB - specify a RGB value, like &quot;rgb(255,0,0)&quot;</li>
            <li>HSL - specify a HSL value, like "hsl(0, 100%, 50%)"</li>
            <li>invert - performs a color inversion (which ensures that the outline is visible, regardless of color background)</li>
          </ul><br>
          The following example shows some different outlines with different colors. <br>
          Also notice that these elements also have a thin black border inside the outline<br>
          <p style="border: 2px solid black;outline-style:solid;outline-color:red;padding: 2px 4px;">A solid red outline.</p><br>
          <p style="border: 2px solid black;outline-style:dotted;outline-color:blue;padding: 2px 4px;">A dotted blue outline.</p><br>
          <p style="border: 2px solid black;outline-style:outset;outline-color:grey;padding: 2px 4px;">An outset grey outline.</p><br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              p.ex1
              {<br>
              &nbsp; border: 2px solid black;<br>&nbsp;
              outline-style: solid;<br>
              &nbsp;&nbsp;outline-color: red;<br>
              }<br><br>p.ex2
              {<br>
              &nbsp;&nbsp;border: 2px solid black;<br>&nbsp;
              outline-style: dotted;<br>
              &nbsp;
              outline-color: blue;<br>
              }<br><br>p.ex3
              {<br>
              &nbsp;&nbsp;border: 2px solid black;<br>&nbsp;&nbsp;outline-style: outset;<br>
              &nbsp;&nbsp;outline-color: grey;<br>
              }
            </div>
          </div>
          <hr>

          <h2>CSS Outline Offset</h2>
          The <code class="w3-codespan">outline-offset</code> property adds space
          between an outline and the edge/border of an element. The space between an
          element and its outline is transparent.<br>
          The following example specifies an outline 15px outside the border edge:<br>
          <p style="margin:30px;border:1px solid black;outline:1px solid red;outline-offset:15px;">
            This paragraph has an outline 15px outside the border edge.</p>
          <br>
          The following example shows some outlines with different widths:
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              p {<br>&nbsp;&nbsp;margin: 30px;<br>&nbsp; border: 1px solid black;<br>&nbsp; outline:
              1px solid red;<br>&nbsp;
              outline-offset: 15px;<br>}
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