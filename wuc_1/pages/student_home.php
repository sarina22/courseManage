<?php
$title = 'HOMEPAGE';
$smodule= new DatabaseTable('student_modules_tble');
$announcement_tble = new DatabaseTable('announcements_tble');
$findannouncement=$announcement_tble->findAll();
$module_taken = $smodule->find('student_id',$_SESSION['userId']);
$module_taken=$module_taken->fetchAll();

$arr=[
	'findannouncement'=>$findannouncement,
	'module_taken'=>$module_taken

];

$content=loadTemplate('../templates/student_home_template.php',$arr);
