<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Storage Blob in Azure</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Storage Blob in Azure">

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
                <strong class="px-2" style="font-size: 1.125rem;">Storage Blob</strong><br><br>
                <ul>
                    <li><a href="#about-blob-storage">About Blob storage</a></li>
                    <li><a href="#about-azure-data-lake-storage-gen2">About Azure Data Lake Storage Gen2</a></li>
                    <li><a href="#blob-storage-resources">Blob storage resources</a></li>
                    <li><a href="#move-data-to-blob-storage">Move data to Blob storage</a></li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Storage Blob</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Storage Blob</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h2 id="introduction-to-azure-blob-storage">Introduction to Azure Blob storage</h2>

                <!-- <content> -->
                Azure Blob storage is Microsoft's object storage solution for the cloud. Blob storage is optimized for storing massive amounts of unstructured data. Unstructured data is data that doesn't adhere to a particular data model or definition, such as text or binary data.
                <h3 id="about-blob-storage" class="heading-anchor"><a class="anchor-link docon docon-link" href="#about-blob-storage" aria-labelledby="about-blob-storage"></a>About Blob storage</h3>
                Blob storage is designed for:
                <ul>
                    <li>Serving images or documents directly to a browser.</li>
                    <li>Storing files for distributed access.</li>
                    <li>Streaming video and audio.</li>
                    <li>Writing to log files.</li>
                    <li>Storing data for backup and restore, disaster recovery, and archiving.</li>
                    <li>Storing data for analysis by an on-premises or Azure-hosted service.</li>
                </ul>
                Users or client applications can access objects in Blob storage via HTTP/HTTPS, from anywhere in the world. Objects in Blob storage are accessible via the Azure Storage REST API, Azure PowerShell, Azure CLI, or an Azure Storage client library. Client libraries are available for different languages, including:
                <ul>
                    <li>.NET</li>
                    <li>Java</li>
                    <li>Node.js</li>
                    <li>Python</li>
                    <li>Go</li>
                    <li>PHP</li>
                    <li>Ruby</li>
                </ul>
                <h3 id="about-azure-data-lake-storage-gen2" class="heading-anchor"><a class="anchor-link docon docon-link" href="#about-azure-data-lake-storage-gen2" aria-labelledby="about-azure-data-lake-storage-gen2"></a>About Azure Data Lake Storage Gen2</h3>
                Blob storage supports Azure Data Lake Storage Gen2, Microsoft's enterprise big data analytics solution for the cloud. Azure Data Lake Storage Gen2 offers a hierarchical file system as well as the advantages of Blob storage, including:
                <ul>
                    <li>Low-cost, tiered storage</li>
                    <li>High availability</li>
                    <li>Strong consistency</li>
                    <li>Disaster recovery capabilities</li>
                </ul>
                <h3 id="blob-storage-resources" class="heading-anchor"><a class="anchor-link docon docon-link" href="#blob-storage-resources" aria-labelledby="blob-storage-resources"></a>Blob storage resources</h3>
                Blob storage offers three types of resources:
                <ul>
                    <li>The <strong>storage account</strong></li>
                    <li>A <strong>container</strong> in the storage account</li>
                    <li>A <strong>blob</strong> in a container</li>
                </ul>
                The following diagram shows the relationship between these resources.
                <img src="https://docs.microsoft.com/en-us/azure/storage/blobs/media/storage-blobs-introduction/blob1.png" alt="Diagram showing the relationship between a storage account, containers, and blobs" data-linktype="relative-path">
                <h3 id="storage-accounts" class="heading-anchor"><a class="anchor-link docon docon-link" href="#storage-accounts" aria-labelledby="storage-accounts"></a>Storage accounts</h3>
                A storage account provides a unique namespace in Azure for your data. Every object that you store in Azure Storage has an address that includes your unique account name. The combination of the account name and the Azure Storage blob endpoint forms the base address for the objects in your storage account.
                For example, if your storage account is named <em>mystorageaccount</em>, then the default endpoint for Blob storage is:

                <pre tabindex="0" class="has-inner-focus"><blockquote data-author-content="http://mystorageaccount.blob.core.windows.net
">http://mystorageaccount.blob.core.windows.net
</blockquote></pre>
                <h3 id="containers" class="heading-anchor"><a class="anchor-link docon docon-link" href="#containers" aria-labelledby="containers"></a>Containers</h3>
                A container organizes a set of blobs, similar to a directory in a file system. A storage account can include an unlimited number of containers, and a container can store an unlimited number of blobs.
                <div class="alert is-info">
                    <span class="docon docon-status-error-outline" aria-hidden="true"></span> Note
                    The container name must be lowercase.
                </div>
                <h3 id="blobs" class="heading-anchor"><a class="anchor-link docon docon-link" href="#blobs" aria-labelledby="blobs"></a>Blobs</h3>
                Azure Storage supports three types of blobs:
                <ul>
                    <li><strong>Block blobs</strong> store text and binary data. Block blobs are made up of blocks of data that can be managed individually. Block blobs can store up to about 190.7 TiB.</li>
                    <li><strong>Append blobs</strong> are made up of blocks like block blobs, but are optimized for append operations. Append blobs are ideal for scenarios such as logging data from virtual machines.</li>
                    <li><strong>Page blobs</strong> store random access files up to 8 TiB in size. Page blobs store virtual hard drive (VHD) files and serve as disks for Azure virtual machines.
                        <h3 id="move-data-to-blob-storage" class="heading-anchor"><a class="anchor-link docon docon-link" href="#move-data-to-blob-storage" aria-labelledby="move-data-to-blob-storage"></a>Move data to Blob storage</h3>
                        A number of solutions exist for migrating existing data to Blob storage:
                        <ul>
                            <li><strong>AzCopy</strong> is an easy-to-use command-line tool for Windows and Linux that copies data to and from Blob storage, across containers, or across storage accounts.</li>
                            <li>The <strong>Azure Storage Data Movement library</strong> is a .NET library for moving data between Azure Storage services. The AzCopy utility is built with the Data Movement library. </li>
                            <li><strong>Azure Data Factory</strong> supports copying data to and from Blob storage by using the account key, a shared access signature, a service principal, or managed identities for Azure resources.</li>
                            <li><strong>Blobfuse</strong> is a virtual file system driver for Azure Blob storage. You can use blobfuse to access your existing block blob data in your Storage account through the Linux file system.</li>
                            <li><strong>Azure Data Box</strong> service is available to transfer on-premises data to Blob storage when large datasets or network constraints make uploading data over the wire unrealistic. Depending on your data size, you can request Azure Data Box Disk, Azure Data Box, or Azure Data Box Heavy devices from Microsoft. You can then copy your data to those devices and ship them back to Microsoft to be uploaded into Blob storage.</li>
                            <li>The <strong>Azure Import/Export service</strong> provides a way to import or export large amounts of data to and from your storage account using hard drives that you provide.</li>
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