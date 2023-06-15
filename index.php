<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container-scroller text-light">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: white;">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
                style="background-color: #8FBC8F;">
                <h3>UAS DWO</h3>
            </div>

            <ul class="nav">
                <li class="nav-item nav-category">
                    <span class="nav-link text-black">Menu</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="index.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items ">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-icon" style="background-color: pink;">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Data Penjualan</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/data-penjualan/tahun.php">Berdasarkan
                                    Tahun</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                        aria-controls="auth">
                        <span class="menu-icon">
                            <i class="mdi mdi-security"></i>
                        </span>
                        <span class="menu-title">Jumlah Product</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/jumlah-penjualan/tahun-jumlah.php">Berdasarkan Tahun </a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="pages/data-produk/produk.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Data Produk</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="pages/data-shipmethod/chart-ship.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play bg-danger"></i>
                        </span>
                        <span class="menu-title">Data Shipmethod</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="pages/data-customer/customer.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-chart-bar"></i>
                        </span>
                        <span class="menu-title">Data Customer</span>
                    </a>
                </li>

                <li class="nav-item nav-category">
                    <span class="nav-link">Database</span>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="olap.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box"></i>
                        </span>
                        <span class="menu-title">Olap</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fixed page-body-wrapper">
            <div class="content-wrapper bg-light">
                <div class="row">
                    <div class="text-dark">
                        <h2>Dashboard</h2>
                        <br>
                    </div>
                    <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <a href="pages/data-penjualan/tahun.php" class="card-link"
                                style="background-color: #8FBC8F;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <h3 class="mb-0" py>
                                                    <?php
                                    include 'koneksi.php';
                                    $query = mysqli_query($conn, "SELECT count(productID) as jumlah FROM product");
                                    $r  = mysqli_fetch_array($query);
                                    echo $r['jumlah'];
                                    ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-warning">
                                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-light font-weight-normal">Jumlah Produk</h6>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <a href="pages/data-penjualan/tahun.php" class="card-link"
                                style="background-color: #8FBC8F;">
                                <div class="card-body" style="background-color: #8FBC8F;">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <h3 class="mb-0">
                                                    <?php
                            $query = mysqli_query($conn, "SELECT count(storeID) as jumlah FROM store");
                            $r  = mysqli_fetch_array($query);
                            echo $r['jumlah']; ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-warning">
                                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-light font-weight-normal">jumlah Store</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <a href="pages/data-shipmethod/chart-ship.php" class="card-link"
                                style="background-color: #8FBC8F;">
                                <div class="card-body" style="background-color: #8FBC8F;">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <h3 class="mb-0">
                                                    <?php
                            $query = mysqli_query($conn, "SELECT count(shipID) as jumlah FROM shipmethod");
                            $r  = mysqli_fetch_array($query);
                            echo $r['jumlah'];
                            ?>
                                                </h3>
                                                <p class="text-warning ms-2 mb-0 font-weight-medium"></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-warning ">
                                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-light font-weight-normal">Jumlah Shipmethod</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 grid-margin">
                        <div class="card">
                            <a href="pages/data-shipmethod/chart-ship.php" class="card-link"
                                style="background-color: #8FBC8F;">
                                <div class="card-body" style="background-color: #8FBC8F;">
                                    <h5>Total Penjualan</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0">
                                                    $<?php
                            $query = mysqli_query($conn, "SELECT sum(sub_total) as total FROM fac_product");
                            $r  = mysqli_fetch_array($query);
                            echo $r['total'];
                            ?>
                                                    <p class="highcharts-description text-light"
                                                        style="font-size:14px; text-align:center;"><br>
                                                        Total Penjualan Dari Tahun 2001-2003.
                                                    </p>
                                                </h2>
                                                <p class="text-warning ms-2 mb-0 font-weight-medium"></p>
                                            </div>
                                            <h6 class="text-light font-weight-normal"></h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-codepen text-warning ms-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 grid-margin">
                        <div class="card">
                            <div class="card-body" style="background-color: #8FBC8F;">
                                <h5>Total Order</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">
                                                <?php
                        $query = mysqli_query($conn, "SELECT sum(orderQTY) as total FROM fac_product");
                        $r  = mysqli_fetch_array($query);
                        echo $r['total'];
                        ?>
                                                <p class="highcharts-description text-light"
                                                    style="font-size:14px; text-align:center;"><br>
                                                    Total Order Dari Tahun 2001-2003.
                                                </p>
                                            </h2>
                                            <p class="text-warning ms-2 mb-0 font-weight-medium"></p>
                                        </div>
                                        <h6 class="text-light font-weight-normal"></h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- partial:partials/_footer.html -->
                <footer class="footer" style="background-color: #8FBC8F;">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-light d-block text-center text-sm-left d-sm-inline-block">Copyright © Kelompok
                            5 Uasdwaw 2023</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>

        <!-- plugins:js -->
        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="assets/vendors/chart.js/Chart.min.js"></script>
        <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
        <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <script src="assets/js/misc.js"></script>
        <script src="assets/js/settings.js"></script>
        <script src="assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="assets/js/dashboard.js"></script>
        <!-- End custom js for this page -->
</body>

</html>