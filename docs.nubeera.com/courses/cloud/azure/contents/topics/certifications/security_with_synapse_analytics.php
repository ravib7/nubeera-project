<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Certifications in Azure</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Certifications in Azure">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <link id="theme-style" rel="stylesheet" href="../../../../../../assets/css/theme.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../../boto_topics.css">
</head>

<body>
    <?php require '../../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">
        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;"></strong><br><br>
                <ul>
                    <li><a href="index.php">Module 0 - Lab environment setup with a pre-installed virtual machine</a></li>
                    <li><a href="compute_and_storage_for_data_engineering_workloads.php">Lab 1 - Explore compute and storage options for data engineering workloads</a></li>
                    <li><a href="interactive_query_using_serverless_pool.php">Lab 2 - Run interactive queries using serverless SQL pools</a></li>
                    <li><a href="data_exploration_and_transformation_in_azure_databricks.php">Lab 3 - Data exploration and transformation in Azure Databricks</a></li>
                    <li><a href="data_warehouse_using_apache_spark.php">Lab 4 - Explore, transform, and load data into the Data Warehouse using Apache Spark</a></li>
                    <li><a href="load_data_into_the_data_warehouse.php">Lab 5 - Ingest and load data into the Data Warehouse</a></li>
                    <li><a href="transform_data_with_pipelines.php">Lab 6 - Transform data with Azure Data Factory or Azure Synapse Pipelines</a></li>
                    <li><a href="integrate_data_from_notebooks.php">Lab 7 - Integrate data from notebooks with Azure Data Factory or Azure Synapse Pipelines</a></li>
                    <li><a href="security_with_synapse_analytics.php">Lab 8 - End-to-end security with Azure Synapse Analytics</a></li>
                    <li><a href="htap_with_azure_synapse_link.php">Lab 9 - Support Hybrid Transactional Analytical Processing (HTAP) with Azure Synapse Link</a></li>
                    <li><a href="stream_processing_with_stream_analytics.php">Lab 10 - Real-time stream processing with Stream Analytics</a></li>
                    <li><a href="stream_with_azure_databricks.php">Lab 11 - Create a stream processing solution with Event Hubs and Azure Databricks</a></li>
                </ul>
            </div>
        </div>
    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Lab 8 - End-to-end security with Azure Synapse Analytics</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Certifications</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                In this lab, you will learn how to secure a Synapse Analytics workspace and its supporting infrastructure. You will observe the SQL Active Directory Admin, manage IP firewall rules, manage secrets with Azure Key Vault and access those secrets through a Key Vault linked service and pipeline activities. You will understand how to implement column-level security, row-level security, and dynamic data masking when using dedicated SQL pools. <br><br>

                After completing this lab, you will be able to:

                <ul>
                    <li>Secure Azure Synapse Analytics supporting infrastructure</li>
                    <li>Secure the Azure Synapse Analytics workspace and managed services</li>
                    <li>Secure Azure Synapse Analytics workspace data</li>
                </ul>

                This lab will guide you through several security-related steps that cover an end-to-end security story for Azure Synapse Analytics. Some key take-aways from this lab are: <br><br>

                <ol>
                    <li>
                        Leverage Azure Key Vault to store sensitive connection information, such as access keys and passwords for linked services as well as in pipelines.
                    </li>
                    <li>
                        Introspect the data that is contained within the SQL Pools in the context of potential sensitive/confidential data disclosure. Identify the columns representing sensitive data, then secure them by adding column-level security. Determine at the table level what data should be hidden from specific groups of users then define security predicates to apply row level security (filters) on the table. If desired, you also have the option of applying Dynamic Data Masking to mask sensitive data returned in queries on a column by column basis.
                    </li>
                </ol>

                <h3 id="lab-setup-and-pre-requisites">Lab setup and pre-requisites</h3>

                Before starting this lab, you must complete at least the setup steps in <strong>Lab 4: <em>Explore, transform, and load data into the Data Warehouse using Apache Spark</em></strong>. <br><br>

                This lab uses the dedicated SQL pool you created in the previous lab. You should have paused the SQL pool at the end of the previous lab, so resume it by following these instructions:

                <ol>
                    <li>Open Azure Synapse Studio (<a href="https://web.azuresynapse.net/">https://web.azuresynapse.net/</a>).</li>
                    <li>Select the <strong>Manage</strong> hub.</li>
                    <li>
                        Select <strong>SQL pools</strong> in the left-hand menu. If the <strong>SQLPool01</strong> dedicated SQL pool is paused, hover over its name and select <strong>▷</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/resume-dedicated-sql-pool.png" alt="The resume button is highlighted on the dedicated SQL pool." title="Resume"><br><br>
                    </li>
                    <li>When prompted, select <strong>Resume</strong>. It will take a minute or two to resume the pool.</li>
                    <li>Continue to the next exercise while the dedicated SQL pool resumes.</li>
                </ol>

                <blockquote>
                    <strong>Important:</strong> Once started, a dedicated SQL pool consumes credits in your Azure subscription until it is paused. If you take a break from this lab, or decide not to complete it; follow the instructions at the end of the lab to pause your SQL pool!
                </blockquote>

                <h3 id="exercise-1---securing-azure-synapse-analytics-supporting-infrastructure">Exercise 1 - Securing Azure Synapse Analytics supporting infrastructure</h3>

                Azure Synapse Analytics (ASA) is a powerful solution that handles security for many of the resources that it creates and manages. In order to run ASA, however, some foundational security measures need to be put in place to ensure the infrastructure that it relies upon is secure. In this exercise, we will walk through securing the supporting infrastructure of ASA.

                <h3 id="task-1---observing-the-sql-active-directory-admin">Task 1 - Observing the SQL Active Directory admin</h3>

                The SQL Active Directory Admin can be a user (the default) or group (best practice so that more than one user can be provided these permissions) security principal. The principal assigned to this will have administrative permissions to the SQL Pools contained in the workspace.

                <ol>
                    <li>
                        In the Azure Portal (<a href="https://portal.azure.com">https://portal.azure.com</a>), browse to your lab resource group, and from the list of resources open your Synapse workspace (do not launch Synapse Studio).
                    </li>
                    <li>
                        On the left menu, select <strong>SQL Active Directory admin</strong> and observe who is listed as a SQL Active Directory Admin. Is it a user or group?

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab5_workspacesqladadmin.png" alt="On the SQL Active Directory Admin screen, SQL Active Directory admin is selected from the left menu, and the Active Directory Admin is highlighted."><br><br>
                    </li>
                </ol>

                <h3 id="task-2---manage-ip-firewall-rules">Task 2 - Manage IP firewall rules</h3>

                Having robust Internet security is a must for every technology system. One way to mitigate internet threat vectors is by reducing the number of public IP addresses that can access the Azure Synapse Analytics Workspace through the use of IP firewall rules. The Azure Synapse Analytics workspace will then delegate those same rules to all managed public endpoints of the workspace, including those for SQL pools and SQL Serverless endpoints.

                <ol>
                    <li>
                        In the Azure Portal, on the blade for your Synapse workspace, select <strong>Networking</strong>.
                    </li>
                    <li>
                        Notice that an IP Firewall rule of <strong>Allow All</strong> has already been created for you in the lab environment. If you wanted to add your specific IP address you would instead select <strong>+ Add Client IP</strong> from the taskbar menu (you do not need to do this now).

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab5_synapsefirewalladdclientipmenu.png" alt="On the Synapse Workspace screen, the + Add Client IP button is selected from the toolbar menu."><br><br>

                        <blockquote>
                            <strong>Note</strong>: When connecting to Synapse from your local network, certain ports need to be open. To support the functions of Synapse Studio, ensure outgoing TCP ports 80, 443, and 1143, and UDP port 53 are open.
                        </blockquote>
                    </li>
                </ol>

                <h3 id="exercise-2---securing-the-azure-synapse-analytics-workspace-and-managed-services">Exercise 2 - Securing the Azure Synapse Analytics workspace and managed services</h3>

                <h3 id="task-1---managing-secrets-with-azure-key-vault">Task 1 - Managing secrets with Azure Key Vault</h3>

                When dealing with connectivity to external data sources and services, sensitive connection information such as passwords and access keys should be properly handled. It is recommended that this type of information be stored in an Azure Key Vault. Leveraging Azure Key Vault not only protects against secrets being compromised, it also serves as a central source of truth; meaning that if a secret value needs to be updated (such as when cycling access keys on a storage account), it can be changed in one place and all services consuming this key will start pulling the new value immediately. Azure Key Vault encrypts and decrypts information transparently using 256-bit AES encryption, which is FIPS 140-2 compliant.

                <ol>
                    <li>
                        In the Azure Portal, open the resource group for this lab, and from the list of resources, select the <strong>Key vault</strong> resource.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/resource-group-key-vault.png" alt="Key vault is selected in the resource group." title="Key vault"><br><br>
                    </li>
                    <li>
                        On the left menu, under Settings, select <strong>Access Policies</strong>.
                    </li>
                    <li>
                        Observe that Managed Service Identity (MSI) representing your Synapse workspace (it has a name similar to <strong>asaworkspace<em>xxxxxxx</em></strong>) has already been listed under Application and it has 4 selected Secret Management Operations.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/key-vault-access-policies.png" alt="The Synapse workspace account and its assigned secret permissions are highlighted." title="Access policies"><br><br>
                    </li>
                    <li>
                        Select the drop-down that reads <strong>4 selected</strong> under <strong>Secret Management Operations</strong>, observe that <strong>Get</strong> (which allows your workspace to retrieve the values of secrets from Key Vault) and <strong>List</strong> (which allows your workspace to enumerate secrets) are set.
                    </li>
                </ol>

                <h3 id="task-2---use-azure-key-vault-for-secrets-when-creating-linked-services">Task 2 - Use Azure Key Vault for secrets when creating Linked Services</h3>

                Linked Services are synonymous with connection strings in Azure Synapse Analytics. Azure Synapse Analytics linked services provides the ability to connect to nearly 100 different types of external services ranging from Azure Storage Accounts to Amazon S3 and more. When connecting to external services, having secrets related to connection information is almost guaranteed. The best place to store these secrets is the Azure Key Vault. Azure Synapse Analytics provides the ability to configure all linked service connections with values from Azure Key Vault. <br><br>

                In order to leverage Azure Key Vault in linked services, you must first add your key vault resource as a linked service in Azure Synapse Analytics.

                <ol>
                    <li>
                        In Azure Synapse Studio, select the <strong>Manage</strong> hub from the left menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/manage-hub.png" alt="The Manage hub is selected." title="Manage hub"><br><br>
                    </li>
                    <li>
                        Beneath <strong>External Connections</strong>, select <strong>Linked Services</strong>, observe that a Linked Service pointing to your Key Vault has been created in the environment.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/key-vault-linked-service.png" alt="The Key Vault linked service is highlighted." title="Key Vault linked service"><br><br>
                    </li>
                </ol>

                Since we have the Azure Key Vault set up as a linked service, we can leverage it when defining new linked services. Every New linked service provides the option to retrieve secrets from Azure Key Vault. The form requests the selection of the Azure Key Vault linked service, the secret name, and (optional) specific version of the secret.

                <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab5_newlinkedservicewithakv.png" alt="A New linked service form is displayed with the Azure Key Vault setting highlighted with the fields described in the preceding paragraph."><br><br>

                <h3 id="task-3---secure-workspace-pipeline-runs">Task 3 - Secure workspace pipeline runs</h3>

                It is recommended to store any secrets that are part of your pipeline in Azure Key Vault. In this task you will retrieve these values using a Web activity, just to show the mechanics. The second part of this task demonstrates using a Web activity in the pipeline to retrieve a secret from the Key Vault.

                <ol>
                    <li>
                        Return to the Azure portal.
                    </li>
                    <li>
                        In the blade for your <strong>asakeyvault<em>xxxxxxx</em></strong> Azure Key Vault resource, and select <strong>Secrets</strong> from the left menu. Then, in the top toolbar, select <strong>+ Generate/Import</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab5_pipelinekeyvaultsecretmenu.png" alt="In Azure Key Vault, Secrets is selected from the left menu, and + Generate/Import is selected from the top toolbar."><br><br>
                    </li>
                    <li>
                        Create a secret, with the name <code>PipelineSecret</code> and assign it a value of <code>IsNotASecret</code>, and select the <strong>Create</strong> button.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab5_keyvaultcreatesecretforpipeline.png" alt="The Create a secret form is displayed populated with the specified values."><br><br>
                    </li>
                    <li>
                        Open the secret that you just created, drill into the current version, and copy the value in the Secret Identifier field. Save this value in a text editor, or retain it in your clipboard for a future step.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab5_keyvaultsecretidentifier.png" alt="On the Secret Version form, the Copy icon is selected next to the Secret Identifier text field."><br><br>
                    </li>
                    <li>
                        Switch back to Synapse Studio, then select the <strong>Integrate</strong> hub from the left menu.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/integrate-hub.png" alt="Integrate hub." title="Integrate hub"><br><br>
                    </li>
                    <li>
                        On the <strong>Integrate</strong> pane, in the <strong>+</strong> menu, select <strong>Pipeline</strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/new-pipeline.png" alt="On the Integrate blade the + button is expanded with the Pipeline item selected beneath it."><br><br>
                    </li>
                    <li>
                        On the <strong>Pipeline</strong> tab, in the <strong>Activities</strong> pane search for <strong>Web</strong> and then drag an instance of a <strong>Web</strong> activity to the design area.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab5_pipelinewebactivitynew.png" alt="In the Activities pane, Web is entered into the search field. Under General, the Web activity is displayed in the search results. An arrow indicates the drag and drop movement of the activity to the design surface of the pipeline. The Web activity is displayed on the design surface."><br><br>
                    </li>
                    <li>
                        Select the <strong>Web1</strong> web activity, and select the <strong>Settings</strong> tab. Fill out the form as follows:

                        <ol>
                            <li>
                                <strong>URL</strong>: Paste the Key Vault Secret Identifier value you copied in step 4 above, then <strong>append</strong> <code>?api-version=7.1</code> to to the end of this value. For example, it should look something like: <code>https://asakeyvaultNNNNN.vault.azure.net/secrets/PipelineSecret/f808d4fa99d84861872010f6c8d25c68?api-version=7.1</code>.
                            </li>
                            <li>
                                <strong>Method</strong>: Select <strong>Get</strong>.
                            </li>
                            <li>
                                Expand the <strong>Advanced</strong> section, and for <strong>Authentication</strong> select <strong>Managed Identity</strong>. We have already established an Access Policy for the Managed Service Identity of our Synapse workspace, this means that the pipeline activity has permissions to access the key vault via an HTTP call.
                            </li>
                            <li>
                                <strong>Resource</strong>: Enter <strong><a href="https://vault.azure.net">https://vault.azure.net</a></strong>

                                <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab5_pipelineconfigurewebactivity.png" alt="The Web Activity Settings tab is selected and the form is populated with the values indicated above."><br><br>
                            </li>
                        </ol>
                    </li>
                    <li>
                        From the Activities pane, add a <strong>Set variable</strong> activity to the design surface of the pipeline.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pipeline-activities-set-variable.png" alt="An arrow goes from the set variable item under Activities to the pipeline canvas." title="Activities: Set variable"><br><br>
                    </li>
                    <li>
                        On the design surface of the pipeline, select the <strong>Web1</strong> activity and drag a <strong>Success</strong> activity pipeline connection (green box) to the <strong>Set variable1</strong> activity.
                    </li>
                    <li>
                        With the pipeline selected in the designer (e.g., neither of the activities are selected), select the <strong>Variables</strong> tab and add a new <strong>String</strong> parameter named <strong><code>SecretValue</code></strong>.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab5_newpipelinevariable.png" alt="The design surface of the pipeline is shown with a new pipeline arrow connecting the Web1 and Set variable1 activities. The pipeline is selected, and beneath the design surface, the Variables tab is selected with a variable with the name of SecretValue highlighted."><br><br>
                    </li>
                    <li>
                        Select the <strong>Set variable1</strong> activity and select the <strong>Variables</strong> tab. Fill out the form as follows:

                        <ol>
                            <li>
                                <strong>Name</strong>: Select <strong>SecretValue</strong> (the variable that we just created).
                            </li>
                            <li>
                                <strong>Value</strong>: Enter <code>@activity('Web1').output.value</code>

                                <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab5_pipelineconfigsetvaractivity.png" alt="On the pipeline designer, the Set Variable1 activity is selected. Below the designer, the Variables tab is selected with the form set the previously specified values."><br><br>
                            </li>
                        </ol>
                    </li>
                    <li>
                        Debug the pipeline by selecting <strong>Debug</strong> from the toolbar menu. When it runs observe the inputs and outputs of both activities from the <strong>Output</strong> tab of the pipeline.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab5_pipelinedebugmenu.png" alt="The pipeline toolbar is displayed with the Debug item highlighted."><br><br>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/lab5_pipelinesetvariableactivityinputresults.png" alt="In the output of the pipeline, the Set variable 1 activity is selected with its input displayed. The input shows the value of NotASecret that was pulled from the key vault being assigned to the SecretValue pipeline variable."><br><br>

                        <blockquote>
                            <strong>Note</strong>: On the <strong>Web1</strong> activity, on the <strong>General</strong> tab there is a <strong>Secure Output</strong> checkbox that when checked will prevent the secret value from being logged in plain text, for instance in the pipeline run, you would see a masked value <strong>*** instead of the actual value retrieved from the Key vault. Any activity that consumes this value should also have their **Secure Input</strong> checkbox checked.
                        </blockquote>
                    </li>
                </ol>

                <h3 id="task-4---secure-azure-synapse-analytics-dedicated-sql-pools">Task 4 - Secure Azure Synapse Analytics dedicated SQL pools</h3>

                Transparent Data Encryption (TDE) is a feature of SQL Server that provides encryption and decryption of data at rest, this includes: databases, log files, and back ups. When using this feature with Synapse Analytics dedicated SQL pools, it will use a built-in symmetric Database Encryption Key (DEK) that is provided by the pool itself. With TDE, all stored data is encrypted on disk, when the data is requested, TDE will decrypt this data at the page level as it’s read into memory, and vice-versa encrypting in-memory data before it gets written back to disk. As with the name, this happens transparently without affecting any application code. When creating a dedicated SQL pool through Synapse Analytics, Transparent Data Encryption is not enabled. The first part of this task will show you how to enable this feature.

                <ol>
                    <li>
                        In the <strong>Azure Portal</strong>, open your resource group, then locate and open the <strong>SqlPool01</strong> dedicated SQL pool resource.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/resource-group-sqlpool01.png" alt="The SQLPool01 resource is highlighted in the Resource Group." title="Resource Group: SQLPool01"><br><br>
                    </li>
                    <li>
                        On the <strong>SQL pool</strong> resource blade, select <strong>Transparent data encryption</strong> from the left-hand menu. <strong>DO NOT</strong> turn on data encryption.

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/tde-form.png" alt="On the SQL pool resource screen, Transparent data encryption is selected from the menu."><br><br>

                        By default, this option is turned off. When you enable data encryption on this dedicated SQL pool, the pool is taken offline for a few minutes while TDE is applied.
                    </li>
                </ol>

                <h3 id="exercise-3---securing-azure-synapse-analytics-workspace-data">Exercise 3 - Securing Azure Synapse Analytics workspace data</h3>

                <h3 id="task-1---column-level-security">Task 1 - Column Level Security</h3>

                It is important to identify data columns that hold sensitive information. Types of sensitive could be social security numbers, email addresses, credit card numbers, financial totals, and more. Azure Synapse Analytics allows you define permissions that prevent users or roles select privileges on specific columns.

                <ol>
                    <li>In <strong>Azure Synapse Studio</strong>, in the <strong>Develop</strong> hub, expand the <strong>SQL scripts</strong> section, and select <strong>Column Level Security</strong>.</li>
                    <li>In the toolbar, connect to the <strong>SQLPool01</strong> database.</li>
                    <li>In the query window, <strong>run each step individually</strong> by highlighting the statement(s) in the step in the query window, and selecting the <strong>Run</strong> button from the toolbar (or press <strong>F5</strong>).</li>
                    <li>Close the script tab. If prompted select <strong>Discard all changes</strong>.</li>
                </ol>

                <h3 id="task-2---row-level-security">Task 2 - Row level security</h3>

                <ol>
                    <li>In the <strong>Develop</strong> hub, in the <strong>SQL scripts</strong> section, select <strong>Row Level Security</strong>.</li>
                    <li>In the toolbar, connect to the <strong>SQLPool01</strong> database.</li>
                    <li>In the query window, <strong>run each step individually</strong> by highlighting the statement(s) for the step in the query window, and selecting the <strong>Run</strong> button from the toolbar (or press <strong>F5</strong>).</li>
                    <li>Close the script tab. If prompted select <strong>Discard all changes</strong>.</li>
                </ol>

                <h3 id="task-3---dynamic-data-masking">Task 3 - Dynamic data masking</h3>

                <ol>
                    <li>In the <strong>Develop</strong> hub, in the <strong>SQL scripts</strong> section, select <strong>Dynamic Data Masking</strong>.</li>
                    <li>In the toolbar, connect to the <strong>SQLPool01</strong> database.</li>
                    <li>In the query window, <strong>run each step individually</strong> by highlighting the statement(s) for the step in the query window, and selecting the <strong>Run</strong> button from the toolbar (or press <strong>F5</strong>).</li>
                    <li>Close the script tab. If prompted select <strong>Discard all changes</strong>.</li>
                </ol>

                <h3 id="important-pause-your-sql-pool">Important: Pause your SQL pool</h3>

                Complete these steps to free up resources you no longer need.

                <ol>
                    <li>In Synapse Studio, select the <strong>Manage</strong> hub.</li>
                    <li>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Select <strong>SQL pools</strong> in the left-hand menu. Hover over the <strong>SQLPool01</strong> dedicated SQL pool and select **</td>
                                    <td>&nbsp;</td>
                                    <td>**.</td>
                                </tr>
                            </tbody>
                        </table>

                        <br><br><img src="https://microsoftlearning.github.io/DP-203-Data-Engineer/Instructions/Labs/images/pause-dedicated-sql-pool.png" alt="The pause button is highlighted on the dedicated SQL pool." title="Pause"><br><br>
                    </li>
                    <li>When prompted, select <strong>Pause</strong>.</li>
                </ol>
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