<?php
	$p_title ="Personal Information";
	include_once ('include/session.php');
	include_once 'include/head.php';
	
	$msg = '';
	$admin_id = $result['id'];

	if(isset($_POST['update']))
	{
		$username = $_REQUEST['username'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];

		$sql = "UPDATE `admin` SET `username`='$username',`password`='$password',`email`='$email' WHERE `id` = '$admin_id' ";
		$query = mysqli_query($con, $sql);
		if ($query = true) 
		{
			$msg = "<script> alert('SuccessFully Updated'); </script>";
			if($msg)
			header("Refresh: 0; url=personal_info.php");
			//header("Location: personal_info.php"); 
		} 
		else 
		{
			$msg = "<div class='error'> SomeThing Went Wrong! </div>";
		}   
	}
?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <?php
			include_once 'include/header.php';
			include_once 'include/sidebar.php';
			
		?>

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-center"> Personal Informations</h3>
                    </div>
                </div>
				<section class="content">
					<div class="container-fluid">
						<div class="card card-primary">
							<div class="card-header"> Personal Information </div>
							<div class="card-body">
							<?php echo $msg; ?>
								<form method="POST">
									<div class="row">
										<div class="form-group col-sm-6">
										  <label> UserName</label>
										  <input type="text" name="username" class="form-control" value="<?php echo $result['username']; ?>" required />
										</div>
										<div class="form-group col-sm-6">
										  <label> Email </label>
										  <input type="email" name="email" class="form-control" value="<?php echo $result['email']; ?>" required />
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6">
										  <label> Password </label>
										  <input type="text" name="password" minlength="4" maxlength="20" class="form-control" value="<?php echo $result['password']; ?>" required />
										</div>
									</div>
							</div>
								<div class="card-footer">
									  <button type="submit" name="update" class="btn btn-primary col-sm-3"> Update </button>
								</div>
							  </form>
						</div>
					</div>  
				</section>   				
			</div>
			<?php
				include_once 'include/footer.php';
			?>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <?php include_once 'include/js.php'; ?>
</body>
 
</html>