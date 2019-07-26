<?php

$course = new DatabaseTable('courses_tble');

$getCourse=$course->findAll();

if(isset($_POST['add'])){
	unset($_POST['add']);
	$course->update($_POST['course'],'id');
	$course->insert($_POST['course']);

 	$findCourse=[];
 	header('Location:index.php?page=managecourse');
}

else{
if(isset($_GET['eid'])){
	$findCourse=$course->find('id',$_GET['eid']);
	$findCourse=$findCourse->fetch();
}
else if(isset($_GET['did'])){
	$course->delete('id',$_GET['did']);
	header('Location:index.php?page=managecourse');
}
else{
		$findCourse=[];
	}
}

$title = 'Manage Courses';
$criteria=['findCourse'=>$findCourse,
			'getCourse'=>$getCourse];


$content=loadTemplate('../templates/managecourse_template.php',$criteria);
