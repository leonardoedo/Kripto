<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "select * from barang where id='$id'";
$hasil = $conn->query($sql);
while ($row = $hasil->fetch_assoc()) {
    $nama = $row['nama'];
    $harga = $row['harga'];
    $jumlah = $row['jumlah'];
    $ket = $row['ket'];
    $foto = $row['foto'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Form Edit Barang</h1>
                <form action="updBrg.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="11" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="tid" value="<?= $id; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="12" class="form-label">Nama barang</label>
                        <input type="text" class="form-control" id="nama" name="tnama" value="<?= $nama; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="13" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="tharga" value="<?= $harga; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="14" class="form-label">Jml Stok</label>
                        <input type="text" class="form-control" id="jumlah" name="tjumlah" value="<?= $jumlah; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">keterangan</label> <input type="text" class="form-control"
                            id="ket" name="tket" value="<?= $ket; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="16" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        <input type='hidden' name='foto_lama' value="<?= $foto; ?>">
                        <img src="foto/<?php echo $foto; ?>" width="150px" height="120px" />
                        <input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin mengubah foto<br>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEI1VSCgzq+c9gqGAJn5c/t99JyeKa9xxaŸpSvHU5awsuZVVFIhvj" cross
        origin="anonymous"></script>
</body>

</html>
</body>

</html>