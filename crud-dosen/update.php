<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn,"SELECT * FROM dosen WHERE nidn = '".$_GET['nidn']."'");
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
<h2>Input Data Dosen</h2>
    <a href="index.php" style="padding:0.4% 0.8%; background-color:#808080; color:#fff; border-radius:2px;text-decoration:none">Data Dosen</a><br><br>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Masukan Nama" required></td>
            </tr>
            <tr>
                <td>NIDN</td>
                <td>:</td>
                <td><input type="text" name="nidn" placeholder="Masukan nidn" required></td>
            </tr>
            <tr>
                <td>Jenjang Pendidikan</td>
                <td>:</td>
                <td><input type="text" name="jenjang_pendidikan" placeholder="Jenjang Pendidikan" required></td>
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
            $update = mysqli_query($conn, "UPDATE dosen SET nama ='".$_POST['nama']."',
             nidn ='".$_POST['nidn']."'");
        if($update){
            echo 'Berhasil edit';
        }else{
            echo 'Gagal edit';
        }
    }
    ?>
</body>
</html>