<?php
include "koneksi.php";
$id=$_GET['id'];
$sql = "select foto from member where id='$id'";
$hasil=$conn->query($sql);
while ($row=$hasil->fetch_assoc()) { 
     $foto=$row['foto'];
}
if ($foto!=""){
unlink("img/".$foto);
}
$sql = "delete from member where id='$id'";
if ($conn->query($sql) === TRUE) {
header("location:listmember.php");
}
$conn->close();
echo "New records failed";
?>