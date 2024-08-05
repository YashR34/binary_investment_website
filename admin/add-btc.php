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
                            <h2 class="pageheader-title">ADD IMAX</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Add IMAX</a></li>
                                        
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
                                    <form class="needs-validation" novalidate>
                                        <div class="row">
                                            
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 calculator">
                                            	 <h4 style="color:#fff;">Amount(USD)</h4>
                                               
                                            <div class="input-group mb-3 ">
                                                
                                                <div class="input-group-prepend"><span class="input-group-text" style="border-radius: 3vh;">$</span></div>
                                                <input type="number" class="form-control" name="calc" placeholder="USD" style="background:#dddddd;border-radius: 20vh;">
                                            </div>
                                             <h4 style="color:#fff;">Estimate IMAX</h4>
                                            <div class="input-group mb-3">   
                                                <input type="number" class="form-control" name="rslt" placeholder="IMAX" style="background:#dddddd;border-radius: 20vh;">
                                                  
                                            </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">SUBMIT</button>
                                            </div>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        		<div class="card">
                        			<h5 class="card-header">Transection History<h5>
                        			<div class="card-body">
                        				
                        					<table class="table table-striped table-bordered first">
                        						<thead>
                        						 <tr>
                                                     <th>Name</th>
                                                     <th>Position</th>
                                                     <th>Office</th>
                                                     <th>Age</th>
                                                     <th>Start date</th>
                                                     <th>Salary</th>
                                                 </tr>
                        						</thead>
                        						<tbody>
                        						 
                        						</tbody>
                        					</table>
                        				
                        				
                        			</div>
                        			
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
    <script>
        $("input[name='calc']").keyup(function(){
        $.getJSON( "https://api.coingecko.com/api/v3/simple/price?ids=imax&vs_currencies=usd", 
        function( data) {
        var amountInBtc = parseFloat($("input[name='calc']").val());
        //convert btc to usd
        var exchangeRate = parseInt(data.imax.usd);
        var amount = amountInBtc/exchangeRate;
        $("input[name='rslt']").val(amount);
        });
      });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
 
</html>