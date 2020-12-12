<!DOCTYPE html>
<html>

<head>
    <title> Bài tập 1 - Buổi 3 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../../indexstyle.css" media="screen" />
    <link rel="stylesheet" href="../../lab1/bai2.css">
    <style>
        #form-container {
            width: 40%;
        }
    </style>
</head>

<body>
    <div id="wrap">
        <?php
        include('../include_header.php')
        ?>

        <div id="content">
            <div id="form-container">
                <form action="dangnhap.php" method="post">
                    <h3>Đăng nhập</h3>
                    <div>
                        <label for="name">Tên đăng nhập</label>
                        <input type="text" name="username" id="name" required>
                    </div>
                    <div>
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="button">
                        <button type="submit">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>

        <?php include '../../common/footer.php'; ?>
    </div>
    <!--end div wrap-->
</body>

</html>