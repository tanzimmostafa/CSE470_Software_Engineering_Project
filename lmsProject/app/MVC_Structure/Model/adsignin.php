<?php

require_once('DBconn.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['fname']) && isset($_POST['pass'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['fname'];
	$p = $_POST['pass'];
	//$sql = "SELECT * FROM users WHERE username = '$u' AND password = '$p'";
	$sql = "SELECT * FROM auth WHERE username = '$u' AND pass = '$p' AND role='staff'";
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if it returns an empty set
	if(mysqli_num_rows($result) !=0 ){
	
	   // echo "LET HIM ENTER";
		header("Location: ../View/index.php");
	}
	else{
		//echo "<p style='color:yellow;'> Username or Password is wrong  </p>";
		header("Location: ../Controller/adsignpage.php");		
	}
	
}


?>
