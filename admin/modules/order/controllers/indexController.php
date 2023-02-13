<?php

function construct()
{
//    echo "DÙng chung, load đầu tiên";
    load('helper', 'format');

    load_model('index');
}

function indexAction()
{
    $list_order = list_order();
    $data['list_order'] = $list_order;
    // $data['num_order'] = sum_order_status();
    load_view('index', $data);
}
function searchAction()
{
    if (isset($_POST['btn-search-status'])) {
        $status = $_POST['status'];
        $list_order = search_order_status($status);
        $data['list_order'] = $list_order;

        // show_array($data);
        load_view('index', $data);
    }
}
function numStatusAction()
{
    // $amount = $_POST['order'];
    // $num = sum_order_status();
    // echo $num;
    // if (isset($_POST['btn-search-status'])) {
    //     $status = $_POST['status'];
    //     $num_order = sum_order_status($status);
    //     $data['num_order'] = $num_order;
    //     echo $num_order;
    // }
    // load_view('index', $data);

}