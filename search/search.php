
<?php
 session_start();
  @$_SESSION['auth']='yes';
  $sessionuser=@$_SESSION['user'];
  $sessionid='';
  include("connect.inc");
  $q1=$_GET['q'];
  $c=cxn();
   if($c == "connected"){
    $q2=mysql_query("select id from usersinfo where name='$sessionuser'");
      while($f=mysql_fetch_array($q2)){
	    $sessionid=$f['id'];
	  }
     $q2=mysql_query("select * from usersinfo where name like'$q1'");
	 $c=0;
      while($fetch=mysql_fetch_array($q2)){
        echo "<table cellpadding=5 width=100% >
		  <tr>
		   <td align='left' width='10%'> 
		    <div id='ajax'><img width=100 height=100 src='../register/".$fetch['photo']."' alt='' onclick=openme(".$fetch['id'].")  style='border:solid 1px #dddddd' onmouseover=";?>"this.style.borderColor='blue';" onmouseout="this.style.borderColor='#dddddd'"></div><?php echo "
		   </td>
		   <td valign=top align='left' width='90%'>
		     <a href='javascript:void(0);' onclick=openme(".$fetch['id'].") style='font-family:arial;font-size:10pt;color:blue'>".$fetch['name']."</a><br />
			 <b style='font-family:arial;font-size:10pt;color:#aaaaaa'>".$fetch['country']."</b><br />
		   </td>
		  </tr>
		  <tr>
		   <td align='right' colspan=3 valign='top' >
		    <input type='button' id='add".$c."' value='+ Add to friends' style='border:solid 1px #aaaaaa;font-family:arial;font-weight:bold;' onclick='add(".$sessionid.",".$fetch['id'].",".$c.")'>
		   </td>
		  </tr>
		</table><hr size=1 />";
		$c++;
      }
   }
?>