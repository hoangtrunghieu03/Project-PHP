<?php
require_once 'pdo.php';

function comment_insert($account_id, $book_isbn, $content, $date)
{
    $sql = "INSERT INTO comment(account_id, book_isbn, content, date) VALUES (?,?,?,?)";
    pdo_execute($sql, $account_id, $book_isbn, $content, $date);
}



function comment_delete($comment_id)
{
    $sql = "DELETE FROM comment WHERE id=?";
    pdo_execute($sql, $comment_id);
}

function comment_select_all()
{
    $sql = "SELECT * FROM comment ORDER BY date DESC";
    return pdo_query($sql);
}



function comment_select_by_book($book_isbn)
{
    $sql = "SELECT * FROM comment WHERE book_isbn=? AND isApprove = 'yes'";
    return pdo_query($sql, $book_isbn);
}

function comment_approve($comment_id)
{
    $sql = "UPDATE comment SET isApprove = 'yes' WHERE id = ?";
    return pdo_execute($sql, $comment_id);
}

function comment_unapprove($comment_id)
{
    $sql = "UPDATE comment SET isApprove = 'no' WHERE id = ?";
    return pdo_execute($sql, $comment_id);
}
