<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra EC2 in Boto3</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Boto3 EC2">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <link id="theme-style" rel="stylesheet" href="../../../../../assets/css/theme.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">EC2 in Python</strong><br><br>
                <ul>
                    <li><a href="s3.php">S3</a></li>
                    <li><a href="dydb.php">DynamoDb</a></li>
                    <li><a href="cloudwatch.php">CloudWatch</a></li>
                    <li><a href="lambda.php">Lambda</a></li>
                    <li><a href="rds.php">RDS</a></li>
                    <li><a href="ebs.php">EBS</a></li>
                    <li><a href="ec2.php">EC2</a></li>
                    <li><a href="vpc.php">VPC</a></li>
                </ul>

            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">EC2 INSTANCES USING BOTO3 IN PYTHON</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com">Home</a></li>
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/pages/Boto3/">Boto3</a></li>
                <li class="breadcrumb-item active">EC2</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h3>In this article </h3>
                <ul>
                    <li><a href="#h-prerequisites" data-level="2">Prerequisites</a></li>
                    <li><a href="#h-how-to-manage-ec2-instances-using-boto3" data-level="2">How to manage EC2 Instances using Boto3?</a>
                        <ul>
                            `<li><a href="#Creating-EC2-instance" data-level="3">Creating EC2 instance</a></li>
                            <li><a href="#h-listing-ec2-instances" data-level="3">Listing EC2 Instances</a></li>
                            <li><a href="#Filtering-EC2-instances" data-level="3">Filtering EC2 instances</a>
                                <ul>
                                    <li><a href="#Filtering-EC2-instances-by-state" data-level="4">Filtering EC2 instances by state</a></li>
                                    <li><a href="#Filtering-EC2-instances-by-type" data-level="4">Filtering EC2 instances by type</a></li>
                                    <li><a href="#Filtering-EC2-instances-by-tag" data-level="4">Filtering EC2 instances by Tag</a></li>
                                    <li><a href="#Filtering-EC2-instances-by-instance-ID" data-level="4">Filtering EC2 instances by instance ID</a></li>
                                </ul>
                            </li>
                            <li><a href="#Describing-EC2-instance-properties" data-level="3">Describing EC2 instance properties</a>
                                <ul>
                                    <li><a href="#Describing-all-EC2-instance-properties" data-level="4">Describing all EC2 instance properties</a></li>
                                    <li><a href="#Listing-EC2-instance-EBS-volumes" data-level="4">Listing EC2 instance EBS volumes</a></li>
                                    <li><a href="#Getting-EC2-instance-state" data-level="4">Getting EC2 instance state</a></li>
                                </ul>
                            </li>
                            <li><a href="#Managing-EC2-instance-Tags" data-level="3">Managing EC2 instance Tags</a>
                                <ul>
                                    <li><a href="#Adding-Tags-to-EC2-instance" data-level="4">Adding Tags to EC2 instance</a></li>
                                    <li><a href="#Listing-EC2-instance-Tags" data-level="4">Listing EC2 instance Tags</a></li>
                                    <li><a href="#Updating-EC2-Instance-Tags" data-level="4">Updating EC2 instance Tags</a></li>
                                    <li><a href="#Deleting-EC2-Instance-Tags" data-level="4">Deleting EC2 instance Tags</a></li>
                                </ul>
                            </li>
                            <li><a href="#EC2-instance-advanced-monitoring" data-level="3">EC2 instance advanced monitoring</a></li>
                            <li><a href="#Managing-EC2-instance-state" data-level="3">Managing EC2 instance state</a>
                                <ul>
                                    <li><a href="#Starting-EC2-instance" data-level="4">Starting EC2 instance</a></li>
                                    <li><a href="#Stopping-EC2-instance" data-level="4">Stopping EC2 instance</a></li>
                                    <li><a href="#Rebooting-EC2-instance" data-level="4">Rebooting EC2 instance</a></li>
                                    <li><a href="#h-terminating-ec2-instance" data-level="4">Terminating EC2 instance</a></li>
                                </ul>
                            </li>
                            <li><a href="#Modifying-EC2-instance-attributes-using-Boto3" data-level="3">Modifying EC2 instance attributes using Boto3</a>
                                <ul>
                                    <li><a href="#Changing-EC2-instance-type" data-level="4">Changing EC2 instance type</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#How-to-manage-SSH-keys-using-Boto3" data-level="2">How to manage SSH keys using Boto3?</a>
                        <ul>
                            <li><a href="#Creating-SSH-key" data-level="3">Creating SSH key</a></li>
                            <li><a href="#Listing-SSH-keys" data-level="3">Listing SSH keys</a></li>
                            <li><a href="#Searching-for-SSH-keys" data-level="3">Searching for SSH keys</a>
                                <ul>
                                    <li><a href="#Searching-for-SSH-key-by-name" data-level="4">Searching for SSH key by name</a></li>
                                    <li><a href="#Searching-for-SSH-key-by-tag" data-level="4">Searching for SSH key by tag</a></li>
                                </ul>
                            </li>
                            <li><a href="#Deleting-SSH-key" data-level="3">Deleting SSH key</a></li>
                        </ul>
                    </li>
                    <li><a href="#Managing-Security-Groups-using-Boto3" data-level="2">Managing Security Groups using Boto3</a>
                        <ul>
                            <li><a href="#Creating-a-Security-Group" data-level="3">Creating a Security Group</a></li>
                            <li><a href="#Listing-all-Security-Groups" data-level="3">Listing all Security Groups</a></li>
                            <li><a href="#Searching-Security-Groups" data-level="3">Searching Security Groups</a>
                                <ul>
                                    <li><a href="#Searching-Security-Groups-by-ID" data-level="4">Searching Security Groups by ID</a></li>
                                    <li><a href="#Searching-Security-Groups-by-Tag" data-level="4">Searching Security Groups by Tag</a></li>
                                </ul>
                            </li>
                            <li><a href="#h-describing-security-groups" data-level="3">Describing Security Groups</a></li>
                            <li><a href="#Deleting-Security-Groups" data-level="3">Deleting Security Groups</a></li>
                            <li><a href="#Attaching-Security-Groups-to-the-EC2-Instance" data-level="3">Attaching Security Groups to the EC2 Instance</a></li>
                            <li><a href="#Listing-EC2-instance-Security-Groups" data-level="3">Listing EC2 instance Security Groups</a></li>
                            <li><a href="#Detaching-Security-Group-from-the-EC2-Instance" data-level="3">Detaching Security Group from the EC2 Instance</a></li>
                        </ul>
                    </li>
                    <li><a href="#How-to-manage-Elastic-IP-addresses-using-Boto3" data-level="2">How to manage Elastic IP addresses using Boto3?</a>
                        <ul>
                            <li><a href="#Allocating-Elastic-IP-address" data-level="3">Allocating Elastic IP address</a></li>
                            <li><a href="#Listing-and-describing-Elastic-IP-addresses" data-level="3">Listing and describing Elastic IP addresses</a></li>
                            <li><a href="#Attaching-associating-an-Elastic-IP-to-an-EC2-Instance" data-level="3">Attaching an Elastic IP to an EC2 Instance</a></li>
                            <li><a href="#Detaching-an-Elastic-IP-address-from-an-EC2-instance" data-level="3">Detaching an Elastic IP address from an EC2 instance</a></li>
                            <li><a href="#Releasing-the-Elastic-IP-address" data-level="3">Releasing the Elastic IP address</a></li>
                        </ul>
                    </li>
                    <li><a href="#Summary" data-level="2">Summary</a></li>
                    <li><a href="#Related-articles" data-level="2">Related articles</a></li>
                </ul>
                <br>
                The Amazon EC2 is a cloud service within Amazon Web Services cloud platform that allows building and managing virtual machines to support various application workloads. With Amazon EC2, you can create, resize or decommission instances at any time depending on the business requirements. As a Cloud Automation Engineer, you’ll be dealing with a lot of tasks around this topic. So, this article is providing code snippets that will help you create, start, stop, list, filter, delete, tag, and modify Amazon EC2 Instances using the AWS Software Development Kit (SDK) for Python – Boto3 library.
                <h3 id="h-prerequisites">Prerequisites</h3>
                <ul>
                    <li>Ensure that you have an AWS user account and programmatic API access with permissions for managing Amazon EC2 service.</li>
                    <li>To simplify your cloud automation jorney we suggest you to configure and use the AWS Cloud9 IDE. Alternatively, you can use your local Linux and Windows command-line interfaces. If that’s the case, you need to set up your Python environment and the AWS access credentials for your shell environment.
                    </li>
                </ul>

                <h3 id="h-how-to-manage-ec2-instances-using-boto3">How to manage EC2 Instances using Boto3?</h3>
                This section of the article will cover the basic operations with EC2 instances using the Boto3 library.
                <h4 id="Creating-EC2-instance">Creating EC2 instance</h4>
                <meta charset="utf-8">To create one or more EC2 instances, you need to use the create_instances() method of the EC2 resource. The simplest EC2 instance configuration might include the following arguments:
                <ul>
                    <li><code>MinCount</code> – minimum number of EC2 instances to launch</li>
                    <li><code>MaxCount</code> – maximum number of EC2 instances to launch
                        <meta charset="utf-8">
                    </li>
                    <li><code>ImageId</code> – the Amazon Machine Image which is used to launch your EC2 instance (Working with Snapshots and AMIs using Boto3 in Python)</li>
                    <li><code>InstanceType</code> – Instance Type specifies how much CPU and RAM resources your EC2 instance should have</li>
                    <li><code>KeyName</code> – SSH key name, which you’re going to use to get remote access to the EC2 instance</li>
                </ul>
                Such configuration will launch an EC2 instance in the default VPC:

                <div class="code-title">Creating EC2 instance</div>
                <pre title="Creating EC2 instance" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
                
<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
KEY_PAIR_NAME <span class="token operator">=</span> <span class="token string">'my-ssh-key-pair'</span>
AMI_ID <span class="token operator">=</span> <span class="token string">'ami-0cc00ed857256d2b4'</span>

instances <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>create_instances<span class="token punctuation">(</span>
    MinCount <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">,</span>
    MaxCount <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">,</span>
    ImageId<span class="token operator">=</span>AMI_ID<span class="token punctuation">,</span>
    InstanceType<span class="token operator">=</span><span class="token string">'t2.micro'</span><span class="token punctuation">,</span>
    KeyName<span class="token operator">=</span>KEY_PAIR_NAME<span class="token punctuation">,</span>
    TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'ResourceType'</span><span class="token punctuation">:</span> <span class="token string">'instance'</span><span class="token punctuation">,</span>
            <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token punctuation">{</span>
                    <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
                    <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'my-ec2-instance'</span>
                <span class="token punctuation">}</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> instance <span class="token keyword">in</span> instances<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'EC2 instance "</span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">" has been launched'</span></span><span class="token punctuation">)</span>

    instance<span class="token punctuation">.</span>wait_until_running<span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'EC2 instance "</span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">" has been started'</span></span><span class="token punctuation">)</span></blockquote></pre>
                The
                <meta charset="utf-8"><code>create_instances()</code> method returns a list of launched instances. You can use the fol-loop to walk through the instances and wait till every instance is up and running if you need to (the
                <meta charset="utf-8"><code>wait_until_running()</code> method).
                <br>Here’s an execution output:<br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-EC2-instance-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="6. Working with EC2 Instances using Boto3 in Python - Creating EC2 instance" class="wp-image-29875 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-EC2-instance-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.6186032864600632" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h4 id="h-listing-ec2-instances">Listing EC2 Instances</h4>
                The best way to list all EC2 instances is to use the <code>all()</code> method from the instances collection of the EC2 resource.
                Then you can use for-loop to iterate through the returned list of instances to get the information about Instance ID (<code>id</code>), Platform (<code>platform</code>), Instance Type (<code>instance_type</code>), Public IP (<code>public_ip_address</code>), Image (<code>image.id</code>) and many others by accessing instance object attributes.
                Then you can use for-loop to iterate through the returned list of instances to get the information about Instance ID (<code>id</code>), Platform (<code>platform</code>), Instance Type (<code>instance_type</code>), Public IP (<code>public_ip_address</code>), Image (<code>image.id</code>) and many others by accessing instance object attributes.
                <div class="code-title">Listing EC2 Instances</div>
                <pre title="Listing EC2 Instances" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

instances <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>instances<span class="token punctuation">.</span><span class="token builtin">all</span><span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">for</span> instance <span class="token keyword">in</span> instances<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'EC2 instance </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">" information:'</span></span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Instance state: </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span>state<span class="token punctuation">[</span><span class="token string">"Name"</span><span class="token punctuation">]</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Instance AMI: </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span>image<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Instance platform: </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span>platform<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Instance type: "</span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span>instance_type<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Piblic IPv4 address: </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span>public_ip_address<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">'-'</span><span class="token operator">*</span><span class="token number">60</span><span class="token punctuation">)</span></blockquote></pre>
                The screenshot below shows the resulting sample output from running the script.

                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-EC2-instances-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="7. Working with EC2 Instances using Boto3 in Python - Listing all EC2 instances" class="wp-image-30361 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-EC2-instances-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-EC2-instances-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-EC2-instances-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-EC2-instances-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-EC2-instances-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-EC2-instances-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.6061812968717744" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-EC2-instances-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-EC2-instances-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-EC2-instances-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-EC2-instances-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-EC2-instances-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h4 id="Filtering-EC2-instances">Filtering EC2 instances</h4>
                Filtering EC2 allows you to get a list of EC2 instances based on specified conditions. For example, you can get specific instance information by instance type, a list of instances based on Tags, instance state, and many other conditions.

                <h4 id="Filtering-EC2-instances-by-state">Filtering EC2 instances by state</h4>
                To filter by state, you can use the <code>filter()</code> method in the instances collection of the EC2 resource.
                <div class="code-title">Filtering EC2 instances by state</div>
                <pre title="Filtering EC2 instances by state" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_STATE <span class="token operator">=</span> <span class="token string">'running'</span>

instances <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>instances<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    Filters<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'instance-state-name'</span><span class="token punctuation">,</span>
            <span class="token string">'Values'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                INSTANCE_STATE
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Instances in state "</span><span class="token interpolation"><span class="token punctuation">{</span>INSTANCE_STATE<span class="token punctuation">}</span></span><span class="token string">":'</span></span><span class="token punctuation">)</span>

<span class="token keyword">for</span> instance <span class="token keyword">in</span> instances<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'  - Instance ID: </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br> Here’s an execution output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-state-1024x577.png?ezimgfmt=rs:718x405/rscb1/ng:webp/ngcb1" alt="8. Working with EC2 Instances using Boto3 in Python - Filtering EC2 instances by state" class="wp-image-30402 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-state-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-state-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-state-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-state-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-state-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-state-1024x577.png?ezimgfmt=rs:718x405/rscb1/ng:webp/ngcb1" ezoid="0.4012780099360427" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-state-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-state-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-state-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-state-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-state-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h4 id="Filtering-EC2-instances-by-type">Filtering EC2 instances by type</h4>
                To filter EC2 instances by type, you can use
                <meta charset="utf-8">the <code>filter()</code> method in the <a href="https://boto3.amazonaws.com/v1/documentation/api/latest/reference/services/ec2.html#EC2.ServiceResource.instances" target="_blank" rel="noreferrer noopener">instances</a> collection of the EC2 resource:
                <div class="code-title">Filtering EC2 instances by type</div>
                <pre title="Filtering EC2 instances by type" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_TYPE <span class="token operator">=</span> <span class="token string">'t2.micro'</span>

instances <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>instances<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    Filters<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'instance-type'</span><span class="token punctuation">,</span>
            <span class="token string">'Values'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                INSTANCE_TYPE
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Instances of type "</span><span class="token interpolation"><span class="token punctuation">{</span>INSTANCE_TYPE<span class="token punctuation">}</span></span><span class="token string">":'</span></span><span class="token punctuation">)</span>

<span class="token keyword">for</span> instance <span class="token keyword">in</span> instances<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'  - Instance ID: </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an execution output:

                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-type-1024x577.png?ezimgfmt=rs:718x405/rscb1/ng:webp/ngcb1" alt="9. Working with EC2 Instances using Boto3 in Python - Filtering EC2 instances by type" class="wp-image-30405 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-type-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-type-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-type-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-type-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-type-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-type-1024x577.png?ezimgfmt=rs:718x405/rscb1/ng:webp/ngcb1" ezoid="0.30569175887712197" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-type-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-type-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-type-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-type-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-type-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h4 id="Filtering-EC2-instances-by-tag">Filtering EC2 instances by Tag</h4>
                <meta charset="utf-8">To filter EC2 instances by type, you can use
                <meta charset="utf-8">the <code>filter()</code> method in the <a href="https://boto3.amazonaws.com/v1/documentation/api/latest/reference/services/ec2.html#EC2.ServiceResource.instances" target="_blank" rel="noreferrer noopener">instances</a> collection of the EC2 resource:<span id="ezoic-pub-ad-placeholder-134" class="ezoic-adpicker-ad"></span>
                <div class="code-title">Filtering EC2 instances by Tag</div>
                <pre title="Filtering EC2 instances by Tag" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_NAME_TAG_VALUE <span class="token operator">=</span> <span class="token string">'my-ec2-instance'</span>

instances <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>instances<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    Filters<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'tag:Name'</span><span class="token punctuation">,</span>
            <span class="token string">'Values'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                INSTANCE_NAME_TAG_VALUE
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Instances with Tag "Name=</span><span class="token interpolation"><span class="token punctuation">{</span>INSTANCE_NAME_TAG_VALUE<span class="token punctuation">}</span></span><span class="token string">":'</span></span><span class="token punctuation">)</span>

<span class="token keyword">for</span> instance <span class="token keyword">in</span> instances<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'  - Instance ID: </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an execution output:

                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Tag-1024x577.png?ezimgfmt=rs:718x405/rscb1/ng:webp/ngcb1" alt="10. Working with EC2 Instances using Boto3 in Python - Filtering EC2 instances by Tag" class="wp-image-30408 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Tag-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Tag-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Tag-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Tag-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Tag-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Tag-1024x577.png?ezimgfmt=rs:718x405/rscb1/ng:webp/ngcb1" ezoid="0.0802159124720927" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Tag-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Tag-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Tag-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Tag-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Tag-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h4 id="Filtering-EC2-instances-by-instance-ID">Filtering EC2 instances by instance ID</h4>
                <meta charset="utf-8">To filter EC2 instances by Instance ID, you can use
                <meta charset="utf-8">the <code>filter()</code> method in the <a href="https://boto3.amazonaws.com/v1/documentation/api/latest/reference/services/ec2.html#EC2.ServiceResource.instances" target="_blank" rel="noreferrer noopener">instances</a> collection of the EC2 resource:
                <div class="code-title">Filtering EC2 instances by instance ID</div>
                <pre title="Filtering EC2 instances by instance ID" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-020b3f1914105320d'</span>

instances <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>instances<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    InstanceIds<span class="token operator">=</span><span class="token punctuation">[</span>
        INSTANCE_ID<span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> instance <span class="token keyword">in</span> instances<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Instance </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string"> state is </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span>state<span class="token punctuation">[</span><span class="token string">"Name"</span><span class="token punctuation">]</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <meta charset="utf-8"><br>Here’s an execution output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/11.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Instance-ID-1024x577.png?ezimgfmt=rs:677x381/rscb1/ng:webp/ngcb1" alt="11. Working with EC2 Instances using Boto3 in Python - Filtering EC2 instances by Instance ID" class="wp-image-30411 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/11.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Instance-ID-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/11.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Instance-ID-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/11.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Instance-ID-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/11.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Instance-ID-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/11.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Instance-ID-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/11.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Instance-ID-1024x577.png?ezimgfmt=rs:677x381/rscb1/ng:webp/ngcb1" ezoid="0.7672173457598142" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/11.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Instance-ID-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/11.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Instance-ID-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/11.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Instance-ID-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/11.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Instance-ID-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/11.-Working-with-EC2-Instances-using-Boto3-in-Python-Filtering-EC2-instances-by-Instance-ID-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="Describing-EC2-instance-properties">Describing EC2 instance properties</h3>
                To access the
                <meta charset="utf-8">EC2 instance properties, you can use the
                <meta charset="utf-8">describe_instances() method of the EC2 client (gets all properties in the Python dictionary format), or you can use the EC2.Instance class’ attributes (provides access to a specific attribute) of the EC2 resource.
                <h4 id="Describing-all-EC2-instance-properties">
                    <meta charset="utf-8">Describing all EC2 instance properties
                </h4>
                The <code>describe_instances()</code> method accepts the Filters and InstanceIds attributes that allow you to find specific instances.
                <div class="code-title">Describing all EC2 instance properties</div>
                <pre title="Describing all EC2 instance properties" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> json
<span class="token keyword">from</span> datetime <span class="token keyword">import</span> date<span class="token punctuation">,</span> datetime
<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_CLIENT <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-020b3f1914105320d'</span>


<span class="token comment"># Helper method to serialize datetime fields</span>
<span class="token keyword">def</span> <span class="token function">json_datetime_serializer</span><span class="token punctuation">(</span>obj<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token keyword">if</span> <span class="token builtin">isinstance</span><span class="token punctuation">(</span>obj<span class="token punctuation">,</span> <span class="token punctuation">(</span>datetime<span class="token punctuation">,</span> date<span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> obj<span class="token punctuation">.</span>isoformat<span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token keyword">raise</span> TypeError <span class="token punctuation">(</span><span class="token string">"Type %s not serializable"</span> <span class="token operator">%</span> <span class="token builtin">type</span><span class="token punctuation">(</span>obj<span class="token punctuation">)</span><span class="token punctuation">)</span>


response <span class="token operator">=</span> EC2_CLIENT<span class="token punctuation">.</span>describe_instances<span class="token punctuation">(</span>
    InstanceIds<span class="token operator">=</span><span class="token punctuation">[</span>
        INSTANCE_ID<span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Instance </span><span class="token interpolation"><span class="token punctuation">{</span>INSTANCE_ID<span class="token punctuation">}</span></span><span class="token string"> attributes:'</span></span><span class="token punctuation">)</span>

<span class="token keyword">for</span> reservation <span class="token keyword">in</span> response<span class="token punctuation">[</span><span class="token string">'Reservations'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>
            reservation<span class="token punctuation">,</span>
            indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">,</span>
            default<span class="token operator">=</span>json_datetime_serializer
        <span class="token punctuation">)</span>
    <span class="token punctuation">)</span></blockquote></pre><br><br>
                <br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-all-EC2-instance-properties-1024x577.png?ezimgfmt=rs:677x381/rscb1/ng:webp/ngcb1" alt="12. Working with EC2 Instances using Boto3 in Python - Describing all EC2 instance properties" class="wp-image-30422 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-all-EC2-instance-properties-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-all-EC2-instance-properties-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-all-EC2-instance-properties-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-all-EC2-instance-properties-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-all-EC2-instance-properties-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-all-EC2-instance-properties-1024x577.png?ezimgfmt=rs:677x381/rscb1/ng:webp/ngcb1" ezoid="0.8266493415961773" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-all-EC2-instance-properties-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-all-EC2-instance-properties-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-all-EC2-instance-properties-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-all-EC2-instance-properties-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-all-EC2-instance-properties-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h4 id="Listing-EC2-instance-EBS-volumes">Listing EC2 instance EBS volumes</h4>
                To get EC2 instance EBS volumes, you can use the <a href="https://boto3.amazonaws.com/v1/documentation/api/latest/reference/services/ec2.html#EC2.Instance.block_device_mappings" target="_blank" rel="noreferrer noopener">block_device_mappings</a> list of the <a href="https://boto3.amazonaws.com/v1/documentation/api/latest/reference/services/ec2.html#instance" target="_blank" rel="noreferrer noopener">EC2.Instance</a> resource:<span id="ezoic-pub-ad-placeholder-136" class="ezoic-adpicker-ad"></span>
                <div class="code-title">Listing EC2 instance EBS volumes</div>
                <pre title="Listing EC2 instance EBS volumes" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-020b3f1914105320d'</span>

instance <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>Instance<span class="token punctuation">(</span>INSTANCE_ID<span class="token punctuation">)</span>

device_mappings <span class="token operator">=</span> instance<span class="token punctuation">.</span>block_device_mappings

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Volumes attached to the EC2 instance "</span><span class="token interpolation"><span class="token punctuation">{</span>INSTANCE_ID<span class="token punctuation">}</span></span><span class="token string">":'</span></span><span class="token punctuation">)</span>

<span class="token keyword">for</span> device <span class="token keyword">in</span> device_mappings<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"  - Volume </span><span class="token interpolation"><span class="token punctuation">{</span>device<span class="token punctuation">[</span><span class="token string">'Ebs'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string">'VolumeId'</span><span class="token punctuation">]</span><span class="token punctuation">}</span></span><span class="token string"> attached as </span><span class="token interpolation"><span class="token punctuation">{</span>device<span class="token punctuation">[</span><span class="token string">'DeviceName'</span><span class="token punctuation">]</span><span class="token punctuation">}</span></span><span class="token string">"</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-EBS-volumes-1024x577.png?ezimgfmt=rs:677x381/rscb1/ng:webp/ngcb1" alt="13. Working with EC2 Instances using Boto3 in Python - Listing EC2 instance EBS volumes" class="wp-image-30432 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-EBS-volumes-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-EBS-volumes-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-EBS-volumes-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-EBS-volumes-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-EBS-volumes-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-EBS-volumes-1024x577.png?ezimgfmt=rs:677x381/rscb1/ng:webp/ngcb1" ezoid="0.15297782512421398" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-EBS-volumes-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-EBS-volumes-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-EBS-volumes-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-EBS-volumes-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-EBS-volumes-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h4 id="Getting-EC2-instance-state">
                    <meta charset="utf-8">Getting EC2 instance state
                </h4>
                To get the EC2 instance state, you can use the state list of the EC2.Instance resource:<br><br>

                <div class="code-title">Getting EC2 instance state</div>
                <pre title="Getting EC2 instance state" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-020b3f1914105320d'</span>

instance <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>Instance<span class="token punctuation">(</span>INSTANCE_ID<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'EC2 instance "</span><span class="token interpolation"><span class="token punctuation">{</span>INSTANCE_ID<span class="token punctuation">}</span></span><span class="token string">" state: </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span>state<span class="token punctuation">[</span><span class="token string">"Name"</span><span class="token punctuation">]</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                If you’d like to get a state of multiple EC2 instances, here’s an example of using the filter() method.<br>

                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-EC2-Instances-using-Boto3-in-Python-Getting-EC2-instance-state-1024x577.png?ezimgfmt=rs:677x381/rscb1/ng:webp/ngcb1" alt="14. Working with EC2 Instances using Boto3 in Python - Getting EC2 instance state" class="wp-image-30433 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-EC2-Instances-using-Boto3-in-Python-Getting-EC2-instance-state-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-EC2-Instances-using-Boto3-in-Python-Getting-EC2-instance-state-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-EC2-Instances-using-Boto3-in-Python-Getting-EC2-instance-state-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-EC2-Instances-using-Boto3-in-Python-Getting-EC2-instance-state-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-EC2-Instances-using-Boto3-in-Python-Getting-EC2-instance-state-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-EC2-Instances-using-Boto3-in-Python-Getting-EC2-instance-state-1024x577.png?ezimgfmt=rs:677x381/rscb1/ng:webp/ngcb1" ezoid="0.5251171731770803" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-EC2-Instances-using-Boto3-in-Python-Getting-EC2-instance-state-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-EC2-Instances-using-Boto3-in-Python-Getting-EC2-instance-state-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-EC2-Instances-using-Boto3-in-Python-Getting-EC2-instance-state-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-EC2-Instances-using-Boto3-in-Python-Getting-EC2-instance-state-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-EC2-Instances-using-Boto3-in-Python-Getting-EC2-instance-state-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="Managing-EC2-instance-Tags">Managing EC2 instance Tags</h3>
                Tags allow you to group your resources according to your organization and project structure, and they usually help organize resources in groups for management or billing reporting purposes.<span id="ezoic-pub-ad-placeholder-137" class="ezoic-adpicker-ad"></span>
                <h4 id="Adding-Tags-to-EC2-instance">Adding Tags to EC2 instance</h4>
                <meta charset="utf-8">To add Tags to EC2 instances, you can use the
                <meta charset="utf-8">create_tags() method of the EC2.Instance resource:
                <div class="code-title">Adding Tags to EC2 instance</div>
                <pre title="Adding Tags to EC2 instance" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-020b3f1914105320d'</span>

TAGS <span class="token operator">=</span> <span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
        <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Environment'</span><span class="token punctuation">,</span>
        <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'dev'</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">]</span>

instances <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>instances<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    InstanceIds<span class="token operator">=</span><span class="token punctuation">[</span>
        INSTANCE_ID<span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> instance <span class="token keyword">in</span> instances<span class="token punctuation">:</span>
    instance<span class="token punctuation">.</span>create_tags<span class="token punctuation">(</span>Tags<span class="token operator">=</span>TAGS<span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Tags successfully added to the instance </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br>
                <br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-EC2-Instances-using-Boto3-in-Python-Adding-Tags-to-EC2-instance-1024x577.png?ezimgfmt=rs:718x405/rscb1/ng:webp/ngcb1" alt="15. Working with EC2 Instances using Boto3 in Python - Adding Tags to EC2 instance" class="wp-image-30442 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-EC2-Instances-using-Boto3-in-Python-Adding-Tags-to-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-EC2-Instances-using-Boto3-in-Python-Adding-Tags-to-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-EC2-Instances-using-Boto3-in-Python-Adding-Tags-to-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-EC2-Instances-using-Boto3-in-Python-Adding-Tags-to-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-EC2-Instances-using-Boto3-in-Python-Adding-Tags-to-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-EC2-Instances-using-Boto3-in-Python-Adding-Tags-to-EC2-instance-1024x577.png?ezimgfmt=rs:718x405/rscb1/ng:webp/ngcb1" ezoid="0.7710538389674964" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-EC2-Instances-using-Boto3-in-Python-Adding-Tags-to-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-EC2-Instances-using-Boto3-in-Python-Adding-Tags-to-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-EC2-Instances-using-Boto3-in-Python-Adding-Tags-to-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-EC2-Instances-using-Boto3-in-Python-Adding-Tags-to-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-EC2-Instances-using-Boto3-in-Python-Adding-Tags-to-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h4 id="Listing-EC2-instance-Tags">Listing EC2 instance Tags</h4>

                To list all tags that are associated with the EC2 instances, you can use a for loop to iterate through the list of instance.tags (EC2 resource):
                <div class="code-title">Listing EC2 instance Tags</div>
                <pre title="Listing EC2 instance Tags" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-020b3f1914105320d'</span>

instances <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>instances<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    InstanceIds<span class="token operator">=</span><span class="token punctuation">[</span>
        INSTANCE_ID<span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> instance <span class="token keyword">in</span> instances<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'EC2 instance </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string"> tags:'</span></span><span class="token punctuation">)</span>

    <span class="token keyword">if</span> <span class="token builtin">len</span><span class="token punctuation">(</span>instance<span class="token punctuation">.</span>tags<span class="token punctuation">)</span> <span class="token operator">&gt;</span> <span class="token number">0</span><span class="token punctuation">:</span>
        <span class="token keyword">for</span> tag <span class="token keyword">in</span> instance<span class="token punctuation">.</span>tags<span class="token punctuation">:</span>
            <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'  - Tag: </span><span class="token interpolation"><span class="token punctuation">{</span>tag<span class="token punctuation">[</span><span class="token string">"Key"</span><span class="token punctuation">]</span><span class="token punctuation">}</span></span><span class="token string">=</span><span class="token interpolation"><span class="token punctuation">{</span>tag<span class="token punctuation">[</span><span class="token string">"Value"</span><span class="token punctuation">]</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'  - No Tags'</span></span><span class="token punctuation">)</span>

    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">'-'</span><span class="token operator">*</span><span class="token number">60</span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-Tags-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="16. Working with EC2 Instances using Boto3 in Python - Listing EC2 instance Tags" class="wp-image-30445 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-Tags-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-Tags-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-Tags-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-Tags-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-Tags-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-Tags-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.5550975221976009" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-Tags-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-Tags-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-Tags-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-Tags-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-EC2-instance-Tags-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h4 id="Updating-EC2-Instance-Tags">Updating EC2 instance Tags</h4>
                <meta charset="utf-8">To update Tags of EC2 instances, you can use the create_tags() method of the EC2.Instance resource that not only creates but also overrides Tags (previous example)
                <h4 id="Deleting-EC2-Instance-Tags">Deleting EC2 instance Tags</h4>
                <meta charset="utf-8">To delete Tags from EC2 instances, you can use the
                <meta charset="utf-8">delete_tags() method of the EC2.Instance resource.
                <br><br>
                <strong>Note</strong>: you can delete the EC2 instance Tag based on its <code>Key</code> (required) and optional <code>Value</code>. If you specify a Tag <code>Key</code> without a Tag <code>Value</code>, the <code>delete_tags()</code> method will delete any Tag with the specified <code>Key</code> regardless of its value. If you specify a Tag <code>Key</code> with the <code>Value</code> that equals an empty string,
                <meta charset="utf-8">the <code>delete_tags()</code> method will delete the Tag only if its value is an empty string.
                <div class="code-title">Deleting EC2 instance Tags</div>
                <pre title="Deleting EC2 instance Tags" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-020b3f1914105320d'</span>

TAGS <span class="token operator">=</span> <span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
        <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Environment'</span><span class="token punctuation">,</span>
        <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'dev'</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">]</span>

instances <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>instances<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    InstanceIds<span class="token operator">=</span><span class="token punctuation">[</span>
        INSTANCE_ID<span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> instance <span class="token keyword">in</span> instances<span class="token punctuation">:</span>
    instance<span class="token punctuation">.</span>delete_tags<span class="token punctuation">(</span>Tags<span class="token operator">=</span>TAGS<span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Tags successfully deleted from the instance </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-EC2-instance-Tags-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="17. Working with EC2 Instances using Boto3 in Python - Deleting EC2 instance Tags" class="wp-image-30452 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-EC2-instance-Tags-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-EC2-instance-Tags-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-EC2-instance-Tags-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-EC2-instance-Tags-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-EC2-instance-Tags-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-EC2-instance-Tags-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.06615744969177895" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-EC2-instance-Tags-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-EC2-instance-Tags-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-EC2-instance-Tags-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-EC2-instance-Tags-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-EC2-instance-Tags-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="EC2-instance-advanced-monitoring">EC2 instance advanced monitoring</h3>
                To enable advanced monitoring for the EC2 Instance, use the monitor() method to turn the monitoring on and the unmonitor() method to turn the monitoring off (EC2 resource):
                <div class="code-title">Enable and disable advanced monitoring</div>
                <pre title="Enable and disable advanced monitoring" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-020b3f1914105320d'</span>

instances <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>instances<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    InstanceIds<span class="token operator">=</span><span class="token punctuation">[</span>
        INSTANCE_ID<span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> instance <span class="token keyword">in</span> instances<span class="token punctuation">:</span>
    monitoring_state <span class="token operator">=</span> instance<span class="token punctuation">.</span>monitoring<span class="token punctuation">[</span><span class="token string">'State'</span><span class="token punctuation">]</span>

    <span class="token keyword">if</span> monitoring_state <span class="token operator">==</span> <span class="token string">'enabled'</span><span class="token punctuation">:</span>
        instance<span class="token punctuation">.</span>unmonitor<span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        instance<span class="token punctuation">.</span>monitor<span class="token punctuation">(</span><span class="token punctuation">)</span>

    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Instance monitoring: </span><span class="token interpolation"><span class="token punctuation">{</span>monitoring_state<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <figure class="aligncenter size-large"><img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-EC2-Instances-using-Boto3-in-Python-Enable-and-disable-Advanced-monitoring-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="18. Working with EC2 Instances using Boto3 in Python - Enable and disable Advanced monitoring" class="wp-image-30465 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-EC2-Instances-using-Boto3-in-Python-Enable-and-disable-Advanced-monitoring-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-EC2-Instances-using-Boto3-in-Python-Enable-and-disable-Advanced-monitoring-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-EC2-Instances-using-Boto3-in-Python-Enable-and-disable-Advanced-monitoring-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-EC2-Instances-using-Boto3-in-Python-Enable-and-disable-Advanced-monitoring-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-EC2-Instances-using-Boto3-in-Python-Enable-and-disable-Advanced-monitoring-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-EC2-Instances-using-Boto3-in-Python-Enable-and-disable-Advanced-monitoring-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.549962645495861" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-EC2-Instances-using-Boto3-in-Python-Enable-and-disable-Advanced-monitoring-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-EC2-Instances-using-Boto3-in-Python-Enable-and-disable-Advanced-monitoring-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-EC2-Instances-using-Boto3-in-Python-Enable-and-disable-Advanced-monitoring-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-EC2-Instances-using-Boto3-in-Python-Enable-and-disable-Advanced-monitoring-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-EC2-Instances-using-Boto3-in-Python-Enable-and-disable-Advanced-monitoring-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w"></figure>

                <h3 id="Managing-EC2-instance-state">
                    <meta charset="utf-8">Managing EC2 instance state
                </h3>
                In this section of the article, we’ll cover the basic method allowing to manage EC2 instance state: <code>start()</code>, <code>stop()</code>, <code>reboot()</code>, and <code>terminate()</code>.<span id="ezoic-pub-ad-placeholder-128" class="ezoic-adpicker-ad"></span>

                <h4 id="Starting-EC2-instance">Starting EC2 instance</h4>
                To start up instances, you can use the start() method of the EC2.Instance object:
                <div class="code-title">Starting EC2 instance</div>
                <pre title="Starting EC2 instance" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-020b3f1914105320d'</span>

instance <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>Instance<span class="token punctuation">(</span>INSTANCE_ID<span class="token punctuation">)</span>

instance<span class="token punctuation">.</span>start<span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Starting EC2 instance: </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
    
instance<span class="token punctuation">.</span>wait_until_running<span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'EC2 instance "</span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">" has been started'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <meta charset="utf-8">The
                <meta charset="utf-8">
                <meta charset="utf-8">wait_until_running() waiter method allows you to wait till the EC2 instance is up and running.
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-EC2-Instances-using-Boto3-in-Python-Start-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="20. Working with EC2 Instances using Boto3 in Python - Start EC2 instance" class="wp-image-30475 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-EC2-Instances-using-Boto3-in-Python-Start-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-EC2-Instances-using-Boto3-in-Python-Start-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-EC2-Instances-using-Boto3-in-Python-Start-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-EC2-Instances-using-Boto3-in-Python-Start-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-EC2-Instances-using-Boto3-in-Python-Start-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-EC2-Instances-using-Boto3-in-Python-Start-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.580707035486983" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-EC2-Instances-using-Boto3-in-Python-Start-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-EC2-Instances-using-Boto3-in-Python-Start-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-EC2-Instances-using-Boto3-in-Python-Start-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-EC2-Instances-using-Boto3-in-Python-Start-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-EC2-Instances-using-Boto3-in-Python-Start-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h4 id="Stopping-EC2-instance">Stopping EC2 instance</h4>
                <meta charset="utf-8">To stop instances, you can use the stop() method of the EC2.Instance object:
                <div class="code-title">Stopping EC2 instance</div>
                <pre title="Stopping EC2 instance" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-020b3f1914105320d'</span>

instance <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>Instance<span class="token punctuation">(</span>INSTANCE_ID<span class="token punctuation">)</span>

instance<span class="token punctuation">.</span>stop<span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Stopping EC2 instance: </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
    
instance<span class="token punctuation">.</span>wait_until_stopped<span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'EC2 instance "</span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">" has been stopped'</span></span><span class="token punctuation">)</span></blockquote></pre>
                The
                <meta charset="utf-8"><a href="https://boto3.amazonaws.com/v1/documentation/api/latest/reference/services/ec2.html#EC2.Instance.wait_until_stopped" target="_blank" rel="noreferrer noopener">wait_until_stopped()</a> waiter method allows you to wait till the EC2 instance is completely stopped.<span id="ezoic-pub-ad-placeholder-140" class="ezoic-adpicker-ad"></span>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-EC2-Instances-using-Boto3-in-Python-Stop-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="19. Working with EC2 Instances using Boto3 in Python - Stop EC2 instance" class="wp-image-30469 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-EC2-Instances-using-Boto3-in-Python-Stop-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-EC2-Instances-using-Boto3-in-Python-Stop-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-EC2-Instances-using-Boto3-in-Python-Stop-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-EC2-Instances-using-Boto3-in-Python-Stop-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-EC2-Instances-using-Boto3-in-Python-Stop-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-EC2-Instances-using-Boto3-in-Python-Stop-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.12347377994291664" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-EC2-Instances-using-Boto3-in-Python-Stop-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-EC2-Instances-using-Boto3-in-Python-Stop-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-EC2-Instances-using-Boto3-in-Python-Stop-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-EC2-Instances-using-Boto3-in-Python-Stop-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-EC2-Instances-using-Boto3-in-Python-Stop-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h4 id="Rebooting-EC2-instance">Rebooting EC2 instance</h4>
                <meta charset="utf-8">To stop instances, you can use the reboot() method of the EC2.Instance object:
                <div class="code-title">Rebooting EC2 instance</div>
                <pre title="Rebooting EC2 instance" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-020b3f1914105320d'</span>

instance <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>Instance<span class="token punctuation">(</span>INSTANCE_ID<span class="token punctuation">)</span>

instance<span class="token punctuation">.</span>reboot<span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'EC2 instance "</span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">" has been rebooted'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-EC2-Instances-using-Boto3-in-Python-Reboot-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="21. Working with EC2 Instances using Boto3 in Python - Reboot EC2 instance" class="wp-image-30480 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-EC2-Instances-using-Boto3-in-Python-Reboot-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-EC2-Instances-using-Boto3-in-Python-Reboot-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-EC2-Instances-using-Boto3-in-Python-Reboot-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-EC2-Instances-using-Boto3-in-Python-Reboot-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-EC2-Instances-using-Boto3-in-Python-Reboot-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-EC2-Instances-using-Boto3-in-Python-Reboot-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.886812880470923" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-EC2-Instances-using-Boto3-in-Python-Reboot-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-EC2-Instances-using-Boto3-in-Python-Reboot-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-EC2-Instances-using-Boto3-in-Python-Reboot-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-EC2-Instances-using-Boto3-in-Python-Reboot-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-EC2-Instances-using-Boto3-in-Python-Reboot-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h4 id="h-terminating-ec2-instance">Terminating EC2 instance</h4>
                <meta charset="utf-8">To terminate the EC2 instance, you can use the terminate() method of the EC2.Instance object:
                <div class="code-title">Terminate EC2 instances using Boto3</div>
                <pre title="Terminate EC2 instances using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-020b3f1914105320d'</span>

instance <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>Instance<span class="token punctuation">(</span>INSTANCE_ID<span class="token punctuation">)</span>

instance<span class="token punctuation">.</span>terminate<span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Terminating EC2 instance: </span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
    
instance<span class="token punctuation">.</span>wait_until_terminated<span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'EC2 instance "</span><span class="token interpolation"><span class="token punctuation">{</span>instance<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">" has been terminated'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <meta charset="utf-8">The
                <meta charset="utf-8"><a href="https://boto3.amazonaws.com/v1/documentation/api/latest/reference/services/ec2.html#EC2.Instance.wait_until_terminated" target="_blank" rel="noreferrer noopener">wait_until_terminated()</a> waiter method allows you to wait till the EC2 instance is completely terminated.
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-EC2-Instances-using-Boto3-in-Python-Terminate-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="22. Working with EC2 Instances using Boto3 in Python - Terminate EC2 instance" class="wp-image-30481 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-EC2-Instances-using-Boto3-in-Python-Terminate-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-EC2-Instances-using-Boto3-in-Python-Terminate-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-EC2-Instances-using-Boto3-in-Python-Terminate-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-EC2-Instances-using-Boto3-in-Python-Terminate-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-EC2-Instances-using-Boto3-in-Python-Terminate-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-EC2-Instances-using-Boto3-in-Python-Terminate-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.6056770349436889" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-EC2-Instances-using-Boto3-in-Python-Terminate-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-EC2-Instances-using-Boto3-in-Python-Terminate-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-EC2-Instances-using-Boto3-in-Python-Terminate-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-EC2-Instances-using-Boto3-in-Python-Terminate-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-EC2-Instances-using-Boto3-in-Python-Terminate-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="Modifying-EC2-instance-attributes-using-Boto3">Modifying EC2 instance attributes using Boto3</h3>
                To change EC2 instance attributes, you can use the <code>modify_attribute()</code> method of the EC2 resource.
                <br><br><strong>Note</strong>: You can specify only one attribute at a time. In addition, some attribute changes require the instance to be in a stopped state at the time of the change.

                <h4 id="Changing-EC2-instance-type">Changing EC2 instance type</h4>
                <div class="code-title">Changing EC2 instance type using Boto3</div>
                <pre title="Changing EC2 instance type using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-04091b10d2cdc86aa'</span>

instance <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>Instance<span class="token punctuation">(</span>INSTANCE_ID<span class="token punctuation">)</span>

instance<span class="token punctuation">.</span>stop<span class="token punctuation">(</span><span class="token punctuation">)</span>
instance<span class="token punctuation">.</span>wait_until_stopped<span class="token punctuation">(</span><span class="token punctuation">)</span>

instance<span class="token punctuation">.</span>modify_attribute<span class="token punctuation">(</span>
    InstanceType<span class="token operator">=</span><span class="token punctuation">{</span>
        <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'t2.small'</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">)</span>

instance<span class="token punctuation">.</span>start<span class="token punctuation">(</span><span class="token punctuation">)</span>
instance<span class="token punctuation">.</span>wait_until_running<span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Instance type has been successfully changed'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an execution output:<img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/23.-Working-with-EC2-Instances-using-Boto3-in-Python-Changing-EC2-instance-type-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="23. Working with EC2 Instances using Boto3 in Python - Changing EC2 instance type" class="wp-image-30506 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/23.-Working-with-EC2-Instances-using-Boto3-in-Python-Changing-EC2-instance-type-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/23.-Working-with-EC2-Instances-using-Boto3-in-Python-Changing-EC2-instance-type-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/23.-Working-with-EC2-Instances-using-Boto3-in-Python-Changing-EC2-instance-type-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/23.-Working-with-EC2-Instances-using-Boto3-in-Python-Changing-EC2-instance-type-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/23.-Working-with-EC2-Instances-using-Boto3-in-Python-Changing-EC2-instance-type-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/23.-Working-with-EC2-Instances-using-Boto3-in-Python-Changing-EC2-instance-type-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.5584335764797759" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/23.-Working-with-EC2-Instances-using-Boto3-in-Python-Changing-EC2-instance-type-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/23.-Working-with-EC2-Instances-using-Boto3-in-Python-Changing-EC2-instance-type-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/23.-Working-with-EC2-Instances-using-Boto3-in-Python-Changing-EC2-instance-type-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/23.-Working-with-EC2-Instances-using-Boto3-in-Python-Changing-EC2-instance-type-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/23.-Working-with-EC2-Instances-using-Boto3-in-Python-Changing-EC2-instance-type-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h3 id="How-to-manage-SSH-keys-using-Boto3">How to manage SSH keys using Boto3?</h3>
                Before creating an EC2 instance using Boto3, you have to set up an SSH key in your account. You must have an SSH key during the EC2 instance launch if you’re not using AWS Systems Manager and are willing to have remote access to your EC2 instance. In addition to that, you’ll need an SSH key to get the Windows EC2 instance password.
                You can create an SSH key manually using AWS Web Console or automatically by using the Boto3 library. This section of the article will describe how to use the Boto3 library to manage SSH keys.
                For more information about SSH keys, we recommend you look at the Top 10 SSH Features You MUST Know To Be More Productive article.

                <h3 id="Creating-SSH-key">Creating SSH key</h3>
                To create an SSH key pair, you have to use the create_key_pair() method of the EC2 resource. This method will generate a new SSH key pair and let you save the private SSH key.
                <br><br>Note: please, pay attention that if you don’t save your private SSH key returned by the create_key_pair() method, you’ll have to generate a new SSH key because AWS does not store your private SSH key.
                <div class="code-title">Generating SSH Key pair using Boto3 client</div>
                <pre title="Generating SSH Key pair using Boto3 client" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

key_pair <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>create_key_pair<span class="token punctuation">(</span>
    KeyName<span class="token operator">=</span><span class="token string">'my-ssh-key-pair'</span><span class="token punctuation">,</span>
    TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'ResourceType'</span><span class="token punctuation">:</span> <span class="token string">'key-pair'</span><span class="token punctuation">,</span>
            <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token punctuation">{</span>
                    <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
                    <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'my-ssh-key-pair'</span>
                <span class="token punctuation">}</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'SSH key fingerprint: </span><span class="token interpolation"><span class="token punctuation">{</span>key_pair<span class="token punctuation">.</span>key_fingerprint<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Private SSH key: </span><span class="token interpolation"><span class="token punctuation">{</span>key_pair<span class="token punctuation">.</span>key_material<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-EC2-Instances-using-Boto3-in-Python-Generating-SSH-Key-pair-using-Boto3-client-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="1. Working with EC2 Instances using Boto3 in Python - Generating SSH Key pair using Boto3 client" class="wp-image-29623 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-EC2-Instances-using-Boto3-in-Python-Generating-SSH-Key-pair-using-Boto3-client-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-EC2-Instances-using-Boto3-in-Python-Generating-SSH-Key-pair-using-Boto3-client-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-EC2-Instances-using-Boto3-in-Python-Generating-SSH-Key-pair-using-Boto3-client-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-EC2-Instances-using-Boto3-in-Python-Generating-SSH-Key-pair-using-Boto3-client-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-EC2-Instances-using-Boto3-in-Python-Generating-SSH-Key-pair-using-Boto3-client-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-EC2-Instances-using-Boto3-in-Python-Generating-SSH-Key-pair-using-Boto3-client-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.08022322542876359" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-EC2-Instances-using-Boto3-in-Python-Generating-SSH-Key-pair-using-Boto3-client-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-EC2-Instances-using-Boto3-in-Python-Generating-SSH-Key-pair-using-Boto3-client-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-EC2-Instances-using-Boto3-in-Python-Generating-SSH-Key-pair-using-Boto3-client-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-EC2-Instances-using-Boto3-in-Python-Generating-SSH-Key-pair-using-Boto3-client-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-EC2-Instances-using-Boto3-in-Python-Generating-SSH-Key-pair-using-Boto3-client-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="Listing-SSH-keys">Listing SSH keys</h3>
                To list all SSH keys using Boto3, you need to use the <code>all()</code> method of the key_pairs collection of the EC2 resource and the for-loop. The most useful properties of the returned KeyPairInfo object are:
                <ul>
                    <li><code>key_name</code></li>
                    <li><code>key_fingerprint</code></li>
                    <li><code>tags</code></li>
                </ul>
                <div class="code-title">Listing SSH keys</div>
                <pre title="Listing SSH keys" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

key_pairs <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>key_pairs<span class="token punctuation">.</span><span class="token builtin">all</span><span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">for</span> key <span class="token keyword">in</span> key_pairs<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'SSH key "</span><span class="token interpolation"><span class="token punctuation">{</span>key<span class="token punctuation">.</span>key_name<span class="token punctuation">}</span></span><span class="token string">" fingerprint: </span><span class="token interpolation"><span class="token punctuation">{</span>key<span class="token punctuation">.</span>key_fingerprint<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an example output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/2.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-SSH-keys-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="2. Working with EC2 Instances using Boto3 in Python - Listing SSH keys" class="wp-image-29628 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/2.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-SSH-keys-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/2.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-SSH-keys-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/2.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-SSH-keys-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/2.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-SSH-keys-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/2.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-SSH-keys-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/2.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-SSH-keys-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.8897353977494853" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/2.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-SSH-keys-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/2.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-SSH-keys-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/2.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-SSH-keys-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/2.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-SSH-keys-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/2.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-SSH-keys-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h3 id="Searching-for-SSH-keys">Searching for SSH keys</h3>
                The key_pairs collection of the EC2 resource allows you to use the <code>filter()</code> method to search for specific SSH keys by key id, name, or tag.

                <h4 id="Searching-for-SSH-key-by-name">Searching for SSH key by name</h4>
                Here’s an example of filtering SSH key by its name:<br>
                <div class="code-title">Searching for SSH key by name</div>
                <pre title="Searching for SSH key by name" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

key_pairs <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>key_pairs<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    KeyNames<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token string">'my-ssh-key-pair'</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> key <span class="token keyword">in</span> key_pairs<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'SSH key "</span><span class="token interpolation"><span class="token punctuation">{</span>key<span class="token punctuation">.</span>key_name<span class="token punctuation">}</span></span><span class="token string">" fingerprint: </span><span class="token interpolation"><span class="token punctuation">{</span>key<span class="token punctuation">.</span>key_fingerprint<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/3.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-name-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="3. Working with EC2 Instances using Boto3 in Python - Searching for SSH key by name" class="wp-image-30594 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/3.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-name-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/3.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-name-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/3.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-name-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/3.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-name-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/3.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-name-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/3.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-name-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.7793034301594091" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/3.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-name-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/3.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-name-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/3.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-name-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/3.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-name-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/3.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-name-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h4 id="Searching-for-SSH-key-by-tag">Searching for SSH key by tag</h4>
                Here’s an example of filtering SSH key by the tag (you may specify as many tags as you’d like):<br>
                <div class="code-title">Searching for SSH key by Tag</div>
                <pre title="Searching for SSH key by Tag" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

key_pairs <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>key_pairs<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    Filters<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'tag:Name'</span><span class="token punctuation">,</span>
            <span class="token string">'Values'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token string">'my-ssh-key-pair'</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> key <span class="token keyword">in</span> key_pairs<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'SSH key "</span><span class="token interpolation"><span class="token punctuation">{</span>key<span class="token punctuation">.</span>key_name<span class="token punctuation">}</span></span><span class="token string">" fingerprint: </span><span class="token interpolation"><span class="token punctuation">{</span>key<span class="token punctuation">.</span>key_fingerprint<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/4.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-Tag-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="4. Working with EC2 Instances using Boto3 in Python - Searching for SSH key by Tag" class="wp-image-29646 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/4.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-Tag-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/4.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-Tag-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/4.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-Tag-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/4.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-Tag-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/4.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-Tag-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/4.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-Tag-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.8490789815897242" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/4.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-Tag-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/4.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-Tag-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/4.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-Tag-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/4.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-Tag-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/4.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-for-SSH-key-by-Tag-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h3 id="Deleting-SSH-key">Deleting SSH key</h3>
                To delete an SSH key pair, you have to use the delete() method of the KeyPair class of the EC2 resource:
                <div class="code-title">Deleting SSH key</div>
                <pre title="Deleting SSH key" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
KEY_PAIR_NAME <span class="token operator">=</span> <span class="token string">'my-ssh-key-pair'</span>

key_pair <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>KeyPair<span class="token punctuation">(</span>KEY_PAIR_NAME<span class="token punctuation">)</span>
key_pair<span class="token punctuation">.</span>delete<span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'SSH key "</span><span class="token interpolation"><span class="token punctuation">{</span>KEY_PAIR_NAME<span class="token punctuation">}</span></span><span class="token string">" successfully deleted'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br> <br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/5.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-SSH-key-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="5. Working with EC2 Instances using Boto3 in Python - Deleting SSH key" class="wp-image-29654 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/5.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-SSH-key-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/5.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-SSH-key-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/5.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-SSH-key-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/5.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-SSH-key-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/5.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-SSH-key-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/5.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-SSH-key-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.26242791566750245" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/5.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-SSH-key-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/5.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-SSH-key-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/5.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-SSH-key-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/5.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-SSH-key-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/5.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-SSH-key-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h3 id="Managing-Security-Groups-using-Boto3">Managing Security Groups using Boto3</h3>
                Security groups control inbound and outbound traffic of the EC2 instance network interface. Each Security Group consists of one or many Security Group Rules. This section of the article will cover how to manage Security Groups and use them with EC2 instances.
                <br><br><strong>Note</strong>: every EC2 instance must have at least one Security Group associated with it. If no Security Group has been specified during the EC2 instance launch, the default Security Group of the default VPC is associated with the instance.
                <h3 id="Creating-a-Security-Group">Creating a Security Group</h3>
                To define a Security Group, you can use the <code>create_security_group()</code> of the EC2 resource. To control inbound and outbound traffic, the authorize_ingress() and the authorize_egress() methods are used:
                <div class="code-title">Creating a Security Group</div>
                <pre title="Creating a Security Group" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
VPC_ID <span class="token operator">=</span> <span class="token string">'vpc-4b43de20'</span>

security_group <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>create_security_group<span class="token punctuation">(</span>
    Description<span class="token operator">=</span><span class="token string">'Allow inbound SSH traffic'</span><span class="token punctuation">,</span>
    GroupName<span class="token operator">=</span><span class="token string">'allow-inbound-ssh'</span><span class="token punctuation">,</span>
    VpcId<span class="token operator">=</span>VPC_ID<span class="token punctuation">,</span>
    TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'ResourceType'</span><span class="token punctuation">:</span> <span class="token string">'security-group'</span><span class="token punctuation">,</span>
            <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token punctuation">{</span>
                    <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
                    <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'allow-inbound-ssh'</span>
                <span class="token punctuation">}</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

security_group<span class="token punctuation">.</span>authorize_ingress<span class="token punctuation">(</span>
    CidrIp<span class="token operator">=</span><span class="token string">'0.0.0.0/0'</span><span class="token punctuation">,</span>
    FromPort<span class="token operator">=</span><span class="token number">22</span><span class="token punctuation">,</span>
    ToPort<span class="token operator">=</span><span class="token number">22</span><span class="token punctuation">,</span>
    IpProtocol<span class="token operator">=</span><span class="token string">'tcp'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Security Group </span><span class="token interpolation"><span class="token punctuation">{</span>security_group<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string"> has been created'</span></span><span class="token punctuation">)</span></blockquote></pre>

                <br><br>Here’s an execution output:
                <br><br><img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/24.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-a-Security-Group-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="24. Working with EC2 Instances using Boto3 in Python - Creating a Security Group" class="wp-image-30525 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/24.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-a-Security-Group-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/24.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-a-Security-Group-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/24.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-a-Security-Group-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/24.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-a-Security-Group-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/24.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-a-Security-Group-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/24.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-a-Security-Group-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.15088629294542089" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/24.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-a-Security-Group-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/24.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-a-Security-Group-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/24.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-a-Security-Group-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/24.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-a-Security-Group-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/24.-Working-with-EC2-Instances-using-Boto3-in-Python-Creating-a-Security-Group-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h3 id="Listing-all-Security-Groups">Listing all Security Groups</h3>
                To list all Security Groups, you can use the <code>all()</code> method of the security_groups collection of the EC2 resource:
                <div class="code-title">Listing all Security Groups</div>
                <pre title="Listing all Security Groups" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

security_groups <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>security_groups<span class="token punctuation">.</span><span class="token builtin">all</span><span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">'Security Groups:'</span><span class="token punctuation">)</span>
<span class="token keyword">for</span> security_group <span class="token keyword">in</span> security_groups<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'  - Security Group </span><span class="token interpolation"><span class="token punctuation">{</span>security_group<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/25.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-Security-Groups-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="25. Working with EC2 Instances using Boto3 in Python - Listing all Security Groups" class="wp-image-30528 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/25.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-Security-Groups-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/25.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-Security-Groups-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/25.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-Security-Groups-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/25.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-Security-Groups-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/25.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-Security-Groups-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/25.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-Security-Groups-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.5474080641193664" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/25.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-Security-Groups-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/25.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-Security-Groups-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/25.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-Security-Groups-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/25.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-Security-Groups-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/25.-Working-with-EC2-Instances-using-Boto3-in-Python-Listing-all-Security-Groups-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="Searching-Security-Groups">Searching Security Groups</h3>
                <meta charset="utf-8">To find Security Groups by specified conditions, you can use the <code>filter()</code> method of the security_groups collection of the EC2 resource.

                <h4 id="Searching-Security-Groups-by-ID">
                    <meta charset="utf-8">Searching Security Groups by ID
                </h4>
                <meta charset="utf-8">To find Security Groups by the Security Group ID, you can use the <code>filter()</code> method of the security_groups collection of the EC2 resource:

                <div class="code-title">Searching Security Groups by ID</div>
                <pre title="Searching Security Groups by ID" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
SECURITY_GROUP_ID <span class="token operator">=</span> <span class="token string">'sg-0e0fe09d642656bf3'</span>

security_groups <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>security_groups<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    GroupIds<span class="token operator">=</span><span class="token punctuation">[</span>
        SECURITY_GROUP_ID
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> security_group <span class="token keyword">in</span> security_groups<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Security Group </span><span class="token interpolation"><span class="token punctuation">{</span>security_group<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string"> description: </span><span class="token interpolation"><span class="token punctuation">{</span>security_group<span class="token punctuation">.</span>description<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/26.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-ID-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="26. Working with EC2 Instances using Boto3 in Python - Searching Security Groups by ID" class="wp-image-30531 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/26.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-ID-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/26.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-ID-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/26.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-ID-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/26.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-ID-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/26.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-ID-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/26.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-ID-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.36053826679584766" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/26.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-ID-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/26.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-ID-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/26.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-ID-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/26.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-ID-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/26.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-ID-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h4 id="Searching-Security-Groups-by-Tag">
                    <meta charset="utf-8">Searching Security Groups by Tag
                </h4>
                <meta charset="utf-8">To find Security Groups by the Tag, you can use the <code>filter()</code> method of the security_groups collection of the EC2 resource:
                <div class="code-title">Searching Security Groups by Tag</div>
                <pre title="Searching Security Groups by Tag" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
SECURITY_GROUP_ID <span class="token operator">=</span> <span class="token string">'sg-0e0fe09d642656bf3'</span>

security_groups <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>security_groups<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    Filters<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'tag:Name'</span><span class="token punctuation">,</span>
            <span class="token string">'Values'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token string">'allow-inbound-ssh'</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> security_group <span class="token keyword">in</span> security_groups<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Security Group </span><span class="token interpolation"><span class="token punctuation">{</span>security_group<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string"> description: </span><span class="token interpolation"><span class="token punctuation">{</span>security_group<span class="token punctuation">.</span>description<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/27.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-Tag-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="27. Working with EC2 Instances using Boto3 in Python - Searching Security Groups by Tag" class="wp-image-30534 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/27.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-Tag-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/27.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-Tag-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/27.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-Tag-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/27.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-Tag-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/27.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-Tag-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/27.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-Tag-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.4768683886504246" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/27.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-Tag-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/27.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-Tag-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/27.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-Tag-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/27.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-Tag-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/27.-Working-with-EC2-Instances-using-Boto3-in-Python-Searching-Security-Groups-by-Tag-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h3 id="h-describing-security-groups">Describing Security Groups</h3>
                To list all Security Group’s properties, you can use the describe_security_groups() method that supports the same search attributes as the <code>filter()</code> method of the EC2 resource:
                <div class="code-title">Describing a Security Group using Boto3</div>
                <pre title="Describing a Security Group using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> json
<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_CLIENT <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
SECURITY_GROUP_ID <span class="token operator">=</span> <span class="token string">'sg-0e0fe09d642656bf3'</span>

response <span class="token operator">=</span> EC2_CLIENT<span class="token punctuation">.</span>describe_security_groups<span class="token punctuation">(</span>
    GroupIds<span class="token operator">=</span><span class="token punctuation">[</span>
        SECURITY_GROUP_ID<span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Security Group </span><span class="token interpolation"><span class="token punctuation">{</span>SECURITY_GROUP_ID<span class="token punctuation">}</span></span><span class="token string"> attributes:'</span></span><span class="token punctuation">)</span>

<span class="token keyword">for</span> security_group <span class="token keyword">in</span> response<span class="token punctuation">[</span><span class="token string">'SecurityGroups'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>
            security_group<span class="token punctuation">,</span>
            indent<span class="token operator">=</span><span class="token number">4</span>
        <span class="token punctuation">)</span>
    <span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/28.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-Security-Groups-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="28. Working with EC2 Instances using Boto3 in Python - Describing Security Groups" class="wp-image-30539 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/28.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-Security-Groups-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/28.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-Security-Groups-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/28.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-Security-Groups-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/28.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-Security-Groups-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/28.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-Security-Groups-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/28.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-Security-Groups-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.5898388552209521" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/28.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-Security-Groups-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/28.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-Security-Groups-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/28.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-Security-Groups-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/28.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-Security-Groups-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/28.-Working-with-EC2-Instances-using-Boto3-in-Python-Describing-Security-Groups-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h3 id="Deleting-Security-Groups">Deleting Security Groups</h3>
                <meta charset="utf-8">To delete a Security Group, you can use the delete() method of the SecurityGroup class of the EC2 resource:
                <pre class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
SECURITY_GROUP_ID <span class="token operator">=</span> <span class="token string">'sg-0e0fe09d642656bf3'</span>

security_group <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>SecurityGroup<span class="token punctuation">(</span>SECURITY_GROUP_ID<span class="token punctuation">)</span>

security_group<span class="token punctuation">.</span>delete<span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Security Group </span><span class="token interpolation"><span class="token punctuation">{</span>SECURITY_GROUP_ID<span class="token punctuation">}</span></span><span class="token string"> has been deleted'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/29.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-Security-Groups-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="29. Working with EC2 Instances using Boto3 in Python - Deleting Security Groups" class="wp-image-30542 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/29.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-Security-Groups-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/29.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-Security-Groups-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/29.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-Security-Groups-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/29.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-Security-Groups-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/29.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-Security-Groups-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/29.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-Security-Groups-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.08673282531809656" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/29.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-Security-Groups-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/29.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-Security-Groups-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/29.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-Security-Groups-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/29.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-Security-Groups-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/29.-Working-with-EC2-Instances-using-Boto3-in-Python-Deleting-Security-Groups-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h3 id="Attaching-Security-Groups-to-the-EC2-Instance">Attaching Security Groups to the EC2 Instance</h3>
                To attach Security Groups to the EC2 instance, you need to use the modify_attribute() method of the EC2.Instance class of the EC2 resource:
                <div class="code-title">Attaching Security Groups to the EC2 Instance</div>
                <pre title="Attaching Security Groups to the EC2 Instance" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
SECURITY_GROUP_ID <span class="token operator">=</span> <span class="token string">'sg-084dfa143cc85a5cf'</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-04091b10d2cdc86aa'</span>

instance <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>Instance<span class="token punctuation">(</span>INSTANCE_ID<span class="token punctuation">)</span>

instance<span class="token punctuation">.</span>modify_attribute<span class="token punctuation">(</span>
    Groups<span class="token operator">=</span><span class="token punctuation">[</span>
        SECURITY_GROUP_ID
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Security Group </span><span class="token interpolation"><span class="token punctuation">{</span>SECURITY_GROUP_ID<span class="token punctuation">}</span></span><span class="token string"> has been attached to EC2 instance </span><span class="token interpolation"><span class="token punctuation">{</span>INSTANCE_ID<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/30.-Working-with-EC2-Instances-using-Boto3-in-Python-Attaching-Security-Groups-to-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="30. Working with EC2 Instances using Boto3 in Python - Attaching Security Groups to EC2 instance" class="wp-image-30544 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/30.-Working-with-EC2-Instances-using-Boto3-in-Python-Attaching-Security-Groups-to-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/30.-Working-with-EC2-Instances-using-Boto3-in-Python-Attaching-Security-Groups-to-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/30.-Working-with-EC2-Instances-using-Boto3-in-Python-Attaching-Security-Groups-to-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/30.-Working-with-EC2-Instances-using-Boto3-in-Python-Attaching-Security-Groups-to-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/30.-Working-with-EC2-Instances-using-Boto3-in-Python-Attaching-Security-Groups-to-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/30.-Working-with-EC2-Instances-using-Boto3-in-Python-Attaching-Security-Groups-to-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.17514621418100007" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/30.-Working-with-EC2-Instances-using-Boto3-in-Python-Attaching-Security-Groups-to-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/30.-Working-with-EC2-Instances-using-Boto3-in-Python-Attaching-Security-Groups-to-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/30.-Working-with-EC2-Instances-using-Boto3-in-Python-Attaching-Security-Groups-to-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/30.-Working-with-EC2-Instances-using-Boto3-in-Python-Attaching-Security-Groups-to-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/30.-Working-with-EC2-Instances-using-Boto3-in-Python-Attaching-Security-Groups-to-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h3 id="Listing-EC2-instance-Security-Groups">Listing EC2 instance Security Groups</h3>
                To list EC2 instance Security Groups, you can use the security_groups attribute of the EC2.Instance class of the EC2 resource:
                <div class="code-title">Listing EC2 instance Security Groups</div>
                <pre title="Listing EC2 instance Security Groups" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-04091b10d2cdc86aa'</span>

instance <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>Instance<span class="token punctuation">(</span>INSTANCE_ID<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Instance </span><span class="token interpolation"><span class="token punctuation">{</span>INSTANCE_ID<span class="token punctuation">}</span></span><span class="token string"> Security Groups:'</span></span><span class="token punctuation">)</span>

<span class="token keyword">for</span> security_group <span class="token keyword">in</span> instance<span class="token punctuation">.</span>security_groups<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'  - Security Group </span><span class="token interpolation"><span class="token punctuation">{</span>security_group<span class="token punctuation">[</span><span class="token string">"GroupId"</span><span class="token punctuation">]</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/31.-Working-with-EC2-Instances-using-Boto3-in-Python-List-EC2-instance-Security-Groups-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="31. Working with EC2 Instances using Boto3 in Python - List EC2 instance Security Groups" class="wp-image-30547 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/31.-Working-with-EC2-Instances-using-Boto3-in-Python-List-EC2-instance-Security-Groups-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/31.-Working-with-EC2-Instances-using-Boto3-in-Python-List-EC2-instance-Security-Groups-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/31.-Working-with-EC2-Instances-using-Boto3-in-Python-List-EC2-instance-Security-Groups-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/31.-Working-with-EC2-Instances-using-Boto3-in-Python-List-EC2-instance-Security-Groups-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/31.-Working-with-EC2-Instances-using-Boto3-in-Python-List-EC2-instance-Security-Groups-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/31.-Working-with-EC2-Instances-using-Boto3-in-Python-List-EC2-instance-Security-Groups-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.29155336543133914" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/31.-Working-with-EC2-Instances-using-Boto3-in-Python-List-EC2-instance-Security-Groups-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/31.-Working-with-EC2-Instances-using-Boto3-in-Python-List-EC2-instance-Security-Groups-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/31.-Working-with-EC2-Instances-using-Boto3-in-Python-List-EC2-instance-Security-Groups-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/31.-Working-with-EC2-Instances-using-Boto3-in-Python-List-EC2-instance-Security-Groups-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/31.-Working-with-EC2-Instances-using-Boto3-in-Python-List-EC2-instance-Security-Groups-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h3 id="Detaching-Security-Group-from-the-EC2-Instance">
                    <meta charset="utf-8">Detaching Security Group from the EC2 Instance
                </h3>
                There’s no specific API call to detach the Security Group from the EC2 instance. To detach a
                <meta charset="utf-8">Security Group from the EC2 Instance, you need to get all instance Security Groups as a list, remove the required Security Group from the list, and overrise the <code>Groups</code> EC2 instance attribute.
                <div class="code-title">Detaching Security Group from the EC2 Instance</div>
                <pre title="Detaching Security Group from the EC2 Instance" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-04091b10d2cdc86aa'</span>
SECURITY_GROUP_ID <span class="token operator">=</span> <span class="token string">'sg-6dbc5f1b'</span>

instance <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>Instance<span class="token punctuation">(</span>INSTANCE_ID<span class="token punctuation">)</span>

instance_sgs <span class="token operator">=</span> <span class="token punctuation">[</span>
    sg<span class="token punctuation">[</span><span class="token string">'GroupId'</span><span class="token punctuation">]</span> <span class="token keyword">for</span> sg <span class="token keyword">in</span> instance<span class="token punctuation">.</span>security_groups
<span class="token punctuation">]</span>

<span class="token keyword">if</span> SECURITY_GROUP_ID <span class="token keyword">in</span> instance_sgs<span class="token punctuation">:</span>
    instance_sgs<span class="token punctuation">.</span>remove<span class="token punctuation">(</span>SECURITY_GROUP_ID<span class="token punctuation">)</span>

instance<span class="token punctuation">.</span>modify_attribute<span class="token punctuation">(</span>
    Groups<span class="token operator">=</span>instance_sgs
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Security Group </span><span class="token interpolation"><span class="token punctuation">{</span>SECURITY_GROUP_ID<span class="token punctuation">}</span></span><span class="token string"> has been detached from the instance </span><span class="token interpolation"><span class="token punctuation">{</span>INSTANCE_ID<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/32.-Working-with-EC2-Instances-using-Boto3-in-Python-Detach-Security-Group-from-the-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="32. Working with EC2 Instances using Boto3 in Python - Detach Security Group from the EC2 instance" class="wp-image-30552 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/32.-Working-with-EC2-Instances-using-Boto3-in-Python-Detach-Security-Group-from-the-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/32.-Working-with-EC2-Instances-using-Boto3-in-Python-Detach-Security-Group-from-the-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/32.-Working-with-EC2-Instances-using-Boto3-in-Python-Detach-Security-Group-from-the-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/32.-Working-with-EC2-Instances-using-Boto3-in-Python-Detach-Security-Group-from-the-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/32.-Working-with-EC2-Instances-using-Boto3-in-Python-Detach-Security-Group-from-the-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/32.-Working-with-EC2-Instances-using-Boto3-in-Python-Detach-Security-Group-from-the-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.5332531538170213" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/32.-Working-with-EC2-Instances-using-Boto3-in-Python-Detach-Security-Group-from-the-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/32.-Working-with-EC2-Instances-using-Boto3-in-Python-Detach-Security-Group-from-the-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/32.-Working-with-EC2-Instances-using-Boto3-in-Python-Detach-Security-Group-from-the-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/32.-Working-with-EC2-Instances-using-Boto3-in-Python-Detach-Security-Group-from-the-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/32.-Working-with-EC2-Instances-using-Boto3-in-Python-Detach-Security-Group-from-the-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="How-to-manage-Elastic-IP-addresses-using-Boto3">How to manage Elastic IP addresses using Boto3?</h3>
                The Elastic IP is a public IP address provided by AWS that doesn’t change when you start or stop the EC2 instance. In addition to that,
                <meta charset="utf-8">the Elastic IP address can be attached or detached from the EC2 instance at any moment. By default, each AWS Account can allocate a maximum of five Elastic IP addresses.

                <h3 id="Allocating-Elastic-IP-address">Allocating Elastic IP address</h3>
                To allocate an Elastic IP address for your AWS account, you can use the allocate_address() method of the EC2 client:
                <br>
                <div class="code-title">Allocating Elastic IP address</div>
                <pre title="Allocating Elastic IP address" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_CLIENT <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

allocation <span class="token operator">=</span> EC2_CLIENT<span class="token punctuation">.</span>allocate_address<span class="token punctuation">(</span>
    Domain<span class="token operator">=</span><span class="token string">'vpc'</span><span class="token punctuation">,</span>
    TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'ResourceType'</span><span class="token punctuation">:</span> <span class="token string">'elastic-ip'</span><span class="token punctuation">,</span>
            <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token punctuation">{</span>
                    <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
                    <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'my-elastic-ip'</span>
                <span class="token punctuation">}</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Allocation ID </span><span class="token interpolation"><span class="token punctuation">{</span>allocation<span class="token punctuation">[</span><span class="token string">"AllocationId"</span><span class="token punctuation">]</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'  - Elastic IP </span><span class="token interpolation"><span class="token punctuation">{</span>allocation<span class="token punctuation">[</span><span class="token string">"PublicIp"</span><span class="token punctuation">]</span><span class="token punctuation">}</span></span><span class="token string"> has been allocated'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/33.-Working-with-EC2-Instances-using-Boto3-in-Python-Allocate-EIP-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="33. Working with EC2 Instances using Boto3 in Python - Allocate EIP" class="wp-image-30565 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/33.-Working-with-EC2-Instances-using-Boto3-in-Python-Allocate-EIP-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/33.-Working-with-EC2-Instances-using-Boto3-in-Python-Allocate-EIP-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/33.-Working-with-EC2-Instances-using-Boto3-in-Python-Allocate-EIP-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/33.-Working-with-EC2-Instances-using-Boto3-in-Python-Allocate-EIP-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/33.-Working-with-EC2-Instances-using-Boto3-in-Python-Allocate-EIP-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/33.-Working-with-EC2-Instances-using-Boto3-in-Python-Allocate-EIP-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.15198232422528823" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/33.-Working-with-EC2-Instances-using-Boto3-in-Python-Allocate-EIP-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/33.-Working-with-EC2-Instances-using-Boto3-in-Python-Allocate-EIP-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/33.-Working-with-EC2-Instances-using-Boto3-in-Python-Allocate-EIP-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/33.-Working-with-EC2-Instances-using-Boto3-in-Python-Allocate-EIP-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/33.-Working-with-EC2-Instances-using-Boto3-in-Python-Allocate-EIP-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="Listing-and-describing-Elastic-IP-addresses">Listing and describing Elastic IP addresses</h3>
                To list and describe Elastic IP addresses, you can use the descibe_addresses() method of the EC2 client:
                <br>
                <div class="code-title">Listing and describing Elastic IP addresses</div>
                <pre title="Listing and describing Elastic IP addresses" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> json
<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_CLIENT <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> EC2_CLIENT<span class="token punctuation">.</span>describe_addresses<span class="token punctuation">(</span>
    Filters<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'tag:Name'</span><span class="token punctuation">,</span>
            <span class="token string">'Values'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token string">'my-elastic-ip'</span><span class="token punctuation">]</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">'EIP attributes:'</span><span class="token punctuation">)</span>

<span class="token keyword">for</span> address <span class="token keyword">in</span> response<span class="token punctuation">[</span><span class="token string">'Addresses'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>address<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/34.-Working-with-EC2-Instances-using-Boto3-in-Python-Describe-EIP-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="34. Working with EC2 Instances using Boto3 in Python - Describe EIP" class="wp-image-30570 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/34.-Working-with-EC2-Instances-using-Boto3-in-Python-Describe-EIP-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/34.-Working-with-EC2-Instances-using-Boto3-in-Python-Describe-EIP-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/34.-Working-with-EC2-Instances-using-Boto3-in-Python-Describe-EIP-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/34.-Working-with-EC2-Instances-using-Boto3-in-Python-Describe-EIP-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/34.-Working-with-EC2-Instances-using-Boto3-in-Python-Describe-EIP-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/34.-Working-with-EC2-Instances-using-Boto3-in-Python-Describe-EIP-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.009674172091705069" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/34.-Working-with-EC2-Instances-using-Boto3-in-Python-Describe-EIP-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/34.-Working-with-EC2-Instances-using-Boto3-in-Python-Describe-EIP-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/34.-Working-with-EC2-Instances-using-Boto3-in-Python-Describe-EIP-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/34.-Working-with-EC2-Instances-using-Boto3-in-Python-Describe-EIP-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/34.-Working-with-EC2-Instances-using-Boto3-in-Python-Describe-EIP-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <h3 id="Attaching-associating-an-Elastic-IP-to-an-EC2-Instance">Attaching an Elastic IP to an EC2 Instance</h3>
                To associate an Elastic IP address with an EC2 Instance, you can use the associate_address() method of the EC2 client:<br>
                <div class="code-title">Attaching an Elastic IP to an EC2 Instance</div>
                <pre title="Attaching an Elastic IP to an EC2 Instance" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_CLIENT <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-04091b10d2cdc86aa'</span>

response <span class="token operator">=</span> EC2_CLIENT<span class="token punctuation">.</span>describe_addresses<span class="token punctuation">(</span>
    Filters<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'tag:Name'</span><span class="token punctuation">,</span>
            <span class="token string">'Values'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token string">'my-elastic-ip'</span><span class="token punctuation">]</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

public_ip <span class="token operator">=</span> response<span class="token punctuation">[</span><span class="token string">'Addresses'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string">'PublicIp'</span><span class="token punctuation">]</span>
allocation_id <span class="token operator">=</span> response<span class="token punctuation">[</span><span class="token string">'Addresses'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string">'AllocationId'</span><span class="token punctuation">]</span>

response <span class="token operator">=</span> EC2_CLIENT<span class="token punctuation">.</span>associate_address<span class="token punctuation">(</span>
    InstanceId<span class="token operator">=</span>INSTANCE_ID<span class="token punctuation">,</span>
    AllocationId<span class="token operator">=</span>allocation_id
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'EIP </span><span class="token interpolation"><span class="token punctuation">{</span>public_ip<span class="token punctuation">}</span></span><span class="token string"> associated with the instance </span><span class="token interpolation"><span class="token punctuation">{</span>INSTANCE_ID<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/35.-Working-with-EC2-Instances-using-Boto3-in-Python-Associate-EIP-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="35. Working with EC2 Instances using Boto3 in Python - Associate EIP" class="wp-image-30574 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/35.-Working-with-EC2-Instances-using-Boto3-in-Python-Associate-EIP-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/35.-Working-with-EC2-Instances-using-Boto3-in-Python-Associate-EIP-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/35.-Working-with-EC2-Instances-using-Boto3-in-Python-Associate-EIP-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/35.-Working-with-EC2-Instances-using-Boto3-in-Python-Associate-EIP-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/35.-Working-with-EC2-Instances-using-Boto3-in-Python-Associate-EIP-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/35.-Working-with-EC2-Instances-using-Boto3-in-Python-Associate-EIP-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.0023994821985431347" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/35.-Working-with-EC2-Instances-using-Boto3-in-Python-Associate-EIP-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/35.-Working-with-EC2-Instances-using-Boto3-in-Python-Associate-EIP-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/35.-Working-with-EC2-Instances-using-Boto3-in-Python-Associate-EIP-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/35.-Working-with-EC2-Instances-using-Boto3-in-Python-Associate-EIP-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/35.-Working-with-EC2-Instances-using-Boto3-in-Python-Associate-EIP-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="Detaching-an-Elastic-IP-address-from-an-EC2-instance">Detaching an Elastic IP address from an EC2 instance</h3>
                To disassociate (detach) an Elastic IP address from the EC2 instance, you need to use the disassociate_address() method of the EC2 client. The <code>disassociate_address()</code> method requires the
                <meta charset="utf-8"><code>AssociationId</code> argument, which you can find by processing the list of the EC2 instance network interfaces:
                <br>
                <div class="code-title">Boto3 Dissociate Elastic IP Address</div>
                <pre title="Boto3 Dissociate Elastic IP Address" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_CLIENT <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
INSTANCE_ID <span class="token operator">=</span> <span class="token string">'i-04091b10d2cdc86aa'</span>

instance <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>Instance<span class="token punctuation">(</span>INSTANCE_ID<span class="token punctuation">)</span>

response <span class="token operator">=</span> EC2_CLIENT<span class="token punctuation">.</span>describe_addresses<span class="token punctuation">(</span>
    Filters<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'tag:Name'</span><span class="token punctuation">,</span>
            <span class="token string">'Values'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token string">'my-elastic-ip'</span><span class="token punctuation">]</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

public_ip <span class="token operator">=</span> response<span class="token punctuation">[</span><span class="token string">'Addresses'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string">'PublicIp'</span><span class="token punctuation">]</span>

<span class="token keyword">for</span> interface <span class="token keyword">in</span> instance<span class="token punctuation">.</span>network_interfaces<span class="token punctuation">:</span>
    <span class="token keyword">if</span> interface<span class="token punctuation">.</span>association<span class="token punctuation">:</span>
        <span class="token keyword">if</span> public_ip <span class="token operator">==</span> interface<span class="token punctuation">.</span>association<span class="token punctuation">.</span>public_ip<span class="token punctuation">:</span>
            EC2_CLIENT<span class="token punctuation">.</span>disassociate_address<span class="token punctuation">(</span>
                AssociationId<span class="token operator">=</span>interface<span class="token punctuation">.</span>association<span class="token punctuation">.</span><span class="token builtin">id</span>
            <span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'EIP </span><span class="token interpolation"><span class="token punctuation">{</span>public_ip<span class="token punctuation">}</span></span><span class="token string"> diassociated from the instance </span><span class="token interpolation"><span class="token punctuation">{</span>INSTANCE_ID<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/36.-Working-with-EC2-Instances-using-Boto3-in-Python-Disassociate-EIP-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="36. Working with EC2 Instances using Boto3 in Python - Disassociate EIP" class="wp-image-30578 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/36.-Working-with-EC2-Instances-using-Boto3-in-Python-Disassociate-EIP-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/36.-Working-with-EC2-Instances-using-Boto3-in-Python-Disassociate-EIP-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/36.-Working-with-EC2-Instances-using-Boto3-in-Python-Disassociate-EIP-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/36.-Working-with-EC2-Instances-using-Boto3-in-Python-Disassociate-EIP-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/36.-Working-with-EC2-Instances-using-Boto3-in-Python-Disassociate-EIP-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/36.-Working-with-EC2-Instances-using-Boto3-in-Python-Disassociate-EIP-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.9851015389393778" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/36.-Working-with-EC2-Instances-using-Boto3-in-Python-Disassociate-EIP-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/36.-Working-with-EC2-Instances-using-Boto3-in-Python-Disassociate-EIP-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/36.-Working-with-EC2-Instances-using-Boto3-in-Python-Disassociate-EIP-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/36.-Working-with-EC2-Instances-using-Boto3-in-Python-Disassociate-EIP-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/36.-Working-with-EC2-Instances-using-Boto3-in-Python-Disassociate-EIP-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="Releasing-the-Elastic-IP-address">Releasing the Elastic IP address</h3>
                To release an Elastic IP address, you can use the release_address() method of the EC2 client:
                <br>
                <div class="code-title">Boto3 release elastic ip address</div>
                <pre title="Boto3 release elastic ip address" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_CLIENT <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> EC2_CLIENT<span class="token punctuation">.</span>describe_addresses<span class="token punctuation">(</span>
    Filters<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'tag:Name'</span><span class="token punctuation">,</span>
            <span class="token string">'Values'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token string">'my-elastic-ip'</span><span class="token punctuation">]</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

public_ip <span class="token operator">=</span> response<span class="token punctuation">[</span><span class="token string">'Addresses'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string">'PublicIp'</span><span class="token punctuation">]</span>
allocation_id <span class="token operator">=</span> response<span class="token punctuation">[</span><span class="token string">'Addresses'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string">'AllocationId'</span><span class="token punctuation">]</span>

EC2_CLIENT<span class="token punctuation">.</span>release_address<span class="token punctuation">(</span>
    AllocationId<span class="token operator">=</span>allocation_id
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'EIP </span><span class="token interpolation"><span class="token punctuation">{</span>public_ip<span class="token punctuation">}</span></span><span class="token string"> has been released'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br><br>Here’s an execution output:<br><br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/37.-Working-with-EC2-Instances-using-Boto3-in-Python-Release-EIP-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="37. Working with EC2 Instances using Boto3 in Python - Release EIP" class="wp-image-30581 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/37.-Working-with-EC2-Instances-using-Boto3-in-Python-Release-EIP-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/37.-Working-with-EC2-Instances-using-Boto3-in-Python-Release-EIP-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/37.-Working-with-EC2-Instances-using-Boto3-in-Python-Release-EIP-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/37.-Working-with-EC2-Instances-using-Boto3-in-Python-Release-EIP-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/37.-Working-with-EC2-Instances-using-Boto3-in-Python-Release-EIP-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/37.-Working-with-EC2-Instances-using-Boto3-in-Python-Release-EIP-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.3457451285833697" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/37.-Working-with-EC2-Instances-using-Boto3-in-Python-Release-EIP-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/37.-Working-with-EC2-Instances-using-Boto3-in-Python-Release-EIP-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/37.-Working-with-EC2-Instances-using-Boto3-in-Python-Release-EIP-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/37.-Working-with-EC2-Instances-using-Boto3-in-Python-Release-EIP-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/37.-Working-with-EC2-Instances-using-Boto3-in-Python-Release-EIP-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="Summary">Summary</h3>
                In this article, we’ve provided many Python code snippets for creating, starting, stopping, rebooting, filtering, deleting, tagging EC2 Instances using the Boto3. In addition to that, we’ve covered the management of SSH keys, Security Groups, and Elastic IP addresses.

            </div>
            <?php require "../../../../../templates/footer_outer.php" ?>
        </div>

        <!-- Javascript -->

        <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
        <script defer src="../../../../../assets/fontawesome/js/all.min.js"></script><!-- footer social icons -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
        <script src="https://www.nubeera.comm/js/navmenu.js"></script>
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