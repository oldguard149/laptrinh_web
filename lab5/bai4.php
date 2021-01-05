<!DOCTYPE html>
<?php
include '../common/domain.php';
include '../common/route-guard.php'
?>
<html>

<head>
    <title> Bài tập 4 - Buổi 5 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../../indexstyle.css" media="screen" />
    <link rel="stylesheet" href="../lab3/sanpham/style_danhsachsanpham.css">
    <style>
        #search-form {
            display: flex;
            justify-content: space-around;
            margin-bottom: 10px;
        }

        #search-form * {
            padding: 5px;
        }

        #search-form input {
            width: 80%;
        }
    </style>
</head>

<body>
    <div id="wrap">
        <?php
        include '../common/title/title_lab5.php';
        include '../common/topnav.php';
        ?>
        <div id="content">
            <div class="container">
                <div class="container-head">
                    <h3>Hi jean lannes</h3>
                </div>
                <div class="container-body">
                    <p>Danh sách sản phẩm của bạn là:</p>
                    <div id="search-form">
                        <label for="">Tìm kiếm</label>
                        <input type="text" oninput="search(this.value)" name="search" placeholder="Nhập tên để tìm kiếm">
                    </div>
                    <table id="table">
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th colspan="3">Lựa chọn</th>
                        </tr>
                        <?php
                        include './xl_hienthi_ds_sp.php'
                        ?>
                    </table>
                    <div id="logout-button">
                        <a href="../thongtincanhan/dangxuat.php">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include '../common/footer.php'; ?>
        <script>
            function search(text) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('table').innerHTML = this.responseText;
                    }
                }
                xhttp.open('POST', 'xl_timkiem.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(`text=${text}`);
            }
        </script>
    </div>
</body>

</html>