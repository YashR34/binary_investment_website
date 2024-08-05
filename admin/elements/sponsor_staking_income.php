<?php
include("connection.php");
$sql = "SELECT user_id FROM users";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$userId=$row['user_id'];
stakingBonus($userId,$conn);

function getSponsorId($memberId,$conn){
    $id=mysqli_fetch_array(mysqli_query($conn,"SELECT sponsor_id FROM users WHERE user_id='$memberId'"));
    return $id['sponsor_id'];
    echo '<pre>';print_r($id);
} 
function stakingBonus($userId,$conn){
    //$staking=mysqli_fetch_array(mysqli_query($conn,"SELECT amount FROM invest_return WHERE user_id = '$userId'"));
    echo "SELECT * FROM invest_return WHERE user_id = '$userId'";
    // $sponsorAgent=[];
    // $levelBonusArray= array(1=>0.10,2=>0.05,3=>0.02,4=>0.01,5=>0.01,6=>0.01,7=>0.01,8=>0.01,9=>0.01,10=>0.01);
    // $memberId = $userId;
    //     for($i = 1; $i <= 10; $i++){
    //         $memberId =getSponsorId($memberId,$conn);
    //         if($memberId == 0){
    //             break;
    //         }
    //         array_push($sponsorAgent,$memberId);
    //     }
         
    //     foreach ($sponsorAgent as $key => $value) {
    //              $level = $key+1;
    //              $bonusPercentage = $levelBonusArray[$level];
    //              $bonus = $amount * $bonusPercentage;
                 
    //              //$this->connection->query("insert into level_income(user_id,amount,paid_amount)value($userId,$matchingIncome,$effectivebuss)");
    //              $date=date('Y-m-d');
    //              //mysqli_query($conn,"INSERT INTO sponsor_staking_income(user_id,amount,s_date) VALUES ('$value','$bonus','$date')");

    //          }
                
 
}    
?>