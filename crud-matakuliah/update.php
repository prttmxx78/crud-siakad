<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn,"SELECT * FROM matakuliah WHERE kode_matkul = '".$_GET['kode_matkul']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA MATKUL</title>
</head>
<body>
    <h2>Update Data Matakuliah</h2>
    <a href="index.php" style="padding:0.4% 0.8%; background-color:#808080; color:#fff; border-radius:2px;text-decoration:none">Data Matakuliah</a><br><br>
    <form action="" method="POST">
        <table>
        <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Masukan Nama" required></td>
            </tr>
            <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kode_matkul" placeholder="Masukan kode matkul" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><input type="text" name="deskripsi" placeholder="Masukan deskripsi" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="save" value="Save"></td>
            </tr>
        </table>
    </form>
    <?php
    include 'koneksi.php';
        if(isset($_POST['update'])){
            $update = mysqli_query($conn, "UPDATE matakuliah SET nama ='".$_POST['nama']."',
             kode_matkul ='".$_POST['kode_matkul']."'");
        if($update){
            echo 'Berhasil edit';
        }else{
            echo 'Gagal edit';
        }
    }
    ?>
</body>
</html>