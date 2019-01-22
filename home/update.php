<?php
  session_start();
  $_SESSION['auth']='yes';
  $session=$_GET['s'];
  //xmlhttp.open("GET","update.php?newname="+uname+"&newpass="+pass+"&newdob="+dob+"&newtel="+tel+"&newcountry="+country,true);
  $a=$_GET['newname'];
  $b=$_GET['newpass'];
  $c=$_GET['newdob'];
  $d=$_GET['newtel'];
  $e=$_GET['newcountry'];
  mysql_connect('localhost','root','');
  mysql_select_db('project');
  mysql_query("update usersinfo set dob='$c',tele='$d',country='$e',name='$a',pass='$b' where name='$session'");
  if(mysql_affected_rows()>0){
    echo "Profile Updated Succefully";
  }else{
    echo "No Changes Occured on Your Profile";
  }
?>