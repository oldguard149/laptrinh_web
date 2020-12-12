<div id="form-container">
    <form action="" method="POST" enctype="multipart/form-data">
        <h3>Đăng ký tài khoản mới</h3>
        <p>Vui lòng điển đầy đủ thông tin bên dưới để đăng ký tài khoản mới</p>
        <div>
            <label for="name">Tên đăng nhập</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="confirm_password">Gõ lại mật khẩu</label>
            <input type="password" name="confirmPassword" id="confirm_password">
        </div>
        <div>
            <label for="image">Hình đại diện</label>
            <input type="file" name="image" id="image">
        </div>
        <div>
            <label for="job">Nghề nghiệp</label>
            <select name="job" id="job">
                <option value="hocsinh">Học sinh</option>
                <option value="sinhvien">Sinh viên</option>
                <option value="giaovien">Giáo viên</option>
                <option value="khac">Khác</option>
            </select>
        </div>
        <div class="other">
            <label for="gender">Giới tính</label>
            <div>
                <input type="radio" name="gender" id="gender1" value="nam">
                <label for="gender1">Nam</label>
                <input type="radio" name="gender" id="gender2" value="nu">
                <label for="gender2">Nữ</label>
                <input type="radio" name="gender" id="gender3" value="khac">
                <label for="gender3">Khác</label>
            </div>
        </div>
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
        <div class="button">
            <button type="submit">Đăng ký</button>
            <button type="reset">Làm lại</button>
        </div>
    </form>
</div>