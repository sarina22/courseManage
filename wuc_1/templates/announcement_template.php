<?php
	extract ($findAnnouncement);
?>
<h2 class="title1"> Add Announcement </h3>
<div class=" form-grids row form-grids-right" >
<div class="widget-shadow " data-example-id="basic-forms"> 
<div class="form-body">
<form class="form-horizontal" action="index.php?page=announcement" method="POST"> 
		
		<input type="hidden" name="announcement[id]" value="<?php if(isset ($id)) echo $id; ?>"> 
		<input type="hidden" name="announcement[course_leader_id]" value="">

			<input type="hidden" name="announcement[admin_id]" value="<?php if(isset($admin_id)) echo $admin_id; else echo $_SESSION['userId'];?>">

			<input type="hidden" name="announcement[lecturer_id]" value="">

			<div class="form-group"> 
			<label  class="col-sm-2 control-label">Announcement Text: </label>
			<div class="col-sm-9">
			<textarea class="form-control" name="announcement[announcement]"><?php if(isset($announcement))echo $announcement;?></textarea></div> </div>

			<div class="form-group"> 
			<label class="col-sm-2 control-label" > Date: </label><div class="col-sm-9">
			<input class="form-control"  type="date" min="2019-01-01" max="2099-01-01" value="2019-01-01" name="announcement[date_added]" value="<?php if (isset($date_added)) echo $date_added;?>" ></div> </div>
			<div class="col-sm-offset-2"><input type="submit" name="add" value="Add Announcement"></div>
	</form>
</div> </div></div>



<div class="bs-example widget-shadow">
	<div class="form-title">
	<h2 class=" title1"> List of Announcements</h2></div>

<table class="table table-hover">
	<tr>
		<th>Added By</th>
		<th>Announcement</th>
		<th>Date</th>
		<th>Actions</th>
	</tr>
	<?php
	$admin = new DatabaseTable('admin_tble');
	$lecturer = new DatabaseTable('module_leader_tble');
	$courseL = new DatabaseTable('course_leader_tble');
	foreach($getAnnouncement as $row){?>
		<tr>
			<?php 
			if($row['admin_id']!=NULL) {
				$name=$admin->find('id',$row['admin_id']);
				$name=$name->fetch();
			}
			else if($row['course_leader_id']!=NULL) {
				$name=$courseL->find('id',$row['course_leader_id']);
				$name=$name->fetch();
			}
			else if($row['lecturer_id']!=NULL) {
				$name=$lecturer->find('id',$row['lecturer_id']);
				$name=$name->fetch();
			}

			?>
			<td><?php echo $name['firstname'].' '.$name['surname'];?></td>
			<td><?php echo $row['announcement'];?> </td>
			<td><?php echo $row['date_added']; ?> </td>
			<td> <a class="red" href="index.php?page=announcement&eid=<?php echo $row['id'];?>"> Edit </a>|| <a class="red" href="index.php?page=announcement&did=<?php echo $row['id'];?>"> Delete </a> </td>
		</tr>
		<?php }
		?>
	</table>


</div>