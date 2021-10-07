<?php
    session_start();
    session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign in</title>
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
            <div class="alert alert-success">
                <strong>Success!</strong>Your settings have been updated!</a>
            </div>
			<h1>Sign in</h1>
			<p class="lead">
				Enter your credentials to 
				<br>
				sign in to your account
			</p>
		</div>
		<form class="form-signin" action="credcheck.php" method="post">
			<div class="form-group">
				<label for="username"></label>
				<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
			</div>

			<div class="form-group">
				<label for="password"></label>
				<input type="password" name="password" class="form-control" placeholder="Password" required>
			</div>

			<input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login">
		</form>
		<br>
		<a href="registerform.php">Create account</a>
	</main>
</body>
</html>