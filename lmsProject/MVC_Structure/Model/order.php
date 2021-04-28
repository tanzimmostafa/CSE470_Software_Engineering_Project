<?php
session_start();
?>

<html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>order</title>
	<link rel="stylesheet" href="../View/css/show_bookinfo.css">

 </head>

<body>
<div class="wrapper">
	<div class="header">
		<p>Ayesha Abed Library</p>
	</div>

    <section class="bottomright"> 
		<a href="../Controller/searchbox.php">Go back to search</a>
	</section>

    <section class = "right">
    	<h2 class="extra">You have successfully ordered the book with the following information:</h2>
	 <table>
		 <tr><th>Title</th>
			<th>Author</th>
			<th>Genre</th>
			<th>Price</th>
			<th>Quantity</th>
		 </tr>
		 
<?php
require_once("DBconn.php");

$book_ISBN=$_POST['ISBN'];
$sql = "SELECT title,author,genre,price FROM book where ISBN='$book_ISBN' ";
$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				/*here we will print every row that is returned by our query $sql*/
				while($row = mysqli_fetch_array($result)){
				/*here we have to write some HTML code, so we will close php tag */
			?>
			<tr>
			<td> <?php echo $row[0]; ?> </td>
			<td> <?php echo $row[1]; ?> </td>
			<td> <?php echo $row[2]; ?> </td>
			<td> <?php echo $row[3]; ?> </td>
			<td><?php echo 1; ?></td>
			</tr>
				<?php 
				}	 							
	  	 }
	    
		?>
	</table>

	</section>	


					
	
</div>
</body>
</html>

<?php

 $sql = "UPDATE book SET quantity=quantity-1 WHERE ISBN='$book_ISBN' ";
 $result = mysqli_query($conn, $sql);

 ?>

<?php


$sql="SELECT CURDATE()";
$result = mysqli_query($conn, $sql);
$r2 = mysqli_fetch_array($result);
$issuedate=$r2[0];
echo $issuedate;



$date=date_create($issuedate);

date_add($date,date_interval_create_from_date_string("60 days"));
$returndate= date_format($date,"Y-m-d");

//echo $returndate;



//echo $book_ISBN;

echo $_SESSION["username"];
$user=$_SESSION["username"];
$sql="SELECT * FROM student WHERE username='$user'";
$result = mysqli_query($conn, $sql);
$r1 = mysqli_fetch_array($result);
$userid=$r1[0];

$sql3="SELECT * FROM Staff LIMIT 1";
$result = mysqli_query($conn, $sql3);
$r3 = mysqli_fetch_array($result, MYSQLI_NUM);
$staffid=$r3[0];
//echo $staffid;

$sql="INSERT INTO issue (staff_id, user_id, ISBN, return_date, issue_date) VALUES ('$staffid','$userid','$book_ISBN','$returndate' ,'$issuedate')";

 $result =mysqli_query($conn, $sql);

?>