<?php
	$p_title ="User Dashboard";
	include_once ('include/session.php');
	include_once ('include/head.php');
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
			
			$uid=$result['id']; 
			
			$users_data = mysqli_query($con, "SELECT * FROM `users`");
			$total_users= mysqli_num_rows($users_data);  // fetching number of users
			
			$lands_data = mysqli_query($con, "SELECT * FROM `lands`");
			$total_lands= mysqli_num_rows($lands_data); 

			$flats_data = mysqli_query($con, "SELECT * FROM `flats`");
			$total_flats= mysqli_num_rows($flats_data);
			
			$mylands_data = mysqli_query($con, "SELECT * FROM `lands` WHERE `id`='".$uid."'");
			$total_mylands= mysqli_num_rows($mylands_data);
			
			$myflats_data = mysqli_query($con, "SELECT * FROM `flats` WHERE `id`='$uid'");
			$total_myflats= mysqli_num_rows($myflats_data);
		?>

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-center"> User Dashboard </h3>
                    </div>
                </div>
				<div class="row">
                    <!-- metric 
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">MY LAND's</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary"> <?php //echo $total_mylands; ?>  </h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success">
                                    <i class="fa fa-fw fa-caret-up"></i><span><?php //echo $total_mylands; ?>%</span>
                                </div>
                            </div>
                            <div id="sparkline-1"></div>
                        </div>
                    </div>
                    <!-- /. metric -->
                    <!-- metric 
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">MY FLAT's</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary"> <?php //echo $total_myflats; ?> </h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-danger">
                                    <i class="fa fa-fw fa-caret-down"></i><span><?php //echo $total_myflats; ?>%</span>
                                </div>
                            </div>
                            <div id="sparkline-2"></div>
                        </div>
                    </div>
                    <!-- /. metric -->
					<!-- metric -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">LAND's</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary"> <?php echo $total_lands; ?> </h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-danger">
                                    <i class="fa fa-fw fa-caret-down"></i><span><?php  ?></span>
                                </div>
                            </div>
                            <div id="sparkline-2"></div>
                        </div>
                    </div>
                    <!-- /. metric -->
					<!-- metric -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">FLAT's</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary"> <?php echo $total_flats; ?> </h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-danger">
                                    <i class="fa fa-fw fa-caret-down"></i><span><?php ?></span>
                                </div>
                            </div>
                            <div id="sparkline-2"></div>
                        </div>
                    </div>
                    <!-- /. metric -->
					<!-- metric 
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">MY Message</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary"> <?php //echo $total_properties; ?> </h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-danger">
                                    <i class="fa fa-fw fa-caret-down"></i><span><?php //echo $total_properties; ?>%</span>
                                </div>
                            </div>
                            <div id="sparkline-2"></div>
                        </div>
                    </div>
                    <!-- /. metric -->
                    <!-- metric -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Total Customers</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary"> <?php echo $total_users; ?> </h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-danger">
                                    <i class="fa fa-fw fa-caret-down"></i><span><?php ?></span>
                                </div>
                            </div>
                            <div id="sparkline-2"></div>
                        </div>
                    </div>
                    <!-- /. metric -->
                </div>
            </div>
			<?php
				include_once 'include/footer.php';
			?>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
   <?php include_once 'include/js.php'; ?>
</body>
 
</html>