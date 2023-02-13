<?php

function new_admin_insert($data)
{
    return db_insert('tbl_admin', $data);
}
function get_list_admin()
{
    $result = db_fetch_array("SELECT * FROM `tbl_admin`");
    return $result;
}
function delete_admin($id)
{
    return db_delete('tbl_admin', "`id_admin`={$id}");
}
function update_admin($data, $id)
{
    return db_update('tbl_admin', $data, "`id_admin`={$id}");
}

function search_admin_permission($permission)
{
    return db_fetch_array("SELECT * FROM `tbl_admin` where `permission` like   '%" . $permission . "%'");
}
function search_name($name)
{
    return db_fetch_array("SELECT * FROM `tbl_admin` where `fullname` like   '%" . $name . "%'");
}
function get_account_id($id)
{
    return db_fetch_row("SELECT * FROM `tbl_admin` WHERE `id_admin` = {$id}");
}