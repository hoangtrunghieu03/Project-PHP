<?php
require_once 'pdo.php';

function don_hang_insert($ma_kh, $ho_ten, $tong_tien, $pttt, $dia_chi, $email, $so_dien_thoai, $ngay_tao, $trang_thai)
{
    $sql = "INSERT INTO don_hang(ma_kh,ho_ten,tong_tien,pttt,dia_chi,email,so_dien_thoai,ngay_tao,trang_thai) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    return pdo_execute($sql, $ma_kh, $ho_ten, $tong_tien, $pttt, $dia_chi, $email, $so_dien_thoai, $ngay_tao, $trang_thai);
}

function don_hang_delete($ma_dh)
{
    $sql = "DELETE FROM don_hang WHERE ma_dh=?";
    if (is_array($ma_dh)) {
        foreach ($ma_dh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_dh);
    }
}

function don_hang_select_all()
{
    $sql = "SELECT * FROM don_hang";
    return pdo_query($sql);
}

function don_hang_select_by_id($ma_dh)
{
    $sql = "SELECT * FROM don_hang WHERE ma_dh=?";
    return pdo_query_one($sql, $ma_dh);
}

function chi_tiet_insert($ma_dh, $ma_hh, $so_luong)
{
    $sql = "INSERT INTO chi_tiet_don_hang(ma_dh,ma_hh,so_luong) VALUES (?, ?, ?)";
    pdo_execute($sql, $ma_dh, $ma_hh, $so_luong);
}

function don_hang_chi_tiet($ma_dh)
{
    $sql = "SELECT hh.ten_hh,hh.don_gia,hh.hinh,ct.so_luong,(ct.so_luong*hh.don_gia) AS thanh_tien FROM chi_tiet_don_hang ct JOIN don_hang dh ON ct.ma_dh = dh.ma_dh JOIN hang_hoa hh ON ct.ma_hh = hh.ma_hh WHERE dh.ma_dh = ?";
    return pdo_query($sql, $ma_dh);
}

function khach_hang($ma_dh)
{
    $sql = "SELECT ma_kh FROM don_hang WHERE ma_dh = ?";
    return pdo_query_one($sql, $ma_dh)['ma_kh'];
}

function tong_tien_don_hang($ma_dh)
{
    $sql = "SELECT tong_tien FROM don_hang WHERE ma_dh = ?";
    return pdo_query_one($sql, $ma_dh)['tong_tien'];
}
