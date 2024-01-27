<?php
include "koneksi.php";
include "uploadFoto.php";
$id = $_POST['tid'];
$nama = $_POST['tnama'];
$harga = $_POST['tharga'];
$ket = $_POST['tket'];
$jumlah = $_POST['tjumlah'];
$foto_lama = $_POST['foto_lama'];
$qry = true;
$flagFoto = true;
if (isset($_POST['ubah_foto'])) {
    if (upload_foto($_FILES["foto"], "barang")) {
        $foto = $_FILES["foto"]["name"];
        $sql = "update barang set nama='$nama', harga='$harga', jumlah='$jumlah', ket='$ket', foto='$foto' where id='$id'";
    } else {
        $qry = false;
        echo "foto gagal diupload";
    }
} else {
    $sql = "update barang set nama='$nama', harga='$harga',jumlah='$jumlah', ket='$ket' where id='$id'";
    $flagFoto = false;
}
if ($qry == true) {
    if ($conn->query($sql) === TRUE) {
        if (is_file("foto/" . $foto_lama) && ($flagFoto == true)) // Jika gambar ada
            unlink("fotp/" . $foto_lama);
        $conn->close();
        header("location:listbarang.php");
    } else {
        $conn->close();
        echo "New records failed";
    }
}
?>