<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Muhammad K Nasikin</title>
	<meta name="title" content="Muhammad Khoirun Nasikin">
	<meta name="description" content="My name is Muhammad Khoirun Nasikin, a customer service professional in the IT with a deep passion and enthusiasm for WordPress. With a keen interest in the development and improvement of websites, I always strives to create sites that are not only visually appealing but also functional and user-friendly. Mastery in web hosting and domain management has equipped me with strong technical skills to effectively manage and optimize website performance.">
	<!-- Meta -->
	<meta name="keywords" content="Muhammad Khoirun Nasikin">
	<meta name="robots" content="index, follow">
	<meta name="language" content="English">
	<meta property="og:title" content=Muhammad Khoirun Nasikin>
	<meta property="og:site_name" content=Muhammad Khoirun Nasikin>
	<meta property="og:url" content=https://nasikin.web.id>
	<meta property="og:description" content=My name is Muhammad Khoirun Nasikin, a customer service professional in the IT with a deep passion and enthusiasm for WordPress. With a keen interest in the development and improvement of websites, I always strives to create sites that are not only visually appealing but also functional and user-friendly. Mastery in web hosting and domain management has equipped me with strong technical skills to effectively manage and optimize website performance.>
	<meta property="og:type" content=profile>
	<meta property="og:image" content=https://nasikin.web.id/img/profile.webp>
	<!-- Style -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'" />
	<link rel="stylesheet" type="text/css" href="core/main.css" >
	<link rel="stylesheet" type="text/css" href="core/gallery.css" media="print" onload="this.media='all'">
	<link rel="stylesheet" type="text/css" href="core/skills.css" media="print" onload="this.media='all'">
	<link rel="stylesheet" type="text/css" href="core/mobile.css" media="print" onload="this.media='all'">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
</head>
<body>
	 <nav class="menu">
	 	<button class="menus active" onclick="openMenu(event, 'about')">About Me</button>
	 	<button class="menus" onclick="openMenu(event, 'experience')">Experience</button>
	 	<button class="menus" onclick="openMenu(event, 'showcase')">Showcase</button>
	 	<button class="menus" onclick="openMenu(event, 'skills')">Skill</button>
	 	<button class="menus" onclick="openMenu(event, 'contact')">Contact Me</button>
 	</nav>
 <div class="container content" id="about">
 	<?php require_once('parts/about.php'); ?>
 </div>
 <!-- Experience -->
 <div class="container content" id="experience">
 	<?php require_once('parts/experience.php'); ?>
 </div>
 <!-- Showcase -->
  <div class="container content" id="showcase">
 	<?php require_once('parts/showcase.php'); ?>
 </div>
 <!-- Skills -->
 <div class="container content" id="skills">
 	<?php require_once('parts/skills.php'); ?>
 </div>
 <!-- Contact -->
  <div class="container content" id="contact">
 	<?php require_once('parts/contact.php'); ?>
 </div>
<footer>
	<span class="quote">"There's no perfect system was made by humans. If your sistem never error, either no one using your system or the vulnerable remain undiscovered" - </span>
	<script src="core/main.js" defer></script>
</footer>
</body>
</html>