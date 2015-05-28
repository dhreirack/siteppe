<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Arcana by HTML5 UP</title>
		<meta http-equiv="content-type" content="public/text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="public/js/jquery.min.js"></script>
		<script src="public/js/jquery.dropotron.min.js"></script>
		<script src="public/js/skel.min.js"></script>
		<script src="public/js/skel-layers.min.js"></script>
		<script src="public/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="public/css/skel.css" />
			<link rel="stylesheet" href="public/css/style.css" />
			<link rel="stylesheet" href="public/css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="public/css/ie/v8.css" /><![endif]-->
	</head>
	<body>
		 
		<!-- Header -->
			<div id="header">
				
								<!-- Logo -->
					<h1>
					<img src="public/images/logom2.png" style="width:100px;height:100px;margin-right:10px;" alt="logo"/>

					<a href="index.html" id="logo">Amalthée <em>Marielle</em></a></h1>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.php">News</a></li>
							<li>
								<a href="">Histoire</a>
								<ul>
									<li><a href="#">Lorem dolor</a></li>
									
									<li>
										<a href="">Submenu</a>
										<ul>
											<li><a href="#">Lorem dolor</a></li>
											
										</ul>
									</li>
									<li><a href="#">Veroeros feugiat</a></li>
								</ul>
							</li>
							<li><a href="left-sidebar.html">Notre But</a></li>
							<li><a href="left-sidebar.html">Presse</a></li>
							<li><a href="right-sidebar.html">Adhesion</a></li>
							<li><a href="two-sidebar.html">Galerie</a></li>
							<li><a href="index.php?controller=contact">Contacter</a></li>
						</ul>
					</nav>

			</div>

		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Je vous souhaite le bienvenue <em>
					
				</header>
			</section>
			

		
	</body>
	<div id="footer">
		
		<?php
    
    
    
    session_start();
    					  if (isset($_GET["controller"]))
                          {
                            $controller=$_GET["controller"];
                         
                            switch ($controller) {
                                case "contact":
                                    include("public/pages/contact.php");
                                    break;
                             
                            }
                          }
                           else {
                              include("../../index.php");
                          }
                          
     ?>
       </div>                   

</html>