<?php
mysql_connect('localhost','root','');
mysql_select_db('project');
$photoId=$_GET['photoId'];
$photoName='';
$photoAlbum1='';
$albumName='';
$photoSrc='';
$q=mysql_query("select photoName,photoAlbum,photoSrc from photos where photoId='$photoId'");
while($f=mysql_fetch_array($q)){
  $photoName=$f['photoName'];
  $photoAlbum1=$f['photoAlbum'];
  $photoSrc=$f['photoSrc'];
}
$q=mysql_query("select albumName from album where albumId='$photoAlbum1'");
while($f=mysql_fetch_array($q)){
  $albumName=$f['albumName'];
}
unlink($albumName."/".$photoSrc);
//echo $x;
mysql_query("delete from photos where photoId='$photoId'");
?>