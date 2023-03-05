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
            <strong class="px-2" style="font-size: 1.125rem;">aws security group</strong><br><br>
            <ul>
               <!----->
            </ul>
         </div>
      </div>

   </div>
   <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target=""
         data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

   <div class="content-box" id="content-box">
      <div class="body-content">
         <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;"> aws security group</h1>

         <ol class="breadcrumb mx-5 mt-3 px-0">
            <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home"
                     aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item"><a href="../">Cloud</a></li>
            <li class="breadcrumb-item"><a href="../../">Cloud SysOps</a></li>
            <li class="breadcrumb-item"><a href="../../">Contents</a></li>
            <li class="breadcrumb-item active">aws security group</li>
         </ol>
         <div class="px-5 pb-5 pt-0 body-text">
            <!---body content--->
            <h3>In this page</h3>
            <ol>
               <li><a href="#example-usage">Example Usage</a></li>
               <li><a href="#argument-reference">Argument Reference</a></li>
               <li><a href="#attributes-reference">Attributes Reference</a></li>
               <li><a href="#timeouts">Timeouts</a></li>
               <li><a href="#import">Import</a></li>
            </ol>

            <div id="ember1935" class="ember-view">
              
               Provides a security group resource.
               <div class="alert alert-warning" role="alert">
                  <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE on Security Groups and
                     Security Group Rules:</div>
                   Terraform currently
                     provides both a standalone Security Group Rule resource (a single
                     <code>ingress</code> or
                     <code>egress</code> rule), and a Security Group resource with <code>ingress</code> and
                     <code>egress</code> rules
                     defined in-line. At this time you cannot use a Security Group with in-line rules
                     in conjunction with any Security Group Rule resources. Doing so will cause
                     a conflict of rule settings and will overwrite rules.
               </div>
               
               <div class="alert alert-warning" role="alert">
                  <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE:</div>
                   Referencing Security Groups across VPC peering has certain restrictions. More information is
                     available in the VPC
                        Peering User Guide
               </div>
               
               <div class="alert alert-warning" role="alert">
                  <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE:</div>
                   Due to AWS
                        Lambda improved VPC networking changes that began deploying in September 2019, security
                     groups associated with Lambda Functions can take up to 45 minutes to successfully delete. Terraform
                     AWS Provider version 2.31.0 and later automatically handles this increased timeout, however prior
                     versions require setting the customizable deletion timeout to 45 minutes
                     (<code>delete = "45m"</code>). AWS and HashiCorp are working together to reduce the amount of time
                     required for resource deletion and updates can be tracked in this GitHub issue
               </div>
               
               <h2 id="example-usage"><a name="example-usage" class="anchor" href="#example-usage">Example Usage</a>
               </h2>
               <h3 id="basic-usage"><a name="basic-usage" class="anchor" href="#basic-usage">Basic Usage</a></h3>
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_security_group"</span></span> <span class="token string">"allow_tls"</span> <span class="token punctuation">{</span>
  <span class="token property">name</span>        <span class="token punctuation">=</span> <span class="token string">"allow_tls"</span>
  <span class="token property">description</span> <span class="token punctuation">=</span> <span class="token string">"Allow TLS inbound traffic"</span>
  <span class="token property">vpc_id</span>      <span class="token punctuation">=</span> aws_vpc.main.id

  <span class="token keyword">ingress</span> <span class="token punctuation">{</span>
    <span class="token property">description</span>      <span class="token punctuation">=</span> <span class="token string">"TLS from VPC"</span>
    <span class="token property">from_port</span>        <span class="token punctuation">=</span> <span class="token number">443</span>
    <span class="token property">to_port</span>          <span class="token punctuation">=</span> <span class="token number">443</span>
    <span class="token property">protocol</span>         <span class="token punctuation">=</span> <span class="token string">"tcp"</span>
    <span class="token property">cidr_blocks</span>      <span class="token punctuation">=</span> <span class="token punctuation">[</span>aws_vpc.main.cidr_block<span class="token punctuation">]</span>
    <span class="token property">ipv6_cidr_blocks</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span>aws_vpc.main.ipv6_cidr_block<span class="token punctuation">]</span>
  <span class="token punctuation">}</span>

  <span class="token keyword">egress</span> <span class="token punctuation">{</span>
    <span class="token property">from_port</span>        <span class="token punctuation">=</span> <span class="token number">0</span>
    <span class="token property">to_port</span>          <span class="token punctuation">=</span> <span class="token number">0</span>
    <span class="token property">protocol</span>         <span class="token punctuation">=</span> <span class="token string">"-1"</span>
    <span class="token property">cidr_blocks</span>      <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"0.0.0.0/0"</span><span class="token punctuation">]</span>
    <span class="token property">ipv6_cidr_blocks</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"::/0"</span><span class="token punctuation">]</span>
  <span class="token punctuation">}</span>

  <span class="token property">tags</span> <span class="token punctuation">=</span> <span class="token punctuation">{</span>
    <span class="token property">Name</span> <span class="token punctuation">=</span> <span class="token string">"allow_tls"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
               <div class="alert alert-warning" role="alert">
                  <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE on Egress rules:</div>
                   By default, AWS creates an <code>ALLOW ALL</code> egress rule when creating a new Security Group
                     inside of a VPC. When creating a new Security Group inside a VPC, <strong>Terraform will remove
                        this default rule</strong>, and require you specifically re-create it if you desire that rule.
                     We feel this leads to fewer surprises in terms of controlling your egress rules. If you desire this
                     rule to be in place, you can use this <code>egress</code> block:
               </div>
               
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_security_group"</span></span> <span class="token string">"example"</span> <span class="token punctuation">{</span>
  <span class="token comment"># ... other configuration ...</span>

  <span class="token keyword">egress</span> <span class="token punctuation">{</span>
    <span class="token property">from_port</span>        <span class="token punctuation">=</span> <span class="token number">0</span>
    <span class="token property">to_port</span>          <span class="token punctuation">=</span> <span class="token number">0</span>
    <span class="token property">protocol</span>         <span class="token punctuation">=</span> <span class="token string">"-1"</span>
    <span class="token property">cidr_blocks</span>      <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"0.0.0.0/0"</span><span class="token punctuation">]</span>
    <span class="token property">ipv6_cidr_blocks</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"::/0"</span><span class="token punctuation">]</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
               <h3 id="usage-with-prefix-list-ids"><a name="usage-with-prefix-list-ids" class="anchor"
                     href="#usage-with-prefix-list-ids">Usage With Prefix List IDs</a></h3>
               Prefix Lec2_managed_prefix_list">ists are either managed by AWS internally, or created by the customer using a
                 Prefix List resource Prefix Lists provided by
                  AWS are associated with a prefix list name, or service name, that is linked to a specific region.
                  Prefix list IDs are exported on VPC Endpoints, so you can use this format:
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_security_group"</span></span> <span class="token string">"example"</span> <span class="token punctuation">{</span>
  <span class="token comment"># ... other configuration ...</span>

  <span class="token keyword">egress</span> <span class="token punctuation">{</span>
    <span class="token property">from_port</span>       <span class="token punctuation">=</span> <span class="token number">0</span>
    <span class="token property">to_port</span>         <span class="token punctuation">=</span> <span class="token number">0</span>
    <span class="token property">protocol</span>        <span class="token punctuation">=</span> <span class="token string">"-1"</span>
    <span class="token property">prefix_list_ids</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span>aws_vpc_endpoint.my_endpoint.prefix_list_id<span class="token punctuation">]</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_vpc_endpoint"</span></span> <span class="token string">"my_endpoint"</span> <span class="token punctuation">{</span>
  <span class="token comment"># ... other configuration ...</span>
