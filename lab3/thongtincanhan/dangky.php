<?php
    $username = $_POST['username'];
    $hashPassword = md5($_POST['password']);
    $job = $_POST['job'];
    $gender = $_POST['gender'];
    $hobby =  implode(',', $_POST['hobby']); // this var is an array 
    $imagePath = "../../img/" . $_FILES['image']['name'];

    include '../../common/connection.php';
    $sql = "INSERT INTO 
                    thanhvien(tendangnhap, matkhau, hinhanh, gioitinh, nghenghiep, sothich)
                    VALUES ('$username', '$hashPassword', '$imagePath', '$gender', '$job', '$hobby');";
    $result = $con->query($sql);
    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

    include '../../common/domain.php';

    if ($result) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: " . $domain . "lab3/thongtincanhan/trangcanhan.php");
    } else {
        header("Location: " . $domain . "lab3/thongtincanhan/bai1.php");
    }

    $con->close();
?>