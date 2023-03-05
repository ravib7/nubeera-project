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
         <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">AWS CloudFormation concepts</h1>
         <ol class="breadcrumb mx-5 mt-3 px-0">
            <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
            <li class="breadcrumb-item"><a href="../../../">AWS</a></li>
            <li class="breadcrumb-item"><a href="../../">Contents</a></li>
            <li class="breadcrumb-item active">AWS CloudFormation</li>
         </ol>
         <div class="px-5 pb-5 pt-0 body-text">

            <h3> On this page </h3>
            <ul>
               <li><a href="#cfn-concepts-templates">Templates</a></li>
               <li><a href="#w2ab1b5c15b9">Stacks</a></li>
               <li><a href="#cfn-concepts-change-sets">Change sets</a></li>
            </ul>

            When you use AWS CloudFormation, you work with <em>templates</em> and
            <em>stacks</em>. You create templates to describe your AWS resources and their
            properties. Whenever you create a stack, CloudFormation provisions the resources that are
            described in
            your template.

            <h2 id="cfn-concepts-templates">Templates</h3>

               A CloudFormation template is a JSON or YAML formatted text file. You can save these files
               with
               any
               extension, such as <code>.json</code>, <code>.yaml</code>,
               <code>.template</code>, or <code>.txt</code>. CloudFormation uses these templates as
               blueprints for building your AWS resources. For example, in a template, you can describe an
               Amazon EC2 instance, such as the instance type, the AMI ID, block device mappings, and its
               Amazon EC2
               key pair name. Whenever you create a stack, you also specify a template that CloudFormation
               uses
               to
               create whatever you described in the template. <br><br>
               For example, if you created a stack with the following template, CloudFormation provisions an
               instance with an <code class="code">ami-0ff8a91507f77f867</code> AMI ID, <code class="code">t2.micro</code>
               instance
               type, <code class="code">testkey</code> key pair name, and an Amazon EBS volume.
               <div id="JSON" name="JSON" class="section langfilter">
                  <h3 id="t2-micro-example.json">JSON</h3>
                  <pre class="programlisting"><blockquote class="json hljs"><span>{</span>
  <span class="hljs-attr">"AWSTemplateFormatVersion"</span> : <span class="hljs-string">"2010-09-09"</span>,
  <span class="hljs-attr">"Description"</span> : <span class="hljs-string">"A sample template"</span>,
  <span class="hljs-attr">"Resources"</span> : <span>{</span>
    <span class="hljs-attr">"MyEC2Instance"</span> : <span>{</span>
      <span class="hljs-attr">"Type"</span> : <span class="hljs-string">"AWS::EC2::Instance"</span>,
      <span class="hljs-attr">"Properties"</span> : <span>{</span>
        <span class="hljs-attr">"ImageId"</span> : <span class="hljs-string">"ami-0ff8a91507f77f867"</span>,
        <span class="hljs-attr">"InstanceType"</span> : <span class="hljs-string">"t2.micro"</span>,
        <span class="hljs-attr">"KeyName"</span> : <span class="hljs-string">"testkey"</span>,
        <span class="hljs-attr">"BlockDeviceMappings"</span> : [
          <span>{</span>
            <span class="hljs-attr">"DeviceName"</span> : <span class="hljs-string">"/dev/sdm"</span>,
            <span class="hljs-attr">"Ebs"</span> : <span>{</span>
              <span class="hljs-attr">"VolumeType"</span> : <span class="hljs-string">"io1"</span>,
              <span class="hljs-attr">"Iops"</span> : <span class="hljs-number">200</span>,
              <span class="hljs-attr">"DeleteOnTermination"</span> : <span class="hljs-literal">false</span>,
              <span class="hljs-attr">"VolumeSize"</span> : <span class="hljs-number">20</span>
            }
          }
        ]
      }
    }
  }
}</blockquote></pre>
               </div>
               <div id="YAML" name="YAML" class="section langfilter">
                  <h3 id="t2-micro-example.yaml">YAML</h3>
                  <pre class="programlisting"><blockquote class="yaml hljs"><span class="hljs-attr">AWSTemplateFormatVersion:</span> <span class="hljs-string">"2010-09-09"</span>
