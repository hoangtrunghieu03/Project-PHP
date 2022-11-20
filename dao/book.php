<?php
require_once 'pdo.php';

function book_insert($isbn, $category, $title, $author, $nxb, $image, $description, $price, $discount, $dateTime)
{
    $sql = "INSERT INTO book(isbn, category_id, title, author, nxb, image, description, price, discount, date) VALUES (?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $isbn, $category, $title, $author, $nxb, $image, $description, $price, $discount, $dateTime);
}

function book_edit($isbn, $category, $title, $author, $nxb, $description, $price, $discount, $ISBN)
{
    $sql = "UPDATE book SET isbn=?, category_id=?, title=?, author=?, nxb=?, description=?, price=?, discount=? WHERE isbn=?";
    pdo_execute($sql, $isbn, $category, $title, $author, $nxb, $description, $price, $discount, $ISBN);
}

function book_edit_image($isbn, $category, $title, $author, $nxb, $image, $description, $price, $discount, $ISBN)
{
    $sql = "UPDATE book SET isbn=?, category_id=?, title=?, author=?, nxb=?, image=?, description=?, price=?, discount=? WHERE isbn=?";
    pdo_execute($sql, $isbn, $category, $title, $author, $nxb, $image, $description, $price, $discount, $ISBN);
}

function book_delete($isbn)
{
    $sql = "DELETE FROM book WHERE  isbn=?";
    pdo_execute($sql, $isbn);
}

function book_select_all()
{
    $sql = "SELECT * FROM book ORDER BY date DESC";
    return pdo_query($sql);
}

function book_select_by_isbn($isbn)
{
    $sql = "SELECT * FROM book WHERE isbn=?";
    return pdo_query_one($sql, $isbn);
}

function book_exist($isbn)
{
    $sql = "SELECT count(*) FROM book WHERE ma_hh=?";
    return pdo_query_value($sql, $isbn) > 0;
}



function book_select_by_category($category_id)
{
    $sql = "SELECT * FROM book WHERE category_id=?";
    return pdo_query($sql, $category_id);
}


function book_select_cung_loai($ma_loai, $ma_hh)
{
    $sql = "SELECT * FROM book WHERE ma_loai=? AND ma_hh NOT IN ($ma_hh)";
    return pdo_query($sql, $ma_loai);
}

function book_select_keyword($keyword)
{
    $sql = "SELECT * FROM book hh "
        . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
        . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    if (count(func_get_args()) > 1) {
        $start = func_get_args()[1];
        $limit = func_get_args()[2];
        $sql .= "LIMIT $start,$limit";
    }
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}

function book_select_page($total_products, $page_num, $limit)
{
    $start = ($page_num - 1) * $limit;
    $sql = "SELECT * FROM book ORDER BY ngay_nhap LIMIT $start,$limit";
    $products = pdo_query($sql);
    /*---------------- phan trang --------------*/
    $url = "/sampleproject/admin/hang-hoa/index.php?action=act_list";
    $nav_page = "";
    $total_pages = ceil($total_products / $limit);
    $previous = $page_num - 1;
    $pages_left = $total_pages - $page_num;
    if ($page_num > 1) {
        $nav_page .= "<span class='item'>
                    <a href='$url&page=1' class='page'>First</a>
                </span>
                <span class='item active'>
                    <a href='$url&page=$previous' class='page'>$previous</a>
                </span>
                ";
    }

    $nav_page .= "<span class='item active'>
                    <a href='$url&page=$page_num' class='page active-page'>$page_num</a>
                 </span>";

    if ($pages_left > 3) {
        $limit = 0;
        for ($i = $page_num + 1; $i <= $total_pages; $i++) {
            $nav_page .= "<span class='item'>
                    <a href='$url&page=$i' class='page'>$i</a>
                </span>";
            $limit++;
            if ($limit == 3) {
                break;
            }
        }
    } else {
        for ($i = $page_num + 1; $i <= $total_pages; $i++) {
            $nav_page .= "<span class='item'>
                    <a href='$url&page=$i' class='page' data-page='$i'>$i</a>
                </span>";
        }
    }
    if ($page_num < $total_pages) {
        $nav_page .= "<span class='item'>
                    <a href='$url&page=$total_pages' class='page'>Last</a>
                </span>
                ";
    }

    /*--------------- return ---------------*/
    return array("products" => $products, "nav_pages" => $nav_page);
}

function add_to_cart($isbn)
{
    $product = book_select_by_isbn($isbn);
    extract($product);
    if (isset($_SESSION['cart'])) {
        if (array_key_exists($isbn, $_SESSION['cart'])) {
            $_SESSION['cart'][$isbn]['so_luong'] = $_SESSION['cart'][$isbn]['so_luong'] + 1;
        } else {
            $_SESSION['cart'][$isbn] = array("ten_hh" => $ten_hh, "hinh" => $hinh, "don_gia" => $don_gia, "so_luong" => 1);
        }
    } else {
        $_SESSION['cart'] = array();
        $_SESSION['cart'][$isbn] = array("ten_hh" => $ten_hh, "hinh" => $hinh, "don_gia" => $don_gia, "so_luong" => 1);
    }
}

function count_cart()
{
    if (isset($_SESSION['cart'])) {
        $tong = 0;
        foreach ($_SESSION['cart'] as $product) {
            $tong += $product['so_luong'];
        }
        return $tong;
    } else {
        return null;
    }
}

function tinh_tong_gio_hang()
{
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $product) {
        extract($product);
        $tong_product = $don_gia * $so_luong;
        $subtotal += $tong_product;
    }
    return number_format($subtotal, 1, ".", ",");
}
