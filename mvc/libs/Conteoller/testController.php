<?php
/**
 * Created by PhpStorm.
 * User: 许建涛
 * Date: 2018/4/11
 * Time: 11:08
 */
//控制器的作用是调用模型，并调用视图，将模型产生的数据传递给视图。并让相关视图显示
class  testController
{
    function show()
    {
        $testMdel = new  testModel();
        $data = $testMdel->get();
        $testView = new testView();
        $testView->display($data);


    }
}