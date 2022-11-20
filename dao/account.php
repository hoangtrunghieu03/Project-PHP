<?php
require_once 'pdo.php';

function account_insert($name, $email, $password, $role, $isActive)
{
    $sql = "INSERT INTO account(name, email, password, role,isActive) VALUES (?, ?, ?, ?, ?)";
    pdo_execute($sql, $name, $email, $password, $role, $isActive);
}


function account_activate($id)
{
    $sql = "UPDATE account SET isActive='yes' WHERE id=?";
    pdo_execute($sql, $id);
}

function account_deactivate($id)
{
    $sql = "UPDATE account SET isActive='no' WHERE id=?";
    pdo_execute($sql, $id);
}
function account_delete($id)
{
    $sql = "DELETE FROM account  WHERE id=?";
    pdo_execute($sql, $id);
}

function account_login($email, $password)
{
    $sql = "SELECT * FROM account WHERE email = ? AND password = ?";
    return pdo_query_one($sql, $email, $password);
}

function account_select_all()
{
    $sql = "SELECT * FROM account";
    return pdo_query($sql);
}

function account_select_by_id($account_id)
{
    $sql = "SELECT * FROM account WHERE id=?";
    return pdo_query_one($sql, $account_id);
}
