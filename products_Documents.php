<?php
	include_once 'header.php';
	$connect = mysqli_connect("localhost","root","","onlineprintstore");
?>
<?php
/*VARIABLE DECLARATION*/
	
	$dynamicList = "";
	$sql = "SELECT * FROM products WHERE category='Documents' ORDER BY id ASC
	";
	$result = mysqli_query($connect, $sql); 
	$resultCheck = mysqli_num_rows($result);
	
/*FETCHING DATA FROM TABLE - producttable*/
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			$product_id = $row["id"]; 
			$product_type = $row["category"];
			$product_name = $row["p_name"];
			$image = $row["image"]; 
			$price = $row["price"];
			$dynamicList .='<figure>
			<img src="'.$image.'">
			<figcaption>'.$product_name.'</figcaption>
			<a class="button" href="view-product.php?id='.$product_id.'">View</a>
			</figure>';
		}
	}
?>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/product.css">

</head>
       <section id="main-sec">
			<div id="wrap">
				<div align="center" class="container">
					<h2 align="center" style="font-family: 'Roboto Slab', serif;font-weight: 600;">Documents</h2>
					<div id="columns" class="columns_5">		
					<!-- DISPLAYING USING DYNAMICLIST VARIABLE -->
					<?php echo $dynamicList; ?>
				  
					</div>
				</div>
			</div>
		</section>
		<!--footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>&COPY;2018 by OnlinePrintStore.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://gmail.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html><!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
		<link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
		<link href="css/products_Banners.css" rel="stylesheet">
	
	

    </head>

    <body>
		<!--top header-->
		<section id="header">
            <div class="header-area">
                <div class="top_header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="address">
                                    <i class="fa fa-home floatleft"></i>
                                    <p>Online Print Store,No.123,XXXX Road,Sri Lanka</p>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="phone">
                                    <i class="fa fa-phone floatleft"></i>
                                    <p>0112 365874 / 0112 245967</p>
                                </div>
                            </div>
							
							
                            <div class="col-md-4">
                                <div class="social_icon text-right">
									<a class="sign-active" href="register.html" target="">Sign up</a>/<a class="sign-active" href="login.html" target=""> Sign in</a>
									
                                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://gmail.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                   
                
				<!--bottom header-->
                <div class="header_menu text-center" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="home.html"><img src="img/new2.png" width="200px" height="200px" alt=""></a>
                            </div>
                            
                            <div>
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li class="active1"><a href="home.html">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="aboutUs.html">About Us</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="#counter">Pay and Delivery</a></li>
                                    <li><a href="contactUs.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
				
                <div class="header3">
                    <div class="header3_icon text-center">
						<input type="text" name ="text" class="search" placeholder="Search Here">
						<button type="submit" class="submit"><i class="fa fa-search"></i></button>
						<span style="padding-left:1%;">		
						<a href="shoppingCart.html" target=""><i class="fa fa-shopping-cart"></i></a>
                        <a href="myAccount.html" target=""><i class="fa fa-user"> My Account</i></a>
                    </div>
                </div>
                </div>
            </div>
                

				
			<!--slide show-->	
            </div>
			<div class="slideshow-container">
				<div class="mySlides">
				  <img src="img/pic1.jpg">
				</div>

				<div class="mySlides">
				  <img src="img/pic2.jpg">
				</div>

				<div class="mySlides">
				  <img src="img/pic3.jpg">
				</div>
				
				<div class="mySlides">
				  <img src="img/pic4.jpg">
				</div>
				
				<div class="mySlides">
				  <img src="img/pic8.jpg">
				</div>

				</div>
				<br>

				<div style="text-align:center">
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span>
				</div>
			</div>
		</section>
                <section id="welcome">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="wel_header">
								<h2>Documents</h2>
								
							</div>
						</div>
					</div>
					
						
						
						<center>
							<div class="item" id="p2">
								<div class="single_item">
									<div class="item_list">
										<div class="">
											<img src="img/b.jpg">
										</div><br>
										<h5>Price</h5>
										<h3 class="size" style="color:red">$1</h3><br>
										<form>
										<h5>Quntity</h5>
										<input type="text" placeholder="Enter Quntity" name="quantity" style="text-align:center"><br><br>
										<h5>Details to be included</h5>
										<center>
										<input type="file" name="file">
										</center>
										<br><br>
										<button type="submit" class="addToCart"><i class="fa fa-shopping-cart" style="font-size:20px"></i> Add to Cart</button>
									</form>
										</div>
								</div>
							</div>
							<br><br><br><br>
						</div>		
						
        </section>
		
		<!--footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>&COPY;2018 by OnlinePrintStore.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://gmail.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
		<!--slide show js link-->
		<script src="js/slide.js"></script>
    </body>

</html>