<span class="hljs-attr">Description:</span> <span class="hljs-string">A</span> <span class="hljs-string">sample</span> <span class="hljs-string">template</span>
<span class="hljs-attr">Resources:</span>
  <span class="hljs-attr">MyEC2Instance:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">"AWS::EC2::Instance"</span>
    <span class="hljs-attr">Properties:</span> 
      <span class="hljs-attr">ImageId:</span> <span class="hljs-string">"ami-0ff8a91507f77f867"</span>
      <span class="hljs-attr">InstanceType:</span> <span class="hljs-string">t2.micro</span>
      <span class="hljs-attr">KeyName:</span> <span class="hljs-string">testkey</span>
      <span class="hljs-attr">BlockDeviceMappings:</span>
        <span class="hljs-bullet">-</span>
          <span class="hljs-attr">DeviceName:</span> <span class="hljs-string">/dev/sdm</span>
          <span class="hljs-attr">Ebs:</span>
            <span class="hljs-attr">VolumeType:</span> <span class="hljs-string">io1</span>
            <span class="hljs-attr">Iops:</span> <span class="hljs-number">200</span>
            <span class="hljs-attr">DeleteOnTermination:</span> <span class="hljs-literal">false</span>
            <span class="hljs-attr">VolumeSize:</span> <span class="hljs-number">20</span></blockquote></pre>
               </div>
               You can also specify multiple resources in a single template and configure these resources
               to work together. For example, you can modify the previous template to include an Elastic IP
               address (EIP) and associate it with the Amazon EC2 instance, as shown in the following
               example:
               <div id="JSON" name="JSON" class="section langfilter">
                  <h3 id="multiple-resources-single-template.json">JSON</h3>
                  <pre class="programlisting"><blockquote class="json hljs"><span>{</span>
    <span class="hljs-attr">"AWSTemplateFormatVersion"</span> : <span class="hljs-string">"2010-09-09"</span>,
    <span class="hljs-attr">"Description"</span> : <span class="hljs-string">"A sample template"</span>,
    <span class="hljs-attr">"Resources"</span> : <span>{</span>
      <span class="hljs-attr">"MyEC2Instance"</span> : <span>{</span>
        <span class="hljs-attr">"Type"</span> : <span class="hljs-string">"AWS::EC2::Instance"</span>,
        <span class="hljs-attr">"Properties"</span> : <span>{</span>
          <span class="hljs-attr">"ImageId"</span> : <span class="hljs-string">"ami-0ff8a91507f77f867"</span>,
          <span class="hljs-attr">"InstanceType"</span> : <span class="hljs-string">"t2.micro"</span>,
          <span class="hljs-attr">"KeyName"</span> : <span class="hljs-string">"testkey"</span>,
          <span class="hljs-attr">"BlockDeviceMappings"</span> : [
            <span>{</span>
              <span class="hljs-attr">"DeviceName"</span> : <span class="hljs-string">"/dev/sdm"</span>,
              <span class="hljs-attr">"Ebs"</span> : <span>{</span>
                <span class="hljs-attr">"VolumeType"</span> : <span class="hljs-string">"io1"</span>,
                <span class="hljs-attr">"Iops"</span> : <span class="hljs-number">200</span>,
                <span class="hljs-attr">"DeleteOnTermination"</span> : <span class="hljs-literal">false</span>,
                <span class="hljs-attr">"VolumeSize"</span> : <span class="hljs-number">20</span>
              }
            }
          ]
        }
      },
      <span class="hljs-attr">"MyEIP"</span> : <span>{</span>
        <span class="hljs-attr">"Type"</span> : <span class="hljs-string">"AWS::EC2::EIP"</span>,
        <span class="hljs-attr">"Properties"</span> : <span>{</span>
          <span class="hljs-attr">"InstanceId"</span> : <span>{</span><span class="hljs-attr">"Ref"</span>: <span class="hljs-string">"MyEC2Instance"</span>}
        }
      }
    }
  }</blockquote></pre>
               </div>
               <div id="YAML" name="YAML" class="section langfilter">
                  <h3 id="multiple-resources-single-template.yaml">YAML</h3>
                  <pre class="programlisting">
