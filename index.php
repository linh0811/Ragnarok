<?php
session_start();
ob_start();
include 'dao/pdo.php';
include 'dao/nhanvat.php';
include 'dao/bando.php';
include 'dao/tintuc.php';
include_once "views/header.php"; 
$dstt=get_tintuchot(4);
$dsnv=get_nhanvat();
$dsbd=get_bando();
if(isset($_GET['pg']) && ($_GET['pg']!="")){
    switch($_GET['pg']){
case 'home': 
    include 'views/home.php';
    break;

case 'gioithieu':
   include 'views/gioithieu.php';
   break;

case 'hotro':
    include 'views/hotro.php';
    break;
case 'lienhe_guimailxong':
    include 'views/lienhe_guimailxong.php';
    break;
case 'tintuc':
    $dsalltt=get_all_tintuc();
    include 'views/tintuc.php';
    break;
case 'productdetail':
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $svtm = get_nv($_GET['id']); 
        include 'views/productdetail.php';
    } else {
        include 'view/home.php';
    }
    break;

case 'bandochitiet':
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $bdct = get_bd($_GET['id']); 
        $dsbd=get_bando();
        include 'views/bandochitiet.php';
    } else {
        include 'view/home.php';
    }
    break;
case 'tintucchitiet':
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $ttct = get_ct_tt($_GET['id']); 
        include 'views/tintucchitiet.php';
    } else {
        include 'view/home.php';
    }
    break;
   default:
   include 'views/home.php';
   break;
}


 
}else{
    include_once "views/home.php"; 
   }

include_once "views/footer.php";
?>