<?php
function getLevelMembers($userId, $conn){
    $levelWiseMembers = [];
    $levelMembers = [];
	$level = 1;
	$sql = "SELECT * FROM users WHERE sponsor_id = $userId";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach($row as $key => $val){
        $user_id = $val['user_id'];
        $levelMembers [] = $user_id;
        $levelWiseMembers [$level][]= $user_id;
    }
    while(sizeof($levelMembers)){
        $level = $level + 1;
        $levelMembers = getMembers($levelMembers, $conn,$level);
        foreach($levelMembers as $key => $val){
            $levelWiseMembers [$level][]= $val;
        }
    }
    return $levelWiseMembers;
    // echo '<pre>';print_r($levelWiseMembers);
      
}
function getMembers($levelWiseMembers, $conn,$level){
	$levelMembers = [];
    $level = $level + 1;
    foreach($levelWiseMembers as $val){
        $sql = "SELECT * FROM users WHERE sponsor_id = $val";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
        foreach($row as $key => $val){
            $user_id = $val['user_id'];
            $levelMembers []= $user_id;
        }
    }
    // getMembers($levelMembers[$level], $conn,$level);
    // echo '<pre>';print_r($levelMembers);
    return $levelMembers;

}
function getLevelMebersList($userId, $conn){
    $levelMemberList = [];
    $levelWiseMembersRes = getLevelMembers($userId, $conn);
    foreach($levelWiseMembersRes as $val){
        foreach($val as $val1){
            $levelMemberList []= $val1;
            
        }
    }
    // echo '<pre>';print_r($levelMemberList);
    return $levelMemberList;
}
function getLevellist($userId,$conn){
    $levelWiseMembersRes = getLevelMebersList($userId, $conn);
	$levelagents=implode(",",$levelWiseMembersRes);
	$user_data=mysqli_query($conn,"SELECT sum(total_income) as total_amt FROM users WHERE user_id in ($levelagents)");
	return $user_data;

}
function getSponsorId($memberId,$conn){
    $id=mysqli_fetch_array(mysqli_query($conn,"SELECT sponsor_id FROM users WHERE user_id='$memberId'"));
    // echo '<pre>';
    // print_r($id); 
    return $id['sponsor_id'];
    
} 

function levelBonus($userId,$conn){
    $sponsorAgent=[];
    $levelBonusArray= array(1=>0.10,2=>0.05,3=>0.02,4=>0.02);
    $memberId = $userId;
        for($i = 1; $i <= 3; $i++){
            $memberId =getSponsorId($memberId,$conn);
            if($memberId == 0){
                break;
            }
            array_push($sponsorAgent,$memberId);
        }
        echo '<pre>';
        // echo $memberId.'<br>';
        print_r($sponsorAgent); 
     // echo '<pre>';
     // echo $memberId.'<br>';
     // print_r($sponsorAgentIds);        
} 
     

// $matchingPercentage=mysqli_query($conn,"SELECT level_wise_income FROM level_income");
// $query=fetch_mysqli_array(mysqli_query($conn,"SELECT user_id FROM users "));
// foreach($query as $key =>$res){

//     $userId = $res;
//  // $directbuss=getLevelBuss($userId,$conn);
//  // if($directbuss!=0){
//  //     $matchingLevelIncome=($directbuss * $matchingPercentage)/100;

//  // }
// } 
$userId=$my_id; 
$lvl=levelBonus($userId = '65863658',$conn);
// $matchingPercentage=mysqli_query($conn,"SELECT level_wise_income FROM level_income");
// $query=mysqli_query($conn,"SELECT user_id FROM users ");
// $matchingLevelIncome=0;
// foreach($query as $key =>$res){
// 	$userId = $res;
// 	$directbuss=getLevelBuss($userId,$conn);
// 	if($directbuss!=0){
// 		$matchingLevelIncome=($directbuss * $matchingPercentage)/100;

// 	}
// }    
// echo '<pre>';print_r($matchingLevelIncome);
// function getSponsorId($sponsorAgent,$conn){
//     $id=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$sponsorAgent'");
//     return $id['sponsor_id'];
// } 
// $levelBonusArray= array(1=0.10,2=0.05,3=0.02,4=0.02);    

	  
// }
// $userId=$my_id;
// getLevelBuss($userId,$conn);
//$levelWiseMembersRes = getLevelMembers($userId, $conn);
// $levelagents=implode(",",(array)$levelWiseMembersRes);
//echo '<pre>';print_r($levelWiseMembersRes);
 // echo '<pre>';print_r($levelWiseMembersRes);
 // 	echo '<pre>';print_r($levelWiseMembers); 
?>
<!-- foreach($sponsorAgentIds as $key => $ref_id){
            if($ref_id != 1){
                $member_last_stake = $this->db->query("select date from stack_details where member_id = '$ref_id' and status = 0 order by id desc limit 1");
                if($member_last_stake->num_rows() > 0){
                    $member_last_stake_date = $member_last_stake->row()->date;
                    $total_matching = $this->db->query("select sum(amount) as total_matching from matching_bonus where member_id = '$member_id' and date >= '$member_last_stake_date'")->row()->total_matching;
                    $level = $key + 1;
                    $total_direct = $this->db->query("SELECT * FROM `user_details` where referral_id = '$ref_id'")->num_rows();
                    if($total_direct >= $level){
                        $percentage = $level_bonus_arr[$level];
                        $level_bonus = $total_matching*$percentage;
                        $respective_l_bonus = $this->db->query("SELECT sum(amount) as lbonus from level_income where member_id = '$ref_id' and level_member = '$member_id'")->row()->lbonus;
                        $l_bonus = $level_bonus - $respective_l_bonus;
                        $l_bonus = $this->check4XEarning($ref_id,$l_bonus);
                        $isMemberActive = $this->isMemberActive($ref_id);
                        if($l_bonus > 0 && $isMemberActive > 0){
                            $data_level = array('member_id' => $ref_id, 'level_member' => $member_id, 'amount' => $l_bonus,'coin' => 0,'level' => $level);
                             
                        }
                    }        
                }
            }            
        } -->