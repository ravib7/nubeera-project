<!DOCTYPE html>
<html lang="en">

<head>
	<title>NubeEra Core Base Module</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="NubeEra Core Base Module">

	<link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">

	<!-- FontAwesome JS-->
	<script defer src="../../../../assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="../../../../assets/css/theme.css">

	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
	<link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">

</head>

<body>

	<!-- Navigation Bar -->
	<?php require '../../../../templates/navbar.php'; ?>

	<div class="page-header theme-bg-dark py-5 text-center position-relative">
		<div class="theme-bg-shapes-right"></div>
		<div class="theme-bg-shapes-left"></div>
		<div class="container">
			<h1 class="page-heading single-col-max mx-auto">Cloud(Boto3) Using Python</h1>
			<div class="page-intro single-col-max mx-auto">Everything you need to achieve your goals! </div>
			<div class="main-search-box pt-3 d-block mx-auto">
				<form class="search-form w-100">
					<input type="text" placeholder="Search..." onkeyup="showresults()" id="searchbarbox" name="search" class="form-control search-input">

					<button id="clearBtn" class="clear-btn"><i class="fas fa-times"></i></button>
					<i class="fas fa-microphone mic-btn"></i>
					<button type="button" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
				</form>
			</div>
		</div>
	</div>
	<!--//page-header-->

	<ul class="breadcrumb">
		<li><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
		<li><a href="../">Cloud</a></li>
		<li><a href="../">CloudOps</a></li>
		<li>Boto3</li>
	</ul>

	<div class="page-content">
		<div class="container">
			<div class="docs-overview py-5">
				<div class="row justify-content-center">

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<svg class="svg-inline--fa" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<title>Amazon S3</title>
											<path d="M20.913 13.147l.12-.895c.947.576 1.258.922 1.354 1.071-.16.031-.562.046-1.474-.176zm-2.174 7.988a.547.547 0 0 0-.005.073c0 .084-.207.405-1.124.768a10.28 10.28 0 0 1-1.438.432c-1.405.325-3.128.504-4.853.504-4.612 0-7.412-1.184-7.412-1.704a.547.547 0 0 0-.005-.073L1.81 5.602c.135.078.28.154.432.227.042.02.086.038.128.057.134.062.272.122.417.18l.179.069c.154.058.314.114.478.168.043.013.084.029.13.043.207.065.423.127.646.187l.176.044c.175.044.353.087.534.127a23.414 23.414 0 0 0 .843.17l.121.023c.252.045.508.085.768.122.071.011.144.02.216.03.2.027.4.053.604.077l.24.027c.245.026.49.05.74.07l.081.009c.275.022.552.04.83.056l.233.012c.21.01.422.018.633.025a33.088 33.088 0 0 0 2.795-.026l.232-.011c.278-.016.555-.034.83-.056l.08-.008c.25-.02.497-.045.742-.072l.238-.026c.205-.024.408-.05.609-.077.07-.01.141-.019.211-.03.261-.037.519-.078.772-.122l.111-.02c.215-.04.427-.082.634-.125l.212-.047c.186-.041.368-.085.546-.13l.166-.042c.225-.06.444-.122.654-.189.04-.012.077-.026.115-.038a10.6 10.6 0 0 0 .493-.173c.058-.021.114-.044.17-.066.15-.06.293-.12.43-.185.038-.017.079-.034.116-.052.153-.073.3-.15.436-.228l-.976 7.245c-2.488-.78-5.805-2.292-7.311-3a1.09 1.09 0 0 0-1.088-1.085c-.6 0-1.088.489-1.088 1.088 0 .6.488 1.089 1.088 1.089.196 0 .378-.056.537-.148 1.72.812 5.144 2.367 7.715 3.15zm-7.42-20.047c5.677 0 9.676 1.759 9.75 2.736l-.014.113c-.01.033-.031.067-.048.101-.015.028-.026.057-.047.087-.024.033-.058.068-.09.102-.028.03-.051.06-.084.09-.038.035-.087.07-.133.105-.04.03-.074.06-.119.091-.053.036-.116.071-.177.107-.05.03-.095.06-.15.09-.068.036-.147.073-.222.11-.059.028-.114.057-.177.085-.084.038-.177.074-.268.111-.068.027-.13.054-.203.082-.097.036-.205.072-.31.107-.075.026-.148.053-.228.079-.111.035-.233.069-.35.103-.085.024-.165.05-.253.073-.124.034-.258.065-.389.098-.093.022-.181.046-.278.068-.139.032-.287.061-.433.091-.098.02-.191.041-.293.06-.155.03-.32.057-.482.084-.1.018-.198.036-.302.052-.166.026-.342.048-.515.072-.11.014-.213.03-.325.044-.181.023-.372.041-.56.06-.11.012-.218.025-.332.036-.188.016-.386.029-.58.043-.122.009-.24.02-.364.028-.207.012-.422.02-.635.028-.12.005-.234.012-.354.016a35.605 35.605 0 0 1-2.069 0c-.12-.004-.234-.011-.352-.016-.214-.008-.43-.016-.637-.028-.122-.008-.238-.02-.36-.027-.195-.015-.394-.028-.584-.044-.11-.01-.215-.024-.324-.035-.19-.02-.384-.038-.568-.06l-.315-.044c-.176-.024-.355-.046-.525-.073-.1-.015-.192-.033-.29-.05-.167-.028-.335-.055-.494-.086-.096-.018-.183-.038-.276-.056-.151-.032-.305-.062-.45-.095-.09-.02-.173-.043-.26-.064-.138-.034-.277-.067-.407-.102-.082-.022-.157-.046-.235-.069a11.75 11.75 0 0 1-.368-.108c-.075-.024-.141-.049-.213-.073-.11-.037-.223-.075-.325-.113-.067-.025-.125-.051-.188-.077-.096-.038-.195-.076-.282-.115-.06-.027-.11-.054-.166-.08-.08-.039-.162-.077-.233-.116-.052-.028-.094-.055-.142-.084-.063-.038-.13-.075-.185-.113-.043-.029-.075-.058-.113-.086-.048-.037-.098-.073-.139-.11-.032-.029-.054-.057-.08-.087-.033-.035-.069-.07-.093-.104-.02-.03-.031-.058-.046-.086-.018-.035-.039-.068-.049-.102l-.015-.113c.076-.977 4.074-2.736 9.748-2.736zm12.182 12.124c-.118-.628-.84-1.291-2.31-2.128l.963-7.16a.531.531 0 0 0 .005-.073C22.16 1.581 16.447 0 11.32 0 6.194 0 .482 1.581.482 3.851a.58.58 0 0 0 .005.072L2.819 21.25c.071 2.002 5.236 2.75 8.5 2.75 1.805 0 3.615-.188 5.098-.531.598-.138 1.133-.3 1.592-.48 1.18-.467 1.789-1.053 1.813-1.739l.945-7.018c.557.131 1.016.197 1.389.197.54 0 .902-.137 1.134-.413a.956.956 0 0 0 .21-.804Z" />
										</svg>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">S3</span>
								</h5>
								<div class="card-text">
									All Detailed concepts of S3 in Boto3
								</div>
								<div id="contact-popup">
									<a class="card-link-mask" href="topics/s3.php"></a>
								</div>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<img src="https://images.squarespace-cdn.com/content/v1/51814c87e4b0c1fda9c1fc50/1528473310893-RH0HG7R5C0QURMFQJBSU/600px-AWS_Lambda_logo.svg.png" style="width:auto" class="svg-inline--fa">
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">Lambda</span>
								</h5>
								<div class="card-text">
									All Detailed concepts of Lambda in Boto3
								</div>
								<a class="card-link-mask" href="topics/lambda.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<img src="https://cdn.worldvectorlogo.com/logos/aws-ec2.svg" style="width:auto" class="svg-inline--fa">
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">EC2</span>
								</h5>
								<div class="card-text">
									All Detailed concepts of EC2 in Boto3
								</div>
								<a class="card-link-mask" href="topics/ec2.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/AWS_Simple_Icons_Storage_Amazon_EBS.svg/1024px-AWS_Simple_Icons_Storage_Amazon_EBS.svg.png" style="width:auto" class="svg-inline--fa">
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">EBS</span>
								</h5>
								<div class="card-text">
									All Detailed concepts of EBS in Boto3
								</div>
								<a class="card-link-mask" href="topics/ebs.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<img src="https://miro.medium.com/max/2570/1*YcNHxdrbPlV-lWjN_0Ek3g.png" style="width:auto" class="svg-inline--fa">
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">VPC</span>
								</h5>
								<div class="card-text">
									All Detailed concepts of VPC in Boto3
								</div>
								<a class="card-link-mask" href="topics/vpc.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<img src="https://d1.awsstatic.com/icons/jp/rds_icon_concole.fe14dd124ff0ce7cd8f55f63e0112170c35885f1.png" style="width:auto" class="svg-inline--fa">
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">RDS</span>
								</h5>
								<div class="card-text">
									All Detailed concepts of RDS in Boto3
								</div>
								<a class="card-link-mask" href="topics/rds.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<svg class="svg-inline--fa" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<title>Amazon DynamoDB</title>
											<path d="M16.606 20.705v-2.371c-1.263 1.082-3.884 1.795-7.066 1.795-3.184 0-5.805-.714-7.068-1.797v2.369c0 1.168 2.903 2.47 7.068 2.47 4.16 0 7.06-1.3 7.066-2.466zm.001-6.765l.817-.005v.005c0 .517-.258.998-.75 1.441.601.54.75 1.071.75 1.449a1661.7 1661.7 0 0 0 0 3.87c0 1.881-3.389 3.3-7.884 3.3-4.471 0-7.846-1.404-7.88-3.27a583.119 583.119 0 0 1-.003-3.909c.001-.375.15-.9.745-1.437-.592-.538-.743-1.062-.746-1.435v-3.892c.002-.377.153-.903.747-1.438-.593-.54-.744-1.062-.747-1.435 0-1.357-.002-2.735.002-3.897C1.674 1.412 5.056 0 9.54 0c2.159 0 4.233.356 5.689.974l-.315.766c-1.36-.58-3.319-.91-5.374-.91-4.165 0-7.067 1.3-7.067 2.47 0 1.168 2.902 2.47 7.067 2.47.115 0 .222 0 .334-.005l.033.828c-.122.006-.245.006-.367.006-3.184 0-5.805-.714-7.068-1.798v2.38c.005.45.45.843.821 1.093 1.116.736 3.114 1.239 5.34 1.342l-.037.829c-2.254-.105-4.23-.59-5.5-1.332-.318.245-.623.573-.623.952 0 1.168 2.902 2.47 7.067 2.47.411 0 .812-.014 1.203-.042l.06.826c-.41.03-.833.045-1.263.045-3.184 0-5.805-.713-7.068-1.797v2.368c.005.462.449.855.821 1.104 1.275.842 3.67 1.366 6.247 1.366h.182v.83H9.54c-2.62 0-4.99-.507-6.444-1.359-.317.245-.623.574-.623.954 0 1.168 2.902 2.47 7.067 2.47 4.159 0 7.058-1.298 7.066-2.465v-.007c0-.377-.303-.705-.62-.948a5.732 5.732 0 0 1-.662.336l-.316-.764c.3-.128.56-.266.776-.412.376-.254.823-.651.823-1.1zm4.377-6.915h-2.717a.406.406 0 0 1-.332-.173.42.42 0 0 1-.055-.375l1.204-3.597h-5.403l-2.583 4.974h2.623c.128 0 .248.06.325.164a.418.418 0 0 1 .069.36l-2.249 8.365zm1.249-.128l-10.89 11.608a.408.408 0 0 1-.498.075.418.418 0 0 1-.192-.471l2.534-9.426h-2.766a.407.407 0 0 1-.349-.2.418.418 0 0 1-.012-.407l3.014-5.804a.408.408 0 0 1 .36-.222h6.22c.132 0 .256.065.332.174a.422.422 0 0 1 .055.374l-1.204 3.598h3.1c.164 0 .31.099.375.251a.422.422 0 0 1-.08.45zM3.085 20.723a8.107 8.107 0 0 0 1.72.72l.233-.794a7.32 7.32 0 0 1-1.546-.645zm1.72-5.984l.233-.795a7.262 7.262 0 0 1-1.546-.646l-.407.72a8.051 8.051 0 0 0 1.72.72zm-1.72-7.427l.407-.719c.418.244.939.462 1.546.646l-.232.794a8.046 8.046 0 0 1-1.72-.72Z" />
										</svg>
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">DynamoDB</span>
								</h5>
								<div class="card-text">
									All Detailed concepts of DynamoDB in Boto3
								</div>
								<a class="card-link-mask" href="topics/dydb.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

					<div class="col-12 col-lg-4 py-3">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title mb-3">
									<span class="theme-icon-holder card-icon-holder mr-2">
										<img src="https://codeopinion.com/wp-content/uploads/2019/08/aws-cloudwatch-logo-png-transparent.png" style="width:auto" class="svg-inline--fa">
									</span>
									<!--//card-icon-holder-->
									<span class="card-title-text">CloudWatch</span>
								</h5>
								<div class="card-text">
									All Detailed concepts of CloudWatch in Boto3
								</div>
								<a class="card-link-mask" href="topics/cloudwatch.php"></a>
							</div>
							<!--//card-body-->
						</div>
						<!--//card-->
					</div>
					<!--//col-->

				</div>
				<!--//row-->
			</div>
			<!--//container-->
		</div>
		<!--//container-->
	</div>
	<!--//page-content-->

	<?php require "../../../../templates/footer_outer.php" ?>

	<!-- Javascript -->

	<script type="text/javascript" src="lib/vanilla-tilt.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
	<script src="https://www.nubeera.com/js/navmenu.js"></script>
</body>

</html>