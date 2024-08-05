<?php

require_once 'conn.php';

class User {
    private $dbConnection;
    
    private $rightMembesrs = array();
    private $rightMembesrsDetails = [];
    
    private $leftMembesrs = array();
    private $leftMembesrsDetails = [];
   
    private $connection;
    // Constructor with dependency injection for DBConnection
    public function __construct(DBConnection $dbConnection) {
        $this->dbConnection = $dbConnection;
    	$this->connection = $this->dbConnection->getConnection();
    }

    // Set username
    public function setUsername() {
    	 if(isset($_SESSION['session_id']) && isset($_SESSION['user_id'])){
    		$my_id=$_SESSION['user_id'];
 			}
        $userDetails = $this->connection->query("select * from users where user_id = '$my_id'")->fetch_all();
    	//echo '<pre>';print_r($userDetails);
    	$this->dbConnection->closeConnection();
    }
    public function getLegs($leg_id){
    	// global $rightMembesrs;
    	$row=$this->connection->query("select * from users where user_id = '$leg_id'")->fetch_assoc();
        
    	// echo '<pre>';print_r($row);
        // $row = mysqli_fetch_assoc($sql);
        $left_id = $row['left_side'];
        $right_id = $row['right_side'];
        // echo $left_id;
        if ($left_id != 0) {
            array_push($this->rightMembesrs, $left_id);
            $this->getLegs($left_id);
        }
        if ($right_id != 0) {
            array_push($this->rightMembesrs, $right_id);
            $this->getLegs($right_id);
        }
        // echo '<pre>';print_r($this->rightMembesrs);

    }
    public function getLegMembers($my_id){
        $this->rightMembesrs = [];
        $row=$this->connection->query("select * from users where user_id = '$my_id'")->fetch_assoc();
        
        
        $right_id = $row['right_side'];
        if ($right_id != 0) {
            array_push($this->rightMembesrs, $right_id);
            $this->getLegs($right_id);
        }
        foreach($this->rightMembesrs as $key => $val){
            $user_id = $val;
            $userDetails=$this->connection->query("select * from users where user_id = '$val'")->fetch_assoc();
            
           
            array_push($this->rightMembesrsDetails, $userDetails);

        }
        return $this->rightMembesrs;
    }
     public function getLegs1($leg_id){
    	//global $leftMembesrs;
    	$row=$this->connection->query("select * from users where user_id = '$leg_id'")->fetch_assoc();
        
        
        $left_id = $row['left_side'];
        $right_id = $row['right_side'];
        if ($left_id != 0) {
            array_push($this->leftMembesrs, $left_id);
            $this->getLegs1($left_id);
        }
        if ($right_id != 0) {
            array_push($this->leftMembesrs, $right_id);
            $this->getLegs1($right_id);
        }   
    }
    public function getLegMembers1($my_id){
    	$this->leftMembesrs = [];
        $row=$this->connection->query("select * from users where user_id = '$my_id'")->fetch_assoc();
       
        $left_id = $row['left_side'];
        if ($left_id != 0) {
            array_push($this->leftMembesrs, $left_id);
            $this->getLegs1($left_id);
        }
        foreach($this->leftMembesrs as $key => $val){
            $user_id = $val;
            $userDetails=$this->connection->query("select * from users where user_id = '$val'")->fetch_assoc();
            
           
            array_push($this->leftMembesrsDetails, $userDetails);
        }
        // echo '<pre>';print_r($this->leftMembesrs);                         
         return $this->leftMembesrs;   
    }
   
    public function getrightincome($my_id){
    	 $rightmembers=$this->getLegMembers($my_id);
         $rightagents=implode(",",$rightmembers);
         $row=0;
         if($rightagents!=null){
            $user_data1=$this->connection->query("select sum(invest_amt) as total_amt_right from users where user_id in ($rightagents)")->fetch_all();
            $row=$user_data1[0][0];
         }else{
            $row;
         }
         return $row; 

    }
    public function getleftincome($my_id){
    	$leftmembers=$this->getLegMembers1($my_id);
        $leftagents=implode(",",$leftmembers);
        $row[][]=0;
        if($leftagents!=null){
            $user_data=$this->connection->query("select sum(invest_amt) as total_amt_left from users where user_id in ($leftagents)")->fetch_all();
            $row[0][0]=$user_data[0][0];
        }else{
            $row[0][0];
        }   

        return $row[0][0];

    }
    public function matchingincome(){

       $query=$this->connection->query("select user_id from users")->fetch_all();
       $matchingIncome=0;
       $matchingPercentage = 0.10;
       foreach($query as $key =>$res) {
       // print_r($res);
           $userId = $res[0];
           $leftbuss=$this->getleftincome($userId);
           $rightbuss=$this->getrightincome($userId);
           // print_r($leftbuss);
           // $matchingbuss = 0;                   
           if($leftbuss>$rightbuss){
            $matchingbuss=$rightbuss;

           }else{
               $matchingbuss=$leftbuss;
           }
           $paidOn=$this->connection->query("select ifnull(sum(paid_amount),0) as total_amount from matching_amount where user_id=$userId")->fetch_all();
           
           $effectivebuss=$matchingbuss - $paidOn[0][0];
           $matchingIncome=$effectivebuss*$matchingPercentage;
            // echo '<pre>';
            //echo $userId.'--'.$paidOn[0][0].'--'.$effectivebuss.'--'.$matchingIncome.'--'.$matchingbuss.'--'.$leftbuss.'--'.$rightbuss.'<br>';
            if($matchingIncome > 0){
                    $this->connection->query("insert into matching_amount(user_id,amount,paid_amount)value($userId,$matchingIncome,$effectivebuss)");
                    $date=date('Y-m-d');
                    $this->connection->query("insert into matching_income_history(user_id,amt,m_date,match_amount) values ($userId,$matchingIncome,'$date','$effectivebuss')");
                    $this->connection->query("insert into income_history(user_id,amt,desp,cr_dr) values ('$userId','$matchingIncome','Matching Income','0')");
                    $this->connection->query("update users set total_income=total_income+$matchingIncome,e_wallet=e_wallet+$matchingIncome where user_id=$userId");
                    $this->levelBonus($userId,$matchingIncome);
                
             
           
        }
            }
    }

