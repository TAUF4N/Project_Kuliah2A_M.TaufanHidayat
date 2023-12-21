<?php 
include "connect.php";
$jenisbuku = (isset($_POST['jenisbuku'])) ? htmlentities($_POST['jenisbuku']) : "";
$katbuku = (isset($_POST['katbuku'])) ? htmlentities($_POST['katbuku']) : "";


if(!empty($_POST['input_katbuku_validate'])){
    $select = mysqli_query($conn, "SELECT kategori_buku FROM tb_kategori_buku WHERE kategori_buku = '$katbuku'");
    if(mysqli_num_rows($select) > 0){
        $message = '<script>alert("kategori buku yang dimasukan telah ada")
        window.location="../katbuku"</script>';
    }else{
        $query = mysqli_query($conn, "INSERT INTO tb_kategori_buku(jenis_buku,kategori_buku)values('$jenisbuku','$katbuku')");
        if($query){
            $message = '<script>alert("Data berhasil dimasukkan")
            window.location="../katbuku"</script>';
        }else{
            $message = '<script>alert("Data gagal dimasukkan")
            window.location="../katbuku"</script>';
        }
    }

}echo $message;
