<?php
$title="Forum";

if(isset($_GET['foid'])) {
	$foid= $_GET['foid'];
	$id= $_SESSION['userId'];
	// tables
	$forum= new DatabaseTable('forum');
	$lecturer= new DatabaseTable('module_leader_tble');
	$student= new DatabaseTable('students_tble');

	// fetching
	$forums=$forum->find('module_id',$foid);
	$forums= $forums->fetchAll();

	if($_SESSION['type']=='student'){
		$getUser= $student->find('id', $id);
		$getUser=$getUser->fetch();
	}


	if($_SESSION['type']=='moduleLeader'){
		$getUser= $lecturer->find('id', $id);
		$getUser=$getUser->fetch();
	}


	if (isset($_POST['addquestion'])) {
		$forum->insert($_POST['question']);
		header("Location:index.php?page=forum&foid=$foid");
	}

		$criteria=[
		'forums'=> $forums,
		'getUser'=>$getUser
	];
}



else{
	$criteria=[];
}

$content=loadTemplate('../templates/forum_template.php',$criteria);