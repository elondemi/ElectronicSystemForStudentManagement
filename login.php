<?php
<<<<<<< HEAD
require_once 'resources/FormHandlers/login.php';
=======
	require_once 'config.php';
	require_once 'resources/FormHandlers/login.php';

	
$permissions = ['email']; //optional


if (isset($accessToken))
{
	if (!isset($_SESSION['facebook_access_token'])) 
	{
		//get short-lived access token
		$_SESSION['facebook_access_token'] = (string) $accessToken;
		
		//OAuth 2.0 client handler
		$oAuth2Client = $fb->getOAuth2Client();
		
		//Exchanges a short-lived access token for a long-lived one
		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
		$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
		
		//setting default access token to be used in script
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	} 
	else 
	{
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	}
	
	
	//redirect the user to the index page if it has $_GET['code']
	if (isset($_GET['code'])) 
	{
		header('Location: ./');
	}
	
	
	try {
		$fb_response = $fb->get('/me?fields=name,first_name,last_name,email');
		$fb_response_picture = $fb->get('/me/picture?redirect=false&height=200');
		
		$fb_user = $fb_response->getGraphUser();
		$picture = $fb_response_picture->getGraphUser();
		
		$_SESSION['fb_user_id'] = $fb_user->getProperty('id');
		$_SESSION['fb_user_name'] = $fb_user->getProperty('name');
		$_SESSION['fb_user_email'] = $fb_user->getProperty('email');
		$_SESSION['fb_user_pic'] = $picture['url'];
		
		
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		echo 'Facebook API Error: ' . $e->getMessage();
		session_destroy();
		// redirecting user back to app login page
		header("Location: ./");
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		echo 'Facebook SDK Error: ' . $e->getMessage();
		exit;
	}
} 
else 
{	
	// replace your website URL same as added in the developers.Facebook.com/apps e.g. if you used http instead of https and you used
	$fb_login_url = $fb_helper->getLoginUrl('http://localhost/projekti_PI', $permissions);
}
>>>>>>> 9465537b7cbc70e9dbdf4fb032678cdef98d1c80
?>



<!DOCTYPE html>
<html>

<head>
	<link href="<?php echo BASE_URL; ?>css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="resources/assets/css/login.css">
</head>

<body onload="myFunction()">
<<<<<<< HEAD
	<script>
		function myFunction() {
			let text = "Accept Cookies";
			if (confirm(text) == true) {

			} else {
				window.location = "signup.php";
			}
		}

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
				xmlhttp.open("GET", "loginAjax.php?q=" + str, true);
				xmlhttp.send();
			}
		}
	</script>
=======
<script>
function myFunction() {
  let text = "Accept Cookies";
  if (confirm(text) == true) {
	
  } else {
	window.location="signup.php";
  }
}
</script>


<?php if(isset($_SESSION['fb_user_id'])): ?>
	

	<div class="container" style="margin-top:30px">
	  <div class="row">
		<div class="col-sm-8">
		  <h3>User Info</h3>
		  <ul class="nav nav-pills flex-column">
			<li class="nav-item">
			  <a class="nav-link" >Facebook ID: <?php echo  $_SESSION['fb_user_id']; ?></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link">Full Name: <?php echo $_SESSION['fb_user_name']; ?></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link">Email: <?php echo $_SESSION['fb_user_email']; ?></a>
			</li>
		  </ul>
		  
		</div>
	  </div>
	</div>
<!-- NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN --> 
<!-- if user not login --> 

<?php else: ?>
>>>>>>> 9465537b7cbc70e9dbdf4fb032678cdef98d1c80
	<div id="login-box">
		<div class="left-box">
			<h1>Log In </h1>

			<form action="login.php" method="post">
				<p><span id="txtHint"></span></p>
				<input type="text" name="Name" placeholder="Emri" onkeyup="showHint(this.value)" />
				<input type="password" name="Password" placeholder="Password" />
				<label>Roli: </label>
				<label>Student</label>
				<input type="radio" name="Role" value="student" checked />
				<label>Prof</label>
				<input type="radio" name="Role" value="prof/ass" />
				<input type="submit" name="login" value="Log In">

			</form>

		</div>
		<div class="right-box">
<<<<<<< HEAD
			<span class="signinwith">Nuk keni akoma </br> llogari te hapur? </span>
			<a href="signup.php"><button class="social facebook">Regjistrohu</button></a>
=======
			<a href="signup.php" ><button class="social facebook">Regjistrohu</button></a>
>>>>>>> 9465537b7cbc70e9dbdf4fb032678cdef98d1c80
		</div>
		<div class="right-box">
				<a href="signup.php" ><button class="social facebook">Regjistrohu</button></a>
				<a href="<?php echo $fb_login_url;?>" ><button class="fa fa-facebook"></button class="social facebook"> Sign in with <b>Facebook</b></a>
			</div>
		<div class="ose">OSE</div>
	</div>
	<?php endif ?>
</body>

</html>