<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra RDS in Boto3</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Boto3 RDS">

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
                <strong class="px-2" style="font-size: 1.125rem;">RDS in python</strong><br><br>
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
                <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">RDS IN PYTHON USING BOTO3</h1>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com">Home</a></li>
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/pages/Boto3/">Boto3</a></li>
                    <li class="breadcrumb-item active">RDS</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <h3>In this article </h3>
                    <ul>
                        <li><a href="#h-prerequisites" data-level="2">Prerequisites</a></li>
                        <li><a href="#h-introduction" data-level="2">Introduction</a></li>
                        <li><a href="#h-create-an-amazon-rds-instance-using-boto3" data-level="2">Create an Amazon RDS instance using Boto3</a></li>
                        <li><a href="#h-managing-rds-instances-using-boto3" data-level="2">Managing RDS Instances using Boto3</a>
                            <ul>
                                <li><a href="#h-stop-rds-instance" data-level="3">Stop RDS instance</a></li>
                                <li><a href="#h-start-rds-instance" data-level="3">Start RDS instance</a></li>
                                <li><a href="#h-reboot-rds-instance" data-level="3">Reboot RDS instance</a></li>
                                <li><a href="#h-modify-rds-instance-configuration" data-level="3">Modify RDS instance configuration</a></li>
                                <li><a href="#h-create-rds-instance-read-replica" data-level="3">Create RDS instance read-replica</a></li>
                                <li><a href="#h-promote-a-rds-read-replica-to-standalone-instance" data-level="3">Promote a RDS read-replica to standalone instance</a></li>
                                <li><a href="#h-describe-rds-instance" data-level="3">Describe RDS instance</a></li>
                                <li><a href="#Filter-RDS-instances" data-level="3">Filter RDS instances</a></li>
                                <li><a href="#h-delete-rds-instance" data-level="3">Delete RDS instance</a></li>
                                <li><a href="#h-describe-rds-engine-versions" data-level="3">Describe RDS engine versions</a></li>
                                <li><a href="#h-add-tags-to-rds-resources" data-level="3">Add Tags to RDS resources</a></li>
                                <li><a href="#h-create-rds-parameter-group" data-level="3">Create RDS parameter group</a></li>
                                <li><a href="#h-describe-rds-parameter-group" data-level="3">Describe RDS parameter group</a></li>
                                <li><a href="#h-create-an-rds-option-group" data-level="3">Create an RDS option group</a></li>
                            </ul>
                        </li>
                        <li><a href="#h-managing-amazon-rds-backups-using-boto3" data-level="2">Managing Amazon RDS backups using Boto3</a>
                            <ul>
                                <li><a href="#h-create-a-rds-snapshot" data-level="3">Create a RDS snapshot</a></li>
                                <li><a href="#h-describe-rds-snapshot" data-level="3">Describe RDS snapshot</a></li>
                                <li><a href="#h-delete-rds-snapshot" data-level="3">Delete RDS snapshot</a></li>
                                <li><a href="#h-describe-rds-instance-automated-backups" data-level="3">Describe RDS instance automated backups</a></li>
                                <li><a href="#h-restore-rds-database-to-point-in-time" data-level="3">Restore RDS database to point-in-time</a></li>
                            </ul>
                        </li>
                        <li><a href="#h-manage-access-to-amazon-rds-database-using-boto3" data-level="2">Manage access to Amazon RDS database using Boto3</a>
                            <ul>
                                <li><a href="#h-create-a-rds-security-group" data-level="3">Create a RDS security group</a></li>
                                <li><a href="#h-create-rds-subnet-group" data-level="3">Create RDS subnet group</a></li>
                                <li><a href="#h-create-amazon-rds-proxy" data-level="3">Create Amazon RDS Proxy</a></li>
                            </ul>
                        </li>
                        <li><a href="#h-aws-rds-instance-maintenance-using-boto3" data-level="2">AWS RDS Instance Maintenance using Boto3</a>
                            <ul>
                                <li><a href="#h-apply-pending-database-maintenance-action" data-level="3">Apply pending database maintenance action</a></li>
                                <li><a href="#h-list-rds-instance-log-files" data-level="3">List RDS instance log files</a></li>
                                <li><a href="#h-download-rds-instance-log-files" data-level="3">Download RDS instance log files</a></li>
                                <li><a href="#h-create-event-subscription-for-rds-instance" data-level="3">Create event subscription for RDS instance</a></li>
                                <li><a href="#h-list-rds-events" data-level="3">List RDS events</a></li>
                            </ul>
                        </li>
                        <li><a href="#h-summary" data-level="2">Summary</a></li>
                        <li><a href="#h-related-articles" data-level="2">Related articles</a></li>
                    </ul>
                    <br>
                    Amazon Relational Database Service (Amazon RDS) is a relational fully-managed database service that makes it easy to set up,
                    operate, and scale a relational database in the cloud. With RDS, you can easily set up six familiar database engines databases,
                    including Amazon Aurora, PostgreSQL, MySQL, MariaDB, Oracle Database, and SQL Server. This service has additional features such
                    as automated patching, monitoring, backups, enterprise-grade security, high availability, scaling, simplified storage management,
                    and many others. This article will cover how to create and manage Amazon RDS databases using the Boto3 library (AWS SDK for Python).
                    <br><br>
                    <h3 id="h-prerequisites">Prerequisites</h3>
                    To start working with Amazon RDS using Boto3, you need to set up your Python environment on your laptop.
                    In summary, this is what you will need:
                    <ul>
                        <li>Python 3</li>
                        <li>Boto3</li>
                        <li>AWS CLI tools</li>
                    </ul>
                    Alternatively, you can set up and launch a Cloud9 IDE.

                    <h3 id="h-introduction">Introduction</h3>
                    Amazon RDS reduces management and operational overhead for the typical database administration tasks and enables your team to focus on developing and optimizing applications to achieve faster business results. This article will focus on the automation of the most common database operations in Amazon RDS using Python and Boto3 library.

                    <h3 id="h-create-an-amazon-rds-instance-using-boto3">Create an Amazon RDS instance using Boto3</h3>
                    To create an RDS instance, you need to use the create_db_instance() method of the Boto3 library.
                    In the example below, we will create a new MySQL RDS instance inside the default VPC.
                    You can also set a different VPC and Security Group for your new instance by specifying the <code>DBSecurityGroups</code> and <code>VPCSecurityGroupsIds</code> parameters.
                    <br><br>
                    <div class="code-title">Create an Amazon RDS instance using Boto3</div>
                    <pre title="Create an Amazon RDS instance using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_db_instance<span class="token punctuation">(</span>
    AllocatedStorage<span class="token operator">=</span><span class="token number">5</span><span class="token punctuation">,</span>
    DBInstanceClass<span class="token operator">=</span><span class="token string">'db.t2.micro'</span><span class="token punctuation">,</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span><span class="token punctuation">,</span>
    Engine<span class="token operator">=</span><span class="token string">'MySQL'</span><span class="token punctuation">,</span>
    MasterUserPassword<span class="token operator">=</span><span class="token string">'testpw0021'</span><span class="token punctuation">,</span>
    MasterUsername<span class="token operator">=</span><span class="token string">'admin01'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="513" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22513%22%3E%3C/svg%3E" alt="Create an Amazon RDS instance using Boto3" class="ezlazyload wp-image-39558" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/1-1024x513.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/1-300x150.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/1-768x385.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/1-1536x770.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/1.png 1760w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/1-1024x513.png"></figure>

                    <h3 id="h-managing-rds-instances-using-boto3">Managing RDS Instances using Boto3</h3>

                    <h3 id="h-stop-rds-instance">Stop RDS instance</h3>
                    To stop an RDS instance, you need to use the stop_db_instance() method of the Boto3 library. You can provide the <code>DBSnapshotIdentifier</code> argument to create a snapshot of the database during the stop operation.
                    <br><br>
                    <div class="code-title">Stop RDS instance using Boto3</div>
                    <pre title="Stop RDS instance using Boto3" class="wp-block-code  language-python" tabindex="0">
                   <blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>stop_db_instance<span class="token punctuation">(</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span><span class="token punctuation">,</span>
    DBSnapshotIdentifier<span class="token operator">=</span><span class="token string">'stop-snapshot001'</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output.
                    <img loading="lazy" width="1024" height="516" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22516%22%3E%3C/svg%3E" alt="Stop RDS instance using Boto3" class="ezlazyload wp-image-39572" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/5-1024x516.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/5-300x151.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/5-768x387.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/5-1536x774.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/5.png 1760w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/5-1024x516.png"></figure>

                    <h3 id="h-start-rds-instance">Start RDS instance</h3>
                    To start a stopped RDS instance, you need to use the start_db_instance() method of the Boto3 library and provide the name of your database to the <code>DBInstanceIdentifier</code> parameter.
                    <br><br>
                    <div class="code-title">Start RDS instance using Boto3</div>
                    <pre title="Start RDS instance using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>start_db_instance<span class="token punctuation">(</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output.

                    <img loading="lazy" width="1024" height="482" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22482%22%3E%3C/svg%3E" alt="Start RDS Instance using Boto3" class="ezlazyload wp-image-39574" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/6-1024x482.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/6-300x141.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/6-768x361.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/6-1536x723.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/6.png 1757w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/6-1024x482.png"></figure>

                    <h3 id="h-reboot-rds-instance">Reboot RDS instance</h3>
                    To reboot an RDS instance, you need to use the
                    <meta charset="utf-8">reboot_db_instance()
                    method with the <code>DBInstanceIdentifier</code> containing the database server name that you want to reboot.
                    <br><br>
                    <div class="code-title">Reboot RDS Instance using Boto3</div>
                    <pre title="Reboot RDS Instance using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>reboot_db_instance<span class="token punctuation">(</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="473" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22473%22%3E%3C/svg%3E" alt="Reboot RDS Instance using Boto3" class="ezlazyload wp-image-39575" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/7-1024x473.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/7-300x139.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/7-768x355.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/7-1536x710.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/7.png 1781w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/7-1024x473.png"></figure>

                    <h3 id="h-modify-rds-instance-configuration">Modify RDS instance configuration</h3>
                    To modify an RDS instance configuration, you need to use the modify_db_instance() method of the Boto3 library.
                    To a list of allowed configurations, you need to use the describe_valid_db_instance_modifications() method of the Boto3 library. In this example, I will change the <code>MasterUserPassword</code> of the RDS Instance:
                    <br><br>
                    <div class="code-title">Modify RDS instance configuration</div>
                    <pre title="Modify RDS instance configuration" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>modify_db_instance<span class="token punctuation">(</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span><span class="token punctuation">,</span>
    MasterUserPassword<span class="token operator">=</span><span class="token string">'new-pa$$word'</span>
  <span class="token punctuation">)</span>  
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="511" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22511%22%3E%3C/svg%3E" alt="Modify RDS instance configuration" class="ezlazyload wp-image-39620" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/8-1024x511.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/8-300x150.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/8-768x383.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/8-1536x766.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/8.png 1766w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/8-1024x511.png"></figure>

                    <h3 id="h-create-rds-instance-read-replica">Create RDS instance read-replica</h3>
                    To create an RDS instance read replica, you need to use the create_db_instance_read_replica() method.
                    Amazon RDS database read replicas allow you to have more than one source for the database read operations to scale your single database to improve the performance of read-intensive database workloads.
                    <br><br>
                    <div class="code-title">Create RDS instance read-replica</div>
                    <pre title="Create RDS instance read-replica" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_db_instance_read_replica<span class="token punctuation">(</span>
    AvailabilityZone<span class="token operator">=</span><span class="token string">'us-east-2c'</span><span class="token punctuation">,</span>
    CopyTagsToSnapshot<span class="token operator">=</span><span class="token boolean">True</span><span class="token punctuation">,</span>
    DBInstanceClass<span class="token operator">=</span><span class="token string">'db.t2.micro'</span><span class="token punctuation">,</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'db-instance-01-readreplica'</span><span class="token punctuation">,</span>
    PubliclyAccessible<span class="token operator">=</span><span class="token boolean">True</span><span class="token punctuation">,</span>
    SourceDBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span><span class="token punctuation">,</span>
    StorageType<span class="token operator">=</span><span class="token string">'gp2'</span><span class="token punctuation">,</span>
    Tags<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'ReadreplicaNumber'</span><span class="token punctuation">,</span>
            <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'readreplica001'</span><span class="token punctuation">,</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="515" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22515%22%3E%3C/svg%3E" alt="Create RDS instance read-replica" class="ezlazyload wp-image-39621" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/9-1024x515.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/9-300x151.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/9-768x386.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/9-1536x772.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/9.png 1762w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/9-1024x515.png"></figure>

                    <h3 id="h-promote-a-rds-read-replica-to-standalone-instance">Promote a RDS read-replica to standalone instance</h3>
                    To promote a read-replica to a standalone instance, you need to use the promote_read_replica() method of the Boto3 library.
                    <br><br>
                    <div class="code-title">Promote a RDS read-replica to standalone instance</div>
                    <pre title="Promote a RDS read-replica to standalone instance" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>promote_read_replica<span class="token punctuation">(</span>
    BackupRetentionPeriod<span class="token operator">=</span><span class="token number">5</span><span class="token punctuation">,</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'db-instance-01-readreplica'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="513" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22513%22%3E%3C/svg%3E" alt="Promote a RDS read-replica to standalone instance" class="ezlazyload wp-image-39660" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/27-1024x513.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/27-300x150.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/27-768x385.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/27-1536x770.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/27.png 1755w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/27-1024x513.png"></figure>

                    <h3 id="h-describe-rds-instance">Describe RDS instance</h3>
                    To get all the properties of the RDS database instance, you need to use the describe_db_instances() method and pass the <code>DBInstanceIdentifier</code> parameter.
                    <br><br>
                    <div class="code-title">Describe RDS instance</div>
                    <pre title="Describe RDS instance" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_db_instances<span class="token punctuation">(</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="500" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22500%22%3E%3C/svg%3E" alt="Describe RDS instance" class="ezlazyload wp-image-39560" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/2-1024x500.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/2-300x147.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/2-768x375.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/2-1536x750.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/2.png 1773w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/2-1024x500.png"></figure>

                    <h3 id="Filter-RDS-instances">
                        <meta charset="utf-8">Filter RDS instances
                    </h3>
                    To
                    <meta charset="utf-8">filter RDS instances, you need to
                    <meta charset="utf-8">use the describe_db_instances() method of the Boto3 library with provided <code>Filter</code> argument to return all information about specific database instances.

                    In the following example, I will use the database engine as the filter to retrieve all information about MySQL databases in my account.
                    <br><br>
                    <div class="code-title">Filter RDS instances</div>
                    <pre title="Filter RDS instances" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_db_instances<span class="token punctuation">(</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">''</span><span class="token punctuation">,</span>
    Filters<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'engine'</span><span class="token punctuation">,</span>
            <span class="token string">'Values'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                <span class="token string">'MySQL'</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span>
        <span class="token punctuation">}</span><span class="token punctuation">]</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="519" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22519%22%3E%3C/svg%3E" alt="Filter RDS instances" class="ezlazyload wp-image-39569" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/3-1-1024x519.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/3-1-300x152.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/3-1-768x389.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/3-1-1536x778.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/3-1.png 1756w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/3-1-1024x519.png"></figure>

                    <h3 id="h-delete-rds-instance">Delete RDS instance</h3>
                    To delete an RDS database instance, you need to use the delete_db_instance() method of the Boto3 library with the <code>DBInstanceIdentifier</code> parameter. The <code>SkipFinalSnapshot</code> parameter prevents the creation of a final snapshot during the database delete operation.
                    <br><br>
                    <div class="code-title">Delete RDS instance using Boto3</div>
                    <pre title="Delete RDS instance using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>delete_db_instance<span class="token punctuation">(</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'db-instance-01-readreplica'</span><span class="token punctuation">,</span>
    SkipFinalSnapshot<span class="token operator">=</span><span class="token boolean">True</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="491" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22491%22%3E%3C/svg%3E" alt="Delete RDS instance using Boto3" class="ezlazyload wp-image-39661" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/28-1024x491.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/28-300x144.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/28-768x368.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/28-1536x736.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/28.png 1765w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/28-1024x491.png"></figure>

                    <h3 id="h-describe-rds-engine-versions">Describe RDS engine versions</h3>
                    To retrieve a list of supported
                    <meta charset="utf-8">RDS engine versions, you need to use the
                    <br><br>
                    <div class="code-title">Describe RDS engine versions</div>
                    <pre title="Describe RDS engine versions" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_db_engine_versions<span class="token punctuation">(</span>
    Engine<span class="token operator">=</span><span class="token string">'MySQL'</span><span class="token punctuation">,</span>
    EngineVersion<span class="token operator">=</span><span class="token string">'8.0.23'</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="440" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22440%22%3E%3C/svg%3E" alt="Describe RDS engine versions" class="ezlazyload wp-image-39563" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/4-1024x440.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/4-300x129.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/4-768x330.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/4-1536x661.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/4.png 1783w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/4-1024x440.png"></figure>

                    <h3 id="h-add-tags-to-rds-resources">Add Tags to RDS resources</h3>
                    To add tags to an RDS resource (instance or cluster), you need to use the add_tags_to_resource() method of the Boto3 library and provide it the Amazon Resource Name(ARN) of the RDS resource.
                    <br><br>
                    <div class="code-title">Add Tags to RDS resources</div>
                    <pre title="Add Tags to RDS resources" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>add_tags_to_resource<span class="token punctuation">(</span>
    ResourceName<span class="token operator">=</span><span class="token string">'arn:aws:rds:us-east-2:585584209241:db:database-instance-01'</span><span class="token punctuation">,</span>
    Tags<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Environment'</span><span class="token punctuation">,</span>
            <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'Test'</span><span class="token punctuation">,</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="351" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22351%22%3E%3C/svg%3E" alt="Add Tags to RDS resources" class="ezlazyload wp-image-39622" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/10-1024x351.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/10-300x103.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/10-768x263.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/10-1536x527.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/10.png 1785w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/10-1024x351.png"></figure>

                    <h3 id="h-create-rds-parameter-group">Create RDS parameter group</h3>
                    To create a new database parameter group, you need to use the create_db_parameter_group() method of the Boto3 library. Database parameter groups contain the database engine configuration values that are assigned to specific database instances.
                    To add a database instance to the parameter group, you need to use the modify_db_instance() method with provided <code>DBParameterGroupName</code> parameter.
                    <br><br>
                    <div class="code-title">Create RDS parameter group</div>
                    <pre title="Create RDS parameter group" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_db_parameter_group<span class="token punctuation">(</span>
    DBParameterGroupFamily<span class="token operator">=</span><span class="token string">'mysql8.0'</span><span class="token punctuation">,</span>
    DBParameterGroupName<span class="token operator">=</span><span class="token string">'MySQLParameterGroup'</span><span class="token punctuation">,</span>
    Description<span class="token operator">=</span><span class="token string">'For RDS Instances running 8.0'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="328" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22328%22%3E%3C/svg%3E" alt="Create RDS parameter group" class="ezlazyload wp-image-39623" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/11-1024x328.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/11-300x96.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/11-768x246.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/11-1536x493.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/11.png 1802w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/11-1024x328.png"></figure>

                    <h3 id="h-describe-rds-parameter-group">Describe RDS parameter group</h3>
                    To retrieve information about the RDS database parameter group, you need to use the describe_db_parameters() method of the Boto3 library and provide it the <code>DBParameterGroupName</code> parameter.
                    <br><br>
                    <div class="code-title">Describe RDS parameter group</div>
                    <pre title="Describe RDS parameter group" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_db_parameters<span class="token punctuation">(</span>
    DBParameterGroupName<span class="token operator">=</span><span class="token string">'mysqlparametergroup'</span><span class="token punctuation">,</span>
    MaxRecords<span class="token operator">=</span><span class="token number">30</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output.
                    <img loading="lazy" width="1024" height="393" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22393%22%3E%3C/svg%3E" alt="Describe RDS parameter group" class="ezlazyload wp-image-39625" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/12-1024x393.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/12-300x115.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/12-768x295.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/12-1536x590.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/12.png 1792w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/12-1024x393.png"></figure>

                    <h3 id="h-create-an-rds-option-group">Create an RDS option group</h3>
                    To create an RDS option group, you need to use the create_option_group() method of the Boto3 library. Option groups allow you to specify a set of configuration options for a specific RDS database engine.
                    You can apply the RDS option group to the already existing RDS database by using the modify_db_instance() method with the <code>OptionGroupName</code> parameter assigned.
                    <br><br>
                    <div class="code-title">Create an RDS option group</div>
                    <pre title="Create an RDS option group" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_option_group<span class="token punctuation">(</span>
    EngineName<span class="token operator">=</span><span class="token string">'MySQL'</span><span class="token punctuation">,</span>
    MajorEngineVersion<span class="token operator">=</span><span class="token string">'8.0'</span><span class="token punctuation">,</span>
    OptionGroupDescription<span class="token operator">=</span><span class="token string">'My MySQL 8.0 option group'</span><span class="token punctuation">,</span>
    OptionGroupName<span class="token operator">=</span><span class="token string">'mysql-group01'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br><img loading="lazy" width="1024" height="406" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22406%22%3E%3C/svg%3E" alt="Create an RDS option group" class="ezlazyload wp-image-39628" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/13-1024x406.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/13-300x119.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/13-768x304.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/13-1536x608.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/13.png 1785w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/13-1024x406.png"></figure>

                    <h3 id="h-managing-amazon-rds-backups-using-boto3">Managing Amazon RDS backups using Boto3</h3>
                    By default, AWS creates automated backups of your RDS database instance. In addition to that, you can create database snapshots to have the ability to restore your database to a specific point in time. The following section describes how you can do that using Python and Boto3.
                    <h3 id="h-create-a-rds-snapshot">Create a RDS snapshot</h3>
                    To create an RDS snapshot, you need to use the create_db_snapshot() method of the Boto3 library and pass the required parameters, such as the <code>DBInstanceIdentifier</code> and <code>DBSnapshotIdentifier</code>.
                    <br><br>
                    <div class="code-title">Create a RDS snapshot using Boto3</div>
                    <pre title="Create a RDS snapshot using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_db_snapshot<span class="token punctuation">(</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span><span class="token punctuation">,</span>
    DBSnapshotIdentifier<span class="token operator">=</span><span class="token string">'snapshot002'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output.
                    <img loading="lazy" width="1024" height="419" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22419%22%3E%3C/svg%3E" alt="Create a RDS snapshot using Boto3" class="ezlazyload wp-image-39631" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/14-1024x419.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/14-300x123.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/14-768x314.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/14-1536x628.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/14.png 1767w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/14-1024x419.png"></figure>

                    <h3 id="h-describe-rds-snapshot">Describe RDS snapshot</h3>
                    To retrieve information about an RDS snapshot, you need to use the describe_db_snapshot() method of the Boto3 library with the <code>DBInstanceIdentifier</code> and <code>DBSnapshotIdentifier</code> parameters.
                    <br><br>
                    <div class="code-title">Describe RDS snapshot using Boto3</div>
                    <pre title="Describe RDS snapshot using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_db_snapshot<span class="token punctuation">(</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span><span class="token punctuation">,</span>
    DBSnapshotIdentifier<span class="token operator">=</span><span class="token string">'snapshot003'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output.
                    <img loading="lazy" width="1024" height="440" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22440%22%3E%3C/svg%3E" alt="Describe RDS snapshot using Boto3" class="ezlazyload wp-image-39633" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/15-1-1024x440.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/15-1-300x129.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/15-1-768x330.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/15-1-1536x660.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/15-1.png 1782w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/15-1-1024x440.png"></figure>

                    Additionally, you can get information about all the snapshots of the database instance.
                    <br><br>
                    <div class="code-title">Describe all RDS instance snapshots using Boto3</div>
                    <pre title="Describe all RDS instance snapshots using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_db_snapshots<span class="token punctuation">(</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output.
                    <img loading="lazy" width="1024" height="457" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22457%22%3E%3C/svg%3E" alt="Describe all RDS instance snapshots using Boto3" class="ezlazyload wp-image-39634" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/16-1024x457.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/16-300x134.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/16-768x342.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/16-1536x685.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/16.png 1790w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/16-1024x457.png"></figure>

                    <h3 id="h-delete-rds-snapshot">Delete RDS snapshot</h3>
                    To delete an RDS snapshot, you need to use the delete_db_snapshot() method of the Boto3 library with the <code>DBSnapshotIdentifier</code> parameter.
                    <br><br>
                    <div class="code-title">Delete RDS snapshot using Boto3</div>
                    <pre title="Delete RDS snapshot using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>delete_db_snapshot<span class="token punctuation">(</span>
    DBSnapshotIdentifier<span class="token operator">=</span><span class="token string">'snapshot003'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="345" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22345%22%3E%3C/svg%3E" alt="Delete RDS snapshot using Boto3" class="ezlazyload wp-image-39635" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/17-1024x345.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/17-300x101.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/17-768x259.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/17-1536x517.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/17.png 1788w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/17-1024x345.png"></figure>

                    <h3 id="h-describe-rds-instance-automated-backups">Describe RDS instance automated backups</h3>
                    To retrieve information about RDS instance automated backups, you need to use the describe_db_instance_automated_backups() method of the Boto3 library with the <code>DbiResourceId</code> and <code>DBInstanceIdentifier</code> parameters.
                    <br><br>
                    <div class="code-title">Describe RDS instance automated backups using Boto3</div>
                    <pre title="Describe RDS instance automated backups using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_db_instance_automated_backups<span class="token punctuation">(</span>
    DbiResourceId<span class="token operator">=</span><span class="token string">'db-WXNUQNZSZJDHOQHGQ4TY6Y7IZY'</span><span class="token punctuation">,</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="359" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22359%22%3E%3C/svg%3E" alt="Describe RDS instance automated backups using Boto3" class="ezlazyload wp-image-39637" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/18-1024x359.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/18-300x105.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/18-768x270.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/18-1536x539.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/18.png 1772w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/18-1024x359.png"></figure>

                    <h3 id="h-restore-rds-database-to-point-in-time">Restore RDS database to point-in-time</h3>
                    To restore a database to a point-in-time, you need to use the restore_db_instance_to_point_in_time() method of the Boto3 library with the <code>RestoreTime</code>, <code>SourceDBInstanceIdentifier</code>, and <code>TargetDBInstanceIdentifier</code> parameters.
                    <br><br>
                    <div class="code-title">Restore RDS database to point-in-time using Boto3</div>
                    <pre title="Restore RDS database to point-in-time using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3
<span class="token keyword">from</span> datetime <span class="token keyword">import</span> datetime

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>restore_db_instance_to_point_in_time<span class="token punctuation">(</span>
    RestoreTime<span class="token operator">=</span>datetime<span class="token punctuation">(</span><span class="token number">2021</span><span class="token punctuation">,</span> <span class="token number">9</span><span class="token punctuation">,</span> <span class="token number">15</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
    SourceDBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span><span class="token punctuation">,</span>
    TargetDBInstanceIdentifier<span class="token operator">=</span><span class="token string">'restored-db-01'</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="469" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22469%22%3E%3C/svg%3E" alt="Restore RDS database to point-in-time using Boto3" class="ezlazyload wp-image-39638" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/19-1024x469.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/19-300x137.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/19-768x352.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/19-1536x703.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/19.png 1758w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/19-1024x469.png"></figure>

                    <h3 id="h-manage-access-to-amazon-rds-database-using-boto3">Manage access to Amazon RDS database using Boto3</h3>
                    Amazon RDS provides various options for managing access to your database instances or clusters. The following section will describe some of those options and provide guidance on how to set them up for your Amazon RDS DB instance.

                    <h3 id="h-create-a-rds-security-group">Create a RDS security group</h3>
                    To create a new RDS security group, you need to use the create_db_security_group() method of the Boto3 library. Security groups control networking access to your database instances or clusters using security group rules. For example, you can set up a security group rule that allows connections to your databases from a predefined list of IP addresses.
                    To replace a security group for an already existing database instance or cluster, you need to use the modify_db_instance() method.
                    <br><br>
                    <div class="code-title">Create a RDS security group using Boto3</div>
                    <pre title="Create a RDS security group using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_db_security_group<span class="token punctuation">(</span>
    DBSecurityGroupDescription<span class="token operator">=</span><span class="token string">'MySQL DB security group'</span><span class="token punctuation">,</span>
    DBSecurityGroupName<span class="token operator">=</span><span class="token string">'mysqldbsecuritygroup'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="353" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22353%22%3E%3C/svg%3E" alt="Create a RDS security group using Boto3" class="ezlazyload wp-image-39645" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/21-1024x353.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/21-300x103.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/21-768x265.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/21-1536x529.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/21.png 1762w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/21-1024x353.png"></figure>

                    <h3 id="h-create-rds-subnet-group">Create RDS subnet group</h3>
                    To create an RDS subnet group, you need to use the create_db_subnet_group() method of the Boto3 library. Subnet groups allow you to place your Amazon RDS database instances to specific VPC subnets in different AWS Regions.
                    Like the security groups, you can modify the subnet groups in your RDS database instance using the modify_db_instance() method.
                    <br><br>
                    <div class="code-title">Create RDS subnet group using Boto3</div>
                    <pre title="Create RDS subnet group using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python">
<span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_db_subnet_group<span class="token punctuation">(</span>
    DBSubnetGroupDescription<span class="token operator">=</span><span class="token string">'MySQL Databases Subnet Group'</span><span class="token punctuation">,</span>
    DBSubnetGroupName<span class="token operator">=</span><span class="token string">'mysqldbsubnetgroup'</span><span class="token punctuation">,</span>
    SubnetIds<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token string">'subnet-e44a10a8'</span><span class="token punctuation">,</span>
        <span class="token string">'subnet-6710950c'</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>

<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="411" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22411%22%3E%3C/svg%3E" alt="Create RDS subnet group using Boto3" class="ezlazyload wp-image-39644" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/20-2-1024x411.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/20-2-300x120.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/20-2-768x308.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/20-2-1536x616.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/20-2.png 1787w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/20-2-1024x411.png"></figure>

                    <h3 id="h-create-amazon-rds-proxy">Create Amazon RDS Proxy</h3>
                    To create an Amazon RDS Proxy, you need to use the create_db_proxy() method of the Boto3 library. The Amazon RDS Proxy is a service that allows handling multiple connections to your Amazon RDS instance without overwhelming the instance itself. In addition to that, the Amazon RDS Proxy improves the security of your application’s access to the database using the IAM authentication and </working-with-secrets-manager-in-python-using-boto3 /" target="_blank" rel="noreferrer noopener">AWS Secrets Manager</a> integration.
                    <br><br><strong>Note:</strong> The <code>SecretArn</code> and <code>RoleArn</code> parameters contain sensitive values. Replace those values in your code.
                    <br><br>
                    <div class="code-title">Create Amazon RDS Proxy using Boto3</div>
                    <pre title="Create Amazon RDS Proxy using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_db_proxy<span class="token punctuation">(</span>
    DBProxyName<span class="token operator">=</span><span class="token string">'MySQLDBProxy'</span><span class="token punctuation">,</span>
    EngineFamily<span class="token operator">=</span><span class="token string">'MYSQL'</span><span class="token punctuation">,</span>
    Auth<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">'Description'</span><span class="token punctuation">:</span> <span class="token string">'UserLogin'</span><span class="token punctuation">,</span>
            <span class="token string">'UserName'</span><span class="token punctuation">:</span> <span class="token string">'admin01'</span><span class="token punctuation">,</span>
            <span class="token string">'SecretArn'</span><span class="token punctuation">:</span> <span class="token string">''</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
    RoleArn<span class="token operator">=</span><span class="token string">''</span><span class="token punctuation">,</span>
    VpcSubnetIds<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token string">'subnet-e44a10a8'</span><span class="token punctuation">,</span>
        <span class="token string">'subnet-6710950c'</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
    VpcSecurityGroupIds<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token string">'sg-6dbc5f1b'</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
    RequireTLS<span class="token operator">=</span><span class="token boolean">True</span><span class="token punctuation">,</span>
    IdleClientTimeout<span class="token operator">=</span><span class="token number">123</span><span class="token punctuation">,</span>
    DebugLogging<span class="token operator">=</span><span class="token boolean">False</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="517" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22517%22%3E%3C/svg%3E" alt="Create Amazon RDS Proxy using Boto3" class="ezlazyload wp-image-39646" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/22-1024x517.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/22-300x151.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/22-768x387.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/22-1536x775.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/22.png 1756w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/22-1024x517.png"></figure>

                    <h3 id="h-aws-rds-instance-maintenance-using-boto3">AWS RDS Instance Maintenance using Boto3</h3>
                    This section of the article will cover some of the most commonly used methods for RDS DB operations.

                    <h3 id="h-apply-pending-database-maintenance-action">Apply pending database maintenance action</h3>
                    To apply a pending maintenance action, you need to use the apply_pending_maintenance_action() method of the Boto3 library. This method allows you to make changes in the RDS DB at a specific moment or immediately.
                    <br><br>
                    <div class="code-title">Apply pending database maintenance action using Boto3</div>
                    <pre title="Apply pending database maintenance action using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> client<span class="token punctuation">.</span>apply_pending_maintenance_action<span class="token punctuation">(</span>
    ApplyAction<span class="token operator">=</span><span class="token string">'db-upgrade'</span><span class="token punctuation">,</span>
    OptInType<span class="token operator">=</span><span class="token string">'immediate'</span><span class="token punctuation">,</span>
    ResourceIdentifier<span class="token operator">=</span><span class="token string">'arn:aws:rds:us-east-2:585584209241:db:database-instance-01'</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    <h3 id="h-list-rds-instance-log-files">List RDS instance log files</h3>
                    To get a list of database log files for an AWS RDS instance, you need to use the describe_db_log_files() method.
                    <br><br>
                    <div class="code-title">List RDS instance log files using Boto3</div>
                    <pre title="List RDS instance log files using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_db_log_files<span class="token punctuation">(</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span><span class="token punctuation">,</span>
    MaxRecords<span class="token operator">=</span><span class="token number">100</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output.
                    <img loading="lazy" width="1024" height="370" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22370%22%3E%3C/svg%3E" alt="List RDS instance log files using Boto3" class="ezlazyload wp-image-39648" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/23-1024x370.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/23-300x108.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/23-768x278.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/23-1536x555.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/23.png 1742w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/23-1024x370.png"></figure>

                    <h3 id="h-download-rds-instance-log-files">Download RDS instance log files</h3>
                    To download the database log files, you can use the download_log_file_portion() method with such parameters as the <code>DBInstanceIdentifier</code> and <code>LogFileName</code>.
                    <br><br>
                    <div class="code-title">Download RDS instance log files using Boto3</div>
                    <pre title="Download RDS instance log files using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>download_db_log_file_portion<span class="token punctuation">(</span>
    DBInstanceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span><span class="token punctuation">,</span>
    LogFileName<span class="token operator">=</span><span class="token string">'error/mysql-error-running.log'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output.
                    <img loading="lazy" width="1024" height="335" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22335%22%3E%3C/svg%3E" alt="Download RDS instance log files using Boto3" class="ezlazyload wp-image-39659" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/26-1024x335.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/26-300x98.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/26-768x251.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/26-1536x502.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/26.png 1795w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/26-1024x335.png"></figure>

                    <h3 id="h-create-event-subscription-for-rds-instance">Create event subscription for RDS instance</h3>
                    To create a new event subscription for Amazon RDS, you need to use the create_event_subscription() method of the Boto3 library with required parameters that specify the type of notifications you need to receive. You can create event subscriptions for AWS RDS to receive notifications from the DB, including availability, failure, replication, and backup operations. Event subscriptions use Amazon SNS Topics and subscriptions to send out notifications.
                    The following will create a subscription to any changes in DB instance availability.
                    <br><br>
                    <div class="code-title">Create event subscription for RDS instance using Boto3</div>
                    <pre title="Create event subscription for RDS instance using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>create_event_subscription<span class="token punctuation">(</span>
    Enabled<span class="token operator">=</span><span class="token boolean">True</span><span class="token punctuation">,</span>
    EventCategories<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token string">'availability'</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
    SnsTopicArn<span class="token operator">=</span><span class="token string">'arn:aws:sns:us-east-2:585584209241:mysql'</span><span class="token punctuation">,</span>
    SourceIds<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token string">'database-instance-01'</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
    SourceType<span class="token operator">=</span><span class="token string">'db-instance'</span><span class="token punctuation">,</span>
    SubscriptionName<span class="token operator">=</span><span class="token string">'mysqleventsubscription'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output.
                    <img loading="lazy" width="1024" height="417" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22417%22%3E%3C/svg%3E" alt="Create event subscription for RDS instance using Boto3" class="ezlazyload wp-image-39650" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/24-1024x417.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/24-300x122.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/24-768x313.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/24-1536x626.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/24.png 1781w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/24-1024x417.png"></figure>

                    <h3 id="h-list-rds-events">List RDS events</h3>
                    To list RDS events related to your database instance or cluster, you need to use the
                    <br><br>
                    <div class="code-title">List RDS events using Boto3</div>
                    <pre title="List RDS events using Boto3" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">'rds'</span><span class="token punctuation">)</span>
response <span class="token operator">=</span> client<span class="token punctuation">.</span>describe_events<span class="token punctuation">(</span>
    Duration<span class="token operator">=</span><span class="token number">10080</span><span class="token punctuation">,</span>
    EventCategories<span class="token operator">=</span><span class="token punctuation">[</span>
        <span class="token string">'backup'</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">,</span>
    SourceIdentifier<span class="token operator">=</span><span class="token string">'database-instance-01'</span><span class="token punctuation">,</span>
    SourceType<span class="token operator">=</span><span class="token string">'db-instance'</span><span class="token punctuation">,</span>
<span class="token punctuation">)</span>
<span class="token keyword">print</span><span class="token punctuation">(</span>response<span class="token punctuation">)</span></blockquote></pre>
                    Here is the execution output:<br>
                    <img loading="lazy" width="1024" height="521" data-ezsrc="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%221024%22 height=%22521%22%3E%3C/svg%3E" alt="List RDS events using Boto3" class="ezlazyload wp-image-39658" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/25-1-1024x521.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/25-1-300x153.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/25-1-768x391.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/25-1-1536x782.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/25-1.png 1742w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" src="https://hands-on.cloud/wp-content/uploads/2021/09/25-1-1024x521.png"></figure>

                    <h3 id="h-summary">Summary</h3>
                    This article covered how to use Python to programmatically interact with Amazon Relational Database Service (Amazon RDS) service and create, manage, tag, backup, and perform maintenance operations for AWS RDS DB instances.

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