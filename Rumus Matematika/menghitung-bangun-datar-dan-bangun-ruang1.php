<form action="menghitung-bangun-datar-dan-bangun-ruang1.php" method="POST">
    <h1> Rumus Luas dan keliling jajar Genjang</h1>
    <p>Alas</p>
    <input type="number" name="alas" placeholder="Ex.10" />
    <p>Tinggi</p>
    <input type="number" name="tinggi" placeholder="Ex.5" />
    <input type="submit" name="proses" value="Hitung Luas dann Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $luas = $alas * $tinggi;
        $keliling = 2 * ($alas + $tinggi);

        echo "alas = $alas <br>";
        echo "tinggi = $tinggi <br>";
        echo "Luas Jajar Genjang : $luas <br>";
        echo "keliling Jajar Genjang: $keliling <br>";
    }
?>
<hr>