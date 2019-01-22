<?php
  $from=$_GET['messageSource'];
  $sub=$_GET['messageSubject'];
   mysql_connect('localhost','root','');
   mysql_select_db('project');
    $q=mysql_query("delete from messages where source='$from' and subject='$sub'");
?>