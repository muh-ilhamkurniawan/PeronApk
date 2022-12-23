<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit;
}

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);

include "koneksi.php";
if(isset($_POST['kembali'])){
  header("location:../index.php");   
}
if(isset($_POST['tambah'])){

  $no = htmlspecialchars($_POST["nomorr"]);
  $no_ka = htmlspecialchars($_POST["nomorka"]);
  $nama_ka = htmlspecialchars($_POST["nama_ka"]);
  $relasi = htmlspecialchars($_POST["relasi"]);
  $jadwal_berangkat = htmlspecialchars($_POST["jadwal_brgkt"]);
  $jadwal_datang = htmlspecialchars($_POST["jadwal_dtg"]);
  $jumlah = htmlspecialchars($_POST["jumlah"]);
  $kroya_datang = htmlspecialchars($_POST["pwtdtg"]);
  $kroya_berangkat = htmlspecialchars($_POST["pwtbrk"]);
  $stamformasi = htmlspecialchars($_POST["stamformasi"]);
  $keterangan = htmlspecialchars($_POST["keterangan"]);

$insert = "INSERT into departure_kroya 
VALUES('','$no','$no_ka','$nama_ka','$relasi',
 '$jadwal_berangkat', '$jadwal_datang', '$jumlah',
 '$kroya_datang', '$kroya_berangkat',
 '$stamformasi','$keterangan')";

    $query = mysqli_query($koneksi, $insert);
    if($query){
        ?>
        <script>
            alert("Data Berhasil di tambah");
            document.location = "../index.php";
        </script>
    <?php
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Jadwal</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA KEBERANGKATAN
            </div>
            <div class="card-body">
              <form method="POST">
                
              <!-- <div class="form-group">
                  <label>No</label>
                  <input type="number" name="nomorr" class="form-control">
                </div> -->

                <div class="form-group">
                  <label>No.Kereta</label>
                  <input type="text" name="nomorka" class="form-control" style="text-transform: uppercase;">
                </div>

                <div class="form-group">
                  <label>Nama Kereta</label>
                  <input type="text" name="nama_ka" class="form-control" style="text-transform: uppercase;">
                </div>

                <div class="form-group">
                  <label>Tujuan</label>
                  <input type="text" name="relasi" class="form-control" style="text-transform: uppercase;">
                </div>

                <div class="form-group">
                  <label>Jadwal Berangkat</label>
                  <input type="text" name="jadwal_brgkt" class="form-control" style="text-transform: uppercase;">
                </div>

                <div class="form-group">
                  <label>Jadwal Datang</label>
                  <input type="text" name="jadwal_dtg" class="form-control" style="text-transform: uppercase;">
                </div>

                <div class="form-group">
                  <label>Jalur</label>
                  <input type="number" name="jumlah" class="form-control" style="text-transform: uppercase;">
                </div>

                <div class="form-group">
                  <label>Kroya Datang</label>
                  <input type="text" name="pwtdtg" class="form-control" style="text-transform: uppercase;">
                </div>

                <div class="form-group">
                  <label>Kroya Berangkat</label>
                  <input type="text" name="pwtbrk" class="form-control" style="text-transform: uppercase;">
                </div>

                <div class="form-group">
                  <label>Stamformasi</label>
                  <input type="text" name="stamformasi" class="form-control" style="text-transform: uppercase;">
                </div>

                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" style="text-transform: uppercase;">
                </div>

                
                <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                <button class="btn btn-primary" name="kembali">Kembali</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>