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
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Learn template basics</h1>
      <ol class="breadcrumb mx-5 mt-3 px-0">
        <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
        <li class="breadcrumb-item"><a href="../../../">AWS</a></li>
        <li class="breadcrumb-item"><a href="../../">Contents</a></li>
        <li class="breadcrumb-item active">AWS CloudFormation</li>
      </ol>
      <div class="px-5 pb-5 pt-0 body-text">



        <div class="highlights" id="inline-topiclist">
          <strong>Topics</strong>
          <ul>
            <li><a href="#gettingstarted.templatebasics.what">What is an AWS CloudFormation template?</a></li>
            <li><a href="#gettingstarted.templatebasics.simple">Resources: Hello Bucket!</a></li>
            <li><a href="#gettingstarted.templatebasics.multiple">Resource properties and using resources
                together</a></li>
            <li><a href="#gettingstarted.templatebasics.parameters">Receiving user input using input
                parameters</a></li>
            <li><a href="#gettingstarted.templatebasics.mappings">Specifying conditional values using
                mappings</a></li>
            <li><a href="#gettingstarted.templatebasics.outputs">Constructed values and output values</a></li>
            <li><a href="#gettingstarted.templatebasics.learnmore">Next steps</a></li>
          </ul>
        </div>
        In Get started,
        you learned how to use a template to create a stack. You saw resources declared in a template
        and how they map to resources in the stack. We also touched on input parameters and how they
        enable you to pass in specific values when you create a stack from a template. In this section,
        we'll go deeper into resources and parameters. We'll also cover the other components of
        templates so that you'll know how to use these components together to create templates that
        produce the AWS resources you want.
        <br><br>
        <h2 id="gettingstarted.templatebasics.what">What is an AWS CloudFormation template?</h2>

        A template is a declaration of the AWS resources that make up a stack. The template is
        stored as a text file whose format complies with the JavaScript Object Notation (JSON) or YAML
        standard. Because they're text files, you can create and edit them in any text editor and
        manage them in your source control system with the rest of your source code. For more
        information about the template formats, see AWS CloudFormation
        template formats <br><br>
        In the template, you declare the AWS resources you want to create and configure. You declare an object
        as a name-value pair or a pairing of a name with a set of child objects enclosed. The syntax depends
        on the format you use. For more information, see the Template
        anatomy. The only required top-level object is the Resources object, which must declare at
        least one resource. Let's start with the most basic template containing only a Resources
        object, which contains a single resource declaration. <br><br>
        <h2 id="gettingstarted.templatebasics.simple">Resources: Hello Bucket!</h2>

        The Resources object contains a list of resource objects. A resource declaration contains the
        resource's attributes, which are themselves declared as child objects. A resource must have a <code class="code">Type</code> attribute, which defines the kind of AWS resource you want to create. The
        <code class="code">Type</code> attribute has a special format:
        <pre class="programlisting"><blockquote class="nohighlight hljs">AWS::ProductIdentifier::ResourceType</blockquote></pre>
        For example, the resource type for an Amazon S3 bucket is >AWS::S3::Bucket.
        For a full list of resource types,.
        Let's take a look at a basic template. The following template declares a single resource
        of type <code class="code">AWS::S3::Bucket:</code> with the name HelloBucket.
        <div id="JSON" name="JSON" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.simple.json">JSON</h3>
          <pre class="programlisting"><blockquote class="json hljs"><span>{</span>
    <span class="hljs-attr">"Resources"</span> : <span>{</span>
        <span class="hljs-attr">"HelloBucket"</span> : <span>{</span>
            <span class="hljs-attr">"Type"</span> : <span class="hljs-string">"AWS::S3::Bucket"</span>
        }
    }
}</blockquote></pre>
        </div>
        <div id="YAML" name="YAML" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.simple.yaml">YAML</h3>
          <pre class="programlisting"><blockquote class="yaml hljs"><span class="hljs-attr">Resources:</span>
  <span class="hljs-attr">HelloBucket:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">AWS::S3::Bucket</span></blockquote></pre>
        </div> <br><br>
        If you use this template to create a stack, AWS CloudFormation will create an Amazon S3 bucket.
        Creating a
        bucket is simple, because CloudFormation can create a bucket with default settings. For other
        resources, such as an Amazon EC2 Auto Scaling group or EC2 instance, CloudFormation requires
        more information. Resource declarations use a <code class="code">Properties</code> attribute to
        specify the
        information used to create a resource.
        Depending on the resource type, some properties are required, such as the ImageId
        property for an AWS::EC2::Instance
        resource, and others are optional. Some properties have default
        values, such as the AccessControl property of the <code class="code">AWS::S3::Bucket</code> resource,
        so specifying a
        value for those properties is optional. Other properties aren't required but may add
        functionality that you want, such as the <code class="code">WebsiteConfiguration</code> property of
        the <code class="code">AWS::S3::Bucket</code>
        resource. Specifying a value for such properties is entirely optional and based on your needs.
        In the example above, because the <code class="code">AWS::S3::Bucket</code> resource has only optional
        properties and we
        didn't need any of the optional features, we could accept the defaults and omit the Properties
        attribute.
        To view the properties for each resource type, see the topics in AWS resource and property types reference.
        <br><br>
        <h2 id="gettingstarted.templatebasics.multiple">Resource properties and using resources
          together</h2>

        Usually, a property for a resource is simply a string value. For example, the following template
        specifies a
        canned ACL (PublicRead) for the AccessControl property of the bucket.
        <div id="JSON" name="JSON" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.multiple.json">JSON</h3>
          <pre class="programlisting"><blockquote class="json hljs"><span>{</span>
    <span class="hljs-attr">"Resources"</span> : <span>{</span>
        <span class="hljs-attr">"HelloBucket"</span> : <span>{</span>
            <span class="hljs-attr">"Type"</span> : <span class="hljs-string">"AWS::S3::Bucket"</span>,
            <span class="hljs-attr">"Properties"</span> : <span>{</span>
               <span class="hljs-attr">"AccessControl"</span> : <span class="hljs-string">"PublicRead"</span>               
            }
        }
    }
}</blockquote></pre>
        </div>
        <div id="YAML" name="YAML" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.multiple.yaml">YAML</h3>
          <pre class="programlisting"><blockquote class="yaml hljs"><span class="hljs-attr">Resources:</span>
  <span class="hljs-attr">HelloBucket:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">AWS::S3::Bucket</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">AccessControl:</span> <span class="hljs-string">PublicRead</span></blockquote></pre>
        </div>
        Some resources can have multiple properties, and some properties can have one or more
        subproperties. For example, the AWS::S3::Bucket
        resource has two properties: AccessControl and
        WebsiteConfiguration. The WebsiteConfiguration property has two subproperties: IndexDocument
        and ErrorDocument. The following template shows our original bucket resource with the
        additional properties.
        <div id="JSON" name="JSON" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.multiple.json2">JSON</h3>
          <pre class="programlisting"><blockquote class="json hljs"><span>{</span>
    <span class="hljs-attr">"Resources"</span> : <span>{</span>
        <span class="hljs-attr">"HelloBucket"</span> : <span>{</span>
            <span class="hljs-attr">"Type"</span> : <span class="hljs-string">"AWS::S3::Bucket"</span>,
            <span class="hljs-attr">"Properties"</span> : <span>{</span>
               <span class="hljs-attr">"AccessControl"</span> : <span class="hljs-string">"PublicRead"</span>,
               <span class="hljs-attr">"WebsiteConfiguration"</span> : <span>{</span>
                    <span class="hljs-attr">"IndexDocument"</span> : <span class="hljs-string">"index.html"</span>,
                    <span class="hljs-attr">"ErrorDocument"</span> : <span class="hljs-string">"error.html"</span>            
               }               
            }
        }
    }
}</blockquote></pre>
        </div>
        <div id="YAML" name="YAML" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.multiple.yaml2">YAML</h3>
          <pre class="programlisting"><blockquote class="yaml hljs"><span class="hljs-attr">Resources:</span>
  <span class="hljs-attr">HelloBucket:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">AWS::S3::Bucket</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">AccessControl:</span> <span class="hljs-string">PublicRead</span>
      <span class="hljs-attr">WebsiteConfiguration:</span>
        <span class="hljs-attr">IndexDocument:</span> <span class="hljs-string">index.html</span>
        <span class="hljs-attr">ErrorDocument:</span> <span class="hljs-string">error.html</span></blockquote></pre>
        </div> <br><br>
        One of the greatest benefits of templates and CloudFormation is the ability to create a set
        of resources that work together to create an application or solution. The name used for a
        resource within the template is a logical name. When CloudFormation creates the resource, it
        generates a physical name that's based on the combination of the logical name, the stack name,
        and a unique ID.

        You're probably wondering how you set properties on one resource based on the name or
        property of another resource. <span>For example, you can create <span>a CloudFront distribution backed
            by an S3 bucket or </span> an EC2 instance
          that uses EC2 security groups, and all of these resources can be created in the same
          template.</span> CloudFormation has a number of intrinsic functions that you can use to refer
        to other resources and their properties. You can use the Ref function to refer to an identifying
        property of a resource. Frequently, this is the physical name of the resource; however,
        sometimes it can be an identifier, such as the IP address for an AWS::EC2::EIP
        resource or an Amazon Resource Name (ARN) for an Amazon SNS topic. For a list of values returned by
        the Ref function, see Ref function.
        The following template contains an AWS::EC2::Instance
        resource. The resource's SecurityGroups property calls the Ref
        function to refer to the <code class="code">AWS::EC2::SecurityGroup</code> resource
        InstanceSecurityGroup.
        <div id="JSON" name="JSON" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.multiple.json3">JSON</h3>
          <pre class="programlisting"><blockquote class="json hljs"><span>{</span>
    <span class="hljs-attr">"Resources"</span>: <span>{</span>
        <span class="hljs-attr">"Ec2Instance"</span>: <span>{</span>
            <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"AWS::EC2::Instance"</span>,
            <span class="hljs-attr">"Properties"</span>: <span>{</span>
                <span class="hljs-attr">"SecurityGroups"</span>: [
                    <span>{</span>
                        <span class="hljs-attr">"Ref"</span>: <span class="hljs-string">"InstanceSecurityGroup"</span>
                    }
                ],
                <span class="hljs-attr">"KeyName"</span>: <span class="hljs-string">"mykey"</span>,
                <span class="hljs-attr">"ImageId"</span>: <span class="hljs-string">""</span>
            }
        },
        <span class="hljs-attr">"InstanceSecurityGroup"</span>: <span>{</span>
            <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"AWS::EC2::SecurityGroup"</span>,
            <span class="hljs-attr">"Properties"</span>: <span>{</span>
                <span class="hljs-attr">"GroupDescription"</span>: <span class="hljs-string">"Enable SSH access via port 22"</span>,
                <span class="hljs-attr">"SecurityGroupIngress"</span>: [
                    <span>{</span>
                        <span class="hljs-attr">"IpProtocol"</span>: <span class="hljs-string">"tcp"</span>,
                        <span class="hljs-attr">"FromPort"</span>: <span class="hljs-number">22</span>,
                        <span class="hljs-attr">"ToPort"</span>: <span class="hljs-number">22</span>,
                        <span class="hljs-attr">"CidrIp"</span>: <span class="hljs-string">"0.0.0.0/0"</span>
                    }
                ]
            }
        }
    }
}</blockquote></pre>
        </div>
        <div id="YAML" name="YAML" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.multiple.yaml3">YAML</h3>
          <pre class="programlisting"><blockquote lass="yaml hljs"><span class="hljs-attr">Resources:</span>
  <span class="hljs-attr">Ec2Instance:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">'AWS::EC2::Instance'</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">SecurityGroups:</span>
        <span class="hljs-bullet">-</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">InstanceSecurityGroup</span>
      <span class="hljs-attr">KeyName:</span> <span class="hljs-string">mykey</span>
      <span class="hljs-attr">ImageId:</span> <span class="hljs-string">''</span>
  <span class="hljs-attr">InstanceSecurityGroup:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">'AWS::EC2::SecurityGroup'</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">GroupDescription:</span> <span class="hljs-string">Enable</span> <span class="hljs-string">SSH</span> <span class="hljs-string">access</span> <span class="hljs-string">via</span> <span class="hljs-string">port</span> <span class="hljs-number">22</span>
      <span class="hljs-attr">SecurityGroupIngress:</span>
        <span class="hljs-bullet">-</span> <span class="hljs-attr">IpProtocol:</span> <span class="hljs-string">tcp</span>
          <span class="hljs-attr">FromPort:</span> <span class="hljs-number">22</span>
          <span class="hljs-attr">ToPort:</span> <span class="hljs-number">22</span>
          <span class="hljs-attr">CidrIp:</span> <span class="hljs-number">0.0</span><span class="hljs-number">.0</span><span class="hljs-number">.0</span><span class="hljs-string">/0</span>
          </blockquote></pre>
        </div>

        The SecurityGroups property is a list of security groups, and in the previous example we
        have only one item in the list. The following template has an additional item in the
        SecurityGroups property list.
        <div id="JSON" name="JSON" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.multiple.json4">JSON</h3>
          <pre class="programlisting"><blockquote class="json hljs"><span>{</span>
    <span class="hljs-attr">"Resources"</span>: <span>{</span>
        <span class="hljs-attr">"Ec2Instance"</span>: <span>{</span>
            <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"AWS::EC2::Instance"</span>,
            <span class="hljs-attr">"Properties"</span>: <span>{</span>
                <span class="hljs-attr">"SecurityGroups"</span>: [
                    <span>{</span>
                        <span class="hljs-attr">"Ref"</span>: <span class="hljs-string">"InstanceSecurityGroup"</span>
                    },
                    <span class="hljs-string">"MyExistingSecurityGroup"</span>
                ],
                <span class="hljs-attr">"KeyName"</span>: <span class="hljs-string">"mykey"</span>,
                <span class="hljs-attr">"ImageId"</span>: <span class="hljs-string">"ami-7a11e213"</span>
            }
        },
        <span class="hljs-attr">"InstanceSecurityGroup"</span>: <span>{</span>
            <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"AWS::EC2::SecurityGroup"</span>,
            <span class="hljs-attr">"Properties"</span>: <span>{</span>
                <span class="hljs-attr">"GroupDescription"</span>: <span class="hljs-string">"Enable SSH access via port 22"</span>,
                <span class="hljs-attr">"SecurityGroupIngress"</span>: [
                    <span>{</span>
                        <span class="hljs-attr">"IpProtocol"</span>: <span class="hljs-string">"tcp"</span>,
                        <span class="hljs-attr">"FromPort"</span>: <span class="hljs-number">22</span>,
                        <span class="hljs-attr">"ToPort"</span>: <span class="hljs-number">22</span>,
                        <span class="hljs-attr">"CidrIp"</span>: <span class="hljs-string">"0.0.0.0/0"</span>
                    }
                ]
            }
        }
    }
}</blockquote></pre>
        </div>
        <div id="YAML" name="YAML" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.multiple.yaml4">YAML</h3>
          <pre class="programlisting"><blockquote class="yaml hljs"><span class="hljs-attr">Resources:</span>
  <span class="hljs-attr">Ec2Instance:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">'AWS::EC2::Instance'</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">SecurityGroups:</span>
        <span class="hljs-bullet">-</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">InstanceSecurityGroup</span>
        <span class="hljs-bullet">-</span> <span class="hljs-string">MyExistingSecurityGroup</span>
      <span class="hljs-attr">KeyName:</span> <span class="hljs-string">mykey</span>
      <span class="hljs-attr">ImageId:</span> <span class="hljs-string">ami-7a11e213</span>
  <span class="hljs-attr">InstanceSecurityGroup:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">'AWS::EC2::SecurityGroup'</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">GroupDescription:</span> <span class="hljs-string">Enable</span> <span class="hljs-string">SSH</span> <span class="hljs-string">access</span> <span class="hljs-string">via</span> <span class="hljs-string">port</span> <span class="hljs-number">22</span>
      <span class="hljs-attr">SecurityGroupIngress:</span>
        <span class="hljs-bullet">-</span> <span class="hljs-attr">IpProtocol:</span> <span class="hljs-string">tcp</span>
          <span class="hljs-attr">FromPort:</span> <span class="hljs-number">22</span>
          <span class="hljs-attr">ToPort:</span> <span class="hljs-number">22</span>
          <span class="hljs-attr">CidrIp:</span> <span class="hljs-number">0.0</span><span class="hljs-number">.0</span><span class="hljs-number">.0</span><span class="hljs-string">/0</span>
          </blockquote></pre>
        </div>
        MyExistingSecurityGroup is a string that refers to an existing EC2 security group instead of a
        security
        group declared in a template. You use literal strings to refer to existing AWS resources.
        In the example above, the KeyName property of the AWS::EC2::Instance</a>
        is the literal string mykey. This means that a key pair with the
        name mykey must exist in the region where the stack is being created; otherwise, stack
        creation will fail because the key pair doesn't exist. The key pair you use can vary with the
        region where you are creating the stack, or you may want to share the template with someone
        else so that they can use it with their AWS account. If so, you can use an input parameter so
        that the key pair name can be specified when the stack is created. The Ref function can refer
        to input parameters that are specified at stack creation time. The following template adds a
        Parameters object containing the KeyName parameter, which is used to specify the KeyName
        property for the <code class="code">AWS::EC2::Instance</code> resource. The parameter type is
        <code class="code">AWS::EC2::KeyPair::KeyName</code>, which ensures a user specifies a valid key pair
        name in his or her account and in the region where the stack is being created.
        <div id="JSON" name="JSON" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.multiple.json5">JSON</h3>
          <pre class="programlisting"><blockquote class="json hljs"><span>{</span>
  <span class="hljs-attr">"Parameters"</span>: <span>{</span>
    <span class="hljs-attr">"KeyName"</span>: <span>{</span>
      <span class="hljs-attr">"Description"</span>: <span class="hljs-string">"The EC2 Key Pair to allow SSH access to the instance"</span>,
      <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"AWS::EC2::KeyPair::KeyName"</span>
    }
  },
  <span class="hljs-attr">"Resources"</span>: <span>{</span>
    <span class="hljs-attr">"Ec2Instance"</span>: <span>{</span>
      <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"AWS::EC2::Instance"</span>,
      <span class="hljs-attr">"Properties"</span>: <span>{</span>
        <span class="hljs-attr">"SecurityGroups"</span>: [
          <span>{</span>
            <span class="hljs-attr">"Ref"</span>: <span class="hljs-string">"InstanceSecurityGroup"</span>
          },
          <span class="hljs-string">"MyExistingSecurityGroup"</span>
        ],
        <span class="hljs-attr">"KeyName"</span>: <span>{</span>
          <span class="hljs-attr">"Ref"</span>: <span class="hljs-string">"KeyName"</span>
        },
        <span class="hljs-attr">"ImageId"</span>: <span class="hljs-string">"ami-7a11e213"</span>
      }
    },
    <span class="hljs-attr">"InstanceSecurityGroup"</span>: <span>{</span>
      <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"AWS::EC2::SecurityGroup"</span>,
      <span class="hljs-attr">"Properties"</span>: <span>{</span>
        <span class="hljs-attr">"GroupDescription"</span>: <span class="hljs-string">"Enable SSH access via port 22"</span>,
        <span class="hljs-attr">"SecurityGroupIngress"</span>: [
          <span>{</span>
            <span class="hljs-attr">"IpProtocol"</span>: <span class="hljs-string">"tcp"</span>,
            <span class="hljs-attr">"FromPort"</span>: <span class="hljs-number">22</span>,
            <span class="hljs-attr">"ToPort"</span>: <span class="hljs-number">22</span>,
            <span class="hljs-attr">"CidrIp"</span>: <span class="hljs-string">"0.0.0.0/0"</span>
          }
        ]
      }
    }
  }
}</blockquote></pre>
        </div>
        <div id="YAML" name="YAML" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.multiple.yaml5">YAML</h3>
          <pre class="programlisting"><blockquote class="yaml hljs"><span class="hljs-attr">Parameters:</span>
  <span class="hljs-attr">KeyName:</span>
    <span class="hljs-attr">Description:</span> <span class="hljs-string">The</span> <span class="hljs-string">EC2</span> <span class="hljs-string">Key</span> <span class="hljs-string">Pair</span> <span class="hljs-string">to</span> <span class="hljs-string">allow</span> <span class="hljs-string">SSH</span> <span class="hljs-string">access</span> <span class="hljs-string">to</span> <span class="hljs-string">the</span> <span class="hljs-string">instance</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">'AWS::EC2::KeyPair::KeyName'</span>
