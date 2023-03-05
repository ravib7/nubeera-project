<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra CloudWatch in Boto3</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Boto3 CloudWatch">

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
                <strong class="px-2" style="font-size: 1.125rem;">CloudWatch in python</strong><br><br>
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CLOUDWATCH IN PYTHON USING BOTO3</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../">CloudOps</a></li>
                <li class="breadcrumb-item active">Boto3</li>

            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h3>In this article </h3>
                <ul>
                    <li><a href="#h-working-with-cloudwatch-logs-using-boto3" data-level="2">Working with CloudWatch logs using Boto3</a>
                        <ul>
                            <li><a href="#Creating-CloudWatch-log-group" data-level="3">Creating CloudWatch log group</a></li>
                            <li><a href="#Listing-CloudWatch-log-groups" data-level="3">Listing CloudWatch log groups</a></li>
                            <li><a href="#Filtering-CloudWatch-log-groups" data-level="3">Filtering CloudWatch log groups</a></li>
                            <li><a href="#Describing-CloudWatch-log-groups" data-level="3">Describing CloudWatch log groups</a></li>
                            <li><a href="#Sending-logs-to-CloudWatch-log-group" data-level="3">Sending logs to CloudWatch log group</a></li>
                            <li><a href="#Reading-logs-from-CloudWatch" data-level="3">Reading logs from CloudWatch</a></li>
                            <li><a href="#Updating-CloudWatch-log-group" data-level="3">Updating CloudWatch log group</a></li>
                            <li><a href="#Deleting-CloudWatch-log-group" data-level="3">Deleting CloudWatch log group</a></li>
                        </ul>
                    </li>
                    <li><a href="#Working-with-CloudWatch-metrics-using-Boto3" data-level="2">Working with CloudWatch metrics using Boto3</a>
                        <ul>
                            <li><a href="#Sending-metric-to-CloudWatch" data-level="3">Sending metric to CloudWatch</a></li>
                            <li><a href="#Listing-CloudWatch-metrics" data-level="3">Listing CloudWatch metrics</a></li>
                            <li><a href="#Filtering-CloudWatch-metrics" data-level="3">Filtering CloudWatch metrics</a></li>
                            <li><a href="#Getting-CloudWatch-metrics" data-level="3">Getting CloudWatch metrics</a></li>
                            <li><a href="#Deleting-CloudWatch-metric-using-Boto3" data-level="3">Deleting CloudWatch metric using Boto3</a></li>
                        </ul>
                    </li>
                    <li><a href="#Working-with-CloudWatch-alarms-using-Boto3" data-level="2">Working with CloudWatch alarms using Boto3</a>
                        <ul>
                            <li><a href="#Creating-CloudWatch-alarm" data-level="3">Creating CloudWatch alarm</a></li>
                            <li><a href="#Updating-CloudWatch-alarm" data-level="3">Updating CloudWatch alarm</a></li>
                            <li><a href="#Deleting-CloudWatch-alarm" data-level="3">Deleting CloudWatch alarm</a></li>
                        </ul>
                    </li>
                    <li><a href="#Working-with-CloudWatch-events-using-Boto3" data-level="2">Working with CloudWatch events using Boto3</a>
                        <ul>
                            <li><a href="#Creating-CloudWatch-event-rule" data-level="3">Creating CloudWatch event rule</a></li>
                            <li><a href="#Filtering-CloudWatch-event-rules" data-level="3">Filtering CloudWatch event rules</a></li>
                        </ul>
                    </li>
                    <li><a href="#Working-with-CloudWatch-dashboards-using-Boto3" data-level="2">Working with CloudWatch dashboards using Boto3</a>
                        <ul>
                            <li><a href="#Creating-CloudWatch-dashboard" data-level="3">Creating CloudWatch dashboard</a></li>
                            <li><a href="#Updating-CloudWatch-dashboard" data-level="3">Updating CloudWatch dashboard</a></li>
                            <li><a href="#Deleting-CloudWatch-dashboard" data-level="3">Deleting CloudWatch dashboard</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-summary" data-level="2">Summary</a></li>
                </ul>
                <br>
                AWS Cloudwatch is an AWS service that allows you to monitor your services and applications metrics and store and analyze their logs.
                The ability to add custom metrics and logs considerably aids in integrating logs from third-party software, even from inside the virtual
                machines. Boto3 library provides a convenient wrapper around the CloudWatchLogs API, Cloudwatch API, and EventBridge API.
                This article covers CloudWatch logs, metrics, alarms, and dashboards programmatically by using the Boto3 AWS SDK for Python.

                <h3 id="h-working-with-cloudwatch-logs-using-boto3">Working with CloudWatch logs using Boto3</h3>
                The CloudWatch Logs (logs client) centralizes the logs from different applications and AWS resources. You can filter through and explore the logs generated based on selected fields and dimensions in a CloudWatch console.
                To cover a few basics:
                <ul>
                    <li><strong>Log groups and Log streams:</strong> A Log Group is a group of log streams sharing the same properties.
                        It is a logical grouping of log streams. For instance, consider a CRM application that consists of the front-end
                        and a back-end components. Each of these components may produce different logs such as web-server, application logs,
                        etc. So, the CRM application is to be a log group whereas the frontend, backend and other logs are to be log streams.</li>
                    <li><strong>Log events:</strong> Log events are the granular packets of data that carry a timestsamp and a textual information of the activity.
                        Log events are sent to Log streams.</li>
                </ul>
                In the upcoming sections, we will be generating dummy log events to mimic the real system. We will use the Boto3 library to manipulate the Log groups and streams. To do that, we’ll b using the CloudWatch Logs client.
                Here’s how you can initialize the CloudWatch Logs client:
                <br><br>
                <div class="code-title">Initializing Logs Client in Boto3</div>
                <pre title="Initializing Logs Client in Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'logs'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span></blockquote></pre>
                Later, we’ll be using this <code>client</code> object to call the other functions related to CloudWatch Logs APIs.

                <h3 id="Creating-CloudWatch-log-group">Creating CloudWatch log group</h3>
                To create a log group, you need to use the create_log_group() method of the
                <meta charset="utf-8">CloudWatch Logs client and provide the name of the log group and the tag information as parameters.
                It is also recommended to set a retention period for the created log group to one of the following integers representing the days: <code>[1, 3, 5, 7, 14, 30, 60, 90, 120, 150, 180, 365, 400, 545, 731, 1827, 3653]</code>.
                You can set the retention period for the log group by using the put_retention_policy() method of the CloudWatch Logs client.
                In the following code example, we will create two log groups named as <strong>CRMBackendLogs</strong> and <strong>CRMFrontendLogs</strong>:
                <br><br>
                <div class="code-title">Creating CloudWatch log group using Boto3</div>
                <pre title="Creating CloudWatch log group using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'logs'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>
retention_period_in_days <span class="token operator">=</span> <span class="token number">5</span>

<span class="token comment"># Back end Log Group</span>

