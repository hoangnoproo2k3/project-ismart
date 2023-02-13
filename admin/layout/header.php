<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/solid.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Admintrator</title>
</head>

<body>
    <style>
    .nav-link {
        display: block;
        padding: 0.8rem 1rem;
        position: relative;
        border-bottom: 0.5px solid #efefef;
    }

    .fa-angle-right,
    .fa-angle-down {
        padding: 10px 20px;
    }
    </style>
    <div id="warpper" class="nav-fixed">
        <nav class="topnav shadow navbar-light bg-white d-flex">
            <div class="navbar-brand"><a href="?mod=dashboard" class="d-block mx-3 my-2">ISMART ADMIN</a></div>
            <div class="nav-right ">
                <div class="btn-group mr-auto">
                    <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="plus-icon fas fa-plus-circle"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="?view=add-post">Thêm bài viết</a>
                        <a class="dropdown-item" href="?view=add-product">Thêm sản phẩm</a>
                        <a class="dropdown-item" href="?view=list-order">Thêm đơn hàng</a>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Xin chào: <b><?php if (isset($_SESSION['admin'])) {echo $_SESSION['admin']['username'];}?> </b>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item"
                            href="?mod=users&controller=account&action=account&id=<?php if (isset($_SESSION['admin'])) {echo $_SESSION['admin']['id'];}?>">Tài
                            khoản</a>
                        <a class="dropdown-item" href="?mod=login&action=logout">Thoát</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end nav  -->
        <div id="page-body" class="d-flex">
            <div id="sidebar" class="bg-white">
                <ul id="sidebar-menu">
                    <li class="nav-link">
                        <a href="?mod=dashboard">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="far fa-folder"></i>
                            </div>
                            Dashboard
                        </a>
                        <!-- <i class="arrow fas fa-angle-right"></i> -->
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="far fa-folder"></i>
                            </div>
                            Trang
                        </a>
                        <i class="arrow fas fa-angle-right"></i>

                        <ul class="sub-menu">
                            <li><a href="?view=add-post">Thêm mới</a></li>
                            <li><a href="?view=list-post">Danh sách</a></li>
                        </ul>
                    </li>
                    <li class="nav-link">
                        <a href="?mod=post">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="far fa-folder"></i>
                            </div>
                            Bài viết
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="?view=add-post">Thêm mới</a></li>
                            <li><a href="?view=list-post">Danh sách</a></li>
                            <li><a href="?view=cat">Danh mục</a></li>
                        </ul>
                    </li>
                    <li class="nav-link ">
                        <a href="?mod=product">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="far fa-folder"></i>
                            </div>
                            Sản phẩm
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="?view=list-product">Danh sách</a></li>
                            <li><a href="?view=add-product">Thêm mới</a></li>
                            <li><a href="?view=cat-product">Danh mục</a></li>
                        </ul>
                    </li>
                    <li class="nav-link">
                        <a href="?mod=order">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="far fa-folder"></i>
                            </div>
                            Đơn hàng
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="?mod=users&controller=team&action=list_users">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="far fa-folder"></i>
                            </div>
                            Admin
                        </a>
                        <i class="arrow fas fa-angle-right"></i>

                        <ul class="sub-menu mt-2">
                            <li><a
                                    href="?mod=users&controller=account&action=account&id=<?php if (isset($_SESSION['admin'])) {echo $_SESSION['admin']['id'];}?>">Tài
                                    khoản của tôi</a></li>
                            <li><a href="?mod=users&controller=team&action=list_users">Danh sách admin</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="wp-content">