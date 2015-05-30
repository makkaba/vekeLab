<?php
include_once 'db_info.php';


$loginQry = "SELECT userpw FROM login WHERE userid = '{$_POST['userid']}'";
$result = mysql_query($loginQry);
$row = mysql_fetch_array($result);
$userid = $_POST['userid'];



if( !empty($row) && ($row['userpw'] == $_POST['userpw']))
{
	session_start();
	$_SESSION['user_id'] = $userid;



	header("Location:/vekelab/home.php");

	exit();
}

else{
echo "비밀번호가 올바르지 않습니다";

}


?>
