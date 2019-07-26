<?php
session_start();
unset($_SESSION['userId']);
header('Location:login2.php?msgS=Logged Out Successfully');
?>