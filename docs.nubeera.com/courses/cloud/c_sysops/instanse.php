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
            <strong class="px-2" style="font-size: 1.125rem;">aws instance</strong><br><br>
            <ul>
               <!---list 0f side menu--->

            </ul>
         </div>
      </div>

   </div>
   <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target=""
         data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

   <div class="content-box" id="content-box">
      <div class="body-content">
         <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;"> aws instance</h1>

         <ol class="breadcrumb mx-5 mt-3 px-0">
            <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home"
                     aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item"><a href="../">Cloud</a></li>
            <li class="breadcrumb-item"><a href="../../">Cloud SysOps</a></li>
            <li class="breadcrumb-item"><a href="../../">Contents</a></li>
            <li class="breadcrumb-item active">instance</li>
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

            <div class="markdown" id="provider-doc">
               <div class="highlighted-code-wrapper">
                  <div id="ember1939" class="ember-view">

                     Provides an EC2 instance resource. This allows instances to be created, updated, and deleted.
                     Instances also support .
                     <h2 id="example-usage"><a name="example-usage" class="anchor" href="#example-usage">Example
                           Usage</a></h2>
                     <h3 id="basic-example-using-ami-lookup"><a name="basic-example-using-ami-lookup" class="anchor"
                           href="#basic-example-using-ami-lookup">Basic Example Using AMI Lookup</a></h3>
                     <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">data <span class="token type variable">"aws_ami"</span></span> <span class="token string">"ubuntu"</span> <span class="token punctuation">{</span>
  <span class="token property">most_recent</span> <span class="token punctuation">=</span> <span class="token boolean">true</span>

  <span class="token keyword">filter</span> <span class="token punctuation">{</span>
    <span class="token property">name</span>   <span class="token punctuation">=</span> <span class="token string">"name"</span>
    <span class="token property">values</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"ubuntu/images/hvm-ssd/ubuntu-focal-20.04-amd64-server-*"</span><span class="token punctuation">]</span>
  <span class="token punctuation">}</span>

  <span class="token keyword">filter</span> <span class="token punctuation">{</span>
    <span class="token property">name</span>   <span class="token punctuation">=</span> <span class="token string">"virtualization-type"</span>
    <span class="token property">values</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"hvm"</span><span class="token punctuation">]</span>
  <span class="token punctuation">}</span>

  <span class="token property">owners</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"099720109477"</span><span class="token punctuation">]</span> <span class="token comment"># Canonical</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_instance"</span></span> <span class="token string">"web"</span> <span class="token punctuation">{</span>
  <span class="token property">ami</span>           <span class="token punctuation">=</span> data.aws_ami.ubuntu.id
  <span class="token property">instance_type</span> <span class="token punctuation">=</span> <span class="token string">"t3.micro"</span>

  <span class="token property">tags</span> <span class="token punctuation">=</span> <span class="token punctuation">{</span>
    <span class="token property">Name</span> <span class="token punctuation">=</span> <span class="token string">"HelloWorld"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
                     <h3 id="network-and-credit-specification-example"><a
                           name="network-and-credit-specification-example" class="anchor"
                           href="#network-and-credit-specification-example">Network and Credit Specification Example</a>
                     </h3>
                     <pre class="line-numbers language-terraform"><blockquote class="terraform language-terraform"><span class="token keyword">resource <span class="token type variable">"aws_vpc"</span></span> <span class="token string">"my_vpc"</span> <span class="token punctuation">{</span>
  <span class="token property">cidr_block</span> <span class="token punctuation">=</span> <span class="token string">"172.16.0.0/16"</span>

  <span class="token property">tags</span> <span class="token punctuation">=</span> <span class="token punctuation">{</span>
    <span class="token property">Name</span> <span class="token punctuation">=</span> <span class="token string">"tf-example"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_subnet"</span></span> <span class="token string">"my_subnet"</span> <span class="token punctuation">{</span>
  <span class="token property">vpc_id</span>            <span class="token punctuation">=</span> aws_vpc.my_vpc.id
  <span class="token property">cidr_block</span>        <span class="token punctuation">=</span> <span class="token string">"172.16.10.0/24"</span>
  <span class="token property">availability_zone</span> <span class="token punctuation">=</span> <span class="token string">"us-west-2a"</span>

  <span class="token property">tags</span> <span class="token punctuation">=</span> <span class="token punctuation">{</span>
    <span class="token property">Name</span> <span class="token punctuation">=</span> <span class="token string">"tf-example"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_network_interface"</span></span> <span class="token string">"foo"</span> <span class="token punctuation">{</span>
  <span class="token property">subnet_id</span>   <span class="token punctuation">=</span> aws_subnet.my_subnet.id
  <span class="token property">private_ips</span> <span class="token punctuation">=</span> <span class="token punctuation">[</span><span class="token string">"172.16.10.100"</span><span class="token punctuation">]</span>

  <span class="token property">tags</span> <span class="token punctuation">=</span> <span class="token punctuation">{</span>
    <span class="token property">Name</span> <span class="token punctuation">=</span> <span class="token string">"primary_network_interface"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

<span class="token keyword">resource <span class="token type variable">"aws_instance"</span></span> <span class="token string">"foo"</span> <span class="token punctuation">{</span>
  <span class="token property">ami</span>           <span class="token punctuation">=</span> <span class="token string">"ami-005e54dee72cc1d00"</span> <span class="token comment"># us-west-2</span>
  <span class="token property">instance_type</span> <span class="token punctuation">=</span> <span class="token string">"t2.micro"</span>

  <span class="token keyword">network_interface</span> <span class="token punctuation">{</span>
    <span class="token property">network_interface_id</span> <span class="token punctuation">=</span> aws_network_interface.foo.id
    <span class="token property">device_index</span>         <span class="token punctuation">=</span> <span class="token number">0</span>
  <span class="token punctuation">}</span>

  <span class="token keyword">credit_specification</span> <span class="token punctuation">{</span>
    <span class="token property">cpu_credits</span> <span class="token punctuation">=</span> <span class="token string">"unlimited"</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span></blockquote></pre>
                     <h2 id="argument-reference"><a name="argument-reference" class="anchor"
                           href="#argument-reference">Argument Reference</a></h2>
                     The following arguments are supported:
                     <ul>
                        <li><a name="ami" href="#ami"><code>ami</code></a> - (Optional) AMI to use for the instance.
                           Required unless <code>launch_template</code> is specified and the Launch Template specifes an
                           AMI. If an AMI is specified in the Launch Template, setting <code>ami</code> will override
                           the AMI specified in the Launch Template.</li>
                        <li><a name="associate_public_ip_address"
                              href="#associate_public_ip_address"><code>associate_public_ip_address</code></a> -
                           (Optional) Whether to associate a public IP address with an instance in a VPC.</li>
                        <li><a name="availability_zone" href="#availability_zone"><code>availability_zone</code></a> -
                           (Optional) AZ to start the instance in.</li>
                        <li><a name="capacity_reservation_specification"
                              href="#capacity_reservation_specification"><code>capacity_reservation_specification</code></a>
                           - (Optional) Describes an instance's Capacity Reservation targeting option. See <a
                              href="#capacity-reservation-specification">Capacity Reservation Specification</a> below
                           for more details.</li>
                     </ul>
                     <div class="alert alert-info" role="alert">
                        <div class="alert-title"><i class="fa fa-info-circle"></i>NOTE:</div>
                        Changing <code>cpu_core_count</code> and/or <code>cpu_threads_per_core</code> will cause the
                        resource to be destroyed and re-created.
                     </div>

                     <ul>
                        <li><a name="cpu_core_count" href="#cpu_core_count"><code>cpu_core_count</code></a> - (Optional)
                           Sets the number of CPU cores for an instance. This option is only supported on creation of
                           instance type that support CPU Options
                           Cores and Threads Per CPU Core Per Instance Type- specifying this option for
                           unsupported instance types will return an error from the EC2 API.</li>
                        <li><a name="cpu_threads_per_core"
                              href="#cpu_threads_per_core"><code>cpu_threads_per_core</code></a> - (Optional - has no
                           effect unless <code>cpu_core_count</code> is also set) If set to to 1, hyperthreading is
                           disabled on the launched instance. Defaults to 2 if not set. See Optimizing
                           CPU Options for more information.</li>
                        <li><a name="credit_specification"
                              href="#credit_specification"><code>credit_specification</code></a> - (Optional)
                           Configuration block for customizing the credit specification of the instance. See <a
                              href="#credit-specification">Credit Specification</a> below for more details. Terraform
                           will only perform drift detection of its value when present in a configuration. Removing this
                           configuration on existing instances will only stop managing it. It will not change the
                           configuration back to the default for the instance type.</li>
                        <li><a name="disable_api_termination"
                              href="#disable_api_termination"><code>disable_api_termination</code></a> - (Optional) If
                           true, enables EC2
                           Instance Termination Protection.</li>
                        <li><a name="ebs_block_device" href="#ebs_block_device"><code>ebs_block_device</code></a> -
                           (Optional) One or more configuration blocks with additional EBS block devices to attach to
                           the instance. Block device configurations only apply on resource creation. See <a
                              href="#ebs-ephemeral-and-root-block-devices">Block Devices</a> below for details on
                           attributes and drift detection. When accessing this as an attribute reference, it is a set of
                           objects.</li>
                        <li><a name="ebs_optimized" href="#ebs_optimized"><code>ebs_optimized</code></a> - (Optional) If
                           true, the launched EC2 instance will be EBS-optimized. Note that if this is not set on an
                           instance type that is optimized by default then this will show as disabled but if the
                           instance type is optimized by default then there is no need to set this and there is no
                           effect to disabling it. See the EBS Optimized
                           section of the AWS User Guide for more information.</li>
                        <li><a name="enclave_options" href="#enclave_options"><code>enclave_options</code></a> -
                           (Optional) Enable Nitro Enclaves on launched instances. See <a
                              href="#enclave-options">Enclave Options</a> below for more details.</li>
                        <li><a name="ephemeral_block_device"
                              href="#ephemeral_block_device"><code>ephemeral_block_device</code></a> - (Optional) One or
                           more configuration blocks to customize Ephemeral (also known as "Instance Store") volumes on
                           the instance. See <a href="#ebs-ephemeral-and-root-block-devices">Block Devices</a> below for
                           details. When accessing this as an attribute reference, it is a set of objects.</li>
                        <li><a name="get_password_data" href="#get_password_data"><code>get_password_data</code></a> -
                           (Optional) If true, wait for password data to become available and retrieve it. Useful for
                           getting the administrator password for instances running Microsoft Windows. The password data
                           is exported to the <code>password_data</code> attribute. See GetPasswordData
                           for more information.</li>
                        <li><a name="hibernation" href="#hibernation"><code>hibernation</code></a> - (Optional) If true,
                           the launched EC2 instance will support hibernation.</li>
                        <li><a name="host_id" href="#host_id"><code>host_id</code></a> - (Optional) ID of a dedicated
                           host that the instance will be assigned to. Use when an instance is to be launched on a
                           specific dedicated host.</li>
                        <li><a name="iam_instance_profile"
                              href="#iam_instance_profile"><code>iam_instance_profile</code></a> - (Optional) IAM
                           Instance Profile to launch the instance with. Specified as the name of the Instance Profile.
                           Ensure your credentials have the correct permission to assign the instance profile according
                           to the EC2
                           documentation, notably <code>iam:PassRole</code>.</li>
                        <li><a name="instance_initiated_shutdown_behavior"
                              href="#instance_initiated_shutdown_behavior"><code>instance_initiated_shutdown_behavior</code></a>
                           - (Optional) Shutdown behavior for the instance. Amazon defaults this to <code>stop</code>
                           for EBS-backed instances and <code>terminate</code> for instance-store instances. Cannot be
                           set on instance-store instances. See Shutdown
                           Behavior</a> for more information.</li>
                        <li><a name="instance_type" href="#instance_type"><code>instance_type</code></a> - (Optional)
                           The instance type to use for the instance. Updates to this field will trigger a stop/start of
                           the EC2 instance.</li>
                        <li><a name="ipv6_address_count" href="#ipv6_address_count"><code>ipv6_address_count</code></a>-
                           (Optional) A number of IPv6 addresses to associate with the primary network interface. Amazon
                           EC2 chooses the IPv6 addresses from the range of your subnet.</li>
                        <li><a name="ipv6_addresses" href="#ipv6_addresses"><code>ipv6_addresses</code></a> - (Optional)
                           Specify one or more IPv6 addresses from the range of the subnet to associate with the primary
                           network interface</li>
                        <li><a name="key_name" href="#key_name"><code>key_name</code></a> - (Optional) Key name of the
                           Key Pair to use for the instance; which can be managed using <a href="key_pair">the
                              <code>aws_key_pair</code> resource</a>.</li>
                        <li><a name="launch_template" href="#launch_template"><code>launch_template</code></a> -
                           (Optional) Specifies a Launch Template to configure the instance. Parameters configured on
                           this resource will override the corresponding parameters in the Launch Template.
                           See <a href="#launch-template-specification">Launch Template Specification</a> below for more
                           details.</li>
                        <li><a name="metadata_options" href="#metadata_options"><code>metadata_options</code></a> -
                           (Optional) Customize the metadata options of the instance. See <a
                              href="#metadata-options">Metadata Options</a> below for more details.</li>
                        <li><a name="monitoring" href="#monitoring"><code>monitoring</code></a> - (Optional) If true,
                           the launched EC2 instance will have detailed monitoring enabled. (Available since v0.6.0)
                        </li>
                        <li><a name="network_interface" href="#network_interface"><code>network_interface</code></a> -
                           (Optional) Customize network interfaces to be attached at instance boot time. See <a
                              href="#network-interfaces">Network Interfaces</a> below for more details.</li>
                        <li><a name="placement_group" href="#placement_group"><code>placement_group</code></a> -
                           (Optional) Placement Group to start the instance in.</li>
                        <li><a name="placement_partition_number"
                              href="#placement_partition_number"><code>placement_partition_number</code></a> -
                           (Optional) The number of the partition the instance is in. Valid only if <a
                              href="placement_group">the <code>aws_placement_group</code> resource's</a>
                           <code>strategy</code> argument is set to <code>"partition"</code>.</li>
                        <li><a name="private_ip" href="#private_ip"><code>private_ip</code></a> - (Optional) Private IP
                           address to associate with the instance in a VPC.</li>
                        <li><a name="root_block_device" href="#root_block_device"><code>root_block_device</code></a> -
                           (Optional) Configuration block to customize details about the root block device of the
                           instance. See <a href="#ebs-ephemeral-and-root-block-devices">Block Devices</a> below for
                           details. When accessing this as an attribute reference, it is a list containing one object.
                        </li>
                        <li><a name="secondary_private_ips"
                              href="#secondary_private_ips"><code>secondary_private_ips</code></a> - (Optional) A list
                           of secondary private IPv4 addresses to assign to the instance's primary network interface
                           (eth0) in a VPC. Can only be assigned to the primary network interface (eth0) attached at
                           instance creation, not a pre-existing network interface i.e., referenced in a
                           <code>network_interface</code> block. Refer to theElastic
                           network interfaces documentation to see the maximum number of private IP addresses
                           allowed per instance type.</li>
                        <li><a name="security_groups" href="#security_groups"><code>security_groups</code></a> -
                           (Optional, EC2-Classic and default VPC only) A list of security group names to associate
                           with.</li>
                     </ul>
                     <div class="alert alert-info" role="alert">
                        <div class="alert-title"><i class="fa fa-info-circle"></i>NOTE:</div>
                        If you are creating Instances in a VPC, use <code>vpc_security_group_ids</code> instead.
                     </div>

                     <ul>
                        <li><a name="source_dest_check" href="#source_dest_check"><code>source_dest_check</code></a> -
                           (Optional) Controls if traffic is routed to the instance when the destination address does
                           not match the instance. Used for NAT or VPNs. Defaults true.</li>
                        <li><a name="subnet_id" href="#subnet_id"><code>subnet_id</code></a> - (Optional) VPC Subnet ID
                           to launch in.</li>
                        <li><a name="tags" href="#tags"><code>tags</code></a> - (Optional) A map of tags to assign to
                           the resource. Note that these tags apply to the instance and not block storage devices. If
                           configured with a provider <code>default_tags</code> configuration
                           block present, tags with matching keys will overwrite those defined at the
                           provider-level.</li>
                        <li><a name="tenancy" href="#tenancy"><code>tenancy</code></a> - (Optional) Tenancy of the
                           instance (if the instance is running in a VPC). An instance with a tenancy of dedicated runs
                           on single-tenant hardware. The host tenancy is not supported for the import-instance command.
                        </li>
                        <li><a name="user_data" href="#user_data"><code>user_data</code></a> - (Optional) User data to
                           provide when launching the instance. Do not pass gzip-compressed data via this argument; see
                           <code>user_data_base64</code> instead.</li>
                        <li><a name="user_data_base64" href="#user_data_base64"><code>user_data_base64</code></a> -
                           (Optional) Can be used instead of <code>user_data</code> to pass base64-encoded binary data
                           directly. Use this instead of <code>user_data</code> whenever the value is not a valid UTF-8
                           string. For example, gzip-encoded user data must be base64-encoded and passed via this
                           argument to avoid corruption.</li>
                        <li><a name="volume_tags" href="#volume_tags"><code>volume_tags</code></a> - (Optional) A map of
                           tags to assign, at instance-creation time, to root and EBS volumes.</li>
                     </ul>
                     <div class="alert alert-warning" role="alert">
                        <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE:</div>
                        Do not use <code>volume_tags</code> if you plan to manage block device tags outside the
                        <code>aws_instance</code> configuration, such as using <code>tags</code> in an <code>aws_ebs_volume</code> resource attached via
                        <code>aws_volume_attachment</code> Doing so will result in
                        resource cycling and inconsistent behavior.
                     </div>

                     <ul>
                        <li><code>vpc_security_group_ids</code> - (Optional, VPC
                           only) A list of security group IDs to associate with.</li>
                     </ul>
                     <h3 id="timeouts"><a name="timeouts" class="anchor" href="#timeouts">Timeouts</a></h3>
                     The <code>timeouts</code> block allows you to specify timeouts</a>
                     for certain actions:
                     <ul>
                        <li><a name="create" href="#create"><code>create</code></a> - (Defaults to 10 mins) Used when
                           launching the instance (until it reaches the initial <code>running</code> state)</li>
                        <li><a name="update" href="#update"><code>update</code></a> - (Defaults to 10 mins) Used when
                           stopping and starting the instance when necessary during update - e.g., when changing
                           instance type</li>
                        <li><a name="delete" href="#delete"><code>delete</code></a> - (Defaults to 20 mins) Used when
                           terminating the instance</li>
                     </ul>
                     <h3 id="capacity-reservation-specification"><a name="capacity-reservation-specification"
                           class="anchor" href="#capacity-reservation-specification">Capacity Reservation
                           Specification</a></h3>
                     <div class="alert alert-warning" role="alert">
                        <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE:</div>
                        You can specify only one argument at a time. If you specify both
                        <code>capacity_reservation_preference</code> and <code>capacity_reservation_target</code>,
                        the request fails. Modifying <code>capacity_reservation_preference</code> or
                        <code>capacity_reservation_target</code> in this block requires the instance to be in
                        <code>stopped</code> state.
                     </div>

                     Capacity reservation specification can be applied/modified to the EC2 Instance at creation time
                     or when the instance is <code>stopped</code>.
                     The <code>capacity_reservation_specification</code> block supports the following:
                     <ul>
                        <li><a name="capacity_reservation_preference"
                              href="#capacity_reservation_preference"><code>capacity_reservation_preference</code></a> -
                           (Optional) Indicates the instance's Capacity Reservation preferences. Can be
                           <code>"open"</code> or <code>"none"</code>. (Default: <code>"open"</code>).</li>
                        <li><a name="capacity_reservation_target"
                              href="#capacity_reservation_target"><code>capacity_reservation_target</code></a> -
                           (Optional) Information about the target Capacity Reservation. See <a
                              href="#capacity-reservation-target">Capacity Reservation Target</a> below for more
                           details.</li>
                     </ul>
                     For more information, see the documentation on Capacity
                     Reservations</a>.
                     <h3 id="capacity-reservation-target"><a name="capacity-reservation-target" class="anchor"
                           href="#capacity-reservation-target">Capacity Reservation Target</a></h3>
                     <div class="alert alert-warning" role="alert">
                        <div class="alert-title"><i class="fa fa-exclamation-triangle"></i>NOTE:</div>
                        Modifying <code>capacity_reservation_id</code> in this block requires the instance to be in
                        <code>stopped</code> state.
                     </div>

                     Describes a target Capacity Reservation.
                     This <code>capacity_reservation_target</code> block supports the following:
                     <ul>
                        <li><a name="capacity_reservation_id"
                              href="#capacity_reservation_id"><code>capacity_reservation_id</code></a> - (Optional) The
                           ID of the Capacity Reservation in which to run the instance.</li>
                     </ul>
                     <h3 id="credit-specification"><a name="credit-specification" class="anchor"
                           href="#credit-specification">Credit Specification</a></h3>
                     The <code>credit_specification</code> block supports the following:
                     <ul>
                        <li><a name="cpu_credits" href="#cpu_credits"><code>cpu_credits</code></a> - (Optional) Credit
                           option for CPU usage. Valid values include <code>standard</code> or <code>unlimited</code>.
                           T3 instances are launched as unlimited by default. T2 instances are launched as standard by
                           default.</li>
                     </ul>
                     <h3 id="ebs-ephemeral-and-root-block-devices"><a name="ebs-ephemeral-and-root-block-devices"
                           class="anchor" href="#ebs-ephemeral-and-root-block-devices">EBS, Ephemeral, and Root Block
                           Devices</a></h3>
                     Each of the <code>*_block_device</code> attributes control a portion of the EC2 Instance's
                     "Block Device Mapping". For more information, see the AWS
                     Block Device Mapping documentation.
                     The <code>root_block_device</code> block supports the following:
                     <ul>
                        <li><a name="delete_on_termination"
                              href="#delete_on_termination"><code>delete_on_termination</code></a> - (Optional) Whether
                           the volume should be destroyed on instance termination. Defaults to <code>true</code>.</li>
                        <li><a name="encrypted" href="#encrypted"><code>encrypted</code></a> - (Optional) Whether to
                           enable volume encryption. Defaults to <code>false</code>. Must be configured to perform drift
                           detection.</li>
                        <li><a name="iops" href="#iops"><code>iops</code></a> - (Optional) Amount of provisioned IOPS.
                           Only valid for volume_type of <code>io1</code>, <code>io2</code> or <code>gp3</code>.</li>
                        <li><a name="kms_key_id" href="#kms_key_id"><code>kms_key_id</code></a> - (Optional) Amazon
                           Resource Name (ARN) of the KMS Key to use when encrypting the volume. Must be configured to
                           perform drift detection.</li>
                        <li><a name="tags" href="#tags"><code>tags</code></a> - (Optional) A map of tags to assign to
                           the device.</li>
                        <li><a name="throughput" href="#throughput"><code>throughput</code></a> - (Optional) Throughput
                           to provision for a volume in mebibytes per second (MiB/s). This is only valid for
                           <code>volume_type</code> of <code>gp3</code>.</li>
                        <li><a name="volume_size" href="#volume_size"><code>volume_size</code></a> - (Optional) Size of
                           the volume in gibibytes (GiB).</li>
                        <li><a name="volume_type" href="#volume_type"><code>volume_type</code></a> - (Optional) Type of
                           volume. Valid values include <code>standard</code>, <code>gp2</code>, <code>gp3</code>,
                           <code>io1</code>, <code>io2</code>, <code>sc1</code>, or <code>st1</code>. Defaults to
                           <code>gp2</code>.</li>
                     </ul>
                     Modifying the <code>encrypted</code> or <code>kms_key_id</code> settings of the
                     <code>root_block_device</code> requires resource replacement.
                     Each <code>ebs_block_device</code> block supports the following:
                     <ul>
                        <li><a name="delete_on_termination"
                              href="#delete_on_termination"><code>delete_on_termination</code></a> - (Optional) Whether
                           the volume should be destroyed on instance termination. Defaults to <code>true</code>.</li>
                        <li><a name="device_name" href="#device_name"><code>device_name</code></a> - (Required) Name of
                           the device to mount.</li>
                        <li><a name="encrypted" href="#encrypted"><code>encrypted</code></a> - (Optional) Enables EBS
                           encryption on the volume. Defaults to <code>false</code>. Cannot be used with
                           <code>snapshot_id</code>. Must be configured to perform drift detection.</li>
                        <li><a name="iops" href="#iops"><code>iops</code></a> - (Optional) Amount of provisioned IOPS
                           Only valid for volume_type of <code>io1</code>, <code>io2</code> or <code>gp3</code>.</li>
                        <li><a name="kms_key_id" href="#kms_key_id"><code>kms_key_id</code></a> - (Optional) Amazon
                           Resource Name (ARN) of the KMS Key to use when encrypting the volume. Must be configured to
                           perform drift detection.</li>
                        <li><a name="snapshot_id" href="#snapshot_id"><code>snapshot_id</code></a> - (Optional) Snapshot
                           ID to mount.</li>
                        <li><a name="tags" href="#tags"><code>tags</code></a> - (Optional) A map of tags to assign to
                           the device.</li>
                        <li><a name="throughput" href="#throughput"><code>throughput</code></a> - (Optional) Throughput
                           to provision for a volume in mebibytes per second (MiB/s). This is only valid for
                           <code>volume_type</code> of <code>gp3</code>.</li>
                        <li><a name="volume_size" href="#volume_size"><code>volume_size</code></a> - (Optional) Size of
                           the volume in gibibytes (GiB).</li>
                        <li><a name="volume_type" href="#volume_type"><code>volume_type</code></a> - (Optional) Type of
                           volume. Valid values include <code>standard</code>, <code>gp2</code>, <code>gp3</code>,
                           <code>io1</code>, <code>io2</code>, <code>sc1</code>, or <code>st1</code>. Defaults to
                           <code>gp2</code>.</li>
                     </ul>
                     <div class="alert alert-warning" role="alert">
                        <div class="alert-title">
                           <i class="fa fa-exclamation-triangle"></i>NOTE:</div>
                        Currently, changes to the <code>ebs_block_device</code> configuration of <em>existing</em>
                        resources cannot be automatically detected by Terraform. To manage changes and attachments of
                        an EBS block to an instance, use the <code>aws_ebs_volume</code> and
                        <code>aws_volume_attachment</code> resources instead. If you use
                        <code>ebs_block_device</code> on an <code>aws_instance</code>, Terraform will assume
                        management over the full set of non-root EBS block devices for the instance, treating
                        additional block devices as drift. For this reason, <code>ebs_block_device</code> cannot be
                        mixed with external <code>aws_ebs_volume</code> and <code>aws_volume_attachment</code>
                        resources for a given instance.
                     </div>

                     Each <code>ephemeral_block_device</code> block supports the following:
                     <ul>
                        <li><a name="device_name" href="#device_name"><code>device_name</code></a> - The name of the
                           block device to mount on the instance.</li>
                        <li><a name="no_device" href="#no_device"><code>no_device</code></a> - (Optional) Suppresses the
                           specified device included in the AMI's block device mapping.</li>
                        <li><a name="virtual_name" href="#virtual_name"><code>virtual_name</code></a> - (Optional)
                           Instance
                           Store Device Name (e.g., <code>ephemeral0</code>).</li>
                     </ul>
                     Each AWS Instance type has a different set of Instance Store block devices available for
                     attachment. AWS publishes
                     a list of which ephemeral devices are available on each type. The devices are always
                     identified by the <code>virtual_name</code> in the format <code>ephemeral{0..N}</code>.
                     <h3 id="enclave-options"><a name="enclave-options" class="anchor" href="#enclave-options">Enclave
                           Options</a></h3>
                     <div class="alert alert-info" role="alert">
                        <div class="alert-title"><i class="fa fa-info-circle"></i>NOTE:</div>
                        Changing <code>enabled</code> will cause the resource to be destroyed and re-created.
                     </div>

                     Enclave options apply to the instance at boot time.
                     The <code>enclave_options</code> block supports the following:
                     <ul>
                        <li><a name="enabled" href="#enabled"><code>enabled</code></a> - (Optional) Whether Nitro
                           Enclaves will be enabled on the instance. Defaults to <code>false</code>.</li>
                     </ul>
                     For more information, see the documentation on Nitro
                     Enclaves.
                     <h3 id="metadata-options"><a name="metadata-options" class="anchor"
                           href="#metadata-options">Metadata Options</a></h3>
                     Metadata options can be applied/modified to the EC2 Instance at any time.
                     The <code>metadata_options</code> block supports the following:
                     <ul>
                        <li><a target="_blank" name="http_endpoint" ><code>http_endpoint</code></a>
                           - (Optional) Whether the metadata service is available. Valid values include
                           <code>enabled</code> or <code>disabled</code>. Defaults to <code>enabled</code>.</li>
                        <li><a target="_blank" name="http_put_response_hop_limit"
                             ><code>http_put_response_hop_limit</code></a> -
                           (Optional) Desired HTTP PUT response hop limit for instance metadata requests. The larger the
                           number, the further instance metadata requests can travel. Valid values are integer from
                           <code>1</code> to <code>64</code>. Defaults to <code>1</code>.</li>
                        <li><a target="_blank" name="http_tokens" ><code>http_tokens</code></a> -
                           (Optional) Whether or not the metadata service requires session tokens, also referred to as
                           <em>Instance Metadata Service Version 2 (IMDSv2)</em>. Valid values include
                           <code>optional</code> or <code>required</code>. Defaults to <code>optional</code>.</li>
                        <li><a name="instance_metadata_tags"
                              href="#instance_metadata_tags"><code>instance_metadata_tags</code></a> - (optional)
                           Enables or disables access to instance tags from the instance metadata service. Valid values
                           include <code>enabled</code> or <code>disabled</code>. Defaults to <code>disabled</code>.
                        </li>
                     </ul>
                     For more information, see the documentation on the Instance
                     Metadata Service
                     <h3 id="network-interfaces"><a name="network-interfaces" class="anchor"
                           href="#network-interfaces">Network Interfaces</a></h3>
                     Each of the <code>network_interface</code> blocks attach a network interface to an EC2 Instance
                     during boot time. However, because the network interface is attached at boot-time,
                     replacing/modifying the network interface <strong>WILL</strong> trigger a recreation of the EC2
                     Instance. If you should need at any point to detach/modify/re-attach a network interface to the
                     instance, use the <code>aws_network_interface</code> or
                     <code>aws_network_interface_attachment</code> resources instead.
                     The <code>network_interface</code> configuration block <em>does</em>, however, allow users to
                     supply their own network interface to be used as the default network interface on an EC2
                     Instance, attached at <code>eth0</code>.
                     Each <code>network_interface</code> block supports the following:
                     <ul>
                        <li><a name="delete_on_termination"
                              href="#delete_on_termination"><code>delete_on_termination</code></a> - (Optional) Whether
                           or not to delete the network interface on instance termination. Defaults to
                           <code>false</code>. Currently, the only valid value is <code>false</code>, as this is only
                           supported when creating new network interfaces when launching an instance.</li>
                        <li><a name="device_index" href="#device_index"><code>device_index</code></a> - (Required)
                           Integer index of the network interface attachment. Limited by instance type.</li>
                        <li><a name="network_interface_id"
                              href="#network_interface_id"><code>network_interface_id</code></a> - (Required) ID of the
                           network interface to attach.</li>
                     </ul>
                     <h3 id="launch-template-specification"><a name="launch-template-specification" class="anchor"
                           href="#launch-template-specification">Launch Template Specification</a></h3>
                     <div class="alert alert-info" role="alert">
                        <div class="alert-title"><i class="fa fa-info-circle"></i>Note:</div>
                        Launch Template parameters will be used only once during instance creation. If you want to
                        update existing instance you need to change parameters
                        directly. Updating Launch Template specification will force a new instance.
                     </div>

                     Any other instance parameters that you specify will override the same parameters in the launch
                     template.
                     The <code>launch_template</code> block supports the following:
                     <ul>
                        <li><a name="id" href="#id"><code>id</code></a> - The ID of the launch template. Conflicts with
                           <code>name</code>.</li>
                        <li><a name="name" href="#name"><code>name</code></a> - The name of the launch template.
                           Conflicts with <code>id</code>.</li>
                        <li><a name="version" href="#version"><code>version</code></a> - Template version. Can be a
                           specific version number, <code>$Latest</code> or <code>$Default</code>. The default value is
                           <code>$Default</code>.</li>
                     </ul>
                     <h2 id="attributes-reference"><a name="attributes-reference" class="anchor"
                           href="#attributes-reference">Attributes Reference</a></h2>
                     In addition to all arguments above, the following attributes are exported:
                     <ul>
                        <li><a name="arn" href="#arn"><code>arn</code></a> - The ARN of the instance.</li>
                        <li><a name="capacity_reservation_specification"
                              href="#capacity_reservation_specification"><code>capacity_reservation_specification</code></a>
                           - Capacity reservation specification of the instance.</li>
                        <li><a name="instance_state" href="#instance_state"><code>instance_state</code></a> - The state
                           of the instance. One of: <code>pending</code>, <code>running</code>,
                           <code>shutting-down</code>, <code>terminated</code>, <code>stopping</code>,
                           <code>stopped</code>. See Instance
                           Lifecycle for more information.</li>
                        <li><a name="outpost_arn" href="#outpost_arn"><code>outpost_arn</code></a> - The ARN of the
                           Outpost the instance is assigned to.</li>
                        <li><a name="password_data" href="#password_data"><code>password_data</code></a> - Base-64
                           encoded encrypted password data for the instance. Useful for getting the administrator
                           password for instances running Microsoft Windows. This attribute is only exported if
                           <code>get_password_data</code> is true. Note that this encrypted value will be stored in the
                           state file, as with all exported attributes. See GetPasswordData
                           for more information.</li>
                        <li><a name="primary_network_interface_id"
                              href="#primary_network_interface_id"><code>primary_network_interface_id</code></a> - The
                           ID of the instance's primary network interface.</li>
                        <li><a name="private_dns" href="#private_dns"><code>private_dns</code></a> - The private DNS
                           name assigned to the instance. Can only be used inside the Amazon EC2, and only available if
                           you've enabled DNS hostnames for your VPC.</li>
                        <li><a name="public_dns" href="#public_dns"><code>public_dns</code></a> - The public DNS name
                           assigned to the instance. For EC2-VPC, this is only available if you've enabled DNS hostnames
                           for your VPC.</li>
                        <li><a name="public_ip" href="#public_ip"><code>public_ip</code></a> - The public IP address
                           assigned to the instance, if applicable. <strong>NOTE</strong>: If you are using an <a
                              href="eip"><code>aws_eip</code></a> with your instance, you should refer to the EIP's
                           address directly and not use <code>public_ip</code> as this field will change after the EIP
                           is attached.</li>
                        <li><a name="tags_all" href="#tags_all"><code>tags_all</code></a> - A map of tags assigned to
                           the resource, including those inherited from the provider <a
                              href="/docs/providers/aws/index#default_tags-configuration-block"><code>default_tags</code>
                              configuration block</a>.</li>
                     </ul>
                     For <code>ebs_block_device</code>, in addition to the arguments above, the following attribute
                     is exported:
                     <ul>
                        <li><a name="volume_id" href="#volume_id"><code>volume_id</code></a> - ID of the volume. For
                           example, the ID can be accessed like this,
                           <code>aws_instance.web.ebs_block_device.2.volume_id</code>.</li>
                     </ul>
                     For <code>root_block_device</code>, in addition to the arguments above, the following attributes
                     are exported:
                     <ul>
                        <li><a name="volume_id" href="#volume_id"><code>volume_id</code></a> - ID of the volume. For
                           example, the ID can be accessed like this,
                           <code>aws_instance.web.root_block_device.0.volume_id</code>.</li>
                        <li><a name="device_name" href="#device_name"><code>device_name</code></a> - Device name, e.g.,
                           <code>/dev/sdh</code> or <code>xvdh</code>.</li>
                     </ul>
                     <h2 id="import"><a name="import" class="anchor" href="#import">Import</a></h2>
                     Instances can be imported using the <code>id</code>, e.g.,
                     <pre
                        class="line-numbers"><blockquote>$ terraform import aws_instance.web i-12345678</blockquote></pre>
                  </div>

                  <!---->
               </div>


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