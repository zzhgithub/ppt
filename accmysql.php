<?php
$con = mysql_connect("211.149.239.235","gamejinad","T8C8m3g2");
if (!$con){
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("gamejinad", $con);
  mysql_query("set names UTF8");//此处改出了 血！！utf-8
?>