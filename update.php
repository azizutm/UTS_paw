<?php
include "koneksi.php";
$id = $_POST['id_aziz'];
$nama = $_POST['nama_aziz'];
$email = $_POST['email_aziz'];
$alamat = $_POST['alamat_aziz'];

$sql = "UPDATE tbl_aziz set nama_aziz = '$nama', email_aziz='$email', alamat_aziz='$alamat' where id_aziz=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi update data gagal";
}else{
    echo "Eksekusi update data  berhasil<br>";
    echo "<a href='data_aziz.php'>Show data</a>";
}

?>