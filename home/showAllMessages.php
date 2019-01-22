<?php
 $b = $_GET['to'];
 $a = $_GET['sta'];
// $a13="'".$a."'";
  mysql_connect('localhost','root','');
  mysql_select_db('project');
  $q01=mysql_query("select * from messages where destination='$b'  and status='$a' order by mid desc");
   $c=0;
      while($fetch=mysql_fetch_array($q01)){
        $txt1=$fetch['source'];
        $txt2=$fetch['destination'];
        $txt3=$fetch['mid'];
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
                        c=confirm('Are you sure you want to delete this message');
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
                       "<?php echo" id='delImg' class='del' name='delImg".$c."' style='visibility:hidden'" ?>onmouseover="this.src='del2.png'" onmouseout="this.src='del1.png'"<?php echo"> <b class='sourceMeg'>".substr($fetch['subject'],0,50)."...</b>
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
?>