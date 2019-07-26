<?php
$title="Forum";


	$forumArea= new DatabaseTable('forum');
	$lecturer= new DatabaseTable('module_leader_tble');
	$student= new DatabaseTable('students_tble');
	$forumAnswer= new DatabaseTable('forum_answers_tble');

if(isset($_GET['ansid'])) {
	$ansid= $_GET['ansid'];
	$id= $_SESSION['userId'];
	// tables

	// fetching
	$forums=$forumArea->find('id',$ansid);
	$forums= $forums->fetch();

	$answers=$forumAnswer->find('question_id',$ansid);
	$answers= $answers->fetchAll();
}

	if(isset($_POST['addAnswer']))
	{
		$ansid=$_POST['answer']['question_id'];

		// echo '<pre>';
		// print_r($_POST['answer']); die();

		$forumAnswer->insert($_POST['answer']);

		header("Location:index.php?page=answer_forum&ansid=$ansid");
	}


	$criteria=[
		'forums'=> $forums,
		'answers'=>$answers
	];




$content=loadTemplate('../templates/answer_forum_template.php',$criteria);