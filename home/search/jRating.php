<?php
session_start();
$e=$_SESSION['id'];
$f=$_SESSION['t'];
@$aResponse['error'] = false;
@$aResponse['message'] = '';
@$aResponse['server'] = '';
    	$id = intval($_POST['idBox']);
		$rate = floatval($_POST['rate']);
       mysql_connect('localhost','root','');
       mysql_select_db('test');
       mysql_query("insert into rating values('$rate','$e','$f')");
       $count=mysql_query("select count(*) from rating where tablex1='$f' and nid='$e'");
       while($k=mysql_fetch_array($count)){
            $count2=$k['count(*)'];
       }
       $sum=mysql_query("select sum(rate) from rating where tablex1='$f' and nid='$e'");
       while($k=mysql_fetch_array($sum)){
            $sum2=$k['sum(rate)'];
       }
       $avg=$sum2/$count2;
        $success = true;
		@$aResponse['message'] = 'Your rate has been successfuly recorded. Thanks for your rate :)';

	            $Response['server'] = 'dg<strong>التبتلا answer :</strong> Success : Your rate has been recorded. Thanks for your rate :)<br /> ';
				$aResponse['server'] .= '<b style=color:black> معدل إعجابك هو  :  %'.$rate*5;
				$aResponse['server'] .= ' <BR>المعدل العام : %'.(floor($avg)*5).' ';

			echo json_encode($aResponse);
?>