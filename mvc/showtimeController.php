

<?php
/**
 * Created by PhpStorm.
 * User: 许建涛
 * Date: 2018/4/16
 * Time: 16:22
 */
require_once './showtimemodel.php';
if (!empty($_GET['type'])&& $_GET['type']=="2")
{
    $obj1 = new DateTImeModel();
    $t1 = $obj1->GetDate();
}
else if (!empty($_GET['type'])&& $_GET['type']=="1")
{
    $obj1 = new DateTImeModel();
    $t1 = $obj1->GetDateTime();
}else {
    $obj1 = new DateTImeModel();
    $t1 = $obj1->GetTime();
}
include './showtimeView.php';