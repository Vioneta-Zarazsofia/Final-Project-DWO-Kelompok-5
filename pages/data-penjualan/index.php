<?php
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT count(productID) as jumlah FROM product");
$r  = mysqli_fetch_array($query);
echo $r['jumlah']; ?>

<br>
<?php
$query = mysqli_query($conn, "SELECT count(storeID) as jumlah FROM store");
$r  = mysqli_fetch_array($query);
echo $r['jumlah'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT count(shipID) as jumlah FROM shipmethod");
$r  = mysqli_fetch_array($query);
echo $r['jumlah'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT sum(sub_total) as total FROM fac_product");
$r  = mysqli_fetch_array($query);
echo $r['total'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT sum(orderQTY) as total FROM fac_product");
$r  = mysqli_fetch_array($query);
echo $r['total'];
?>