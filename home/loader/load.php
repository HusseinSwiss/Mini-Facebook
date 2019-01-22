<?php
  mysql_connect('localhost','root','');
  mysql_select_db('project');
  $q=mysql_query("select * from usersinfo");
    while($f=mysql_fetch_array($q)){
      echo $f['country']."<br />";
    }
?>