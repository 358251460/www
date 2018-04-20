
<?php
header("content-type:text/html;charset=utf-8");
// 假定数据库用户名：root，密码：123456，数据库：RUNOOB 
$con=mysqli_connect("localhost","root","","xk"); 
if (mysqli_connect_errno($con)) 
{ 
    echo "连接 MySQL 失败: " . mysqli_connect_error(); 
} 
 mysqli_query($con,'set names utf8');

mysqli_select_db($con,"xk");
 

$sql =' select * from  score';
$qry = mysqli_query($con,$sql);


echo <<<eof
<style type="text/css">
  table{width:700px;margin:auto;border:1px solid black;border-collapse:collapse;}
  td{border:1px solid black;}
</style>
      <table>
	     <tr><td>序号</td><td>学号</td><td>课程号</td><td>成绩</td></tr>
	  
eof;
$num = 0;
while ($rst = mysqli_fetch_assoc($qry))
{
	echo"<tr>";
	echo "<td>".++$num."</td>";
	echo "<td>".$rst['学号']."</td>";
	echo "<td>".$rst['课程号']."</td>";
	echo "<td>".$rst['成绩']."</td>";
	 
	echo"</tr>";
}
?>
