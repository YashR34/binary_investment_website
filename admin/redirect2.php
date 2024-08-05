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


if(isset($_REQUEST['login'])){
	$user_id=$_REQUEST['user_id'];
	$password=$_REQUEST['password'];
	move_to_dashboard($user_id,$password);

}
if(isset($_REQUEST['user_registration'])){
	$s_id=$_REQUEST['sponsor_id'];
	$pin=$_REQUEST['pin'];
	$name=$_REQUEST['user_name'];
	$pos=$_REQUEST['position'];
	$mobile=$_REQUEST['user_mob'];
	$password=$_REQUEST['password'];

	if(check_pin($pin)){
	insert_into_users($s_id,$name,$pos,$mobile,$password);

	    // binary_count($s_id,$pos);

     }
	header("Location:../index.php");
}
function binary_count($spons,$pos){
	global $conn;
	if($pos==0){
		$pos="left_count";
	}
	else{
		$pos="right_count";
	}
	while($spons!=0){
		mysqli_query($conn,"UPDATE users SET $pos=$pos+1 WHERE user_id='$spons' ");
		is_pair_generate($spons);
		$pos=find_position($spons);
		$spons=find_placement_id($spons);
		   
	}

}
function is_pair_generate($spons){
	global $conn;
	$pla_data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id='$spons' "));
	if($pla_data['left_count']==$pla_data['right_count']){
		$date=date("Y-m-d");
		$data=mysqli_query($conn,"SELECT * FROM pair_count WHERE c_date=$date AND user_id=$spons ");
		if(mysqli_num_rows($data)==1){
			mysqli_query($conn,"UPDATE pair_count SET no_of_pair=no_of_pair+1 WHERE c_date=$date AND user_id=$spons");

		}else{
			mysqli_query($conn,"INSERT INTO  pair_count(user_id,c_date,no_of_pair) VALUES ($spons,$date,'1')");

		}
		

	}
}

function check_pin($pin){
	global $conn;
	$query=mysqli_query($conn,"SELECT * FROM pin WHERE  pin_value='$pin' AND status='0'");
	if(mysqli_num_rows($query)==1){
		mysqli_query($conn,"UPDATE pin SET status='1' WHERE pin_value='$pin' ");

		return true;
	}
	return false;

}
function insert_into_users($s_id,$name,$pos,$mobile,$password){
	global $conn;
	$user_id=rand(11111111,99999999);
	mysqli_query($conn,"INSERT INTO users (user_id,name,password,mobile,position,sponsor_id) VALUES ('$user_id','$name','$password','$mobile','$pos','$s_id')");
	level_distribution($s_id);
	placement_id($user_id,$s_id,$pos);

}
function placement_id($user_id,$s_id,$pos){
	global $conn;
	$spons_data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id='$s_id' "));
	if($pos==0){
		
		if($spons_data['left_side']==0){
			mysqli_query($conn,"UPDATE users SET left_side= $user_id WHERE user_id='$s_id' ");
			mysqli_query($conn,"UPDATE users SET placement_id='$s_id' WHERE user_id='$user_id' ");
			binary_count($s_id,$pos);

		}else{
			placement_id($user_id,$spons_data['left_side'],$pos);
		}

	}else{
		
		if($spons_data['right_side']==0){
			mysqli_query($conn,"UPDATE users SET right_side = $user_id WHERE user_id='$s_id' ");
			mysqli_query($conn,"UPDATE users SET placement_id='$s_id' WHERE user_id='$user_id' ");
			binary_count($s_id,$pos);
		}else{
			placement_id($user_id,$spons_data['right_side'],$pos);
		}

	}
}
function level_distribution($s_id){
  global $conn;
  $a=0;
  $income=[20,10,5,5,5,5];
  while ($a < 6 && $s_id!=0 ) {
       mysqli_query($conn,"UPDATE users SET wallet=wallet+$income[$a] WHERE user_id='$s_id' ");
       $next_id=find_sponsor_id($s_id);
       
       $s_id=$next_id;
       
  }


}
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
	$query=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$user_id' AND password='$pass'");
	if(mysqli_num_rows($query)==1){
		$_SESSION['session_id']=session_id();
		$_SESSION['user_id']=$user_id;

		header("Location:../dashboard.php");

	}
	else{
		header("Location:../index.php");
	}


}
?>