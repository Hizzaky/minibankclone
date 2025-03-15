<?php
// include 'fun.php';
// cek_table();

// header("location:homepage");

// $sql=dqr("SELECT * FROM t_admin");


function dbb()
{
	$servername = "sql12.freesqldatabase.com";
	$db_name = "sql12767775";
	$username = "sql12767775";
	// $username = "dbminibank";
	$password = "fvhbFcEywj";

	// ===
	$conn = new mysqli($servername, $username, $password, $db_name);
	if ($conn->connect_error) {
		// return die("Connection failed: " . $conn->connect_error);
		return "FAILED";
	} else {
		return "Connected successfully";
	}
}

// echo dbb();
?> 
<hr> <h1>git deploy free hosting </h1> 