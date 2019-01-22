<?php
include("connect.inc");
echo cxn();
$f1=$_GET['fid1'];
$f2=$_GET['fid2'];
$f1name='';
$f2name='';
$qf1=mysql_query("select name from usersinfo where id='$f1'");
 while($f11=mysql_fetch_array($qf1)){$f1name=$f11['name'];}
$qf2=mysql_query("select name from usersinfo where id='$f2'");
 while($f22=mysql_fetch_array($qf2)){$f2name=$f22['name'];}
$date=date("Y-m-d");
$q=mysql_query("insert into request values('','$f1','$f2','$f1name','$f2name','pending')");
//mysql_query("insert into addedat values('','$date')");
?>