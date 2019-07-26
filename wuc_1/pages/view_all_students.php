<?php
$getstudent = new DatabaseTable('students_tble');

$student=$getstudent->findAll();

$title = 'View Students';

if (isset($_GET['apid'])) {
	$id=$_GET['apid'];
	$update = $pdo->prepare("UPDATE students_tble SET approve='1' WHERE id=:id");
	$update->execute(['id'=>$id]);
	header('Location:index.php?page=view_all_students');
}

if(isset($_GET['did'])){
	$getstudent->delete('id',$_GET['did']);
	header('Location:index.php?page=view_all_students');
}

$criteria=[
			'student'=>$student,
	 	
];

$content=loadTemplate('../templates/view_all_students_template.php',$criteria);
