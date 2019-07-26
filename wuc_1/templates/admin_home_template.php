<div class="display">
	
<div class="box orange">
	<p>Total Students </p><br>
	<div class="detail"><img src="../images/hat.png"> 
	<h3><?php echo $findstudent->rowCount(); ?></h3></div>
</div>

<div class="box light-blue">
	<p> Total Staffs </p><br>
	<div class="detail"><img src="../images/download.png"> 
	<h3><?php echo ($findmLeader->rowCount()+$findcLeader->rowCount());?></h3></div>
</div>

<div class="box purple">
	<p> Total Courses </p><br>
	<div class="detail"><img src="../images/book.png">
	 <h3><?php echo $findcourse->rowCount(); ?> </h3></div>
</div>

<div class="box announcement">
	<p> Announcements </p><br>
	<div class="detail"><img src="../images/announce.png">
	 <h3><?php echo $findannouncement->rowCount(); ?> </h3></div>
</div>

</div>