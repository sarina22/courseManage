<?php
require '../includes.php';
require '../checkLogin.php';

$student=new DatabaseTable('students_tble');
$smodule= new DatabaseTable('student_modules_tble');
$lmodule= new DatabaseTable('module_lecturer_tble');
$module_tbl= new DatabaseTable('modules_tble');
$module_taken = $smodule->find('student_id',$_SESSION['userId']);
$module_taken=$module_taken->fetchAll();

$module_taken_by_lec = $lmodule->find('lecturer_id',$_SESSION['userId']);
$module_taken_by_lec=$module_taken_by_lec->fetchAll();

	if($_SESSION['type']=='student'){
		$getdetail= $student->find('id',$_SESSION['userId']);
		$getdetail=$getdetail->fetch();
$sTempVars=[
'title' => $title,
'content' =>$content,
'module_taken'=>$module_taken,
'getdetail'=>$getdetail
];
}


else if($_SESSION['type']=='moduleLeader'){
		$getdetail= $lmodule->find('id',$_SESSION['userId']);
		$getdetail=$getdetail->fetch();
$mTempVars=[
'title' => $title,
'content' =>$content,
'getdetail'=>$getdetail,
'module_taken_by_lec'=>$module_taken_by_lec
];
}

else {

$tempVars=[
'title' => $title,
'content' =>$content,
];
}



	
	if($_SESSION['type']=='student')
	{
		 $html=loadTemplate('student_layout.php',$sTempVars);
	}
	else if ($_SESSION['type']=='moduleLeader'){
			$html=loadTemplate('module_leader_layout.php',$mTempVars);
	}
	else{
		$html=loadTemplate('admin_layout.php',$tempVars);
	}

echo $html;

?>