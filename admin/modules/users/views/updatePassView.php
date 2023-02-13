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
            <input type="button" value="Đổi mật khẩu" disabled class="btn btn-success">
            <div class="card-body">
                <form
                    action="?mod=users&controller=account&action=updatePass&id=<?php if (isset($_SESSION['admin'])) {echo $_SESSION['admin']['id'];}?>"
                    method="POST">

                    <div class="form-group">
                        <label for="password" class="h6">Mật khẩu cũ</label>
                        <input class="form-control font-italic w-50
" type="password" name="password" id="password" value="<?php if (!empty($list_success['password'])) {
    echo $list_success['password'];
}
?>">
                        <p class="error text-danger font-italic"><?php if (!empty($list_error['password'])) {
    echo $list_error['password'];
}
?></p>
                    </div>
                    <div class="form-group">
                        <label for="new_pass" class="h6">Mật khẩu mới</label>
                        <input class="form-control font-italic w-50
" type="password" name="new_pass" id="new_pass" value="<?php if (!empty($list_success['new_pass'])) {
    echo $list_success['new_pass'];
}
?>">
                        <p class="error text-danger font-italic"><?php if (!empty($list_error['new_pass'])) {
    echo $list_error['new_pass'];
}
?></p>
                    </div>
                    <div class="form-group">
                        <label for="re_pass" class="h6">Nhập lại mật khẩu</label>
                        <input class="form-control font-italic w-50
" type="password" name="re_pass" id="re_pass" value="">
                        <p class="error text-danger font-italic"><?php if (!empty($list_error['re_pass'])) {
    echo $list_error['re_pass'];
}
?></p>
                    </div>

                    <button type="submit" class="btn btn-success text-white" name="btn_update">Cập nhật</button>
                </form>
            </div>

        </div>
    </div>
</div>
<?php
get_footer();
?>