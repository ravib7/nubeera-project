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
    <?php require '../../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Azure VM</strong><br><br>
                <ul>
                    <li><a href="#launch-azure-cloud-shell">Launch Azure Cloud Shell</a></li>
                    <li><a href="#create-a-resource-group">Create a resource group</a></li>
                    <li><a href="#create-virtual-machine">Create virtual machine</a></li>
                    <li><a href="#open-port-80-for-web-traffic">Open port 80 for web traffic</a></li>
                    <li><a href="#connect-to-virtual-machine">Connect to virtual machine</a></li>
                    <li><a href="#install-web-server">Install web server</a></li>
                    <li><a href="#view-the-web-server-in-action">View the web server in action</a></li>
                    <li><a href="#clean-up-resources">Clean up resources</a></li>
                    <li><a href="#next-steps">Next steps</a></li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">AZURE VIRTUAL MACHINE</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Azure VM</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h2 id="quickstart-create-a-linux-virtual-machine-with-the-azure-cli">Create a Linux virtual machine with the Azure CLI</h2>

                <!-- <content> -->
                <strong>Applies to:</strong> ✔️ Linux VMs
                This quickstart shows you how to use the Azure command-line interface (CLI) to deploy a Linux virtual machine (VM) in Azure. The Azure CLI is used to create and manage Azure resources from the command line or in scripts.
                In this tutorial, we will be installing the latest Ubuntu LTS image. To show the VM in action, you'll connect to it using SSH and install the NGINX web server.
                If you don't have an Azure subscription, create a <a href="https://azure.microsoft.com/free/?WT.mc_id=A261C142F" data-linktype="external">free account</a> before you begin.
                <h3 id="launch-azure-cloud-shell" class="heading-anchor"><a class="anchor-link docon docon-link" href="#launch-azure-cloud-shell" aria-labelledby="launch-azure-cloud-shell"></a>Launch Azure Cloud Shell</h3>
                The Azure Cloud Shell is a free interactive shell that you can use to run the steps in this article. It has common Azure tools preinstalled and configured to use with your account.
                To open the Cloud Shell, just select <strong>Try it</strong> from the upper right corner of a code block. You can also open Cloud Shell in a separate browser tab by going to <a href="https://shell.azure.com/bash" data-linktype="external">https://shell.azure.com/bash</a>. Select <strong>Copy</strong> to copy the blocks of code, paste it into the Cloud Shell, and select <strong>Enter</strong> to run it.
                If you prefer to install and use the CLI locally, this quickstart requires Azure CLI version 2.0.30 or later. Run <code>az --version</code> to find the version. If you need to install or upgrade, see Install Azure CLI.
                <h3 id="create-a-resource-group" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-a-resource-group" aria-labelledby="create-a-resource-group"></a>Create a resource group</h3>
                Create a resource group with the az group create command. An Azure resource group is a logical container into which Azure resources are deployed and managed. The following example creates a resource group named <em>myResourceGroup</em> in the <em>eastus</em> location:
                <div class="codeHeader code-title" id="code-try-0" data-bi-name="code-header"><span class="language">Azure CLI</span>
                </div>
                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-azurecli" data-interactive="azurecli" data-author-content="az group create --name myResourceGroup --location eastus
"><span><span class="hljs-keyword">az group create </span><span class="hljs-parameter">--name</span> myResourceGroup <span class="hljs-parameter">--location</span> eastus
</span></blockquote></pre><br>
                <h3 id="create-virtual-machine" class="heading-anchor"><a class="anchor-link docon docon-link" href="#create-virtual-machine" aria-labelledby="create-virtual-machine"></a>Create virtual machine</h3>
                Create a VM with the az vm create command.
                The following example creates a VM named <em>myVM</em> and adds a user account named <em>azureuser</em>. The <code>--generate-ssh-keys</code> parameter is used to automatically generate an SSH key, and put it in the default key location (<em>~/.ssh</em>). To use a specific set of keys instead, use the <code>--ssh-key-values</code> option.
                <div class="codeHeader code-title" id="code-try-1" data-bi-name="code-header"><span class="language">Azure CLI</span>

                </div>
                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-azurecli" data-interactive="azurecli" data-author-content="az vm create \
