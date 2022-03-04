<?php
include "koneksi.php";
$id_pemesanan = $_POST ['id_pemesanan'];
$id_pelanggan = $_POST ['id_pelanggan'];
$id_kamar = $_POST ['id_kamar'];
$cek_in = $_POST ['cek_in'];
$cek_out = $_POST['cek_out'];


mysqli_query($koneksi, "update pemesanan set id_pemesanan='$id_pemesanan', id_pelanggan='$id_pelanggan', id_kamar='$id_kamar', cek_in='$cek_in', cek_out='$cek_out' where id_pemesanan='$id_pemesanan'");

header("location:showpemesanan.php");
?>