<span class="hljs-attr">Resources:</span>
  <span class="hljs-attr">Ec2Instance:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">'AWS::EC2::Instance'</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">SecurityGroups:</span>
        <span class="hljs-bullet">-</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">InstanceSecurityGroup</span>
        <span class="hljs-bullet">-</span> <span class="hljs-string">MyExistingSecurityGroup</span>
      <span class="hljs-attr">KeyName:</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">KeyName</span>
      <span class="hljs-attr">ImageId:</span> <span class="hljs-string">ami-7a11e213</span>
  <span class="hljs-attr">InstanceSecurityGroup:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">'AWS::EC2::SecurityGroup'</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">GroupDescription:</span> <span class="hljs-string">Enable</span> <span class="hljs-string">SSH</span> <span class="hljs-string">access</span> <span class="hljs-string">via</span> <span class="hljs-string">port</span> <span class="hljs-number">22</span>
      <span class="hljs-attr">SecurityGroupIngress:</span>
        <span class="hljs-bullet">-</span> <span class="hljs-attr">IpProtocol:</span> <span class="hljs-string">tcp</span>
          <span class="hljs-attr">FromPort:</span> <span class="hljs-number">22</span>
          <span class="hljs-attr">ToPort:</span> <span class="hljs-number">22</span>
          <span class="hljs-attr">CidrIp:</span> <span class="hljs-number">0.0</span><span class="hljs-number">.0</span><span class="hljs-number">.0</span><span class="hljs-string">/0</span>
          </blockquote></pre>
        </div>
        The Ref function is handy if the parameter or the value returned for a resource is
        exactly what you want; however, you may need other attributes of a resource. For example, if
        you want to create a CloudFront distribution with an S3 origin, you need to specify the bucket
        location by using a DNS-style address. A number of resources have additional attributes whose
        values you can use in your template. To get these attributes, you use the Fn::GetAtt function. The following
        template creates a CloudFront distribution resource that specifies the DNS name of an S3
        bucket resource using Fn::GetAtt function to get the bucket's DomainName attribute.
        <div id="JSON" name="JSON" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.multiple.json6">JSON</h3>
          <pre class="programlisting"><blockquote class="json hljs"><span>{</span>
  <span class="hljs-attr">"Resources"</span>: <span>{</span>
    <span class="hljs-attr">"myBucket"</span>: <span>{</span>
      <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"AWS::S3::Bucket"</span>
    },
    <span class="hljs-attr">"myDistribution"</span>: <span>{</span>
      <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"AWS::CloudFront::Distribution"</span>,
      <span class="hljs-attr">"Properties"</span>: <span>{</span>
        <span class="hljs-attr">"DistributionConfig"</span>: <span>{</span>
          <span class="hljs-attr">"Origins"</span>: [
            <span>{</span>
              <span class="hljs-attr">"DomainName"</span>: <span>{</span>
                <span class="hljs-attr">"Fn::GetAtt"</span>: [
                  <span class="hljs-string">"myBucket"</span>,
                  <span class="hljs-string">"DomainName"</span>
                ]
              },
              <span class="hljs-attr">"Id"</span>: <span class="hljs-string">"myS3Origin"</span>,
              <span class="hljs-attr">"S3OriginConfig"</span>: <span>{</span>}
            }
          ],
          <span class="hljs-attr">"Enabled"</span>: <span class="hljs-string">"true"</span>,
          <span class="hljs-attr">"DefaultCacheBehavior"</span>: <span>{</span>
            <span class="hljs-attr">"TargetOriginId"</span>: <span class="hljs-string">"myS3Origin"</span>,
            <span class="hljs-attr">"ForwardedValues"</span>: <span>{</span>
              <span class="hljs-attr">"QueryString"</span>: <span class="hljs-string">"false"</span>
            },
            <span class="hljs-attr">"ViewerProtocolPolicy"</span>: <span class="hljs-string">"allow-all"</span>
          }
        }
      }
    }
  }
}</blockquote></pre>
        </div>
        <div id="YAML" name="YAML" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.multiple.yaml6">YAML</h3>
          <pre class="programlisting"><blockquote class="yaml hljs"><span class="hljs-attr">Resources:</span>
  <span class="hljs-attr">myBucket:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">'AWS::S3::Bucket'</span>
  <span class="hljs-attr">myDistribution:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">'AWS::CloudFront::Distribution'</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">DistributionConfig:</span>
        <span class="hljs-attr">Origins:</span>
          <span class="hljs-bullet">-</span> <span class="hljs-attr">DomainName:</span> <span class="hljs-type">!GetAtt</span> 
              <span class="hljs-bullet">-</span> <span class="hljs-string">myBucket</span>
              <span class="hljs-bullet">-</span> <span class="hljs-string">DomainName</span>
            <span class="hljs-attr">Id:</span> <span class="hljs-string">myS3Origin</span>
            <span class="hljs-attr">S3OriginConfig:</span> <span><span class="hljs-string">{</span></span><span class="hljs-string">}</span>
        <span class="hljs-attr">Enabled:</span> <span class="hljs-string">'true'</span>
        <span class="hljs-attr">DefaultCacheBehavior:</span>
          <span class="hljs-attr">TargetOriginId:</span> <span class="hljs-string">myS3Origin</span>
          <span class="hljs-attr">ForwardedValues:</span>
            <span class="hljs-attr">QueryString:</span> <span class="hljs-string">'false'</span>
          <span class="hljs-attr">ViewerProtocolPolicy:</span> <span class="hljs-string">allow-all</span></blockquote></pre>
        </div>
        The Fn::GetAtt function takes two parameters, the logical name of the resource and the name of the
        attribute to be retrieved. For a full list of available attributes for resources, see Fn::GetAtt. You'll notice that the Fn::GetAtt
        function lists its two parameters in an array. For functions that take multiple parameters, you use an
        array to specify their parameters.<br><br>

        <h2 id="gettingstarted.templatebasics.parameters">Receiving user input using input
          parameters</h2>

        So far, you've learned about resources and a little bit about how to use them together
        within a template. You've learned how to refer to input parameters, but we haven't gone deeply
        into how to define the input parameters themselves. Let's take a look at parameter
        declarations and how you can restrict and validate user input.
        You declare parameters in a template's Parameters object. A parameter contains a list of
        attributes that define its value and constraints against its value. The only required
        attribute is Type, which can be String, Number, or an AWS-specific type. You can also add a
        Description attribute that tells a user more about what kind of value they should specify. The
        parameter's name and description appear in the Specify Parameters page when a user uses the
        template in the Create Stack wizard.
        The following template fragment is a Parameters object that declares the parameters used
        in the Specify Parameters page above.
        <div id="JSON" name="JSON" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.parameters.json">JSON</h3>
          <pre class="programlisting"><blockquote class="json hljs">  <span class="hljs-string">"Parameters"</span>: <span>{</span>
    <span class="hljs-attr">"KeyName"</span>: <span>{</span>
      <span class="hljs-attr">"Description"</span> : <span class="hljs-string">"Name of an existing EC2 KeyPair to enable SSH access into the WordPress web server"</span>,
      <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"AWS::EC2::KeyPair::KeyName"</span>
    },
    <span class="hljs-attr">"WordPressUser"</span>: <span>{</span>
      <span class="hljs-attr">"Default"</span>: <span class="hljs-string">"admin"</span>,
      <span class="hljs-attr">"NoEcho"</span>: <span class="hljs-string">"true"</span>,
      <span class="hljs-attr">"Description"</span> : <span class="hljs-string">"The WordPress database admin account user name"</span>,
      <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"String"</span>,
      <span class="hljs-attr">"MinLength"</span>: <span class="hljs-string">"1"</span>,
      <span class="hljs-attr">"MaxLength"</span>: <span class="hljs-string">"16"</span>,
      <span class="hljs-attr">"AllowedPattern"</span> : <span class="hljs-string">"[a-zA-Z][a-zA-Z0-9]*"</span>
    },
    <span class="hljs-attr">"WebServerPort"</span>: <span>{</span>
      <span class="hljs-attr">"Default"</span>: <span class="hljs-string">"8888"</span>,
      <span class="hljs-attr">"Description"</span> : <span class="hljs-string">"TCP/IP port for the WordPress web server"</span>,
      <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"Number"</span>,
      <span class="hljs-attr">"MinValue"</span>: <span class="hljs-string">"1"</span>,
      <span class="hljs-attr">"MaxValue"</span>: <span class="hljs-string">"65535"</span>
    }
  }</blockquote></pre>
        </div>
        <div id="YAML" name="YAML" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.parameters.yaml">YAML</h3>
          <pre class="programlisting"><blockquote class="yaml hljs"><span class="hljs-attr">Parameters:</span>
  <span class="hljs-attr">KeyName:</span>
    <span class="hljs-attr">Description:</span> <span class="hljs-string">Name</span> <span class="hljs-string">of</span> <span class="hljs-string">an</span> <span class="hljs-string">existing</span> <span class="hljs-string">EC2</span> <span class="hljs-string">KeyPair</span> <span class="hljs-string">to</span> <span class="hljs-string">enable</span> <span class="hljs-string">SSH</span> <span class="hljs-string">access</span> <span class="hljs-string">into</span> <span class="hljs-string">the</span> <span class="hljs-string">WordPress</span> <span class="hljs-string">web</span> <span class="hljs-string">server</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">AWS::EC2::KeyPair::KeyName</span>
  <span class="hljs-attr">WordPressUser:</span>
    <span class="hljs-attr">Default:</span> <span class="hljs-string">admin</span>
    <span class="hljs-attr">NoEcho:</span> <span class="hljs-literal">true</span>
    <span class="hljs-attr">Description:</span> <span class="hljs-string">The</span> <span class="hljs-string">WordPress</span> <span class="hljs-string">database</span> <span class="hljs-string">admin</span> <span class="hljs-string">account</span> <span class="hljs-string">user</span> <span class="hljs-string">name</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">String</span>
    <span class="hljs-attr">MinLength:</span> <span class="hljs-number">1</span>
    <span class="hljs-attr">MaxLength:</span> <span class="hljs-number">16</span>
    <span class="hljs-attr">AllowedPattern:</span> <span class="hljs-string">"[a-zA-Z][a-zA-Z0-9]*"</span>
  <span class="hljs-attr">WebServerPort:</span>
    <span class="hljs-attr">Default:</span> <span class="hljs-number">8888</span>
    <span class="hljs-attr">Description:</span> <span class="hljs-string">TCP/IP</span> <span class="hljs-string">port</span> <span class="hljs-string">for</span> <span class="hljs-string">the</span> <span class="hljs-string">WordPress</span> <span class="hljs-string">web</span> <span class="hljs-string">server</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">Number</span>
    <span class="hljs-attr">MinValue:</span> <span class="hljs-number">1</span>
    <span class="hljs-attr">MaxValue:</span> <span class="hljs-number">65535</span></blockquote></pre>
        </div>
        For parameters with default values, CloudFormation uses the default values unless users specify
        another value. If you omit the default attribute, users are required to specify a value for
        that parameter; however, requiring the user to input a value does not ensure that the value is
        valid. To validate the value of a parameter, you can declare constraints or specify an
        AWS-specific parameter type.<br><br>
        You'll notice that the <code class="code">KeyName</code> parameter has no <code class="code">Default</code>
        attribute and the other parameters do. For example, the <code class="code">WordPressUser</code>
        parameter has
        the attribute <code class="code">Default: admin</code>, but the <code class="code">KeyName</code>
        parameter has none.
        Users must specify a key name value at stack creation. If they don’t, CloudFormation fails to create
        the stack and throws an exception: <code class="code">Parameters: [KeyName] must have values</code>.<br><br>

        For AWS-specific parameter types, CloudFormation validates input values against existing
        values in the user's AWS account and in the region where they're creating the stack
        <em>before</em> creating any stack resources. In the sample template, the
        <code class="code">KeyName</code> parameter is an AWS-specific parameter type of
        <code class="code">AWS::EC2::KeyPair::KeyName</code>. CloudFormation checks that users specify a valid
        EC2
        key pair name before creating the stack. Another example of an AWS-specific parameter type
        is <code class="code">AWS::EC2::VPC::Id</code>, which requires users to specify a valid VPC ID. In
        addition
        to upfront validation, the AWS console shows a drop down list of valid values for
        AWS-specific parameter types, such as valid EC2 key pair names or VPC IDs, when users use
        the Create Stack wizard.<br><br>
        For the <code class="code">String</code> type, you can use the following attributes to declare
        constraints: <code class="code">MinLength</code>, <code class="code">MaxLength</code>, <code class="code">Default</code>,
        <code class="code">AllowedValues</code>, and <code class="code">AllowedPattern</code>. In the example
        above, the
        <code class="code">WordPressUser</code> parameter has three constraints: the parameter value must be 1
        to
        16 character long (<code class="code">MinLength</code>, <code class="code">MaxLength</code>) and must
        begin with a
        letter followed by any combination of letters and numbers
        (<code class="code">AllowedPattern</code>).<br><br>
        For the <code class="code">Number</code> type, you can declare the following constraints:
        <code class="code">MinValue</code>, <code class="code">MaxValue</code>, <code class="code">Default</code>, and
        <code class="code">AllowedValues</code>. A number can be an integer or a float value. In the example
        above, the <code class="code">WebServerPort</code> parameter must be a number between 1 and 65535
        inclusive
        (<code class="code">MinValue</code>, <code class="code">MaxValue</code>).<br><br>
        Earlier in this section, we mentioned that parameters are a good way to specify sensitive
        or implementation-specific data, such as passwords or user names, that you need to use but
        don't want to embed in the template itself. If you set the <code class="code">NoEcho</code> attribute
        to
        <code class="code">true</code>, CloudFormation returns the parameter value masked as asterisks (*****)
        for
        any calls that describe the stack or stack events, except for information stored in the
        locations specified below. In the example above, the <code class="code">WordPressUser</code> parameter
        value isn't visible to anyone viewing the stack's settings, and its value is returned as
        asterisks.<br><br>
        <div class="awsdocs-note awsdocs-important">
          <div class="awsdocs-note-title">
            <span>Important</span>
          </div>
          <div class="awsdocs-note-text">
            Using the <code class="code">NoEcho</code> attribute does not mask any information stored in the
            following:
            <div class="itemizedlist">



              <ul class="itemizedlist" type="disc">
                <li class="listitem">
                  The <code class="code">Metadata</code> template section. CloudFormation does not
                  transform, modify, or redact any information you include in the <code class="code">Metadata</code> section. For more information, see Metadata.

                </li>
                <li class="listitem">
                  The <code class="code">Outputs</code> template section. For more information, see Outputs.

                </li>
                <li class="listitem">
                  The <code class="code">Metadata</code> attribute of a resource definition. For more
                  information, Metadata
                  attribute .
                </li>
              </ul>
            </div>
            We strongly recommend you do not use these mechanisms to include sensitive information, such as
            passwords or secrets.<br><br>
          </div>
        </div><br><br>
        <div class="awsdocs-note awsdocs-important">
          <div class="awsdocs-note-title">
            <span><b>Important</b></span>
          </div>
          <div class="awsdocs-note-text">
            Rather than embedding sensitive information directly in your CloudFormation templates, we
            recommend you use dynamic parameters in the stack template to
            reference sensitive information that is stored and managed outside of CloudFormation, such as in
            the AWS Systems Manager Parameter Store or AWS Secrets Manager.
            For more information, see the Do
            not embed credentials in your templates best practice.<br><br>
          </div>
        </div>
        <h2 id="gettingstarted.templatebasics.mappings">Specifying conditional values using mappings</h2>

        Parameters are a great way to enable users to specify unique or sensitive values for use
        in the properties of stack resources; however, there may be settings that are region dependent
        or are somewhat complex for users to figure out because of other conditions or dependencies.
        In these cases, you would want to put some logic in the template itself so that users can
        specify simpler values (or none at all) to get the results that they want. In an earlier
        example, we hard-coded the AMI ID for the ImageId property of our EC2 instance. <span>This works fine
          in the US-East region, where it represents the AMI that
          we want. However, if the user tries to build the stack in a different region they will get
          the wrong AMI or no AMI at all. (AMI IDs are unique to a region, so the same AMI ID in a
          different region may not represent any AMI or a completely different one.)</span><br><br>

        To avoid this problem, you need a way to specify the right AMI ID based on a conditional
        input (in this example, the region where the stack is created). There are two template
        features that can help, the Mappings object and the <code class="code">AWS::Region</code> pseudo
        parameter.<br><br>
        The <code class="code">AWS::Region</code> pseudo parameter is a value that CloudFormation resolves as
        the
        region where the stack is created. Pseudo parameters are resolved by CloudFormation when you
        create the stack. Mappings enable you to use an input value as a condition that determines
        another value. Similar to a switch statement, a mapping associates one set of values with
        another. Using the <code class="code">AWS::Region</code> parameter together with a mapping, you can
        ensure
        that an AMI ID appropriate to the region is specified. <span>The
          following template contains a Mappings object with a mapping named RegionMap that's used to
          map an AMI ID to the appropriate region.</span><br><br>
        <div id="JSON" name="JSON" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.mappings.json">JSON</h3>
          <pre class="programlisting"><blockquote class="json hljs"><span>{</span>
  <span class="hljs-attr">"Parameters"</span>: <span>{</span>
    <span class="hljs-attr">"KeyName"</span>: <span>{</span>
      <span class="hljs-attr">"Description"</span>: <span class="hljs-string">"Name of an existing EC2 KeyPair to enable SSH access to the instance"</span>,
      <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"String"</span>
    }
  },
  <span class="hljs-attr">"Mappings"</span>: <span>{</span>
    <span class="hljs-attr">"RegionMap"</span>: <span>{</span>
      <span class="hljs-attr">"us-east-1"</span>: <span>{</span>
        <span class="hljs-attr">"AMI"</span>: <span class="hljs-string">"ami-76f0061f"</span>
      },
      <span class="hljs-attr">"us-west-1"</span>: <span>{</span>
        <span class="hljs-attr">"AMI"</span>: <span class="hljs-string">"ami-655a0a20"</span>
      },
      <span class="hljs-attr">"eu-west-1"</span>: <span>{</span>
        <span class="hljs-attr">"AMI"</span>: <span class="hljs-string">"ami-7fd4e10b"</span>
      },
      <span class="hljs-attr">"ap-southeast-1"</span>: <span>{</span>
        <span class="hljs-attr">"AMI"</span>: <span class="hljs-string">"ami-72621c20"</span>
      },
      <span class="hljs-attr">"ap-northeast-1"</span>: <span>{</span>
        <span class="hljs-attr">"AMI"</span>: <span class="hljs-string">"ami-8e08a38f"</span>
      }
    }
  },
  <span class="hljs-attr">"Resources"</span>: <span>{</span>
    <span class="hljs-attr">"Ec2Instance"</span>: <span>{</span>
      <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"AWS::EC2::Instance"</span>,
      <span class="hljs-attr">"Properties"</span>: <span>{</span>
        <span class="hljs-attr">"KeyName"</span>: <span>{</span>
          <span class="hljs-attr">"Ref"</span>: <span class="hljs-string">"KeyName"</span>
        },
        <span class="hljs-attr">"ImageId"</span>: <span>{</span>
          <span class="hljs-attr">"Fn::FindInMap"</span>: [
            <span class="hljs-string">"RegionMap"</span>,
            <span>{</span>
              <span class="hljs-attr">"Ref"</span>: <span class="hljs-string">"AWS::Region"</span>
            },
            <span class="hljs-string">"AMI"</span>
          ]
        },
        <span class="hljs-attr">"UserData"</span>: <span>{</span>
          <span class="hljs-attr">"Fn::Base64"</span>: <span class="hljs-string">"80"</span>
        }
      }
    }
  }
}</blockquote></pre>
        </div>
        <div id="YAML" name="YAML" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.mappings.yaml">YAML</h3>
          <pre class="programlisting"><blockquote class="yaml hljs"><span class="hljs-attr">Parameters:</span>
  <span class="hljs-attr">KeyName:</span>
    <span class="hljs-attr">Description:</span> <span class="hljs-string">Name</span> <span class="hljs-string">of</span> <span class="hljs-string">an</span> <span class="hljs-string">existing</span> <span class="hljs-string">EC2</span> <span class="hljs-string">KeyPair</span> <span class="hljs-string">to</span> <span class="hljs-string">enable</span> <span class="hljs-string">SSH</span> <span class="hljs-string">access</span> <span class="hljs-string">to</span> <span class="hljs-string">the</span> <span class="hljs-string">instance</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">String</span>
