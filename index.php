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
	
<div class="well well-large">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
					<div class="row">
						<div class="col-xs-3">
							<script type="text/javascript">
								document.write("<a href=\"movie.php?id=" + movies.movies[i].alternate_ids['imdb'] + "\"");         
							</script> class="thumbnail">
							<script type="text/javascript">
								document.write("<img src=\"http://img.omdbapi.com/?i=tt" + movies.movies[i].alternate_ids['imdb'] + "&apikey=51ced2f\" />");
								i++;          
							</script>
							</a>
						</div>
						<div class="col-xs-3">
							<script type="text/javascript">
								document.write("<a href=\"movie.php?id=" + movies.movies[i].alternate_ids['imdb'] + "\"");         
							</script> class="thumbnail">
							<script type="text/javascript">
								document.write("<img src=\"http://img.omdbapi.com/?i=tt" + movies.movies[i].alternate_ids['imdb'] + "&apikey=51ced2f\" />");
								i++;          
							</script>
							</a>
						</div>
						<div class="col-xs-3">
							<script type="text/javascript">
								document.write("<a href=\"movie.php?id=" + movies.movies[i].alternate_ids['imdb'] + "\"");         
							</script> class="thumbnail">
							<script type="text/javascript">
								document.write("<img src=\"http://img.omdbapi.com/?i=tt" + movies.movies[i].alternate_ids['imdb'] + "&apikey=51ced2f\" />");
								i++;          
							</script>
							</a>
						</div>
						<div class="col-xs-3">
							<script type="text/javascript">
								document.write("<a href=\"movie.php?id=" + movies.movies[i].alternate_ids['imdb'] + "\"");         
							</script> class="thumbnail">
							<script type="text/javascript">
								document.write("<img src=\"http://img.omdbapi.com/?i=tt" + movies.movies[i].alternate_ids['imdb'] + "&apikey=51ced2f\" />");
								i;          
							</script>
							</a>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="row">
						<div class="col-xs-3">
							<script type="text/javascript">
								document.write("<a href=\"movie.php?id=" + movies.movies[i].alternate_ids['imdb'] + "\"");         
							</script> class="thumbnail">
							<script type="text/javascript">
								document.write("<img src=\"http://img.omdbapi.com/?i=tt" + movies.movies[i].alternate_ids['imdb'] + "&apikey=51ced2f\" />");
								i++;          
							</script>
							</a>
						</div>
						<div class="col-xs-3">
							<script type="text/javascript">
								document.write("<a href=\"movie.php?id=" + movies.movies[i].alternate_ids['imdb'] + "\"");         
							</script> class="thumbnail">
							<script type="text/javascript">
								document.write("<img src=\"http://img.omdbapi.com/?i=tt" + movies.movies[i].alternate_ids['imdb'] + "&apikey=51ced2f\" />");
								i++;          
							</script>
							</a>
						</div>
						<div class="col-xs-3">
							<script type="text/javascript">
								document.write("<a href=\"movie.php?id=" + movies.movies[i].alternate_ids['imdb'] + "\"");         
							</script> class="thumbnail">
							<script type="text/javascript">
								document.write("<img src=\"http://img.omdbapi.com/?i=tt" + movies.movies[i].alternate_ids['imdb'] + "&apikey=51ced2f\" />");
								i++;          
							</script>
							</a>
						</div>
						<div class="col-xs-3">
							<script type="text/javascript">
								document.write("<a href=\"movie.php?id=" + movies.movies[i].alternate_ids['imdb'] + "\"");         
							</script> class="thumbnail">
							<script type="text/javascript">
								document.write("<img src=\"http://img.omdbapi.com/?i=tt" + movies.movies[i].alternate_ids['imdb'] + "&apikey=51ced2f\" />");
								i;          
							</script>
							</a>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="row">
						<div class="col-xs-3">
						<script type="text/javascript">
							document.write("<a href=\"movie.php?id=" + movies.movies[i].alternate_ids['imdb'] + "\"");         
						</script> class="thumbnail">
						<script type="text/javascript">
							document.write("<img src=\"http://img.omdbapi.com/?i=tt" + movies.movies[i].alternate_ids['imdb'] + "&apikey=51ced2f\" />");
							i++;          
						</script>
						</a>
						</div>
						<div class="col-xs-3">
							<script type="text/javascript">
								document.write("<a href=\"movie.php?id=" + movies.movies[i].alternate_ids['imdb'] + "\"");         
							</script> class="thumbnail">
							<script type="text/javascript">
								document.write("<img src=\"http://img.omdbapi.com/?i=tt" + movies.movies[i].alternate_ids['imdb'] + "&apikey=51ced2f\" />");
								i++;          
							</script>
							</a>
						</div>
						<div class="col-xs-3">
							<script type="text/javascript">
								document.write("<a href=\"movie.php?id=" + movies.movies[i].alternate_ids['imdb'] + "\"");         
							</script> class="thumbnail">
							<script type="text/javascript">
								document.write("<img src=\"http://img.omdbapi.com/?i=tt" + movies.movies[i].alternate_ids['imdb'] + "&apikey=51ced2f\" />");
								i++;          
							</script>
							</a>
						</div>
						<div class="col-xs-3">
							<script type="text/javascript">
								document.write("<a href=\"movie.php?id=" + movies.movies[i].alternate_ids['imdb'] + "\"");         
							</script> class="thumbnail">
							<script type="text/javascript">
								document.write("<img src=\"http://img.omdbapi.com/?i=tt" + movies.movies[i].alternate_ids['imdb'] + "&apikey=51ced2f\" />");
								i++;          
							</script>
						</a>
						</div>
					</div>
				</div>
			</div>
			 
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
		</div>
    </div>

	
</div>
<br/>

<?php require_once("includes/footer.php"); ?>

</body>
</html>