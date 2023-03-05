<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra EBS in Boto3</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Boto3 EBS">

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
                <strong class="px-2" style="font-size: 1.125rem;">EBS in python</strong><br><br>
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

        <div class="content-box">
            <div class="body-content">
                <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">EBS VOLUMES IN PYTHON USING BOTO3</h2>
                    <ol class="breadcrumb mx-5 mt-3 px-0">
                        <li class="breadcrumb-item"><a href="https://docs.nubeera.com">Home</a></li>
                        <li class="breadcrumb-item"><a href="https://docs.nubeera.com/pages/Boto3/">Boto3</a></li>
                        <li class="breadcrumb-item active">EBS</li>
                    </ol>
                    <div class="px-5 pb-5 pt-0 body-text">
                        <h3>In this article </h3>
                        <ul>
                            <li><a href="#Prerequisites" data-level="2">Prerequisites</a></li>
                            <li><a href="#h-what-is-an-ebs-volume" data-level="2">What is an EBS volume?</a></li>
                            <li><a href="#Connecting-Boto3-to-AWS-EC2-APIs" data-level="2">How to connect to Amazon EC2 using Boto3?</a></li>
                            <li><a href="#h-how-to-create-ebs-volume-using-boto3" data-level="2">How to create EBS volume using Boto3?</a>
                                <ul>
                                    <li><a href="#Creating-an-EBS-volume-using-Boto3-client" data-level="3">Creating an EBS volume using Boto3 client</a></li>
                                    <li><a href="#Creating-an-EBS-volume-using-Boto3-resource" data-level="3">Creating an EBS volume using Boto3 resource</a></li>
                                </ul>
                            </li>
                            <li><a href="#How-to-list-all-EC2-volumes-using-Boto3" data-level="2">How to list all EC2 volumes using Boto3?</a></li>
                            <li><a href="#How-to-search-EC2-volumes-by-Tag-using-Boto3" data-level="2">How to search EC2 volumes Boto3?</a>
                                <ul>
                                    <li><a href="#Searching-EC2-volumes-by-Tag-using-Boto3" data-level="3">Searching EC2 volumes by Tag</a></li>
                                    <li><a href="#How-to-search-EC2-volumes-by-ID-using-Boto3" data-level="3">Searching EC2 volumes by ID</a></li>
                                </ul>
                            </li>
                            <li><a href="#How-to-delete-EC2-volume-using-Boto3" data-level="2">How to delete EC2 volumes using Boto3?</a>
                                <ul>
                                    <li><a href="#Deleting-multiple-EC2-volumes" data-level="3">Deleting multiple EC2 volumes</a></li>
                                </ul>
                            </li>
                            <li><a href="#How-to-describe-EBS-volumes-using-Boto3" data-level="2">How to describe EBS volumes using Boto3?</a></li>
                            <li><a href="#How-to-attach-EBS-volume-to-an-EC2-Instance" data-level="2">How to attach EBS volume to EC2 instance using Boto3?</a></li>
                            <li><a href="#How-to-detach-EBS-volume-to-EC2-instance-using-Boto3" data-level="2">How to detach EBS volume from EC2 instance using Boto3?</a></li>
                            <li><a href="#h-how-to-increase-size-of-the-ebs-volume-using-boto3" data-level="2">How to increase size of the EBS volume using Boto3?</a></li>
                            <li><a href="#Summary" data-level="2">Summary</a></li>
                        </ul>
                        <br>
                        One of the core services of AWS cloud is Amazon Elastic Compute Cloud (Amazon EC2). Amazon EC2 is a web service that provides secure and resizable compute capacity in the cloud in the form of virtual servers. Each virtual server is started from the Amazon Machine Images (AMIs). The AMI containing the information about EBS volume snapshots and their mapping to the EC2 instance. This article will cover using Python to interact with the Amazon EC2 service to manage EBS volumes using the Boto3 library programmatically.
                        <h3 id="Prerequisites">Prerequisites </h3>
                        To start automating Amazon EC2 and making API calls to manage EBS volumes, snapshots, and AMIs, you must first&nbsp;configure your Python environment.
                        In general, here’s what you need to have installed:
                        <ul>
                            <li>Python 3</li>
                            <li>Boto3</li>
                            <li>AWS CLI tools</li>
                        </ul>
                        <h3 id="h-what-is-an-ebs-volume">What is an EBS volume?</h3>
                        EC2 instances use block-level storage called Amazon Elastic Block Store (EBS). Amazon EBS offers durable, high-performance, and highly scalable volumes ranging from one GiB up to 16 TiB of storage size for EC2 instances. The data stored on EBS volume is automatically replicated across the Availability Zone (AZ) within AWS Region.<br><img loading="lazy" src="https://hands-on.cloud/wp-content/uploads/2021/07/Working-with-EBS-volumes-snapshots-and-AMIs-using-Boto3-in-Python-Workflow-diagram-1024x592.png?ezimgfmt=rs:433x250/rscb1/ng:webp/ngcb1" alt="Working with EBS volumes, snapshots, and AMIs using Boto3 in Python - Workflow diagram" class="wp-image-27150 ezlazyloaded" width="768" height="444" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/Working-with-EBS-volumes-snapshots-and-AMIs-using-Boto3-in-Python-Workflow-diagram-1024x592.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/Working-with-EBS-volumes-snapshots-and-AMIs-using-Boto3-in-Python-Workflow-diagram-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/Working-with-EBS-volumes-snapshots-and-AMIs-using-Boto3-in-Python-Workflow-diagram-768x444.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/Working-with-EBS-volumes-snapshots-and-AMIs-using-Boto3-in-Python-Workflow-diagram-1536x887.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/Working-with-EBS-volumes-snapshots-and-AMIs-using-Boto3-in-Python-Workflow-diagram-2048x1183.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 768px) 100vw, 768px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/Working-with-EBS-volumes-snapshots-and-AMIs-using-Boto3-in-Python-Workflow-diagram-1024x592.png?ezimgfmt=rs:433x250/rscb1/ng:webp/ngcb1" ezoid="0.7282041824637513" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/Working-with-EBS-volumes-snapshots-and-AMIs-using-Boto3-in-Python-Workflow-diagram-1024x592.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/Working-with-EBS-volumes-snapshots-and-AMIs-using-Boto3-in-Python-Workflow-diagram-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/Working-with-EBS-volumes-snapshots-and-AMIs-using-Boto3-in-Python-Workflow-diagram-768x444.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/Working-with-EBS-volumes-snapshots-and-AMIs-using-Boto3-in-Python-Workflow-diagram-1536x887.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/Working-with-EBS-volumes-snapshots-and-AMIs-using-Boto3-in-Python-Workflow-diagram-2048x1183.png?ezimgfmt=ng:webp/ngcb1 2048w">
                        EBS volumes are easy to use, whether you need to add them to or remove them from the EC2 instance, modify their size, or change their type. When choosing your EBS volume types, you’ll find multiple options based on your business application requirements.

                        <h3 id="Connecting-Boto3-to-AWS-EC2-APIs">How to connect to Amazon EC2 using Boto3?</h3>
                        The Boto3 library provides you two ways to access APIs for managing AWS services:
                        <ul>
                            <li>The&nbsp;<code>client</code>&nbsp;that allows you to access the low-level API data. For example, you can get access to API response data in JSON format.</li>
                            <li>The&nbsp;<code>resource</code>&nbsp;that allows you to use AWS services in a higher-level object-oriented way. For more information on the topic, take a look at&nbsp;AWS CLI vs. botocore vs. Boto3.</li>
                        </ul>
                        Here’s how you can instantiate the Boto3 EC2 client to start working with Amazon EC2 APIs:<br><br>
                        <div class="code-title">Instantiating the Boto3 EC2 client</div>
                        <pre title="Instantiating the Boto3 EC2 client" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-1"</span>

