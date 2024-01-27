<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Registrasi</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Form Entry user</h1>
                <form action="insuser.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="11" class="form-label">ID</label>
                        <input type="text" class="form-control" id="iduser" name="tiduser" placeholder="IDuser" required>
                    </div>
                    <div class="mb-3">
                        <label for="12" class="form-label">user name</label>
                        <input type="text" class="form-control" id="username" name="tusername" placeholder="username">
                    </div>
                    <div class="mb-3">
                        <label for="13" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="tpassword" placeholder="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="16" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="ket" name="foto">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>