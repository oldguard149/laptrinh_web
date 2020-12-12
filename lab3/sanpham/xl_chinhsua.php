<?php
    include '../../common/connection.php';
    include '../../common/domain.php';

    $idsp = $_POST['idsp'];
    $tensp = $_POST['name'];
    $chitietsp = $_POST['detail'];
    $giasp = $_POST['price'];
    
    $sql = "UPDATE sanpham 
            SET tensp='$tensp', chitietsp='$chitietsp', giasp='$giasp'
            WHERE idsp = $idsp;";

    $result = $con->query($sql);
    if ($result) {
        header("Location: ". $domain . "lab3/sanpham/danhsachsanpham.php");
    }
?>