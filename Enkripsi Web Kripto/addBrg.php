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
                <h1>Form Entry Barang</h1>
                <form action="insBrg.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="11" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="tid" placeholder="ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="12" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama" name="tnama" placeholder="Nama barang">
                    </div>
                    <div class="mb-3">
                        <label for="13" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="tharga" placeholder="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="14" class="form-label">Jumlah Stok</label>
                        <input type="text" class="form-control" id="jumlah" name="tjumlah" placeholder="stok" required>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="ket" name="tket" placeholder="Keterangan">
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