<?php
$x1=$_GET['a'];
$x2=$_GET['b'];
$x3=$_GET['c'];
//echo $x1.' '.$x2;
  mysql_connect('localhost','root','');
  mysql_select_db('project');
  $q=mysql_query("select * from messages where source='$x1' and destination='$x2' and mid='$x3'");
    while($f=mysql_fetch_array($q)){
    if($f['status'] == 'unread'){
      mysql_query("update messages set status='read' where mid='$x3'") or die(mysql_error());
    }
    print "<b style='color:black;font-family:arial;font-size:10pt'>From: </b><b style='color:#888888;font-size:9pt;font-weight:normal'>
    ".$f['source']."</b><br /><b style='color:black;font-family:arial;font-size:10pt'>To: </b><b style='color:#888888;font-family:arial
    font-weight:normal;font-size:8pt;'>".$f['destination']."</B><br /><b style='color:black;font-family:arial;font-size:10pt'>Subject: </b>
    <b style='color:#888888;font-size:9pt;font-weight:normal'>".$f['subject']."</b><br /><b style='color:black;font-family:arial;font-size:10pt'>
    Message: </b><b style='color:#888888;font-size:9pt;font-weight:normal'>".$f['body']."</b>";
  }
?>