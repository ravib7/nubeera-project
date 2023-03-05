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
                <li class="breadcrumb-item active"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item active"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item active"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item active"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Azure Functions</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">
                <h2>Serverless apps in Kubernetes</h3>
                    Azure Functions provides <em>serverless computing</em> as
                    Functions-as-a-Service, which provides a&nbsp;platform
                    for you to develop, run, and manage application functionalities without the complexity of building and maintaining the infrastructure
                    typically associated with developing and launching an app.
                        Azure Functions executes code to respond to changes in data, responding to messages, running on a schedule, or as the result of an HTTP request.<br><br>
                        Typically, you just deploy the function into an existing base container provided by Microsoft. But if you specific needs, such as specific version, you can deploy your Function app as a custom container into the Azure Functions service.<br><br>
                        As an alternative to Azure service, you can deploy Azure Functions into your own Kubernetes deployment and run Functions along side your other Kubernetes deployments.<br><br>
                        With Azure Functions service you no longer need to manage disk capacity or memory. The compute requirements are are handled automatically. You pay for what and when you use it, rather than fixed sizes and memory required by other Azure services.<br><br>
                        You can use a Docker container to deploy your function app to Azure Functions. You can also deploy Azure Functions app into your own Kubernetes.<br><br>
                        In this article, you learn about the key features of Azure Functions with containers.<br><br>
                        Let’s get started.<br><br>
                        <span id="more-577"></span><br><br>
                        Functions helps you process bulk data, integrating systems, working with IoT, and building simple API and microservices. At its core, code is running triggered by specific events.<br><br>
                        The following conceptual diagram shows the component parts of an Azure function.<br><br>
                        <img loading="lazy" class="aligncenter wp-image-609 size-medium" src="https://clouddayscom.files.wordpress.com/2020/11/bf06a-building-serveless-apps-with-azure-functions-02.png?w=272&amp;h=92" alt="" width="272" height="92" srcset="https://clouddayscom.files.wordpress.com/2020/11/bf06a-building-serveless-apps-with-azure-functions-02.png?w=272&amp;h=92&amp;zoom=2 2x" src-orig="https://clouddayscom.files.wordpress.com/2020/11/bf06a-building-serveless-apps-with-azure-functions-02.png?w=300&amp;h=102" scale="2"><br><br>
                        Functions can be created either directly on Azure Portal or in Visual Studio and are executed when specific events, <em>triggers, </em>occur.&nbsp; A trigger causes a function to run.<br><br>
                        <h3>Function trigger</h3>
                        A trigger defines how a function is invoked and a function must have exactly one trigger. Triggers have associated data, which is often provided as the payload of the function.<br><br>
                        Here are some available triggers:<br><br>
                        <table style="width:80%;border-spacing:5px;">
                            <tbody>
                                <tr>
                                    <th>Trigger</th>
                                    <th>Code executes on</th>
                                </tr>
                                <tr>
                                    <td>HTTP</td>
                                    <td>New HTTP request</td>
                                </tr>
                                <tr>
                                    <td>Timer</td>
                                    <td>Timer schedule</td>
                                </tr>
                                <tr>
                                    <td>Blob</td>
                                    <td>New blob added to an Azure storage container</td>
                                </tr>
                                <tr>
                                    <td>Queue</td>
                                    <td>New message arrives in Azure storage queue</td>
                                </tr>
                                <tr>
                                    <td>Service Bus</td>
                                    <td>Nes message arrives on a Service bug queue or topic</td>
                                </tr>
                                <tr>
                                    <td>Event Hub</td>
                                    <td>New message delivered to an Event Hub</td>
                                </tr>
                            </tbody>
                        </table><br><br>
                        The following illustration shows how an API call function triggers an Azure Function that uploads some data into a storage blob. When completed, an Azure Function does one additional processing and adds the uploaded filename to a storage table, and then responds by returning a URL to the user.<br><br>
                        <img data-attachment-id="606" data-permalink="https://azuredays.com/2020/11/17/serverless-apps-in-kubernetes-azure-functions/functions_scenario_description/" data-orig-file="https://clouddayscom.files.wordpress.com/2020/11/306a0-functions_scenario_description.png" data-orig-size="624,365" data-comments-opened="0" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="functions_scenario_description" data-image-description="" data-image-caption="" data-medium-file="https://clouddayscom.files.wordpress.com/2020/11/306a0-functions_scenario_description.png?w=300" data-large-file="https://clouddayscom.files.wordpress.com/2020/11/306a0-functions_scenario_description.png?w=624" class="aligncenter wp-image-606 size-full" src="https://clouddayscom.files.wordpress.com/2020/11/306a0-functions_scenario_description.png?w=748" alt="" srcset="https://clouddayscom.files.wordpress.com/2020/11/306a0-functions_scenario_description.png 624w, https://clouddayscom.files.wordpress.com/2020/11/306a0-functions_scenario_description.png?w=150 150w, https://clouddayscom.files.wordpress.com/2020/11/306a0-functions_scenario_description.png?w=300 300w" sizes="(max-width: 624px) 100vw, 624px"><br><br>
                        <h3>Function bindings</h3>
                        A <em>binging</em> is an optional way to connect to another resource.<br><br>
                        Triggers and bindings let you avoid hardcoding access to other services. Your function receives data (for example, the content of a queue message) in function parameters. You send data (for example, to create a queue message) by using the return value of the function.<br><br>
                        You can mix and match different bindings to suit your needs. Bindings are optional and a function might have one or multiple input and/or output bindings.<br><br>
                        <em>Binding</em> to a function is a way of declaratively connecting another resource to the function; bindings may be connected as <em>input bindings</em>, <em>output bindings</em>, or both. Data from bindings is provided to the function as parameters.<br><br>
                        Input bindings are used for data received by the function. Output bindings are used to send data either using the return result or specific collections.<br><br>
                        A function can have multiple input and output bindings.<br><br>
                        <h3>Key scenarios</h3>
                        A series of templates is available to get you started with key scenarios including:<br><br>
                        <ul>
                            <li><strong>HTTP</strong>: Run code based on&nbsp;HTTP requests</li>
                            <li><strong>Timer</strong>: Schedule code to&nbsp;run at predefined times</li>
                            <li><strong>Azure Cosmos DB</strong>: Process&nbsp;new and modified Azure Cosmos DB documents</li>
                            <li><strong>Blob storage</strong>: Process&nbsp;new and modified Azure Storage blobs</li>
                            <li><strong>Queue storage</strong>: Respond to&nbsp;Azure Storage queue messages</li>
                            <li><strong>Event Grid</strong>: Respond to&nbsp;Azure Event Grid events via subscriptions and filters</li>
                            <li><strong>Event Hub</strong>: Respond to&nbsp;high-volumes of Azure Event Hub events</li>
                            <li><strong>Service Bus Queue</strong>: Connect to other Azure or on-premises services by&nbsp;responding Service Bus queue messages</li>
                            <li><strong>Service Bus Topic</strong>: Connect other Azure services or on-premises services by&nbsp;responding to Service Bus topic messages</li>
                        </ul>
                        <h3>Durable Functions</h3>
                        When you want to provide stateful functions in a serverless environment, use <em>durable functions</em>. Durable functions currently support:<br><br>
                        <ul>
                            <li>C#</li>
                            <li>JavaScript</li>
                            <li>Python</li>
                            <li>F#</li>
                            <li>PowerShell</li>
                        </ul>
                        The following illustration shows the conceptual pattern of durable Azure functions:<br><br>
                        <img loading="lazy" data-attachment-id="607" data-permalink="https://azuredays.com/2020/11/17/serverless-apps-in-kubernetes-azure-functions/durable_functions/" data-orig-file="https://clouddayscom.files.wordpress.com/2020/11/07b08-durable_functions.png" data-orig-size="800,259" data-comments-opened="0" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="durable_functions" data-image-description="" data-image-caption="" data-medium-file="https://clouddayscom.files.wordpress.com/2020/11/07b08-durable_functions.png?w=300" data-large-file="https://clouddayscom.files.wordpress.com/2020/11/07b08-durable_functions.png?w=748" class="aligncenter wp-image-607 size-medium" src="https://clouddayscom.files.wordpress.com/2020/11/07b08-durable_functions.png?w=300&amp;h=97" alt="" width="300" height="97" srcset="https://clouddayscom.files.wordpress.com/2020/11/07b08-durable_functions.png?w=300&amp;h=97 300w, https://clouddayscom.files.wordpress.com/2020/11/07b08-durable_functions.png?w=600&amp;h=194 600w, https://clouddayscom.files.wordpress.com/2020/11/07b08-durable_functions.png?w=150&amp;h=49 150w" sizes="(max-width: 300px) 100vw, 300px"><br><br>
                        Define stateful workflows by writing <em>orchestrator functions</em>&nbsp;and stateful entities by writing&nbsp;<em>entity functions</em>&nbsp;using the Azure Functions programming model.<br><br>
                        A flow with Azure Durable Functions consists of three&nbsp; types of Azure functions: <em>Starter</em>,&nbsp;<em>Orchestrator&nbsp;</em>and&nbsp;<em>Activity&nbsp;</em>functions.<br><br>
                        <div>
                            <ul>
                                <li><b>Starter Function</b>: Simple Azure Function that starts the Orchestration by calling the Orchestrator function. It uses an&nbsp;<code>OrchestrationClient</code>&nbsp;binding</li>
                                <li><b>Orchestrator Function</b>: Defines a stateful workflow in code and invokes the activity functions. Sleeps during activity invocation and replays when wakes up. The code in an orchestrator function&nbsp;<b>MUST be deterministic</b>&nbsp;because during the flow the code will be executed again and again till all activity functions finish. You declare a function as an orchestrator by using a&nbsp;<code>DurableOrchestrationContext</code></li>
                                <li><b>Activity Functions</b>: Simple Azure Functions that are part of the workflow and can receive or return data. An Activity function uses an&nbsp;<code>ActivityTrigger</code>&nbsp;so that can be invoked by the orchestrator</li>
                            </ul>
                        </div>
                        There are some coding constraints in using durable functions. For example, orchestrator functions must be deterministic: an orchestrator function will be replayed multiple times, and it must produce the same result each time.<br><br>
                        <h3>Durable application patterns</h3>
                        The primary use case for Durable Functions is simplifying complex, stateful coordination requirements in serverless applications. The following sections describe typical application patterns that can benefit from Durable Functions:<br><br>
                        <ul>
                            <li>Function chaining</li>
                            <li>Fan-out/fan-in</li>
                            <li>Async HTTP APIs</li>
                            <li>Monitoring</li>
                            <li>Human interaction</li>
                            <li>Aggregator (stateful entities)</li>
                        </ul>
                        Let’s take one of the examples, <em>function chaining</em>. The following diagram provided by Microsoft, shows a sequence of functions executes in a specific order.<br><br>
                        <a href="https://docs.microsoft.com/en-us/azure/azure-functions/durable/durable-functions-overview?tabs=csharp#chaining"><img loading="lazy" data-attachment-id="615" data-permalink="https://azuredays.com/image_thumb-png-69/" data-orig-file="https://clouddayscom.files.wordpress.com/2014/12/image_thumb24.png" data-orig-size="160,149" data-comments-opened="0" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="image_thumb.png" data-image-description="" data-image-caption="" data-medium-file="https://clouddayscom.files.wordpress.com/2014/12/image_thumb24.png?w=160" data-large-file="https://clouddayscom.files.wordpress.com/2014/12/image_thumb24.png?w=160" class="aligncenter size-medium wp-image-615" src="https://clouddayscom.files.wordpress.com/2020/11/d4bbd-function-chaining.png?w=300&amp;h=53" alt="" width="300" height="53" scale="1"></a><br><br>
                        You can implement control flow by using normal imperative coding constructs. Code executes from the top down. The code can involve existing language control flow semantics, like conditionals and loops. You can include error handling logic in&nbsp;<code>try</code>/<code>catch</code>/<code>finally</code>&nbsp;blocks.<br><br>
                        <h3>Logic App Integration</h3>
                        Azure Functions integrates with Azure Logic Apps in the Logic Apps Designer. This integration lets you use the computing power of Functions in orchestrations with other Azure and third-party services.<br><br>
                        <h3>Deploy a container into Azure Functions</h3>
                        The Azure Functions Base images are provided for:.<br><br>
                        <ul>
                            <li>Azure Functions for .NET Core</li>
                            <li>Azure Functions for Java</li>
                            <li>Azure Functions for Node</li>
                            <li>Azure Functions for Python</li>
                            <li>Azure Functions for PowerShell</li>
                        </ul>
                        If that meets your needs, you do not need to a custom container. But you may require a specific language version or have a specific dependency or configuration that isn’t provided by the built-in image. In that case, you need a custom container.<br><br>
                        Deploying your function code in a custom Linux container requires Premium plan&nbsp;or a&nbsp;Dedicated (App Service) plan&nbsp;hosting.<br><br>
                        For a tutorial, see Create a function on Linux using a custom container. The tutorial includes examples for C#, Java, JavaScript, PowerShell, Python, and TypeScript.<br><br>
                        <h3>Function app scaling in Kubernetes</h3>
                        If your application exposes and http interface, you can use Kubernetes Event Driven Autoscaler (KEDA) to deploy your Azure Function app into Kubernetes with autoscaling. Azure Functions is unique that its runtime is open-source. The runtime and your code can therefore be deployed to a&nbsp;custom container or deployed on your own infrastructure including Kubernetes.<br><br>
                        <strong>KEDA</strong>&nbsp;is a single-purpose and lightweight component that can be added into any Kubernetes cluster. KEDA works alongside standard Kubernetes components like the&nbsp;Horizontal Pod Autoscaler and can extend functionality without overwriting or duplication. With KEDA you can explicitly map the apps you want to use event-driven scale, with other apps continuing to function.<br><br>
                        <em>Scalers</em> represent event sources that KEDA can scale based on:<br><br>
                        <ul>
                            <li>ActiveMQ Artemis</li>
                            <li>Apache Kafka</li>
                            <li>AWS CloudWatch</li>
                            <li>AWS Kinesis Stream</li>
                            <li>AWS SQS Queue</li>
                            <li>Azure Blob Storage</li>
                            <li>Azure Event Hubs</li>
                            <li>Azure Storage Queue</li>
                            <li>CPU</li>
                            <li>Cron</li>
                            <li>External</li>
                            <li>External Pus</li>
                            <li>Google Cloud Platform Pub/Sub</li>
                            <li>Huawei Coudeve</li>
                            <li>IBM MQ</li>
                            <li>Liiklus Topic</li>
                            <li>Memory</li>
                            <li>Metrics API</li>
                            <li>MySQL</li>
                            <li>NATS Streaming</li>
                            <li>Postgress SQL</li>
                            <li>Prometheus</li>
                            <li>Rabbit MQ Series</li>
                            <li>Redis Lists</li>
                            <li>Redis Streams</li>
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