ec2_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span></blockquote></pre>
                        You can similarly instantiate the Boto3 EC2 resource:
                        <br><br>
                        <div class="code-title">Instantiating the Boto3 EC2 resource</div>
                        <pre title="Instantiating the Boto3 EC2 resource" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-1"</span>

ec2_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span></blockquote></pre>

                        <h3 id="h-how-to-create-ebs-volume-using-boto3">How to create EBS volume using Boto3?</h3>
                        One of the daily operations for AWS EBS volumes is creating new volumes and attaching them to the running EC2 instances. To create a new EBS volume, you can use the <code>create_volume()</code> method of the Boto3 EC2 client or resource.
                        <h3 id="Creating-an-EBS-volume-using-Boto3-client">Creating an EBS volume using Boto3 client</h3>
                        To create a new EBS volume, you can use the create_volume() method of the Boto3 EC2 client:<br><br>
                        <div class="code-title">Creating an EBS volume using Boto3 client</div>
                        <pre title="Creating an EBS volume using Boto3 client" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>

ec2_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

new_volume <span class="token operator">=</span> ec2_client<span class="token punctuation">.</span>create_volume<span class="token punctuation">(</span>
    AvailabilityZone<span class="token operator">=</span><span class="token string-interpolation"><span class="token string">f'</span><span class="token interpolation"><span class="token punctuation">{</span>AWS_REGION<span class="token punctuation">}</span></span><span class="token string">c'</span></span><span class="token punctuation">,</span>
    Size<span class="token operator">=</span><span class="token number">10</span><span class="token punctuation">,</span>
    VolumeType<span class="token operator">=</span><span class="token string">'gp2'</span><span class="token punctuation">,</span>
    TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'ResourceType'</span><span class="token punctuation">:</span> <span class="token string">'volume'</span><span class="token punctuation">,</span>
            <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token punctuation">{</span>
                    <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
                    <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'nubeera-ebs-boto3'</span>
                <span class="token punctuation">}</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Created volume ID: </span><span class="token interpolation"><span class="token punctuation">{</span>new_volume<span class="token punctuation">[</span><span class="token string">"VolumeId"</span><span class="token punctuation">]</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                        The required arguments are:
                        <ul>
                            <li><code>AvailabilityZone</code> – specifies the Availability Zone where to create the Volume</li>
                            <li><code>Size</code> – specifies the size of the Volume in GiB</li>
                        </ul>
                        The rest of the arguments are optional, but we set them up for demo purposes:
                        <ul>
                            <li><code>VolumeType</code> – defines an EBS volume type. This parameter can be one of the following values:<ul>
                                    <li><strong>General Purpose SSD</strong>:&nbsp;<code>gp2</code>&nbsp;|&nbsp;<code>gp3</code></li>
                                    <li><strong>Provisioned IOPS SSD</strong>:&nbsp;<code>io1</code>&nbsp;|&nbsp;<code>io2</code></li>
                                    <li><strong>Throughput Optimized HDD</strong>:&nbsp;<code>st1</code></li>
                                    <li><strong>Cold HDD</strong>:&nbsp;<code>sc1</code></li>
                                    <li><strong>Magnetic</strong>:&nbsp;<code>standard</code></li>
                                </ul>
                            </li>
                            <li><code>TagSpecifications</code> allow you to define the <code>Tags</code> for the volume.</li>
                        </ul>
                        The <code>new_volume</code> variable contains an AWS EC2 service response serialized in the form of the Python dictionary, so, to get access to the volume ID, we have to use the <code>VolumeId</code> key.<br>
                        <br> Here’s an execution output: <br><br>
                        <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-1024x577.png" alt="2. Working with EBS volumes using Boto3 - Creating an EBS volume using Boto3 client" class="ezlazyload wp-image-27785" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-1024x577.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-300x169.png 300w,https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-768x432.png 768w,https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-1536x865.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-2048x1153.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-1024x577.png">

                        <h3 id="Creating-an-EBS-volume-using-Boto3-resource">Creating an EBS volume using Boto3 resource</h3>
                        To create a new EBS volume, you can use the create_volume() method of the Boto3 EC2 resource:
                        <br><br>
                        <div class="code-title">Creating an EBS volume using Boto3 resource</div>
                        <pre title="Creating an EBS volume using Boto3 resource" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>

ec2_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

new_volume <span class="token operator">=</span> ec2_resource<span class="token punctuation">.</span>create_volume<span class="token punctuation">(</span>
    AvailabilityZone<span class="token operator">=</span><span class="token string-interpolation"><span class="token string">f'</span><span class="token interpolation"><span class="token punctuation">{</span>AWS_REGION<span class="token punctuation">}</span></span><span class="token string">c'</span></span><span class="token punctuation">,</span>
    Size<span class="token operator">=</span><span class="token number">10</span><span class="token punctuation">,</span>
    VolumeType<span class="token operator">=</span><span class="token string">'gp2'</span><span class="token punctuation">,</span>
    TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'ResourceType'</span><span class="token punctuation">:</span> <span class="token string">'volume'</span><span class="token punctuation">,</span>
            <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token punctuation">{</span>
                    <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
                    <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'nubeera-ebs-boto3'</span>
                <span class="token punctuation">}</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Created volume ID: </span><span class="token interpolation"><span class="token punctuation">{</span>new_volume<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                        <br>Here’s an execution output: <br><br>
                        <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-1024x577.png" alt="2. Working with EBS volumes using Boto3 - Creating an EBS volume using Boto3 client" class="ezlazyload wp-image-27785" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-1024x577.png 1024w,
https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-300x169.png 300w,
https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-768x432.png 768w,
https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-1536x865.png 1536w,
https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-2048x1153.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-EBS-volumes-using-Boto3-Creating-an-EBS-volume-using-Boto3-client-1024x577.png">

                        <h3 id="How-to-list-all-EC2-volumes-using-Boto3">How to list all EC2 volumes using Boto3?</h3>
                        The easiest way to list all EC2 volumes is to use the <code>all()</code> method of the volumes collection of the EC2 resource:
                        <br><br>
                        <div class="code-title">Listing all EC2 volumes using Boto3</div>
                        <pre title="Listing all EC2 volumes using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>

ec2_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

<span class="token keyword">for</span> volume <span class="token keyword">in</span> ec2<span class="token punctuation">.</span>volumes<span class="token punctuation">.</span><span class="token builtin">all</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>volume<span class="token punctuation">)</span></blockquote></pre>
                        <br> Here’s an execution output: <br><br>
                        <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-EBS-volumes-using-Boto3-Listing-all-EC2-volumes-using-Boto3-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="3. Working with EBS volumes using Boto3 - Listing all EC2 volumes using Boto3" class="wp-image-27794 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-EBS-volumes-using-Boto3-Listing-all-EC2-volumes-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-EBS-volumes-using-Boto3-Listing-all-EC2-volumes-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-EBS-volumes-using-Boto3-Listing-all-EC2-volumes-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-EBS-volumes-using-Boto3-Listing-all-EC2-volumes-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-EBS-volumes-using-Boto3-Listing-all-EC2-volumes-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-EBS-volumes-using-Boto3-Listing-all-EC2-volumes-using-Boto3-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.2208244194222817" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-EBS-volumes-using-Boto3-Listing-all-EC2-volumes-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-EBS-volumes-using-Boto3-Listing-all-EC2-volumes-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-EBS-volumes-using-Boto3-Listing-all-EC2-volumes-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-EBS-volumes-using-Boto3-Listing-all-EC2-volumes-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-EBS-volumes-using-Boto3-Listing-all-EC2-volumes-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                        <h3 id="How-to-search-EC2-volumes-by-Tag-using-Boto3">How to search EC2 volumes Boto3?</h3>
                        The easiest way to search for EC2 volumes by the specified condition is to use the <code>filter()</code> method of the volumes resource.

                        <h3 id="Searching-EC2-volumes-by-Tag-using-Boto3">Searching EC2 volumes by Tag</h3>
                        In the following example, we’ll find all volumes, which has the Tag <code>Name</code> and Tag value <code>nubeera-ebs-boto3</code>:
                        <br><br>
                        <div class="code-title">Searching EC2 volumes by Tag</div>
                        <pre title="Searching EC2 volumes by Tag" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>

ec2_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

<span class="token keyword">for</span> volume <span class="token keyword">in</span> ec2_resource<span class="token punctuation">.</span>volumes<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    Filters<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'tag:Name'</span><span class="token punctuation">,</span>
            <span class="token string">'Values'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token string">'nubeera-ebs-boto3'</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Volume </span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string"> (</span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span>size<span class="token punctuation">}</span></span><span class="token string"> GiB) -&gt; </span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span>state<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                        <br>Here’s an execution output:<br><br>
                        <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-Tag-using-Boto3-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="4. Working with EBS volumes using Boto3 - Searching EC2 volumes by Tag using Boto3" class="wp-image-27798 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-Tag-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-Tag-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-Tag-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-Tag-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-Tag-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-Tag-using-Boto3-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.2836275394872416" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-Tag-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-Tag-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-Tag-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-Tag-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-Tag-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                        <h3 id="How-to-search-EC2-volumes-by-ID-using-Boto3">Searching EC2 volumes by ID</h3>
                        In the following example, we’ll find all volumes that belong to a list of IDs:
                        <br><br>
                        <div class="code-title">Searching EC2 volumes by ID</div>
                        <pre title="Searching EC2 volumes by ID" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>

