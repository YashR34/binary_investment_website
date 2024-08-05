<!doctype html>
<html lang="en">
 <?php include_once("../elements/connection.php");?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>IMAXCOIN - Crypto Currency</title>
    <link rel="shortcut icon" href="../assets/images/favicon.ico" >

</head>
<?php include("sidebar.php"); ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Sparkline </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Charts</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Sparkline</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- bar chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Bar Chart</h5>
                                <div class="card-body">
                                    <div id="sparkline1" class="spark-chart"></div>
                                    <div class="spark-chart-info">
                                        <h5 class="mb-0">Sales</h5>
                                        <p>70%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end bar chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- line chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Line Chart</h5>
                                <div class="card-body">
                                    <div id="sparkline2" class="spark-chart"></div>
                                    <div class="spark-chart-info">
                                        <h5 class="mb-0">Sales</h5>
                                        <p>70%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end line chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- discreate chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Discrete</h5>
                                <div class="card-body">
                                    <div id="sparkline3" class="spark-chart"></div>
                                    <div class="spark-chart-info">
                                        <h5 class="mb-0">Sales</h5>
                                        <p>70%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end discreate chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- line chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Line Chart</h5>
                                <div class="card-body">
                                    <div id="sparkline4" class="spark-chart"></div>
                                    <div class="spark-chart-info">
                                        <h5 class="mb-0">Sales</h5>
                                        <p>70%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end line chart  -->
                        <!-- ============================================================== -->
                    </div>
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- line chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Compositebar Line Chart</h5>
                                <div class="card-body">
                                    <div id="compositebar" class="spark-chart"></div>
                                    <div class="spark-chart-info">
                                        <h5 class="mb-0">Sales</h5>
                                        <p>70%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end line chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- bullet chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Bullet Chart</h5>
                                <div class="card-body">
                                    <div id="sparkline5" class="spark-chart"></div>
                                    <div class="spark-chart-info">
                                        <h5 class="mb-0">Sales</h5>
                                        <p>70%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end bullet chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- pie chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">PieChart</h5>
                                <div class="card-body">
                                    <div id="sparkline6" class="spark-chart"></div>
                                    <div class="spark-chart-info">
                                        <h5 class="mb-0">Sales</h5>
                                        <p>70%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pie chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- box chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6    col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Box Plot</h5>
                                <div class="card-body">
                                    <div id="sparkline7" class="spark-chart"></div>
                                    <div class="spark-chart-info">
                                        <h5 class="mb-0">Sales</h5>
                                        <p>70%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end box chart  -->
                        <!-- ============================================================== -->
                    </div>
               
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
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
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="../assets/vendor/charts/sparkline/spark-js.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>