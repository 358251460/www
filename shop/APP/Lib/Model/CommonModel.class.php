<?php
/**
 * Created by PhpStorm.
 * User: 许建涛
 * Date: 2018/3/30
 * Time: 16:21
 */
class  CommonModel extends Model
{
    public  function strmake($str)
    {
        return md5(sha1(md5($str)));
    }
}