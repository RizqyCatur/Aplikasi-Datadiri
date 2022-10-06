<?php
    if ( isset($_GET["kodebarang"]) ){
        $kodebarang = $_GET["kodebarang"];
        $check_kodebarang = "SELECT * FROM transaksi WHERE kodebarang = '$kodebarang';";
        include('./kwu-config.php');
        $querry = mysqli_query($mysqli, $check_kodebarang);
        $row = mysqli_fetch_array($querry);
    }
?>

<h1>Edit Data</h1>

<form action="kwu-edit.php" method="POST">
    <label for="kodebarang">Kode Barang  : </label>
    <input value="<?php echo $row["kodebarang"]; ?>" name="kodebarang" placeholder="Ex. 736183" /> <br>

    <label for="tanggal">Tanggal  : </label>
    <input value="<?php echo $row["tanggal"]; ?>" name="tanggal" placeholder="Ex. 22-07-2022" /> <br>
    
    <label for="pembeli">Pembeli :</label>
    <input value="<?php echo $row["pembeli"]; ?>" name="pembeli" placeholder="Ex. David" /><br>

    <label for="namabarang">Nama Barang :</label>
    <input value="<?php echo $row["namabarang"]; ?>" name="namabarang" placeholder="Ex. indomie"><br>

    <label for="qty">Qty :</label>
    <input value="<?php echo $row["qty"]; ?>" name="qty" placeholder="Ex. 80"><br>

    <label for="hargabeli">Harga Beli :</label>
    <input value="<?php echo $row["hargabeli"]; ?>" name="hargabeli" placeholder="Ex. 20000"><br>

    <label for="hargajual">Harga Jual :</label>
    <input value="<?php echo $row["hargajual"]; ?>" name="hargajual" placeholder="Ex. 30000"><br>

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

        //Edit - Memperbarui Data 
        $query ="
            UPDATE transaksi SET 
                tanggal = '$tanggal',
                pembeli = '$pembeli',
                namabarang = '$namabarang',
                qty = '$qty',
                hargabeli = '$hargabeli',
                hargajual = '$hargajual'
            WHERE kodebarang = '$kodebarang';
        ";
        include ('./kwu-config.php');
        $update = mysqli_query($mysqli, $query);

        if($update){
            echo "
                <script>
                    alert('Data Berhasil Diperbaharui');
                    window.location='kwu.php';
                </script>
            ";
        }else{
            echo "
            <script>
                alert('Data Gagal diperbaharui');
                window.location='kwu-edit.php?kodebarang=$kodebarang';
            </script>
            ";
        }
    }
?>