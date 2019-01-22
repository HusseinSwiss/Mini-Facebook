<?php
mysql_connect('localhost','root','');
mysql_select_db('project');
$myId=$_GET['fid1'];
$frId=$_GET['fid2'];
mysql_query("insert into friends values('','$myId','$frId','shown')");
mysql_query("insert into friends values('','$frId','$myId','shown')");
mysql_query("update request set status='completed' where fid1='$frId' and fid2='$myId'");
echo "
<script>
location.reload();
</script>
"
?>