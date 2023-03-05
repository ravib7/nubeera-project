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
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Updating a stack</h1>
      <ol class="breadcrumb mx-5 mt-3 px-0">
        <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
        <li class="breadcrumb-item"><a href="../../../">AWS</a></li>
        <li class="breadcrumb-item"><a href="../../">Contents</a></li>
        <li class="breadcrumb-item active">AWS CloudFormation</li>
      </ol>
      <div class="px-5 pb-5 pt-0 body-text">

        <div id="main-col-body">

          <h3 class="topictitle" id="updating.stacks.walkthrough">Walkthrough: Updating a stack</h3>

          With AWS CloudFormation, you can update the properties for resources in your existing stacks. These
          changes can range from simple configuration changes, such as updating the alarm threshold on a
          CloudWatch alarm, to more complex changes, such as updating the Amazon Machine Image (AMI)
          running on an Amazon EC2 instance. Many of the AWS resources in a template can be updated, and
          we continue to add support for more.
          This section walks through a simple progression of updates of a running stack. It shows how
          the use of templates makes it possible to use a version control system for the configuration of
          your AWS infrastructure, just as you use version control for the software you are running. We
          will walk through the following steps:
          <div class="orderedlist">

            <ol>
              <li>
                <a href="#updating.create.initial.stack">Create the initial stack</a> – create a stack using
                a base Amazon Linux AMI, installing the Apache Web Server and a simple PHP application using
                the AWS CloudFormation
                helper scripts.
              </li>
              <li>
                <a href="#update.application">Update the application</a> – update one
                of the files in the application and deploy the software using CloudFormation.
              </li>
              <li>

                <a href="#update.walkthrough.instance.type">Update the instance type</a> – change the
                instance type of the
                underlying Amazon EC2 instance.
              </li>
              <li>

                <a href="#update.walkthrough.ami">Update the AMI on an Amazon EC2 instance</a> – change
                the Amazon Machine Image (AMI) for the Amazon EC2 instance in your stack.
              </li>
              <li>
                <a href="#update.walkthrough.security.group">Add a key pair to an instance</a> – add an
                Amazon EC2 key pair to
                the instance, and then update the security group to allow SSH access to the instance.
              </li>
              <li>
                <a href="#update.walkthrough.change.resources">Change the stack's resources</a> – add and
                remove resources from
                the stack, converting it to an auto-scaled, load-balanced application by updating the
                template.
              </li>
            </ol>
          </div>
          <h2 id="updating.simple.application">A simple application</h2>

          We'll begin by creating a stack that we can use throughout the rest of this section. We
          have provided a simple template that launches a single instance PHP web application hosted on
          the Apache Web Server and running on an Amazon Linux AMI.
          The Apache Web Server, PHP, and the simple PHP application are all installed by the CloudFormation
          helper scripts that are installed by default on the Amazon Linux AMI. The
          following template snippet shows the metadata that describes the packages and files to
          install, in this case the Apache Web Server and the PHP infrastructure from the Yum repository
          for the Amazon Linux AMI. The snippet also shows the Services section, which ensures that the
          Apache Web Server is running. In the Properties section of the Amazon EC2 instance definition, the
          UserData property contains the CloudInit script that calls cfn-init to install the packages
          and files.
          <pre class="programlisting"><blockquote class="hljs bash">
  <span class="hljs-string">"WebServerInstance"</span>: <span>{</span>
    <span class="hljs-string">"Type"</span> : <span class="hljs-string">"AWS::EC2::Instance"</span>,
    <span class="hljs-string">"Metadata"</span> : <span>{</span>
      <span class="hljs-string">"AWS::CloudFormation::Init"</span> : <span>{</span>
        <span class="hljs-string">"config"</span> : <span>{</span>
          <span class="hljs-string">"packages"</span> : <span>{</span>
            <span class="hljs-string">"yum"</span> : <span>{</span>
              <span class="hljs-string">"httpd"</span>             : [],
              <span class="hljs-string">"php"</span>               : []
            }
          },

          <span class="hljs-string">"files"</span> : <span>{</span>

            <span class="hljs-string">"/var/www/html/index.php"</span> : <span>{</span>
              <span class="hljs-string">"content"</span> : <span>{</span> <span class="hljs-string">"Fn::Join"</span> : [<span class="hljs-string">""</span>, [
                <span class="hljs-string">"&lt;?php\n"</span>,
                <span class="hljs-string">"echo '&lt;h1&gt;AWS CloudFormation sample PHP application&lt;/h1&gt;';\n"</span>,
                <span class="hljs-string">"echo '&lt;p&gt;"</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"WelcomeMessage"</span> }, <span class="hljs-string">"&lt;/p&gt;';\n"</span>,
                <span class="hljs-string">"?&gt;\n"</span>
              ]]},
              <span class="hljs-string">"mode"</span>    : <span class="hljs-string">"000644"</span>,
              <span class="hljs-string">"owner"</span>   : <span class="hljs-string">"apache"</span>,
              <span class="hljs-string">"group"</span>   : <span class="hljs-string">"apache"</span>
            },
          },

          :

          <span class="hljs-string">"services"</span> : <span>{</span>
            <span class="hljs-string">"sysvinit"</span> : <span>{</span>
              <span class="hljs-string">"httpd"</span>    : <span>{</span> <span class="hljs-string">"enabled"</span> : <span class="hljs-string">"true"</span>, <span class="hljs-string">"ensureRunning"</span> : <span class="hljs-string">"true"</span> }
            }
          }
        }
      }
    },

    <span class="hljs-string">"Properties"</span>: <span>{</span>
      :
      <span class="hljs-string">"UserData"</span>       : <span>{</span> <span class="hljs-string">"Fn::Base64"</span> : <span>{</span> <span class="hljs-string">"Fn::Join"</span> : [<span class="hljs-string">""</span>, [
        <span class="hljs-string">"#!/bin/bash\n"</span>,
        <span class="hljs-string">"yum install -y aws-cfn-bootstrap\n"</span>,

        :

        <span class="hljs-string">"# Install the files and packages from the metadata\n"</span>,
        <span class="hljs-string">"/opt/aws/bin/cfn-init -v "</span>,
        <span class="hljs-string">"         --stack "</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"AWS::StackName"</span> },
        <span class="hljs-string">"         --resource WebServerInstance "</span>,
        <span class="hljs-string">"         --region "</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"AWS::Region"</span> }, <span class="hljs-string">"\n"</span>, 
        :
      ]]}}
    }
  },     </blockquote></pre>
          The application itself is a two-line "Hello World" example that's entirely defined within
          the template. For a real-world application, the files may be stored on Amazon S3, GitHub, or
          another repository and referenced from the template. CloudFormation can download packages (such as
          RPMs or RubyGems), and reference individual files and expand <code>.zip</code> and
          <code>.tar</code> files to create the application artifacts on the Amazon EC2
          instance.
          The template enables and configures the cfn-hup daemon to listen for changes to the
          configuration defined in the metadata for the Amazon EC2 instance. By using the cfn-hup daemon, you
          can update application software, such as the version of Apache or PHP, or you can update the
          PHP application file itself from AWS CloudFormation. The following snippet from the same Amazon EC2
          resource in
          the template shows the pieces necessary to configure cfn-hup to call cfn-init to update the
          software if any changes to the metadata are detected:
          <pre class="programlisting"><blockquote class="hljs bash">
  <span class="hljs-string">"WebServerInstance"</span>: <span>{</span>
    <span class="hljs-string">"Type"</span> : <span class="hljs-string">"AWS::EC2::Instance"</span>,
    <span class="hljs-string">"Metadata"</span> : <span>{</span>
      <span class="hljs-string">"AWS::CloudFormation::Init"</span> : <span>{</span>
        <span class="hljs-string">"config"</span> : <span>{</span>

            :

          <span class="hljs-string">"files"</span> : <span>{</span>

            :

            <span class="hljs-string">"/etc/cfn/cfn-hup.conf"</span> : <span>{</span>
              <span class="hljs-string">"content"</span> : <span>{</span> <span class="hljs-string">"Fn::Join"</span> : [<span class="hljs-string">""</span>, [
                <span class="hljs-string">"[main]\n"</span>,
                <span class="hljs-string">"stack="</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"AWS::StackName"</span> }, <span class="hljs-string">"\n"</span>,
                <span class="hljs-string">"region="</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"AWS::Region"</span> }, <span class="hljs-string">"\n"</span>
              ]]},
              <span class="hljs-string">"mode"</span>    : <span class="hljs-string">"000400"</span>,
              <span class="hljs-string">"owner"</span>   : <span class="hljs-string">"root"</span>,
              <span class="hljs-string">"group"</span>   : <span class="hljs-string">"root"</span>
            },

            <span class="hljs-string">"/etc/cfn/hooks.d/cfn-auto-reloader.conf"</span> : <span>{</span>
              <span class="hljs-string">"content"</span>: <span>{</span> <span class="hljs-string">"Fn::Join"</span> : [<span class="hljs-string">""</span>, [
                <span class="hljs-string">"[cfn-auto-reloader-hook]\n"</span>,
                <span class="hljs-string">"triggers=post.update\n"</span>,
                <span class="hljs-string">"path=Resources.WebServerInstance.Metadata.AWS::CloudFormation::Init\n"</span>,
                <span class="hljs-string">"action=/opt/aws/bin/cfn-init -s "</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"AWS::StackId"</span> }, <span class="hljs-string">" -r WebServerInstance "</span>,
                <span class="hljs-string">" --region     "</span>, <span>{</span> <span class="hljs-string">"Ref"</span> : <span class="hljs-string">"AWS::Region"</span> }, <span class="hljs-string">"\n"</span>,  
                <span class="hljs-string">"runas=root\n"</span>
              ]]}
            }
          },
          :
    },

    <span class="hljs-string">"Properties"</span>: <span>{</span>

         :

      <span class="hljs-string">"UserData"</span>       : <span>{</span> <span class="hljs-string">"Fn::Base64"</span> : <span>{</span> <span class="hljs-string">"Fn::Join"</span> : [<span class="hljs-string">""</span>, [

        :

        <span class="hljs-string">"# Start up the cfn-hup daemon to listen for changes to the Web Server metadata\n"</span>,
        <span class="hljs-string">"/opt/aws/bin/cfn-hup || error_exit 'Failed to start cfn-hup'\n"</span>,  

        :
      ]]}}
    }
  },     </blockquote></pre>

          To complete the stack, the template creates an Amazon EC2 security group.
          <pre class="programlisting"><blockquote class="hljs json"><span>{</span>
  <span class="hljs-attr">"AWSTemplateFormatVersion"</span> : <span class="hljs-string">"2010-09-09"</span>,

  <span class="hljs-attr">"Description"</span> : <span class="hljs-string">"AWS CloudFormation Sample Template: Sample template that can be used to test EC2 updates. **WARNING** This template creates an Amazon Ec2 Instance. You will be billed for the AWS resources used if you create a stack from this template."</span>,
  
  <span class="hljs-attr">"Parameters"</span> : <span>{</span>
          
    <span class="hljs-attr">"InstanceType"</span> : <span>{</span>
      <span class="hljs-attr">"Description"</span> : <span class="hljs-string">"WebServer EC2 instance type"</span>,
      <span class="hljs-attr">"Type"</span> : <span class="hljs-string">"String"</span>,
      <span class="hljs-attr">"Default"</span> : <span class="hljs-string">"t2.small"</span>,
      <span class="hljs-attr">"AllowedValues"</span> : [ 
        <span class="hljs-string">"t1.micro"</span>, 
        <span class="hljs-string">"t2.nano"</span>, 
        <span class="hljs-string">"t2.micro"</span>, 
        <span class="hljs-string">"t2.small"</span>, 
        <span class="hljs-string">"t2.medium"</span>, 
        <span class="hljs-string">"t2.large"</span>, 
        <span class="hljs-string">"m1.small"</span>, 
        <span class="hljs-string">"m1.medium"</span>, 
        <span class="hljs-string">"m1.large"</span>, 
        <span class="hljs-string">"m1.xlarge"</span>, 
        <span class="hljs-string">"m2.xlarge"</span>, 
        <span class="hljs-string">"m2.2xlarge"</span>, 
        <span class="hljs-string">"m2.4xlarge"</span>, 
        <span class="hljs-string">"m3.medium"</span>, 
        <span class="hljs-string">"m3.large"</span>, 
        <span class="hljs-string">"m3.xlarge"</span>, 
        <span class="hljs-string">"m3.2xlarge"</span>, 
        <span class="hljs-string">"m4.large"</span>, 
        <span class="hljs-string">"m4.xlarge"</span>, 
        <span class="hljs-string">"m4.2xlarge"</span>, 
        <span class="hljs-string">"m4.4xlarge"</span>, 
        <span class="hljs-string">"m4.10xlarge"</span>, 
        <span class="hljs-string">"c1.medium"</span>, 
        <span class="hljs-string">"c1.xlarge"</span>, 
        <span class="hljs-string">"c3.large"</span>, 
        <span class="hljs-string">"c3.xlarge"</span>, 
        <span class="hljs-string">"c3.2xlarge"</span>, 
        <span class="hljs-string">"c3.4xlarge"</span>, 
        <span class="hljs-string">"c3.8xlarge"</span>, 
        <span class="hljs-string">"c4.large"</span>, 
        <span class="hljs-string">"c4.xlarge"</span>, 
        <span class="hljs-string">"c4.2xlarge"</span>, 
        <span class="hljs-string">"c4.4xlarge"</span>, 
        <span class="hljs-string">"c4.8xlarge"</span>, 
        <span class="hljs-string">"g2.2xlarge"</span>, 
        <span class="hljs-string">"g2.8xlarge"</span>, 
        <span class="hljs-string">"r3.large"</span>, 
        <span class="hljs-string">"r3.xlarge"</span>, 
        <span class="hljs-string">"r3.2xlarge"</span>, 
        <span class="hljs-string">"r3.4xlarge"</span>, 
        <span class="hljs-string">"r3.8xlarge"</span>, 
        <span class="hljs-string">"i2.xlarge"</span>, 
        <span class="hljs-string">"i2.2xlarge"</span>, 
        <span class="hljs-string">"i2.4xlarge"</span>, 
        <span class="hljs-string">"i2.8xlarge"</span>, 
        <span class="hljs-string">"d2.xlarge"</span>, 
        <span class="hljs-string">"d2.2xlarge"</span>, 
        <span class="hljs-string">"d2.4xlarge"</span>, 
        <span class="hljs-string">"d2.8xlarge"</span>, 
        <span class="hljs-string">"hi1.4xlarge"</span>, 
        <span class="hljs-string">"hs1.8xlarge"</span>, 
        <span class="hljs-string">"cr1.8xlarge"</span>, 
        <span class="hljs-string">"cc2.8xlarge"</span>, 
        <span class="hljs-string">"cg1.4xlarge"</span>
      ],
      <span class="hljs-attr">"ConstraintDescription"</span> : <span class="hljs-string">"must be a valid EC2 instance type."</span>
    }
  },
    
  <span class="hljs-attr">"Mappings"</span> : <span>{</span>
    <span class="hljs-attr">"AWSInstanceType2Arch"</span> : <span>{</span>
      <span class="hljs-attr">"t1.micro"</span>    : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"t2.nano"</span>     : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"t2.micro"</span>    : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"t2.small"</span>    : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"t2.medium"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"t2.large"</span>    : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m1.small"</span>    : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m1.medium"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m1.large"</span>    : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m1.xlarge"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m2.xlarge"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m2.2xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m2.4xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m3.medium"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m3.large"</span>    : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m3.xlarge"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m3.2xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m4.large"</span>    : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m4.xlarge"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m4.2xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m4.4xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"m4.10xlarge"</span> : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"c1.medium"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"c1.xlarge"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"c3.large"</span>    : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"c3.xlarge"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"c3.2xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"c3.4xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"c3.8xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"c4.large"</span>    : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"c4.xlarge"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"c4.2xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"c4.4xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"c4.8xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"g2.2xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVMG2"</span>  },
      <span class="hljs-attr">"g2.8xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVMG2"</span>  },
      <span class="hljs-attr">"r3.large"</span>    : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"r3.xlarge"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"r3.2xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"r3.4xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"r3.8xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"i2.xlarge"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"i2.2xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"i2.4xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"i2.8xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"d2.xlarge"</span>   : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"d2.2xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"d2.4xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"d2.8xlarge"</span>  : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"hi1.4xlarge"</span> : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"hs1.8xlarge"</span> : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"cr1.8xlarge"</span> : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  },
      <span class="hljs-attr">"cc2.8xlarge"</span> : <span>{</span> <span class="hljs-attr">"Arch"</span> : <span class="hljs-string">"HVM64"</span>  }
    },

    <span class="hljs-attr">"AWSRegionArch2AMI"</span> : <span>{</span>
      <span class="hljs-attr">"us-east-1"</span>        : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-0ff8a91507f77f867"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"ami-0a584ac55a7631c0c"</span>},
      <span class="hljs-attr">"us-west-2"</span>        : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-a0cfeed8"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"ami-0e09505bc235aa82d"</span>},
      <span class="hljs-attr">"us-west-1"</span>        : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-0bdb828fd58c52235"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"ami-066ee5fd4a9ef77f1"</span>},
      <span class="hljs-attr">"eu-west-1"</span>        : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-047bb4163c506cd98"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"ami-0a7c483d527806435"</span>},
      <span class="hljs-attr">"eu-west-2"</span>        : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-f976839e"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"NOT_SUPPORTED"</span>},
      <span class="hljs-attr">"eu-west-3"</span>        : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-0ebc281c20e89ba4b"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"NOT_SUPPORTED"</span>},
      <span class="hljs-attr">"eu-central-1"</span>     : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-0233214e13e500f77"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"ami-06223d46a6d0661c7"</span>},
      <span class="hljs-attr">"ap-northeast-1"</span>   : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-06cd52961ce9f0d85"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"ami-053cdd503598e4a9d"</span>},
      <span class="hljs-attr">"ap-northeast-2"</span>   : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-0a10b2721688ce9d2"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"NOT_SUPPORTED"</span>},
      <span class="hljs-attr">"ap-northeast-3"</span>   : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-0d98120a9fb693f07"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"NOT_SUPPORTED"</span>},
      <span class="hljs-attr">"ap-southeast-1"</span>   : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-08569b978cc4dfa10"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"ami-0be9df32ae9f92309"</span>},
      <span class="hljs-attr">"ap-southeast-2"</span>   : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-09b42976632b27e9b"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"ami-0a9ce9fecc3d1daf8"</span>},
      <span class="hljs-attr">"ap-south-1"</span>       : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-0912f71e06545ad88"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"ami-097b15e89dbdcfcf4"</span>},
      <span class="hljs-attr">"us-east-2"</span>        : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-0b59bfac6be064b78"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"NOT_SUPPORTED"</span>},
      <span class="hljs-attr">"ca-central-1"</span>     : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-0b18956f"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"NOT_SUPPORTED"</span>},
      <span class="hljs-attr">"sa-east-1"</span>        : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-07b14488da8ea02a0"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"NOT_SUPPORTED"</span>},
      <span class="hljs-attr">"cn-north-1"</span>       : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-0a4eaf6c4454eda75"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"NOT_SUPPORTED"</span>},
      <span class="hljs-attr">"cn-northwest-1"</span>   : <span>{</span><span class="hljs-attr">"HVM64"</span> : <span class="hljs-string">"ami-6b6a7d09"</span>, <span class="hljs-attr">"HVMG2"</span> : <span class="hljs-string">"NOT_SUPPORTED"</span>}
    }
  },
    
  <span class="hljs-attr">"Resources"</span> : <span>{</span>   

    <span class="hljs-attr">"WebServerInstance"</span>: <span>{</span>  
      <span class="hljs-attr">"Type"</span> : <span class="hljs-string">"AWS::EC2::Instance"</span>,
      <span class="hljs-attr">"Metadata"</span> : <span>{</span>
        <span class="hljs-attr">"Comment"</span> : <span class="hljs-string">"Install a simple PHP application"</span>,
        <span class="hljs-attr">"AWS::CloudFormation::Init"</span> : <span>{</span>
          <span class="hljs-attr">"config"</span> : <span>{</span>
            <span class="hljs-attr">"packages"</span> : <span>{</span>
              <span class="hljs-attr">"yum"</span> : <span>{</span>
                <span class="hljs-attr">"httpd"</span>             : [],
                <span class="hljs-attr">"php"</span>               : []
              }
            },

            <span class="hljs-attr">"files"</span> : <span>{</span>

              <span class="hljs-attr">"/var/www/html/index.php"</span> : <span>{</span>
                <span class="hljs-attr">"content"</span> : <span>{</span> <span class="hljs-attr">"Fn::Join"</span> : [<span class="hljs-string">""</span>, [
                  <span class="hljs-string">"&lt;?php\n"</span>,
                  <span class="hljs-string">"echo '&lt;h1&gt;AWS CloudFormation sample PHP application&lt;/h1&gt;';\n"</span>,
                  <span class="hljs-string">"?&gt;\n"</span>
                ]]},
                <span class="hljs-attr">"mode"</span>    : <span class="hljs-string">"000644"</span>,
                <span class="hljs-attr">"owner"</span>   : <span class="hljs-string">"apache"</span>,
                <span class="hljs-attr">"group"</span>   : <span class="hljs-string">"apache"</span>
              },


              <span class="hljs-attr">"/etc/cfn/cfn-hup.conf"</span> : <span>{</span>
                <span class="hljs-attr">"content"</span> : <span>{</span> <span class="hljs-attr">"Fn::Join"</span> : [<span class="hljs-string">""</span>, [
                  <span class="hljs-string">"[main]\n"</span>,
                  <span class="hljs-string">"stack="</span>, <span>{</span> <span class="hljs-attr">"Ref"</span> : <span class="hljs-string">"AWS::StackId"</span> }, <span class="hljs-string">"\n"</span>,
                  <span class="hljs-string">"region="</span>, <span>{</span> <span class="hljs-attr">"Ref"</span> : <span class="hljs-string">"AWS::Region"</span> }, <span class="hljs-string">"\n"</span>
                ]]},
                <span class="hljs-attr">"mode"</span>    : <span class="hljs-string">"000400"</span>,
                <span class="hljs-attr">"owner"</span>   : <span class="hljs-string">"root"</span>,
                <span class="hljs-attr">"group"</span>   : <span class="hljs-string">"root"</span>
              },

              <span class="hljs-attr">"/etc/cfn/hooks.d/cfn-auto-reloader.conf"</span> : <span>{</span>
                <span class="hljs-attr">"content"</span>: <span>{</span> <span class="hljs-attr">"Fn::Join"</span> : [<span class="hljs-string">""</span>, [
                  <span class="hljs-string">"[cfn-auto-reloader-hook]\n"</span>,
                  <span class="hljs-string">"triggers=post.update\n"</span>,
                  <span class="hljs-string">"path=Resources.WebServerInstance.Metadata.AWS::CloudFormation::Init\n"</span>,
                  <span class="hljs-string">"action=/opt/aws/bin/cfn-init -s "</span>, <span>{</span> <span class="hljs-attr">"Ref"</span> : <span class="hljs-string">"AWS::StackId"</span> }, <span class="hljs-string">" -r WebServerInstance "</span>,
                                                   <span class="hljs-string">" --region     "</span>, <span>{</span> <span class="hljs-attr">"Ref"</span> : <span class="hljs-string">"AWS::Region"</span> }, <span class="hljs-string">"\n"</span>,
                  <span class="hljs-string">"runas=root\n"</span>
                ]]}
              }
            },

            <span class="hljs-attr">"services"</span> : <span>{</span>
              <span class="hljs-attr">"sysvinit"</span> : <span>{</span>
                <span class="hljs-attr">"httpd"</span>    : <span>{</span> <span class="hljs-attr">"enabled"</span> : <span class="hljs-string">"true"</span>, <span class="hljs-attr">"ensureRunning"</span> : <span class="hljs-string">"true"</span> },
                <span class="hljs-attr">"cfn-hup"</span> : <span>{</span> <span class="hljs-attr">"enabled"</span> : <span class="hljs-string">"true"</span>, <span class="hljs-attr">"ensureRunning"</span> : <span class="hljs-string">"true"</span>,
                    <span class="hljs-attr">"files"</span> : [<span class="hljs-string">"/etc/cfn/cfn-hup.conf"</span>, <span class="hljs-string">"/etc/cfn/hooks.d/cfn-auto-reloader.conf"</span>]}
              }
            }
          }
        }
      },

      <span class="hljs-attr">"Properties"</span>: <span>{</span>
        <span class="hljs-attr">"ImageId"</span> : <span>{</span> <span class="hljs-attr">"Fn::FindInMap"</span> : [ <span class="hljs-string">"AWSRegionArch2AMI"</span>, <span>{</span> <span class="hljs-attr">"Ref"</span> : <span class="hljs-string">"AWS::Region"</span> },
                          <span>{</span> <span class="hljs-attr">"Fn::FindInMap"</span> : [ <span class="hljs-string">"AWSInstanceType2Arch"</span>, <span>{</span> <span class="hljs-attr">"Ref"</span> : <span class="hljs-string">"InstanceType"</span> }, <span class="hljs-string">"Arch"</span> ] } ] },
        <span class="hljs-attr">"InstanceType"</span>   : <span>{</span> <span class="hljs-attr">"Ref"</span> : <span class="hljs-string">"InstanceType"</span> },
        <span class="hljs-attr">"SecurityGroups"</span> : [ <span>{</span><span class="hljs-attr">"Ref"</span> : <span class="hljs-string">"WebServerSecurityGroup"</span>} ],
        <span class="hljs-attr">"UserData"</span>       : <span>{</span> <span class="hljs-attr">"Fn::Base64"</span> : <span>{</span> <span class="hljs-attr">"Fn::Join"</span> : [<span class="hljs-string">""</span>, [
             <span class="hljs-string">"#!/bin/bash -xe\n"</span>,
             <span class="hljs-string">"yum install -y aws-cfn-bootstrap\n"</span>,

             <span class="hljs-string">"# Install the files and packages from the metadata\n"</span>,
             <span class="hljs-string">"/opt/aws/bin/cfn-init -v "</span>,
             <span class="hljs-string">"         --stack "</span>, <span>{</span> <span class="hljs-attr">"Ref"</span> : <span class="hljs-string">"AWS::StackName"</span> },
             <span class="hljs-string">"         --resource WebServerInstance "</span>,
             <span class="hljs-string">"         --region "</span>, <span>{</span> <span class="hljs-attr">"Ref"</span> : <span class="hljs-string">"AWS::Region"</span> }, <span class="hljs-string">"\n"</span>,

             <span class="hljs-string">"# Start up the cfn-hup daemon to listen for changes to the Web Server metadata\n"</span>,
             <span class="hljs-string">"/opt/aws/bin/cfn-hup || error_exit 'Failed to start cfn-hup'\n"</span>,  

             <span class="hljs-string">"# Signal the status from cfn-init\n"</span>,
             <span class="hljs-string">"/opt/aws/bin/cfn-signal -e $? "</span>,
             <span class="hljs-string">"         --stack "</span>, <span>{</span> <span class="hljs-attr">"Ref"</span> : <span class="hljs-string">"AWS::StackName"</span> },
             <span class="hljs-string">"         --resource WebServerInstance "</span>,
             <span class="hljs-string">"         --region "</span>, <span>{</span> <span class="hljs-attr">"Ref"</span> : <span class="hljs-string">"AWS::Region"</span> }, <span class="hljs-string">"\n"</span>
        ]]}}        
      },
      <span class="hljs-attr">"CreationPolicy"</span> : <span>{</span>
        <span class="hljs-attr">"ResourceSignal"</span> : <span>{</span>
          <span class="hljs-attr">"Timeout"</span> : <span class="hljs-string">"PT5M"</span>
        }
      }
    },

    <span class="hljs-attr">"WebServerSecurityGroup"</span> : <span>{</span>
      <span class="hljs-attr">"Type"</span> : <span class="hljs-string">"AWS::EC2::SecurityGroup"</span>,
      <span class="hljs-attr">"Properties"</span> : <span>{</span>
        <span class="hljs-attr">"GroupDescription"</span> : <span class="hljs-string">"Enable HTTP access via port 80"</span>,
        <span class="hljs-attr">"SecurityGroupIngress"</span> : [
          <span>{</span><span class="hljs-attr">"IpProtocol"</span> : <span class="hljs-string">"tcp"</span>, <span class="hljs-attr">"FromPort"</span> : <span class="hljs-string">"80"</span>, <span class="hljs-attr">"ToPort"</span> : <span class="hljs-string">"80"</span>, <span class="hljs-attr">"CidrIp"</span> : <span class="hljs-string">"0.0.0.0/0"</span>}
        ]
      }      
    }          
  },
  
  <span class="hljs-attr">"Outputs"</span> : <span>{</span>
    <span class="hljs-attr">"WebsiteURL"</span> : <span>{</span>
      <span class="hljs-attr">"Description"</span> : <span class="hljs-string">"Application URL"</span>,
      <span class="hljs-attr">"Value"</span> : <span>{</span> <span class="hljs-attr">"Fn::Join"</span> : [<span class="hljs-string">""</span>, [<span class="hljs-string">"http://"</span>, <span>{</span> <span class="hljs-attr">"Fn::GetAtt"</span> : [ <span class="hljs-string">"WebServerInstance"</span>, <span class="hljs-string">"PublicDnsName"</span> ]}]] }
    }
  }
}</blockquote></pre>
          This example uses a single Amazon EC2 instance, but you can use the same mechanisms on more
          complex solutions that make use of Elastic Load Balancing and Amazon EC2 Auto Scaling groups to manage
          a
          collection of application servers. There are, however, some special considerations for Auto Scaling
          groups. <br>

          <h2 id="updating.create.initial.stack">Create the initial stack</h2>


          For the purposes of this example, we’ll use the AWS Management Console to create an
          initial stack from the sample template.<br><br>
          <div class="awsdocs-note awsdocs-warning">
            <div class="awsdocs-note-title">
              <awsui-icon name="status-warning" variant="error"></awsui-icon><span>Warning</span>
            </div>
            <div class="awsdocs-note-text">
              Completing this procedure will deploy live AWS services. You will be charged the
              standard usage rates as long as these services are running.<br><br>
            </div>
          </div>
          <div class="procedure">
            <b>To create the stack from the AWS Management Console</b>
            <ol>
              <li>
                Copy the previous template and save it locally on your system as a text file. Note the
                location because you'll need to use the file in a subsequent step.
              </li>
              <li>
                Log in to the CloudFormation console at <a href="https://console.aws.amazon.com/cloudformation" rel="noopener noreferrer" target="_blank"><span>
                    https://console.aws.amazon.com/cloudformation</span>
                  <awsui-icon class="awsdocs-link-icon" name="external"></awsui-icon>
                </a>.
              </li>
              <li>
                Choose <b>Create New Stack</b>.
              </li>
              <li>
                In the <b>Create New Stack</b> wizard, on the <b>Select
                  Template</b> screen, type <code class="userinput">UpdateTutorial</code> in the
                <b>Name</b> field. On the same page, select <b>Upload a template to
                  Amazon S3</b> and browse to the file that you downloaded in the first step, and
                then choose <b>Next</b>.
              </li>
              <li>
                On the <b>Specify Parameters</b> screen, in the <b>Instance
                  Type</b> box, type <code class="userinput">t1.micro</code>. Then choose
                <b>Next</b>.
              </li>
              <li>
                On the <b>Options</b> screen, choose <b>Next</b>.
              </li>
              <li>
                On the <b>Review</b> screen, verify that all the settings are as you
                want them, and then choose <b>Create</b>.
              </li>
            </ol>
          </div>
          After the status of your stack is CREATE_COMPLETE, the output tab will display the URL of
          your website. If you choose the value of the WebsiteURL output, you will see your new PHP
          application working.<br><br>

          <h2 id="update.application">Update the application</h2>


          Now that we have deployed the stack, let's update the application. We'll make a simple
          change to the text that's printed out by the application. To do so, we'll add an echo command
          to the index.php file as shown in this template snippet:
          <pre class="programlisting"><blockquote class="nohighlight">"WebServerInstance": <span>{</span>
      "Type" : "AWS::EC2::Instance",
      "Metadata" : <span>{</span>
        "AWS::CloudFormation::Init" : <span>{</span>
          "config" : <span>{</span>
              :

            "files" : <span>{</span>

              "/var/www/html/index.php" : <span>{</span>
                "content" : <span>{</span> "Fn::Join" : ["", [
                  "&lt;?php\n",
                  "echo '&lt;h1&gt;AWS CloudFormation sample PHP application&lt;/h1&gt;';\n",
  <blockquote class="replaceable">"echo '&lt;p&gt;Updated version via UpdateStack&lt;/p&gt;';\n ",</blockquote> "?&gt;\n"
                ]
                  ]
                     },
                "mode"    : "000644",
                "owner"   : "apache",
                "group"   : "apache"
              },

              :

      }
    },</blockquote></pre>
          Use a text editor to manually edit the template file that you saved locally.
          Now, we'll update the stack.<br><br>

          <div class="procedure">
            <b>To update the stack from the AWS Management Console</b>
            <ol>
              <li>
                Log in to the AWS CloudFormation console, at: <a href="https://console.aws.amazon.com/cloudformation" rel="noopener noreferrer" target="_blank"><span>
                    https://console.aws.amazon.com/cloudformation</span>
                  <awsui-icon class="awsdocs-link-icon" name="external"></awsui-icon>
                </a>.
              </li>
              <li>
                On the AWS CloudFormation dashboard, choose the stack you created previously, and then choose
                <b>Update Stack</b>.
              </li>
              <li>
                In the <b>Update Stack</b> wizard, on the <b>Select
                  Template</b> screen, select <b>Upload a template to Amazon S3</b>,
                select the modified template, and then choose <b>Next</b>.
              </li>
              <li>
                On the <b>Options</b> screen, choose <b>Next</b>.
              </li>
              <li>
                Choose <b>Next</b> because the stack doesn't have a stack policy. All
                resources can be updated without an overriding policy.
              </li>
              <li>
                On the <b>Review</b> screen, verify that all the settings are as you
                want them, and then choose <b>Update</b>.<br><br>
              </li>
            </ol>
          </div>
          If you update the stack from the AWS Management Console, you will notice that the parameters that were
          used to create the initial stack are prepopulated on the <b>Parameters</b> page
          of the <b>Update Stack</b> wizard. If you use the
          <code class="code">aws cloudformation update-stack</code> command, be sure to type in the same values
          for the
          parameters that you used originally to create the stack.<br><br>
          When your stack is in the UPDATE_COMPLETE state, you can choose the WebsiteURL output
          value again to verify that the changes to your application have taken effect. By default, the
          cfn-hup daemon runs every 15 minutes, so it may take up to 15 minutes for the application to
          change once the stack has been updated.<br><br>
          To see the set of resources that were updated, go to the AWS CloudFormation console. On the
          <b>Events</b> tab, look at the stack events. In this particular case, the metadata for the Amazon EC2
          instance WebServerInstance was updated, which caused AWS CloudFormation to also reevaluate the other
          resources (<code class="code">WebServerSecurityGroup</code>) to ensure that there were no other
          changes. None of the other stack resources were modified. AWS CloudFormation will update only those
          resources in the stack that are affected
          by any changes to the stack. Such changes can be direct, such as property or metadata changes, or they
          can be due to dependencies or data flows through Ref, GetAtt, or other intrinsic template functions.<br><br>

          This simple update illustrates the process; however, you can make much more complex
          changes to the files and packages that are deployed to your Amazon EC2 instances. For example, you
          might decide that you need to add MySQL to the instance, along with PHP support for MySQL. To
          do so, simply add the additional packages and files along with any additional services to the
          configuration and then update the stack to deploy the changes. In the following template
          snippet,<br><br>
          <pre class="programlisting"><blockquote class="nohighlight">    "WebServerInstance": <span>{</span>
      "Type" : "AWS::EC2::Instance",
      "Metadata" : <span>{</span>
        "Comment" : "Install a simple PHP application",
        "AWS::CloudFormation::Init" : <span>{</span>
          "config" : <span>{</span>
            "packages" : <span>{</span>
              "yum" : <span>{</span>
                "httpd"             : [],
                "php"               : []<blockquote class="replaceable">,
                "php-mysql"         : [],
                "mysql-server"      : [],
                "mysql-libs"        : [],
                "mysql"             : []</blockquote>
              }
            },

            :

            "services" : <span>{</span>
              "sysvinit" : <span>{</span>
                "httpd"    : <span>{</span> "enabled" : "true", "ensureRunning" : "true" },
                "cfn-hup" : <span>{</span> "enabled" : "true", "ensureRunning" : "true",
                    "files" : ["/etc/cfn/cfn-hup.conf", "/etc/cfn/hooks.d/cfn-auto-reloader.conf"]},
                <blockquote class="replaceable">"mysqld"   : <span>{</span> "enabled" : "true", "ensureRunning" : "true" }</blockquote>
              }
            }
          }
        }
      },

      "Properties": <span>{</span>
           :
      }
    }</blockquote></pre>

          You can update the CloudFormation metadata to update to new versions of the packages used by the
          application. In the previous examples, the version property for each package is empty, indicating that
          cfn-init should install the latest version of the package.
          <pre class="programlisting"><blockquote class="">     "packages" : <span>{</span>
       "yum" : <span>{</span>
         "httpd"             : [],
         "php"               : []
      }</blockquote></pre>
          You can optionally specify a version string for a package. If you change the version
          string in subsequent update stack calls, the new version of the package will be deployed.
          Here's an example of using version numbers for RubyGems packages. Any package that supports
          versioning can have specific versions.
          <pre class="programlisting"><blockquote class="">  "packages" : <span>{</span>
    "rubygems" : <span>{</span>
      "mysql"           : [],
      "rubygems-update" : ["1.6.2"],
      "rake"            : ["0.8.7"],
      "rails"           : ["2.3.11"]
    }
    }</blockquote></pre>
          <h3 id="updating.autoscaling">Updating Auto Scaling groups</h3>

          If you are using Auto Scaling groups in your template, as opposed to Amazon EC2 instance resources,
          updating the application will work in exactly the same way; however, AWS CloudFormation doesn't
          provide
          any synchronization or serialization across the Amazon EC2 instances in an Auto Scaling group. The
          cfn-hup daemon on each host will run independently and update the application on its own
          schedule. When you use cfn-hup to update the on-instance configuration, each instance will
          run the cfn-hup hooks on its own schedule; there is no coordination between the instances in
          the stack. You should consider the following:<br>
          <div class="itemizedlist">


            <ul class="itemizedlist" type="disc">
              <li class="listitem">
                If the cfn-hup changes run on all Amazon EC2 instances in the Auto Scaling group at the same
                time, your service might be unavailable during the update.
              </li>
              <li class="listitem">
                If the cfn-hup changes run at different times, old and new versions of the software
                may be running at the same.
              </li>
            </ul>
          </div>
          To avoid these issues, consider forcing a rolling update on your instances in the Auto Scaling group.


          <h2 id="update.walkthrough.changing.resource.properties">Changing resource
            properties</h2>


          With AWS CloudFormation, you can change the properties of an existing resource in the stack. The
          following sections describe various updates that solve specific problems; however, any
          property of any resource that supports updating in the stack can be modified as
          necessary.
          <h3 id="update.walkthrough.instance.type">Update the instance type</h3>

          The stack we have built so far uses a t1.micro Amazon EC2 instance. Let's suppose that your
          newly created website is getting more traffic than a t1.micro instance can handle, and now
          you want to move to an m1.small Amazon EC2 instance type. If the architecture of the instance
          type changes, the instance will be created with a different AMI. If you check out the
          mappings in the template, you will see that both the t1.micro and m1.small are the same
          architectures and use the same Amazon Linux AMIs.
          <pre class="programlisting"><blockquote class="">  "Mappings" : <span>{</span>
    "AWSInstanceType2Arch" : <span>{</span>
      "t1.micro"    : <span>{</span> "Arch" : "HVM64"  },
      "t2.nano"     : <span>{</span> "Arch" : "HVM64"  },
      "t2.micro"    : <span>{</span> "Arch" : "HVM64"  },
      "t2.small"    : <span>{</span> "Arch" : "HVM64"  },
      "t2.medium"   : <span>{</span> "Arch" : "HVM64"  },
      "t2.large"    : <span>{</span> "Arch" : "HVM64"  },
      "m1.small"    : <span>{</span> "Arch" : "HVM64"  },
      "m1.medium"   : <span>{</span> "Arch" : "HVM64"  },
      "m1.large"    : <span>{</span> "Arch" : "HVM64"  },
      "m1.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "m2.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "m2.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "m2.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "m3.medium"   : <span>{</span> "Arch" : "HVM64"  },
      "m3.large"    : <span>{</span> "Arch" : "HVM64"  },
      "m3.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "m3.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "m4.large"    : <span>{</span> "Arch" : "HVM64"  },
      "m4.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "m4.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "m4.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "m4.10xlarge" : <span>{</span> "Arch" : "HVM64"  },
      "c1.medium"   : <span>{</span> "Arch" : "HVM64"  },
      "c1.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "c3.large"    : <span>{</span> "Arch" : "HVM64"  },
      "c3.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "c3.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "c3.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "c3.8xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "c4.large"    : <span>{</span> "Arch" : "HVM64"  },
      "c4.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "c4.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "c4.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "c4.8xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "g2.2xlarge"  : <span>{</span> "Arch" : "HVMG2"  },
      "g2.8xlarge"  : <span>{</span> "Arch" : "HVMG2"  },
      "r3.large"    : <span>{</span> "Arch" : "HVM64"  },
      "r3.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "r3.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "r3.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "r3.8xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "i2.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "i2.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "i2.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "i2.8xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "d2.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "d2.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "d2.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "d2.8xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "hi1.4xlarge" : <span>{</span> "Arch" : "HVM64"  },
      "hs1.8xlarge" : <span>{</span> "Arch" : "HVM64"  },
      "cr1.8xlarge" : <span>{</span> "Arch" : "HVM64"  },
      "cc2.8xlarge" : <span>{</span> "Arch" : "HVM64"  }
    },
    "AWSRegionArch2AMI" : <span>{</span>
      "us-east-1"        : <span>{</span>"HVM64" : "ami-0ff8a91507f77f867", "HVMG2" : "ami-0a584ac55a7631c0c"},
      "us-west-2"        : <span>{</span>"HVM64" : "ami-a0cfeed8", "HVMG2" : "ami-0e09505bc235aa82d"},
      "us-west-1"        : <span>{</span>"HVM64" : "ami-0bdb828fd58c52235", "HVMG2" : "ami-066ee5fd4a9ef77f1"},
      "eu-west-1"        : <span>{</span>"HVM64" : "ami-047bb4163c506cd98", "HVMG2" : "ami-0a7c483d527806435"},
      "eu-west-2"        : <span>{</span>"HVM64" : "ami-f976839e", "HVMG2" : "NOT_SUPPORTED"},
      "eu-west-3"        : <span>{</span>"HVM64" : "ami-0ebc281c20e89ba4b", "HVMG2" : "NOT_SUPPORTED"},
      "eu-central-1"     : <span>{</span>"HVM64" : "ami-0233214e13e500f77", "HVMG2" : "ami-06223d46a6d0661c7"},
      "ap-northeast-1"   : <span>{</span>"HVM64" : "ami-06cd52961ce9f0d85", "HVMG2" : "ami-053cdd503598e4a9d"},
      "ap-northeast-2"   : <span>{</span>"HVM64" : "ami-0a10b2721688ce9d2", "HVMG2" : "NOT_SUPPORTED"},
      "ap-northeast-3"   : <span>{</span>"HVM64" : "ami-0d98120a9fb693f07", "HVMG2" : "NOT_SUPPORTED"},
      "ap-southeast-1"   : <span>{</span>"HVM64" : "ami-08569b978cc4dfa10", "HVMG2" : "ami-0be9df32ae9f92309"},
      "ap-southeast-2"   : <span>{</span>"HVM64" : "ami-09b42976632b27e9b", "HVMG2" : "ami-0a9ce9fecc3d1daf8"},
      "ap-south-1"       : <span>{</span>"HVM64" : "ami-0912f71e06545ad88", "HVMG2" : "ami-097b15e89dbdcfcf4"},
      "us-east-2"        : <span>{</span>"HVM64" : "ami-0b59bfac6be064b78", "HVMG2" : "NOT_SUPPORTED"},
      "ca-central-1"     : <span>{</span>"HVM64" : "ami-0b18956f", "HVMG2" : "NOT_SUPPORTED"},
      "sa-east-1"        : <span>{</span>"HVM64" : "ami-07b14488da8ea02a0", "HVMG2" : "NOT_SUPPORTED"},
      "cn-north-1"       : <span>{</span>"HVM64" : "ami-0a4eaf6c4454eda75", "HVMG2" : "NOT_SUPPORTED"},
      "cn-northwest-1"   : <span>{</span>"HVM64" : "ami-6b6a7d09", "HVMG2" : "NOT_SUPPORTED"}
    }</blockquote></pre>
          Let's use the template that we modified in the previous section to change the instance
          type. Because InstanceType was an input parameter to the template, we don't need to modify
          the template; we can change the value of the parameter in the Stack Update wizard, on the
          Specify Parameters page.<br><br>
          <div class="procedure">
            <b>To update the stack from the AWS Management Console</b>
            <ol>
              <li>
                Log in to the AWS CloudFormation console at <a href="https://console.aws.amazon.com/cloudformation" rel="noopener noreferrer" target="_blank"><span>https://console.aws.amazon.com/cloudformation</span>
                  <awsui-icon class="awsdocs-link-icon" name="external"></awsui-icon>
                </a>.
              </li>
              <li>
                On the CloudFormation dashboard, choose the stack you created previously, and
                then choose <b>Update Stack</b>.
              </li>
              <li>
                In the <b>Update Stack</b> wizard, on the <b>Select
                  Template</b> screen, select <b>Use current template</b>, and then
                choose <b>Next</b>.
                The Specify Details page appears with the parameters that were used to create the
                initial stack are pre-populated in the <b>Specify Parameters</b>
                section.
              </li>
              <li>
                Change the value of the <b>InstanceType</b> text box from
                <code class="code">t1.micro</code> to <code class="code">m1.small</code>. Then, choose
                <b>Next</b>.
              </li>
              <li>
                On the <b>Options</b> screen, choose <b>Next</b>.
              </li>
              <li>
                Choose <b>Next</b> because the stack doesn't have a stack policy. All
                resources can be updated without an overriding policy.
              </li>
              <li>
                On the <b>Review</b> screen, verify that all the settings are as you
                want them, and then choose <b>Update</b>.
              </li>
            </ol>
          </div>
          You can dynamically change the instance type of an EBS-backed Amazon EC2 instance by starting
          and stopping the instance. AWS CloudFormation tries to optimize the change by updating the instance
          type
          and restarting the instance, so the instance ID doesn't change. When the instance is
          restarted, however, the public IP address of the instance does change. To ensure that the
          Elastic IP address is bound correctly after the change, AWS CloudFormation will also update the
          Elastic
          IP address. You can see the changes in the AWS CloudFormation console on the Events tab.
          To check the instance type from the AWS Management Console, open the Amazon EC2 console, and locate
          your instance there.

          <h3 id="update.walkthrough.ami">Update the AMI on an Amazon EC2 instance</h3>

          Now let's look at how we might change the Amazon Machine Image (AMI) running on the
          instance. We will initiate the AMI change by updating the stack to use a new Amazon EC2 instance
          type, such as t2.medium, which is an HVM64 instance type.<br><br>
          As in the previous section, we’ll use our existing template to change the instance type
          used by our example stack. In the Stack Update wizard, on the Specify Parameters page,
          change the value of the Instance Type.<br><br>
          In this case, we can't simply start and stop the instance to modify the AMI; AWS CloudFormation
          considers this a change to an immutable property of the resource. In order to make a change
          to an immutable property, AWS CloudFormation must launch a replacement resource, in this case a new
          Amazon EC2
          instance running the new AMI.<br><br>
          After the new instance is running, AWS CloudFormation updates the other resources in the stack to
          point to the new resource. When all new resources are created, the old resource is deleted,
          a process known as UPDATE_CLEANUP. This time, you will notice that the instance ID and
          application URL of the instance in the stack has changed as a result of the update. The
          events in the Event table contain a description "Requested update has a change to an
          immutable property and hence creating a new physical resource" to indicate that a resource
          was replaced.<br><br>
          If you have application code written into the AMI that you want to update, you can use
          the same stack update mechanism to update the AMI to load your new application.<br><br>
          <div class="procedure">
            <b>To update the AMI for an instance on your stack</b>
            <ol>
              <li>
                Create your new AMIs containing your application or operating system changes.Creating
                your own
                AMIs in the <em>Amazon EC2 User Guide for Linux Instances</em>.
              </li>
              <li>
                Update your template to incorporate the new AMI IDs.
              </li>
              <li>
                Update the stack, either from the AWS Management Console as explained in <a href="#update.application">Update the application</a> or by using the AWS
                command <code class="code">aws cloudformation update-stack</code>
              </li>
            </ol>
          </div>
          When you update the stack, CloudFormation detects that the AMI ID has changed, and then it
          triggers a stack update in the same way as we initiated the one above.

          <h3 id="update.walkthrough.launch.config">Update the Amazon EC2 launch configuration for an Auto Scaling
            group</h3>

          If you are using Auto Scaling groups rather than Amazon EC2 instances, the process of updating the
          running instances is a little different. With Auto Scaling resources, the configuration of the Amazon
          EC2
          instances, such as the instance type or the AMI ID is encapsulated in the Auto Scaling launch
          configuration. You can make changes to the launch configuration in the same way as we made
          changes to the Amazon EC2 instance resources in the previous sections. However, changing the
          launch configuration doesn't impact any of the running Amazon EC2 instances in the Auto Scaling group.
          An
          updated launch configuration applies only to new instances that are created after the
          update.<br><br>
          If you want to propagate the change to your launch configuration across all the
          instances in your Auto Scaling group, you can use an update attribute.

          <h2 id="update.walkthrough.adding.properties">Adding resource properties</h2>


          So far, we've looked at changing existing properties of a resource in a template. You can
          also add properties that weren't originally specified in the template. To illustrate that,
          we'll add an Amazon EC2 key pair to an existing EC2 instance and then open up port 22 in the
          Amazon EC2 Security Group so that you can use Secure Shell (SSH) to access the
          instance.
          <h3 id="update.walkthrough.security.group">Add a key pair to an instance</h3>

          <div class="procedure">
            <b>To add SSH access to an existing Amazon EC2 instance</b>
            <ol>
              <li>
                Add two additional parameters to the template to pass in the name of an existing
                Amazon EC2 key pair and SSH location.
                <pre class="programlisting"><blockquote class="">  "Parameters" : <span>{</span>

    "KeyName" : <span>{</span>
      "Description" : "Name of an existing Amazon EC2 key pair for SSH access",
      "Type": "AWS::EC2::KeyPair::KeyName"
    },
    "SSHLocation" : <span>{</span>
      "Description" : " The IP address range that can be used to SSH to the EC2 instances",
      "Type": "String",
      "MinLength": "9",
      "MaxLength": "18",
      "Default": "0.0.0.0/0",
      "AllowedPattern": "(\\d<span>{</span>1,3})\\.(\\d<span>{</span>1,3})\\.(\\d<span>{</span>1,3})\\.(\\d<span>{</span>1,3})/(\\d<span>{</span>1,2})",
      "ConstraintDescription": "must be a valid IP CIDR range of the form x.x.x.x/x."
    }  
    :
  },
</blockquote></pre>
              </li>
              <li>
                Add the KeyName property to the Amazon EC2 instance.
                <pre class="programlisting"><blockquote class="nohighlight">          "WebServerInstance": <span>{</span>
          "Type" : "AWS::EC2::Instance",
          :
          "Properties": <span>{</span>
          :
         <blockquote class="replaceable"> "KeyName" : <span>{</span> "Ref" : "KeyName" },</blockquote>
          :
          }
          },
</blockquote></pre>
              </li>
              <li>
                Add port 22 and the SSH location to the ingress rules for the Amazon EC2 security
                group.
                <pre class="programlisting"><blockquote class="">    "WebServerSecurityGroup" : <span>{</span>
      "Type" : "AWS::EC2::SecurityGroup",
      "Properties" : <span>{</span>
        "GroupDescription" : "Enable HTTP and SSH",
        "SecurityGroupIngress" : [
          <span>{</span>"IpProtocol" : "tcp", "FromPort" : "22", "ToPort" : "22", "CidrIp" : <span>{</span> "Ref" : "SSHLocation"}},
          <span>{</span>"IpProtocol" : "tcp", "FromPort" : "80", "ToPort" : "80", "CidrIp" :  "0.0.0.0/0"}
        ]
      }
    },    </blockquote></pre>
              </li>
              <li>
                Update the stack, either from the AWS Management Console as explained in <a href="#update.application">Update the application</a> or by using the AWS
                command <a href="https://docs.aws.amazon.com/cli/latest/reference/cloudformation/update-stack.html"><code class="code">aws cloudformation update-stack</code></a>.
              </li>
            </ol>
          </div>

          <h2 id="update.walkthrough.change.resources">Change the stack's resources</h2>


          Application needs can change over time, AWS CloudFormation allows you to change the set of resources
          that make up the stack. To demonstrate, we’ll take the single instance application from <a href="#update.walkthrough.adding.properties">Adding resource properties</a> and convert it to an
          auto scaled,
          load-balanced application by updating the stack.
          This will create a simple, single instance PHP application using an Elastic IP address.
          We'll now turn the application into a highly available, auto scaled, load balanced application
          by changing its resources during an update.
          <div class="procedure">
            <ol>
              <li>
                Add an Elastic Load Balancer resource.
                <pre class="programlisting"><blockquote class="">    "ElasticLoadBalancer" : <span>{</span>
      "Type" : "AWS::ElasticLoadBalancing::LoadBalancer",
      "Properties" : <span>{</span>
        "CrossZone" : "true",
        "AvailabilityZones" : <span>{</span> "Fn::GetAZs" : "" },
        "LBCookieStickinessPolicy" : [ <span>{</span>
          "PolicyName" : "CookieBasedPolicy",
          "CookieExpirationPeriod" : "30"
        } ],
        "Listeners" : [ <span>{</span>
          "LoadBalancerPort" : "80",
          "InstancePort" : "80",
          "Protocol" : "HTTP",
          "PolicyNames" : [ "CookieBasedPolicy" ]
        } ],
        "HealthCheck" : <span>{</span>
          "Target" : "HTTP:80/",
          "HealthyThreshold" : "2",
          "UnhealthyThreshold" : "5",
          "Interval" : "10",
          "Timeout" : "5"
        }
      }
    }</blockquote></pre>
              </li>
              <li>
                Convert the EC2 instance in the template into an Auto Scaling Launch Configuration. The
                properties are identical, so we only need to change the type name from:
                <pre class="programlisting"><blockquote class="nohighlight">
<blockquote class="replaceable">"WebServerInstance"</blockquote>: <span>{</span>
  "Type" : <blockquote class="replaceable">"AWS::EC2::Instance"</blockquote>,</blockquote></pre>
                to:
                <pre class="programlisting"><blockquote class="nohighlight">
<blockquote class="replaceable">"LaunchConfig"</blockquote>: <span>{</span>
  "Type" : <blockquote class="replaceable">"AWS::AutoScaling::LaunchConfiguration"</blockquote>,</blockquote></pre>
                For clarity in the template, we changed the name of the resource from
                <em>WebServerInstance</em> to <em>LaunchConfig</em>, so you'll
                need to update the resource name referenced by cfn-init and cfn-hup (just search for
                WebServerInstance and replace it with LaunchConfig, except for cfn-signal). For
                cfn-signal, you'll need to signal the Auto Scaling group (WebServerGroup) not the instance,
                as
                shown in the following snippet:
                <pre class="programlisting"><blockquote class="nohighlight">             "# Signal the status from cfn-init\n",
             "/opt/aws/bin/cfn-signal -e $? ",
             "         --stack ", <span>{</span> "Ref" : "AWS::StackName" },
             "         --resource <blockquote class="replaceable">WebServerGroup</blockquote> ",
             "         --region ", <span>{</span> "Ref" : "AWS::Region" }, "\n"</blockquote></pre>
              </li>
              <li>
                Add an Auto Scaling group resource.
                <pre class="programlisting"><blockquote class="">    "WebServerGroup" : <span>{</span>
      "Type" : "AWS::AutoScaling::AutoScalingGroup",
      "Properties" : <span>{</span>
        "AvailabilityZones" : <span>{</span> "Fn::GetAZs" : "" },
        "LaunchConfigurationName" : <span>{</span> "Ref" : "LaunchConfig" },
        "MinSize" : "1",
        "DesiredCapacity" : "1",
        "MaxSize" : "5",
        "LoadBalancerNames" : [ <span>{</span> "Ref" : "ElasticLoadBalancer" } ]
      },
      "CreationPolicy" : <span>{</span>
        "ResourceSignal" : <span>{</span>
          "Timeout" : "PT15M"
        }
      },
      "UpdatePolicy": <span>{</span>
        "AutoScalingRollingUpdate": <span>{</span>
          "MinInstancesInService": "1",
          "MaxBatchSize": "1",
          "PauseTime" : "PT15M",
          "WaitOnResourceSignals": "true"
        }
      }
    }</blockquote></pre>
              </li>
              <li>
                Update the Security Group definition to lock down the traffic to the instances from
                the load balancer.
                <pre class="programlisting"><blockquote class="">    "WebServerSecurityGroup" : <span>{</span>
      "Type" : "AWS::EC2::SecurityGroup",
      "Properties" : <span>{</span>
        "GroupDescription" : "Enable HTTP access via port 80 locked down to the ELB and SSH access",
        "SecurityGroupIngress" : [
          <span>{</span>"IpProtocol" : "tcp", "FromPort" : "80", "ToPort" : "80", "SourceSecurityGroupOwnerId" : <span>{</span>"Fn::GetAtt" : ["ElasticLoadBalancer", "SourceSecurityGroup.OwnerAlias"]},
"SourceSecurityGroupName" : <span>{</span>"Fn::GetAtt" : ["ElasticLoadBalancer", "SourceSecurityGroup.GroupName"]}},
          <span>{</span>"IpProtocol" : "tcp", "FromPort" : "22", "ToPort" : "22", "CidrIp" : <span>{</span> "Ref" : "SSHLocation"}}
        ]
      }
    }</blockquote></pre>
              </li>
              <li>
                Update the Outputs to return the DNS Name of the Elastic Load Balancer as the location
                of the application from:
                <pre class="programlisting"><blockquote class="nohighlight">
"WebsiteURL" : <span>{</span>
  "Value" : <span>{</span> "Fn::Join" : ["", ["http://", 
      <span>{</span> "Fn::GetAtt" : [ "<blockquote class="replaceable">WebServerInstance</blockquote>", "<blockquote class="replaceable">PublicDnsName</blockquote>" ]}]]},
  "Description" : "Application URL"
}              </blockquote></pre>
                to:
                <pre class="programlisting"><blockquote class="nohighlight">
"WebsiteURL" : <span>{</span>
  "Value" : <span>{</span> "Fn::Join" : ["", ["http://", 
      <span>{</span> "Fn::GetAtt" : [ "<blockquote class="replaceable">ElasticLoadBalancer</blockquote>", "<blockquote class="replaceable">DNSName</blockquote>" ]}]]},
  "Description" : "Application URL"
}              </blockquote></pre>
              </li>
            </ol>
          </div>
          For reference, the following sample shows the complete template. If you use this template
          to update the stack, you will convert your simple, single instance application into a highly
          available, Multi-AZ, auto scaled and load balanced application. Only the resources that need
          to be updated will be altered, so had there been any data stores for this application, the
          data would have remained intact. Now, you can use AWS CloudFormation to grow or enhance your stacks as
          your
          requirements change.
          <pre class="programlisting"><blockquote class=""><span>{</span>
  "AWSTemplateFormatVersion" : "2010-09-09",

  "Description" : "AWS CloudFormation Sample Template: Sample template that can be used to test EC2 updates. **WARNING** This template creates an Amazon Ec2 Instance. You will be billed for the AWS resources used if you create a stack from this template.",
  
  "Parameters" : <span>{</span>
  
    "KeyName": <span>{</span>
      "Description" : "Name of an existing EC2 KeyPair to enable SSH access to the instance",
      "Type": "AWS::EC2::KeyPair::KeyName",
      "ConstraintDescription" : "must be the name of an existing EC2 KeyPair."
    },

    "SSHLocation" : <span>{</span>
      "Description" : " The IP address range that can be used to SSH to the EC2 instances",
      "Type": "String",
      "MinLength": "9",
      "MaxLength": "18",
      "Default": "0.0.0.0/0",
      "AllowedPattern": "(\\d<span>{</span>1,3})\\.(\\d<span>{</span>1,3})\\.(\\d<span>{</span>1,3})\\.(\\d<span>{</span>1,3})/(\\d<span>{</span>1,2})",
      "ConstraintDescription": "must be a valid IP CIDR range of the form x.x.x.x/x."
    },
    
    "InstanceType" : <span>{</span>
      "Description" : "WebServer EC2 instance type",
      "Type" : "String",
      "Default" : "t2.small",
      "AllowedValues" : [ 
        "t1.micro", 
        "t2.nano", 
        "t2.micro", 
        "t2.small", 
        "t2.medium", 
        "t2.large", 
        "m1.small", 
        "m1.medium", 
        "m1.large", 
        "m1.xlarge", 
        "m2.xlarge", 
        "m2.2xlarge", 
        "m2.4xlarge", 
        "m3.medium", 
        "m3.large", 
        "m3.xlarge", 
        "m3.2xlarge", 
        "m4.large", 
        "m4.xlarge", 
        "m4.2xlarge", 
        "m4.4xlarge", 
        "m4.10xlarge", 
        "c1.medium", 
        "c1.xlarge", 
        "c3.large", 
        "c3.xlarge", 
        "c3.2xlarge", 
        "c3.4xlarge", 
        "c3.8xlarge", 
        "c4.large", 
        "c4.xlarge", 
        "c4.2xlarge", 
        "c4.4xlarge", 
        "c4.8xlarge", 
        "g2.2xlarge", 
        "g2.8xlarge", 
        "r3.large", 
        "r3.xlarge", 
        "r3.2xlarge", 
        "r3.4xlarge", 
        "r3.8xlarge", 
        "i2.xlarge", 
        "i2.2xlarge", 
        "i2.4xlarge", 
        "i2.8xlarge", 
        "d2.xlarge", 
        "d2.2xlarge", 
        "d2.4xlarge", 
        "d2.8xlarge", 
        "hi1.4xlarge", 
        "hs1.8xlarge", 
        "cr1.8xlarge", 
        "cc2.8xlarge", 
        "cg1.4xlarge"
      ],
      "ConstraintDescription" : "must be a valid EC2 instance type."
    }
  },
  
  "Mappings" : <span>{</span>
    "AWSInstanceType2Arch" : <span>{</span>
      "t1.micro"    : <span>{</span> "Arch" : "HVM64"  },
      "t2.nano"     : <span>{</span> "Arch" : "HVM64"  },
      "t2.micro"    : <span>{</span> "Arch" : "HVM64"  },
      "t2.small"    : <span>{</span> "Arch" : "HVM64"  },
      "t2.medium"   : <span>{</span> "Arch" : "HVM64"  },
      "t2.large"    : <span>{</span> "Arch" : "HVM64"  },
      "m1.small"    : <span>{</span> "Arch" : "HVM64"  },
      "m1.medium"   : <span>{</span> "Arch" : "HVM64"  },
      "m1.large"    : <span>{</span> "Arch" : "HVM64"  },
      "m1.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "m2.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "m2.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "m2.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "m3.medium"   : <span>{</span> "Arch" : "HVM64"  },
      "m3.large"    : <span>{</span> "Arch" : "HVM64"  },
      "m3.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "m3.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "m4.large"    : <span>{</span> "Arch" : "HVM64"  },
      "m4.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "m4.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "m4.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "m4.10xlarge" : <span>{</span> "Arch" : "HVM64"  },
      "c1.medium"   : <span>{</span> "Arch" : "HVM64"  },
      "c1.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "c3.large"    : <span>{</span> "Arch" : "HVM64"  },
      "c3.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "c3.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "c3.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "c3.8xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "c4.large"    : <span>{</span> "Arch" : "HVM64"  },
      "c4.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "c4.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "c4.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "c4.8xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "g2.2xlarge"  : <span>{</span> "Arch" : "HVMG2"  },
      "g2.8xlarge"  : <span>{</span> "Arch" : "HVMG2"  },
      "r3.large"    : <span>{</span> "Arch" : "HVM64"  },
      "r3.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "r3.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "r3.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "r3.8xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "i2.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "i2.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "i2.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "i2.8xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "d2.xlarge"   : <span>{</span> "Arch" : "HVM64"  },
      "d2.2xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "d2.4xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "d2.8xlarge"  : <span>{</span> "Arch" : "HVM64"  },
      "hi1.4xlarge" : <span>{</span> "Arch" : "HVM64"  },
      "hs1.8xlarge" : <span>{</span> "Arch" : "HVM64"  },
      "cr1.8xlarge" : <span>{</span> "Arch" : "HVM64"  },
      "cc2.8xlarge" : <span>{</span> "Arch" : "HVM64"  }
    },
    "AWSRegionArch2AMI" : <span>{</span>
      "us-east-1"        : <span>{</span>"HVM64" : "ami-0ff8a91507f77f867", "HVMG2" : "ami-0a584ac55a7631c0c"},
      "us-west-2"        : <span>{</span>"HVM64" : "ami-a0cfeed8", "HVMG2" : "ami-0e09505bc235aa82d"},
      "us-west-1"        : <span>{</span>"HVM64" : "ami-0bdb828fd58c52235", "HVMG2" : "ami-066ee5fd4a9ef77f1"},
      "eu-west-1"        : <span>{</span>"HVM64" : "ami-047bb4163c506cd98", "HVMG2" : "ami-0a7c483d527806435"},
      "eu-west-2"        : <span>{</span>"HVM64" : "ami-f976839e", "HVMG2" : "NOT_SUPPORTED"},
      "eu-west-3"        : <span>{</span>"HVM64" : "ami-0ebc281c20e89ba4b", "HVMG2" : "NOT_SUPPORTED"},
      "eu-central-1"     : <span>{</span>"HVM64" : "ami-0233214e13e500f77", "HVMG2" : "ami-06223d46a6d0661c7"},
      "ap-northeast-1"   : <span>{</span>"HVM64" : "ami-06cd52961ce9f0d85", "HVMG2" : "ami-053cdd503598e4a9d"},
      "ap-northeast-2"   : <span>{</span>"HVM64" : "ami-0a10b2721688ce9d2", "HVMG2" : "NOT_SUPPORTED"},
      "ap-northeast-3"   : <span>{</span>"HVM64" : "ami-0d98120a9fb693f07", "HVMG2" : "NOT_SUPPORTED"},
      "ap-southeast-1"   : <span>{</span>"HVM64" : "ami-08569b978cc4dfa10", "HVMG2" : "ami-0be9df32ae9f92309"},
      "ap-southeast-2"   : <span>{</span>"HVM64" : "ami-09b42976632b27e9b", "HVMG2" : "ami-0a9ce9fecc3d1daf8"},
      "ap-south-1"       : <span>{</span>"HVM64" : "ami-0912f71e06545ad88", "HVMG2" : "ami-097b15e89dbdcfcf4"},
      "us-east-2"        : <span>{</span>"HVM64" : "ami-0b59bfac6be064b78", "HVMG2" : "NOT_SUPPORTED"},
      "ca-central-1"     : <span>{</span>"HVM64" : "ami-0b18956f", "HVMG2" : "NOT_SUPPORTED"},
      "sa-east-1"        : <span>{</span>"HVM64" : "ami-07b14488da8ea02a0", "HVMG2" : "NOT_SUPPORTED"},
      "cn-north-1"       : <span>{</span>"HVM64" : "ami-0a4eaf6c4454eda75", "HVMG2" : "NOT_SUPPORTED"},
      "cn-northwest-1"   : <span>{</span>"HVM64" : "ami-6b6a7d09", "HVMG2" : "NOT_SUPPORTED"}
    }
  },
    
  "Resources" : <span>{</span>   
  
    "ElasticLoadBalancer" : <span>{</span>
      "Type" : "AWS::ElasticLoadBalancing::LoadBalancer",
      "Properties" : <span>{</span>
        "CrossZone" : "true",
        "AvailabilityZones" : <span>{</span> "Fn::GetAZs" : "" },
        "LBCookieStickinessPolicy" : [ <span>{</span>
          "PolicyName" : "CookieBasedPolicy",
          "CookieExpirationPeriod" : "30"
        } ],
        "Listeners" : [ <span>{</span>
          "LoadBalancerPort" : "80",
          "InstancePort" : "80",
          "Protocol" : "HTTP",
          "PolicyNames" : [ "CookieBasedPolicy" ]
        } ],
        "HealthCheck" : <span>{</span>
          "Target" : "HTTP:80/",
          "HealthyThreshold" : "2",
          "UnhealthyThreshold" : "5",
          "Interval" : "10",
          "Timeout" : "5"
        }
      }
    },
    
    "WebServerGroup" : <span>{</span>
      "Type" : "AWS::AutoScaling::AutoScalingGroup",
      "Properties" : <span>{</span>
        "AvailabilityZones" : <span>{</span> "Fn::GetAZs" : "" },
        "LaunchConfigurationName" : <span>{</span> "Ref" : "LaunchConfig" },
        "MinSize" : "1",
        "DesiredCapacity" : "1",
        "MaxSize" : "5",
        "LoadBalancerNames" : [ <span>{</span> "Ref" : "ElasticLoadBalancer" } ]
      },
      "CreationPolicy" : <span>{</span>
        "ResourceSignal" : <span>{</span>
          "Timeout" : "PT15M"
        }
      },
      "UpdatePolicy": <span>{</span>
        "AutoScalingRollingUpdate": <span>{</span>
          "MinInstancesInService": "1",
          "MaxBatchSize": "1",
          "PauseTime" : "PT15M",
          "WaitOnResourceSignals": "true"
        }
      }
    },
    
    "LaunchConfig": <span>{</span>  
      "Type" : "AWS::AutoScaling::LaunchConfiguration",
      "Metadata" : <span>{</span>
        "Comment" : "Install a simple PHP application",
        "AWS::CloudFormation::Init" : <span>{</span>
          "config" : <span>{</span>
            "packages" : <span>{</span>
              "yum" : <span>{</span>
                "httpd"             : [],
                "php"               : []
              }
            },

            "files" : <span>{</span>

              "/var/www/html/index.php" : <span>{</span>
                "content" : <span>{</span> "Fn::Join" : ["", [
                  "&lt;?php\n",
                  "echo '&lt;h1&gt;AWS CloudFormation sample PHP application&lt;/h1&gt;';\n",
                 "echo 'Updated version via UpdateStack';\n ",
                  "?&gt;\n"
                ]]},
                "mode"    : "000644",
                "owner"   : "apache",
                "group"   : "apache"
              },


              "/etc/cfn/cfn-hup.conf" : <span>{</span>
                "content" : <span>{</span> "Fn::Join" : ["", [
                  "[main]\n",
                  "stack=", <span>{</span> "Ref" : "AWS::StackId" }, "\n",
                  "region=", <span>{</span> "Ref" : "AWS::Region" }, "\n"
                ]]},
                "mode"    : "000400",
                "owner"   : "root",
                "group"   : "root"
              },

              "/etc/cfn/hooks.d/cfn-auto-reloader.conf" : <span>{</span>
                "content": <span>{</span> "Fn::Join" : ["", [
                  "[cfn-auto-reloader-hook]\n",
                  "triggers=post.update\n",
                  "path=Resources.LaunchConfig.Metadata.AWS::CloudFormation::Init\n",
                  "action=/opt/aws/bin/cfn-init -s ", <span>{</span> "Ref" : "AWS::StackId" }, " -r LaunchConfig ",
                                                   " --region     ", <span>{</span> "Ref" : "AWS::Region" }, "\n",
                  "runas=root\n"
                ]]}
              }
            },

            "services" : <span>{</span>
              "sysvinit" : <span>{</span>
                "httpd"    : <span>{</span> "enabled" : "true", "ensureRunning" : "true" },
                "cfn-hup" : <span>{</span> "enabled" : "true", "ensureRunning" : "true",
                    "files" : ["/etc/cfn/cfn-hup.conf", "/etc/cfn/hooks.d/cfn-auto-reloader.conf"]}
              }
            }
          }
        }
      },

      "Properties": <span>{</span>
        "ImageId" : <span>{</span> "Fn::FindInMap" : [ "AWSRegionArch2AMI", <span>{</span> "Ref" : "AWS::Region" },
                          <span>{</span> "Fn::FindInMap" : [ "AWSInstanceType2Arch", <span>{</span> "Ref" : "InstanceType" }, "Arch" ] } ] },
        "InstanceType"   : <span>{</span> "Ref" : "InstanceType" },
        "KeyName"        : <span>{</span> "Ref" : "KeyName" },
        "SecurityGroups" : [ <span>{</span>"Ref" : "WebServerSecurityGroup"} ],
        "UserData"       : <span>{</span> "Fn::Base64" : <span>{</span> "Fn::Join" : ["", [
             "#!/bin/bash -xe\n",
             "yum install -y aws-cfn-bootstrap\n",

             "# Install the files and packages from the metadata\n",
             "/opt/aws/bin/cfn-init -v ",
             "         --stack ", <span>{</span> "Ref" : "AWS::StackName" },
             "         --resource LaunchConfig ",
             "         --region ", <span>{</span> "Ref" : "AWS::Region" }, "\n",
             
             "# Start up the cfn-hup daemon to listen for changes to the Web Server metadata\n",
             "/opt/aws/bin/cfn-hup || error_exit 'Failed to start cfn-hup'\n",  

             "# Signal the status from cfn-init\n",
             "/opt/aws/bin/cfn-signal -e $? ",
             "         --stack ", <span>{</span> "Ref" : "AWS::StackName" },
             "         --resource WebServerGroup ",
             "         --region ", <span>{</span> "Ref" : "AWS::Region" }, "\n"
        ]]}}        
      }
    },

    "WebServerSecurityGroup" : <span>{</span>
      "Type" : "AWS::EC2::SecurityGroup",
      "Properties" : <span>{</span>
        "GroupDescription" : "Enable HTTP access via port 80 locked down to the ELB and SSH access",
        "SecurityGroupIngress" : [
          <span>{</span>"IpProtocol" : "tcp", "FromPort" : "80", "ToPort" : "80", "SourceSecurityGroupOwnerId" : <span>{</span>"Fn::GetAtt" : ["ElasticLoadBalancer", "SourceSecurityGroup.OwnerAlias"]},"SourceSecurityGroupName" : <span>{</span>"Fn::GetAtt" : ["ElasticLoadBalancer", "SourceSecurityGroup.GroupName"]}},
          <span>{</span>"IpProtocol" : "tcp", "FromPort" : "22", "ToPort" : "22", "CidrIp" : <span>{</span> "Ref" : "SSHLocation"}}
        ]
      }
    }          
  },
  
  "Outputs" : <span>{</span>
    "WebsiteURL" : <span>{</span>
      "Description" : "Application URL",
      "Value" : <span>{</span> "Fn::Join" : ["", ["http://", <span>{</span> "Fn::GetAtt" : [ "ElasticLoadBalancer", "DNSName" ]}]] }
    }
  }
}</blockquote></pre>
          <h2 id="update.walkthrough.impact">Availability and impact considerations</h2>

          Different properties have different impacts on the resources in the stack. You can use CloudFormation
          to update any property; however, before you make any changes, you should
          consider these questions:
          <div class="orderedlist">


            <ol>
              <li>
                How does the update affect the resource itself? For example, updating an alarm
                threshold will render the alarm inactive during the update. As we have seen, changing the
                instance type requires that the instance be stopped and restarted. AWS CloudFormation uses
                the update
                or modify actions for the underlying resources to make changes to resources. To understand
                the impact of updates, you should check the documentation for the specific
                resources.
              </li>
              <li>
                Is the change mutable or immutable? Some changes to resource properties, such as
                changing the AMI on an Amazon EC2 instance, aren't supported by the underlying services.
                In the case of mutable changes, CloudFormation will use the Update or Modify type APIs for
                the
                underlying resources. For immutable property changes, CloudFormation will create new
                resources
                with the updated properties and then link them to the stack before deleting the old
                resources. Although CloudFormation tries to reduce the down time of the stack resources,
                replacing a resource is a multistep process, and it will take time. During stack
                reconfiguration, your application will not be fully operational. For example, it may not
                be able to serve requests or access a database.
              </li>
            </ol>
          </div>


          <!-- <content> -->

          <!------>
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