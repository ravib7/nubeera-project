<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra S3 in Boto3</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Boto3">

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
                <strong class="px-2" style="font-size: 1.125rem;">S3 in python</strong><br><br>
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">S3 IN PYTHON USING BOTO3</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com">Home</a></li>
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/pages/Boto3/">Boto3</a></li>
                <li class="breadcrumb-item active">S3</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h3>In this article </h3>
                <ul>
                    <li><a href="#prerequisites" data-level="2">Prerequisites</a></li>
                    <li><a href="#h-how-to-connect-to-s3-using-boto3" data-level="2">How to connect to S3 using Boto3?</a></li>
                    <li><a href="#how-to-create-s3-bucket-using-boto3" data-level="2">How to create S3 bucket using Boto3?</a>
                        <ul>
                            <li><a href="#create-s3-bucket-using-boto3-client" data-level="3">Creating S3 Bucket using Boto3 client</a></li>
                            <li><a href="#create-s3-bucket-using-boto3-resource" data-level="3">Creating S3 Bucket using Boto3 resource</a></li>
                        </ul>
                    </li>
                    <li><a href="#how-to-list-amazon-s3-buckets-using-boto3" data-level="2">How to list Amazon S3 Buckets using Boto3?</a>
                        <ul>
                            <li><a href="#Listing-S3-Buckets-using-Boto3-client" data-level="3">Listing S3 Buckets using Boto3 client</a></li>
                            <li><a href="#Listing-S3-Buckets-using-Boto3-resource" data-level="3">Listing S3 Buckets using Boto3 resource</a></li>
                        </ul>
                    </li>
                    <li><a href="#How-to-delete-Amazon-S3-Bucket-using-Boto3" data-level="2">How to delete Amazon S3 Bucket using Boto3?</a>
                        <ul>
                            <li><a href="#Deleting-S3-Buckets-using-Boto3-client" data-level="3">Deleting S3 Buckets using Boto3 client</a></li>
                            <li><a href="#Deleting-S3-Buckets-using-Boto3-resource" data-level="3">Deleting S3 Buckets using Boto3 resource</a></li>
                            <li><a href="#How-to-delete-non-empty-S3-Bucket-using-Boto3" data-level="3">Deleting non-empty S3 Bucket using Boto3</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-how-to-upload-file-to-s3-bucket-using-boto3" data-level="2">How to upload file to S3 Bucket using Boto3?</a>
                        <ul>
                            <li><a href="#Uploading-a-file-to-S3-Bucket-using-Boto3" data-level="3">Uploading a file to S3 Bucket using Boto3</a></li>
                            <li><a href="#Uploading-multiple-files-to-S3-bucket" data-level="3">Uploading multiple files to S3 bucket</a></li>
                            <li><a href="#Uploading-generated-file-object-data-to-S3-Bucket-using-Boto3" data-level="3">Uploading generated file object data to S3 Bucket using Boto3</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-how-to-get-a-list-of-files-from-s3-bucket" data-level="2">How to get a list of files from S3 Bucket?</a>
                        <ul>
                            <li><a href="#h-filtering-results-of-s3-list-operation-using-boto3" data-level="3">Filtering results of S3 list operation using Boto3</a></li>
                        </ul>
                    </li>
                    <li><a href="#How-to-download-file-from-S3-Bucket" data-level="2">How to download file from S3 Bucket?</a></li>
                    <li><a href="#How-to-read-files-from-the-S3-bucket-into-memory" data-level="2">How to read files from the S3 bucket into memory?</a></li>
                    <li><a href="#h-how-to-delete-s3-objects-using-boto3" data-level="2">How to delete S3 objects using Boto3?</a></li>
                    <li><a href="#How-to-rename-S3-file-object-using-Boto3" data-level="2">How to rename S3 file object using Boto3?</a></li>
                    <li><a href="#h-how-to-copy-file-objects-between-s3-buckets-using-boto3" data-level="2">How to copy file objects between S3 buckets using Boto3?</a></li>
                    <li><a href="#h-how-to-create-s3-bucket-policy-using-boto3" data-level="2">How to create S3 Bucket Policy using Boto3?</a>
                        <ul>
                            <li><a href="#How-to-delete-S3-Bucket-Policy-using-Boto3" data-level="3">How to delete S3 Bucket Policy using Boto3?</a></li>
                        </ul>
                    </li>
                    <li><a href="#How-to-generate-S3-presigned-URL" data-level="2">How to generate S3 presigned URL?</a></li>
                    <li><a href="#How-to-enable-S3-Bucket-versioning-using-Boto3" data-level="2">How to enable S3 Bucket versioning using Boto3?</a></li>
                </ul><br>
                Amazon Simple Storage Service (Amazon S3) is object storage commonly used for data analytics applications, machine learning, websites, and many more. To start programmatically
                working with Amazon S3, you need to install the AWS Software Development Kit (SDK). In this article, we’ll cover the AWS SDK for Python called
                Boto3.
                <br><br>

                <strong>Boto3</strong> is the Python SDK for Amazon Web Services (AWS) that allows you to manage AWS services in a programmatic way from your applications and services. You can do the same things that you’re doing in your AWS Console and even more, but
                in a faster, repeated, and automated way. Using the Boto3 library with Amazon Simple Storage Service (S3) allows you to create, update, and delete S3 Buckets, Objects,
                S3 Bucket Policies, and many more from Python programs or scripts with ease.

                <h3 id="prerequisites"> Prerequisites</h3>
                To start automating Amazon S3 operations and making API calls to the Amazon S3 service, you must first
                configure your Python environment

                In general, here’s what you need to have installed:
                <ul>
                    <li>Python 3</li>
                    <li>Boto3</li>
                    <li>AWS CLI tools</li>
                </ul>

                <h3 id="h-how-to-connect-to-s3-using-boto3"> How to connect to S3 using Boto3?</h3>
                The Boto3 library provides you two ways to access APIs for managing AWS services:
                <ul>
                    <li>The <code>client</code> that allows you to access the low-level API data. For example, you can get access to API response
                        data in JSON format.
                    </li>
                    <li>The <code>resource</code> that allows you to use AWS services in a higher-level object-oriented way. For more information on the topic, take a look at
                        AWS CLI vs. botocore vs. Boto3.
                    </li>
                </ul>

                Here’s how you can instantiate the Boto3 client to start working with Amazon S3 APIs:

                <br><br>
                <div class="code-title">Connecting to Amazon S3 API using Boto3</div>
                <pre title="Connecting to Amazon S3 API using Boto3" class="wp-block-code" tabindex="0">
<blockquote lang="python" class="language-python"><span class="">import</span> boto3 
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-1"</span>
client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span></blockquote></pre>
                <h3 id="how-to-create-s3-bucket-using-boto3">How to create S3 bucket using Boto3?</h3>
                To create the Amazon S3 Bucket using the Boto3 library, you need to eithercreate_bucket resource.
                <br><br><strong>Note</strong>: Every Amazon S3 Bucket must have a unique name. Moreover, this name must be unique across all AWS accounts and customers.

                <h3 id="create-s3-bucket-using-boto3-client">Creating S3 Bucket using Boto3 client</h3>
                To avoid various exceptions while working with the Amazon S3 service, we strongly recommend you to define a specific AWS Region for the Boto3 client and S3 Bucket Configuration:
                <br><br>
                <div class="code-title">Creating S3 Bucket using Boto3 client</div>
                <pre title="Creating S3 Bucket using Boto3 client" class="wp-block-code  language-python" tabindex="0">
<blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
bucket_name <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
location <span class="token operator">=</span> <span class="token punctuation">{</span><span class="token string">'LocationConstraint'</span><span class="token punctuation">:</span> AWS_REGION<span class="token punctuation">}</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_bucket<span class="token punctuation">(</span>Bucket<span class="token operator">=</span>bucket_name<span class="token punctuation">,</span> CreateBucketConfiguration<span class="token operator">=</span>location<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Amazon S3 bucket has been created"</span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an example output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/1.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="1. Working with S3 in Python - How to create S3 bucket using Boto3" class="wp-image-26869 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/1.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/1.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/1.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/1.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/1.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/1.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.9577931719693715" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/1.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/1.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/1.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/1.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/1.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">


                <h3 id="create-s3-bucket-using-boto3-resource"> Creating S3 Bucket using Boto3 resource</h3>

                Similarly, you can use the Boto3 resource to create an Amazon S3 bucket:

                <br><br>
                <div class="code-title">Creating S3 Bucket using Boto3 resource</div>
                <pre title="Creating S3 Bucket using Boto3 resource" class="wp-block-code  language-python" tabindex="0">
<blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> boto3 AWS_REGION <span class="token operator">=</span><span class="token string">"us-east-2"</span> 
resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
bucket_name <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
location <span class="token operator">=</span> <span class="token punctuation">{</span><span class="token string">'LocationConstraint'</span><span class="token punctuation">:</span> AWS_REGION<span class="token punctuation">}</span>
bucket <span class="token operator">=</span> resource<span class="token punctuation">.</span>create_bucket<span class="token punctuation">(</span> Bucket<span class="token operator">=</span>bucket_name<span class="token punctuation">,</span>CreateBucketConfiguration<span class="token operator">=</span>location<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Amazon S3 bucket has been created"</span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an example output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-resource-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="2. Working with S3 in Python - How to create S3 bucket using Boto3 resource" class="wp-image-26873 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-resource-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-resource-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-resource-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-resource-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-resource-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-resource-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.6779167690259691" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-resource-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-resource-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-resource-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-resource-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/2.-Working-with-S3-in-Python-How-to-create-S3-bucket-using-Boto3-resource-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">



                <h3 id="how-to-list-amazon-s3-buckets-using-boto3">How to list Amazon S3 Buckets using Boto3?</h3>
                How to list Amazon S3 Buckets using Boto3?

                <ul>
                    <li>list_buckets() method of the client resource</li>
                    <li>all() method of the S3 buckets resource</li>
                </ul>

                <h3 id="Listing-S3-Buckets-using-Boto3-client">Listing S3 Buckets using Boto3 client</h3>
                Here’s an example of listing existing S3 Buckets using the S3 client:

                <br><br>
                <div class="code-title">Listing S3 Buckets using Boto3 client</div>
                <pre title="Listing S3 Buckets using Boto3 client" class="wp-block-code  language-python" tabindex="0">
<blockquote lang="python" class="language-python">
<span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>list_buckets<span class="token punctuation">(</span><span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Listing Amazon S3 Buckets:"</span><span class="token punctuation">)</span>
<span class="token keyword">for</span> bucket <span class="token keyword">in</span> response<span class="token punctuation">[</span><span class="token string">'Buckets'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"-- </span><span class="token interpolation"><span class="token punctuation">{</span>bucket<span class="token punctuation">[</span><span class="token string">'Name'</span><span class="token punctuation">]</span><span class="token punctuation">}</span></span><span class="token string">"</span></span><span class="token punctuation">)</span></blockquote>
</pre>
                <br>Here’s an example output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="3. Working with S3 in Python - How to list S3 buckets using Boto3" class="wp-image-26875 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.6662665264184753" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/3.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">



                <h3 id="Listing-S3-Buckets-using-Boto3-resource">Listing S3 Buckets using Boto3 resource</h3>
                Here’s an example of listing existing S3 Buckets using the S3 resource:

                <br><br>
                <div class="code-title">Listing S3 Buckets using Boto3 resource</div>
                <pre title="Listing S3 Buckets using Boto3 resource" class="wp-block-code  language-python" tabindex="0">
<blockquote lang="python" class="  language-python">
<span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
iterator <span class="token operator">=</span> resource<span class="token punctuation">.</span>buckets<span class="token punctuation">.</span><span class="token builtin">all</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Listing Amazon S3 Buckets:"</span><span class="token punctuation">)</span>
<span class="token keyword">for</span> bucket <span class="token keyword">in</span> iterator<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"-- </span><span class="token interpolation"><span class="token punctuation">{</span>bucket<span class="token punctuation">.</span>name<span class="token punctuation">}</span></span><span class="token string">"</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an example output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-resource-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="5. Working with S3 in Python - How to list S3 buckets using Boto3 resource" class="wp-image-26885 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-resource-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-resource-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-resource-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-resource-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-resource-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-resource-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.30696165523010177" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-resource-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-resource-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-resource-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-resource-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/5.-Working-with-S3-in-Python-How-to-list-S3-buckets-using-Boto3-resource-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">


                <h3 id="How-to-delete-Amazon-S3-Bucket-using-Boto3">
                    <meta charset="utf-8">How to delete Amazon S3 Bucket using Boto3?
                </h3>
                There are two possible ways of deletingAmazon S3 Bucket using the Boto3 library:

                <ul>
                    <li>delete_bucket() method of the S3 client</li>
                    <li>delete() method of the S3.Bucket resource</li>
                </ul>
                <h3 id="Deleting-S3-Buckets-using-Boto3-client">
                    <meta charset="utf-8">Deleting S3 Buckets using Boto3 client
                </h3>
                Here’s an example of deleting the Amazon S3 bucket using the Boto3 client:

                <br><br>
                <div class="code-title">Deleting S3 Buckets using Boto3 client</div>
                <pre title="Deleting S3 Buckets using Boto3 client" class="wp-block-code  language-python" tabindex="0">
<blockquote lang="python" class="  language-python">
<span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
bucket_name <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
client<span class="token punctuation">.</span>delete_bucket<span class="token punctuation">(</span>Bucket<span class="token operator">=</span>bucket_name<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Amazon S3 Bucket has been deleted"</span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an example output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="4. Working with S3 in Python - How to delete S3 buckets using Boto3" class="wp-image-26880 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.2886765064211585" srcset="https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/07/4.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">


                <h3 id="Deleting-S3-Buckets-using-Boto3-resource">Deleting S3 Buckets using Boto3 resource</h3>
                Here’s an example of deleting the Amazon S3 bucket using the Boto3 client:
                <br><br>
                <div class="code-title">Deleting S3 Buckets using Boto3 resource</div>
                <pre title="Deleting S3 Buckets using Boto3 resource" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
bucket_name <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_bucket <span class="token operator">=</span> resource<span class="token punctuation">.</span>Bucket<span class="token punctuation">(</span>bucket_name<span class="token punctuation">)</span>
s3_bucket<span class="token punctuation">.</span>delete<span class="token punctuation">(</span><span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Amazon S3 Bucket has been deleted"</span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an example output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-resource-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="6. Working with S3 in Python - How to delete S3 buckets using Boto3 resource" class="wp-image-26892 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-resource-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-resource-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-resource-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-resource-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-resource-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-resource-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.9194215166081614" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-resource-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-resource-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-resource-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-resource-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/6.-Working-with-S3-in-Python-How-to-delete-S3-buckets-using-Boto3-resource-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">


                <h3 id="How-to-delete-non-empty-S3-Bucket-using-Boto3">Deleting non-empty S3 Bucket using Boto3</h3>
                To delete an S3 Bucket using the Boto3 library, you have to clean up the S3 Bucket. Otherwise, the Boto3 library will raise the
                <code>BucketNotEmpty</code> exception. The cleanup operation requires deleting all S3 Bucket objects and their versions:

                <br><br>
                <div class="code-title">Deleting non-empty S3 Bucket using Boto3</div>
                <pre title="Deleting non-empty S3 Bucket using Boto3" class="wp-block-code  language-python" tabindex="0">
<blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> io
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
s3_bucket <span class="token operator">=</span> s3_resource<span class="token punctuation">.</span>Bucket<span class="token punctuation">(</span>S3_BUCKET_NAME<span class="token punctuation">)</span>
<span class="token keyword">def</span> <span class="token function">cleanup_s3_bucket</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token comment"># Deleting objects</span>
    <span class="token keyword">for</span> s3_object <span class="token keyword">in</span> s3_bucket<span class="token punctuation">.</span>objects<span class="token punctuation">.</span><span class="token builtin">all</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    s3_object<span class="token punctuation">.</span>delete<span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token comment"># Deleting objects versions if S3 versioning enabled</span>
    <span class="token keyword">for</span> s3_object_ver <span class="token keyword">in</span> s3_bucket<span class="token punctuation">.</span>object_versions<span class="token punctuation">.</span><span class="token builtin">all</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    s3_object_ver<span class="token punctuation">.</span>delete<span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"S3 Bucket cleaned up"</span><span class="token punctuation">)</span>
cleanup_s3_bucket<span class="token punctuation">(</span><span class="token punctuation">)</span>
s3_bucket<span class="token punctuation">.</span>delete<span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"S3 Bucket deleted"</span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an execution result:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-S3-in-Python-Deleting-non-empty-S3-Bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="17. Working with S3 in Python - Deleting non-empty S3 Bucket using Boto3" class="wp-image-27037 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-S3-in-Python-Deleting-non-empty-S3-Bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-S3-in-Python-Deleting-non-empty-S3-Bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-S3-in-Python-Deleting-non-empty-S3-Bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-S3-in-Python-Deleting-non-empty-S3-Bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-S3-in-Python-Deleting-non-empty-S3-Bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-S3-in-Python-Deleting-non-empty-S3-Bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.09585377712893361" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-S3-in-Python-Deleting-non-empty-S3-Bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-S3-in-Python-Deleting-non-empty-S3-Bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-S3-in-Python-Deleting-non-empty-S3-Bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-S3-in-Python-Deleting-non-empty-S3-Bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/17.-Working-with-S3-in-Python-Deleting-non-empty-S3-Bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="h-how-to-upload-file-to-s3-bucket-using-boto3">How to upload file to S3 Bucket using Boto3?</h3>
                The Boto3 library has two ways for uploading files and objects into an S3 Bucket:

                <ul>
                    <li>upload_file() method allows you to upload a file from the file system</li>
                    <li>upload_fileobj() method allows you to upload a file binary object data (see Working with Files in Python)</li>
                </ul>


                <h3 id="Uploading-a-file-to-S3-Bucket-using-Boto3">
                    <meta charset="utf-8">Uploading a file to S3 Bucket using Boto3
                </h3>
                The upload_file() method requires the following arguments:

                <ul>
                    <li><code>file_name</code> – filename on the local filesystem</li>
                    <li><code>bucket_name</code> – the name of the S3 bucket</li>
                    <li><code>object_name</code> – the name of the uploaded file (usually equals to the <code>file_name</code>)</li>
                </ul>
                Here’s an example of uploading a file to an S3 Bucket:

                <br><br>
                <div class="code-title">Uploading a file to S3 Bucket using Boto3</div>
                <pre title="Uploading a file to S3 Bucket using Boto3" class="wp-block-code  language-python" tabindex="0">
<blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> pathlib
<span class="token keyword">import</span> boto3
BASE_DIR <span class="token operator">=</span> pathlib<span class="token punctuation">.</span>Path<span class="token punctuation">(</span>__file__<span class="token punctuation">)</span><span class="token punctuation">.</span>parent<span class="token punctuation">.</span>resolve<span class="token punctuation">(</span><span class="token punctuation">)</span>
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
<span class="token keyword">def</span> <span class="token function">upload_files</span><span class="token punctuation">(</span>file_name<span class="token punctuation">,</span> bucket<span class="token punctuation">,</span> object_name<span class="token operator">=</span><span class="token boolean">None</span><span class="token punctuation">,</span> args<span class="token operator">=</span><span class="token boolean">None</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token keyword">if</span> object_name <span class="token keyword">is</span> <span class="token boolean">None</span><span class="token punctuation">:</span>
        object_name <span class="token operator">=</span> file_name
    s3_client<span class="token punctuation">.</span>upload_file<span class="token punctuation">(</span>file_name<span class="token punctuation">,</span> bucket<span class="token punctuation">,</span> object_name<span class="token punctuation">,</span> ExtraArgs<span class="token operator">=</span>args<span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"'</span><span class="token interpolation"><span class="token punctuation">{</span>file_name<span class="token punctuation">}</span></span><span class="token string">' has been uploaded to '</span><span class="token interpolation"><span class="token punctuation">{</span>S3_BUCKET_NAME<span class="token punctuation">}</span></span><span class="token string">'"</span></span><span class="token punctuation">)</span>
upload_files<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"</span><span class="token interpolation"><span class="token punctuation">{</span>BASE_DIR<span class="token punctuation">}</span></span><span class="token string">/files/demo.txt"</span></span><span class="token punctuation">,</span> S3_BUCKET_NAME<span class="token punctuation">)</span></blockquote></pre>

                We’re using the <code>pathlib</code> module to get the script location path and save it to the <code>BASE_DIR</code> variable. Then, we’re creating the
                <meta charset="utf-8"><code>upload_files()</code> method that is responsible for calling the S3 client and uploading the file.
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-S3-in-Python-How-to-upload-file-to-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="7. Working with S3 in Python - How to upload file to S3 bucket using Boto3" class="wp-image-26910 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-S3-in-Python-How-to-upload-file-to-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-S3-in-Python-How-to-upload-file-to-S3-bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-S3-in-Python-How-to-upload-file-to-S3-bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-S3-in-Python-How-to-upload-file-to-S3-bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-S3-in-Python-How-to-upload-file-to-S3-bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-S3-in-Python-How-to-upload-file-to-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.3187265613290615" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-S3-in-Python-How-to-upload-file-to-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-S3-in-Python-How-to-upload-file-to-S3-bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-S3-in-Python-How-to-upload-file-to-S3-bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-S3-in-Python-How-to-upload-file-to-S3-bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/7.-Working-with-S3-in-Python-How-to-upload-file-to-S3-bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">


                <h3 id="Uploading-multiple-files-to-S3-bucket">Uploading multiple files to S3 bucket</h3>

                To upload multiple files to the Amazon S3 bucket, you can use the <code>glob()</code> method from the <code>glob</code> module. This method returns all file paths that match a given pattern as a Python list. You can use glob to select certain files by a search pattern by using a wildcard character:

                <br><br>
                <div class="code-title">Uploading multiple files to S3 bucket</div>
                <pre title="Uploading multiple files to S3 bucket" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> os
<span class="token keyword">import</span> pathlib
<span class="token keyword">from</span> glob <span class="token keyword">import</span> glob
<span class="token keyword">import</span> boto3
BASE_DIR <span class="token operator">=</span> pathlib<span class="token punctuation">.</span>Path<span class="token punctuation">(</span>__file__<span class="token punctuation">)</span><span class="token punctuation">.</span>parent<span class="token punctuation">.</span>resolve<span class="token punctuation">(</span><span class="token punctuation">)</span>
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
S3_CLIENT <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
<span class="token keyword">def</span> <span class="token function">upload_file</span><span class="token punctuation">(</span>file_name<span class="token punctuation">,</span> bucket<span class="token punctuation">,</span> object_name<span class="token operator">=</span><span class="token boolean">None</span><span class="token punctuation">,</span> args<span class="token operator">=</span><span class="token boolean">None</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token keyword">if</span> object_name <span class="token keyword">is</span> <span class="token boolean">None</span><span class="token punctuation">:</span>
        object_name <span class="token operator">=</span> file_name
    S3_CLIENT<span class="token punctuation">.</span>upload_file<span class="token punctuation">(</span>file_name<span class="token punctuation">,</span> bucket<span class="token punctuation">,</span> object_name<span class="token punctuation">,</span> ExtraArgs<span class="token operator">=</span>args<span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"'</span><span class="token interpolation"><span class="token punctuation">{</span>file_name<span class="token punctuation">}</span></span><span class="token string">' has been uploaded to '</span><span class="token interpolation"><span class="token punctuation">{</span>S3_BUCKET_NAME<span class="token punctuation">}</span></span><span class="token string">'"</span></span><span class="token punctuation">)</span>
files <span class="token operator">=</span> glob<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"</span><span class="token interpolation"><span class="token punctuation">{</span>BASE_DIR<span class="token punctuation">}</span></span><span class="token string">/files/*.txt"</span></span><span class="token punctuation">)</span>
<span class="token keyword">for</span> <span class="token builtin">file</span> <span class="token keyword">in</span> files<span class="token punctuation">:</span>
upload_file<span class="token punctuation">(</span><span class="token builtin">file</span><span class="token punctuation">,</span> S3_BUCKET_NAME<span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an example output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-S3-in-Python-How-to-upload-multiple-files-to-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="9. Working with S3 in Python - How to upload multiple files to S3 bucket using Boto3" class="wp-image-26930 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-S3-in-Python-How-to-upload-multiple-files-to-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-S3-in-Python-How-to-upload-multiple-files-to-S3-bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-S3-in-Python-How-to-upload-multiple-files-to-S3-bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-S3-in-Python-How-to-upload-multiple-files-to-S3-bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-S3-in-Python-How-to-upload-multiple-files-to-S3-bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-S3-in-Python-How-to-upload-multiple-files-to-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.1337896850382565" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-S3-in-Python-How-to-upload-multiple-files-to-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-S3-in-Python-How-to-upload-multiple-files-to-S3-bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-S3-in-Python-How-to-upload-multiple-files-to-S3-bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-S3-in-Python-How-to-upload-multiple-files-to-S3-bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/9.-Working-with-S3-in-Python-How-to-upload-multiple-files-to-S3-bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="Uploading-generated-file-object-data-to-S3-Bucket-using-Boto3">Uploading generated file object data to S3 Bucket using Boto3</h3>
                If you need to upload file object data to the Amazon S3 Bucket, you can use the <code>upload_fileobj()</code><span style="font-size:1rem"> method</span>. This method might be useful when you need to generate file content in memory (example) and then upload it to S3 without saving it on the file system.

                <br><br><strong>Note</strong>:
                <meta charset="utf-8"> the <code>upload_fileobj()</code><span style="font-size:1rem"> method</span> requires opening a file in binary mode.
                Here’s an example of uploading a generated file to the S3 Bucket:
                <br><br>
                <div class="code-title">Uploading the file object data to S3 Bucket using Boto3</div>
                <pre title="Uploading the file object data to S3 Bucket using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> io
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
<span class="token keyword">def</span> <span class="token function">upload_generated_file_object</span><span class="token punctuation">(</span>bucket<span class="token punctuation">,</span> object_name<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token keyword">with</span> io<span class="token punctuation">.</span>BytesIO<span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token keyword">as</span> f<span class="token punctuation">:</span>
        f<span class="token punctuation">.</span>write<span class="token punctuation">(</span><span class="token string">b'First line.\n'</span><span class="token punctuation">)</span>
        f<span class="token punctuation">.</span>write<span class="token punctuation">(</span><span class="token string">b'Second line.\n'</span><span class="token punctuation">)</span>
        f<span class="token punctuation">.</span>seek<span class="token punctuation">(</span><span class="token number">0</span><span class="token punctuation">)</span>
        s3_client<span class="token punctuation">.</span>upload_fileobj<span class="token punctuation">(</span>f<span class="token punctuation">,</span> bucket<span class="token punctuation">,</span> object_name<span class="token punctuation">)</span>
        <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"Generated has been uploaded to '</span><span class="token interpolation"><span class="token punctuation">{</span>bucket<span class="token punctuation">}</span></span><span class="token string">'"</span></span><span class="token punctuation">)</span>
upload_generated_file_object<span class="token punctuation">(</span>S3_BUCKET_NAME<span class="token punctuation">,</span> <span class="token string">'generated_file.txt'</span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an example output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-S3-in-Python-How-to-upload-generated-file-object-to-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="8. Working with S3 in Python - How to upload generated file object to S3 bucket using Boto3" class="wp-image-26922 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-S3-in-Python-How-to-upload-generated-file-object-to-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-S3-in-Python-How-to-upload-generated-file-object-to-S3-bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-S3-in-Python-How-to-upload-generated-file-object-to-S3-bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-S3-in-Python-How-to-upload-generated-file-object-to-S3-bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-S3-in-Python-How-to-upload-generated-file-object-to-S3-bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-S3-in-Python-How-to-upload-generated-file-object-to-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.8795057889514946" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-S3-in-Python-How-to-upload-generated-file-object-to-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-S3-in-Python-How-to-upload-generated-file-object-to-S3-bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-S3-in-Python-How-to-upload-generated-file-object-to-S3-bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-S3-in-Python-How-to-upload-generated-file-object-to-S3-bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/8.-Working-with-S3-in-Python-How-to-upload-generated-file-object-to-S3-bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">



                <h3>Enabling S3 Server-Side Encryption (SSE-S3) for uploaded objects</h3>

                <meta charset="utf-8">You can use S3 Server-Side Encryption (SSE-S3) encryption to protect your data in Amazon S3. We will use server-side encryption, which uses the AES-256 algorithm:<span id="ezoic-pub-ad-placeholder-138" class="ezoic-adpicker-ad"></span>

                <br><br>
                <div class="code-title">Enabling S3 Server-Side Encryption (SSE-S3) for uploaded objects</div>
                <pre title="Enabling S3 Server-Side Encryption (SSE-S3) for uploaded objects" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> pathlib
<span class="token keyword">import</span> boto3
BASE_DIR <span class="token operator">=</span> pathlib<span class="token punctuation">.</span>Path<span class="token punctuation">(</span>__file__<span class="token punctuation">)</span><span class="token punctuation">.</span>parent<span class="token punctuation">.</span>resolve<span class="token punctuation">(</span><span class="token punctuation">)</span>
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
<span class="token keyword">def</span> <span class="token function">upload_files</span><span class="token punctuation">(</span>file_name<span class="token punctuation">,</span> bucket<span class="token punctuation">,</span> object_name<span class="token operator">=</span><span class="token boolean">None</span><span class="token punctuation">,</span> args<span class="token operator">=</span><span class="token boolean">None</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token keyword">if</span> object_name <span class="token keyword">is</span> <span class="token boolean">None</span><span class="token punctuation">:</span>
        object_name <span class="token operator">=</span> file_name
    s3_client<span class="token punctuation">.</span>upload_file<span class="token punctuation">(</span>file_name<span class="token punctuation">,</span> bucket<span class="token punctuation">,</span> object_name<span class="token punctuation">,</span> ExtraArgs<span class="token operator">=</span>args<span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"'</span><span class="token interpolation"><span class="token punctuation">{</span>file_name<span class="token punctuation">}</span></span><span class="token string">' has been uploaded to '</span><span class="token interpolation"><span class="token punctuation">{</span>S3_BUCKET_NAME<span class="token punctuation">}</span></span><span class="token string">'"</span></span><span class="token punctuation">)</span>
upload_files<span class="token punctuation">(</span>
    <span class="token string-interpolation"><span class="token string">f"</span><span class="token interpolation"><span class="token punctuation">{</span>BASE_DIR<span class="token punctuation">}</span></span><span class="token string">/files/demo.txt"</span></span><span class="token punctuation">,</span>
    S3_BUCKET_NAME<span class="token punctuation">,</span>
    <span class="token string">'demo.txt'</span><span class="token punctuation">,</span>
    args<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'ServerSideEncryption'</span><span class="token punctuation">:</span> <span class="token string">'AES256'</span><span class="token punctuation">}</span>
<span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an execution output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-S3-in-Python-Enabling-S3-Server-Side-Encryption-SSE-S3-for-uploaded-objects-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="18. Working with S3 in Python - Enabling S3 Server-Side Encryption (SSE-S3) for uploaded objects" class="wp-image-27042 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-S3-in-Python-Enabling-S3-Server-Side-Encryption-SSE-S3-for-uploaded-objects-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-S3-in-Python-Enabling-S3-Server-Side-Encryption-SSE-S3-for-uploaded-objects-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-S3-in-Python-Enabling-S3-Server-Side-Encryption-SSE-S3-for-uploaded-objects-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-S3-in-Python-Enabling-S3-Server-Side-Encryption-SSE-S3-for-uploaded-objects-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-S3-in-Python-Enabling-S3-Server-Side-Encryption-SSE-S3-for-uploaded-objects-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-S3-in-Python-Enabling-S3-Server-Side-Encryption-SSE-S3-for-uploaded-objects-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.7925978482331906" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-S3-in-Python-Enabling-S3-Server-Side-Encryption-SSE-S3-for-uploaded-objects-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-S3-in-Python-Enabling-S3-Server-Side-Encryption-SSE-S3-for-uploaded-objects-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-S3-in-Python-Enabling-S3-Server-Side-Encryption-SSE-S3-for-uploaded-objects-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-S3-in-Python-Enabling-S3-Server-Side-Encryption-SSE-S3-for-uploaded-objects-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/18.-Working-with-S3-in-Python-Enabling-S3-Server-Side-Encryption-SSE-S3-for-uploaded-objects-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="h-how-to-get-a-list-of-files-from-s3-bucket">How to get a list of files from S3 Bucket?</h3>

                The most convenient method to get a list of files from S3 Bucket using Boto3 is to use the S3Bucket.objects.all() method:

                <br><br>
                <pre class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> io
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
s3_bucket <span class="token operator">=</span> s3_resource<span class="token punctuation">.</span>Bucket<span class="token punctuation">(</span>S3_BUCKET_NAME<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">'Listing Amazon S3 Bucket objects/files:'</span><span class="token punctuation">)</span>
<span class="token keyword">for</span> obj <span class="token keyword">in</span> s3_bucket<span class="token punctuation">.</span>objects<span class="token punctuation">.</span><span class="token builtin">all</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'-- </span><span class="token interpolation"><span class="token punctuation">{</span>obj<span class="token punctuation">.</span>key<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an example output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-S3-in-Python-How-to-list-files-and-objects-in-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="10. Working with S3 in Python - How to list files and objects in S3 bucket using Boto3" class="wp-image-26936 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-S3-in-Python-How-to-list-files-and-objects-in-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-S3-in-Python-How-to-list-files-and-objects-in-S3-bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-S3-in-Python-How-to-list-files-and-objects-in-S3-bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-S3-in-Python-How-to-list-files-and-objects-in-S3-bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-S3-in-Python-How-to-list-files-and-objects-in-S3-bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-S3-in-Python-How-to-list-files-and-objects-in-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.44591614422392967" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-S3-in-Python-How-to-list-files-and-objects-in-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-S3-in-Python-How-to-list-files-and-objects-in-S3-bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-S3-in-Python-How-to-list-files-and-objects-in-S3-bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-S3-in-Python-How-to-list-files-and-objects-in-S3-bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/10.-Working-with-S3-in-Python-How-to-list-files-and-objects-in-S3-bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">


                <h3 id="h-filtering-results-of-s3-list-operation-using-boto3">Filtering results of S3 list operation using Boto3</h3>
                If you need to get a list of S3 objects which keys are starting from the specific prefix, you can use the <code>.filter()</code> method to do this:<span id="ezoic-pub-ad-placeholder-139" class="ezoic-adpicker-ad"></span>

                <br><br>
                <div class="code-title">Filtering results of S3 list operation using Boto3</div>
                <pre title="Filtering results of S3 list operation using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> io
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
s3_bucket <span class="token operator">=</span> s3_resource<span class="token punctuation">.</span>Bucket<span class="token punctuation">(</span>S3_BUCKET_NAME<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">'Listing Amazon S3 Bucket objects/files:'</span><span class="token punctuation">)</span>
<span class="token keyword">for</span> obj <span class="token keyword">in</span> s3_bucket<span class="token punctuation">.</span>objects<span class="token punctuation">.</span><span class="token builtin">filter</span><span class="token punctuation">(</span>Prefix<span class="token operator">=</span><span class="token string">'demo'</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'-- </span><span class="token interpolation"><span class="token punctuation">{</span>obj<span class="token punctuation">.</span>key<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s a results output. Instead of getting all files, we’re getting only files which keys are starting from the demo prefix:<br>
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-S3-in-Python-Downloading-file-object-from-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="12. Working with S3 in Python - Downloading file object from S3 bucket using Boto3" class="wp-image-26948 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-S3-in-Python-Downloading-file-object-from-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-S3-in-Python-Downloading-file-object-from-S3-bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-S3-in-Python-Downloading-file-object-from-S3-bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-S3-in-Python-Downloading-file-object-from-S3-bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-S3-in-Python-Downloading-file-object-from-S3-bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-S3-in-Python-Downloading-file-object-from-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.576670069187786" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-S3-in-Python-Downloading-file-object-from-S3-bucket-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-S3-in-Python-Downloading-file-object-from-S3-bucket-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-S3-in-Python-Downloading-file-object-from-S3-bucket-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-S3-in-Python-Downloading-file-object-from-S3-bucket-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/12.-Working-with-S3-in-Python-Downloading-file-object-from-S3-bucket-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="How-to-download-file-from-S3-Bucket">How to download file from S3 Bucket?</h3>
                You can use the <code>download_file()</code> method to download the S3 object to your local file system:<span id="ezoic-pub-ad-placeholder-140" class="ezoic-adpicker-ad"></span>

                <br><br>
                <div class="code-title">Downloading file object from S3 Bucket</div>
                <pre title="Downloading file object from S3 Bucket" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> io
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
s3_object <span class="token operator">=</span> s3_resource<span class="token punctuation">.</span>Object<span class="token punctuation">(</span>S3_BUCKET_NAME<span class="token punctuation">,</span> <span class="token string">'demo.txt'</span><span class="token punctuation">)</span>
s3_object<span class="token punctuation">.</span>download_file<span class="token punctuation">(</span><span class="token string">'/tmp/demo.txt'</span><span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">'S3 object download complete'</span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an output example:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-S3-in-Python-Reading-file-object-from-S3-bucket-into-memory-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="13. Working with S3 in Python - Reading file object from S3 bucket into memory using Boto3" class="wp-image-26991 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-S3-in-Python-Reading-file-object-from-S3-bucket-into-memory-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-S3-in-Python-Reading-file-object-from-S3-bucket-into-memory-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-S3-in-Python-Reading-file-object-from-S3-bucket-into-memory-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-S3-in-Python-Reading-file-object-from-S3-bucket-into-memory-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-S3-in-Python-Reading-file-object-from-S3-bucket-into-memory-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-S3-in-Python-Reading-file-object-from-S3-bucket-into-memory-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.8591242874694596" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-S3-in-Python-Reading-file-object-from-S3-bucket-into-memory-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-S3-in-Python-Reading-file-object-from-S3-bucket-into-memory-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-S3-in-Python-Reading-file-object-from-S3-bucket-into-memory-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-S3-in-Python-Reading-file-object-from-S3-bucket-into-memory-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/13.-Working-with-S3-in-Python-Reading-file-object-from-S3-bucket-into-memory-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">


                <h3 id="How-to-read-files-from-the-S3-bucket-into-memory">How to read files from the S3 bucket into memory?</h3>

                <br><br>
                <div class="code-title">Reading files from the S3 bucket into memory</div>
                <pre title="Reading files from the S3 bucket into memory" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> io
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
s3_object <span class="token operator">=</span> s3_resource<span class="token punctuation">.</span>Object<span class="token punctuation">(</span>S3_BUCKET_NAME<span class="token punctuation">,</span> <span class="token string">'demo.txt'</span><span class="token punctuation">)</span>
<span class="token keyword">with</span> io<span class="token punctuation">.</span>BytesIO<span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token keyword">as</span> f<span class="token punctuation">:</span>
s3_object<span class="token punctuation">.</span>download_fileobj<span class="token punctuation">(</span>f<span class="token punctuation">)</span>
f<span class="token punctuation">.</span>seek<span class="token punctuation">(</span><span class="token number">0</span><span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Downloaded content:\n</span><span class="token interpolation"><span class="token punctuation">{</span>f<span class="token punctuation">.</span>read<span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an example output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="15. Working with S3 in Python - Deleting S3 objects using Boto3" class="wp-image-27016 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.8846812875087153" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="h-how-to-delete-s3-objects-using-boto3">How to delete S3 objects using Boto3?</h3>
                To delete an object from Amazon S3 Bucket, you need to call <code>delete()</code> method of the object instance representing that object:

                <br><br>
                <div class="code-title">Deleting S3 objects using Boto3</div>
                <pre title="Deleting S3 objects using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
s3_object <span class="token operator">=</span> s3_resource<span class="token punctuation">.</span>Object<span class="token punctuation">(</span>bucket_name<span class="token punctuation">,</span> <span class="token string">'new_demo.txt'</span><span class="token punctuation">)</span>
s3_object<span class="token punctuation">.</span>delete<span class="token punctuation">(</span><span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">'S3 object deleted'</span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an execution example:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="15. Working with S3 in Python - Deleting S3 objects using Boto3" class="wp-image-27016 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.8846812875087153" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/15.-Working-with-S3-in-Python-Deleting-S3-objects-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="How-to-rename-S3-file-object-using-Boto3">How to rename S3 file object using Boto3?</h3>

                There’s no single API call to rename an S3 object. So, to rename an S3 object, you need to copy it to a new object with a new name and then deleted the old object:
                <br><br>
                <div class="code-title">Renaming S3 file object using Boto3</div>
                <pre title="Renaming S3 file object using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>

<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
<span class="token keyword">def</span> <span class="token function">rename_s3_object</span><span class="token punctuation">(</span>bucket_name<span class="token punctuation">,</span> old_name<span class="token punctuation">,</span> new_name<span class="token punctuation">)</span><span class="token punctuation">:</span>
    old_s3_object <span class="token operator">=</span> s3_resource<span class="token punctuation">.</span>Object<span class="token punctuation">(</span>bucket_name<span class="token punctuation">,</span> old_name<span class="token punctuation">)</span>
    new_s3_object <span class="token operator">=</span> s3_resource<span class="token punctuation">.</span>Object<span class="token punctuation">(</span>bucket_name<span class="token punctuation">,</span> new_name<span class="token punctuation">)</span>
    new_s3_object<span class="token punctuation">.</span>copy_from<span class="token punctuation">(</span>
        CopySource<span class="token operator">=</span><span class="token string-interpolation"><span class="token string">f'</span><span class="token interpolation"><span class="token punctuation">{</span>bucket_name<span class="token punctuation">}</span></span><span class="token string">/</span><span class="token interpolation"><span class="token punctuation">{</span>old_name<span class="token punctuation">}</span></span><span class="token string">'</span></span>
    <span class="token punctuation">)</span>
    old_s3_object<span class="token punctuation">.</span>delete<span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'</span><span class="token interpolation"><span class="token punctuation">{</span>bucket_name<span class="token punctuation">}</span></span><span class="token string">/</span><span class="token interpolation"><span class="token punctuation">{</span>old_name<span class="token punctuation">}</span></span><span class="token string"> -&gt; </span><span class="token interpolation"><span class="token punctuation">{</span>bucket_name<span class="token punctuation">}</span></span><span class="token string">/</span><span class="token interpolation"><span class="token punctuation">{</span>new_name<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
rename_s3_object<span class="token punctuation">(</span>S3_BUCKET_NAME<span class="token punctuation">,</span> <span class="token string">'demo.txt'</span><span class="token punctuation">,</span> <span class="token string">'new_demo.txt'</span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an execution result:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-S3-in-Python-Renaming-S3-file-object-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="14. Working with S3 in Python - Renaming S3 file object using Boto3" class="wp-image-27007 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-S3-in-Python-Renaming-S3-file-object-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-S3-in-Python-Renaming-S3-file-object-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-S3-in-Python-Renaming-S3-file-object-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-S3-in-Python-Renaming-S3-file-object-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-S3-in-Python-Renaming-S3-file-object-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-S3-in-Python-Renaming-S3-file-object-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.6873462846922092" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-S3-in-Python-Renaming-S3-file-object-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-S3-in-Python-Renaming-S3-file-object-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-S3-in-Python-Renaming-S3-file-object-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-S3-in-Python-Renaming-S3-file-object-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/14.-Working-with-S3-in-Python-Renaming-S3-file-object-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="h-how-to-copy-file-objects-between-s3-buckets-using-boto3">How to copy file objects between S3 buckets using Boto3?</h3>
                To copy file objects between S3 buckets using Boto3, you can use the copy_from() method. We can adjust the previous example to support a new S3 Bucket as a destination:

                <br><br>
                <div class="code-title">Copying file objects between S3 buckets using Boto3</div>
                <pre title="Copying file objects between S3 buckets using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
OLD_S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
NEW_S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
<span class="token keyword">def</span> <span class="token function">copy_s3_object</span><span class="token punctuation">(</span>old_bucket_name<span class="token punctuation">,</span> new_bucket_name<span class="token punctuation">,</span> old_object_name<span class="token punctuation">,</span> new_object_name<span class="token punctuation">)</span><span class="token punctuation">:</span>
    old_s3_object <span class="token operator">=</span> s3_resource<span class="token punctuation">.</span>Object<span class="token punctuation">(</span>old_bucket_name<span class="token punctuation">,</span> old_object_name<span class="token punctuation">)</span>
    new_s3_object <span class="token operator">=</span> s3_resource<span class="token punctuation">.</span>Object<span class="token punctuation">(</span>new_bucket_name<span class="token punctuation">,</span> new_object_name<span class="token punctuation">)</span>
    new_s3_object<span class="token punctuation">.</span>copy_from<span class="token punctuation">(</span>
        CopySource<span class="token operator">=</span><span class="token string-interpolation"><span class="token string">f'</span><span class="token interpolation"><span class="token punctuation">{</span>old_bucket_name<span class="token punctuation">}</span></span><span class="token string">/</span><span class="token interpolation"><span class="token punctuation">{</span>old_object_name<span class="token punctuation">}</span></span><span class="token string">'</span></span>
    <span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Copy: </span><span class="token interpolation"><span class="token punctuation">{</span>old_bucket_name<span class="token punctuation">}</span></span><span class="token string">/</span><span class="token interpolation"><span class="token punctuation">{</span>old_object_name<span class="token punctuation">}</span></span><span class="token string"> -&gt; </span><span class="token interpolation"><span class="token punctuation">{</span>new_bucket_name<span class="token punctuation">}</span></span><span class="token string">/</span><span class="token interpolation"><span class="token punctuation">{</span>new_object_name<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
copy_s3_object<span class="token punctuation">(</span>OLD_S3_BUCKET_NAME<span class="token punctuation">,</span> NEW_S3_BUCKET_NAME<span class="token punctuation">,</span> <span class="token string">'demo.txt'</span><span class="token punctuation">,</span> <span class="token string">'new_demo.txt'</span><span class="token punctuation">)</span></blockquote></pre>
                Thecopy_s3_object() method will copy the S3 object within the same S3 Bucket or between S3 Buckets.
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-S3-in-Python-Copying-file-objects-between-S3-buckets-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="16. Working with S3 in Python - Copying file objects between S3 buckets using Boto3" class="wp-image-27026 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-S3-in-Python-Copying-file-objects-between-S3-buckets-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-S3-in-Python-Copying-file-objects-between-S3-buckets-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-S3-in-Python-Copying-file-objects-between-S3-buckets-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-S3-in-Python-Copying-file-objects-between-S3-buckets-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-S3-in-Python-Copying-file-objects-between-S3-buckets-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-S3-in-Python-Copying-file-objects-between-S3-buckets-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.290235641924407" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-S3-in-Python-Copying-file-objects-between-S3-buckets-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-S3-in-Python-Copying-file-objects-between-S3-buckets-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-S3-in-Python-Copying-file-objects-between-S3-buckets-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-S3-in-Python-Copying-file-objects-between-S3-buckets-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/16.-Working-with-S3-in-Python-Copying-file-objects-between-S3-buckets-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="h-how-to-create-s3-bucket-policy-using-boto3">How to create S3 Bucket Policy using Boto3?</h3>
                To specify requirements, conditions, or restrictions for accessing the Amazon S3 Bucket, you have to use Amazon S3 Bucket Policies. Here’s an example of theAmazon S3 Bucket Policy to enforce HTTPS (TLS) connections to the S3 bucket.

                Let’s use the Boto3 library to set up this policy to the S3 bucket:
                <br><br>
                <div class="code-title">Creating S3 Bucket Policy using Boto3</div>
                <pre title="Creating S3 Bucket Policy using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> json
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
BUCKET_POLICY <span class="token operator">=</span> <span class="token punctuation">{</span>
    <span class="token string">"Version"</span><span class="token punctuation">:</span> <span class="token string">"2012-10-17"</span><span class="token punctuation">,</span>
    <span class="token string">"Statement"</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">"Principal"</span><span class="token punctuation">:</span> <span class="token punctuation">{</span>
                <span class="token string">"AWS"</span><span class="token punctuation">:</span> <span class="token string">"*"</span>
            <span class="token punctuation">}</span><span class="token punctuation">,</span>
            <span class="token string">"Action"</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token string">"s3:*"</span>
            <span class="token punctuation">]</span><span class="token punctuation">,</span>
            <span class="token string">"Resource"</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token string-interpolation"><span class="token string">f"arn:aws:s3:::</span><span class="token interpolation"><span class="token punctuation">{</span>S3_BUCKET_NAME<span class="token punctuation">}</span></span><span class="token string">/*"</span></span><span class="token punctuation">,</span>
                <span class="token string-interpolation"><span class="token string">f"arn:aws:s3:::</span><span class="token interpolation"><span class="token punctuation">{</span>S3_BUCKET_NAME<span class="token punctuation">}</span></span><span class="token string">"</span></span>
            <span class="token punctuation">]</span><span class="token punctuation">,</span>
            <span class="token string">"Effect"</span><span class="token punctuation">:</span> <span class="token string">"Deny"</span><span class="token punctuation">,</span>
            <span class="token string">"Condition"</span><span class="token punctuation">:</span> <span class="token punctuation">{</span>
                <span class="token string">"Bool"</span><span class="token punctuation">:</span> <span class="token punctuation">{</span>
                    <span class="token string">"aws:SecureTransport"</span><span class="token punctuation">:</span> <span class="token string">"false"</span>
                <span class="token punctuation">}</span><span class="token punctuation">,</span>
                <span class="token string">"NumericLessThan"</span><span class="token punctuation">:</span> <span class="token punctuation">{</span>
                    <span class="token string">"s3:TlsVersion"</span><span class="token punctuation">:</span> <span class="token number">1.2</span>
                <span class="token punctuation">}</span>
            <span class="token punctuation">}</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">}</span>
policy_document <span class="token operator">=</span> json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>BUCKET_POLICY<span class="token punctuation">)</span>
s3_client<span class="token punctuation">.</span>put_bucket_policy<span class="token punctuation">(</span>Bucket<span class="token operator">=</span>S3_BUCKET_NAME<span class="token punctuation">,</span> Policy<span class="token operator">=</span>policy_document<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">'Bucket Policy has been set up'</span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an example output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-S3-in-Python-Creating-S3-Bucket-Policy-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="19. Working with S3 in Python - Creating S3 Bucket Policy using Boto3" class="wp-image-27049 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-S3-in-Python-Creating-S3-Bucket-Policy-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-S3-in-Python-Creating-S3-Bucket-Policy-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-S3-in-Python-Creating-S3-Bucket-Policy-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-S3-in-Python-Creating-S3-Bucket-Policy-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-S3-in-Python-Creating-S3-Bucket-Policy-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-S3-in-Python-Creating-S3-Bucket-Policy-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.9071425403626423" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-S3-in-Python-Creating-S3-Bucket-Policy-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-S3-in-Python-Creating-S3-Bucket-Policy-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-S3-in-Python-Creating-S3-Bucket-Policy-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-S3-in-Python-Creating-S3-Bucket-Policy-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/19.-Working-with-S3-in-Python-Creating-S3-Bucket-Policy-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="How-to-delete-S3-Bucket-Policy-using-Boto3">
                    <meta charset="utf-8">How to delete S3 Bucket Policy using Boto3?
                </h3>
                To delete the S3 Bucket Policy, you can use the
                <meta charset="utf-8"><code>delete_bucket_policy()</code> method of the S3 client:
                <br><br>
                <div class="code-title">Deleting S3 Bucket Policy using Boto3</div>
                <pre title="Deleting S3 Bucket Policy using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
s3_client<span class="token punctuation">.</span>delete_bucket_policy<span class="token punctuation">(</span>Bucket<span class="token operator">=</span>S3_BUCKET_NAME<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">'Bucket Policy has been deleted'</span><span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an execution output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-S3-in-Python-Deleting-S3-Bucket-Policy-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="20. Working with S3 in Python - Deleting S3 Bucket Policy using Boto3" class="wp-image-27051 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-S3-in-Python-Deleting-S3-Bucket-Policy-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-S3-in-Python-Deleting-S3-Bucket-Policy-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-S3-in-Python-Deleting-S3-Bucket-Policy-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-S3-in-Python-Deleting-S3-Bucket-Policy-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-S3-in-Python-Deleting-S3-Bucket-Policy-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-S3-in-Python-Deleting-S3-Bucket-Policy-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.23585473048835182" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-S3-in-Python-Deleting-S3-Bucket-Policy-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-S3-in-Python-Deleting-S3-Bucket-Policy-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-S3-in-Python-Deleting-S3-Bucket-Policy-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-S3-in-Python-Deleting-S3-Bucket-Policy-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/20.-Working-with-S3-in-Python-Deleting-S3-Bucket-Policy-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="How-to-generate-S3-presigned-URL">How to generate S3 presigned URL?</h3>

                If you need to share files from a non-public Amazon S3 Bucket without granting access to AWS APIs to the final user, you can create a pre-signed URL to the Bucket Object:

                <br><br>
                <div class="code-title">Generating S3 presigned URL</div>
                <pre title="Generating S3 presigned URL" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
<span class="token keyword">def</span> <span class="token function">gen_signed_url</span><span class="token punctuation">(</span>bucket_name<span class="token punctuation">,</span> object_name<span class="token punctuation">)</span><span class="token punctuation">:</span>
    url <span class="token operator">=</span> s3_client<span class="token punctuation">.</span>generate_presigned_url<span class="token punctuation">(</span>ClientMethod<span class="token operator">=</span><span class="token string">'get_object'</span><span class="token punctuation">,</span>
            Params<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'Bucket'</span><span class="token punctuation">:</span> bucket_name<span class="token punctuation">,</span> <span class="token string">'Key'</span><span class="token punctuation">:</span> object_name<span class="token punctuation">}</span><span class="token punctuation">,</span>
            ExpiresIn<span class="token operator">=</span><span class="token number">3600</span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>url<span class="token punctuation">)</span>
gen_signed_url<span class="token punctuation">(</span>S3_BUCKET_NAME<span class="token punctuation">,</span> <span class="token string">'demo.txt'</span><span class="token punctuation">)</span></blockquote></pre>
                The S3 client’s <code>
                    <meta charset="utf-8">generate_presigned_url()
                </code> method accepts the following parameters:
                <ul>
                    <li><code>ClientMethod</code>&nbsp;(<em>string</em>) — The Boto3 S3 client method to presign for</li>
                    <li><code>Params</code>&nbsp;(<em>dict</em>) — The parameters need to be passed to&nbsp;the <code>ClientMethod</code></li>
                    <li><code>ExpiresIn</code>&nbsp;(<em>int</em>) — The number of seconds the presigned URL is valid for. By default, presigned URL expires in an hour (3600 seconds)</li>
                    <li><code>HttpMethod</code>&nbsp;(<em>string</em>) — The HTTP method to use for the generated URL. By default, the HTTP method is whatever is used in the method’s model</li>
                </ul>
                <br>Here’s an example output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-S3-in-Python-Generating-S3-presigned-URL-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="21. Working with S3 in Python - Generating S3 presigned URL" class="wp-image-27053 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-S3-in-Python-Generating-S3-presigned-URL-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-S3-in-Python-Generating-S3-presigned-URL-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-S3-in-Python-Generating-S3-presigned-URL-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-S3-in-Python-Generating-S3-presigned-URL-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-S3-in-Python-Generating-S3-presigned-URL-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-S3-in-Python-Generating-S3-presigned-URL-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.5890268258544515" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-S3-in-Python-Generating-S3-presigned-URL-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-S3-in-Python-Generating-S3-presigned-URL-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-S3-in-Python-Generating-S3-presigned-URL-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-S3-in-Python-Generating-S3-presigned-URL-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/21.-Working-with-S3-in-Python-Generating-S3-presigned-URL-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="How-to-enable-S3-Bucket-versioning-using-Boto3">How to enable S3 Bucket versioning using Boto3?</h3>
                S3 Bucket versioning allows you to keep track of the S3 Bucket object’s versions over time. Also, it safeguards against accidental object
                deletion. Boto3 will retrieve the most recent version of a versioned object on request. When a new version of an object is added, the object
                takes up the size of storage of the versions added together; i.e., a 2MB file with 5 versions will take up 10MB of space in the storage.

                To enable versioning for the S3 Bucket, you need to use the <code>enable_version()</code> method:

                <br><br>
                <div class="code-title">Enabling S3 Bucket versioning using Boto3</div>
                <pre title="Enabling S3 Bucket versioning using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token comment">#!/usr/bin/env python3</span>
<span class="token keyword">import</span> boto3
AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>
S3_BUCKET_NAME <span class="token operator">=</span> <span class="token string">"nubeera-demo-bucket"</span>
s3_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"s3"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
<span class="token keyword">def</span> <span class="token function">enable_version</span><span class="token punctuation">(</span>bucket_name<span class="token punctuation">)</span><span class="token punctuation">:</span>
    versioning <span class="token operator">=</span> s3_resource<span class="token punctuation">.</span>BucketVersioning<span class="token punctuation">(</span>bucket_name<span class="token punctuation">)</span>
    versioning<span class="token punctuation">.</span>enable<span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'S3 Bucket versioning: </span><span class="token interpolation"><span class="token punctuation">{</span>versioning<span class="token punctuation">.</span>status<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
enable_version<span class="token punctuation">(</span>S3_BUCKET_NAME<span class="token punctuation">)</span></blockquote></pre>
                <br>Here’s an execution output:
                <img loading="lazy" width="1024" height="577" src="https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-S3-in-Python-Enabling-S3-Bucket-versioning-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" alt="22. Working with S3 in Python - Enabling S3 Bucket versioning using Boto3" class="wp-image-27060 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-S3-in-Python-Enabling-S3-Bucket-versioning-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-S3-in-Python-Enabling-S3-Bucket-versioning-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-S3-in-Python-Enabling-S3-Bucket-versioning-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-S3-in-Python-Enabling-S3-Bucket-versioning-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-S3-in-Python-Enabling-S3-Bucket-versioning-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-S3-in-Python-Enabling-S3-Bucket-versioning-using-Boto3-1024x577.png?ezimgfmt=rs:366x206/rscb1/ng:webp/ngcb1" ezoid="0.15511494512335977" srcset="https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-S3-in-Python-Enabling-S3-Bucket-versioning-using-Boto3-1024x577.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-S3-in-Python-Enabling-S3-Bucket-versioning-using-Boto3-300x169.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-S3-in-Python-Enabling-S3-Bucket-versioning-using-Boto3-768x432.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-S3-in-Python-Enabling-S3-Bucket-versioning-using-Boto3-1536x865.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/22.-Working-with-S3-in-Python-Enabling-S3-Bucket-versioning-using-Boto3-2048x1153.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="Summary">Summary</h3>
                In this article, we’ve covered examples of using Boto3 for managing Amazon S3 service, including the S3 Buckets, Objects, Bucket Policy, Versioning, and presigned URLs.

            </div>
        </div>
        <?php require "../../../../../templates/footer_outer.php" ?>

    </div>

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