ec2_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

<span class="token keyword">for</span> volume <span class="token keyword">in</span> ec2_resource<span class="token punctuation">.</span>volumes<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    VolumeIds<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token string">'vol-07f77d0a13239ef7e'</span><span class="token punctuation">,</span>
        <span class="token string">'vol-01e5646dd54edd848'</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Volume </span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string"> (</span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span>size<span class="token punctuation">}</span></span><span class="token string"> GiB) -&gt; </span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span>state<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                        <br>Here’s an execution output:<br><br>
                        <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-ID-using-Boto3-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="5. Working with EBS volumes using Boto3 - Searching EC2 volumes by ID using Boto3" class="wp-image-27802 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-ID-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-ID-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-ID-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-ID-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-ID-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-ID-using-Boto3-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.7494441274802564" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-ID-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-ID-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-ID-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-ID-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-EBS-volumes-using-Boto3-Searching-EC2-volumes-by-ID-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                        <h3 id="How-to-delete-EC2-volume-using-Boto3">How to delete EC2 volumes using Boto3?</h3>
                        The easiest way to delete for EC2 volume is to use the <code>delete()</code> method of the Volume Boto3 class.

                        <h3>Deleting single EC2 volume</h3>
                        To delete a single EC2 volume, you can use the following code snippet: <br><br>
                        <div class="code-title">Deleting single EC2 volume</div>
                        <pre title="Deleting single EC2 volume" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>

