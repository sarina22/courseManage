<?php
$title = 'HOMEPAGE';

$student = new DatabaseTable('students_tble');
$mLeader = new DatabaseTable('module_leader_tble');
$cLeader = new DatabaseTable('course_leader_tble');
$announcement = new DatabaseTable('announcements_tble');
$findannouncement=$announcement->findAll();

$findannouncement= $findannouncement->fetchAll();

$lmodule= new DatabaseTable('module_lecturer_tble');
$module_tbl= new DatabaseTable('modules_tble');
$module_taken_by_lec = $lmodule->find('lecturer_id',$_SESSION['userId']);
$module_taken_by_lec=$module_taken_by_lec->fetchAll();
$arr=[
	'module_taken_by_lec'=> $module_taken_by_lec,
	'findannouncement'=>$findannouncement

];
$content=loadTemplate('../templates/module_leader_home_template.php',$arr);
// $content=loadTemplate('../templates/student_home_template.php',$arr);
