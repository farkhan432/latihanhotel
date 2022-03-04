<?php
include "koneksi.php";
$id_kamar = $_POST ['id_kamar'];
$kelas = $_POST ['kelas'];
$fasilitas = $_POST ['fasilitas'];


 mysqli_query ($koneksi, "insert into kamar values ('$id_kamar', '$kelas', '$fasilitas') ");
header ("location:showkamar.php");
?>