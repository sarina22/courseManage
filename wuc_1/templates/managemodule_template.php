<?php
	extract ($findModule);
?>

<h3 class="title1" id="role"> Add Module </h3>
<div class=" form-grids row form-grids-right" >
<div class="widget-shadow " data-example-id="basic-forms"> 
<div class="form-body">
<form class="form-horizontal" action="index.php?page=managemodule" method="POST"> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Module ID</label> <div class="col-sm-9"> <?php if(!isset ($id)){?><input type="text" class="form-control" id="inputEmail3" name="module[id]" value="<?php if(isset ($id)) echo $id; ?>"> 
<?php } else { ?> 
<input type="hidden" class="form-control" name="module[id]" value="<?php if(isset ($id)) echo $id; ?>">
<label class="col-sm-2 control-label"> <?php echo $id;?> </label> <?php } ?>
 </div>
</div>
<div class="form-group"> 
<label class="col-sm-2 control-label">Title</label> <div class="col-sm-9"><input type="text" class="form-control" id="inputEmail3" name="module[title]" value="<?php if(isset($title)) echo $title;?>"></div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Level</label> <div class="col-sm-9"><select class="form-control1" name="module[level]" value="<?php if (isset($level)) echo $level;?>">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		
	</select></div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Course:</label> <div class="col-sm-9">
	<select name="module[course_id]" class="form-control1" >
		<?php foreach ($getCourse as $course) { ?>
			<option value="<?php echo $course['id']; ?>" <?php if(isset($course_id)&&$course['id']==$course_id) echo 'selected';?> ><?php echo $course['title'];  ?> </option><?php } ?>
		</select></div>
</div>

<div class="col-sm-offset-2"><button type="submit"class="btn btn-default" name="add" value="Save Module">Save Module</button></div>




</form>
</div>
</div>
</div>


<!-- List of modules -->
<h3 class="title1"> List Of Modules </h3>
<div class="bs-example widget-shadow">

<table class="table table-hover">
	<tr>
		<th>Course</th>
		<th>Module ID</th>
		<th>Title</th>
		<th>Level</th>
		<th>Actions</th>
	</tr>
	<?php
	$courses = new DatabaseTable('courses_tble');
	foreach($getModule as $row)
	{?>
		<tr>
		<?php 	$getCourse=$courses->find('id',$row['course_id']); 
				$getCourse=$getCourse->fetch();
		?>
			<td><?php echo $getCourse['title'];?></td>
			<td><a href="index.php?page=module_detail&mid=<?php echo $row['id'];?>"><?php echo $row['id'];?></td>
			<td><?php echo $row['title'];?></td>
			<td><?php echo $row['level'];?></td>
			<td> <a class="red" href="index.php?page=managemodule&eid=<?php echo $row['id'];?>"> Edit </a>|| <a class="red" href="index.php?page=managemodule&did=<?php echo $row['id'];?>"> Delete </a> </td>
		</tr>
		<?php }
		?>
		</table>
</div>