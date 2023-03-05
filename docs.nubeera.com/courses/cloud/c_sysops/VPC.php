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
            <strong class="px-2" style="font-size: 1.125rem;">aws vpc</strong><br><br>
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
         <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;"> aws vpc</h1>

         <ol class="breadcrumb mx-5 mt-3 px-0">
            <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home"
                     aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item"><a href="../">Cloud</a></li>
            <li class="breadcrumb-item"><a href="../../">Cloud SysOps</a></li>
            <li class="breadcrumb-item"><a href="../../">Contents</a></li>
            <li class="breadcrumb-item active">aws vpc</li>
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

            <div id="ember1935" class="ember-view">
              
               Provides a VPC resource.
               <h2 id="example-usage"><a name="example-usage" class="anchor" href="#example-usage">Example Usage</a>
               </h2>
               Basic usage:
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_vpc"</span></span> <span class="token string">"main"</span> <span class="token punctuation">{</span>
  <span class="token property">cidr_block</span> <span class="token punctuation">=</span> <span class="token string">"10.0.0.0/16"</span>
<span class="token punctuation">}</span></blockquote></pre>
               Basic usage with tags:
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_vpc"</span></span> <span class="token string">"main"</span> <span class="token punctuation">{</span>
  <span class="token property">cidr_block</span>       <span class="token punctuation">=</span> <span class="token string">"10.0.0.0/16"</span>
  <span class="token property">instance_tenancy</span> <span class="token punctuation">=</span> <span class="token string">"default"</span>

  <span class="token property">tags</span> <span class="token punctuation">=</span> <span class="token punctuation">{</span>
    <span class="token property">Name</span> <span class="token punctuation">=</span> <span class="token string">"main"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
               VPC with CIDR from AWS IPAM:
               <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">data <span class="token type variable">"aws_region"</span></span> <span class="token string">"current"</span> <span class="token punctuation">{</span><span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_vpc_ipam"</span></span> <span class="token string">"test"</span> <span class="token punctuation">{</span>
  <span class="token keyword">operating_regions</span> <span class="token punctuation">{</span>
    <span class="token property">region_name</span> <span class="token punctuation">=</span> data.aws_region.current.name
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_vpc_ipam_pool"</span></span> <span class="token string">"test"</span> <span class="token punctuation">{</span>
  <span class="token property">address_family</span> <span class="token punctuation">=</span> <span class="token string">"ipv4"</span>
  <span class="token property">ipam_scope_id</span>  <span class="token punctuation">=</span> aws_vpc_ipam.test.private_default_scope_id
  <span class="token property">locale</span>         <span class="token punctuation">=</span> data.aws_region.current.name
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_vpc_ipam_pool_cidr"</span></span> <span class="token string">"test"</span> <span class="token punctuation">{</span>
  <span class="token property">ipam_pool_id</span> <span class="token punctuation">=</span> aws_vpc_ipam_pool.test.id
  <span class="token property">cidr</span>         <span class="token punctuation">=</span> <span class="token string">"172.2.0.0/16"</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_vpc"</span></span> <span class="token string">"test"</span> <span class="token punctuation">{</span>
  <span class="token property">ipv4_ipam_pool_id</span>   <span class="token punctuation">=</span> aws_vpc_ipam_pool.test.id
  <span class="token property">ipv4_netmask_length</span> <span class="token punctuation">=</span> <span class="token number">28</span>
  <span class="token property">depends_on</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span>
    aws_vpc_ipam_pool_cidr.test
  <span class="token punctuation">]</span>
<span class="token punctuation">}</span></blockquote></pre>
               <h2 id="argument-reference"><a name="argument-reference" class="anchor"
                     href="#argument-reference">Argument Reference</a></h2>
               The following arguments are supported:
               <ul>
                  <li><a name="cidr_block" href="#cidr_block"><code>cidr_block</code></a> - (Optional) The IPv4 CIDR
                     block for the VPC. CIDR can be explicitly set or it can be derived from IPAM using
                     <code>ipv4_netmask_length</code>.</li>
                  <li><a name="instance_tenancy" href="#instance_tenancy"><code>instance_tenancy</code></a> - (Optional)
                     A tenancy option for instances launched into the VPC. Default is <code>default</code>, which makes
                     your instances shared on the host. Using either of the other options (<code>dedicated</code> or
                     <code>host</code>) costs at least $2/hr.</li>
                  <li><a name="ipv4_ipam_pool_id" href="#ipv4_ipam_pool_id"><code>ipv4_ipam_pool_id</code></a> -
                     (Optional) The ID of an IPv4 IPAM pool you want to use for allocating this VPC's CIDR. IPAM is a
                     VPC feature that you can use to automate your IP address management workflows including assigning,
                     tracking, troubleshooting, and auditing IP addresses across AWS Regions and accounts. Using IPAM
                     you can monitor IP address usage throughout your AWS Organization.</li>
                  <li><a name="ipv4_netmask_length" href="#ipv4_netmask_length"><code>ipv4_netmask_length</code></a> -
                     (Optional) The netmask length of the IPv4 CIDR you want to allocate to this VPC. Requires
                     specifying a <code>ipv4_ipam_pool_id</code>.</li>
                  <li><a name="ipv6_cidr_block" href="#ipv6_cidr_block"><code>ipv6_cidr_block</code></a> - (Optional)
                     IPv6 CIDR block to request from an IPAM Pool. Can be set explicitly or derived from IPAM using
                     <code>ipv6_netmask_length</code>.</li>
                  <li><a name="ipv6_ipam_pool_id" href="#ipv6_ipam_pool_id"><code>ipv6_ipam_pool_id</code></a> -
                     (Optional) IPAM Pool ID for a IPv6 pool. Conflicts with
                     <code>assign_generated_ipv6_cidr_block</code>.</li>
                  <li><a name="ipv6_netmask_length" href="#ipv6_netmask_length"><code>ipv6_netmask_length</code></a> -
                     (Optional) Netmask length to request from IPAM Pool. Conflicts with <code>ipv6_cidr_block</code>.
                     This can be omitted if IPAM pool as a <code>allocation_default_netmask_length</code> set. Valid
                     values: <code>56</code>.</li>
                  <li><a name="ipv6_cidr_block_network_border_group"
                        href="#ipv6_cidr_block_network_border_group"><code>ipv6_cidr_block_network_border_group</code></a>
                     - (Optional) By default when an IPv6 CIDR is assigned to a VPC a default
                     ipv6_cidr_block_network_border_group will be set to the region of the VPC. This can be changed to
                     restrict advertisement of public addresses to specific Network Border Groups such as LocalZones.
                  </li>
                  <li><a name="enable_dns_support" href="#enable_dns_support"><code>enable_dns_support</code></a> -
                     (Optional) A boolean flag to enable/disable DNS support in the VPC. Defaults true.</li>
                  <li><a name="enable_dns_hostnames" href="#enable_dns_hostnames"><code>enable_dns_hostnames</code></a>
                     - (Optional) A boolean flag to enable/disable DNS hostnames in the VPC. Defaults false.</li>
                  <li><a name="enable_classiclink" href="#enable_classiclink"><code>enable_classiclink</code></a> -
                     (Optional) A boolean flag to enable/disable ClassicLink
                     for the VPC. Only valid in regions and accounts that support EC2 Classic.
                     See the ClassicLink
                        documentation for more information. Defaults false.</li>
                  <li><a name="enable_classiclink_dns_support"
                        href="#enable_classiclink_dns_support"><code>enable_classiclink_dns_support</code></a> -
                     (Optional) A boolean flag to enable/disable ClassicLink DNS Support for the VPC.
                     Only valid in regions and accounts that support EC2 Classic.</li>
                  <li><a name="assign_generated_ipv6_cidr_block"
                        href="#assign_generated_ipv6_cidr_block"><code>assign_generated_ipv6_cidr_block</code></a> -
                     (Optional) Requests an Amazon-provided IPv6 CIDR block with a /56 prefix length for the VPC. You
                     cannot specify the range of IP addresses, or the size of the CIDR block. Default is
                     <code>false</code>. Conflicts with <code>ipv6_ipam_pool_id</code></li>
                  <li><a name="tags" href="#tags"><code>tags</code></a> - (Optional) A map of tags to assign to the
                     resource. If configured with a provider <code>default_tags</code> configuration
                        block present, tags with matching keys will overwrite those defined at the provider-level.
                  </li>
               </ul>
               <h2 id="attributes-reference"><a name="attributes-reference" class="anchor"
                     href="#attributes-reference">Attributes Reference</a></h2>
               In addition to all arguments above, the following attributes are exported:
               <ul>
                  <li><a name="arn" href="#arn"><code>arn</code></a> - Amazon Resource Name (ARN) of VPC</li>
                  <li><a name="id" href="#id"><code>id</code></a> - The ID of the VPC</li>
                  <li><a name="instance_tenancy" href="#instance_tenancy"><code>instance_tenancy</code></a> - Tenancy of
                     instances spin up within VPC.</li>
                  <li><a name="enable_dns_support" href="#enable_dns_support"><code>enable_dns_support</code></a> -
                     Whether or not the VPC has DNS support</li>
                  <li><a name="enable_dns_hostnames" href="#enable_dns_hostnames"><code>enable_dns_hostnames</code></a>
                     - Whether or not the VPC has DNS hostname support</li>
                  <li><a name="enable_classiclink" href="#enable_classiclink"><code>enable_classiclink</code></a> -
                     Whether or not the VPC has Classiclink enabled</li>
                  <li><a name="main_route_table_id" href="#main_route_table_id"><code>main_route_table_id</code></a> -
                     The ID of the main route table associated with
                     this VPC. Note that you can change a VPC's main route table by using an
                     <a href="#main_route_table_association"><code>aws_main_route_table_association</code></a>.</li>
                  <li><a name="default_network_acl_id"
                        href="#default_network_acl_id"><code>default_network_acl_id</code></a> - The ID of the network
                     ACL created by default on VPC creation</li>
                  <li><a name="default_security_group_id"
                        href="#default_security_group_id"><code>default_security_group_id</code></a> - The ID of the
                     security group created by default on VPC creation</li>
                  <li><a name="default_route_table_id"
                        href="#default_route_table_id"><code>default_route_table_id</code></a> - The ID of the route
                     table created by default on VPC creation</li>
                  <li><a name="ipv6_association_id" href="#ipv6_association_id"><code>ipv6_association_id</code></a> -
                     The association ID for the IPv6 CIDR block.</li>
                  <li>ipv6_cidr_block_network_border_group - The Network Border Group Zone name</li>
                  <li><a name="owner_id" href="#owner_id"><code>owner_id</code></a> - The ID of the AWS account that
                     owns the VPC.</li>
                  <li><a name="tags_all" href="#tags_all"><code>tags_all</code></a> - A map of tags assigned to the
                     resource, including those inherited from the provider <code>default_tags</code>
                        configuration block.</li>
               </ul>
               <h2 id="import"><a name="import" class="anchor" href="#import">Import</a></h2>
               VPCs can be imported using the <code>vpc id</code>, e.g.,
               <pre class="line-numbers"><blockquote>$ terraform import aws_vpc.test_vpc vpc-a01106c2</blockquote></pre>
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