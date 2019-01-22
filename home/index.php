<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
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
<script src="ajax/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="javascript/s3Slider.js"></script>
<script src="ajax/animate.js" type="text/javascript"></script>
<script src="ajax/my-ajax-lib.js" type="text/javascript"></script>
<script src="ajax/posts.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
 <script type="text/javascript" src="jquery-1.7.2.min.js"></script> 
	<script type="text/javascript" src="config.js"></script> 
	<link type="text/css" href="css/ui-lightness/jquery-ui-1.7.3.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="jquery-ui-1.7.3.custom.min.js"></script>		
	<style type="text/css"> 
			
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
	</style> 
	<script type="text/javascript" src="jquery.fancybox.js?v=2.0.6"></script>
<link rel="stylesheet" type="text/css" href="jquery.fancybox.css?v=2.0.6" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay opening speed and opacity
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedIn : 500,
						opacity : 0.95
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background-color' : '#eee'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
	<script type="text/javascript">    
function openme(id){
//alert(id);
//event.preventDefault();
        $('<div>').dialog({ 
		modal: true,         
		open: function ()    
        {                
		$(this).load('topopen.php?id='+id+'&k=profile');
		},                     
		height: 430,      
		width: 400,         
		title: 'User Profile'   
		});   
		}
function get_likes(id){
//alert(id);
//event.preventDefault();
        $('<div>').dialog({ 
		modal: true,         
		open: function ()    
        {                
		$(this).load('topopen.php?id='+id+"&k=viewLikes");
		},                     
		height: 400,      
		width: 400,         
		title: 'Like List'   
		});   
		}
function requests(id){
//alert(id);
//event.preventDefault();
        $('<div>').dialog({ 
		modal: true,         
		open: function ()    
        {                
		$(this).load('topopen.php?id='+id+"&k=requests");
		},                     
		height: 400,      
		width: 450,         
		title: 'Friend Requests'   
		});   
		}
