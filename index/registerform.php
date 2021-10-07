<!doctype html>
<html lang="en">
<head>
    <title>Create a new account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../scripts/headundernav.css">
</head>
<body>
    <div class="undernav-h1 container">
        <div class="col">
            <h1 class="h2" style="text-align:center">Create a New Account</h1>
            <hr class="my-2">
            <br>
            <form action="register.php" method="post" onsubmit="return matchpass() && validateform() && validateemail();" name="info">
                <div class="container">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="username" style="text-align:left">Username: </label>
                            <div class="col-10">
                                <input type="text" id="userinput" name="username" class="form-control" placeholder="Username" required autofocus oninput="this.value=this.value.slice(0,this.maxLength)" maxlength = "32"
                                onkeypress='return lettersOnly(event)'/>
                                <small style="color:darkgray; text-align:left;"><i>Limited to 4 - 32 characters & a-z, A-Z, 0-9</i></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="password" style="text-align:left">Password: </label>
                            <div class="col-10">
                                <input type="password" name="password" class="form-control" placeholder="Password" required oninput="this.value=this.value.slice(0,this.maxLength)" maxlength = "64"
                                onkeypress='return lettersOnly(event)'>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="repassword" style="text-align:left">Re-enter password: </label>
                            <div class="col-10">
                                <input type="password" name="repassword" class="form-control" placeholder="Re-enter password" required oninput="this.value=this.value.slice(0,this.maxLength)" maxlength = "64"
                                onkeypress='return lettersOnly(event)'>
                                <small style="color:darkgray; text-align:left;"><i>Limited to 4 - 64 characters</i></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="email" style="text-align:left">Email: </label>
                            <div class="col-10">
                                <input type="text" name="email" class="form-control" placeholder="Email" required oninput="this.value=this.value.slice(0,this.maxLength)" maxlength = "50">
                                <small style="color:darkgray; text-align:left;"><i>Limited to 50 characters</i></small>
                            </div>
                        </div>

                        <input class="btn btn-lg btn-primary btn-block" type="submit" name="register" value="Register">
                    </div>
                </div>
            </form>
            <br>
            <div style="text-align:center">
                <a href="landing.php">Sign in instead</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../scripts/uservalidate.js" ></script>
</body>
</html>

