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
		$sql = "SELECT * FROM `pet`";
		$myData = mysqli_query($link,$sql);
			echo "<table border=1 style='border-color: #ccc; color: black; width:100%;'>
			<tr style='background: #ddd'>
			<th>Pet ID</th>
			<th>Pet Name</th>
			<th>Pet Description</th>
			<th>Pet Type</th>
			<th>Pet Price</th>
			<th colspan=2>Option</th>
			</tr>"; 

			while($record = mysqli_fetch_assoc($myData)){
				$pid = $record['pet_ID'];
				$pn = $record['pet_name'];
				$pd = $record['pet_description'];
				$pt = $record['pet_type'];
				$pp = $record['pet_price'];
				?>
				<tr>
				<td><?php echo $pid ?></td>
				<td><?php echo $pn ?></td>
				<td><?php echo $pd ?></td>
				<td><?php echo $pt ?></td>
				<td><?php echo $pp ?></td>
				<td><a style="color: orange" href="#">Edit</a></td>
				<td><a style="color: red" href="../conn/pet-delete.php?GetID=<?php echo $pid; ?>">Delete</a></td> 
				</tr>
			<?php
			}
			echo "</table>";
			
		mysqli_close($link);
		?>
	</center>
  </body>
</html>
