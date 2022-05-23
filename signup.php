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
				<input type="radio" name="username" />
				<label>Prof/Ass</label>
				<input type="radio" name="username" />
				<input type="text" name="username" placeholder="Username"/>
				<input type="password" name="password" placeholder="Password"/>
				<input type="password" name="password" placeholder="Confirm Password"/>
				<input type="email" name="username" placeholder="Email"/>
				<input type="email" name="username" placeholder="Confirm Email"/>

				
		</div>		
		<div class="right-box">
			<span class="signinwith">Mirë se </br> vini! </span>
			<input type="submit" value="Sign Up" class="social facebook" >
		</div>
		</form>
	</div>
</body>
</html>
';

echo $html;


?>