log_group <span class="token operator">=</span> <span class="token string">'CRMBackendLogs'</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_log_group<span class="token punctuation">(</span>
    logGroupName<span class="token operator">=</span>log_group<span class="token punctuation">,</span>
    tags<span class="token operator">=</span><span class="token punctuation">{</span>
        <span class="token string">'Type'</span><span class="token punctuation">:</span> <span class="token string">'Back end'</span><span class="token punctuation">,</span>
        <span class="token string">'Frequency'</span><span class="token punctuation">:</span> <span class="token string">'30 seconds'</span><span class="token punctuation">,</span>
        <span class="token string">'Environment'</span><span class="token punctuation">:</span> <span class="token string">'Production'</span><span class="token punctuation">,</span>
        <span class="token string">'RetentionPeriod'</span><span class="token punctuation">:</span> <span class="token builtin">str</span><span class="token punctuation">(</span>retention_period_in_days<span class="token punctuation">)</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>response<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>put_retention_policy<span class="token punctuation">(</span>
          logGroupName<span class="token operator">=</span>log_group<span class="token punctuation">,</span>
          retentionInDays<span class="token operator">=</span>retention_period_in_days
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>response<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">)</span>

<span class="token comment"># Front end Log Group</span>

log_group <span class="token operator">=</span> <span class="token string">'CRMFrontendLogs'</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_log_group<span class="token punctuation">(</span>
    logGroupName<span class="token operator">=</span>log_group<span class="token punctuation">,</span>
    tags<span class="token operator">=</span><span class="token punctuation">{</span>
        <span class="token string">'Type'</span><span class="token punctuation">:</span> <span class="token string">'Front end'</span><span class="token punctuation">,</span>
        <span class="token string">'Frequency'</span><span class="token punctuation">:</span> <span class="token string">'30 seconds'</span><span class="token punctuation">,</span>
        <span class="token string">'Environment'</span><span class="token punctuation">:</span> <span class="token string">'Production'</span><span class="token punctuation">,</span>
        <span class="token string">'RetentionPeriod'</span><span class="token punctuation">:</span> <span class="token builtin">str</span><span class="token punctuation">(</span>retention_period_in_days<span class="token punctuation">)</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>put_retention_policy<span class="token punctuation">(</span>
          logGroupName<span class="token operator">=</span>log_group<span class="token punctuation">,</span>
          retentionInDays<span class="token operator">=</span>retention_period_in_days
<span class="token punctuation">)</span></blockquote></pre>
                This generates the following output:
                <img loading="lazy" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22502%22%3E%3C/svg%3E" alt="Creating Log Groups using Boto3" class="ezlazyload wp-image-37344" width="1024" height="502" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-log-group-1-1024x502.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-log-group-1-300x147.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-log-group-1-768x376.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-log-group-1-1536x753.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-log-group-1.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-log-group-1-1024x502.png">
                <figcaption>Listing CloudWatch logs using Boto3: Output</figcaption>
                The Logs tab host the Log groups in the CloudWatch console, as shown in the image below:
                <img loading="lazy" width="1024" height="499" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22499%22%3E%3C/svg%3E" alt="Working-with-CloudWatch-in-Python-using-Boto3-Log-Groups-Console" class="ezlazyload wp-image-37499" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-Log-Groups-Console-1024x499.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-Log-Groups-Console-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-Log-Groups-Console-768x374.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-Log-Groups-Console-1536x749.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-Log-Groups-Console.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-Log-Groups-Console-1024x499.png">
                <figcaption>Log Groups in CloudWatch console</figcaption>

                <h3 id="Listing-CloudWatch-log-groups">Listing CloudWatch log groups</h3>
                In the previous section, we’ve created two log groups. The existing log groups can be listed by executing the describe_log_groups() method of the CloudWatch Logs client. The method response will contain a list of log groups.
                The following code will list all the log groups present in ClouddWatch:
                <br><br>
                <div class="code-title">Listing CloudWatch log group using Boto3</div>
                <pre title="Listing CloudWatch log group using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'logs'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_log_groups<span class="token punctuation">(</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>response<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">)</span>

<span class="token keyword">for</span> each_line <span class="token keyword">in</span> response<span class="token punctuation">[</span><span class="token string">'logGroups'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>each_line<span class="token punctuation">)</span></blockquote></pre>
                This results in the following output depict the log groups present in this region:
                <img loading="lazy" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22499%22%3E%3C/svg%3E" alt="Working-with-CloudWatch-in-Python-using-Boto3-listing-log-groups-1" class="ezlazyload wp-image-37502" width="1024" height="499" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-listing-log-groups-1-1024x499.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-listing-log-groups-1-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-listing-log-groups-1-768x374.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-listing-log-groups-1-1536x748.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-listing-log-groups-1.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-listing-log-groups-1-1024x499.png">
                <figcaption>Listing CloudWatch logs using Boto3: Output</figcaption>

                <h3 id="Filtering-CloudWatch-log-groups">Filtering CloudWatch log groups</h3>
                You can filter the log groups based on the prefix of their names by adding the <code>logGroupNamePrefix</code> argument to the describe_log_groups() method of the CloudWatch Logs client.
                In the following code, we’ll filter the log groups related to our emulated CRM application:
                <br><br>
                <div class="code-title">Filtering CloudWatch log group using Boto3</div>
                <pre title="Filtering CloudWatch log group using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'logs'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_log_groups<span class="token punctuation">(</span>
    logGroupNamePrefix<span class="token operator">=</span><span class="token string">'CRM'</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> each_line <span class="token keyword">in</span> response<span class="token punctuation">[</span><span class="token string">'logGroups'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>each_line<span class="token punctuation">)</span></blockquote></pre>
                Upon execution of the above code, you’ll get the log groups that start from the <code>CRM</code> prefix:
                <img loading="lazy" width="1024" height="499" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22499%22%3E%3C/svg%3E" alt="Working-with-CloudWatch-in-Python-using-Boto3-filtering-log-groups" class="ezlazyload wp-image-37504" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filtering-log-groups-1024x499.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filtering-log-groups-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filtering-log-groups-768x374.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filtering-log-groups-1536x748.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filtering-log-groups.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filtering-log-groups-1024x499.png">
                <figcaption>Filtering CloudWatch log groups using Boto3: Output</figcaption>

                <h3 id="Describing-CloudWatch-log-groups">Describing CloudWatch log groups</h3>
                The describe_log_groups() function is quite handy for filtering and describing log groups too. The usage is similar to that of the previous examples.
                In the following code, we’ll describe log groups:
                <br><br>
                <div class="code-title">Describing CloudWatch log group using Boto3</div>
                <pre title="Describing CloudWatch log group using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'logs'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_log_groups<span class="token punctuation">(</span>
    logGroupNamePrefix<span class="token operator">=</span><span class="token string">'CRMBackend'</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> each_line <span class="token keyword">in</span> response<span class="token punctuation">[</span><span class="token string">'logGroups'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>each_line<span class="token punctuation">)</span>
</blockquote></pre>
                Each line’s output results in describing each log group:
                <img loading="lazy" width="1024" height="499" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22499%22%3E%3C/svg%3E" alt="Working-with-CloudWatch-in-Python-using-Boto3-Describing-log-groups" class="ezlazyload wp-image-37506" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-Describing-log-groups-1024x499.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-Describing-log-groups-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-Describing-log-groups-768x374.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-Describing-log-groups-1536x748.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-Describing-log-groups.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-Describing-log-groups-1024x499.png">
                <figcaption>Describing CloudWatch log groups using Boto3: Output</figcaption>

                <h3 id="Sending-logs-to-CloudWatch-log-group">Sending logs to CloudWatch log group</h3>
                Now, let’s generate and send the log events to log streams in Cloud Watch. You can create Log Streams by using the create_log_stream() method of the CloudWatch client:
                <br><br>
                <div class="code-title">Sending Logs - Step1 - Create Log Stream</div>
                <pre title="Sending Logs - Step1 - Create Log Stream" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python">client<span class="token punctuation">.</span>create_log_stream<span class="token punctuation">(</span>
    logGroupName <span class="token operator">=</span> <span class="token string">'CRMBackendLogs'</span><span class="token punctuation">,</span>
    logStreamName <span class="token operator">=</span> <span class="token string">'ApplicationLogs'</span>
<span class="token punctuation">)</span></blockquote></pre>
                As soon as you have a log stream, you can publish your log events to it. To do this, you need to use the put_log_events() method of the CloudWatch Logs client. This method takes three arguments: <code>logGroupName</code>, <code>logStreamName</code> and a list containing <code>logEvents</code>.
                <br><br>
                <div class="code-title">Sending Logs - Step2 - Put Log Events</div>
                <pre title="Sending Logs - Step2 - Put Log Events" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python">response <span class="token operator">=</span> client<span class="token punctuation">.</span>put_log_events<span class="token punctuation">(</span>
    logGroupName <span class="token operator">=</span> <span class="token string">'CRMBackendLogs'</span><span class="token punctuation">,</span>
    logStreamName <span class="token operator">=</span> <span class="token string">'ApplicationLogs'</span><span class="token punctuation">,</span>
    logEvents<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'timestamp'</span><span class="token punctuation">:</span> <span class="token builtin">int</span><span class="token punctuation">(</span><span class="token builtin">round</span><span class="token punctuation">(</span>time<span class="token punctuation">.</span>time<span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">*</span> <span class="token number">1000</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
            <span class="token string">'message'</span><span class="token punctuation">:</span> messages<span class="token punctuation">[</span>random<span class="token punctuation">.</span>randint<span class="token punctuation">(</span><span class="token number">0</span><span class="token punctuation">,</span> <span class="token number">3</span><span class="token punctuation">)</span><span class="token punctuation">]</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span></blockquote></pre>
                Consecutive calls to the API need to use the sequence token from <code>response['nextSequenceToken']</code>.
                Let’s summarize everything and publish logs to CloudWatch:
                <br><br>
                <div class="code-title">Sending logs to CloudWatch log group using Boto3</div>
                <pre title="Sending logs to CloudWatch log group using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3
<span class="token keyword">import</span> random
<span class="token keyword">import</span> time
<span class="token keyword">from</span> datetime <span class="token keyword">import</span> datetime

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'logs'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

messages <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">"Request Processed Successfully"</span><span class="token punctuation">,</span> <span class="token string">"Request Failed"</span><span class="token punctuation">,</span>
            <span class="token string">"Unknown Response"</span><span class="token punctuation">,</span> <span class="token string">"Email Sent"</span><span class="token punctuation">]</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_log_stream<span class="token punctuation">(</span>
    logGroupName<span class="token operator">=</span><span class="token string">'CRMBackendLogs'</span><span class="token punctuation">,</span>
    logStreamName<span class="token operator">=</span><span class="token string">'ApplicationLogs'</span>
<span class="token punctuation">)</span>

seq_token <span class="token operator">=</span> <span class="token boolean">None</span>

<span class="token keyword">for</span> i <span class="token keyword">in</span> <span class="token builtin">range</span><span class="token punctuation">(</span><span class="token number">10</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    log_event <span class="token operator">=</span> <span class="token punctuation">{</span>
        <span class="token string">'logGroupName'</span><span class="token punctuation">:</span> <span class="token string">'CRMBackendLogs'</span><span class="token punctuation">,</span>
        <span class="token string">'logStreamName'</span><span class="token punctuation">:</span> <span class="token string">'ApplicationLogs'</span><span class="token punctuation">,</span>
        <span class="token string">'logEvents'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
            <span class="token punctuation">{</span>
                <span class="token string">'timestamp'</span><span class="token punctuation">:</span> <span class="token builtin">int</span><span class="token punctuation">(</span><span class="token builtin">round</span><span class="token punctuation">(</span>time<span class="token punctuation">.</span>time<span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">*</span> <span class="token number">1000</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
                <span class="token string">'message'</span><span class="token punctuation">:</span> messages<span class="token punctuation">[</span>random<span class="token punctuation">.</span>randint<span class="token punctuation">(</span><span class="token number">0</span><span class="token punctuation">,</span> <span class="token number">3</span><span class="token punctuation">)</span><span class="token punctuation">]</span>
            <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
    <span class="token punctuation">}</span>

    <span class="token keyword">if</span> seq_token<span class="token punctuation">:</span>
        log_event<span class="token punctuation">[</span><span class="token string">'sequenceToken'</span><span class="token punctuation">]</span> <span class="token operator">=</span> seq_token

    response <span class="token operator">=</span> client<span class="token punctuation">.</span>put_log_events<span class="token punctuation">(</span><span class="token operator">**</span>log_event<span class="token punctuation">)</span>

    seq_token <span class="token operator">=</span> response<span class="token punctuation">[</span><span class="token string">'nextSequenceToken'</span><span class="token punctuation">]</span>
    time<span class="token punctuation">.</span>sleep<span class="token punctuation">(</span><span class="token number">1</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Logs generated successfully"</span><span class="token punctuation">)</span></blockquote></pre>
                Here’s an execution output:
                <img loading="lazy" width="1024" height="577" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22577%22%3E%3C/svg%3E" alt="1. Working with CloudWatch in Python using Boto3 - Sending logs to CloudWatch log group" class="ezlazyload wp-image-38561" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-CloudWatch-in-Python-using-Boto3-Sending-logs-to-CloudWatch-log-group-1024x577.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-CloudWatch-in-Python-using-Boto3-Sending-logs-to-CloudWatch-log-group-300x169.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-CloudWatch-in-Python-using-Boto3-Sending-logs-to-CloudWatch-log-group-768x432.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-CloudWatch-in-Python-using-Boto3-Sending-logs-to-CloudWatch-log-group-1536x865.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-CloudWatch-in-Python-using-Boto3-Sending-logs-to-CloudWatch-log-group-2048x1153.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/1.-Working-with-CloudWatch-in-Python-using-Boto3-Sending-logs-to-CloudWatch-log-group-1024x577.png">
                <figcaption>Sending logs to CloudWatch log group</figcaption>

                Here’s what the console looks like, with the ingested logs:
                <img loading="lazy" width="1024" height="499" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22499%22%3E%3C/svg%3E" alt="Sending logs to CloudWatch log group using Boto3: Console Output" class="ezlazyload wp-image-37510" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-log-events-1-1024x499.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-log-events-1-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-log-events-1-768x374.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-log-events-1-1536x748.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-log-events-1.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-log-events-1-1024x499.png">
                <figcaption>Sending logs to CloudWatch log group using Boto3: Console Output</figcaption>

                <h3 id="Reading-logs-from-CloudWatch">Reading logs from CloudWatch</h3>
                You can read ingested CloudWatch logs using the get_log_events() method while providing the log group, log stream name, start and end time. You can also read the logs from their earliest checkpoint.
                The following code reads the log events and prints them on the terminal:
                <br><br>
                <div class="code-title">Reading logs to CloudWatch log group using Boto3</div>
                <pre title="Reading logs to CloudWatch log group using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3
<span class="token keyword">import</span> random
<span class="token keyword">import</span> datetime

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'logs'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>get_log_events<span class="token punctuation">(</span>
    logGroupName<span class="token operator">=</span><span class="token string">'CRMBackendLogs'</span><span class="token punctuation">,</span>
    logStreamName<span class="token operator">=</span><span class="token string">'ApplicationLogs'</span><span class="token punctuation">,</span>
    startTime<span class="token operator">=</span><span class="token builtin">int</span><span class="token punctuation">(</span>datetime<span class="token punctuation">.</span>datetime<span class="token punctuation">(</span><span class="token number">2021</span><span class="token punctuation">,</span> <span class="token number">8</span><span class="token punctuation">,</span> <span class="token number">19</span><span class="token punctuation">,</span> <span class="token number">0</span><span class="token punctuation">,</span> <span class="token number">0</span><span class="token punctuation">)</span><span class="token punctuation">.</span>strftime<span class="token punctuation">(</span><span class="token string">'%s'</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token operator">*</span><span class="token number">1000</span><span class="token punctuation">,</span>
    endTime<span class="token operator">=</span><span class="token builtin">int</span><span class="token punctuation">(</span>datetime<span class="token punctuation">.</span>datetime<span class="token punctuation">(</span><span class="token number">2021</span><span class="token punctuation">,</span> <span class="token number">8</span><span class="token punctuation">,</span> <span class="token number">20</span><span class="token punctuation">,</span> <span class="token number">0</span><span class="token punctuation">,</span> <span class="token number">0</span><span class="token punctuation">)</span><span class="token punctuation">.</span>strftime<span class="token punctuation">(</span><span class="token string">'%s'</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token operator">*</span><span class="token number">1000</span><span class="token punctuation">,</span>
    limit<span class="token operator">=</span><span class="token number">123</span><span class="token punctuation">,</span>
    startFromHead<span class="token operator">=</span><span class="token boolean">True</span>
<span class="token punctuation">)</span>

log_events <span class="token operator">=</span> response<span class="token punctuation">[</span><span class="token string">'events'</span><span class="token punctuation">]</span>

<span class="token keyword">for</span> each_event <span class="token keyword">in</span> log_events<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>each_event<span class="token punctuation">)</span></blockquote></pre>
                Here, we have defined the limit to be 123. Hence the script will emit 123 lines or below, starting from the beginning.
                The output for this execution is:
                <img loading="lazy" width="1024" height="498" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22498%22%3E%3C/svg%3E" alt="Reading logs from CloudWatch using Boto3: Output" class="ezlazyload wp-image-37511" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-reading-logs-1024x498.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-reading-logs-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-reading-logs-768x373.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-reading-logs-1536x746.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-reading-logs.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-reading-logs-1024x498.png">
                <figcaption>Reading logs from CloudWatch using Boto3: Output</figcaption>

                <h3 id="Updating-CloudWatch-log-group">Updating CloudWatch log group</h3>
                There are two attributes of the CloudWatch log group which you can update: tags and the retention policy. You can modify these attributes using the following CloudWatch Logs client methods: tag_log_group() and put_retention_policy().
                Here’s an example of using those functions:
                <br><br>
                <div class="code-title">Updating CloudWatch log group using Boto3</div>
                <pre title="Updating CloudWatch log group using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'logs'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_log_groups<span class="token punctuation">(</span>logGroupNamePrefix<span class="token operator">=</span><span class="token string">'CRMBackend'</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>response<span class="token punctuation">[</span><span class="token string">'logGroups'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>tag_log_group<span class="token punctuation">(</span>
    logGroupName<span class="token operator">=</span><span class="token string">'CRMBackendLogs'</span><span class="token punctuation">,</span>
    tags<span class="token operator">=</span><span class="token punctuation">{</span>
        <span class="token string">'Frequency'</span><span class="token punctuation">:</span> <span class="token string">'120 seconds'</span><span class="token punctuation">,</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>put_retention_policy<span class="token punctuation">(</span>
          logGroupName<span class="token operator">=</span><span class="token string">'CRMBackendLogs'</span><span class="token punctuation">,</span>
          retentionInDays<span class="token operator">=</span><span class="token number">14</span>
<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_log_groups<span class="token punctuation">(</span>logGroupNamePrefix<span class="token operator">=</span><span class="token string">'CRMBackend'</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>response<span class="token punctuation">[</span><span class="token string">'logGroups'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">)</span>
</blockquote></pre>
                This generates the following output:
                <img loading="lazy" width="1024" height="497" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22497%22%3E%3C/svg%3E" alt="Updating CloudWatch log group using Boto3: Output" class="ezlazyload wp-image-37512" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-updating-log-groups-retention-policy-1024x497.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-updating-log-groups-retention-policy-300x145.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-updating-log-groups-retention-policy-768x372.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-updating-log-groups-retention-policy-1536x745.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-updating-log-groups-retention-policy.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-updating-log-groups-retention-policy-1024x497.png">
                <figcaption>Updating CloudWatch log group using Boto3: Output</figcaption>

                The tag update from the CloudWatch console is:
                <img loading="lazy" width="1024" height="498" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22498%22%3E%3C/svg%3E" alt="Updating CloudWatch log group using Boto3: Console Output" class="ezlazyload wp-image-37513" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-updating-log-groups-1024x498.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-updating-log-groups-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-updating-log-groups-768x374.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-updating-log-groups-1536x747.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-updating-log-groups.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-updating-log-groups-1024x498.png">
                <figcaption>Updating CloudWatch log group using Boto3: Console Output</figcaption>

                <h3 id="Deleting-CloudWatch-log-group">Deleting CloudWatch log group</h3>
                You can delete the created CloudWatch log group by invoking the delete_log_group() method:
                <br><br>
                <div class="code-title">Deleting CloudWatch log group using Boto3</div>
                <pre title="Deleting CloudWatch log group using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'logs'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>delete_log_group<span class="token punctuation">(</span>
    logGroupName<span class="token operator">=</span><span class="token string">'CRMFrontendLogs'</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Log Group deleted successfully"</span><span class="token punctuation">)</span></blockquote></pre>
                This will purge the log groups resulting in the following output:
                <img loading="lazy" width="1024" height="497" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22497%22%3E%3C/svg%3E" alt="Deleting CloudWatch log group using Boto3: Output" class="ezlazyload wp-image-37514" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-deleting-loggroup-1024x497.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-deleting-loggroup-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-deleting-loggroup-768x373.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-deleting-loggroup-1536x745.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-deleting-loggroup.png 1919w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-deleting-loggroup-1024x497.png">
                <figcaption>Deleting CloudWatch log group using Boto3: Output</figcaption>

                <h3 id="Working-with-CloudWatch-metrics-using-Boto3">Working with CloudWatch metrics using Boto3</h3>
                CloudWatch metrics represent data about your system’s resources and applications performance. CloudWatch service allows you to store and analyze metrics to get useful insights about your applications, systems, and business processes. And, the Boto3 library contains everything you need to achieve this goal.
                It all starts with the initialization of the CloudWatch client:
                <br><br>
                <div class="code-title">Working with CloudWatch metrics using Boto3</div>
                <pre title="Working with CloudWatch metrics using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'cloudwatch'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span></blockquote></pre>

                <h3 id="Sending-metric-to-CloudWatch">Sending metric to CloudWatch</h3>
                To send metrics to CloudWatch, you need to use the
                <meta charset="utf-8">put_metric_data() method if the CloudWatch client.
                For example, let’s create a sample metric to track the number of visitors to a web page. Here, the device type and the web page act as dimensions to calculate the metric. The dashboards contain the aggregated insights of CloudWatch.
                Here’s how we generate the sample metric and publish them to CloudWatch:
                <br><br>
                <div class="code-title">Sending metric to CloudWatch using Boto3</div>
                <pre title="Sending metric to CloudWatch using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3
<span class="token keyword">import</span> random

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'cloudwatch'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">for</span> i <span class="token keyword">in</span> <span class="token builtin">range</span><span class="token punctuation">(</span><span class="token number">100</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    response <span class="token operator">=</span> client<span class="token punctuation">.</span>put_metric_data<span class="token punctuation">(</span>
        Namespace<span class="token operator">=</span><span class="token string">'Web Metric'</span><span class="token punctuation">,</span>
        MetricData<span class="token operator">=</span><span class="token punctuation">[</span>
            <span class="token punctuation">{</span>
                <span class="token string">'MetricName'</span><span class="token punctuation">:</span> <span class="token string">'Number of visits'</span><span class="token punctuation">,</span>
                <span class="token string">'Dimensions'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                    <span class="token punctuation">{</span>
                        <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'Device'</span><span class="token punctuation">,</span>
                        <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'Android'</span>
                    <span class="token punctuation">}</span><span class="token punctuation">,</span> <span class="token punctuation">{</span>
                        <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'page'</span><span class="token punctuation">,</span>
                        <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'index.html'</span>
                    <span class="token punctuation">}</span>
                <span class="token punctuation">]</span><span class="token punctuation">,</span>
                <span class="token string">'Value'</span><span class="token punctuation">:</span> random<span class="token punctuation">.</span>randint<span class="token punctuation">(</span><span class="token number">10000</span><span class="token punctuation">,</span> <span class="token number">100000</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
                <span class="token string">'Unit'</span><span class="token punctuation">:</span> <span class="token string">'Count'</span>
            <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token punctuation">]</span>
    <span class="token punctuation">)</span>

    <span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                In the above code, we create a simple metric named <code>Web Metric</code>, which generates a random value corresponding to the device and page dimensions:
                <img loading="lazy" width="1024" height="500" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22500%22%3E%3C/svg%3E" alt="Sending metrics to CloudWatch using Boto3: Output" class="ezlazyload wp-image-37515" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-metric-1024x500.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-metric-300x147.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-metric-768x375.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-metric-1536x750.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-metric.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-metric-1024x500.png">
                <figcaption>Sending metrics to CloudWatch using Boto3: Output</figcaption>

                This will yield the following metrics:
                <img loading="lazy" width="1024" height="501" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22501%22%3E%3C/svg%3E" alt="Sending metric to CloudWatch using Boto3 : Console Output" class="ezlazyload wp-image-37518" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-create-metric-console-2-1024x501.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-create-metric-console-2-300x147.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-create-metric-console-2-768x376.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-create-metric-console-2-1536x752.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-create-metric-console-2.png 1912w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-create-metric-console-2-1024x501.png">
                <figcaption>Sending metrics to CloudWatch using Boto3: Console Output</figcaption>

                <h3 id="Listing-CloudWatch-metrics">Listing CloudWatch metrics</h3>

                <meta charset="utf-8">To list CloudWatch metrics, you need to use the
                <meta charset="utf-8">list_metrics() method of the CloudWatch client:

                <br><br>
                <div class="code-title">Listing CloudWatch metrics using Boto3</div>
                <pre title="Listing CloudWatch metrics using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'cloudwatch'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>list_metrics<span class="token punctuation">(</span><span class="token punctuation">)</span>
    
<span class="token keyword">for</span> each_metric <span class="token keyword">in</span> response<span class="token punctuation">[</span><span class="token string">'Metrics'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>each_metric<span class="token punctuation">)</span></blockquote></pre>
                This generates the following output:
                <img loading="lazy" width="1024" height="499" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22499%22%3E%3C/svg%3E" alt="Listing CloudWatch metrics using Boto3: Output" class="ezlazyload wp-image-37520" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-listing-metrics-1-1024x499.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-listing-metrics-1-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-listing-metrics-1-768x374.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-listing-metrics-1-1536x749.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-listing-metrics-1.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-listing-metrics-1-1024x499.png">
                <figcaption>Listing CloudWatch metrics using Boto3: Output</figcaption>

                <h3 id="Filtering-CloudWatch-metrics">Filtering CloudWatch metrics</h3>
                To filtering CloudWatch metrics, you need to use
                <meta charset="utf-8">the
                <meta charset="utf-8">list_metrics() method of the CloudWatch client. This method allows you to use the <code>Namespace</code> argument to filter metrics by the namespace.

                <br><br>
                <div class="code-title">Filtering CloudWatch metrics using Boto3</div>
                <pre title="Filtering CloudWatch metrics using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'cloudwatch'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>list_metrics<span class="token punctuation">(</span>
    Namespace<span class="token operator">=</span><span class="token string">'AWS/Usage'</span>
<span class="token punctuation">)</span>

<span class="token keyword">for</span> each_metric <span class="token keyword">in</span> response<span class="token punctuation">[</span><span class="token string">'Metrics'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>each_metric<span class="token punctuation">)</span>
</blockquote></pre>
                This results in output narrowed down to a specific namespace:
                <img loading="lazy" width="1024" height="499" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22499%22%3E%3C/svg%3E" alt="Filtering CloudWatch metrics using Boto3: Output" class="ezlazyload wp-image-37521" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filtering-metrics-1024x499.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filtering-metrics-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filtering-metrics-768x374.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filtering-metrics-1536x748.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filtering-metrics.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filtering-metrics-1024x499.png">
                <figcaption>Filtering CloudWatch metrics using Boto3: Output</figcaption>

                <h3 id="Getting-CloudWatch-metrics">Getting CloudWatch metrics</h3>
                To get CloudWatch metrics, you need to use the get_metric_data() method of the CloudWatch client. The arguments you need to provide are the query, start time, and end time. A list of queries presents in the <code>MetricDataQueries</code>.
                <br><br>
                <div class="code-title">Getting CloudWatch metrics using Boto3</div>
                <pre title="Getting CloudWatch metrics using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3
<span class="token keyword">from</span> datetime <span class="token keyword">import</span> datetime

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'cloudwatch'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>get_metric_data<span class="token punctuation">(</span>
    MetricDataQueries<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Id'</span><span class="token punctuation">:</span> <span class="token string">'identifier'</span><span class="token punctuation">,</span>
            <span class="token string">'MetricStat'</span><span class="token punctuation">:</span> <span class="token punctuation">{</span>
                <span class="token string">'Metric'</span><span class="token punctuation">:</span> <span class="token punctuation">{</span>
                    <span class="token string">'Namespace'</span><span class="token punctuation">:</span> <span class="token string">'Web Metric'</span><span class="token punctuation">,</span>
                    <span class="token string">'MetricName'</span><span class="token punctuation">:</span> <span class="token string">'Number of visits'</span><span class="token punctuation">,</span>
                    <span class="token string">'Dimensions'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                        <span class="token punctuation">{</span>
                           <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'Device'</span><span class="token punctuation">,</span>
                           <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'Android'</span>
                        <span class="token punctuation">}</span><span class="token punctuation">,</span> <span class="token punctuation">{</span>
                            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'page'</span><span class="token punctuation">,</span>
                            <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'index.html'</span>
                        <span class="token punctuation">}</span>
                    <span class="token punctuation">]</span>
                <span class="token punctuation">}</span><span class="token punctuation">,</span>
                <span class="token string">'Period'</span><span class="token punctuation">:</span> <span class="token number">300</span><span class="token punctuation">,</span>
                <span class="token string">'Stat'</span><span class="token punctuation">:</span> <span class="token string">'Sum'</span><span class="token punctuation">,</span>
                <span class="token string">'Unit'</span><span class="token punctuation">:</span> <span class="token string">'Count'</span>
            <span class="token punctuation">}</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
    StartTime<span class="token operator">=</span>datetime<span class="token punctuation">(</span><span class="token number">2021</span><span class="token punctuation">,</span> <span class="token number">8</span><span class="token punctuation">,</span> <span class="token number">17</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
    EndTime<span class="token operator">=</span>datetime<span class="token punctuation">(</span><span class="token number">2021</span><span class="token punctuation">,</span> <span class="token number">8</span><span class="token punctuation">,</span> <span class="token number">19</span><span class="token punctuation">)</span>
<span class="token punctuation">)</span>


<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token builtin">sum</span><span class="token punctuation">(</span>response<span class="token punctuation">[</span><span class="token string">'MetricDataResults'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string">'Values'</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">)</span>
</blockquote></pre>
                The code generates a series of CloudWatch metrics as:
                <img loading="lazy" width="1024" height="499" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22499%22%3E%3C/svg%3E" alt="Getting CloudWatch metrics using Boto3: Output" class="ezlazyload wp-image-37548" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-get-metric-1024x499.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-get-metric-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-get-metric-768x374.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-get-metric-1536x748.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-get-metric.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-get-metric-1024x499.png">
                <figcaption>Getting CloudWatch metrics using Boto3: Output</figcaption>

                <h3 id="Deleting-CloudWatch-metric-using-Boto3">Deleting CloudWatch metric using Boto3</h3>
                You can’t delete the CloudWatch metrics either through Web UI or by using Boto3.

                <h3 id="Working-with-CloudWatch-alarms-using-Boto3">Working with CloudWatch alarms using Boto3</h3>
                You can define meaningful alarms to monitor the resources or applications based on CloudWatch metrics. Boto3’s <code>cloudwatch</code> client contains all required methods to work with CloudWatch alarms.

                <h3 id="Creating-CloudWatch-alarm">Creating CloudWatch alarm</h3>
                To create a CloudWatch alarm, you need to use the put_metric_alarm() method of the CloudWatch client.
                The following code creates an alarm for the previously generated CloudWatch metric:
                <br><br>
                <div class="code-title">Creating CloudWatch alarm using Boto3</div>
                <pre title="Creating CloudWatch alarm using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'cloudwatch'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

<span class="token comment"># Create alarm</span>
cloudwatch<span class="token punctuation">.</span>put_metric_alarm<span class="token punctuation">(</span>
    AlarmName<span class="token operator">=</span><span class="token string">'Web_Traffic_Threshold'</span><span class="token punctuation">,</span>
    ComparisonOperator<span class="token operator">=</span><span class="token string">'GreaterThanThreshold'</span><span class="token punctuation">,</span>
    EvaluationPeriods<span class="token operator">=</span><span class="token number">1</span><span class="token punctuation">,</span>
    MetricName<span class="token operator">=</span><span class="token string">'Number of visits'</span><span class="token punctuation">,</span>
    Namespace<span class="token operator">=</span><span class="token string">'Web Metric'</span><span class="token punctuation">,</span>
    Period<span class="token operator">=</span><span class="token number">60</span><span class="token punctuation">,</span>
    Statistic<span class="token operator">=</span><span class="token string">'Sum'</span><span class="token punctuation">,</span>
    Threshold<span class="token operator">=</span><span class="token number">5000</span><span class="token punctuation">,</span>
    ActionsEnabled<span class="token operator">=</span><span class="token boolean">False</span><span class="token punctuation">,</span>
    AlarmDescription<span class="token operator">=</span><span class="token string">'Web Traffic Monitoring'</span><span class="token punctuation">,</span>
    Dimensions<span class="token operator">=</span><span class="token punctuation">[</span>
         <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'Device'</span><span class="token punctuation">,</span>
            <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'Android'</span>
         <span class="token punctuation">}</span><span class="token punctuation">,</span> <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'page'</span><span class="token punctuation">,</span>
            <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'index.html'</span>
         <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>
</blockquote></pre>
                When the threshold for the number of visits for dimensions crosses 5000, the alarm goes on:
                <img loading="lazy" width="1024" height="498" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22498%22%3E%3C/svg%3E" alt="CloudWatch alarm when threshold crosses 5000 within 1 minute" class="ezlazyload wp-image-37608" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm1-1024x498.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm1-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm1-768x374.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm1-1536x747.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm1.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm1-1024x498.png">
                <figcaption>CloudWatch alarm when threshold crosses 5000 within 1 minute</figcaption>
                <img loading="lazy" width="1024" height="501" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22501%22%3E%3C/svg%3E" alt="CloudWatch alarm when threshold crosses 5000 within 1 minute - Zoomed-In view" class="ezlazyload wp-image-37611" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm2-1024x501.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm2-300x147.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm2-768x376.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm2-1536x751.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm2.png 1918w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm2-1024x501.png">
                <figcaption>CloudWatch alarm when threshold crosses 5000 within 1 minute – Zoomed-In view</figcaption>

                <h3 id="Updating-CloudWatch-alarm">Updating CloudWatch alarm</h3>
                To update a CloudWatch alarm, you need to use the put_metric_alarm() method. A new call of this function with the new values will redefine an alarm if it already exists.
                In the current scenario, we are modifying the alarm threshold from 5000 to 6000.
                <br><br>
                <div class="code-title">Updating CloudWatch alarm using Boto3</div>
                <pre title="Updating CloudWatch alarm using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'cloudwatch'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

<span class="token comment"># Create alarm</span>
cloudwatch<span class="token punctuation">.</span>put_metric_alarm<span class="token punctuation">(</span>
    AlarmName<span class="token operator">=</span><span class="token string">'Web_Traffic_Threshold'</span><span class="token punctuation">,</span>
    ComparisonOperator<span class="token operator">=</span><span class="token string">'GreaterThanThreshold'</span><span class="token punctuation">,</span>
    EvaluationPeriods<span class="token operator">=</span><span class="token number">1</span><span class="token punctuation">,</span>
    MetricName<span class="token operator">=</span><span class="token string">'Number of visits'</span><span class="token punctuation">,</span>
    Namespace<span class="token operator">=</span><span class="token string">'Web Metric'</span><span class="token punctuation">,</span>
    Period<span class="token operator">=</span><span class="token number">60</span><span class="token punctuation">,</span>
    Statistic<span class="token operator">=</span><span class="token string">'Sum'</span><span class="token punctuation">,</span>
    Threshold<span class="token operator">=</span><span class="token number">6000</span><span class="token punctuation">,</span>
    ActionsEnabled<span class="token operator">=</span><span class="token boolean">False</span><span class="token punctuation">,</span>
    AlarmDescription<span class="token operator">=</span><span class="token string">'Web Traffic Monitoring'</span><span class="token punctuation">,</span>
    Dimensions<span class="token operator">=</span><span class="token punctuation">[</span>
         <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'Device'</span><span class="token punctuation">,</span>
            <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'Android'</span>
         <span class="token punctuation">}</span><span class="token punctuation">,</span> <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'page'</span><span class="token punctuation">,</span>
            <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'index.html'</span>
         <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>
</blockquote></pre>
                Upon executing this will update the CloudWatch alarm as shown below:
                <img loading="lazy" width="1024" height="495" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22495%22%3E%3C/svg%3E" alt="CloudWatch alarm when threshold is updated to 6000" class="ezlazyload wp-image-37613" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm3-1-1024x495.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm3-1-300x145.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm3-1-768x371.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm3-1-1536x742.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm3-1.png 1919w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm3-1-1024x495.png">
                <figcaption>CloudWatch alarm when a threshold is updated to 6000</figcaption>

                <h3 id="Deleting-CloudWatch-alarm">Deleting CloudWatch alarm</h3>
                You can delete CloudWatch alarms by using the delete_alarms() method of the CloudWatch client. You can pass in multiple alarm names as a list argument and delete those alarms within the same API call.<span id="ezoic-pub-ad-placeholder-144" class="ezoic-adpicker-ad"></span>
                The code example is shown below:
                <br><br>
                <div class="code-title">Deleting CloudWatch alarm using Boto3</div>
                <pre title="Deleting CloudWatch alarm using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'cloudwatch'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> cloudwatch<span class="token punctuation">.</span>delete_alarms<span class="token punctuation">(</span>
    AlarmNames<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token string">'Web_Traffic_Threshold'</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Alarm deleted successfully"</span><span class="token punctuation">)</span></blockquote></pre>
                <img loading="lazy" width="1024" height="498" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22498%22%3E%3C/svg%3E" alt="Delete CloudWatch Alarm" class="ezlazyload wp-image-37617" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm-deletion-1-1024x498.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm-deletion-1-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm-deletion-1-768x374.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm-deletion-1-1536x748.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm-deletion-1.png 1919w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-alarm-deletion-1-1024x498.png">
                <figcaption>Delete CloudWatch Alarm</figcaption>

                If the deletion doesn’t happen instantly, wait for a few minutes and try refreshing the Alarm page again.

                <h3 id="Working-with-CloudWatch-events-using-Boto3">Working with CloudWatch events using Boto3</h3>
                </span></span><strong>CloudWatch Events</strong>&nbsp;(now known as <strong>Amazon EventBridge</strong>) creates rule-based triggers and schedules. In this section, we will create CloudWatch events based on the custom metrics we’ve created.

                <h3 id="Creating-CloudWatch-event-rule">Creating CloudWatch event rule</h3>
                You can create the EventBridge (CloudWatch) event rule by using the put_rule() method of the EventBridge client. This method takes the <code>EventPattern</code> argument to define which source to watch out for. Depending on the use-case, the user selects source and detail-type for the rule.
                In the following scenario, we’ll monitor the alarm state change in CloudWatch and invoke a Lambda function in case of the event:
                <br><br>
                <div class="code-title">Creating CloudWatch event rule using Boto3</div>
                <pre title="Creating CloudWatch event rule using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'events'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> cloudwatch<span class="token punctuation">.</span>put_rule<span class="token punctuation">(</span>
    Name<span class="token operator">=</span><span class="token string">'AlarmStateChange'</span><span class="token punctuation">,</span>
    EventPattern<span class="token operator">=</span><span class="token string">'{"source": ["aws.cloudwatch"], "detail-type": ["CloudWatch Alarm State Change"]}'</span><span class="token punctuation">,</span>
    State<span class="token operator">=</span><span class="token string">'ENABLED'</span>
<span class="token punctuation">)</span>

response <span class="token operator">=</span> cloudwatch<span class="token punctuation">.</span>put_targets<span class="token punctuation">(</span>
    Rule<span class="token operator">=</span><span class="token string">'AlarmStateChange'</span><span class="token punctuation">,</span>
    Targets<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Arn'</span><span class="token punctuation">:</span> <span class="token string">'arn:aws:lambda:us-west-2:585584209241:function:DemoFunction'</span><span class="token punctuation">,</span>
            <span class="token string">'Id'</span><span class="token punctuation">:</span> <span class="token string">'myCloudWatchEventsTarget'</span><span class="token punctuation">,</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                The above code generates the rule and the target in the output shown below:
                <img loading="lazy" width="1024" height="498" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22498%22%3E%3C/svg%3E" alt="Creating CloudWatch event rule using Boto3: Output" class="ezlazyload wp-image-37620" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-create-event-rule-1-1024x498.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-create-event-rule-1-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-create-event-rule-1-768x374.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-create-event-rule-1-1536x747.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-create-event-rule-1.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-create-event-rule-1-1024x498.png">
                <figcaption>Creating CloudWatch event rule using Boto3: Output</figcaption>

                <img loading="lazy" width="1024" height="500" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22500%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-37632" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-rules-1-1024x500.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-rules-1-300x146.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-rules-1-768x375.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-rules-1-1536x750.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-rules-1.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-creating-rules-1-1024x500.png">

                <h3 id="Filtering-CloudWatch-event-rules">Filtering CloudWatch event rules</h3>
                You can filter EventBridge rules based on their prefixes by calling the list_rules() method if the EventBridge client. This can help narrow down to a specific set of rules and filtering common name holders.
                In the following example, we’re filtering rules based on the <code>NamePrefix</code>:
                <br><br>
                <div class="code-title">Filtering CloudWatch event rule using Boto3</div>
                <pre title="Filtering CloudWatch event rule using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'events'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> cloudwatch<span class="token punctuation">.</span>list_rules<span class="token punctuation">(</span>
    NamePrefix<span class="token operator">=</span><span class="token string">'Alarm'</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span>
</blockquote></pre>
                Here’s an execution output:
                <img loading="lazy" width="1024" height="501" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22501%22%3E%3C/svg%3E" alt="Filtering CloudWatch event rule using Boto3: Output" class="ezlazyload wp-image-37621" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filter-rules-1024x501.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filter-rules-300x147.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filter-rules-768x376.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filter-rules-1536x752.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filter-rules.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-filter-rules-1024x501.png">
                <figcaption>Filtering CloudWatch event rule using Boto3: Output</figcaption>

                <h3 id="Working-with-CloudWatch-dashboards-using-Boto3">Working with CloudWatch dashboards using Boto3</h3>
                Now, we have the logs, metrics, alarms in place. And we can create a CloudWatch dashboard to help monitor all our resources.
                Boto3 provides functions to dynamically create, update and delete these dashboards in an automated way.

                <h3 id="Creating-CloudWatch-dashboard">Creating CloudWatch dashboard</h3>
                To create a
                <meta charset="utf-8">CloudWatch dashboard, you need to use the
                <meta charset="utf-8">put_dashboard() method of the CloudWatch client.

                Two arguments define the dashboard: <code>DashboardName</code> and <code>DashboardBody</code>.
                The <code>DashboardBody</code> contains multiple widgets. Each widget has its own set of characteristics, such as the dimensions, the location, the type of visualization, and the region where these metrics are present.
                In the following example, we’ll create a stacked time series widget to visualize the <code>Web Metric</code> that we had created earlier:
                <br><br>
                <div class="code-title">Creating CloudWatch dashboard using Boto3</div>
                <pre title="Creating CloudWatch dashboard using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'cloudwatch'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

dash_body <span class="token operator">=</span> <span class="token triple-quoted-string string">"""
{
    "widgets": [
        {
            "type": "metric",
            "x": 0,
            "y": 0,
            "width": 6,
            "height": 6,
            "properties": {
                "view": "timeSeries",
                "stacked": true,
                "metrics": [
                    [ "Web Metric", "Number of visits",
                        "Device", "Android", "page", "index.html" ]
                ],
                "region": "us-west-2",
                "title": "Number of visits"
            }
        }
    ]
}
"""</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>put_dashboard<span class="token punctuation">(</span>
    DashboardName<span class="token operator">=</span><span class="token string">'test_dash'</span><span class="token punctuation">,</span>
    DashboardBody<span class="token operator">=</span>dash_body
<span class="token punctuation">)</span>
</blockquote></pre>
                <style>
                    .netboard-2-multi-151 {
                        border: none !important;
                        display: block !important;
                        float: none;
                        line-height: 0;
                        margin-bottom: 15px !important;
                        margin-left: 0 !important;
                        margin-right: 0 !important;
                        margin-top: 15px !important;
                        min-height: 250px;
                        min-width: 250px;
                        padding: 0;
                        text-align: center !important
                    }
                </style>
                The code above will create the following dashboard embedded with the widget. It will take less than a minute for the data point to appear on the widget.
                <img loading="lazy" width="1024" height="500" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22500%22%3E%3C/svg%3E" alt="Creating CloudWatch dashboard using Boto3: Console - Number of Visits widget" class="ezlazyload wp-image-37635" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-dashboard1-1024x500.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-dashboard1-300x147.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-dashboard1-768x375.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-dashboard1-1536x750.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-dashboard1.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-dashboard1-1024x500.png">
                <figcaption>Creating CloudWatch dashboard using Boto3: Console – Number of Visits widget</figcaption>

                <h3 id="Updating-CloudWatch-dashboard">Updating CloudWatch dashboard</h3>

                <meta charset="utf-8">To update the CloudWatch dashboard, you need to use
                <meta charset="utf-8">the
                <meta charset="utf-8">put_dashboard() method of the CloudWatch client. This method can update the existing dashboard widgets if it already exists.

                In the following example, we’ll increase the widget’s dimensions to a larger number using the same function call mentioned in the previous section.
                <br><br>
                <div class="code-title">Updating CloudWatch dashboard using Boto3</div>
                <pre title="Updating CloudWatch dashboard using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'cloudwatch'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

dash_body <span class="token operator">=</span> <span class="token triple-quoted-string string">"""
{
    "widgets": [
        {
            "type": "metric",
            "x": 0,
            "y": 0,
            "width": 12,
            "height": 12,
            "properties": {
                "view": "timeSeries",
                "stacked": true,
                "metrics": [
                    [ "Web Metric", "Number of visits", "Device", "Android", "page", "index.html" ]
                ],
                "region": "us-west-2",
                "title": "Number of visits"
            }
        }
    ]
}
"""</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>put_dashboard<span class="token punctuation">(</span>
    DashboardName<span class="token operator">=</span><span class="token string">'test_dash'</span><span class="token punctuation">,</span>
    DashboardBody<span class="token operator">=</span>dash_body
<span class="token punctuation">)</span></blockquote></pre>
                This expands the size of the widget compared to the previous section:
                <img loading="lazy" width="1024" height="501" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22501%22%3E%3C/svg%3E" alt="Updating CloudWatch dashboard using Boto3: Console - Number of Visits widget" class="ezlazyload wp-image-37636" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-dashboard2-1024x501.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-dashboard2-300x147.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-dashboard2-768x376.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-dashboard2-1536x752.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-dashboard2.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/Working-with-CloudWatch-in-Python-using-Boto3-dashboard2-1024x501.png">
                <figcaption>Updating CloudWatch dashboard using Boto3: Console – Number of Visits widget</figcaption>

                <h3 id="Deleting-CloudWatch-dashboard">Deleting CloudWatch dashboard</h3>
                To delete a
                <meta charset="utf-8">CloudWatch dashboard, you need to use the delete_dashboards() method of the CloudWatch client.

                You can provide names of dashboards in the form of the Python list:
                <br><br>
                <div class="code-title">Deleting CloudWatch dashboard using Boto3</div>
                <pre title="Deleting CloudWatch dashboard using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-west-2"</span>

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'cloudwatch'</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>delete_dashboards<span class="token punctuation">(</span>
    DashboardNames<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token string">'test_dash'</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">)</span></blockquote></pre>

                <h3 id="h-summary">Summary</h3>
                In this article, we’ve covered examples of using Boto3 for writing, exploring, monitoring, and managing logs, metrics, and events in AWS CloudWatch. We’ve also looked at creative ways to bring out useful visualizations using CloudWatch dashboards.
            </div>
        </div>
        <?php require "../../../../../templates/footer_outer.php" ?>
    </div>

    <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script defer src="../../../../../assets/fontawesome/js/all.min.js"></script><!-- footer social icons -->
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