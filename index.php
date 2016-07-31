<?php
require_once ("config.php");
$db_handle = new ConfigController();
$result = (mysql_query("select * from experience order by pid desc limit 3"));
?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>VJTI Placement Blog</title>

		<!-- Bootstrap Core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Theme CSS -->
		<link href="css/clean-blog.min.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.2.6.pack.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<style>
			.show_more_main {
margin: 15px 25px;
}
.show_more {
background-color: #f8f8f8;
background-image: -webkit-linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);
background-image: linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);
border: 1px solid;
border-color: #d3d3d3;
color: #333;
font-size: 12px;
outline: 0;
}
.show_more {
cursor: pointer;
display: block;
padding: 10px 0;
text-align: center;
font-weight:bold;
}
.loding {
background-color: #e9e9e9;
border: 1px solid;
border-color: #c6c6c6;
color: #333;
font-size: 12px;
display: block;
text-align: center;
padding: 10px 0;
outline: 0;
font-weight:bold;
}
.loding_txt {
background-image: url(loading_16.gif);
background-position: left;
background-repeat: no-repeat;
border: 0;
display: inline-block;
height: 16px;
padding-left: 20px;
}
		</style>
		<script>

			$(document).ready(function() {
				$(document).on('click', '.show_more', function() {
					var ID = $(this).attr('id');
					$('.show_more').hide();
					$('.loding').show();
										//alert("yetoy"+ID);

					$.ajax({
						type : "POST",
						url : "load.php",
						data : 'id=' + ID,
						success : function(html) {
							//alert(html);
							$('#show_more_main' + ID).remove();
							$('.vegla').append(html);
						}
					});
				});
			});
			function loadmore(pid) {
				window.location = "post.php?pid=" + pid;
			}
		</script>
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
		<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<div class="site-heading">
							<h1>VJTI Blog</h1>
							<hr class="small">
							<span class="subheading">Recently Shared Placement Experince</span>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Main Content -->
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<div class="vegla">

					<?php
					
					  if(!empty($result)) {
					while($row = mysql_fetch_array($result)){
						$tutorial_id=$row["pid"];
					?>
					<div class="post-preview">
						<a href="#" onclick="loadmore(<?php echo $row["pid"]; ?>)"> <h2 id="title-<?php echo $row["pid"]; ?>" class="post-title"> <?php echo $row["company"]; ?> </h2> <h3 class="post-subtitle"> <?php echo $row["name"]; ?></h3> </a>
						<p class="post-meta">
							Posted on <?php echo $row["timee"]; ?>
						</p>
						
					</div>
					<hr>
					<?php
					}
					}
					?>
					<!-- Pager -->
					   <div class="show_more_main" id="show_more_main<?php echo $tutorial_id; ?>">
					      
					       <a id="<?php echo $tutorial_id; ?>"  class="show_more" title="Load more posts" onclick="abc(<?php echo $tutorial_id; ?>)">Older Posts</a>
					      
					       <span class="loding" style="display: none;"><span class="loding_txt">Loading….</span></span>
					    </div>
						
							
					    
					 
			
					</div>
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
		<script src="js/contact_me.js"></script>

		<!-- Theme JavaScript -->
		<script src="js/clean-blog.min.js"></script>

	</body>

</html>
