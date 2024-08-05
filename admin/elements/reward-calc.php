<?php
$sql = "SELECT user_id, registration_date FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $userId = $row['user_id'];
        $userRegistrationDate = $row['registration_date'];
        $currentDate=date('Y-m-d');
        $rewardPeriodStart30 = date('Y-m-d', strtotime($userRegistrationDate . '+30 days'));
        $rewardPeriodStart100 = date('Y-m-d', strtotime($userRegistrationDate . '+100 days'));
        $sql100Days = "SELECT ifNull(sum(no_of_pair),0) AS pair FROM pair_count WHERE user_id = $userId";
        $result100Days = mysqli_query($conn, $sql100Days);
        $row100Days = mysqli_fetch_array($result100Days);
        $totalPairs = $row100Days['pair'];
        
        if($totalPairs >= 30 && $totalPairs <500 && $rewardPeriodStart30 >= $currentDate){
            $reward=calculate30DayReward($totalPairs);
            $paidReward=mysqli_query($conn,"SELECT * FROM reward_income_history WHERE user_id=$userId AND amount=$reward");
            
            
            
            if(mysqli_num_rows($paidReward) == 0){
                 mysqli_query($conn,"INSERT INTO reward_income_history(user_id,amount,no_of_pair,no_of_days,r_date) VALUES ('$userId','$reward','$totalPairs','30','$currentDate')");
                 mysqli_query($conn,"INSERT INTO income_history(user_id,amt,desp,cr_dr) VALUES ('$userId','$reward','Reward','0')");
                
                 mysqli_query($conn,"UPDATE users SET total_income=total_income+$reward,e_wallet=e_wallet+$reward");
                 
            }

            //echo $userId.'--'.$userRegistrationDate.'--'.$rewardPeriodStart30.'--'.$rewardPeriodStart100.'--'.$currentDate.'--'.$totalPairs.'--'.$reward.'<br>';
         }
        
         
        if($totalPairs >= 500 && $rewardPeriodStart100 >=$currentDate){
            $reward1=calculate100DayReward($totalPairs);
            $paidReward1=mysqli_query($conn,"SELECT * FROM reward_income_history WHERE user_id=$userId AND amount=$reward1");
                 
                 
            if(mysqli_num_rows($paidReward1) == 0){
                mysqli_query($conn,"INSERT INTO reward_income_history(user_id,amount,no_of_pair,no_of_days,r_date) VALUES ('$userId','$reward1','$totalPairs','100','$currentDate')");
                mysqli_query($conn,"INSERT INTO income_history(user_id,amt,desp,cr_dr) VALUES ('$userId','$reward1','Reward','0')");
                
                mysqli_query($conn,"UPDATE users SET total_income=total_income+$reward1,e_wallet=e_wallet+$reward1");
                   
            }
            
        }     
         
   
    }
}
function calculate30DayReward($pairs30Days) { 
    if ($pairs30Days >= 30 && $pairs30Days < 50) {
        $reward = 100;
    } elseif ($pairs30Days >= 50 && $pairs30Days < 200) {
        $reward = 200;
    } elseif ($pairs30Days >= 200) {
        $reward = 600;
    }

    return $reward;
}
function calculate100DayReward($pairs100Days) {
    if ($pairs100Days >= 500 && $pairs100Days <1000) {
        $reward1 = 2500;
    } elseif ($pairs100Days >= 1000 && $pairs100Days <2500) {
        $reward1 = 5000;
    } elseif ($pairs100Days >= 2500) {
        $reward1 = 30000;
    } 
    return $reward1;
}


?>