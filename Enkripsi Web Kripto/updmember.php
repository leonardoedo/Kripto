<?php
include "koneksi.php";
include "uploadFoto.php";
$id=$_POST['tid'];
$nama=$_POST['tnama'];
$email=$_POST['temail'];
$telp=$_POST['ttelp'];
$alamat=$_POST['talamat'];
$kota=$_POST['tkota'];
$provinsi=$_POST['tprovinsi'];
$gender=$_POST['tgender'];
$username=$_POST['tusername'];
$password=$_POST['tpassword'];
$foto_lama = $_POST['foto_lama'];
$qry = true;
$flagFoto = true;
if (isset($_POST['ubah_foto'])) {
    if (upload_foto($_FILES["foto"], "member")) {
        $foto = $_FILES["foto"]["name"];
        $sql = "update member set nama_member='$nama', email='$email', telp='$telp', alamat='$alamat',kota='$kota',provinsi='$provinsi',gender='$gender',username='$username',password='$password',   foto='$foto' where id='$id'";
    } else {
        $qry = false;
        echo "foto gagal diupload";
    }
} else {
    $sql = "update member set nama_member='$nama',email='$email', telp='$telp', alamat='$alamat',kota='$kota',provinsi='$provinsi',gender='$gender',username='$username',password='$password'  where id='$id'";
    $flagFoto = false;
}
if ($qry == true) {
    if ($conn->query($sql) === TRUE) {
        if (is_file("foto/" . $foto_lama) && ($flagFoto == true)) // Jika gambar ada
            unlink("fotp/" . $foto_lama);
        $conn->close();
        header("location:listmember.php");
    } else {
        $conn->close();
        echo "New records failed";
    }
}
?>