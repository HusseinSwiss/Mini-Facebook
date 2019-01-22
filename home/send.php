<?php
$date=date("y-m-d");
$time=date("h:i:s");
$x1=$_GET['a'];//to
$x2=$_GET['b'];//sub
$x3=$_GET['c'];//body
$x4=$_GET['e'];//from
  mysql_connect('localhost','root','');
  mysql_select_db('project');
  mysql_query("insert into messages values('','$x4','$x1','$x2','$x3','$date','$time','unread')") or die(mysql_error());
?>