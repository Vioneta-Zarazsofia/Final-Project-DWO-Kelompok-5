<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

</head>

<body>

    <?php
  //data barchart
  include 'data6.php';
  $data6 = json_decode($data6, TRUE);
 

  ?>

    <div class="container-scroller">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: white;">
            <div
                class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color: #8FBC8F;">
                <h3>UAS DWO</h3>
            </div>
            <ul class="nav">
                <li class="nav-item nav-category">
                    <span class="nav-link black">Menu</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../index.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Data Penjualan</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="../../pages/data-penjualan/tahun.php">Berdasarkan Tahun</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                        aria-controls="auth">
                        <span class="menu-icon">
                            <i class="mdi mdi-security"></i>
                        </span>
                        <span class="menu-title">Jumlah Penjualan</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="../../pages/jumlah-penjualan/tahun-jumlah.php">Berdasarkan Tahun </a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/data-produk/produk.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Data Produk</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/data-shipmethod/chart-ship.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play bg-danger"></i>
                        </span>
                        <span class="menu-title">Data Shipmethod</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/data-customer/customer.php">
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
                    <a class="nav-link" href="../../olap.php">
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
            <div class="bg-light content-wrapper">
                <div class="page-header">
                    <h3 class="page-title text-dark" style="font-size:20px;"> <br> Data Ship Method </h3>
                </div>
                <div class="row">
                    <div id="barchart" class="grafik"></div>
                    <p class="highcharts-description text-dark" style="font-size:14px; text-align:center;"><br>
                        Pengiriman yang sering digunakan yaitu Cargo Transport 5 dengan mengirimkan sebanyak 40 produk.
                    </p>
                    <script type="text/javascript">
                    // Create the barchart
                    Highcharts.chart('barchart', {
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Data Metode Pengiriman Barang'
                        },
                        subtitle: {
                            text: 'Source: Database uasdwo'
                        },
                        accessibility: {
                            announceNewData: {
                                enabled: true
                            }
                        },
                        xAxis: {
                            type: 'category'
                        },
                        yAxis: {
                            title: {
                                text: 'Frekuensi Pengiriman'
                            }

                        },
                        legend: {
                            enabled: false
                        },
                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.y:.1f}$'
                                }
                            }
                        },

                        tooltip: {
                            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}$</b> of total<br/>'
                        },

                        series: [{
                            name: "Shipmethod",
                            colorByPoint: true,
                            data: [
                                <?php foreach ($data6 as $data6) : ?> {
                                    name: '<?= $data6["name"]; ?>',
                                    y: <?= $data6["total"]; ?>,
                                    drilldown: '<?= $data6["name"]; ?>'
                                },
                                <?php endforeach; ?>
                            ]
                        }]
                    });
                    </script>
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer" style="background-color: #8FBC8F;">
                        <div class=" d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-light d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                                Kelompok 5 Uasdwaw 2023</span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="../../assets/vendors/select2/select2.min.js"></script>
            <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="../../assets/js/off-canvas.js"></script>
            <script src="../../assets/js/hoverable-collapse.js"></script>
            <script src="../../assets/js/misc.js"></script>
            <script src="../../assets/js/settings.js"></script>
            <script src="../../assets/js/todolist.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <script src="../../assets/js/file-upload.js"></script>
            <script src="../../assets/js/typeahead.js"></script>
            <script src="../../assets/js/select2.js"></script>
            <!-- End custom js for this page -->
</body>

</html>