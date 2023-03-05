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
         <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Getting started</h1>
         <ol class="breadcrumb mx-5 mt-3 px-0">
            <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
            <li class="breadcrumb-item"><a href="../../../">AWS</a></li>
            <li class="breadcrumb-item"><a href="../../">Contents</a></li>
            <li class="breadcrumb-item active">AWS CloudFormation</li>
         </ol>
         <div class="px-5 pb-5 pt-0 body-text">

            <div class="otp-header ng-binding"> On this page </div> <!-- ngIf: $ctrl.pageTocItemsFiltered -->

            <div class="awsui-side-navigation">
               <ul class="awsui-side-navigation__list awsui-side-navigation__list--root">
                  <li><span><a class="awsui-side-navigation__link" href="#GettingStarted.Walkthrough.PickTemplate">Step
                           1: Pick a
                           template</a></span></li>
                  <li><span><a class="awsui-side-navigation__link" href="#GettingStarted.Walkthrough.prep">Step 2: Make
                           sure you have prepared
                           any required items for the stack</a></span></li>
                  <li><span><a class="awsui-side-navigation__link" href="#GettingStarted.Walkthrough.createstack">Step
                           3: Create the
                           stack</a></span></li>
                  <li><span><a class="awsui-side-navigation__link" href="#GettingStarted.Walkthrough.monitor">Step 4:
                           Monitor the progress of
                           stack creation</a></span></li>
                  <li><span><a class="awsui-side-navigation__link awsui-side-navigation__link--active" href="#GettingStarted.Walkthrough.viewapp" aria-current="page">Step 5: Use
                           your stack resources</a></span></li>
                  <li><span><a class="awsui-side-navigation__link" href="#GettingStarted.Walkthrough.cleanup">Step 6:
                           Clean up</a></span></li>
               </ul>
            </div>

            With the right template, you can deploy at once all the AWS resources you need for an
            application. In this section, you'll examine a template that declares the resources for a
            WordPress blog, creates a WordPress blog as a stack, monitors the stack creation process,
            examines the resources on the stack, and then deletes the stack. You use the AWS Management Console to
            complete these tasks.
            <h3 id="GettingStarted.Walkthrough.PickTemplate">Step 1: Pick a template</h3>

            First, you'll need a template that specifies the resources that you want in your stack.
            For this step, you use a sample template that's already prepared. The sample template
            creates a basic WordPress blog that uses a single Amazon EC2 instance with a local MySQL
            database for storage. The template also creates an Amazon EC2 security group to control firewall
            settings for the Amazon EC2 instance.

            <br><br><strong> Important :</strong>

            <div class="awsdocs-note-text">
               AWS CloudFormation is free, but the AWS resources that CloudFormation creates are live (and not
               running
               in a sandbox). You will incur the standard usage fees for these resources until you
               terminate them in the last task in this tutorial. The total charges will be minimal. <br><br>

               <div class="procedure">
                  <b>To view the template</b>
                  <ul>
                     <li>
                        You can view the <span>JSON</span>or <span>YAML</span>
                        WordPress sample template. You don't need to download it because you
                        will use the template URL later in this guide.
                     </li>
                  </ul>
               </div>

               A template is a JSON or YAML text file that contains the configuration information about the AWS
               resources you want to create in the stack. For this walkthrough, the sample template includes six
               top-level sections: <code class="code">AWSTemplateFormatVersion</code>, <code class="code">Description</code>,
               <code class="code">Parameters</code>, <code class="code">Mappings</code>, <code class="code">Resources</code>, and
               <code class="code">Outputs</code>; however, only the <code class="code">Resources</code> section is
               required. <br><br>
               The Resources section contains the definitions of the AWS resources you want to create
               with the template. Each resource is listed separately and specifies the properties that are
               necessary for creating that particular resource. The following resource declaration is the
               configuration for the EC2 instance, which in this example has the logical name
               <code class="code">WebServer</code>:
               <div class="example">
                  <b>Example JSON</b>
                  <div class="example-contents">
                     <pre class="programlisting"><blockquote class="hljs makefile"><span class="hljs-string">"Resources"</span> : <span>{</span>
  ...    
  <span class="hljs-string">"WebServer"</span>: <span>{</span>
    <span class="hljs-string">"Type"</span> : <span class="hljs-string">"AWS::EC2::Instance"</span>,
    <span class="hljs-string">"Properties"</span>: <span>{</span>
      <span class="hljs-string">"ImageId"</span> : <span>{</span> <span class="hljs-string">"Fn::FindInMap"</span> : [ <span class="hljs-string">"AWSRegionArch2AMI"</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"AWS::Region"</span> },
                        <span>{</span> <span class="hljs-string">"Fn::FindInMap"</span> : [ <span class="hljs-string">"AWSInstanceType2Arch"</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"InstanceType"</span> }, <span class="hljs-string">"Arch"</span> ] } ] },
      <span class="hljs-string">"InstanceType"</span>   : <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"InstanceType"</span> },
      <span class="hljs-string">"SecurityGroups"</span> : [ <span>{</span><span class="hljs-string">"Ref"</span> : <span class="hljs-string">"WebServerSecurityGroup"</span>} ],
      <span class="hljs-string">"KeyName"</span>        : <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"KeyName"</span> },
      <span class="hljs-string">"UserData"</span> : <span>{</span> <span class="hljs-string">"Fn::Base64"</span> : <span>{</span> <span class="hljs-string">"Fn::Join"</span> : [<span class="hljs-string">""</span>, [
                     <span class="hljs-string">"#!/bin/bash -xe\n"</span>,
                     <span class="hljs-string">"yum update -y aws-cfn-bootstrap\n"</span>,

                     <span class="hljs-string">"/opt/aws/bin/cfn-init -v "</span>,
                     <span class="hljs-string">"         --stack "</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"AWS::StackName"</span> },
                     <span class="hljs-string">"         --resource WebServer "</span>,
                     <span class="hljs-string">"         --configsets wordpress_install "</span>,
                     <span class="hljs-string">"         --region "</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"AWS::Region"</span> }, <span class="hljs-string">"\n"</span>,

                     <span class="hljs-string">"/opt/aws/bin/cfn-signal -e <span class="hljs-variable">$?</span> "</span>,
                     <span class="hljs-string">"         --stack "</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"AWS::StackName"</span> },
                     <span class="hljs-string">"         --resource WebServer "</span>,
                     <span class="hljs-string">"         --region "</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"AWS::Region"</span> }, <span class="hljs-string">"\n"</span>
      ]]}}
    },
    ...
  },
  ...  
  <span class="hljs-string">"WebServerSecurityGroup"</span> : <span>{</span>
    <span class="hljs-string">"Type"</span> : <span class="hljs-string">"AWS::EC2::SecurityGroup"</span>,
    <span class="hljs-string">"Properties"</span> : <span>{</span>
      <span class="hljs-string">"GroupDescription"</span> : <span class="hljs-string">"Enable HTTP access via port 80 locked down to the load balancer + SSH access"</span>,
      <span class="hljs-string">"SecurityGroupIngress"</span> : [
        <span>{</span><span class="hljs-string">"IpProtocol"</span> : <span class="hljs-string">"tcp"</span>, <span class="hljs-string">"FromPort"</span> : 80, <span class="hljs-string">"ToPort"</span> : 80, <span class="hljs-string">"CidrIp"</span> : <span class="hljs-string">"0.0.0.0/0"</span>},
        <span>{</span><span class="hljs-string">"IpProtocol"</span> : <span class="hljs-string">"tcp"</span>, <span class="hljs-string">"FromPort"</span> : 22, <span class="hljs-string">"ToPort"</span> : 22, <span class="hljs-string">"CidrIp"</span> : <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"SSHLocation"</span>}}
      ]
    }
  },
  ...    
},</blockquote></pre>
                  </div>
               </div>

               <div class="example">
                  <b>Example YAML</b>
                  <div class="example-contents">
                     <pre class="programlisting"><blockquote class="hljs yaml"><span class="hljs-attr">Resources:</span> 
  <span class="hljs-string">...</span>    
  <span class="hljs-attr">WebServer:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">AWS::EC2::Instance</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">ImageId:</span> <span class="hljs-type">!FindInMap</span> <span class="hljs-string">[AWSRegionArch2AMI,</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">'AWS::Region'</span><span class="hljs-string">,</span> <span class="hljs-type">!FindInMap</span> <span class="hljs-string">[AWSInstanceType2Arch,</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">InstanceType,</span> <span class="hljs-string">Arch]]</span>      
      <span class="hljs-attr">InstanceType:</span>
        <span class="hljs-attr">Ref:</span> <span class="hljs-string">InstanceType</span>
      <span class="hljs-attr">KeyName:</span>
        <span class="hljs-attr">Ref:</span> <span class="hljs-string">KeyName</span>
      <span class="hljs-attr">SecurityGroups:</span>
      <span class="hljs-bullet">-</span> <span class="hljs-attr">Ref:</span> <span class="hljs-string">WebServerSecurityGroup</span>
      <span class="hljs-attr">UserData:</span>
        <span class="hljs-attr">Fn::Base64:</span> <span class="hljs-type">!Sub</span> <span class="hljs-string">|
           #!/bin/bash -xe
           yum update -y aws-cfn-bootstrap
           /opt/aws/bin/cfn-init -v --stack $</span><span><span class="hljs-string">{</span></span><span class="hljs-string">AWS::StackId} --resource WebServer --configsets wordpress_install --region $</span><span><span class="hljs-string">{</span></span><span class="hljs-string">AWS::Region}
           /opt/aws/bin/cfn-signal -e $? --stack $</span><span><span class="hljs-string">{</span></span><span class="hljs-string">AWS::StackId} --resource WebServer --region $</span><span><span class="hljs-string">{</span></span><span class="hljs-string">AWS::Region}
