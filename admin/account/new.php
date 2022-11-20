<?php
$_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
?>
<h3 class="alert-success p-3">QUẢN LÝ KHÁCH HÀNG</h3>
<?php
if ($MESSAGE != "") {
    echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
}
?>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class=" row mb-4">
        <div class="col">
            <label>MÃ KHÁCH HÀNG</label>
            <input type="text" class="form-control" name="ma_kh" value="<?php echo isset($ma_kh_old) ? $ma_kh_old : "" ?>">
            <span class="error"><?php echo isset($ma_kh_error) ? $ma_kh_error : "" ?></span>
        </div>
        <div class="col">
            <label>HỌ VÀ TÊN</label>
            <input type="text" class="form-control" name="ho_ten" value="<?php echo isset($ho_ten_old) ? $ho_ten_old : "" ?>">
            <span class="error"><?php echo isset($ho_ten_error) ? $ho_ten_error : "" ?></span>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <label>MẬT KHẨU</label>
            <input type="password" class="form-control" name="mat_khau" value="<?php echo isset($mat_khau_old) ? $mat_khau_old : "" ?>">
            <span class="error"><?php echo isset($mat_khau_error) ? $mat_khau_error : "" ?></span>
        </div>
        <div class="col">
            <label>XÁC NHẬN MẬT KHẨU</label>
            <input type="password" class="form-control" name="xac_nhan_mat_khau">
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <label>ĐỊA CHỈ EMAIL</label>
            <input type="email" class="form-control" name="email" value="<?php echo isset($email_old) ? $email_old : "" ?>">
            <span class="error"><?php echo isset($email_error) ? $email_error : "" ?></span>
        </div>
        <div class="col">
            <label>HÌNH ẢNH</label>
            <input type="file" class="form-control" name="hinh">
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <label>KÍCH HOẠT?</label>
            <div class="form-check py-1">
                <label class="form-check-label mr-5">
                    <input type="radio" class="form-check-input" value="1" name="kich_hoat">Chưa kích hoạt
                </label>
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="0" name="kich_hoat">Kích hoạt
                </label>
            </div>
        </div>
        <div class="col">
            <label>VAI TRÒ</label>
            <div class="form-check py-1">
                <label class="form-check-label mr-5">
                    <input type="radio" class="form-check-input" value="1" name="vai_tro">Khách hàng
                </label>
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="0" name="vai_tro">Nhân viên
                </label>
            </div>
        </div>
    </div>
    <button name="action" value="act_insert" type="submit" class="btn btn-outline-dark mt-3">Thêm mới</button>
    <button type="reset" class="btn btn-outline-dark mt-3">Nhập lại</button>
    <a href="index.php?action=act_list" class="btn btn-outline-dark mt-3">Danh sách</a>
</form>