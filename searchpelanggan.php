<html>
    <title>AHMAD FARHAN</title>
    <head>
       
    </head>
    <body bgcolor="#E6E6FA">
<?php
include 'koneksi.php';
?>
<center>
<form action="searchpelanggan.php" method="get">
  <label>CARI :</label>
  <input type="text" placeholder="masukkan nama pelanggan" name="cari">
  <input type="submit" value="CARI">
</form>

<?php
if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  echo "<b>HASIL PENCARIAN : ".$cari."</b>";

}
?>
    <table width="500" border="7" cellspacing="0" cellpadding="5">
    <tr>

              <th>NO</th>
              <th>ID PELANGGAN</th>
              <th>NAMA</th>
              <th>TELEPON</th>
              <th>OPSI</th>
            
    </tr>
<?php
if(isset($_GET ['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query($koneksi,"select * from pelanggan where id_pelanggan like '%".$cari."%'"); 
}else{
    $data = mysqli_query($koneksi,"select * from pelanggan");

  }
  $no = 1 ;
  while($d = mysqli_fetch_array ($data)){
    ?>
    <tr>
                 <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_pelanggan'];?></td>
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['telepon'];?></td>
                <td> 
                    <a href="updatetelepon.php?id=<?php echo $d['id_pelanggan']; ?>"> <font color="black">UPDATE </font></a> &nbsp; &nbsp;
                    <a href="deletetelepon.php?id=<?php echo $d['id_pelanggan']; ?>"> <font color="black">DELETE </font></a> 
                </td>
              </tr>
  <?php } ?>
</table>
<br>

<td> 
<a href="showpelanggan.php"> UNTUK MELIHAT DATA PELANGGAN </a> &nbsp; 
</td>
</center>
</body>
</html>