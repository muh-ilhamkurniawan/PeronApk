<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: error.php');
    exit;
}

if(isset($_POST['update1'])){
    $jalur1 = $_POST['jalurka1'];

    $tabel= mysqli_fetch_array(mysqli_query($conn, "select * from departure_kroya where no_ka='$jalur1' "));
    $no = $tabel['no_ka'];
    $nama = $tabel['nama_ka'];
    $tujuan = $tabel['relasi'];
    $jam = $tabel['kroya_berangkat'];

    if($nokaupdate=$no){
        $hasil ="update hasilka_kroya set no_ka='$no', nama_ka='$nama', tujuan ='$tujuan', jam_berangkat='$jam' where jalur=1";
        $query = mysqli_query($conn, $hasil);
    }else{
        ?>
        <script>
            alert('Maaf Nomor KA yang Dimasukkan Tidak Dapat Ditemukan');
        </script>
        <?php
    }
}
    
 if(isset($_POST['update2'])){
    $jalur2 = $_POST['jalurka2'];

    $tabel= mysqli_fetch_array(mysqli_query($conn, "select * from departure_kroya where no_ka='$jalur2' "));
    $no = $tabel['no_ka'];
    $nama = $tabel['nama_ka'];
    $tujuan = $tabel['relasi'];
    $jam = $tabel['kroya_berangkat'];

    if($nokaupdate=$no){
        $hasil ="update hasilka_kroya set no_ka='$no', nama_ka='$nama', tujuan ='$tujuan', jam_berangkat='$jam' where jalur=2";
        $query = mysqli_query($conn, $hasil);
    }else{
        ?>
        <script>
            alert('Maaf Nomor KA yang Dimasukkan Tidak Dapat Ditemukan');
        </script>
        <?php
    }
}

 if(isset($_POST['update3'])){
    $jalur3 = $_POST['jalurka3'];

    $tabel= mysqli_fetch_array(mysqli_query($conn, "select * from departure_kroya where no_ka='$jalur3' "));
    $no = $tabel['no_ka'];
    $nama = $tabel['nama_ka'];
    $tujuan = $tabel['relasi'];
    $jam = $tabel['kroya_berangkat'];

    if($nokaupdate=$no){
        $hasil ="update hasilka_kroya set no_ka='$no', nama_ka='$nama', tujuan ='$tujuan', jam_berangkat='$jam' where jalur=3";
        $query = mysqli_query($conn, $hasil);
    }else{
        ?>
        <script>
            alert('Maaf Nomor KA yang Dimasukkan Tidak Dapat Ditemukan');
        </script>
        <?php
    }
}
 if(isset($_POST['update4'])){
    $jalur4 = $_POST['jalurka4'];

    $tabel= mysqli_fetch_array(mysqli_query($conn, "select * from departure_kroya where no_ka='$jalur4' "));
    $no = $tabel['no_ka'];
    $nama = $tabel['nama_ka'];
    $tujuan = $tabel['relasi'];
    $jam = $tabel['kroya_berangkat'];

    if($nokaupdate=$no){
        $hasil ="update hasilka_kroya set no_ka='$no', nama_ka='$nama', tujuan ='$tujuan', jam_berangkat='$jam' where jalur=4";
        $query = mysqli_query($conn, $hasil);
    }else{
        ?>
        <script>
            alert('Maaf Nomor KA yang Dimasukkan Tidak Dapat Ditemukan');
        </script>
        <?php
    }
}

 if(isset($_POST['update5'])){
     $jalur5 = $_POST['jalurka5'];

    $tabel= mysqli_fetch_array(mysqli_query($conn, "select * from departure_kroya where no_ka='$jalur5' "));
    $no = $tabel['no_ka'];
    $nama = $tabel['nama_ka'];
    $tujuan = $tabel['relasi'];
    $jam = $tabel['kroya_berangkat'];

    if($nokaupdate=$no){
        $hasil ="update hasilka_kroya set no_ka='$no', nama_ka='$nama', tujuan ='$tujuan', jam_berangkat='$jam' where jalur=5";
        $query = mysqli_query($conn, $hasil);
    }else{
        ?>
        <script>
            alert('Maaf Nomor KA yang Dimasukkan Tidak Dapat Ditemukan');
        </script>
        <?php
    }
}
if(isset($_POST['update6'])){
    $jalur6 = $_POST['jalurka6'];

   $tabel= mysqli_fetch_array(mysqli_query($conn, "select * from departure_kroya where no_ka='$jalur6' "));
   $no = $tabel['no_ka'];
   $nama = $tabel['nama_ka'];
   $tujuan = $tabel['relasi'];
   $jam = $tabel['kroya_berangkat'];

   if($nokaupdate=$no){
       $hasil ="update hasilka_kroya set no_ka='$no', nama_ka='$nama', tujuan ='$tujuan', jam_berangkat='$jam' where jalur=6";
       $query = mysqli_query($conn, $hasil);
   }else{
       ?>
       <script>
           alert('Maaf Nomor KA yang Dimasukkan Tidak Dapat Ditemukan');
       </script>
       <?php
   }
}

$row1 = mysqli_fetch_array(mysqli_query($conn, "select * from hasilka_kroya where jalur=1"));
$row2 = mysqli_fetch_array(mysqli_query($conn, "select * from hasilka_kroya where jalur=2"));
$row3 = mysqli_fetch_array(mysqli_query($conn, "select * from hasilka_kroya where jalur=3"));
$row4 = mysqli_fetch_array(mysqli_query($conn, "select * from hasilka_kroya where jalur=4"));
$row5 = mysqli_fetch_array(mysqli_query($conn, "select * from hasilka_kroya where jalur=5"));
$row6 = mysqli_fetch_array(mysqli_query($conn, "select * from hasilka_kroya where jalur=6"));

?>