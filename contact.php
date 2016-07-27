<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Share</title>

		<!-- Bootstrap Core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="56036659220-88s4nnijqfp77hk0oiifvf1kmr720umn.apps.googleusercontent.com">

		<!-- Theme CSS -->
		<link href="css/clean-blog.min.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	</head>

	<body>

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						Menu <i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="index.php">Hi There!</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li>
							<a href="#post.php">Analysis</a>
						</li>
						<li>
							<a href="contact.php">Share</a>
						</li>

					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>

		<!-- Page Header -->
		<!-- Set your background image for this header on the line below. -->
		<header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<div class="page-heading">
							<h1>Placement Experience</h1>
							<hr class="small">
							<span class="subheading">Share experience, be helpful.</span>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Main Content -->
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<p>
						<b>Please share your placement experience!</b>
					</p>
					<!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
					<!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
					<!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
					<form name="sentMessage" id="contactForm"  action="insert.php" method="post" >
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Name</label>
								<input type="text" class="form-control" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Email Address</label>
								<input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Phone Number</label>
								<input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Branch</label>
								<input type="text" class="form-control" placeholder="Branch" name="branch" id="branch" required data-validation-required-message="Please enter your Branch.">
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Company</label>
								<input type="text" class="form-control" placeholder="Company" name="company" id="company" required data-validation-required-message="Please enter your Company.">
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Pointer Criteria</label>
								<input type="text" class="form-control" placeholder="Pointer Criteria" name="criteria" id="criteria" required data-validation-required-message="Please enter Pointer Criteria.">
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Package</label>
								<input type="text" class="form-control" placeholder="Package" name="package" id="package" required data-validation-required-message="Please enter Package.">
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Your Pointer</label>
								<input type="text" class="form-control" placeholder="Your Pointer" name="pointer" id="pointer" required data-validation-required-message="Please enter your Pointer.">
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<h3>Selection Process</h3>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Aptitude Round</label>
								<textarea rows="5" class="form-control" placeholder="Aptitude Round" name="aptitude" id="aptitude" required data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Technical Interview</label>
								<textarea rows="5" class="form-control" placeholder="Technical Interview" name="technical" id="technical" required data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>HR Interview</label>
								<textarea rows="5" class="form-control" placeholder="HR Interview" name="hr" id="hr" required data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Other</label>
								<textarea rows="5" class="form-control" placeholder="Other" name="other" id="other" required data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<br>
						<div id="success"></div>
						<div class="row">
							<div class="form-group col-xs-12">
								<button type="submit" class="btn btn-default">
									Submit
								</button>
							</div>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		<hr>

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<ul class="list-inline text-center">
							<li>
								<a href="#"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-twitter fa-stack-1x fa-inverse"></i> </span> </a>
							</li>
							<li>
								<a href="#"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-facebook fa-stack-1x fa-inverse"></i> </span> </a>
							</li>
							<li>
								<a href="#"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-github fa-stack-1x fa-inverse"></i> </span> </a>
							</li>
						</ul>
						<p class="copyright text-muted">
							Copyright &copy; Your Website 2016
						</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery -->
		<script src="vendor/jquery/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

		<!-- Contact Form JavaScript -->
		<script src="js/jqBootstrapValidation.js"></script>
	

		<!-- Theme JavaScript -->
		<script src="js/clean-blog.min.js"></script>

	</body>

</html>
