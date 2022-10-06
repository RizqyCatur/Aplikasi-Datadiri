<form action="menghitung-bangun-datar-dan-bangun-ruang4.php" method="POST">
    <h1> Rumus Luas dan keliling Layang-Layang</h1>
    <p>Diameter 1</p>
    <input type="number" name="diameter-1" placeholder="Ex.10" />
    <p>Diameter 2</p>
    <input type="number" name="diameter-2" placeholder="Ex.5" />
    <p>Sisi</p>
    <input type="number" name="sisi" placeholder="Ex.5" />
    <input type="submit" name="proses" value="Hitung Luas dann Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $d1 = $_POST["diameter-1"];
        $d2 = $_POST["diameter-2"];
        $sisi = $_POST["sisi"];
        $luas = 1/2 *($d1 * $d2);
        $keliling = 4 * $sisi;

        echo "diameter-1 = $d1 <br>";
        echo "diameter-2 = $d2 <br>";
        echo "sisi = $sisi <br>";
        echo "Luas Layang-Layang : $luas <br>";
        echo "keliling Layang-Layang: $keliling <br>";
    }
?>
<hr>