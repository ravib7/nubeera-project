<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra DynamoDB in Boto3</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Boto3 DynamoDB">

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
                <strong class="px-2" style="font-size: 1.125rem;">DynamoDb in Python</strong><br><br>
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">DYNAMODB IN PYTHON USING BOTO3</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../">CloudOps</a></li>
                <li class="breadcrumb-item active">Boto3</li>

            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h3>In this article </h3>
                <ul>
                    <li><a href="#h-prerequisites" data-level="2">Prerequisites</a></li>
                    <li><a href="#h-introduction-to-amazon-dynamodb" data-level="2">Introduction to Amazon DynamoDB</a></li>
                    <li><a href="#h-create-tables-in-dynamodb-using-boto3" data-level="2">Create Tables in DynamoDB using Boto3</a></li>
                    <li><a href="#h-list-tables-in-dynamodb-using-boto3" data-level="2">List Tables in DynamoDB using Boto3</a></li>
                    <li><a href="#h-crud-operations-in-dynamodb-using-boto3" data-level="2">CRUD Operations in DynamoDB using Boto3</a>
                        <ul>
                            <li><a href="#h-create-items" data-level="3">Create Items</a></li>
                            <li><a href="#h-batch-write-items" data-level="3">Batch Write Items</a></li>
                            <li><a href="#h-read-items" data-level="3">Read Items</a></li>
                            <li><a href="#h-update-items" data-level="3">Update Items</a></li>
                            <li><a href="#h-delete-items" data-level="3">Delete Items</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-query-tables-in-dynamodb-using-boto3" data-level="2">Query Tables in DynamoDB using Boto3</a></li>
                    <li><a href="#h-scan-tables-in-dynamodb-using-boto3" data-level="2">Scan Tables in DynamoDB using Boto3</a></li>
                    <li><a href="#h-global-secondary-index" data-level="2">Global Secondary Index</a>
                        <ul>
                            <li><a href="#h-creating-a-global-secondary-index-using-boto3" data-level="3">Creating a Global Secondary Index using Boto3</a></li>
                            <li><a href="#h-querying-a-global-secondary-index" data-level="3">Querying a Global Secondary Index</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-backup-a-dynamodb-table-using-boto3" data-level="2">Backup a DynamoDB Table using Boto3</a></li>
                    <li><a href="#h-delete-a-dynamodb-table-using-boto3" data-level="2">Delete a DynamoDB Table using Boto3</a></li>
                    <li><a href="#h-summary" data-level="2">Summary</a></li>
                </ul><br>
                Amazon DynamoDB is a key-value and document database that is provided as a fully managed service in AWS which provides the possibility to build applications handling millions of requests and can scale to meet the demands of the market. Amazon DynamoDB has been proven efficient for use in various industries ranging from consumer apps to enterprise apps. In this article, we are going to look at how to create tables, load data, perform CRUD operations, and query tables in AWS DynamoDB by using Python and Boto3 library.
                <h3 id="h-prerequisites">Prerequisites</h3>
                To start working with DynamoDB using Python, you need to first set up your Python environment.
                In summary, this is what you will need:
                <ul>
                    <li>Python 3</li>
                    <li>Boto3</li>
                    <li>AWS CLI tools</li>
                </ul>
                Alternatively, you can quickly set up and use Cloud9 IDE.

                <h3 id="h-introduction-to-amazon-dynamodb">Introduction to Amazon DynamoDB</h3>
                Amazon DynamoDB enables the building of flexible microservices, serverless web applications, mobile backends, and it acts as the highly scalable and fully managed database for applications.
                The most interesting topic of DynamoDB is how to design your tables to get maximum performance and efficiency from DynamoDB service. Regardless of your current experience I highly recommend you a couple of videos on that topic before getting started:
                Now, as soon as the concepts of designing DynamoDB tables are covered, you may take a look at how to start working with this service in Python by using the Boto3 library.<span id="ezoic-pub-ad-placeholder-121" class="ezoic-adpicker-ad"></span><span class="ezoic-ad medrectangle-4 medrectangle-4121 adtester-container adtester-container-121" data-ez-name="hands_on_cloud-medrectangle-4" style="width: 100%; height: auto;"><span id="div-gpt-ad-hands_on_cloud-medrectangle-4-0" ezaw="336" ezah="280" style="position: relative; z-index: 0; padding: 0px; width: 100%; max-width: 1200px; min-height: 250px; min-width: 970px; margin-left: auto !important; margin-right: auto !important; height: auto;" class="ezoic-ad ezfound" data-google-query-id="CPK_o-71xvQCFWWhZgIdXf8HgA">

                        <h3 id="h-create-tables-in-dynamodb-using-boto3">Create Tables in DynamoDB using Boto3</h3>
                        First, import the boto3 module and then create a Boto3 DynamoDB resource.
                        Next, create a table named <code>Employees</code> with a primary key that has the following attributes
                        <code>Name</code> a partition key with <code>AttributeType</code> set to <code>S</code> for string.
                        <code>Email</code> a sort key with <code>AttributeType</code> set to <code>S</code> for string.
                        <code>ProvisionedThroughput</code> means the maximum number of consistent reads and writes per second on your table.
                        <br><br>
                        <div class="code-title">Create Table</div>
                        <pre title="Create Table" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

