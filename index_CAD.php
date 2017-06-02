<?php
include "koneksi.php";


?>


<!--
author: septiyo.com 
author URL: http://septiyo.com

-->

<!DOCTYPE html>
<html>
<head>
<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->


<!--<script src="jquery-3.2.1.slim.min.js"></script>-->



<style>
    
    #menu_atas{
        
        //color: #ffffff;
        //margin-top: 7.5px;
        
        
    }
    
</style>





</head>
	
<body>
<?php

$sql_lengkap = 
        
$sql_lengkap = "SELECT * FROM kelengkapan_site";
$hasil_lengkap = mysqli_query($mysqli, $sql_lengkap);
$data = mysqli_fetch_assoc($hasil_lengkap);

$nama_toko   = $data[NAMA_WEBSITE];
$diskon      = $data[DISKON];
$link_diskon = $data[LINK_DISKON];
$email_billing = $data[EMAIL3];
$hp = $data[HP];






?>    
    
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
                            <p><?php echo $diskon;?><a href="<?php echo $link_diskon;?> ">&nbsp; SHOP NOW</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<li><a href="registered.html"> Create Account </a></li>
					<li><a href="login.html">Login</a></li>
					<li><a href="contact.html">Help</a></li>
					
				</ul>
			</div>
			<div class="product_list_header">  
					<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html"><?php echo $nama_toko;?></a></h1>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav" id="menu_atas">
<!--									<li class="active"><a href="index.html" class="act">Home</a></li>	
									 Mega Menu 
									<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Us<b class="caret"></b></a>
										-->
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
	<!-- main-slider -->
  
        
        
		<ul id="demo1">
                    
                    
                    <?php
                    
                        $sql = "SELECT * FROM slider_besar";
                        $hasil = mysqli_query($mysqli, $sql);
                        
                        while($data = mysqli_fetch_assoc($hasil)){
                            
                            echo "<li>";
                            echo "<img src='$data[NAMA_SLIDER]' alt='' >";
                            
                            echo "<div class='slide-desc'>
                                 <h3>$data[DESC]</h3></div>";
                            echo "</li>";
                            
                            
                        }
                  
                    
                    
                    ?>

		</ul>
	
<!-- //footer -->

<?php

$sql_contact = "SELECT * FROM kelengkapan_site";
$hasil_contact = mysqli_query($mysqli, $sql_contact);
$data = mysqli_fetch_assoc($hasil_contact);

$alamat = $data[ALAMAT];
$email_sales   = $data[EMAIL1];
$email_support = $data[EMAIL2];
$email_billing = $data[EMAIL3];
$hp = $data[HP];


?>
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><?php echo $alamat;?></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="<?php echo $email_sales;?>"><?php echo $email_sales;?></a></li>
                                                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="<?php echo $email_support;?>"><?php echo $email_support;?></a></li>
                                                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="<?php echo $email_billing;?>"><?php echo $email_billing;?></a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><?php echo $hp; ?></li>
					</ul>
				</div>
<!--				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Contact Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="short-codes.html">Short Codes</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.html">FAQ's</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Special Products</a></li>
					</ul>
				</div>-->
<!--				<div class="col-md-3 w3_footer_grid">
				<h3>Category</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Groceries</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Household</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">Personal Care</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="packagedfoods.html">Packaged Foods</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="beverages.html">Beverages</a></li>
					</ul>
				</div>-->
<!--				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Store</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.html">My Cart</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.html">Login</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.html">Create Account</a></li>
					</ul>
				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2017 Septiyo.com. All rights reserved | Design by <a href="http://septiyo.com">Septiyo.com</a></p>
			</div>
		</div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	

<script>
$(document).ready(function(){
    
//alert('x');
	$.getJSON("menu_atas.php", function(datax){
	
                
                   var trHTML = '';
                    $.each(datax, function (i, item) {
                        
                        //alert(item.NAMA_KATEGORI);
                            trHTML += '<li><a href="#">' + item.NAMA_KATEGORI + '</a></li>';
                    });
                    $('#menu_atas').append(trHTML).trigger('create');

	});//end json
        
//        $.get("slider_besar.php", function(a){
//            
//            alert(JSON.stringify(a));
//            
//            var b = '';
//            $.each(a, function(i, c){
//                
//                //alert(c.NAMA_SLIDER);
//                
//                d += '<ul><li><img src="' + c.NAMA_SLIDER + '" alt="" />Slider Description example<div class="slide-desc"><h3>Buy Rice Products Are Now On Line With Us</h3></div></li></ul>';
//                
//                $('ul, li').find('#demo1').append(d);
//                
//            });//end each
//            
//            
//            
//            
//            
//        });//end ajax
        
        
        
     
	
});//end document ready
</script>
</body>
</html>