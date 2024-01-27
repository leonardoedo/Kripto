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
    



    if(upload_foto($_FILES["foto"],"member")){
        $foto=$_FILES["foto"]["name"];
        $sql = "insert into member (id,nama_member,email,telp,alamat,kota,provinsi,gender,username,password,foto) values('$id','$nama','$email','$telp','$alamat','$kota','$provinsi','$gender','$username','$password','$foto')";
        if($conn->query($sql)===TRUE){
            $conn->close();
            header("location:listmember.php");
        }
        else{
            $conn->close();
            echo "New records failed";
        } 
    }
    else 
    echo "Sorry, there was an error uploading your file.";
?>