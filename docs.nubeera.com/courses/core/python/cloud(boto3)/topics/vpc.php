<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra VPC in Boto3</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Boto3 VPC">

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
                <strong class="px-2" style="font-size: 1.125rem;">VPC in python</strong><br><br>
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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">VPC IN PYTHON USING BOTO3</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com">Home</a></li>
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/pages/Boto3/">Boto3</a></li>
                <li class="breadcrumb-item active">VPC</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h3>In this article </h3>
                <ul>
                    <li><a href="#h-prerequisites" data-level="2">Prerequisites</a></li>
                    <li><a href="#h-what-is-an-amazon-vpc" data-level="2">What is an Amazon VPC?</a></li>
                    <li><a href="#h-connect-to-amazon-vpc-using-boto3" data-level="2">Connect to Amazon VPC using Boto3</a></li>
                    <li><a href="#h-how-to-manage-vpcs-using-boto3" data-level="2">How to manage VPCs using Boto3?</a>
                        <ul>
                            <li><a href="#h-create-a-vpc" data-level="3">Create a VPC</a>
                                <ul>
                                    <li><a href="#h-creating-a-default-vpc" data-level="4">Creating a Default VPC</a></li>
                                    <li><a href="#h-creating-a-custom-vpc" data-level="4">Creating a Custom VPC</a></li>
                                </ul>
                            </li>
                            <li><a href="#h-describe-vpcs" data-level="3">Describe VPCs</a></li>
                            <li><a href="#h-describe-vpc-attributes" data-level="3">Describe VPC Attributes</a></li>
                            <li><a href="#h-modify-vpc-attributes" data-level="3">Modify VPC Attributes</a></li>
                            <li><a href="#h-delete-a-vpc" data-level="3">Delete a VPC</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-how-to-manage-subnets-using-boto3" data-level="2">How to manage Subnets using Boto3?</a>
                        <ul>
                            <li><a href="#h-create-a-subnet" data-level="3">Create a Subnet</a>
                                <ul>
                                    <li><a href="#h-creating-a-default-subnet" data-level="4">Creating a Default Subnet</a></li>
                                    <li><a href="#h-creating-a-custom-subnet" data-level="4">Creating a Custom Subnet</a></li>
                                </ul>
                            </li>
                            <li><a href="#h-describe-subnets" data-level="3">Describe Subnets</a></li>
                            <li><a href="#h-modify-subnet-attributes" data-level="3">Modify Subnet Attributes</a></li>
                            <li><a href="#h-delete-a-subnet" data-level="3">Delete a Subnet</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-how-to-manage-security-groups-using-boto3" data-level="2">How to manage Security Groups using Boto3?</a>
                        <ul>
                            <li><a href="#h-create-a-security-group" data-level="3">Create a Security Group</a></li>
                            <li><a href="#h-manage-security-group-rules" data-level="3">Manage Security Group Rules</a>
                                <ul>
                                    <li><a href="#h-create-security-group-ingress-rule" data-level="4">Create Security Group Ingress Rule</a></li>
                                    <li><a href="#h-create-security-group-egress-rule" data-level="4">Create Security Group Egress Rule</a></li>
                                    <li><a href="#h-modify-security-groups-rule" data-level="4">Modify Security Groups Rule</a></li>
                                    <li><a href="#h-delete-security-group-ingress-rule" data-level="4">Delete Security Group Ingress Rule</a></li>
                                    <li><a href="#h-delete-security-group-egress-rule" data-level="4">Delete Security Group Egress Rule</a></li>
                                </ul>
                            </li>
                            <li><a href="#h-describe-security-groups" data-level="3">Describe Security Groups</a></li>
                            <li><a href="#h-describe-security-group-rules" data-level="3">Describe Security Group Rules</a></li>
                            <li><a href="#h-delete-security-group" data-level="3">Delete Security Group</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-how-to-manage-network-access-control-lists-using-boto3" data-level="2">How to manage Network Access Control Lists using Boto3?</a>
                        <ul>
                            <li><a href="#h-create-network-access-control-list" data-level="3">Create Network Access Control List</a></li>
                            <li><a href="#h-manage-network-access-control-list-entries" data-level="3">Manage Network Access Control List Entries</a>
                                <ul>
                                    <li><a href="#h-create-network-access-control-list-entry" data-level="4">Create Network Access Control List entry</a></li>
                                    <li><a href="#h-replace-network-access-control-list-entry" data-level="4">Replace Network Access Control List entry</a></li>
                                    <li><a href="#h-delete-network-access-control-list-entry" data-level="4">Delete Network Access Control List Entry</a></li>
                                </ul>
                            </li>
                            <li><a href="#h-describe-network-access-control-lists" data-level="3">Describe Network Access Control Lists</a></li>
                            <li><a href="#h-delete-network-access-control-list" data-level="3">Delete Network Access Control List</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-how-to-manage-internet-gateways-using-boto3" data-level="2">How to manage Internet Gateways using Boto3?</a>
                        <ul>
                            <li><a href="#h-create-internet-gateway" data-level="3">Create Internet Gateway</a></li>
                            <li><a href="#h-attach-internet-gateway-to-a-vpc" data-level="3">Attach Internet Gateway to a VPC</a></li>
                            <li><a href="#h-detach-internet-gateway-from-a-vpc" data-level="3">Detach Internet Gateway from a VPC</a></li>
                            <li><a href="#h-describe-internet-gateways" data-level="3">Describe Internet Gateways</a></li>
                            <li><a href="#h-delete-internet-gateway" data-level="3">Delete Internet Gateway</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-how-to-manage-nat-gateways-using-boto3" data-level="2">How to manage NAT Gateways using Boto3?</a>
                        <ul>
                            <li><a href="#h-create-nat-gateway" data-level="3">Create NAT Gateway</a></li>
                            <li><a href="#h-describe-nat-gateways" data-level="3">Describe NAT Gateways</a></li>
                            <li><a href="#h-delete-nat-gateway" data-level="3">Delete NAT Gateway</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-how-to-manage-route-tables-using-boto3" data-level="2">How to manage Route Tables using Boto3?</a>
                        <ul>
                            <li><a href="#h-create-route-table" data-level="3">Create Route Table</a></li>
                            <li><a href="#h-create-route" data-level="3">Create Route</a></li>
                            <li><a href="#h-replace-route" data-level="3">Replace Route</a></li>
                            <li><a href="#h-delete-route" data-level="3">Delete Route</a></li>
                            <li><a href="#h-associate-route-table" data-level="3">Associate Route Table</a></li>
                            <li><a href="#h-disassociate-route-table" data-level="3">Disassociate Route Table</a></li>
                            <li><a href="#h-describe-route-tables" data-level="3">Describe Route Tables</a></li>
                            <li><a href="#h-delete-route-table" data-level="3">Delete Route Table</a></li>
                        </ul>
                    </li>
                    <li><a href="#h-summary" data-level="2">Summary</a></li>
                </ul>
                <br>

                Amazon Virtual Private Cloud&nbsp;(Amazon VPC) is a core virtual networking service provided by Amazon Web Service to manage
                infrastructure within the Amazon Cloud for each account. AWS VPC allows you to create a virtual private data center and
                private network within your AWS account. Each VPC is logically isolated from every other VPC within the AWS network.
                This article covers how to manage VPCs, Subnets, Security Groups, ACLs, Internet, NAT gateways, and Route Tables using
                Python AWS SDK (Boto3 library).<br><br>

                <h3 id="h-prerequisites">Prerequisites</h3>
                To start managing Amazon VPC programmatically through the API, you must&nbsp; configure your Python environment</a>.
                In general, here’s what you need to have installed:
                <ul>
                    <li>Python 3</li>
                    <li>Boto3</li>
                    <li>AWS CLI tools</li>
                </ul>
                Alternatively, you can&nbsp;

                <h3 id="h-what-is-an-amazon-vpc">What is an Amazon VPC?</h3>
                <strong>Amazon VPC</strong> is a virtual data center within the AWS infrastructure that gives you complete control over your virtual networking environment, including resource placement, connectivity, and security. At the same time, it removes the overhead and complexity of setting up a data center with cables, server racks, hardware, power supply, etc.
                Each VPC you create is logically isolated from other virtual networks in the AWS cloud and fully customizable based on business and application requirements. You can choose the IP address range, create subnets, configure route tables, set up network gateways, define security rules using security groups, network access control lists, and many more.

                <h3 id="h-connect-to-amazon-vpc-using-boto3">Connect to Amazon VPC using Boto3</h3>
                The Boto3 library provides you with two ways to access APIs for managing AWS services:
                <ul>
                    <li>The <code>client</code> allows you to access the low-level API data. For example, you can get access to API response&nbsp; <how-to-process-json-data-in-python /" rel="noreferrer noopener">data in JSON format</a>.</li>
                    <li>The <code>resource</code> allows you to use AWS services in a higher-level object-oriented way. For more information on the topic, take a look at&nbsp; <introduction-to-boto3-library /#aws-cli-vs-botocore-vs-boto3" rel="noreferrer noopener">AWS CLI vs botocore vs Boto3</a>.</li>
                </ul>
                Here’s how you can instantiate the Boto3 EC2 client to start working with Amazon VPC APIs: <br><br>
                <div class="code-title">Instantiating the Boto3 VPC client</div>
                <pre title="Instantiating the Boto3 VPC client" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span></blockquote></pre>
                Similarly, you can instantiate the Boto3 EC2 resource to interact with Amazon VPC APIs:
                <br><br>
                <div class="code-title">Instantiating the Boto3 VPC resource</div>
                <pre title="Instantiating the Boto3 VPC resource" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> boto3

AWS_REGION <span class="token operator">=</span> <span class="token string">"us-east-2"</span>

