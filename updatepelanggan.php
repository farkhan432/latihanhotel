<html>
    <head>
        <title>AHMAD FARHAN</title>
        <body bgcolor="#E6E6FA">
<center>

  <?php
  include 'koneksi.php' ;
  $id = $_GET['id'];
  $data = mysqli_query($koneksi, "select * from pelanggan where id_pelanggan='$id'");
  while($d = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="prosespelanggan.php">
      <table border='1'>
        <tr>
          <td>ID PELANGGAN</td>
          <td><input type="text" readonly="readonly" name="id_pelanggan" value="<?php echo $d['id_pelanggan']; ?>"></td>
        </tr>
        <tr>
          <td>NAMA</td>
          <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
        </tr>
        <tr>
          <td>TELEPON</td>
          <td><input type="text" name="telepon" value="<?php echo $d['telepon']; ?>"></td>
        </tr>
        
        <tr>  
          <td colspan="3">
          <input type="submit" name="ok" value="OK">
          <input type="submit" name="cancel" value="CANCEL"></td>

        </tr>
      </table>
    </form>
  </center>
    <?php
  }
  ?>
</body>
    </head>
</html>