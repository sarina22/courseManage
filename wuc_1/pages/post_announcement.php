<?php

$announcement = new DatabaseTable('announcements_tble');
$getAnnouncement=$announcement->findAll();

$lmodule= new DatabaseTable('module_lecturer_tble');
$module_tbl= new DatabaseTable('modules_tble');
$module_taken_by_lec = $lmodule->find('lecturer_id',$_SESSION['userId']);
$module_taken_by_lec=$module_taken_by_lec->fetchAll();

$findAnnouncement=[];

if(isset($_POST['add'])){
unset($_POST['add']);
	$_POST['announcement']['course_leader_id']=NULL;
  	$_POST['announcement']['admin_id']=NULL;


  	$announcement->update($_POST['announcement'],'id');
	$announcement->insert($_POST['announcement']);
	$findAnnouncement=[];
	echo "<script type=\"text/javascript\">
							alert(\"Announcement Posted.\");
							window.location = \"index.php\"
						</script>";


}

if(isset($_GET['eAid'])){
	$findAnnouncement=$announcement->find('id',$_GET['eAid']);
	$findAnnouncement=$findAnnouncement->fetch();
}
if(isset($_GET['dAid'])){
	$announcement->delete('id',$_GET['dAid']);
	echo "<script type=\"text/javascript\">
							alert(\"Announcement Deleted.\");
							window.location = \"index.php\"
						</script>";

}


$title = 'Post Announcement';
$criteria=[
			'findAnnouncement'=>$findAnnouncement,
			'module_taken_by_lec'=>$module_taken_by_lec
		];


$content=loadTemplate('../templates/post_announcement_template.php',$criteria);
