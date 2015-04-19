<?php 
require_once("includes/dbfuncs.php");
session_start();

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
	
		
<div class="col-md-4">
	<?php 
	 echo '<img src="pictures/article_image_'.     $tutorId     .'.jpeg" width=300 height=400>';

	?>

	</div>	

<div class="col-md-8">
<?php
$con = dbconnect();
$query = "SELECT * FROM `tutors` WHERE `tutor_id` = $tutorId";
$result = mysqli_query($con, $query);
	
while($row = mysqli_fetch_assoc($result))	{


	$name= $row["firstname"];
	$name.=" ";
	$name.=$row["lastname"];
	$email= $row["email"];
	$message= $row["message"];
	$price= $row["price"];
}
echo '<h2>';
echo "$name";
echo '</h2>';

echo '<h4>';

echo "$email";

echo '<br />';
echo "Price: $";
echo "$price";

echo '<br />';

echo '</h4>';
echo '<lead>';
echo '<br />';
echo "$message";
echo '</lead>';






?>






</div>












	</div>
</div>
<br />
<br />
<br />
<br />
<br />

<?php require_once("includes/footer.php"); ?>

</body>
</html>