dynamodb <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>

table <span class="token operator">=</span> dynamodb<span class="token punctuation">.</span>create_table <span class="token punctuation">(</span>
    TableName <span class="token operator">=</span> <span class="token string">'Employees'</span><span class="token punctuation">,</span>
       KeySchema <span class="token operator">=</span> <span class="token punctuation">[</span>
           <span class="token punctuation">{</span>
               <span class="token string">'AttributeName'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
               <span class="token string">'KeyType'</span><span class="token punctuation">:</span> <span class="token string">'HASH'</span>
           <span class="token punctuation">}</span><span class="token punctuation">,</span>
           <span class="token punctuation">{</span>
               <span class="token string">'AttributeName'</span><span class="token punctuation">:</span> <span class="token string">'Email'</span><span class="token punctuation">,</span>
               <span class="token string">'KeyType'</span><span class="token punctuation">:</span> <span class="token string">'RANGE'</span>
           <span class="token punctuation">}</span>
           <span class="token punctuation">]</span><span class="token punctuation">,</span>
           AttributeDefinitions <span class="token operator">=</span> <span class="token punctuation">[</span>
               <span class="token punctuation">{</span>
                   <span class="token string">'AttributeName'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
                   <span class="token string">'AttributeType'</span><span class="token punctuation">:</span> <span class="token string">'S'</span>
               <span class="token punctuation">}</span><span class="token punctuation">,</span>
               <span class="token punctuation">{</span>
                   <span class="token string">'AttributeName'</span><span class="token punctuation">:</span><span class="token string">'Email'</span><span class="token punctuation">,</span>
                   <span class="token string">'AttributeType'</span><span class="token punctuation">:</span> <span class="token string">'S'</span>
               <span class="token punctuation">}</span>
            <span class="token punctuation">]</span><span class="token punctuation">,</span>
            ProvisionedThroughput<span class="token operator">=</span><span class="token punctuation">{</span>
                <span class="token string">'ReadCapacityUnits'</span><span class="token punctuation">:</span><span class="token number">1</span><span class="token punctuation">,</span>
                <span class="token string">'WriteCapacityUnits'</span><span class="token punctuation">:</span><span class="token number">1</span>
            <span class="token punctuation">}</span>
          
    <span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>table<span class="token punctuation">)</span></blockquote></pre>
                        Here is the execution output:
                        <img loading="lazy" width="970" height="850" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22970%22 height=%22850%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38410" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/1-3.png 970w,https://hands-on.cloud/wp-content/uploads/2021/08/1-3-300x263.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/1-3-768x673.png 768w" sizes="(max-width: 970px) 100vw, 970px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/1-3.png">

                        <h3 id="h-list-tables-in-dynamodb-using-boto3">List Tables in DynamoDB using Boto3</h3>
                        To list all tables in DynamoDB, use the <code>dynamodb.tables.all()</code> method.
                        <br><br>
                        <div class="code-title">List Tables</div>
                        <pre title="List Tables" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

