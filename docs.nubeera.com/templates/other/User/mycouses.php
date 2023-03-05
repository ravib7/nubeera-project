<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NubeEra - Training</title>
  <link rel="stylesheet" href="../lib/bootstrap-grid.processed.css">
  <link rel="icon" type="image/png" href="../img/logo.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.2/tailwind.min.css'>
  <link rel="stylesheet" href="../styles/UserStyle/style.main.css">
  <link rel="stylesheet" href="../styles/style.nav1.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <!-- ======================================================================================== -->
</head>

<body class="ru home">
  <!--<div id="preloader"></div>-->

  <main class="site-content">
    <!-- ===============================NAVIGATION BAR=========================================== -->
  <?php require '../templates/user_outer.php'; ?>
    <!-- ================================DISPLAY=============================================== -->

    <section id="works">

      <div class="container">
        <div class="col-md-12">
          <br><br><br><br><br>
          <center><h2>My Courses</h2></center>
          <br><br>
        </div>


      <div class="col-sm-12">
        <div class="row">


          <!-- Iterate from here  -->
          <div class="col-4 bg-gray-100 p-8 relative mt-8 pt-20 rounded-lg">

              <img src="../img/MainPage/logo1.png" alt="Badge Day 1" class="w-3/5 mx-auto badge-filter transition">
              <h4 class="text-black-600 text-sm xl:text-normal mt-6 text-center">Course name</h4>
              <p class="text-gray-600 text-sm xl:text-normal text-center px-4">Course Description</p>

              <div class="h-16 bg-gray-400 flex flex-col justify-center text-center rounded mt-4 hover:bg-green-400 transition cursor-pointer">
                  <div class="w-full">
                      <span class="text-lg uppercase font-medium text-white inline-block"><a style="text-decoration:none; color:white;" href="user.php">Go to Course</a></span>
                  </div>
              </div>
          </div>
         <!-- End -->






        </div>
      </div>



     <!-- ======================================================================================== -->
  </main>



  <!-- ==================================================Script Section============================================== -->

  <script  src="../js/dashboard.js"></script>

  <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <!-- ======================================================================================================== -->

  <script src="../js/navmenu.js"></script>
  <!-- ======================================================================================================== -->
</body>
</html>
