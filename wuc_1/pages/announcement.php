<?php

$announcement = new DatabaseTable('announcements_tble');
$getAnnouncement=$announcement->findAll();



if(isset($_POST['add'])){
unset($_POST['add']);
  	$_POST['announcement']['course_leader_id']=NULL;
  	$_POST['announcement']['lecturer_id']=NULL;
	$announcement->update($_POST['announcement'],'id');
	$announcement->insert($_POST['announcement']);
 	$findAnnouncement=[];

 	header('Location:index.php?page=announcement');

}

else{
if(isset($_GET['eid'])){
	$findAnnouncement=$announcement->find('id',$_GET['eid']);
	$findAnnouncement=$findAnnouncement->fetch();
}
else if(isset($_GET['did'])){
	$announcement->delete('id',$_GET['did']);
	header('Location:index.php?page=announcement');
}
else{
		$findAnnouncement=[];
	}
}

$title = 'Manage Announcements';
$criteria=['findAnnouncement'=>$findAnnouncement,
			'getAnnouncement'=>$getAnnouncement
		];


$content=loadTemplate('../templates/announcement_template.php',$criteria);
