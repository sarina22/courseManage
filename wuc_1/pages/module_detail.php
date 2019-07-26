<?php
$getstudent = new DatabaseTable('students_tble');
$getmLeader= new DatabaseTable('module_leader_tble');
$studentModule= new DatabaseTable('student_modules_tble');
$modulemLeader= new DatabaseTable('module_lecturer_tble');
$getModule= new DatabaseTable('modules_tble');
$findModule=$getModule->find('id',$_GET['mid']);
$module=$findModule->fetch();



$smDetail= $studentModule->find('module_id',$_GET['mid']);
$smDetails=$smDetail->fetch();
$studentId=$smDetails['student_id'];

$student=$getstudent->find('id',$studentId);

$mlDetail= $modulemLeader->find('module_id',$_GET['mid']);
$mlDetails=$mlDetail->fetch();
$mLeaderId=$mlDetails['lecturer_id'];

$mLeader=$getmLeader->find('id',$mLeaderId);

$mid=$_GET['mid'];


if(isset($_GET['umid'])){
$delete=$pdo->prepare("DELETE FROM module_lecturer_tble WHERE lecturer_id=:lecturer_id AND module_id=:module_id");
$criteria=[
	'lecturer_id'=>$_GET['umid'],
	'module_id'=>$_GET['mid']
	];
$delete->execute($criteria);
header("Location:index.php?page=module_detail&mid=$mid");

}

if(isset($_GET['usid'])){
$delete=$pdo->prepare("DELETE FROM student_modules_tble WHERE student_id=:student_id AND module_id=:module_id");
$criteria=[
	'student_id'=>$_GET['usid'],
	'module_id'=>$_GET['mid']
	];
$delete->execute($criteria);
header("Location:index.php?page=module_detail&mid=$mid");
}


$title = 'Module Details';
$criteria=[
		'student'=>$student,
		'mLeader'=>$mLeader,
		'mid'=>$mid,
		'module'=>$module
		];

$content=loadTemplate('../templates/module_detail_template.php',$criteria);
