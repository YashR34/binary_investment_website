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
<?php include("elements/sidebar.php")?>
<!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
            	<?php
            	if(isset($_REQUEST['user_id'])){
            		$level_sponsor=$_REQUEST['user_id'];
            		if(check_my_downline($level_sponsor,$my_id)){

            		}else{
            			$level_sponsor=$my_id;
            		}


            	}else{
            		$level_sponsor=$my_id;
            	}

            	 
            	?>
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">General Tables </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Your Downline</a></li>
                                       
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
                        <!-- basic table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Downline Agents</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">S no.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Mobile</th>
                                                <th scope="col">Status</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$data=mysqli_query($conn,"SELECT * from users WHERE sponsor_id=$level_sponsor ");  
                                            	$a=1;
                                            	if(mysqli_num_rows($data)>0){
	                                                 while($user_detail=mysqli_fetch_array($data)){
                                            		?>
                                            	<tr>
                                            	    <td><?php echo $a;?></td>
                                            		<td><?php echo $user_detail['name']?><div class="widget-subheading opacity-7"><?php echo $user_detail['user_id']?></div></td>
                                            		<td><?php echo $user_detail['mobile']?></td>
                                                      <td>
                                                                <?php
                                                                if (!$user_detail['status']) {
                                                                    echo "Inactive";
                                                                  }else{
                                                                    echo "Active";
                                                                  }  
                                                                ?>
                                                            </td>
                                            		<td class="text-center"><a href="level.php?user_id=<?php  echo $user_detail['user_id']?>">Downline</a></td>      
                                            	</tr><?php
                                            		++$a;
                                            	}  
                                            	}else{
                                            		?><tr>
                                            			<td colspan="4" class="text-center">No Data Available</td>	
                                            		</tr><?php  
                                            	}
                                            	?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <!-- ============================================================== -->
                        <!-- end striped table -->
                        <!-- ============================================================== -->
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
    <script src="assets/vendor/custom-js/jquery.multi-select.php"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <?php
    function check_my_downline($user_id,$login_id){
    	global $conn;
    	$data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id=$user_id"));
    	$spons_id=$data['sponsor_id'];
    	while($spons_id!=0){
    		if($spons_id==$login_id){
    			return true;

    		}else{
    			$data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id=$spons_id"));
    	        $spons_id=$data['sponsor_id'];

    		}

    	}
    	if($spons_id==0){
    		return false;

    	}

    }  
    ?>
</body>
 
</html>
