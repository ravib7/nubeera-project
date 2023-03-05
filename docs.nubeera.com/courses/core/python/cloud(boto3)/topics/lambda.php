<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Lambda in Boto3</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Boto3 Lambda">

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
                <strong class="px-2" style="font-size: 1.125rem;">Lambda</strong><br><br>
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">AWS LAMBDA IN PYTHON USING BOTO3</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com">Home</a></li>
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/pages/Boto3/">Boto3</a></li>
                <li class="breadcrumb-item active">Lambda</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h3>In this article </h3>
                <ul>
                    <li><a href="#How-to-create-Lamda-function-using-Boto3" data-level="2">How to create Lamda function using Boto3</a></li>
                    <li><a href="#How-to-invoke-Lambda-function-using-Boto3" data-level="2">How to invoke Lambda function using Boto3</a></li>
                    <li><a href="#h-lambda-function-version" data-level="2">Lambda function version</a>
                        <ul>
                            <li><a href="#h-create-lambda-function-version" data-level="3">Create Lambda function version</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-lambda-function-alias" data-level="2">Lambda function alias</a>
                        <ul>
                            <li><a href="#h-create-lambda-function-alias" data-level="3">Create Lambda function alias</a></li>
                            <li><a href="#h-list-lambda-function-aliases" data-level="3">List Lambda function aliases</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-describe-lambda-function" data-level="2">Describe Lambda function</a></li>
                    <li><a href="#h-update-lambda-function" data-level="2">Update Lambda function</a></li>
                    <li><a href="#h-grant-invokelambda-permission-to-aws-services" data-level="2">Grant InvokeLambda permission to AWS services</a></li>
                    <li><a href="#h-delete-lambda-function" data-level="2">Delete Lambda function</a></li>
                    <li><a href="#h-summary" data-level="2">Summary</a></li>
                </ul>
                <br>

                <h3 id="How-to-create-Lamda-function-using-Boto3">How to create Lamda function using Boto3 </h3>
                To create a Lambda function using Boto3, you need to use the
                <meta charset="utf-8"> create_function() method of the Lambda Boto3 client. In addition to that, you need to zip your Lambda function code and create a Lambda execution IAM role.
                Following is the code for creating an IAM role which then later will be used to execute a Lambda function.
                <br><br>
                <div class="code-title">Create IAM role for Lambda function</div>
                <pre title="Create IAM role for Lambda function" class="wp-block-code  language-python" tabindex="0">
                    <blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3
<span class="token keyword">import</span> json

iam <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'iam'</span><span class="token punctuation">)</span>

role_policy <span class="token operator">=</span> <span class="token punctuation">{</span>
  <span class="token string">"Version"</span><span class="token punctuation">:</span> <span class="token string">"2012-10-17"</span><span class="token punctuation">,</span>
  <span class="token string">"Statement"</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
      <span class="token string">"Sid"</span><span class="token punctuation">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
      <span class="token string">"Effect"</span><span class="token punctuation">:</span> <span class="token string">"Allow"</span><span class="token punctuation">,</span>
      <span class="token string">"Principal"</span><span class="token punctuation">:</span> <span class="token punctuation">{</span>
        <span class="token string">"Service"</span><span class="token punctuation">:</span> <span class="token string">"lambda.amazonaws.com"</span>
      <span class="token punctuation">}</span><span class="token punctuation">,</span>
      <span class="token string">"Action"</span><span class="token punctuation">:</span> <span class="token string">"sts:AssumeRole"</span>
    <span class="token punctuation">}</span>
  <span class="token punctuation">]</span>
<span class="token punctuation">}</span>


