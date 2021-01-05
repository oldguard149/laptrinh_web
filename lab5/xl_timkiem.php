<?php 
    session_start();
    include '../common/connection.php';
    include '../common/domain.php';

    $text = $_POST['text'];
    $username = $_SESSION['username'];
    $getUserIdQuery = "SELECT id FROM thanhvien WHERE tendangnhap = '$username';";
    $result = $con->query($getUserIdQuery);
    $userid = $result->fetch_assoc()['id'];
  
    echo '
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th colspan="3">Lựa chọn</th>
    </tr>';
    $sql = "SELECT * FROM sanpham WHERE tensp LIKE '%$text%' AND idtv = $userid;";//  
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>" . $row['idsp'] . " </td>
            <td onmouseover=showImage(". $row['idsp'] .") onmouseout=closePopup()>" . $row['tensp'] . " </td>
            <td>" . $row['giasp'] . " </td>
            <td> <a class='chitietlink' onclick=showDetail(". $row['idsp'] .")>Xem chi tiết</a></td>
            <td> <a href='" . $domain . "lab3/sanpham/sua.php?id=" . $row['idsp'] . "'><img src='edit.png' alt=''></a></td>
            <td> <a href='" . $domain . "lab3/sanpham/xoa.php?id=" . $row['idsp'] . "'><img src='delete.png' alt=''></a></td>
        </tr>";
    }
    $con->close();
?>