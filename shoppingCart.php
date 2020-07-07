<?php
	include_once 'header.php';
	$connect = mysqli_connect("localhost","root","","onlineprintstore");
?>
	<section style="min-height:500px">
        <div class="col-25"><br>
			<div id="cart" class="container">
			<h2>My Shopping Cart</h2>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Product Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price Details</th>
						<th width="15%">Order Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["cart"])){
						$total =0;
						foreach($_SESSION["cart"] as $keys=>$values)
						{
							?>
							<tr>
								<td><?php echo $values["item_name"]; ?></td>
								<td><?php echo $values["item_quantity"]; ?></td>
								<td>$<?php echo $values["product_price"]; ?></td>
								<td>$<?php echo number_format($values["item_quantity"] * $values["product_price"],2);?></td>
								<td><a href="connproduct.php?action=delete&id=<?php echo $values['product_id'];?>"><span class="text-danger">Remove</span></a></td>
							</tr>
							<?php
							$total = $total + ($values["item_quantity"] * $values["product_price"]);
						}
							?>
							
							<tr>
								<td colspan="3" align="right">Total</td>
								<td align="right">$ <?php echo number_format($total, 2);?></td>
								<td></td>
							</tr>
							<?php
						}
						?>
				</table>
							<center>	
							<a href="payAndDelivery.php"><button id="checkout">Continue Checkout</button></a>
							</center>
			</div>
		</div>  
		</div><br><br><br>
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