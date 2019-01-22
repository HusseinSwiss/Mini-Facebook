<?php
$user    = @$_GET['name'];
  session_start();
  @$_SESSION['auth']='yes';
  @$_SESSION['user']=$user;
//var dataString = 'name='+ uname + '&pass=' + pass1 + '&tel=' + tel + '&country=' + country + '&dob=' + dob;
$pass = @$_GET['pass'];
$tel  = @$_GET['tel'];
$country  = @$_GET['country'];
$dob  = @$_GET['dob'];
@$cxn = mysql_connect('localhost','root','');
mysql_select_db('project');
mysql_query("select name from usersinfo where name='$user'");
if(mysql_affected_rows()>0){
 echo "user name is already taken";
}else{
  mysql_query("insert into usersinfo(id,dob,tele,country,name,pass) values('','$dob','$tel','$country','$user','$pass')");
  echo "Your Account Has Been Successfuly Created";
}
$q1=mysql_query("select id from usersinfo where name='$user'");
$u='';
while($x=mysql_fetch_array($q1)){
 $u=$x['id'];
}
mysql_query("insert into friends values('','$u','$u','hidden')");
?>