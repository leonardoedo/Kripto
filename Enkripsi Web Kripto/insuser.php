<?php
    include "koneksi.php";
    include "uploadFoto.php";

    $ok = $_POST['tpassword'];
    $iduser=$_POST['tiduser'];
    $username=$_POST['tusername'];
    $password=$_POST['tpassword'];
    $password_enkrip = $_POST['tpassword'];
    
    

    $password_1 = escapeshellarg($password_enkrip);
    $command = "python ./spiral.py $password_1";
    $enkrip_password = shell_exec($command);



    if(upload_foto($_FILES["foto"],"user")){
        $foto=$_FILES["foto"]["name"];
        $sql = "insert into user (iduser,username,password,foto) values('$iduser','$username','$enkrip_password','$foto')";
        if($conn->query($sql)===TRUE){
            $conn->close();
            header("location:listuser.php");
        }
        else{
            $conn->close();
            echo "New records failed";
        } 
    }
    else 
    echo "Sorry, there was an error uploading your file.";
?>