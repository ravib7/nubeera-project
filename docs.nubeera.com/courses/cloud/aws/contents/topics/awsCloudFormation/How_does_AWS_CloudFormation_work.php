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
         <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">How does AWS CloudFormation work?
         </h1>
         <ol class="breadcrumb mx-5 mt-3 px-0">
            <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
            <li class="breadcrumb-item"><a href="../../../">AWS</a></li>
            <li class="breadcrumb-item"><a href="../../">Contents</a></li>
            <li class="breadcrumb-item active">AWS CloudFormation</li>
         </ol>
         <div class="px-5 pb-5 pt-0 body-text">

            When creating a stack, AWS CloudFormation makes underlying service calls to AWS to provision and
            configure your resources. CloudFormation can only perform actions that you have permission to do.
            For example, to create EC2 instances by using CloudFormation, you need permissions to create
            instances. You'll need similar permissions to terminate instances when you delete stacks with
            instances. You use ">AWS Identity and
            Access Management (IAM) to manage
            permissions. <br><br>
            The calls that CloudFormation makes are all declared by your template. For example, suppose you
            have a template that describes an EC2 instance with a <code class="code">t2.micro</code> instance
            type. When
            you use that template to create a stack, CloudFormation calls the Amazon EC2 create instance API
            and
            specifies the instance type as <code class="code">t2.micro</code>. The following diagram summarizes
            the
            CloudFormation workflow for creating stacks.

            <br><br><img src="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/images/create-stack-diagram.png" class="aws-docs-img-whiteBg aws-docs-img-padding"> <br><br>
            <ol>
               <li>
                  Use the <span>AWS CloudFormation
                     Designer</span>or
                  your own text editor to create or modify a CloudFormation template in JSON or YAML format.
                  You
                  can also choose to use a provided template. The CloudFormation template describes the
                  resources
                  you want and their settings. For example, suppose you want to create an EC2 instance. Your
                  template can declare an Amazon EC2 instance and describe its properties, as shown in the
                  following example:
                  <div class="example">
                     <p class="title"><b>Example JSON</b>
                     <div class="example-contents">
                        <pre class="programlisting"><blockquote class="json hljs"><span>{</span>
  <span class="hljs-attr">"AWSTemplateFormatVersion"</span> : <span class="hljs-string">"2010-09-09"</span>,
  <span class="hljs-attr">"Description"</span> : <span class="hljs-string">"A simple EC2 instance"</span>,
  <span class="hljs-attr">"Resources"</span> : <span>{</span>
    <span class="hljs-attr">"MyEC2Instance"</span> : <span>{</span>
      <span class="hljs-attr">"Type"</span> : <span class="hljs-string">"AWS::EC2::Instance"</span>,
      <span class="hljs-attr">"Properties"</span> : <span>{</span>
        <span class="hljs-attr">"ImageId"</span> : <span class="hljs-string">"ami-0ff8a91507f77f867"</span>,
        <span class="hljs-attr">"InstanceType"</span> : <span class="hljs-string">"t2.micro"</span>
      }
    }
  }
}</blockquote></pre>
                     </div>
                  </div>
                  <div class="example">
                     <p class="title"><b>Example YAML</b>
                     <div class="example-contents">
                        <pre class="programlisting"><blockquote class="yaml hljs">
