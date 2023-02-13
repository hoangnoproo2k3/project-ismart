<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    // header("Location:?mod=login");
    load_view('index');
}
function loginAction()
{
    if (isset($_POST['btn_login'])) {
        $success = array();
        $error = array();
        // Xử lý input username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống username";
        } else
        if (strlen($_POST['username']) >= 6 && (strlen($_POST['username']) <= 32)) {
            $username = $_POST['username'];
            $success['username'] = $username;
        } else {
            $error['username'] = "Username độ dài từ 6-32 ký tự";
        }
        // Xử lý input password
        if (empty($_POST['password'])) {
            $error['password'] = "Bạn cần phải nhập password";
        } else {
            if ((strlen($_POST['password']) >= 6 && strlen($_POST['password']) <= 32)) {
                $pattern = "/^[A-Za-z0-9_!@#$%^&*()\.]{6,32}$/";
                if (!preg_match($pattern, $_POST['password'], $matches)) {
                    $error['password'] = 'Password có ký tự chữ số và ký tự đặc biệt, không chứa khoảng trắng';
                } else {
                    $password = md5($_POST['password']);
                }
            } else {
                $error['password'] = "Password độ dài từ 6-32 ký tự";
            }
        }

        //Xử lý không có lỗi chuyển hướng sang trang chủ
        if (empty($error) && check_admin_by_login($username, $password)) {
            $_SESSION['admin'] = array();
            $_SESSION['admin']['is_login'] = true;
            $_SESSION['admin']['username'] = $username;
            $id_admin = id_admin($username, $password);
            $_SESSION['admin']['id'] = $id_admin['id_admin'];
            header("Location:?mod=dashboard");
        } else {
            $error['account'] = "Bạn đã nhập sai tài khoản hoặc mật khẩu";
            $data['list_error'] = $error;
            $data['list_success'] = $success;
            // show_array($data);
            load_view('index', $data);
        }
    }
}
function logoutAction()
{
    unset($_SESSION['admin']);
    header("Location:?mod=login");

}