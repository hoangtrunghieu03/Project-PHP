<?php
require_once 'pdo.php';

function order_insert($account_id, $email, $phone_number, $address, $total, $date, $status, $note)
{
    $sql = "INSERT INTO order_account(account_id,email,phone_number,address,total,date,status,note) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    return pdo_execute($sql, $account_id, $email, $phone_number, $address, $total, $date, $status, $note);
}

function order_detail_insert($order_id, $isbn, $quantity)
{
    $sql = "INSERT INTO order_detail(order_id,book_isbn,quantity) VALUES (?, ?, ?)";
    return pdo_execute($sql, $order_id, $isbn, $quantity);
}

function order_select_all()
{
    $sql = "SELECT * FROM order_account";
    return pdo_query($sql);
}

function order_select_by_id($order_id)
{
    $sql = "SELECT * FROM order_account WHERE id=?";
    return pdo_query_one($sql, $order_id);
}

function order_select_detail($order_id)
{
    $sql = "SELECT b.title,b.price,b.image,d.quantity,(d.quantity*b.price) AS total FROM order_detail d JOIN order_account o ON d.order_id = o.id JOIN book b ON d.book_isbn = b.isbn WHERE o.id = ?";
    return pdo_query($sql, $order_id);
}

function order_delete($order_id)
{
    $sql = "DELETE FROM order_account WHERE id = ?";
    return pdo_execute($sql, $order_id);
}
