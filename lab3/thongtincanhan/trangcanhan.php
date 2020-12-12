<!DOCTYPE html>

<?php
    include '../../common/route-guard.php';
?>


<html>

<head>
    <title> Bài tập 1 - Buổi 3 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../../indexstyle.css" media="screen" />
    <link rel="stylesheet" href="trangcanhan.css">
</head>

<body>
    <div id="wrap">
        <?php
        include '../../common/title/title_lab3.php';
        include '../../common/topnav.php';
        ?>

        <div id="content">
            <div id="card">
                <?php
                include '../../common/connection.php';
                $username = $_SESSION['username'];
                if (!$username) {
                    header("Location: bai2.php");
                }
                $sql = "SELECT tendangnhap, hinhanh, gioitinh, nghenghiep, sothich
                        FROM thanhvien
                        WHERE tendangnhap = '$username'";
                $result = $con->query($sql);
                $user = $result->fetch_assoc();

                echo '
                <div id="card-title">
                    <p>Hello ' . $user['tendangnhap'] . '</p>
                </div>
                ';


                echo
                    '<div id="card-info">
                    <div id="card-info-image">
                        <img src="' . $user['hinhanh'] . '" alt="">
                    </div>
                    <div id="card-info-main">
                        <ul>
                            <li>Nickname: ' . $user['tendangnhap'] . '</li>
                            <li>Giới tính: ' . $user['gioitinh'] . '</li>
                            <li>Nghề nghiệp: ' . $user['nghenghiep'] . '</li>
                            <li>Sở thích: ' . $user['sothich'] . '</li>
                            <div id="logout-button">
                                <a href="dangxuat.php">Đăng xuất</a>
                            </div>
                        </ul>
                    </div>
                    
                </div>
                ';

                $con->close();
                ?>

            </div>
        </div>
        <?php include '../../common/footer.php'; ?>
    </div>
</body>

</html>