--resource-group myResourceGroup \
--name myVM \
--image UbuntuLTS \
--admin-username azureuser \
--generate-ssh-keys
"><span><span class="hljs-keyword">az vm create </span>\
<span class="hljs-parameter">--resource-group</span> myResourceGroup \
<span class="hljs-parameter">--name</span> myVM \
<span class="hljs-parameter">--image</span> UbuntuLTS \
<span class="hljs-parameter">--admin-username</span> azureuser \
<span class="hljs-parameter">--generate-ssh-keys</span>
</span></blockquote></pre><br>
                It takes a few minutes to create the VM and supporting resources. The following example output shows the VM create operation was successful.
                <div class="codeHeader code-title" id="code-try-2" data-bi-name="code-header"><span class="language">Output</span></div>
                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-output" data-author-content="{
&quot;fqdns&quot;: &quot;&quot;,
&quot;id&quot;: &quot;/subscriptions/<guid>/resourceGroups/myResourceGroup/providers/Microsoft.Compute/virtualMachines/myVM&quot;,
&quot;location&quot;: &quot;eastus&quot;,
&quot;macAddress&quot;: &quot;00-0D-3A-23-9A-49&quot;,
&quot;powerState&quot;: &quot;VM running&quot;,
&quot;privateIpAddress&quot;: &quot;10.0.0.4&quot;,
&quot;publicIpAddress&quot;: &quot;40.68.254.142&quot;,
&quot;resourceGroup&quot;: &quot;myResourceGroup&quot;
}
">{
"fqdns": "",
"id": "/subscriptions/&lt;guid&gt;/resourceGroups/myResourceGroup/providers/Microsoft.Compute/virtualMachines/myVM",
"location": "eastus",
"macAddress": "00-0D-3A-23-9A-49",
"powerState": "VM running",
"privateIpAddress": "10.0.0.4",
"publicIpAddress": "40.68.254.142",
"resourceGroup": "myResourceGroup"
}
</blockquote></pre><br>
                Note your own <code>publicIpAddress</code> in the output from your VM. This address is used to access the VM in the next steps.
                <div class="alert is-info">
                    <span class="docon docon-status-error-outline" aria-hidden="true"></span> Note: <br>
                    Azure provides an default outbound access IP for Azure Virtual Machines which aren't assigned a public IP address, or are in the backend pool of an internal Basic Azure Load Balancer. The default outbound access IP mechanism provides an outbound IP address that isn't configurable.
                    The default outbound access IP is disabled when a public IP address is assigned to the virtual machine, or the virtual machine is placed in the backend pool of a Standard Load Balancer with or without outbound rules. If a Azure Virtual Network NAT gateway resource is assigned to the subnet of the virtual machine, the default outbound access IP is disabled.
                    Virtual machines created by Virtual Machine Scale sets in Flexible Orchestration mode don't have default outbound access.
                </div>
                <h3 id="open-port-80-for-web-traffic" class="heading-anchor"><a class="anchor-link docon docon-link" href="#open-port-80-for-web-traffic" aria-labelledby="open-port-80-for-web-traffic"></a>Open port 80 for web traffic</h3>
                By default, only SSH connections are opened when you create a Linux VM in Azure. Use az vm open-port to open TCP port 80 for use with the NGINX web server:
                <div class="codeHeader code-title" id="code-try-3" data-bi-name="code-header"><span class="language">Azure CLI</span>

                </div>
                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-azurecli" data-interactive="azurecli" data-author-content="az vm open-port --port 80 --resource-group myResourceGroup --name myVM
"><span><span class="hljs-keyword">az vm open-port </span><span class="hljs-parameter">--port</span> <span class="hljs-number">80</span> <span class="hljs-parameter">--resource-group</span> myResourceGroup <span class="hljs-parameter">--name</span> myVM
</span></blockquote></pre><br>
                <h3 id="connect-to-virtual-machine" class="heading-anchor"><a class="anchor-link docon docon-link" href="#connect-to-virtual-machine" aria-labelledby="connect-to-virtual-machine"></a>Connect to virtual machine</h3>
                SSH to your VM as normal. Replace the IP address in the example with the public IP address of your VM as noted in the previous output:
                <div class="codeHeader code-title" id="code-try-4" data-bi-name="code-header"><span class="language">Bash</span></div>
                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-bash" data-author-content="ssh azureuser@40.68.254.142
"><span>ssh azureuser@40.68.254.142
</span></blockquote></pre><br>
                <h3 id="install-web-server" class="heading-anchor"><a class="anchor-link docon docon-link" href="#install-web-server" aria-labelledby="install-web-server"></a>Install web server</h3>
                To see your VM in action, install the NGINX web server. Update your package sources and then install the latest NGINX package.
                <div class="codeHeader code-title" id="code-try-5" data-bi-name="code-header"><span class="language">Bash</span></div>
                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-bash" data-author-content="sudo apt-get -y update
sudo apt-get -y install nginx
"><span>sudo apt-get -y update
sudo apt-get -y install nginx
</span></blockquote></pre><br>
                When done, type <code>exit</code> to leave the SSH session.
                <h3 id="view-the-web-server-in-action" class="heading-anchor"><a class="anchor-link docon docon-link" href="#view-the-web-server-in-action" aria-labelledby="view-the-web-server-in-action"></a>View the web server in action</h3>
                Use a web browser of your choice to view the default NGINX welcome page. Use the public IP address of your VM as the web address. The following example shows the default NGINX web site:
                <img src="https://docs.microsoft.com/en-us/azure/virtual-machines/linux/media/quick-create-cli/view-the-nginx-welcome-page.png" alt="View the NGINX welcome page" data-linktype="relative-path">
                <h3 id="clean-up-resources" class="heading-anchor"><a class="anchor-link docon docon-link" href="#clean-up-resources" aria-labelledby="clean-up-resources"></a>Clean up resources</h3>
                When no longer needed, you can use the az group delete command to remove the resource group, VM, and all related resources.
                <div class="codeHeader code-title" id="code-try-6" data-bi-name="code-header"><span class="language">Azure CLI</span>

                </div>
                <pre tabindex="0" class="has-inner-focus"><blockquote class="lang-azurecli" data-interactive="azurecli" data-author-content="az group delete --name myResourceGroup
"><span><span class="hljs-keyword">az group delete </span><span class="hljs-parameter">--name</span> myResourceGroup
</span></blockquote></pre><br>
                <h3 id="next-steps" class="heading-anchor"><a class="anchor-link docon docon-link" href="#next-steps" aria-labelledby="next-steps"></a>Next steps</h3>
                In this quickstart, you deployed a simple virtual machine, open a network port for web traffic, and installed a basic web server. To learn more about Azure virtual machines, continue to the tutorial for Linux VMs.
                <div class="nextstepaction">
                    Azure Linux virtual machine tutorials
                </div>

                <!-- </content> -->

                </main>

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