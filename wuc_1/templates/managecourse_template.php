<?php extract ($findCourse); ?>
<h3 class="title1" id="role"> Add Course </h3>
<div class=" form-grids row form-grids-right" >
<div class="widget-shadow " data-example-id="basic-forms"> 
<div class="form-body">
<form class="form-horizontal" action="index.php?page=managecourse" method="POST"> 
<input type="hidden" name="course[id]" value="<?php if(isset ($id)) echo $id; ?>">
<div class="form-group"> 
<label class="col-sm-2 control-label">Course Name</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="course[title]" value="<?php if(isset($title)) echo $title;?>"> 
</div> </div>

<div class="col-sm-offset-2"> 
 <button type="submit" class="btn btn-default" name="add" value="Save">Save</button>
</div> 
</form>
</div>
</div>
</div>

<!-- ------------List of courses-------------------- -->
<h3 class="title1"> List Of Modules </h3>
<div class="bs-example widget-shadow">

<table class="table table-hover">
<tr>
		<th>Title</th>
		<th>Actions</th>
	</tr>
	<?php
	foreach($getCourse as $row){?>
		<tr>
			<td><?php echo $row['title'];?></td>
			<td> <a class="red" href="index.php?page=managecourse&eid=<?php echo $row['id'];?>"> Edit </a>|| <a class="red" href="index.php?page=managecourse&did=<?php echo $row['id'];?>"> Delete </a> </td>
		</tr>
		<?php }
		?>
	</table>
</div>


