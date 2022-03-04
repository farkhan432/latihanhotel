<?php
include "koneksi.php";
$id_pelanggan = $_POST ['id_pelanggan'];
$nama = $_POST ['nama'];
$telepon = $_POST ['telepon'];


mysqli_query($koneksi, "update pelanggan set id_pelanggan='$id_pelanggan', nama='$nama', telepon='$telepon' where id_pelanggan='$id_pelanggan'");

header("location:showpelanggan.php");
?>