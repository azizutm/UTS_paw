<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM tbl_aziz WHERE id_aziz=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data gagal";
}else{
    echo "Data aziz berhasil di delete<br>";
    echo "<a href='data_aziz.php'> Show data</a>";
}

?>