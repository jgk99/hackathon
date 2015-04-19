<?php 

function dbconnect() {
	//Create connection
	$con = new mysqli("localhost","root","root","tutors");

	//Test Connection
	if (mysqli_connect_errno()) {
		throw new Exception("Connection failed with error %s", mysqli_connect_error());
	}

	//Return connection
	return $con;
}



function addUser($lname, $fname, $usrname, $email, $pass) {
	//Connecto to database
	$con = dbconnect();

	//Sanitize Variables
	$lname = $con->real_escape_string($lname);
	$fname = $con->real_escape_string($fname);
	$usrname = $con->real_escape_string($usrname);
	$email = $con->real_escape_string($email);
	$pass = $con->real_escape_string(hash("sha256", $pass)); //Hash password using SHA256 algorithm

	//Build query string
	$query = "INSERT INTO `users` (`lastname`, `firstname`, `username`, `email`, `password`) VALUES ('$lname', '$fname', '$usrname', '$email', '$pass')";

	//Execute query and check for errors
	if (!$con->query($query)) {
		throw new mysqli_sql_exception("$con->error");
	}
	$con->close();
}

function addTutor($lname, $fname, $usrname, $email, $pass, $price, $imgname) {
	//Connecto to database
	$con = dbconnect();

	//Sanitize Variables
	$price = $con->real_escape_string($price);
	$lname = $con->real_escape_string($lname);
	$fname = $con->real_escape_string($fname);
	$usrname = $con->real_escape_string($usrname);
	$email = $con->real_escape_string($email);
	$pass = $con->real_escape_string(hash("sha256", $pass)); //Hash password using SHA256 algorithm

	//Build query string
	$query = "INSERT INTO `tutors` (`lastname`, `firstname`, `username`, `email`, `password`,`price`,`picture`) VALUES ('$lname', '$fname', '$usrname', '$email', '$pass','$price','$imgname')";

	//Execute query and check for errors
	if (!$con->query($query)) {
		throw new mysqli_sql_exception("$con->error");
	}
	$con->close();
}



		
function getTutorIDFromUsername($username) {
	$con = dbconnect();

	$username = $con->real_escape_string($username);

	$query = "SELECT `id` FROM `tutors` WHERE `username` = '$username'";
	$data = $con->query($query);
	if (!$data) {
		//throw new mysqli_sql_exception("Query failed with error: $con->sqlstate");
	} else {
		//Check if query returned a row results
		if ($data->num_rows == 1) {
			$row = mysqli_fetch_assoc($data);
			return $row["ID"];
		} else {
			return false;
		}
	}
}



		
function getUserIDFromUsername($username) {
	$con = dbconnect();

	$username = $con->real_escape_string($username);

	$query = "SELECT `id` FROM `users` WHERE `username` = '$username'";
	$data = $con->query($query);
	if (!$data) {
		//throw new mysqli_sql_exception("Query failed with error: $con->sqlstate");
	} else {
		//Check if query returned a row results
		if ($data->num_rows == 1) {
			$row = mysqli_fetch_assoc($data);
			return $row["ID"];
		} else {
			return false;
		}
	}
}




?>