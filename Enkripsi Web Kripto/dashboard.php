<?php
session_start();
if(isset($_SESSION["username"])){
    $user=$_SESSION["username"];
}
else
    header("location:index.php");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </script>

    <title>Dashboard</title>
</head>
<body>
    <nav class="nav nav-pills flex-sm-row bg-primary">
        <a class="flex-sm-fill text-sm-start nav-link text-warning disabled" aria-curent="page" href="#" >Dashboard </a>
        <a class="flex-sm-fill text-sm-start nav-link text-warning disabled" href="#" >User : <?= $user;?> </a>
        <a class="flex-sm-fill text-sm-end nav-link text-light" href="index.php">Log Out </a>
    </nav>
    <div class="container p-5">
        <div class="row row-cols-2">
            <div class="col">
                <div class="card text-center">
                <div class="card-body">
                    <a href="listUser.php">
                        <img src="foto/user1.png" class="rounded mx-auto d-block" alt="" style="150px;width:145px;">
                    </a>
                </div>
                <div class="card-footer text-muted">
                    user
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listBarang.php">
                            <img src="foto/barang.jpg" class=" rounded mx-auto d-block" alt="" style="150px;width:180px;">
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        Barang
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                <div class="card-body">
                    <a href="listOrder.php">
                        <img src="foto/order.png" class="rounded mx-auto d-block" alt="" style="150px;width:185px;">
                    </a>
                </div>
                <div class="card-footer text-muted">
                    Order
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listmember.php">
                            <img src="foto/member.png" class="rounded mx-auto d-block"  alt="" style="150px;width:260px;">
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        Member
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" 
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>

</body>
</html>