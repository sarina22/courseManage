<?php

$mLeader = new DatabaseTable('module_leader_tble');
$cLeader = new DatabaseTable('course_leader_tble');
$modules = new DatabaseTable('modules_tble');
$assignModule= new DatabaseTable('module_lecturer_tble');
$getModule=$modules->findAll();
$login = new DatabaseTable('login_tble');

if(isset($_POST['add'])){
	unset($_POST['add']);
	$password=password_hash($_POST['moduleLeader']['password'],PASSWORD_DEFAULT);
	unset($_POST['moduleLeader']['password']);

	 	 $mLeader->update($_POST['moduleLeader'],'id');
	 	 $mLeader->insert($_POST['moduleLeader']);

 	 	if(isset($_POST['moduleLeader']['id'])&&$_POST['moduleLeader']['id']!=''){
 	 			$criteria=[
 	 			'username'=>$_POST['moduleLeader']['email'],
 	 			'password'=>$password,
 	 			'type'=>'moduleLeader',
 	 			'userId'=>$_POST['moduleLeader']['id']
 	 			];
 	 		 	 $login->update($criteria,'userId');
 echo "<script type=\"text/javascript\">
						alert(\"Saved.\");
						window.location = \"index.php?page=viewstaff\"
					</script>";
 	 	}
 	 	else{
 	 			$criteria=[
 	 			'username'=>$_POST['moduleLeader']['email'],
 	 			'password'=>$password,
 	 			'type'=>'moduleLeader',
 	 			'userId'=>$pdo->lastInsertId()
 	 			];
 	 			$login->insert($criteria);
 echo "<script type=\"text/javascript\">
						alert(\"Saved.\");
						window.location = \"index.php?page=savestaff\"
					</script>";
 	 	}
 	 	$moduleLeader=[];
	 	// header('Location:index.php?page=viewstaff');
	 	  
}

else if(isset($_POST['assign'])){
	$lecturer_id=$_POST['lecturer_id'];
	foreach ($_POST['smodule'] as $key => $value) {
		$ins=$pdo->prepare("INSERT INTO module_lecturer_tble VALUES (:lecturer_id,:module_id)");
		$criteria=[
				'lecturer_id'=>$lecturer_id,
				'module_id'=>$value
				];
		$ins->execute($criteria);
		$moduleLeader=[];
	 	 echo "<script type=\"text/javascript\">
						alert(\"Module Assigned.\");
						window.location = \"index.php?page=viewstaff\"
					</script>";

		}
}
	
else{
		$moduleLeader=[];

	if(isset($_GET['eMid'])){
		$moduleLeader=$mLeader->find('id',$_GET['eMid']);
		$moduleLeader=$moduleLeader->fetch();
	}
	else if(isset($_GET['dMid'])){
		$mLeader->delete('id',$_GET['dMid']);
		$login->delete('userId',$_GET['dMid']);
		 echo "<script type=\"text/javascript\">
						alert(\"Deleted.\");
						window.location = \"index.php?page=viewstaff\"
					</script>";
	}
	else if(isset($_GET['dCid'])){
		$cLeader->delete('id',$_GET['dCid']);
		 echo "<script type=\"text/javascript\">
						alert(\"Deleted.\");
						window.location = \"index.php?page=viewstaff\"
					</script>";
	}
	else if(isset($_GET['aMid'])){
		$moduleLeader=$mLeader->find('id',$_GET['aMid']);
		$moduleLeader=$moduleLeader->fetch();
	}

	else if(isset($_GET['asid'])){
	$id=$_GET['asid'];
	$update = $pdo->prepare("UPDATE module_leader_tble SET archive='1' WHERE id=:id");
	$updateLogin = $pdo->prepare("UPDATE login_tble SET archive='1' WHERE userId=:id");
	$update->execute(['id'=>$id]);
	header('Location:index.php?page=viewstaff');

}
else if(isset($_GET['uasid'])){
	$id=$_GET['uasid'];
	$update = $pdo->prepare("UPDATE module_leader_tble SET archive='0' WHERE id=:id");
	$updateLogin = $pdo->prepare("UPDATE login_tble SET archive='0' WHERE userId=:id");
	$update->execute(['id'=>$id]);
	header('Location:index.php?page=viewstaff');
}
	
}

$criteria=[
			'moduleLeader'=>$moduleLeader,
	 		'getModule'=>$getModule,
 		];


$title = 'Add/Edit Module Leader';

$content=loadTemplate('../templates/addstaff_template.php',$criteria);
