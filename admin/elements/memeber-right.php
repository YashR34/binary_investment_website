<?php

$rightMembers = array();
$rightMembersDetails = [];
function getLegMembers3($my_id, $conn) {
    global $rightMembers;
    global $rightMembersDetails;
    $sql = "SELECT * FROM users WHERE user_id = $my_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $right_id = $row['right_side'];
    if ($right_id != 0) {
        array_push($rightMembers, $right_id);
        getLegs3($right_id, $conn);
    }
    foreach($rightMembers as $key => $val){
        $user_id = $val;
        $sql = "SELECT * FROM users WHERE user_id = $val";
        $result = mysqli_query($conn, $sql);
        $userDetails = mysqli_fetch_assoc($result);
        array_push($rightMembersDetails, $userDetails);
    }
    // echo '<pre>';print_r($leftMembesrsDetails);   
}
function getLegs3($leg_id, $conn){
    global $rightMembers;
    $sql = "SELECT * FROM users WHERE user_id = $leg_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $left_id = $row['left_side'];
    $right_id = $row['right_side'];
    if ($left_id != 0) {
        array_push($rightMembers, $left_id);
        getLegs3($left_id, $conn);
    }
    if ($right_id != 0) {
        array_push($rightMembers, $right_id);
        getLegs3($right_id, $conn);
    }   
}
getLegMembers3($my_id, $conn);
?>