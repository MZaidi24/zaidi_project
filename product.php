<?php include 'includes/session.php'; ?>
<?php
	$conn = $pdo->open();

	$slug = $_GET['product'];

	try{
		 		
	    $stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname, products.id AS prodid FROM products LEFT JOIN category ON category.id=products.category_id WHERE slug = :slug");
	    $stmt->execute(['slug' => $slug]);
	    $product = $stmt->fetch();
		
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	//page view
	$now = date('Y-m-d');
	if($product['date_view'] == $now){
		$stmt = $conn->prepare("UPDATE products SET counter=counter+1 WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid']]);
	}
	else{
		$stmt = $conn->prepare("UPDATE products SET counter=1, date_view=:now WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid'], 'now'=>$now]);
	}

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<script>
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<style type="text/css">
  .fb-profile img.fb-image-lg{
    z-index: 0;
    height: 200px;
    width: 100%;  
    margin-bottom: 10px;
}

.fb-image-profile
{
    margin: -90px 10px 0px 50px;
    z-index: 9;
    width: 30%; 
}

@media (max-width:768px)
{
    
.fb-profile-text>h1{
    font-weight: 600;
    font-size:16px;
    float: right;

}
</style>
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<div class="callout" id="callout" style="display:none">
	        			<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
	        			<span class="message"></span>
	        		</div>
	        		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div>
    <div class="fb-profile">
        <img height="40%" align="left" class="fb-image-lg" src="images/original.png" alt="Profile image example"/>
        <img src="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>" width="100%" class="zoom fb-image-profile thumbnail" data-magnify-src="images/large-<?php echo $product['photo']; ?>">
        <form class="form-inline" id="productForm">
		            			<div class="form-group" style="position: absolute; right: 100px; top:330px;">
			            			<div class="input-group col-sm-5">
			            				
			            				<!-- <span class="input-group-btn">
			            					<button type="hidden" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
			            				</span>
							          	<input type="hidden" name="quantity" id="quantity" class="form-control input-lg" value="1">
							            <span class="input-group-btn">
							                <button type="hidden" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i>
							                </button>
							            </span> -->
							            <input type="hidden" name="quantity" id="quantity" class="form-control input-lg" value="1">
							            <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">
							        </div> 
			            			<button type="submit" class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i> Add to Wishlist</button>
			            		</div>
		            		</form>
		            		
        <!-- <img align="left" class="fb-image-profile thumbnail" src="images/logo2.png" alt="Profile image example"/> -->
        <div style="position: absolute; top: 220px; left: 350px" class="fb-profile-text">
            <div>
		            		<h1><?php echo $product['prodname']; ?></h1>
		            		<h3><b>&#36; <?php echo number_format($product['price'], 2); ?></b></h3>
		            		<p><b>Category:</b> <a href="category.php?category=<?php echo $product['cat_slug']; ?>"><?php echo $product['catname']; ?></a></p>
		            		<!-- <p><b>Description:</b></p>
		            		<p><?php echo $product['description']; ?></p> -->
		            	</div>
        </div>
    </div>
</div> <!-- /container -->  
<!-- Dynamic pages -->
<br>
<div style="margin-top: 30px;" class="container">
<ul class="nav nav-tabs">
    <li class="cntr"><a data-toggle="tab" href="#menu1">About Us</a></li>
    <li class="cntr"><a data-toggle="tab" href="#menu2">Contact Us</a></li>
    <li class="cntr"><a data-toggle="tab" href="#menu3">Privacy Policy</a></li>
  </ul>

  <div class="tab-content">
   <!--  <div id="home" class="tab-pane fade in active">
      <h3>Hooka Pani</h3>
      <p>Hooka pani is an exclusive brand launch by the four emerging software engineers of nust.<br/> Currently this portal will be applied on all the cafe's and dhabas of Nust. We are planning to extend this to city level.</p>
    </div> -->
    <div id="menu1" class="tab-pane fade in active">
    	<br>
      <p><b>Description:</b></p>
		            		<p><?php echo $product['description']; ?></p>
      <div class="col-md-3">
        <img src="images/zaidi.jpg" class="img-circle img-responsive" alt="Cinque Terre"  width="200px" height="200px" data-toggle="popover" tabindex="50" data-content="muhammad irteza khan" data-placement="right"/>>
      </div>
        
            <div class="col-md-3">
        <img src="images/kaab.jpg" class="img-circle img-responsive" alt="Cinque Terre" width="200px" height="200px" data-toggle="popover" tabindex="50" data-content="muhammad kaab" data-placement="right"/>>
      </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Contact US</h3>
      <p>Email ID</p>
      <p>Contact Number</p>
      <div class="container">
  <div class="demo-1">
    <div class="main">
  <h1><center>AW yeah</center></h1>
    </div>
  </div>
</div>  
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Privacy Policy</h3>
      <center><img src="images/pp.png"></center>
    </div>
  </div>
</div>

		           <!--  <div class="row">
		            	<div class="col-sm-6">

		            		<img src="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>" width="100%" class="zoom" data-magnify-src="images/large-<?php echo $product['photo']; ?>">
		            		<br><br>
		            		<form class="form-inline" id="productForm">
		            			<div class="form-group">
			            			<div class="input-group col-sm-5">
			            				
			            				<span class="input-group-btn">
			            					<button type="button" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
			            				</span>
							          	<input type="text" name="quantity" id="quantity" class="form-control input-lg" value="1">
							            <span class="input-group-btn">
							                <button type="button" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i>
							                </button>
							            </span>
							            <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">
							        </div>
			            			<button type="submit" class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
			            		</div>
		            		</form>
		            	</div>
		            	<div class="col-sm-6">
		            		<h1 class="page-header"><?php echo $product['prodname']; ?></h1>
		            		<h3><b>&#36; <?php echo number_format($product['price'], 2); ?></b></h3>
		            		<p><b>Category:</b> <a href="category.php?category=<?php echo $product['cat_slug']; ?>"><?php echo $product['catname']; ?></a></p>
		            		<p><b>Description:</b></p>
		            		<p><?php echo $product['description']; ?></p>
		            	</div>
		            </div> -->
		            <br>
				   <!--  <div class="fb-comments" data-href="http://localhost/ecommerce/product.php?product=<?php echo $slug; ?>" data-numposts="10" width="100%"></div> -->
	        	</div> 
	        	<div  class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  	<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
	$('#add').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		quantity++;
		$('#quantity').val(quantity);
	});
	$('#minus').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		if(quantity > 1){
			quantity--;
		}
		$('#quantity').val(quantity);
	});

});
</script>
</body>
</html>