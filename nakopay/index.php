<html>
	<head>
		<title>Nakopay | Welcome!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
		<link href="style.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
	</head>
	<body>
		<div class="landing">
			<header>
				<label class="hamburger" for="nav-toggle"></label>
				<input id="nav-toggle" type="checkbox" class="hidden" />
				<nav>
					<ul>
						<li><a href="http://localhost/pms/nakopay/index.php">Home</a></li>
						<li><a href="login.php" id="btnLanding">Log In</a></li>
						<li><a href="register.php" id="btnLanding">Register</a></li>
					</ul>
				</nav>
			</header>
			<br/>
			<div class="left">
				<h1>Welcome to Nakopay!</h1><br>
				<h1><i>"The new era of internet banking"</i></h1>
				<br/>
				<span>
					We provide you country's most secured internet banking system.
				</span>
			</div>
			<div class="right">
				<img src="src/landing-1.svg"/>
			</div>
			<div style="clear:both"></div>
		</div>
		<div class="landing-desc">
			<center>
				<h1>Why Choose Us :</h1>
				<br/>
				<br/>
				<div class="left">
					<i class="fas fa-laptop fa-4x"></i><br/>
					<b>Ease Of Transacting On The Internet</b>
					<br/><br/><br/><br/>
					<small>
						With our service, all transactions can be easily done, even in an instant!
					</small>
				</div>
				<div class="left">
					<i class="fas fa-key fa-4x"></i><br/>
					<b>Trusted And Secured</b>
					<br/><br/><br/><br/>
					<small>
						We got you covered! We also care about your privacy, which is why we provide the most reliable security on our system!
					</small>
				</div>
			</center>
		</div>
		<center>
		<?php
	        include("footer-nakopay.php");
	    ?></center><br><br>
	</body>
</html>