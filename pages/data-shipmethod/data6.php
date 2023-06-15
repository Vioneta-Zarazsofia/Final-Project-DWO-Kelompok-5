<?php
require('koneksi.php');

$sql = "SELECT s.shipID , s.name ship_name, count(s.shipID) as frekuensi
        FROM shipmethod s, fac_sales p
        WHERE s.shipID = p.shipID
        GROUP BY s.shipID";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['ship_name'],
        "total" => $row['frekuensi']
        
    ));
}

$data6 = json_encode($hasil);
