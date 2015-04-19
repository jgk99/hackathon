<?php 
if (isset($_SESSION["id"])) {
$signedIn="true";
}
else{
	$signedIn="false";
}

?>

<!DOCTYPE html>

<html>
<head>
	<title>My Movie Critic</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<?php require_once("includes/header.php"); ?> 
	

	
</div>
<br/>

<?php require_once("includes/footer.php"); ?>

</body>
</html>