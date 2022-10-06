<form action="menghitung-bangun-datar-dan-bangun-ruang5.php" method="POST">
    <h1> Rumus Luas dan keliling Trapesium</h1>
    <p>Alas Bawah</p>
    <input type="number" name="alas-bawah" placeholder="Ex.10" />
    <p>Alas Atas</p>
    <input type="number" name="alas-atas" placeholder="Ex.5" />
    <p>Tinggi</p>
    <input type="number" name="tinggi" placeholder="Ex.5" />
    <p>Sisi Miring</p>
    <input type="number" name="sisi-miring" placeholder="Ex.5" />
    <input type="submit" name="proses" value="Hitung Luas dann Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $a1 = $_POST["alas-bawah"];
        $a2 = $_POST["alas-atas"];
        $tinggi = $_POST["tinggi"];
        $sisi = $_POST["sisi-miring"];
        $luas = $a1 + $a2 * $tinggi / 2;
        $keliling = $a1 + $a2 + $sisi + $sisi;

        echo "alas-bawah = $a1 <br>";
        echo "alas-atas = $a2 <br>";
        echo "tinggi = $tinggi <br>";
        echo "sisi-miring = $sisi <br>";
        echo "Luas Trapesium : $luas <br>";
        echo "keliling Trapesium : $keliling <br>";
    }
?>
<hr>