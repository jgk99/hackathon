<?php 
session_start();
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


<?php

 
  
$link = mysqli_connect('172.16.89.144', 'root', 'root', 'tutors', '8889');
$subjects = mysqli_query($link,"SELECT * FROM Subjects");
while ($row = mysqli_fetch_array($subjects)) {
        echo '<h2>' . $row['subject'] . '</h2>';
        $tutors = mysqli_query($link,"SELECT * FROM Tutors, Subjects, ConnectTutor WHERE ConnectTutor.tutor_id = Tutors.tutor_id and ConnectTutor.subject_id = Subjects.subject_id AND Subjects.subject = '". $row['subject'] ."' ");   
     
        echo '<lead>';
        while ($row2 = mysqli_fetch_array($tutors)) {
        echo '<a href=tutor.php?id=' . $row2['tutor_id'].'>' .  $row2['firstname'] .'</a>';
        echo "<br>";
        echo '</lead>';
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