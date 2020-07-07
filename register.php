<?php
	include_once 'header.php';
?>
		

			<form action="includes/signup.inc.php" method="POST" style="max-width:500px;margin:auto">
			<center><br><br>
			  <h2>Registration Form</h2><br>
			  <div class="input-container">
				<i class="fa fa-user icon"></i>
				<input class="input-field" type="text" placeholder="First Name" name="firstname">
			  </div>
			  <div class="input-container">
				<i class="fa fa-user icon"></i>
				<input class="input-field" type="text" placeholder="Second Name" name="secondname">
			  </div>
			  <div class="input-container">
				<i class="fa fa-envelope icon"></i>
				<input class="input-field" type="text" placeholder="Email" name="email">
			  </div>
			  <div class="input-container">
				<i class="fa fa-phone icon"></i>
				<input class="input-field" type="text" placeholder="Contact Number" name="contactnumber">
			  </div>
			  <div class="input-container">
				<i class="fa fa-map-marker icon"></i>
				<input class="input-field" type="text" placeholder="Address Line 1" name="addressline">
			  </div>
			  <div class="input-container">
				<i class="fa fa-map-marker icon"></i>
				<input class="input-field" type="text" placeholder="City" name="city">
			  </div>
			  <div class="input-container">
				<i class="fa fa-user icon"></i>
				<input class="input-field" type="text" placeholder="Use Name" name="uid">
			  </div>
			  <div class="input-container">
				<i class="fa fa-key icon"></i>
				<input class="input-field" type="password" placeholder="Password" name="pwd">
			  </div>
			  
			  <div class="clearfix">
				  <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
				  <button type="submit" name="btnSubmit" class="signupbtn">Sign Up</button>
				</div>
				
				
			  </center>
			</form>
			<br>
		
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