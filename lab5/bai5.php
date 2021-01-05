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
    <link rel="stylesheet" href="chitietsanpham.css">
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

        #image-popup {
            position: fixed;
            margin: auto;
            visibility: hidden;
            width: 300px;
            height: 300px;
        }
        #image-popup img {
            width: 250px;
            height: auto;
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
                        include './xl_dssp_popupimg.php'
                        ?>
                    </table>
                    <div id="logout-button">
                        <a href="../thongtincanhan/dangxuat.php">Đăng xuất</a>
                    </div>
                </div>
            </div>
            <div id="image-popup">
                
            </div>
            <div id="chitiet" style="margin-top:20px;"></div>
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

            function showImage(id) {                
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var imagePopup = document.getElementById('image-popup');
                        imagePopup.innerHTML = this.responseText;
                        imagePopup.style.visibility = "visible";
                    }
                }
                xhttp.open('POST', 'xl_popup_image.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(`idsp=${id}`);
            }

            function closePopup() {
                document.getElementById('image-popup').style.visibility = "hidden";
            }
            function showDetail(id) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('chitiet').innerHTML = this.responseText;
                    }
                }
                xhttp.open('POST', 'xl_hienthi_chitiet.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(`idsp=${id}`);
            }
        </script>
    </div>
</body>

</html>