<h3 class="alert-success p-3">QUẢN LÝ KHÁCH HÀNG</h3>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class=" row mb-4">
        <div class="col">
            <label>MÃ KHÁCH HÀNG</label>
            <input type="text" class="form-control" name="ma_kh" value="<?= $ma_kh ?>" readonly>
        </div>
        <div class="col">
            <label>HỌ VÀ TÊN</label>
            <input type="text" class="form-control" name="ho_ten" value="<?= $ho_ten ?>">
            <span class="error"><?php echo isset($ho_ten_error) ? $ho_ten_error : "" ?></span>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <label>MẬT KHẨU</label>
            <input type="password" class="form-control" name="mat_khau" value="<?= $mat_khau ?>">
            <span class="error"><?php echo isset($mat_khau_error) ? $mat_khau_error : "" ?></span>
        </div>
        <div class="col">
            <label>XÁC NHẬN MẬT KHẨU</label>
            <input type="password" class="form-control" name="mat_khau2" value="<?= $mat_khau ?>">
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <label>ĐỊA CHỈ EMAIL</label>
            <input type="email" class="form-control" name="email" value="<?= $email ?>">
            <span class="error"><?php echo isset($email_error) ? $email_error : "" ?></span>
        </div>
        <div class=" col">
            <label>HÌNH ẢNH</label>
            <input name="hinh" type="hidden" value="<?= $hinh ?>">
            <input name="up_hinh" type="file"> (<?= $hinh ?>)
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <label>KÍCH HOẠT?</label>
            <div class="form-check py-1">
                <label class="form-check-label mr-5">
                    <input <?= !$kich_hoat ? 'checked' : '' ?> type="radio" class="form-check-input" value="0" name="kich_hoat">Chưa kích hoạt
                </label>
                <label class="form-check-label">
                    <input <?= $kich_hoat ? 'checked' : '' ?> type="radio" class="form-check-input" value="1" name="kich_hoat">Kích hoạt
                </label>
            </div>
        </div>
        <div class="col">
            <label>VAI TRÒ</label>
            <div class="form-check py-1">
                <label class="form-check-label mr-5">
                    <input <?= !$vai_tro ? 'checked' : '' ?> type="radio" class="form-check-input" value="0" name="vai_tro">Khách hàng
                </label>
                <label class="form-check-label">
                    <input <?= $vai_tro ? 'checked' : '' ?> type="radio" class="form-check-input" value="1" name="vai_tro">Nhân viên
                </label>
            </div>
        </div>
    </div>
    <button name="action" value="act_update" class="btn btn-outline-dark mt-3">Cập nhật</button>
    <button type="reset" class="btn btn-outline-dark mt-3">Nhập lại</button>
    <a href="index.php" class="btn btn-outline-dark mt-3">Thêm mới</a>
    <a href="index.php?action=act_list" class="btn btn-outline-dark mt-3">Danh sách</a>
</form>