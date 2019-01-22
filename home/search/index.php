<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<script>
function add(fid1,fid2,id){
  //alert(postId);
   var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("add"+id).value='Friends';
	document.getElementById("add"+id).disabled=true;
    }
  else
    document.getElementById("add"+id).value="Loading...";
  }
 xmlhttp.open("GET","add.php?fid1="+fid1+"&fid2="+fid2,true);
 xmlhttp.send();
}
</script>
<?php
  session_start();
  @$_SESSION['auth']='yes';
  $sessionuser=@$_SESSION['user'];
  if(!$sessionuser){
    die("Access Denid");
  }else{
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Javascript Codes</title>
<link rel="stylesheet" type="text/css" href="style.css" />
 <script type="text/javascript" src="jquery-1.7.2.min.js"></script> 
	<script type="text/javascript" src="config.js"></script> 
	<link type="text/css" href="css/ui-lightness/jquery-ui-1.7.3.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="jquery-1.3.2.min.js"></script> 
		<script type="text/javascript" src="jquery-ui-1.7.3.custom.min.js"></script> 
	<style type="text/css"> 
			
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
	</style> 
	<script type="text/javascript">    
function openme(id){
//alert(id);
//event.preventDefault();
        $('<div>').dialog({ 
		modal: true,         
		open: function ()    
        {                
		$(this).load('topopen.php');
		},                     
		height: 400,      
		width: 400,         
		title: 'Profile'   
		});   
		}
//function openme1(x){alert(x);}		
</script>
<script src="jquery.js" type="text/javascript"></script>
<script src="animate.js" type="text/javascript"></script>
<script type="text/javascript">
$().ready(function(){
$("#clicky").click(function(){
$("#box1").slideToggle("slow");
 });
$("#clicky5").click(function(){
$("#box5").slideToggle("slow");
 });
$("#clicky2").click(function(){
$("#box2").slideToggle("slow");
 });
$("#clicky3").click(function(){
$("#box3").slideToggle("slow");
 });
$("#clicky4").click(function(){
$("#box4").slideToggle("slow");
 });
});
</script>
 <script type="text/javascript">
var i=0;t=1;
var j=0;
function start(){
msg=new Array();
msg[0]='welcome to this web site  it enjoy learning javascript and web development freely!';
msg[1]='Create free and powerfull web application by learning the usefull exercises in this site';
msg[2]='Like our group on facebook and get 3 books free every month and a free trip tichet to USA';
if(i<msg[j].length){
t=1;
document.getElementById("write").innerHTML=msg[j].substring(0,i);
i=i+1;
}
if(i==msg[j].length){
 t=3500;
 j++;
 i=0;
}
if(j==msg.length)
 j=0;
setTimeout("start()",t);
}
y=0;
function play(){
dash1=['_',''];
if(y<dash1.length){
  document.getElementById("dash").innerHTML=dash1[y];
  y++;
}
if(y==dash1.length){
 y=0;
 document.getElementById("dash").innerHTML='';
}
} t2=setInterval("play()",130);
</script>
<script>
function slideExample1(elementId, headerElement)
{
   var element = document.getElementById(elementId);
   if(element.up == null || element.down)
   {
      animate(elementId, 0, 0, 0, 0, 100, null);
      element.up = true;
      element.down = false;
      headerElement.innerHTML = '<b class="divHeaders">DIV Menu Header vvv</b>';
      examplePanel1.innerHTML = '';
   }
   else
   {
      animate(elementId, 0, 100, 200, 180, 200, null);
      element.down = true;
      element.up = false;
      headerElement.innerHTML = '<b class="divHeaders">DIV Menu Header ^^^</b>';
      examplePanel1.innerHTML = ' <br /><a href="#" class="zin">HTML tutorial</a> <a href="#" class="zin">JavaScript tutorial</a>    <a href="#" class="zin">Ajax tutorial</a>    <a href="#" class="zin">jQuery tutorial</a>      <a href="#" class="zin">PHP tutorial</a>     <a href="#" class="zin">MySQL tutorial</a>';
   }
}
</script>
</head>
<body onload=start()>
<center>
 <div src="logoNew.png" width="100%" height="200px" class="top">
  <table width="100%" class="topTable">
   <tr>
    <td>
       &nbsp;&nbsp;<img src="logo.jpg" width="150" height="80"/>
    </td>
    <td valign="middle" width="40%">
       <b class="logo1"> Your Key Reference For</b><br />
       <b class="logo2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Creative Web Development</b>
    </td>
    <td valign="top" width="60%" align="right">
    <a href="/login/?action=login" class="topLinks">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="/login/?action=register" class="topLinks">Create Your Free Account on This Site</a>
    &nbsp;&nbsp;
    <br /><br />
     <form action="ajaxSearch.php" method="get" >
     <input type="text" name="ajaxWord" class="ajaxWord" id="ajaxWord" value="Search" onmouseover="this.style.borderColor='#888888';this.value='';" onmouseout="this.style.borderColor='white';" onblur="this.value='Search';"/>
     <input type="submit" value="Search" class="ajaxSubmit" name="ajaxSubmit" id="ajaxSubmit"/>&nbsp;&nbsp;
     </form>
    &nbsp;&nbsp;
    </td>
   </tr>
  </table>
  <div style="background:#444444" class="directories">
  <a href="/home/" class="language">Home</a><a href="/javascript/" class="language">JavaScript</a><a href="/HTML 5/" class="language">HTML 5</a><a href="/AJAX/" class="language">AJAX</a><a href="/PHP MySQL/" class="language">PHP MySQL</a><a href="/jQuery/" class="language">jQuery</a><a href="/Free Templates/" class="language">Free Templates</a><a href="/search/" class="language">Find Friends</a><a href="/register/" class="language">Create Free Account</a>
  </div>
 </div> <br />
</center>
<table width="80%" align="center" >
 <tr>
 <!--leftside-->
  <td width="20%" valign="top">
    <div class="box1" > <!--divBox1-->
    <table width=100% ><tr><td>
    <center><b class="divHeaders">Div Content One</b></td><td align="left">
    <input name="" type="button" value="x" id="clicky2"/>
    </td></tr></table>
    </center>
     <div class="box1Sub" id="box2">
       <p>Div body goes here</p>
     </div>
    </div>
    <br /> <!--dinBox2-->
    <div class="box1" > <!--divBox1-->
    <table width=100% ><tr><td>
    <center><b class="divHeaders">Div Content One</b></td><td align="left">
    <input name="" type="button" value="x" id="clicky3"/>
    </td></tr></table>
    </center>
     <div class="box1Sub" id="box3">
       <p>Div body goes here</p>
     </div>
    </div>
    <br /> <!--dinBox2-->
    <div class="box1" > <!--divBox1-->
    <table width=100% ><tr><td>
    <center><b class="divHeaders">Div Content One</b></td><td align="left">
    <input name="" type="button" value="x" id="clicky4"/>
    </td></tr></table>
    </center>
     <div class="box1Sub" id="box4">
       <p>Div body goes here</p>
     </div>
    </div>
    <br /> <!--dinBox2-->
    <div class="divHeaders">
  <div id="exampleHeader1"
      class="divHeadersContent1"
      onclick="slideExample1('examplePanel1', this);">
    <b class="divHeaders">DIV Menu Header  ^^^</b>
  </div>
  <div id="examplePanel1"  style="width:200px;height:180px;top:20px;left:0px;background:#ffffff; border: solid 1px #cccccc;">
   <br /><a href="#" class="zin">HTML tutorial</a>
   <a href="#" class="zin">JavaScript tutorial</a>
   <a href="#" class="zin">Ajax tutorial</a>
   <a href="#" class="zin">jQuery tutorial</a>
   <a href="#" class="zin">PHP tutorial</a>
   <a href="#" class="zin">MySQL tutorial</a>
  </div>
</div>
    </td>
  <!--EndLeftside-->
    <td width="2%">&nbsp;</td>
  </td width="78%">
  <td valign="top">
  <!--body-->
<script>
  function search()
{
var xmlhttp;
var str=document.getElementById("ajaxSearchKey").value;
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("ajaxContent").innerHTML=xmlhttp.responseText;
    }
  else
    document.getElementById("ajaxContent").innerHTML="<img src='ajax.gif'>";
  }
