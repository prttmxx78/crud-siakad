<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nim = '".$_GET['nim']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA</title>
</head>
<body>
    <h2>Update Data Mahasiswa</h2>
    <a href="index.php" style="padding:0.4% 0.8%; background-color:#808080; color:#fff; border-radius:2px;text-decoration:none">Data Mahasiswa</a><br><br>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $result['nama'] ?>" required></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $result['nim'] ?>" required></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td><input type="text" name="program_studi" value="<?php echo $result['program_studi'] ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="update" value="Save"></td>
            </tr>
        </table>
    </form>
    <?php
    include 'koneksi.php';
        if(isset($_POST['update'])){
            $update = mysqli_query($conn, "UPDATE mahasiswa SET nama ='".$_POST['nama']."',
             program_studi ='".$_POST['program_studi']."'");
        if($update){
            echo 'Berhasil edit';
        }else{
            echo 'Gagal edit';
        }
    }
    ?>
</body>
</html>