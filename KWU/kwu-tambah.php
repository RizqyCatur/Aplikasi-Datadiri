<h1>Tambah Data</h1>
<form action="kwu-tambah.php" method="POST">
    <label for="kodebarang">Kode Barang  : </label>
    <input type="number" name="kodebarang" placeholder="Ex. 736183" /> <br>

    <label for="tanggal">Tanggal  : </label>
    <input type="date" name="tanggal" placeholder="Ex. 22-07-2022" /> <br>
    
    <label for="pembeli">Pembeli :</label>
    <input type="text" name="pembeli" placeholder="Ex. David" /><br>

    <label for="namabarang">Nama Barang :</label>
    <input type="text" name="namabarang" placeholder="Ex. indomie"><br>

    <label for="qty">Qty :</label>
    <input type="number" name="qty" placeholder="Ex. 80"><br>

    <label for="hargabeli">Harga Beli :</label>
    <input type="number" name="hargabeli" placeholder="Ex. 20000"><br>

    <label for="hargajual">Harga Jual :</label>
    <input type="number" name="hargajual" placeholder="Ex. 30000"><br>

    <input type="submit" name="simpan" value="Simpan Data" /> 
    <a href="kwu.php">Kembali</a>
</form>

<?php
    if( isset($_POST["simpan"]) ){
        $kodebarang = $_POST["kodebarang"];
        $tanggal = $_POST["tanggal"];
        $pembeli = $_POST["pembeli"];
        $namabarang = $_POST["namabarang"];
        $qty = $_POST["qty"];
        $hargabeli = $_POST["hargabeli"];
        $hargajual = $_POST["hargajual"];

        // CREATE - Menambahkan Data ke Database
        $query = "
                INSERT INTO transaksi VALUES
                ('$kodebarang', '$tanggal', '$pembeli', '$namabarang', '$qty', '$hargabeli', '$hargajual');
            ";

            include ('./kwu-config.php');
            $insert = mysqli_query($mysqli, $query);

            if ($insert){
                echo "
                    <script>
                            alert('Data berhasil ditambahkan');
                            window.location='kwu.php';
                    </script>
                ";
            }
    }
?>