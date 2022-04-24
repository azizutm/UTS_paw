<?php
include "koneksi.php";

$nama = $_POST['nama_aziz'];
$email = $_POST['email_aziz'];
$alamat = $_POST['alamat_aziz'];

$sql = "INSERT INTO tbl_aziz VALUES(null,'$nama','$email','$alamat')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi tambah data  gagal";
}else{
    echo "Eksekusi tambah data  berhasil<br>";
    echo "<a href='data_aziz.php'>Show data</a>";
}

?>