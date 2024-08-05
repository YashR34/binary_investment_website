<?php include_once("elements/connection.php");?>
<?php
if(isset($_REQUEST['agent_id'])){
	
	$agent_id=$_REQUEST['agent_id'];
	$data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id='$agent_id' "));
	echo '<table class="table">
  <thead>
    <tr>
      <th scope="col" colspan="2">Name:'.$data['name'].'</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Left Count</th>
      <td>'.$data['left_count'].'</td>
     
    </tr>
    <tr>
      <th scope="row">Right Count</th>
      <td>'.$data['right_count'].'</td>
     
    </tr>
    <tr>
      <th scope="row">Left User</th>
      <td>'.$data['left_side'].'</td>
     
    </tr>
    <tr>
      <th scope="row">Right Usert</th>
      <td>'.$data['right_side'].'</td>
     
    </tr>
    
   
  </tbody>
</table>';

} 
if(isset($_REQUEST['delete'])){
  $package_id=$_REQUEST['delete'];
  $response='Something went gone wrong';
  $s=mysqli_query($conn,"DELETE FROM packages WHERE id='$package_id'");
  if($s){
    $response='Package deleted successfully';
  }
  echo $response;
  die;
}
if(isset($_REQUEST['payment'])){
  $package_id=$_REQUEST['payment'];
  $response='Something Went Wrong';
  $date=date("Y-m-d");
  $s=mysqli_query($conn,"UPDATE package_details SET paid_days=paid_days+1 ,last_payment_date='$date' WHERE id='$package_id' ");
  $package_data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM package_details WHERE id='$package_id'"));
  $agent_id= $package_data['agent_id'];
  $amt=$package_data['package_daily_amt'];

  mysqli_query($conn,"UPDATE users SET total_income=total_income+$amt ,e_wallet=e_wallet+$amt WHERE user_id='$agent_id' ");
  mysqli_query($conn,"INSERT INTO income_history(user_id,amt,desp,cr_dr) VALUES ('$agent_id','$amt','Daily Return','0') ");
  mysqli_query($conn,"INSERT INTO invest_return(user_id,amount,i_date) VALUES ('$agent_id','$amt','$date')");
  if($s){
    $response='Paid Successfully';
  }
  echo $response;
  die;
}
?>