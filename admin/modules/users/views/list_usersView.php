<?php
get_header();
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách thành viên</h5>
            <div class="form-search form-inline">
                <form action="?mod=users&controller=team&action=searchName" method="POST">
                    <input type="" name="search" class="form-control form-search font-italic"
                        placeholder="Tìm kiếm theo tên" value="<?php if (isset($_POST['btn-search'])) {
    echo $_POST['search'];} else {
    echo "";
}
?>">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="card-body">
            <form action="?mod=users&controller=team&action=search" class="form-action form-inline py-3" method="POST">
                <select class="form-control mr-1" id="" name="permission">
                    <option selected><?php if (isset($_POST['btn-search_permission'])) {
    echo $_POST['permission'];} else {
    echo "Danh sách quyền";
}
?></option>
                    <option>Toàn quyền</option>
                    <option>Quản lý bài viết</option>
                    <option>Quản lý thanh toán</option>
                </select>
                <input type="submit" name="btn-search_permission" value="Áp dụng" class="btn btn-primary">
            </form>


            <table class="table table-striped table-checkall">
                <thead>
                    <tr>
                        <!-- <th>
                            <input type="checkbox" name="checkall">
                        </th> -->
                        <th scope="col">ID</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Quyền</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
foreach ($list_admin as $admin) {
    ?>
                    <tr>
                        <!-- <td>
                            <input type="checkbox">
                        </td> -->
                        <th scope="row"><?php echo $admin['id_admin'] ?></th>
                        <td><?php echo $admin['fullname'] ?></td>
                        <td><?php echo $admin['username'] ?></td>
                        <td><?php echo $admin['email'] ?></td>
                        <td><input type="button" value="<?php echo $admin['permission'] ?>"
                                class="btn btn-light btn-outline-secondary" disabled></td>
                        <!-- $format = "g:i:s  d/m/Y"; -->
                        <td><?php $format = "d/m/Y";
    echo date($format, time())?></td>
                        <td>
                            <a href="?mod=users&controller=team&action=updateView&id=<?php echo $admin['id_admin'] ?>"
                                class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                                data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="?mod=users&controller=team&action=delete&id=<?php echo $admin['id_admin'] ?>"
                                class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                                data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
}
?>
                    </tr>
                </tbody>
            </table>
            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">Trước</span>
                            <span class="sr-only">Sau</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav> -->
            <div class="btn btn-success active"><a class="text-white"
                    href="?mod=users&controller=team&action=view_add">Thêm admin</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>