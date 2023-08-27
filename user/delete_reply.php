<?php
	include('include/dbconn.php');
	$id=$_GET['m_id'];
	$query="DELETE FROM `replies` WHERE `id`='$id'";
	$run=mysqli_query($con,$query);
	If($run == true)
	{  
		header('location:message_reply.php');
	}
	else
	{
		$msg="<div class='error'>*** Something is Wrong In DELETE Query! </div>";
	}
?>