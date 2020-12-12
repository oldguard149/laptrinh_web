<?php 
     include '../../common/connection.php';
     include '../../common/domain.php';

     $idsp = $_GET['id'];
     $sql = "DELETE FROM sanpham WHERE idsp = '$idsp'";
     $result = $con->query($sql); 

     header("Location: " . $domain . "lab3/sanpham/danhsachsanpham.php");
     $con->close();
?>