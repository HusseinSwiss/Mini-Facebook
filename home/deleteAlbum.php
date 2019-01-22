<?php
mysql_connect('localhost','root','');
mysql_select_db('project');
$albumId=$_GET['albumId'];
$albumName='';
$q=mysql_query("select albumName from album where albumId='$albumId'");
while($f=mysql_query($q)){
  $albumName=$f['albumName'];
}
unlink($albumName);
mysql_query("delete from album where albumId='$albumId'");
?>