<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<?php
session_start();
  @$_SESSION['auth']='yes';
  @$_SESSION['user'];
include("connect.inc");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Javascript Codes</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="animate.js" type="text/javascript"></script>
<script src="ajax/upload.js" type="text/javascript"></script>
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
<body>
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
  <a href="/home/" class="language">Home</a><a href="/javascript/" class="language">JavaScript</a><a href="/HTML 5/" class="language">HTML 5</a><a href="/AJAX/" class="language">AJAX</a><a href="/PHP MySQL/" class="language">PHP MySQL</a><a href="/jQuery/" class="language">jQuery</a><a href="/Free Templates/" class="language">Free Templates</a><a href="/login/?action=login" class="language">Login</a><a href="/login/?action=register" class="language">Create Free Account</a>
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

<div class="loginHeader">
   <b class="loginHeader">&nbsp;&nbsp;<u>Users Registeration</u></b>
  </div><br />
 <b style="color:#444444;font-family:arial;font-size:10pt;">Upload your profile picture</b>
 <br /><br /><Br />
<form  enctype="multipart/form-data" action="myPic.php" name="f" method="POST">
 <input type="hidden" name="MAX_FILE_SIZE" value="900000000">
 <input type="file" id="pic"  name="uf" />  &nbsp;
 <input type="submit" />
</form>
</body>
</html>