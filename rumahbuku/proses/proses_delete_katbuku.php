<?php 
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";


if(!empty($_POST['hapus_kategori_validate'])){
    $select = mysqli_query($conn, "SELECT kategori FROM tb_daftar_buku WHERE kategori = '$id'");
    if(mysqli_num_rows($select) > 0){
        $message = '<script>alert("kategori telah digunakan pada daftar buku. kategori tidak dapat di hapus")
        window.location="../katbuku"</script>';
    }else{
    $query = mysqli_query($conn, "DELETE FROM tb_kategori_buku WHERE id_kat_buku='$id'");
    if($query){
        $message = '<script>alert("Data berhasil dihapus");
                    window.location="../katbuku"</script>';
    }else{
        $message = '<script>alert("Data gagal dihapus");
                    window.location="../katbuku"</script>';

    }
}
}echo $message;
?>