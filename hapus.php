<?php
$no_pend_hapus=$_GET['no_pend'];
require_once "koneksi.php";
$querydelete = "delete from uas where no_pend='".$no_pend_hapus."'";
if($con->query($querydelete)==TRUE){
    header("location:index.php");
}
?>