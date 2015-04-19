<?php 
require_once("includes/dbfuncs.php");
session_start();
$con = dbconnect();
$tutorId = $_GET['id'];




?>












<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">






<html>
<head>
	<title>Tutor Finder</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
</head>
<body>



<div class="container">
	<?php require_once("includes/header.php"); ?> 
	
		
<div class="col-md-3">
	<?php 
	 echo '<img src="pictures/article_image_'.     $tutorId     .'.jpeg" width=300 height=400>';

	?>

	</div>	

<div class="col-md-3">
<?php
$query = "SELECT * FROM `tutors` WHERE `tutor_id` = $tutorId";




?>


</div>












	</div>
</div>


<?php require_once("includes/footer.php"); ?>

</body>
</html>