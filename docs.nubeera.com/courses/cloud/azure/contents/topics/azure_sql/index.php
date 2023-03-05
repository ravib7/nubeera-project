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
                <li class="breadcrumb-item active"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item active"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item active"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item active"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Azure SQL</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                        <h2 id="use-the-azure-cli-to-create-a-single-database-and-configure-a-firewall-rule">Use the Azure CLI to create a single database and configure a firewall rule</h2>
                        <h3>In this article</h3>
                            <ol>
                                <li><a href="#sample-script">Sample script</a></li>
                                <li><a href="#sample-reference">Sample reference</a></li>
                            </ol>
                        </nav>

                        <!-- <content> -->
                        This Azure CLI script example creates a single database in Azure SQL Database and configures a server-level firewall rule. After the script has been successfully run, the database can be accessed from all Azure services and the configured IP address.<br><br>
                        If you choose to install and use the CLI locally, this topic requires that you are running the Azure CLI version 2.0 or later. Run <code>az --version</code> to find the version.
                        <h2 id="sample-script" class="heading-anchor"><a class="anchor-link docon docon-link" href="#sample-script" aria-labelledby="sample-script"></a>Sample script</h2>
                        <h3 id="sign-in-to-azure" class="heading-anchor"><a class="anchor-link docon docon-link" href="#sign-in-to-azure" aria-labelledby="sign-in-to-azure"></a>Sign in to Azure</h3>
                        If you don't have an Azure subscription, create a <a href="https://azure.microsoft.com/free/?ref=microsoft.com&amp;utm_source=microsoft.com&amp;utm_medium=docs&amp;utm_campaign=visualstudio" data-linktype="external">free account</a> before you begin.
                        <h3 id="run-the-script" class="heading-anchor"><a class="anchor-link docon docon-link" href="#run-the-script" aria-labelledby="run-the-script"></a>Run the script</h3>
                        <span class="language">Azure CLI</span>
                                
                        <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-azurecli" data-interactive="azurecli" name="main" title="Create SQL Database" data-author-content="#!/bin/bash
# Passed validation in Cloud Shell 12/01/2021

let randomIdentifier=$RANDOM*$RANDOM
location=&quot;East US&quot;
resourceGroup=&quot;msdocs-azuresql-rg-$randomIdentifier&quot;
tag=&quot;create-and-configure-database&quot;
server=&quot;msdocs-azuresql-server-$randomIdentifier&quot;
database=&quot;msdocsazuresqldb$randomIdentifier&quot;
login=&quot;msdocsAdminUser&quot;
password=&quot;Pa$$w0rD-$randomIdentifier&quot;
# Specify appropriate IP address values for your environment
# to limit access to the SQL Database server
startIp=0.0.0.0
endIp=0.0.0.0

echo &quot;Using resource group $resourceGroup with login: $login, password: $password...&quot;

echo &quot;Creating $resource in $location...&quot;
az group create --name $resourceGroup --location &quot;$location&quot; --tag $tag

echo &quot;Creating $server in $location...&quot;
az sql server create --name $server --resource-group $resourceGroup --location &quot;$location&quot; --admin-user $login --admin-password $password

echo &quot;Configuring firewall...&quot;
az sql server firewall-rule create --resource-group $resourceGroup --server $server -n AllowYourIp --start-ip-address $startIp --end-ip-address $endIp

echo &quot;Creating $database on $server...&quot;
az sql db create --resource-group $resourceGroup --server $server --name $database --sample-name AdventureWorksLT --edition GeneralPurpose --family Gen5 --capacity 2 --zone-redundant true # zone redundancy is only supported on premium and business critical service tiers

# echo &quot;Deleting all resources&quot;
# az group delete --name $resourceGroup -y
"><span><span class="hljs-comment">#!/bin/bash</span>
<span class="hljs-comment"># Passed validation in Cloud Shell 12/01/2021</span>

let <span class="hljs-parameter">randomIdentifier=</span><span class="hljs-variable">$RANDOM</span>*<span class="hljs-variable">$RANDOM</span>
<span class="hljs-parameter">location=</span><span class="hljs-string">"East US"</span>
<span class="hljs-parameter">resourceGroup=</span><span class="hljs-string">"msdocs-azuresql-rg-<span class="hljs-variable">$randomIdentifier</span>"</span>
<span class="hljs-parameter">tag=</span><span class="hljs-string">"create-and-configure-database"</span>
<span class="hljs-parameter">server=</span><span class="hljs-string">"msdocs-azuresql-server-<span class="hljs-variable">$randomIdentifier</span>"</span>
<span class="hljs-parameter">database=</span><span class="hljs-string">"msdocsazuresqldb<span class="hljs-variable">$randomIdentifier</span>"</span>
<span class="hljs-parameter">login=</span><span class="hljs-string">"msdocsAdminUser"</span>
<span class="hljs-parameter">password=</span><span class="hljs-string">"Pa$<span class="hljs-variable">$w0rD</span>-<span class="hljs-variable">$randomIdentifier</span>"</span>
<span class="hljs-comment"># Specify appropriate IP address values for your environment</span>
<span class="hljs-comment"># to limit access to the SQL Database server</span>
<span class="hljs-parameter">startIp=</span><span class="hljs-number">0.0.0.0</span>
<span class="hljs-parameter">endIp=</span><span class="hljs-number">0.0.0.0</span>

