<?php 

$leftMembesrs = array();
$leftMembesrsDetails = [];
function getLegMembers1($my_id, $conn) {
    global $leftMembesrs;
    global $leftMembesrsDetails;
    $sql = "SELECT * FROM users WHERE user_id = $my_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $left_id = $row['left_side'];
    if ($left_id != 0) {
        array_push($leftMembesrs, $left_id);
        getLegs1($left_id, $conn);
    }
    foreach($leftMembesrs as $key => $val){
        $user_id = $val;
        
        $sql="SELECT *,(SELECT package_amt FROM package_details WHERE agent_id = user_id ORDER by id DESC LIMIT 1) as last_package FROM `users` WHERE user_id=$val ";
        $result = mysqli_query($conn, $sql);
        $userDetails = mysqli_fetch_assoc($result);
        array_push($leftMembesrsDetails, $userDetails);
    }
    // echo '<pre>';print_r($leftMembesrsDetails);   
}
function getLegs1($leg_id, $conn){
    global $leftMembesrs;
    $sql = "SELECT * FROM users WHERE user_id = $leg_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $left_id = $row['left_side'];
    $right_id = $row['right_side'];
    if ($left_id != 0) {
        array_push($leftMembesrs, $left_id);
        getLegs1($left_id, $conn);
    }
    if ($right_id != 0) {
        array_push($leftMembesrs, $right_id);
        getLegs1($right_id, $conn);
    }   
}
getLegMembers1($my_id, $conn);
 
?>
