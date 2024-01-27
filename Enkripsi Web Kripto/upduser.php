<?php
include "koneksi.php";
include "uploadFoto.php";
$iduser = $_POST['tiduser'];
$username = $_POST['tusername'];
$password = $_POST['tpassword'];
$foto_lama = $_POST['foto_lama'];
$qry = true;
$flagFoto = true;
if (isset($_POST['ubah_foto'])) {
    if (upload_foto($_FILES["foto"], "user")) {
        $foto = $_FILES["foto"]["name"];
        $sql = "update user set username='$username', password='$password',  foto='$foto' where iduser='$iduser'";
    } else {
        $qry = false;
        echo "foto gagal diupload";
    }
} else {
    $sql = "update user set username='$username', password='$password' where iduser='$iduser'";
    $flagFoto = false;
}
if ($qry == true) {
    if ($conn->query($sql) === TRUE) {
        if (is_file("foto/" . $foto_lama) && ($flagFoto == true)) // Jika gambar ada
            unlink("fotp/" . $foto_lama);
        $conn->close();
        header("location:listuser.php");
    } else {
        $conn->close();
        echo "New records failed";
    }
}
?>