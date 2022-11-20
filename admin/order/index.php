<?php
require '../../dao/order.php';
require '../../global.php';
$action = "";
extract($_REQUEST);
switch ($action) {
    case "act_delete":
        order_delete($order_id);
        $orders = order_select_all();
        $VIEW_NAME = "order/list.php";
        break;
    case "act_detail":
        $order = order_select_by_id($order_id);
        extract($order);
        $order_details = order_select_detail($order_id);
        $VIEW_NAME = "order/detail.php";
        break;
    case "act_list":
        $items = order_select_all();
        $VIEW_NAME = "order/list.php";
        break;
    default:
        $orders = order_select_all();
        $VIEW_NAME = "order/list.php";
}
require '../layout.php';
