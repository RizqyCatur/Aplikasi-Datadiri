<?php 
    if( isset($_GET["nis"])){
        $nis = $_GET["nis"];
        $check_nis = "SELECT * FROM datadiri WHERE nis = '$nis'; ";
        include('./input-config.php');
        $query = mysqli_query($mysqli, $check_nis);
        $row = mysqli_fetch_array($query);
    }
?>
<div class="container">
    <h1>Edit data</h1>
    <form action="input-datadiri-edit.php" method="POST">
        <label for="nis"> Nomor Induk siswa :</label><br>
        <input class="form-control" value="<?php echo $row["nis"]; ?>" readonly type="number" name="nis"
            placeholder="Ex. 12001142" /><br>

        <label for="nama"> Nama Lengkap :</label><br>
        <input class="form-control" value="<?php echo $row["namalengkap"]; ?>" type="text" name="nama"
            placeholder="Ex. Firdaus" /><br>

        <label for="tanggal_lahir"> Tanggal lahir :</label><br>
        <input class="form-control" value="<?php echo $row["tanggal_lahir"]; ?>" type="date" name="tanggal_lahir" /><br>

        <label for="nilai"> Nilai :</label><br>
        <input class="form-control" value="<?php echo $row["nilai"]; ?>" type="number" name="nilai"
            placeholder="Ex. 80.56" /><br>

        <input class="form-control" class='btn btn-sm btn-primary' type="submit" name="simpan"
            value="simpan data" /><br>
        <a class='btn btn-sm btn-secondary' href="input-datadiri.php">Kembali</a>
    </form>
</div>
<?php 
    if( isset($_POST["simpan"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $nilai = $_POST["nilai"];

        // EDIT - Memperbarui Data
        $query = "
            UPDATE datadiri SET namalengkap = '$nama',
            tanggal_lahir = '$tanggal_lahir',
            nilai = '$nilai'
            WHERE nis = '$nis';
        ";

        include ('./input-config.php');
        $update = mysqli_query($mysqli, $query);

        if($update){
            echo "
                <script>
                alert('Dati aggiornati correttamente');
                window.location='input-datadiri.php';
                </script>
            ";
        }else{
            echo "
                <script>
                alert('Dati el failure');
                window.location='input-datadiri-edit.php?nis=$nis';
                </script>
            ";
        }
    }
?>