<?php 
session_start();
$db_host="localhost";
$db_user='root';
$db_pass='';
$db_name='imaxcoin';
$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(!$conn){
    echo "Not connect";
}
if(isset($_REQUEST['fund_pay'])){
	$user=$_REQUEST['user_id'];
	$amt=$_REQUEST['amount'];
	$my=$_REQUEST['my_user'];
	if(checkAmt($my,$amt)){
		$date=date('Y-m-d');
		mysqli_query($conn,"INSERT INTO fund_pay(user_id,paid_by,amount,p_date) VALUES ('$user','$my','$amt','$date')");
		mysqli_query($conn,"UPDATE users SET wallet=wallet+$amt WHERE user_id=$user");
		deductAmt($my,$amt);	
	}
	header("Location:../addFundDownline.php");	
}
function deductAmt($agent_id,$amount){
	global $conn;
	$wallet_data=mysqli_query($conn,"UPDATE users SET wallet=wallet-$amount WHERE user_id=$agent_id");
	mysqli_query($conn,"INSERT INTO income_history(user_id,amt,desp,cr_dr)value($agent_id,$amt,'FUND TRANSFER TO USER',1)");
	
}
function checkAmt($agent_id,$amount){
	global $conn;
	$wallet_data=mysqli_fetch_array(mysqli_query($conn,"SELECT wallet FROM users WHERE user_id=$agent_id"));
	if($wallet_data['wallet']>=$amount){

		return true;

	}return false;
}
if(isset($_REQUEST['withdrawal'])){
	$amt=$_REQUEST['amount'];
	$user_id=$_REQUEST['user_id'];
	$data=mysqli_fetch_array(mysqli_query($conn,"SELECT e_wallet FROM users WHERE user_id=$user_id"));
	if($amt<=$data['e_wallet']){
		$date=date('Y-m-d H:i:s');

	
		mysqli_query($conn,"INSERT INTO income_history(user_id,amt,desp,cr_dr) VALUES ($user_id,$amt,'Widthdraw',1)");
		mysqli_query($conn,"INSERT INTO withdrawal(user_id,amt,request_date) VALUES ($user_id,$amt,'$date')");
		

	}else{
		
		header("Location:../widthdrawal1.php");
	}
	header("Location:../widthdrawal1.php");

}
if(isset($_REQUEST['fund_addition'])){
	$amt=$_REQUEST['amount'];
	$user_id=$_REQUEST['user_id'];
	$data=mysqli_fetch_array(mysqli_query($conn,"SELECT e_wallet FROM users WHERE user_id=$user_id"));
	
	$date=date('Y-m-d ');
	mysqli_query($conn,"UPDATE users SET e_wallet=e_wallet+$amt WHERE user_id=$user_id");
	mysqli_query($conn,"INSERT INTO income_history(user_id,amt,desp,cr_dr) VALUES ($user_id,$amt,'Fund Added To Your Wallet',0)");
	mysqli_query($conn,"INSERT INTO add_fund(user_id,amt,a_date) VALUES ($user_id,$amt,'$date')");
	
	header("Location:../add-funds.php");
}
if(isset($_REQUEST['update_pass'])){
	$my_id=$_REQUEST['user_my_id'];
	$n_pass=$_REQUEST['new_pass'];
	$c_pass=$_REQUEST['c_pass'];
	if ($n_pass==$c_pass) {
		 // echo "UPDATE users SET password='$c_pass' WHERE user_id='
			// $my_id'";
		mysqli_query($conn,"UPDATE users SET password='$c_pass' WHERE user_id=
			$my_id");	
	}
	header("Location:../update-pass.php");

}
if(isset($_REQUEST['update_wallet'])){
	$my_id=$_REQUEST['user_id'];
	$n_add=$_REQUEST['n_add'];
	$c_add=$_REQUEST['c_add'];
	if ($n_add==$c_add) {
		 // echo "UPDATE users SET password='$c_pass' WHERE user_id='
			// $my_id'";
		mysqli_query($conn,"UPDATE users SET imax_wallet_add ='$c_add' WHERE user_id=
			$my_id");	
	}
	header("Location:../update-wallet-ad.php");

}


if(isset($_REQUEST['e_wallet_transfer'])){
	$amount=$_REQUEST['amount'];
	$user_id=$_REQUEST['user_id'];
	if(checkAmount($user_id,$amount)){
		$date=date('Y-m-d');
		mysqli_query($conn,"INSERT INTO e_wallet_fund(user_id,amout,e_date) VALUES ('$user_id','$amount','$date')");
		mysqli_query($conn,"UPDATE users SET wallet=wallet+$amount WHERE user_id=$user_id");
		deductAmount($user_id,$amount);
	}
	header("Location:../wallet-tranfer.php");

}
function deductAmount($agent_id,$amt){
	global $conn;
	$wallet_data=mysqli_query($conn,"UPDATE users SET e_wallet=e_wallet-$amt WHERE user_id=$agent_id");
	mysqli_query($conn,"INSERT INTO income_history(user_id,amt,desp,cr_dr)value($agent_id,$amt,'Package Purchase',1)");
	
}
function checkAmount($agent_id,$amt){
	global $conn;
	$wallet_data=mysqli_fetch_array(mysqli_query($conn,"SELECT e_wallet FROM users WHERE user_id=$agent_id"));
	if($wallet_data['e_wallet']>=$amt){

		return true;

	}return false;
}
if(isset($_REQUEST['package_option'])){
	$package=$_REQUEST['plan'];
	$agent_id=$_REQUEST['user_id'];
	$data2=mysqli_fetch_array(mysqli_query($conn,"SELECT date_of_activate FROM users WHERE user_id=$agent_id"));
	if(check_wallet_amount($agent_id,$package)){


	  $package_data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM packages WHERE package_amount=$package"));
	  $total_day=$package_data['total_days'];
	  $daily_amount=$package_data['daily_amount'];
	  $date=date('Y-m-d');	
	  mysqli_query($conn,"INSERT INTO package_details(agent_id,package_amt,package_daily_amt,total_days) VALUES ('$agent_id','$package','$daily_amount','$total_day')");
	  mysqli_query($conn,"UPDATE users SET invest_amt=invest_amt+$package,status='1' WHERE user_id=$agent_id");
	  
	  if($data2['date_of_activate'] == 0000-00-00){
	    mysqli_query($conn,"UPDATE users SET date_of_activate='$date' WHERE user_id=
			$agent_id");
	  }
	  deduct_wallet_amount($agent_id,$package);
	}
	package_level_distribution($agent_id,$package);
	header("Location:../packages.php");
}
function package_level_distribution($s_id,$package){
  global $conn;
  $a=0;
  $i=[20];
  $spons=find_sponsor_id($s_id);
  $agent_id=$s_id;
  while($a < 1 && $spons!=0){
  	$income=$package * ($i[$a]/100);
  	mysqli_query($conn,"UPDATE users SET total_income=total_income+$income, e_wallet=e_wallet+$income WHERE user_id='$spons' ");
    mysqli_query($conn,"INSERT INTO income_history(user_id,amt,desp,cr_dr) VALUES ('$agent_id','$income','Direct Income','0') ");
    $date=date('Y-m-d');
    mysqli_query($conn,"INSERT INTO direct_income(user_id,amount,d_date,income_by) VALUES ('$spons','$income','$date','$agent_id') ");
    $next_id=find_sponsor_id($s_id);
    $s_id=$next_id;
    $a++;
  }  
}
function deduct_wallet_amount($agent_id,$amt){
	global $conn;
	$wallet_data=mysqli_query($conn,"UPDATE users SET wallet=wallet-$amt WHERE user_id=$agent_id");
	mysqli_query($conn,"INSERT INTO income_history(user_id,amt,desp,cr_dr)value($agent_id,$amt,'Package Purchase',1)");
	
}
function check_wallet_amount($agent_id,$amt){
	global $conn;
	$wallet_data=mysqli_fetch_array(mysqli_query($conn,"SELECT wallet FROM users WHERE user_id=$agent_id"));
	if($wallet_data['wallet']>=$amt){

		return true;

	}return false;
}
if(isset($_REQUEST['update_profile'])){
	$my_id=$_REQUEST['user_my_id'];
	$dob=$_REQUEST['dob'];
	$u_address=$_REQUEST['user_address'];
	$pan=$_REQUEST['user_pan'];
	$aadhar=$_REQUEST['user_aadhar'];
	$mob=$_REQUEST['user_mobile'];
	$dob = date('Y-m-d', strtotime($dob));
	// echo "UPDATE users SET mobile='$mob',address='$u_address',panno='$pan',aadhar='$aadhar',dob='$dob' WHERE user_id='$my_id'";die;
	mysqli_query($conn,"UPDATE users SET mobile='$mob',address='$u_address',panno='$pan',aadhar='$aadhar',dob='$dob' WHERE user_id='$my_id'");
	header("Location:../update_profile.php");


}



if(isset($_REQUEST['login'])){
	$user_id=$_REQUEST['user_id'];
	$password=$_REQUEST['password'];
	move_to_dashboard($user_id,$password);

}
if(isset($_REQUEST['user_registration'])){
	$s_id=$_REQUEST['sponsor_id'];
	//$pin=$_REQUEST['pin'];
	$name=$_REQUEST['user_name'];
	$pos=$_REQUEST['position'];
	$gender=$_REQUEST['gender'];
	$mobile=$_REQUEST['user_mob'];
	$password=$_REQUEST['password'];
	$date=date('Y-m-d');
	//if(check_pin($pin)){
	
	   insert_into_users($s_id,$name,$pos,$gender,$mobile,$password,$date);
	
	    // binary_count($s_id,$pos);
     //}
   
  header("Location:../profilecard.php");
}

function binary_count($spons,$pos){
	global $conn;
	if($pos==0){
		$pos="left_count";
	}
	else{
		$pos="right_count";
	}
	$spons=find_placement_id($spons);
	while($spons!=0){
		mysqli_query($conn,"UPDATE users SET $pos=$pos+1 WHERE user_id='$spons' ");
		is_pair_generate($spons,$pos);
		$pos=find_position($spons);
		$spons=find_placement_id($spons);
		   
	}

}

function is_pair_generate($spons,$pos){
	global $conn;
	$compare_pos=($pos=="left_count")?"right_count":"left_count";
	$pla_data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id='$spons' "));
	if($pla_data[$pos]<=$pla_data[$compare_pos]){
		 $date=date('Y-m-d');

		$data=mysqli_query($conn,"SELECT * FROM pair_count WHERE c_date='$date' AND user_id='$spons' ");
		if(mysqli_num_rows($data)==1){
			mysqli_query($conn,"UPDATE pair_count SET no_of_pair=no_of_pair+1 WHERE c_date='$date' AND user_id='$spons'");

		}else{
			mysqli_query($conn,"INSERT INTO  pair_count(user_id,c_date,no_of_pair) VALUES ('$spons','$date','1')");

		}
	}
}

// function check_pin($pin){
// 	global $conn;
// 	$query=mysqli_query($conn,"SELECT * FROM pin WHERE  pin_value='$pin' AND status='0'");
// 	if(mysqli_num_rows($query)==1){
// 		mysqli_query($conn,"UPDATE pin SET status='1' WHERE pin_value='$pin' ");

// 		return true;
// 	}
// 	return false;

// }
function insert_into_users($s_id,$name,$pos,$gender,$mobile,$password,$date){
	global $conn;
	$user_id=rand(11111111,99999999);
	mysqli_query($conn,"INSERT INTO users (user_id,name,password,mobile,position,sponsor_id,registration_date,gender) VALUES ('$user_id','$name','$password','$mobile','$pos','$s_id','$date','$gender')");
	// if($insert){
  //   echo ("<SCRIPT LANGUAGE='JavaScript'>
  //   window.alert('Successfull')
  //   window.location.href='../profilecard.php';
  //   </SCRIPT>");
  // }
	//level_distribution($s_id);
	placement_id($user_id,$s_id,$pos);

}
function placement_id($user_id,$s_id,$pos){
	global $conn;
	$spons_data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id='$s_id' "));
	if($pos==0){
		
		if($spons_data['left_side']==0){
			mysqli_query($conn,"UPDATE users SET left_side= $user_id WHERE user_id='$s_id' ");
			mysqli_query($conn,"UPDATE users SET placement_id='$s_id' WHERE user_id='$user_id' ");
			binary_count($user_id,$pos);

		}else{
			placement_id($user_id,$spons_data['left_side'],$pos);
		}

	}else{
		
		if($spons_data['right_side']==0){
			mysqli_query($conn,"UPDATE users SET right_side = $user_id WHERE user_id='$s_id' ");
			mysqli_query($conn,"UPDATE users SET placement_id='$s_id' WHERE user_id='$user_id' ");
			binary_count($user_id,$pos);
		}else{
			placement_id($user_id,$spons_data['right_side'],$pos);
		}

	}
}
// function level_distribution($s_id){
//   global $conn;
//   $a=0;
//   $income=[20,10,5,5,5,5];
//   while ($a < 6 && $s_id!=0 ) {
//        mysqli_query($conn,"UPDATE users SET wallet=wallet+$income[$a] WHERE user_id='$s_id' ");
//        mysqli_query($conn,"INSERT INTO income_history(user_id,amt,desp,cr_dr) VALUES ('$s_id','$income[$a]','Direct Income','0') ");
//        $next_id=find_sponsor_id($s_id);
       
//        $s_id=$next_id;
       
//   }


// }
function find_sponsor_id($s_id){
	global $conn;
	$data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE  user_id='$s_id'"));
	return $data['sponsor_id'];

}
function find_placement_id($s_id){
	global $conn;
	$data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE  user_id='$s_id'"));
	return $data['placement_id'];

}
function find_position($s_id){
	global $conn;
	$data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE  user_id='$s_id'"));
	$pos=$data['position'];
	if($pos==0){
		$pos="left_count";
	}
	else{
		$pos="right_count";
	}
	return $pos;

}
function move_to_dashboard($user_id,$pass){
	global $conn;
	$query=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$user_id' AND password='$pass' AND ub_status='0'");
	if(mysqli_num_rows($query)==1){
		$_SESSION['session_id']=session_id();
		$_SESSION['user_id']=$user_id;

		header("Location:../dasboard2.php");

	}
	else{
		header("Location:../index.php");
	}


}

?>