<?php
/**
 * Created by PhpStorm.
 * User: 许建涛
 * Date: 2018/3/25
 * Time: 22:12
 *//*
 *
 *加载thinkPHP.php
 * 2加载核心文件 。/thinkpHp/lib/core
 * 3 加载项目的文件 分析URL 调用相关控制器
 * m module 模块 控制器
 * a action  方法 控制器
 *
 */
define('APP_DEBUG',true);
define('APP_NAME','APP');
define('APP_PATH','./APP/');
require('../ThinkPHP/ThinkPHP.php');