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
<?php 
include("elements/sidebar.php");
$pair_date='';
if(isset($_REQUEST['show_pair_date'])){
    $pair_date=$_REQUEST['dates'];
}
?>
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
                            <h2 class="pageheader-title">Pair Date</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pairs</a></li>
                                        
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
                            <div class="card">
                                <h5 class="card-header">Pairs</h5>
                                <div class="card-body">
                                    <form class="needs-validation" method="POST" action="">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="input-select">PAIR DATE</label>
                                                <select class="form-control"  name="dates">
                                                	<?php
                                                	$date_from_pair=mysqli_query($conn,"SELECT DISTINCT c_date FROM pair_count");
                                                	while($dates=mysqli_fetch_array($date_from_pair)){
                                                		?>
                                                		<option <?php echo ($pair_date==$dates['c_date'])?"selected":""?> value="<?php echo $dates['c_date']?>"><?php echo $dates['c_date']?></option>
                                                		<?php

                                                	} 

                                                	?>
                                                   
                                                </select>
                                                


                                                <p>select date</p>
                                              
                                               
                                            </div>
                                        </div>
                                      
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit" name="show_pair_date">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <!-- ============================================================== -->
                    <!-- fixed header  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                            	<?php
                                if(isset($_REQUEST['show_pair_date'])){
                                	$time_join=mysqli_fetch_array(mysqli_query($conn,"SELECT count(user_id) total_userid FROM users WHERE registration_date='$pair_date'"));
                                	$total_pair_count=mysqli_fetch_array(mysqli_query($conn,"SELECT sum(no_of_pair) total_pair FROM pair_count WHERE c_date='$pair_date'"));
                                	echo "TOTAL AMOUNT FOR PAIR :".$total_amt=$time_join['total_userid']*50;
                                	echo "<br>TOTAL PAIR GENERATED :".$total_pair=$total_pair_count['total_pair'];
                                	echo "<br> ONE PAIR VALUE :".$matching_income=round($total_amt/$total_pair,2);

                                }
                            	?>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S no.</th>
                                                <th>Agent ID</th>
                                                <th>No. Of Pair</th>
                                                <th>Generated Amount</th>
                                                <th>Status</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$a=0;
                                        	$query=mysqli_query($conn,"SELECT * FROM pair_count WHERE c_date='$pair_date'");
                                        	while($s_date=mysqli_fetch_array($query)){
                                        		?>
                                        		<tr>
                                        			<td><?php echo ++$a?></td>
                                        			<td><?php echo $s_date['user_id']?></td>
                                        			<td><?php echo $s_date['no_of_pair']?></td>
                                        			<td><?php echo $s_date['no_of_pair']*$matching_income?></td>
                                        			<td><?php echo ($s_date['status'])?"Paid":"Pending"?></td>
                                        			<td><?php 
                                        			if ($s_date['status']) { 	
                                        			 }else{
                                        			 	?>
                                        			 	<form class="" action="elements/redirect.php" method="POST">
                                        			 		<input type="text" name="user_id" value="<?php echo $s_date['user_id']?>" hidden>
                                        			 		<input type="text " name="amt" value="<?php echo $s_date['no_of_pair']*$one_pair ?>" hidden>
                                        			 		<input type="text " name="date" value="<?php echo $pair_date?>" hidden>
                                        			 		<button type="submit" class="btn btn-sm btn-secondary" name="transfer_pair_income">Pay</button>	
                                        			 	</form>
                                        			 	<?php 
                                        			 } 
                                        		?></td>
                                        		</tr>
                                        		<?php
                                        	}  
                                        	?>    
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
</body>
 
</html>