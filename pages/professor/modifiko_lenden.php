<?php  
	  require_once __DIR__ . "/../../resources/FormHandlers/lendet/modifiko.php";
      require_once __DIR__ . "/../../resources/query_handler/CoursesRepository.php";
	  $course = (new CoursesRepository())->getCourse($_GET['course_id']);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../resources/assets/css/login.css">
</head>
<body>
	<div id="login-box">
		<div class="left-box">
			<h1>Modifiko lëndën</h1>
	<form action="modifiko_lenden.php?course_id=<?= $course->getCourse_id() ?>" method="post">
			<textarea id="subject" name="course_description" placeholder="Modifiko përshkrimin e lëndës..." style="height:200px">
				<?= $course->getCourse_description() ?>
			</textarea>
		</div>		
		<div class="right-box">
			<span class="signinwith">Ketu mund te modifikoni </br> lenden! </span>
			<input type="submit" name="modifiko_lenden" value="Modifiko" class="social facebook"></input> 
		</div>
	</form>	
	</div>
</body>
</html>

