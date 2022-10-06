<form action="menghitung-bangun-datar-dan-bangun-ruang.php" method="POST">
    <h1> Rumus Luas dan keliling Persegi Panjang</h1>
    <p>Panjang</p>
    <input type="number" name="panjang" placeholder="Ex.10" />
    <p>Lebar</p>
    <input type="number" name="lebar" placeholder="Ex.5" />
    <input type="submit" name="proses" value="Hitung Luas dann Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        echo "panjang = $panjang <br>";
        echo "lebar = $lebar <br>";
        echo "Luas Persegi panjang : $luas <br>";
        echo "keliling Persegi panjang: $keliling <br>";
    }
?>
<hr>
