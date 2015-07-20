<?php
/*
@author 周子豪
@param string $an1 家庭投票人数
@param string $an2 学校投票人数
@param string $an3 乐园投票人数
@param string $an4 其他投票人数
@param string $str 其他的内容
*/
require("accmysql.php");//连接数据库

$sql1 = "select count(q.q1) from q where q1= '家庭'";
$result1 = mysql_query($sql1);
$an1 = mysql_fetch_array($result1);//家庭投票人数
$an1 = $an1[0];
$a1 = ($an1/50.00)*100;
$a1 = $a1."%";
//////////////////////////////////////////////////
$sql2 = "select count(q.q1) from q where q1 = '学校'";
$result2 =mysql_query($sql2);
$an2 = mysql_fetch_array($result2);//学校投票人数
$an2 = $an2[0];
$a2 = ($an2/50.00)*100;
$a2 = $a2."%";
//////////////////////////////////////////////////
$sql3 = "select count(q.q1) from q where q1= '乐园'";
$result3 = mysql_query($sql3);
$an3 = mysql_fetch_array($result3);//乐园投票人数
$an3 = $an3[0];
$a3 = ($an3/50.00)*100;
$a3 = $a3."%";
//////////////////////////////////////////////////
$sql4 = "select count(q.q1) from q where q1 <> '家庭' and q1 <>'学校' and q1 <>'乐园'";
$result4 = mysql_query($sql4);
$an4 = mysql_fetch_array($result4);//其他投票人数
$an4 = $an4[0];
$a4 = ($an4/50.00)*100;
$a4 = $a4."%";
/////////////////////////////////////////////////得到地四项的内容
$sql5 = "select q1 from q where q1 <> '家庭' and q1 <> '学校' and q1 <> '乐园'";
$result5 = mysql_query($sql5);
$str = null;
while ($row = mysql_fetch_array($result5)) {
	//var_dump($row);
	$str = $str.$row['q1'].",";
}
	$str = substr($str,0,(int)strlen($str)-1)."……";


mysql_close($con);//关闭数据库连接

?>