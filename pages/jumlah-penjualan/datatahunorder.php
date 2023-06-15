<?php
require('koneksi.php');

$sql = "SELECT t.tahun tahun, SUM(f.orderQTY) AS total
        FROM time t , fac_sales f
        WHERE t.time_id = f.time_id 
        GROUP BY tahun";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['tahun'],
        "total" => $row['total']
    ));
}

$datatahunorder = json_encode($hasil);