    public function getLeftBinaryTeam($user_id){
        $leftBinaryTeam = [];
        $row=$this->connection->query("select * from users where user_id = '$user_id'")->fetch_assoc();
        $left_id = $this->getLeftLeg($user_id);
        if ($left_id != 0) {
            $leftBinaryTeam [$user_id][]= $left_id;
        }
        $leftRightLeg = $this->getLeftRightLeg($left_id);
        $left_id = $leftRightLeg['left_side'];
        $right_id = $leftRightLeg['right_side'];
        if ($left_id != 0) {
            $leftBinaryTeam [$user_id][]= $left_id;
        }
        if ($right_id != 0) {
            $leftBinaryTeam [$user_id][]= $right_id;
        }
        while($left_id != 0){
            $leftRightLeg = $this->getLeftRightLeg($left_id);
            $left_id = $leftRightLeg['left_side'];
            $right_id = $leftRightLeg['right_side'];
            if ($left_id != 0) {
                $leftBinaryTeam [$user_id][]= $left_id;
            }
            if ($right_id != 0) {
                $leftBinaryTeam [$user_id][]= $right_id;
            }
            $leftRightLeg = $this->getLeftRightLeg($right_id);
            $left_id = $leftRightLeg['left_side'];
            $right_id = $leftRightLeg['right_side'];
            if ($left_id != 0) {
                $leftBinaryTeam [$user_id][]= $left_id;
            }
            if ($right_id != 0) {
                $leftBinaryTeam [$user_id][]= $right_id;
            }
        }
        // while($right_id != 0){
        //     $leftRightLeg = $this->getLeftRightLeg($right_id);
        //     $left_id = $leftRightLeg['left_side'];
        //     $right_id = $leftRightLeg['right_side'];
        //     if ($left_id != 0) {
        //         $leftBinaryTeam [$user_id][]= $left_id;
        //     }
        //     if ($right_id != 0) {
        //         $leftBinaryTeam [$user_id][]= $right_id;
        //     }
        // }
        echo '<pre>';print_r($leftBinaryTeam);
    }
    public function getLeftLeg($user_id){
        $row=$this->connection->query("select * from users where user_id = '$user_id'")->fetch_assoc();
        $left_id = $row['left_side'];
        return $left_id;
    }
    public function getRightLeg($user_id){
        $row=$this->connection->query("select * from users where user_id = '$user_id'")->fetch_assoc();
        $right_id = $row['right_side'];
        return $right_id;
    }
    public function getLeftRightLeg($user_id){
        $legs = [];
        $row=$this->connection->query("select left_side,right_side from users where user_id = '$user_id'")->fetch_assoc();
        // $left_id-id = $row['left_side'];
        // $right_id = $row['right_side'];
        return $row;
    }

    public function getSponsorId($memberId){
        // $id=mysqli_fetch_array(mysqli_query($conn,"SELECT sponsor_id FROM users WHERE user_id='$memberId'"));
            $id=$this->connection->query("select sponsor_id from users where user_id='$memberId'")->fetch_assoc();
            // $right_id = $row['right_side'];
        // echo '<pre>';
        // print_r($id); 
        return $id['sponsor_id'];
    
    } 

