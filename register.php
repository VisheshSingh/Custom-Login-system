<?php
    //Include DB Config
    require_once 'db.php';

    //Init vars
    $name = $email = $password = $confirm_password = '';
    $name_err = $email_err = $password_err = $confirm_password_err = '';

    //Process form when POST submit
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitize POST - Security Measures
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);

        //Validate email
        if(empty($email)){
            $email_err = 'Please enter email';
        }

        //Validate name
        if(empty($name)){
            $name_err = 'Please enter name';
        }

        //Validate password
        if(empty($password)){
            $password = 'Please enter password';
        }elseif(strlen($password) < 6){
            $password = 'Password must be atleast 6 characters';
        }

        //Validate confirm_password
        if(empty($confirm_password)){
            $confirm_password = 'Please confirm password';
        }elseif($password !== $confirm_password){
            $confirm_password = 'Passwords do not match';
        }

        //Make sure errors are empty
        if(empty($name_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
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
    <title>Register An Account</title>
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-body bg-light mt-5">
                    <h2>Create an account</h2>
                    <p>Fill in this form to register</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control form-control-lg" value="">
                            <span class="invalid-feedback"></span>
                        </div>
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
                        <div class="form-group">
                            <label for="confirm_password">Confirm password</label>
                            <input type="password" name="confirm_password" class="form-control form-control-lg" value="">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="submit" value="Register" class="btn btn-success btn-block">
                            </div> 
                            <div class="col">
                                <a href="login.php" class="btn btn-light btn-block">Have an account? Login here!</a>
                            </div> 
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
</body>
</html>