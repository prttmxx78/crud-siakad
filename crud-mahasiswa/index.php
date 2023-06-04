<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>DATA MAHASISWA</h2>
    <a href="form-input.php" style="padding:0.4% 0.8%; background-color:#808080; color:#fff; border-radius:2px;text-decoration:none">Tambah data</a>
    <br><br>
    <table border="1" cellspacing="0" width=50%>
        <tr style = "text-align:center; font-weight:bold; background-color:#6495ED;">
            <td>ID</td>
            <td>Nama</td>
            <td>NIM</td>
            <td>Program Studi</td>
            <td>Opsi</td>
        </tr>
        <?php
        include 'koneksi.php';
        $id_mahasiswa = 1;
        $select = mysqli_query($conn, " SELECT * FROM mahasiswa");
        if(mysqli_num_rows($select) > 0){
        while($hasil = mysqli_fetch_array($select)){
        ?>

        <tr>
            <td><?php echo $id_mahasiswa++ ?></td>
            <td><?php echo $hasil['nama'] ?></td>
            <td><?php echo $hasil['nim'] ?></td>
            <td><?php echo $hasil['program_studi'] ?></td>
            <td>
                <a href="update.php?nim=<?php echo $hasil['nim'] ?>" style="text-decoration:none">Update</a> ||
                <a href="delete.php?nim=<?php echo $hasil['nim'] ?>" style="text-decoration:none">Delete</a>
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