    public function levelBonus($userId,$matchingAmount){
        $sponsorAgent=[];
        $levelBonusArray= array(1=>0.10,2=>0.05,3=>0.02,4=>0.02);
        $memberId = $userId;
            for($i = 1; $i <= 3; $i++){
                $memberId =$this->getSponsorId($memberId);
                if($memberId == 0){
                    break;
                }
            array_push($sponsorAgent,$memberId);
            }
            // echo '<pre>';
            // echo $memberId.'<br>';
            // print_r($sponsorAgent);
            foreach ($sponsorAgent as $key => $value) {
                     $level = $key+1;
                     $bonusPercentage = $levelBonusArray[$level];
                     $bonus = $matchingAmount * $bonusPercentage;
                      $levelstak1=$level+1;
                     //echo $level.'--'.$value.'--'.$matchingAmount.'--'.$bonus.'<br>';
                     //$this->connection->query("insert into level_income(user_id,amount,paid_amount)value($userId,$matchingIncome,$effectivebuss)");
                     $date=date('Y-m-d');
                     $this->connection->query("insert into level_income_history(user_id,amount,l_date,level)values('$value','$bonus','$date','$levelstak1')");
                     $this->connection->query("insert into income_history(user_id,amt,desp,cr_dr) values ('$value','$bonus','Matching Level Income','0')");
                     $this->connection->query("update users set total_income=total_income+$bonus,e_wallet=e_wallet+$bonus where user_id='$value'");

                 }              
    } 
    public function stackingBonus($userId,$stakeAmount){
        

        $sponsorAgent1=[];
        $levelBonusArray1= array(1=>0.10,2=>0.05,3=>0.02,4=>0.01,5=>0.01,6=>0.01,7=>0.01,8=>0.01,9=>0.01,10=>0.01);
        $memberId = $userId;
            for($i = 1; $i <= 10; $i++){
                $memberId =$this->getSponsorId($memberId);
                if($memberId == 0){
                    break;
                }
                array_push($sponsorAgent1,$memberId);
            }
             // echo '<pre>';
             // echo $memberId.'<br>';
             // print_r($sponsorAgent1);
            foreach ($sponsorAgent1 as $key => $value1) {
                     $level1 = $key+1;
                     $bonusPercentage1 = $levelBonusArray1[$level1];
                     $bonus1 = $stakeAmount * $bonusPercentage1;
                     $levelstak=$level1+1;
                     // echo $level1.'--'.$value1.'--'.$daily_roi_amount.'--'.$bonus1.'<br>';
                     
                     $date=date('Y-m-d');
                     $this->connection->query("insert into sponsor_staking_income(user_id,amount,s_date,level)values('$value1','$bonus1','$date','$levelstak')");
                     $this->connection->query("insert into income_history(user_id,amt,desp,cr_dr) values ('$value1','$bonus1','Staking Level Income Income',0)");
                     $this->connection->query("update users set total_income=total_income+$bonus1,e_wallet=e_wallet+$bonus1 where user_id=$value1");

            }
                
 
    }
    public function stakingCalculate(){
        $today = date("Y-m-d");
        $sql = "select * from package_details";
        $result = $this->connection->query($sql);
        // if ($result->num_rows() > 0) {
            while ($row = $result->fetch_assoc()) {
                $user_id = $row["agent_id"];
                $staking_id = $row["id"];
                $package_purchase_date = $row['package_purchase_date'];
                $total_days = $row['total_days'];
                $effectiveDate = date('Y-m-d', strtotime($package_purchase_date . '+'.$total_days.' days'));
                $paidDaysRes = $this->connection->query("select count(*) as num_rows from invest_return where staking_id = '$staking_id'")->fetch_assoc();
                // echo '<pre>';print_r($paidDays['num_rows']);
                $paidDays = $paidDaysRes['num_rows'];
                // echo $row['agent_id'].'--'.$total_days.'--'.$package_purchase_date.'--'.$effectiveDate.'--'.$today.'--'.$paidDays.'<br>';
                if($paidDays < $total_days){
                    //$this->connection->query("update package_details set paid_days=paid_days+1 ,last_payment_date='$date' where id='$package_id' ");
                    $user_id = $row["agent_id"];
                    $daily_roi_amount = $row["package_daily_amt"];
                    $amt=$row["package_amt"];
                    $sql_check = "select * from invest_return where i_date = '$today' and staking_id = '$staking_id'";
                    $result_check = $this->connection->query($sql_check);
                    $no_day=1;
                    if($result_check->num_rows == 0) {
                // echo $row['agent_id'].'--'.$total_days.'--'.$package_purchase_date.'--'.$effectiveDate.'--'.$today.'--'.$paidDays.'<br>';
                        // $sql_update = $this->connection->query("update package_details set paid_days=paid_days+1,last_payment_date='$today' where and agent_id = '$user_id'");
                        
                        $this->connection->query("insert into invest_return(user_id,amount,i_date,staking_id,invested_amount) VALUES ('$user_id','$daily_roi_amount','$today','$staking_id','$amt')");
                        $this->connection->query("update package_details set paid_days=paid_days+$no_day where agent_id=$user_id");
                        $this->connection->query("insert into income_history(user_id,amt,desp,cr_dr) values ('$user_id','$daily_roi_amount','Daily Staking Income',0)");
                        $this->connection->query("update users set total_income=total_income+$daily_roi_amount,e_wallet=e_wallet+$daily_roi_amount where user_id=$user_id");
                        $this->stackingBonus($user_id,$daily_roi_amount);
                    } 
                }
           }
        // }
    } 
}
    $dbConnection = new DBConnection();
    $userObj = new User($dbConnection);
    	 if(isset($_SESSION['session_id']) && isset($_SESSION['user_id'])){
    		$my_id=$_SESSION['user_id'];
 			}
    
    // $userObj->getLegMembers1($my_id = '12345678');
    
     $userObj->matchingincome();
     $userObj->stakingCalculate();      

    

?>