<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/login.css">
	<title>Login</title>
</head>

<body>
	

		<!---Creating New  Account-->
		<div class="container" id="container">
			<div class="form-container sign-up-container">
				<form method="post" action="signup_form.php" enctype="multipart/form-data">
					<h1>CREATE NEW ACCOUNT</h1>
					<br>
					<input type="text" name="username" placeholder="Username*" required/>
					<input type="email" name="email" placeholder="Email*" required/>
					<input type="text" name="age" placeholder="Age*" required>
					<input type="text" name="discord" placeholder="Discord id#">
					<input type="password" name="password" placeholder="Password*" required/>
					<input type="password" name="password2" placeholder="Repeat Password*" required/>
					<button type="submit" name="submit">Sign Up</button>
				</form>
		</div>
		<!-------------------------->

		<!-------Login------->
		<div class="form-container sign-in-container">
			<form method="post" action="signin_form.php" enctype="multipart/form-data">
				<h1 style="text-transform: uppercase;">Sign in</h1>
				<br>
				<input type="email" name="email" placeholder="Email"  required/>
				<input type="password" name="password" placeholder="Password"  required/>
				<br>
				<button type="submit" name="submit">Sign In</button>
			</form>
		</div>
		<!-------------------->


		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and join the gaming word</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
			</div>
		</div>
	<script src="js/login.js"></script>
</body>
</html>