<?php
	// This function is used for checking the email is the email has already registered or not
    function email_exists($email,$con)
	{
		$row=mysqli_query($con, "SELECT `email` FROM `agents_details` WHERE `email`='$email' ");
		{
			if(mysqli_num_rows($row)==1) 
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
	/*
	* This function used for checking Customer CNIC Number Weather it is Exists or NOT 
	*/
    
	
?>