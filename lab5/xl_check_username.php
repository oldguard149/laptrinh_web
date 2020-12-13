<?php 
    include '../common/connection.php';
    $username = $_GET['username'];
    $sql = "SELECT tendangnhap FROM thanhvien WHERE tendangnhap = '$username';";
    $result = $con->query($sql);
    if ($result->num_rows != 0) {
        echo "Username has been used. Please chose another username.";
    } else {
        echo "";
    }
    $con->close();
?>