<?php
$title = 'Student Grades';
$student_grades= new DatabaseTable('student_assignments_tble');
$student_name= new DatabaseTable('students_tble');

$grade= $student_grades->findAll();
$grade= $grade->fetchAll();


$criteria=[
	  
		'grade'=> $grade

		];


$content=loadTemplate('../templates/view_grades_template.php',$criteria);

