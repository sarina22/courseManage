<?php
$getModuleLeader = new DatabaseTable('module_leader_tble');
$leaderModule= new DatabaseTable('module_lecturer_tble');
$getModule= new DatabaseTable('modules_tble');
$findLeader=$getModuleLeader->find('id',$_GET['ml_id']);
$leader=$findLeader->fetch();


$smDetail= $leaderModule->find('lecturer_id',$_GET['ml_id']);
$smDetails=$smDetail->fetch();
$module_id=$smDetails['module_id'];

$module=$getModule->find('id',$module_id);
$ml_id=$_GET['ml_id'];



$title = 'Student Details';
$criteria=[
		'leader'=>$leader,
		'ml_id'=>$ml_id,
		'module'=>$module
		];

$content=loadTemplate('../templates/module_leader_details_template.php',$criteria);

?>