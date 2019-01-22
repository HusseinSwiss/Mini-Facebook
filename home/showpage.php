<style>
b.profileUname{
  text-align: center;
  font-family: Arial;
  font-size: 9pt;
  color: #999999;
}
b.update{
  text-align: center;
  font-family: Arial;
  font-size: 9pt;
  color: #444444;
}
input.user2{
  width:170px;
  height: 15px;
  border: solid 2px #99ff33;
  background: white;
  color: black;
  font-family: arial;
  font-size: 10pt;
}
.loginbtn{
  color: black;
  font-family: arial;
  font-size: 9pt;
  border: solid 1px #00ff33;
  background: #FFFFFF;
}
b#xmlhttpResponce{
  font-family: arial;
  font-weight: normal;
  font-size: 9pt;
  color: #aaaaaa;
}
</style>

<?php
session_start();
$_SESSION['auth']='yes';
$_SESSION['user'];
  $user=@$_GET['session'];
  include("connect.inc");
  if($_GET['page'] == 'inbox'){
  $c=cxn();
   if($c ==  "connected"){
     $q0=mysql_query("select count(*) from messages where destination='$user' and status='unread'");
     //$countInbox=0;
     while($count=mysql_fetch_array($q0)){
       $countInbox=$count['count(*)'];
     }
     $q=mysql_query("select * from messages where destination='$user' order by mid desc");
     echo "<u><b style='font-weight: normal;font-size: 12pt;font-family: arial;' id='inboxCount'>Inbox (".$countInbox.")</b></u><BR>";
     echo "<table style='margin-bottom:-8px'>
            <tr>
               <td>
                 <a class='mailOptions' href='javascript:void(0)' onclick=";?>"showPage('inbox')"<?php echo">All</a>&nbsp;|&nbsp;
                 <a class='mailOptions' href='javascript:void(0)' onclick=";?>"all12('unread','<?php echo $user;?>')"<?php echo">Unread</a>&nbsp;|&nbsp;
                 <a class='mailOptions' href='javascript:void(0)' onclick=";?>"all12('read','<?php echo $user;?>')"<?php echo">Read</a>
                 <b id='loadingGroup'></b>
               </td>
            </td>
           </table>
           <hr size=1>
           <div id='all'>
     ";
     $c=0;
      while($fetch=mysql_fetch_array($q)){
        $txt1=$fetch['source'];
        $txt2=$fetch['destination'];
        $txt3=$fetch['mid'];
        $stat=$fetch['status'];
        echo "<div id='message".$c."'><table width=100% class='inboxTable' id='ajaxTable".$c."'
        cellspacing=0
        "; ?>onmouseover="this.bgColor='#eeeeee';document.delImg<?php echo $c;?>.style.visibility='visible'" onmouseout="this.bgColor='#ffffff';document.delImg<?php echo $c;?>.style.visibility='hidden'"<?php echo ">
                 <tr  >
                    <td width=15% valign=middle style='border-bottom:solid 1px #dddddd;'>
                       <img src=mail.jpg width=25 height=15 style='margin-bottom:-2px'><b class='sourceMeg'> <a style='color:black;text-decoration:none' href='javascript:void(0)' onclick=readMessage('".$txt1."','".$txt2."','".$txt3."') >".$fetch['source']."</a></b>
                    </td>
                    <td align=left width=67% valign=middle style='border-bottom:solid 1px #dddddd;'>
                       <img src=del1.png width=13 height=13
                       onclick=";?>"
                       var xmlhttp;
                       var c=confirm('Are you sure you want to delete this message');
                       if(c){
                        if (window.XMLHttpRequest)
                              {
                                  xmlhttp=new XMLHttpRequest();
                              }
                        else
                              {
                                  xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
                              }
                            xmlhttp.onreadystatechange=function()
                             {
                            if (xmlhttp.readyState==4 && xmlhttp.status==200)
                             {
                             if(navigator.appName != 'Microsoft Internet Explorer'){
                               document.getElementById('ajaxTable<?php echo $c;?>').innerHTML='';
                             }else{
                               document.getElementById('ajax<?php echo $c;?>').innerHTML='deleted ';
                             }
                           }
                         else
                               document.getElementById('ajax<?php echo $c;?>').innerHTML='<img src=ajax.gif width=13 height=13 />';
                         }
                       xmlhttp.open('GET','delete.php?messageSource=<?php echo $fetch['source']; ?>&messageSubject=<?php echo $fetch['subject'];?>',true);
                       xmlhttp.send();
                       }
                       "<?php echo" id='delImg' class='del' name='delImg".$c."' style='visibility:hidden'" ?>onmouseover="this.src='del2.png'" onmouseout="this.src='del1.png'"<?php echo"> <b style='color:#999999;font-weight:normal;font-size:11pt;'>".substr($fetch['subject'],0,50)."...</b>
                    </td>
                    <td align='right' valign=middle style='border-bottom:solid 1px #dddddd;'><b style=font-weight:normal;font-size:8pt;font-family:Arial;color:#aaaaaa; id='ajax".$c."'></b>
                        ".$fetch['date']."
                    </td>
                 </tr>
              </table></div>
        ";
        $c++;
        ?>
        <?php
      }
   }
  }
  $imgName;
  if($_GET['page'] == 'profile'){
      $c=cxn();
   if($c ==  "connected"){
     $q1=mysql_query("select * from userphoto where username='$user'");
      while($fetch1=mysql_fetch_array($q1)){
        $imgName=$fetch1['image'];
      }
     $q=mysql_query("select * from usersinfo where name='$user'");
      while($fetch=mysql_fetch_array($q)){
        echo "
<form action='a.php'>
        <table cellpadding=5 cellspacing=5 >
               <tr>
                <td valign=top >
                  <img src='/register/".$imgName."' width=150 height=200 > <br>
                  <center><b class='profileUname'>".$fetch['name']."</b></center>
                </td>
                <td style='border-right:solid 1px black' valign=top >
                   &nbsp;
                </td>
                <td valign=top >
                   <b class='update'>User Name: &nbsp;&nbsp;</b>
                   <input type=text name=newname id=newname class=user2 value='".$fetch['name']."'> <b style='color:red;font-fanily:arial;font-size:10pt' id='userError'></b><br><BR>
                   <b class='update'>Password: &nbsp;&nbsp;&nbsp;&nbsp;</b>
                   <input type=password name=newpass id=newpass class=user2 value='".$fetch['pass']."'> <b style='color:red;font-fanily:arial;font-size:10pt' id='userpass'></b> <br><br>
                   <b class='update'>D.O.B: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                   <input type=text name=newdob id=newdob class=user2 value='".$fetch['dob']."'> <b style='color:red;font-fanily:arial;font-size:10pt' id='userdob'></b><br><BR>
                   <b class='update'>Phone: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                   <input type=text name=newtel id=newtel class=user2 value='".$fetch['tele']."'> <b style='color:red;font-fanily:arial;font-size:10pt' id='usertel'></b><br><br>
                   <b class='update'>Country: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                   <input type=text name=newcountry id=newcity class=user2 value='".$fetch['country']."'> <b style='color:red;font-fanily:arial;font-size:10pt' id='usercity'></b><br><br>
                   <form name='ajaxUpdateForm' >
                     <input type=button onclick='update()' id='ajaxBtnUpdate' value='update'  />
                   </form>    <br>
                       <b id='xmlhttpResponce'></b>
                </td>

                <td>

                </td>
               </tr>
              </table>

        ";
      }
   }
  }else if($_GET['page'] == 'new'){
?>
    <u><b style='font-size:11pt;font-family:normal;font-family:arial;'>New Message</b></u><br /><br />
    <table>
     <tr>
      <td>
       <b style='font-weight:normal;font-family:arial;font-size:10pt;'>To: </b>
      </td>
      <td>
        <input type="text" name="to" id="messageDest" style="border:solid 1px #dddddd" />
      </td>
     </tr>
     <tr>
      <td>
       <b style='font-weight:normal;font-family:arial;font-size:10pt;'>Subject: </b>
      </td>
      <td>
        <input type="text" name="to" id="messageSubject" style="border:solid 1px #dddddd" />
      </td>
     </tr>
     <tr>
      <td>
       <b style='font-weight:normal;font-family:arial;font-size:10pt;'>Message: </b>
      </td>
      <td>
        <textarea name="to" id="messageBody" style="border:solid 1px #dddddd" cols="50" rows="10" ></textarea>
        <input type="hidden" value="<?php echo $user;?>"  id="from" />
      </td>
     </tr>
    </table>

    <button onclick="sendMessage()" id="ajaxSendBtn">Send</button> <b id="load"></b>

<?php
  }
?>