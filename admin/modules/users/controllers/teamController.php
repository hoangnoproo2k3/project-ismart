<?php
function construct()
{
    load_model('index');
}
function list_usersAction()
{
    $list_admin = get_list_admin();
    $data['list_admin'] = $list_admin;
    load_view('list_users', $data);
}

function view_addAction()
{
    load_view('add_user');
}
function module_addAction()
{
    if (isset($_POST['btn_add'])) {
        $fullname = $_POST['name'];
        $username = $_POST['username'];
        $pass = md5($_POST['pass']);
        $email = $_POST['email'];
        $permission = $_POST['permission'];
        $data = array(
            'fullname' => $fullname,
            'username' => $username,
            'password' => $pass,
            'email' => $email,
            'permission' => $permission,
        );
        new_admin_insert($data);
        header("Location:?mod=users&controller=team&action=list_users");
    }
}

function searchAction()
{
    if (isset($_POST['btn-search_permission'])) {
        $permission = $_POST['permission'];
        // echo $permission;
        $list_admin = search_admin_permission($permission);
        // show_array($list_admin);
        $data['list_admin'] = $list_admin;
        load_view('list_users', $data);
    }
}
function searchNameAction()
{
    if (isset($_POST['btn-search'])) {
        $name = $_POST['search'];
        $list = search_name($name);
        $data['list_admin'] = $list;
        load_view('list_users', $data);
    }
}

function updateViewAction()
{
    $list_admin = get_list_admin();
    $data['list_admin'] = $list_admin;
    load_view('update_user', $data);
}
function updateAction()
{
    $id = (int) $_GET['id'];
    // echo $id;
    if (isset($_POST['btn_add'])) {
        $fullname = $_POST['name'];
        $permission = $_POST['permission'];
        $data = array(
            'fullname' => $fullname,
            'permission' => $permission,
        );
        update_admin($data, $id);
        header("Location:?mod=users&controller=team&action=list_users");
    }
}
function deleteAction()
{
    $id = (int) $_GET['id'];
    delete_admin($id);
    header("Location:?mod=users&controller=team&action=list_users");
}