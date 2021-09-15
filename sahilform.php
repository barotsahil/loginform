<DOCTYPE html>
<html>
	<head>
		<title>Registration form</title>

		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
			background-color: white;
			}
		div {
			border-radius: 5 px;
			background-color: lightslategrey;
			padding-top: 2%;
			padding-right: 4%;
			padding-left: 4%;
			}	

		input[type=text], select{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			}

		input[type=submit] {
			width: 100%;
			background-color: lightskyblue;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			}

	</style>
	<body>
		<div>
			<h3 style="text-align: center;">Registration Form</h3>
			<form method="" action="">
				
				<label for="fname"><b><strong>Email Id: </strong></b></label>
					<input type="text" id="fname" name="email" placeholder="Your email Id..." value="" required=""> 
						
				<label for="password"><strong>Password: </strong></label>
					<input type="text" id="password" name="password" placeholder="Your password...." value="" required="">

				<label for="repeat_password"><strong>Repeat Password: </strong></label>
					<input type="text" id="repeat_password" name="repeat_password" placeholder="Repeat your password" value="" required="">

				<label for="country"><strong>Country: </strong></label>
				<select id="country" name="country">
			  		<option selected > --Select Country--</option>
			  		<option>India </option>
			  		<option>United Kingdom</option>
			  		<option>United States</option>
			  	</select>

			  	<label for="state"><strong>States: </strong></label>
				<select id="state" name="state">
			  		<option selected > --Select State--</option>
			  		<option>Gujarat </option>
			  		<option>Maharastra</option>
			  		<option>Delhi</option>
			  	</select>

			  	<label for="city"><strong>City: </strong></label>
				<select id="city" name="city">
			  		<option selected > --Select City--</option>
			  		<option>Ahmedabad</option>
			  		<option>Gandhinagar</option>
			  		<option>Surat</option>
			  	</select>

			  	<strong>Select Your Hoobies:</strong><br>
			  	Football: <input type="checkbox" name="hobbies[]" value="Football">
			  		<label for="hobbies"> </label>
			  	Cricket: <input type="checkbox" name="hobbies[]" value="Cricket">
					<label for="hobbies"> </label>
				Hockey: <input type="checkbox" name="hobbies[]" value="Hockey">
					<label for="hobbies"> </label>
				<br><br>
				
				<strong>Select Your Gender: </strong><br>
				<input type="radio" name="gender" value="Male"> Male
				<input type="radio" name="gender" value="Female"> Female
				<input type="radio" name="gender" value="Other"> other
				<br><br>

				<input type="submit" name="submit" value="submit">
			
			</form>
		</div>
	</body>
</html>