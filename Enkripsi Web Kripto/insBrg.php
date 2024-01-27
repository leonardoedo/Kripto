<?php
    include "koneksi.php";
    include "uploadFoto.php";

    $id=$_POST['tid'];
    $nama=$_POST['tnama'];
    $harga=$_POST['tharga'];
    $ket=$_POST['tket'];
    $jumlah=$_POST['tjumlah'];

    if(upload_foto($_FILES["foto"],"barang")){
        $foto=$_FILES["foto"]["name"];
        $sql = "insert into barang (id,nama,harga,jumlah,ket,foto) values('$id','$nama','$harga','$jumlah','$ket','$foto')";
        if($conn->query($sql)===TRUE){
            $conn->close();
            header("location:listbarang.php");
        }
        else{
            $conn->close();
            echo "New records failed";
        } 
    }
    else 
    echo "Sorry, there was an error uploading your file.";
?>