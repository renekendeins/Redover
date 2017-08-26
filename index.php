<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		
		<link rel="icon" type="favicon" href="img/redover.png"">
		<title>Redover - LogIn</title>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<style>
			@import url('https://fonts.googleapis.com/css?family=Lato');
		</style>
	</head>
	<body>
	<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('location:redover.php');
	}

	 ?>
		<style>
			li{
				margin:20px;
				max-width: 100%;
			}
			li > input{
				width: 50%;
				height: 30px;
				padding-left:5px;
			}
			*{
				font-family: 'Lato', sans-serif;
			}
		</style>
		<div style="text-align: center; padding-top: 5%;">
			<img src="img/redover.png" style="max-width:200px" title=Redover>
		</div>
		<div class="divLogin">
			<form method="post" action="php/access.php">
				<ul id='registryTable' style="list-style: none;text-align:center;" class="txt-center">
					<li><input id="signupUser" type="text" name="username" onchange="validateSignup('0')" placeholder="Username"></li>
					<li><input id="signupMail" type="text" name="email" onchange="validateSignup('0')" onchange="validateMail('signupMail')" placeholder="Email  (example@redover.com)"></li>
					<li><input id="password" type="password" name="password" onchange="validateSignup('0')" placeholder="Password "></li>
					<li><input id="repeatPassword" type="password" name="verPassword" class="margin-bottom-20" onchange="validateSignup('0')" placeholder="Repeat password"></li>
					<li style="max-width: 50%;margin: 0 auto;">
						<input type="button" id="btn-signup" name="registry" value="Access" style="cursor: pointer; width: 50%;float:left;margin-left: 5px;border: none;background-color: #3897f0;font-size: 17px;color: white;" onclick="validateSignup('1')" >
						<span style="float:right;margin-right:5px">¿Have an account?<a id='login' href='#' style='margin-left: 10px'> Log in </a></span>
					</li>					
				</ul>
				<ul id='loginTable' style="list-style: none;text-align:center; display: none" class="txt-center">
					<li><input id="signupUser" type="text" name="username" onchange="validateSignup('0')" placeholder="Username"></li>
					<li><input id="password" type="password" name="password" onchange="validateSignup('0')" placeholder="Password "></li>

					<li style="max-width: 50%;margin: 0 auto;">
						<input type="submit" id="btn-signup" name="submitSignup" value="Access" style="cursor: pointer; width: 50%;float:left;margin-left: 5px;border: none;background-color: #3897f0;font-size: 17px;color: white;" onclick="validateSignup('1')" >
						<span style="float:right;margin-right:5px">¿Don't have an account?<a id='registry' href='#' style='margin-left: 10px'> Sign up </a></span>
					</li>					
				</ul>
				<br>
			</form>
		</div>
	</body>
	<script type="text/javascript" src="jQuery/jquery.js"></script>
	<script type="text/javascript" src="jQuery/script.js"></script>
</html>