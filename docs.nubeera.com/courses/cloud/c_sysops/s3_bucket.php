<!DOCTYPE html>
<html lang="en">

<head>
   <title>NubeEra </title>

   <!-- Meta -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="NubeEra Azure Functions">

   <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
      integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

   <link id="theme-style" rel="stylesheet" href="../../../assets/css/theme.css">
   <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
   <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
   <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
   <link rel="stylesheet" href="../../../boto_topics.css">
</head>

<body>

   <!-- Navigation Bar -->
   <?php require '../../../templates/navbar.php'; ?>

   <div id="modal-sidepanel">

      <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
         <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left'
               aria-hidden='true'></i></button>
         <div class="col-md-12 side-panel">
            <strong class="px-2" style="font-size: 1.125rem;">S3 Bucket</strong><br><br>
            <ul>
              <!---list side menu --->

            </ul>
         </div>
      </div>

   </div>
   <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target=""
         data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

   <div class="content-box" id="content-box">
      <div class="body-content">
         <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;"> aws s3 bucket</h1>

         <ol class="breadcrumb mx-5 mt-3 px-0">
            <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home"
                     aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item"><a href="../">Cloud</a></li>
            <li class="breadcrumb-item"><a href="../../">Cloud SysOps</a></li>
            <li class="breadcrumb-item"><a href="../../">Contents</a></li>
            <li class="breadcrumb-item active">S3</li>
         </ol>
         <div class="px-5 pb-5 pt-0 body-text">
            <!---body content--->
            <h3>In this page</h3>
            <ol>
               <li><a href="#example-usage">Example Usage</a></li>
               <li><a href="#argument-reference">Argument Reference</a></li>
               <li><a href="#attributes-reference">Attributes Reference</a></li>
               <li><a href="#import">Import</a></li>
            </ol>

            <div id="ember1813" class="ember-view">
               <h1 id="resource-aws_s3_bucket"></h1>
               Provides a S3 bucket resource.
               <div class="alert alert-info" role="alert">
                  <div class="alert-title"><i class="fa fa-info-circle"></i>Note</div>
                  This functionality is for managing S3 in an AWS Partition. To manage 
                     S3 on Outposts, see
                  the <code>aws_s3control_bucket</code>resource.
               </div>

               <h2 id="example-usage"><a name="example-usage" class="anchor" href="#example-usage">Example Usage</a>
               </h2>
               <h3 id="private-bucket-w-tags"><a name="private-bucket-w-tags" class="anchor"
                     href="#private-bucket-w-tags">Private Bucket w/ Tags</a></h3>
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_s3_bucket"</span></span> <span class="token string">"b"</span> <span class="token punctuation">{</span>
  <span class="token property">bucket</span> <span class="token punctuation">=</span> <span class="token string">"my-tf-test-bucket"</span>
  <span class="token property">acl</span>    <span class="token punctuation">=</span> <span class="token string">"private"</span>

  <span class="token property">tags</span> <span class="token punctuation">=</span> <span class="token punctuation">{</span>
    <span class="token property">Name</span>        <span class="token punctuation">=</span> <span class="token string">"My bucket"</span>
    <span class="token property">Environment</span> <span class="token punctuation">=</span> <span class="token string">"Dev"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
               <h3 id="static-website-hosting"><a name="static-website-hosting" class="anchor"
                     href="#static-website-hosting">Static Website Hosting</a></h3>
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_s3_bucket"</span></span> <span class="token string">"b"</span> <span class="token punctuation">{</span>
  <span class="token property">bucket</span> <span class="token punctuation">=</span> <span class="token string">"s3-website-test.hashicorp.com"</span>
  <span class="token property">acl</span>    <span class="token punctuation">=</span> <span class="token string">"public-read"</span>
  <span class="token property">policy</span> <span class="token punctuation">=</span> file(<span class="token string">"policy.json"</span>)

  <span class="token keyword">website</span> <span class="token punctuation">{</span>
    <span class="token property">index_document</span> <span class="token punctuation">=</span> <span class="token string">"index.html"</span>
    <span class="token property">error_document</span> <span class="token punctuation">=</span> <span class="token string">"error.html"</span>

    <span class="token property">routing_rules</span> <span class="token punctuation">=</span> <span class="token heredoc string">&lt;&lt;EOF
[{
    "Condition": {
        "KeyPrefixEquals": "docs/"
    },
    "Redirect": {
        "ReplaceKeyPrefixWith": "documents/"
    }
}]
EOF</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
               <h3 id="using-cors"><a name="using-cors" class="anchor" href="#using-cors">Using CORS</a></h3>
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_s3_bucket"</span></span> <span class="token string">"b"</span> <span class="token punctuation">{</span>
  <span class="token property">bucket</span> <span class="token punctuation">=</span> <span class="token string">"s3-website-test.hashicorp.com"</span>
  <span class="token property">acl</span>    <span class="token punctuation">=</span> <span class="token string">"public-read"</span>

  <span class="token keyword">cors_rule</span> <span class="token punctuation">{</span>
    <span class="token property">allowed_headers</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"*"</span><span class="token punctuation">]</span>
    <span class="token property">allowed_methods</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"PUT"</span>, <span class="token string">"POST"</span><span class="token punctuation">]</span>
    <span class="token property">allowed_origins</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"https://s3-website-test.hashicorp.com"</span><span class="token punctuation">]</span>
    <span class="token property">expose_headers</span>  <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"ETag"</span><span class="token punctuation">]</span>
    <span class="token property">max_age_seconds</span> <span class="token punctuation">=</span> <span class="token number">3000</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
               <h3 id="using-versioning"><a name="using-versioning" class="anchor" href="#using-versioning">Using
                     versioning</a></h3>
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_s3_bucket"</span></span> <span class="token string">"b"</span> <span class="token punctuation">{</span>
  <span class="token property">bucket</span> <span class="token punctuation">=</span> <span class="token string">"my-tf-test-bucket"</span>
  <span class="token property">acl</span>    <span class="token punctuation">=</span> <span class="token string">"private"</span>

  <span class="token keyword">versioning</span> <span class="token punctuation">{</span>
    <span class="token property">enabled</span> <span class="token punctuation">=</span> <span class="token boolean">true</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
               <h3 id="enable-logging"><a name="enable-logging" class="anchor" href="#enable-logging">Enable Logging</a>
               </h3>
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_s3_bucket"</span></span> <span class="token string">"log_bucket"</span> <span class="token punctuation">{</span>
  <span class="token property">bucket</span> <span class="token punctuation">=</span> <span class="token string">"my-tf-log-bucket"</span>
  <span class="token property">acl</span>    <span class="token punctuation">=</span> <span class="token string">"log-delivery-write"</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_s3_bucket"</span></span> <span class="token string">"b"</span> <span class="token punctuation">{</span>
  <span class="token property">bucket</span> <span class="token punctuation">=</span> <span class="token string">"my-tf-test-bucket"</span>
  <span class="token property">acl</span>    <span class="token punctuation">=</span> <span class="token string">"private"</span>

  <span class="token keyword">logging</span> <span class="token punctuation">{</span>
    <span class="token property">target_bucket</span> <span class="token punctuation">=</span> aws_s3_bucket.log_bucket.id
    <span class="token property">target_prefix</span> <span class="token punctuation">=</span> <span class="token string">"log/"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
               <h3 id="using-object-lifecycle"><a name="using-object-lifecycle" class="anchor"
                     href="#using-object-lifecycle">Using object lifecycle</a></h3>
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_s3_bucket"</span></span> <span class="token string">"bucket"</span> <span class="token punctuation">{</span>
  <span class="token property">bucket</span> <span class="token punctuation">=</span> <span class="token string">"my-bucket"</span>
  <span class="token property">acl</span>    <span class="token punctuation">=</span> <span class="token string">"private"</span>

  <span class="token keyword">lifecycle_rule</span> <span class="token punctuation">{</span>
    <span class="token property">id</span>      <span class="token punctuation">=</span> <span class="token string">"log"</span>
    <span class="token property">enabled</span> <span class="token punctuation">=</span> <span class="token boolean">true</span>

    <span class="token property">prefix</span> <span class="token punctuation">=</span> <span class="token string">"log/"</span>

    <span class="token property">tags</span> <span class="token punctuation">=</span> <span class="token punctuation">{</span>
      <span class="token property">rule</span>      <span class="token punctuation">=</span> <span class="token string">"log"</span>
      <span class="token property">autoclean</span> <span class="token punctuation">=</span> <span class="token string">"true"</span>
    <span class="token punctuation">}</span>

    <span class="token keyword">transition</span> <span class="token punctuation">{</span>
      <span class="token property">days</span>          <span class="token punctuation">=</span> <span class="token number">30</span>
      <span class="token property">storage_class</span> <span class="token punctuation">=</span> <span class="token string">"STANDARD_IA"</span> <span class="token comment"># or "ONEZONE_IA"</span>
    <span class="token punctuation">}</span>

    <span class="token keyword">transition</span> <span class="token punctuation">{</span>
      <span class="token property">days</span>          <span class="token punctuation">=</span> <span class="token number">60</span>
      <span class="token property">storage_class</span> <span class="token punctuation">=</span> <span class="token string">"GLACIER"</span>
    <span class="token punctuation">}</span>

    <span class="token keyword">expiration</span> <span class="token punctuation">{</span>
      <span class="token property">days</span> <span class="token punctuation">=</span> <span class="token number">90</span>
    <span class="token punctuation">}</span>
  <span class="token punctuation">}</span>

  <span class="token keyword">lifecycle_rule</span> <span class="token punctuation">{</span>
    <span class="token property">id</span>      <span class="token punctuation">=</span> <span class="token string">"tmp"</span>
    <span class="token property">prefix</span>  <span class="token punctuation">=</span> <span class="token string">"tmp/"</span>
    <span class="token property">enabled</span> <span class="token punctuation">=</span> <span class="token boolean">true</span>

    <span class="token keyword">expiration</span> <span class="token punctuation">{</span>
      <span class="token property">date</span> <span class="token punctuation">=</span> <span class="token string">"2016-01-12"</span>
    <span class="token punctuation">}</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_s3_bucket"</span></span> <span class="token string">"versioning_bucket"</span> <span class="token punctuation">{</span>
  <span class="token property">bucket</span> <span class="token punctuation">=</span> <span class="token string">"my-versioning-bucket"</span>
  <span class="token property">acl</span>    <span class="token punctuation">=</span> <span class="token string">"private"</span>

  <span class="token keyword">versioning</span> <span class="token punctuation">{</span>
    <span class="token property">enabled</span> <span class="token punctuation">=</span> <span class="token boolean">true</span>
  <span class="token punctuation">}</span>

  <span class="token keyword">lifecycle_rule</span> <span class="token punctuation">{</span>
    <span class="token property">prefix</span>  <span class="token punctuation">=</span> <span class="token string">"config/"</span>
    <span class="token property">enabled</span> <span class="token punctuation">=</span> <span class="token boolean">true</span>

    <span class="token keyword">noncurrent_version_transition</span> <span class="token punctuation">{</span>
      <span class="token property">days</span>          <span class="token punctuation">=</span> <span class="token number">30</span>
      <span class="token property">storage_class</span> <span class="token punctuation">=</span> <span class="token string">"STANDARD_IA"</span>
    <span class="token punctuation">}</span>

    <span class="token keyword">noncurrent_version_transition</span> <span class="token punctuation">{</span>
      <span class="token property">days</span>          <span class="token punctuation">=</span> <span class="token number">60</span>
      <span class="token property">storage_class</span> <span class="token punctuation">=</span> <span class="token string">"GLACIER"</span>
    <span class="token punctuation">}</span>

    <span class="token keyword">noncurrent_version_expiration</span> <span class="token punctuation">{</span>
      <span class="token property">days</span> <span class="token punctuation">=</span> <span class="token number">90</span>
    <span class="token punctuation">}</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
               <h3 id="using-replication-configuration"><a name="using-replication-configuration" class="anchor"
                     href="#using-replication-configuration">Using replication configuration</a></h3>
               <div class="alert alert-warning" role="alert">
                  <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE:</div>
                  See the <code>aws_s3_bucket_replication_configuration</code>
                     resource to support bi-directional replication configuration and additional features.
               </div>

               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">provider<span class="token type variable"> "aws" </span></span><span class="token punctuation">{</span>
  <span class="token property">region</span> <span class="token punctuation">=</span> <span class="token string">"eu-west-1"</span>
<span class="token punctuation">}</span>

<span class="token keyword">provider<span class="token type variable"> "aws" </span></span><span class="token punctuation">{</span>
  <span class="token property">alias</span>  <span class="token punctuation">=</span> <span class="token string">"central"</span>
  <span class="token property">region</span> <span class="token punctuation">=</span> <span class="token string">"eu-central-1"</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_iam_role"</span></span> <span class="token string">"replication"</span> <span class="token punctuation">{</span>
  <span class="token property">name</span> <span class="token punctuation">=</span> <span class="token string">"tf-iam-role-replication-12345"</span>

  <span class="token property">assume_role_policy</span> <span class="token punctuation">=</span> <span class="token heredoc string">&lt;&lt;POLICY
{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Action": "sts:AssumeRole",
      "Principal": {
        "Service": "s3.amazonaws.com"
      },
      "Effect": "Allow",
      "Sid": ""
    }
  ]
}
POLICY</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_iam_policy"</span></span> <span class="token string">"replication"</span> <span class="token punctuation">{</span>
  <span class="token property">name</span> <span class="token punctuation">=</span> <span class="token string">"tf-iam-role-policy-replication-12345"</span>

  <span class="token property">policy</span> <span class="token punctuation">=</span> <span class="token heredoc string">&lt;&lt;POLICY
{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Action": [
        "s3:GetReplicationConfiguration",
        "s3:ListBucket"
      ],
      "Effect": "Allow",
      "Resource": [
        "${aws_s3_bucket.source.arn}"
      ]
    },
    {
      "Action": [
        "s3:GetObjectVersionForReplication",
        "s3:GetObjectVersionAcl",
         "s3:GetObjectVersionTagging"
      ],
      "Effect": "Allow",
      "Resource": [
        "${aws_s3_bucket.source.arn}/*"
      ]
    },
    {
      "Action": [
        "s3:ReplicateObject",
        "s3:ReplicateDelete",
        "s3:ReplicateTags"
      ],
      "Effect": "Allow",
      "Resource": "${aws_s3_bucket.destination.arn}/*"
    }
  ]
}
POLICY</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_iam_role_policy_attachment"</span></span> <span class="token string">"replication"</span> <span class="token punctuation">{</span>
  <span class="token property">role</span>       <span class="token punctuation">=</span> aws_iam_role.replication.name
  <span class="token property">policy_arn</span> <span class="token punctuation">=</span> aws_iam_policy.replication.arn
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_s3_bucket"</span></span> <span class="token string">"destination"</span> <span class="token punctuation">{</span>
  <span class="token property">bucket</span> <span class="token punctuation">=</span> <span class="token string">"tf-test-bucket-destination-12345"</span>

  <span class="token keyword">versioning</span> <span class="token punctuation">{</span>
    <span class="token property">enabled</span> <span class="token punctuation">=</span> <span class="token boolean">true</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_s3_bucket"</span></span> <span class="token string">"source"</span> <span class="token punctuation">{</span>
  <span class="token property">provider</span> <span class="token punctuation">=</span> aws.central
  <span class="token property">bucket</span>   <span class="token punctuation">=</span> <span class="token string">"tf-test-bucket-source-12345"</span>
  <span class="token property">acl</span>      <span class="token punctuation">=</span> <span class="token string">"private"</span>

  <span class="token keyword">versioning</span> <span class="token punctuation">{</span>
    <span class="token property">enabled</span> <span class="token punctuation">=</span> <span class="token boolean">true</span>
  <span class="token punctuation">}</span>

  <span class="token keyword">replication_configuration</span> <span class="token punctuation">{</span>
    <span class="token property">role</span> <span class="token punctuation">=</span> aws_iam_role.replication.arn

    <span class="token keyword">rules</span> <span class="token punctuation">{</span>
      <span class="token property">id</span>     <span class="token punctuation">=</span> <span class="token string">"foobar"</span>
      <span class="token property">status</span> <span class="token punctuation">=</span> <span class="token string">"Enabled"</span>

      <span class="token keyword">filter</span> <span class="token punctuation">{</span>
        <span class="token property">tags</span> <span class="token punctuation">=</span> <span class="token punctuation">{</span><span class="token punctuation">}</span>
      <span class="token punctuation">}</span>
      <span class="token keyword">destination</span> <span class="token punctuation">{</span>
        <span class="token property">bucket</span>        <span class="token punctuation">=</span> aws_s3_bucket.destination.arn
        <span class="token property">storage_class</span> <span class="token punctuation">=</span> <span class="token string">"STANDARD"</span>

        <span class="token keyword">replication_time</span> <span class="token punctuation">{</span>
          <span class="token property">status</span>  <span class="token punctuation">=</span> <span class="token string">"Enabled"</span>
          <span class="token property">minutes</span> <span class="token punctuation">=</span> <span class="token number">15</span>
        <span class="token punctuation">}</span>

        <span class="token keyword">metrics</span> <span class="token punctuation">{</span>
          <span class="token property">status</span>  <span class="token punctuation">=</span> <span class="token string">"Enabled"</span>
          <span class="token property">minutes</span> <span class="token punctuation">=</span> <span class="token number">15</span>
        <span class="token punctuation">}</span>
      <span class="token punctuation">}</span>
    <span class="token punctuation">}</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
               <h3 id="enable-default-server-side-encryption"><a name="enable-default-server-side-encryption"
                     class="anchor" href="#enable-default-server-side-encryption">Enable Default Server Side
                     Encryption</a></h3>
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_kms_key"</span></span> <span class="token string">"mykey"</span> <span class="token punctuation">{</span>
  <span class="token property">description</span>             <span class="token punctuation">=</span> <span class="token string">"This key is used to encrypt bucket objects"</span>
  <span class="token property">deletion_window_in_days</span> <span class="token punctuation">=</span> <span class="token number">10</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_s3_bucket"</span></span> <span class="token string">"mybucket"</span> <span class="token punctuation">{</span>
  <span class="token property">bucket</span> <span class="token punctuation">=</span> <span class="token string">"mybucket"</span>

  <span class="token keyword">server_side_encryption_configuration</span> <span class="token punctuation">{</span>
    <span class="token keyword">rule</span> <span class="token punctuation">{</span>
      <span class="token keyword">apply_server_side_encryption_by_default</span> <span class="token punctuation">{</span>
        <span class="token property">kms_master_key_id</span> <span class="token punctuation">=</span> aws_kms_key.mykey.arn
        <span class="token property">sse_algorithm</span>     <span class="token punctuation">=</span> <span class="token string">"aws:kms"</span>
      <span class="token punctuation">}</span>
    <span class="token punctuation">}</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
               <h3 id="using-acl-policy-grants"><a name="using-acl-policy-grants" class="anchor"
                     href="#using-acl-policy-grants">Using ACL policy grants</a></h3>
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">data <span class="token type variable">"aws_canonical_user_id"</span></span> <span class="token string">"current_user"</span> <span class="token punctuation">{</span><span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_s3_bucket"</span></span> <span class="token string">"bucket"</span> <span class="token punctuation">{</span>
  <span class="token property">bucket</span> <span class="token punctuation">=</span> <span class="token string">"mybucket"</span>

  <span class="token keyword">grant</span> <span class="token punctuation">{</span>
    <span class="token property">id</span>          <span class="token punctuation">=</span> data.aws_canonical_user_id.current_user.id
    <span class="token property">type</span>        <span class="token punctuation">=</span> <span class="token string">"CanonicalUser"</span>
    <span class="token property">permissions</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"FULL_CONTROL"</span><span class="token punctuation">]</span>
  <span class="token punctuation">}</span>

  <span class="token keyword">grant</span> <span class="token punctuation">{</span>
    <span class="token property">type</span>        <span class="token punctuation">=</span> <span class="token string">"Group"</span>
    <span class="token property">permissions</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"READ_ACP"</span>, <span class="token string">"WRITE"</span><span class="token punctuation">]</span>
    <span class="token property">uri</span>         <span class="token punctuation">=</span> <span class="token string">
       
    </span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
               <h2 id="argument-reference"><a name="argument-reference" class="anchor"
                     href="#argument-reference">Argument Reference</a></h2>
               The following arguments are supported:
               <ul>
                  <li>
                     <a name="bucket" href="#bucket"><code>bucket</code></a> - (Optional, Forces new resource) The
                     name of the bucket. If omitted, Terraform will assign a random, unique name. Must be lowercase
                     and less than or equal to 63 characters in length. A full list of bucket naming rules 
                  </li>
                  <li>
                     <a name="bucket_prefix" href="#bucket_prefix"><code>bucket_prefix</code></a> - (Optional, Forces
                     new resource) Creates a unique bucket name beginning with the specified prefix. Conflicts with
                     <code>bucket</code>. Must be lowercase and less than or equal to 37 characters in length. A full
                     list of bucket naming rules 
                  </li>
                  <li>
                     <a name="acl" href="#acl"><code>acl</code></a> - (Optional) The canned
                        ACL to apply. Valid values are <code>private</code>, <code>public-read</code>,
                     <code>public-read-write</code>, <code>aws-exec-read</code>, <code>authenticated-read</code>, and
                     <code>log-delivery-write</code>. Defaults to <code>private</code>. Conflicts with
                     <code>grant</code>.
                  </li>
                  <li>
                     <a name="grant" href="#grant"><code>grant</code></a> - (Optional) An ACL
                        policy grant (documented below). Conflicts with <code>acl</code>.
                  </li>
                  <li>
                     <a name="policy" href="#policy"><code>policy</code></a> - (Optional) A valid bucket
                        policy JSON document. Note that if the policy document is not specific enough (but still
                     valid), Terraform may view the policy as constantly changing in a <code>terraform plan</code>.
                     In this case, please make sure you use the verbose/specific version of the policy. For more
                     information about building AWS IAM policy documents with Terraform, see the 
                  </li>
                  <li>
                     <a name="tags" href="#tags"><code>tags</code></a> - (Optional) A map of tags to assign to the
                     bucket. If configured with a provider ><code>default_tags</code> configuration
                        block</a> present, tags with matching keys will overwrite those defined at the
                     provider-level.
                  </li>
                  <li>
                     <a name="force_destroy" href="#force_destroy"><code>force_destroy</code></a> - (Optional,
                     Default:<code>false</code>) A boolean that indicates all objects should be deleted from the bucket so that the bucket can be destroyed without
                     error. These objects are <em>not</em> recoverable.
                  </li>
                  <li>
                     <a name="website" href="#website"><code>website</code></a> - (Optional) A website object
                     (documented below).
                  </li>
                  <li>
                     <a name="cors_rule" href="#cors_rule"><code>cors_rule</code></a> - (Optional) A rule of Cross-Origin
                        Resource Sharing</a> (documented below).
                  </li>
                  <li>
                     <a name="versioning" href="#versioning"><code>versioning</code></a> - (Optional) A state of 
                     (documented below)
                  </li>
                  <li>
                     <a name="logging" href="#logging"><code>logging</code></a> - (Optional) A settings of (documented below).
                  </li>
                  <li>
                     <a name="lifecycle_rule" href="#lifecycle_rule"><code>lifecycle_rule</code></a> - (Optional) A
                     configuration of object
                        lifecycle management (documented below).
                  </li>
                  <li>
                     <a name="acceleration_status" href="#acceleration_status"><code>acceleration_status</code></a> -
                     (Optional) Sets the accelerate configuration of an existing bucket. Can be <code>Enabled</code>
                     or <code>Suspended</code>.
                  </li>
                  <li>
                     <a name="request_payer" href="#request_payer"><code>request_payer</code></a> - (Optional)
                     Specifies who should bear the cost of Amazon S3 data transfer.
                     Can be either <code>BucketOwner</code> or <code>Requester</code>. By default, the owner of the
                     S3 bucket would incur
                     the costs of any data transfer. See Requester
                        Pays Buckets
                     developer guide for more information.
                  </li>
                  <li>
                     <a name="replication_configuration"
                        href="#replication_configuration"><code>replication_configuration</code></a> - (Optional) A
                     configuration of replication configuration
                     (documented below).
                  </li>
                  <li>
                     <a name="server_side_encryption_configuration"
                        href="#server_side_encryption_configuration"><code>server_side_encryption_configuration</code></a>
                     - (Optional) A configuration of server-side
                        encryption configuration (documented below)
                  </li>
                  <li>
                     <a name="object_lock_configuration"
                        href="#object_lock_configuration"><code>object_lock_configuration</code></a> - (Optional) A
                     configuration of S3 object locking
                     (documented below)
                  </li>
               </ul>
               <div class="alert alert-warning" role="alert">
                  <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE:</div>
                  You cannot use <code>acceleration_status</code> in <code>cn-north-1</code> or
                  <code>us-gov-west-1</code>
               </div>

               The <code>website</code> object supports the following:
               <ul>
                  <li><a name="index_document" href="#index_document"><code>index_document</code></a> - (Required,
                     unless using <code>redirect_all_requests_to</code>) Amazon S3 returns this index document when
                     requests are made to the root domain or any of the subfolders.</li>
                  <li><a name="error_document" href="#error_document"><code>error_document</code></a> - (Optional) An
                     absolute path to the document to return in case of a 4XX error.</li>
                  <li><a name="redirect_all_requests_to"
                        href="#redirect_all_requests_to"><code>redirect_all_requests_to</code></a> - (Optional) A
                     hostname to redirect all website requests for this bucket to. Hostname can optionally be prefixed
                     with a protocol (<code>http://</code> or <code>https://</code>) to use when redirecting requests.
                     The default is the protocol that is used in the original request.</li>
                  <li><a name="routing_rules" href="#routing_rules"><code>routing_rules</code></a> - (Optional) A json
                     array containing routing
                        rules
                     describing redirect behavior and when redirects are applied.</li>
               </ul>
               The <code>CORS</code> object supports the following:
               <ul>
                  <li><a name="allowed_headers" href="#allowed_headers"><code>allowed_headers</code></a> (Optional)
                     Specifies which headers are allowed.</li>
                  <li><a name="allowed_methods" href="#allowed_methods"><code>allowed_methods</code></a> (Required)
                     Specifies which methods are allowed. Can be <code>GET</code>, <code>PUT</code>, <code>POST</code>,
                     <code>DELETE</code> or <code>HEAD</code>.</li>
                  <li><a name="allowed_origins" href="#allowed_origins"><code>allowed_origins</code></a> (Required)
                     Specifies which origins are allowed.</li>
                  <li><a name="expose_headers" href="#expose_headers"><code>expose_headers</code></a> (Optional)
                     Specifies expose header in the response.</li>
                  <li><a name="max_age_seconds" href="#max_age_seconds"><code>max_age_seconds</code></a> (Optional)
                     Specifies time in seconds that browser can cache the response for a preflight request.</li>
               </ul>
               The <code>versioning</code> object supports the following:
               <ul>
                  <li><a name="enabled" href="#enabled"><code>enabled</code></a> - (Optional) Enable versioning. Once
                     you version-enable a bucket, it can never return to an unversioned state. You can, however, suspend
                     versioning on that bucket.</li>
                  <li><a name="mfa_delete" href="#mfa_delete"><code>mfa_delete</code></a> - (Optional) Enable MFA delete
                     for either <code>Change the versioning state of your bucket</code> or
                     <code>Permanently delete an object version</code>. Default is <code>false</code>. This cannot be
                     used to toggle this setting but is available to allow managed buckets to reflect the state in AWS
                  </li>
               </ul>
               The <code>logging</code> object supports the following:
               <ul>
                  <li><a name="target_bucket" href="#target_bucket"><code>target_bucket</code></a> - (Required) The name
                     of the bucket that will receive the log objects.</li>
                  <li><a name="target_prefix" href="#target_prefix"><code>target_prefix</code></a> - (Optional) To
                     specify a key prefix for log objects.</li>
               </ul>
               The <code>lifecycle_rule</code> object supports the following:
               <ul>
                  <li><a name="id" href="#id"><code>id</code></a> - (Optional) Unique identifier for the rule. Must be
                     less than or equal to 255 characters in length.</li>
                  <li><a name="prefix" href="#prefix"><code>prefix</code></a> - (Optional) Object key prefix identifying
                     one or more objects to which the rule applies.</li>
                  <li><a name="tags" href="#tags"><code>tags</code></a> - (Optional) Specifies object tags key and
                     value.</li>
                  <li><a name="enabled" href="#enabled"><code>enabled</code></a> - (Required) Specifies lifecycle rule
                     status.</li>
                  <li><a name="abort_incomplete_multipart_upload_days"
                        href="#abort_incomplete_multipart_upload_days"><code>abort_incomplete_multipart_upload_days</code></a>
                     (Optional) Specifies the number of days after initiating a multipart upload when the multipart
                     upload must be completed.</li>
                  <li><a name="expiration" href="#expiration"><code>expiration</code></a> - (Optional) Specifies a
                     period in the object's expire (documented below).</li>
                  <li><a name="transition" href="#transition"><code>transition</code></a> - (Optional) Specifies a
                     period in the object's transitions (documented below).</li>
                  <li><a name="noncurrent_version_expiration"
                        href="#noncurrent_version_expiration"><code>noncurrent_version_expiration</code></a> -
                     (Optional) Specifies when noncurrent object versions expire (documented below).</li>
                  <li><a name="noncurrent_version_transition"
                        href="#noncurrent_version_transition"><code>noncurrent_version_transition</code></a> -
                     (Optional) Specifies when noncurrent object versions transitions (documented below).</li>
               </ul>
               At least one of <code>abort_incomplete_multipart_upload_days</code>, <code>expiration</code>,
               <code>transition</code>, <code>noncurrent_version_expiration</code>,
               <code>noncurrent_version_transition</code> must be specified.
               The <code>expiration</code> object supports the following
               <ul>
                  <li><a name="date" href="#date"><code>date</code></a> (Optional) Specifies the date after which you
                     want the corresponding action to take effect.</li>
                  <li><a name="days" href="#days"><code>days</code></a> (Optional) Specifies the number of days after
                     object creation when the specific rule action takes effect.</li>
                  <li><a name="expired_object_delete_marker"
                        href="#expired_object_delete_marker"><code>expired_object_delete_marker</code></a> (Optional) On
                     a versioned bucket (versioning-enabled or versioning-suspended bucket), you can add this element in
                     the lifecycle configuration to direct Amazon S3 to delete expired object delete markers. This
                     cannot be specified with Days or Date in a Lifecycle Expiration Policy.</li>
               </ul>
               The <code>transition</code> object supports the following
               <ul>
                  <li><a name="date" href="#date"><code>date</code></a> (Optional) Specifies the date after which you
                     want the corresponding action to take effect.</li>
                  <li><a name="days" href="#days"><code>days</code></a> (Optional) Specifies the number of days after
                     object creation when the specific rule action takes effect.</li>
                  <li><a name="storage_class" href="#storage_class"><code>storage_class</code></a> (Required) Specifies
                     the Amazon S3 storage
                        class to which you want the object to transition.</li>
               </ul>
               The <code>noncurrent_version_expiration</code> object supports the following
               <ul>
                  <li><a name="days" href="#days"><code>days</code></a> (Required) Specifies the number of days
                     noncurrent object versions expire.</li>
               </ul>
               The <code>noncurrent_version_transition</code> object supports the following
               <ul>
                  <li><a name="days" href="#days"><code>days</code></a> (Required) Specifies the number of days
                     noncurrent object versions transition.</li>
                  <li><a name="storage_class" href="#storage_class"><code>storage_class</code></a> (Required) Specifies
                     the Amazon S3 storage
                        class to which you want the object to transition.</li>
               </ul>
               The <code>replication_configuration</code> object supports the following:
               <div class="alert alert-warning" role="alert">
                  <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE:</div>
                  See the<code>aws_s3_bucket_replication_configuration</code>
                     resource documentation to avoid conflicts. Replication configuration can only be defined in
                  one resource not both. When using the independent replication configuration resource the following
                  lifecycle rule is needed on the <code>aws_s3_bucket</code> resource.
               </div>

               <pre class="line-numbers"><blockquote>lifecycle {
  ignore_changes = [
    replication_configuration
  ]
}</blockquote></pre>
               <ul>
                  <li><a name="role" href="#role"><code>role</code></a> - (Required) The ARN of the IAM role for Amazon
                     S3 to assume when replicating the objects.</li>
                  <li><a name="rules" href="#rules"><code>rules</code></a> - (Required) Specifies the rules managing the
                     replication (documented below).</li>
               </ul>
               The <code>rules</code> object supports the following:
               <div class="alert alert-warning" role="alert">
                  <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE:</div>
                  Amazon S3's latest version of the replication configuration is V2, which includes the
                  <code>filter</code> attribute for replication rules.
                  With the <code>filter</code> attribute, you can specify object filters based on the object key
                  prefix, tags, or both to scope the objects that the rule applies to.
                  Replication configuration V1 supports filtering based on only the <code>prefix</code> attribute.
                  For backwards compatibility, Amazon S3 continues to support the V1 configuration.
               </div>

               <ul>
                  <li><a name="delete_marker_replication_status"
                        href="#delete_marker_replication_status"><code>delete_marker_replication_status</code></a> -
                     (Optional) Whether delete markers are replicated. The only valid value is <code>Enabled</code>. To
                     disable, omit this argument. This argument is only valid with V2 replication configurations (i.e.,
                     when <code>filter</code> is used).</li>
                  <li><a name="destination" href="#destination"><code>destination</code></a> - (Required) Specifies the
                     destination for the rule (documented below).</li>
                  <li><a name="filter" href="#filter"><code>filter</code></a> - (Optional, Conflicts with
                     <code>prefix</code>) Filter that identifies subset of objects to which the replication rule applies
                     (documented below).</li>
                  <li><a name="id" href="#id"><code>id</code></a> - (Optional) Unique identifier for the rule. Must be
                     less than or equal to 255 characters in length.</li>
                  <li><a name="prefix" href="#prefix"><code>prefix</code></a> - (Optional, Conflicts with
                     <code>filter</code>) Object keyname prefix identifying one or more objects to which the rule
                     applies. Must be less than or equal to 1024 characters in length.</li>
                  <li><a name="priority" href="#priority"><code>priority</code></a> - (Optional) The priority associated
                     with the rule. Priority should only be set if <code>filter</code> is configured. If not provided,
                     defaults to <code>0</code>. Priority must be unique between multiple rules.</li>
                  <li><a name="source_selection_criteria"
                        href="#source_selection_criteria"><code>source_selection_criteria</code></a> - (Optional)
                     Specifies special object selection criteria (documented below).</li>
                  <li><a name="status" href="#status"><code>status</code></a> - (Required) The status of the rule.
                     Either <code>Enabled</code> or <code>Disabled</code>. The rule is ignored if status is not Enabled.
                  </li>
               </ul>
               <div class="alert alert-warning" role="alert">
                  <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE:</div>
                  Replication to multiple destination buckets requires that <code>priority</code> is specified in
                  the <code>rules</code> object. If the corresponding rule requires no filter, an empty configuration
                  block <code>filter {}</code> must be specified.
               </div>

               The <code>destination</code> object supports the following:
               <ul>
                  <li><a name="bucket" href="#bucket"><code>bucket</code></a> - (Required) The ARN of the S3 bucket
                     where you want Amazon S3 to store replicas of the object identified by the rule.</li>
                  <li>storage
                        class used to store the object. By default, Amazon S3 uses the storage class of the source
                     object to create the object replica.</li>
                  <li><a name="replica_kms_key_id" href="#replica_kms_key_id"><code>replica_kms_key_id</code></a> -
                     (Optional) Destination KMS encryption key ARN for SSE-KMS replication. Must be used in conjunction
                     with
                     <code>sse_kms_encrypted_objects</code> source selection criteria.</li>
                  <li><a name="access_control_translation"
                        href="#access_control_translation"><code>access_control_translation</code></a> - (Optional)
                     Specifies the overrides to use for object owners on replication. Must be used in conjunction with
                     <code>account_id</code> owner override configuration.</li>
                  <li><a name="account_id" href="#account_id"><code>account_id</code></a> - (Optional) The Account ID to
                     use for overriding the object owner on replication. Must be used in conjunction with
                     <code>access_control_translation</code> override configuration.</li>
                  <li><a name="replication_time" href="#replication_time"><code>replication_time</code></a> - (Optional)
                     Enables S3 Replication Time Control (S3 RTC) (documented below).</li>
                  <li><a name="metrics" href="#metrics"><code>metrics</code></a> - (Optional) Enables replication
                     metrics (required for S3 RTC) (documented below).</li>
               </ul>
               The <code>replication_time</code> object supports the following:
               <ul>
                  <li><a name="status" href="#status"><code>status</code></a> - (Optional) The status of RTC. Either
                     <code>Enabled</code> or <code>Disabled</code>.</li>
                  <li><a name="minutes" href="#minutes"><code>minutes</code></a> - (Optional) Threshold within which
                     objects are to be replicated. The only valid value is <code>15</code>.</li>
               </ul>
               The <code>metrics</code> object supports the following:
               <ul>
                  <li><a name="status" href="#status"><code>status</code></a> - (Optional) The status of replication
                     metrics. Either <code>Enabled</code> or <code>Disabled</code>.</li>
                  <li><a name="minutes" href="#minutes"><code>minutes</code></a> - (Optional) Threshold within which
                     objects are to be replicated. The only valid value is <code>15</code>.</li>
               </ul>
               The <code>source_selection_criteria</code> object supports the following:
               <ul>
                  <li><a name="sse_kms_encrypted_objects"
                        href="#sse_kms_encrypted_objects"><code>sse_kms_encrypted_objects</code></a> - (Optional) Match
                     SSE-KMS encrypted objects (documented below). If specified, <code>replica_kms_key_id</code>
                     in <code>destination</code> must be specified as well.</li>
               </ul>
               The <code>sse_kms_encrypted_objects</code> object supports the following:
               <ul>
                  <li><a name="enabled" href="#enabled"><code>enabled</code></a> - (Required) Boolean which indicates if
                     this criteria is enabled.</li>
               </ul>
               The <code>filter</code> object supports the following:
               <ul>
                  <li><a name="prefix" href="#prefix"><code>prefix</code></a> - (Optional) Object keyname prefix that
                     identifies subset of objects to which the rule applies. Must be less than or equal to 1024
                     characters in length.</li>
                  <li><a name="tags" href="#tags"><code>tags</code></a> - (Optional) A map of tags that identifies
                     subset of objects to which the rule applies.
                     The rule applies only to objects having all the tags in its tagset.</li>
               </ul>
               The <code>server_side_encryption_configuration</code> object supports the following:
               <ul>
                  <li><a name="rule" href="#rule"><code>rule</code></a> - (required) A single object for server-side
                     encryption by default configuration. (documented below)</li>
               </ul>
               The <code>rule</code> object supports the following:
               <ul>
                  <li><a name="apply_server_side_encryption_by_default"
                        href="#apply_server_side_encryption_by_default"><code>apply_server_side_encryption_by_default</code></a>
                     - (required) A single object for setting server-side encryption by default. (documented below)</li>
                  <li><a name="bucket_key_enabled" href="#bucket_key_enabled"><code>bucket_key_enabled</code></a> -
                     (Optional) Whether or not to use Amazon S3 Bucket Keys
                     for SSE-KMS.</li>
               </ul>
               The <code>apply_server_side_encryption_by_default</code> object supports the following:
               <ul>
                  <li><a name="sse_algorithm" href="#sse_algorithm"><code>sse_algorithm</code></a> - (required) The
                     server-side encryption algorithm to use. Valid values are <code>AES256</code> and
                     <code>aws:kms</code></li>
                  <li><a name="kms_master_key_id" href="#kms_master_key_id"><code>kms_master_key_id</code></a> -
                     (optional) The AWS KMS master key ID used for the SSE-KMS encryption. This can only be used when
                     you set the value of <code>sse_algorithm</code> as <code>aws:kms</code>. The default
                     <code>aws/s3</code> AWS KMS master key is used if this element is absent while the
                     <code>sse_algorithm</code> is <code>aws:kms</code>.</li>
               </ul>
               The <code>grant</code> object supports the following:
               <ul>
                  <li><a name="id" href="#id"><code>id</code></a> - (optional) Canonical user id to grant for. Used only
                     when <code>type</code> is <code>CanonicalUser</code>.</li>
                  <li><a name="type" href="#type"><code>type</code></a> - (required) - Type of grantee to apply for.
                     Valid values are <code>CanonicalUser</code> and <code>Group</code>.
                     <code>AmazonCustomerByEmail</code> is not supported.</li>
                  <li><a name="permissions" href="#permissions"><code>permissions</code></a> - (required) List of
                     permissions to apply for grantee. Valid values are <code>READ</code>, <code>WRITE</code>,
                     <code>READ_ACP</code>, <code>WRITE_ACP</code>, <code>FULL_CONTROL</code>.</li>
                  <li><a name="uri" href="#uri"><code>uri</code></a> - (optional) Uri address to grant for. Used only
                     when <code>type</code> is <code>Group</code>.</li>
               </ul>
               The <code>access_control_translation</code> object supports the following:
               <ul>
                  <li><a name="owner" href="#owner"><code>owner</code></a> - (Required) The override value for the owner
                     on replicated objects. Currently only <code>Destination</code> is supported.</li>
               </ul>
               The <code>object_lock_configuration</code> object supports the following:
               <ul>
                  <li><a name="object_lock_enabled" href="#object_lock_enabled"><code>object_lock_enabled</code></a> -
                     (Required) Indicates whether this bucket has an Object Lock configuration enabled. Valid value is
                     <code>Enabled</code>.</li>
                  <li><a name="rule" href="#rule"><code>rule</code></a> - (Optional) The Object Lock rule in place for
                     this bucket.</li>
               </ul>
               The <code>rule</code> object supports the following:
               <ul>
                  <li><a name="default_retention" href="#default_retention"><code>default_retention</code></a> -
                     (Required) The default retention period that you want to apply to new objects placed in this
                     bucket.</li>
               </ul>
               The <code>default_retention</code> object supports the following:
               <ul>
                  <li><a name="mode" href="#mode"><code>mode</code></a> - (Required) The default Object Lock retention
                     mode you want to apply to new objects placed in this bucket. Valid values are
                     <code>GOVERNANCE</code> and <code>COMPLIANCE</code>.</li>
                  <li><a name="days" href="#days"><code>days</code></a> - (Optional) The number of days that you want to
                     specify for the default retention period.</li>
                  <li><a name="years" href="#years"><code>years</code></a> - (Optional) The number of years that you
                     want to specify for the default retention period.</li>
               </ul>
               Either <code>days</code> or <code>years</code> must be specified, but not both.
               <div class="alert alert-warning" role="alert">
                  <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE on
                     <code>object_lock_configuration</code>:</div>
                  You can only enable S3 Object Lock for new buckets. If you need to turn on S3 Object Lock for an
                  existing bucket, please contact AWS Support.
                  When you create a bucket with S3 Object Lock enabled, Amazon S3 automatically enables versioning
                  for the bucket.
                  Once you create a bucket with S3 Object Lock enabled, you can't disable Object Lock or suspend
                  versioning for the bucket.
               </div>

               <h2 id="attributes-reference"><a name="attributes-reference" class="anchor"
                     href="#attributes-reference">Attributes Reference</a></h2>
               In addition to all arguments above, the following attributes are exported:
               <ul>
                  <li><a name="id" href="#id"><code>id</code></a> - The name of the bucket.</li>
                  <li><a name="arn" href="#arn"><code>arn</code></a> - The ARN of the bucket. Will be of format
                     <code>arn:aws:s3:::bucketname</code>.</li>
                  <li><a name="bucket_domain_name" href="#bucket_domain_name"><code>bucket_domain_name</code></a> - The
                     bucket domain name. Will be of format <code>bucketname.s3.amazonaws.com</code>.</li>
                  <li><a name="bucket_regional_domain_name"
                        href="#bucket_regional_domain_name"><code>bucket_regional_domain_name</code></a> - The bucket
                     region-specific domain name. The bucket domain name including the region name, please refer here for format.

   <!-- -------------------------------------------------------------------------------------------------------- ----------------->
                     Note: The AWS CloudFront allows specifying S3 region-specific endpoint when creating S3 origin, it
                     will prevent redirect issues from
                     CloudFront to S3 Origin URL.</li>
                  <li><a name="hosted_zone_id" href="#hosted_zone_id"><code>hosted_zone_id</code></a> - The Route
                        53 Hosted Zone ID for this bucket's region.</li>
                  <li><a name="region" href="#region"><code>region</code></a> - The AWS region this bucket resides in.
                  </li>
                  <li><a name="tags_all" href="#tags_all"><code>tags_all</code></a> - A map of tags assigned to the
                     resource, including those inherited from the provider <code>default_tags</code>
                        configuration block.</li>
                  <li><a name="website_endpoint" href="#website_endpoint"><code>website_endpoint</code></a> - The
                     website endpoint, if the bucket is configured with a website. If not, this will be an empty string.
                  </li>
                  <li><a name="website_domain" href="#website_domain"><code>website_domain</code></a> - The domain of
                     the website endpoint, if the bucket is configured with a website. If not, this will be an empty
                     string. This is used to create Route 53 alias records.</li>
               </ul>
               <h2 id="import"><a name="import" class="anchor" href="#import">Import</a></h2>
               S3 bucket can be imported using the <code>bucket</code>, e.g.,
               <pre class="line-numbers"><blockquote>$ terraform import aws_s3_bucket.bucket bucket-name</blockquote></pre>
               The <code>policy</code> argument is not imported and will be deprecated in a future version 3.x of the
               Terraform AWS Provider for removal in version 4.0. Use the <a
                  href=""><code>aws_s3_bucket_policy</code> resource</a> to manage the S3 Bucket
               Policy instead.
            </div>

         </div>
      </div>
      <?php require "../../../templates/footer_outer.php" ?>

   </div>

   <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
   <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
   <script defer src="../../../assets/fontawesome/js/all.min.js"></script><!-- footer social icons -->
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