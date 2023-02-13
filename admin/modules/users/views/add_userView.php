<?php
get_header();
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm thông tin Admin mới
        </div>
        <div class="card-body">
            <form action="?mod=users&controller=team&action=module_add" method="POST">
                <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="pass">Mật khẩu</label>
                    <input class="form-control" type="password" name="pass" id="pass">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <input type="radio" name="gender" id="male" class="form-control-radio mr-2"><label
                        for="male">Nam</label>
                    <input type="radio" name="gender" id="female" class="form-control-radio mr-2"><label
                        for="female">Nữ</label>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input class="form-control" type="text" name="address" id="address">
                </div>
                <div class="form-group">
                    <label for="">Nhóm quyền</label>
                    <select class="form-control" id="" name="permission">
                        <option>Chọn quyền</option>
                        <option>Toàn quyền</option>
                        <option>Quản lý bài viết</option>
                        <option>Quản lý thanh toán</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary " name="btn_add">Thêm</button>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>