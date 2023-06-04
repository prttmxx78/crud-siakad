<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MATKUL</title>
</head>
<body>
    <h2>DATA MATAKULIAH</h2>
    <a href="form-input.php" style="padding:0.4% 0.8%; background-color:#808080; color:#fff; border-radius:2px;text-decoration:none">Tambah data</a>
    <br><br>
    <table border="1" cellspacing="0" width=50%>
        <tr style = "text-align:center; font-weight:bold; background-color:#6495ED;">
            <td>ID</td>
            <td>Nama</td>
            <td>Kode Matkul</td>
            <td>Deskripsi</td>
            <td>Opsi</td>
        </tr>
        <?php
        include 'koneksi.php';
        $id = 1;
        $select = mysqli_query($conn, " SELECT * FROM matakuliah");
        if(mysqli_num_rows($select) > 0){
        while($hasil = mysqli_fetch_array($select)){
        ?>

        <tr>
            <td><?php echo $id++ ?></td>
            <td><?php echo $hasil['nama'] ?></td>
            <td><?php echo $hasil['kode_matkul'] ?></td>
            <td><?php echo $hasil['deskripsi'] ?></td>
            <td>
                <a href="update.php?kode_matkul=<?php echo $hasil['kode_matkul'] ?>" style="text-decoration:none">Update</a> ||
                <a href="delete.php?kode_matkul=<?php echo $hasil['kode_matkul'] ?>" style="text-decoration:none">Delete</a>
            </td>
        </tr>
        <?php }}else{ ?>
            <tr>
                <td colspan="6" align="center">Data Kosong</td>
            </tr>
        <?php }?>
    </table>
    
</body>
</html>