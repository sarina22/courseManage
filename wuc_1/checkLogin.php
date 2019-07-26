<?php

session_start();
if(!isset($_SESSION['userId'])){
	header('Location:../pages/login2.php');
}


if(isset($_GET['page'])){require '../pages/'.$_GET['page'].'.php';}
else{
	if($_SESSION['type']=='moduleLeader')
		require '../pages/module_leader_home.php';
	else if($_SESSION['type']=='student')
		require '../pages/student_home.php';
	else require '../pages/home.php';
}
?>
