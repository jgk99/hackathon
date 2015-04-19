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
	<title>Tutor Finder</title>
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


<?php

 
  
$link = mysqli_connect('172.16.89.144', 'root', 'root', 'tutors', '8889');
$subjects = mysqli_query($link,"SELECT * FROM Subjects");
while ($row = mysqli_fetch_array($subjects)) {
        echo $row['subject'];
        $tutors = mysqli_query($link,"SELECT firstname, lastname FROM Tutors, Subjects, ConnectTutor WHERE ConnectTutor.tutor_id = Tutors.tutor_id and ConnectTutor.subject_id = Subjects.subject_id AND Subjects.subject = '". $row['subject'] ."' ");   
        echo "<br>";
        echo "<br>";
        while ($row2 = mysqli_fetch_array($tutors)) {
        echo $row2['firstname'];
        echo "<br>";
        }
}


// $tag = mysqli_query($link,"SELECT Article_Name, Content, Tag FROM Article, Tags, ArticleTag WHERE ArticleTag.Article_ID 
// = Article.Article_ID and ArticleTag.Tag_ID = Tags.Tag_ID AND Tags.Tag = '$page' ORDER BY Date DESC");     
     
                    
        
?>









</div>
<br/>
<?php require_once("includes/footer.php"); ?>
</body>
</html>