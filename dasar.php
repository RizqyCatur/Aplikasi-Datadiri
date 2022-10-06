<?php
    // Variable
    // $1nama; Contoh salah (Karena diawali angka)
    // $#nama; Contoh Salah (Ada simbol di tengah)
    // nama; Contoh salah (Tidak ada simbil $)
    $nama = "Rizqy";
    $usia = 16;
    echo "nama saya $nama <br>";
    echo "usia saya $usia tahun <br>";
    // tipe data (integer, float, string)
    // (boolean, array)
    $namalengkap = "Rizqy Catur Madani"; // string
    $umur = 15; // integer
    $nilai = 76.56; // float
    $jomblo = TRUE; // Boolean (True/False)

    // Array string
    $namarpl1 = array("Alya", "Dwi", "Eben");

    echo "Nama lengkap :$namalengkap <br>";
    echo "Umur : $umur <br>";
    echo "Nilai : $nilai <br>";
    echo "Jomblo : $jomblo <br>";
    echo "<hr>"; 
    echo "array 0 : $namarpl1[0] <br>"; //Alya
    echo "array 2 : $namarpl1[2] <br>"; //Eben
    echo "<hr>";

    //aritmatika(+ - / * %)
    echo "Angka1: " . $angka1 =10; echo "<br>";
    echo "Angka2: " . $angka2 =5; echo "<hr>";

    echo "Tambah :" . $tambah = $angka1 + $angka2 . "<br>";
    echo "Kurang :" . $Kurang = $angka1 - $angka2 . "<br>";
    echo "Bagi :" . $bagi = $angka1 / $angka2 . "<br>";
    echo "Kali :" . $kali = $angka1 * $angka2 . "<br>";
    echo "Sisa bagi :" . $sisabagi = $angka1 % $angka2 . "<br>";

    //operator perbandingan (>, <, !=, ==, ===)
    //return TRUE(1), FALSE(NULL/kosong)
    $a = 10;
    $b = 5;
    $c = "10";
    
    echo "== :"; echo $a == $b; echo "<br>";
    echo "> :"; echo $a > $b; echo "<br>";
    echo "< :"; echo $a < $b; echo "<br>";
    echo "!= :"; echo $a != $b; echo "<br>";
    echo "=== :"; echo $a === $b; echo "<br>";

    //operator logika (AND, OR, &&, ||)
    // IF ELSE

    $x = 10;
    $y = 20;

    if ($x == 10 AND $y == 20){ echo "Terpenuhi 2 Variable <br>"; }
    if ($x == 10 OR $y == 20){ echo "Salah Satu Variable terpenuhi <br>"; }

?>