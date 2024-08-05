<?php

$rightMembesrs = array();
$rightMembesrsDetails = [];
function getLegMembers($my_id, $conn) {
    global $rightMembesrs;
    global $rightMembesrsDetails;
    $sql = "SELECT * FROM users WHERE user_id = $my_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $right_id = $row['right_side'];
    if ($right_id != 0) {
        array_push($rightMembesrs, $right_id);
        getLegs($right_id, $conn);
    }
    foreach($rightMembesrs as $key => $val){
        $user_id = $val;
        $sql="SELECT *,(SELECT package_amt FROM package_details WHERE agent_id = user_id ORDER by id DESC LIMIT 1) as last_package FROM `users` WHERE user_id=$val ";
        $result = mysqli_query($conn, $sql);
        $userDetails = mysqli_fetch_assoc($result);
        array_push($rightMembesrsDetails, $userDetails);
    }
    // echo '<pre>';print_r($leftMembesrsDetails);   
}
function getLegs($leg_id, $conn){
    global $rightMembesrs;
    $sql = "SELECT * FROM users WHERE user_id = $leg_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $left_id = $row['left_side'];
    $right_id = $row['right_side'];
    if ($left_id != 0) {
        array_push($rightMembesrs, $left_id);
        getLegs($left_id, $conn);
    }
    if ($right_id != 0) {
        array_push($rightMembesrs, $right_id);
        getLegs($right_id, $conn);
    }   
}
getLegMembers($my_id, $conn);
?>