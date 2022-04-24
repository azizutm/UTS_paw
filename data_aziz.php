<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar </title>
</head>
<body>
<h1>data </h1>
<a href="form_aziz.php">Tambah data</a>
<table width="90%" border="1" cellspacing="1">
    <tr>
        <td>id</td>
        <td>nama </td>
        <td>email </td>
        <td>alamat </td>
        <td>Action</td>
    </tr>
        <?php
        include 'koneksi.php';
        $sql="SELECT * FROM tbl_aziz";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td><?=$row['id_aziz'];?></td>
            <td><?=$row['nama_aziz'];?></td>
            <td><?=$row['email_aziz'];?></td>
            <td><?=$row['alamat_aziz'];?></td>
            <td><a href="form_edit.php?id=<?=$row['id_aziz']?>"> Edit</a> | <a href="delete.php?id=<?=$row['id_aziz']?>"> Delete</td>
        </tr>
        <?php }
        ?> 
</table> 
</body>
</html>
