<?php
	$p_title ="LAND DETAILS";
	include_once ('include/session.php');
	include_once 'include/head.php';
	
	$id=$_GET['l_id'];
	$query="SELECT * FROM `lands` WHERE `id`='$id'";
	$run=mysqli_query($con,$query);
	$result=mysqli_fetch_array($run);
	
	$msg=$msg1=$msg01=$msg11=$msg12=$msg13=$msg14=$msg15=$msg16=$msg2=$msg3='';
    $area=$price=$status=$location=$discription='';
	include ('include/dbconn.php');
    include ('../admin/include/functions.php');
	if(isset($_POST['update']))
    {
        $area               = $_REQUEST['area'];
        $price              = $_REQUEST['price'];
		$status 			= $_REQUEST['status'];
		$agent_name			= $_REQUEST['agent_name'];
		$pic 				= $_FILES['pic']['name'];
		$pic_tmp_name		= $_FILES['pic']['tmp_name'];
		$pic2 				= $_FILES['pic2']['name'];
		$pic2_tmp_name		= $_FILES['pic2']['tmp_name'];
		$location 			= $_REQUEST['location'];
		$discription		= $_REQUEST['discription'];
		$date 				= date('d-m-y h:ia');
		$u_id				= $result['id'];
		$land_status		= $_REQUEST['land_status'];
		
		
		if (empty($area)) 
	 	{
	 		$msg01="<div class='error'> Enter Total Area of Your Property</div>";	
	 	}
		elseif (!is_numeric($area)) 
	 	{
	 		$msg01="<div class='error'>Only Digit are Allowed </div>";	
	 	}
		elseif ($area < 0) 
	 	{
	 		$msg01="<div class='error'> ***Should contain Positive value </div>";	
	 	}
		elseif (empty($price)) 
	 	{
	 		$msg11="<div class='error'> Enter Total Price of Your Property</div>";	
	 	}
		
		elseif ($price < 0) 
	 	{
	 		$msg11="<div class='error'> ***Should contain Positive value </div>";	
	 	}
		elseif (empty($location)) 
	 	{
	 		$msg16="<div class='error'> Enter Location Of Your Property </div>";	
	 	}
		elseif (strlen($location) < 2) 
	 	{
	 		$msg16="<div class='error'>Should contain Atleast 3 Letters  </div>";	
	 	}
        else
        {
            $sql = "UPDATE `lands` SET `area`='$area',`price`='$price',`status`='$status',`agent_name`='$agent_name',`pic`='$pic',`pic2`='$pic2',`location`='$location',`discription`='$discription',`Date`='$date',`land_status`='$land_status' WHERE `id`='$id'";
            $data = mysqli_query($con, $sql);
			move_uploaded_file($pic_tmp_name, "../admin/property images/$pic");
			move_uploaded_file($pic2_tmp_name, "../admin/property images/$pic2");
            if($data = true)
            {
                $msg="<script> alert('Successfully Updated');</script>";
				if($msg)
				{
					header("Refresh: 0; url=update_myland.php?l_id=".$id);
				}					
            }
            else
            {
                $msg="<div class='error'>*** Something is Wrong IN INSERT Query! </div>";
            }
        }
    }
?>

	<script type="text/javascript">
		function stopcursor(fromTextBox)
		{
			var length= fromTextBox.value.length;
			var maxlength=fromTextBox.getAttribute("maxlength");

			if(length == maxlength)
			{
				document.getElementById().focus();
			}
		}
	</script>
	
	<style type="text/css">
		.error
		{ 
			color: red;
		}
	</style>
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
                <!-- Content Header (Page header) -->
					<div class="content-header">
					  <div class="container-fluid">
						<div class="row mb-2">
						  <div class="col-sm-6">
							<h1 class="m-0 text-dark">LAND Details</h1>
						  </div><!-- /.col -->
						  <div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
							  <li class="breadcrumb-item"><a href="user_dashboard.php">Home</a></li>
							  <li class="breadcrumb-item"><a href="MY Lands.php"> LANDS </a></li>
							  <li class="breadcrumb-item active"> Land Details </li>
							</ol>
						  </div><!-- /.col -->
						</div><!-- /.row -->
					  </div><!-- /.container-fluid -->
					</div>
					<!-- /.content-header -->
				<section class="content">
					<div class="container-fluid">
						<div class="card">
							<div class="card-header bg-primary"> LAND Information </div>
							<div class="card-body">
							<?php echo $msg; ?>
								<form method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="form-group col-sm-6">
											<label> Area </label>
											<input type="text" name="area" maxlength="7" value="<?php echo $result['area'];?>" placeholder="Total Area of House/Land(in Marlas)..." class="form-control" required />
											<?php echo $msg01;?>
										</div>
										<div class="form-group col-sm-6">
											<label> Price</label>
											<input type="text" name="price" maxlength="11" onkeyup="stopcursor(this)" value="<?php echo $result['price'];?>" placeholder="Whole Price..." class="form-control" />
											<?php echo $msg11; ?>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6">
											<label> Status </label>
											<select name="status" class="custom-select" value="<?php echo $result['status'];?>" required >
												<option value='SALE'>SALE</option>
												<?php
													if($result['status']=='SALE')
													{
														echo "<option value='SALE'  selected='selected'>SALE</option>";
													}
													?>
											</select>
										</div>
										<div class="form-group col-sm-6">
											<label> Choose Agent </label>
											<select name="agent_name" class="custom-select" >
											<option value="<?php echo htmlentities($result['agent_name']);?>">
											<?php echo htmlentities($result['agent_name']);?></option>
												<?php $ret=mysqli_query($con, "select * from agents_details");
													while($row=mysqli_fetch_array($ret)) {
														?>
													<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['fullname']);?>
													<input type="hidden" name="id" value="<?php echo $row['id'];?>">
														</option>
														<?php } ?>
												
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="row">
												<div class="form-group col-sm-6">
													<label> Image1 </label>
													<input type="file" name="pic" class="form-control" required />
												</div>
												<div class="form-group col-sm-6">
													<img src="../admin/property images/<?php echo $result['pic']; ?>" width="200" height="100" style="float: right; border-radius: 10px;">
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="row">
												<div class="form-group col-sm-6">
													<label> Image2 </label>
													<input type="file" name="pic2" class="form-control" required />
												</div>
												<div class="form-group col-sm-6">
													<img src="../admin/property images/<?php echo $result['pic2']; ?>" width="200" height="100" style="float: right; border-radius: 10px;">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6">
											<label> Location </label>
											<textarea name="location" minlength="3" class="form-control" required /><?php echo $result['location'];?></textarea>
											<?php echo $msg16; ?>
										</div>
										<div class="form-group col-sm-6">
											<label> Discription </label>
											<textarea name="discription" minlength="3" class="form-control" required /><?php echo $result['discription'];?></textarea>
											<?php echo $msg16; ?>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6">
											<label> Land Status </label>
											<select type="text" name="land_status" value="<?php echo $result['land_status'];?>" class="custom-select">
											<?php
												if($result['land_status']=='1')
												{
													echo("<option value='1' selected='selected'> Active</option>");
													echo "<option value='0'>Inactive</option>";
												}
												else
												{
													echo "<option value='0' selected='selected'>Inactive</option>";
													echo("<option value='1'> Active</option>");
												}
												?>
											</select>
										</div>
										
									</div>
							</div>
								<div class="card-footer">
									  <button type="submit" name="update" class="btn btn-primary col-sm-3"><i class="fa fa-share" style="color: green;"></i> Update </button>
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