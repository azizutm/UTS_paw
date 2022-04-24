<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah </title>
</head>
<body>
<?php
 include 'koneksi.php';
 $id=$_GET['id'];
$sql = "SELECT * FROM tbl_aziz where id_aziz=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}

?>

<h1>Form Tambah </h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>

    <form method="post" action="update.php">
        <input type="hidden" name="id_aziz" value="<?php echo $row['id_aziz']?>">
        Nama xyz : <input type="text" name="nama_aziz" value="<?php echo $row['nama_aziz']?>"><br/>
        Email_xyz : <input type="text" name="email_aziz" value="<?php echo $row['email_aziz']?>"><br/>
        ket_xyz : <input type="text" name="alamat_aziz" value="<?php echo $row['alamat_aziz']?>"><br/>
        <button type="submit">Update</button>
    </form>
<?php }?>
</body>
</html>