</span>    <span class="hljs-string">...</span>
  <span class="hljs-string">...</span>
  
  <span class="hljs-attr">WebServerSecurityGroup:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">AWS::EC2::SecurityGroup</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">GroupDescription:</span> <span class="hljs-string">"Enable HTTP access via port 80 locked down to the load balancer + SSH access"</span>
      <span class="hljs-attr">SecurityGroupIngress:</span>
      <span class="hljs-bullet">-</span> <span class="hljs-attr">CidrIp:</span> <span class="hljs-number">0.0</span><span class="hljs-number">.0</span><span class="hljs-number">.0</span><span class="hljs-string">/0</span>
        <span class="hljs-attr">FromPort:</span> <span class="hljs-number">80</span>
        <span class="hljs-attr">IpProtocol:</span> <span class="hljs-string">tcp</span>
        <span class="hljs-attr">ToPort:</span> <span class="hljs-number">80</span>
      <span class="hljs-bullet">-</span> <span class="hljs-attr">CidrIp:</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">SSHLocation</span>
        <span class="hljs-attr">FromPort:</span> <span class="hljs-number">22</span>
        <span class="hljs-attr">IpProtocol:</span> <span class="hljs-string">tcp</span>
        <span class="hljs-attr">ToPort:</span> <span class="hljs-number">22</span>
  <span class="hljs-string">...</span>    </blockquote></pre>
                  </div>
               </div>
               If you have created EC2 instances before, you can recognize properties, such as
               <code class="code">ImageId</code>, <code class="code">InstanceType</code>, and <code class="code">KeyName</code>,
               that
               determine the configuration of the instance. Resource declarations are an efficient way to
               specify all these configuration settings at once. When you put resource declarations in a
               template, you can create and configure all the declared resources by using the template to
               create a stack. Create a new stack that uses the same template to launch the same
               configuration of resources. <br><br>
               The resource declaration begins with a string that specifies the logical name for the resource. As
               you'll
               see, the logical name can be used to refer to resources within the template. <br><br>
               You use the <em>Parameters</em> section to declare values that can be passed
               to the template when you create the stack. A parameter is an effective way to specify
               sensitive information, such as user names and passwords, that you don't want to store in
               the template itself. It's also a way to specify information that might be unique to the
               specific application or configuration you are deploying, for example, a domain name or
               instance type. When you create the WordPress stack later in this section, you'll see the
               set of parameters declared in the template appear on the <b>Specify
                  Details</b> page of the <b>Create Stack</b> wizard, where you can
               specify the parameters before you create the stack. <br><br>
               The following parameters are used in the template to specify values that are used in properties of the
               EC2 instance:

               <div class="example">
                  <b>Example JSON</b>
                  <div class="example-contents">
                     <pre class="programlisting"><blockquote class="hljs bash">
