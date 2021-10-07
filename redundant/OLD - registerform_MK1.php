<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create an Account</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
	<link href="https://getbootstrap.com/docs/4.3/examples/starter-template/starter-template.css" rel="stylesheet">
	<link href="https://getbootstrap.com/docs/4.3/examples/sign-in/signin.css" rel="stylesheet">
	<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<style>
		body {
  			padding-top: 5rem;
		}
		.starter-template {
  			padding: 0rem 1.5rem;
  			text-align: center;
		}
	</style>
</head>
<body class="text-center">
	<main role="main" class="container">
		<div class="starter-template">
			<h1>Create a New Account</h1>
			<p class="lead">
				Enter a username, password and an
				<br>
				email to register your new account
			</p>
		</div>
		<form class="form-signin" action="register.php" method="post">
			<div class="form-group">
				<label for="username"></label>
				<input type="text" id="userinput" name="username" class="form-control" placeholder="Username" required autofocus oninput="this.value=this.value.slice(0,this.maxLength)" maxlength = "32"
				onkeypress='return lettersOnly(event)'/>
				<small style="color:darkgray"><i>Limited to 32 characters // a-z, A-Z, 0-9</small>
			</div>

			<div class="form-group">
				<label for="password"></label>
				<input type="password" name="password" class="form-control" placeholder="Password" required oninput="this.value=this.value.slice(0,this.maxLength)" maxlength = "64"
				onkeypress='return lettersOnly(event)'>
				<small style="color:darkgray"><i>Limited to 64 characters // a-z, A-Z, 0-9</small>
			</div>

			<div class="form-group">
				<label for="email"></label>
				<input type="text" name="email" class="form-control" placeholder="Email" required>
			</div>

			<input class="btn btn-lg btn-primary btn-block" type="submit" name="register" value="Register">
		</form>
		<br>
		<a href="landing.php">Sign in instead</a>
	</main>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="../scripts/restrictcharregist.js" ></script>
	
</body>
</html>