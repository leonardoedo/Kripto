<?php
include "koneksi.php";
$iduser=$_GET['id'];
$sql = "select foto from user where iduser='$iduser'";
$hasil=$conn->query($sql);
while ($row=$hasil->fetch_assoc()) { 
     $foto=$row['foto'];
}
if ($foto!=""){
unlink("img/".$foto);
}
$sql = "delete from user where iduser='$iduser'";
if ($conn->query($sql) === TRUE) {
header("location:listuser.php");
}
$conn->close();
echo "New records failed";
?>