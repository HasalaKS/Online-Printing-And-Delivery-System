<?php
	include_once 'header.php';
	$connect = mysqli_connect("localhost","root","","onlineprintstore");
?>
            
		<section style="min-height:450px">
        <div class="col-25"><br><br><br>
			<div id="summary" class="container">
			<h2>Cart Summary</h2>
			<table>
					<tr>
						<th width="75%"></th>
						<th>Quantity</th>
						
					</tr>
					<?php
					if(!empty($_SESSION["cart"])){
						$total =0;
						foreach($_SESSION["cart"] as $keys=>$values)
						{
							?>
							<tr>
								<td><?php echo $values["item_name"]; ?></td>
								<td style="text-align:center"><?php echo $values["item_quantity"]; ?></td>
								
							<td><a href="connproduct.php?action=delete&id=<?php echo $values['product_id'];?>"></td>
							</tr>
							<?php
							$total = $total + ($values["item_quantity"] * $values["product_price"]);
						}
							?>
						
							</table>
							<h3 style="text-align:right">Total Ammount : $ <?php echo number_format($total, 2);?></h3>
							
							<?php
						}
						?>
				</table>
				<!--Asign details to Data Base-->
				<!------------------------------------------------------------------------------------------------------>
				<?php //Linking the configuration file
					require 'dbh.inc.php';
				?>	
					<?php

					if(isset($_POST["check"])){
					  $cus_id = $_SESSION['user_id'];
					  $cus_name = $_SESSION['user_uid'];
					  $cus_email= $_SESSION['user_email'];
					  $p_id = $values['product_id'];
					  $p_quantity = $values["item_quantity"];
					  
					  $sql= "INSERT INTO orders(order_id,Customer_ID,customer_name,product_id,quantity,customer_email)VALUES(NULL,'$cus_id','$cus_name','$p_id','$p_quantity','$cus_email')";
					  
					  //TODO the insertion 
						if(mysqli_query($conn,$sql)){
						  echo '<h3 style="color:red">Thank you! Your order is been processed.<br></h3>';
						  echo '<p style="color:red">Please send an email with the Required Documents and order ID.</p>';
						  $sql= "SELECT order_id FROM orders WHERE Customer_ID='$cus_id' AND customer_name ='$cus_name' AND product_id='$p_id' AND quantity='$p_quantity' AND customer_email='$cus_email'";
						  $result = mysqli_query($connect, $sql); 
						  $resultCheck = mysqli_num_rows($result);
							if ($resultCheck > 0){
							while($row = mysqli_fetch_assoc($result)){
							$id = $row["order_id"];
							echo "<h4>Your Order ID : $id<br></h4>";
							}
							}
						}
						else{
						  echo "Error:". $conn->error;
						}
					}
					
					?>
				<!------------------------------------------------------------------------------------------------------------->
	
			</div>
		</div>
					<?php
							if(!isset($_SESSION['user_id'])){
								echo '<section>
								<div class="col-25"><br><br>
										<div id="summary" class="container">
											<h3 style="color:red"><i style="font-size:50px;"class="fa fa-frown-o"></i>OOPSss...Please log in to the Web Site....</h3>
										</div>
									</div>
									  </section>';
						}
						
								?>
		<br><br>
					<?php
							if(isset($_SESSION['user_id'])){
								echo '<div class="col-25">
				<div id="summary" class="container">
						<h2>Your Details</h2>
					  <form name="myForm" method="POST" onsubmit="return validate()">
						<label>First Name</label>
						<input class="field" type="text" placeholder="Your Name" name="name">

						<label>E-mail</label>
						<input class="field" type="text" placeholder="Your E-mail" name="email">
						
						<h2>Shipping Address</h2>
				
						<label>Address</label>
						<input class="field" type="text" placeholder="Address Line 1" name="address1"><br><br>
						<input class="field" type="text" placeholder="Address Line 2" name="address2">
						
						<label>City</label>
						<input class="field" type="text" placeholder="City" name="city">
						
						<label>Zip code</label>
						<input class="field" type="text" placeholder="Zip code" name="zipcode">
						
					
   
						<h2>Payment</h2>

								
						<div class="icon-container">
						<i class="fa fa-cc-visa" style="color:navy;"></i>
						<i class="fa fa-cc-amex" style="color:blue;"></i>
						<i class="fa fa-cc-mastercard" style="color:red;"></i>
						<i class="fa fa-cc-discover" style="color:orange;"></i>
						</div>

						<h3 id="header-t"></h3>

						<input type="text" class="field" name="cardname" placeholder="Name on Card">
						<input type="text" class="field" name="cardnumber" placeholder="Credit Card Number">
						<input type="text" class="field" name="expmonth" placeholder="Expiry Month">
						<input type="text" class="field" name="expyear" placeholder="Expiry Year">
						<input type="text" class="field" name="cvv" placeholder="CVV">
						
						<center>	
							<input type="submit" name="check" id="checkout" value="Checkout">
						</center>
						
					  </form>
				</div>
				</div>
				</section>';
						}
						
								?>
				<!--Asign details to Data Base-->
				<!------------------------------------------------------------------------------------------------------>
				<?php //Linking the configuration file
					require 'dbh.inc.php';
				?>	
					<?php

					if(isset($_POST["check"])){
					  $cus_name = $_POST["name"];
					  $cus_email = $_POST["email"];
					  $cus_add1 = $_POST["address1"];
					  $cus_add2 = $_POST["address2"];
					  $cus_city = $_POST["city"];
					  $cus_zip = $_POST["zipcode"];
					  
					  $sql= "INSERT INTO shipping_address(Shipping_ID,Name,Email,Address1,Address2,City,Zip_Code)VALUES(NULL,'$cus_name','$cus_email','$cus_add1','$cus_add2','$cus_city','$cus_zip')";
					  
					  //TODO the insertion 
						if(mysqli_query($conn,$sql)){
						  
						}
						else{
						  echo "Error:". $conn->error;
						}
					}
					
					?>
				<!------------------------------------------------------------------------------------------------------------->
	
				<br><br><br>
		
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
		<script src="js/shipping.js"></script>
    </body>

</html>