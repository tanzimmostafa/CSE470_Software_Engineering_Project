<?php
session_start()	;	

require_once('DBconn.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['fname']) && isset($_POST['pass'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['fname'];
	$p = $_POST['pass'];
	//$sql = "SELECT * FROM users WHERE username = '$u' AND password = '$p'";
	$sql = "SELECT * FROM auth WHERE username = '$u' AND pass = '$p' AND role='student'";
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if it returns an empty set
	if(mysqli_num_rows($result) !=0 ){
		
		
		$row = mysqli_fetch_array($result);
		$_SESSION["username"] = $row[1];
	
	   // echo "LET HIM ENTER";
		header("Location: ../Controller/searchbox.php");
	}
	else{
		//echo "<p style='color:yellow;'> Username or Password is wrong  </p>";
		header("Location: ../Controller/stsignpage.php");		
	}
	
}


?>
