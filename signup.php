<?php

$html = '
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="resources/assets/css/signup.css">
</head>
<body>
	<div id="login-box">
			<form action="login.php" >
			<div class="left-box">	
			<h1>Regjistrohu</h1>
				<input type="text" name="username" placeholder="Emri"/>
				<input type="text" name="username" placeholder="Mbiemri"/>
				<label>Roli: </label> 
				<label>Student</label>
				<input type="radio" name="Role" />
				<label>Prof/Ass</label>
				<input type="radio" name="Role" />
				<input type="password" name="Password" placeholder="Password"/>
				<input type="password" name="Conf_Password" placeholder="Confirm Password"/>
				<input type="email" name="Email" placeholder="Email"/>
				<input type="email" name="Conf_Email" placeholder="Confirm Email"/>				
				<input type="submit" value="Sign Up" class="social facebook" >
			</form>

		</div>
	</div>	
</body>
</html>
';

echo $html;

?>