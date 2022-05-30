<?php
	require_once 'resources/FormHandlers/signup.php';
?>

<!DOCTYPE html>
<html>
<head>
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "gethint.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>
	<title></title>
	<link rel="stylesheet" type="text/css" href="resources/assets/css/signup.css">
</head>
<body>
	<div id="login-box">
		<div class="left-box">	

			<form action="signup.php"  method="post">
			<h1>Regjistrohu</h1>
				<span style="color:red;" name="error"> <?php echo $error ?> </label>
				<input type="text" name="Name" placeholder="Emri"/>
				<input type="text" name="Surname" placeholder="Mbiemri"/>
				<label style="color:black;">Roli: </label> 
				<label style="color:black;">Student</label>
				<input type="radio" name="Role" value="student" checked />
				<label style="color:black;">Prof/Ass</label>
				<input type="radio" name="Role" value="prof/ass" />
				<p><span id="txtHint" ></span></p>
				<input type="password" name="Password" placeholder="Password" onkeyup="showHint(this.value)"/>
				<input type="password" name="Conf_Password" placeholder="Confirm Password"/>
				<input type="email" name="Email" placeholder="Email"/>		
				<input type="submit" name="signup" value="Sign Up" class="social facebook" >
			</form>
		
		</div>
		<div class="right-box"></div>
	</div>	
</body>
</html>