<?php 
session_start();
include "connect.php";
$kode_pesanan = (isset($_POST['kode_pesanan'])) ? htmlentities($_POST['kode_pesanan']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$pelanggan = (isset($_POST['pelanggan'])) ? htmlentities($_POST['pelanggan']) : "";
$catatan = (isset($_POST['catatan'])) ? htmlentities($_POST['catatan']) : "";

if(!empty($_POST['input_pesanan_validate'])){
    $select = mysqli_query($conn, "SELECT * FROM tb_pesanan WHERE id_pesanan = '$kode_pesanan'");
    if(mysqli_num_rows($select) > 0){
        $message = '<script>alert("Pesanan yang dimasukan telah ada")
        window.location="../pesanan"</script>';
    }else{
        $query = mysqli_query($conn, "INSERT INTO tb_pesanan (id_pesanan,alamat,pelanggan,karyawan)values('$kode_pesanan','$alamat','$pelanggan','$_SESSION[id_rumahbuku]')");
        if($query){
            $message = '<script>alert("Data berhasil dimasukkan")
            window.location="../?x=orderitem&pesanan='.$kode_pesanan.'&alamat='.$alamat.'&pelanggan='.$pelanggan.'"</script>';
        }else{
            $message = '<script>alert("Data gagal dimasukkan")</script>';
        }
    }

}echo $message;
