<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="wrapper">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EPSP</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script>
        (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=200678680495680";
                fjs.parentNode.insertBefore(js, fjs);
            }
            (document, 'script', 'facebook-jssdk'));
    </script>

</head>
<style type="text/css">
   
	.front
	{
		position: absolute;
		top: 330px;
		left: 480px;
	}
	.frontfront{
		position: absolute;
		top: 135px;
		left: 220px;
        height: 200px;
	}
	.fronttext{
		position: absolute;
		top:-40px;
		left:0px;
	}
</style>
<body style="background-image: url(white.png);" class="hold-transition skin-blue layout-top-nav" >
	<?php include 'includes/navbar.php'; ?>
    
	<img style="position: relative;" src="images/bg.jpg" width="100%" height="120%">
			<div  class="front" class="col-lg-6 col-md-12 heffect"><img src="images/front.png"  class="img-responsive gallery image">
         <div id="demo" class="frontfront"><button onclick="window.location.href = 'signup.php';" type="button" id="btn">Get Started</button></div>
         <div class="fronttext"><img src="images/front text.png"></div>
     </div>

	
	    <div class="container">

	      <!-- Main content -->
	      <br>
        <br>
        <div class="container">
        <div  style="width: 40%; float:left; font-family: initial;">
        	<h1>The Freedom to Create Anything You Want</h1>
        </div>
        <div style="margin-bottom: 30px; float: right; width: 40%; font-size: 20px;">
        	<p>We believe anything is possible with the right event builder. Whether you're about to create a event for the first time or you're a long time pro manager, we've got you covered. You have two ways to start: Get free of cost management of your event by our team of professionals, you just pay for the services. You can also offer your services to the general public as a vendor. It’s time to get your event remembered as the best there was .</p>
        </div>
    </div>
                    


        <div class="row">


            <div class="col-lg-6 col-md-12 heffect" style="width:100%">
            	<center><h1 style="width: 30%;  font-family: initial; text-decoration: underline;">HERE IS HOW WE DO IT</h1></center>
            	<br>
                <img style="width: 100%" src="images/Capture.png" alt="309" class="img-responsive gallery image" >
                <div class="left">
                    <a href="309.html" target="_blank">
                        <div class="text" style="font-size: 20px; float: left; width: 28%; padding-left: 80px;"><i>Select Event Type</i>
                        </div>
                        <div class="text" style="font-size: 20px; float: left; width: 28%"><i>   Select Service required</i>
                    </div>
                    <div class="text" style="font-size: 20px; float: left; width: 23%"><i>Book and Hire</i>
                    </div>
                    <div class="text" style="font-size: 20px; float: left; width: 21%"><i>Share it with poeple</i>
                    </div>
                </a>
                <br>
                <br>
                <br>
                </div>
            </div>

	     
	    </div>
        <br>
        <br>
        
         <div class="container">
        <div style="width: 40%; float:left; font-family: initial;">
            <img src="images/vendorp.jpg">
        </div>
        <div style="margin-top: 120px; float: right; width: 40%; font-size: 20px;">
            <p>We offer a chance for local vendors to come forward and sign up thus extending there services to the digital realm. We do complete quality assurance so our customers dont have to worry about a thing!</p>
        </div>
    </div>
    <center><h1 style="width: 30%;  font-family: initial;">FOLLOW US ON SOCIAL MEDIA</h1>
    <div class='box-body'>
            <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
            <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
            <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
            <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
    </center>

	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>