<span class="hljs-string">"Parameters"</span> : <span>{</span>
  ...      
  <span class="hljs-string">"KeyName"</span>: <span>{</span>
    <span class="hljs-string">"Description"</span> : <span class="hljs-string">"Name of an existing EC2 KeyPair to enable SSH access to the instances"</span>,
    <span class="hljs-string">"Type"</span>: <span class="hljs-string">"AWS::EC2::KeyPair::KeyName"</span>,
    <span class="hljs-string">"ConstraintDescription"</span> : <span class="hljs-string">"must be the name of an existing EC2 KeyPair."</span>
  },

  <span class="hljs-string">"InstanceType"</span> : <span>{</span>
    <span class="hljs-string">"Description"</span> : <span class="hljs-string">"WebServer EC2 instance type"</span>,
    <span class="hljs-string">"Type"</span> : <span class="hljs-string">"String"</span>,
    <span class="hljs-string">"Default"</span> : <span class="hljs-string">"t2.small"</span>,
    <span class="hljs-string">"AllowedValues"</span> : [ <span class="hljs-string">"t1.micro"</span>, <span class="hljs-string">"t2.nano"</span>, <span class="hljs-string">"t2.micro"</span>, <span class="hljs-string">"t2.small"</span>, <span class="hljs-string">"t2.medium"</span>, <span class="hljs-string">"t2.large"</span>, <span class="hljs-string">"m1.small"</span>, <span class="hljs-string">"m1.medium"</span>, <span class="hljs-string">"m1.large"</span>, <span class="hljs-string">"m1.xlarge"</span>, <span class="hljs-string">"m2.xlarge"</span>, <span class="hljs-string">"m2.2xlarge"</span>, <span class="hljs-string">"m2.4xlarge"</span>, <span class="hljs-string">"m3.medium"</span>, <span class="hljs-string">"m3.large"</span>, <span class="hljs-string">"m3.xlarge"</span>, <span class="hljs-string">"m3.2xlarge"</span>, <span class="hljs-string">"m4.large"</span>, <span class="hljs-string">"m4.xlarge"</span>, <span class="hljs-string">"m4.2xlarge"</span>, <span class="hljs-string">"m4.4xlarge"</span>, <span class="hljs-string">"m4.10xlarge"</span>, <span class="hljs-string">"c1.medium"</span>, <span class="hljs-string">"c1.xlarge"</span>, <span class="hljs-string">"c3.large"</span>, <span class="hljs-string">"c3.xlarge"</span>, <span class="hljs-string">"c3.2xlarge"</span>, <span class="hljs-string">"c3.4xlarge"</span>, <span class="hljs-string">"c3.8xlarge"</span>, <span class="hljs-string">"c4.large"</span>, <span class="hljs-string">"c4.xlarge"</span>, <span class="hljs-string">"c4.2xlarge"</span>, <span class="hljs-string">"c4.4xlarge"</span>, <span class="hljs-string">"c4.8xlarge"</span>, <span class="hljs-string">"g2.2xlarge"</span>, <span class="hljs-string">"g2.8xlarge"</span>, <span class="hljs-string">"r3.large"</span>, <span class="hljs-string">"r3.xlarge"</span>, <span class="hljs-string">"r3.2xlarge"</span>, <span class="hljs-string">"r3.4xlarge"</span>, <span class="hljs-string">"r3.8xlarge"</span>, <span class="hljs-string">"i2.xlarge"</span>, <span class="hljs-string">"i2.2xlarge"</span>, <span class="hljs-string">"i2.4xlarge"</span>, <span class="hljs-string">"i2.8xlarge"</span>, <span class="hljs-string">"d2.xlarge"</span>, <span class="hljs-string">"d2.2xlarge"</span>, <span class="hljs-string">"d2.4xlarge"</span>, <span class="hljs-string">"d2.8xlarge"</span>, <span class="hljs-string">"hi1.4xlarge"</span>, <span class="hljs-string">"hs1.8xlarge"</span>, <span class="hljs-string">"cr1.8xlarge"</span>, <span class="hljs-string">"cc2.8xlarge"</span>, <span class="hljs-string">"cg1.4xlarge"</span>],
    <span class="hljs-string">"ConstraintDescription"</span> : <span class="hljs-string">"must be a valid EC2 instance type."</span>
  },
...</blockquote></pre>
                  </div>
               </div>

               <div class="example">
                  <b>Example YAML</b>
                  <div class="example-contents">
                     <pre class="programlisting"><blockquote class="hljs css"><span class="hljs-selector-tag">Parameters</span>:
  ...      
  <span class="hljs-selector-tag">KeyName</span>:
    <span class="hljs-selector-tag">ConstraintDescription</span>: <span class="hljs-selector-tag">must</span> <span class="hljs-selector-tag">be</span> <span class="hljs-selector-tag">the</span> <span class="hljs-selector-tag">name</span> <span class="hljs-selector-tag">of</span> <span class="hljs-selector-tag">an</span> <span class="hljs-selector-tag">existing</span> <span class="hljs-selector-tag">EC2</span> <span class="hljs-selector-tag">KeyPair</span>.
    <span class="hljs-selector-tag">Description</span>: <span class="hljs-selector-tag">Name</span> <span class="hljs-selector-tag">of</span> <span class="hljs-selector-tag">an</span> <span class="hljs-selector-tag">existing</span> <span class="hljs-selector-tag">EC2</span> <span class="hljs-selector-tag">KeyPair</span> <span class="hljs-selector-tag">to</span> <span class="hljs-selector-tag">enable</span> <span class="hljs-selector-tag">SSH</span> <span class="hljs-selector-tag">access</span> <span class="hljs-selector-tag">to</span> <span class="hljs-selector-tag">the</span> <span class="hljs-selector-tag">instances</span>
    <span class="hljs-selector-tag">Type</span>: <span class="hljs-selector-tag">AWS</span><span class="hljs-selector-pseudo">::EC2</span><span class="hljs-selector-pseudo">::KeyPair</span><span class="hljs-selector-pseudo">::KeyName</span>
  <span class="hljs-selector-tag">InstanceType</span>:
    <span class="hljs-selector-tag">AllowedValues</span>:
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">t1</span><span class="hljs-selector-class">.micro</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">t2</span><span class="hljs-selector-class">.nano</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">t2</span><span class="hljs-selector-class">.micro</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">t2</span><span class="hljs-selector-class">.small</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">t2</span><span class="hljs-selector-class">.medium</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">t2</span><span class="hljs-selector-class">.large</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m1</span><span class="hljs-selector-class">.small</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m1</span><span class="hljs-selector-class">.medium</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m1</span><span class="hljs-selector-class">.large</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m1</span><span class="hljs-selector-class">.xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m2</span><span class="hljs-selector-class">.xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m2</span><span class="hljs-selector-class">.2xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m2</span><span class="hljs-selector-class">.4xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m3</span><span class="hljs-selector-class">.medium</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m3</span><span class="hljs-selector-class">.large</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m3</span><span class="hljs-selector-class">.xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m3</span><span class="hljs-selector-class">.2xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m4</span><span class="hljs-selector-class">.large</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m4</span><span class="hljs-selector-class">.xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m4</span><span class="hljs-selector-class">.2xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m4</span><span class="hljs-selector-class">.4xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">m4</span><span class="hljs-selector-class">.10xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">c1</span><span class="hljs-selector-class">.medium</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">c1</span><span class="hljs-selector-class">.xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">c3</span><span class="hljs-selector-class">.large</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">c3</span><span class="hljs-selector-class">.xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">c3</span><span class="hljs-selector-class">.2xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">c3</span><span class="hljs-selector-class">.4xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">c3</span><span class="hljs-selector-class">.8xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">c4</span><span class="hljs-selector-class">.large</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">c4</span><span class="hljs-selector-class">.xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">c4</span><span class="hljs-selector-class">.2xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">c4</span><span class="hljs-selector-class">.4xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">c4</span><span class="hljs-selector-class">.8xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">g2</span><span class="hljs-selector-class">.2xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">g2</span><span class="hljs-selector-class">.8xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">r3</span><span class="hljs-selector-class">.large</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">r3</span><span class="hljs-selector-class">.xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">r3</span><span class="hljs-selector-class">.2xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">r3</span><span class="hljs-selector-class">.4xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">r3</span><span class="hljs-selector-class">.8xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">i2</span><span class="hljs-selector-class">.xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">i2</span><span class="hljs-selector-class">.2xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">i2</span><span class="hljs-selector-class">.4xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">i2</span><span class="hljs-selector-class">.8xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">d2</span><span class="hljs-selector-class">.xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">d2</span><span class="hljs-selector-class">.2xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">d2</span><span class="hljs-selector-class">.4xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">d2</span><span class="hljs-selector-class">.8xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">hi1</span><span class="hljs-selector-class">.4xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">hs1</span><span class="hljs-selector-class">.8xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">cr1</span><span class="hljs-selector-class">.8xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">cc2</span><span class="hljs-selector-class">.8xlarge</span>
    <span class="hljs-selector-tag">-</span> <span class="hljs-selector-tag">cg1</span><span class="hljs-selector-class">.4xlarge</span>
    <span class="hljs-selector-tag">ConstraintDescription</span>: <span class="hljs-selector-tag">must</span> <span class="hljs-selector-tag">be</span> <span class="hljs-selector-tag">a</span> <span class="hljs-selector-tag">valid</span> <span class="hljs-selector-tag">EC2</span> <span class="hljs-selector-tag">instance</span> <span class="hljs-selector-tag">type</span>.
    <span class="hljs-selector-tag">Default</span>: <span class="hljs-selector-tag">t2</span><span class="hljs-selector-class">.small</span>
    <span class="hljs-selector-tag">Description</span>: <span class="hljs-selector-tag">WebServer</span> <span class="hljs-selector-tag">EC2</span> <span class="hljs-selector-tag">instance</span> <span class="hljs-selector-tag">type</span>
    <span class="hljs-selector-tag">Type</span>: <span class="hljs-selector-tag">String</span>
...</blockquote></pre>
                  </div>
               </div>

               In the <code class="code">WebServer</code> resource declaration, you see the <code class="code">KeyName</code>
               property specified with the <code class="code">KeyName</code>
               parameter:
               <div class="example">
                  <b>Example JSON</b>
                  <div class="example-contents">
                     <pre class="programlisting"><blockquote class="hljs bash"><span class="hljs-string">"WebServer"</span> : <span>{</span>
  <span class="hljs-string">"Type"</span>: <span class="hljs-string">"AWS::EC2::Instance"</span>,
  <span class="hljs-string">"Properties"</span>: <span>{</span>
    <span class="hljs-string">"KeyName"</span> : <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"KeyName"</span> },
    ...
  }
},</blockquote></pre>
                  </div>
               </div>

               <div class="example">
                  <b>Example YAML</b>
                  <div class="example-contents">
                     <pre class="programlisting"><blockquote class="hljs yaml"><span class="hljs-attr">WebServer:</span>
  <span class="hljs-attr">Type:</span> <span class="hljs-string">AWS::EC2::Instance</span>
  <span class="hljs-attr">Properties:</span>
    <span class="hljs-attr">KeyName:</span>
      <span class="hljs-attr">Ref:</span> <span class="hljs-string">KeyName</span>
    <span class="hljs-string">...</span></blockquote></pre>
                  </div>
               </div>
               The braces contain a call to the Ref function
               with <code class="code">KeyName</code> as its input. The Ref function returns the value of the object
               it refers to. In this case, the Ref function sets the <code class="code">KeyName</code> property to
               the value that was specified for <code class="code">KeyName</code> when the stack was created. <br><br>
               The Ref function can also set a resource's property to the value of another resource. For example, the
               resource declaration <code class="code">WebServer</code> contains the following property declaration:

               <div class="example">
                  <b>Example JSON</b>
                  <div class="example-contents">
                     <pre class="programlisting"><blockquote class="hljs bash"><span class="hljs-string">"WebServer"</span> : <span>{</span>
  <span class="hljs-string">"Type"</span>: <span class="hljs-string">"AWS::EC2::Instance"</span>,
  <span class="hljs-string">"Properties"</span>: <span>{</span>
    ...
    <span class="hljs-string">"SecurityGroups"</span> : [ <span>{</span><span class="hljs-string">"Ref"</span> : <span class="hljs-string">"WebServerSecurityGroup"</span>} ],
    ...
  }
},</blockquote></pre>
                  </div>
               </div>

               <div class="example">
                  <b>Example YAML</b>
                  <div class="example-contents">
                     <pre class="programlisting"><blockquote class="hljs yaml"><span class="hljs-attr">WebServer:</span>
  <span class="hljs-attr">Type:</span> <span class="hljs-string">AWS::EC2::Instance</span>
  <span class="hljs-attr">Properties:</span>
    <span class="hljs-attr">SecurityGroups:</span>
    <span class="hljs-bullet">-</span> <span class="hljs-attr">Ref:</span> <span class="hljs-string">WebServerSecurityGroup</span>
    <span class="hljs-string">...</span></blockquote></pre>
                  </div>
               </div>
               The <code class="code">SecurityGroups</code> property takes a list of EC2 security groups. The Ref
               function has an input of <code class="code">WebServerSecurityGroup</code>, which is the logical name
               of a security group in the template, and adds the name of <code class="code">WebServerSecurityGroup</code>
               to the
               <code class="code">SecurityGroups</code>
               property. <br><br>
               In the template, you'll also find a <em>Mappings</em> section. You use
               mappings to declare conditional values that are evaluated in a similar manner as a lookup
               table statement. The template uses mappings to select the correct Amazon Machine Image
               (AMI) for the region and the architecture type for the instance type.
               <em>Outputs</em> define custom values that are returned by the
               <code class="code">aws cloudformation describe-stacks</code> command and in the CloudFormation console
               <b>Outputs</b> tab after the stack creation. You can use output values to
               return information from the resources in the stack, such as the URL for a website that was
               created in the template. <br><br>
               That's enough about templates for now. Let's start creating a stack.
               <h3 id="GettingStarted.Walkthrough.prep">Step 2: Make sure you have prepared any required items for
                  the
                  stack</h3>


               Before you create a stack from a template, you must ensure that all dependent resources
               that the template requires are available. A template can use or refer to both existing
               AWS resources and resources declared in the template itself. CloudFormation takes care of
               checking references to resources in the template and also checks references to existing
               resources to ensure that they exist in the region where you are creating the stack. If your
               template refers to a dependent resource that doesn't exist, stack creation fails. <br><br>

               The example WordPress template contains an input parameter, <code class="code">KeyName</code>, that
               specifies the key pair used for the Amazon EC2 instance that's declared in the template. The
               template depends on the user who creates a stack from the template to supply a valid Amazon EC2
               key pair for the <code class="code">KeyName</code> parameter. If you supply a valid key pair name, the
               stack creates successfully. If you don't supply a valid key pair name, the stack is rolled
               back. <br><br>

               Make sure you have a valid Amazon EC2 key pair and record the key pair name before you create
               the stack. <br><br>
               To see your key pairs, open the Amazon EC2 console, then choose <b>Key
                  Pairs</b> in the navigation pane.

               <div class="awsdocs-note">
                  <div class="awsdocs-note-title">
                     <br><br><strong>Note :</strong>
                  </div>
                  <div class="awsdocs-note-text">
                     If you don't have an Amazon EC2 key pair, you must create the key pair in the same region
                     where you are creating the stack. For information about creating a key pair, see Getting
                     an SSH
                     key pair in the <em>Amazon EC2 User Guide for Linux Instances</em>.
                  </div>
               </div>

               Now that you have a valid key pair, let's use the WordPress template to create a stack.

               <h3 id="GettingStarted.Walkthrough.createstack">Step 3: Create the stack</h3>

               You will create your stack based on the <em>WordPress-1.0.0</em> file discussed earlier. The template
               contains several AWS resources, such as an EC2 instance.
               <div class="procedure">
                  <b>To create the WordPress stack</b>
                  <ol>
                     <li>
                        Sign in to the AWS Management Console and open the AWS CloudFormation console at
                        <a href="https://console.aws.amazon.com/cloudformation/" rel="noopener noreferrer" target="_blank"><span>https://console.aws.amazon.com/cloudformation</span>

                        </a>.
                     </li>
                     <li>
                        If this is a new CloudFormation account, choose <b>Create New Stack</b>.
                        Otherwise, choose <b>Create Stack</b>.
                     </li>
                     <li>
                        In the <b>Template</b> section, select <b>Specify an Amazon
                           S3 Template URL</b> to type or paste the URL for the sample WordPress
                        template, and then choose <b>Next</b>:
                        <code class="code">https://s3.us-west-2.amazonaws.com/cloudformation-templates-us-west-2/WordPress_Single_Instance.template</code>

                        <div class="awsdocs-note">
                           <div class="awsdocs-note-title">
                              <br><br><strong>Note :</strong>
                           </div>
                           <div class="awsdocs-note-text">
                              AWS CloudFormation templates that are stored in an S3 bucket must be accessible to the
                              user
                              who is creating the stack, and must be located in the <em>same region</em> as the stack
                              that is being created.
                              Therefore, if the S3 bucket is located in the <span><code class="code">us-east-2</code></span>
                              Region, the stack must also be created in
                              <span><code class="code">us-east-2</code></span>.
                           </div>
                        </div>
                     </li>
                     <li>
                        In the <b>Specify Details</b> section, enter a stack name in the
                        <b>Name</b> field. For this example, use
                        <code class="userinput">MyWPTestStack</code>. The stack name can't contain spaces.
                     </li>
                     <li>
                        On the <b>Specify Parameters</b> page, you'll recognize the
                        parameters from the Parameters section of the template. You must provide values for
                        all parameters that don't have default values, including <b>DBUser</b>,
                        <b>DBPassword</b>, <b>DBRootPassword</b>, and
                        <b>KeyName</b>. In the <b>KeyName</b> field, enter the
                        name of a valid Amazon EC2 pair in the same region you are creating the stack.
                     </li>
                     <li>
                        Choose <b>Next</b>.
                     </li>
                     <li>
                        In this scenario, we won't add any tags. Choose <b>Next</b>. Tags,
                        which are key-value pairs, can help you identify your stacks.
                     </li>
                     <li>
                        Review the information for the stack. When you're satisfied with the settings,
                        choose <b>Create</b>.
                     </li>
                  </ol>
                  Your stack might take several minutes to create – but you probably don't want to
                  just sit around waiting. If you're like us, you'll want to know how the stack creation is
                  going.
                  <h3 id="GettingStarted.Walkthrough.monitor">Step 4: Monitor the progress of stack creation</h3>

                  After you complete the <b>Create Stack</b> wizard, CloudFormation begins creating
                  the resources that are specified in the template. Your new stack,
                  <code class="code">MyWPTestStack</code>, appears in the list at the top portion of the
                  <b>CloudFormation</b> console. Its status should be CREATE_IN_PROGRESS.
                  You can see detailed status for a stack by viewing its events.
                  <div class="procedure">
                     <b>To view the events for the stack</b>
                     <ol>
                        <li>
                           On the CloudFormation console, select the stack <code class="code">MyWPTestStack</code> in
                           the
                           list.
                        </li>
                        <li>
                           In the stack details pane, choose the <b>Events</b> tab.
                           The console automatically refreshes the event list with the most recent events
                           every 60 seconds.
                        </li>
                     </ol>
                  </div>
                  The <b>Events</b> tab displays each major step in the creation of the
                  stack sorted by the time of each event, with latest events on top. <br><br>
                  The first event (at the bottom of the event list) is the start of the stack creation process: <br><br>
                  <code class="code">2013-04-24 18:54 UTC-7 CREATE_IN_PROGRESS AWS::CloudFormation::Stack MyWPTestStack
                     User initiated</code><br><br>
                  Next are events that mark the beginning and completion of the creation of each resource. For example,
                  creation of the EC2 instance results in the following entries:<br><br>
                  <code class="code">2013-04-24 18:59 UTC-7 CREATE_COMPLETE AWS::EC2::Instance...</code><br><br>
                  <code class="code">2013-04-24 18:54 UTC-7 CREATE_IN_PROGRESS AWS::EC2::Instance...</code><br><br>
                  The <code class="code">CREATE_IN_PROGRESS</code> event is logged when CloudFormation reports that it
                  has begun
                  to create the resource. The <code class="code">CREATE_COMPLETE</code> event is logged when the
                  resource
                  is successfully created. <br><br>
                  When CloudFormation has successfully created the stack, you will see the following event at the top of
                  the
                  <b>Events</b> tab:<br><br>
                  <code class="code">2013-04-24 19:17 UTC-7 CREATE_COMPLETE AWS::CloudFormation::Stack
                     MyWPTestStack</code><br><br>

                  If CloudFormation can't create a resource, it reports a <code class="code">CREATE_FAILED</code> event
                  and, by default, rolls back the stack and deletes any resources that have been created. The
                  <b>Status Reason</b> column displays the issue that caused the
                  failure.

                  <h3 id="GettingStarted.Walkthrough.viewapp">Step 5: Use your stack resources</h3>

                  When the stack <code class="code">MyWPTestStack</code> has a status of <code class="code">CREATE_COMPLETE</code>,
                  CloudFormation has finished creating the stack, and you can start using its resources. <br><br>
                  The sample WordPress stack creates a WordPress website. You can continue with the WordPress set up by
                  running
                  the WordPress installation script.
                  <div class="procedure">
                     <b>To complete the WordPress installation</b>
                     <ol>
                        <li>
                           On the <b>Outputs</b> tab, in the <b>WebsiteURL</b>
                           row, choose the link in the <b>Value</b> column.
                           The <code class="code">WebsiteURL</code> output value is the URL of the installation script
                           for
                           the WordPress website that you created with the stack.
                        </li>
                        <li>
                           On the web page for the WordPress installation, follow the on-screen instructions to complete
                           the
                           WordPress installation.
                           After you complete the installation and log in, you are directed to the dashboard
                           where you can set additional options for your WordPress blog. Then, you can start
                           writing posts for your blog that you successfully created by using a CloudFormation
                           template.
                        </li>
                     </ol>
                  </div>
                  <h3 id="GettingStarted.Walkthrough.cleanup">Step 6: Clean up</h3>

                  You have completed the CloudFormation getting started tasks. To make sure you aren't charged
                  for any unwanted services, you can clean up by deleting the stack and its resources.
                  <div class="procedure">
                     <b>To delete the stack and its resources</b>
                     <ol>
                        <li>
                           From the CloudFormation console, select the <code class="code">MyWPTestStack</code> stack.

                        </li>
                        <li>
                           Choose <b>Delete Stack</b>.

                        </li>
                        <li>
                           In the confirmation message that appears, choose <b>Yes,
                              Delete</b>.
                        </li>
                     </ol>
                  </div>
                  The status for <code class="code">MyWPTestStack</code> changes to <code class="code">DELETE_IN_PROGRESS</code>. In
                  the same way you monitored the creation of the stack, you can monitor its deletion by using
                  the <b>Event</b> tab. When CloudFormation completes the deletion of the stack, it
                  removes the stack from the list. <br><br>
                  Congratulations! You successfully picked a template, created a stack, viewed, and used
                  its resources, and deleted the stack and its resources. Not only that, you were able to set
                  up a WordPress blog using a CloudFormation template.
                  Now it's time to learn more about templates so that you can modify existing templates or
               </div>
            </div>
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