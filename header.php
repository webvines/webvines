<?php require "config.php"; ?>
<html>	
<head>
	<title>Frontend | Fullstack developer</title>

	<!-- BOOTSTRAP CDN LINK -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo LINK_BASE_URL . "css/style.css"?>">

	<!-- GOOGLE FONTS CSS LINKS -->
	<link href='https://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>	
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Stardos+Stencil" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<link href="<?php echo LINK_BASE_URL . "img/icons/favicon.ico" ?>" rel="shortcut icon" >

	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>

<body>
	<div class="container">	

		<div class="row">

			<div class="col-md-12">

				<!-- SR LOGO -->
				<div class="logo-container">
					<div class="logo-content">
						<span id="logo-slide" class="sr-logo"></span>					
					</div>				
														
				</div>

				<!-- MENU HAMBURGER -->
				<div class="hamburger-container hidden-desktop">
						<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true" title="More" onclick="openNav()"></span>
				</div>

				<div id="mySideNav" class="sidenav hidden-desktop">	
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<a href="<?php echo BASE_URL; ?>"><span class="glyphicon glyphicon-home"></span> Home</a>
					<a href="<?php echo BASE_URL . "portfolio"?>"><span class="glyphicon glyphicon-picture"></span> Portfolio</a>
					<!-- <a href="#projects"><span class="glyphicon glyphicon-tasks"></span> Projects</a> -->
					<a href="<?php echo BASE_URL . "downloads/satej-rajam-cv.pdf" ?>" target="_blank"><span class="glyphicon glyphicon-download"></span> Download CV</a>
					<!-- <a href="usefull"><span class="glyphicon glyphicon-info-sign"></span> How To</a> -->
				</div>

				<?php require "sidebar.php"; ?>
