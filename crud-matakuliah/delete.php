<?php
include 'koneksi.php';
if(isset($_GET['kode_matkul'])){
    $delete = mysqli_query($conn, "DELETE FROM matakuliah WHERE kode_matkul = '".$_GET['kode_matkul']."' ");
    header('location:index.php');
}
?>