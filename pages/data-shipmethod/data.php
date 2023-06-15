<?php
require('koneksi.php');

$sql = "SELECT p.product_name product,
        s.name ship_name,
        count(orderQTY) as frekuensi, 
        from fac_sales fp, shipmethod s, product p
        where s.shipID=fp.shipID=p.productID";

$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['product'],
        "total" => $row['frekuensi']
    ));
}

$data = json_encode($hasil);
?>