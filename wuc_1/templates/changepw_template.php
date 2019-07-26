<div class="form-three widget-shadow">
							<div data-example-id="form-validation-states-with-icons">
							 <form method="POST" action="index.php?page=changepw">

							 	<?php if(isset($_GET['msg'])) echo $_GET['msg']; unset($_GET['msg']); ?>
								
							  <div class="form-group has-success has-feedback">
							  <label class="control-label" for="inputSuccess2">Current Password</label> 
							  <input type="password" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" name="old"> 
							  
							</div> 

							<div class="form-group has-success has-feedback"> 
								<label class="control-label" for="password">New Password</label>
								 <input type="password" class="form-control" id="password" aria-describedby="inputWarning2Status" name="new"> 
								 
								</div>
								  <div class="form-group has-success has-feedback">
								   <label class="control-label" for="confirm_password">Confirm New Password</label>

								    <input type="password" class="form-control" id="confirm_password" aria-describedby="inputError2Status">					   
								       </div>  

								       <input type="submit" name="changepw" class="btn btn-default" value="Change">

								   </form> 

								   <script type="text/javascript">
									var password = document.getElementById("password")
								  , confirm_password = document.getElementById("confirm_password");

								function validatePassword(){
								  if(password.value != confirm_password.value) {
								    confirm_password.setCustomValidity("Passwords Don't Match");
								  } else {
								    confirm_password.setCustomValidity('');
								  }
								}

								password.onchange = validatePassword;
								confirm_password.onkeyup = validatePassword;

								   </script>
								        </div>
						</div>