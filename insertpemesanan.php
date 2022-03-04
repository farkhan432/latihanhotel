<?php
include "koneksi.php";
$id_pemesanan = $_POST ['id_pemesanan'];
$id_pelanggan = $_POST ['id_pelanggan'];
$id_kamar = $_POST ['id_kamar'];
$cek_in = $_POST ['cek_in'];
$cek_out =  $_POST ['cek_out'];


 mysqli_query ($koneksi, "insert into pemesanan values ('$id_pemesanan', '$id_pelanggan', '$id_kamar', '$cek_in', '$cek_out') ");
header ("location:showpemesanan.php");
?>