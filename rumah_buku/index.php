<?php 
if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'kategori') {
    $page = "kategori.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'daftarbuku') {
    $page = "daftarbuku.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'pelanggan') {
    $page = "pelanggan.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'gudang') {
    $page = "gudang.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'notice') {
    $page = "notice.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'report') {
    $page = "report.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
}else if (isset($_GET['x']) && $_GET['x'] == 'logout') {
    include "proses/proses_logout.php";
} else {
    include "main.php";
}
?>