<form action="menghitung-bangun-datar-dan-bangun-ruang8.php" method="POST">
    <h1> Rumus Luas dan Rumus Volume Balok</h1>
    <p>Panjang</p>
    <input type="number" name="panjang" placeholder="Ex.10" />
    <p>Lebar</p>
    <input type="number" name="lebar" placeholder="Ex.5" />
    <p>Tinggi</p>
    <input type="number" name="tinggi" placeholder="Ex.5" />
    <input type="submit" name="proses" value="Hitung Luas permukaan dan Volume" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $tinggi = $_POST["tinggi"];
        $luas = (2 * $panjang * $lebar) + (2 * $panjang * $tinggi) + (2 * $lebar * $tinggi);
        $volume = $panjang * $lebar *$tinggi;

        echo "panjang = $panjang <br>";
        echo "lebar = $lebar <br>";
        echo "tinggi = $tinggi <br>";
        echo "Luas Kubus : $luas <br>";
        echo "Volume Kubus: $volume <br>";
    }
?>
<hr>