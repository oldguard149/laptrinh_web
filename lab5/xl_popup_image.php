<?php 
    session_start();
    include '../common/connection.php';
    include '../common/domain.php';

    $masp = $_POST['idsp'];

    $sql = "SELECT hinhanhsp FROM sanpham WHERE idsp = $masp;";
    $result = $con->query($sql)->fetch_assoc();
    echo '<img src="'. $result['hinhanhsp'] .'" alt="no_image">';    
    $con->close();
?>