response <span class="token operator">=</span> iam<span class="token punctuation">.</span>create_role<span class="token punctuation">(</span>
  RoleName<span class="token operator">=</span><span class="token string">'LambdaBasicExecution'</span><span class="token punctuation">,</span>
  AssumeRolePolicyDocument<span class="token operator">=</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>role_policy<span class="token punctuation">)</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>

                <img loading="lazy" width="1024" height="500" src="https://hands-on.cloud/wp-content/uploads/2021/08/create_lambda_execution_role-1024x500-1.jpg" alt="Create Lambda execution role" class="ezlazyload wp-image-38857" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/create_lambda_execution_role-1024x500-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/create_lambda_execution_role-300x146-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/create_lambda_execution_role-768x375-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/create_lambda_execution_role.jpg 1366w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/create_lambda_execution_role-1024x500-1.jpg">
                <figcaption>Create Lambda execution role</figcaption>

                Here’s an example of a simple Lambda function that returns “Hello World”.
                <script data-ezscrex="false" data-cfasync="false" style="display:none">
                    if (typeof __ez_fad_position != 'undefined') {
                        __ez_fad_position('div-gpt-ad-hands_on_cloud-medrectangle-3-0')
                    };
                </script>

                Lambda functions need an entry point handler that accepts the arguments <code>event</code> and <code>context</code>.
                <br><br>
                <div class="code-title">Simple AWS Lambda function</div>
                <pre title="Simple AWS Lambda function" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> json

<span class="token keyword">def</span> <span class="token function">lambda_handler</span><span class="token punctuation">(</span>event<span class="token punctuation">,</span> context<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token keyword">return</span> <span class="token punctuation">{</span>
        <span class="token string">'statusCode'</span><span class="token punctuation">:</span> <span class="token number">200</span><span class="token punctuation">,</span>
        <span class="token string">'body'</span><span class="token punctuation">:</span> json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span><span class="token string">'Hello World'</span><span class="token punctuation">)</span>
    <span class="token punctuation">}</span></blockquote></pre>

                <img loading="lazy" width="1024" height="502" src="https://hands-on.cloud/wp-content/uploads/2021/08/zip_lambda_function-1024x502-1.jpg" alt="Zip Python Code" class="ezlazyload wp-image-38859" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/zip_lambda_function-1024x502-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/zip_lambda_function-300x147-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/zip_lambda_function-768x377-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/zip_lambda_function-1.jpg 1366w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/zip_lambda_function-1024x502-1.jpg">
                <figcaption>Zip Python Code</figcaption>

                The following code will create a new AWS Lambda function called <code>helloWorldLambda</code>.
                <strong>Note</strong>: the <code>Handler</code> parameter is specifying the entry point for the Lambda function will be a function called <code>lambda_handler</code> in the <code>handler.py</code> file.
                <br><br>
                <div class="code-title">Create Lambda function using Boto3</div>
                <pre title="Create Lambda function using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

iam_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'iam'</span><span class="token punctuation">)</span>
lambda_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'lambda'</span><span class="token punctuation">)</span>

<span class="token keyword">with</span> <span class="token builtin">open</span><span class="token punctuation">(</span><span class="token string">'lambda.zip'</span><span class="token punctuation">,</span> <span class="token string">'rb'</span><span class="token punctuation">)</span> <span class="token keyword">as</span> f<span class="token punctuation">:</span>
	zipped_code <span class="token operator">=</span> f<span class="token punctuation">.</span>read<span class="token punctuation">(</span><span class="token punctuation">)</span>
  