//function openme1(x){alert(x);}		
</script>
<script type="text/javascript">
$(document).ready(function(){
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
  //$("#searchBoxContent").slideToggle("fast");
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
<?php
  if(@$_GET['page']){
    echo '<input type=button onclick="f()" value="click">

    ';
       ?>
       <?php
  }else{
?>
<body onload="start()">
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
  <a href="/home/" class="language">Home</a><a href="/javascript/" class="language">JavaScript</a><a href="/HTML 5/" class="language">HTML 5</a><a href="/AJAX/" class="language">AJAX</a><a href="/PHP MySQL/" class="language">PHP MySQL</a><a href="/jQuery/" class="language">jQuery</a><a href="/Free Templates/" class="language">Free Templates</a><a href="/search/" class="language">Find Friends</a><a href="?photos" class="language">Photos</a><a href="?add_albums" class="language">Create Album</a>
  </div>
 </div> <br />
</center>
<table width="80%" align="center" >
 <tr>
 <!--leftside-->
  <td width="20%" valign="top">
    <div class="box1" > <!--divBox1-->
    <div class="box1Sub">
      <?php
      $host = 'localhost';
      $database = 'project';
      $user = 'root';
      $pass = '';
	  $id='';
	  try{
	   $DBH = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
        $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $STH = $DBH->prepare("select id from usersinfo where name='$sessionuser'");
        $STH->execute();
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $STH->fetch()){
           $id = $row['id'];
        }
      }catch(PDOException $e) {
        echo $e->getMessage();
	  }
      try{
        $DBH = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
        $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $STH = $DBH->prepare("select photo from usersinfo where id='$id'");
        $STH->execute();
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $STH->fetch()){
           $img = $row['photo'];
        }
      }catch(PDOException $e) {
        echo $e->getMessage();
      }
      $_SESSION['img']=$img;
      ?>
      <img src="/register/<?php echo $img; ?>" style="text-align:center" width="200" height="200" />
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
	 <?php
	 include("connect.inc");
	 $c=cxn();
	 if($c == "connected"){
	 $x='';
	   $q=mysql_query("select * from usersinfo where name='$sessionuser'"); 
	    while($f=mysql_fetch_array($q)){
		 $x=$f['id'];
		}
	  $c=0;
	  $q1=mysql_query("select rid,fid1,fid2,photo,name,
	 country from usersinfo inner join friends on
	 friends.fid2=usersinfo.id where fid1='$x' AND NOT(fid2='$x')  
	 order by rid desc limit 0,10");
	  while($f2=mysql_fetch_array($q1)){
	   $c++;
	  }
	 }
	 ?>
	 <a href='?friends' id='friends'>Friends (<?php echo $c; ?>)</a><hr>
     <?php
	 $x='';
	   $q=mysql_query("select * from usersinfo where name='$sessionuser'"); 
	    while($f=mysql_fetch_array($q)){
		 $x=$f['id'];
		}
	 $q1=mysql_query("select rid,fid1,fid2,photo,name,
	 country from usersinfo inner join friends on
	 friends.fid2=usersinfo.id where fid1='$x' AND security='shown' 
	 order by rid desc limit 0,10");
	  while($f2=mysql_fetch_array($q1)){
	    echo "<table><tr><td><img src='../register/".$f2['photo']."' width='50' height='50'></td><td valign='top'><b class='fr_name'>".$f2['name']."</b><br /><b class='fr_country'>".$f2['country']."</b></td></tr></table><hr>";
	  }
	  $q=mysql_query("select 
	  fid1,fid2,name1,name2,photo,country,id
	  from request inner join usersinfo on 
	  usersinfo.id=request.fid1 where fid2='$x' AND status='pending'");
	  $c_requests=0;
	  while($f=mysql_fetch_array($q)){
	    $c_requests++;
	  }
	 ?>
   <!--posts query
    select rid,fid1,fid2,posttxt,uid,photo 
	from posts inner join friends on 
	friends.fid2=posts.uid inner join 
	usersinfo on usersinfo.id=friends.fid2
	where fid1=x order by id desc 
   -->

    </td>
  <!--EndLeftside-->
    <td width="2%">&nbsp;</td>
  </td width="78%">
  <td valign="top">
  <!--body-->
<script>
getSession('<?php echo $sessionuser;?>');
</script>
  <table width="100%">
   <tr>
    <td align="left">
     <a class="mailOptions" href="javascript:void(0)" onclick="showPage('new');">New</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a class="mailOptions" href="javascript:void(0)" onclick="showPage('inbox');">Inbox</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a class="mailOptions" href="javascript:void(0)" onclick="showPage('sent');">Sent</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a class="mailOptions" href="javascript:void(0)" onclick="showPage('unread');">Unread</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a class="mailOptions" href="javascript:void(0)" onclick="showPage('profile');">Profile</a> 
	 &nbsp;&nbsp;|
	 <a class="requests" onclick="requests(<?php echo $x ?>)" href="javascript:void(0)" onclick="showPage('unread');"><img src='requests.jpg' width='23' height='20' class="requests" style="margin-bottom:-4px;">
	 <?php 
	 if($c_requests == 0){echo "";}
	 else{
	   echo "(".$c_requests.")";
	 }
	 ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
     <b id="ajaxLoading"></b>
    </td>
    <td align="right">
     <img src="/register/user.jpg" width="20" height="20" style="margin-bottom:-4px"/><b style="font-size:9pt;font-family:arial">Welcome<?php echo '<b style="font-size:9pt;font-family:arial;color:#aaaaaa;"> '.$sessionuser; ?><a href="/login/?action=logout" class="logout"><img src="logout.jpg" style="border: solid 0px white;margin-bottom:-5px" width="20" height="20" />Logout</a> </b>
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
   <style>
    #add{
      display:none;
    }
    a#addNew{
      font-family: arial;
      font-size: 9pt;
      font-weight: bold;
      color: #aaaaaa;
      text-decoration: none;
    }
    a#addNew:hover{
      font-family: arial;
      font-size: 9pt;
      font-weight: bold;
      color: #00ff33;
      text-decoration: none;
    }


   </style>
   <?php
     $date=date("D d-M-Y");
     $time=date("h:i:s");
   ?>
   <script>getUser('<?php echo $sessionuser;?>');</script>
   </div>
  <br />
  <img src="post.JPG" style="margin-bottom:-8px" /> <a href="javascript:void(0);" style="cursor: pointer" id="addNew">Write post</a><br /><br />
  <!---------------------EndSlider---------------->
<div id="ajaxContent">
<div id="msg"></div>
  <div id="add">
   <form id="postForm">
    <textarea name="txt1" id="txt1" style="border: solid 1px #66CCFF" cols="92" rows="5"></textarea><br />
    <div style="width:755px" >
    <table width="100%">
     <tr>
      <td align="right">
       <b id="error1"></b><input type="button" id="submit" value="Post"/></div>
      </td>
     </tr>
    </table>
    </form>
  </div>
  </div>
  <?php
  
  $X=$_SERVER['QUERY_STRING'];
   if($X=='friends'){
    echo '
     <b id="friends">
	 Friends page
     </b>
  </div>';
  }else if($X=='photos'){
   echo  "<a href='?add_albums&add_photos'>Add new photos to your albums</a>
   <br />
   ";?>
  
   <?php
  mysql_connect('localhost','root','');
  mysql_select_db('project');
  $q=mysql_query("select * from album where albumUid='$x'");
  $c=0;
  echo "<table cellspacing='15' cellpadding='15'><tr>";
   while($f=mysql_fetch_array($q)){
   //if($c%2==0){echo "<tr>";}
    echo "<td><div id='album".$c."'>
	<img name='".$f['albumPhoto']."' src='".$f['albumName']."/".$f['albumPhoto']."' width='200' height='200'><br />
	<table><tr>
	<td><a href='?view_photos&album_id=".$f['albumId']."'>".$f['albumName']."</a></b></td>
	<td align='right'><b id='del".$c."'><img onclick='deleteAlbum(".$c.",".$f['albumId'].")' src='del1.png' style='cursor:pointer' width='15' height='15' id='ajax".$c."' alt='Delete Album'";?>onmouseover="this.src='del2.png'" onmouseout="this.src='del1.png'"<?php echo "></b></td></tr>
	</table>
	</tD></div>";
	 $c++;
	if($c%3==0){echo "</tr><tr>";}
   }
   ?>
   <?php echo"
  </div>";
  }else if($X=='add_albums'){
   echo "<form action='?add_albums' method='post' enctype='multipart/form-data'>
   <table>
    <tr>
	 <td>
	  Album Name:
	 </td>
	 <td>
	  <input type='text' name='album_name'>
	 </td>
	</tr>
	<tr>
	 <td> 
	  Album photo
	 </td>
	 <td>
	  <input type='file' name='myfile' id='myfile'>
	 </td>
	 </tr>
	<tr>
	 <Td colspan=2>
	  <input type='submit' value='Create' name='setMe'>
	 </td>
	</tr>
   </table>
   </form>";
  if(isset($_POST['setMe'])){
  $album_name = @$_POST['album_name'];
  if(file_exists($album_name)){
    echo "The album <b>".$album_name." </b> is already exists";
  }else{
    mkdir($album_name,'777');
   $target_path = $album_name."/";
   $z=basename( @$_FILES['myfile']['name']);
   @$target_path = $target_path . basename( $_FILES['myfile']['name']);
    if(move_uploaded_file(@$_FILES['myfile']['tmp_name'], $target_path)) {
      
}
  mysql_connect('localhost','root','');
  mysql_select_db('project');
  mysql_query("insert into album values('','$z','$album_name','$x')");
   if(mysql_affected_rows()>0){
     echo "Your album <b>".$album_name."</b> has been created successfully <br>
	 <a href='?add_albums&add_photos'>Go and add photos to your album</a>
	 ";
   }
  }}else{echo "";}
  }else if($X == 'add_albums&add_photos'){
   $album_names = Array();
  mysql_connect('localhost','root','');
  mysql_select_db('project');
 $q= mysql_query("select * from album where albumUid='$x' order by albumId desc");
   while($f=mysql_fetch_array($q)){
    $album_names[] = $f['albumName']; 
   }
    echo "<form action='?add_albums&add_photos' method='post' enctype='multipart/form-data'>
   <table>
    <tr>
	 <td>
	  Album Name:
	 </td>
	 <td>
	  <select name='inalbum'>
	  
	   ";?><?php 
	   $limit=sizeof($album_names);
	   for($i=0;$i<$limit;$i++){
	     echo "
		 <option value='".$album_names[$i]."'>".$album_names[$i]."</option>
		 
		 ";
	   }?><?php echo "
	   </select>
	 </td>
	</tr>
	<tr>
	<tr>
	 <td>
	  Photo Name:
	 </td>
	 <td>
	  <input type='text' name='photoName'>
	 </td>
	</tr>
	 <td> 
	  Select Photo:
	 </td>
	 <td>
	  <input type='file' name='myfile' id='myfile'>
	 </td>
	 </tr>
	<tr>
	 <Td colspan=2>
	  <input type='submit' value='Add Photo' name='setMe'>
	 </td>
	</tr>
   </table>
   </form>";
   if(isset($_POST['setMe'])){
   $album_name = @$_POST['album_name'];
   $albumName=$_POST['inalbum'];
   $target_path = $albumName."/";
   $z=basename( @$_FILES['myfile']['name']);
   @$target_path = $target_path . basename( $_FILES['myfile']['name']);
    if(move_uploaded_file(@$_FILES['myfile']['tmp_name'], $target_path)) {}  
  $albumId='';
  $photoName=$_POST['photoName'];
  mysql_connect('localhost','root','');
  mysql_select_db('project');
  $q=mysql_query("select albumId from album where albumName='$albumName'");
   while($f=mysql_fetch_array($q)){
    $albumId=$f['albumId'];
   }
   mysql_query("insert into photos values('','$photoName','$z','$albumId','$x')");
    if(mysql_affected_rows()>0){
	 echo "Your photo <b>".$z."</b> has been successfully uploaded";
	}
  }
  }else if(substr($X,0,11)=='view_photos'){
  $y=substr($X,21);
  //echo $y;
    $q=mysql_query("select * from album inner join photos on album.albumId=photos.photoAlbum where albumUid='$x' AND albumId='$y' order by photoId desc");
	echo "<table cellspacing='15' cellpadding='15'><tr>";
   while($f=mysql_fetch_array($q)){
     echo "<td><div id='album".$c."'>
	 <a href='".$f['albumName']."/".$f['photoSrc']."' class='fancybox' data-fancybox-group='gallery' title='".$f['photoName']."'>
	<img name='".$f['albumPhoto']."' src='".$f['albumName']."/".$f['photoSrc']."' width='200' height='200' alt=''></a><br />
	<b>".$f['photoName']."</b>  &nbsp;<b id='del".$c."'><img onclick='deletePhoto(".$c.",".$f['photoId'].")' src='del1.png' style='cursor:pointer' width='15' height='15' id='ajax1".$c."' alt='Delete Photo'";?>onmouseover="this.src='del2.png'" onmouseout="this.src='del1.png'"<?php echo "></b><table><tr>
	<td></td>
	<td align='right'></td></tr>
	</table>
	</tD></div>";
	 $c++;
	if($c%3==0){echo "</tr><tr>";}
   }
   }else{
    echo  '<b id="update"></b>
  </div>';
  }
  
  ?>
   <br />
     </td>
    </tr>
   </table>
<!--EndBody-->
  </td>
 </tr>
</table>
<?php } }?>
</body>
</html>