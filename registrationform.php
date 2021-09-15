<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<style>

		form {
		  border: 3px solid grey;
		  padding-top: 100px;
		  padding-right: 400px;
		  padding-left: 400px;
		  padding-bottom: 80px;
		}

		input[type=text], input[type=password] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  box-sizing: border-box;
		}

		button {
		  background-color: #04AA6D;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		}

		button:hover {
		  opacity: 0.8;
		}

		.cancelbtn {
		  width: auto;
		  padding: 10px 18px;
		  background-color: #f44336;
		}

		.container {
		  padding: 16px;
		}

		span.psw {
		  float: right;
		  padding-top: 16px;
		}

		@media screen and (max-width: 300px) {
		  span.psw {
		    display: block;
		    float: none;
		  }
		  .cancelbtn {
		    width: 100%;
		  }
		}

	</style>

	<body>
		<form action="logincode.php" method="post">

			<div class="form-group">
			    <label for="email"><b>Email Id</b></label>
			    <input type="text" name="email" class="form-control" placeholder="Enter Email Id" required>
			    <span class="error"></span>

			    <label for="password"><b>password</b></label>
			    <input type="password" placeholder="Enter Password" name="password" required>
			    
			    <button type="submit">Login</button>
			    <label>
			    	<input type="checkbox" checked="checked" name="remember"> Remember me
			    </label>
			    <br><br>
			    <span class="newuser">Don't have an account?<a href="http://localhost/website/registrationform.php">Sign up now</a>.</span>
			</div>

	  		<div class="container" style="background-color:#f1f1f1">
		    	<button type="button" class="cancelbtn">Cancel</button>
		    	<span class="psw">Forget <a href="http://localhost/website/forget-password.php">password?</a></span>
		  	</div>
		</form>

		<script>
			var modal = document.getElementById('id01');
			window.onclick = function(event) {
			  if (event.target == modal) {
			    modal.style.display = "none";
			  }
			}
		</script>
	</body>
</html>