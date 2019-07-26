<?php
$getcLeader = new DatabaseTable('course_leader_tble');
$getmLeader = new DatabaseTable('module_leader_tble');


$cLeader=$getcLeader->findAll();
$mLeader=$getmLeader->findAll();

$archive= $pdo->prepare("SELECT * FROM module_leader_tble WHERE archive=1");
$archive->execute();
$archive=$archive->fetchAll();

$active= $pdo->prepare("SELECT * FROM module_leader_tble WHERE archive=0");
$active->execute();
$active=$active->fetchAll();

$title = 'View Staff';
$criteria= [
			
			'mLeader'=>$mLeader,
			'archive'=>$archive,
			'active'=> $active
			];

$content=loadTemplate('../templates/viewstaff_template.php',$criteria);
