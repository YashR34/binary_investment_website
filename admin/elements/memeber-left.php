<?php 

$leftMembers = array();
$leftMembersDetails = [];
function getLegMembers2($my_id, $conn) {
    global $leftMembers;
    global $leftMembersDetails;
    $sql = "SELECT * FROM users WHERE user_id = $my_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $left_id = $row['left_side'];
    if ($left_id != 0) {
        array_push($leftMembers, $left_id);
        getLegs2($left_id, $conn);
    }
    foreach($leftMembers as $key => $val){
        $user_id = $val;
        $sql = "SELECT * FROM users WHERE user_id = $val";
        $result = mysqli_query($conn, $sql);
        $userDetails = mysqli_fetch_assoc($result);
        array_push($leftMembersDetails, $userDetails);
    }
    // echo '<pre>';print_r($leftMembesrsDetails);   
}
function getLegs2($leg_id, $conn){
    global $leftMembers;
    $sql = "SELECT * FROM users WHERE user_id = $leg_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $left_id = $row['left_side'];
    $right_id = $row['right_side'];
    if ($left_id != 0) {
        array_push($leftMembers, $left_id);
        getLegs2($left_id, $conn);
    }
    if ($right_id != 0) {
        array_push($leftMembers, $right_id);
        getLegs2($right_id, $conn);
    }   
}
getLegMembers2($my_id, $conn);
 
?>
