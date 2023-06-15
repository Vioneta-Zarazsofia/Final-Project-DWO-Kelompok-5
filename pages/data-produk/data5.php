<?php
require('koneksi.php');

$sql = " SELECT p.product_name product_name, 
        SUM(f.orderQTY) AS total
        FROM product p, fac_product f
        WHERE p.productID = f.productID
        GROUP BY product_name";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['product_name'],
        "total" => $row['total']
    ));
}

$data5 = json_encode($hasil);