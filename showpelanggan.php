<html>
  <title>AHMAD FARHAN</title>
  <head>
<center>
   
</center>
</head>
<body bgcolor="#E6E6FA">
    
    <center><table width="500" border="7" cellspacing="0" cellpadding="5">
    <h2>DATA PELANGGAN</h2>
    <tr>
              <th>NO</th>
              <th>ID PELANGGAN</th>
              <th>NAMA</th>
              <th>TELEPON</th>
              <th>OPSI</th>
             
              
            
            </tr>
            <?php
            include'koneksi.php';
            $no= 1;
            $data= mysqli_query($koneksi,"select * from pelanggan");
            while($d=mysqli_fetch_array($data)){
              ?>
             <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_pelanggan'];?></td>
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['telepon'];?></td>
                <td>
                <a href="updatepelanggan.php?id=<?php echo $d['id_pelanggan']; ?>"> <font color="blue">UPDATE </font></a> &nbsp; &nbsp;
                <a href="deletepelanggan.php?id=<?php echo $d['id_pelanggan']; ?>"> <font color="black">DELETE </font></a> 
                </td>
              </tr>
            <?php
          }
          ?>
          </table>
         <br>
         <a href="searchpelanggan.php"><input type="submit" name=" SEARCH " value=" SEARCH "> </a> 
         <a href="showpemesanan.php"><input type="submit" name="pemesanan " value=" SHOW PEMESANAN"> </a> 
         <a href="pelanggan.php"><input type="submit" name="PELANGGAN" value=" FORM  "> </a> 
         <a href="logout.php"><input type="submit" name=" LOGOUT" value=" LOGOUT"> </a> 
</center>
</body>
</html>