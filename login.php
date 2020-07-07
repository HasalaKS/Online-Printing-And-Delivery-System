<?php
	include_once 'header.php';
?>
        <section style="height:500px"><br><br><br><br>
        <form action="includes/login.inc.php" method="POST" style="max-width:500px;margin:auto">
			<center>
			  <h2>Login</h2><br>
			  <div class="input-container">
				<i class="fa fa-user icon"></i>
				<input class="input-field" type="text" placeholder="User Name" name="uid">
			  </div>
			  <div class="input-container">
				<i class="fa fa-key icon"></i>
				<input class="input-field" type="password" placeholder="Password" name="pwd">
			  </div>
			  
			  <div class="clearfix">
				  <a href="index.php"><button type="button" class="cancelbtn">Cancel</button><a>
				  <button type="submit" name="signupbtn" class="signupbtn">Login</button>
			   </div>
			</center>
		</form>
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
