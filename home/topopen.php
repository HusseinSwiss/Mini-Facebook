<?php
$id=$_GET['id'];
@$k=$_GET['k'];
if(($k=='profile')){
mysql_connect('localhost','root','');
mysql_select_db('project');
$q=mysql_query("select * from usersinfo where id='$id'");
 while($f=mysql_fetch_array($q)){
   echo "<center><table>
          <tr>
		   <td>
		    <center><img src='../register/".$f['photo']."'  width=250 height=250 alt=".$f['name']."></center>
		   </td>
		  </tr>
	     </table>
		 </center><hr />
		 <b style='font-size:10pt;color:#ff0000;font-family:arial'>User name:<b> <b style='font-size:10pt;color:#000000;font-family:arial'>".$f['name']."<br /><b style='font-size:10pt;color:#ff0000;font-family:arial'>Country:<b> <b style='font-size:10pt;color:#000000;font-family:arial'>".$f['country']."<br /><b style='font-size:10pt;color:#ff0000;font-family:arial'>Birthday:<b> <b style='font-size:10pt;color:#000000;font-family:arial'>".$f['dob']."<br />
		 
   ";
 }
}else if($k=="viewLikes"){
 mysql_connect('localhost','root','');
mysql_select_db('project');
$q=mysql_query(" select id,user,p_id,name,photo from usersinfo
                 inner join likes on usersinfo.id=likes.user 
                 where p_id='$id'");
 while($f=mysql_fetch_array($q)){
   echo "<table><tr><td><img src='../register/".$f['photo']."' width=40 height=40 ></td><td valign='top'><b style='color:black;font-size:11pt;color:blue'>".$f['name']."</b></td></tr></table><hr/>";
 } 
}
else{
mysql_connect('localhost','root','');
mysql_select_db('project');
$q=mysql_query("select 
	  fid1,fid2,name1,name2,photo,country,id
	  from request inner join usersinfo on 
	  usersinfo.id=request.fid1 where fid2='$id' AND status='pending'");
	  $cx=0;
while($f=mysql_fetch_array($q)){
  echo "<table width='100%'><tr><td width='10%'><img src='../register/".$f['photo']."' width=50 height=50 ></td><td valign='top'><b style='font-size:10pt;color:blue;font-family:arial'>".$f['name1']."</b><br /><b style='font-size:10pt;color:#aaaaaa;font-family:arial'>".$f['country']."</b></td><td align='right'><input type='button' value='Confirm Request' id='confirm".$cx."' onclick='confirm_request(".$id.",".$f['fid1'].",".$cx.")' style='border:solid 1px #aaaaaa;font-size:9pt'></td></tr><table><hr />";
  $cx++;
}
}
?>