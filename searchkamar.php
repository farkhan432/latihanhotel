<html>
    <title>AHMAD FARHAN</title>
    <head>
       
    </head>
    <body bgcolor="#E6E6FA">
<?php
include 'koneksi.php';
?>
<center>
<form action="searchkamar.php" method="get">
  <label>CARI :</label>
  <input type="text" placeholder="masukkan nama kamar" name="cari">
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
              <th>ID KAMAR</th>
              <th>KELAS</th>
              <th>FASILITAS</th>
              <th>OPSI</th>
            
    </tr>
<?php
if(isset($_GET ['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query($koneksi,"select * from kamar where id_kamar like '%".$cari."%'"); 
}else{
    $data = mysqli_query($koneksi,"select * from kamar");

  }
  $no = 1 ;
  while($d = mysqli_fetch_array ($data)){
    ?>
    <tr>
                 <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_kamar'];?></td>
                <td><?php echo $d['kelas'];?></td>
                <td><?php echo $d['fasilitas'];?></td>
                <td> 
                    <a href="updatekamar.php?id=<?php echo $d['id_kamar']; ?>"> <font color="black">UPDATE </font></a> &nbsp; &nbsp;
                    <a href="deletekamar.php?id=<?php echo $d['id_kamar']; ?>"> <font color="black">DELETE </font></a> 
                </td>
              </tr>
  <?php } ?>
</table>
<br>

<td> 
<a href="showkamar.php"> UNTUK MELIHAT DATA KAMAR </a> &nbsp; 
</td>
</center>
</body>
</html>