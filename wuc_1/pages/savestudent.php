<?php

$student = new DatabaseTable('students_tble');
$modules = new DatabaseTable('modules_tble');
$getModule=$modules->findAll();
$login = new DatabaseTable('login_tble');

if(isset($_POST["Import"])){
		 $filename=$_FILES["file"]["tmp_name"];
		$flag=true;
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	         	if($flag){$flag=false; continue;}
 				
	         	$password=password_hash($emapData[9],PASSWORD_DEFAULT);
	          //It will insert a row to our students_tble  from our csv file`
	           $sql = "INSERT into students_tble (firstname,middlename,surname,email,dob,address,nationality,contact_number,level, address2,qualification, status, course_id) 
	            	values('$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[10]','$emapData[11]' ,'$emapData[12]' ,'$emapData[13]', '$emapData[14]')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	            	// echo $sql; die();
	          $result = $pdo->query($sql);
	          $id=$pdo->lastInsertId();
	          $loginsql="INSERT INTO login_tble VALUES('$emapData[4]','$password','student','$id','0')";
	          $loginresult=$pdo->query($loginsql);
				if(!$result)
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php?page=savestudent\"
						</script>";

				}
	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php?page=view_all_students\"
					</script>";

		 }
	}	 



if(isset($_POST['add'])){
	unset($_POST['add']);
	$student_detail = $student->find('username',$_POST['student']['username']);
	$studentId= $student_detail->fetch();

	$password=password_hash($_POST['student']['password'],PASSWORD_DEFAULT);
	unset($_POST['student']['password']);

	 	 $student->update($_POST['student'],'id');
	 	 $student->insert($_POST['student']);

 	 	if(isset($_POST['student']['id'])&&$_POST['student']['id']!=''){
 	 			$criteria=[
 	 			'username'=>$_POST['student']['email'],
 	 			'password'=>$password,
 	 			'type'=>'student',
 	 			'userId'=>$_POST['student']['id']
 	 			];
 	 		 	 $login->update($criteria,'userId');
 	 		 	 header('Location:index.php?page=viewstudent');
 	 	}
 	 	else{
 	 			$criteria=[
 	 			'username'=>$_POST['student']['email'],
 	 			'password'=>$password,
 	 			'type'=>'student',
 	 			'userId'=>$pdo->lastInsertId()
 	 			];
 	 			$login->insert($criteria);
header('Location:index.php?page=savestudent');
 	 	}
 	 	$findStudent=[];
	 	
}

else if(isset($_POST['assign'])){
	$student_id=$_POST['student_id'];
	foreach ($_POST['smodule'] as $key => $value) {
		$ins=$pdo->prepare("INSERT INTO student_modules_tble VALUES (:student_id,:module_id)");
		$criteria=[
				'student_id'=>$student_id,
				'module_id'=>$value
				];
		$ins->execute($criteria);
	}
		$findStudent=[];
	 	//header('Location:index.php?page=viewstudent');
	 	 echo "<script type=\"text/javascript\">
						alert(\"Module Assigned.\");
						window.location = \"index.php?page=viewstudent\"
					</script>";

		
}

else{
if(isset($_GET['eid'])){
	$findStudent=$student->find('id',$_GET['eid']);
	$findStudent=$findStudent->fetch();
}
else if(isset($_GET['did'])){

	$delete=$pdo->prepare("DELETE FROM student_modules_tble WHERE student_id=:id");
	$criteria=[
				'id'=>$_GET['did']
			];
	$delete->execute($criteria);

	$student->delete('id',$_GET['did']);
	$login->delete('userId',$_GET['did']);
	// header('Location:index.php?page=viewstudent');
	 echo "<script type=\"text/javascript\">
						alert(\"Student Removed.\");
						window.location = \"index.php?page=viewstudent\"
					</script>";
}


else if(isset($_GET['aid'])){
	$findStudent=$student->find('id',$_GET['aid']);
	$findStudent=$findStudent->fetch();
	
	}
else if(isset($_GET['arid'])){
	$id=$_GET['arid'];
	$update = $pdo->prepare("UPDATE students_tble SET archive='1' WHERE id=:id");
	$updateLogin = $pdo->prepare("UPDATE login_tble SET archive='1' WHERE userId=:id");
	$update->execute(['id'=>$id]);
	header('Location:index.php?page=viewstudent');
	 

}
else if(isset($_GET['uarid'])){
	$id=$_GET['uarid'];
	$update = $pdo->prepare("UPDATE students_tble SET archive='0' WHERE id=:id");
	$updateLogin = $pdo->prepare("UPDATE login_tble SET archive='0' WHERE userId=:id");
	$update->execute(['id'=>$id]);
	header('Location:index.php?page=viewstudent');
}

else{
		$findStudent=[];
	}
}



$criteria=[
			'findStudent'=>$findStudent,
	 		'getModule'=>$getModule,
 		];




$title = 'Add/Edit Student';

$content=loadTemplate('../templates/addstudent_template.php',$criteria);
