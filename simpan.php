<?php
require_once "koneksi.php";
if(isset($_POST['nama'])){
    $no_pend=$_POST["no_pend"];
    $nama=$_POST["nama"];
    $nilai_tkp=$_POST["tkp"];
    $nilai_tiu=$_POST["tiu"];
    $nilai_tkw=$_POST["tkw"];
    $insert = $con->query("INSERT INTO uas VALUES(
        '".$no_pend."',
        '".$nama."',
        '".$nilai_tkp."',
        '".$nilai_tiu."',
        '".$nilai_tkw."'
    )");
    if($insert){
        echo "Berhasil";
    }else{
        echo "Gagal";
    }
}else{
    echo "<script>location='index.php'</script>";
}


?>