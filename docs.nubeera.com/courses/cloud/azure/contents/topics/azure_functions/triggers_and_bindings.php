<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Azure Functions</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Azure Functions">

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
                <strong class="px-2" style="font-size: 1.125rem;">Azure Functions</strong><br><br>
                <ul>
                    <li><a href="index.php">Serverless apps in Kubernetes</a></li>
                    <li><a href="triggers_and_bindings.php">Triggers and Bindings</a></li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Azure Functions</h1>

            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Azure Functions</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h2> Triggers and Bindings</h2>
                <h3>Introduction</h3>
                Azure Functions is a serverless compute service that lets you run event-triggered code without having to explicitly provision or manage infrastructure, in other words, Microsoft’s Azure Functions is a modern serverless architecture, offering event-driven cloud computing that is easy for developers to use. This blog is about Azure Functions triggers and bindings.
                <h3>Azure Function Triggers</h3>
                Triggers are what cause a function to run. A trigger defines how a function is invoked and a function must have exactly one trigger. Triggers have associated data, which is often provided as the payload of the function.
                <h3>Types of Triggers</h3>
                <br><br><img loading="lazy" width="656" height="344" src="https://www.serverless360.com/wp-content/uploads/2020/01/1.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.jpg" alt="Azure Functions Triggers Types" class="alignnone size-full wp-image-80218170" srcset="https://www.serverless360.com/wp-content/uploads/2020/01/1.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.jpg 656w, https://www.serverless360.com/wp-content/uploads/2020/01/1.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-300x157.jpg 300w" sizes="(max-width: 656px) 100vw, 656px">
                Now let’s see some of the most common types of triggers available in Azure:
                <h3>Timer Trigger</h3>
                This trigger is called on a predefined schedule. We can set the time for execution of the Azure Function using this trigger.
                <h3>Blob Trigger</h3>
                This trigger will get fired when a new or updated blob is detected. The blob contents are passed on as input to the function.
                <h3>Event Hub Trigger</h3>
                This trigger is used for the application instrumentation, the user experience, workflow processing, and the&nbsp;Internet of Things&nbsp;(&nbsp;IoT). This trigger will get fired when any events are delivered to an Azure Event Hub.
                <h3>HTTP Trigger</h3>
                This trigger gets fired when the HTTP request comes.
                <h3>Queue Trigger</h3>
                This trigger gets fired when any new messages come in an Azure Storage Queue.
                <h3>Generic Webhook</h3>
                This trigger gets fired when the Webhook HTTP requests come from any service that supports Webhooks.
                <h3>GitHub Webhook</h3>
                This trigger is fired when an event occurs in your GitHub repositories. The GitHub repository supports events such as Branch created, delete branch, issue comment, and Commit comment.
                <h3>Service Bus Trigger</h3>
                This trigger is fired when a new message comes from a service bus queue or topic.
                <!-- Error, Ad is not available at this time due to schedule/geolocation restrictions! -->
                <h3>Example of Creating a Simple Scheduled Trigger in Azure</h3>
                Consider a simple example where we must display a “good morning” message on the screen every day at 8 AM. This situation is related to time, so we need to use a schedule trigger. Let’s start creating a function with the schedule trigger:
                <ol>
                    <li>Log in to the Azure Portal</li>
                    <li>Click on the top left + icon | Compute | Function App<br><br>
                        <img loading="lazy" width="1146" height="876" src="https://www.serverless360.com/wp-content/uploads/2020/01/2.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png" alt="Simple Scheduled Trigger" class="alignnone size-full wp-image-80218171" srcset="https://www.serverless360.com/wp-content/uploads/2020/01/2.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png 1146w, https://www.serverless360.com/wp-content/uploads/2020/01/2.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-300x229.png 300w, https://www.serverless360.com/wp-content/uploads/2020/01/2.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-1024x783.png 1024w, https://www.serverless360.com/wp-content/uploads/2020/01/2.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-768x587.png 768w" sizes="(max-width: 1146px) 100vw, 1146px"><br><br>
                        <img loading="lazy" width="606" height="864" src="https://www.serverless360.com/wp-content/uploads/2020/01/3.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png" alt="Simple Scheduled Trigger" class="alignnone size-full wp-image-80218172" srcset="https://www.serverless360.com/wp-content/uploads/2020/01/3.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png 606w, https://www.serverless360.com/wp-content/uploads/2020/01/3.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-210x300.png 210w" sizes="(max-width: 606px) 100vw, 606px"><br><br>
                    </li>
                    <li>Once we click on Function App, the next screen will appear, where we must provide a unique Function App name, Subscription, Resource Group, Hosting Plan, Location, Storage, and then click on the Create button</li>
                    <li>Once we click on the Create button, Azure will start deploying this function. Once this function is deployed, it will be seen in the notifications, as shown in the following screenshot<br><br>
                        <img loading="lazy" width="419" height="165" src="https://www.serverless360.com/wp-content/uploads/2020/01/4.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png" alt="Azure Functions Triggers" class="alignnone size-full wp-image-80218173" srcset="https://www.serverless360.com/wp-content/uploads/2020/01/4.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png 419w, https://www.serverless360.com/wp-content/uploads/2020/01/4.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-300x118.png 300w" sizes="(max-width: 419px) 100vw, 419px">
                    </li>
                    <li>Click on Notifications and check the Functions details and add the trigger:
                        <br><br><img loading="lazy" width="1360" height="623" src="https://www.serverless360.com/wp-content/uploads/2020/01/5.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png" alt="Azure Functions Triggers" class="alignnone size-full wp-image-80218174" srcset="https://www.serverless360.com/wp-content/uploads/2020/01/5.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png 1360w, https://www.serverless360.com/wp-content/uploads/2020/01/5.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-300x137.png 300w, https://www.serverless360.com/wp-content/uploads/2020/01/5.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-1024x469.png 1024w, https://www.serverless360.com/wp-content/uploads/2020/01/5.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-768x352.png 768w" sizes="(max-width: 1360px) 100vw, 1360px">
                    </li>
                    <li>To add a trigger in this function, click on the + icon next to Functions and then click on In-Portal to code in the Azure portal itself</li>
                    <li>Now we must select the desired template from the available templates:
                        <br><br><img loading="lazy" width="1399" height="778" src="https://www.serverless360.com/wp-content/uploads/2020/01/6.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png" alt="Azure Function Triggers" class="alignnone size-full wp-image-80218175" srcset="https://www.serverless360.com/wp-content/uploads/2020/01/6.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png 1399w, https://www.serverless360.com/wp-content/uploads/2020/01/6.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-300x167.png 300w, https://www.serverless360.com/wp-content/uploads/2020/01/6.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-1024x569.png 1024w, https://www.serverless360.com/wp-content/uploads/2020/01/6.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-768x427.png 768w, https://www.serverless360.com/wp-content/uploads/2020/01/6.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-1038x576.png 1038w" sizes="(max-width: 1399px) 100vw, 1399px">
                    </li>
                    <li>Scroll down and type the trigger name and schedule. The Schedule value is a six-field CRON expression. Click on the Create button:
                        By providing 0 0/5 * * * *, the function will run every 5 minutes from the first run.
                        <br><br><img loading="lazy" width="502" height="351" src="https://www.serverless360.com/wp-content/uploads/2020/01/7.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png" alt="Azure Functions Triggers" class="alignnone size-full wp-image-80218176" srcset="https://www.serverless360.com/wp-content/uploads/2020/01/7.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png 502w, https://www.serverless360.com/wp-content/uploads/2020/01/7.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-300x210.png 300w" sizes="(max-width: 502px) 100vw, 502px">
                    </li>
                    <li>Once we click on the Create button, we will see the template code on the screen where we can code. Whatever action we want to perform, we must write it here. Now write the code and click on the Save and Run button</li>

                </ol>
                <!-- Error, Ad is not available at this time due to schedule/geolocation restrictions! -->
                <h3>Event Hub Trigger</h3>
                Event hubs are created to help us with the challenge of handling a huge amount of event-based messaging. The idea is that if we have apps or devices that publish many events in a very short duration (for example, a real-time voting system), then event hubs can be the place where we can send the event.
                Event Hubs will create a stream of all the events which can be processed at some point in different ways. An event hub trigger is used to respond to an event sent to an event hub event stream.
                The following diagram shows how a trigger works with an&nbsp;<strong>Event Hub</strong>:
                <br><br><img loading="lazy" width="710" height="245" src="https://www.serverless360.com/wp-content/uploads/2020/01/8.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png" alt="Azure Event Hub Trigger" class="alignnone size-full wp-image-80218177" srcset="https://www.serverless360.com/wp-content/uploads/2020/01/8.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png 710w, https://www.serverless360.com/wp-content/uploads/2020/01/8.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-300x104.png 300w" sizes="(max-width: 710px) 100vw, 710px">
                <h3>Service bus Trigger</h3>
                The service bus is used to provide interaction between services or applications run in the cloud with other services or applications. The service bus trigger is used to give the response to messages which come from the service bus queue or topic.
                We have two types of service bus triggers:
                <ul>
                    <li><strong>Service bus queue trigger</strong>: A queue is basically for first-in-first-out messages. When a message comes from the service bus, the service bus queue trigger gets fired and the Azure Function is called. In the Azure Function, we can process the message and then deliver it.</li>
                    <li><strong>Service bus topic trigger</strong>: The topic is useful for scaling to numbers of recipients.</li>
                </ul>

                <h2>Azure Function Bindings</h2>
                A binding is a connection to data within your function. Bindings are optional and come in the form of input and output bindings. An input binding is the data that your function receives. An output binding is the data that your function sends.


                <blockquote>
                    Unlike a trigger, a function can have multiple input and output bindings.
                </blockquote>


                Binding to a function is a way of declaratively connecting another resource to the function; bindings may be connected as&nbsp;<em>input bindings</em>,&nbsp;<em>output bindings</em>, or both. Data from bindings is provided to the function as parameters. You can mix and match different bindings to suit your needs. Bindings are optional and a function might have one or multiple input and/or output bindings.
                Triggers and bindings let you avoid hardcoding access to other services. Your function receives data (for example, the content of a queue message) in function parameters. You send data (for example, to create a queue message) by using the return value of the function.
                In .NET, the parameter type defines the data type for input data. For instance, use&nbsp;string&nbsp;to bind to the text of a queue trigger, a byte array to read as binary and a custom type to de-serialize to an object.

                <h3>Binding direction</h3>
                All triggers and bindings have a&nbsp;direction&nbsp;property in the&nbsp;function.json&nbsp;file:
                <ul>
                    <li>For triggers, the direction is always&nbsp;in</li>
                    <li>Input and output bindings use&nbsp;inand&nbsp;out</li>
                    <li>Some bindings support a special direction&nbsp;in-out. If you use&nbsp;in-out, only the&nbsp;<strong>Advanced editor</strong> is available via the&nbsp;<strong>Integrate</strong>&nbsp;tab in the portal.</li>
                </ul>
                When you use&nbsp;attributes in a class library&nbsp;to configure triggers and bindings, the direction is provided in an attribute constructor or inferred from the parameter type.
                <h3>Supported Bindings</h3>
                This table shows the bindings that are supported in the major versions of the Azure Functions runtime:
                <br><br><img loading="lazy" width="867" height="908" src="https://www.serverless360.com/wp-content/uploads/2020/01/9.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png" alt="Supported Bindings" class="alignnone size-full wp-image-80218178" srcset="https://www.serverless360.com/wp-content/uploads/2020/01/9.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS.png 867w, https://www.serverless360.com/wp-content/uploads/2020/01/9.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-286x300.png 286w, https://www.serverless360.com/wp-content/uploads/2020/01/9.AZURE-FUNCTIONS-TRIGGERS-AND-BINDINGS-768x804.png 768w" sizes="(max-width: 867px) 100vw, 867px"><br><br>
                In C# and other .NET languages, you can use an imperative binding pattern, as opposed to the declarative bindings in&nbsp;<em>function.json</em>&nbsp;and attributes. Imperative binding is useful when binding parameters need to be computed at runtime rather than design time.
                <!-- Error, Ad is not available at this time due to schedule/geolocation restrictions! -->
                <h3>Azure Functions management with Serverless360</h3>
                As we know the Azure Function App contains any number of functions, Serverless360 has the capability to view their properties including their binding details.
                <br><br><img loading="lazy" width="1367" height="623" src="https://www.serverless360.com/wp-content/uploads/2020/01/10-Serverless360-management-with-Azure-Functions.png" alt="Azure Functions management with Serverless360" class="alignnone size-full wp-image-80218286" srcset="https://www.serverless360.com/wp-content/uploads/2020/01/10-Serverless360-management-with-Azure-Functions.png 1367w, https://www.serverless360.com/wp-content/uploads/2020/01/10-Serverless360-management-with-Azure-Functions-300x137.png 300w, https://www.serverless360.com/wp-content/uploads/2020/01/10-Serverless360-management-with-Azure-Functions-1024x467.png 1024w, https://www.serverless360.com/wp-content/uploads/2020/01/10-Serverless360-management-with-Azure-Functions-768x350.png 768w" sizes="(max-width: 1367px) 100vw, 1367px">
                <h3>Invocation Logs</h3>
                Accessing the Invocation Logs of the Functions is a significant capability of Serverless360 with respect to Azure Function App management. One shall get a quick summary of the Function invocations based on the success or failure of the invocation. Filtering the invocation logs by date is also possible to view the invocations on a specific day.<br><br>
                <br><br><img loading="lazy" width="1368" height="612" src="https://www.serverless360.com/wp-content/uploads/2020/01/11-detect-Azure-FUnctions-failure-in-Serverless360.png" alt="Detect Azure Functions failure in Serverless360" class="alignnone size-full wp-image-80218287" srcset="https://www.serverless360.com/wp-content/uploads/2020/01/11-detect-Azure-FUnctions-failure-in-Serverless360.png 1368w, https://www.serverless360.com/wp-content/uploads/2020/01/11-detect-Azure-FUnctions-failure-in-Serverless360-300x134.png 300w, https://www.serverless360.com/wp-content/uploads/2020/01/11-detect-Azure-FUnctions-failure-in-Serverless360-1024x458.png 1024w, https://www.serverless360.com/wp-content/uploads/2020/01/11-detect-Azure-FUnctions-failure-in-Serverless360-768x344.png 768w" sizes="(max-width: 1368px) 100vw, 1368px">
                <h3>Detect Failure in Azure Function Invocations</h3>
                Watch monitor in Serverless360 can help detect the occurrence of a specific errors in the selected Azure Functions of an Azure Function App. This monitor can inform the stakeholders on the error within 5 minutes of the occurrence of the error with all necessary details required to restore the business.

                <blockquote>
                    Serverless360 helps to manage Azure functions and view their properties including binding details.
                </blockquote>

                <h3>Conclusion</h3>
                Selecting appropriate triggers, input and output bindings for your Azure Function is indeed important to get the function definition right. This blog has covered all the basics of Azure Function triggers and bindings to get started.

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