<!DOCTYPE HTML>
<html>
	<head>
		<title>skelJS Example</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,600|Source+Code+Pro" rel="stylesheet" />
         <script src="js/vendor/jquery-1.10.2.min.js"></script>

		 <script src="js/main.js" type="text/javascript"></script>
		 <script src="js/converter.js"></script>

		<!--[if lte IE 8]><script src="html5shiv.js" type="text/javascript"></script><![endif]-->
		<script src="js/skel.min.js"></script>
	</head>
	<body> 
		<div class="container">
			<!-- Header -->
				<div id="header" class="row">
					<div class="4u">
						<h1>Example</h1>
					</div>
					<nav id="nav" class="8u">
						<a href="#">Home</a>
						<a href="#">About Me</a>
						<a href="#">Blog</a>
						<a href="#">Contact</a>
					</nav>
				</div>
			<!-- Hero -->
				<section id="hero">
					<h2>Welcome to the converter</h2>
					
				</section>
			<!-- Features -->
			    
					
				<div class="row">
					<section class="4u">
						<h2>Imperial weight in ounces</h2>
						<input id = "imperialinput" type = "number">
					</section>
					<section class="4u">
						<h2>Metric weight</h2>
						<input id = "metricinput" type = "number">
					</section>
					<section class="4u">
						<h2>Converted Value</h2>
						<button id = "convertbutton">Convert</button>
						<button id="clearbutton">Clear</button>

					</section>
				</div>
			<!-- Main -->
				<div class="row">
					<!-- Content -->
						<section class="8u">
							<h2>Heading</h2>
							<p>Lorem ipsum dolor sit amet sed magna etiam adipiscing elit.
							adipiscing elit nec fringilla urna tempor in. Cras et sodales
							consectetur viverra lorem ipsum. Lorem ipsum dolor sit amet
							sed magna etiam adipiscing elit adipiscing elit nec fringilla
							urna tempor in. Cras et sodales consectetur viverra.</p>
						</section>
					<!-- Sidebar -->
						<section class="4u">
							<h2>Heading</h2>
							<p>Lorem ipsum dolor sit amet sed magna etiam adipiscing elit.
							adipiscing elit nec fringilla urna tempor in. Cras et sodales
							consectetur viverra lorem ipsum.</p>
						</section>
				</div>
			<!-- Footer -->
				<div id="footer">
					&copy; Example. All rights reserved.
				</div>

		</div>
	</body>
</html>
