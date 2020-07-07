<?php
	include_once 'header.php';
?>
                

				
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
		<br>
        <section id="contactpage">
            <div class="container">
			
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>Our Office Information</h3>
                        </div>
                    </div>
                </div>
                
                <center>
				<section>
                    <div class="office_location text-left">
                                <div class="address">
                                    <i class="fa fa-map-marker"><span>Online Print Store,No.123,XXXX Road,Sri Lanka</span></i>
                                </div>
								
                                <div class="phone">
                                    <i class="fa fa-phone"><span>0112 365874 / 0112 245967</span></i>
                                </div>
								
                                <div class="email">
                                    <i class="fa fa-envelope"><span>onlineprintstoreinfo@mail.com</span></i>
                                </div>
								
                                <div id="map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.188778616097!2d79.973141!3d6.9148346!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c63e344ab9a7536!2sSri+Lanka+Institute+of+Information+Technology!5e0!3m2!1sen!2slk!4v1533474310076" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
				</section>
				</center>
				
                    
                        <div class="row">
						<div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>Send A Message</h3>
                        </div>
                    </div>
                </div>
				<section>
				<div class="container">
					  <form method="POST" id="contactpage">
						<label class="file">First Name</label>
						<input type="text" name="firstname" placeholder="Your name...">

						<label class="file">Last Name</label>
						<input type="text" name="lastname" placeholder="Your last name...">
						
						<label class="file">Email</label>
						<input type="text" name="email" placeholder="Your Email...">
						
						<label class="file">Subject</label>
						<textarea id="subject" name="subject" placeholder="Write something..." style="height:200px"></textarea>
							
						<button type="submit" name="btnSubmit" class="signupbtn">Send</button>
					  </form>
				</div>
				</section>
            </div>
			<br>
			<!--Asign details to Data Base-->
	<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
		<?php //Linking the configuration file
			require 'dbh.inc.php';
		?>	
			<?php

			if(isset($_POST["btnSubmit"])){
			  $name1 = $_POST["firstname"];
			  $name2 = $_POST["lastname"];
			  $guest_email = $_POST["email"];
			  $guest_message = $_POST["subject"];
			  
			  
			  $sql= "INSERT INTO messages(Message_no,Fname,Lname,Email,Subject)VALUES(NULL,'$name1','$name2','$guest_email','$guest_message')";
			  
			  //TODO the insertion 
				if(mysqli_query($conn,$sql)){
				  echo "Message send successfully";
				}
				else{
				  echo "Error:". $conn->error;
				}
			}
			mysqli_close($conn)
			?>
	<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
			
                
                
		
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