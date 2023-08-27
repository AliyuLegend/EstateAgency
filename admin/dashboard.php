<?php
	$p_title ="Dashboard";
	include_once ('include/session.php');
	include_once 'include/head.php';
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
			
			$users_data = mysqli_query($con, "SELECT * FROM `users`");
			$total_users= mysqli_num_rows($users_data);  // fetching number of users
			
			$lands_data = mysqli_query($con, "SELECT * FROM `lands`");
			$total_lands= mysqli_num_rows($lands_data);  // fetching number of Lands

			$flats_data = mysqli_query($con, "SELECT * FROM `flats`");
			$total_flats= mysqli_num_rows($flats_data);  // fetching number of Flats
			
			//$properties_data = mysqli_query($con, "SELECT * FROM `properties`");
			//$total_properties= mysqli_num_rows($properties_data);  // fetching number of Properties
			
			$messages_data = mysqli_query($con, "SELECT * FROM `messages`");
			$total_messages= mysqli_num_rows($messages_data);  // fetching number of Agents
			
			$agents_data = mysqli_query($con, "SELECT * FROM `agents_details`");
			$total_agents= mysqli_num_rows($agents_data);  // fetching number of Agents
		?>

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-center"> Admin Dashboard</h3>
                    </div>
                </div>
				<div class="row">
                    <!-- metric -->
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Customers</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary"> <?php echo $total_users; ?>  </h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success">
                                    <i class="fa fa-fw fa-caret-up"></i><span><?php ?></span>
                                </div>
                            </div>
                            <div id="sparkline-1"></div>
                        </div>
                    </div>
					
					<!-- metric -->
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Agents</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary"> <?php echo $total_agents; ?>  </h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success">
                                    <i class="fa fa-fw fa-caret-up"></i><span><?php  ?></span>
                                </div>
                            </div>
                            <div id="sparkline-1"></div>
                        </div>
                    </div>
					
                    <!-- /. metric -->
                    <!-- metric -->
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Lands</h5>
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
					
					 <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Flats</h5>
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
                    <!-- metric -->
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Messages</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary"><?php echo $total_messages; ?></h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-danger">
                                    <i class="fa fa-fw fa-caret-down"></i><span><?php   ?></span>
                                </div>
                            </div>
                            <div id="sparkline-3">
                            </div>
                        </div>
                    </div>
                    <!-- /. metric -->
                    <!-- metric 
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Growth</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary">+28.45% </h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success">
                                    <i class="fa fa-fw fa-caret-up"></i><span>4.87%</span>
                                </div>
                            </div>
                            <div id="sparkline-4"></div>
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