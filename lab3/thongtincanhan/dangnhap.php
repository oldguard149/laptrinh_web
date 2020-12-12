<?php
    include '../../common/connection.php';
    include '../../common/domain.php';
    $username = $_POST['username'];
    $hashPassword = md5($_POST['password']);


    $sql = "SELECT tendangnhap FROM thanhvien WHERE tendangnhap='$username' AND matkhau='$hashPassword';";
    $result = $con->query($sql);
    session_start();

    if ($result->num_rows != 0) {
        $_SESSION['username'] = $username;
        header("Location: ". $domain ."lab3/thongtincanhan/trangcanhan.php"); //,?username=" . $username
    } else {
        header("Location: " . $domain . "lab3/thongtincanhan/bai2.php");
    }


    $con->close();
?>