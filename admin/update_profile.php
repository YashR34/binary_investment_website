<!doctype html>
<html lang="en">
<?php include_once("elements/connection.php");?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IMAXCOIN - Crypto Currency</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
</head>
<?php include("elements/sidebar.php");?>
       
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">UPDATE PROFILE</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Update Profile</a></li>
                                        
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
                       <?php
                       $details=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id=$my_id")); 
                       ?>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card" style="background-color: #251C50; border-radius: 3vh;">
                                
                                <div class="card-body">
                                    <form class="needs-validation" novalidate method="POST" action="elements/redirect.php">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01" style="color:#fff;"></label>
                                                <input type="number" class="form-control" id="validationCustom01"  value="<?php echo $my_id?>" required style="background-color:#dddddd ;border-radius: 20vh;" hidden name="user_my_id">
                                                
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02" style="color:#fff;">SPONSOR ID</label>
                                                <input type="number" class="form-control" id="validationCustom02" value="<?php echo $details['sponsor_id']?>"  required style="background-color:#dddddd ;border-radius: 20vh;" disabled>
                                                
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02" style="color:#fff;">PLACEMENT ID</label>
                                                <input type="number" class="form-control" id="validationCustom02" value="<?php echo $details['placement_id']?>"  required style="background-color:#dddddd ;border-radius: 20vh;" disabled>
                                                
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02" style="color:#fff;">Gender</label>
                                                <input type="number" class="form-control" id="validationCustom02" placeholder="<?php echo ($details['gender']==0)?"Male":"Female"?>"  required style="background-color:#dddddd ;border-radius: 20vh;" disabled>
                                                
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02" style="color:#fff;">Name</label>
                                                <input type="text" class="form-control" id="validationCustom02" value="<?php echo $details['name']?>"  required style="background-color:#dddddd ;border-radius: 20vh;" name="user_name" disabled >
                                               
                                            </div>
                                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                 <label for="validationCustom02" style="color:#fff;">DOB</label>
                                                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4"  value="<?php echo $details['dob']?>" name="dob" style="background-color:#dddddd ;border-radius: 20vh;">
                                                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                                    <div class="input-group-text btn btn-success" style="border-radius:2vh;"><i class="far fa-calendar-alt"></i></div>
                                                </div>
                                               </div>                                               
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02" style="color:#fff;">Address</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="user_address" style="background-color:#dddddd ;border-radius: 2vh;"><?php echo $details['address']?></textarea>
                                               
                                            </div>

                                           
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-success" name="update_profile" type="submit" style="border-radius:20vh;margin-top: 9px;">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
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
    <script src="assets/vendor/datepicker/moment.js"></script>
    <script src="assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="assets/vendor/datepicker/datepicker.js"></script>
    <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>
 
</html>