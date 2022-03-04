<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$data = "select * from admin where username='$username' and password = '$password'";

$exec = mysqli_query($koneksi,$data);
if (mysqli_num_rows($exec) >= 1) {
echo "true";
session_start();
$_SESSION['status_login'] = 1;
$_SESSION['id'] = $id;
header("Location: showkamar.php");
}else{?>
	<script language="javascript">
	alert("Password Anda Salah");
		document.location = "login.php";
</script>
<?php
}
?>