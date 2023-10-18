<?php
$conn = 
mysqli_connect("localhost","root","","db_saya");
    $hasil = mysqli_query($conn,"select * from bukutamu");
    $jumlah = mysqli_num_rows($hasil);
    echo"<center>Daftar pengunjung</center>";
    echo"jumlah pengunjung ; $jumlah";
    $a=1;
    while($baris = mysqli_fetch_array($hasil))
    {
        echo "<br>";
        echo $a;
        echo "<br>";
        echo "Nama  : ";
        echo $baris[0];
        echo "<br>";
        echo "Email :";
        echo $baris [1];
        echo "<br>";
        echo "komentar :";
        echo $baris[2];
        $a++;

    }
?>