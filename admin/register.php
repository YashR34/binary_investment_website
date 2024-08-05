<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IMAXCOIN - Crypto Currency</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body style="background-color:#222">
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST" action="elements/redirect.php" id="registrationForm">
        <div class="card">
            <div class="card-header" style="background-color: #251C50;">
                <h3 class="mb-1" style="text-align:center;color:#fff;">Registrations Form</h3>
                <p style="text-align:center;color:#fff;">Please enter your user information.</p>
            </div>
            <div class="card-body" style="background-color: #251C50;">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="sponsor_id" required="" placeholder="Refferal ID" autocomplete="off" style="background: #dddddd;border-radius: 20vh; color: #000;"  id="sponsor_id" >
                     <span id="sponsor_id_message" style="color: #fff;"></span>
                </div>
                 <!-- <div class="form-group">
                    <input class="form-control form-control-lg" type="number" name="pin" required="" placeholder="Pin" autocomplete="off">
                </div> -->
                <div class="form-group">
                    <select class="position form-control " id="position" name="position" require=""  style="background: #dddddd;border-radius: 20vh;color:#000;">
                                                
                                                <option value="0" style="color: #000;background-color: #fff;font-family:Arial, Helvetica, sans-serif;font-style: normal; font-weight: normal;">Left</option>
                                                <option value="1" style="color: #000;background-color: #fff;font-family:Arial, Helvetica, sans-serif;font-style: normal; font-weight: normal;">Right</option>
                                        </select>
                </div>
                <div class="form-group">
                    <select class="position form-control " id="gender" name="gender" require=""  style="background: #dddddd;border-radius: 20vh;color:#000;">
                                                <option value="0" style="color: #000;background-color: #fff;font-family:Arial, Helvetica, sans-serif;font-style: normal; font-weight: normal;">Male</option>
                                                <option value="1" style="color: #000;background-color: #fff;font-family:Arial, Helvetica, sans-serif;font-style: normal; font-weight: normal;">Female</option>
                                        </select>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="text" required="" placeholder="Username" name=user_name style="background: #dddddd;border-radius: 20vh; color: #000;">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" placeholder="Mobile no" name=user_mob style="background: #dddddd;border-radius: 20vh; color: #000;">
                </div>
                
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" placeholder="Password" name="password" style="background: #dddddd;border-radius: 20vh; color: #000;">
                </div>
               
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-success" type="submit" name="user_registration" id="user_registration" style="border-radius:20vh;"disabled>Register My Account</button>
                    
                </div>
                
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" required=""><span class="custom-control-label" style="color:#fff;">By creating an account, you agree the <a href="#" style="color:#00d2ff;text-decoration: underline;">terms and conditions</a></span>
                    </label>
                </div>
                
            </div>
            <div class="card-footer" style="background-color: #251C50;">
                <p style="color:#fff;">Already member? <a href="index.php" class="text-secondary" style="color:#00d2ff!important;text-decoration: underline;">Login Here.</a></p>
            </div>
        </div>
    </form>
    <script>
    $(document).ready(function() {
        document.getElementById("user_registration").disabled = true;
      $("#sponsor_id").on("keyup", function() {
        var sponsorId = $(this).val();

        $.ajax({
          url: "check_id.php",
          method: "POST",
          data: { sponsor_id: sponsorId },
          success: function(response) {
            var data = JSON.parse(response);
            if (data.exists) {
              $("#sponsor_id_message").text(data.name);
              $("#sponsor_id_message").removeClass("error");
                document.getElementById("user_registration").disabled = false;
            } else {
              $("#sponsor_id_message").text("Invalid sponsor ID. Please enter a valid one.");
              $("#sponsor_id_message").addClass("error");
                document.getElementById("user_registration").disabled = true;
            }
          },
          error: function(error) {
            console.error(error);
            document.getElementById("user_registration").disabled = true;
          }
        });
      });

      
    });
  </script>
    
    
</body>


 
</html>