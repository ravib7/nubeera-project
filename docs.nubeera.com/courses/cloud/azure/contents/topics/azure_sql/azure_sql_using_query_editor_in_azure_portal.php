<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Azure SQL</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Azure SQL">

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
                <strong class="px-2" style="font-size: 1.125rem;">Azure SQL</strong><br><br>
                <ul>
                        <li><a href="index.php">Azure SQL Database using Azure CLI</a></li>
                        <li><a href="azure_sql_using_query_editor_in_azure_portal.php">Connect & Query using Portal</a></li>
                    </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Azure SQL</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Azure SQL</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <h2 id="quickstart-use-the-azure-portals-query-editor-preview-to-query-an-azure-sql-database">Quickstart: Use the Azure portal's query editor (preview) to query an Azure SQL Database</h2>
                        <h3>In this article</h3>
                            <ol>
                                <li><a href="#prerequisites">Prerequisites</a></li>
                                <li><a href="#using-sql-query-editor">Using SQL Query Editor</a></li>
                                <li><a href="#troubleshooting-and-considerations">Troubleshooting and considerations</a></li>
                            </ol>
                        </nav>



                        <!-- <content> -->
                        The query editor is a tool in the Azure portal for running SQL queries against your database in Azure SQL Database or data warehouse in Azure Synapse Analytics.<br><br>
                        In this quickstart, you'll use the query editor to run Transact-SQL (T-SQL) queries against a database.
                        <h2 id="prerequisites" class="heading-anchor"><a class="anchor-link docon docon-link" href="#prerequisites" aria-labelledby="prerequisites"></a>Prerequisites</h2>
                        <h3 id="create-a-database-with-sample-data" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-database-with-sample-data" aria-labelledby="create-a-database-with-sample-data"></a>Create a database with sample data</h3>
                        Completing this quickstart requires the AdventureWorksLT sample database. 
                        <h3 id="set-an-azure-active-directory-admin-for-the-server-optional" class="heading-anchor"><a class="anchor-link docon docon-link" href="#set-an-azure-active-directory-admin-for-the-server-optional" aria-labelledby="set-an-azure-active-directory-admin-for-the-server-optional"></a>Set an Azure Active Directory admin for the server (optional)</h3>
                        Configuring an Azure Active Directory (Azure AD) administrator enables you to use a single identity to sign in to the Azure portal and your database. If you would like to use Azure AD to connect to query editor, follow the below steps.
                        This process is optional, you can instead use SQL authentication to connect to the query editor.
                        <div class="alert is-info">
                            <span class="docon docon-status-error-outline" aria-hidden="true"></span> Note
                            <ul>
                                <li>Email accounts (for example, outlook.com, gmail.com, yahoo.com, and so on) aren't yet supported as Azure AD admins. Make sure to choose a user created either natively in the Azure AD or federated into the Azure AD.</li>
                                <li>Azure AD admin sign in works with accounts that have 2-factor authentication enabled, but the query editor does not support 2-factor authentication.</li>
                            </ul>
                        </div>
                        <ol>
                            <li>
                                In the Azure portal, navigate to your SQL database server.
                            </li>
                            <li>
                                On the <strong>SQL server</strong> menu, select <strong>Active Directory admin</strong>.
                            </li>
                            <li>
                                On the SQL Server <strong>Active Directory admin</strong> page toolbar, select <strong>Set admin</strong>.
                               <br><br> <img src="https://docs.microsoft.com/en-us/azure/azure-sql/database/media/connect-query-portal/select-active-directory.png" alt="select active directory" data-linktype="relative-path"><br><br>
                            </li>
                            <li>
                                On the <strong>Add admin</strong> page, in the search box, enter a user or group to find, select it as an admin, and then choose the <strong>Select</strong> button.
                            </li>
                            <li>
                                Back in the SQL Server <strong>Active Directory admin</strong> page toolbar, select <strong>Save</strong>.
                            </li>
                        </ol>
                        <h2 id="using-sql-query-editor" class="heading-anchor"><a class="anchor-link docon docon-link" href="#using-sql-query-editor" aria-labelledby="using-sql-query-editor"></a>Using SQL Query Editor</h2>
                        <ol>
                            <li>
                                Sign in to the <a href="https://portal.azure.com/" data-linktype="external">Azure portal</a> and select the database you want to query.
                            </li>
                            <li>
                                In the <strong>SQL database</strong> menu, select <strong>Query editor (preview)</strong>.
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/azure-sql/database/media/connect-query-portal/find-query-editor.png" alt="find query editor" data-linktype="relative-path"><br><br>
                            </li>
                        </ol>
                        <h3 id="establish-a-connection-to-the-database" class="heading-anchor"><a class="anchor-link docon docon-link" href="#establish-a-connection-to-the-database" aria-labelledby="establish-a-connection-to-the-database"></a>Establish a connection to the database</h3>
                        Even though you're signed into the portal, you still need to provide credentials to access the database. You can connect using SQL authentication or Azure Active Directory to connect to your database.
                        <h4 id="connect-using-sql-authentication" class="heading-anchor"><a class="anchor-link docon docon-link" href="#connect-using-sql-authentication" aria-labelledby="connect-using-sql-authentication"></a>Connect using SQL Authentication</h4>
                        <ol>
                            <li>
                                In the <strong>Login</strong> page, under <strong>SQL server authentication</strong>, enter a <strong>Login</strong> and <strong>Password</strong> for a user that has access to the database. If you're not sure, use the login and password for the Server admin of the database's server.
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/azure-sql/database/media/connect-query-portal/login-menu.png" alt="sign in" data-linktype="relative-path">
                            </li>
                            <li>
                                Select <strong>OK</strong>.
                            </li>
                        </ol>
                        <h4 id="connect-using-azure-active-directory" class="heading-anchor"><a class="anchor-link docon docon-link" href="#connect-using-azure-active-directory" aria-labelledby="connect-using-azure-active-directory"></a>Connect using Azure Active Directory</h4>
                        In the <strong>Query editor (preview)</strong>, look at the <strong>Login</strong> page at the <strong>Active Directory authentication</strong> section. Authentication will happen automatically, so if you are an Azure AD admin to the database you will see a message appear saying you have been signed in. Then select the <strong>Continue as</strong> <em>&lt;your user or group ID&gt;</em> button. If the page indicates that you have not successfully logged in, you may need to refresh the page.
                        <h3 id="query-a-database-in-sql-database" class="heading-anchor"><a class="anchor-link docon docon-link" href="#query-a-database-in-sql-database" aria-labelledby="query-a-database-in-sql-database"></a>Query a database in SQL Database</h3>
                        The following example queries should run successfully against the AdventureWorksLT sample database.
                        <h4 id="run-a-select-query" class="heading-anchor"><a class="anchor-link docon docon-link" href="#run-a-select-query" aria-labelledby="run-a-select-query"></a>Run a SELECT query</h4>
                        <ol>
                            <li>
                                Paste the following query into the query editor:
                                <span class="language">SQL</span>
                                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-sql" data-author-content=" SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
