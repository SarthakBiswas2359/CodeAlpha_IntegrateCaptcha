
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="loginnew.css">
		<script src="https://www.google.com/recaptcha/api.js"></script>

		<title>Login</title>
	</head>

	<body>

		<div class="bg-pic">
			<section class="features">
				<form method="POST" id="demo-form" action="form.php">
					<br><br>
					<fieldset>
						<legend>
							<div class="text-container">
								<h1>#Memories</h1>
							</div>
						</legend>

						<br><br>

						<div class="form-floating mb-3">



							<input type="email" class="form-control" id="email" name="email"
								placeholder="email">
							<label for="email">Email</label>
						</div>

						<div class="form-floating">
							<input type="password" class="form-control" id="password"
								name="password" placeholder="Password" style="border-bottom: 1px solid rgba(128, 128, 128, 0.745);">
							<label for="password">Password</label>
						</div><br>
						
				

							<!-- <button class="g-recaptcha"
								data-sitekey="6LfQF6snAAAAAGd-wHFbFFYB8RQcTlAaZAPKYdAF"
								data-callback='onSubmit'
								data-action='submit'>Login</button> -->
								<div class="g-recaptcha" data-sitekey="6Leb7LMnAAAAAOJ3o4F0OBBkyE97_OXAfSJriqFU"></div><br/>
								<button  type="submit" name="submit">Log in</button>

						

						<!-- <br><h6 style="text-align: center;">OR</h6>
							<div class="box-3">
								<button><a href="signup.php" style="text-decoration: none; color: black;">Create</a></button>

							</div> -->
						
					</fieldset>
					
				</form>
			</section>
		</div>
		<footer>
			<p>&copy; 2023 #Memories. All rights reserved.</p>
			

		</footer>


		<script>
				function confirm_box(){
				var a=confirm("Are you sure you wan to submit the details?");
				if(a==true){
					alert("Successfully Logged in!")
          
				}
				else{
					alert("Failed to log in");
					
				}
			}

			
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }

			</script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
		<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
	</body>
</html>