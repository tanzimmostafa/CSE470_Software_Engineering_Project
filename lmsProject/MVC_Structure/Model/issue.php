
<?php require '../View/header.php'; ?>
<html lang="en">
 <head>
 	<meta charset="UTF-8">
 	
	<link rel="stylesheet" href="../View/css/issue.css"> 

 </head>

<body>
<div class="wrapper">




    <section class = "right">
	 <table>
		 <tr><th>STAFF-ID</th>
			<th>USER-ID</th>
			<th>ISSUE-ID</th>
			<th>ISBN</th>
			<th>RETURN DATE</th>
			<th>ISSUE DATE</th>			
		 </tr>
		 
		 	
		<!-- php codes to fetch data from database and show in the rows of this table -->
			
			<?php 
			require_once("DBconn.php");

			
            
            //echo "book name =$b";
			$sql = "SELECT * FROM issue";
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

