<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Dosen</title>
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
    if(isset($_POST['save'])){
    $insert = mysqli_query($conn, "INSERT INTO dosen VALUES 
                        ('".$_POST['nama']."',
                        '".$_POST['nidn']."',
                        '".$_POST['jenjang_pendidikan']."')");
         if($insert){
            echo 'Berhasil disimpan';
         }else{
             echo 'Gagal disimpan'.mysqli_error($conn);
        }
    }
    ?>
</body>
</html>