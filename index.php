<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Muhammad K Nasikin</title>
	<meta name="title" content="Muhammad Khoirun Nasikin">
	<meta name="description" content="My name is Muhammad Khoirun Nasikin, a customer service professional in the IT with a deep passion and enthusiasm for WordPress. With a keen interest in the development and improvement of websites, I always strives to create sites that are not only visually appealing but also functional and user-friendly. Mastery in web hosting and domain management has equipped me with strong technical skills to effectively manage and optimize website performance.">
	<meta name="keywords" content="Muhammad Khoirun Nasikin">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta property="og:title" content="Muhammad K Nasikin">
	<meta property="og:site_name" content="Muhammad K Nasikin">
	<meta property="og:url" content="https://nasikin.web.id">
	<meta property="og:description" content="My name is Muhammad Khoirun Nasikin, a customer service professional in the IT with a deep passion and enthusiasm for WordPress. With a keen interest in the development and improvement of websites, I always strives to create sites that are not only visually appealing but also functional and user-friendly. Mastery in web hosting and domain management has equipped me with strong technical skills to effectively manage and optimize website performance.">
	<meta property="og:type" content="profile">
	<meta property="og:image" content="https://nasikin.web.id/assets/profile.png">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" type="text/css" href="core/main.css">
	<link rel="stylesheet" type="text/css" href="core/gallery.css">
	<link rel="stylesheet" type="text/css" href="core/skills.css">
	<link rel="stylesheet" type="text/css" href="core/mobile.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
	 <nav class="menu">
	 	<button class="menus active" onclick="openMenu(event, 'about')">About Me</button>
	 	<button class="menus" onclick="openMenu(event, 'experience')">Experience</button>
	 	<button class="menus" onclick="openMenu(event, 'showcase')">Showcase</button>
	 	<button class="menus" onclick="openMenu(event, 'skills')">Skill</button>
	 	<button class="menus" onclick="openMenu(event, 'contact')">Contact Me</button>
 	</nav>
<body>
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
</body>
<footer>
	<span class="quote">"There's no perfect system was made by humans. If your sistem never error, either no one using your system or the vulnerable remain undiscovered" - </span>
	<script type="text/javascript" src="core/main.js"></script>
</footer>
</html>