dynamodb <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token builtin">list</span><span class="token punctuation">(</span>dynamodb<span class="token punctuation">.</span>tables<span class="token punctuation">.</span><span class="token builtin">all</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">)</span></blockquote></pre>
                        Here is the execution output.
                        <img loading="lazy" width="926" height="468" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22926%22 height=%22468%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-36191" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/3.png 926w,https://hands-on.cloud/wp-content/uploads/2021/08/3-300x152.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/3-768x388.png 768w" sizes="(max-width: 926px) 100vw, 926px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/3.png">
                        <h3 id="h-crud-operations-in-dynamodb-using-boto3">CRUD Operations in DynamoDB using Boto3</h3>
                        Tables, items, and attributes are the core components that make up DynamoDB. A table is a collection of items and each item is a collection of attributes.
                        In the following section, we are going to look at the four basic ways to perform CRUD operations on Items in DynamoDB Tables.

                        <h3 id="h-create-items">Create Items</h3>
                        To add a new item to a table, use the put_item() method and add an item with a primary of Name and Email as shown in the example.
                        <br><br>
                        <div class="code-title">Create Items</div>
                        <pre title="Create Items" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

dynamodb <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>

table <span class="token operator">=</span> dynamodb<span class="token punctuation">.</span>Table<span class="token punctuation">(</span><span class="token string">'Employees'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> table<span class="token punctuation">.</span>put_item<span class="token punctuation">(</span>
Item <span class="token operator">=</span> <span class="token punctuation">{</span> 
     <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'Kelvin Galabuzi'</span><span class="token punctuation">,</span>
     <span class="token string">'Email'</span><span class="token punctuation">:</span> <span class="token string">'kelvingalabuzi@nube.era'</span>
       <span class="token punctuation">}</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                        Here is the Execution output:
                        <img loading="lazy" width="1024" height="351" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22351%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38432" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/4-1-1024x351.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/4-1-300x103.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/4-1-768x264.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/4-1-1536x527.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/4-1.png 1798w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/4-1-1024x351.png">

                        <h3 id="h-batch-write-items">Batch Write Items</h3>
                        In addition to the put item, DynamoDb also has the batch_writer() method that can be used to create multiple items in a table using a single request.
                        <br><strong><em>NB:</em></strong> You can also add multiple attributes to items as required.
                        <br><br>
                        <div class="code-title">Batch Write Items</div>
                        <pre title="Batch Write Items" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

dynamodb <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>

table <span class="token operator">=</span> dynamodb<span class="token punctuation">.</span>Table<span class="token punctuation">(</span><span class="token string">'Employees'</span><span class="token punctuation">)</span>

<span class="token keyword">with</span> table<span class="token punctuation">.</span>batch_writer<span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token keyword">as</span> batch<span class="token punctuation">:</span>
    batch<span class="token punctuation">.</span>put_item<span class="token punctuation">(</span>Item<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">"Name"</span><span class="token punctuation">:</span> <span class="token string">"Luzze John"</span><span class="token punctuation">,</span> <span class="token string">"Email"</span><span class="token punctuation">:</span> <span class="token string">"john@nube.era"</span><span class="token punctuation">,</span>
        <span class="token string">"Department"</span><span class="token punctuation">:</span> <span class="token string">"IT"</span><span class="token punctuation">,</span> <span class="token string">"Section"</span><span class="token punctuation">:</span> <span class="token punctuation">{</span> <span class="token string">"QA"</span><span class="token punctuation">:</span> <span class="token string">"QA-1"</span><span class="token punctuation">,</span> <span class="token string">"Reporting Line"</span><span class="token punctuation">:</span> <span class="token string">"L1"</span> <span class="token punctuation">}</span> <span class="token punctuation">}</span><span class="token punctuation">)</span>
    batch<span class="token punctuation">.</span>put_item<span class="token punctuation">(</span>Item<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">"Name"</span><span class="token punctuation">:</span> <span class="token string">"Lugugo Joshua"</span><span class="token punctuation">,</span> <span class="token string">"Email"</span><span class="token punctuation">:</span> <span class="token string">"joshua@nube.era"</span><span class="token punctuation">,</span>
        <span class="token string">"Department"</span><span class="token punctuation">:</span> <span class="token string">"IT"</span><span class="token punctuation">,</span> <span class="token string">"Section"</span><span class="token punctuation">:</span> <span class="token punctuation">{</span> <span class="token string">"Development"</span><span class="token punctuation">:</span> <span class="token string">"SD-1"</span><span class="token punctuation">,</span> <span class="token string">"Reporting Line"</span><span class="token punctuation">:</span> <span class="token string">"L1"</span> <span class="token punctuation">}</span> <span class="token punctuation">}</span><span class="token punctuation">)</span>
    batch<span class="token punctuation">.</span>put_item<span class="token punctuation">(</span>Item<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">"Name"</span><span class="token punctuation">:</span> <span class="token string">"Robert Nsamba"</span><span class="token punctuation">,</span> <span class="token string">"Email"</span><span class="token punctuation">:</span> <span class="token string">"robert@nube.era"</span><span class="token punctuation">,</span>
        <span class="token string">"Department"</span><span class="token punctuation">:</span> <span class="token string">"IT"</span><span class="token punctuation">,</span> <span class="token string">"Section"</span><span class="token punctuation">:</span> <span class="token punctuation">{</span> <span class="token string">"PM"</span><span class="token punctuation">:</span> <span class="token string">"PM-1"</span><span class="token punctuation">,</span> <span class="token string">"Reporting Line"</span><span class="token punctuation">:</span> <span class="token string">"L1"</span> <span class="token punctuation">}</span> <span class="token punctuation">}</span><span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>batch<span class="token punctuation">)</span></blockquote></pre>
                        Here is the execution output:
                        <img loading="lazy" width="1024" height="526" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22526%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38696" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/8-1024x526-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/8-300x154-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/8-768x394-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/8.jpg 1327w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/8-1024x526-1.jpg">

                        <h3 id="h-read-items">Read Items</h3>
                        To read a single item from the table, use the get_item() method with the key value pair of items in your table.
                        <br><br>
                        <div class="code-title">Read Items</div>
                        <pre title="Read Items" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