xmlhttp.open("GET","search.php?q="+str,true);
xmlhttp.send();
}
</script>
  <table width="100%">
    <td align="right">
     <img src="user.jpg" width="20" height="20" style="margin-bottom:-4px"/><b style="font-size:9pt;font-family:arial">Welcome<?php echo '<b style="font-size:9pt;font-family:arial;color:#aaaaaa;"> '.$sessionuser; ?><a href="/login/?action=logout" class="logout"><img src="logout.jpg" style="border: solid 0px white;margin-bottom:-5px" width="20" height="20" />Logout</a> </b>
    </td>
   </tr>
  </table>
   <div class="blog">
    <table width="100%"><tr><td>
    <b class="blog">
     &nbsp;Blog
    </b></td><td align="right">
    <img src="facebook.png" width="25" height="25" />
    <img src="twitter.png" width="25" height="25" />
    <img src="rss_orange.png" width="25" height="25" />
    </td></tr></table>
   </div>
  <br />
  <div class="latest">
   Latest News: <b id="write"></b><b id="dash"></b>
  </div>
  <br />
  <!---------------------slider------------------->

  <!---------------------EndSlider---------------->

<div id="ajaxContent">
  <input type=text name="ajaxSearchKey" id="ajaxSearchKey"/>
  <input type=button  onclick="search()"  value="search" />
  </div>
   <br />
     </td>
    </tr>
   </table>
<!--EndBody-->
  </td>
 </tr>
</table>
<?php } ?>
</body>
</html>