FROM SalesLT.ProductCategory pc
JOIN SalesLT.Product p
ON pc.productcategoryid = p.productcategoryid;
"><span> <span class="hljs-keyword">SELECT</span> TOP <span class="hljs-number">20</span> pc.Name <span class="hljs-keyword">as</span> CategoryName, p.name <span class="hljs-keyword">as</span> ProductName
<span class="hljs-keyword">FROM</span> SalesLT.ProductCategory pc
<span class="hljs-keyword">JOIN</span> SalesLT.Product p
<span class="hljs-keyword">ON</span> pc.productcategoryid = p.productcategoryid;
</span></blockquote></pre>
                            </li>
                            <li>
                                Select <strong>Run</strong> and then review the output in the <strong>Results</strong> pane.
                                <br><br><img src="https://docs.microsoft.com/en-us/azure/azure-sql/database/media/connect-query-portal/query-editor-results.png" alt="query editor results" data-linktype="relative-path"><br><br>
                            </li>
                            <li>
                                Optionally, you can save the query as a .sql file, or export the returned data as a .json, .csv, or .xml file.
                            </li>
                        </ol>
                        <h4 id="run-an-insert-query" class="heading-anchor"><a class="anchor-link docon docon-link" href="#run-an-insert-query" aria-labelledby="run-an-insert-query"></a>Run an INSERT query</h4>
                        Run the following INSERT T-SQL statement to add a new product in the <code>SalesLT.Product</code> table.
                        <ol>
                            <li>
                                Replace the previous query with this one.
                                <span class="language">SQL</span>
                                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-sql" data-author-content="INSERT INTO [SalesLT].[Product]
