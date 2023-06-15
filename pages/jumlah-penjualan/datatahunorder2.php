<?php
require('koneksi.php');

$sql1 = "SELECT t.tahun tahun, t.bulan bulan, SUM(f.orderQTY) AS total
        FROM time t , fac_sales f
        WHERE t.time_id = f.time_id 
        GROUP BY bulan, t.time_id = f.time_id";

$result1 = mysqli_query($conn, $sql1);

$penjualan = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($penjualan, array(
        "penjualan" => $row['total'],
        "kategori" => $row['tahun'],
        "name" => $row['tahun'],
    ));
}

$datatahunorder2 = json_encode($penjualan);