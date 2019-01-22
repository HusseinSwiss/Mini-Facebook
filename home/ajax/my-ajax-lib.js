function deleteAlbum(id,albumId){
  var xmlhttp;
  //alert(fid1+"\n"+fid2);
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
    $("#album"+id).hide('slow');
    }
  else
    document.getElementById("ajax"+id).value="<img src='ajax.gif' width='15' height='15'>";
  }
 xmlhttp.open("GET","deleteAlbum.php?albumId="+albumId,true);
 xmlhttp.send();
}
function deletePhoto(id,photoId){
  var xmlhttp;
  //alert(fid1+"\n"+fid2);
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
    $("#album"+id).hide('slow');
    }
  else
    document.getElementById("ajax1"+id).value="<img src='ajax.gif' width='15' height='15'>";
  }
 xmlhttp.open("GET","deletePhoto.php?photoId="+photoId,true);
 xmlhttp.send();
}
function confirm_request(fid1,fid2,HTMLId){
  var xmlhttp;
  //alert(fid1+"\n"+fid2);
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
    document.getElementById("confirm"+HTMLId).value='Friends';
    }
  else
    document.getElementById("confirm"+HTMLId).value="Loading...";
  }
 xmlhttp.open("GET","confirmRequest.php?fid1="+fid1+"&fid2="+fid2,true);
 xmlhttp.send();
}
function ajaxLike(postId,tagId){
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
    document.getElementById(tagId).innerHTML='Wait...';
    }
  else
    document.getElementById(tagId).innerHTML="";
  }
 xmlhttp.open("GET","like.php?postid="+postId,true);
 xmlhttp.send();
}

var session = '';
function getSession(user){
    session = user;
}
function sendMessage(){
  var a=document.getElementById("messageDest").value;
  var b=document.getElementById("messageSubject").value;
  var c=document.getElementById("messageBody").value;
  var d=document.getElementById("from").value;
 // alert(a1);
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
    document.getElementById("load").innerHTML='';
    document.getElementById("ajaxSendBtn").disabled = false;
    }
   else{
    document.getElementById("load").innerHTML='<img src="ajax.gif" id="loadSend" width="20" height="20" style="margin-bottom:-5px"/>';
    document.getElementById("ajaxSendBtn").disabled = true;
   }
  }
 xmlhttp.open("GET","send.php?a="+a+"&b="+b+"&c="+c+"&e="+d,true);
 xmlhttp.send();
}
function update(){
    //alert("AS");

var xmlhttp;
var uname=document.getElementById('newname').value;
var pass=document.getElementById('newpass').value;
var dob=document.getElementById('newdob').value;
var tel=document.getElementById('newtel').value;
var country=document.getElementById('newcity').value;
if(uname=='')
     {
        alert('Please Enter username');
        return;
     }
     else if(pass==''){
       alert("Please enter a password");
       return;
     }
     else if(dob.charAt(2)!='/' || dob.charAt(5)!='/' || dob.length!=10){
       alert('Please Enter valid date');
       return;
     }
     else if(country==''){
       alert('Please Enter country value');
       return;
     }
     else if(tel=='' || tel.charAt(0)!='(' || tel.charAt(3)!=')' || tel.length!=10){
       alert('Please Enter valid phone number');
       return;
     }
else
 {
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
    document.getElementById("xmlhttpResponce").innerHTML=xmlhttp.responseText;
    document.getElementById("ajaxBtnUpdate").disabled = '';
    }
  else
    document.getElementById("xmlhttpResponce").innerHTML="<img src=ajax.gif width=17 height=17 />";
    document.getElementById("ajaxBtnUpdate").disabled = true;
  }
xmlhttp.open("GET","update.php?newname="+uname+"&newpass="+pass+"&newdob="+dob+"&newtel="+tel+"&newcountry="+country+"&s="+session,true);
xmlhttp.send();
} }
function readMessage(a1,b1,c1)
{
 // alert(a1);
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
    document.getElementById("all").innerHTML=xmlhttp.responseText;
    document.getElementById("loadingGroup").innerHTML='';
    }
  else
    document.getElementById("loadingGroup").innerHTML="<img src=ajax.gif width=17 height=17 />";
  }
 xmlhttp.open("GET","readNews.php?a="+a1+"&b="+b1+"&c="+c1,true);
 xmlhttp.send();
}
  function showPage(str)
{
var xmlhttp;
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
    document.getElementById("ajaxLoading").innerHTML='';
    }
  else
    document.getElementById("ajaxLoading").innerHTML="<img src=ajax.gif width=17 height=17 />";
  }
xmlhttp.open("GET","showpage.php?page="+str+"&session="+session,true);
xmlhttp.send();
}
function all12(argum1,argum2){
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
    document.getElementById("all").innerHTML=xmlhttp.responseText;
    document.getElementById("loadingGroup").innerHTML='';
    }
  else
    document.getElementById("loadingGroup").innerHTML="<img src=ajax.gif width=17 height=17 />";
  }
xmlhttp.open("GET","showAllMessages.php?sta="+argum1+"&to="+argum2,true);
xmlhttp.send();
 }