role <span class="token operator">=</span> iam_client<span class="token punctuation">.</span>get_role<span class="token punctuation">(</span>RoleName<span class="token operator">=</span><span class="token string">'LambdaBasicExecution'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> lambda_client<span class="token punctuation">.</span>create_function<span class="token punctuation">(</span>
    FunctionName<span class="token operator">=</span><span class="token string">'helloWorldLambda'</span><span class="token punctuation">,</span>
    Runtime<span class="token operator">=</span><span class="token string">'python3.9'</span><span class="token punctuation">,</span>
    Role<span class="token operator">=</span>role<span class="token punctuation">[</span><span class="token string">'Role'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string">'Arn'</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
    Handler<span class="token operator">=</span><span class="token string">'handler.lambda_handler'</span><span class="token punctuation">,</span>
    Code<span class="token operator">=</span><span class="token builtin">dict</span><span class="token punctuation">(</span>ZipFile<span class="token operator">=</span>zipped_code<span class="token punctuation">)</span><span class="token punctuation">,</span>
    Timeout<span class="token operator">=</span><span class="token number">300</span><span class="token punctuation">,</span> <span class="token comment"># Maximum allowable timeout</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>

                <img loading="lazy" width="1024" height="500" src="https://hands-on.cloud/wp-content/uploads/2021/08/create_lambda_function-1024x500-1.jpg" alt="Create Lambda function" class="ezlazyload wp-image-38860" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/create_lambda_function-1024x500-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/create_lambda_function-300x146-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/create_lambda_function-768x375-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/create_lambda_function.jpg 1366w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/create_lambda_function-1024x500-1.jpg">
                <figcaption>Create Lambda function using Boto3</figcaption>

                To create a Lambda function zip archive from Python code, you need to use the
                <meta charset="utf-8">shutil.make_archive() method.

                <br><br>
                <pre class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> shutil
shutil<span class="token punctuation">.</span>make_archive<span class="token punctuation">(</span>output_filename<span class="token punctuation">,</span> <span class="token string">'zip'</span><span class="token punctuation">,</span> dir_name<span class="token punctuation">)</span></blockquote></pre>
                As a result of the above code execution, you should see a new Lambda function in the AWS web console:
                <img loading="lazy" width="912" height="222" src="https://hands-on.cloud/wp-content/uploads/2021/08/created_lambda_function.jpg" alt="helloWorldLambda function" class="ezlazyload wp-image-38861" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/created_lambda_function.jpg 912w,https://hands-on.cloud/wp-content/uploads/2021/08/created_lambda_function-300x73-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/created_lambda_function-768x187-1.jpg 768w" sizes="(max-width: 912px) 100vw, 912px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/created_lambda_function.jpg">
                <figcaption>helloWorldLambda function</figcaption>

                <h3 id="How-to-invoke-Lambda-function-using-Boto3">How to invoke Lambda function using Boto3 </h3>

                <meta charset="utf-8">To invoke the Lambda function, you need to use the invoke() function of the Boto3 client. To send input to your Lambda function, you need to use the <code>Payload</code> argument, which should contain JSON string data. Data provided to the <code>Payload</code> argument is available in the Lambda function as an <code>event</code> argument of the Lambda handler function.

                <br><br>
                <div class="code-title">Invoke Lambda function</div>
                <pre title="Invoke Lambda function" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3<span class="token punctuation">,</span> json

lambda_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'lambda'</span><span class="token punctuation">)</span>

test_event <span class="token operator">=</span> <span class="token builtin">dict</span><span class="token punctuation">(</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> lambda_client<span class="token punctuation">.</span>invoke<span class="token punctuation">(</span>
  FunctionName<span class="token operator">=</span><span class="token string">'helloWorldLambda'</span><span class="token punctuation">,</span>
  Payload<span class="token operator">=</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>test_event<span class="token punctuation">)</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">[</span><span class="token string">'Payload'</span><span class="token punctuation">]</span><span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">[</span><span class="token string">'Payload'</span><span class="token punctuation">]</span><span class="token punctuation">.</span>read<span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">.</span>decode<span class="token punctuation">(</span><span class="token string">"utf-8"</span><span class="token punctuation">)</span><span class="token punctuation">)</span></blockquote></pre>

                <img loading="lazy" width="1024" height="500" src="https://hands-on.cloud/wp-content/uploads/2021/08/invoke_lambda_function-1024x500-1.jpg" alt="Invoke Lambda function" class="ezlazyload wp-image-38864" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/invoke_lambda_function-1024x500-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/invoke_lambda_function-300x146-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/invoke_lambda_function-768x375-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/invoke_lambda_function.jpg 1364w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/invoke_lambda_function-1024x500-1.jpg">
                <figcaption>Invoke Lambda function</figcaption>

                <h3 id="h-lambda-function-version">Lambda function version </h3>
                You can use versions to manage the deployment of your functions. For example, you can publish a new version of a function for beta testing without affecting users of the stable production version. Lambda creates a new version of your function each time that you publish the function. The new version is a copy of the unpublished version of the function.

                <h3 id="h-create-lambda-function-version">Create Lambda function version</h3>
                To create/publish a new Lambda function version, you need to use the
                The <code>publish_version()</code> function publishes a version of your function from the current snapshot of <code>$LATEST</code>.
                <br><br>
                <pre class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

lambda_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'lambda'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> lambda_client<span class="token punctuation">.</span>publish_version<span class="token punctuation">(</span>
    FunctionName<span class="token operator">=</span><span class="token string">'helloWorldLambda'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>

                <img loading="lazy" width="1024" height="502" src="https://hands-on.cloud/wp-content/uploads/2021/08/publish_lambda_version-1024x502-1.jpg" alt="Publish new Lambda version" class="ezlazyload wp-image-38876" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/publish_lambda_version-1024x502-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/publish_lambda_version-300x147-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/publish_lambda_version-768x377-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/publish_lambda_version.jpg 1366w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/publish_lambda_version-1024x502-1.jpg">
                <figcaption>Publish new Lambda version</figcaption>

                <h3 id="h-lambda-function-alias">Lambda function alias </h3>
                You can create one or more aliases for your Lambda function. A Lambda alias is like a pointer to a specific function version. Users can access the function version using the alias Amazon Resource Name (ARN). Alias names are unique for a given function.
                Each Lambda function alias has a unique ARN. An alias can point only to a function version, not to another alias. You can update an alias to point it to a new version of the function.
                Event sources such as Amazon Simple Storage Service (Amazon S3) invoke your Lambda function. These event sources maintain a mapping that identifies the function to invoke when events occur. If you specify a Lambda function alias in the mapping configuration, you don’t need to update the mapping when the function version changes.
                <h3 id="h-create-lambda-function-alias">Create Lambda function alias</h3>
                To
                <meta charset="utf-8">create a Lambda function alias, you need to use the create_alias() method of the Lambda client.

                To create an alias for the Lambda function, you need to publish a new version for Lambda first.
                <br><br>
                <div class="code-title">Create Lambda function alias</div>
                <pre title="Create Lambda function alias" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

lambda_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'lambda'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> lambda_client<span class="token punctuation">.</span>create_alias<span class="token punctuation">(</span>
    FunctionName<span class="token operator">=</span><span class="token string">'helloWorldLambda'</span><span class="token punctuation">,</span>
    Name<span class="token operator">=</span><span class="token string">'v1'</span><span class="token punctuation">,</span>
    FunctionVersion<span class="token operator">=</span><span class="token string">'1'</span><span class="token punctuation">,</span>
    Description<span class="token operator">=</span><span class="token string">'helloWorldLambda v1'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>

                <img loading="lazy" width="1024" height="501" src="https://hands-on.cloud/wp-content/uploads/2021/08/create_alias-1024x501-1.jpg" alt="Create Lambda function alias" class="ezlazyload wp-image-38877" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/create_alias-1024x501-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/create_alias-300x147-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/create_alias-768x376-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/create_alias.jpg 1366w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/create_alias-1024x501-1.jpg">
                <figcaption>Create Lambda function alias</figcaption>

                <h3 id="h-list-lambda-function-aliases">List Lambda function aliases</h3>

                <meta charset="utf-8">To list Lambda function aliases, you need to use the list_aliases() method of the Lambda client. For each alias, the response includes information such as the alias ARN, description, alias name, and the function version to which it points.

                You can optionally use parameter <code>FunctionVersion</code> to filter out the result.
                <br><br>
                <div class="code-title">List Lambda function aliases</div>
                <pre title="List Lambda function aliases" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

lambda_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'lambda'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> lambda_client<span class="token punctuation">.</span>list_aliases<span class="token punctuation">(</span>
    FunctionName<span class="token operator">=</span><span class="token string">'helloWorldLambda'</span><span class="token punctuation">,</span>
    FunctionVersion<span class="token operator">=</span><span class="token string">'1'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

aliases <span class="token operator">=</span> response<span class="token punctuation">[</span><span class="token string">'Aliases'</span><span class="token punctuation">]</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token punctuation">[</span>alias <span class="token keyword">for</span> alias <span class="token keyword">in</span> aliases<span class="token punctuation">]</span><span class="token punctuation">)</span></blockquote></pre>

                <img loading="lazy" width="1024" height="502" src="https://hands-on.cloud/wp-content/uploads/2021/08/list_aliases-1024x502-1.jpg" alt="List Lambda function aliases" class="ezlazyload wp-image-38880" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/list_aliases-1024x502-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/list_aliases-300x147-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/list_aliases-768x377-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/list_aliases.jpg 1366w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/list_aliases-1024x502-1.jpg">
                <figcaption>List Lambda function aliases</figcaption>

                <h3 id="h-describe-lambda-function">
                    <meta charset="utf-8">Describe Lambda function
                </h3>
                To describe the Lambda function, you need to use the get_function() method of the Lambda client. Response data will contain the configuration information of the Lambda function and a presigned URL link to the .zip file with the source code of your function.
                <br><br><strong>Note</strong>: the URL is valid for 10 minutes. The configuration information is the same information you’ve provided as parameters when uploading the function.
                <br><br>
                <div class="code-title">Describe Lambda function</div>
                <pre title="Describe Lambda function" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

lambda_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'lambda'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> lambda_client<span class="token punctuation">.</span>get_function<span class="token punctuation">(</span>
    FunctionName<span class="token operator">=</span><span class="token string">'helloWorldLambda'</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>

                <img loading="lazy" width="1024" height="501" src="https://hands-on.cloud/wp-content/uploads/2021/08/get_lambda-1024x501-1.jpg" alt="Describe Lambda function" class="ezlazyload wp-image-38874" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/get_lambda-1024x501-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/get_lambda-300x147-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/get_lambda-768x376-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/get_lambda.jpg 1366w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/get_lambda-1024x501-1.jpg">
                <figcaption>
                    <meta charset="utf-8">Describe Lambda function
                </figcaption>

                <h3 id="h-update-lambda-function">Update Lambda function </h3>
                To
                <meta charset="utf-8">update the Lambda function, you need to use the update_function_code() method of the Lambda client.

                <br><br>
                <div class="code-title">Update Lambda function</div>
                <pre title="Update Lambda function" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

lambda_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'lambda'</span><span class="token punctuation">)</span>

<span class="token keyword">with</span> <span class="token builtin">open</span><span class="token punctuation">(</span><span class="token string">'lambda.zip'</span><span class="token punctuation">,</span> <span class="token string">'rb'</span><span class="token punctuation">)</span> <span class="token keyword">as</span> f<span class="token punctuation">:</span>
    zipped_code <span class="token operator">=</span> f<span class="token punctuation">.</span>read<span class="token punctuation">(</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> lambda_client<span class="token punctuation">.</span>update_function_code<span class="token punctuation">(</span>
    FunctionName<span class="token operator">=</span><span class="token string">'helloWorldLambda'</span><span class="token punctuation">,</span>
    ZipFile<span class="token operator">=</span>zipped_code
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                To create a Lambda function zip archive from Python code, you need to use the

                <br><br>
                <pre class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> shutil
shutil<span class="token punctuation">.</span>make_archive<span class="token punctuation">(</span>output_filename<span class="token punctuation">,</span> <span class="token string">'zip'</span><span class="token punctuation">,</span> dir_name<span class="token punctuation">)</span></blockquote></pre>

                <img loading="lazy" width="1024" height="501" src="https://hands-on.cloud/wp-content/uploads/2021/08/update_lambda_code-1024x501-1.jpg" alt="Update Lambda code" class="ezlazyload wp-image-38866" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/update_lambda_code-1024x501-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/update_lambda_code-300x147-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/update_lambda_code-768x376-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/update_lambda_code.jpg 1366w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/update_lambda_code-1024x501-1.jpg">
                <figcaption>Update Lambda code</figcaption>

                <h3 id="h-grant-invokelambda-permission-to-aws-services">Grant
                    <meta charset="utf-8">InvokeLambda permission to AWS services
                </h3>

                <meta charset="utf-8">To grant permission to the AWS service to invoke the Lambda function, you need to use the add_permission() method of the Lambda client.

                Permissions apply to the Amazon Resource Name (ARN) used to invoke the function, which can be unqualified (the unpublished version of the function), or includes a version or alias. If a client uses a version or alias to invoke a function, use the <code>Qualifier</code> parameter to apply permissions to that ARN.
                This action adds a statement to a resource-based permissions policy for the function.
                The following code will add permission for <code>test-ap-s3-bucket</code> S3 bucket to invoke <code>helloWorldLambda</code> Lamda function.
                <br><br>
                <div class="code-title">Grant permission to the AWS service to invoke the Lambda function</div>
                <pre title="Grant permission to the AWS service to invoke the Lambda function" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

lambda_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'lambda'</span><span class="token punctuation">)</span> 

response <span class="token operator">=</span> lambda_client<span class="token punctuation">.</span>add_permission<span class="token punctuation">(</span>
    StatementId<span class="token operator">=</span><span class="token string">'S3InvokeHelloWorldLambda'</span><span class="token punctuation">,</span>
    FunctionName<span class="token operator">=</span><span class="token string">'helloWorldLambda'</span><span class="token punctuation">,</span>
    Action<span class="token operator">=</span><span class="token string">'lambda:InvokeLambda'</span><span class="token punctuation">,</span>
    Principal<span class="token operator">=</span><span class="token string">'s3.amazonaws.com'</span><span class="token punctuation">,</span>
    SourceArn<span class="token operator">=</span><span class="token string">'arn:aws:s3:::test-ap-s3-bucket/*'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>

                <img loading="lazy" width="1024" height="501" src="https://hands-on.cloud/wp-content/uploads/2021/08/add_permission-1024x501-1.jpg" alt="Add InvokeLambda permission to the S3 bucket" class="ezlazyload wp-image-38869" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/add_permission-1024x501-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/add_permission-300x147-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/add_permission-768x376-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/add_permission.jpg 1366w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/add_permission-1024x501-1.jpg">
                <figcaption>Add InvokeLambda permission to the S3 bucket</figcaption>

                <img loading="lazy" width="806" height="439" src="https://hands-on.cloud/wp-content/uploads/2021/08/lambda_s3_trigger.jpg" alt="S3 Trigger added to the Lambda function" class="ezlazyload wp-image-38871" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/lambda_s3_trigger.jpg 806w,https://hands-on.cloud/wp-content/uploads/2021/08/lambda_s3_trigger-300x163-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/lambda_s3_trigger-768x418-1.jpg 768w" sizes="(max-width: 806px) 100vw, 806px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/lambda_s3_trigger.jpg">
                <figcaption>S3 Trigger added to the Lambda function</figcaption>

                <h3 id="h-delete-lambda-function">Delete Lambda function </h3>
                To d
                <meta charset="utf-8">elete the Lambda function, you need to use the
                <meta charset="utf-8"> delete_function() method of the Lambda client.

                <br><br>
                <div class="code-title">Delete Lambda function</div>
                <pre title="Delete Lambda function" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

lambda_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'lambda'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> lambda_client<span class="token punctuation">.</span>delete_function<span class="token punctuation">(</span>
    FunctionName<span class="token operator">=</span><span class="token string">'helloWorldLambda'</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>

                <img loading="lazy" width="1024" height="501" src="https://hands-on.cloud/wp-content/uploads/2021/08/delete_lambda-1024x501-1.jpg" alt="Delete Lambda function" class="ezlazyload wp-image-38875" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/delete_lambda-1024x501-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/delete_lambda-300x147-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/delete_lambda-768x376-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/delete_lambda.jpg 1366w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/08/delete_lambda-1024x501-1.jpg">
                <figcaption>Delete Lambda function</figcaption>

                <h3 id="h-summary">Summary </h3>
                In this article, we’ve covered how to manage AWS Lambda service using Python SDK for AWS (Boto3 library) to deploy, update and delete Lambda functions.
            </div>
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