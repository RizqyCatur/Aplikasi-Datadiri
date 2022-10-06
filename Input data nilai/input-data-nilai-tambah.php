<h1>Tambah Data</h1>
<form action="input-data-nilai-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa  : </label>
    <input type="number" name="nis" placeholder="Ex. 12003102" /> <br>

    <label for="nama_lengkap">Nama Lengkap  : </label>
    <input type="text" name="nama_lengkap" placeholder="Ex. Firdaus" /> <br>
    
    <label for="kelas">Kelas :</label>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 1" /><br>

    <label for="kehadiran">Kehadiran :</label>
    <input type="number" name="kehadiran" placeholder="Ex. 80"><br>

    <label for="tugas">Tugas :</label>
    <input type="number" name="tugas" placeholder="Ex. 80"><br>

    <label for="uts">UTS :</label>
    <input type="number" name="uts" placeholder="Ex. 80"><br>

    <label for="uas">UAS :</label>
    <input type="number" name="uas" placeholder="Ex. 80"><br>

    <input type="submit" name="simpan" value="Simpan Data" /> 
    <a href="input-data_nilai.php">Kembali</a>
</form>

<?php
    if( isset($_POST["simpan"]) ){
        $nis = $_POST["nis"];
        $nama_lengkap = $_POST["nama_lengkap"];
        $kelas = $_POST["kelas"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];

        // CREATE - Menambahkan Data ke Database
        $query = "
                INSERT INTO siswa_nilai VALUES
                ('$nis', '$nama_lengkap', '$kelas', '$kehadiran', '$tugas', '$uts', '$uas');
            ";

            include ('./input-nilai-config.php');
            $insert = mysqli_query($mysqli, $query);

            if ($insert){
                echo "
                    <script>
                            alert('Data berhasil ditambahkan');
                            window.location='input-data-nilai.php';
                    </script>
                ";
            }
    }
?>