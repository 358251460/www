<?php
/**
 * Created by PhpStorm.
 * User: 许建涛
 * Date: 2018/4/11
 * Time: 11:15
 */
//第一步 浏览者 -》调用控制器，对他发出指令
// 2控制器 》按指令选取一个合适的模型
//3模型 -》按控制器指令取相应的数据
//4控制器 -》 按指令选取相应视图
//6把第三步取到的数据按用户想要的样子显示出来
require_once('./libs/Conteoller/testController.php');
require_once('./libs/Model/testModel.php');
require_once('./libs/View/testView.php');
$testController = new testController();
$testController->show();