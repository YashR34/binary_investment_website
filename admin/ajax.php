<?php include_once("elements/connection.php");?>
<?php
if(isset($_REQUEST['agent_id'])){
	
	$agent_id=$_REQUEST['agent_id'];
	$data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id='$agent_id' "));
	echo '<table class="table">
  <thead>
    <tr>
      <th scope="col" colspan="2">Name :'. $data['name'].'</th>
      <th scope="col" colspan="2">Parent Id :'. $data['placement_id'].'</th>
      <th scope="col" colspan="2">Sponsor_Id :'. $data['sponsor_id'].'</th>
      <th scope="col" colspan="2">Joining Date :'. $data['registration_date'].'</th>
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
?>

