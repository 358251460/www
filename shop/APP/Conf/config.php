<?php
return array(
	//'配置项'=>'配置值'
   // 'name'=>'Donsen',
   // 'LOAD_EXT_CONFIG'=>'user',
  //  'URL_MODEL'=>2,
    //'URL_HTML_SUFFIX'=>'shtml|html|xml',

    'SHOW_PAGE_TRACE'=>true,
    'SHOW_RUN_TIME'=>true,
    'SHOW_ADV_TIME'=>true,
    'SHOW_DB_TIMES' => true, // 显示数据库查询和写入次数
    'SHOW_CACHE_TIMES' => true, // 显示缓存操作次数
    'SHOW_USE_MEM' => true, // 显示内存开销
    'SHOW_LOAD_FILE' => true, // 显示加载文件数
    'SHOW_FUN_TIMES' => true, // 显示函数调用次数

    'DB_TYPE'=>'mysql',//数据类型
    'DB_HOST'=>'localhost',//数据库服务器地址
    'DB_NAME'=>'xk',//数据库名
    'DB_USER'=>'root',//数据库用户名
    'DB_PWD'=>'',//数据库用户密码
    'DB_PORT'=>'3306',//数据库端口
   'DB_PREFIX'=>'',//数据库表前缀
    'DB_RW_SEPARATE'=>'true',//开启主从读写分离
    'DB_MASTER_NUM'=>'1',//多个主数据库服务器

);
?>