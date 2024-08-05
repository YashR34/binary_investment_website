<!doctype html>
<html lang="en">
<?php include_once("elements/connection.php");?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IMAXCOIN - Crypto Currency</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        img{
            width:90px;
        }
        .paid{
            border: 5px solid lightgreen;
            border-radius: 7vh;
        }
        .free{
            border: 5px solid yellow;
            border-radius: 7vh;
        }
    </style>
   
</head>
<?php include("elements/sidebar.php");?>
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <?php 
                if(isset($_REQUEST['user_id'])){
                    $id=[$_REQUEST['user_id']];

                }else{
                    $id=[$my_id];
                } 
                ?>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-center">Tree View</h3>
                        <div class="card">
                        <div class="card-body">
                        	<?php
                        	$i=0;
                        	for($i;$i<=2;$i++){
                        		$temp_id_index=0;
                        		$divide=pow(2,$i);
                        		?>
                        		<div class="row  p-3">
                        			<?php
                        			for($d=0;$d<$divide;$d++){
                        				?>
                                        <?php $data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id=$id[$d]"));
                                       
                                        ?>
                        				<div class="col-<?php echo 12/$divide?>  p-5 text text-center">
                        					<a href="mytree.php?user_id=<?php  echo $id[$d]?>">
                                                <img src="<?php echo ($id[$d]!=0)?getImage($id[$d]):"assets/images/no-user.png"?>" class="img-fluid <?php echo ($id[$d]!=0)?getRing($id[$d]):""?>"></a>
                                                <br>
                        					<p id="<?php echo $id[$d]?>" onclick="<?php echo ($id[$d]!=0)?"show_details(this)":""?>" ><?php echo $print_id=$id[$d]?></p>
                        				</div>
                        				<?php
                        				for($p=0;$p<2;$p++){
                        					$temp_id[$temp_id_index]=fetch_left_right($p,$print_id);
                        					$temp_id_index++;
                        				}
                        			} 
                        			$id=$temp_id;
                        			?>
                        		</div>
                        		<?php
                        	}
                        	function fetch_left_right($side,$agent_id){
                        		global $conn;
                        		if($side==0){
                                  $pos='left_side';

                                }else{
                                 $pos='right_side';
                                }
                                 $data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id=$agent_id"));
                                 if($agent_id!=0){
                                 	return $data[$pos];

                                 }else{
                                 	return 0;
                                 }
                        	}
                        	?>
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
    <script type="text/javascript">
        function show_details(a){
            $('#exampleModal').modal("show");
            var agent_id=$(a).attr('id');
            $("#exampleModalLabel").html(agent_id);
            $.ajax({
                url: 'ajax.php',
                type:'post',
                data:{agent_id:agent_id},
                success:function(response){
                    $('#agent_detail_show_on_modal').html(response);

                }
            })

        }
     </script>
    <script src="assets/libs/js/main-js.js"></script>
    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel"></h5>
                 <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                         </a>
            </div>
             <div class="modal-body" id="agent_detail_show_on_modal">
                                                               
             </div>
            <div class="modal-footer">
                 <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                                               
            </div>
        </div>
    </div>
</div>
<?php
    function getImage($user_id){
        global $conn;
        $data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id=$user_id"));
        if($data['gender']=='1' && $data['status']=='1'){
            echo "assets/images/default-f.png";
        }else if($data['gender']=='1' && $data['status']=='0'){
            echo "assets/images/default-f1.png";
        }else if($data['gender']=='0' && $data['status']=='1'){
            echo "assets/images/default2.png";
        }else if($data['gender']=='0' && $data['status']=='0'){
            echo "assets/images/default4.png";
        }
    }  
?>
<?php
function getRing($user_id){
    global $conn;
    $data1=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id=$user_id"));
    if($data1['status']=='1'){
        echo "paid";
    }else{
        echo "free";
    }
}  
?>

</body>
 
</html>