dynamodb <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>

table <span class="token operator">=</span> dynamodb<span class="token punctuation">.</span>Table<span class="token punctuation">(</span><span class="token string">'Employees'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> table<span class="token punctuation">.</span>get_item<span class="token punctuation">(</span>
    Key<span class="token operator">=</span><span class="token punctuation">{</span>
        <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'Kelvin Galabuzi'</span><span class="token punctuation">,</span>
        <span class="token string">'Email'</span><span class="token punctuation">:</span> <span class="token string">'kelvingalabuzi@nube.era'</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">[</span><span class="token string">'Item'</span><span class="token punctuation">]</span><span class="token punctuation">)</span></blockquote></pre>
                        Here is the Execution output:
                        <img loading="lazy" width="1024" height="592" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22592%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38542" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/6-1024x592-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/6-300x173-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/6-768x444-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/6.jpg 1173w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/6-1024x592-1.jpg">
                        To all read Items in the table, you can use the scan() method to return all items in the table.
                        <br><br>
                        <div class="code-title">Scan Items</div>
                        <pre title="Scan Items" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

dynamodb <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>

table <span class="token operator">=</span> dynamodb<span class="token punctuation">.</span>Table<span class="token punctuation">(</span><span class="token string">'Employees'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> table<span class="token punctuation">.</span>scan<span class="token punctuation">(</span><span class="token punctuation">)</span>
response<span class="token punctuation">[</span><span class="token string">'Items'</span><span class="token punctuation">]</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                        Here is the Execution output:
                        <img loading="lazy" width="1024" height="373" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22373%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38697" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/5-1-1024x373.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/5-1-300x109.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/5-1-768x280.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/5-1-1536x559.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/5-1.png 1793w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/5-1-1024x373.png">

                        <h3 id="h-update-items">Update Items</h3>
                        To update items, you can use the update_item() method to edit an existing item’s attributes. You can also use the same method to add new attributes or remove attributes.
                        <br><br>
                        <div class="code-title">Update Item</div>
                        <pre title="Update Item" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

dynamodb <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>

table <span class="token operator">=</span> dynamodb<span class="token punctuation">.</span>Table<span class="token punctuation">(</span><span class="token string">'Employees'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> table<span class="token punctuation">.</span>update_item<span class="token punctuation">(</span>
    Key<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'Luzze John'</span><span class="token punctuation">,</span> <span class="token string">'Email'</span><span class="token punctuation">:</span> <span class="token string">'john@nube.era'</span><span class="token punctuation">}</span><span class="token punctuation">,</span>
    ExpressionAttributeNames<span class="token operator">=</span><span class="token punctuation">{</span>
        <span class="token string">"#section"</span><span class="token punctuation">:</span> <span class="token string">"Section"</span><span class="token punctuation">,</span>
        <span class="token string">"#qa"</span><span class="token punctuation">:</span> <span class="token string">"QA"</span><span class="token punctuation">,</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        ExpressionAttributeValues<span class="token operator">=</span><span class="token punctuation">{</span>
            <span class="token string">':id'</span><span class="token punctuation">:</span> <span class="token string">'QA-2'</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        UpdateExpression<span class="token operator">=</span><span class="token string">"SET #section.#qa = :id"</span><span class="token punctuation">,</span>
    <span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                        <img loading="lazy" width="1024" height="396" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22396%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38698" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/9-1024x396-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/9-300x116-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/9-768x297-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/9-1536x594-1.jpg 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/9.jpg 1791w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/9-1024x396-1.jpg">

                        <h3 id="h-delete-items">Delete Items</h3>
                        To delete an item, use the delete_item() method and specify the item’s primary key.
                        <br><br>
                        <div class="code-title">Delete Item</div>
                        <pre title="Delete Item" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

dynamodb <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>

table <span class="token operator">=</span> dynamodb<span class="token punctuation">.</span>Table<span class="token punctuation">(</span><span class="token string">'Employees'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> table<span class="token punctuation">.</span>delete_item<span class="token punctuation">(</span>Key <span class="token operator">=</span> <span class="token punctuation">{</span><span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'Peter Matovu'</span><span class="token punctuation">,</span> <span class="token string">'Email'</span><span class="token punctuation">:</span> <span class="token string">'petermatovu@nube.era'</span><span class="token punctuation">}</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                        Here is the Execution output.
                        <img loading="lazy" width="1024" height="416" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22416%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38694" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/7-1024x416-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/7-300x122-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/7-768x312-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/7-1536x625-1.jpg 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/7.jpg 1758w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/7-1024x416-1.jpg">

                        <h3 id="h-query-tables-in-dynamodb-using-boto3">Query Tables in DynamoDB using Boto3</h3>
                        To query items in DynamoDB, you can use the query() method to fetch items based on primary key values. In addition, you can use the KeyConditionExpression to specify the value of the partition key and return all items from the table with that partition key.
                        <div class="code-block code-block-1" style="margin:8px 0;clear:both"></div>
                        Ensure to make use of the DynamoDB conditions where for example the eq() method will be used to fetch all the attributes that match the specified key.
                        <br><br>
                        <div class="code-title">Query Table</div>
                        <pre title="Query Table" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3
<span class="token keyword">from</span> boto3<span class="token punctuation">.</span>dynamodb<span class="token punctuation">.</span>conditions <span class="token keyword">import</span> Key

dynamodb <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>
table <span class="token operator">=</span> dynamodb<span class="token punctuation">.</span>Table<span class="token punctuation">(</span><span class="token string">'Employees'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> table<span class="token punctuation">.</span>query<span class="token punctuation">(</span>KeyConditionExpression<span class="token operator">=</span>Key<span class="token punctuation">(</span><span class="token string">'Name'</span><span class="token punctuation">)</span><span class="token punctuation">.</span>eq<span class="token punctuation">(</span><span class="token string">'Luzze John'</span><span class="token punctuation">)</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"The query returned the following items:"</span><span class="token punctuation">)</span>
<span class="token keyword">for</span> item <span class="token keyword">in</span> response<span class="token punctuation">[</span><span class="token string">'Items'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>item<span class="token punctuation">)</span></blockquote></pre>
                        Here is the Execution output.
                        <img loading="lazy" width="1024" height="378" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22378%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38828" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/10-1-1024x378-1.jpg 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/10-1-300x111-1.jpg 300w,https://hands-on.cloud/wp-content/uploads/2021/08/10-1-768x283-1.jpg 768w,https://hands-on.cloud/wp-content/uploads/2021/08/10-1-1536x567-1.jpg 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/10-1-1.jpg 1572w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/10-1-1024x378-1.jpg">

                        <h3 id="h-scan-tables-in-dynamodb-using-boto3">Scan Tables in DynamoDB using Boto3</h3>
                        Scanning can be used to access all the data in tables. The scan() method will read every item in the table and return the data. When you provide additional options such as the FilterExpression, you will be able to return fewer and desired results from the table scan operation.
                        You can also add additional DynamoDB conditions and retrieve items with specific attributes from the table.
                        <br><br>
                        <div class="code-title">Scan Tables</div>
                        <pre title="Scan Tables" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3
<span class="token keyword">from</span> boto3<span class="token punctuation">.</span>dynamodb<span class="token punctuation">.</span>conditions <span class="token keyword">import</span> Key<span class="token punctuation">,</span> Attr

dynamodb <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>
table <span class="token operator">=</span> dynamodb<span class="token punctuation">.</span>Table<span class="token punctuation">(</span><span class="token string">'Employees'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> table<span class="token punctuation">.</span>scan<span class="token punctuation">(</span>FilterExpression<span class="token operator">=</span>Attr<span class="token punctuation">(</span><span class="token string">'Department'</span><span class="token punctuation">)</span><span class="token punctuation">.</span>eq<span class="token punctuation">(</span><span class="token string">'IT'</span><span class="token punctuation">)</span><span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"The query returned the following items:"</span><span class="token punctuation">)</span>
<span class="token keyword">for</span> item <span class="token keyword">in</span> response<span class="token punctuation">[</span><span class="token string">'Items'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>item<span class="token punctuation">)</span></blockquote></pre>
                        Here is the Execution output.
                        <img loading="lazy" width="1024" height="416" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22416%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38827" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/11-1024x416.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/11-300x122.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/11-768x312.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/11-1536x625.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/11.png 1702w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/11-1024x416.png">

                        <h3 id="h-global-secondary-index">Global Secondary Index</h3>
                        A Global Secondary Index allows you to query attributes that are not part of the main table’s primary key and this will help you to avoid the slowness and inefficiencies that are associated when performing a full table scan operation.
                        In addition, the global secondary index will contain attributes from the main table but will be organized by a primary key of its own hence enabling faster queries.
                        To learn more about Global Secondary Indexes, consider looking at the information shared in the AWS documentation found on this link.

                        <h3 id="h-creating-a-global-secondary-index-using-boto3">Creating a Global Secondary Index using Boto3</h3>
                        In the following example, I will create a global secondary index to the CapacityBuildingLevel attribute that has all Employees that have achieved specific levels of Capacity building.
                        <br><br>
                        <div class="code-title">Create Global Secondary Index</div>
                        <pre title="Create Global Secondary  Index" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> dynamodb <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>

<span class="token keyword">try</span><span class="token punctuation">:</span>
    resp <span class="token operator">=</span> client<span class="token punctuation">.</span>update_table<span class="token punctuation">(</span>
        TableName<span class="token operator">=</span><span class="token string">"Employees"</span><span class="token punctuation">,</span>
        AttributeDefinitions<span class="token operator">=</span><span class="token punctuation">[</span>
            <span class="token punctuation">{</span>
                <span class="token string">"AttributeName"</span><span class="token punctuation">:</span> <span class="token string">"CapacityBuildingLevel"</span><span class="token punctuation">,</span>
                <span class="token string">"AttributeType"</span><span class="token punctuation">:</span> <span class="token string">"S"</span>
            <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
        GlobalSecondaryIndexUpdates<span class="token operator">=</span><span class="token punctuation">[</span>
            <span class="token punctuation">{</span>
                <span class="token string">"Create"</span><span class="token punctuation">:</span> <span class="token punctuation">{</span>
                    <span class="token string">"IndexName"</span><span class="token punctuation">:</span> <span class="token string">"CapacityBuildingIndex"</span><span class="token punctuation">,</span>
                    <span class="token string">"KeySchema"</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                        <span class="token punctuation">{</span>
                            <span class="token string">"AttributeName"</span><span class="token punctuation">:</span> <span class="token string">"CapacityBuildingLevel"</span><span class="token punctuation">,</span>
                            <span class="token string">"KeyType"</span><span class="token punctuation">:</span> <span class="token string">"HASH"</span>
                        <span class="token punctuation">}</span>
                    <span class="token punctuation">]</span><span class="token punctuation">,</span>
                    <span class="token string">"Projection"</span><span class="token punctuation">:</span> <span class="token punctuation">{</span>
                        <span class="token string">"ProjectionType"</span><span class="token punctuation">:</span> <span class="token string">"ALL"</span>
                    <span class="token punctuation">}</span><span class="token punctuation">,</span>
                    <span class="token string">"ProvisionedThroughput"</span><span class="token punctuation">:</span> <span class="token punctuation">{</span>
                        <span class="token string">"ReadCapacityUnits"</span><span class="token punctuation">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
                        <span class="token string">"WriteCapacityUnits"</span><span class="token punctuation">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
                    <span class="token punctuation">}</span>
                <span class="token punctuation">}</span>
            <span class="token punctuation">}</span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
    <span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Secondary index added!"</span><span class="token punctuation">)</span>
<span class="token keyword">except</span> Exception <span class="token keyword">as</span> e<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Error updating table:"</span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>e<span class="token punctuation">)</span></blockquote></pre>
                        Here is the Execution output. <span id="ezoic-pub-ad-placeholder-139" class="ezoic-adpicker-ad"></span>
                        <img loading="lazy" width="1024" height="597" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22597%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38950" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/12-1-1024x597.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/12-1-300x175.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/12-1-768x447.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/12-1.png 1361w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/12-1-1024x597.png">

                        <h3 id="h-querying-a-global-secondary-index">Querying a Global Secondary Index</h3>
                        Next, you can use the created secondary index to retrieve all Employees with the specific CapacityBuildingLevel set to 4.
                        <br><br>
                        <div class="code-title">Query Global Secondary Index</div>
                        <pre title="Query Global Secondary Index" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> time

<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> boto3<span class="token punctuation">.</span>dynamodb<span class="token punctuation">.</span>conditions <span class="token keyword">import</span> Key

dynamodb <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>
table <span class="token operator">=</span> dynamodb<span class="token punctuation">.</span>Table<span class="token punctuation">(</span><span class="token string">'Employees'</span><span class="token punctuation">)</span>

<span class="token keyword">while</span> <span class="token boolean">True</span><span class="token punctuation">:</span>
    <span class="token keyword">if</span> <span class="token keyword">not</span> table<span class="token punctuation">.</span>global_secondary_indexes <span class="token keyword">or</span> table<span class="token punctuation">.</span>global_secondary_indexes<span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string">'IndexStatus'</span><span class="token punctuation">]</span> <span class="token operator">!=</span> <span class="token string">'ACTIVE'</span><span class="token punctuation">:</span>
        <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">'Waiting for index to backfill...'</span><span class="token punctuation">)</span>
        time<span class="token punctuation">.</span>sleep<span class="token punctuation">(</span><span class="token number">5</span><span class="token punctuation">)</span>
        table<span class="token punctuation">.</span><span class="token builtin">reload</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">break</span>

resp <span class="token operator">=</span> table<span class="token punctuation">.</span>query<span class="token punctuation">(</span>
    IndexName<span class="token operator">=</span><span class="token string">"CapacityBuildingIndex"</span><span class="token punctuation">,</span>
    KeyConditionExpression<span class="token operator">=</span>Key<span class="token punctuation">(</span><span class="token string">'CapacityBuildingLevel'</span><span class="token punctuation">)</span><span class="token punctuation">.</span>eq<span class="token punctuation">(</span><span class="token string">'Level 4'</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"The query returned the following items:"</span><span class="token punctuation">)</span>
<span class="token keyword">for</span> item <span class="token keyword">in</span> resp<span class="token punctuation">[</span><span class="token string">'Items'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>item<span class="token punctuation">)</span>
</blockquote></pre>
                        Here is the Execution output. <span id="ezoic-pub-ad-placeholder-140" class="ezoic-adpicker-ad"></span>
                        <img loading="lazy" width="1024" height="470" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22470%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38951" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/13-1024x470.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/13-300x138.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/13-768x352.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/13-1536x705.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/13.png 1798w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/13-1024x470.png">

                        <h3 id="h-backup-a-dynamodb-table-using-boto3">Backup a DynamoDB Table using Boto3</h3>
                        To create on-demand backups for tables using Boto3, use the create_backup() method and pass the Table name and the destination back up Table name
                        <br><br>
                        <div class="code-title">Backup DynamoDB Table</div>
                        <pre title="Backup DynamoDB Table" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_backup<span class="token punctuation">(</span>
    TableName<span class="token operator">=</span><span class="token string">'Employees'</span><span class="token punctuation">,</span>
    BackupName<span class="token operator">=</span><span class="token string">'Employees-Backup-01'</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                        Here is the execution output.
                        <img loading="lazy" width="1024" height="354" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22354%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38954" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/14-1-1024x354.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/14-1-300x104.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/14-1-768x266.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/14-1-1536x531.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/08/14-1.png 1787w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/14-1-1024x354.png">

                        <h3 id="h-delete-a-dynamodb-table-using-boto3">Delete a DynamoDB Table using Boto3</h3>
                        To delete a DynamoDB table using Boto3, use the delete() table method and insert the name of the Dynamodb table that you want to delete.
                        <br><br>
                        <div class="code-title">Delete Table</div>
                        <pre title="Delete Table" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'dynamodb'</span><span class="token punctuation">)</span>

<span class="token keyword">try</span><span class="token punctuation">:</span>
    resp <span class="token operator">=</span> client<span class="token punctuation">.</span>delete_table<span class="token punctuation">(</span>
        TableName<span class="token operator">=</span><span class="token string">"Test_Delete"</span><span class="token punctuation">,</span>
    <span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Table deleted successfully!"</span><span class="token punctuation">)</span>
<span class="token keyword">except</span> Exception <span class="token keyword">as</span> e<span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Error deleting table:"</span><span class="token punctuation">)</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span>e<span class="token punctuation">)</span></blockquote></pre>
                        Here is the execution output.<span id="ezoic-pub-ad-placeholder-141" class="ezoic-adpicker-ad"></span>
                        <img loading="lazy" width="1024" height="538" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22538%22%3E%3C/svg%3E" alt="" class="ezlazyload wp-image-38957" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/08/15-2-1024x538.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/08/15-2-300x158.png 300w,https://hands-on.cloud/wp-content/uploads/2021/08/15-2-768x403.png 768w,https://hands-on.cloud/wp-content/uploads/2021/08/15-2.png 1232w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/08/15-2-1024x538.png">

                        <h3 id="h-summary">Summary</h3>
                        This article covered how to use Python to interact with Amazon DynamoDB to create, list, perform CRUD operations, query tables, and concluded with additional management operations in Amazon DynamoDB.
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