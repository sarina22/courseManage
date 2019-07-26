<?php
$stid= $_SESSION['userId'];
$title = 'Grades';
$student_grades= new DatabaseTable('student_assignments_tble');
$grade= $student_grades->find('student_id',$stid);
$grade= $grade->fetchAll();

$criteria=[
	  
		'grade'=> $grade
		];


$content=loadTemplate('../templates/student_grades_template.php',$criteria);

