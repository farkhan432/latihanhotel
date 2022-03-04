<html>
    <head>
        <title>AHMAD FARHAN</title>
        <body bgcolor="#E6E6FA">
<center>

  <?php
  include 'koneksi.php' ;
  $id = $_GET['id'];
  $data = mysqli_query($koneksi, "select * from kamar where id_kamar='$id'");
  while($d = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="proseskamar.php">
      <table border='1'>
        <tr>
          <td>ID KAMAR</td>
          <td><input type="text" readonly="readonly" name="id_kamar" value="<?php echo $d['id_kamar']; ?>"></td>
        </tr>
        <tr>
          <td>KELAS</td>
          <td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>"></td>
        </tr>
        <tr>
          <td>FASILITAS</td>
          <td><textarea name="fasilitas" cols="10" rows="3" ><?php echo $d['fasilitas']; ?> </textarea></td>
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