<form action="menghitung-bangun-datar-dan-bangun-ruang6.php" method="POST">
    <h1> Rumus Luas dan keliling Lingkaran</h1>
    <p>Jari-Jari</p>
    <input type="number" name="jari-jari" placeholder="Ex.10" />
    <p>Phie</p>
    <input type="text" name="phie" placeholder="Ex.5" />
    <input type="submit" name="proses" value="Hitung Luas dann Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $jari = $_POST["jari-jari"];
        $phie = $_POST["phie"];
        $luas = 22/7 *($jari * $jari);
        $keliling = 2 * 22/7 * $jari;

        echo "jari-jari = $jari <br>";
        echo "phie = $phie <br>";
        echo "Luas Lingkaran : $luas <br>";
        echo "keliling Lingkaran: $keliling <br>";
    }
?>
<hr>