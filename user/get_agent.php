<?php
if(isset($_POST['id'])){
    $conn = mysqli_connect("localhost", "root", "", "estatedb");
    $query = "SELECT * FROM agents_details WHERE id = '".$_POST['id']."'";
    $result = mysqli_query($conn, $query);
		 while($row=mysqli_fetch_array($result))
 	{?>
	
	<option value="<?php echo htmlentities($row['email']); ?>"><?php echo htmlentities($row['email']); ?></option>
	<option value="<?php echo htmlentities($row['phone_number']); ?>"><?php echo htmlentities($row['phone_number']); ?></option>
	<option value="<?php echo htmlentities($row['address']); ?>"><?php echo htmlentities($row['address']); ?></option>
	<option value="<?php echo htmlentities($row['image']); ?>"><?php echo htmlentities($row['image']); ?></option>
    

<?php 
	}
}
?>
