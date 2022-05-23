<?php

$html = '
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="resources/assets/css/login.css">
</head>
<body>
	<div id="login-box">
		<div class="left-box">
			<h1>Log In </h1>
			
				<form  action="pages/professor/lendet.php">
					<input type="text" name="Name" placeholder="Emri"/>
					<input type="password" name="Password" placeholder="Password"/>
					<input  type="submit" name="singup-button" value="Log In">	
				</form>

		</div>	
		<div class="right-box">
			<span class="signinwith">Nuk keni akoma </br> llogari te hapur? </span>
			<a href="signup.php">	<button class="social facebook">Regjistrohu</button></a>
		</div>
		<div class="ose">OSE</div>
	</div>
</body>
</html>
';

echo $html;


?>