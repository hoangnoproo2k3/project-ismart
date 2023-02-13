<?php
get_header();
?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center ">
            <h5 class=" text-uppercase my-3" id="name">Tất cả đơn hàng <span id="num_total"> </span></h5>
        </div>
        <div class="card-body">
            <ul class="analytic d-flex list-unstyled">
                <li class="mx-1 text-uppercase">Hoàn thành<span class=" mx-1 text-success" id="finish">(10)</span>
                </li> |
                <li class="mx-1 text-uppercase">Đang xử lý<span class=" mx-1 text-warning" id="waiting">(5)</span>
                </li>|
                <li class="mx-1 text-uppercase">Đã hủy<span class=" mx-1 text-muted" id="cancel">(20)</span></li>
            </ul>

            <div class="btn btn-secondary
ml-1">
                <a href="?mod=order" class="text-white">Xem tất cả</a>
            </div>
            <form action="?mod=order&action=search" class="form-action form-inline py-3  mr-4" method="POST">

                <select class="form-control mr-1" id="status" name="status">
                    <option selected><?php if (isset($_POST['btn-search-status'])) {
    echo $_POST['status'];} else {
    echo "Chọn";
}
?></option>
                    <option>Hoàn thành</option>
                    <option>Đang xử lý</option>
                    <option>Hủy đơn</option>
                </select>
                <input type="submit" name="btn-search-status" value="Danh sách" class="btn btn-primary">

            </form>
            <table class="table table-striped table-checkall ">
                <thead>
                    <tr>
                        <th scope="col">Mã</th>
                        <th scope="col">Khách hàng</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá trị</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Thời gian</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
if (!empty($list_order)) {
    foreach ($list_order as $order) {
        ?>
                    <tr>
                        <td><?php echo $order['id_order'] ?></td>
                        <td><?php echo $order['customer'] ?> <br>
                            <?php echo $order['SDT'] ?></td>
                        <td><?php echo $order['product'] ?></td>
                        <td><?php echo $order['amount'] ?></td>
                        <td><?php echo currency_format($order['price'], 'đ'); ?></td>
                        <td><span class="badge badge-warning"><?php echo $order['status'] ?></span></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm rounded-0 text-white" type="button"
                                data-toggle="tooltip" data-placement="top" title="Delete"><i
                                    class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
}
}
?>
                </tbody>
            </table>


        </div>
    </div>
</div>


<?php
get_footer();
?>