<!DOCTYPE html>
<html lang="en">

<head>
   <title>NubeEra AWS CloudFormation</title>

   <!-- Meta -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="NubeEra AWS CloudFormation">

   <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

   <link id="theme-style" rel="stylesheet" href="../../../../../../assets/css/theme.css">
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
            <strong class="px-2" style="font-size: 1.125rem;">AWS CloudFormation</strong><br><br>
            <ul>
               <li><a href="index.php">Get started</a></li>
               <li><a href="AWS_CloudFormation.php">What is AWS CloudFormation?</a></li>
               <li><a href="AWS_CloudFormation_concepts.php">AWS CloudFormation concepts</a></li>
               <li><a href="How_does_AWS_CloudFormation_work.php">How does AWS CloudFormation work?</a></li>
               <li><a href="Learn_template_basics.php">Learn template basics</a></li>
               <li><a href="Updating_a_stack.php">Walkthrough: Updating a stack</a></li>
            </ul>
         </div>
      </div>

   </div>
   <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

   <div class="content-box" id="content-box">
      <div class="body-content">
         <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">What is AWS CloudFormation?</h1>
         <ol class="breadcrumb mx-5 mt-3 px-0">
            <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
            <li class="breadcrumb-item"><a href="../../../">AWS</a></li>
            <li class="breadcrumb-item"><a href="../../">Contents</a></li>
            <li class="breadcrumb-item active">AWS CloudFormation</li>
         </ol>
         <div class="px-5 pb-5 pt-0 body-text">

            <h3> On this page </h3>

            <ul class="awsui-side-navigation__list awsui-side-navigation__list--root">
               <li><span><a class="awsui-side-navigation__link awsui-side-navigation__link--active" href="#welcome-simplify-infrastructure-management" aria-current="page">Simplify
                        infrastructure management</a></span>
               </li>
               <li><span><a class="awsui-side-navigation__link" href="#welcome-quickly-replicate-your-infrastructure">Quickly
                        replicate your infrastructure</a></span></li>
               <li><span><a class="awsui-side-navigation__link" href="#welcome-easily-control-and-trach-changes">Easily
                        control and
                        track changes to your infrastructure</a></span></li>
               </li>
            </ul>

            AWS CloudFormation is a service that helps you model and set up your AWS resources so that you can
            spend less time managing those resources and more time focusing on your applications that
            run in AWS. You create a template that describes all the AWS resources that you want
            (like Amazon EC2 instances or Amazon RDS DB instances), and CloudFormation takes care of
            provisioning and
            configuring those resources for you. You don't need to individually create and configure
            AWS resources and figure out what's dependent on what; CloudFormation handles that. The
            following scenarios demonstrate how CloudFormation can help.
            <h3 id="welcome-simplify-infrastructure-management">Simplify infrastructure management</h3>

            For a scalable web application that also includes a backend database, you might use an
            Auto Scaling group, an Elastic Load Balancing load balancer, and an Amazon Relational Database
            Service database instance. You might use
            each individual service to provision these resources and after you create the resources,
            you would have to configure them to work together. All these tasks can add complexity
            and time before you even get your application up and running. <br><br>
            Instead, you can create a CloudFormation template or modify an existing one. A
            <em>template</em> describes all your resources and their properties.
            When you use that template to create a CloudFormation stack, CloudFormation provisions the Auto
            Scaling
            group, load balancer, and database for you. After the stack has been successfully
            created, your AWS resources are up and running. You can delete the stack just as
            easily, which deletes all the resources in the stack. By using CloudFormation, you easily
            manage a collection of resources as a single unit.

            <h3 id="welcome-quickly-replicate-your-infrastructure">Quickly replicate your infrastructure</h3>

            If your application requires additional availability, you might replicate it in
            multiple regions so that if one region becomes unavailable, your users can still use
            your application in other regions. The challenge in replicating your application is that
            it also requires you to replicate your resources. Not only do you need to record all the
            resources that your application requires, but you must also provision and configure
            those resources in each region. <br><br>
            Reuse your CloudFormation template to create your resources in a consistent and repeatable
            manner. To reuse your template, describe your resources once and then provision the same
            resources over and over in multiple regions.

            <h3 id="welcome-easily-control-and-trach-changes">Easily control and track changes to your
               infrastructure</h3>

            In some cases, you might have underlying resources that you want to upgrade
            incrementally. For example, you might change to a higher performing instance type in
            your Auto Scaling launch configuration so that you can reduce the maximum number of instances in
            your Auto Scaling group. If problems occur after you complete the update, you might need to roll
            back your infrastructure to the original settings. To do this manually, you not only
            have to remember which resources were changed, you also have to know what the original
            settings were. <br><br>
            When you provision your infrastructure with CloudFormation, the CloudFormation template
            describes exactly what resources are provisioned and their settings. Because these
            templates are text files, you simply track differences in your templates to track
            changes to your infrastructure, similar to the way developers control revisions to
            source code. For example, you can use a version control system with your templates so
            that you know exactly what changes were made, who made them, and when. If at any point
            you need to reverse changes to your infrastructure, you can use a previous version of
            your template.

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