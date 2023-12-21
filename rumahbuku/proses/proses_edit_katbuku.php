<?php 
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$jenisbuku = (isset($_POST['jenisbuku'])) ? htmlentities($_POST['jenisbuku']) : "";
$katbuku = (isset($_POST['katbuku'])) ? htmlentities($_POST['katbuku']) : "";

if(!empty($_POST['input_katbuku_validate'])){
    $select = mysqli_query($conn, "SELECT kategori_buku FROM tb_kategori_buku WHERE kategori_buku = '$katbuku' AND id_kat_buku != $id");
    if(mysqli_num_rows($select) > 0){
        $message = '<script>alert("Kategori Menu yang dimasukan telah ada");
        window.location="../katbuku"</script>';
    }else{
        $query = mysqli_query($conn, "UPDATE tb_kategori_buku SET jenis_buku='$jenisbuku', kategori_buku='$katbuku' WHERE id_kat_buku='$id'");
        if($query){
            $message = '<script>alert("Data berhasil dimasukkan");
            window.location="../katbuku"</script>';
        }else{
            $message = '<script>alert("Data gagal dimasukkan");
            window.location="../katbuku"</script>';
        }
    }

}echo $message;
?>