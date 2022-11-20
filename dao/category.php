<?php
require_once 'pdo.php';

function category_insert($cat_name)
{
    $sql = "INSERT INTO category(cat_name) VALUES(?)";
    pdo_execute($sql, $cat_name);
}


function category_update($id, $cat_name)
{
    $sql = "UPDATE category SET cat_name=? WHERE id=?";
    pdo_execute($sql, $cat_name, $id);
}


function category_delete($id)
{
    $sql = "DELETE FROM category WHERE id=?";
    // if (is_array($id)) {
    //     foreach ($ma_loai as $ma) {
    //         pdo_execute($sql, $ma);
    //     }
    // } else {
    //     pdo_execute($sql, $id);
    // }
    pdo_execute($sql, $id);
}


function category_select_all()
{
    $sql = "SELECT * FROM category ORDER BY id DESC";
    return pdo_query($sql);
}


function category_select_by_id($ma_loai)
{
    $sql = "SELECT * FROM category WHERE id=?";
    return pdo_query_one($sql, $ma_loai);
}


function category_exist($ma_loai)
{
    $sql = "SELECT count(*) FROM category WHERE id=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}
