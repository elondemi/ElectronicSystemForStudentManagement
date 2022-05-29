<?php
	require_once 'resources/FormHandlers/signup.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="resources/assets/css/signup.css">
</head>
<body>
	<div id="login-box">
		<div class="left-box">	

			<form action="signup.php"  method="post">
			<h1>Regjistrohu</h1>
			
				<label style="text-color:red" name="error"> <?php echo $error="Shit" ?> </label>
				<input type="text" name="Name" placeholder="Emri"/>
				<input type="text" name="Surname" placeholder="Mbiemri"/>
				<label>Roli: </label> 
				<label>Student</label>
				<input type="radio" name="Role" value="student" />
				<label>Prof/Ass</label>
				<input type="radio" name="Role" value="prof/ass" />
				<input type="password" name="Password" placeholder="Password"/>
				<input type="password" name="Conf_Password" placeholder="Confirm Password"/>
				<input type="email" name="Email" placeholder="Email"/>		
				<input type="submit" name="signup" value="Sign Up" class="social facebook" >
			</form>
		
		</div>
		<div class="right-box"></div>
	</div>	
</body>
</html>


