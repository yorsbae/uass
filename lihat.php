<?php
require_once 'koneksi.php';
$querytampil = "SELECT * FROM uas";
$result= $con->query($querytampil);
?>
<table border='1' class="lihat">
    <tr>
        <td>No Pendaftaran</td><td>Nama</td><td>Nilai TKP</td><td>Nilai TIU</td><td>Nilai TKW</td>
    </tr>
<?php
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()) {
?>
<tr>
    <td><?=$row['no_pend'];?></td>
    <td><?=$row['nama'];?></td>
    <td><?=$row['nilai_tkp'];?></td>
    <td><?=$row['nilai_tiu'];?></td>
    <td><?=$row['nilai_tkw'];?></td>
    <td><button onclick="konfirmhapus('<?=$row['no_pend'];?>');">hapus</button>
    <button onclick="window.location='edit.php?no_pend=<?=$row['no_pend'];?>'">edit</button>
</td>
</tr>
<?php
    }
}
?>
</table>
<script>
    function konfirmhapus(no_pend){
        if(confirm("apakah akan menghapus"+no_pend)){
            window.location="hapus.php?no_pend="+no_pend;
        }
    }
</script>