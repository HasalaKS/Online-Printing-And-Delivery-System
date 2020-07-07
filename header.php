<?php
	session_start();
?>

<!DOCTYPE html>
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
		<link href="css/register.css" rel="stylesheet">
		<link href="css/contactUs.css" rel="stylesheet">
		<link href="css/myAccount.css" rel="stylesheet">
		<link href="css/shoppingCart.css" rel="stylesheet">


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
                                    <p>Online Print Store,No.123,Malabe Road,Sri Lanka</p>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="phone">
                                    <i class="fa fa-phone floatleft"></i>
                                    <p>0112 365874 / 0112 245967</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="social_icon text-right ">
									
									<?php
										if(isset($_SESSION['user_id'])){
											echo '<form action="logoutConn.php" method="POST">
												<button type="submit" name="submit" style="margin-top:-5px;margin-bottom:7px; padding:5px; color:#f44336;font-size:18px;font-weight: 600;font-family:serif;">Sign Out</button>
												  </form>';
										}
										else{
											echo '<form><a class="sign-active" href="register.php" target="">Sign up</a>/<a class="sign-active" href="login.php" target=""> Sign in</a></form>';
										}
									?>
									
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
                                <a class="navbar-brand" href="index.php"><img src="img/new2.png" width="200px" height="200px" alt=""></a>
                            </div>
                            
                            <div>
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li><a href="index.php">Home</span></a></li>
                                    <li><a href="aboutUs.php">About Us</a></li>
                                    <li><a href="products.php">Products</a></li>
                                    <li><a href="contactUs.php">Contact Us</a></li>
									<?php
							if(isset($_SESSION['user_id'])){
								echo '
									<li><a href="shoppingCart.php" target=""><i class="fa fa-shopping-cart"></i></a></li>
									<li><a href="myAccount.php" target=""><i class="fa fa-user"></i></a></li>';
								}
								?>
                                </ul>
                            </div>
                        </nav>
                    </div>
					
					
					
					
				
                <div class="header3">
                    <div class="header3_icon text-center">
						<input type="text" name ="text" class="search" placeholder="Search Here">
						<button type="submit" class="submit"><i class="fa fa-search"></i></button>
						<span style="padding-left:1%;">
						<?php
							if(isset($_SESSION['user_id'])){
							echo '<label style="color:dodgerblue;font-size:25px;font-family:serif;">Hello...! </abel>';echo $_SESSION['user_uid'];
							}
						?>
						
                    </div>
                </div>
                </div>
            </div>