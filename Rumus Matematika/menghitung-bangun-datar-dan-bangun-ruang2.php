<form action="menghitung-bangun-datar-dan-bangun-ruang2.php" method="POST">
    <h1> Rumus Luas dan keliling Segitiga</h1>
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
        $luas = 1/2 *($alas * $tinggi);
        $keliling = 3 * $alas;

        echo "alas = $alas <br>";
        echo "tinggi = $tinggi <br>";
        echo "Luas Segitiga : $luas <br>";
        echo "keliling Segitiga: $keliling <br>";
    }
?>
<hr>