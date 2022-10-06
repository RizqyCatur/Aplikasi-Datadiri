<form action="menghitung-bangun-datar-dan-bangun-ruang9.php" method="POST">
    <h1> Rumus luas perumukaan volume kerucut</h1>
    <p>Jari-Jari</p>
    <input type="text" name="jari-jari" placeholder="Ex.10" />
    <p>Tinggi</p>
    <input type="number" name="tinggi" placeholder="Ex.5" />
    <p>selimut</p>
    <input type="number" name="selimut" placeholder="Ex.5" />
    <input type="Submit" name="proses" value="Hitung Luas permukaan dan volume" />
</form>

<?php 
    if (isset ($_POST["proses"])){
        echo "<hr>";
        $jari_jari = $_POST["jari-jari"];
        $tinggi = $_POST["tinggi"];
        $selimut = $_POST["selimut"];
        $luas = 22/7 * $jari_jari * ($jari_jari + $selimut);
        $volume = 1/3 * 22/7 * $jari_jari * $jari_jari * $tinggi;

        echo "jari-jari = $jari_jari <br>";
        echo "tinggi = $tinggi <br>";
        echo "luas permukaan = $luas <br>";
        echo "volume kerucut = $volume <br>";
    
    }
?>
<hr>