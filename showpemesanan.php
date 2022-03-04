<html>
    <head>
        <title>AHMAD FARHAN</title>
    </head>
    <body>
    <center>
<body bgcolor="#E6E6FA">
<h4 align="center" > TABEL PEMESANAN </h4>
<center><table width="500" border="7" cellspacing="0" cellpadding="5">
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
            include'koneksi.php';
            $no= 1;
            $data= mysqli_query($koneksi,"select * from pemesanan");
            while($d=mysqli_fetch_array($data)){
              ?>
             <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_pemesanan'];?></td>
                <td><?php echo $d['id_pelanggan'];?></td>
                <td><?php echo $d['id_kamar'];?></td>
                <td><?php echo $d['cek_in'];?></td>
                <td><?php echo $d['cek_out'];?></td>
                <td> <a href="updatepemesanan.php?id=<?php echo $d['id_pemesanan']; ?>"> <font color="white">UPDATE </font></a> &nbsp; &nbsp;
                 <a href="deletepemesanan.php?id=<?php echo $d['id_pemesanan']; ?>"> <font color="white">DELETE </font></a> 
                </td>
              </tr>
            <?php
          }
          ?>
          </table>
          <a href="pemesanan.php"><input type="submit" name=" FORM PINJAM" value=" FORM "> </a>
         <a href="searchpemesanan.php"><input type="submit" name=" SEARCH PEMESANAN" value=" SEARCH "> </a> 
       <a href="logout.php"><input type="submit" name=" LOGOUT" value=" LOGOUT"> </a> 
</center>
</body>
</center>
    </body>
</html>