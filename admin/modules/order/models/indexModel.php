<?php
function list_order()
{
    $result = db_fetch_array("SELECT * FROM `tbl_order`");
    return $result;
}
function search_order_status($status)
{
    return db_fetch_array("SELECT * FROM `tbl_order` where `status` like   '%" . $status . "%'");
}
function sum_order_status($status)
{
    return db_num_rows("SELECT * FROM `tbl_order` where `status` like   '%" . $status . "%'");

}