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
<div align="center">
<div class="container">
	<?php require_once("includes/header.php"); ?> 


<?php

 
  
$link = mysqli_connect('172.16.89.144', 'root', 'root', 'tutors', '8889');
$subjects = mysqli_query($link,"SELECT * FROM Tutors WHERE subject = 'Math'");
echo '<h2>';
echo "Math";
echo '</h2><table>';
while ($row = mysqli_fetch_array($subjects)) {
        echo '<lead>';
        echo '<tr><td><a href=tutor.php?id=' . $row['tutor_id'].'>' .  $row['firstname'] . " " . $row['lastname'] . '</a></td>

        <td>
        <img src="pictures/article_image_'.     $row['tutor_id']     .'.jpeg" width=200 height=200>

        </td></tr><br/>


        ';
        
        echo '</lead></table>';
        }

$subjects2 = mysqli_query($link,"SELECT * FROM Tutors WHERE subject = 'English'");
echo '<h2>';
echo "English";
echo '</h2><table>';
while ($row = mysqli_fetch_array($subjects2)) {
        echo '<lead>';
         echo '<tr><td><a href=tutor.php?id=' . $row['tutor_id'].'>' .  $row['firstname'] . " " . $row['lastname'] . '</a></td>

        <td>
        <img src="pictures/article_image_'.     $row['tutor_id']     .'.jpeg" width=200 height=200>

        </td></tr><br/>


        ';
        
        echo '</lead></table>';
        }

$subjects3 = mysqli_query($link,"SELECT * FROM Tutors WHERE subject = 'Science'");
echo '<h2>';
echo "Science";
echo '</h2><table>';
while ($row = mysqli_fetch_array($subjects3)) {
        echo '<lead>';
        echo '<tr><td><a href=tutor.php?id=' . $row['tutor_id'].'>' .  $row['firstname'] . " " . $row['lastname'] . '</a></td>

        <td>
        <img src="pictures/article_image_'.     $row['tutor_id']     .'.jpeg" width=200 height=200>

        </td></tr><br/>


        ';
        
        echo '</lead></table>';
        }
        
$subjects4 = mysqli_query($link,"SELECT * FROM Tutors WHERE subject = 'History'");
echo '<h2>';
echo "History";
echo '</h2><table>';
while ($row = mysqli_fetch_array($subjects4)) {
        echo '<lead>';
        echo '<tr><td><a href=tutor.php?id=' . $row['tutor_id'].'>' .  $row['firstname'] . " " . $row['lastname'] . '</a></td>

        <td>
        <img src="pictures/article_image_'.     $row['tutor_id']     .'.jpeg" width=200 height=200>

        </td></tr><br/>


        ';
        
        echo '</lead></table>';
        }
        
$subjects5 = mysqli_query($link,"SELECT * FROM Tutors WHERE subject = 'Foreign Language'");
echo '<h2>';
echo "Foreign Language";
echo '</h2><table>';
while ($row = mysqli_fetch_array($subjects5)) {
        echo '<lead>';
        echo '<tr><td><a href=tutor.php?id=' . $row['tutor_id'].'>' .  $row['firstname'] . " " . $row['lastname'] . '</a></td>

        <td>
        <img src="pictures/article_image_'.     $row['tutor_id']     .'.jpeg" width=200 height=200>

        </td></tr><br/>


        ';
        
        echo '</lead></table>';
        }
        
// $tag = mysqli_query($link,"SELECT Article_Name, Content, Tag FROM Article, Tags, ArticleTag WHERE ArticleTag.Article_ID 
// = Article.Article_ID and ArticleTag.Tag_ID = Tags.Tag_ID AND Tags.Tag = '$page' ORDER BY Date DESC");     
     
                    
        
?>









</div>
</div>
<br/>
<?php require_once("includes/footer.php"); ?>
</body>
</html>