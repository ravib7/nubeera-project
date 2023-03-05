<!DOCTYPE html>
<html lang="en">

<head>
	<title>NubeEra databricks in Azure</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="NubeEra databricks in Azure">

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
	<?php require '../../../../../../templates/navbar.php'; ?>

	<div id="modal-sidepanel">

		<div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
			<button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
			<div class="col-md-12 side-panel">
			Azure Databricks				<ul>
					<li><a href="index.php">What is Azure Databricks?</a></li>
					<li><a href="databricks-workspace-portal.php">Quickstart: Run a Spark job on Azure Databricks Workspace using the Azure portal</a></li>
					<li><a href="databricks-extract-load-sql-datawarehouse.php">Tutorial: Extract, transform, and load data by using Azure Databricks</a></li>
					<li><a href="versioning.php">Table versioning</a></li>
					<li> <a href="azure_databricks_architecture_overview.php">Azure Databricks Architecture Overview</a></li>
                    <li><a href="databricks_datascience_and_engineering.php">Databricks Data Science & Engineering Concepts</a></li>
                    <li><a href="cluster_configuration.php"> Cluster Configuration</li>
				</ul>
			</div>
		</div>

	</div>
	<span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

	<div class="content-box" id="content-box">
		<div class="body-content">
			<h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Azure Databricks</h1>
			<ol class="breadcrumb mx-5 mt-3 px-0">
			<li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Databricks</li>
			</ol>
			<div class="px-5 pb-5 pt-0 body-text">
				<h2 id="tutorial-extract-transform-and-load-data-by-using-azure-databricks">Tutorial: Extract, transform, and load data by using Azure Databricks</h2>
				<nav id="center-doc-outline" class="doc-outline is-hidden-desktop" data-bi-name="intopic toc" role="navigation" aria-label="Article Outline">
					<h3>In this article</h3>
					<ol>
						<li><a href="#prerequisites">Prerequisites</a></li>
						<li><a href="#gather-the-information-that-you-need">Gather the information that you need</a></li>
						<li><a href="#create-an-azure-databricks-service">Create an Azure Databricks service</a></li>
						<li><a href="#create-a-spark-cluster-in-azure-databricks">Create a Spark cluster in Azure Databricks</a></li>
						<li><a href="#create-a-file-system-in-the-azure-data-lake-storage-gen2-account">Create a file system in the Azure Data Lake Storage Gen2 account</a></li>
						<li><a href="#ingest-sample-data-into-the-azure-data-lake-storage-gen2-account">Ingest sample data into the Azure Data Lake Storage Gen2 account</a></li>
						<li><a href="#extract-data-from-the-azure-data-lake-storage-gen2-account">Extract data from the Azure Data Lake Storage Gen2 account</a></li>
						<li><a href="#transform-data-in-azure-databricks">Transform data in Azure Databricks</a></li>
						<li><a href="#load-data-into-azure-synapse">Load data into Azure Synapse</a></li>
						<li><a href="#clean-up-resources">Clean up resources</a></li>
						<li><a href="#next-steps">Next steps</a></li>
					</ol>
				</nav>
				<!-- <content> -->
				In this tutorial, you perform an ETL (extract, transform, and load data) operation by using Azure Databricks. You extract data from Azure Data Lake Storage Gen2 into Azure Databricks, run transformations on the data in Azure Databricks, and load the transformed data into Azure Synapse Analytics.
				The steps in this tutorial use the Azure Synapse connector for Azure Databricks to transfer data to Azure Databricks. This connector, in turn, uses Azure Blob Storage as temporary storage for the data being transferred between an Azure Databricks cluster and Azure Synapse.
				The following illustration shows the application flow:<br><br>
				<img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/databricks-extract-load-sql-data-warehouse/databricks-extract-transform-load-sql-datawarehouse.png" alt="Azure Databricks with Data Lake Store and Azure Synapse" title="Azure Databricks with Data Lake Store and Azure Synapse" data-linktype="relative-path">
				<br><br>This tutorial covers the following tasks:
				<div class="checklist">
					<ul>
						<li>Create an Azure Databricks service.</li>
						<li>Create a Spark cluster in Azure Databricks.</li>
						<li>Create a file system in the Data Lake Storage Gen2 account.</li>
						<li>Upload sample data to the Azure Data Lake Storage Gen2 account.</li>
						<li>Create a service principal.</li>
						<li>Extract data from the Azure Data Lake Storage Gen2 account.</li>
						<li>Transform data in Azure Databricks.</li>
						<li>Load data into Azure Synapse.</li>
					</ul>
				</div>
				If you don't have an Azure subscription, create a free account before you begin.
				<div class="alert is-info">
					Note:<br>
					This tutorial cannot be carried out using <strong>Azure Free Trial Subscription</strong>.
					If you have a free account, go to your profile and change your subscription to <strong>pay-as-you-go</strong>. For more information, see Azure free account. Then, remove the spending limit, and request a quota increase for vCPUs in your region. When you create your Azure Databricks workspace, you can select the <strong>Trial (Premium - 14-Days Free DBUs)</strong> pricing tier to give the workspace access to free Premium Azure Databricks DBUs for 14 days.
				</div>
				<h3 id="prerequisites" class="heading-anchor"><a class="anchor-link docon docon-link" href="#prerequisites" aria-labelledby="prerequisites"></a>Prerequisites</h3>
				Complete these tasks before you begin this tutorial:
				<ul>
					<li>Create an Azure Synapse, create a server-level firewall rule, and connect to the server as a server admin. See Quickstart: Create and query a Synapse SQL pool using the Azure portal.
					</li>
					<li>Create a master key for the Azure Synapse. See Create a database master key.
					</li>
					<li>Create an Azure Blob storage account, and a container within it. Also, retrieve the access key to access the storage account. See Quickstart: Upload, download, and list blobs with the Azure portal.
					</li>
					<li>Create an Azure Data Lake Storage Gen2 storage account. See Quickstart: Create an Azure Data Lake Storage Gen2 storage account.
					</li>
					<li>Create a service principal. See How to: Use the portal to create an Azure AD application and service principal that can access resources.
						There's a couple of specific things that you'll have to do as you perform the steps in that article.
						<ul>
							<li>When performing the steps in the Assign the application to a role section of the article, make sure to assign the <strong>Storage Blob Data Contributor</strong> role to the service principal in the scope of the Data Lake Storage Gen2 account. If you assign the role to the parent resource group or subscription, you'll receive permissions-related errors until those role assignments propagate to the storage account.
								If you'd prefer to use an access control list (ACL) to associate the service principal with a specific file or directory, reference Access control in Azure Data Lake Storage Gen2.
							</li>
							<li>When performing the steps in the Get values for signing in section of the article, paste the tenant ID, app ID, and secret values into a text file.
							</li>
						</ul>
					</li>
					<li>Sign in to the <a href="https://portal.azure.com/" data-linktype="external">Azure portal</a>.
					</li>
				</ul>
				<h3 id="gather-the-information-that-you-need" class="heading-anchor"><a class="anchor-link docon docon-link" href="#gather-the-information-that-you-need" aria-labelledby="gather-the-information-that-you-need"></a>Gather the information that you need</h3>
				Make sure that you complete the prerequisites of this tutorial.
				Before you begin, you should have these items of information:
				✔️ The database name, database server name, user name, and password of your Azure Synapse.
				✔️ The access key of your blob storage account.
				✔️ The name of your Data Lake Storage Gen2 storage account.
				✔️ The tenant ID of your subscription.
				✔️ The application ID of the app that you registered with Azure Active Directory (Azure AD).
				✔️ The authentication key for the app that you registered with Azure AD.
				<h3 id="create-an-azure-databricks-service" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-an-azure-databricks-service" aria-labelledby="create-an-azure-databricks-service"></a>Create an Azure Databricks service</h3>
				In this section, you create an Azure Databricks service by using the Azure portal.
				<ol>
					<li>From the Azure portal menu, select <strong>Create a resource</strong>.
						<img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/databricks-extract-load-sql-data-warehouse/azure-databricks-on-portal.png" alt="Create a resource on Azure portal" data-linktype="relative-path">
						<br><br>Then, select <strong>Analytics</strong> &gt; <strong>Azure Databricks</strong>.<br><br>
						<img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/databricks-extract-load-sql-data-warehouse/azure-databricks-resource-create.png" alt="Create Azure Databricks on Azure portal" data-linktype="relative-path">
					</li><br><br>
					<li>Under <strong>Azure Databricks Service</strong>, provide the following values to create a Databricks service:<br><br>
						<div class="table-scroll-wrapper has-inner-focus" tabindex="0" role="group" aria-label="Horizontally scrollable data">
							<table class="table">
								<caption class="visually-hidden">Table 1</caption>
								<thead>
									<tr>
										<th>Property</th>
										<th>Description</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><strong>Workspace name</strong></td>
										<td>Provide a name for your Databricks workspace.</td>
									</tr>
									<tr>
										<td><strong>Subscription</strong></td>
										<td>From the drop-down, select your Azure subscription.</td>
									</tr>
									<tr>
										<td><strong>Resource group</strong></td>
										<td>Specify whether you want to create a new resource group or use an existing one. A resource group is a container that holds related resources for an Azure solution. For more information, see Azure Resource Group overview.</td>
									</tr>
									<tr>
										<td><strong>Location</strong></td>
										<td>Select <strong>West US 2</strong>. For other available regions, see <a href="https://azure.microsoft.com/regions/services/" data-linktype="external">Azure services available by region</a>.</td>
									</tr>
									<tr>
										<td><strong>Pricing Tier</strong></td>
										<td>Select <strong>Standard</strong>.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</li>
					<li>The account creation takes a few minutes. To monitor the operation status, view the progress bar at the top.
					</li>
					<li>Select <strong>Pin to dashboard</strong> and then select <strong>Create</strong>.
					</li>
				</ol>
				<h3 id="create-a-spark-cluster-in-azure-databricks" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-spark-cluster-in-azure-databricks" aria-labelledby="create-a-spark-cluster-in-azure-databricks"></a>Create a Spark cluster in Azure Databricks</h3>
				<ol>
					<li>In the Azure portal, go to the Databricks service that you created, and select <strong>Launch Workspace</strong>.
					</li>
					<li>You're redirected to the Azure Databricks portal. From the portal, select <strong>Cluster</strong>.
						<br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/databricks-extract-load-sql-data-warehouse/databricks-on-azure.png" alt="Databricks on Azure" title="Databricks on Azure" data-linktype="relative-path">
					</li><br><br>
					<li>In the <strong>New cluster</strong> page, provide the values to create a cluster.<br><br>
						<img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/databricks-extract-load-sql-data-warehouse/create-databricks-spark-cluster.png" alt="Create Databricks Spark cluster on Azure" title="Create Databricks Spark cluster on Azure" data-linktype="relative-path">
					</li><br><br>
					<li>Fill in values for the following fields, and accept the default values for the other fields:
						<ul>
							<li>Enter a name for the cluster.
							</li>
							<li>Make sure you select the <strong>Terminate after __ minutes of inactivity</strong> check box. If the cluster isn't being used, provide a duration (in minutes) to terminate the cluster.
							</li>
							<li>Select <strong>Create cluster</strong>. After the cluster is running, you can attach notebooks to the cluster and run Spark jobs.
							</li>
						</ul>
					</li>
				</ol>
				<h3 id="create-a-file-system-in-the-azure-data-lake-storage-gen2-account" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-file-system-in-the-azure-data-lake-storage-gen2-account" aria-labelledby="create-a-file-system-in-the-azure-data-lake-storage-gen2-account"></a>Create a file system in the Azure Data Lake Storage Gen2 account</h3>
				In this section, you create a notebook in Azure Databricks workspace and then run code snippets to configure the storage account
				<ol>
					<li>In the <a href="https://portal.azure.com" data-linktype="external">Azure portal</a>, go to the Azure Databricks service that you created, and select <strong>Launch Workspace</strong>.
					</li>
					<li>On the left, select <strong>Workspace</strong>. From the <strong>Workspace</strong> drop-down, select <strong>Create</strong> &gt; <strong>Notebook</strong>.
						<br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/databricks-extract-load-sql-data-warehouse/databricks-create-notebook.png" alt="Create a notebook in Databricks" title="Create notebook in Databricks" data-linktype="relative-path"><br><br>
					</li>
					<li>In the <strong>Create Notebook</strong> dialog box, enter a name for the notebook. Select <strong>Scala</strong> as the language, and then select the Spark cluster that you created earlier.
						<br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/databricks-extract-load-sql-data-warehouse/databricks-notebook-details.png" alt="Provide details for a notebook in Databricks" title="Provide details for a notebook in Databricks" data-linktype="relative-path"><br><br>
					</li>
					<li>Select <strong>Create</strong>.
					</li>
					<li>The following code block sets default service principal credentials for any ADLS Gen 2 account accessed in the Spark session. The second code block appends the account name to the setting to specify credentials for a specific ADLS Gen 2 account. Copy and paste either code block into the first cell of your Azure Databricks notebook.
						<strong>Session configuration</strong>
						<div class="codeHeader code-title" id="code-try-0" data-bi-name="code-header">
							<span class="language">Scala</span>
						</div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-scala" data-author-content="val appID = &quot;<appID>&quot;
