<?php

function check_admin_by_login($username, $password)
{
    if (db_fetch_row("SELECT * FROM `tbl_admin` WHERE `username` = '{$username}' and `password`='{$password}'")) {
        return true;
    }
    return false;
}
function id_admin($username, $password)
{
    return db_fetch_row("SELECT `id_admin` FROM `tbl_admin` WHERE `username` = '{$username}' and `password`='{$password}'");
}