ec2_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

volume <span class="token operator">=</span> ec2_resource<span class="token punctuation">.</span>Volume<span class="token punctuation">(</span><span class="token string">'vol-01e5646dd54edd848'</span><span class="token punctuation">)</span>

<span class="token keyword">if</span> volume<span class="token punctuation">.</span>state <span class="token operator">==</span> <span class="token string">"available"</span><span class="token punctuation">:</span>
    volume<span class="token punctuation">.</span>delete<span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Volume successfully deleted'</span></span><span class="token punctuation">)</span>
<span class="token keyword">else</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"Can't delete volume attached to EC2 instance"</span></span><span class="token punctuation">)</span></blockquote></pre>
                        <strong>Note</strong>: you can delete only volumes in the state <code>available</code>.
                        <br>Here’s an execution output:<br><br>
                        <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/6.-Working-with-EBS-volumes-using-Boto3-Deleting-single-EC2-volume-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="6. Working with EBS volumes using Boto3 - Deleting single EC2 volume" class="wp-image-27841 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/6.-Working-with-EBS-volumes-using-Boto3-Deleting-single-EC2-volume-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/6.-Working-with-EBS-volumes-using-Boto3-Deleting-single-EC2-volume-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/6.-Working-with-EBS-volumes-using-Boto3-Deleting-single-EC2-volume-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/6.-Working-with-EBS-volumes-using-Boto3-Deleting-single-EC2-volume-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/6.-Working-with-EBS-volumes-using-Boto3-Deleting-single-EC2-volume-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/6.-Working-with-EBS-volumes-using-Boto3-Deleting-single-EC2-volume-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.3805199175025642" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/6.-Working-with-EBS-volumes-using-Boto3-Deleting-single-EC2-volume-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/6.-Working-with-EBS-volumes-using-Boto3-Deleting-single-EC2-volume-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/6.-Working-with-EBS-volumes-using-Boto3-Deleting-single-EC2-volume-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/6.-Working-with-EBS-volumes-using-Boto3-Deleting-single-EC2-volume-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/6.-Working-with-EBS-volumes-using-Boto3-Deleting-single-EC2-volume-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">
                        <h3 id="Deleting-multiple-EC2-volumes">Deleting multiple EC2 volumes</h3>
                        To delete multiple EC2 volumes, you can filter for required modules and then use for-loop to delete them one by one. Let’s delete all volumes in the state available. This is the common code that allows cleaning up unused EC2 volume resources:
                        <br><br>
                        <div class="code-title">Deleting unused EC2 volumes</div>
                        <pre title="Deleting unused EC2 volumes" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>

