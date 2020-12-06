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
		$sql = "SELECT * FROM `product`";
		$myData = mysqli_query($link,$sql);
			echo "<table border=1 style='border-color: #ccc; color: black; width:100%;'>
			<tr style='background: #ddd'>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Product Description</th>
			<th>Product Type</th>
			<th>Product Price</th>
			<th colspan=2>Option</th>
			</tr>"; 

			while($record = mysqli_fetch_assoc($myData)){
				$pid = $record['product_ID'];
				$pn = $record['product_name'];
				$pd = $record['product_desc'];
				$pt = $record['product_type'];
				$pp = $record['product_price'];
				?>
				<tr>
				<td><?php echo $pid ?></td>
				<td><?php echo $pn ?></td>
				<td><?php echo $pd ?></td>
				<td><?php echo $pt ?></td>
				<td><?php echo $pp ?></td>
				<td><a style="color: orange" href="#">Edit</a></td>
				<td><a style="color: red" href="../conn/product-delete.php?GetID=<?php echo $pid; ?>">Delete</a></td> 
				</tr>
			<?php
			}
			echo "</table>";
			
		mysqli_close($link);
		?>
	</center>
  </body>
</html>
