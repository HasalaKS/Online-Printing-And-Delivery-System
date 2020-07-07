<?php
	include_once 'header.php';
	$connect = mysqli_connect("localhost","root","","onlineprintstore");
?>

<?php
if (isset($_GET['id'])){
	$id = $_GET['id'];
}
?>

<?php
//VARIABLE DECLARATION
	
	$sql = "SELECT * FROM products WHERE id='$id' LIMIT 1;";
	$result = mysqli_query($connect, $sql); 
	$resultCheck = mysqli_num_rows($result);
	
//FETCHING DATA FROM TABLE - producttable
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			$product_type = $row["category"];
			$product_name = $row["p_name"];
			$image = $row["image"]; 
			$price = $row["price"];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/view.css">
	<script src="cart.js"></script>

</head>
<body>	
	<section id="main-sec"><br><br>
	<div class="o-container">
	<div class="show-case-main">
		<img id="show-case" src="<?php echo $image; ?>"></img> 
	</div>
	
	
	<?php
			$query = "SELECT * FROM products WHERE id='$id' LIMIT 1;";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
				?>
		<div class="show-case-info">
		<form method="POST" action="connproduct.php?action=add&id=<?php echo $row["id"]; ?>">
			<div class="head-text"><?php echo $product_name; ?></div>
			<div class="sub-text"><?php echo $product_type; ?></div>
			<div class="product-price">$<?php echo $price; ?></div>
			<br>
			<input type="hidden" name="hidden_name" value="<?php echo $row["p_name"];?>">
			<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
			<div class="quantity-text" name="quantity">Quantity</div>
			<input id="number" type="number" name="quantity" min="1" required>
			<input type="submit" name="add" class="btn btn-default" value="Add to Cart">
		</form>
		</div>
			<?php
			}
		}
		?>
		
	
	<!-- PRODUCT DETAILS -->
	
	<button class="collapsible">Product Details</button>
	<div class="content">
	<p>
	
	<br>
	- Fabric: Tulle and Lace
	<br>
	- Length: Chapel Train
	<br>
	- Silhouette: Sheath/Column
	<br>
	- Back Style: Illusion
	<br>
	- Neckline: V Neck
	<br>
	
	&nbsp;
	
	</p>
	</div>
	
	<br>
	
	
	
	<button class="collapsible">Shipping Details</button>
	<div class="content">
	<p>
	<br>
	Shipping is an additional 1-10 business days depending on location. Ship time will be provided at checkout.
	<br><br>
	Free returns are available for standard sizes within 10 days. Custom sizes are final sale.<br>
	&nbsp; 
	
	</p>
	</div>
	
	</div>
	</section>
	<div id="myModal" class="modal">
	<div class="modal-content">
    <span class="close">&times;</span>
	<div class="container"><div class="row"><div class="col" id="cart"></div></div></div>
	</div>
	</div>
	
</body>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

<script>
//Modal Element
var modal = document.getElementById('myModal');
//Button that open the modal. 
var btn = document.getElementById("log-bag");
//Button that closes the modal. 
var span = document.getElementsByClassName("close")[0];
//Open function
function openthis() {
    modal.style.display = "block";
}
//Close function
span.onclick = function() {
    modal.style.display = "none";
}
//Close function (no button)
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</html>