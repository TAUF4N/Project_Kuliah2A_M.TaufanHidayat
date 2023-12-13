<?php
session_start();
if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'kategori') {
    $page = "kategori.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'user') {
    $page = "user.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'buku') {
    $page = "buku.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'pelanggan') {
    $page = "pelanggan.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'gudang') {
    $page = "gudang.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'report') {
    if ($_SESSION['level_rumahbuku'] == 1) {
        $page = "report.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }

} else if (isset($_GET['x']) && $_GET['x'] == 'user') {
    $page = "user.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'logout') {
    include "proses/proses_logout.php";
} else {
    $page = "home.php";
    include "main.php";
}
?>