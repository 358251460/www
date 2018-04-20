<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){

    //  echo U('Index/user',array('id'=>1),'html',false,'localhost');
	//echo  C('URL_MODEL');
      //  $arr = array(1,2,3,4,6);
    //$this->display();
  //
        //  $me['name']= 'DOsen';
      //  $me['age']= '28';
      //  $me['sex']= 'boy';
      // echo $name = substr(md5($me['name']),0.5);

      //  $this->display();
    }
    public function user()
    {

        //curd
        //add 创建数据
//        $data = array(
//            '课程号'=>'J211',
//            '课程名'=>'phpstorm',
//            '学分'=>'333',
//            '学时数'=>'66'
//
//        );
//       echo  M('course')->add($data);//返回ID值,不成功返回false

        //查询
        //1直接使用字符串进行查找
       // $data = M('course')->where('学分=5')->select();
        //2 使用数组方式进行查询
    /*  $wheree['课程号']='J212';
      $data = M('course')->where($wheree)->select();
       dump($data);*/


        //更新
      /*  $updata["课程名"]="666";
        $where ["课程名"]="操作系统";
        $data = M('course')->where($where)->save($updata);
        dump($data);*/
      //连续错误

        //连续操作
        //1.order排序 order(字符串0)多个条件的话用英文逗号隔开
      /*$data = M('score')->order('学号 desc')->select();
        dump($data);*/
    //2field($string,false)$string 传入多个字段名用英文逗号隔开
     /*   $data = M('score')->field('学号',true)->order('学号')->limit(1,5)->select();
       dump($data);*/
     //4 page('第几页','每页几行');

        //groud 分组操作


        $this->display();


    }

}