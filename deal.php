<?php
/*
实现过程：
1.连接数据库
2.导入数据
3.查询表 方法：
			q
q1	q2	q3	q4
1)select count(q1) from q where q1 = "【答案1】"…………
2)select count(q1) from q where q1 <> "【答案1】" and "【答案2】" and "【答案3】"
3)select q1 from q where q1 <> "【答案1】" and "【答案2】" and "【答案3】"
4.输出到ppt上
*/

//$value = $_POST['an'];//获取表单中的答案

require("accmysql.php");//连接数据库
echo "<meta charset='utf8'>";
$value = $_POST['chose'];
$sql = "INSERT INTO `q`(`q1`) VALUES ( '".$value." ')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());//数据库操作失败
  }
  //添加成功
  //跳转到添加成功的界面
  echo "添加成功！：）";
  mysql_close($con);//关闭数据库连接
?>