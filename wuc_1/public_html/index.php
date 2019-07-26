<?php
require '../includes.php';
require '../checkLogin.php';

$admin= new DatabaseTable('admin_tble');
$leader= new DatabaseTable('module_leader_tble');
$student=new DatabaseTable('students_tble');
$smodule= new DatabaseTable('student_modules_tble');
$lmodule= new DatabaseTable('module_lecturer_tble');
$module_tbl= new DatabaseTable('modules_tble');
$module_taken_by = $smodule->find('student_id',$_SESSION['userId']);
$module_taken_by=$module_taken_by->fetchAll();

$module_taken_by_lec = $lmodule->find('lecturer_id',$_SESSION['userId']);
$module_taken_by_lec=$module_taken_by_lec->fetchAll();

if($_SESSION['type']=='student'){
	$getdetail= $student->find('id',$_SESSION['userId']);
	$getdetail=$getdetail->fetch();
$sTempVars=[
'title' => $title,
'content' =>$content,
'module_taken_by'=>$module_taken_by,
'getdetail'=>$getdetail
];
}


else if($_SESSION['type']=='moduleLeader'){
		$getdetail= $leader->find('id',$_SESSION['userId']);
		$getdetail=$getdetail->fetch();
$mTempVars=[
'title' => $title,
'content' =>$content,
'getdetail'=>$getdetail,
'module_taken_by_lec'=>$module_taken_by_lec
];
}

else {
$getdetail= $admin->find('id',$_SESSION['userId']);
		$getdetail=$getdetail->fetch();
$tempVars=[
'title' => $title,
'content' =>$content,
'getdetail'=>$getdetail
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
		$html=loadTemplate('admin_layout2.php',$tempVars);
	}

echo $html;

?>