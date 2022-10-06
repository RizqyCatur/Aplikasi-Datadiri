<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. indra El" /> <br>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 1" /> <br>
    <input type="number" name="NIS" placeholder="Ex. 122002100" /> <br>
    <input type="submit" name="simpan" value="Simpan Data" />
</form>

<?php
    if( isset($_POST["simpan"]) ){
        echo "<hr>";
        
        $namalengkap = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $nis = $_POST["NIS"];

        echo "nama lengkap : " . $namalengkap . "<br>";
        echo "kelas : " . $kelas . "<br>";
        echo "nis : " . $nis;
    }
?>