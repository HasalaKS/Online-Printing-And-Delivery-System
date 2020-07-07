<?php
	include_once 'header.php';
?>
		<br><br>
		<section>
			<div class="container">
				<center>
				<div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>My Account</h3>
                        </div>
                    </div>
                </div>
                    
                    
                        
				<img src="img/user.jpg" style="width:200px; height:200px;" alt=""><br>
				<button><i class="fa fa-edit"style="color:red"></i>Edit Profile Picture</button>
				<hr style="border: 2px solid lightgrey"><hr style="border: 2px solid lightgrey">
				<center>
				<div class="output-container">
				<i style="color:#A6ACAF">First Name</i> <a href=""><i class="fa fa-edit" style="color:red">Edit</i></a>
				<input class="output-field" type="text" name="firstname" value=" <?php echo $_SESSION['user_first']; ?>" readonly>
			  </div>
			  <div class="output-container">
				<i style="color:#A6ACAF">Last Name</i> <a href=""><i class="fa fa-edit" style="color:red">Edit</i></a>
				<input class="output-field" type="text" name="secondname" value="<?php echo $_SESSION['user_last']; ?>" readonly>
			  </div>
			  <div class="output-container">
				<i style="color:#A6ACAF">Email Address</i> 
				<input class="output-field" type="text" name="email" value="<?php echo $_SESSION['user_email']; ?>" readonly>
			  </div>
			  <div class="output-container">
				<i style="color:#A6ACAF">Contact Number</i>
				<input class="output-field" type="text" name="contactnumber" value="<?php echo $_SESSION['user_phone']; ?>" readonly>
			  </div>
			  <div class="output-container">
				<i style="color:#A6ACAF">Address</i> <a href=""><i class="fa fa-edit" style="color:red">Edit</i></a>
				<input class="output-field" type="text" name="addressline1" value="<?php echo $_SESSION['user_add']; ?>" readonly>
			  </div>
			  <div class="output-container">
				<i style="color:#A6ACAF">City</i> 
				<input class="output-field" type="text" name="city" value="<?php echo $_SESSION['user_city']; ?>" readonly>
			  </div>
			  <div class="output-container">
				<i style="color:#A6ACAF">User Name</i> <a href=""><i class="fa fa-edit" style="color:red">Edit</i></a>
				<input class="output-field" type="text" name="username" value="<?php echo $_SESSION['user_uid']; ?>" readonly>
			  </div>
			  <div class="output-container">
				<i style="color:#A6ACAF">Password</i> <a href=""><i class="fa fa-edit" style="color:red">Change</i></a>
				<input  class="output-field" type="password"  name="password" value="<?php echo $_SESSION['user_pwd']; ?>" readonly>
			  </div>
			  </center>
			<hr style="border: 2px solid lightgrey"><hr style="border: 2px solid lightgrey">
			
			
			
			
			
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
		<link href="css/myAccount.css" rel="stylesheet">
    </body>

</html>
