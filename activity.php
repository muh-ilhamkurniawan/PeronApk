<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit;
}

include "koneksi.php";
ini_set("display_errors",0);
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SINJAKA</title>
    <link rel="stylesheet" href="./aset/styles.css">
</head>
<body>
    <div class="header">
        <div class="header-left">
            <img style="width: 230px; height: 50px;" src="./aset/images/Name.png">
        </div>
        <div class="header-right">
            <a href="https://www.kai.id/s">
                <img style="width: 108px; height: 46px;" src="./aset/images/kai_logo.png">
            </a>
        </div>
    </div>
    <div class="content3">
            <div id="boxlistakun">
                <a href="./home.php" class="kembali">Kembali</a>
                <div class="listakun"> 
                    Log Aktivitas Akun
                </div>
                <div id="boxdalam">
                    <table class="table-logger">
                        <tr>
                            <td >No</td>
                            <td >Nama User</td>
                            <td >Peran</td>
                            <td >Waktu Login</td>
                            <td >Waktu Logout</td>
                            <td>Aksi</td>
                        </tr>
                        <?php
                            $no = 1;
                            $sql = "select * from activity_log order by no desc";
                            $query = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($query)) :
                        ?>
                            <tr>
                                <td width="5%"><?php echo $no++ ?></td>
                                <td width="20%"><?php echo $row[nama_user] ?></td>
                                <td width="25%"><?php echo $row[peran] ?></td>
                                <td width="25%"><?php echo $row[waktu_login] ?></td>
                                <td width="25%"><?php echo $row[waktu_logout] ?></td>
                                <td>
                                    <a href="delete2.php?id=<?php echo $row["id"];?>" class="buttonhapus" onclick="return confirm('Yakin Hapus?')" href="#">Hapus</a>
                                </td>
                            </tr>
                        <?php
                            endwhile;
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>