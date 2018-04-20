<?php
/**
 * Created by PhpStorm.
 * User: 许建涛
 * Date: 2018/4/16
 * Time: 22:53
 */

class DateTImeModel
{
    function GetTime()
    {
        return Date("H:i:s");
    }
    function GetDate()
    {
        return Date("Y年m月d日");
    }
    function GetDateTime()
    {
        return Date("Y年m月d日 H:i:s");
    }
}