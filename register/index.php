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
<div class="RegForm">
<div style="background:#444444;color:white;font-family:arial;font-weight:bold;font-size:10pt;text-align:left;height:30px;padding-top:8px;">
     &nbsp;&nbsp;<b style="font-size:12pt;">Register</b>
    </div>
  <table width="100%" cellpadding="7" cellspacing="7" >
    <tr bgcolor="#eeeeee">
      <td align="left">
        <B style="color:red;font-fanily:arial;font-size:10pt" id="error1"></b>
      </td>
    </tr>
    <tr bgcolor="#eeeeee">
      <td align="left" valign="bottom">
        <b class="user1">User Name: </b>
      </td>
      <td >
      <b style="color:red;font-fanily:arial;font-size:10pt" id="userError"></b><br />
        <input type="text" class="user2" name="newuser" id="newuser" />
      </td>
    </tr>
    <tr bgcolor="#eeeeee">
      <td align="left" valign="middle">
        <b class="user1">Password: </b>
      </td>
      <td valign="middle">
      <b style="color:red;font-fanily:arial;font-size:10pt" id="passError1"></b><br />
         <input type="password" class="user2" name="pass1" id="pass1" onkeyup="testStrong(this.value);" /><br />
      <b id="passStrong">&nbsp;</b>
      </td>
    </tr>
    <tr bgcolor="#eeeeee" valign="bottom">
      <td align="left">
        <b class="user1">Confirm Password: </b>
      </td>
      <td>
      <b style="color:red;font-fanily:arial;font-size:10pt" id="passError2"></b><br />
         <input type="password" class="user2" name="pass2" id="pass2"/>
      </td>
    </tr>
    </tr>
    <tr bgcolor="#eeeeee" valign="bottom">
      <td align="left">
        <b class="user1">D.O.B: </b>
      </td>
      <td>
      <b style="color:red;font-fanily:arial;font-size:10pt" id="dobError"></b><br />
         <input type="text" class="user2" name="dob" title="ex: 12/12/2012" id="dob" />
      </td>
    </tr>
    <tr bgcolor="#eeeeee" valign="bottom">
      <td align="left">
        <b class="user1">Country: </b>
      </td>
      <td>
      <b style="color:red;font-fanily:arial;font-size:10pt" id="countryError"></b><br />
         <input type="text" class="user2" name="country" id="country" />
      </td>
    </tr>
    <tr bgcolor="#eeeeee" valign="bottom">
      <td align="left">
        <b class="user1">phone: </b>
      </td>
      <td>
      <b style="color:red;font-fanily:arial;font-size:10pt" id="telError"></b><br />
         <input type="text" class="user2" name="tel" id="tel" title="ex: (00)000000"/>
      </td>
    </tr>
    <tr bgcolor="#eeeeee">
      <td>
        <img src="imageCreate.php" alt="Captcha" border="1"/>
      </td>
      <td>
        <input type="text"  class="user2" title="Captcah Value"/>
      </td>
    </tr>
    <tr bgcolor="#eeeeee">
      <td colspan="2" align="right">
        <input type="button" value="register" class="loginbtn" onclick='ajaxRegister1()'/>&nbsp;&nbsp;
      </td>
    </tr>
    <tr>
      <td align="center" colspan="2">
       <b id="flash"></b>
      </td>
    </tr>
  </table>
  <script>
var weakness = '';
function testStrong(val){
   if(val.length <= 5 || (val.indexOf("$") == -1)){
      document.getElementById("passStrong").innerHTML='<b style="color:green;font-fanily:arial;font-size:10pt">Weak</b>';
      weakness = false;
   }else if(val.length >= 6 && val.length < 11 ){
      passStrong.innerHTML='<b style="color:blue;font-fanily:arial;font-size:10pt">Middle</b>';
      weakness = true;
   }else if(val.length >=11 ){
      passStrong.innerHTML='<b style="color:red;font-fanily:arial;font-size:10pt">Strong</b>';
      weakness = true;
   }else if(val.length == 0){
      passStrong.innerHTML='&nbsp;';
   }
}
  function ajaxRegister1()
{
var xmlhttp;
var uname = document.getElementById("newuser").value;
var pass1 = document.getElementById("pass2").value;
var pass2 = document.getElementById("pass1").value;
var tel =  document.getElementById("tel").value;
var country = document.getElementById("country").value;
var dob = document.getElementById("dob").value;
if(weakness == false){
  flash.innerHTML = "Passord must contain 1 '$' sign and greater than 11 char's";
  return;
}else{
  passStrong.innerText = '';
}
if(uname=='')
     {
        userError.innerHTML='Please Enter username';
        return;
     }
     else if(pass1==''){
       userError.innerHTML='';
       passError1.innerHTML='Please Enter password';
       return;
     }
     else if(pass2==''){
       userError.innerHTML='';
       passError1.innerHTML='';
       passError2.innerHTML='Please confirm password';
       return;
     }
     else if(pass1!=pass2){
       userError.innerHTML='';
       passError1.innerHTML='';
       passError2.innerHTML='Password did not match';
       return;
     }
     else if(dob.charAt(2)!='/' || dob.charAt(5)!='/' || dob.length!=10){
       userError.innerHTML='';
       passError1.innerHTML='';
       passError2.innerHTML='';
       dobError.innerHTML='Please Enter valid date';
       return;
     }
     else if(country==''){
       userError.innerHTML='';
       passError1.innerHTML='';
       passError2.innerHTML='';
       dobError.innerHTML='';
       countryError.innerHTML='Please Enter country value';
       return;
     }
     else if(tel=='' || tel.charAt(0)!='(' || tel.charAt(3)!=')' || tel.length!=10){
       userError.innerHTML='';
       passError1.innerHTML='';
       passError2.innerHTML='';
       dobError.innerHTML='';
       countryError.innerHTML='';
       telError.innerHTML='Please Enter valid phone number';
       return;
     }
else
 {
   var r = '';
       userError.innerHTML='';
       passError1.innerHTML='';
       passError2.innerHTML='';
       dobError.innerHTML='';
       countryError.innerHTML='';
       telError.innerHTML='';
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
      httpResponse=xmlhttp.responseText;
      document.getElementById("flash").innerHTML=httpResponse;
      if(httpResponse == "Your Account Has Been Successfuly Created"){
         location.href="profilePicture.php";
      }
    }
  else
    document.getElementById("flash").innerHTML="<img src='ajax.gif'>";
  }
//var dataString = 'name='+ uname + '&pass=' + pass1 + '&tel=' + tel + '&country=' + country + '&dob=' + dob;
xmlhttp.open("GET","ajaxRegister.php?name="+ uname + "&pass=" + pass1 + "&tel=" + tel + "&country=" + country + "&dob=" + dob,true);
xmlhttp.send();
 }
}
</script>
</div>
</form>
    </table>
   </div>
<!--EndBody-->
  </td>
 </tr>
</table>
<!--script type="text/javascript">
$(function() {
$(".loginbtn").click(function(){
$.ajax({
		type: "POST",
  url: "ajaxRegister.php",
   data: dataString,
  cache: false,
  success: function(html){
 $("ol#update").append(html);
 $("ol#update li:first").fadeIn("slow");
	setTimeout("refreshRegisterationPage()",5000);
  }
 });
}
return false;
	});
});
function refreshRegisterationPage(){
	location.reload(true);
}
</script-->
</body>
</html>