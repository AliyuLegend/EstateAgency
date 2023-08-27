	<?php 
		$act ='active';
		$no_active ='Nul';
	?>
		<!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="dashboard.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                            </li>
							<li class="nav-item ">
                                <a class="nav-link" href="personal_info.php"><i class="fa fa-fw fa-info"></i>Personal Info</a>
                            </li>
							<li class="nav-divider">
                                Users
                            </li>
							<li class="nav-item ">
                                <a class="nav-link" href="users.php"><i class="fa fa-fw fa-users"></i>Users</a>
                            </li>
							<li class="nav-divider">
                                Properties
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-table"></i>Properties</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="Lands.php"> Lands</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="Flats.php"> Flats / Houses</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
							<li class="nav-divider">
                                Messages
                            </li>
							<li class="nav-item">
								<li class="nav-item ">
									<a class="nav-link" href="Messages.php"><i class="fas fa-envelope"></i> Messages</a>
								</li>
							</li>
							<li class="nav-item">
								<li class="nav-item ">
									<a class="nav-link" href="personal_info.php"><i class="fas fa-lock"></i> Change Password</a>
								</li>
							</li>
							<li class="nav-item">
								<li class="nav-item ">
									<a class="nav-link" href="logout.php"><i class="fas fa-power-off"></i> LogOut</a>
								</li>
							</li>
						</ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->