ec2_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

<span class="token keyword">for</span> volume <span class="token keyword">in</span> ec2_resource<span class="token punctuation">.</span>volumes<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>
    Filters<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'status'</span><span class="token punctuation">,</span>
            <span class="token string">'Values'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token string">'available'</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token keyword">if</span> volume<span class="token punctuation">.</span>state <span class="token operator">==</span> <span class="token string">"available"</span><span class="token punctuation">:</span>
        volume_id <span class="token operator">=</span> volume<span class="token punctuation">.</span><span class="token builtin">id</span>
        volume<span class="token punctuation">.</span>delete<span class="token punctuation">(</span><span class="token punctuation">)</span>
        <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Volume </span><span class="token interpolation"><span class="token punctuation">{</span>volume_id<span class="token punctuation">}</span></span><span class="token string"> successfully deleted'</span></span><span class="token punctuation">)</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"Can't delete volume attached to EC2 instance"</span></span><span class="token punctuation">)</span></blockquote></pre>
                        <br>Here’s an execution output:<br><br>
                        <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Deleting-unused-EC2-volumes-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="7. Working with EBS volumes using Boto3 - Deleting unused EC2 volumes" class="wp-image-27848 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Deleting-unused-EC2-volumes-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Deleting-unused-EC2-volumes-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Deleting-unused-EC2-volumes-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Deleting-unused-EC2-volumes-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Deleting-unused-EC2-volumes-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Deleting-unused-EC2-volumes-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.9625789950836967" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Deleting-unused-EC2-volumes-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Deleting-unused-EC2-volumes-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Deleting-unused-EC2-volumes-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Deleting-unused-EC2-volumes-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Deleting-unused-EC2-volumes-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                        <h3 id="How-to-describe-EBS-volumes-using-Boto3">How to describe EBS volumes using Boto3?</h3>
                        The most straightforward way to describe the volume is to use the <code>describe_volumes()</code> method of the EC2 client because it provides complete information about the volume in JSON format.

                        The <code>describe_volumes()</code> method accepts the same arguments as the <code>filter()</code> method, so you can specify various conditions to find required volumes. We’ll use VolumeID to simplify the example:
                        <br><br>
                        <div class="code-title">Describing EBS volumes using Boto3</div>
                        <pre title="Describing EBS volumes using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> json
