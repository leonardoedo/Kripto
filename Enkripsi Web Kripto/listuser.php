<?php
session_start();
if(isset($_SESSION["username"]))
    $user=$_SESSION["username"];
else
    header("location:index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>List User</title>
</head>
<body>
    <nav class="nav nav-pills  flex-sm-row bg-primary">
        <a class="flex-sm-fill text-sm-start nav-link text-light" href="dashboard.php">Dashboard</a> 
        <span class="nav-link text-warning disabled" aria-current="page" >List User</span>
        <a class="flex-sm-fill text-sm-end nav-link text-light disabled" href="#">User : <?=$user ; ?></a>
        <a class="flex-sm-fill text-sm-end nav-link text-light" href="index.php">Logout</a>
    </nav>

    <div class="container">
        <?php
            include "koneksi.php";
            $sql="SELECT * from user ORDER BY iduser";
            $hasil=$conn->query($sql);
            echo "<a href='adduser.php' class='btn btn-success text-white'> Tambah Data </a>";
          


            if($hasil->num_rows>0){
                echo "<table class='table table-stripped'>
                <thead>
                <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Username</th>
                <th scope='col'>password</th>
                <th scope='col'>Foto</th>
                <th scope='col'>Edit</th>
                <th scope='col'>Hapus</th>
                </tr>
                </thead>
                <tbody>";
                while ($row=$hasil->fetch_assoc()){ 
                    $teks="<tr>";
                    $teks.="<td>".$row["iduser"]."</td>";
                    $teks.="<td>".$row["username"]."</td>";
                    $teks.="<td> Udinus </td>";
                    $teks.="<td><img src='foto/".$row["foto"]."' style='width:100px;height:100px;'></img></td>";
                    $teks.="<td><a href='edituser.php?id=".$row["iduser"]."'>Edit</a></td>";
                    $teks.="<td><a href='deluser.php?id=".$row["iduser"]."'>Hapus</a></td>";
                    $teks.="</tr>";
                    echo $teks; 
                }
                echo "</tbody>
                      </table>";
            } 
            else{
                echo "jml rec:0 ";
            }
            $conn->close();
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>