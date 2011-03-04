<?php
function top() {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Snowrdr</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link href="styles.css" type="text/css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Cabin:bold' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.1.0/prototype.js" type="text/javascript"></script>
		<script src="js.js" type="text/javascript"></script>
	</head>

	<body>
		<div id="bigcontainer">
			<div id="header">
				<div id="loginlinks">
				<!-- placeholder-->
					<p><a onclick="showLogIn();">Log In</a> or <a onclick="showSignUp();">Sign Up</a> now.</p>
						<div id="login" style="display: none;">
							<form>
								Username: <input type="text" name="username" size="10"/>
								Password: <input type="text" name="password" size="10"/>
								<input onclick="showSuccessfulLogIn();" id="submitlogin" type="submit" value="Log In" />
								<button onclick="hideLogin();">Close</button>
							</form>
						</div>
						<div id="loginsuccessful" style="display: none;">
							<p>You have been successfully logged in!</p>
							<p>Shred on.</p>
							<button onclick="hideSuccessfulLogIn();">Close</button>
						</div>
						<!--
					<form>
						Search: <input id="search" type="text" name="search" size="10"/>
						<input id="submitsearch" type="submit" value="Search" />
					</form> -->
				</div>

				<div id="logo">
					<img src="images/logo.jpg" alt="snowrdr logo"/>
				</div>

				<div id="topbanner">
					<img src="images/topbanner.jpg" alt="top banner" />
				</div>

				<div id="mainnav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>Browse Resorts</li>
						<li>Videos</li>
						<li>Pictures</li>
						<li>Forum</li>
					</ul>
				</div>
			</div>
<?php
}
?>
