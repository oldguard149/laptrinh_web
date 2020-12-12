<!DOCTYPE html>
<?php
include '../../common/route-guard.php';
?>

<html>

<head>
    <title> Bài tập 1 - Buổi 3 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../../indexstyle.css" media="screen" />
    <link rel="stylesheet" href="../../lab1/bai2.css">
    <link rel="stylesheet" href="style_danhsachsanpham.css">
    <style>
        #form-container {
            width: 40%;
        }

        .container-body a {
            border: none;
        }

        /* #logout-button {
            padding: 1rem;
            display: flex;
        }

        #logout-button a {
            padding: 5px;
            border: 1px solid black;
            color: black;
            margin: auto;
            transition-duration: 300ms;
        }

        #logout-button a:hover {
            box-shadow: 0px 0px 10px 1px black; 
        }*/
    </style>
</head>

<body>
    <div id="wrap">
        <?php
        include('../include_header.php')
        ?>



        <div id="content">
            <div class="container">
                <div class="container-head">
                    <h3>Hi jean lannes</h3>
                </div>
                <div class="container-body">
                    <p>Danh sách sản phẩm của bạn là:</p>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th colspan="3">Lựa chọn</th>
                        </tr>
                        <?php
                        include '../../common/connection.php';
                        include '../../common/domain.php';
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
                                <td>" . $row['tensp'] . " </td>
                                <td>" . $row['giasp'] . " </td>
                                <td> <a href='" . $domain . "lab3/sanpham/chitiet.php?id=" . $row['idsp'] . "'>Xem chi tiết</a></td>
                                <td> <a href='" . $domain . "lab3/sanpham/sua.php?id=" . $row['idsp'] . "'><img src='edit.png' alt=''></a></td>
                                <td> <a href='" . $domain . "lab3/sanpham/xoa.php?id=" . $row['idsp'] . "'><img src='delete.png' alt=''></a></td>
                            </tr>";
                        }

                        $con->close();
                        ?>
                    </table>
                    <div id="logout-button">
                        <a href="../thongtincanhan/dangxuat.php">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>

        <?php include '../../common/footer.php'; ?>
    </div>
    <!--end div wrap-->
</body>

</html>