<?php
	require_once 'resources/FormHandlers/login.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="resources/assets/css/login.css">
</head>
<body onload="myFunction()">
<script>
function myFunction() {
  let text = "Accept Cookies";
  if (confirm(text) == true) {
	
  } else {
	window.location="signup.php";
  }
}
</script>
	<div id="login-box">
		<div class="left-box">
			<h1>Log In </h1>
			
				<form  action="login.php" method="post">
					<input type="text" name="Name" placeholder="Emri"/>
					<input type="password" name="Password" placeholder="Password"/>
					<label>Roli: </label> 
					<label>Student</label>
					<input type="radio" name="Role" value="student" />
					<label>Prof</label>
					<input type="radio" name="Role" value="prof/ass" />
					<input  type="submit" name="login" value="Log In">	

				</form>

		</div>	
		<div class="right-box">
			<span class="signinwith">Nuk keni akoma </br> llogari te hapur? </span>
			<a href="signup.php" ><button class="social facebook">Regjistrohu</button></a>
		</div>
		<div class="ose">OSE</div>
	</div>
</body>
</html>


