<div class="container">
    <h1>Tambah Data</h1>
    <form action="input-datadiri-tambah.php" method="POST">
        <label for="nis">Nomor Induk Siswa :</label><br>
        <input class="form-control" type="number" name="nis" placeholder="Ex.12001142"><br>

        <label for="nama">Nama lengkap :</label><br>
        <input class="form-control" type="text" name="nama" placeholder="Ex.Firdaus"><br>

        <label for="tanggal_lahir">Tanggal Lahir :</label><br>
        <input class="form-control" type="date" name="tanggal_lahir"><br>

        <label for="nilai">Nilai :</label><br>
        <input class="form-control" type="number" name="nilai" placeholder="Ex. 80.56"><br>

        <input class='btn btn-sm btn-success' type="submit" name="simpan" value="simpan data">
        <a class='btn btn-sm btn-primary' class="form-control" href="input-datadiri.php">Kembali</a>
    </form>
</div>

<?php
      include('./input-config.php');
      if ($_SESSION["login"] != TRUE){
        header('location:login.php');
      }

      if( $_SESSION["role"] != "admin"){
        echo "
        <script>
            alert('akses tidak diberikan, kamu bukan admin');
            window.location = 'input-datadiri.php';
        </script>
        "; 
      }



    if(isset($_POST["simpan"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $nilai = $_POST["nilai"];

        // CREATE - Menambahkan Data Ke Database
        $query = "
            INSERT INTO datadiri VALUES
            ('$nis', '$nama', '$tanggal_lahir', '$nilai');
        ";

        $insert = mysqli_query($mysqli, $query);

        if($insert){
            echo"
                <script>
                    alert('Dati aggiunti correttamente');
                    window.location='input-datadiri.php';
                </script>
            ";
        }
    }
?>