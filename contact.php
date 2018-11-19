<!-- 
	Orla Keating
	15205679
	http://csserver.ucd.ie/~15205679/archery/contact.php
 -->

<!DOCTYPE html>

<html lang="en">
	<head>
		<?php include('form.php'); ?>
		<link rel="stylesheet" type="text/css" href="archery.css"/>
		<script type="text/javascript" src="archery.js"></script>
		<meta charset ="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact</title>
	</head>
	
	<body class="bear-bg">
	
		<nav class="header" id="navbar">
			<a href="home.html" style="padding: 0px;">
			<img src="target_header.png" alt="home" border="0" class="headerimage"></a>
			
				<a href="home.html">Home</a>
				<a href="contact.php" class="activehead">Contact</a>
				<a href="faq.html">FAQ</a>
				<a href="gallery.html">Gallery</a>
				<a href="links.html">Links</a>
				<a href="constitution.html" >Constitution</a>
				<a href="javascript:void(0);" class="icon" onclick="dropdown()">Menu</a>
			
		</nav>
		
		<div class = "main">
			<div class = "boxes">
				<p><br>Please see our <a href="faq.html">FAQ</a> page before sending a message</p>
			</div>
			<br>
			<br>
			<div class="boxes">
				<form class = "formpadding" id = "contact" action = "<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "post">

					<label for="fname">Name:<br></label>
					<input type="text" id="name" name="name" placeholder="Your name..">
					<span class ="error"><?= $name_error ?></span>
					
					<br>
					<label for="email">Email:<br></label>
					<input type="text" id="email" name="email" placeholder="Your email..">
					<span class ="error"><?= $email_error ?></span>
					
					<br>			
					<label for="comment">Comment:<br></label>
					<textarea id="comment" name="comment" placeholder="Write something.." style="height:200px"></textarea>
				
					<br>
					<input name="submit" id="contactsubmit" type="submit" value="Submit">
					<div class="success"><?= $success ?></div>
				</form>
			</div>
		</div>
	</body>
</html>