<?php
    //Include DB Config
    require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Login to your account</title>
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-body bg-light mt-5">
                    <h2>Login</h2>
                    <p>Fill in your credentials</p>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" class="form-control form-control-lg" value="">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg" value="">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="submit" value="Login" class="btn btn-success btn-block">
                            </div> 
                            <div class="col">
                                <a href="register.php" class="btn btn-light btn-block">Not a member? Register</a>
                            </div> 
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
</body>
</html>