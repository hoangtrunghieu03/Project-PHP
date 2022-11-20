<?php
require '../../dao/account.php';
require '../../global.php';
$action = "";
extract($_REQUEST);
switch ($action) {
    case "act_update":
        $flag = kiem_loi_khach_hang($mat_khau, $ho_ten, $email);
        $VIEW_NAME = "khach-hang/edit.php";
        break;
    case "act_delete":
        account_delete($id);
        $accounts = account_select_all();
        $VIEW_NAME = "account/list.php";
        break;
    case "act_activate":
        account_activate($account_id);
        $accounts = account_select_all();
        $VIEW_NAME = "account/list.php";
        break;
    case "act_deactivate":
        account_deactivate($account_id);
        $accounts = account_select_all();
        $VIEW_NAME = "account/list.php";
        break;
    case "act_edit":
        $item = khach_hang_select_by_id($ma_kh);
        extract($item);
        $VIEW_NAME = "khach-hang/edit.php";
        break;
    case "act_list":
    default:
        $accounts = account_select_all();
        $VIEW_NAME = "account/list.php";
        break;
        // default:
        //     $VIEW_NAME = "khach-hang/new.php";
}
require '../layout.php';
