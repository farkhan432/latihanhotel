<html>
    <head>
        <title>AHMAD FARHAN</title>
    </head>
    <body bgcolor="#E6E6FA">
<center>

  <?php
  include 'koneksi.php' ;
  $id = $_GET['id'];
  $data = mysqli_query($koneksi, "select * from pemesanan where id_pemesanan='$id'");
  $d = mysqli_fetch_array($data);
    ?>
    <form method="post" action="prosespemesanan.php">
      <table border='1'>
    <tr>
      <td>ID PEMESANAN</td>
      <td><input type="text" readonly="readonly" name="id_pemesanan" value="<?php echo $d['id_pemesanan'];?>"></td>
    </tr>
    <tr>
    <td>NAMA PELANGGAN</td>
    <td><select name="id_pelanggan" id="id_pelanggan">
    <option value="<?php echo $d['id_pelanggan'];?>"><?php echo $d['id_pelanggan'];?></option>
    <?php
    include 'koneksi.php';
    $query= mysqli_query($koneksi, "select * from pelanggan");
    while($hasil= mysqli_fetch_array($query))
    {
    echo "<option value='$hasil[1]'>$hasil[1]</option>";
    }
    ?>
    </select></td>
      </tr>
  
      <tr>
    <td>KELAS</td>
    <td><select name="id_kamar" id="id_kamar">
    <option value="<?php echo $d['id_kamar'];?>"><?php echo $d['id_kamar'];?></option>
    <?php
    include 'koneksi.php';
    $query= mysqli_query($koneksi, "select * from kamar");
    while($hasil= mysqli_fetch_array($query))
    {
    echo "<option value='$hasil[1]'>$hasil[1]</option>";
    }
    ?>
    </select></td>
      </tr>
    <tr>
  <tr>
    <td>TANGGAL CEK IN</td>
    <td><input type="date" name="cek_in" value="<?php echo $d['cek_in']; ?>"></td>
  </tr>  
  <tr>
    <td>TANGGAL CEK OUT</td>
    <td><input type="date"  name="cek_out" value="<?php echo $d['cek_out']; ?>"></td>
  </tr> 
    <tr>  
      <td colspan="3">
      <input type="submit" name="ok" value="OK">
      <input type="submit" name="cancel" value="CANCEL"></td>
    </tr>
      </table>
    </form>
  </center>
   
  
</body>
</html>