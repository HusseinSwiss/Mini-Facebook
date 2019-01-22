<?php
 function cxn(){
   $x=mysql_connect('localhost','root','');
   $y=mysql_select_db('project');
    if($x){
      return "connected";
    }else{
      return "not connected";
    }
 }
 ?>