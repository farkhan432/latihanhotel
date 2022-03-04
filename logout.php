<script language="javascript">
	confirm("Apakah anda yakin untuk logout?");
		document.location = "login.php";
</script>
<?php 
session_start();
session_destroy();;
?>