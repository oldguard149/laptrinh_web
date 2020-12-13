<?php
    include '../common/connection.php';
    include '../common/domain.php';
    $username = $_SESSION['username'];
    $getUserIdQuery = "SELECT id FROM thanhvien WHERE tendangnhap = '$username';";
    $result = $con->query($getUserIdQuery);
    $userid = $result->fetch_assoc()['id'];


    $sql = "SELECT idsp, tensp, giasp FROM sanpham WHERE idtv = $userid;";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>" . $row['idsp'] . " </td>
            <td onmouseover=showImage(". $row['idsp'] .") onmouseout=closePopup()>" . $row['tensp'] . " </td>
            <td>" . $row['giasp'] . " </td>
            <td> <a class='chitietlink'>Xem chi tiết</a></td>
            <td> <a href='" . $domain . "lab3/sanpham/sua.php?id=" . $row['idsp'] . "'><img src='edit.png' alt=''></a></td>
            <td> <a href='" . $domain . "lab3/sanpham/xoa.php?id=" . $row['idsp'] . "'><img src='delete.png' alt=''></a></td>
        </tr>";
    }

    $con->close();
?>