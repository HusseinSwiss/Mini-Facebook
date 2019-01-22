var user='';
function getUser(user1){
 user = user1;
}
function contentDisp() { 
//var url = $("#text").val(); 
$("#update").load("getPosts.php?view=posts"); 
} setInterval("contentDisp()",1000);
$(document).ready(function(){
 contentDisp();
    $("#addNew").click(function(){
         $("#add").slideToggle("fast");
    });
   $("#submit").click(function(){
      var txtVal = $("#txt1").val();
       if(txtVal == ''){
         $("#error1").html("Please enter a post");
       }else{
         //$("#error1").css('margin-bottom','-5px');
         $("#error1").html("<img src='ajax.gif' style='margin-bottom:-5px' width='20' height='20'/>");
         document.getElementById("submit").disabled = true;
         var dataString = "post="+user+"&postBody="+txtVal;
         $.ajax({
            type:'GET',
            url:'post.php',
            data:dataString,
            success:function(response){
              document.getElementById("submit").disabled = false;
               $("#error1").html("");
//$("ol#update li:first").fadeIn("slow");
            }
         }); 
        }
      });
    });