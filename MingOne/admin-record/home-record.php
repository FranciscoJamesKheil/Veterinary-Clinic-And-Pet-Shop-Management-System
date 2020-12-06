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
		$sql = "SELECT * FROM `home`";
		$myData = mysqli_query($link,$sql);
			echo "<table border=1 style='border-color: #ccc; color: black;width:100%;'>
			<tr style='background: #ddd'>
			<th>ID</th>
			<th>Description</th>
			<th colspan=2>Option</th>
			</tr>"; 

			while($record = mysqli_fetch_assoc($myData)){
				$p_id = $record['post_ID'];
				$p_d = $record['post_description'];
				?>
				<tr>
				<td><?php echo $p_id ?></td>
				<td><?php echo $p_d ?></td>
				<td><a style="color: orange" href="#">Edit</a></td>
				<td><a style="color: red" href="../conn/admin-delete.php?GetID=<?php echo $p_id; ?>">Delete</a></td> 
				</tr>
			<?php
			}
			echo "</table>";
			
		mysqli_close($link);
		?>
	</center>
  </body>
</html>
