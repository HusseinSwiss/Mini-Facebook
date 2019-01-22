<?php
$date=date("D d-M-Y");
$time=date("h:i:s");
$x = $_GET['postBody'];
$y = $_GET['post'];
 mysql_connect('localhost','root','');
 mysql_select_db('project');
 $i_d='';
 $r=mysql_query("select * from usersinfo where name='$y'");
  while($xx=mysql_fetch_array($r)){
    $i_d=$xx['id'];
  }
 mysql_query("insert into posts(pid,postfor,posttxt,date,time,uid) values('','$y','$x','$date','$time','$i_d')");
 //mysql_query("insert into likes values('','$y','','')");
?>
<!--
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `postfor` text NOT NULL,
  `posttxt` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`pid`)
-->