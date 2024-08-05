<!doctype html>
<html lang="en">
<?php include_once("elements/connection.php");?>
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
<?php include("elements/sidebar.php");?>

<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">

                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">ADD FUND TO YOUR DOWNLINE MEMBERS</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Add Fund To Your Downline Members</a></li>
                                        
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card" style="background-color: #251C50; border-radius: 3vh;">
                            	<?php $data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id=$my_id"))?>
                            
                                <div class="card-body">
                                    <form class="needs-validation" method="POST" action="elements/redirect.php" novalidate>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01" style="color:#fff;font-size:20px"><b>AVAILABLE FUND : $<?php echo $data['wallet']?></b></label>  
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01" style="color:#fff;"> USER ID</label>
                                                <input type="text" class="form-control" pattern="[\d]+"  id="user_id" name="user_id" required style="background: #dddddd;border-radius: 20vh;" autocomplete="off">  
                                                 <span id="user_id_message" ></span>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01" style="color:#fff;">AMOUNT</label>
                                                <input type="text" pattern="[\d]+" title="Please Enter Valid Amount" class="form-control" id="validationCustom01" name="amount" required style="background: #dddddd;border-radius: 20vh;" autocomplete="off"> 
                                                <input type="text" class="form-control" id="validationCustom01" name="my_user" value="<?php echo $my_id?>" required hidden> 
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-success" type="submit" name="fund_pay" id="fund_pay" style="border-radius: 20vh;margin-top: 9px;" disabled>PAY</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p id="user_name"></p>
                                </div>
                            </div>
                        </div>
                    <!-- ============================================================== -->
                    <!-- fixed header  -->
                    <!-- ============================================================== -->
                   
                    <!-- ============================================================== -->
                    <!-- end fixed header  -->
                    <!-- ============================================================== -->
               
                  
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/parsley/parsley.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
   
   <script>
    $(document).ready(function() {
        document.getElementById("fund_pay").disabled = true;
      $("#user_id").on("keyup", function() {
        var userId = $(this).val();

        $.ajax({
          url: "check_ajax.php",
          method: "POST",
          data: { user_id: userId },
          success: function(response) {
            var data = JSON.parse(response);
            if (data.exists) {
              $("#user_id_message").text(data.name);
              $("#user_id_message").removeClass("error");
              document.getElementById("fund_pay").disabled = false;
            } else {
              $("#user_id_message").text("Invalid USER ID. Please enter a valid one.");
              $("#user_id_message").addClass("error");
              document.getElementById("fund_pay").disabled = true;
            }
          },
          error: function(error) {
            console.error(error);
            document.getElementById("fund_pay").disabled = false;
          }
        });
      });

    
    });
  </script>
    
    
   
</body>
 
</html>
