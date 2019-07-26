<?php
$getstudent = new DatabaseTable('students_tble');

$archive= $pdo->prepare("SELECT * FROM students_tble WHERE archive=1");
$archive->execute();
$archive=$archive->fetchAll();

$active= $pdo->prepare("SELECT * FROM students_tble WHERE archive=0 AND approve=1");
$active->execute();
$active=$active->fetchAll();

$student=$getstudent->findAll();

$title = 'View Student';

$criteria=[
			'student'=>$student,
	 		'active'=>$active,
	 		'archive'=>$archive
];

$content=loadTemplate('../templates/viewstudent_template.php',$criteria);
