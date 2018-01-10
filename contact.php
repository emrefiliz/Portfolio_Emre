<?php
	if(isset($_POST['submit'])){
		$to = "emre@emrefiliz.com";
		$from = $_POST['email'];
		$fullname = $_POST['fullname'];
		$subject = "A new contact for porfolio";
		$message = "A message from: " . $fullname
					. "\n\n Message" . $_POST['message']
					. "\n\n Telephone" . $_POST['telephone'];


		$headers = "From: " . $from;

		mail($to,$subject,$message,$headers);

		redirect_to("result.html");


	}

			function redirect_to($location){
				if($location != NULL){
					header("Location: {$location}");
					exit;
		}
}
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Emre Filiz</title>
	<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="styles/reset.css">
	<link rel="stylesheet" href="styles/main.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
</head>

<body>

	<h1 class="hidden">Menu</h1>
	<div id="container">
		<div class="row">
			<div class="small-12 large-2 columns">
				<img data-interchange="[images/emrfiliz_logo.jpg, small], [images/emrfiliz_logo.jpg, large]" alt="Emre Filiz Logo" class="logo">
			</div>

			<div class="small-12 large-8 large-offset-2 columns">
				<div class="title-bar" id="toper" data-responsive-toggle="mainmenu" data-hide-for="medium">
					<button class="menu-icon float-right" type="button" data-toggle="mainmenu"></button>
				</div>

				<div class="top-bar" id="mainmenu">
					<div class="top-bar-left">
						<ul class="dropdown menu" data-dropdown-menu>

							<li>
								<ul class="dropdown menu" data-dropdown-menu>
									<li><a href="index.html">Home</a></li>
									<li><a href="work.html">Works</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</li>
							<li><a href="index.html">Home</a></li>
							<li><a href="work.html">Works</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>

				</div>

			</div>
		</div>

		<main>


			<div class="row">
				<div class="columns large-6 medium-6 medium-centered small-12 small-centered large-centered">
					<div id="ContactWrapper">
						<form id="ContactArea" method="POST" action="">
							<h2 class="hidden">Reg Form</h2>
							<p id="ContactText"> Please send me your message.</p>
							<label for="name"> Name: </label>

							<input type="text" class="RD" required id="fullname" name="fullname" size="30" placeholder="please enter your name">

							<label for="name"> E-mail address: </label>

							<input type="text" class="RD" required id="email" name="email" size="30" placeholder="please enter your e-mail address">

							<label for="name"> Telephone number </label>

							<input type="text" class="RD" required id="telephone" name="telephone" size="30" placeholder="please enter your telephone#">

							<label for="comments"> Your Message: </label>

							<textarea type="comments" class="RD" id="message" name="message" required cols="100" rows="12"> </textarea>

							<input type="submit" required id="submit" name="submit" value="submit" class="float-right">
						</form>

					</div>
				</div>
			</div>

			<footer>
				<section>
					<h2 class="hidden">footer</h2>
					<img data-interchange="[images/footer_3.jpg, small], [images/footer_1.jpg, large]" alt="Emre Filiz � 2018. All Rights Reserved.">
				</section>

				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="work.html">Works</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</footer>
		</main>

	</div>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
	<script>$(document).foundation();</script>
	<script src="js/main.js"></script>

</body>
</html>
