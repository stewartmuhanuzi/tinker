<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tinker Technologies - Software Company</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<style>
	{
		box-sizing: border-box;
		margin: 0;
		padding:0;
		font-family: "Nunito", sans-serif;
		scroll-behavior: smooth;
	}
	.navbar{
		background:#131313;
		height: 80px;
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: 1.2rem;
		position: sticky;
		top: 0;
		z-index: 999;
		font-family: Nunito;
	}
	.navbar_container{
		display: flex;
		justify-content: space-between;
		height: 80px;
		z-index: 1;
		width: 100%;
		max-width: 1300px;
		margin: 0 auto;
		padding: 0 50px;
	}

	#navbar_logo{
		background-color: #ff8177;
		background-image: linear-gradient(to top, #ff0844 0%, #ffb199 100%);
		background-size: 100%;
		-webkit-background-clip:text;
		-moz-background-clip:text;
		-webkit-text-fill-color:transparent;
		-moz-text-fill-color:transparent;
		display: flex;
		align-items: center;
		cursor: pointer;
		text-decoration:none;
		font-size: 2rem;
	}
	.navbar_menu{
		display: flex;
		align-items: center;
		list-style: none;
	}
	.navbar_item{
		height: 80px;
	}
	.navbar_links{
		color: #fff;
		display: flex;
		align-items: center;
		justify-content: center;
		width: 125px;
		text-decoration:none;
		height: 100%;
		transition: all 0.3s ease;
	}
	.navbar_links:hover{
		color: #9528fc;transition: all 0.3s ease;
	}

	@media screen and (max-width: 960px){
		.navbar_container{
			display: flex;
			justify-content: space-between;
			height: 80px;
			z-index: 1;
			width: 100%;
			max-width: 1300px;
			padding: 0;
		}
		.navbar_menu{
			display: grid;
			grid-template-columns: auto;
			margin: 0;
			width: 100%;
			position: absolute;
			top: -1000px;
			opacity: 1;
			transition: all 0.5s ease;
			z-index: -1;
		}
	}
</style>
<body>
	<!--Navbar section-->
	<nav class="navbar">
		<div class="navbar_container">
			<a href="/home" id="navbar_logo">Tinker</a>
			<div class="navbar_toggle" id="mobile-menu">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div>
			<ul class="navbar_menu">
				<li class="navbar_item">
					<a href="/home" class="navbar_links" id="home-page">Home</a>
				</li>				
				<li class="navbar_item">
					<a href="/about" class="navbar_links" id="about-page">About Us</a>
				</li>
				<li class="navbar_item">
					<a href="/services" class="navbar_links" id="services-page">Services</a>
				</li>
				<li class="navbar_item">
					<a href="/contact" class="navbar_links" id="contact-page">Contact Us</a>
				</li>
			</ul>
		</div>
		
	</nav>
</body>

</html>