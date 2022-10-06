<form action="menghitung-bangun-datar-dan-bangun-ruang7.php" method="POST">
    <h1> Rumus Luas dan Rumus Volume Kubus</h1>
    <p>Rusuk</p>
    <input type="number" name="rusuk" placeholder="Ex.10" />
    <p>Sisi</p>
    <input type="number" name="sisi" placeholder="Ex.5" />
    <input type="submit" name="proses" value="Hitung Luas permukaan dan Volume" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $rusuk = $_POST["rusuk"];
        $sisi = $_POST["sisi"];
        $luas = 6 * $sisi * $rusuk *$rusuk;
        $volume = $rusuk * $rusuk * $rusuk;

        echo "rusuk = $rusuk <br>";
        echo "sisi = $sisi <br>";
        echo "Luas Kubus : $luas <br>";
        echo "Volume Kubus: $volume <br>";
    }
?>
<hr>