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
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <style>
        ::placeholder {
        color: #000!important;
        opacity: 1; /* Firefox */
    }

    ::-ms-input-placeholder { /* Edge 12-18 */
        color: #000!important;
    }
   
    </style>
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
                            <h2 class="pageheader-title">PACKAGES</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Packages</a></li>
                                        
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
                                
                                <div class="card-body">
                                    <form class="needs-validation" method="POST" action="elements/redirect.php">
                                        <div class="row">
                                            <?php $data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id=$my_id"))?>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01" style="color:#fff;font-size:20px"><b>AVAILABLE FUND WALLET BALANCE : $<?php echo $data['wallet']?></b></label>
                                                
                                                <select class="form-control"  name="plan" style="background:#dddddd; border-radius: 20vh;color: #000;">
                                                    <?php
                                                    $packages=mysqli_query($conn,"SELECT * FROM packages");
                                                    while($pack_data=mysqli_fetch_array($packages)){
                                                        ?>
                                                        
                                                        <option value="<?php echo $pack_data['package_amount'];?>" style="color: #000;background-color: #fff;font-family:Arial, Helvetica, sans-serif;font-style: normal; font-weight: normal;">
                                                            <?php echo "AMOUNT : $".$pack_data['package_amount'].", DAILY AMOUNT : $".$pack_data['daily_amount'].", TOTAL DAYS : ".$pack_data['total_days'].",  ".$pack_data['package_name'];?>
                                                        </option>
                                                       
                                                        <?php

                                                    }  
                                                    ?>
                                                </select>
                                                <input type="text" class="form-control" id="validationCustom01"   required name="user_id" value="<?php echo $my_id?>" hidden >  
                                            </div>
                                        </div>
                                      
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="margin-top: 10px;">
                                                <button class="btn btn-success" type="submit" name="package_option" style="border-radius:20vh;">BUY NOW</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <!--  <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block">
                        
                    </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card" style="border-radius:5vh;background-color: #251C50;">
                            <div class="card-header  text-center p-3 " style="background-color: #c4a90f;border-top-left-radius: 5vh;border-top-right-radius: 5vh;">
                                <h4 class="mb-0 text-white">BRONZE</h4>
                            </div>
                            <div class="card-body text-center">
                                <h1 class="mb-1" style="color:#fff;">$20</h1>
                                
                            </div>
                            <div class="card-body border-top">
                                <ul class="list-unstyled bullet-check font-14">
                                    <li style="color:#fff;">DAILY AMOUNT : $2</li>
                                    <li style="color:#fff;">TOTAL DAYS : 10</li>
                                    
                                </ul>
                                <a href="#" class="btn btn-success btn-block btn-lg" style="border-radius: 20vh;">MORE INFO</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card" style="border-radius:5vh;background-color: #251C50;">
                            <div class="card-header  text-center p-3" style="background-color:#c2cfac;border-top-left-radius: 5vh;border-top-right-radius: 5vh;">
                                <h4 class="mb-0 text-white">SILVER</h4>
                            </div>
                            <div class="card-body text-center">
                                <h1 class="mb-1" style="color:#fff;">$50</h1>
                                
                            </div>
                            <div class="card-body border-top">
                                <ul class="list-unstyled bullet-check font-14">
                                    <li style="color:#fff;">DAILY AMOUNT : $2</li>
                                    <li style="color:#fff;">TOTAL DAYS : 30</li>
                                    
                                    
                                </ul>
                                <a href="#" class="btn btn-success btn-block btn-lg" style="border-radius: 20vh;">MORE INFO</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card" style="border-radius:5vh;background-color: #251C50;">
                            <div class="card-header  text-center p-3" style="background-color:#FF9999;border-top-left-radius: 5vh;border-top-right-radius: 5vh;">
                                <h4 class="mb-0 text-white" >PEARL</h4>
                            </div>
                            <div class="card-body text-center">
                                <h1 class="mb-1" style="color:#fff;">$100</h1>
                            
                            </div>
                            <div class="card-body border-top">
                                <ul class="list-unstyled bullet-check font-14">
                                    <li style="color:#fff;">DAILY AMOUNT : $2</li>
                                    <li style="color:#fff;">TOTAL DAYS : 55</li>
                                </ul>
                                <a href="#" class="btn btn-success btn-block btn-lg" style="border-radius: 20vh;">MORE INFO</a>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block">
                        
                    </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card" style="border-radius:5vh;background-color: #251C50;">
                            <div class="card-header  text-center p-3 " style="background-color:#e3e01c;border-top-left-radius: 5vh;border-top-right-radius: 5vh;">
                                <h4 class="mb-0 text-white">GOLD</h4>
                            </div>
                            <div class="card-body text-center">
                                <h1 class="mb-1" style="color:#fff;">$200</h1>
                                
                            </div>
                            <div class="card-body border-top">
                                <ul class="list-unstyled bullet-check font-14">
                                    <li style="color:#fff;">DAILY AMOUNT : $1</li>
                                    <li style="color:#fff;">TOTAL DAYS : 110</li>
                                   
                                </ul>
                                <a href="#" class="btn btn-success btn-block btn-lg" style="border-radius: 20vh;">MORE INFO</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card" style="border-radius:5vh;background-color: #251C50;">
                            <div class="card-header bg-info text-center p-3" style="border-top-left-radius: 5vh;border-top-right-radius: 5vh;">
                                <h4 class="mb-0 text-white">DIAMOND</h4>
                            </div>
                            <div class="card-body text-center">
                                <h1 class="mb-1" style="color:#fff;">$500</h1>
                                
                            </div>
                            <div class="card-body border-top">
                                <ul class="list-unstyled bullet-check font-14">
                                    <li style="color:#fff;">DAILY AMOUNT : $5</li>
                                    <li style="color:#fff;">TOTAL DAYS : 110</li>
                                    
                                    
                                </ul>
                                <a href="#" class="btn btn-success btn-block btn-lg" style="border-radius: 20vh;">MORE INFO</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card" style="border-radius:5vh;background-color: #251C50;">
                            <div class="card-header bg-primary text-center p-3" style="border-top-left-radius: 5vh;border-top-right-radius: 5vh;">
                                <h4 class="mb-0 text-white">PRO</h4>
                            </div>
                            <div class="card-body text-center">
                                <h1 class="mb-1" style="color:#fff;">$1000</h1>
                                
                            </div>
                            <div class="card-body border-top">
                                <ul class="list-unstyled bullet-check font-14">
                                    <li style="color:#fff;">DAILY AMOUNT : $6</li>
                                    <li style="color:#fff;">TOTAL DAYS : 200</li>
                                    
                                    
                                </ul>
                                <a href="#" class="btn btn-success btn-block btn-lg" style="border-radius: 20vh;">MORE INFO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   -->          
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
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.php5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
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