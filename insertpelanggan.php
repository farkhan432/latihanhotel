<?php
include "koneksi.php";
$id_pelanggan = $_POST ['id_pelanggan'];
$nama = $_POST ['nama'];
$telepon = $_POST ['telepon'];


 mysqli_query ($koneksi, "insert into pelanggan values ('$id_pelanggan', '$nama', '$telepon') ");
header ("location:showpelanggan.php");
?>