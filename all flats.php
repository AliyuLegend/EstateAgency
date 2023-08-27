<?php 
	$Page_title='All FLATS';
	include_once 'include/dbconn.php';
	include_once 'include/head.php';
	
?>

</head>

<body>
	<?php 
		
		include_once 'include/header.php';
	
	?>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single"> Properties</h1>
              <span class="color-text-a"> All FLATS</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  All FLATS
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
			<div class="col-sm-12">
				<div class="grid-option">
				  <form>
					<select class="custom-select">
					  <option selected>All</option>
					  <option value="1">New to Old</option>
					  <option value="2">For Rent</option>
					  <option value="3">For Sale</option>
					</select>
				  </form>
				</div>
			</div>
			<?php
				$query="SELECT * FROM `flats` WHERE flat_status = 1 ";
				$run=mysqli_query($con,$query);
				if(mysqli_num_rows($run)<1)
				{
					echo " <h1> No Record Found  </h1>";
				}
				else
				{
					while($data = mysqli_fetch_assoc($run))
					{
			?>
			
					  <div class="col-md-4">
						<div class="card-box-a card-shadow">
						  <div class="img-box-a">
							<img src="admin/property images/<?php echo $data['pic']; ?>" alt="Property Image" class="img-a img-fluid">
						  </div>
						  <div class="card-overlay">
							<div class="card-overlay-a-content">
							  <div class="card-header-a">
								<h2 class="card-title-a">
								  <a  href="single flat.php?f_id=<?php echo $data['id'];?>"> Flat 
									<h6> <?php echo $data['location'];?></a>
								</h6>
							  </div>
							  <div class="card-body-a">
								<div class="price-box d-flex">
								  <span class="price-a"><?php echo $data['status'];?> | Naira.<?php echo $data['price'];?></span>
								</div>
								<a href="single flat.php?f_id=<?php echo $data['id'];?>" class="link-a">Click here to view
								  <span class="ion-ios-arrow-forward"></span>
								</a>
							  </div>
							  <div class="card-footer-a">
								<ul class="card-info d-flex justify-content-around">
								  <li>
									<h4 class="card-info-title">Area</h4>
									<span><?php echo $data['area'];?>
									  <sup>Court Road</sup>
									</span>
								  </li>
								  <li>
									<h4 class="card-info-title">Beds</h4> 
									<span><?php echo $data['rooms'];?></span>
								  </li>
								  <li>
									<h4 class="card-info-title">Baths</h4> 
									<span><?php echo $data['bathrooms'];?></span>
								  </li>
								  <li>
									<h4 class="card-info-title">Garages</h4>
									<span><?php echo $data['garage'];?></span>
								  </li>
								</ul>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
			<?php 
					}
				}
			?>
        </div>
       
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->
<?php include_once "include/footer.php"; ?>
</body>

</html>