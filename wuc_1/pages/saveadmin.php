<?php

$admin = new DatabaseTable('admin_tble');
$login = new DatabaseTable('login_tble');

if(isset($_POST['add'])){
	unset($_POST['add']);
	$password=password_hash($_POST['admin']['password'],PASSWORD_DEFAULT);
	unset($_POST['admin']['password']);

		$admin->update($_POST['admin'],'id');
 	 	$admin->insert($_POST['admin']);
 	 	if(isset($_POST['admin']['id'])&&$_POST['admin']['id']!=''){
 	 			$criteria=[
 	 			'username'=>$_POST['admin']['username'],
 	 			'password'=>$password,
 	 			'type'=>'admin',
 	 			'userId'=>$_POST['admin']['id']
 	 			];
 	 		 	 $login->update($criteria,'userId');
 	 		 	 header('Location:index.php?page=viewadmin');
 	 	}else{
 	 			$criteria=[
 	 			'username'=>$_POST['admin']['username'],
 	 			'password'=>$password,
 	 			'type'=>'admin',
 	 			'userId'=>$pdo->lastInsertId()
 	 			];
 	 			$login->insert($criteria);
header('Location:index.php?page=saveadmin');
 	 	}
 	$findadmin=[];
 	
}

else{
if(isset($_GET['eid'])){
	$findadmin=$admin->find('id',$_GET['eid']);
	$findadmin=$findadmin->fetch();
}
else if(isset($_GET['did'])){
	$admin->delete('id',$_GET['did']);
	$login->delete('userId',$_GET['did']);
	header('Location:index.php?page=viewadmin');
}
else{
		$findadmin=[];
	}
}


$criteria=[
			'findadmin'=>$findadmin,
 		];




$title = 'Add/Edit Admin';

$content=loadTemplate('../templates/addadmin_template.php',$criteria);
