<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Azure Virtual Machine</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Azure Virtual Machine">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <link id="theme-style" rel="stylesheet" href="../../../../../../assets/css/theme.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../../templates/navbar.php';?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
        <div class="col-md-12 side-panel">
            <strong class="px-2" style="font-size: 1.125rem;"></strong><br><br>
               <ul>
                  <li><a href="#1._Sign_up_for_AWS">Step-1 Sign up for AWS </a></li>
                  <li><a href="#Step_2_-_Enter_the_Amazon_RDS_Console">Step 2 - Enter the Amazon RDS Console</a></li>
                  <li><a href="#Step_3_-_Create_an_Amazon_Aurora_cluster">Step 3 - Create an Amazon Aurora cluster</a></li>
                  <li><a href="#Step_4_-_Create_an_Aurora_Replica_for_High_Availability">Step 4 - Create an Aurora Replica for High Availability</a></li>
                  <li><a href="#Step_5_-_Set_up_the_database_cluster_for_failover">Step 5 - Set up the database cluster for failover</a></li>
                  <li><a href="#Step_6_-_Test_database_failover">Step 6 - Test database failover</a></li>
                  <li><a href="#7._Terminate_Resources">Step-7 Terminate Resources</a></li>                  
               </ul> 
        </div>
    </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">AURORA</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
            <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">AWS</a></li>
                <li class="breadcrumb-item"><a href="../../">RDS</a></li>
                <li class="breadcrumb-item active">Aurora</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
               <h2 id="quickstart-create-a-linux-virtual-machine-with-the-azure-cli">Create a high-availability database cluster with Amazon Aurora</h2>

       In this tutorial, you will learn how to configure an Amazon Aurora cluster to create a&nbsp;high-availability database. A&nbsp;high-availability database consists of compute nodes replicated across multiple availability zones to gain increased read scalability and failover protection.&nbsp;<br><br>
       Amazon Aurora is a relational database service with MySQL and PostgreSQL-compatible editions, which offers the performance and availability of enterprise databases at a fraction of the cost. For most production workloads, you will want to set up your database with high availability.<br><br>
       By default, an Amazon Aurora cluster has only one primary compute instance performing read/write operations. By adding one or more Aurora Replicas to the cluster, you gain read scalability and high availability for your database cluster. If the primary instance in the cluster fails, Aurora automatically promotes an existing Replica to be the new primary instance.<br><br>
       Generally, you’ll want to create Aurora replicas in a different Availability Zone (AZ) than the primary instance. This way, your database can quickly fail over to the Replica in the other AZ in the event of infrastructure problems in the primary AZ.<br><br>
       At the storage layer, Aurora always protects your data by replicating it six ways across three AZs. However, if you did not add Aurora Replicas to the cluster, you will have to wait for Aurora to create a new replacement primary instance for you when a failure is detected, which may take longer.<br><br>
       This tutorial will use Amazon Aurora with MySQL compatibility, but you can follow a similar process for the PostgreSQL edition. You will create an Aurora Cluster via the Amazon RDS Management Console, add an Aurora Replica, test a failover scenario, and then terminate the tutorial environment.<br><br>
       This tutorial is not within the free tier and will cost less than $1 provided you follow the steps in the tutorial and terminate resources at the end of the tutorial.<br>

        <h3 id="1._Sign_up_for_AWS" class="lb-txt-none lb-none-v-margin lb-h3 lb-title" > 1. Sign up for AWS</h3><br>
          You need an AWS account to follow this tutorial. Sign up for an account by selecting
                    <a class="lb-btn-p-primary" href="https://portal.aws.amazon.com/billing/signup?&amp;trk=el_a131L000005usSIQAY&amp;trkCampaign=pac_AWSsite_q2419_tutorial_aurora_cluster&amp;sc_channel=el&amp;sc_campaign=pac_q2-2019_AWS_Aurora_10mintutorial&amp;sc_outcome=PaaS_Digital_Marketing&amp;sc_geo=mult" target="_blank" rel="noopener" role="button"> <span> Sign up for AWS</span> </a><br><br>

        <h3 id="Step_2_-_Enter_the_Amazon_RDS_Console" class="lb-txt-none lb-none-v-margin lb-h3 lb-title" > Step 2 - Enter the Amazon RDS Console</h3><br>

         Amazon Aurora is a MySQL and PostgreSQL-compatible relational database built for the cloud. It is an engine of&nbsp;Amazon Relational Database Service. In this step, you will enter the Amazon RDS console.<br><br>

          Open the <a href="https://console.aws.amazon.com/console/home?&amp;trk=el_a131L000005usSIQAY&amp;trkCampaign=pac_AWSsite_q2419_tutorial_aurora_cluster&amp;sc_channel=el&amp;sc_campaign=pac_q2-2019_AWS_Aurora_10mintutorial&amp;sc_outcome=PaaS_Digital_Marketing&amp;sc_geo=mult" target="_blank">AWS Management Console</a>, so you can keep this step-by-step guide open. When the screen loads, enter your user name and password to get started. Select <b>Services</b> &gt; <b>RDS</b> to enter the RDS Management console.<br><br>

           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%201.53ef1cb7dc150f961e735012e900e8d63699c683.jpg" alt="HAD 1" title="HAD 1" class="cq-dd-image">
            </div>
           </figure><br><br>

         <figure class="lb-img">
          <div>
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%201.53ef1cb7dc150f961e735012e900e8d63699c683.jpg" alt="HAD 1" title="HAD 1" class="cq-dd-image">
          </div>
         </figure><br>

        <h3 id="Step_3_-_Create_an_Amazon_Aurora_cluster" class="lb-txt-none lb-none-v-margin lb-h3 lb-title" > Step 3 - Create an Amazon Aurora cluster</h3>

         In this step, you will create an Amazon Aurora cluster comprised of one Aurora database instance.<br><br>

          a. In the top right corner of the Amazon RDS console, select the <a href="https://docs.aws.amazon.com/AmazonRDS/latest/UserGuide/Concepts.RegionsAndAvailabilityZones.html?&amp;trk=el_a131L000005usSIQAY&amp;trkCampaign=pac_AWSsite_q2419_tutorial_aurora_cluster&amp;sc_channel=el&amp;sc_campaign=pac_q2-2019_AWS_Aurora_10mintutorial&amp;sc_outcome=PaaS_Digital_Marketing&amp;sc_geo=mult" target="_blank">Region</a> in which you want to create the DB instance, then select <b>Create database.</b><br> <br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%202.237e481fadb01d242c72d7ff534967575b653283.jpg" alt="HAD 2" title="HAD 2" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img">
          <div>
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%202.237e481fadb01d242c72d7ff534967575b653283.jpg" alt="HAD 2" title="HAD 2" class="cq-dd-image">
          </div>
         </figure><br><br>

          b. On the Select engine page, select <b>Standard Create</b>. For engine type, select&nbsp;<b>Amazon Aurora.</b>&nbsp;Then select the Edition you want.<br> <br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%203.6c8a03c14760bbabf508eef161f09480463579f9.jpg" alt="HAD 3" title="HAD 3" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%203.6c8a03c14760bbabf508eef161f09480463579f9.jpg" alt="HAD 3" title="HAD 3" class="cq-dd-image">
         </figure><br><br>
          c. Enter a name for your DB cluster identifier, Master username, and password.<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%204.1.f209fc4e4102a94fd3f58cf73f5d3d7973af4bc6.jpg" alt="HAD 4.1" title="HAD 4.1" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%204.1.f209fc4e4102a94fd3f58cf73f5d3d7973af4bc6.jpg" alt="HAD 4.1" title="HAD 4.1" class="cq-dd-image">
         </figure><br><br>
          d. You will now configure your DB. Leave the default settings for Capacity type and DB engine version. On<b> DB instance class</b>, you will select the compute and memory capacity of the DB instance. Amazon Aurora is charged per hour by instance type - for the purposes of this tutorial, select<b> db.t2.small</b> (1 vCPU, 2 GiB RAM) to keep your costs low.<br><br>
          Under Multi-AZ deployment, select <b>No</b>. While Amazon Aurora offers Multi-AZ deployment as a default option, this tutorial will walk you through creating replicas across the Availability Zone of your choice.<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%204.2.7452c1eb7a09e8603526d5222ea06767996186db.jpg" alt="HAD 4.2" title="HAD 4.2" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%204.2.7452c1eb7a09e8603526d5222ea06767996186db.jpg" alt="HAD 4.2" title="HAD 4.2" class="cq-dd-image">
         </figure><br><br>
          e.&nbsp; There are many advanced configuration options for Amazon RDS. For the purposes of this tutorial, simply disable the "Delete Protection" option and leave the rest of the default configurations. Finally, select <b>Create database</b>.<br><br>
          Depending on the DB instance class, it can take up to several minutes for the DB instance to become available.&nbsp;<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%205.0448789a12d4eb57e5a4fae67ca5e9d8112b2278.jpg" alt="HAD 5" title="HAD 5" class="cq-dd-image">
            </div>
           </figure><br><br>

         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%205.0448789a12d4eb57e5a4fae67ca5e9d8112b2278.jpg" alt="HAD 5" title="HAD 5" class="cq-dd-image">
         </figure><br><br>

          f. The new Aurora DB instance appears in the list of <b>Databases</b> on the RDS console. The DB instance will have a status of <i>creating</i> until the instance is ready for use and the status changes to <i>available</i>. If the status doesn't change within a few minutes, refresh the page.<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%206.5b8b52a5dcda6255481a95db521ebb8c79b38044.jpg" alt="HAD 6" title="HAD 6" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%206.5b8b52a5dcda6255481a95db521ebb8c79b38044.jpg" alt="HAD 6" title="HAD 6" class="cq-dd-image">
         </figure><br><br>

        <h3 id="Step_4_-_Create_an_Aurora_Replica_for_High_Availability" class="lb-txt-none lb-none-v-margin lb-h3 lb-title" > Step 4 - Create an Aurora Replica for High Availability</h3>
        Every Amazon Aurora instance comes with strong data protection by default. You can increase compute availability by adding Read Replicas in different&nbsp;Availability Zones (AZs) within an AWS region. Up to 15 Aurora Replicas can be distributed across the AZs that a DB cluster spans within a region.&nbsp;<br><br>
          a.&nbsp; In the Amazon RDS console, the primary (writer) instance in our Aurora cluster will be listed in <b>Databases</b>. Select the instance name and take note of the availability zone under <i>Networking</i>.<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%207.bd6afd35c7b4f54ccd9cba0547250d2cf87587b9.jpg" alt="HAD 7" title="HAD 7" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%207.bd6afd35c7b4f54ccd9cba0547250d2cf87587b9.jpg" alt="HAD 7" title="HAD 7" class="cq-dd-image">
         </figure><br><br>
          b. Select the radio button for the cluster and create an Aurora Replica by selecting <b>Actions</b> &gt; <b>Add reader.</b><br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%208.dcf4b4d4dbe51e6755c44d619b15cda1ea487fa8.jpg" alt="HAD 8" title="HAD 8" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%208.dcf4b4d4dbe51e6755c44d619b15cda1ea487fa8.jpg" alt="HAD 8" title="HAD 8" class="cq-dd-image">
         </figure><br><br>
          c. Select a different <b>Availability zone</b> from the primary or master db instance. For <b>Instance specifications</b>, select a similar instance class as the primary instance (in this example, <i>db.t2.small</i>), so we will not see any change in database performance in case of a failover. Under <b>Settings</b>, enter a unique name for the Aurora read replica db instance.<br><br>
           Select <b>Add reader</b>.<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%209.84d4d6103aa97f17560937fce9dfda1866f9f99f.jpg" alt="HAD 9" title="HAD 9" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%209.84d4d6103aa97f17560937fce9dfda1866f9f99f.jpg" alt="HAD 9" title="HAD 9" class="cq-dd-image">
         </figure><br><br>
          d. In the database list, we see that the new replica is being created with the role of <i>Reader</i>. Scroll to right until you see the <b>Multi-AZ </b>property, and you will now see <i>2 Zones</i>, indicating that the cluster is distributed across two Availability Zones (at the compute layer).&nbsp;<br><br>
          You have successfully achieved high availability on the compute layer. We will next test the db failover process.<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2011.fb159599bbec3f05c315963fa165a230cb02ad36.jpg" alt="HAD 11" title="HAD 11" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2011.fb159599bbec3f05c315963fa165a230cb02ad36.jpg" alt="HAD 11" title="HAD 11" class="cq-dd-image">
         </figure><br><br>
        <h3 id="Step_5_-_Set_up_the_database_cluster_for_failover" class="lb-txt-none lb-none-v-margin lb-h3 lb-title" > Step 5 - Set up the database cluster for failover</h3>
          To increase high availability, you can use Aurora Replicas as failover targets. If the primary instance fails, an Aurora Replica is promoted to the primary instance. Replicas are used for both read scalability and availability. In this step, you will set up the priority order of Aurora Replicas to be used for failover.<br><br>
         &nbsp;<br><br>
          a.&nbsp; Select the radio button next to your Reader DB instance and select <b>Modify</b>.<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2012.fd4f68b107157ec4847e851ca88d583f826d8698.jpg" alt="HAD 12" title="HAD 12" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2012.fd4f68b107157ec4847e851ca88d583f826d8698.jpg" alt="HAD 12" title="HAD 12" class="cq-dd-image">
         </figure><br><br>
          b.&nbsp; During a failover, Amazon RDS will promote the replica with the highest priority (starting with tier 0) to become the new primary instance. In this example, we do not have any existing replicas, so we will set the replica as the highest priority. Under <b>Failover</b>, select <i>Tier-0.</i><br><br>
           If there is contention between two or more replicas in the same priority tier, Amazon RDS will promote the replica that is the same size as the primary instance.<br><br>
          Select <b>Continue</b>, then <b>Modify DB instance.</b><br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2013.cb0213bfcdc4d2c6950fb4643c93d3d67b3cdc22.jpg" alt="HAD 13" title="HAD 13" class="cq-dd-image">
            </div>
           </figure><br><br>

         <figure class="lb-img" style="margin-top:60px;">
          <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2013.cb0213bfcdc4d2c6950fb4643c93d3d67b3cdc22.jpg" alt="HAD 13" title="HAD 13" class="cq-dd-image">
         </figure><br><br>

          <h3 id="Step_6_-_Test_database_failover" class="lb-txt-none lb-none-v-margin lb-h3 lb-title" > Step 6 - Test database failover</h3>
         a.&nbsp; Select the radio button on the target instance. Then select <b>Actions</b> &gt; <b>Failover</b>. This will cause the replica to be promoted as the new primary (or writer) instance and old primary (or writer) instance becomes a new read replica.<br><br>
           &nbsp;<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2014.3a3b3f59e196767835b08e8f1399e5e63de03f03.jpg" alt="HAD 14" title="HAD 14" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2014.3a3b3f59e196767835b08e8f1399e5e63de03f03.jpg" alt="HAD 14" title="HAD 14" class="cq-dd-image">
         </figure><br><br>
          b. Select <b>Failover.</b><br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2015.923c8abec415a7b2b07704f871cacd2743235558.jpg" alt="HAD 15" title="HAD 15" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2015.923c8abec415a7b2b07704f871cacd2743235558.jpg" alt="HAD 15" title="HAD 15" class="cq-dd-image">
         </figure><br><br>
          c. The time it takes for the failover to complete depends on the amount of database activity at the time of failover but is typically under 60 seconds. You can monitor failover process under<b> Log &amp; events </b>&gt; <b>Recent events.</b><br><br>
          The failover is transparent to the application by using endpoints. While the cluster and reader endpoints are used as DNS for the database, the instance connection will remain the same and automatically use the new db instance.&nbsp;<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2016.3b7ec922bfeac2f035e0e1b6d939c1acc35c03d7.jpg" alt="HAD 16" title="HAD 16" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2016.3b7ec922bfeac2f035e0e1b6d939c1acc35c03d7.jpg" alt="HAD 16" title="HAD 16" class="cq-dd-image">
         </figure><br><br>

                <h3 id="7._Terminate_Resources" class="lb-txt-none lb-none-v-margin lb-h3 lb-title" > Step-7 Terminate Resources</h3>
         In this step you will terminate your Aurora DB cluster environment.<br><br>
         <b>Important:</b> Terminating resources that are not actively being used reduces costs and is a best practice.<br><br>
          a. Select your Amazon Aurora cluster name for termination and click on cluster name to display a list of all cluster instances. Select the radio button on the reader role db instance and select <b>Actions</b> &gt; <b>Delete</b>.<br><br>
          &nbsp;<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2017.7c4ee23a6f395c88171413967578631c7cf64649.jpg" alt="HAD 17" title="HAD 17" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2017.7c4ee23a6f395c88171413967578631c7cf64649.jpg" alt="HAD 17" title="HAD 17" class="cq-dd-image">
         </figure><br><br>
          b. Enter&nbsp;<i>delete me</i> and select <b>Delete</b> to confirm. You will see the status now change to&nbsp;<i>Deleting</i>.<br><br>
          &nbsp;<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2018.678ba5787c87b0da41f889991372e9b3b1193752.jpg" alt="HAD 18" title="HAD 18" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img" style="margin-top:60px;">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2018.678ba5787c87b0da41f889991372e9b3b1193752.jpg" alt="HAD 18" title="HAD 18" class="cq-dd-image">
         </figure><br><br>
          c. Repeat steps 7a-b with the writer db instance. For this tutorial, do not create a final snapshot&nbsp;and select the acknowledgement. Enter&nbsp;<i>delete me</i>&nbsp;and select <b>Delete</b>. This step will delete the Aurora cluster, including storage and all automated db backups.<br><br>
           <figure class="lb-img">
            <div>
             <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2019.9c935e0de4f0590b78bf2b08b2e0354c55a17bab.jpg" alt="HAD 19" title="HAD 19" class="cq-dd-image">
            </div>
           </figure><br><br>
         <figure class="lb-img">
           <img src="//d1.awsstatic.com/screenshots/10-minute-tutorial-document-db/HA%20Steps%20June%202020/HAD%2019.9c935e0de4f0590b78bf2b08b2e0354c55a17bab.jpg" alt="HAD 19" title="HAD 19" class="cq-dd-image">
         </figure><br><br>



            </div>
        </div>
        <?php require "../../../../../../templates/footer_outer.php"?>

    </div>

    <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script defer src="../../../../../../assets/fontawesome/js/all.min.js"></script><!-- footer social icons -->
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