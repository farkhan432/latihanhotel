<?php
include "koneksi.php";
$id_kamar = $_POST ['id_kamar'];
$kelas = $_POST ['kelas'];
$fasilitas = $_POST ['fasilitas'];


mysqli_query($koneksi, "update kamar set id_kamar='$id_kamar', kelas='$kelas', fasilitas='$fasilitas' where id_kamar='$id_kamar'");

header("location:showkamar.php");
?>