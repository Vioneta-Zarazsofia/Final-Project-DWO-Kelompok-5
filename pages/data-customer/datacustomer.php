<?php
require('koneksi.php');

$sql = "SELECT c.customerID as id, sum(p.orderQTY) as jumlah
        from customer c , fac_sales p
        where c.customerID = p.customerID 
        group by c.customerID ASC LIMIT 3";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['id'],
        "total" => $row['jumlah']
    ));
}

$datacustomer = json_encode($hasil);