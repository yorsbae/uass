<?php
require_once "koneksi.php";
$no_pend=$_POST["no_pend"];
$nama=$_POST["nama"];
$nilai_tkp=$_POST["nilai_tkp"];
$nilai_tiu=$_POST["nilai_tiu"];
$nilai_tkw=$_POST["nilai_tkw"];
$query="UPDATE uas SET nama='".$nama."',nilai_tkp='".$nilai_tkp."',nilai_tiu='".$nilai_tiu."',nilai_tkw='".$nilai_tkw."' WHERE no_pend='".$no_pend."'";

if($con->query($query)==TRUE) {
    header("location:input.php");
}else{
    echo "<script>alert('PESAN GAGAL DISIMPAN'):history.back();</script>";
}
?>