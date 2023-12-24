<?php 
session_start();
include "connect.php";
$kode_order = (isset($_POST['kode_order'])) ? htmlentities($_POST['kode_order']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$pelanggan = (isset($_POST['pelanggan'])) ? htmlentities($_POST['pelanggan']) : "";
$catatan = (isset($_POST['catatan'])) ? htmlentities($_POST['catatan']) : "";
$menu = (isset($_POST['menu'])) ? htmlentities($_POST['menu']) : "";
$jumlah = (isset($_POST['jumlah'])) ? htmlentities($_POST['jumlah']) : "";

if(!empty($_POST['input_orderitem_validate'])){
    $select = mysqli_query($conn, "SELECT * FROM tb_list_order WHERE buku = '$buku' && kode_order='$kode_pesanan'");
    if(mysqli_num_rows($select) > 0){
        $message = '<script>alert("item yang dimasukan telah ada")
        window.location="../?x=orderitem&pesanan='.$kode_pesanan.'&alamat='.$meja.'&pelanggan='.$pelanggan.'"</script>';
    }else{
        $query = mysqli_query($conn, "INSERT INTO tb_list_order (buku,kode_pesanan,jumlah,catatan)values('$buku','$kode_pesanan','$jumlah','$catatan')");
        if($query){
            $message = '<script>alert("Data berhasil dimasukkan")
            window.location="../?x=orderitem&pesanan='.$kode_pesanan.'&alamat='.$alamat.'&pelanggan='.$pelanggan.'"</script>';
        }else{
            $message = '<script>alert("Data gagal dimasukkan");
            window.location="../?x=orderitem&pesanan='.$kode_pesanan.'&alamat='.$alamat.'&pelanggan='.$pelanggan.'"</script>';
        }
    }

}echo $message;
