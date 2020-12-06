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
		$sql = "SELECT * FROM `veterinarian`";
		$myData = mysqli_query($link,$sql);
			echo "<table border=1 style='border-color: #ccc; color: black; width:100%;'>
			<tr style='background: #ddd'>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Contact Number</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th colspan=2>Option</th>
			</tr>"; 

			while($record = mysqli_fetch_assoc($myData)){
				$vid = $record['vet_ID'];
				$vf = $record['vet_fname'];
				$vl = $record['vet_lname'];
				$vc = $record['vet_contact'];
				$ve = $record['vet_email'];
				$vu = $record['vet_uname'];
				$vp = $record['vet_pass'];
				?>
				<tr>
				<td><?php echo $vid ?></td>
				<td><?php echo $vf ?></td>
				<td><?php echo $vl ?></td>
				<td><?php echo $vc ?></td>
				<td><?php echo $ve ?></td>
				<td><?php echo $vu ?></td>
				<td><?php echo $vp ?></td>
				<td><a style="color: orange" href="#">Edit</a></td>
				<td><a style="color: red" href="../conn/vet-delete.php?GetID=<?php echo $vid; ?>">Delete</a></td> 
				</tr>
			<?php
			}
			echo "</table>";
			
		mysqli_close($link);
		?>
	</center>
  </body>
</html>
