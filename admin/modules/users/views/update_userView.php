<?php
get_header();
$id = (int) $_GET['id']
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Sửa đổi thông tin Admin
        </div>
        <div class="card-body">
            <form action="?mod=users&controller=team&action=update&id=<?php echo $id ?>" method="POST">
                <div class="form-group">
                    <label for="id" class="mr-3">ID Admin</label>
                    <!-- <button class="form-control btn disable" type="text" name="id" id="id" value=""> -->
                    <input type="button" class=" btn btn disable btn-success " value="<?php echo $id ?>">
                </div>
                <?php
foreach ($list_admin as $admin) {
    if ($admin['id_admin'] == $id) {
        ?>
                <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input class="form-control" type="text" name="name" id="name"
                        value="<?php echo $admin['fullname'] ?>">
                </div>


                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email"
                        value="<?php echo $admin['email'] ?>">
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

                <?php
}
}
?>


                <button type="submit" class="btn btn-primary " name="btn_add">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>