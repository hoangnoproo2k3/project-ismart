<?php

function construct()
{
    load_model('index');
}
function accountAction()
{
    $id = (int) $_GET['id'];
    $data['admin'] = get_account_id($id);
    load_view('account', $data);
}
function updateAccountAction()
{
    $id = (int) $_GET['id'];
    if (isset($_POST['btn_update'])) {
        $fullname = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $data = array(
            'fullname' => $fullname,
            'username' => $username,
            'email' => $email,
            'address' => $address,
        );
        update_admin($data, $id);
        // show_array($data);
        header("Location:?mod=users&controller=team&action=list_users");
    }
}
function passViewAction()
{
    $id = (int) $_GET['id'];
    $data['admin'] = get_account_id($id);
    load_view('updatePass', $data);
}
function updatePassAction()
{
    $id = (int) $_GET['id'];
    $admin = get_account_id($id);
    // show_array($data);
    if (isset($_POST['btn_update'])) {
        $success = array();
        $error = array();
        // Xử lý input password
        if (empty($_POST['password'])) {
            $error['password'] = "Bạn cần phải nhập password";
        } else if (md5($_POST['password']) != $admin['password']) {
            $error['password'] = "Mật khẩu không đúng!";
        } else {
            $success['password'] = $_POST['password'];
        }
        //Xử lý valition form new-password
        if (empty($_POST['new_pass'])) {
            $error['new_pass'] = "Bạn cần phải nhập new_pass";
        } else {
            if ((strlen($_POST['new_pass']) >= 6 && strlen($_POST['new_pass']) <= 32)) {
                $pattern = "/^[A-Za-z0-9_!@#$%^&*()\.]{6,32}$/";
                if (!preg_match($pattern, $_POST['new_pass'], $matches)) {
                    $error['new_pass'] = 'new_pass có ký tự chữ số và ký tự đặc biệt, không chứa khoảng trắng';
                } else {
                    $new_pass = $_POST['new_pass'];
                    $success['new_pass'] = $new_pass;
                }
            } else {
                $error['new_pass'] = "new_pass độ dài từ 6-32 ký tự";
            }
        }
        // Xử lý re-pass
        if (empty($_POST['re_pass'])) {
            $error['re_pass'] = "Bạn cần phải nhập re_pass";
        } else {
            if ($_POST['re_pass'] != $new_pass) {
                $error['re_pass'] = "Bạn nhập không đúng";
            } else {
                $re_pass = md5($_POST['re_pass']);
            }
        }
        if (empty($error)) {
            $pass = array(
                'password' => $re_pass,
            );
            update_admin($pass, $id);
            header("Location:?mod=users&controller=team&action=list_users");
        } else {
            $error['account'] = "Bạn đã nhập sai tài khoản hoặc mật khẩu";
            $data['list_error'] = $error;
            $data['list_success'] = $success;
            // show_array($success);
            load_view('updatePass', $data);
        }
    }
}