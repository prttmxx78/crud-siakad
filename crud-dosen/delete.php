<?php
include 'koneksi.php';
if(isset($_GET['nidn'])){
    $delete = mysqli_query($conn, "DELETE FROM dosen WHERE nidn = '".$_GET['nidn']."' ");
    header('location:index.php');
}
?>