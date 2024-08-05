<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg  fixed-top" style="background:#251C50; ;">
                <a class="navbar-brand" href="dasboard2.php"><img src="assets/images/logo1.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search.." style="background: #dddddd;border-radius:20vh ;">
                            </div>
                        </li>
                        <!-- <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li> -->
                        <li class="nav-item dropdown nav-user">
                            <?php $name1= mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE user_id=$my_id"));?>
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/default2.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $name1['name']?></h5>
                                    <span class="status"></span><span class="ml-2"><?php echo $my_id?></span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">DASHBOARD</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                
                            </li>
                            <!-- <li class="nav-item ">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="dashboard.php">E Commerce Dashboard</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product.php">Product List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-single.php">Product Single</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-checkout.php">Product Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                         
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-finance.php">Finance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-sales.php">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="dashboard-influencer.php">Influencer</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-finder.php">Influencer Finder</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-profile.php">Influencer Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/cards.php">Cards <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/general.php">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/carousel.php">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/listgroup.php">List Group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/typography.php">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/accordions.php">Accordions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/tabs.php">Tabs</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-c3.php">C3 Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-chartist.php">Chartist Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-charts.php">Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-morris.php">Morris</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-sparkline.php">Sparkline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-gauge.php">Guage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/form-elements.php">Form Elements</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/form-validation.php">Parsely Validations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/multiselect.php">Multiselect</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/datepicker.php">Date Picker</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/bootstrap-select.php">Bootstrap Select</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Table</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/general-table.php">General Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/data-tables.php">Data Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>-->
                             <li class="nav-item active">
                                <a class="nav-link nav-link active" href="dasboard2.php"  ><i class="fa fa-fw fa-user-circle"></i>DASHBOARD</a>
                               
                            </li>
                            
                           <!--  <li class="nav-item">
                                <a class="nav-link" href="my-ref.php"  ><i class="fa fa-fw fa-user-circle"></i>My Refferals</a>
                               
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-user"></i>MY PROFILE</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="update_profile.php">UPDATE PROFILE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="update-pass.php">CHANGE PASSWORD</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="update-wallet-ad.php">UPDATE WALLET ADDRESS</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class=" fab fa-bitcoin"></i>ADD FUND</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="add-funds.php">ADD FUND TO WALLET</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="wallet-tranfer.php">E-WALLET TO FUND TRANSFER</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="addFundDownline.php">FUND TRANSFER</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="fund-history.php">FUND TRANSFER HISTORY </a>
                                        </li>
                                         
                                    </ul>
                                </div>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fab fa-product-hunt"></i>PACKAGE</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="packages.php">PACKAGES</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="staking-his.php">PACKAGE PURCHASE HISTORY</a>
                                        </li>
                                         
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class=" fas fa-rocket"></i>EARNINGS</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dream-bonus.php">DIRECT INCOME</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="staking-bonus.php">STAKING BONUS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="matching-income.php">MATCHING INCOME</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="level-income.php">MATCHING LEVEL INCOME</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sponsor-staking.php">SPONSOR STACKING LEVEL INCOME</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="reward.php">REWARD</a>
                                        </li>
                                        
                                         
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-people-carry"></i>MY TEAM</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="direct-network-level.php">DIRECT NETWORK</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="direct-left.php">DIRECT LEFT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="direct-right.php">DIRECT RIGHT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="direct-right-active.php">DIRECT RIGHT ACTIVE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="left-network.php">LEFT NETWORK</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="right-network.php">RIGHT NETWORK</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="left-network-active.php">LEFT NETWORK ACTIVE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="right-network-active.php">RIGHT NETWORK ACTIVE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="mytree.php">GENOLOGY</a>
                                        </li>
                                         
                                    </ul>
                                </div>
                            </li>
                           <!--  <li class="nav-item">
                                <a class="nav-link" href="widthdrawal1.php"  ><i class="fas fa-dollar-sign"></i>WITHDRAWAL</a>
                               
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class=" fas fa-hand-holding-usd "></i>WITHDRAWAL</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="widthdrawal1.php">WIDTHDRAWAL</a>
                                        </li>
                                       <li class="nav-item">
                                            <a class="nav-link" href="withdrawal-his.php">WIDTHDRAWAL HISTORY</a>
                                        </li>
                                         
                                    </ul>
                                </div>
                            </li>
                           <!--  <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class=" fas fa-piggy-bank"></i>INVESTMENTS</a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="price.php">INVESTMENTS</a>
                                        </li>
                                       
                                         
                                    </ul>
                                </div>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class=" fas fa-piggy-bank"></i>ALL TRANSECTION HISTORY</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="transection.php">TRANSECTION HISTORY</a>
                                        </li>
                                       
                                         
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-hands-helping"></i>CUSTOMER SUPPORT</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="ticket.php">NEW TICKET</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ticket-support.php">TICKET HISTORY</a>
                                        </li>
                                         
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"  >LOGOUT</a>
                               
                            </li>

                           <!--  <li class="nav-item">
                                <a class="nav-link" href="registration.php"  ><i class="fas fa-id-card"></i>Registration</a>
                               
                            </li> -->
                            <!--  <li class="nav-item">
                                <a class="nav-link" href="price.php"  ><i class="fas fa-band-aid"></i>Package</a>
                               
                            </li> -->
                           <!--  <li class="nav-item">
                                <a class="nav-link" href="invoice.php"  ><i class="far fa-money-bill-alt"></i>invoice</a>
                               
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="profile.php"  ><i class="fas fa-registered"></i>Profile</a>
                               
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="plans.php"  ><i class="fas fa-dollar-sign"></i>Revenue Plan</a>
                               
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="mytree.php"  ><i class="fas fa-dollar-sign"></i>tree</a>
                               
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="level.php"  ><i class="fas fa-dollar-sign"></i>level</a>
                               
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="packages.php"  ><i class="fas fa-dollar-sign"></i>Plan Option</a>
                               
                            </li> -->
                            <!--  <li class="nav-item">
                                <a class="nav-link" href="add-funds.php"  ><i class="fas fa-dollar-sign"></i>Add Fund</a>
                               
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="matching-income.php"  ><i class="fas fa-dollar-sign"></i>Matching Income</a>
                               
                            </li> -->
                             <!-- <li class="nav-item">
                                <a class="nav-link" href="level-income.php"  ><i class="fas fa-dollar-sign"></i>Matching Level Income</a>
                               
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="reward.php"  ><i class="fas fa-dollar-sign"></i>Reward Income</a>
                               
                            </li> -->
                            
                            <li class="nav-divider">
                            
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/blank-page.php">Blank Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/blank-page-header.php">Blank Page Header</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/login.php">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/404-page.php">404 page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/sign-up.php">Sign up Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/forgot-password.php">Forgot Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/pricing.php">Pricing Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/timeline.php">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/calendar.php">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/sortable-nestable-lists.php">Sortable/Nestable List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/widgets.php">Widgets</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/media-object.php">Media Objects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/cropper-image.php">Cropper</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/color-picker.php">Color Picker</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/inbox.php">Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/email-details.php">Email Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/email-compose.php">Email Compose</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/message-chat.php">Message Chat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-fontawesome.php">FontAwesome Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-material.php">Material Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-simple-lineicon.php">Simpleline Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-themify.php">Themify Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-flag.php">Flag Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-weather.php">Weather Icon</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/map-google.php">Google Maps</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/map-vector.php">Vector Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                            <div id="submenu-11" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>