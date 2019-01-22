<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<?php
include("connect.inc");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Javascript Codes</title>
<link rel="stylesheet" type="text/css" href="style.css" />
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
     <form action="/search/" method="get" >
     <input type="text" name="ajaxWord" class="ajaxWord" id="ajaxWord" value="Search" onmouseover="this.style.borderColor='#888888';this.value='';" onmouseout="this.style.borderColor='white';" onblur="this.value='Search';"/>
     <input type="submit" value="Search" class="ajaxSubmit" name="ajaxSubmit" id="ajaxSubmit"/>&nbsp;&nbsp;
     </form>
    &nbsp;&nbsp;
    </td>
   </tr>

  </table>
  <div style="background:#444444" class="directories">
  <a href="/home/" class="language">Home</a><a href="/javascript/" class="language">JavaScript</a><a href="/HTML 5/" class="language">HTML 5</a><a href="/AJAX/" class="language">AJAX</a><a href="/PHP MySQL/" class="language">PHP MySQL</a><a href="/jQuery/" class="language">jQuery</a><a href="/Free Templates/" class="language">Free Templates</a><a href="/login/?action=login" class="language">Login</a><a href="/register/" class="language">Create Free Account</a>
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
  </td>
  <td valign="top">
  <!--body-->
<?php
 if($_GET['action'] == 'login' || $_GET['action'] == 'login1'){
?>
  <div class="loginHeader">
   <b class="loginHeader">&nbsp;&nbsp;<u>Users Login</u></b>
  </div><br />
   <div class="loginForm">
    <div style="background:#444444;color:white;font-family:arial;font-weight:bold;font-size:10pt;text-align:left;height:30px;padding-top:8px;">
     &nbsp;&nbsp;<b style="font-size:12pt;">Login</b>
    </div>
   <br />
    <table>
    <form action="/login/?action=login1" method="post">
     <tr>
    </tr>
      <td>
        <b class="user1">username: </b>
      </td>
      <td>
       <input type="text" name="username" class="user2" />
      </td>
     </tr>
     <tr>
      <td>
       <b class="user1">password: </b>
      </td>
      <td>
       <input type="password" name="userpassword" class="user2" />
      </td>
     </tr>
     <tr>
      <td colspan="2" align="right">
       <input type="submit" class="loginbtn" value="Login"/>
      </td>
     </tr>
     <tr>
      <td align="right" colspan="2">
       <a href="/login/?action=recover" class="recovor">forgot password</a>
       <a href="/login/?action=register" class="recovor">register</a>
      </td>
     </tr>
     </form>
<?php
}
?>
     <?php
$a=$_GET['action'];
  if($a == 'login1'){
   $c=cxn();
   $u=@$_POST['username'];
   $p=@$_POST['userpassword'];
   if($c == 'connected'){
     mysql_query("select * from usersinfo where name='$u' and pass='$p'");
     if(mysql_affected_rows()>0){
        @session_start();
        @$_SESSION['auth']='yes';
        @$_SESSION['user']=$u;
       header("location: /home/");
     }else{
       echo '<B style="color:red;font-fanily:arial;font-size:10pt">Please Check Your username or password</b>';
     }
   }
 }else
    if($a=='logout'){
      session_start();
      session_destroy();
      header("location: /index.php");
    }
?>
<?php
   if($_GET['action'] == 'register'){
?>
<div class="loginHeader">
   <b class="loginHeader">&nbsp;&nbsp;<u>Users Registeration</u></b>
  </div><br />
<div class="RegForm">
<div style="background:#444444;color:white;font-family:arial;font-weight:bold;font-size:10pt;text-align:left;height:30px;padding-top:8px;">
     &nbsp;&nbsp;<b style="font-size:12pt;">Register</b>
    </div>
  <table width="100%" cellpadding="7" cellspacing="7">
    <tr>
      <td align="left">
        <B style="color:red;font-fanily:arial;font-size:10pt" id="error1"></b>
      </td>
    </tr>
    <tr>
      <td align="left">
      <form action="#" method="post" name="regForm">
        <b class="user1">User Name: </b>
      </td>
      <td>
        <input type="text" class="user2" name="newuser" id="newuser" />
      </td>
    </tr>
    <tr>
      <td align="left">
        <b class="user1">Password: </b>
      </td>
      <td>
         <input type="password" class="user2" name="pass1" id="pass1" />
      </td>
    </tr>
    <tr>
      <td align="left">
        <b class="user1">Confirm Password: </b>
      </td>
      <td>
         <input type="password" class="user2" name="pass2" id="pass2"/>
      </td>
    </tr>
    </tr>
    <tr>
      <td align="left">
        <b class="user1">D.O.B: </b>
      </td>
      <td>
         <input type="text" class="user2" name="dob" title="ex: 12/12/2012" id="dob" />
      </td>
    </tr>
    <tr>
      <td align="left">
        <b class="user1">Country: </b>
      </td>
      <td>
         <input type="text" class="user2" name="country" id="country" />
      </td>
    </tr>
    <tr>
      <td align="left">
        <b class="user1">phone: </b>
      </td>
      <td>
         <input type="text" class="user2" name="tel" id="tel" title="ex: (00)000000"/>
      </td>
    </tr>
    <tr>
      <td>
        <img src="imageCreate.php" alt="Captcha" border="1"/>
      </td>
      <td>
        <input type="text"  class="user2" title="Captcah Value"/>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="right">
        <input type="submit" value="register" class="btn" />&nbsp;&nbsp;
      </td>
    </tr>
  </table>
</div>
</form>
    </table>
   </div>
<!--EndBody-->
  </td>
 </tr>
</table>
<script type="text/javascript">
$(function() {

$(".loginbtn").click(function(){

var uname = $("#newuser").val();
var pass1 = $("#pass1").val();
var pass2 = $("#pass2").val();
var tel = $("#tel").val();
var tel = $("#country").val();
var tel = $("#dob").val();
    var dataString = 'name='+ uname + '&id=' + uid + '&passw=' + pass + '&ans=' + answ;

	if(uname=='' || pass1=='' || pass2=='' || tel == '' || )
     {
    alert('الرجاء التأكد من الخانات الفارغة');
     }
	else
	{
	$("#flash").show();
	$("#flash").fadeIn(200).html('<img src="ajax.gif">');
$.ajax({
		type: "POST",
  url: "ajaxRegister.php",
   data: dataString,
  cache: false,
  success: function(html){
 $("ol#update").append(html);
 $("ol#update li:first").fadeIn("slow");
    document.getElementById('sid').value='';
    document.getElementById('name').value='';
    document.getElementById('password').value='';
    document.getElementById('answer').value='';
$("#name").focus();
$("#name").select();
$("#flash").hide();
	setTimeout("refreshRegisterationPage()",2000);
  }
 });
}
return false;
	});
});
function refreshRegisterationPage(){
	location.reload(true);
}
</script>
<?php
}
?>
</body>
</html>