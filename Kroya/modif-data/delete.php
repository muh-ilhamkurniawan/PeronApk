<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);

include "koneksi.php";

$id = $_GET["id"];
if($id != ""){
    $hapus = "DELETE FROM departure_kroya WHERE id = '$id'";
    $query = mysqli_query($koneksi, $hapus);
    if($query){?>
        <script>
            alert("Data Berhasil di Hapus");
            document.location.href = "../index.php";
        </script>
    <?php
    }
}

?>