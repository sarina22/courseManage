<?php
$getadmin= new DatabaseTable('admin_tble');

$admin=$getadmin->findAll();

$title = 'View Admin';

$content=loadTemplate('../templates/viewadmin_template.php',['admin'=>$admin]);