( [Name]
, [ProductNumber]
, [Color]
, [ProductCategoryID]
, [StandardCost]
, [ListPrice]
, [SellStartDate]
)
VALUES
('myNewProduct'
,123456789
,'NewColor'
,1
,100
,100
,GETDATE() );
"><span><span class="hljs-keyword">INSERT</span> <span class="hljs-keyword">INTO</span> [SalesLT].[Product]
( [<span class="hljs-keyword">Name</span>]
, [ProductNumber]
, [Color]
, [ProductCategoryID]
, [StandardCost]
, [ListPrice]
, [SellStartDate]
)
<span class="hljs-keyword">VALUES</span>
(<span class="hljs-string">'myNewProduct'</span>
,<span class="hljs-number">123456789</span>
,<span class="hljs-string">'NewColor'</span>
,<span class="hljs-number">1</span>
,<span class="hljs-number">100</span>
,<span class="hljs-number">100</span>
,<span class="hljs-keyword">GETDATE</span>() );
</span></blockquote></pre>
                            </li>
                            <li>
                                Select <strong>Run</strong> to insert a new row in the <code>Product</code> table. The <strong>Messages</strong> pane displays <strong>Query succeeded: Affected rows: 1</strong>.
                            </li>
                        </ol>
                        <h4 id="run-an-update-query" class="heading-anchor"><a class="anchor-link docon docon-link" href="#run-an-update-query" aria-labelledby="run-an-update-query"></a>Run an UPDATE query</h4>
                        Run the following UPDATE T-SQL statement to modify your new product.
                        <ol>
                            <li>
                                Replace the previous query with this one.
                                <span class="language">SQL</span>
                                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-sql" data-author-content="UPDATE [SalesLT].[Product]
SET [ListPrice] = 125
WHERE Name = 'myNewProduct';
"><span><span class="hljs-keyword">UPDATE</span> [SalesLT].[Product]
<span class="hljs-keyword">SET</span> [ListPrice] = <span class="hljs-number">125</span>
<span class="hljs-keyword">WHERE</span> <span class="hljs-keyword">Name</span> = <span class="hljs-string">'myNewProduct'</span>;
</span></blockquote></pre>
                            </li>
                            <li>
                                Select <strong>Run</strong> to update the specified row in the <code>Product</code> table. The <strong>Messages</strong> pane displays <strong>Query succeeded: Affected rows: 1</strong>.
                            </li>
                        </ol>
                        <h4 id="run-a-delete-query" class="heading-anchor"><a class="anchor-link docon docon-link" href="#run-a-delete-query" aria-labelledby="run-a-delete-query"></a>Run a DELETE query</h4>
                        Run the following DELETE T-SQL statement to remove your new product.
                        <ol>
                            <li>
                                Replace the previous query with this one:
                                <div class="codeHeader" id="code-try-3" data-bi-name="code-header"><span class="language">SQL</span><button type="button" class="action position-relative" data-bi-name="copy" aria-label="Copy code">
                                        </div>
                                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-sql" data-author-content="DELETE FROM [SalesLT].[Product]
WHERE Name = 'myNewProduct';
"><span><span class="hljs-keyword">DELETE</span> <span class="hljs-keyword">FROM</span> [SalesLT].[Product]
<span class="hljs-keyword">WHERE</span> <span class="hljs-keyword">Name</span> = <span class="hljs-string">'myNewProduct'</span>;
</span></blockquote></pre>
                            </li>
                            <li>
                                Select <strong>Run</strong> to delete the specified row in the <code>Product</code> table. The <strong>Messages</strong> pane displays <strong>Query succeeded: Affected rows: 1</strong>.
                            </li>
                        </ol>
                        <h2 id="troubleshooting-and-considerations" class="heading-anchor"><a class="anchor-link docon docon-link" href="#troubleshooting-and-considerations" aria-labelledby="troubleshooting-and-considerations"></a>Troubleshooting and considerations</h2>
                        There are a few things to know when working with the query editor.
                        <h3 id="configure-local-network-settings" class="heading-anchor"><a class="anchor-link docon docon-link" href="#configure-local-network-settings" aria-labelledby="configure-local-network-settings"></a>Configure local network settings</h3>
                        If you get one of the following errors in the query editor:
                        <ul>
                            <li><em>Your local network settings might be preventing the Query Editor from issuing queries. Please click here for instructions on how to configure your network settings</em></li>
                            <li><em>A connection to the server could not be established. This might indicate an issue with your local firewall configuration or your network proxy settings</em></li>
                        </ul>
                        This is because the query editor uses port 443 and 1443 to communicate. You will need to ensure you have enabled outbound HTTPS traffic on these ports. The instructions below will walk you through how to do this, depending on your Operating System. You might need to work with your corporate IT to grant approval to open this connection on your local network.
                        <h4 id="steps-for-windows" class="heading-anchor"><a class="anchor-link docon docon-link" href="#steps-for-windows" aria-labelledby="steps-for-windows"></a>Steps for Windows</h4>
                        <ol>
                            <li>Open <strong>Windows Defender Firewall</strong></li>
                            <li>On the left-side menu, select <strong>Advanced settings</strong></li>
                            <li>In <strong>Windows Defender Firewall with Advanced Security</strong>, select <strong>Outbound rules</strong> on the left-side menu.</li>
                            <li>Select <strong>New Rule...</strong> on the right-side menu</li>
                        </ol>
                        In the <strong>New outbound rule wizard</strong> follow these steps:
                        <ol>
                            <li>Select <strong>port</strong> as the type of rule you want to create. Select <strong>Next</strong></li>
                            <li>Select <strong>TCP</strong></li>
                            <li>Select <strong>Specific remote ports</strong> and enter "443, 1443". Then select <strong>Next</strong></li>
                            <li>Select "Allow the connection if it is secure"</li>
                            <li>Select <strong>Next</strong> then select <strong>Next</strong> again</li>
                            <li>Keep "Domain", "Private", and "Public" all selected</li>
                            <li>Give the rule a name, for example "Access Azure SQL query editor" and optionally a description. Then select <strong>Finish</strong></li>
                        </ol>
                        <h4 id="steps-for-mac" class="heading-anchor"><a class="anchor-link docon docon-link" href="#steps-for-mac" aria-labelledby="steps-for-mac"></a>Steps for Mac</h4>
                        <ol>
                            <li>Open <strong>System Preferences</strong> (Apple menu &gt; System Preferences).</li>
                            <li>Click <strong>Security &amp; Privacy</strong>.</li>
                            <li>Click <strong>Firewall</strong>.</li>
                            <li>If Firewall is off, select <strong>Click the lock to make changes</strong> at the bottom and select <strong>Turn on Firewall</strong></li>
                            <li>Click <strong>Firewall Options</strong>.</li>
                            <li>In the <strong>Security &amp; Privacy</strong> window select this option: "Automatically allow signed software to receive incoming connections."</li>
                        </ol>
                        <h4 id="steps-for-linux" class="heading-anchor"><a class="anchor-link docon docon-link" href="#steps-for-linux" aria-labelledby="steps-for-linux"></a>Steps for Linux</h4>
                        Run these commands to update iptables
                        
                        <pre tabindex="0" class="has-inner-focus"><blockquote data-author-content="sudo iptables -A OUTPUT -p tcp --dport 443 -j ACCEPT
