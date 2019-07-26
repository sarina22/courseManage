<?php

$title = 'Unconditional Letter';

if (isset($_GET['unid'])) {
	$unid= $_GET['unid'];
	$getstudent = new DatabaseTable('students_tble');
$student=$getstudent->find('id',$unid);
$student=$student->fetch();
$criteria=['student'=> $student];

}

else{
	$criteria=[];
}


$content=loadTemplate('../templates/unconditional_template.php',$criteria);