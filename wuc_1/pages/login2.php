<?php
require '../includes.php';
session_start();

if(isset($_SESSION['userId']))
header('Location:../public_html/index.php');


if(isset($_POST['login'])){
	$checkUser = $pdo->prepare('SELECT * FROM login_tble WHERE username = :username AND archive=0');
	$criteria = ['username'=> $_POST['username']];
	$checkUser-> execute($criteria);
	if($checkUser->rowCount()>0){
		$isUser=$checkUser->fetch();
		
			if(password_verify($_POST['password'],$isUser['password'])){
				$_SESSION['userId']=$isUser['userId'];
				$_SESSION['username']=$isUser['username'];
				$_SESSION['type']=$isUser['type'];
				header('Location:../public_html/index.php');
			}
			else{
				header('Location:login2.php?msg=Incorrect Password');
			}
	}
	else{
		header('Location:login2.php?msg=User Not Found');
	}
}


?>

<head>
  <meta charset="UTF-8">
  <title>WUC Log In</title>
<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">

<!-- Custom CSS -->
<link href="../css/student_style.css" rel="stylesheet" type="text/css">

<!-- font-awesome icons CSS -->
<link href="../css/font-awesome.css" rel="stylesheet"> 

<link href="../css/custom.css" rel="stylesheet">
<link rel="icon" href="../images/small-logo.png">
    
 </head>

<body>
	<div class="col-md-12 general-grids grids-right widget-shadow">

		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1" style="padding: 0; background: #061d5e; border-bottom:10px solid #1b3581"><img src="../images/logo2.png" style="width: 100%;" ></h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form method="POST" action="login2.php">
							<span class="help-block with-errors"><div class="error center"><?php if(isset($_GET['msg'])) echo $_GET['msg']; ?> </div>
	<div class="success center"><?php if(isset($_GET['msgS'])) echo $_GET['msgS'];?></div></span>
							
							<input type="email" class="user" name="username" placeholder="Enter Your Email" required="" id="email" class="email" maxlength="256">
							<input type="password" placeholder="Password" required="" name="password" id="password" class="password">
							
							<input type="submit" name="login" value="Log In">
							
						</form>
					</div>
				</div>
				
			</div>
		</div>




	</div>


</body>