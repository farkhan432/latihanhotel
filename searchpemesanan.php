<html>
    <head>
        <title>AHMAD FARHAN</title>
    </head>
    <body bgcolor="#E6E6FA">
<?php
include 'koneksi.php';
?>
<center>
<form action="searchpemesanan.php" method="get">
  <label>CARI :</label>
  <input type="text" placeholder="masukkan nama anggota" name="cari">
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
              <th>ID PEMESANAN</th>
              <th>NAMA PELANGGAN</th>
              <th>KELAS KAMAR</th>
              <th>TANGGAL CEK IN</th>
              <th>TANGGAL CEK OUT</th>
              <th>OPSI</th>
            
            
    </tr>
<?php
if(isset($_GET ['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query($koneksi,"select * from pemesanan where id_pemesanan like '%".$cari."%'"); 
}else{
    $data = mysqli_query($koneksi,"select * from pemesanan");

  }
  $no = 1 ;
  while($d = mysqli_fetch_array ($data)){
    ?>
    <tr>
                 <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_pemesanan'];?></td>
                <td><?php echo $d['id_pelanggan'];?></td>
                <td><?php echo $d['id_kamar'];?></td>
                <td><?php echo $d['cek_in'];?></td>
                <td><?php echo $d['cek_out'];?></td>
                <td> <a href="updatepemesanan.php?id=<?php echo $d['id_pemesanan']; ?>"> <font color="black">UPDATE </font></a> &nbsp; &nbsp;
                 <a href="deletepemesanan.php?id=<?php echo $d['id_pemesanan']; ?>"> <font color="black">DELETE </font></a> 
                </td>
              </tr>
  <?php } ?>
</table>

<td> 
<a href="showpemesanan.php"> UNTUK MELIHAT SEMUA DATA </a> &nbsp; 
</td>
</center>
</body>
</html>