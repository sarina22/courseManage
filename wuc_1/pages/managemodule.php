<?php

$module = new DatabaseTable('modules_tble');
$course = new DatabaseTable('courses_tble');

$getModule=$module->findAll();
$getCourse=$course->findAll();


if(isset($_POST['add'])){
	unset($_POST['add']);
	$module->update($_POST['module'],'id');
	$module->insert($_POST['module']);
 	$findModule=[];
 	header('Location:index.php?page=managemodule');

}

else{
if(isset($_GET['eid'])){
	$findModule=$module->find('id',$_GET['eid']);
	$findModule=$findModule->fetch();
}
else if(isset($_GET['did'])){
	$delete=$pdo->prepare("DELETE FROM student_modules_tble WHERE module_id=:id");
	$criteria=[
				'id'=>$_GET['did']
			];
	$delete->execute($criteria);
	$delete=$pdo->prepare("DELETE FROM module_lecturer_tble WHERE module_id=:id");
	$criteria=[
				'id'=>$_GET['did']
			];
	$delete->execute($criteria);
	$module->delete('id',$_GET['did']);
	header('Location:index.php?page=managemodule');
}
else{
		$findModule=[];
	}
}

$title = 'Manage Modules';
$criteria=['findModule'=>$findModule,
			'getModule'=>$getModule,
			'getCourse'=>$getCourse];


$content=loadTemplate('../templates/managemodule_template.php',$criteria);