<span class="token keyword">from</span> datetime <span class="token keyword">import</span> date<span class="token punctuation">,</span> datetime
<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_CLIENT <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token comment"># Helper method to serialize datetime fields</span>
<span class="token keyword">def</span> <span class="token function">json_datetime_serializer</span><span class="token punctuation">(</span>obj<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token keyword">if</span> <span class="token builtin">isinstance</span><span class="token punctuation">(</span>obj<span class="token punctuation">,</span> <span class="token punctuation">(</span>datetime<span class="token punctuation">,</span> date<span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> obj<span class="token punctuation">.</span>isoformat<span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token keyword">raise</span> TypeError <span class="token punctuation">(</span><span class="token string">"Type %s not serializable"</span> <span class="token operator">%</span> <span class="token builtin">type</span><span class="token punctuation">(</span>obj<span class="token punctuation">)</span><span class="token punctuation">)</span>


describe_response <span class="token operator">=</span> EC2_CLIENT<span class="token punctuation">.</span>describe_volumes<span class="token punctuation">(</span>
    VolumeIds<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token string">'vol-0c0ce77e0b27ed800'</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">'Volumes information:'</span><span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>
        describe_response<span class="token punctuation">,</span>
        indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">,</span>
        default<span class="token operator">=</span>json_datetime_serializer
    <span class="token punctuation">)</span>
<span class="token punctuation">)</span></blockquote></pre>
                        In the example above, we’re using additional <code>json_datetime_serializer()</code> method to serialize (convert to string) <code>datetime.datetime</code> fields returned by the <code>describe_volumes()</code> method.
                        <br>Here’s an example output:<br><br>
                        <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Describing-EBS-volumes-using-Boto3-1024x577.png" alt="7. Working with EBS volumes using Boto3 - Describing EBS volumes using Boto3" class="ezlazyload wp-image-27866" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Describing-EBS-volumes-using-Boto3-1024x577.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Describing-EBS-volumes-using-Boto3-300x169.png 300w,https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Describing-EBS-volumes-using-Boto3-768x432.png 768w,https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Describing-EBS-volumes-using-Boto3-1536x865.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Describing-EBS-volumes-using-Boto3-2048x1153.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/7.-Working-with-EBS-volumes-using-Boto3-Describing-EBS-volumes-using-Boto3-1024x577.png">

                        <h3 id="How-to-attach-EBS-volume-to-an-EC2-Instance">How to attach EBS volume to EC2 instance using Boto3?</h3>
                        To attach the EBS volume to the EC2 instance, you need to use attach_to_instance() method of the EC2 resource.
                        <br><br> <strong>Note</strong>: you can only attach EBS volumes to the EC2 instances within the same Availability Zone. If you try to attach EBS volume to the instance from another Availability zone, you’ll receive the <code>botocore.exceptions.ClientError: An error occurred (InvalidVolume.ZoneMismatch) when calling the AttachVolume operation</code> exception.
                        <br><br>
                        <div class="code-title">Attaching EBS volume to EC2 Instance</div>
                        <pre title="Attaching EBS volume to EC2 Instance" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>

ec2_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

