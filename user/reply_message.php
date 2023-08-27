<?php 
	$p_title ="Reply Message";
	include_once ('include/session.php');
	include_once 'include/head.php';
	
	
	//$id=$_GET['m_id'];
	
	$id=$_GET['m_id'];
	$qry="SELECT * FROM `users` WHERE `id`='$id'";
	$run=mysqli_query($con,$qry);
	$reslt=mysqli_fetch_array($run);
	$friend_id = $reslt['id'];
		
	
	if(isset($_POST['send']))
    {
        $name       = $_REQUEST['name'];
        $message    = $_REQUEST['message'];
		$date 		= date('d-m-y h:ia');
		$p_id		= $_SESSION['user_id'];
		$owner      = $_GET['m_id'];
		
		$sql = "INSERT INTO `replies`(`Name`, `reply`,`date`, `p_id`, `message_id`) VALUES ('$name','$message','$date','$p_id','$owner')";
            $data = mysqli_query($con, $sql);
            if($data = true)
            {
                $msg="<script> alert('Reply Was Sent Successfully');</script>";
				if($msg)
				{
					header("Refresh: 0; url=reply_message.php?m_id=".$id);
				}					
            }
            else
            {
                $msg="<div class='error'>*** Something is Wrong IN INSERT Query! </div>";
            }
		}
		
	
?>


	<style type="text/css">
		.error
		{ 
			color: red;
		}
		.form-center {
  display:flex;
  justify-content: center;
}
.submit{  
text-align: center;  
  
}  
	</style>
</head>

<body>
	<?php
			include_once 'include/header.php';
			include_once 'include/sidebar.php';
			
		?>

  <br>
  <br>

    
				<div class="form-center">
                <form method="POST" class="form" >
					<legend>
                  <div class="row">
                    <div class="col-md-12 mb-2">
                      <div class="form-group">
					  <input type="hidden" name="owner" value="<?php echo $reslt['id'];?>">
                        <input type="text" name="name" value="<?php echo $result['Name'];?>" class="form-control " placeholder="Your Name">
                      </div>
                    </div>
                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message"></textarea>
                        <div class="validate"></div>
                      </div><br>
					  
					  <div class="submit">
					   <button type="submit" class="btn btn-primary pull-right" id="submit" name="send">
							Reply <i class="fa fa-arrow-circle-right"></i>
					</button>
                     </div>
					</legend>
                </form>
              </div>
           
            </div>
          </div>
		  </section>
        </div>
      </div>
 
<?php include_once 'include/js.php'; ?>
</body>

</html>