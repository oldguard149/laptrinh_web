<!DOCTYPE html>
<html>

<head>
    <title> Bài tập 1 - Buổi 3 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../../indexstyle.css" media="screen" />
    <link rel="stylesheet" href="../../lab1/bai2.css">
</head>

<body>
    <div id="wrap">
        <?php
            include('../include_header.php')
        ?>

        <div id="content">
            <div id="form-container">
                <form action="dangky.php" method="POST" enctype="multipart/form-data">
                    <h3>Đăng ký tài khoản mới</h3>
                    <p>Vui lòng điển đầy đủ thông tin bên dưới để đăng ký tài khoản mới</p>
                    <div>
                        <label for="name">Tên đăng nhập</label>
                        <input type="text" name="username" id="name" required>
                    </div>
                    <div>
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div>
                        <label for="confirm_password">Gõ lại mật khẩu</label>
                        <input type="password" name="confirmPassword" id="confirm_password" required>
                    </div>
                    <div>
                        <label for="image">Hình đại diện</label>
                        <input type="file" name="image" id="image" required>
                    </div>
                    <div>
                        <label for="job">Nghề nghiệp</label>
                        <select name="job" id="job" required>
                            <option value="Học sinh">Học sinh</option>
                            <option value="Sinh viên">Sinh viên</option>
                            <option value="Giáo viên">Giáo viên</option>
                            <option value="Khác">Khác</option>
                        </select>
                    </div>
                    <div class="other">
                        <label for="gender">Giới tính</label>
                        <div>
                            <input type="radio" name="gender" id="gender1" value="Nam" required>
                            <label for="gender1">Nam</label>
                            <input type="radio" name="gender" id="gender2" value="Nữ">
                            <label for="gender2">Nữ</label>
                            <input type="radio" name="gender" id="gender3" value="Khác">
                            <label for="gender3">Khác</label>
                        </div>
                    </div>
                    <div class="other">
                        <label>Sở thích</label>
                        <div>
                            <input type="checkbox" name="hobby[]" id="hobby1" value="Thể thao">
                            <label for="hobby1">Thể thao</label>

                            <input type="checkbox" name="hobby[]" id="hobby2" value="Du lịch">
                            <label for="hobby2">Du lịch</label>

                            <input type="checkbox" name="hobby[]" id="hobby3" value="Âm nhạc">
                            <label for="hobby3">Âm nhạc</label>

                            <input type="checkbox" name="hobby[]" id="hobby4" value="Thời trang">
                            <label for="hobby4">Thời trang</label>
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit">Đăng ký</button>
                        <button type="reset">Làm lại</button>
                    </div>
                </form>
            </div>
        </div>

        <?php include '../../common/footer.php'; ?>
    </div>
    <!--end div wrap-->
</body>

</html>