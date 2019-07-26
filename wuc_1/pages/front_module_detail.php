<?php
if(isset($_GET['fmid']))
$fmid=$_GET['fmid'];

 $title = 'Module Details';
 $getModule= new DatabaseTable('modules_tble');
 $chapters = new DatabaseTable('chapters_tble');
 $module_selected= $getModule->find('id', $fmid);
 $mod_name= $module_selected-> fetch();
 $files = $chapters->find('module_id',$fmid);
 $files= $files->fetchAll();

$announcement = new DatabaseTable('announcements_tble');
$getAnnouncement = $announcement->find('module_id',$fmid);
$getAnnouncement =$getAnnouncement->fetchAll();


if(isset($_POST['addFile'])){
		$module_id = $_POST['chapter']['module_id'];
			$_POST['chapter']['name']= $_FILES['chapterfile']['name'];
	//uploading image name to database and saving file to folder
			$chapterfileName = $_FILES['chapterfile']['name'];
				$temporaryPath = $_FILES['chapterfile']['tmp_name'];
				$uploadPath = '../files/' . $chapterfileName;
				move_uploaded_file($temporaryPath, $uploadPath);
			// Referenced code ends here

	$_POST['chapter']['filename']=$uploadPath;
	$chapters->update($_POST['chapter'],'id');
	$chapters->insert($_POST['chapter']);
	header("Location:index.php?page=front_module_detail&fmid=$module_id");
	


}
 if(isset($_GET['cid'])){
	$chapters->delete('id',$_GET['cid']);
	// header("Location:index.php?page=front_module_detail&fmid=$module_id&msg=Deleted Successfully");
		echo '<script type=text/javascript>
							alert("Deleted Successfully.");
							window.location = "index.php?page=front_module_detail&fmid='.$fmid.'"
						</script>';
}

//module overview
if(isset($_POST['addoverview']))
{	
	// $_POST['announcement']['lecturer_id']=NULL;
	$getModule->update($_POST['getModule'],'id');
	$getModule->insert($_POST['getModule']);
  	header("Location:index.php?page=front_module_detail&fmid=$fmid");
}

// assessment student
$assignment= new DatabaseTable('assignments_tble');
$getassessment= $assignment->find('module_id', $fmid);
$getassessment= $getassessment-> fetchAll();

// .....................Add Assignment.............................

if(isset($_POST['addAssignment'])){
			$module_id = $_POST['assignment']['module_id'];
			$_POST['assignment']['name']= $_FILES['assignmentFile']['name'];
	//uploading image name to database and saving file to folder
			$chapterfileName = $_FILES['assignmentFile']['name'];
				$temporaryPath = $_FILES['assignmentFile']['tmp_name'];
				$uploadPath = '../files/' . $chapterfileName;
				move_uploaded_file($temporaryPath, $uploadPath);
			// Referenced code ends here

	$_POST['assignment']['file']=$uploadPath;



	$assignment->update($_POST['assignment'],'id');
	$assignment->insert($_POST['assignment']);
	header("Location:index.php?page=front_module_detail&fmid=$module_id");
}


// ------------------assignment submission-----------------
$submissions= new DatabaseTable('student_assignments_tble');
//used for viewing submissions and assigning grades
$sAssignment=$pdo->prepare("SELECT * FROM student_assignments_tble WHERE module_id=:module_id AND grade=:grade ");
$criteria=['module_id'=>$fmid, 'grade'=>''];
$sAssignment->execute($criteria);
$sAssignment=$sAssignment->fetchAll();


if (isset($_POST['submitAssignment'])) {
			$module_id =$_POST['submission']['module_id'];
			$_POST['submission']['name']= $_FILES['submissionFile']['name'];
			$submissionfileName = $_FILES['submissionFile']['name'];
			$temporaryPath = $_FILES['submissionFile']['tmp_name'];
			$uploadPath = '../files/' . $submissionfileName;
			move_uploaded_file($temporaryPath, $uploadPath);
		$_POST['submission']['filepath']=$uploadPath;

	// $submissions->update($_POST['submission'],'id');

		$submissions->insert($_POST['submission']);
	header("Location:index.php?page=front_module_detail&fmid=$module_id");
}

if(isset($_POST['addGrade'])){
$updateGrade= $pdo->prepare("UPDATE student_assignments_tble SET grade=:grade WHERE student_id=:student_id AND module_id=:module_id");
$module_id=$_POST['assignment']['module_id'];
$criteria=[
	'grade'=>$_POST['assignment']['grade'],
	'student_id'=>$_POST['assignment']['student_id'],
	'module_id'=>$module_id
	];
	$updateGrade->execute($criteria); 
	echo "<script> alert('Grade Added'); </script>";
	header("Location:index.php?page=front_module_detail&fmid=$module_id");
}


$criteria=[
	  
		'mod_name'=>$mod_name,
		'files'=>$files,
		'getModule'=>$getModule,
		'getAnnouncement'=>$getAnnouncement,
		'getassessment'=>$getassessment,
		'sAssignment'=>$sAssignment,
		];


$content=loadTemplate('../templates/front_module_detail_template.php',$criteria);

