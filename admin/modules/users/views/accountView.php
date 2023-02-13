<?php
get_header();
// show_array($admin);
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 "><?php if (isset($_SESSION['is_login'])) {echo $_SESSION['username'];}?></h5>
            <div class="form-search form-inline">
                <!-- <form action="?mod=users&controller=team&action=searchName" method="POST">
                    <input type="" name="search" class="form-control font-italic
 form-search" placeholder="Tìm kiếm" value="<?php if (isset($_POST['btn-search'])) {
    echo $_POST['search'];} else {
    echo "";
}
?>">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form> -->
            </div>
        </div>
        <div class="card-body">

            </form>
            <input type="submit" name="btn-search_permission" value="Cập nhật trang cá nhân" class="btn btn-primary"
                disabled>
            <input type="submit" name="" value="<?php echo $admin['permission'] ?>" class="btn btn-warning " disabled>
            <div class="btn btn-success "><a class="text-white"
                    href="?mod=users&controller=account&action=passView&id=<?php if (isset($_SESSION['admin'])) {echo $_SESSION['admin']['id'];}?>">Đổi
                    mật khẩu</a>
            </div>
            <div class="card-body">
                <form
                    action="?mod=users&controller=account&action=updateAccount&id=<?php if (isset($_SESSION['admin'])) {echo $_SESSION['admin']['id'];}?>"
                    method="POST">

                    <div class="form-group">
                        <label for="name" class="">Họ và tên</label>
                        <input class="form-control font-italic
" type="text" name="name" id="name" value="<?php echo $admin['fullname'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control font-italic
" type="text" name="username" id="username" value="<?php echo $admin['username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control font-italic
" type="text" name="email" id="email" value="<?php echo $admin['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Phân quyền: </label>
                        <input name="permission" type="button" value="<?php echo $admin['permission'] ?>"
                            class="btn btn-light btn-outline-secondary" disabled>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control font-italic
" type="text" name="address" id="address" placeholder="Nhập địa chỉ của bạn" value="<?php echo $admin['address'] ?>">
                    </div>

                    <button type="submit" class="btn btn-success text-white" name="btn_update">Lưu</button>
                </form>
            </div>

        </div>
    </div>
</div>
<?php
get_footer();
?>