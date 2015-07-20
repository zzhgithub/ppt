<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>question_1</title>

<?php
require('postdata.php');
echo "<style>
	.zzt_a{width:20%;height:".$a1.";background-color:#696;padding:0;margin:0;float:left;text-align:center;font-size:18px;}
	.zzt_b{width:20%;height:".$a2.";background-color:#48B9B2;padding:0;margin:0;float:left;text-align:center;font-size:18px;}
	.zzt_c{width:20%;height:".$a3.";background-color:#62409D;padding:0;margin:0;float:left;text-align:center;font-size:18px;}
	.zzt_d{width:20%;height:".$a4.";background-color:#EABC43;padding:0;margin:0;float:left;text-align:center;font-size:18px;}	
</style>";
?>
<style>
	body{padding:50px;margin:0;}
	/* 左边的容器 */
	.container{width:30%;height:502px;border-left:1px solid black;border-top:1px solid black;float:left;}
	/* 柱状图之间的空白 */
	.blank_1{width:5%;height:100%;background-color:#fff;padding:0;margin:0;float:left;}
	.blank_2{width:5%;height:100%;background-color:#fff;padding:0;margin:0;float:left;}
	.blank_3{width:5%;height:100%;background-color:#fff;padding:0;margin:0;float:left;}
	.blank_4{width:5%;height:100%;background-color:#fff;padding:0;margin:0;float:left;}
	/* 柱状图 */
	/*.zzt_a{width:20%;height:2%;background-color:#696;padding:0;margin:0;float:left;text-align:center;font-size:18px;}
	.zzt_b{width:20%;height:100%;background-color:#48B9B2;padding:0;margin:0;float:left;text-align:center;font-size:18px;}
	.zzt_c{width:20%;height:100%;background-color:#62409D;padding:0;margin:0;float:left;text-align:center;font-size:18px;}
	.zzt_d{width:20%;height:100%;background-color:#EABC43;padding:0;margin:0;float:left;text-align:center;font-size:18px;}	18

	/*清除浮动 IE6*/
	.clearfix:after {visibility:hidden; display:block; font-size:0; content: " "; clear:both; height:0;}.clearfix{*zoom:1;}
	/* 其他回复 */
	.content{width:40%;height:250px;/*border:2px solid #0C8BC0;*/float:right;margin-top:15px;}
	/* question */
	.question{width:40%;height:250px;/*border:2px solid black;*/float:right;font-size:30px;text-align:center;}
</style>
</head>

<body>
<div class="container">
	<div class="blank_1">	</div>
    <div class="zzt_a">A<br><?php echo $an1; ?>票</div>
    <div class="blank_2">	</div>
    <div class="zzt_b">B<br><?php echo $an2; ?>票</div>
    <div class="blank_3">	</div>
    <div class="zzt_c">C<br><?php echo $an3; ?>票</div>
    <div class="blank_4">	</div>
    <div class="zzt_d">D<br><?php echo $an4; ?>票</div>
</div>
<div class="question">
	<br>问题1：你认为公司更像什么？<br><br>
	A.家庭&nbsp;&nbsp;B.学校<br><br>C.乐园&nbsp;&nbsp;D.其他<br>
</div>
</body>
</html>
