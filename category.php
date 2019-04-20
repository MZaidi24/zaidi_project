<?php include 'includes/session.php'; ?>
<?php
    
	$slug = $_GET['category'];
	


	$conn = $pdo->open();

	try{
		$stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :slug");
		$stmt->execute(['slug' => $slug]);
		$cat = $stmt->fetch();
		$catid = $cat['id'];
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	$pdo->close();

?>
<?php include 'includes/header.php'; ?>
<body style="background-image: url(white.png);" class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 <div class="container">
    <div  class="fb-profile">
        <img width="100%" height="350px" align="left" class="fb-image-lg" src="images/Original.png" alt="Profile image example"/>
        <div style="position: absolute; padding-left: 350px; padding-top: 150px;>
<li class="dropdown">
            <a style="color: #029DAB; font-size: 20px;" href="#" class="dropdown-toggle" data-toggle="dropdown">Select the type of service you are looking for <span class="caret"></span></a>
            <ul style="margin-left: 450px; " class="dropdown-menu" role="menu">
              <?php
             
                $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM category");
                  $stmt->execute();
                  foreach($stmt as $row){
                    echo "
                      <li><a href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
                    ";                  
                  }
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();

              ?>
            </ul>
          </li>
      </div>


        <!-- <div style="position: absolute; padding-left: 350px; padding-top: 150px;:>
        <li class="dropdown">
              <a style="color: #029DAB; font-size: 20px;" class="dropdown-toggle" data-toggle="dropdown" href="c2.html">Select the type of service you are looking for <span class="caret"></span></a>

              <ul style="margin-left: 450px; " class="dropdown-menu">
                <li><a  href="c1-stationary.html">Venue</a></li>
                <li><a  href="c1-mart.html">Catering</a></li>
                <li><a  href="c1-cafe.html">Accomodation</a></li>
                 <li><a  href="c1-cafe.html">Salons</a></li>
                  <li><a href="c1-cafe.html">Car Rentals</a></li>
              </ul>
            </li>
        </div> -->

    </div>
</div>
	  <div >
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div  class="row">
	        	<div class="col-sm-1">
	        		<ul style="font-size: 20px; position: absolute; left: -80px; top: 50px;">
	       <li>BUDGET</li>
	   </ul><div style="font-size: 20px; position: absolute; left: -80px; top: 80px;">0
	   <input type="range" name="quantity" min="1" max="10"><p style="padding-left: 30px; float: right;">100000 pkr</p></div>
	        	
	        	<ul style="font-size: 20px; position: absolute; left: -150px; top: 170px;">
	       <li>Search within Radius</li>
	   </ul>
	   <div style="font-size: 20px; position: absolute; left: -80px; top: 200px;">0
	   <input type="range" name="quantity" min="1" max="10"><p style="padding-left: 30px; float: right;">10 mile</p></div>
	   </div>
	        	<div class="col-sm-11">
		            <h1 class="page-header"><?php echo $cat['name']; ?></h1>
		       		<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
						    $stmt->execute(['catid' => $catid]);
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b><h4><a href='product.php?product=".$row['slug']."'>".$row['Address']."</a></h4></b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
	        	</div>
	        	<!-- <div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div> -->
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>