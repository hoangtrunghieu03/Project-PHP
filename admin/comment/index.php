<?php
require '../../dao/comment.php';
require '../../dao/account.php';
require '../../global.php';

$action = "";
extract($_REQUEST);
switch ($action) {
    case "act_delete":
        comment_delete($comment_id);
        header("location:./");
        exit();
        break;
    case 'act_approve':
        comment_approve($comment_id);
        header("location:./");
        exit();
        break;
    case 'act_unapprove':
        comment_unapprove($comment_id);
        header("location:./");
        exit();
        break;
    default:
        $comments = comment_select_all();
        $VIEW_NAME = "comment/list.php";
}
require '../layout.php';
