<html>
  <title>AHMAD FARHAN</title>
  <head>
<center>
   
</center>
</head>
<body bgcolor="#E6E6FA">
    
    <center><table width="500" border="7" cellspacing="0" cellpadding="5">
    <h2>DATA KAMAR</h2>
    <tr>
              <th>NO</th>
              <th>ID KAMAR</th>
              <th>KELAS</th>
              <th>FASILITAS</th>
              <th>OPSI</th>
             
              
            
            </tr>
            <?php
            include'koneksi.php';
            $no= 1;
            $data= mysqli_query($koneksi,"select * from kamar");
            while($d=mysqli_fetch_array($data)){
              ?>
             <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_kamar'];?></td>
                <td><?php echo $d['kelas'];?></td>
                <td><?php echo $d['fasilitas'];?></td>
                <td>
                <a href="updatekamar.php?id=<?php echo $d['id_kamar']; ?>"> <font color="blue">UPDATE </font></a> &nbsp; &nbsp;
                <a href="deletekamar.php?id=<?php echo $d['id_kamar']; ?>"> <font color="black">DELETE </font></a> 
                </td>
              </tr>
            <?php
          }
          ?>
          </table>
         <br>
         <a href="searchkamar.php"><input type="submit" name=" SEARCH " value=" SEARCH "> </a> 
         <a href="showpelanggan.php"><input type="submit" name=" pelanggan " value=" SHOW PELANGGAN "> </a> 
         <a href="kamar.php"><input type="submit" name="kamar" value=" FORM KAMAR "> </a> 
         <a href="logout.php"><input type="submit" name=" LOGOUT" value=" LOGOUT"> </a> 
</center>
</body>
</html>