sqs_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span></blockquote></pre>
                <h3 id="h-how-to-manage-vpcs-using-boto3">How to manage VPCs using Boto3?</h3>
                When creating a VPC, you set up a data center in the cloud, utilizing excellent AWS infrastructure. It’s secure, highly available, and scalable.
                Boto3 library provides <code>ec2 client</code> and <code>ec2 resource</code> objects to interact with the Amazon VPC. Using these two objects, you can manage, create, update and delete the VPCs.

                <h3 id="h-create-a-vpc">Create a VPC</h3>
                Every AWS account comes with a default VPC that is pre-configured with all the required resources so you can start using the default VPC and deploy your resources in the VPC. Apart from the default VPC, you can also create custom VPCs. Custom VPCs give more control over the configurations.

                <h4 id="h-creating-a-default-vpc">Creating a Default VPC</h4>
                To create default VPC, you need to use&nbsp;the create_default_vpc()&nbsp;method of the Boto3 EC2 client.
                If you deleted your default VPC, you could re-create it later. As Amazon VPC is a regional service, you cannot have more than one default VPC per Region.

                <br><br>
                <div class="code-title">Creating a Default VPC</div>
                <pre title="Creating a Default VPC" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">create_default_vpc</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates a default VPC in the configured availability zone.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>create_default_vpc<span class="token punctuation">(</span><span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not create default vpc.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Creating default VPC...'</span></span><span class="token punctuation">)</span>
    default_vpc <span class="token operator">=</span> create_default_vpc<span class="token punctuation">(</span><span class="token punctuation">)</span>
    default_vpc_id <span class="token operator">=</span> default_vpc<span class="token punctuation">[</span><span class="token string">'Vpc'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string">'VpcId'</span><span class="token punctuation">]</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Default VPC is created with VPC ID: </span><span class="token interpolation"><span class="token punctuation">{</span>default_vpc_id<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span></blockquote></pre>
                The <strong>create_default_vpc()</strong> method does not require any argument. This method will only return successful output if no default VPC is present in a configured availability zone.</span>

                By default, the <strong>create_default_vpc()</strong> method will create a VPC with IP range CIDR 172.31.0.0/16 and a default subnet in each availability zone. We will look at subnets in the next section.
                The <strong>create_default_vpc()</strong> method returns a dictionary object containing all the information about the newly created default VPC.
                Here’s a code execution output. <br><br>
                <img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/1.-Create-Default-VPC-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Creating a Default VPC" class="wp-image-40028 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/1.-Create-Default-VPC-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/1.-Create-Default-VPC-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/09/1.-Create-Default-VPC-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/09/1.-Create-Default-VPC-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/1.-Create-Default-VPC-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/1.-Create-Default-VPC-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.3230765969393312" srcset="https://hands-on.cloud/wp-content/uploads/2021/09/1.-Create-Default-VPC-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/1.-Create-Default-VPC-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/09/1.-Create-Default-VPC-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/09/1.-Create-Default-VPC-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/1.-Create-Default-VPC-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                <figcaption>Creating a Default VPC</figcaption>

                <h4 id="h-creating-a-custom-vpc">Creating a Custom VPC</h4>
                When you need to take more control over the networking attributes of a VPC, you can create a custom VPC. Custom VPC provides more granular control over the configurations such as:
                <ul>
                    <li>IP address range</li>
                    <li>Private and public subnets</li>
                    <li>Network security settings</li>
                </ul>
                To create a custom VPC, you can use the&nbsp; create_vpc()&nbsp;method from the Boto3 EC2 resource. In the example below, we are creating the custom VPC.
                To read more about the Boto3 client and Boto3 resource, check out our article Introduction to the Boto3 library.
                <br><br>
                <div class="code-title">Creating a Custom VPC</div>
                <pre title="Creating a Custom VPC" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">create_custom_vpc</span><span class="token punctuation">(</span>ip_cidr<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates a custom VPC with the specified configuration.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_resource<span class="token punctuation">.</span>create_vpc<span class="token punctuation">(</span>CidrBlock<span class="token operator">=</span>ip_cidr<span class="token punctuation">,</span>
                                           InstanceTenancy<span class="token operator">=</span><span class="token string">'default'</span><span class="token punctuation">,</span>
                                           TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                                               <span class="token string">'ResourceType'</span><span class="token punctuation">:</span>
                                               <span class="token string">'vpc'</span><span class="token punctuation">,</span>
                                               <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token punctuation">{</span>
                                                   <span class="token string">'Key'</span><span class="token punctuation">:</span>
                                                   <span class="token string">'Name'</span><span class="token punctuation">,</span>
                                                   <span class="token string">'Value'</span><span class="token punctuation">:</span>
                                                   <span class="token string">'nubeera-custom-vpc'</span>
                                               <span class="token punctuation">}</span><span class="token punctuation">]</span>
                                           <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not create a custom vpc.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    IP_CIDR <span class="token operator">=</span> <span class="token string">'192.168.0.0/16'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Creating a custom VPC...'</span></span><span class="token punctuation">)</span>
    custom_vpc <span class="token operator">=</span> create_custom_vpc<span class="token punctuation">(</span>IP_CIDR<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Custom VPC is created with VPC ID: </span><span class="token interpolation"><span class="token punctuation">{</span>custom_vpc<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                The required argument is:
                <ul>
                    <li><code>CidrBlock</code>: The IPv4 networking range for the VPC specified in CIDR notation. For example, 192.168.0.0/16.</li>
                </ul>
                Optional arguments used in the above example:
                <ul>
                    <li><code>InstanceTenancy</code>: The instance tenancy options for EC2 instances deployed into the VPC. For default, instances are launched with shared tenancy by default. Other options include dedicated and host tenancy.</li>
                </ul>
                <ul>
                    <li><code>TagSpecifications</code>: The resource tags to assign to the VPC.</li>
                </ul>
                The <strong>create_vpc()</strong>&nbsp;method returns a Vpc resource object containing the VPC Id.
                <br>Here’s the code execution output:
                <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/2.-Create-Custom-VPC-1024x591.png" alt="Creating a Custom VPC" class="ezlazyload wp-image-40029" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/2.-Create-Custom-VPC-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/2.-Create-Custom-VPC-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/2.-Create-Custom-VPC-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/2.-Create-Custom-VPC-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/2.-Create-Custom-VPC-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/2.-Create-Custom-VPC-1024x591.png">
                <figcaption>Creating a Custom VPC</figcaption>

                <h3 id="h-describe-vpcs">Describe VPCs</h3>
                To get detailed information about the existing VPCs in your AWS account, you need to use the&nbsp; describe_vpcs()&nbsp;method from the Boto3 library. This method allows you to describe existing VPCs by using either VPC Ids or Filters. We will use the <code>Filters</code> argument in the example below to find the required VPC by the Tag.
                We will use the Boto3 library&nbsp;<code>paginator</code>&nbsp;object to get the complete output from the&nbsp;<strong>describe_vpcs() </strong>method.</span>
                <blockquote class="wp-block-quote">
                    Some AWS requests return incomplete output, therefore, require subsequent requests to get the complete result. The process of sending subsequent requests to continue where a previous request left off is called&nbsp;<em><strong>pagination</strong></em>.
                </blockquote>
                <br><br>
                <div class="code-title">Describe VPCs</div>
                <pre title="Describe VPCs" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">describe_vpcs</span><span class="token punctuation">(</span>tag<span class="token punctuation">,</span> tag_values<span class="token punctuation">,</span> max_items<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Describes one or more of your VPCs.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        <span class="token comment"># creating paginator object for describe_vpcs() method</span>
        paginator <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>get_paginator<span class="token punctuation">(</span><span class="token string">'describe_vpcs'</span><span class="token punctuation">)</span>

        <span class="token comment"># creating a PageIterator from the paginator</span>
        response_iterator <span class="token operator">=</span> paginator<span class="token punctuation">.</span>paginate<span class="token punctuation">(</span>
            Filters<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string-interpolation"><span class="token string">f'tag:</span><span class="token interpolation"><span class="token punctuation">{</span>tag<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">,</span>
                <span class="token string">'Values'</span><span class="token punctuation">:</span> tag_values
            <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
            PaginationConfig<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'MaxItems'</span><span class="token punctuation">:</span> max_items<span class="token punctuation">}</span><span class="token punctuation">)</span>

        full_result <span class="token operator">=</span> response_iterator<span class="token punctuation">.</span>build_full_result<span class="token punctuation">(</span><span class="token punctuation">)</span>

        vpc_list <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span>

        <span class="token keyword">for</span> page <span class="token keyword">in</span> full_result<span class="token punctuation">[</span><span class="token string">'Vpcs'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
            vpc_list<span class="token punctuation">.</span>append<span class="token punctuation">(</span>page<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not describe VPCs.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> vpc_list


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    TAG <span class="token operator">=</span> <span class="token string">'Name'</span>
    TAG_VALUES <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">'nubeera-custom-vpc'</span><span class="token punctuation">]</span>
    MAX_ITEMS <span class="token operator">=</span> <span class="token number">10</span>
    vpcs <span class="token operator">=</span> describe_vpcs<span class="token punctuation">(</span>TAG<span class="token punctuation">,</span> TAG_VALUES<span class="token punctuation">,</span> MAX_ITEMS<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'VPC Details: '</span><span class="token punctuation">)</span>
    <span class="token keyword">for</span> vpc <span class="token keyword">in</span> vpcs<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>vpc<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span> <span class="token operator">+</span> <span class="token string">'\n'</span><span class="token punctuation">)</span></blockquote></pre>
                The arguments used in the above example:
                <ul>
                    <li><code>Filters</code>: Specifies the different available filters for narrowing the VPCs search criteria. For all available filters, refer&nbsp; <Paginator.DescribeVpcs" rel="noreferrer noopener">here</a>.</li>
                </ul>
                <ul>
                    <li><code>PaginationConfig</code>: Specifies the configuration for the Paginator object. We have used the MaxItems attribute, which specifies the maximum number of VPCs to return in one request.</li>
                </ul>
                The <strong>describe_vpcs()</strong> method returns a python dictionary object as an output.
                <br>Here’s the code execution output:
                <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/3.-Describe-VPCs-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="3. Describe VPCs" class="wp-image-40031 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/3.-Describe-VPCs-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/3.-Describe-VPCs-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/09/3.-Describe-VPCs-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/09/3.-Describe-VPCs-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/3.-Describe-VPCs-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/3.-Describe-VPCs-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.9329481751784208" srcset="https://hands-on.cloud/wp-content/uploads/2021/09/3.-Describe-VPCs-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/3.-Describe-VPCs-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/09/3.-Describe-VPCs-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/09/3.-Describe-VPCs-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/3.-Describe-VPCs-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">

                <h3 id="h-describe-vpc-attributes">Describe VPC Attributes</h3>
                To get the specific VPC attribute information, you can use the&nbsp; describe_vpc_attribute()&nbsp;method from the Boto3 library.
                The&nbsp;<strong>describe_vpc_attribute()</strong>&nbsp;method supports two attributes&nbsp;<strong>enableDnsSupport</strong>&nbsp;&amp;&nbsp;<strong>enableDnsHostnames</strong>.
                <br><br>
                <div class="code-title">Describe VPC Attributes</div>
                <pre title="Describe VPC Attributes" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">describe_vpc_attribute</span><span class="token punctuation">(</span>vpc_id<span class="token punctuation">,</span> attribute<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Describes the specified attribute of the specified VPC.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>describe_vpc_attribute<span class="token punctuation">(</span>Attribute<span class="token operator">=</span>attribute<span class="token punctuation">,</span>
                                                     VpcId<span class="token operator">=</span>vpc_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not describe a vpc attribute.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    VPC_ID <span class="token operator">=</span> <span class="token string">'vpc-0c588f5fd7bfb4534'</span>
    ATTRIBUTE <span class="token operator">=</span> <span class="token string">'enableDnsSupport'</span>
    custom_vpc_attribute <span class="token operator">=</span> describe_vpc_attribute<span class="token punctuation">(</span>VPC_ID<span class="token punctuation">,</span> ATTRIBUTE<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'VPC attribute details: \n</span><span class="token interpolation"><span class="token punctuation">{</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>custom_vpc_attribute<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span>
    <span class="token punctuation">)</span>
</blockquote></pre>
                Required attributes are:
                <ul>
                    <li><code>Attribute</code>:&nbsp;The VPC attribute. The <code>describe_vpc_attribute()</code> method supports two attributes&nbsp;<code>enableDnsSupport</code>&nbsp;and&nbsp;<code>enableDnsHostnames</code>.</li>
                </ul>
                <ul>
                    <li><code>VpcId</code>:&nbsp;The ID of the VPC.</li>
                </ul>
                The <strong>describe_vpc_attribute()</strong> method returns a Python dictionary object as an output.
                <br>Here’s the code execution output:
                <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/4.-Describe-VPC-Attributes-1024x591.png" alt="Describe VPC Attributes" class="ezlazyload wp-image-40033" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/4.-Describe-VPC-Attributes-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/4.-Describe-VPC-Attributes-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/4.-Describe-VPC-Attributes-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/4.-Describe-VPC-Attributes-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/4.-Describe-VPC-Attributes-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/4.-Describe-VPC-Attributes-1024x591.png">
                <figcaption>Describe VPC Attributes</figcaption>
                <h3 id="h-modify-vpc-attributes">Modify VPC Attributes</h3>
                To modify the existing VPC attribute’s value, you can use the&nbsp; modify_vpc_attribute()&nbsp;method from the Boto3 library.
                <br><br>
                <div class="code-title">Modify VPC Attributes</div>
                <pre title="Modify VPC Attributes" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">modify_vpc_attribute</span><span class="token punctuation">(</span>vpc_id<span class="token punctuation">,</span> dns_support<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Modifies the specified attribute of the specified VPC.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>modify_vpc_attribute<span class="token punctuation">(</span>
            EnableDnsSupport<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'Value'</span><span class="token punctuation">:</span> dns_support<span class="token punctuation">}</span><span class="token punctuation">,</span> VpcId<span class="token operator">=</span>vpc_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not modify the vpc attribute.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    VPC_ID <span class="token operator">=</span> <span class="token string">'vpc-0bd00c7e9d953cb23'</span>
    enableDnsSupport <span class="token operator">=</span> <span class="token boolean">True</span>
    vpc_attribute <span class="token operator">=</span> modify_vpc_attribute<span class="token punctuation">(</span>VPC_ID<span class="token punctuation">,</span> enableDnsSupport<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'VPC attribute enableDnsSupport modified. New value: </span><span class="token interpolation"><span class="token punctuation">{</span>enableDnsSupport<span class="token punctuation">}</span></span><span class="token string">'</span></span>
    <span class="token punctuation">)</span>
</blockquote></pre>
                The required attribute is:
                <ul>
                    <li><code>VpcId</code><strong>:&nbsp;</strong>The ID of the VPC.</li>
                </ul>
                An optional argument used in the above example is:
                <ul>
                    <li><code>EnableDnsSupport</code><strong>:&nbsp;</strong>Specifies whether the DNS resolution is supported for the VPC.</li>
                </ul>
                The<strong> modify_vpc_attribute()</strong> method supports two arguments,&nbsp;<strong>enableDnsSupport</strong>&nbsp;&amp;&nbsp;<strong>enableDnsHostnames</strong>. However, you can modify one argument at a time only.
                The <strong>modify_vpc_attribute()</strong> does not return any output on a successful request.
                <br>Here’s the code execution output:
                <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/5.-Modify-VPC-Attributes-1024x591.png" alt="Modify VPC Attributes" class="ezlazyload wp-image-40035" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/5.-Modify-VPC-Attributes-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/5.-Modify-VPC-Attributes-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/5.-Modify-VPC-Attributes-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/5.-Modify-VPC-Attributes-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/5.-Modify-VPC-Attributes-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/5.-Modify-VPC-Attributes-1024x591.png">
                <figcaption>Modify VPC Attributes</figcaption>

                <h3 id="h-delete-a-vpc">Delete a VPC</h3>
                To delete the existing VPC, you can use the&nbsp; <delete_vpc" rel="noreferrer noopener">delete_vpc()</a>&nbsp;method from the Boto3 library.
                    <blockquote class="wp-block-quote">
                        All the resources attached with the VPC must be detached OR deleted before deleting the VPC.
                    </blockquote>
                    <br><br>
                    <div class="code-title">Delete a VPC</div>
                    <pre title="Delete a VPC" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">delete_vpc</span><span class="token punctuation">(</span>vpc_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Deletes the specified VPC.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>delete_vpc<span class="token punctuation">(</span>VpcId<span class="token operator">=</span>vpc_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not delete the vpc.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    VPC_ID <span class="token operator">=</span> <span class="token string">'vpc-0bd00c7e9d953cb23'</span>
    vpc <span class="token operator">=</span> delete_vpc<span class="token punctuation">(</span>VPC_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'VPC </span><span class="token interpolation"><span class="token punctuation">{</span>VPC_ID<span class="token punctuation">}</span></span><span class="token string"> is deleted successfully.'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                    The required attribute is:
                    <ul>
                        <li><code>VpcId</code><strong>:&nbsp;</strong>The ID of the VPC.</li>
                    </ul>
                    The <strong>delete_vpc()</strong> method does not return any output on a successful request.
                    <br>Here’s the code execution output:
                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/6.-Delete-a-VPC-1024x591.png" alt="Delete a VPC" class="ezlazyload wp-image-40036" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/6.-Delete-a-VPC-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/6.-Delete-a-VPC-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/6.-Delete-a-VPC-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/6.-Delete-a-VPC-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/6.-Delete-a-VPC-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/6.-Delete-a-VPC-1024x591.png">
                    <figcaption>Delete a VPC</figcaption>

                    <h3 id="h-how-to-manage-subnets-using-boto3">How to manage Subnets using Boto3?</h3>
                    Every VPC has to have at least one subnet before you can start using it.
                    <style>
                        .portrait-2-multi-141 {
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

                    There are two types of subnets:
                    <ul>
                        <li><strong>Private subnet</strong> is only accessible within the VPC resources and can not be accessed from the Internet.</li>
                        <li><strong>Public subnet</strong> contains a route to 0.0.0.0/0 network through the Internet Gateway; resources in the Public subnet can be exposed to the Internet.</li>
                    </ul>

                    <h3 id="h-create-a-subnet">Create a Subnet</h3>
                    Similar to the VPCs, Subnets can be one of two types, default subnet or custom subnet.
                    The default subnet can be created in the default VPC only.
                    Custom subnets give more control over the networking configuration.

                    <h4 id="h-creating-a-default-subnet">Creating a Default Subnet</h4>
                    To create the default subnet in the default VPC, you can use the&nbsp; create_default_subnet()&nbsp;method from the Boto3 library.
                    <br><br>
                    <div class="code-title">Creating a Default Subnet</div>
                    <pre title="Creating a Default Subnet" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">create_default_subnet</span><span class="token punctuation">(</span>az<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates a default subnet in the configured availability zone.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>create_default_subnet<span class="token punctuation">(</span>AvailabilityZone<span class="token operator">=</span>az<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not create default subnet.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    AvailabilityZone <span class="token operator">=</span> <span class="token string">'us-east-2b'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Creating default subnet...'</span></span><span class="token punctuation">)</span>
    default_subnet <span class="token operator">=</span> create_default_subnet<span class="token punctuation">(</span>AvailabilityZone<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Default Subnet is created with ID: \n</span><span class="token interpolation"><span class="token punctuation">{</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>default_subnet<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span>
    <span class="token punctuation">)</span>
</blockquote></pre>
                    The required attribute is:
                    <ul>
                        <li><code>AvailabilityZone</code><strong>:&nbsp;</strong>The Availability Zone in which to create the default subnet.</li>
                    </ul>
                    The <strong>create_default_subnet()</strong> method returns the Python dictionary object containing the created subnet attributes.
                    <br>Here’s the code execution output:
                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/7.-Creating-a-Default-Subnet-1024x591.png" alt="Creating a Default Subnet" class="ezlazyload wp-image-40038" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/7.-Creating-a-Default-Subnet-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/7.-Creating-a-Default-Subnet-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/7.-Creating-a-Default-Subnet-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/7.-Creating-a-Default-Subnet-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/7.-Creating-a-Default-Subnet-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/7.-Creating-a-Default-Subnet-1024x591.png">
                    <figcaption>Creating a Default Subnet</figcaption>

                    <h4 id="h-creating-a-custom-subnet">Creating a Custom Subnet</h4>
                    To create a custom subnet, you need to use the&nbsp; create_subnet()&nbsp;method from the Boto3 library.
                    In the below example, we are using the Boto3 EC2 resource to create the custom subnet.
                    <br><br>
                    <div class="code-title">Creating a Custom Subnet</div>
                    <pre title="Creating a Custom Subnet" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">create_custom_subnet</span><span class="token punctuation">(</span>az<span class="token punctuation">,</span> vpc_id<span class="token punctuation">,</span> cidr_block<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates a custom subnet with the specified configuration.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_resource<span class="token punctuation">.</span>create_subnet<span class="token punctuation">(</span>TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span>
            <span class="token punctuation">{</span>
                <span class="token string">'ResourceType'</span><span class="token punctuation">:</span> <span class="token string">'subnet'</span><span class="token punctuation">,</span>
                <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token punctuation">{</span>
                    <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
                    <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'nubeera-custom-subnet'</span>
                <span class="token punctuation">}</span><span class="token punctuation">]</span>
            <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
                                              AvailabilityZone<span class="token operator">=</span>az<span class="token punctuation">,</span>
                                              VpcId<span class="token operator">=</span>vpc_id<span class="token punctuation">,</span>
                                              CidrBlock<span class="token operator">=</span>cidr_block<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Could not create a custom subnet.'</span></span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    CIDR_BLOCK <span class="token operator">=</span> <span class="token string">'192.168.1.0/20'</span>
    VPC_ID <span class="token operator">=</span> <span class="token string">'vpc-048604f523ad01d74'</span>
    AZ <span class="token operator">=</span> <span class="token string">'us-east-2a'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Creating a custom Subnet...'</span></span><span class="token punctuation">)</span>
    custom_subnet <span class="token operator">=</span> create_custom_subnet<span class="token punctuation">(</span>AZ<span class="token punctuation">,</span> VPC_ID<span class="token punctuation">,</span> CIDR_BLOCK<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Custom Subnet is created with Subnet ID: </span><span class="token interpolation"><span class="token punctuation">{</span>custom_subnet<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                    The required attributes are:
                    <ul>
                        <li><code>VpcId</code><strong>:&nbsp;</strong>The ID of the VPC.</li>
                    </ul>
                    <ul>
                        <li><code>CidrBlock</code><strong>:&nbsp;</strong>The IPv4 networking range for the Subnet specified in CIDR notation. For example, 192.168.1.0/16.</li>
                    </ul>
                    Optional arguments used in the above example:
                    <ul>
                        <li><code>TagSpecifications</code>: Resource Tags for the Subnet.</li>
                    </ul>
                    <ul>
                        <li><code>AvailabilityZone</code>: The Availability Zone or Local Zone for the Subnet.</li>
                    </ul>
                    The <strong>create_subnet()</strong> method returns the&nbsp;<strong>Subnet resource</strong>&nbsp;object after a successful request.
                    <br>Here’s the code execution output:
                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/8.-Creating-a-Custom-Subnet-1024x591.png" alt="Creating a Custom Subnet" class="ezlazyload wp-image-40040" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/8.-Creating-a-Custom-Subnet-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/8.-Creating-a-Custom-Subnet-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/8.-Creating-a-Custom-Subnet-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/8.-Creating-a-Custom-Subnet-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/8.-Creating-a-Custom-Subnet-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/8.-Creating-a-Custom-Subnet-1024x591.png">
                    <figcaption>Creating a Custom Subnet</figcaption>

                    <h3 id="h-describe-subnets">Describe Subnets</h3>
                    To get the attributes of the existing Subnets in your AWS account, you need to use the&nbsp; describe_subnets()&nbsp;method from the Boto3 library. This method allows you to describe existing Subnets by using Subnet Ids and Filters. We will use Filters in the example below.
                    <blockquote class="wp-block-quote">
                        We will use the Boto3 library paginator object to get the complete output from the <strong>describe_subnets() </strong>method.
                    </blockquote>
                    <br><br>
                    <div class="code-title">Describe Subnets</div>
                    <pre title="Describe Subnets" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">describe_subnets</span><span class="token punctuation">(</span>tag<span class="token punctuation">,</span> tag_values<span class="token punctuation">,</span> max_items<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Describes one or more of your Subnets.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        <span class="token comment"># creating paginator object for describe_subnets() method</span>
        paginator <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>get_paginator<span class="token punctuation">(</span><span class="token string">'describe_subnets'</span><span class="token punctuation">)</span>

        <span class="token comment"># creating a PageIterator from the paginator</span>
        response_iterator <span class="token operator">=</span> paginator<span class="token punctuation">.</span>paginate<span class="token punctuation">(</span>
            Filters<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string-interpolation"><span class="token string">f'tag:</span><span class="token interpolation"><span class="token punctuation">{</span>tag<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">,</span>
                <span class="token string">'Values'</span><span class="token punctuation">:</span> tag_values
            <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
            PaginationConfig<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'MaxItems'</span><span class="token punctuation">:</span> max_items<span class="token punctuation">}</span><span class="token punctuation">)</span>

        full_result <span class="token operator">=</span> response_iterator<span class="token punctuation">.</span>build_full_result<span class="token punctuation">(</span><span class="token punctuation">)</span>

        subnet_list <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span>

        <span class="token keyword">for</span> page <span class="token keyword">in</span> full_result<span class="token punctuation">[</span><span class="token string">'Subnets'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
            subnet_list<span class="token punctuation">.</span>append<span class="token punctuation">(</span>page<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not describe subnets.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> subnet_list


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    TAG <span class="token operator">=</span> <span class="token string">'Name'</span>
    TAG_VALUES <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">'nubeera-custom-subnet'</span><span class="token punctuation">]</span>
    MAX_ITEMS <span class="token operator">=</span> <span class="token number">10</span>
    subnets <span class="token operator">=</span> describe_subnets<span class="token punctuation">(</span>TAG<span class="token punctuation">,</span> TAG_VALUES<span class="token punctuation">,</span> MAX_ITEMS<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Subnet Details: '</span><span class="token punctuation">)</span>
    <span class="token keyword">for</span> subnet <span class="token keyword">in</span> subnets<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>subnet<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span> <span class="token operator">+</span> <span class="token string">'\n'</span><span class="token punctuation">)</span>
</blockquote></pre>
                    Optional arguments used in the above example:
                    <ul>
                        <li><code>Filters</code>: Specifies the different available filters for narrowing the Subnets search criteria. For all available filters, refer&nbsp; <Paginator.DescribeSubnets" rel="noreferrer noopener">here</a>.</li>
                    </ul>
                    <ul>
                        <li><code>PaginationConfig</code>: Specifies the configuration for the Paginator object. We have used the <code>MaxItems</code> attribute, which specifies the maximum number of Subnets to return in one request.</li>
                    </ul>
                    The <strong>describe_subnets() </strong>method returns a python dictionary object as an output.
                    <br>Here’s the code execution output:
                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/9.-Describe-Subnets-1024x591.png" alt="Describe Subnets" class="ezlazyload wp-image-40041" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/9.-Describe-Subnets-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/9.-Describe-Subnets-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/9.-Describe-Subnets-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/9.-Describe-Subnets-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/9.-Describe-Subnets-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/9.-Describe-Subnets-1024x591.png">
                    <figcaption>Describe Subnets</figcaption>

                    <h3 id="h-modify-subnet-attributes">Modify Subnet Attributes</h3>
                    To modify the existing subnet attribute’s value, you need to use the&nbsp; modify_subnet_attribute()&nbsp;method from the Boto3 library.
                    <br><br>
                    <div class="code-title">Modify Subnet Attributes</div>
                    <pre title="Modify Subnet Attributes" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">modify_subnet_attribute</span><span class="token punctuation">(</span>subnet_id<span class="token punctuation">,</span> map_public_ip_on_launch<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Modifies the specified attribute of the specified subnet.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>modify_subnet_attribute<span class="token punctuation">(</span>
            MapPublicIpOnLaunch<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'Value'</span><span class="token punctuation">:</span> map_public_ip_on_launch<span class="token punctuation">}</span><span class="token punctuation">,</span>
            SubnetId<span class="token operator">=</span>subnet_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not modify the Subnet attribute.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    SUBNET_ID <span class="token operator">=</span> <span class="token string">'subnet-071923fde0da8166e'</span>
    MAP_PUBLIC_IP_ON_LAUNCH <span class="token operator">=</span> <span class="token boolean">True</span>
    subnet_attribute <span class="token operator">=</span> modify_subnet_attribute<span class="token punctuation">(</span>SUBNET_ID<span class="token punctuation">,</span>
                                               MAP_PUBLIC_IP_ON_LAUNCH<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Subnet attribute MapPublicIpOnLaunch modified. New value: </span><span class="token interpolation"><span class="token punctuation">{</span>MAP_PUBLIC_IP_ON_LAUNCH<span class="token punctuation">}</span></span><span class="token string">'</span></span>
    <span class="token punctuation">)</span>
</blockquote></pre>
                    The required attribute is:
                    <ul>
                        <li><code>SubnetId</code><strong>:&nbsp;</strong>The ID of the Subnet.</li>
                    </ul>
                    An optional argument used in the above example:
                    <ul>
                        <li><code>MapPublicIpOnLaunch</code><strong>:&nbsp;</strong>Specifies if the specified Subnet should be assigned a public IPv4 address.</li>
                    </ul>
                    The <strong>modify_subnet_attribute()</strong> method supports few arguments,
                    <ul>
                        <li><strong>AssignIpv6AddressOnCreation</strong></li>
                        <li><strong>MapPublicIpOnLaunch</strong></li>
                        <li><strong>MapCustomerOwnedIpOnLaunch</strong></li>
                        <li><strong>CustomerOwnedIpv4Pool</strong></li>
                    </ul>
                    However, you can modify one argument at a time only.
                    The <strong>modify_subnet_attribute()</strong> does not return any output on a successful request. <br>
                    Here’s an execution output:
                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/10.-Modify-Subnet-Attributes-1024x591.png" alt="Modify Subnet Attributes" class="ezlazyload wp-image-40042" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/10.-Modify-Subnet-Attributes-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/10.-Modify-Subnet-Attributes-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/10.-Modify-Subnet-Attributes-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/10.-Modify-Subnet-Attributes-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/10.-Modify-Subnet-Attributes-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/10.-Modify-Subnet-Attributes-1024x591.png">
                    <figcaption>Modify Subnet Attributes</figcaption>

                    <h3 id="h-delete-a-subnet">Delete a Subnet</h3>
                    To delete the existing subnet, you need to use the&nbsp; delete_subnet()&nbsp;method from the Boto3 library.
                    <blockquote class="wp-block-quote">
                        All the resources running in the Subnet must be detached OR deleted before deleting the Subnet successfully.
                    </blockquote>
                    <br><br>
                    <div class="code-title">Delete a Subnet</div>
                    <pre title="Delete a Subnet" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">delete_subnet</span><span class="token punctuation">(</span>subnet_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Deletes the specified Subnet.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>delete_subnet<span class="token punctuation">(</span>SubnetId<span class="token operator">=</span>subnet_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not delete the subnet.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    SUBNET_ID <span class="token operator">=</span> <span class="token string">'subnet-071923fde0da8166e'</span>
    subnet <span class="token operator">=</span> delete_subnet<span class="token punctuation">(</span>SUBNET_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Subnet </span><span class="token interpolation"><span class="token punctuation">{</span>SUBNET_ID<span class="token punctuation">}</span></span><span class="token string"> is deleted successfully.'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                    The required attribute is:
                    <ul>
                        <li><code>SubnetId</code><strong>:&nbsp;</strong>The ID of the Subnet.</li>
                    </ul>
                    The<strong> delete_subnet()</strong> method does not return any output on a successful request. <br>
                    <br>Here’s the code execution output:
                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/11.-Delete-a-Subnet-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Delete a Subnet" class=" wp-image-40043 ezlazyloading" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/11.-Delete-a-Subnet-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/11.-Delete-a-Subnet-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/09/11.-Delete-a-Subnet-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/09/11.-Delete-a-Subnet-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/11.-Delete-a-Subnet-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/11.-Delete-a-Subnet-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.6949333771425763" srcset="https://hands-on.cloud/wp-content/uploads/2021/09/11.-Delete-a-Subnet-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/11.-Delete-a-Subnet-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/09/11.-Delete-a-Subnet-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/09/11.-Delete-a-Subnet-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/11.-Delete-a-Subnet-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                    <figcaption>Delete a Subnet</figcaption>

                    <h3 id="h-how-to-manage-security-groups-using-boto3">How to manage Security Groups using Boto3?</h3>
                    An AWS Security Group works as a virtual firewall for your EC2 instances and contains a set of rules that filter incoming and outgoing traffic. Both inbound and outbound rules control traffic flow to and from your instance for specified ports and protocols.

                    <h3 id="h-create-a-security-group">Create a Security Group</h3>
                    To create the security group, you need to use the&nbsp; create_security_group()&nbsp;method from the Boto3 library. In the below example, we are using the Boto3 EC2 resource to create the Security Group.
                    <br><br>
                    <div class="code-title">Create a Security Group</div>
                    <pre title="Create a Security Group" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">create_security_group</span><span class="token punctuation">(</span>description<span class="token punctuation">,</span> groupname<span class="token punctuation">,</span> vpc_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates a security group with the specified configuration.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_resource<span class="token punctuation">.</span>create_security_group<span class="token punctuation">(</span>Description<span class="token operator">=</span>description<span class="token punctuation">,</span>
                                                      GroupName<span class="token operator">=</span>groupname<span class="token punctuation">,</span>
                                                      VpcId<span class="token operator">=</span>vpc_id<span class="token punctuation">,</span>
                                                      TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                                                          <span class="token string">'ResourceType'</span><span class="token punctuation">:</span>
                                                          <span class="token string">'security-group'</span><span class="token punctuation">,</span>
                                                          <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token punctuation">{</span>
                                                              <span class="token string">'Key'</span><span class="token punctuation">:</span>
                                                              <span class="token string">'Name'</span><span class="token punctuation">,</span>
                                                              <span class="token string">'Value'</span><span class="token punctuation">:</span>
                                                              groupname
                                                          <span class="token punctuation">}</span><span class="token punctuation">]</span>
                                                      <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not create a security group.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    DESCRIPTION <span class="token operator">=</span> <span class="token string">'Security group created for nubeera blog'</span>
    GROUPNAME <span class="token operator">=</span> <span class="token string">'nubeera-security-group'</span>
    VPC_ID <span class="token operator">=</span> <span class="token string">'vpc-048604f523ad01d74'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Creating a security group...'</span></span><span class="token punctuation">)</span>
    security_group <span class="token operator">=</span> create_security_group<span class="token punctuation">(</span>DESCRIPTION<span class="token punctuation">,</span> GROUPNAME<span class="token punctuation">,</span> VPC_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Security group created with ID: </span><span class="token interpolation"><span class="token punctuation">{</span>security_group<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                    The required attributes are:
                    <ul>
                        <li><code>GroupName</code><strong>:&nbsp;</strong>The name of the security group.</li>
                    </ul>
                    <ul>
                        <li><code>Description</code><strong>:&nbsp;</strong>A description for the security group.</li>
                    </ul>
                    Optional arguments used in the above example:
                    <ul>
                        <li><code>VpcId</code><strong>:</strong>&nbsp;The VPC Id in which the security group is to be created.</li>
                    </ul>
                    <ul>
                        <li><code>TagSpecifications</code>: AWS Resource tags for the security group.</li>
                    </ul>
                    The <strong>create_security_group() </strong>method returns a SecurityGroup resource object containing the Security Group Id.

                    <style>
                        .small-rectangle-1-multi-154 {
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
                    </span><br>Here’s a code execution output:
                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/12.-Create-a-Security-Group-1024x591.png" alt="Create a Security Group" class="ezlazyload wp-image-40045" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/12.-Create-a-Security-Group-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/12.-Create-a-Security-Group-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/12.-Create-a-Security-Group-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/12.-Create-a-Security-Group-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/12.-Create-a-Security-Group-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/12.-Create-a-Security-Group-1024x591.png">
                    <figcaption>Create a Security Group</figcaption>

                    <h3 id="h-manage-security-group-rules">Manage Security Group Rules</h3>
                    Security Group rules define the network traffic parameters to control the traffic on the ports and protocol level. Every security group can have up to 50 rules. Security Group rules can also specify source IP addresses or an IP address range.

                    <h4 id="h-create-security-group-ingress-rule">Create Security Group Ingress Rule</h4>
                    Ingress Rule defines the inbound traffic rules for a Security Group. To add an Ingress rule, you need to use the&nbsp; authorize_security_group_ingress()&nbsp;method from the Boto3 library.
                    <br><br>
                    <div class="code-title">Create Security Group Ingress Rule</div>
                    <pre title="Create Security Group Ingress Rule" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">create_ingress_rule</span><span class="token punctuation">(</span>security_group_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates a security group ingress rule with the specified configuration.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>authorize_security_group_ingress<span class="token punctuation">(</span>
            GroupId<span class="token operator">=</span>security_group_id<span class="token punctuation">,</span>
            IpPermissions<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                <span class="token string">'IpProtocol'</span><span class="token punctuation">:</span> <span class="token string">'tcp'</span><span class="token punctuation">,</span>
                <span class="token string">'FromPort'</span><span class="token punctuation">:</span> <span class="token number">80</span><span class="token punctuation">,</span>
                <span class="token string">'ToPort'</span><span class="token punctuation">:</span> <span class="token number">80</span><span class="token punctuation">,</span>
                <span class="token string">'IpRanges'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token punctuation">{</span>
                    <span class="token string">'CidrIp'</span><span class="token punctuation">:</span> <span class="token string">'0.0.0.0/0'</span>
                <span class="token punctuation">}</span><span class="token punctuation">]</span>
            <span class="token punctuation">}</span><span class="token punctuation">,</span> <span class="token punctuation">{</span>
                <span class="token string">'IpProtocol'</span><span class="token punctuation">:</span> <span class="token string">'tcp'</span><span class="token punctuation">,</span>
                <span class="token string">'FromPort'</span><span class="token punctuation">:</span> <span class="token number">22</span><span class="token punctuation">,</span>
                <span class="token string">'ToPort'</span><span class="token punctuation">:</span> <span class="token number">22</span><span class="token punctuation">,</span>
                <span class="token string">'IpRanges'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token punctuation">{</span>
                    <span class="token string">'CidrIp'</span><span class="token punctuation">:</span> <span class="token string">'0.0.0.0/0'</span>
                <span class="token punctuation">}</span><span class="token punctuation">]</span>
            <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not create ingress security group rule.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    SECURITY_GROUP_ID <span class="token operator">=</span> <span class="token string">'sg-08e4ffb1b4087e728'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Creating a security group ingress rule...'</span></span><span class="token punctuation">)</span>
    rule <span class="token operator">=</span> create_ingress_rule<span class="token punctuation">(</span>SECURITY_GROUP_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Security group ingress rule created: \n</span><span class="token interpolation"><span class="token punctuation">{</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>rule<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                    The required attribute is:
                    <ul>
                        <li><code>GroupId</code><strong>:&nbsp;&nbsp;</strong>Specifies the ID of the security group. You must specify either the security group ID or the security group name in the request.</li>
                    </ul>
                    An optional argument used in the above example:
                    <ul>
                        <li><code>IpPermissions</code><strong>:</strong>&nbsp;The sets of rules containing required <code>IpProtocol</code>, <code>FromPort</code>, <code>ToPort</code>, and <code>IpRanges</code>.</li>
                    </ul>
                    The <strong>authorize_security_group_ingress()</strong> method returns a Python dictionary object as an output.
                    <br>Here’s the code execution output:
                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/13.-Create-Security-Group-Ingress-Rule-1024x591.png" alt="Create Security Group Ingress Rule" class="ezlazyload wp-image-40046" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/13.-Create-Security-Group-Ingress-Rule-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/13.-Create-Security-Group-Ingress-Rule-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/13.-Create-Security-Group-Ingress-Rule-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/13.-Create-Security-Group-Ingress-Rule-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/13.-Create-Security-Group-Ingress-Rule-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/13.-Create-Security-Group-Ingress-Rule-1024x591.png">
                    <figcaption>Create Security Group Ingress Rule</figcaption>

                    <h4 id="h-create-security-group-egress-rule">Create Security Group Egress Rule</h4>
                    Egress Rule defines the outbound traffic rules for a security group. To add an Egress rule, you need to use the&nbsp;authorize_security_group_egress()&nbsp;method from the Boto3 library.
                    <br><br>
                    <div class="code-title">Create Security Group Egress Rule</div>
                    <pre title="Create Security Group Egress Rule" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">create_egress_rule</span><span class="token punctuation">(</span>security_group_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates a security group egress rule with the specified configuration.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>authorize_security_group_egress<span class="token punctuation">(</span>
            GroupId<span class="token operator">=</span>security_group_id<span class="token punctuation">,</span>
            IpPermissions<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                <span class="token string">'IpProtocol'</span><span class="token punctuation">:</span> <span class="token string">'tcp'</span><span class="token punctuation">,</span>
                <span class="token string">'FromPort'</span><span class="token punctuation">:</span> <span class="token number">80</span><span class="token punctuation">,</span>
                <span class="token string">'ToPort'</span><span class="token punctuation">:</span> <span class="token number">80</span><span class="token punctuation">,</span>
                <span class="token string">'IpRanges'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token punctuation">{</span>
                    <span class="token string">'CidrIp'</span><span class="token punctuation">:</span> <span class="token string">'0.0.0.0/0'</span>
                <span class="token punctuation">}</span><span class="token punctuation">]</span>
            <span class="token punctuation">}</span><span class="token punctuation">,</span> <span class="token punctuation">{</span>
                <span class="token string">'IpProtocol'</span><span class="token punctuation">:</span> <span class="token string">'tcp'</span><span class="token punctuation">,</span>
                <span class="token string">'FromPort'</span><span class="token punctuation">:</span> <span class="token number">22</span><span class="token punctuation">,</span>
                <span class="token string">'ToPort'</span><span class="token punctuation">:</span> <span class="token number">22</span><span class="token punctuation">,</span>
                <span class="token string">'IpRanges'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token punctuation">{</span>
                    <span class="token string">'CidrIp'</span><span class="token punctuation">:</span> <span class="token string">'0.0.0.0/0'</span>
                <span class="token punctuation">}</span><span class="token punctuation">]</span>
            <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not create egress security group rule.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    SECURITY_GROUP_ID <span class="token operator">=</span> <span class="token string">'sg-08e4ffb1b4087e728'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Creating a security group egress rule...'</span></span><span class="token punctuation">)</span>
    rule <span class="token operator">=</span> create_egress_rule<span class="token punctuation">(</span>SECURITY_GROUP_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Security group egress rule created: \n</span><span class="token interpolation"><span class="token punctuation">{</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>rule<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                    The required attribute is:
                    <ul>
                        <li><code>GroupId</code><strong>:&nbsp;&nbsp;</strong>Specifies the ID of the security group. You must specify either the security group ID or the security group name in the request.</li>
                    </ul>
                    An optional argument used in the above example:
                    <ul>
                        <li><code>IpPermissions</code><strong>:</strong>&nbsp;The sets of rules containing required <code>IpProtocol</code>, <code>FromPort</code>, <code>ToPort</code>, and <code>IpRanges</code>.</li>
                    </ul>
                    The <strong>authorize_security_group_egress()</strong> method returns a Python dictionary object as an output.
                    <br>Here’s a code execution output:
                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/14.-Create-Security-Group-Egress-Rule-1024x591.png" alt="Create Security Group Egress Rule" class="ezlazyload wp-image-40048" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/14.-Create-Security-Group-Egress-Rule-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/14.-Create-Security-Group-Egress-Rule-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/14.-Create-Security-Group-Egress-Rule-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/14.-Create-Security-Group-Egress-Rule-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/14.-Create-Security-Group-Egress-Rule-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/14.-Create-Security-Group-Egress-Rule-1024x591.png">
                    <figcaption>Create Security Group Egress Rule</figcaption>

                    <h4 id="h-modify-security-groups-rule">Modify Security Groups Rule</h4>
                    To modify the existing rule, you need to use the&nbsp; modify_security_group_rules()</a>&nbsp;method from the Boto3 library.
                    <br><br>
                    <div class="code-title">Modify Security Groups Rule</div>
                    <pre title="Modify Security Groups Rule" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">modify_rule</span><span class="token punctuation">(</span>security_group_id<span class="token punctuation">,</span> security_group_rule_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Modify the existing security group rules with the specified configuration.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>modify_security_group_rules<span class="token punctuation">(</span>
            GroupId<span class="token operator">=</span>security_group_id<span class="token punctuation">,</span>
            SecurityGroupRules<span class="token operator">=</span><span class="token punctuation">[</span>
                <span class="token punctuation">{</span>
                    <span class="token string">'SecurityGroupRuleId'</span><span class="token punctuation">:</span> security_group_rule_id<span class="token punctuation">,</span>
                    <span class="token string">'SecurityGroupRule'</span><span class="token punctuation">:</span> <span class="token punctuation">{</span>
                        <span class="token string">'IpProtocol'</span><span class="token punctuation">:</span> <span class="token string">'tcp'</span><span class="token punctuation">,</span>
                        <span class="token string">'FromPort'</span><span class="token punctuation">:</span> <span class="token number">8080</span><span class="token punctuation">,</span>
                        <span class="token string">'ToPort'</span><span class="token punctuation">:</span> <span class="token number">8080</span><span class="token punctuation">,</span>
                        <span class="token string">'CidrIpv4'</span><span class="token punctuation">:</span> <span class="token string">'0.0.0.0/0'</span><span class="token punctuation">,</span>
                        <span class="token string">'Description'</span><span class="token punctuation">:</span> <span class="token string">'nubeera-security-group-rules'</span>
                    <span class="token punctuation">}</span>
                <span class="token punctuation">}</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span><span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not modify security group rule.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    SECURITY_GROUP_ID <span class="token operator">=</span> <span class="token string">'sg-08e4ffb1b4087e728'</span>
    SECURITY_GROUP_RULE_ID <span class="token operator">=</span> <span class="token string">'sgr-0587b4899af1c7a2f'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Modifing a security group rule...'</span></span><span class="token punctuation">)</span>
    rule <span class="token operator">=</span> modify_rule<span class="token punctuation">(</span>SECURITY_GROUP_ID<span class="token punctuation">,</span> SECURITY_GROUP_RULE_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Security group rule modified: \n</span><span class="token interpolation"><span class="token punctuation">{</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>rule<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                    The required attributes are:
                    <ul>
                        <li><code>GroupId</code><strong>:&nbsp;</strong>Specifies the ID of the security group.</li>
                    </ul>
                    <ul>
                        <li><code>SecurityGroupRules</code><strong>:&nbsp;</strong>Security group properties to update. To view all the properties that you can modify, refer&nbsp; here.</li>
                    </ul>
                    In the above example, we are modifying the ingress rule created earlier with a different port number.
                    The <strong>modify_security_group_rules()</strong> method returns a Python dictionary object as an output.
                    <br>Here’s the code execution output:
                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/15.-Modify-Security-Groups-Rule-1024x591.png" alt="15. Modify Security Groups Rule" class="ezlazyload wp-image-40050" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/15.-Modify-Security-Groups-Rule-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/15.-Modify-Security-Groups-Rule-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/15.-Modify-Security-Groups-Rule-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/15.-Modify-Security-Groups-Rule-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/15.-Modify-Security-Groups-Rule-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/15.-Modify-Security-Groups-Rule-1024x591.png">
                    <figcaption>Modify Security Groups Rule</figcaption>

                    <h4 id="h-delete-security-group-ingress-rule">Delete Security Group Ingress Rule</h4>
                    To remove the existing Ingress rule from a Security Group, you need to use the&nbsp; revoke_security_group_ingress()&nbsp;method from the Boto3 library.
                    <br><br>
                    <div class="code-title">Delete Security Group Ingress Rule</div>
                    <pre title="Delete Security Group Ingress Rule" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">delete_ingress_rule</span><span class="token punctuation">(</span>security_group_id<span class="token punctuation">,</span> security_group_rule_ids<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Deletes a security group ingress rule.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>revoke_security_group_ingress<span class="token punctuation">(</span>
            GroupId<span class="token operator">=</span>security_group_id<span class="token punctuation">,</span>
            SecurityGroupRuleIds<span class="token operator">=</span>security_group_rule_ids<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not delete ingress security group rule.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    SECURITY_GROUP_ID <span class="token operator">=</span> <span class="token string">'sg-08e4ffb1b4087e728'</span>
    SECURITY_GROUP_RULE_ID <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">'sgr-0587b4899af1c7a2f'</span><span class="token punctuation">]</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Removing a security group ingress rule(s)...'</span></span><span class="token punctuation">)</span>
    rule <span class="token operator">=</span> delete_ingress_rule<span class="token punctuation">(</span>SECURITY_GROUP_ID<span class="token punctuation">,</span> SECURITY_GROUP_RULE_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Security group ingress rule(s) deleted: \n</span><span class="token interpolation"><span class="token punctuation">{</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>rule<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span>
    <span class="token punctuation">)</span>
</blockquote></pre>
                    The required attributes are:
                    <ul>
                        <li><code>GroupId</code><strong>:&nbsp;</strong>Specifies the ID of the security group.</li>
                    </ul>
                    <ul>
                        <li><code>SecurityGroupRuleIds</code><strong>:&nbsp;</strong>Specifies the list of the Security Group Rule Ids that are to be deleted.</li>
                    </ul>
                    In the above example, we delete the ingress rule created earlier with the <strong>HTTP</strong> <strong>8080</strong> port number.
                    The <strong>revoke_security_group_ingress()</strong> method returns a python dictionary object as an output.
                    <br>Here’s the code execution output:
                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/16.-Delete-Security-Group-Ingress-Rule-1024x591.png" alt="Delete Security Group Ingress Rule" class="ezlazyload wp-image-40052" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/16.-Delete-Security-Group-Ingress-Rule-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/16.-Delete-Security-Group-Ingress-Rule-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/16.-Delete-Security-Group-Ingress-Rule-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/16.-Delete-Security-Group-Ingress-Rule-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/16.-Delete-Security-Group-Ingress-Rule-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/16.-Delete-Security-Group-Ingress-Rule-1024x591.png">
                    <figcaption>Delete Security Group Ingress Rule</figcaption>

                    <h4 id="h-delete-security-group-egress-rule">Delete Security Group Egress Rule</h4>
                    To remove the existing Egress rule from a Security Group, you need to use the&nbsp; revoke_security_group_egress()&nbsp;method from the Boto3 library.
                    <br><br>
                    <div class="code-title">Delete Security Group Egress Rule</div>
                    <pre title="Delete Security Group Egress Rule" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">delete_egress_rule</span><span class="token punctuation">(</span>security_group_id<span class="token punctuation">,</span> security_group_rule_ids<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Deletes a security group egress rule.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>revoke_security_group_egress<span class="token punctuation">(</span>
            GroupId<span class="token operator">=</span>security_group_id<span class="token punctuation">,</span>
            SecurityGroupRuleIds<span class="token operator">=</span>security_group_rule_ids<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not delete egress security group rule.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    SECURITY_GROUP_ID <span class="token operator">=</span> <span class="token string">'sg-08e4ffb1b4087e728'</span>
    SECURITY_GROUP_RULE_ID <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">'sgr-0c1b8c264ea2d0e6f'</span><span class="token punctuation">]</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Removing a security group egress rule(s)...'</span></span><span class="token punctuation">)</span>
    rule <span class="token operator">=</span> delete_egress_rule<span class="token punctuation">(</span>SECURITY_GROUP_ID<span class="token punctuation">,</span> SECURITY_GROUP_RULE_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Security group egress rule(s) deleted: \n</span><span class="token interpolation"><span class="token punctuation">{</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>rule<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span>
    <span class="token punctuation">)</span>
</blockquote></pre>
                    The required attributes are:
                    <ul>
                        <li><code>GroupId</code><strong>:&nbsp;</strong>Specifies the ID of the security group.</li>
                    </ul>
                    <ul>
                        <li><code>SecurityGroupRuleIds</code><strong>:&nbsp;</strong>Specifies the list of the Security Group Rule Ids that are to be deleted.</li>
                    </ul>
                    In the above example, we delete the egress rule created earlier with the <strong>SSH 22</strong> port number.

                    The <strong>revoke_security_group_egress() </strong>method returns a Python dictionary object as an output.
                    <br>Here’s the code execution output:
                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/17.-Delete-Security-Group-Egress-Rule-1024x591.png" alt="Delete Security Group Egress Rule" class="ezlazyload wp-image-40055" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/17.-Delete-Security-Group-Egress-Rule-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/17.-Delete-Security-Group-Egress-Rule-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/17.-Delete-Security-Group-Egress-Rule-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/17.-Delete-Security-Group-Egress-Rule-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/17.-Delete-Security-Group-Egress-Rule-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/17.-Delete-Security-Group-Egress-Rule-1024x591.png">
                    <figcaption>Delete Security Group Egress Rule</figcaption>

                    <h3 id="h-describe-security-groups">Describe Security Groups</h3>
                    To get the existing Security Groups details in your AWS account, you need to use the&nbsp; describe_security_groups( <describe_subnets" rel="noreferrer noopener">)</a>&nbsp;method from the Boto3 library.&nbsp;
                        This method allows you to describe existing Security Groups using few methods, Security Group Ids, Security Group Names, and Filters. We will use Filters in the example below.
                        <blockquote class="wp-block-quote">
                            We will use the Boto3 library paginator object to get the complete output from the <strong>describe_security_groups()</strong> method.
                        </blockquote>
                        <br><br>
                        <div class="code-title">Describe Security Groups</div>
                        <pre title="Describe Security Groups" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">describe_security_groups</span><span class="token punctuation">(</span>tag<span class="token punctuation">,</span> tag_values<span class="token punctuation">,</span> max_items<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Describes one or more of your security groups.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        <span class="token comment"># creating paginator object for describe_subnets() method</span>
        paginator <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>get_paginator<span class="token punctuation">(</span><span class="token string">'describe_security_groups'</span><span class="token punctuation">)</span>

        <span class="token comment"># creating a PageIterator from the paginator</span>
        response_iterator <span class="token operator">=</span> paginator<span class="token punctuation">.</span>paginate<span class="token punctuation">(</span>
            Filters<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string-interpolation"><span class="token string">f'tag:</span><span class="token interpolation"><span class="token punctuation">{</span>tag<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">,</span>
                <span class="token string">'Values'</span><span class="token punctuation">:</span> tag_values
            <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
            PaginationConfig<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'MaxItems'</span><span class="token punctuation">:</span> max_items<span class="token punctuation">}</span><span class="token punctuation">)</span>

        full_result <span class="token operator">=</span> response_iterator<span class="token punctuation">.</span>build_full_result<span class="token punctuation">(</span><span class="token punctuation">)</span>

        security_groups_list <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span>

        <span class="token keyword">for</span> page <span class="token keyword">in</span> full_result<span class="token punctuation">[</span><span class="token string">'SecurityGroups'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
            security_groups_list<span class="token punctuation">.</span>append<span class="token punctuation">(</span>page<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not describe Security Groups.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> security_groups_list


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    TAG <span class="token operator">=</span> <span class="token string">'Name'</span>
    TAG_VALUES <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">'nubeera-security-group'</span><span class="token punctuation">]</span>
    MAX_ITEMS <span class="token operator">=</span> <span class="token number">10</span>
    security_groups <span class="token operator">=</span> describe_security_groups<span class="token punctuation">(</span>TAG<span class="token punctuation">,</span> TAG_VALUES<span class="token punctuation">,</span> MAX_ITEMS<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Security Groups details: '</span><span class="token punctuation">)</span>
    <span class="token keyword">for</span> security_group <span class="token keyword">in</span> security_groups<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>security_groups<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span> <span class="token operator">+</span> <span class="token string">'\n'</span><span class="token punctuation">)</span>
</blockquote></pre>
                        Optional arguments used in the above example:
                        <ul>
                            <li><code>Filters</code>: Specifies the different available filters for narrowing the Security Groups search criteria. For all available filters, refer&nbsp; <Paginator.DescribeSecurityGroups" rel="noreferrer noopener">here</a>.</li>
                        </ul>
                        <ul>
                            <li><code>PaginationConfig</code>: Specifies the configuration for the Paginator object. We have used the MaxItems attribute, which specifies the maximum number of Security Groups to return in one request.</li>
                        </ul>
                        <br>Here’s the code execution output:
                        <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/18.-Describe-Security-Groups-1-1024x591.png" alt="Describe Security Groups" class="ezlazyload wp-image-40056" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/18.-Describe-Security-Groups-1-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/18.-Describe-Security-Groups-1-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/18.-Describe-Security-Groups-1-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/18.-Describe-Security-Groups-1-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/18.-Describe-Security-Groups-1-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/18.-Describe-Security-Groups-1-1024x591.png">
                        <figcaption>Describe Security Groups</figcaption>

                        <h3 id="h-describe-security-group-rules">Describe Security Group Rules</h3>
                        To get the current Security Group Rules information in your AWS account, you need to use the&nbsp; <describe_security_group_rules" rel="noreferrer noopener">describe_security_group_rules()</a>&nbsp;method from the Boto3 library.&nbsp;
                            This method allows you to describe existing Security Group Rules using two methods, Security Group Rule Ids and Filters. We will use Filters in the below example.
                            <blockquote class="wp-block-quote">
                                We will use the Boto3 library paginator object to get the complete output from the <strong>describe_security_group_rules() </strong>method.
                            </blockquote>
                            <br><br>
                            <div class="code-title">Describe Security Group Rules</div>
                            <pre title="Describe Security Group Rules" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">describe_security_groups_rules</span><span class="token punctuation">(</span>security_group_ids<span class="token punctuation">,</span> max_items<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Describes one or more of your security groups rules.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        <span class="token comment"># creating paginator object for describe_subnets() method</span>
        paginator <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>get_paginator<span class="token punctuation">(</span><span class="token string">'describe_security_group_rules'</span><span class="token punctuation">)</span>

        <span class="token comment"># creating a PageIterator from the paginator</span>
        response_iterator <span class="token operator">=</span> paginator<span class="token punctuation">.</span>paginate<span class="token punctuation">(</span>
            Filters<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string">'group-id'</span><span class="token punctuation">,</span>
                <span class="token string">'Values'</span><span class="token punctuation">:</span> security_group_ids
            <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
            PaginationConfig<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'MaxItems'</span><span class="token punctuation">:</span> max_items<span class="token punctuation">}</span><span class="token punctuation">)</span>

        full_result <span class="token operator">=</span> response_iterator<span class="token punctuation">.</span>build_full_result<span class="token punctuation">(</span><span class="token punctuation">)</span>

        security_groups_rules <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span>

        <span class="token keyword">for</span> page <span class="token keyword">in</span> full_result<span class="token punctuation">[</span><span class="token string">'SecurityGroupRules'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
            security_groups_rules<span class="token punctuation">.</span>append<span class="token punctuation">(</span>page<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not describe Security Groups Rules.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> security_groups_rules


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    SECURITY_GROUP_IDS <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">'sg-08e4ffb1b4087e728'</span><span class="token punctuation">]</span>
    MAX_ITEMS <span class="token operator">=</span> <span class="token number">10</span>
    rules <span class="token operator">=</span> describe_security_groups_rules<span class="token punctuation">(</span>SECURITY_GROUP_IDS<span class="token punctuation">,</span> MAX_ITEMS<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Security groups rules: '</span><span class="token punctuation">)</span>
    <span class="token keyword">for</span> rule <span class="token keyword">in</span> rules<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>rule<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span> <span class="token operator">+</span> <span class="token string">'\n'</span><span class="token punctuation">)</span></blockquote></pre>
                            Optional arguments used in the above example:
                            <ul>
                                <li><code>Filters</code>: Specifies the different available filters for narrowing the Security Groups Rules search criteria. For all available filters, refer&nbsp; <Paginator.DescribeSecurityGroupRules" rel="noreferrer noopener">here</a>.</li>
                            </ul>
                            <ul>
                                <li><code>PaginationConfig</code>: Specifies the configuration for the Paginator object. We have used the <code>MaxItems</code> attribute, which specifies the maximum number of Security Groups Rules to return in one request.</li>
                            </ul>
                            In the above example, we have used&nbsp;<strong>group-id&nbsp;</strong>as a filter.&nbsp;<strong>Group-id&nbsp;</strong>specifies the list of security groups to get the ingress and egress rules.
                            <br>Here’s the code execution output:
                            <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/19.-Describe-Security-Group-Rules-1024x591.png" alt="Describe Security Group Rules" class="ezlazyload wp-image-40058" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/19.-Describe-Security-Group-Rules-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/19.-Describe-Security-Group-Rules-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/19.-Describe-Security-Group-Rules-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/19.-Describe-Security-Group-Rules-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/19.-Describe-Security-Group-Rules-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/19.-Describe-Security-Group-Rules-1024x591.png">
                            <figcaption>Describe Security Group Rules</figcaption>

                            <h3 id="h-delete-security-group">Delete Security Group</h3>
                            To delete the specific Security Group, you need to use the&nbsp; <delete_security_group" rel="noreferrer noopener">delete_security_group()</a>&nbsp;method from the Boto3 library.
                                <br><br>
                                <div class="code-title">Delete Security Group</div>
                                <pre title="Delete Security Group" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">delete_security_group</span><span class="token punctuation">(</span>security_group_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Deletes the specified security group.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>delete_security_group<span class="token punctuation">(</span>GroupId<span class="token operator">=</span>security_group_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not delete the security group.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    SECURITY_GROUP_ID <span class="token operator">=</span> <span class="token string">'sg-08e4ffb1b4087e728'</span>
    security_group <span class="token operator">=</span> delete_security_group<span class="token punctuation">(</span>SECURITY_GROUP_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Security group </span><span class="token interpolation"><span class="token punctuation">{</span>SECURITY_GROUP_ID<span class="token punctuation">}</span></span><span class="token string"> is deleted successfully.'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                                The required attribute is:
                                <ul>
                                    <li><code>GroupId</code><strong>:&nbsp;</strong>Specifies the ID of the security group to be deleted.</li>
                                </ul>
                                The <strong>delete_security_group()</strong> method does not return any object on a successful request.
                                <br>Here’s the code execution output:
                                <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/09/20.-Delete-Security-Group-1024x591.png" alt="Delete Security Group" class="ezlazyload wp-image-40060" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/09/20.-Delete-Security-Group-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/09/20.-Delete-Security-Group-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/09/20.-Delete-Security-Group-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/09/20.-Delete-Security-Group-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/09/20.-Delete-Security-Group-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/09/20.-Delete-Security-Group-1024x591.png">
                                <figcaption>Delete Security Group</figcaption>

                                <h3 id="h-how-to-manage-network-access-control-lists-using-boto3">How to manage Network Access Control Lists using Boto3?</h3>
                                <strong>Network Access Control Lists (or NACLs)</strong> provide an additional layer of network security to the AWS resources inside a VPC. NACLs are similar to&nbsp;Security Groups<strong>&nbsp;</strong>in a way that you can define incoming and outgoing traffic rules.
                                A few of the differences between NACLs and Security Groups: <br><br>
                                <figure class="wp-block-table">
                                    <table class="has-fixed-layout">
                                        <thead>
                                            <tr>
                                                <th>NACLs</th>
                                                <th>Security Groups</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Work on a Subnet level</td>
                                                <td>Attached to network interfaces</td>
                                            </tr>
                                            <tr>
                                                <td>Allow explicit <strong>Deny</strong> rules for ports and IP address ranges</td>
                                                <td>Define only <strong>Allow</strong> rules for ports and IP address ranges.</td>
                                            </tr>
                                            <tr>
                                                <td>Stateless</td>
                                                <td>Stateful</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </figure>

                                <h3 id="h-create-network-access-control-list">Create Network Access Control List</h3>
                                To create a Network Access Control List, you need to use the&nbsp; <ServiceResource.create_network_acl" rel="noreferrer noopener">create_network_acl()</a>&nbsp;method from the Boto3 library. In the example below, we are using the Boto3 EC2 resource to create the Network ACL:
                                    <br><br>
                                    <div class="code-title">Create Network Access Control List</div>
                                    <pre title="Create Network Access Control List" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_resource <span class="token operator">=</span> boto3<span class="token punctuation">.</span>resource<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">create_network_acl</span><span class="token punctuation">(</span>vpc_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates a network access control list with the specified configuration.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_resource<span class="token punctuation">.</span>create_network_acl<span class="token punctuation">(</span>
            VpcId<span class="token operator">=</span>vpc_id<span class="token punctuation">,</span>
            TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span>
                <span class="token punctuation">{</span>
                    <span class="token string">'ResourceType'</span><span class="token punctuation">:</span>
                    <span class="token string">'network-acl'</span><span class="token punctuation">,</span>
                    <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                        <span class="token punctuation">{</span>
                            <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
                            <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'nubeera-network-acl'</span>
                        <span class="token punctuation">}</span><span class="token punctuation">,</span>
                    <span class="token punctuation">]</span>
                <span class="token punctuation">}</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span><span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not create a network access control list.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    VPC_ID <span class="token operator">=</span> <span class="token string">'vpc-048604f523ad01d74'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Creating a network access control list...'</span></span><span class="token punctuation">)</span>
    network_acl <span class="token operator">=</span> create_network_acl<span class="token punctuation">(</span>VPC_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Network access control list created with ID: </span><span class="token interpolation"><span class="token punctuation">{</span>network_acl<span class="token punctuation">.</span><span class="token builtin">id</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                                    The required attribute is:
                                    <ul>
                                        <li><code>VpcId</code><strong>:&nbsp;</strong>Specifies the ID of the VPC.</li>
                                    </ul>
                                    The&nbsp;<strong>create_network_acl()</strong>&nbsp;method returns the resource object containing the Network ACL ID on a successful request.
                                    <br>Here’s the code execution output:
                                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/21.-Create-Network-ACL-1024x591.png" alt="Create Network ACL" class="ezlazyload wp-image-40351" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/21.-Create-Network-ACL-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/21.-Create-Network-ACL-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/10/21.-Create-Network-ACL-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/10/21.-Create-Network-ACL-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/21.-Create-Network-ACL-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/21.-Create-Network-ACL-1024x591.png">
                                    <figcaption>Create Network ACL</figcaption>

                                    <h3 id="h-manage-network-access-control-list-entries">Manage Network Access Control List Entries</h3>
                                    Network ACL entries define the network traffic parameters to control the traffic on the ports and protocol level.
                                    Here are the attributes of a network ACL rule:
                                    <ul>
                                        <li><strong>Rule number</strong>. Rules are evaluated on a priority basis starting with the lowest to the highest numbered rule.</li>
                                        <li><strong>Type</strong>. The type of traffic, for example, HTTPS.</li>
                                        <li><strong>Protocol</strong>. You can specify all standard protocols to control the traffic flow.</li>
                                        <li><strong>Port range</strong>. Specifies the listening port or port range for incoming or outgoing traffic. For example, 22 for SSH traffic.</li>
                                        <li><strong>Source</strong>. The source CIDR range of the traffic. This applies to Inbound rules only.</li>
                                        <li><strong>Destination</strong>. The destination CIDR range for the traffic. This applies to Outbound rules only.</li>
                                        <li><strong>Allow/Deny</strong>. Specifies&nbsp;<em>allow</em>&nbsp;or&nbsp;<em>deny</em>&nbsp;conditions for the specified traffic.</li>
                                    </ul>

                                    <h4 id="h-create-network-access-control-list-entry">Create Network Access Control List entry</h4>
                                    To create a Network Access Control List entry, you need to use the&nbsp; <create_network_acl_entry" rel="noreferrer noopener">create_network_acl_entry()</a>&nbsp;method from the Boto3 library.
                                        <br><br>
                                        <div class="code-title">Create Network Access Control List Entry</div>
                                        <pre title="Create Network Access Control List Entry" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">create_network_acl_entry</span><span class="token punctuation">(</span>cidr<span class="token punctuation">,</span> nacl_id<span class="token punctuation">,</span> from_port<span class="token punctuation">,</span> to_port<span class="token punctuation">,</span> protocol<span class="token punctuation">,</span>
                             rule_action<span class="token punctuation">,</span> rule_number<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates a network acl entry with the specified configuration.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>create_network_acl_entry<span class="token punctuation">(</span>CidrBlock<span class="token operator">=</span>cidr<span class="token punctuation">,</span>
                                                       Egress<span class="token operator">=</span><span class="token boolean">False</span><span class="token punctuation">,</span>
                                                       NetworkAclId<span class="token operator">=</span>nacl_id<span class="token punctuation">,</span>
                                                       PortRange<span class="token operator">=</span><span class="token punctuation">{</span>
                                                           <span class="token string">'From'</span><span class="token punctuation">:</span> from_port<span class="token punctuation">,</span>
                                                           <span class="token string">'To'</span><span class="token punctuation">:</span> to_port<span class="token punctuation">,</span>
                                                       <span class="token punctuation">}</span><span class="token punctuation">,</span>
                                                       Protocol<span class="token operator">=</span>protocol<span class="token punctuation">,</span>
                                                       RuleAction<span class="token operator">=</span>rule_action<span class="token punctuation">,</span>
                                                       RuleNumber<span class="token operator">=</span>rule_number<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not create a network acl entry.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    CIDR <span class="token operator">=</span> <span class="token string">'0.0.0.0/0'</span>
    NACL_ID <span class="token operator">=</span> <span class="token string">'acl-0fc095d09c6319831'</span>
    FROM_PORT <span class="token operator">=</span> <span class="token number">22</span>
    TO_PORT <span class="token operator">=</span> <span class="token number">22</span>
    PROTOCOL <span class="token operator">=</span> <span class="token string">'6'</span>
    RULE_ACTION <span class="token operator">=</span> <span class="token string">'allow'</span>
    RULE_NUMBER <span class="token operator">=</span> <span class="token number">101</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Creating a network acl entry...'</span><span class="token punctuation">)</span>
    network_acl <span class="token operator">=</span> create_network_acl_entry<span class="token punctuation">(</span>CIDR<span class="token punctuation">,</span> NACL_ID<span class="token punctuation">,</span> FROM_PORT<span class="token punctuation">,</span>
                                              TO_PORT<span class="token punctuation">,</span> PROTOCOL<span class="token punctuation">,</span> RULE_ACTION<span class="token punctuation">,</span>
                                              RULE_NUMBER<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Network Acl Entry created.'</span><span class="token punctuation">)</span>
</blockquote></pre>
                                        The required attributes are:
                                        <ul>
                                            <li><strong><code>Egress</code>:&nbsp;</strong>Specifies whether this is an egress rule (applied to traffic leaving the subnet).</li>
                                            <li><strong><code>NetworkAclId</code>:&nbsp;</strong>The ID of the network ACL.</li>
                                            <li><strong><code>Protocol</code>:&nbsp;</strong>The protocol number.&nbsp;</li>
                                        </ul>
                                        <figure class="wp-block-table is-style-stripes">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="has-text-align-center" data-align="center">Protocol</th>
                                                        <th class="has-text-align-center" data-align="center">Protocol Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="has-text-align-center" data-align="center">TCP</td>
                                                        <td class="has-text-align-center" data-align="center">6</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="has-text-align-center" data-align="center">UDP</td>
                                                        <td class="has-text-align-center" data-align="center">17</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="has-text-align-center" data-align="center">ICMP</td>
                                                        <td class="has-text-align-center" data-align="center">1</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="has-text-align-center" data-align="center">All Protocols</td>
                                                        <td class="has-text-align-center" data-align="center">-1</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <figcaption>Protocol Numbers</figcaption>
                                        </figure>
                                        <ul>
                                            <li><strong><code>RuleAction</code>:&nbsp;&nbsp;</strong>Specifies whether to allow or deny the traffic that matches the rule.</li>
                                            <li><strong><code>RuleNumber</code>:&nbsp;</strong>The rule number for the entry (for example, 100).</li>
                                        </ul>
                                        Optional arguments used in the above example:
                                        <ul>
                                            <li><strong><code>CidrBlock</code>:&nbsp;</strong>The IPv4 CIDR network range to allow or deny (for example, 192.128.0.0/24 ).</li>
                                            <li><strong><code>PortRange</code>:&nbsp;</strong>TCP or UDP protocols: The range of ports the rule applies to. It is required if specifying protocol 6 (TCP) or 17 (UDP).<ul>
                                                    <li><strong><code>From</code>:&nbsp;</strong>The first port in the range.</li>
                                                    <li><strong><code>To</code>:&nbsp;</strong>The last port in the range.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                        The&nbsp;<strong>create_network_acl_entry()</strong>&nbsp;method does not return any object on a successful request.
                                        <br>Here’s the code execution output:
                                        <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/22.-Create-Network-ACL-Entry-1024x591.png" alt="Create Network ACL Entry" class="ezlazyload wp-image-40350" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/22.-Create-Network-ACL-Entry-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/22.-Create-Network-ACL-Entry-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/10/22.-Create-Network-ACL-Entry-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/10/22.-Create-Network-ACL-Entry-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/22.-Create-Network-ACL-Entry-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/22.-Create-Network-ACL-Entry-1024x591.png">
                                        <figcaption>Create Network ACL Entry</figcaption>

                                        <h4 id="h-replace-network-access-control-list-entry">Replace Network Access Control List entry</h4>
                                        To replace an existing Network Access Control List entry, you need to use the&nbsp; <replace_network_acl_entry" rel="noreferrer noopener">replace_network_acl_entry()</a>&nbsp;method from the Boto3 library.
                                            <br><br>
                                            <div class="code-title">Replace Network Access Control List Entry</div>
                                            <pre title="Replace Network Access Control List Entry" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">replace_network_acl_entry</span><span class="token punctuation">(</span>cidr<span class="token punctuation">,</span> nacl_id<span class="token punctuation">,</span> from_port<span class="token punctuation">,</span> to_port<span class="token punctuation">,</span> protocol<span class="token punctuation">,</span>
                              rule_action<span class="token punctuation">,</span> rule_number<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Replaces a network acl entry with the specified configuration.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>replace_network_acl_entry<span class="token punctuation">(</span>CidrBlock<span class="token operator">=</span>cidr<span class="token punctuation">,</span>
                                                        Egress<span class="token operator">=</span><span class="token boolean">False</span><span class="token punctuation">,</span>
                                                        NetworkAclId<span class="token operator">=</span>nacl_id<span class="token punctuation">,</span>
                                                        PortRange<span class="token operator">=</span><span class="token punctuation">{</span>
                                                            <span class="token string">'From'</span><span class="token punctuation">:</span> from_port<span class="token punctuation">,</span>
                                                            <span class="token string">'To'</span><span class="token punctuation">:</span> to_port<span class="token punctuation">,</span>
                                                        <span class="token punctuation">}</span><span class="token punctuation">,</span>
                                                        Protocol<span class="token operator">=</span>protocol<span class="token punctuation">,</span>
                                                        RuleAction<span class="token operator">=</span>rule_action<span class="token punctuation">,</span>
                                                        RuleNumber<span class="token operator">=</span>rule_number<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not replace a network acl entry.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    CIDR <span class="token operator">=</span> <span class="token string">'0.0.0.0/0'</span>
    NACL_ID <span class="token operator">=</span> <span class="token string">'acl-0fc095d09c6319831'</span>
    FROM_PORT <span class="token operator">=</span> <span class="token number">80</span>
    TO_PORT <span class="token operator">=</span> <span class="token number">80</span>
    PROTOCOL <span class="token operator">=</span> <span class="token string">'6'</span>
    RULE_ACTION <span class="token operator">=</span> <span class="token string">'allow'</span>
    RULE_NUMBER <span class="token operator">=</span> <span class="token number">101</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Replacing a network acl entry...'</span><span class="token punctuation">)</span>
    network_acl <span class="token operator">=</span> replace_network_acl_entry<span class="token punctuation">(</span>CIDR<span class="token punctuation">,</span> NACL_ID<span class="token punctuation">,</span> FROM_PORT<span class="token punctuation">,</span>
                                               TO_PORT<span class="token punctuation">,</span> PROTOCOL<span class="token punctuation">,</span> RULE_ACTION<span class="token punctuation">,</span>
                                               RULE_NUMBER<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Network Acl Entry replaced.'</span><span class="token punctuation">)</span>
</blockquote></pre>
                                            The required attributes are:
                                            <ul>
                                                <li><strong><code>Egress</code>:&nbsp;</strong>Specifies whether this is an egress rule (applied to traffic leaving the subnet).</li>
                                                <li><strong><code>NetworkAclId</code>:&nbsp;</strong>The ID of the network ACL.</li>
                                                <li><strong><code>Protocol</code>:&nbsp;</strong>The protocol number.</li>
                                            </ul>
                                            <figure class="wp-block-table is-style-stripes">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th class="has-text-align-center" data-align="center">Protocol</th>
                                                            <th class="has-text-align-center" data-align="center">Protocol Number</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="has-text-align-center" data-align="center">TCP</td>
                                                            <td class="has-text-align-center" data-align="center">6</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="has-text-align-center" data-align="center">UDP</td>
                                                            <td class="has-text-align-center" data-align="center">17</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="has-text-align-center" data-align="center">ICMP</td>
                                                            <td class="has-text-align-center" data-align="center">1</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="has-text-align-center" data-align="center">All Protocols</td>
                                                            <td class="has-text-align-center" data-align="center">-1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <figcaption>Protocol Numbers</figcaption>
                                            </figure>
                                            <ul>
                                                <li><strong><code>RuleAction</code>:&nbsp;&nbsp;</strong>Specifies whether to allow or deny the traffic that matches the rule.</li>
                                                <li><strong><code>RuleNumber</code>:&nbsp;</strong>The rule number for the entry (for example, 100).</li>
                                            </ul>
                                            Optional arguments used in the above example:
                                            <ul>
                                                <li><strong><code>CidrBlock</code>:&nbsp;</strong>The IPv4 CIDR network range to allow or deny (for example, 192.128.0.0/24 ).</li>
                                                <li><strong><code>PortRange</code>:&nbsp;</strong>TCP or UDP protocols: The range of ports the rule applies to. It is required if specifying protocol 6 (TCP) or 17 (UDP).<ul>
                                                        <li><strong><code>From</code>:&nbsp;</strong>The first port in the range.</li>
                                                        <li><strong><code>To</code>:&nbsp;</strong>The last port in the range.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            In the above example, we replace the <strong>SSH 22</strong> port entry created in the previous example with the <strong>HTTP 80</strong> port.
                                            The&nbsp;<strong>replace_network_acl_entry()</strong>&nbsp;method does not return any object on a successful request.
                                            <br>Here’s the code execution output:
                                            <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/23.-Replace-Network-ACL-Entry-1024x591.png" alt="Replace Network ACL Entry" class="ezlazyload wp-image-40349" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/23.-Replace-Network-ACL-Entry-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/23.-Replace-Network-ACL-Entry-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/10/23.-Replace-Network-ACL-Entry-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/10/23.-Replace-Network-ACL-Entry-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/23.-Replace-Network-ACL-Entry-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/23.-Replace-Network-ACL-Entry-1024x591.png">
                                            <figcaption>Replace Network ACL Entry</figcaption>

                                            <h4 id="h-delete-network-access-control-list-entry">Delete Network Access Control List Entry</h4>
                                            To delete an existing Network Access Control List entry, you need to use the&nbsp; <delete_network_acl_entry" rel="noreferrer noopener">delete_network_acl_entry(</a>) method from the Boto3 library.
                                                <br><br>
                                                <div class="code-title">Delete Network Access Control List Entry</div>
                                                <pre title="Delete Network Access Control List Entry" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">delete_network_acl_entry</span><span class="token punctuation">(</span>nacl_id<span class="token punctuation">,</span> rule_number<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Deletes the specified network acl entry.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>delete_network_acl_entry<span class="token punctuation">(</span>Egress<span class="token operator">=</span><span class="token boolean">False</span><span class="token punctuation">,</span>
                                                       NetworkAclId<span class="token operator">=</span>nacl_id<span class="token punctuation">,</span>
                                                       RuleNumber<span class="token operator">=</span>rule_number<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not delete the network acl entry.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    NACL_ID <span class="token operator">=</span> <span class="token string">'acl-0fc095d09c6319831'</span>
    RULE_NUMBER <span class="token operator">=</span> <span class="token number">101</span>
    network_acl <span class="token operator">=</span> delete_network_acl_entry<span class="token punctuation">(</span>NACL_ID<span class="token punctuation">,</span> RULE_NUMBER<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Network acl entry deleted successfully.'</span><span class="token punctuation">)</span>
</blockquote></pre>
                                                The required attributes are:
                                                <ul>
                                                    <li><strong><code>Egress</code>:&nbsp;</strong>Specifies whether this is an egress rule (applied to traffic leaving the subnet).</li>
                                                    <li><strong><code>NetworkAclId</code>:&nbsp;</strong>The ID of the network ACL.</li>
                                                    <li><strong><code>RuleNumber</code>:&nbsp;</strong>The rule number for the entry (for example, 100).</li>
                                                </ul>
                                                In the above example, we delete the HTTP 80 port entry with Rule Number 101 created in the previous example.
                                                The&nbsp;<strong>delete_network_acl_entry()</strong>&nbsp;method does not return any object on a successful request.
                                                <br>Here’s the code execution output:
                                                <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/24.-Delete-Network-ACL-Entry-1024x591.png" alt="Delete Network ACL Entry" class="ezlazyload wp-image-40348" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/24.-Delete-Network-ACL-Entry-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/24.-Delete-Network-ACL-Entry-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/10/24.-Delete-Network-ACL-Entry-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/10/24.-Delete-Network-ACL-Entry-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/24.-Delete-Network-ACL-Entry-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/24.-Delete-Network-ACL-Entry-1024x591.png">
                                                <figcaption>Delete Network ACL Entry</figcaption>

                                                <h3 id="h-describe-network-access-control-lists">Describe Network Access Control Lists</h3>
                                                To get the current Network ACLs information in your AWS account, you need to use the&nbsp; <describe_network_acls" rel="noreferrer noopener">describe_network_acls()</a>&nbsp;method from the Boto3 library.
                                                    This method allows you to describe existing Network ACLs using two methods, Network ACL Ids, and Filters. We will use Filters in the below example.
                                                    <blockquote class="wp-block-quote">
                                                        We will use the Boto3 library paginator object to get the complete output from the&nbsp;<strong>describe_network_acls()&nbsp;</strong>method.
                                                    </blockquote>
                                                    <br><br>
                                                    <div class="code-title">Describe Network Access Control Lists</div>
                                                    <pre title="Describe Network Access Control Lists" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">describe_network_acls</span><span class="token punctuation">(</span>tag<span class="token punctuation">,</span> tag_values<span class="token punctuation">,</span> max_items<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Describes one or more of your network acls.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        <span class="token comment"># creating paginator object for describe_network_acls() method</span>
        paginator <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>get_paginator<span class="token punctuation">(</span><span class="token string">'describe_network_acls'</span><span class="token punctuation">)</span>

        <span class="token comment"># creating a PageIterator from the paginator</span>
        response_iterator <span class="token operator">=</span> paginator<span class="token punctuation">.</span>paginate<span class="token punctuation">(</span>
            Filters<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string-interpolation"><span class="token string">f'tag:</span><span class="token interpolation"><span class="token punctuation">{</span>tag<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">,</span>
                <span class="token string">'Values'</span><span class="token punctuation">:</span> tag_values
            <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
            PaginationConfig<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'MaxItems'</span><span class="token punctuation">:</span> max_items<span class="token punctuation">}</span><span class="token punctuation">)</span>

        full_result <span class="token operator">=</span> response_iterator<span class="token punctuation">.</span>build_full_result<span class="token punctuation">(</span><span class="token punctuation">)</span>

        network_acls_list <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span>

        <span class="token keyword">for</span> page <span class="token keyword">in</span> full_result<span class="token punctuation">[</span><span class="token string">'NetworkAcls'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
            network_acls_list<span class="token punctuation">.</span>append<span class="token punctuation">(</span>page<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not describe Network Acls.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> network_acls_list


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    TAG <span class="token operator">=</span> <span class="token string">'Name'</span>
    TAG_VALUES <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">'nubeera-network-acl'</span><span class="token punctuation">]</span>
    MAX_ITEMS <span class="token operator">=</span> <span class="token number">10</span>
    network_acls <span class="token operator">=</span> describe_network_acls<span class="token punctuation">(</span>TAG<span class="token punctuation">,</span> TAG_VALUES<span class="token punctuation">,</span> MAX_ITEMS<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Network Acls Details: '</span><span class="token punctuation">)</span>
    <span class="token keyword">for</span> network_acl <span class="token keyword">in</span> network_acls<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>network_acl<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span> <span class="token operator">+</span> <span class="token string">'\n'</span><span class="token punctuation">)</span></blockquote></pre>
                                                    Optional arguments used in the above example:
                                                    <ul>
                                                        <li><code>Filters</code>: Specifies the different available filters for narrowing the Network ACLs search criteria. For all available filters, refer the&nbsp; <Paginator.DescribeNetworkAcls" rel="noreferrer noopener">official Boto3 documentation</a>.</li>
                                                        <li><code>PaginationConfig</code>: Specifies the configuration for the Paginator object. We have used the MaxItems attribute, which specifies the maximum number of Network ACLs to return in one request.</li>
                                                    </ul>
                                                    The&nbsp;<strong>describe_network_acls()&nbsp;</strong>method returns a python dictionary object as an output.
                                                    <br>Here’s the code execution output:
                                                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/25.-Describe-Network-ACLs-1024x591.png" alt="Describe Network ACLs" class="ezlazyload wp-image-40347" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/25.-Describe-Network-ACLs-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/25.-Describe-Network-ACLs-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/10/25.-Describe-Network-ACLs-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/10/25.-Describe-Network-ACLs-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/25.-Describe-Network-ACLs-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/25.-Describe-Network-ACLs-1024x591.png">
                                                    <figcaption>Describe Network ACLs</figcaption>

                                                    <h3 id="h-delete-network-access-control-list">Delete Network Access Control List</h3>
                                                    To delete an existing Network Access Control List, you need to use the&nbsp; <delete_network_acl" rel="noreferrer noopener">delete_network_acl()</a>&nbsp;method from the Boto3 library.
                                                        <br><br>
                                                        <div class="code-title">Delete Network Access Control List</div>
                                                        <pre title="Delete Network Access Control List" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">delete_network_acl</span><span class="token punctuation">(</span>network_acl_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Deletes the specified Network Acl.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>delete_network_acl<span class="token punctuation">(</span>NetworkAclId<span class="token operator">=</span>network_acl_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not delete the Network Acl.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    NETWORK_ACL_ID <span class="token operator">=</span> <span class="token string">'acl-0f01659015e478041'</span>
    network_acl <span class="token operator">=</span> delete_network_acl<span class="token punctuation">(</span>NETWORK_ACL_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Network Acl </span><span class="token interpolation"><span class="token punctuation">{</span>NETWORK_ACL_ID<span class="token punctuation">}</span></span><span class="token string"> is deleted successfully.'</span></span><span class="token punctuation">)</span></blockquote></pre>
                                                        The required attribute is:
                                                        <ul>
                                                            <li><strong><code>NetworkAclId</code>:&nbsp;</strong>Specifies the ID of the network ACL to be deleted.</li>
                                                        </ul>
                                                        The&nbsp;<strong>delete_network_acl()</strong>&nbsp;method does not return any object on a successful request.
                                                        <br>Here’s the code execution output:
                                                        <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/26.-Delete-Network-ACL-1024x591.png" alt="Delete Network ACL" class="ezlazyload wp-image-40346" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/26.-Delete-Network-ACL-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/26.-Delete-Network-ACL-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/10/26.-Delete-Network-ACL-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/10/26.-Delete-Network-ACL-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/26.-Delete-Network-ACL-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/26.-Delete-Network-ACL-1024x591.png">
                                                        <figcaption>Delete Network ACL</figcaption>

                                                        <h3 id="h-how-to-manage-internet-gateways-using-boto3">How to manage Internet Gateways using Boto3?</h3>
                                                        An&nbsp;<strong>Internet Gateway (IGW)</strong>&nbsp;enables the communication between public resources in your AWS Virtual Private Cloud and the Internet. You can only have one IGW per VPC. There is no additional cost for having an Internet Gateway in your account.

                                                        <h3 id="h-create-internet-gateway">Create Internet Gateway</h3>
                                                        To create an Internet gateway, you need to use the&nbsp; <create_internet_gateway" rel="noreferrer noopener">create_internet_gateway()</a>&nbsp;method from the Boto3 library.
                                                            <br><br>
                                                            <div class="code-title">Create Internet Gateway</div>
                                                            <pre title="Create Internet Gateway" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">create_igw</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates an internet gateway with the specified configuration.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>create_internet_gateway<span class="token punctuation">(</span>TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span>
            <span class="token punctuation">{</span>
                <span class="token string">'ResourceType'</span><span class="token punctuation">:</span> <span class="token string">'internet-gateway'</span><span class="token punctuation">,</span>
                <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                    <span class="token punctuation">{</span>
                        <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
                        <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'nubeera-igw'</span>
                    <span class="token punctuation">}</span><span class="token punctuation">,</span>
                <span class="token punctuation">]</span>
            <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token punctuation">]</span><span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not create the internet gateway.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Creating an internet gateway...'</span><span class="token punctuation">)</span>
    igw <span class="token operator">=</span> create_igw<span class="token punctuation">(</span><span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Internet gateway created with: </span><span class="token interpolation"><span class="token punctuation">{</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>igw<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                                                            An optional argument used in the above example:
                                                            <ul>
                                                                <li><code>TagSpecifications</code>: Specifies the resource tags for the Internet Gateway.</li>
                                                            </ul>
                                                            When you create an Internet Gateway, it is not attached to any VPC by default.
                                                            The <strong><strong>create_internet_gateway</strong>()&nbsp;</strong>method returns a python dictionary object as an output.
                                                            <br>Here’s the code execution output:
                                                            <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/27.-Create-Internet-Gateway-1024x591.png" alt="Create Internet Gateway" class="ezlazyload wp-image-40345" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/27.-Create-Internet-Gateway-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/27.-Create-Internet-Gateway-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/10/27.-Create-Internet-Gateway-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/10/27.-Create-Internet-Gateway-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/27.-Create-Internet-Gateway-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/27.-Create-Internet-Gateway-1024x591.png">
                                                            <figcaption>Create Internet Gateway</figcaption>

                                                            <h3 id="h-attach-internet-gateway-to-a-vpc">Attach Internet Gateway to a VPC</h3>
                                                            To attach an Internet Gateway to a VPC, you need to use the&nbsp; <attach_internet_gateway" rel="noreferrer noopener">attach_internet_gateway()</a>&nbsp;method from the Boto3 library.
                                                                <br><br>
                                                                <div class="code-title">Attach Internet Gateway</div>
                                                                <pre title="Attach Internet Gateway" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">attach_igw_to_vpc</span><span class="token punctuation">(</span>internet_gateway_id<span class="token punctuation">,</span> vpc_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Attaches an internet gateway to a VPC.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>attach_internet_gateway<span class="token punctuation">(</span>
            InternetGatewayId<span class="token operator">=</span>internet_gateway_id<span class="token punctuation">,</span> VpcId<span class="token operator">=</span>vpc_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not attach an internet gateway to a VPC.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    INTERNET_GATEWAY_ID <span class="token operator">=</span> <span class="token string">'igw-011479e8fea5256a2'</span>
    VPC_ID <span class="token operator">=</span> <span class="token string">'vpc-09a7bc60ca95ceea2'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Attaching an internet gateway to the VPC...'</span><span class="token punctuation">)</span>
    igw <span class="token operator">=</span> attach_igw_to_vpc<span class="token punctuation">(</span>INTERNET_GATEWAY_ID<span class="token punctuation">,</span> VPC_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Internet gateway </span><span class="token interpolation"><span class="token punctuation">{</span>INTERNET_GATEWAY_ID<span class="token punctuation">}</span></span><span class="token string"> attahced to the VPC </span><span class="token interpolation"><span class="token punctuation">{</span>VPC_ID<span class="token punctuation">}</span></span><span class="token string"> successfully.'</span></span>
    <span class="token punctuation">)</span>
</blockquote></pre>
                                                                The required attributes are:
                                                                <ul>
                                                                    <li><strong><code>InternetGatewayId</code>:&nbsp;</strong>Specifies the ID of the internet gateway.</li>
                                                                    <li><strong><code>VpcId</code>:&nbsp;</strong>Specifies the ID of the VPC.</li>
                                                                </ul>
                                                                The&nbsp;<strong>attach_internet_gateway()</strong>&nbsp;method does not return any object on a successful request.
                                                                <br>Here’s the code execution output:

                                                                <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/28.-Attach-Internet-Gateway-1024x591.png" alt="Attach Internet Gateway" class="ezlazyload wp-image-40343" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/28.-Attach-Internet-Gateway-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/28.-Attach-Internet-Gateway-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/10/28.-Attach-Internet-Gateway-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/10/28.-Attach-Internet-Gateway-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/28.-Attach-Internet-Gateway-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/28.-Attach-Internet-Gateway-1024x591.png">
                                                                <figcaption>Attach Internet Gateway</figcaption>

                                                                <h3 id="h-detach-internet-gateway-from-a-vpc">Detach Internet Gateway from a VPC</h3>
                                                                To detach an Internet Gateway from a VPC, you need to use the&nbsp; <detach_internet_gateway" rel="noreferrer noopener">detach_internet_gateway()</a>&nbsp;method from the Boto3 library.
                                                                    <blockquote class="wp-block-quote">
                                                                        Before detaching the Internet Gateway, the specified VPC must not contain any running EC2 instances with Elastic IP addresses or public IPv4 addresses.
                                                                    </blockquote>
                                                                    <br><br>
                                                                    <div class="code-title">Detach Internet Gateway from a VPC</div>
                                                                    <pre title="Detach Internet Gateway from a VPC" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">detach_igw_to_vpc</span><span class="token punctuation">(</span>internet_gateway_id<span class="token punctuation">,</span> vpc_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Detaches an internet gateway from a VPC.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>detach_internet_gateway<span class="token punctuation">(</span>
            InternetGatewayId<span class="token operator">=</span>internet_gateway_id<span class="token punctuation">,</span> VpcId<span class="token operator">=</span>vpc_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not detach an internet gateway from a VPC.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    INTERNET_GATEWAY_ID <span class="token operator">=</span> <span class="token string">'igw-011479e8fea5256a2'</span>
    VPC_ID <span class="token operator">=</span> <span class="token string">'vpc-09a7bc60ca95ceea2'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Detaching an internet gateway from the VPC...'</span><span class="token punctuation">)</span>
    igw <span class="token operator">=</span> detach_igw_to_vpc<span class="token punctuation">(</span>INTERNET_GATEWAY_ID<span class="token punctuation">,</span> VPC_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Internet gateway </span><span class="token interpolation"><span class="token punctuation">{</span>INTERNET_GATEWAY_ID<span class="token punctuation">}</span></span><span class="token string"> detahced from the VPC </span><span class="token interpolation"><span class="token punctuation">{</span>VPC_ID<span class="token punctuation">}</span></span><span class="token string"> successfully.'</span></span>
    <span class="token punctuation">)</span></blockquote></pre>
                                                                    The required attributes are:
                                                                    <ul>
                                                                        <li><strong><code>InternetGatewayId</code>:&nbsp;</strong>Specifies the ID of the internet gateway.</li>
                                                                        <li><strong><code>VpcId</code>:&nbsp;</strong>Specifies the ID of the VPC.</li>
                                                                    </ul>
                                                                    The&nbsp;<strong>detach_internet_gateway()</strong>&nbsp;method does not return any object on a successful request.
                                                                    <br>Here’s the code execution output:

                                                                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/29.-Detach-Internet-Gateway-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Detach Internet Gateway" class=" wp-image-40341 ezlazyloading" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/29.-Detach-Internet-Gateway-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/29.-Detach-Internet-Gateway-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/29.-Detach-Internet-Gateway-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/29.-Detach-Internet-Gateway-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/29.-Detach-Internet-Gateway-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/29.-Detach-Internet-Gateway-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.35540176362555" srcset="https://hands-on.cloud/wp-content/uploads/2021/10/29.-Detach-Internet-Gateway-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/29.-Detach-Internet-Gateway-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/29.-Detach-Internet-Gateway-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/29.-Detach-Internet-Gateway-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/29.-Detach-Internet-Gateway-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                                                                    <figcaption>Detach Internet Gateway</figcaption>

                                                                    <h3 id="h-describe-internet-gateways">Describe Internet Gateways</h3>
                                                                    To get detailed information of the existing Internet Gateways in your AWS account, you need to use the&nbsp; <describe_internet_gateways" rel="noreferrer noopener">describe_internet_gateways()</a>&nbsp;method from the Boto3 library.&nbsp;
                                                                        This method allows you to describe existing Internet Gateways by using Internet Gateway Ids and Filters. We will use Filters in the example below.
                                                                        <blockquote class="wp-block-quote">
                                                                            We will use the Boto3 library paginator object to get the complete output from the&nbsp;<strong>describe_internet_gateways()&nbsp;</strong>method.
                                                                        </blockquote>
                                                                        <br><br>
                                                                        <div class="code-title">Describe Internet Gateways</div>
                                                                        <pre title="Describe Internet Gateways" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">describe_internet_gateways</span><span class="token punctuation">(</span>tag<span class="token punctuation">,</span> tag_values<span class="token punctuation">,</span> max_items<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Describes one or more of your internet gateways.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        <span class="token comment"># creating paginator object for describe_internet_gateways() method</span>
        paginator <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>get_paginator<span class="token punctuation">(</span><span class="token string">'describe_internet_gateways'</span><span class="token punctuation">)</span>

        <span class="token comment"># creating a PageIterator from the paginator</span>
        response_iterator <span class="token operator">=</span> paginator<span class="token punctuation">.</span>paginate<span class="token punctuation">(</span>
            Filters<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string-interpolation"><span class="token string">f'tag:</span><span class="token interpolation"><span class="token punctuation">{</span>tag<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">,</span>
                <span class="token string">'Values'</span><span class="token punctuation">:</span> tag_values
            <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
            PaginationConfig<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'MaxItems'</span><span class="token punctuation">:</span> max_items<span class="token punctuation">}</span><span class="token punctuation">)</span>

        full_result <span class="token operator">=</span> response_iterator<span class="token punctuation">.</span>build_full_result<span class="token punctuation">(</span><span class="token punctuation">)</span>

        internet_gateways_list <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span>

        <span class="token keyword">for</span> page <span class="token keyword">in</span> full_result<span class="token punctuation">[</span><span class="token string">'InternetGateways'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
            internet_gateways_list<span class="token punctuation">.</span>append<span class="token punctuation">(</span>page<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not describe Internet Gateways.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> internet_gateways_list


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    TAG <span class="token operator">=</span> <span class="token string">'Name'</span>
    TAG_VALUES <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">'nubeera-igw'</span><span class="token punctuation">]</span>
    MAX_ITEMS <span class="token operator">=</span> <span class="token number">10</span>
    internet_gateways <span class="token operator">=</span> describe_internet_gateways<span class="token punctuation">(</span>TAG<span class="token punctuation">,</span> TAG_VALUES<span class="token punctuation">,</span> MAX_ITEMS<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Internet Gateways Details: '</span><span class="token punctuation">)</span>
    <span class="token keyword">for</span> internet_gateway <span class="token keyword">in</span> internet_gateways<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>internet_gateway<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span> <span class="token operator">+</span> <span class="token string">'\n'</span><span class="token punctuation">)</span></blockquote></pre>
                                                                        Optional arguments used in the above example:
                                                                        <ul>
                                                                            <li><code>Filters</code>: Specifies the different available filters for narrowing the Internet Gateways search criteria. For all available filters, refer&nbsp; <Paginator.DescribeInternetGateways" rel="noreferrer noopener">here</a>.</li>
                                                                            <li><code>PaginationConfig</code>: Specifies the configuration for the Paginator object. We have used the MaxItems attribute, which specifies the maximum number of Internet Gateways to return in one request.</li>
                                                                        </ul>
                                                                        The&nbsp;<strong>describe_internet_gateways()&nbsp;</strong>method returns a python dictionary object as an output.
                                                                        <br>Here’s the code execution output:

                                                                        <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/30.-Describe-Internet-Gateways-1024x591.png" alt="Describe Internet Gateways" class="ezlazyload wp-image-40340" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/30.-Describe-Internet-Gateways-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/30.-Describe-Internet-Gateways-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/10/30.-Describe-Internet-Gateways-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/10/30.-Describe-Internet-Gateways-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/30.-Describe-Internet-Gateways-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/30.-Describe-Internet-Gateways-1024x591.png">
                                                                        <figcaption>Describe Internet Gateways</figcaption>

                                                                        <h3 id="h-delete-internet-gateway">Delete Internet Gateway</h3>
                                                                        To delete an existing Internet Gateway, you need to use the&nbsp; <delete_internet_gateway" rel="noreferrer noopener">delete_internet_gateway()</a>&nbsp;method from the Boto3 library.
                                                                            <br><br>
                                                                            <div class="code-title">Delete Internet Gateway</div>
                                                                            <pre title="Delete Internet Gateway" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">delete_internet_gateway</span><span class="token punctuation">(</span>internet_gateway_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Deletes the specified internet gateway.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>delete_internet_gateway<span class="token punctuation">(</span>
            InternetGatewayId<span class="token operator">=</span>internet_gateway_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not delete the Internet Gateway.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    INTERNET_GATEWAY_ID <span class="token operator">=</span> <span class="token string">'igw-011479e8fea5256a2'</span>
    network_acl <span class="token operator">=</span> delete_internet_gateway<span class="token punctuation">(</span>INTERNET_GATEWAY_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Internet Gateway </span><span class="token interpolation"><span class="token punctuation">{</span>INTERNET_GATEWAY_ID<span class="token punctuation">}</span></span><span class="token string"> is deleted successfully.'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                                                                            The required attribute is:
                                                                            <ul>
                                                                                <li><code>InternetGatewayId</code><strong>:&nbsp;</strong>Specifies the ID of the Internet Gateway to be deleted.</li>
                                                                            </ul>
                                                                            The&nbsp;<strong>delete_internet_gateway()</strong>&nbsp;method does not return any object on a successful request.
                                                                            <br>Here’s the code execution output:

                                                                            <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/31.-Delete-Internet-Gateway-1024x591.png" alt="Delete Internet Gateway" class="ezlazyload wp-image-40339" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/31.-Delete-Internet-Gateway-1024x591.png 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/31.-Delete-Internet-Gateway-300x173.png 300w,https://hands-on.cloud/wp-content/uploads/2021/10/31.-Delete-Internet-Gateway-768x443.png 768w,https://hands-on.cloud/wp-content/uploads/2021/10/31.-Delete-Internet-Gateway-1536x886.png 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/31.-Delete-Internet-Gateway-2048x1181.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/31.-Delete-Internet-Gateway-1024x591.png">
                                                                            <figcaption>Delete Internet Gateway</figcaption>

                                                                            <h3 id="h-how-to-manage-nat-gateways-using-boto3">How to manage NAT Gateways using Boto3?</h3>
                                                                            A&nbsp;<strong>NAT (Network Address Translation</strong>)&nbsp;<strong>Gateway</strong>&nbsp;allows VPC resources (for example, EC2 instances) launched in a private subnet to have internet connectivity without exposing them to the Internet.
                                                                            NAT gateway routes traffic from your private subnet to the Internet or other AWS services. For outbound traffic, the source IP address is replaced with the NAT gateway’s address.&nbsp;
                                                                            Similarly, the NAT gateway translates the address back to those instance’s private IP addresses for inbound traffic.

                                                                            <h3 id="h-create-nat-gateway">Create NAT Gateway</h3>
                                                                            To create a NAT gateway, you need to use the&nbsp; <create_nat_gateway" rel="noreferrer noopener">create_nat_gateway()</a>&nbsp;method from the Boto3 library.

                                                                                Below are few requirements before creating a NAT gateway in a VPC:
                                                                                <ul>
                                                                                    <li>VPC must have an Internet Gateway attached to it before creating a NAT Gateway in that VPC.</li>
                                                                                    <li>NAT Gateway requires an Elastic IPv4 IP address before NAT Gateway is created.</li>
                                                                                </ul>
                                                                                <blockquote class="wp-block-quote">
                                                                                    In addition, you have to use the&nbsp; <Waiter.NatGatewayAvailable" rel="noreferrer noopener">EC2.Waiter.NatGatewayAvailable</a>&nbsp;class to ensure the NAT Gateway is created and available to use. That’s a correct way to wait for the successful completion of the NAT Gateway creation operation.
                                                                                </blockquote>
                                                                                <br><br>
                                                                                <div class="code-title">Create NAT Gateway</div>
                                                                                <pre title="Create NAT Gateway" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> datetime <span class="token keyword">import</span> date<span class="token punctuation">,</span> datetime
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">json_datetime_serializer</span><span class="token punctuation">(</span>obj<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Helper method to serialize datetime fields
    """</span>
    <span class="token keyword">if</span> <span class="token builtin">isinstance</span><span class="token punctuation">(</span>obj<span class="token punctuation">,</span> <span class="token punctuation">(</span>datetime<span class="token punctuation">,</span> date<span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> obj<span class="token punctuation">.</span>isoformat<span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token keyword">raise</span> TypeError<span class="token punctuation">(</span><span class="token string">"Type %s not serializable"</span> <span class="token operator">%</span> <span class="token builtin">type</span><span class="token punctuation">(</span>obj<span class="token punctuation">)</span><span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">wait_nat_creation</span><span class="token punctuation">(</span>nat_gateway_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Check if successful state is reached every 15 seconds until a successful state is reached.
    An error is returned after 40 failed checks.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        waiter <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>get_waiter<span class="token punctuation">(</span><span class="token string">'nat_gateway_available'</span><span class="token punctuation">)</span>
        waiter<span class="token punctuation">.</span>wait<span class="token punctuation">(</span>NatGatewayIds<span class="token operator">=</span><span class="token punctuation">[</span>nat_gateway_id<span class="token punctuation">]</span><span class="token punctuation">)</span>
    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Could not create the NAT gateway.'</span></span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>


<span class="token keyword">def</span> <span class="token function">allocate_address</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Allocates an Elastic IP address to use with an NAT Gateway in a VPC.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>allocate_address<span class="token punctuation">(</span>Domain<span class="token operator">=</span><span class="token string">'vpc'</span><span class="token punctuation">)</span>
    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Could not create the NAT gateway.'</span></span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response<span class="token punctuation">[</span><span class="token string">'AllocationId'</span><span class="token punctuation">]</span>


<span class="token keyword">def</span> <span class="token function">create_nat</span><span class="token punctuation">(</span>subnet_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates a NAT gateway in the specified subnet.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        <span class="token comment"># allocate IPV4 address for NAT gateway</span>
        public_ip_allocation_id <span class="token operator">=</span> allocate_address<span class="token punctuation">(</span><span class="token punctuation">)</span>

        <span class="token comment"># create NAT gateway</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>create_nat_gateway<span class="token punctuation">(</span>
            AllocationId<span class="token operator">=</span>public_ip_allocation_id<span class="token punctuation">,</span>
            SubnetId<span class="token operator">=</span>subnet_id<span class="token punctuation">,</span>
            TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                <span class="token string">'ResourceType'</span><span class="token punctuation">:</span>
                <span class="token string">'natgateway'</span><span class="token punctuation">,</span>
                <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token punctuation">{</span>
                    <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
                    <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'nubeera-nat-gateway'</span>
                <span class="token punctuation">}</span><span class="token punctuation">]</span>
            <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">)</span>
        nat_gateway_id <span class="token operator">=</span> response<span class="token punctuation">[</span><span class="token string">'NatGateway'</span><span class="token punctuation">]</span><span class="token punctuation">[</span><span class="token string">'NatGatewayId'</span><span class="token punctuation">]</span>

        <span class="token comment"># wait until the NAT gateway is available</span>
        wait_nat_creation<span class="token punctuation">(</span>nat_gateway_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Could not create the NAT gateway.'</span></span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    SUBNET_ID <span class="token operator">=</span> <span class="token string">'subnet-0b6498751bd99fce7'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Creating a NAT gateway...'</span></span><span class="token punctuation">)</span>
    nat <span class="token operator">=</span> create_nat<span class="token punctuation">(</span>SUBNET_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'NAT gateway created with: </span><span class="token interpolation"><span class="token punctuation">{</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>nat<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">,</span> default<span class="token operator">=</span>json_datetime_serializer<span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span>
    <span class="token punctuation">)</span>
</blockquote></pre>
                                                                                The required attributes are:
                                                                                <ul>
                                                                                    <li><strong><code>AllocationId</code></strong>: Specifies the allocation ID of an Elastic IP address to associate with the NAT gateway.</li>
                                                                                </ul>
                                                                                <ul>
                                                                                    <li><strong><code>SubnetId</code></strong>: Specifies the subnet in which to create the NAT gateway.</li>
                                                                                </ul>
                                                                                An optional argument used in the above example:
                                                                                <ul>
                                                                                    <li><strong><code>TagSpecifications</code></strong>: Specifies the resource tags for the NAT Gateway.</li>
                                                                                </ul>
                                                                                In the example above, we’re using additional <strong>json_datetime_serializer() </strong>method to serialize (convert to string) <code>datetime.datetime</code> fields returned by the&nbsp;<strong>create_nat_gateway()&nbsp;</strong>method.
                                                                                The<strong>&nbsp;create_nat_gateway()&nbsp;</strong>method returns a python dictionary object as an output.
                                                                                <br>Here’s the code execution output:

                                                                                <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/32.-Create-NAT-Gateway-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Create NAT Gateway" class="wp-image-40338 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/32.-Create-NAT-Gateway-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/32.-Create-NAT-Gateway-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/32.-Create-NAT-Gateway-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/32.-Create-NAT-Gateway-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/32.-Create-NAT-Gateway-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/32.-Create-NAT-Gateway-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.25457393006555185" srcset="https://hands-on.cloud/wp-content/uploads/2021/10/32.-Create-NAT-Gateway-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/32.-Create-NAT-Gateway-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/32.-Create-NAT-Gateway-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/32.-Create-NAT-Gateway-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/32.-Create-NAT-Gateway-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                                                                                <figcaption>Create NAT Gateway</figcaption>

                                                                                <h3 id="h-describe-nat-gateways">Describe NAT Gateways</h3>
                                                                                To get the details of the existing NAT Gateways in your AWS account, you need to use the&nbsp; <describe_nat_gateways" rel="noreferrer noopener">describe_nat_gateways()</a>&nbsp;method from the Boto3 library.&nbsp;
                                                                                    This method allows you to describe existing NAT Gateways by using NAT Gateway Ids and Filters. We will use Filters in the example below.
                                                                                    We will use the Boto3 library paginator object to get the complete output from the&nbsp;<strong>describe_nat_gateways()&nbsp;</strong>method.
                                                                                    <br><br>
                                                                                    <div class="code-title">Describe NAT Gateways</div>
                                                                                    <pre title="Describe NAT Gateways" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> datetime <span class="token keyword">import</span> date<span class="token punctuation">,</span> datetime
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">json_datetime_serializer</span><span class="token punctuation">(</span>obj<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Helper method to serialize datetime fields
    """</span>
    <span class="token keyword">if</span> <span class="token builtin">isinstance</span><span class="token punctuation">(</span>obj<span class="token punctuation">,</span> <span class="token punctuation">(</span>datetime<span class="token punctuation">,</span> date<span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> obj<span class="token punctuation">.</span>isoformat<span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token keyword">raise</span> TypeError<span class="token punctuation">(</span><span class="token string">"Type %s not serializable"</span> <span class="token operator">%</span> <span class="token builtin">type</span><span class="token punctuation">(</span>obj<span class="token punctuation">)</span><span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">describe_nat_gateways</span><span class="token punctuation">(</span>tag<span class="token punctuation">,</span> tag_values<span class="token punctuation">,</span> max_items<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Describes one or more of your NAT gateways.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        <span class="token comment"># creating paginator object for describe_nat_gateways() method</span>
        paginator <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>get_paginator<span class="token punctuation">(</span><span class="token string">'describe_nat_gateways'</span><span class="token punctuation">)</span>

        <span class="token comment"># creating a PageIterator from the paginator</span>
        response_iterator <span class="token operator">=</span> paginator<span class="token punctuation">.</span>paginate<span class="token punctuation">(</span>
            Filters<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string-interpolation"><span class="token string">f'tag:</span><span class="token interpolation"><span class="token punctuation">{</span>tag<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">,</span>
                <span class="token string">'Values'</span><span class="token punctuation">:</span> tag_values
            <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
            PaginationConfig<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'MaxItems'</span><span class="token punctuation">:</span> max_items<span class="token punctuation">}</span><span class="token punctuation">)</span>

        full_result <span class="token operator">=</span> response_iterator<span class="token punctuation">.</span>build_full_result<span class="token punctuation">(</span><span class="token punctuation">)</span>

        nat_gateways_list <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span>

        <span class="token keyword">for</span> page <span class="token keyword">in</span> full_result<span class="token punctuation">[</span><span class="token string">'NatGateways'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
            nat_gateways_list<span class="token punctuation">.</span>append<span class="token punctuation">(</span>page<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not describe NAT Gateways.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> nat_gateways_list


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    TAG <span class="token operator">=</span> <span class="token string">'Name'</span>
    TAG_VALUES <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">'nubeera-nat-gateway'</span><span class="token punctuation">]</span>
    MAX_ITEMS <span class="token operator">=</span> <span class="token number">10</span>
    nat_gateways <span class="token operator">=</span> describe_nat_gateways<span class="token punctuation">(</span>TAG<span class="token punctuation">,</span> TAG_VALUES<span class="token punctuation">,</span> MAX_ITEMS<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'NAT Gateways Details: '</span><span class="token punctuation">)</span>
    <span class="token keyword">for</span> nat_gateway <span class="token keyword">in</span> nat_gateways<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
            json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>nat_gateway<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">,</span> default<span class="token operator">=</span>json_datetime_serializer<span class="token punctuation">)</span>
            <span class="token operator">+</span> <span class="token string">'\n'</span><span class="token punctuation">)</span></blockquote></pre>
                                                                                    Optional arguments used in the above example:
                                                                                    <ul>
                                                                                        <li><strong><code>Filters</code></strong>: Specifies the different available filters for narrowing the NAT Gateways search criteria. For all available filters, refer&nbsp; <describe_nat_gateways" rel="noreferrer noopener">here</a>.</li>
                                                                                        <li><strong><code>PaginationConfig</code></strong>: Specifies the configuration for the Paginator object. We have used the MaxItems attribute, which specifies the maximum number of NAT Gateways to return in one request.</li>
                                                                                    </ul>
                                                                                    In the example above, we’re using additional&nbsp;<strong>json_datetime_serializer()</strong>&nbsp;method to serialize (convert to string) <code>datetime.datetime</code> fields returned by the&nbsp;<strong>describe_nat_gateways()&nbsp;</strong>method.
                                                                                    The&nbsp;<strong>describe_nat_gateways()&nbsp;</strong>method returns a python dictionary object as an output.
                                                                                    <br>Here’s the code execution output:

                                                                                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/33.-Describe-NAT-Gateways-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Describe NAT Gateways" class="wp-image-40337 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/33.-Describe-NAT-Gateways-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/33.-Describe-NAT-Gateways-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/33.-Describe-NAT-Gateways-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/33.-Describe-NAT-Gateways-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/33.-Describe-NAT-Gateways-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/33.-Describe-NAT-Gateways-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.39235603907383965" srcset="https://hands-on.cloud/wp-content/uploads/2021/10/33.-Describe-NAT-Gateways-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/33.-Describe-NAT-Gateways-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/33.-Describe-NAT-Gateways-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/33.-Describe-NAT-Gateways-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/33.-Describe-NAT-Gateways-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                                                                                    <figcaption>Describe NAT Gateways</figcaption>

                                                                                    <h3 id="h-delete-nat-gateway">Delete NAT Gateway</h3>
                                                                                    To delete an existing NAT Gateway, you need to use the&nbsp; <delete_nat_gateway" rel="noreferrer noopener">delete_nat_gateway()</a>&nbsp;method from the Boto3 library.
                                                                                        Deleting a public NAT gateway disassociates its Elastic IP address but does not release the Elastic IP address from your account.

                                                                                        <br><br>
                                                                                        <div class="code-title">Delete NAT Gateway</div>
                                                                                        <pre title="Delete NAT Gateway" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">delete_nat_gateway</span><span class="token punctuation">(</span>nat_gateway_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Deletes the specified NAT gateway.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>delete_nat_gateway<span class="token punctuation">(</span>NatGatewayId<span class="token operator">=</span>nat_gateway_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not delete the NAT Gateway.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    NAT_GATEWAY_ID <span class="token operator">=</span> <span class="token string">'nat-0dce41a56b339d240'</span>
    nat_gateway <span class="token operator">=</span> delete_nat_gateway<span class="token punctuation">(</span>NAT_GATEWAY_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'NAT Gateway </span><span class="token interpolation"><span class="token punctuation">{</span>NAT_GATEWAY_ID<span class="token punctuation">}</span></span><span class="token string"> is deleted successfully.'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                                                                                        The required attribute is:
                                                                                        <ul>
                                                                                            <li><strong><code>NatGatewayId</code>:&nbsp;</strong>Specifies the ID of the NAT Gateway to be deleted.</li>
                                                                                        </ul>
                                                                                        The&nbsp;<strong>delete_nat_gateway()</strong>&nbsp;method does not return any object on a successful request.
                                                                                        <br>Here’s the code execution output:

                                                                                        <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/34.-Delete-NAT-Gateway-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Delete NAT Gateway" class="wp-image-40336 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/34.-Delete-NAT-Gateway-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/34.-Delete-NAT-Gateway-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/34.-Delete-NAT-Gateway-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/34.-Delete-NAT-Gateway-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/34.-Delete-NAT-Gateway-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/34.-Delete-NAT-Gateway-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.4522721914685255" srcset="https://hands-on.cloud/wp-content/uploads/2021/10/34.-Delete-NAT-Gateway-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/34.-Delete-NAT-Gateway-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/34.-Delete-NAT-Gateway-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/34.-Delete-NAT-Gateway-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/34.-Delete-NAT-Gateway-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                                                                                        <figcaption>Delete NAT Gateway</figcaption>

                                                                                        <h3 id="h-how-to-manage-route-tables-using-boto3">How to manage Route Tables using Boto3?</h3>
                                                                                        Each subnet in a VPC must be associated with a routing table, which controls the network traffic routing for the subnet.
                                                                                        You can explicitly associate a subnet with a custom route table. Otherwise, the subnet is implicitly associated with the default route table.
                                                                                        Only one route table can be associated with a subnet at a time. However, you can associate multiple subnets with the same route table.
                                                                                        <h3 id="h-create-route-table">Create Route Table</h3>
                                                                                        To create a Route table, you need to use the&nbsp; <create_route_table" rel="noreferrer noopener">create_route_table()</a>&nbsp;method from the Boto3 library.
                                                                                            <br><br>
                                                                                            <div class="code-title">Create Route Table</div>
                                                                                            <pre title="Create Route Table" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">create_rt</span><span class="token punctuation">(</span>vpc_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates a route table for the specified VPC with the specified configuration.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>create_route_table<span class="token punctuation">(</span>
            VpcId<span class="token operator">=</span>vpc_id<span class="token punctuation">,</span>
            TagSpecifications<span class="token operator">=</span><span class="token punctuation">[</span>
                <span class="token punctuation">{</span>
                    <span class="token string">'ResourceType'</span><span class="token punctuation">:</span> <span class="token string">'route-table'</span><span class="token punctuation">,</span>
                    <span class="token string">'Tags'</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
                        <span class="token punctuation">{</span>
                            <span class="token string">'Key'</span><span class="token punctuation">:</span> <span class="token string">'Name'</span><span class="token punctuation">,</span>
                            <span class="token string">'Value'</span><span class="token punctuation">:</span> <span class="token string">'nubeera-rt'</span>
                        <span class="token punctuation">}</span><span class="token punctuation">,</span>
                    <span class="token punctuation">]</span>
                <span class="token punctuation">}</span><span class="token punctuation">,</span>
            <span class="token punctuation">]</span><span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not create the route table.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    VPC_ID <span class="token operator">=</span> <span class="token string">'vpc-048604f523ad01d74'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Creating a route ta ble...'</span></span><span class="token punctuation">)</span>
    rt <span class="token operator">=</span> create_rt<span class="token punctuation">(</span>VPC_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f'Route table created with: </span><span class="token interpolation"><span class="token punctuation">{</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>rt<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                                                                                            The required attribute is:
                                                                                            <ul>
                                                                                                <li><strong><code>VpcId</code>:&nbsp;</strong>Specifies the ID of the VPC.</li>
                                                                                            </ul>
                                                                                            An optional argument used in the above example:
                                                                                            <ul>
                                                                                                <li><strong><code>TagSpecifications</code></strong>: Specifies the resource tags for the Route table.</li>
                                                                                            </ul>
                                                                                            When you create a Route table, it is not attached to any subnet by default.&nbsp;
                                                                                            The<strong>&nbsp;create_route_table()&nbsp;</strong>method returns a python dictionary object as an output.
                                                                                            <br>Here’s the code execution output:

                                                                                            <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/35.-Create-Route-table-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Create Route table" class="wp-image-40335 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/35.-Create-Route-table-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/35.-Create-Route-table-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/35.-Create-Route-table-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/35.-Create-Route-table-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/35.-Create-Route-table-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/35.-Create-Route-table-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.9539605246675664" srcset="https://hands-on.cloud/wp-content/uploads/2021/10/35.-Create-Route-table-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/35.-Create-Route-table-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/35.-Create-Route-table-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/35.-Create-Route-table-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/35.-Create-Route-table-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                                                                                            <figcaption>Create Route table</figcaption>

                                                                                            <h3 id="h-create-route">Create Route</h3>
                                                                                            To create a route in a routing table, you need to use the&nbsp; <create_route" rel="noreferrer noopener">create_route()</a>&nbsp;method from the Boto3 library.
                                                                                                <br><br>
                                                                                                <div class="code-title">Create Route</div>
                                                                                                <pre title="Create Route" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">create_route</span><span class="token punctuation">(</span>destination_cidr_block<span class="token punctuation">,</span> gateway_id<span class="token punctuation">,</span> route_table_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Creates a route in a route table within a VPC.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>create_route<span class="token punctuation">(</span>
            DestinationCidrBlock<span class="token operator">=</span>destination_cidr_block<span class="token punctuation">,</span>
            GatewayId<span class="token operator">=</span>gateway_id<span class="token punctuation">,</span>
            RouteTableId<span class="token operator">=</span>route_table_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not create the route.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    DESTINATION_CIDR_BLOCK <span class="token operator">=</span> <span class="token string">'0.0.0.0/0'</span>
    GATEWAY_ID <span class="token operator">=</span> <span class="token string">'igw-005101a6dcc5d1e4f'</span>
    ROUTE_TABLE_ID <span class="token operator">=</span> <span class="token string">'rtb-04c3a19f68e99ac19'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Adding a route...'</span><span class="token punctuation">)</span>
    route <span class="token operator">=</span> create_route<span class="token punctuation">(</span>DESTINATION_CIDR_BLOCK<span class="token punctuation">,</span> GATEWAY_ID<span class="token punctuation">,</span> ROUTE_TABLE_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Route added to the route table: </span><span class="token interpolation"><span class="token punctuation">{</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>route<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                                                                                                The required attribute is:
                                                                                                <ul>
                                                                                                    <li><strong><code>RouteTableId</code>:&nbsp;</strong>Specifies the ID of the Route table.</li>
                                                                                                </ul>
                                                                                                Optional arguments used in the above example:

                                                                                                <ul>
                                                                                                    <li><strong><code>GatewayId</code></strong>: Specifies the ID of an internet gateway attached to the VPC.</li>
                                                                                                    <li><strong><code>DestinationCidrBlock</code></strong>: The IPv4 CIDR address range used for the destination match.</li>
                                                                                                </ul>
                                                                                                In the above example, we create a route for the routing table. The route matches all traffic (0.0.0.0/0) and routes it to the specified Internet gateway.
                                                                                                The<strong>&nbsp;create_route()&nbsp;</strong>method returns a python dictionary object as an output.
                                                                                                <br>Here’s the code execution output:

                                                                                                <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/36.-Create-Route-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Create Route" class="wp-image-40334 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/36.-Create-Route-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/36.-Create-Route-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/36.-Create-Route-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/36.-Create-Route-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/36.-Create-Route-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/36.-Create-Route-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.6333561718129088" srcset="https://hands-on.cloud/wp-content/uploads/2021/10/36.-Create-Route-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/36.-Create-Route-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/36.-Create-Route-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/36.-Create-Route-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/36.-Create-Route-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                                                                                                <figcaption>Create Route</figcaption>

                                                                                                <h3 id="h-replace-route">Replace Route</h3>
                                                                                                To replace a route in a route table, you need to use the&nbsp; <replace_route" rel="noreferrer noopener">replace_route()</a>&nbsp;method from the Boto3 library.
                                                                                                    <br><br>
                                                                                                    <div class="code-title">Replace Route</div>
                                                                                                    <pre title="Replace Route" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">replace_route</span><span class="token punctuation">(</span>destination_cidr_block<span class="token punctuation">,</span> gateway_id<span class="token punctuation">,</span> route_table_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Replaces a route in a route table within a VPC.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>replace_route<span class="token punctuation">(</span>
            DestinationCidrBlock<span class="token operator">=</span>destination_cidr_block<span class="token punctuation">,</span>
            NatGatewayId<span class="token operator">=</span>gateway_id<span class="token punctuation">,</span>
            RouteTableId<span class="token operator">=</span>route_table_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not replace the route.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    DESTINATION_CIDR_BLOCK <span class="token operator">=</span> <span class="token string">'0.0.0.0/0'</span>
    NAT_GATEWAY_ID <span class="token operator">=</span> <span class="token string">'nat-0924940267273e639'</span>
    ROUTE_TABLE_ID <span class="token operator">=</span> <span class="token string">'rtb-04c3a19f68e99ac19'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Replacing a route...'</span><span class="token punctuation">)</span>
    route <span class="token operator">=</span> replace_route<span class="token punctuation">(</span>DESTINATION_CIDR_BLOCK<span class="token punctuation">,</span> NAT_GATEWAY_ID<span class="token punctuation">,</span>
                          ROUTE_TABLE_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Route replaced.'</span><span class="token punctuation">)</span>
</blockquote></pre>
                                                                                                    The required attribute is:
                                                                                                    <ul>
                                                                                                        <li><strong><code>RouteTableId</code>:&nbsp;</strong>Specifies the ID of the Route table.</li>
                                                                                                    </ul>
                                                                                                    Optional arguments used in the above example:
                                                                                                    <ul>
                                                                                                        <li><strong><code>NatGatewayId</code></strong>: Specifies the ID of a NAT gateway attached to the VPC.</li>
                                                                                                        <li><strong><code>DestinationCidrBlock</code></strong>: The IPv4 CIDR address range used for the destination match.</li>
                                                                                                    </ul>
                                                                                                    In the above example, we replace a route created in the last example and route the traffic to the NAT gateway instead of the Internet Gateway. The route matches all traffic (0.0.0.0/0) and routes it to the specified NAT gateway.
                                                                                                    The<strong>&nbsp;replace_route()&nbsp;</strong>method does not return any object on a successful request.
                                                                                                    <br>Here’s the code execution output:

                                                                                                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/37.-Replace-Route-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Replace Route" class="wp-image-40333 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/37.-Replace-Route-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/37.-Replace-Route-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/37.-Replace-Route-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/37.-Replace-Route-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/37.-Replace-Route-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/37.-Replace-Route-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.18372609708709842" srcset="https://hands-on.cloud/wp-content/uploads/2021/10/37.-Replace-Route-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/37.-Replace-Route-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/37.-Replace-Route-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/37.-Replace-Route-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/37.-Replace-Route-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                                                                                                    <figcaption>Replace Route</figcaption>

                                                                                                    <h3 id="h-delete-route">Delete Route</h3>
                                                                                                    To delete an existing route from a Route table, you need to use the&nbsp; <delete_route" rel="noreferrer noopener">delete_route()</a>&nbsp;method from the Boto3 library.
                                                                                                        <br><br>
                                                                                                        <div class="code-title">Delete Route</div>
                                                                                                        <pre title="Delete Route" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">delete_route</span><span class="token punctuation">(</span>destination_cidr_block<span class="token punctuation">,</span> route_table_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Deletes the specified route from the specified route table.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>delete_route<span class="token punctuation">(</span>
            DestinationCidrBlock<span class="token operator">=</span>destination_cidr_block<span class="token punctuation">,</span>
            RouteTableId<span class="token operator">=</span>route_table_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not delete the route.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    DESTINATION_CIDR_BLOCK <span class="token operator">=</span> <span class="token string">'0.0.0.0/0'</span>
    ROUTE_TABLE_ID <span class="token operator">=</span> <span class="token string">'rtb-04c3a19f68e99ac19'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Deleting a route...'</span><span class="token punctuation">)</span>
    route <span class="token operator">=</span> delete_route<span class="token punctuation">(</span>DESTINATION_CIDR_BLOCK<span class="token punctuation">,</span> ROUTE_TABLE_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Route deleted succussfully.'</span><span class="token punctuation">)</span>
</blockquote></pre>
                                                                                                        The required attribute is:
                                                                                                        <ul>
                                                                                                            <li><strong><code>RouteTableId</code>:&nbsp;</strong>Specifies the ID of the Route table.</li>
                                                                                                        </ul>
                                                                                                        An optional argument used in the above example:
                                                                                                        <ul>
                                                                                                            <li><strong><code>DestinationCidrBlock</code></strong>: The IPv4 CIDR address range used for the destination match.</li>
                                                                                                        </ul>
                                                                                                        The&nbsp;<strong>delete_route()</strong>&nbsp;method does not return any object on a successful request.
                                                                                                        <br>Here’s the code execution output:

                                                                                                        <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/38.-Delete-Route-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Delete Route" class="wp-image-40332 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/38.-Delete-Route-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/38.-Delete-Route-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/38.-Delete-Route-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/38.-Delete-Route-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/38.-Delete-Route-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/38.-Delete-Route-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.22030354540492292" srcset="https://hands-on.cloud/wp-content/uploads/2021/10/38.-Delete-Route-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/38.-Delete-Route-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/38.-Delete-Route-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/38.-Delete-Route-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/38.-Delete-Route-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                                                                                                        <figcaption>Delete Route</figcaption>

                                                                                                        <h3 id="h-associate-route-table">Associate Route Table</h3>
                                                                                                        To associate the specified route table with the specified subnet, you need to use the&nbsp; <associate_route_table" rel="noreferrer noopener">associate_route_table()</a>&nbsp;method from the Boto3 library.

                                                                                                            <blockquote class="wp-block-quote">
                                                                                                                A route table can be associated with multiple subnets.
                                                                                                            </blockquote>
                                                                                                            <br><br>
                                                                                                            <div class="code-title">Associate Route Table</div>
                                                                                                            <pre title="Associate Route Table" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">associate_route_table</span><span class="token punctuation">(</span>route_table_id<span class="token punctuation">,</span> subnet_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Associates a subnet in the VPC with a route table.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>associate_route_table<span class="token punctuation">(</span>
            RouteTableId<span class="token operator">=</span>route_table_id<span class="token punctuation">,</span> SubnetId<span class="token operator">=</span>subnet_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span>
            <span class="token string">'Could not associate the route table with the subnet.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    SUBNET_ID <span class="token operator">=</span> <span class="token string">'subnet-0b6498751bd99fce7'</span>
    ROUTE_TABLE_ID <span class="token operator">=</span> <span class="token string">'rtb-04c3a19f68e99ac19'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Associting a route table with the subnet...'</span><span class="token punctuation">)</span>
    route <span class="token operator">=</span> associate_route_table<span class="token punctuation">(</span>ROUTE_TABLE_ID<span class="token punctuation">,</span> SUBNET_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>
        <span class="token string-interpolation"><span class="token string">f'Route table associated succussfully: </span><span class="token interpolation"><span class="token punctuation">{</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>route<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">)</span>
</blockquote></pre>
                                                                                                            The required attribute is:
                                                                                                            <ul>
                                                                                                                <li><strong><code>RouteTableId</code>:&nbsp;</strong>Specifies the ID of the Route table.</li>
                                                                                                            </ul>
                                                                                                            An optional argument used in the above example:
                                                                                                            <ul>
                                                                                                                <li><strong><code>SubnetId</code></strong>: Specifies the ID of the Subnet.</li>
                                                                                                            </ul>
                                                                                                            The&nbsp;<strong>associate_route_table()</strong>&nbsp;method returns a python dictionary object as an output.
                                                                                                            <br>Here’s the code execution output:

                                                                                                            <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/39.-Associate-Route-Table-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Associate Route Table" class="wp-image-40331 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/39.-Associate-Route-Table-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/39.-Associate-Route-Table-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/39.-Associate-Route-Table-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/39.-Associate-Route-Table-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/39.-Associate-Route-Table-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/39.-Associate-Route-Table-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.2395606237672585" srcset="https://hands-on.cloud/wp-content/uploads/2021/10/39.-Associate-Route-Table-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/39.-Associate-Route-Table-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/39.-Associate-Route-Table-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/39.-Associate-Route-Table-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/39.-Associate-Route-Table-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                                                                                                            <figcaption>Associate Route Table</figcaption>

                                                                                                            <h3 id="h-disassociate-route-table">Disassociate Route Table</h3>
                                                                                                            To disassociate the specified route table from the specified subnet, you need to use the&nbsp; <disassociate_route_table" rel="noreferrer noopener">disassociate_route_table()</a>&nbsp;method from the Boto3 library.
                                                                                                                <br><br>
                                                                                                                <div class="code-title">Disassociate Route Table</div>
                                                                                                                <pre title="Disassociate Route Table" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">disassociate_route_table</span><span class="token punctuation">(</span>associatation_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Disassociates the route table from the subnet.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>disassociate_route_table<span class="token punctuation">(</span>
            AssociationId<span class="token operator">=</span>associatation_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span>
            <span class="token string">'Could not disassociate the route table from the subnet.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    ASSOCIATATION_ID <span class="token operator">=</span> <span class="token string">'rtbassoc-0f0bfb6e153acd6aa'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Disssociting a route table from the subnet...'</span><span class="token punctuation">)</span>
    route <span class="token operator">=</span> disassociate_route_table<span class="token punctuation">(</span>ASSOCIATATION_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Route table disassociated succussfully.'</span><span class="token punctuation">)</span>
</blockquote></pre>
                                                                                                                The required attribute is:
                                                                                                                <ul>
                                                                                                                    <li><strong><code>AssociationId</code>:&nbsp;</strong>Specifies the association ID representing the current association between the route table and subnet.</li>
                                                                                                                </ul>
                                                                                                                The&nbsp;<strong>disassociate_route_table()</strong>&nbsp;method does not return any object on a successful request.
                                                                                                                <br>Here’s the code execution output:

                                                                                                                <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/40.-Disassociate-Route-table-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Disassociate Route table" class="wp-image-40330 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/40.-Disassociate-Route-table-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/40.-Disassociate-Route-table-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/40.-Disassociate-Route-table-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/40.-Disassociate-Route-table-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/40.-Disassociate-Route-table-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/40.-Disassociate-Route-table-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.42797854279400327" srcset="https://hands-on.cloud/wp-content/uploads/2021/10/40.-Disassociate-Route-table-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/40.-Disassociate-Route-table-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/40.-Disassociate-Route-table-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/40.-Disassociate-Route-table-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/40.-Disassociate-Route-table-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                                                                                                                <figcaption>Disassociate Route table</figcaption>

                                                                                                                <h3 id="h-describe-route-tables">Describe Route Tables</h3>
                                                                                                                To get the current Route tables information in your AWS account, you need to use the&nbsp; <describe_route_tables" rel="noreferrer noopener">describe_route_tables()</a>&nbsp;method from the Boto3 library.
                                                                                                                    This method allows you to describe existing Route tables using two methods, Route table Ids, and Filters. We will use Filters in the below example.
                                                                                                                    <blockquote class="wp-block-quote">
                                                                                                                        We will use the Boto3 library paginator object to get the complete output from the&nbsp;<strong>describe_route_tables()&nbsp;</strong>method.
                                                                                                                    </blockquote>
                                                                                                                    <br><br>
                                                                                                                    <div class="code-title">Describe Route Tables</div>
                                                                                                                    <pre title="Describe Route Tables" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">describe_route_tables</span><span class="token punctuation">(</span>tag<span class="token punctuation">,</span> tag_values<span class="token punctuation">,</span> max_items<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Describes one or more of your Route tables.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        <span class="token comment"># creating paginator object for describe_route_tables() method</span>
        paginator <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>get_paginator<span class="token punctuation">(</span><span class="token string">'describe_route_tables'</span><span class="token punctuation">)</span>

        <span class="token comment"># creating a PageIterator from the paginator</span>
        response_iterator <span class="token operator">=</span> paginator<span class="token punctuation">.</span>paginate<span class="token punctuation">(</span>
            Filters<span class="token operator">=</span><span class="token punctuation">[</span><span class="token punctuation">{</span>
                <span class="token string">'Name'</span><span class="token punctuation">:</span> <span class="token string-interpolation"><span class="token string">f'tag:</span><span class="token interpolation"><span class="token punctuation">{</span>tag<span class="token punctuation">}</span></span><span class="token string">'</span></span><span class="token punctuation">,</span>
                <span class="token string">'Values'</span><span class="token punctuation">:</span> tag_values
            <span class="token punctuation">}</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
            PaginationConfig<span class="token operator">=</span><span class="token punctuation">{</span><span class="token string">'MaxItems'</span><span class="token punctuation">:</span> max_items<span class="token punctuation">}</span><span class="token punctuation">)</span>

        full_result <span class="token operator">=</span> response_iterator<span class="token punctuation">.</span>build_full_result<span class="token punctuation">(</span><span class="token punctuation">)</span>

        route_tables_list <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span>

        <span class="token keyword">for</span> page <span class="token keyword">in</span> full_result<span class="token punctuation">[</span><span class="token string">'RouteTables'</span><span class="token punctuation">]</span><span class="token punctuation">:</span>
            route_tables_list<span class="token punctuation">.</span>append<span class="token punctuation">(</span>page<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not describe Route tables.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> route_tables_list


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    TAG <span class="token operator">=</span> <span class="token string">'Name'</span>
    TAG_VALUES <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token string">'nubeera-rt'</span><span class="token punctuation">]</span>
    MAX_ITEMS <span class="token operator">=</span> <span class="token number">10</span>
    route_tables <span class="token operator">=</span> describe_route_tables<span class="token punctuation">(</span>TAG<span class="token punctuation">,</span> TAG_VALUES<span class="token punctuation">,</span> MAX_ITEMS<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Route tables Details: '</span><span class="token punctuation">)</span>
    <span class="token keyword">for</span> route_table <span class="token keyword">in</span> route_tables<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span>json<span class="token punctuation">.</span>dumps<span class="token punctuation">(</span>route_table<span class="token punctuation">,</span> indent<span class="token operator">=</span><span class="token number">4</span><span class="token punctuation">)</span> <span class="token operator">+</span> <span class="token string">'\n'</span><span class="token punctuation">)</span>
</blockquote></pre>
                                                                                                                    Optional arguments used in the above example:
                                                                                                                    <ul>
                                                                                                                        <li><strong><code>Filters</code></strong>: Specifies the different available filters for narrowing the Route tables search criteria. For all available filters, refer&nbsp; <Paginator.DescribeRouteTables" rel="noreferrer noopener">here</a>.</li>
                                                                                                                        <li><strong><code>PaginationConfig</code></strong>: Specifies the configuration for the Paginator object. We have used the MaxItems attribute, which specifies the maximum number of Route tables to return in one request.</li>
                                                                                                                    </ul>
                                                                                                                    The&nbsp;<strong>describe_route_tables()&nbsp;</strong>method returns a python dictionary object as an output.
                                                                                                                    <br>Here’s the code execution output:

                                                                                                                    <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/41.-Describe-Route-tables-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Describe Route tables" class="wp-image-40329 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/41.-Describe-Route-tables-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/41.-Describe-Route-tables-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/41.-Describe-Route-tables-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/41.-Describe-Route-tables-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/41.-Describe-Route-tables-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/41.-Describe-Route-tables-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.12932237949612246" srcset="https://hands-on.cloud/wp-content/uploads/2021/10/41.-Describe-Route-tables-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/41.-Describe-Route-tables-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/41.-Describe-Route-tables-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/41.-Describe-Route-tables-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/41.-Describe-Route-tables-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                                                                                                                    <figcaption>Describe Route tables</figcaption>

                                                                                                                    <h3 id="h-delete-route-table">Delete Route Table</h3>
                                                                                                                    To delete an existing route table, you need to use the&nbsp; <delete_route_table" rel="noreferrer noopener">delete_route_table()</a>&nbsp;method from the Boto3 library.
                                                                                                                        <br><br>
                                                                                                                        <div class="code-title">Delete Route Table</div>
                                                                                                                        <pre title="Delete Route Table" class="wp-block-code  language-python" tabindex="0"><blockquote lang="python" class="  language-python"><span class="token keyword">import</span> logging
<span class="token keyword">import</span> boto3
<span class="token keyword">from</span> botocore<span class="token punctuation">.</span>exceptions <span class="token keyword">import</span> ClientError
<span class="token keyword">import</span> json

AWS_REGION <span class="token operator">=</span> <span class="token string">'us-east-2'</span>

<span class="token comment"># logger config</span>
logger <span class="token operator">=</span> logging<span class="token punctuation">.</span>getLogger<span class="token punctuation">(</span><span class="token punctuation">)</span>
logging<span class="token punctuation">.</span>basicConfig<span class="token punctuation">(</span>level<span class="token operator">=</span>logging<span class="token punctuation">.</span>INFO<span class="token punctuation">,</span>
                    <span class="token builtin">format</span><span class="token operator">=</span><span class="token string">'%(asctime)s: %(levelname)s: %(message)s'</span><span class="token punctuation">)</span>

vpc_client <span class="token operator">=</span> boto3<span class="token punctuation">.</span>client<span class="token punctuation">(</span><span class="token string">"ec2"</span><span class="token punctuation">,</span> region_name<span class="token operator">=</span>AWS_REGION<span class="token punctuation">)</span>


<span class="token keyword">def</span> <span class="token function">delete_route_table</span><span class="token punctuation">(</span>route_table_id<span class="token punctuation">)</span><span class="token punctuation">:</span>
    <span class="token triple-quoted-string string">"""
    Deletes the specified route table.
    """</span>
    <span class="token keyword">try</span><span class="token punctuation">:</span>
        response <span class="token operator">=</span> vpc_client<span class="token punctuation">.</span>delete_route_table<span class="token punctuation">(</span>RouteTableId<span class="token operator">=</span>route_table_id<span class="token punctuation">)</span>

    <span class="token keyword">except</span> ClientError<span class="token punctuation">:</span>
        logger<span class="token punctuation">.</span>exception<span class="token punctuation">(</span><span class="token string">'Could not delete the route table.'</span><span class="token punctuation">)</span>
        <span class="token keyword">raise</span>
    <span class="token keyword">else</span><span class="token punctuation">:</span>
        <span class="token keyword">return</span> response


<span class="token keyword">if</span> __name__ <span class="token operator">==</span> <span class="token string">'__main__'</span><span class="token punctuation">:</span>
    <span class="token comment"># Constants</span>
    ROUTE_TABLE_ID <span class="token operator">=</span> <span class="token string">'rtb-04c3a19f68e99ac19'</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Deleting a route table...'</span><span class="token punctuation">)</span>
    route <span class="token operator">=</span> delete_route_table<span class="token punctuation">(</span>ROUTE_TABLE_ID<span class="token punctuation">)</span>
    logger<span class="token punctuation">.</span>info<span class="token punctuation">(</span><span class="token string">'Route table deleted succussfully.'</span><span class="token punctuation">)</span>
</blockquote></pre>
                                                                                                                        The required attribute is:

                                                                                                                        <ul>
                                                                                                                            <li><strong><code>RouteTableId</code>:&nbsp;</strong>Specifies the ID of the Route table.</li>
                                                                                                                        </ul>
                                                                                                                        The&nbsp;<strong>delete_route_table()</strong>&nbsp;method does not return any object on a successful request.
                                                                                                                        <br>Here’s the code execution output:

                                                                                                                        <br><br><img loading="lazy" width="1024" height="591" src="https://hands-on.cloud/wp-content/uploads/2021/10/42.-Delete-Route-table-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" alt="Delete Route table" class="wp-image-40328 ezlazyloaded" data-ezsrcset="https://hands-on.cloud/wp-content/uploads/2021/10/42.-Delete-Route-table-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/42.-Delete-Route-table-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/42.-Delete-Route-table-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/42.-Delete-Route-table-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/42.-Delete-Route-table-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w" sizes="(max-width: 1024px) 100vw, 1024px" ezimgfmt="rs rscb1 src ng ngcb1 srcset" data-ezsrc="https://hands-on.cloud/wp-content/uploads/2021/10/42.-Delete-Route-table-1024x591.png?ezimgfmt=rs:451x261/rscb1/ng:webp/ngcb1" ezoid="0.546098325064085" srcset="https://hands-on.cloud/wp-content/uploads/2021/10/42.-Delete-Route-table-1024x591.png?ezimgfmt=ng:webp/ngcb1 1024w,https://hands-on.cloud/wp-content/uploads/2021/10/42.-Delete-Route-table-300x173.png?ezimgfmt=ng:webp/ngcb1 300w,https://hands-on.cloud/wp-content/uploads/2021/10/42.-Delete-Route-table-768x443.png?ezimgfmt=ng:webp/ngcb1 768w,https://hands-on.cloud/wp-content/uploads/2021/10/42.-Delete-Route-table-1536x886.png?ezimgfmt=ng:webp/ngcb1 1536w,https://hands-on.cloud/wp-content/uploads/2021/10/42.-Delete-Route-table-2048x1181.png?ezimgfmt=ng:webp/ngcb1 2048w">
                                                                                                                        <figcaption>Delete Route table</figcaption>

                                                                                                                        <h3 id="h-summary">Summary</h3>
                                                                                                                        This article covered how to use the Python Boto3 library to programmatically interact with Amazon Virtual Private Cloud (Amazon VPC) service and create, manage, and perform management activities for AWS VPC, Subnets, Security Groups, Network ACLs, Internet Gateways, NAT Gateways, and Route Tables.

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