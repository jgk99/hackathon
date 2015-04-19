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
	

	<div class="col-md-8">
		<h2> Our Mission</h2>
		</div>


			
	
<br /><br /><br />
	<div class="well lead col-md-4 text-center">
	<?php

	if($signedIn == "false") {
		echo
		"
		<p>If you don't have an account you should sign up here now.</p>
			<a href='signup.php' class='btn btn-default'>Sign Up</a><br /><br />
			<p>If you have an account <a href='signin.php'>sign in</a> and search the movies that you are curious about in the search bar above. Your critic will tell you everything that you want to know.</p>
		</div>";
	}
	else {
		$con = dbconnect();
		$matches = get_top_matches($_SESSION['id'], 5);
		$rate_more_movies = false;
		$match_ratings = array();
		if ($matches !== false) {
			if (count($matches) === 5) {
				foreach (array_keys($matches) as $match) {
					$rating = get_rating_from_critic($match, $_GET['id'], $con);
					$link = get_critic_link($match, $con);
					if ($link !== false) {
						$match_ratings[] = "<a href=\"" . $link . "\">" . $match . "</a><br />";
					} else {
						$match_ratings[] = $match . "<br />";
					}
				}
			} else {
				$rate_more_movies = true;
			}
		} else {
			$rate_more_movies = true;
		}

		echo '<script type ="text/javascript">
				if ("'.$rate_more_movies.'" == "1") {
					document.write("Rate more movies to find some similar critics.<br /><br /><br /><br /><br /><br /><br /><br />");
				} else {
					document.write("<h2>Your Top Critics:</h2>");
					var match_ratings = ' . json_encode($match_ratings) . ';
					for (var i = 0; i < match_ratings.length; i++) {
						document.write(match_ratings[i]);
					}
				}
			</script>';
	}

	?>
</div>
<br/>

<?php require_once("includes/footer.php"); ?>

</body>
</html>