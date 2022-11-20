<?php
session_start();
extract($_POST);
switch ($action) {
    case "add-to-cart":
        require "../dao/book.php";
        $book = book_select_by_isbn($isbn);
        extract($book);
        if (isset($_SESSION['cart'])) {
            if (array_key_exists($isbn, $_SESSION['cart'])) {
                $_SESSION['cart'][$isbn]['quantity'] = $_SESSION['cart'][$isbn]['quantity'] + $quantity;
            } else {
                $_SESSION['cart'][$isbn] = array("title" => $title, "image" => $image, "price" => $price * (1 - $discount), "quantity" => $quantity);
            }
        } else {
            $_SESSION['cart'] = array();
            $_SESSION['cart'][$isbn] = array("title" => $title, "image" => $image, "price" => $price * (1 - $discount), "quantity" => $quantity);
        }
        echo json_encode($book);
        break;
    case "delete-from-cart":
        unset($_SESSION['cart'][$isbn]);
        break;
    case "update_cart":
        if ($up_or_down == "cart_quantity_up") {
            $_SESSION['cart'][$key]['quantity'] = $_SESSION['cart'][$key]['quantity'] + 1;
        } else {
            $_SESSION['cart'][$key]['quantity'] = $_SESSION['cart'][$key]['quantity'] - 1;
        }
        break;
}
