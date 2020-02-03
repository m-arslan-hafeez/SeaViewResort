<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Website Developer Muhammad Arslan Hafeez</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.html"><img src="images/logo.png" alt="LOGO" height="150" width="150"></a>
				</div>
				<div id="navigation">
					<ul>
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						<li>
							<a href="news.html">News</a>
						</li>
						<li class="selected">
							<a href="contact.php">Contact</a>
						</li>
						<li>
							<a href="login.php">Login</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body">
							<h1>Contact</h1>
							<form action="" method="POST">
								<table>
									<tbody>
										<tr>
											<td>Name:</td>
											<td><input type="text" value="" name="name" ></td>
										</tr> <tr>
											<td>Email:</td>
											<td><input type="email" value="" name="email" ></td>
										</tr> <tr>
											<td>Subject:</td>
											<td><input type="text" value="" name="subject" ></td>
										</tr> <tr>
											<td type="txtarea">Message:</td>
											<td><textarea name="message"></textarea></td>
										</tr> <tr>
											<td></td>
											<td><input type="submit" name="submit" value="Send" ></td>
										</tr>
									</tbody>
								</table>
							</form>
							<h2>SeaView Resort</h2>
							<p>
								<span>Address:</span> House #331 Block Z Scheme 3
							</p>
							<p>
								<span>Telephone Number:</span> 0092-308-8384344
							</p>
							<p>
								<span>Fax Number:</span> 0068-58-72761
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="navigation">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="news.html">News</a>
					</li>
					<li class="active">
						<a href="contact.php">Contact</a>
					</li>
					<li>
							<a href="login.php">Login</a>
						</li>
				</ul>
				<div id="connect">
					<a href="http://pinterest.com/arslan" target="_blank" class="pinterest"></a> <a href="http://www.facebook.com/001a24s26" target="_blank" class="facebook"></a> <a href="http://www.twitter.com/arslan" target="_blank" class="twitter"></a> <a href="http://www.googleplus.com/arslan" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
				© 2018 by Muhammad Arslan Hafeez. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
$conn=mysqli_connect("localhost", "root", "root", "web_database");
$query=" INSERT INTO `resort_contact`(`name`,`email`,`subject`, `message`) 
VALUES ('$name', '$email', '$subject', '$message')";
$result=mysqli_query($conn, $query);
if($result){
	echo "Data Inserted ";
}
else{
	echo " Query Error";
}
}
?> 