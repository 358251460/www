<?php
/**
 * Created by PhpStorm.
 * User: 许建涛
 * Date: 2018/3/31
 * Time: 21:37
 */
namespace Home\Controller;
use Think\Controller;
use Think\Db\Driver;
use Think\Verify;         //验证码


class UserController  extends Controller
{
//登录功能
function login()
{

       $cfg =array(
           'imageH' => 45,
           'imageW' => 110,
           'fontSize' => 15,
           'length' =>  4,
           'fontttf'=>'4.ttf',
       );
   $very = new Verify($cfg);
   $very->entry();//输出验证码

}
//注册功能
    function  register()
    {
        if (!empty($_POST)) {
            $contents = $_POST['contents'];
            $id = $_POST['id'];
            $pwd = $_POST['pwd'];


           $vry = new Verify();
            if ($vry->check($contents)) {

                $user = M('score');
                $sql =$user ->select('学号');
                var_dump($sql);

                echo '验证正确';
            } else {
                echo '验证错误';
            }
        }
        $this->display();
    }
}



