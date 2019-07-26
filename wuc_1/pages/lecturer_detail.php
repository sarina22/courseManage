<?php
$ml_id=$_GET['ml_id'];
$getLeader = new DatabaseTable('module_leader_tble');
$leaderModule= new DatabaseTable('module_lecturer_tble');

$findLeader=$getLeader->find('id',$_GET['ml_id']);
$module_leader=$findLeader->fetch();


$smDetail= $leaderModule->find('lecturer_id',$_GET['ml_id']);
$module=$smDetail->fetchAll();

$title = 'Module Leader Details';
$criteria=[
		'module_leader'=>$module_leader,
		'ml_id'=>$ml_id,
		'module'=>$module
		];

$content=loadTemplate('../templates/lecturer_detail_template.php',$criteria);

?>