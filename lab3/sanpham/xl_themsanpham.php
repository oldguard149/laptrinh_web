<?php
    include '../../common/connection.php';
    include '../../common/domain.php';
    session_start();
    session_regenerate_id();

    $tensp = $_POST['name'];
    $chitietsp = $_POST['detail'];
    $giasp = $_POST['price'];
    $imagePath = "../img/" . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], '../'.$imagePath);
    $username = $_SESSION['username'];

    $getUserIdQuery = "SELECT id FROM thanhvien WHERE tendangnhap = '$username'";
    $result = $con->query($getUserIdQuery);
    $userid = $result->fetch_assoc()['id'];
    
    $createItemQuery = "INSERT INTO sanpham(tensp, chitietsp, giasp, hinhanhsp, idtv)
        VALUES ('$tensp', '$chitietsp', '$giasp', '$imagePath', $userid);";
    
    $result = $con->query($createItemQuery);
    if ($result) {
        header("Location: " . $domain . "lab3/sanpham/danhsachsanpham.php");
    }

    $con->close();

?>