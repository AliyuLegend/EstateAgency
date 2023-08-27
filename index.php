<?php 
	$Page_title='Home';
	include_once 'include/dbconn.php';
	include_once 'include/head.php';
	
?>

</head>

<body>
	<?php 
		include_once 'include/searchbar.php';
		include_once 'include/header.php';
	?>
  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/Slide_1.jpg)">
        <div class="overlay overlay-a"></div>
      </div>
      
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/Slide_2.jpg)">
        <div class="overlay overlay-a"></div>
      </div>
      
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/Slide_3.jpg)">
        <div class="overlay overlay-a"></div>
      </div>
      
    </div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest Properties</h2>
              </div>
              <div class="title-link">
                <a href="all lands.php">All Properties
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="property-carousel" class="owl-carousel owl-theme">
		<?php
			$qry="SELECT * FROM `lands`";
           // $qry= "SELECT * FROM `lands` ORDER BY 4 DESC LIMIT 0, 6";
            $run= mysqli_query($con, $qry);
			if(mysqli_num_rows($run)<1)
			{
				echo " <h1> No Record Found  </h1>";
			}
			else
			{
				while($data = mysqli_fetch_assoc($run))
				{
					
        ?>
          <div class="carousel-item-b">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="admin/property images/<?php echo $data['pic']; ?>" alt="Property Image"  height="300px">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="single land.php?l_id=<?php echo $data['id'];?>">Land
                        <h6> <?php echo $data['location'];?></a> </h6>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a"><?php echo $data['status'];?> | Naira.<?php echo $data['price'];?></span>
                    </div>
                    <a href="single land.php?l_id=<?php echo $data['id'];?>" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title" >Area</h4>
                        <span><?php echo $data['area'];?>
                          <sup>Court Road</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Price</h4>
                        <span><?php echo $data['price'];?></span>
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
	<?php 
	$query="SELECT * FROM `flats`";
				$run2=mysqli_query($con,$query);
				if(mysqli_num_rows($run2)<1)
				{
					echo " <h1> No Record Found  </h1>";
				}
				else
				{
					while($data2 = mysqli_fetch_assoc($run2))
					{
						?>
		   <div class="carousel-item-b">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="admin/property images/<?php echo $data2['pic']; ?>" alt="Property Image"  height="300px">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
						<a  href="single flat.php?f_id=<?php echo $data2['id'];?>"> Flat 
                        <h6> <?php echo $data2['location'];?></a> </h6>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
						<span class="price-a"><?php echo $data2['status'];?> | Naira.<?php echo $data2['price'];?></span>
                    </div>
					<a href="single flat.php?f_id=<?php echo $data2['id'];?>" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span><?php echo $data2['area'];?>
                          <sup>Court Road</sup>
                        </span>
                      </li>
					  <li>
									<h4 class="card-info-title">Beds</h4> 
									<span><?php echo $data2['rooms'];?></span>
								  </li>
								  <li>
									<h4 class="card-info-title">Baths</h4> 
									<span><?php echo $data2['bathrooms'];?></span>
								  </li>
								  <li>
									<h4 class="card-info-title">Garages</h4>
									<span><?php echo $data2['garage'];?></span>
								  </li>
                      <li>
                        <h4 class="card-info-title">Price</h4>
                        <span><?php echo $data2['price'];?></span>
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
    </section><!-- End Latest Properties Section -->
	</div>
  </main><!-- End #main -->
  

<?php
	include_once "include/footer.php";
?>
</body>

</html>