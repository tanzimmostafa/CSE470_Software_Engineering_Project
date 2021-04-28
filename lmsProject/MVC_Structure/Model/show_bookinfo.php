
<html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>LMS Search</title>
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
	 <table>
		 <tr><th>Title</th>
			<th>Author</th>
			<th>Genre</th>
			<th>Price</th>
			<th>Shelf</th>
			<th>Quantity</th>
			<th>Order</th>
		 </tr>
		 
		 	
		<!-- php codes to fetch data from database and show in the rows of this table -->
			
			<?php 
			require_once("DBconn.php");

			$b = $_POST["bname"];
            
            //echo "book name =$b";
			$sql = "SELECT title,author,genre,price,shelf,quantity,ISBN FROM book where title like '%$b%' OR author like '%$b%' ";
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
			<td> <?php echo $row[4]; ?> </td>
			<td> <?php echo $row[5]; ?> </td>
			<td><form action="../Model/order.php" method="post">
				<input type="hidden" name="ISBN" value="<?php echo $row[6];?>" class="btn brand z-depth-0">

				<input type="submit" value="order">
			</form></td>
		</tr>		
		
		<?php 
				}	 							
	  	 }
	    
		?>
		<!--ends -->   		 	
     </table>

        

	</section>	


					
	
</div>
</body>
</html>