<span class="hljs-attr">Mappings:</span>
  <span class="hljs-attr">RegionMap:</span>
    <span class="hljs-attr">us-east-1:</span>
      <span class="hljs-attr">AMI:</span> <span class="hljs-string">ami-76f0061f</span>
    <span class="hljs-attr">us-west-1:</span>
      <span class="hljs-attr">AMI:</span> <span class="hljs-string">ami-655a0a20</span>
    <span class="hljs-attr">eu-west-1:</span>
      <span class="hljs-attr">AMI:</span> <span class="hljs-string">ami-7fd4e10b</span>
    <span class="hljs-attr">ap-southeast-1:</span>
      <span class="hljs-attr">AMI:</span> <span class="hljs-string">ami-72621c20</span>
    <span class="hljs-attr">ap-northeast-1:</span>
      <span class="hljs-attr">AMI:</span> <span class="hljs-string">ami-8e08a38f</span>
<span class="hljs-attr">Resources:</span>
  <span class="hljs-attr">Ec2Instance:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">'AWS::EC2::Instance'</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">KeyName:</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">KeyName</span>
      <span class="hljs-attr">ImageId:</span> <span class="hljs-type">!FindInMap</span> 
        <span class="hljs-bullet">-</span> <span class="hljs-string">RegionMap</span>
        <span class="hljs-bullet">-</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">'AWS::Region'</span>
        <span class="hljs-bullet">-</span> <span class="hljs-string">AMI</span>
      <span class="hljs-attr">UserData:</span> <span class="hljs-type">!Base64</span> <span class="hljs-string">'80'</span></blockquote></pre>
        </div>
        In the RegionMap, each region is mapped to a name-value pair. The name-value pair is a
        label, and the value to map. In the RegionMap, AMI is the label and the AMI ID is the value.
        To use a map to return a value, you use the Fn::FindInMap function, passing the
        name of the map, the value used to find the mapped value, and the label of the mapped value
        you want to return.<span> In the example above, the ImageId property of
          the resource Ec2Instance uses the Fn::FindInMap function to determine its value by
          specifying RegionMap as the map to use, AWS::Region as the input value to map from, and AMI
          as the label to identify the value to map to. For example, if this template were used to
          create a stack in the US West (N. California) Region, <code class="code">ImageId</code> would be
          set to <code class="code">ami-655a0a20</code>.</span><br><br>

        <div class="awsdocs-note awsdocs-tip">
          <div class="awsdocs-note-title">
            <span>Tip</span>
          </div>
          <div class="awsdocs-note-text">
            <blockquote class="code">The AWS::Region</blockquote> pseudo parameter enables you to get the region where
            the stack is created. Some
            resources, such as AWS::EC2::Instance,
            AWS::AutoScaling::AutoScalingGroup,
            and AWS::ElasticLoadBalancing::LoadBalancer,
            have a property that
            specifies availability zones. You can use the Fn::GetAZs function to
            get the list of
            all availability zones in a region.
          </div>
        </div>
        <h2 id="gettingstarted.templatebasics.outputs">Constructed values and output values</h2>

        Parameters and mappings are an excellent way to pass or determine specific values at stack creation
        time,
        but there can be situations where a value from a parameter or other resource attribute is only part of
        the
        value you need. For example, in the following fragment from the WordPress template, the Fn::Join
        function
        constructs the <code class="code">Target</code> subproperty of the <code class="code">HealthCheck</code> property for the <code class="code">ElasticLoadBalancer</code>
        resource by
        concatenating the <code class="code">WebServerPort</code> parameter with other literal strings to form
        the value needed.<br><br>
        <div id="JSON" name="JSON" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.outputs.json">JSON</h3>
          <pre class="programlisting"><blockquote class="json hljs"><span>{</span>
  <span class="hljs-attr">"Resources"</span>: <span>{</span>
    <span class="hljs-attr">"ElasticLoadBalancer"</span>: <span>{</span>
      <span class="hljs-attr">"Type"</span>: <span class="hljs-string">"AWS::ElasticLoadBalancing::LoadBalancer"</span>,
      <span class="hljs-attr">"Properties"</span>: <span>{</span>
        <span class="hljs-attr">"AvailabilityZones"</span>: <span>{</span>
          <span class="hljs-attr">"Fn::GetAZs"</span>: <span class="hljs-string">""</span>
        },
        <span class="hljs-attr">"Instances"</span>: [
          <span>{</span>
            <span class="hljs-attr">"Ref"</span>: <span class="hljs-string">"Ec2Instance1"</span>
          },
          <span>{</span>
            <span class="hljs-attr">"Ref"</span>: <span class="hljs-string">"Ec2Instance2"</span>
          }
        ],
        <span class="hljs-attr">"Listeners"</span>: [
          <span>{</span>
            <span class="hljs-attr">"LoadBalancerPort"</span>: <span class="hljs-string">"80"</span>,
            <span class="hljs-attr">"InstancePort"</span>: <span>{</span>
              <span class="hljs-attr">"Ref"</span>: <span class="hljs-string">"WebServerPort"</span>
            },
            <span class="hljs-attr">"Protocol"</span>: <span class="hljs-string">"HTTP"</span>
          }
        ],
        <span class="hljs-attr">"HealthCheck"</span>: <span>{</span>
          <span class="hljs-attr">"Target"</span>: <span>{</span>
            <span class="hljs-attr">"Fn::Join"</span>: [
              <span class="hljs-string">""</span>,
              [
                <span class="hljs-string">"HTTP:"</span>,
                <span>{</span>
                  <span class="hljs-attr">"Ref"</span>: <span class="hljs-string">"WebServerPort"</span>
                },
                <span class="hljs-string">"/"</span>
              ]
            ]
          },
          <span class="hljs-attr">"HealthyThreshold"</span>: <span class="hljs-string">"3"</span>,
          <span class="hljs-attr">"UnhealthyThreshold"</span>: <span class="hljs-string">"5"</span>,
          <span class="hljs-attr">"Interval"</span>: <span class="hljs-string">"30"</span>,
          <span class="hljs-attr">"Timeout"</span>: <span class="hljs-string">"5"</span>
        }
      }
    }
  }
}</blockquote></pre>
        </div>
        <div id="YAML" name="YAML" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.outputs.yaml">YAML</h3>
          <pre class="programlisting"><blockquote class="yaml hljs"><span class="hljs-attr">Resources:</span>
  <span class="hljs-attr">ElasticLoadBalancer:</span>
    <span class="hljs-attr">Type:</span> <span class="hljs-string">'AWS::ElasticLoadBalancing::LoadBalancer'</span>
    <span class="hljs-attr">Properties:</span>
      <span class="hljs-attr">AvailabilityZones:</span> <span class="hljs-type">!GetAZs</span> <span class="hljs-string">''</span>
      <span class="hljs-attr">Instances:</span>
        <span class="hljs-bullet">-</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">Ec2Instance1</span>
        <span class="hljs-bullet">-</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">Ec2Instance2</span>
      <span class="hljs-attr">Listeners:</span>
        <span class="hljs-bullet">-</span> <span class="hljs-attr">LoadBalancerPort:</span> <span class="hljs-string">'80'</span>
          <span class="hljs-attr">InstancePort:</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">WebServerPort</span>
          <span class="hljs-attr">Protocol:</span> <span class="hljs-string">HTTP</span>
      <span class="hljs-attr">HealthCheck:</span>
        <span class="hljs-attr">Target:</span> <span class="hljs-type">!Join</span> 
          <span class="hljs-bullet">-</span> <span class="hljs-string">''</span>
          <span class="hljs-bullet">-</span> <span class="hljs-bullet">-</span> <span class="hljs-string">'HTTP:'</span>
            <span class="hljs-bullet">-</span> <span class="hljs-type">!Ref</span> <span class="hljs-string">WebServerPort</span>
            <span class="hljs-bullet">-</span> <span class="hljs-string">/</span>
        <span class="hljs-attr">HealthyThreshold:</span> <span class="hljs-string">'3'</span>
        <span class="hljs-attr">UnhealthyThreshold:</span> <span class="hljs-string">'5'</span>
        <span class="hljs-attr">Interval:</span> <span class="hljs-string">'30'</span>
        <span class="hljs-attr">Timeout:</span> <span class="hljs-string">'5'</span></blockquote></pre>
        </div>
        The Fn::Join function takes two parameters, a delimiter that separates the values you
        want to concatenate and an array of values in the order that you want them to appear. In the
        example above, the Fn::Join function specifies an empty string as the delimiter and HTTP:, the
        value of the WebServerPort parameter, and a / character as the values to concatenate. If
        WebServerPort had a value of 8888, the Target property would be set to the following
        value:
        <br><br>
        <pre class="programlisting"><blockquote class="hljs makefile"><span class="hljs-section">HTTP:8888/</span></blockquote></pre>
        The Fn::Join function is also useful for declaring output values for the stack. The Outputs object in
        the
        template contains declarations for the values that you want to have available after the stack is
        created. An
        output is a convenient way to capture important information about your resources or input parameters.
        For
        example, in the WordPress template, we declare the following Outputs object.

        <div id="JSON" name="JSON" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.outputs.json2">JSON</h3>
          <pre class="programlisting"><blockquote class="json hljs"><span class="hljs-string">"Outputs"</span>: <span>{</span>
  <span class="hljs-attr">"InstallURL"</span>: <span>{</span>
    <span class="hljs-attr">"Value"</span>: <span>{</span>
      <span class="hljs-attr">"Fn::Join"</span>: [
        <span class="hljs-string">""</span>,
        [
          <span class="hljs-string">"http://"</span>,
          <span>{</span>
            <span class="hljs-attr">"Fn::GetAtt"</span>: [
              <span class="hljs-string">"ElasticLoadBalancer"</span>,
              <span class="hljs-string">"DNSName"</span>
            ]
          },
          <span class="hljs-string">"/wp-admin/install.php"</span>
        ]
      ]
    },
    <span class="hljs-attr">"Description"</span>: <span class="hljs-string">"Installation URL of the WordPress website"</span>
  },
  <span class="hljs-attr">"WebsiteURL"</span>: <span>{</span>
    <span class="hljs-attr">"Value"</span>: <span>{</span>
      <span class="hljs-attr">"Fn::Join"</span>: [
        <span class="hljs-string">""</span>,
        [
          <span class="hljs-string">"http://"</span>,
          <span>{</span>
            <span class="hljs-attr">"Fn::GetAtt"</span>: [
              <span class="hljs-string">"ElasticLoadBalancer"</span>,
              <span class="hljs-string">"DNSName"</span>
            ]
          }
        ]
      ]
    }
  }
}</blockquote></pre>
        </div>
        <div id="YAML" name="YAML" class="section langfilter">
          <h3 id="gettingstarted.templatebasics.outputs.yaml2">YAML</h3>
          <pre class="programlisting"><blockquote class="yaml hljs"><span class="hljs-attr">Outputs:</span>
  <span class="hljs-attr">InstallURL:</span>
    <span class="hljs-attr">Value:</span> <span class="hljs-type">!Join</span> 
      <span class="hljs-bullet">-</span> <span class="hljs-string">''</span>
      <span class="hljs-bullet">-</span> <span class="hljs-bullet">-</span> <span class="hljs-string">'http://'</span>
        <span class="hljs-bullet">-</span> <span class="hljs-type">!GetAtt</span> 
          <span class="hljs-bullet">-</span> <span class="hljs-string">ElasticLoadBalancer</span>
          <span class="hljs-bullet">-</span> <span class="hljs-string">DNSName</span>
        <span class="hljs-bullet">-</span> <span class="hljs-string">/wp-admin/install.php</span>
    <span class="hljs-attr">Description:</span> <span class="hljs-string">Installation</span> <span class="hljs-string">URL</span> <span class="hljs-string">of</span> <span class="hljs-string">the</span> <span class="hljs-string">WordPress</span> <span class="hljs-string">website</span>
  <span class="hljs-attr">WebsiteURL:</span>
    <span class="hljs-attr">Value:</span> <span class="hljs-type">!Join</span> 
      <span class="hljs-bullet">-</span> <span class="hljs-string">''</span>
      <span class="hljs-bullet">-</span> <span class="hljs-bullet">-</span> <span class="hljs-string">'http://'</span>
        <span class="hljs-bullet">-</span> <span class="hljs-type">!GetAtt</span> 
          <span class="hljs-bullet">-</span> <span class="hljs-string">ElasticLoadBalancer</span>
          <span class="hljs-bullet">-</span> <span class="hljs-string">DNSName</span></blockquote></pre>
        </div>
        <br><br>
        Each output value has a name, a Value attribute that contains declaration of the value returned as the
        output value, and optionally a description of the value. In the previous example, InstallURL is the
        string
        returned by a Fn::Join function call that concatenates http://, the DNS name of the resource
        ElasticLoadBalancer, and /wp-admin/install.php. The output value would be similar to the following:<br><br>

        <pre class="programlisting"><blockquote class="nohighlight hljs">http://mywptests-elasticl-1gb51l6sl8y5v-206169572.<span>
                     us-east-2</span>.elb.amazonaws.com/wp-admin/install.php</blockquote></pre>
        In the Get Started tutorial, we used this link to conveniently go to the installation
        page for the WordPress blog that we created. CloudFormation generates the output values after it
        finishes creating the stack. You can view output values in the Outputs tab of the CloudFormation
        console or by using the <code class="code">aws cloudformation describe-stacks</code> command.<br><br>

        <h2 id="gettingstarted.templatebasics.learnmore">Next steps</h2>

        We just walked through the basic parts of a template and how to use them. You learned the following
        about templates:
        <div class="itemizedlist">






          <ul class="itemizedlist" type="disc">
            <li class="listitem">
              Declaring resources and their properties.
            </li>
            <li class="listitem">
              Referencing other resources with the Ref function and resource attributes using
              the Fn::GetAtt function.
            </li>
            <li class="listitem">
              Using parameters to enable users to specify values at stack creation time and
              using constraints to validate parameter input.
            </li>
            <li class="listitem">
              Using mappings to determine conditional values.
            </li>
            <li class="listitem">
              Using the Fn::Join function to construct values based on parameters, resource
              attributes, and other strings.
            </li>
            <li class="listitem">
              Using output values to capture information about the stack's resources.
            </li>
          </ul>
        </div>
        We didn't cover two top level objects in a template: AWSTemplateFormatVersion and
        Description. AWSTemplateFormatVersion is simply the version of the template format – if
        you don't specify it, CloudFormation will use the latest version.
        The Description is any valid JSON or YAML string. This description appears in the Specify
        Parameters page of the Create Stack wizard. For more information, see Format version andDescription.

        Of course, there are more advanced template and stack features. Here is a list of a few important ones
        that
        you'll want to learn more about:
        <em>Optional attributes</em> that can be used with any resource:
        <div class="itemizedlist">



          <ul class="itemizedlist" type="disc">
            <li class="listitem">
              DependsOn attribute enables you to specify that
              one
              resource must be created after another.
            </li>
            <li class="listitem">
              DeletionPolicy attribute enables you to
              specify
              how CloudFormation should handle the deletion of a resource.
            </li>
            <li class="listitem">
              Metadata attribute enables you to specify
              structured
              data with a resource.
            </li>
          </ul>
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