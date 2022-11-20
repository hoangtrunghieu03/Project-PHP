<?php
require '../../dao/category.php';
require '../../global.php';
//require '../kiem-loi/loai.php';

$action = "";
extract($_REQUEST);
switch ($action) {
    case "act_insert_form":
        $VIEW_NAME = "category/new.php";
        break;
    case "act_insert":
        // $flag = kiem_loi_loai($ten_loai);
        // if ($flag) {
        //     try {
        //         loai_insert($ten_loai);
        //         unset($ten_loai, $ma_loai);
        //         $MESSAGE = "Thêm mới thành công!";
        //     } catch (Exception $exc) {
        //         $MESSAGE = "Thêm mới thất bại!";
        //     }
        // }
        category_insert($cat_name);
        header("location:?action=act_list");
        break;
    case "act_update":
        $flag = kiem_loi_loai($ten_loai);
        if ($flag) {
            try {
                category_update($ma_loai, $ten_loai);
                $MESSAGE = "Cập nhật thành công!";
            } catch (Exception $exc) {
                $MESSAGE = "Cập nhật thất bại!";
            }
            $items = category_select_all();
            $VIEW_NAME = "loai-hang/list.php";
        } else {
            $VIEW_NAME = "loai-hang/edit.php";
        }
        break;
    case "act_delete":
        // try {
        //     category_delete($ma_loai);
        //     $items = category_select_all();
        //     $MESSAGE = "Xóa thành công!";
        // } catch (Exception $exc) {
        //     $MESSAGE = "Xóa thất bại!";
        // }
        category_delete($id);
        header("location:?action=act_list");
        break;
    case "act_edit_form":
        $category = category_select_by_id($id);
        $VIEW_NAME = "category/edit.php";
        break;
    case "act_edit":
        // echo $id;
        // echo "<br>";
        // echo $cat_name;
        // die;
        category_update($id, $cat_name);
        header("location:?action=act_list");
        break;
    case "act_list":
        $categories = category_select_all();
        $VIEW_NAME = "category/list.php";
        break;
    default:
        $categories = category_select_all();
        $VIEW_NAME = "category/list.php";
}
require '../layout.php';
