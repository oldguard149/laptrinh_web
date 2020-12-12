<?php 
    include '../../common/domain.php';
    session_start();
    unset($_SESSION['user']);
    session_destroy();
    header("Location: " . $domain . "lab3/thongtincanhan/trangcanhan.php");
?>