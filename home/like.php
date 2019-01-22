<?php
  session_start();
  @$_SESSION['auth']='yes';
  $sessionuser=@$_SESSION['user'];
  $session_id = '';
  $like = $_GET['postid'];
  mysql_connect('localhost','root','');
  mysql_select_db('project');
  $id=mysql_query("select id from usersinfo where name='$sessionuser'");
   while($k=mysql_fetch_array($id)){$session_id=$k['id'];}
   $search_post_id = 0;
  $c=mysql_query("select p_id from likes where p_id='$like'");
  while($x=mysql_fetch_array($c)){
    $search_post_id++;
  }
  if($search_post_id == 0){
	mysql_query("insert into likes values('','$session_id','$like','1')");
  }else{
    mysql_query("select * from likes where user='$session_id' AND p_id='$like'");
	 if(mysql_affected_rows()>0){}  
	 else{
	 mysql_query("insert into likes values('','$session_id','$like','1')"); 
	 } 
  }
?>