<span class="hljs-attr">AWSTemplateFormatVersion:</span> <span class="hljs-string">'2010-09-09'</span>
<span class="hljs-attr">Description:</span> <span class="hljs-string">A</span> <span class="hljs-string">simple</span> <span class="hljs-string">EC2</span> <span class="hljs-string">instance</span>
<span class="hljs-attr">Resources:</span>
  <span class="hljs-attr">MyEC2Instance:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">AWS::EC2::Instance</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">ImageId:</span> <span class="hljs-string">ami-0ff8a91507f77f867</span>
      <span class="hljs-attr">InstanceType:</span> <span class="hljs-string">t2.micro</span></blockquote></pre>
                     </div>
                  </div>
               </li>
               <li>
                  Save the template locally or in an S3 bucket. If you created a template, save it with a
                  file extension like: <code>.json</code>, <code>.yaml</code>, or
                  <code>.txt</code>.
               </li>
               <li>
                  Create a CloudFormation stack by specifying the location of your template file, such as
                  a path on your local computer or an Amazon S3 URL. If the template contains parameters,
                  you can
                  specify input values when you create the stack. Parameters allow you to pass in values to
                  your template so that you can customize your resources each time you create a stack.
                  You can create stacks by using the CloudFormation console,API,
                  or AWS
                  CLI. <br><br>
                  <strong> Note :</strong>
                  <div class="awsdocs-note-text">
                     If you specify a template file stored locally, CloudFormation uploads it to an S3
                     bucket
                     in your AWS account. CloudFormation creates a bucket for each region in which you
                     upload a
                     template file. The buckets are accessible to anyone with Amazon Simple Storage
                     Service (Amazon S3) permissions in
                     your AWS account. If a bucket created by CloudFormation is already present, the
                     template is
                     added to that bucket.
                     You can use your own bucket and manage its permissions by manually uploading
                     templates
                     to Amazon S3. Then whenever you create or update a stack, specify the Amazon S3 URL
                     of a template
                     file.
                  </div>

                  CloudFormation provisions and configures resources by making calls to the AWS services that
                  are described in your template. <br><br>
                  After all the resources have been created, CloudFormation reports that your stack has been
                  created. You can then start using the resources in your stack. If stack creation fails,
                  CloudFormation rolls back your changes by deleting the resources that it created.

                  <h3 id="updating-stack-with-change-sets">Updating a stack with change sets</h3>

                  When you need to update your stack's resources, you can modify the stack's template. You
                  don't need to create a new stack and delete the old one. To update a stack, create a change
                  set by submitting a modified version of the original stack template, different input parameter
                  values, or both. CloudFormation compares the modified template with the original template and
                  generates a change set. The change set lists the proposed changes. After reviewing the
                  changes, you can start the change set to update your stack or you can create a new change set.
                  The following diagram summarizes the workflow for updating a stack.

                  <br><br><img src="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/images/update-stack-diagram.png" class="aws-docs-img-whiteBg aws-docs-img-padding"><br><br>

                  <strong> Important :</strong><br>
                  Updates can cause interruptions. Depending on the resource and properties that you are
                  updating, an update might interrupt or even replace an existing resource. For more
                  information, see AWS CloudFormation stack
                  updates.<br><br>
                  <ol>
                     <li> You can modify a CloudFormation stack template by using <a rel="noopener noreferrer" target="_blank"><span>AWS CloudFormation Designer</span>

                        </a> or a text editor. For example, if you want to change the instance type for an EC2
                        instance, you would change the value of the <code class="code">InstanceType</code>
                        property in the original stack's template.
                        For more information, see Modifying a stack template.
                     </li>
                     <li>
                        Save the CloudFormation template locally or in an S3 bucket.
                     </li>
                     <li>
                        Create a change set by specifying the stack that you want to update and the location
                        of the modified template, such as a path on your local computer or an Amazon S3 URL. If
                        the
                        template contains parameters, you can specify values when you create the change
                        set.
                        For more information about creating change sets, see Updating stacks using change
                        sets. <br><br>
                        <strong> Note :</strong>
                        If you specify a template that's stored on your local computer, CloudFormation
                        automatically uploads your template to an S3 bucket in your AWS account. <br><br>
                     </li>
                     <li>
                        View the change set to check that CloudFormation will perform the changes that you expect.
                        For example, check whether CloudFormation will replace any critical stack resources. You
                        can
                        create as many change sets as you need until you have included the changes that you
                        want. <br><br>
                        <strong> Important :</strong>
                        <div class="awsdocs-note-text">
                           Change sets don't indicate whether your stack update will be successful. For
                           example, a change set doesn't check if you will surpass an account
                           hquota, if you're updating a
                           href="./aws-template-resource-type-ref.html">resource that doesn't support
                           updates,
                           or if you have insufficient permissions to
                           modify a resource, which can cause a stack update to fail. <br><br>
                        </div>
                     </li>
                     <li>
                        Initiate the change set that you want to apply to your stack. CloudFormation updates your
                        stack by updating only the resources that you modified and signals that your stack has
                        been successfully updated. If the stack updates fails, CloudFormation rolls back changes
                        to
                        restore the stack to the last known working state.
                     </li>
                  </ol>

                  <h3 id="how-to-delete-a-stack">Deleting a stack</h3>

                  When you delete a stack, you specify the stack to delete, and CloudFormation deletes the stack
                  and all the resources in that stack. You can delete stacks by using the CloudFormation console, API</a>,
                  or AWS
                  CLI. <br><br>
                  If you want to delete a stack but want to retain some resources in that stack, you can use
                  a deletion policy to retain those
                  resources. <br><br>
                  After all the resources have been deleted, CloudFormation signals that your stack has been
                  successfully deleted. If CloudFormation can't delete a resource, the stack won't be deleted. Any
                  resources that haven't been deleted will remain until you can successfully delete the
                  stack.
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