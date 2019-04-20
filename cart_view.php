<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<body class="hold-transition skin-blue layout-top-nav">








	<style type="text/css">
	#birth_date_input, #age_container {
    text-align: center;
    margin: 0px;
    margin-left: auto;
    margin-right: auto;
}

#age_container {
   
}
.card {
	background: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: 20px;
  text-align: center;
  font-family: arial;
  padding: 20px;
}

.title {
  color: grey;
  font-size: 18px;
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
	        		
	
  <h2 style="font-size: 30px"><i>Manage Your Event</i></h2>
		
<h4><a style="position: absolute; top: 25px; right:20px; color: black; float: right; font-family: cursive;" href="category.php">Back to Browse</a></h4>
<ul style="background-color: white;" class="nav nav-tabs">
    <li class="cntr"><a data-toggle="tab" href="#menu1">Dashboard</a></li>
    <li class="cntr"><a data-toggle="tab" href="#menu2">Budget</a></li>
    <li class="cntr"><a data-toggle="tab" href="#menu3">Wishlist</a></li>
    <li class="cntr"><a data-toggle="tab" href="#menu4">Hired Vendors</a></li>
    <li class="cntr"><a data-toggle="tab" href="#menu5">Guest List</a></li>
    <li class="cntr"><a data-toggle="tab" href="#menu6">CheckList</a></li>
  </ul>
  <div class="tab-content">
  
    <div id="menu1" class="tab-pane fade in active">

      <div style="display: inline-flex;">
   
<div class="card">
  <img src="images/logo2.png" alt="John" style="width:20%; size: 20%;">
  <h1>Day Count</h1>
  <p class="title">No. of Days</p>
  <span id="exact_age"></span>
  <div id="birth_date_input">Event Date*: <input type="date" id="birth_date"></div>
 
        <div id="calculate">Calculate days to event</div>
        
        <div id="age_container"></div>
<div>
	


	
</div>
  
  </div>
  <div class="card">
  <img src="images/logo2.png" alt="John" style="width:20%; size: 20%;">
  <h1>Wishlist Items</h1>
  <p class="title">Number of Items</p>

  
  </div>
   <div class="card">
  <img src="images/logo2.png" alt="John" style="width:20%; size: 20%;">
  <h1>Budget</h1>
  <p class="title">Amount Paid</p>
  <p>Amount Due</p>
</div>
 


</div>
<div style="display: inline-flex;">
	 <div class="card">
  <img src="images/logo2.png" alt="John" style="width:20%; size: 20%;">
  <h1>Hired Vendors</h1>
  <p class="title">Accepted and Pending</p>
 
  
  </div>
    <div class="card">
  <img src="images/logo2.png" alt="John" style="width:20%; size: 20%;">
  <h1>Checklist</h1>
  <p class="title">Completed</p>
  <p>Unchecked</p>
  <!-- <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p> -->
</div>

 
    <div class="card">
  <img src="images/logo2.png" alt="John" style="width:20%; size: 20%;">
  <h1>Invited Guests</h1>
  <p class="title">Accepted And Rejected</p>
  
  
  </div>

   
</div>
	        		<!-- <h1 class="page-header">YOUR CART</h1>
	        		<div class="box box-solid">
	        			<div class="box-body">
		        		<table class="table table-bordered">
		        			<thead>
		        				<th></th>
		        				<th>Photo</th>
		        				<th>Name</th>
		        				<th>Price</th>
		        				<th width="20%">Quantity</th>
		        				<th>Subtotal</th>
		        			</thead>
		        			<tbody id="tbody">
		        			</tbody>
		        		</table>
	        			</div>
	        		</div> -->

	        	</div>
	        	<div id="menu2" class="tab-pane fade">
	        		
	        		
<br>
<div>
<table id="myTable" style="background: white;" class="table table-bordered">
    <thead>
    	<button  type="button" class="btn btn-sm btn-default" onclick="rowAddNew(myTable);">
<span class="glyphicon glyphicon-plus" > Add New </span>
      <tr style="background-color: #029DAB; color:white;">
        <th>Vendor</th>
        <th>Total Cost</th>
        <th>Amount Paid</th>
        <th>Amount Due</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Imperial Marquees</td>
        <td>1000000</td>
        <td>250000</td>
        <td>750000</td>
      </tr>
      <tr>
        <td>Dani Caterers</td>
        <td>1000000</td>
        <td>250000</td>
        <td>750000</td>
      </tr>
      <tr>
        <td>Amjad Flowers</td>
        <td>1000000</td>
        <td>250000</td>
        <td>750000</td>
      </tr>
    </tbody>
  </table>
  </div>
  
	        	</div>

	        	<div id="menu3" class="tab-pane fade">
     <h1 class="page-header">Your Wishlist</h1>
	        		<div class="box box-solid">
	        			<div class="box-body">
		        		<table class="table table-bordered">
		        			<thead>
		        				<th></th>
		        				<th>Photo</th>
		        				<th>Name</th>
		        				<th>Price</th>
		        				<th width="20%">Quantity</th>
		        				<th>Subtotal</th>
		        			</thead>
		        			<tbody id="tbody">
		        			</tbody>
		        		</table>
	        			</div>
	        		</div>
    </div>
<div id="menu4" class="tab-pane fade">
	        		
	        		
<br>
<div>
<table id="myTable" style="background: white;" class="table table-bordered">
    <thead>
    	<button  type="button" class="btn btn-sm btn-default" onclick="rowAddNew(myTable);">
<span class="glyphicon glyphicon-plus" > Add New </span>
      <tr style="background-color: #029DAB; color:white;">
        <th>Vendor</th>
        <th>Finalized</th>
        <th>Amount Paid</th>
        

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Imperial Marquees</td>
        <td><input type="checkbox" name="yo"></td>
        <td>250000</td>
        
      </tr>
      <tr>
        <td>Dani Caterers</td>
        <td><input type="checkbox" name="yo"></td>
        <td>250000</td>
        
      </tr>
      <tr>
        <td>Amjad Flowers</td>
        <td><input type="checkbox" name="yo"></td>
        <td>250000</td>
        
      </tr>
    </tbody>
  </table>
  </div>
  
	        	</div>
	        	<div id="menu5" class="tab-pane fade">
	        		
	        		
<br>
<div>
<table id="myTable" style="background: white;" class="table table-bordered">
    <thead>
    	<button  type="button" class="btn btn-sm btn-default" onclick="rowAddNew(myTable);">
<span class="glyphicon glyphicon-plus" > Add New </span>
      <tr style="background-color: #029DAB; color:white;">
        <th>Guest Name</th>
        <th>Invite Accepted</th>
        
        

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Muhammad Kaab</td>
        <td><input type="checkbox" name="yo"></td>
        
        
      </tr>
      <tr>
        <td>Muhammad Zaidi</td>
        <td><input type="checkbox" name="yo"></td>
        

      </tr>
      <tr>
        <td>Muhammad Ali Tahir</td>
        <td><input type="checkbox" name="yo"></td>
        
        
      </tr>
    </tbody>
  </table>
  </div>
  
	        	</div>
	        	<div id="menu6" class="tab-pane fade">
	        		
	        		
<br>
<div>
<table id="myTable" style="background: white;" class="table table-bordered">
    <thead>
    	<button  type="button" class="btn btn-sm btn-default" onclick="rowAddNew(myTable);">
<span class="glyphicon glyphicon-plus" > Add New </span>
      <tr style="background-color: #029DAB; color:white;">
        <th>To-Do Item</th>
        <th>Completed</th>
        
        

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Decide Budget</td>
        <td><input type="checkbox" name="yo"></td>
        
        
      </tr>
      <tr>
        <td>Create Guest List</td>
        <td><input type="checkbox" name="yo"></td>
        

      </tr>
    </tbody>
  </table>
  </div>
  
	        	</div>


	        </div>
	    </div>
	        	<div class="col-sm-3">
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
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="plugins/bootstable.js"></script>
<script>
 $('table').SetEditable();
</script>
<script type="text/javascript">$(document).ready(function(){
    $("#calculate").click(function(){
        var mdate = $("#birth_date").val().toString();
        var yearThen = parseInt(mdate.substring(0,4), 10);
        var monthThen = parseInt(mdate.substring(5,7), 10);
        var dayThen = parseInt(mdate.substring(8,10), 10);
        
        var today = new Date();
        var birthday = new Date(yearThen, monthThen-1, dayThen);
        
        var differenceInMilisecond = birthday.valueOf() - today.valueOf();
        
        var year_age = Math.floor(differenceInMilisecond / 31536000000);
        var day_age = Math.floor((differenceInMilisecond % 31536000000) / 86400000);
        
        if ((today.getMonth() == birthday.getMonth()) && (today.getDate() == birthday.getDate())) {
            alert("Happy B'day!!!");
        }
        
        var month_age = Math.floor(day_age/30);
        
        day_age = day_age % 30;
        
        if (isNaN(year_age) || isNaN(month_age) || isNaN(day_age)) {
            $("#exact_age").text("Invalid birthday - Please try again!");
        }
        else {
            $("#exact_age").html("<h4><span id=\"age\">" + day_age + " days</span> left<h4>");
        }
    });
});</script>
<script>
var total = 0;
$(function(){
	$(document).on('click', '.cart_delete', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'cart_delete.php',
			data: {id:id},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.minus', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		if(qty>1){
			qty--;
		}
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.add', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		qty++;
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	getDetails();
	getTotal();

});

function getDetails(){
	$.ajax({
		type: 'POST',
		url: 'cart_details.php',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
			getCart();
		}
	});
}

function getTotal(){
	$.ajax({
		type: 'POST',
		url: 'cart_total.php',
		dataType: 'json',
		success:function(response){
			total = response;
		}
	});
}
</script>
<!-- Paypal Express -->
<script>
paypal.Button.render({
    env: 'sandbox', // change for production if app is live,

	client: {
        sandbox:    'ASb1ZbVxG5ZFzCWLdYLi_d1-k5rmSjvBZhxP2etCxBKXaJHxPba13JJD_D3dTNriRbAv3Kp_72cgDvaZ',
        //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
    },

    commit: true, // Show a 'Pay Now' button

    style: {
    	color: 'gold',
    	size: 'small'
    },

    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                    	//total purchase
                        amount: { 
                        	total: total, 
                        	currency: 'USD' 
                        }
                    }
                ]
            }
        });
    },

    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
			window.location = 'sales.php?pay='+payment.id;
        });
    },

}, '#paypal-button');
</script>
</body>
</html>