sudo iptables -A OUTPUT -p tcp --dport 1443 -j ACCEPT
">sudo iptables -A OUTPUT -p tcp --dport 443 -j ACCEPT
sudo iptables -A OUTPUT -p tcp --dport 1443 -j ACCEPT
</blockquote></pre>
                        <h3 id="connection-considerations" class="heading-anchor"><a class="anchor-link docon docon-link" href="#connection-considerations" aria-labelledby="connection-considerations"></a>Connection considerations</h3>
                        <ul>
                            <li>
                                For public connections to query editor, you need to add your outbound IP address to the server's allowed firewall rules to access your databases and data warehouses.
                            </li>
                            <li>
                                If you have a Private Link connection set up on the server and you are connecting to query editor from an IP in the private Virtual Network, the Query Editor works without needing to add the Client IP address into the SQL database server firewall rules.
                            </li>
                            <li>
                                The most basic RBAC permissions needed to use query editor are Read access to the server and database. Anyone with this level of access can access the query editor feature. To limit access to particular users, you must prevent them from being able to sign in to the query editor with Azure Active Directory or SQL authentication credentials. If they cannot assign themselves as the AAD admin for the server or access/add a SQL administrator account, they should not be able to use query editor.
                            </li>
                            <li>
                                Query editor doesn't support connecting to the <code>master</code> database.
                            </li>
                            <li>
                                Query editor cannot connect to a replica database with <code>ApplicationIntent=ReadOnly</code>
                            </li>
                            <li>
                                If you saw this error message "The X-CSRF-Signature header could not be validated", take the following action to resolve the issue:
                                <ul>
                                    <li>Make sure your computer's clock is set to the right time and time zone. You can also try to match your computer's time zone with Azure by searching for the time zone for the location of your instance, such as East US, Pacific, and so on.</li>
                                    <li>If you are on a proxy network, make sure that the request header “X-CSRF-Signature” is not being modified or dropped.</li>
                                </ul>
                            </li>
                        </ul>
                        <h3 id="other-considerations" class="heading-anchor"><a class="anchor-link docon docon-link" href="#other-considerations" aria-labelledby="other-considerations"></a>Other considerations</h3>
                        <ul>
                            <li>
                                Pressing <strong>F5</strong> refreshes the query editor page and any query being worked on is lost.
                            </li>
                            <li>
                                There's a 5-minute timeout for query execution.
                            </li>
                            <li>
                                The query editor only supports cylindrical projection for geography data types.
                            </li>
                            <li>
                                There's no support for IntelliSense for database tables and views, but the editor does support autocomplete on names that have already been typed.
                            </li>
                        </ul>
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