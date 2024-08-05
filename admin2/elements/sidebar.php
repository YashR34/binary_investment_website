<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg  fixed-top" style="background:#251C50; ">
                <a class="navbar-brand" href="dashboard.php" style="color: yellow;">ADMIN - IMAXCOIN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/default2.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">ADMIN</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
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
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                            
                            </li>
                            <!-- <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
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
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
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
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link nav-link active" href="dashboard.php"  ><i class="fa fa-fw fa-user-circle"></i>DASHBOARD</a>
                               
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-12" aria-controls="submenu-12"><i class="fas fa-key"></i>PIN</a>
                                <div id="submenu-12" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="view-pin.php">VIEW PIN</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="e-pin.php">TRANSFER PIN</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="agent-list.php"  ><i class="fas fa-clipboard-list"></i>AGENT LIST</a>
                               
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="login_agent.php"  ><i class="fas fa-address-book"></i>LOGIN TO AGENT</a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="withdraw_req.php"  ><i class="fas fa-piggy-bank"></i>WITHDRAW REQUEST</a>
                               
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="pack_add-del.php"  ><i class="fas fa-list-ul"></i>PACKAGE ADD/DEL</a>
                               
                            </li> 
                            
                            <!--  <li class="nav-item">
                                <a class="nav-link" href="pair-income.php"  ><i class=" fas fa-users"></i>PAIR INCOME</a>
                               
                            </li> -->
                             <li class="nav-item">
                                <a class="nav-link" href="imax-price.php"  ><i class="fas fa-dollar-sign"></i>IMAX PRICE</a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pair-income.php"  >LOGOUT</a>
                               
                            </li>
                            <li class="nav-divider">
                                
                            </li>
                            <!-- <li class="nav-item">
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
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
