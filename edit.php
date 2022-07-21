<?php
require_once 'koneksi.php';
$no_pend_edit=$_GET['no_pend'];
$querytampil= "SELECT * FROM uas where no_pend='".$no_pend_edit."'";
$result=$con->query($querytampil);
?>
<?php
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()) {
        ?>
        <form action="editsimpan.php" method="POST">
            No Pendaftaran : <input type="text" name="no_pend" required value="<?=$row['no_pend'];?>" readonly> <br>
            Nama           : <input type="text" name="nama" required value="<?=$row['nama'];?>" > <br>
            Nilai TKP      : <input type="number" min="0"  name="nilai_tkp" required value="<?=$row['nilai_tkp'];?>" > <br>
            Nilai TIU      : <input type="number" min="0"  name="nilai_tiu" required value="<?=$row['nilai_tiu'];?>" > <br>
            Nilai TKW      : <input type="number" min="0"  name="nilai_tkw" required value="<?=$row['nilai_tkw'];?>" > <br>
            <input type="submit" value="simpan edit"><input type="reset">
        </form>
        <button onclick="window.location='index.php'">tambah data</button>
        <?php
    }
}
?>
<?php
require 'lihat.php';
?>