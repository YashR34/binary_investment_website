<!doctype html>
<html lang="en">
<?php include_once("elements/connection.php")?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <title>IMAXCOIN - Crypto Currency</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" >
    <style>
        .dash{
            font-size: 14px;
        }
        .inner{
            font-size: 15px;
        }
        .inner1{
            font-size: 13px;
        }
    </style>
</head>
<?php include("elements/sidebar.php")?>

 <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <?php $price=mysqli_fetch_array(mysqli_query($conn,"SELECT price FROM imax_price WHERE id=1"));?>
                

                <div class="container-fluid dashboard-content ">

                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <?php $name= mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id=$my_id"));?>
                                <h3 class="pageheader-title">WELCOME TO IMAXCOIN : <?php echo $name['name'] ?></h3>

                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="dasboard2.php" class="breadcrumb-link">DASHBOARD</a></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <?php
                        include("elements/memeber-left.php"); 
                        include("elements/memeber-right.php");
                        $rightagents=implode(",",$rightMembers);
                        $leftagents=implode(",",$leftMembers);
                        $row1=0;
                        $row2=0;
                        $row3=0;
                        $row4=0;
                        if($rightagents!=null){
                            $user_data3=mysqli_fetch_array(mysqli_query($conn,"SELECT count(user_id) as total_r FROM users WHERE user_id in ($rightagents) AND status='1'"));
                            $row1=$user_data3['total_r'];
                        }else{
                            $row1;
                        }
                        if($leftagents!=null){
                            $user_data4=mysqli_fetch_array(mysqli_query($conn,"SELECT count(user_id) as total_l FROM users WHERE user_id in ($leftagents) AND status='1'"));
                            $row2=$user_data4['total_l'];
                        }else{
                            $row2;
                        }
                        if($rightagents!=null){
                            $user_data5=mysqli_fetch_array(mysqli_query($conn,"SELECT count(user_id) as total_r1 FROM users WHERE user_id in ($rightagents) AND status='0'"));
                            $row3=$user_data5['total_r1'];
                        }else{
                            $row3;
                        }
                        if($leftagents!=null){
                            $user_data6=mysqli_fetch_array(mysqli_query($conn,"SELECT count(user_id) as total_l1 FROM users WHERE user_id in ($leftagents) AND status='0'"));
                            $row4=$user_data6['total_l1'];
                        }else{
                            $row4;
                        }
                        ?>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">MEMBER ID</h5>
                                            <h2 class="mb-0"><?php echo $my_id?></h2>
                                        </div>
                                         <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                            <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <?php
                                            $user_data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id=$my_id"));  
                                            ?>
                                            <h5 class="text-muted">INVESTMENT</h5>
                                            <h2 class="mb-0 inner1">$<?php echo $user_data['invest_amt']?> | IMAX COIN <?php echo $user_data['invest_amt']/$price['price']?></h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                            <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">DIRECT TEAM</h5>
                                            <h2 class="mb-0"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users WHERE sponsor_id=$my_id"))?></h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                            <i class="fa fa-handshake fa-fw fa-sm text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">DOWNLINE TEAM</h5>
                                            <h2 class="mb-0"><?php echo $user_data['left_count']+$user_data['right_count']?></h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                            <i class="fas fa-users fa-fw fa-sm text-primary"></i> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <?php $direct=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(amount),0) as total_d FROM direct_income WHERE user_id=$my_id "));?>
                                            <h5 class="text-muted">DIRECT BONUS</h5>
                                            <h2 class="mb-0 inner">$<?php echo $direct['total_d']?> | IMAX COIN <?php echo $direct['total_d']/$price['price']?></h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                            <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <?php $match=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(amt),0) as total_match FROM matching_income_history WHERE user_id=$my_id "));?>
                                            <h5 class="text-muted">MATCHING BONUS</h5>
                                            <h2 class="mb-0 inner">$<?php echo $match['total_match']?> | IMAX COIN <?php echo $match['total_match']/$price['price']?></h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                            <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <?php $matchLevel=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(amount),0) as total_level FROM level_income_history WHERE user_id=$my_id "));?>
                                             <?php 
                                             $formattedNumber = number_format( $matchLevel['total_level'], 2, '.', '');

                                             ?>
                                            <h5 class="text-muted">LEVEL BONUS</h5>
                                            <h2 class="mb-0 inner1">$<?php echo  $formattedNumber ?> | IMAX COIN <?php echo  $formattedNumber/$price['price'] ?></h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                            <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                             <?php $inv=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(amount),0) as total_inv FROM invest_return WHERE user_id=$my_id "));?>
                                            <h5 class="text-muted">STAKING INCOME</h5>
                                            <h2 class="mb-0 inner1">$<?php echo $inv['total_inv']?> | IMAX COIN <?php echo $inv['total_inv']/$price['price']?></h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                            <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <?php $Levelspon=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(amount),0) as total_spon FROM sponsor_staking_income WHERE user_id=$my_id "));?> 
                                              <?php 
                                             $formattedNumber1 = number_format( $Levelspon['total_spon'], 2, '.', '');

                                             ?>
                                            <h5 class="text-muted dash">STAKING LEVEL BONUS</h5>
                                            <h2 class="mb-0 inner1">$<?php echo  $formattedNumber1 ?> | IMAX COIN <?php echo  $formattedNumber1/$price['price'] ?></h2>
                                        </div>
                                       <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-dollar-sign fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">TOTAL EARNING</h5>
                                            <h2 class="mb-0 inner1">$<?php echo $user_data['e_wallet']?> | IMAX COIN <?php echo $user_data['e_wallet']/$price['price']?></h2>
                                        </div>
                                       <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-dollar-sign fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <?php
                                        include("elements/left.php");
                                        $leftagents=implode(",",$leftMembesrs);
                                        $row=0;
                                        if($leftagents!=null){
                                            $user_data4=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(invest_amt),0) as total_amt FROM users WHERE user_id in ($leftagents)"));
                                            $row=$user_data4['total_amt'];
                                        }else{
                                            $row;
                                        }

                                        ?>
                                            <h5 class="text-muted">LEFT BUSINESS</h5>
                                            <h2 class="mb-0 inner">$<?php echo $row?> | IMAX COIN <?php echo $row/$price['price']?></h2>
                                        </div>
                                       <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-dollar-sign fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                             <?php
                                        include("elements/right.php");
                                        
                                        $rightagents=implode(",",$rightMembesrs);
                                        $row=0;
                                        if($rightagents!=null){
                                            $user_data3=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(invest_amt),0) as total_amt FROM users WHERE user_id in ($rightagents)"));
                                            $row=$user_data3['total_amt'];
                                        }else{
                                            $row;
                                        }
                                        ?>
                                            <h5 class="text-muted">RIGHT BUISNESS</h5>
                                            <h2 class="mb-0 inner">$<?php echo $row?> | IMAX COIN <?php echo $row/$price['price']?></h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-dollar-sign fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <?php $ld=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(invest_amt),0) as total_amt FROM users WHERE  position=0 AND sponsor_id=$my_id"));?>
                                            <h5 class="text-muted">LEFT DIRECT BUSINESS</h5>
                                            <h2 class="mb-0 inner">$<?php echo $ld['total_amt']?> | IMAX COIN <?php echo $ld['total_amt']/$price['price']?></h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-dollar-sign fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                             <?php $rd=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(invest_amt),0) as total_amt FROM users WHERE position=1 AND sponsor_id=$my_id"));?>
                                            <h5 class="text-muted dash">RIGHT DIRECT BUSINESS</h5>
                                            <h2 class="mb-0 inner">$<?php echo $rd['total_amt']?> | IMAX COIN <?php echo $rd['total_amt']/$price['price']?></h2>
                                        </div>
                                         <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-dollar-sign fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <?php $rewardinc=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(amount),0) as total_reward FROM reward_income_history WHERE user_id=$my_id "));?> 
                                            <h5 class="text-muted">REWARD ACHIVED</h5>
                                            <h2 class="mb-0 inner">$<?php echo  $rewardinc['total_reward'] ?> | IMAX COIN <?php echo  $rewardinc['total_reward']/$price['price'] ?></h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-dollar-sign fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div class="d-inline-block">
                                            <h5 class="text-muted"> WITHDRAW AMOUNT</h5>
                                            <h1 class="mb-0 inner1">$<?php echo $user_data['e_wallet']?> | IMAX COIN <?php echo $user_data['e_wallet']/$price['price']?></h1>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-dollar-sign fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div class=" d-inline-block">
                                             <?php $width=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(amt),0) as total_width FROM withdrawal WHERE user_id=$my_id AND status='1'"));?>
                                             <h5 class="text-muted">TOTAL WITHDRAWAN</h5>
                                            <h1 class="mb-0 inner">$<?php echo $width['total_width']?> | IMAX COIN <?php echo $width['total_width']/$price['price']?></h1>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-dollar-sign fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div class=" d-inline-block">
                                             <?php $money=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(amout),0) as total_money FROM e_wallet_fund WHERE user_id=$my_id "));?>
                                             
                                              <h5 class="text-muted " style="font-size:12px;">E-WALLET TO FUND WALLET</h5>
                                            <h1 class="mb-0 inner1">$<?php echo $money['total_money']?> | IMAX COIN <?php echo $money['total_money']/$price['price']?></h1>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-dollar-sign fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class=" d-inline-block">
                                            <h5 class="text-muted">ACTIVE USERS</h5>
                                           
                                            <h2 class="mb-0"><?php echo $row1+$row2?></h2>
                                        </div>
                                         <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                            <i class="fas fa-users fa-fw fa-sm text-primary"></i> 
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">

                                        
                                        <div class=" d-inline-block">
                                            <h5 class="text-muted">INACTIVE USERS</h5>
                                           
                                            <h2 class="mb-1"><?php echo $row3+$row4?></h2>
                                        </div>
                                      <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                            <i class="fas fa-users fa-fw fa-sm text-primary"></i> 
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php $user_data2=mysqli_fetch_array(mysqli_query($conn,"SELECT IFNULL(sum(no_of_pair),0)total_pair FROM pair_count WHERE user_id=$my_id"));?>
                                        
                                        <div class=" d-inline-block">
                                            <h5 class="text-muted">TOTAL PAIR</h5>
                                           
                                            <h2 class="mb-1"><?php echo $user_data2['total_pair']?></h2>
                                        </div>
                                         <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                            <i class="fas fa-users fa-fw fa-sm text-primary"></i> 
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        
                                        <div class="metric-value d-inline-block">
                                           <h5 class="text-muted">LEFT AGENTS</h5>
                                            <h2 class="mb-1"><?php echo $user_data['left_count']?></h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                            <i class="fas fa-users fa-fw fa-sm text-primary"></i> 
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        
                                        <div class=" d-inline-block">
                                            <h5 class="text-muted">RIGHT AGENTS</h5>
                                            <h2 class="mb-1"><?php echo $user_data['right_count']?></h2>
                                        </div>
                                         <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                            <i class="fas fa-users fa-fw fa-sm text-primary"></i> 
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                        <div class="card" style="background-color: #251C50; border-radius: 3vh;">
                           
                            <div class="card-body">
                                <div class="form-group">
                                    <label  style="color:#fff;position: center;!important">YOUR REFFERAL LINK:</label>
                                    <div class="input-group">
                                        <input type="text" name="key" value="http://localhost/Crypto/admin/register.php/" class="form-control form--control rigtRefURL" readonly style="border-radius:20vh;color: #000;">
                                        <button type="button" class="input-group-text copytext btn btn-success" data-url="rigtRefURL" style="border-radius:20vh;">
                                        <i class="fa fa-copy"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                         <div class="row">
                            
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Revenue by Category</h5>
                                    <div class="card-body">
                                        <div id="c3chart_category" style="height: 420px;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end category revenue  -->
                            <!-- ============================================================== -->

                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"> Total Revenue</h5>
                                    <div class="card-body">
                                        <div id="morris_totalrevenue"></div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$26,000</span><span class="text-success float-right">+9.45%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.php5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
    <script>
        (function($) {
            "use strict";
            $('.copytext').click(function() {
                let url = $(this).data('url')
                var copyText = document.getElementsByClassName(url);
                copyText = copyText[0];
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                /*For mobile devices*/
                document.execCommand("copy");
                copyText.blur();
                this.classList.add('copied');
                setTimeout(() => this.classList.remove('copied'), 1500);
            });
        })(jQuery);
    </script>
</body>
 
</html>
