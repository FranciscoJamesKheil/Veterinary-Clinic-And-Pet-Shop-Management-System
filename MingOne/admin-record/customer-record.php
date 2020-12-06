<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
	<center>
		<?php
		
		$link = mysqli_connect("localhost", "root", "", "dbmingone");
		//view
		$sql = "SELECT * FROM `customer`";
		$myData = mysqli_query($link,$sql);
			echo "<table border=1 style='border-color: #ccc; color: black; width:100%;'>
			<tr style='background: #ddd'>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Contact Number</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th colspan=2>Option</th>
			</tr>"; 

			while($record = mysqli_fetch_assoc($myData)){
				$fn = $record['first_name'];
				$ln = $record['last_name'];
				$cn = $record['contact_no'];
				$em = $record['email'];
				$us = $record['username'];
				$pw = $record['password'];
				?>
				<tr>
				<td><?php echo $fn ?></td>
				<td><?php echo $ln ?></td>
				<td><?php echo $cn ?></td>
				<td><?php echo $em ?></td>
				<td><?php echo $us ?></td>
				<td><?php echo $pw ?></td>
				<td><a style="color: orange" href="#">Edit</a></td>
				<td><a style="color: red" href="../conn/cust-delete.php?GetID=<?php echo $us; ?>">Delete</a></td> 
				</tr>
			<?php
			}
			echo "</table>";
			
		mysqli_close($link);
		?>
	</center>
  </body>
</html>
