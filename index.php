<html>
    <head>
        <title>Ujian Akhir Pemogragaman Web 1</title>
    </head>
    <body>
        <div>
            UJIAN AKHIR PEMROGRAMAN WEB 1
        </div>
        <div>
            Nama : Yordan Abdillah
        </div>
        <div>
            NIM : 21.240.0082
        </div>
        <br>
        
    <form>
        No Pendaftaran :   <input type="text" name="no_pend" required><br>
        Nama           :   <input type="text" name="nama" required><br>
        Nilai TKP      :   <input type="number" value="0" min="0" name="nilai_tkp" required><br>
        Nilai TIU      :   <input type="number" value="0" min="0" name="nilai_tiu" required><br>
        Nilai TKW      :   <input type="number" value="0" min="0" name="nilai_tkw" required><br>
        <button name="simpan">
            Simpan
        </button><input type="reset">
    </form>
    <script src="jquery.js"></script>

    <?php
    require 'lihat.php';
    ?>
    <script src="script.js"></script>
    </body>
</html>
