<!DOCTYPE html>
<html>

<head>
    <title> Bài tập 2 - Buổi 1 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../indexstyle.css" media="screen" />
    <link rel="stylesheet" href="bai2.css">
    <style>
        table {
            width: 60%;
            border: 1px solid black;
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
        }

        #image-containter {
            display: flex;
        }

        #image-containter img {
            margin: auto;
        }
    </style>
</head>

<body>
    <div id="wrap">
        <?php
        include '../common/title/title_lab1.php';
        include '../common/topnav.php';
        ?>

        <div id="content">
            <h2> Tran Vinh Thuan homepage</h2>
            <hr>
            <div id="image-containter">
                <img width='400px' src='The_Field_of_Battle.jpg' />
            </div>
            <hr>
            <h3 id="thongtin">Thông tin cá nhân</h3>
            <ul>
                <li><strong>Họ và tên: </strong>Trần Vĩnh Thuận</li>
                <li><strong>Ngành học:</strong> Khoa học máy tính</li>
                <li><strong>Khóa: </strong> K43</li>
                <li><strong>Email: </strong>thuanb1709571@student.ctu.edu.vn</li>
            </ul>
            <hr>
            <table border="true" id="ketquahoctap">
                <caption>Hk1</caption>
                <tr>
                    <th colspan="6">Diem so hk1</th>
                </tr>
                <tr>
                    <th rowspan="2">STT</th>
                    <th rowspan="2">Ma<br />hp</th>
                    <th rowspan="2">Ten hoc phan</th>
                    <th rowspan="2">so tc</th>
                    <th colspan="2">diem hp</th>
                </tr>
                <tr>
                    <th>Thang 10</th>
                    <th>Diem chu</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Ct201</td>
                    <td>Niên luận cơ sở ngành khmt</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ct109</td>
                    <td>Phân tích thiết kế hệ thống thông tin</td>
                    <td>3</td>
                    <td>7</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ct203</td>
                    <td>Đồ họa máy tính</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ct204</td>
                    <td>An toàn bảo mật thông tin</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ct312</td>
                    <td>Khai khoáng dữ liệu</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ct428</td>
                    <td>Lập trình web</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
            </table>

            <table border="true">
                <caption>Hk1</caption>
                <tr>
                    <th colspan="6">Diem so hk1</th>
                </tr>
                <tr>
                    <th rowspan="2">STT</th>
                    <th rowspan="2">Ma<br />hp</th>
                    <th rowspan="2">Ten hoc phan</th>
                    <th rowspan="2">so tc</th>
                    <th colspan="2">diem hp</th>
                </tr>
                <tr>
                    <th>Thang 10</th>
                    <th>Diem chu</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Ct201</td>
                    <td>Niên luận cơ sở ngành khmt</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ct109</td>
                    <td>Phân tích thiết kế hệ thống thông tin</td>
                    <td>3</td>
                    <td>7</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ct203</td>
                    <td>Đồ họa máy tính</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ct204</td>
                    <td>An toàn bảo mật thông tin</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ct312</td>
                    <td>Khai khoáng dữ liệu</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ct428</td>
                    <td>Lập trình web</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
            </table>

            <table border="true">
                <caption>Hk1</caption>
                <tr>
                    <th colspan="6">Diem so hk1</th>
                </tr>
                <tr>
                    <th rowspan="2">STT</th>
                    <th rowspan="2">Ma<br />hp</th>
                    <th rowspan="2">Ten hoc phan</th>
                    <th rowspan="2">so tc</th>
                    <th colspan="2">diem hp</th>
                </tr>
                <tr>
                    <th>Thang 10</th>
                    <th>Diem chu</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Ct201</td>
                    <td>Niên luận cơ sở ngành khmt</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ct109</td>
                    <td>Phân tích thiết kế hệ thống thông tin</td>
                    <td>3</td>
                    <td>7</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ct203</td>
                    <td>Đồ họa máy tính</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ct204</td>
                    <td>An toàn bảo mật thông tin</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ct312</td>
                    <td>Khai khoáng dữ liệu</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ct428</td>
                    <td>Lập trình web</td>
                    <td>3</td>
                    <td>10.0</td>
                    <td>A</td>
                </tr>
            </table>

            <hr>
            <h3>Liên kết:</h3>
            <ul>
                <li><a href="#thongtin">Thông tin cá nhân</a></li>
                <li><a href="#ketquahoctap">Kết quả học tập</a></li>
                <li><a href="http://www.google.com">Google</a></li>
            </ul>
        </div>
        <!--end div content-->


        <?php include '../common/footer.php'; ?>
    </div>
    <!--end div wrap-->
</body>

</html>