<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    ::placeholder {
        color: #000!important;
        opacity: 1; /* Firefox */
    }

    ::-ms-input-placeholder { /* Edge 12-18 */
        color: #000!important;
    }
    </style>
</head>

<body style="background-color:#222">
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container" >
        <div class="card " >
            <div class="card-header text-center" style="background-color: #251C50;"><a href="../index.php"><img class="logo-img" src="assets/images/logo1.png" alt="logo"></a><span class="splash-description" style="color:#fff;">Please enter your user information.</span></div>
            <div class="card-body" style="background-color: #251C50;">
                <form method="POST" action="elements/redirect.php">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="user_id" type="text" placeholder="Username" autocomplete="off" style="background: #dddddd;border-radius: 20vh; color: #000;">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" type="password" placeholder="Password" style="background: #dddddd;border-radius: 20vh; color: #000;">
                    </div>
                   
                    <button  name="login" type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius:20vh;">Sign in</button>
                    
                    
                </form>
            </div>
              

            <div class="card-footer p-0" style="background-color:red;">
                <div class="card-footer-item card-footer-item-bordered" style="background-color: green;">
                    <a href="register.php" class="footer-link" style="color:#fff;">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered" style="background-color: red;">
                    <a href="#" class="footer-link" style="color:#fff;">Forgot password</a>
                </div>
            </div>
        </div>
    </div>

  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
   
</body>
 
</html>