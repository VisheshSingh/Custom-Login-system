<?php
    //Include DB Config
    require_once 'db.php';

    //Init vars
    $password = $email =  '';
    $password_err = $email_err = '';

    //Process form when POST submit
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitize POST - Security Measures
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);

        //Validate email
        if(empty($email)){
            $email_err = 'Please enter email';
        }

        //Validate name
        if(empty($password)){
            $password_err = 'Please enter password';
        }

        //Make sure errors are empty
        if(empty($email_err) && empty($password_err)){
            die('VALIDATION PASSED');
        }
    }
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
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
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