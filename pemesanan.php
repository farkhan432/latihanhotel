<html>
    <head>
        <title>AHMAD FARHAN</title>
    </head>
    <body>
    <center>
                
                <h5 align="center" > FORM PEMESANAN </h5>
                <form method="post" action="insertpemesanan.php">
                <table width="450" border="10" cellspacing="5" cellpadding="5" align="center">
                <tr>
                    <td>ID PEMESANAN</td>
                    <td>:</td>
                    <td><input type="text" name="id_pemesanan"></td>
                </tr>
                <tr>
                    <td>ID PELANGGAN</td>
                    <td>:</td>
                    <td><select name="id_pelanggan" id="id_pelanggan">
                    <option value=" ">ID PELANGGAN</option>
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
                    <td>ID KAMAR</td>
                    <td>:</td>
                    <td><select name="id_kamar" id="id_kamar">
                    <option value=" ">ID KAMAR</option>
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
                    <td>CEK IN</td>
                    <td>:</td>
                    <td><input type="date" name="cek_in"></td>
                </tr>  
                <tr>
                    <td>CEK OUT</td>
                    <td>:</td>
                    <td><input type="date" name="cek_out"></td>
                </tr>  
                
                
                            

                <tr>
                <td colspan="3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="ok" value="OK">
                <input type="reset" name="cancel" value="CANCEL">
                </td>
                </tr>
                </table>
                </form>
                </center>  


    </body>
</html>