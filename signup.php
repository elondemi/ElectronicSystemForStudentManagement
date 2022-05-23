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
		<div class="left-box">	

			<form action="login.php" >
			<h1>Regjistrohu</h1>
				<input type="text" name="Name" placeholder="Emri"/>
				<input type="text" name="Surname" placeholder="Mbiemri"/>
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
		<div class="right-box"></div>
	</div>	
</body>
</html>
';

echo $html;

?>