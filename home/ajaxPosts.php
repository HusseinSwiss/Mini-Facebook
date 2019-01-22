
<?php
if($_GET['view'] == 'posts'){
session_start();
@$_SESSION['auth']='yes';
$sessionuser=@$_SESSION['user'];
$imgq=$_SESSION['img'];
         mysql_connect('localhost','root','');
         mysql_select_db('project');
		 $q=mysql_query("select id from usersinfo where name='$sessionuser'");
		 while($f=mysql_fetch_array($q)){
		  $user=$f['id'];
		 }
         $c = 0;
         $q=mysql_query("
	select rid,fid1,fid2,posttxt,postfor,
	pid,uid,id,date,time,photo 
	from posts inner join friends on 
	friends.fid2=posts.uid inner join 
	usersinfo on usersinfo.id=friends.fid2
	where fid1='$user' order by pid desc");
          while($f = mysql_fetch_array($q)){
            echo "<div id='ajax' ><table   cellspacing=5 cellpadding=5 > <tr><td valign=top ><img src='/register/".$f['photo']."' width=50 height=50  /></td><td valign='top'><a href='javascript:void(0);' style='font-size:9pt;font-family:arial;color:blue' onclick='openme(".$f['id'].")'>".$f['postfor']." </a><br /> <b style='font-family:arial;font-size:10pt;font-weight:normal;text-align:justify;color:#000000'>".$f['posttxt']."</b> </td></tr> </table> <table width=100% >  <tr><td> <img src='date.jpg' style='margin-bottom:-3px'/><b style='font-weight:normal;font-family:arial;font-size:8pt;color:#777777'> ".$f['date']." </b><img src='time.jpg' style='margin-bottom:-3px'/><b style='font-weight:normal;font-family:arial;font-size:8pt;color:#777777'> ".$f['time']."</b></td> <td align=right > <b id='ajaxLoad'><a href='javascript:void(0);' onclick='get_likes(".$f['pid'].")' class='ajaxLike'>".$l=like($f['pid'])." people like this</a> | <a id='ajaxLike".$c."' 
			href=javascript:ajaxLike(".$f['pid'].",'ajaxLike".$c."') class='ajaxLike'><img class=like src=like.jpg width=20 height=15 > Like(".$l=like($f['pid']).")</A></b></td></tr></table>
 <hr size=1 style='color:#dddddd'/> </div>";

        $c++;
          }
}
      ?>
	 
<?php
 function like($id){
 $y=0;
 mysql_connect('localhost','root','');
 mysql_select_db('project');
 $count=mysql_query("select * from likes where p_id='$id'");
   while($r=mysql_fetch_array($count)){
     //$y=$r['likes'];
	 $y++;
   }
   return @$y;
 }
 ?>