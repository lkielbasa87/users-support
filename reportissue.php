<!DOCTYPE html>
<html>
	<head>
		<title>User's IT Support</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap&subset=latin-ext" rel="stylesheet">
		<link rel="stylesheet" href="style/style.css">
	</head>
	<body>
		<header>
			<div class="logo-bar">
				<a href="reportissue.php">
					<img src="img/logo.png" alt="Logo" width="95" height="70">
					<p>User's IT Support</p>	
				</a>
			</div>
			<div class="top">
				<h1 class="top-header">Something's wrong?</h1>
				<p>Click below and check what's this service for.</p>
				<a href="articles/about.html">Read more</a>
			</div>
			<nav>
				<ul>
					<li><a href="reportissue.php">Start</a></li>
					<li><a href="articles/about.html">About service</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</nav>
		</header>		
		
		<main>
			<section class="section-articles">
				<div class="articles-header">
					<img src="img/articles.png" alt="Articles" width="60" height="62">
					<h1 class="section-header">Useful articles:</h1>
				</div>
				<ul>
					<li><a href="articles/remove_old_emails.html">#How to delete old e-mails from mailbox and regain your mail space?</a><br></li>
					<li><a href="articles/connecting_to_teamviewer.html">#How to allow to connect to you by <em>Team Viewer</em>?</a><br></li>
					<li><a href="articles/vpn_connection.html">#How to establish safe VPN connection for company's purposes?</a><br></li>
				</ul>
			</section>
			
			<section class="section-form">
				<div class="form-header">
					<img src="img/mic.png" alt="Form" width="31" height="62">
					<h1 class="section-header">Report problem:</h1>
				</div>
				<form method="post" action="reportissue_function.php">
					<label for="firstName">Name:</label>
					<input class="basic" type="text" id="firstName" name="firstName" required><br>
					<label for="lastName">Surname:</label>
					<input class="basic" type="text" id="lastName" name="lastName" required><br>
					<label for="email">E-mail address:</label>
					<input class="basic" type="email" id="email" name="email" required><br>
					<label for="topic">Subject:</label>
					<input class="basic" type="text" id="topic" name="topic" required><br>
					<label for="description">Problem description:</label><br>
					<textarea id="description" name="description" required></textarea><br>
					<div class="priority">
						<label for="isUrgent">High priority?</label><br>
						<input class="radio1" type="radio" id="isUrgent" name="isUrgent" value="tak">Yes<br>
						<input class="radio1" type="radio" id="isUrgent" name="isUrgent" value="nie" checked="checked">No<br>
					</div>
					<input class="button" type="submit" name="submit" value="Report problem">
				</form>
			</section>
		</main>

		<footer>
			User's IT Support &copy; All rights reserved.
		</footer>
		
	</body>
</html>