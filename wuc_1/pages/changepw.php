<?php
$title= 'Change Password';
$login_tble = new DatabaseTable('login_tble');
$id=$_SESSION['userId'];
$check=$login_tble->find('userId',$id);
$check= $check->fetch();

$password= $check['password'];


if(isset($_POST['changepw'])){
if(password_verify($_POST['old'],$password)){
	$new=password_hash($_POST['new'],PASSWORD_DEFAULT);

	$updatepw= $pdo->prepare("UPDATE login_tble SET password=:password where userId=$id");
	$criteria=['password'=>$new];

	if($updatepw->execute($criteria)) header("Location:index.php?page=changepw&msg=Password Updated");
}
else{
	header("Location:index.php?page=changepw&msg=Password do not match");
}
}

$criteria=[];
$content=loadTemplate('../templates/changepw_template.php',$criteria);
