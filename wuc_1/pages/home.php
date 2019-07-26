<?php
$title = 'HOMEPAGE';


$student = new DatabaseTable('students_tble');
$courses = new DatabaseTable('courses_tble');
$mLeader = new DatabaseTable('module_leader_tble');
$cLeader = new DatabaseTable('course_leader_tble');
$admin = new DatabaseTable('admin_tble');
$announcement = new DatabaseTable('announcements_tble');


$findadmin=$admin->find('id',$_SESSION['userId']);
$findstudent=$student->findAll();
$findcourse=$courses->findAll();
$findmLeader=$mLeader->findAll();
$findcLeader=$cLeader->findAll();
$findannouncement=$announcement->findAll();



$arr=[
	'findstudent'=> $findstudent,
	'findcourse'=> $findcourse,
	'findmLeader'=> $findmLeader,
	'findcLeader'=> $findcLeader,
	'findannouncement'=>$findannouncement

];


$content=loadTemplate('../templates/admin_home_template.php',$arr);


?>