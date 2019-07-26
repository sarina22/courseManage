<?php
$title = 'Conditional Letter';

if (isset($_GET['cnid'])) {
	$cnid= $_GET['cnid'];
	$getstudent = new DatabaseTable('students_tble');
$student=$getstudent->find('id',$cnid);
$student=$student->fetch();
$criteria=['student'=> $student];

}

else{
	$criteria=[];
}







$content=loadTemplate('../templates/conditional_template.php',$criteria);