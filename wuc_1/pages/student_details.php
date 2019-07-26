<?php
$getstudent = new DatabaseTable('students_tble');
$studentModule= new DatabaseTable('student_modules_tble');

$findStudent=$getstudent->find('id',$_GET['sd_id']);
$student=$findStudent->fetch();


$smDetail= $studentModule->find('student_id',$_GET['sd_id']);
$module=$smDetail->fetchAll();



$sd_id=$_GET['sd_id'];



$title = 'Student Details';
$criteria=[
		'student'=>$student,
		'sd_id'=>$sd_id,
		'module'=>$module
		];

$content=loadTemplate('../templates/student_details_templates.php',$criteria);

?>