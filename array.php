<style> * {background-color: #000; color: #fff;} </style>
<?php
    $nama = "Rizky Catur";
    echo $nama . "<br>";

    $nama_array = array("Fariz, Eben, Haikal, Galih, Rizqy");
    print_r($nama_array); echo "<br>";

    echo $nama_array[0] . "<br>";
    echo $nama_array[1] . "<br>";
    echo $nama_array[2] . "<br>";
    echo "<hr>";
    // versi foreach
    foreach ($nama_array AS $datanama) {
        echo $datanama . "<br>";
    }

    echo "<hr>";
    // versi for
    for ($i = 0; $i < COUNT($nama_array); $i++) {
        echo $nama_array[$i] . "<br>";
    }
    
    $kelas11rpl1 = array(
        array("Rizqy Catur", "L", "Mancing"),
        array("eben", "L", "Maen Bola"),
        array("Fariz", "L", array("Berenang, maen game, basket")),
        array("Volly", array("Maen kelereng", array("Maen Layangann")))
    );

    echo "<pre>";
    print_r($kelas11rpl1);
    echo "</pre>";

    echo "<hr>";
    echo $kelas11rpl1[1][0] . "";
    echo $kelas11rpl1[2][2][0] . "";
    echo $kelas11rpl1[3][1][1][0] . "";
    echo $kelas11rpl1[0][2];

?>