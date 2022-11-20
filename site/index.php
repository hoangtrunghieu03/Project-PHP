<?php
require_once '../global.php';
//$_SESSION['request_uri'] = $_SERVER['REQUEST_URI'];
$page = "";
extract($_REQUEST);
switch ($page) {
    case "introduction":
        $VIEW_NAME = "introduction.php";
        break;
    case "contact":
        $VIEW_NAME = "contact.php";
        break;
    case "book-detail":
        require '../dao/category.php';
        require '../dao/book.php';
        require '../dao/comment.php';
        $categories = category_select_all();
        $comments = comment_select_by_book($isbn);
        $book = book_select_by_isbn($isbn);
        extract($book);
        $VIEW_NAME = "book-detail.php";
        break;
    case "cart":
        $VIEW_NAME = "cart.php";
        break;
    case "login":
        if (isset($_POST['submit'])) {
            require "../dao/account.php";
            extract($_POST);
            $role = "user";
            $isActive = "no";
            account_insert($name, $email, $password, $role, $isActive);
            $_SESSION['message_register'] = "Tạo tài khoản thành công!";
            header("location:?page=login");
            exit();
        }
        $VIEW_NAME = "login.php";
        break;
    case "login_action":
        require "../dao/account.php";
        if (account_login($email, $password)) {
            $_SESSION['account'] = account_login($email, $password);
            header("location:./");
        } else {
            $_SESSION['message_login'] = "Email hoặc mật khẩu không đúng!";
            $VIEW_NAME = "login.php";
        }
        break;
    case "category":
        require "../dao/book.php";
        require '../dao/category.php';
        $categories = category_select_all();
        $books = book_select_by_category($cat_id);
        $VIEW_NAME = "category.php";
        break;
    case "logout":
        unset($_SESSION['account']);
        header("location:./");
        break;
    case "checkout":
        $VIEW_NAME = 'checkout.php';
        break;
    case "order":
        require '../dao/order.php';
        $date = date("Y-m-d", time());
        $status = "Đang xử lý";
        $account_id = $_SESSION['account']['id'];
        $order_id = order_insert($account_id, $email, $phone_number, $address, $subtotal, $date, $status, $note);
        foreach ($_SESSION['cart'] as $isbn => $cart_item) {
            $quantity = $cart_item['quantity'];
            order_detail_insert($order_id, $isbn, $quantity);
        }
        $VIEW_NAME = 'order_confirm.php';
        break;
    default:
        require '../dao/book.php';
        require '../dao/category.php';
        $categories = category_select_all();
        $books = book_select_all();
        $VIEW_NAME = "home.php";
}
require 'layout.php';
