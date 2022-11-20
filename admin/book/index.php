<?php
require '../../dao/category.php';
require '../../global.php';
require '../../dao/book.php';
//require '../kiem-loi/hang-hoa.php';

$action = "";
extract($_REQUEST);
switch ($action) {
    case "act_insert_form":
        $categories = category_select_all();
        $VIEW_NAME = "book/new.php";
        break;
    case "act_insert":
        // $flag = kiem_loi_book($ten_hh, $don_gia, $giam_gia, $ngay_nhap);
        // if ($flag) {
        //     try {
        //         $up_hinh = save_file("hinh", "$IMAGE_DIR/products/") . "";
        //         $hinh = strlen($up_hinh) > 0 ? $up_hinh : 'product.png';
        //         $ngay_nhap = date("Y-m-d", strtotime($ngay_nhap));
        //         book_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $ngay_nhap, $mo_ta);
        //         $MESSAGE = "Thêm mới thành công!";
        //     } catch (Exception $exc) {
        //         $MESSAGE = "Thêm mới thất bại!";
        //         echo $exc;
        //     }
        // }
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $dateTime = date("Y-m-d h:i:s", time());
        $image = save_file('image', __DIR__ . "/../../content/images");
        book_insert($isbn, $category, $title, $author, $nxb, $image, $description, $price, $discount, $dateTime);
        header("location:?action=act_list");
        break;
        // case "act_update":
        //     // $flag = kiem_loi_book($ten_hh, $don_gia, $giam_gia, $ngay_nhap);
        //     if ($flag) {
        //         try {
        //             book_eidt($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
        //             $up_hinh = save_file("up_hinh", "$IMAGE_DIR/products/") . "";
        //             $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
        //             $MESSAGE = "Cập nhật thành công!";
        //         } catch (Exception $exc) {
        //             $MESSAGE = "Cập nhật thất bại!";
        //         }
        //         $items = book_select_all();
        //         $VIEW_NAME = "hang-hoa/list.php";
        //     } else {
        //         $VIEW_NAME = "hang-hoa/edit.php";
        //     }
        //     break;
    case "act_delete":
        // try {
        //     book_delete($ma_hh);
        //     $items = book_select_all();
        //     $MESSAGE = "Xóa thành công!";
        // } catch (Exception $exc) {
        //     $MESSAGE = "Xóa thất bại!";
        // }
        $image = book_select_by_isbn($isbn);
        unlink(__DIR__ . "/../../content/images/" . $image['image']);
        book_delete($isbn);
        header("location:./");
        break;
    case "act_edit_form":
        $book = book_select_by_isbn($isbn);
        extract($book);
        $categories = category_select_all();
        $VIEW_NAME = "book/edit.php";
        break;
    case "act_edit":
        if ($_FILES['image']['name'] != "") {
            $image = book_select_by_isbn($ISBN);
            unlink(__DIR__ . "/../../content/images/" . $image['image']);
            $image = save_file('image', __DIR__ . "/../../content/images");
            book_edit_image($isbn, $category, $title, $author, $nxb, $image, $description, $price, $discount, $ISBN);
        } else {
            book_edit($isbn, $category, $title, $author, $nxb, $description, $price, $discount, $ISBN);
        }
        header("location:./");
        break;
    case "act_list":
        // $total_products = count(book_select_all());
        // $page_num = isset($page) ? $page : 1;
        // $limit = 2;
        // $items = book_select_page($total_products, $page_num, $limit)["products"];
        // $nav_page = book_select_page($total_products, $page_num, $limit)["nav_pages"];
        // $VIEW_NAME = "hang-hoa/list.php";
        $books = book_select_all();
        $VIEW_NAME = "book/list.php";
        break;
    default:
        $books = book_select_all();
        $VIEW_NAME = "book/list.php";
}
require '../layout.php';