volume <span class="token operator">=</span> ec2_resource<span class="token punctuation">.</span>Volume<span class="token punctuation">(</span><span class="token string">'vol-0d4abbb9e7da7ed9f'</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Volume </span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string"> status -&gt; </span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span>state<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>

volume<span class="token punctuation">.</span>attach_to_instance<span class="token punctuation">(</span>
    Device<span class="token operator">=</span><span class="token string">'/dev/sdh'</span><span class="token punctuation">,</span>
    InstanceId<span class="token operator">=</span><span class="token string">'i-07125d93aed65ea84'</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Volume </span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string"> status -&gt; </span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span>state<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                        <br>Here’s an execution output:<br><br>
                        <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/8.-Working-with-EBS-volumes-using-Boto3-Attaching-EBS-volume-to-EC2-Instance-1024x577.png" alt="8. Working with EBS volumes using Boto3 - Attaching EBS volume to EC2 Instance" class="ezlazyload wp-image-27873" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/8.-Working-with-EBS-volumes-using-Boto3-Attaching-EBS-volume-to-EC2-Instance-1024x577.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/8.-Working-with-EBS-volumes-using-Boto3-Attaching-EBS-volume-to-EC2-Instance-300x169.png 300w,https://hands-on.cloud/wp-content/uploads/2021/07/8.-Working-with-EBS-volumes-using-Boto3-Attaching-EBS-volume-to-EC2-Instance-768x432.png 768w,https://hands-on.cloud/wp-content/uploads/2021/07/8.-Working-with-EBS-volumes-using-Boto3-Attaching-EBS-volume-to-EC2-Instance-1536x865.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/8.-Working-with-EBS-volumes-using-Boto3-Attaching-EBS-volume-to-EC2-Instance-2048x1153.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/8.-Working-with-EBS-volumes-using-Boto3-Attaching-EBS-volume-to-EC2-Instance-1024x577.png">

                        <h3 id="How-to-detach-EBS-volume-to-EC2-instance-using-Boto3">How to detach EBS volume from EC2 instance using Boto3?</h3>
                        To detach the EBS volume from the EC2 instance, you need to use the detach_from_instance() method of the <code>Volume</code> class. In addition to that, you have to use the waiter.VolumeAvailable class checks every 15 seconds that the EBS volume has been successfully disconnected from the EC2 instance by running the <code>describe_volumes()</code> method in the background. That’s a correct way to wait for the successful completion of detaching operation.
                        <br><br>
                        <div class="code-title">Detaching EBS volume from EC2 instance</div>
                        <pre title="Detaching EBS volume from EC2 instance" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_RESOURCE <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
EC2_CLIENT <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

volume <span class="token operator">=</span> EC2_RESOURCE<span class="token punctuation">.</span>Volume<span class="token punctuation">(</span><span class="token string">'vol-0d4abbb9e7da7ed9f'</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Volume </span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string"> status -&gt; </span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span>state<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>

volume<span class="token punctuation">.</span>detach_from_instance<span class="token punctuation">(</span>
    Device<span class="token operator">=</span><span class="token string">'/dev/sdh'</span><span class="token punctuation">,</span>
    InstanceId<span class="token operator">=</span><span class="token string">'i-07125d93aed65ea84'</span>
<span class="token punctuation">)</span>

<span class="token comment"># Vaiting for volume to become available</span>
waiter <span class="token operator">=</span> EC2_CLIENT<span class="token punctuation">.</span>get_waiter<span class="token punctuation">(</span><span class="token string">'volume_available'</span><span class="token punctuation">)</span>
waiter<span class="token punctuation">.</span>wait<span class="token punctuation">(</span>
    VolumeIds<span class="token operator">=</span><span class="token punctuation">[</span>
        volume<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Volume </span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string"> status -&gt; </span><span class="token interpolation"><span class="token punctuation">{</span>volume<span class="token punctuation">.</span>state<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                        <br> Here’s an execution output:<br><br>
                        <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/9.-Working-with-EBS-volumes-using-Boto3-Detaching-EBS-volume-from-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="9. Working with EBS volumes using Boto3 - Detaching EBS volume from EC2 instance" class="wp-image-27880 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/9.-Working-with-EBS-volumes-using-Boto3-Detaching-EBS-volume-from-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/9.-Working-with-EBS-volumes-using-Boto3-Detaching-EBS-volume-from-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/9.-Working-with-EBS-volumes-using-Boto3-Detaching-EBS-volume-from-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/9.-Working-with-EBS-volumes-using-Boto3-Detaching-EBS-volume-from-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/9.-Working-with-EBS-volumes-using-Boto3-Detaching-EBS-volume-from-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/9.-Working-with-EBS-volumes-using-Boto3-Detaching-EBS-volume-from-EC2-instance-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.1795588502420582" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/9.-Working-with-EBS-volumes-using-Boto3-Detaching-EBS-volume-from-EC2-instance-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/9.-Working-with-EBS-volumes-using-Boto3-Detaching-EBS-volume-from-EC2-instance-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/9.-Working-with-EBS-volumes-using-Boto3-Detaching-EBS-volume-from-EC2-instance-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/9.-Working-with-EBS-volumes-using-Boto3-Detaching-EBS-volume-from-EC2-instance-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/9.-Working-with-EBS-volumes-using-Boto3-Detaching-EBS-volume-from-EC2-instance-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w"></figure>

                        <h3 id="h-how-to-increase-size-of-the-ebs-volume-using-boto3">How to increase size of the EBS volume using Boto3?</h3>
                        If you need to increase this size based on application requirements, you can use the modify_volume() method of the EC2 client.
                        <blockquote class="wp-block-quote">
                            <strong>You can only increase the size of EBS volume.</strong> There is no way to decrease the size of volume from AWS console, CLI, OR API. <cite>Request modifications to your EBS volumes</cite>
                        </blockquote>
                        <br>
                        <div class="code-title">Increasing the size of the EBS volume</div>
                        <pre title="Increasing the size of the EBS volume" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> time
<span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
EC2_CLIENT <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'ec2'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
VOLUME_ID <span class="token operator">=</span> <span class="token string">'vol-029786bbbf29faa8d'</span>

<span class="token keyword">def</span> <span class="token function">get_modification_state</span><span class="token punctuation">(</span>volume_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    response <span class="token operator">=</span> EC2_CLIENT<span class="token punctuation">.</span>describe_volumes_modifications<span class="token punctuation">(</span>
        VolumeIds<span class="token operator">=</span><span class="token punctuation">[</span>
            VOLUME_ID
        <span class="token punctuation">]</span>
    <span class="token punctuation">)</span>
    <span class="token keyword">return</span> response<span class="token punctuation">[</span><span class="token string">'VolumesModifications'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string">'ModificationState'</span><span class="token punctuation">]</span>

modify_volume_response <span class="token operator">=</span> EC2_CLIENT<span class="token punctuation">.</span>modify_volume<span class="token punctuation">(</span>
    VolumeId<span class="token operator">=</span>VOLUME_ID<span class="token punctuation">,</span>
    Size<span class="token operator">=</span><span class="token number">30</span>
<span class="token punctuation">)</span>

<span class="token keyword">while</span> <span class="token boolean">True</span><span class="token punctuation">:</span>
    state <span class="token operator">=</span> get_modification_state<span class="token punctuation">(</span>VOLUME_ID<span class="token punctuation">)</span>
    <span class="token keyword">if</span> state <span class="token operator">==</span> <span class="token string">'completed'</span> <span class="token keyword">or</span> state <span class="token operator">==</span> <span class="token boolean">None</span><span class="token punctuation">:</span>
        <span class="token keyword">break</span>
    <span class="token keyword">elif</span> state <span class="token operator">==</span> <span class="token string">'failed'</span><span class="token punctuation">:</span>
        <span class="token keyword">raise</span> Exception<span class="token punctuation">(</span><span class="token string">'Failed to modify volume size'</span><span class="token punctuation">)</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        time<span class="token punctuation">.</span>sleep<span class="token punctuation">(</span><span class="token number">60</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Volume </span><span class="token interpolation"><span class="token punctuation">{</span>VOLUME_ID<span class="token punctuation">}</span></span><span class="token string"> successfully resized'</span></span><span class="token punctuation">)</span></blockquote></pre>
                        In the example above, we have to use the <code>get_modification_state()</code> helper method, which returns the EBS volume modification status.<span id="ezoic-pub-ad-placeholder-139" class="ezoic-adpicker-ad"></span>
                        The while loop helps to wait till the volume modification operation finishes.
                        <br><br>Note: pay attention that for large volumes, the volume modification operation might take many hours.
                        <br>Here’s an execution output:<br><br>
                        <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/10.-Working-with-EBS-volumes-using-Boto3-Increasing-the-size-of-the-EBS-volume-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" alt="10. Working with EBS volumes using Boto3 - Increasing the size of the EBS volume" class="wp-image-27911 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/10.-Working-with-EBS-volumes-using-Boto3-Increasing-the-size-of-the-EBS-volume-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/10.-Working-with-EBS-volumes-using-Boto3-Increasing-the-size-of-the-EBS-volume-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/10.-Working-with-EBS-volumes-using-Boto3-Increasing-the-size-of-the-EBS-volume-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/10.-Working-with-EBS-volumes-using-Boto3-Increasing-the-size-of-the-EBS-volume-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/10.-Working-with-EBS-volumes-using-Boto3-Increasing-the-size-of-the-EBS-volume-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/10.-Working-with-EBS-volumes-using-Boto3-Increasing-the-size-of-the-EBS-volume-1024x577.png?ezimgfmt=rs:433x244/rscb1/ng:webp/ngcb1" ezoid="0.9721537365303419" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/10.-Working-with-EBS-volumes-using-Boto3-Increasing-the-size-of-the-EBS-volume-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/10.-Working-with-EBS-volumes-using-Boto3-Increasing-the-size-of-the-EBS-volume-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/10.-Working-with-EBS-volumes-using-Boto3-Increasing-the-size-of-the-EBS-volume-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/10.-Working-with-EBS-volumes-using-Boto3-Increasing-the-size-of-the-EBS-volume-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/10.-Working-with-EBS-volumes-using-Boto3-Increasing-the-size-of-the-EBS-volume-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                        <h3 id="Summary">Summary</h3>
                        This article covered how to use the Python Boto3 library to implement the most common EBS volume operations such as creating, listing, filtering (searching), deleting, and modifying.
                    </div>
            </div>
            <?php require "../../../../../templates/footer_outer.php" ?>
        </div>

        <!-- Javascript -->

        <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
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