echo <span class="hljs-string">"Using resource group <span class="hljs-variable">$resourceGroup</span> with login: <span class="hljs-variable">$login</span>, password: <span class="hljs-variable">$password</span>..."</span>

echo <span class="hljs-string">"Creating <span class="hljs-variable">$resource</span> in <span class="hljs-variable">$location</span>..."</span>
<span class="hljs-keyword">az group create </span><span class="hljs-parameter">--name</span> <span class="hljs-variable">$resourceGroup</span> <span class="hljs-parameter">--location</span> <span class="hljs-string">"<span class="hljs-variable">$location</span>"</span> <span class="hljs-parameter">--tag</span> <span class="hljs-variable">$tag</span>

echo <span class="hljs-string">"Creating <span class="hljs-variable">$server</span> in <span class="hljs-variable">$location</span>..."</span>
<span class="hljs-keyword">az sql server create </span><span class="hljs-parameter">--name</span> <span class="hljs-variable">$server</span> <span class="hljs-parameter">--resource-group</span> <span class="hljs-variable">$resourceGroup</span> <span class="hljs-parameter">--location</span> <span class="hljs-string">"<span class="hljs-variable">$location</span>"</span> <span class="hljs-parameter">--admin-user</span> <span class="hljs-variable">$login</span> <span class="hljs-parameter">--admin-password</span> <span class="hljs-variable">$password</span>

echo <span class="hljs-string">"Configuring firewall..."</span>
<span class="hljs-keyword">az sql server firewall-rule create </span><span class="hljs-parameter">--resource-group</span> <span class="hljs-variable">$resourceGroup</span> <span class="hljs-parameter">--server</span> <span class="hljs-variable">$server</span> <span class="hljs-parameter">-n</span> AllowYourIp <span class="hljs-parameter">--start-ip-address</span> <span class="hljs-variable">$startIp</span> <span class="hljs-parameter">--end-ip-address</span> <span class="hljs-variable">$endIp</span>

echo <span class="hljs-string">"Creating <span class="hljs-variable">$database</span> on <span class="hljs-variable">$server</span>..."</span>
<span class="hljs-keyword">az sql db create </span><span class="hljs-parameter">--resource-group</span> <span class="hljs-variable">$resourceGroup</span> <span class="hljs-parameter">--server</span> <span class="hljs-variable">$server</span> <span class="hljs-parameter">--name</span> <span class="hljs-variable">$database</span> <span class="hljs-parameter">--sample-name</span> AdventureWorksLT <span class="hljs-parameter">--edition</span> GeneralPurpose <span class="hljs-parameter">--family</span> Gen5 <span class="hljs-parameter">--capacity</span> <span class="hljs-number">2</span> <span class="hljs-parameter">--zone-redundant</span> <span class="hljs-literal">true</span> <span class="hljs-comment"># zone redundancy is only supported on premium and business critical service tiers</span>

<span class="hljs-comment"># echo "Deleting all resources"</span>
<span class="hljs-comment"># az group delete --name $resourceGroup -y</span>
</span></blockquote></pre>
                        <h3 id="clean-up-deployment" class="heading-anchor"><a class="anchor-link docon docon-link" href="#clean-up-deployment" aria-labelledby="clean-up-deployment"></a>Clean up deployment</h3>
                        Use the following command to remove the resource group and all resources associated with it.
                        <span class="language">Azure CLI</span>
                        <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-azurecli" data-interactive="azurecli" data-author-content="az group delete --name $resource
"><span><span class="hljs-keyword">az group delete </span><span class="hljs-parameter">--name</span> <span class="hljs-variable">$resource</span>
</span></blockquote></pre>
                        <h2 id="sample-reference" class="heading-anchor"><a class="anchor-link docon docon-link" href="#sample-reference" aria-labelledby="sample-reference"></a>Sample reference</h2>
                        This script uses the following commands. Each command in the table links to command-specific documentation.
                        <div class="table-scroll-wrapper has-inner-focus" tabindex="0" role="group" aria-label="Horizontally scrollable data">
                            <table class="table">
                                <caption class="visually-hidden">Sample reference</caption>
                                <thead>
                                    <tr>
                                        <th>Command</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>az sql server</td>
                                        <td>Server commands</td>
                                    </tr>
                                    <tr>
                                        <td>az sql server firewall</td>
                                        <td>Server firewall commands.</td>
                                    </tr>
                                    <tr>
                                        <td>az sql db</td>
                                        <td>Database commands.</td>
                                    </tr>
                                </tbody>
                            </table>
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