val secret = &quot;<secret>&quot;
val tenantID = &quot;<tenant-id>&quot;

spark.conf.set(&quot;fs.azure.account.auth.type&quot;, &quot;OAuth&quot;)
spark.conf.set(&quot;fs.azure.account.oauth.provider.type&quot;, &quot;org.apache.hadoop.fs.azurebfs.oauth2.ClientCredsTokenProvider&quot;)
spark.conf.set(&quot;fs.azure.account.oauth2.client.id&quot;, &quot;<appID>&quot;)
spark.conf.set(&quot;fs.azure.account.oauth2.client.secret&quot;, &quot;<secret>&quot;)
spark.conf.set(&quot;fs.azure.account.oauth2.client.endpoint&quot;, &quot;https://login.microsoftonline.com/<tenant-id>/oauth2/token&quot;)
spark.conf.set(&quot;fs.azure.createRemoteFileSystemDuringInitialization&quot;, &quot;true&quot;)
"><span><span class="hljs-keyword">val</span> appID = <span class="hljs-string">"&lt;appID&gt;"</span>
<span class="hljs-keyword">val</span> secret = <span class="hljs-string">"&lt;secret&gt;"</span>
<span class="hljs-keyword">val</span> tenantID = <span class="hljs-string">"&lt;tenant-id&gt;"</span>

spark.conf.set(<span class="hljs-string">"fs.azure.account.auth.type"</span>, <span class="hljs-string">"OAuth"</span>)
spark.conf.set(<span class="hljs-string">"fs.azure.account.oauth.provider.type"</span>, <span class="hljs-string">"org.apache.hadoop.fs.azurebfs.oauth2.ClientCredsTokenProvider"</span>)
spark.conf.set(<span class="hljs-string">"fs.azure.account.oauth2.client.id"</span>, <span class="hljs-string">"&lt;appID&gt;"</span>)
spark.conf.set(<span class="hljs-string">"fs.azure.account.oauth2.client.secret"</span>, <span class="hljs-string">"&lt;secret&gt;"</span>)
spark.conf.set(<span class="hljs-string">"fs.azure.account.oauth2.client.endpoint"</span>, <span class="hljs-string">"https://login.microsoftonline.com/&lt;tenant-id&gt;/oauth2/token"</span>)
spark.conf.set(<span class="hljs-string">"fs.azure.createRemoteFileSystemDuringInitialization"</span>, <span class="hljs-string">"true"</span>)
</span></blockquote></pre><br>
						<strong>Account configuration</strong>
						<div class="codeHeader code-title" id="code-try-1" data-bi-name="code-header"><span class="language">Scala</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-scala" data-author-content="val storageAccountName = &quot;<storage-account-name>&quot;
val appID = &quot;<app-id>&quot;
val secret = &quot;<secret>&quot;
val fileSystemName = &quot;<file-system-name>&quot;
val tenantID = &quot;<tenant-id>&quot;

spark.conf.set(&quot;fs.azure.account.auth.type.&quot; + storageAccountName + &quot;.dfs.core.windows.net&quot;, &quot;OAuth&quot;)
spark.conf.set(&quot;fs.azure.account.oauth.provider.type.&quot; + storageAccountName + &quot;.dfs.core.windows.net&quot;, &quot;org.apache.hadoop.fs.azurebfs.oauth2.ClientCredsTokenProvider&quot;)
spark.conf.set(&quot;fs.azure.account.oauth2.client.id.&quot; + storageAccountName + &quot;.dfs.core.windows.net&quot;, &quot;&quot; + appID + &quot;&quot;)
spark.conf.set(&quot;fs.azure.account.oauth2.client.secret.&quot; + storageAccountName + &quot;.dfs.core.windows.net&quot;, &quot;&quot; + secret + &quot;&quot;)
spark.conf.set(&quot;fs.azure.account.oauth2.client.endpoint.&quot; + storageAccountName + &quot;.dfs.core.windows.net&quot;, &quot;https://login.microsoftonline.com/&quot; + tenantID + &quot;/oauth2/token&quot;)
spark.conf.set(&quot;fs.azure.createRemoteFileSystemDuringInitialization&quot;, &quot;true&quot;)
dbutils.fs.ls(&quot;abfss://&quot; + fileSystemName  + &quot;@&quot; + storageAccountName + &quot;.dfs.core.windows.net/&quot;)
spark.conf.set(&quot;fs.azure.createRemoteFileSystemDuringInitialization&quot;, &quot;false&quot;)
"><span><span class="hljs-keyword">val</span> storageAccountName = <span class="hljs-string">"&lt;storage-account-name&gt;"</span>
<span class="hljs-keyword">val</span> appID = <span class="hljs-string">"&lt;app-id&gt;"</span>
<span class="hljs-keyword">val</span> secret = <span class="hljs-string">"&lt;secret&gt;"</span>
<span class="hljs-keyword">val</span> fileSystemName = <span class="hljs-string">"&lt;file-system-name&gt;"</span>
<span class="hljs-keyword">val</span> tenantID = <span class="hljs-string">"&lt;tenant-id&gt;"</span>

spark.conf.set(<span class="hljs-string">"fs.azure.account.auth.type."</span> + storageAccountName + <span class="hljs-string">".dfs.core.windows.net"</span>, <span class="hljs-string">"OAuth"</span>)
spark.conf.set(<span class="hljs-string">"fs.azure.account.oauth.provider.type."</span> + storageAccountName + <span class="hljs-string">".dfs.core.windows.net"</span>, <span class="hljs-string">"org.apache.hadoop.fs.azurebfs.oauth2.ClientCredsTokenProvider"</span>)
spark.conf.set(<span class="hljs-string">"fs.azure.account.oauth2.client.id."</span> + storageAccountName + <span class="hljs-string">".dfs.core.windows.net"</span>, <span class="hljs-string">""</span> + appID + <span class="hljs-string">""</span>)
spark.conf.set(<span class="hljs-string">"fs.azure.account.oauth2.client.secret."</span> + storageAccountName + <span class="hljs-string">".dfs.core.windows.net"</span>, <span class="hljs-string">""</span> + secret + <span class="hljs-string">""</span>)
spark.conf.set(<span class="hljs-string">"fs.azure.account.oauth2.client.endpoint."</span> + storageAccountName + <span class="hljs-string">".dfs.core.windows.net"</span>, <span class="hljs-string">"https://login.microsoftonline.com/"</span> + tenantID + <span class="hljs-string">"/oauth2/token"</span>)
spark.conf.set(<span class="hljs-string">"fs.azure.createRemoteFileSystemDuringInitialization"</span>, <span class="hljs-string">"true"</span>)
dbutils.fs.ls(<span class="hljs-string">"abfss://"</span> + fileSystemName  + <span class="hljs-string">"@"</span> + storageAccountName + <span class="hljs-string">".dfs.core.windows.net/"</span>)
spark.conf.set(<span class="hljs-string">"fs.azure.createRemoteFileSystemDuringInitialization"</span>, <span class="hljs-string">"false"</span>)
</span></blockquote></pre><br>
					</li>
					<li>In this code block, replace the <code>&lt;app-id&gt;</code>, <code>&lt;secret&gt;</code>, <code>&lt;tenant-id&gt;</code>, and <code>&lt;storage-account-name&gt;</code> placeholder values in this code block with the values that you collected while completing the prerequisites of this tutorial. Replace the <code>&lt;file-system-name&gt;</code> placeholder value with whatever name you want to give the file system.
						<ul>
							<li>The <code>&lt;app-id&gt;</code>, and <code>&lt;secret&gt;</code> are from the app that you registered with active directory as part of creating a service principal.
							</li>
							<li>The <code>&lt;tenant-id&gt;</code> is from your subscription.
							</li>
							<li>The <code>&lt;storage-account-name&gt;</code> is the name of your Azure Data Lake Storage Gen2 storage account.
							</li>
						</ul>
					</li>
					<li>Press the <strong>SHIFT + ENTER</strong> keys to run the code in this block.
					</li>
				</ol>
				<h3 id="ingest-sample-data-into-the-azure-data-lake-storage-gen2-account" class="heading-anchor"><a class="anchor-link docon docon-link" href="#ingest-sample-data-into-the-azure-data-lake-storage-gen2-account" aria-labelledby="ingest-sample-data-into-the-azure-data-lake-storage-gen2-account"></a>Ingest sample data into the Azure Data Lake Storage Gen2 account</h3>
				Before you begin with this section, you must complete the following prerequisites:
				Enter the following code into a notebook cell:
				<div class="codeHeader code-title" id="code-try-2" data-bi-name="code-header">
					<span class="language">Bash</span>
				</div>
				<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-bash" data-author-content="%sh wget -P /tmp https://raw.githubusercontent.com/Azure/usql/master/Examples/Samples/Data/json/radiowebsite/small_radio_json.json
"><span>%sh wget -P /tmp https://raw.githubusercontent.com/Azure/usql/master/Examples/Samples/Data/json/radiowebsite/small_radio_json.json
</span></blockquote></pre><br>
				In the cell, press <strong>SHIFT + ENTER</strong> to run the code.
				Now in a new cell below this one, enter the following code, and replace the values that appear in brackets with the same values you used earlier:
				<div class="codeHeader code-title" id="code-try-3" data-bi-name="code-header">
					<span class="language">Python</span>
				</div>
				<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-python" data-author-content="dbutils.fs.cp(&quot;file:///tmp/small_radio_json.json&quot;, &quot;abfss://&quot; + fileSystemName + &quot;@&quot; + storageAccountName + &quot;.dfs.core.windows.net/&quot;)
"><span>dbutils.fs.cp(<span class="hljs-string">"file:///tmp/small_radio_json.json"</span>, <span class="hljs-string">"abfss://"</span> + fileSystemName + <span class="hljs-string">"@"</span> + storageAccountName + <span class="hljs-string">".dfs.core.windows.net/"</span>)
</span></blockquote></pre><br>
				In the cell, press <strong>SHIFT + ENTER</strong> to run the code.
				<h3 id="extract-data-from-the-azure-data-lake-storage-gen2-account" class="heading-anchor"><a class="anchor-link docon docon-link" href="#extract-data-from-the-azure-data-lake-storage-gen2-account" aria-labelledby="extract-data-from-the-azure-data-lake-storage-gen2-account"></a>Extract data from the Azure Data Lake Storage Gen2 account</h3>
				<ol>
					<li>You can now load the sample json file as a data frame in Azure Databricks. Paste the following code in a new cell. Replace the placeholders shown in brackets with your values.
						<div class="codeHeader code-title" id="code-try-4" data-bi-name="code-header"><span class="language">Scala</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-scala" data-author-content="val df = spark.read.json(&quot;abfss://&quot; + fileSystemName + &quot;@&quot; + storageAccountName + &quot;.dfs.core.windows.net/small_radio_json.json&quot;)
"><span><span class="hljs-keyword">val</span> df = spark.read.json(<span class="hljs-string">"abfss://"</span> + fileSystemName + <span class="hljs-string">"@"</span> + storageAccountName + <span class="hljs-string">".dfs.core.windows.net/small_radio_json.json"</span>)
</span></blockquote></pre><br>
					</li>
					<li>Press the <strong>SHIFT + ENTER</strong> keys to run the code in this block.
					</li>
					<li>Run the following code to see the contents of the data frame:
						<div class="codeHeader code-title" id="code-try-5" data-bi-name="code-header"><span class="language">Scala</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-scala" data-author-content="df.show()
"><span>df.show()
</span></blockquote></pre><br>
						You see an output similar to the following snippet:
						<div class="codeHeader code-title" id="code-try-6" data-bi-name="code-header"><span class="language">Output</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-output" data-author-content="+---------------------+---------+---------+------+-------------+----------+---------+-------+--------------------+------+--------+-------------+---------+--------------------+------+-------------+------+
|               artist|     auth|firstName|gender|itemInSession|  lastName|   length|  level|            location|method|    page| registration|sessionId|                song|status|           ts|userId|
+---------------------+---------+---------+------+-------------+----------+---------+-------+--------------------+------+--------+-------------+---------+--------------------+------+-------------+------+
| El Arrebato         |Logged In| Annalyse|     F|            2|Montgomery|234.57914| free  |  Killeen-Temple, TX|   PUT|NextSong|1384448062332|     1879|Quiero Quererte Q...|   200|1409318650332|   309|
| Creedence Clearwa...|Logged In|   Dylann|     M|            9|    Thomas|340.87138| paid  |       Anchorage, AK|   PUT|NextSong|1400723739332|       10|        Born To Move|   200|1409318653332|    11|
| Gorillaz            |Logged In|     Liam|     M|           11|     Watts|246.17751| paid  |New York-Newark-J...|   PUT|NextSong|1406279422332|     2047|                DARE|   200|1409318685332|   201|
...
...
">+---------------------+---------+---------+------+-------------+----------+---------+-------+--------------------+------+--------+-------------+---------+--------------------+------+-------------+------+
|               artist|     auth|firstName|gender|itemInSession|  lastName|   length|  level|            location|method|    page| registration|sessionId|                song|status|           ts|userId|
+---------------------+---------+---------+------+-------------+----------+---------+-------+--------------------+------+--------+-------------+---------+--------------------+------+-------------+------+
| El Arrebato         |Logged In| Annalyse|     F|            2|Montgomery|234.57914| free  |  Killeen-Temple, TX|   PUT|NextSong|1384448062332|     1879|Quiero Quererte Q...|   200|1409318650332|   309|
| Creedence Clearwa...|Logged In|   Dylann|     M|            9|    Thomas|340.87138| paid  |       Anchorage, AK|   PUT|NextSong|1400723739332|       10|        Born To Move|   200|1409318653332|    11|
| Gorillaz            |Logged In|     Liam|     M|           11|     Watts|246.17751| paid  |New York-Newark-J...|   PUT|NextSong|1406279422332|     2047|                DARE|   200|1409318685332|   201|
...
...
</blockquote></pre><br>
						You have now extracted the data from Azure Data Lake Storage Gen2 into Azure Databricks.
					</li>
				</ol>
				<h3 id="transform-data-in-azure-databricks" class="heading-anchor"><a class="anchor-link docon docon-link" href="#transform-data-in-azure-databricks" aria-labelledby="transform-data-in-azure-databricks"></a>Transform data in Azure Databricks</h3>
				The raw sample data <strong>small_radio_json.json</strong> file captures the audience for a radio station and has a variety of columns. In this section, you transform the data to only retrieve specific columns from the dataset.
				<ol>
					<li>First, retrieve only the columns <strong>firstName</strong>, <strong>lastName</strong>, <strong>gender</strong>, <strong>location</strong>, and <strong>level</strong> from the dataframe that you created.
						<div class="codeHeader code-title" id="code-try-7" data-bi-name="code-header"><span class="language">Scala</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-scala" data-author-content="val specificColumnsDf = df.select(&quot;firstname&quot;, &quot;lastname&quot;, &quot;gender&quot;, &quot;location&quot;, &quot;level&quot;)
specificColumnsDf.show()
"><span><span class="hljs-keyword">val</span> specificColumnsDf = df.select(<span class="hljs-string">"firstname"</span>, <span class="hljs-string">"lastname"</span>, <span class="hljs-string">"gender"</span>, <span class="hljs-string">"location"</span>, <span class="hljs-string">"level"</span>)
specificColumnsDf.show()
</span></blockquote></pre><br>
						You receive output as shown in the following snippet:
						<div class="codeHeader code-title" id="code-try-8" data-bi-name="code-header"><span class="language">Output</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-output" data-author-content="+---------+----------+------+--------------------+-----+
|firstname|  lastname|gender|            location|level|
+---------+----------+------+--------------------+-----+
| Annalyse|Montgomery|     F|  Killeen-Temple, TX| free|
|   Dylann|    Thomas|     M|       Anchorage, AK| paid|
|     Liam|     Watts|     M|New York-Newark-J...| paid|
|     Tess|  Townsend|     F|Nashville-Davidso...| free|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...| free|
|     Alan|     Morse|     M|Chicago-Napervill...| paid|
|Gabriella|   Shelton|     F|San Jose-Sunnyval...| free|
|   Elijah|  Williams|     M|Detroit-Warren-De...| paid|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...| free|
|     Tess|  Townsend|     F|Nashville-Davidso...| free|
|     Alan|     Morse|     M|Chicago-Napervill...| paid|
|     Liam|     Watts|     M|New York-Newark-J...| paid|
|     Liam|     Watts|     M|New York-Newark-J...| paid|
|   Dylann|    Thomas|     M|       Anchorage, AK| paid|
|     Alan|     Morse|     M|Chicago-Napervill...| paid|
|   Elijah|  Williams|     M|Detroit-Warren-De...| paid|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...| free|
|     Alan|     Morse|     M|Chicago-Napervill...| paid|
|   Dylann|    Thomas|     M|       Anchorage, AK| paid|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...| free|
+---------+----------+------+--------------------+-----+
">+---------+----------+------+--------------------+-----+
|firstname|  lastname|gender|            location|level|
+---------+----------+------+--------------------+-----+
| Annalyse|Montgomery|     F|  Killeen-Temple, TX| free|
|   Dylann|    Thomas|     M|       Anchorage, AK| paid|
|     Liam|     Watts|     M|New York-Newark-J...| paid|
|     Tess|  Townsend|     F|Nashville-Davidso...| free|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...| free|
|     Alan|     Morse|     M|Chicago-Napervill...| paid|
|Gabriella|   Shelton|     F|San Jose-Sunnyval...| free|
|   Elijah|  Williams|     M|Detroit-Warren-De...| paid|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...| free|
|     Tess|  Townsend|     F|Nashville-Davidso...| free|
|     Alan|     Morse|     M|Chicago-Napervill...| paid|
|     Liam|     Watts|     M|New York-Newark-J...| paid|
|     Liam|     Watts|     M|New York-Newark-J...| paid|
|   Dylann|    Thomas|     M|       Anchorage, AK| paid|
|     Alan|     Morse|     M|Chicago-Napervill...| paid|
|   Elijah|  Williams|     M|Detroit-Warren-De...| paid|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...| free|
|     Alan|     Morse|     M|Chicago-Napervill...| paid|
|   Dylann|    Thomas|     M|       Anchorage, AK| paid|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...| free|
+---------+----------+------+--------------------+-----+
</blockquote></pre><br>
					</li>
					<li>You can further transform this data to rename the column <strong>level</strong> to <strong>subscription_type</strong>.
						<div class="codeHeader code-title" id="code-try-9" data-bi-name="code-header"><span class="language">Scala</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-scala" data-author-content="val renamedColumnsDF = specificColumnsDf.withColumnRenamed(&quot;level&quot;, &quot;subscription_type&quot;)
renamedColumnsDF.show()
"><span><span class="hljs-keyword">val</span> renamedColumnsDF = specificColumnsDf.withColumnRenamed(<span class="hljs-string">"level"</span>, <span class="hljs-string">"subscription_type"</span>)
renamedColumnsDF.show()
</span></blockquote></pre><br>
						You receive output as shown in the following snippet.
						<div class="codeHeader code-title" id="code-try-10" data-bi-name="code-header"><span class="language">Output</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-output" data-author-content="+---------+----------+------+--------------------+-----------------+
|firstname|  lastname|gender|            location|subscription_type|
+---------+----------+------+--------------------+-----------------+
| Annalyse|Montgomery|     F|  Killeen-Temple, TX|             free|
|   Dylann|    Thomas|     M|       Anchorage, AK|             paid|
|     Liam|     Watts|     M|New York-Newark-J...|             paid|
|     Tess|  Townsend|     F|Nashville-Davidso...|             free|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...|             free|
|     Alan|     Morse|     M|Chicago-Napervill...|             paid|
|Gabriella|   Shelton|     F|San Jose-Sunnyval...|             free|
|   Elijah|  Williams|     M|Detroit-Warren-De...|             paid|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...|             free|
|     Tess|  Townsend|     F|Nashville-Davidso...|             free|
|     Alan|     Morse|     M|Chicago-Napervill...|             paid|
|     Liam|     Watts|     M|New York-Newark-J...|             paid|
|     Liam|     Watts|     M|New York-Newark-J...|             paid|
|   Dylann|    Thomas|     M|       Anchorage, AK|             paid|
|     Alan|     Morse|     M|Chicago-Napervill...|             paid|
|   Elijah|  Williams|     M|Detroit-Warren-De...|             paid|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...|             free|
|     Alan|     Morse|     M|Chicago-Napervill...|             paid|
|   Dylann|    Thomas|     M|       Anchorage, AK|             paid|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...|             free|
+---------+----------+------+--------------------+-----------------+
">+---------+----------+------+--------------------+-----------------+
|firstname|  lastname|gender|            location|subscription_type|
+---------+----------+------+--------------------+-----------------+
| Annalyse|Montgomery|     F|  Killeen-Temple, TX|             free|
|   Dylann|    Thomas|     M|       Anchorage, AK|             paid|
|     Liam|     Watts|     M|New York-Newark-J...|             paid|
|     Tess|  Townsend|     F|Nashville-Davidso...|             free|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...|             free|
|     Alan|     Morse|     M|Chicago-Napervill...|             paid|
|Gabriella|   Shelton|     F|San Jose-Sunnyval...|             free|
|   Elijah|  Williams|     M|Detroit-Warren-De...|             paid|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...|             free|
|     Tess|  Townsend|     F|Nashville-Davidso...|             free|
|     Alan|     Morse|     M|Chicago-Napervill...|             paid|
|     Liam|     Watts|     M|New York-Newark-J...|             paid|
|     Liam|     Watts|     M|New York-Newark-J...|             paid|
|   Dylann|    Thomas|     M|       Anchorage, AK|             paid|
|     Alan|     Morse|     M|Chicago-Napervill...|             paid|
|   Elijah|  Williams|     M|Detroit-Warren-De...|             paid|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...|             free|
|     Alan|     Morse|     M|Chicago-Napervill...|             paid|
|   Dylann|    Thomas|     M|       Anchorage, AK|             paid|
|  Margaux|     Smith|     F|Atlanta-Sandy Spr...|             free|
+---------+----------+------+--------------------+-----------------+
</blockquote></pre><br>
					</li>
				</ol>
				<h3 id="load-data-into-azure-synapse" class="heading-anchor"><a class="anchor-link docon docon-link" href="#load-data-into-azure-synapse" aria-labelledby="load-data-into-azure-synapse"></a>Load data into Azure Synapse</h3>
				In this section, you upload the transformed data into Azure Synapse. You use the Azure Synapse connector for Azure Databricks to directly upload a dataframe as a table in a Synapse Spark pool.
				As mentioned earlier, the Azure Synapse connector uses Azure Blob storage as temporary storage to upload data between Azure Databricks and Azure Synapse. So, you start by providing the configuration to connect to the storage account. You must already have already created the account as part of the prerequisites for this article.
				<ol>
					<li>Provide the configuration to access the Azure Storage account from Azure Databricks.
						<div class="codeHeader code-title" id="code-try-11" data-bi-name="code-header"><span class="language">Scala</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-scala" data-author-content="val blobStorage = &quot;<blob-storage-account-name>.blob.core.windows.net&quot;
val blobContainer = &quot;<blob-container-name>&quot;
val blobAccessKey =  &quot;<access-key>&quot;
"><span><span class="hljs-keyword">val</span> blobStorage = <span class="hljs-string">"&lt;blob-storage-account-name&gt;.blob.core.windows.net"</span>
<span class="hljs-keyword">val</span> blobContainer = <span class="hljs-string">"&lt;blob-container-name&gt;"</span>
<span class="hljs-keyword">val</span> blobAccessKey =  <span class="hljs-string">"&lt;access-key&gt;"</span>
</span></blockquote></pre><br>
					</li>
					<li>Specify a temporary folder to use while moving data between Azure Databricks and Azure Synapse.
						<div class="codeHeader code-title" id="code-try-12" data-bi-name="code-header"><span class="language">Scala</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-scala" data-author-content="val tempDir = &quot;wasbs://&quot; + blobContainer + &quot;@&quot; + blobStorage +&quot;/tempDirs&quot;
"><span><span class="hljs-keyword">val</span> tempDir = <span class="hljs-string">"wasbs://"</span> + blobContainer + <span class="hljs-string">"@"</span> + blobStorage +<span class="hljs-string">"/tempDirs"</span>
</span></blockquote></pre><br>
					</li>
					<li>Run the following snippet to store Azure Blob storage access keys in the configuration. This action ensures that you don't have to keep the access key in the notebook in plain text.
						<div class="codeHeader code-title" id="code-try-13" data-bi-name="code-header"><span class="language">Scala</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-scala" data-author-content="val acntInfo = &quot;fs.azure.account.key.&quot;+ blobStorage
sc.hadoopConfiguration.set(acntInfo, blobAccessKey)
"><span><span class="hljs-keyword">val</span> acntInfo = <span class="hljs-string">"fs.azure.account.key."</span>+ blobStorage
sc.hadoopConfiguration.set(acntInfo, blobAccessKey)
</span></blockquote></pre><br>
					</li>
					<li>Provide the values to connect to the Azure Synapse instance. You must have created an Azure Synapse Analytics service as a prerequisite. Use the fully qualified server name for <strong>dwServer</strong>. For example, <code>&lt;servername&gt;.database.windows.net</code>.
						<div class="codeHeader code-title" id="code-try-14" data-bi-name="code-header"><span class="language">Scala</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-scala" data-author-content="//Azure Synapse related settings
val dwDatabase = &quot;<database-name>&quot;
val dwServer = &quot;<database-server-name>&quot;
val dwUser = &quot;<user-name>&quot;
val dwPass = &quot;<password>&quot;
val dwJdbcPort =  &quot;1433&quot;
val dwJdbcExtraOptions = &quot;encrypt=true;trustServerCertificate=true;hostNameInCertificate=*.database.windows.net;loginTimeout=30;&quot;
val sqlDwUrl = &quot;jdbc:sqlserver://&quot; + dwServer + &quot;:&quot; + dwJdbcPort + &quot;;database=&quot; + dwDatabase + &quot;;user=&quot; + dwUser+&quot;;password=&quot; + dwPass + &quot;;$dwJdbcExtraOptions&quot;
val sqlDwUrlSmall = &quot;jdbc:sqlserver://&quot; + dwServer + &quot;:&quot; + dwJdbcPort + &quot;;database=&quot; + dwDatabase + &quot;;user=&quot; + dwUser+&quot;;password=&quot; + dwPass
"><span><span class="hljs-comment">//Azure Synapse related settings</span>
<span class="hljs-keyword">val</span> dwDatabase = <span class="hljs-string">"&lt;database-name&gt;"</span>
<span class="hljs-keyword">val</span> dwServer = <span class="hljs-string">"&lt;database-server-name&gt;"</span>
<span class="hljs-keyword">val</span> dwUser = <span class="hljs-string">"&lt;user-name&gt;"</span>
<span class="hljs-keyword">val</span> dwPass = <span class="hljs-string">"&lt;password&gt;"</span>
<span class="hljs-keyword">val</span> dwJdbcPort =  <span class="hljs-string">"1433"</span>
<span class="hljs-keyword">val</span> dwJdbcExtraOptions = <span class="hljs-string">"encrypt=true;trustServerCertificate=true;hostNameInCertificate=*.database.windows.net;loginTimeout=30;"</span>
<span class="hljs-keyword">val</span> sqlDwUrl = <span class="hljs-string">"jdbc:sqlserver://"</span> + dwServer + <span class="hljs-string">":"</span> + dwJdbcPort + <span class="hljs-string">";database="</span> + dwDatabase + <span class="hljs-string">";user="</span> + dwUser+<span class="hljs-string">";password="</span> + dwPass + <span class="hljs-string">";$dwJdbcExtraOptions"</span>
<span class="hljs-keyword">val</span> sqlDwUrlSmall = <span class="hljs-string">"jdbc:sqlserver://"</span> + dwServer + <span class="hljs-string">":"</span> + dwJdbcPort + <span class="hljs-string">";database="</span> + dwDatabase + <span class="hljs-string">";user="</span> + dwUser+<span class="hljs-string">";password="</span> + dwPass
</span></blockquote></pre><br>
					</li>
					<li>Run the following snippet to load the transformed dataframe, <strong>renamedColumnsDF</strong>, as a table in Azure Synapse. This snippet creates a table called <strong>SampleTable</strong> in the SQL database.
						<div class="codeHeader code-title" id="code-try-15" data-bi-name="code-header"><span class="language">Scala</span></div>
						<pre tabindex="0" class="has-inner-focus"><blockquote class="lang-scala" data-author-content="spark.conf.set(
    &quot;spark.sql.parquet.writeLegacyFormat&quot;,
    &quot;true&quot;)

renamedColumnsDF.write.format(&quot;com.databricks.spark.sqldw&quot;).option(&quot;url&quot;, sqlDwUrlSmall).option(&quot;dbtable&quot;, &quot;SampleTable&quot;)       .option( &quot;forward_spark_azure_storage_credentials&quot;,&quot;True&quot;).option(&quot;tempdir&quot;, tempDir).mode(&quot;overwrite&quot;).save()
"><span>spark.conf.set(
    <span class="hljs-string">"spark.sql.parquet.writeLegacyFormat"</span>,
    <span class="hljs-string">"true"</span>)

renamedColumnsDF.write.format(<span class="hljs-string">"com.databricks.spark.sqldw"</span>).option(<span class="hljs-string">"url"</span>, sqlDwUrlSmall).option(<span class="hljs-string">"dbtable"</span>, <span class="hljs-string">"SampleTable"</span>)       .option( <span class="hljs-string">"forward_spark_azure_storage_credentials"</span>,<span class="hljs-string">"True"</span>).option(<span class="hljs-string">"tempdir"</span>, tempDir).mode(<span class="hljs-string">"overwrite"</span>).save()
</span></blockquote></pre><br>
						<div class="alert is-info">
							<span class="docon docon-status-error-outline" aria-hidden="true"></span> Note
							This sample uses the <code>forward_spark_azure_storage_credentials</code> flag, which causes Azure Synapse to access data from blob storage using an Access Key. This is the only supported method of authentication.
							If your Azure Blob Storage is restricted to select virtual networks, Azure Synapse requires Managed Service Identity instead of Access Keys. This will cause the error "This request is not authorized to perform this operation."
						</div>
					</li>
					<li>Connect to the SQL database and verify that you see a database named <strong>SampleTable</strong>.
						<br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/databricks-extract-load-sql-data-warehouse/verify-sample-table.png" alt="Verify the sample table" title="Verify sample table" data-linktype="relative-path"><br><br>
					</li>
					<li>Run a select query to verify the contents of the table. The table should have the same data as the <strong>renamedColumnsDF</strong> dataframe.
						<br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/databricks-extract-load-sql-data-warehouse/verify-sample-table-content.png" alt="Verify the sample table content" title="Verify the sample table content" data-linktype="relative-path"><br><br>
					</li>
				</ol>
				<h3 id="clean-up-resources" class="heading-anchor"><a class="anchor-link docon docon-link" href="#clean-up-resources" aria-labelledby="clean-up-resources"></a>Clean up resources</h3>
				After you finish the tutorial, you can terminate the cluster. From the Azure Databricks workspace, select <strong>Clusters</strong> on the left. For the cluster to terminate, under <strong>Actions</strong>, point to the ellipsis (...) and select the <strong>Terminate</strong> icon.
				<br><br><img src="https://docs.microsoft.com/en-us/azure/databricks/scenarios/media/databricks-extract-load-sql-data-warehouse/terminate-databricks-cluster.png" alt="Stop a Databricks cluster" title="Stop a Databricks cluster" data-linktype="relative-path"><br><br>
				If you don't manually terminate the cluster, it automatically stops, provided you selected the <strong>Terminate after __ minutes of inactivity</strong> check box when you created the cluster. In such a case, the cluster automatically stops if it's been inactive for the specified time.
				<h3 id="next-steps" class="heading-anchor"><a class="anchor-link docon docon-link" href="#next-steps" aria-labelledby="next-steps"></a>Next steps</h3>
				In this tutorial, you learned how to:
				<div class="checklist">
					<ul>
						<li>Create an Azure Databricks service</li>
						<li>Create a Spark cluster in Azure Databricks</li>
						<li>Create a notebook in Azure Databricks</li>
						<li>Extract data from a Data Lake Storage Gen2 account</li>
						<li>Transform data in Azure Databricks</li>
						<li>Load data into Azure Synapse</li>
					</ul>
				</div>

			</div>
		</div>
		<?php require "../../../../../../templates/footer_outer.php" ?>
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