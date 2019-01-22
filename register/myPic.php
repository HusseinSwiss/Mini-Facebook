<?php
session_start();
$_SESSION['auth']='yes';
$name=$_SESSION['user'];
$target_path = "";
//$z=$_POST['uf'];
$z=basename( $_FILES['uf']['name']);
$target_path = $target_path . basename( $_FILES['uf']['name']);
if(move_uploaded_file($_FILES['uf']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uf']['name']).
    " has been succesfully uploaded";
}
  mysql_connect('localhost','root','');
  mysql_select_db('project');
  mysql_query("update usersinfo set photo='$z' where name='$name'");
  header("location: /home/");
?>