<blockquote class="yaml hljs"><span class="hljs-attr">AWSTemplateFormatVersion:</span> <span class="hljs-string">"2010-09-09"</span>
<span class="hljs-attr">Description:</span> <span class="hljs-string">A</span> <span class="hljs-string">sample</span> <span class="hljs-string">template</span>
<span class="hljs-attr">Resources:</span>
  <span class="hljs-attr">MyEC2Instance:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">"AWS::EC2::Instance"</span>
    <span class="hljs-attr">Properties:</span> 
      <span class="hljs-attr">ImageId:</span> <span class="hljs-string">"ami-0ff8a91507f77f867"</span>
      <span class="hljs-attr">InstanceType:</span> <span class="hljs-string">t2.micro</span>
      <span class="hljs-attr">KeyName:</span> <span class="hljs-string">testkey</span>
      <span class="hljs-attr">BlockDeviceMappings:</span>
        <span class="hljs-bullet">-</span>
          <span class="hljs-attr">DeviceName:</span> <span class="hljs-string">/dev/sdm</span>
          <span class="hljs-attr">Ebs:</span>
            <span class="hljs-attr">VolumeType:</span> <span class="hljs-string">io1</span>
            <span class="hljs-attr">Iops:</span> <span class="hljs-number">200</span>
            <span class="hljs-attr">DeleteOnTermination:</span> <span class="hljs-literal">false</span>
            <span class="hljs-attr">VolumeSize:</span> <span class="hljs-number">20</span>
  <span class="hljs-attr">MyEIP:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">AWS::EC2::EIP</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">InstanceId:</span> <span class="hljs-type">!Ref</span>
       <span class="hljs-string">MyEC2Instance</span></blockquote></pre>
               </div>
               The previous templates are centered around a single Amazon EC2 instance; however,
               CloudFormation
               templates have additional capabilities that you can use to build complex sets of resources
               and
               reuse those templates in multiple contexts. For example, you can add input parameters whose
               values are specified when you create a CloudFormation stack. In other words, you can specify
               a
               value
               like the instance type when you create a stack instead of when you create the template,
               making
               the template easier to reuse in different situations.


               <h2 id="w2ab1b5c15b9">Stacks</h3>

                  When you use CloudFormation, you manage related resources as a single unit called a stack.
                  You
                  create, update, and delete a collection of resources by creating, updating, and deleting
                  stacks. All the resources in a stack are defined by the stack's CloudFormation template.
                  Suppose
                  you
                  created a template that includes an Auto Scaling group, Elastic Load Balancing load balancer,
                  and an Amazon Relational Database Service (Amazon RDS)
                  database instance. To create those resources, you create a stack by submitting the template
                  that you created, and CloudFormation provisions all those resources for you. You can work
                  with
                  stacks
                  by using the CloudFormation

                  <h2 id="cfn-concepts-change-sets">Change sets</h3>

                     If you need to make changes to the running resources in a stack, you update the stack.
                     Before making changes to your resources, you can generate a change set, which is a summary of
                     your proposed changes. Change sets allow you to see how your changes might impact your
                     running
                     resources, especially for critical resources, before implementing them. <br><br>
                     For example, if you change the name of an Amazon RDS database instance, CloudFormation will
                     create a new
                     database and delete the old one. You will lose the data in the old database unless you've
                     already backed it up. If you generate a change set, you will see that your change will cause
                     your database to be replaced, and you will be able to plan accordingly before you update your
                     stack. For more information,

         </div>
      </div>
      <?php require "../../../../../../templates/footer_outer.php" ?>

   </div>

   <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
   <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
   <script defer src="../../../../../../assets/fontawesome/js/all.min.js"></script>
   <!-- footer social icons -->
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