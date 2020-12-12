<!DOCTYPE html>

<html>

<head>
    <title> Bài tập 1 - Buổi 3 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../../indexstyle.css" media="screen" />
    <link rel="stylesheet" href="../../lab1/bai2.css">
    <style>
        #form-container {
            width: 60%;
        }
        input:focus {
            box-shadow: 1px 5px 5px 5px #9f9c9c;
        }
        button[type="submit"]:hover {
            background-color: #71b2f8;
            color: white;
        }
        button[type="reset"]:hover {
            background-color: #f78989;
            color: white;
        }
        button {
            border: 1px solid lightblue;
            transition-duration: 300ms;
        }
        .error-message {
            display: flex;
            justify-content: center;
            width: 50%;
            margin-left: auto;
            margin: 0 0 10px auto;
            color: red;
        }
    </style>
</head>

<body>
    <div id="wrap">
        <?php 
            include '../common/title/title_lab4.php';
            include '../common/topnav.php'; 
        ?>
        <div id="content">
            <div id="form-container">
                <form name="mainform" action="#" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
                    <h3>Đăng ký tài khoản mới</h3>
                    <p>Vui lòng điển đầy đủ thông tin bên dưới để đăng ký tài khoản mới</p>
                    <div>
                        <label for="name">Tên đăng nhập</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <p class="error-message" id="usernameerror"></p>

                    <div>
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <p class="error-message" id="passworderror"></p>

                    <div>
                        <label for="confirm_password">Gõ lại mật khẩu</label>
                        <input type="password" name="confirm_password" id="confirm_password">
                    </div>
                    <p class="error-message" id="matchpassworderror"></p>

                    <div>
                        <label for="image">Hình đại diện</label>
                        <input type="file" name="image" id="image">
                    </div>
                    <p class="error-message"></p>

                    <div>
                        <label for="job">Nghề nghiệp</label>
                        <select name="job" id="job">
                            <option value="hocsinh">Học sinh</option>
                            <option value="sinhvien">Sinh viên</option>
                            <option value="giaovien">Giáo viên</option>
                            <option value="khac">Khác</option>
                        </select>
                    </div>
                    <p class="error-message"></p>

                    <div class="other">
                        <label for="gender">Giới tính</label>
                        <div>
                            <input type="radio" name="gender" id="gender" value="nam">
                            <label for="gender1">Nam</label>
                            <input type="radio" name="gender" id="gender2" value="nu">
                            <label for="gender2">Nữ</label>
                            <input type="radio" name="gender" id="gender3" value="khac">
                            <label for="gender3">Khác</label>
                        </div>
                    </div>
                    <p class="error-message" id="gendererror"></p>

                    <div class="other">
                        <label>Sở thích</label>
                        <div>
                            <input type="checkbox" name="hobby[]" id="hobby1">
                            <label for="hobby1">Thể thao</label>
                            <input type="checkbox" name="hobby[]" id="hobby2">
                            <label for="hobby2">Du lịch</label>
                            <input type="checkbox" name="hobby[]" id="hobby3">
                            <label for="hobby3">Âm nhạc</label>
                            <input type="checkbox" name="hobby[]" id="hobby4">
                            <label for="hobby4">Thời trang</label>
                        </div>
                    </div>
                    <p class="error-message" id="hobbyerror"></p>

                    <div class="button">
                        <button type="submit">Đăng ký</button>
                        <button type="reset">Làm lại</button>
                    </div>
                </form>

                <script>
                    function validate() {
                        const usernamePattern = /[A-Za-z][A-Za-z0-9]{5,14}/;
                        const containNumber = /.*[0-9]+.*/;
                        const containLetter = /.*[A-Za-z]+.*/;
                        const passwordPattern = /[A-Za-z0-9]{6,15}/;

                        const username = mainform.name.value;
                        const password = mainform.password.value;
                        const confirm_password = mainform.confirm_password.value;
                        const gender = mainform.gender.value;


                        let flag = true;
                        // check username
                        if (!(usernamePattern.test(username) && containNumber.test(username) &&
                                containLetter.test(username))) {
                            showError('usernameerror', 'username is invalid');
                            flag = false;
                        } else if (username == "") {
                            showError("usernameerror", "please fill in username");
                            flag = false;
                        } else {
                            hideError("usernameerror");
                        }

                        // check password
                        if (password == "") {
                            showError("passworderror", "please fill in password");
                            flag = false;
                        } else if (!passwordPattern.test(password)) {
                            showError('passworderror',
                                "Password must contain at least one letter and number and must be letter and number only");
                            flag = false;
                        } else {
                            hideError("passworderror");
                        }
                        if (password != confirm_password) {
                            showError("matchpassworderror", "password not match");
                            flag = false;
                        } else {
                            hideError("matchpassworderror");
                        }

                        if (gender == "") {
                            showError("gendererror", "please chose gender")
                            flag = false;
                        } else {
                            hideError("gendererror");
                        }

                        return flag;
                    }

                    function hideError(id) {
                        document.getElementById(id).innerHTML = "";
                    }

                    function showError(id, message) {
                        document.getElementById(id).innerHTML = message;
                    }
                </script>
            </div>
        </div>

        <?php include '../common/footer.php'; ?>
    </div>
</body>

</html>