<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#E6E6FA">
<?php
include 'koneksi.php';
$id=$_GET['id'];
$delete = mysqli_query($koneksi,"delete from pelanggan where id_pelanggan='$id'");
if ($delete) {
?>
<script language="javascript">
	confirm("Hapus Data?");
	alert("Data Akan Hilang");
		document.location = "showpelanggan.php";
</script>
<?php
}
else{
	echo "GAGAl MENGHAPUS";
}

?>
</body>
</html>