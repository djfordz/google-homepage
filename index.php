<!DOCTYPE html>
<html lang="en">
	<head>
		<title>The Odin Project | Google Home Page</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="A simple copy of the Google homepage built from scratch">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
	<main id="page">
		<header id="banner" class="container">
			<nav id="nav-top" class="nav" navigation="banner">
			<ul>
				<li><a href="#name">+David</a></li>
				<li><a href="#gmail">Gmail</a></li>
				<li><a href="#Images">Images</a></li>
				<li><a href="#apps"><i class="fa fa-th fa-lg"></i></a></li>
				<li><a href="#notifactions"><i class="fa fa-bell fa-lg"></i></a></li>
				<li><button id="share">Share</button></li>
				<li><a href="#avatar"><img src="http://www.gravatar.com/avatar/<?php echo md5( strtolower( trim( "MyEmailAddress@example.com " ) ) ); ?>?f=y&s=33"></a></li>
			</ul>
			</nav>
		</header>
			<section id="logo" class="middle">
				<div id="logo-main">
					<h1>G</h1><h1>o</h1><h1>o<h1>g</h1><h1>l</h1><h1>e</h1>
				</div>
					<div id="search-bar" rows="1" cols="55" maxlength="50"><i class="fa fa-microphone fa-sm"></i></div>
					<button id="search" form='search-form'>Google Search</button>
					<button id="lucky">I'm Feeling Lucky</button>
			</section>
		
		<footer id="footer" class="container">
			<nav id="nav-footer" class="nav">
				<ul>
					<li><a href="#advertising">Advertising</a></li>
					<li><a href="#business">Business</a></li>
					<li><a href="#about">About</a></li>
				</ul>
				<ul>
					<li><a href="#privacy">Privacy &amp; Terms</a></li>
					<li><a href="#settings">Settings</a></li>
				</ul>
			</nav>
		</footer>
	</main>
	</body>
	<script type="text/javascript"></script>
</html>