<span class="token punctuation">}</span></blockquote></pre>
               You can also find a specific Prefix List using the <code>aws_prefix_list</code> data source.
               <h2 id="argument-reference"><a name="argument-reference" class="anchor"
                     href="#argument-reference">Argument Reference</a></h2>
               The following arguments are supported:
               <ul>
                  <li><a name="description" href="#description"><code>description</code></a> - (Optional, Forces new
                     resource) Security group description. Defaults to <code>Managed by Terraform</code>. Cannot be
                     <code>""</code>. <strong>NOTE</strong>: This field maps to the AWS <code>GroupDescription</code>
                     attribute, for which there is no Update API. If you'd like to classify your security groups in a
                     way that can be updated, use <code>tags</code>.</li>

                  <li><a name="egress" href="#egress"><code>egress</code></a> - (Optional, VPC only) Configuration block
                     for egress rules. Can be specified multiple times for each egress rule. Each egress block supports
                     fields documented below. This argument is processed in attribute-as-blocks
                        mode.</li>

                  <li><a name="ingress" href="#ingress"><code>ingress</code></a> - (Optional) Configuration block for
                     ingress rules. Can be specified multiple times for each ingress rule. Each ingress block supports
                     fields documented below. This argument is processed in attribute-as-blocks
                        mode.</li>
                  <li><a name="name_prefix" href="#name_prefix"><code>name_prefix</code></a>  - (Optional, Forces new
                     resource) Creates a unique name beginning with the specified prefix. Conflicts with
                     <code>name</code>.</li>

                  <li><a name="name" href="#name"><code>name</code></a> - (Optional, Forces new resource) Name of the
                     security group. If omitted, Terraform will assign a random, unique name.</li>
                  <li><a name="revoke_rules_on_delete"
                        href="#revoke_rules_on_delete"><code>revoke_rules_on_delete</code></a> - (Optional) Instruct
                     Terraform to revoke all of the Security Groups attached ingress and egress rules before deleting
                     the rule itself. This is normally not needed, however certain AWS services such as Elastic Map
                     Reduce may automatically add required rules to security groups used with the service, and those
                     rules may contain a cyclic dependency that prevent the security groups from being destroyed without
                     removing the dependency first. Default <code>false</code>.</li>
                  <li><a name="tags" href="#tags"><code>tags</code></a> - (Optional) Map of tags to assign to the
                     resource. If configured with a provider <code>default_tags</code> configuration
                        block</a> present, tags with matching keys will overwrite those defined at the provider-level.
                  </li>
                  <li><a name="vpc_id" href="#vpc_id"><code>vpc_id</code></a> - (Optional, Forces new resource) VPC ID.
                  </li>
               </ul>
               <h3 id="ingress"><a name="ingress" class="anchor" href="#ingress">ingress</a></h3>
               This argument is processed in attribute-as-blocks
                     mode
               The following arguments are required:
               <ul>
                  <li><a name="from_port" href="#from_port"><code>from_port</code></a> - (Required) Start port (or ICMP
                     type number if protocol is <code>icmp</code> or <code>icmpv6</code>).</li>
                  <li><a name="to_port" href="#to_port"><code>to_port</code></a> - (Required) End range port (or ICMP
                     code if protocol is <code>icmp</code>).</li>
                  <li><a name="protocol" href="#protocol"><code>protocol</code></a> - (Required) Protocol. If you select
                     a protocol of <code>-1</code> (semantically equivalent to <code>all</code>, which is not a valid
                     value here), you must specify a <code>from_port</code> and <code>to_port</code> equal to 0. The
                     supported values are defined in the <code>IpProtocol</code> argument on the IpPermission</a>
                     API reference. This argument is normalized to a lowercase value to match the AWS API requirement
                     when using with Terraform 0.12.x and above, please make sure that the value of the protocol is
                     specified as lowercase when using with older version of Terraform to avoid an issue during upgrade.
                  </li>
               </ul>
               The following arguments are optional:
               <ul>
                  <li><a name="cidr_blocks" href="#cidr_blocks"><code>cidr_blocks</code></a> - (Optional) List of CIDR
                     blocks.</li>
                  <li><a name="description" href="#description"><code>description</code></a> - (Optional) Description of
                     this ingress rule.</li>
                  <li><a name="ipv6_cidr_blocks" href="#ipv6_cidr_blocks"><code>ipv6_cidr_blocks</code></a> - (Optional)
                     List of IPv6 CIDR blocks.</li>
                  <li><a name="prefix_list_ids" href="#prefix_list_ids"><code>prefix_list_ids</code></a> - (Optional)
                     List of Prefix List IDs.</li>
                  <li><a name="security_groups" href="#security_groups"><code>security_groups</code></a> - (Optional)
                     List of security group Group Names if using EC2-Classic, or Group IDs if using a VPC.</li>
                  <li><a name="self" href="#self"><code>self</code></a> - (Optional) Whether the security group itself
                     will be added as a source to this ingress rule.</li>
               </ul>
               <h3 id="egress"><a name="egress" class="anchor" href="#egress">egress</a></h3>
               This argument is processed in attribute-as-blocks
                     mode
               The following arguments are required:
               <ul>
                  <li><a name="from_port" href="#from_port"><code>from_port</code></a> - (Required) Start port (or ICMP
                     type number if protocol is <code>icmp</code>)</li>
                  <li><a name="to_port" href="#to_port"><code>to_port</code></a> - (Required) End range port (or ICMP
                     code if protocol is <code>icmp</code>).</li>
               </ul>
               The following arguments are optional:
               <ul>
                  <li><a name="cidr_blocks" href="#cidr_blocks"><code>cidr_blocks</code></a> - (Optional) List of CIDR
                     blocks.</li>
                  <li><a name="description" href="#description"><code>description</code></a> - (Optional) Description of
                     this egress rule.</li>
                  <li><a name="ipv6_cidr_blocks" href="#ipv6_cidr_blocks"><code>ipv6_cidr_blocks</code></a> - (Optional)
                     List of IPv6 CIDR blocks.</li>
                  <li><a name="prefix_list_ids" href="#prefix_list_ids"><code>prefix_list_ids</code></a> - (Optional)
                     List of Prefix List IDs.</li>
                  <li><a name="protocol" href="#protocol"><code>protocol</code></a> - (Required) Protocol. If you select
                     a protocol of <code>-1</code> (semantically equivalent to <code>all</code>, which is not a valid
                     value here), you must specify a <code>from_port</code> and <code>to_port</code> equal to 0. The
                     supported values are defined in the <code>IpProtocol</code> argument in the IpPermission
                     API reference. This argument is normalized to a lowercase value to match the AWS API requirement
                     when using Terraform 0.12.x and above. Please make sure that the value of the protocol is specified
                     as lowercase when used with older version of Terraform to avoid issues during upgrade.</li>
                  <li><a name="security_groups" href="#security_groups"><code>security_groups</code></a> - (Optional)
                     List of security group Group Names if using EC2-Classic, or Group IDs if using a VPC.</li>
                  <li><a name="self" href="#self"><code>self</code></a> - (Optional) Whether the security group itself
                     will be added as a source to this egress rule.</li>
               </ul>
               <h2 id="attributes-reference"><a name="attributes-reference" class="anchor"
                     href="#attributes-reference">Attributes Reference</a></h2>
               In addition to all arguments above, the following attributes are exported:
               <ul>
                  <li><a name="arn" href="#arn"><code>arn</code></a> - ARN of the security group.</li>
                  <li><a name="id" href="#id"><code>id</code></a> - ID of the security group.</li>
                  <li><a name="owner_id" href="#owner_id"><code>owner_id</code></a> - Owner ID.</li>
                  <li><a name="tags_all" href="#tags_all"><code>tags_all</code></a> - A map of tags assigned to the
                     resource, including those inherited from the provider <code>default_tags</code>
                        configuration block</a>.</li>
               </ul>
               <h2 id="timeouts"><a name="timeouts" class="anchor" href="#timeouts">Timeouts</a></h2>
               <code>aws_security_group</code> provides the following Timeouts</a>
                  configuration options:
               <ul>
                  <li><a name="create" href="#create"><code>create</code></a> - (Default <code>10m</code>) How long to
                     wait for a security group to be created.</li>
                  <li><a name="delete" href="#delete"><code>delete</code></a> - (Default <code>15m</code>) How long to
                     retry on <code>DependencyViolation</code> errors during security group deletion from lingering ENIs
                     left by certain AWS services such as Elastic Load Balancing. NOTE: Lambda ENIs can take up to 45
                     minutes to delete, which is not affected by changing this customizable timeout (in version 2.31.0
                     and later of the Terraform AWS Provider) unless it is increased above 45 minutes.</li>
               </ul>
               <h2 id="import"><a name="import" class="anchor" href="#import">Import</a></h2>
               Security Groups can be imported using the <code>security group id</code>, e.g.,
               <pre class="line-numbers"><blockquote>$ terraform import aws_security_group.elb_sg sg-903004f8</blockquote></pre>
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