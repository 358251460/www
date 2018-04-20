<?php
/**
 * Created by PhpStorm.
 * User: 许建涛
 * Date: 2018/3/31
 * Time: 21:40
 */
namespace Home\Controller;
use Think\Controller;
//登录功能
class GoodController extends Controller
{
    function showlist()
    {
        //商品列表
        $this->display();
    }

//注册功能
    function detail()
    {
        $this->display();

    }
}