<?php
session_start();
require_once("includes/dbfuncs.php");

$notUser="";

if (isset($_POST['submit'])) {
	$username = $_POST["username"]; 
	$password = $_POST["pw"];
	
	
	$success = validateUser($username, $password);

	if ($success == "true") {
		$userid = getIDFromUsername($username);
		$_SESSION["id"] = $userid;
		header("Location: movies.php");
		exit();
	}
	else{
		$notUser="Your username or password is incorrect, please try again.";
	}
}

?>

<!DOCTYPE html>

<html>
<head>
	<title>Tutors</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
	<?php require_once("includes/header.php"); ?>
	
	<div class="col-md-6 col-md-offset-3 ">
<br />

      <h2>Sign In</h2>
		<br />
		<script src="js/jquery-1.11.2.min.js"></script>
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->
		<script src="js/parsley.min.js"></script>
		<form action="signin.php" method="post" id="register"> 
				<tr>
					<td class="form-label">Username: </td>
					<td align="left"><input type="text" name="username"  class="form-control"  required/></td>
				</tr>
				<tr>
					<td class="form-label">Password: </td>
					<td align="left"><input type="password" name="pw" id="pw"  class="form-control"  required/></td>
				</tr>
				<br/>
				<font color="red"><?php
				echo $notUser;
				 ?></font><br />

				<tr>
					<td></td>

					<td><input type="submit" name="submit" value="Sign In" class="btn btn-md btn-primary" /></td>
				</tr>
			

		<!--	 <script type="text/javascript">
			 		$(document).ready(function(){    
     				$('#form').parsley();
    			});	
			</script> -->
		</table>
		</form>
		

</div>
<p class="lead col-md-12 text-center"><br /><br />
			If you don't have an account sign up here.
			<br />
			<a href="signup.php"  class="btn btn-default">Sign Up</a>
		</p>
</div>
<br /><br />

<?php require_once("includes/footer.php"); ?>

</body>
</html>