<?php
	include_once 'header.php';
	$connect = mysqli_connect("localhost","root","","onlineprintstore");
?>
<?php
/*VARIABLE DECLARATION*/
	
	$dynamicList = "";
	$sql = "SELECT * FROM products WHERE category='Envelopes' ORDER BY id ASC";
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
					<h2 align="center">Envelopes</h2>
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

</html>